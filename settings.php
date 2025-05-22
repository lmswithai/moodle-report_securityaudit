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
 * Settings and links
 *
 * @package     report_securityaudit
 * @copyright   2025, when2update.lmswithai.com <consultations@when2update.lmswithai.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    $settings->add(new admin_setting_heading('report_securityaudit/settings', '', ''));
    $settings->add(new admin_setting_configcheckbox('report_securityaudit/checkw2u',
                    get_string('checkw2u', 'report_securityaudit'),
                    get_string('checkw2u_desc', 'report_securityaudit'), 1));
}

$ADMIN->add('reports', new admin_externalpage('reportsecurityaudit_report', get_string('securityaudit', 'report_securityaudit'),
"$CFG->wwwroot/report/securityaudit/index.php", 'report/securityaudit:view'));
