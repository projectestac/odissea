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
 * A repo for the search widget.
 *
 * @module    core_grades/searchwidget/repository
 * @copyright 2022 Mathew May <mathew.solutions>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

import ajax from 'core/ajax';

/**
 * Given a course ID, we want to fetch the enrolled learners, so we may fetch their reports.
 *
 * @method userFetch
 * @param {int} courseid ID of the course to fetch the users of.
 * @param {string} actionBaseUrl The base URL for the user option.
 * @param {int} groupId ID of the group to fetch the users of.
 * @return {object} jQuery promise
 */
export const userFetch = (courseid, actionBaseUrl, groupId) => {
    const request = {
        methodname: 'core_grades_get_enrolled_users_for_search_widget',
        args: {
            courseid: courseid,
            actionbaseurl: actionBaseUrl,
            groupid: groupId,
        },
    };
    return ajax.call([request])[0];
};

/**
 * Given a course ID, we want to fetch the groups, so we may fetch their users.
 *
 * @method groupFetch
 * @param {int} courseid ID of the course to fetch the users of.
 * @param {string} actionBaseUrl The base URL for the group action.
 * @return {object} jQuery promise
 */
export const groupFetch = (courseid, actionBaseUrl) => {
    const request = {
        methodname: 'core_grades_get_groups_for_search_widget',
        args: {
            courseid: courseid,
            actionbaseurl: actionBaseUrl,
        },
    };
    return ajax.call([request])[0];
};

/**
 * Given a course ID, we want to fetch the gradable items, so we may fetch reports based on activity items.
 * Note: This will be worked upon in the single view issue.
 *
 * @method gradeitemFetch
 * @param {int} courseid ID of the course to fetch the users of.
 * @return {object} jQuery promise
 */
export const gradeitemFetch = (courseid) => {
    const request = {
        methodname: 'gradereport_singleview_get_grade_items_for_search_widget',
        args: {
            courseid: courseid,
        },
    };
    return ajax.call([request])[0];
};
