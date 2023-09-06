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
 * Strings for component 'checklist', language 'es', version '4.1'.
 *
 * @package     checklist
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomments'] = 'Añadir comentarios';
$string['additem'] = 'Añadir';
$string['additemalt'] = 'Añadir un nuevo item a la lista';
$string['additemhere'] = 'Insertar nuevo item después de este';
$string['addownitems'] = 'Añadir sus propios items';
$string['addownitems-stop'] = 'Dejar de añadir sus propios items';
$string['allowmodulelinks'] = 'Permitir enlaces a módulos';
$string['anygrade'] = 'Cualquiera';
$string['anygrouping'] = 'Cualquier agrupamiento';
$string['autopopulate'] = 'Mostrar módulos de curso en lista de verificación';
$string['autopopulate_help'] = 'Esto añadirá automáticamente una lista de todos los recursos y actividades en el curso actual hacia la lista de verificación..<br /> Esta lista será actualizada con cualquier cambio en el curso siempre que visite la página de "Editar" de la lista.<br />Los Items podrán ocultarse de la lista, al elegir el icono \'ocultar\' a un lado de ellos.<br /> Para quitar los items automáticos de la lista, cambie esta opción a \'No\' y entonces elija \'Quitar items de módulos del curso\' en la página de \'Editar\'.';
$string['autoupdate'] = 'Tacharla cuando se completen los módulos';
$string['autoupdate2'] = 'Marcar cuando los cursos o módulos se completen';
$string['autoupdate_help'] = 'Esto tachará automáticamente los items en su lista de verificación en cuanto complete la actividad relevante en el curso.<br /> \'Completar\' una actividad varía de una actividad a otra.- \'ver\' un recurso, \'enviar\' un examen o tarea \'publicar\' en un foro o unirse a un chat, etc.<br /> Si estuviera activado el seguimiento de completo (completion tracking) de Moodle 2.0 para una actividad particular, esto se usaría para tachar el item en la lista.<br /> Para conocer los detalles de exactamente que causa que una actividad se marque como \'completa\', pida al administrador que vea el archivo  \'mod/checklist/autoupdate.php\'<br /> Nota: puede tardarse hasta 60 segundos para que una activad de un estudiante se vea reflejada en su lista de verificación';
$string['autoupdatenote'] = 'Es la marca del \'estudiante\' la que se actualiza automáticamente - no se mostrarán actualizaciones en las listas de verificación de \'Solamente Profesor\'';
$string['autoupdatewarning_both'] = 'Hay items en esta lista que serán actualizados automáticamente (en cuanto los estudiantes completen la actividad relacionada). Sin embargo, como esta es una lista de verificación de \'estudiante y profesor\', las barras de progreso no se actualizarán hasta que el profesor esté de acuerdo con las puntuaciones otorgadas.';
$string['autoupdatewarning_student'] = 'Hay items en esta lista que serán actualizadas automáticamente (en cuanto los estudiantes completen la actividad relacionada).';
$string['autoupdatewarning_teacher'] = 'Se han activado las actualizaciones automáticas para esta lista de verificación, pero estas calificaciones no se mostrarán debido a que solamente se muestran las marcas del \'profesor\'.';
$string['calendardescription'] = 'Este evento fue añadido por la lista de verificación: {$a}';
$string['canceledititem'] = 'Cancelar';
$string['changetextcolour'] = 'Siguiente color de texto';
$string['checkeditemsdeleted'] = 'Items de lista de verificación eliminado';
$string['checklist'] = 'listas de verificación';
$string['checklist:addinstance'] = 'Añadir una nueva lista de verificación';
$string['checklist:edit'] = 'Crear y editar listas de verificación';
$string['checklist:emailoncomplete'] = 'Recibir emails de completado';
$string['checklist:preview'] = 'Previsualizar una lista de verificación';
$string['checklist:updatelocked'] = 'Actualizar calificaciones de listas de verificación bloqueadas';
$string['checklist:updateother'] = 'Actualizar calificaciones de lista de verificación del estudiante';
$string['checklist:updateown'] = 'Actualizar las calificaciones de sus listas de verificación';
$string['checklist:viewmenteereports'] = 'Ver (solamente) progreso del aprendiz';
$string['checklist:viewreports'] = 'Ver progreso del estudiante';
$string['checklistautoupdate'] = 'Permitir que las listas de verificación se actualicen automáticamente';
$string['checklistfor'] = 'Lista de verificación para';
$string['checklistintro'] = 'Introducción';
$string['checklistsettings'] = 'Configuraciones';
$string['checks'] = 'Revisar calificaciones';
$string['choosecourse'] = 'Elegir curso...';
$string['comments'] = 'Comentarios';
$string['completiondetail:items'] = 'Marcar elementos: {$a}';
$string['completiondetail:percent'] = 'Marcar elementos: {$a}%';
$string['completionpercent'] = 'Porcentaje de items que deberán ser tachados:';
$string['completionpercentgroup'] = 'Requerir tachar';
$string['completionpercentgroup_help'] = 'Si \'porcentaje de elementos\' es seleccionado, entonces los usuarios deben de marcar al menos el porcentaje especificado de los elementos de la lista de cotejo para ser considerados \'completado\'. Si \'elementos\' es seleccionado, entonces el usuario debe marcar al menos esos tantos elementos individuales en la lista. Tenga en cuenta que si Usted especifica aquí un número de elementos que sea mayor que el número de elementos en la lista de cotejo, entonces nunca será calificada como completada.';
$string['configchecklistautoupdate'] = 'Antes de permitir esto debe hacer algunos cambios en el código del núcleo de Moodle,  por favor lea el archivo mod/checklist/README.txt para más detalles';
$string['configshowcompletemymoodle'] = 'Si esta casilla se deja vacía, entonces las listas de verificación se ocultarán de la página de \'Mi Moodle\'';
$string['configshowmymoodle'] = 'Si esta casilla se deja vacía, entonces las actividades de listas de verificación  (con barras de progreso) ya no aparecerán en la página de \'Mi Moodle\'';
$string['configshowupdateablemymoodle'] = 'Si se activa esto, entonces solamente se mostrarán las listas de cotejo actualizables de la página de \'Mi Moodle\'';
$string['confirmdeleteitem'] = '¿Está seguro de querer eliminar permanentemente esta lista de verificación?';
$string['deleteitem'] = 'Eliminar este item';
$string['duedatesoncalendar'] = 'Añadir las fechas límite al calendario';
$string['edit'] = 'Editar lista de verificación';
$string['editchecks'] = 'Editar verificaciones';
$string['editdatesstart'] = 'Editar fechas';
$string['editdatesstop'] = 'Suspender fechas de edición';
$string['edititem'] = 'Editar este item';
$string['emailoncomplete'] = 'Mandar correo electrónico cuando la lista de verificación está completa:';
$string['emailoncomplete_help'] = 'Cuando se completa una lista de verificación, se manda un correo electrónico de notificación a todos los profesores del curso.<br /> Un administrador puede controlar quienes reciben este correo al usar la capacidad \'mod:checklist/emailoncomplete\' - por defecto, todos los profesores y profesores no-editores tienen esta capacidad.';
$string['emailoncompletebody'] = 'El usuario {$a->user} ha completado la lista de verificación \'{$a->checklist}\'  en el curso \'{$a->coursename}\'
Vea la lista de verificación aquí:';
$string['emailoncompletebodyown'] = 'Usted ha completado la lista de cotejo \'{$a->checklist}\'  en el curso \'{$a->coursename}\' Vea la lista de cotejo aquí:';
$string['emailoncompletesubject'] = 'El usuario {$a->user} ha completado la lista de verificación  \'{$a->checklist}';
$string['emailoncompletesubjectown'] = 'Usted ha completado la lista de cotejo \'{$a->checklist}\'';
$string['enterurl'] = 'Ingresar URL...';
$string['errorchecklistitemnotvalid'] = '¡La ID del elemento de lista de cotejo no pertenece a este módulo de curso!';
$string['eventchecklistcomplete'] = 'Lista de cotejo completa';
$string['eventeditpageviewed'] = 'Editar página visible';
$string['eventreportviewed'] = 'Informe visto';
$string['eventstudentchecksupdated'] = 'Revisiones del estudiante vistas';
$string['eventteacherchecksupdated'] = 'Revisiones del profesor vistas';
$string['export'] = 'Exportar items';
$string['forceupdate'] = 'Actualizar revisiones para todos los items automáticos';
$string['gradetocomplete'] = 'Calificación para completar:';
$string['grouping'] = 'Visible a agrupamientos';
$string['guestsno'] = 'No tiene permiso para ver esta lista de verificación';
$string['headingitem'] = 'Este item es un encabezado - no tendrá una casilla de verificación junto';
$string['import'] = 'Importar items';
$string['importfile'] = 'Elija archivo a importar';
$string['importfromcourse'] = 'Curso completo';
$string['importfromsection'] = 'Sección actual';
$string['indentitem'] = 'Indentar item';
$string['itemcomplete'] = 'Completado';
$string['items'] = 'Items de lista de verificación';
$string['itemstype'] = 'Elementos';
$string['linkcourses'] = 'Permitir enlazar ítems a cursos';
$string['linkcourses_desc'] = 'Cuando se habilita, los elementos en la lista de cotejo pueden enlazarse a cursos dentro de Moodle -marcándose como completados cuando el curso asociado esté completado. El habilitar esto puede tener algunas repercusiones en el desempeño al editar ítems de listas de cotejo en sitios con muchos cursos.';
$string['linkto'] = 'Enlazar a';
$string['linktocourse'] = 'Curso asociado con este elemento';
$string['linktomodule'] = 'Enlazar a este módulo';
$string['linktourl'] = 'Enlace asociado con este ítem';
$string['lockteachermarks'] = 'Bloquear calificaciones del profesor';
$string['lockteachermarks_help'] = 'Cuando se habilita esta configuración, una vez que un profesor haya guardado una calificación de \'Si\', ya no podrán cambiarla después. Los usuarios con la capacidad \'mod/checklist:updatelocked\' si podrán seguir cambiando la calificación.';
$string['lockteachermarkswarning'] = 'Nota: Una vez que haya guardado estas calificaciones, ya no podrá cambiar ninguna calificación de \'Sí\'';
$string['modulename'] = 'Lista de verificación';
$string['modulename_help'] = 'El módulo de Lista de Cotejo (checklist) le permite al profesor crear una lista de cotejo / lista de trabajos / lista de pendientes, para que sus estudiantes trabajen al respecto.';
$string['modulename_link'] = 'mod/checklist/view';
$string['modulenameplural'] = 'Listas de verificación';
$string['moveitemdown'] = 'Mover item abajo';
$string['moveitemup'] = 'Mover item arriba';
$string['noitems'] = 'No hay items en lista de verificación';
$string['onlyenrolled'] = 'Solo usuarios activos';
$string['onlyenrolleddesc'] = 'Cuando se selecciona, solamente son mostrados usuarios con inscripciones activas en las listas de cotejo (des-seleccionar  para regresar al comportamiento antiguo)';
$string['openlinkinnewwindow'] = '¿Abrir en ventana nueva?';
$string['optionalhide'] = 'Ocultar items opcionales';
$string['optionalitem'] = 'Este item es opcional';
$string['optionalshow'] = 'Mostrar items opcionales';
$string['or'] = 'O';
$string['percent'] = 'Porcentaje de elementos';
$string['percentcomplete'] = 'Items requeridos';
$string['percentcompleteall'] = 'Todos los items';
$string['pluginadministration'] = 'Administración de listas de verificación';
$string['pluginname'] = 'Lista de verificación';
$string['preview'] = 'Previsualizar';
$string['privacy:metadata:checklist_check'] = 'Información acerca de cuales ítems de lista de cotejo han sido marcadas por el usuario (o marcadas por el profesor para el usuario) en una lista de cotejo dada.';
$string['privacy:metadata:checklist_check:item'] = 'La ID del ítem de lista de cotejo que ha sido marcado';
$string['privacy:metadata:checklist_check:teacherid'] = 'La ID del profesor que actualizó por última vez el estado de este ítem';
$string['privacy:metadata:checklist_check:teachermark'] = 'El estado asignado a este ítem, para el usuario, por el profesor';
$string['privacy:metadata:checklist_check:teachertimestamp'] = 'La hora en la cual el profesor asignó por última vez un estado a este ítem';
$string['privacy:metadata:checklist_check:userid'] = 'La Id del usuario que ha marcado el ítem (o, si fue marcado por el profesor, el usuario para quien fue marcado)';
$string['privacy:metadata:checklist_check:usertimestamp'] = 'La hora en la cual el usuario marcó por última vez el ítem (0 si el ítem actualmente está sin-marcar)';
$string['privacy:metadata:checklist_comment'] = 'Información acerca de comentarios que hayan sido hechos por un profesor acerca del progreso del usuario en una lista de cotejo dada';
$string['privacy:metadata:checklist_comment:commentby'] = 'La ID del usuario (profesor) que hizo este comentario';
$string['privacy:metadata:checklist_comment:itemid'] = 'La ID del ítem de la lista de cotejo con el que se relaciona el comentario';
$string['privacy:metadata:checklist_comment:text'] = 'El texto del comentario';
$string['privacy:metadata:checklist_comment:userid'] = 'La ID del usuario (estudiante) con el cual se relaciona este comentario';
$string['privacy:metadata:checklist_comment_student'] = 'Comentarios que han sido hechos por un estudiante en una lista de cotejo dada';
$string['privacy:metadata:checklist_comment_student:itemid'] = 'La ID del elemento de la lista de cotejo con la cual se relaciona el comentario';
$string['privacy:metadata:checklist_comment_student:text'] = 'El texto del comentario';
$string['privacy:metadata:checklist_comment_student:usermodified'] = 'La ID del usuario (estudiante) que hizo elcomentario';
$string['privacy:metadata:checklist_comp_notification'] = 'Monitorear cuales usuarios ya han completado todos los elementos en sus listas de cotejo, para que no se les vuelvan a enviar Email nuevamente.';
$string['privacy:metadata:checklist_comp_notification:checklistid'] = 'La ID de la lista de cotejo';
$string['privacy:metadata:checklist_comp_notification:iscomplete'] = '1 completada y 0 no completadas';
$string['privacy:metadata:checklist_comp_notification:userid'] = 'La ID del usuario que completó la lista de cotejo';
$string['privacy:metadata:checklist_item'] = 'Información acerca de ítems privados que el usuario ha añadido a la lista de cotejo dada';
$string['privacy:metadata:checklist_item:checklist'] = 'La ID de la lista de cotejo a la que fue añadido este ítem  privado';
$string['privacy:metadata:checklist_item:displaytext'] = 'El texto del ítem privado de la lista de cotejo';
$string['privacy:metadata:checklist_item:userid'] = 'La ID del usuario que creó este ítem privado (0 para ítems que fueron creados por un  profesor y mostrados a todos los usuarios)';
$string['progress'] = 'Progreso';
$string['removeauto'] = 'Quitar items de módulo del curso';
$string['report'] = 'Ver progreso';
$string['reporttablesummary'] = 'Tabla que muestra los items en la lista de verificación que cada estudiante ha completado';
$string['requireditem'] = 'Este item es necesario - debe de completarse';
$string['resetchecklistprogress'] = 'Reiniciar el progreso de la lista de verificación y los items del usuario';
$string['savechecks'] = 'Guardar';
$string['showcolorchooser'] = 'Mostrar selector de color';
$string['showcolorchooserdesc'] = 'Muestra el selector de color se los elementos en lista en edit.php';
$string['showcompletemymoodle'] = 'Mostrar las listas de verificación completadas en la página de \'Mi Moodle\'';
$string['showfulldetails'] = 'Mostrar detalles completos';
$string['showhidechecked'] = 'Mostrar/ocultar elementos seleccionados';
$string['showmymoodle'] = 'Mostrar las Listas de Verificación en la página de \'Mi Moodle';
$string['showprogressbars'] = 'Mostrar barras de progreso';
$string['showupdateablemymoodle'] = 'Mostrar solamente las listas de cotejo actualizables en la página de \'Mi Moodle\'';
$string['student_comment_created'] = 'Comentario de estudiante creado';
$string['student_comment_updated'] = 'Comentario de estudiante actualizado';
$string['student_comment_updated_desc'] = 'El usuario con id {$a->userid} ha actualizado un comentario en la lista de cotejo con ID del módulo de curso  {$a->cmid} para que tenga el texto \'{$a->commenttext}\'';
$string['studentcomments'] = 'El usuario puede añadir sus propios comentarios a elementos de lista de cotejo';
$string['teacheralongsidecheck'] = 'Estudiante y profesor';
$string['teachercomments'] = 'Los profesores pueden añadir comentarios';
$string['teacherdate'] = 'Fecha en la que un profesor actualizó por última vez este item';
$string['teacheredit'] = 'Actualizaciones por';
$string['teacherid'] = 'El profesor que actualizó por última vez esta calificación';
$string['teachermarkno'] = 'El profesor indica que usted NO ha completado esto';
$string['teachermarkundecided'] = 'El profesor aún no ha calificado esto';
$string['teachermarkyes'] = 'El profesor indica que usted ha completado esto';
$string['teachernoteditcheck'] = 'Solamente estudiante';
$string['teacheroverwritecheck'] = 'Solamente profesor';
$string['theme'] = 'Tema para mostrar lista de verificación';
$string['togglecolumn'] = 'Alternar columna';
$string['toggledates'] = 'Alternar nombres y fechas';
$string['togglerow'] = 'Alternar fila';
$string['unindentitem'] = 'Item no indentado';
$string['update_student_comment_failed'] = 'No se pudo actualizar comentario del estudiante';
$string['updatecompletescore'] = 'Guardar calificaciones de acompletado';
$string['updateitem'] = 'Actualizar';
$string['userdate'] = 'Fecha en la que se actualizó por última vez este item';
$string['useritemsallowed'] = 'El usuario puede añadir sus propios items';
$string['useritemsdeleted'] = 'Items del usuario eliminados';
$string['view'] = 'Ver lista de verificación';
$string['viewall'] = 'Ver a todos los estudiantes';
$string['viewallcancel'] = 'Cancelar';
$string['viewallsave'] = 'Guardar';
$string['viewsinglereport'] = 'Ver progreso para este usuario';
$string['viewsingleupdate'] = 'Actualizar progreso para este usuario';
$string['yesnooverride'] = 'Si, no se puede anular';
$string['yesoverride'] = 'Si, puede anularse';
