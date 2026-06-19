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
 * Strings for component 'local_customgradingform_renderer', language 'ca', version '4.5'.
 *
 * @package     local_customgradingform_renderer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['choosecsvfile'] = 'Trieu el fitxer CSV';
$string['csvinvalidcharsfound'] = 'Els camps esperen valors separats per comes sense caràcters no vàlids. No inclogueu cometes dobles (""), comes addicionals (,) ni punts i coma (;) dins dels camps.';
$string['csvinvalidcharslist_simple'] = 'Línies amb problemes:';
$string['csvlineonly'] = 'Línia {$a}';
$string['csvmissingcolumns'] = 'El fitxer CSV ha de contenir les columnes: criterion, level, level_description i score.';
$string['csvrequired'] = 'Heu de seleccionar un fitxer CSV vàlid.';
$string['customgradingform_renderer:import'] = 'Permet a l\'usuari importar rúbriques de qualificació des d\'un fitxer CSV a una activitat.';
$string['enablemaxlevelscore'] = 'Habilita la validació de la puntuació màxima.';
$string['enablemaxlevelscore_desc'] = 'Si està habilitat, el sistema validarà que cap nivell superi el valor màxim configurat.';
$string['enableminlevelscore'] = 'Habilita la validació de la puntuació mínima.';
$string['enableminlevelscore_desc'] = 'Si està habilitat, el sistema validarà que almenys un nivell tingui la puntuació mínima configurada.';
$string['errormaxexceeded'] = '⚠️ La puntuació {$a->score} en el criteri {$a->criterion} supera el màxim permès de {$a->max}.';
$string['errorminmissing'] = '⚠️ El criteri {$a->criterion} no conté la puntuació mínima permesa de {$a->min}.';
$string['errormismatchtotal'] = '⚠️ La suma dels nivells més alts és {$a->sum}, però la nota màxima de l\'activitat és {$a->grademax}.';
$string['errorrepeatedscores'] = '⚠️ El criteri {$a} té puntuacions de nivell repetides. Cada nivell ha de tenir una puntuació única.';
$string['errorrubricexists'] = '⚠️ Ja hi ha una rúbrica definida per a aquesta activitat. No en podeu importar una altra.';
$string['fileopenerror'] = 'No s\'ha pogut obrir el fitxer CSV.';
$string['importedrubricname'] = 'Rúbrica importada ({$a})';
$string['importerror'] = 'S\'ha produït un error en importar la rúbrica.';
$string['importfromcsv'] = 'Importa una rúbrica des d\'un CSV';
$string['importsuccess'] = 'La rúbrica s\'ha importat correctament.';
$string['invalidcsvformat'] = 'El format CSV no és vàlid. Només es permeten fitxers .csv basats en text.';
$string['maxlevelscore'] = 'Puntuació màxima per nivell';
$string['maxlevelscore_desc'] = 'Defineix la puntuació màxima permesa per a cada nivell d\'avaluació dins d\'un criteri. Si algun nivell del fitxer CSV supera aquest valor, es mostrarà un error durant la importació.';
$string['minlevelscore'] = 'Puntuació mínima per nivell';
$string['minlevelscore_desc'] = 'Puntuació mínima permesa per a un nivell. Normalment és 0.';
$string['pluginname'] = 'Nucli de l\'importador de rúbriques';
$string['privacy:metadata'] = 'Aquest connector no emmagatzema cap dada personal.';
$string['rubricalreadydefined'] = '⚠️ Ja hi ha una rúbrica definida per a aquesta activitat. No es permet importar-ne una de nova.';
$string['submitcsv'] = 'Importa la rúbrica';
