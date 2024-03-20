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
 * Strings for component 'webservice', language 'uk', version '4.1'.
 *
 * @package     webservice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessexception'] = 'Виняток з контролю доступу';
$string['actwebserviceshhdr'] = 'Активні протоколи веб-сервісу';
$string['addaservice'] = 'Додати сервіс';
$string['addcapabilitytousers'] = 'Перевірити можливості користувача';
$string['addcapabilitytousersdescription'] = 'Користувачі повинні мати дві можливості - webservice:createtoken та можливість відповідних використовуваних протоколів, наприклад, webservice/rest:use, webservice/soap:use. Для досягнення цього, створіть роль веб-сервісу з дозволеними відповідними можливостями і надайте її користувачам веб-сервісів, як системну роль.';
$string['addexternalservice'] = 'Додати зовнішній сервіс';
$string['addfunction'] = 'Додати функцію';
$string['addfunctionhelp'] = 'Виберіть функцію для додавання до сервісу.';
$string['addfunctions'] = 'Додати функції';
$string['addfunctionsdescription'] = 'Виберіть необхідні функції для новоствореної служби.';
$string['addrequiredcapability'] = 'Призначення/Скасування необхідної можливості';
$string['addservice'] = 'Додати новий сервіс: {$a->name} (id: {$a->id})';
$string['addservicefunction'] = 'Додати функцію до сервісу "{$a}"';
$string['allusers'] = 'Всі користувачі';
$string['apiexplorer'] = 'API Explorer';
$string['apiexplorernotavalaible'] = 'API Explorer поки не доступний';
$string['arguments'] = 'Аргументи';
$string['authmethod'] = 'Метод аутентифікації';
$string['callablefromajax'] = 'Викликається з AJAX';
$string['cannotcreatetoken'] = 'Немає прав для створення маркера для сервісу {$a}.';
$string['cannotgetcoursecontents'] = 'Не вдається отримати контент курсу';
$string['checkusercapability'] = 'Перевірка можливостей користувача';
$string['checkusercapabilitydescription'] = 'Користувач повинен мати відповідні можливості відповідно до використовуваних протоколів, наприклад webservice/rest:use, webservice/soap:use. Для досягнення цього потрібно створити роль веб-сервісів з дозволеними можливостями та надати її користувачам веб-сервісів, як системну роль.';
$string['configwebserviceplugins'] = 'З міркувань безпеки, тільки протоколи, які використовуються повинні бути включені.';
$string['context'] = 'Контекст';
$string['createservicedescription'] = 'Сервіс встановлює функції веб-сервісу. Ви дозволите користувачу доступ до нового сервісу. На сторінці <strong> Додати сервіс</strong> вкажіть опції "Включити"  і "Авторизовані користувачі". Виберіть "Не вимагається можливість".';
$string['createserviceforusersdescription'] = 'Сервіс встановлює функції веб-сервісу.  Ви дозволите користувачам доступ до нового сервісу. На сторінці <strong> Додати сервіс</strong> включіть опцію "Включити"  і виключіть "Авторизовані користувачі". Виберіть "Не вимагається можливість".';
$string['createtoken'] = 'Створення маркера';
$string['createtokenforuser'] = 'Створити маркер для користувача';
$string['createtokenforuserdescription'] = 'Створити маркер для користувача веб-сервісів';
$string['createuser'] = 'Створити специфічного користувача';
$string['createuserdescription'] = 'Користувач веб-сервісів необхідний для представлення системи управління Moodle.';
$string['criteriaerror'] = 'Недостатньо прав для пошуку за критерієм.';
$string['default'] = 'Типово до "{$a}"';
$string['deleteaservice'] = 'Видалити сервіс';
$string['deleteservice'] = 'Видалити сервіс: {$a->name} (id: {$a->id})';
$string['deleteserviceconfirm'] = 'Видалення сервісу також видалить маркери пов’язані з ним. Ви дійсно хочете видалити зовнішній сервіс "{$a}"?';
$string['deletetoken'] = 'Видалити маркер';
$string['deletetokenconfirm'] = 'Ви дійсно хочете видалити цей маркер веб-сервісу для <strong>{$a->user}</strong> в сервісі <strong>{$a->service}</strong>?';
$string['deprecated'] = 'Застаріле';
$string['disabledwarning'] = 'Всі протоколи веб-сервісів відключено. Опцію "Включити веб-сервіси" можна знайти в додаткових параметрах.';
$string['doc'] = 'Документація';
$string['docaccessrefused'] = 'Вам не дозволено переглядати документацію цього маркера';
$string['downloadfiles'] = 'Можна завантажувати файли';
$string['downloadfiles_help'] = 'Якщо включено, то будь-який користувач може завантажувати файли зі своїми ключами. Звичайно вони обмежуються файлами, які можна завантажувати на сайт.';
$string['editaservice'] = 'Редагувати сервіс';
$string['editexternalservice'] = 'Редагувати зовнішній сервіс';
$string['editservice'] = 'Редагувати сервіс: {$a->name} (id: {$a->id})';
$string['enabled'] = 'Дозволено';
$string['enabledocumentation'] = 'Дозволити документацію розробників';
$string['enabledocumentationdescription'] = 'Детальна документація веб-сервісів доступна для включених протоколів.';
$string['enableprotocols'] = 'Включити протоколи';
$string['enableprotocolsdescription'] = 'Принаймні один протокол повинен бути включений. З міркувань безпеки, тільки протоколи, які будуть використовуватися, повинні бути включені.';
$string['enablews'] = 'Включити веб-сервіси';
$string['enablewsdescription'] = 'Веб-сервіси повинні бути дозволені в Додаткових параметрах.';
$string['entertoken'] = 'Введіть ключ захисту:';
$string['error'] = 'Помилка: {$a}';
$string['errorcatcontextnotvalid'] = 'Ви не можете виконувати функції в контексті категорії (код категорії:{$a->catid}). Повідомлення помилки контексту: {$a->message}';
$string['errorcodes'] = 'Повідомлення помилки';
$string['errorcoursecontextnotvalid'] = 'Ви не можете виконувати функції в контексті курсу (код курсу:{$a->courseid}). Повідомлення помилки контексту: {$a->message}';
$string['errorinvalidparam'] = 'Параметр "{$a}" неправильний.';
$string['errornotemptydefaultparamarray'] = 'Опис параметру веб-сервісу з ім’ям \'{$a}\'  є одно- або багатоструктурним. Типово може бути тільки порожній масив. Перевірте опис веб-сервісу.';
$string['erroroptionalparamarray'] = 'Параметр опису веб-сервісу з назвою \'{$a}\' є одиничною або кількома структурою. Його не можна встановити як VALUE_OPTIONAL. Перевірте опис веб-сервісу.';
$string['eventwebservicefunctioncalled'] = 'Викликано функцію веб-сервісу';
$string['eventwebserviceloginfailed'] = 'Помилка входу веб-сервісу';
$string['eventwebserviceservicecreated'] = 'Веб-сервіс створено';
$string['eventwebserviceservicedeleted'] = 'Веб-сервіс видалено';
$string['eventwebserviceserviceupdated'] = 'Оновлено веб-сервіс';
$string['eventwebserviceserviceuseradded'] = 'Додано користувача веб-сервісу';
$string['eventwebserviceserviceuserremoved'] = 'Користувача веб-сервісу видалено';
$string['eventwebservicetokencreated'] = 'Створено маркер веб-сервісу';
$string['eventwebservicetokensent'] = 'Надіслано маркер веб-сервісу';
$string['execute'] = 'Виконувати';
$string['executewarnign'] = 'УВАГА! якщо ви натиснете виконувати, то ваша база даних буде модифікована і зміни не можуть бути скасовані автоматично!';
$string['externalservice'] = 'Зовнішній сервіс';
$string['externalservicefunctions'] = 'Функції зовнішнього сервісу';
$string['externalservices'] = 'Зовнішні сервіси';
$string['externalserviceusers'] = 'Користувачі зовнішнього сервісу';
$string['failedtolog'] = 'Помилка журналювання';
$string['filenameexist'] = 'Таке ім’я файлу вже використовується: {$a}';
$string['forbiddenwsuser'] = 'Неможливо створити маркер для непідтверджених, видалених, заблокованих користувачів або Гостей.';
$string['function'] = 'Функція';
$string['functions'] = 'Функції';
$string['generalstructure'] = 'Загальна структура';
$string['information'] = 'Інформація';
$string['installexistingserviceshortnameerror'] = 'Веб-сервіс з короткою назвою "{$a}"  вже існує. Не можна встановлювати/оновлювати сервіси з такою ж назвою.';
$string['installserviceshortnameerror'] = 'Помилка кодування: коротка назва служби "{$a}" може містити лише буквено-цифрові символи (літери та цифри), підкреслення (_), дефіс (-) або крапку (.)';
$string['invalidextparam'] = 'Неправильний параметр зовнішнього api: {$a}';
$string['invalidextresponse'] = 'Неправильна відповідь  зовнішнього api: {$a}';
$string['invalidiptoken'] = 'Неправильний маркер - ваш ІР не підтримується';
$string['invalidtimedtoken'] = 'Неправильний маркер - маркер прострочено';
$string['invalidtoken'] = 'Неправильний маркер - маркер не знайдено';
$string['iprestriction'] = 'ІР обмеження';
$string['iprestriction_help'] = 'Користувачеві потрібно буде викликати веб-сервіси з перерахованих адрес (розділено комами).';
$string['key'] = 'Ключ';
$string['keyshelp'] = 'Ключі використовуються для доступу до облікових записів Moodle із зовнішніх додатків.';
$string['loginrequired'] = 'Обмежено для користувачів, які ввійшли в систему';
$string['manageprotocols'] = 'Управління протоколами';
$string['managetokens'] = 'Управління маркерами';
$string['missingcaps'] = 'Відсутні права';
$string['missingcaps_help'] = 'Список можливостей, заявлених сервісом, яких користувач не має. Деякі функції служби можуть бути недоступними без цих можливостей.';
$string['missingpassword'] = 'Відсутній пароль';
$string['missingrequiredcapability'] = 'Можливість {$a}  не вимагається.';
$string['missingusername'] = 'Відсутнє псевдоім’я';
$string['missingversionfile'] = 'Помилка кодування: у файлі version.php відсутній компонент {$a}';
$string['nameexists'] = 'Така назва вже використовується іншим сервісом';
$string['nocapabilitytouseparameter'] = 'Користувач не має відповідних прав для використання параметра {$a}';
$string['nofunctions'] = 'Сервіс не має функцій.';
$string['norequiredcapability'] = 'Немає необхідних прав';
$string['notoken'] = 'Список маркерів порожній.';
$string['onesystemcontrolling'] = 'Одна система управління Moodle з маркером';
$string['onesystemcontrollingdescription'] = 'Наступні кроки допоможуть вам налаштувати веб-сервіс Moodle для управління Moodle. Ці заходи також допоможуть створити рекомендований маркер (ключі безпеки) для методу перевірки автентичності.';
$string['onlyseecreatedtokens'] = 'Ви можете переглядати лише створені вами маркери.';
$string['operation'] = 'Операція';
$string['optional'] = 'Додатково';
$string['passwordisexpired'] = 'Пароль застарів.';
$string['phpparam'] = 'XML-RPC (PHP структура)';
$string['phpresponse'] = 'XML-RPC (PHP структура)';
$string['postrestparam'] = 'PHP код для REST (POST запит)';
$string['potusers'] = 'Немає авторизованих користувачів';
$string['potusersmatching'] = 'Немає відповідних авторизованих користувачів';
$string['print'] = 'Друкувати все';
$string['privacy:metadata:serviceusers'] = 'Список користувачів, які можуть використовувати певні зовнішні служби';
$string['privacy:metadata:serviceusers:iprestriction'] = 'Заборонено використовувати IP-службу';
$string['privacy:metadata:serviceusers:timecreated'] = 'Дата створення запису';
$string['privacy:metadata:serviceusers:userid'] = 'Ідентифікатор користувача';
$string['privacy:metadata:serviceusers:validuntil'] = 'Дата завершення авторизації';
$string['privacy:metadata:tokens'] = 'Запис токенів для взаємодії з Moodle через веб-служби або Мобільні програми.';
$string['privacy:metadata:tokens:creatorid'] = 'Ідентифікатор користувача, який створив маркер';
$string['privacy:metadata:tokens:iprestriction'] = 'Обмеження IP-адреси для використання цього маркера';
$string['privacy:metadata:tokens:lastaccess'] = 'Дата, з якої останній раз використовувався токен';
$string['privacy:metadata:tokens:privatetoken'] = 'Більш приватний маркер, який іноді використовується для перевірки певних операцій, таких як SSO.';
$string['privacy:metadata:tokens:timecreated'] = 'Дата, з якої маркер був створений';
$string['privacy:metadata:tokens:token'] = 'Маркер користувача';
$string['privacy:metadata:tokens:tokentype'] = 'Тип маркера';
$string['privacy:metadata:tokens:userid'] = 'Ідентифікатор користувача, чий маркер є';
$string['privacy:metadata:tokens:validuntil'] = 'Дата, на яку маркер стає недійсним';
$string['privacy:request:notexportedsecurity'] = 'Не експортується з міркувань безпеки';
$string['protocol'] = 'Протокол';
$string['removefunction'] = 'Видалити';
$string['removefunctionconfirm'] = 'Ви дійсно хочете видалити функцію "{$a->function}" з сервісу "{$a->service}"?';
$string['requireauthentication'] = 'Цей метод вимагає аутентифікації з xxx правами.';
$string['required'] = 'Потрібно';
$string['requiredcapability'] = 'Потрібні права';
$string['requiredcapability_help'] = 'Якщо встановлено, то тільки користувачі з відповідними правами матимуть доступ до сервісу.';
$string['requiredcaps'] = 'Потрібні права';
$string['resettokencomplete'] = 'Вибраний маркер було скинуто';
$string['resettokenconfirm'] = 'Ви дійсно хочете перевстановити ключ веб-сервісу для <strong>{$a->user}</strong> на сервісі <strong>{$a->service}</strong>?';
$string['resettokenconfirmsimple'] = 'Ви дійсно хочете перевстановити цей ключ? Будь-які збережені посилання, що містять старий ключ більше не будуть працювати.';
$string['response'] = 'Відповідь';
$string['restcode'] = 'REST';
$string['restexception'] = 'REST';
$string['restoredaccountresetpassword'] = 'Відновлення облікового запису вимагає перевстановлення паролю перед отриманням маркера.';
$string['restparam'] = 'REST (POST параметри)';
$string['restrictedusers'] = 'Тільки авторизовані користувачі';
$string['restrictedusers_help'] = 'Цей параметр визначає, чи будуть всі користувачі з дозволом на створення маркера вебсервісу мати можливість генерувати маркер для цього сервісу за допомогою своєї сторінки ключів безпеки або тільки авторизовані користувачі зможуть зробити це.';
$string['securitykey'] = 'Ключ захисту';
$string['securitykeys'] = 'Ключі захисту';
$string['selectauthorisedusers'] = 'Виберіть авторизованих користувачів';
$string['selectedcapability'] = 'Вибрано';
$string['selectedcapabilitydoesntexit'] = 'Поточне налаштування вимагає можливості ({$a}), якої ще не створено. Будь ласка змініть це та збережіть зміни.';
$string['selectservice'] = 'Виберіть сервіс';
$string['selectspecificuser'] = 'Виберіть специфічного користувача';
$string['selectspecificuserdescription'] = 'Додати користувача веб-сервісів, як авторизованого користувача.';
$string['service'] = 'Сервіс';
$string['servicehelpexplanation'] = 'Сервіс - це набір функціоналу. Сервіс може бути доступним всім користувачам або тільки певним користувачам.';
$string['servicename'] = 'Назва сервісу';
$string['servicenotavailable'] = 'Веб-сервіс недоступний. (Він не існує або може бути вимкнений.)';
$string['servicerequireslogin'] = 'Веб-сервіс недоступний. (Сеанс вийшов із системи або закінчився.)';
$string['servicesbuiltin'] = 'Вбудовані сервіси';
$string['servicescustom'] = 'Користувацькі сервіси';
$string['serviceusers'] = 'Авторизовані користувачі';
$string['serviceusersettings'] = 'Налаштування';
$string['serviceusersmatching'] = 'Відповідності авторизованих користувачів';
$string['serviceuserssettings'] = 'Змінити налаштування для авторизованих користувачів';
$string['shortnametaken'] = 'Коротке ім\'я вже використовується для іншого сервісу ({$a})';
$string['simpleauthlog'] = 'Вхід з простою аутентифікацією';
$string['step'] = 'Крок';
$string['supplyinfo'] = 'Детальніше';
$string['testauserwithtestclientdescription'] = 'Зімітуйте зовнішній доступ до служби за допомогою тестового клієнта веб-служби. Перш ніж це зробити, увійдіть як користувач із можливістю moodle/webservice:createtoken та отримайте ключ безпеки (токен) на сторінці налаштувань користувача. Ви будете використовувати цей маркер у тестовому клієнті. У тестовому клієнті також виберіть увімкнений протокол з автентифікацією токена. <strong>ПОПЕРЕДЖЕННЯ: Функції, які ви тестуєте, ВИКОНАЮТЬСЯ для цього користувача, тому будьте обережні, що ви вибираєте для тестування!</strong>';
$string['testclient'] = 'Тестовий клієнт веб-сервісу';
$string['testclientdescription'] = '* Тестовий клієнт веб-служби <strong>виконує</strong> функції для REAL. Не тестуйте функції, які ви не знаєте.<br/>
* Усі існуючі функції веб-сервісу ще не реалізовані в тестовому клієнті. <br/>
* Щоб переконатися, що користувач не може отримати доступ до деяких функцій, ви можете протестувати деякі функції, які ви не дозволили.<br/>
* Щоб побачити чіткіші повідомлення про помилки, встановіть налагодження на <strong>{$a->mode}</strong> у {$a->atag} .';
$string['testwithtestclient'] = 'Тестувати сервіс';
$string['testwithtestclientdescription'] = 'Моделювання зовнішнього доступу до сервісу за допомогою тестового клієнта веб-сервісу. Використовуйте включений протокол з маркером перевірки автентичності. <strong> УВАГА: функції, які тестуватимуться БУДУТЬ ВИКОНУВАТИСЯ НАСПРАВДІ, так що будьте обережні з тим, що ви обрали для тестування!</strong>';
$string['token'] = 'Маркер';
$string['tokenauthlog'] = 'Маркер аутентифікації';
$string['tokencreatedbyadmin'] = 'Може бути перевстановлено тільки адміністратором (*)';
$string['tokencreator'] = 'Творець';
$string['tokenfilter'] = 'Фільтр маркерів';
$string['tokenfilterreset'] = 'Показати всі токени';
$string['tokenfiltersubmit'] = 'Показати лише відповідні маркери';
$string['unknownoptionkey'] = 'Невідомий ключ опції ({$a})';
$string['unnamedstringparam'] = 'Рядок параметру не має назви';
$string['updateusersettings'] = 'Оновити';
$string['uploadfiles'] = 'Може завантажувати файли';
$string['uploadfiles_help'] = 'Якщо включено, будь-який користувач може завантажувати файли з їх ключами безпеки в свою область особистих файлів або область файлів проекту. Для всіх файлів  користувача застосовуються стандартні квоти.';
$string['userasclients'] = 'Користувачі як клієнти з ключем (маркером)';
$string['userasclientsdescription'] = 'Наступні кроки допоможуть вам налаштувати веб-сервіс Moodle для користувачів як клієнтів. Ці кроки також допомагають налаштувати рекомендований метод аутентифікації маркерів (ключів безпеки). У цьому випадку користувач створить свій маркер зі сторінки ключів безпеки на сторінці налаштувань.';
$string['usermissingcaps'] = 'Відсутні права: {$a}';
$string['usernameorid'] = 'Псевдоім’я / Код користуавча';
$string['usernameorid_help'] = 'Вкажіть псевдоім’я або код користувача.';
$string['usernameoridnousererror'] = 'Не знайдено користувачів з таким псевдоім’ям/кодом користувача';
$string['usernameoridoccurenceerror'] = 'Знайдено більше одного користувача з таким псевдоім’ям. Будь ласка, вкажіть код користувача.';
$string['usernotallowed'] = 'Користувачу не дозволено цей сервіс. Спочатку вам потрібно дозволити цього користувача на адміністративній сторінці {$a} дозволених користувачів.';
$string['userservices'] = 'Користувацькі служби: {$a}';
$string['usersettingssaved'] = 'Налаштування користувача збережено';
$string['validuntil'] = 'Діє до';
$string['validuntil_help'] = 'Якщо встановлено, то сервіс буде деактивовано для цього користувача після цієї дати.';
$string['webservice'] = 'Веб-сервіс';
$string['webservices'] = 'Веб-сервіси';
$string['webservicesoverview'] = 'Огляд';
$string['webservicetokens'] = 'Маркери веб-сервісу';
$string['wrongusernamepassword'] = 'Неправильні псевдоім’я та пароль';
$string['wsaccessuserdeleted'] = 'Відмовлено у доступі, оскільки користувача видалено: {$a}';
$string['wsaccessuserexpired'] = 'Відмовлено у доступі, оскільки пароль користувача застарів: {$a}';
$string['wsaccessusernologin'] = 'Відмовлено у доступі, оскільки вхід користувача тимчасово припинено: {$a}';
$string['wsaccessusersuspended'] = 'Відмовлено у доступі, оскільки обліковий запис користувача заблоковано: {$a}';
$string['wsaccessuserunconfirmed'] = 'Відмовлено у доступі, оскільки користувач не підтверджений: {$a}';
$string['wsclientdoc'] = 'Документація клієнту веб-сервісу Moodle';
$string['wsdocapi'] = 'Документація API';
$string['wsdocumentation'] = 'Документація веб-сервісу';
$string['wsdocumentationdisable'] = 'Документація веб-сервісу відключена.';
$string['wsdocumentationintro'] = 'Щоб створити клієнта ми радимо вам прочитати {$a->doclink}';
$string['wsdocumentationlogin'] = 'або введіть псевдоім’я та пароль вашого веб-сервісу';
$string['wspassword'] = 'Пароль веб-сервісу';
$string['wsusername'] = 'Псевдоім’я  веб-сервісу';
