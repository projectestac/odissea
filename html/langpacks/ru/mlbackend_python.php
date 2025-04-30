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
 * Strings for component 'mlbackend_python', language 'ru', version '4.4'.
 *
 * @package     mlbackend_python
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['errornoconfigdata'] = 'Конфигурация сервера не завершена.';
$string['errorserver'] = 'Ошибка сервера {$a}';
$string['host'] = 'Хост';
$string['hostdesc'] = 'Хост';
$string['packageinstalledshouldbe'] = 'Пакет python "moodlemlbackend" должен быть обновлен. Требуемая версия «{$a->required}», а установлена - «{$a->installed}»';
$string['packageinstalledtoohigh'] = 'Пакет Python moodlemlbackend не совместим с этой версией Moodle. Требуемая версия - «{$a->required}» или выше, если она совместима с API. Установленная версия «{$a->installed}» слишком высока.';
$string['password'] = 'Пароль';
$string['passworddesc'] = 'Строка символов, используемая в качестве пароля для связи между сервером Moodle и сервером Python.';
$string['pluginname'] = 'Python-механизм машинного обучения';
$string['port'] = 'Порт';
$string['portdesc'] = 'Порт';
$string['privacy:metadata'] = 'Модуль машинного обучения Python не хранит никаких личных данных.';
$string['pythonpackagenotinstalled'] = 'Пакет python "moodlemlbackend" не установлен или с ним есть проблема. Для получения дополнительной информации выполните «{$a}» из интерфейса командной строки.';
$string['pythonpathnotdefined'] = 'Не определен путь к исполняемому двоичному файлу Python. Пожалуйста, посетите «{$a}», чтобы задать его.';
$string['secure'] = 'Использовать HTTPS';
$string['securedesc'] = 'Использовать HTTP или HTTPS.';
$string['serversettingsinfo'] = 'При включенном параметре «Использовать сервер» будут отображаться настройки сервера.';
$string['tensorboardinfo'] = 'Запустите TensorBoard из командной строки, набрав tensorboard --logdir=\'{$a}\' на своем веб-сервере.';
$string['username'] = 'Логин';
$string['usernamedesc'] = 'Строка символов, используемая в качестве логина для связи между сервером Moodle и сервером Python.';
$string['useserver'] = 'Использовать сервер';
$string['useserverdesc'] = 'Пакет Python для машинного обучения установлен не на этом веб-сервере, а на другом сервере.';
