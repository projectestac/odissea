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
 * Strings for component 'tool_lp', language 'es', branch 'MOODLE_38_STABLE'
 *
 * @package   tool_lp
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Acciones';
$string['activities'] = 'Actividades';
$string['addcohorts'] = 'Agregar cohortes';
$string['addcohortstosync'] = 'Agregar cohortes a la sincronización';
$string['addcompetency'] = 'Agregar una competencia';
$string['addcoursecompetencies'] = 'Agregar una competencia al curso';
$string['addcrossreferencedcompetency'] = 'Agregar una competencia cruzada';
$string['addingcompetencywillresetparentrule'] = 'Agregar una nueva competencia eliminará la regla configurada en \'{$a}\'. ¿Desea continuar?';
$string['addnewcompetency'] = 'Agregar una nueva competencia';
$string['addnewcompetencyframework'] = 'Agregar un nuevo marco de competencias';
$string['addnewplan'] = 'Agregar un nuevo plan de aprendizaje';
$string['addnewtemplate'] = 'Agregar una nueva plantilla de plan de aprendizaje';
$string['addnewuserevidence'] = 'Agregar una nueva evidencia';
$string['addtemplatecompetencies'] = 'Agregar competencias a una plantilla de plan de aprendizaje';
$string['aisrequired'] = '\'{$a}\' es requerida';
$string['aplanswerecreated'] = 'Se crearon {$a} planes de aprendizaje';
$string['aplanswerecreatedmoremayrequiresync'] = 'Se crearon {$a} planes de aprendizaje, el resto será creado en la próxima sincronización.';
$string['assigncohorts'] = 'Asignar cohortes';
$string['averageproficiencyrate'] = 'El índice de aptitud promedio para los planes de aprendizaje basados en esta plantilla es del {$a} %';
$string['cancelreviewrequest'] = 'Cancelar el pedido de revisión';
$string['cannotaddrules'] = 'Esta competencia no puede ser configurada.';
$string['cannotcreateuserplanswhentemplateduedateispassed'] = 'No pueden crearse nuevos planes de aprendizaje. La fecha de caducidad de la plantilla ya ha llegado o está por llegar.';
$string['cannotcreateuserplanswhentemplatehidden'] = 'No pueden crearse nuevos planes de aprendizaje mientras que la plantilla esté oculta.';
$string['category'] = 'Categoría';
$string['chooserating'] = 'Elija una calificación...';
$string['cohortssyncedtotemplate'] = 'Cohortes sincronizadas con esta plantilla de plan de aprendizaje';
$string['competenciesforframework'] = 'Competencias para {$a}';
$string['competenciesmostoftennotproficient'] = 'Competencias que con mayor frecuencia no se superan en los planes de aprendizaje completos';
$string['competenciesmostoftennotproficientincourse'] = 'Competencias que más a menudo no se superan en este curso';
$string['competencycannotbedeleted'] = 'La competencia \'{$a}\' no puede eliminarse';
$string['competencycreated'] = 'Competencia creada';
$string['competencycrossreferencedcompetencies'] = '{$a} competencias referenciadas';
$string['competencyframework'] = 'Marco de competencias';
$string['competencyframeworkcreated'] = 'Marco de competencias creado';
$string['competencyframeworkname'] = 'Nombre';
$string['competencyframeworkroot'] = 'Sin padre (competencia de nivel superior)';
$string['competencyframeworks'] = 'Marcos de competencias';
$string['competencyframeworkupdated'] = 'Marco de competencias actualizado.';
$string['competencyoutcome_complete'] = 'Marcar como completa';
$string['competencyoutcome_evidence'] = 'Anexar una evidencia';
$string['competencyoutcome_none'] = 'Ninguna';
$string['competencyoutcome_recommend'] = 'Recomendar la competencia';
$string['competencypicker'] = 'Selector de competencias';
$string['competencyrule'] = 'Regla de competencia';
$string['competencyupdated'] = 'Competencia actualizada';
$string['completeplan'] = 'Completar este plan de aprendizaje';
$string['completeplanconfirm'] = '¿Marcar el plan de aprendizaje \'{$a}\' como completado? En caso afirmativo, el estado actual de todas las competencias de usuarios será registrado y el plan quedará como "sólo lectura".';
$string['configurecoursecompetencysettings'] = 'Configurar competencias del curso';
$string['configurescale'] = 'Configurar escalas';
$string['coursecompetencies'] = 'Competencias del curso';
$string['coursecompetencyratingsarenotpushedtouserplans'] = 'Las calificaciones de competencias de este curso no afectan los planes de aprendizaje.';
$string['coursecompetencyratingsarepushedtouserplans'] = 'Las calificaciones de competencias en este curso actualizan de inmediato los planes de aprendizaje.';
$string['coursecompetencyratingsquestion'] = 'Cuando se califica una competencia de curso, ¿aplica también al plan de aprendizaje o únicamente al curso?';
$string['coursesusingthiscompetency'] = 'Cursos vinculados a esta competencia';
$string['coveragesummary'] = '{$a->competenciescoveredcount} de {$a->competenciescount} competencias están completas ( {$a->coveragepercentage} % )';
$string['createlearningplans'] = 'Crear planes de aprendizaje';
$string['createplans'] = 'Crear planes de aprendizaje';
$string['crossreferencedcompetencies'] = 'Competencias referenciadas';
$string['default'] = 'Por defecto';
$string['deletecompetency'] = '¿Eliminar la competencia \'{$a}\'?';
$string['deletecompetencyframework'] = '¿Eliminar el marco de competencias \'{$a}\'?';
$string['deletecompetencyparenthasrule'] = '¿Eliminar la competencia \'{$a}\'? Esto también eliminará el conjunto de reglas para su padre.';
$string['deleteplan'] = '¿Eliminar el plan \'{$a}\'?';
$string['deleteplans'] = 'Eliminar los planes de aprendizaje';
$string['deletetemplate'] = '¿Eliminar la plantilla de plan \'{$a}\'?';
$string['deletetemplatewithplans'] = 'La plantilla tiene planes de aprendizaje asociados. Debe indicar cómo procesar esos planes.';
$string['deletethisplan'] = 'Eliminar este plan';
$string['deletethisuserevidence'] = 'Eliminar esta evidencia';
$string['deleteuserevidence'] = '¿Eliminar la evidencia de aprendizajes previos \'{$a}\'?';
$string['description'] = 'Descripción';
$string['duedate'] = 'Fecha límite';
$string['duedate_help'] = 'La fecha para la cual el plan de aprendizaje debería completarse.';
$string['editcompetency'] = 'Editar competencia';
$string['editcompetencyframework'] = 'Editar marco de competencia';
$string['editplan'] = 'Editar plan de aprendizaje';
$string['editrating'] = 'Editar calificación';
$string['edittemplate'] = 'Editar plantilla de plan de aprendizaje';
$string['editthisplan'] = 'Editar este plan de aprendizaje';
$string['editthisuserevidence'] = 'Editar esta evidencia';
$string['edituserevidence'] = 'Editar evidencia';
$string['evidence'] = 'Evidencia';
$string['findcourses'] = 'Encontrar cursos';
$string['frameworkcannotbedeleted'] = 'El marco de competencia \'{$a}\' no puede eliminarse';
$string['hidden'] = 'Oculta';
$string['hiddenhint'] = '(oculta)';
$string['idnumber'] = 'Número de ID';
$string['inheritfromframework'] = 'Heredar del marco de competencias (opción por defecto)';
$string['itemstoadd'] = 'Elementos a agregar';
$string['jumptocompetency'] = 'Ir a la competencia';
$string['jumptouser'] = 'Ir al usuario';
$string['learningplancompetencies'] = 'Competencias del plan de aprendizaje';
$string['learningplans'] = 'Planes de aprendizaje';
$string['levela'] = 'Nivel {$a}';
$string['linkcompetencies'] = 'Vincular competencias';
$string['linkcompetency'] = 'Vincular competencia';
$string['linkedcompetencies'] = 'Competencias vinculadas';
$string['linkedcourses'] = 'Cursos vinculados';
$string['linkedcourseslist'] = 'Cursos vinculados:';
$string['listcompetencyframeworkscaption'] = 'Lista de marcos de competencia';
$string['listofevidence'] = 'Lista de evidencia';
$string['listplanscaption'] = 'Lista de Planes de aprendizaje';
$string['listtemplatescaption'] = 'Lista de plantillas de planes de aprendizaje';
$string['loading'] = 'Cargando...';
$string['locatecompetency'] = 'Localizar competencia';
$string['managecompetenciesandframeworks'] = 'Administrar competencias y marcos';
$string['modcompetencies'] = 'Competencias del curso';
$string['modcompetencies_help'] = 'Competencias de curso vinculadas a esta actividad';
$string['move'] = 'Mover';
$string['movecompetency'] = 'Mover competencia';
$string['movecompetencyafter'] = 'Mover competencia después de \'{$a}\'';
$string['movecompetencyframework'] = 'Mover marco de competencias';
$string['moveframeworkafter'] = 'Mover marco de competencias después de \'{$a}\'';
$string['movetonewparent'] = 'Reubicar';
$string['myplans'] = 'Mis planes de aprendizaje';
$string['nfiles'] = '{$a} archivo(s)';
$string['noactivities'] = 'Sin actividades';
$string['nocompetencies'] = 'No se han creado competencias para este marco.';
$string['nocompetenciesincourse'] = 'No se han vinculado competencias con este curso.';
$string['nocompetenciesinevidence'] = 'No se han vinculado competencias con esta evidencia.';
$string['nocompetenciesinlearningplan'] = 'No se han vinculado competencias con este plan de aprendizaje.';
$string['nocompetenciesintemplate'] = 'No se han vinculado competencias con esta plantilla de plan de aprendizaje.';
$string['nocompetencyframeworks'] = 'Aún no se han creado marcos de competencia';
$string['nocompetencyselected'] = 'No se han seleccionado competencias';
$string['nocrossreferencedcompetencies'] = 'No se han referenciado otras competencias a esta competencia.';
$string['noevidence'] = 'Sin evidencias';
$string['nofiles'] = 'Sin archivos';
$string['noparticipants'] = 'No se han encontrado participantes.';
$string['noplanswerecreated'] = 'No se han creado planes de aprendizaje.';
$string['notemplates'] = 'No se han creado plantillas de planes de aprendizaje aún.';
$string['nourl'] = 'Sin URL';
$string['nouserevidence'] = 'No se ha agregado evidencia de aprendizajes previos aún.';
$string['outcome'] = 'Resultado';
$string['parentcompetency'] = 'Competencia padre';
$string['parentcompetency_edit'] = 'Editar la competencia padre';
$string['parentcompetency_help'] = 'Definir el padre bajo el que se añadirá la nueva competencia. Puede ser otra competencia dentro del mismo marco o la raíz del marco de competencias, lo que creará una competencia de nivel superior.';
$string['path'] = 'Ruta:';
$string['planname'] = 'Nombre';
$string['plantemplate_help'] = 'Un plan de aprendizaje creado a partir de una plantilla contendrá la lista de competencias heredada de la plantilla. Los cambios en la plantilla se reflejarán en cualquier plan creado a partir de esa plantilla.';
$string['points'] = 'Puntos';
$string['proficient'] = 'Superada';
$string['progress'] = 'Avance';
$string['rate'] = 'Calificar';
$string['ratecomment'] = 'Notas sobre la evidencia';
$string['rating'] = 'Calificación';
$string['reopenplanconfirm'] = '¿Reabrir el plan de aprendizaje \'{$a}\'? Si lo hace, el estado de las competencias de los usuarios que fuera registrado en el momento en que el plan fue previamente cerrado será eliminado y el plan quedará nuevamente activo.';
$string['requestreview'] = 'Pedir revisión';
$string['reviewer'] = 'Revisor';
$string['reviewstatus'] = 'Estado de la revisión';
$string['savechanges'] = 'Guardar cambios';
$string['scale'] = 'Escala';
$string['scale_help'] = 'Una escala determina cómo se mide el dominio de una determinada competencia. Después de seleccionar una escala, la misma debe ser configurada.

* El elemento seleccionado como \'por defecto\' es la calificación otorgada cuando una competencia se completa automáticamente.
* El o los elementos seleccionados como "Superada" indican los valores que determinarán que la competencia ha sido alcanzada.';
$string['scalevalue'] = 'Valor de la escala';
$string['search'] = 'Buscar...';
$string['selectedcompetency'] = 'Competencia seleccionada';
$string['sendallcompetenciestoreview'] = 'Enviar todas las competencias para revisión de la evidencia de aprendizajes previos \'{$a}\'';
$string['sendcompetenciestoreview'] = 'Enviar competencias para revisión';
$string['shortname'] = 'Nombre';
$string['state'] = 'Estado';
$string['status'] = 'Estado';
$string['taxonomies'] = 'Taxonomías';
$string['taxonomy_add_behaviour'] = 'Agregar comportamiento';
$string['taxonomy_add_competency'] = 'Agregar una competencia';
$string['taxonomy_add_domain'] = 'Agregar dominio';
$string['taxonomy_add_indicator'] = 'Añadir indicador';
$string['taxonomy_add_level'] = 'Agregar nivel';
$string['taxonomy_add_proficiency'] = 'Añadir aptitud';
$string['taxonomy_add_skill'] = 'Agregar habilidad';
$string['taxonomy_edit_behaviour'] = 'Editar comportamiento';
$string['taxonomy_edit_domain'] = 'Editar dominio';
$string['taxonomy_edit_indicator'] = 'Editar indicador';
$string['taxonomy_edit_level'] = 'Editar nivel';
$string['taxonomy_edit_proficiency'] = 'Editar aptitud';
$string['taxonomy_edit_skill'] = 'Editar habilidad';
$string['taxonomy_parent_behaviour'] = 'Comportamiento padre';
$string['taxonomy_parent_competency'] = 'Competencia padre';
$string['taxonomy_parent_concept'] = 'Concepto padre';
$string['taxonomy_parent_domain'] = 'Dominio padre';
$string['taxonomy_parent_indicator'] = 'Indicador padre';
$string['taxonomy_parent_level'] = 'Nivel del padre';
$string['taxonomy_parent_outcome'] = 'Resultado del padre';
$string['taxonomy_parent_practice'] = 'Práctica padre';
$string['taxonomy_parent_proficiency'] = 'Capacidad padre';
$string['taxonomy_parent_skill'] = 'Habilidad padre';
$string['taxonomy_parent_value'] = 'Valor padre';
$string['taxonomy_selected_behaviour'] = 'Comportamiento seleccionado';
$string['taxonomy_selected_competency'] = 'Competencia seleccionada';
$string['taxonomy_selected_domain'] = 'Dominio elegido';
$string['taxonomy_selected_indicator'] = 'Indicador seleccionado';
$string['taxonomy_selected_level'] = 'Nivel seleccionado';
$string['taxonomy_selected_proficiency'] = 'Aptitud seleccionada';
$string['taxonomy_selected_skill'] = 'Habilidad seleccionada';
$string['template'] = 'Plantilla de plan de aprendizaje';
$string['templatebased'] = '¿Basado en plantilla?';
$string['templatecompetencies'] = 'Plantilla de competencias del plan de aprendizaje';
$string['templatename'] = 'Nombre';
$string['templates'] = 'Plantillas de planes de aprendizaje';
$string['uponcoursecompletion'] = 'Al terminar el curso:';
$string['uponcoursemodulecompletion'] = 'Al finalizar la actividad:';
$string['userevidence'] = 'Evidencia de aprendizajes previos';
$string['userevidencecreated'] = 'Se creó la evidencia de aprendizajes previos';
$string['userevidencename'] = 'Nombre';
$string['userevidencesummary'] = 'Resumen';
$string['userevidenceupdated'] = 'Se actualizó la evidencia de aprendizajes previos';
$string['viewdetails'] = 'Ver detalles';
$string['when'] = 'Cuando';
$string['xcompetencieslinkedoutofy'] = '{$a->x} de {$a->y} competencias vinculadas a cursos';
$string['xcompetenciesproficientoutofy'] = '{$a->x} de {$a->y} competencias superadas';
$string['xcompetenciesproficientoutofyincourse'] = 'Has superado {$a->x} de las {$a->y} competencias del curso.';
