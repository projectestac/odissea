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
 * Strings for component 'tool_oauth2', language 'uk', version '4.1'.
 *
 * @package     tool_oauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptrisk'] = 'Я розумію, що вимкнення перевірки електронної пошти може бути проблемою безпеки.';
$string['acceptrisk_help'] = 'Вимкнення перевірки електронної пошти потенційно може дозволити користувачеві пройти автентифікацію як інший користувач.';
$string['authconfirm'] = 'Ця дія надасть постійний доступ до API Moodle для облікового запису, що пройшов аутентифікацію. Це призначено для використання в якості системного облікового запису для керування файлами, що належать Moodle.';
$string['authconnected'] = 'Тепер системний обліковий запис підключено для автономного доступу';
$string['authnotconnected'] = 'Обліковий запис системи не був підключений для автономного доступу';
$string['clever_service'] = 'Clever';
$string['configured'] = 'Налаштування';
$string['configuredstatus'] = 'Налаштування';
$string['connectsystemaccount'] = 'Підключення до системного облікового запису';
$string['createfromtemplate'] = 'Створити службу OAuth 2 з шаблону';
$string['createfromtemplatedesc'] = 'Виберіть один із шаблонів послуг OAuth2 нижче, щоб створити службу OAuth з дійсною конфігурацією для одного з відомих типів служб. Це дозволить створити службу OAuth2 з усіма правильними кінцевими точками та параметрами, необхідними для автентифікації, хоча вам доведеться ввести ідентифікатор клієнта та секрет для нової служби, перш ніж вона може бути використана.';
$string['createnewendpoint'] = 'Створити нову кінцеву точку для емітента "{$a}"';
$string['createnewfacebookissuer'] = 'Створити нову службу Facebook';
$string['createnewgoogleissuer'] = 'Створити нову службу Google';
$string['createnewissuer'] = 'Створити нову службу';
$string['createnewmicrosoftissuer'] = 'Створити нову службу Microsoft';
$string['createnewnextcloudissuer'] = 'Створіть новий сервіс Nextcloud';
$string['createnewservice'] = 'Створити новий сервіс:';
$string['createnewuserfieldmapping'] = 'Створіть нове відображення поля користувача для емітента "{$a}"';
$string['custom_service'] = 'Користувацьке';
$string['deleteconfirm'] = 'Ви впевнені, що хочете видалити ідентифікатора "{$a}"? Будь-які плагіни, що покладаються на цього емітента, перестануть працювати.';
$string['deleteendpointconfirm'] = 'Ви впевнені, що хочете видалити кінцеву точку "{$a->endpoint}" для емітента "{$a->issuer}"? Будь-які плагіни, що покладаються на цю кінцеву точку, перестануть працювати.';
$string['deleteuserfieldmappingconfirm'] = 'Ви впевнені, що хочете видалити відображення поля користувача для емітента "{$a}"?';
$string['discovered'] = 'Службу виявлено успішно';
$string['discovered_help'] = 'Виявлення означає, що кінцеві точки OAuth 2 можуть бути автоматично визначені з базової URL-адреси для служби OAuth. Не всі послуги потрібно «виявити», але якщо це не так, то кінцеві точки та інформацію про відображення користувачів потрібно буде ввести вручну.';
$string['discoverystatus'] = 'Відкриття';
$string['editendpoint'] = 'Змінити кінцеву точку: {$a->endpoint} для емітента {$a->issuer}';
$string['editendpoints'] = 'Налаштувати кінцеві точки';
$string['editissuer'] = 'Редагувати ідентифікатора: {$a}';
$string['edituserfieldmapping'] = 'Змінити відображення поля користувача для видавця {$a}';
$string['edituserfieldmappings'] = 'Налаштування відображення полів користувача';
$string['endpointdeleted'] = 'Видалити кінцеву точку';
$string['endpointname'] = 'Ім\'я';
$string['endpointname_help'] = 'Ключ, який використовується для пошуку цієї кінцевої точки. Потрібно закінчуватися символом "_endpoint".';
$string['endpointsforissuer'] = 'Кінцеві точки для емітента: {$a}';
$string['endpointurl'] = 'URL';
$string['endpointurl_help'] = 'URL для цієї кінцевої точки. Необхідно використовувати протокол https://.';
$string['facebook_service'] = 'Facebook';
$string['google_service'] = 'Google';
$string['imsobv2p1_service'] = 'Open Badges';
$string['issueralloweddomains'] = 'Домени для входу';
$string['issueralloweddomains_help'] = 'Якщо встановлено, цей параметр є списком доменів, розділених комами, до яких входитимуть лише при використанні цього провайдера.';
$string['issueralloweddomains_link'] = 'OAuth_2_login_domains';
$string['issuerbaseurl'] = 'URL базової служби';
$string['issuerbaseurl_help'] = 'Базова URL-адреса, яка використовується для доступу до служби.';
$string['issuerclientid'] = 'Ідентифікатор клієнта';
$string['issuerclientid_help'] = 'Ідентифікатор клієнта OAuth для цього емітента.';
$string['issuerclientsecret'] = 'Клієнт секрет';
$string['issuerclientsecret_help'] = 'Клієнт OAuth для цього емітента.';
$string['issuerdeleted'] = 'Видавець ідентифікації видалено';
$string['issuerdisabled'] = 'Видавець ідентифікації вимкнено';
$string['issuerenabled'] = 'Ідентифікатор ідентифікації включений';
$string['issuerimage'] = 'URL логотипу';
$string['issuerimage_help'] = 'URL-адреса зображення використовується для відображення логотипу для цього емітента. Може відображатися на сторінці входу.';
$string['issuerloginpagename'] = 'Ім\'я відображається на сторінці входу';
$string['issuerloginpagename_help'] = 'Якщо вказано, це ім’я використовуватиметься на сторінці входу замість назви служби.';
$string['issuerloginparams'] = 'Додаткові параметри, включені до запиту на вхід.';
$string['issuerloginparams_help'] = 'Деякі системи вимагають додаткових параметрів для запиту входу, щоб читати основний профіль користувача.';
$string['issuerloginparamsoffline'] = 'Додаткові параметри, включені до запиту на вхід для автономного доступу.';
$string['issuerloginparamsoffline_help'] = 'Кожна система OAuth визначає інший спосіб запиту автономного доступу. Напр. Google вимагає додаткових параметрів: "access_type = офлайн & підказка = згода". Ці параметри мають бути в форматі параметрів запиту URL.';
$string['issuerloginscopes'] = 'Області, включені до запиту на вхід.';
$string['issuerloginscopes_help'] = 'Деякі системи вимагають додаткових областей для запиту на вхід, щоб читати основний профіль користувача. Стандартними областями для системи, сумісної з OpenID Connect, є електронна пошта "openid profile".';
$string['issuerloginscopesoffline'] = 'Області, включені до запиту на вхід для автономного доступу.';
$string['issuerloginscopesoffline_help'] = 'Кожна система OAuth визначає інший спосіб запиту автономного доступу. Напр. Microsoft вимагає додаткової області "offline_access".';
$string['issuername'] = 'Ім\'я';
$string['issuername_help'] = 'Назва емітента ідентифікаційної особи. Може відображатися на сторінці входу.';
$string['issuerrequireconfirmation'] = 'Потрібна перевірка електронної пошти';
$string['issuerrequireconfirmation_help'] = 'Потрібно, щоб всі користувачі перевірили свою адресу електронної пошти, перш ніж вони зможуть увійти в систему за допомогою OAuth. Це стосується новостворених облікових записів як частини процесу входу в систему або коли існуючий обліковий запис Moodle під’єднано до входу OAuth через відповідні адреси електронної пошти.';
$string['issuers'] = 'Емітенти';
$string['issuersetup'] = 'Детальні інструкції щодо налаштування загальних служб OAuth2';
$string['issuersetuptype'] = 'Детальні інструкції щодо налаштування провайдера {$a} OAuth2';
$string['issuershowonloginpage'] = 'Показати на сторінці входу';
$string['issuershowonloginpage_help'] = 'Якщо увімкнено модуль аутентифікації OAuth2, цей емітент для входу буде вказаний на сторінці входу, щоб дозволити користувачам входити з обліковими записами цього емітента.';
$string['issuersservicesallow'] = 'Дозволити послуги';
$string['issuersservicesnotallow'] = 'Не дозволяти послуги';
$string['issuerusedforinternal'] = 'Внутрішні послуги';
$string['issuerusedforlogin'] = 'Увійти';
$string['issuerusein'] = 'Ця послуга буде використана';
$string['issuerusein_help'] = 'Служби OAuth 2 можна використовувати для внутрішніх служб, на сторінці входу або обидві, якщо потрібно.';
$string['issueruseineverywhere'] = 'Сторінка входу та внутрішні послуги';
$string['issueruseininternalonly'] = 'Тільки внутрішні служби';
$string['issueruseinloginonly'] = 'Тільки сторінка входу';
$string['linkedin_service'] = 'LinkedIn';
$string['logindisplay'] = 'Відображати на сторінці входу як';
$string['loginissuer'] = 'Дозволити вхід';
$string['microsoft_service'] = 'Microsoft';
$string['nextcloud_service'] = 'Nextcloud';
$string['notconfigured'] = 'Не налаштовано';
$string['notdiscovered'] = 'Відкриття служби не вдалося';
$string['notloginissuer'] = 'Не дозволяти вхід';
$string['pluginname'] = 'Послуги OAuth2';
$string['privacy:metadata'] = 'Плагін служб OAuth2 не зберігає жодних персональних даних.';
$string['savechanges'] = 'Зберегти зміни';
$string['serviceshelp'] = 'Інструкції з налаштування постачальника послуг.';
$string['systemaccountconnected'] = 'Підключено системний обліковий запис';
$string['systemaccountconnected_help'] = 'Системні облікові записи використовуються для розширення функцій плагінів. Вони не потрібні лише для функцій входу в систему, але інші плагіни, які використовують службу OAuth, можуть запропонувати зменшений набір функцій, якщо системний обліковий запис не було підключено. Наприклад, репозиторії не можуть підтримувати "контрольовані посилання" без системного облікового запису для виконання операцій з файлами.';
$string['systemaccountnotconnected'] = 'Обліковий запис системи не підключений';
$string['systemauthstatus'] = 'Обліковий запис системи';
$string['usebasicauth'] = 'Аутентифікація запитів маркера через заголовки HTTP';
$string['usebasicauth_help'] = 'Використовуйте схему аутентифікації HTTP Basic при відправці ідентифікатора клієнта та пароля з запитом на маркер оновлення. Рекомендовано стандартом OAuth2, але може бути недоступним для деяких емітентів.';
$string['userfieldexternalfield'] = 'Назва зовнішнього поля';
$string['userfieldexternalfield_error'] = 'Це поле не може містити HTML.';
$string['userfieldexternalfield_help'] = 'Ім\'я поля, наданого зовнішньою системою OAuth.';
$string['userfieldinternalfield'] = 'Внутрішнє ім\'я поля';
$string['userfieldinternalfield_help'] = 'Ім\'я користувача Moodle, яке слід відобразити з зовнішнього поля.';
$string['userfieldmappingdeleted'] = 'Вилучення зіставлення полів користувача';
$string['userfieldmappingsforissuer'] = 'Об\'єднання полів користувача для емітента: {$a}';
