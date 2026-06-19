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
 * This file keeps track of upgrades to the tiny_cloze plugin.
 *
 * @package   tiny_cloze
 * @copyright 2026 Stephan Robotta <stephan.robotta@bfh.ch>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Execute tiny_cloze upgrade from the given old version.
 *
 * @param int $oldversion
 *
 * @return bool
 */
function xmldb_tiny_cloze_upgrade($oldversion): bool {

    if ($oldversion < 2026052900) {
        tiny_cloze_upgrade_verbose('Upgrading default permissions for capability: ' . \tiny_cloze\capability::CAPABILITY_USE);
        tiny_cloze_upgrade_default_permissions();
        upgrade_plugin_savepoint(true, 2026052900, 'tiny', 'cloze');
    }
    return true;
}

/**
 * Update permissions.
 */
function tiny_cloze_upgrade_default_permissions(): void {
    $capability = new \tiny_cloze\capability();
    $roles = $capability->get_roles();
    if (empty($roles)) {
        tiny_cloze_upgrade_verbose('No matching roles found. Exiting.');
        return;
    }

    if ($capability->is_modified_since_install()) {
        tiny_cloze_upgrade_verbose('Default capabilities have been changed since installation, do not upgrade.');
        return;
    }

    $res = $capability->update_role_permissions();
    foreach ($res->log as $log) {
        tiny_cloze_upgrade_verbose($log);
    }
    tiny_cloze_upgrade_verbose("Done. Total roles changed: {$res->changed}");
}

/**
 * Output upgrade messages.
 * @param string $msg
 */
function tiny_cloze_upgrade_verbose(string $msg): void {
    if (php_sapi_name() === 'cli') {
        echo $msg . PHP_EOL;
        return;
    }
    echo str_replace("\n", '<br/>', $msg) . '<br/>';
}
