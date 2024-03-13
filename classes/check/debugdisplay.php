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

defined('MOODLE_INTERNAL') || die();

use core\check\result;

/**
 *  Adds for the report_securityaudit plugin.
 *
 * @package     report_securityaudit
 * @copyright   2024, LMSwithAI <contact@lmswithai.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class debugdisplay extends \core\check\check {

    /**
     * A link to a place to action this
     *
     * @return action_link
     */
    public function get_action_link(): ?\action_link {
        return new \action_link(
            new \moodle_url('/admin/settings.php?section=debugging'),
            get_string('debugging', 'admin'));
    }

    /**
     * Return result
     * @return result
     */
    public function get_result(): result {


        if (get_config('core', 'debugdisplay')) {
            $status = result::WARNING;
            $summary = get_string('checkdebugdisplayerror', 'report_securityaudit');
        } else {
            $status = result::OK;
            $summary = get_string('checkdebugdisplayhok', 'report_securityaudit');
        }

        $details = get_string('checkdebugdisplaydetails', 'report_securityaudit');

        return new result($status, $summary, $details);
    }
}

