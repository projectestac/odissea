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
 * Strings for component 'tool_admin_presets', language 'ru', version '4.4'.
 *
 * @package     tool_admin_presets
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actionexport'] = 'Создать предустановку';
$string['actionexportbutton'] = 'Создать предустановку';
$string['actionimport'] = 'Импорт предустановки';
$string['actualvalue'] = 'Фактические значения';
$string['applyaction'] = 'Посмотреть настройки и применить';
$string['applypresetdescription'] = 'Если вы передумаете после применения этой предустановки, вы сможете отменить изменения настроек через «Показать историю версий» в меню действий предустановки.';
$string['author'] = 'Автор';
$string['basedescription'] = 'Предустановки позволяют легко переключаться между различными конфигурациями администратора сайта. После выбора предустановки вы можете в любое время включить дополнительные функции по мере необходимости.';
$string['created'] = 'Создано';
$string['currentvalue'] = 'Текущее значение';
$string['deletepreset'] = 'Вы уверены, что хотите удалить предустановку администратора сайта «{$a}»?';
$string['deletepresettitle'] = 'Удалить предустановку {$a}?';
$string['deletepreviouslyapplied'] = 'Эта предустановка уже применялась ранее. Удаление предустановки полностью удаляет её с вашего сайта. Вы не сможете вернуть свои настройки к тому состоянию, в котором они были до применения этой предустановки.';
$string['deleteshow'] = 'Удаление предустановки администратора сайта';
$string['eventpresetdeleted'] = 'Предустановка удалена';
$string['eventpresetdownloaded'] = 'Предустановка скачана';
$string['eventpresetexported'] = 'Предустановка создана';
$string['eventpresetimported'] = 'Предустановка импортирована';
$string['eventpresetloaded'] = 'Предустановка применена';
$string['eventpresetpreviewed'] = 'Предварительный просмотр предустановки';
$string['eventpresetreverted'] = 'Предустановка восстановлена';
$string['eventpresetslisted'] = 'Просмотрен список предустановок';
$string['exportdescription'] = 'Сохраните все текущие настройки администратора сайта в качестве предустановки, чтобы поделиться ими или использовать повторно.';
$string['exportshow'] = 'Создать предустановку администратора сайта';
$string['falseaction'] = 'Действие не поддерживается в этой версии.';
$string['falsemode'] = 'Режим не поддерживается в этой версии.';
$string['import'] = 'Импортировать';
$string['importdescription'] = 'Импортировать настройки администратора сайта в качестве предустановки, чтобы применить их на своем сайте.';
$string['imported'] = 'Импортировано';
$string['importexecute'] = 'Импорт предустановки настроек администратора сайта';
$string['importshow'] = 'Импорт предустановки настроек администратора сайта';
$string['includesensiblesettings'] = 'Включить настройки с паролями';
$string['includesensiblesettings_help'] = 'Настройки с паролями содержат конфиденциальную информацию, относящуюся к вашему сайту. Включайте эти настройки только в том случае, если вы создаете предустановку для повторного использования на своем сайте.';
$string['loaddescription'] = 'Просмотрите изменения настроек, прежде чем применять эту предустановку.';
$string['loadexecute'] = 'Предустановка настроек администратора сайта применена';
$string['loadpreview'] = 'Предварительный просмотр предустановки настроек администратора сайта';
$string['loadselected'] = 'Применить';
$string['loadshow'] = 'Применение предустановки администратора сайта';
$string['newvalue'] = 'Новое значение';
$string['nopresets'] = 'У вас нет предустановок администратора сайта.';
$string['nosettingswillbeapplied'] = 'Эти настройки совпадают с текущими настройками; нет никаких применяемых изменений.';
$string['nothingloaded'] = 'Никакие изменения в настройки не внесены, потому что настройки в предустановке такие же, как и на вашем сайте.';
$string['novalidsettings'] = 'Нет допустимых настроек';
$string['novalidsettingsselected'] = 'Не выбраны допустимые настройки';
$string['oldvalue'] = 'Старое значение';
$string['pluginname'] = 'Предустановки администратора сайта';
$string['presetapplicationslisttable'] = 'Таблица предустановленных приложений администратора сайта';
$string['presetmoodlerelease'] = 'Релиз Moodle';
$string['presetname'] = 'Название предустановки';
$string['presetslisttable'] = 'Таблица предустановок администратора сайта';
$string['privacy:metadata'] = 'Инструмент предустановок администратора сайта не хранит никаких личных данных.';
$string['renamepreset'] = 'Название (необязательно)';
$string['rollback'] = 'Восстановить эту версию';
$string['rollbackdescription'] = 'Используйте ссылку «Восстановить эту версию», чтобы вернуться к настройкам, которые были до применения предустановки.';
$string['rollbackexecute'] = 'Восстановление версии из предустановки администратора сайта {$a}';
$string['rollbackfailures'] = 'Следующие настройки не могут быть восстановлены, фактические значения отличаются от значений, примененных из предустановки';
$string['rollbackresults'] = 'Настройки успешно восстановлены';
$string['rollbackshow'] = 'История версий предустановки {$a}';
$string['selectfile'] = 'Выбрать файл';
$string['settingname'] = 'Название настройки';
$string['settingsapplied'] = 'Изменение настроек';
$string['settingsappliednotification'] = 'Просмотрите следующие изменения настроек, которые были применены.
<br/>Если вы передумаете, вы можете отменить изменения настроек, выбрав «Показать историю версий» в меню действий предустановки.';
$string['settingsnotapplicable'] = 'Настройки, не применимые к этой версии Moodle';
$string['settingsnotapplied'] = 'Не измененные настройки';
$string['settingstobeapplied'] = 'Изменение настроек';
$string['showhistory'] = 'Показать историю версий';
$string['site'] = 'Сайт';
$string['timeapplied'] = 'Дата';
$string['wrongfile'] = 'Неправильный файл';
