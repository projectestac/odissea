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
 * Strings for component 'ai', language 'uk', version '4.5'.
 *
 * @package     ai
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptai'] = 'Прийняти та продовжити';
$string['action'] = 'Дія';
$string['action_generate_image'] = 'Створити зображення';
$string['action_generate_image_desc'] = 'Створює зображення на основі текстової підказки.';
$string['action_generate_text'] = 'Згенерувати текст';
$string['action_generate_text_desc'] = 'Генерує текст на основі текстової підказки.';
$string['action_generate_text_instruction'] = 'Ви отримаєте текстове повідомлення від користувача. Ваше завдання сформувати текст на основі їх запиту. Дотримуйтесь цих важливих інструкцій:
 1. Повернути резюме лише у вигляді звичайного тексту.
 2. Не включайте жодного форматування уцінки, привітань чи банальностей.';
$string['action_summarise_text'] = 'Конспектувати текст';
$string['action_summarise_text_desc'] = 'Резюмує текстовий вміст на сторінці курсу.';
$string['action_summarise_text_instruction'] = 'Ви отримаєте текстове повідомлення від користувача. Ваше завдання — узагальнити поданий текст. Дотримуйтесь цих вказівок:
 1. Згорнути: скоротити довгі уривки до ключових моментів.
 2. Спрощення: зробіть складну інформацію легшою для розуміння, особливо для учнів.

Важливі інструкції:
 1. Повернути резюме лише у вигляді звичайного тексту.
 2. Не включайте жодного форматування уцінки, привітань чи банальностей.
 3. Орієнтація на ясність, стислість і доступність.

Переконайтеся, що резюме легко читається та ефективно передає основні думки оригінального тексту.';
$string['action_translate_text'] = 'Перекласти текст';
$string['action_translate_text_desc'] = 'Перекласти наданий текст з однієї мови на іншу.';
$string['actionsettingprovider'] = 'Налаштування дій {$a}';
$string['actionsettingprovider_desc'] = 'Ці налаштування контролюють, як {$a->providername} виконує дію {$a->actionname}.';
$string['ai'] = 'ШІ';
$string['aiplacements'] = 'Розміщення ШІ';
$string['aiproviders'] = 'Постачальники AI';
$string['aiusagepolicy'] = 'Політика використання ШІ';
$string['availableplacements'] = 'Виберіть, де доступні дії ШІ';
$string['availableplacements_desc'] = 'Розташування визначають, як і де можна використовувати дії ШІ на вашому сайті. У налаштуваннях можна вибрати, які дії доступні для кожного місця розташування.';
$string['availableproviders'] = 'Керуйте постачальниками AI, підключеними до вашої LMS';
$string['availableproviders_desc'] = 'Постачальники штучного інтелекту додають функціональні можливості штучного інтелекту на ваш сайт за допомогою таких «дій», як узагальнення тексту або створення зображень.<br/>
Ви можете керувати діями для кожного провайдера в його налаштуваннях.';
$string['contentwatermark'] = 'Створено ШІ';
$string['declineaipolicy'] = 'Відхилити';
$string['manageaiplacements'] = 'Керуйте розміщенням AI';
$string['manageaiproviders'] = 'Керуйте постачальниками AI';
$string['noproviders'] = 'Ця дія недоступна. Для цієї дії не налаштовано жодного <a href="{$a}">постачальника AI</a>.';
$string['placement'] = 'Розміщення';
$string['placementactionsettings'] = 'Дії';
$string['placementactionsettings_desc'] = 'Дії AI, доступні для цього місця розташування.';
$string['placementsettings'] = 'Спеціальні налаштування місця розташування';
$string['placementsettings_desc'] = 'Ці параметри контролюють, як це місце розташування ШІ підключається до служби ШІ та пов’язані операції.';
$string['privacy:metadata:ai_action_generate_image'] = 'Таблиця, у якій зберігаються запити користувачів на створення зображень.';
$string['privacy:metadata:ai_action_generate_image:aspectratio'] = 'Співвідношення сторін створених зображень.';
$string['privacy:metadata:ai_action_generate_image:numberimages'] = 'Кількість створених зображень.';
$string['privacy:metadata:ai_action_generate_image:prompt'] = 'Запит на створення зображення.';
$string['privacy:metadata:ai_action_generate_image:quality'] = 'Якість створених зображень.';
$string['privacy:metadata:ai_action_generate_image:revisedprompt'] = 'Переглянуте підказка згенерованих зображень.';
$string['privacy:metadata:ai_action_generate_image:sourceurl'] = 'Вихідна URL-адреса створених зображень.';
$string['privacy:metadata:ai_action_generate_image:style'] = 'Стиль створюваних зображень.';
$string['privacy:metadata:ai_action_generate_text'] = 'Таблиця, у якій зберігаються запити користувачів на створення тексту.';
$string['privacy:metadata:ai_action_generate_text:completiontoken'] = 'Токени завершення, які використовуються для створення тексту.';
$string['privacy:metadata:ai_action_generate_text:fingerprint'] = 'Унікальний хеш, що представляє стан/версію моделі та вмісту.';
$string['privacy:metadata:ai_action_generate_text:generatedcontent'] = 'Фактичний текст, згенерований моделлю штучного інтелекту на основі підказки введення.';
$string['privacy:metadata:ai_action_generate_text:prompt'] = 'Підказка для запиту на створення тексту.';
$string['privacy:metadata:ai_action_generate_text:prompttokens'] = 'Токени підказок, які використовуються для створення тексту.';
$string['privacy:metadata:ai_action_generate_text:responseid'] = 'Ідентифікатор відповіді.';
$string['privacy:metadata:ai_action_register'] = 'Таблиця, у якій зберігаються запити користувачів на дії.';
$string['privacy:metadata:ai_action_register:actionid'] = 'Ідентифікатор запиту на дію.';
$string['privacy:metadata:ai_action_register:actionname'] = 'Назва дії запиту.';
$string['privacy:metadata:ai_action_register:provider'] = 'Ім\'я постачальника, який обробив запит.';
$string['privacy:metadata:ai_action_register:success'] = 'Стан запиту на дію.';
$string['privacy:metadata:ai_action_register:timecompleted'] = 'Час виконання запиту.';
$string['privacy:metadata:ai_action_register:timecreated'] = 'Час створення запиту.';
$string['privacy:metadata:ai_action_register:userid'] = 'Ідентифікатор користувача, який зробив запит.';
$string['privacy:metadata:ai_action_summarise_text'] = 'Таблиця, у якій зберігаються підсумкові текстові запити, зроблені користувачами.';
$string['privacy:metadata:ai_action_summarise_text:completiontoken'] = 'Токени завершення, які використовуються для підсумовування тексту.';
$string['privacy:metadata:ai_action_summarise_text:fingerprint'] = 'Унікальний хеш, що представляє стан/версію моделі та вмісту.';
$string['privacy:metadata:ai_action_summarise_text:generatedcontent'] = 'Фактичний текст, згенерований моделлю штучного інтелекту на основі підказки введення.';
$string['privacy:metadata:ai_action_summarise_text:prompt'] = 'Підказка для запиту підсумкового тексту.';
$string['privacy:metadata:ai_action_summarise_text:prompttokens'] = 'Лексеми підказок, які використовуються для підсумовування тексту.';
$string['privacy:metadata:ai_action_summarise_text:responseid'] = 'Ідентифікатор відповіді.';
$string['privacy:metadata:ai_policy_register'] = 'Таблиця, у якій зберігається статус прийняття політики ШІ для кожного користувача.';
$string['privacy:metadata:ai_policy_register:contextid'] = 'Ідентифікатор контексту, дані якого було збережено.';
$string['privacy:metadata:ai_policy_register:timeaccepted'] = 'Час, коли користувач прийняв політику AI.';
$string['privacy:metadata:ai_policy_register:userid'] = 'Ідентифікатор користувача, дані якого були збережені.';
$string['provider'] = 'Провайдер';
$string['provideractionsettings'] = 'Дії';
$string['provideractionsettings_desc'] = 'Виберіть і налаштуйте дії, які {$a} може виконувати на вашому сайті.';
$string['providers'] = 'Постачальники';
$string['providersettings'] = 'Налаштування';
$string['userpolicy'] = '<h4><strong>Ласкаво просимо до нової функції ШІ!</strong></h4>
<p>Ця функція штучного інтелекту (AI) базується виключно на зовнішніх великих мовних моделях (LLM), щоб покращити ваш досвід навчання та викладання. Перш ніж почати використовувати ці служби ШІ, прочитайте цю політику використання.</p>
<h4><strong>Точність контенту, створеного ШІ</strong></h4>
<p>ШІ може надавати корисні пропозиції та інформацію, але її точність може відрізнятися. Вам слід завжди ще раз перевіряти надану інформацію, щоб переконатися, що вона точна, повна та підходить для вашої конкретної ситуації.</p>
<h4><strong>Як обробляються ваші дані</strong></h4>
<p>Ця функція ШІ використовує зовнішні великі мовні моделі (LLM). Якщо ви використовуєте цю функцію, будь-яка інформація чи особисті дані, які ви надаєте, оброблятимуться відповідно до політики конфіденційності цих LLM. Ми рекомендуємо вам прочитати їхню політику конфіденційності, щоб зрозуміти, як вони оброблятимуть ваші дані. Крім того, на цьому сайті може зберігатися запис про вашу взаємодію з функціями ШІ.</p>
<p>Якщо у вас є запитання щодо того, як обробляються ваші дані, зверніться до своїх викладачів або навчальної організації.</p>
<p>Продовжуючи, ви підтверджуєте, що розумієте цю політику та приймаєте її.</p>';
