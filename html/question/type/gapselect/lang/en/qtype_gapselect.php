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
 * Language strings for the gap-select question type.
 *
 * @package    qtype_gapselect
 * @copyright  2011 The Open University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['addmorechoiceblanks'] = 'Blanks for {no} more choices';
$string['answer'] = 'Answer';
$string['blanknumber'] = 'Blank {$a}';
$string['choices'] = 'Choices';
$string['choicex'] = 'Choice [[{no}]]';
$string['combinedcontrolnamegapselect'] = 'drop-down menu';
$string['combinedcontrolnamegapselectplural'] = 'drop-down menus';
$string['correctansweris'] = 'The correct answer is: {$a}';
$string['errorblankchoice'] = 'Please check the choices: Choice {$a} is empty.';
$string['errormissingchoice'] = 'Please check the question text: {$a} was not found in the choices! Only numbers with choice answers specified are allowed to be used as placeholders.';
$string['errornoslots'] = 'The question text must contain placeholders like [[1]] to show where the missing words go.';
$string['errorquestiontextblank'] = 'You must enter some question text.';
$string['group'] = 'Group';
$string['pleaseputananswerineachbox'] = 'Please put an answer in each box.';
$string['pluginname'] = 'Select missing words';
$string['pluginname_help'] = 'Select missing words questions require the respondent to select correct answers from drop-down menus. [[1]], [[2]], [[3]], ... are used as placeholders in the question text, with the correct answers specified as choice answers 1, 2, 3, ... respectively. Extra choice answers may be added to make the question harder. Choice answers may be grouped to restrict answers available in each drop-down menu.';
$string['pluginname_link'] = 'question/type/gapselect';
$string['pluginnameadding'] = 'Adding a select missing words question';
$string['pluginnameediting'] = 'Editing a select missing words question';
$string['pluginnamesummary'] = 'Missing words in the question text are filled in using drop-down menus.';
$string['privacy:metadata'] = 'Select missing words question type plugin allows question authors to set default options as user preferences.';
$string['privacy:preference:defaultmark'] = 'The default mark set for a given question.';
$string['privacy:preference:penalty'] = 'The penalty for each incorrect try when questions are run using the \'Interactive with multiple tries\' or \'Adaptive mode\' behaviour.';
$string['privacy:preference:shuffleanswers'] = 'Whether the answers should be automatically shuffled.';
$string['regradeissuenumchoiceschanged'] = 'The number of choices in group {$a} changed.';
$string['regradeissuenumgroupsschanged'] = 'The number of groups of choices has changed.';
$string['shuffle'] = 'Shuffle';
$string['tagsnotallowed'] = '{$a->tag} is not allowed. (Only {$a->allowed} are permitted.)';
$string['tagsnotallowedatall'] = '{$a->tag} is not allowed. (No HTML is allowed here.)';
