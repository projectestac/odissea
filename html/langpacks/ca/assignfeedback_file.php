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
 * Strings for component 'assignfeedback_file', language 'ca', version '4.5'.
 *
 * @package     assignfeedback_file
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['batchoperationconfirmuploadfiles'] = 'Voleu pujar un o més fitxers de retroacció per a tots els usuaris seleccionats?';
$string['batchoperationuploadfiles'] = 'Puja els fitxers de retroacció';
$string['batchuploadfiles'] = 'Penja fitxers de retroacció per a múltiples usuaris';
$string['batchuploadfilesforusers'] = 'Envia fitxers de retroacció als {$a} usuaris seleccionats.';
$string['configmaxbytes'] = 'Mida màxima del fitxer';
$string['confirmuploadzip'] = 'Confirma la càrrega del zip';
$string['countfiles'] = '{$a} fitxers';
$string['default'] = 'Habilitat per defecte';
$string['default_help'] = 'Si està actiu, aquest mètode de retroacció s\'habilitarà per defecte per a totes les tasques noves.';
$string['enabled'] = 'Retroacció amb fitxer';
$string['enabled_help'] = 'Si està habilitat, el professor podrà carregar els fitxers amb la retroacció de cada tasca quan les qualifiqui. Aquests fitxers poden ser (però no únicament) trameses qualificades dels estudiants, documents amb comentaris o retroaccions d\'àudio parlat.';
$string['feedbackfileadded'] = 'Fitxer nou de retroacció «{$a->filename}» per a l\'estudiant «{$a->student}»';
$string['feedbackfileupdated'] = 'Fitxer de retroacció modificat "{$a->filename}" per a l\'estudiant "{$a->student}"';
$string['feedbackzip'] = 'Fitxer zip amb fitxers de retroacció';
$string['feedbackzip_help'] = 'Un fitxer zip que conté una llista de fitxers de retroacció per a un o més estudiants. Els fitxers de retroacció s\'assignaran als estudiants basant-se en el codi d\'identificació del participant, que ha de ser la segona part de cada nom de fitxer, immediatament després del nom d\'usuari complet. Aquesta convenció s\'utilitza per a baixar les trameses, de manera pugueu baixar totes les trameses, afegir comentaris a alguns fitxers i després tornar a empaquetar en un zip tots els fitxers i penjar-los de nou. Els fitxers sense canvis s\'ignoraran.';
$string['file'] = 'Fitxers de retroacció';
$string['filesadded'] = 'S\'han afegit els fitxers de retroacció: {$a}';
$string['filesupdated'] = 'S\'han afegit els fitxers de retroacció: {$a}';
$string['importfeedbackfiles'] = 'Importa fitxers de retroacció';
$string['maxbytes'] = 'Mida màxima del fitxer';
$string['maxfiles'] = 'Quantitat màxima de fitxers carregats';
$string['maximumsize'] = 'Mida màxima del fitxer';
$string['moreusers'] = '{$a} més...';
$string['nochanges'] = 'Sense canvis';
$string['pluginname'] = 'Retroacció amb fitxer';
$string['privacy:metadata:filepurpose'] = 'Fitxers amb retroacció del professor per a l\'estudiant.';
$string['privacy:path'] = 'Fitxers amb retroacció';
$string['selectedusers'] = 'Usuaris seleccionats';
$string['uploadfiles'] = 'Envia fitxers de retroacció';
$string['uploadzip'] = 'Penja múltiples fitxers de retroacció en un zip';
$string['uploadzipsummary'] = 'Fitxers de retroacció importats d\'un zip';
$string['userswithnewfeedback'] = 'Usuaris amb retroacció actualitzada: {$a}';
