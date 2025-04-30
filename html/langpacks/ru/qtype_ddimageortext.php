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
 * Strings for component 'qtype_ddimageortext', language 'ru', version '4.4'.
 *
 * @package     qtype_ddimageortext
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoredropzones'] = 'Добавить зоны - {no}';
$string['addmoreimages'] = 'Добавить перетаскиваемые элементы -  {no}';
$string['answer'] = 'Ответ';
$string['bgimage'] = 'Фоновое изображение';
$string['blank'] = 'пусто';
$string['correctansweris'] = 'Правильный ответ: {$a}';
$string['deletedchoice'] = '[Удаленный вариант]';
$string['draggableimage'] = 'Перетаскиваемое изображение';
$string['draggableitem'] = 'Перетаскиваемый элемент';
$string['draggableitemheader'] = 'Перетаскиваемый элемент {$a}';
$string['draggableitems'] = 'Перетаскиваемые элементы';
$string['draggableitemtype'] = 'Тип';
$string['draggableword'] = 'Перетаскиваемый текст';
$string['dropbackground'] = 'Фоновое изображение, на которое перетаскиваются объекты';
$string['dropzone'] = 'Зона {$a}';
$string['dropzoneheader'] = 'Зоны';
$string['formerror_disallowedtags'] = 'В этом перетаскиваемом тексте допускаются только теги «{$a}».';
$string['formerror_dragrequired'] = 'Вы должны добавить к этому вопросу хотя бы один перетаскиваемый элемент.';
$string['formerror_droprequired'] = 'Для этого вопроса необходимо определить хотя бы одну зону перетаскивания.';
$string['formerror_multipledraginstance'] = 'Вы более одного раза выбрали это изображение {$a} в качестве правильного ответа для зоны, но оно не отмечено как «Использовать неоднократно».';
$string['formerror_multipledraginstance2'] = 'Вы выбрали это изображение более одного раза в качестве правильного ответа для зоны, но оно не отмечено как «Использовать неоднократно».';
$string['formerror_noallowedtags'] = 'HTML-теги нельзя использовать в тексте, который является альтернативным текстом для перетаскиваемого изображения';
$string['formerror_nobgimage'] = 'Вы должны выбрать изображение для использования в качестве фона для зоны перетаскивания.';
$string['formerror_nofile'] = 'Вам нужно выбрать или загрузить файл.';
$string['formerror_nofile3'] = 'Вам нужно выбрать файл изображения, или удалить связанную метку и снять флажок «Использовать неоднократно».';
$string['formerror_noimageselected'] = 'Вы должны выбрать перетаскиваемый элемент в качестве правильного ответа для этой зоны.';
$string['formerror_notintxleft'] = 'Координата X должна быть целым числом.';
$string['formerror_notintytop'] = 'Координата Y должна быть целым числом.';
$string['formerror_noxleft'] = 'Вы должны указать значение координат для левого верхнего угла этой зоны. Вы можете перетащить и разместить зону, чтобы задать координаты или ввести их вручную.';
$string['formerror_noytop'] = 'Вы должны указать значение координат для левого верхнего угла этой зоны. Вы можете перетащить и разместить зону, чтобы задать координаты или ввести их вручную.';
$string['infinite'] = 'Использовать неоднократно';
$string['label'] = 'Текст';
$string['nolabel'] = 'Нет метки текста';
$string['pleasedraganimagetoeachdropregion'] = 'Ваш ответ не полный. Пожалуйста, перетащите каждый элемент в соответствующую зону.';
$string['pluginname'] = 'Перетаскивание на изображение';
$string['pluginname_help'] = 'Выберите файл с фоновым изображением, выберите перетаскиваемое изображение или текст и задайте зоны, в которые необходимо переместить элементы.
===
Вопросы с перетаскиванием на изображение требуют, чтобы респондент перетаскивал изображения или текстовые метки в определенные зоны на фоновом изображении. Перетаскиваемые элементы могут быть сгруппированы так, чтобы все элементы определенной группы были окрашены так же, как и соответствующие им зоны. Перетаскиваемые элементы, отмеченные как «неоднократные», могут быть размещены более чем в одной зоне.';
$string['pluginname_link'] = 'question/type/ddimageortext';
$string['pluginnameadding'] = 'Добавить вопрос типа «Перетаскивание на изображение»';
$string['pluginnameediting'] = 'Редактировать вопрос типа «Перетаскивание на изображение»';
$string['pluginnamesummary'] = 'Изображение или текст необходимо перетащить в зону на фоновом изображении.

Примечание. Этот тип вопросов затруднителен для пользователей с плохим зрением.';
$string['previewareaheader'] = 'Предварительный просмотр';
$string['previewareamessage'] = 'Выберите фоновое изображение, укажите перетаскиваемые элементы и определите на фоновом изображении зоны, в которые нужно перетаскивать элементы.';
$string['privacy:metadata'] = 'Плагин «Тип вопроса Перетаскивание на изображение» позволяет авторам вопросов устанавливать параметры по умолчанию как пользовательские настройки.';
$string['privacy:preference:defaultmark'] = 'Оценка по умолчанию, установленная для данного вопроса.';
$string['privacy:preference:penalty'] = 'Штраф за каждую неправильную попытку, когда вопросы задаются с использованием режимов поведения «Интерактивный с несколькими попытками» или «Адаптивный».';
$string['privacy:preference:shuffleanswers'] = 'Следует ли автоматически перемешивать ответы.';
$string['refresh'] = 'Обновить предварительный просмотр';
$string['shuffleimages'] = 'Перемешивать перетаскиваемые элементы при каждой попытке';
$string['summarisechoice'] = '{$a->no}. {$a->text}';
$string['summarisechoiceno'] = 'Элемент {$a}';
$string['summariseplace'] = '{$a->no}. {$a->text}';
$string['summariseplaceno'] = 'Зона {$a}';
$string['xleft'] = 'слева';
$string['ytop'] = 'сверху';
