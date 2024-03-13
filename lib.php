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
 * @copyright   2024, LMSwithAI <contact@lmswithai.com>

 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();



/**
 * Add security check to make sure this isn't on in production.
 *
 * @return array check
 */
function report_securityaudit_securityaudit_checks() {

    return [
		new report_securityaudit\check\enablewebservices(),
		new report_securityaudit\check\cookiesecure(),
		new report_securityaudit\check\debug(),
		new report_securityaudit\check\debugdisplay(),
		new report_securityaudit\check\passwordexpiration(),
		new report_securityaudit\check\minpasswordlength(),
		new report_securityaudit\check\guestloginbutton(),
		new report_securityaudit\check\backup_auto_active(),
		new report_securityaudit\check\cron()
	];
}


/**
 * Display in standard security report?
 *
 * @return bolen true/false
 */
function report_securityaudit_display_in_security_checks() {

	$display = false;

	return $display;

}



/**
 * Add security check to make sure this isn't on in production.
 *
 * @return array check
 */
function report_securityaudit_security_checks() {

	if (report_securityaudit_display_in_security_checks()) {
		return report_securityaudit_securityaudit_checks();
	}

	return [];

}
