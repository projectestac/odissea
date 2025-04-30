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
 * Strings for component 'auth_oauth2', language 'uk', version '4.4'.
 *
 * @package     auth_oauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountexists'] = 'На цьому сайті вже існує користувач із цим іменем користувача. Якщо це ваш обліковий запис, увійдіть, ввівши своє ім’я користувача та пароль, і додайте їх як пов’язаний логін на сторінці налаштувань.';
$string['alreadylinked'] = 'Цей зовнішній обліковий запис уже пов’язано з обліковим записом на цьому сайті';
$string['auth_oauth2description'] = 'Аутентифікація на основі стандартів OAuth 2';
$string['auth_oauth2settings'] = 'Налаштування автентифікації OAuth 2.';
$string['confirmaccountemail'] = 'Привіт, {$a->fullname}!

На адресу "{$a->sitename}" надіслано запит на створення нового облікового запису використовуючи свою електронну адресу.

Щоб підтвердити свій новий обліковий запис, перейдіть за цією веб-адресою:

{$a->link}

У більшості поштових програм це має відображатися як синє посилання на яку можна просто натиснути. Якщо це не спрацює, потім виріжте та вставте адресу в адресу рядок у верхній частині вікна веб-переглядача.

Якщо вам потрібна допомога, зверніться до адміністратора сайту, {$a->admin}

Якщо ви цього не зробили, можливо, хтось інший намагається зламати ваш обліковий запис.
Будь ласка, негайно зв’яжіться з адміністратором сайту.';
$string['confirmaccountemailsubject'] = '{$a}: підтвердження облікового запису';
$string['confirmationinvalid'] = 'Посилання для підтвердження або недійсне, або його термін дії закінчився. Будь ласка, почніть процес входу знову, щоб створити новий електронний лист із підтвердженням.';
$string['confirmationpending'] = 'Цей обліковий запис очікує підтвердження електронною поштою.';
$string['confirmlinkedloginemail'] = 'Привіт, {$a->fullname}!

Зроблено запит на зв’язування логіна {$a->issuername} {$a->linkedemail} до вашого облікового запису на "{$a->sitename}" використовуючи свою електронну адресу.

Щоб підтвердити цей запит і зв’язати ці логіни, перейдіть за цією веб-адресою:

{$a->link}

У більшості поштових програм це має відображатися як синє посилання на яку можна просто натиснути. Якщо це не спрацює, потім виріжте та вставте адресу в адресу рядок у верхній частині вікна веб-переглядача.

Якщо вам потрібна допомога, зверніться до адміністратора сайту, {$a->admin}

Якщо ви цього не зробили, можливо, хтось інший намагається зламати ваш обліковий запис.
Будь ласка, негайно зв’яжіться з адміністратором сайту.';
$string['confirmlinkedloginemailsubject'] = '{$a}: підтвердження пов’язаного входу';
$string['createaccountswarning'] = 'Цей плагін аутентифікації дозволяє користувачам створювати облікові записи на вашому сайті. Ви можете ввімкнути параметр "authpreventaccountcreation", якщо ви використовуєте цей плагін.';
$string['createnewlinkedlogin'] = 'Зв’язати новий обліковий запис ({$a})';
$string['emailconfirmlink'] = 'Пов’яжіть свої обліковки';
$string['emailconfirmlinksent'] = '<p>З цією адресою електронної пошти знайдено наявний обліковий запис, але він ще не пов’язаний.</p>
<p>Облікові записи повинні бути пов’язані, перш ніж ви зможете ввійти.</p>
<p>На вашу адресу за адресою <b>{$a}</b> мав бути надісланий електронний лист. </p>
<p>Він містить прості інструкції щодо зв’язування ваших облікових записів.</p>
<p>Якщо у вас виникнуть труднощі, зверніться до адміністратора сайту.<p>';
$string['emailpasswordchangeinfo'] = 'Привіт, {$a->firstname}!

Хтось (ймовірно, ви) запитав новий пароль для вашого облікового запису на "{$a->sitename}".

Однак ваш пароль не можна скинути, оскільки ви використовуєте свій обліковий запис на іншому сайті для входу.

Будь ласка, увійдіть, як і раніше, використовуючи посилання на сторінці входу.
{$a->admin}';
$string['emailpasswordchangeinfosubject'] = '{$a}: інформація зміни проля';
$string['info'] = 'Зовнішня обліковка';
$string['issuer'] = 'Сервіс OAuth 2';
$string['issuernologin'] = 'Цей емітент не може бути використаний для входу';
$string['key'] = 'Ключ';
$string['linkedlogins'] = 'Пов\'язані реєстраційні дані';
$string['linkedloginshelp'] = 'Допомога з пов’язаними логінами';
$string['loggedin'] = 'Користувач успішно аутентифікований у постачальника.';
$string['loginerror_authenticationfailed'] = 'Помилка процесу автентифікації.';
$string['loginerror_cannotcreateaccounts'] = 'Не вдалося знайти обліковий запис із вашою електронною адресою.';
$string['loginerror_invaliddomain'] = 'Адреса електронної пошти заборонена на цьому сайті.';
$string['loginerror_nouserinfo'] = 'Інформація про користувача не повернута. Можливо, служба OAuth 2 налаштована неправильно.';
$string['loginerror_userincomplete'] = 'Повернута інформація про користувача не містила імені користувача та адреси електронної пошти. Можливо, служба OAuth 2 налаштована неправильно.';
$string['noconfiguredidps'] = 'Немає налаштованих постачальників OAuth2.';
$string['noissuersavailable'] = 'Жодна з налаштованих служб OAuth 2 не дозволяє пов’язувати облікові записи для входу.';
$string['notenabled'] = 'На жаль, плагін автентифікації OAuth 2 не ввімкнено';
$string['notloggedindebug'] = 'Помилка спроби входу. Причина: {$a}';
$string['notwhileloggedinas'] = 'Пов’язаними іменами не можна керувати, якщо ви ввійшли як інший користувач.';
$string['oauth2:managelinkedlogins'] = 'Керуйте власними пов’язаними обліковими записами для входу';
$string['plugindescription'] = 'Цей плагін аутентифікації відображає список налаштованих постачальників ідентифікаційної інформації на сторінці входу. Вибір постачальника ідентифікаційних даних дозволяє користувачам входити в систему зі своїми обліковими даними від постачальника OAuth 2.';
$string['pluginname'] = 'OAuth 2';
$string['privacy:metadata:auth_oauth2'] = 'Аутентифікація OAuth 2';
$string['privacy:metadata:auth_oauth2:authsubsystem'] = 'Цей плагін підключений до підсистеми аутентифікації.';
$string['privacy:metadata:auth_oauth2:confirmtoken'] = 'Маркер підтвердження.';
$string['privacy:metadata:auth_oauth2:confirmtokenexpires'] = 'Позначка часу, коли закінчується термін дії маркера підтвердження.';
$string['privacy:metadata:auth_oauth2:email'] = 'Зовнішня електронна адреса, яка пов’язана з цим обліковим записом.';
$string['privacy:metadata:auth_oauth2:issuerid'] = 'Ідентифікатор емітента OAuth 2 для цього входу OAuth 2';
$string['privacy:metadata:auth_oauth2:tableexplanation'] = 'Облікові записи OAuth 2, пов’язані з обліковим записом Moodle користувача.';
$string['privacy:metadata:auth_oauth2:timecreated'] = 'Позначка часу, коли обліковий запис користувача було пов’язано з логіном OAuth 2.';
$string['privacy:metadata:auth_oauth2:timemodified'] = 'Позначка часу, коли цей запис був змінений.';
$string['privacy:metadata:auth_oauth2:userid'] = 'Ідентифікатор облікового запису користувача, з яким пов’язано логін OAuth 2.';
$string['privacy:metadata:auth_oauth2:usermodified'] = 'Ідентифікатор користувача, який змінив цей обліковий запис.';
$string['privacy:metadata:auth_oauth2:username'] = 'Зовнішнє ім’я користувача, яке відповідає цьому обліковому запису.';
$string['testidplogin'] = 'Тестовий вхід за допомогою:';
$string['userinfo'] = 'Дані користувача від провайдера:';
$string['value'] = 'Значення';
