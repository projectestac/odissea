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
 * Strings for component 'search', language 'uk', version '4.4'.
 *
 * @package     search
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advancedsearch'] = 'Розширений пошук';
$string['all'] = 'Все';
$string['allareas'] = 'Всі області';
$string['allcourses'] = 'Всі курси';
$string['allusers'] = 'Усі користувачі';
$string['author'] = 'Автор';
$string['authorname'] = 'Ім’я автора';
$string['back'] = 'Назад';
$string['beadmin'] = 'Ви повинні бути адміністратором для використання цієї сторінки';
$string['checkdb'] = 'Перевірка бази даних';
$string['checkdbadvice'] = 'Перевірити вашу базу даних на можливі проблеми.';
$string['checkdir'] = 'Перевірити каталог';
$string['checkdiradvice'] = 'Впевніться, що каталог даних створено та він має право на запис.';
$string['commenton'] = 'Коментар на';
$string['confirm_delete'] = 'Ви впевнені, що хочете видалити індекс {$a}? Доки область пошуку не буде проіндексована, користувачі не будуть отримувати результати пошуку з цієї області.';
$string['confirm_deleteall'] = 'Ви впевнені, що хочете видалити весь індексований вміст? Поки сайт не буде індексований, користувачі не будуть отримувати результати пошуку.';
$string['confirm_indexall'] = 'Ви впевнені, що хочете оновити індексований вміст зараз? Якщо для індексації потрібна велика кількість вмісту, це може зайняти багато часу. Для серверів у реальному часі ви повинні залишити індексацію до запланованого завдання індексування глобального пошуку.';
$string['confirm_reindexall'] = 'Ви впевнені, що хочете переінформувати весь вміст сайту зараз? Якщо на вашому сайті розміщено велику кількість вмісту, це займе багато часу, і користувачі не зможуть отримувати повні результати пошуку, поки їх не буде завершено.';
$string['content:courserole'] = '{$a->role} в {$a->course}';
$string['core-all'] = 'Все';
$string['core-course-content'] = 'Зміст курсу';
$string['core-courses'] = 'Курси';
$string['core-other'] = 'Інший';
$string['core-users'] = 'Користувачі';
$string['createanindex'] = 'створити індекс';
$string['createdon'] = 'Створено на';
$string['database'] = 'База даних';
$string['databasestate'] = 'Індексація бази даних';
$string['datadirectory'] = 'Каталог даних';
$string['deleteindex'] = 'Видалити індекс {$a}';
$string['deletionsinindex'] = 'Видалення в індексі';
$string['docmodifiedon'] = 'Востаннє змінено {$a}';
$string['doctype'] = 'Тип документу';
$string['doctypenotsupported'] = 'Вказаний тип документу не підтримується';
$string['documents'] = 'документи';
$string['documentsfor'] = 'Документи для';
$string['documentsindatabase'] = 'Документи в базі даних';
$string['documentsinindex'] = 'Документи в індексі';
$string['duration'] = 'Тривалість';
$string['emptydatabaseerror'] = 'Таблиця в базі даних не існує або не проіндексована.';
$string['enginenotfound'] = 'Пошукову систему {$a} не знайдено';
$string['enginenotinstalled'] = 'Двигун {$a} не встановлено.';
$string['enginenotselected'] = 'Ви не вибрали жодної пошукової системи.';
$string['engineserverstatus'] = 'Пошукова система не доступна. Будь ласка, зверніться до адміністратора.';
$string['enteryoursearchquery'] = 'Введіть ваш запит на пошук';
$string['error_indexing'] = 'Сталася помилка під час індексування';
$string['errorareanotavailable'] = 'Область пошуку "{$a}" недоступна.';
$string['errors'] = 'Помилки';
$string['everywhere'] = 'Скрізь можна отримати доступ';
$string['filesinindexdirectory'] = 'Файли в індекс каталозі';
$string['filterheader'] = 'Фільтр';
$string['fromtime'] = 'Змінено після';
$string['globalsearch'] = 'Глобальний пошук';
$string['globalsearchdisabled'] = 'Глобальний пошук не включено.';
$string['gradualreindex'] = 'Поступове реіндексування {$a}';
$string['gradualreindex_confirm'] = 'Ви впевнені, що хочете перешифрувати {$a}? Це може зайняти деякий час, хоча існуючі дані залишатимуться доступними під час реіндексу.';
$string['gradualreindex_queued'] = 'Повернення до запиту було здійснено для {$a->name} ({$a->count} контекстів). Ця індексація здійснюватиметься за допомогою & lsquo; Індексації глобального пошуку & rsquo; заплановане завдання.';
$string['incourse'] = 'В курсі  {$a}';
$string['index'] = 'Індекс';
$string['indexwhendisabledfullnotice'] = 'Індексування наразі не дозволяється, коли пошук вимкнено. Щоб увімкнути це, перегляньте параметр <a href="{$a->url}">searchindexwhendisabled</a>.';
$string['indexwhendisabledshortnotice'] = 'Індексація недоступна.';
$string['invalidindexerror'] = 'Індексний каталог має недійсний індекс або взагалі відсутній.';
$string['ittook'] = 'Вимагається';
$string['matchingfile'] = 'Співпадіння з файлу <span class="filename">{$a}</span>';
$string['matchingfiles'] = 'Співпадіння з файлів:';
$string['mycoursesonly'] = 'Тільки мої курси';
$string['next'] = 'Вперед';
$string['noindexmessage'] = 'Admin: здається не має ніякого індексу пошуку. Будь ласка';
$string['noresults'] = 'Результат відсутній';
$string['normalsearch'] = 'Нормальний пошук';
$string['notitle'] = 'Без заголовку';
$string['openedon'] = 'відкрито на';
$string['optimize'] = 'Оптимізувати';
$string['order'] = 'Порядок результатів';
$string['order_location'] = 'Визначення пріоритетів результатів, пов\'язаних з {$a}';
$string['order_relevance'] = 'Спочатку найбільш релевантні результати';
$string['priority'] = 'Пріоритет';
$string['priority_normal'] = 'Звичайний';
$string['priority_reindexing'] = 'Повторне індексування';
$string['privacy:metadata'] = 'Пошукова підсистема не зберігає жодних персональних даних.';
$string['progress'] = 'Прогрес';
$string['queryerror'] = 'Введений вами запит не вдається опрацювати пошуковою системою: {$a}';
$string['queueheading'] = 'Додаткові черги індексування ({$a} пунктів)';
$string['resultsreturnedfor'] = 'повернуто результати для';
$string['runindexer'] = 'Запустити індексатор (реально)';
$string['runindexertest'] = 'Запустити індексатор (тест)';
$string['schemanotupdated'] = 'Схема пошуку застаріла.';
$string['schemaversionunknown'] = 'Пошукова система не знає про поточну версію схеми.';
$string['score'] = 'Рахунок';
$string['search'] = 'Пошук';
$string['search:course'] = 'Курси';
$string['search:course_teacher'] = 'Викладач курсу';
$string['search:customfield'] = 'Спеціальні поля курсу';
$string['search:message_received'] = 'Повідомлення - отримано';
$string['search:message_sent'] = 'Повідомлення - надіслано';
$string['search:mycourse'] = 'Мої курси';
$string['search:section'] = 'Розділи курсів';
$string['search:user'] = 'Користувачі';
$string['searcharea'] = 'Область пошуку';
$string['searchareacategories'] = 'Пошук категорій областей';
$string['searching'] = 'Пошук в ...';
$string['searchnotpermitted'] = 'Вам не дозволено здійснювати пошук';
$string['searchsetupdescription'] = 'Наступні кроки допоможуть вам налаштувати глобальний пошук в Moodle.';
$string['searchwithin'] = 'Пошук у межах';
$string['seconds'] = 'секунд';
$string['solutions'] = 'Рішення';
$string['statistics'] = 'Статистика';
$string['step'] = 'Крок';
$string['thesewordshelpimproverank'] = 'Ці слова допомагають вибрати рівень';
$string['thesewordsmustappear'] = 'Ці слова повинні з’явитися';
$string['thesewordsmustnotappear'] = 'Ці слова не повинні з’явитися';
$string['title'] = 'Заголовок';
$string['tofetchtheseresults'] = 'показати результати';
$string['topresults'] = 'Найкращі результати';
$string['totalsize'] = 'Загальний розмір';
$string['totime'] = 'Змінено до';
$string['type'] = 'Тип';
$string['uncompleteindexingerror'] = 'Індексація не була закінчена успішно, будь ласка, почніть з початку.';
$string['versiontoolow'] = 'Вибачте, глобальний пошук дозволено для PHP 5.0.0 або новіших';
$string['viewresultincontext'] = 'Показати результат в контексті';
$string['wordsintitle'] = 'Слова в заголовку';
