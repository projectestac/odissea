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
 * Strings for component 'qtype_essay', language 'es', version '3.11'.
 *
 * @package     qtype_essay
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptedfiletypes'] = 'Tipos de archivo aceptados';
$string['acceptedfiletypes_help'] = 'Los tipos de archivo aceptados pueden ser modificados introduciendo una lista de extensiones de archivo. Si el campo está vacío, todos los tipos de archivo serán permitidos.';
$string['allowattachments'] = 'Permitir archivos adjuntos';
$string['answerfiles'] = 'Archivos de respuestas';
$string['answertext'] = 'Texto de la respuesta';
$string['attachedfiles'] = 'Archivos adjuntos: {$a}';
$string['attachmentsoptional'] = 'Los archivos adjuntos son opcionales';
$string['attachmentsrequired'] = 'Archivos adjuntos requeridos';
$string['attachmentsrequired_help'] = 'Esta opción indica el número mínimo de archivos adjuntos necesarios para que la respuesta se considere como evaluable.';
$string['err_maxminmismatch'] = 'El límite máximo de palabras debe ser mayor que el límite mínimo de palabras';
$string['err_maxwordlimit'] = 'El límite máximo de palabras está habilitado pero no está establecido';
$string['err_maxwordlimitnegative'] = 'El límite máximo de palabras no puede ser un número negativo';
$string['err_minwordlimit'] = 'El límite mínimo de palabras está habilitado pero no está establecido';
$string['err_minwordlimitnegative'] = 'El límite mínimo de palabras no puede ser un número negativo';
$string['formateditor'] = 'Editor HTML';
$string['formateditorfilepicker'] = 'Editor HTML con selector de archivos';
$string['formatmonospaced'] = 'Texto sin formato, tipografía monoespaciada';
$string['formatnoinline'] = 'Sin texto en línea';
$string['formatplain'] = 'Texto sin formato';
$string['graderinfo'] = 'Información para evaluadores';
$string['graderinfoheader'] = 'Información del evaluador';
$string['maxbytes'] = 'Tamaño máximo de archivo';
$string['maxwordlimit'] = 'Límite máximo de palabras';
$string['maxwordlimit_help'] = 'Si la respuesta requiere que los estudiantes introduzcan texto, esta es la cantidad máxima de palabras que cada estudiante podrá enviar.';
$string['maxwordlimitboundary'] = 'El límite de palabras para esta pregunta es {$a->limit} palabras y está intentando enviar {$a->count} palabras. Acorte su respuesta e inténtelo de nuevo.';
$string['minwordlimit'] = 'Límite mínimo de palabras';
$string['minwordlimit_help'] = 'Si la respuesta requiere que los estudiantes introduzcan texto, este es el número mínimo de palabras que cada estudiante podrá enviar.';
$string['minwordlimitboundary'] = 'Esta pregunta requiere una respuesta de al menos {$a->limit} palabras y está intentando enviar {$a->count} palabras. Amplíe su respuesta e inténtelo de nuevo.';
$string['mustattach'] = 'Cuando se selecciona "Sin texto en línea" o las respuestas son opcionales, debe permitir al menos un archivo adjunto.';
$string['mustrequire'] = 'Cuando se selecciona "Sin texto en línea" o las respuestas son opcionales, debe solicitar al menos un archivo adjunto.';
$string['mustrequirefewer'] = 'No puede requerir más archivos adjuntos de los que permite.';
$string['nlines'] = '{$a} líneas';
$string['nonexistentfiletypes'] = 'Los siguientes tipos de archivo no fueron reconocidos: {$a}';
$string['pluginname'] = 'Ensayo';
$string['pluginname_help'] = 'En respuesta a una pregunta, el alumno debe subir uno o más ficheros y/o introducir texto en línea. Se puede proporcionar una plantilla de respuesta. Las respuestas deben calificarse de forma manual.';
$string['pluginnameadding'] = 'Agregando una pregunta de ensayo';
$string['pluginnameediting'] = 'Editando una pregunta de ensayo';
$string['pluginnamesummary'] = 'Permite una respuesta de la carga de un archivo y / o texto en línea. A continuación, esto se debe calificar manualmente.';
$string['privacy:metadata'] = 'El complemento de tipo de pregunta de ensayo permite a los autores de preguntas establecer opciones predeterminadas como preferencias del usuario.';
$string['privacy:preference:attachments'] = 'Número de archivos adjuntos permitidos.';
$string['privacy:preference:attachmentsrequired'] = 'Número de archivos adjuntos requeridos.';
$string['privacy:preference:defaultmark'] = 'La marca predeterminada establecida para una pregunta determinada.';
$string['privacy:preference:maxbytes'] = 'Tamaño máximo del archivo.';
$string['privacy:preference:responsefieldlines'] = 'Número de líneas que indican el tamaño del cuadro de entrada (área de texto).';
$string['privacy:preference:responseformat'] = '¿Cuál es el formato de la respuesta (editor HTML, texto plano, etc.)?';
$string['privacy:preference:responserequired'] = 'Si se requiere que el estudiante introduzca texto o la entrada de texto es opcional.';
$string['responsefieldlines'] = 'Tamaño de la caja de entrada';
$string['responseformat'] = 'Formato de la respuesta';
$string['responseisrequired'] = 'Requerir al estudiante que introduzca texto';
$string['responsenotrequired'] = 'El texto es opcional';
$string['responseoptions'] = 'Opciones de respuesta';
$string['responserequired'] = 'Requerir texto';
$string['responsetemplate'] = 'Plantilla de respuesta';
$string['responsetemplate_help'] = 'El texto introducido aquí se mostrará en el cuadro de entrada de respuesta cuando se inicia un nuevo intento de la pregunta a modo de plantilla o guía para su cumplimentación.';
$string['responsetemplateheader'] = 'Plantilla de respuesta';
$string['wordcount'] = 'Cuenta de palabras: {$a}';
$string['wordcounttoofew'] = 'Cuenta de palabras: {$a->count}, menos de las {$a->limit} palabras obligatorias.';
$string['wordcounttoomuch'] = 'Cuenta de palabras: {$a->count}, más del límite de {$a->limit} palabras.';
