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
 * Strings for component 'gradingform_erubric', language 'es', version '4.1'.
 *
 * @package     gradingform_erubric
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcriterion'] = 'Añadir criterio';
$string['addnew'] = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Añadir (+)';
$string['alwaysshowdefinition'] = 'Permitirle a los usuarios previsualizar rúbrica (en caso contrario solamente será mostrada después de la calificación)';
$string['backtoediting'] = 'Regresar a editar';
$string['benchmarkfinal'] = 'Resultado del patrón basal (benchmark) final del estudiante';
$string['benchmarkinfo'] = 'Resultados de Análisis del Aprendizaje';
$string['benchmarkinfonull'] = 'Sin resultados de Análisis del Aprendizaje';
$string['collaborationempty'] = 'Tipo de colaboración';
$string['collaborationochoice'] = '¡Usted debe elegir el tipo de colaboración antes de añadir módulos!';
$string['collaborationtype'] = 'Tipo:';
$string['collaborationtypeentries'] = 'publicaciones y charlas';
$string['collaborationtypefileadds'] = 'envíos de archivo';
$string['collaborationtypeinteractions'] = 'interactuaron personas';
$string['collaborationtypereplies'] = 'respuestas en foros';
$string['confirmchangecriteriontype'] = '¿Está seguro de querer cambiar el tipo de criterio? Los módulos de criterio actuales del curso serán reiniciados.';
$string['confirmdeleteactivity'] = '¿Está seguro de querer eliminar esta actividad?';
$string['confirmdeleteassignment'] = '¿Está seguro que quiere eliminar esta tarea?';
$string['confirmdeletecriterion'] = '¿Está seguro de querer eliminar este criterio?';
$string['confirmdeletelevel'] = '¿Está seguro de querer eliminar este nivel?';
$string['confirmdeleteresource'] = '¿Está seguro de querer eliminar este recurso?';
$string['coursemoduleempty'] = 'Añadir Módulo de Curso';
$string['coursemoduleis'] = 'En:';
$string['criterion'] = 'Criterio {$a}';
$string['criterionaddlevel'] = 'Añadir nivel';
$string['criteriondelete'] = 'Eliminar criterio';
$string['criterionduplicate'] = 'Criterio duplicado';
$string['criterionempty'] = 'Elegir para editar criterio';
$string['criterionmovedown'] = 'Mover abajo';
$string['criterionmoveup'] = 'Mover arriba';
$string['criterionoperatorequals'] = 'igual (=)';
$string['criterionoperatormorethan'] = 'mayor que (>=)';
$string['criterionremark'] = 'Comentario para criterio {$a->description}: {$a->remark}';
$string['defineenrichedrubric'] = 'Definir e-rúbrica de Análisis del Aprendizaje';
$string['deleteactivity'] = 'Eliminar actividad';
$string['deleteassignment'] = 'Borrar tarea';
$string['deleteresource'] = 'Eliminar recurso';
$string['description'] = 'Descripción';
$string['enableremarks'] = 'Permitirle al evaluador que añada anotaciones de texto para cada criterio';
$string['enrichedrubricinfo'] = 'Reglas de enriquecimiento para criterio rúbrica';
$string['enrichedvalueempty'] = 'Añadir valor';
$string['enrichedvaluesuffixfiles'] = 'archivos';
$string['enrichedvaluesuffixnothing'] = '<font color="rojo"><b>!!!</b></font>';
$string['enrichedvaluesuffixpercent'] = 'porciento';
$string['enrichedvaluesuffixpoints'] = '%puntos';
$string['enrichedvaluesuffixstudents'] = 'gente';
$string['enrichedvaluesuffixtimes'] = 'veces';
$string['enrichment'] = 'Enriquecimiento';
$string['enrichment_help'] = 'Vea el siguiente tutorial en inglés acerca de como Crear Criterios en Rúbrica Enriquecida de Análisis del Aprendizaje:
 <br /><br />
<a target="_blank" href="https://www.youtube.com/watch?v=jCuNm463yTU">Create Criteria in Learning Analytics Enriched Rubric</a><br /><br />';
$string['enrichmentoptions'] = 'Opciones de criterios enriquecidos';
$string['enrichshareconfirm'] = '<p style="text-align:center;color:red;font-weight:bold">¡ADVERTENCIA!</p>
   El plugin <b>Rúbrica Enriquecida de Análisis del Aprendizaje</b> puede ser usado como una plantilla de formato de calificación avanzada, ¡SOLAMENTE PARA EL CURSO ACTUAL!
   Si otros usuarios en su sitio utilizaran este formato en cualquier otro curso, ¡<b>no funcionará tal como está</b>! La estructura principal de la rúbrica permanecerá intacta, pero tendrá que reemplazar todos los módulos de curso incrustados con módulos similares del curso destino.';
$string['err_attention'] = '<p style="text-align:center;color:red;font-weight:bold">¡ATENCIÓN!</p>';
$string['err_collaborationhoice'] = 'Los módulos de chat no pueden elegirse para revisar envíos de archivos o respuestas en foros.';
$string['err_collaborationtypeneedless'] = 'El tipo de campo debería ser seleccionado solamente para revisión colaborativa.';
$string['err_criterionmethod'] = 'Usted debe elegir la referencia numérica para el criterio enriquecido.';
$string['err_criteriontypeid'] = 'Usted debe elegir un operador para el criterio enriquecido.';
$string['err_enrichedcriterionmissing'] = 'Todos los criterios de enriquecimiento deben ser seleccionados, o ninguno.';
$string['err_enrichedmoduleselection'] = 'Los módulos de curso seleccionados deben ser del mismo tipo de criterio enriquecido';
$string['err_enrichedvalueformat'] = 'El número de valores de revisión para cada nivel enriquecido debe ser un número entero no-negativo válido';
$string['err_enrichedvaluemissing'] = 'Criterio enriquecido, debe tener valores de comprobación en todos los niveles';
$string['err_mintwolevels'] = 'Cada criterio debe tener al menos dos niveles';
$string['err_missingcoursemodule'] = '¡Módulo faltante!';
$string['err_nocriteria'] = 'La rúbrica debe tener cuando menos un criterio';
$string['err_nodefinition'] = 'La definición del nivel no puede estar vacía';
$string['err_nodescription'] = 'La descripción del criterio no puede estar vacía';
$string['err_novariations'] = 'El puntaje mínimo total no puede ser el mismo que el puntaje máximo total.';
$string['err_novariationspoints'] = 'Los niveles de criterio no pueden tener el mismo número de puntos, dentro del mismo criterio.';
$string['err_novariationsvalues'] = 'Criterio enriquecido, debe tener diferentes valores de corte en todos los niveles, dentro del mismo criterio.';
$string['err_scoreformat'] = 'El número de puntos para cada nivel debe ser un número válido (positivo o negativo).';
$string['err_totalscore'] = 'El número máximo de puntos posibles al calificar por la rúbrica debe ser mayor de cero';
$string['erubric'] = 'E-rúbrica de Análisis del Aprendizaje';
$string['gradingof'] = '{$a} calificando';
$string['intercactionempty'] = 'Tipo de Criterio';
$string['level'] = 'Nivel {$a->definition}, {$a->score} puntos.';
$string['leveldefinition'] = 'Nivel {$a} definición';
$string['leveldelete'] = 'Eliminar nivel {$a}';
$string['levelempty'] = 'Elija para editar nivel';
$string['levelsgroup'] = 'Nivela grupo';
$string['lockzeropoints'] = 'Calcular calificación basada en que la rúbrica tenga un puntaje mínimo de 0, aunque no lo tuviera';
$string['name'] = 'Nombre';
$string['operatorempty'] = 'Elegir operador';
$string['participationin'] = 'Revisar:';
$string['participationis'] = 'Es:';
$string['participationon'] = 'Relacionado con:';
$string['pluginname'] = 'Rúbrica Enriquecida de Análisis del Aprendizaje';
$string['previewerubric'] = 'Previsualizar e-rúbrica de CA';
$string['privacy:metadata:fillings'] = 'La tabla de la base de datos que almacena información de calificación y resultados de Análisis del Aprendizaje y Minería de Datos.';
$string['privacy:metadata:fillings:criterionid'] = 'La ID del criterio de una e-rúbrica que fue usada para calificar.';
$string['privacy:metadata:fillings:enrichedbenchmark'] = 'El valor de referencia del criterio enriquecido, creado de Minería de Datos y Análisis del Aprendizaje.';
$string['privacy:metadata:fillings:enrichedbenchmarkstudent'] = 'El valor de referencia del estudiante, creado de Minería de Datos y Análisis del Aprendizaje.';
$string['privacy:metadata:fillings:enrichedbenchmarkstudents'] = 'El valor de referencia de todos los estudiantes participantes, creado de Minería de Datos y Análisis del Aprendizaje.';
$string['privacy:metadata:fillings:instanceid'] = 'La ID de la instancia de calificar de un intento de calificación de un evaluador específico usando una e-rúbrica específica.';
$string['privacy:metadata:fillings:levelid'] = 'La ID del nivel seleccionado de un criterio de e-rúbrica.';
$string['privacy:metadata:fillings:remark'] = 'El texto del comentario proporcionado por un evaluador durante le evaluación de un criterio de e-rúbrica.';
$string['referencetypeempty'] = 'Una o Todas';
$string['referencetypenumber'] = 'estudiante';
$string['referencetypepercentage'] = 'estudiantes';
$string['regradeoption0'] = 'No marcar para recalificar';
$string['regradeoption1'] = 'Marcar para recalificar';
$string['restoredfromdraft'] = 'NOTA: El último intento para calificar a esta persona no se grabó apropiadamente, por lo que se han restaurado las calificaciones del borrador. SI quiere cancelar estos cambio, use el botón inferior de \'Cancelar\'.';
$string['rubricmapping'] = 'Reglas de mapeo de puntaje a calificación';
$string['rubricnotcompleted'] = 'Debería de elegirse un nivel apropiado para cada criterio';
$string['rubricoptions'] = 'Opciones de rúbrica';
$string['rubricstatus'] = 'Status actual de e-rúbrica de EA';
$string['save'] = 'Guardar';
$string['saverubric'] = 'Guardar rúbrica enriquecida y hacerla disponible';
$string['saverubricdraft'] = 'Guardar como borrador';
$string['scoreinputforlevel'] = 'Ingreso del puntaje para nivel {$a}';
$string['scorepostfix'] = '{$a} puntos';
$string['selectcollaboration'] = 'colaboración';
$string['selectgrade'] = 'calificación';
$string['selectstudy'] = 'estudio';
$string['showdescriptionstudent'] = 'Mostrar descripción de rúbrica a quienes sean calificados';
$string['showdescriptionteacher'] = 'Mostrar descripción de rúbrica durante la evaluación';
$string['showenrichedbenchmarkstudent'] = 'Mostrar patrón basal de enriquecimiento calculado a quienes están siendo calificados';
$string['showenrichedbenchmarkteacher'] = 'Mostrar patrón basal de enriquecimiento calculado durante la evaluación';
$string['showenrichedcriteriastudent'] = 'Mostrar enriquecimiento de criterios a quienes son calificados';
$string['showenrichedcriteriateacher'] = 'Mostrar enriquecimiento de criterios durante la evaluación';
$string['showenrichedvaluestudent'] = 'Mostrar pontos de revisión de enriquecimiento para cada nivel a quienes son evaluados';
$string['showenrichedvalueteacher'] = 'Mostrar pontos de revisión de enriquecimiento para cada nivel durante la evaluación';
$string['showremarksstudent'] = 'Mostrar anotaciones a quienes son calificados';
$string['showscorestudent'] = 'Mostrar puntos para cada nivel a quienes son calificados';
$string['showscoreteacher'] = 'Mostrar puntos para cada nivel durante la evaluación';
$string['sortlevelsasc'] = 'Ordenación para niveles';
$string['sortlevelsasc0'] = 'Descendente por número de puntos';
$string['sortlevelsasc1'] = 'Ascendiente por número de puntos';
$string['studentbenchmarkinfo'] = 'Patrón basal del estudiante';
$string['studentsbenchmarkinfo'] = 'Patrón basal de los estudiantes';
$string['timestampenrichmentend'] = 'Los cálculos de enriquecimiento se realizan hasta la fecha esperada de envío (si está habilitada)';
$string['timestampenrichmentstart'] = 'Los cálculos de enriquecimiento se realizan desde la fecha disponible (si está habilitada)';
