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
 * Strings for component 'mnetservice_enrol', language 'uk', version '4.5'.
 *
 * @package     mnetservice_enrol
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['availablecourseson'] = 'Доступні курси на {$a}';
$string['availablecoursesonnone'] = 'Віддалений хост <a href="{$a->hosturl}">{$a->hostname}</a> не пропонує курси для наших користувачів.';
$string['clientname'] = 'Віддалений  клієнт зарахування';
$string['clientname_help'] = 'Цей інструментарій дозволяє вам зараховувати та відраховувати ваших локальних користувачів на віддалений хост, який дозволяє вам це робити через модуль \'Віддалена реєстрація в Мережі Moodle\'.';
$string['editenrolments'] = 'Редагувати зарахування';
$string['hostappname'] = 'Програма';
$string['hostname'] = 'Назва хоста';
$string['hosturl'] = 'URL віддаленого хоста';
$string['nopublishers'] = 'Немає доступних віддалених курсів.';
$string['noroamingusers'] = 'Щоб бути зарахованим до курсів інших сайтів, в контексті системи користувачам потрібне право \'{$a}\', однак жоден користувач не має такого права. Натисніть кнопку Продовжити, щоб призначити необхідні права одній або кільком ролям на вашому сайті.';
$string['otherenrolledusers'] = 'Інші зараховані користувачі';
$string['pluginname'] = 'Віддалена служба реєстрації';
$string['privacy:metadata:mnetservice_enrol_enrolments'] = 'Послуга дистанційної реєстрації';
$string['privacy:metadata:mnetservice_enrol_enrolments:enroltime'] = 'Час, коли реєстрація була змінена';
$string['privacy:metadata:mnetservice_enrol_enrolments:enroltype'] = 'Тип реєстрації на віддаленому сервері, який використовується для реєстрації користувача на курсі';
$string['privacy:metadata:mnetservice_enrol_enrolments:hostid'] = 'Ідентифікатор віддаленого хоста MNet';
$string['privacy:metadata:mnetservice_enrol_enrolments:remotecourseid'] = 'Ідентифікатор курсу на віддаленому сервері';
$string['privacy:metadata:mnetservice_enrol_enrolments:rolename'] = 'Ім\'я ролі на віддаленому сервері';
$string['privacy:metadata:mnetservice_enrol_enrolments:tableexplanation'] = 'Служба віддаленої реєстрації зберігає інформацію про зарахування локальних користувачів на курси на віддалених хостах.';
$string['privacy:metadata:mnetservice_enrol_enrolments:userid'] = 'Ідентифікатор локального користувача на цьому сервері';
$string['refetch'] = 'Повторно оновити стан з віддалених хостів';
