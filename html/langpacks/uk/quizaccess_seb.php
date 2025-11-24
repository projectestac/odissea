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
 * Strings for component 'quizaccess_seb', language 'uk', version '4.5'.
 *
 * @package     quizaccess_seb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtemplate'] = 'Додати новий шаблон';
$string['allowedbrowserkeysdistinct'] = 'Усі ключі мають бути різними.';
$string['allowedbrowserkeyssyntax'] = 'A key should be a 64-character hex string.';
$string['cachedef_config'] = 'Кеш конфігурації SEB';
$string['cachedef_configkey'] = 'Кеш ключів конфігурації SEB';
$string['cachedef_quizsettings'] = 'Кеш налаштувань тесту SEB';
$string['cantdelete'] = 'Шаблон не можна видалити, оскільки він використовувався для одного або кількох тестів.';
$string['cantedit'] = 'Шаблон не можна редагувати, оскільки він використовувався  для одного або кількох тестів.';
$string['checkingaccess'] = 'Перевірка доступу до Safe Exam Browser...';
$string['clientrequiresseb'] = 'Цей тест налаштовано на використання браузера Safe Exam Browser із конфігурацією клієнта.';
$string['confirmtemplateremovalquestion'] = 'Ви впевнені, що хочете видалити цей шаблон?';
$string['confirmtemplateremovaltitle'] = 'Підтвердити видалення шаблону?';
$string['conflictingsettings'] = 'У вас немає дозволу оновлювати наявні налаштування браузера Safe Exam Browser.';
$string['content'] = 'Шаблон';
$string['description'] = 'Опис';
$string['disabledsettings'] = 'Вимкнені налаштування.';
$string['disabledsettings_help'] = 'Налаштування тесту Safe Exam Browser не можна змінити, якщо тест було виконано. Щоб змінити налаштування, спочатку потрібно видалити всі спроби тесту.';
$string['downloadsebconfig'] = 'Завантажте файл конфігурації SEB';
$string['duplicatetemplate'] = 'Шаблон з такою назвою вже існує.';
$string['edittemplate'] = 'Редагувати шаблон';
$string['enabled'] = 'Увімкнено';
$string['error:ws:nokeyprovided'] = 'Потрібно надати принаймні один ключ Safe Exam Browser.';
$string['error:ws:quiznotexists'] = 'Тест не знайдено для ідентифікатора модуля курсу: {$a}';
$string['event:accessprevented'] = 'Доступ до тесту був заблокований';
$string['event:templatecreated'] = 'Створено шаблон SEB';
$string['event:templatedeleted'] = 'Шаблон SEB видалено';
$string['event:templatedisabled'] = 'Шаблон SEB вимкнено';
$string['event:templateenabled'] = 'Шаблон SEB увімкнено';
$string['event:templateupdated'] = 'Шаблон SEB оновлено';
$string['exitsebbutton'] = 'Вийти з Безпечного Екзаменаційного Браузера';
$string['filemanager_sebconfigfile'] = 'Завантажити налаштування Безпечного Екзаменаційного Браузера';
$string['filemanager_sebconfigfile_help'] = 'Будь ласка, завантажте свій власний файл конфігурації браузера Safe Exam Browser для цього тесту.';
$string['filenotpresent'] = 'Будь ласка, завантажте файл конфігурації SEB.';
$string['fileparsefailed'] = 'Не вдалося зберегти завантажений файл як файл конфігурації SEB.';
$string['httplinkbutton'] = 'Завантажити конфігурацію';
$string['invalid_browser_key'] = 'Недійсний ключ браузера SEB';
$string['invalid_config_key'] = 'Недійсний ключ конфігурації SEB';
$string['invalidkeys'] = 'Не вдалося перевірити ключі Safe Exam Browser. Переконайтеся, що ви використовуєте Safe Exam Browser із правильним файлом конфігурації.';
$string['invalidtemplate'] = 'Недійсний шаблон конфігурації SEB';
$string['manage_templates'] = 'Шаблони Безпечного Екзаменаційного Браузера';
$string['managetemplates'] = 'Керувати шаблонами';
$string['missingrequiredsettings'] = 'У налаштуваннях конфігурації відсутні деякі необхідні значення.';
$string['name'] = 'Ім\'я';
$string['newtemplate'] = 'Новий шаблон';
$string['noconfigfilefound'] = 'Не вдалося знайти завантажений файл конфігурації SEB для тесту з cmid: {$a}';
$string['noconfigfound'] = 'Не вдалося знайти конфігурацію SEB для тесту з cmid: {$a}';
$string['not_seb'] = 'Безпечний Екзаменаційний Браузер не використовується';
$string['notemplate'] = 'Без шаблону';
$string['passwordnotset'] = 'Поточні налаштування вимагають, щоб тести використовували браузер Safe Exam Browser, щоб встановити пароль тесту.';
$string['pluginname'] = 'Правила доступу до Безпечного Екзаменаційного Браузера';
$string['privacy:metadata:quizaccess_seb_quizsettings'] = 'Налаштування браузера Safe Exam Browser для тесту. Сюди входить ідентифікатор останнього користувача, який створив або змінив налаштування.';
$string['privacy:metadata:quizaccess_seb_quizsettings:quizid'] = 'Ідентифікатор тесту, для якої існують налаштування.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timecreated'] = 'Unix час створення параметрів.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timemodified'] = 'Час останньої зміни налаштувань Unix.';
$string['privacy:metadata:quizaccess_seb_quizsettings:usermodified'] = 'Ідентифікатор користувача, який останній створив або змінив налаштування.';
$string['privacy:metadata:quizaccess_seb_template'] = 'Налаштування шаблону браузера Safe Exam Browser. Сюди входить ідентифікатор останнього користувача, який створив або змінив шаблон.';
$string['privacy:metadata:quizaccess_seb_template:timecreated'] = 'Unix час створення шаблону.';
$string['privacy:metadata:quizaccess_seb_template:timemodified'] = 'Unix час останньої зміни шаблону.';
$string['privacy:metadata:quizaccess_seb_template:usermodified'] = 'Ідентифікатор користувача, який востаннє створив або змінив шаблон.';
$string['quizsettings'] = 'Налаштування тесту';
$string['restoredfrom'] = '{$a->name} (відновлено за допомогою cmid {$a->cmid})';
$string['seb'] = 'Безпечний Екзаменаційний Браузер';
$string['seb:bypassseb'] = 'Обійти вимогу переглядати тест в браузері Safe Exam Browser.';
$string['seb:manage_filemanager_sebconfigfile'] = 'Змінити налаштування тесту SEB: виберіть файл конфігурації SEB';
$string['seb:manage_seb_activateurlfiltering'] = 'Змінити налаштування тесту SEB: увімкніть фільтрацію URL-адрес';
$string['seb:manage_seb_allowedbrowserexamkeys'] = 'Змінити налаштування тесту SEB: дозволені ключі іспиту веб-переглядача';
$string['seb:manage_seb_allowreloadinexam'] = 'Змінити налаштування тесту SEB: дозволити перезавантаження';
$string['seb:manage_seb_allowspellchecking'] = 'Змінити налаштування тесту SEB: увімкнути перевірку орфографії';
$string['seb:manage_seb_allowuserquitseb'] = 'Змінити налаштування тесту SEB: дозволити вийти';
$string['seb:manage_seb_enableaudiocontrol'] = 'Змінити налаштування тесту SEB: увімкнути керування звуком';
$string['seb:manage_seb_expressionsallowed'] = 'Змінити налаштування тесту SEB: дозволені прості вирази';
$string['seb:manage_seb_expressionsblocked'] = 'Змінити налаштування тесту SEB: прості вирази заблоковано';
$string['seb:manage_seb_filterembeddedcontent'] = 'Змінити налаштування тесту SEB: відфільтрувати вбудований вміст';
$string['seb:manage_seb_linkquitseb'] = 'Змінити налаштування тесту SEB: Вийти з посилання';
$string['seb:manage_seb_muteonstartup'] = 'Змінити налаштування тесту SEB: вимкнути звук під час запуску';
$string['seb:manage_seb_quitpassword'] = 'Змінити налаштування тесту SEB: Вийти з пароля';
$string['seb:manage_seb_regexallowed'] = 'Змінити налаштування тесту SEB: дозволені регулярні вирази';
$string['seb:manage_seb_regexblocked'] = 'Змінити налаштування тесту SEB: регулярні вирази заблоковано';
$string['seb:manage_seb_requiresafeexambrowser'] = 'Змінити налаштування тесту SEB: потрібен браузер Safe Exam Browser';
$string['seb:manage_seb_showkeyboardlayout'] = 'Змінити налаштування тесту SEB: Показати розкладку клавіатури';
$string['seb:manage_seb_showreloadbutton'] = 'Змінити налаштування тесту SEB: Показати кнопку перезавантаження';
$string['seb:manage_seb_showsebdownloadlink'] = 'Змінити налаштування тесту SEB: Показати посилання для завантаження';
$string['seb:manage_seb_showsebtaskbar'] = 'Змінити налаштування тесту SEB: Показати панель завдань';
$string['seb:manage_seb_showtime'] = 'Змінити налаштування тесту SEB: Показати час';
$string['seb:manage_seb_showwificontrol'] = 'Змінити налаштування тесту SEB: Показати контроль Wi-Fi';
$string['seb:manage_seb_templateid'] = 'Змінити налаштування тесту SEB: виберіть шаблон SEB';
$string['seb:manage_seb_userconfirmquit'] = 'Змінити налаштування тесту SEB: підтвердьте під час виходу';
$string['seb:managetemplates'] = 'Керуйте шаблонами конфігурації SEB';
$string['seb_activateurlfiltering'] = 'Увімкнути фільтрацію URL-адрес';
$string['seb_activateurlfiltering_help'] = 'Якщо ввімкнено, URL-адреси будуть фільтруватися під час завантаження веб-сторінок. Набір фільтрів має бути визначений нижче.';
$string['seb_allowedbrowserexamkeys'] = 'Дозволені ключі для іспиту в браузері';
$string['seb_allowedbrowserexamkeys_help'] = 'У цьому полі ви можете ввести дозволені ключі іспиту веб-переглядача для версій Safe Exam Browser, яким дозволено доступ до цього тесту. Якщо ключі не введені, ключі іспиту в браузері не перевіряються.';
$string['seb_allowreloadinexam'] = 'Увімкнути перезавантаження на іспиті';
$string['seb_allowreloadinexam_help'] = 'Якщо ввімкнено, перезавантаження сторінки дозволено (кнопка перезавантаження на панелі завдань SEB, панелі інструментів браузера, бічне меню повзунка iOS, комбінація клавіш F5/cmd+R). Зауважте, що офлайн-кешування може зламатися, якщо користувач спробує перезавантажити сторінку без підключення до Інтернету.';
$string['seb_allowspellchecking'] = 'Увімкнути перевірку орфографії';
$string['seb_allowspellchecking_help'] = 'Якщо ввімкнено, перевірка орфографії у браузері SEB дозволена.';
$string['seb_allowuserquitseb'] = 'Увімкнути вихід із SEB';
$string['seb_allowuserquitseb_help'] = 'Якщо ввімкнено, користувачі можуть вийти з SEB, натиснувши кнопку «Вийти» на панелі завдань SEB або натиснувши клавіші Ctrl-Q або натиснувши кнопку закриття головного вікна браузера.';
$string['seb_enableaudiocontrol'] = 'Увімкнути елементи керування звуком';
$string['seb_enableaudiocontrol_help'] = 'Якщо ввімкнено, значок керування аудіо відображається на панелі завдань SEB.';
$string['seb_expressionsallowed'] = 'Вирази дозволені';
$string['seb_expressionsallowed_help'] = 'Текстове поле, яке містить дозволені вирази фільтрації для дозволених URL-адрес. Можливе використання символу підстановки \'\\*\'. Приклади виразів: \'example.com\' або \'example.com/stuff/\\*\'. "example.com" відповідає "example.com", "www.example.com" і "www.mail.example.com". \'example.com/stuff/\\*\' відповідає всім запитам до будь-якого субдомену \'example.com\', які мають \'stuff\' як перший сегмент шляху.';
$string['seb_expressionsblocked'] = 'Вирази заблоковані';
$string['seb_expressionsblocked_help'] = 'Текстове поле, яке містить вирази фільтрації для заблокованих URL-адрес. Можливе використання символу підстановки \'\\*\'. Приклади виразів: \'example.com\' або \'example.com/stuff/\\*\'. "example.com" відповідає "example.com", "www.example.com" і "www.mail.example.com". \'example.com/stuff/\\*\' відповідає всім запитам до будь-якого субдомену \'example.com\', які мають \'stuff\' як перший сегмент шляху.';
$string['seb_filterembeddedcontent'] = 'Також фільтруйте вбудований вміст';
$string['seb_filterembeddedcontent_help'] = 'Якщо ввімкнено, вбудовані ресурси також фільтруватимуться за допомогою набору фільтрів.';
$string['seb_help'] = 'Налаштуйте тест для використання браузера Safe Exam Browser.';
$string['seb_linkquitseb'] = 'Показати кнопку Вийти з безпечного браузера іспиту, налаштовану за допомогою цього посилання для виходу';
$string['seb_linkquitseb_help'] = 'У цьому полі ви можете ввести посилання для виходу з SEB. Він використовуватиметься на кнопці "Вийти з безпечного браузера іспитів" на сторінці, яка з\'явиться після подачі іспиту. Натиснувши кнопку або посилання, розміщені там, де ви хочете їх розмістити, ви можете вийти з SEB, не вводячи пароль для виходу. Якщо посилання не введено, кнопка «Вийти з безпечного браузера іспитів» не з’явиться, і посилання для виходу з SEB не встановлено.';
$string['seb_managetemplates'] = 'Вибір шаблонів Безпечного Екзаменаційного Браузера';
$string['seb_muteonstartup'] = 'Вимкнути звук під час запуску';
$string['seb_muteonstartup_help'] = 'Якщо ввімкнено, звук спочатку вимикається під час запуску SEB.';
$string['seb_quitpassword'] = 'Вийти з пароля';
$string['seb_quitpassword_help'] = 'Цей пароль запитується, коли користувачі намагаються вийти з SEB за допомогою кнопки «Вийти», Ctrl-Q або кнопки закриття в головному вікні браузера. Якщо пароль виходу не встановлено, SEB просто запитає «Ви впевнені, що хочете вийти з SEB?».';
$string['seb_regexallowed'] = 'Дозволено регулярний вираз';
$string['seb_regexallowed_help'] = 'Текстове поле, яке містить вирази фільтрації для дозволених URL-адрес у форматі регулярного виразу (Regex).';
$string['seb_regexblocked'] = 'Регулярний вираз заблоковано';
$string['seb_regexblocked_help'] = 'Текстове поле, яке містить вирази фільтрації для заблокованих URL-адрес у форматі регулярного виразу (Regex).';
$string['seb_requiresafeexambrowser'] = 'Вимагає використання Безпечного Екзаменаційного Браузера';
$string['seb_requiresafeexambrowser_help'] = 'Якщо ввімкнено, студенти можуть виконувати тест лише за допомогою веб-переглядача безпечного іспиту.
Доступні варіанти:

* Ні
<br/>Безпечний веб-переглядач іспитів не потрібен для тестування.
* Так – використовуйте існуючий шаблон
<br/>Можна використовувати шаблон для налаштування браузера Safe Exam Browser. Керування шаблонами здійснюється в адміністрації сайту. Ваші ручні налаштування замінюють налаштування в шаблоні.
* Так – налаштувати вручну
<br/>Шаблон для налаштування браузера Safe Exam Browser не використовуватиметься. Ви можете налаштувати браузер Safe Exam Browser вручну.
* Так – завантажте мою власну конфігурацію
<br/>Ви можете завантажити власний файл конфігурації браузера Safe Exam Browser. Усі ручні налаштування та використання шаблонів буде вимкнено.
* Так – використовувати конфігурацію клієнта SEB
<br/>На стороні Moodle немає конфігурацій браузера Safe Exam Browser. Тест можна спробувати за допомогою будь-якої конфігурації браузера Safe Exam Browser.';
$string['seb_showkeyboardlayout'] = 'Показати розкладку клавіатури';
$string['seb_showkeyboardlayout_help'] = 'Якщо ввімкнено, поточна розкладка клавіатури відображається на панелі завдань SEB. Він дозволяє перемикатися на інші розкладки клавіатури, які були включені в операційній системі.';
$string['seb_showreloadbutton'] = 'Показати кнопку перезавантаження';
$string['seb_showreloadbutton_help'] = 'Якщо ввімкнено, кнопка перезавантаження відображається на панелі завдань SEB, що дозволяє перезавантажити поточну веб-сторінку.';
$string['seb_showsebdownloadlink'] = 'Відображати кнопку завантаження Безпечного Екзаменаційного Браузера';
$string['seb_showsebdownloadlink_help'] = 'Якщо ввімкнено, кнопка для завантаження браузера Safe Exam Browser відображатиметься на початковій сторінці тесту.';
$string['seb_showsebtaskbar'] = 'Показати панель завдань SEB';
$string['seb_showsebtaskbar_help'] = 'Якщо ввімкнено, панель завдань з’являється внизу вікна браузера SEB. Панель завдань потрібна для відображення таких елементів, як керування Wi-Fi, кнопка перезавантаження, час і розкладка клавіатури.';
$string['seb_showtime'] = 'Показати час';
$string['seb_showtime_help'] = 'Якщо ввімкнено, поточний час відображається на панелі завдань SEB.';
$string['seb_showwificontrol'] = 'Показати контроль Wi-Fi';
$string['seb_showwificontrol_help'] = 'Якщо ввімкнено, кнопка керування Wi-Fi з’являється на панелі завдань SEB. Кнопка дозволяє користувачам повторно підключатися до мереж Wi-Fi, до яких раніше було підключено.';
$string['seb_templateid'] = 'Налаштування шаблону Безпечного Екзаменаційного Браузера';
$string['seb_templateid_help'] = 'Налаштування вибраного шаблону конфігурації використовуватимуться для конфігурації браузера Safe Exam Browser під час спроби тесту. Ви можете замінити налаштування в шаблоні своїми ручними налаштуваннями.';
$string['seb_use_client'] = 'Так – використовувати конфігурацію клієнта SEB';
$string['seb_use_manually'] = 'Так – налаштувати вручну';
$string['seb_use_template'] = 'Так – використовуйте існуючий шаблон';
$string['seb_use_upload'] = 'Так – завантажте мою власну конфігурацію';
$string['seb_userconfirmquit'] = 'Попросіть користувача підтвердити вихід';
$string['seb_userconfirmquit_help'] = 'Якщо ввімкнено, користувачі повинні підтвердити вихід із SEB, коли буде виявлено посилання для виходу.';
$string['sebdownloadbutton'] = 'Завантажити Безпечний Екзаменаційний Браузер';
$string['sebkeysvalidationfailed'] = 'Помилка перевірки ключів SEB';
$string['seblinkbutton'] = 'Запустити Безпечний Екзаменаційний Браузер';
$string['sebrequired'] = 'Цей тест було налаштовано так, що студенти можуть спробувати його лише за допомогою браузера Safe Exam Browser.';
$string['setting:autoreconfigureseb'] = 'Автоматично налаштувати SEB';
$string['setting:autoreconfigureseb_desc'] = 'Якщо ввімкнено, користувачі, які переходять до тесту за допомогою браузера Safe Exam Browser, будуть автоматично змушені переналаштувати свій браузер Safe Exam Browser.';
$string['setting:displayblocksbeforestart'] = 'Покажіть блоки перед початком тесту';
$string['setting:displayblocksbeforestart_desc'] = 'Якщо ввімкнено, блоки відображатимуться до того, як користувач спробує пройти тест.';
$string['setting:displayblockswhenfinished'] = 'Відобразити блоки після завершення тесту';
$string['setting:displayblockswhenfinished_desc'] = 'Якщо ввімкнено, блоки відображатимуться після того, як користувач завершить спробу тесту.';
$string['setting:downloadlink'] = 'Посилання для завантаження Безпечного Екзаменаційного Браузера';
$string['setting:downloadlink_desc'] = 'URL-адреса для завантаження програми Safe Exam Browser.';
$string['setting:quizpasswordrequired'] = 'Потрібен пароль тесту';
$string['setting:quizpasswordrequired_desc'] = 'Якщо ввімкнено, усі тести, для яких потрібен браузер Safe Exam Browser, мають бути встановлені паролем тесту.';
$string['setting:showhttplink'] = 'Показати посилання http://';
$string['setting:showseblink'] = 'Показати посилання seb://';
$string['setting:showseblinks'] = 'Показати посилання на конфігурацію браузера Safe Exam Browser';
$string['setting:showseblinks_desc'] = 'Чи показувати посилання для користувача для доступу до файлу конфігурації браузера Safe Exam Browser, коли доступ до тесту заборонений. Зауважте, що посилання seb:// можуть працювати не в кожному браузері.';
$string['setting:supportedversions'] = 'Зверніть увагу, що для використання функції ключа конфігурації необхідні такі мінімальні версії клієнта Safe Exam Browser: macOS - 2.1.5pre2, Windows - 3.0, iOS - 2.1.14.';
$string['settingsfrozen'] = 'Налаштування Безпечного Екзаменаційного Браузера більше не можуть бути змінені бо існує одна (або більше) спроба проходження тесту.';
$string['unknown_reason'] = 'Невідома причина';
$string['used'] = 'Використовується';
