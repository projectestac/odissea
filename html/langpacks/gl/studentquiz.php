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
 * Strings for component 'studentquiz', language 'gl', version '4.4'.
 *
 * @package     studentquiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abort_button'] = 'Cancelar';
$string['add_comment'] = 'Engadir comentario';
$string['add_reply'] = 'Engadir resposta';
$string['after_answering_end_date'] = 'Este cuestionario está pechado para respostar en {$a}.';
$string['after_submission_end_date'] = 'Este cuestionario está pechado par enviar en {$a}.';
$string['anonymous_user_name'] = 'Usuario anónimo #{$a}';
$string['answeringndbeforestart'] = 'Non se pode especificar a data de finalización para respostar ante de establecer a data de apertura de respostas';
$string['api_state_change_success_content'] = 'O estado de visibilidade da pregunta foi cambiado satisfactoriamente';
$string['api_state_change_success_title'] = 'Feito';
$string['approve'] = 'Aprobar';
$string['approve_toggle'] = 'Rexeitar/Aprobar';
$string['approved'] = '✓';
$string['approved_column_name'] = 'Aprobado';
$string['approved_veryshort'] = 'A';
$string['approveselectedscheck'] = '¿Estás seguro que quere aprobar/rexeitar as seguintes preguntas?<br /><br />{$a}';
$string['average_column_name'] = 'Promedio';
$string['before_answering_end_date'] = 'Este cuestionario pecharase para respostas en {$a}.';
$string['before_answering_start_date'] = 'Aberto a respostas dende {$a}.';
$string['before_submission_end_date'] = 'Ese cuestionario pecharase para o seu envío en {$a}.';
$string['before_submission_start_date'] = 'Aberto para envío de respostas dende {$a}.';
$string['cannotcapturecommenthistory'] = 'Non se pode acceder ao historial de rexistros de comentarios';
$string['collapseall'] = 'Repregar os comentarios';
$string['collapsecomment'] = 'Repregar o comentario';
$string['comment_author'] = 'Autor';
$string['comment_cannot_update'] = 'Non se pode actualizar o comentario';
$string['comment_column_name'] = 'Comentarios';
$string['comment_error'] = 'Por favor, comente';
$string['comment_error_unsaved'] = '¿Desexa gardar este comentario primeiro?';
$string['comment_help'] = 'Escribir un comentario';
$string['comment_help_help'] = 'Escribir un comentario á pregunta';
$string['comment_veryshort'] = 'C';
$string['commenthistory'] = 'Comentar historia';
$string['confirmdeletecomment'] = '¿Está seguro que quere eliminar este comentario?';
$string['createnewquestion'] = 'Crear unha nova pregunta';
$string['createnewquestionfirst'] = 'Crear a primeira pregunta';
$string['creator_anonym_fullname'] = 'Estudiante anónimo';
$string['current_of_total'] = '{$a->current} de {$a->total}';
$string['delete'] = 'Eliminar';
$string['deletecomment'] = 'Eliminar comentario';
$string['deletedbyauthor'] = 'Este comentario foi eliminado en {$a}.';
$string['deletedbyuser'] = 'Este post foi eliminado por {$a->user} en {$a->date}.';
$string['deletedcomment'] = 'Eliminar post.';
$string['describe_already_deleted'] = 'Este comentario xa está borrado.';
$string['describe_not_creator'] = 'Este non é o seu comentario.';
$string['describe_out_of_time_delete'] = 'Este comentario está fóra de prazo para o seu borrado';
$string['describe_out_of_time_edit'] = 'Este comentario está fóra de prazo para a súa edición';
$string['difficulty_all_column_name'] = 'Dificultade da comunidade';
$string['difficulty_level_column_name'] = 'Dificultade';
$string['difficulty_title'] = 'Barra de dificultade';
$string['editcomment'] = 'Editar comentario';
$string['editedcomment_last_edit'] = 'Última edición:';
$string['editedcommenthistory'] = 'Editado por {$a->lastesteditedcommentauthorname} en {$a->lastededitedcommenttime}';
$string['editedcommenthistorylinktext'] = 'Historia';
$string['editorplaceholder'] = 'Introduza o seu comentario aquí...';
$string['emailautomationnote'] = 'Por favor, decátese de que é unha mensaxe automatizada do sistema - esta dirección de email non é revisada.';
$string['emailcommentaddedbody'] = 'Estimado {$a->recepientname},

A súa pregunta \'{$a->questionname}\' no cuestionario de actividade \'{$a->modulename}\' no curso \'{$a->coursename}\' foi comentada por \'{$a->actorname}\' ás \'{$a->timestamp}\'.

O comentario é: \'{$a->commenttext}\'

Pode facer unha revisión en: {$a->questionurl}.';
$string['emailcommentaddedsmall'] = 'A súa pregunta \'{$a->questionname}\' foi comentada por {$a->actorname}.';
$string['emailcommentaddedsubject'] = 'A pregunta foi comentada: {$a->questionname}';
$string['emailcommentdeletedbody'] = 'Estimado {$a->recepientname},

O comentario \'{$a->commenttime}\' á súa pregunta \'{$a->questionname}\' no cuestionario de actividade \'{$a->modulename}\' no curso \'{$a->coursename}\' foi comentada por \'{$a->actorname}\' ás \'{$a->timestamp}\'.

O comentario é: \'{$a->commenttext}\'

Pode facer unha revisión en: {$a->questionurl}.';
$string['emailcommentdeletedsmall'] = 'O comentario á súa pregunta \'{$a->questionname}\' foi eliminado por {$a->actorname}.';
$string['emailcommentdeletedsubject'] = 'Foi eliminado un comentario á pregunta: {$a->questionname}';
$string['emaildigestbody'] = 'Este é o {$a->digesttype} resumo de notificacións par o <b>{$a->modulename}</b> cuestionario de actividade, dispoñible en:';
$string['emaildigestbody_section_content'] = 'A súa pregunta <b>{$a->questionname}</b> foi <b>{$a->actiontype}</b> por <b>{$a->actorname}</b>';
$string['emaildigestbody_section_title'] = 'Notificación {$a->seq}, {$a->timestamp}';
$string['emaildigestsubject'] = 'Resumo de notificación do cuestionario';
$string['emailminecommentdeletedbody'] = 'Estimado {$a->recepientname},

O comentario \'{$a->commenttime}\' á súa pregunta \'{$a->questionname}\' no cuestionario de actividade \'{$a->modulename}\' no curso \'{$a->coursename}\' foi comentada por \'{$a->actorname}\' ás \'{$a->timestamp}\'.

O comentario é: \'{$a->commenttext}\'

Pode facer unha revisión en: {$a->questionurl}.';
$string['emailminecommentdeletedsmall'] = 'O seu comentario á pregunta \'{$a->questionname}\' foi eliminada por {$a->actorname}.';
$string['emailminecommentdeletedsubject'] = 'Comentario eliminado á pregunta: {$a->questionname}';
$string['emailsalutation'] = 'Estimado {$a},';
$string['emailsinglebody'] = 'A súa pregunta <b>{$a->questionname}</b> no cuestionario de actividade <b>{$a->modulename}</b> no curso <b>{$a->coursename}</b> foi {$a->eventname} por <b>{$a->actorname}</b> ás <b>{$a->timestamp}</b>.';
$string['emailsinglebody_reviewlink'] = 'Pode revisar a pregunta en:';
$string['error_form_validation'] = '{$a}';
$string['error_sendalert'] = 'Houbo un erro enviado o informe a {$a}.
O informe non foi enviado.';
$string['expandall'] = 'Expandir todos os comentarios';
$string['expandcomment'] = 'Expandir comentario';
$string['filter'] = 'Filtrar';
$string['filter_advanced_element'] = '{$a} (Elemento avanzado)';
$string['filter_comment_label_date'] = 'Data';
$string['filter_comment_label_forename'] = 'Nome';
$string['filter_comment_label_sort_by'] = 'Ordenar por:';
$string['filter_comment_label_sort_toggle'] = 'Ordenar por {$a->field} {$a->type}';
$string['filter_comment_label_surname'] = 'Apelido';
$string['filter_ishigher'] = 'É máis alta';
$string['filter_islower'] = 'Es máis baixa';
$string['filter_label_approved'] = 'Preguntas aprobadas';
$string['filter_label_comment'] = 'Comentarios';
$string['filter_label_createdate'] = 'Creación';
$string['filter_label_difficulty_level'] = 'Dificultade';
$string['filter_label_myattempts'] = 'Os meus intentos';
$string['filter_label_mydifficulty'] = 'A miña dificultade';
$string['filter_label_mylastattempt'] = 'O meu último intento';
$string['filter_label_myrate'] = 'A miña calificación';
$string['filter_label_onlyapproved'] = 'Aprobado';
$string['filter_label_onlyapproved_help'] = 'Preguntas aprobadas polo teu mestre';
$string['filter_label_onlydifficult'] = 'Dificultade para todos';
$string['filter_label_onlydifficult_help'] = 'Pregunta cunha dificultade promedio oiu máis que {$a}%';
$string['filter_label_onlydifficultforme'] = 'Dificultade para min';
$string['filter_label_onlydifficultforme_help'] = 'Pregunta coa miña dificultade ou máis que {$a}%';
$string['filter_label_onlygood'] = 'Ben';
$string['filter_label_onlygood_help'] = 'Pregunta cunha valoración media de ao menos {$a} estrelas';
$string['filter_label_onlymine'] = 'Meu';
$string['filter_label_onlymine_help'] = 'Preguntas que creou.';
$string['filter_label_onlynew'] = 'Non respondidas';
$string['filter_label_onlynew_help'] = 'Preguntas que nunca antes repostou';
$string['filter_label_question'] = 'Título da pregunta';
$string['filter_label_question_creation_item'] = '{$a->creationtext} {$a->rowtext} {$a->inputtext}';
$string['filter_label_question_creation_item_inputtext'] = '{$a->inputtext} {$a->inputtype}';
$string['filter_label_questiontext'] = 'Contido da pregunta';
$string['filter_label_rates'] = 'Valoración';
$string['filter_label_show_mine'] = 'As miñas preguntas';
$string['filter_label_tags'] = 'Etiqueta';
$string['finish_button'] = 'Finalizar';
$string['invalidcomment'] = 'Comentario non válido';
$string['invalidemail'] = 'Esta dirección de e-mail non é válida. Por favor, intruduza unha dirección.';
$string['lastattempt_right'] = '✓';
$string['lastattempt_right_label'] = 'Último intento correcto';
$string['lastattempt_wrong'] = '✗';
$string['lastattempt_wrong_label'] = 'Último intento incorrecto';
$string['latest_column_name'] = 'Últimos';
$string['manager_anonym_fullname'] = 'Editor anónimo';
$string['message'] = 'Mensaxe';
$string['messageprovider:commentadded'] = 'Notificación de comentario engadido';
$string['messageprovider:commentdeleted'] = 'Notificación de comentario borrado';
$string['messageprovider:minecommentdeleted'] = 'Notificación de borrado do meu comentario';
$string['messageprovider:questionchanged'] = 'Notificación de evento de pregunta';
$string['migrate_already_done'] = '¡Nada se realizou porque esa actividade xa foi migrada!';
$string['migrate_ask'] = 'A velodidade do cuestionario mellorada coa versión 3.2.1, pero esta pregunta aínda está baseada nunha versión anterior.
As preguntas e cuestionarios cargaranse antes se realiza esta migración de velocidade. Só mellorará a velocidade de carga; nada máis cambiará.';
$string['migrate_studentquiz'] = 'Migrar as preguntas do cuestionario á versión 3.2.1 dende unha anterior para acelerar a versión con valores engadidos';
$string['migrate_studentquiz_short'] = 'Acelerar esta paquete de preguntas';
$string['migrated_successful'] = '¡Esta actividade foi migrada satisfactoriamente!';
$string['mine_column_name'] = 'Meu';
$string['missingparam'] = 'Un parámetro necesario está ausente ou é erróneo';
$string['moderator'] = 'Moderador';
$string['modulename'] = 'Cuestionario de estudiante';
$string['modulename_link'] = 'mod/studentquiz/view';
