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
 * Strings for component 'cachestore_redis', language 'ru', version '4.5'.
 *
 * @package     cachestore_redis
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ca_file'] = 'Путь к файлу ЦС';
$string['ca_file_help'] = 'Расположение файла центра сертификации в локальной файловой системе';
$string['clustermode'] = 'Режим кластера';
$string['clustermode_help'] = 'Включение этого параметра запустит функцию кластера Redis, что позволит вашему серверу обслуживать несколько серверов для одновременной обработки запросов.';
$string['clustermodeunavailable'] = 'Кластер Redis в настоящее время недоступен. Убедитесь, что расширение PHP Redis поддерживает функциональность кластера Redis.';
$string['compressor_none'] = 'Без сжатия.';
$string['compressor_php_gzip'] = 'Использовать сжатие gzip.';
$string['compressor_php_zstd'] = 'Использовать сжатие Zstandard.';
$string['connectiontimeout'] = 'Время ожидания соединения';
$string['connectiontimeout_help'] = 'Устанавливает тайм-аут при попытке подключения к серверу Redis.';
$string['encrypt_connection'] = 'Использовать TLS-шифрование.';
$string['encrypt_connection_help'] = 'Использовать TLS для подключения к Redis. Не используйте «tls://» в имени хоста для Redis, вместо этого используйте этот параметр.';
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
$string['server'] = 'Сервер(ы)';
$string['server_help'] = 'Сервер Redis, который будет использоваться для тестирования.

Некоторые примеры значений:

* testredis.abc.com — для подключения к серверу Redis по имени хоста (по умолчанию порт 6379).
* testredis.abc.com:1234 — для подключения к серверу Redis по имени хоста с определенным портом.
* 1.2.3.4 — для подключения к серверу Redis по IP-адресу (по умолчанию порт 6379).
* 1.2.3.4:1234 — для подключения к серверу Redis по IP-адресу с определенным портом.
* unix:///var/redis.sock — для подключения к серверу Redis с помощью сокета Unix.
* /var/redis.sock — для подключения к серверу Redis с использованием сокета Unix (альтернативный формат).
Если включен режим кластера, укажите серверы, разделенные новой строкой, например:<br>
   172.23.0.11<br>
   172.23.0.12<br>
   172.23.0.13<br>


Для получения дополнительной информации см. разделы <a href="https://redis.io/docs/reference/clients/#accepting-client-connections" target="_new">Принятие клиентских подключений</a> и <a href="https://". redis.io/resources/clients/#php" target="_new">PHP-клиенты Redis</a> .';
$string['task_ttl'] = 'Освободить память, используемую просроченными записями в кэшах Redis';
$string['test_clustermode'] = 'Режим кластера';
$string['test_clustermode_desc'] = 'Включить тестирование режима кластера Redis.';
$string['test_password'] = 'Пароль сервера';
$string['test_password_desc'] = 'Пароль сервера тестирования Redis.';
$string['test_serializer'] = 'Сериализатор';
$string['test_serializer_desc'] = 'Сериализатор для тестирования.';
$string['test_server'] = 'Сервер тестирования';
$string['test_server_desc'] = 'Сервер Redis для тестирования.

Некоторые примеры значений:

* testredis.abc.com — для подключения к серверу Redis по имени хоста (по умолчанию порт 6379).
* testredis.abc.com:1234 — для подключения к серверу Redis по имени хоста с определенным портом.
* 1.2.3.4 — Для подключения к серверу Redis по IP-адресу (по умолчанию порт 6379).
* 1.2.3.4:1234 — для подключения к серверу Redis по IP-адресу с определенным портом.
* unix:///var/redis.sock — для подключения к серверу Redis с помощью сокета Unix.
* /var/redis.sock — для подключения к серверу Redis с использованием сокета Unix (альтернативный формат).
Если включен режим кластера, укажите серверы, разделенные новой строкой, например:<br>
   172.23.0.11<br>
   172.23.0.12<br>
   172.23.0.13<br>

Для получения дополнительной информации см. разделы <a href="https://redis.io/docs/reference/clients/#accepting-client-connections" target="_new">Принятие клиентских подключений</a> и <a href="https://". redis.io/resources/clients/#php" target="_new">PHP-клиенты Redis</a>.';
$string['test_ttl'] = 'Тестирование TTL';
$string['test_ttl_desc'] = 'Запустить тест производительности с использованием кэша, для которого требуется TTL (более медленные наборы).';
$string['usecompressor'] = 'Использовать сжатие';
$string['usecompressor_help'] = 'Задает компрессор, который будет использоваться после сериализации. Это делается на уровне Moodle Cache API, а не на уровне php-redis.';
$string['useserializer'] = 'Использовать сериализатор';
$string['useserializer_help'] = 'Указывает используемый сериализатор.
Допустимыми сериализаторами являются Redis :: SERIALIZER_PHP или Redis :: SERIALIZER_IGBINARY.
Последний поддерживается только тогда, когда phpredis настроен с параметром --enable-redis-igbinary и загружается расширение igbinary.';
