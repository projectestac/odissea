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
 * Strings for component 'mnetservice_enrol', language 'gl', version '4.4'.
 *
 * @package     mnetservice_enrol
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['availablecourseson'] = 'Cursos dispoñíbeis en {$a}';
$string['availablecoursesonnone'] = 'A máquina remota <a href="{$a->hosturl}">{$a->hostname}</a> non ofrece ningún curso aos nosos usuarios.';
$string['clientname'] = 'Cliente remoto de matriculacións';
$string['clientname_help'] = 'Esta ferramenta permítelle matricular e dar de baixa aos seus usuarios locais en máquinas remotas que permitan facelo a través do engadido «MNet de matriculacións remotas»';
$string['editenrolments'] = 'Editar as matriculacións';
$string['hostappname'] = 'Aplicación';
$string['hostname'] = 'Nome da máquina';
$string['hosturl'] = 'URL da máquina remota';
$string['nopublishers'] = 'Non hai dispoñíbeis pares remotos.';
$string['noroamingusers'] = 'Os usuarios deben ter o permiso de «{$a}» no contexto do sistema para inscribirse nos cursos remotos, porén actualmente non hai usuarios con esos permisos. Prema no botón Continuar para asignar o permiso requirido para un ou máis roles no seu sitio.';
$string['otherenrolledusers'] = 'Outros usuarios matriculados';
$string['pluginname'] = 'Servizo remoto de matriculacións';
$string['privacy:metadata:mnetservice_enrol_enrolments'] = 'Servizo remoto de matriculacións';
$string['privacy:metadata:mnetservice_enrol_enrolments:enroltime'] = 'A data/hora na que se modificou a matriculación.';
$string['privacy:metadata:mnetservice_enrol_enrolments:enroltype'] = 'O nome do engadido de matriculación no servidor remoto que se utilizou para matricular o noso alumno no seu curso.';
$string['privacy:metadata:mnetservice_enrol_enrolments:hostid'] = 'O ID da máquina/servidor remoto MNet';
$string['privacy:metadata:mnetservice_enrol_enrolments:remotecourseid'] = 'ID do curso no servidor remoto.';
$string['privacy:metadata:mnetservice_enrol_enrolments:rolename'] = 'O nome do rol no servidor remoto.';
$string['privacy:metadata:mnetservice_enrol_enrolments:tableexplanation'] = 'Esta táboa almacena información sobre matriculacións dos nosos usuarios locais en cursos sobre servidores remotos.';
$string['privacy:metadata:mnetservice_enrol_enrolments:userid'] = 'O ID do noso usuario local neste servidor';
$string['refetch'] = 'Volver a buscar o estado actualizado dende máquinas remotas';
