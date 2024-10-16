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

$getdbvul = optional_param('dbvul', false, PARAM_BOOL);
$getphpvul = optional_param('phpvul', false, PARAM_BOOL);
$getmdlvul = optional_param('mdlvul', false, PARAM_BOOL);

admin_externalpage_setup('reportsecurity', '', null, '', ['pagelayout' => 'report']);

$sitecontext = context_system::instance();

$PAGE->set_context($sitecontext);
$url = '/report/securityaudit/index.php';
$PAGE->set_url($url, ['dbvul' => $getdbvul, 'phpvul' => $getphpvul, 'mdlvul' => $getmdlvul]);
$PAGE->set_pagelayout('embedded');

$detail = optional_param('detail', '', PARAM_TEXT);

$output = $PAGE->get_renderer('report_securityaudit');

$PAGE->blocks->show_only_fake_blocks();

$dashboard = new \report_securityaudit\output\dashboard('security', $url, $detail);

if (!empty($table->detail)) {
    $PAGE->set_docs_path($url . '?detail=' . $detail);
    $PAGE->navbar->add($table->detail->get_name());
}

$pluginmanager = \core_plugin_manager::instance();
$release = $pluginmanager->get_plugin_info('report_securityaudit')->release;

$dashboard->set_title(get_string('securityaudit', 'report_securityaudit') . ' ' . $release, 'pe-7s-graph2');
// Render.
echo $output->render($dashboard);
