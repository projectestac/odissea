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
 * Strings for component 'enrol_ldap', language 'uk', version '4.1'.
 *
 * @package     enrol_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Надання ролі \'{$a->role_shortname}\' користувачу \'{$a->user_username}\' в курсі \'{$a->course_shortname}\' (код {$a->course_id})';
$string['assignrolefailed'] = 'Помилка надання ролі \'{$a->role_shortname}\' користувачу \'{$a->user_username}\' в курсі \'{$a->course_shortname}\' (код {$a->course_id})';
$string['autocreate'] = '<p>Курси можуть створюватися автоматично, якщо на них є реєстрація користувачів, але в Moodle їх ще немає.</p> <p>Якщо ви використовуєте автоматичне створення курсів, рекомендується заборонити наступний список прав: moodle/course:changeidnumber, moodle/course:changeshortname, moodle/course:changefullname та moodle/course:changesummary, для відповідних ролей з метою запобігання зміни чотирьох полів (ID number, shortname, fullname та summary).</p>';
$string['autocreate_key'] = 'Автостворення';
$string['autocreation_settings'] = 'Налаштування автоматичного створення курсу';
$string['autoupdate_settings'] = 'Налаштування автоматичного оновлення курсу';
$string['autoupdate_settings_desc'] = '<p>Виберіть поля для оновлення під час виконання запланованого завдання «Синхронізувати реєстрацію LDAP». </p><p>Коли вибрано хоча б одне поле, відбудеться оновлення.</p>';
$string['bind_dn'] = 'Якщо вихочете використовувати користувача для пошуку користувачів, вкажіть це тут. Щось на зразок \'cn=ldapuser,ou=public,o=org\'';
$string['bind_dn_key'] = 'Ім’я користувача';
$string['bind_pw'] = 'Пароль користувача';
$string['bind_pw_key'] = 'Пароль';
$string['bind_settings'] = 'Налаштування Bind';
$string['cannotcreatecourse'] = 'Не вдається створити курс: відсутні потрібні дані з LDAP запису!';
$string['cannotupdatecourse'] = 'Не вдається оновити курс: не отримується обов’язкова інформація з LDAP запису! Код курсу: \'{$a->idnumber}\'';
$string['cannotupdatecourse_duplicateshortname'] = 'Не вдається оновити курс: Така коротка назва вже існує. Пропущено курс з кодом \'{$a->idnumber}\'...';
$string['category'] = 'Категорія для автостворених курсів';
$string['category_key'] = 'Категорія';
$string['contexts'] = 'LDAP контексти';
$string['couldnotfinduser'] = 'Не вдалося знайти користувача \'{$a}\', пропущено';
$string['course_fullname'] = 'Додатково: LDAP атрибут, щоб отримати повну назву';
$string['course_fullname_key'] = 'Повна назва';
$string['course_fullname_updateonsync'] = 'Оновіть повне ім’я під час сценарію синхронізації';
$string['course_fullname_updateonsync_key'] = 'Оновити повну назву';
$string['course_idnumber'] = 'LDAP атрибут, щоб отримати ідентифікатора курсу. Зазвичай \'cn\' or \'uid\'.';
$string['course_idnumber_key'] = 'Ідентифікатор';
$string['course_search_sub'] = 'Пошук у підконтекстах';
$string['course_search_sub_key'] = 'Пошук у підконтекстах';
$string['course_settings'] = 'Налаштування зарахування на курс';
$string['course_shortname'] = 'Додатково: LDAP атрибут, щоб отримати коротку назву';
$string['course_shortname_key'] = 'Коротка назва';
$string['course_shortname_updateonsync'] = 'Оновити коротку назву під час сценарію синхронізації';
$string['course_shortname_updateonsync_key'] = 'Оновити коротку назву';
$string['course_summary'] = 'Додатково: LDAP атрибут, щоб отримати опис';
$string['course_summary_key'] = 'Опис';
$string['course_summary_updateonsync'] = 'Оновити підсумок під час сценарію синхронізації';
$string['course_summary_updateonsync_key'] = 'Оновити опис';
$string['coursenotexistskip'] = 'Курсу \'{$a}\' не існує і автостворення відключено, пропущено';
$string['courseupdated'] = 'Курс з кодом \'{$a->idnumber}\' успішно оновлено.';
$string['courseupdateskipped'] = 'Курс з кодом \'{$a->idnumber}\' не вимагає оновлення. Пропущено...';
$string['createcourseextid'] = 'СТВОРИТИ Користувача, зареєстрованого на неіснуючий курс "{$a->courseextid}"';
$string['createnotcourseextid'] = 'Користувач зареєструвався на неіснуючий курс "{$a->courseextid}"';
$string['creatingcourse'] = 'Створення курсу \'{$a}\'...';
$string['duplicateshortname'] = 'Не вдалося створити курс. Така коротка назва вже існує. Пропущено курс з кодом \'{$a->idnumber}\'...';
$string['editlock'] = 'Заблоковане значення';
$string['emptyenrolment'] = 'Порожнє зарахування для ролі \'{$a->role_shortname}\' у курсі \'{$a->course_shortname}\'';
$string['enrolname'] = 'LDAP';
$string['enroluser'] = 'Зарахувати користувача \'{$a->user_username}\' до курсу \'{$a->course_shortname}\' (код {$a->course_id})';
$string['enroluserenable'] = 'Включено зарахування користувача \'{$a->user_username}\' до курсу \'{$a->course_shortname}\' (код {$a->course_id})';
$string['explodegroupusertypenotsupported'] = 'ldap_explode_group() не підтримує вибраний тип користувача: {$a}';
$string['extcourseidinvalid'] = 'Код зовнішнього курсу неправильний!';
$string['extremovedsuspend'] = 'Відключено зарахування користувача \'{$a->user_username}\' до курсу \'{$a->course_shortname}\' (код {$a->course_id})';
$string['extremovedsuspendnoroles'] = 'Відключено зарахування та видалення ролей для користувача \'{$a->user_username}\' до курсу \'{$a->course_shortname}\' (код {$a->course_id})';
$string['extremovedunenrol'] = 'Відраховано користувача \'{$a->user_username}\' з курсу \'{$a->course_shortname}\' (код {$a->course_id})';
$string['failed'] = 'Не вдалося!';
$string['general_options'] = 'Загальні параметри';
$string['group_memberofattribute'] = 'Назва атрибуту, який визначає, до якої групи або груп користувач належить (наприклад, поза групами, група і т.д.)';
$string['group_memberofattribute_key'] = 'Атрибут \'Member of\'';
$string['host_url'] = 'Вкажіть LDAP хост у формі URL на зразок \'ldap://ldap.myorg.com/\' або \'ldaps://ldap.myorg.com/\'';
$string['host_url_key'] = 'URL хоста';
$string['idnumber_attribute'] = 'Якщо членство в групі містить розрізнені імена, вкажіть той самий атрибут, який ви використовували для зіставлення користувача «Номер ідентифікатора» в налаштуваннях автентифікації LDAP.';
$string['idnumber_attribute_key'] = 'Атрибут ідентифікатора';
$string['ldap:manage'] = 'Управляти варіантом LDAP зарахуванням';
$string['ldap_encoding'] = 'Вкажіть кодування, яке використовується в LDAP сервері. Швидше за все, utf-8, MS AD V2 використовує кодування типове для платформи, як cp1252, cp1250, і т.д.';
$string['ldap_encoding_key'] = 'Кодування LDAP';
$string['memberattribute'] = 'Атрибут LDAP членства';
$string['memberattribute_isdn'] = 'Якщо членство в групі містить відмінні імена, їх потрібно вказати тут. Якщо так, вам також потрібно налаштувати інші параметри в цьому розділі.';
$string['memberattribute_isdn_key'] = 'Атрибут члена використовує dn';
$string['nested_groups'] = 'Ви хочете використати вкладені групи (групи в групах) для зарахування?';
$string['nested_groups_key'] = 'Вкладені групи';
$string['nested_groups_settings'] = 'Параметри вкладених груп';
$string['nosuchrole'] = 'Немає такої ролі: \'{$a}\'';
$string['objectclass'] = 'objectClass використано для пошуку курсів. Зазвичай \'group\' або \'posixGroup\'';
$string['objectclass_key'] = 'Об\'єкт класу';
$string['ok'] = 'OK!';
$string['opt_deref'] = 'Якщо членство в групі містить відмінні імена, вкажіть, як псевдоніми обробляються під час пошуку. Виберіть одне з таких значень: «Ні» (LDAP_DEREF_NEVER) або «Так» (LDAP_DEREF_ALWAYS).';
$string['opt_deref_key'] = 'Розкривати псевдоніми';
$string['phpldap_noextension'] = 'Модуль PHP LDAP, схоже, відсутній. Будь ласка, переконайтеся, що його встановлено та ввімкнено, якщо ви хочете використовувати цей плагін реєстрації.';
$string['pluginname'] = 'LDAP зарахування';
$string['pluginname_desc'] = '<p>Ви можете використовувати LDAP сервер для контролю за зарахуваннями на курс. Передбачається, що ваше дерево в LDAP має відповідні групи, що накладаються на курси, і що такі групи/курси матимуть записи членства для користувачів.</p><p>Передбачається, що курси визначаються як групи в LDAP, при цьому кожна група має кілька полів членства (<em>member</em> або <em>memberUid</em>), які містять унікальний ідентифікатор користувача.</p><p>Використовуючи LDAP зарахування, ваші користувачі <strong>повинні</strong> мати правильний ідентифікатор в полі. LDAP групи повинні мати ідентифікатор в полях членства для користувачів, які повинні бути записані на курс. Це, як правило, добре працює, якщо ви вже використовуєте LDAP-аутентифікацію.</p><p>Зарахування будуть поновлюватися в момент входу користувачів у систему. Ви також можете запускати скрипт для періодичної синхронізації зарахувань. Дивіться в <em>enrol/ldap/cli/sync.php</em>.</p><p>Цей модуль може також використовуватися для автоматичного створення нових курсів при створенні нової групи в LDAP.</p>';
$string['pluginnotenabled'] = 'Модуль не включено!';
$string['privacy:metadata'] = 'Плагін реєстрації LDAP не зберігає жодних особистих даних.';
$string['role_mapping'] = '<p>Для кожної ролі потрібно вказати всі контексти LDAP, де розташовані групи, що представляють курси. Розділіть різні контексти крапкою з комою (;). <p></p>Вам також потрібно вказати атрибут, який використовує ваш LDAP-сервер для утримання членів групи. Зазвичай це \'member\' або \'memberUid\'.</p>';
$string['role_mapping_attribute'] = 'LDAP атрибут членства для {$a}';
$string['role_mapping_context'] = 'LDAP контекст для {$a}';
$string['role_mapping_key'] = 'Розміщення ролей з LDAP';
$string['roles'] = 'Розміщення ролі';
$string['server_settings'] = 'Налаштування LDAP серверу';
$string['synccourserole'] = '== Синхронізація курсу \'{$a->idnumber}\' для ролі \'{$a->role_shortname}\'';
$string['syncenrolmentstask'] = 'Синхронізувати завдання реєстрації LDAP';
$string['template'] = 'Додатково: автостворення курсів може копіювати їх налаштування з курсу-шаблону';
$string['template_key'] = 'Шаблон';
$string['unassignrole'] = 'Зняття ролі \'{$a->role_shortname}\' з користувача\'{$a->user_username}\' з курсу \'{$a->course_shortname}\' (код {$a->course_id})';
$string['unassignrolefailed'] = 'Помилка зняття ролі \'{$a->role_shortname}\' з користувача\'{$a->user_username}\' з курсу \'{$a->course_shortname}\' (код {$a->course_id})';
$string['unassignroleid'] = 'Зняття ролі \'{$a->role_shortname}\' з користувача\'{$a->user_username}\'';
$string['updatelocal'] = 'Оновити локальні дані';
$string['user_attribute'] = 'Якщо членство в групі містить відмінні імена, вкажіть атрибут, який використовується для іменування/пошуку користувачів. Якщо ви використовуєте автентифікацію LDAP, це значення має відповідати атрибуту, зазначеному у відображенні «Номер ідентифікатора» у плагіні автентифікації LDAP.';
$string['user_attribute_key'] = 'Атрибути ідентифікатора';
$string['user_contexts'] = 'Якщо членство в групі містить відмінні імена, вкажіть список контекстів, у яких знаходяться користувачі. Розділіть різні контексти крапкою з комою (;). Наприклад: \'ou=users,o=org; ou=others,o=org\'.';
$string['user_contexts_key'] = 'Контексти';
$string['user_search_sub'] = 'Якщо членство в групі містить розрізнені імена, укажіть, чи виконується пошук користувачів також у підконтекстах.';
$string['user_search_sub_key'] = 'Пошук у субконтентах';
$string['user_settings'] = 'Налаштування пошуку користувача';
$string['user_type'] = 'Якщо членство в групі містить унікальні імена, вкажіть, як користувачі зберігаються в LDAP';
$string['user_type_key'] = 'Тип користувача';
$string['version'] = 'Версія LDAP протоколу, який використовує ваш сервер';
$string['version_key'] = 'Версія';
