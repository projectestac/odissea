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
 * Strings for component 'block_moderator_guide', language 'en', version '4.1'.
 *
 * @package     block_moderator_guide
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Actions';
$string['addguide'] = 'Add guide';
$string['addguidehelp'] = 'To add a guide use the Moderator Guide block from any course main page.';
$string['addtemplate'] = 'Add template';
$string['author'] = 'Original author';
$string['cancel'] = 'Cancel';
$string['cancomplete'] = 'Allow guide editors to mark the guide as completed.';
$string['canreview'] = 'Allow guide reviewers to mark the guide as reviewed and to leave a comment';
$string['completed'] = 'Completed';
$string['configmoderation'] = 'Moderation';
$string['configmoderationdesc'] = 'Allow teachers to mark their guide as completed, and other persons to review the guide content.';
$string['configtitle'] = 'Title';
$string['confirmdeleteguide'] = 'Delete guide confirmation';
$string['confirmdeleteguidetext'] = 'Do you really want to delete this guide: {$a->name} ?';
$string['confirmdeletetemplate'] = 'Delete template confirmation';
$string['confirmdeletetemplatetext'] = 'Do you really want to delete this template: {$a->name} ?';
$string['course'] = 'Course';
$string['defaultguidename'] = 'Default guide name';
$string['delete'] = 'Delete';
$string['description'] = 'Description';
$string['editguide'] = 'Edit guide';
$string['edittemplate'] = 'Edit template';
$string['guide'] = 'Guide';
$string['guides'] = 'Guides';
$string['hide'] = 'Hide';
$string['manageguides'] = 'Manage guides';
$string['managetemplates'] = 'Manage templates';
$string['managetemplatesdesc'] = '<strong>Hide</strong>: the template will not be not available anymore to create the guides. However existing guides are still available.<br/>
<strong>Delete</strong>: it will delete the template and the guides using this template.<br/>
<strong>Edit</strong>: only the name, organization and description will be editable when a guide has been created with this template.<br/>
<strong>Guides</strong>: only available when a guide has been created with this template.';
$string['moderation'] = 'Moderation section';
$string['moderator_guide:addinstance'] = 'Can add an Moderator Guide block instance';
$string['moderator_guide:cancomplete'] = 'Can mark a guide as complete';
$string['moderator_guide:canreview'] = 'Can review a guide';
$string['moderator_guide:canviewcomplete'] = 'Can view completion status';
$string['moderator_guide:canviewreview'] = 'Can view the review comments (any state: reviewed/completed/none)';
$string['moderator_guide:editguide'] = 'Can edit an Moderator Guide guide';
$string['moderator_guide:edittemplate'] = 'Can edit an Moderator Guide template';
$string['moderator_guide:myaddinstance'] = 'Can add a Moderator Guide block instance on their dashboard';
$string['moderator_guide:viewguide'] = 'Can view an Moderator Guide guide';
$string['moderator_guide:viewguidestatus'] = 'Can view all course guides statistics';
$string['moderator_guide:viewtemplate'] = 'Can view an Moderator Guide template';
$string['moderatorcomment'] = 'Moderator comment';
$string['name'] = 'Name';
$string['noguidesforthiscourse'] = 'No guides for this course.';
$string['notemplate'] = 'No templates - your administrator must create and show at least one template first.';
$string['organization'] = 'Organization';
$string['organizations'] = 'Organizations';
$string['pluginname'] = 'Moderator Guide';
$string['previewguide'] = 'Preview';
$string['profilerestriction'] = 'Restrict by Custom Profile Field';
$string['profilerestrictiondesc'] = 'Restrict templates visible to teachers based on this field. Enter for example,
"organization" which is the shortname of a custom profile field. If the value of that field is empty then teachers will see all templates.
If it is populated, i.e. we enter "organization" in that field then the templates will be restricted by the organisation value (in each template)';
$string['reviewcomment'] = 'Review comment';
$string['reviewed'] = 'Reviewed';
$string['sectionx'] = 'Section {$a->id}';
$string['show'] = 'Show';
$string['template'] = 'Template';
$string['templateexample'] = '<pre><i>This is an example, feel free to edit as you want.</i></pre>
	<h3>Grading advices for external grader</h3>
	<p>if you are an external grader this document will help you to know how to grade this course.</p>
	<pre><i>The following line is a editor placeholder. It will be replaced by a Moodle HTML editor in the "Add/Edit guide" page:</i></pre>
	<p>[1:html]</p>
	<br/>
	<p>You must check these requirements:</p>
	<pre><i>The following lines are also an editor placeholder,however this more complex placeholder contains some default HTML (here requirements) that will be displayed inside the editor. It helps you to give some examples to the teacher.</i></pre>
	<p>[2:html:BEGIN]</p>
	<ul>
		<li>requirements A</li>
		<li>requirements B</li>
		<li>requirements C</li>
	</ul>
	<p>[2:html:END]</p>
	<br/>
	<p>We recommend you read these following files:</p>
	<pre><i>The following line is a file manager placeholder. It will be replaced by a Moodle file manager in the "Add/Edit guide" page:</i></pre>
	<p>[3:files]</p>
	<br/>
	<p>UK gov References:</p>
	<pre><i>The following line is a link placeholder. It will be replaced by 2 text fields (url and link name) in the "Add/Edit guide" page:</i> </pre>
	<p>[4:link]</p>
	<br/>
	<pre><i>The following line is a link placeholder with a prefilled link name (only text will be displayed, html will be ignored):</i> </pre>
	<p>[5:link:BEGIN]<br/>Click here to access the department site<br/>[5:link:END]</p>
	<p><br/>Thank You,<br>University of Science</p>';
$string['warningdeletetemplate'] = 'WARNING: you are also going to delete the following guides:';
