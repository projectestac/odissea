<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'editor_atto', language 'ru', branch 'MOODLE_34_STABLE'
 *
 * @package   editor_atto
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autosavefailed'] = 'Не удалось подключиться к серверу. Если Вы отправите эту страницу сейчас, то изменения могут быть потеряны.';
$string['autosavefrequency'] = 'Частота автосохранения';
$string['autosavefrequency_desc'] = 'Этот параметр устанавливает количество секунд между попытками автосохранения. Редактор Atto будет автоматически сохранять текст в соответствии со значением этого параметра, так что текст может быть автоматически восстановлен, когда тот же пользователь возвратится к той же форме.';
$string['autosaves'] = 'Информация об автоматическом сохранении в редакторе';
$string['autosavesucceeded'] = 'Черновик сохранен.';
$string['editor_command_keycode'] = 'Cmd + {$a}';
$string['editor_control_keycode'] = 'Ctrl + {$a}';
$string['errorcannotparseline'] = 'Неверный формат строки «{$a}»';
$string['errorgroupisusedtwice'] = 'Группа «{$a}» задана дважды; названия групп должны быть уникальными.';
$string['errornopluginsorgroupsfound'] = 'Не найдены плагины или группы; добавьте несколько групп и плагинов.';
$string['errorpluginisusedtwice'] = 'Плагин «{$a}» повторяется; каждый плагин может быть указан только один раз.';
$string['errorpluginnotfound'] = 'Плагин «{$a}» не может быть использован; вероятно, он не установлен.';
$string['errortextrecovery'] = 'К сожалению, черновой вариант не удалось восстановить.';
$string['infostatus'] = 'Информация';
$string['pluginname'] = 'HTML-редактор Atto';
$string['plugin_title_shortcut'] = '{$a->title} [{$a->shortcut}]';
$string['privacy:metadata:database:atto_autosave'] = 'Автоматически сохраненные черновики в текстовом редакторе.';
$string['privacy:metadata:database:atto_autosave:drafttext'] = 'Текст, который был сохранен.';
$string['privacy:metadata:database:atto_autosave:timemodified'] = 'Время, когда контент был изменен.';
$string['privacy:metadata:database:atto_autosave:userid'] = 'ID пользователя, чьи данные были сохранены.';
$string['recover'] = 'Восстановление';
$string['settings'] = 'Настройки панели инструментов редактора Atto';
$string['subplugintype_atto'] = 'Плагин HTML-редактора Atto';
$string['subplugintype_atto_plural'] = 'Плагины HTML-редактора Atto';
$string['taskautosavecleanup'] = 'Удаление из базы данных просроченных автоматически сохраненных черновиков';
$string['textrecovered'] = 'Черновой вариант этого текста был автоматически восстановлен.';
$string['toolbarconfig'] = 'Конфигурация панели инструментов';
$string['toolbarconfig_desc'] = 'Здесь можно настроить список отображаемых плагинов и их порядок. Конфигурация состоит из списка групп (по одной группе в строке), для каждой группы задается упорядоченный список плагинов. Название группы отделяется от списка плагинов этой группы знаком равенства, плагины в списке разделяются запятыми. Названия групп должны быть уникальными. Желательно, чтобы названия групп указывали на какой-то общий признак кнопок в группе. Названия групп и кнопок не должны повторяться и могут содержать только алфавитно-цифровые символы.';
$string['warningstatus'] = 'Предупреждение';
