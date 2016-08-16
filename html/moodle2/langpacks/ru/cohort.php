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
 * Strings for component 'cohort', language 'ru', branch 'MOODLE_31_STABLE'
 *
 * @package   cohort
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcohort'] = 'Добавить глобальную группу';
$string['allcohorts'] = 'Все глобальные группы';
$string['anycohort'] = 'Любой';
$string['assign'] = 'Назначить';
$string['assigncohorts'] = 'Назначить членов глобальной группы';
$string['assignto'] = 'Участники глобальной группы «{$a}»';
$string['backtocohorts'] = 'Вернуться';
$string['bulkadd'] = 'Добавить в группу';
$string['bulknocohort'] = 'Не найдено ни одной группы';
$string['categorynotfound'] = 'Категория <b>{$a}</b> не найдена или у Вас нет разрешения на создание в ней глобальной группы. Будет использоваться контекст по умолчанию.';
$string['cohort'] = 'Глобальная группа';
$string['cohorts'] = 'Глобальные группы';
$string['cohortsin'] = '{$a}: доступные глобальные группы';
$string['component'] = 'Источник';
$string['contextnotfound'] = 'Контекст <b>{$a}</b> не найден или у Вас нет разрешения на создание в нем глобальной группы. Будет использоваться контекст по умолчанию.';
$string['csvcontainserrors'] = 'В данных CSV найдены ошибки. Подробности ниже.';
$string['csvcontainswarnings'] = 'В данных CSV найдены предупреждения. Подробности ниже.';
$string['csvextracolumns'] = 'Столбцы <b>{$a}</b> будут проигнорированы.';
$string['currentusers'] = 'Текущие пользователи';
$string['currentusersmatching'] = 'Подходящие текущие пользователи';
$string['defaultcontext'] = 'Контекст по умолчанию';
$string['delcohort'] = 'Удалить глобальную группу';
$string['delconfirm'] = 'Вы действительно хотите удалить глобальную группу «{$a}»?';
$string['description'] = 'Описание';
$string['displayedrows'] = 'отображено строк - {$a->displayed} из {$a->total}.';
$string['duplicateidnumber'] = 'Глобальная группа с таким идентификатором уже существует';
$string['editcohort'] = 'Редактировать глобальную группу';
$string['editcohortidnumber'] = 'Редактировать ID глобальной группы';
$string['editcohortname'] = 'Редактировать название глобальной группы';
$string['eventcohortcreated'] = 'Глобальная группа создана';
$string['eventcohortdeleted'] = 'Глобальная группа удалена';
$string['eventcohortmemberadded'] = 'Пользователь добавлен в глобальную группу';
$string['eventcohortmemberremoved'] = 'Пользователь удален из глобальной группы';
$string['eventcohortupdated'] = 'Глобальная группа обновлена';
$string['external'] = 'Внешняя группа';
$string['idnumber'] = 'Идентификатор глобальной группы';
$string['memberscount'] = 'Размер группы';
$string['name'] = 'Название';
$string['namecolumnmissing'] = 'Ошибка в формате файла CSV. Убедитесь, что он содержит названия столбцов.';
$string['namefieldempty'] = 'Имя поля не может быть пустым';
$string['newidnumberfor'] = 'Новый номер ID для глобальной группы {$a}';
$string['newnamefor'] = 'Новое название для глобальной группы {$a}';
$string['nocomponent'] = 'Создана вручную';
$string['potusers'] = 'Потенциальные пользователи';
$string['potusersmatching'] = 'Подходящие потенциальные пользователи';
$string['preview'] = 'Предварительный просмотр';
$string['removeuserwarning'] = 'Удаление пользователей из глобальной группы может привести к отчислению пользователей из нескольких курсов, что приведет к удалению пользовательских настроек, оценок, членства в группах и других сведений о пользователе из затронутых курсов.';
$string['search'] = 'Поиск';
$string['searchcohort'] = 'Найти группу';
$string['selectfromcohort'] = 'Выбрать пользователей из глобальной группы';
$string['systemcohorts'] = 'Системные глобальные группы';
$string['unknowncohort'] = 'Группа не найдена ({$a})!';
$string['uploadcohorts'] = 'Загрузить глобальные группы';
$string['uploadcohorts_help'] = 'Глобальные группы могут быть загружены с помощью текстового файла. Формат файла должен быть следующим:

* Каждая строка файла содержит одну запись
* Каждая запись - ряд данных, разделенных запятыми (или другим разделителем)
* Первая запись содержит список имен полей, определяющий формат остального файла
* Обязательным именем поля является name (название поля)
* Дополнительными именами полей являются  idnumber (id-номер), description (описание), descriptionformat (формат описания), visible (видимость), context (контекст), category (категория), category_id (id категории), category_idnumber (id-номер категории), category_path (путь к категории)';
$string['uploadedcohorts'] = 'Загруженные глобальные группы {$a}';
$string['useradded'] = 'Пользователь добавлен в группу «{$a}»';
$string['visible'] = 'Доступность';
$string['visible_help'] = 'Любая глобальная группа может быть просмотрена пользователями, имеющими возможность \'moodle/cohort:view\' в контексте глобальной группы.<br/>
Видимые глобальные группы также могут быть видны пользователями в расположенных ниже курсах.';
