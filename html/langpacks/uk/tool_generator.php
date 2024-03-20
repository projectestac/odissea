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
 * Strings for component 'tool_generator', language 'uk', version '4.1'.
 *
 * @package     tool_generator
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bigfile'] = 'Великий файл {$a}';
$string['courseexplanation'] = 'Цей інструмент створює стандартні тестові курси, які включають багато секцій, діяльності та файли.

Це зроблено для того, щоб забезпечити стандартизовану оцінку для перевірки надійності та продуктивності різних компонентів системи (наприклад, резервне копіювання і відновлення).

Цей тест є важливим, тому що було багато випадків раніше, де стикалися з використанням в реальному житті випадків (наприклад курс з 1000 діяльностей), коли система не працює.

Курси, створені за допомогою цієї функціональності, можуть займати велику частину баз даних і файлової системи (десятки гігабайт). Вам потрібно буде видалити курси (і зачекати різних запусків очищення), щоб звільнити цей простір знову.

**Не використовуйте цю функцію на діючих системах.** Використовуйте тільки на сайтах розробки. (Щоб уникнути випадкового використання, ця функція відключена, якщо ви не вибрали рівень налагодження РОЗРОБНИК.)';
$string['coursesize_0'] = 'XS (~10Kб; створено за ~1 сек)';
$string['coursesize_1'] = 'S (~10Mб; створено за ~30 сек)';
$string['coursesize_2'] = 'M (~100 МБ; створити за ~2 хвилини)';
$string['coursesize_3'] = 'L (~1 ГБ; створити за ~30 хвилин)';
$string['coursesize_4'] = 'XL (~10 ГБ; створити за ~2 години)';
$string['coursesize_5'] = 'XXL (~20 ГБ; створення за ~4 години)';
$string['coursewithoutusers'] = 'Вибраний курс не має користувачів';
$string['createcourse'] = 'Створити курс';
$string['createtestplan'] = 'Створити план тестування';
$string['creating'] = 'Створення курсу';
$string['done'] = 'зроблено ({$a})';
$string['downloadtestplan'] = 'Завантажити план тестування';
$string['downloadusersfile'] = 'Завантажити файл користувачів';
$string['error_nocourses'] = 'Відсутні курси для генерації плану тестування';
$string['error_noforumdiscussions'] = 'Вибраний курс не містить форумних дискусій';
$string['error_noforuminstances'] = 'Вибраний курс не містить примірників модуля форум';
$string['error_noforumreplies'] = 'Вибраний курс не містить відповідей форуму';
$string['error_nonexistingcourse'] = 'Вказаного курсу не існує';
$string['error_nopageinstances'] = 'Обраний курс не містить примірників модулів сторінки';
$string['error_notdebugging'] = 'Не знайдено на сервері, оскільки налагодження не встановлено для РОЗРОБНИКА';
$string['error_nouserspassword'] = 'Вам потрібно встановити $CFG->tool_generator_users_password в config.php для генерації плану тестування';
$string['fullname'] = 'Курс тестування: {$a->size}';
$string['maketestcourse'] = 'Створити курс тестування';
$string['maketestplan'] = 'Створити план тестування JMeter';
$string['notenoughusers'] = 'Вибраний курс не має достатньої кількості користувачів';
$string['pluginname'] = 'Генератор випадкових курсів';
$string['privacy:metadata'] = 'Плагін для генерування даних для розробки не зберігає жодних персональних даних.';
$string['progress_checkaccounts'] = 'Перевірка облікових записів ({$a})';
$string['progress_coursecompleted'] = 'Курс завершено ({$a})';
$string['progress_createaccounts'] = 'Створення облікових записів ({$a->from} - {$a->to})';
$string['progress_createassignments'] = 'Створення завдання ({$a})';
$string['progress_createbigfiles'] = 'Створення великих файлів ({$a})';
$string['progress_createcourse'] = 'Створення курсу {$a}';
$string['progress_createforum'] = 'Створення форуму ({$a} записів)';
$string['progress_createpages'] = 'Створення сторінки ({$a})';
$string['progress_createsmallfiles'] = 'Створення малих файлів ({$a})';
$string['progress_enrol'] = 'Зарахування користувачів на курс ({$a})';
$string['progress_sitecompleted'] = 'Сайт завершено ({$a})';
$string['shortsize_0'] = 'XS';
$string['shortsize_1'] = 'S';
$string['shortsize_2'] = 'M';
$string['shortsize_3'] = 'L';
$string['shortsize_4'] = 'XL';
$string['shortsize_5'] = 'XXL';
$string['sitesize_0'] = 'XS (~10Mб; 3 курси створено за ~30 сек)';
$string['sitesize_1'] = 'S (~50Mб; 8 курсів створено за ~2 хв)';
$string['sitesize_2'] = 'M (~200Mб; 73 курси створено за ~10 хв)';
$string['sitesize_3'] = 'L (~1\'5Гб; 277 курсів створено за ~1\'5 год)';
$string['sitesize_4'] = 'XL (~10Гб; 1065 курсів створено за ~5 год)';
$string['sitesize_5'] = 'XXL (~20Гб; 4177 курсів створено за ~10 год)';
$string['size'] = 'Розмір курсу';
$string['smallfiles'] = 'Малі файли';
$string['targetcourse'] = 'Тест цільового курсу';
$string['testplanexplanation'] = 'Цей інструмент створює файл плану тестування JMeter разом з файлом облікових даних користувача.

Цей план тест призначений для роботи разом з  {$a}, що робить легше проходження плану тестування в конкретному середовищі Moodle, збирає інформацію про проходження і порівнює результати, так що вам потрібно буде завантажити і використовувати цей скрипт test_runner.sh або слідувати інструкції по установці і використанню.

Вам потрібно встановити пароль для користувачів курсу в config.php (наприклад, $CFG->tool_generator_users_password = \'moodle\';). Не існує типового значення для цього пароля для запобіганню ненавмисного використання інструменту. Ви повинні використовувати опцію оновлення паролів у разі, якщо ваші користувачі курсу мають і інші паролі або їх було згенеровано за допомогою tool_generator але без встановлення значення $CFG->tool_generator_users_password.

Вона є частиною tool_generator тож добре працює з курсами згенерованими курсами та генераторами сайту, вона також може бути використана з будь-яким курсом, який містить принаймні:

* Достатньо зарахованих користувачів (залежить від розміру вибраного плану тестування) з паролем встановленим у \'moodle\'
* Примірник модуля сторінки
* Примірник модуля форум щонайменше з одним обговоренням і однією відповіддю

Ви можете перевірити ваші серверні потужності запускаючи великі плани тестування завантажуючи спеціально згенеровані JMeter великі файли. Збільшення терміну буде скореговано відповідно до кількості ниток (користувачів), щоб зменшити такого роду проблеми, але залишити все ще величезне навантаження .

**Не запускайте план тестування на діючих системах.** Ця функція тільки створює файли, щоб віддати JMeter, що не небезпечно само по собі, але ви не повинні **НІКОЛИ** запустіть цей план тестування на діючих сайтах.';
$string['testplansize_0'] = 'XS ({$a->users} користувачів, {$a->loops} петль та {$a->rampup} збільшений період)';
$string['testplansize_1'] = 'S ({$a->users} користувачів, {$a->loops} петль та {$a->rampup} збільшений період)';
$string['testplansize_2'] = 'М ({$a->users} користувачів, {$a->loops} петель та {$a->rampup} збільшениий період)';
$string['testplansize_3'] = 'L ({$a->users} користувачів, {$a->loops} петель та {$a->rampup} збільшениий період)';
$string['testplansize_4'] = 'XL ({$a->users} користувачів, {$a->loops} петель та {$a->rampup} збільшениий період)';
$string['testplansize_5'] = 'XXL ({$a->users} користувачів, {$a->loops} петель та {$a->rampup} збільшениий період)';
$string['updateuserspassword'] = 'Оновити пароль користувачів курсу';
$string['updateuserspassword_help'] = 'JMeter повинен зайти як користувачі курсу, ви можете вказати пароль користувачів використовуючи $CFG->tool_generator_users_password в config.php; це налаштування оновлює пароль користувача курсу відповідно до $CFG->tool_generator_users_password. Це може бути корисно у випадку, якщо ви використовуєте курс не згенерований tool_generator або $CFG->tool_generator_users_password не було встановлено на момент створення тестових курсів.';
