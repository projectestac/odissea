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
 * Strings for component 'portfolio_boxnet', language 'uk', version '4.1'.
 *
 * @package     portfolio_boxnet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'Код клієнта';
$string['clientsecret'] = 'Секретне слово клієнта';
$string['existingfolder'] = 'Існуюча тека для файлів';
$string['folderclash'] = 'Тека, яку ви хочете створити, вже існує!';
$string['foldercreatefailed'] = 'Не вдалося створити цільову теку на box.net';
$string['folderlistfailed'] = 'Не вдалося отримати список каталогів з box.net';
$string['missinghttps'] = 'Потрібно HTTPS';
$string['missinghttps_help'] = 'Box працюватиме тільки з включеним на веб-сайті HTTPS.';
$string['missingoauthkeys'] = 'Відсутні код клієнта та секретне слово';
$string['missingoauthkeys_help'] = 'Не налаштовано код клієнта або секретне слово в цьому модулі. Ви можете отримати один з них зі сторінки розробки Box.';
$string['newfolder'] = 'Нова тека для файлів';
$string['noauthtoken'] = 'Не вдалося отримати аутентифікацію для використання в цій сесії';
$string['notarget'] = 'Ви повинні вказати існуючу теку або створити нову для завантаження в неї';
$string['noticket'] = 'Не вдалося отримати квиток box.net, щоб почати аутентифікацію сесії';
$string['password'] = 'Ваш пароль на box.net (не буде зберігатися)';
$string['pluginname'] = 'Box.net';
$string['sendfailed'] = 'Помилка надсилання контенту на box.net: {$a}';
$string['setupinfo'] = 'Інструкції налаштування';
$string['setupinfodetails'] = 'Для отримання ключа API, увійдіть на Box.net та відвідайте <a href="{$a->servicesurl}">OpenBox сторінку розробників</a>. В "Інструментах розробника (Developer Tools)" перейдіть до "Створити нову програму (Create new application)" та створіть нову програму для вашого Moodle сайту. Ключ API буде показано у секції  "Backend parameters" форми редагування. У цій формі заповніть поле "URL переадресації (Redirect URL)": <br /><code>{$a->callbackurl}</code><br /> Додатково, ви можете також надати іншу інформацію про ваш сайт Moodle. Ці значення можна відредагувати пізніше на сторінці "Перегляд моїх прграм (View my applications)"';
$string['sharedfolder'] = 'Відкрито';
$string['sharefile'] = 'Відкрити доступ до цього файлу?';
$string['sharefolder'] = 'Відкрити доступ до цієї теки?';
$string['targetfolder'] = 'Тека призначення';
$string['tobecreated'] = 'До створення';
$string['username'] = 'Ваше ім’я на box.net (не буде зберігатися)';
$string['warninghttps'] = 'Box вимагає, щоб ваш сайт використовував HTTPS для нормальної роботи портфоліо.';
