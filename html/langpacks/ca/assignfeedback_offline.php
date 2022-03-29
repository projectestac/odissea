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
 * Strings for component 'assignfeedback_offline', language 'ca', version '3.11'.
 *
 * @package     assignfeedback_offline
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmimport'] = 'Confirma la importació de qualificacions';
$string['default'] = 'Habilitat per defecte';
$string['default_help'] = 'Si està marcat, la qualificació fora de línia amb fulls de càlcul s\'habilitarà per defecte a totes les noves tasques.';
$string['downloadgrades'] = 'Descarrega el full de càlcul per qualificar';
$string['enabled'] = 'Full de càlcul per qualificar fora de línia';
$string['enabled_help'] = 'Si està habilitat, el professor podrà descarregar i carregar un full de càlcul amb les qualificacions de l\'estudiant quan qualifiqui les tasques.';
$string['feedbackupdate'] = 'Estableix el camp "{$a->field}" de "{$a->student}" a "{$a->text}"';
$string['gradelockedingradebook'] = 'La qualificació de {$a} s\'ha blocat en el llibre de qualificacions';
$string['graderecentlymodified'] = 'La qualificació de {$a} té data de modificació més recent a Moodle que al full de qualificacions';
$string['gradesfile'] = 'Full de qualificacions (format CSV)';
$string['gradesfile_help'] = 'Full de qualificacions amb les qualificacions modificades. Cal que aquest fitxer sigui un fitxer CSV codificat en UTF-8, amb columnes per la qualificació de l\'estudiant i l\'identificador.';
$string['gradeupdate'] = 'Estableix la qualificació de "{$a->student}" a "{$a->grade}"';
$string['ignoremodified'] = 'Permet l\'actualització de registres que s\'hagin modificat més recentment a Moodle que al full de càlcul.';
$string['ignoremodified_help'] = 'Quan es descarrega el full de qualificacions de Moodle, conté la darrera data de modificació de cadascuna de les qualificacions. Si s\'actualitza qualsevol qualificació després d\'haver descarregat aquest full de càlcul, per defecte Moodle refusarà sobreescriure la informació modificada en importar qualificacions. Si establiu aquesta opció, Moodle inhabilitarà aquesta comprovació de seguretat, i podria passar que diversos qualificadors sobreescrivissin les notes dels altres.';
$string['importgrades'] = 'Confirmeu els canvis en el full de qualificació';
$string['invalidgradeimport'] = 'Moodle no ha pogut llegir el full de qualificacions pujat. Assegureu-vos que estigui desat en el format de valors separats per comes (CSV) i torneu-ho a provar.';
$string['nochanges'] = 'No s\'han trobat qualificacions modificades en el full de qualificacions pujat';
$string['offlinegradingworksheet'] = 'Qualificacions';
$string['pluginname'] = 'Full de qualificació fora de línia';
$string['privacy:nullproviderreason'] = 'Aquest connector no disposa de base de dades on emmagatzema informació de l\'usuari. Solament fa ús de l\'API del mod_assign per facilitar la visualització de la interfície de qualificació.';
$string['processgrades'] = 'Importa qualificacions';
$string['skiprecord'] = 'Omet aquest registre';
$string['updatedgrades'] = 'S\'han actualitzat <strong>{$a->gradeupdatescount}</strong> qualificacions i <strong>{$a->feedbackupdatescount}</strong> retroalimentacions.';
$string['updaterecord'] = 'Actualitza el registre';
$string['uploadgrades'] = 'Puja un full de qualificacions';
