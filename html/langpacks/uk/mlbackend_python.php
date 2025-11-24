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
 * Strings for component 'mlbackend_python', language 'uk', version '4.5'.
 *
 * @package     mlbackend_python
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['errornoconfigdata'] = 'Конфігурація сервера не завершена.';
$string['errorserver'] = 'Помилка сервера {$a}';
$string['host'] = 'Хост';
$string['hostdesc'] = 'Хост';
$string['packageinstalledshouldbe'] = 'Пакет Python moodlemlbackend слід оновити. Необхідна версія «{$a->required}», а встановлена версія — «{$a->installed}».';
$string['packageinstalledtoohigh'] = 'Пакет moodlemlbackend Python несумісний з цією версією Moodle. Необхідна версія "{$a->required}" або вище, якщо вона сумісна з API. Установлена версія "{$a->installed}" зависока.';
$string['password'] = 'Пароль';
$string['passworddesc'] = 'Рядок символів, що використовуються як пароль для зв\'язку між сервером Moodle і сервером Python.';
$string['pluginname'] = 'Python machine learning backend';
$string['port'] = 'Порт';
$string['portdesc'] = 'Порт';
$string['privacy:metadata'] = 'Внутрішній модуль машинного навчання Python не зберігає жодних особистих даних.';
$string['pythonpackagenotinstalled'] = 'Пакет moodlemlbackend Python не встановлено або з ним виникла проблема. Будь ласка, виконайте "{$a}" з інтерфейсу командного рядка для отримання додаткової інформації.';
$string['pythonpathnotdefined'] = 'Шлях до виконуваного двійкового файлу Python не визначено. Відвідайте "{$a}", щоб встановити його.';
$string['secure'] = 'Використовуйте HTTPS';
$string['securedesc'] = 'Чи використовувати HTTP чи HTTPS.';
$string['serversettingsinfo'] = 'Якщо «Використовувати сервер» увімкнено, будуть відображені налаштування сервера.';
$string['tensorboardinfo'] = 'Запустіть TensorBoard з командного рядка, ввівши tensorboard --logdir=\'{$a}\' на своєму веб-сервері.';
$string['username'] = 'Ім\'я користувача';
$string['usernamedesc'] = 'Рядок символів, що використовуються як ім\'я користувача для зв\'язку між сервером Moodle і сервером Python.';
$string['useserver'] = 'Використовуйте сервер';
$string['useserverdesc'] = 'Пакет серверної частини Python машинного навчання інстальовано не на веб-сервері, а на іншому сервері.';
