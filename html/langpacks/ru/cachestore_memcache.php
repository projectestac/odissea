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
 * Strings for component 'cachestore_memcache', language 'ru', version '3.8'.
 *
 * @package     cachestore_memcache
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clustered'] = 'Включить в кластер серверов';
$string['clustered_help'] = 'Параметр используется, чтобы задать мульти-функциональность с разрешением единичного чтения.

Предполагаемое использование позволит создать улучшенное хранилище для конфигурации с балансировкой нагрузки. Данные будут выбираться из одного сервера (как правило, локального), но задаваться для многих (всех объединенных сбалансированных серверов). Между кэшами устанавливаются соотношения с очень высокой скоростью считывания, это экономит значительное количество сетевых ресурсов.

При включенном параметре вышеперечисленные серверы будут использоваться для выборки.';
$string['clusteredheader'] = 'Используемые серверы';
$string['pluginname'] = 'Memcache';
$string['prefix'] = 'Префикс ключа';
$string['prefix_help'] = 'Этот префикс используется для всех имен ключей имен на сервере memcache.
* Если указанный сервер memcache используется только с одним экземпляром Moodle, то Вы можете оставить значение по умолчанию.
* В связи с ограничением на длину ключа префикс не может быть длиннее 5 символов.';
$string['prefixinvalid'] = 'Неверный префикс. Вы можете использовать только a-z A-Z 0-9-_.';
$string['privacy:metadata:memcache'] = 'Плагин хранилища кэша «Memcache» хранит данные в течение короткого времени как часть своей функции кэширования. Эти данные хранятся на сервере Memcache, где они регулярно удаляются.';
$string['privacy:metadata:memcache:data'] = 'Различные данные, хранящиеся в кэше';
$string['servers'] = 'Серверы';
$string['servers_help'] = 'В этом параметре следует указать, какие серверы memcahce следует использовать с этим экземпляром кэша.
Серверы должны указываться по одному в строке и состоять из адреса сервера и (необязательно) - порта и веса. Если порт не задан, то используется порт по умолчанию (11211).

Например:
<pre>
server.url.com
ipaddress:port
servername:port:weight
</pre>

Если ниже включен параметр *Включить кластер серверов*, то здесь должен быть приведен только один сервер. Это, как правило, имя локального компьютера, такое как 127.0.0.1 или localhost.';
$string['serversclusterinvalid'] = 'Необходимый сервер при включенном кластере.';
$string['sessionhandlerconflict'] = 'Предупреждение: Экземпляр memcache ({$a}) был настроен на использование того же сервера, который  кэширует и сессии. Очистка всех кэшей приведет к тому, что сессии тоже будут удалены.';
$string['setservers'] = 'Серверы';
$string['setservers_help'] = 'Список серверов, которые будут обновлены  при изменении данных в кэше. Обычно это полные имена каждого из объединенных серверов.
Он  **должен** включать серверы, перечисленные выше в списке *Серверы*, даже если он имеет другое имя хоста.
Серверы должны указываться по одному в строке и состоять из адреса сервера и порта (не обязательно). Если порт не задан, то используется порт по умолчанию (11211).

Например:
<pre>
server.url.com
ipaddress:port
</pre>';
$string['testservers'] = 'Тестовые серверы';
$string['testservers_desc'] = 'Одна или несколько строк подключения к серверам memcache для тестирования. Если тестовый сервер был указан, то производительность memcache может быть проверена с помощью страницы «Производительность кэша» в блоке «Администрирование».
Например: 127.0.0.1:11211';
