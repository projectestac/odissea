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
 * Strings for component 'antivirus_clamav', language 'uk', version '4.5'.
 *
 * @package     antivirus_clamav
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['antivirusfailed'] = 'На даний момент виникла проблема зі скануванням антивірусом. Ваш файл {$a->item} не завантажено. Будь-ласка спробуйте пізніше.';
$string['clamfailed'] = 'Clam AV не запустився. Повідомлення про помилку: {$a}. Clam повернув повідомлення:';
$string['clamfailureonupload'] = 'При помилці ClamAV';
$string['configclamactlikevirus'] = 'Вважати файли зараженими';
$string['configclamdonothing'] = 'Вважати файли чистими';
$string['configclamfailureonupload'] = 'Якщо вибрано «Обробляти файли як ОК», файли будуть переміщені в каталог призначення. Якщо вибрано «Відмовитися від завантаження, спробуйте ще раз», користувачу буде запропоновано повторити спробу пізніше. Якщо вибрано «Обробляти файли як віруси», файли будуть переміщені в зону карантину або видалені. Попередження: за допомогою цієї опції, якщо з якоїсь причини clam не запускається (зазвичай через недійсний pathtoclam), УСІ завантажені файли будуть переміщені до вказаної зони карантину або видалені.';
$string['configclamtryagain'] = 'Відмовтеся від завантаження, спробуйте ще раз';
$string['errorcantopensocket'] = 'Підключення до доменного сокета Unix призвело до помилки {$a}';
$string['errorclamavnoresponse'] = 'ClamAV не відповідає; перевірити стан запущеного демона.';
$string['errornounixsocketssupported'] = 'Транспорт доменних сокетів Unix не підтримується в цій системі. Натомість використовуйте параметр командного рядка.';
$string['invalidpathtoclam'] = 'Moodle сконфігурований на перевірку завантажуваних файлів на віруси, але шлях до ClamAV, {$a}, є неправильним.';
$string['pathtoclam'] = 'Командний рядок';
$string['pathtoclamdesc'] = 'Якщо для методу запуску встановлено значення «командний рядок», введіть тут шлях до ClamAV. У Linux це буде /usr/bin/clamscan або /usr/bin/clamdscan.';
$string['pathtounixsocket'] = 'Доменний сокет Unix';
$string['pathtounixsocketdesc'] = 'Якщо для методу запуску встановлено значення «Сокет домену Unix», введіть тут шлях до сокету ClamAV Unix. У Debian Linux це буде /var/run/clamav/clamd.ctl. Будь ласка, переконайтеся, що демон clamav має доступ для читання до завантажених файлів, найпростіший спосіб переконатися, що це додати користувача \'clamav\' до вашої групи веб-сервера (\'www-data\' в Debian Linux).';
$string['pluginname'] = 'Антивірус ClamAV';
$string['privacy:metadata'] = 'Антивірусний плагін ClamAV не зберігає жодних персональних даних.';
$string['quarantinedir'] = 'Карантинний каталог';
$string['runningmethod'] = 'Біговий метод';
$string['runningmethodcommandline'] = 'Командний рядок';
$string['runningmethoddesc'] = 'Метод запуску ClamAV. Командний рядок використовується за замовчуванням, однак у системах Unix кращу продуктивність можна отримати за допомогою системних сокетів.';
$string['runningmethodtcpsocket'] = 'TCP socket';
$string['runningmethodunixsocket'] = 'Unix domain socket';
$string['tcpsockethost'] = 'TCP socket hostname';
$string['tcpsockethostdesc'] = 'Доменне ім\'я сервера ClamAV';
$string['tcpsocketport'] = 'TCP socket port';
$string['tcpsocketportdesc'] = 'Порт для підключення до ClamAV';
$string['tries'] = 'Спроби сканування';
$string['tries_desc'] = 'Кількість спроб, зроблених ClamAV, якщо під час процесу сканування сталася помилка.';
$string['tries_notice'] = 'Сканування Clamav спробувала {$a->tries} раз(ів). {$a->notice}';
$string['unknownerror'] = 'Невідома помилка антивіруса';
