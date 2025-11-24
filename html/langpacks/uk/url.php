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
 * Strings for component 'url', language 'uk', version '4.5'.
 *
 * @package     url
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['chooseavariable'] = 'Виберіть змінну...';
$string['clicktoopen'] = 'Натисніть на {$a}, щоб відкрити ресурс.';
$string['configdisplayoptions'] = 'Виділити всі варіанти, які повинні бути доступні, існуючі параметри не змінюються. Утримуйте CTRL для вибору кількох полів.';
$string['configframesize'] = 'Коли веб-сторінка або завантажений файл показуються у фреймі, це значення визначає висоту (у пікселях) верхнього фрейму (де буде знаходитися панель навігації)';
$string['configrolesinparams'] = 'Чи мають налаштовані назви ролей (з налаштувань курсу) бути доступними як змінні для параметрів URL-адреси?';
$string['configsecretphrase'] = 'Ця секретна фраза використовується для створення зашифрованого коду значення, який може бути відправленим для деяких серверів як параметр. Зашифрований код складає md5 значення поточної IP-адреси користувача з’єднане з кодовою фразою, тобто код = md5 (IP.secretphrase). Будь ласка, зверніть увагу, що це не є надійним методом, оскільки IP-адреса може змінюватися і часто визначається випадково для різних комп\'ютерів.';
$string['contentheader'] = 'Вміст';
$string['createurl'] = 'Створити Гіперпосилання';
$string['displayoptions'] = 'Доступні параметри показу';
$string['displayselect'] = 'Показати';
$string['displayselect_help'] = 'Це налаштування разом з типом файлу та можливістю браузера вбудовувати файли, визначає, як гіперпосилання буде показано. Параметри можуть включати: * Автоматично - найкращий вибір, якщо ви не знаєте що встановити, спосіб відображення буде вибрано автоматично * Вбудувати - гіперпосилання відображається на сторінці під навігаційною панеллю разом з описом та іншими блоками * Примусове завантаження - Користувач повинен завантажити файл, який знаходиться за гіперпосиланням * Відкрити - У вікні браузера буде відображатися тільки  файл, який знаходиться за гіперпосиланням * У виринаючому вікні - гіперпосилання буде відкрито у новому вікні браузера без меню та адресного рядка * У фреймі - гіперпосилання буде відкрито у фреймі під навігаційною панеллю та описом * У новому вікні - гіперпосилання буде відкрито у новому вікні браузера з меню та адресним рядком';
$string['displayselectexplain'] = 'Виберіть тип показу, на жаль, не всі типи підходять для всіх гіперпосилань.';
$string['externalurl'] = 'Існуюче посилання';
$string['framesize'] = 'Висота фрейму';
$string['indicator:cognitivedepth'] = 'Гіперпосилання: пізнавальний аспект';
$string['indicator:cognitivedepth_help'] = 'Цей показник базується на глибині пізнання, досягнутої студентом у URL-ресурсі.';
$string['indicator:cognitivedepthdef'] = 'Когнітивна URL-адреса';
$string['indicator:cognitivedepthdef_help'] = 'Учасник досяг цього відсотка когнітивної взаємодії, запропонованої ресурсами URL-адреси протягом цього інтервалу аналізу (Рівні = Без перегляду, Перегляд)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Гіперпосилання: соціальний аспект';
$string['indicator:socialbreadth_help'] = 'Цей показник базується на соціальній широті, досягнутої студентом у URL-ресурсі.';
$string['indicator:socialbreadthdef'] = 'Соціальна URL-адреса';
$string['indicator:socialbreadthdef_help'] = 'Учасник досяг цього відсотка соціальної залученості, запропонованої ресурсами URL-адреси протягом цього інтервалу аналізу (Рівні = Без участі, лише учасник)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['invalidstoredurl'] = 'Не вдається показати цей ресурс, неправильний URL.';
$string['invalidurl'] = 'Вкажіть правильний URL';
$string['modulename'] = 'URL (веб-посилання)';
$string['modulename_help'] = '<p><b>URL</b> модуль дозволяє викладачеві забезпечити веб-посилання як ресурс курсу. Посилання може бути пов\'язане з будь-яким ресурсом, який знаходиться у вільному доступі до Інтернету (напр. документи та зображення).</p>
<p>У своєму курсі найкраще використовувати адресу конкретної веб-сторінки, бажано, щоб посилання не вело на головну сторінку сайту.</p>
<p>Викладач може використовувати посилання зі сховища, такого як Flickr, YouTube, Wikimedia та ін (залежно від того, які сховища дозволені для порталу).</p>
<p>Є декілька варіантів відображення ресурсу <b>URL</b>, такі як: вбудовано безпосередньо на сторінці курсу, відкриття у новому вікні.</p>
<p>При необхідності можна додавати до веб-посилання (як параметр запиту) додаткову інформацію, наприклад, ім\'я студента.</p>
<p>Також зверніть увагу, що веб-посилання можуть бути додані до іншого типу ресурсу або елемента курсу через текстовий редактор.</p>';
$string['modulename_link'] = 'mod/url/view';
$string['modulenameplural'] = 'Гіперпосилання';
$string['name'] = 'Ім\'я';
$string['name_help'] = 'Це буде текстом посилання для URL-адреси.

Введіть змістовний текст, який коротко описує призначення URL-адреси.

Уникайте використання слова «посилання». Це допоможе користувачам програм зчитування з екрана, оскільки програми зчитування з екрана повідомляють про посилання (наприклад, «Moodle.org, посилання»), тож немає потреби включати слово «посилання» в поле імені.';
$string['page-mod-url-x'] = 'Будь-яка сторінка модуля Гіперпосилання';
$string['parameterinfo'] = '&amp;параметр=змінна';
$string['parametersheader'] = 'Змінні URL';
$string['parametersheader_help'] = 'Цей розділ дозволяє передавати внутрішню інформацію як частину URL-адреси. Це корисно, якщо URL-адреса є інтерактивною веб-сторінкою, яка приймає параметри, і ви хочете передати щось на кшталт імені поточного користувача, наприклад. Введіть назву параметра URL-адреси в текстове поле, а потім виберіть відповідну змінну сайту.';
$string['pluginadministration'] = 'Керування модулем Гіперпосилання';
$string['pluginname'] = 'Гіперпосилання';
$string['popupheight'] = 'Висота спливаючого вікна (у пікселях)';
$string['popupheightexplain'] = 'Визначає типову висоту виринаючого вікна.';
$string['popupwidth'] = 'Ширина спливаючого вікна (у пікселях)';
$string['popupwidthexplain'] = 'Визначає типову ширину виринаючого вікна.';
$string['printintro'] = 'Показати опис URL';
$string['printintroexplain'] = 'Показувати опис гіперпосилання під вмістом? Деякі типи показу можуть не відображатися, навіть якщо це дозволено.';
$string['privacy:metadata'] = 'Плагін ресурсів URL-адрес не зберігає жодних особистих даних.';
$string['rolesinparams'] = 'Імена ролей як змінні URL';
$string['search:activity'] = 'URL (веб-посилання)';
$string['serverurl'] = 'URL сервера';
$string['url:addinstance'] = 'Додавати нове гіперпосилання';
$string['url:view'] = 'Переглядати гіперпосилання';
