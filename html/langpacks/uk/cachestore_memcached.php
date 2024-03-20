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
 * Strings for component 'cachestore_memcached', language 'uk', version '4.1'.
 *
 * @package     cachestore_memcached
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bufferwrites'] = 'Буферизований запис';
$string['bufferwrites_help'] = 'Включає або виключає буферизацію вводу/виводу. Включення буферизації вводу/виводу викликає збереження команд в "буфері" замість їх відправки. Будь-яка дія, яка отримує дані, викликає відправлення цього буфера до віддаленого підключення. Завершення з’єднання або повне закриття з’єднання також викличе передачу даних буфера до віддаленого підключення.';
$string['clustered'] = 'Включити кластерні сервери';
$string['clustered_help'] = 'Параметр використовується, щоб задати мультифункціональність з дозволом на одиничне читання.

Таке використання дозволить створювати покращене сховище для конфігурації з балансуванням навантаження. Дані будуть вибиратися з одного сервера (як правило, локального), але задаватися для багатьох (всіх об’єднаних збалансованих серверів). Між кешами встановлюють взаємозв’язок з дуже високою швидкістю читання, що значно економить мережеві ресурси.

При включеному параметрі перераховані сервери будуть використовуватися для вибірки.';
$string['clusteredheader'] = 'Спліт-сервери';
$string['hash'] = 'Хеш метод';
$string['hash_crc'] = 'CRC';
$string['hash_default'] = 'Типово (хеш функція Дженкінса)';
$string['hash_fnv1_32'] = 'FNV1_32';
$string['hash_fnv1_64'] = 'FNV1_64';
$string['hash_fnv1a_32'] = 'FNV1A_32';
$string['hash_fnv1a_64'] = 'FNV1A_64';
$string['hash_help'] = 'Задає алгоритм хешування, який використовується для ключів елементів. Кожен алгоритм хешування має свої переваги та недоліки. Використовуйте типове значення, якщо ви не знаєте або вам байдуже.';
$string['hash_hsieh'] = 'Hsieh';
$string['hash_md5'] = 'MD5';
$string['hash_murmur'] = 'Murmur';
$string['isshared'] = 'Спільний кеш';
$string['isshared_help'] = 'Чи використовується ваш memcached іншими програмами?

Якщо кеш є спільним з іншими програмами, то тоді кожен ключ буде видалятися індивідуально, щоб впевнитися, що будуть видалені лише дані, які належать цій програмі (та залишити дані зовнішньої програми не ушкодженими). Це може призвести до зниження продуктивності під час очищення кешу в залежності від налаштувань сервера.

Якщо кеш запущено під конкретну програму, то він весь може бути очищеним без ризику знищити дані іншої програми. Це повинно призвести до збільшення продуктивності під час очищення кешу.';
$string['pluginname'] = 'Memcached';
$string['prefix'] = 'Префікс ключа';
$string['prefix_help'] = 'Може використовуватися для створення "домену" для ключів елементів. Це дозволяє створити кілька сховищ memcached на одній інсталяції memcached. У зв’язку з обмеженням на довжину ключа префікс не може бути довшим за 16 символів.';
$string['prefixinvalid'] = 'Неправильний префікс. Ви можете використовувати тільки a-z A-Z 0-9-_.';
$string['privacy:metadata:memcached'] = 'Плагін Memcached cachestore зберігає дані на короткий час як частину своїх функцій кешування. Ці дані зберігаються на сервері Memcache, де дані регулярно видаляються.';
$string['privacy:metadata:memcached:data'] = 'Різні дані, що зберігаються в кеші';
$string['serialiser_igbinary'] = 'Сериалізатор IGBINARY/';
$string['serialiser_json'] = 'Сериалізатор JSON.';
$string['serialiser_php'] = 'Типовий PHP сериалізатор';
$string['servers'] = 'Сервари';
$string['servers_help'] = 'Це встановлює сервери, які має використовувати цей адаптер memcached.
Сервери мають бути визначені по одному на рядок і складатися з адреси сервера та, за бажанням, порту та ваги.
Якщо порт не вказано, використовується порт за замовчуванням (11211).

Наприклад:
<pre>
server.url.com
ipaddress: port
ім\'я сервера:порт:вага
</pre>

Якщо нижче ввімкнено *Увімкнути кластеризовані сервери*, тут має бути лише один сервер. Зазвичай це ім’я, яке завжди розв’язується на локальній машині, наприклад 127.0.0.1 або localhost.';
$string['serversclusterinvalid'] = 'При включеній кластеризації обов’язково потрібен хоча б один сервер.';
$string['sessionhandlerconflict'] = 'Попередження: екземпляр memcached ({$a}) вже налаштовано на використання того ж memcached сервера для сесій. Очищення кешу призведе до того, що кеш сесій теж очиститься.';
$string['setservers'] = 'Сервери';
$string['setservers_help'] = 'Це список серверів, які будуть оновлюватися, коли дані будуть змінені в кеші. Як правило, повне ім’я кожного сервера в пулі.
Він **повинен** включати сервер, зазначений у списку *Сервери* вище, навіть якщо він має інше ім’я хоста.
Сервери мають бути визначені по одному на рядок і складатися з адреси сервера та, за бажанням, порту.
Якщо порт не вказано, використовується порт за замовчуванням (11211).

Наприклад:
<pre>
server.url.com
ipaddress: порт
</pre>';
$string['testservers'] = 'Тестові сервери';
$string['testservers_desc'] = 'Один або кілька рядків підключення для Memcache серверів, для перевірки. Якщо тестовий сервер був зазначений, то Memcache продуктивність може бути перевірена за допомогою сторінки продуктивності кеша в блоці керування. Як приклад: 127.0.0.1:11211';
$string['upgrade200recommended'] = 'Ми рекомендуємо вам оновити розширення РНР Memcached до версії 2.0.0 або новіше. Версія РНР Memcached, яку ви зараз використовуєте, не дає можливості Moodle переконатися в тому, що кеш ізольовано. До моменту оновлення ми рекомендуємо не налаштовувати інші програми на використання тих же серверів Memcached, які використовує Moodle.';
$string['usecompression'] = 'Використовувати стискання';
$string['usecompression_help'] = 'Включення або виключення стискання значень.';
$string['useserialiser'] = 'Використовувати сериалізатор';
$string['useserialiser_help'] = 'Визначає сериалізатор, який буде використовуватися для сериалізації нескалярних значень. Можливі сериалізатори - Memcached::SERIALIZER_PHP або Memcached::SERIALIZER_IGBINARY.
Останній підтримується лише у випадку, якщо Memcachedзібрано з опцією --enable-memcached-igbinary та завантажено розширення igbinary.';
