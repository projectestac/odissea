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
 * @copyright  2012 onwards Agora Development Team (https://github.com/projectestac/agora)
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

    // Calculate size of all the files inside the context (course, category...) avoiding duplicates.
    return get_coursequotas_filesize_join("c.path like '$path/%' OR f.contextid = $contextid", '{context} c', 'f.contextid = c.id', $block_size);
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

    return $size ? : 0;
}

/**
 * Get the sum of all filesize on a SQL from filesizes avoiding duplicates. This is the version
 * using join, which is far more efficient (really important with huge tables)
 *
 * @param string $where
 * @param string $join
 * @param string $join_condition
 * @param int $block_size
 * @return int
 * @throws dml_exception
 */
function get_coursequotas_filesize_join(string $where = '', string $join = '', string $join_condition = '', $block_size = 4096): int {
    global $DB;

    $where = 'WHERE ' . $where . ' AND filename != \'.\'';

    $sql = "SELECT SUM($block_size * ((total + $block_size - 1) / $block_size)) AS total 
            FROM (
                SELECT DISTINCT f.contenthash, f.filesize AS total 
                FROM {files} f
                LEFT JOIN $join ON $join_condition
                $where
                ) t";

    $size = $DB->get_field_sql($sql);

    return $size ? : 0;
}

/**
 * Return the absolute path to temp directory
 *
 * @return string
 */
function get_temp_dir(): string {
    global $CFG;
    return $CFG->tempdir ?? $CFG->dataroot . '/temp';
}

/**
 * Return the absolute path to trash directory
 *
 * @return bool|string
 */
function get_trash_dir(): string {
    global $CFG;
    return $CFG->trashdir ?? $CFG->dataroot . '/trashdir';
}

/**
 * Get the system block size. Block size is the allocation unit of space in the file system. So if the block size
 * is 4096, that means that a file of 1 byte, uses 4096 bytes in the file system.
 *
 * @return int System block size
 */
function get_block_size(): int {
    $tempfile = get_temp_dir() . '/test.txt';
    file_put_contents($tempfile, REPORT_COMPONENTNAME);

    return (int)exec('du ' . $tempfile . " | awk '{print $1}'") * 1024;
}

/**
 * Performs an INSERT or UPDATE operation in a given table
 *
 * @param $context
 * @param $table
 * @param $id_field
 * @param $quota_field
 * @param $id
 * @param $block_size
 * @return int
 * @throws dml_exception
 */
function insert_or_update_coursequotas_size($context, $table, $id_field, $quota_field, $id, $block_size): int {
    global $DB;

    $size = report_coursequotas_get_contextsize($context, $block_size);

    // Update or insert record
    $data_object = $DB->get_record($table, [$id_field => $id], '*', IGNORE_MULTIPLE);

    if ($data_object) {
        $data_object->{$quota_field} = $size;
        $DB->update_record($table, $data_object);
    } else {
        $data_object = new \stdClass();
        $data_object->{$id_field} = $id;
        $data_object->{$quota_field} = $size;
        $DB->insert_record($table, $data_object);
    }

    return $size;
}

/**
 * Builds a query to get the total size of the files in all the courses
 *
 * @return string
 * @throws dml_exception
 */
function get_coursequotas_all_courses_usage_query(): string {
    global $DB;

    $syscontext = \context_system::instance();
    $params = [$syscontext->depth + 1, CONTEXT_COURSECAT, $syscontext->path . '/%'];

    $sql = "SELECT id, path
        FROM {context}
        WHERE depth = ? AND contextlevel = ? AND path LIKE ?";
    $contexts = $DB->get_records_sql_menu($sql, $params);

    $sitecourse = $DB->get_field('course', 'id', ['category' => 0]);
    $context = \context_course::instance($sitecourse);
    $contexts[$context->id] = $context->path;

    $sqlparts = [];
    foreach ($contexts as $contexid => $path) {
        $sqlparts[] = "(f.contextid = c.id AND c.path LIKE '$path/%')";
    }
    $sqlparts[] = 'f.contextid IN (' . implode(',', array_keys($contexts)) . ')';

    $sql = implode(' OR ', $sqlparts);

    // Exclude backup files
    return "($sql) AND (f.component != 'backup' OR (f.filearea != 'activity' AND f.filearea != 'course' AND f.filearea != 'automated'))";
}

/**
 * Builds an array with the information to query files table to get usage information of several concepts
 *
 * @return array
 * @throws dml_exception
 */
function get_coursequotas_queries_info(): array {
    return [
        [
            REPORT_COURSEQUOTAS_WHERE_STRING => get_coursequotas_all_courses_usage_query(),
            REPORT_COURSEQUOTAS_TABLES_STRING => '{context} c',
            REPORT_COURSEQUOTAS_CONFIGNAME_STRING => 'course_usage',
        ],
        [
            REPORT_COURSEQUOTAS_WHERE_STRING => "component = 'user' AND filearea != 'backup'",
            REPORT_COURSEQUOTAS_TABLES_STRING => '',
            REPORT_COURSEQUOTAS_CONFIGNAME_STRING => 'user_usage',
        ],
        [
            REPORT_COURSEQUOTAS_WHERE_STRING => "(f.component = 'mod_hvp' AND f.filearea = 'libraries') OR (f.component = 'core_h5p' AND f.filearea = 'libraries')",
            REPORT_COURSEQUOTAS_TABLES_STRING => '',
            REPORT_COURSEQUOTAS_CONFIGNAME_STRING => 'h5plib_usage',
        ],
    ];
}

/**
 * Builds an array with the information to check directories to get usage information of several concepts
 *
 * @return array
 */
function get_coursequotas_directories_info(): array {
    global $CFG;

    return [
        [
            REPORT_COURSEQUOTAS_DIRECTORY_STRING => $CFG->dataroot . '/repository/',
            REPORT_COURSEQUOTAS_CONFIGNAME_STRING => 'repositories_usage',
        ],
        [
            REPORT_COURSEQUOTAS_DIRECTORY_STRING => get_temp_dir(),
            REPORT_COURSEQUOTAS_CONFIGNAME_STRING => 'tempdir_usage',
        ],
        [
            REPORT_COURSEQUOTAS_DIRECTORY_STRING => get_trash_dir(),
            REPORT_COURSEQUOTAS_CONFIGNAME_STRING => 'trashdir_usage',
        ],
    ];
}
