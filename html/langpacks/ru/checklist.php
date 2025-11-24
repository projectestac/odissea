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
 * Strings for component 'checklist', language 'ru', version '4.5'.
 *
 * @package     checklist
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomments'] = 'Добавить комментарии';
$string['additem'] = 'Добавить';
$string['additemalt'] = 'Добавить новый пункт к списку';
$string['additemhere'] = 'Вставить новый пункт после текущего';
$string['addownitems'] = 'Добавить свои собственные пункты';
$string['addownitems-stop'] = 'Завершить добавление собственных пунктов';
$string['allowmodulelinks'] = 'Разрешить связи с модулями';
$string['anygrade'] = 'Любой';
$string['anygrouping'] = 'Любой поток';
$string['autopopulate'] = 'Показывать модули курса в контрольном списке';
$string['autopopulate_help'] = 'Настройка позволяет автоматически добавить список всех ресурсов и элементов текущего курса к контрольному списку.<br />
Этот список будет обновляться в соответствии с изменениями в Вашем курсе, каждый раз, как только Вы откроете страницу редактирования контрольного списка.<br />
Элементы в списке можно прятать, нажимая кнопку «Скрыть» рядом с ними.<br />
Чтобы удалить автоматически добавленные элементы из списка, установите это свойство обратно в значение «Нет», после чего нажмите «Удалить пункты, которые соответствуют модулю курса» на странице «Редактировать».';
$string['autoupdate'] = 'Отмечать, когда модуль завершен';
$string['autoupdate2'] = 'Отмечать при завершении курсов или выполнении активных элементов';
$string['autoupdate2_help'] = 'Настройка позволяет автоматически отмечать пункт в контрольном списке при выполнении соответствующего активного элемента курса.<br />
Если для определенного активного элемента включено отслеживание выполнения, оно будет использоваться для отметки пункта в списке.<br>
В противном случае «выполнение» трактуется в зависимости от элемента курса - «просмотр» для ресурса, «отправка» для теста или задания, «сообщение» на форуме или присоединение к чату и т. д. (для получения подробной информации о том, что именно приводит к тому, что действие помечается как «выполненное», попросите администратора своего сайта посмотреть файл \'mod/checklist/classes/local/autoupdate.php\'). <br>
Если пункт списка связан с курсом и для этого курса включено его выполнение, тогда пункт будет обновлен, когда этот курс будет помечен как завершенный.';
$string['autoupdate_help'] = 'Настройка позволяет автоматически отмечать пункт контрольного списка, как только Вы выполните соответствующий элемент курса.<br />
Если для определенных элементов курсов включено отслеживание выполнения, то это будет использоваться для отметки пунктов в списке.<br />
Понятие «Выполнено» для элемента курса меняется в зависимости от типа элемента курса - «просмотр» для ресурса, «отправить» для теста или другого задания, «сообщение» для форума или «присоединение» для чата, и т.д.<br />
Для более детальной информации о том, какое состояние элемента курса рассматривается как «выполнено», попросите администратора Вашего сайта просмотреть содержимое файла \'mod/checklist/autoupdate.php\'.<br />
Примечание: чтобы изменения, сделанные студентом в некотором элементе курса, отобразились в его контрольном списке, может пройти до 60 секунд.';
$string['autoupdatenote'] = 'Автоматически обновляется только отметка студента - в контрольных списках «Только для преподавателей» обновления не отображаются.';
$string['autoupdatewarning_both'] = 'Пункты этого контрольного списка будут обновлены автоматически (как только студенты выполнят соответствующий элемент курса). Однако, так как этот контрольный список имеет тип «Студенты и преподаватели», индикатор выполнения будет обновлен после подтверждения указанных отметок преподавателем.';
$string['autoupdatewarning_student'] = 'Пункты этого списка будут обновлены автоматически (как только студент выполнит соответствующий элемент курса).';
$string['autoupdatewarning_teacher'] = 'Пункты этого списка будут обновлены автоматически (как только студент выполнит соответствующий элемент курса).';
$string['calendardescription'] = 'Это событие было добавлено в контрольный список: $a';
$string['canceledititem'] = 'Отменить';
$string['changetextcolour'] = 'Выбрать следующий цвет текста';
$string['checkeditemsdeleted'] = 'Отмеченные пункты удалены';
$string['checklist'] = 'контрольный список';
$string['checklist:addinstance'] = 'Добавить новый контрольный список';
$string['checklist:edit'] = 'Создать и редактировать контрольный список';
$string['checklist:emailoncomplete'] = 'Получать эл. письмо о выполнении';
$string['checklist:preview'] = 'Просматривать контрольный список';
$string['checklist:updatelocked'] = 'Обновлять заблокированные контрольные отметки';
$string['checklist:updateother'] = 'Обновлять контрольные отметки студентов';
$string['checklist:updateown'] = 'Обновлять свои контрольные отметки';
$string['checklist:viewmenteereports'] = 'Просматривать достижения подопечных (только)';
$string['checklist:viewreports'] = 'Просматривать достижения студентов';
$string['checklistautoupdate'] = 'Позволить автоматическое обновление контрольного списка';
$string['checklistfor'] = 'Контрольный список для';
$string['checklistintro'] = 'Вступление';
$string['checklistsettings'] = 'Настройки';
$string['checks'] = 'Контрольные отметки';
$string['choosecourse'] = 'Выберите курс ...';
$string['comments'] = 'Комментарии';
$string['completiondetail:items'] = 'Отмечено пунктов: {$a}';
$string['completiondetail:percent'] = 'Отмечено пунктов: {$a}%';
$string['completionpercent'] = 'Количество элементов списка, которые должны быть отмечены:';
$string['completionpercentgroup'] = 'Требует проверки';
$string['completionpercentgroup_help'] = 'Если выбран «%», то пользователи должны отметить как «выполненные» по крайней мере указанный процент элементов контрольного списка . Если выбрано «Шт.», то пользователь должен отметить как минимум столько отдельных элементов в списке. Если вы укажете здесь количество элементов, превышающее количество элементов в контрольном списке, то он никогда не будет помечен как завершенный.';
$string['configchecklistautoupdate'] = 'Прежде чем разрешить это, Вы должны внести некоторые изменения в код ядра Moodle. Детальные инструкции смотрите в файле mod/checklist/README.txt';
$string['configshowcompletemymoodle'] = 'Если это отключено, то выполненные контрольные списки будут скрыты на странице \'Мой Moodle\'.';
$string['configshowmymoodle'] = 'Если это отключено, то элементы курса «Контрольный список» (с индикаторами выполнения) далее не будут присутствовать на странице «Мой Moodle».';
$string['configshowupdateablemymoodle'] = 'Если выбрано, то только обновляемые контрольные списки будут отображаться на странице профиля';
$string['confirmdeleteitem'] = 'Вы действительно хотите безвозвратно удалить эти пункты контрольного списка?';
$string['deleteitem'] = 'Удалить это пункт';
$string['duedatesoncalendar'] = 'Добавить сроки выполнения в календарь';
$string['edit'] = 'Редактировать контрольный список';
$string['editchecks'] = 'Редактировать отметки';
$string['editdatesstart'] = 'Редактировать даты';
$string['editdatesstop'] = 'Закончить редактировать даты';
$string['edititem'] = 'Редактировать этот пункт';
$string['emailoncomplete'] = 'Получают письма, когда контрольный список выполнен';
$string['emailoncomplete_help'] = 'Когда контрольный список выполнен, может быть отправлено письмо с подтверждениями: студенту, который его выполнил; всем преподавателям на курсе или тем и другим.<br />
Администратор может задать, кто будет получать эти сообщения используя разрешение «mod:checklist/emailoncomplete» - по умолчанию, все преподаватели (в том числе и без права редактирования) могут получать эти сообщения.';
$string['emailoncompletebody'] = 'Пользователь {$a->user} выполнил контрольный список «{$a->checklist}» в курсе «{$a->coursename}»
Просмотреть контрольный список можно здесь:';
$string['emailoncompletebodyown'] = 'Вы выполнили контрольный список «{$a->checklist}» в курсе «{$a->coursename}».
Просмотреть контрольный список можно здесь:';
$string['emailoncompletesubject'] = 'Пользователь {$a->user} выполнил контрольный список «{$a->checklist}»';
$string['emailoncompletesubjectown'] = 'Вы выполнили контрольный список «{$a->checklist}»';
$string['enterurl'] = 'Введите URL ...';
$string['eventchecklistcomplete'] = 'Контрольный список выполнения';
$string['eventeditpageviewed'] = 'Страница редактирования просмотрена';
$string['eventreportviewed'] = 'Отчет просмотрен';
$string['eventstudentchecksupdated'] = 'Отметки студента обновлены';
$string['eventteacherchecksupdated'] = 'Отметки учителя обновлены';
$string['export'] = 'Экспортировать пункты';
$string['forceupdate'] = 'Обновить отметки для всех автоматически созданных пунктов';
$string['gradetocomplete'] = 'Оценка для выполнения:';
$string['grouping'] = 'Видно для группировки';
$string['guestsno'] = 'У Вас нет прав на просмотр этого контрольного списка';
$string['headingitem'] = 'Этот пункт является заголовком и не может иметь отметки о выполнении';
$string['import'] = 'Импортировать пункты';
$string['importfile'] = 'Выберите файл для импорта';
$string['importfromcourse'] = 'Весь курс';
$string['importfromsection'] = 'Текущий раздел';
$string['indentitem'] = 'Пункт с отступом';
$string['itemcomplete'] = 'Выполнено';
$string['items'] = 'Пункты контрольного списка';
$string['itemstype'] = 'Шт.';
$string['linkcourses'] = 'Разрешить привязку пунктов к курсам';
$string['linkcourses_desc'] = 'При включении этого параметра пункты контрольного списка могут быть связаны с курсами в Moodle и помечаться как выполненные после завершения соответствующего курса. Это может повлиять на производительность сайтов с большим количеством курсов.';
$string['linkto'] = 'Ссылка на';
$string['linktocourse'] = 'Курс, связанный с этим пунктом';
$string['linktomodule'] = 'Активный элемент, связанный с этим пунктом';
$string['linktourl'] = 'Ссылка, связанная с этим пунктом';
$string['lockteachermarks'] = 'Заблокировать отметки преподавателя';
$string['lockteachermarks_help'] = 'Если при включенном параметре преподаватель сохранит отметку «Да», то он больше не сможет ее изменить. Только пользователи с правом «mod/checklist:updatelocked» будут иметь возможность изменить отметку.';
$string['lockteachermarkswarning'] = 'Примечание: после сохранения отметок Вы больше не сможете изменить ни одной метки «Да»';
$string['modulename'] = 'Контрольный список';
$string['modulename_help'] = 'Модуль «Контрольный список» позволяет учителям создавать контрольный список / список задач для того, чтобы студенты могли с ними работать.';
$string['modulename_link'] = 'mod/checklist/view';
$string['modulenameplural'] = 'Контрольные списки';
$string['moveitemdown'] = 'Переместить пункт вниз';
$string['moveitemup'] = 'Переместить пункт вверх';
$string['noitems'] = 'В контрольном списке нет пунктов';
$string['onlyenrolled'] = 'Только активные пользователи';
$string['onlyenrolleddesc'] = 'Если выбран этот параметр, то в контрольных списках отображаются только пользователи с активными регистрациями (отмените выбор, чтобы вернуться к старому поведению).';
$string['openlinkinnewwindow'] = 'Открывать в новом окне?';
$string['optionalhide'] = 'Спрятать необязательные пункты';
$string['optionalitem'] = 'Этот пункт необязательный';
$string['optionalshow'] = 'Показать необязательные пункты';
$string['or'] = 'ИЛИ';
$string['percent'] = '%';
$string['percentcomplete'] = 'Обязательные пункты';
$string['percentcompleteall'] = 'Все пункты';
$string['pluginadministration'] = 'Управление контрольным списком';
$string['pluginname'] = 'Контрольный список';
$string['preview'] = 'Предварительный просмотр';
$string['progress'] = 'Достижения';
$string['removeauto'] = 'Удалить пункты, соответствующие модулю курса';
$string['report'] = 'Просмотр достижений';
$string['reporttablesummary'] = 'Таблица показывает пункты контрольного списка, выполненные каждым студентом';
$string['requireditem'] = 'Этот пункт является обязательным - он должен быть выполнен';
$string['resetchecklistprogress'] = 'Вернуть контрольный список и пользовательские пункты в начальное состояние';
$string['savechecks'] = 'Сохранить';
$string['showcolorchooser'] = 'Показать средство выбора цвета';
$string['showcolorchooserdesc'] = 'Отображает средство выбора цвета элементов списка в edit.php';
$string['showcompletemymoodle'] = 'Показывать выполненные контрольные списки на странице «Мой Moodle»';
$string['showfulldetails'] = 'Показать подробную информацию';
$string['showhidechecked'] = 'Показать/скрыть отмеченные пункты';
$string['showmymoodle'] = 'Показывать контрольные списки на странице «Мой Moodle»';
$string['showprogressbars'] = 'Показать индикатор выполнения';
$string['showupdateablemymoodle'] = 'Показывать только обновляемые контрольные списки на странице профиля';
$string['studentcomments'] = 'Пользователь может добавлять комментарии к пунктам контрольного списка';
$string['teacheralongsidecheck'] = 'Студенты и преподаватели';
$string['teachercomments'] = 'Преподаватели могут добавлять комментарии';
$string['teacherdate'] = 'Дата последнего обновления этого пункта преподавателем';
$string['teacheredit'] = 'Кто может изменить';
$string['teacherid'] = 'Преподаватель, который последним обновил эту отметку';
$string['teachermarkno'] = 'Преподаватель утверждает, что Вы НЕ завершили это.';
$string['teachermarkundecided'] = 'Преподаватель пока не отметил это.';
$string['teachermarkyes'] = 'Преподаватель утверждает, что Вы завершили это';
$string['teachernoteditcheck'] = 'Только студент';
$string['teacheroverwritecheck'] = 'Только преподаватель';
$string['theme'] = 'Тема оформления контрольного списка';
$string['togglecolumn'] = 'Показать/скрыть колонку';
$string['toggledates'] = 'Показать/скрыть автора и дату отметки';
$string['togglerow'] = 'Показать/скрыть строку';
$string['unindentitem'] = 'Пункт без отступа';
$string['updatecompletescore'] = 'Сохранить отметки о выполнении';
$string['updateitem'] = 'Обновить';
$string['userdate'] = 'Дата последнего изменения этого пункта пользователем';
$string['useritemsallowed'] = 'Пользователь может добавлять собственные пункты';
$string['useritemsdeleted'] = 'Удален пользовательский пункт';
$string['view'] = 'Просмотреть контрольный список';
$string['viewall'] = 'Просмотреть всех студентов';
$string['viewallcancel'] = 'Отменить';
$string['viewallsave'] = 'Сохранить';
$string['viewsinglereport'] = 'Просмотреть достижения этого пользователя';
$string['viewsingleupdate'] = 'Обновить достижения этого пользователя';
$string['yesnooverride'] = 'Да, нельзя переопределять';
$string['yesoverride'] = 'Да, можно переопределить';
