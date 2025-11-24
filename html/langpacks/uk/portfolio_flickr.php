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
 * Strings for component 'portfolio_flickr', language 'uk', version '4.5'.
 *
 * @package     portfolio_flickr
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikey'] = 'Ключ API';
$string['contenttype'] = 'Типи вмісту';
$string['err_noapikey'] = 'Відсутній ключ API';
$string['err_noapikey_help'] = 'У цьому модулі відсутнє налаштування ключа API. Ви можете отримати його з http://flickr.com/services/api/keys/apply';
$string['hidefrompublicsearches'] = 'Заховати ці зображення від загального пошуку?';
$string['isfamily'] = 'Видиме для сім’ї';
$string['isfriend'] = 'Видиме для друзів';
$string['ispublic'] = 'Для загалу (будь-хто може бачити)';
$string['moderate'] = 'Помірно';
$string['noauthtoken'] = 'Не вдалося отримати аутентифікацію для використання в цій сесії';
$string['other'] = 'Арт, ілюстрації, CGI, або інші не фотографічні зображення';
$string['photo'] = 'Фото';
$string['pluginname'] = 'Flickr.com';
$string['privacy:metadata'] = 'Цей плагін надсилає дані назовні до пов’язаного облікового запису Flickr. Він не зберігає дані локально.';
$string['privacy:metadata:data'] = 'Персональні дані, що передаються з підсистеми портфеля.';
$string['restricted'] = 'Обмежено';
$string['safe'] = 'Безпечно';
$string['safetylevel'] = 'Рівень безпеки';
$string['screenshot'] = 'Знімки екрану';
$string['set'] = 'Встановити';
$string['setupinfo'] = 'Інструкції встановлення';
$string['setupinfodetails'] = 'Для отримання ключа API та секретного рядка, зайдіть на Flickr та <a href="{$a->applyurl}">подайте заявку на новий ключ</a>.  Як тільки новий ключ та секрет для вас будуть створені, перейдіть за посиланням на сторінку "Редагувати авторизаційний потік для цієї програми". Виберіть "Тип програми" для "Веб програми". У полі "Зворотній URL" вкажіть значення: <br /><code>{$a->callbackurl}</code><br /> Додатково, ви можете також надати опис вашого Moodle сайту та логотип. Ці двні можна буде відредагувати пізніше на <a href="{$a->keysurl}">сторінці</a> списку ваших програм для Flickr.';
$string['sharedsecret'] = 'Секретний рядок';
$string['title'] = 'Заголовок';
$string['uploadfailed'] = 'Помилка завантаження зображення на flickr.com: {$a}';
