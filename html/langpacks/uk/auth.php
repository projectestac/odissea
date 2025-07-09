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
 * Strings for component 'auth', language 'uk', version '4.4'.
 *
 * @package     auth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = 'Активні модулі аутентифікації';
$string['allowaccountssameemail'] = 'Дозволити облікові записи з однаковою ел.поштою';
$string['allowaccountssameemail_desc'] = 'Якщо дозволено, то облікові записи кількох користувачів можуть мати туж саму ел.пошту. Проте, це може призвести до проблем безпеки або конфіденційності, наприклад, з підтвердженням зміни пароля через ел.пошту.';
$string['alternatelogin'] = 'Якщо ви введете тут URL, він буде використовуватися як сторінка входу для сайту. Сторінка повинна вміщувати форму з посиланням на <strong>\'{$a}\'</strong> та повертати поля <strong>username</strong> і <strong>password</strong>.<br /> Не помиліться у вказаному URL, інакше ви заблокуєте вхід до сайту.<br />Залиште це поле пустим для використання типового входу.';
$string['alternateloginurl'] = 'Альтернативний URL входу';
$string['auth_changepasswordhelp'] = 'Допомога по зміні пароля';
$string['auth_changepasswordhelp_expl'] = 'Показати допомогу по втраченим паролям, для користувачів, які втратили свої {$a} паролі. Це буде відображено замість кнопки <strong> Зміна паролю</strong>.';
$string['auth_changepasswordurl'] = 'URL Зміни паролю';
$string['auth_changepasswordurl_expl'] = 'Визначають url, щоб відправити користувачам, які втратили свій {$a} пароль. Встановіть <strong> Використовувати стандартну сторінку зміни паролю </strong> в <strong> Ні </strong>.';
$string['auth_changingemailaddress'] = 'Ви надіслали запит на зміну електронної адреси з {$a->oldemail} на {$a->newemail}. З міркувань безпеки ми надсилаємо вам повідомлення на вашу нову адресу, щоб підтвердити, що вона належить вам. Ваша електронна адреса буде оновлена, щойно ви відкриєте URL-адресу, надіслану вам у повідомленні. Посилання для підтвердження закінчиться через 10 хвилин.';
$string['auth_common_settings'] = 'Загальне налаштування';
$string['auth_data_mapping'] = 'Відображення даних';
$string['auth_fieldlock'] = 'Закрите значення';
$string['auth_fieldlock_expl'] = '<p>Заблокувати значення: якщо ввімкнено, користувачі не зможуть редагувати поле. Використовуйте цей параметр, якщо ви зберігаєте ці дані у зовнішній системі авторизації. </p>';
$string['auth_fieldlockfield'] = 'Заблокувати значення ({$a})';
$string['auth_fieldlocks'] = 'Блокують поля користувачів';
$string['auth_fieldlocks_help'] = '<p> Ви можете заблокувати поля користувачів даних. Це корисно для сайтів, де дані користувачів обслуговуються адміністраторами вручну, редагуючи записи користувачів або передаючи використання засобу завантаження користувачів з файлу. Якщо Ви блокуєте поля, які потрібні Moodle, перевірте, чи Ви забезпечуєте, щоб дані при створенні облікових записів користувача &emdash; або облікові записи не будуть використовуватися. </p> <p> Перевірте, встановлення режиму \'Не блокувати, якщо пустий \', щоб запобігти цій проблемі. </p>';
$string['auth_fieldmapping'] = 'Прив\'язка даних ({$a})';
$string['auth_invalidnewemailkey'] = 'Помилка: якщо ви намагалися підтвердити зміну адреси ел.пошти, можливо ви допустили помилку в URL (посиланні), яке ми надіслали вам. Спробуйте повторити дану процедуру ще раз без помилок.';
$string['auth_loginpasswordtoggle'] = 'Перемикач видимості пароля';
$string['auth_loginpasswordtoggle_desc'] = 'Додайте значок у поле пароля на екрані входу, який дозволяє користувачам показувати або приховувати введений пароль.';
$string['auth_loginrecaptcha'] = 'Увімкніть reCAPTCHA для входу';
$string['auth_loginrecaptcha_desc'] = 'Додайте елемент форми візуального/аудіо підтвердження на сторінку входу. Це зменшує ризик необґрунтованих спроб входу. Додаткову інформацію див. у <a target="_blank" href="https://www.google.com/recaptcha">Google reCAPTCHA</a>.';
$string['auth_multiplehosts'] = 'У разі декількох хостів, вони повинні бути специфіковані таким чином: host1.com;host2.com;host3.com; або xxx.xxx.xxx.xxx;xxx.xxx.xxx.xxx';
$string['auth_notconfigured'] = 'Метод аутентифікації {$a} не налаштовано.';
$string['auth_outofnewemailupdateattempts'] = 'Ви перевищили кількість можливих спроб для оновлення вашої ел.адреси. Ваш запит оновлення скасовано.';
$string['auth_passwordisexpired'] = 'Термін дії вашого пароля закінчився. Будь ласка, змініть його зараз.';
$string['auth_passwordwillexpire'] = 'Термін дії вашого пароля закінчиться через {$a} днів. Змінити пароль зараз?';
$string['auth_remove_delete'] = 'Повне видалення внутрішнього запису';
$string['auth_remove_keep'] = 'Залишити внутрішній запис';
$string['auth_remove_suspend'] = 'Притримати внутрішній запис';
$string['auth_remove_user'] = 'Вкажіть, що робити з внутрішнім обліковим записом користувача під час масової синхронізації, коли користувача було видалено з зовнішнього джерела. Тільки призупинені користувачі автоматично відновлюються, якщо вони знову з\'являються у зовнішньому джерелі.';
$string['auth_remove_user_key'] = 'Видалено зовнішнього користувача';
$string['auth_sync_script'] = 'Синхронізація облікового запису користувача';
$string['auth_sync_suspended'] = 'Якщо ввімкнено, атрибут suspended використовуватиметься для оновлення статусу призупинення локального облікового запису користувача.';
$string['auth_sync_suspended_key'] = 'Синхронізувати статус призупинення локальних користувачів';
$string['auth_updatelocal'] = 'Оновити внутрішні дані';
$string['auth_updatelocal_expl'] = '<p><b>Оновити локальне:</b> Якщо буде позначено цей пункт, поле буде оновлено (від зовнішнього авторизації) щоразу, коли користувач входить до системи або синхронізується з користувачем. Поля, встановлені для локального оновлення, повинні бути заблоковані.</p>';
$string['auth_updatelocalfield'] = 'Оновити локальний ({$a})';
$string['auth_updateremote'] = 'Оновити зовнішні данні';
$string['auth_updateremote_expl'] = '<p><b>Оновити зовнішні данні:</b> Якщо дозволено, то зовнішні данні будуть оновлюватись, коли оновлюється запис користувача.</p>';
$string['auth_updateremote_ldap'] = '<p><b>Увага:</b> Оновлення зовнішніх LDAP-данних потребує, щоб ви правильно налаштували binddn та bindpw для bind-user с правами на редагування для усіх користувачів.';
$string['auth_updateremotefield'] = 'Оновити зовнішній ({$a})';
$string['auth_user_create'] = 'Дозволити створення користувачів';
$string['auth_user_creation'] = 'Нові (анонімні) користувачі можуть створювати облікові записи на зовнішньому джерелі ідентифікації та підтверджувати їх через електронну пошту. Якщо Ви дозволите це, не забудьте також налагодити визначені модулем опції для створення користувача.';
$string['auth_usernameexists'] = 'Обране ім’я користувача вже існує. Оберіть інше.';
$string['auth_usernotexist'] = 'Не можна оновити не створеного користувача: {$a}';
$string['authenticationoptions'] = 'Параметри ідентифікації';
$string['authinstructions'] = 'Тут Ви можете написати інструкції для Ваших користувачів, щоб вони знали, який логін і пароль потрібно використовувати. Текст, який Ви вводите, з\'явиться на сторінці входу в систему. Якщо Ви залишите поле порожнім, буде виведено типове повідомлення входу.';
$string['authloginviaemail'] = 'Дозволити вхід через електронну пошту';
$string['authloginviaemail_desc'] = 'Дозволити користувачам використовувати для входу на сайт або ім’я користувача або електронну адресу (якщо вони унікальні).';
$string['auto_add_remote_users'] = 'Автоматичне введення-видалення користувачів';
$string['cannotmapfield'] = 'Поле "{$a->fieldname}" не може бути відображене, оскільки його коротке ім\'я "{$a->shortname}" занадто довге. Щоб дозволити відображення, потрібно скоротити коротке ім\'я до такої кількості символів: {$a->charlimit}. <a href="{$a->link} ">Редагувати поля профілю користувача</a>';
$string['changepassword'] = 'URL для зміни паролю';
$string['changepasswordhelp'] = 'URL-адреса сторінки відновлення втраченого пароля, яка буде надіслана користувачам електронною поштою. Зауважте, що це налаштування не матиме ефекту, якщо в загальних налаштуваннях автентифікації встановлено URL-адресу для забутого пароля.';
$string['chooseauthmethod'] = 'Оберіть спосіб ідентифікації:';
$string['chooseauthmethod_help'] = 'Цей параметр визначає метод аутентифікації, який використовується під час входу користувача. Необхідно вибрати лише вбудовані додатки для автентифікації, інакше користувач більше не зможе увійти в систему. Щоб заблокувати користувача від входу, виберіть "No login".';
$string['createpassword'] = 'Згенерувати пароль та повідомити користувача';
$string['createpasswordifneeded'] = 'Створіть пароль, якщо потрібно, і надішліть електронною поштою';
$string['emailchangecancel'] = 'Скасувати зміну адреси електронної пошти';
$string['emailchangepending'] = 'Зміни в процесі очікування. Гіперпосилання для підтвердження надіслане вам на {$a->preference_newemail}.';
$string['emailnowexists'] = 'Адреса електронної пошти, яку ви намагалися ввести до свого профілю, вже використовується іншим обліковим записом. Надана для зміни адреса була відмінена, але ви можете спробувати з іншою адресою.';
$string['emailupdate'] = 'Зміна адреси електронної пошти';
$string['emailupdatemessage'] = 'Шановний {$a->fullname},

Ви подали запит на зміну адреси електронної пошти для свого облікового запису на сайті {$a->site}. Щоб підтвердити цю зміну, перейдіть за такою веб-адресою:

{$a->supportemail}

{$a->url}';
$string['emailupdatesuccess'] = 'Електронну адресу користувача <em>{$a->fullname}</em> успішно змінено на <em>{$a->email}</em>.';
$string['emailupdatetitle'] = 'Підтвердження зміни електронної пошти на {$a->site}';
$string['errormaxconsecutiveidentchars'] = 'Пароль повинен містити не більше {$a} однакових послідовних символів.';
$string['errorminpassworddigits'] = 'Пароль повинен мати як мінімум {$a} цифрових символів.';
$string['errorminpasswordlength'] = 'Пароль повинен мати як мінімум {$a} літерних символів.';
$string['errorminpasswordlower'] = 'Пароль повинен мати як мінімум {$a} символів нижнього регістру.';
$string['errorminpasswordnonalphanum'] = 'Пароль має містити принаймні {$a} спеціальних символів, таких як *, - або #.';
$string['errorminpasswordupper'] = 'Пароль повинен мати як мінімум {$a} символів верхнього регістру.';
$string['errorpasswordreused'] = 'Цей пароль вже використовувався, і не дозволяється використовувати  його повторно';
$string['errorpasswordupdate'] = 'Помилка зміни пароля, пароль не змінено';
$string['eventuserloggedin'] = 'Користувач увійшов в систему';
$string['eventuserloggedinas'] = 'Користувач увійшов як інший користувач';
$string['eventuserloginfailed'] = 'Помилка при вході';
$string['forcechangepassword'] = 'Примусова зміна паролю';
$string['forcechangepassword_help'] = 'Примусити користувачів змінити пароль при їх наступному вході в систему.';
$string['forcechangepasswordfirst_help'] = 'Примусити користувачів змінювати пароль при їх першому вході в систему.';
$string['forgottenpassword'] = 'Якщо ви введете тут URL, як сторінка для відновлення свого паролю для цього сайту. Це корисно для сайтів, де паролі генеруються поза Moodle. Залиште поле пустим для використання типового механізму генерації паролів.';
$string['forgottenpasswordurl'] = 'URL відновлення паролю';
$string['getrecaptchaapi'] = 'Щоб скористатися reCAPTCHA, потрібно отримати ключ API <a href=\'https://www.google.com/recaptcha/admin\'> https://www.google.com/recaptcha/admin</a>';
$string['guestloginbutton'] = 'Кнопка гостьового входу';
$string['incorrectpleasetryagain'] = 'Неправильно. Спробуйте знову.';
$string['infilefield'] = 'Пароль з файлу';
$string['informminpassworddigits'] = 'принаймні {$a} цифр(а)';
$string['informminpasswordlength'] = 'принаймні {$a} символів';
$string['informminpasswordlower'] = 'принаймні {$a} букв(а) нижнього регістру';
$string['informminpasswordnonalphanum'] = 'принаймні {$a} спеціальних символів, таких як *, - або #';
$string['informminpasswordreuselimit'] = 'Пароль може бути використаним знову після {$a} змін';
$string['informminpasswordupper'] = 'принаймні {$a} букв(а) верхнього регістру';
$string['informpasswordpolicy'] = 'Ваш пароль повинен мати {$a}';
$string['instructions'] = 'Інструкції';
$string['internal'] = 'Команди';
$string['limitconcurrentlogins'] = 'Обмеження числа одночасних входжень';
$string['limitconcurrentlogins_desc'] = 'Якщо включений, то число одночасних входжень для кожного користувача обмежена. Найстаріший сесія завершується після досягнення межі, зверніть увагу, що користувачі можуть втратити все незбережені дані. Цей параметр не сумісний з модулем аутентифікації єдиного входу (SSO).';
$string['locked'] = 'Закрито';
$string['md5'] = 'MD5-кодування';
$string['nopasswordchange'] = 'Не вдалося змінити пароль';
$string['nopasswordchangeforced'] = 'Ви не можете перейти не змінивши ваш пароль, але не вказано ніякої сторінки для цього процесу. Будь ласка, зверніться до вашого Адміністратора.';
$string['noprofileedit'] = 'Профіль не можна редагувати';
$string['ntlmsso_attempting'] = 'Дозвіл Single Sign On на NTLM...';
$string['ntlmsso_failed'] = 'Помилка авто-входження, спробуйте через звичайну сторінку аутентифікації...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO виключено.';
$string['passwordhandling'] = 'обробка поля Password';
$string['plaintext'] = 'Звичайний текст';
$string['pluginnotenabled'] = 'Розширення аутентифікації \'{$a}\' не включено.';
$string['pluginnotinstalled'] = 'Розширення аутентифікації \'{$a}\' не встановлено.';
$string['potentialidps'] = 'Увійдіть, використовуючи свій обліковий запис на:';
$string['privacy:metadata:userpref:createpassword'] = 'Вказує, що для користувачу має бути створено пароль';
$string['privacy:metadata:userpref:forcepasswordchange'] = 'Вказує, чи повинен користувач змінити свій пароль під час входу';
$string['privacy:metadata:userpref:loginfailedcount'] = 'Кількість разів, коли користувачеві не вдалося увійти';
$string['privacy:metadata:userpref:loginfailedcountsincesuccess'] = 'Кількість разів, коли користувачеві не вдалося ввійти в систему з моменту останнього успішного входу';
$string['privacy:metadata:userpref:loginfailedlast'] = 'Дата запису останньої невдалої спроби входу';
$string['privacy:metadata:userpref:loginlockout'] = 'Заблоковано обліковий запис користувача через невдалі спроб входу та дату, коли обліковий запис було заблоковано';
$string['privacy:metadata:userpref:loginlockoutignored'] = 'Вказує, що обліковий запис користувача ніколи не повинен підлягати блокуванню';
$string['privacy:metadata:userpref:loginlockoutsecret'] = 'Коли заблоковано, секрет, який користувач повинен використовувати для розблокування свого облікового запису';
$string['recaptcha'] = 'reCAPTCHA';
$string['recaptcha_help'] = 'CAPTCHA призначений для запобігання зловживанням з боку автоматизованих програм. Дотримуйтеся вказівок, щоб підтвердити, що ви особистість. Це може бути поле для вводу символів, представлених на зображенні, потрібно ввести або обрати ці символи.

Якщо ви не впевнені, якими є зображення, можете спробувати отримати інший CAPTCHA або аудіо CAPTCHA.';
$string['recaptcha_link'] = 'auth/email';
$string['security_question'] = 'Контрольне питання';
$string['selfregistration'] = 'Самореєстрація';
$string['selfregistration_help'] = 'Якщо вибрано метод аутентифікації, як самореєстрація на основі електронної пошти, то це означає, що користувачам дозволено самостійно реєструватися. Це потенційна небезпека реєстрації спамерів та розсилки ними спаму через форуми, блоги, тощо. Для запобіганню цьому самореєстрацію потрібно заборонити або обмежити <em>Дозволеними поштовими доменами</em>.';
$string['settingmigrationmismatch'] = 'Під час виправлення назв налаштувань плагіна виявлено невідповідність значень! Плагін автентифікації "{$a->plugin}" мав параметр "{$a->setting}", налаштований на "{$a->legacy}" під застарілою назвою та на "{$a->current}" під нинішньою назвою. Останнє значення було встановлено як дійсне, але ви повинні перевірити та підтвердити, що воно очікуване.';
$string['sha1'] = 'SHA-1 хеш';
$string['showguestlogin'] = 'Ви можете сховати або показати кнопку входу в систему гостя на сторінці входу в систему.';
$string['stdchangepassword'] = 'Використовують стандартну сторінку зміни паролю';
$string['stdchangepassword_expl'] = 'Якщо зовнішня розпізнавальна система дозволяє зміну паролю через Moodle, поставте перемикач на "Так". Це налаштування відміняє \'URL зміни паролю\'.';
$string['stdchangepassword_explldap'] = 'ПРИМІТКА: рекомендується, щоб Ви використовували LDAP по SSL, зашифрований тунель (ldaps: //), якщо сервер LDAP віддалений.';
$string['suspended'] = 'Заблокований обліковий запис';
$string['suspended_help'] = 'Заблоковані користувачі не можуть входити або використовувати веб-сервіси, а також надсилати будь-які повідомлення.';
$string['testsettings'] = 'Перевірка налаштувань';
$string['testsettingsheading'] = 'Перевірка налаштувань аутентифікації  - {$a}';
$string['unlocked'] = 'Відкрито';
$string['unlockedifempty'] = 'Відкрито, якщо порожній';
$string['update_never'] = 'Ніколи';
$string['update_oncreate'] = 'При створенні';
$string['update_onlogin'] = 'При кожному вході в систему';
$string['update_onupdate'] = 'На оновленні';
$string['user_activatenotsupportusertype'] = 'аутентифікація: ldap user_activate() не підтримується вибраним типом користувача: {$a}';
$string['user_disablenotsupportusertype'] = 'аутентифікація: ldap user_disable() не підтримується вибраним типом користувача (поки що ;))';
$string['username'] = 'Псевдо';
$string['username_help'] = 'Зверніть увагу, що деякі модулі аутентифікації не дозволять вам змінити своє псевдо (ім\'я користувача).';
