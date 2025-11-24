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
 * Strings for component 'enrol_lti', language 'uk', version '4.5'.
 *
 * @package     enrol_lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcontent'] = 'Додайте вміст';
$string['adddeployment:deploymentid'] = 'Ідентифікатор розгортання';
$string['adddeployment:deploymentid_help'] = 'Кожному розгортанню інструменту (цей сайт) на платформі буде присвоєно ідентифікатор розгортання, який є унікальним для реєстрації. Ідентифікатор розгортання має бути зареєстрований в інструменті (цей сайт), перш ніж буде дозволено запуск із відповідного розгортання інструменту.';
$string['adddeployment:invaliddeploymentiderror'] = 'Недійсний ідентифікатор розгортання. Ідентифікатор розгортання вже існує для реєстрації цієї програми.';
$string['adddeployment:name'] = 'Назва розгортання';
$string['addtocourse'] = 'Додати до курсу';
$string['addtogradebook'] = 'Додати в журнал оцінок';
$string['allowframeembedding'] = 'Зверніть увагу: Рекомендується включити параметр сайту "Дозволити вкладення у фрейм", щоб засоби показувалися у фреймі, а не у новому вікні.';
$string['authltimustbeenabled'] = 'Зверніть увагу: Цей модуль вимагає. щоб також був включений модуль ЗВН аутентифікації.';
$string['cartridgeurl'] = 'URL-адреса картриджа';
$string['cookiesarerequired'] = 'Файли cookie блокуються вашим браузером';
$string['cookiesarerequiredinfo'] = 'Не вдається запустити цей інструмент, оскільки ваш браузер блокує файли cookie третіх сторін.
<br><br>
Щоб скористатися цим інструментом, спробуйте змінити налаштування файлів cookie у браузері або скористайтеся іншим браузером.';
$string['copiedtoclipboard'] = '{$a} скопійовано в буфер обміну';
$string['copytoclipboard'] = 'Копіювати в буфер обміну';
$string['couldnotestablishproxy'] = 'Не вдалося встановити проксі із споживачем.';
$string['customproperties'] = 'Користувацькі властивості';
$string['deeplinkingurl'] = 'URL-адреса глибокого посилання';
$string['deletedactivity'] = 'Видалена діяльність';
$string['deletedactivityalt'] = 'Активність, спільну для цього екземпляра, видалено';
$string['deletedactivitydescription'] = 'Активність, спільну для цього екземпляра, видалено. Ви можете вибрати іншу дію для спільного використання, відредагувавши примірник, або, якщо він більше не потрібний, ви можете просто видалити примірник. Видалення екземпляра призведе до видалення всіх пов’язаних реєстрацій користувачів.';
$string['deploymentadd'] = 'Додайте розгортання';
$string['deploymentaddnotice'] = 'Додано розгортання';
$string['deploymentdelete'] = 'Видалити розгортання';
$string['deploymentdeleteconfirm'] = 'Попередження: видалення розгортання призведе до втрати доступу для всіх користувачів, які переходять за посиланнями на ресурси, пов’язаними з розгортанням цього інструменту на платформі. Служби синхронізації учасників та оцінок також буде видалено для цих ресурсів. Ви впевнені, що хочете видалити ідентифікатор розгортання "{$a}"?';
$string['deploymentdeletenotice'] = 'Розгортання видалено';
$string['deploymentid'] = 'Ідентифікатор розгортання';
$string['deployments'] = 'Розгортання';
$string['deploymentsinfo'] = 'Ідентифікатор розгортання генерується платформою, коли інструмент стає доступним у контексті. Це може статися під час реєстрації або пізніше, коли інструмент стане доступним для певного курсу або категорії. Тут потрібно ввести ідентифікатор розгортання, перш ніж буде дозволено запуск із розгортання інструменту.';
$string['details'] = 'Деталі';
$string['editplatformdetails'] = 'Редагувати деталі платформи';
$string['endpointltiversionnotice'] = 'Наведені нижче кінцеві точки інструменту призначені лише для ручного налаштування LTI 1.3. Для попередніх версій (1.1/2.0) деталі для споживачів можна знайти на сторінці «Опубліковано як інструменти LTI», доступною через навігацію курсу.';
$string['enrolenddate'] = 'Дата завершення';
$string['enrolenddate_help'] = 'Якщо включено, то користувачі можуть мати доступ лише до вказаної дати.';
$string['enrolenddateerror'] = 'Дата завершення зарахування не може бути раніше ніж дата початку зарахування';
$string['enrolisdisabled'] = 'Модуль "Публікації як ЗВН засобу" відключено.';
$string['enrolltiversionincorrect'] = 'Ресурс не налаштовано для використання на застарілих LTI (версії 1.1/2.0). Будь ласка, зверніться до адміністратора цього інструменту.';
$string['enrolmentfinished'] = 'Зарахування закінчено.';
$string['enrolmentnotstarted'] = 'Зарахування ще не почато.';
$string['enrolperiod'] = 'Термін навчання';
$string['enrolperiod_help'] = 'Термін, протягом якого зарахування буде дійсним, починається з моменту запису користувачем себе з віддаленої системи. Якщо параметр відключено, то термін ніяк не обмежується.';
$string['enrolstartdate'] = 'Дата початку';
$string['enrolstartdate_help'] = 'Якщо включено, то користувачі можуть мати доступ лише з вказаної дати.';
$string['existingregistrationerror'] = 'Для цього ідентифікатора емітента та клієнта вже існує реєстрація.';
$string['failedrequest'] = 'Помилка запиту. Причина: {$a->reason}';
$string['frameembeddingnotenabled'] = 'Для доступу до засобу, будь ласка, перейдіть за посиланням нижче.';
$string['gradesync'] = 'Синхронізація оцінок';
$string['gradesync_help'] = 'Чи передавати оцінки із засобу до віддаленої системи (клієнта ЗВН)';
$string['incorrecttoken'] = 'Токен був неправильним. Перевірте URL-адресу та повторіть спробу або зверніться до адміністратора цього інструмента.';
$string['invalidexpiredregistrationurl'] = 'Недійсна або прострочена реєстраційна URL-адреса. Перевірте URL-адресу та повторіть спробу.';
$string['invalidrequest'] = 'Невірний запит';
$string['invalidtoolconsumer'] = 'Недійсний споживач інструменту.';
$string['jwksurl'] = 'JWKS URL';
$string['launchdetails'] = 'Деталі запуску';
$string['launchdetails_help'] = 'Для налаштування інструмента потрібні URL-адреса картриджа (також називається URL-адресою конфігурації) плюс секретна URL-адреса або URL-адреса запуску.';
$string['launchurl'] = 'URL-адреса запуску';
$string['loginurl'] = 'Ініціювати URL-адресу входу';
$string['lti13'] = 'LTI Advantage';
$string['lti13launchdetails'] = 'Деталі запуску';
$string['lti13launchdetails_help'] = 'URL-адреса запуску та спеціальні властивості потрібні лише під час ручного налаштування посилання на ресурс на платформі. Де можливо, вчителі повинні віддавати перевагу процесу вибору вмісту (глибинного посилання) для створення посилань на ресурси.';
$string['lti:config'] = 'Налаштовувати екземпляри "Публікації як ЗВН засобу"';
$string['lti:unenrol'] = 'Відраховувати користувачів з курсу';
$string['ltiadvdynregerror:invalidopenidconfigjson'] = 'Виникла проблема із отриманням конфігурації OpenID з платформи. Результат був недійсним JSON. Це також може бути викликано заблокованими конфігураціями хостів. Переконайтеся, що ваш сайт налаштовано на підключення до домену платформи, і повторіть спробу, використовуючи нову реєстраційну URL-адресу.';
$string['ltiadvlauncherror:invaliddeployment'] = 'Недійсні дані запуску або конфігурація інструменту. Не вдалося знайти розгортання (ідентифікатор розгортання: {$a}).';
$string['ltiadvlauncherror:invalidid'] = 'Недійсні дані запуску. Ресурс \'{$a}\' недоступний або не існує.';
$string['ltiadvlauncherror:invalidregistration'] = 'Недійсні дані запуску або конфігурація інструменту. Не вдалося знайти реєстрацію платформи (емітент: {$a->platform}, ідентифікатор клієнта: {$a->clientid}).';
$string['ltiadvlauncherror:missingid'] = 'Недійсні дані запуску. Спеціальне поле "id" потрібне для запуску діяльності або ресурсу через LTI Advantage.';
$string['ltilegacy'] = 'Legacy LTI (1.1/2.0)';
$string['ltilegacydeprecatednotice'] = 'Застарілі інструменти LTI (1.1/2.0) не підтримуються. Тепер вміст має надаватися за допомогою LTI Advantage.';
$string['ltiversion'] = 'Версія LTI';
$string['ltiversion_help'] = 'Версія LTI, яка буде використовуватися для доступу до опублікованого вмісту. LTI Advantage дозволяє публікувати вміст на попередньо зареєстрованих платформах без необхідності вносити зміни на платформі щоразу, коли публікується новий вміст. Контракт безпеки укладається між платформою та інструментом. Застарілі версії (1.1 і 2.0) вимагають створення нового інструмента реєстрації для кожного нового опублікованого вмісту, оскільки кожен фрагмент опублікованого вмісту має власний договір безпеки з сайтом споживача і повинен бути налаштований на замовлення підставі справи.';
$string['managedeployments'] = 'Керуйте розгортанням';
$string['maxenrolled'] = 'Максимум зарахованих користувачів';
$string['maxenrolled_help'] = 'Максимальне число зовнішніх користувачів, які можуть отримати доступ до засобу. Якщо вказати нуль, то максимум не обмежується.';
$string['maxenrolledreached'] = 'Досягнуто максимуму зовнішніх користувачів, яким дозволено доступ до засобу.';
$string['membersync'] = 'Синхронізація користувачів';
$string['membersync_help'] = 'Чи запланована задача синхронізує зареєстрованих користувачів у віддаленій системі з реєстрацією на цьому курсі, створення облікового запису для кожного віддаленого користувача, якщо це необхідно, і реєстрацію чи скасування їх за потреби. Якщо встановлено значення ні, у момент, коли віддалений користувач отримає доступ до інструменту, для нього буде створено обліковий запис, і він буде автоматично зареєстрований.';
$string['membersyncmode'] = 'Режим синхронізації користувачів';
$string['membersyncmode_help'] = 'Як віддалені користувачі повинні бути зараховані та/або відраховані з курсу.';
$string['membersyncmodeenrolandunenrol'] = 'Зараховувати нових та відраховувати відсутніх користувачів';
$string['membersyncmodeenrolnew'] = 'Зарахувати нових користувачів';
$string['membersyncmodeunenrolmissing'] = 'Відрахувати відсутніх користувачів';
$string['moodle'] = 'Moodle';
$string['nodeployments'] = 'Розгортання інструментів не знайдено';
$string['nopublishedcontent'] = 'Жодних ресурсів чи заходів поки що не опубліковано';
$string['noregisteredplatforms'] = 'Немає зареєстрованих платформ';
$string['notoolsprovided'] = 'Не надано засобів';
$string['opensslconfiginvalid'] = 'LTI 1.3 вимагає, щоб дійсний openssl.cnf був налаштований і доступний для вашого веб-сервера. Зверніться до адміністратора сайту, щоб налаштувати та увімкнути openssl для цього сайту.';
$string['opentool'] = 'Відкрити засіб';
$string['platformdetails'] = 'Деталі платформи';
$string['platformdetailsinfo'] = 'Після того, як інструмент буде налаштовано на платформі, деталі платформи мають бути записані тут, щоб завершити реєстрацію.
<ul>
<li>Для динамічних реєстрацій ця інформація буде встановлена автоматично, і ніяких додаткових змін не потрібно. </li>
<li>Для ручної реєстрації цю інформацію необхідно вручну скопіювати з платформи.</li>
</ul>';
$string['pluginname'] = 'Публікувати як ЗВН засіб';
$string['pluginname_desc'] = 'Модуль "Публікувати як ЗВН засіб", разом з модулем аутентифікації ЗВН, дозволяє зовнішнім користувачам отримати доступ до вказаних курсів та їх діяльностей. Іншими словами, Moodel діє як провайдер ЗВН засобів.';
$string['privacy:metadata:enrol_lti_users'] = 'Список користувачів, зареєстрованих через постачальника LTI';
$string['privacy:metadata:enrol_lti_users:lastaccess'] = 'Час останнього доступу користувача до курсу';
$string['privacy:metadata:enrol_lti_users:lastgrade'] = 'Остання оцінка, яку користувач мав';
$string['privacy:metadata:enrol_lti_users:timecreated'] = 'Час реєстрації користувача';
$string['privacy:metadata:enrol_lti_users:userid'] = 'Ідентифікатор користувача';
$string['provisioningmode'] = 'Режим надання';
$string['provisioningmode_help'] = 'Цей параметр визначає, як облікові записи обробляються під час першого запуску. Підтримуються кілька режимів:
<ul>
<li>Тільки нові облікові записи (автоматично). Облікові записи будуть автоматично створені для користувачів, які запускатимуться з платформи. Це значення за замовчуванням для студентських запусків. </li>
<li>Існуючі та нові облікові записи (підказка). Користувачеві буде надано вибір, що йому робити. Вони можуть вирішити пов’язати наявний обліковий запис або створити новий обліковий запис для них. Це найбільш гнучкий варіант і стандартний для запуску вчителя. Лише наявні облікові записи (підказка). </li>
<li>Користувачеві буде запропоновано зв’язати наявний обліковий запис, і він не зможе отримати доступ до ресурсів інструменту без цього.</li>
</ul>';
$string['provisioningmodestudentlaunch'] = 'Студент перший запуск режиму надання';
$string['provisioningmodeteacherlaunch'] = 'Учитель спочатку запускає режим надання';
$string['publishedcontent'] = 'Опублікований контент';
$string['publishedcontent_help'] = 'Опублікований ресурс або діяльність можна використовувати на зареєстрованих платформах за допомогою процесу вибору вмісту (глибинного посилання). Крім того, посилання на ресурс можна створити вручну на платформі, використовуючи URL-адресу запуску та надані спеціальні властивості.';
$string['registeredplatforms'] = 'Зареєстровані платформи';
$string['registeredplatformsltiversionnotice'] = 'Платформи, перелічені нижче, зареєстровані для зв’язку LTI 1.3. Для попередніх версій реєстрація споживача не потрібна.';
$string['registerplatform:accesstokenurl'] = 'URL маркера доступу';
$string['registerplatform:accesstokenurl_help'] = 'URL-адреса, на яку запити маркера доступу надсилатимуться інструментом. Буде надано платформою.';
$string['registerplatform:authrequesturl'] = 'URL-адреса запиту на автентифікацію';
$string['registerplatform:authrequesturl_help'] = 'Інструмент надсилатиме URL-адресу, на яку запити автентифікації OpenID Connect. Буде надано платформою.';
$string['registerplatform:clientid'] = 'Ідентифікатор клієнта';
$string['registerplatform:clientid_help'] = 'Рядок, який використовується для ідентифікації реєстрації інструмента на платформі. Буде надано платформою.';
$string['registerplatform:duplicateregistrationerror'] = 'Недійсний ідентифікатор клієнта. Цей ідентифікатор клієнта вже зареєстровано для наданого ідентифікатора платформи.';
$string['registerplatform:invalidurlerror'] = 'Недійсна URL-адреса. Ви включили http:// чи https://?';
$string['registerplatform:jwksurl'] = 'URL-адреса набору відкритих ключів';
$string['registerplatform:jwksurl_help'] = 'Відкритий набір ключів або URL-адреса JWKS, що використовується для отримання відкритого ключа платформи. Буде надано платформою.';
$string['registerplatform:name'] = 'Назва платформи';
$string['registerplatform:name_help'] = 'Коротка назва, що описує платформу. Це можна змінити в будь-який час.';
$string['registerplatform:platformid'] = 'Ідентифікатор платформи (емітент)';
$string['registerplatform:platformid_help'] = 'URL-адреса, що ідентифікує навчальну платформу третьої сторони. Буде надано платформою.';
$string['registerplatformadd'] = 'Зареєструйте платформу';
$string['registerplatformaddnotice'] = 'Додано реєстрацію на платформі';
$string['registerplatformdelete'] = 'Видалити реєстрацію платформи';
$string['registerplatformdeleteconfirm'] = 'Ви впевнені, що хочете видалити реєстрацію для платформи "{$a}"? Це також видалить усі розгортання інструментів, збережені для цієї реєстрації.';
$string['registerplatformdeletenotice'] = 'Реєстрацію платформи видалено';
$string['registerplatformedit'] = 'Редагувати реєстрацію';
$string['registerplatformeditnotice'] = 'Реєстрацію на платформі оновлено';
$string['registration'] = 'Опублікована реєстрація інструменту';
$string['registrationdeeplinklabel'] = 'Додайте вміст від {$a}';
$string['registrationdynamic'] = 'Динамічна реєстрація';
$string['registrationmanual'] = 'Ручна реєстрація';
$string['registrationresourcelinklabel'] = 'Запуск вмісту від {$a}';
$string['registrationstatus'] = 'Статус';
$string['registrationstatusactive'] = 'Активний';
$string['registrationstatuspending'] = 'Очікується';
$string['registrationurl'] = 'URL реєстрації';
$string['registrationurl_help'] = 'Якщо використовується реєстраційна URL-адреса (також називається проксі-URL), інструмент налаштовується автоматично.';
$string['registrationurlinfomessage'] = 'Якщо платформа підтримує динамічну реєстрацію, використовуйте реєстраційну URL-адресу нижче. Для отримання додаткової інформації про динамічну реєстрацію дивіться документацію <a href="{$a}">Опублікувати як інструмент LTI</a>.';
$string['remotesystem'] = 'Віддалена система';
$string['requirecompletion'] = 'Вимагає закінчення курсу або діяльності до синхронізації оцінок';
$string['returnurlnotset'] = 'URL-адресу повернення не встановлено.';
$string['roleinstructor'] = 'Роль для викладача';
$string['roleinstructor_help'] = 'Роль, яка надається у засобі зовнішньому викладачеві.';
$string['rolelearner'] = 'Роль для студента';
$string['rolelearner_help'] = 'Роль, яка надається у засобі зовнішньому студенту.';
$string['secret'] = 'Секретний ключ';
$string['secret_help'] = 'Рядок символів, який є спільним із зовнішньою системою (клієнтом ЗВН) для забезпечення доступу до засобу.';
$string['sharedexternaltools'] = 'Опубліковано як ЗВН засіб';
$string['successfulregistration'] = 'Успішна реєстрація';
$string['tasksyncgrades'] = 'Синхронізація оцінок модуля "Публікувати як ЗВН засіб"';
$string['tasksyncmembers'] = 'Синхронізація користуачів модуля "Публікувати як ЗВН засіб"';
$string['tooldetails'] = 'Деталі інструменту';
$string['toolsprovided'] = 'Опубліковані засоби';
$string['toolsprovided_help'] = 'Інструментом можна поділитися з іншим сайтом, надавши деталі запуску або реєстраційну URL-адресу.';
$string['tooltobeprovided'] = 'Засоби до публікації';
$string['toolurl'] = 'URL-адреса інструмента';
$string['userdefaultvalues'] = 'Типові значення користувача';
$string['viewplatformdetails'] = 'Переглянути деталі платформи';
$string['viewtoolendpoints'] = 'Перегляд кінцевих точок інструмента';
