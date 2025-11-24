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
 * Strings for component 'qtype_coderunner', language 'uk', version '4.5'.
 *
 * @package     qtype_coderunner
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aborted'] = 'Тестування було перервано через помилку.';
$string['ace-language'] = 'Мова Асе';
$string['ace_ui_notready'] = 'Ейс-редактор не готовий. Можливо, перезавантажте сторінку?';
$string['addingcoderunner'] = 'Додавання нового питання CodeRunner';
$string['advanced_customisation'] = 'Розширене налаштування';
$string['ajax_error'] = '*** AJAX ERROR. ЦЕ НЕ ЗБЕРЕЖЕНО ***';
$string['allok'] = 'Пройшов усі тести!';
$string['allornone'] = 'Код тесту повинен бути наданий або для всіх тестових випадків, або для жодного.';
$string['allornothing'] = 'Оцінювання все або нічого';
$string['allornothing_help'] = 'Якщо встановлено прапорець "Все або нічого", всі тестові завдання повинні бути виконані, щоб подати заявку, щоб отримати будь-які оцінки. В іншому випадку оцінка отримується шляхом підсумовування оцінок для всіх тестових завдань, які проходилися, і виражаються як частка від максимально можливої оцінки.

Мітки для кожного тесту можуть бути вказані лише у тому випадку, якщо прапорець "Все або нічого" не встановлено.

Якщо ви використовуєте шаблон оцінювання, який присвоює позначки частини для запитань тестування, "Все або нічого", як правило, не знімайте прапорець.';
$string['allowattachments'] = 'Дозволити вкладення';
$string['allowattachments_help'] = 'Чи дозволяти учням додавати вкладені файли до своїх матеріалів та, якщо так, то скільки. Вкладені файли копіюються в робочий каталог часу виконання, і список розділених комами імен вкладених файлів надається шаблону в змінній Twig {{ATTACHMENTS}}. Попередження: дозвіл вкладенням може мати наслідки для продуктивності чи дискового простору для серверів Moodle та Jobe з великими класами та / або великими вкладеннями. Сервери Moodle та сервери Jobe до лютого 2019 року зберігають усі вкладення нескінченно.';
$string['allowedfilenames'] = 'Дозволені імена файлів';
$string['allowedfilenames_help'] = 'Усі завантажені імена файлів повинні відповідати заданому регулярному вираженню PHP (Perl), якщо вони не порожні. Наприклад, використовуйте ". + \\\\. Cpp", щоб дозволити будь-який файл C++ або "(?! Prog) \\\\. Java", щоб дозволити будь-який файл Java, окрім "Prog.java". Крім того, імена файлів повинні містити лише буквенно - цифрові символи плюс підкреслення, дефіс та крапку, не повинні починатися з подвійного підкреслення (\'\\ _ \\ _\') і не повинні суперечити жодній із назв файлів підтримки. Опис - це текстове повідомлення, яке показується студенту, щоб пояснити, які файли очікуються. Залиште порожнім, щоб відобразити сам регулярний вираз. Залиште обоє порожніми, щоб обійти звичайну перевірку виразів.';
$string['allowedfilenamesregex'] = 'Дозволені імена файлів (регулярний вираз)';
$string['allowmultiplestdins'] = 'Дозволити кілька stdins';
$string['answer'] = 'Відповідь';
$string['answer_help'] = 'Зразок відповіді може бути введений сюди та використаний для перевірки автором запитання та необов\'язково показаний учням під час перегляду. Він також використовується сценарієм масового тестування. Правильність не порожньої відповіді перевіряється під час збереження, якщо не встановлено прапорець "Підтвердити при збереженні"';
$string['answerbox_group'] = 'Поле для відповідей';
$string['answerbox_group_help'] = 'Встановіть кількість рядків для виділення для поля відповідей. Тут встановлюється мінімальна висота елемента інтерфейсу користувача (наприклад, Ace), який керує полем відповідей. Ширина встановлюється відповідно до вікна. Якщо відповідь заповнить поле вертикально або горизонтально, з\'являться панелі прокрутки.';
$string['answerboxlines'] = 'Рядки';
$string['answerpreload'] = 'Попереднє завантаження поля для відповідей';
$string['answerpreload_help'] = 'Текст, поданий тут, буде попередньо завантажений у поле відповідей учнів.';
$string['answerprompt'] = 'Відповідь:';
$string['answerrequired'] = 'Надайте не порожню відповідь';
$string['answertooshort'] = 'Відповідь занадто коротка. Повинно бути не менше {$a} символів.';
$string['asolutionis'] = 'Авторське рішення питання:';
$string['atleastonetest'] = 'Ви повинні надати принаймні одну відповідь для цього питання.';
$string['attachmentoptions'] = 'Варіанти вкладення (експериментальні)';
$string['attachmentsoptional'] = 'Додатки необов’язкові';
$string['attachmentsrequired'] = 'Потрібні прикріплення';
$string['attachmentsrequired_help'] = 'Цей параметр визначає мінімальну кількість вкладених файлів, необхідних для оцінки відповіді.';
$string['autotagbycategoryindextitle'] = 'Автозапуск питання CodeRunner';
$string['autotagbycategorytitle'] = 'Автотег CodeRunner за категоріями';
$string['bad_dotdotdot'] = 'Неправильне використання \'...\'. Повинно бути, врешті-решт, після двох зростаючих числових штрафів';
$string['bad_empty_splitter'] = 'Тестовий спліттер не може бути порожнім при використанні шаблону комбінатора';
$string['badacelangstring'] = 'Поганий рядок мови Ace';
$string['badcputime'] = 'Ліміт часу CPU повинен бути порожнім або повинен бути цілим числом, більшим за нуль';
$string['bademptyprecheck'] = 'Попередня перевірка не вдалася із наступним несподіваним результатом.';
$string['badfilenamesregex'] = 'Неправильний регулярний вираз';
$string['badfiles'] = 'Заборонені імена файлів:  {$a}';
$string['badjsonfunc'] = 'Невідома JSON вбудована функція ({$a->func})';
$string['badquestion'] = 'Помилка';
$string['bulktestallincontext'] = 'Перевірити всіх';
$string['bulktestcontinuefromhere'] = 'Запустіть знову або поновіть, починаючи звідси';
$string['bulktestindextitle'] = 'CodeRunner  основна частина тестування';
$string['bulktestrun'] = 'Запустити всі  запитання тесту для всіх питань у системі (повільно, лише адміністратор)';
$string['bulktesttitle'] = 'Перевірка запитаннь в {$a}';
$string['coderunner'] = 'Код Програми';
$string['coderunner_link'] = 'question/type/coderunner';
$string['coderunnercategories'] = 'Категорії запитань';
$string['coderunnercontexts'] = 'Контексти з CodeRunner питання';
$string['pluginname_link'] = 'question/type/coderunner';
$string['template_changed'] = 'Шаблон  тесту змінено - відключити комбінатор? ["Скасувати" залишає його ввімкненим.]';
$string['template_help'] = 'Шаблон визначає програми (програми), які виконуються в пісочниці для даної задачі
відповідей та тестів учнів. Є два типи шаблонів:

* шаблон тесту, який визначає програму, яку потрібно запустити для одного тестового випадку, і,
* шаблон «комбінатора», який визначає програму, яка поєднує всі різні випадки в одну програму.

Поле "is_combinator" залишається неввімкненим для шаблону  тесту і встановлює перевірку шаблону комбінатора. Інша частина цієї довідкової панелі передбачає що ви
використовуєте шаблон тестування; дивіться повну документацію для використання
шаблони комбінаторів.

Шаблон обробляється
за допомогою двигуна шаблонів Twig (див. http://twig.sensiolabs.org)
в контексті, в якому STUDENT_ANSWER є студентом
response and TEST.test code - це код для поточного тесту. Ці значення
(та інші значення тестових вікон, наприклад, TEST.expected, TEST.stdin, TEST.mark)
можна вставити в шаблон, уклавши їх у подвійні дужки, напр.
<tt> {{TEST.testcode}} </tt>. Для використання в буквальних рядках - відповідний вихід
функція повинна застосовуватися, наприклад <tt> {{STUDENT_ANSWER | e (\'py\')}} </tt> - студент
відповідь уникнув способом, придатним для використання в програмі Python потрійне подвійне цитування . Інші функції такі як - <tt>e (\'c\') </tt>, <tt> e (\'java\') </tt>,
<tt>e(\'matlab\') </tt>. Програма, яка виводиться Twig, потім компілюється та виконується
з мовою вибраного типу вбудованого типу та зі набором stdin
до TEST.stdin. Потім вивід з цієї програми передається обраному оцінювачу.
Щоб отримати докладнішу інформацію, див. Довідку в розділі "Класифікація керування".

Зауважте, що якщо використовується індивідуальний шаблон для тесту
Для кожного тестового випадку буде виконано цикл компіляції та виконання, тоді як для більшості вбудованих типів питань натомість визначають шаблон комбінатора, який поєднує
всі тестові випадки в один цикл.

Якщо встановлено прапорець налагодження шаблону, програма згенерує
для кожного тесту і  буде відображеною у виводі.';
$string['templatecontrols'] = 'Керування шаблонами';
$string['templateerror'] = 'Помилка шаблону';
$string['templategrader'] = 'Шаблон оцінки';
$string['templateparams'] = 'Параметри шаблону';
$string['testallincategory'] = 'Перевірити усі питання в цій категорії';
$string['testalltitle'] = 'Перевірити всі питання в даному контексті';
$string['testcase'] = 'Тестовий {$a}';
$string['testcasecontrols'] = 'Властивості тесту:';
$string['testcases'] = 'Тести';
$string['testcode'] = 'Код тесту';
$string['testcode_help'] = 'Код тесту, розглядається як шаблон  {{TEST.testcode}}';
$string['testcolhdr'] = 'Тест';
$string['testingquestion'] = 'Запитання тесту  {$a}';
$string['testsplitterre'] = 'Роздільник тесту  (regex)';
$string['testtype'] = 'Попередня перевірка типу тесту';
$string['testtype_both'] = 'Обидва';
$string['testtype_normal'] = 'Тільки перевірка';
$string['testtype_precheck'] = 'Тільки попередня перевірка';
$string['tooshort'] = 'Відповідь занадто коротка, щоб бути значущою та була проігнорована без покарання';
$string['twigall'] = 'Все Twig';
$string['twigcontrols'] = 'Керування Twig';
$string['twigerror'] = 'Помилка Twig {$a}';
$string['twigerrorintest'] = 'Помилка Twig при обробці цього тесту {$ a}';
$string['type_header'] = 'CodeRunner Тип питання';
$string['typename'] = 'Тип запитання';
$string['typerequired'] = 'Будь ласка, виберіть тип запитання(мова, формат та інше)';
$string['ui_fallback'] = 'Повернення до сирої області тексту';
$string['uicontrols'] = 'Вхідні інтерфейси користувача';
$string['unauthorisedbulktest'] = 'Ви не маєте відповідного доступу до будь-яких питань CodeRunner';
$string['unauthoriseddbaccess'] = 'Ви не маєте права використовувати цей скрипт';
$string['unknowncombinatorgraderfield'] = 'Невідоме ім\'я поля ({$a->fieldname}) у виведенні оцінювання комбінатора';
$string['unknownerror'] = 'Виникла несподівана помилка. Пісочниця може бути недоступна. Спробуйте ще раз найближчим часом.';
$string['unserializefailed'] = 'Збережені результати тесту не можна було десеріалізувати. Можливо, спробувати регресувати?';
$string['useace'] = 'Шаблон використовує асе';
$string['useasexample'] = 'Використовувати як приклад';
$string['validateonsave'] = 'Перевірити при  збереженні';
$string['wrongnumberofformats'] = 'Неправильна кількість форматів стовпців результатів тестів. Очікував {$a->expected} , отримав  {$a->got}';
$string['xmlcoderunnerformaterror'] = 'Помилка формату XML у запитанні coderunner';
