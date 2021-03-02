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
 * Strings for component 'enrol', language 'gl', version '3.8'.
 *
 * @package     enrol
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actenrolshhdr'] = 'Dispoñíbeis os engadidos de matriculación';
$string['addinstance'] = 'Engadir método';
$string['addinstanceanother'] = 'Engadir método e crear outro';
$string['ajaxnext25'] = 'Seguintes 25...';
$string['ajaxoneuserfound'] = 'Atopouse 1 usuario';
$string['ajaxxmoreusersfound'] = 'Atopáronse máis de {$a} usuarios';
$string['ajaxxusersfound'] = 'Atopáronse {$a} usuarios';
$string['assignnotpermitted'] = 'Non ten permiso ou non pode asignar roles neste curso.';
$string['bulkuseroperation'] = 'Operación masiva de usuario';
$string['configenrolplugins'] = 'Seleccione todos os engadidos requiridos e arránxeos na orde apropiada.';
$string['custominstancename'] = 'Nome personalizado da instancia';
$string['defaultenrol'] = 'Engadir instancia aos novos cursos';
$string['defaultenrol_desc'] = 'É posíbel engadir este engadido a todos os novos cursos de modo predeterminado.';
$string['deleteinstanceconfirm'] = 'Está a piques de eliminar o método de matriculación «{$a->name}». Todos os {$a->users} usuarios matriculados actualmente usando este método serán desmatriculados (dados de baixa) e eliminaranse todos os datos relacionados co curso, como as cualificacións, pertenza de grupos ou subscricións ao foro dos usuarios.

Confirma que quere continuar?';
$string['deleteinstanceconfirmself'] = 'Confirma definitivamente que quere eliminar a instancia «{$a->name}» que lle da acceso a este curso? É probábel que xa non poida acceder a este curso se continúa.';
$string['deleteinstancenousersconfirm'] = 'Está a piques de eliminar o método de matriculación «{$a->name}». Confirma que quere continuar?';
$string['disableinstanceconfirmself'] = 'Confirma definitivamente que quere desactivar a instancia «{$a->name}» que lle da acceso a este curso? É probábel que xa non poida acceder a este curso se continúa.';
$string['durationdays'] = '{$a} días';
$string['editenrolment'] = 'Editar a matriculación';
$string['edituserenrolment'] = 'Editar a matriculación de {$a}';
$string['enrol'] = 'Matricularse';
$string['enrolcandidates'] = 'Usuarios non matriculados';
$string['enrolcandidatesmatching'] = 'Atopando usuarios non matriculados';
$string['enrolcohort'] = 'Matricular grupo';
$string['enrolcohortusers'] = 'Matricular usuarios';
$string['enroldetails'] = 'Detalles da matriculación';
$string['enrollednewusers'] = 'Matriculados correctamente {$a} novos usuarios';
$string['enrolledusers'] = 'Usuarios matriculados';
$string['enrolledusersmatching'] = 'Atopar usuarios matriculados';
$string['enrolme'] = 'Matricularme neste curso';
$string['enrolmentinstances'] = 'Métodos de matriculación';
$string['enrolmentmethod'] = 'Método de matriculación';
$string['enrolmentnew'] = 'Nova matriculación en {$a}';
$string['enrolmentnewuser'] = '{$a->user} matriculouse neste curso «{$a->course}»';
$string['enrolmentoptions'] = 'Opcións de matriculación';
$string['enrolments'] = 'Matriculacións';
$string['enrolnotpermitted'] = 'Non ten permiso ou non se lle permite matricular a ninguén neste curso';
$string['enrolperiod'] = 'Duración da matriculación';
$string['enroltimecreated'] = 'Creada a matriculación';
$string['enroltimeend'] = 'Finalizada a matriculación';
$string['enroltimeendinvalid'] = 'A data de remate da matriculación debe ser posterior á data de inicio da matriculación';
$string['enroltimestart'] = 'Comeza a matriculación';
$string['enrolusage'] = 'Instancias / matriculacións';
$string['enrolusers'] = 'Matricular usuarios';
$string['enrolxusers'] = 'Matricular {$a} usuarios';
$string['errajaxfailedenrol'] = 'Produciuse un fallo ao matricular o usuario';
$string['errajaxsearch'] = 'Produciuse un erro ao buscar usuarios';
$string['erroreditenrolment'] = 'Produciuse un erro ao tentar editar a matriculación de usuarios';
$string['errorenrolcohort'] = 'Produciuse un erro ao crear unha instancia de sincronización de matriculación neste curso.';
$string['errorenrolcohortusers'] = 'Produciuse un erro ao matricular membros do grupo neste curso.';
$string['errorthresholdlow'] = 'O limiar de notificación ten que ser polo menos de 1 día';
$string['errorwithbulkoperation'] = 'Produciuse un erro ao procesar o cambio de matriculación masiva.';
$string['eventenrolinstancecreated'] = 'Creada a instancia de matriculación';
$string['eventenrolinstancedeleted'] = 'Eliminada a instancia de matriculación';
$string['eventenrolinstanceupdated'] = 'Actualizouse a instancia de matriculación';
$string['eventuserenrolmentcreated'] = 'Usuario matriculado no curso';
$string['eventuserenrolmentdeleted'] = 'Usuario desmatriculado do curso';
$string['eventuserenrolmentupdated'] = 'Actualizada a desmatriculación do usuario';
$string['expirynotify'] = 'Notificar antes de que expire a matriculación';
$string['expirynotify_help'] = 'Este axuste determina se enviar ou non mensaxes de notificación respecto a expiración da matriculación.';
$string['expirynotifyall'] = 'Matriculador e usuario matriculado';
$string['expirynotifyenroller'] = 'Só o matriculador';
$string['expirynotifyhour'] = 'Hora na que se envían as notificacións de expiración da matriculación';
$string['expirythreshold'] = 'Limiar de notificación';
$string['expirythreshold_help'] = 'Canto tempo antes de que expire a matriculación habería que notificárllelo aos usuarios?';
$string['extremovedaction'] = 'Acción de desmatriculación externa';
$string['extremovedaction_help'] = 'Seleccionar unha acción para realizar cando a matriculación dun usuario desaparece da orixe de matriculación. Algúns datos de usuario e axustes púrganse do curso durante a desmatriculación.';
$string['extremovedkeep'] = 'Manter o usuario matriculado';
$string['extremovedsuspend'] = 'Desactivar a matriculación do curso';
$string['extremovedsuspendnoroles'] = 'Desactivar a matriculación do curso e retirar roles';
$string['extremovedunenrol'] = 'Desmatricular un usuario do curso';
$string['finishenrollingusers'] = 'Rematar a matriculación de usuarios';
$string['foundxcohorts'] = 'Atopáronse {$a} grupos';
$string['instanceadded'] = 'O método foi engadido';
$string['instanceeditselfwarning'] = 'Aviso:';
$string['instanceeditselfwarningtext'] = 'Vostede está matriculado neste curso mediante este método de matriculación, os cambios poden afectar ao seu acceso a este curso.';
$string['invalidenrolduration'] = 'Duración de matriculación incorrecta';
$string['invalidenrolinstance'] = 'Instancia de matriculación incorrecta';
$string['invalidrequest'] = 'Solicitude incorrecta';
$string['invalidrole'] = 'Rol incorrecto';
$string['manageenrols'] = 'Xestionar os engadidos de matriculación';
$string['manageinstance'] = 'Xestionar';
$string['migratetomanual'] = 'Migrar cara a matriculación manual';
$string['nochange'] = 'Sen cambios';
$string['noexistingparticipants'] = 'Participantes inexistentes';
$string['nogroup'] = 'Sen grupo';
$string['noguestaccess'] = 'Os convidados non poden acceder a este curso, tente acceder.';
$string['none'] = 'Ningún';
$string['notenrollable'] = 'Non pode matricularse a si mesmo neste curso.';
$string['notenrolledusers'] = 'Outros usuarios';
$string['otheruserdesc'] = 'Os seguintes usuarios non están matriculados neste curso pero teñen roles, herdados ou asignados polo curso.';
$string['participationactive'] = 'Activo';
$string['participationnotcurrent'] = 'Non actual';
$string['participationstatus'] = 'Estado';
$string['participationsuspended'] = 'Suspendido';
$string['periodend'] = 'ata {$a}';
$string['periodnone'] = 'matriculado {$a}';
$string['periodstart'] = 'dende {$a}';
$string['periodstartend'] = 'dende {$a->start} ata {$a->end}';
$string['privacy:metadata:user_enrolments'] = 'Matriculacións';
$string['privacy:metadata:user_enrolments:enrolid'] = 'A instancia do engadido de matriculación.';
$string['privacy:metadata:user_enrolments:modifierid'] = 'O ID do usuario que modificou a matriculación do usuario por última vez.';
$string['privacy:metadata:user_enrolments:status'] = 'O estado da matriculación do usuario nun curso.';
$string['privacy:metadata:user_enrolments:tableexplanation'] = 'Aquí é onde a xestión de Matriculación almacena os usuarios matriculados.';
$string['privacy:metadata:user_enrolments:timecreated'] = 'A data/hora na que se creou a matriculación do usuario.';
$string['privacy:metadata:user_enrolments:timeend'] = 'A data/hora na que rematou a matriculación do usuario.';
$string['privacy:metadata:user_enrolments:timemodified'] = 'A data/hora na que se modificou a matriculación do usuario.';
$string['privacy:metadata:user_enrolments:timestart'] = 'A data/hora na que comezou a matriculación do usuario.';
$string['privacy:metadata:user_enrolments:userid'] = 'O ID do usuario.';
$string['proceedtocourse'] = 'Continúe co contido do curso';
$string['recovergrades'] = 'Recuperar antigas puntuacións do usuario se é posíbel';
$string['rolefromcategory'] = '{$a->role} (Herdado da categoría do curso)';
$string['rolefrommetacourse'] = '{$a->role} (Herdado do curso pai)';
$string['rolefromsystem'] = '{$a->role} (Asignado a un nivel de sitio)';
$string['rolefromthiscourse'] = '{$a->role} (Asignado neste curso)';
$string['sendfromcoursecontact'] = 'Do contacto do curso';
$string['sendfromkeyholder'] = 'Do chaveiro';
$string['sendfromnoreply'] = 'Do enderezo «sen resposta»';
$string['startdatetoday'] = 'Hoxe';
$string['synced'] = 'Sincronizado';
$string['testsettings'] = 'Proba das configuracións';
$string['testsettingsheading'] = 'Probar os axustes de matriculación - {$a}';
$string['totalenrolledusers'] = '{$a} usuarios matriculados';
$string['totalotherusers'] = '{$a} outros usuarios';
$string['totalunenrolledusers'] = '{$a} usuarios desmatriculados';
$string['unassignnotpermitted'] = 'Non ten permiso para desasignar roles neste curso';
$string['unenrol'] = 'Desmatricular';
$string['unenrolconfirm'] = 'Confirma que quere desmatricular o usuario «{$a->user}» do curso «{$a->course}»?';
$string['unenrolme'] = 'Desmatricularme de {$a}';
$string['unenrolnotpermitted'] = 'Non ten permiso ou non pode desmatricular este usuario do curso.';
$string['unenrolroleusers'] = 'Desmatricular usuarios';
$string['uninstallmigrating'] = 'Migrando «{$a}» inscricións';
$string['unknowajaxaction'] = 'A acción solicitada é descoñecida';
$string['unlimitedduration'] = 'Sen límite';
$string['userremovedfromselectiona'] = 'O usuario «{$a}» foi retirado da selección.';
$string['usersearch'] = 'Buscar';
$string['withselectedusers'] = 'Con usuarios seleccionados';
$string['youenrolledincourse'] = 'Vostede está matriculado no curso';
$string['youunenrolledfromcourse'] = 'Vostede foi desmatriculado do curso «{$a}».';
