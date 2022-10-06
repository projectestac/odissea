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
 * Strings for component 'group', language 'ru', branch 'MOODLE_38_STABLE'
 *
 * @package   group
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addedby'] = 'Добавлено {$a}';
$string['addgroup'] = 'Добавить пользователя в группу';
$string['addgroupstogrouping'] = 'Добавить группу к потоку';
$string['addgroupstogroupings'] = 'Добавить/удалить группы';
$string['adduserstogroup'] = 'Добавить/удалить участников';
$string['allocateby'] = 'Распределить участников';
$string['anygrouping'] = '[Любой поток]';
$string['autocreategroups'] = 'Автосоздание групп';
$string['backtogroupings'] = 'Назад к потокам';
$string['backtogroups'] = 'Назад к группам';
$string['badnamingscheme'] = 'Шаблон должен содержать только один из символов «@» или «#»';
$string['byfirstname'] = 'В алфавитном порядке по имени, фамилии';
$string['byidnumber'] = 'В порядке номеров ID';
$string['bylastname'] = 'В алфавитном порядке по фамилии, имени';
$string['createautomaticgrouping'] = 'Автоматическое создание потока';
$string['creategroup'] = 'Создать группу';
$string['creategrouping'] = 'Создать поток';
$string['creategroupinselectedgrouping'] = 'Создать группу в потоке';
$string['createingrouping'] = 'Объединение в поток автоматически созданных групп';
$string['createorphangroup'] = 'Создать группу сирот';
$string['databaseupgradegroups'] = 'Версия групп сейчас {$a}';
$string['defaultgrouping'] = 'Поток по умолчанию';
$string['defaultgroupingname'] = 'Поток';
$string['defaultgroupname'] = 'Группа';
$string['deleteallgroupings'] = 'Удалить все потоки';
$string['deleteallgroups'] = 'Удалить все группы';
$string['deletegroupconfirm'] = 'Вы уверены, что хотите удалить группу «{$a}»?';
$string['deletegrouping'] = 'Удалить поток';
$string['deletegroupingconfirm'] = 'Вы уверены, что хотите удалить поток «{$a}»? (Группы в потоке удалены не будут)';
$string['deletegroupsconfirm'] = 'Вы уверены, что хотите удалить следующие группы?';
$string['deleteselectedgroup'] = 'Удалить выбранные группы';
$string['editgroupingsettings'] = 'Редактировать настройки потоков';
$string['editgroupsettings'] = 'Редактировать настройки группы';
$string['editusersgroupsa'] = 'Изменить группы для «{$a}»';
$string['enablemessaging'] = 'Групповые сообщения';
$string['enablemessaging_help'] = 'При включенном параметре пользователи могут отправлять сообщения другим участникам своей группы через систему сообщений.';
$string['enrolmentkey'] = 'Кодовое слово';
$string['enrolmentkeyalreadyinuse'] = 'Это кодовое слово уже используется для другой группы.';
$string['enrolmentkey_help'] = 'Кодовое слово позволяет ограничить доступ к курсу таким образом, чтобы он был доступен только тем, кто знает пароль. Если указать кодовое слово для регистрации в группе, то это позволит пользователю не только записаться на курс, но и автоматически стать участником этой группы.

Примечание: кодовые слова для записи в группу должны быть включены в настройках самостоятельной записи и кодовое слово для курса также должно быть задано.';
$string['erroraddremoveuser'] = 'Ошибка добавления/удаления пользователя {$a} в группу';
$string['erroreditgroup'] = 'Ошибка создания/изменения группы {$a}';
$string['erroreditgrouping'] = 'Ошибка создания/изменения потока {$a}';
$string['errorinvalidgroup'] = 'Ошибка, недопустимая группа {$a}';
$string['errorremovenotpermitted'] = 'У Вас недостаточно прав для удаления автоматически добавленного участника группы {$a}';
$string['errorselectone'] = 'Пожалуйста, выделите одну группу, прежде чем выбирать этот вариант';
$string['errorselectsome'] = 'Пожалуйства, выделите одну или несколько групп, прежде чем выбирать этот вариант';
$string['evenallocation'] = 'Примечание: чтобы сохранить распределение группы, даже если фактическое количество ее участников отличается от указанного Вами числа.';
$string['eventgroupcreated'] = 'Группа создана';
$string['eventgroupdeleted'] = 'Группа удалена';
$string['eventgroupingcreated'] = 'Поток создан';
$string['eventgroupingdeleted'] = 'Поток удален';
$string['eventgroupinggroupassigned'] = 'Группа была назначена потоку';
$string['eventgroupinggroupunassigned'] = 'Группа была убрана из потока';
$string['eventgroupingupdated'] = 'Поток обновлен';
$string['eventgroupmemberadded'] = 'Член группы добавлен';
$string['eventgroupmemberremoved'] = 'Член группы удален';
$string['eventgroupupdated'] = 'Группа обновлена';
$string['existingmembers'] = 'Существующие участники: {$a}';
$string['filtergroups'] = 'Фильтр групп по:';
$string['group'] = 'Группа';
$string['groupaddedsuccesfully'] = 'Группа {$a} успешно добавлена';
$string['groupaddedtogroupingsuccesfully'] = 'Группа {$a->groupname} добавлена в поток {$a->groupingname}';
$string['groupby'] = 'Создавать автоматически, взяв за основу';
$string['groupdescription'] = 'Описание группы';
$string['groupinfo'] = 'Информация о выбранной группе';
$string['groupinfomembers'] = 'Информация о выбранных участниках';
$string['groupinfopeople'] = 'Информация о выбранных людях';
$string['grouping'] = 'Поток';
$string['groupingaddedsuccesfully'] = 'Поток {$a} успешно добавлен';
$string['groupingdescription'] = 'Описание потока';
$string['grouping_help'] = 'Поток - это набор групп в курсе. Если выбрать поток, то студенты из групп в потоке будут иметь возможность работать вместе.';
$string['groupingname'] = 'Название потока';
$string['groupingnameexists'] = 'В этом курсе уже есть поток с названием «{$a}», выберите другое название.';
$string['groupings'] = 'Потоки';
$string['groupingsection'] = 'Доступ потоков';
$string['groupingsection_help'] = 'Поток представляет собой набор групп в курсе. Если здесь выбран поток, то только студенты - члены групп этого потока будут иметь доступ к разделу.';
$string['groupingsonly'] = 'Только потоки';
$string['groupmember'] = 'Участник группы';
$string['groupmemberdesc'] = 'Стандартная роль для участника группы.';
$string['groupmembers'] = 'Участники группы';
$string['groupmemberssee'] = 'Посмотреть участников группы';
$string['groupmembersselected'] = 'Участники выбранной группы';
$string['groupmode'] = 'Групповой режим';
$string['groupmodeforce'] = 'Принудительный групповой режим';
$string['groupmodeforce_help'] = 'Если используется принудительный групповой режим, то он применяется для всех элементов курса. Настройки группового режима каждого элемента игнорируются.';
$string['groupmode_help'] = 'Этот параметр имеет 3 варианта:

* Нет групп
* Изолированные группы - участники каждой группы работают только в пределах своей группы, другие группы им не видны.
* Видимые группы - участники каждой группы работают только в пределах своей группы, но могут видеть другие группы.

Групповой режим, определенный на уровне курса, является режимом по умолчанию для всех элементов, создаваемых в курсе. Для каждого элемента, поддерживающего групповой режим, можно можно указать его собственный групповой режим. Если в курсе установлен принудительный групповой режим, то установки группового режима для любого элемента курса игнорируются.';
$string['groupmy'] = 'Моя группа';
$string['groupname'] = 'Название группы';
$string['groupnameexists'] = 'В этом курсе уже существует группа с названием «{$a}» , пожалуйста, выберите другое название.';
$string['groupnotamember'] = 'Извините, Вы не являетесь участником группы';
$string['groups'] = 'Группы';
$string['groupscount'] = 'Группы ({$a})';
$string['groupsettingsheader'] = 'Группы';
$string['groupsgroupings'] = 'Группы и потоки';
$string['groupsinselectedgrouping'] = 'Группы в:';
$string['groupsnone'] = 'Нет групп';
$string['groupsonly'] = 'Только группы';
$string['groupspreview'] = 'Предварительный просмотр групп';
$string['groupsseparate'] = 'Изолированные группы';
$string['groupsvisible'] = 'Видимые группы';
$string['grouptemplate'] = 'Группа №#';
$string['hidepicture'] = 'Скрыть изображение';
$string['importgroups'] = 'Импортировать группы';
$string['importgroups_help'] = 'Группы могут быть импортированы из текстового файла. Формат файла должен выглядеть следующим образом:

* Каждая строка файла содержит одну запись
* Каждая запись - ряд данных, разделенных запятыми
* Первая запись содержит список имен полей, определяющих формат остальной части файла
* Обязательным полем является groupname (название группы)**
* Дополнительными полями могут быть:
- description (описание),
- enrolmentkey (кодовое слово),
- picture (изображение),
- hidepicture (скрыть изображение)**.

** - в скобках приведен перевод. В файле НЕ использовать!';
$string['includeonlyactiveenrol'] = 'Включать только активных участников';
$string['includeonlyactiveenrol_help'] = 'При включенном параметре заблокированные пользователи не будут включены в группы.';
$string['javascriptrequired'] = 'Для этой страницы необходимо включить JavaScript';
$string['members'] = 'Участники групп';
$string['membersofselectedgroup'] = 'Участники выбранной группы:';
$string['mygroups'] = 'Мои группы';
$string['namingscheme'] = 'Шаблон названия';
$string['namingscheme_help'] = 'Символ «@» используется для создания групп с названиями, содержащими буквы. Например, по шаблону «Группа @» будет созданы группы с именами «Группа А», «Группа В», «Группа С», ...

Символ «#» используется для создания групп с названиями, содержащими числа. Например, по шаблону «Группа #» будет созданы группы с именами «Группа 1», «Группа 2», «Группа 3», ...';
$string['newgrouping'] = 'Новый поток';
$string['newpicture'] = 'Новое изображение';
$string['newpicture_help'] = 'Выберите изображение в формате JPG или PNG. Изображение будет обрезано до квадрата с размером 100x100 пикселей.';
$string['noallocation'] = 'Нет распределения';
$string['nogroup'] = 'Нет групп';
$string['nogrouping'] = 'Нет потоков';
$string['nogroups'] = 'В курсе еще нет групп';
$string['nogroupsassigned'] = 'Группы не заданы';
$string['nopermissionforcreation'] = 'Невозможно создать группу «{$a}», так как у Вас нет необходимых прав';
$string['nosmallgroups'] = 'Предотвратить создание маленькой последней группы';
$string['notingroup'] = 'Игнорировать пользователей в группах';
$string['notingrouping'] = '[Группа вне потока]';
$string['notingrouplist'] = '[Не входят в группу]';
$string['nousersinrole'] = 'Нет подходящих пользователей с выбранной ролью';
$string['number'] = 'Количество групп/участников';
$string['numgroups'] = 'Количество групп';
$string['nummembers'] = 'Участников в каждой группе';
$string['othergroups'] = 'Другие группы';
$string['overview'] = 'Обзор';
$string['potentialmembers'] = 'Возможные участники: {$a}';
$string['potentialmembs'] = 'Возможные участники';
$string['printerfriendly'] = 'Вид для печати';
$string['privacy:metadata:core_message'] = 'Групповые разговоры';
$string['privacy:metadata:groups'] = 'Запись членства в группах.';
$string['privacy:metadata:groups:groupid'] = 'ID группы.';
$string['privacy:metadata:groups:timeadded'] = 'Момент времени, когда пользователь был добавлен в группу.';
$string['privacy:metadata:groups:userid'] = 'ID пользователя, который связан с группой.';
$string['random'] = 'Случайно';
$string['removefromgroup'] = 'Удалить пользователя из группы {$a}';
$string['removefromgroupconfirm'] = 'Вы действительно хотите удалить пользователя «{$a->user}» из группы «{$a->group}»?';
$string['removegroupfromselectedgrouping'] = 'Убрать группу из потока';
$string['removegroupingsmembers'] = 'Удалить все группы из потока';
$string['removegroupsmembers'] = 'Удалить всех участников группы';
$string['removeselectedusers'] = 'Убрать выбранных пользователей';
$string['selectfromgroup'] = 'Выбрать участников из группы';
$string['selectfromgrouping'] = 'Выбрать членов из потока';
$string['selectfromrole'] = 'Выбрать участников с ролью';
$string['showgroupsingrouping'] = 'Показать группы в потоке';
$string['showmembersforgroup'] = 'Показать участников группы';
$string['toomanygroups'] = 'Недостаточно пользователей для заполнения такого количества групп - пользователей с выбранной ролью только {$a}.';
$string['usercount'] = 'Количество участников';
$string['usercounttotal'] = 'Количество пользователей ({$a})';
$string['usergroupmembership'] = 'Группы выбранных пользователей:';
