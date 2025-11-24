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
 * Strings for component 'rating', language 'ca', version '4.5'.
 *
 * @package     rating
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregateavg'] = 'Mitjana de qualificacions';
$string['aggregatecount'] = 'Nombre de qualificacions';
$string['aggregatemax'] = 'Qualificació màxima';
$string['aggregatemin'] = 'Qualificació mínima';
$string['aggregatenone'] = 'Sense qualificació';
$string['aggregatesum'] = 'Suma de qualificacions';
$string['aggregatetype'] = 'Tipus d\'agregació';
$string['aggregatetype_help'] = 'El tipus d\'agregació defineix com es combinen les qualificacions per formar la qualificació final en el butlletí de qualificacions.
* Mitjana de qualificacions - La mitjana de totes les qualificacions
* Nombre de qualificacions - La quantitat d\'elements qualificats es converteix en la qualificació final. Fixeu-vos que el total no pot excedir la qualificació màxima de l\'activitat.
* Qualificació màxima - La qualificació més alta es converteix en la qualificació final
* Qualificació mínima - La qualificació més baixa es converteix en la qualificació final
* Suma de qualificacions - Totes les qualificacions s\'afegeixen juntes. Fixeu-vos que el total no pot excedir la qualificació màxima de l\'activitat.

Si està seleccionat "Sense qualificació", llavors l\'activitat no apareix en el butlletí de qualificacions.';
$string['allowratings'] = 'Voleu permetre que els elements es qualifiquin?';
$string['allratingsforitem'] = 'Totes les puntuacions enviades.';
$string['capabilitychecknotavailable'] = 'La capacitat de comprovació no està disponible fins que l\'activitat sigui desada.';
$string['couldnotdeleteratings'] = 'Això no es pot eliminar, perquè hi ha persones que ja han qualificat aquest element.';
$string['norate'] = 'No es permet la qualificació d\'elements.';
$string['noratings'] = 'No s\'han enviat qualificacions.';
$string['noviewanyrate'] = 'Sols podeu veure els resultats per als elements que heu creat.';
$string['noviewrate'] = 'No teniu la capacitat per veure notes d\'activitats.';
$string['privacy:metadata:rating'] = 'La valoració introduïda per l\'usuari s\'emmagatzema al costat d\'un mapatge de l\'element que s\'ha valorat.';
$string['privacy:metadata:rating:rating'] = 'La valoració numèrica que ha introduït l\'usuari.';
$string['privacy:metadata:rating:timecreated'] = 'El moment en què es va fer la valoració per primera vegada.';
$string['privacy:metadata:rating:timemodified'] = 'L\'hora de l\'última actualització de la valoració.';
$string['privacy:metadata:rating:userid'] = 'L\'usuari que ha fet la valoració.';
$string['rate'] = 'Puntua';
$string['ratepermissiondenied'] = 'No teniu permís per qualificar aquesta activitat.';
$string['rating'] = 'Puntuació';
$string['ratinginvalid'] = 'La puntuació és invàlida';
$string['ratings'] = 'Puntuacions';
$string['ratingtime'] = 'Restringeix la qualificació a les entrades fetes entre aquestes dates:';
$string['rolewarning'] = 'Rols amb permís per qualificar';
$string['rolewarning_help'] = 'Per trametre qualificacions els usuaris necessiten la capacitat moodle/rating:rate i totes les capacitats específiques del mòdul. Els usuaris que tinguin assignats els rols següents tindran capacitat per puntuar activitats. La llista de rols pot ser modificada mitjançant els permisos seguint l\'enllaç al bloc de configuracions.';
$string['scaleselectionrequired'] = 'Quan es selecciona un tipus d\'agregació de valoracions, heu de seleccionar una escala o establir una puntuació màxima.';
