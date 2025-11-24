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
 * Strings for component 'cachestore_file', language 'uk', version '4.5'.
 *
 * @package     cachestore_file
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asyncpurge'] = 'Асинхронне очищення каталогу';
$string['asyncpurge_help'] = 'Якщо ввімкнено, новий каталог створюється з версією кешу, а старий каталог буде видалено асинхронно за допомогою запланованого завдання.';
$string['autocreate'] = 'Авто-створення каталогу';
$string['autocreate_help'] = 'Якщо включено, то каталог, визначений у шляху, буде автоматично створено, якщо його ще не існує.';
$string['lockwait'] = 'Максимальний час очікування блокування';
$string['lockwait_help'] = 'Максимальний час у секундах очікування ексклюзивного блокування перед читанням або записом ключа кешу. Це використовується лише для визначень кешу, для яких потрібне блокування читання або запису.';
$string['path'] = 'Шлях кешу';
$string['path_help'] = 'Каталог, який повинен використовуватися для зберігання файлів цього сховища кешу. Якщо залишити порожнім (типово) каталог буде автоматично створено в moodledata. Це може бути використано, щоб вказати файл сховища в директорії на більш ефективному диску (наприклад, все в пам\'яті).';
$string['pluginname'] = 'Файл кешу';
$string['prescan'] = 'Попереднє сканування каталогу';
$string['prescan_help'] = 'Якщо включено, то каталог сканується, коли кеш використовується вперше та звернення до файлів спочатку перевіряється за цим скануванням. Це може допомогти, якщо у вас повільна файлова система і виявляється, що файлові операції є вузьким місцем продуктивності системи.';
$string['privacy:metadata'] = 'Плагін кеш-пам’яті файлів зберігає дані на короткий час як частину своєї функції кешування, але ці дані регулярно очищаються.';
$string['singledirectory'] = 'Зберігати в одному каталозі';
$string['singledirectory_help'] = 'Якщо ввімкнено, файли (кешовані елементи) будуть зберігатися в одному каталозі, а не розбиті на декілька каталогів.

Увімкнення цього прискорить взаємодію з файлами, але це пов’язано з підвищеним ризиком порушення обмежень файлової системи.

Бажано вмикати цю функцію, лише якщо вірно наступне:

* Якщо ви знаєте, що кількість елементів у кеші буде достатньо малою, щоб це не спричинило проблем у файловій системі, з якою ви працюєте.
* Згенерувати дані, які кешуються, недорого. Якщо він дотримується значення за замовчуванням, все ще може бути кращим варіантом, оскільки це зменшує ймовірність проблем.';
$string['task_asyncpurge'] = 'Асинхронне очищення файлів зберігає старі каталоги версій кешу';
