<?php
// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 *  Adds for the report_securityaudit plugin.
 *
 * @package     report_securityaudit
 * @copyright   2024, LMSwithAI <contact@lmswithai.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace report_securityaudit\check;

use core\check\result;
use html_writer;
use tool_mfa\plugininfo\factor;
/**
 *  Adds for the report_securityaudit plugin.
 *
 * @package    report_securityaudit
 * @copyright  2024, LMSwithAI <contact@lmswithai.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class adminhasmfa extends \core\check\check {

    /**
     * A link to a place to action this
     *
     * @return action_link
     */
    public function get_action_link(): ?\action_link {
        return new \action_link(
            new \moodle_url('/admin/category.php?category=toolmfafolder'),
            get_string('pluginname', 'tool_mfa'));
    }

    /**
     * Return result
     * @return result
     */
    public function get_result(): result {
        global $DB, $CFG;

        // If no enable renturn.
        if (!get_config('tool_mfa', 'enabled')) {
            $status = result::INFO;
            $details = get_string('checkadminhasmfadetails', 'report_securityaudit');
            $summary = get_string('checkadminhasmfanoenabled', 'report_securityaudit');
            return new result($status, $summary, $details);
        }


        $sql = "SELECT u.id, u.firstname, u.lastname, u.email FROM {user} u WHERE u.id IN ($CFG->siteadmins)";

        $admins = $DB->get_records_sql($sql);
        $adminsnomfas = [];
        $active = false;
        $factors = factor::get_enabled_factors();

        foreach ($admins as $uid => $adminuser) {
            foreach ($factors as $factor) {
                $userfactors = $factor->get_active_user_factors($adminuser);
                $active = !empty($userfactors) ?? false;
            }

            if (!$active) {
                $adminsnomfas[$uid] = $adminuser;
            }
        }

        if (!empty($adminsnomfas)) {
            $status = result::INFO;
            $summary = get_string('checkadminhasmfaerror', 'report_securityaudit');
            $summary .= html_writer::tag('ul', implode('', array_map(function ($user) {
                return html_writer::tag('li', $user->firstname . ' ' . $user->lastname . ' (' . $user->email . ')');
            }, $adminsnomfas)));

        } else {
            $status = result::OK;
            $summary = get_string('ccheckadminhasmfaok', 'report_securityaudit');
        }

        $details = get_string('checkadminhasmfadetails', 'report_securityaudit');

        return new result($status, $summary, $details);
    }
}

