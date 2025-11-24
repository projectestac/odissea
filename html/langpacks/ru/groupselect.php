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
 * Strings for component 'groupselect', language 'ru', version '4.5'.
 *
 * @package     groupselect
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Действие';
$string['assignedteacher'] = 'Наставник';
$string['assigngroup'] = 'Назначить наставников группам';
$string['assigngroup_help'] = 'При установленном параметре показывается кнопка для назначения наставников группам (если в курсе есть наставники). Назначенные наставники не являются участниками группы, но они показываются в файле экспорта и в основной информации (если включено). Полезно, если в курсе используются наставники для работы с группами. Это право может быть позднее настроено в правах ролей.';
$string['cannotselectclosed'] = 'Вы больше не можете присоединиться к группе.';
$string['cannotselectmaxed'] = 'Вы больше не можете присоединиться к группе {$a} – достигнуто максимальное количество участников.';
$string['cannotselectnocap'] = 'Вы не можете выбирать группу.';
$string['cannotselectnoenrol'] = 'Вы должны быть зачислены на курс, чтобы стать участником группы.';
$string['cannotunselectclosed'] = 'Вы больше не можете покинуть группу';
$string['creategroup'] = 'Создать новую группу';
$string['deleteallgrouppasswords'] = 'Удалить все пароли групп';
$string['deleteemptygroups'] = 'Удалять группу, когда последний участник вышел';
$string['deleteemptygroups_help'] = 'При установленном параметре группа автоматически удаляется, если последний участник её покидает';
$string['description'] = 'Описание группы';
$string['duedate'] = 'Дата окончания';
$string['edittooltip'] = 'Нажмите, чтобы отредактировать';
$string['enablepermissions'] = 'Основные права';
$string['eventexportlinkcreated'] = 'Ссылка экспорта создана';
$string['eventgroupteacheradded'] = 'Наставник добавлен';
$string['export'] = 'Создать ссылку на скачивание файла с данными групп (CSV)';
$string['export_download'] = 'Скачать CSV-файл';
$string['fromallgroups'] = 'Все группы';
$string['globalpassword_help'] = 'Задает глобальный пароль для присоединения к группам. Переопределяет пароли, установленные участниками.';
$string['groupid'] = 'ID группы';
$string['groupselect:addinstance'] = 'Самостоятельного выбирать новую группу';
$string['groupselect:assign'] = 'Разрешить назначать наставников группам';
$string['groupselect:create'] = 'Разрешить создавать группы';
$string['groupselect:export'] = 'Разрешить экспортировать участников групп';
$string['groupselect:select'] = 'Разрешить присоединяться к группам';
$string['groupselect:unselect'] = 'Разрешить выходить из групп';
$string['hidefullgroups'] = 'Скрывать заполненные группы в основной информации';
$string['hidefullgroups_help'] = 'Если включено, скрываются все группы, которые достигли максимального количества участников, в основной информации (кроме групп пользователя). Будет полезно, если групп много.';
$string['hidegroupmembers'] = 'Скрывать участников групп от студентов';
$string['hidegroupmembers_help'] = 'Если включено, все участники групп будут скрыты от студентов. Если у студентов есть права управлять группами (moodle/course:managegroups) или если у них есть доступ ко всем группам (moodle/site:accessallgroups), участники будут всё равно показаны.';
$string['hidesuspendedstudents'] = 'Скрывать заблокированных студентов';
$string['hidesuspendedstudents_help'] = 'При установленном флажке заблокированные студенты будут удалены из списка пользователей и групп.';
$string['incorrectpassword'] = 'Неправильный пароль';
$string['managegroups'] = 'Управление группами';
$string['maxcharlenreached'] = 'Достигнуто максимальное количество символов';
$string['maxgroupmembership'] = 'Максимальное количество групп, в которые можно вступить';
$string['maxgroupmembership_error_low'] = 'Отрицательные числа не допускаются!';
$string['maxgroupmembership_help'] = 'Максимальное количество групп, в которые можно вступить. 0 означает, что вступать в группы нельзя.';
$string['maxlimitreached'] = 'Максимальное количество достигнуто';
$string['maxmembers'] = 'Максимальное количество участников в группе';
$string['maxmembers_error_low'] = 'Отрицательные числа не допустимы! Укажите 0, чтобы снять ограничение.';
$string['maxmembers_error_smaller_minmembers'] = 'Должно быть больше, чем минимальное количество участников в группе!';
$string['maxmembers_help'] = 'Максимальное количество участников в группе. Укажите 0, чтобы снять ограничение.';
$string['maxmembers_icon'] = 'В группе слишком много участников';
$string['maxmembers_notification'] = 'В вашей группе слишком много участников! Максимальное количество {$a}.';
$string['member'] = 'Участник';
$string['membercount'] = 'Количество';
$string['membershidden'] = 'Список участников недоступен';
$string['memberslist'] = 'Участники';
$string['minmembers'] = 'Минимальное количество участников в группе';
$string['minmembers_error_bigger_maxmembers'] = 'Минимальное количество участников в группе должно быть меньше, чем максимальное количество.';
$string['minmembers_error_low'] = 'Отрицательные числа не допускаются! Укажите 0, чтобы снять ограничение.';
$string['minmembers_help'] = 'Минимальное количество участников в группе. Добавляет уведомление для групп, в которых количество участников ниже этого ограничения. По умолчанию – 0 (отключено).';
$string['minmembers_icon'] = 'В группе меньше участников, чем необходимо';
$string['minmembers_notification'] = 'В группе меньше участников, чем необходимо. Минимальное количество {$a}.';
$string['miscellaneoussettings'] = 'Разные настройки';
$string['modulename'] = 'Самостоятельный выбор групп';
$string['modulename_help'] = 'Позволяет участникам создавать и выбирать группы. Особенности:

* Участники могут создавать группы, указывать их описание и устанавливать пароли, если необходимо
* Участники могут выбирать и присоединяться к группам
* Наставников можно назначать на группы
* Преподаватели могут экспортировать группы в csv-файл
* Полная совместимость со встроенными группами Moodle: при необходимости группы могут быть созданы другими средствами, поддерживаются групповые задания и пр.';
$string['modulename_link'] = 'mod/groupselect/view';
$string['modulenameplural'] = 'Самостоятельные выборы групп';
$string['nogroups'] = 'Нет доступных для выбора групп.';
$string['notavailableanymore'] = 'Выбор групп более недоступен (начиная с {$a}).';
$string['notavailableyet'] = 'Выбор групп будет доступен с {$a}.';
$string['notifyexpiredselection'] = 'Показывать сообщение, если наступило время окончания выбора групп.';
$string['notifyexpiredselection_help'] = 'Если включено, при наступлении времени окончания выбора групп будет показано сообщение.';
$string['ok'] = 'OK';
$string['password'] = 'Необходим пароль';
$string['pluginadministration'] = 'Управление модулем';
$string['pluginname'] = 'Самостоятельный выбор групп';
$string['privacy:metadata'] = 'Плагин Самостоятельный выбор групп не хранит никаких персональных данных.';
$string['removeallsupervisors'] = 'Удалить наставников групп';
$string['saving'] = 'Сохранение...';
$string['select'] = 'Присоединиться к {$a}';
$string['selectconfirm'] = 'Вы действительно хотите присоединиться к группе <em>{$a}</em>?';
$string['selectgroupaction'] = 'Выбрать группу';
$string['showassignedteacher'] = 'Показывать назначенных наставников';
$string['showassignedteacher_help'] = 'Если включено, назначенные наставники будут показаны в списке участников группы. Полезно, если участникам необходимо знать своих наставников.';
$string['studentcancreate'] = 'Участники могут создавать группы';
$string['studentcancreate_help'] = 'Если включено, то участники без группы (в выбранном потоке) могут создавать группы. Это право может быть позднее настроено в правах ролей.';
$string['studentcanjoin'] = 'Участники могут присоединяться к группам';
$string['studentcanjoin_help'] = 'Если включено, участники могут присоединяться к группам. Это право может быть позднее настроено в правах ролей.';
$string['studentcanleave'] = 'Участники могут выходить из групп';
$string['studentcanleave_help'] = 'Если включено, участники могут выходить из групп. Это право может быть позднее настроено в правах ролей.';
$string['studentcansetdesc'] = 'Участники могут устанавливать и изменять описание групп';
$string['studentcansetdesc_help'] = 'Если включено,  участники могут при создании групп задавать её описание и участники группы могут редактировать это описание.';
$string['studentcansetenrolmentkey'] = 'Участники могут устанавливать пароли для присоединения к группам';
$string['studentcansetenrolmentkey_help'] = 'Если включено, участники могут устанавливать пароль для присоединения к группам';
$string['studentcansetgroupname'] = 'Участники могут устанавливать названия новых групп';
$string['studentcansetgroupname_help'] = 'Если включено, участники могут устанавливать названия для новых групп.';
$string['supervisionrole'] = 'Роль наставника';
$string['supervisionrole_help'] = 'Определить роль для наставника (обычно, это ассистент - преподаватель без права редактирования).';
$string['targetgrouping'] = 'Выбрать группы из потока';
$string['timeavailable'] = 'Доступно с';
$string['timeavailable_error_past_timedue'] = 'Не может начинаться после даты окончания!';
$string['timedue'] = 'Доступно до';
$string['timedue_error_pre_timeavailable'] = 'Не может заканчиваться до даты начала!';
$string['unassigngroup'] = 'Открепить наставников от групп';
$string['unassigngroup_confirm'] = 'Это открепит всех наставников от групп. Вы уверены?';
$string['unselect'] = 'Выйти из группы {$a}';
$string['unselectconfirm'] = 'Вы действительно ходите выйти из группы <em>{$a}</em>?';
