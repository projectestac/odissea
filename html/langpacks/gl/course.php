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
 * Strings for component 'course', language 'gl', version '4.5'.
 *
 * @package     course
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitychooseractivefooter'] = 'Rodapé do selector de actividades';
$string['activitychooseractivefooter_desc'] = 'O selector de actividades pode admitir complementos que engaden elementos ao rodapé.';
$string['activitychoosercategory'] = 'Selector de actividades';
$string['activitychooserhidefooter'] = 'Sen rodapé';
$string['activitychooserrecommendations'] = 'Actividades recomendadas';
$string['activitychoosersettings'] = 'Axustes do selector de actividade';
$string['activitychoosertabmode'] = 'Lapelas do selector de actividades';
$string['activitychoosertabmode_desc'] = 'O selector de actividades enumera actividades e recursos para que un profesor os engada ao seu curso. Para engadir elementos á lapela Recomendado, vaia as <a href=\'../course/recommendations.php\'>Actividades recomendadas</a>.';
$string['activitychoosertabmodefive'] = 'Destacadas, Recomendadas, Todas';
$string['activitychoosertabmodefour'] = 'Destacadas, Recomendadas, Todas, Actividades, Recursos';
$string['activitychoosertabmodeone'] = 'Destacadas, Todas, Actividades, Recursos, Recomendadas';
$string['activitychoosertabmodesix'] = 'Destacadas, Recomendadas, Actividades, Recursos';
$string['activitychoosertabmodethree'] = 'Destacadas, Actividades, Recursos, Recomendadas';
$string['activitychoosertabmodetwo'] = 'Destacadas, Todas, Recomendadas';
$string['activitydate:closed'] = 'Pechadas:';
$string['activitydate:closes'] = 'Pechan:';
$string['activitydate:opened'] = 'Abertas:';
$string['activitydate:opens'] = 'Abren:';
$string['aria:coursecategory'] = 'Categoría de cursos';
$string['aria:courseimage'] = 'Imaxe do curso';
$string['aria:coursename'] = 'Nome do curso';
$string['aria:courseshortname'] = 'Nome abreviado do curso';
$string['aria:defaulttab'] = 'Actividades predeterminadas';
$string['aria:favourite'] = 'O curso está destacado';
$string['aria:favouritestab'] = 'Actividades destacadas';
$string['aria:modulefavourite'] = 'Destacar a actividade de {$a}';
$string['aria:recommendedtab'] = 'Actividades recomendadas';
$string['browsecourseadminindex'] = 'Explorar a administración do curso con este índice.';
$string['browsesettingindex'] = 'Explorar os axustes con este índice.';
$string['communicationroomlink'] = 'Parola cos participantes no curso';
$string['completion_automatic:done'] = 'Feito';
$string['completion_automatic:failed'] = 'Fallado:';
$string['completion_automatic:todo'] = 'Para facer:';
$string['completion_manual:aria:done'] = '{$a} está marcada como feito. Prema para desfacer.';
$string['completion_manual:aria:markdone'] = 'Marcar {$a} como feito';
$string['completion_manual:done'] = 'Feito';
$string['completion_manual:markdone'] = 'Marcar como feito';
$string['completion_setby:auto:done'] = 'Feito: {$a->condition} (estabelecido por {$a->setby})';
$string['completion_setby:auto:todo'] = 'Para facer: {$a->condition} (estabelecido por {$a->setby})';
$string['completion_setby:manual:done'] = '{$a->activityname} está marcado por {$a->setby} como feito. Prema para desfacer.';
$string['completion_setby:manual:markdone'] = '{$a->activityname} está marcado por {$a->setby} como non feito. Prema para marcar como feito.';
$string['completionrequirements'] = 'Requisitos de completado para {$a}';
$string['courseaccess'] = 'Acceso ao curso';
$string['coursealreadyfinished'] = 'Curso xa rematado';
$string['coursecommunication_desc'] = 'O servizo de comunicación predeterminado para novos cursos. Os cursos existentes non terán seleccionado ningún provedor predeterminado.';
$string['coursecontentnotification'] = 'Enviar unha notificación de cambio de contido';
$string['coursecontentnotification_help'] = 'Marque a caixa para notificarlle aos participantes do curso esta actividade ou recurso novo ou modificado. Só recibirán a notificación os usuarios que poidan acceder á actividade ou recurso.';
$string['coursecontentnotifnew'] = '{$a->coursename} ten contido novo';
$string['coursecontentnotifnewbody'] = '<p>{$a->moduletypename} <a href="{$a->link}">{$a->modulename}</a> é novo no curso <a href="{$a->courselink}">{$a->coursename}</a>.</p><p><a href="{$a->notificationpreferenceslink}">Cambie as súas preferencias de notificación</a></p>';
$string['coursecontentnotifupdate'] = '{$a->coursename} ten cambios no seu contido';
$string['coursecontentnotifupdatebody'] = '<p>{$a->moduletypename} <a href="{$a->link}">{$a->modulename}</a> foi modificado no curso <a href="{$a->courselink}">{$a->coursename}</a>.</p><p><a href="{$a->notificationpreferenceslink}">Cambie as súas preferencias de notificación</a></p>';
$string['coursecount'] = 'Número de cursos';
$string['coursenotyetfinished'] = 'O curso aínda non rematou';
$string['coursenotyetstarted'] = 'O curso aínda non comezou';
$string['courseparticipants'] = 'Participantes no curso';
$string['coursetoolong'] = 'O curso é longo de máis';
$string['customfield_islocked'] = 'Bloqueado';
$string['customfield_islocked_help'] = 'Se o campo está bloqueado, só os usuarios con capacidade para cambiar os campos personalizados bloqueados (por omisión usuarios só co rol de xestor predeterminado) poderán cambialo nos axustes do curso.';
$string['customfield_notvisible'] = 'Ninguén';
$string['customfield_visibility'] = 'Visíbel para';
$string['customfield_visibility_help'] = 'Este axuste determina quen pode ver o nome e o valor dos campo personalizados na lista de cursos ou no filtro de campo personalizado dispoñíbel no Taboleiro panel.';
$string['customfield_visibletoall'] = 'Todos';
$string['customfield_visibletoteachers'] = 'Profesorado';
$string['customfieldsettings'] = 'Axustes comúns dos campos personalizados do curso';
$string['daystakingcourse'] = 'Días de curso';
$string['defaultsettingscategory'] = 'Axustes predeterminados';
$string['downloadcontent'] = 'Incluír na descarga de contidos do curso';
$string['downloadcontent_help'] = 'Esta actividade ou recurso debería incluírse no ficheiro zip do contido do curso dispoñíbel para descargar? O ficheiro, o cartafol, a páxina e a etiqueta pódense descargar completamente. Para todas as demais actividades e recursos, só se descargan o nome e a descrición. Esta opción require que a descarga de contido do curso estea activada na configuración do curso.

A configuración non ten efecto na descarga de contido da aplicación móbil para o seu uso sen conexión.';
$string['downloadcourseconfirmation'] = 'Está a piques de descargar un ficheiro zip de contido do curso (excluíndo os elementos que non se poden descargar e os ficheiros de máis de {$a}).';
$string['downloadcoursecontent'] = 'Descargar o contido do curso';
$string['downloadcoursecontent_help'] = 'Este axuste determina se o contido do curso pode ser descargado por usuarios coa capacidade de descargar o contido do curso (de xeito predeterminado os usuarios co rol de alumno ou de profesor).';
$string['enabledownloadcoursecontent'] = 'Activar a descarga do contido do curso';
$string['errorendbeforestart'] = 'A data de finalización ({$a}) é anterior á data de inicio do curso.';
$string['favourite'] = 'Curso destacado';
$string['gradetopassnotset'] = 'Este curso non ten estabelecida unha cualificación de aprobado. Pódese definir no elemento de cualificación do curso (configuración do caderno de notas).';
$string['hideendedcoursestask'] = 'Agochar os cursos na data de remate';
$string['informationformodule'] = 'Información sobre a actividade de {$a}';
$string['module'] = 'Actividade';
$string['namewithlink'] = 'Nome da categoría con ligazón';
$string['noaccesssincestartinfomessage'] = 'Ola {$a->userfirstname},
<p>Un certo número de alumnos de {$a->coursename} nunca accederon ao curso.</p>';
$string['nocourseactivity'] = 'Non hai actividade de curso suficiente entre o inicio e o final do curso';
$string['nocourseendtime'] = 'O curso non ten unha data de remate';
$string['nocoursesections'] = 'Sen seccións de curso';
$string['nocoursestudents'] = 'Sen alumnos';
$string['norecentaccessesinfomessage'] = 'Olai {$a->userfirstname},
<p>Un certo número de alumnos de {$a->coursename} non accederon ao curso recentemente</p>';
$string['noteachinginfomessage'] = 'Ola {$a->userfirstname},
<p>Os cursos con datas de inicio na semana vindeira identificáronse como sen matrícula de profesorado ou alumnado.</p>';
$string['participants:perpage'] = 'Número de participantes por páxina';
$string['participants:perpage_help'] = 'O número de usuarios que se amosa por páxina na páxina de participantes en cada curso.';
$string['participantsnavigation'] = 'Navegación terciaria de participantes.';
$string['pdfexportfont'] = 'Tipo de letra PDF';
$string['pdfexportfont_help'] = 'O tipo de letra a empregar para os ficheiros PDF xerados, coma os envíos de asignacións.';
$string['privacy:completionpath'] = 'Completado do curso';
$string['privacy:favouritespath'] = 'Información destacada do curso';
$string['privacy:metadata:activityfavouritessummary'] = 'O sistema de cursos contén información sobre que elementos do selector de actividade foron destacados polo usuario.';
$string['privacy:metadata:completionsummary'] = 'O curso contén información de completado sobre o usuario.';
$string['privacy:metadata:favouritessummary'] = 'O curso contén información relativa ao curso destacado polo usuario.';
$string['privacy:perpage'] = 'Número de cursos a amosar por páxina.';
$string['recommend'] = 'Recomendar';
$string['recommendcheckbox'] = 'Recomendar a actividade: {$a}';
$string['relativedatessubmissionduedateafter'] = '{$a->datediffstr} após o inicio do curso';
$string['relativedatessubmissionduedatebefore'] = '{$a->datediffstr} antes do inicio do curso';
$string['searchactivitiesbyname'] = 'Busca actividades polo seu nome';
$string['searchresults'] = 'Resultados da busca: {$a}';
$string['sectionlink'] = 'Ligazón permanente';
$string['showstartedcoursestask'] = 'Amosar os cursos na data de inicio';
$string['studentsatriskincourse'] = 'Alumnos en risco no curso {$a}';
$string['studentsatriskinfomessage'] = 'Ola {$a->userfirstname},
<p>Alumnos do curso {$a->coursename} foron identificados como de risco.</p>';
$string['submitsearch'] = 'Enviar busca';
$string['target:coursecompetencies'] = 'Alumnos en risco de non acadar as competencias asignadas a un curso';
$string['target:coursecompetencies_help'] = 'Este destino se un alumno corre o risco de non acadar as competencias asignadas a un curso. Este destino considera que todas as competencias asignadas ao curso deben ser acadadas ata o final do curso.';
$string['target:coursecompletion'] = 'Alumnos en risco de non cumprir as condicións de completado do curso';
$string['target:coursecompletion_help'] = 'Este destino describe se se considera que o alumno está en risco de non cumprir as condicións de completado do curso.';
$string['target:coursedropout'] = 'Alumnos en risco de abandonar';
$string['target:coursedropout_help'] = 'Este destino describe se o alumno está en risco de abandonar.';
$string['target:coursegradetopass'] = 'Alumnos en risco de non acadar a cualificación mínima para aprobar o curso';
$string['target:coursegradetopass_help'] = 'Este destino describe se o alumno corre o risco de non acadar a cualificación mínima para aprobar o curso.';
$string['target:noaccesssincecoursestart'] = 'Alumnos que aínda non accederon ao curso';
$string['target:noaccesssincecoursestart_help'] = 'Este destino describe aos alumnos que nunca accederon a un curso no que están inscritos.';
$string['target:noaccesssincecoursestartinfo'] = 'Os seguintes alumnos están inscritos nun curso que comezou, pero nunca accederon ao curso.';
$string['target:norecentaccesses'] = 'Alumnos que non accederon recentemente ao curso';
$string['target:norecentaccesses_help'] = 'Este destino identifica alumnos que non accederon a un curso no que están inscritos dentro do intervalo de análise definido (por omisión o mes pasado).';
$string['target:norecentaccessesinfo'] = 'Os seguintes alumnos non accederon a un curso no que están inscritos dentro do intervalo de análise definido (por omisión o mes pasado).';
$string['target:noteachingactivity'] = 'Cursos con risco de non comezar';
$string['target:noteachingactivity_help'] = 'Este destino describe se os cursos que deben comezar na próxima semana terán actividade docente.';
$string['target:noteachingactivityinfo'] = 'Os seguintes cursos a comezar nos próximos días corren o risco de non comezar porque non teñen profesorado ou alumnado inscritos.';
$string['targetlabelstudentcompetenciesno'] = 'Alumno que poida acadar as competencias asignadas a un curso';
$string['targetlabelstudentcompetenciesyes'] = 'Alumno en risco de non acadar as competencias asignadas a un curso';
$string['targetlabelstudentcompletionno'] = 'Alumno que poida cumprir as condicións de completado do curso';
$string['targetlabelstudentcompletionyes'] = 'Alumno en risco de non cumprir as condicións de completado do curso';
$string['targetlabelstudentdropoutno'] = 'Non está en risco';
$string['targetlabelstudentdropoutyes'] = 'Alumno en risco de abandonar';
$string['targetlabelstudentgradetopassno'] = 'Alumno que poida cumprir a cualificación mínima para aprobar o curso.';
$string['targetlabelstudentgradetopassyes'] = 'Alumno en risco de non cumprir a cualificación mínima para aprobar o curso.';
$string['targetlabelteachingno'] = 'Cursos con risco de non comezar';
$string['targetlabelteachingyes'] = 'Usuarios con capacidades de ensino que teñen acceso ao curso';
