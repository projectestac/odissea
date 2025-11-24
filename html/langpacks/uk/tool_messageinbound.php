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
 * Strings for component 'tool_messageinbound', language 'uk', version '4.5'.
 *
 * @package     tool_messageinbound
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['classname'] = 'Назва класу';
$string['component'] = 'Компонент';
$string['configmessageinboundhost'] = 'Адреса сервера, на якому Moodle повинен перевіряти пошту. Щоб задати не типовий порт, ви можете використати формат [сервер]:[порт]; наприклад, mail.example.com:993. Якщо залишити це поле порожнім, то Moodle буде використовувати типовий порт для вказаного типу поштового сервера.';
$string['defaultexpiration'] = 'Типове значення терміну дії адреси';
$string['defaultexpiration_help'] = 'Якщо адреса електронної пошти формується за допомогою обробника, можна встановити, щоб термін дії адреси автоматично спливав через певний час та адреса більше не використовувалася. Бажано встановити термін дії.';
$string['description'] = 'Опис';
$string['domain'] = 'Поштовий домен';
$string['edit'] = 'Редагувати';
$string['edithandler'] = 'Змінити налаштування для обробника {$a}';
$string['editinghandler'] = 'Редагування {$a}';
$string['enabled'] = 'Включено';
$string['fixedenabled_help'] = 'Ви не можете змінити стан цього обробника. Причиною може бути те, що обробник використовується іншими обробниками.';
$string['fixedvalidateaddress'] = 'ПІдтвердіть адресу відправника';
$string['fixedvalidateaddress_help'] = 'Ви не можете змінити підтвердження адреси для цього обробника. Причиною може бути те, що обробник потребує специфічних налаштувань.';
$string['handlerdisabled'] = 'Обробник електронної пошти, з яким ви намагаєтеся зв’язатися, було відключено. Опрацювати повідомлення наразі неможливо.';
$string['incomingmailconfiguration'] = 'Налаштування вхідної пошти';
$string['incomingmailserversettings'] = 'Налаштування сервера вхідної пошти';
$string['incomingmailserversettings_desc'] = 'Moodle може під’єднуватися до відповідно налаштованих серверів IMAP. Тут ви можете вказати параметри підключення до сервера IMAP.';
$string['invalid_recipient_handler'] = 'Якщо отримано коректне повідомлення, але немає можливості впевнитися в справжності відправника, то повідомлення зберігається на сервері електронної пошти. В цьому випадку на адресу електронної пошти, яка вказана в обліковому записі користувача, відсилається спеціальний лист. Користувачу надаться можливість відповісти на нього, щоб підтвердити справжність початкового повідомлення.

Цей обробник опрацьовує такі відповіді.

Відключити перевірку відправника, яку здійснює цей обробник, неможливо. Це пов’язано з тим, що користувач може відповідати з неправильної адреси ел.пошти, якщо його клієнт електронної пошти налаштовано неправильно.';
$string['invalid_recipient_handler_name'] = 'Недійсний обробник відправника';
$string['invalidrecipientdescription'] = 'Повідомлення "{$a->subject}" не вдається ідентифікувати, оскільки воно було відправлене з адреси електронної пошти, що відрізняється від тієї, яка вказана у вашому обліковому записі. Щоб повідомлення було ідентифіковане, вам потрібно відповісти на цей лист.';
$string['invalidrecipientdescriptionhtml'] = 'Повідомлення "{$a->subject}" не вдається ідентифікувати, оскільки воно було відправлене з адреси електронної пошти, що відрізняється від тієї, яка вказана у вашому обліковому записі. Щоб повідомлення було ідентифіковане, вам потрібно відповісти на цей лист.';
$string['invalidrecipientfinal'] = 'Надісланий вами лист з темою "{$a->subject}" не вдається ідентифікувати. Будь ласка, переконайтеся, що ви відправляєте своє повідомлення з адреси електронної пошти, яка вказана у вашому обліковому записі Moodle.';
$string['mailbox'] = 'Назва поштової скриньки';
$string['mailboxconfiguration'] = 'Налаштування поштової скриньки';
$string['mailboxdescription'] = '[адреса]+субадреса@[домен]';
$string['mailsettings'] = 'Налаштування пошти';
$string['message_handlers'] = 'Обробники повідомлень';
$string['messageinbound'] = 'Вхідні повідомлення';
$string['messageinboundenabled'] = 'Включити обробку вхідної пошти';
$string['messageinboundenabled_desc'] = 'Обробка вхідної пошти повинна бути включена, щоб повідомлення відправлялися з відповідною інформацією.';
$string['messageinboundgeneralconfiguration'] = 'Загальні налаштування';
$string['messageinboundgeneralconfiguration_desc'] = 'Обробка вхідних повідомлень дозволяє отримувати та опрацьовувати електронну пошту через Moodle. Це можна використовувати для того, щоб через відправку листів електронної пошти відповідати на повідомлення форумів або додавати файли до приватних фалів на Moodle.';
$string['messageinboundhost'] = 'Вхідний поштовий сервер';
$string['messageinboundhostoauth_help'] = 'Служба OAuth 2 для доступу до сервера IMAP за допомогою автентифікації XOAUTH2. Якщо служби ще не існує, її потрібно створити.';
$string['messageinboundhostpass'] = 'Пароль';
$string['messageinboundhostpass_desc'] = 'Пароль для роботи з вказаним обліковим записом електронної пошти.';
$string['messageinboundhostssl'] = 'Використовувати SSL';
$string['messageinboundhostssl_desc'] = 'Деякі поштові сервери підтримують додатковий рівень захисту за допомогою шифрування зв’язку між Moodle та сервером. Рекомендується використовувати шифрування SSL, якщо сервер його підтримує.';
$string['messageinboundhosttype'] = 'Тип сервера';
$string['messageinboundhostuser'] = 'Ім’я користувача';
$string['messageinboundhostuser_desc'] = 'Це ім’я користувача облікового запису електронної пошти.';
$string['messageinboundmailboxconfiguration_desc'] = 'Під час відправлення листів використовується формат "address+дані@example.com". Щоб система Moodle могла генерувати коректні адреси, вкажіть адресу перед знаком "@", а домен - після знаку "@". В наведеному прикладі ім’я поштової скриньки буде "address", а домен ел. пошти - "example.com". Для цього потрібно використовувати окремий обліковий запис електронної пошти.';
$string['messageprocessingerror'] = 'Ви нещодавно відправили електронною поштою листа з темою "{$a->subject}", але, на жаль, воно не може бути опрацьовано.

Детальніша інформація про цб помилку показана далі.

{$a->error}';
$string['messageprocessingerrorhtml'] = '<p>Ви нещодавно відправили електронною поштою листа з темою "{$a->subject}", але, на жаль, воно не може бути опрацьовано.</p>
<p>Детальніша інформація про цб помилку показана далі.</p>
<p>{$a->error}</p>';
$string['messageprocessingfailed'] = 'Лист з вашим повідомленням на тему "{$a->subject}" не вдається опрацювати. Виникла така помилка: "{$a->message}".';
$string['messageprocessingfailedunknown'] = 'Лист з вашим повідомленням на тему "{$a->subject}" не вдається опрацювати. Зверніться до системного адміністратора для отримання додаткової інформації.';
$string['messageprocessingsuccess'] = '{$a->plain}

Якщо ви не бажаєте отримувати такі повідомлення в майбутньому, можете відредагувати власні налаштування  повідомлень, перейшовши в браузері за посиланням {$a->messagepreferencesurl} .';
$string['messageprocessingsuccesshtml'] = '{$a->html}
<p>Якщо ви не бажаєте отримувати такі повідомлення в майбутньому, можете <a href="{$a->messagepreferencesurl}">відредагувати власні налаштування  повідомлень</a>.</p>';
$string['messageprovider:invalidrecipienthandler'] = 'Повідомлення для підтвердження того, що вхідні листи прийшли саме від вас';
$string['messageprovider:messageprocessingerror'] = 'Попередження про те, що вхідне повідомлення не вдається опрацювати';
$string['messageprovider:messageprocessingsuccess'] = 'ПІдтвердження того, що повідомлення успішно опрацьоване';
$string['name'] = 'Назва';
$string['noencryption'] = 'Відкл. - без шифрування';
$string['noexpiry'] = 'Не обмежено';
$string['oldmessagenotfound'] = 'Ви намагалися задіяти повідомлення про ручний метод аутентифікації, але таке повідомлення не знайдено. Це може трапитися, оскільки ця процедура вже була пройдена або час дії цього повідомлення вже вичерпався.';
$string['oneday'] = 'Один день';
$string['onehour'] = 'Одна година';
$string['oneweek'] = 'Один тиждень';
$string['oneyear'] = 'ОДин рік';
$string['pluginname'] = 'Налаштування вхідного повідомлення';
$string['privacy:metadata:coreuserkey'] = 'Ключі користувача для перевірки отриманої електронної пошти';
$string['privacy:metadata:messagelist'] = 'Список ідентифікаторів повідомлень, які не пройшли перевірку та потребують подальшої авторизації';
$string['privacy:metadata:messagelist:address'] = 'Адреса, на яку було надіслано електронний лист';
$string['privacy:metadata:messagelist:messageid'] = 'Ідентифікатор повідомлення';
$string['privacy:metadata:messagelist:timecreated'] = 'Час, коли був зроблений запис';
$string['privacy:metadata:messagelist:userid'] = 'Ідентифікатор користувача, якому потрібно схвалити повідомлення';
$string['replysubjectprefix'] = 'Re:';
$string['requirevalidation'] = 'Підтверджувати адресу відправника';
$string['ssl'] = 'SSL (автовизначення SSL версії)';
$string['sslv2'] = 'SSLv2 (Примусово SSL Версії 2)';
$string['sslv3'] = 'SSLv3 (примусове використання SSL версії 3)';
$string['taskcleanup'] = 'Очистити неперевірену вхідну пошту';
$string['taskpickup'] = 'Забрати вхідну пошту';
$string['tls'] = 'TLS (TLS; запущено за допомогою протоколу по незашифрованому каналу; РЕКОМЕНДУЄТЬСЯ ініціювати безпечне з\'єднання)';
$string['tlsv1'] = 'TLSv1 (пряме підключення до сервера TLS версії 1.x)';
$string['validateaddress'] = 'Підтверджувати адресу відправника';
$string['validateaddress_help'] = 'При отриманні повідомлення від користувача, Moodle порівнює адресу електронної пошти відправника з адресою електронної пошти в обліковому записі користувача.

Якщо адреси не співпадають, то користувач отримує повідомлення, щоб підтвердити, що він справді відправляв листа.

Якщо цей параметр відключено, то адреса електронної пошти відправника не перевіряється взагалі.';
