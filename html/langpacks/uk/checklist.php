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
 * Strings for component 'checklist', language 'uk', version '4.4'.
 *
 * @package     checklist
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomments'] = 'Додати коментарі';
$string['additem'] = 'Додати';
$string['additemalt'] = 'Додати новий пункт до списку';
$string['additemhere'] = 'Вставити новий пункт після поточного';
$string['addownitems'] = 'Додати ваші власні пункти';
$string['addownitems-stop'] = 'Завершити додавання власних пунктів';
$string['allowmodulelinks'] = 'Дозволити зв\'язки з модулями';
$string['anygrade'] = 'Будь-який';
$string['autopopulate'] = 'Показувати модулі курсу в контрольному списку';
$string['autopopulate_help'] = 'Це дозволяє автоматично додавати перелік всіх ресурсів та діяльностей поточного курсу до контрольного списку.<br />
Цей перелік буде оновлюватися у відповідності до змін у Вашому курсі, кожного разу, щойно Ви відкриєте сторіку \'Редагування\' контрольного списку.<br />
Елементи в списку можна приховувати, натискуючи кнопку \'сховати\' поряд з ними.<br />
Щоб видалити автоматично добавлені елементи з списку, встановіть цю властивість назад у значення \'Ні\', після чого натисніть кнопку \'Видалити пункти, що відповідають модулю курсу\' на сторінці \'Редагування\'.';
$string['autoupdate'] = 'Відмічати коли модуль виконано';
$string['autoupdate_help'] = 'Це дозволяє автоматично відмічати пункт Вашого контрольного списку, щойно Ви виконаєте відповідну діяльність в курсі.<br />
Поняття \'Виконано\' для діяльності змінюється в залежності від типу діяльності - \'перегляд\' для ресурсу, \'відіслати\' для тесту чи іншого завдання, \'повідомлення\' для форуму чи \'приєднання\' для чату, і т.д.<br />
Для Moodle 2.0 відслідковування виконання увімкнене для різноманітних діяльностей, що і буде використано для відмічання пунктів в списку<br />
Для детальної інформації про те, який стан діяльності розглядається як \'виконано\', попросіть адміністратора Вашого сайту переглянути вміст файлу \'mod/checklist/autoupdate.php\'<br />
Примітка: до 60 секунд може бути необхідно щоб зміни, зроблені студентом в певній діяльності, відобразилися в його контрольному списку';
$string['autoupdatenote'] = '\'Лише студенти\' помітив це як автоматично оновлюване - жодних оновлень не буде показано для контрольного списку \'Викладачі';
$string['autoupdatewarning_both'] = 'Пункти цього контрольного списку будуть автоматично оновлені (щойно студенти завершать відповідну діяльність). Однак, оскільки цей контрольний список має тип \'Студенти і викладачі\', індикатор виконання буде оновлено коли викладач підтвердить дані оцінки.';
$string['autoupdatewarning_student'] = 'Пункти цього списку будуть автоматично оновлені (щойно студенти завершать відповідну діяльність).';
$string['autoupdatewarning_teacher'] = 'Автоматичне оновлення для даного контрольного списку увімкнене, але ці відмітки не будуть відображені оскільки зараз відображаються лише відмітки \'Викладачі\'.';
$string['calendardescription'] = 'Цей пункт був доданий контрольним списком: {$a}';
$string['canceledititem'] = 'Відмінити';
$string['changetextcolour'] = 'Наступний колір тексту';
$string['checkeditemsdeleted'] = 'Відмічені пункти видалено';
$string['checklist'] = 'контрольний список';
$string['checklist:addinstance'] = 'Добавити новий контрольний список';
$string['checklist:edit'] = 'Створити і редагувати контрольний список';
$string['checklist:emailoncomplete'] = 'Отримувати е-мейл про завершення';
$string['checklist:preview'] = 'Переглянути контрольний список';
$string['checklist:updatelocked'] = 'Оновити заблоковані контрольні відмітки';
$string['checklist:updateother'] = 'Оновити контрольні відмітки студентів';
$string['checklist:updateown'] = 'Оновити ваші контрольні відмітки';
$string['checklist:viewmenteereports'] = 'Переглянути здобутки підопічних (лише)';
$string['checklist:viewreports'] = 'Переглянути здобутки студентів';
$string['checklistautoupdate'] = 'Дозволити автоматичне оновлення контрольного списку';
$string['checklistfor'] = 'Контрольний список для';
$string['checklistintro'] = 'Вступ';
$string['checklistsettings'] = 'Налаштування';
$string['checks'] = 'Контрольні відмітки';
$string['comments'] = 'Коментарі';
$string['completionpercent'] = 'Відсоток елементів що будуть перевірені:';
$string['completionpercentgroup'] = 'Вимагає перевірки';
$string['configchecklistautoupdate'] = 'Перш ніж дозволити це, Ви повинні внести певні зміни в код ядра Moodle. Детальні інструкції дивіться в файлі mod/checklist/README.txt';
$string['configshowcompletemymoodle'] = 'Якщо це вимкнено, то виконані контрольні списки на сторінці \'Мій Moodle\' будуть приховані';
$string['configshowmymoodle'] = 'Якщо це вимкнено, то діяльності "Контрольний список" (з індикаторами виконання) надалі не будуть присутніми на сторінці \'Мій Moodle';
$string['confirmdeleteitem'] = 'Ви дійсно бажаєте безповоротно видалити  ці пункти контрольного списку?';
$string['deleteitem'] = 'Видалити цей пункт';
$string['duedatesoncalendar'] = 'Додати відповідні дати в календар';
$string['edit'] = 'Редагувати контрольний список';
$string['editchecks'] = 'Редагувати відмітки';
$string['editdatesstart'] = 'Редагувати дати';
$string['editdatesstop'] = 'Закінчити редагувати дати';
$string['edititem'] = 'Редагувати цей пункт';
$string['emailoncomplete'] = 'Відправляти е-мейли коли контрольний список виконано:';
$string['emailoncomplete_help'] = 'Коли контрольний список виконано, може бути відправлено email з підтвердженням: студентам, що виконали його, всім викладачам на курсі чи їм всім.<br />
Адміністратор може керувати тим, хто отримуватиме ці повідомлення за допомогою властивості \'mod:checklist/emailoncomplete\' - за замовчуванням, всі викладачі (в тому числі і без права редагування) можуть отримувати ці повідомлення.';
$string['emailoncompletebody'] = 'Користувач {$a->user} виконав контрольний список \'{\'$a->checklist}\'
Контрольний список можна переглянути тут:';
$string['emailoncompletebodyown'] = 'Ви виконали контрольний список \'{$a->checklist}\' у курсі \'{$a->coursename}\'
Переглянути контрольний перелік можна тут:';
$string['emailoncompletesubject'] = 'Користувач {$a->user} виконав контрольний список \'{$a->checklist}';
$string['emailoncompletesubjectown'] = 'Ви виконали контрольний список \'{$a->checklist}';
$string['eventchecklistcomplete'] = 'Контрольний список виконано';
$string['eventeditpageviewed'] = 'Відкрито сторінку редагування';
$string['eventreportviewed'] = 'Переглянуто звіт';
$string['eventstudentchecksupdated'] = 'Студент оновив відмітки';
$string['eventteacherchecksupdated'] = 'Викладач оновив відмітки';
$string['export'] = 'Експортувати пункти';
$string['forceupdate'] = 'Оновити відмітки для всіх автоматично створених пунктів';
$string['gradetocomplete'] = 'Оцінок до завершення:';
$string['guestsno'] = 'Ви не маєте прав на перегляд цього контрольного списку';
$string['headingitem'] = 'Цей пункт є заголовком і не матиме поля відмітки попереду';
$string['import'] = 'Імпортувати пункти';
$string['importfile'] = 'Виберіть файл для імпорту';
$string['importfromcourse'] = 'Весь курс';
$string['importfromsection'] = 'Поточний розділ';
$string['indentitem'] = 'Пункт з відступом';
$string['itemcomplete'] = 'Виконано';
$string['items'] = 'Пункти контрольного списку';
$string['linktomodule'] = 'Зв\'язок до цього модуля';
$string['lockteachermarks'] = 'Заблокувати відмітки викладача';
$string['lockteachermarks_help'] = 'Якщо цей параметер увімкнено, щойно викладач збереже відмітку \'Так\', він більше не зможе її змінити. Лише користувачі з властивістю \'mod/checklist:updatelocked\' матимуть змогу змінити відмітку.';
$string['lockteachermarkswarning'] = 'Примітка: після збереження відміток, ви більше не зможете змінити жодної мітки \'Так\'';
$string['modulename'] = 'Контрольний список';
$string['modulename_help'] = 'Даний модуль дозволяє викладачам створювати контрольні списки (перелік задач), що повинні бути виконані студентами';
$string['modulename_link'] = 'mod/checklist/view';
$string['modulenameplural'] = 'Контрольні списки';
$string['moveitemdown'] = 'Перемістити пункт донизу';
$string['moveitemup'] = 'Перемістити пункт догори';
$string['noitems'] = 'В контрольному списку немає пунктів';
$string['optionalhide'] = 'Сховати необов\'язкові пункти';
$string['optionalitem'] = 'Цей пункт є необов\'язковим';
$string['optionalshow'] = 'Показати необов\'язкові пункти';
$string['percentcomplete'] = 'Обов\'язкові пункти';
$string['percentcompleteall'] = 'Всі пункти';
$string['pluginadministration'] = 'Керування контрольним списком';
$string['pluginname'] = 'Контрольний список';
$string['preview'] = 'Попередній перегляд';
$string['progress'] = 'Здобутки';
$string['removeauto'] = 'Видалити пункти, що відповідають модулю курсу';
$string['report'] = 'Переглянути здобутки';
$string['reporttablesummary'] = 'Таблиця показує пункти контрольного списку, виконані кожним студентом';
$string['requireditem'] = 'Цей пункт є обов\'язковим - він повинен бути виконаний';
$string['resetchecklistprogress'] = 'Повернути контрольний список та користувацькі пункти у вихідний стан';
$string['savechecks'] = 'Зберегти';
$string['showcompletemymoodle'] = 'Показати виконані контрольні списки на сторінці \'Мій Moodle';
$string['showfulldetails'] = 'Показати детальну інформацію';
$string['showmymoodle'] = 'Показати контрольні списки на сторінці \'Мій Moodle';
$string['showprogressbars'] = 'Показати індикатор виконання';
$string['teacheralongsidecheck'] = 'Студенти і викладачі';
$string['teachercomments'] = 'Викладачі можуть додавати коментарі';
$string['teacherdate'] = 'Дата останньої зміни цього пункту викладачем';
$string['teacheredit'] = 'Змінено';
$string['teacherid'] = 'Викладач, який останнім змінював цю відмітку';
$string['teachermarkno'] = 'Викладач стверджує, що ви НЕ виконали це';
$string['teachermarkundecided'] = 'Викладач поки не відмітив це';
$string['teachermarkyes'] = 'Викладач стверджує, що ви виконали це';
$string['teachernoteditcheck'] = 'Лише студенти';
$string['teacheroverwritecheck'] = 'Викладачі';
$string['theme'] = 'Тема оформлення контрольного списку';
$string['togglecolumn'] = 'Відмітити: по стовбцю';
$string['toggledates'] = 'Показати/приховати автора і дату відмітки';
$string['togglerow'] = 'Відмітити: по рядку';
$string['unindentitem'] = 'Пункт без відступу';
$string['updatecompletescore'] = 'Зберегти завершальні оцінки';
$string['updateitem'] = 'Оновити';
$string['userdate'] = 'Дата останньої зміни цього пункту користувачем';
$string['useritemsallowed'] = 'Користувач може додавати власні пункти';
$string['useritemsdeleted'] = 'Виявлено пункти користувача';
$string['view'] = 'Переглянути контрольний список';
$string['viewall'] = 'Переглянути всіх студентів';
$string['viewallcancel'] = 'Відмінити';
$string['viewallsave'] = 'Зберегти';
$string['viewsinglereport'] = 'Переглянути здобутки цього користувача';
$string['viewsingleupdate'] = 'Оновити здобутки цього користувача';
$string['yesnooverride'] = 'Так, без заміщення';
$string['yesoverride'] = 'Так, з заміщенням';
