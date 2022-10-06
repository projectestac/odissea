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
 * Strings for component 'gradingform_guide', language 'ca', branch 'MOODLE_38_STABLE'
 *
 * @package   gradingform_guide
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomment'] = 'Afegeix un comentari utilitzat freqüentment';
$string['addcriterion'] = 'Afegeix un criteri';
$string['alwaysshowdefinition'] = 'Mostra la definició de la guia als estudiants';
$string['backtoediting'] = 'Torna a l\'edició';
$string['clicktocopy'] = 'Fes clic per a copiar aquest text en la retroacció dels criteris';
$string['clicktoedit'] = 'Fes clic per a editar';
$string['clicktoeditname'] = 'Fes clic per a editar el nom del criteri';
$string['comment'] = 'Comentari';
$string['comments'] = 'Comentaris freqüents';
$string['commentsdelete'] = 'Suprimeix comentari';
$string['commentsempty'] = 'Fes clic per a editar el comentari';
$string['commentsmovedown'] = 'Mou baix';
$string['commentsmoveup'] = 'Mou dalt';
$string['confirmdeletecriterion'] = 'Confirmeu que voleu suprimir aquest element?';
$string['confirmdeletelevel'] = 'Esteu segurs que voleu suprimir aquest nivell?';
$string['criterion'] = 'Criteri';
$string['criteriondelete'] = 'Suprimeix criteri';
$string['criterionempty'] = 'Fes clic per a editar el criteri';
$string['criterionmovedown'] = 'Mou baix';
$string['criterionmoveup'] = 'Mou dalt';
$string['criterionname'] = 'Nom del criteri';
$string['criterionremark'] = 'nota del criteri {$a}';
$string['definemarkingguide'] = 'Defineix una guia de qualificació';
$string['description'] = 'Descripció';
$string['descriptionmarkers'] = 'Descripció per a qui qualifica';
$string['descriptionstudents'] = 'Descripció per als estudiants';
$string['err_maxscoreisnegative'] = 'La puntuació màxima no és vàlida: els valors negatius no estan permesos';
$string['err_maxscorenotnumeric'] = 'La puntuació màxima del criteri ha de ser numèrica';
$string['err_nocomment'] = 'El comentari no pot estar buit';
$string['err_nodescription'] = 'La descripció de l\'estudiant no pot ser buida';
$string['err_nodescriptionmarkers'] = 'La descripció de qui qualifica no pot estar buida';
$string['err_nomaxscore'] = 'La puntuació màxima del criteri no pot estar buida';
$string['err_noshortname'] = 'El nom del criteri no pot estar buit';
$string['err_scoreinvalid'] = 'La puntuació donada a {$a->criterianame} no és vàlida, la puntuació màxima és: {$a->maxscore}';
$string['err_scoreisnegative'] = 'La puntuació donada a «{$a->criterianame}» no és vàlida: els valors negatius no estan permesos';
$string['err_shortnametoolong'] = 'El nom del criteri ha de tenir menys de 256 caràcters';
$string['gradingof'] = '{$a} qualificació';
$string['guide'] = 'Guia de qualificació';
$string['guidemappingexplained'] = 'AVÍS: La guia de qualificació té una qualificació màxima de <b>{$a->maxscore} punts</b> però la qualificació màxima establerta en l\'activitat és {$a->modulegrade} La puntuació màxima establerta en la vostra guia de qualificació s\'escalarà a la qualificació màxima del mòdul. <br />
Puntuacions intermèdies es convertiran, respectivament, i s\'arrodoniran a la qualificació més propera disponible.';
$string['guidenotcompleted'] = 'Proporcioneu una qualificació vàlida per a cada criteri';
$string['guideoptions'] = 'Opcions de la guia de qualificació';
$string['guidestatus'] = 'Estat actual de la guia de qualificació';
$string['hidemarkerdesc'] = 'Oculta les descripcions de criteri de qui qualifica';
$string['hidestudentdesc'] = 'Oculta les descripcions de criteri de l\'estudiant';
$string['insertcomment'] = 'Insereix un comentari usat freqüentment';
$string['maxscore'] = 'Qualificació màxima';
$string['name'] = 'Nom';
$string['needregrademessage'] = 'La definició de la guia de qualificació es va canviar després que aquest estudiant hagi estat qualificat. L\'estudiant no pot veure aquesta guia de qualificació fins que la reviseu i actualitzeu la qualificació.';
$string['outof'] = 'Puntuació sobre {$a}';
$string['pluginname'] = 'Guia de qualificació';
$string['previewmarkingguide'] = 'Previsualitza la guia de qualificació';
$string['regrademessage1'] = 'Ara desareu els canvis en una guia de qualificació que ja s\'ha emprat per a qualificar. Indiqueu si les qualificacions existents han de ser revisades. Si ho establiu, la guia de qualificació s\'ocultarà als estudiants fins que els seus elements es tornin a qualificar.';
$string['regrademessage5'] = 'Ara desareu canvis significatius en una guia de qualificació que ja s\'ha emprat per a qualificar. El valor en el butlletí de qualificacions serà igual, però la guia de qualificació s\'ocultarà al estudiants fins que els seus elements es tornin a qualificar.';
$string['regradeoption0'] = 'No marqueu per requalificar';
$string['regradeoption1'] = 'Marqueu per requalificar';
$string['restoredfromdraft'] = 'AVÍS: L\'últim intent de qualificar aquesta persona no s\'ha desat correctament, per tant, s\'ha restaurat l\'esborrany de qualificacions. Si voleu cancel·lar els canvis, utilitzeu el botó \'Cancel·lar\' a continuació.';
$string['save'] = 'Desa';
$string['saveguide'] = 'Desa la guia de qualificació i fes-la efectiva';
$string['saveguidedraft'] = 'Desa com a esborrany';
$string['score'] = 'puntuació';
$string['showmarkerdesc'] = 'Mostra les descripcions de criteri de qui qualifica';
$string['showmarkspercriterionstudents'] = 'Mostra les puntuacions per criteri als estudiants';
$string['showstudentdesc'] = 'Mostra les descripcions de criteri de l\'estudiant';
