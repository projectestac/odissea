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
 * CLI tool to upgrade default permissions for tiny/cloze:use capability.
 *
 * Place this file in the plugin's `cli/` directory and run from the shell.
 *
 * @package    tiny_cloze
 * @copyright  2026 Stephan Robotta <stephan.robotta@bfh.ch>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

define('CLI_SCRIPT', true);

// Bring in config and adminlib.
require_once(dirname(__DIR__, 7) . '/config.php');
require_once($CFG->libdir . '/adminlib.php');
require_once($CFG->libdir . '/clilib.php');

global $USER;

// Parse CLI options. --force will override checks that detect manual changes.
[$options, $unrecognized] = cli_get_params(['force' => false, 'help' => false], ['f' => 'force', 'h' => 'help']);
if ($options['help']) {
    echo "Usage: php upgrade_permissions.php [--force]\n\n";
    echo "Options:\n  --force, -f    Force applying permission changes even if defaults were modified.\n";
    exit(0);
}

$capability = new \tiny_cloze\capability();

echo 'Upgrading default permissions for capability: ' . \tiny_cloze\capability::CAPABILITY_USE . PHP_EOL;

$roles = $capability->get_roles();
if (empty($roles)) {
    echo "No matching roles found. Exiting.\n";
    exit(1);
}

if ($capability->is_modified_since_install()) {
    if (empty($options['force'])) {
        echo "Default capabilities have been changed since installation, do not upgrade.\n";
        echo "Re-run with --force to override.\n";
        exit(1);
    } else {
        echo "Warning: defaults were modified since installation — forcing upgrade due to --force.\n";
    }
}

// Ensure we have an admin user as modifier.
$admin = get_admin();
$USER = $admin;

$res = $capability->update_role_permissions();
foreach ($res->log as $log) {
    echo $log . PHP_EOL;
}
echo "Done. Total roles changed: {$res->changed}\n";
