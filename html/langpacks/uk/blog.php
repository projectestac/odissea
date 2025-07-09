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
 * Strings for component 'blog', language 'uk', version '4.4'.
 *
 * @package     blog
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addnewentry'] = 'Додати новий запис';
$string['addnewexternalblog'] = 'Реєстрація зовнішнього блогу';
$string['assocdescription'] = 'Якщо ви пишете про курс або про модулі активності, виберіть їх тут.';
$string['associated'] = 'Пов’язаний з {$a}';
$string['associatewithcourse'] = 'Блог про курс {$a->coursename}';
$string['associatewithmodule'] = 'Блог про {$a->modtype}: {$a->modname}';
$string['association'] = 'Прив’язка';
$string['associations'] = 'Прив’язки';
$string['associationunviewable'] = 'Цей запис не може бути переглянутий іншими поки з ним пов’язаний курс або змінено поле ’Публікувати до’';
$string['author'] = 'Автор';
$string['autotags'] = 'Додати ці мітки';
$string['autotags_help'] = 'Введіть одну або більше локальних міток (розділених комами), які ви хочете автоматично додавати до кожної копії запису, яка копіюється із зовнішнього блогу в локальний.';
$string['backupblogshelp'] = 'Якщо включити, то блоги буде включено до автоматичних резервних копій САЙТУ';
$string['blockexternalstitle'] = 'Зовнішні блоги';
$string['blog'] = 'Блог';
$string['blogaboutthis'] = 'Блог про цей {$a->type}';
$string['blogaboutthiscourse'] = 'Додати запис про цей курс';
$string['blogaboutthismodule'] = 'Додати запис про цей {$a}';
$string['blogadministration'] = 'Керування блогами';
$string['blogattachment'] = 'Вкладення до блогу';
$string['blogdeleteconfirm'] = 'Видалити запис \'{$a}\' у блозі?';
$string['blogdisable'] = 'Ведення блогів відключено!';
$string['blogentries'] = 'Записи блогу';
$string['blogentriesabout'] = 'Записи блогу про {$a}';
$string['blogentriesbygroupaboutcourse'] = 'Записи блогу про {$a->course} від {$a->group}';
$string['blogentriesbygroupaboutmodule'] = 'Записи блогу про {$a->mod} від {$a->group}';
$string['blogentriesbyuseraboutcourse'] = 'Записи блогу про {$a->course} від {$a->user}';
$string['blogentriesbyuseraboutmodule'] = 'Записи блогу про {$a->mod} від {$a->user}';
$string['blogentrybyuser'] = 'Записи блогу від {$a}';
$string['blogpreferences'] = 'Налаштування блогу';
$string['blogs'] = 'Блоги';
$string['blogscourse'] = 'Блоги курсу';
$string['blogssite'] = 'Блоги сайту';
$string['blogtags'] = 'Мітки блогу';
$string['cannoteditentryorblog'] = 'Ви не можете редагувати цей запис або блог';
$string['cannotviewcourseblog'] = 'У вас немає прав для перегляду блогів в цьому курсі/групі';
$string['cannotviewcourseorgroupblog'] = 'У вас немає прав для перегляду блогів в цьому курсі/групі';
$string['cannotviewsiteblog'] = 'У вас немає прав для перегляду блогів на цьому сайті';
$string['cannotviewuserblog'] = 'У вас немає прав для перегляду блогів користувачів';
$string['configexternalblogcrontime'] = 'Як часто Moodle повинен перевіряти зовнішні блоги відносно нових записів.';
$string['configmaxexternalblogsperuser'] = 'Кількість зовнішніх блогів, які дозволено користувачам приєднувати до власних локальних блогів.';
$string['configuseblogassociations'] = 'Дозволяє асоціювати записи блогу з курсами та модулями курсів.';
$string['configuseexternalblogs'] = 'Дозволяє користувачам під’єднувати записи зовнішніх блогів. Moodle регулярно перевірятиме записи блогів та копіюватиме нове до локального блогу цих користувачів.';
$string['courseblog'] = 'Блог курсу: {$a}';
$string['courseblogdisable'] = 'Блоги курсу не дозволені';
$string['courseblogs'] = 'Користувачі можуть тільки переглядати блоги учасників курсу';
$string['deleteblogassociations'] = 'Видалити прив’язки блогу';
$string['deleteblogassociations_help'] = 'Якщо позначено, то записи блогу більше не будуть пов’язуватися з курсом  або будь-якими діяльностями курсів. Записи самостійно не будуть видалятися.';
$string['deleteentry'] = 'Видалити запис';
$string['deleteexternalblog'] = 'Відмінити цей зовнішній блог';
$string['deleteotagswarn'] = 'Ви впевнені, що бажаєте видалити цю(і) мітку(и) <br />зі всіх записів блогу та видалити її з системи?';
$string['description'] = 'Опис';
$string['description_help'] = 'Введіть рядок або два для опису вашого зовнішнього блогу. (Якщо опису не буде надаватися, то буде використано записаний тут).';
$string['donothaveblog'] = 'Ви не маєте власного блогу, вибачте.';
$string['editentry'] = 'Редагувати запис блогу';
$string['editexternalblog'] = 'Редагувати цей зовнішній блог';
$string['emptybody'] = 'Тіло запису блога не повинно бути пустим';
$string['emptyrssfeed'] = 'Ви ввели URL, який вказує на недійсний RSS канал';
$string['emptytitle'] = 'Назва запису блогу не повинна бути порожньою';
$string['emptyurl'] = 'Ви повинні визначити правильний URL до RSS каналу';
$string['entrybody'] = 'Тіло запису блога';
$string['entrybodyonlydesc'] = 'Опис запису';
$string['entryerrornotyours'] = 'Це не ваш запис!';
$string['entrysaved'] = 'Ваш запис збережено';
$string['entrytitle'] = 'Назва запису';
$string['entrytitlewithlink'] = 'Назва запису з посиланням';
$string['eventblogassociationadded'] = 'Створено прив’язку блогу';
$string['eventblogassociationdeleted'] = 'Видалено прив’язку блогу';
$string['eventblogentriesviewed'] = 'Переглянуто записи блогу';
$string['eventblogexternaladded'] = 'Зовнішній блог зареєстровано';
$string['eventblogexternalremoved'] = 'Зовнішній блог відмінено';
$string['eventblogexternalupdated'] = 'Зовнішній блог оновлено';
$string['evententryadded'] = 'Додано запис блогу';
$string['evententrydeleted'] = 'Вилучено запис блогу';
$string['evententryupdated'] = 'Оновлено запис блогу';
$string['eventexternalblogsviewed'] = 'Переглянуто зовнішні зареєстровані блоги';
$string['externalblogcrontime'] = 'Періодичність перевірки зовнішнього блогу';
$string['externalblogdeleteconfirm'] = 'Відмінити цей зовнішній блог?';
$string['externalblogdeleted'] = 'Зовнішній блог відмінено';
$string['externalblogs'] = 'Зовнішні блоги';
$string['feedisinvalid'] = 'Неправильний канал';
$string['feedisvalid'] = 'Цей канал дійсний';
$string['filterblogsby'] = 'Фільтрувати записи за...';
$string['filtertags'] = 'Мітки фільтру';
$string['filtertags_help'] = 'Ви можете використовувати цю функцію для фільтрації записів. Якщо ви вкажете тут мітки (розділивши їх комами), то тільки записи, які відповідають цим міткам будуть копіюватися із зовнішнього блогу.';
$string['groupblog'] = 'Блог групи: {$a}';
$string['groupblogdisable'] = 'Блог групи недозволений';
$string['groupblogentries'] = 'Записи блогу пов’язані з {$a->coursename} та групою {$a->groupname}';
$string['groupblogs'] = 'Користувачі можуть лише переглядати блоги членів групи';
$string['incorrectblogfilter'] = 'Вказано некоректний тип фільтру';
$string['intro'] = 'Канал новин було автоматично згенерована за матеріалами одного або кількох блогів.';
$string['invalidgroupid'] = 'Неправильний код групи';
$string['invalidurl'] = 'Цей URL недоступний';
$string['linktooriginalentry'] = 'Оригінальний запис у блозі';
$string['maxexternalblogsperuser'] = 'Максимальна кількість зовнішніх блогів на користувача';
$string['myprofileuserblogs'] = 'Переглянути всі записи блогу';
$string['name'] = 'Назва';
$string['name_help'] = 'Введіть описову назву для вашого зовнішнього блогу. (Якщо ім\'я не вказано, буде використовуватися це).';
$string['noentriesyet'] = 'Немає записів для відображення';
$string['noguestpost'] = 'Гостю не дозволено відправляти повідомлення у блогах';
$string['nopermissionstodeleteentry'] = 'У вас немає дозволу, необхідного для видалення цього запису в блозі';
$string['norighttodeletetag'] = 'Ви не маєте прав для видалення мітки - {$a}';
$string['nosuchentry'] = 'Немає такого запису в блозі';
$string['notallowedtoedit'] = 'У вас немає дозволу на редагування цього запису';
$string['numberofentries'] = 'Записи: {$a}';
$string['numberoftags'] = 'Кількість міток для показу';
$string['page-blog-edit'] = 'Редагування сторінок блогу';
$string['page-blog-index'] = 'Список сторінок блогу';
$string['page-blog-x'] = 'Всі сторінки блогу';
$string['pagesize'] = 'Кількість записів блогу на сторінку';
$string['permalink'] = 'Постійна адреса';
$string['personalblogs'] = 'Користувачам доступний тільки власний блог';
$string['preferences'] = 'Налаштування блогу';
$string['privacy:metadata:core_comments'] = 'Коментарі, пов’язані із записами в блозі';
$string['privacy:metadata:core_files'] = 'Файли, вкладені до записів блогу';
$string['privacy:metadata:core_tag'] = 'Теги, пов’язані із записами блогу';
$string['privacy:metadata:external'] = 'Посилання на зовнішній RSS-канал';
$string['privacy:metadata:external:description'] = 'Опис фіду';
$string['privacy:metadata:external:filtertags'] = 'Список тегів для фільтрації записів';
$string['privacy:metadata:external:name'] = 'Назва фіду';
$string['privacy:metadata:external:timefetched'] = 'Час останнього отримання каналу';
$string['privacy:metadata:external:timemodified'] = 'Час, коли асоціація була востаннє змінена';
$string['privacy:metadata:external:url'] = 'URL-адреса каналу';
$string['privacy:metadata:external:userid'] = 'Ідентифікатор користувача, який додав зовнішній запис блогу';
$string['privacy:metadata:post'] = 'Інформація, що стосується записів у блозі';
$string['privacy:metadata:post:content'] = 'Вміст зовнішнього запису в блозі';
$string['privacy:metadata:post:created'] = 'Дата створення запису в блозі';
$string['privacy:metadata:post:lastmodified'] = 'Дата останньої зміни запису в блозі';
$string['privacy:metadata:post:publishstate'] = 'Незалежно від того, чи бачать запис інші особи чи ні';
$string['privacy:metadata:post:subject'] = 'Назва запису блогу';
$string['privacy:metadata:post:summary'] = 'Текст запису в блозі';
$string['privacy:metadata:post:uniquehash'] = 'Унікальний ідентифікатор зовнішнього запису, як правило, URL';
$string['privacy:metadata:post:userid'] = 'Ідентифікатор користувача, який додав запис у блозі';
$string['privacy:metadata:post:usermodified'] = 'Користувач, який останній змінив запис';
$string['privacy:path:blogassociations'] = 'Пов’язані дописи в блозі';
$string['privacy:unknown'] = 'Невідомо';
$string['published'] = 'Опубліковано';
$string['publishto'] = 'Опублікувати в';
$string['publishto_help'] = 'Є три опції:

* Особисте (чернетка) - Тільки ви та адміністратор можете бачити цей запис
* Для всіх користувачів сайту - Будь-хто зареєстрований на цьому сайті може бачити цей запис
* Для всіх - Будь-хто, включаючи гостей, може бачити цей запис';
$string['publishtocourse'] = 'Учасники мого курсу';
$string['publishtocourseassoc'] = 'Учасники пов’язаного курсу';
$string['publishtocourseassocparam'] = 'Учасники {$a}';
$string['publishtodraft'] = 'Чернетка';
$string['publishtogroup'] = 'Учасники вашої групи';
$string['publishtogroupassoc'] = 'Учасники вашої групи в пов’язаному курсі';
$string['publishtogroupassocparam'] = 'Учасники вашої групи в {$a}';
$string['publishtonoone'] = 'Особисте (чернетка)';
$string['publishtosite'] = 'Для всіх користувачів сайту';
$string['publishtoworld'] = 'Для всіх';
$string['readfirst'] = 'Спочатку прочитайте це';
$string['relatedblogentries'] = 'Пов\'язані записи блогу';
$string['retrievedfrom'] = 'Пов’язано з';
$string['rssfeed'] = 'RSS-канал блогу';
$string['searchterm'] = 'Пошук: {$a}';
$string['settingsupdatederror'] = 'Виникла помилка, не вдалося оновити налаштування блогу';
$string['siteblogdisable'] = 'Блог сайту не включений';
$string['siteblogheading'] = 'Блог сайту';
$string['siteblogs'] = 'Всі користувачі можуть бачити записи всіх блогів';
$string['tagdatelastused'] = 'Дата, коли мітку було використано востаннє';
$string['tagparam'] = 'Мітка: {$a}';
$string['tags'] = 'Мітки';
$string['tagsort'] = 'Сортувати мітки за';
$string['tagtext'] = 'Текст мітки';
$string['timefetched'] = 'Час останньої синхронізації';
$string['timewithin'] = 'Показати мітки, які використовувалися протягом останніх днів';
$string['updateentrywithid'] = 'Оновлення записів';
$string['url'] = 'URL RSS-стрічки';
$string['url_help'] = 'Введіть URL RSS-стрічки для вашого зовнішнього блогу.';
$string['useblogassociations'] = 'Дозволити асоціації блогу.';
$string['useexternalblogs'] = 'Дозволити зовнішні блоги';
$string['userblog'] = 'Блог користувача: {$a}';
$string['userblogentries'] = 'Записи блогу від {$a}';
$string['valid'] = 'Коректно';
$string['viewallblogentries'] = 'Всі записи про цей {$a}';
$string['viewallmodentries'] = 'Переглянути всі записи про цей {$a->type}';
$string['viewallmyentries'] = 'Переглянути усі мої записи';
$string['viewblogentries'] = 'Записи про цей {$a->type}';
$string['viewblogsfor'] = 'Переглянути всі записи для ...';
$string['viewcourseblogs'] = 'Переглянути всі записи для цього курсу';
$string['viewentriesbyuseraboutcourse'] = 'Переглянути всі записи для цього курсу від {$a}';
$string['viewgroupblogs'] = 'Переглянути записи для групи ...';
$string['viewgroupentries'] = 'Записи групи';
$string['viewmodblogs'] = 'Переглянути записи для модуля ...';
$string['viewmodentries'] = 'Записи модуля';
$string['viewmyentries'] = 'Мої записи';
$string['viewmyentriesaboutcourse'] = 'Переглянути мої записи про цей курс';
$string['viewmyentriesaboutmodule'] = 'Переглянути мої записи про цей {$a}';
$string['viewsiteentries'] = 'Переглянути всі записи';
$string['viewuserentries'] = 'Переглянути всі записи від {$a}';
$string['worldblogs'] = 'Всім відвідувачам доступні записи з налаштуванням \'для всіх\'';
$string['wrongexternalid'] = 'Неправильний зовнішній ідентифікатор блогу';
