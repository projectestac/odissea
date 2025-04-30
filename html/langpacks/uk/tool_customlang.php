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
 * Strings for component 'tool_customlang', language 'uk', version '4.4'.
 *
 * @package     tool_customlang
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkin'] = 'Зберегти рядки у мовному пакеті';
$string['checkout'] = 'Відкрити мовний пакет для редагування';
$string['checkoutdone'] = 'Мовний пакет завантажено';
$string['checkoutinprogress'] = 'Завантаження мовного пакету';
$string['cliexportfileexists'] = 'Файл для {$a->lang} вже існує, пропускаємо. Якщо ви хочете перезаписати, додайте параметр --override=true.';
$string['cliexportfilenotfoundforcomponent'] = 'Файл {$a->filepath} не знайдено для мови {$a->lang}. Пропускаємо цей файл.';
$string['cliexportheading'] = 'Початок експорту файлів lang.';
$string['cliexportnofilefoundforlang'] = 'Не знайдено файлів для експорту. Пропуск експорту для цієї мови.';
$string['cliexportstartexport'] = 'Експортується мова {$a}';
$string['cliexportzipdone'] = 'Zip створено: {$a}';
$string['cliexportzipfail'] = 'Не вдається створити zip {$a}';
$string['clifiles'] = 'Файли для імпорту в {$a}';
$string['cliimporting'] = 'Рядок імпорту файлів (режим {$a})';
$string['climissingfiles'] = 'Відсутні дійсні файли';
$string['climissinglang'] = 'Відсутня мова';
$string['climissingmode'] = 'Відсутній або недійсний режим (дійсний все, новий або оновлений)';
$string['climissingsource'] = 'Відсутній файл або папка';
$string['clinolog'] = 'Немає нічого для імпорту в {$a}';
$string['confirmcheckin'] = 'Ви збираєтеся зберегти зміни у вашому локальному мовному пакеті. Це експортує налаштовані рядки з перекладача в каталог даних вашого сайту, і ваш сайт почне використовувати змінені рядки. Натисніть «Продовжити», щоб продовжити збереження.';
$string['customlang:edit'] = 'Редагувати локальний мовний пакет';
$string['customlang:export'] = 'Експортувати місцевий переклад';
$string['customlang:view'] = 'Переглядати локальний мовний пакет';
$string['editlangpack'] = 'Редагувати мовний пакет';
$string['export'] = 'Експортувати власні рядки';
$string['exportfilter'] = 'Оберіть компоненти для експорту';
$string['exportzipfilename'] = 'customlang-export-{$a->lang}.zip';
$string['filter'] = 'Фільтр рядків';
$string['filtercomponent'] = 'Показати рядки з таких компонентів';
$string['filtercustomized'] = 'Тільки перекладені';
$string['filtermodified'] = 'Змінено лише в цьому сеансі';
$string['filteronlyhelps'] = 'Тільки допомогу';
$string['filtershowstrings'] = 'Показати рядки';
$string['filterstringid'] = 'Кодифікатор';
$string['filtersubstring'] = 'Тільки рядки, що містять';
$string['headingcomponent'] = 'Компонент';
$string['headinglocal'] = 'Редагування мовного пакету';
$string['headingstandard'] = 'Стандартний текст';
$string['headingstringid'] = 'Рядок';
$string['import'] = 'Імпортуйте власні рядки';
$string['import_all'] = 'Створити або оновити всі рядки з компонента(ів)';
$string['import_mode'] = 'Режим імпорту';
$string['import_new'] = 'Створити лише рядки без локального налаштування';
$string['import_update'] = 'Оновити лише рядки з локальними налаштуваннями';
$string['importfile'] = 'Імпортувати файл';
$string['langpack'] = 'Мовний компонент(и)';
$string['markinguptodate'] = 'Відмітити рядок як актуальний';
$string['markinguptodate_help'] = 'Відредагований переклад може виявитися застарілим, якщо англійський оригінал або основний мовний пакет були модифіковані, поки ви змінювали рядки на вашому сайті. Перегляньте редагований переклад. Якщо його потрібно оновити, відмітьте прапорцем. Відредагуйте у іншому випадку.';
$string['markuptodate'] = 'відмітити як актуальний';
$string['modifiedno'] = 'Немає змінених рядків для збереження.';
$string['modifiednum'] = 'Кількість модифікованих рядків: {$a}. Ви бажаєте зберегти ці зміни у вашому локальному мовному пакеті?';
$string['nolocallang'] = 'Не знайдено локальних рядків.';
$string['nostringsfound'] = 'Жодного рядка не знайдено, змініть, будь ласка, параметри фільтру';
$string['notice_ignorenew'] = 'Ігнорування рядка {$a->component}/{$a->stringid}, оскільки він не налаштований.';
$string['notice_ignoreupdate'] = 'Рядок {$a->component}/{$a->stringid} ігнорується, оскільки він уже визначений.';
$string['notice_inexitentstring'] = 'Рядок {$a->component}/{$a->stringid} не знайдено.';
$string['notice_missingcomponent'] = 'Відсутній компонент {$a->component}.';
$string['notice_success'] = 'Рядок {$a->component}/{$a->stringid} успішно оновлено.';
$string['placeholder'] = 'Заповнювачі';
$string['placeholder_help'] = 'Заповнювачі - це спеціальні елементи в рядку схожі на `{$a}` або `{$a->something}`. Вони заповнюються значеннями актуальним в момент видачі мовного рядка.

Тому їх важливо копіювати у текст перекладу так, як вони є в оригіналі. Не перекладайте їх та не змінюйте напрямок тексту чи будь що інше.';
$string['placeholderwarning'] = 'рядок містить заповнювач';
$string['pluginname'] = 'Редагування мови';
$string['privacy:metadata'] = 'Плагін налаштування мови не зберігає жодних особистих даних.';
$string['savecheckin'] = 'Зберегти зміни у мовному пакеті';
$string['savecontinue'] = 'Зберегти та продовжити редагування';
