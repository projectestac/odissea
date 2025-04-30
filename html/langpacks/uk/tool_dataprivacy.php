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
 * Strings for component 'tool_dataprivacy', language 'uk', version '4.4'.
 *
 * @package     tool_dataprivacy
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitiesandresources'] = 'Діяльності та ресурси';
$string['addcategory'] = 'Додати категорію';
$string['addnewdefaults'] = 'Додайте новий модуль за замовчуванням';
$string['addpurpose'] = 'Додайте мету';
$string['addroleoverride'] = 'Додати заміну ролі';
$string['allowfiltering'] = 'Дозволити фільтрацію експорту за курсом';
$string['allowfiltering_desc'] = 'Якщо ввімкнено, спеціаліст із конфіденційності може вибрати експорт даних користувача з вибраних курсів замість усіх курсів. Якщо цю функцію ввімкнено, запити на експорт починатимуться з «Очікують на розгляд» і можуть бути затверджені лише після завершення фонового завдання.';
$string['approve'] = 'Затвердити';
$string['approvedrequestsubmitted'] = 'Ваш запит надіслано та буде оброблено найближчим часом.';
$string['approverequest'] = 'Затвердити запит';
$string['approverequestall'] = 'Підтвердити запит (всі дані)';
$string['approveselectedcourses'] = 'Затвердити обрані курси';
$string['automaticdatadeletionapproval'] = 'Схвалення запиту на автоматичне видалення даних';
$string['automaticdatadeletionapproval_desc'] = 'Якщо ввімкнено, запити на видалення даних затверджуються автоматично. <br/>Зауважте, що автоматичне схвалення застосовуватиметься лише до нових запитів на видалення даних із увімкненим цим налаштуванням. Існуючі запити на видалення даних, які очікують схвалення, все одно мають бути вручну затверджені спеціалістом із конфіденційності.';
$string['automaticdataexportapproval'] = 'Автоматичне схвалення запиту на експорт даних';
$string['automaticdataexportapproval_desc'] = 'Якщо ввімкнено, запити на експорт даних затверджуються автоматично. Зверніть увагу, що автоматичне схвалення застосовуватиметься лише до нових запитів на експорт даних із увімкненим цим налаштуванням. Існуючі запити на експорт даних, які очікують на схвалення, все одно мають бути схвалені вручну спеціалістом із конфіденційності.';
$string['automaticdeletionrequests'] = 'Створюйте автоматичні запити на видалення даних';
$string['automaticdeletionrequests_desc'] = 'Якщо ввімкнено, запит на видалення даних буде створено автоматично для всіх облікових записів користувачів, видалених вручну.';
$string['bulkapproverequests'] = 'Затвердити запити';
$string['bulkdenyrequests'] = 'Відхилити запити';
$string['cachedef_contextlevel'] = 'Мета й категорія рівнів контексту';
$string['cachedef_purpose'] = 'Цілі даних';
$string['cachedef_purpose_overrides'] = 'Ціль перевизначає в інструменті конфіденційності даних';
$string['cancelrequest'] = 'Скасувати запит';
$string['cancelrequestconfirmation'] = 'Ви дійсно хочете скасувати цей запит на дані?';
$string['cannotreset'] = 'Не вдається скинути цей запит. Лише відхилені запити можна скинути.';
$string['categories'] = 'Категорії';
$string['categorieslist'] = 'Список категорій даних';
$string['category'] = 'Категорія';
$string['category_help'] = 'Категорія в реєстрі даних описує тип даних. Можна додати нову категорію або, якщо вибрано «Успадкувати», буде застосовано категорію даних з вищого контексту. Контексти (від низького до високого): Блоки > Модулі активності > Курси > Категорії курсів > Сайт.';
$string['categorycreated'] = 'Категорія створена';
$string['categorydefault'] = 'Категорія за замовчуванням';
$string['categorydefault_help'] = 'Категорією за замовчуванням є категорія даних, яка застосовується до будь-яких нових екземплярів. Якщо вибрано Успадкувати, застосовується категорія даних із вищого контексту. Контексти (від низького до високого): Блоки > Модулі активності > Курси > Категорії курсів > Користувач > Сайт.';
$string['categoryupdated'] = 'Категорія оновлена';
$string['close'] = 'Закрити';
$string['compliant'] = 'Відповідний';
$string['confirmapproval'] = 'Ви дійсно хочете схвалити цей запит на дані?';
$string['confirmbulkapproval'] = 'Ви дійсно хочете масово схвалити вибрані запити даних?';
$string['confirmbulkdenial'] = 'Ви дійсно хочете масово відхилити вибрані запити даних?';
$string['confirmcompletion'] = 'Ви дійсно хочете позначити цей запит користувача як завершений?';
$string['confirmcontextdeletion'] = 'Ви дійсно хочете підтвердити видалення вибраних контекстів? Це також видалить усі дані користувача для відповідних підконтекстів.';
$string['confirmdenial'] = 'Ви дійсно хочете відхилити цей запит на дані?';
$string['confirmrequestresubmit'] = 'Ви впевнені, що хочете скасувати поточний запит {$a->type} для {$a->username} та надіслати його повторно?';
$string['contactdataprotectionofficer'] = 'Зв\'язок з співробітником з питань конфіденційності';
$string['contactdataprotectionofficer_desc'] = 'При включеному параметрі користувачі зможуть зв\'язатися зі співробітником з питань конфіденційності та зробити запит даних по посиланню на сторінці свого профілю.';
$string['contactdpoviaprivacypolicy'] = 'Будь ласка, зв’яжіться з представником конфіденційності, як описано в політиці конфіденційності.';
$string['contextlevelname10'] = 'Сайт';
$string['contextlevelname30'] = 'Користувачі';
$string['contextlevelname40'] = 'Категорії курсу';
$string['contextlevelname50'] = 'Курси';
$string['contextlevelname70'] = 'Модулі діяльності';
$string['contextlevelname80'] = 'Блоки';
$string['contextpurposecategorysaved'] = 'Мета та категорія збережено.';
$string['createcategory'] = 'Створити категорію даних';
$string['createdeletedatarequest'] = 'Створити запит на видалення даних';
$string['createnewdatarequest'] = 'Створіть новий запит даних';
$string['createpurpose'] = 'Створіть ціль даних';
$string['creationauto'] = 'Автоматично';
$string['creationmanual'] = 'Вручну';
$string['datadeletion'] = 'Видалення даних';
$string['datadeletionpagehelp'] = 'Дані, термін зберігання яких закінчився, перераховані тут. Будь ласка, перегляньте та підтвердьте видалення даних, яке потім буде виконано запланованим завданням "Видалити контексти, термін дії яких закінчився".';
$string['dataprivacy:downloadallrequests'] = 'Завантажте експортовані дані для всіх';
$string['dataprivacy:downloadownrequest'] = 'Завантажте власні експортовані дані';
$string['dataprivacy:makedatadeletionrequestsforchildren'] = 'Запит на видалення даних для неповнолітніх';
$string['dataprivacy:makedatarequestsforchildren'] = 'Робіть запити на дані для неповнолітніх';
$string['dataprivacy:managedataregistry'] = 'Керувати реєстром даних';
$string['dataprivacy:managedatarequests'] = 'Керуйте запитами даних';
$string['dataprivacy:requestdelete'] = 'Запит на видалення даних для себе';
$string['dataprivacy:requestdeleteforotheruser'] = 'Запит на видалення даних від імені іншого користувача';
$string['dataregistry'] = 'Реєстр даних';
$string['dataregistryinfo'] = 'Реєстр даних дозволяє встановлювати категорії (типи даних) і цілі (причини обробки даних) для всього вмісту сайту - від користувачів і курсів до заходів і блоків. Для кожної мети може бути встановлений термін зберігання. Коли термін зберігання закінчився, дані позначаються прапорцем і відображаються в списку для видалення, очікуючи підтвердження адміністратора.';
$string['datarequestcreatedforuser'] = 'Створено запит на дані для {$a}';
$string['datarequestcreatedfromscheduledtask'] = 'Автоматично створюється із запланованого завдання (попередньо видалений користувач).';
$string['datarequestcreatedupondelete'] = 'Автоматично створюється після видалення користувача.';
$string['datarequestemailsubject'] = 'Запит даних: {$a}';
$string['datarequests'] = 'Запити даних';
$string['dataretentionexplanation'] = 'Цей підсумок показує категорії за замовчуванням та цілі збереження даних користувачів. Деякі області можуть мати більш конкретні категорії та цілі, ніж перераховані тут.';
$string['dataretentionsummary'] = 'Підсумок збереження даних';
$string['datecomment'] = '[{$a->date}]:
 {$a->comment}';
$string['daterequested'] = 'Дата запиту';
$string['daterequesteddetail'] = 'Дата запиту:';
$string['defaultexpired'] = 'Дані для всіх користувачів';
$string['defaultexpiredexcept'] = 'Дані для всіх користувачів, за винятком тих, хто виконує одну з таких ролей:<br>
{$a->нетермін дії}';
$string['defaultsinfo'] = 'Категорії та цілі за замовчуванням застосовуються до всіх нових і існуючих екземплярів, де значення не встановлено.';
$string['defaultssaved'] = 'За замовчуванням збережено';
$string['defaultswarninginfo'] = 'Попередження. Зміна цих значень за замовчуванням може вплинути на період збереження наявних екземплярів.';
$string['defaultunexpired'] = 'Лише дані для користувачів, які виконують будь-яку з наведених нижче ролей: {$a->термін дії закінчився}';
$string['defaultunexpiredwithexceptions'] = 'Лише дані для користувачів, які виконують одну з наведених нижче ролей:<br>
{$a->expired}
Якщо вони також не виконують жодної з наступних ролей:<br>
{$a->unexpired}';
$string['deletecategory'] = 'Видалити категорію';
$string['deletecategorytext'] = 'Ви впевнені, що хочете видалити категорію "{$a}"?';
$string['deletedefaults'] = 'Видалити параметри за умовчанням: {$a}';
$string['deletedefaultsconfirmation'] = 'Ви впевнені, що хочете видалити категорію та призначення за замовчуванням для модулів {$a}?';
$string['deleteexistingdeleteduserstask'] = 'Створити запит на видалення даних для вже існуючих видалених користувачів';
$string['deleteexpiredcontextstask'] = 'Видалити прострочені контексти';
$string['deleteexpireddatarequeststask'] = 'Видалити файли експорту запитів на дані, термін дії яких закінчився';
$string['deletemyaccount'] = 'Видалити мій обліковий запис';
$string['deletepurpose'] = 'Видалити мету';
$string['deletepurposetext'] = 'Ви впевнені, що хочете видалити мету "{$a}"?';
$string['deny'] = 'Відхилено';
$string['denyrequest'] = 'Відхилити запит';
$string['deprecated'] = 'Не підтримується';
$string['deprecatedexplanation'] = 'Цей плагін використовує стару версію одного з інтерфейсів конфіденційності, і його слід оновити.';
$string['download'] = 'Завантажити';
$string['downloadexpireduser'] = 'Термін завантаження закінчився. Надішліть новий запит, якщо ви хочете експортувати свої особисті дані.';
$string['dporolemapping'] = 'Відображення ролей офіцера з конфіденційності';
$string['dporolemapping_desc'] = 'Офіцер із конфіденційності може керувати запитами даних. Інструмент можливостей/dataprivacy:managedatarequests має бути дозволений, щоб роль була вказана як параметр зіставлення ролей офіцера з конфіденційності.';
$string['duplicaterole'] = 'Роль уже визначена';
$string['editcategories'] = 'Редагувати категорії';
$string['editcategory'] = 'Редагувати категорію';
$string['editdefaults'] = 'Редагувати параметри за умовчанням: {$a}';
$string['editmoduledefaults'] = 'Редагувати параметри модуля за замовчуванням';
$string['editpurpose'] = 'Редагувати мету';
$string['editpurposes'] = 'Редагувати цілі';
$string['effectiveretentionperiodcourse'] = '{$a} (після дати закінчення курсу)';
$string['effectiveretentionperioduser'] = '{$a} (з моменту останнього доступу користувача до сайту)';
$string['emailsalutation'] = 'Шановний {$a}!';
$string['errorcannotrequestdeleteforother'] = 'У вас немає дозволу створювати запит на видалення для цього користувача.';
$string['errorcannotrequestdeleteforself'] = 'Ви не маєте дозволу створювати запит на видалення для себе.';
$string['errorcannotrequestexportforself'] = 'У вас немає дозволу створювати запит на експорт для себе.';
$string['errorcontactdpodisabled'] = 'Можливість зв’язатися з інспектором з конфіденційності вимкнена.';
$string['errorcontexthasunexpiredchildren'] = 'У контексті "{$a}" все ще є підконтексти, термін дії яких ще не закінчився. Жоден контекст не позначено для видалення.';
$string['errorinvalidrequestcomments'] = 'Поле коментарів може містити лише простий текст.';
$string['errorinvalidrequestcreationmethod'] = 'Недійсний метод створення запиту!';
$string['errorinvalidrequeststatus'] = 'Недійсний статус запиту!';
$string['errorinvalidrequesttype'] = 'Недійсний тип запиту!';
$string['errornocapabilitytorequestforothers'] = 'Користувач {$a->requestedby} не має можливості зробити запит на дані від імені користувача {$a->userid}';
$string['errornoexpiredcontexts'] = 'Немає прострочених контекстів для обробки';
$string['errornoselectedcourse'] = 'Ви повинні вибрати принаймні один курс';
$string['errorrequestalreadyexists'] = 'У вас уже є поточний запит.';
$string['errorrequestnotfound'] = 'Запит не знайдено';
$string['errorrequestnotwaitingforapproval'] = 'Запит не очікує схвалення. Або він ще не готовий, або вже оброблений.';
$string['errorsendingmessagetodpo'] = 'Під час спроби надіслати повідомлення на адресу {$a} сталася помилка.';
$string['exceptionnotificationbody'] = '<p>Виняток стався під час виклику <b>{$a->fullmethodname}</b>.<br>Це означає, що плагін <b>{$a->component}</b> не завершив обробку даних. Розробнику плагіна може бути передана така інформація про винятки:</p><pre>{$a->message}<br>

{$a->backtrace}</pre>';
$string['exceptionnotificationsubject'] = 'Виняток стався під час обробки даних конфіденційності';
$string['expandplugin'] = 'Розгорнути та згорнути плагін.';
$string['expandplugintype'] = 'Розгорнути та згорнути тип плагіна.';
$string['expiredretentionperiodtask'] = 'Термін зберігання закінчився';
$string['expiredrolewithretention'] = '{$a->retention} (термін дії закінчився)';
$string['expiry'] = 'Термін дії';
$string['explanationtitle'] = 'Іконки, які використовуються на цій сторінці і що вони означають.';
$string['external'] = 'Додатковий';
$string['externalexplanation'] = 'На цьому сайті встановлено додатковий модуль.';
$string['filterexportdata'] = 'Підтвердити запит (дані з вибраних курсів)';
$string['filteroption'] = '{$a->category}: {$a->name}';
$string['frontpagecourse'] = 'Головна сторінка курсу';
$string['gdpr_art_6_1_a_description'] = 'Суб’єкт даних дав згоду на обробку його чи її персональних даних для однієї або кількох конкретних цілей';
$string['gdpr_art_6_1_a_name'] = 'Згода (GDPR, ст. 6.1(a))';
$string['gdpr_art_6_1_b_description'] = 'Обробка необхідна для виконання договору, стороною якого є суб’єкт даних, або для того, щоб вжити заходів на вимогу суб’єкта даних до укладання договору';
$string['gdpr_art_6_1_b_name'] = 'Контракт (GDPR ст. 6.1(b))';
$string['gdpr_art_6_1_c_description'] = 'Обробка необхідна для дотримання юридичних зобов’язань, яким підпорядковується контролер';
$string['gdpr_art_6_1_c_name'] = 'Юридичні зобов\'язання (Стаття 6.1(c) GDPR)';
$string['gdpr_art_6_1_d_description'] = 'Обробка необхідна для захисту життєво важливих інтересів суб’єкта даних або іншої фізичної особи';
$string['gdpr_art_6_1_d_name'] = 'Життєво важливі інтереси (GDPR, ст. 6.1(d))';
$string['gdpr_art_6_1_e_description'] = 'Обробка необхідна для виконання завдання, яке виконується в суспільних інтересах або під час виконання офіційних повноважень, наданих контролеру';
$string['gdpr_art_6_1_e_name'] = 'Громадське завдання (GDPR, ст. 6.1(e))';
$string['gdpr_art_6_1_f_description'] = 'Обробка необхідна для цілей законних інтересів, які переслідує контролер або третя сторона, за винятком випадків, коли такі інтереси переважають інтереси або основні права і свободи суб’єкта даних, які вимагають захисту персональних даних, зокрема якщо дані суб\'єктом є дитина';
$string['gdpr_art_6_1_f_name'] = 'Законні інтереси (ст. 6.1(f) GDPR)';
$string['gdpr_art_9_2_a_description'] = 'Суб’єкт даних дав явну згоду на обробку цих персональних даних для однієї або кількох визначених цілей, за винятком випадків, коли законодавство Союзу або держави-члена передбачає, що заборона, зазначена в параграфі 1 статті 9 GDPR, не може бути скасована суб’єктом даних.';
$string['gdpr_art_9_2_a_name'] = 'Явна згода (GDPR, ст. 9.2(a))';
$string['gdpr_art_9_2_b_description'] = 'Обробка необхідна для виконання зобов’язань та реалізації конкретних прав розпорядника чи суб’єкта даних у сфері зайнятості та соціального забезпечення та права соціального захисту, якщо це дозволено законодавством Союзу чи держави-члена чи колективний договір відповідно до законодавства держави-члена, що забезпечує належні гарантії основних прав та інтересів суб\'єкта даних';
$string['gdpr_art_9_2_b_name'] = 'Законодавство про зайнятість та соціальне забезпечення/захист (GDPR, ст. 9.2(b))';
$string['gdpr_art_9_2_c_description'] = 'Обробка необхідна для захисту життєво важливих інтересів суб’єкта даних або іншої фізичної особи, якщо суб’єкт даних фізично або юридично не може дати згоду';
$string['gdpr_art_9_2_c_name'] = 'Захист життєво важливих інтересів (GDPR, ст. 9.2(c))';
$string['gdpr_art_9_2_d_description'] = 'Обробка здійснюється в ході своєї законної діяльності з відповідними гарантіями фондом, асоціацією або будь-яким іншим неприбутковим органом з політичною, філософською, релігійною чи профспілковою метою та за умови, що обробка стосується виключно членам або колишнім членам органу або особам, які регулярно контактують з ним у зв\'язку з його цілями, і що персональні дані не розголошуються за межами цього органу без згоди суб\'єктів даних';
$string['gdpr_art_9_2_d_name'] = 'Законна діяльність щодо членів/близьких контактів фонду, асоціації чи іншого неприбуткового органу (ст. 9.2 (d) GDPR)';
$string['gdpr_art_9_2_e_description'] = 'Обробка стосується персональних даних, які явно оприлюднюються суб’єктом даних';
$string['gdpr_art_9_2_e_name'] = 'Дані, оприлюднені суб’єктом даних (GDPR, ст. 9.2(e))';
$string['gdpr_art_9_2_f_description'] = 'Обробка необхідна для встановлення, здійснення або захисту правових позовів або коли суди діють у своїй судовій якості';
$string['gdpr_art_9_2_f_name'] = 'Судові позови та позови (GDPR, ст. 9.2(f))';
$string['gdpr_art_9_2_g_description'] = 'Обробка необхідна з міркувань суттєвого суспільного інтересу, на основі законодавства Союзу чи держави-члена, яке має бути пропорційним переслідуваній меті, поважати суть права на захист даних та передбачати відповідні та конкретні заходи для захисту основних прав та інтереси суб\'єкта даних';
$string['gdpr_art_9_2_g_name'] = 'Істотний суспільний інтерес (GDPR, ст. 9.2(g))';
$string['gdpr_art_9_2_h_description'] = 'Обробка необхідна для цілей профілактичної або професійної медицини, для оцінки працездатності працівника, медичної діагностики, надання медичної чи соціальної допомоги чи лікування чи управління системами та послугами охорони здоров’я чи соціальної допомоги на основі Законодавство Союзу чи держави-члена або згідно з контрактом із медичним працівником та з дотриманням умов та гарантій, зазначених у параграфі 3 статті 9 GDPR';
$string['gdpr_art_9_2_h_name'] = 'Медичні цілі (GDPR, ст. 9.2(h))';
$string['gdpr_art_9_2_i_description'] = 'Обробка необхідна з міркувань суспільних інтересів у сфері громадського здоров\'я, таких як захист від серйозних транскордонних загроз здоров\'ю або забезпечення високих стандартів якості та безпеки медичної допомоги та лікарських засобів або медичних виробів на основі Союзу. або законодавство держави-члена, яке передбачає відповідні та конкретні заходи для захисту прав і свобод суб\'єкта даних, зокрема професійної таємниці';
$string['gdpr_art_9_2_i_name'] = 'Громадська охорона здоров\'я (GDPR, ст. 9.2(i))';
$string['gdpr_art_9_2_j_description'] = 'Обробка необхідна для цілей архівування в суспільних інтересах, наукових або історичних досліджень або статистичних цілей відповідно до статті 89(1) на основі законодавства Союзу або держави-члена, яка має бути пропорційною до переслідуваної мети, поважати суть права на захист даних та передбачити відповідні та конкретні заходи для захисту основних прав та інтересів суб’єкта даних';
$string['gdpr_art_9_2_j_name'] = 'Громадські інтереси або наукові/історичні/статистичні дослідження (GDPR, ст. 9.2(j))';
$string['hide'] = 'Згорнути все';
$string['httpwarning'] = 'Будь-які дані, завантажені з цього сайту, не можуть бути зашифровані. Зверніться до системного адміністратора і попросіть встановити SSL на цьому сайті.';
$string['inherit'] = 'Успадковувати';
$string['lawfulbases'] = 'Законні підстави';
$string['lawfulbases_help'] = 'Виберіть хоча б один варіант, який буде слугувати законною підставою для обробки персональних даних. Щоб дізнатися більше про ці законні підстави, перегляньте <a href="https://gdpr-info.eu/art-6-gdpr/" target="_blank">GDPR ст. 6.1</a>';
$string['markcomplete'] = 'Позначити як завершену';
$string['markedcomplete'] = 'Посадовець із конфіденційності позначив ваш запит як завершений.';
$string['message'] = 'Повідомлення';
$string['messagelabel'] = 'Повідомлення:';
$string['messageprovider:contactdataprotectionofficer'] = 'Запити даних';
$string['messageprovider:datarequestprocessingresults'] = 'Результати обробки запиту даних';
$string['messageprovider:notifyexceptions'] = 'Сповіщення про виключення запитів даних';
$string['moduleinstancename'] = '{$a->instancename} ({$a->modulename})';
$string['mypersonaldatarequests'] = 'Мої запити щодо персональних даних';
$string['nameandparent'] = '{$a->parent} / {$a->name}';
$string['nameemail'] = '{$a->name} ({$a->email})';
$string['nchildren'] = '{$a} дітей';
$string['newrequest'] = 'Новий запит';
$string['noactivitiestoload'] = 'Жодної діяльності';
$string['noassignedroles'] = 'Немає призначених ролей у цьому контексті';
$string['noblockstoload'] = 'Без блоків';
$string['nocategories'] = 'Ще немає категорій';
$string['nocoursestoload'] = 'Жодної діяльності';
$string['nocoursetofilter'] = 'Користувач не зареєстрований на жодних курсах для вибору';
$string['nodatarequests'] = 'Немає запитів на дані';
$string['nodatarequestsmatchingfilter'] = 'Немає запитів даних, що відповідають заданому фільтру';
$string['noexpiredcontexts'] = 'Цей рівень контексту не має даних, для яких закінчився термін зберігання.';
$string['nopersonaldatarequests'] = 'У вас немає запитів щодо персональних даних';
$string['nopurposes'] = 'Цілей поки немає';
$string['nosubjectaccessrequests'] = 'Немає запитів на дані, на які вам потрібно діяти';
$string['nosystemdefaults'] = 'Мета і категорія сайту ще не визначені.';
$string['notset'] = 'Не встановлено (використовуйте значення за замовчуванням)';
$string['notyetexpired'] = '{$a} (ще не закінчився)';
$string['overrideinstances'] = 'Скидання екземплярів із користувацькими значеннями';
$string['pluginname'] = 'Конфіденційність даних';
$string['pluginname_help'] = 'Плагін конфіденційності даних';
$string['pluginregistry'] = 'Плагін реєстру конфіденційності';
$string['pluginregistrytitle'] = 'Реєстр відповідності конфіденційності плагінів';
$string['privacy'] = 'Конфіденційність';
$string['privacy:metadata:preference:tool_dataprivacy_request-filters'] = 'Фільтри, які зараз застосовуються до сторінки запитів даних.';
$string['privacy:metadata:preference:tool_dataprivacy_request-perpage'] = 'Кількість запитів даних, які користувач вважає за краще бачити на одній сторінці';
$string['privacy:metadata:purpose'] = 'Інформація з цілей даних, створених для цього сайту.';
$string['privacy:metadata:purpose:usermodified'] = 'Ідентифікатор користувача, який змінив ціль';
$string['privacy:metadata:request'] = 'Інформація із запитів на персональні дані (запити на доступ до предметів та на їх видалення), зроблені для цього сайту.';
$string['privacy:metadata:request:comments'] = 'Будь-які коментарі користувачів, що супроводжують запит.';
$string['privacy:metadata:request:dpocomment'] = 'Будь-які коментарі, зроблені офіцером із конфіденційності сайту щодо запиту.';
$string['privacy:metadata:request:requestedby'] = 'Ідентифікатор користувача, який робить запит, якщо він зроблений від імені іншого користувача.';
$string['privacy:metadata:request:timecreated'] = 'Позначка часу, яка вказує, коли користувач зробив запит.';
$string['privacy:metadata:request:userid'] = 'Ідентифікатор користувача, якому належить запит';
$string['privacyofficeronly'] = 'Лише користувачі, яким призначено роль офіцера з конфіденційності ({$a}), мають доступ до цього вмісту';
$string['privacyrequestexpiry'] = 'Термін дії запиту на дані';
$string['privacyrequestexpiry_desc'] = 'Час, протягом якого схвалені запити даних будуть доступні для завантаження до закінчення. Якщо встановлено нуль, то немає обмеження за часом.';
$string['protected'] = 'Захищений';
$string['protectedlabel'] = 'Зберігання цих даних має більший юридичний прецедент, ніж прохання користувача бути забутим. Ці дані будуть видалені лише після закінчення терміну зберігання.';
$string['purpose'] = 'Ціль';
$string['purpose_help'] = 'Мета описує причину обробки даних. Можна додати нову мету або, якщо вибрано «Наслідувати», буде застосовано ціль з вищого контексту. Контексти (від низького до високого): Блоки > Модулі активності > Курси > Категорії курсів > Користувач > Сайт.';
$string['purposecreated'] = 'Мета створена';
$string['purposedefault'] = 'Призначення за замовчуванням';
$string['purposedefault_help'] = 'Призначення за замовчуванням — це ціль, яка застосовується до будь-яких нових екземплярів. Якщо вибрано Наслідувати, застосовується мета з вищого контексту. Контексти (від низького до високого): Блоки > Модулі активності > Курси > Категорії курсів > Користувач > Сайт.';
$string['purposeoverview'] = 'Мета описує передбачуване використання та політику збереження збережених даних. Основа для зберігання та збереження цих даних також описана в цілі.';
$string['purposes'] = 'Цілі';
$string['purposeslist'] = 'Список цілей даних';
$string['purposeupdated'] = 'Призначення оновлено';
$string['replyto'] = 'Відповідати на';
$string['requestactions'] = 'Дії';
$string['requestapproved'] = 'Запит схвалено';
$string['requestby'] = 'З проханням';
$string['requestbydetail'] = 'З проханням:';
$string['requestcomments'] = 'Коментарі';
$string['requestcomments_help'] = 'Це поле дає змогу ввести будь-які додаткові відомості щодо запиту на дані.';
$string['requestcreation'] = 'Створення';
$string['requestdenied'] = 'Запит відхилено';
$string['requestemailintro'] = 'Ви отримали запит на дані:';
$string['requestfor'] = 'Користувач';
$string['requestmarkedcomplete'] = 'Запит позначено як завершений';
$string['requestorigin'] = 'Сайт';
$string['requestsapproved'] = 'Запити задоволені';
$string['requestsdenied'] = 'Запити відхилено';
$string['requeststatus'] = 'Статус';
$string['requestsubmitted'] = 'Ваш запит надіслано офіцеру з питань конфіденційності';
$string['requesttype'] = 'Тип';
$string['requesttype_help'] = 'Виберіть причину для звернення до спеціаліста з конфіденційності. Майте на увазі, що видалення всіх персональних даних призведе до того, що ви більше не зможете ввійти на сайт.';
$string['requesttypedelete'] = 'Видалити всі мої особисті дані';
$string['requesttypedeleteshort'] = 'Видалити';
$string['requesttypeexport'] = 'Експортувати всі мої особисті дані';
$string['requesttypeexportallowfiltering'] = 'Експортувати мої персональні дані';
$string['requesttypeexportshort'] = 'Експорт';
$string['requesttypeothers'] = 'Загальний запит';
$string['requesttypeothersshort'] = 'Повідомлення';
$string['requesttypeuser'] = '{$a->typename} ({$a->user})';
$string['requireallenddatesforuserdeletion'] = 'Вважайте курси без дати закінчення активними';
$string['requireallenddatesforuserdeletion_desc'] = 'Під час обчислення терміну дії користувача враховується кілька факторів:

* час останнього входу користувача порівнюється з періодом збереження для користувачів; і
* чи активно користувач зарахований на якісь курси.

Під час перевірки активної реєстрації на курс, якщо курс не має дати закінчення, цей параметр використовується, щоб визначити, чи вважається цей курс активним чи ні.

Якщо курс не має дати завершення, а цей параметр увімкнено, користувача не можна видалити.';
$string['requiresattention'] = 'Вимагає уваги.';
$string['requiresattentionexplanation'] = 'Цей плагін не здійснює API конфіденційності Moodle. Якщо цей плагін зберігає будь-які особисті дані, він не може бути експортований або видалений через системи конфіденційності Moodle.';
$string['resubmitrequest'] = 'Повторно надіслати запит {$a->type} для {$a->username}';
$string['resubmitrequestasnew'] = 'Надішліть повторно як новий запит';
$string['resubmittedrequest'] = 'Існуючий запит {$a->type} для {$a->username} було скасовано та надіслано повторно';
$string['resultdeleted'] = 'Нещодавно ви подали запит на видалення вашого облікового запису та особистих даних у {$a}. Цей процес завершено, і ви більше не зможете ввійти.';
$string['resultdownloadready'] = 'Ваша копія ваших особистих даних від {$a}, яку ви нещодавно запитали, тепер доступна для завантаження за цим посиланням.';
$string['retentionperiod'] = 'Термін зберігання';
$string['retentionperiod_help'] = 'Період зберігання визначає час, протягом якого дані повинні зберігатися. Коли термін зберігання закінчився, дані позначаються прапорцем і відображаються в списку для видалення, очікуючи підтвердження адміністратора.';
$string['retentionperiodnotdefined'] = 'Термін зберігання не визначено';
$string['retentionperiodzero'] = 'Немає терміну зберігання';
$string['reviewdata'] = 'Перегляньте дані';
$string['role'] = 'Роль';
$string['role_help'] = 'Роль, до якої має застосовуватися перевизначення.';
$string['roleoverride'] = 'Перевизначення ролі';
$string['roleoverrideoverview'] = 'Політику збереження за замовчуванням можна змінити для певних ролей користувачів, дозволяючи вказати довшу або коротшу політику збереження. Термін дії користувача закінчився лише тоді, коли закінчився термін дії всіх його ролей.';
$string['roleoverrides'] = 'Перевизначає роль';
$string['selectbulkaction'] = 'Виберіть групову дію.';
$string['selectcourses'] = 'Виберіть курси для експорту';
$string['selectdatarequests'] = 'Виберіть запити даних.';
$string['selectuserdatarequest'] = 'Виберіть запит даних {$a->requesttype} {$a->username}.';
$string['send'] = 'Надіслати';
$string['sensitivedatareasons'] = 'Причини обробки конфіденційних персональних даних';
$string['sensitivedatareasons_help'] = 'Виберіть одну або кілька застосовних причин, які звільняють від заборони обробки конфіденційних персональних даних, пов’язаних з цією метою. Щоб дізнатися більше, перегляньте <a href="https://gdpr-info.eu/art-9-gdpr/" target="_blank">GDPR ст. 9.2</a>';
$string['setdefaults'] = 'Значення за замовчуванням';
$string['showdataretentionsummary'] = 'Показати підсумок збереження даних';
$string['showdataretentionsummary_desc'] = 'Якщо ввімкнено, посилання на підсумок збереження даних відображається в нижньому колонтитулі сторінки та в профілях користувачів.';
$string['statusapproved'] = 'Затверджено';
$string['statusawaitingapproval'] = 'Очікує затвердження';
$string['statuscancelled'] = 'Скасовано';
$string['statuscomplete'] = 'Завершено';
$string['statusdeleted'] = 'Видалено';
$string['statusdetail'] = 'Статус:';
$string['statusexpired'] = 'Термін дії закінчився';
$string['statuspending'] = 'Очікується';
$string['statuspreprocessing'] = 'Попередня обробка';
$string['statusprocessing'] = 'Обробка';
$string['statusready'] = 'Завантаження готове';
$string['statusrejected'] = 'Відхилено';
$string['subjectscope'] = 'Предметна сфера';
$string['subjectscope_help'] = 'Обсяг предмета перелічує ролі, які можуть бути призначені в цьому контексті.';
$string['summary'] = 'Підсумок конфігурації реєстру';
$string['systemconfignotsetwarning'] = 'Призначення та категорія сайту не визначені. Якщо вони не визначені, усі дані будуть видалені під час обробки запитів на видалення.';
$string['tobedeleted'] = 'Дані, які підлягають видаленню';
$string['unexpiredrolewithretention'] = '{$a->retention} (Термін придатності не закінчився)';
$string['user'] = 'Користувач';
$string['userlistexplanation'] = 'Цей плагін має базового постачальника, але також має реалізувати постачальник списку користувачів для повної підтримки функцій конфіденційності.';
$string['userlistnoncompliant'] = 'Відсутній постачальник списку користувачів';
$string['viewrequest'] = 'Переглянути запит';
$string['visible'] = 'Розгорнути все';
