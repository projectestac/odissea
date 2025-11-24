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
 * Strings for component 'portfolio_mahara', language 'uk', version '4.5'.
 *
 * @package     portfolio_mahara
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['enableleap2a'] = 'Включити підтримку портфоліо Leap2a (вимагає Mahara 1.3)';
$string['err_invalidhost'] = 'Неправильний хост Мережі Moodle';
$string['err_invalidhost_help'] = 'Цей плагін помилково вказує на неправильний (або вилучений) хост Мережі Moodle. Цей модуль використовується у Мережі Moodle з SSO IDP публікуванням, SSO_SP розсиланням та портфоліо розсиланням <b>та</b> публікуванням.';
$string['err_networkingoff'] = 'Мережа Moodle вимкнена';
$string['err_networkingoff_help'] = 'Аутентифікація MNet наразі вимкнена. Будь ласка, увімкніть його, перш ніж намагатися налаштувати цей плагін. Будь-які екземпляри цього плагіна були приховані, доки MNet не буде ввімкнено. Потім їх потрібно буде знову вручну встановити на видимі.';
$string['err_nomnetauth'] = 'Модуль аутентифікації Мережі Moodle відключено';
$string['err_nomnetauth_help'] = 'Модуль аутентифікації Мережі Moodle відключено, але він потрібен для цього сервісу';
$string['err_nomnethosts'] = 'Опирається на Мережу Moodle';
$string['err_nomnethosts_help'] = 'Цей модуль опирається на Мережу Moodle з SSO IDP публікуванням, SSO_SP розсиланням та портфоліо розсиланням <b>та</b> публікуванням, а також на аутентифікацію Мережі Moodle. Всі варіанти цього модуля встановлено у невидимий стан до часу, поки не буде усунено цієї проблеми. Вам потрібно буде встановити їх видимими вручну.';
$string['failedtojump'] = 'Не вдалося почати обмін даними з віддаленим сервером';
$string['failedtoping'] = 'Не вдалося почати обмін даними з віддаленим сервером: {$a}';
$string['mnet_nofile'] = 'Не вдалося знайти файл в передачі об\'єкта - дивні помилки';
$string['mnet_nofilecontents'] = 'Знайдено файл в передачі об’єкту, але там файлу не повинно бути  - дивні помилки: {$a}';
$string['mnet_noid'] = 'Не вдалося знайти відповідний запис передачі для цього маркера';
$string['mnet_notoken'] = 'Не вдалося знайти маркер відповідності цій передачі';
$string['mnet_wronghost'] = 'Віддалений хост не відповідає передачі запису для цього маркера';
$string['mnethost'] = 'Хост Мережі Moodle';
$string['pf_description'] = 'Дозволяє користувачам викладати Moodle контент до цього хосту <br /> Підписатися <b>та</b> публікувати цей сервіс дозволяє аутентифікованим користувачам на вашому сайті викладати контент до {$a}<br /><ul><li><em> Залежності</em>:  Залежності</em>: Ви також повинні опублікувати</strong> SSO (Identify Provider) сервіс для {$a}.</li><li><em> Залежності</em>: Ви також повинні <strong>підписатися</strong> на SSO (Service Provider) сервіс на {$a}</li><li><em> Залежності</em>: Ви також повинні включити модуль аутентифікації Мережі Moodle.</li></ul><br />';
$string['pf_name'] = 'Сервіси портфоліо';
$string['pluginname'] = 'Mahara ePortfolio';
$string['privacy:metadata'] = 'Цей плагін надсилає дані назовні до пов’язаної програми Mahara. Він не зберігає дані локально.';
$string['privacy:metadata:data'] = 'Персональні дані, що передаються з підсистеми портфеля.';
$string['senddisallowed'] = 'Наразі ви не можете передавати файли до Mahara';
$string['url'] = 'Гіперпосилання';
