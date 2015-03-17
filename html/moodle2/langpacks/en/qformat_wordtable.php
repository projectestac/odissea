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
 * Strings for component 'qformat_wordtable', language 'en', branch 'MOODLE_26_STABLE'
 *
 * @package   qformat_wordtable
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cannotopentempfile'] = 'Cannot open temporary file <b>{$a}</b>';
$string['cannotreadzippedfile'] = 'Cannot read Zipped file <b>{$a}</b>';
$string['cannotwritetotempfile'] = 'Cannot write to temporary file <b>{$a}</b>';
$string['cloze_distractor_column_label'] = 'Distractors';
$string['cloze_feedback_column_label'] = 'Distractor Feedback';
$string['cloze_instructions'] = 'Use <strong>bold</strong> for dropdown menu items and <em>italic</em> for text field items.';
$string['cloze_mcformat_label'] = 'Orientation (D = dropdown; V = vertical, H = horizontal radio buttons):';
$string['conversionfailed'] = 'Question import failed';
$string['conversionsucceeded'] = 'Question import <b>succeeded</b>, <br>click the <b>\'Close\'</b> button to continue.';
$string['conversionsucceeded2'] = 'Question import <b>succeeded</b>, <br>click the \'Continue\' button to continue.';
$string['description_instructions'] = 'This is not actually a question. Instead it is a way to add some instructions, rubric or other content to the activity. This is similar to the way that labels can be used to add content to the course page.';
$string['docnotsupported'] = 'Files in Word 2003 format not supported: <b>{$a}</b>, use Moodle2Word 2.10 instead';
$string['essay_instructions'] = 'Allows a response of a few sentences or paragraphs. This must then be graded manually.';
$string['export_type_set'] = 'The question export type has been set to';
$string['htmldocnotsupported'] = 'Incorrect Word format: please use <i>File>Save As...</i> to save <b>{$a}</b> in native Word 2010 (.docx) format and import again';
$string['htmlnotsupported'] = 'Files in HTML format not supported: <b>{$a}</b>';
$string['interface_language_mismatch'] = 'No questions imported because the language of the labels in the Word file does not match your current Moodle interface language.';
$string['multichoice_instructions'] = 'Allows the selection of a single or multiple responses from a pre-defined list.';
$string['noquestions'] = 'No questions to export';
$string['pluginname'] = 'Microsoft Word 2010 table format (wordtable)';
$string['pluginname_help'] = 'This is a front-end for converting Microsoft Word 2010 files into Moodle Question XML format for import, and converting Moodle Question XML format into a format suitable for editing in Microsoft Word.';
$string['pluginname_link'] = 'qformat/wordtable';
$string['preview_question_not_found'] = 'Preview question not found, name / course ID: {$a}';
$string['stylesheetunavailable'] = 'XSLT Stylesheet <b>{$a}</b> is not available';
$string['tempfile'] = 'Temporary XML file: <b>{$a}</b>';
$string['templateunavailable'] = 'Word-compatible XHTML template <b>{$a}</b> is not available';
$string['transformationfailed'] = 'XSLT transformation failed (<b>{$a}</b>)';
$string['truefalse_instructions'] = 'Set grade \'100\' to the correct answer.';
$string['wordtable'] = 'Microsoft Word 2010 table format (wordtable)';
$string['wordtable_help'] = 'This is a front-end for converting Microsoft Word 2010 files into Moodle Question XML format for import, and converting Moodle Question XML format into an enhanced XHTML format for exporting into a format suitable for editing in Microsoft Word.';
$string['xmlnotsupported'] = 'Files in XML format not supported: <b>{$a}</b>';
$string['xsltunavailable'] = 'You need the XSLT library installed in PHP to save this Word file';
