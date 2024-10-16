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
 * Security audit overview report
 *
 * @package     report_securityaudit
 * @copyright   2024, when2update.com <consultations@when2update.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

define('NO_OUTPUT_BUFFERING', true);

require('../../config.php');
require_once($CFG->libdir.'/adminlib.php');
require_once($CFG->dirroot.'/report/securityaudit/lib.php');

$sitecontext = context_system::instance();
$PAGE->set_context($sitecontext);
$url = '/report/securityaudit/nis.php';
$PAGE->set_url($url);
$PAGE->set_pagelayout('embedded');

require_login();
require_capability('report/securityaudit:nis', $sitecontext);


$output = $PAGE->get_renderer('report_securityaudit');

$PAGE->blocks->show_only_fake_blocks();

$nis = new \report_securityaudit\output\nis();

$nis->set_title(get_string('requirementsnistwo', 'report_securityaudit'), 'pe-7s-door-lock');
// Render.
echo $output->render($nis);
