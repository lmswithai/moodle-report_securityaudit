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
 * Verifies unsupported noauth setting
 *
 * @package     report_securityaudit
 * @copyright   2025, when2update.lmswithai.com <consultations@when2update.lmswithai.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace report_securityaudit\check;

use core\check\result;

/**
 * Verifies unsupported noauth setting
 *
 * @package     report_securityaudit
 * @copyright   2025, when2update.lmswithai.com <consultations@when2update.lmswithai.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class vulnerabilities_db extends \core\check\check {

    /**
     * A link to a place to action this
     *
     * @return action_link
     */
    public function get_action_link(): ?\action_link {
        return new \action_link(
            new \moodle_url('/admin/environment.php'),
            get_string('environment', 'admin'));
    }

    /**
     * Return result
     * @return result
     */
    public function get_result(): result {
        global $CFG;

        $getdbvul = optional_param('dbvul', false, PARAM_BOOL);

        if ($getdbvul) {

            // Get the PHP version.
            $version = '';
            $summaryvunl = 0;
            require_once($CFG->libdir.'/environmentlib.php');
            require("$CFG->dirroot/version.php");

            list($envstatus, $environmentresults) = check_moodle_environment(normalize_version($release), ENV_SELECT_RELEASE);

            if ($envstatus) {
                foreach ($environmentresults as $environmentresult) {
                    $type = $environmentresult->getPart();
                    if ($type == 'database') {

                        $versiondb = $environmentresult->getCurrentVersion();

                        $info = $environmentresult->getInfo();
                        $dbtype = 'unknown';

                        if (stripos($info, 'mysql') !== false) {
                            $dbtype = 'mysql';
                        } else if (stripos($info, 'mariadb') !== false) {
                            $dbtype = 'mariadb';
                        } else if (stripos($info, 'postgres') !== false) {
                            $dbtype = 'postgresql';
                        }

                        break;
                    }
                }
            }

            $apicomunctation = false;

            if (preg_match('/^\d+(\.\d+)*$/', $versiondb) && $dbtype != 'unknown') {
                $url = 'https://when2update.lmswithai.com/wp-json/report-securityaudit-api/v1/calculate';
                $curl = new \curl();
                $curl->setopt(['CURLOPT_TIMEOUT' => 3, 'CURLOPT_CONNECTTIMEOUT' => 3]);
                $response = $curl->get($url, ['type' => $dbtype, 'version' => $versiondb]);
                $checkdata = json_decode($response);
                $totalnvd = isset($checkdata->totalnvd) ? clean_param($checkdata->totalnvd, PARAM_INT) : null;
                $needupdate = isset($checkdata->needupdate) ? clean_param($checkdata->needupdate, PARAM_BOOL) : null;

                if (is_int($totalnvd) && (is_int($needupdate))) {

                    if ($totalnvd > 0) {
                        $summaryvunl = $totalnvd;
                        $status = result::ERROR;
                        $summary = get_string('check_vuls_founderror_db', 'report_securityaudit', $summaryvunl);
                    } else {

                        if (!$needupdate) {
                            $status = result::OK;
                            $summary = get_string('check_vuls_ok_db', 'report_securityaudit');
                        } else {
                            $status = result::ERROR;
                            $summary = get_string('check_vuls_nosupporterror_db', 'report_securityaudit');
                        }
                    }
                    $apicomunctation = true;

                }

                if (!$apicomunctation) {
                    $status = result::UNKNOWN;
                    $summary = get_string('check_vuls_unknown_db', 'report_securityaudit');
                }
            } else {
                $status = result::UNKNOWN;
                $summary = get_string('check_vuls_error_db', 'report_securityaudit');
            }

        } else {
            $status = result::UNKNOWN;
            $summary = get_string('check_vuls_getdata', 'report_securityaudit');
        }

        $details = '';

        return new result($status, $summary, $details);
    }
}

