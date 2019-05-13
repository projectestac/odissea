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
 * Strings for component 'repository_googledocs', language 'ru', branch 'MOODLE_34_STABLE'
 *
 * @package   repository_googledocs
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['both'] = 'Внутренние и внешние';
$string['cachedef_folder'] = 'ID файлов Google для папок в системной учетной записи';
$string['clientid'] = 'ID клиента';
$string['configplugin'] = 'Настроить модуль «Google Drive»';
$string['defaultreturntype'] = 'Возвращаемый по умолчанию тип';
$string['docsformat'] = 'Формат импорта документа по умолчанию';
$string['drawingformat'] = 'Формат импорта графики по умолчанию';
$string['external'] = 'Внешние (только ссылки, хранящиеся в Moodle)';
$string['fileoptions'] = 'Здесь настраиваются типы и значения по умолчанию для возвращаемых файлов. Обратите внимание, что все файлы, связанные извне, будут обновляться, чтобы владельцем была системная учетная запись Moodle.';
$string['googledocs:view'] = 'Просматривать хранилище файлов «Google Drive»';
$string['importformat'] = 'Настройка по умолчанию форматов импорта из Google';
$string['internal'] = 'Внутренние (файлы, хранящиеся в Moodle)';
$string['issuer'] = 'Служба OAuth 2';
$string['issuer_help'] = 'Выберите службу OAuth 2, настроенную для работы с API Google Drive. Если служба еще не существует, вам необходимо ее создать.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Ссылка на конфигурацию служб OAuth 2"> Конфигурация служб OAuth 2 </a>';
$string['oauthinfo'] = '<p>Для использования этого плагина Вы должны зарегистрировать свой сайт в Google, как описано в документации <a href="{$a->docsurl}">Google OAuth 2.0 setup</a>.</p><p>В процессе регистрации Вам нужно будет ввести следующий URL в качестве «Authorized Redirect URIs»:</p><p>{$a->callbackurl} </p><p>После регистрации Вам будет предоставлен ID клиента и ключ, которые могут быть использованы для настройки всех плагинов Google Drive и Picasa.</p><p>Пожалуйста, обратите внимание, что Вам необходимо включить службу «Drive API».</p>';
$string['owner'] = 'Владелец: {$a}';
$string['pluginname'] = 'Google Drive';
$string['presentationformat'] = 'Формат импорта презентации по умолчанию';
$string['privacy:metadata:repository_googledocs'] = 'Плагин хранилища Google Drive не хранит никаких личных данных, но передает данные пользователя из Moodle в удаленную систему.';
$string['privacy:metadata:repository_googledocs:email'] = 'Электронная почта пользователя репозитория Google Drive.';
$string['privacy:metadata:repository_googledocs:searchtext'] = 'Текстовый запрос поиска пользователя репозитория Google Drive.';
$string['searchfor'] = 'Поиск {$a}';
$string['secret'] = 'Ключ';
$string['servicenotenabled'] = 'Доступ не настроен. Убедитесь, что служба «Drive API» включена.';
$string['spreadsheetformat'] = 'Формат импорта электронной таблицы по умолчанию';
$string['supportedreturntypes'] = 'Поддерживаемые файлы';
