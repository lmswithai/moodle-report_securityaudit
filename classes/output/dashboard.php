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
 * A table of check results
 *
 * @package     report_securityaudit
 * @copyright   2025, when2update.lmswithai.com <consultations@when2update.lmswithai.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace report_securityaudit\output;

use moodle_url;
use action_link;
use renderable;
use renderer_base;
use templatable;
use stdClass;

/**
 * A table of check results
 *
 * @package     report_securityaudit
 * @copyright   2025, when2update.lmswithai.com <consultations@when2update.lmswithai.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class dashboard implements renderable, templatable {

    /**
     * @var moodle_url $url
     */
    protected $url = '';

    /**
     * @var string $type What type of checks
     */
    protected $type = '';
    /**
     * @var string $title page title
     */
    protected $title = '';

    /**
     * @var check $detail a specific check to focus on
     */
    public $detail = '';

    /**
     * @var array $checks shown in this table
     */
    public $checks = [];

    /**
     * @var array $checks shown in this table
     */
    public $modal = [];


    /**
     * @var string $icon page icon
     */
    protected $icon = '';


    /**
     * __construct.
     *
     * @param  string $type
     * @param  string $url
     * @param  string $detail
     */
    public function __construct($type, $url, $detail = '') {

        // We may need a bit more memory and this may take a long time to process.
        \raise_memory_limit(MEMORY_EXTRA);
        \core_php_time_limit::raise();

        $this->type = $type;
        $this->url = $url;
        $this->checks = \core\check\manager::get_checks($type);
        $thisplugincheckes = [];

        if (!\report_securityaudit_display_in_security_checks()) {
            $thisplugincheckes = \report_securityaudit_securityaudit_checks();
        }

        foreach ($thisplugincheckes as $thisplugincheck) {
            $thisplugincheck->set_component('report_securityaudit');
            $this->checks[] = $thisplugincheck;
        }

        if ($detail) {
            $this->checks = array_filter($this->checks, function($check) use ($detail) {
                return $detail == $check->get_ref();
            });
            if (!empty($this->checks)) {
                $this->detail = reset($this->checks);
            }
        }

    }

    /**
     * Set title.
     *
     * @param  string title.
     * @return string title.
     */
    public function set_title($string, $icon) {
        $this->title = $string;
        $this->icon = $icon;
    }

    /**
     * Category.
     *
     * @return array.
     */
    private function load_module() {
        global $CFG;

        $module = [
            'envirolment' => [
                'core_displayerrors',
                'core_unsecuredataroot',
                'core_publicpaths',
                'core_configrw',
                'core_preventexecpath'],
            'accessoutside' => [
                'core_openprofiles',
                'core_crawlers',
                'report_securityaudit_debug',
                'report_securityaudit_debugdisplay'],
            'gdpr' => [
                'core_passwordpolicy',
                'core_emailchangeconfirmation',
                'report_securityaudit_minpasswordlength',
                'report_securityaudit_passwordexpiration'],
            'security' => [
                'core_cookiesecure',
                'auth_none_noauth',
                'report_securityaudit_enablewebservices',
                'report_securityaudit_cookiesecure',
                'report_securityaudit_cron',
                'core_embed',
                'core_webcron',
                'report_securityaudit_cleantext'],
            'usersaccount' => [
                'core_riskadmin',
                'core_riskxss',
                'core_defaultuserrole',
                'core_guestrole',
                'core_frontpagerole',
                'report_securityaudit_guestloginbutton'],
            'backups' => [
                'core_riskbackup',
                'report_securityaudit_backup_auto_active'],
            'vulnerabilities' => [
                'report_securityaudit_vulnerabilities_moodle',
                'report_securityaudit_vulnerabilities_php',
                'report_securityaudit_vulnerabilities_db'],
        ];

        // 4.3 MFA.
        if ($CFG->version >= 2023100900) {
            $module['usersaccount'][] = 'report_securityaudit_adminhasmfa';
        };

        return $module;
    }

    /**
     * Znajdowanie kategori elementu.
     *
     * @param  string $ref
     * @return string Category name
     */
    private function find_category($ref) {

        $category = $this->load_module();

        foreach ($category as $key => $value) {
            if (in_array($ref, $value)) {
                return $key;
            }
        }
        // Finalnie nie występuje w żadnej kategorii.
        // dodaj do not assigned.
        return 'notassigned';

    }

    /**
     * Category wireframe.
     *
     * @param  string $category - Category ref.
     * @return array category frame.
     */
    private function build_empty_category($category) {

        switch ($category) {
            case 'envirolment':
                $icon = 'fa-server';
                break;
            case 'accessoutside':
                $icon = 'fa-eye';
                break;
            case 'gdpr':
                $icon = 'fa-user-lock';
                break;
            case 'security':
                $icon = 'fa-shield-halved';
                break;
            case 'usersaccount':
                $icon = 'fa-user-graduate';
                break;
            case 'backups':
                $icon = 'fa-box-archive';
                break;
            case 'vulnerabilities':
                $icon = 'fa-bug';
                break;
            default:
                $icon = 'fa-bars';
                break;
        }

        if (!empty($category)) {
            $name = get_string($category, 'report_securityaudit');
        } else {
            $name  = '';
        }

        return [
            'name'          => $name,
            'icon'          => $icon,
            'success'       => 0,
            'failed'        => 0,
            'failedcolor'   => 'bg-happy-green',
            'critical'      => 0,
            'moderate'      => 0,
            'info'          => 0,
            'unknown'          => 0,
            'normal'        => 0,
            'checks'        => [],
        ];
    }

    /**
     * Build result frame.
     *
     * @param  string $category - Category ref.
     * @param  result $result - Check data.
     * @return array restuly frame.
     */
    private function build_check($check, $result) {
        global $PAGE;

        $ref = $check->get_ref();
        $result = $this->get_result_translation($result);

        switch ($ref) {
            case 'report_securityaudit_vulnerabilities_php':
                $button = ['downloadurl' => new moodle_url($PAGE->url, ['phpvul' => true])];
                break;
            case 'report_securityaudit_vulnerabilities_moodle':
                $button = ['downloadurl' => new moodle_url($PAGE->url, ['mdlvul' => true])];
                break;
            case 'report_securityaudit_vulnerabilities_db':
                $button = ['downloadurl' => new moodle_url($PAGE->url, ['dbvul' => true])];
                break;
            default:
                $button = '';
                break;
        }

        return [
            'status'            => $result,
            'statusname'        => get_string($result, 'report_securityaudit'),
            'name'              => $check->get_name(),
            'downloaddata'      => $button,
            'databstarget'      => 'checkdetails_' . $ref,
        ];
    }

    /**
     * Build modal window.
     *
     * @param  string $category - Category ref.
     * @param  result $result - Check data.
     * @return array restuly frame.
     */
    private function build_modal($check, $result) {

        $ref = $check->get_ref();
        $actionlink = $check->get_action_link();
        $summary = $result->get_summary();
        $details = $result->get_details();
        $status = $this->get_result_translation($result);
        $title = '';
        $link = '';
        if ($actionlink instanceof action_link) {
            $title = format_string($actionlink->text);
            $link = format_string($actionlink->url->out());
            $url = ['link' => $link, 'title' => $title];

        } else {
            $url = '';
        }

        return [
            'dataclass' => 'checkdetails_' . $ref,
            'name'      => format_string($check->get_name()),
            'statusname'    => get_string($status, 'report_securityaudit'),
            'status'    => $status,
            'url'       => $url,
            'summary'   => format_text($summary),
            'details'   => format_text($details),
        ];
    }

    /**
     * Status translate.
     *
     * @param  stdClass $category - Category ref.
     * @return array restuly frame.
     */
    private function get_result_translation($result) {

        $status = $result->get_status();
        switch ($status) {
            case \core\check\result::CRITICAL:
                return 'critical';
                break;
            case \core\check\result::ERROR:
                return 'critical';
                break;
            case \core\check\result::WARNING:
                return 'moderate';
                break;
            case \core\check\result::INFO:
                return 'info';
                break;
            case \core\check\result::OK:
                return 'normal';
                break;
            default:
                return 'unknown';
                break;
        }
    }


    /**
     * Create category.
     *
     * @return void
     */
    public function build_report() {

        $report = [];

        foreach ($this->checks as $check) {
            $result = $check->get_result();
            $category = $this->find_category($check->get_ref());

            // Jeśli jeszcze kategoria nie istnieje, to dodaj szablon.
            if (!array_key_exists($category, $report)) {
                $report[$category] = $this->build_empty_category($category);
            }

            $status = $result->get_status();

            // Dla prawidłowych nie dodawaj szczegółowych wyników.
            if ($status == \core\check\result::OK) {
                $report[$category]['success']++;
                $report[$category]['normal']++;
                continue;
            } else {
                $report[$category]['failed']++;

                $acceprstatus = ['critical', 'moderate', 'info', 'normal', 'unknown'];
                $status = $this->get_result_translation($result);
                if (in_array($status, $acceprstatus)) {
                    $report[$category][$status]++;
                }

                $report[$category]['checks'][] = $this->build_check($check, $result);
            }

            $this->modal[] = $this->build_modal($check, $result);
        }

        return $report;

    }

    /**
     * Summary counter.
     *
     * @param  array $modules
     * @return array $modules
     */
    private function summary_status($modules) {

        $acceprstatus = ['critical' => 0, 'moderate' => 0, 'info' => 0, 'normal' => 0, 'unknown' => 0];

        foreach ($modules as $module) {
            foreach ($acceprstatus as $key => $value) {
                $acceprstatus[$key] += $module[$key];
            }
        }
        return $acceprstatus;
    }

    /**
     * Set bug color in section.
     *
     * @param  array $modules
     * @return array $modules
     */
    private function color_section($modules) {

        foreach ($modules as $moduleid => $module) {
            if ($module['critical'] > 0) {
                $modules[$moduleid]['failedcolor'] = 'bg-danger';
            } else if ($module['moderate'] > 0) {
                $modules[$moduleid]['failedcolor'] = 'bg-warning';
            } else if ($module['info'] > 0) {
                $modules[$moduleid]['failedcolor'] = 'bg-info';
            } else if ($module['unknown'] > 0) {
                $modules[$moduleid]['failedcolor'] = 'bg-premium-dark';
            }
        }
        return $modules;
    }

    /**
     * Export this data so it can be used as the context for a mustache template.
     *
     * @return stdClass
     */
    public function export_for_template(renderer_base $output): stdClass {
        global $PAGE;

        $renderer = $PAGE->get_renderer('report_securityaudit');
        $data = new stdClass();

        $modules = $this->build_report();
        $modules = $this->color_section($modules);
        $summary = $this->summary_status($modules);
        $timecheck = userdate(time(), get_string('strftimedatetimeshort'));

        $data = $renderer->load_render_base_data($data);
        $data->modules = $modules;
        $data->summary = $summary;
        $data->timecheck = $timecheck;
        $success = $summary['normal'];
        $other = $summary['critical'] + $summary['moderate'];

        $charjs = new \moodle_url('/report/securityaudit/js/overallrating.js');
        $data->overallrating = [
                                    'url' => $charjs->out(),
                                    'dataoverallrating' => json_encode([
                                    'success' => $success,
                                    'other' => $other,
                                    'strnormal' => get_string('normal', 'report_securityaudit'),
                                    'strother' => get_string('other', 'report_securityaudit'),
                                    'strquantity' => get_string('quantity', 'report_securityaudit'), ]), ];
        $coutjs = new \moodle_url('/report/securityaudit/js/summary.js');
        $data->jssummary = [
            'url' => $coutjs->out(),
            'datasummary' => json_encode([
                'critical'  => $summary['critical'],
                'moderate'  => $summary['moderate'],
                'info'      => $summary['info'],
                'normal'    => $summary['normal'], ]),
        ];
        $data->modal = $this->modal;
        $data->base['title'] = $this->title;
        $data->base['headcss'] = $renderer->load_css();
        $data->base['headjs'] = $renderer->load_js();

        $setturl = new \moodle_url('/admin/settings.php?section=reportsecurityaudit');
        $data->setting = ['url' => $setturl];
        $data->favicon = $renderer->favicon();
        $data->sidebar = $renderer->sidebar_elements('dashboard');
        $data->pagetitle = $data->base['title'];
        $data->pageicon = $this->icon;

        return $data;
    }
}
