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
 * Strings for component 'block_massaction', language 'ru', version '4.1'.
 *
 * @package     block_massaction
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action_contentchangednotification'] = 'Отправить уведомление об изменении контента';
$string['action_delete'] = 'Удалить';
$string['action_duplicate'] = 'Дублировать';
$string['action_duplicatetocourse'] = 'Дублировать в другой курс';
$string['action_duplicatetosection'] = 'Дублировать в раздел';
$string['action_hide'] = 'Скрыть';
$string['action_makeavailable'] = 'Сделать доступным';
$string['action_moveleft'] = 'Переместить влево';
$string['action_moveright'] = 'Переместить вправо';
$string['action_movetosection'] = 'Переместить в раздел';
$string['action_show'] = 'Показать';
$string['actionexecuted'] = 'Запрошенное Вами действие было выполнено.';
$string['applicablecourseformats'] = 'Форматы курса, к которым можно применить';
$string['applicablecourseformats_description'] = 'Блок «Массовые действия» будет доступен только для выбранных форматов курсов. <br />Предварительно выбранные форматы по умолчанию — это те форматы, которые были протестированы и поддерживаются сопровождающим плагин разработчиком. Добавляйте другие форматы на свой страх и риск.';
$string['backgroundtaskinformation'] = 'Запрошенное Вами действие выполняется в фоновом режиме. Вы можете продолжать свою работу, ожидая его завершения.';
$string['blockname'] = 'Массовые действия';
$string['blocktitle'] = 'Массовые действия';
$string['choosecoursetoduplicateto'] = 'Выберите курс, в который Вы хотите продублировать выбранные модули курса';
$string['choosesectiontoduplicateto'] = 'Выберите раздел, в который Вы хотите продублировать выбранные модули курса.';
$string['choosetargetcourse'] = 'Выберите целевой курс';
$string['choosetargetsection'] = 'Выберите целевой раздел';
$string['confirmcourseselect'] = 'Выберите курс';
$string['confirmsectionselect'] = 'Выберите раздел';
$string['deletecheck'] = 'Подтвердить массовое удаление';
$string['deletecheckconfirm'] = 'Вы уверены, что хотите удалить следующий модуль (следующие модули)?';
$string['deselectall'] = 'Снять выделение со всего';
$string['duplicatemaxactivities'] = 'Максимальное количество модулей курса для дублирования';
$string['duplicatemaxactivities_description'] = 'Максимальное количество модулей курса, которые могут быть продублированы одновременно без запуска процесса в качестве фоновой задачи. Если установлено значение «0», все операции дублирования будут выполняться как фоновая задача.';
$string['invalidaction'] = 'Неизвестное действие: {$a}';
$string['invalidcourseid'] = 'Неправильный ID курса';
$string['invalidcoursemodule'] = 'Неправильный модуль курса';
$string['invalidmoduleid'] = 'Неправильный ID модуля: {$a}';
$string['jsonerror'] = 'Ошибка кодирования: Некорректный формат JSON';
$string['keepsectionnum'] = 'Сохранить первоначальный номер раздела';
$string['limittoenrolled'] = 'Ограничить список целевых курсов теми курсами, в которые записан пользователь';
$string['limittoenrolled_description'] = 'Если включено, выбор курса для функции «Дублировать в другой курс» будет ограничен курсами, в которые записан пользователь. Включение этого параметра рекомендуется для серверов с большим количеством курсов, поскольку отсутствие ограничения числа курсов может привести к проблемам с производительностью и таймаутам. Отключайте эту настройку на свой страх и риск.';
$string['massaction:addinstance'] = 'Добавлять новый блок «Массовые действия»';
$string['massaction:sendcontentchangednotifications'] = 'Отправлять уведомления об изменении контента';
$string['massaction:use'] = 'Использовать блок «Массовые действия»';
$string['modulename'] = 'Название элемента курса';
$string['moduletype'] = 'Тип элемента курса';
$string['multipleinstances'] = 'На одной странице не должно быть нескольких экземпляров этого блока. <br />Пожалуйста, удалите лишние экземпляры.';
$string['newsection'] = 'Новый раздел';
$string['noaction'] = 'Действие не указано';
$string['noactionsavailable'] = 'У Вас нет прав на выполнение любой из возможных операций, которые предоставляет этот блок';
$string['nocaptobackup'] = 'У вас недостаточно прав для выполнения резервного копирования в курсе';
$string['nocaptorestore'] = 'У вас недостаточно прав для выполнения восстановления в курсе';
$string['noitemselected'] = 'Выберите хотя бы один элемент для применения массовых действий';
$string['nomovingtargetselected'] = 'Выберите целевой раздел';
$string['notargetcourseidspecified'] = 'Не указан ID целевого курса';
$string['pluginname'] = 'Массовые действия';
$string['privacy:metadata'] = 'Этот блок только предоставляет возможность применять стандартные операции к нескольким модулям курса одновременно.
Таким образом, этот блок не хранит никаких данных.';
$string['sectionnotexist'] = 'Целевой раздел не существует';
$string['sectionselect'] = 'Выбор раздела';
$string['sectionselect_help'] = 'Вы можете выбрать только те разделы, которые включают хотя бы один модуль курса.
Кроме того, при использовании формата курса «Плитки» или «Одна тема» можно выбрать только те разделы, которые видны в данный момент.';
$string['selectall'] = 'Выделить всё';
$string['selectallinsection'] = 'Выделить всё в разделе';
$string['sourcecourseidlost'] = 'Не удалось найти ID курса-источника';
$string['unusable'] = 'Массовые действия нельзя использовать в этом формате курса или в текущей теме оформления';
$string['usage'] = 'Использование блока «Массовые действия»';
$string['usage_help'] = '<p>Этот блок позволяет учителям выполнять одновременно действия над несколькими ресурсами или элементами курса, вместо того чтобы выполнять повторяющиеся действия над этим элементами по отдельности.</p>
<p>Для использования блока в вашем браузере должен быть включен Javascript, и на главной странице курса Вы должны находиться в режиме редактирования. Поддерживаемые форматы курса: «Разделы по неделям», «Разделы по темам», «Topcoll», «Одна тема» и «Плитки».</p>
<p>Поддерживаемые действия включают удаление, перемещение влево/вправо, скрытие/отображение и перемещение.
Чтобы выбрать элементы для выполнения действий, просто отметьте флажок слева от элемента на главной странице курса. С помощью блока вы также можете выбрать все элементы или выбрать все элементы в разделе. Чтобы выполнить действия, нажмите внутри блока на действие, которое вы хотите выполнить.</p>';
$string['withselected'] = 'С выделенными';
