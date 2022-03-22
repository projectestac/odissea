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
 * Strings for component 'geogebra', language 'en', version '3.11'.
 *
 * @package     geogebra
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityclosed'] = 'This activity has been closed';
$string['activitynotopened'] = 'This activity is not yet available';
$string['attempt'] = 'Attempt';
$string['attempts'] = 'Attempts';
$string['attemptsremaining'] = 'Remaining attempts for this activity:';
$string['autograde'] = 'Selfgrade activity';
$string['availabledate'] = 'Available from';
$string['average'] = 'Average';
$string['choosescripttype'] = 'Choose the script type';
$string['comment'] = 'Comment';
$string['configintro'] = 'The values set here define the default URLs from which to load GeoGebra.';
$string['contentheader'] = 'Content';
$string['coursewithoutstudents'] = 'Course without students';
$string['datestudent'] = 'Last modified (submission)';
$string['dateteacher'] = 'Last modified (grade)';
$string['deleteallattempts'] = 'Delete all attempts';
$string['deployggb'] = 'URL for GeoGebra distribution';
$string['deployggb_desc'] = 'URL for the deployggb.js distribution file. Usually should point to www.geogebratube.org. Can be a local file.';
$string['description'] = 'Description';
$string['discardchanges'] = 'Discard changes and return';
$string['duedate'] = 'Due date';
$string['duration'] = 'Duration';
$string['enableLabelDrags'] = 'Enable dragging of labels';
$string['enableRightClick'] = 'Enable right click';
$string['errorattempt'] = 'Error: attempt could not be saved.';
$string['event_course_module_viewed'] = 'Course module viewed';
$string['event_instances_list_viewed'] = 'Instances list viewed';
$string['expired'] = 'Sorry, this activity closed on {$a} and is no longer available';
$string['extractedfromggb'] = 'extracted files from ggb';
$string['fflate'] = 'URL for fflate distribution';
$string['fflate_desc'] = 'URL for the fast flate script, used to decompress the GeoGebra javascript files.';
$string['filename'] = 'Filename';
$string['filenotfound'] = 'Specified file doesn\'t exist';
$string['filetype'] = 'Type';
$string['filetype_help'] = 'This setting determines how the GeoGebra activity is included in the course. There are up to 2 options:

* Uploaded GeoGebra - Enables a valid ".ggb" package to be chosen by the file picker.
* External URL - Enables a URL to be specified. Note: The URL must start with http(s) or www and contain a valid ".ggb" file.';
$string['filetypeexternal'] = 'External URL';
$string['filetypelocal'] = 'Uploaded file';
$string['firstattempt'] = 'First attempt';
$string['for'] = 'for';
$string['functionalityoptionsgrp'] = 'Functionality';
$string['geogebra:addinstance'] = 'Add GeoGebra';
$string['geogebra:grade'] = 'Grade GeoGebra';
$string['geogebra:submit'] = 'Submit GeoGebra';
$string['geogebra:view'] = 'View GeoGebra';
$string['geogebrafile'] = 'GeoGebra file';
$string['geogebrafile_help'] = 'The .ggb file.';
$string['geogebraurl'] = 'URL';
$string['geogebraurl_help'] = 'Find the construction on <a href="https://www.geogebra.org/" target="_blank">geogebra.org</a>, go to <strong>Details</strong>, right click on <strong>Download</strong> and select <strong>Copy link address</strong>. Finally, go to the URL field and paste the link with <strong>Ctrl+V</strong>.<br/>See a step-by-step example in: <a href="https://youtu.be/qbp-RuM4NpU" target="_blank">https://youtu.be/qbp-RuM4NpU</a>.';
$string['grade'] = 'Grade';
$string['gradeit'] = 'Grade';
$string['grademethod'] = 'Grading Method';
$string['header_geogebra'] = 'GeoGebra parameters';
$string['height'] = 'Height';
$string['height_help'] = 'Value in pixels.';
$string['highestattempt'] = 'Highest attempt';
$string['httpnotallowed'] = 'At the moment is not allowed to use external files';
$string['interfaceoptionsgrp'] = 'User interface';
$string['invalidgeogebrafile'] = 'Invalid GeoGebra specified. It must have the ".ggb" extension.';
$string['invalidurl'] = 'Invalid URL specified. It must start with http(s) and has to be a valid ".ggb" file.';
$string['language'] = 'Language';
$string['lastattempt'] = 'Last attempt';
$string['lastattemptremaining'] = 'This is your last attempt for this activity';
$string['lastmodifiedgrade'] = 'Last modified (grade)';
$string['lastmodifiedsubmission'] = 'Last modified (submission)';
$string['lowestattempt'] = 'Lowest attempt';
$string['manualgrade'] = 'Is manual grade?';
$string['maxattempts'] = 'Maximum number of attemps';
$string['modulename'] = 'GeoGebra';
$string['modulename_help'] = '<p><a href="https://www.geogebra.org" target="_blank">GeoGebra</a> is a free and multi-platform dynamic mathematics software for all levels of education that joins geometry, algebra, tables, graphing, statistics and calculus in one easy-to-use package.</p>
<p>Therefore, the <a href="http://www.gencat.cat/ensenyament/" target="_blank">Departament of Education of Catalonia</a> in collaboration with the <a href="https://acgeogebra.cat/" target="_blank">Catalan Association of GeoGebra</a> (ACG) and the GeoGeobra development team have implemented this module that allows the incorporation of GeoGebra activities in Moodle. Its main features are:
<ul>
    <li>Allows embedding easily GeoGebra activities in some Moodle course.</li>
    <li>Facilitates students tracing because it stores the score, date, duration and construction of each of the attempts made by the users.</li>
    <li>Students can save the state of the activities to continue them later.</li>
</ul>
</p>';
$string['modulenameplural'] = 'GeoGebra';
$string['msg_noattempts'] = 'You have done this activity the maximum number of times';
$string['msg_nosessions'] = 'This Geogebra activity hasn\'t yet any session';
$string['name'] = 'Name';
$string['noattempts'] = '-';
$string['nograding'] = 'No grading';
$string['nomoreattempts'] = 'No more attempts remaining for this activity';
$string['notopenyet'] = 'Sorry, this activity is not available until {$a}';
$string['pluginadministration'] = 'GeoGebra administration';
$string['pluginname'] = 'GeoGebra';
$string['preview_geogebra'] = 'Preview Geogebra activity';
$string['previewtab'] = 'Preview';
$string['privacy'] = 'Privacy of results';
$string['privacy:metadata:geogebra_attempts'] = 'Information about the user\'s results attempt(s) for a given geogebra activity';
$string['privacy:metadata:geogebra_attempts:datestudent'] = 'The timestamp indicating when the attempt was finished by the student';
$string['privacy:metadata:geogebra_attempts:dateteacher'] = 'The timestamp indicating when the attempt was finished by the teacher';
$string['privacy:metadata:geogebra_attempts:finished'] = 'The timestamp indicating when the attempt was finished by the user';
$string['privacy:metadata:geogebra_attempts:geogebra'] = 'The ID of the choice activity';
$string['privacy:metadata:geogebra_attempts:gradecomment'] = 'The comment of the grade for the attempt of the geogebra activity.';
$string['privacy:metadata:geogebra_attempts:userid'] = 'The ID of the user answering this geogebra activity';
$string['privacy:metadata:geogebra_attempts:vars'] = 'The ID of the option that the user selected.';
$string['redirecttocourse'] = 'The activity has been saved. Going back to the course home page';
$string['report'] = 'Report of';
$string['results'] = 'Results';
$string['resultstab'] = 'Results';
$string['resumeattempt'] = 'Resuming unfinished attempt';
$string['review'] = 'Review of';
$string['reviewtab'] = 'Review';
$string['savechanges'] = 'Save changes';
$string['savewithoutsubmitting'] = 'Save without submitting';
$string['seed'] = 'Seed';
$string['seed_help'] = 'Seed can be a positive number between 0 and 99. If zero a Geogebra activity generated using randomness will be different upon every reload. If not zero, upon reload, the same randomized version is presented. Using two different seeds will give two different randomized versions. Use a zero seed to give each student a different test. Use a non zero seed for guided test practicing to be sure that all the students receive the same test.';
$string['settings'] = 'Settings';
$string['showAlgebraInput'] = 'Show inputbar';
$string['showMenuBar'] = 'Show menubar';
$string['showResetIcon'] = 'Show icon to reset construction';
$string['showToolBar'] = 'Show toolbar';
$string['showToolBarHelp'] = 'Show toolbar help';
$string['showsubmit'] = 'Show submit button';
$string['status'] = 'Estat';
$string['submitandfinish'] = 'Submit and finish';
$string['timing'] = 'Timing';
$string['total'] = 'Total';
$string['unfinished'] = 'Unfinished';
$string['ungraded'] = 'Ungraded';
$string['unlimitedattempts'] = 'Unlimited attempts for this activity';
$string['urledit'] = 'GeoGebra file';
$string['urledit_help'] = 'The ".ggb" file where you will find the GeoGebra activity.';
$string['urlggb'] = 'Custom deploy URL';
$string['urlggb_help'] = 'Alternative URL for the deployggb.js file, i.e. where the GeoGebra distribution is located. If it is set, this URL will be used instead of the default value set in module configuration. Usually, this field can be left empty.';
$string['useBrowserForJS'] = 'Use JavaScript from:';
$string['useBrowserForJS_geogebra'] = 'GeoGebra file (false)';
$string['useBrowserForJS_html'] = 'HTML (true)';
$string['view'] = 'View';
$string['viewattempt'] = 'View';
$string['viewattempts'] = 'View attemtps';
$string['viewattempttab'] = 'View attempt';
$string['viewtab'] = 'View';
$string['weight'] = 'Weight';
$string['width'] = 'Width';
$string['width_help'] = 'Value in pixels. If empty or zero, the width of the GeoGebra activity will be 100% of the GeoGebra container.';
