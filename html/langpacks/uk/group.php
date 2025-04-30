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
 * Strings for component 'group', language 'uk', version '4.4'.
 *
 * @package     group
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addedby'] = 'Додано {$a}';
$string['addgroup'] = 'Додати користувача до групи';
$string['addgroupstogrouping'] = 'Додати групу до групування';
$string['addgroupstogroupings'] = 'Додати/видалити групи';
$string['adduserstogroup'] = 'Додати/видалити користувачів';
$string['allocateby'] = 'Визначити членів';
$string['anygrouping'] = '[Будь-яке групування]';
$string['autocreategroups'] = 'Автостворення груп';
$string['backtogroupings'] = 'Повернутися до групування';
$string['backtogroups'] = 'Повернутися до груп';
$string['badnamingscheme'] = 'Повинен містити один символ \'@\' або \'#\'';
$string['byfirstname'] = 'Сортувати за Ім\'ям, Прізвищем';
$string['byidnumber'] = 'Сортувати за кодом';
$string['bylastname'] = 'Сортувати за Прізвищем, Ім\'ям';
$string['createautomaticgrouping'] = 'Автоматично створити групування';
$string['creategroup'] = 'Створити групу';
$string['creategrouping'] = 'Створити групування';
$string['creategroupinselectedgrouping'] = 'Створити групу в групуванні';
$string['createingrouping'] = 'Групувати автостворені групи';
$string['createorphangroup'] = 'Створити окрему групу';
$string['csvdelimiter'] = 'CSV роздільник';
$string['databaseupgradegroups'] = 'Поточна версія груп - {$a}';
$string['defaultgrouping'] = 'Типове Групування';
$string['defaultgroupingname'] = 'Групування';
$string['defaultgroupname'] = 'Група';
$string['deleteallgroupings'] = 'Видалити усі групування';
$string['deleteallgroups'] = 'Видалити усі групи';
$string['deletegroupconfirm'] = 'Ви впевнені, що хочете видалити групу \'{$a}\'?';
$string['deletegrouping'] = 'Видалити групування';
$string['deletegroupingconfirm'] = 'Ви впевнені, що хочете видалити групування \'{$a}\'? (Наявні в групуванні групи не видаляються.)';
$string['deletegroupsconfirm'] = 'Ви впевнені, що хочете видалити ці групи?';
$string['deleteselectedgroup'] = 'Видалити';
$string['disablemessagingaction'] = 'Вимкнути обмін повідомленнями';
$string['editgroupingsettings'] = 'Редагувати параметри групування';
$string['editgroupsettings'] = 'Редагувати параметри групи';
$string['editusersgroupsa'] = 'Редагувати групи для "{$a}"';
$string['enablemessaging'] = 'Груповий обмін повідомленнями';
$string['enablemessaging_help'] = 'Якщо ввімкнено, учасники групи можуть надсилати повідомлення іншим у своїй групі через панель повідомлень.';
$string['enablemessagingaction'] = 'Увімкнути обмін повідомленнями';
$string['encoding'] = 'Кодування';
$string['enrolmentkey'] = 'Кодове слово';
$string['enrolmentkey_help'] = 'Кодове слово дозволяє користувачам реєструватися на курсах. Зазвичай є одне кодове слово для всього курсу. Однак, якщо ви визначили "групу", кодове слово буде використовуватися не тільки для запису на курс, а й буде записувати користувача в певну групу.

Примітка: Кодове слово групи повинно бути включено в налаштуваннях способу самозарахування, а також повинно бути визначене кодове слово для всього курсу.';
$string['enrolmentkeyalreadyinuse'] = 'Таке кодове слово вже використовується для іншої групи.';
$string['erroraddremoveuser'] = 'Помилка введення/видалення користувача {$a} в групу';
$string['erroraddtogroup'] = 'Недійсне значення для addtogroup. Він має бути 0, щоб груповий режим не був, або 1, щоб створити нову групу.';
$string['erroraddtogroupgroupname'] = 'Ви не можете вказати назву групи, якщо встановлено addtogroup.';
$string['erroreditgroup'] = 'Помилка створення/оновлення групи {$a}';
$string['erroreditgrouping'] = 'Помилка створення/оновлення групування {$a}';
$string['errorinvalidgroup'] = 'Помилка, нечинна група {$a}';
$string['errorremovenotpermitted'] = 'Ви не маєте прав на видалення автоматично введеного члена групи  {$a}';
$string['errorselectone'] = 'Будь ласка, виберіть одну групу перед зміною цієї опції';
$string['errorselectsome'] = 'Будь ласка, виберіть одну або більше груп перед зміною цієї опції';
$string['evenallocation'] = 'Примітка: Збереже фактичне розміщення груп, навіть якщо реальне число членів відрізняється від вказаного вами.';
$string['eventgroupcreated'] = 'Створено групу';
$string['eventgroupdeleted'] = 'Вилучено групу';
$string['eventgroupingcreated'] = 'Створено групування';
$string['eventgroupingdeleted'] = 'Вилучено групування';
$string['eventgroupinggroupassigned'] = 'Група призначена в Групування';
$string['eventgroupinggroupunassigned'] = 'Група виведена з Групування';
$string['eventgroupingupdated'] = 'Оновлено групування';
$string['eventgroupmemberadded'] = 'Додано учасника групи';
$string['eventgroupmemberremoved'] = 'Вилучено учасника групи';
$string['eventgroupupdated'] = 'Оновлено групу';
$string['existingmembers'] = 'Наявні члени: {$a}';
$string['exportgroupsgroupings'] = 'Завантажити групи та груповання як';
$string['filtergroups'] = 'Фільтрувати групи за ознакою:';
$string['group'] = 'Група';
$string['groupaddedsuccesfully'] = 'Групу {$a} успішно додано';
$string['groupaddedtogroupingsuccesfully'] = 'Групу {$a->groupname} успішно додано до групування {$a->groupingname}';
$string['groupby'] = 'Створити групи на основі кількості';
$string['groupdescription'] = 'Опис групи';
$string['groupinfo'] = 'Інформація про вибрану групу';
$string['groupinfomembers'] = 'Інформація про вибраних користувачів';
$string['groupinfopeople'] = 'Інформація про вибраних учасників';
$string['grouping'] = 'Групування';
$string['grouping_help'] = 'Групування - це об’єднання різних груп у межах курсу. Якщо вибрано групування, то студенти груп, які входять до цього групування, зможуть працювати разом.';
$string['groupingaddedsuccesfully'] = 'Групування {$a} успішно додано';
$string['groupingdescription'] = 'Опис групування';
$string['groupingname'] = 'Назва групування';
$string['groupingnameexists'] = 'Групування з назвою \'{$a}\' вже створене на цьому курсі, будь ласка виберіть інше.';
$string['groupings'] = 'Групування';
$string['groupingsection'] = 'Доступно тільки для групування';
$string['groupingsection_help'] = 'Групування це набір груп в курсі. Якщо тут вказати групування, то тільки студенти зараховані в групи, які є в цьому групуванні будуть мати доступ до цього розділу.';
$string['groupingsonly'] = 'Тільки групування';
$string['groupmember'] = 'Учасник групи';
$string['groupmemberdesc'] = 'Стандартна роль для учасника групи';
$string['groupmembers'] = 'Учасники групи';
$string['groupmemberssee'] = 'Переглянути учасників групи';
$string['groupmembersselected'] = 'Учасники вибраної групи';
$string['groupmode'] = 'Режим роботи з групами';
$string['groupmode_help'] = 'Цей параметр має 3 варіанти:

* Без груп
* Окремі групи – кожен учасник групи може бачити лише свою власну групу, інші невидимі
* Видимі групи – кожен учасник групи працює у своїй групі, але також може бачити інші групи

Груповий режим, визначений на рівні курсу, є режимом за замовчуванням для всіх видів діяльності в рамках курсу. Кожна діяльність, яка підтримує групи, також може визначити свій власний груповий режим, хоча якщо груповий режим примусово на рівні курсу, параметр групового режиму для кожного заняття ігнорується.';
$string['groupmodeforce'] = 'Примусовий режим роботи з групами';
$string['groupmodeforce_help'] = 'Якщо режим роботи з групами вибрано примусово, то цей тип буде використовуватися на всіх діяльностях курсу. Тип груп для кожної діяльності окремо не буде використовуватися.';
$string['groupmy'] = 'Моя група';
$string['groupname'] = 'Назва групи';
$string['groupnameexists'] = 'Назва групи \'{$a}\' вже існує на цьому курсі, виберіть, будь ласка, іншу назву.';
$string['groupnotamember'] = 'На жаль, ви не є членом даної групи';
$string['groups'] = 'Групи';
$string['groupscount'] = 'Групи ({$a})';
$string['groupsettingsheader'] = 'Групи';
$string['groupsgroupings'] = 'Групи та групування';
$string['groupsinselectedgrouping'] = 'Групи в:';
$string['groupsnone'] = 'Немає груп';
$string['groupsonly'] = 'Тільки групи';
$string['groupspreview'] = 'Попередній перегляд груп';
$string['groupsseparate'] = 'Окремі групи';
$string['groupsvisible'] = 'Видимі групи';
$string['grouptemplate'] = 'Група #';
$string['importgroups'] = 'Імпорт груп';
$string['importgroups_help'] = 'Групи можна імпортувати через текстовий файл. Формат файлу має бути таким:

* Кожен рядок файлу містить один запис
* Кожен запис являє собою ряд даних, розділених вибраним роздільником
* Перший запис містить список імен полів, що визначають формат решти файлу
* Обов’язкове ім’я поля – назва групи
* Необов\'язкові назви полів: номер групи, опис, ключ реєстрації, назва групи, дозволити обмін повідомленнями';
$string['importgroups_link'] = 'group/import';
$string['includeonlyactiveenrol'] = 'Включити тільки активні зарахування';
$string['includeonlyactiveenrol_help'] = 'Якщо включено, то заблоковані користувачі не будуть включені в групи.';
$string['javascriptrequired'] = 'Ця сторінка вимагає дозволу на роботу Javascript';
$string['manageactions'] = 'Керувати';
$string['memberofgroup'] = 'Учасник групи: {$a}';
$string['members'] = 'Кількість учасників на групу';
$string['membersofselectedgroup'] = 'Учасники:';
$string['messagingdisabled'] = 'Успішно вимкнено обмін повідомленнями в групах ({$a})';
$string['messagingenabled'] = 'Успішно ввімкнено обмін повідомленнями в групах ({$a})';
$string['mygroups'] = 'Мої групи';
$string['namingscheme'] = 'Схема іменування';
$string['namingscheme_help'] = 'Символ @ може використовуватися для автоматичного іменування груп літерами алфавіту. Наприклад, шаблон "Група @" буде генерувати назви "Група А", "Група Б", "Група В", ... Символ # у шаблоні дозволяє генерувати номери. Наприклад, за шаблоном "Група #" ви отримаєте назви "Група 1", "Група 2", "Група 3", ...';
$string['newgrouping'] = 'Нове групування';
$string['newpicture'] = 'Нова картинка';
$string['newpicture_help'] = '<P ALIGN=CENTER><B>Закачування фотографії</B></P>

<P>Ви можете закачати фотографію зі свого комп\'ютера на сервер. Фотографія буде використовуватися в повідомленнях у форумі, у Вашому обліковому записі...
<P>Фотографія повинна бути у форматі JPG або PNG.
<P>Ви можете отримати фотографію, наступними методами:

<OL>
<LI>Скориставшись цифровим фотоапарат або камерою.
<LI>Відсканувавши фотографію (переконаєтеся, що зберегли її в потрібному форматі ).
<LI>Намалювавши портрет у якій-небудь програмі для роботи із графікою.
<LI>Скачавши картинку з Інтернету.  <A TARGET=google HREF="http://images.google.com/">http://images.google.com</A>.
</OL>

<P>Для накачування файлу натисніть на кнопку "Browse", і виберіть фотографію на своєму комп\'ютері.
<P>Примітка: Переконаєтеся, що обраний файл не перевищує максимально припустимий розмір. Виберіть картинку у форматах JPG або PNG. Картинка буде обрізана до розміру 100х100 пікселів.';
$string['noallocation'] = 'Немає призначення';
$string['nogroup'] = 'Немає груп';
$string['nogrouping'] = 'Немає групувань';
$string['nogroups'] = 'У цьому курсі груп ще немає';
$string['nogroupsassigned'] = 'Немає призначених груп';
$string['nopermissionforcreation'] = 'Не можна створити групу "{$a}", оскільки ви не маєте відповідних прав';
$string['nosmallgroups'] = 'Не допустити останню маленьку групу';
$string['notingroup'] = 'Ігнорувати користувачів у групах';
$string['notingrouping'] = 'Не в групуванні';
$string['notingrouplist'] = 'Не в групі';
$string['nousersinrole'] = 'У відібраній ролі не має потенційних членів';
$string['number'] = 'Кількість груп/учасників';
$string['numgroups'] = 'Кількість груп';
$string['nummembers'] = 'Кількість учасників на групу';
$string['othergroups'] = 'Інші групи';
$string['overview'] = 'Огляд';
$string['participation'] = 'Показати групу в спадному меню для дій у груповому режимі';
$string['participation_help'] = 'Чи повинні члени групи мати можливість вибирати цю групу для дій у режимі окремих або видимих груп? (Застосовується, лише якщо членство в групі видиме для всіх або лише для учасників.)';
$string['participationshort'] = 'Участь';
$string['potentialmembers'] = 'Потенційні учасники: {$a}';
$string['potentialmembs'] = 'Потенційні учасники';
$string['printerfriendly'] = 'Показати списки груп';
$string['privacy:metadata:core_message'] = 'Групові бесіди';
$string['privacy:metadata:groups'] = 'Довідка про членство в групі.';
$string['privacy:metadata:groups:groupid'] = 'Ідентифікатор групи.';
$string['privacy:metadata:groups:timeadded'] = 'Позначка часу, яка вказує, коли користувача було додано до групи.';
$string['privacy:metadata:groups:userid'] = 'Ідентифікатор користувача, який пов’язаний з групою.';
$string['random'] = 'Випадково';
$string['removefromgroup'] = 'Вилучити користувача з групи {$a}';
$string['removefromgroupconfirm'] = 'Ви дійсно бажаєте вилучити користувача "{$a->user}" з групи "{$a->group}"?';
$string['removegroupfromselectedgrouping'] = 'Вилучити групу з групування';
$string['removegroupingsmembers'] = 'Вилучити усі групи з групування';
$string['removegroupsmembers'] = 'Вилучити усіх учасників групи';
$string['removeselectedusers'] = 'Вилучити вибраних користувачів';
$string['selectfromgroup'] = 'Вибрати учасників з групи';
$string['selectfromgrouping'] = 'Вибрати учасників з групування';
$string['selectfromrole'] = 'Вибирати учасників з ролі';
$string['showgroupsingrouping'] = 'Показати групи в групуванні';
$string['showmembersforgroup'] = 'Показати учасників для групи';
$string['toomanygroups'] = 'Не достатня кількість користувачів для такої кількості груп - у вибраній ролі є тільки {$a} користувачів.';
$string['usercount'] = 'Кількість користувачів';
$string['usercounttotal'] = 'Кількість користувачів ({$a})';
$string['usergroupmembership'] = 'Групи вибраного користувача:';
$string['visibility'] = 'Видимість членства в групі';
$string['visibility_help'] = '* Видимо для всіх - усі учасники курсу можуть бачити, хто входить до групи
* Видимо лише для учасників – учасники курсу, які не входять до групи, не можуть переглядати групу чи її учасників
* Перегляд лише власного членства - користувач бачить, що він є в групі, але не може бачити інших учасників групи
* Приховано - лише вчителі можуть переглядати групу та її учасників

Користувачі з можливістю перегляду прихованих груп завжди можуть переглядати членство в групах.

Зауважте, що ви не можете змінити це налаштування, якщо в групі є учасники.';
$string['visibilityall'] = 'Видно для всіх';
$string['visibilitymembers'] = 'Видно лише учасникам';
$string['visibilitynone'] = 'Прихований';
$string['visibilityown'] = 'Дивіться лише власне членство';
$string['visibilityshort'] = 'Видимість';
$string['withselected'] = 'З обраним';
