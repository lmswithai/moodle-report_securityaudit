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
 * Plugin functions for the report_securityaudit plugin.
 *
 * @package     report_securityaudit
 * @copyright   2025, when2update.lmswithai.com <consultations@when2update.lmswithai.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


/**
 * Check is log internal. Current only support.
 *
 * @return bool true/false.
 */
function report_securityaudit_report_log_is_internal() {
    $logmanager = get_log_manager();
    $readers = $logmanager->get_readers();
    if (empty($logreader)) {
        $reader = reset($readers);
    } else {
        $reader = $readers[$logreader];
    }

    if (!($reader instanceof \core\log\sql_internal_table_reader)) {
        return false;
    }

    return true;
}

/**
 * Return fail login in yesterday.
 *
 * @return array logis event user_login_failed.
 */
function report_securityaudit_report_log_faillogin_yesterday() {
    global $DB;
    $logmanager = get_log_manager();
    $readers = $logmanager->get_readers();
    if (empty($logreader)) {
        $reader = reset($readers);
    } else {
        $reader = $readers[$logreader];
    }

    // If reader is not a sql_internal_table_reader.
    if (!($reader instanceof \core\log\sql_internal_table_reader)) {
        return [];
    }

    $today = time();
    $yesterdaystart = strtotime("yesterday", $today);
    $yesterdayend = strtotime("today", $today) - 1;

    $logtable = $reader->get_internal_log_table_name();
    $nonanonymous = 'AND anonymous = 0';

    $eventname = '\\core\\event\\user_login_failed';
    $params = [
        'eventname' => $eventname,
        'yesterdaystart' => $yesterdaystart,
        'yesterdayend' => $yesterdayend,
        ];

    return $DB->get_records_sql("SELECT *
                                FROM {" . $logtable . "}
                                WHERE timecreated BETWEEN :yesterdaystart AND :yesterdayend
                                AND eventname = :eventname AND userid != 0 $nonanonymous", $params);
}
