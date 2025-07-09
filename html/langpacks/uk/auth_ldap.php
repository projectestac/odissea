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
 * Strings for component 'auth_ldap', language 'uk', version '4.4'.
 *
 * @package     auth_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_ldap_ad_create_req'] = 'Не вдається створити новий обліковий запис в Active Directory. Переконайтеся, що ви маєте все необхідне для цієї роботи. (з\'єднання з LDAP, bind-користувач має відповідні права, тощо)';
$string['auth_ldap_attrcreators'] = 'Список груп або контекстів, яким дозволено створювати атрибути. Список груп розділяйте знаком \';\'. Зазвичай це буде мати подібний виглдяд: \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_attrcreators_key'] = 'Атрибут творців';
$string['auth_ldap_auth_user_create_key'] = 'Створення користувачів зовні';
$string['auth_ldap_bind_dn'] = 'Якщо Ви хочете за допомогою під\'єднаного користувача знайти інших користувачів, зазначте це тут. Наприклад, \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_dn_key'] = 'Головне ім\'я';
$string['auth_ldap_bind_pw'] = 'Пароль для під\'єднаного користувача.';
$string['auth_ldap_bind_pw_key'] = 'Пароль';
$string['auth_ldap_bind_settings'] = 'Bind налаштування';
$string['auth_ldap_changepasswordurl_key'] = 'URL для зміни пароля';
$string['auth_ldap_contexts'] = 'Список контекстів користувачів . Відокремте різні контексти \';\'. Наприклад: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_contexts_key'] = 'Контекст';
$string['auth_ldap_create_context'] = 'Якщо Ви дозволили реєстрування користувачів при підтвердженні поштою, визначте контекст, у який будуть вводитися користувачі. Цей контекст повинен відрізнятися від інших, щоб запобігти проблемам безпеки. Немає необхідності додавати, назва контексту до ldap_context-змінних, система буде шукати користувачів цього контексту автоматично.';
$string['auth_ldap_create_context_key'] = 'Контекст для нових користувачів';
$string['auth_ldap_create_error'] = 'Помилка створення користувача в LDAP.';
$string['auth_ldap_expiration_desc'] = 'Виберіть "{$a->no}", щоб вимкнути перевірку терміну дії пароля, або "{$a->ldapserver}", щоб прочитати термін дії пароля безпосередньо з сервера LDAP.';
$string['auth_ldap_expiration_key'] = 'Термін дії';
$string['auth_ldap_expiration_warning_desc'] = 'Кількість днів до видачі попередження про закінчення терміну дії пароля.';
$string['auth_ldap_expiration_warning_key'] = 'Попередження про закінчення терміну дії';
$string['auth_ldap_expireattr_desc'] = 'Необов’язково: замінює атрибут LDAP, який зберігає час дії пароля.';
$string['auth_ldap_expireattr_key'] = 'Атрибут закінчення терміну дії';
$string['auth_ldap_graceattr_desc'] = 'Необов’язково: замінює атрибут пільгового входу';
$string['auth_ldap_gracelogin_key'] = 'Атрибути реєстрації із застарілим паролем';
$string['auth_ldap_gracelogins_desc'] = 'Увімкнути підтримку пільгового входу LDAP. Після закінчення терміну дії пароля користувач може ввійти в систему, доки пільговий вхід не стане 0. Увімкнення цього параметра відображає повідомлення про пільговий вхід, якщо термін дії пароля минув.';
$string['auth_ldap_gracelogins_key'] = 'Реєстрації із застарілим паролем';
$string['auth_ldap_groupecreators'] = 'Список груп або контекстів, яким дозволено створювати групи. Список груп розділяйте знаком \';\'. Зазвичай це буде мати подібний виглдяд: \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_groupecreators_key'] = 'Група творців';
$string['auth_ldap_host_url'] = 'Вкажіть хост LDAP у формі URL-адреси, наприклад \'ldap://ldap.myorg.com/\' або \'ldaps://ldap.myorg.com/\'. Розділіть кілька серверів за допомогою \';\' щоб отримати підтримку відмовлення.';
$string['auth_ldap_host_url_key'] = 'URL Хоста';
$string['auth_ldap_ldap_encoding'] = 'Кодування, яке використовується сервером LDAP, швидше за все, utf-8. Якщо вибрано LDAP версії 2, Active Directory використовує налаштоване кодування, наприклад cp1252 або cp1250.';
$string['auth_ldap_ldap_encoding_key'] = 'Кодування LDAP';
$string['auth_ldap_login_settings'] = 'Установки входження';
$string['auth_ldap_memberattribute'] = 'Визначте атрибут користувача, за яким він є приналежним до групи. Звичайно - \'member\'';
$string['auth_ldap_memberattribute_isdn'] = 'Замінює обробку значень атрибутів члена';
$string['auth_ldap_memberattribute_isdn_key'] = 'Атрибут члена використовує dn';
$string['auth_ldap_memberattribute_key'] = 'Атрибути членства';
$string['auth_ldap_no_mbstring'] = 'Вам потрібне розширення mbstring для створення користувачів у Active Directory.';
$string['auth_ldap_noconnect'] = 'LDAP-модуль не може з\'єднатися з сервером: {$a}';
$string['auth_ldap_noconnect_all'] = 'LDAP-модуль не може з\'єднатися з жодним із серверів: {$a}';
$string['auth_ldap_noextension'] = 'Модуль PHP LDAP, схоже, відсутній. Будь ласка, переконайтеся, що його встановлено та ввімкнено, якщо ви хочете використовувати цей плагін аутентифікації.';
$string['auth_ldap_objectclass'] = 'Необов’язково: замінює об’єктний клас, який використовується для іменування/пошуку користувачів за ldap_user_type. Зазвичай вам не потрібно це змінювати.';
$string['auth_ldap_objectclass_key'] = 'Об’єктний клас';
$string['auth_ldap_opt_deref'] = 'Визначає, як обробляються псевдоніми під час пошуку. Виберіть одне з наступних значень: "Ні " (LDAP_DEREF_NEVER) або "Так " (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_opt_deref_key'] = 'Різні псевдоніми';
$string['auth_ldap_passtype'] = 'Визначте формат нових або змінених паролів на сервері LDAP.';
$string['auth_ldap_passtype_key'] = 'Формат пароля';
$string['auth_ldap_passwdexpire_settings'] = 'Налаштування терміну дії пароля LDAP';
$string['auth_ldap_preventpassindb'] = 'Вибирають Так, щоб перешкодити збереженню паролів в Moodle  БД.';
$string['auth_ldap_preventpassindb_key'] = 'Заборонити кешування паролів';
$string['auth_ldap_rolecontext'] = '{$a->localname} контекст';
$string['auth_ldap_rolecontext_help'] = 'Контекст LDAP, який використовується для вибору для зіставлення <i>{$a->localname}</i>. Розділіть кілька груп за допомогою \';\'. Зазвичай щось на кшталт "cn={$a->shortname},ou=first-ou-with-role-groups,o=myorg; cn={$a->shortname},ou=second-ou-with -role-groups,o=myorg".';
$string['auth_ldap_search_sub'] = 'Пошук користувачів по субконтексту.';
$string['auth_ldap_search_sub_key'] = 'Пошук по субконтексту';
$string['auth_ldap_server_settings'] = 'Параметри налаштування серверу LDAP';
$string['auth_ldap_suspended_attribute'] = 'Необов’язкове: якщо цей параметр вказано, то він буде використовуватися для блокування/розблокування облікового запису користувача.';
$string['auth_ldap_suspended_attribute_key'] = 'Атрибут блокування';
$string['auth_ldap_unsupportedusertype'] = 'аутентифікація: ldap user_create() не підтримує вибраний тип користувача: {$a}';
$string['auth_ldap_update_userinfo'] = 'Оновлення інформації про користувачів(Ім’я, Прізвище, адреса ..) від LDAP до системи. Дивіться /auth/ldap/attr_mappings.php для того, щоб відобразити інформацію.';
$string['auth_ldap_user_attribute'] = 'Атрибут, що використовується для імені/пошуку користувачів. Звичайно, \'cn\'.';
$string['auth_ldap_user_attribute_key'] = 'Атрибут користувача';
$string['auth_ldap_user_exists'] = 'Таке ім’я в LDAP вже існує.';
$string['auth_ldap_user_settings'] = 'Параметри користувача для налаштування пошуку';
$string['auth_ldap_user_type'] = 'Виберіть спосіб збереження користувачів у LDAP. Цей параметр також визначає, як працюватимуть термін дії входу, пільговий вхід та створення користувачів.';
$string['auth_ldap_user_type_key'] = 'Тип користувача';
$string['auth_ldap_usertypeundefined'] = 'config.user_type не визначено або функція ldap_expirationtime2unix не підтримується у визначеному типі!';
$string['auth_ldap_usertypeundefined2'] = 'config.user_type не визначено або функція ldap_unixi2expirationtime не підтримується у визначеному типі!';
$string['auth_ldap_version'] = 'Версія LDAP протоколу, який використовує Ваш сервер';
$string['auth_ldap_version_key'] = 'Версія';
$string['auth_ldapdescription'] = 'Цей метод забезпечує автентифікацію на зовнішньому сервері LDAP. Якщо дані ім’я користувача та пароль дійсні, Moodle створює новий запис користувача у своїй базі даних. Цей плагін може читати атрибути користувача з LDAP і попередньо заповнювати потрібні поля в Moodle. Для наступних логінів перевіряються лише ім’я користувача та пароль.';
$string['auth_ldapextrafields'] = 'Ці поля додаткові. Ви можете обрати попереднє заповнення деяких полів даних користувачів з полів LDAP, зазначених тут. <br />Не заповнюйте це поле, для того, щоб не переносити дані СLDAP.<br />У кожному разі, користувач зможе редагувати всі поля після того, як він зайде в систему.';
$string['auth_ldapnotinstalled'] = 'Не вдається використати LDAP аутентифікацію. Модуль PHP LDAP не встановлено.';
$string['auth_ntlmsso'] = 'NTLM SSO';
$string['auth_ntlmsso_enabled'] = 'Встановіть так, щоб спробувати єдиний вхід із доменом NTLM. Зауважте, що для роботи це вимагає додаткового налаштування на сервері. Додаткову інформацію дивіться в документації про автентифікацію NTLM. <a href="http://docs.moodle.org/en/NTLM_authentication">http://docs.moodle.org/en/NTLM_authentication</a>';
$string['auth_ntlmsso_enabled_key'] = 'Включити';
$string['auth_ntlmsso_ie_fastpath'] = 'Встановіть в так для швидкого включення NTLM SSO (обминає певні кроки, і працює тільки, якщо браузер клієнта MS Internet Explorer).';
$string['auth_ntlmsso_ie_fastpath_attempt'] = 'Спроба NTLM з усіма браузерами';
$string['auth_ntlmsso_ie_fastpath_key'] = 'MS IE швидкий шлях?';
$string['auth_ntlmsso_ie_fastpath_yesattempt'] = 'Так, спробувати NTLM іншими браузерами';
$string['auth_ntlmsso_ie_fastpath_yesform'] = 'Так, всі інші браузери використовують стандартну форму входу';
$string['auth_ntlmsso_maybeinvalidformat'] = 'Неможливо визначити псевдо користувача з REMOTE_USER заголовку. Чи правильно налаштовано формат?';
$string['auth_ntlmsso_missing_username'] = 'Необхідно вказати принаймні %username% у форматі віддаленого користувача';
$string['auth_ntlmsso_remoteuserformat'] = 'Якщо ви вибрали  \'NTLM\' у \'Типі аутентифікації\', ви можете тут вказати формат імені користувача. Якщо ви залишите поле порожнім, то буде використано типовий формат DOMAINusername. Ви можете використати додатково заповнювач <b>%domain%</b> для визначення, де з’явиться назва домену, та обов’язково <b>%username%</b> для визначення, де з’явиться ім’я користувача. <br /><br />Деякі широко використовувані формати <tt>%domain%%username%</tt> (типово для MS Windows), <tt>%domain%/%username%</tt>, <tt>%domain%+%username%</tt> and just <tt>%username%</tt> (якщо це не частина домену).';
$string['auth_ntlmsso_remoteuserformat_key'] = 'Формат для зовнішнього псевдоімені';
$string['auth_ntlmsso_subnet'] = 'Якщо встановлено, то буде тільки спроба SSO з клієнтами у суб-мережі. Формат: xxx.xxx.xxx.xxx/bitmask. Розділяйте кілька підмереж \',\' (комою).';
$string['auth_ntlmsso_subnet_key'] = 'Підмережа';
$string['auth_ntlmsso_type'] = 'Метод перевірки аутентичності налаштований на веб-сервері для аутентифікації користувачів (якщо є сумніви, виберіть NTLM)';
$string['auth_ntlmsso_type_key'] = 'Метод аутентифікації';
$string['cannotmaprole'] = 'Роль "{$a->rolename}" не можна зіставити, оскільки її коротка назва "{$a->shortname}" задовга та/або містить дефіси. Щоб його можна було зіставити, коротке ім’я потрібно зменшити до {$a->charlimit} символів і видалити будь-які дефіси. <a href="{$a->link}">Редагувати роль</a>';
$string['connectingldap'] = 'З’єднання із сервером LDAP...';
$string['connectingldapsuccess'] = 'Підключення до сервера LDAP було успішним';
$string['creatingtemptable'] = 'Створення тимчасової таблиці {$a}';
$string['diag_contextnotfound'] = 'Контекст {$a} не існує або не може бути прочитаний DN прив’язування.';
$string['diag_emptycontext'] = 'Знайдено порожній контекст.';
$string['diag_genericerror'] = 'Помилка LDAP {$a->code} читання {$a->subject}: {$a->message}.';
$string['diag_rolegroupnotfound'] = 'Група {$a->group} для ролі {$a->localname} не існує або не може бути прочитана DN прив’язування.';
$string['diag_toooldversion'] = 'Дуже малоймовірно, що сучасний сервер LDAP використовує протокол LDAPv2. Неправильні налаштування можуть пошкодити значення в полях користувача. Зверніться до свого адміністратора LDAP.';
$string['didntfindexpiretime'] = 'password_expire() не знайшла закінчення часу.';
$string['didntgetusersfromldap'] = 'Не отримали користувачів з LDAP - помилка? - Вихід';
$string['gotcountrecordsfromldap'] = 'Отримав {$a} записів з LDAP';
$string['invalidusererrors'] = 'Попередження: пропущено створення облікових записів користувачів ({$a}).';
$string['invaliduserexception'] = 'Помилка: не вдається створити новий обліковий запис користувача. Деталі та причина:
{$a}
Пропуск цього користувача.';
$string['ldapnotconfigured'] = 'URL-адреса хосту LDAP наразі не налаштована';
$string['morethanoneuser'] = 'У LDAP знайдено більше одного запису користувача. Використовуючи тільки першу.';
$string['needbcmath'] = 'Вам потрібне розширення BCMath, щоб використовувати перевірку терміну дії пароля в Active Directory.';
$string['needmbstring'] = 'Вам потрібно мати розширення mbstring для зміни паролей в Active Directory.';
$string['nodnforusername'] = 'Помилка у user_update_password(). Немає DN для: {$a->username}';
$string['noemail'] = 'Спроба відправити вам листа не вдалася!';
$string['notcalledfromserver'] = 'Не повинен викликатися із веб-сервера!';
$string['noupdatestobedone'] = 'Оновлення не робити';
$string['nouserentriestoremove'] = 'Користувачів не видаляти';
$string['nouserentriestorevive'] = 'Користувачів не поновлювати';
$string['nouserstobeadded'] = 'Користувачів не додавати';
$string['ntlmsso_attempting'] = 'Спроба Single Sign On через NTLM ...';
$string['ntlmsso_failed'] = 'Помилка автоматичного входження, спробуйте стандартну сторінку входження...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO відключено.';
$string['ntlmsso_unknowntype'] = 'Невідомий тип ntlmsso!';
$string['pagedresultsnotsupp'] = 'Результати сторінок LDAP не підтримуються (або ваша версія PHP не підтримує підтримку, ви налаштували Moodle на використання протоколу LDAP версії 2, або Moodle не може зв’язатися з вашим сервером LDAP, щоб перевірити, чи доступна підтримка сторінок).';
$string['pagesize'] = 'Переконайтеся, що значення менше ніж ліміт на вашому LDAP сервері (максимальний розмір записів, які можуть повертатися на один запит)';
$string['pagesize_key'] = 'Розмір сторінки';
$string['pluginname'] = 'Сервер LDAP';
$string['pluginnotenabled'] = 'Модуль не включено!';
$string['privacy:metadata'] = 'Плагін аутентифікації сервера LDAP не зберігає жодних особистих даних.';
$string['renamingnotallowed'] = 'Перейменування користувача не дозволено в LDAP';
$string['rootdseerror'] = 'Помилка запиту rootDSE до Active Directory';
$string['start_tls'] = 'Використовувати типовий LDAP сервіс (порт 389) з TLS шифруванням';
$string['start_tls_key'] = 'Використовувати TLS';
$string['sync_updateuserchunk'] = 'Встановіть це значення на кількість користувачів, яку потрібно оновлювати за транзакцію. Якщо встановити значення 0, усі користувачі будуть оновлені за одну транзакцію.';
$string['sync_updateuserchunk_key'] = 'Синхронізація розміру блоку оновлення користувачів';
$string['syncroles'] = 'Синхронізувати системні ролі з LDAP';
$string['synctask'] = 'Завдання синхронізації користувачів LDAP';
$string['systemrolemapping'] = 'Відображення ролей системи';
$string['updatepasserror'] = 'Помилка в user_update_password(). Код помилки: {$a->errno};  Текст помилки: {$a->errstring}';
$string['updatepasserrorexpire'] = 'Помилка в user_update_password() під час читання терміну дії пароля. Код помилки: {$a->errno}; Рядок помилки: {$a->errstring}';
$string['updatepasserrorexpiregrace'] = 'Помилка в user_update_password() під час зміни терміну дії та/або пільгового входу. Код помилки: {$a->errno}; Рядок помилки: {$a->errstring}';
$string['updateremfail'] = 'Помилка оновлення запису LDAP. Код помилки: {$a->errno};  Текст помилки: {$a->errstring}<br/> Ключ ({$a->key}) - старе moodle значення: \'{$a->ouvalue}\' нове значення: \'{$a->nuvalue}\'';
$string['updateremfailamb'] = 'Не вдалося оновити LDAP з неоднозначним полем {$a->key}; старе moodle значення: \'{$a->ouvalue}\' нове значення: \'{$a->nuvalue}\'';
$string['updateusernotfound'] = 'Не вдалося знайти користувача при оновленні зовні. Деталі: база пошуку: \'{$a->userdn}\'; фільтр пошуку: \'(objectClass=*)\'; атрибути пошуку: {$a->attribs}';
$string['user_activatenotsupportusertype'] = 'аутентифікація: ldap user_activate() не підтримує вибраний тип користувача: {$a}';
$string['user_disablenotsupportusertype'] = 'аутентифікація: ldap user_disable() не підтримує вибраний тип користувача: {$a}';
$string['useracctctrlerror'] = 'Помилка отримання userAccountControl для {$a}';
$string['userentriestoadd'] = 'Параметри користувача додано: {$a}';
$string['userentriestoremove'] = 'Параметри користувача видалено: {$a}';
$string['userentriestorevive'] = 'Параметри користувача переглянуто: {$a}';
$string['userentriestoupdate'] = 'Параметри користувача оновлено: {$a}';
$string['usernotfound'] = 'Користувача не знайдено в LDAP';
