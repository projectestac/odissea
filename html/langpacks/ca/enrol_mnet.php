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
 * Strings for component 'enrol_mnet', language 'ca', version '4.4'.
 *
 * @package     enrol_mnet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['error_multiplehost'] = 'Alguna instància del connector de inscripció MNet ja existeix en aquest servidor. Sols es permet una instància per servidor i/o una instància per « Tots els servidors ».';
$string['instancename'] = 'Nom del mètode d\'inscripció';
$string['instancename_help'] = 'Podeu de forma opcional canviar el nom d\'aquesta instància del mètode d\'inscripció. Si deixeu aquest camp buit, s\'utilitzarà el nom per defecte de la instància que conté el nom del servidor remot i el rol assignat per als usuaris.';
$string['mnet:config'] = 'Configura les instàncies d\'inscripció MNet';
$string['mnet_enrol_description'] = 'Publiqueu aquest servei per permetre als administradors de {$a} inscriure els seus estudiants als cursos que heu creat al vostre servidor.<br/><ul><li><em>Dependència</em>: També us heu de <strong>subscriure </strong> al servei SSO (proveïdor d\'identitat) a {$a}.</li><li><em>Dependència</em>: També heu de <strong>publicar</strong> el servei SSO (proveïdor de serveis) a {$a}.</li></ul><br/>Subscriviu-vos a aquest servei per poder inscriure els vostres estudiants als cursos de {$a}.<br/><ul><li><em>Dependència </em>: També heu de <strong>publicar</strong> el servei SSO (proveïdor d\'identitat) a {$a}.</li><li><em>Dependència</em>: També heu de <strong>subscriure-vos</strong> al servei SSO (proveïdor de serveis) a {$a}.</li></ul><br/>';
$string['mnet_enrol_name'] = 'Inscripcions a Moodle en Xarxa';
$string['pluginname'] = 'Inscripcions remotes MNet';
$string['pluginname_desc'] = 'Habilita el servidor remot MNet per inscriure llurs usuaris als vostres cursos.';
$string['remotesubscriber'] = 'Servidor remot';
$string['remotesubscriber_help'] = 'Selecciona « Tots els servidors » per obrir aquest curs per tots els parells MNet que ofereixin el servei d\'inscripció remot. O escolliu un sol servidor per posar aquest curs a disposició sols dels seus usuaris.';
$string['remotesubscribersall'] = 'Tots els servidors';
$string['roleforremoteusers'] = 'Rol per llurs usuaris';
$string['roleforremoteusers_help'] = 'El rol que els usuaris remots tindran';
