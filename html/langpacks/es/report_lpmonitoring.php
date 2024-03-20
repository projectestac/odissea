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
 * Strings for component 'report_lpmonitoring', language 'es', version '4.1'.
 *
 * @package     report_lpmonitoring
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advancedfilter'] = 'Filtro avanzado';
$string['apply'] = 'Aplicar';
$string['atleastonecomment'] = 'Planes de estudio con algún comentario';
$string['atleasttwoplans'] = 'Usuarios con dos o más planes de estudio';
$string['bordercolour'] = 'Color del borde';
$string['bordercolourdesc'] = 'Color a usar para el borde de la página';
$string['bulkdefaultrating'] = 'Evaluar masivamente todas las competencias de todos los alumnos';
$string['colorconfiguration'] = 'Colores de la escala de competencias';
$string['colorsforscale'] = 'Colores de la escala: {$a}';
$string['colorsforscalesaved'] = 'Los colores de la escala {$a} se han guardado correctamente.';
$string['comment'] = 'Comentario';
$string['comments'] = 'Comentarios';
$string['commentsedit'] = 'Ver o añadir comentarios';
$string['commentseditshort'] = 'Ver/Añadir';
$string['commentsnumber'] = '<strong>({$a})</strong> comentario(s)';
$string['competencyreports'] = 'Informes de competencias';
$string['contd'] = 'cont.';
$string['course'] = 'Curso';
$string['dategenerated'] = 'Generado informe: {$a}';
$string['donotapplybulk'] = 'No evaluar masivamente esta competencia';
$string['emptytemplate'] = 'No se han encontrado planes de aprendizaje';
$string['errormanagetags'] = 'Error al enviar el formato de edición de etiquetas';
$string['eventusercompetencyresetted'] = 'Competencia de usuario reseteada.';
$string['evidence_reset'] = 'La evaluación de la competencia se reseteó en el plan de aprendizaje "{$a}".';
$string['filter'] = 'Filtro';
$string['filterboth'] = 'Ambos';
$string['filterby'] = 'Filtro por';
$string['filterbyscalevalue'] = 'Filtro por valor de escala';
$string['filtercourse'] = 'En el curso';
$string['filtermodule'] = 'En la actividad del curso';
$string['finalrating'] = 'Evaluación final';
$string['finalratingcourse'] = 'Evaluación en el curso';
$string['finalratingcoursemodule'] = 'Evaluación en la actividad';
$string['forcerating'] = 'Forzar evaluación de usuarios ya evaluados';
$string['incms'] = 'en actividades';
$string['incourses'] = 'en cursos';
$string['invalidframework'] = 'Marco de competencias no válido';
$string['invalidscaleconfiguration'] = 'Configuración de escala no válida';
$string['learningplan'] = 'Plan de aprendizaje';
$string['learningplancompetencies'] = 'Competencias de plan de aprendizaje: {$a}';
$string['learningplanswithtag'] = 'Planes de aprendizaje con esa etiqueta';
$string['linkedcms'] = 'Actividades relacionadas';
$string['linkedusers'] = 'Usuarios relacionados';
$string['moodleuserid'] = 'ID de usuario de Moodle';
$string['nextuser'] = 'Siguiente Usuario';
$string['nocompetenciesforusererror'] = 'No se encontraron competencias para ninguno de los planes asociados con el usuario con ID: {$a}';
$string['nocompetenciesintemplate'] = 'No se han relacionado competencias con la plantilla del plan de aprendizaje';
$string['nodataavailable'] = 'No hay datos disponibles';
$string['nolearningplanavailable'] = 'No hay plan de aprendizaje disponible';
$string['nomatchingrecords'] = 'No se han encontrado registros que coincidan';
$string['nopermissionsplanview'] = 'Lo siento, pero actualmente no tiene permisos para ver el plan de aprendizaje de {$a}';
$string['nopermissionsusercompetencyview'] = 'Lo siento, pero actualmente no tiene permisos para ver la competencia del usuario {$a}';
$string['noplansforusererror'] = 'No se han encontrado planes de aprendizaje para el us ID de usuario: {$a}';
$string['noscaleavailable'] = 'No hay escala disponible';
$string['notemplateselected'] = 'No se ha seleccionado plantilla';
$string['noticebulkrating'] = 'No tendrá impacto sobre los alumnos ya evaluados. Para forzar su nueva evaluación marque la opción "Forzar evaluación de usuarios ya evaluados"';
$string['notproficient'] = 'Falta de aptitud';
$string['notproficientcompetencies'] = 'Falta de aptitud en competencias';
$string['notrated'] = 'Sin evaluar';
$string['notratedcompetencies'] = 'Competencias sin evaluar';
$string['nouserselected'] = 'No se ha seleccionado ningún usuario';
$string['pdfreporttitle'] = '{$a} - Resumen de competencias en Moodle';
$string['plansnumber'] = '<strong>({$a})</strong> plan(es) de aprendizaje';
$string['pluginname'] = 'Monitorización de planes de aprendizaje';
$string['previoususer'] = 'Usuario Anterior';
$string['privacy:metadata'] = 'El plugin de monitorización de planes de aprendizaje no almacena ningún dato personal.';
$string['proficient'] = 'Competente';
$string['proficientcompetencies'] = 'Aptitud en competencias';
$string['profilefieldnotuniqueerror'] = 'Error en get_userid_from_profile_field: encontrados {$a} resultados';
$string['rated'] = 'Calificado';
$string['ratingnumber'] = 'Evaluación <strong>({$a})</strong>';
$string['resetallratings'] = 'Resetear todas las evaluaciones';
$string['resetallratings_confirmation'] = 'Esta acción reseteará todas las evaluaciones de todas las competencias de este plan de aprendizaje. Las evaluaciones retornarán a "Sin evaluar" pero se mantendrán las evidencias. Esta acción no se puede deshacer. ¿Desea continuar?';
$string['resetallratings_help'] = 'Resetear todas las competencias de este plan (retornarán a "Sin evaluar" pero se mantendrán las evidencias)';
$string['resetonecompetency'] = 'Resetear esta competencia (retornará a "Sin evaluar" pero se mantendrán la evidencias)';
$string['resetonecompetency_confirmation'] = 'Esta acción reseteará la evaluación de la competencia seleccionada. La evaluación retornará a "Sin evaluar" pero las evidencias se mantendrán. Esta acción no se puede deshacer. ¿Desea continuar?';
$string['scalefilterby'] = 'Filtrar escala(s) por';
$string['scalesfortemplate'] = 'Escalas de esta plantilla';
$string['searchincompetencies'] = 'Buscar en competencias';
$string['searchincourses'] = 'Buscar en cursos';
$string['searchincoursesactivities'] = 'Buscar en cursos/actividades';
$string['searchplaceholder'] = 'Buscar';
$string['selectframework'] = 'Elija un marco de competencias';
$string['selectlearningplan'] = 'Elija un plan de aprendizaje';
$string['selectlearningplantemplate'] = 'Elija una plantilla de plan de aprendizaje';
$string['selecttag'] = 'Elija una etiqueta';
$string['selectuser'] = 'Elija un usuario';
$string['statslearningplan'] = 'Estadísticas de planes de aprendizaje';
$string['studentid'] = 'ID del estudiante';
$string['studentidmapping'] = 'mapeo de ID de estudiante';
$string['studentidmappingdesc'] = 'Este ajuste hace dos cosas: 1) sale como el identificador del estudiante en el PDF (ej., ID de estudiante) y 2) indica al servidor web report_lpmonitoring_get_user_pdf qué esperar y comprobar cuando encuentra a un usuario.';
$string['successtaskmsg'] = 'Las evaluaciones se ejecutarán pronto';
$string['tabdetail'] = 'En detalle';
$string['tabreport'] = 'Informe';
$string['tabsummary'] = 'Resumen';
$string['tag'] = 'Etiqueta';
$string['tagarea_competency_plan'] = 'Planes de aprendizaje';
$string['tags'] = 'Etiqueta(s)';
$string['tagsedit'] = 'Editar etiquetas';
$string['tagseditshort'] = 'Editar';
$string['taskratingrunning'] = 'Evaluación en progreso. Por favor, espere a que termine antes de iniciar una nueva';
$string['totalnumberrating'] = 'Número total de calificaciones';
$string['totalnumberratingincms'] = 'Número total de calificaciones en actividades';
$string['totalnumberratingincourses'] = 'Número total de calificaciones en cursos';
$string['totalusers'] = 'Total usuarios';
$string['userpdflogo'] = 'Logo PDF del usuario';
$string['userpdflogodesc'] = 'El logo para usar en en informe PDF del usuario';
$string['userreportpdf'] = 'Informe PDF del usuario';
$string['usersfromtemplate'] = 'Usuarios de esta plantilla';
