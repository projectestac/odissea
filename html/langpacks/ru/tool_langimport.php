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
 * Strings for component 'tool_langimport', language 'ru', version '3.8'.
 *
 * @package     tool_langimport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['downloadnotavailable'] = 'Не удается подключиться к серверу загрузки. Невозможно автоматически установить или обновить языковые пакеты. Загрузите соответствующие ZIP-файлы из <a href="{$a->src}">{$a->src}</a>> и разархивируйте их вручную в свой каталог данных <code>{$a->dest}</code>';
$string['install'] = 'Установить выбранный языковый пакет';
$string['installedlangs'] = 'Установленные языковые пакеты';
$string['langimport'] = 'Процедура импорта языка';
$string['langimportdisabled'] = 'Функция импорта языка была отключена. Вы должны вручную обновить языковые пакеты на уровне файловой системы. Не забудьте после этого очистить строки кэша.';
$string['langpackinstalled'] = 'Языковой пакет «{$a}» успешно установлен';
$string['langpackinstalledevent'] = 'Языковой пакет установлен';
$string['langpacknotremoved'] = 'Произошла ошибка: языковой пакет «{$a}» не был полностью удален. Пожалуйста, проверьте разрешения на доступ к файлам.';
$string['langpackremoved'] = 'Языковый пакет «{$a}» был удален';
$string['langpackremovedevent'] = 'Языковой пакет удален';
$string['langpackupdated'] = 'Языковой пакет «{$a}» успешно обновлен';
$string['langpackupdatedevent'] = 'Языковой пакет обновлен';
$string['langpackupdateskipped'] = 'Обновление языкового пакета «{$a}» пропущено';
$string['langpackuptodate'] = 'Уже установлена последняя версия языкового пакета «{$a}»';
$string['langupdatecomplete'] = 'Завершено обновление языкового пакета';
$string['missingcfglangotherroot'] = 'Отсутствующее значение конфигурации $CFG->langotherroot';
$string['missinglangparent'] = 'Отсутствует родительский язык <em>{$a->parent}</em> для языка <em>{$a->lang}</em>.';
$string['noenglishuninstall'] = 'Пакет английского языка не может быть удален.';
$string['nolangupdateneeded'] = 'Все Ваши языковые пакеты актуальны, обновление не требуется';
$string['pluginname'] = 'Языковые пакеты';
$string['purgestringcaches'] = 'Очистка строк кэша';
$string['selectlangs'] = 'Выберите языки для удаления';
$string['uninstall'] = 'Удалить выбранный языковой пакет';
$string['uninstallconfirm'] = 'Вы собираетесь полностью удалить следующие языковые пакеты: <strong>{$a}</strong>. Вы уверены?';
$string['updatelangs'] = 'Обновить все установленные языковые пакеты';
