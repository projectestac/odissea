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
 * Strings for component 'cachestore_memcache', language 'uk', version '4.5'.
 *
 * @package     cachestore_memcache
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clustered'] = 'Включити кластерні сервери';
$string['clustered_help'] = 'Параметр використовується, щоб задати мультифункціональність з дозволом на одиничне читання.

Таке використання дозволить створювати покращене сховище для конфігурації з балансуванням навантаження. Дані будуть вибиратися з одного сервера (як правило, локального), але задаватися для багатьох (всіх об’єднаних збалансованих серверів). Між кешами встановлюють взаємозв’язок з дуже високою швидкістю читання, що значно економить мережеві ресурси.

При включеному параметрі перераховані сервери будуть використовуватися для вибірки.';
$string['clusteredheader'] = 'Спліт-сервери';
$string['pluginname'] = 'Memcache';
$string['prefix'] = 'Префікс ключа';
$string['prefix_help'] = 'Цей префікс використовується для всіх імен ключа на сервері memcache.
* Якщо вказаний сервер memcache використовується тільки з одним екземпляром Moodle, то ви можете залишити типове значення.
* В зв’язку з обмеженням на довжину ключа префікс не може бути довше 5 символів.';
$string['prefixinvalid'] = 'Неправильний префікс. Ви можете використовувати тільки a-z A-Z 0-9-_.';
$string['servers'] = 'Сервери';
$string['servers_help'] = 'В цьому параметрі потрібно вказати, які сервери memcacheпотрібно використовувати з цим екземпляром кешу. Сервера повинні вказуватися по одному в рядку та складатися з адреси сервера, порта та значимості. Якщо порт не вказано, то використовуватиметься типовий порт (11211).

Наприклад:
<pre>
server.url.com
ipaddress:port
servername:port:weight
</pre>

Якщо нижче включено параметр *Включити кластер серверів*, то тут повинен бути визначеним тільки один сервер. Це, як правило, ім’я локального комп’ютера - 127.0.0.1 or localhost.';
$string['serversclusterinvalid'] = 'При включеній кластеризації обов’язково потрібен хоча б один сервер.';
$string['sessionhandlerconflict'] = 'Попередження: екземпляр memcache ({$a}) вже налаштовано на використання того ж memcached сервера для сесій. Очищення кешу призведе до того, що кеш сесій теж очиститься.';
$string['setservers'] = 'Сервери';
$string['setservers_help'] = 'Список серверів, які  будуть оновлені при зміні даних в кеші. Зазвичай це повні імена кожного з об’єднаних серверів.
Він **повинен ** включати сервери, перераховані вище у списку *Сервери*, навіть якщо з іншим іменем хоста.
Сервера повинні вказуватися по одному на рядок та складатися з адреси сервера та порта (не обов’язково). Якщо порт не задано, то використовуватиметься типовий порт (11211).

Наприклад:
<pre>
server.url.com
ipaddress:port
</pre>';
$string['testservers'] = 'Тестові сервери';
$string['testservers_desc'] = 'Тестові сервери використовуються для модульного тестування та для тестування продуктивності. Зовсім не обов’язково вказувати тестові сервери. Сервери повинні вказуватися по одному на рядок та складатися з адреси сервера та порта. Якщо порт не задано, то використовуватиметься типовий порт (11211).
Наприклад: 127.0.0.1:11211';
