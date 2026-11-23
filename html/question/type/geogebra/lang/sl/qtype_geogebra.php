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
$string['pluginname_link'] = 'question/type/geogebra';$string['addconstraints'] = 'Dodaj omejitve (pogoje) za spremenljivke.';
$string['addmorevarblanks'] = 'Presledki za {no} več spremenljivk';
$string['answerinvalid'] = 'Niz v odgovoru je napačen. To se ne sme zgoditi.';
$string['answermissing'] = 'The answer in the response is missing. Probably JavaScript isn\'t turned on in the Browser or an unknown error occurred';
$string['answervar'] = 'Spremenljivke za avtomatsko ocenjevanje';
$string['answervar_help'] = 'For automatic grading: A name of a boolean object in GeoGebra which is true if the student solved the question (partly). Sums up all grades for all boolean variables. The question is correct if any combination exceeds 100%, but there should be at least one combination which sums up to exactly 100%. Leave blank for manual grading.';
$string['applet_advanced_settings'] = 'Advanced Settings...';
$string['constraints'] = 'Omejitve (pogoji)';
$string['constraints_help'] = 'Are there any constraints for variables, such as a < b, which could not be declared using the slider options? Comma separated. Supported relations are: <, <=, >, >=. If you need an equality you have to use the same variable when creating the GeoGebra worksheet. Dynamic ranges, ie using variables for slider min/max are not supported.';
$string['constraintswrongortoohard'] = '{$a->inequalities} are wrong or too hard to meet, we tried (brute force) {$a->tries} times in {$a->time} seconds. Maybe we\'ll use a better method in the future...';
$string['dragndrop'] = 'Drag and drop a GeoGebra file anywhere on the GeoGebra Applet section';
$string['enable_label_drags'] = 'Enable Dragging of Labels';
$string['enable_right_click'] = 'Enable Right Click and Keyboard Editing';
$string['enable_shift_drag_zoom'] = 'Enable Shift-Drag & Zoom';
$string['feedback'] = 'Sporočilo, če je spremenljivka prava';
$string['feedback_help'] = 'POvratna informacija je povzeta po naslovu spremenljivke v GeoGebra datoteki.';
$string['geogebraapplet'] = 'GeoGebra aplet';
$string['getvars'] = 'Določi spremenljivke iz apleta, ki naj bodo slučajne';
$string['ggbfilemissing'] = 'V odgovoru manjka niz base64. Verjetno v brskalniku ni  dovoljen JavaScript ali pa je prišlo do druge, neznane napake';
$string['ggbturl'] = 'URL ali ID gradiva na GeoGebra';
$string['ggbturl_help'] = 'You could either use the share button on GeoGebra and copy and paste the link or use the GeoGebra repository. The applet and parameters are stored in the database, the applet will not be reloaded from GeoGebra unless requested. Just providing the ID or sharing key of the Applet is also supported.';
$string['ggbxmlmissing'] = 'V odgovoru manjka XML niz. Najbrž v brskalniku ni vključen JavaScript ali pa je napaka neznana';
$string['invalidinequality'] = '{$a} je narobe';
$string['isexercise'] = 'Use GeoGebra-Exercise for checking the question';
$string['isexercise_help'] = 'The applet contains user-defined tools which can be used for automatic checking of the exercise.\nBeware: All answers below are not applicable in this case!';
$string['israndomized'] = 'Ali je kakšna spremenljivka, ki naj bo slučajna?';
$string['loadapplet'] = '(Ponovno) naloži in prikaži aplet';
$string['loadapplet_help'] = '(Ponovno) naloži aplet iz GeoGebra shrani novo verzijo iz GeoGebra v bazo.';
$string['mineqmax'] = 'Min and Max for the randomization aren\'t specified properly for variable {$a}, either you haven\'t specified the slider’s min and max or the element isn\'t a slider at all. You probably have to correct this in your GeoGebra file.';
$string['minplusstepgtmax'] = 'Min plus increment is greater than Max for variable {$a}, you probably have to correct this in your GeoGebra file.';
$string['noappletloaded'] = 'No Applet loaded! Check if URL is correct and if you see an applet after choosing a link or (re)loading the applet';
$string['nofractionsumeq1'] = 'Vsaj ena kombinacija ocen mora biti 100%';
$string['pluginname_help'] = 'Questions where the student can solve the question using GeoGebra';
$string['pluginnameadding'] = 'Dodajanje vprašanja z GeoGebro';
$string['pluginnameediting'] = 'Urejanje GeoGebra vprašanja';
$string['pluginnamesummary'] = 'A version of calculated questions which uses GeoGebra to show the question and verify the answer when the quiz is taken.';
$string['randomizedbutnovars'] = 'Izbrali set, da bodo vprašanja slučajna, niste pa določili slučajnih spremenljivk.';
$string['randomizedvar'] = 'Spremnljivke določi slučajno';
$string['randomizedvar_help'] = 'Spremenljivke naj bodo slučajne, ločene z vejico. Uporabi možnosti drsnika v GeoGebri za določanje minimuma, maksimuma in koraka. Te spremenljivke so lahko uporabljene v tekstu vprašanja, če jih zapišemo v zavite oklepaje, na primer {a}';
$string['show_algebra_input'] = 'Show Input Bar';
$string['show_menu_bar'] = 'Show Menu';
$string['show_reset_icon'] = 'Show Icon to Reset Construction';
$string['show_tool_bar'] = 'Show Toolbar';
$string['stepzero'] = 'Increment is 0 for variable {$a}; either you haven\'t specified the slider’s increment or the element isn\'t a slider at all. You probably have to correct this in your GeoGebra file.';
$string['useafile'] = '... or use a ggb-file';
$string['valuecheckedfor'] = 'Logična spremenljivka v GeoGebri, ki bo uporabljena za preverjanje pravilnosti.';
$string['variablenamewrong'] = 'A variable with that name could not be found in the GeoGebra file.';
$string['variableno'] = 'Spremnljivka {$a}';
$string['variables'] = 'Spremnljivke';
$string['willbereadfromfile'] = 'Prebrano bo z GeoGebre... (glej gumb pomoči)';
