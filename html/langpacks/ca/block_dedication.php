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
 * Strings for component 'block_dedication', language 'ca', version '4.5'.
 *
 * @package     block_dedication
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admin_filter_courseid'] = 'Nom del curs';
$string['admin_filter_courseid_help'] = 'Filtra l\'informe pel nom del curs';
$string['admin_filter_form'] = 'Configuració de la dedicació';
$string['admin_filter_form_help'] = 'El temps s\'estima basat en els conceptes de Sessió i Durada de sessió aplicats a les entrades de registre.

<strong>Clic:</strong> Cada vegada que un usuari accedeix a una pàgina de Moodle s\'emmagatzema una entrada de registre.

<strong>Sessió:</strong> conjunt de dos o més clics consecutius on el temps transcorregut entre cada parell de clics consecutius no supera el temps màxim establert.

<strong>Durada de la sessió:</strong> temps transcorregut entre el primer i l\'últim clic de la sessió.

<strong>Temps de dedicació:</strong> la suma de tota la durada de la sessió per a un usuari.';
$string['admin_filter_form_text'] = 'Seleccioneu el rang de dates i el temps màxim entre clics de la mateixa sessió.';
$string['admin_filter_maxtime'] = 'Final del període';
$string['admin_filter_maxtime_help'] = 'Considera només registres anteriors a aquesta data';
$string['admin_filter_mintime'] = 'Inici del període';
$string['admin_filter_mintime_help'] = 'Considera només registres posteriors a aquesta data';
$string['admin_filter_submit'] = 'Calcula';
$string['allloglifetime'] = 'Manté l\'històric de sessions durant';
$string['averagetimespent'] = '<strong>Temps mitjà dedicat al curs:</strong> {$a}';
$string['cleanuptask'] = 'Tasca de neteja de l\'historial de sessions';
$string['collect_dedication'] = 'Recull dades pel bloc dedicació';
$string['configallloglifetime'] = 'Especifica el temps que voleu conservar les dades sobre la durada de la sessió. Les sessions més antigues s\'eliminen automàticament.';
$string['connectionratiorow'] = 'Connexions per dia';
$string['dedication:addinstance'] = 'Permet d\'addició del bloc de dedicació al curs';
$string['dedication:myaddinstance'] = 'Permet afegir el bloc de dedicació a la pàgina del tauler';
$string['dedication:viewreports'] = 'Permet veure els informes de dedicació';
$string['dedicationall'] = 'Dedicació de tots els membres del curs. Feu clic en qualsevol nom per veure la dedicació detallada d\'aquest.';
$string['dedicationrow'] = 'Temps connectat al curs';
$string['enrolmententity'] = 'Inscripció';
$string['enrolmentmethod'] = 'Mètode d\'inscripció';
$string['entity_dedication'] = 'Dedicació';
$string['excludesessionslessthan'] = 'Exclou les sessions de menys de {$a}';
$string['group'] = 'Grup';
$string['groupentity'] = 'Grup';
$string['ignore_sessions_limit'] = 'Ingnora el límit de sessió';
$string['ignore_sessions_limit_desc'] = 'Exclou les sessions més curtes, qualsevol cosa que sigui inferior a aquest valor (en minuts) s\'ignorarà a l\'informe de dedicació';
$string['lastupdated'] = 'Última actualització: {$a}';
$string['period'] = 'Període des de <em>{$a->mintime}</em> a <em>{$a->maxtime}</em>';
$string['perioddiff'] = '<strong>Temps tanscorregut:</strong> {$a}';
$string['pluginname'] = 'Dedicació al curs';
$string['privacy:metadata'] = 'El bloc de dedicació emmagatzema els temps que els usuaris dediquen als cursos';
$string['privacy:metadata:block_dedication:courseid'] = 'Id del curs per a la dedicació de l\'usuari';
$string['privacy:metadata:block_dedication:timespent'] = 'Temps dedicat al curs';
$string['privacy:metadata:block_dedication:timestart'] = 'L\'hora d\'inici de les dades recollides';
$string['privacy:metadata:block_dedication:userid'] = 'Identificador d\'usuari de la dedicació de l\'usuari';
$string['report_dedication'] = 'Informe de dedicació';
$string['report_timespent'] = 'Informa el temps dedicat';
$string['session_limit'] = 'Límit de sessió';
$string['session_limit_desc'] = 'Límit de sessió per als filtres de la pàgina d\'informes';
$string['sessionduration'] = 'Durada';
$string['sessiondurationsum'] = 'Durada de sessió (suma)';
$string['sessionstart'] = 'Inici de la sessió';
$string['showestimatedtime'] = 'Mostra el temps estimat dedicat als usuaris';
$string['showestimatedtime_help'] = 'Permet als usuaris veure el bloc amb el seu temps estimat de dedicacció a l\'aula.';
$string['timespent_estimation'] = 'El vostre temps estimat de dedicació al curs és:';
$string['timespentincourse'] = 'Temps dedicat al curs';
$string['timespentreport'] = 'Informe complet';
$string['timespenttasknotrunning'] = 'El càlcul del temps de dedicació encara no s\'ha executat.';
$string['totaltimespent'] = '<strong>Total del temps dedicat al curs:</strong> {$a}';
$string['user_dedication_datasource'] = 'Dedicació dels usuaris';
$string['userdedication'] = 'Dedicació detallada del curs de <em>{$a}</em>.';
$string['viewsessiondurationreport'] = 'Consulta el desglossat de sessions';
