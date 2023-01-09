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
 * Strings for component 'customlabel', language 'en', version '3.11'.
 *
 * @package     customlabel
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminmetadata'] = 'Classifiers configuration';
$string['apparence'] = 'Apparence';
$string['category'] = 'Category';
$string['changetypeadvice'] = 'You are about to thange the internal data structure of this element. Old content cannot be maintained. Continue?';
$string['choose'] = 'Choose';
$string['classification'] = 'Classification';
$string['classificationconstrainttable'] = 'Constraints table';
$string['classificationconstrainttable_help'] = 'This table is capable to map the value pairs wich are not compatible.';
$string['classificationmodel'] = 'Classification model';
$string['classificationtypetable'] = 'Classification dimensions and filters table';
$string['classificationtypetable_help'] = 'This table provides domains of classification. A domain holds a set of values.';
$string['classificationvalues'] = 'Values';
$string['classificationvaluetable'] = 'classification values table';
$string['classificationvaluetable_help'] = 'This table provides all values for all classifiers defined in the Type Table.';
$string['classificationvaluetypekey'] = 'classifier Type field';
$string['classificationvaluetypekey_help'] = 'This must define the table column name that is used to key the type ownership on values.';
$string['classifiers'] = 'Classifiers';
$string['classifierstypes'] = 'Classifiers type';
$string['cleararea'] = 'Clear this file area';
$string['code'] = 'Code';
$string['coloredstyle'] = 'Colored titles';
$string['commands'] = 'Commands';
$string['configclassificationconstrainttable'] = 'Constraint table';
$string['configclassificationconstrainttable_desc'] = 'This table holds the constraints betxween the different types involved into the classificaiton.';
$string['configclassificationtypetable'] = 'Table for classifier types';
$string['configclassificationtypetable_desc'] = 'A classifier type holds a set of values in the value table.';
$string['configclassificationvaluetable'] = 'Table for classification values';
$string['configclassificationvaluetable_desc'] = 'This is the table where to find the metadata values';
$string['configclassificationvaluetypekey'] = 'Type key name in value table';
$string['configclassificationvaluetypekey_desc'] = 'This is the name of the field that serves as datatype foreign key to qualify the value';
$string['configcoursemetadatacmidkey'] = 'Course module id key name in metadata binder';
$string['configcoursemetadatacmidkey_desc'] = 'This is the name of the field that serves as course module foreign key in the metadata table.';
$string['configcoursemetadatacoursekey'] = 'Course key name in metadata binder';
$string['configcoursemetadatacoursekey_desc'] = 'This is the name of the field that serves as course foreign key in the metadata table. The content of this field should be a valid COURSE id.';
$string['configcoursemetadatatable'] = 'Table for metadata binding';
$string['configcoursemetadatatable_desc'] = 'This table binds relation between a course record and any metadata pointed by ab id. The metadata should reside in the following metadata value table.';
$string['configcoursemetadatavaluekey'] = 'Value key name in metadata binder';
$string['configcoursemetadatavaluekey_desc'] = 'This is the name of the field that serves as data value foreign key in the metadata table.';
$string['configmetadatabinding'] = 'Metadata schema binding';
$string['configmetadatabinding_desc'] = '<p>The couse indexer relies on a capability to index courses with some metadata and classifiers. the course index model uses 4 tables to achieve this feature, and allows binding those tables from any implementation
the integrator would need. The default binding uses the Customlabel module and its inbound classifier tableset. But the ocurse index might bind to any other model that respects following defs:</p>
<ul>
<li>There is a table to store the metadata domain values</li>
<li>Metadata values are typed. A table exists to store the metadata types to which values refer.</li>
<li>Metadata types are combined using a constraint table, that tells valid values combinations</li>
<li>A table exists that binds a course to a metadata value (tagging)</li>
</ul>';
$string['constraints'] = 'Constraints';
$string['content'] = 'Content';
$string['coursefilter'] = 'Course filter';
$string['coursemetadatacmidkey'] = 'Tagging field for course module id (metadata to value binding)';
$string['coursemetadatacmidkey_help'] = 'This must define a column name in database that maps a record to a course module instance.';
$string['coursemetadatacoursekey'] = 'Tagging key for course (course to metadata binding)';
$string['coursemetadatacoursekey_help'] = 'This must define a column name in database that maps a record to a course ID.';
$string['coursemetadatatable'] = 'course metadata tagging table';
$string['coursemetadatatable_help'] = 'This table provides course to metadata bindings.';
$string['coursemetadatavaluekey'] = 'Tagging field for values (metadata to value binding)';
$string['coursemetadatavaluekey_help'] = 'This must define a column name in database that maps a record to a metadata value.';
$string['customlabel:addinstance'] = 'Can add an instance';
$string['customlabel:fullaccess'] = 'Full access to all fields';
$string['customlabel:managemetadata'] = 'Manage metadata';
$string['customlabelplugins'] = 'Plugins';
$string['customlabeltools'] = 'Mass tools for custom labels';
$string['customlabeltypepluginname'] = 'Customlabel type name';
$string['defaultskin'] = 'Default skin for labels';
$string['defaultskin_desc'] = 'Chooses a base css template for all labels.';
$string['defaultstyle'] = 'Default icon set';
$string['disabledsubtypes'] = 'Disabled subtypes';
$string['disabledsubtypes_desc'] = 'Any subtype mentionned in this field will be globally disabled for the whole site.';
$string['doupdate'] = 'Update !!';
$string['down'] = 'Down';
$string['editclass'] = 'Update classifier class&ensp;';
$string['editvalues'] = 'Edit values';
$string['errorclassloading'] = 'Error loading : Null class';
$string['errorfailedloading'] = 'Failed loading class for custom label {$a}. Reverting to "text" customlabel.';
$string['errorinsertvalue'] = 'Could not insert a new value';
$string['errorreservedname'] = '"TYPE" is a reserved name and cannot be used as code.';
$string['errorupdatevalue'] = 'Could not update a new value';
$string['exclude'] = 'Exclude';
$string['exportdata'] = 'Export data to XML';
$string['familygeneric'] = 'Generic elements';
$string['familymeta'] = 'Meta-Pedagogy elements';
$string['familypedagogic'] = 'Pedagogy elements';
$string['familyspecial'] = 'Special elements';
$string['familystructure'] = 'Structural elements';
$string['filter'] = 'Filter';
$string['flatcoloredstyle'] = 'Flat and colored titles';
$string['flatstyle'] = 'Flat style';
$string['hideshow'] = 'Hide/Show';
$string['include'] = 'Include';
$string['labelclass'] = 'Label type';
$string['labelclasses'] = 'Element classes';
$string['labelupdater'] = '{$a} Regeneration Tool';
$string['languages'] = 'Language';
$string['lockedsample'] = 'Locked field sample';
$string['lpclassificationhdr'] = 'Classified courses';
$string['managecustomlabeltypeplugins'] = 'Manage customlabel plugins';
$string['metadata'] = 'Metadata values';
$string['metadataset'] = 'Classification values';
$string['missingfields'] = 'Mandatory fields have not been defined';
$string['model'] = 'Data Model';
$string['modulename'] = 'Course element';
$string['modulename_help'] = 'Course Elements provide you with pedagogic modules that are already layout and
designed for serving some high level pedagogic needs. Course elements have subtypes that address common
learning actions : work to do, soluce, see also (optional reference), local goals, reminder, and some
editioral helpers such as course captions. Administrator can integrate specific models with additional
editorial value such as using prefitted image bank, or tagging courses,
You just need to enter the appropriate data in each module
and register.';
$string['modulenameplural'] = 'Course elements';
$string['name'] = 'Label';
$string['noclassifiers'] = 'No classifier';
$string['nocontentforthislanguage'] = 'No content available for this language<br/>';
$string['none'] = 'Undefined';
$string['notypes'] = 'No classifier type';
$string['novalues'] = 'No registered value';
$string['pluginadministration'] = 'Course element administration';
$string['plugindefault'] = 'Customlabel default skin';
$string['pluginname'] = 'Course element';
$string['privacy:metadata:customlabel_user_data'] = 'Table where user completions initial conditions are stored';
$string['privacy:metadata:customlabel_user_data:completion1'] = 'Completion value for rule 1 (depending on label use of completion)';
$string['privacy:metadata:customlabel_user_data:completion2'] = 'Completion value for rule 2 (depending on label use of completion)';
$string['privacy:metadata:customlabel_user_data:completion3'] = 'Completion value for rule 3 (depending on label use of completion)';
$string['privacy:metadata:customlabel_user_data:customlabelid'] = 'ID of the customlabel instance recording completions';
$string['privacy:metadata:customlabel_user_data:userid'] = 'User ID for which the completions are stored';
$string['qualifiers'] = 'Qualifiers';
$string['regenerate'] = 'Regenerate';
$string['regeneration'] = 'Content mass regeneration';
$string['resetall'] = 'Reset all';
$string['resetlabeltypes'] = 'Reset label types';
$string['resourcetypecustomlabel'] = 'Course element';
$string['roleaccesstoelements'] = 'Access per role';
$string['sametypes'] = 'You cannot constraint twice the same type';
$string['save'] = 'Save settings';
$string['settings'] = 'Customlabel Settings';
$string['show'] = 'Show&ensp;';
$string['specifics'] = 'Type specific';
$string['storage'] = 'Storage model';
$string['templatenotfound'] = 'Template {$a} not found';
$string['text'] = 'Text';
$string['title'] = 'Element name';
$string['typecode'] = 'Code';
$string['typecode_help'] = '<p>This will help for matching data with external system when extracting data with custom queries in blocks of type
Custom Reports or Dashboard.</p>

<p>Note that some codes are implicitely bound to some special features of course indexation
using the Course Classifier subtype. The course classifier subtype is a classifier utility that helps some other
components as the Local Course Index to present a multicategorized, searchable course catalog.</p>
<ul>
<li>LEVEL0 : Use this code for defining a first classifier dimension in the course classifier.</li>
<li>LEVEL1 : Use this code for defining a second classifier dimension in the course classifier.</li>
<li>LEVEL2 : Use this code for defining a third classifier dimension in the course classifier.</li>
<li>PEOPLE : Use this code for defining a target audience filter.</li>
</ul>

</p>for the subtype WorkTodo: </p>
<ul>
<li>WORKEFFORT : Qualify learning effort</li>
<li>WORKTYPE : Qualify nature of the work</li>
<li>WORKMODE : Qualify social perimeter of the task</li>
</ul>';
$string['typename'] = 'Name';
$string['typetype'] = 'Type';
$string['typetype_help'] = '<p>Type type can be:</p>
<ul>
<li>A category: A category interacts with course catalog implementations to build a multicriteria course taxonomy.</li>
<li>A filter: A simple tag some Course Element subtypes can use</p>
<li>A course filter: A tag that can be used by some course catalog implementations fo filtering search results.</p>
</ul>';
$string['up'] = 'Up';
$string['updateall'] = 'Update all instances';
$string['updatelabels'] = 'Regenerate instances of {$a}';
$string['updatescope'] = 'Updating scope';
$string['usedas'] = 'Use as&ensp;';
$string['userstatesreset'] = 'User states have been reset';
$string['usesafestorage'] = 'Use safe storage for content (base64)';
$string['value'] = 'Value';
$string['withcompletions'] = 'Reset label completions';
$string['wsattributekey'] = '<span class="lighttext">Attribute key to use in WS : {$a}</span>';
$string['wsfieldkey'] = 'Attribute key for web services: {$a}';
$string['wsurl'] = 'Web services: use type {$a} in webservice call customlabel_add_instance().<br/>See WS moodle API documentation in plugin administration.';
