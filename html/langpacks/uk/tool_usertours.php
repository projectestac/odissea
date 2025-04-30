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
 * Strings for component 'tool_usertours', language 'uk', version '4.4'.
 *
 * @package     tool_usertours
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['above'] = 'Вище';
$string['actions'] = 'Дії';
$string['appliesto'] = 'Застосовується до';
$string['backdrop'] = 'Показати з фоном';
$string['backdrop_help'] = 'Ви можете використовувати фон для виділення частини сторінки, на яку ви вказуєте.

Примітка: Фони не сумісні з деякими частинами сторінки, наприклад панеллю навігації.';
$string['below'] = 'Нижче';
$string['block'] = 'Блокувати';
$string['block_named'] = 'Блок з іменем\'{$a}\\';
$string['cachedef_stepdata'] = 'Список кроків відвідування користувача';
$string['cachedef_tourdata'] = 'Список доступної інформації про тури користувачів, яка вибирається на кожній сторінці';
$string['confirmstepremovalquestion'] = 'Ви впевнені, що хочете видалити цей крок?';
$string['confirmstepremovaltitle'] = 'Підтвердження видалення кроку';
$string['confirmtourremovalquestion'] = 'Ви впевнені, що хочете видалити цей тур?';
$string['confirmtourremovaltitle'] = 'Підтвердити видалення туру';
$string['content'] = 'Вміст';
$string['content_heading'] = 'Вміст';
$string['content_help'] = 'Вміст, що описує крок, може бути доданий як звичайний текст, укладений у багатомовні теги (для використання з фільтром багатомовного вмісту), якщо потрібно.';
$string['content_type'] = 'Тип вмісту';
$string['content_type_help'] = '* Вручну - вміст вводиться за допомогою текстового редактора
* Ідентифікатор рядка мови - в ідентифікаторі рядка форматукомпонент (без пробілу після коми)';
$string['content_type_langstring'] = 'Ідентифікатор мовного рядка';
$string['content_type_manual'] = 'Посібник';
$string['cssselector'] = 'Селектор CSS';
$string['defaultvalue'] = 'За замовчуванням ({$a})';
$string['delay'] = 'Затримка перед показом кроку';
$string['delay_help'] = 'Можна за бажанням додати затримку перед відображенням кроку.

Ця затримка в мілісекундах.';
$string['description'] = 'Опис';
$string['description_help'] = 'Опис туру може бути доданий як звичайний текст, укладений у багатомовні теги (для використання з фільтром багатомовного вмісту), якщо потрібно. Крім того, ідентифікатор мовного рядка можна ввести в ідентифікатор формату,компонент (без дужок або пробілу після коми).';
$string['displaystepnumbers'] = 'Показати номери кроків';
$string['displaystepnumbers_help'] = 'Чи потрібно відображати кількість кроків, напр. 1/4, 2/4 тощо, щоб вказати тривалість огляду користувача.';
$string['done'] = 'Виконано';
$string['duplicatetour'] = 'Дубльований тур';
$string['duplicatetour_name'] = '{$a} (копія)';
$string['editstep'] = 'Редагування\'{$a}\\';
$string['enabled'] = 'Увімкнено';
$string['endonesteptour'] = 'Зрозуміло';
$string['endtour'] = 'Завершити тур';
$string['endtourlabel'] = 'Мітка кнопки завершення огляду';
$string['endtourlabel_help'] = 'За бажанням можна вказати спеціальну мітку для кнопки завершення огляду. Мітка за замовчуванням — «Зрозумів» для однокрокових турів і «Завершити тур» для багатокрокових турів.

Крім того, ідентифікатор мовного рядка можна ввести в ідентифікатор формату,компонент (без дужок або пробілу після коми).';
$string['event_step_shown'] = 'Показаний крок';
$string['event_tour_ended'] = 'Тур завершився';
$string['event_tour_reset'] = 'Скидання туру';
$string['event_tour_started'] = 'Початок туру';
$string['exporttour'] = 'Експортний тур';
$string['filter_accessdate'] = 'Дата доступу';
$string['filter_accessdate_enabled'] = 'Увімкнути фільтр дати доступу';
$string['filter_accessdate_enabled_help'] = 'Показуйте тур лише новим користувачам або користувачам, які нещодавно зайшли на сайт.';
$string['filter_category'] = 'Категорія';
$string['filter_category_help'] = 'Показати тур на сторінці, пов\'язаній з курсом у вибраній категорії.';
$string['filter_course'] = 'Курси';
$string['filter_course_help'] = 'Показати тур на сторінці, пов\'язаній з вибраним курсом.';
$string['filter_courseformat'] = 'Формат курсу';
$string['filter_courseformat_help'] = 'Показати тур на сторінці, яка пов\'язана з курсом, використовуючи вибраний формат курсу.';
$string['filter_cssselector'] = 'Селектор CSS';
$string['filter_cssselector_help'] = 'Показуйте огляд лише тоді, коли вказаний селектор CSS знайдено на сторінці.';
$string['filter_date_account_creation'] = 'Дата створення облікового запису користувача в межах';
$string['filter_date_first_login'] = 'Дата першого доступу користувача в межах';
$string['filter_date_last_login'] = 'Дата останнього доступу користувача в межах';
$string['filter_header'] = 'Тур фільтри';
$string['filter_help'] = 'Виберіть умови, за яких буде показано тур. Усі фільтри мають збігатися з тим, що тур показується користувачеві.';
$string['filter_role'] = 'Роль';
$string['filter_role_help'] = 'Тур може бути обмежений користувачам з вибраними ролями в контексті, де відображається тур. Наприклад, обмеження туру Dashboard користувачам, які виконують роль студента, не може працювати, якщо користувачі мають роль студента в курсі (як це зазвичай буває). Огляд панелі інструментів може бути обмежений лише користувачам із системною роллю.';
$string['filter_theme'] = 'Тема';
$string['filter_theme_help'] = 'Показати тур, коли користувач використовує одну з вибраних тем.';
$string['importtour'] = 'Імпортний тур';
$string['invalid_lang_id'] = 'Недійсний ідентифікатор мовного рядка';
$string['left'] = 'Ліворуч';
$string['modifyshippedtourwarning'] = 'Це турпосібник користувача, який поставляється разом з Moodle. Будь-які внесені вами зміни можуть бути змінені під час наступного оновлення сайту.';
$string['moodle_language_identifier'] = 'Ідентифікатор мовного рядка';
$string['movestepdown'] = 'Перемістити крок вниз';
$string['movestepup'] = 'Перемістити крок вгору';
$string['movetourdown'] = 'Перемістити тур вниз';
$string['movetourup'] = 'Перемістити тур';
$string['name'] = 'Ім\'я';
$string['name_help'] = 'Назву туру можна додати у вигляді простого тексту, укладеного в багатомовні теги (для використання з фільтром багатомовного вмісту), якщо потрібно.

Крім того, ідентифікатор мовного рядка можна ввести в ідентифікатор формату,компонент (без дужок або пробілу після коми).';
$string['newstep'] = 'Новий крок';
$string['newtour'] = 'Створити новий тур';
$string['next'] = 'Далі';
$string['nextstep'] = 'Далі';
$string['nextstep_sequence'] = 'Далі ({$a->position}/{$a->total})';
$string['options_heading'] = 'Параметри';
$string['orphan'] = 'Показувати, якщо не знайдено мету';
$string['orphan_help'] = 'Покажіть крок, якщо ціль не знайдена на сторінці.';
$string['pathmatch'] = 'Застосувати до URL-адреси';
$string['pathmatch_help'] = 'Тури відображатимуться на будь-якій сторінці, URL-адреса якої відповідає цьому значенню.

Ви можете використовувати символ % як символ підстановки, щоб означати будь-що. Деякі приклади значень включають:

* /my/% - відповідно до інформаційної панелі
* /course/view.php?id=2 - відповідно до конкретного курсу
* /mod/forum/view.php% - відповідати списку обговорень на форумі
* /user/profile.php% - відповідати сторінці профілю користувача

Якщо ви бажаєте відобразити екскурсію на домашній сторінці сайту, ви можете використовувати значення: «FRONTPAGE».';
$string['pausetour'] = 'Пауза';
$string['placement'] = 'Розташування';
$string['placement_help'] = 'Крок може бути розміщений вище, знизу, ліворуч або праворуч від цілі. Рекомендовано вище або нижче, оскільки вони краще підходять для мобільного дисплея.

Якщо крок не поміститься на певній сторінці у вказаному місці, він автоматично розміститься в іншому місці.';
$string['pluginname'] = 'Тури користувачів';
$string['privacy:metadata:preference:completed'] = 'Час, коли користувач останньо завершив тур користувача.';
$string['privacy:metadata:preference:requested'] = 'Час, коли користувач останнього часу вручну запитав користувальницький тур.';
$string['privacy:request:preference:completed'] = 'Ви останній раз позначили "{$a->name}" відвідування користувача як завершене {$a->time}';
$string['privacy:request:preference:requested'] = 'Ви останній запитали "{$a->name}" тур користувача на {$a->time}';
$string['reflex'] = 'Натисніть кнопку';
$string['reflex_help'] = 'Перейдіть до наступного кроку після натискання цілі.';
$string['resettouronpage'] = 'Перезавантажити ознайомчий тур';
$string['resumetour'] = 'Відновити';
$string['right'] = 'Праворуч';
$string['select_block'] = 'Вибрати блок';
$string['selector_defaulttitle'] = 'Введіть описову назву';
$string['selectordisplayname'] = 'Послідовний селектор CSS {$a}';
$string['selecttype'] = 'Вибір типу кроку';
$string['sharedtourslink'] = 'Сховище туру';
$string['skip'] = 'Пропустити';
$string['skip_tour'] = 'Пропустити тур';
$string['target'] = 'Цільова';
$string['target_block'] = 'Блокувати';
$string['target_heading'] = 'Цільова ступінь';
$string['target_selector'] = 'Вибір';
$string['target_selector_targetvalue'] = 'CSS селектори';
$string['target_selector_targetvalue_help'] = 'Селектор CSS можна використовувати для націлювання майже на будь-який елемент на сторінці. Відповідний селектор можна легко знайти за допомогою інструментів розробника для вашого веб-переглядача.';
$string['target_unattached'] = 'Відображення в середині сторінки';
$string['targettype'] = 'Тип цілі';
$string['targettype_help'] = 'Кожен крок пов\'язаний з частиною сторінки - ціллю. Типи цілей:

* Блок - для відображення кроку поруч із заданим блоком
* Селектор CSS - для точного визначення цільової області за допомогою CSS
* Відображення в середині сторінки - для кроку, який не потрібно асоціювати з певною частиною сторінки';
$string['title'] = 'Заголовок';
$string['title_help'] = 'Заголовок кроку може бути доданий у вигляді звичайного тексту, укладеного в теги мультиланг (для використання з багатомовним фільтром вмісту), якщо потрібно.

Альтернативно, ідентифікатор рядка мови може бути введений в ідентифікатор формату, компонент (без дужок або простору після коми).';
$string['tour1_content_addingblocks'] = 'Насправді ретельно продумайте включення будь-яких блоків на ваших сторінках. Блоки не відображаються в додатку Moodle Mobile, тому, як правило, краще переконатися, що ваш сайт працює добре без будь-яких блоків.';
$string['tour1_content_blockregion'] = 'Тут все ще є область блоків. Ми рекомендуємо повністю видалити блоки навігації та адміністрування, оскільки всі функції у темі Boost.';
$string['tour1_content_customisation'] = 'Щоб налаштувати вигляд свого сайту та домашньої сторінки сайту, скористайтеся меню налаштувань у кутку цього заголовка. Спробуйте увімкнути редагування прямо зараз.';
$string['tour1_content_end'] = 'Це завершення туру користувача. Він знову не показується, якщо ви не скинуте його, використовуючи посилання в нижньому колонтитулі. Як адміністратор ви також можете створювати свої власні тури!';
$string['tour1_content_navigation'] = 'Зараз основна навігація виконується за допомогою цієї панелі навігації. Оновлення вмісту залежить від того, де ви знаходитесь на сайті. Використовуйте кнопку вгорі, щоб приховати або показати її.';
$string['tour1_content_welcome'] = 'Ласкаво просимо до теми Boost. Якщо ви оновили з попередньої версії, ви можете знайти деякі речі, які виглядають трохи інакше з цією темою.';
$string['tour1_title_addingblocks'] = 'Додавання блоків';
$string['tour1_title_blockregion'] = 'Блокувати регіон';
$string['tour1_title_customisation'] = 'Налаштування';
$string['tour1_title_end'] = 'Кінець туру';
$string['tour1_title_navigation'] = 'Навігація';
$string['tour1_title_welcome'] = 'Ласкаво просимо';
$string['tour2_content_addblock'] = 'Якщо ви включите редагування, ви можете додати блоки з вікна навігації. Проте ретельно продумайте включення блоків на своїх сторінках. Блоки не відображаються в додатку Moodle Mobile, тому для кращого користування користувачем краще переконатися, що ваш курс працює добре без будь-яких блоків.';
$string['tour2_content_addingblocks'] = 'Можна додати блоки на цю сторінку за допомогою цієї кнопки. Проте ретельно продумайте включення блоків на своїх сторінках. Блоки не відображаються в додатку Moodle Mobile, тому для кращого користування користувачем краще переконатися, що ваш курс працює добре без будь-яких блоків.';
$string['tour2_content_customisation'] = 'Щоб змінити будь-які параметри курсу, скористайтеся меню налаштувань у кутку цього заголовка. На домашній сторінці кожного виду діяльності ви знайдете подібне меню налаштувань. Спробуйте повернути редагування зараз.';
$string['tour2_content_end'] = 'Це завершення туру користувача. Він знову не показується, якщо ви не скинуте його, використовуючи посилання в нижньому колонтитулі. Адміністратор сайту може також створювати додаткові тури для цього сайту, якщо потрібно.';
$string['tour2_content_navigation'] = 'Навігація тепер здійснюється через цей навігатор. Використовуйте кнопку вгорі, щоб приховати або показати її. Ви побачите, що існують посилання на розділи вашого курсу.';
$string['tour2_content_opendrawer'] = 'Спробуйте відкрити навігатор.';
$string['tour2_content_participants'] = 'Переглянути учасників тут. Це також місце, де ви можете додати або видалити студентів.';
$string['tour2_content_welcome'] = 'Ласкаво просимо до теми Boost. Якщо ваш сайт оновлено на більш ранній версії, то тут, на сторінці курсу, можна побачити, що речі виглядають дещо іншим.';
$string['tour2_title_addblock'] = 'Додати блок';
$string['tour2_title_addingblocks'] = 'Додавання блоків';
$string['tour2_title_customisation'] = 'Налаштування';
$string['tour2_title_end'] = 'Кінець туру';
$string['tour2_title_navigation'] = 'Навігація';
$string['tour2_title_opendrawer'] = 'Відкрити вікно навігації';
$string['tour2_title_participants'] = 'Учасники курсу';
$string['tour2_title_welcome'] = 'Ласкаво просимо';
$string['tour3_content_dashboard'] = 'Ваша нова інформаційна панель має багато функцій, які допоможуть вам легко отримати доступ до найважливішої для вас інформації.';
$string['tour3_content_displayoptions'] = 'Курси можна відсортувати за назвою курсу, короткою назвою курсу або датою останнього доступу. Ви також можете вибрати відображення курсів у списку з підсумковою інформацією або за умовчанням у вигляді картки.';
$string['tour3_content_overview'] = 'Блок Огляд курсу показує всі курси, на які ви зареєстровані. Ви можете вибрати, щоб показати курси, які зараз виконуються, або в минулому чи в майбутньому, або курси, які ви позначили зірочкою.';
$string['tour3_content_recentcourses'] = 'У блоці «Нещодавно відвідані курси» відображаються курси, які ви востаннє відвідували, що дає вам змогу повернутися назад.';
$string['tour3_content_starring'] = 'Ви можете позначити курс зірочкою, щоб виділити його, або приховати курс, який більше для вас не важливий. Ці дії впливають лише на ваш погляд. Ви також можете вибрати відображення курсів у списку або з підсумковою інформацією, або за умовчанням у вигляді картки.';
$string['tour3_content_timeline'] = 'Блок Timeline показує ваші важливі майбутні події. Ви можете вибрати відображення активності протягом наступного тижня, місяця або в майбутньому. Ви також можете показати елементи, які прострочені.';
$string['tour3_title_dashboard'] = 'Ваша інформаційна панель';
$string['tour3_title_displayoptions'] = 'Параметри відображення';
$string['tour3_title_overview'] = 'Огляд курсу';
$string['tour3_title_recentcourses'] = 'Нещодавно переглянуті курси';
$string['tour3_title_starring'] = 'Курси зірки та приховування';
$string['tour3_title_timeline'] = 'Блок часової шкали';
$string['tour4_content_groupconvo'] = 'Якщо ви є членом групи з увімкненим груповим обміном повідомленнями, ви побачите групові бесіди тут.

Групові бесіди курсу дозволяють вам спілкуватися з іншими у вашій групі в приватному та зручному місці.';
$string['tour4_content_icon'] = 'Ви можете отримати доступ до своїх повідомлень з будь-якої сторінки, використовуючи цей значок.

Якщо у вас є непрочитані повідомлення, тут також відображатиметься кількість непрочитаних повідомлень.

Натисніть на піктограму, щоб відкрити панель повідомлень і продовжити огляд.';
$string['tour4_content_messaging'] = 'Нові функції обміну повідомленнями включають груповий обмін повідомленнями в рамках курсу та кращий контроль над тим, хто може надсилати вам повідомлення.';
$string['tour4_content_settings'] = 'Ви можете отримати доступ до своїх налаштувань обміну повідомленнями за допомогою значка гвинтика. Нові налаштування конфіденційності дозволяють обмежити, хто може надсилати вам повідомлення.';
$string['tour4_content_starred'] = 'Ви можете позначити певні бесіди зірочкою, щоб їх було легше знайти.';
$string['tour4_title_groupconvo'] = 'Групові повідомлення';
$string['tour4_title_icon'] = 'Обмін повідомленнями';
$string['tour4_title_messaging'] = 'Новий інтерфейс обміну повідомленнями';
$string['tour4_title_settings'] = 'Налаштування обміну повідомленнями';
$string['tour4_title_starred'] = 'Зірочкою';
$string['tour_activityinfo_activity_student_content'] = 'Дати діяльності, а також те, що потрібно зробити, щоб завершити діяльність, відображаються на сторінці активності.';
$string['tour_activityinfo_activity_student_title'] = 'Нове: інформація про діяльність';
$string['tour_activityinfo_activity_teacher_content'] = 'Дати діяльності та умови завершення тепер відображаються для студентів на кожній сторінці діяльності (і за бажанням на сторінці курсу).
Для вправ, які вимагають, щоб учні вручну позначали діяльність як виконану, на сторінці діяльності відображається кнопка «Позначити як виконане».';
$string['tour_activityinfo_activity_teacher_title'] = 'Нове: інформація про діяльність';
$string['tour_activityinfo_course_student_content'] = 'Дати діяльності та/або те, що потрібно зробити, щоб завершити діяльність, відображаються на сторінці курсу.';
$string['tour_activityinfo_course_student_title'] = 'Нове: інформація про діяльність';
$string['tour_activityinfo_course_teacher_content'] = 'Нові налаштування курсу «Показати умови завершення» та «Показати дати діяльності» дозволяють вибрати, чи відображатимуться умови завершення діяльності (якщо встановлено) та/або дати для студентів на сторінці курсу.';
$string['tour_activityinfo_course_teacher_title'] = 'Нове: інформація про діяльність';
$string['tour_final_step_content'] = 'Це кінець вашого огляду користувача. Він не відображатиметься знову, якщо ви не скинете його за допомогою посилання в нижньому колонтитулі.';
$string['tour_final_step_title'] = 'Кінець туру';
$string['tour_navigation_course_announcements_teacher_content'] = '@@PIXICON::tour/tour_course_admin_3::tool_usertours@@<br> Публікуйте тут важливі новини.';
$string['tour_navigation_course_announcements_teacher_title'] = 'Щось розповісти всім?';
$string['tour_navigation_course_edit_teacher_content'] = '@@PIXICON::tour/tour_course_admin_1::tool_usertours@@<br> Додайте новий вміст або відредагуйте наявний вміст.';
$string['tour_navigation_course_edit_teacher_title'] = 'Активувати режим редагування';
$string['tour_navigation_course_index_student_content'] = '@@PIXICON::tour/tour_course_student::tool_usertours@@<br> Переглядайте заходи та відстежуйте свій прогрес.';
$string['tour_navigation_course_index_student_title'] = 'Знайдіть свій шлях';
$string['tour_navigation_course_index_teacher_content'] = '@@PIXICON::tour/tour_course_admin_2::tool_usertours@@<br> Перетягніть дії, щоб змінити порядок вмісту курсу.';
$string['tour_navigation_course_index_teacher_title'] = 'Покажчик курсу';
$string['tour_navigation_course_student_tour_des'] = 'Де переглянути заходи в курсі';
$string['tour_navigation_course_student_tour_name'] = 'Покажчик курсу';
$string['tour_navigation_course_teacher_tour_des'] = 'Режим редагування, перетягування діяльності та розміщення оголошень у курсі';
$string['tour_navigation_course_teacher_tour_name'] = 'Редагування курсу';
$string['tour_navigation_dashboard_content'] = '@@PIXICON::tour/tour_dashboard::tool_usertours@@<br> Ця бічна панель може містити більше функцій.';
$string['tour_navigation_dashboard_title'] = 'Розгорніть, щоб досліджувати';
$string['tour_navigation_dashboard_tour_des'] = 'Де можна знайти блоки';
$string['tour_navigation_dashboard_tour_name'] = 'Блоковий ящик';
$string['tour_navigation_mycourses_content'] = '@@PIXICON::tour/tour_mycourses::tool_usertours@@<br> Додавати, копіювати, видаляти та приховувати курси з цього меню.';
$string['tour_navigation_mycourses_endtourlabel'] = 'Я розумію';
$string['tour_navigation_mycourses_title'] = 'Курси та категорії';
$string['tour_navigation_mycourses_tour_des'] = 'Параметри керування курсами на сторінці Мої курси';
$string['tour_navigation_mycourses_tour_name'] = 'Керування курсом';
$string['tour_resetforall'] = 'Стан туру був скинутий. Він знову відображатиметься для всіх користувачів.';
$string['tourconfig'] = 'Файл конфігурації туру для імпорту';
$string['tourisenabled'] = 'Тур включений';
$string['tourlist_explanation'] = 'Ви можете створити стільки турів, скільки хочете, і включити їх для різних частин Moodle. Для кожної сторінки можна створити лише один тур.';
$string['tours'] = 'Тури';
$string['usertours'] = 'Тури користувачів';
$string['usertours:managetours'] = 'Створення, редагування та видалення оглядів користувачів';
$string['viewtour_edit'] = 'Ви можете <a href="{$a->editlink}">відредагувати налаштування за замовчанням</a> і <a href="{$a->resetlink}">змусити Тур знову відобразиться</a> для всіх користувачів.';
$string['viewtour_info'] = 'Це тур "{$a->tourname}". Він застосовується до шляху "{$a->path}".';
