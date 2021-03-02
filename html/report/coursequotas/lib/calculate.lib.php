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
// along with Moodle. If not, see <http://www.gnu.org/licenses/>.

/**
 * Coursequotas report
 *
 * @package    report
 * @subpackage coursequotas
 * @copyright  2012 Agora Development Team (https://github.com/projectestac/agora)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Conditions to be considered a backup file
 *
 * @return string
 */
function get_backup_where_sql(): string {
    return "((f.component = 'backup' AND (f.filearea = 'activity' OR f.filearea = 'course' OR f.filearea = 'automated')) OR (f.component = 'user' AND f.filearea = 'backup'))";
}

/**
 * Sum all files from a given context and its children.
 *
 * @param Object $context Containing path and instanceid.
 * @param int $block_size
 * @return int             Sum of all total bytes of context.
 * @throws dml_exception
 */
function report_coursequotas_get_contextsize(object $context, int $block_size): int {
    $path = $context->path;
    $contextid = $context->id;

    // Calculate size of all the files inside the course avoiding duplicates.
    return get_coursequotas_filesize("(f.contextid = c.id AND c.path like '$path/%') OR f.contextid = $contextid", "{context} c", $block_size);
}

/**
 * Get the sum of all filesize on a SQL from filesizes avoiding duplicates.
 *
 * @param string $where where SQL on file table.
 * @param string $tables Additional tables to check.
 * @param int $block_size
 * @return int            Sum of Bytes.
 * @throws dml_exception
 */
function get_coursequotas_filesize(string $where = '', string $tables = '', $block_size = 4096): int {
    global $DB;

    if (!empty($tables)) {
        $tables = ', ' . $tables;
    }

    $where = 'WHERE ' . $where . ' AND filename != \'.\'';
    $sql = "SELECT SUM($block_size * ((total + $block_size - 1) / $block_size)) as total FROM (
       SELECT DISTINCT f.contenthash, f.filesize as total FROM {files} f $tables $where) t";

    $size = $DB->get_field_sql($sql);

    return $size ? $size : 0;
}

