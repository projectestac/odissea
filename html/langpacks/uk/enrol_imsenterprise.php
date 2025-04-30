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
 * Strings for component 'enrol_imsenterprise', language 'uk', version '4.4'.
 *
 * @package     enrol_imsenterprise
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aftersaving...'] = 'Як тільки ви збережете свої налаштування, ви можете забажати';
$string['allowunenrol'] = 'Дозволити дані IMS скасувати реєстрацію студентів і викладачів';
$string['allowunenrol_desc'] = 'Якщо включено, то користувачі будуть відраховані з курсу через вказаний період.';
$string['basicsettings'] = 'Основні налаштування';
$string['categoryidnumber'] = 'Дозволити ідентифікаційний номер категорії';
$string['categoryidnumber_desc'] = 'Якщо ввімкнено, IMS Enterprise створить категорію з ідентифікаційним номером.';
$string['categoryseparator'] = 'Символ роздільника категорій';
$string['categoryseparator_desc'] = 'Потрібний, якщо ввімкнено параметр «Дозволити ідентифікаційний номер категорії». Символ для розділення назви категорії та ідентифікаційного номера.';
$string['coursesettings'] = 'Опції даних курсу';
$string['createnewcategories'] = 'Створити нову (сховану) категорію курсів, якщо в системі такої не має.';
$string['createnewcategories_desc'] = 'Якщо елемент &lt;org&gt;&lt;orgunit&gt; присутній у вхідних даних курсу, його вміст використовуватиметься для визначення категорії, якщо курс буде створено з нуля. Плагін НЕ змінюватиме категорію існуючих курсів. Якщо не існує жодної категорії з потрібною назвою, буде створена прихована категорія.';
$string['createnewcourses'] = 'Створити нові (сховані) курси, якщо в системі таких не має.';
$string['createnewcourses_desc'] = 'Якщо включено, то модуль IMS Enterprise може створити нові курси, яких немає в базі  Moodle, але вони є в даних IMS. Всі новостворені курси будуть сховані.';
$string['createnewusers'] = 'Створити записи користувачів для користувачів, які ще не створені в системі.';
$string['createnewusers_desc'] = 'Дані реєстрації IMS Enterprise зазвичай описують набір користувачів. Якщо ввімкнено, облікові записи можна створювати для будь-яких користувачів, яких немає в базі даних Moodle.
Користувачі шукаються спочатку за їхнім ідентифікаційним номером, а потім за іменем користувача Moodle. Плагін IMS Enterprise не імпортує паролі. Для автентифікації користувачів рекомендується використовувати плагін автентифікації.';
$string['cronfrequency'] = 'Частота обробітку';
$string['deleteusers'] = 'Видалити користувача, якщо такого немає в IMS даних.';
$string['deleteusers_desc'] = 'Якщо включено, то дані IMS Enterprise зарахування можуть визначати і видалення облікових записів користувачів (якщо встановлено позначку "recstatus" в 3, яка означає видалення облікового записсу). Типово у Moodle, запис користувача повністю з бази даних не видаляється, а тільки позначається як видалений.';
$string['disableenrolmentandremoveallroles'] = 'Призупинити реєстрацію та видалити ролі';
$string['disableenrolonly'] = 'Лише призупинити реєстрацію';
$string['doitnow'] = 'виконати імпорт IMS Enterprise прямо зараз';
$string['emptyattribute'] = 'Залишити порожнім';
$string['filelockedmail'] = 'Текстовий файл, який ви вокористовуєте для IMS-file-based наборів ({$a}) не може бути видалений процесом cron. Це зазвичай означає недостатність прав на цей файл. Будь ласка змініть права, щоб система могла видалити цей файл, коли процес буде повторено пізніше.';
$string['filelockedmailsubject'] = 'Важлива помилка: Файл набору';
$string['fixcasepersonalnames'] = 'Змінити власні імена до Верхнього Регістру';
$string['fixcaseusernames'] = 'Змінити псевдоім’я до нижнього регістру';
$string['ignore'] = 'Ігнорувати';
$string['importimsfile'] = 'Імпортувати IMS Enterprise файл';
$string['imsenterprise:config'] = 'Налаштовувати варіанти зарахування через IMS Enterprise';
$string['imsenterprisecrontask'] = 'Обробка файлів зарахування';
$string['imsrolesdescription'] = 'Специфікація IMS Enterprise включає 8 різних рольових типів. Будь ласка виберіть, як ви хочете, щоб вони визначалися в системі, включаючи вимоги до їх ігнорування.';
$string['location'] = 'Місце знаходження файлу';
$string['logtolocation'] = 'Місце знаходження лог-файлу (залишити пустим для не створення лог-файлу)';
$string['mailadmins'] = 'Реєстрація адміністратора за електронною поштою';
$string['mailusers'] = 'Реєстрація користувача за електронною поштою';
$string['messageprovider:imsenterprise_enrolment'] = 'IMS Enterprise повідомлення про зарахування';
$string['miscsettings'] = 'Різне';
$string['nestedcategories'] = 'Дозволити вкладені категорії';
$string['nestedcategories_desc'] = 'Якщо ввімкнено, IMS Enterprise створить вкладені категорії';
$string['noaction'] = 'Ніяких дій';
$string['pluginname'] = 'IMS Enterprise файл';
$string['pluginname_desc'] = 'Цей метод для постійної перевірки та запуску спеціально відформатованого  текстового файлу у вказаному вами місці. Файл повинен слідувати специфікації IMS  Enterprise і містити особу, групу і членство у XML елементах.';
$string['privacy:metadata'] = 'Плагін для реєстрації файлів IMS Enterprise не зберігає жодних особистих даних.';
$string['processphoto'] = 'Додати фото користувача';
$string['processphotowarning'] = 'Попередження: обробіток зображень додасть навантаження на ваш сервер. Не активізуйте цю можливість, якщо очікується велика кількість студентів.';
$string['removeenrolmentandallroles'] = 'Призупинити реєстрацію та видалити ролі';
$string['restricttarget'] = 'Тільки опрацьовані дані, якщо наступна мета визначена';
$string['restricttarget_desc'] = 'Файл даних IMS Enterprise може бути призначений для різної "мети" - різноманітних Систем управління навчанням або різних систем школи/університету. Ви можете вказати Enterprise файл, в якому будуть призначені дані для одного або більше мети системи, назвіть їх тегом <target>  помістивши їх у контейнер теги <properties>.

Загалом, ви не повинні турбуватися про це. Залиште налаштування порожнім і Moodle буде завжди обробляти дані файлу незалежно від того, є мета або ні. В іншому випадку, заповніть точну назву, що буде виводитися в тегу <target>.';
$string['roles'] = 'Ролі';
$string['settingfullname'] = 'IMS тег опису для повної назви курсу';
$string['settingfullnamedescription'] = 'Повна назва - обов’язкове поле курсу. Тож вам потрібно вказати тег опису у вашому IMS Enterprise файлі';
$string['settingshortname'] = 'IMS тег опису для короткої назви курсу';
$string['settingshortnamedescription'] = 'Коротка назва - обов’язкове поле курсу. Тож вам потрібно вказати тег опису у вашому IMS Enterprise файлі';
$string['settingsummary'] = 'IMS тег опису для резюме курсу';
$string['settingsummarydescription'] = 'Це додаткове поле, виберіть ’Залишити порожнім’, якщо ви не бажаєте визначати резюме курсу';
$string['sourcedidfallback'] = 'Використовуйте \'sourcedid\' для ідентифікатора користувача, якщо поле \'userid\' не знайдено';
$string['sourcedidfallback_desc'] = 'У даних IMS, поле <sourcedid> є постійним ідентифікатором для людини, і використовується у кодах системи. Поле <userid> - це поле з ID кодами (розділеними), які використовуються для користувачі при вході в систему. У багатьох випадках ці два коди можуть бути одним і тим же - але не завжди.

Деякі інформаційні системи зі студентами не видають поле <userid>. Якщо це так, вам потрібно включити це налаштування, щоб використовувати <sourcedid> як ID користувача Moodle. Інакше, залиште це налаштування виключеним.';
$string['truncatecoursecodes'] = 'Обрізати коди курсу до цієї величини';
$string['truncatecoursecodes_desc'] = 'У деяких випадках ви можете мати коди курсів, які потрібно обрізати перед початком процесу. Якщо так, то вкажіть у цьому полі кількість символів. Інакше, залиште це поле порожнім і обрізування не відбудеться.';
$string['unenrolaction'] = 'Дія скасування реєстрації';
$string['unenrolaction_desc'] = 'Дії, які необхідно виконати, коли користувача скасовано з курсу (застосовується, лише якщо ввімкнено параметр скасування реєстрації вище).';
$string['updatecourses'] = 'Оновити курс';
$string['updatecourses_desc'] = 'Якщо ввімкнено, плагін реєстрації IMS Enterprise може оновлювати повні та короткі назви курсів (якщо прапор «recstatus» встановлений на 2, що означає оновлення).';
$string['updateusers'] = 'Оновлення облікових записів користувачів, якщо вказано в даних IMS';
$string['updateusers_desc'] = 'Якщо ввімкнено, дані реєстрації IMS Enterprise можуть вказувати зміни облікових записів користувачів (якщо прапор «recstatus» встановлений на 2, що представляє оновлення).';
$string['usecapitafix'] = 'Установіть цей прапорець, якщо ви використовуєте Capita (оскільки їх формат XML дещо відрізняється)';
$string['usecapitafix_desc'] = 'Студентська система даних створювана Capita виявляє одну невеличку помилку у коді XML. Якщо ви використовуєте Capita, ви повинні включити це налаштування - інакше залишіть його невідміченим.';
$string['usersettings'] = 'Опції даних користувача';
$string['zeroisnotruncation'] = '0 означає відміну обрізання';
