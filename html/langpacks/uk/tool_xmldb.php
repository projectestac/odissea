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
 * Strings for component 'tool_xmldb', language 'uk', version '4.1'.
 *
 * @package     tool_xmldb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actual'] = 'Фактичні';
$string['addpersistent'] = 'Додайте обов’язкові постійні поля';
$string['aftertable'] = 'Після таблиці:';
$string['back'] = 'Назад';
$string['backtomainview'] = 'Повернутися на головну';
$string['cannotuseidfield'] = 'Не вставляється поле "id". Це колонка автонумерації.';
$string['change'] = 'Змінити';
$string['charincorrectlength'] = 'Неправильна довжина char поля';
$string['check_bigints'] = 'Пошук некоректних цілих бази даних';
$string['check_defaults'] = 'Пошук некоректних типових значень';
$string['check_foreign_keys'] = 'Пошук помилкових зовнішніх ключів';
$string['check_indexes'] = 'Пошук відсутніх індексів бази даних';
$string['check_oracle_semantics'] = 'Пошук некоректної довжини семантики';
$string['checkbigints'] = 'Перевірити цілі';
$string['checkdefaults'] = 'Перевірити типові';
$string['checkforeignkeys'] = 'Перевірити зовнішні ключі';
$string['checkindexes'] = 'Перевірити індекси';
$string['checkoraclesemantics'] = 'Перевірити семантику';
$string['completelogbelow'] = '(нижче дивіться повний протокол пошуку)';
$string['confirmcheckbigints'] = 'Ця функція шукатиме <a href="https://tracker.moodle.org/browse/MDL-11038">можливо неправильні цілі поля</a> на вашому сервері Moodle, автоматично генеруючи (але не виконуючи!) необхідні Інструкції SQL, щоб усі цілі числа у вашій БД були правильно визначені.

Після створення ви можете копіювати такі оператори та безпечно виконувати їх за допомогою улюбленого інтерфейсу SQL (не забудьте перед цим зробити резервну копію своїх даних).

Настійно рекомендуємо запустити останню (+ версію) вашого випуску Moodle, перш ніж виконувати пошук неправильних цілих чисел.

Ця функція не виконує жодних дій проти БД (лише читає з неї), тому її можна безпечно виконати в будь-який момент.';
$string['confirmcheckdefaults'] = 'Це можливість знайти суперечливі типові значення на сервері Moodle, автоматично створюючи (але не виконуючи!) необхідні твердження SQL, щоб всі типові значення були правильно задані.<br /><br /> Коли твердження створено, ви можете їх скопіювати та запустити безпечно за допомогою інтерфейсу SQL (не забудьте зробити резервну копію всіх своїх даних перед тим, як щось робити).<br /><br /> Наполегливо рекомендуємо, щоб у вас був найсвіжіший (версія +) доступний реліз Moodle перед виконанням пошуку неправильних цілочисельних полів.<br /><br /> Цей функціонал не виконує ніяких дій з БД (тільки читає з неї), тому ви можете безпечно запускати його в будь-який момент.';
$string['confirmcheckforeignkeys'] = 'Ця функція шукатиме потенційні порушення зовнішніх ключів, визначених у визначеннях install.xml. (Moodle наразі не створює фактичних обмежень зовнішнього ключа в базі даних, тому можуть бути присутніми недійсні дані.)

Настійно рекомендуємо запустити останню (+ версію) вашого випуску Moodle, перш ніж виконувати пошук потенційних порушень зовнішніх ключів.

Ця функція не виконує жодних дій проти БД (лише читає з неї), тому її можна безпечно виконати в будь-який момент.';
$string['confirmcheckindexes'] = 'Це можливість знайти потенційно пропущені індекси на сервері Moodle, автоматично створюючи (але не виконуючи!) необхідні твердження SQL, щоб все було оновлено.<br /><br /> Коли твердження створено, ви можете їх скопіювати та запустити безпечно за допомогою інтерфейсу SQL (не забудьте зробити резервну копію всіх своїх даних перед тим, як щось робити).<br /><br /> Наполегливо рекомендуємо, щоб у вас був найсвіжіший (версія +) доступний реліз Moodle перед виконанням пошуку неправильних цілочисельних полів.<br /><br /> Цей функціонал не виконує ніяких дій з БД (тільки читає з неї), тому ви можете безпечно запускати його в будь-який момент.';
$string['confirmcheckoraclesemantics'] = 'Ця функція шукатиме <a href="https://tracker.moodle.org/browse/MDL-29322">стовпці Oracle varchar2, використовуючи семантику BYTE</a> на вашому сервері Moodle, автоматично генеруючи (але не виконуючи!) необхідні оператори SQL, щоб усі стовпці були перетворені на використання семантики CHAR (краще для сумісності між базами даних і збільшення максимальної довжини вмісту).

Після створення ви можете копіювати такі оператори та безпечно виконувати їх за допомогою улюбленого інтерфейсу SQL (не забудьте перед цим зробити резервну копію своїх даних).

Настійно рекомендуємо запустити останню (+ версію) вашого випуску Moodle, перш ніж виконувати пошук семантики BYTE.

Ця функція не виконує жодних дій проти БД (лише читає з неї), тому її можна безпечно виконати в будь-який момент.';
$string['confirmdeletefield'] = 'Ви абсолютно впевнені, що бажаєте видалити поле:';
$string['confirmdeleteindex'] = 'Ви абсолютно впевнені, що бажаєте видалити індекс:';
$string['confirmdeletekey'] = 'Ви абсолютно впевнені, що бажаєте видалити ключ:';
$string['confirmdeletetable'] = 'Ви абсолютно впевнені, що бажаєте видалити таблицю:';
$string['confirmdeletexmlfile'] = 'Ви абсолютно впевнені, що бажаєте видалити файл:';
$string['confirmrevertchanges'] = 'Ви абсолютно впевнені, що бажаєте повернути початкове налаштування:';
$string['create'] = 'Створити';
$string['createtable'] = 'Створити таблицю:';
$string['defaultincorrect'] = 'Неправильне типове значення';
$string['delete'] = 'Видалити';
$string['delete_field'] = 'Видалити поле';
$string['delete_index'] = 'Видалити індекс';
$string['delete_key'] = 'Видалити ключ';
$string['delete_table'] = 'Видалити таблицю';
$string['delete_xml_file'] = 'Видалити XML файл';
$string['doc'] = 'Документ';
$string['docindex'] = 'Індекс документації';
$string['documentationintro'] = 'Ця документація генерується автоматично з XMLDB визначення бази даних. Вона доступна лише англійською мовою.';
$string['down'] = 'Вниз';
$string['duplicate'] = 'Дублікат';
$string['duplicatefieldname'] = 'Поле з такою назвою вже створено';
$string['duplicatefieldsused'] = 'Використовуються повторювані поля';
$string['duplicateindexname'] = 'Дублюються назви індексів';
$string['duplicatekeyname'] = 'Ключ з такою назвою вже створено';
$string['duplicatetablename'] = 'Таблицю з такою назвою вже створено';
$string['edit'] = 'Редагувати';
$string['edit_field'] = 'Редагувати поле';
$string['edit_field_save'] = 'Зберегти поле';
$string['edit_index'] = 'Редагувати індекс';
$string['edit_index_save'] = 'Зберегти індекс';
$string['edit_key'] = 'Редагувати ключ';
$string['edit_key_save'] = 'Зберегти ключ';
$string['edit_table'] = 'Редагувати таблицю';
$string['edit_table_save'] = 'Зберегти таблицю';
$string['edit_xml_file'] = 'Редагувати XML файл';
$string['enumvaluesincorrect'] = 'Неправильне значення для enum поля';
$string['expected'] = 'Очікувані';
$string['extensionrequired'] = 'Для цієї операції необхідне розширення РНР \'{$a}\'. Будь ласка, встановіть це розширення, якщо ви хочете використовувати цю функціональність у майбутньому.';
$string['extraindexesfound'] = 'Знайдено додаткові індекси';
$string['field'] = 'Поле';
$string['fieldnameempty'] = 'Пуста назва поля';
$string['fields'] = 'Поля';
$string['fieldsnotintable'] = 'Поля в таблиці не існує';
$string['fieldsusedinindex'] = 'Поле використовується як індекс';
$string['fieldsusedinkey'] = 'Це поле використовується як ключ.';
$string['filemodifiedoutfromeditor'] = 'Увага: Файл змінено локально з використанням редактора XMLDB. Локальні зміни будуть перезаписані при збереженні.';
$string['filenotwriteable'] = 'Файл не має права запису';
$string['fkunknownfield'] = 'Зовнішній ключ {$a->keyname} в таблиці {$a->tablename} вказує на неіснуюче поле {$a->reffield} у зв’язаній таблиці {$a->reftable}.';
$string['fkunknowntable'] = 'Зовнішній ключ {$a->keyname} в таблиці {$a->tablename} вказує на неіснуючу таблицю {$a->reftable}.';
$string['fkviolationdetails'] = 'Зовнішній ключ {$a->keyname} на таблицю {$a->tablename} порушується {$a->numviolations} на {$a->numrows} рядках.';
$string['float2numbernote'] = 'Примітка: незважаючи на те, що поле "float"  на 100% підтримується XMLDB, рекомендується перейти на тип поля "number".';
$string['floatincorrectdecimals'] = 'Неправильне дробове число для float поля';
$string['floatincorrectlength'] = 'Неправильна довжина float поля';
$string['generate_all_documentation'] = 'Вся документація';
$string['generate_documentation'] = 'Документація';
$string['gotolastused'] = 'Перейти до останнього використаного файлу';
$string['incorrectfieldname'] = 'Некоректна назва';
$string['incorrectindexname'] = 'Неправильна назва індексу';
$string['incorrectkeyname'] = 'Неправильна назва ключа';
$string['incorrecttablename'] = 'Некоректна назва таблиці';
$string['index'] = 'Індекс';
$string['indexes'] = 'Індекси';
$string['indexnameempty'] = 'Назва індексу порожня';
$string['integerincorrectlength'] = 'Неправильна довжина integer поля';
$string['key'] = 'Ключ';
$string['keynameempty'] = 'Назва ключа не може бути порожньою';
$string['keys'] = 'Ключі';
$string['listreservedwords'] = 'Список зарезервованих слів<br />(використовується для оновлення <a href="https://docs.moodle.org/en/XMLDB_reserved_words" target="_blank">зарезервованих слів XMLDB</a>)';
$string['load'] = 'Завантажити';
$string['main_view'] = 'Основний вид';
$string['masterprimaryuniqueordernomatch'] = 'Поля у вашому зовнішньому ключі повинні бути перераховані в тому ж порядку, як вони перераховані в унікальний ключі на вказану таблицю.';
$string['missing'] = 'Відсутній';
$string['missingindexes'] = 'Виявлено відсутність індексів';
$string['mustselectonefield'] = 'Вам потрібно вибрати одне поле, щоб бачити зв\'язане поле!';
$string['mustselectoneindex'] = 'Вам потрібно вибрати один індекс, щоб бачити зв\'язаний індекс!';
$string['mustselectonekey'] = 'Вам потрібно вибрати один ключ, щоб бачити зв\'язаний дію ключа!';
$string['new_table_from_mysql'] = 'Нова таблиця в MySQL';
$string['newfield'] = 'Нове поле';
$string['newindex'] = 'Новий індекс';
$string['newkey'] = 'Новий ключ';
$string['newtable'] = 'Нова таблиця';
$string['newtablefrommysql'] = 'Нова таблиця в MySQL';
$string['nofieldsspecified'] = 'Немає заданих полів';
$string['nomasterprimaryuniquefound'] = 'Стовпці, на які посилаються ваші зовнішні ключі, мають бути включені в первинний або унікальний КЛЮЧ у таблиці, на яку посилаються. Зауважте, що стовпець, що знаходиться в УНІКАЛЬНОМУ ІНДЕКСЕ, недостатньо добре.';
$string['nomissingorextraindexesfound'] = 'Жодних відсутніх або додаткових індексів не знайдено, тому не потрібно нічого робити.';
$string['noreffieldsspecified'] = 'Немає вказаних полів';
$string['noreftablespecified'] = 'Вказані поля таблиці не знайдено';
$string['noviolatedforeignkeysfound'] = 'Не знайдено порушення зовнішніх ключів';
$string['nowrongdefaultsfound'] = 'Не знайдено помилок типових значень, ваша база даних не потребує подальших дій.';
$string['nowrongintsfound'] = 'Не знайдено помилок цілочисельних значень, ваша база даних не потребує подальших дій.';
$string['nowrongoraclesemanticsfound'] = 'Не знайдено колонок, які б використовували BYTE-семантику, ваша база даних не потребує подальших дій.';
$string['numberincorrectdecimals'] = 'Некоректна кількість десяткових знаків для числового поля';
$string['numberincorrectlength'] = 'Некоректна довжина числового поля';
$string['numberincorrectwholepart'] = 'Занадто велика частина цілого числа для числового поля';
$string['pendingchanges'] = 'Примітка: Ви зробили зміни в цьому файлі. Вони можуть бути збережені в будь-який момент';
$string['pendingchangescannotbesaved'] = 'Зміни в цьому файлі не можуть бути збережені! Будь ласка, впевніться, що файл "install.xml" та його батьківський каталог мають права на запис для користувача веб-серверу.';
$string['pendingchangescannotbesavedreload'] = 'Зміни в цьому файлі не можуть бути збережені! Будь ласка, впевніться, що файл "install.xml" та його батьківський каталог мають права на запис для користувача веб-серверу. Після оновлення сторінки у вас має бути можливість зберегти ці зміни.';
$string['persistentfieldscomplete'] = 'Додано такі поля:';
$string['persistentfieldsconfirm'] = 'Ви хочете додати такі поля:';
$string['persistentfieldsexist'] = 'Наступні поля вже існують:';
$string['pluginname'] = 'Редактор XMLDB';
$string['primarykeyonlyallownotnullfields'] = 'Первинний ключ не може бути null';
$string['privacy:metadata'] = 'Плагін редактора XMLDB не зберігає жодних особистих даних.';
$string['reconcile_files'] = 'Знайдіть файли XMLDB, які потребують узгодження';
$string['reconcile_files_intro'] = 'Ця функція перевіряє вміст усіх файлів XMLDB, щоб перевірити, чи вони відповідають результатам їх генерування за допомогою редактора XMLDB.

Буде відображено список файлів, які потрібно узгодити (відновити), і для їх виправлення можна використовувати редактор XMLDB.';
$string['reconcile_files_no'] = 'Усі файли в порядку. Узгодження не потрібно.';
$string['reconcile_files_yes'] = 'Знайдені файли для узгодження:';
$string['reconcilefiles'] = 'Узгодити файли XMLDB';
$string['reserved'] = 'Зарезервовано';
$string['reservedwords'] = 'Зарезервовані слова';
$string['revert'] = 'Повернутися';
$string['revert_changes'] = 'Повернути зміни';
$string['save'] = 'Зберегти';
$string['searchresults'] = 'Результати пошуку';
$string['selectaction'] = 'Вибрати дію:';
$string['selectdb'] = 'Вибрати базу даних:';
$string['selectfieldkeyindex'] = 'Вибрати Поле/Ключ/Індекс';
$string['selectonecommand'] = 'Будь ласка, виберіть одну з дій зі списку для перегляду коду PHP';
$string['selectonefieldkeyindex'] = 'Будь ласка, виберіть зі списку одне поле/ключ/індекс для перегляду коду PHP';
$string['selecttable'] = 'Виберіть таблицю:';
$string['table'] = 'Таблиця';
$string['tablenameempty'] = 'Ім’я таблиці не може бути порожнім';
$string['tables'] = 'Таблиці';
$string['unknownfield'] = 'Відноситься до невідомого поля';
$string['unknowntable'] = 'Відноситься до невідомої таблиці';
$string['unload'] = 'Вивантажувати';
$string['up'] = 'Вгору';
$string['view'] = 'Перегляд';
$string['view_reserved_words'] = 'Переглянути зарезервовані слова';
$string['view_structure_php'] = 'Переглянути структуру РНР';
$string['view_structure_sql'] = 'Переглянути структуру SQL';
$string['view_table_php'] = 'Переглянути таблицю РНР';
$string['view_table_sql'] = 'Переглянути таблицю SQL';
$string['viewedited'] = 'Переглянути відредаговане';
$string['vieworiginal'] = 'Переглянути оригінал';
$string['viewphpcode'] = 'Переглянути РНР код';
$string['viewsqlcode'] = 'Переглянути SQL код';
$string['viewxml'] = 'XML';
$string['violatedforeignkeys'] = 'Порушуються зовнішні ключі';
$string['violatedforeignkeysfound'] = 'Виявлено порушення зовнішніх ключів';
$string['violations'] = 'Порушення';
$string['wrong'] = 'Помилка';
$string['wrongdefaults'] = 'Виявлено помилку в Типовому';
$string['wrongints'] = 'Виявлено помилку в Числах';
$string['wronglengthforenum'] = 'Неправильна довжина enum поля';
$string['wrongnumberofreffields'] = 'Неправильна кількість вказаних полів';
$string['wrongoraclesemantics'] = 'Знайдено неправильні BYTE-семантики Oracle';
$string['wrongreservedwords'] = 'Знайдено використання зарезервованих слів <br />(відмітимо, що імена таблиць не важливі при використанні $CFG->prefix)';
$string['yesextraindexesfound'] = 'Було знайдено наступні додаткові індекси.';
$string['yesmissingindexesfound'] = 'Виявлено відсутність деяких індексів у вашій БД. Ось їх деталі та необхідний SQL код для виконання у вашому улюбленому SQL інтерфейсі для створення їх всіх (не забудьте зробити резервну копію ваших даних, перш ніж робити це).<br /><br />
Після виконання цього, наполегливо рекомендуємо запустити цю утиліту знову, щоб перевірити, що більше не залишилося відсутніх індексів.';
$string['yeswrongdefaultsfound'] = 'Виявлено суперечливість типових значень у вашій БД. Ось їх деталі та необхідний SQL код для виконання у вашому улюбленому SQL інтерфейсі для виправлення їх всіх (не забудьте зробити резервну копію ваших даних, перш ніж робити це).<br /><br />
Після виконання цього, наполегливо рекомендуємо запустити цю утиліту знову, щоб перевірити, що більше не залишилося суперечливих типових значень.';
$string['yeswrongintsfound'] = '<p>У вашій БД знайдено деякі неправильні цілі числа. Ось їх деталі та необхідні оператори SQL, які потрібно виконати за допомогою вашого улюбленого інтерфейсу SQL, щоб виправити їх. Не забудьте спочатку створити резервну копію своїх даних!</p>
<p>Після їх виправлення настійно рекомендується знову запустити цю утиліту, щоб перевірити, чи більше не знайдено неправильних цілих чисел.</p>';
$string['yeswrongoraclesemanticsfound'] = '<p>У вашій БД знайдено деякі стовпці Oracle, які використовують семантику BYTE. Ось їх деталі та необхідні оператори SQL, які потрібно виконати за допомогою вашого улюбленого інтерфейсу SQL, щоб перетворити їх усіх. Не забудьте спочатку створити резервну копію своїх даних!</p>
<p>Після цього настійно рекомендуємо запустити цю утиліту ще раз, щоб перевірити, чи не знайдено більше неправильної семантики.</p>';
