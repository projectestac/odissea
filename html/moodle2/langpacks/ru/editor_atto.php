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
 * Strings for component 'editor_atto', language 'ru', branch 'MOODLE_28_STABLE'
 *
 * @package   editor_atto
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autosavefailed'] = 'Не удалось подключиться к серверу. Если Вы отправите эту страницу сейчас, то изменения могут быть потеряны.';
$string['autosavefrequency'] = 'Частота автосохранения';
$string['autosavefrequency_desc'] = 'Это - количество секунд между попытками автосохранения. Редактор Atto будет автоматически сохранять текст в соответствии с этой установкой, так что текст может быть автоматически восстановлен, когда тот же пользователь возвратится к этой же форме.';
$string['autosavesucceeded'] = 'Черновик сохранен.';
$string['editor_command_keycode'] = 'Cmd + {$a}';
$string['editor_control_keycode'] = 'Ctrl + {$a}';
$string['errorcannotparseline'] = 'Неверный формат строки «{$a}»';
$string['errorgroupisusedtwice'] = 'Группа «{$a}» задана дважды; названия групп должны быть уникальными.';
$string['errornopluginsorgroupsfound'] = 'Не найдены плагины или группы; добавьте несколько групп и плагинов.';
$string['errorpluginisusedtwice'] = 'Плагин «{$a}» повторяется; плагины могут быть заданы только один раз.';
$string['errorpluginnotfound'] = 'Плагин «{$a}» не может быть использован; вероятно, он не установлен.';
$string['errortextrecovery'] = 'К сожалению, черновой вариант не удалось восстановить.';
$string['infostatus'] = 'Информация';
$string['pluginname'] = 'HTML-редактор Atto';
$string['plugin_title_shortcut'] = '{$a->title} [{$a->shortcut}]';
$string['recover'] = 'Восстановление';
$string['settings'] = 'Настройки панели инструментов Atto';
$string['subplugintype_atto'] = 'Плагин редактора Atto';
$string['subplugintype_atto_plural'] = 'Плагины редактора Atto';
$string['textrecovered'] = 'Черновой вариант этого текста был автоматически восстанавлен.';
$string['toolbarconfig'] = 'Конфигурация панели';
$string['toolbarconfig_desc'] = 'Здесь можно настроить отображение перечня плагинов и их порядка. Плагины упорядочены в группы (по одному в строке), а затем упорядочены в списке для этой группы. Группы плагинов разделяются знаком равенства, а плагины отделены запятыми. Имена групп должны быть уникальными и они обозначают объединения кнопок. Названия кнопок и групп не должны повторяться и могут содержать только алфавитно-цифровые символы.';
$string['warningstatus'] = 'Предупреждение';
