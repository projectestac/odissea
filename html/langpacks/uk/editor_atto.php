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
 * Strings for component 'editor_atto', language 'uk', version '4.5'.
 *
 * @package     editor_atto
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autosavefailed'] = 'Не вдалося під’єднатися до сервера. Якщо ви відправите цю сторінку зараз, то зміни можуть бути втраченими.';
$string['autosavefrequency'] = 'Частота автозбереження';
$string['autosavefrequency_desc'] = 'Це кількість часу між спробами автозбереження. Редактор Атто буде автоматично зберігати текст у відповідності з ціює опцією, так що текст може бути автоматично відновлено, коли той же користувач повертається до тієї ж форми.';
$string['autosaves'] = 'Редактор автозбереження інформації';
$string['autosavesucceeded'] = 'Чорнетку збережено';
$string['editor_command_keycode'] = 'Cmd + {$a}';
$string['editor_control_keycode'] = 'Ctrl + {$a}';
$string['errorcannotparseline'] = 'Рядок \'{$a}\' подано в неправильному форматі.';
$string['errorgroupisusedtwice'] = 'Група \'{$a}\' представлена двічі; назва групи повинна бути унікальною.';
$string['errornopluginsorgroupsfound'] = 'Не знайдено модулів або груп; будь ласка, додайте потрібні групи та модулі.';
$string['errorpluginisusedtwice'] = 'Модуль \'{$a}\' представлено двічі; назва модуля повинна бути унікальною.';
$string['errorpluginnotfound'] = 'Модуль \'{$a}\' не може бути використаним; цей модуль не встановлено.';
$string['errortextrecovery'] = 'На жаль, чорновий варіант не може бути відновлений.';
$string['infostatus'] = 'Інформація';
$string['plugin_title_shortcut'] = '{$a->title} [{$a->shortcut}]';
$string['pluginname'] = 'Редактор HTML Atto';
$string['privacy:metadata:database:atto_autosave'] = 'Автоматично збережені чернетки текстового редактора.';
$string['privacy:metadata:database:atto_autosave:drafttext'] = 'Текст, який було збережено.';
$string['privacy:metadata:database:atto_autosave:timemodified'] = 'Час зміни вмісту.';
$string['privacy:metadata:database:atto_autosave:userid'] = 'Ідентифікатор користувача, чиї дані були збережені.';
$string['recover'] = 'Відновлення';
$string['richtexteditor'] = 'Розширений текстовий редактор';
$string['settings'] = 'Налаштування панелі інструментів';
$string['subplugintype_atto'] = 'Модуль Atto';
$string['subplugintype_atto_plural'] = 'Модулі Atto';
$string['taskautosavecleanup'] = 'Видалити чернетки автозбереження, термін дії яких закінчився';
$string['textrecovered'] = 'Чорновий варіант цього тексту автоматично відновлено.';
$string['toolbarconfig'] = 'Налаштування панелі інструментів';
$string['toolbarconfig_desc'] = 'Список модулів та порядок їх показу налаштовується тут. Конфігурація складається з груп (по одній на рядок), з упорядкованим списком модулів для кожної групи. Групи відокремлюються від модулів знаком рівності, а модулі між собою комами. Назви груп повинні бути унікальними та вказувати, які кнопки в них входять. Назви кнопок та груп не повинні повторюватися і можуть містити тільки алфавітно-цифрові символи.';
$string['warningstatus'] = 'Попередження';
