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
 * Strings for component 'filter_wiris', language 'ru', version '4.1'.
 *
 * @package     filter_wiris
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessproviderenabled'] = 'Управление доступом';
$string['accessproviderenabled_help'] = 'Если включено, только аутентифицированные пользователи могут получить доступ к редактору формул.';
$string['alloweditorpluginactive'] = 'Редактор всегда включен';
$string['alloweditorpluginactive_help'] = 'Редактор будет доступен независимо от того, отключен ли фильтр MathType на уровне курса или элемента курса. По умолчанию, если фильтр MathType отключен в курсе/элементе курса, MathType также отключен в том же курсе/элементе курса.';
$string['area'] = 'область';
$string['button1'] = 'WIRIS-плагин для тестов';
$string['clearcache'] = 'Очистить кэш';
$string['clearcachedesc'] = 'Очистить кэш WIRIS-фильтра';
$string['connectionsettings'] = 'Настройки соединения';
$string['contact'] = 'Для получения дополнительной информации или в случае сомнения свяжитесь с технической поддержкой WIRIS:';
$string['disabled'] = 'ОТКЛЮЧЕНО';
$string['editormodalwindow'] = 'Включено модальное окно';
$string['editormodalwindowfullscreen'] = 'Модальное окно в полноэкранном режиме';
$string['editormodalwindowfullscreen_help'] = 'Определяет, следует ли открывать модальное окно в полноэкранном режиме.';
$string['editorsettings'] = 'Настройки редактора';
$string['enabled'] = 'ВКЛЮЧЕНО';
$string['filter_standalone'] = 'Только фильтр WIRIS';
$string['filter_standalonedesc'] = 'Вы сможете видеть существующие формулы, но создание новых формул не будет доступно. Также отключает и предупреждающее сообщение.';
$string['filtername'] = 'Редактор формул от WIRIS';
$string['imageformat'] = 'Формат изображения';
$string['imageformat_help'] = 'Определяет формат изображения (svg или png).';
$string['imageservicehost'] = 'Хост сервиса';
$string['imageservicehost_help'] = 'Указывает хост сервера изображений формул.';
$string['imageservicepath'] = 'Путь к сервису';
$string['imageservicepath_help'] = 'Указывает путь к серверу изображений формул.';
$string['imageserviceprotocol'] = 'Протокол сервиса';
$string['imageserviceprotocol_help'] = 'Указывает протокол сервера изображений формул.';
$string['imagesettings'] = 'Настройки изображения';
$string['or'] = 'или';
$string['pluginname'] = 'фильтр WIRIS';
$string['pluginperformance'] = 'Режим работы с изображением';
$string['pluginperformance_help'] = 'Указывает, должен ли ответ быть в JSON-формате вместо двоичного, что позволит кэшировать запросы. Включите формат ответа JSON, чтобы улучшить производительность.';
$string['rendertype'] = 'Тип визуализации';
$string['rendertype_help'] = 'Определяет способ визуализации формул.<br>- PHP: вызывает службу визуализации Wiris из модуля фильтра.<br>- Клиент: все запросы к серверам Wiris выполняются из браузера.<br><i>Настоятельно рекомендуется оставить включенным визуализацию на стороне сервера (PHP), который установлен по умолчанию. Включать визуализацию на стороне клиента (Клиент) рекомендуется только в высококонкурентных средах, где очень большому количеству одновременных пользователей необходимо одновременно представлять несколько сложных математических выражений.</i>';
$string['securitysettings'] = 'Настройки безопасности';
$string['windowsettings'] = 'Настройки окна';
$string['wiriscas'] = 'Калькулятор';
$string['wirischemeditor'] = 'Редактор химических формул';
$string['wirischemeditor_help'] = 'Показывать кнопку редактора химических формул';
$string['wirismatheditor'] = 'Математический редактор';
$string['wirismatheditor_help'] = 'Показывать кнопку редактора математических формул';
