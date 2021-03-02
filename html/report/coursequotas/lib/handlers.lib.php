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
 * Remove course from coursequotas_coursesize when the course is removed
 *
 * @param $params
 * @return bool
 * @throws dml_exception
 */
function report_coursequotas_coursedeleted_handler($params): bool {
    global $DB, $CFG;

    include_once($CFG->dirroot . '/report/coursequotas/constants.php');

    if (!isset($params->objectid) || empty($params->objectid)) {
        return false;
    }

    $courseid = intval($params->objectid);

    return $DB->delete_records(COURSESIZE_TABLENAME, [COURSESIZE_FIELDCOURSEID => $courseid]);
}

/**
 * Remove category from coursequotas_catsize when the category is removed
 *
 * @param $params
 * @return bool
 * @throws dml_exception
 */
function report_coursequotas_categorydeleted_handler($params): bool {
    global $DB, $CFG;

    include_once($CFG->dirroot . '/report/coursequotas/constants.php');

    if (!isset($params->objectid) || empty($params->objectid)) {
        return false;
    }

    $categoryid = intval($params->objectid);

    return $DB->delete_records(CATEGORYSIZE_TABLENAME, [CATEGORYSIZE_FIELDCATEGORYID => $categoryid]);
}
