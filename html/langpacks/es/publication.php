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
 * Strings for component 'publication', language 'es', version '4.1'.
 *
 * @package     publication
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_uploads'] = 'Añadir archivos';
$string['allfiles'] = 'Todos los archivos';
$string['allowedfiletypes'] = 'Tipos de archivo aceptados';
$string['allowedfiletypes_err'] = '¡ Revise lo que puso! Extensión de archivo o separadores inválidos';
$string['allowedfiletypes_help'] = 'Se puede restringir los tipos de archivo aceptados introduciendo una lista de tipos MIME separados por punto y coma, por ejemplo\'video/mp4; audio/mp3; image/png; image/jpeg\', o bien extensiones de archivo incluyendo el punto, por ejemplo \'.png; .jpg\'. Si la casilla se deja vacía, será aceptado cualquier tipo de archivo.';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'Los detalles de la tarea y el formato para envío estarán disponibles en <strong>{$a}</strong>';
$string['allowsubmissionsfromdate'] = 'a partir de';
$string['allowsubmissionsfromdate_import'] = 'Aprobación a partir de';
$string['allowsubmissionsfromdate_upload'] = 'Es posible subir a partir de';
$string['allowsubmissionsfromdateh'] = 'Horarios ara Subida/Aprobación';
$string['allowsubmissionsfromdateh_help'] = 'Usted puede determinar el período de tiempo durante el cual los estudiantes pueden subir archivos o dar su aprobación para la publicación del archivo. Durante este período de tiempo, los estudiantes pueden editar sus archivos y también pueden quitar su aprobación para publicación.';
$string['allowsubmissionsfromdatesummary'] = 'Esta Tarea aceptará envíos a partir de <strong>{$a}</strong>';
$string['alwaysshowdescription'] = 'Siempre  mostrar descripción';
$string['alwaysshowdescription_help'] = 'Si se deshabilita, la Descripción de la Tarea de arriba solamente estará visible para los estudiantes a partir de la fecha de "Permitir envíos a partir de".';
$string['approval_timeover'] = 'Usted solamente puede cambiar su aprobación durante el período_de_cambios.';
$string['approvalchange'] = 'Estado de aprobación cambiado';
$string['approved'] = 'Aprobado';
$string['approveusers'] = 'visible para todos';
$string['assignment'] = 'Tarea';
$string['assignment_help'] = 'Elija a tarea desde la cual importará archivos. En el momento, las tareas-grupales no están soportadas y por lo tanto, no son seleccionables.';
$string['assignment_notfound'] = 'La tarea desde la cual fueron importados los archivos, ya no pudo encontrarse.';
$string['assignment_notset'] = 'No se han elegido Tareas.';
$string['autoimport'] = 'Sincronizar automáticamente con Tarea';
$string['autoimport_help'] = 'Si se activa, los nuevos envío en la Tarea correspondiente serán importados automáticamente dentro del módulo de Carpeta del estudiante. (Opcional) Debe obtenerse aprobación-del-estudiante para los nuevos archivos.';
$string['availability'] = 'Horario para Subida/Aprobación';
$string['choose'] = 'elija por favor...';
$string['configautoimport'] = 'Si Usted prefiere que los envíos de los estudiantes sean importados automáticamente dentro de las instancias de carpeta del estudiante. Esta característica puede ser habilitada/deshabilitada para cada instancia de carpeta del estudiante en forma separada.';
$string['configmaxbytes'] = 'Tamaño máximo por defecto para todos los archivos en la carpeta del estudiante.';
$string['configmaxfiles'] = 'Número máximo por defecto de anexos permitidos por usuario.';
$string['configobtainstudentapproval'] = 'Los documentos son visibles después del consentimiento del estudiante.';
$string['configobtainteacherapproval'] = 'Los documento de los estudiantes por defecto son visibles para todos los otros participante.';
$string['configrequiremodintro'] = 'Deshabilite esta opción si no desea forzar a los usuarios a que escriban descripciones de cada actividad.';
$string['courseuploadlimit'] = 'Límite de subida del curso';
$string['currentlynotapproved'] = '* Actualmente no-aprobado o desaprobado.';
$string['cutoffdate'] = 'Fecha límite';
$string['cutoffdate_help'] = 'Si se configura, las tareas no aceptarán envíos después de esta fecha si no hubiera una extensión.';
$string['cutoffdate_import'] = 'Última aprobación hasta';
$string['cutoffdate_upload'] = 'Última posibilidad de Subida hasta';
$string['cutoffdatefromdatevalidation'] = 'La fecha de corte debe ser posterior a la fecha de "permitir envíos a partir de".';
$string['cutoffdatevalidation'] = 'La fecha de corte no puede ser antes de la fecha esperada.';
$string['details'] = 'Detalles';
$string['downloadall'] = 'Descargar todos los archivos como ZIP';
$string['duedate'] = 'a';
$string['duedate_help'] = 'Esta es la fecha para la cual es esperada la tarea. Se seguirán permitiendo los envíos después de esta fecha, pero todos los envíos posteriores a esta fecha serán marcados como tardíos. Para impedir los envíos después de una cierta fecha - configure la fecha_de_corte de la Tarea.';
$string['duedate_import'] = 'Probar para';
$string['duedate_upload'] = 'Es posible subir hasta';
$string['duedatevalidation'] = 'La fehca esperada debe ser despues de la fecha de "permitir envíos después de ".';
$string['edit_timeover'] = 'Los archivos solamente pueden ser editados dentro del período_de_cambios.';
$string['edit_uploads'] = 'subir/editar archivos';
$string['entiresperpage'] = 'Participantes mostrados por página';
$string['eventpublicationapprovalchanged'] = 'Aprobación de archivo de publicación cambiada';
$string['eventpublicationduedateextended'] = 'Fecha esperada de publicación  extendida';
$string['eventpublicationfiledeleted'] = 'Archivo de publicación eliminado';
$string['eventpublicationfileimported'] = 'Archivo de publicación importado';
$string['eventpublicationfileuploaded'] = 'Archivo de publicación subido';
$string['extensionduedate'] = 'Extensión de fecha esperada';
$string['extensionnotafterduedate'] = 'La extensión de fecha esperada debe ser después de la fecha esperada.';
$string['extensionnotafterfromdate'] = 'La extensión de fecha esperada debe ser después de la fecha a partir de la cual se permiten los envíos';
$string['extensionto'] = 'Extensión para';
$string['filedetails'] = 'Detalles';
$string['filesofthesetypes'] = 'Pueden añadirse archivos de estos tipos:';
$string['go'] = 'Ir';
$string['grantextension'] = 'otorgar extensión';
$string['groupapprovalmode'] = 'Modo aprobación_de_grupo';
$string['groupapprovalmode_all'] = 'TODOS los miembros del grupo deben de aprobar';
$string['groupapprovalmode_help'] = 'Aquí Usted decide si se necesita que aprueben todos los miembros del grupo o solamente con que apruebe un miembro del grupo es suficiente para que los archivos sean visibles. Los archivos solamente serán visibles después de la aprobación por todos los miembros del grupo o al menos por un miembro del grupo.';
$string['groupapprovalmode_single'] = 'al menos UNO de los miembros del grupo debe de aprobar';
$string['guideline'] = 'visible para todos:';
$string['hidden'] = 'oculto';
$string['importfrom_err'] = 'Usted tiene que elegir una tarea a partir de la cual desea importar.';
$string['maxbytes'] = 'Tamaño máximo de anexo';
$string['maxfiles'] = 'Número máximo de anexos';
$string['messageprovider:publication_updates'] = 'Notificaciones de publicación';
$string['mode'] = 'Modo';
$string['mode_help'] = 'Elija si es que los estudiantes pueden subir documentos en la carpeta de una tarea o documentos d una tarea de las que son orígenes.';
$string['modeimport'] = 'tomar documentos de una tarea';
$string['modeupload'] = 'los estudiantes pueden subir documentos';
$string['modulename'] = 'Carpeta del estudiante';
$string['modulenameplural'] = 'Carpetas de estudiantes';
$string['myfiles'] = 'Archivos propios';
$string['mygroupfiles'] = 'Mis archivos del grupo';
$string['name'] = 'Nombre de carpeta del estudiante';
$string['noentries'] = 'Sin entradas';
$string['nofiles'] = 'Sin archivos disponibles';
$string['nofilestozip'] = 'Sin archivos para comprimir en ZIP';
$string['nonexistentfiletypes'] = 'Los siguientes tipos de archivo no fueron reconocidos: {$a}';
$string['nopublicationsincourse'] = 'No hay instancias de carpeta de estudiante en este curso.';
$string['nothing_to_show_groups'] = 'nada para mostrar - sin grupos disponibles';
$string['nothing_to_show_users'] = 'nada para mostrar - sin estudiantes disponibles';
$string['nothingtodisplay'] = 'No hay entradas para mostrar';
$string['notice'] = 'Aviso:';
$string['notice_groupimportrequireallapproval'] = 'Decidir si es que los archivos están disponibles para todos. Todos los miembros del grupo tienen que dar su aprobación antes de que el archivo sea visible.';
$string['notice_groupimportrequireoneapproval'] = 'Decidir si es que sus archivos están disponibles para todos, La aprobación de solamente un miembro del grupo es suficiente para que el archivo sea visible. ¡Por favor, discuta internamente en el grupo si es que su archivo debería de ser visible o no antes de aprobarlo!';
$string['notice_importnoapproval'] = 'Los archivos siguientes son visibles para todos.';
$string['notice_importrequireapproval'] = 'Decidir si sus archivos son disponibles para todos.';
$string['notice_uploadnoapproval'] = 'Todos los archivos serán visibles inmediatamente para todos en cuanto sean subidos. El profesor se reserva el derecho de ocultar archivos publicados en cualquier momento.';
$string['notice_uploadrequireapproval'] = 'Todos los archivos subidos serán hechos visibles ssolamente después de la revisión pro el profesor.';
$string['notifications'] = 'Notificaciones';
$string['notifystudents'] = 'Notificar a estudiantes acerca de cambios de aprobación';
$string['notifystudents_help'] = 'Si se habilita, los estudiantes recibirán un mensaje cuando cambie el estado de aprobación de alguna de sus subidas. Los métodos del mensaje son configurables.';
$string['notifyteacher'] = 'Notificar a evaluadores acerca de subidas';
$string['notifyteacher_help'] = 'Si se habilita, los evaluadores (usualmente profesores) recibirán un mensaje cuando un estudiante suba un archivo, Los métodos del mensaje son configurables.';
$string['obtainstudentapproval'] = 'Obtener aprobación';
$string['obtainstudentapproval_help'] = 'Decida si se obtendrá aprobación por parte del estudiante: <br><ul><li> SI- los archivos serán visibles solamnte después de que el estudiante lo apruebe. El profesor puede seleccioanr estudiantes/archivos individuales a los cuales pedirles aprobación.</li><li> NO - No se obtendrá aprobación del estudiante mediante Moodle. La visibilidad del archivo es solamente la decisiónd el profesor.</li></ul>';
$string['obtainteacherapproval'] = 'Aprobado por defecto';
$string['obtainteacherapproval_help'] = 'Decida si es que los archivos serán hechos visibles inmediatamente al subirlos o no: <br><ul><li> SI- todos los archivos serán visibles para todos de inmediato</li><li> NO - los archivos serán publicados solamente después de la aprobación por el profesor</li></ul>';
$string['optionalsettings'] = 'Opciones';
$string['pending'] = 'Pendiente';
$string['pluginadministration'] = 'Administración de la carpeta del estudiante';
$string['pluginname'] = 'Carpeta del estudiante';
$string['privacy:metadata:approval'] = 'Si es que el miembro de grupo aprobó o rechazó el archivo.';
$string['privacy:metadata:contenthash'] = 'Hash SHA1 del contenido del archivo, usado para determinar si el archivo cambió.';
$string['privacy:metadata:extduedates'] = 'Almacena información acerca de fechas esperadas anuladas/extendidas para mod_publication.';
$string['privacy:metadata:extensionduedate'] = 'La fecha esperada efectiva para el usuario está siendo anulada/extendida.';
$string['privacy:metadata:fileid'] = 'Identificador del archivo.';
$string['privacy:metadata:filename'] = 'El nombre del archivo.';
$string['privacy:metadata:files'] = 'Almacena información (identificador, a quien pertenece, de donde viene, hash del contenido, nombre del archivo y si fue aprobado por profesor o estudiante) acerca de archivos subidos/importados dentro de mod_publication.';
$string['privacy:metadata:groupapproval'] = 'Almacena información acerca de aprobación o rechazo de archivos de miembros de grupo importados desde envíos de grupo.';
$string['privacy:metadata:publicationfileexplanation'] = 'Los archivos y los envíos de texto en línea convertidos por este plugin son almacenados vía API de archivo de Moodle.';
$string['privacy:metadata:publicationperpage'] = '¡Cuantas entradas deberían de mostrarse en una sola página de tabla!';
$string['privacy:metadata:studentapproval'] = 'Si es que el estudiante aprobó o rechazó el archivo.';
$string['privacy:metadata:teacherapproval'] = 'Si es que el profesor aprobó o rechazó el archivo.';
$string['privacy:metadata:timecreated'] = 'La hora y fecha de cuando fue creado el registro de datos.';
$string['privacy:metadata:timemodified'] = 'La hora y fecha más reciente de cuando fue actualizado/modificado el registro de datos.';
$string['privacy:metadata:type'] = 'Marca el origen del archivo (subido por estudiante, importado desde envío de tarea o texto_en_línea convertido desde envío de tarea).';
$string['privacy:metadata:userid'] = 'Identificador del usuario.';
$string['privacy:path:files'] = 'archivos';
$string['privacy:path:resources'] = 'recursos';
$string['privacy:type:import'] = 'archivo importado';
$string['privacy:type:onlinetext'] = 'texto_en_línea importado';
$string['privacy:type:upload'] = 'archivo subido';
$string['publication:addinstance'] = 'Añadir una nueva carpeta del estudiante';
$string['publication:approve'] = 'Decidir si es que los archivos son visible spara todos los estudiantes.';
$string['publication:grantextension'] = 'Otorgar extensión';
$string['publication:receiveteachernotification'] = 'Recibir notificaciones para profesores';
$string['publication:upload'] = 'Subir archivos a una carpeta de estudiante';
$string['publication:view'] = 'Ver carpeta del estudiante';
$string['publicfiles'] = 'Archivos públicos';
$string['published_aftercheck'] = 'no, solamente después de la aprobación por un profesor';
$string['published_immediately'] = 'si inmediatamente, sin necesitarse aprobación por un profesor';
$string['rejected'] = 'Rechazado';
$string['rejectusers'] = 'invisible para todos';
$string['requiremodintro'] = 'Requerir descripción de la actividad';
$string['reset'] = 'Revertir';
$string['reset_userdata'] = 'Todos los datos';
$string['resetstudentapproval'] = 'Reiniciar estatus';
$string['save_changes'] = 'Guardar cambios';
$string['saveapproval'] = 'guardar aprobación';
$string['savestudentapprovalwarning'] = '¿Está Usted seguro de querer guardar estos cambios? Una vez configurado Usted no podrá cambiar el estatus.';
$string['saveteacherapproval'] = 'guardar aprobación';
$string['search:activity'] = 'Carpeta de estudiante - información de actividad';
$string['show_details'] = 'Mostrar detalles';
$string['status'] = 'Estatus';
$string['status:approved'] = 'aprobado';
$string['status:approvednot'] = 'rechazado';
$string['student_approve'] = 'aprobar';
$string['student_approved'] = 'aprobada';
$string['student_pending'] = 'no visible (no aprobada)';
$string['student_reject'] = 'rechazar';
$string['student_rejected'] = 'rechazada';
$string['studentapproval'] = 'Estatus';
$string['teacher_approved'] = 'visible (aprobada)';
$string['teacher_pending'] = 'confirmación pendiente';
$string['teacher_rejected'] = 'rechazada';
$string['teacherapproval'] = 'Aprobación';
$string['teacherapproval_help'] = 'La decisión actual sobre archivos, visibles para todos los participantes: <br /><ul><li>Elegir... - aun no aprobado o desaprobado, aunque los archivos no son visibles.</li><li>Yes - aprobado, los archivos son visibles.</li><li>No - desaprobado, los archivos no son visibles.</li></ul>';
$string['total'] = 'total';
$string['updatefiles'] = 'Subir archivos';
$string['updatefileswarning'] = 'Los archivos de un estudiante individual dentro de la carpeta del estudiante serán actualizados con su envío de la tarea. Los archivos que ya eran visibles de los estudiantes también serán remplazados si fueran eliminados o refrescados. Las configuraciones del estudiante con respecto a visibilidad no serán cambiadas.';
$string['uploaded'] = 'Subido';
$string['visibility'] = 'visible para todos';
$string['visible'] = 'visible';
$string['visibleforstudents'] = 'visible para todos';
$string['visibleforstudents_no'] = 'Este archivo NO está visible a los estudiantes';
$string['visibleforstudents_yes'] = 'Los estudiantes SI pueden ver este archivo';
$string['warning_changefromobtainstudentapproval'] = 'Si Usted realiza este cambio, solamente Usted puede decidir cuales archivos son visibles para todos los estudiantes. A los estudiantes no se les pide su aprobación. Todos los archivos marcados como aprobados se volverán visibles para todos los estudiantes independientemente de la decisión de los estudiantes.';
$string['warning_changefromobtainteacherapproval'] = 'Después de arctivar esta configuración, todos los archivos subidos serán visibles para otros participantes. Todos los archivos subidos serán todos visibles.Usted puede hacer visibles manualmente archivos para ciertos estudiantes.';
$string['warning_changetoobtainstudentapproval'] = 'Si Usted realiza este cambio, a los estudiantes se les pedirá su aprobación para que todos los archivos sean marcados como visibles. Los archivos solamente serán visibles después de la aprobación por los estudiantes.';
$string['warning_changetoobtainteacherapproval'] = 'Deespués de desactivar esta opción los archivos subidos no serán visibles automáticamente para otros participantes. Usted tendrá que determinar cuales archivos serán visibles. Los archivos que ya eran visibles de volverán invisibles.';
$string['withselected'] = 'Con los seleccionados...';
$string['zipusers'] = 'Descargar como ZIP';
