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
 * Strings for component 'antivirus', language 'ru', version '4.4'.
 *
 * @package     antivirus
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actantivirushdr'] = 'Доступные плагины антивирусов';
$string['antiviruscommonsettings'] = 'Общие настройки антивируса';
$string['antiviruses'] = 'Антивирусные плагины';
$string['antivirussettings'] = 'Управление антивирусными плагинами';
$string['configantivirusplugins'] = 'Пожалуйста, выберите антивирусные плагины, которые вы хотите использовать, и отсортируйте их в порядке применения.';
$string['dataerrordesc'] = 'Произошла ошибка сканера данных.';
$string['dataerrorname'] = 'Ошибка сканера данных';
$string['datainfecteddesc'] = 'Обнаружены зараженные данные.';
$string['datainfectedname'] = 'Данные заражены';
$string['datastream'] = 'Данные';
$string['emailadditionalinfo'] = 'Дополнительные сведения, возвращенные антивирусом:';
$string['emailauthor'] = 'Загружено пользователем:';
$string['emailcontenthash'] = 'Хеш содержимого:';
$string['emailcontenttype'] = 'Тип содержимого:';
$string['emaildate'] = 'Дата загрузки:';
$string['emailfilename'] = 'Имя файла:';
$string['emailfilesize'] = 'Размер файла:';
$string['emailgeoinfo'] = 'Местонахождение:';
$string['emailinfectedfiledetected'] = 'Обнаружен зараженный файл';
$string['emailipaddress'] = 'IP-адрес:';
$string['emailreport'] = 'Отчет:';
$string['emailscanner'] = 'Сканер:';
$string['emailscannererrordetected'] = 'Ошибка сканирования';
$string['emailsubject'] = '{$a} :: оповещение антивируса Clam AV';
$string['enablequarantine'] = 'Включить карантин';
$string['enablequarantine_help'] = 'Если этот параметр включен, то все файлы, опознанные как вирусы, будут помещены в папку карантина ([dataroot]/{$a}) для последующей проверки. Загрузить их в Moodle не удастся. Если используется антивирусное сканирование на уровне файловой системы, то папку карантина следует исключить из антивирусной проверки, чтобы избежать обнаружения зараженных файлов в карантине.';
$string['fileerrordesc'] = 'Произошла ошибка сканера файлов.';
$string['fileerrorname'] = 'Ошибка сканера файлов';
$string['fileinfecteddesc'] = 'Обнаружен зараженный файл.';
$string['fileinfectedname'] = 'Файл заражен';
$string['notifyemail'] = 'Уведомлять о вирусах по электронной почте';
$string['notifyemail_help'] = 'Адрес электронной почты для уведомлений об обнаружении вируса. Если оставить поле пустым, то уведомления будут отправлены всем администраторам сайта.';
$string['notifylevel'] = 'Уровень уведомления';
$string['notifylevel_help'] = 'Различные уровни информации, о которой вы хотите получать уведомления';
$string['notifylevelerror'] = 'Обнаруженные угрозы и ошибки сканирования';
$string['notifylevelfound'] = 'Только обнаруженные угрозы';
$string['privacy:metadata'] = 'Антивирусная система не хранит никаких персональных данных.';
$string['quarantinedfiles'] = 'Файлы в карантине антивируса';
$string['quarantinedisabled'] = 'Карантин отключен. Файл не сохранен.';
$string['quarantinetime'] = 'Максимальное время карантина';
$string['quarantinetime_desc'] = 'Файлы старше указанного срока будут удаляться из карантина.';
$string['taskcleanup'] = 'Очистить файлы в карантине.';
$string['threshold'] = 'Порог для проверки состояния';
$string['threshold_desc'] = 'Определяет, насколько далеко назад проверять предыдущие результаты на наличие ошибок и т. д., которые указаны в {$a}.';
$string['unknown'] = 'Неизвестно';
$string['virusfound'] = '{$a->item} был проверен антивирусом и является инфицированным!';
