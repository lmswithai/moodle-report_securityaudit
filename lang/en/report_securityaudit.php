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
 * Plugin strings are defined here.
 *
 * @package     report_securityaudit
 * @copyright   2024, when2update.com <consultations@when2update.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Security audit report';
$string['securityaudit'] = 'Security audit';
$string['checkenablewebservices'] = 'Active web service protocols';
$string['checkenablewebserviceserror'] = 'Web services enabled. Disable if not needed.';
$string['checkenablewebserviceshok'] = 'Web services are disabled, which increases security.';
$string['checkenablewebservicesdetails'] = 'You can check <a href="{$a}">Active web service protocols</a> for verification.';
$string['checkcookiesecure'] = 'Secure cookies only';
$string['checkcookiesecureerror'] = 'If the server accepts https connections only: it is recommended to enable sending of secure cookies.';
$string['checkcookiesecurehok'] = 'Only secure cookies are enabled';
$string['checkcookiesecuredetails'] = 'According to the settings information.';
$string['checkdebug'] = 'Debug messages';
$string['checkdebugerror'] = 'A different option than <i>NONE: Do not show any errors or messages</i> is set.';
$string['checkdebughok'] = 'Set to <i>NONE: Do not show any errors or messages</i>.';
$string['checkdebugdetails'] = '';
$string['checkdebugdisplay'] = 'Display error messages';
$string['checkdebugdisplayerror'] = 'Displaying of error messages which will appear on HTML pages is enabled.';
$string['checkdebugdisplayhok'] = 'Display of error messages is disabled.';
$string['checkdebugdisplaydetails'] = '';
$string['checkpasswordexpiration'] = 'Enable password expiration for <i>auth_manual</i> authentication.';
$string['checkpasswordexpirationerror'] = 'Force a password change after a specified number of days after it was last updated for <i>auth_manual</i> authorization.';
$string['checkpasswordexpirationhok'] = 'Password expiration enabled.';
$string['checkpasswordexpirationdetails'] = '';
$string['checkminpasswordlength'] = 'Password length';
$string['checkminpasswordlengtherror'] = 'The password length is {$a}, the standard minimum is 8 characters.';
$string['checkminpasswordlengthhok'] = 'Password length meets the minimum.';
$string['checkminpasswordlengthdetails'] = '';
$string['checkguestloginbutton'] = 'Guest login button';
$string['checkguestloginbuttonerror'] = 'The guest login button on the login page is available.';
$string['checkguestloginbuttonhok'] = 'Guest login button hidden.';
$string['checkguestloginbuttondetails'] = '';
$string['checkbackup_auto_active'] = 'Course backups';
$string['checkbackup_auto_activeerror'] = 'No automatic or manual course backups are configured.';
$string['checkbackup_auto_activehok'] = 'Backups enabled. It is worth checking the correctness of their execution from time to time.';
$string['checkbackup_auto_activedetails'] = '';
$string['check_vuls'] = 'Known vulnerabilities';
$string['check_vulserror'] = 'Error reading Moodle version. Report to the plugin author.';
$string['check_vulsnosupporterror'] = 'This version of Moodle is no longer supported for security, an update to a newer version is recommended.';
$string['check_vulsfounderror'] = 'Found <span class="badge badge-danger">{$a}</span> vulnerabilities for this version of Moodle.';
$string['check_vulshok'] = 'At this moment, no vulnerabilities are reported for this version of Moodle.';
$string['check_vulsdetails'] = '<h2>Found vulnerabilities:</h2>';
$string['check_vulshunknown'] = 'Failed to establish a connection to the analysis server. Please try again later or do it manually on our website <a target="_blank" href="https://when2update.com">when2update.com</a>';
$string['vulnerabilitie'] = 'Vulnerability';
$string['cve'] = 'CVE';
$string['checkcron'] = 'Cron operation';
$string['checkcronerror'] = 'Cron is not operating correctly.';
$string['checkcronhok'] = 'Cron is operating.';
$string['checkcrondetails'] = '';
$string['btnbackas'] = 'Return to Site Administration';
$string['lastcheck'] = 'Last check:';
$string['logfailmodule'] = 'Number of errors from 7 days';
$string['overallmodule'] = 'Overall rating';
$string['envirolment'] = 'LMS Runtime Environment';
$string['accessoutside'] = 'Data accessible from outside';
$string['gdpr'] = 'GDPR';
$string['security'] = 'Security';
$string['usersaccount'] = 'User accounts';
$string['backups'] = 'Backups';
$string['notassigned'] = 'Not assigned';
$string['description'] = 'Description';
$string['action'] = 'Actions';
$string['status'] = 'Status';
$string['countfailed'] = 'Number of reported potential issues';
$string['countsuccess'] = 'Number of correct ones';
$string['nofail_title'] = 'Good!';
$string['nofail_desc'] = 'This area does not report problems.';
$string['critical'] = 'Critical';
$string['critical_desc'] = 'Deal with them quickly!';
$string['moderate'] = 'Moderate';
$string['moderate_desc'] = 'Familiarize yourself and decide.';
$string['info'] = 'Information';
$string['info_desc'] = 'Check when you have a moment...';
$string['normal'] = 'Normal';
$string['normal_desc'] = 'Very good.';
$string['unknown'] = 'Unknown';
$string['other'] = 'Other';
$string['quantity'] = 'Quantity';
$string['formlmswitaibtn'] = 'Report a bug / request help / new feature';
$string['securityaudit:view'] = 'View security audit report';
$string['vulnerabilities'] = 'Vulnerabilities';
$string['vulnerabilitie'] = 'Vulnerability';
$string['check_vuls'] = 'Known vulnerabilities';
$string['cve'] = 'CVE';

$string['checkvulnerabilities_moodle'] = 'Moodle security';
$string['check_vuls_error_moodle'] = 'Error reading Moodle version. Report to the plugin author.';
$string['check_vuls_nosupporterror_moodle'] = 'This version of Moodle is no longer supported for security, an update to a newer version is recommended.';
$string['check_vuls_founderror_moodle'] = 'Found <span class="badge badge-pill bg-danger">{$a}</span> vulnerabilities for this version of Moodle.';
$string['check_vuls_ok_moodle'] = 'At this moment, no vulnerabilities are reported for this version of Moodle.';
$string['check_vuls_details_moodle'] = '<h2>Found vulnerabilities:</h2>';
$string['check_vuls_hunknown_moodle'] = 'Failed to establish a connection to the analysis server. You can do this manually on our website <a target="_blank" href="https://when2update.com">when2update.com</a>';

$string['checkvulnerabilities_php'] = 'PHP security';
$string['check_vuls_error_php'] = 'Error reading PHP version. Report to the plugin author.';
$string['check_vuls_nosupporterror_php'] = 'This version of PHP is no longer supported for security, an update to a newer version is recommended.';
$string['check_vuls_founderror_php'] = 'Found <span class="badge badge-pill bg-danger">{$a}</span> vulnerabilities for this version of PHP.';
$string['check_vuls_ok_php'] = 'At this moment, no vulnerabilities are reported for this version of PHP.';
$string['check_vuls_unknown_php'] = 'Failed to establish a connection to the analysis server. You can do this manually on our website <a target="_blank" href="https://when2update.com">when2update.com</a>';

$string['checkvulnerabilities_db'] = 'Database security';
$string['check_vuls_error_db'] = 'Error reading database version. Report to the plugin author.';
$string['check_vuls_nosupporterror_db'] = 'This version of database is no longer supported for security, an update to a newer version is recommended.';
$string['check_vuls_founderror_db'] = 'Found <span class="badge badge-pill bg-danger">{$a}</span> vulnerabilities for this version of database.';
$string['check_vuls_ok_db'] = 'At this moment, no vulnerabilities are reported for this version of database.';
$string['check_vuls_unknown_db'] = 'Failed to establish a connection to the analysis server. You can do this manually on our website <a target="_blank" href="https://when2update.com">when2update.com</a>';

$string['checkw2a'] = 'Remote vulnerability check';
$string['checkw2a_desc'] = 'Check software vulnerabilities using <a href="https://when2update.com" target="_blank">when2update.com</a> (may increase report loading time due to communication with an external server).';
$string['setting'] = 'Settings';