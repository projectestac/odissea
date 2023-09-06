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
 * Strings for component 'gradingform_rubric', language 'ca', version '4.1'.
 *
 * @package     gradingform_rubric
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcriterion'] = 'Afegeix criteri';
$string['alwaysshowdefinition'] = 'Permet als usuaris previsualitzar la rúbrica (en cas contrari sols es mostra després de qualificar)';
$string['backtoediting'] = 'Torna a l\'edició';
$string['confirmdeletecriterion'] = 'Confirmeu que voleu suprimir aquest criteri?';
$string['confirmdeletelevel'] = 'Esteu segur de voler suprimir aquest nivell ?';
$string['criterion'] = 'Criteri {$a}';
$string['criterionaddlevel'] = 'Afegeix nivell';
$string['criteriondelete'] = 'Suprimeix criteri';
$string['criterionduplicate'] = 'Criteri duplicat';
$string['criterionempty'] = 'Prem per editar el criteri';
$string['criterionmovedown'] = 'Mou avall';
$string['criterionmoveup'] = 'Mou amunt';
$string['criterionremark'] = 'Nota per al criteri {$a->description}: {$a->remark}';
$string['definerubric'] = 'Defineix rúbrica';
$string['description'] = 'Descripció';
$string['enableremarks'] = 'Permet a l\'avaluador afegir observacions en format text al final de cada criteri';
$string['err_mintwolevels'] = 'Cada criteri ha de tenir almenys dos nivells';
$string['err_nocriteria'] = 'La rúbrica ha de tenir almenys un criteri';
$string['err_nodefinition'] = 'La definició del nivell no pot estar buida';
$string['err_nodescription'] = 'La descripció del criteri no pot estar buida';
$string['err_novariations'] = 'Els nivells del criteri no poden tenir tots el mateix nombre de punts';
$string['err_scoreformat'] = 'El nombre de punts per cada nivell ha de ser un nombre vàlid';
$string['err_totalscore'] = 'El nombre de punts màxim possible quan es qualifica amb una rúbrica ha de ser major de zero';
$string['gradingof'] = 'S\'està qualificant {$a}';
$string['level'] = 'Nivell {$a->definition}, punts {$a->score}';
$string['leveldefinition'] = 'Definició del nivell {$a}';
$string['leveldelete'] = 'Suprimeix el nivell {$a}';
$string['levelempty'] = 'Prem per editar el nivell';
$string['levelsgroup'] = 'Nivells del grup';
$string['lockzeropoints'] = 'Calcula la qualificació basada en la rúbrica amb una qualificació mínima de 0';
$string['lockzeropoints_help'] = 'Aquest paràmetre només té efecte si la suma del nombre mínim de punts de cada criteri és superior a zero. Si es marca, la mínima puntuació possible de la rúbrica serà superior a zero. Si es desmarca, la mínima puntuació possible de la rúbrica es farà correspondre amb la puntuació mínima disponible de l\'activitat (la qual és zero si no s\'utilitza cap escala).';
$string['name'] = 'Nom';
$string['needregrademessage'] = 'La definició de la rúbrica ha canviat després que aquest estudiant hagi estat qualificat. L\'estudiant no pot veure aquesta rúbrica fins que comproveu la rúbrica i actualitzeu la qualificació.';
$string['pluginname'] = 'Rúbrica';
$string['previewrubric'] = 'Previsualitza rúbrica';
$string['regrademessage1'] = 'Ara desareu canvis en una rúbrica que ha estat utilitzada per a qualificar. Indiqueu si les qualificacions que ja existeixen s\'han de revisar. Si ho configureu així, llavors, la rúbrica s\'ocultarà als estudiants fins que els seus elements es tornin a qualificar.';
$string['regrademessage5'] = 'Ara desareu canvis en una rúbrica que ha estat utilitzada per a qualificar. El quadern de notes no canviarà, però la rúbrica s\'ocultarà als estudiants fins que els seus elements es tornin a qualificar.';
$string['regradeoption0'] = 'No marqueu per requalificar';
$string['regradeoption1'] = 'Marqueu per requalificar';
$string['restoredfromdraft'] = 'NOTA: El darrer intent per qualificar aquesta persona no ha estat desat correctament, per això les qualificacions en brut han estat restaurades. Si voleu cancel·lar aquests canvis utilitzeu el botó «Cancel·la» de sota.';
$string['rubric'] = 'Rúbrica';
$string['rubricmapping'] = 'Puntuació per qualificar el mapatge de les regles.';
$string['rubricmappingexplained'] = 'La puntuació mínima per a aquesta rúbrica és de <b>{$a->minscore} punts</b> i es
convertirà en la qualificació mínima disponible per a aquest mòdul (la qual és zero, llevat que s\'utilitzi l\'escala). <br/>
La puntuació màxima de <b>{$a->maxscore} punts</b> es convertirà en la qualificació màxima. <br/>
Les puntuacions intermèdies es convertiran i s\'arrodoniran a la qualificació més pròxima. <br/>
Si una escala s\'usa com a qualificació, la puntuació es convertirà en elements de l\'escala com si fossin nombres enters consecutius.';
$string['rubricnotcompleted'] = 'Trieu alguna cosa per a cada criteri.';
$string['rubricoptions'] = 'Opcions de rúbrica';
$string['rubricstatus'] = 'Estat de la rúbrica actual';
$string['save'] = 'Desa';
$string['saverubric'] = 'Desa la rubrica i fes-la efectiva';
$string['saverubricdraft'] = 'Desa com a esborrany';
$string['scoreinputforlevel'] = 'Entrada de la puntuació per al nivell {$a}';
$string['scorepostfix'] = '{$a}punts';
$string['showdescriptionstudent'] = 'Mostra la descripció de la rúbrica als alumnes qualificats';
$string['showdescriptionteacher'] = 'Mostra la descripció de la rúbrica durant l\'avaluació';
$string['showremarksstudent'] = 'Mostra les anotacions als alumnes que s\'estan qualificant';
$string['showscorestudent'] = 'Mostra els punts de cada nivell als alumnes qualificats';
$string['showscoreteacher'] = 'Mostra els punts de cada nivell durant l\'avaluació';
$string['sortlevelsasc'] = 'Criteri d\'ordenació pels nivells:';
$string['sortlevelsasc0'] = 'Per puntuacions decreixents';
$string['sortlevelsasc1'] = 'Per puntuacions creixents';
$string['zerolevelsabsent'] = 'Avís: La puntuació mínima possible per a aquesta rúbrica no és 0; això pot provocar qualificacions inesperades per a l\'activitat. Per evitar això, cada criteri ha de tenir un nivell amb 0 punts. <br>
Aquest advertiment es pot ometre si s\'utilitza un interval de qualificació, i els nivells mínims en la rúbrica corresponen amb el valor mínim de l\'interval.';
