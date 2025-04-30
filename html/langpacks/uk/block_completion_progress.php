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
 * Strings for component 'block_completion_progress', language 'uk', version '4.4'.
 *
 * @package     block_completion_progress
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['completed_colour'] = '#73A839';
$string['completed_colour_descr'] = 'HTML Код кольору для елементів, які були завершені';
$string['completed_colour_title'] = 'Завершений колір';
$string['completion_not_enabled'] = 'Відстеження завершення на цьому сайті не ввімкнено.';
$string['completion_not_enabled_course'] = 'Відстеження завершення в цьому курсі не ввімкнено.';
$string['completion_progress:addinstance'] = 'Додати новий блок прогресу завершення';
$string['completion_progress:myaddinstance'] = 'Додайте блок "Прогрес завершення" на "Мою домашню сторінку"';
$string['completion_progress:overview'] = 'Подивіться огляд курсу для проходження курсу для всіх студентів';
$string['completion_progress:showbar'] = 'Показати панель у блоці прогресу завершення';
$string['config_activitiesincluded'] = 'Діяльність включена';
$string['config_activitycompletion'] = 'Всі заходи з набором завершення';
$string['config_default_title'] = 'Прогрес завершення';
$string['config_group'] = 'Доступно лише для групи чи групування';
$string['config_header_monitored'] = 'Моніторинг';
$string['config_icons'] = 'Використовуйте піктограми в стовпчиках';
$string['config_longbars'] = 'Як представити довгі стовпці';
$string['config_orderby'] = 'Впорядкувати стовпці по';
$string['config_orderby_course_order'] = 'Замовлення в курсі';
$string['config_orderby_due_time'] = 'Час з використанням дати "{$a}"';
$string['config_percentage'] = 'Показати студентам відсоток';
$string['config_scroll'] = 'Прокрутіть';
$string['config_selectactivities'] = 'Виберіть діяльність';
$string['config_selectedactivities'] = 'Вибрані діяльності';
$string['config_squeeze'] = 'Стиснути';
$string['config_title'] = 'Альтернативна назва';
$string['config_wrap'] = 'Завернути';
$string['coursenametoshow'] = 'Назва курсу для показу на інформаційній панелі';
$string['defaultlongbars'] = 'Презентація за замовчуванням для довгих стовпців';
$string['forceiconsinbar'] = 'Примусові значки на панелі прогресу';
$string['fullname'] = 'Повна назва курсу';
$string['futureNotCompleted_colour'] = '#025187';
$string['futureNotCompleted_colour_descr'] = 'HTML-код кольору для майбутніх елементів, які ще не завершені';
$string['futureNotCompleted_colour_title'] = 'Майбутній колір не завершеного';
$string['how_activitiesincluded_works'] = 'Як включаючи діяльність роботи';
$string['how_activitiesincluded_works_help'] = '<p> За замовчуванням всі дії з набором налаштувань завершення діяльності включаються в панель. </p> <p> Ви також можете вручну вибрати дії, які потрібно включити. </p>';
$string['how_group_works'] = 'Які видимі групи використовуються';
$string['how_group_works_help'] = '<p> Вибір групи або групування обмежить відображення цього блоку лише цією групою або групуванням. </p>';
$string['how_longbars_works'] = 'Як довгі стовпці є представлені';
$string['how_longbars_works_help'] = '<p> Коли стовпці перевищують задану довжину, їх можна подати одним із наступних способів. </p> <ul> <li> Затиснуті в одну горизонтальну смугу </li> <li> Прокручування в бік, щоб відобразити переповнені  сегменти </li> <li> Стискання, щоб показати всі сегменти рядка в декількох рядках </li> </ul> <p> Зверніть увагу, що коли панель стиснута, індикатор ЗАРАЗ не відображатиметься. </p>';
$string['how_ordering_works'] = 'Як працює замовлення';
$string['how_ordering_works_help'] = '<p> Є два способи замовити діяльність у блоці прогресу завершення. </p> <ul> <li> <em> Час, використовуючи дату "Очікуване завершення" </em> (за замовчуванням) <br /> Очікувана дата завершення заходів / ресурсів використовуються для замовлення діаграми. Якщо діяльність / ресурси не мають очікуваної дати завершення, замість цього використовується замовлення в курсі. При використанні цього параметра відображається індикатор ЗАРАЗ. </li> <li> <em> Замовлення в курсі </em> <br /> Діяльність / ресурси подаються в тому ж порядку, що і на сторінці курсу. Якщо використовується ця опція, очікувані дати завершення ігноруються. Якщо використовується ця опція, індикатор ЗАРАЗ не відображається. </li> </ul>';
$string['how_selectactivities_works'] = 'Як включити діяльність роботи';
$string['how_selectactivities_works_help'] = '<p> Щоб вручну вибрати діяльність, яку потрібно включити до панелі, переконайтесь, що для параметра "Діяльність включено" встановлено значення "Вибрані дії". <p> Тримайте клавішу CTRL, щоб вибрати кілька видів діяльності. </p>';
$string['indeterminate'] = '?';
$string['lastonline'] = 'Останній в курсі';
$string['mouse_over_prompt'] = 'Наведіть курсор миші на панель або сенсорну панель для отримання інформації.';
$string['no_activities_config_message'] = 'Немає жодної діяльності чи ресурсів із набором завершення діяльності або не вибрано жодної діяльності чи ресурсів. Встановіть завершення діяльності на дії та ресурси, а потім налаштуйте цей блок.';
$string['no_activities_message'] = 'Жодна діяльність чи ресурси не контролюються. Використовуйте config для налаштування моніторингу.';
$string['no_blocks'] = 'Блоки завершення Програми не встановлені для ваших курсів.';
$string['no_courses'] = 'Ви не зараховані на жодні курси. Показуватимуться лише стовпці із курсів на які Ви записані.';
$string['no_visible_activities_message'] = 'Наразі жоден з заходів, що моніторяться,   не відображається.';
$string['notCompleted_colour'] = '#C71C22';
$string['notCompleted_colour_descr'] = 'HTML-код кольору для поточних елементів, які ще не завершені';
$string['notCompleted_colour_title'] = 'Колір для Не завершений';
$string['not_all_expected_set'] = 'Не для всіх заходів із завершенням "{$a}" встановлено дату .';
$string['now_indicator'] = 'ЗАРАЗ';
$string['overview'] = 'Огляд учнів';
$string['pluginname'] = 'Прогрес виконання';
$string['privacy:metadata'] = 'Блок Прогресу виконання  відображає лише наявні дані про завершення.';
$string['progress'] = 'Прогрес';
$string['progressbar'] = 'Прогрес виконання';
$string['selectitem'] = 'Виберіть "{$a}"';
$string['shortname'] = 'Коротка назва курсу';
$string['showallinfo'] = 'Показати всю інформацію';
$string['showinactive'] = 'Показати неактивних студентів в Огляді';
$string['showlastincourse'] = 'Показати студент останній за часом курсу в Огляді';
$string['submitted'] = 'Надіслано';
$string['submittednotcomplete_colour'] = '#FFCC00';
$string['submittednotcomplete_colour_descr'] = 'HTML-код кольору для елементів, які були надіслані, але ще не завершені';
$string['submittednotcomplete_colour_title'] = 'Надісланий, але не повний колір';
$string['time_expected'] = 'очікуваний';
$string['why_set_the_title'] = 'Чому ви можете встановити назву примірника блоку?';
$string['why_set_the_title_help'] = '<p> У блоці завершення може бути декілька примірників. Ви можете використовувати різні блоки завершення прогресу для відстеження різних наборів діяльності або ресурсів. Наприклад, ви могли відстежувати хід виконання завдань в одному блоці та вікторин в іншому. З цієї причини ви можете змінити заголовок за замовчуванням і встановити більш відповідний заголовок блоку для кожного примірника. </p>';
$string['why_show_precentage'] = 'Навіщо показувати студентам відсоток успішності?';
$string['why_show_precentage_help'] = '<p> Можливо показати загальний відсоток успішності студентам. </p> <p> Це обчислюється як кількість виконаних заходів, поділена на загальну кількість заходів у барі. </p> <p> Відсоток прогресу, поки не з\'явиться наведення  мишки на елементі в стовбці. </ p>';
$string['why_use_icons'] = 'Чому ви можете використовувати піктограми?';
$string['why_use_icons_help'] = '<p> Ви можете додати піктограми галочок та перехресних знань у програмі завершення, щоб зробити цей блок більш візуально доступним для студентів із дальтонізмом. </p> <p> Це також може дозволити стати блоку зрозумілішим, якщо ви вважаєте, що кольори не є інтуїтивно зрозумілими ні з культурних, ні з особистих причин. </p>';
$string['wrapafter'] = 'Під час упаковки обмежте рядки до';
