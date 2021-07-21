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
 * Strings for component 'assign', language 'gl', version '3.11'.
 *
 * @package     assign
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'Hai tarefas que requiren da súa atención';
$string['addattempt'] = 'Permitir outro intento';
$string['addnewattempt'] = 'Engadir un novo intento';
$string['addnewattempt_help'] = 'Isto creará unha nova entrega baleira para que poida traballar nela.';
$string['addnewattemptfromprevious'] = 'Engadir un novo intento baseado nunha entrega anterior';
$string['addnewattemptfromprevious_help'] = 'Isto copiará os contidos das súas entregas anteriores a unha nova entrega, para que poida traballar nela.';
$string['addnewgroupoverride'] = 'Engadir anulación de grupo';
$string['addnewuseroverride'] = 'Engadir anulación de usuario';
$string['addsubmission'] = 'Engadir entrega';
$string['addsubmission_help'] = 'Vostede aínda non fixo ningunha entrega';
$string['allocatedmarker'] = 'Corrector asignado';
$string['allocatedmarker_help'] = 'Corrector asignado a esta entrega';
$string['allowsubmissions'] = 'Permitirlle ao usuario continuar facendo entregas a esta tarefa';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'Os detalles da tarefa e o formulario de entregas estarán dispoñíbeis en <strong>{$a}</strong>';
$string['allowsubmissionsfromdate'] = 'Permitir entregas de';
$string['allowsubmissionsfromdate_help'] = 'Se está activado, os alumnos non poderán facer entregas antes desta data. Se está desactivado, os alumnos poderán comezar as entregas de inmediato.';
$string['allowsubmissionsfromdatesummary'] = 'Esta tarefa aceptará entregas de <strong>{$a}</strong>';
$string['allowsubmissionsshort'] = 'Permitir a actualización de entregas';
$string['alwaysshowdescription'] = 'Amosar sempre a descrición';
$string['alwaysshowdescription_help'] = 'Se está desactivado, a descrición da tarefa anterior só será visíbel para os alumnos na data «Permitir entregas dende».';
$string['applytoteam'] = 'Aplicar cualificacións e comentarios a todo o grupo';
$string['assign:addinstance'] = 'Engadir unha nova tarefa';
$string['assign:editothersubmission'] = 'Editar a entrega doutro alumno';
$string['assign:exportownsubmission'] = 'Exportar a propia entrega';
$string['assign:grade'] = 'Cualificación da tarefa';
$string['assign:grantextension'] = 'Concesión da prórroga';
$string['assign:manageallocations'] = 'Xestionar os correctores asignados ás entregas';
$string['assign:managegrades'] = 'Revisión e publicación de cualificacións';
$string['assign:manageoverrides'] = 'Administrar as anulacións en tarefas';
$string['assign:receivegradernotifications'] = 'Recibir notificacións de entregas da persoa que cualifica';
$string['assign:releasegrades'] = 'Publicación de cualificacións';
$string['assign:revealidentities'] = 'Amosar identidade dos alumnos';
$string['assign:reviewgrades'] = 'Revisión de cualificacións';
$string['assign:showhiddengrader'] = 'Ver a identidade dun cualificador agochado';
$string['assign:submit'] = 'Entregar tarefa';
$string['assign:view'] = 'Ver tarefa';
$string['assign:viewblinddetails'] = 'Ver a identidade dos alumnos cando se active a puntuación cega';
$string['assign:viewgrades'] = 'Ver as cualificacións';
$string['assignfeedback'] = 'Engadido de comentarios';
$string['assignfeedbackpluginname'] = 'Engadido de comentarios';
$string['assignmentisdue'] = 'A tarefa acadou a data límite';
$string['assignmentmail'] = 'O cualificador {$a->grader} fixo algúns comentarios
na entrega da súa tarefa «{$a->assignment}»

Pode velos anexos a entrega da tarefa:

    {$a->url}';
$string['assignmentmailhtml'] = 'O cualificador {$a->grader} fixo algúns comentarios
na entrega da súa tarefa «<i>{$a->assignment}</i>»<br /><br />
Pode velos anexos a entrega <a href="{$a->url}">da tarefa</a>.';
$string['assignmentmailsmall'] = 'O cualificador {$a->grader} fixo algúns comentarios
na entrega da súa tarefa «{$a->assignment}». pode ver los anexos a entrega da tarefa';
$string['assignmentname'] = 'Nome da tarefa';
$string['assignmentplugins'] = 'Engadidos de tarefa';
$string['assignmentsperpage'] = 'Tarefas por páxina';
$string['assignsubmission'] = 'Engadido de entregas';
$string['assignsubmissionpluginname'] = 'Engadido de entregas';
$string['attemptheading'] = 'Intento {$a->attemptnumber}: {$a->submissionsummary}';
$string['attempthistory'] = 'Intentos anteriores';
$string['attemptnumber'] = 'Número do intento';
$string['attemptreopenmethod'] = 'Intentos reabertos';
$string['attemptreopenmethod_help'] = 'Determina como se reabren os intentos de entrega dos alumnos. As opcións dispoñíbeis son:

* Nunca - A entrega do alumno non se pode reabrir.
* Manualmente: un profesor pode volver abrir a entrega.
* Automaticamente ata aprobar - A entrega do alumno reábrese automaticamente ata que o alumno acada o nivel para aprobar respecto do valor estabelecido no libro de cualificacións para esta tarefa.';
$string['attemptreopenmethod_manual'] = 'Manualmente';
$string['attemptreopenmethod_none'] = 'Nunca';
$string['attemptreopenmethod_untilpass'] = 'Automaticamente ata pasar';
$string['attemptsettings'] = 'Axustes do intento';
$string['availability'] = 'Dispoñibilidade';
$string['backtoassignment'] = 'Volver a tarefa';
$string['batchoperationconfirmaddattempt'] = 'Permitir outro intento para as entregas seleccionadas?';
$string['batchoperationconfirmdownloadselected'] = 'Descargar todas as entregas seleccionadas?';
$string['batchoperationconfirmgrantextension'] = 'Conceder unha prórroga para todas as entregas seleccionadas?';
$string['batchoperationconfirmlock'] = 'Bloquear todas as entregas seleccionadas?';
$string['batchoperationconfirmremovesubmission'] = 'Retirar todas as entregas seleccionadas?';
$string['batchoperationconfirmreverttodraft'] = 'Reverter as entregas seleccionadas a versión preliminar?';
$string['batchoperationconfirmsetmarkingallocation'] = 'Estabelecer a asignación de correctores para todas as entregas seleccionadas?';
$string['batchoperationconfirmsetmarkingworkflowstate'] = 'Estabelecer o estado do fluxo de traballo de corrección para todas as entregas seleccionadas?';
$string['batchoperationconfirmunlock'] = 'Desbloquear todas as entregas seleccionadas?';
$string['batchoperationlock'] = 'bloquear entregas';
$string['batchoperationreverttodraft'] = 'reverter as entregas a versións preliminares';
$string['batchoperationsdescription'] = 'Co seleccionado...';
$string['batchoperationunlock'] = 'desbloquear entregas';
$string['batchsetallocatedmarker'] = 'Estabelecer o corrector asignado para {$a} usuario(s) seleccionado(s).';
$string['batchsetmarkingworkflowstateforusers'] = 'Estabelecer o estado do fluxo de traballo de corrección para {$a} usuario(s) seleccionado(s).';
$string['blindmarking'] = 'Puntuación cega';
$string['blindmarking_help'] = 'A puntuación cega agocha a identidade dos alumnos aos correctores. Os axustes da corrección cega bloquearase dende o momento en que se faga unha entrega en relación con esta tarefa.';
$string['blindmarkingenabledwarning'] = 'A corrección cega está activada para esta actividade.';
$string['calendardue'] = '{$a} pendente de entrega';
$string['calendargradingdue'] = '{$a} pendente de cualificación';
$string['changefilters'] = 'Cambiar os filtros';
$string['changeuser'] = 'Cambiar o usuario';
$string['choosegradingaction'] = 'Acción de cualificación';
$string['choosemarker'] = 'Escolla...';
$string['chooseoperation'] = 'Escoller operación';
$string['clickexpandreviewpanel'] = 'Prema para expandir o panel de revisión';
$string['collapsegradepanel'] = 'Contraer o panel de cualificación';
$string['collapsereviewpanel'] = 'Contraer o panel de revisión';
$string['comment'] = 'Comentario';
$string['completionsubmit'] = 'O alumno debe entregar esta actividade para completala';
$string['configshowrecentsubmissions'] = 'Calquera pode ver as notificacións das entregas nos informes de actividade recente.';
$string['confirmbatchgradingoperation'] = 'Confirma que quere {$a->operation} a {$a->count} alumnos?';
$string['confirmsubmission'] = 'Confirma que quere entregar o seu traballo para cualificación? Non poderá facerlle máis cambios.';
$string['confirmsubmissionheading'] = 'Confirmar entrega';
$string['conversionexception'] = 'Non foi posíbel converter a tarefa. Agás: {$a}.';
$string['couldnotconvertgrade'] = 'Non foi posíbel converter a cualificación da tarefa do usuario {$a}.';
$string['couldnotconvertsubmission'] = 'Non foi posíbel converter a entrega da tarefa do usuario {$a}.';
$string['couldnotcreatecoursemodule'] = 'Non foi posíbel crear o módulo do curso';
$string['couldnotcreatenewassignmentinstance'] = 'Non foi posíbel crear unha nova instancia da tarefa.';
$string['couldnotfindassignmenttoupgrade'] = 'Non foi posíbel atopar instancias de tarefa anteriores para actualizar.';
$string['crontask'] = 'Procesamento en segundo plano para o módulo de tarefa';
$string['currentassigngrade'] = 'Cualificación actual na tarefa';
$string['currentattempt'] = 'Este é o intento {$a}.';
$string['currentattemptof'] = 'Este é o intento {$a->attemptnumber} ( {$a->maxattempts} intentos permitidos ).';
$string['currentgrade'] = 'Cualificación actual no libro de cualificacións';
$string['cutoffdate'] = 'Data de corte';
$string['cutoffdate_help'] = 'De estar definida, a tarefa non aceptará entregas após esta data sen unha prórroga.';
$string['cutoffdatecolon'] = 'Data de corte: {$a}';
$string['cutoffdatefromdatevalidation'] = 'A data de corte debe ser posterior a data de inicio das entregas.';
$string['cutoffdatevalidation'] = 'A data de corte non pode ser anterior á data límite.';
$string['defaultlayout'] = 'Restaurar o deseño predeterminado';
$string['defaultsettings'] = 'Axustes predeterminados da tarefa';
$string['defaultsettings_help'] = 'Estes axustes definen os valores predeterminados para todas as novas tarefas.';
$string['defaultteam'] = 'Grupo predeterminado';
$string['deleteallsubmissions'] = 'Eliminar todas as entregas';
$string['description'] = 'Descrición';
$string['disabled'] = 'Desactivado';
$string['downloadall'] = 'Descargar todas as entregas';
$string['downloadasfolders'] = 'Descargar as entregas en cartafoles';
$string['downloadasfolders_help'] = 'As entregas de tarefas poden descargarse en cartafoles. Cada envío é entón colocado nun cartafol separado, coa estrutura do cartafol mantida para calquera subcartafol, e os ficheiros non se renomearán.';
$string['downloadselectedsubmissions'] = 'Descargar as entregas seleccionadas';
$string['duedate'] = 'Data límite';
$string['duedate_help'] = 'Isto é cando caducou a tarefa. As entregas aínda se permitirán após esta data mais calquera tarefa entregada tras esta data corrixirase como serodia. Para evitar entregas após unha certa data estabeleza a data de corte da tarefa.';
$string['duedatecolon'] = 'Data límite: {$a}';
$string['duedateno'] = 'Sen data límite';
$string['duedatereached'] = 'A data límite desta tarefa xa pasou';
$string['duedatevalidation'] = 'A data límite debe ser posterior á data de inicio das entregas.';
$string['duplicateoverride'] = 'Excepción duplicada';
$string['editaction'] = 'Accións...';
$string['editattemptfeedback'] = 'Editar a cualificación e os comentarios para o intento número {$a}.';
$string['editingpreviousfeedbackwarning'] = 'Está editando os comentarios para un intento anterior. Este é o intento {$a->attemptnumber} de {$a->totalattempts}.';
$string['editingstatus'] = 'Editando o estado';
$string['editonline'] = 'Editar en liña';
$string['editoverride'] = 'Editar a anulación';
$string['editsubmission'] = 'Editar entrega';
$string['editsubmission_help'] = 'Aínda pode facerlle cambios á súa entrega';
$string['editsubmissionother'] = 'Editar entregas para {$a';
$string['enabled'] = 'Activado';
$string['errornosubmissions'] = 'Non hai entregas que descargar';
$string['errorquickgradingvsadvancedgrading'] = 'As cualificación non foron gardadas xa que esta tarefa emprega a cualificación avanzada';
$string['errorrecordmodified'] = 'As cualificación non foron gardadas xa que alguén vén de modificar un ou máis rexistros, antes de que vostede cargara a páxina.';
$string['eventallsubmissionsdownloaded'] = 'Estanse descargando todas as entregas.';
$string['eventassessablesubmitted'] = 'Entrega feita.';
$string['eventbatchsetmarkerallocationviewed'] = 'Vista a asignación de corrector por lotes';
$string['eventbatchsetworkflowstateviewed'] = 'Visto o estado do fluxo de traballo por lotes.';
$string['eventextensiongranted'] = 'Outorgouse unha ampliación.';
$string['eventfeedbackupdated'] = 'Actualizado o comentario';
$string['eventfeedbackviewed'] = 'Visto o comentario';
$string['eventgradingformviewed'] = 'Visto o formulario de cualificación';
$string['eventgradingtableviewed'] = 'Vista a táboa de cualificación';
$string['eventidentitiesrevealed'] = 'Reveláronse as identidades.';
$string['eventmarkerupdated'] = 'Actualizouse o corrector asignado.';
$string['eventoverridecreated'] = 'Creouse a anulación da tarefa';
$string['eventoverridedeleted'] = 'Eliminouse a anulación da tarefa';
$string['eventoverrideupdated'] = 'Actualizouse a anulación da tarefa';
$string['eventremovesubmissionformviewed'] = 'Retira a confirmación da entrega vista.';
$string['eventrevealidentitiesconfirmationpageviewed'] = 'Vista a paxina de confirmación de revelación de identidades.';
$string['eventstatementaccepted'] = 'O usuario aceptou a declaración da entrega.';
$string['eventsubmissionconfirmationformviewed'] = 'Visto o formato de confirmación de entrega.';
$string['eventsubmissioncreated'] = 'Entrega creada.';
$string['eventsubmissionduplicated'] = 'O usuario duplicou a súa entrega.';
$string['eventsubmissionformviewed'] = 'Visto o formulario da entrega';
$string['eventsubmissiongraded'] = 'A entrega foi cualificada.';
$string['eventsubmissionlocked'] = 'As entregas foron bloqueadas para un usuario.';
$string['eventsubmissionstatusupdated'] = 'Actualizouse o estado da entrega.';
$string['eventsubmissionstatusviewed'] = 'Visto o estado da entrega.';
$string['eventsubmissionunlocked'] = 'As entregas foron desbloqueadas para un usuario.';
$string['eventsubmissionupdated'] = 'Entrega actualizada.';
$string['eventsubmissionviewed'] = 'Vista a entrega';
$string['eventworkflowstateupdated'] = 'Actualizouse o estado do fluxo de traballo.';
$string['expandreviewpanel'] = 'Expandir o panel de revisión';
$string['extensionduedate'] = 'Ampliación do prazo.';
$string['extensionnotafterduedate'] = 'A data da ampliación debe ser posterior á data límite';
$string['extensionnotafterfromdate'] = 'A data da ampliación debe ser posterior á data de inicio das entregas';
$string['feedback'] = 'Comentarios';
$string['feedbackavailableanonhtml'] = 'Ten un novo comentario sobre a súa
entrega de tarefas para «<i>{$a->assignment}</i>»<br /><br />
Pode velo anexado a súa <a href="{$a->url}">entrega de tarefas</a>.';
$string['feedbackavailableanonsmall'] = 'Novo comentario para a tarefa {$a->assignment}';
$string['feedbackavailableanontext'] = 'Ten un novo comentario sobre a súa
entrega de tarefa para «{$a->assignment}»

Pode velo anexando a súa entrega de tarefas:

    {$a->url}';
$string['feedbackavailablehtml'] = 'O usuario {$a->username} fixo algúns comentarios
na entrega da súa tarefa «<i>{$a->assignment}</i>»<br /><br />
Pode velos anexos a entrega <a href="{$a->url}">da tarefa</a>.';
$string['feedbackavailablesmall'] = 'O usuario {$a->username} fixo un comentario a tarefa {$a->assignment}.';
$string['feedbackavailabletext'] = 'O usuario {$a->username} fixo algúns comentarios
na entrega da súa tarefa «{$a->assignment}»

Pode ver os anexos a entrega da tarefa:

    {$a->url}';
$string['feedbackplugin'] = 'Engadido de comentarios';
$string['feedbackpluginforgradebook'] = 'Engadido de comentarios que envía os comentarios ao libro de cualificacións';
$string['feedbackpluginforgradebook_help'] = 'Só un engadido de comentarios da tarefa pode enviar os comentarios ao libro de cualificacións.';
$string['feedbackplugins'] = 'Engadidos de comentarios';
$string['feedbacksettings'] = 'Axustes dos comentarios';
$string['feedbacktypes'] = 'Tipo de comentarios';
$string['filesubmissions'] = 'Entregas de ficheiros';
$string['filter'] = 'Filtro';
$string['filtergrantedextension'] = 'Prórroga concedida';
$string['filternone'] = 'Sen filtro';
$string['filternotsubmitted'] = 'Non entregada';
$string['filterrequiregrading'] = 'Require cualificación';
$string['filtersubmitted'] = 'Entregada';
$string['fixrescalednullgrades'] = 'Esta tarefa contén algunhas cualificacións trabucadas. Pode <a href="{$a->link}">corrixir automaticamente estas notas</a>. Isto pode afectar os totais do curso.';
$string['fixrescalednullgradesconfirm'] = 'Confirma que quere arranxar cualificacións trabucadas? Eliminaranse todas as notas afectadas. Isto pode afectar os totais do curso.';
$string['fixrescalednullgradesdone'] = 'Cualificacións corrixidas';
$string['gradeabovemaximum'] = 'A cualificación debe ser menor ou igual que {$a}';
$string['gradebelowzero'] = 'A cualificación debe ser maior ou igual que cero.';
$string['gradecanbechanged'] = 'A cualificación pode ser cambiada';
$string['gradechangessaveddetail'] = 'Gardáronse os cambios na cualificación e nos comentarios';
$string['graded'] = 'Cualificado';
$string['gradedby'] = 'Cualificado por';
$string['gradedfollowupsubmit'] = 'Cualificada: entrega posterior recibida';
$string['gradedon'] = 'Cualificado o';
$string['gradeitem:submissions'] = 'Entregas';
$string['gradelocked'] = 'Esta cualificación está bloqueada ou foi modificada no libro de cualificacións';
$string['gradeoutof'] = 'Cualificación sobre {$a}';
$string['gradeoutofhelp'] = 'Cualificación';
$string['gradeoutofhelp_help'] = 'Introduza aquí a cualificación para as entregas do alumno. Pode empregar decimais.';
$string['gradersubmissionupdatedhtml'] = 'O usuario {$a->username} actualizou a entrega de tarefa
para <i>«{$a->assignment}»  en {$a->timeupdated}</i><br /><br />
Está <a href="{$a->url}">dispoñíbel no sitio web</a>.';
$string['gradersubmissionupdatedsmall'] = 'O usuario {$a->username} actualizou a súa entrega para a tarefa {$a->assignment}.';
$string['gradersubmissionupdatedtext'] = 'O usuario {$a->username} actualizou a súa entrega de tarefa
para «{$a->assignment}» en {$a->timeupdated}

Está dispoñíbel aquí:

    {$a->url}';
$string['gradestudent'] = 'Cualificación do alumno: (id={$a->id}, nome completo={$a->fullname}).';
$string['gradeuser'] = 'Cualificar {$a}';
$string['grading'] = 'Cualificando';
$string['gradingchangessaved'] = 'Gardáronse os cambios das cualificacións';
$string['gradingduedate'] = 'Lembrarme cualificar en';
$string['gradingduedate_help'] = 'A data prevista para que a corrección das entregas se complete. Esta data úsase para dar prioridade ás notificacións do taboleiro para os profesores.';
$string['gradingdueduedatevalidation'] = 'A data para lembrarme que cualificar non pode ser anterior á data límite.';
$string['gradingduefromdatevalidation'] = 'A data para lembrarme que cualificar non pode ser anterior á data para permitir entregas.';
$string['gradingmethodpreview'] = 'Criterio de cualificación';
$string['gradingoptions'] = 'Opcións';
$string['gradingstatus'] = 'Estado das cualificacións';
$string['gradingstudent'] = 'Cualificando ao alumno';
$string['gradingsummary'] = 'Resumo das cualificacións';
$string['grantextension'] = 'Concesión da prórroga';
$string['grantextensionforusers'] = 'Outorgar ampliación para {$a} alumnos';
$string['groupoverrides'] = 'Anulacións de grupo';
$string['groupoverridesdeleted'] = 'Elimináronse as anulacións de grupo';
$string['groupsnone'] = 'Non hai grupos aos que vostede poida acceder';
$string['groupsubmissionsettings'] = 'Axustes de entregas de grupo';
$string['hiddenuser'] = 'Participante';
$string['hidegrader'] = 'Agochar a identidade dos alumnos';
$string['hidegrader_help'] = 'Se está activado, non se amosa a identidade de ningún usuario que cualifica unha entrega de tarefas, polo que os alumnos non verán quen cualificou o seu traballo.

Teña en conta que este axuste non ten ningún efecto na caixa de comentarios na páxina de cualificación.';
$string['hideshow'] = 'Agochar/Amosar';
$string['inactiveoverridehelp'] = '* Esta substitución está inactiva porque o acceso do usuario á actividade está restrinxido. Isto pode deberse a asignacións de grupos ou de roles, outras restricións de acceso ou a actividade agochada.';
$string['indicator:cognitivedepth'] = 'Tarefa cognitiva';
$string['indicator:cognitivedepth_help'] = 'Este indicador está baseado na profundidade cognitiva acadada polo alumno nunha actividade de Tarefa.';
$string['indicator:cognitivedepthdef'] = 'Tarefa cognitiva';
$string['indicator:cognitivedepthdef_help'] = 'O participante acadou esta porcentaxe do compromiso cognitivo que ofrecen as actividades de Tarefa durante este intervalo de análise (Niveis = Sen vista, Ver, Entregar, Ver comentarios, Facer comentarios, Reenviar após ver comentarios)';
$string['indicator:cognitivedepthdef_link'] = 'Indicadores_de_aprendizaxe_analítico#Profundidade_cognitiva';
$string['indicator:socialbreadth'] = 'Tarefa social';
$string['indicator:socialbreadth_help'] = 'Este indicador está baseado na amplitude social acadada polo alumno nunha actividade de tarefa.';
$string['indicator:socialbreadthdef'] = 'Tarefa social';
$string['indicator:socialbreadthdef_help'] = 'O participante acadou esta porcentaxe do compromiso social que ofrecen as actividades de Tarefa durante este intervalo de análise (Niveis = Sen participación, Participante en solitario, Participante con outros)';
$string['indicator:socialbreadthdef_link'] = 'Indicadores_de_aprendizaxe_analítico#Amplitude_social';
$string['instructionfiles'] = 'Ficheiros de instrucións';
$string['introattachments'] = 'Ficheiros adicionais';
$string['introattachments_help'] = 'Poden engadirse ficheiros adicionais para usar na tarefa, tales como modelos de resposta. As ligazóns para descarga dos ficheiros amosaranse na paxina da tarefa, baixo a descrición.';
$string['invalidfloatforgrade'] = 'A cualificación fornecida podería non entenderse: {$a}';
$string['invalidgradeforscale'] = 'A cualificación fornecida non está dentro da escala definida.';
$string['invalidoverrideid'] = 'O id de anulación é incorrecto';
$string['lastmodifiedgrade'] = 'Última modificación (cualificación)';
$string['lastmodifiedsubmission'] = 'Última modificación (entrega)';
$string['latesubmissions'] = 'Entregas atrasadas';
$string['latesubmissionsaccepted'] = 'Permitido ata {$a}';
$string['loading'] = 'Cargando...';
$string['locksubmissionforstudent'] = 'Impide máis entregas do alumno: (id={$a->id}, nome completo={$a->fullname}).';
$string['locksubmissions'] = 'Bloquear entregas';
$string['manageassignfeedbackplugins'] = 'Xestionar engadidos de comentarios de tarefas';
$string['manageassignsubmissionplugins'] = 'Xestionar engadidos de entrega de tarefas';
$string['marker'] = 'Corrector';
$string['markerfilter'] = 'Filtro de corrector';
$string['markerfilternomarker'] = 'Sen corrector';
$string['markingallocation'] = 'Usar asignación de corrector';
$string['markingallocation_help'] = 'De activarse ao mesmo tempo que o fluxo de traballo de corrección, permite que os correctores sexan asignados a alumnos individuais.';
$string['markingworkflow'] = 'Usar o fluxo de traballo de corrección';
$string['markingworkflow_help'] = 'Se está activado, as correccións seguirán una serie de etapas do fluxo de traballo antes de que sexan publicadas para os alumnos. Isto permite que haxa varias rondas de corrección e permite que todas as corrección se publiquen para todos os alumnos a un mesmo tempo.';
$string['markingworkflowstate'] = 'Estado do fluxo de traballo de corrección';
$string['markingworkflowstate_help'] = 'Os estados de fluxo de traballo posíbeis poden incluír (segundo os seus permisos):

* Non corrixido - o corrector aínda non comezou
* En corrección - o corrector comezou mais aínda non está rematado
* Corrección rematada: o corrector rematou mais pode ter que volver para verificacións/correccións
* En revisión: a corrección está agora no profesor responsábel da verificación de calidade
* Preparado para a súa publicación - o profesor encargado está satisfeito coa corrección mais agarda antes de que o alumno teña acceso á corrección
* Publicada - o alumno pode acceder ás cualificacións/comentarios';
$string['markingworkflowstateinmarking'] = 'En corrección';
$string['markingworkflowstateinreview'] = 'En revisión';
$string['markingworkflowstatenotmarked'] = 'Sen corrixir';
$string['markingworkflowstatereadyforrelease'] = 'Listo para publicar';
$string['markingworkflowstatereadyforreview'] = 'Corrección completada';
$string['markingworkflowstatereleased'] = 'Publicado';
$string['maxattempts'] = 'Intentos máximos';
$string['maxattempts_help'] = 'O número máximo de intentos de entrega que pode facer un alumno. Após este número de intentos, a entrega do alumno non poderá reabrirse.';
$string['maxgrade'] = 'Cualificación máxima';
$string['maxperpage'] = 'Máximo de tarefas por páxina';
$string['maxperpage_help'] = 'O número máximo de tarefas que un cualificador pode amosar na páxina para cualificar tarefas. É útil para evitar tempos mortos en cursos con moitos participantes.';
$string['messageprovider:assign_notification'] = 'Notificación de tarefas';
$string['modulename'] = 'Tarefa';
$string['modulename_help'] = 'O módulo de actividade da tarefa permítelle a un profesor comunicar tarefas, recoller traballos e fornecer cualificacións e comentarios.

Os alumnos poden enviar calquera contido dixital (ficheiros), tales como documentos tratados co procesador de texto, follas de cálculo, imaxes, ou fragmentos de son ou vídeos.
Alternativamente, ou en adición, a tarefa pode requirir que os alumnos escriban texto directamente no editor de texto. Unha tarefa tamén se pode utilizar para lembrarlles aos alumnos do «mundo real» tarefas que deben completar sen estar en conexión, tales como deseños, así como aqueles que non requiren contido dixital. Os alumnos poden enviar, traballar individualmente ou como membros dun grupo.

Ao revisar as tarefas, os profesores poden deixar comentarios e subir ficheiros, tales como a puntuación de entregas dos alumnos con comentarios ou comentarios orais. As tarefas poden ser cualificadas utilizando unha escala numérica ou un método avanzado de cualificación como unha rúbrica. A cualificación final gárdase no libro de cualificacións.';
$string['modulename_link'] = 'mod/assignment/view';
$string['modulenameplural'] = 'Tarefas';
$string['moreusers'] = '{$a} máis...';
$string['multipleteams'] = 'Membro de máis dun grupo';
$string['multipleteams_desc'] = 'A tarefa require a entrega por grupos. Vostede é membro de máis dun grupo. Para poder enviarlle debe ser un membro de só un grupo. Póñase en contacto co seu profesor para cambiar a súa pertenza a grupos.';
$string['multipleteamsgrader'] = 'Membro de máis dun grupo, polo que non pode facer entregas.';
$string['mysubmission'] = 'A miña entrega:';
$string['newsubmissions'] = 'Tarefas entregadas';
$string['noattempt'] = 'Sen intentos';
$string['noclose'] = 'Sen data límite';
$string['nofiles'] = 'Sen ficheiros.';
$string['nofilters'] = 'Sen filtros';
$string['nograde'] = 'Sen cualificación';
$string['nolatesubmissions'] = 'Non se aceptan entregas atrasadas.';
$string['nomoresubmissionsaccepted'] = 'Só permitido para os participantes que teñan concedida unha prórroga';
$string['none'] = 'Ningún';
$string['noonlinesubmissions'] = 'Esta tarefa non require que entregue nada dende a Rede';
$string['noopen'] = 'Sen data de apertura';
$string['nooverridedata'] = 'Debe anular cando menos unha das opcións da tarefa.';
$string['nosavebutnext'] = 'Seguinte';
$string['nosubmission'] = 'Non foi enviado nada para esta tarefa';
$string['nosubmissionsacceptedafter'] = 'Non se aceptan entregas após';
$string['noteam'] = 'Non é membro de ningún grupo';
$string['noteam_desc'] = 'Esta tarefa require a entrega por grupos. Vostede non é membro de ningún grupo, polo que non pode crear unha entrega. Póñase en contacto co profesor para que o engada a un grupo.';
$string['noteamgrader'] = 'Non é membro de ningún grupo, polo que non pode facer entregas.';
$string['notgraded'] = 'Sen cualificar';
$string['notgradedyet'] = 'Aínda non cualificada';
$string['notifications'] = 'Notificacións';
$string['notsubmittedyet'] = 'Aínda non entregada';
$string['nousers'] = 'Sen usuarios';
$string['nousersselected'] = 'Non hai ningún usuario seleccionado';
$string['numberofdraftsubmissions'] = 'Versións preliminares';
$string['numberofparticipants'] = 'Participantes';
$string['numberofsubmissionsneedgrading'] = 'Necesita cualificación';
$string['numberofsubmittedassignments'] = 'Entregada';
$string['numberofteams'] = 'Grupos';
$string['offline'] = 'Non se requiren entregas en liña';
$string['open'] = 'Abrir';
$string['outlinegrade'] = 'Cualificar: {$a}';
$string['outof'] = '{$a->current} dun total de {$a->total}';
$string['overdue'] = '<font color="red">A tarefa foi atrasada por: {$a}</font>';
$string['override'] = 'Anular';
$string['overridedeletegroupsure'] = 'Confirma que quere eliminar a anulación do grupo {$a}?';
$string['overridedeleteusersure'] = 'Confirma que quere eliminar a anulación do usuario {$a}?';
$string['overridegroup'] = 'Anulación de grupo';
$string['overridegroupeventname'] = '{$a->assign} - {$a->group}';
$string['overrides'] = 'Anulacións';
$string['overrideuser'] = 'Anulación de usuario';
$string['overrideusereventname'] = '{$a->assign} - Anular';
$string['page-mod-assign-view'] = 'Módulo principal de tarefas e páxina de entregas';
$string['page-mod-assign-x'] = 'Calquera páxina do módulo de tarefas';
$string['paramtimeremaining'] = '{$a} restante';
$string['participant'] = 'Participante';
$string['pluginadministration'] = 'Administración de tarefas';
$string['pluginname'] = 'Tarefa';
$string['preventsubmissionnotingroup'] = 'Requirir a un grupo para facer a entrega';
$string['preventsubmissionnotingroup_help'] = 'Se está activado, os usuarios que non sexan membros dun grupo non poderán facer entregas.';
$string['preventsubmissions'] = 'Impedir que os usuarios fagan máis entregas para tarefa';
$string['preventsubmissionsshort'] = 'Impedir a actualización de entregas';
$string['previous'] = 'Anterior';
$string['privacy:attemptpath'] = 'intento {$a}';
$string['privacy:blindmarkingidentifier'] = 'O identificador usado para a corrección a cegas';
$string['privacy:gradepath'] = 'cualificar';
$string['privacy:metadata:assigndownloadasfolders'] = 'A preferencia do usuario por se se deben descargar varios ficheiros en cartafoles';
$string['privacy:metadata:assignfeedbackpluginsummary'] = 'Datos de comentarios para a tarefa.';
$string['privacy:metadata:assignfilter'] = 'Opcións de filtro como «Entregada», «Non entregada», «Require cualificación» e «Prórroga concedida»';
$string['privacy:metadata:assigngrades'] = 'Almacena as cualificacións dos usuarios para as tarefas';
$string['privacy:metadata:assignmarkerfilter'] = 'Filtrar o resumo da tarefa polo corrector asignado.';
$string['privacy:metadata:assignmentid'] = 'ID da tarefa';
$string['privacy:metadata:assignmessageexplanation'] = 'As mensaxes envíanse aos alumnos a través do sistema de mensaxes.';
$string['privacy:metadata:assignoverrides'] = 'Almacena información de anulación para a tarefa';
$string['privacy:metadata:assignperpage'] = 'Número de tarefas amosadas por páxina.';
$string['privacy:metadata:assignquickgrading'] = 'Unha preferencia sobre se se usa ou non unha cualificación rápida.';
$string['privacy:metadata:assignsubmissiondetail'] = 'Almacena a información de entregas do usuario';
$string['privacy:metadata:assignsubmissionpluginsummary'] = 'Datos de entrega para a tarefa.';
$string['privacy:metadata:assignuserflags'] = 'Almacena metadatos do usuario como datas de prorrogas';
$string['privacy:metadata:assignusermapping'] = 'A asignación para a corrección a cegas';
$string['privacy:metadata:assignworkflowfilter'] = 'Filtrar por diferentes fases do fluxo de traballo.';
$string['privacy:metadata:grade'] = 'A cualificación numérica para esta entrega de tarefas. Pode ser determinada por scales/advancedgradingforms etc. mais sempre será convertido de novo a un número de coma flotante.';
$string['privacy:metadata:grader'] = 'O ID de usuario da persoa que cualifica.';
$string['privacy:metadata:groupid'] = 'O ID do grupo ao que pertence o usuario.';
$string['privacy:metadata:latest'] = 'Simplifica enormemente as consultas que queren obter información só sobre o último intento.';
$string['privacy:metadata:mailed'] = 'Xa se lle enviou o correo a este usuario?';
$string['privacy:metadata:timecreated'] = 'Momento da creación';
$string['privacy:metadata:userid'] = 'O ID do usuario';
$string['privacy:studentpath'] = 'entregasdosalumnos';
$string['privacy:submissionpath'] = 'entrega';
$string['quickgrading'] = 'Cualificación rápida';
$string['quickgrading_help'] = 'A cualificación rápida permite asignar cualificacións (e resultados) directamente na táboa de entregas. A cualificación rápida non é compatíbel coa cualificación avanzada e non está recomendada cando hai varios correctores.';
$string['quickgradingchangessaved'] = 'Gardáronse os cambios das cualificacións';
$string['quickgradingresult'] = 'Cualificación rápida';
$string['recordid'] = 'Identificador';
$string['relativedatessubmissionduedateafter'] = '{$a->datediffstr} após o inicio do curso';
$string['relativedatessubmissionduedatebefore'] = '{$a->datediffstr} antes do inicio do curso';
$string['relativedatessubmissiontimeleft'] = 'Calculado para cada alumno';
$string['removeallgroupoverrides'] = 'Eliminar todas as anulacións de grupo';
$string['removealluseroverrides'] = 'Eliminar todas as anulacións de usuario';
$string['removesubmission'] = 'Retirar a entrega';
$string['removesubmissionconfirm'] = 'Confirma que quere retirar os datos da entrega?';
$string['removesubmissionconfirmforstudent'] = 'Confirma que quere retirar os datos da entrega do alumno {$a}?';
$string['removesubmissionforstudent'] = 'Retirar a entrega do alumno: (id={$a->id}, nome completo={$a->fullname}).';
$string['reopenuntilpassincompatiblewithblindmarking'] = 'Reabrir ata que a opción para pasar sexa incompatíbel coa puntuación cega, porque as cualificacións non son publicadas no libro de cualificacións ata que as identidades dos alumnos sexan reveladas.';
$string['requireallteammemberssubmit'] = 'Require a entrega de todos os membros do grupo';
$string['requireallteammemberssubmit_help'] = 'De estar activado, todos os membros do grupo de alumnos deben premer o botón desta tarefa antes de que a entrega do grupo se considere entregada. De estar desactivado, considerarase que a entrega do grupo foi entregada tan pronto como calquera membro do grupo de alumnos prema no botón de envío.';
$string['requiresubmissionstatement'] = 'Requirir que os alumnos acepten a declaración de entrega';
$string['requiresubmissionstatement_help'] = 'Require que os alumnos acepten a declaración de entrega para todas as entregas desta tarefa.';
$string['revealidentities'] = 'Amosar a identidade dos alumnos';
$string['revealidentitiesconfirm'] = 'Confirma que quere revelar as identidades de todos os alumnos con esta tarefa. Esta operación non se pode desfacer. Unha vez que as identidades dos alumnos se revelaron, anotaranse as puntuacións no libro de cualificacións.';
$string['reverttodefaults'] = 'Reverter cara aos predeterminados da tarefa';
$string['reverttodraft'] = 'Reverter a entrega ao estado de versión preliminar.';
$string['reverttodraftforstudent'] = 'Reverter a entrega a versión preliminar do alumno: (id={$a->id}, nome completo={$a->fullname}).';
$string['reverttodraftshort'] = 'Reverter a entrega a versión preliminar';
$string['reviewed'] = 'Revisadas';
$string['save'] = 'Gardar';
$string['saveallquickgradingchanges'] = 'Gardar todos os cambios de cualificación rápida';
$string['saveandcontinue'] = 'Gardar e continuar';
$string['savechanges'] = 'Gardar os cambios';
$string['savegradingresult'] = 'Cualificación';
$string['savenext'] = 'Gardar e amosar o seguinte';
$string['saveoverrideandstay'] = 'Gardar e introducir outra anulación';
$string['savingchanges'] = 'Gardando os cambios...';
$string['scale'] = 'Escala';
$string['search:activity'] = 'Tarefa: información de actividade';
$string['selectedusers'] = 'Usuarios seleccionados';
$string['selectlink'] = 'Seleccionar...';
$string['selectuser'] = 'Seleccione {$a}';
$string['sendlatenotifications'] = 'Notificar aos cualificadores as entregas fóra de prazo';
$string['sendlatenotifications_help'] = 'Se está activado, os cualificadores (normalmente profesores) reciben unha mensaxe cando un alumno fai unha entrega fóra de prazo para unha tarefa. Os métodos de mensaxería poden configurarse.';
$string['sendnotifications'] = 'Notificar aos cualificadores sobre entregas';
$string['sendnotifications_help'] = 'Se está activado, os cualificadores (normalmente profesores) reciben unha mensaxe cando un alumno fai unha entrega antes da data requirida, dentro das datas estabelecidas, ou fóra de prazo para unha tarefa. Os métodos de mensaxería poden configurarse.';
$string['sendstudentnotifications'] = 'Notificar aos alumnos';
$string['sendstudentnotifications_help'] = 'Se está activado, os alumnos reciben unha mensaxe sobre a cualificación actualizada ou o comentario. Se o fluxo de traballo de cualificación está activado nesta tarefa, non se enviarán notificacións ata que a cualificación sexa «publicada»".';
$string['sendstudentnotificationsdefault'] = 'Axuste predeterminado para «Notificar aos alumnos»';
$string['sendstudentnotificationsdefault_help'] = 'Estabelecer o valor predeterminado para a caixa de verificación «Notificar aos alumnos» no formato de cualificación.';
$string['sendsubmissionreceipts'] = 'Enviar un recibo da entrega aos alumnos';
$string['sendsubmissionreceipts_help'] = 'Esta opción activa os recibos de entrega dos alumnos. Os alumnos recibirán unha notificación cada vez que fagan correctamente a entrega dunha tarefa';
$string['setmarkerallocationforlog'] = 'Configurar a asignación de corrector : (id={$a->id}, fullname={$a->fullname}, marker={$a->marker}).';
$string['setmarkingallocation'] = 'Estabelecer o corrector asignado';
$string['setmarkingworkflowstate'] = 'Estabelecer o estado do fluxo de traballo de corrección';
$string['setmarkingworkflowstateforlog'] = 'Configurar o estado do fluxo de traballo de cualificación : (id={$a->id}, nome={$a->fullname}, estado={$a->state}).';
$string['settings'] = 'Axustes da tarefa';
$string['showrecentsubmissions'] = 'Amosar as entregas recentes';
$string['status'] = 'Estado';
$string['studentnotificationworkflowstateerror'] = 'O estado do fluxo de traballo de cualificación debe ser «Publicado» para notificárllelo aos alumnos.';
$string['submission'] = 'Entrega';
$string['submissioncopiedhtml'] = '<p>Fixo unha copia das entregas de tarefas
previas para «<i>{$a->assignment}</i>».</p>
<p> Pode ver o estado da súa <a href="{$a->url}">entrega de tarefa</a>.';
$string['submissioncopiedsmall'] = 'Copiou a súa entrega previa de tarefa en {$a->assignment}';
$string['submissioncopiedtext'] = 'Fixo unha copia das entregas de tarefas
previas para «{$a->assignment}»

Pode ver o estado da entrega da súa tarefa:

    {$a->url}';
$string['submissiondrafts'] = 'Requirir que os alumnos preman no botón de entrega';
$string['submissiondrafts_help'] = 'Se está activado, os alumnos terán que premer nun botón de entrega para declarar a súa entrega como final. Isto permite que os alumnos manteñan unha versión preliminar da entrega no seu sistema. Se se cambia este axuste «Non» a «Si» após que os alumnos xa teñan feito entregas, estas consideraranse como definitivas.';
$string['submissioneditable'] = 'Os alumnos poden editar esta entrega';
$string['submissionempty'] = 'Non foi entregado nada';
$string['submissionlog'] = 'Alumno: {$a->fullname}, estado: {$a->status}';
$string['submissionmodified'] = 'Vostede ten datos de entregas existentes. Abandone esta páxina e ténteo de novo,';
$string['submissionmodifiedgroup'] = 'A entrega foi modificada por alguén máis. Abandone esta páxina e ténteo de novo.';
$string['submissionnotcopiedinvalidstatus'] = 'A entrega non foi copiada por mor de non ter sido editada posteriormente a que fora reaberta.';
$string['submissionnoteditable'] = 'Os alumnos non poden editar esta entrega';
$string['submissionnotready'] = 'Esta tarefa non está lista para a súa entrega:';
$string['submissionplugins'] = 'Engadidos de entregas';
$string['submissionreceipthtml'] = 'Vostede fixo unha entrega para a tarefa «{$a->assignment}»<br /><br />
Pode ver o estado da súa <a href="{$a->url}">entrega de tarefa</a>.';
$string['submissionreceiptotherhtml'] = 'A súa entrega de tarefa para
«<i>{$a->assignment}</i>» foi entregada.<br /><br />
Pode ver o estado da súa <a href="{$a->url}">tarefa entregada</a>.';
$string['submissionreceiptothersmall'] = 'A súa entrega de tarefa para {$a->assignment} foi entregada.';
$string['submissionreceiptothertext'] = 'A súa entrega de tarefa para
«{$a->assignment}» foi entregada

Pode ver o estado da súa entrega en:

    {$a->url}';
$string['submissionreceipts'] = 'Enviar recibo de entrega';
$string['submissionreceiptsmall'] = 'Vostede fixo a súa entrega para a tarefa {$a->assignment}';
$string['submissionreceipttext'] = 'Vostede fixo unha
entrega para a tarefa «{$a->assignment}»

Pode ver o estado da súa entrega en:

    {$a->url}';
$string['submissionsclosed'] = 'Pechadas as entregas';
$string['submissionsettings'] = 'Axustes de entregas';
$string['submissionslocked'] = 'Esta tarefa non acepta entregas';
$string['submissionslockedshort'] = 'Non se permiten cambios nas entregas';
$string['submissionsnotgraded'] = 'Entregas non cualificadas: {$a}';
$string['submissionstatement'] = 'Declaración da entrega';
$string['submissionstatement_help'] = 'Declaración que cada alumno debe aceptar para entregar o seu traballo';
$string['submissionstatementacceptedlog'] = 'Declaración para a entrega aceptada polo usuario {$a}';
$string['submissionstatementdefault'] = 'Esta tarefa é o meu propio traballo, agás onde recoñecín o uso do traballo doutras persoas.';
$string['submissionstatementteamsubmission'] = 'Declaración de entregas de grupo';
$string['submissionstatementteamsubmission_help'] = 'Declaración que cada alumno debe aceptar para entregar o traballo do seu grupo';
$string['submissionstatementteamsubmissionallsubmit'] = 'Declaración de entrega do grupo na que todos os membros do grupo entregan';
$string['submissionstatementteamsubmissionallsubmit_help'] = 'Declaración que cada alumno debe aceptar para entregar o seu traballo como membro do grupo';
$string['submissionstatementteamsubmissionallsubmitdefault'] = 'Esta entrega é o meu propio traballo como membro do grupo, agás onde recoñecín o uso do traballo doutras persoas.';
$string['submissionstatementteamsubmissiondefault'] = 'Esta entrega é o traballo do meu grupo, agás onde se recoñece o uso do traballo doutras persoas.';
$string['submissionstatus'] = 'Estado da entrega';
$string['submissionstatus_'] = 'Nova entrega';
$string['submissionstatus_draft'] = 'versión preliminar (non entregada)';
$string['submissionstatus_marked'] = 'Cualificado';
$string['submissionstatus_new'] = 'Nova entrega';
$string['submissionstatus_reopened'] = 'Reaberto';
$string['submissionstatus_submitted'] = 'Entregado para cualificacións';
$string['submissionstatusheading'] = 'Estado da entrega';
$string['submissionsummary'] = '{$a->status}. Última modificación {$a->timemodified}';
$string['submissionteam'] = 'Grupo';
$string['submissiontypes'] = 'Tipos de entrega';
$string['submitaction'] = 'Entregar';
$string['submitassignment'] = 'Entregar tarefa';
$string['submitassignment_help'] = 'Unha vez que se entregou a tarefa non poderá facer máis cambios.';
$string['submitforgrading'] = 'Entrega para cualificación';
$string['submitted'] = 'Entregada';
$string['submittedearly'] = 'A tarefa foi enviada {$a} en prazo';
$string['submittedlate'] = 'A tarefa foi enviada {$a} fóra de prazo';
$string['submittedlateshort'] = '{$a} fóra de prazo';
$string['subpagetitle'] = '{$a->contextname} - {$a->subpage}';
$string['subplugintype_assignfeedback'] = 'Engadido de comentarios';
$string['subplugintype_assignfeedback_plural'] = 'Engadidos de comentarios';
$string['subplugintype_assignsubmission'] = 'Engadido de entregas';
$string['subplugintype_assignsubmission_plural'] = 'Engadidos de entregas';
$string['teamname'] = 'Equipo: {$a}';
$string['teamsubmission'] = 'Alumnos que entregan en grupos';
$string['teamsubmission_help'] = 'Si está activado, os alumnos dividiranse en grupos en función da configuración predeterminada dos grupos ou dun agrupamento personalizado. A entrega do grupo será compartida entre os membros do grupo e todos os membros do grupo verán os cambios de todos eles na entrega.';
$string['teamsubmissiongroupingid'] = 'Agrupamento por grupos de alumnos';
$string['teamsubmissiongroupingid_help'] = 'Este é o agrupamento que a tarefa usará para atopar grupos para os grupos de alumnos. De non estar estabelecido, utilizarase a definición predeterminada de grupos.';
$string['textinstructions'] = 'Instrucións da tarefa';
$string['timemodified'] = 'Última modificación';
$string['timeremaining'] = 'Tempo restante';
$string['timeremainingcolon'] = 'Tempo restante: {$a}';
$string['togglezoom'] = 'Achegar afastar á área';
$string['ungroupedusers'] = 'O axuste de «Requirir a un grupo para facer a entrega» está activado e algúns usuarios non están asignados a grupos; isto impediralles a entrega de tarefas.';
$string['ungroupedusersoptional'] = 'O axuste de «Alumnos que entregan en grupos» está activada e algúns usuarios non son membros de ningún grupo. Teña en conta que estes alumnos entregarán como membros do «Grupo predeterminado».';
$string['unlimitedattempts'] = 'Sen límite';
$string['unlimitedattemptsallowed'] = 'Permítense intentos ilimitados.';
$string['unlimitedpages'] = 'Sen límite';
$string['unlocksubmissionforstudent'] = 'Permitir entregas do alumno: (id={$a->id}, nome completo={$a->fullname}).';
$string['unlocksubmissions'] = 'Desbloquear entregas';
$string['unsavedchanges'] = 'Cambios sen gardar';
$string['unsavedchangesquestion'] = 'Hai cambios sen gardar de cualificacións ou comentarios. Quere gardar os cambios e continuar?';
$string['updategrade'] = 'Actualizar a cualificación';
$string['updatetable'] = 'Gardar e actualizar a táboa';
$string['upgradenotimplemented'] = 'Actualización no incluída no engadido ({$a->type} {$a->subtype})';
$string['userassignmentdefaults'] = 'Asociación predeterminada do usuario';
$string['userextensiondate'] = 'Outorgouse unha ampliación ata: {$a}';
$string['usergrade'] = 'Cualificación do usuario';
$string['useridlistnotcached'] = 'Os cambios nas cualificacións NON FORON GARDADOS, porque non foi posíbel determinar para que entrega eran.';
$string['useroverrides'] = 'Anulacións de usuario';
$string['useroverridesdeleted'] = 'Elimináronse as anulacións de usuario';
$string['usersnone'] = 'Ningún alumno ten acceso a esta tarefa.';
$string['usersubmissioncannotberemoved'] = 'A entrega de {$a} non pode ser retirada.';
$string['userswhoneedtosubmit'] = 'Usuarios que deben entregar: {$a}';
$string['validmarkingworkflowstates'] = 'Estados válidos do fluxo de traballo de corrección';
$string['viewadifferentattempt'] = 'Ver un intento diferente';
$string['viewbatchmarkingallocation'] = 'Ver a páxina de asignación por lotes dos correctores.';
$string['viewbatchsetmarkingworkflowstate'] = 'Ver a páxina de fluxo de traballo por lotes dos correctores.';
$string['viewfeedback'] = 'Ver comentario';
$string['viewfeedbackforuser'] = 'Ver comentario do usuario: {$a}';
$string['viewfull'] = 'Ver todo';
$string['viewfullgradingpage'] = 'Abrir a páxina global de cualificacións para incluír comentarios';
$string['viewgradebook'] = 'Ver o libro de cualificacións';
$string['viewgrading'] = 'Ver/cualificar todas as entregas';
$string['viewgradingformforstudent'] = 'Ver a páxina de cualificacións do alumno: (id={$a->id}, nome completo={$a->fullname}).';
$string['viewownsubmissionform'] = 'Ver a páxina das propias entregas de tarefas.';
$string['viewownsubmissionstatus'] = 'Ver a páxina de estado das propias entregas de tarefas.';
$string['viewrevealidentitiesconfirm'] = 'Ver a páxina de confirmación para revelar a identidade dos alumnos.';
$string['viewsubmission'] = 'Ver a entrega';
$string['viewsubmissionforuser'] = 'Ver a entrega do usuario: {$a}';
$string['viewsubmissiongradingtable'] = 'Ver a táboa de cualificación das entregas';
$string['viewsummary'] = 'Ver o resumo';
$string['workflowfilter'] = 'Filtro de fluxo de traballo';
$string['xofy'] = '{$a->x} de {$a->y}';
