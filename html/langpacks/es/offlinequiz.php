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
 * Strings for component 'offlinequiz', language 'es', version '3.11'.
 *
 * @package     offlinequiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add'] = 'Añadir';
$string['addarandomquestion'] = 'preguntas al azar';
$string['addarandomquestion_help'] = 'Moodle agrega una selección aleatoria de preguntas de opción múltiple (o preguntas de todo o nada) al actual Grupo de prueba fuera de línea. Puede establecer el número de preguntas añadido. Las preguntas se eligen de la categoría actual de la cuestión (y si, sus subcategorías).';
$string['addarandomselectedquestion'] = 'Añadir una pregunta seleccionada al azar...';
$string['addlist'] = 'Añadir lista';
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
$string['attendances'] = 'Asistencias';
$string['basicideasofofflinequiz'] = 'Las ideas básicas para hacer cuestionarios offline';
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
$string['configdecimalplaces'] = 'Número de dígitos decimales a mostrar a la hora de mostrar las calificaciones para el cuestionario offline.';
$string['configdisableimgnewlines'] = 'Esta opción deshabilita los saltos de línea antes y después de las imágenes en el pdf de la hoja de preguntas.
Atención: Esto puede causar problemas de formato.';
$string['configexperimentalevaluation'] = 'Evaluación experimental de las hojas de respuesta';
$string['configintro'] = 'Los valores que has especificado son usados como valores por defecto para los nuevos cuestionarios sin conexión.';
$string['configkeepfilesfordays'] = 'Establecer cuántos días se mantendrán los ficheros de imagen cargados al servidor en almacenamiento temporal. Durante este plazo, los ficheros de imagen estarán disponibles en el informe para administradores de cuestionarios offline.';
$string['configonlylocalcategories'] = 'No se permiten categorías de preguntas compartidas.';
$string['configpapergray'] = 'Valor de blanco del papel, que es usado para la evaluación de las hojas de respuesta.';
$string['configshuffleanswers'] = 'Barajar respuestas';
$string['configshufflequestions'] = 'Si habilita esta opción, el orden de las preguntas en los cuestionarios offline de los grupos será mezclado aleatoriamente cada vez que usted genere una vista previa en la pestaña "Crear formularios".';
$string['configshufflewithin'] = 'Si habilita esta opción, las opciones que componen las preguntas individuales serán barajadas aleatoriamente cuando los formularios de pregunta y de respuesta son creados.';
$string['confirmremovequestion'] = '¿Estás seguro que quieres eliminar esta {$a} pregunta?';
$string['copy'] = 'Copiar';
$string['copyright'] = '<strong>Atención: los textos de esta página son sólo para su uso personal. Como otros textos en estas preguntas están bajo restricciones de copyright. ¡No tiene permiso para copiarlos o mostrarlos a otras personas!</strong>';
$string['copyselectedtogroup'] = 'Añadir las preguntas seleccionadas al grupo {$a}';
$string['copytogroup'] = 'Añadir todas las preguntas al cuestionario {$a}';
$string['correct'] = 'corregir';
$string['correcterror'] = 'resolver';
$string['correctforgroup'] = 'Respuestas correctas para el grupo {$a}';
$string['correctionform'] = 'Corrección';
$string['correctionforms'] = 'Formularios de corrección';
$string['correctionoptionsheading'] = 'Opciones de corrección';
$string['correctupdated'] = 'Formulario de corrección actualizado para el grupo {$a}.';
$string['couldnotgrab'] = 'No se pudo seleccionar la imagen {$a}';
$string['couldnotregister'] = 'No se pudo registrar el usuario {$a}';
$string['createcategoryandaddrandomquestion'] = 'Crear categoría y añadir pregunta aleatoria';
$string['createlistfirst'] = 'Añadir participantes';
$string['createofflinequiz'] = 'Crear formularios';
$string['createpartpdferror'] = 'El formulario PDF para la lista de participantes {$a} no se pudo crear. La lista puede estar vacía.';
$string['createpdf'] = 'Formulario PDF';
$string['createpdferror'] = 'El formulario para el grupo {$a} no pudo ser creado. Es posible que no haya preguntas en el grupo.';
$string['createpdffirst'] = 'Crear lista PDF en primer lugar.';
$string['createpdfforms'] = 'Crear formularios';
$string['createpdfs'] = 'Formularios PDF';
$string['createpdfsparticipants'] = 'Formularios PDF para la lista de participantes.';
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
$string['displayoptions'] = 'Opciones de visualización';
$string['done'] = 'hecho';
$string['downloadallzip'] = 'Descargar todos los ficheros en ZIP';
$string['downloadpartpdf'] = 'Descargar el fichero PDF para la lista \'{$a}\\';
$string['downloadpdfs'] = 'Descargar documentos';
$string['downloadresultsas'] = 'Descargar resultados como:';
$string['dragtoafter'] = 'Después de {$a}';
$string['dragtostart'] = 'Volver al principio';
$string['editgroupquestions'] = 'Editar preguntas del grupo';
$string['editgroups'] = 'Editar grupos offline';
$string['editingofflinequiz'] = 'Editando preguntas de grupo';
$string['editingofflinequiz_help'] = 'Cuando se crea un cuestionario offline (sin conexión), los conceptos principales son:
<ul><li>El cuestionario offline, que contiene las preguntas en una o más páginas</li>
<li>El banco de preguntas, que guarda copias de todas las preguntas organizadas en categorías</li></ul>';
$string['editingofflinequizx'] = 'Editar cuestionario offline (sin conexión): {$a}';
$string['editlist'] = 'Editar lista';
$string['editlists'] = 'Editar listas';
$string['editmaxmark'] = 'Editar puntuación máxima';
$string['editofflinequiz'] = 'Editar cuestionario offline (sin conexión):';
$string['editofflinesettings'] = 'Editar configuración offline (sin conexión)';
$string['editorder'] = 'Editar orden';
$string['editparticipants'] = 'Editar participantes';
$string['editquestion'] = 'Editar pregunta';
$string['editquestions'] = 'Editar preguntas';
$string['editscannedform'] = 'Editar formulario escaneado';
$string['editthislist'] = 'Editar esta lista';
$string['emptygroups'] = 'Algunos de los grupos de cuestionario offline (sin conexión) están vacíos. Por favor añada algunas preguntas.';
$string['enroluser'] = 'Matricular usuario';
$string['erroraccessingreport'] = 'No está autorizado para ver este informe.';
$string['errorreport'] = 'Informe de errores de importación';
$string['eventattemptdeleted'] = 'Intento de cuestionario offline eliminado';
$string['eventattemptpreviewstarted'] = 'intento de previsualización de cuestionario offline iniciado';
$string['eventattemptreviewed'] = 'Resultados del cuestionario online revisados';
$string['eventdocscreated'] = 'Formularios de preguntas y de respuestas para el cuestionario offline creados';
$string['eventdocsdeleted'] = 'Formularios de preguntas y de respuestas para el cuestionario offline borrados';
$string['eventquestionmanuallygraded'] = 'Pregunta calificada manualmente';
$string['eventresultsregraded'] = 'Resultados del cuestionario online recalificados';
$string['everythingon'] = 'habilitado';
$string['excelformat'] = 'Hoja de cálculo Excel (XLSX)';
$string['experimentalevaluation'] = 'Evaluación experimental de las hojas de respuesta';
$string['experimentalevaluation_help'] = 'Evaluación experimental de las hojas de respuesta';
$string['fileformat'] = 'Formato para las hojas de pregunta';
$string['fileformat_help'] = 'Elija si quiere las hojas de preguntas en formato PDF, DOCX o TEX. Las hojas de los formularios de respuesta y los formularios de corrección son generados siempre en PDF.';
$string['filesizetolarge'] = 'Algunos de sus archivos de imágenes son muy grandes. Las dimensiones serán ajustadas durante la decodificación. Por favor, intente escanear a una resolución entre 200 y 300 dpi y en modo blanco y negro. Esto acelerará la decodificación la próxima vez.';
$string['fontsize'] = 'Tamaño de letra';
$string['forautoanalysis'] = 'Para análisis automático';
$string['formforcorrection'] = 'Formulario de correción para el grupo {$a}';
$string['formforgroup'] = 'Formulario de preguntas para el grupo {$a}';
$string['formforgroupdocx'] = 'Formulario de preguntas para el grupo {$a} (DOCX)';
$string['formforgrouplatex'] = 'Formulario de preguntas para el grupo {$a} (LATEX)';
$string['formsexist'] = 'Formularios ya creados.';
$string['formsexistx'] = 'Los formularios se han creado (<a href="{$a}">Descargar formularios</a>)';
$string['formsheetsettings'] = 'Ajustes de formulario';
$string['formspreview'] = 'Vista previa para formularios';
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
$string['gradingofflinequizx'] = 'Calificaciones:  {$a}';
$string['gradingoptionsheading'] = 'Opciones de calificación';
$string['greeniscross'] = 'contado como una cruz';
$string['group'] = 'Grupo';
$string['groupoutofrange'] = 'El grupo estaba fuera de rango y remplazado por el grupo A.';
$string['groupquestions'] = 'Grupo de preguntas';
$string['hasresult'] = 'El resultado existe';
$string['idnumber'] = 'Número ID';
$string['imagefile'] = 'Archivo de imagen';
$string['imagenotfound'] = '¡Archivo de imagen: {$a} no encontrado!';
$string['imagenotjpg'] = 'La imagen no es jpg o png: {$a}';
$string['imagickwarning'] = 'No se encuentra imagemagick: Solicite al administrador de su sistema que instale la librería imagemagick y que compruebe la ruta para convertir binarios en los ajustes de su filtro de notación TeX. ¡No puede importar archivos TIF sin imagemagick!';
$string['import'] = 'Importar';
$string['importedon'] = 'Importado el';
$string['importerror11'] = 'Existe otro resultado';
$string['importerror12'] = 'Usuario no registrado';
$string['importerror13'] = 'No hay datos del grupo';
$string['importerror22'] = 'Marcaciones dudosas';
$string['importerror23'] = 'El usuario no está en la lista';
$string['importerror24'] = 'Lista no detectada';
$string['importforms'] = 'Importar formularios de respuesta';
$string['importfromto'] = 'Importando {$a->from} a {$a->to} de {$a->total}.';
$string['importisfinished'] = 'La importación del cuestionario offline {$a} ha finalizado.';
$string['importlinkresults'] = 'Enlace a los resultados: {$a}';
$string['importlinkverify'] = 'Enlace a la verificación: {$a}';
$string['importmailsubject'] = 'aviso de importación de cuestionario offline';
$string['importnew'] = 'Importar';
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
$string['invalidnumberofdigits'] = 'Número inválido de cifras. Sólo se permiten de 1 a 9 cífras.';
$string['invigilator'] = 'Vigilante';
$string['ischecked'] = 'La participación está marcada';
$string['isnotchecked'] = 'La participación no está marcada';
$string['keepfilesfordays'] = 'Conservar archivospor días';
$string['letter'] = 'Letra';
$string['lightgray'] = 'Gris claro';
$string['linktoscannedform'] = 'Ver formulario escaneado';
$string['listnotdetected'] = '¡No se ha podido detectar el código de barras para la lista!';
$string['logdeleted'] = 'Entrada del registro {$a} borrada.';
$string['logourl'] = 'URL del logo';
$string['lowertrigger'] = 'Segundo límite inferior';
$string['lowertriggerzero'] = 'El segundo límite inferior es cero';
$string['lowerwarning'] = 'Primer límite inferior';
$string['lowerwarningzero'] = 'El primer límite inferior es cero';
$string['marginwarning'] = '¡Por favor, imprima los siguientes archivos PDF sin márgenes adicionales!<br /> Evite repartir fotocopias a los estudiantes. Si tiene alguna duda, solicite copias al equipo de soporte.';
$string['marks'] = 'Puntos';
$string['matrikel'] = 'número de estudiante';
$string['maxgradewarning'] = '¡La calificación máxima debe ser un número!';
$string['maxmark'] = 'Puntuación máxima';
$string['membersinplist'] = '{$a->count} participantes en <a href="{$a->url}">{$a->name}</a>';
$string['missingimagefile'] = 'Archivo de imagen no encontrado';
$string['missingitemdata'] = 'Respuesta(s) ausentes para el usuario {$a}';
$string['missingquestion'] = 'Parece que esta pregunta ya no existe';
$string['missinguserid'] = '¡No se encuentra el número de identificación del usuario! ¡No se puede leer el código de barras!';
$string['modulename'] = 'Cuestionario offline';
$string['modulename_help'] = 'Este módulo permite al profesor diseñar cuestionarios offline compuestos por preguntas de opción múltiple.
Estas preguntas son conservadas en el banco de preguntas de Moodle y pueden ser reutilizadas en el mismo curso e incluso en otros.
Los cuestionarios offline pueden ser descargados como archivos PDF, DOCX o LaTeX. Los estudiantes marcan sus respuestas en formularios en papel. Los formularios en papel son escaneados y las respuestas importadas al sistema.';
$string['modulenameplural'] = 'Cuestionarios offline';
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
$string['noattempts'] = '¡No se importaron resultados!';
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
$string['nothingtodo'] = '¡Nada que hacer!';
$string['notxtfile'] = '';
$string['notyetgraded'] = 'No calificado aún';
$string['numattempts'] = 'Número de resultados importados:  {$a}';
$string['numattemptsqueue'] = '{$a} formulario de respuestas añadido a la cola. Se le enviará un correo electrónico cuando los datos sean procesados.';
$string['numattemptsverify'] = 'Formularios escaneados esperando para corrección: {$a}';
$string['numberformat'] = '¡El valor debe ser un número con {$a} cifras!';
$string['numbergroups'] = 'Número de grupos';
$string['numpages'] = '{$a} páginas importadas';
$string['numquestionsx'] = 'Preguntas: {$a}';
$string['numusersadded'] = '{$a} participantes añadidos';
$string['odsformat'] = 'Hoja de cálculo OpenDocument (ODS)';
$string['offlinequiz:addinstance'] = 'Añadir un cuestionario offline';
$string['offlinequiz:createofflinequiz'] = 'Crear formularios de cuestionario offline';
$string['offlinequiz:deleteattempts'] = 'Borrar resultados del cuestionario offline';
$string['offlinequiz:grade'] = 'Calificar cuestionarios offline (sin conexión) manualmente';
$string['offlinequiz:manage'] = 'Gestionar cuestionarios offline';
$string['offlinequiz:preview'] = 'Vista previa de cuestionarios offline';
$string['offlinequiz:view'] = 'Ver información del cuestionario offline';
$string['offlinequiz:viewreports'] = 'Ver registros del cuestionario offline';
$string['offlinequizcloses'] = 'El cuestionario offline se cierra';
$string['offlinequizcloseson'] = 'La revisión para este cuestionario offline se cierra {$a}';
$string['offlinequizisclosed'] = 'Cuestionario offline cerrado)';
$string['offlinequizisclosedwillopen'] = 'Cuestionario offline cerrado (se abre el {$a})';
$string['offlinequizisopen'] = 'Este cuestionario offline esta abierto';
$string['offlinequizisopenwillclose'] = 'Cuestionario offline (sin conexión) abierto (se cierra el {$a})';
$string['offlinequizopenedon'] = 'Este cuestionario offline se abrió el {$a}';
$string['offlinequizopens'] = 'El cuestionario offline se abre';
$string['offlinequizsettings'] = 'Ajustes sin conexión';
$string['offlinequizwillopen'] = 'El cuestionario offline se abre el {$a}';
$string['oneclickenroldesc'] = 'Si se activa esta opción los profesores tienen la posibilidad de matricular usuarios con un clic mientras están corrigiendo los formularios de respuestas (error "El usuario no está en el curso").';
$string['oneclickroledesc'] = 'Elija el rol usado para matriculación en un clic. Sólo pueden seleccionarse roles con el arquetipo "Estudiante".';
$string['onlylocalcategories'] = 'Sólo categorías locales de preguntas';
$string['orderandpaging'] = 'Orden y paginación';
$string['orderandpaging_help'] = 'Los número 10, 20, 30, ... enfrente de cada preguntas indica el orden de las preguntas. Los números aumentan en intervalos de 10 para dejar espacio para insertar preguntas adicionales. Para reordenar las preguntas, cambie los números y pulse el botón "Reordenar preguntas".

Para añadir saltos de página después de determinadas preguntas, marque las casillas junto a las preguntas y pulse el botón "Añadir saltos de página después de las preguntas seleccionadas".

Para repartir las preguntas en un número de páginas, pulse el botón de repaginación y seleccione el número deseado de preguntas por página.';
$string['orderingofflinequiz'] = 'Orden y paginación';
$string['otherresultexists'] = '¡Ya existe un resultado diferente para {$a}, importación ignorada! Borre el resultado primero.';
$string['outof'] = '{$a->grade} fuera del máximo de {$a->maxgrade}';
$string['overallfeedback'] = 'Realimentación general';
$string['overview'] = 'Resumen';
$string['page-mod-offlinequiz-edit'] = 'Editar página del cuestionario offline';
$string['pagecorrected'] = 'Hoja corregida con lista de participantes importada';
$string['pageimported'] = 'Hoja con lista de participantes importada';
$string['pagenotdetected'] = '¡No se puede detectar el código de barras de la página!';
$string['pagenumberimported'] = 'Hoja {$a} con lista de participantes importada';
$string['pagenumberupdate'] = 'Número de página actualizado';
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
$string['participantsinlists'] = 'Participantes en listas';
$string['participantslist'] = 'Lista de participantes';
$string['participantslists'] = 'Participantes';
$string['partimportnew'] = 'Cargando listas de participantes';
$string['partuncheckedwithoutresult'] = '{$a} participantes desmarcados sin resultado';
$string['partuncheckedwithresult'] = '<a href="{$a->url}">{$a->count} participantes desmarcados con resultado</a>';
$string['pdfdeletedforgroup'] = 'Formulario para el grupo {$a} eliminado';
$string['pdfintro'] = 'Información adicional';
$string['pdfintro_help'] = 'Esta información será impresa en la primera página de la hoja de preguntas y debería contener información general sobre como rellenar el formulario de respuesta.';
$string['pdfintrotext'] = '<b>¿Cómo debo marcar correctamente?</b><br /> Este formulario de respuesta será escaneado automáticamente. Por favor, no lo doble o manche. Use un bolígrafo negro o azul para marcar los campos. Si quiere corregir una marca, rellene completamente la casilla con color. Esta casilla será interpretada como una casilla vacía.';
$string['pdfintrotoolarge'] = 'La introducción es demasiado larga (max. 2000 caracteres).';
$string['pdfscreated'] = 'Los formularios PDF han sido creados';
$string['pdfsdeletedforgroup'] = 'Formularios para el grupo {$a} eliminados';
$string['pearlywhite'] = 'Blanco perlado';
$string['pluginadministration'] = 'Administración del cuestionario offline';
$string['point'] = 'punto';
$string['present'] = 'presentado';
$string['preventsamequestion'] = 'Prevenir el uso múltiple de la misma pregunta en grupos diferentes';
$string['preview'] = 'Vista previa';
$string['previewforgroup'] = 'Previsualización para el grupo {$a}';
$string['previewquestion'] = 'Vista previa de la pregunta';
$string['printstudycodefield'] = 'Añadir un campo para el código de estudio en la hoja de preguntas';
$string['printstudycodefield_help'] = 'Si se marca, se añade un campo para el código de estudio en la primera página de la hoja de preguntas.';
$string['privacy:metadata:offlinequiz:decimalpoints'] = 'La cantidad de puntos decimales para calcular las calificaciones.';
$string['privacy:metadata:offlinequiz_p_lists:name'] = 'el nombre de la lista de participantes';
$string['privacy:metadata:offlinequiz_p_lists:number'] = 'el número de la lista en el cuestionario offline';
$string['privacy:metadata:offlinequiz_p_lists:offlinequizid'] = 'el cuestionario offline al que pertenece esta lista';
$string['privacy:metadata:offlinequiz_queue:importuserid'] = 'El id de usuario del profesor que importó los archivos';
$string['privacy:metadata:offlinequiz_queue:timecreated'] = 'La hora a la que estas hojas de cuestionario offline fueron importadas';
$string['privacy:metadata:offlinequiz_scanned_p_pages:listnumber'] = 'El número de la lista';
$string['questionanalysis'] = 'Análisis de dificultad';
$string['questionanalysistitle'] = 'Tabla de análisis de dificultad';
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
$string['questionsingroup'] = 'Preguntas en grupo';
$string['questionsinthisofflinequiz'] = 'Preguntas en este cuestionario offline (fuera de línea)';
$string['questiontextisempty'] = '[Texto de la pregunta vacío]';
$string['quizdate'] = 'Fechas del cuestionario offline';
$string['quizopenclose'] = 'Fechas de apertura y cierre';
$string['quizopenclose_help'] = 'Los estudiantes sólo pueden ver sus intentos después de la fecha de apertura y antes de la fecha de cierre.';
$string['quizquestions'] = 'Preguntas del cuestionario';
$string['randomfromexistingcategory'] = 'Pregunta aleatoria de una categoría existente';
$string['randomnumber'] = 'Número de preguntas aleatorias';
$string['randomquestionusinganewcategory'] = 'Pregunta aleatoria usando una categoría nueva';
$string['readjust'] = 'Reajuste';
$string['reallydeletepdfs'] = '¿Está seguro de que quiere borrar los archivos de los formularios?';
$string['reallydeleteupdatepdf'] = '¿Realmente quiere borrar y actualizar la lista de participantes?';
$string['recreatepdfs'] = 'Rehacer PDFs';
$string['recurse'] = 'Incluir también preguntas de subcategorías';
$string['rediswrong'] = 'cruz equivocada o cruz perdida';
$string['refreshpreview'] = 'Refrescar vista previa';
$string['regrade'] = 'Recalificar';
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
$string['resultimport'] = 'Importar resultados';
$string['results'] = 'Resultados';
$string['review'] = 'Revisión';
$string['reviewbefore'] = 'Permitir revisión mientras el cuestionario offline esta abierto';
$string['reviewclosed'] = 'Después de que el cuestionario offline está cerrado';
$string['reviewcloses'] = 'Cierre de la revisión';
$string['reviewimmediately'] = 'Inmediatamente después del intento';
$string['reviewincludes'] = 'La revisión incluye';
$string['reviewofresult'] = 'Revisión de resultados';
$string['reviewopens'] = 'Apertura de la revisión';
$string['reviewoptions'] = 'Los estudiantes pueden ver';
$string['reviewoptionsheading'] = 'Opciones de revisión';
$string['rimport'] = 'Subir/Corregir';
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
$string['statsoverview'] = 'Resumen de estadísticas';
$string['studycode'] = 'Código de estudio';
$string['theattempt'] = 'El intento';
$string['timesup'] = '¡Se acabó el tiempo!';
$string['totalmarksx'] = 'Total calificaciones: {$a}';
$string['totalpointsx'] = 'Total calificaciones: {$a}';
$string['totalquestionsinrandomqcategory'] = 'Total de {$a} preguntas en la categoría.';
$string['trigger'] = 'límite inferior/superior';
$string['tutorial'] = 'Tutorial para cuestionarios offline';
$string['type'] = 'Tipo';
$string['uncheckparts'] = 'Marcar participantes seleccionados como ausentes';
$string['updatedsumgrades'] = 'La suma de todas las calificaciones del grupo {$a->letter} fue recalculada a {$a->grade}.';
$string['upload'] = 'Subir/Corregir';
$string['uploadpart'] = 'Subir/Corregir listas de participantes';
$string['uppertrigger'] = 'Segundo límite mas alto';
$string['uppertriggerzero'] = 'El segundo límite más alto es cero';
$string['upperwarning'] = 'Primer límite más alto';
$string['upperwarningzero'] = 'El primer límite más alto es cero';
$string['useradded'] = 'Usuario {$a} añadido';
$string['userdoesnotexist'] = 'El usuario {$a} no existe en el sistema';
$string['useridentification'] = 'Identificación de usuario';
$string['userimported'] = 'Usuario {$a} importado y calificado';
$string['usernotincourse'] = 'El usuario {$a} no está en el curso.';
$string['usernotinlist'] = '¡Usuario no registrado en la lista!';
$string['usernotregistered'] = 'El usuario {$a} no está registrado en el curso.';
$string['userpageimported'] = 'Página individual importada para el usuario {$a}';
$string['valuezero'] = 'El valor no debe ser cero';
$string['viewresults'] = 'Ver resultados';
$string['white'] = 'Blanco';
$string['withselected'] = 'Con los seleccionados...';
$string['zerogradewarning'] = 'Atención: ¡La calificación de su cuestionario offline (sin conexión) es 0.0!';
$string['zipfile'] = 'Archivo ZIP';
$string['zipok'] = 'Archivo ZIP importado';
