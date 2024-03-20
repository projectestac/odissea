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
 * Strings for component 'mnet', language 'uk', version '4.1'.
 *
 * @package     mnet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['RPC_HTTPS_SELF_SIGNED'] = 'HTTPS (самопідписаний)';
$string['RPC_HTTPS_VERIFIED'] = 'HTTPS (підписаний)';
$string['RPC_HTTP_PLAINTEXT'] = 'HTTP нешифрований';
$string['RPC_HTTP_SELF_SIGNED'] = 'HTTP (самопідписаний)';
$string['RPC_HTTP_VERIFIED'] = 'HTTP (підписаний)';
$string['aboutyourhost'] = 'Про ваш сервер';
$string['accesslevel'] = 'Рівень доступу';
$string['addhost'] = 'Додати хост';
$string['addnewhost'] = 'Додати новий хост';
$string['addtoacl'] = 'Додати до контролю доступу';
$string['allhosts'] = 'Всі хости';
$string['allhosts_no_options'] = 'Немає опції при перегляді кількох хостів';
$string['allow'] = 'Дозволено';
$string['applicationtype'] = 'Тип програми';
$string['authfail_nosessionexists'] = 'Помилка авторизації: мережева сесія не створена.';
$string['authfail_sessiontimedout'] = 'Помилка авторизації: закінчився час мережевої сесії.';
$string['authfail_usermismatch'] = 'Помилка авторизації: неправильний користувач.';
$string['authmnetdisabled'] = 'Аутентифікація Мережі Мудл <strong>відключена</strong>.';
$string['badcert'] = 'Недійсний сертифікат.';
$string['certdetails'] = 'Докладніше про сертифікат';
$string['configmnet'] = 'Мережа Мудл дозволяє з’єднання цього сервера з іншими серверами та сервісами.';
$string['couldnotgetcert'] = 'Не знайдено сертифікату для <br />{$a}. <br />Можливо хост не працює або неправильно налаштований.';
$string['couldnotmatchcert'] = 'Це не відповідає сертифікату, який в зараз опубліковано веб-сервером.';
$string['courses'] = 'курси';
$string['courseson'] = 'курси на';
$string['current_transport'] = 'Поточний транспорт';
$string['currentkey'] = 'Поточний публічний ключ';
$string['databaseerror'] = 'Не вдається записати деталі до БД.';
$string['deleteaserver'] = 'Видалення сервера';
$string['deletedhostinfo'] = 'Цей хост було видалено. Якщо ви хочете його повернути, переключіть статус видалення в \'Ні\'.';
$string['deletedhosts'] = 'Видалені хости: {$a}';
$string['deletehost'] = 'Видалити хост';
$string['deletekeycheck'] = 'Ви абсолютно впевнені, що хочете видалити цей ключ?';
$string['deleteoutoftime'] = 'Ваш 60-секундне вікно для видалення цього ключа закінчилося. Будь ласка, почніть знову.';
$string['deleteuserrecord'] = 'SSO ACL: видалення запису користувача \'{$a->user}\' з {$a->host}.';
$string['deletewrongkeyvalue'] = 'Сталася помилка. Якщо ви не намагалися видалити SSL ключ сервера, то можливо, що ви були предметом шкідливих атак. Ніяких дій не було зроблено.';
$string['deny'] = 'Заборонено';
$string['description'] = 'Опис';
$string['duplicate_usernames'] = 'Не вдалося створити індекс для колонок "mnethostid" та "username" у вашій таблиці користувачів. <br /> Це може статися, якщо у вашій таблиці користувачів є <a href="{$a}" target="_blank"> дублікатів імен користувачів</a>.<br /> Ваше оновлення все-одно буде закінчено. Клацніть на посиланні вище та прочитайте в новому вікні інструкції з правки цієї помилки. Ви зможете спробувати це в кінці оновлення.';
$string['enabled_for_all'] = '(Сервіс було дозволено для всіх хостів)';
$string['enterausername'] = 'Введіть псевдоім’я або список псевдо розділених комами.';
$string['error7020'] = 'Ця помилка зазвичай виникає, якщо віддалений сайт створив для вас запис із неправильним wwwroot, наприклад, https://yoursite.com замість https://www.yoursite.com. Будь ласка, зв’яжіться з адміністратором віддаленого сайту зі своїм wwwroot (як зазначено в config.php) і попросіть його оновити запис для вашого хоста.';
$string['error7022'] = 'Повідомлення, яке ви надіслали на віддалений сайт, було зашифровано належним чином, але не підписано. Це дуже несподівано; вам, ймовірно, слід повідомити про помилку, якщо це станеться (надати якомога більше інформації про версії програми, про яку йдеться, тощо).';
$string['error7023'] = 'Віддалений сайт спробував розшифрувати ваше повідомлення всіма доступними ключами для вашого сайту.  Але нічого не вийшло. Ви можете виправити цю проблему повторним введенням. Але навряд чи вийде, якщо ви не зв’язувалися з віддаленим сайтом протягом кількох місяців.';
$string['error7024'] = 'Ви надсилаєте незашифроване повідомлення на віддалений сайт, але віддалений сайт не приймає незашифроване повідомлення з вашого сайту. Це дуже несподівано; вам, ймовірно, слід повідомити про помилку, якщо це станеться (надати якомога більше інформації про версії програми, про яку йдеться, тощо).';
$string['error7026'] = 'Ключ, яким було підписане ваше повідомлення, відрізняється від ключа, який має віддалених хост для зв’язку з вами. Крім того, всі спроби віддаленого хоста отримати ваш ключ виявилися невдалими. Будь ласка, передайте повторно ключ на віддалений хост та повторіть спробу зв’язку.';
$string['error709'] = 'Віддалений сайт не зміг отримати від вас SSL ключ.';
$string['eventaccesscontrolcreated'] = 'Створено контроль доступу';
$string['eventaccesscontrolupdated'] = 'Оновлено контроль доступу';
$string['expired'] = 'Термін цього ключа закінчено';
$string['expires'] = 'Діє до';
$string['expireyourkey'] = 'Видалити цей ключ';
$string['expireyourkeyexplain'] = 'Moodle автоматично заміняє ваш ключ кожні 28 днів (типово), але ви можете вказати перегенерацію вручну в будь-який час.  Це буде корисно тільки, якщо Ви впевнені, що цей ключ був скомпрометований. Новий ключ буде створено відразу.<br />Видалення цього ключа зробить неможливим для інших програм зв\'язок з вами, поки ви вручну не зв\'яжетеся з адміністраторами і не надасте їм новий ключ.';
$string['exportfields'] = 'Поля для експорту';
$string['failedaclwrite'] = 'Помилка запису до списку контролю доступу Мережі Moodle користувача \'{$a}\'.';
$string['findlogin'] = 'Пошук входження';
$string['forbidden-function'] = 'Функція не дозволена для RPC.';
$string['forbidden-transport'] = 'Транспортний метод, який ви намагаєтеся використовувати, не підтримується.';
$string['forcesavechanges'] = 'Примусово зберегти зміни';
$string['helpnetworksettings'] = 'Налаштування Мережі Мудл';
$string['hidelocal'] = 'Сховати локальних користувачів';
$string['hideremote'] = 'Сховати віддалених користувачів';
$string['host'] = 'хост';
$string['hostcoursenotfound'] = 'Хост або курс не знайдено';
$string['hostdeleted'] = 'Хост видалено';
$string['hostexists'] = 'Для хоста з таким іменем уже існує запис. (Можливо, його було видалено.) <a href="{$a}">Редагувати запис</a>';
$string['hostlist'] = 'Список мережевих хостів';
$string['hostname'] = 'Ім\'я хоста';
$string['hostnamehelp'] = 'Повне доменне ім\'я віддаленого хоста, наприклад, www.example.com';
$string['hostnotconfiguredforsso'] = 'Сервер не налаштовано для віддаленого входження.';
$string['hostsettings'] = 'Установки хоста';
$string['http_self_signed_help'] = 'Дозвіл з\'єднання з використанням самозавіреного DIY SSL в PHP на віддаленому комп\'ютері через HTTP.';
$string['http_verified_help'] = 'Дозвіл з\'єднання за допомогою SSL сертифікату в PHP на віддаленому комп\'ютері через  (без HTTPS).';
$string['https_self_signed_help'] = 'Дозвіл з\'єднання за допомогою SSL сертифікату на віддаленому хості.';
$string['https_verified_help'] = 'Дозвіл з\'єднання з використанням самозавіреного DIY SSL сертифікату на віддаленому хості.';
$string['id'] = 'Код';
$string['idhelp'] = 'Це значення присвоюється автоматично і не може бути змінено.';
$string['importfields'] = 'Поля для імпорту';
$string['inspect'] = 'Перевірити';
$string['installnosuchfunction'] = 'Помилка кодування! Щось трапилося при спробі встановлення mnet xmlrpc функції ({$a->method}) у файлі ({$a->file}). Незрозуміла помилка!';
$string['installnosuchmethod'] = 'Помилка кодування! Щось трапилося при спробі встановлення mnet xmlrpc методу ({$a->method}) в класі ({$a->class}). Помилка Незрозуміла помилка!';
$string['installreflectionclasserror'] = 'Помилка кодування! MNet виявив помилку у методі \'{$a->method}\' в класі \'{$a->class}\'.  Основне повідомлення помилки: \'{$a->error}\'';
$string['installreflectionfunctionerror'] = 'Помилка кодування! MNet виявив помилку у функції \'{$a->method}\'  у файлі \'{$a->file}\'. Основне повідомлення помилки: \'{$a->error}\'';
$string['invalidaccessparam'] = 'Неправильний параметр доступу.';
$string['invalidactionparam'] = 'Неправильний параметр дії.';
$string['invalidhost'] = 'Ви повинні надати дійсний хост ідентифікатор';
$string['invalidpubkey'] = 'Ключ не є коректним SSL ключем.';
$string['invalidurl'] = 'Неправильний параметр URL';
$string['ipaddress'] = 'IP-адреса';
$string['is_in_range'] = 'IP-адреса <code>{$a}</ код> представляє дійсний довірений хост.';
$string['ispublished'] = '{$a} дозволив цей сервіс для вас.';
$string['issubscribed'] = '{$a} підписаний до цього сервісу на вашому хості';
$string['keydeleted'] = 'Ваш ключ було успішно видалено і замінено.';
$string['keydeletedcancelled'] = 'Ключ не змінено.';
$string['keymismatch'] = 'Відкритий ключ, який ви маєте для цього вузла відрізняється від відкритого ключа, який є в момент публікації. В даний час опубліковано ключ:';
$string['last_connect_time'] = 'Час останнього з\'єднання';
$string['last_connect_time_help'] = 'Час, коли ви востаннє підключалися до цього хоста.';
$string['last_transport_help'] = 'Транспорт, який ви використовували для останнього підключення до цього хоста.';
$string['leavedefault'] = 'Використовувати типові налаштування';
$string['listservices'] = 'Список сервісів';
$string['loginlinkmnetuser'] = '<br />Якщо ви віддалений користувач Мудл Мережі і можете <a href="{$a}">підтвердити адресу вашої ел.пошти тут</a>, ви будете переправлені на вашу сторінку входу.<br />';
$string['logs'] = 'системні події';
$string['managemnetpeers'] = 'Управляти потоками';
$string['method'] = 'Метод';
$string['methodhelp'] = 'Метод допомога для {$a}';
$string['methodsavailableonhost'] = 'Методи, доступні на {$a}';
$string['methodsavailableonhostinservice'] = 'Методи, доступні для {$a->service} на {$a->host}';
$string['methodsignature'] = 'Метод підпису для {$a}';
$string['mnet'] = 'Мережа Moodle';
$string['mnet_concatenate_strings'] = 'Об’єднати (до) 3 рядки та повернути результат';
$string['mnet_session_prohibited'] = 'Користувачі з вашого домашнього сервера в даний час не допускаються до {$a}.';
$string['mnetdisabled'] = 'Мудл Мережа <strong>відключена</strong>.';
$string['mnetidprovider'] = 'Сервер Moodle Мережі';
$string['mnetidproviderdesc'] = 'Ви можете використовувати цю можливість для отримання посилання, за якою ви можете увійти, якщо Ви можете вказати правильну адресу електронної пошти, яка відповідає  імені користувача, під яким ви намагалися увійти.';
$string['mnetidprovidermsg'] = 'Ви повинні мати можливість увійти у вашого провайдера {$a}';
$string['mnetidprovidernotfound'] = 'Вибачте, але ніякої додаткової інформації не вдалося знайти.';
$string['mnetpeers'] = 'Вузли';
$string['mnetservices'] = 'Сервіси';
$string['mnetsettings'] = 'Налаштування Мережі Moodle';
$string['moodle_home_help'] = 'Шлях до домашньої сторінці додатка MNet на віддаленому комп\'ютері, наприклад, /moodle/.';
$string['name'] = 'Назва';
$string['net'] = 'Мережа';
$string['networksettings'] = 'Налаштування мережі';
$string['never'] = 'Ніколи';
$string['noaclentries'] = 'Немає записів у списку контролю доступу SSO';
$string['noaddressforhost'] = 'На жаль, хост з назвою {$a} не вдається знайти!';
$string['nocurl'] = 'Не встановлено бібліотеку PHP cURL';
$string['nolocaluser'] = 'Для віддаленого користувача не створено локальних записів і не може бути створено, оскільки цей хост не створює користувачів автоматично. Будь ласка, зверніться до адміністратора.';
$string['nomodifyacl'] = 'Ви не маєте прав для зміни списку контролю доступу Мережі Moodle';
$string['nonmatchingcert'] = 'Сертифікат: <br /><em>{$a->subject}</em><br /> не відповідає сертифікату отриманому з хоста:<br /><em>{$a->host}</em>.';
$string['nopubkey'] = 'Виникла проблема отримання відкритого ключа. <br /> Можливо на хсті не дозволена Мережа Moodle ключ застарів.';
$string['nosite'] = 'Не вдається знайти курс рівня сайту';
$string['nosuchfile'] = 'Файлу (функції) {$a} не існує.';
$string['nosuchfunction'] = 'Не вдалося знайти функцію або функція заборонена для RPC.';
$string['nosuchmodule'] = 'Функція була неправильно адресована та не може бути знайдена. Будь ласка, викоритовуйте mod/modulename/lib/functionname формат.';
$string['nosuchpublickey'] = 'Неможливо отримати відкритий ключ для перевірки підпису.';
$string['nosuchservice'] = 'RPC сервіс не запущено на цьому хості.';
$string['nosuchtransport'] = 'Немає транспорту з таким ідентифікатором.';
$string['notBASE64'] = 'Цей рядок не у форматі кодування base64. Це не може бути коректним ключем.';
$string['notPEM'] = 'Цей ключ не у форматі PEM. Це не працюватиме.';
$string['not_in_range'] = 'ІР-адреса <code>{$a}</code> не є у списку довірених хостів.';
$string['notenoughidpinfo'] = 'Ваш особистий провайдер не дає нам достатньо інформації, щоб створити або оновити обліковий локальний запис. Вибачте!';
$string['notinxmlrpcserver'] = 'Спроба звернення до MNet віддаленого клієнта, а не під час виконання сервера XMLRPC';
$string['notmoodleapplication'] = 'УВАГА: Це не Moodle програма, так що деякі з методів контролю можуть не працювати належним чином.';
$string['notpermittedtojump'] = 'Ви не маєте відповідних повноважень для початку віддаленої сесії з цього Moodle сервера.';
$string['notpermittedtojumpas'] = 'Ви не можете почати віддалену сесію поки ви в системі як інший користувач.';
$string['notpermittedtoland'] = 'У вас немає прав для користування віддаленою сесією.';
$string['off'] = 'Виключено';
$string['on'] = 'Включено';
$string['options'] = 'Параметри';
$string['peerprofilefielddesc'] = 'Тут ви можете визначити глобальні налаштування для відправки та імпорту полів профіля при створенні нових користувачів';
$string['permittedtransports'] = 'Дозволені передачі';
$string['phperror'] = 'Внутрішня помилка РНР перешкодила виконанню вашого запиту';
$string['position'] = 'Позиція';
$string['postrequired'] = 'Функції видалення потрібен POST запит.';
$string['privacy:metadata'] = 'Плагін MNet не зберігає жодних персональних даних.';
$string['profileexportfields'] = 'Поля для надсилання';
$string['profilefielddesc'] = 'Тут ви можете налаштувати список полів облікового запису, які надсилаються та отримуються через мережу Moodle при створенні  та оновленні користувача. Ви можете також перевизначити їх для кожного MNet вузла індивідуально. Зверніть увагу, що вказані поля повинні бути завжди відправлені і не можуть бути пропущеними: {$a}';
$string['profilefields'] = 'Поля профілю';
$string['profileimportfields'] = 'Поля для імпорту';
$string['promiscuous'] = 'Випадково';
$string['publickey'] = 'Публічний ключ';
$string['publickey_help'] = 'Публічний ключ автоматично отримано з віддаленого сервера.';
$string['publickeyrequired'] = 'Ви повинні надати публічний ключ.';
$string['publish'] = 'Публічний';
$string['reallydeleteserver'] = 'Ви впевнені, що хочете видалити сервер?';
$string['receivedwarnings'] = 'Наступні попередження були отримані';
$string['recordnoexists'] = 'Запису не існує.';
$string['reenableserver'] = 'Ні - виберіть цей варіант для повторного включення цього сервера.';
$string['registerallhosts'] = 'Реєстрація всіх хостів (змішаний режим)';
$string['registerallhostsexplain'] = 'Ви можете вибрати реєструвати всі хости, які спробують до вас приєднатися, автоматично. Це означає, що в списку хостів будуть з\'являтися записи для будь-якого сайту Мережі Moodle, який підключається до вас і просить ваш відкритий ключ. <br />Ви маєте можливість нижче налаштувати сервіс "Всі хости" і включити там деякі сервіси, ви в змозі забезпечити послуги для будь-якого віддаленого серверу без розбору.';
$string['registerhostsoff'] = 'Реєстрація всіх хостів наразі <b>виключена</b>';
$string['registerhostson'] = 'Реєстрація всіх хостів наразі <b>включена</b>';
$string['remotecourses'] = 'Віддалені курси';
$string['remotehost'] = 'Віддалений хост';
$string['remotehosts'] = 'Віддалені хости';
$string['remoteuser'] = 'Віддалений {$a->remotetype} користувач';
$string['remoteuserinfo'] = 'Профіль отримано з <a href="{$a->remoteurl}">{$a->remotename}</a>';
$string['requiresopenssl'] = 'Мережа вимагає розширення OpenSSL';
$string['restore'] = 'Відновити';
$string['returnvalue'] = 'Повернути значення';
$string['reviewhostdetails'] = 'Переглянути деталі';
$string['reviewhostservices'] = 'Переглянути сервіси';
$string['selectaccesslevel'] = 'Виберіть рівень доступу зі списку';
$string['selectahost'] = 'Будь ласка, виберіть віддалений хост.';
$string['service'] = 'Назва сервісу';
$string['serviceid'] = 'ID сервісу';
$string['servicesavailableonhost'] = 'Сервіси доступні на  {$a}';
$string['serviceswepublish'] = 'Сервіси, які ми надаємо {$a}.';
$string['serviceswesubscribeto'] = 'Сервіси {$a}, на які ми підписані.';
$string['settings'] = 'Налаштування';
$string['showlocal'] = 'Показати локальних користувачів';
$string['showremote'] = 'Показати віддалених користувачів';
$string['ssl_acl_allow'] = 'SSO СКД: Дозволено користувачу {$a->user} з {$a->host}';
$string['ssl_acl_deny'] = 'SSO СКД: Заборонено користувачу {$a->user} з {$a->host}';
$string['sslverification'] = 'Перевірка SSL';
$string['sslverification_help'] = 'Ця опція дозволяє вам налаштувати рівень безпеки під час під’єднання до вузла через HTTPS.

* Відсутня: жоден рівень безпеки не використовується
* Перевірити тільки хост: перевірка SSL сертифікату домену
* Перевірити хост та вузол (рекомендується): перевірка SSL сертифікату домену та емітента';
$string['ssoaccesscontrol'] = 'Управління доступом SSO';
$string['ssoacldescr'] = 'Використовуйте цю сторінку для надання/заборони доступу окремим користувачам з віддалених вузлів мережі Moodle. Це доречно, коли ви надаєте SSO сервіс для віддалених користувачів. Для управління можливістю ваших <em>локальних</em> користувачів переходити на інші вузли мережі Moodle використовуйте налаштування прав ролі, щоб надати їм можливість <em>mnetlogintoremote</em>.';
$string['ssoaclneeds'] = 'Щоб ця функція запрацювала, вам потрібно включити Мережу Moodle та активувати модуль аутентифікації Мережі Moodle';
$string['strict'] = 'Точно';
$string['subscribe'] = 'Підписка';
$string['system'] = 'Система';
$string['testclient'] = 'Тестовий клієнт Мережі Moodle';
$string['testtrustedhosts'] = 'Тестування адреси';
$string['testtrustedhostsexplain'] = 'Введіть ІР-адресу для перевірки дійсності хоста.';
$string['theypublish'] = 'Вони розташовані';
$string['theysubscribe'] = 'Вони підписані';
$string['transport_help'] = 'Ці опції взаємні, тобто ви можете вимагати віддалений вузол використовувати сертифікат SSL, тільки якщо і ваш сервер має підписаний сертифікат SSL.';
$string['trustedhosts'] = 'Вузли XML-RPC';
$string['trustedhostsexplain'] = '<p>Механізм довірених хостів дозволяє певним машинам виконувати виклики через XML-RPC до будь-якої частини Moodle API. Це доступно для скриптів управління поведінкою Moodle і вам потрібно бути обережними з при їх включенні. Якщо ви сумніваєтеся, залиште їх включеними.</p><p><strong>Це не потрібно для будь-яких стандартних можливостей Мережі Moodle!</strong>Включайте їх, тільки якщо ви впевнені в тому, що робите.</p><p>Для включення їх, введіть список ІР-адрес або мереж по одному на рядок. Наприклад:</p> Ваша локальна адреса:<br />127.0.0.1<br />Ваш локальний хост (з мережевим блоками):<br />127.0.0.1/32<br />Тільки хост з ІР-адресою 192.168.0.7:<br />192.168.0.7/32<br />Будь-які хости з ІР-адресами між 192.168.0.1 та 192.168.0.255:<br />192.168.0.0/24<br />Будь-які хости:<br />192.168.0.0/0<br />Очевидно, що останній приклад <strong>НЕ</strong> рекомендується.';
$string['turnitoff'] = 'Увімкнути';
$string['turniton'] = 'Вимкнути';
$string['type'] = 'Тип';
$string['unknown'] = 'Невідомо';
$string['unknownerror'] = 'Виникла невідома помилка в процесі обміну інформацією.';
$string['usercannotchangepassword'] = 'Ви не можете змінювати пароль тут, оскільки ви є зовнішнім користувачем відносно цього сайту.';
$string['userchangepasswordlink'] = '<br /> Ви можете змінити ваш пароль на вашому сайті: <a href="$a->wwwroot/login/change_password.php">$a->description</a>';
$string['usernotfullysetup'] = 'Реєстрація користувача є неповною. Вам потрібно перейти <a href="{$a}">назад до свого профілю</a>  та перевірити правильність реєстраційних даних. В деяких випадках вам знадобиться вийти та знову зайти для застосування змін.';
$string['usersareonline'] = 'Увага: {$a} користувачів з цього сервера зараз знаходяться на вашому сайті.';
$string['validated_by'] = 'Це перевірено мережею: <code>{$a}</code>';
$string['verifyhostandpeer'] = 'Перевірити хост та вузол';
$string['verifyhostonly'] = 'Перевірити тільки хост';
$string['verifysignature-error'] = 'Помилка перевірки підпису';
$string['verifysignature-invalid'] = 'Помилка перевірки підпису. Може з’являтися, якщо цей продукт не був підписаний вами.';
$string['version'] = 'Версія';
$string['warning'] = 'Увага';
$string['wrong-ip'] = 'Ваша ІР-адреса не відповідає адресам, які зберігаються у нас.';
$string['xmlrpc-missing'] = 'У вас повинно бути встановлено XML-RPC для РНР, щоб використовувати цей функціонал.';
$string['yourhost'] = 'Ваш хост';
$string['yourpeers'] = 'Ваші вузли';
