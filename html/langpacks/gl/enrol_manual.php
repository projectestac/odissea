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
 * Strings for component 'enrol_manual', language 'gl', version '3.8'.
 *
 * @package     enrol_manual
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advanced'] = 'Avanzado';
$string['alterstatus'] = 'Cambiar o estado';
$string['altertimeend'] = 'Cambiar a hora de remate';
$string['altertimestart'] = 'Mudar a hora de inicio';
$string['assignrole'] = 'Asignar rol';
$string['assignroles'] = 'Asignar roles';
$string['browsecohorts'] = 'Examinar círculos';
$string['browseusers'] = 'Examinar usuarios';
$string['confirmbulkdeleteenrolment'] = 'Confirma que quere eliminar estas matriculacións de usuarios?';
$string['defaultperiod'] = 'Duración predeterminada da matriculación';
$string['defaultperiod_desc'] = 'Tempo predeterminado durante o que a matriculación é válida. De estabelecerse como cero, a duración da matriculación será ilimitada de modo predeterminado.';
$string['defaultperiod_help'] = 'Tempo predeterminado durante o que a matriculación é válida, que comeza no momento en que o usuario se matricula. De estar desactivado, a duración da matriculación será ilimitado de modo predeterminado.';
$string['defaultstart'] = 'Inicio predeterminado da matriculación';
$string['deleteselectedusers'] = 'Eliminar as matriculacións dos usuarios seleccionados';
$string['editselectedusers'] = 'Editar as matriculacións dos usuarios seleccionados';
$string['enrolledincourserole'] = 'Matriculado en «{$a->course}» como «{$a->role}»';
$string['enrolusers'] = 'Matricular usuarios';
$string['enroluserscohorts'] = 'Matricular os usuarios e círculos seleccionados';
$string['expiredaction'] = 'Acción na expiración da matriculación';
$string['expiredaction_help'] = 'Seleccionar unha acción para realizar cando a matriculación dun usuario expire. Vexa que algúns datos de usuario e configuracións se purgan do curso durante a desmatriculación do curso.';
$string['expirymessageenrolledbody'] = 'Prezado/a {$a->user}:

Esta é unha notificación de que a súa matriculación no curso «{$a->course}» está próxima a expirar en {$a->timeend}.

Se necesita axuda, contacte con {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Notificación de expiración da matriculación';
$string['expirymessageenrollerbody'] = 'A matriculación no curso «{$a->course}» expirará no seguinte {$a->threshold} no caso dos seguintes usuarios:

{$a->users}

Para estender a súa matriculación, vaia a {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Notificación de expiración da matriculación';
$string['manual:config'] = 'Configurar instancias de matriculación manual';
$string['manual:enrol'] = 'Matricular usuarios';
$string['manual:manage'] = 'Xestionar matriculacións de usuarios';
$string['manual:unenrol'] = 'Desmatricular usuarios do curso';
$string['manual:unenrolself'] = 'Desmatricularse do curso';
$string['manualpluginnotinstalled'] = 'O engadido «Manual» aínda non foi instalado';
$string['messageprovider:expiry_notification'] = 'Notificacións de expiración da matriculación';
$string['now'] = 'Agora';
$string['pluginname'] = 'Matriculacións manuais';
$string['pluginname_desc'] = 'O engadido de matriculación manual permítelles aos usuarios seren matriculados manualmente por medio dunha ligazón na configuración da administración do curso, por un usuario cos permisos adecuados, como pode ser un profesor. O engadido xa debería estar activado normalmente, xa que outros engadidos de matriculación, como o de automatriculación o requiren.';
$string['privacy:metadata'] = 'O engadido de matriculacións manuais non almacena ningún dato persoal.';
$string['selectcohorts'] = 'Escoller círculos';
$string['selection'] = 'Selección';
$string['selectusers'] = 'Escoller usuarios';
$string['sendexpirynotificationstask'] = 'Tarefas de enviar notificacións de expiración da matriculación manual';
$string['status'] = 'Activar as matriculacións manuais';
$string['status_desc'] = 'Permitirlle acceso ao curso aos usuarios internamente matriculados. Isto debería permanecer activado na maioría dos casos.';
$string['status_help'] = 'Este axuste determina cando os usuarios poden ser matriculados manualmente, ben mediante unha ligazón nos axustes da administración do curso, ben mediante un usuario cos permisos apropiados como pode ser un profesor.';
$string['statusdisabled'] = 'Desactivado';
$string['statusenabled'] = 'Activado';
$string['syncenrolmentstask'] = 'Sincronizar as tarefas de matriculación manual';
$string['unenrol'] = 'Desmatricular o usuario';
$string['unenrolselectedusers'] = 'Desmatricular os usuarios seleccionados';
$string['unenrolselfconfirm'] = 'Confirma que quere desmatricularse a si mesmo do curso «{$a}»?';
$string['unenroluser'] = 'Confirma que quere desmatricular a «{$a->user}» do curso «{$a->course}»?';
$string['unenrolusers'] = 'Desmatricular usuarios';
$string['wscannotenrol'] = 'A instancia do engadido non pode matricular un usuario no curso co id = {$a->courseid}';
$string['wsnoinstance'] = 'Non existe a instancia do engadido de matriculación manual ou ben está desactivado no curso (id = {$a->courseid})';
$string['wsusercannotassign'] = 'Non ten permiso para asignar este rol de ({$a->roleid}) ao usuario ({$a->userid}) neste curso({$a->courseid}).';
