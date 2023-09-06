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
 * Strings for component 'cachestore_redis', language 'ru', version '4.1'.
 *
 * @package     cachestore_redis
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['compressor_none'] = 'Без сжатия.';
$string['compressor_php_gzip'] = 'Использовать сжатие gzip.';
$string['compressor_php_zstd'] = 'Использовать сжатие Zstandard.';
$string['password'] = 'Пароль';
$string['password_help'] = 'Пароль сервера Redis';
$string['pluginname'] = 'Redis';
$string['prefix'] = 'Префикс ключа';
$string['prefix_help'] = 'Этот префикс используется для имен всех ключей на сервере Redis.
* Если у вас есть только один экземпляр Moodle, использующий этот сервер, вы можете оставить значение по умолчанию.
* Длина ключа ограничена, допускается не более 5 символов.';
$string['prefixinvalid'] = 'Недопустимый префикс. Вы можете использовать только a-z A-Z 0-9-_.';
$string['privacy:metadata:redis'] = 'Плагин хранилища кэша «Redis» хранит данные в течение короткого времени как часть своей функции кэширования. Эти данные хранятся на сервере Redis, где они регулярно удаляются.';
$string['privacy:metadata:redis:data'] = 'Различные данные, хранящиеся в кэше';
$string['serializer_igbinary'] = 'Сериализатор  igbinary.';
$string['serializer_php'] = 'Сериализатор PHP по умолчанию.';
$string['server'] = 'Сервер';
$string['server_help'] = 'В параметре задается имя хоста или IP-адрес сервера Redis.';
$string['task_ttl'] = 'Освободить память, используемую просроченными записями в кэшах Redis';
$string['test_password'] = 'Пароль сервера';
$string['test_password_desc'] = 'Пароль сервера тестирования Redis.';
$string['test_serializer'] = 'Сериализатор';
$string['test_serializer_desc'] = 'Сериализатор для тестирования.';
$string['test_server'] = 'Сервер тестирования';
$string['test_server_desc'] = 'Сервер Redis для тестирования.';
$string['test_ttl'] = 'Тестирование TTL';
$string['test_ttl_desc'] = 'Запустить тест производительности с использованием кэша, для которого требуется TTL (более медленные наборы).';
$string['usecompressor'] = 'Использовать сжатие';
$string['usecompressor_help'] = 'Задает компрессор, который будет использоваться после сериализации. Это делается на уровне Moodle Cache API, а не на уровне php-redis.';
$string['useserializer'] = 'Использовать сериализатор';
$string['useserializer_help'] = 'Указывает используемый сериализатор.
Допустимыми сериализаторами являются Redis :: SERIALIZER_PHP или Redis :: SERIALIZER_IGBINARY.
Последний поддерживается только тогда, когда phpredis настроен с параметром --enable-redis-igbinary и загружается расширение igbinary.';
