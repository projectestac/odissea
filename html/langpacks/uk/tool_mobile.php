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
 * Strings for component 'tool_mobile', language 'uk', version '4.1'.
 *
 * @package     tool_mobile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adodbdebugwarning'] = 'Налагодження ADOdb увімкнено. Вона повинна бути відключена в параметрах зовнішньої бази даних для автентифікації або зовнішніх додатків для входу до бази даних.';
$string['androidappid'] = 'Унікальний ідентифікатор додатка для Android';
$string['androidappid_desc'] = 'Цей параметр може бути залишений за умовчанням, якщо у вас немає спеціального додатка для Android.';
$string['apppolicy'] = 'URL-адреса політики додатків';
$string['apppolicy_help'] = 'URL-адреса політики щодо користувачів додатків, яка вказана на сторінці «Про програму» в додатку. Якщо поле залишити порожнім, замість цього буде використана URL-адреса політики веб-сайту.';
$string['apprequired'] = 'Ця функція доступна лише за умови доступу до мобільного або настільного додатка Moodle.';
$string['autologinkeygenerationlockout'] = 'Auto-login key generation is blocked. You need to wait {$a} minutes between requests.';
$string['autologinmintimebetweenreq'] = 'Мінімальний час між запитами автоматичного входу';
$string['autologinmintimebetweenreq_desc'] = 'Мінімальний час між запитами автоматичного входу з мобільного додатка. Якщо користувачів програми часто просять ввести свої облікові дані під час перегляду вмісту, вбудованого із сайту, встановіть менше значення.';
$string['autologinnotallowedtoadmins'] = 'Автоматичний вхід не дозволяється для адміністраторів сайту.';
$string['cachedef_plugininfo'] = 'Це зберігає список плагінів із мобільними доповненнями';
$string['cachedef_subscriptiondata'] = 'Тут зберігається інформація про підписку на додаток Moodle.';
$string['clickheretolaunchtheapp'] = 'Натисніть тут, якщо додаток не відкривається автоматично.';
$string['configmobilecssurl'] = 'Файл каскадної таблиці стилів (CSS) для для налаштування вашого мобільного інтерфейсу.';
$string['customlangstrings'] = 'Користувацькі мовні ряди';
$string['customlangstrings_desc'] = 'Тут можна налаштувати слова та фрази, які відображаються в додатку. Введіть кожен рядок спеціальної мови в новому рядку з форматом: ідентифікатор рядка, рядок спеціальної мови та код мови, розділені символами вертикальної лінії. Наприклад:
<pre>
mm.user.student|Ученик|en
mm.user.student|Aprendiz|es
</pre>
Повний список ідентифікаторів рядків див. у документації.';
$string['custommenuitems'] = 'Спеціальні пункти меню';
$string['custommenuitems_desc'] = 'Додаткові елементи можна додати до головного меню програми, вказавши їх тут. Введіть кожен пункт спеціального меню в новому рядку з форматом: текст елемента, URL-адреса посилання, метод відкриття посилання та код мови (необов’язково, для відображення елемента лише для користувачів зазначеної мови), розділених символами вертикальної лінії.

Методи відкриття посилання: додаток (для посилання на дію, яку підтримує програма), inappbrowser (для відкриття посилання у браузері, не виходячи з програми), браузер (для відкриття посилання в браузері пристрою за замовчуванням поза програмою) і вбудований (для відображення посилання в iframe на новій сторінці програми).

Якщо в елементах відсутній переклад для певної мови, вони використовуватимуть інші мови як запасні, якщо до коду мови не буде додано «_only».

Наприклад:
<pre>
Довідка програми|https://someurl.xyz/help|inappbrowser
Мої оцінки|https://someurl.xyz/local/mygrades/index.php|embedded|uk
Mis calificaciones|https://someurl.xyz/local/mygrades/index.php|embedded|es
Ви побачите це лише англійською мовою|https://someurl.xyz/english|browser|en_only
</pre>';
$string['darkmode'] = 'Темний режим';
$string['disabledfeatures'] = 'Функції відключено';
$string['disabledfeatures_desc'] = 'Виберіть тут функції, які потрібно вимкнути в мобільному додатку для свого сайту. Зауважте, що деякі перераховані тут функції вже можуть бути вимкнені за допомогою інших налаштувань сайту. Щоб побачити зміни, вам доведеться вийти та знову ввійти в програму.';
$string['displayerrorswarning'] = 'Відображення налагоджувальних повідомлень (debugdisplay) увімкнено. Його слід вимкнути.';
$string['downloadcourse'] = 'Завантажити курс';
$string['downloadcourses'] = 'Завантажити курси';
$string['enablesmartappbanners'] = 'Увімкнути банери додатків';
$string['enablesmartappbanners_desc'] = 'Якщо ввімкнено, банер, що рекламує мобільний додаток, відображатиметься під час доступу до сайту за допомогою мобільного браузера.';
$string['filetypeexclusionlist'] = 'Список виключень типів файлів';
$string['filetypeexclusionlist_desc'] = 'Виберіть усі типи файлів, які не можна використовувати на мобільному пристрої. Такі файли будуть перераховані в курсі, а потім, якщо користувач спробує їх відкрити, з’явиться попередження про те, що тип файлу не призначений для використання на мобільному пристрої. Потім користувач може скасувати або проігнорувати попередження та все одно відкрити файл.';
$string['filetypeexclusionlistplaceholder'] = 'Список виключень типів файлів для мобільних пристроїв';
$string['forcedurlscheme'] = 'Якщо ви хочете дозволити відкривати у вікні веб-переглядача лише власну фірмову програму, вкажіть тут схему її URL-адрес. Якщо ви хочете дозволити лише офіційну програму, встановіть значення за замовчуванням. Залиште поле пустим, якщо ви хочете дозволити будь-яку програму.';
$string['forcedurlscheme_key'] = 'Схема URL';
$string['forcelogout'] = 'Примусово вийти';
$string['forcelogout_desc'] = 'Якщо ввімкнено, користувачі завжди повністю виходять із системи, навіть коли змінюють обліковий запис. Потім вони повинні повторно ввести свій пароль наступного разу, коли захочуть отримати доступ до сайту.';
$string['getmoodleonyourmobile'] = 'Завантажте мобільний додаток';
$string['h5poffline'] = 'Переглядайте вміст H5P в автономному режимі';
$string['httpsrequired'] = 'Потрібен HTTPS';
$string['insecurealgorithmwarning'] = 'Здається, що сертифікат HTTPS використовує небезпечний алгоритм підписання (SHA-1). Спробуйте оновити сертифікат.';
$string['invalidcertificatechainwarning'] = 'Схоже, ланцюжок сертифікатів недійсний. Цей сертифікат може працювати для браузера, але не для мобільного додатка.';
$string['invalidcertificateexpiredatewarning'] = 'Схоже, термін дії сертифіката HTTPS для сайту закінчився.';
$string['invalidcertificatestartdatewarning'] = 'Схоже, що сертифікат HTTPS для сайту ще не дійсний (з датою початку в майбутньому).';
$string['invalidprivatetoken'] = 'Недійсний приватний токен. Токен не повинен бути порожнім або переданий через параметр GET.';
$string['invaliduserquotawarning'] = 'The user quota (userquota) is set to an invalid number. It should be set to a valid number (an integer value) in Site security settings.';
$string['iosappid'] = 'унікальний ідентифікатор програми iOS';
$string['iosappid_desc'] = 'Цей параметр може залишатися за замовчуванням, якщо у вас немає спеціального додатка iOS.';
$string['launchviasiteinbrowser'] = 'Запуск через сайт у системному браузері';
$string['loginintheapp'] = 'Через додаток';
$string['logininthebrowser'] = 'Через вікно браузера (для плагінів SSO)';
$string['loginintheembeddedbrowser'] = 'Через вбудований браузер (для плагінів SSO)';
$string['logoutconfirmation'] = 'Ви впевнені, що хочете вийти з мобільного додатка на своїх мобільних пристроях? Після виходу з системи вам потрібно буде повторно ввести своє ім’я користувача та пароль у мобільному додатку на всіх пристроях, на яких у вас встановлено програму.';
$string['mainmenu'] = 'Головне меню';
$string['managefiletypes'] = 'Керуйте типами файлів';
$string['minimumversion'] = 'Якщо вказана версія програми (3.8.0 або вище), користувачам, які використовують старішу версію програми, буде запропоновано оновити програму, перш ніж отримати доступ до сайту.';
$string['minimumversion_key'] = 'Необхідна мінімальна версія програми';
$string['mobileapp'] = 'Мобільний додаток';
$string['mobileappconnected'] = 'Мобільний додаток підключено';
$string['mobileappearance'] = 'Мобільний зовнішній вигляд';
$string['mobileappenabled'] = 'Цей сайт має доступ до мобільних додатків. <br /> <a href="{$a}"> Завантажте мобільний додаток </a>.';
$string['mobileappsubscription'] = 'Підписка на додаток Moodle';
$string['mobileauthentication'] = 'Мобільна автентифікація';
$string['mobilecssurl'] = 'CSS';
$string['mobilefeatures'] = 'Мобільні функції';
$string['mobilenotificationsdisabledwarning'] = 'Мобільні сповіщення не ввімкнено. Їх потрібно ввімкнути в налаштуваннях сповіщень.';
$string['mobilesettings'] = 'Налаштування мобільних пристроїв';
$string['moodleappsportalfeatureswarning'] = 'Please note that some features may be restricted depending on your Moodle app subscription. For details, visit the <a href="{$a}" target="_blank">Moodle Apps Portal</a>.';
$string['notifications'] = 'Сповіщення';
$string['notificationsactivedevices'] = 'Активні пристрої';
$string['notificationscurrentactivedevices'] = 'Пристрої, які отримують сповіщення цього місяця';
$string['notificationsignorednotifications'] = 'Повідомлення не надіслано';
$string['notificationslimitreached'] = 'Перевищено місячний ліміт пристроїв активних користувачів. Сповіщення для деяких користувачів не надсилатимуться. Рекомендується оновити план програми на <a href="{$a}" target="_blank">порталі програм Moodle</a>.';
$string['notificationsmissingwarning'] = 'Не вдалося отримати статистику сповіщень програми Moodle. Швидше за все, це пов’язано з тим, що на сайті ще не ввімкнено мобільні сповіщення. Ви можете ввімкнути їх у Адміністрування сайту / Повідомлення / Мобільний.';
$string['notificationsnewdevices'] = 'Нові пристрої';
$string['notificationsseemore'] = 'Примітка. Статистика використання програми Moodle не розраховується в реальному часі. Щоб отримати доступ до більш детальної статистики, включаючи дані за попередні місяці, увійдіть на портал Moodle Apps.';
$string['notificationssentnotifications'] = 'Сповіщення надіслано';
$string['oauth2identityproviders'] = 'Постачальники ідентифікації OAuth 2';
$string['offlineuse'] = 'Використання в автономному режимі';
$string['openusingembeddedbrowser'] = 'Відкрити за допомогою вбудованого браузера';
$string['pluginname'] = 'Інструменти додатку Moodle';
$string['pluginnotenabledorconfigured'] = 'Плагін не ввімкнено або не налаштовано.';
$string['privacy:metadata:core_userkey'] = 'Ключі користувача, які використовуються для створення ключа автоматичного входу для поточного користувача.';
$string['privacy:metadata:preference:tool_mobile_autologin_request_last'] = 'Дата останнього запиту ключа автоматичного входу. Між кожним запитом потрібно 6 хвилин.';
$string['qrcodedisabled'] = 'Доступ через QR-код вимкнено';
$string['qrcodeformobileappaccess'] = 'QR код для доступу з мобільного додатку';
$string['qrcodeformobileapploginabout'] = 'Відскануйте QR-код за допомогою мобільної програми, і ви автоматично ввійдете в систему. Термін дії QR-коду закінчиться через {$a}.';
$string['qrcodeformobileappurlabout'] = 'Відскануйте QR-код за допомогою мобільного додатка, щоб заповнити URL-адресу сайту у своїй програмі.';
$string['qrcodetype'] = 'Доступ до QR-коду';
$string['qrcodetype_desc'] = 'Користувачам мобільних додатків можна надати QR-код для сканування. Це можна використовувати для заповнення URL-адреси сайту або для того, щоб сайт захищений за допомогою HTTPS, щоб автоматично ввійти користувача без необхідності вводити ім’я користувача та пароль.';
$string['qrcodetypelogin'] = 'QR-код з автоматичним входом';
$string['qrcodetypeurl'] = 'QR-код з URL-адресою сайту';
$string['qrkeyttl'] = 'Тривалість ключа аутентифікації QR';
$string['qrkeyttl_desc'] = 'Час, протягом якого діє QR-код для автоматичного входу.';
$string['qrsameipcheck'] = 'QR-автентифікація та сама перевірка IP-адреси';
$string['qrsameipcheck_desc'] = 'Чи повинні користувачі використовувати ту саму мережу для створення та сканування QR-коду для входу. Вимкніть його, лише якщо користувачі повідомляють про проблеми з QR-логіном.';
$string['qrsiteadminsnotallowed'] = 'З питань безпеки вхід за допомогою QR коду заборонено для адміністраторів, або якщо Ви зайшли під іншим користувачем.';
$string['readingthisemailgettheapp'] = 'Ви читаєте це в електронному листі? <a href="{$a}">Завантажте програму для мобільних пристроїв і отримуйте сповіщення на свій мобільний пристрій</a>.';
$string['remoteaddons'] = 'Віддалені доповнення';
$string['responsivemainmenuitems'] = 'Чуйні пункти меню';
$string['scanqrcode'] = 'Скануйте QR-код';
$string['selfsignedoruntrustedcertificatewarning'] = 'Схоже, що сертифікат HTTPS є самопідписаним або ненадійним. Мобільний додаток працюватиме лише з надійними сайтами. Для діагностики проблеми скористайтеся будь-яким онлайн-перевіркою SSL. Якщо він вказує, що ваш сертифікат в порядку, ви можете проігнорувати це попередження.';
$string['setuplink'] = 'Сторінка завантаження програми';
$string['setuplink_desc'] = 'URL-адреса сторінки з варіантами завантаження мобільної програми з App Store та Google Play. Посилання на сторінку завантаження програми відображається в нижньому колонтитулі сторінки та в профілі користувача. Залиште порожнім, щоб не відображати посилання.';
$string['smartappbanners'] = 'Банери додатків';
$string['subscription'] = 'Підписка';
$string['subscriptioncreated'] = 'Дата початку';
$string['subscriptionerrorrequest'] = 'Під час спроби отримати інформацію про вашу підписку на програму Moodle сталася неочікувана помилка.';
$string['subscriptionexpiration'] = 'Термін придатності';
$string['subscriptionfeaturenotapplied'] = 'Цю функцію налаштовано на вашому сайті, але вона не включена в план програми Moodle. Таким чином, налаштування не матиме жодного ефекту.';
$string['subscriptionfeatures'] = 'Особливості підписки';
$string['subscriptionlimitsurpassed'] = 'Перевищено ліміт підписки';
$string['subscriptionregister'] = 'Щоб отримати докладнішу інформацію про різні плани програм і отримати доступ до статистики використання програми Moodle, відвідайте <a href="{$a}" target="_blank">портал програм Moodle</a>.';
$string['subscriptionsseemore'] = 'Примітка. Відображена інформація не оновлюється в режимі реального часу. Можливо, вам доведеться вийти та увійти знову, щоб побачити оновлення. Щоб отримати інформацію про оновлення плану програми, увійдіть на <a href="{$a}" target="_blank">портал програм Moodle</a>.';
$string['switchaccount'] = 'Змінити обліковий запис';
$string['typeoflogin'] = 'Тип логіну';
$string['typeoflogin_desc'] = 'Якщо сайт використовує метод автентифікації SSO, виберіть у вікні браузера або через вбудований браузер. Вбудований браузер забезпечує кращу роботу користувача, хоча він не працює з усіма плагінами SSO.';
$string['viewqrcode'] = 'Переглянути QR-код';
