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
 * Strings for component 'enrol_mnet', language 'uk', version '4.5'.
 *
 * @package     enrol_mnet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['error_multiplehost'] = 'Деякі варіанти зарахування через Мережу Moodle вже створені для цього хоста. Дозволяється тільки один варіант на хост та/або один варінт "Всі хости".';
$string['instancename'] = 'Назва методу зарахування';
$string['instancename_help'] = 'Ви можете додатково перейменувати цей варіант методу зарахування через Мережу Moodle. Якщо ви залишите це поле порожнім, буде використано типову назву, яку надає віддалений хост та ролі для його користувачів.';
$string['mnet:config'] = 'Налаштовувати варіанти зарахування через Moodle Мережу';
$string['mnet_enrol_description'] = 'Публікація даного сервісу дозволяє адміністраторам {$a} реєструвати своїх студентів на курсах, які ви створили на своєму сервері.<br/><ul><li><em>Залежності</em>: Вам потрібно також <strong>опублікувати</strong> SSO (Service Provider) сервіс в {$a}.</li><li><em>Залежності</em>: Вам потрібно також <strong>підписати</strong> SSO (Identity Provider) сервіс на {$a}.</li></ul><br/>Підпис на цей сервіс дозволить реєструвати ваших студентів у курсах на {$a}.<br/><ul><li><em>Залежності</em>: Вам потрібно також <strong>підписати</strong> SSO (Identity Provider) сервіс на {$a}.</li>><li><em>Залежності</em>: Вам потрібно такоє <strong>опублікувати</strong> SSO (Service Provider) сервіс в {$a}.</li></ul><br/>';
$string['mnet_enrol_name'] = 'Реєстрація Мережі Moodle';
$string['pluginname'] = 'Віддалене зарахування Мережі Moodle';
$string['pluginname_desc'] = 'Дозволити віддаленому хосту Мережі Moodle зараховувати своїх користувачів на ваші курси.';
$string['privacy:metadata'] = 'Плагін віддаленої реєстрації MNet не зберігає жодних особистих даних.';
$string['remotesubscriber'] = 'Віддалений хост';
$string['remotesubscriber_help'] = 'Виберіть "Всі хости", для відкриття цього курсу для всіх користувачів Мережі Moodle, яким дозволено реєстрація на вашому хості. Або вкажіть окремий хост, користувачам якого дозволено зараховуватися до вашого курсу.';
$string['remotesubscribersall'] = 'Всі хости';
$string['roleforremoteusers'] = 'Роль для їх користувачів';
$string['roleforremoteusers_help'] = 'Яку роль отримують віддалені користувачі, які приходять з вибраного хосту.';
