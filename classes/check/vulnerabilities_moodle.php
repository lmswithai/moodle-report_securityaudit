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
class vulnerabilities_moodle extends \core\check\check {

    /**
     * A link to a place to action this
     *
     * @return action_link
     */
    public function get_action_link(): ?\action_link {
        return new \action_link(
            new \moodle_url('/admin/index.php?cache=1'),
            get_string('notifications', 'admin'));
    }

    /**
     * Return result
     * @return result
     */
    public function get_result(): result {
        global $CFG;

        $getmdlvul = optional_param('mdlvul', false, PARAM_BOOL);

        if ($getmdlvul) {

            $summaryvunl = 0;
            $pattern = '/^(\d+(\.\d+)?(\.\d+)?)/';
            if (preg_match($pattern, $CFG->release, $matches)) {
                $versionmdl = $matches[1];

                $accesskey = '';

                $url = 'https://when2update.lmswithai.com/api';
                $curl = new \curl();
                $curl->setopt(['CURLOPT_TIMEOUT' => 2, 'CURLOPT_CONNECTTIMEOUT' => 2]);
                $response = $curl->get($url, ['type' => 'moodle', 'version' => $versionmdl, 'accesskey' => $accesskey]);
                $checkdata = json_decode($response);
                $supportsecirity = isset($checkdata->support) ? clean_param($checkdata->support, PARAM_INT) : 0;
                $registered = isset($checkdata->registered) ? clean_param($checkdata->registered, PARAM_INT) : 0;

                if (!empty($supportsecirity) && $supportsecirity == 1) {

                    if (isset($checkdata->vulnerabilities) && count($checkdata->vulnerabilities) > 0) {

                        $summaryvunl = count($checkdata->vulnerabilities);
                        $status = result::ERROR;
                        $summary = get_string('check_vuls_founderror_moodle', 'report_securityaudit', $summaryvunl);

                        if (isset($checkdata->minimalupdateto)) {
                            $minimalupdateto = clean_param($checkdata->minimalupdateto, PARAM_TEXT);
                        } else {
                            $minimalupdateto = '';
                        }

                        if ($minimalupdateto) {
                            $summary .= '<br>';
                            $summary .= get_string('recommended_minimum_update', 'report_securityaudit', $minimalupdateto);
                        }

                    } else if (isset($checkdata->vulnerabilities) && count($checkdata->vulnerabilities) == 0) {
                        $status = result::OK;
                        $summary = get_string('check_vuls_ok_moodle', 'report_securityaudit');
                    }
                } else {
                    $status = result::ERROR;
                    $summary = get_string('check_vuls_nosupporterror_moodle', 'report_securityaudit');
                }
            } else {

                $status = result::UNKNOWN;
                $summary = get_string('check_vuls_error_moodle', 'report_securityaudit');

            }

            $details = '';

            if ($summaryvunl > 0) {

                $details .= \html_writer::start_tag('table', ['class' => 'table']);

                $tr = \html_writer::tag('th ', get_string('cve', 'report_securityaudit'), ['scope' => 'col']);
                $tr .= \html_writer::tag('th ', get_string('vulnerabilitie', 'report_securityaudit'), ['scope' => 'col']);
                if ($registered) {
                    $tr .= \html_writer::tag('th ', get_string('area', 'report_securityaudit'), ['scope' => 'col']);
                    $tr .= \html_writer::tag('th ', get_string('versionfixed', 'report_securityaudit'), ['scope' => 'col']);
                }
                $thead = \html_writer::tag('tr', $tr);
                $details .= \html_writer::tag('thead', $thead);
                $details .= \html_writer::start_tag('tbody');

                foreach ($checkdata->vulnerabilities as $vuln) {
                    $cve = isset($vuln->cve) ? clean_param($vuln->cve, PARAM_TEXT) : '';
                    $severity = isset($vuln->cve) ? clean_param($vuln->issue, PARAM_TEXT) : '';
                    $area = isset($vuln->area) ? clean_param($vuln->area, PARAM_TEXT) : '';
                    $fixed = isset($vuln->fixed) ? clean_param($vuln->fixed, PARAM_TEXT) : '';

                    $tr = \html_writer::tag('td', $cve);
                    $tr .= \html_writer::tag('td', $severity);
                    if ($registered) {
                        if ($area) {
                            $tr .= \html_writer::tag('td', $area);
                        } else {
                            $tr .= \html_writer::tag('td', '');
                        }
                        if ($fixed) {
                            $tr .= \html_writer::tag('td', $fixed);
                        } else {
                            $tr .= \html_writer::tag('td', '');
                        }
                    }
                    $row = \html_writer::tag('tr', $tr);
                    $details .= $row;
                }

                $details .= \html_writer::end_tag('tbody');
                $details .= \html_writer::end_tag('table');
            }

        } else {
            $status = result::UNKNOWN;
            $summary = get_string('check_vuls_getdata', 'report_securityaudit');
            $details = '';
        }

        return new result($status, $summary, $details);
    }
}

