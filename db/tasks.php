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
 * Definition of report_securityaudit tasks.
 *
 * @package     report_securityaudit
 * @category    task
 * @copyright   2025, when2update.lmswithai.com <consultations@when2update.lmswithai.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die();
$tasks = [
    [
        'classname' => 'report_securityaudit\task\user_login_failed_stats',
        'blocking' => 0,
        'minute' => '*',
        'hour' => '1',
        'day' => '*',
        'month' => '*',
        'dayofweek' => '*',
    ],
];
