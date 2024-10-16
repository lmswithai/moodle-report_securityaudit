<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Plugin administration pages are defined here.
 *
 * @package     report_securityaudit
 * @category    admin
 * @copyright   2024, LMSwithAI <contact@lmswithai.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace report_securityaudit\task;

require_once($CFG->dirroot.'/report/securityaudit/locallib.php');

use stdClass;

/**
 * Change style scheduled task.
 */
class user_login_failed_stats extends \core\task\scheduled_task {

    /**
     * Return the task's name as shown in admin screens.
     *
     * @return string
     */
    public function get_name() {
        return get_string('user_login_failed_stats', 'report_securityaudit');
    }

    /**
     * Execute the task.
     */
    public function execute() {
        global $DB;

        $yesterdaydate = strtotime('yesterday');
        $date = date('Y-m-d', $yesterdaydate);

        if (!$DB->record_exists('report_securityaudit_lfd', ['logdate' => $date])) {

            $logs = report_securityaudit_report_log_faillogin_yesterday();
            $sumfails = count($logs);

            $count = $DB->count_records('report_securityaudit_lfd');

            mtrace("Failed logins $date: $count");

            if ($count >= 30) {
                $oldest = $DB->get_record_sql("SELECT id FROM {report_securityaudit_lfd} ORDER BY logdate ASC LIMIT 1");
                $DB->delete_records('report_securityaudit_lfd', ['id' => $oldest->id]);
            }

            $record = new stdClass();
            $record->logdate = $date;
            $record->loginfailures = $sumfails;
            $data = [];
            foreach ($logs as $log) {
                if (!isset($data[$log->userid])) {
                    $data[$log->userid] = 0;
                }
                $data[$log->userid] += 1;
            }
            $record->users = json_encode($data);

            $DB->insert_record('report_securityaudit_lfd', $record);

        }
    }
}
