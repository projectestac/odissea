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
 * Strings for component 'qtype_essay', language 'gl', version '3.11'.
 *
 * @package     qtype_essay
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptedfiletypes'] = 'Tipos de ficheiros aceptados';
$string['acceptedfiletypes_help'] = 'Os tipos de ficheiro aceptados pódense restrinxir introducindo unha lista de extensións de ficheiro. Se deixa o campo baleiro, entón están permitidos todos os tipos de ficheiro.';
$string['allowattachments'] = 'Permitir anexos';
$string['answerfiles'] = 'Ficheiros de resposta files';
$string['answertext'] = 'Texto da resposta';
$string['attachedfiles'] = 'Anexos: {$a}';
$string['attachmentsoptional'] = 'Os anexos son opcionais';
$string['attachmentsrequired'] = 'Requirir anexos';
$string['attachmentsrequired_help'] = 'Esta opción especifica o número mínimo de anexos requiridos para que unha resposta sexa considerada como cualificábel.';
$string['err_maxminmismatch'] = 'O límite máximo de palabras debe ser superior ao límite mínimo de palabras';
$string['err_maxwordlimit'] = 'O límite máximo de palabras está activado mais non está definido';
$string['err_maxwordlimitnegative'] = 'O límite máximo de palabras non pode ser un número negativo';
$string['err_minwordlimit'] = 'O límite mínimo de palabras está activado mais non está definido';
$string['err_minwordlimitnegative'] = 'O límite mínimo de palabras non pode ser un número negativo';
$string['formateditor'] = 'Editor HTML';
$string['formateditorfilepicker'] = 'Editor HTML con selector de ficheiros';
$string['formatmonospaced'] = 'Texto simple, con letra monoespazada';
$string['formatnoinline'] = 'Sen texto en liña';
$string['formatplain'] = 'Texto simple';
$string['graderinfo'] = 'Información para cualificadores';
$string['graderinfoheader'] = 'Información para cualificadores';
$string['maxbytes'] = 'Tamaño máximo de ficheiro';
$string['maxwordlimit'] = 'Límite máximo de palabras';
$string['maxwordlimit_help'] = 'Se a resposta require que os alumnos introduzan texto, este é o número máximo de palabras que cada alumno poderá enviar.';
$string['maxwordlimitboundary'] = 'O límite de palabras para esta pregunta son {$a->limit} palabras e estás a enviar {$a->count} palabras. Acurta a túa resposta e téntao de novo.';
$string['minwordlimit'] = 'Límite mínimo de palabras';
$string['minwordlimit_help'] = 'Se a resposta require que os alumnos introduzan texto, este é o número mínimo de palabras que cada alumno poderá enviar.';
$string['minwordlimitboundary'] = 'Esta pregunta require unha resposta de polo menos {$a->limit} palabras e está intentando enviar {$a->count} palabras. Amplía a túa resposta e téntao de novo.';
$string['mustattach'] = 'Cando se selecciona «Sen texto en liña», ou as respostas son opcionais, Vostede debe permitir polo menos un anexo.';
$string['mustrequire'] = 'Cando se selecciona «Sen texto en liña», ou as respostas son opcionais, Vostede debe requirir polo menos un anexo.';
$string['mustrequirefewer'] = 'Non pode requirir máis anexos dos que permite.';
$string['nlines'] = '{$a} liñas';
$string['nonexistentfiletypes'] = 'Non se recoñeceron os seguintes tipos de ficheiro: {$a}';
$string['pluginname'] = 'Práctica';
$string['pluginname_help'] = 'En resposta a unha pregunta, quen responde pode enviar un ou varios ficheiros e/ou introducir texto en liña. Pode incluírse un modelo de resposta. As respostas deben cualificarse manualmente.';
$string['pluginname_link'] = 'question/type/essay';
$string['pluginnameadding'] = 'Engadir unha pregunta de práctica';
$string['pluginnameediting'] = 'Engadir unha pregunta de práctica';
$string['pluginnamesummary'] = 'Permitir unha resposta dunhas poucas frases ou parágrafos. Daquela debe ser cualificada manualmente.';
$string['privacy:metadata'] = 'O engadido de pregunta de práctica non almacena ningún dato persoal.';
$string['privacy:preference:attachments'] = 'Número de anexos permitidos';
$string['privacy:preference:attachmentsrequired'] = 'Número de anexos requiridos';
$string['privacy:preference:defaultmark'] = 'A marca predeterminada estabelecida para unha determinada pregunta.';
$string['privacy:preference:maxbytes'] = 'Tamaño máximo do ficheiro';
$string['privacy:preference:responsefieldlines'] = 'Número de liñas que indica o tamaño da caixa de entrada (área de texto).';
$string['privacy:preference:responseformat'] = 'Cal é o formato de resposta (editor HTML, texto plano, etc.)?';
$string['privacy:preference:responserequired'] = 'Se o alumno debe introducir texto ou a entrada de texto é opcional.';
$string['responsefieldlines'] = 'Tamaño da caixa de entrada';
$string['responseformat'] = 'Formato da resposta';
$string['responseisrequired'] = 'Requirir que os alumnos escriban texto';
$string['responsenotrequired'] = 'A escritura de texto é opcional';
$string['responseoptions'] = 'Opcións de resposta';
$string['responserequired'] = 'Requirir texto';
$string['responsetemplate'] = 'Modelo da resposta';
$string['responsetemplate_help'] = 'Calquera texto introducido aquí presentarase na caixa de entrada da resposta cando comece un novo intento de resposta.';
$string['responsetemplateheader'] = 'Modelo da resposta';
$string['wordcount'] = 'Reconto de palabras: {$a}';
$string['wordcounttoofew'] = 'Reconto de palabras: {$a->count}, menos do {$a->limit} de palabras necesarias.';
$string['wordcounttoomuch'] = 'Reconto de palabras: {$a->count}, máis do límite de{$a->limit} de palabras.';
