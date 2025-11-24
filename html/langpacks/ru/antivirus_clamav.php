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
 * Strings for component 'antivirus_clamav', language 'ru', version '4.5'.
 *
 * @package     antivirus_clamav
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['antivirusfailed'] = 'В настоящий момент существует проблема с антивирусной проверкой. Ваш файл {$a->item} не был загружен. Пожалуйста, попробуйте позже.';
$string['clamfailed'] = 'Запустить Clam AV не удалось. Возвращено следующее сообщение об ошибке «{$a}». Ниже - сообщение от Clam:';
$string['clamfailureonupload'] = 'При ошибке ClamAV';
$string['configclamactlikevirus'] = 'Считать файлы зараженными';
$string['configclamdonothing'] = 'Считать файлы нормальными';
$string['configclamfailureonupload'] = 'Если выбран вариант «Считать файлы нормальными», файлы будут перемещены в целевой каталог. Если выбран вариант «Отказаться от загрузки, повторить попытку», пользователю будет предложено повторить попытку позже. Если выбран вариант «Считать файлы зараженными», файлы будут перемещены в область карантина или удалены. Предупреждение: если по какой-то причине Clam не запускается (обычно из-за неверного пути к Clam), то ВСЕ загружаемые файлы будут перемещены в заданную область карантина или удалены.';
$string['configclamtryagain'] = 'Отказано в загрузке, попробуйте еще раз';
$string['errorcantopensocket'] = 'Подключение к сокету домена Unix привело к ошибке {$ а}';
$string['errorclamavnoresponse'] = 'ClamAV не отвечает; проверьте состояние работы демона.';
$string['errornounixsocketssupported'] = 'Подключение к сокету домена Unix не поддерживается в данной системе. Пожалуйста, используйте параметр командной строки.';
$string['invalidpathtoclam'] = 'Система настроена на запуск Clam при загрузке файлов, однако заданный путь к Clam AV ({$a}) некорректен.';
$string['pathtoclam'] = 'Командная строка';
$string['pathtoclamdesc'] = 'Если установлено «Командная строка», то введите здесь путь к ClamAV. В Linux это будет /usr/bin/clamscan или /usr/bin/clamdscan.';
$string['pathtounixsocket'] = 'Сокет домена Unix';
$string['pathtounixsocketdesc'] = 'Если установлено «Сокет домена Unix», введите здесь путь к сокету ClamAV Unix. В Debian Linux это будет /var/run/clamav/clamd.ctl. Пожалуйста, убедитесь, что демон ClamAV имеет доступ для чтения загруженных файлов, самым простым способом гарантировать это является добавление пользователя «ClamAV» в группу Веб-сервер («www-data» на Debian Linux).';
$string['pluginname'] = 'Антивирус ClamAV';
$string['privacy:metadata'] = 'Плагин антивируса ClamAV не хранит никаких персональных данных.';
$string['quarantinedir'] = 'Каталог карантина';
$string['runningmethod'] = 'Способ запуска';
$string['runningmethodcommandline'] = 'Командная строка';
$string['runningmethoddesc'] = 'По умолчанию как способ запуска ClamAV используется Командная строка. Однако в системах Unix более высокая производительность может быть получена с помощью системы сокетов.';
$string['runningmethodtcpsocket'] = 'TCP сокет';
$string['runningmethodunixsocket'] = 'Сокет домена Unix';
$string['tcpsockethost'] = 'Имя хоста TCP сокета';
$string['tcpsockethostdesc'] = 'Доменное имя сервера ClamAV';
$string['tcpsocketport'] = 'Порт TCP сокета';
$string['tcpsocketportdesc'] = 'Порт для использования при подключении к ClamAV';
$string['tries'] = 'Попытки сканирования';
$string['tries_desc'] = 'Количество попыток ClamAV при возникновении ошибкок в процессе сканирования';
$string['tries_notice'] = 'Попыток сканирования ClamAV {$a->tries} раз(а).
{$a->notice}';
$string['unknownerror'] = 'Неизвестная ошибка в Clam AV';
