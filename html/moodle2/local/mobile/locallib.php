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
 * Local library file for local_mobile.
 *
 * @package    local_mobile
 * @copyright  2014 Juan Leyva <juan@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


/**
 * Returns grading information for one or more activities, optionally with user grades
 * Manual, course or category items can not be queried.
 * This is a fixed version of the grade_get_grades Moodle 2.7 function
 *
 * @category grade
 * @param int    $courseid ID of course
 * @param string $itemtype Type of grade item. For example, 'mod' or 'block'
 * @param string $itemmodule More specific then $itemtype. For example, 'forum' or 'quiz'. May be NULL for some item types
 * @param int    $iteminstance ID of the item module
 * @param mixed  $userid_or_ids Either a single user ID, an array of user IDs or null. If user ID or IDs are not supplied returns information about grade_item
 * @return array Array of grade information objects (scaleid, name, grade and locked status, etc.) indexed with itemnumbers
 */
function local_mobile_grade_get_grades($courseid, $itemtype = null, $itemmodule = null, $iteminstance = null, $userid_or_ids=null) {
    global $CFG;

    $return = new stdClass();
    $return->items    = array();
    $return->outcomes = array();

    $course_item = grade_item::fetch_course_item($courseid);
    $needsupdate = array();
    if ($course_item->needsupdate) {
        $result = grade_regrade_final_grades($courseid);
        if ($result !== true) {
            $needsupdate = array_keys($result);
        }
    }

    $params = array('courseid' => $courseid);
    if (!empty($itemtype)) {
        $params['itemtype'] = $itemtype;
    }
    if (!empty($itemmodule)) {
        $params['itemmodule'] = $itemmodule;
    }
    if (!empty($iteminstance)) {
        $params['iteminstance'] = $iteminstance;
    }
    if ($grade_items = grade_item::fetch_all($params)) {
        foreach ($grade_items as $grade_item) {
            $decimalpoints = null;

            if (empty($grade_item->outcomeid)) {
                // prepare information about grade item
                $item = new stdClass();
                $item->id = $grade_item->id;
                $item->itemnumber = $grade_item->itemnumber;
                $item->itemtype  = $grade_item->itemtype;
                $item->itemmodule = $grade_item->itemmodule;
                $item->iteminstance = $grade_item->iteminstance;
                $item->scaleid    = $grade_item->scaleid;
                $item->name       = $grade_item->get_name();
                $item->grademin   = $grade_item->grademin;
                $item->grademax   = $grade_item->grademax;
                $item->gradepass  = $grade_item->gradepass;
                $item->locked     = $grade_item->is_locked();
                $item->hidden     = $grade_item->is_hidden();
                $item->grades     = array();

                switch ($grade_item->gradetype) {
                    case GRADE_TYPE_NONE:
                        continue;

                    case GRADE_TYPE_VALUE:
                        $item->scaleid = 0;
                        break;

                    case GRADE_TYPE_TEXT:
                        $item->scaleid   = 0;
                        $item->grademin   = 0;
                        $item->grademax   = 0;
                        $item->gradepass  = 0;
                        break;
                }

                if (empty($userid_or_ids)) {
                    $userids = array();

                } else if (is_array($userid_or_ids)) {
                    $userids = $userid_or_ids;

                } else {
                    $userids = array($userid_or_ids);
                }

                if ($userids) {
                    $grade_grades = grade_grade::fetch_users_grades($grade_item, $userids, true);
                    foreach ($userids as $userid) {
                        $grade_grades[$userid]->grade_item =& $grade_item;

                        $grade = new stdClass();
                        $grade->grade          = $grade_grades[$userid]->finalgrade;
                        $grade->locked         = $grade_grades[$userid]->is_locked();
                        $grade->hidden         = $grade_grades[$userid]->is_hidden();
                        $grade->overridden     = $grade_grades[$userid]->overridden;
                        $grade->feedback       = $grade_grades[$userid]->feedback;
                        $grade->feedbackformat = $grade_grades[$userid]->feedbackformat;
                        $grade->usermodified   = $grade_grades[$userid]->usermodified;
                        $grade->datesubmitted  = $grade_grades[$userid]->get_datesubmitted();
                        $grade->dategraded     = $grade_grades[$userid]->get_dategraded();

                        // create text representation of grade
                        if ($grade_item->gradetype == GRADE_TYPE_TEXT or $grade_item->gradetype == GRADE_TYPE_NONE) {
                            $grade->grade          = null;
                            $grade->str_grade      = '-';
                            $grade->str_long_grade = $grade->str_grade;

                        } else if (in_array($grade_item->id, $needsupdate)) {
                            $grade->grade          = false;
                            $grade->str_grade      = get_string('error');
                            $grade->str_long_grade = $grade->str_grade;

                        } else if (is_null($grade->grade)) {
                            $grade->str_grade      = '-';
                            $grade->str_long_grade = $grade->str_grade;

                        } else {
                            $grade->str_grade = grade_format_gradevalue($grade->grade, $grade_item);
                            if ($grade_item->gradetype == GRADE_TYPE_SCALE or $grade_item->get_displaytype() != GRADE_DISPLAY_TYPE_REAL) {
                                $grade->str_long_grade = $grade->str_grade;
                            } else {
                                $a = new stdClass();
                                $a->grade = $grade->str_grade;
                                $a->max   = grade_format_gradevalue($grade_item->grademax, $grade_item);
                                $grade->str_long_grade = get_string('gradelong', 'grades', $a);
                            }
                        }

                        // create html representation of feedback
                        if (is_null($grade->feedback)) {
                            $grade->str_feedback = '';
                        } else {
                            $grade->str_feedback = format_text($grade->feedback, $grade->feedbackformat);
                        }

                        $item->grades[$userid] = $grade;
                    }
                }
                $return->items[$item->id] = $item;

            } else {
                if (!$grade_outcome = grade_outcome::fetch(array('id'=>$grade_item->outcomeid))) {
                    debugging('Incorect outcomeid found');
                    continue;
                }

                // outcome info
                $outcome = new stdClass();
                $outcome->id = $grade_item->id;
                $outcome->itemnumber = $grade_item->itemnumber;
                $outcome->itemtype   = $grade_item->itemtype;
                $outcome->itemmodule = $grade_item->itemmodule;
                $outcome->iteminstance = $grade_item->iteminstance;
                $outcome->scaleid    = $grade_outcome->scaleid;
                $outcome->name       = $grade_outcome->get_name();
                $outcome->locked     = $grade_item->is_locked();
                $outcome->hidden     = $grade_item->is_hidden();

                if (empty($userid_or_ids)) {
                    $userids = array();
                } else if (is_array($userid_or_ids)) {
                    $userids = $userid_or_ids;
                } else {
                    $userids = array($userid_or_ids);
                }

                if ($userids) {
                    $grade_grades = grade_grade::fetch_users_grades($grade_item, $userids, true);
                    foreach ($userids as $userid) {
                        $grade_grades[$userid]->grade_item =& $grade_item;

                        $grade = new stdClass();
                        $grade->grade          = $grade_grades[$userid]->finalgrade;
                        $grade->locked         = $grade_grades[$userid]->is_locked();
                        $grade->hidden         = $grade_grades[$userid]->is_hidden();
                        $grade->feedback       = $grade_grades[$userid]->feedback;
                        $grade->feedbackformat = $grade_grades[$userid]->feedbackformat;
                        $grade->usermodified   = $grade_grades[$userid]->usermodified;

                        // create text representation of grade
                        if (in_array($grade_item->id, $needsupdate)) {
                            $grade->grade     = false;
                            $grade->str_grade = get_string('error');

                        } else if (is_null($grade->grade)) {
                            $grade->grade = 0;
                            $grade->str_grade = get_string('nooutcome', 'grades');

                        } else {
                            $grade->grade = (int)$grade->grade;
                            $scale = $grade_item->load_scale();
                            $grade->str_grade = format_string($scale->scale_items[(int)$grade->grade-1]);
                        }

                        // create html representation of feedback
                        if (is_null($grade->feedback)) {
                            $grade->str_feedback = '';
                        } else {
                            $grade->str_feedback = format_text($grade->feedback, $grade->feedbackformat);
                        }

                        $outcome->grades[$userid] = $grade;
                    }
                }

                if (isset($return->outcomes[$grade_item->itemnumber])) {
                    // itemnumber duplicates - lets fix them!
                    $newnumber = $grade_item->itemnumber + 1;
                    while(grade_item::fetch(array('itemtype'=>$itemtype, 'itemmodule'=>$itemmodule, 'iteminstance'=>$iteminstance, 'courseid'=>$courseid, 'itemnumber'=>$newnumber))) {
                        $newnumber++;
                    }
                    $outcome->itemnumber    = $newnumber;
                    $grade_item->itemnumber = $newnumber;
                    $grade_item->update('system');
                }

                $return->outcomes[$outcome->id] = $outcome;

            }
        }
    }

    // sort results using itemnumbers
    ksort($return->items, SORT_NUMERIC);
    ksort($return->outcomes, SORT_NUMERIC);

    return $return;
}

/**
 * Get context from passed parameters.
 * The passed array must either contain a contextid or a combination of context level and instance id to fetch the context.
 * For example, the context level can be "course" and instanceid can be courseid.
 *
 * See context_helper::get_all_levels() for a list of valid context levels.
 *
 * @param array $param
 * @since Moodle 2.6
 * @throws invalid_parameter_exception
 * @return context
 */
function local_mobile_get_context_from_params($param) {
    $levels = context_helper::get_all_levels();
    if (isset($param['contextid'])) {
        return context::instance_by_id($param['contextid'], IGNORE_MISSING);
    } else if (isset($param['contextlevel']) && isset($param['instanceid'])) {
        $contextlevel = "context_".$param['contextlevel'];
        if (!array_search($contextlevel, $levels)) {
            throw new invalid_parameter_exception('Invalid context level = '.$param['contextlevel']);
        }
       return $contextlevel::instance($param['instanceid'], IGNORE_MISSING);
    } else {
        // No valid context info was found.
        throw new invalid_parameter_exception('Missing parameters, please provide either context level with instance id or contextid');
    }
}
