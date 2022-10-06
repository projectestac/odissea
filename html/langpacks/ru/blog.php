<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'blog', language 'ru', branch 'MOODLE_38_STABLE'
 *
 * @package   blog
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addnewentry'] = 'Добавить запись';
$string['addnewexternalblog'] = 'Зарегистрировать внешний блог';
$string['assocdescription'] = 'Если Вы пишете о курсе и/или элементах курса, то выберите их здесь.';
$string['associated'] = 'Связанный(ое) {$a}';
$string['associatewithcourse'] = 'Блог курса «{$a->coursename}»';
$string['associatewithmodule'] = 'Блог о модуле типа «{$a->modtype}»: «{$a->modname}»';
$string['association'] = 'Связь';
$string['associations'] = 'Связи';
$string['associationunviewable'] = 'Эта запись не может быть просмотрена другими до тех пор, пока с ней не будет связан курс или не будет изменено поле «Опубликовать»';
$string['autotags'] = 'Добавить эти теги';
$string['autotags_help'] = 'Введите один или несколько локальных тегов (через запятую), которые Вы хотите автоматически добавлять в своем локальном блоге к каждой записи, скопированной из внешнего блога.';
$string['backupblogshelp'] = 'Если включено - блоги будут включены в автоматическое резервирование сайта';
$string['blockexternalstitle'] = 'Внешние блоги';
$string['blog'] = 'Блог';
$string['blogaboutthis'] = 'Блог об этом модуле типа «{$a->type}»';
$string['blogaboutthiscourse'] = 'Добавить запись об этом курсе';
$string['blogaboutthismodule'] = 'Добавить запись об этом модуле типа «{$a}»';
$string['blogadministration'] = 'Управление блогом';
$string['blogdeleteconfirm'] = 'Удалить запись блога «{$a}»?';
$string['blogdisable'] = 'Блоги отключены!';
$string['blogentries'] = 'Записи блога';
$string['blogentriesabout'] = 'Записи блога о «{$a}»';
$string['blogentriesbygroupaboutcourse'] = 'Записи блога курса «{$a->course}» группы «{$a->group}»';
$string['blogentriesbygroupaboutmodule'] = 'Записи блога о «{$a->mod}» группы «{$a->group}»';
$string['blogentriesbyuseraboutcourse'] = 'Записи блога курса «{$a->course}» пользователя «{$a->user}»';
$string['blogentriesbyuseraboutmodule'] = 'Записи блога о модуле «{$a->mod}» пользователя «{$a->user}»';
$string['blogentrybyuser'] = 'Запись блога пользователя «{$a}»';
$string['blogpreferences'] = 'Настройки блога';
$string['blogs'] = 'Блоги';
$string['blogscourse'] = 'Блоги курса';
$string['blogssite'] = 'Блоги сайта';
$string['blogtags'] = 'Теги блога';
$string['cannotviewcourseblog'] = 'Вы не имеете права просматривать блоги в этом курсе';
$string['cannotviewcourseorgroupblog'] = 'Вы не имеете права просматривать блоги в этом курсе/группе';
$string['cannotviewsiteblog'] = 'Вы не имеете права просматривать блоги всего сайта';
$string['cannotviewuserblog'] = 'Вы не имеете права читать блоги пользователя';
$string['configexternalblogcrontime'] = 'Как часто Moodle должен проверять новые записи во внешних блогах.';
$string['configmaxexternalblogsperuser'] = 'Количество внешних блогов, на которые каждый пользователь может сделать ссылку в своем блоге Moodle.';
$string['configuseblogassociations'] = 'Разрешить связывать записи блогов с курсами и элементами курса.';
$string['configuseexternalblogs'] = 'Разрешить пользователям указывать RSS-ленты внешних блогов. Moodle будет регулярно проверять такие RSS-ленты и копировать новые записи в локальные блоги пользователей.';
$string['courseblog'] = 'Блог курса: {$a}';
$string['courseblogdisable'] = 'Блоги курса отключены';
$string['courseblogs'] = 'Пользователи могут только просматривать блоги участников курса';
$string['deleteblogassociations'] = 'Удалить связи с блогом';
$string['deleteblogassociations_help'] = 'При выборе данной опции все записи в блогах перестанут быть связанными с курсом или элементами курса. Сами записи в блогах удалены не будут.';
$string['deleteentry'] = 'Удалить запись';
$string['deleteexternalblog'] = 'Отмена регистрации этого внешнего блога';
$string['deleteotagswarn'] = 'Вы уверены, что хотите удалить эти теги из сообщений всех блогов и из системы?';
$string['description'] = 'Описание';
$string['description_help'] = 'Введите несколько предложений с кратким описанием содержания своего внешнего блога. (Если описание не задано, то будет использовано описание Вашего внешнего блога).';
$string['donothaveblog'] = 'У Вас нет собственного блога.';
$string['editentry'] = 'Редактировать запись блога';
$string['editexternalblog'] = 'Редактировать этот внешний блог';
$string['emptybody'] = 'Текст сообщения блога не может быть пустым';
$string['emptyrssfeed'] = 'Указанный адрес не является адресом действующей RSS-ленты';
$string['emptytitle'] = 'Заголовок сообщения блога не может быть пустым';
$string['emptyurl'] = 'Вы должны указать адрес RSS-ленты';
$string['entrybody'] = 'Тело записи блога';
$string['entrybodyonlydesc'] = 'Описание записи';
$string['entryerrornotyours'] = 'Эта запись не принадлежит вам!';
$string['entrysaved'] = 'Ваша запись сохранена';
$string['entrytitle'] = 'Название записи';
$string['eventblogassociationadded'] = 'Связь с блогом создана';
$string['eventblogassociationdeleted'] = 'Связь с блогом удалена';
$string['eventblogentriesviewed'] = 'Записи блога просмотрены';
$string['eventblogexternaladded'] = 'Внешний блог зарегистрирован';
$string['eventblogexternalremoved'] = 'Внешний блог не  был зарегистрирован';
$string['eventblogexternalupdated'] = 'Внешний блог обновлен';
$string['evententryadded'] = 'Запись блока добавлена';
$string['evententrydeleted'] = 'Запись блога удалена';
$string['evententryupdated'] = 'Запись блога обновлена';
$string['eventexternalblogsviewed'] = 'Просмотр внешних зарегистрированных блогов';
$string['externalblogcrontime'] = 'Интервал между синхронизациями с внешними блогами';
$string['externalblogdeleteconfirm'] = 'Отменить регистрацию этого внешнего блога?';
$string['externalblogdeleted'] = 'Внешний блог удален';
$string['externalblogs'] = 'Внешние блоги';
$string['feedisinvalid'] = 'Этот канал не действует';
$string['feedisvalid'] = 'Этот канал действует';
$string['filterblogsby'] = 'Фильтр записей ...';
$string['filtertags'] = 'Фильтр по тегам';
$string['filtertags_help'] = 'Вы можете использовать эту функцию для фильтрации используемых записей. Если здесь указать теги (через запятую), то из внешнего блога будут скопированы только записи с этими тегами.';
$string['groupblog'] = 'Блог группы: {$a}';
$string['groupblogdisable'] = 'Блоги групп отключены';
$string['groupblogentries'] = 'Записи блога связаны с курсом «{$a->coursename}» и группой «{$a->groupname}»';
$string['groupblogs'] = 'Пользователи могут только просматривать блоги участников группы';
$string['incorrectblogfilter'] = 'Указан неверный фильтр типа блога';
$string['intro'] = 'Эта лента RSS была автоматически сгенерирована по материалам одного или нескольких блогов';
$string['invalidgroupid'] = 'Недопустимый ID группы';
$string['invalidurl'] = 'Этот адрес недоступен';
$string['linktooriginalentry'] = 'Ссылка на оригинальную запись блога';
$string['maxexternalblogsperuser'] = 'Максимальное количество внешних блогов пользователя';
$string['myprofileuserblogs'] = 'Показать все записи блога';
$string['name'] = 'Название';
$string['name_help'] = 'Введите описательное название своего внешнего блога. (Если название не указано, то будет использоваться заглавие Вашего внешнего блога).';
$string['noentriesyet'] = 'Нет отображаемых записей';
$string['noguestpost'] = 'Гости не могут делать записи в блогах!';
$string['nopermissionstodeleteentry'] = 'У Вас нет права удалить эту запись блога';
$string['norighttodeletetag'] = 'У Вас нет прав для удаления этого тега - {$a}';
$string['nosuchentry'] = 'Нет такой записи в блоге';
$string['notallowedtoedit'] = 'Вам запрещено редактировать эту запись';
$string['numberofentries'] = 'Записи: {$a}';
$string['numberoftags'] = 'Сколько тегов показывать:';
$string['page-blog-edit'] = 'Страницы редактирования блога';
$string['page-blog-index'] = 'Страницы списков блога';
$string['page-blog-x'] = 'Все страницы блога';
$string['pagesize'] = 'Количество записей блога на странице';
$string['permalink'] = 'Постоянная ссылка';
$string['personalblogs'] = 'Каждому пользователю доступен только его собственный блог';
$string['preferences'] = 'Настройки блога';
$string['privacy:metadata:core_comments'] = 'Комментарии, связанные с записями блога';
$string['privacy:metadata:core_files'] = 'Файлы, прикрепленные к записям блога';
$string['privacy:metadata:core_tag'] = 'Теги, связанные с записями блога';
$string['privacy:metadata:external'] = 'Ссылка на внешнюю ленту RSS';
$string['privacy:metadata:external:description'] = 'Описание ленты';
$string['privacy:metadata:external:filtertags'] = 'Список тегов для фильтрации записей';
$string['privacy:metadata:external:name'] = 'Название ленты';
$string['privacy:metadata:external:timefetched'] = 'Дата, когда лента последний раз была получена';
$string['privacy:metadata:external:timemodified'] = 'Дата, когда связь последний раз была изменена';
$string['privacy:metadata:external:url'] = 'URL ленты';
$string['privacy:metadata:external:userid'] = 'ID пользователя, который добавил запись во внешний блог.';
$string['privacy:metadata:post'] = 'Информация, связанная с записями блога';
$string['privacy:metadata:post:content'] = 'Содержимое записи внешнего блога.';
$string['privacy:metadata:post:created'] = 'Дата, когда запись была создана.';
$string['privacy:metadata:post:lastmodified'] = 'Дата, когда запись была последний раз изменена.';
$string['privacy:metadata:post:publishstate'] = 'Видима запись другим людям или нет';
$string['privacy:metadata:post:subject'] = 'Заголовок записи блога.';
$string['privacy:metadata:post:summary'] = 'Запись блога.';
$string['privacy:metadata:post:uniquehash'] = 'Уникальный идентификатор внешней записи, обычно URL.';
$string['privacy:metadata:post:userid'] = 'ID пользователя, добавившего запись в блог.';
$string['privacy:metadata:post:usermodified'] = 'Пользователь, который последним менял запись';
$string['privacy:path:blogassociations'] = 'Связанные записи блога';
$string['privacy:unknown'] = 'Неизвестно';
$string['publishto'] = 'Опубликовать';
$string['publishtocourse'] = 'Участники моего курса';
$string['publishtocourseassoc'] = 'Участники связанного курса';
$string['publishtocourseassocparam'] = 'Участники {$a}';
$string['publishtogroup'] = 'Участники моей группы';
$string['publishtogroupassoc'] = 'Участники Вашей группы в связанном курсе';
$string['publishtogroupassocparam'] = 'Участники моей группы в {$a}';
$string['publishto_help'] = 'Есть 3 варианта:

* для себя (черновик) - Только Вы и администратор смогут видеть эту запись.
* для всех пользователей сайта - Каждый зарегистрированный пользователь на сайте сможет прочесть эту запись.
* для всех в мире - Кто угодно, даже гость, сможет прочесть эту запись.';
$string['publishtonoone'] = 'для себя (черновик)';
$string['publishtosite'] = 'для всех пользователей сайта';
$string['publishtoworld'] = 'для всего мира';
$string['readfirst'] = 'Сначала прочтите это';
$string['relatedblogentries'] = 'Связанные записи блога';
$string['retrievedfrom'] = 'Получено из';
$string['rssfeed'] = 'RSS блога';
$string['searchterm'] = 'Поиск: {$a}';
$string['settingsupdatederror'] = 'Произошла ошибка, не удалось обновить настройки блога';
$string['siteblogdisable'] = 'Блоги сайта отключены';
$string['siteblogheading'] = 'Блог сайта';
$string['siteblogs'] = 'Все пользователи сайта могут просматривать записи во всех блогах';
$string['tagdatelastused'] = 'Тег «дата» в последний раз использовался';
$string['tagparam'] = 'Тег: {$a}';
$string['tags'] = 'Теги';
$string['tagsort'] = 'Сортировать теги по';
$string['tagtext'] = 'Текст тега';
$string['timefetched'] = 'Время последней синхронизации';
$string['timewithin'] = 'Показывать теги, использовавшиеся в течение последних ... дней';
$string['updateentrywithid'] = 'Обновление записи';
$string['url'] = 'URL-адрес RSS';
$string['url_help'] = 'Введите адрес RSS-ленты своего внешнего блога.';
$string['useblogassociations'] = 'Разрешить связи с блогами';
$string['useexternalblogs'] = 'Разрешить внешние блоги';
$string['userblog'] = 'Блог пользователя {$a}';
$string['userblogentries'] = 'Записи блога пользователя «{$a}»';
$string['valid'] = 'Действительный';
$string['viewallblogentries'] = 'Все записи об этом «{$a}»';
$string['viewallmodentries'] = 'Просмотр всех записей об этом модуле типа «{$a->type}»';
$string['viewallmyentries'] = 'Просмотреть мои записи';
$string['viewblogentries'] = 'Записи об этом модуле типа «{$a->type}»';
$string['viewblogsfor'] = 'Просмотр всех записей для ...';
$string['viewcourseblogs'] = 'Просмотр всех записей этого курса';
$string['viewentriesbyuseraboutcourse'] = 'Просмотр записей пользователя «{$a}» об этом курсе';
$string['viewgroupblogs'] = 'Просмотр записей для группы...';
$string['viewgroupentries'] = 'Записи группы';
$string['viewmodblogs'] = 'Просмотр записей для элемента...';
$string['viewmodentries'] = 'Записи элемента';
$string['viewmyentries'] = 'Мои записи';
$string['viewmyentriesaboutcourse'] = 'Просмотр моих записей об этом курсе';
$string['viewmyentriesaboutmodule'] = 'Просмотр моих записей об этом модуле типа «{$a}»';
$string['viewsiteentries'] = 'Просмотр всех записей';
$string['viewuserentries'] = 'Просмотр всех записей пользователя «{$a}»';
$string['worldblogs'] = 'Все посетители могут просматривать записи, помеченные как «доступные для всех»';
$string['wrongexternalid'] = 'Неверный ID внешнего блога';
$string['wrongpostid'] = 'Неправильный ID сообщения блога';
