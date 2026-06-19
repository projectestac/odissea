<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'local_customgradingform_renderer', language 'en', version '4.5'.
 *
 * @package     local_customgradingform_renderer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['choosecsvfile'] = 'Choose CSV file';
$string['csvinvalidcharsfound'] = 'Fields expect comma-separated values without invalid characters. Do not include double quotes ("), extra commas (,), or semicolons (;) inside fields.';
$string['csvinvalidcharslist_simple'] = 'Lines with issues:';
$string['csvlineonly'] = 'Line {$a}';
$string['csvmissingcolumns'] = 'CSV file must contain columns: criterion, level, level_description, and score.';
$string['csvrequired'] = 'You must select a valid CSV file.';
$string['customgradingform_renderer:import'] = 'Allows the user to import grading rubrics from a CSV file into an activity.';
$string['enablemaxlevelscore'] = 'Enable maximum score validation.';
$string['enablemaxlevelscore_desc'] = 'If enabled, the system will validate that no level exceeds the configured maximum value.';
$string['enableminlevelscore'] = 'Enable minimum score validation.';
$string['enableminlevelscore_desc'] = 'If enabled, the system will validate that at least one level has the configured minimum score.';
$string['errormaxexceeded'] = '⚠️ Error: Score {$a->score} in criterion {$a->criterion} exceeds the maximum allowed of {$a->max}.';
$string['errorminmissing'] = '⚠️ Error: Criterion {$a->criterion} does not contain the minimum allowed score of {$a->min}.';
$string['errormismatchtotal'] = '⚠️ Error: The sum of highest levels is {$a->sum}, but the activity maximum grade is {$a->grademax}.';
$string['errorrepeatedscores'] = '⚠️ Error: Criterion {$a} has repeated level scores. Each level must have a unique score.';
$string['errorrubricexists'] = '⚠️ A rubric is already defined for this activity. You cannot import another one.';
$string['fileopenerror'] = 'Failed to open the CSV file.';
$string['importedrubricname'] = 'Imported Rubric ({$a})';
$string['importerror'] = 'An error occurred while importing the rubric.';
$string['importfromcsv'] = 'Import rubric from CSV';
$string['importsuccess'] = 'Rubric imported successfully.';
$string['invalidcsvformat'] = 'Invalid CSV format. Only text-based .csv files are allowed.';
$string['maxlevelscore'] = 'Maximum score per level';
$string['maxlevelscore_desc'] = 'Defines the maximum allowed score for each evaluation level within a criterion. If any level in the CSV file exceeds this value, an error will be shown during import.';
$string['minlevelscore'] = 'Minimum score per level';
$string['minlevelscore_desc'] = 'Minimum allowed score for a level. Typically this is 0.';
$string['pluginname'] = 'Rubric Importer Core';
$string['privacy:metadata'] = 'This plugin does not store any personal user data.';
$string['rubricalreadydefined'] = '⚠️ A rubric is already defined for this activity. Importing a new one is not allowed.';
$string['submitcsv'] = 'Import rubric.';
