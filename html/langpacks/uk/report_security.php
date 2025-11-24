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
 * Strings for component 'report_security', language 'uk', version '4.5'.
 *
 * @package     report_security
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_antivirus_details'] = 'основних';
$string['check_antivirus_error'] = 'Під час останнього {$a->огляду} було виявлено помилки {$a->errors}';
$string['check_antivirus_info'] = 'Наразі жодні антивірусні сканери не ввімкнені';
$string['check_antivirus_logstore_not_supported'] = 'Не вдається перевірити стан антивірусних сканерів через вибраний тип сховища журналів';
$string['check_antivirus_name'] = 'Антивірус';
$string['check_antivirus_ok'] = '{$a->scanners} антивірусні сканери ввімкнено, жодних проблем не виявлено під час останнього {$a->lookback}';
$string['check_configrw_details'] = '<p>Рекомендується змінити дозволи файлу <code>config.php</code> після встановлення, щоб веб-сервер не міг змінити файл. Зауважте, що цей захід значно не покращує безпеку сервера, хоча може уповільнити або обмежити загальні експлойти.</p>';
$string['check_configrw_name'] = 'config.php може перезаписуватися';
$string['check_configrw_ok'] = 'config.php не може бути зміненим PHP-скриптом.';
$string['check_configrw_warning'] = 'PHP-скрипт може змінювати config.php.';
$string['check_cookiesecure_details'] = '<p> Якщо зв’язок https увімкнено, рекомендується увімкнути надсилання безпечних файлів cookie. Ви повинні мати постійне переспрямування з http на https і в ідеалі також обслуговувати заголовки HSTS.
</p>';
$string['check_cookiesecure_error'] = 'Будь ласка, включіть захищені куки';
$string['check_cookiesecure_http'] = 'Ви повинні ввімкнути https, щоб використовувати безпечні файли cookie';
$string['check_cookiesecure_name'] = 'Захищені куки';
$string['check_cookiesecure_ok'] = 'Захищені куки включено.';
$string['check_crawlers_details'] = '<p>Параметр "Відкритий для Google" дозволяє пошуковим машинам працювати на ваших курсах як Гість. Це немає ніякого сенсу, якщо до курсу закритий гостьовий доступ.</p>';
$string['check_crawlers_error'] = 'Доступ пошуковим машинам дозволено, а доступ гостям заборонено.';
$string['check_crawlers_info'] = 'Пошукові машини можуть входити як гості.';
$string['check_crawlers_name'] = 'Відкритий для Google';
$string['check_crawlers_ok'] = 'Доступ для пошукових машин заборонено.';
$string['check_defaultuserrole_details'] = '<p>Усім користувачам, які ввійшли в систему, надаються можливості стандартної ролі користувача. Будь ласка, переконайтеся, що в цій ролі не дозволено жодних ризикованих можливостей.</p>
<p>Єдиним підтримуваним застарілим типом ролі користувача за умовчанням є <em>Автентифікований користувач</em>. Можливість перегляду курсу не має бути ввімкнена.</p>
<p>Перевірте, чи ввімкнено параметр схвалення запиту на автоматичне видалення даних (tool_dataprivacy | automaticdatadeletionapproval). Користувачі можуть надіслати запит на видалення, що може призвести до видалення великих обсягів даних.</p>';
$string['check_defaultuserrole_error'] = 'Виявлено некоректне визначення типової ролі "{$a}"!';
$string['check_defaultuserrole_name'] = 'Типова роль для усіх користувачів';
$string['check_defaultuserrole_notset'] = 'Типова роль не встановлена';
$string['check_defaultuserrole_ok'] = 'Визначення типової ролі для усіх користувачів коректне.';
$string['check_dirindex_info'] = 'Індекс каталогу не слід вмикати';
$string['check_displayerrors_details'] = '<p>Включення РНР параметра <code>display_errors</code> не рекомендується для працюючих сатів, оскільки повідомлення про помилки можуть видати важливу інформацію про ваш сервер.</p>';
$string['check_displayerrors_error'] = 'РНР параметр виводу помилок включений. Рекомендується його виключити.';
$string['check_displayerrors_name'] = 'Виведення РНР помилок';
$string['check_displayerrors_ok'] = 'Виведення РНР помилок відключено.';
$string['check_dotfiles_info'] = 'Усі файли, що починаються з крапок, крім /.well-known/*, не повинні бути загальнодоступними';
$string['check_emailchangeconfirmation_details'] = '<p>Рекомендується включити крок підтвердження при зміні користувачем своєї адреси електронної пошти. Якщо це відключено, то спамери можуть використати сервер для розсилання спаму.</p><p>Поле ел.пошти може бути також заблоковане від модулів аутентифікації, ця можливість не розглядається. </p>';
$string['check_emailchangeconfirmation_error'] = 'Користувачі можуть вводити будь-які адреси ел.пошти.';
$string['check_emailchangeconfirmation_info'] = 'Користувачі можуть ввести адреси електронної пошти  тільки дозволених доменів.';
$string['check_emailchangeconfirmation_name'] = 'Підтвердження зміни ел.пошти';
$string['check_emailchangeconfirmation_ok'] = 'Підтвердження зміни адреси ел.пошти в обліковому записі.';
$string['check_embed_details'] = '<p>Необмежене використання EMBED та OBJECT тег дуже небезпечне - будь-який зареєстрований користувач може запустити XSS атаку проти інших користувачів сервера. Цей параметр повинен бути відключений в робочих серверах.</p>';
$string['check_embed_error'] = 'Необмежене використання EMBED та OBJECT тег дозволено - це дуже небезпечно для більшості серверів.';
$string['check_embed_name'] = 'Дозвіл EMBED та OBJECT';
$string['check_embed_ok'] = 'Необмежене використання EMBED та OBJECT тег не дозволено.';
$string['check_frontpagerole_details'] = '<p> Роль домашнього сайту за замовчуванням надається всім автентифікованим користувачам для діяльності домашнього сайту. Будь ласка, переконайтеся, що для цієї ролі не допускаються ризиковані здібності. </p><p>Для цієї мети рекомендується створити спеціальну роль і не використовувати роль застарілого типу.</p>';
$string['check_frontpagerole_error'] = 'Виявлено неправильно визначену домашню роль сайту "{$a}"!';
$string['check_frontpagerole_name'] = 'Роль головної сторінки';
$string['check_frontpagerole_notset'] = 'Роль головної сторінки не визначена.';
$string['check_frontpagerole_ok'] = 'Роль головної сторінки визначена.';
$string['check_guestrole_details'] = '<p>Роль Гостя використовується для гостей, користувачів, які не увійшли, та тимчасового доступу на курс. Впевніться, що немає ризиків в дозволах цієї ролі.</p><p>Єдиний підтримуваний спадковий тип для ролі гостя - <em>Гість</em>.';
$string['check_guestrole_error'] = 'Виявлено некоректне визначення гостьової ролі "{$a}"!';
$string['check_guestrole_name'] = 'Роль гостя';
$string['check_guestrole_notset'] = 'Роль гостя не визначена.';
$string['check_guestrole_ok'] = 'Роль гостя визначена.';
$string['check_nodemodules_details'] = '<p>Каталог <code>{$a->path}</code> містить модулі Node.js та їх залежності, які зазвичай встановлюються за допомогою утиліти NPM. Ці модулі можуть знадобитися для локальної розробки Moodle, наприклад, для використання фреймворку grunt. Вони не потрібні для запуску сайту Moodle у виробництві, і вони можуть містити потенційно небезпечний код, який піддає ваш сайт віддаленим атакам.<p> </p>Настійно рекомендується видалити каталог, якщо сайт доступний через загальнодоступну URL-адресу, або принаймні заборонити доступ до веб-сайту у конфігурації веб-сервера.</p>';
$string['check_nodemodules_info'] = 'Каталог node_modules не повинен бути присутнім на загальнодоступних сайтах.';
$string['check_nodemodules_name'] = 'Каталог модулів Node.js';
$string['check_openprofiles_details'] = '<p>Відкриті профілі користувачів можуть бути використані спамерами. Рекомендується включити або <code>Примусити реєстрацію для огляду профілів</code>, або <code>Примусити користувачів до входження</code>';
$string['check_openprofiles_error'] = 'Будь-хто може переглядати профілі користувачів без реєстрації.';
$string['check_openprofiles_name'] = 'Відкриті профілі користувачів';
$string['check_openprofiles_ok'] = 'Вимагається входження для перегляду профіля.';
$string['check_passwordpolicy_details'] = '<p>Рекомендується встановити політику паролів, прості паролі найпростіший спосіб зловмисникам потрапити на сайт. Не ставте вимогу в занадто довгому паролі, бо, як результат, користувачі будуть його забувати та занадто часто поновлювати.</p>';
$string['check_passwordpolicy_error'] = 'Політика паролів не включена.';
$string['check_passwordpolicy_name'] = 'Політика паролів';
$string['check_passwordpolicy_ok'] = 'Політика паролів включена.';
$string['check_preventexecpath_details'] = '<p>Дозволяючи шляхи для виконання за допомогою графічного інтерфейсу адміністратора, є вектором для підвищення привілеїв. Це має бути примусово в config.php:</p><p><code>$CFG->preventexecpath = true;</code></p>';
$string['check_preventexecpath_name'] = 'Шляхи виконання';
$string['check_preventexecpath_ok'] = 'Шляхи виконання можна встановити лише в config.php.';
$string['check_preventexecpath_warning'] = 'Шляхи виконання можна встановити в графічному інтерфейсі адміністратора.';
$string['check_publicpaths_403'] = '(Повернуто 403, в ідеалі має бути 404)';
$string['check_publicpaths_generic'] = '{$a} файли не повинні бути загальнодоступними';
$string['check_publicpaths_name'] = 'Перевірте всі публічні/приватні шляхи';
$string['check_publicpaths_ok'] = 'Усі внутрішні шляхи не є загальнодоступними';
$string['check_publicpaths_warning'] = 'Деякі внутрішні шляхи загальнодоступні';
$string['check_riskadmin_detailsok'] = '<p>Будь ласка, перевірте список адміністраторів:<br />{$a}</p>';
$string['check_riskadmin_detailswarning'] = '<p>Будь ласка, перевірте список адміністраторів:<br />{$a->admins}</p><p>Рекомендується призначати роль адміністратора тільки в контексті. Наступні користувачі мають непідтримувані ролі адміністратора:<br />{$a->unsupported}</p>';
$string['check_riskadmin_name'] = 'Адміністратори';
$string['check_riskadmin_ok'] = 'Знайдено адміністраторів сервера - {$a}.';
$string['check_riskadmin_unassign'] = '<a href="{$a->url}">$a->fullname ({$a->email}) перегляд призначення ролі</a>';
$string['check_riskadmin_warning'] = 'Знайдено {$a->admincount} адміністраторів сервера та {$a->unsupcount} непідтримуваних призначень адміністраторів.';
$string['check_riskbackup_details_overriddenroles'] = '<p>Ці активності перекривають надані користувачам можливості резервування даних користувачів. Будь ласка, впевніться, що це право потрібне.</p> {$a}';
$string['check_riskbackup_details_systemroles'] = '<p>Поточна система ролей дозволяє користувачам включати інформацію про інших користувачів до резервних копій. Подумайте, чи в цьому дійсно є необхідність.</p> {$a}';
$string['check_riskbackup_details_users'] = '<p>Через загальні права ролей або їх локальні зміни деякі користувачі мають право робити резервні копії з включенням в них приватної інформації зареєстрованих на курсі користувачів.Переконайтеся, що вони є (а) Надійні та (б) захищені сильним паролем:</p> {$a}';
$string['check_riskbackup_detailsok'] = 'Немає ролей з явним дозволом резервного копіювання даних користувачів. Однак зауважте, що адміністратори з можливістю "doanything" все ще може бути в змозі зробити це.';
$string['check_riskbackup_editoverride'] = '<a href="{$a->url}">{$a->name} в {$a->contextname}</a>';
$string['check_riskbackup_editrole'] = '<a href="{$a->url}">{$a->name}</a>';
$string['check_riskbackup_name'] = 'Резервне копіювання даних користувачів';
$string['check_riskbackup_ok'] = 'Немає ролей з явним дозволом резервного копіювання даних користувачів';
$string['check_riskbackup_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) в {$a->contextname}</a>';
$string['check_riskbackup_warning'] = 'Знайдено {$a->rolecount} роль(ей), {$a->overridecount} змін(а) та {$a->usercount} користувач(ів) із здатністю резервування даних користувачів.';
$string['check_riskxss_details'] = '<p>RISK_XSS означає всі небезпечні можливостей, що можуть використовувати тільки довірені користувачі.</p><p>Будь ласка, перевірте наступний список користувачів та впевніться, що довіряєте їм на цьому сервері:<br />{$a}</p>';
$string['check_riskxss_name'] = 'XSS довірені користувачі';
$string['check_riskxss_warning'] = 'RISK_XSS - знайдено {$a} користувачів, що є довіреними.';
$string['check_unsecuredataroot_details'] = '<p>Каталог даних для moodle повинен бути недоступний через web. найкраще розміщувати його в недосяжному каталозі поза публічним web каталогом.</p><p>Якщо ви перенесете каталог в нове місце, вам потрібно також обновити параметр <code>$CFG->dataroot</code> в <code>config.php</code>.</p>';
$string['check_unsecuredataroot_error'] = 'Ваш Каталог даних для moodle знаходиться в неправильному місці та доступний напряму через web.';
$string['check_unsecuredataroot_name'] = 'Ненадійний каталог даних';
$string['check_unsecuredataroot_ok'] = 'Каталог даних для moodle не повинен бути доступним через web.';
$string['check_unsecuredataroot_warning'] = 'Ваш Каталог даних для moodle знаходиться в неправильному місці та може бути доступним напряму через web.';
$string['check_vendordir_details'] = '<p>Каталог <code>{$a->path}</code> містить різні сторонні бібліотеки та їх залежності, які зазвичай встановлюються PHP Composer. Ці бібліотеки можуть знадобитися для локальної розробки Moodle, наприклад, для встановлення фреймворку PHPUnit. Вони не потрібні для запуску сайту Moodle у виробництві, і вони можуть містити потенційно небезпечний код, який піддає ваш сайт віддаленим атакам. </p><p>Настійно рекомендується видалити каталог, якщо сайт доступний через загальнодоступну URL-адресу, або принаймні заборонити доступ до веб-сайту у конфігурації веб-сервера.</p>';
$string['check_vendordir_info'] = 'Каталог постачальників не повинен бути присутнім на загальнодоступних сайтах.';
$string['check_vendordir_name'] = 'Каталог постачальників';
$string['check_webcron_details'] = '<p>Запуск cron з веб-оглядача може показати превілейовану інформацію анонімним користувачам. Рекомендується запускати cron лише через командний рядок або встановити пароль для віддаленого доступу.</p>';
$string['check_webcron_name'] = 'Веб cron';
$string['check_webcron_ok'] = 'Анонімні користувачі не мають доступу до cron';
$string['check_webcron_warning'] = 'Анонімні користувачі мають доступ до cron.';
$string['configuration'] = 'Налаштування';
$string['description'] = 'Опис';
$string['details'] = 'Деталі';
$string['eventreportviewed'] = 'Переглянуто звіт про перевірку безпеки';
$string['issue'] = 'Проблеми';
$string['pluginname'] = 'Перевірки безпеки';
$string['privacy:metadata'] = 'Плагін Огляд безпеки не зберігає жодних особистих даних.';
$string['security:view'] = 'Переглядати звіт безпеки';
$string['timewarning'] = 'Обробіток даних може бути достатньо тривалим, будь-ласка, трохи зачекайте...';
