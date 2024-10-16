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

use plugin_renderer_base;
use html_writer;
use moodle_url;

/**
 * The renderer for the report securityaudit.
 *
 * @copyright   2024, when2update.com <consultations@when2update.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class renderer extends plugin_renderer_base {

    /**
     * Retunr favicon.
     *
     * @return void
     */
    public function favicon() {
        return new \moodle_url('/report/securityaudit/pix/favicon.ico');
    }

    public function load_render_base_data($data) {
        global $SITE, $CFG;

        $sitename = format_string($SITE->fullname);
        $backtomdl = new \moodle_url('/admin/search.php#linkreports');

        $data->build = format_string($CFG->release);
        $data->sitename = $sitename;
        $data->backurl = $backtomdl->out();

        return $data;

    }

    /**
     * Load all js library.
     *
     * @return array library links.
     */
    public function load_js() {

        $output = [];

        $jss = [
        'jquery-3.7.1.min.js' => false,
        'base.js' => false,
        'bootstrap.bundle.min.js' => false,
        'chart.umd.js' => false,
        'countUp.umd.js' => false,
        'toastr.min.js' => false];

        foreach ($jss as $js => $module) {

            $jshref = new moodle_url('/report/securityaudit/js/' . $js);
            $output[] = ['url' => $jshref->out(), 'module' => $module];
        }

        return $output;
    }

    /**
     * Load all css library.
     *
     * @return array library links.
     */
    public function load_css() {

        $output = [];

        $csss = ['dashboard.css', 'animate.min.css', 'animate.compat.css', 'custom.css'];

        foreach ($csss as $css) {

            $csshref = new moodle_url('/report/securityaudit/styles/' . $css);
            $output[] = ['url' => $csshref->out()];
        }

        return $output;
    }


    public function sidebar_elements($element) {

        $sidebar = [
            [
                'icon' => 'pe-7s-display1',
                'title' =>  get_string('securityaudit', 'report_securityaudit'),
                'url' => new moodle_url('/report/securityaudit/index.php'),
                'active' => false
            ],
            [
                'icon' => 'pe-7s-door-lock',
                'title' =>  get_string('requirementsnistwo', 'report_securityaudit'),
                'url' => new moodle_url('/report/securityaudit/nis.php'),
                'active' => false
            ],
            [
                'icon' => 'pe-7s-graph2',
                'title' =>  get_string('monitoring', 'report_securityaudit'),
                'url' => new moodle_url('/report/securityaudit/monitor.php'),
                'active' => false
            ]
        ];

        if ($element) {

            switch ($element) {
                case 'dashboard':
                    $element = 0;
                    break;
                case 'nis':
                    $element = 1;
                    break;
                case 'monitor':
                    $element = 2;
                    break;
            }

            $sidebar[$element]['active'] = true;
        }

        return $sidebar;
    }

}
