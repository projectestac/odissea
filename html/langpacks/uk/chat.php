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
 * Strings for component 'chat', language 'uk', version '4.4'.
 *
 * @package     chat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'Незабаром розпочнеться сесія чату';
$string['ajax'] = 'Версія з використанням AJAX';
$string['autoscroll'] = 'Автопрокручування';
$string['beep'] = 'сигнал';
$string['bubble'] = 'Булька';
$string['cantlogin'] = 'Не вдалося зайти до чату!';
$string['chat:addinstance'] = 'Додавати новий чат';
$string['chat:chat'] = 'Вести розмови в чаті';
$string['chat:deletelog'] = 'Видаляти записи про події чату';
$string['chat:exportparticipatedsession'] = 'Експортувати чат, в якому ви брали участь';
$string['chat:exportsession'] = 'Експортувати будь-який чат';
$string['chat:readlog'] = 'Перегляд журналів чату';
$string['chat:talk'] = 'Спілкуватися в чаті';
$string['chat:view'] = 'Переглянути активність у чаті';
$string['chatintro'] = 'Вступний текст';
$string['chatname'] = 'Назва цього чату';
$string['chatreport'] = 'Чати';
$string['chattime'] = 'Наступний час чату';
$string['compact'] = 'Компактно';
$string['composemessage'] = 'Написати повідомлення';
$string['configmethod'] = 'Метод чату AJAX забезпечує інтерфейс чату на основі AJAX, який регулярно зв\'язується з сервером для оновлень. Звичайний метод чату передбачає, що клієнти регулярно звертаються до сервера для отримання оновлень. Він не вимагає налаштування і працює скрізь, але може створити велике навантаження на сервер, якщо багато користувачів спілкуються в чаті. Використання демона сервера вимагає доступу оболонки до Unix, але це призводить до швидкого масштабованого середовища чату.';
$string['confignormalupdatemode'] = 'Оновлення чату зазвичай обслуговуються ефективно, використовуючи <em>Keep-Alive</em> (Утримувати Активність) особливість HTTP 1.1, але це все ще достатньо важко для сервера. Більш просунутий метод - використовувати <em>Stream</em> (Потік) стратегію, щоб забезпечити оновлення для користувачів. Використання <em>Stream</em> масштабується набагато краще (на зразок методу серверного демона), але може не підтримуватися вашим сервером.';
$string['configoldping'] = 'Який максимальний час (у секундах) може пройти, перш ніж ми виявимо, що користувач від\'єднався (протягом цього часу він може бути просто неактивним)? Це просто верхня межа, зазвичай же від\'єднання виявляються дуже швидко. Малий час може створити більше навантаження на ваш сервер. Якщо ви використовуєте нормальний метод, <strong>ніколи</strong> не встановлюйте це значення менш, ніж 2 * chat_refresh_room.';
$string['configrefreshroom'] = 'Як часто чат повинен оновлюватися? (у секундах). При малому значенні чат може оновлюватися швидше, але це створить додаткове навантаження на ваш сервер, і при великій кількості людей в чаті це може навіть уповільнити його роботу. Якщо ви використовуєте оновлення методом <em>Stream</em> (Потік), то можете вибрати більш високу частоту оновлення -- спробуйте 2.';
$string['configrefreshuserlist'] = 'Як часто повинен оновлюватися список користувачів? (у секундах)';
$string['configserverhost'] = 'Ім\'я комп\'ютера де запущено демон сервера';
$string['configserverip'] = 'Номер ІР-адреси, який відповідає вказаному вище комп\'ютеру';
$string['configservermax'] = 'Максимально дозволена кількість клієнтів';
$string['configserverport'] = 'Порт, який використовується на сервері для демона';
$string['coursetheme'] = 'Тема курсу';
$string['crontask'] = 'Фонова обробка для модуля чату';
$string['currentchats'] = 'Активні чати';
$string['currentusers'] = 'Поточні користувачі';
$string['deletesession'] = 'Видалити цю сесію';
$string['deletesessionsure'] = 'Ви впевнені, що хочете видалити цю сесію?';
$string['donotusechattime'] = 'Не показувати час при роботі чату';
$string['enterchat'] = 'Увійдіть у чат';
$string['entermessage'] = 'Введіть ваше повідомлення';
$string['errornousers'] = 'Немає жодного користувача!';
$string['eventmessagesent'] = 'Надіслано повідомлення';
$string['eventsessionsviewed'] = 'Переглянуто сесію';
$string['explaingeneralconfig'] = 'Ці налаштування <strong>завжди</strong> включені';
$string['explainmethoddaemon'] = 'Ці налаштування діють, лише якщо в якості методу чату вибрано «Демон сервера чату».';
$string['explainmethodnormal'] = 'Ці налаштування діють, лише якщо як метод чату вибрано Звичайний.';
$string['generalconfig'] = 'Головні налаштування';
$string['idle'] = 'Бездіяльність';
$string['indicator:cognitivedepth'] = 'Чат: пізнавальний аспект';
$string['indicator:cognitivedepth_help'] = 'Цей показник базується на глибині пізнання, досягнутої студентом у чаті.';
$string['indicator:cognitivedepthdef'] = 'Чат пізнавальний';
$string['indicator:cognitivedepthdef_help'] = 'Учасник досяг цього відсотка когнітивної залученості, запропонованої діяльністю чату, протягом цього інтервалу аналізу (Рівні = Немає перегляду, Перегляд, Надіслати, Переглянути відгук, Коментувати відгук)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Чат: соціальний аспект';
$string['indicator:socialbreadth_help'] = 'Цей показник заснований на соціальному розширенні, досягнутого студентом у чаті.';
$string['indicator:socialbreadthdef'] = 'Чат соціальний';
$string['indicator:socialbreadthdef_help'] = 'Учасник досяг цього відсотка соціальної залученості, запропонованої діяльністю чату протягом цього інтервалу аналізу (Рівні = Без участі, Учасник сам, Учасник з іншими)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['inputarea'] = 'Зона вводу';
$string['invalidid'] = 'Не вдається знайти цей чат!';
$string['list_all_sessions'] = 'Список всіх сесій.';
$string['list_complete_sessions'] = 'Список тільки закінчених сесій.';
$string['listing_all_sessions'] = 'Перелік всіх сесій.';
$string['messagebeepseveryone'] = '{$a} відправив сигнал всім!';
$string['messagebeepsyou'] = '{$a} відправив Вам сигнал!';
$string['messageenter'] = '{$a} з\'явився в чаті';
$string['messageexit'] = '{$a} пішов із чату';
$string['messages'] = 'Повідомлення';
$string['messageyoubeep'] = 'Ви відправили сигнал {$a}';
$string['method'] = 'Метод чату';
$string['methodajax'] = 'Ajax';
$string['methoddaemon'] = 'Чат сервер';
$string['methodnormal'] = 'Нормальний';
$string['modulename'] = 'Чат';
$string['modulename_help'] = '<p>Діяльність <b>Чат</b> забезпечує учасникам обмін текстовими повідомленнями в реальному часі. На відміну від форуму, де кожен учасник може надсилати та читати повідомлення у зручний для себе час, у чаті відбувається миттєвий обмін повідомленнями, всі учасники чату мають зібратись за своїми комп\'ютерами одночасно. Про проведення чату, як правило, повідомляється заздалегідь.</p>
<p><b>Чат</b> може бути одноразовим заходом або може бути запланованим і повторюватися в один і той же час щодня або щотижня. Чат-сесії зберігаються і можуть бути доступні для перегляду всім або лише деяким користувачам.</p>
<p><b>Чати</b> особливо корисні, коли група не може зустрітися очно, наприклад, у таких випадках:</p>
<ul>
  <li>Регулярні зустрічі студентів, що беруть участь в онлайн-курсах, з метою обміну досвідом з іншими</li>
  <li>Студенти збираються разом, щоб обговорити свої досягнення один з одним та з викладачем</li>
  <li>Сесія запитань та відповідей із запрошеним доповідачем</li>
  <li>Щоб допомогти студентам підготуватися до випробувань, де викладачі або інші студенти зможуть продемонструвати приблизні питання</li>
</ul>';
$string['modulename_link'] = 'mod/chat/view';
$string['modulenameplural'] = 'Чати';
$string['neverdeletemessages'] = 'Ніколи не видаляти повідомлення';
$string['nextchattime'] = 'Наступний час чату:';
$string['no_complete_sessions_found'] = 'Чат не знайдено';
$string['nochat'] = 'Не знайдено жодного чату';
$string['noguests'] = 'Чат закритий для гостей';
$string['nomessages'] = 'Ще немає повідомлень';
$string['nopermissiontoseethechatlog'] = 'Ви не маєте прав для перегляду подій в чаті.';
$string['normalkeepalive'] = 'Утримувати Активність';
$string['normalstream'] = 'Потік';
$string['noscheduledsession'] = 'Немає запланованої сесії';
$string['notallowenter'] = 'Ви не маєте дозволу входити в чат.';
$string['notlogged'] = 'Ви не ввійшли!';
$string['oldping'] = 'Пауза відключення';
$string['page-mod-chat-x'] = 'Будь яка сторінка модуля Чат';
$string['pastchats'] = 'Остання чат-сесія';
$string['pastsessions'] = 'Минулі сесії';
$string['pluginadministration'] = 'Керування чатом';
$string['pluginname'] = 'Чат';
$string['privacy:metadata:chat_messages_current'] = 'Поточний сеанс чату. Ці дані є тимчасовими і видаляються після видалення сеансу чату';
$string['privacy:metadata:chat_users'] = 'Відстежує, які користувачі перебувають у яких чатах';
$string['privacy:metadata:chat_users:firstping'] = 'Час першого доступу до чату';
$string['privacy:metadata:chat_users:ip'] = 'IP користувача';
$string['privacy:metadata:chat_users:lang'] = 'Мова користувача';
$string['privacy:metadata:chat_users:lastmessageping'] = 'Час останнього повідомлення в цій кімнаті чату';
$string['privacy:metadata:chat_users:lastping'] = 'Час останнього доступу до кімнати чату';
$string['privacy:metadata:chat_users:userid'] = 'Ідентифікатор користувача';
$string['privacy:metadata:chat_users:version'] = 'Як користувач отримав доступ до чату (sockets/basic/ajax/header_js)';
$string['privacy:metadata:messages'] = 'Запис повідомлень, надісланих під час сеансу чату';
$string['privacy:metadata:messages:issystem'] = 'Чи є повідомлення системою';
$string['privacy:metadata:messages:message'] = 'Повідомлення';
$string['privacy:metadata:messages:timestamp'] = 'Час відправлення повідомлення.';
$string['privacy:metadata:messages:userid'] = 'Ідентифікатор користувача автора повідомлення';
$string['refreshroom'] = 'Оновити кімнату';
$string['refreshuserlist'] = 'Оновити список';
$string['removemessages'] = 'Видалити всі повідомлення';
$string['repeatdaily'] = 'У цей же час щодня';
$string['repeatnone'] = 'Без повторів - публікувати тільки вказаний час';
$string['repeattimes'] = 'Повторювати сесії';
$string['repeatweekly'] = 'У цей же час щотижня';
$string['saidto'] = 'сказав до';
$string['savemessages'] = 'Зберігати минулі сесії';
$string['search:activity'] = 'Чат - інформація про діяльність';
$string['seesession'] = 'Подивіться цю сесію';
$string['send'] = 'Відіслати';
$string['sending'] = 'Відсилання';
$string['serverhost'] = 'Ім\'я серверу';
$string['serverip'] = 'ІР серверу';
$string['servermax'] = 'Максимально користувачів';
$string['serverport'] = 'Порт серверу';
$string['sessions'] = 'Чат-сесії';
$string['sessionstartsin'] = 'Наступний сеанс чату розпочнеться {$a} з цього моменту.';
$string['strftimemessage'] = '%H:%M:%S';
$string['studentseereports'] = 'Кожен може переглядати минулі сесії';
$string['studentseereports_help'] = 'Якщо втановлено ’Ні’, то тільки користувачі з правом mod/chat:readlog можуть бачити події в чаті';
$string['talk'] = 'Розмова';
$string['updatemethod'] = 'Метод оновлення';
$string['updaterate'] = 'Частота оновлення даних:';
$string['userlist'] = 'Список користувачів';
$string['usingchat'] = 'Використання чату';
$string['usingchat_help'] = 'Чат модуль містить кілька функцій, які роблять чат трохи краще.

* Смайли - Будь-який із смайликів (емоційок), які можна ввести в іншому місці в Moodle, можуть також бути набрані тут, наприклад :-)
* Посилання - адреси веб-сайтів будуть автоматично перетворені в посилання
* Емоції - ви можете почати рядок з "/me" або ":" для емоції, наприклад, якщо ваше ім\'я Кім і ви надрукуєте ":laughs!"або "/me laughs!", тоді всі побачать "Кім сміється! "
* Звукові сигнали - Ви можете відправити звук для інших учасників, натиснувши на "сигнал" поруч з його ім\'ям. Корисне використання звукового сигналу відразу для всіх людей в чаті через "сигнал усім".
* HTML - Якщо ви знаєте код HTML, ви можете використовувати його в тексті, щоб, наприклад, вставити зображення, звук або різні кольорові тексти';
$string['viewreport'] = 'Минулі сесії';
