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
 * Strings for component 'data', language 'uk', version '4.1'.
 *
 * @package     data
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Дія';
$string['actionsmenu'] = 'Меню дій';
$string['add'] = 'Додати запис';
$string['addcomment'] = 'Додати коментар';
$string['addedby'] = 'Додано';
$string['addentries'] = 'Додати записи';
$string['addtemplate'] = 'Додати шаблон запису';
$string['advancedsearch'] = 'Розширений пошук';
$string['allowcomments'] = 'Дозволити коментувати записи';
$string['alttext'] = 'Альтернативний текст';
$string['approvalstatus'] = 'Статус схвалення';
$string['approve'] = 'Прийняти';
$string['approved'] = 'Прийнято';
$string['areacontent'] = 'Поля';
$string['ascending'] = 'за зростанням';
$string['asearchtemplate'] = 'Шаблон розширеного пошуку';
$string['atmaxentry'] = 'Ви ввели максимально допустиму кількість записів!';
$string['authorfirstname'] = 'Ім’я';
$string['authorlastname'] = 'Прізвище';
$string['autogenallforms'] = 'Згенерувати всі типові шаблони';
$string['autolinkurl'] = 'Автоматично зв\'язувати URL';
$string['availablefromdate'] = 'Доступно з';
$string['availabletags'] = 'Доступні теги';
$string['availabletags_help'] = 'Теги шаблону, які будуть замінені на реальні дані або інші елементи, такі як значок редагування, або перегляду. Поля мають формат [[fieldname]]. Інші теги мають формат ##sometag##. Тільки теги, які вказано у формі "Доступні теги"  можуть бути використані у поточному шаблоні.';
$string['availabletodate'] = 'Доступно до';
$string['availabletodatevalidation'] = 'Значення "до дати" не може бути раніше значення "від дати"';
$string['blank'] = 'Бланк';
$string['buttons'] = 'Дії';
$string['bynameondate'] = '{$a->name} - {$a->date}';
$string['calendarend'] = '{$a} завершується';
$string['calendarstart'] = '{$a} розпочинається';
$string['cancel'] = 'Скасувати';
$string['cannotaccesspresentsother'] = 'Вам не дозволено доступ до представлень інших користувачів';
$string['cannotadd'] = 'Не вдається додати записи';
$string['cannotapplypreset'] = 'Помилка застосування стилю.';
$string['cannotdeletepreset'] = 'Помилка видалення шаблону!';
$string['cannotoverwritepreset'] = 'Помилка перезапису представлення!';
$string['cannotunziptopreset'] = 'Не вдається розпакувати до каталогу представлень';
$string['checkbox'] = 'Множинний вибір';
$string['chooseexportfields'] = 'Виберіть поля, які потрібно експортувати';
$string['chooseexportformat'] = 'Виберіть формат, у який ви хочете експортувати';
$string['chooseorupload'] = 'Виберіть файл';
$string['choosepreset'] = 'Файл попереднього налаштування';
$string['closebeforeopen'] = 'Ви вказали дату завершення перед датою початку.';
$string['columns'] = 'колонки';
$string['comment'] = 'Коментар';
$string['commentdeleted'] = 'Коментар видалено';
$string['commentempty'] = 'Коментар був порожній';
$string['comments'] = 'Коментарі';
$string['commentsaved'] = 'Коментар збережено';
$string['commentsn'] = '{$a} коментар(ів)';
$string['commentsoff'] = 'Можливість коментування не включено';
$string['completiondetail:entries'] = 'Зробіть записи: {$a}';
$string['completionentries'] = 'Вимагати записи';
$string['completionentriescount'] = 'Кількість записів';
$string['completionentriesdesc'] = 'Потрібна мінімальна кількість записів: {$a}';
$string['configenablerssfeeds'] = 'Цей перемикач надасть можливість RSS новин для всіх баз. Але вам потрібно буде також встановити стрічки новин для кожної бази даних.';
$string['confirmdeletefield'] = 'Ви видаляєте це поле, ви впевнені?';
$string['confirmdeleterecord'] = 'Ви впевнені, що хочете видалити цей запис?';
$string['confirmdeleterecords'] = 'Ви дійсно хочете видалити ці записи?';
$string['createactivity'] = 'Створіть власні поля для збору даних або скористайтеся шаблоном, який уже містить поля.';
$string['createfields'] = 'Створіть поля для збору різних типів даних.';
$string['createtemplates'] = 'Шаблони визначають інтерфейс вашої діяльності. Після створення полів шаблони створюватимуться автоматично. Крім того, ви можете використовувати стиль, який містить поля та шаблони.';
$string['csstemplate'] = 'Користувацький CSS';
$string['csvfailed'] = 'Відключено читання нових даних з CSV-файлу';
$string['csvfile'] = 'CSV файл';
$string['csvimport'] = 'Імпорт CSV файлу';
$string['csvimport_help'] = 'Записи можуть бути імпортовані через текстовий файл зі списком імен полів в першому рядку, а дані записуються по одному запису на рядок.';
$string['csvwithselecteddelimiter'] = '<abbr title="розділено комою">CSV</abbr>';
$string['data:addinstance'] = 'Додавати нову Базу даних';
$string['data:approve'] = 'Схвалювати непідтверджені записи';
$string['data:comment'] = 'Писати коментарі';
$string['data:exportallentries'] = 'Експортувати всі записи';
$string['data:exportentry'] = 'Експортувати записи';
$string['data:exportownentry'] = 'Експортувати власні записи';
$string['data:exportuserinfo'] = 'Експортувати інформацію про користувача';
$string['data:managecomments'] = 'Управляти коментарями';
$string['data:manageentries'] = 'Управляти записами';
$string['data:managetemplates'] = 'Управляти шаблонами';
$string['data:manageuserpresets'] = 'Керувати шаблонами';
$string['data:rate'] = 'Оцінювати записи';
$string['data:readentry'] = 'Читати записи';
$string['data:view'] = 'Перегляд активності бази даних';
$string['data:viewallratings'] = 'Переглядати всі оцінення в явному виді';
$string['data:viewalluserpresets'] = 'Переглядати представлення від всіх користувачів';
$string['data:viewanyrating'] = 'Переглядати загальне оцінювання будь-кого';
$string['data:viewentry'] = 'Переглядати записи';
$string['data:viewrating'] = 'Переглядати оцінки';
$string['data:writeentry'] = 'Писати записи';
$string['date'] = 'Дата';
$string['dateentered'] = 'Дата введення';
$string['datemodified'] = 'Останнє редагування:';
$string['defaultfielddelimiter'] = '(типово - кома)';
$string['defaultfieldenclosure'] = '(типово - пусто)';
$string['defaultsortfield'] = 'Типове сортування полів';
$string['delcheck'] = 'Позначення гуртового вилучення';
$string['delete'] = 'Вилучити';
$string['deleteallentries'] = 'Видалити всі записи';
$string['deletecomment'] = 'Ви впевнені, що хочете видалити цей коментар?';
$string['deleteconfirm'] = 'Видалити шаблон {$a}?';
$string['deleted'] = 'вилучено';
$string['deleteentry'] = 'Видалити запис';
$string['deletefield'] = 'Видалити поле';
$string['deletenotenrolled'] = 'Вилучити записи не зареєстрованих користувачів';
$string['deletewarning'] = 'Видалення шаблону видаляє його зі списку доступних шаблонів у всіх курсах.';
$string['descending'] = 'за спаданням';
$string['directorynotapreset'] = '{$a->directory} не є в представленнях: не має файлів: {$a->missing_files}';
$string['disapprove'] = 'Скасувати схвалення';
$string['download'] = 'Завантажити';
$string['edit'] = 'Редагувати';
$string['editcomment'] = 'Редагувати коментар';
$string['editentry'] = 'Редагувати запис';
$string['editfield'] = 'Редагувати поле';
$string['editordisable'] = 'Відключити редактор';
$string['editorenable'] = 'Увімкнути редактор коду';
$string['editpreset'] = 'Редагувати попередні налаштування';
$string['emptyadd'] = 'Вказаний шаблон - пустий, генерується типова форма...';
$string['emptyaddform'] = 'Ви не заповнили жодного поля!';
$string['emptypresetname'] = 'Попереднє ім’я або файл не можуть бути порожніми';
$string['enabletemplateeditorcheck'] = 'Ви впевнені, що хочете ввімкнути редактор? Це може призвести до зміни вмісту під час збереження шаблону.';
$string['entries'] = 'Записи';
$string['entrieslefttoadd'] = 'Ви повинні додати ще {$a->entriesleft} запис(ів), щоб завершити цю дію.';
$string['entrieslefttoaddtoview'] = 'Ви повинні ввести більше чим {$a->entrieslefttoview} запис(ів) перед тим, як матимете змогу бачити записи інших.';
$string['entry'] = 'Запис';
$string['entrysaved'] = 'Запис збережено';
$string['errormustbeteacher'] = 'Тільки викладачі можуть використовувати цю сторінку!';
$string['errormustsupplyvalue'] = 'Ви повинні тут вказати значення.';
$string['errorpresetexists'] = 'Шаблон з такою назвою вже існують.';
$string['errorpresetexistsbutnotoverwrite'] = 'Стилі з такою назвою вже існують. Виберіть інше ім\'я.';
$string['errorpresetnotfound'] = 'Налаштування з назвою {$a} не знайдено.';
$string['eventfieldcreated'] = 'Створено поле';
$string['eventfielddeleted'] = 'Вилучено поле';
$string['eventfieldupdated'] = 'Оновлено поле';
$string['eventrecordcreated'] = 'Створено запис';
$string['eventrecorddeleted'] = 'Вилучено запис';
$string['eventrecordupdated'] = 'Оновлено запис';
$string['eventtemplateupdated'] = 'Оновлено шаблон';
$string['eventtemplateviewed'] = 'Переглянуто шаблони';
$string['example'] = 'Приклад модуля бази даних';
$string['excel'] = 'Excel';
$string['expired'] = 'На жаль, ця діяльність закрита на {$a} і більше не доступна';
$string['export'] = 'Експорт';
$string['exportaszip'] = 'Експортувати як zip';
$string['exportaszip_help'] = 'Можливість експорту в архіві дозволяє вам зберегти шаблони та поля як zip-представлення для завантаження. Цей архів можна буде імпортувати в інший курс.';
$string['exportedtozip'] = 'Експортовано в тимчасовий zip...';
$string['exportentries'] = 'Експорт записи';
$string['exportformat'] = 'Формат експорту';
$string['exportoptions'] = 'Параметри експорту';
$string['exportownentries'] = 'Експортувати тільки ваші власні записи? ({$a->mine}/{$a->all})';
$string['exportpreset'] = 'Експортувати пресет';
$string['failedpresetdelete'] = 'Під час спроби видалення шаблону сталася помилка.';
$string['fieldadded'] = 'Поле додано';
$string['fieldallowautolink'] = 'Дозволити автозв\'язування';
$string['fielddeleted'] = 'Поле вилучено';
$string['fielddelimiter'] = 'Роздільник полів';
$string['fielddescription'] = 'Опис поля';
$string['fieldenclosure'] = 'Вкладення поля';
$string['fieldheight'] = 'Висота';
$string['fieldheightlistview'] = 'Висота (у пікселях) у списку';
$string['fieldheightsingleview'] = 'Висота (у пікселях) в одному вигляді';
$string['fieldids'] = 'Коди поля';
$string['fieldmappings'] = 'Відображення полів';
$string['fieldmappings_help'] = 'Це меню дозволяє зберігати дані з існуючої бази даних. Щоб зберегти дані в полі, ви повинні зіставити їх з новим полем, де дані з’являться. Будь-яке поле також можна залишити порожнім, без копіювання в нього інформації. Будь-яке старе поле, не зіставлене з новим, буде втрачено, а всі його дані видалено. Ви можете зіставити лише поля одного типу, тому кожне спадне меню матиме різні поля. Крім того, ви повинні бути обережні, щоб не зіставити одне старе поле з більш ніж одним новим.';
$string['fieldname'] = 'Ім\'я поля';
$string['fieldnametype'] = '{$a->name} ({$a->type})';
$string['fieldnotmatched'] = 'У файлі є поля невідомі в цій базі даних: {$a}';
$string['fieldoptions'] = 'Опції (одна на рядок)';
$string['fields'] = 'Поля';
$string['fieldshelp'] = 'Створіть поля для збору різних типів даних. Поля визначають структуру записів у базі даних.';
$string['fieldsnavigation'] = 'Поля третинної навігації';
$string['fieldupdated'] = 'Поле поновлено';
$string['fieldwidth'] = 'Ширина';
$string['fieldwidthlistview'] = 'Ширина (у пікселях) у списку';
$string['fieldwidthsingleview'] = 'Ширина (у пікселях) в одиничному перегляді';
$string['file'] = 'Файл';
$string['fileencoding'] = 'Кодування';
$string['filesnotgenerated'] = 'Не всі файли були згенеровані: {$a}';
$string['filtername'] = 'Автозв\'язування бази даних';
$string['footer'] = 'Нижній колонтитул';
$string['forcelinkname'] = 'Примусова назва для зв\'язку';
$string['foundnorecords'] = 'Записів не знайдено. <a href="{$a->reseturl}">Очистити все</a>';
$string['foundrecords'] = 'Знайдено {$a->num} із {$a->max} записів. <a href="{$a->reseturl}">Очистити все</a>';
$string['fromfile'] = 'із zip архіву';
$string['fromfile_help'] = 'Імпорт із zip архіву дозволяє звантажувати архів представлень з шаблонами та полями.';
$string['generateerror'] = 'Не всі файли, створено!';
$string['header'] = 'Шапка';
$string['headeraddtemplate'] = 'Визначте інтерфейс для додавання або редагування записів.';
$string['headerasearchtemplate'] = 'Визначте інтерфейс для розширеного пошуку.';
$string['headercsstemplate'] = 'Додайте власний CSS до шаблонів.';
$string['headerjstemplate'] = 'Додайте спеціальний JavaScript для шаблонів запису List, Single або Add.';
$string['headerlisttemplate'] = 'Визначте вигляд списку.';
$string['headerrsstemplate'] = 'Визначте вигляд записів у RSS-каналах.';
$string['headersingletemplate'] = 'Визначте зовнішній вигляд Single view.';
$string['id'] = 'ID запису';
$string['importandapply'] = 'Імпортуйте попередні налаштування та застосуйте';
$string['importapreset'] = 'Імпортувати стиль';
$string['importentries'] = 'Імпорт записів';
$string['importpreset'] = 'Імпорт попереднього налаштування';
$string['importpreset_desc'] = 'Попереднє налаштування буде застосовано до цієї дії, створюючи поля та шаблони. Він не відображатиметься у списку попередніх налаштувань.';
$string['importpresetmissingcapability'] = 'Ви не маєте дозволу імпортувати стиль.';
$string['importsuccess'] = 'Попереднє налаштування застосовано.';
$string['includeapproval'] = 'Включити статус схвалення';
$string['includetags'] = 'Включити теги';
$string['includetime'] = 'Включити час введення/модифікації';
$string['includeuserdetails'] = 'Включити дані користувача';
$string['indicator:cognitivedepth'] = 'База даних: пізнавальний аспект';
$string['indicator:cognitivedepth_help'] = 'Цей показник ґрунтується на глибині когнітивної діяльності, досягнутої студентом у діяльності з базою даних.';
$string['indicator:cognitivedepthdef'] = 'База даних когнітивна';
$string['indicator:cognitivedepthdef_help'] = 'Учасник досяг цього відсотка когнітивної активності, запропонованої діяльністю Бази даних протягом цього інтервалу аналізу (Рівні = Без перегляду, Перегляд, Надсилання)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'База даних: соціальний аспект';
$string['indicator:socialbreadth_help'] = 'Цей показник базується на соціальному розширенні, досягнутому студентом у діяльності в базі даних.';
$string['indicator:socialbreadthdef'] = 'База даних соц';
$string['indicator:socialbreadthdef_help'] = 'Учасник досяг цього відсотка соціальної залученості, запропонованої діяльністю Бази даних протягом цього інтервалу аналізу (Рівні = Без участі, лише учасник)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['insufficiententries'] = 'потрібно більше записів для перегляду даної бази даних';
$string['intro'] = 'Опис';
$string['invalidaccess'] = 'До цієї сторінки був неправильний доступ';
$string['invalidfieldid'] = 'Неправильний код поля';
$string['invalidfieldname'] = 'Будь ласка виберіть інше ім\'я для цього поля';
$string['invalidfieldtype'] = 'Неправильний тип поля';
$string['invalidid'] = 'Неправильний код даних';
$string['invalidpreset'] = '{$a} не є представленням.';
$string['invalidrecord'] = 'Неправильний запис';
$string['invalidurl'] = 'Введений вами URL неправильний';
$string['jstemplate'] = 'Користувацький JavaScript';
$string['latitude'] = 'Широта';
$string['latlong'] = 'Координати';
$string['latlongboth'] = 'Широта і довгота є обов’язковими.';
$string['latlongdownloadallhint'] = 'Завантажити зв\'язки для всіх записів як KML';
$string['latlongkmllabelling'] = 'Як іменувати елементи в KML-файлі (Google Earth)';
$string['latlonglinkservicesdisplayed'] = 'Показати послуги зв\'язку';
$string['latlongotherfields'] = 'Інші поля';
$string['list'] = 'Перегляд списку';
$string['listtemplate'] = 'Шаблон перегляду списку';
$string['listview'] = 'Перегляд списку';
$string['longitude'] = 'Довгота';
$string['manageapproved'] = 'Дозволити редагування схвалених записів';
$string['manageapproved_help'] = 'Дозвольте студентам редагувати або видаляти свої записи після їх схвалення. Відредаговані записи потрібно буде повторно затвердити.';
$string['managefields'] = 'Керувати полями';
$string['mapexistingfield'] = 'Визначити для {$a}';
$string['mapnewfield'] = 'Створити нове поле';
$string['mapping:applypresets'] = 'Застосувати попередні налаштування';
$string['mapping:dialogtitle:usepreset'] = 'Застосувати стиль {$a}?';
$string['mapping:fieldstocreate'] = 'Поля, які потрібно створити: {$a}';
$string['mapping:fieldstodelete'] = 'Існуючі поля, які потрібно видалити: {$a}';
$string['mapping:mapfields'] = 'Поля карти';
$string['mapping:warningmessagedelete'] = 'Якщо поля, які потрібно видалити, мають той самий тип, що й нові поля в стилі, який ви застосовуєте, ви можете зіставити їх у Полях карти.';
$string['mapping:warningmessagedeleteandcreate'] = 'Якщо поля, які потрібно видалити, мають той самий тип, що й поля, які потрібно створити, ви можете зіставити їх у Полях карти.';
$string['mappingwarning'] = 'Всі старі поля, не вказані у зв\'язку з новим полем, будуть втрачені і вся інформація в цьому полі буде видалена.';
$string['maxentries'] = 'Максимум записів';
$string['maxentries_help'] = 'Максимальна кількість записів, які студенту дозволено внести.';
$string['maxsize'] = 'Максимальний обсяг';
$string['menu'] = 'Меню';
$string['menuchoose'] = 'Вибрати...';
$string['missingdata'] = 'Для класу поля необхідно вказати ідентифікатор даних або об’єкт.';
$string['missingfield'] = 'Програмна помилка: Ви повинні визначити поле та/або дані, коли визначаєте клас поля.';
$string['missingfieldtype'] = 'Тип поля для {$a->name} не знайдено';
$string['missingfieldtypeimport'] = 'Наступні поля не було імпортовано, оскільки їх відповідні типи полів не встановлено:';
$string['missingfieldtypes'] = 'Для наступних полів не встановлено відповідні типи полів, тому вони не будуть включені у форму Додати запис. Вам потрібно перевірити Додати шаблон запису та видалити всі назви полів.';
$string['modulename'] = 'База даних';
$string['modulename_help'] = 'База даних дозволяє учасникам створювати, підтримувати та шукати колекцію записів.

Структура записів визначається за допомогою різних типів полів, таких як короткий текст, розкривний список, текстова область, URL-адреса, зображення або файл.

Як викладач ви можете коментувати та оцінювати записи. Ви також можете дозволити учням оцінювати та коментувати записи (колегичне оцінювання). Оцінки можна агрегувати, щоб сформувати підсумкову оцінку, яка записується в журнал оцінок.

Якщо ввімкнено фільтр автоматичного зв’язування бази даних, будь-які записи в базі даних будуть автоматично пов’язані там, де з’являються слова чи фрази в межах курсу.

Ви можете використовувати базу даних, щоб:

* Створіть спільну колекцію посилань, книг, оглядів книг, посилань на журнали тощо.

* Показуйте створені учнями фотографії, плакати, веб-сайти чи вірші для коментарів і перегляду однолітками.';
$string['modulename_link'] = 'mod/data/view';
$string['modulenameplural'] = 'Бази даних';
$string['more'] = 'Детальний перегляд...';
$string['moreurl'] = 'Ще URL';
$string['movezipfailed'] = 'Не можу перемістити архів';
$string['multientry'] = 'Дублюючий запис';
$string['multimenu'] = 'Меню (Мульти-вибір)';
$string['multipletags'] = 'Знайдено багато тег! Шаблон не збережено';
$string['newentry'] = 'Новий запис';
$string['newfield'] = 'Створіть поле';
$string['newfield_help'] = 'Поле дозволяє вводити дані. Кожен запис активності в базі даних може мати кілька полів різних типів, наприклад поле дати, яке дозволяє учасникам вибрати день, місяць і рік зі спадного меню, поле зображення, яке дозволяє учасникам завантажувати файл зображення, або поле прапорця, яке дозволяє учасникам вибрати один або кілька варіантів.
Кожне поле повинно мати унікальну назву поля. Опис поля необов’язковий.';
$string['noaccess'] = 'Ви не маєте доступу до цього поля';
$string['nodefinedfields'] = 'В новому представленні не вказані поля';
$string['nofieldcontent'] = 'Не знайдено наповнення поля';
$string['nofieldindatabase'] = 'Жодного поля не визначено в цій базі даних';
$string['nofields'] = 'Ще немає полів';
$string['nolisttemplate'] = 'Шаблон подання списку ще не визначено';
$string['nomatch'] = 'Жодного запису не знайдено!';
$string['nomaximum'] = 'Максимум не визначено';
$string['nopreviewavailable'] = 'Немає попереднього перегляду для {$a}';
$string['norecords'] = 'Записів ще немає';
$string['nosingletemplate'] = 'Шаблон єдиного перегляду ще не визначено';
$string['notapproved'] = 'Очікує підтвердження';
$string['notapprovederror'] = 'Вхід ще не схвалено.';
$string['notemplates'] = 'Шаблонів ще немає';
$string['notinjectivemap'] = 'Немає карти введення';
$string['notopenyet'] = 'ця діяльність не доступна до {$a}';
$string['number'] = 'Числове';
$string['numberrssarticles'] = 'RSS статті';
$string['numnotapproved'] = 'Очікування';
$string['numrecords'] = '{$a} записів';
$string['ods'] = '<abbr title="OpenDocument Spreadsheet">ODS</abbr>&nbsp;(OpenOffice)';
$string['openafterclose'] = 'Ви вказали дату відкриття після дати закриття';
$string['optionaldescription'] = 'Короткий опис (не обов\'язкове)';
$string['optionalfilename'] = 'Ім\'я файлу (не обов\'язкове)';
$string['other'] = 'Інше';
$string['overrwritedesc'] = 'Замініть існуючий стиль на цю назву та перезапишіть його вміст';
$string['overwrite'] = 'Переписати';
$string['overwritesettings'] = 'Перезаписати поточні налаштування, такі як коментарі, оцінки тощо.';
$string['page-mod-data-x'] = 'Будь-яка сторінка діяльності База даних';
$string['pagesize'] = 'Записів на сторінку';
$string['participants'] = 'Учасники';
$string['picture'] = 'Картинка';
$string['pleaseaddsome'] = 'Створіть наступне або <a href="{$a}">виберіть визначені установки</a> для початку.';
$string['pluginadministration'] = 'Керування базою даних';
$string['pluginname'] = 'База даних';
$string['portfolionotfile'] = 'Експортувати до портфоліо, а не у файл (тільки csv та leap2a)';
$string['presetdeleted'] = 'Шаблон видалено';
$string['presetinfo'] = 'Зберегти як предустановки для публікації цього шаблону. Інші користувачі зможуть використовувати його в своїх базах даних.';
$string['presetnotselected'] = 'Не вибрано жодного попереднього налаштування.';
$string['presets'] = 'Представлення';
$string['presetshelp'] = 'Виберіть стиль, який буде використовуватися як відправна точка.';
$string['preview'] = 'Попередній перегляд {$a}';
$string['privacy:metadata:commentpurpose'] = 'Коментарі до записів бази даних';
$string['privacy:metadata:data_content'] = 'Вміст поля';
$string['privacy:metadata:data_content:content'] = 'Зміст';
$string['privacy:metadata:data_content:content1'] = 'Додатковий зміст 1';
$string['privacy:metadata:data_content:content2'] = 'Додатковий зміст 2';
$string['privacy:metadata:data_content:content3'] = 'Додатковий зміст 3';
$string['privacy:metadata:data_content:content4'] = 'Додатковий зміст 4';
$string['privacy:metadata:data_content:fieldid'] = 'Ідентифікатор визначення поля';
$string['privacy:metadata:data_records'] = 'Записи в базі даних діяльності';
$string['privacy:metadata:data_records:approved'] = 'Статус затвердження';
$string['privacy:metadata:data_records:groupid'] = 'Група';
$string['privacy:metadata:data_records:timecreated'] = 'Час створення запису';
$string['privacy:metadata:data_records:timemodified'] = 'Час останньої зміни запису';
$string['privacy:metadata:data_records:userid'] = 'Користувач, який створив запис';
$string['privacy:metadata:datafieldnpluginsummary'] = 'Поля для модуля активності бази даних';
$string['privacy:metadata:filepurpose'] = 'Файл, прикріплений до запису бази даних';
$string['privacy:metadata:ratingpurpose'] = 'Рейтинги записів бази даних';
$string['privacy:metadata:tagpurpose'] = 'Теги в записах бази даних';
$string['radiobutton'] = 'Перемикачі';
$string['recordapproved'] = 'Запис погоджено';
$string['recorddeleted'] = 'Запис вилучено';
$string['recorddisapproved'] = 'Запис не схвалено';
$string['recordsnotsaved'] = 'Жодного запису не збережено. Будь ласка, перевірте тип файлу, який ви завантажуєте.';
$string['recordssaved'] = 'записи збережено';
$string['removealldatatags'] = 'Видаліть усі теги бази даних';
$string['requireapproval'] = 'Вимагає погодження?';
$string['requireapproval_help'] = 'Викладач має затвердити записи, перш ніж вони стануть видимими для всіх.';
$string['required'] = 'Обов’язкове';
$string['requiredentries'] = '&nbsp;';
$string['requiredentries_help'] = 'Якщо налаштовано, відображається повідомлення із зазначенням кількості записів, необхідних для завершення.

Зауважте, що це налаштування не пов’язане із завершенням дії. Для записів, необхідних для завершення діяльності, слід використовувати новий параметр завершення діяльності «Вимагати записів». Щоб повністю видалити це налаштування, установіть значення «Немає», а потім збережіть зміни. Скористайтеся обов’язковими полями для записів у розділі Завершення діяльності.';
$string['requiredentriestoview'] = 'Потрібна кількість записів для перегляду інших записів';
$string['requiredentriestoview_help'] = 'Кількість записів, які студент має додати, перш ніж вони зможуть переглядати записи інших студентів.

Це несумісно з фільтром автоматичного зв’язування бази даних.';
$string['requiredentrieswarning'] = 'Це налаштування було замінено налаштуванням завершення дії "Потрібні записи"';
$string['requiredfield'] = 'Обов’язкове поле';
$string['resetalltemplates'] = 'Скинути всі шаблони';
$string['resetalltemplatesconfirm'] = 'Ви збираєтеся видалити всі шаблони для вашого поточного стилю. Якщо ви захочете відновити шаблони пізніше, вам потрібно знову вибрати стиль на вкладці «Стилі».';
$string['resetalltemplatesconfirmtitle'] = 'Скинути всі шаблони?';
$string['resetsettings'] = 'Скинути фільтри';
$string['resettemplate'] = 'Перевстановити шаблон';
$string['resettemplateconfirm'] = 'Це назавжди видалить {$a} для вашого поточного стилю.';
$string['resettemplateconfirmtitle'] = 'Скинути шаблон?';
$string['resizingimages'] = 'Зміна розміру малюнка';
$string['rows'] = 'рядки';
$string['rssglobaldisabled'] = 'Відключено. Дивіться налаштування змінних сайту.';
$string['rsstemplate'] = 'Шаблон RSS';
$string['rsstitletemplate'] = 'Шаблон назви RSS';
$string['rsstype'] = 'RSS забезпечення для цієї діяльності';
$string['save'] = 'Зберегти';
$string['saveandadd'] = 'Зберегти та ввести нове';
$string['saveandview'] = 'Зберегти та переглянути';
$string['saveaspreset'] = 'Опублікувати стиль на цьому сайті';
$string['saveaspreset_help'] = 'Зберегти як представлення публікує шаблони та поля як представлення, яке може бути використане в інших частинах сайту. (Ви можете видалити його зі списку представлень у будь-який момент.)';
$string['saveaspresetmissingcapability'] = 'Користувач не має дозволу на збереження бази даних як попереднього налаштування.';
$string['savedataaspreset'] = 'Збережіть усі поля та шаблони та опублікуйте як попередньо налаштоване на цьому сайті';
$string['savesettings'] = 'Зберегти установки';
$string['savesuccess'] = 'Попереднє налаштування збережено. <a href="{$a->url}">Попередній перегляд</a>';
$string['savetemplate'] = 'Зберегти шаблон';
$string['search'] = 'Пошук';
$string['search:activity'] = 'База даних - інформація про діяльність';
$string['search:entry'] = 'База даних - записи';
$string['selectedrequired'] = 'Всі відібрані вимоги';
$string['selectexportoptions'] = 'Виберіть параметри експорту';
$string['selectfields'] = 'Виберіть поля';
$string['showall'] = 'Показати всі записи';
$string['showmore'] = 'Показати більше';
$string['single'] = 'Перегляд одного запису';
$string['singletemplate'] = 'Шаблон єдиного перегляду';
$string['singleview'] = 'Одиночний вид';
$string['startbuilding'] = 'Почніть будувати свою діяльність';
$string['subplugintype_datafield'] = 'Тип поля бази даних';
$string['subplugintype_datafield_plural'] = 'Типи полів бази даних';
$string['subplugintype_datapreset'] = 'Представлення';
$string['subplugintype_datapreset_plural'] = 'Представлення';
$string['tagarea_data_records'] = 'Записи даних';
$string['tags'] = 'Мітки';
$string['tagsdeleted'] = 'Теги бази даних видалено';
$string['teachersandstudents'] = '{$a->teachers} та {$a->students}';
$string['templatereset'] = 'Скидання шаблону';
$string['templateresetall'] = 'Усі шаблони скинуто';
$string['templates'] = 'Шаблони';
$string['templatesaved'] = 'Шаблони збережено';
$string['templatesnavigation'] = 'Шаблони третинної навігації';
$string['text'] = 'Текст';
$string['textarea'] = 'Багаторядковий текст';
$string['timeadded'] = 'Час введення';
$string['timemodified'] = 'Час модифікації';
$string['todatabase'] = 'в цю базу даних';
$string['type'] = 'Тип поля';
$string['undefinedprocessactionmethod'] = 'Немає методу дій, визначеного в Data_Preset, для дій "{$a}".';
$string['unknown'] = 'Невідоме поле';
$string['unsupportedexport'] = '({$a->fieldtype}) не може бути експортованим.';
$string['unsupportedfields'] = 'Непідтримувані поля';
$string['unsupportedfieldslist'] = 'Не можна експортувати такі поля:';
$string['updatefield'] = 'Оновити створене поле';
$string['uploadfile'] = 'Завантажити файл';
$string['uploadrecords'] = 'Завантажити записи з файлу';
$string['uploadrecords_help'] = 'Записи можна завантажувати через текстовий файл. Формат файлу має бути таким:

* Кожен рядок файлу містить один запис
* Кожен запис являє собою ряд даних, розділених вибраним роздільником
* Перший запис містить список імен полів, що визначають формат решти файлу

Охоплення поля — це символ, який оточує кожне поле в кожному записі. Зазвичай його можна не налаштувати.';
$string['uploadrecords_link'] = 'mod/data/import';
$string['url'] = 'URL';
$string['usedate'] = 'Включити в пошук';
$string['usepredefinedset'] = 'Використовуйте попередньо визначений набір';
$string['usepreset'] = 'Використовуйте цей стиль';
$string['usestandard'] = 'Використовувати представлення';
$string['usestandard_help'] = 'Щоб використовувати представлення доступне для сайту, виберіть його зі списку можливих. (Якщо ви додали представлення до цього списку, то ви можете його звідси і видалити.)';
$string['viewfromdate'] = 'Форма перегляду';
$string['viewnavigation'] = 'Третинна навігація в режимі перегляду';
$string['viewtemplates'] = 'Переглянути шаблони';
$string['viewtodate'] = 'Перегляд до';
$string['viewtodatevalidation'] = 'Значення "читати тільки до дати" не може бути раніше значення "читати тільки від дати".';
$string['wrongdataid'] = 'Надано неправильний ідентифікатор даних';
