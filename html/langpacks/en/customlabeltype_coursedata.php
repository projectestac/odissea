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
 * Strings for component 'customlabeltype_coursedata', language 'en', version '3.11'.
 *
 * @package     customlabeltype_coursedata
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['concepts'] = 'Key concepts';
$string['configtypename'] = 'Enable subtype Course information';
$string['coursedata:addinstance'] = 'Can add an instance';
$string['coursedata:view'] = 'Can view the content';
$string['duration'] = 'Duration';
$string['family'] = 'meta';
$string['followers'] = 'Following courses';
$string['goals'] = 'Goals';
$string['learningmethod'] = 'Learning method';
$string['leftcolumnratio'] = 'Left column ratio';
$string['objectives'] = 'Learner\'s objectives';
$string['pluginname'] = 'Course element : Course Information';
$string['prerequisites'] = 'Prerequisites';
$string['showconcepts'] = 'Show Key concepts';
$string['showduration'] = 'Show Duration';
$string['showfollowers'] = 'Show Following courses';
$string['showgoals'] = 'Show Goals';
$string['showlearningmethod'] = 'Show Learning method';
$string['showobjectives'] = 'Show Learner\'s objectives';
$string['showprerequisites'] = 'Show Prerequisites';
$string['showtarget'] = 'Show Target';
$string['showteachingorganization'] = 'Show Pedagogic organisation';
$string['tablecaption'] = 'Table caption';
$string['target'] = 'Target';
$string['teachingorganization'] = 'Pedagogic organisation';
$string['template'] = '<table class="custombox-coursedata">
    <%if %%tablecaption%% %>
    <tr valign="top">
        <th class="custombox-title coursedata" colspan="2">
            <%%tablecaption%%>
        </th>
    </tr>
    <%endif %>
    <%if %%showidnumber%% %>
    <tr valign="top">
        <td class="custombox-param coursedata" width="<%%leftcolumnratio%%>">
            Training ID:
        </td>
        <td class="custombox-value coursedata" width="<%%rightcolumnratio%%>">
            <%%idnumber%%>
        </td>
    </tr>
    <%endif %>
    <%if %%showtarget%% %>
    <tr valign="top">
        <td class="custombox-param coursedata" width="<%%leftcolumnratio%%>">
            People concerned:
        </td>
        <td class="custombox-value coursedata" width="<%%rightcolumnratio%%>">
            <%%target%%>
        </td>
    </tr>
    <%endif %>
    <%if %%showgoals%% %>
    <tr valign="top">
        <td class="custombox-param coursedata" width="<%%leftcolumnratio%%>">
            Goals:
        </td>
        <td class="custombox-value coursedata" width="<%%rightcolumnratio%%>">
            <%%goals%%>
        </td>
    </tr>
    <%endif %>
    <%if %%showobjectives%% %>
    <tr valign="top">
        <td class="custombox-param coursedata" width="<%%leftcolumnratio%%>">
            Acquisitions:
        </td>
        <td class="custombox-value coursedata" width="<%%rightcolumnratio%%>">
            <%%objectives%%>
        </td>
    </tr>
    <%endif %>
    <%if %%showconcepts%% %>
    <tr valign="top">
        <td class="custombox-param coursedata" width="<%%leftcolumnratio%%>">
            Concepts:
        </td>
        <td class="custombox-value coursedata" width="<%%rightcolumnratio%%>">
            <%%concepts%%>
        </td>
    </tr>
    <%endif %>
    <%if %%showduration%% %>
    <tr valign="top">
        <td class="custombox-param coursedata" width="<%%leftcolumnratio%%>">
            Duration:
        </td>
        <td class="custombox-value coursedata" width="<%%rightcolumnratio%%>">
            <%%duration%%>
        </td>
    </tr>
    <%endif %>
    <%if %%showteachingorganization%% %>
    <tr valign="top">
        <td class="custombox-param coursedata" width="<%%leftcolumnratio%%>">
            Teaching organization:
        </td>
        <td class="custombox-value coursedata" width="<%%rightcolumnratio%%>">
            <%%teachingorganization%%>
        </td>
    </tr>
    <%endif %>
    <%if %%showprerequisites%% %>
    <tr valign="top">
        <td class="custombox-param coursedata" width="<%%leftcolumnratio%%>">
            Prerequisites:
        </td>
        <td class="custombox-value coursedata" width="<%%rightcolumnratio%%>">
            <%%prerequisites%%>
        </td>
    </tr>
    <%endif %>
    <%if %%showfollowers%% %>
    <tr valign="top">
        <td class="custombox-param coursedata" width="<%%leftcolumnratio%%>">
            Following courses:
        </td>
        <td class="custombox-value coursedata" width="<%%rightcolumnratio%%>">
            <%%followers%%>
        </td>
    </tr>
    <%endif %>
</table>';
$string['typename'] = 'Course information';
