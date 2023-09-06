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
 * Strings for component 'condition', language 'ru', version '4.1'.
 *
 * @package     condition
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcompletions'] = 'Добавить проверок выполнения элементов - {no}';
$string['addgrades'] = 'Добавить проверок оценок - {no}';
$string['adduserfields'] = 'Добавить условия пользовательских полей - {No}';
$string['availabilityconditions'] = 'Ограничить доступ';
$string['availablefrom'] = 'Разрешить доступ с';
$string['availablefrom_help'] = 'Даты «Разрешить доступ с»/«Запретить доступ после» определяют, когда студенты могут получить доступ к элементу курса по ссылке со страницы курса.

Отличием между этими параметрами и параметром «Доступность» является то, что вне указанного диапазона дат студенты смогут видеть описание элемента, тогда как параметр «Доступность» предотвращает доступ полностью.';
$string['availableuntil'] = 'Запретить доступ после';
$string['badavailabledates'] = 'Некорректные даты. Если Вы устанавливаете оба условия, то дата «Разрешить доступ с» должна быть перед датой «Запретить доступ после».';
$string['badgradelimits'] = 'Если заданы верхний и нижний пределы оценки, то верхний предел должен быть выше нижнего.';
$string['completion_complete'] = 'элемент должен быть отмечен как выполненный';
$string['completion_fail'] = 'элемент должен быть завершен с оценкой ниже проходного балла';
$string['completion_incomplete'] = 'элемент не должен быть отмечен как выполненный';
$string['completion_pass'] = 'элемент должен быть завершен с оценкой выше проходного балла';
$string['completioncondition'] = 'Проверка выполнения элемента';
$string['completioncondition_help'] = 'Эти настройки определяют, какие условия должны выполняться для получения доступа к данному элементу. Помните, что для установки проверок нужно предварительно включить отслеживание выполнения элементов.

Можно установить несколько условий, но в этом случае доступ к элементу будет дан только при выполнении ВСЕХ условий.';
$string['completionconditionsection'] = 'Условие выполнения элемента';
$string['completionconditionsection_help'] = 'Этот параметр определяет условия выполнения для любого элемента курса, которые должны быть выполнены для того, чтобы получить доступ к разделу. Учтите, сначала необходимо настроить отслеживание выполнения, чтобы стало возможно настраивать условия на состояние выполнения элемента курса.

При желании могут быть заданы условия выполнения нескольких элементов. В этом случае доступ к разделу будет предоставлен только при выполнении условий ВСЕХ элементов.';
$string['configenableavailability'] = 'При включении этого параметра Вы сможете ограничивать доступ к элементам или ресурсам курса в зависимости от даты, оценок или выполнения других элементов.';
$string['contains'] = 'содержит';
$string['doesnotcontain'] = 'не содержит';
$string['enableavailability'] = 'Включить ограничение доступа в зависимости от условий';
$string['endswith'] = 'заканчивается на';
$string['fielddeclaredmultipletimes'] = 'В одном элементе курса нельзя в объявлять одно и то же поле более одного раза.';
$string['grade_atleast'] = 'Оценка должна быть как минимум';
$string['grade_upto'] = 'и меньше, чем';
$string['gradecondition'] = 'Проверка оценки';
$string['gradecondition_help'] = 'Эти настройки определяют, какие условия, связанные с оценками пользователя, должны выполняться, чтобы он получил доступ к элементу.

Можно установить несколько условий, но в этом случае доступ к элементу будет разрешен только при выполнении ВСЕХ условий.';
$string['gradeconditionsection'] = 'Условие оценки';
$string['gradeconditionsection_help'] = 'Этот параметр определяет условие любой оценки, которое должно быть выполнено для того, чтобы получить доступ к разделу. При желании могут быть заданы условия нескольких оценок. В этом случае доступ к разделу будет предоставлен только при выполнении условий ВСЕХ оценок.';
$string['gradeitembutnolimits'] = 'Вы должны ввести верхний или нижний предел, или оба.';
$string['gradelimitsbutnoitem'] = 'Вы должны выбрать оцениваемый элемент.';
$string['gradesmustbenumeric'] = 'Минимальная и максимальная оценки должны быть числовыми (или пустыми).';
$string['groupingnoaccess'] = 'Вы в настоящее время не принадлежите к группе, имеющей доступ к этому разделу.';
$string['isempty'] = 'пустое';
$string['isequalto'] = 'совпадает с';
$string['isnotempty'] = 'не пустое';
$string['none'] = '(нет)';
$string['notavailableyet'] = 'Еще недоступно';
$string['requires_completion_0'] = 'Недоступно, если элемент <strong>{$a}</strong> не завершен.';
$string['requires_completion_1'] = 'Недоступно, пока элемент <strong>{$a}</strong> не отмечен завершенным.';
$string['requires_completion_2'] = 'Недоступно, пока элемент <strong>{$a}</strong> не завершен с проходным баллом.';
$string['requires_completion_3'] = 'Недоступно, если элемент <strong>{$a}</strong> завершен с оценкой ниже проходного балла.';
$string['requires_date'] = 'Доступно с {$a}.';
$string['requires_date_before'] = 'Доступно до {$a}.';
$string['requires_date_both'] = 'Доступно с {$a->from} до {$a->until}.';
$string['requires_date_both_single_day'] = 'Доступно с {$a}.';
$string['requires_grade_any'] = 'Недоступно, пока у Вас нет оценки за <strong>{$a}</strong>.';
$string['requires_grade_max'] = 'Недоступно, пока Вы не получите подходящую оценку за <strong>{$a}</strong>.';
$string['requires_grade_min'] = 'Недоступно, пока Вы не получите необходимую оценку за <strong>{$a}</strong>.';
$string['requires_grade_range'] = 'Недоступно, пока Вы не получите оценку за <strong>{$a}</strong>.';
$string['requires_user_field_contains'] = 'Недоступно, если Ваше поле <strong>{$a->field}</strong> не содержит значение <strong>{$a->value}.</strong>';
$string['requires_user_field_doesnotcontain'] = 'Недоступно, если Ваше поле <strong>{$a->field}</strong> содержит значение <strong>{$a->value}</strong>.';
$string['requires_user_field_endswith'] = 'Недоступно, если Ваше поле <strong>{$a->field}</strong> не заканчивается на <strong>{$a->value}</strong>.';
$string['requires_user_field_isempty'] = 'Недоступно, если Ваше поле <strong>{$a->field}</strong> не пустое.';
$string['requires_user_field_isequalto'] = 'Недоступно, если Ваше поле <strong>{$a->field}</strong> не совпадает с <strong>{$a->value}</strong>.';
$string['requires_user_field_isnotempty'] = 'Недоступно, если Ваше поле <strong>{$a->field}</strong> пустое.';
$string['requires_user_field_startswith'] = 'Недоступно, если Ваше поле <strong>{$a->field}</strong> не начинается с <strong>{$a->value}</strong>.';
$string['showavailability'] = 'Пока элемент недоступен';
$string['showavailability_hide'] = 'Полностью скрыть этот элемент в курсе и журнале оценок.';
$string['showavailability_show'] = 'Отображать элемент серым с информацией об ограничении';
$string['showavailabilitysection'] = 'Пока раздел недоступен';
$string['showavailabilitysection_hide'] = 'Скрыть раздел полностью';
$string['showavailabilitysection_show'] = 'Отображать раздел серым, с информацией об ограничении.';
$string['startswith'] = 'начинается с';
$string['userfield'] = 'Пользовательское поле';
$string['userfield_help'] = 'Вы можете ограничить доступ на основе любого поля из профиля пользователя.';
$string['userrestriction_hidden'] = 'Ограничено (полностью скрыто, без сообщения): {$a}';
$string['userrestriction_visible'] = 'Ограничение: {$a}';
