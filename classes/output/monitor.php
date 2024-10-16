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
 * A table of check results
 *
 * @package     report_securityaudit
 * @copyright   2024, when2update.com <consultations@when2update.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace report_securityaudit\output;

use moodle_url;
use action_link;
use renderable;
use renderer_base;
use templatable;
use stdClass;

/**
 * A table of check results
 *
 * @package     report_securityaudit
 * @copyright   2024, when2update.com <consultations@when2update.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class monitor implements renderable, templatable {

    /**
     * @var string $title page title
     */
    protected $title = '';

    /**
     * @var string $icon page icon
     */
    protected $icon = '';

    /**
     * @var array $toptenloginsfailed top 10 login failed.
     */
    protected $toptenloginsfailed = [];

    /**
     * __construct.
     *
     * @param  string $type
     * @param  string $url
     * @param  string $detail
     */
    public function __construct() {


    }

    /**
     * Set title.
     *
     * @param  string title.
     * @return string title.
     */
    public function set_title($string, $icon) {
        $this->title = $string;
        $this->icon = $icon;
    }

    private function daily_login_failures() {
        global $DB;

        $data = [];
        $loginsfailed = [];

        $logs = $DB->get_records('report_securityaudit_lfd');

        foreach ($logs as $log) {
            $data[] = [
                'date' => $log->logdate,
                'failures' => $log->loginfailures,
            ];

            $users = json_decode($log->users, true);

            foreach ($users as $userid => $failed) {
                $userid = intval($userid);
                $failed = intval($failed);

                if (!isset($loginsfailed[$userid])) {
                    $loginsfailed[$userid] = 0;
                }
                $loginsfailed[$userid] += $failed;
            }
        }

        arsort($loginsfailed);
        $toptenloginsfailed = array_slice($loginsfailed, 0, 10, true);

        $this->toptenloginsfailed = $toptenloginsfailed;

        return $data;

    }

    /**
     * Export this data so it can be used as the context for a mustache template.
     *
     * @return stdClass
     */
    public function export_for_template(renderer_base $output): stdClass {
        global $PAGE;

        $renderer = $PAGE->get_renderer('report_securityaudit');
        $data = new stdClass();


        $data->base['title'] = $this->title;
        $data->base['headcss'] = $renderer->load_css();
        $data->base['headjs'] = $renderer->load_js();
        $data->favicon = $renderer->favicon();


        $data->loginternal = !report_securityaudit_report_log_is_internal();

        $data->pagetitle = $data->base['title'];
        $data->pageicon = $this->icon;

        $dailylog = $this->daily_login_failures();
        $data->failuresloginshow = is_array($dailylog) && count($dailylog) > 0;

        $charjs = new \moodle_url('/report/securityaudit/js/failureslogin.js');
        $data->failureslogin = ['url' => $charjs->out(),
                                'datafailureslogin' => json_encode($dailylog),
                                'strings' => json_encode(['incorrectlogins' => get_string( 'Incorrectlogins', 'report_securityaudit')])];


        foreach ($this->toptenloginsfailed as $userid => $failed) {
            $user = \core_user::get_user($userid);

            if (empty($user)) {
                continue;
            }

            $logurl = new moodle_url('/report/log/index.php', [
            'chooselog' => 1,
            'showusers' => 0,
            'showcourses' => 0,
            'id' => 1,
            'user' => $user->id,
            'date' => '',
            'modid' => 'site_errors',
            'modaction' => 'r',
            'origin' => 'web',
            'edulevel' => 0,
            'logreader' => 'logstore_standard',]);

            $data->failureslogintop[] = [
                'fullname' => fullname($user),
                'failedlogin' => $failed,
                'logurl' => $logurl];
        }

        $data = $renderer->load_render_base_data($data);

        $data->sidebar = $renderer->sidebar_elements('monitor');

        return $data;
    }
}
