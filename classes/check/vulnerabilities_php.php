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
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
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
class vulnerabilities_php extends \core\check\check {

    /**
     * A link to a place to action this
     *
     * @return action_link
     */
    public function get_action_link(): ?\action_link {
        return new \action_link(
            new \moodle_url('/admin/phpinfo.php'),
            get_string('phpinfo', 'moodle'));
    }

    /**
     * Return result
     * @return result
     */
    public function get_result(): result {
        global $CFG;

        $getphpvul = optional_param('phpvul', false, PARAM_BOOL);

        if ($getphpvul) {

            // Get the PHP version.
            $version = '';
            $summaryvunl = 0;
            require_once($CFG->libdir.'/environmentlib.php');
            require("$CFG->dirroot/version.php");

            list($envstatus, $environmentresults) = check_moodle_environment(normalize_version($release), ENV_SELECT_RELEASE);

            if ($envstatus) {
                foreach ($environmentresults as $environmentresult) {
                    $type = $environmentresult->getPart();

                    if ($type == 'php') {
                        $versionphp = $environmentresult->getCurrentVersion();
                        break;
                    }
                }
            }

            $apicomunctation = false;

            if (preg_match('/^\d+(\.\d+)*$/', $versionphp)) {
                $url = 'https://when2update.lmswithai.com/wp-json/report-securityaudit-api/v1/calculate';
                $curl = new \curl();
                $curl->setopt(['CURLOPT_TIMEOUT' => 3, 'CURLOPT_CONNECTTIMEOUT' => 3]);
                $response = $curl->get($url, ['type' => 'php', 'version' => $versionphp]);
                $checkdata = json_decode($response);
                $totalnvd = isset($checkdata->totalnvd) ? clean_param($checkdata->totalnvd, PARAM_INT) : null;
                $needupdate = isset($checkdata->needupdate) ? clean_param($checkdata->needupdate, PARAM_BOOL) : null;

                if (is_int($totalnvd) && (is_int($needupdate))) {

                    if ($totalnvd > 0) {
                        $summaryvunl = $totalnvd;
                        $status = result::ERROR;
                        $summary = get_string('check_vuls_founderror_php', 'report_securityaudit', $summaryvunl);
                    } else {

                        if (!$needupdate) {
                            $status = result::OK;
                            $summary = get_string('check_vuls_ok_php', 'report_securityaudit');
                        } else {
                            $status = result::ERROR;
                            $summary = get_string('check_vuls_nosupporterror_php', 'report_securityaudit');
                        }
                    }
                    $apicomunctation = true;

                }

                if (!$apicomunctation) {
                    $status = result::UNKNOWN;
                    $summary = get_string('check_vuls_unknown_php', 'report_securityaudit');
                }
            } else {
                $status = result::UNKNOWN;
                $summary = get_string('check_vuls_error_php', 'report_securityaudit');
            }
        } else {
            $status = result::UNKNOWN;
            $summary = get_string('check_vuls_getdata', 'report_securityaudit');
        }

        $details = '';

        return new result($status, $summary, $details);
    }
}

