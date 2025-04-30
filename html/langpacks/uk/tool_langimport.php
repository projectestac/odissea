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
 * Strings for component 'tool_langimport', language 'uk', version '4.4'.
 *
 * @package     tool_langimport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['downloadnotavailable'] = 'Unable to connect to the download server. It is not possible to install or update the language packs automatically. Please download the appropriate ZIP file (s) from <a href="{$a-> src} "> {$ a-> src} </a> and unzip them manually to your data directory <code> {$ a- > dest} </code>';
$string['install'] = 'Встановити вибраний мовний пакет';
$string['installedlangs'] = 'Встановлені мовні пакети';
$string['installfailed'] = 'Помилка встановлення мовних пакетів!';
$string['installfinished'] = 'Встановлення мовних пакетів завершено.';
$string['installpending'] = 'Незабаром будуть встановлені такі мовні пакети: {$a}.';
$string['installscheduled'] = 'Заплановано встановлення мовних пакетів.';
$string['langimport'] = 'Утиліта імпорту мови';
$string['langimportdisabled'] = 'Можливість імпорту мови відключена. Вам доведеться оновлювати ваш мовний пакет вручну на рівні файлів.  Не забудьте після такого оновлення обнулити кеш.';
$string['langpackinstalled'] = 'Мовний пакет "{$a}" успішно встановлено';
$string['langpackinstalledevent'] = 'Мовний пакет встановлено';
$string['langpacknotremoved'] = 'Сталася помилка: мовний пакет \'{$a}\' не повністю вилучено. Перевірте, будь ласка, права доступу.';
$string['langpackremoved'] = 'Мовний пакет \'{$a}\' вилучено';
$string['langpackremovedevent'] = 'Мовний пакет вилучено';
$string['langpackupdated'] = 'Мовний пакет \'{$a}\' успішно оновлено';
$string['langpackupdatedevent'] = 'Мовний пакет оновлено';
$string['langpackupdateskipped'] = 'Оновлення мовного пакета "{$a}" пропущено';
$string['langpackuptodate'] = 'Мовний пакет "{$a}" оновлений';
$string['langunsupported'] = '<p> Здається, ваш сервер не повністю підтримує такі мови: </p> <ul> {$a->missinglocales} </ul> <p> Натомість глобальна мова ({$a->globallocale}) буде використовуватися для форматування певних рядків, таких як дати або числа. </p>';
$string['langupdatecomplete'] = 'Оновлення мовного пакету завершено';
$string['missingcfglangotherroot'] = 'Відсутнє значення налаштування $CFG->langotherroot';
$string['missinglangparent'] = 'Відсутня батьківський мовний пакет <em>{$a->parent}</em> для <em>{$a->lang}</em>.';
$string['noenglishuninstall'] = 'Англомовний пакет не можна видалити.';
$string['noenglishuninstalltitle'] = 'Не вдалося видалити';
$string['nolangupdateneeded'] = 'Всі ваші мовні пакети в актуальному стані, оновлення не потрібне';
$string['pluginname'] = 'Мовні пакети';
$string['privacy:metadata'] = 'Плагін мовних пакетів не зберігає жодних персональних даних.';
$string['purgestringcaches'] = 'Очищення кешу';
$string['search'] = 'Пошук доступних мовних пакетів';
$string['selectlangs'] = 'Виберіть мови для видалення';
$string['uninstall'] = 'Видалити вибрані мовні пакети';
$string['uninstallconfirm'] = 'Ви збираєтеся вилучити мовний пакет <strong>{$a}</strong>, ви впевнені?';
$string['updatelangs'] = 'Оновити всі встановлені мовні пакети';
$string['updatelangsnote'] = 'Оновлення всіх встановлених мовних пакетів натисканням кнопки може зайняти багато часу та призвести до тайм-аутів. Натомість рекомендується використовувати заплановану задачу \'{$a->taskname}\' (яке за замовчуванням виконується щодня).';
