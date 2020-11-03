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
 * Strings for component 'assignfeedback_file', language 'ca', branch 'MOODLE_38_STABLE'
 *
 * @package   assignfeedback_file
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['batchoperationconfirmuploadfiles'] = 'Voleu pujar un o més fitxers de retroalimentació per a tots els usuaris seleccionats?';
$string['batchuploadfiles'] = 'Penja fitxers de retroalimentació per a múltiples usuaris';
$string['batchuploadfilesforusers'] = 'Envia fitxers de retroalimentació als {$a} usuaris  seleccionats.';
$string['configmaxbytes'] = 'Mida màxima del fitxer';
$string['confirmuploadzip'] = 'Confirma la càrrega del zip';
$string['countfiles'] = '{$a} fitxers';
$string['default'] = 'Habilitat per defecte';
$string['default_help'] = 'Si està actiu, aquest mètode de retroalimentació s\'habilitarà per defecte per a totes les tasques noves.';
$string['enabled'] = 'Retroalimentació amb fitxer';
$string['enabled_help'] = 'Si està habilitat, el professor podrà carregar els fitxers amb la retroalimentació de cada tasca quan les qualifiqui. Aquests fitxers poden ser (però no pas únicament) trameses qualificades dels estudiants, documents amb comentaris o retroalimentacions d\'àudio parlat.';
$string['feedbackfileadded'] = 'Nou fitxer de retroalimentació "{$a->filename}" per a l\'estudiant "{$a->student}"';
$string['feedbackfileupdated'] = 'Fitxer de retroalimentació modificat "{$a->filename}" per a l\'estudiant "{$a->student}"';
$string['feedbackzip'] = 'Fitxer zip amb fitxers de retroalimentació';
$string['feedbackzip_help'] = 'Un fitxer zip que conté una llista de fitxers de retroalimentació per a un o més estudiants. Els fitxers de retroalimentació s\'assignaran als estudiants basant-se en el codi d\'identificació del participant, que ha de ser la segona part de cada nom de fitxer, immediatament després del nom d\'usuari complet. Aquesta convenció s\'utilitza per a baixar les trameses, de manera pugueu baixar totes les trameses, afegir comentaris a alguns fitxers i després tornar a empaquetar en un zip tots els fitxers i penjar-los de nou. Els fitxers sense canvis s\'ignoraran.';
$string['file'] = 'Fitxers de retroalimentació';
$string['filesadded'] = 'S\'han afegit els fitxers de retroalimentació: {$a}';
$string['filesupdated'] = 'S\'han actualitzat els fitxers de retroalimentació: {$a}';
$string['importfeedbackfiles'] = 'Importa fitxers de retroalimentació.';
$string['maxbytes'] = 'Mida màxima del fitxer';
$string['maxfiles'] = 'Quantitat màxima de fitxers carregats';
$string['maximumsize'] = 'Mida màxima del fitxer';
$string['moreusers'] = '{$a} més...';
$string['nochanges'] = 'Sense canvis';
$string['pluginname'] = 'Retroalimentació amb fitxer';
$string['privacy:metadata:filepurpose'] = 'Fitxers amb retroalimentació del professor per a l\'estudiant.';
$string['privacy:path'] = 'Fitxers de retroalimentació';
$string['selectedusers'] = 'Usuaris seleccionats';
$string['uploadfiles'] = 'Envia fitxers de retroalimentació';
$string['uploadzip'] = 'Penja múltiples fitxers de retroalimentació en un zip';
$string['uploadzipsummary'] = 'Fitxers de retroalimentació importats d\'un zip';
$string['userswithnewfeedback'] = 'Usuaris amb retroalimentació actualitzada: {$a}';
