<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'competency', language 'es', branch 'MOODLE_34_STABLE'
 *
 * @package   competency
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allchildrenarecomplete'] = 'Todos los descendientes están completados';
$string['competencies'] = 'Competencias';
$string['competenciesarenotenabled'] = 'Las competencias no están activadas';
$string['competenciessettings'] = 'Configuración de las competencias';
$string['completeplanstask'] = 'Completar los planes de aprendizaje que están finalizados';
$string['coursecompetencyoutcome_complete'] = 'Completar la competencia';
$string['coursecompetencyoutcome_evidence'] = 'Adjuntar evidencia';
$string['coursecompetencyoutcome_none'] = 'No hacer nada';
$string['coursecompetencyoutcome_recommend'] = 'Enviar para revisión';
$string['coursemodulecompetencyoutcome_complete'] = 'Completar la competencia';
$string['coursemodulecompetencyoutcome_evidence'] = 'Adjuntar evidencia';
$string['coursemodulecompetencyoutcome_none'] = 'No hacer nada';
$string['coursemodulecompetencyoutcome_recommend'] = 'Enviar para revisión';
$string['deletecompetencyratings'] = 'Eliminar la clasificación de la competencia';
$string['duplicateditemname'] = '{$a} (copiar)';
$string['enablecompetencies'] = 'Activar las competencias';
$string['enablecompetencies_desc'] = 'Las competencias permiten a los alumnos ser evaluados de acuerdo a sus planes de aprendizaje';
$string['errorcannotchangeapastduedate'] = 'La fecha de finalización ha vencido. No puede ser cambiada';
$string['errorcannotsetduedateinthepast'] = 'La fecha de finalización no puede ser anterior.';
$string['errorcannotsetduedatetoosoon'] = 'La fecha de finalizacion es demasiado pronto.';
$string['errorcompetencyrule'] = 'La regla de la competencia del curso \'{$a}\' es desconocida';
$string['errorcoursecompetencyrule'] = 'La regla de la competencia del curso \'{$a}\' es desconocida';
$string['errorinvalidcourse'] = 'Curso no válido.';
$string['errornocompetency'] = 'La competencia {$a} no existe';
$string['errorplanstatus'] = 'El estado de plan de aprendizaje \'{$a}\' es desconocido';
$string['errorscalealreadyused'] = 'La escala no se puede modificar porque ya está en uso.';
$string['errorscaleconfiguration'] = 'La escala precisa ser configurada selecionando los apartados de valor por defecto y competente';
$string['errorusercomptencystatus'] = 'El estado de la competencia del usuario \'{$a}\' es desconocido';
$string['eventcompetencycreated'] = 'Competencia creada.';
$string['eventcompetencydeleted'] = 'Competencia eliminada.';
$string['eventcompetencyframeworkcreated'] = 'Marco de competencia creado.';
$string['eventcompetencyframeworkdeleted'] = 'Marco de competencia eliminado.';
$string['eventcompetencyframeworkupdated'] = 'Marco de competencia modificado.';
$string['eventcompetencyframeworkviewed'] = 'Marco de competencia visto.';
$string['eventcompetencyupdated'] = 'Competencia actualizada.';
$string['eventcompetencyviewed'] = 'Competencia vista.';
$string['eventevidencecreated'] = 'Evidencia creada.';
$string['eventplanapproved'] = 'Plan de aprendizaje aprobado.';
$string['eventplancompleted'] = 'Plan de aprendizaje completado.';
$string['eventplancreated'] = 'Plan de aprendizaje creado.';
$string['eventplandeleted'] = 'Plan de aprendizaje eliminado.';
$string['eventplanreopened'] = 'Plan de aprendizaje reabierto.';
$string['eventplanreviewrequestcancelled'] = 'Solicitud de revisión del plan de aprendizaje cancelada.';
$string['eventplanreviewrequested'] = 'Revisión del plan de aprendizaje solicitada.';
$string['evidence_coursecompleted'] = 'El curso \'{$a}\' ha sido completado.';
$string['evidence_coursemodulecompleted'] = 'La actividad \'{$a}\' ha sido completada.';
$string['invalidpersistenterror'] = 'Error: {$a}';
$string['invalidtaxonomy'] = 'Taxonomía inválida: {$a}';
$string['planstatusactive'] = 'Activo';
$string['planstatuscomplete'] = 'Completado';
$string['planstatusdraft'] = 'Borrador';
$string['planstatusinreview'] = 'En revisión';
$string['planstatuswaitingforreview'] = 'Esperando revisión';
$string['taxonomy_behaviour'] = 'Comportamiento';
$string['taxonomy_competency'] = 'Competencia';
$string['taxonomy_concept'] = 'Concepto';
$string['taxonomy_domain'] = 'Dominio';
$string['taxonomy_indicator'] = 'Indicador';
$string['taxonomy_level'] = 'Nivel';
$string['taxonomy_outcome'] = 'Resultado de aprendizaje';
$string['taxonomy_practice'] = 'Práctica';
$string['taxonomy_proficiency'] = 'Aptitud';
$string['taxonomy_skill'] = 'Habilidad';
$string['taxonomy_value'] = 'Valor';
$string['usercommentedonacompetency'] = '{$a->fullname} comentó en la competencia "{$a->competency}":

{$a->comment}

Ver: {$a->url}';
$string['usercommentedonacompetencyhtml'] = '<p>{$a->fullname} comentó en la competencia "{$a->competency}":</p>
<div>{$a->comment}</div>
<p>Ver: <a href="{$a->url}">{$a->urlname}</a>.</p>';
$string['usercommentedonacompetencysmall'] = '{$a->fullname} comentó en la competencia';
$string['usercommentedonacompetencysubject'] = '{$a} comentó en una competencia.';
$string['usercommentedonaplan'] = '{$a->fullname} comento en el plan de aprendizaje "{$a->plan}":

{$a->comment}

Ver: {$a->url}';
$string['usercommentedonaplanhtml'] = '<p>{$a->fullname} comentó en el plan de aprendizaje "{$a->plan}":</p>
<div>{$a->comment}</div>
<p>Ver: <a href="{$a->url}">{$a->urlname}</a>.</p>';
$string['usercommentedonaplansmall'] = '{$a->fullname} comentó en el plan de aprendizaje "{$a->plan}".';
$string['usercommentedonaplansubject'] = '{$a} comentó en el plan de aprendizaje.';
$string['usercompetencystatus_idle'] = 'No activo';
$string['usercompetencystatus_inreview'] = 'En revision';
$string['usercompetencystatus_waitingforreview'] = 'Esperando revisión';
$string['userplans'] = 'Planes de aprendizaje';
