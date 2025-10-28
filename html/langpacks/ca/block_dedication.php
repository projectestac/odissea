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
 * Strings for component 'block_dedication', language 'ca', version '4.4'.
 *
 * @package     block_dedication
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admin_filter_courseid'] = 'Nom del curs';
$string['admin_filter_courseid_help'] = 'Filtra l\'informe pel nom del curs';
$string['admin_filter_form'] = 'Configuració del bloc Dedicació al curs';
$string['admin_filter_form_help'] = 'El temps s\'estima basat en els conceptes de Sessió i Durada de sessió aplicats a les entrades de registre.

<strong>Clic:</strong> Cada vegada que un usuari accedeix a una pàgina de Moodle s\'emmagatzema una entrada de registre.

<strong>Sessió:</strong> conjunt de dos o més clics consecutius on el temps transcorregut entre cada parell de clics consecutius no supera el temps màxim establert.

<strong>Durada de la sessió:</strong> temps transcorregut entre el primer i l\'últim clic de la sessió.

<strong>Temps de dedicació:</strong> la suma de tota la durada de la sessió per a un usuari.';
$string['admin_filter_form_text'] = 'Seleccioneu l\'interval de dates i el temps màxim entre els clics de la mateixa sessió.';
$string['admin_filter_maxtime'] = 'Final del període';
$string['admin_filter_maxtime_help'] = 'Considera només les entrades de registre que acabin abans d\'aquesta data';
$string['admin_filter_mintime'] = 'Inici del període';
$string['admin_filter_mintime_help'] = 'Considera només les entrades del registre després d\'aquesta data';
$string['admin_filter_submit'] = 'Calcula';
$string['allloglifetime'] = 'Manté l\'historial de la sessió per';
$string['averagetimespent'] = '<strong>Mitjana de temps dedicat al curs:</strong> {$a}';
$string['cleanuptask'] = 'Tasca de neteja de l\'historial de sessions.';
$string['collect_dedication'] = 'Recull dades per a la dedicació del bloc';
$string['configallloglifetime'] = 'Especifica el temps que voleu conservar les dades sobre la durada de la sessió. Les sessions més antigues s\'eliminen automàticament.';
$string['connectionratiorow'] = 'Connexions per dia';
$string['dedication:addinstance'] = 'Permet d\'addició del bloc de dedicació al curs';
$string['dedication:myaddinstance'] = 'Permet afegir el bloc de dedicació a la pàgina del tauler';
$string['dedication:viewreports'] = 'Permet veure els informes de dedicació';
$string['dedicationall'] = 'Dedicació de tots els membres del curs. Feu clic en qualsevol nom per veure la dedicació detallada d\'aquest.';
$string['dedicationrow'] = 'Temps connectat al curs';
$string['enrolmententity'] = 'Matrícula';
$string['enrolmentmethod'] = 'Mètode d\'inscripció';
$string['entity_dedication'] = 'Dedicació';
$string['excludesessionslessthan'] = 'Exclou les sessions de menys de {$a}';
$string['group'] = 'Grup';
$string['groupentity'] = 'Grup';
$string['ignore_sessions_limit'] = 'Ignora el límit de sessió';
$string['ignore_sessions_limit_desc'] = 'Elimina les sessions més curtes, qualsevol cosa menor que aquest valor (en minuts) serà ignorada a l\'informe de dedicació';
$string['lastupdated'] = 'Última actualització: {$a}';
$string['period'] = 'Període des de <em>{$a->mintime}</em> a <em>{$a->maxtime}</em>';
$string['perioddiff'] = '<strong>Elapsed time:</strong>  {$a}';
$string['pluginname'] = 'Dedicació al curs';
$string['privacy:metadata'] = 'El connector block_dedication emmagatzema els temps que els usuaris han dedicat als cursos.';
$string['privacy:metadata:block_dedication:courseid'] = 'Identificador del curs per a la dedicació de l\'usuari';
$string['privacy:metadata:block_dedication:timespent'] = 'Temps dedicat al curs';
$string['privacy:metadata:block_dedication:timestart'] = 'L\'hora d\'inici de les dades recollides';
$string['privacy:metadata:block_dedication:userid'] = 'Identificador de l\'usuari de la dedicació';
$string['report_dedication'] = 'Eina Informe de la dedicació';
$string['report_timespent'] = 'Informa el temps dedicat';
$string['session_limit'] = 'Límit de sessió';
$string['session_limit_desc'] = 'Límit de sessió per als filtres de la pàgina d\'informe';
$string['sessionduration'] = 'Durada';
$string['sessiondurationsum'] = 'Durada de la sessió (suma)';
$string['sessionstart'] = 'Inici de la sessió';
$string['showestimatedtime'] = 'Mostra als usuaris el temps estimat de dedicació';
$string['showestimatedtime_help'] = 'Aquesta configuració permet als usuaris veure el temps estimat de dedicació en el bloc.';
$string['timespent_estimation'] = 'El temps estimat de dedicació al curs és:';
$string['timespentincourse'] = 'Temps dedicat al curs';
$string['timespentreport'] = 'Informe complet';
$string['timespenttasknotrunning'] = 'La tasca de càlcul del temps de dedicació encara no s\'ha executat.';
$string['totaltimespent'] = '<strong>Temps total dedicat al curs:</strong> {$a}';
$string['user_dedication_datasource'] = 'Dedicació de l\'usuari';
$string['userdedication'] = 'Dedicació detallada del curs de <em>{$a}</em>.';
$string['viewsessiondurationreport'] = 'Mostra l\'informe de la durada de la sessió';
