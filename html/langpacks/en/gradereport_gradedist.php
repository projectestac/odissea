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
 * Strings for component 'gradereport_gradedist', language 'en', version '4.5'.
 *
 * @package     gradereport_gradedist
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['a'] = '(absolute)';
$string['absolut'] = 'Absolute';
$string['actcoverage'] = 'Items not included by current letters:';
$string['actualcolumns'] = 'current grade letters';
$string['actualgrade'] = 'Grade (current)';
$string['boundaryerror'] = 'Some entries for new grade letters may be invalid. There must be input on each field';
$string['category'] = 'Gradecategory';
$string['changeletters'] = 'Save changed grade letters';
$string['chart'] = 'Chart';
$string['columns'] = 'Bars';
$string['confirm'] = 'Save changed grade letters';
$string['confirmationtableviewed'] = 'Confirmation table viewed';
$string['confirmationtableviewed_description'] = 'The user with id {$a->userid} viewed the grade distribution confirmation table.';
$string['contextbuttontitle'] = 'Chart context menu';
$string['coursesum'] = 'Sum for the course';
$string['coverage'] = 'The new grade distribution does not cover all grades!';
$string['coverage_export'] = 'Items not included by letters:';
$string['csv'] = 'csv';
$string['decimals'] = 'The lower boundary has to be a number from 0 to 100. Maximum two decimal places are allowed.';
$string['description'] = 'Labelling';
$string['download'] = 'Download';
$string['downloadjpeg'] = 'JPEG image';
$string['downloadpdf'] = 'PDF document';
$string['downloadpng'] = 'PNG image';
$string['downloadsvg'] = 'Download SVG vector image';
$string['export'] = 'Download data as';
$string['exportasimage'] = 'Download chart as';
$string['gradeboundary'] = 'Lower boundary in %';
$string['gradeboundary_help'] = 'The setting determines the minimum percentage over which grades will be assigned to the grade letter.';
$string['gradeboundary_new'] = 'New lower boundary in %';
$string['gradeboundary_new_help'] = 'You can see the effects of new lower boundaries on the distribution of grades. Lower boundaries have to be numbers with max. 2 decimal points.';
$string['gradedist:edit'] = 'Manage grade distribution';
$string['gradedist:view'] = 'View grade distribution';
$string['gradedistdownloaded'] = 'Current grade distribution downloaded';
$string['gradedistdownloaded_description'] = 'The user with id {$a->userid} downloaded the current grade distribution.';
$string['gradedistviewed'] = 'Grade distribution viewed';
$string['gradedistviewed_description'] = 'The user with id {$a->userid} viewed the grade distribution.';
$string['gradeitem'] = 'Grading column';
$string['gradeletter'] = 'Grade letters';
$string['highchartsmissing'] = 'To view the diagram download version 4.x of the Highcharts library from <a href="http://code.highcharts.com/">http://code.highcharts.com/</a>. Copy both together, the core module highcharts.src.js and the exporting.src.js module, or alternatively if you prefer their minified versions highcharts.js and exporting.js respectively, into the directory moodleroot/grade/report/gradedist/js.';
$string['interval'] = 'The lower boundary has to be in between 0 and 100.';
$string['labelgroup'] = 'Focus view on group';
$string['labelgrouping'] = 'Focus view on grouping';
$string['newcolumns'] = 'new grade letters';
$string['newcoverage'] = 'Items not included by new letters:';
$string['newgrade'] = 'Grade (new)';
$string['newletterssubmitted'] = 'New grade letters submitted';
$string['newletterssubmitted_description'] = 'The user with id {$a->userid} submitted the new grade letters.';
$string['nogroupingentry'] = 'No grouping';
$string['notification'] = 'Note: The definition of grade letters applies to all grade items in the course.';
$string['ods'] = 'ods';
$string['p'] = '(%)';
$string['percent'] = 'Percent';
$string['pluginname'] = 'Grade distribution';
$string['pluginname_help'] = 'This report shows the distribution of grades over a particular grade item depending on the lower bounds defined for the grade letters. The preview functionality allows you to see immediately how changes to the lower boundaries of grade letters affect the grade distribution. If you are satisfied with the new lower boundaries the definitions of the grade letters can be permanently changed.
Note: The definition of grade letters applies to all grade items in the course.';
$string['points'] = 'Points ({$a})';
$string['predecessor'] = 'The lower boundary of a grade letter has to be smaller than the boundary of his predecessor.';
$string['printchart'] = 'Print chart';
$string['privacy:null_reason'] = 'This plugin does not store any personal information. It presents an interface to visually display and export the grade distribution of the graded elements within a course.';
$string['saved'] = 'Grade letters successfully changed.';
$string['showgradeitem'] = 'Display grade item';
$string['showgradeitem_description'] = 'Show grade display type as choice for grade item.';
$string['showgradeitemtype'] = 'Display grade item type';
$string['showgradeitemtype_help'] = 'Show grade item type like quiz, assignment etc.';
$string['sum'] = 'Sum';
$string['xlsx'] = 'xlsx';
