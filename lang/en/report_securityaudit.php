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

$string['pluginname'] = 'NIS2 and GDPR Security Audit Report';
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
$string['btnbackas'] = 'Back to "Site Administration"';
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
$string['check_vuls_getdata'] = 'Download data for more information.';
$string['monitorcronlog'] = 'Checks for invalid logins are performed once a day according to the settings in the corn, by default at 1:00 am.';

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

$string['checkw2u'] = 'Remote vulnerability check';
$string['checkw2u_desc'] = 'Check software vulnerabilities using <a href="https://when2update.com" target="_blank">when2update.com</a> (may increase report loading time due to communication with an external server).';
$string['setting'] = 'Settings';
$string['checkadminhasmfa'] = 'Administrator accounts with MFA';
$string['checkadminhasmfanoenabled'] = 'The MFA plugin is not enabled.';
$string['checkadminhasmfaerror'] = 'Some administrators do not have MFA enabled.';
$string['checkadminhasmfahok'] = 'All administrative accounts have MFA enabled.';
$string['checkadminhasmfadetails'] = 'Consider enabling two-factor authentication for administrator accounts to enhance security.';
$string['checkadminhasmfainfo'] = 'For an administrator to disappear from the above list, they must log in at least once using MFA.';

$string['checkcleantext'] = 'Text cleaning';
$string['checkcleantexterror'] = 'You have the "Allow trusted content" setting enabled, which allows users to insert scripts that could pose security risks.<br>Ensure that this option is necessary.';
$string['checkcleantextok'] = '"Allow trusted content" is disabled.';
$string['checkcleantextdetails'] = 'You may also consider enabling the experimental "Clean content everywhere" feature for more stringent text cleaning.';

$string['securityaudit:monitor'] = 'View security audit monitor';
$string['securityaudit:nis'] = 'View NIS2 report';
$string['area'] = 'Area';
$string['versionfixed'] = 'Version fixed';
$string['recommended_minimum_update'] = 'Update the platform to at least version <strong>{$a}</strong> to eliminate the vulnerabilities listed below. If you want to address specific vulnerabilities only, update the e-learning platform to the version presented in the table or (if available) disable the relevant element to ensure security.';
$string['password_expire_stats'] = 'Password change statistics';
$string['auditpanel'] = 'Audit panel';
$string['requirementsnistwo'] = 'NIS2 requirements';
$string['monitoring'] = 'Monitoring';
$string['user_login_failed_stats'] = 'Failed login statistics';
$string['Incorrectlogins'] = 'Incorrect logins';
$string['monitor_title_failureslogin'] = 'Number of failed logins (30 days)';
$string['monitor_title_failureslogintop'] = 'Top 10 login issues (30 days)';
$string['checklogs'] = 'Check logs';
$string['tooltipfaillogs'] = 'Number of failed logins over 30 days';
$string['tooltipcheckbtn'] = 'Download information from the When2update.com server';
$string['nodata'] = 'No data';
$string['nointernallogerror'] = 'Monitoring of incorrect logins only supports the internal log database.';

$string['niscategory'] = 'Category';
$string['nisactions'] = 'Actions';
$string['nismethodofimplementation'] = 'Method of implementation';
$string['nisresult'] = 'Result';
$string['nisdocumentation'] = 'Documentation';
$string['nisconfigurationbyitdepartment'] = 'Configuration by the IT department';
$string['niscollaborationwithexternalcompany'] = 'Collaboration with an external company';
$string['nissecuritytraininginlms'] = 'Training - How to use the LMS safely?';
$string['nislmsandserverupdates'] = 'LMS and server updates';
$string['nisantivirusforlms'] = 'Antivirus for LMS';
$string['niswafforlms'] = 'WAF for LMS';
$string['nisenhancedmonitoringoflmsandserver'] = 'Enhanced monitoring of LMS and server';
$string['nissecurityauditandriskanalysis'] = '1. Security audit and risk analysis';
$string['nislmssoftwareaudit'] = 'LMS software audit: Commissioning an external audit that will assess the security level of the LMS and the server. This includes checking the server configuration, databases, backup systems, and user management.';
$string['nisauditreportidentifyingvulnerabilities'] = 'Audit report identifying vulnerabilities in the server and LMS platform and recommendations for remedial actions.';
$string['nisriskanalysis'] = 'Risk analysis: Identifying threats related to LMS hosting, unauthorized access to user data, such as vulnerability to DDoS attacks or malware.';
$string['nisassessmentofserverinfrastructure'] = 'Assessment of server infrastructure: Review of all server components (operating system, network, software) and their compliance with NIS2 requirements.';
$string['nisdevelopmentofsecuritypolicy'] = '2. Development of a security policy';
$string['nislmsandserversecuritypolicy'] = 'LMS and server security policy: Development of a comprehensive security policy covering the LMS platform, server, user data management, and access. This policy must specify standards regarding passwords, authorization, backups, and system monitoring.';
$string['nisapprovedsecuritypolicy'] = 'Approved security policy and incident management procedures in accordance with NIS2 requirements.';
$string['nisincidentmanagementprocedurecreation'] = 'Incident management procedure creation: Development and implementation of procedures for reporting and managing incidents related to cybersecurity (e.g. hacking attacks, data leaks).';
$string['nispreparationofriskmanagementplan'] = 'Preparation of a risk management plan: A document defining the principles of risk management, its identification and control, with particular emphasis on LMS user data.';
$string['nisserverandlmssecurityupgrades'] = '3. Server and LMS security upgrades';
$string['nisserverupdate'] = 'Server update: Installing the latest security patches for the server operating system and LMS software. Configuring firewall, intrusion detection systems (IDS/IPS) for the server, dedicated WAF for the e-learning platform (Web Application Firewall).';
$string['nisupdatedstrengthenedserver'] = 'Updated and strengthened server, increased security of the LMS platform, and improved data management mechanisms.';
$string['nisdataencryption'] = 'Data encryption: Implementing full data encryption transmitted between users and the server (SSL/TLS), as well as encrypting data stored on the server (in LMS databases).';
$string['nisdatabasesecurity'] = 'Database security: Additional security measures for the LMS database, such as protection against SQL injection, regular backups, database segmentation, antivirus software dedicated to LMS.';
$string['nismonitoringandlogging'] = 'Monitoring and logging: Implementation of tools for monitoring network traffic, logging user activity, and recording events at the server and LMS platform level, WAF dedicated to the e-learning platform (Web Application Firewall).';
$string['nistrainingofitstaffandusers'] = '4. Training of IT staff and users';
$string['nistrainingforusersoflms'] = 'Training for users of the LMS platform: Preparation of training programs for users (teachers, students, administration) covering safe use of the LMS, password protection, and best practices in cybersecurity.';
$string['nisincreasedcybersecurityawareness'] = 'Increased cybersecurity awareness among staff and users of the LMS platform.';
$string['nisincidentsimulationexercises'] = 'Incident simulation exercises: Organizing simulations of cyberattacks and incidents (e.g. phishing), so that IT staff and users can practice response procedures.';
$string['nistrainingforitteam'] = 'Training for the IT team: Specialized technical training in server management, security updates, and responding to cyber threats.';
$string['nissecuritytestingandnis2complianceaudit'] = '5. Security testing and NIS2 compliance audit';
$string['nisconductinginternalaudit'] = 'Conducting an internal audit to assess the institution\'s and IT infrastructure\'s compliance with NIS2 requirements.';
$string['niscompletedauditconfirmingcompliance'] = 'Completed audit confirming compliance with the NIS2 directive.';
$string['nispenetrationtesting'] = 'Penetration testing: Conducting penetration tests (e.g. OWASP Top 10) to check the effectiveness of the security measures implemented on the server and LMS platform. These tests aim to simulate potential attacks.';
$string['niscorrectionsandfixes'] = 'Corrections and fixes: Based on the results of tests and audits, making any necessary corrections, optimizing the security policy, and updating systems.';
$string['nismonitoringandcontinuousimprovement'] = '6. Monitoring and continuous improvement';
$string['niscontinuoussystemmonitoring'] = 'Continuous system monitoring: Regularly monitoring the server and LMS platform to detect and counter new threats. Monitoring logs, incidents, and network traffic.';
$string['nisfullcompliancewithnis2'] = 'Full compliance with NIS2 requirements and maintaining continuous updates and security monitoring.';
$string['nisregularsecurityupdates'] = 'Regular security updates: Continuing the periodic uploading of updates for the server, LMS software, and all security tools.';
$string['nissecuritypolicyreviews'] = 'Security policy reviews: Regular reviews and updates of the security policy at least once a year, taking into account new threats and legal changes.';
$string['niscollaborationwithnationalcenter'] = 'Collaboration with the national center responsible for implementing and monitoring the NIS2 directive: Continuing collaboration with incident response teams to respond to incidents and exchange information.';
