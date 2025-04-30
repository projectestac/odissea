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
 * Strings for component 'cachestore_redis', language 'uk', version '4.4'.
 *
 * @package     cachestore_redis
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ca_file'] = 'Шлях до файлу CA';
$string['ca_file_help'] = 'Розташування файлу центру сертифікації в локальній файловій системі';
$string['compressor_none'] = 'Без компресії.';
$string['compressor_php_gzip'] = 'Використовуйте стиснення gzip.';
$string['compressor_php_zstd'] = 'Використовуйте стиснення Zstandard.';
$string['encrypt_connection'] = 'Використовуйте шифрування TLS.';
$string['encrypt_connection_help'] = 'Використовуйте TLS для підключення до Redis. Не використовуйте \'tls://\' в імені хоста для Redis, замість цього використовуйте цей параметр.';
$string['password'] = 'Пароль';
$string['password_help'] = 'Це встановлює пароль сервера Redis.';
$string['pluginname'] = 'Відновити';
$string['prefix'] = 'Префікс ключа';
$string['prefix_help'] = 'Цей префікс використовується для всіх імен ключів на сервері Redis.
* Якщо на сервері є лише один екземпляр Moodle, можна залишити це значення за умовчанням.
* Через обмеження довжини ключа дозволено не більше 5 символів.';
$string['prefixinvalid'] = 'Неправильний префікс. Можна використовувати лише a-z A-Z 0-9-_.';
$string['privacy:metadata:redis'] = 'Плагін Redis cachestore зберігає дані на короткий час як частину функцій кешування. Ці дані зберігаються на сервері Redis, де дані регулярно видаляються.';
$string['privacy:metadata:redis:data'] = 'Різні дані, що зберігаються в кеші';
$string['serializer_igbinary'] = 'Ібінальний серіалізатор.';
$string['serializer_php'] = 'Стандартний серіалізатор PHP.';
$string['server'] = 'Сервер';
$string['server_help'] = 'Це встановлює ім\'я хоста або IP-адресу сервера Redis для використання.';
$string['task_ttl'] = 'Звільніть пам’ять, використану записами, термін дії яких минув, у кешах Redis';
$string['test_password'] = 'Тест пароля сервера';
$string['test_password_desc'] = 'Зміна пароля тестового сервера.';
$string['test_serializer'] = 'Серіалізатор';
$string['test_serializer_desc'] = 'Сріалізатор для тестування.';
$string['test_server'] = 'Тестовий сервер';
$string['test_server_desc'] = 'Відновити сервер для тестування.';
$string['test_ttl'] = 'Тестування TTL';
$string['test_ttl_desc'] = 'Виконати тест продуктивності, використовуючи кеш, який вимагає TTL (повільніші набори).';
$string['usecompressor'] = 'Використовувати стимнення';
$string['usecompressor_help'] = 'Визначає стиснення для використання після серіалізації. Це робиться на рівні API кешу Moodle, а не на рівні php-redis.';
$string['useserializer'] = 'Використовувати серіалізатор';
$string['useserializer_help'] = 'Визначає серіалізатор для серіалізації.
Дійсними серіалізаторами є Redis :: SERIALIZER_PHP або Redis :: SERIALIZER_IGBINARY.
Останній підтримується тільки тоді, коли phpredis налаштовується з параметром --enable-redis-igbinary і завантажено розширення igbinary.';
