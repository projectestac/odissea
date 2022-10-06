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
 * Strings for component 'tool_customlang', language 'ru', version '3.11'.
 *
 * @package     tool_customlang
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkin'] = 'Сохранить строки в языковой пакет';
$string['checkout'] = 'Открыть языковой пакет для редактирования';
$string['checkoutdone'] = 'Языковой пакет загружен';
$string['checkoutinprogress'] = 'Загружается языковой пакет';
$string['cliexportfileexists'] = 'Файл для {$a->lang} уже есть, пропущен. Если вы хотите перезаписать, добавьте опцию --override=true.';
$string['cliexportfilenotfoundforcomponent'] = 'Не найден файл {$a->filepath} для языка {$a->lang}. Этот файл пропущен.';
$string['cliexportheading'] = 'Запущен экспорт языковых файлов.';
$string['cliexportnofilefoundforlang'] = 'Не найден файл для экспорта. Экспорт этого языка пропущен.';
$string['cliexportstartexport'] = 'Экспортируется язык {$a}';
$string['cliexportzipdone'] = 'Создан zip: {$a}';
$string['cliexportzipfail'] = 'Невозможно создать zip {$a}';
$string['clifiles'] = 'Файлы для импорта в {$a}';
$string['cliimporting'] = 'Импорт строк файлов (режим {$a})';
$string['climissingfiles'] = 'Отсутствуют допустимые файлы';
$string['climissinglang'] = 'Отсутствует язык';
$string['climissingmode'] = 'Отсутствующий или неправильный режим (допустимо: все, новые или обновленные)';
$string['climissingsource'] = 'Отсутствует файл или папка';
$string['clinolog'] = 'Нечего импортировать в {$a}';
$string['confirmcheckin'] = 'Вы собираетесь записать изменения в Ваш языковой пакет. При этом настроенные в редакторе строки будут сохранены в каталог данных Moodle и сайт начнёт использовать изменённые строки. Для записи изменений нажмите «Продолжить».';
$string['customlang:edit'] = 'Редактировать локальный перевод';
$string['customlang:export'] = 'Экспортировать локальный перевод';
$string['customlang:view'] = 'Просматривать локальный перевод';
$string['export'] = 'Экспортировать настроенные строки';
$string['exportfilter'] = 'Выбрать компонент(ы) для экспорта';
$string['filter'] = 'Отфильтровать строки';
$string['filtercomponent'] = 'Выводить строки из следующих компонентов системы';
$string['filtercustomized'] = 'Только имеющие локальный перевод';
$string['filtermodified'] = 'Только измененные в этом сеансе';
$string['filteronlyhelps'] = 'Только строки-подсказки';
$string['filtershowstrings'] = 'Отобразить строки';
$string['filterstringid'] = 'Идентификатор строки';
$string['filtersubstring'] = 'Только строки, содержащие';
$string['headingcomponent'] = 'Компонент';
$string['headinglocal'] = 'Локальный перевод';
$string['headingstandard'] = 'Стандартный текст';
$string['headingstringid'] = 'Строка';
$string['import'] = 'Импортировать настроенные строки';
$string['import_all'] = 'Создать или изменить все строки компонента(ов)';
$string['import_mode'] = 'Режим импортирования';
$string['import_new'] = 'Создать только строки, не изменённые локально';
$string['import_update'] = 'Обновить только строки, изменённые локально';
$string['importfile'] = 'Импортировать файл';
$string['langpack'] = 'Компонент(ы) языка';
$string['markinguptodate'] = 'Отметка исправлений как актуальных';
$string['markinguptodate_help'] = 'Локальный перевод может устареть, в том случае, если в английской версии или в основной версии перевода произошли изменения после того, как строка была исправлена на вашем сайте. Проверьте Ваш перевод. Если он остался актуальным, нажмите соответствующую кнопку. В противном случае исправьте перевод.';
$string['markuptodate'] = 'Отметить перевод как актуальный';
$string['modifiedno'] = 'Нет измененных строк для выгрузки.';
$string['modifiednum'] = 'Изменено строк: {$a}. Вы хотите сохранить эти изменения в локальном языковом пакете?';
$string['nolocallang'] = 'Не найдено локальных строк.';
$string['nostringsfound'] = 'Строки, соответствующие критериям, не найдены. Измените настройки фильтра.';
$string['notice_ignorenew'] = 'Строка {$a->component}/{$a->stringid} игнорируется, т. к. она не настраиваема.';
$string['notice_ignoreupdate'] = 'Строка {$a->component}/{$a->stringid} игнорируется, т. к. она уже определена.';
$string['notice_inexitentstring'] = 'Строка {$a->component}/{$a->stringid} не найдена.';
$string['notice_missingcomponent'] = 'Отсутсвует компонент {$a->component}.';
$string['notice_success'] = 'Строка {$a->component}/{$a->stringid} успешно обновлена.';
$string['placeholder'] = 'Подстановки';
$string['placeholder_help'] = 'Подстановки в строке, это специальные выражения вида «{$a}» или «{$a->something}». Когда строка выводится на экран, они заменяются на какие-то значения.

Очень важно копировать их точно в том же виде, в каком они встречаются в исходной строке. Не пытайтесь переводить их.';
$string['placeholderwarning'] = 'строка содержит подстановку';
$string['pluginname'] = 'Локальные изменения языкового пакета';
$string['privacy:metadata'] = 'Плагин Локальное изменение перевода не хранит никаких персональных данных.';
$string['savecheckin'] = 'Записать изменения в языковой пакет';
$string['savecontinue'] = 'Сохранить изменения и продолжить редактирование';
