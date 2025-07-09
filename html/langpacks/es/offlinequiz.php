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
 * Strings for component 'offlinequiz', language 'es', version '4.4'.
 *
 * @package     offlinequiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add'] = 'Añadir';
$string['addarandomquestion'] = 'pregunta al azar';
$string['addarandomquestion_help'] = 'Moodle agrega una selección aleatoria de preguntas de opción múltiple (o preguntas de todo o nada) al actual Grupo de prueba fuera de línea. Puede establecer el número de preguntas añadido. Las preguntas se eligen de la categoría actual de la cuestión (y si, sus subcategorías).';
$string['addarandomselectedquestion'] = 'Añadir una pregunta seleccionada al azar...';
$string['addlist'] = 'Añadir lista de asistencia';
$string['addnewpagesafterselected'] = 'Añadir saltos de página después de las preguntas seleccionadas';
$string['addnewquestion'] = 'una nueva pregunta';
$string['addnewquestionsqbank'] = 'Añadir preguntas a la categoría  {$a->catname}: {$a->link}';
$string['addnewuseroverride'] = 'Añadir usuario rebase';
$string['addpagebreak'] = 'Añadir salto de página';
$string['addpagehere'] = 'Agregar página aquí';
$string['addparts'] = 'Añadir participantes';
$string['addquestionfrombankatend'] = 'Añadir desde el banco de preguntas al final';
$string['addquestionfrombanktopage'] = 'Añadir desde el banco de preguntas a la página {$a}';
$string['addrandom'] = 'Al azar agregar {$a} pregunta/s de elección múltiple/s';
$string['addrandomfromcategory'] = 'preguntas al azar';
$string['addrandomquestion'] = 'preguntas al azar';
$string['addrandomquestiontoofflinequiz'] = 'Añadiendo preguntas a prueba fuera de línea {$a->name} (group {$a->group})';
$string['addrandomquestiontopage'] = 'Añadir una pregunta aleatoria a la página {$a}';
$string['addtoofflinequiz'] = 'Añadir a prueba fuera de línea';
$string['addtoqueue'] = 'Agregar a cola de';
$string['allinone'] = 'Ilimitado';
$string['alllists'] = 'Todas las listas de';
$string['allornothing'] = 'Todo o nada';
$string['allresults'] = 'Mostrar todos los resultados';
$string['allstudents'] = 'Mostrar todos los estudiantes';
$string['alwaysavailable'] = 'Siempre disponible';
$string['analysis'] = 'Análisis de artículo';
$string['answerform'] = 'Formulario de respuestas';
$string['answerformforgroup'] = 'Formulario de respuesta para grupo {$a}';
$string['answerforms'] = 'Formas de respuestas';
$string['answerpdfxy'] = 'Formulario de respuestas  ({$a}->maxquestions questions / {$a}->maxanswers options)';
$string['areyousureremoveselected'] = '¿Está seguro que desea eliminar todas las preguntas?';
$string['attemptexists'] = 'Existe tentativa';
$string['attemptsexist'] = 'Ya no puede Agregar o quitar preguntas.';
$string['attemptsnum'] = 'Resultados: {$a}';
$string['attemptsonly'] = 'Muestra los estudiantes con resultados';
$string['attendanceoverview'] = 'Lista de asistentes';
$string['attendances'] = 'Asistencias';
$string['attendancesevaluationheadline'] = '2. Evaluación';
$string['attendancesheadline'] = 'Asistentes';
$string['attendancespreparationheadline'] = '1. Preparación';
$string['attendenceoverviewattwithoutresults'] = 'Presentes sin resultados:';
$string['attendenceoverviewattwithresults'] = 'Presentes con resultados:';
$string['attendenceoverviewcorrectionnecessary'] = 'Corrección necesaria (páginas):';
$string['attendenceoverviewnoattwithoutresults'] = 'Ausente sin resultados:';
$string['attendenceoverviewnoattwithresults'] = 'Ausente con resultados:';
$string['backtopreview'] = 'Mostrar Previsualización';
$string['basicideasofofflinequiz'] = 'Las ideas básicas para hacer cuestionarios offline';
$string['blackwhitethreshold'] = 'Umbral negro/blanco';
$string['bulksavegrades'] = 'Guardar las Calificaciones';
$string['calibratescanner'] = 'Calibrar el Escáner';
$string['cannoteditafterattempts'] = 'No puede añadir o eliminar preguntas porque ya hay resultados completados. ({$a})';
$string['category'] = 'Categoría';
$string['changed'] = 'Los resultados se han modificado.';
$string['changeevaluationmode'] = 'Cambia la forma en la que se realiza la evaluación. Sólo es posible si está permitido por el administrador.';
$string['checkparts'] = 'Marca los participantes seleccionados como presentes';
$string['checkuserid'] = 'Comprobar ID del Grupo/Usuario';
$string['chooseagroup'] = 'Elija un grupo...';
$string['closebeforeopen'] = 'No se ha podido actualizar el cuestionario sin conexión. Se ha especificado una fecha de cierre previa a la fecha de apertura.';
$string['closestudentview'] = 'Cerrar vista del estudiante';
$string['closewindow'] = 'Cerrar ventana';
$string['cmmissing'] = 'No se encuentra el módulo del curso con ID {$a} para el cuestionario offline';
$string['completiondetail:passgrade'] = 'Recibir una calificación de aprobado';
$string['completionpass'] = 'Aprobar para completar';
$string['completionpass_help'] = 'Los estudiantes solo completan este cuestionario offline si obtienen una calificación superior o igual a la calificación para aprobar establecida en las opciones de calificación';
$string['configblackwhitethreshold'] = 'Establece el umbral para la conversión de blanco/negro entre 1 y 99. Cuanto mayor sea el valor, mayor será el blanco que debe tener el píxel importado para que se reconozca como blanco. Cualquier otro valor no implica ninguna conversión de blanco y negro.';
$string['configdecimalplaces'] = 'Número de dígitos decimales a mostrar a la hora de mostrar las calificaciones para el cuestionario offline.';
$string['configdisableimgnewlines'] = 'Esta opción deshabilita los saltos de línea antes y después de las imágenes en el pdf de la hoja de preguntas.
Atención: Esto puede causar problemas de formato.';
$string['configexperimentalevaluation'] = 'Evaluación experimental de las hojas de respuesta';
$string['configexperimentalevaluationdesc'] = '¡NO USAR EN PRODUCCIÓN! Esta opción se usa para pruebas alfa del nuevo algoritmo de evaluación. Si en esta opción se elige "sí", usted puede usar las opciones de la instancia de offlinequiz. No le recomendamos usar esta opción en absoluto. No hay soporte para los datos perdidos en caso de usarla.';
$string['configintro'] = 'Los valores que has especificado son usados como valores por defecto para los nuevos cuestionarios sin conexión.';
$string['configkeepfilesfordays'] = 'Establecer cuántos días se mantendrán los ficheros de imagen cargados al servidor en almacenamiento temporal. Durante este plazo, los ficheros de imagen estarán disponibles en el informe para administradores de cuestionarios offline.';
$string['configonlylocalcategories'] = 'No se permiten categorías de preguntas compartidas.';
$string['configpapergray'] = 'Valor de blanco del papel, que es usado para la evaluación de las hojas de respuesta.';
$string['configshuffleanswers'] = 'Barajar respuestas';
$string['configshufflequestions'] = 'Si habilita esta opción, el orden de las preguntas en los cuestionarios offline de los grupos será mezclado aleatoriamente cada vez que usted genere una vista previa en la pestaña "Crear formularios".';
$string['configshufflewithin'] = 'Si habilita esta opción, las opciones que componen las preguntas individuales serán barajadas aleatoriamente cuando los formularios de pregunta y de respuesta son creados.';
$string['configuseridentification'] = 'Una fórmula que describe la identificación del usuario. Esta fórmula se usa para asignar formularios de respuesta a usuarios en el sistema. La parte izquierda de la ecuación define el número de dígitos (sólo números enteros, hasta 10 dígitos). La parte derecha de la ecuación debe denotar un campo en la tabla de usuario de Moodle (ej., ID, nº ID, teléfono).
Además, la ecuación puede considerar prefijo y sufijo que se añada a los dígitos marcados (ej. "a[7]=username" or "b[5]cd=username"). Estas concatenaciones de cadenas y números denotan el valor del campo usado en la tabla del usuario que se usa para la identificación.';
$string['confirmremovequestion'] = '¿Seguro que quieres eliminar esta pregunta de tipo {$a}?';
$string['copy'] = 'Copiar';
$string['copyright'] = '<strong>Atención: los textos de esta página son sólo para su uso personal. Como otros textos en estas preguntas están bajo restricciones de copyright. ¡No tiene permiso para copiarlos o mostrarlos a otras personas!</strong>';
$string['copyselectedtogroup'] = 'Añadir las preguntas seleccionadas al grupo {$a}';
$string['copytogroup'] = 'Añadir todas las preguntas al cuestionario {$a}';
$string['correct'] = 'corregir';
$string['correcterror'] = 'resolver';
$string['correctforgroup'] = 'Respuestas correctas para el grupo {$a}';
$string['correctheader'] = 'Necesitan revisión:';
$string['correctionerrors'] = 'Formularios con corrección de errores:';
$string['correctionform'] = 'Corrección';
$string['correctionforms'] = 'Formularios de corrección';
$string['correctionheader'] = 'Corrección';
$string['correctionheader_help'] = '<p>Las hojas de respuestas mostradas aquí necesitan su atención y deben corregirse manualmente. No es posible su evaluación automática..</p>
<u>Pueden ocurrir los siguientes errores:</u>
<ul>
  <li><strong>Marcas imprecisas:</strong> Algunas marcas no pudieron interpretarse.</li>
  <li><strong>Número de grupo no válido:</strong> No se pudo interpretar el número de grupo.</li>
  <li><strong>Número de página no válido:</strong> No se pudo interpretar el número de página.</li>
  <li><strong>No ajustado:</strong> La hoja de respuestas estaba torcida y no se pudo interpretar.</li>
  <li><strong>Existen otros resultados:</strong> Ya hay otro resultado evaluado con otro número de grupo.</li>
  <li><strong>Páginas incompletas:</strong> Aunque se ha evaluado esta hoja, hay al menos otra que falta para terminar de evaluar a este participante. (Sólo sucede con formularios de varias hojas.)</li>
  <li><strong>Existe el resultado:</strong> Ya hay un resultado evaluado.</li>
  <li><strong>Usuario no matriculado:</strong> El usuario identificado no está matriculado en el curso actualmente.</li>
  <li><strong>El usuario no existe:</strong> No se conoce al participante.</li>
</ul>';
$string['correctionoptionsheading'] = 'Opciones de corrección';
$string['correctupdated'] = 'Formulario de corrección actualizado para el grupo {$a}.';
$string['couldnotgrab'] = 'No se pudo seleccionar la imagen {$a}';
$string['couldnotregister'] = 'No se pudo registrar el usuario {$a}';
$string['createcategoryandaddrandomquestion'] = 'Crear categoría y añadir pregunta aleatoria';
$string['createlistfirst'] = 'Añadir participantes';
$string['createofflinequiz'] = 'Crear formularios';
$string['createpartpdferror'] = 'El formulario PDF para la lista de participantes {$a} no se pudo crear. La lista puede estar vacía.';
$string['createpdf'] = 'Formulario';
$string['createpdferror'] = 'El formulario para el grupo {$a} no pudo ser creado. Es posible que no haya preguntas en el grupo.';
$string['createpdffirst'] = 'Crear lista PDF en primer lugar.';
$string['createpdfforms'] = 'Crear formularios';
$string['createpdfs'] = 'Formularios';
$string['createpdfsparticipants'] = 'Formularios';
$string['createquestionandadd'] = 'Crear nueva pregunta y añadirla al cuestionario.';
$string['createquiz'] = 'Crear formularios';
$string['csvfile'] = 'Archivo CSV';
$string['csvformat'] = 'Fichero de texto de valores separados por coma (CSV)';
$string['csvplus1format'] = 'Fichero de texto con datos en bruto (CSV)';
$string['csvpluspointsformat'] = 'Fichero de texto con puntos (CSV)';
$string['darkgray'] = 'Gris oscuro';
$string['datanotsaved'] = 'No puede guardarse la configuración';
$string['decimalplaces'] = 'Número de decimales';
$string['decimalplaces_help'] = 'Número de cifras que deben ser mostradas después del punto decimal cuando se muestras las calificaciones del cuestionario offline (sin conexión).';
$string['defaultparticipantsusage'] = 'Registrar asistencia';
$string['defaultparticipantsusagedesc'] = 'Determina si la asistencia debe registrarse con los listados de asistencia de forma predeterminada.';
$string['defaultpdffont'] = 'Fuente del formulario por defecto';
$string['defaultpdffont_help'] = 'La fuente que offlinequiz usará por defecto para los formularios. Puede descargar un paquete tcpdf y extraer su directorio fonts/ directamente a su $CFG->dataroot/fonts/ para tener más fuentes. Se recomienda usar Freeserif por defecto porque soporta la mayoría de caracteres. Visite https://www.gnu.org/software/freefont/coverage.html para tener la lista de compatibilidad completa.';
$string['defaultpdffontsize'] = 'Tamaño de fuente por defceto';
$string['defaultpdffontsize_help'] = 'El tamaño de fuente por defecto que usarán todos los formularios.';
$string['deletelistcheck'] = '¿Realmente quiere borrar la lista seleccionada y todos sus participantes?';
$string['deletepagecheck'] = '¿Está seguro de que quiere borrar las páginas seleccionadas?';
$string['deletepagesafterselected'] = 'Eliminar los saltos de página después de las preguntas seleccionadas';
$string['deletepartcheck'] = '¿Estás seguro que deseas borrar a los participantes seleccionados?';
$string['deleteparticipantslist'] = 'Borrar lista de participantes';
$string['deletepdfs'] = 'Borrar documentos';
$string['deleteresultcheck'] = '¿Está seguro de que desea borrar los resultados seleccionados?';
$string['deleteselectedpart'] = 'Borrar a los participantes seleccionados';
$string['deleteselectedresults'] = 'Borrar resultados seleccionados';
$string['deletethislist'] = 'Borrar esta lista';
$string['deleteupdatepdf'] = 'Borrar y actualizar los formularios PDF';
$string['difficultytitle'] = 'Dificultad';
$string['difficultytitlea'] = 'Dificultad A';
$string['difficultytitleb'] = 'Dificultad B';
$string['difficultytitlediff'] = 'Diferencia';
$string['disableimgnewlines'] = 'Deshabilitar saltos de línea antes y después de las imágenes';
$string['disableimgnewlines_help'] = 'Esta opción deshabilita nuevas líneas antes y después de las imágenes en el pdf de la hoja de preguntas.
Atención: Esto puede causar problemas de formato.';
$string['discriminationindex_info'] = 'Como el índice de discriminación calcula predicción de la pregunta entre buenas notas e inferiores no se puede calcular si:
- no hay distintas respuesas de los estudiantes a esta pregunta,
- no hay distintas calificaciones en el examen.';
$string['displayoptions'] = 'Opciones de visualización';
$string['documentschanged'] = 'Se modificaron una o más preguntas del cuestionario offline desde la creación de los documentos.<br>Los resultados futuros se recalificarán automáticamente durante la evaluación a la versión actual de las preguntas seleccionadas. En los documentos, se sigue mostrando la versión original de las preguntas.';
$string['documentschangedwithresults'] = 'Se modificaron una o más preguntas del cuestionario offline desde la creación de los documentos. Los resultados existentes se recalificaron automáticamente a la versión actual de las preguntas seleccionadas. En los documentos, se sigue mostrando la versión original de las preguntas.';
$string['done'] = 'hecho';
$string['downloadallzip'] = 'Descargar todos los ficheros en ZIP';
$string['downloadpartpdf'] = 'Descargar el fichero PDF para la lista \'{$a}\\';
$string['downloadpdfs'] = 'Formularios';
$string['downloadresultsas'] = 'Descargar resultados como:';
$string['dragtoafter'] = 'Después de {$a}';
$string['dragtostart'] = 'Volver al principio';
$string['editgroupquestions'] = 'Editar preguntas del grupo';
$string['editgroups'] = 'Editar grupos offline';
$string['editingofflinequiz'] = 'Editando preguntas de grupo';
$string['editingofflinequiz_help'] = 'Cuando se crea un cuestionario offline (sin conexión), los conceptos principales son:
<ul><li>El cuestionario offline, que contiene las preguntas en una o más páginas</li>
<li>El banco de preguntas, que guarda copias de todas las preguntas organizadas en categorías</li></ul>';
$string['editingofflinequizx'] = 'Preguntas';
$string['editlist'] = 'Editar lista';
$string['editlists'] = 'Listas de asistencia';
$string['editmaxmark'] = 'Editar puntuación máxima';
$string['editofflinequiz'] = 'Editar cuestionario offline (sin conexión):';
$string['editofflinesettings'] = 'Editar configuración offline (sin conexión)';
$string['editorder'] = 'Editar orden';
$string['editparticipants'] = 'Editar participantes';
$string['editquestion'] = 'Editar pregunta';
$string['editquestionlistitem'] = '{$a}';
$string['editquestions'] = 'Preguntas';
$string['editscannedform'] = 'Editar formulario escaneado';
$string['editthislist'] = 'Editar esta lista';
$string['emptygroups'] = 'Algunos de los grupos de cuestionario offline (sin conexión) están vacíos. Por favor añada algunas preguntas.';
$string['enroluser'] = 'Matricular usuario';
$string['erroraccessingreport'] = 'No está autorizado para ver este informe.';
$string['errormultiuserinlist'] = '¡El usuario aparece más de una vez en las listas de asistencia!';
$string['errorreport'] = 'Informe de errores de importación';
$string['evaluated'] = 'Calificados:';
$string['evaluation'] = '2. Calificación';
$string['eventattemptdeleted'] = 'Intento de cuestionario offline eliminado';
$string['eventattemptpreviewstarted'] = 'intento de previsualización de cuestionario offline iniciado';
$string['eventattemptreviewed'] = 'Resultados del cuestionario online revisados';
$string['eventattemptsummaryviewed'] = 'Resumen de intento de cuestionario offline visto';
$string['eventattemptviewed'] = 'Intento de cuestionario online visto';
$string['eventdocscreated'] = 'Formularios de preguntas y de respuestas para el cuestionario offline creados';
$string['eventdocsdeleted'] = 'Formularios de preguntas y de respuestas para el cuestionario offline borrados';
$string['eventeditpageviewed'] = 'Página de edición de cuestionario offline vista';
$string['eventofflinequizattemptsubmitted'] = 'Intento de cuestionario offline enviado';
$string['eventoverridecreated'] = 'Sobreescritura de cuestionario offline creada';
$string['eventoverridedeleted'] = 'Sobreescritura de cuestionario offline borrada';
$string['eventoverrideupdated'] = 'Sobreescritura de cuestionario offline actualizada';
$string['eventparticipantmarked'] = 'Participante de cuestionario offline marcado manualmente';
$string['eventquestionmanuallygraded'] = 'Pregunta calificada manualmente';
$string['eventreportviewed'] = 'Informe de cuestionario offline visto';
$string['eventresultsregraded'] = 'Resultados del cuestionario online recalificados';
$string['everythingon'] = 'habilitado';
$string['excelformat'] = 'Hoja de cálculo Excel (XLSX)';
$string['experimentalevaluation'] = 'Evaluación experimental de las hojas de respuesta';
$string['experimentalevaluation_help'] = 'Evaluación experimental de las hojas de respuesta';
$string['fileformat'] = 'Formato para las hojas de pregunta';
$string['fileformat_help'] = 'Elija si quiere las hojas de preguntas en formato PDF, DOCX o TEX. Las hojas de los formularios de respuesta y los formularios de corrección son generados siempre en PDF.';
$string['fileprefixanswer'] = 'answer_form';
$string['fileprefixcorrection'] = 'correction_form';
$string['fileprefixform'] = 'question_form';
$string['fileprefixparticipants'] = 'participants_list';
$string['filesizetolarge'] = 'Algunos de sus archivos de imágenes son muy grandes. Las dimensiones serán ajustadas durante la decodificación. Por favor, intente escanear a una resolución entre 200 y 300 dpi y en modo blanco y negro. Esto acelerará la decodificación la próxima vez.';
$string['filterbytags'] = 'Filtrar por etiquetas...';
$string['fontfamilycourier'] = 'Courier';
$string['fontfamilyfreemono'] = '(Free-)Mono';
$string['fontfamilyfreesans'] = '(Free-)Sans';
$string['fontfamilyfreeserif'] = '(Free-)Serif (recomendado)';
$string['fontfamilyhelvetica'] = 'Helvetica';
$string['fontfamilyhysmyeongjostdmedium'] = 'MyungJo Medium (Coreano)';
$string['fontfamilykozgopromedium'] = 'Kozuka Gothic Pro (Sans-Serif japonesa)';
$string['fontfamilykozminproregular'] = 'Kozuka Mincho Pro (Serif japonesa)';
$string['fontfamilymsungstdlight'] = 'MSung Light (Chino trad.)';
$string['fontfamilystsongstdlight'] = 'STSong Light (Chino simp.)';
$string['fontfamilysymbol'] = 'Symbol';
$string['fontfamilytimes'] = 'Times';
$string['fontfamilyzapfdingbats'] = 'ZapfDingbats';
$string['fontsize'] = 'Tamaño de letra';
$string['forautoanalysis'] = 'Para análisis automático';
$string['formforcorrection'] = 'Formulario de correción para el grupo {$a}';
$string['formforgroup'] = 'Formulario de preguntas para el grupo {$a}';
$string['formforgroupdocx'] = 'Formulario de preguntas para el grupo {$a} (DOCX)';
$string['formforgrouplatex'] = 'Formulario de preguntas para el grupo {$a} (LATEX)';
$string['forms'] = 'Formularios';
$string['formsexist'] = 'Formularios ya creados.';
$string['formsexistx'] = 'Los formularios se han creado (<a href="{$a}">Descargar formularios</a>)';
$string['formsheetsettings'] = 'Ajustes de formulario';
$string['formspreview'] = 'Vista previa';
$string['formwarning'] = 'No hay formulario de respuesta definido. Por favor, contacte con su administrador.';
$string['fromquestionbank'] = 'desde el banco de preguntas';
$string['functiondisabledbysecuremode'] = 'Esta funcionalidad esta desactivadas actualmente';
$string['generalfeedback'] = 'Realimentación general';
$string['generalfeedback_help'] = 'La realimentación general es el texto que se muestra después de que una pregunta es contestada. Al contrario que la realimentación específica que depende de la respuesta dada, siempre se muestra la misma realimentación general.';
$string['generatepdfform'] = 'Generar formulario PDF';
$string['grade'] = 'Calificación';
$string['gradedon'] = 'Calificado en';
$string['gradedscannedform'] = 'Formulario escaneado con calificaciones';
$string['gradeiszero'] = 'Nota: ¡La calificación máxima para este cuestionario offline es 0 puntos!';
$string['gradeswarning'] = '¡Las puntuaciones de las preguntas deben ser numeros!';
$string['gradewarning'] = '¡La puntuación de la pregunta debe ser un número!';
$string['gradingofflinequiz'] = 'Calificaciones';
$string['gradingofflinequizx'] = 'Calificaciones';
$string['gradingoptionsheading'] = 'Opciones de calificación';
$string['greeniscross'] = 'contado como una cruz';
$string['group'] = 'Grupo';
$string['hasresult'] = 'El resultado existe';
$string['hotspotdeletiontask'] = 'Borrar hotspots';
$string['html'] = 'HTML';
$string['id'] = 'ID de usuario';
$string['idnumber'] = 'Número ID';
$string['imagefile'] = 'Archivo de imagen';
$string['imagenotfound'] = '¡Archivo de imagen: {$a} no encontrado!';
$string['imagenotjpg'] = 'La imagen no es jpg o png: {$a}';
$string['imagickwarning'] = 'No se encuentra imagemagick: Solicite al administrador de su sistema que instale la librería imagemagick y que compruebe la ruta para convertir binarios en los ajustes de su filtro de notación TeX. ¡No puede importar archivos TIF sin imagemagick!';
$string['import'] = 'Evaluar';
$string['importedon'] = 'Evaluado el';
$string['importerror11'] = 'Existe otro resultado';
$string['importerror12'] = 'Usuario no registrado';
$string['importerror13'] = 'No hay datos del grupo';
$string['importerror14'] = 'No se pudo interpretar';
$string['importerror15'] = 'Marcas imprecisas';
$string['importerror16'] = 'Error de página';
$string['importerror17'] = 'Páginas incompletas';
$string['importerror21'] = 'No se pudo interpretar';
$string['importerror22'] = 'Marcaciones dudosas';
$string['importerror23'] = 'El usuario no está en la lista';
$string['importerror24'] = 'Lista no detectada';
$string['importforms'] = 'Evaluar formularios de respuesta';
$string['importfromto'] = 'Evaluando {$a->from} a {$a->to} de {$a->total}.';
$string['importisfinished'] = 'La evaluación del cuestionario offline {$a} ha finalizado.';
$string['importlinkresults'] = 'Enlace a los resultados: {$a}';
$string['importlinkverify'] = 'Enlace a la verificación: {$a}';
$string['importmailsubject'] = 'Aviso de importación de cuestionario offline';
$string['importnew'] = 'Evaluar';
$string['importnew_help'] = '<p>
Puede importar archivos de imagen escaneados individuales o varios en un archivo ZIP. El módulo de cuestionario offline procesará los archivos de imagen en segundo plano.
Los nombres de archivo no son relevantes, pero no deben contener caracteres especiales como diéresis. Las imágenes deben ser GIF, PNG o TIF. Se recomienda una resolución de entre 200 y 300 ppp.
</p>';
$string['importnumberexisting'] = 'Número de formularios dobles: {$a}';
$string['importnumberpages'] = 'Número de páginas importadas con éxito: {$a}';
$string['importnumberresults'] = 'Número de importadas: {$a}';
$string['importnumberverify'] = 'Número de formularios que necesitan verificación: {$a}';
$string['importtimefinish'] = 'Proceso finalizado : {$a}';
$string['importtimestart'] = 'Proceso iniciado: {$a}';
$string['inconsistentdata'] = 'Datos inconsistentes: {$a}';
$string['info'] = 'Información';
$string['infoshort'] = 'i';
$string['insecuremarkings'] = 'Las marcas dudosas necesitan correciones manuales';
$string['insecuremarkingsforquestion'] = 'Las marcas poco claras necesitan correciones manuales';
$string['insertnumber'] = 'Por favor, escriba el número de identificación correcto marcado con el cuadro azul.';
$string['instruction1'] = 'Este formulario de respuesta será escaneado automáticamente. Por favor, no lo doble o manche. Utilice bolígrafo negro o azul para marcar los campos:';
$string['instruction2'] = '¡Sólo las marcas claras pueden ser interpretadas correctamente! Si quiere que se corrija una marca, rellene completamente la casilla con color. Este campo será interpretado como una casilla vacía:';
$string['instruction3'] = 'Las casillas corregidas no pueden ser marcadas de nuevo. Por favor, no escriba nada fuera de las casillas.';
$string['introduction'] = 'Introducción';
$string['invalidformula'] = 'Fórmula para identificación de usuario no válida. La fórmula debe tener el formato <prefix>[<#digits>]<suffix>=<db-field&>.';
$string['invalidnumberofdigits'] = 'Número inválido de cifras. Sólo se permiten de 1 a 9 cífras.';
$string['invaliduserfield'] = 'Campo de tabla de usuario no válido.';
$string['invigilator'] = 'Vigilante';
$string['ischecked'] = 'La participación está marcada';
$string['isnotchecked'] = 'La participación no está marcada';
$string['itemdata'] = 'Itemdata';
$string['keepfilesfordays'] = 'Conservar archivospor días';
$string['legend'] = 'Leyenda';
$string['legenddone'] = 'Paso realizado con éxito (no se requiere ninguna otra acción).';
$string['legendnextitem'] = 'Acción requerida en el flujo de trabajo posterior (posiblemente depende de pasos anteriores).';
$string['legendnoaction'] = 'No se requiere ninguna acción.';
$string['legendwarning'] = 'Requiere su intervención.';
$string['letter'] = 'Letra';
$string['lightgray'] = 'Gris claro';
$string['linktoscannedform'] = 'Ver formulario escaneado';
$string['listnotdetected'] = '¡No se ha podido detectar el código de barras para la lista!';
$string['logdeleted'] = 'Entrada del registro {$a} borrada.';
$string['logourl'] = 'URL del logo';
$string['logourldesc'] = 'URL de un archivo de imagen para que se muestra en la esquina superior derecha de los formularios de respuesta. <b>http://www.yoursite.tld/mylogo.png</b> o <b>../path/to/your/logo.png</b>. El tamaño máximo es de 520x140 píxeles. Los formularios de respuesta no pueden evaluarse si la imagen supera el tamaño máximo.';
$string['lowertrigger'] = 'Segundo límite inferior';
$string['lowertriggerzero'] = 'El segundo límite inferior es cero';
$string['lowerwarning'] = 'Primer límite inferior';
$string['lowerwarningzero'] = 'El primer límite inferior es cero';
$string['marginwarning'] = 'Por favor, imprima los siguientes archivos PDF sin márgenes adicionales.<br /> Evite repartir fotocopias a los estudiantes.';
$string['marks'] = 'Puntos';
$string['matrikel'] = 'número de estudiante';
$string['maxgradewarning'] = '¡La calificación máxima debe ser un número!';
$string['maxmark'] = 'Puntuación máxima';
$string['membersinplist'] = '{$a->count} participantes en <a href="{$a->url}">{$a->name}</a>';
$string['missingimagefile'] = 'Archivo de imagen no encontrado';
$string['missingitemdata'] = 'Respuesta(s) ausentes para el usuario {$a}';
$string['missinglogdata'] = 'Faltan datos de log para el resultado existente.';
$string['missingquestion'] = 'Parece que esta pregunta ya no existe';
$string['missinguserid'] = '¡No se encuentra el número de identificación del usuario! ¡No se puede leer el código de barras!';
$string['modulename'] = 'Cuestionario offline';
$string['modulename_help'] = 'Este módulo permite al profesor diseñar cuestionarios offline compuestos por preguntas de opción múltiple.
Estas preguntas son conservadas en el banco de preguntas de Moodle y pueden ser reutilizadas en el mismo curso o en otros.
Los cuestionarios offline pueden ser descargados como archivos PDF, DOCX o LaTeX. Los estudiantes marcan sus respuestas en formularios en papel. Los formularios en papel son escaneados y las respuestas importadas al sistema.';
$string['modulenameplural'] = 'Cuestionarios offline';
$string['moodleprocessing'] = 'Permite que Moodle procese los datos';
$string['movecorners'] = 'Cambie primero las posiciones de las marcas de las esquinas. Utilice la función de arrastrar y soltar.';
$string['moveselectedonpage'] = 'Mover las preguntas seleccionadas a la página: {$a}';
$string['multianswersforsingle'] = 'Múltiples respuestas para una pregunta de una sola opción';
$string['multichoice'] = 'Opción múltiple';
$string['multipleanswers'] = 'Seleccione al menos una respuesta.';
$string['name'] = 'Nombre del cuestionario offline';
$string['neededcorrection'] = '<strong>Atención: Algunas de sus marcas requieren de correción manual. Revise los recuadros rojos en la siguiente imagen.
<br />¡Esto implica la intervención manual de un profesor y el retraso en la publicación de los resultados del cuestionario offline (sin conexión)!</strong>';
$string['newgrade'] = 'Calificado';
$string['newpage'] = 'Página nueva';
$string['noattemptexists'] = 'No existen resultados';
$string['noattempts'] = '¡No se han importado resultados!';
$string['noattemptsonly'] = 'Mostrar sólo estudiantes sin resultados';
$string['nocourse'] = 'No se ha encontrado el curso con el id {$a->course} al que pertenece el cuestionario offline con ID {$a->offlinequiz}.';
$string['nogradesseelater'] = 'Este cuestionario no ha sido calificacdo todavía para {$a}. Los resultados serán publicados aquí.';
$string['nogroupdata'] = 'No hay datos de grupo para el usuario {$a}';
$string['nomcquestions'] = '¡No hay preguntas de opción múltiple en {$a}!';
$string['noofflinequiz'] = '¡No hay un cuestionario offline con el id {$a}!';
$string['nopages'] = 'Ninguna página importada';
$string['noparticipantsfound'] = 'No se encontraron participante';
$string['nopdfscreated'] = '¡No se han creado documentos!';
$string['noquestions'] = 'Algunos grupos de cuestionario offline estas vacíos. Por favor, añada algunas preguntas.';
$string['noquestionselected'] = '¡No hay preguntas seleccionadas!';
$string['noquestionsfound'] = '¡No hay preguntas en el grupo {$a}!';
$string['noquestionsonpage'] = 'Página vacía';
$string['noresults'] = 'No hay resultados.';
$string['noreview'] = 'No tiene permisos para revisar este cuestionario offline';
$string['noscannedpage'] = '¡No hay página escaneada con ID {$a}!';
$string['notagselected'] = 'No se ha seleccionado una etiqueta';
$string['notavailable'] = 'N/A';
$string['nothingtodo'] = '¡Nada que hacer!';
$string['notxtfile'] = '';
$string['notyetgraded'] = 'No calificado aún';
$string['nozipfile'] = 'No es un archivo ZIP';
$string['numattempts'] = 'Número de resultados importados:  {$a}';
$string['numattemptsqueue'] = '{$a} formulario de respuestas añadido a la cola. Se le enviará un correo electrónico cuando los datos sean procesados.';
$string['numattemptsverify'] = 'Formularios escaneados esperando para corrección: {$a}';
$string['numberformat'] = '¡El valor debe ser un número con {$a} cifras!';
$string['numbergroups'] = 'Número de grupos';
$string['numpages'] = '{$a} páginas importadas';
$string['numquestionsx'] = 'Preguntas: {$a}';
$string['numusersadded'] = '{$a} participantes añadidos';
$string['odsformat'] = 'Hoja de cálculo OpenDocument (ODS)';
$string['offlineimplementationfor'] = 'Implementación offline para';
$string['offlinequiz:addinstance'] = 'Añadir un cuestionario offline';
$string['offlinequiz:attempt'] = 'Intentar cuestionarios';
$string['offlinequiz:changeevaluationmode'] = 'Hace posible cambiar el modo de evaluación. ¡ATENCIÓN: NO USAR EN PRODUCCIÓN!';
$string['offlinequiz:createofflinequiz'] = 'Crear formularios de cuestionario offline';
$string['offlinequiz:deleteattempts'] = 'Borrar resultados del cuestionario offline';
$string['offlinequiz:grade'] = 'Calificar cuestionarios offline (sin conexión) manualmente';
$string['offlinequiz:manage'] = 'Gestionar cuestionarios offline';
$string['offlinequiz:preview'] = 'Vista previa de cuestionarios offline';
$string['offlinequiz:view'] = 'Ver información del cuestionario offline';
$string['offlinequiz:viewreports'] = 'Ver registros del cuestionario offline';
$string['offlinequizcloses'] = 'El cuestionario offline se cierra';
$string['offlinequizcloseson'] = 'La revisión para este cuestionario offline se cerrará {$a}';
$string['offlinequizcontent'] = 'Contenido del cuestionario offline';
$string['offlinequizisclosed'] = 'Cuestionario offline cerrado)';
$string['offlinequizisclosedwillopen'] = 'Cuestionario offline cerrado (se abre el {$a})';
$string['offlinequizisopen'] = 'Este cuestionario offline esta abierto';
$string['offlinequizisopenwillclose'] = 'Cuestionario offline (sin conexión) abierto (se cierra el {$a})';
$string['offlinequizopenedon'] = 'Este cuestionario offline se abrió el {$a}';
$string['offlinequizopens'] = 'El cuestionario offline se abre';
$string['offlinequizsettings'] = 'Ajustes sin conexión';
$string['offlinequizwillopen'] = 'El cuestionario offline se abre el {$a}';
$string['oneclickenrol'] = 'Matriculación en click 1';
$string['oneclickenroldesc'] = 'Si se activa esta opción los profesores tienen la posibilidad de matricular usuarios con un clic mientras están corrigiendo los formularios de respuestas (error "El usuario no está en el curso").';
$string['oneclickrole'] = 'Rol para matriculación en click 1';
$string['oneclickroledesc'] = 'Elija el rol usado para matriculación en un clic. Sólo pueden seleccionarse roles con el arquetipo "Estudiante".';
$string['onlylocalcategories'] = 'Sólo categorías locales de preguntas';
$string['orderandpaging'] = 'Orden y paginación';
$string['orderandpaging_help'] = 'Los número 10, 20, 30, ... enfrente de cada preguntas indica el orden de las preguntas. Los números aumentan en intervalos de 10 para dejar espacio para insertar preguntas adicionales. Para reordenar las preguntas, cambie los números y pulse el botón "Reordenar preguntas".

Para añadir saltos de página después de determinadas preguntas, marque las casillas junto a las preguntas y pulse el botón "Añadir saltos de página después de las preguntas seleccionadas".

Para repartir las preguntas en un número de páginas, pulse el botón de repaginación y seleccione el número deseado de preguntas por página.';
$string['orderingofflinequiz'] = 'Orden y paginación';
$string['otherresultexists'] = 'Ya existe un resultado diferente para {$a}, ¡importación ignorada! Borre el resultado primero.';
$string['outof'] = '{$a->grade} de un máximo de {$a->maxgrade}';
$string['outofshort'] = '{$a->grade}/{$a->maxgrade}';
$string['overallfeedback'] = 'Realimentación general';
$string['overview'] = 'Información del cuestionario';
$string['overviewdownload_help'] = 'Descargar resumen';
$string['page-mod-offlinequiz-edit'] = 'Editar página del cuestionario offline';
$string['page-mod-offlinequiz-x'] = 'Cualquier página de cuestionario offline';
$string['pagecorrected'] = 'Hoja corregida con lista de participantes importada';
$string['pageevaluationtask'] = 'Hoja de evaluación de respuestas del plugin offlinequiz';
$string['pageimported'] = 'Hoja de lista de participantes importada';
$string['pagenotdetected'] = '¡No se puede detectar el código de barras de la página!';
$string['pagenumberimported'] = 'Hoja {$a} de lista de participantes importada';
$string['pagenumberupdate'] = 'Número de página actualizado';
$string['pagesinprocessing'] = 'En proceso:';
$string['pagesizeparts'] = 'Participantes mostrados por página:';
$string['papergray'] = 'Valor de blanco del papel';
$string['papergray_help'] = 'Si las partes blancas del fomulario de respuestas escaneado son muy oscuras puede corregirlo ajustando este valor a gris oscuro.';
$string['partcheckedwithoutresult'] = '<a href="{$a->url}">{$a->count} participantes marcados sin resultado</a>';
$string['partcheckedwithresult'] = '{$a} participantes marcados con resultado';
$string['partial'] = 'parcial';
$string['participants'] = 'Participantes';
$string['participants_help'] = '<p>Las listas de participantes están diseñadas para grandes cuestionarios offline con muchos participantes.
Ayudan al profesor a comprobar qué estudiantes participan en el cuestionario y si todos los resultados fueron importados correctamente.
Puede añadir usuarios a diferentes listas. Cada lista puede contener, por ejemplo, los participantes en una habitación determinada. Los participantes pueden ser miembros de un grupo especial. Una herramienta de registro de grupos puede ser usada para crear estos grupos.
Las listas de participantes pueden ser descargadas como documentos PDF, impresas y marcadas con cruces igual que los formularios de respuesta. Después pueden ser cargados y los estudiantes marcados se guardan como presentes en la base de datos.
Por favor, evite manchas en el código de barras ya que estos son usados para identificar a los estudiantes.</p>';
$string['participantsinlists'] = 'Participantes';
$string['participantslist'] = 'Lista de participantes';
$string['participantslists'] = 'Participantes';
$string['participantsusage'] = 'Registrar asistencia';
$string['participantsusage_help'] = 'Esta opción determina si se puede registrar la asistencia de los participantes con listas de asistencia. Las listas de asistencia están diseñadas para cuestionarios presenciales de gran tamaño con muchos participantes. Permiten comprobar qué estudiantes participaron en el cuestionario y si todos los resultados se evaluaron correctamente.';
$string['partimportnew'] = 'Cargando listas de participantes';
$string['partimportnew_help'] = '<p>
En esta pestaña puede cargar las listas cumplimentadas de los participantes. Puede subir archivos de imagen escaneados individuales o varios archivos de imagen escaneados en un archivo ZIP. El módulo de Cuestionario Offline procesará los archivos de imagen en segundo plano.
Los nombres de los archivos no son relevantes, pero no deben contener caracteres especiales como diéresis. Las imágenes deben ser GIFs, PNGs o TIF. Se recomienda una resolución de entre 200 y 300 ppp.';
$string['partuncheckedwithoutresult'] = '{$a} participantes desmarcados sin resultado';
$string['partuncheckedwithresult'] = '<a href="{$a->url}">{$a->count} participantes desmarcados con resultado</a>';
$string['pdfdeletedforgroup'] = 'Formulario para el grupo {$a} eliminado';
$string['pdffont'] = 'Fuente del formulario';
$string['pdffont_help'] = 'Aquí puede seleccionar una fuente para todos sus formularios PDF: hojas de respuestas, formularios de corrección, formularios de asistencia. Así como formularios de preguntas, si elige un formato PDF para ello. La elección también dependerá de qué caracteres use en sus formularios. Con formato DOCX y LATEX las hojas de preguntas no están afectadas por esto.';
$string['pdfintro'] = 'Información adicional';
$string['pdfintro_help'] = 'Esta información será impresa en la primera página de la hoja de preguntas y debería contener información general sobre como rellenar el formulario de respuesta.';
$string['pdfintrotext'] = '<b>¿Cómo debo marcar correctamente?</b><br /> Este formulario de respuesta será escaneado automáticamente. Por favor, no lo doble o manche. Use un bolígrafo negro o azul para marcar los campos. Si quiere corregir una marca, rellene completamente la casilla con color. Esta casilla será interpretada como una casilla vacía.';
$string['pdfintrotoolarge'] = 'La introducción es demasiado larga (max. 2000 caracteres).';
$string['pdfscreated'] = 'Los formularios PDF han sido creados';
$string['pdfsdeletedforgroup'] = 'Formularios para el grupo {$a} eliminados';
$string['pearlywhite'] = 'Blanco perlado';
$string['pluginadministration'] = 'Administración del cuestionario offline';
$string['pluginname'] = 'Cuestionario offline';
$string['point'] = 'punto';
$string['preparation'] = '1. Preparación';
$string['present'] = 'Presentado';
$string['preventsamequestion'] = 'Prevenir el uso múltiple de la misma pregunta en grupos diferentes';
$string['preview'] = 'Vista previa';
$string['previewforgroup'] = 'Grupo {$a}';
$string['previewquestion'] = 'Vista previa de la pregunta';
$string['printstudycodefield'] = 'Añadir un campo para el código de estudio en la hoja de preguntas';
$string['printstudycodefield_help'] = 'Si se marca, se añade un campo para el código de estudio en la primera página de la hoja de preguntas.';
$string['privacy:data_folder_name'] = 'Datos de offlinequiz';
$string['privacy:metadata:core_files'] = 'Offlinequiz usa el archivo API para almacenar las hojas de preguntas generadas, hojas de respuestas y hojas de corrección así como las hojas de respuestas cumplimentadas.';
$string['privacy:metadata:core_question'] = 'Offlinequiz usa la API de preguntas para guardar las preguntas de los cuestionarios.';
$string['privacy:metadata:mod_quiz'] = 'Offlinequiz usa la API de cuestionarios para guardar resultados en los cuestionarios.';
$string['privacy:metadata:offlinequiz'] = 'La tabla de offlinequiz guarda toda la información específica a una instancia offlinequiz.';
$string['privacy:metadata:offlinequiz:course'] = 'La columna "curso" de la tabla offline quiz guarda en qué curso está guardado este cuestionario offline.';
$string['privacy:metadata:offlinequiz:decimalpoints'] = 'La cantidad de puntos decimales para calcular las calificaciones.';
$string['privacy:metadata:offlinequiz:disableimgnewlines'] = 'Debería deshabilitar nuevas líneas antes y después de imágenes.';
$string['privacy:metadata:offlinequiz:docscreated'] = 'Si se crearon documentos este campo tiene valor 1. Si no, es 0.';
$string['privacy:metadata:offlinequiz:fileformat'] = 'El formato de archivo que se usa para imprimir las hojas de preguntas, 0 para pdf, 1 para docx, 2 para LaTex.';
$string['privacy:metadata:offlinequiz:fontsize'] = 'El tamaño de la fuente en las hojas de preguntas.';
$string['privacy:metadata:offlinequiz:grade'] = 'La calificación muestra la puntuación máxima de este cuestionario offline.';
$string['privacy:metadata:offlinequiz:id_digits'] = 'Guarda el número de dígitos que tenía el idnumber cuando se crearon las hojas de respuestas. Esto hace falta para recuperar compatibilidad si la cantidad se aumenta entre la creación e importación de hojas de respuestas.';
$string['privacy:metadata:offlinequiz:introformat'] = 'Este campo no se usa.';
$string['privacy:metadata:offlinequiz:name'] = 'La columna "nombre" guarda el nombre del cuestionario offline.';
$string['privacy:metadata:offlinequiz:numgroups'] = 'La cantidad de grupos que tiene este cuestionario.';
$string['privacy:metadata:offlinequiz:papergray'] = 'El valor blanco de este cuestionario offline.';
$string['privacy:metadata:offlinequiz:pdfintro'] = 'La información adicional que se inserta al principio de las hojas de preguntas.';
$string['privacy:metadata:offlinequiz:printstudycodefield'] = 'Una opción de imprimir el código de estudio en el formulario de preguntas. 1 para sí. Si no, 0.';
$string['privacy:metadata:offlinequiz:review'] = 'Esta columna guarda información sobre cómo se hace la revisión.';
$string['privacy:metadata:offlinequiz:showgrades'] = 'Guarda si la cantidad de puntos a obtener en la pregunta deberían imprimirse en la hoja de preguntas.';
$string['privacy:metadata:offlinequiz:showquestioninfo'] = 'Guarda si la información sobre las preguntas debería mostrarse. 0 para no, 1 para información sobre tipo de pregunta, 2 para información sobre la cantidad de respuestas correctas.';
$string['privacy:metadata:offlinequiz:showtutorial'] = 'Guarda si se debe preguntar a los participantes que hagan un tutorial de cuestionario offline.';
$string['privacy:metadata:offlinequiz:shufflequestions'] = 'Una preferencia sobre si las preguntas deben barajarse cuando se crea un cuestionario offline: 1 para barajar. Si no, 0.';
$string['privacy:metadata:offlinequiz:time'] = 'La columna de tiempo guarda la fecha del cuestionario offline.';
$string['privacy:metadata:offlinequiz:timeclose'] = 'La columna de tiempo de cierre guarda cuándo se cerró o cerrará el cuestionario offline.';
$string['privacy:metadata:offlinequiz:timecreated'] = 'La columna de momento de creación guarda cuándo se creó el cuestionario offline.';
$string['privacy:metadata:offlinequiz:timemodified'] = 'La columna de momento de modificación guarda el momento en que se modificó el cuestionario offline por última vez.';
$string['privacy:metadata:offlinequiz:timeopen'] = 'la columna de momento de apertura guarda cuándo un cuestionario abrió o se abrirá.';
$string['privacy:metadata:offlinequiz_choices'] = 'Esta tabla guarda la información de todas las cruces de todas las páginas escaneadas. La información hace falta para crear después resultados basados en las cruces.';
$string['privacy:metadata:offlinequiz_choices:choicenumber'] = 'El número de la elección de esta pregunta.';
$string['privacy:metadata:offlinequiz_choices:scannedpageid'] = 'La página escaneada a la que se refiere la elección.';
$string['privacy:metadata:offlinequiz_choices:slotnumber'] = 'El recuadro de la pregunta de esta elección.';
$string['privacy:metadata:offlinequiz_choices:value'] = 'Si se considera que la elección está marcada. 0 para no. 1 para sí. -1 para impreciso.';
$string['privacy:metadata:offlinequiz_group_questions'] = 'Esta tabla guarda todas las preguntas de cada grupo de cuestionarios offline.';
$string['privacy:metadata:offlinequiz_group_questions:maxmark'] = 'La puntuación máxima posible para esta pregunta.';
$string['privacy:metadata:offlinequiz_group_questions:offlinegroupid'] = 'El grupo de cuestionario offline al que se refiere esta pregunta de grupo.';
$string['privacy:metadata:offlinequiz_group_questions:offlinequizid'] = 'El identificador de cuestionario offline al que se refiere esta pregunta de grupo.';
$string['privacy:metadata:offlinequiz_group_questions:page'] = 'La página en la que está impresa esta pregunta en las hojas de respuestas.';
$string['privacy:metadata:offlinequiz_group_questions:position'] = 'La posición en este cuestionario offline.';
$string['privacy:metadata:offlinequiz_group_questions:questionid'] = 'El ID de la pregunta seleccionada.';
$string['privacy:metadata:offlinequiz_group_questions:slot'] = 'El recuadro de la pregunta en el cuestionario.';
$string['privacy:metadata:offlinequiz_groups'] = 'Tabla para los grupos participantes en los cuestionarios offline.';
$string['privacy:metadata:offlinequiz_groups:answerfilename'] = 'El nombre de archivo quese usó para guardar el archivo de respuestas.';
$string['privacy:metadata:offlinequiz_groups:correctionfilename'] = 'El archivo que se usó para guardar el archivo de corrección.';
$string['privacy:metadata:offlinequiz_groups:number'] = 'El número de grupo para este cuestionario offline. 1 para grupo A. 2, grupo B. Y así sucesivamente.';
$string['privacy:metadata:offlinequiz_groups:numberofpages'] = 'La cantidad de páginas necesaria para imprimir las hojas de respuesta.';
$string['privacy:metadata:offlinequiz_groups:offlinequizid'] = 'El ID del cuestionario offline al que pertenece este cuestionario offline.';
$string['privacy:metadata:offlinequiz_groups:questionfilename'] = 'El nombre de archivo que se usó para guardar el archivo de preguntas.';
$string['privacy:metadata:offlinequiz_groups:sumgrades'] = 'La suma de todas las calificaciones de todas las preguntas de este grupo.';
$string['privacy:metadata:offlinequiz_groups:templateusageid'] = 'El ID del uso de la plantilla que se usó para crear un resultado en la API del cuestionario.';
$string['privacy:metadata:offlinequiz_hotspots'] = 'Esta tabla guarda todas las posiciones de los recuadros y si se han evaluado satisfactoriamente.';
$string['privacy:metadata:offlinequiz_hotspots:blank'] = 'Si los recuadros se han analizado satisfactoriamente.';
$string['privacy:metadata:offlinequiz_hotspots:name'] = 'Tipo de recuadro, ej. u%number para recuadro de usuario, a-0-0 para pregunta 1 respuesta 1, y así sucesivamente.';
$string['privacy:metadata:offlinequiz_hotspots:scannedpageid'] = 'Página escaneada en donde está el recuadro.';
$string['privacy:metadata:offlinequiz_hotspots:time'] = 'El último momento en que se actualizó este recuadro.';
$string['privacy:metadata:offlinequiz_hotspots:x'] = 'El valor x del recuadro.';
$string['privacy:metadata:offlinequiz_hotspots:y'] = 'El valor y del recuadro.';
$string['privacy:metadata:offlinequiz_p_choices'] = 'Esta tabla guarda todas las cruces de las listas de participantes.';
$string['privacy:metadata:offlinequiz_p_choices:scannedpageid'] = 'La página escaneada a la que se refiere esta elección.';
$string['privacy:metadata:offlinequiz_p_choices:userid'] = 'El ID de usuario al que se refiere esta elección.';
$string['privacy:metadata:offlinequiz_p_choices:value'] = 'Si la cruz está cumplimentada o no (0 para vacía, 1 para cumplimentada, -1 para impreciso).';
$string['privacy:metadata:offlinequiz_p_lists'] = 'Esta tabla guarda información sobre listas de participantes con las que los profesores pueden anotar si un estudiante estaba o no.';
$string['privacy:metadata:offlinequiz_p_lists:filename'] = 'El nombre del archivo de la lista.';
$string['privacy:metadata:offlinequiz_p_lists:name'] = 'El nombre de la lista de participantes.';
$string['privacy:metadata:offlinequiz_p_lists:number'] = 'El número de la lista en el cuestionario offline.';
$string['privacy:metadata:offlinequiz_p_lists:offlinequizid'] = 'El cuestionario offline al que pertenece esta lista.';
$string['privacy:metadata:offlinequiz_page_corners'] = 'Esta tabla guarda todas las esquinas de todas las páginas escaneadas para evaluar más rápidamente en la siguiente evaluación o corrección.';
$string['privacy:metadata:offlinequiz_page_corners:position'] = 'La información sobre si esta esquina está arriba o abajo o a la derecha o a la izquierda.';
$string['privacy:metadata:offlinequiz_page_corners:scannedpageid'] = 'La página escaneada en la que está esta esquina.';
$string['privacy:metadata:offlinequiz_page_corners:x'] = 'El valor x de la esquina.';
$string['privacy:metadata:offlinequiz_page_corners:y'] = 'El valor y de la esquina.';
$string['privacy:metadata:offlinequiz_participants'] = 'La tabla de participantes guarda si el usuario estaba participando en el cuestionario offline o no.';
$string['privacy:metadata:offlinequiz_participants:checked'] = 'La información sobre si se anotó a este usuario en la lista de participantes.';
$string['privacy:metadata:offlinequiz_participants:listid'] = 'El ID de la lista en la que está este participante.';
$string['privacy:metadata:offlinequiz_participants:userid'] = 'El userID del usuario.';
$string['privacy:metadata:offlinequiz_queue'] = 'Esta tabla guarda una cola de una subida de archivo. Para cada subida de archivo hay un objeto determinado en esta tabla.';
$string['privacy:metadata:offlinequiz_queue:importuserid'] = 'El ID de usuario del profesor que importó los archivos.';
$string['privacy:metadata:offlinequiz_queue:offlinequizid'] = 'El ID de cuestionario offline de la cola';
$string['privacy:metadata:offlinequiz_queue:status'] = 'El estado de la cola que hace falta.';
$string['privacy:metadata:offlinequiz_queue:timecreated'] = 'El momento en que se importaron estas hojas de cuestionario offline.';
$string['privacy:metadata:offlinequiz_queue:timefinish'] = 'El momento en que terminó la cola de evaluación.';
$string['privacy:metadata:offlinequiz_queue:timestart'] = 'El momento en que comenzó la cola.';
$string['privacy:metadata:offlinequiz_queue_data'] = 'Esta tabla guarda datos sobre la cola porque cada archivo en la cola tendrá un objeto de cola.';
$string['privacy:metadata:offlinequiz_queue_data:error'] = 'Si el estado da error, aquí habrá un mensaje de error más detallado.';
$string['privacy:metadata:offlinequiz_queue_data:filename'] = 'El nombre de archivo del archivo al que se refiere esta cola.';
$string['privacy:metadata:offlinequiz_queue_data:queueid'] = 'La cola a la que pertenece este dato.';
$string['privacy:metadata:offlinequiz_queue_data:status'] = 'El estado de los datos de cola.';
$string['privacy:metadata:offlinequiz_results'] = 'Esta tabla guarda todos los datos de resultados, que no se pueden guardar en la API de cuestionario.';
$string['privacy:metadata:offlinequiz_results:offlinegroupid'] = 'El grupo de cuestionario offline al que pertenece este resultado.';
$string['privacy:metadata:offlinequiz_results:offlinequizid'] = 'El cuestionario offline al que pertenece este resultado.';
$string['privacy:metadata:offlinequiz_results:status'] = 'El estado del resultado (completo o incompleto).';
$string['privacy:metadata:offlinequiz_results:sumgrades'] = 'La suma de todas las calificaciones para este resultado.';
$string['privacy:metadata:offlinequiz_results:teacherid'] = 'El profesor que subió el resultado.';
$string['privacy:metadata:offlinequiz_results:timefinish'] = 'El momento final en que el resultado se insertó por primera vez.';
$string['privacy:metadata:offlinequiz_results:timemodified'] = 'La fecha de modificación del resultado.';
$string['privacy:metadata:offlinequiz_results:timestart'] = 'El principio del momento en que se insertó el resultado por primera vez.';
$string['privacy:metadata:offlinequiz_results:usageid'] = 'El ID de la plantilla usada para la API de cuestionario donde se guardó este resultado.';
$string['privacy:metadata:offlinequiz_results:userid'] = 'El usuario al que pertenece este resultado.';
$string['privacy:metadata:offlinequiz_scanned_p_pages'] = 'Esta tabla guarda páginas de participantes y su información general.';
$string['privacy:metadata:offlinequiz_scanned_p_pages:error'] = 'El error (si existe) que desencadenó esta página al procesarse.';
$string['privacy:metadata:offlinequiz_scanned_p_pages:filename'] = 'El nombre del archivo de la página escaneada.';
$string['privacy:metadata:offlinequiz_scanned_p_pages:listnumber'] = 'El número de la lista.';
$string['privacy:metadata:offlinequiz_scanned_p_pages:offlinequizid'] = 'El cuestionario offline al que pertenece esta página de participantes.';
$string['privacy:metadata:offlinequiz_scanned_p_pages:status'] = 'El estado de esta página escaneada.';
$string['privacy:metadata:offlinequiz_scanned_p_pages:time'] = 'El momento en que esta página se procesó.';
$string['privacy:metadata:offlinequiz_scanned_pages'] = 'La tabla guarda información sobre una página escaneada de un cuestionario offline.';
$string['privacy:metadata:offlinequiz_scanned_pages:error'] = 'El error detallado que tiene esta página (si lo hay).';
$string['privacy:metadata:offlinequiz_scanned_pages:filename'] = 'El nombre de archivo de la página escaneada.';
$string['privacy:metadata:offlinequiz_scanned_pages:groupnumber'] = 'El número de grupo del grupo al que pertenece este cuestionario offline.';
$string['privacy:metadata:offlinequiz_scanned_pages:offlinequizid'] = 'El cuestionario offline de la página escaneada.';
$string['privacy:metadata:offlinequiz_scanned_pages:pagenumber'] = 'El número de página de esta página.';
$string['privacy:metadata:offlinequiz_scanned_pages:resultid'] = 'El resultado relacionado con esta página.';
$string['privacy:metadata:offlinequiz_scanned_pages:status'] = 'El estado de esta página.';
$string['privacy:metadata:offlinequiz_scanned_pages:time'] = 'El momento en que se procesó esta página.';
$string['privacy:metadata:offlinequiz_scanned_pages:userkey'] = 'La clave de usuario (no el ID de usuario) del usuario marcado en la página.';
$string['privacy:metadata:offlinequiz_scanned_pages:warningfilename'] = 'El nombre de archivo del archivo que se crea cuando se corrige una marca incorrecta de un cuestionario offline y el usuario recibe un aviso sobre eso.';
$string['questionanalysis'] = 'Análisis de preguntas';
$string['questionanalysistitle'] = 'Tabla de análisis de preguntas';
$string['questionandansweranalysis'] = 'Análisis de preguntas y respuestas';
$string['questionbankcontents'] = 'Contenidos del banco de preguntas';
$string['questionforms'] = 'Formularios de pregunta';
$string['questioninfoanswers'] = 'Número de respuestas correctas';
$string['questioninfocorrectanswer'] = 'respuesta correcta';
$string['questioninfocorrectanswers'] = 'respuestas correctas';
$string['questioninfonone'] = 'Nada';
$string['questioninfoqtype'] = 'Tipo de pregunta';
$string['questionname'] = 'Nombre de la pregunta';
$string['questionpage'] = 'Página';
$string['questionsheet'] = 'Hoja de preguntas';
$string['questionsheetlatextemplate'] = '\\documentclass[12pt,a4paper]{article}
\\textwidth 16truecm
\\textheight 23truecm
\\setlength{\\oddsidemargin}{0cm}
\\setlength{\\evensidemargin}{0cm}
\\setlength{\\topmargin}{-1cm}
\\usepackage{amsmath} % for \\implies etc
\\usepackage{amsfonts} % for \\mathbb etc
\\usepackage{graphicx} % for including pictures
\\renewcommand{\\familydefault}{\\sfdefault} % Font
\\newcommand{\\lsim}{\\mbox{\\raisebox{-.3em}{$\\stackrel{<}{\\sim}$}}} % less or approximately equal
\\newcommand{\\subs}{\\mbox{\\raisebox{-.5em}{$\\stackrel{\\subset}{\\neq}$}}}
\\newcommand{\\sei}{\\mbox{\\raisebox{.0em}{$\\stackrel{!}{=}$}}}
\\parindent 0pt % no indent on the beginning of a section
\\usepackage{esvect} % long vector arrows, e.g. \\vv{AB}
\\usepackage[colorlinks=true,urlcolor=dunkelrot,linkcolor=black]{hyperref} % For using of Hyperlinks
\\renewcommand\\UrlFont{\\sf}
\\usepackage{ulem} %  \\sout{horizontal cross out} \\xout{diagonal strike out}
\\newcommand{\\abs}[1]{\\left\\lvert#1\\right\\rvert}
\\usepackage{scrpage2} % For Header and Footer
\\pagestyle{scrheadings}
\\clearscrheadfoot
\\ifoot{[Gruppe \\Group]}
\\makeatletter %%% disable pagebreaks between answers
\\@beginparpenalty=10000
\\@itempenalty=10000
\\makeatother
%
\\newcommand{\\answerIs}[1]{} %%%Disable showing the right answer
% \\newcommand{\\answerIs}[1]{[#1]} %%%Enable showing the right answer
%%%

\\begin{document}


% ===========================================================================================================
%%% Data of the Course
\\begin{center}{\\LARGE {$a->coursename}}\\end{center}
\\begin{center}{Written Exam {$a->date}}\\end{center}
%%%
\\def\\Group{{$a->groupname}}
\\begin{center}{\\Large Group \\Group}\\end{center}

{\\bf Name:}\\\\
{\\bf Matriculation number:}\\\\
{\\bf Signature:}\\

% ===========================================================================================================
\\bigskip

{$a->latexforquestions}


\\end{document}';
$string['questionsin'] = 'Preguntas en';
$string['questionsingroup'] = 'Grupo';
$string['questionsinthisofflinequiz'] = 'Preguntas en este cuestionario offline (fuera de línea)';
$string['questiontextisempty'] = '[Texto de la pregunta vacío]';
$string['quizdate'] = 'Fechas del cuestionario offline';
$string['quizopenclose'] = 'Fechas de apertura y cierre';
$string['quizopenclose_help'] = 'La revisión en línea se puede restringir a un período específico. Haga clic en "Mostrar" para cambiar la fecha y la hora.

**Precaución:** Si no se activa ningún período para la revisión en línea, esta no tendrá restricciones mientras los participantes puedan ver el cuestionario offline.

En todos los casos, solo se muestran las opciones marcadas en "La revisión incluye".';
$string['qversioncannotupdate'] = 'La versión de la pregunta no puede ser actualizada';
$string['qversionnumbersdiffer'] = 'El número de respuestas difiere entre la versión vieja y la nueva. Esto puede llevar a inconsistencias.';
$string['qversionupdated'] = 'Versión de la pregunta actualizada';
$string['qversionupdatedwarning'] = 'Los formularios ya están creados.<br>Si existen resultados, se recalcularon automáticamente a la versión actual de la pregunta modificada seleccionada aquí. En los documentos, se sigue mostrando la versión original de la pregunta.';
$string['qversionupdateerror'] = 'Hubo un error al actualizar la versión de la pregunta.';
$string['randomfromexistingcategory'] = 'Pregunta aleatoria de una categoría existente';
$string['randomnumber'] = 'Número de preguntas aleatorias';
$string['randomquestionusinganewcategory'] = 'Pregunta aleatoria usando una categoría nueva';
$string['readjust'] = 'Reajuste';
$string['reallydeletepdfs'] = '¿Está seguro de que quiere borrar los archivos de los formularios?';
$string['reallydeleteupdatepdf'] = '¿Realmente quiere borrar y actualizar la lista de participantes?';
$string['recordupdateanddocscreated'] = 'Las preguntas se actualizaron pero como los formularios ya están creados, la versión anterior de la pregunta todavía está activa. Para cambiar a la versión más reciente, elimine los formularios y cambie la versión manualmente.';
$string['recordupdateanddocscreatedversion'] = 'Las preguntas fueron actualizadas  pero los formularios ya están creados. Por favor, compruebe si los cambios no introdujeron cambios que afecten la calificación.';
$string['recreatepdfs'] = 'Rehacer PDFs';
$string['recurse'] = 'Incluir también preguntas de subcategorías';
$string['rediswrong'] = 'cruz equivocada o cruz perdida';
$string['refreshpreview'] = 'Refrescar vista previa';
$string['regrade'] = 'Recalificación';
$string['regradedisplayexplanation'] = '<b>Atención:</b> ¡La recalificación no cambia las puntuaciones que han sido sobrescritas manualmente!';
$string['regradinginfo'] = 'Si cambia la puntuación de una pregunta, debe recalificar el cuestionario offline para actualizar los resultados de los participantes.';
$string['regradingquiz'] = 'Recalificando';
$string['regradingresult'] = 'Resultado de la recalificación del usuario {$a}...';
$string['reloadpreview'] = 'Recargar vista previa';
$string['reloadquestionlist'] = 'Recargar la lista de preguntas';
$string['remove'] = 'Eliminar';
$string['removeemptypage'] = 'Eliminar página vacía';
$string['removepagebreak'] = 'Eliminar salto de página';
$string['removeselected'] = 'Eliminar seleccionado';
$string['reordergroupquestions'] = 'Reordenar Grupo de Preguntas';
$string['reorderquestions'] = 'Reordenar preguntas';
$string['reordertool'] = 'Mostrar la herramienta de reordenación';
$string['repaginate'] = 'Repaginar con preguntas {$a} por página';
$string['repaginatecommand'] = 'Repaginar';
$string['repaginatenow'] = 'Repaginar ahora';
$string['reportends'] = 'Finaliza la revisión de resultados';
$string['reportoverview'] = 'Resumen';
$string['reportstarts'] = 'Empieza la revisión de resultados';
$string['resetofflinequizzes'] = 'Reiniciar los datos del cuestionario offline';
$string['resultexists'] = 'Ya existe un resultado igual para {$a}, importación ignorada';
$string['resultimport'] = 'Subir';
$string['results'] = 'Resultados';
$string['resultsavailable'] = 'Cantidad de resultados disponibles:';
$string['review'] = 'Revisión';
$string['reviewbefore'] = 'Permitir revisión mientras el cuestionario offline esta abierto';
$string['reviewclosed'] = 'Después de que el cuestionario offline está cerrado';
$string['reviewcloses'] = 'Cierre de la revisión';
$string['reviewimmediately'] = 'Inmediatamente después del intento';
$string['reviewincludes'] = 'La revisión incluye';
$string['reviewofresult'] = 'Revisión de resultados';
$string['reviewopens'] = 'Apertura de la revisión';
$string['reviewoptions'] = 'Los estudiantes pueden ver';
$string['reviewoptions_help'] = 'Con estas opciones, puede controlar lo que los estudiantes verán después de importar los resultados. También puede definir la hora de inicio y finalización del informe de resultados.

Las casillas indican:

**El intento**: Se mostrará el texto de las preguntas y respuestas a los estudiantes. Verán las respuestas que eligieron, pero no se indicarán las correctas.

**Si fue correcta**: Esta opción solo se puede activar si la opción "El intento" está activada. Si está activada, los estudiantes pueden ver cuáles de las respuestas elegidas son correctas (fondo verde) o incorrectas (fondo rojo).

**Puntos**: Se muestran el grupo (p. ej., B), las puntuaciones (calificación obtenida, calificación total de las preguntas, porcentaje obtenido, p. ej., 40/80 (50)) y la calificación (p. ej., 50 de un máximo de 100). Además, si se selecciona "El intento", se muestran la puntuación obtenida y la puntuación máxima para cada pregunta.

**Retroalimentación específica**: retroalimentación que depende de la respuesta que dio el estudiante.

**Retroalimentación general**: La retroalimentación general se muestra al estudiante después de importar los resultados. A diferencia de la retroalimentación específica, que depende del tipo de pregunta y de la respuesta del estudiante, el mismo texto de retroalimentación general se muestra a todos los estudiantes. Puede usar la retroalimentación general para proporcionar a los estudiantes una respuesta completa y, quizás, un enlace a más información que puedan usar si no entendieron las preguntas.

**Respuestas correctas**: Se muestran las respuestas correctas e incorrectas. Esta opción solo está disponible si se configura "El intento".

**Formulario escaneado**: Se muestran los formularios de respuestas escaneados. Las casillas marcadas están marcadas con cuadrados verdes.

**Formulario escaneado con calificaciones**: Se muestran los formularios de respuestas escaneados. Las casillas marcadas están marcadas con cuadrados verdes. Se resaltan las calificaciones incorrectas y las calificaciones faltantes. Además, una tabla muestra la calificación máxima y la calificación obtenida para cada pregunta.';
$string['reviewoptionsheading'] = 'Opciones de revisión';
$string['rimport'] = 'Subir';
$string['rotate'] = 'Rotar';
$string['rotatingsheet'] = 'La hoja está rotada...';
$string['save'] = 'Guardar';
$string['saveandshow'] = 'Guardar y mostrar cambios al estudiante';
$string['savescannersettings'] = 'Guardar ajustes de escaneo';
$string['scannedform'] = 'Formulario escaneado';
$string['scannerformfortype'] = 'Formulario para el tipo {$a}';
$string['scanneroptions'] = 'Ajustes de escaneo';
$string['scannerpdfs'] = 'Formularios vacíos';
$string['scannerpdfstext'] = 'Descargar los siguientes formularios vacíos si quiere utilizar su propio programa de escaneo.';
$string['scanningoptionsheading'] = 'Opciones de escaneo';
$string['score'] = 'Puntuación';
$string['search:activity'] = 'Cuestionario offline - información de actividad';
$string['select'] = 'Seleccione';
$string['selectagroup'] = 'Seleccione un grupo';
$string['selectall'] = 'Seleccionar todo';
$string['selectcategory'] = 'Seleccione una categoría';
$string['selectdifferentgroup'] = '¡Por favor, seleccione un grupo diferente!';
$string['selectedattempts'] = 'Intentos seleccionados...';
$string['selectformat'] = 'Seleccione formato...';
$string['selectgroup'] = 'Seleccione un grupo';
$string['selectlist'] = 'Por favor, seleccione una lista o intente reajustar la hoja:';
$string['selectmultipletoolbar'] = 'Seleccione barra de herramientas multiple';
$string['selectnone'] = 'Deseleccionar todo';
$string['selectpage'] = 'Por favor, seleccione el número de página o intente reajustar la hoja:';
$string['selectquestiontype'] = '-- Seleccione tipo de pregunta --';
$string['showallparts'] = 'Mostrar todos los {$a} participantes';
$string['showcopyright'] = 'Mostrar mensaje de copyright';
$string['showcopyrightdesc'] = 'Si habilita esta opción , un mensaje de copyright será mostrado en la hoja de revisión de resultados del estudiante.';
$string['showgrades'] = 'Imprimir puntuación de las preguntas';
$string['showgrades_help'] = 'Esta opción controla si las puntuaciones máximas de las preguntas del cuestionario offline deben ser impresas en la hoja de preguntas.';
$string['showmissingattemptonly'] = 'Mostrar todos los estudiantes marcados sin resultados';
$string['showmissingcheckonly'] = 'Mostrar todos los estudiantes desmarcados con resultados';
$string['shownumpartsperpage'] = 'Mostrar {$a} participantes por páginas';
$string['showquestioninfo'] = 'Imprimir información sobre las preguntas';
$string['showquestioninfo_help'] = 'Con esta opción puede controlar que información adicional sobre la pregunta es impresa en la hoja de preguntas.
Puede seleccioner una de estas:
<ul>
<li> Nada
<li> Tipo de preguntas - Dependiendo del tipo de preguntas  será impreso una sóla opción, opción múltiple, opción multiple todo-nada.
<li> Número de respuestas correctas - Será impreso el número de respuestas correctas.
</ul>';
$string['showstudentview'] = 'Mostrar vista del estudiante';
$string['showtutorial'] = 'Mostrar un tutorial del cuestionario offline a los estudiantes.';
$string['showtutorial_help'] = 'Esta opción determina si los estudiantes pueden ver un tutorial básico sobre los cuestionarios offline.
El tutorial proporciona información sobre cómo manejar los diferentes tipos de documentos en los cuestionarios offline. En una parte interactiva aprender cómo marcar su identificación de forma correcta.
<b>Nota:</b><br />
Si usted deja esta opción en "Sí" pero oculta el cuestionario offline, el enlace al tutorial no será visible. En este caso, puede añadir un enlace al tutorial en la página del curso.';
$string['showtutorialdescription'] = 'Puede añadir un enlace al tutorial en la página del curso utilizando esta URL:';
$string['shuffleanswers'] = 'Barajar respuestas';
$string['shufflequestions'] = 'Barajar preguntas';
$string['shufflequestionsanswers'] = 'Barajar preguntas y respuestas';
$string['shufflequestionsselected'] = 'Barajar preguntas está activado, por tanto, algunas acciones relacionadas con las páginas no estas disponibles. Para cambiar la opción de barajar, {$a}.';
$string['shufflewithin'] = 'Barajar opciones';
$string['shufflewithin_help'] = 'Si se habilita, las partes que componen una pregunta serán barajadas aleatoriamente cada vez que se pulse el botón de recarga en el formulario de vista previa. NOTA: Este ajuste sólo se aplica a las preguntas que tiene activada la opción de barajar opciones.';
$string['signature'] = 'Firma';
$string['singlechoice'] = 'Respuesta única';
$string['standard'] = 'Estándar';
$string['starttutorial'] = 'Iniciar tutorial sobre el examen';
$string['statistics'] = 'Estadística';
$string['statisticsplural'] = 'Estadísticas';
$string['statisticsviewheader'] = '3. Estadísticas';
$string['statsoverview'] = 'Resumen de las estadísticas';
$string['studycode'] = 'Código de estudio';
$string['subplugintype_offlinequiz'] = 'Informe de cuestionario offline';
$string['subplugintype_offlinequiz_plural'] = 'Informes de cuestionario offline';
$string['tabattendances'] = 'Asistentes';
$string['tabattendancesoverview'] = 'Asistencias';
$string['tabdownloadparticipantsforms'] = 'Formularios de asistencia';
$string['tabdownloadquizforms'] = 'Formularios';
$string['tabeditgrades'] = 'Calificaciones';
$string['tabeditgroupquestions'] = 'Preguntas';
$string['tabeditparticipants'] = 'Participantes';
$string['tabofflinequizcontent'] = 'Preparación';
$string['tabofflinequizcorrect'] = 'Corrección';
$string['tabofflinequizupload'] = 'Subir';
$string['tabparticipantlists'] = 'Definir listados de asistencia';
$string['tabparticipantscorrect'] = 'Corregir';
$string['tabparticipantsupload'] = 'Subir';
$string['tabpreview'] = 'Impresos y vista previa';
$string['tabquestionandanswerstats'] = 'Análisis de preguntas y respuestas';
$string['tabquestionstats'] = 'Análisis de preguntas';
$string['tabresults'] = 'Resultados';
$string['tabresultsoverview'] = 'Resultados';
$string['tabstatistics'] = 'Estadísticas';
$string['tabstatsoverview'] = 'Información del cuestionario';
$string['temporaryfiledeletiontask'] = 'Borrar archivos temporales';
$string['theattempt'] = 'El intento';
$string['timesup'] = '¡Se acabó el tiempo!';
$string['totalmarksx'] = 'Total calificaciones: {$a}';
$string['totalpointsx'] = 'Total calificaciones: {$a}';
$string['totalquestionsinrandomqcategory'] = 'Total de {$a} preguntas en la categoría.';
$string['trigger'] = 'límite inferior/superior';
$string['tutorial'] = 'Tutorial para cuestionarios offline';
$string['tutorial:feedback:1:1'] = 'En el formulario de respuesta no se muestran las preguntas; solo contiene las casillas para marcar las respuestas.';
$string['tutorial:feedback:1:2'] = 'El diseño de la hoja de preguntas que entregará el profesor no tiene por qué ser exactamente igual al de la captura de pantalla. Sólo sirve para ver el enunciado de las preguntas y no se escanea después del examen.';
$string['tutorial:feedback:2:1'] = 'Esta cruz es demasiado pálida. Es posible que no se escanee correctamente.';
$string['tutorial:feedback:2:2'] = 'Una cruz de anchura de línea normal siempre se interpretará correctamente.';
$string['tutorial:feedback:2:3'] = 'Una cruz gruesa podría interpretarse como que se ha rectificado (es decir que se ha rellenado completamente la casilla).';
$string['tutorial:feedback:2:4'] = 'Una caja vacía nunca se interpretará como una cruz.';
$string['tutorial:feedback:2:5'] = 'Una casilla completamente rellena se interpreta exactamente igual que una vacía.';
$string['tutorial:feedback:3:1'] = 'Sólo se escanean las cruces de las casillas. Por eso es tan importante marcar las casillas correctas bajo su número de identificación.';
$string['tutorial:feedback:3:2'] = 'Sólo se escanean las cruces de las casillas. Por eso es tan importante marcar las casillas correctas bajo su número de identificación.';
$string['tutorial:feedback:3:3'] = 'Sólo se escanean las cruces de las casillas. Por eso es tan importante marcar las casillas correctas bajo su número de identificación.';
$string['tutorial:feedback:3:4'] = 'Sólo se escanean las cruces de las casillas. Por eso es tan importante marcar las casillas correctas bajo su número de identificación.';
$string['tutorial:feedback:4:0'] = 'Ha cometido un error. Su número de matrícula es {$a->correctusernumber}, pero ha marcado {$a->selectedusernumber}.';
$string['tutorial:feedback:4:1'] = 'Ha completado con éxito este tutorial.';
$string['tutorial:feedback:correct'] = '¡Correcto!';
$string['tutorial:feedback:wrong'] = '¡Mal!';
$string['tutorial:generatedusernumberwarning'] = 'Este es un número de identificación ficticio para esta simulación, ya que su perfil no tiene ninguno. Consulte con su profesor.';
$string['tutorial:header:1'] = '1. Hojas de preguntas y formularios de respuestas';
$string['tutorial:header:2'] = '2. Cruces y correcciones';
$string['tutorial:header:3'] = '3. El formulario de respuestas';
$string['tutorial:header:4'] = '4. Marcar el número de identificación';
$string['tutorial:header:5'] = '5. Finalmente...';
$string['tutorial:introduction:1'] = 'En el examen tendrás dos hojas: una con las preguntas y otra con casillas para marcar tus respuestas. Las preguntas están numeradas igual que las casillas del formulario de respuestas. Cada respuesta se marca con una letra. Después del examen, un ordenador escaneará e interpretará el formulario de respuestas.';
$string['tutorial:introduction:2:1'] = 'Las casillas de la hoja de respuestas tienen 5 milímetros de ancho. Las casillas con las opciones de respuesta a la misma pregunta están en una fila. El número de la pregunta está a la izquierda y la letra correspondiente al elemento de respuesta está en la parte superior de la columna.';
$string['tutorial:introduction:2:2'] = 'Utilice un bolígrafo negro o azul para marcar los campos. Si desea corregir una marca, rellene la casilla por completo. Este campo se interpretará entonces como una casilla vacía.';
$string['tutorial:introduction:3:1'] = 'El formulario de respuestas contiene un bloque para su nombre (A), un bloque para su número de identificación (B) y un bloque para las respuestas (C). Rellene primero las casillas correspondientes a su nombre, firma y número de identificación. Tenga en cuenta que la máquina no intentará interpretar su letra después del examen. Estas casillas son sólo a efectos de documentación.';
$string['tutorial:introduction:3:2'] = 'Marque cuidadosamente las casillas correspondientes a su número de identificación, ya que el ordenador necesitará estas marcas para identificar sus resultados. Los errores en la casilla con su número de matrícula pueden provocar retrasos e interpretaciones erróneas.';
$string['tutorial:introduction:4'] = 'Al final de este tutorial le ofrecemos una pequeña prueba para que aprenda a rellenar correctamente las casillas de su número de identificación. Debajo de la casilla de su número de identificación hay una matriz de casillas. Cada columna representa un dígito de su número de matrícula. Las filas marcan los números escritos a la izquierda y a la derecha. Haga clic en las casillas para marcarlas. Vuelva a hacer clic para borrar la marca. Si quiere empezar de nuevo, por favor <a href="javascript: document.location.reload()">recargue la página</a>.';
$string['tutorial:introduction:5'] = 'Tenga en cuenta que los formularios de respuesta serán interpretados por un ordenador. Esta máquina no puede leer nada de lo que usted escriba al lado de las casillas. Para el programa informático, todo lo que hay fuera de las casillas no es más que una mancha que impide a la máquina interpretar correctamente el formulario. Te perjudicas a ti mismo si no colocas las marcas correctamente.';
$string['tutorial:option:1:1'] = 'Un formulario de respuesta';
$string['tutorial:option:1:2'] = 'Una hoja de preguntas';
$string['tutorial:option:3:1'] = 'El sistema lee su nombre mediante un software de reconocimiento óptico de caracteres.';
$string['tutorial:option:3:2'] = 'Su firma se escanea con un programa informático utilizado para las huellas dactilares en las investigaciones penales.';
$string['tutorial:option:3:3'] = 'Sólo se interpretan las cruces de las casillas situadas bajo su número de identificación.';
$string['tutorial:option:3:4'] = 'El sistema lee su número de identificación mediante un programa de reconocimiento óptico de caracteres.';
$string['tutorial:question:1'] = 'Esta imagen muestra:';
$string['tutorial:question:2'] = '¿Qué marca se interpretará con seguridad como una cruz?';
$string['tutorial:question:3'] = '¿Cómo asigna el ordenador el formulario de respuesta a la persona adecuada?';
$string['tutorial:question:4'] = 'Número de identificación';
$string['tutorial:question:5'] = '¡Buena suerte!';
$string['tutorial:questionsheet:1'] = '1)&nbsp;&nbsp; ¿Cuántos documentos offlinequiz se le entregarán durante un examen?';
$string['tutorial:questionsheet:1:1'] = '';
$string['tutorial:questionsheet:1:2'] = '';
$string['tutorial:questionsheet:1:3'] = 'c)&nbsp;&nbsp;2';
$string['tutorial:questionsheet:1:4'] = 'd)&nbsp;&nbsp;3';
$string['tutorial:questionsheet:1:5'] = 'e)&nbsp;&nbsp;4';
$string['tutorial:questionsheet:1:marks'] = '(Puntuación: 1)';
$string['tutorial:questionsheet:2'] = '2)&nbsp;&nbsp; ¿Qué contenido está disponible en un cuestionario del offlinequiz?';
$string['tutorial:questionsheet:2:1'] = 'a)&nbsp;&nbsp;Preguntas';
$string['tutorial:questionsheet:2:2'] = 'b)&nbsp;&nbsp;Opciones de respuesta';
$string['tutorial:questionsheet:2:3'] = 'c)&nbsp;&nbsp;Respuestas correctas';
$string['tutorial:questionsheet:2:4'] = 'd)&nbsp;&nbsp;Más información';
$string['tutorial:questionsheet:2:5'] = 'e)&nbsp;&nbsp;Ninguna de las anteriores';
$string['tutorial:questionsheet:2:marks'] = '(Marcas: 1)';
$string['tutorial:title'] = 'Tutorial';
$string['tutorial:title:navigation'] = 'Navegación';
$string['type'] = 'Tipo';
$string['uncheckparts'] = 'Marcar participantes seleccionados como ausentes';
$string['updatedsumgrades'] = 'La suma de todas las calificaciones del grupo {$a->letter} fue recalculada a {$a->grade}.';
$string['upgradingfilenames'] = 'Subiendo nombres de archivos de documentos: cuestionario offline {$a->done}/{$a->outof} (Offline Quiz ID {$a->info})';
$string['upgradingilogs'] = 'Subiendo páginas escaneadas: página escaneada {$a->done}/{$a->outof} <br/>(Offline Quiz ID {$a->info})';
$string['upgradingofflinequizattempts'] = 'Subiendo intentos de cuestionario offline: cuestionario offline {$a->done}/{$a->outof} <br/>(Offline Quiz ID {$a->info})';
$string['upload'] = 'Subir';
$string['uploadpart'] = 'Subir';
$string['uppertrigger'] = 'Segundo límite mas alto';
$string['uppertriggerzero'] = 'El segundo límite más alto es cero';
$string['upperwarning'] = 'Primer límite más alto';
$string['upperwarningzero'] = 'El primer límite más alto es cero';
$string['useradded'] = 'Usuario {$a} añadido';
$string['userdoesnotexist'] = 'El usuario {$a} no existe en el sistema';
$string['useridentification'] = 'Identificación de usuario';
$string['useridviolation'] = 'Múltiples usuarios encontrados';
$string['userimported'] = 'Usuario {$a} importado y calificado';
$string['usernotincourse'] = 'El usuario {$a} no está en el curso.';
$string['usernotinlist'] = '¡Usuario no registrado en la lista!';
$string['usernotregistered'] = 'El usuario {$a} no está registrado en el curso.';
$string['userpageimported'] = 'Página individual importar para el usuario {$a}';
$string['valuezero'] = 'El valor no debe ser cero';
$string['viewresults'] = 'Ver resultados';
$string['white'] = 'Blanco';
$string['withselected'] = 'Con los seleccionados...';
$string['zerogradewarning'] = 'Atención: ¡La calificación de su cuestionario offline (sin conexión) es 0.0!';
$string['zipfile'] = 'Archivo ZIP';
$string['zipok'] = 'Archivo ZIP importado';
