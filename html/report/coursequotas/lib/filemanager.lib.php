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
 * Returns a list of files filtered.
 *
 * @param string $filename Filename to filter (LIKE).
 * @param null $userid User owner to filter.
 * @param null $contextid Context to filter
 * @param boolean $addchildren Add children of the context.
 * @param null $filearea Filearea to filter
 * @param null $component Component to filter.
 * @param integer $size Size (less or more to filter).
 * @param integer $sizeselected 0 if more than, 1 if less than (size).
 * @param boolean $showonlybackups Show only backup files.
 * @param boolean $hidesamehash Hide same hash files (only show one file per hash). It will cause warnings.
 * @param string $sort Sort by field.
 * @param string $direction Direction to sort by.
 * @param integer $from From which record return
 * @param integer $limitnum Limit number of records.
 * @return Object                   Object containing: files, count of files, filesize (disk usage), total (total sum
 *     of files).
 * @throws coding_exception
 * @throws dml_exception
 */
function get_filtered_files($filename = '', $userid = null, $contextid = null, $addchildren = false, $filearea = null,
                            $component = null, $size = 0, $sizeselected = 0, $showonlybackups = false, $hidesamehash = false, $sort = 'filename',
                            $direction = 'ASC', $from = 0, $limitnum = 100) {
    global $DB;

    $tables = '{files} f';
    $filter = ["f.filename != '.'"];

    if (!empty($filename)) {
        $filter[] = "f.filename LIKE '%$filename%'";
    }

    if ($userid) {
        $filter[] = 'f.userid = ' . $userid;
    }

    if ($contextid) {
        if ($addchildren) {
            $ctxt = context::instance_by_id($contextid);
            $filter[] = "((f.contextid = c.id AND c.path LIKE '$ctxt->path/%') OR f.contextid = $contextid )";
            $tables .= ', {context} c';
        } else {
            $filter[] = 'f.contextid = ' . $contextid;
        }
    }

    if ($filearea) {
        $filter[] = "f.filearea = '$filearea'";
    }

    if ($component) {
        $filter[] = "f.component = '$component'";
    }

    if ($showonlybackups) {
        $filter[] = get_backup_where_sql();
    }

    if ($size > 0) {
        $size *= 1024 * 1024;
        if ($sizeselected == 0) {
            $filter[] = "f.filesize >= $size";
        } else if ($sizeselected == 1) {
            $filter[] = "f.filesize <= $size";
        }
    }

    $availablesorts = ['filename', 'filearea', 'component', 'filesize'];
    if (!in_array($sort, $availablesorts)) {
        $sort = 'filename';
    }
    $direction = strtolower($direction) == 'desc' ? 'DESC' : 'ASC';

    $where = implode(' AND ', $filter);
    $record = new \stdClass();

    if ($hidesamehash) {
        $distinct = 'DISTINCT f.contenthash, f.id';
    } else {
        $distinct = 'DISTINCT f.id, f.contenthash';
    }
    $sql = "SELECT $distinct, f.filename, f.userid, f.contextid, f.filearea, f.component, f.filesize, f.pathnamehash, f.filepath, f.mimetype, f.timemodified FROM $tables WHERE $where ORDER BY f.$sort $direction";

    $record->files = @$DB->get_records_sql($sql, null, $from, $limitnum);

    if ($hidesamehash) {
        $sql = "SELECT count(DISTINCT f.contenthash) FROM $tables WHERE $where";
    } else {
        $sql = "SELECT count(DISTINCT f.id) FROM $tables WHERE $where";
    }
    $record->count = $DB->count_records_sql($sql);

    $sql = "SELECT sum(total) as total FROM (SELECT DISTINCT (f.contenthash), f.filesize as total FROM $tables WHERE $where) t";
    $size = $DB->get_field_sql($sql);
    $record->filesize = $size ? $size : 0;

    if ($hidesamehash) {
        $record->total = $record->filesize;
    } else {
        $sql = "SELECT sum(total) AS total FROM (SELECT DISTINCT (f.id), f.filesize as total FROM $tables WHERE $where) t";
        $size = $DB->get_field_sql($sql);
        $record->total = $size ? $size : 0;
    }

    return $record;
}

/**
 * Get files by contenthash
 *
 * @param string $hash Hash of the content to filter.
 * @param string $sort Sort by field.
 * @param string $direction Direction to sort by.
 * @param integer $from From which record return
 * @param integer $limitnum Limit number of records.
 * @return Object             Object containing: files, count of files, filesize (disk usage) = total (total sum of
 *     files).
 * @throws dml_exception
 */
function get_contenthash_files($hash, $sort = 'filename', $direction = 'ASC', $from = 0, $limitnum = 100) {
    global $DB;

    $where = "f.contenthash = '$hash'";

    $availablesorts = ['filename', 'filearea', 'component', 'filesize'];
    if (!in_array($sort, $availablesorts)) {
        $sort = 'filename';
    }
    $direction = strtolower($direction) == 'desc' ? 'DESC' : 'ASC';

    $record = new \stdClass();
    $sql = "SELECT DISTINCT (f.id), f.filename, f.userid, f.contextid, f.filearea, f.component, f.filesize, f.contenthash, f.pathnamehash, f.filepath, f.mimetype, f.timemodified FROM {files} f WHERE $where ORDER BY f.$sort $direction";
    $record->files = $DB->get_records_sql($sql, null, $from, $limitnum);

    $sql = "SELECT count(DISTINCT f.id) FROM {files} f WHERE $where";
    $record->count = $DB->count_records_sql($sql);

    $sql = "SELECT sum(total) AS total FROM (SELECT DISTINCT (f.id), f.filesize as total FROM {files} f WHERE $where) t";
    $size = $DB->get_field_sql($sql);
    $record->total = $size ? $size : 0;

    $sql = "SELECT sum(total) as total FROM (SELECT DISTINCT (f.contenthash), f.filesize as total FROM {files} f WHERE $where) t";
    $size = $DB->get_field_sql($sql);
    $record->filesize = $size ? $size : 0;

    return $record;
}

/**
 * Get all options to filter for.
 *
 * @param int $searchedcontext Contextid where we're searching.
 * @return object               Filters.
 * @throws coding_exception
 * @throws dml_exception
 */
function get_all_filter_options($searchedcontext) {
    global $DB;

    $filters = new \stdClass();
    $users = $DB->get_records_sql('SELECT DISTINCT userid, firstname, lastname FROM {files} f, {user} u  WHERE f.userid = u.id ORDER BY lastname');
    $filters->users = [];

    foreach ($users as $userid => $user) {
        $filters->users[$userid] = $user->firstname . ' ' . $user->lastname;
    }

    $contexts = $DB->get_records_sql('SELECT DISTINCT contextid FROM {files} ORDER BY contextid');
    $filters->contexts = [];

    foreach ($contexts as $contextid => $context) {
        $filecontext = context::instance_by_id($contextid);
        if ($filecontext->contextlevel == CONTEXT_COURSE) {
            $filters->contexts[$contextid] = $filecontext->get_context_name();
        }
    }

    if ($searchedcontext && !isset($filters->contexts[$searchedcontext])) {
        $filecontext = context::instance_by_id($searchedcontext);
        $filters->contexts[$searchedcontext] = $filecontext->get_context_name();
    }

    $filters->fileareas = $DB->get_records_sql_menu('SELECT DISTINCT filearea AS f, filearea FROM {files} ORDER BY filearea');
    $filters->components = $DB->get_records_sql_menu('SELECT DISTINCT component AS c, component FROM {files} ORDER BY component');

    return $filters;
}
