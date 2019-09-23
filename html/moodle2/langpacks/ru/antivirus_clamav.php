<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'antivirus_clamav', language 'ru', branch 'MOODLE_36_STABLE'
 *
 * @package   antivirus_clamav
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clamfailed'] = 'Запустить Clam AV не удалось. Возвращено следующее сообщение об ошибке «{$a}». Ниже - сообщение от Clam:';
$string['clamfailureonupload'] = 'При ошибке ClamAV';
$string['configclamactlikevirus'] = 'Считать файлы зараженными';
$string['configclamdonothing'] = 'Считать файлы нормальными';
$string['configclamfailureonupload'] = 'Как вести себя в этом случае, если вы настроили Clam сканировать загружаемые файлы, но он настроен неправильно или не запускается по неизвестной причине? Если вы выберете «Считать файлы зараженными», они будут перемещаться в зону карантина или удаляться. Если вы выберете «Считать файлы нормальными», файлы будут перемещаться в целевой каталог как незараженные. В любом случае, администраторы будут уведомлены, что произошла ошибка Clam. Если вы выберете «Считать файлы зараженными» и по какой-то причине Clam не запустится (обычно это происходит потому, что вы ввели неправильный путь к Clam), то ВСЕ загружаемые файлы будут перемещаться в указанную зону карантина или удаляться. Будьте осторожны с этим параметром.';
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
$string['runningmethodunixsocket'] = 'Сокет домена Unix';
$string['unknownerror'] = 'Неизвестная ошибка в Clam AV';
