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
 * @copyright   2025, when2update.lmswithai.com <consultations@when2update.lmswithai.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace report_securityaudit\check;

use core\check\result;

/**
 *  Adds for the report_securityaudit plugin.
 *
 * @package     report_securityaudit
 * @copyright   2025, when2update.lmswithai.com <consultations@when2update.lmswithai.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class minpasswordlength extends \core\check\check {

    /**
     * A link to a place to action this
     *
     * @return action_link
     */
    public function get_action_link(): ?\action_link {
        return new \action_link(
            new \moodle_url('/admin/settings.php?section=sitepolicies#admin-minpasswordlength'),
            get_string('sitepolicies', 'admin'));
    }

    /**
     * Return result
     * @return result
     */
    public function get_result(): result {

        if (get_config('core', 'minpasswordlength') < 8) {
            $status = result::WARNING;

            $passwordlength = get_config('core', 'minpasswordlength');

            $summary = get_string('checkminpasswordlengtherror', 'report_securityaudit', $passwordlength);
        } else {
            $status = result::OK;
            $summary = get_string('checkminpasswordlengthhok', 'report_securityaudit');
        }

        $details = get_string('checkminpasswordlengthdetails', 'report_securityaudit');

        return new result($status, $summary, $details);
    }
}

