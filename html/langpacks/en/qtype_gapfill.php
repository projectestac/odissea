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
 * Strings for component 'qtype_gapfill', language 'en', version '3.11'.
 *
 * @package     qtype_gapfill
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addhinttext'] = 'Add hint text to editing form';
$string['addhinttext_text'] = 'Populate first two hints in the Multiple tries section of the form';
$string['additemsettings'] = 'Add Gap settings';
$string['answerdisplay'] = 'Display Answers';
$string['answerdisplay_help'] = 'Dragdrop shows a list of words that can be dragged into the gaps, gapfill shows gaps with no word options, dropdown shows the same list of correct (and possibly incorrect) answers for each field';
$string['blank'] = 'blank';
$string['cannotimport'] = 'cannotimport';
$string['casesensitive'] = 'Case Sensitive';
$string['casesensitive_help'] = 'When this is checked, if the correct answer is CAT, cat will be flagged as a wrong answer';
$string['correct'] = 'Feedback for correct.';
$string['correctanswer'] = 'Correct answer';
$string['course'] = 'Import help';
$string['coursenotfound'] = 'Course not found, check the course shortname';
$string['courseshortname'] = 'Course Shortname';
$string['courseshortname_help'] = 'Enter the shortname of the course to import question to. This does a standard xml question import from the file example_questions.xml in the gapfill question type folder.';
$string['delimitchars'] = 'Delimit characters';
$string['delimitchars_help'] = 'Change the characters that delimit a field from the default [ ], useful for programming language questions';
$string['delimitset_text'] = 'Sets the delimiters for gaps, so you could add % % for The %cat% sat on the %mat%';
$string['disableregex'] = 'Disable Regex';
$string['disableregex_help'] = 'Disable regular expression processing and perform a standard string comparison. This can be useful for html quesitons where the angle brackets (&lt; and &gt;) should be treated literally and maths where symbols such as * should be seen literally rather than as expressions';
$string['disableregexset_text'] = 'Disable regular expression processing of responses';
$string['displaydragdrop'] = 'dragdrop';
$string['displaydropdown'] = 'dropdown';
$string['displaygapfill'] = 'gapfill';
$string['distractor1'] = 'blue,shoe,small';
$string['distractor2'] = 'blue,shoe,small';
$string['duplicatepartialcredit'] = 'Credit is partial because you have duplicate answers';
$string['editquestiontext'] = 'Edit question text';
$string['example1'] = 'Drag the verbs into the gaps. He [laughed] and [sat] down';
$string['example2'] = 'Select the verbs from the dropdowns. He [laughed] and [sat] down';
$string['example3'] = 'Where does the kangaroo come from? [Australia]. The next gap will acceps either cat or dog [cat|dog]';
$string['fixedgapsize'] = 'Fixed Gap Size';
$string['fixedgapsize_help'] = 'When attempting the question all gaps will be set to the same size as the largest gap. This removes gap size as a clue to the correct answer, e.g. if the gaps are [red] and [yellow] it would be clear that the yellow went in the biggest gap';
$string['fixedgapsizeset_text'] = 'Sets the size of every gap to that of the biggest gap';
$string['gap_plural'] = 'gaps';
$string['gap_singular'] = 'gap';
$string['gapfill'] = 'Gapfill.';
$string['importexamples'] = 'Import';
$string['incorrect'] = 'Feedback for incorrect.';
$string['itemsettings_button'] = 'Item settings';
$string['itemsettings_button_help'] = 'Clicking this toggles settings mode for entering per-gap settings such as feedback for correct or incorrect responses. Click on a delimited gap word to popup the settings form';
$string['itemsettingsbutton'] = 'Gap settings';
$string['itemsettingserror'] = 'Only works with Atto editor. Go to Editor preferences to switch to Atto';
$string['letterhint0'] = 'The first letter of the correct answer will be added to each incorrect gap when you press try again.';
$string['letterhint1'] = 'The next letter of the correct answer will be added when you press try again';
$string['letterhints'] = 'Letter hints';
$string['letterhints_help'] = 'Add letter from correct answer as a hint in interactive mode when an incorrect response is given. Hints must be in Multiple tries for this to work';
$string['letterhints_text'] = 'Add letter from correct answer as a hint in interactive mode when an incorrect response is given';
$string['moreoptions'] = 'More Options.';
$string['noduplicates'] = 'No Duplicates';
$string['noduplicates_help'] = 'When checked, each answer must be unique, useful where each field has a | operator, i.e. what are the colours of the Olympic medals and each field has [gold|silver|bronze], if the student enters gold in every field only the first will get a mark (the others will still get a tick though). It is really more like discard duplicate answers for marking purposes';
$string['optionsaftertext'] = 'Options after text';
$string['optionsaftertext_help'] = 'Draggable answer options will be displayed after the body of text rather than above';
$string['optionsaftertext_text'] = 'Set draggables to be after the body of text';
$string['or'] = 'or';
$string['pleaseenterananswer'] = 'Please enter an answer.';
$string['pluginname'] = 'Gapfill';
$string['pluginname_help'] = 'Place the words to be completed within square brackets e.g. The [cat] sat on the [mat].  If mat or rug are acceptable use [mat|rug]. Dropdown and Dragdrop modes allows for a shuffled list of answers to be displayed which can include optional wrong/distractor answers.';
$string['pluginname_link'] = 'question/type/gapfill';
$string['pluginnameadding'] = 'Adding a Gap Fill Question.';
$string['pluginnameediting'] = 'Editing Gap Fill.';
$string['pluginnamesummary'] = 'A fill in the gaps style question. Allows drag drop or dropdown answers with distractors. Very easy to learn syntax';
$string['privacy:null_reason'] = 'The Gapfill question type does not effect or store any data itself.';
$string['questioncatnotfound'] = 'Question category not found, click click <a href={$a}>here</a> to initialise, then the browser back button';
$string['questionsmissing'] = 'You have not included any fields in your question text';
$string['questiontext'] = 'Question text';
$string['questiontext_help'] = 'Put delimiters around the words that will become the text';
$string['singleuse'] = 'Single use draggables';
$string['singleuse_help'] = 'Remove draggables from list when dropped into a gap';
$string['singleuse_text'] = 'Remove draggables from list when dropped into a gap';
$string['visitquestions'] = 'Click <a href={$a}>here</a> to visit the questions';
$string['wronganswers'] = 'Distractors.';
$string['wronganswers_help'] = 'List of incorrect words designed to distract from the correct answers. Each word is separated by commas, only applies in dragdrop/dropdowns mode';
$string['yougotnrightcount'] = 'You completed {$a->num} {$a->gaporgaps} correctly out of {$a->outof}.';
