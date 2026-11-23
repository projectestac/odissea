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
 * Strings for component 'tool_migratehvp2h5p', language 'ru', version '4.5'.
 *
 * @package     tool_migratehvp2h5p
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['attempted'] = 'Пользователи с попытками';
$string['cannot_migrate'] = 'Не удается перенести активный элемент';
$string['contenttype'] = 'Тип контента';
$string['copy2cb'] = 'Следует ли добавить эти материалы в банк контента?';
$string['copy2cb_no'] = 'Нет, их следует создать только в активном элементе.';
$string['copy2cb_yeswithlink'] = 'Да, и в активном элементе следует использовать ссылку на эти файлы.';
$string['copy2cb_yeswithoutlink'] = 'Да, но в в активном элементе будет использована копия (изменения в банке контента не будут отражены в активном элементе).';
$string['error_contenttypeh5p_disabled'] = 'Тип H5P в банке контента отключен. Его необходимо включить, чтобы перенести элементы из mod_hvp и добавить их в банк контента. Вы можете включить этот тип контента в разделе «Администрирование сайта | Плагины | Банк контента | Управление типами контента» или снова запустить инструмент переноса и выбрать «Нет, их следует создать только в активном элементе» (или «copy2cb=0», если вы используете CLI), чтобы избежать создания файлов в банке контента.';
$string['error_modh5pactivity_disabled'] = 'Активный элемент H5P отключен. Его необходимо включить для переноса из mod_hvp.';
$string['event_hvp_migrated'] = 'mod_hvp перенесен в mod_h5pactivity';
$string['graded'] = 'Пользователи с оценками';
$string['hvpactivities'] = 'Ожидающие действия mod_hvp';
$string['id'] = 'ID';
$string['keeporiginal'] = 'Выберите, что делать с исходным активным элементом после переноса.';
$string['keeporiginal_delete'] = 'Удалить исходный активный элемент';
$string['keeporiginal_hide'] = 'Скрыть исходный активный элемент';
$string['keeporiginal_nothing'] = 'Оставить исходный активный элемент как он есть';
$string['migrate'] = 'Перенос';
$string['migrate_fail'] = 'Ошибка переноса hvp с ID {$a}';
$string['migrate_gradesoverridden'] = 'Исходный активный элемент mod_hvp «{$a->name}» с ID {$a->id} успешно перенесен. Однако,
в нем перезаписана некоторая информация об оценках, например, обратная связь, которая не была перенесена, поскольку исходный активный элемент
настроен с недопустимой максимальной оценкой (она должна быть выше 0, чтобы быть перенесенной в журнал оценок).';
$string['migrate_gradesoverridden_notdelete'] = 'Исходный активный элемент mod_hvp «{$a->name}» с ID {$a->id} успешно перенесен. Однако,
в нем перезаписана некоторая информация об оценках, например, обратная связь, которая не была перенесена, поскольку исходный активный элемент
настроен с недопустимой максимальной оценкой (она должна быть выше 0, чтобы быть перенесенной в журнал оценок).
Вместо удаления исходный активный элемент был скрыт.';
$string['migrate_success'] = 'Активный элемент HVP с ID {$a} успешно перенесен.';
$string['nohvpactivities'] = 'Нет активных элементов mod_hvp, которые можно было бы перенести в mod_h5p.';
$string['pluginname'] = 'Перенос контента из mod_hvp в mod_h5pactivity';
$string['privacy:metadata'] = 'При переносе контента из mod_hvp в mod_h5pactivity не сохраняются никакие персональные данные.';
$string['savedstate'] = 'Сохранённое состояние';
$string['selecthvpactivity'] = 'Выбрать активный элемент {$a} mod_hvp';
$string['settings'] = 'Настройки переноса';
