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
 * Strings for component 'attendance', language 'es', version '4.1'.
 *
 * @package     attendance
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['Aacronym'] = 'FI';
$string['Afull'] = 'Falta injustificada';
$string['Eacronym'] = 'FJ';
$string['Efull'] = 'Falta justificada';
$string['Lacronym'] = 'R';
$string['Lfull'] = 'Retraso';
$string['Pacronym'] = 'P';
$string['Pfull'] = 'Presente';
$string['absenteereport'] = 'Informe de absentismo';
$string['acronym'] = 'Acrónimo';
$string['add'] = 'Añadir';
$string['addedrecip'] = 'Añadido {$a} nuevo destinatario';
$string['addedrecips'] = 'Añadidos {$a} nuevos destinatarios';
$string['addmultiplesessions'] = 'Varias sesiones';
$string['addsession'] = 'Añadir sesión';
$string['adduser'] = 'Añadir usuario';
$string['addwarning'] = 'Añadir aviso';
$string['all'] = 'Todas';
$string['allcourses'] = 'Todos los cursos';
$string['allowupdatestatus'] = 'Permitir a los estudiantes actualizar su asistencia';
$string['allowupdatestatus_desc'] = 'Si está marcado, los estudiantes podrán actualizar su asistencia a una sesión después de haberla informado ellos mismos.';
$string['allowupdatestatus_help'] = 'Si está marcado los estudiantes podrán actualizar su asistencia a una sesión después de haberla informado ellos mismos.';
$string['allpast'] = 'Hasta hoy';
$string['allsessions'] = 'Todas las sesiones';
$string['allsessionstotals'] = 'Totales para sesiones seleccionadas';
$string['attendance:addinstance'] = 'Añadir una nueva actividad de asistencia';
$string['attendance:canbelisted'] = 'Aparecer en la lista';
$string['attendance:changeattendances'] = 'Cambiar asistencias';
$string['attendance:changepreferences'] = 'Cambiar preferencias';
$string['attendance:export'] = 'Exportar Informes';
$string['attendance:import'] = 'Importar sesiones desde archivo (csv)';
$string['attendance:manageattendances'] = 'Gestionar asistencias';
$string['attendance:managetemporaryusers'] = 'Gestionar usuarios temporales';
$string['attendance:manualautomark'] = 'Permitir proceso de auto-marcado manual';
$string['attendance:takeattendances'] = 'Tomar asistencias';
$string['attendance:view'] = 'Ver asistencias';
$string['attendance:viewreports'] = 'Ver informes';
$string['attendance:viewsummaryreports'] = 'Ver informes de resumen de cursos';
$string['attendance:warningemails'] = 'Se puede suscribir a correos electrónicos con usuarios ausentes';
$string['attendance_already_submitted'] = 'Su asistencia ya ha sido registrada.';
$string['attendance_no_status'] = 'No se dispone de un estado válido; es posible que sea demasiado tarde para registrar la asistencia.';
$string['attendancedata'] = 'Datos de asistencia';
$string['attendancefile'] = 'Archivo de asistencia (formato csv)';
$string['attendancefile_help'] = 'El archivo debe ser un archivo CSV con una fila de encabezado y campos para identificar al usuario y la hora en que se registró la asistencia, por ejemplo (correo electrónico, tiempo de escaneo) o (nombre de usuario, tiempo)';
$string['attendancegrade'] = 'Puntuación Asistencia';
$string['attendancenotset'] = 'Debe indicar su asistencia';
$string['attendancenotstarted'] = 'La asistencia todavía no ha sido iniciada para este curso';
$string['attendancepercent'] = 'Porcentaje';
$string['attendancereport'] = 'Asistencia';
$string['attendanceslogged'] = 'Asistencia registradas';
$string['attendancestaken'] = 'Asistencia tomadas';
$string['attendancesuccess'] = 'Asistencia tomada con éxito';
$string['attendanceupdated'] = 'Asistencia actualizada con éxito';
$string['attendanceuserreport'] = 'Informe de asistencia';
$string['attforblockdirstillexists'] = 'el viejo directorio mod/attforblock todavía existe - debe eliminarlo antes de ejecutar esta actualización.';
$string['attrecords'] = 'Asistencias tomadas';
$string['autoassignstatus'] = 'Selecciona automáticamente el estado más alto disponible';
$string['autoassignstatus_help'] = 'Si se selecciona esta opción, a los estudiantes se les asignará automáticamente la calificación más alta disponible.';
$string['automark'] = 'Marcado automático';
$string['automark_help'] = 'Permite que el marcado se complete automáticamente.
Si la respuesta es "Sí", los alumnos se marcarán automáticamente en función de su primer acceso al curso.
Si la respuesta es "Establecer sin marcar al final de la sesión", a los estudiantes que no hayan marcado su asistencia se les asignará el estado de no seleccionado.';
$string['automarkall'] = 'Sí';
$string['automarkclose'] = 'Establecer sin marcar al final de la sesión';
$string['automarkingcomplete'] = 'Marcado automático completo';
$string['automarkingnotavailableyet'] = 'Esta sesión está utilizando auto-marcado al cierre de la sesión y la sesión todavía no ha terminado.';
$string['automarkingnotenabled'] = 'El marcado automático no está habilitado en esta sesión';
$string['automarktask'] = 'Consultar sesiones de asistencia que requieran registro automático';
$string['automarkuseempty'] = 'Gestión de disponibilidad de estado de marca automática';
$string['automarkuseempty_desc'] = 'Si está marcado, los elementos de estado que tienen una configuración "disponible para" vacía/sin configurar se permitirán durante la marcación automática';
$string['autorecorded'] = 'sistema registrado automáticamente';
$string['availability'] = 'Disponibilidad para auto-marcado';
$string['availability_help'] = 'Restringe la disponibilidad para este estado. <br> Si la opción limitado esta seleccionada entonces indica el número de minutos en el que este estado está disponible después del inicio de la sesión. Esto es aplicable cuando los estudiantes pueden marcar su propia asistencia.';
$string['availabilityalways'] = 'Siempre';
$string['availabilitylimitedtime'] = 'Tiempo limitado';
$string['availabilityno'] = 'No';
$string['availablebeforesession'] = 'Disponible antes del inicio de la sesión';
$string['availablebeforesession_help'] = 'Cuando los estudiantes están marcando su propia asistencia, permite elegir este estado antes de que empiece la sesión.';
$string['averageattendance'] = 'Asistencia media';
$string['averageattendancegraded'] = 'Asistencia media';
$string['backtoparticipants'] = 'Volver a la lista de participantes';
$string['below'] = 'Inferior {$a}%';
$string['calclose'] = 'Cerrar';
$string['calendarevent'] = 'Crear un evento de calendario por sesión';
$string['calendarevent_help'] = 'Si está habilitado, se creará un evento de calendario para esta sesión.
Si está deshabilitado, se eliminará cualquier evento de calendario existente para esta sesión.';
$string['caleventcreated'] = 'Evento del calendario para la sesión creado con éxito';
$string['caleventdeleted'] = 'Evento del calendario para la sesión eliminado con éxito';
$string['calmonths'] = 'Enero,Febrero,Marzo,Abril,Mayo,Junio,Julio,Agosto,Septiembre,Octubre,Noviembre,Diciembre';
$string['calshow'] = 'Seleccione fecha';
$string['calweekdays'] = 'Do,Lu,Ma,Mi,Ju,Vi,Sá';
$string['cannottakeforgroup'] = 'No puede tomar asistencia para el grupo"{$a}"';
$string['cannottakethisgroup'] = 'Usted no es miembro del grupo que está asociado a esta sesión, su asistencia no ha sido registrada.';
$string['cantaddstatus'] = 'Debe establecer un acrónimo y una descripción cuando añade un nuevo estado.';
$string['canthidestatus'] = 'Usted no puede ocultar este estado porque ya está en uso dentro de esta actividad de asistencia';
$string['categoryreport'] = 'Informe de la categoría del curso';
$string['changeattendance'] = 'Cambiar asistencia';
$string['changeduration'] = 'Cambiar duración';
$string['changesession'] = 'Cambiar Sesión';
$string['checkweekdays'] = 'Seleccione los días de la semana que se encuentren dentro del intervalo de fechas de sesión seleccionado.';
$string['closed'] = 'Esta sesión actualmente no está disponible para auto-marcado';
$string['column'] = 'columna';
$string['columnmap'] = 'Asignación de columnas';
$string['columnmap_help'] = 'Para cada uno de los campos presentados, seleccione la columna correspondiente en el archivo csv.';
$string['columns'] = 'columnas';
$string['commonsession'] = 'Todos los estudiantes';
$string['commonsessions'] = 'Todos los estudiantes';
$string['confirm'] = 'Confirmar';
$string['confirmcolumnmappings'] = 'Confirmar asignaciones de columnas';
$string['confirmdeletehiddensessions'] = '¿Está seguro de que quiere eliminar {$a->count} sesiones programadas antes de la fecha de inicio del curso ({$a->date})?';
$string['confirmdeleteuser'] = '¿Está seguro de que quiere eliminar al usuario \'{$a->fullname}\' ({$a->email})?<br/>Todos los registros de asistencia serán eliminados permanentemente.';
$string['copyfrom'] = 'Copiar asistencia desde';
$string['countofselected'] = 'Recuento de selección';
$string['course'] = 'Curso';
$string['coursemessage'] = 'Mensaje de los usuarios del curso';
$string['courseshortname'] = 'Nombre corto del curso';
$string['coursesummary'] = 'Informe del resumen del curso';
$string['createmultiplesessions'] = 'Crear varias sesiones';
$string['createmultiplesessions_help'] = 'Esta función permite crear sesiones múltiples en un sólo paso.
Las sesiones empiezan en la fecha de la sesión base y continúan hasta la fecha "Repetir hasta".

  * <strong>Repetir los</strong>: Seleccione los días de la semana en los que tendrá clase (por ejemplo, Lunes/Miércoles/Viernes)
  * <strong>Repetir cada</strong>: Permite ajustar la frecuencia. Si tendrá clase todas las semanas, seleccione 1; si tendrá clase cada dos semanas, seleccione 2; cada 3 semanas, seleccione 3, etc.
  * <strong>Repetir hasta</strong>: Seleccione el último día de clase (el último día que quiere registrar la asistencia).';
$string['createonesession'] = 'Crear una sesión para el curso';
$string['csvdelimiter'] = 'Delimitador CSV';
$string['currentlyselectedusers'] = 'Usuarios seleccionados';
$string['customexportfields'] = 'Exportar campos personalizados del perfil de usuario';
$string['customexportfields_help'] = 'Campos personalizados del perfil de usuario extras para exponer en la exportación del informe.';
$string['customfields'] = 'Campos de sesión personalizados';
$string['date'] = 'Fecha';
$string['days'] = 'Días';
$string['defaultdisplaymode'] = 'Visualización por defecto';
$string['defaults'] = 'Por Defecto';
$string['defaultsessionsettings'] = 'Opciones por defecto de las sesiones';
$string['defaultsessionsettings_help'] = 'Estas opciones definen los valores por defecto de todas las nuevas sesiones';
$string['defaultsettings'] = 'Opciones por defecto de asistencia';
$string['defaultsettings_help'] = 'Estas opciones definen los valores por defecto de todas las nuevas asistencias';
$string['defaultstatus'] = 'Conjunto de estados por defecto';
$string['defaultsubnet'] = 'Dirección de red predeterminada';
$string['defaultsubnet_help'] = 'El registro de asistencia se puede restringir a subredes particulares especificando una lista separada por comas de direcciones IP parciales o completas. Este será el valor predeterminado cuando se creen nuevas sesiones.';
$string['defaultview'] = 'Vista predeterminada al iniciar sesión';
$string['defaultview_desc'] = 'Vista predeterminada mostrada a los profesores en el primer acceso.';
$string['defaultwarnings'] = 'Conjunto de advertencias predeterminadas';
$string['defaultwarningsettings'] = 'Ajustes de advertencias predeterminadas';
$string['defaultwarningsettings_help'] = 'Estos ajustes definen los predeterminados para todas las nuevas advertencias';
$string['delete'] = 'Eliminar';
$string['deletecheckfull'] = '¿Está absolutamente seguro de que desea eliminar por completo el {$a}, incluidos todos los datos de usuario?';
$string['deletedgroup'] = 'El grupo asociado a esta sesión ha sido eliminado';
$string['deletehiddensessions'] = 'Eliminar todas las sesiones ocultas';
$string['deletelogs'] = 'Eliminar datos de asistencia';
$string['deleteselected'] = 'Eliminar selección';
$string['deletesession'] = 'Eliminar Sesión';
$string['deletesessions'] = 'Eliminar todas las sesiones';
$string['deleteuser'] = 'Borrar usuario';
$string['deletewarningconfirm'] = '¿Está seguro de que quiere eliminar este aviso?';
$string['deletingsession'] = 'Eliminando Sesión para el Curso/Asignatura';
$string['deletingstatus'] = 'Eliminando estado del curso';
$string['description'] = 'Descripción';
$string['display'] = 'Mostrar';
$string['displaymode'] = 'Modo de visualización';
$string['donotusepaging'] = 'No usar paginación';
$string['downloadexcel'] = 'Descargar en Formato Excel';
$string['downloadooo'] = 'Descargar en Formato OpenOffice';
$string['downloadtext'] = 'Descargar en Formato de Texto';
$string['duration'] = 'Duración';
$string['editsession'] = 'Editar Sesión';
$string['edituser'] = 'Editar usuario';
$string['emailcontent'] = 'Contenido del email';
$string['emailcontent_default'] = 'Hola %userfirstname%,
Su asistencia en %coursename% %attendancename% ha caído por debajo del %warningpercent% y actualmente es del %percent% - ¡esperamos que esté bien!

Para aprovechar al máximo este curso, debe mejorar su asistencia, póngase en contacto si necesita más ayuda.';
$string['emailcontent_help'] = 'Cuando un aviso es remitido al estudiante, se recoge el contenido de este campo. Se pueden usar las siguientes variables:
<ul>
<li>%coursename%</li>
<li>%userfirstname%</li>
<li>%userlastname%</li>
<li>%userid%</li>
<li>%warningpercent%</li>
<li>%attendancename%</li>
<li>%cmid%</li>
<li>%numtakensessions%</li>
<li>%points%</li>
<li>%maxpoints%</li>
<li>%percent%</li>
</ul>';
$string['emailsubject'] = 'Asunto del email';
$string['emailsubject_default'] = 'Advertencia de asistencia';
$string['emailsubject_help'] = 'Cuando se envía una advertencia a un estudiante, se toma el asunto del correo electrónico de este campo.';
$string['emailuser'] = 'Usuario de correo electrónico';
$string['emailuser_help'] = 'Si está activado, se enviará un aviso al estudiante.';
$string['emptyacronym'] = 'El campo acrónimo no puede estar vacío. El registro de estado no ha sido actualizado.';
$string['emptydescription'] = 'El campo descripción no puede estar vacío. El registro de estado no ha sido actualizado.';
$string['enablecalendar'] = 'Crear eventos de calendario';
$string['enablecalendar_desc'] = 'Si está habilitado, se creará un evento de calendario para cada sesión de asistencia. Después de cambiar esta configuración, debe ejecutar el informe de reinicio del calendario.';
$string['enablewarnings'] = 'Activar avisos';
$string['enablewarnings_desc'] = 'Esto permite definir un conjunto de advertencias para una asistencia y notificaciones por correo electrónico a los usuarios cuando la asistencia cae por debajo del umbral configurado. <br/><strong>ADVERTENCIA: Esta es una función nueva y no se ha probado exhaustivamente. Úselo bajo su propio riesgo y proporcione comentarios en los foros de Moodle si encuentra que funciona bien.</strong>';
$string['encoding'] = 'Codificación';
$string['encoding_help'] = 'Esto se refiere al tipo de codificación de código de barras utilizado en la tarjeta de identificación de los estudiantes. Los tipos típicos de esquemas de codificación de códigos de barras incluyen Code-39, Code-128 y UPC-A.';
$string['endofperiod'] = 'Fecha final';
$string['endtime'] = 'Hora de finalización';
$string['enrolmentend'] = 'La matriculación del usuario finaliza {$a}';
$string['enrolmentstart'] = 'La matriculación del usuario comienza {$a}';
$string['enrolmentsuspended'] = 'Matriculación suspendida';
$string['enterpassword'] = 'Introducir contraseña';
$string['error:coursehasnoattendance'] = 'El curso con el nombre corto {$a} no contiene actividades de Asistencia.';
$string['error:coursenotfound'] = 'No se encuentra ningún curso con el nombre corto {$a}.';
$string['error:qrcode'] = '¡Permitir que los estudiantes registren su propia asistencia debe estar habilitado para usar el código QR! Saltando';
$string['error:sessioncourseinvalid'] = '¡Un curso de sesión no es válido! Saltando';
$string['error:sessiondateinvalid'] = '¡La fecha de una sesión no es válida! Saltando';
$string['error:sessionendinvalid'] = '¡La hora de finalización de una sesión no es válida! Saltando';
$string['error:sessionstartinvalid'] = '¡La hora de inicio de una sesión no es válida! Saltando';
$string['error:statusnotfound'] = 'Usuario: {$a->extuser} tiene un valor de estado que no puede ser encontrado: {$a->status}';
$string['error:timenotreadable'] = 'Usuario: {$a->extuser} tiene un scantime que strtotime no pudo convertir: {$a->scantime}';
$string['error:userduplicate'] = 'El usuario {$a} se encontró dos veces en la importación. Por favor incluya solo un registro por usuario.';
$string['error:usernotfound'] = 'No se pudo encontrar un usuario con {$a->userfield} establecido en {$a->extuser} en este curso';
$string['errorgroupsnotselected'] = 'Elija uno o más grupos';
$string['errorinaddingsession'] = 'Error añadiendo Sesión';
$string['erroringeneratingsessions'] = 'Error generando sesión';
$string['eventdurationupdated'] = 'Duración de la sesión actualizada';
$string['eventreportviewed'] = 'Informe de asistencia visto';
$string['eventscreated'] = 'Eventos de calendario creados';
$string['eventsdeleted'] = 'Eliminar eventos de calendario';
$string['eventsessionadded'] = 'Sesión añadida';
$string['eventsessiondeleted'] = 'Sesión eliminada';
$string['eventsessionipshared'] = 'Conflicto de IP de automarcado de asistencia';
$string['eventsessionsimported'] = 'Sesiones importadas';
$string['eventsessionupdated'] = 'Sesión actualizada';
$string['eventstatusadded'] = 'Estado añadido';
$string['eventstatusupdated'] = 'Estado actualizado';
$string['eventstudentattendancesessionsupdated'] = 'Informe de sesión actualizado';
$string['eventstudentattendancesessionsviewed'] = 'Informe de sesión visto';
$string['eventtaken'] = 'Asistencia confirmada';
$string['eventtakenbystudent'] = 'Asistencia confirmada por el alumno';
$string['export'] = 'Exportar';
$string['extrarestrictions'] = 'Restricciones extra';
$string['formattexttype'] = 'Formateo';
$string['from'] = 'desde:';
$string['gradebookexplanation'] = 'Calificación en libro de calificaciones';
$string['gradebookexplanation_help'] = 'El módulo de asistencia muestra su calificación actual de asistencia basado en el número de puntos que ha conseguido hasta la fecha y el número de puntos que pudo haber obtenido hasta la fecha; no incluye periodos de clase futuros. En el libro de calificaciones, su asistencia está basada en su porcentaje actual de asistencia y el número de puntos que puede conseguir en la duración total del curso, incluyendo clases futuras. De este modo, su calificación de asistencia mostrado en el módulo de asistencia y en el libro de calificaciones puede no tener el mismo número de puntos pero sí el mismo porcentaje.

Por ejemplo, si ha conseguido 8 de 10 puntos a la fecha (80% de asistencia) y la asistencia por todo el curso es de 50 puntos, el módulo de asistencia mostrará 8/10 y el libro de calificaciones mostrará 40/50. No ha conseguido 40 puntos todavía pero 40 es el puntaje equivalente a su actual porcentaje de asistencia de 80%. El puntaje que ha obtenido en el módulo de asistencia no puede disminuir, ya que está basado en la asistencia al día de la fecha; de todos modos, el puntaje de asistencia mostrado en el libro de calificaciones puede aumentar o disminuir dependiendo en su asistencia futura, ya que está basado en la asistencia al curso entero.';
$string['graded'] = 'Sesiones calificadas';
$string['gridcolumns'] = 'Columnas de la grilla';
$string['group'] = 'Grupo';
$string['groups'] = 'Grupos';
$string['groupsession'] = 'Grupo de estudiantes';
$string['groupsessionsby'] = 'Sesiones de grupo por';
$string['hiddensessions'] = 'Sesiones ocultas';
$string['hiddensessions_help'] = 'Las sesiones se ocultan si se programan antes de la fecha de inicio del curso.

Puede utilizar esta función para ocultar sesiones anteriores en lugar de eliminarlas. Solo las sesiones visibles aparecerán en el libro de calificaciones.';
$string['hiddensessionsdeleted'] = 'Todas las sesiones ocultas han sido eliminadas';
$string['hideextrauserdetails'] = 'Ocultar detalles de usuario';
$string['hidensessiondetails'] = 'Ocultar detalles de la sesión';
$string['identifyby'] = 'Identificar estudiantes por';
$string['import'] = 'Importar';
$string['importfile'] = 'Importar fichero';
$string['importfile_help'] = 'Importar fichero';
$string['importsessions'] = 'Importar Sesiones';
$string['importstatus'] = 'Campo de estado';
$string['importstatus_help'] = 'Esto permite incluir un valor de estado en la importación, por ejemplo, valores como A, R o FJ';
$string['includeabsentee'] = 'Incluir sesión al calcular el informe de ausencia';
$string['includeabsentee_help'] = 'Si está marcada, esta sesión se incluirá en los cálculos del informe de ausencias.';
$string['includeall'] = 'Seleccionar todas las sesiones';
$string['includedescription'] = 'Incluir una descripción de la sesión';
$string['includenottaken'] = 'Incluir sesiones no registradas';
$string['includeqrcode'] = 'Incluir código QR';
$string['includeremarks'] = 'Incluir comentarios';
$string['incorrectpassword'] = 'Ha introducido una contraseña incorrecta y su asistencia no ha sido registrada, introduzca la contraseña correcta.';
$string['incorrectpasswordshort'] = 'Contraseña incorrecta, asistencia no registrada';
$string['indetail'] = 'En detalle...';
$string['indicator:cognitivedepth'] = 'Asistencia cognitiva';
$string['indicator:cognitivedepth_help'] = 'Este indicador se basa en la profundidad cognitiva alcanzada por el alumno en una actividad de Asistencia.';
$string['indicator:cognitivedepthdef'] = 'Asistencia cognitiva';
$string['indicator:cognitivedepthdef_help'] = 'El participante ha alcanzado este porcentaje del compromiso cognitivo ofrecido por la Asistencia durante este intervalo de análisis (Niveles = Sin vista, Vista)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'El participante ha alcanzado este porcentaje del compromiso cognitivo ofrecido por la asistencia durante este intervalo de análisis (Niveles = Sin vista, Vista)';
$string['indicator:socialbreadth_help'] = 'Este indicador se basa en la amplitud social alcanzada por el alumno en una actividad de asistencia.';
$string['indicator:socialbreadthdef'] = 'Asistencia social';
$string['indicator:socialbreadthdef_help'] = 'El participante ha alcanzado este porcentaje del compromiso social ofrecido por la Asistencia durante este intervalo de análisis (Niveles = Sin participación, Participante solo)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['invalidaction'] = 'Debe seleccionar una acción';
$string['invalidemails'] = 'Debe especificar las direcciones de las cuentas de usuario existentes, no se pudo encontrar: {$a}';
$string['invalidimportfile'] = 'El formato del fichero no es correcto.';
$string['invalidsessionenddate'] = 'Esta fecha no puede ser anterior a la fecha de la sesión';
$string['invalidsessionendtime'] = 'La hora de finalización debe ser mayor que la hora de comienzo';
$string['invalidstatus'] = 'Ha seleccionado un estado no válido, inténtelo de nuevo.';
$string['iptimemissing'] = 'Minutos inválidos para liberar';
$string['jumpto'] = 'Saltar a';
$string['keepsearching'] = 'Continuar buscando';
$string['lasttaken'] = 'Últimas asistencias registradas';
$string['manualtriggerauto'] = 'Activar manualmente el marcado automático';
$string['marksessionimportcsvhelp'] = 'Este formulario le permite cargar un archivo csv que contiene un identificador de usuario y un estado; el campo de estado puede ser el acrónimo de estado o la hora en que se registró la asistencia de ese usuario. Si se pasa un valor de tiempo, intentará asignar el valor de estado con la calificación más alta disponible en ese momento.';
$string['maxpossible'] = 'Máxima posible';
$string['maxpossible_help'] = 'Muestra la puntuación que cada usuario puede alcanzar si recibe los puntos máximos en cada sesión que aún no se ha realizado (pasado y futuro):
     <ul>
     <li> <strong> Puntos </strong>: puntos máximos que cada usuario puede alcanzar en todas las sesiones. </li>
     <li> <strong> Porcentaje </strong>: porcentaje máximo que cada usuario puede alcanzar en todas las sesiones. </li>
     </ul>';
$string['maxpossiblepercentage'] = 'Porcentaje máximo posible';
$string['maxpossiblepoints'] = 'Puntos máximos posibles';
$string['maxwarn'] = 'Número máximo de avisos por correo electrónico';
$string['maxwarn_help'] = 'El número máximo de veces que se debe enviar una advertencia (solo se envía una advertencia por sesión)';
$string['mergeuser'] = 'Unir usuario';
$string['messagedselecteduserfailed'] = 'Fallo al enviar un mensaje a uno o más usuarios. Por favor active el debugging para averiguar más.';
$string['mobilesessionfrom'] = 'Mostrar sesiones más antiguas que la última';
$string['mobilesessionfrom_help'] = 'Permite restringir la lista de sesiones al marcar en la aplicación; solo muestra las sesiones que comenzaron desde este valor';
$string['mobilesessionto'] = 'Mostrar próximas sesiones';
$string['mobilesessionto_help'] = 'Permite restringir la lista de sesiones para mostrar solo una pequeña cantidad de sesiones futuras.';
$string['mobilesettings'] = 'Configuración para app móvil';
$string['mobilesettings_help'] = 'Estas configuraciones controlan el comportamiento de la aplicación móvil de Moodle';
$string['modulename'] = 'Asistencia';
$string['modulename_help'] = 'El módulo de actividad de asistencia permite a un profesor tomar asistencia en clase y a los estudiantes ver su propio registro de asistencia.

El profesor puede crear múltiples sesiones y marcar el estado de asistencia como "Presente", "Ausente", "Retraso", o "Falta Justificada", o modificar dichos estados para que se ajusten a sus necesidades.

Los reportes están disponibles para toda la clase o individualmente por estudiante.';
$string['modulenameplural'] = 'Asistencias';
$string['months'] = 'Mensual';
$string['moreattendance'] = 'La asistencia ha sido completada correctamente para esta página';
$string['moveleft'] = 'Mover a la izquierda';
$string['moveright'] = 'Mover a la derecha';
$string['multisessionexpanded'] = 'Múltiples sesiones expandidas';
$string['multisessionexpanded_desc'] = 'Muestre la configuración de "Múltiples sesiones" como se expande de forma predeterminada al crear nuevas sesiones.';
$string['mustselectusers'] = 'Debe seleccionar algún usuario para poder exportar';
$string['name'] = 'Nombre';
$string['newdate'] = 'Nueva Fecha';
$string['newduration'] = 'Nueva duración';
$string['newstatusset'] = 'Nuevo conjunto de estados';
$string['noabsentstatusset'] = 'El conjunto de estados en uso no tiene un estado para usar cuando no se puntúa.';
$string['noattendanceusers'] = 'No es posible exportar ningún dato si no hay estudiantes matriculados en el curso.';
$string['noattforuser'] = 'No existen registros de asistencia para el usuario';
$string['noautomark'] = 'Desactivado';
$string['nocapabilitytotakethisattendance'] = 'Intentaste cambiar la asistencia de una sesión con el cmid: {$a} que no tienes permiso para modificar.';
$string['nodescription'] = 'Sesión de Clase Normal';
$string['noeventstoreset'] = 'No hay eventos de calendario que requieran una actualización.';
$string['nogroups'] = 'Esta actividad ha sido configurada para el uso de grupos, pero no existen grupos en el curso.';
$string['noguest'] = 'Los invitados no pueden ver la asistencia';
$string['noofdaysabsent'] = 'Nº de días de ausencia';
$string['noofdaysexcused'] = 'Nº de días con faltas justificadas';
$string['noofdayslate'] = 'Nº de días de retrasos';
$string['noofdayspresent'] = 'Nº de días de asistencia';
$string['nosessiondayselected'] = 'No se ha seleccionado día de Sesión';
$string['nosessionexists'] = 'No existen sesiones para este curso';
$string['nosessionsselected'] = 'No hay sesiones seleccionadas.';
$string['notfound'] = 'No se ha encontrado ninguna actividad de Asistencia en este curso';
$string['notifytask'] = 'Enviar avisos a los usuarios';
$string['notmember'] = 'No&nbsp;miembro';
$string['notset'] = 'no establecido';
$string['nounmarkedstatusset'] = 'No está configurado ningún estado sin marcar para esta sesión (id:{$a->sessionid}), para corregir esta actualización el <a href="{$a->url}">Conjunto de estados</a>';
$string['noupgradefromthisversion'] = 'El módulo de asistencia no puede actualizarse desde la versión de attforblock que tiene instalada. - por favor elimine attforblock o actualícelo a la última versión antes de instalar el nuevo módulo de asistencia';
$string['numsessions'] = 'Número de sesiones';
$string['numsessionstaken'] = 'Número de sesiones tomadas';
$string['olddate'] = 'Fecha Anterior';
$string['onactivitycompletion'] = 'Al finalizar la actividad';
$string['onlyselectedusers'] = 'Exportar usuarios seleccionados';
$string['overallsessions'] = 'Sobre todas las sesiones';
$string['overallsessions_help'] = 'Muestra estadísticas de todas las sesiones, incluidas las que aún no se han realizado (pasadas y futuras):
     <ul>
     <li><strong>Sesiones</strong>: número total de sesiones.</li>
     <li><strong>Puntos</strong>: puntos otorgados en base a las sesiones realizadas.</li>
     <li><strong>Porcentaje</strong>: porcentaje de puntos otorgados sobre el máximo de puntos posibles para todas las sesiones.</li>
     </ul>';
$string['oversessionstaken'] = 'Sesiones tomadas en exceso';
$string['oversessionstaken_help'] = 'Muestra las estadísticas de las sesiones en las que se ha tomado la asistencia:
     <ul>
     <li><strong>Sesiones</strong>: número de sesiones ya registradas.</li>
     <li><strong>Puntos</strong>: puntos otorgados en base a las sesiones registradas.</li>
     <li><strong>Porcentaje</strong>: porcentaje de puntos obtenidos sobre el máximo de puntos posibles de las sesiones registradas.</li>
     </ul>';
$string['pageof'] = 'Página {$a->page} de {$a->numpages}';
$string['participant'] = 'Participante';
$string['password'] = 'Contraseña';
$string['passwordgrp'] = 'Contraseña del estudiante';
$string['passwordgrp_help'] = 'Si se establece, los estudiantes deberán ingresar esta contraseña antes de que puedan establecer su propio estado de asistencia para la sesión. Si está vacío, no se requiere contraseña.';
$string['passwordheader'] = 'Use la contraseña indicada debajo para registrar su asistencia';
$string['passwordrequired'] = 'Debes indicar la contraseña antes de poder enviar tu asistencia';
$string['percentage'] = 'Porcentaje';
$string['percentageallsessions'] = 'Porcentaje sobre todas las sesiones';
$string['percentagesessionscompleted'] = 'Porcentaje sobre las sesiones completadas';
$string['pluginadministration'] = 'Administración de asistencia';
$string['pluginname'] = 'Asistencia';
$string['points'] = 'Puntuación';
$string['pointsallsessions'] = 'Puntos sobre todas las sesiones';
$string['pointssessionscompleted'] = 'Puntos sobre las sesiones completadas';
$string['preferences_desc'] = 'Los cambios en los conjuntos de estado afectarán las sesiones de asistencia existentes y pueden afectar la calificación.';
$string['preventsharederror'] = 'El registro automático se ha desactivado durante una sesión porque parece que este dispositivo se ha utilizado para registrar la asistencia de otro estudiante';
$string['preventsharedip'] = 'Evitar que los estudiantes compartan la dirección IP';
$string['preventsharedip_help'] = 'Evitar que los estudiantes usen el mismo dispositivo (identificado con la dirección IP) para registrar la asistencia de otros estudiantes.';
$string['preventsharediptime'] = 'Tiempo para permitir la reutilización de la dirección IP (minutos)';
$string['preventsharediptime_help'] = 'Permitir que una dirección IP se reutilice para asistir a esta sesión una vez transcurrido este tiempo.';
$string['preview'] = 'Vista previa del archivo';
$string['previewhtml'] = 'Vista previa del formato HTML';
$string['priorto'] = 'La fecha de la sesión es anterior a la fecha de inicio del curso ({$ a}) para que las nuevas sesiones programadas antes de esta fecha se oculten (no accesibles). Puede cambiar la fecha de inicio del curso en cualquier momento (consulte la configuración del curso) para tener acceso a las sesiones anteriores. <br> <br> Por favor cambie la fecha de la sesión o simplemente haga clic en el botón "Añadir sesión" de nuevo para confirmar.';
$string['privacy:metadata:attendancelog'] = '';
$string['privacy:metadata:attendancesessions'] = '';
$string['privacy:metadata:attendancewarningdone'] = '';
$string['privacy:metadata:duration'] = 'Duración de la sesión (en segundos)';
$string['privacy:metadata:groupid'] = '';
$string['privacy:metadata:ipaddress'] = 'Dirección IP desde donde se marcó la asistencia.';
$string['privacy:metadata:lasttaken'] = 'Sello de tiempo de cuando se tomó por última vez la asistencia a sesión.';
$string['privacy:metadata:lasttakenby'] = 'ID del último usuario en tomar asistencia en esta sesión.';
$string['privacy:metadata:notifyid'] = 'ID de la sesión de asistencia con la cual está asociada la advertencia.';
$string['privacy:metadata:remarks'] = 'Comentarios acerca de la asistencia del usuario.';
$string['privacy:metadata:sessdate'] = 'Sello de tiempo de cuando inicia la sesión.';
$string['privacy:metadata:sessionid'] = 'ID de la sesión de asistencia.';
$string['privacy:metadata:statusid'] = 'ID del estado de asistencia del estudiante.';
$string['privacy:metadata:statusset'] = 'Estado configurado a donde pertenece la ID del estado.';
$string['privacy:metadata:studentid'] = 'ID del estudiante a quien se le está grabando su asistencia.';
$string['privacy:metadata:takenby'] = 'ID del usuario del usuario que tomó asistencia para el estudiante.';
$string['privacy:metadata:timemodified'] = 'Sello de tiempo de cuando la sesión fue modificada por última vez.';
$string['privacy:metadata:timesent'] = 'Sello de tiempo de cuando se configuró la advertencia.';
$string['privacy:metadata:timetaken'] = 'Sello de tiempo de cuando fue tomada la asistencia para el estudiante.';
$string['privacy:metadata:userid'] = 'ID del usuario a quien enviar advertencia.';
$string['processingfile'] = 'Procesando archivo';
$string['qr_cookie_error'] = 'El QR de la sesión ha caducado';
$string['qr_pass_wrong'] = 'El QR de la contraseña es erróneo o ha caducado';
$string['qrcode'] = 'Código QR';
$string['qrcodeandpasswordheader'] = 'Escanee el código QR de debajo o use la contraseña indicada debajo para registrar su asistencia';
$string['qrcodeheader'] = 'Escanee el código QR de debajo para registrar su asistencia';
$string['qrcodevalidafter'] = 'segundos';
$string['qrcodevalidbefore'] = 'Código QR válido para:';
$string['randompassword'] = 'Contraseña aleatoria';
$string['remark'] = 'Comentario para: {$a}';
$string['remarks'] = 'Observaciones';
$string['repeatasfollows'] = 'Repetir la sesión como se indica a continuación';
$string['repeatevery'] = 'Repetir cada';
$string['repeaton'] = 'Repetir los';
$string['repeatuntil'] = 'Repetir hasta';
$string['report'] = 'Informe';
$string['reportsessiondate'] = 'Fecha de la sesión';
$string['reportsessionduration'] = 'Duración de la sesión';
$string['reportsessionlasttaken'] = 'Hora de la última sesión (profesor)';
$string['required'] = 'Obligatorio*';
$string['requiredentries'] = 'Los registros temporales sobrepasan los registros de asistencia de los participantes';
$string['requiredentry'] = 'Guía de ayuda de combinación temporal de usuarios';
$string['requiredentry_help'] = '<p align = "center"> <b> Asistencia </b> </p>
<p align = "left"> <strong> Combinar cuentas </strong> </p>
<p align = "left">
<table border = "2" cellpadding = "4">
<tr>
<th> Usuario de Moodle </th>
<th> Usuario temporal </th>
<th> Acción </th>
</tr>
<tr>
<td> Datos de asistencia </td>
<td> Datos de asistencia </td>
<td> El usuario temporal reemplazará al usuario de Moodle </td>
</tr>
<tr>
<td> No hay datos de asistencia </td>
<td> Datos de asistencia </td>
<td> La asistencia temporal al usuario se transferirá al usuario de Moodle </td>
</tr>
<tr>
<td> Datos de asistencia </td>
<td> No hay datos de asistencia </td>
<td> Se borrará el usuario temporal </td>
</tr>
<tr>
<td> No hay datos de asistencia </td>
<td> No hay datos de asistencia </td>
<td> Se borrará el usuario temporal </td>
</tr>
</table>

</p>
<p align = "left"> <strong> El usuario temporal se eliminará en todos los casos después de la acción de combinación </strong> </p>';
$string['requiresubnet'] = 'Se requiere dirección de red';
$string['requiresubnet_help'] = 'La grabación de asistencia puede restringirse a determinadas subredes especificando una lista separada por comas de direcciones IP parciales o completas.';
$string['resetcaledarcreate'] = 'Los eventos del calendario han sido habilitados pero algunas sesiones existentes no tienen eventos. ¿Quiere crear eventos de calendario para todas las sesiones existentes?';
$string['resetcaledardelete'] = 'Los eventos del calendario han sido deshabilitados pero algunas sesiones existentes tienen eventos que deberían ser borrados. ¿Quiere borrar todos los eventos existentes?';
$string['resetcalendar'] = 'Resetear calendario';
$string['resetdescription'] = 'Recuerde que eliminando los datos de la asistencia provocará el borrado de información en la base de datos. Usted puede ocultar sesiones anteriores cambiando la fecha de inicio del curso en la zona de administración.';
$string['resetstatuses'] = 'Reinicar la configuración por defecto';
$string['restoredefaults'] = 'Restarurar valores por defecto';
$string['resultsperpage'] = 'Resultados por página';
$string['resultsperpage_desc'] = 'Número de estudiantes mostrados por página';
$string['rotateqrcode'] = 'Rotar código QR';
$string['rotateqrcode_cleartemppass_task'] = 'Tarea para borrar las contraseñas temporales generadas por la funcionalidad de rotación de código QR.';
$string['rotateqrcodeexpirymargin'] = 'Margen de caducidad para la rotación código QR / contraseña (segundos)';
$string['rotateqrcodeexpirymargin_desc'] = 'Intervalo de tiempo (segundos) para permitir códigos QR / contraseñas caducados';
$string['rotateqrcodeinterval'] = 'Intervalo de rotación de código QR / contraseña (segundos)';
$string['rotateqrcodeinterval_desc'] = 'Intervalo de tiempo (segundos) para rotar el código QR/contraseña';
$string['save'] = 'Guardar asistencia';
$string['saveandshownext'] = 'Guardar y mostrar página siguiente';
$string['scantime'] = 'Tiempo de escaneo';
$string['scantime_help'] = 'Esto permite incluir una marca de tiempo en el archivo de importación: intentará convertir la marca de tiempo pasado usando la función PHP strtotime y luego usará la configuración del estado de asistencia para decidir qué estado establecer para el usuario';
$string['search:activity'] = 'Asistencia - Información de la actividad';
$string['selectactivity'] = 'Seleccionar actividad';
$string['session'] = 'Sesión';
$string['session_help'] = 'Sesión';
$string['sessionadded'] = 'Sesión añadida con éxito';
$string['sessionalreadyexists'] = 'Ya existe una sesión para la fecha indicada';
$string['sessiondate'] = 'Fecha';
$string['sessiondays'] = 'Días de Sesión';
$string['sessiondeleted'] = 'Sesión eliminada con éxito';
$string['sessiondescription'] = 'Descripción de la sesión';
$string['sessionduplicate'] = 'Existe una sesión duplicada en el curso: {$a->course} en asistencia: {$a->activity}, {$a->date}';
$string['sessionexist'] = 'Sesión no añadida (ya existe)';
$string['sessiongenerated'] = 'Una sesión fue generada correctamente';
$string['sessions'] = 'Sesiones';
$string['sessionsallcourses'] = 'Todos los cursos';
$string['sessionsbyactivity'] = 'instancia de asistencia';
$string['sessionsbycourse'] = 'Curso';
$string['sessionsbydate'] = 'Semana';
$string['sessionscompleted'] = 'Sesiones registradas';
$string['sessionscurrentcourses'] = 'Cursos actuales';
$string['sessionsgenerated'] = '{$a} sesiones fueron generadas con éxito';
$string['sessionsids'] = 'IDs de las sesiones:';
$string['sessionsnotfound'] = 'No hay sesiones en el rango de tiempo seleccionado';
$string['sessionstartdate'] = 'Fecha de Inicio de la Sesión';
$string['sessionstotal'] = 'Número total de sesiones';
$string['sessionsupdated'] = 'Sesiones actualizadas';
$string['sessiontype'] = 'Tipo';
$string['sessiontype_help'] = 'Puede agregar sesiones para todos los estudiantes o para un grupo de estudiantes. La capacidad de agregar diferentes tipos depende del modo de grupo de la actividad.

* En el modo de grupo "Sin grupos" puede agregar solo sesiones para todos los estudiantes.
* En el modo de grupo "Separar grupos" puede agregar solo sesiones para un grupo de estudiantes.
* En el modo de grupo "Grupos visibles" puedes agregar ambos tipos de sesiones.';
$string['sessiontypeshort'] = 'Tipo';
$string['sessionunknowngroup'] = 'Una sesión especifica grupo(s) desconocido(s): {$a}';
$string['sessionupdated'] = 'Sesión actualizada con éxito';
$string['set_by_student'] = 'Autograbado';
$string['setallstatuses'] = 'Actualizar estado para';
$string['setallstatusesto'] = 'Actualizar estado a «{$a}»';
$string['setperiod'] = 'Tiempo especificado en minutos para liberar IP';
$string['settings'] = 'Configuración';
$string['setunmarked'] = 'Se establece automáticamente cuando no está marcado';
$string['setunmarked_help'] = 'Si está habilitado en la sesión, establezca este estado si un estudiante no ha marcado su propia asistencia.';
$string['showdefaults'] = 'Mostrar opciones por defecto';
$string['showduration'] = 'Mostrar duración';
$string['showextrauserdetails'] = 'Mostrar detalles de usuario';
$string['showqrcode'] = 'Mostrar código QR';
$string['showsessiondescriptiononreport'] = 'Mostrar descripción de la sesión en el informe';
$string['showsessiondescriptiononreport_desc'] = 'Muestre la descripción de la sesión en la lista del informe de asistencia.';
$string['showsessiondetails'] = 'Mostrar detalles de la sesión';
$string['somedisabledstatus'] = '(Algunas opciones se han eliminado cuando comenzó la sesión).';
$string['sortedgrid'] = 'Grilla alfabética';
$string['sortedlist'] = 'Lista alfabética';
$string['startofperiod'] = 'Fecha de comienzo';
$string['starttime'] = 'Hora de comienzo';
$string['status'] = 'Estado';
$string['statusall'] = 'todos';
$string['statusdeleted'] = 'Estado eliminado';
$string['statuses'] = 'Estados';
$string['statusset'] = 'Estado establecido {$a}';
$string['statussetsettings'] = 'Conjunto de estados';
$string['statustotalcount'] = 'Estado {$a} - Recuento total';
$string['statustotalcountcurrentweek'] = 'Estado {$a} - Recuento total para la semana actual';
$string['statustotalcountpreviousweek'] = 'Estado {$a} - Recuento total para la semana anterior';
$string['statusunselected'] = 'no seleccionado';
$string['strftimedm'] = '%b %d';
$string['strftimedmw'] = '<nobr>%a %b %d</nobr>';
$string['strftimedmy'] = '%d %b %Y';
$string['strftimedmyhm'] = '%d %b %Y %I.%M%p';
$string['strftimedmyw'] = '<nobr>%a %d %b %Y</nobr>';
$string['strftimeh'] = '%I%p';
$string['strftimehm'] = '%I:%M%p';
$string['strftimeshortdate'] = '%d.%m.%Y';
$string['studentid'] = 'ID de estudiante';
$string['studentmarked'] = 'Tu asistencia en esta sesión ha sido guardada.';
$string['studentmarking'] = 'Grabación del estudiante';
$string['studentpassword'] = 'Contraseña del estudiante';
$string['studentrecordingexpanded'] = 'Grabación del estudiante expandida';
$string['studentrecordingexpanded_desc'] = 'Mostrar las configuraciones de "Grabación del estudiante" como expandidas por defecto al crear sesiones nuevas.';
$string['studentscanmark'] = 'Permitir a los estudiantes registrar su propia asistencia';
$string['studentscanmark_desc'] = 'Si se marca, los profesores podrán permitir que los estudiantes marquen su propia asistencia.';
$string['studentscanmark_help'] = 'Si se marca, los estudiantes podrán registrar su propia asistencia a la sesión.';
$string['studentscanmarksessiontime'] = 'Los estudiantes registran la asistencia durante el tiempo de la sesión.';
$string['studentscanmarksessiontime_desc'] = 'Si está marcado, los estudiantes solo pueden registrar su asistencia durante la sesión.';
$string['studentscanmarksessiontimeend'] = 'Fin de sesión (minutos)';
$string['studentscanmarksessiontimeend_desc'] = 'Si la sesión no tiene una hora de finalización, ¿cuántos minutos debe estar disponible la sesión para que los estudiantes registren su asistencia?';
$string['studentsearlyopentime'] = 'Abrir sesión temprano para marcar';
$string['studentsearlyopentime_help'] = 'Esto permite a los profesores abrir la sesión temprano, permitiendo registrar la asistencia antes de la hora real de inicio.';
$string['submit'] = 'Entregar';
$string['submitattendance'] = 'Enviar asistencia';
$string['submitattendancefuture'] = 'Informar ausencia futura';
$string['submitpassword'] = 'Enviar contraseña';
$string['subnet'] = 'subred';
$string['subnetactivitylevel'] = 'Permitir configuración de subred en el nivel de actividad';
$string['subnetactivitylevel_desc'] = 'Si está habilitado, los profesores pueden anular la subred predeterminada en el nivel de actividad al crear una asistencia. De lo contrario, se utilizará el valor predeterminado del sitio al crear una sesión.';
$string['subnetwrong'] = 'La asistencia sólo se puede grabar desde ciertas ubicaciones, y este equipo no está en la lista permitida.';
$string['summary'] = 'Resumen';
$string['tablerenamefailed'] = 'Ha fallado el cambio de nombre de la tabla del viejo attforblock a asistencia';
$string['tactions'] = 'Acción';
$string['takeattendance'] = 'Iniciar Asistencia';
$string['takensessions'] = 'Sesiones tomadas';
$string['tcreated'] = 'Creado';
$string['tempaddform'] = 'Agregar usuario temporal';
$string['tempexists'] = 'Ya hay un usuario temporal con esta dirección de correo electrónico';
$string['temptable'] = 'Lista de usuarios temporales';
$string['tempuser'] = 'Usuario temporal';
$string['tempusermerge'] = 'Combinar usuario temporal';
$string['tempusers'] = 'Usuarios temporales';
$string['tempusersedit'] = 'Editar usuario temporal';
$string['tempuserslist'] = 'Usuarios temporales';
$string['thirdpartyemails'] = 'Notificar a otros usuarios';
$string['thirdpartyemails_help'] = 'Lista de otros usuarios que serán notificados. (requiere la capacidad mod/attendance:viewreports)';
$string['thirdpartyemailsubject'] = 'Advertencia de asistencia';
$string['thirdpartyemailtext'] = '{$a->firstname} {$a->lastname} asistencia dentro de {$a->course name} {$a->name} es inferior al {$a->warning percent} ({$a->percent} )';
$string['thirdpartyemailtextfooter'] = 'Estás recibiendo esto porque el profesor de este curso ha añadido tu correo electrónico a la lista de destinatarios';
$string['thiscourse'] = 'Este curso';
$string['time'] = 'Tiempo';
$string['timeahead'] = 'No se pueden crear sesiones múltiples que superen un año. Ajuste las fechas de inicio y finalización.';
$string['timemodified'] = 'Hora modificada';
$string['timetaken'] = 'Hora de asistencia registrada';
$string['to'] = 'a:';
$string['todate'] = 'hasta la fecha';
$string['totalnumsessions'] = 'Número total de sesiones';
$string['triggered'] = 'Primero notificado';
$string['tuseremail'] = 'Correo';
$string['tusername'] = 'Nombre completo';
$string['ungraded'] = 'Sesiones sin calificar';
$string['unknowngroup'] = 'Grupo desconocido';
$string['unknownstatus'] = 'ID de estado desconocido: {$a}';
$string['update'] = 'Actualizar';
$string['updateattendance'] = 'Asistencia actualizada';
$string['uploadattendance'] = 'Subir asistencia por CSV';
$string['usedefaultsubnet'] = 'Uso por defecto';
$string['usemessageform'] = 'o utilice el siguiente formulario para enviar un mensaje a los estudiantes seleccionados';
$string['userexistingstatus'] = 'Su asistencia ya ha sido marcada como: <strong>{$a}</strong>, use el formato inferior para cambiarla si lo necesitara.';
$string['userexists'] = 'Ya hay un usuario real con esta dirección de correo electrónico';
$string['userid'] = 'Identificación de usuario';
$string['userimportfield'] = 'Campo de usuario externo';
$string['userimportfield_help'] = 'Campo del archivo CSV cargado que contiene el identificador de usuario';
$string['userimportto'] = 'Campo de usuario de Moodle';
$string['userimportto_help'] = 'Campo de Moodle que coincide con los datos de la exportación CSV';
$string['users'] = 'Usuarios para exportar';
$string['usersessiongrade'] = 'Calificación de la sesión del usuario';
$string['usersessionremarks'] = 'Comentarios de la sesión del usuario';
$string['usersessiontaken'] = 'Sesión del usuario registrada';
$string['userstatus'] = 'Estado de la sesión del usuario';
$string['usestatusset'] = 'Estado establecido';
$string['variable'] = 'variable';
$string['variablesupdated'] = 'Variables actualizadas con éxito';
$string['versionforprinting'] = 'versión para Imprimir';
$string['viewmode'] = 'Visualización';
$string['warnafter'] = 'Número de sesiones tomadas antes de la advertencia';
$string['warnafter_help'] = 'Las advertencias solo se activarán cuando se haya tomado la asistencia del usuario durante al menos este número de sesiones.';
$string['warningdeleted'] = 'Aviso borrado';
$string['warningdesc'] = 'Estas advertencias se agregarán automáticamente a cualquier nueva actividad de asistencia. Si se activa más de una advertencia exactamente al mismo tiempo, solo se enviará la advertencia con el umbral de advertencia más bajo.';
$string['warningdesc_course'] = 'Los umbrales de advertencia establecidos aquí afectan el informe de ausencia y permiten que los estudiantes y terceros sean notificados. Si se activa más de una advertencia exactamente al mismo tiempo, solo se enviará la advertencia con el umbral de advertencia más bajo';
$string['warningfailed'] = 'No puede crear una advertencia que utilice el mismo porcentaje y número de sesiones.';
$string['warningpercent'] = 'Avisar si el porcentaje cae por debajo';
$string['warningpercent_help'] = 'Se activará una advertencia cuando el porcentaje general caiga por debajo de este número.';
$string['warnings'] = 'Conjunto de advertencias';
$string['warningthreshold'] = 'Umbral de advertencia';
$string['warningupdated'] = 'Avisos actualizados';
$string['week'] = 'semana(s)';
$string['weekcommencing'] = 'semana que empieza';
$string['weeks'] = 'Semanal';
$string['youcantdo'] = 'Usted no puede hacer nada';
