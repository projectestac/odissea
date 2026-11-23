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
 * Strings for component 'qtype_geogebra'
 *
 * @package        qtype_geogebra
 * @author         Christoph Stadlbauer <christoph.stadlbauer@geogebra.org>
 * @copyright  (c) International GeoGebra Institute 2014
 * @license        http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['pluginname'] = 'GeoGebra';
$string['pluginname_link'] = 'question/type/geogebra';$string['addconstraints'] = 'Add constraints (conditions) to variables.';
$string['addmorevarblanks'] = 'Blanks for {no} more variable(s)';
$string['answerinvalid'] = 'The answer-string in the response is invalid. This should not happen.';
$string['answermissing'] = 'The answer in the response is missing. Probably JavaScript isn\'t turned on in the Browser or an unknown error occurred';
$string['answervar'] = 'Variables for automatic grading';
$string['answervar_help'] = 'For automatic grading: A name of a boolean object in GeoGebra which is true if the student solved the question (partly). Sums up all grades for all boolean variables. The question is correct if any combination exceeds 100%, but there should be at least one combination which sums up to exactly 100%. Leave blank for manual grading.';
$string['applet_advanced_settings'] = 'Advanced Settings...';
$string['constraints'] = 'Constraints (conditions)';
$string['constraints_help'] = 'Y a t\'il une contrainte sur les variables, par ex. a < b, ne pouvant être précisée dans les options du curseur ? Virgule comme séparateur. Relations supportées : <, <=, >, >=. Pour une égalité vous devez utiliser la même variable qu\'à la création de la feuille de travail. Intervalles dynamiques, via variables pour min/max de curseurs ne sont pas autorisés.';
$string['constraintswrongortoohard'] = '{$a->inequalities} are wrong or too hard to meet, we tried (brute force) {$a->tries} times in {$a->time} seconds. Maybe we\'ll use a better method in the future...';
$string['dragndrop'] = 'Drag and drop a GeoGebra file anywhere on the GeoGebra Applet section';
$string['enable_label_drags'] = 'Autoriser le déplacement des étiquettes';
$string['enable_right_click'] = 'Enable Right Click and Keyboard Editing';
$string['enable_shift_drag_zoom'] = 'Enable Shift-Drag & Zoom';
$string['feedback'] = 'Appréciation si la variable est "true"';
$string['feedback_help'] = 'L\'appréciation est automatiquement activée par la légende de la variable du fichier GeoGebra.';
$string['geogebraapplet'] = 'Appliquette GeoGebra';
$string['getvars'] = 'Lire les variables de l\'appliquette qui peuvent être aléatoires';
$string['ggbfilemissing'] = 'The base64 string in the response is missing. Probably JavaScript isn\'t turned on in the Browser or an unknown error occurred';
$string['ggbturl'] = 'URL ou ID de la feuille de travail sur GeoGebra';
$string['ggbturl_help'] = 'Vous pouvez soit utiliser le bouton Partager sur GeoGebra et copier et coller le lien ou utiliser le répertoire GeoGebra. L\'appliquette et les paramètres sont stockés dans la base de données, l\'appliquette ne sera pas rechargée à partir de GeoGebra sauf demande. Juste fournir l\'ID ou partager la clé de l\'appliquette est également supporté.';
$string['ggbxmlmissing'] = 'The XML string in the response is missing. Probably JavaScript isn\'t turned on in the Browser or an unknown error occurred';
$string['invalidinequality'] = '{$a} est invalide';
$string['isexercise'] = 'Use GeoGebra-Exercise for checking the question';
$string['isexercise_help'] = 'The applet contains user-defined tools which can be used for automatic checking of the exercise.\nBeware: All answers below are not applicable in this case!';
$string['israndomized'] = 'Are there any variables which should be randomized?';
$string['loadapplet'] = '(Re)load and show applet';
$string['loadapplet_help'] = '(Re)load the applet from GeoGebra and store the new version from GeoGebra in the database.';
$string['mineqmax'] = 'Min and Max for the randomization aren\'t specified properly for variable {$a}, either you haven\'t specified the slider’s min and max or the element isn\'t a slider at all. You probably have to correct this in your GeoGebra file.';
$string['minplusstepgtmax'] = 'Min plus increment is greater than Max for variable {$a}, you probably have to correct this in your GeoGebra file.';
$string['noappletloaded'] = 'Pas d\'appliquette chargée ! Contrôlez si l\'URL est correcte et si vous voyez une appliquette après sélection d\'un lien ou (re)chargement de l\'appliquette.';
$string['nofractionsumeq1'] = 'Au moins une combinaison des pourcentages doit correspondre à 100%';
$string['pluginname_help'] = 'Questions where the student can solve the question using GeoGebra';
$string['pluginnameadding'] = 'Ajouter une question GeoGebra';
$string['pluginnameediting'] = 'Éditer une question GeoGebra';
$string['pluginnamesummary'] = 'A version of calculated questions which uses GeoGebra to show the question and verify the answer when the quiz is taken.';
$string['randomizedbutnovars'] = 'You have selected that the question should be randomized, but you didn\'t specify any valid variables to be randomized.';
$string['randomizedvar'] = 'Variables to be randomized';
$string['randomizedvar_help'] = 'Les variables qui devraient être aléatoires (séparées par des virgules). Utilisez les options de curseur dans GeoGebra pour définir Min, Max et incrément. Ces variables peuvent également être utilisées dans le texte de la question en les enfermant avec des accolades, par exemple: {a}';
$string['show_algebra_input'] = 'Show Input Bar';
$string['show_menu_bar'] = 'Show Menu';
$string['show_reset_icon'] = 'Show Icon to Reset Construction';
$string['show_tool_bar'] = 'Show Toolbar';
$string['stepzero'] = 'Increment is 0 for variable {$a}; either you haven\'t specified the slider’s increment or the element isn\'t a slider at all. You probably have to correct this in your GeoGebra file.';
$string['useafile'] = '... or use a ggb-file';
$string['valuecheckedfor'] = 'Boolean Object in GeoGebra which is used to check correctness.';
$string['variablenamewrong'] = 'Une variable portant ce nom est introuvable dans le fichier GeoGebra.';
$string['variableno'] = 'Variable {$a}';
$string['variables'] = 'Variables';
$string['willbereadfromfile'] = 'Doit être lu depuis GeoGebra... (voir le bouton d\'aide)';
