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
 * CAS authentication plugin upgrade code
 *
 * @package     report_securityaudit
 * @copyright   2025, when2update.lmswithai.com <consultations@when2update.lmswithai.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Function to upgrade auth_cas.
 * @param int $oldversion the version we are upgrading from
 * @return bool result
 */
function xmldb_report_securityaudit_upgrade($oldversion) {
    global $CFG, $DB;

    $dbman = $DB->get_manager(); // Loads ddl manager and xmldb classes.

    if ($oldversion < 2024101105) {

        // Define table report_securityaudit_lfd to be created.
        $table = new xmldb_table('report_securityaudit_lfd');

        // Adding fields to table report_securityaudit_lfd.
        $table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
        $table->add_field('logdate', XMLDB_TYPE_CHAR, '10', null, null, null, null);
        $table->add_field('loginfailures', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
        $table->add_field('users', XMLDB_TYPE_TEXT, null, null, null, null, null);

        // Adding keys to table report_securityaudit_lfd.
        $table->add_key('primary', XMLDB_KEY_PRIMARY, ['id']);

        // Adding indexes to table report_securityaudit_lfd.
        $table->add_index('logdate', XMLDB_INDEX_UNIQUE, ['logdate']);

        // Conditionally launch create table for report_securityaudit_lfd.
        if (!$dbman->table_exists($table)) {
            $dbman->create_table($table);
        }

        // Securityaudit savepoint reached.
        upgrade_plugin_savepoint(true, 2024101105, 'report', 'securityaudit');
    }

    return true;
}
