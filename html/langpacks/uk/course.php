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
 * Strings for component 'course', language 'uk', version '4.1'.
 *
 * @package     course
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitychooseractivefooter'] = 'Нижній колонтитул вибору діяльності';
$string['activitychooseractivefooter_desc'] = 'Вибір активності може підтримувати плагіни, які додають елементи в нижній колонтитул.';
$string['activitychoosercategory'] = 'Вибір діяльності';
$string['activitychooserhidefooter'] = 'Немає нижнього колонтитула';
$string['activitychooserrecommendations'] = 'Рекомендовані види діяльностей';
$string['activitychoosersettings'] = 'Налаштування вибору діяльностей';
$string['activitychoosertabmode'] = 'Вкладка вибору діяльностей';
$string['activitychoosertabmode_desc'] = 'Засіб вибору діяльності дозволяє вчителю легко вибирати види діяльності та ресурси для додавання до свого курсу. Цей параметр визначає, які вкладки мають відображатися в ньому. Зауважте, що вкладка із зірочкою відображається лише для користувача, якщо він позначив одну або кілька дій, а рекомендована вкладка відображається лише в тому випадку, якщо адміністратор сайту вказав деякі рекомендовані дії.';
$string['activitychoosertabmodeone'] = 'Відмічені, Усі, Заходи, Ресурси, Рекомендовані';
$string['activitychoosertabmodethree'] = 'Відмічені, Заходи, Ресурси, Рекомендовані';
$string['activitychoosertabmodetwo'] = 'Позначено зірочкою, Усі, Рекомендовано';
$string['activitydate:closed'] = 'Завершення:';
$string['activitydate:closes'] = 'Закривається:';
$string['activitydate:opened'] = 'Розпочато:';
$string['activitydate:opens'] = 'Відкривається:';
$string['aria:coursecategory'] = 'Категорія курсу';
$string['aria:courseimage'] = 'Зображення курсу';
$string['aria:coursename'] = 'Назва курсу';
$string['aria:courseshortname'] = 'Коротка назва курсу';
$string['aria:defaulttab'] = 'Види діяльності за замовчуванням';
$string['aria:favourite'] = 'Курс позначений зірочкою';
$string['aria:favouritestab'] = 'Відмічені види діяльності';
$string['aria:modulefavourite'] = 'Позначити активність {$a}';
$string['aria:recommendedtab'] = 'Рекомендовані види діяльності';
$string['browsecourseadminindex'] = 'Перегляньте адміністрацію курсу з цим індексом.';
$string['browsesettingindex'] = 'Перегляньте налаштування за допомогою цього індексу.';
$string['completion_automatic:done'] = 'Зроблено:';
$string['completion_automatic:failed'] = 'Не вдалося:';
$string['completion_automatic:todo'] = 'Зробити:';
$string['completion_manual:aria:done'] = '{$a} позначено як виконане. Натисніть, щоб скасувати.';
$string['completion_manual:aria:markdone'] = 'Позначити {$a} як виконане';
$string['completion_manual:done'] = 'Готово';
$string['completion_manual:markdone'] = 'Позначити як виконано';
$string['completion_setby:auto:done'] = 'Готово: {$a->condition} (встановлено {$a->setby})';
$string['completion_setby:auto:todo'] = 'Щоб зробити: {$a->condition} (встановлено {$a->setby})';
$string['completion_setby:manual:done'] = '{$a->activityname} позначено {$a->setby} як виконане. Натисніть, щоб скасувати.';
$string['completion_setby:manual:markdone'] = '{$a->activityname} позначено {$a->setby} як невиконане. Натисніть, щоб позначити як виконане.';
$string['completionrequirements'] = 'Вимоги до завершення для {$a}';
$string['courseaccess'] = 'Доступ до курсу';
$string['coursealreadyfinished'] = 'Курс уже закінчено';
$string['coursecontentnotification'] = 'Надіслати сповіщення про зміну вмісту';
$string['coursecontentnotification_help'] = 'Установіть прапорець, щоб повідомити учасників курсу про цю нову чи змінену діяльність чи ресурс. Сповіщення отримають лише користувачі, які мають доступ до активності або ресурсу.';
$string['coursecontentnotifnew'] = 'Новий вміст {$a->coursename}';
$string['coursecontentnotifnewbody'] = '<p>{$a->moduletypename} <a href="{$a->link}">{$a->modulename}</a> нове в курсі <a href="{$a->courselink}">{$a->coursename}</a>. </p><p>Змініть свої налаштування сповіщень</>';
$string['coursecontentnotifupdate'] = 'Зміна вмісту {$a->coursename}';
$string['coursecontentnotifupdatebody'] = '<p>{$a->moduletypename} <a href="{$a->link}">{$a->modulename}</a> було змінено в курсі  <a href="{$a->courselink}">{$a->coursename}</a>.</p><p>Змініть свої налаштування сповіщень</p>';
$string['coursenotyetfinished'] = 'Курс ще не закінчився';
$string['coursenotyetstarted'] = 'Курс ще не розпочався';
$string['courseparticipants'] = 'Учасники курсу';
$string['coursetoolong'] = 'Курс занадто довгий';
$string['customfield_islocked'] = 'Заблоковано';
$string['customfield_islocked_help'] = 'Якщо поле заблоковано, лише користувачі, які мають можливість змінювати заблоковані спеціальні поля (за замовчуванням користувачі лише з роллю менеджера за замовчуванням), зможуть змінити його в налаштуваннях курсу.';
$string['customfield_notvisible'] = 'Ніхто';
$string['customfield_visibility'] = 'Видно для';
$string['customfield_visibility_help'] = 'Цей параметр визначає, хто може переглядати назву та значення спеціального поля в списку курсів або у доступному фільтрі користувацького поля на інформаційній панелі.';
$string['customfield_visibletoall'] = 'Усі';
$string['customfield_visibletoteachers'] = 'Вчителі';
$string['customfieldsettings'] = 'Загальні налаштування спеціальних полів курсу';
$string['daystakingcourse'] = 'Дні проходження курсу';
$string['downloadcontent'] = 'Включити в завантаження змісту курсу';
$string['downloadcontent_help'] = 'Чи слід включати цю діяльність або ресурс до zip-файлу вмісту курсу, доступного для завантаження? Файл, папку, сторінку та етикетку можна повністю завантажити. Для всіх інших видів діяльності та ресурсів завантажуються лише назва та опис. Для цього параметра потрібно ввімкнути завантаження вмісту курсу в налаштуваннях курсу. Налаштування не впливає на завантаження вмісту мобільного додатка для використання в автономному режимі.';
$string['downloadcourseconfirmation'] = 'Ви збираєтеся завантажити zip-файл із вмістом курсу (за винятком елементів, які неможливо завантажити, і файлів, розмір яких перевищує {$a}).';
$string['downloadcoursecontent'] = 'Завантажити зміст курсу';
$string['downloadcoursecontent_help'] = 'Цей параметр визначає, чи можна завантажувати вміст курсу користувачами з можливістю завантаження вмісту курсу (за замовчуванням користувачі з роллю студента або викладача).';
$string['enabledownloadcoursecontent'] = 'Увімкнути завантаження вмісту курсу';
$string['errorendbeforestart'] = 'Дата закінчення ({$a}) передує даті початку курсу.';
$string['favourite'] = 'Курс із зірочкою';
$string['gradetopassnotset'] = 'Цей курс не має оцінки за здачу. Його можна встановити в елементі оцінки курсу (налаштування журналу оцінок).';
$string['informationformodule'] = 'Інформація про діяльність {$a}';
$string['module'] = 'Діяльність';
$string['namewithlink'] = 'Назва категорії з посиланням';
$string['noaccesssincestartinfomessage'] = 'Привіт, {$a->userfirstname}!
<p>Деякі студенти {$a->coursename} ніколи не відвідували курс.</p>';
$string['nocourseactivity'] = 'Недостатня активність курсу між початком і кінцем курсу';
$string['nocourseendtime'] = 'Курс не має часу закінчення';
$string['nocoursesections'] = 'Без розділів курсу';
$string['nocoursestudents'] = 'Немає студентів';
$string['norecentaccessesinfomessage'] = 'Привіт, {$a->userfirstname}!
<p>Привіт, {$a->userfirstname}! Деякі студенти {$a->coursename} нещодавно не відвідували курс.</p>';
$string['noteachinginfomessage'] = 'Привіт, {$a->userfirstname}! 
<p>Було визначено, що курси з датами початку наступного тижня не зараховані викладачами чи студентами.</p>';
$string['participants:perpage'] = 'Кількість учасників на сторінці';
$string['participants:perpage_help'] = 'Кількість користувачів, які відображаються на сторінці учасників кожного курсу.';
$string['participantsnavigation'] = 'Учасники третинної навігації.';
$string['privacy:completionpath'] = 'Закінчення курсу';
$string['privacy:favouritespath'] = 'Інформація про курс';
$string['privacy:metadata:activityfavouritessummary'] = 'Система курсу містить інформацію про те, які елементи із засобу вибору діяльності позначено користувачем зірочкою.';
$string['privacy:metadata:completionsummary'] = 'Курс містить інформацію про завершення про користувача.';
$string['privacy:metadata:favouritessummary'] = 'Курс містить інформацію, що стосується курсу, позначеного користувачем.';
$string['privacy:perpage'] = 'Кількість курсів для показу на сторінці.';
$string['recommend'] = 'Рекомендувати';
$string['recommendcheckbox'] = 'Рекомендувати діяльність: {$a}';
$string['relativedatessubmissionduedateafter'] = '{$a->datediffstr} після початку курсу';
$string['relativedatessubmissionduedatebefore'] = '{$a->datediffstr} перед початком курсу';
$string['searchactivitiesbyname'] = 'Пошук у видах діяльностей за назвою';
$string['searchresults'] = 'Результати пошуку: {$a}';
$string['studentsatriskincourse'] = 'Студенти в групі ризику на курсі {$a}';
$string['studentsatriskinfomessage'] = 'Привіт, {$a->userfirstname}!
Студенти курсу {$a->coursename} були визначені як групи ризику.';
$string['submitsearch'] = 'Подати';
$string['target:coursecompetencies'] = 'Студенти ризикують не досягти компетенцій, призначених для курсу';
$string['target:coursecompetencies_help'] = 'Ця ціль описує, чи ризикує студент не досягти компетенцій, призначених для курсу. Ця ціль передбачає, що всі компетенції, призначені для курсу, повинні бути досягнуті до кінця курсу.';
$string['target:coursecompletion'] = 'Студенти ризикують не відповідати умовам закінчення курсу';
$string['target:coursecompletion_help'] = 'Ця ціль описує, чи вважається, що студент ризикує не відповідати умовам закінчення курсу.';
$string['target:coursedropout'] = 'Студенти які ризикують бути відсіяні';
$string['target:coursedropout_help'] = 'Ця ціль описує, чи вважається учень загрозливим відмовитися від навчання.';
$string['target:coursegradetopass'] = 'Студенти ризикують не досягти мінімальної оцінки для проходження курсу';
$string['target:coursegradetopass_help'] = 'Ця ціль описує, чи ризикує студент не досягти мінімальної оцінки для проходження курсу.';
$string['target:noaccesssincecoursestart'] = 'Студенти, які ще не відвідували курс';
$string['target:noaccesssincecoursestart_help'] = 'Ця ціль описує студентів, які ніколи не відвідували курс, на який вони зараховані.';
$string['target:noaccesssincecoursestartinfo'] = 'Наступні студенти зараховані на курс, який почався, але вони ніколи не проходили курс.';
$string['target:norecentaccesses'] = 'Студенти, які нещодавно не відвідували курс';
$string['target:norecentaccesses_help'] = 'Ця ціль визначає студентів, які не отримали доступ до курсу, на який вони зараховані, протягом встановленого інтервалу аналізу (за замовчуванням останній місяць).';
$string['target:norecentaccessesinfo'] = 'Наведені нижче студенти не отримали доступ до курсу, на який вони зараховані протягом встановленого інтервалу аналізу (за замовчуванням останній місяць).';
$string['target:noteachingactivity'] = 'Курси ризикують не почати';
$string['target:noteachingactivity_help'] = 'Ця ціль описує, чи навчатимуть курси, які мають початися наступного тижня.';
$string['target:noteachingactivityinfo'] = 'Наступні курси, які мають розпочатися найближчими днями, ризикують не розпочати, оскільки на них немає вчителів чи студентів.';
$string['targetlabelstudentcompetenciesno'] = 'Студент, який, ймовірно, досягне компетенцій, призначених для курсу';
$string['targetlabelstudentcompetenciesyes'] = 'Студент ризикує не досягти компетенцій, призначених для курсу';
$string['targetlabelstudentcompletionno'] = 'Студент, який, ймовірно, відповідає умовам закінчення курсу';
$string['targetlabelstudentcompletionyes'] = 'Студент ризикує не відповідати умовам закінчення курсу';
$string['targetlabelstudentdropoutno'] = 'Не в зоні ризику';
$string['targetlabelstudentdropoutyes'] = 'Студент ризикує залишити навчання';
$string['targetlabelstudentgradetopassno'] = 'Студент, який, ймовірно, отримає мінімальну оцінку для проходження курсу.';
$string['targetlabelstudentgradetopassyes'] = 'Студент ризикує не досягти мінімальної оцінки для складання курсу.';
$string['targetlabelteachingno'] = 'Курси ризикують не почати';
$string['targetlabelteachingyes'] = 'Користувачі зі здібностями викладання, які мають доступ до курсу';
