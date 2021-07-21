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
 * Strings for component 'rating', language 'ru', version '3.11'.
 *
 * @package     rating
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregateavg'] = 'Средняя оценка';
$string['aggregatecount'] = 'Число оценок';
$string['aggregatemax'] = 'Максимальная оценка';
$string['aggregatemin'] = 'Минимальная оценка';
$string['aggregatenone'] = 'Не оценивается';
$string['aggregatesum'] = 'Сумма оценок';
$string['aggregatetype'] = 'Метод расчета итога';
$string['aggregatetype_help'] = 'Этот параметр определяет, каким образом получается оценка, выставляемая в журнал оценок в курсе.

* Средняя оценка - Среднее значение всех оценок
* Число оценок - Оценкой за элемент курса становится общее число оцененных элементов. Учтите, что итоговое значение не может превысить максимальную оценку за этот элемент курса.
* Максимальная оценка - Оценкой становится максимальная из выставленных оценок.
* Минимальная оценка - Оценкой становится минимальная из выставленных оценок.
* Сумма оценок - Все оценки складываются. Учтите, что итоговое значение не может превысить максимальную оценку за этот элемент курса.

Если выбран вариант «Не оценивается», элемент курса не будет отображаться в журнале оценок.';
$string['allowratings'] = 'Разрешить оценивание элементов?';
$string['allratingsforitem'] = 'Все выставленные оценки';
$string['capabilitychecknotavailable'] = 'Невозможно проверить назначение права до сохранения элемента курса';
$string['couldnotdeleteratings'] = 'Извините, это нельзя удалить - уже было оценено';
$string['norate'] = 'Оценивание элементов не разрешено!';
$string['noratings'] = 'Оценки не выставлены';
$string['noviewanyrate'] = 'Вы можете видеть результаты только для своих элементов.';
$string['noviewrate'] = 'Вы не имеете права видеть оценки за элемент';
$string['privacy:metadata:rating'] = 'Выставленные пользователем оценки хранятся вместе с указанием на то, какой элемент оценивался.';
$string['privacy:metadata:rating:rating'] = 'Цифровая оценка, которую ввел пользователь.';
$string['privacy:metadata:rating:timecreated'] = 'Время, когда оценка была выставлена первый раз.';
$string['privacy:metadata:rating:timemodified'] = 'Время, когда оценка последний раз обновлялась.';
$string['privacy:metadata:rating:userid'] = 'Пользователь, который выставил оценку.';
$string['rate'] = 'Оценить';
$string['ratepermissiondenied'] = 'У Вас нет разрешения на оценку этого элемента';
$string['rating'] = 'Оценка';
$string['ratinginvalid'] = 'Некорректная оценка';
$string['ratings'] = 'Оценивание';
$string['ratingtime'] = 'Ограничить оценивание элементов диапазоном дат:';
$string['rolewarning'] = 'Роли, которым дано право выставлять оценки';
$string['rolewarning_help'] = 'Для выставления оценок пользователям нужно иметь право «moodle/rating:rate» и необходимые права в рамках конкретного модуля. Пользователи, которым назначены следующие роли, должны быть в состоянии оценивать элементы. Список ролей может быть изменен с помощью ссылки разрешений в блоке «Администрирование» (зависит от темы).';
$string['scaleselectionrequired'] = 'При выборе типа «Рейтинг» также нужно выбрать используемую шкалу или задать максимальное количество баллов.';
