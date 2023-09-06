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
 * Strings for component 'repository_dropbox', language 'ru', version '4.1'.
 *
 * @package     repository_dropbox
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikey'] = 'Ключ API Dropbox';
$string['cachelimit'] = 'Лимит кэша';
$string['cachelimit_info'] = 'Введите максимальный размер файла (в байтах) для кэширования на сервере  для псевдонимов/ярлыков Dropbox. Кэшированные файлы будут работать, когда источники уже не доступны. Пустое или нулевое значение означает кэширование всех файлов, независимо от размера.';
$string['configplugin'] = 'Конфигурация хранилища Dropbox';
$string['crontask'] = 'Фоновая обработка хранилища Dropbox';
$string['dropbox'] = 'Dropbox';
$string['dropbox:view'] = 'Просматривать хранилище файлов «Dropbox»';
$string['instruction'] = 'Вы можете получить ключ API и секретный ключ у <a href="http://www.dropbox.com/developers/apps">разработчиков Dropbox</a>. При настройке ключей параметр «Access level» выберите «Full Dropbox».';
$string['issuer'] = 'Служба OAuth2';
$string['issuer_help'] = 'Выберите службу OAuth2, настроенную для взаимодействия с API Dropbox. Если служба еще не существует, вам нужно будет её создать.';
$string['logoutdesc'] = '(Выход после завершения использования Dropbox)';
$string['notitle'] = 'без названия';
$string['oauth2redirecturi'] = 'URI перенаправления OAuth 2';
$string['pluginname'] = 'Dropbox';
$string['privacy:metadata:repository_dropbox'] = 'Плагин хранилища Dropbox не хранит никаких личных данных, но передает данные пользователя из Moodle в удаленную систему.';
$string['privacy:metadata:repository_dropbox:query'] = 'Текстовый запрос поиска пользователя хранилища Dropbox.';
$string['remember'] = 'Запомнить меня';
$string['secret'] = 'Секретный ключ Dropbox';
