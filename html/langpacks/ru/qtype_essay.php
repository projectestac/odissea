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
 * Strings for component 'qtype_essay', language 'ru', version '4.5'.
 *
 * @package     qtype_essay
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptedfiletypes'] = 'Разрешенные типы файлов';
$string['acceptedfiletypes_help'] = 'Принимаемые типы файлов могут быть ограничены путем ввода списка их расширений. При пустом поле разрешены все типы файлов.';
$string['allowattachments'] = 'Разрешить вложения';
$string['answerfiles'] = 'Файлы ответа';
$string['answertext'] = 'Текст ответа';
$string['attachedfiles'] = 'Вложения: {$a}';
$string['attachmentsoptional'] = 'Вложения не обязательны';
$string['attachmentsrequired'] = 'Требуемое число вложений';
$string['attachmentsrequired_help'] = 'Этот параметр определяет минимальное количество вложений, необходимых для оценивания ответа.';
$string['err_maxminmismatch'] = 'Максимальное количество слов должен быть больше минимального';
$string['err_maxwordlimit'] = 'Максимальный предел слов включен, но не задан';
$string['err_maxwordlimitnegative'] = 'Максимальное количество слов не может быть отрицательным числом.';
$string['err_minwordlimit'] = 'Минимальный предел слов включен, но не задан';
$string['err_minwordlimitnegative'] = 'Минимальное количество слов не может быть отрицательным числом';
$string['formateditor'] = 'HTML-редактор';
$string['formateditorfilepicker'] = 'HTML-редактор с выбором файлов';
$string['formatmonospaced'] = 'Обычный текст, моноширинный шрифт';
$string['formatnoinline'] = 'Без области для ввода текста';
$string['formatplain'] = 'Обычный текст';
$string['graderinfo'] = 'Информация для оценивающих';
$string['graderinfoheader'] = 'Информация для оценивающего';
$string['maxbytes'] = 'Максимальный размер файла';
$string['maxwordlimit'] = 'Максимальное количество слов';
$string['maxwordlimit_help'] = 'Если в ответе требуется, чтобы студенты вводили текст, то этот параметр задает максимальное количество слов, которое каждый студент может отправить.';
$string['maxwordlimitboundary'] = 'Максимальное количество слов для этого вопроса - {$a->limit}. Вы пытаетесь отправить слов: {$a->count}. Сократите ответ и попробуйте еще раз.';
$string['minwordlimit'] = 'Минимальное количество слов';
$string['minwordlimit_help'] = 'Если в ответе требуется, чтобы студенты вводили текст, то этот параметр задает минимальное количество слов, которое каждый студент может отправить.';
$string['minwordlimitboundary'] = 'В ответе на этот вопрос требуется не менее {$a->limit} слов(а). Вы пытаетесь отправить слов: {$a->count}. Расширьте свой ответ и попробуйте еще раз.';
$string['mustattach'] = 'Когда выбран режим «Без области для ввода текста» или ответы не являются обязательными, вы должны разрешить хотя бы одно вложение.';
$string['mustrequire'] = 'Когда выбран формат «Без области для ввода текста» или ответы не являются обязательными, необходимо потребовать хотя бы одно вложение.';
$string['mustrequirefewer'] = 'Вы не можете требовать больше вложений, чем разрешили.';
$string['nlines'] = '{$a} строк';
$string['nonexistentfiletypes'] = 'Следующие типы файлов не распознались: {$a}';
$string['pluginname'] = 'Эссе';
$string['pluginname_help'] = 'В качестве ответа на вопрос студент может загрузить один или несколько файлов и/или ввести текст. Может быть предоставлен шаблон ответа. Ответы должны оцениваться вручную.';
$string['pluginname_link'] = 'question/type/essay';
$string['pluginnameadding'] = 'Добавление вопроса «Эссе»';
$string['pluginnameediting'] = 'Редактирование вопроса «Эссе»';
$string['pluginnamesummary'] = 'Допускает в ответе загрузить файл и/или ввести текст. Ответ должен быть оценен преподавателем вручную.';
$string['privacy:metadata'] = 'Плагин «Тип вопроса Эссе» позволяет авторам вопросов устанавливать параметры по умолчанию как пользовательские настройки.';
$string['privacy:preference:attachments'] = 'Разрешенное количество вложений.';
$string['privacy:preference:attachmentsrequired'] = 'Необходимое количество вложений.';
$string['privacy:preference:defaultmark'] = 'Оценка по умолчанию, установленная для данного вопроса.';
$string['privacy:preference:maxbytes'] = 'Максимальный размер файла.';
$string['privacy:preference:responsefieldlines'] = 'Количество строк, указывающих размер поля ввода (текстовая область).';
$string['privacy:preference:responseformat'] = 'Какой формат ответа (HTML-редактор, обычный текст и т.д.)?';
$string['privacy:preference:responserequired'] = 'Требуется ли от студента вводить текст или ввод текста является необязательным.';
$string['responsefieldlines'] = 'Размер поля';
$string['responseformat'] = 'Формат ответа';
$string['responseisrequired'] = 'Требовать от студента ввода текста';
$string['responsenotrequired'] = 'Ввод текста не обязателен';
$string['responseoptions'] = 'Опции ответа';
$string['responserequired'] = 'Требовать текст';
$string['responsetemplate'] = 'Шаблон ответа';
$string['responsetemplate_help'] = 'Любой написанный здесь текст будет введен в поле ответа при начале новой попытки.';
$string['responsetemplateheader'] = 'Шаблон ответа';
$string['wordcount'] = 'Количество слов: {$a}';
$string['wordcounttoofew'] = 'Количество слов: {$a->count}. Это меньше необходимых слов: {$a->limit}.';
$string['wordcounttoomuch'] = 'Количество слов: {$a->count}. Это больше, чем допустимо слов:{$a->limit}.';
