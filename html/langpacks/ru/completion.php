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
 * Strings for component 'completion', language 'ru', branch 'MOODLE_38_STABLE'
 *
 * @package   completion
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = 'Достижение оценки';
$string['activities'] = 'Элементы';
$string['activitiescompleted'] = 'Завершение элемента курса';
$string['activitiescompletednote'] = 'Примечание: чтобы элемент курса отображался в этом списке для него должно быть настроено завершение элемента курса.';
$string['activitieslabel'] = 'Элементы курса / ресурсы';
$string['activityaggregation'] = 'Требуемое условие';
$string['activityaggregation_all'] = 'ВСЕ выбранные элементы курса должны быть завершены';
$string['activityaggregation_any'] = 'ЛЮБОЙ из выбранных элементов курса должен быть завершен';
$string['activitycompletion'] = 'Выполнение элемента курса';
$string['activitycompletionupdated'] = 'Изменения сохранены';
$string['affectedactivities'] = 'Изменения повлияют на следующие элементы курса или ресурсы (<b>{$a}</b>):';
$string['aggregationmethod'] = 'Способ объединения';
$string['all'] = 'Соответствие всем критериям';
$string['any'] = 'Соответствие любому из критериев';
$string['approval'] = 'Одобрение';
$string['areyousureoverridecompletion'] = 'Вы уверены, что хотите переопределить текущее состояние выполнения данного элемента для этого пользователя и отметить его как «{$a}»?';
$string['badautocompletion'] = 'При включении автоматического отслеживания выполнения, Вам также необходимо включить как минимум одно требование (ниже).';
$string['bulkactivitycompletion'] = 'Массовое редактирование настроек завершения элементов курса';
$string['bulkactivitydetail'] = 'Выберите элементы курса, которые Вы хотите изменить.';
$string['bulkcompletiontracking'] = 'Отслеживание завершения';
$string['bulkcompletiontracking_help'] = '<strong>Нет:</strong> Не показывать завершение элемента

<strong>Вручную:</strong> Студенты могут вручную отметить элемент как выполненный

<strong>С условиями:</strong> Показывать элемент как выполненный, если выполнены условия';
$string['checkactivity'] = 'Отметка для элемента курса / ресурса «{$a}»';
$string['checkall'] = 'Отметить или снять отметку у всех элементов курса и ресурсов.';
$string['checkallsection'] = 'Отметить или снять отметку у всех элементов курса и ресурсов в разделе «{$a}»';
$string['completed'] = 'Выполнено';
$string['completedunlocked'] = 'Настройки отслеживания выполнения разблокированы';
$string['completedunlockedtext'] = 'При сохранении изменений достижения всех студентов будут очищены. Если Вы передумали, не сохраняйте форму.';
$string['completedwarning'] = 'Настройки отслеживания выполнения заблокированы';
$string['completedwarningtext'] = 'Этот элемент уже был отмечен как выполненный несколькими ({$a}) студентами. Изменение настроек завершения удалит их статус выполнения и может ввести пользователей в заблуждение. В связи с этим данные настройки заблокированы и их не следует разблокировать без крайней необходимости.';
$string['completion'] = 'Отслеживание выполнения';
$string['completionactivitydefault'] = 'Использовать настройки элемента курса по умолчанию';
$string['completion-alt-auto-enabled'] = 'Система отмечает этот элемент как выполненный в соответствии с условиями: {$a}';
$string['completion-alt-auto-fail'] = 'Выполнено: {$a} (оценка ниже проходного балла)';
$string['completion-alt-auto-n'] = 'Не выполнено: {$a}';
$string['completion-alt-auto-n-override'] = 'Не выполнено: {$a->modname} (отметил(а) {$a->overrideuser})';
$string['completion-alt-auto-pass'] = 'Выполнено: {$a} (оценка выше проходного балла)';
$string['completion-alt-auto-y'] = 'Выполнено: {$a}';
$string['completion-alt-auto-y-override'] = 'Выполнено: {$a->modname} (отметил(а) {$a->overrideuser})';
$string['completion-alt-manual-enabled'] = 'Студенты могут вручную отмечать этот элемент как выполненный: {$a}';
$string['completion-alt-manual-n'] = 'Не выполнено: {$a}. Выберите, чтобы отметить элемент как выполненный.';
$string['completion-alt-manual-n-override'] = 'Не выполнено: {$a->modname} (отметил(а) {$a->overrideuser}). Выберите, чтобы отметить элемент как выполненный.';
$string['completion-alt-manual-y'] = 'Выполнено: {$a}. Выберите, чтобы отметить элемент курса как невыполненный.';
$string['completion-alt-manual-y-override'] = 'Выполнено: {$a->modname} (отметил(а) {$a->overrideuser}). Выберите, чтобы отметить элемент курса как невыполненный.';
$string['completion_automatic'] = 'Отображать элемент курса как выполненный при выполнении условий';
$string['completiondefault'] = 'Отслеживание завершения по умолчанию';
$string['completiondisabled'] = 'Отключено, не отображается в настройках элемента(ов)';
$string['completionduration'] = 'Зачисление';
$string['completionenabled'] = 'Включено, управляется через настройки отслеживания выполнения и параметры отдельных элементов курса';
$string['completionexpected'] = 'Планируется выполнение до';
$string['completionexpecteddesc'] = 'Ожидается выполнение {$a}';
$string['completionexpectedfor'] = '{$a->instancename} должно быть выполнено';
$string['completionexpected_help'] = 'Эта настройка определяет ожидаемую дату, когда элемент курса должен быть выполнен.';
$string['completion-fail'] = 'Выполнено (оценка ниже проходного балла)';
$string['completion_help'] = 'Если параметр включен, то будет отслеживаться (вручную или автоматически) выполнение элементов курса, основываясь на определенных условиях. Можно устанавливать несколько условий, но в этом случае элемент будет считаться выполненным при выполнении ВСЕХ условий.

Отметка рядом с названием элемента на странице курса показывает, что элемент выполнен.';
$string['completionicons'] = 'Поля для отметок о выполнении';
$string['completionicons_help'] = 'Отметка рядом с названием элемента может быть использована для отображения завершения элемента.

Если показано поле с пунктирной границей - это значит, что отметка появится автоматически после завершения элемента в соответствии с установленными преподавателем условиями.

Если показано пустое поле со сплошной границей, то Вы можете щелкнуть по нему и установить галочку, чтобы отметить завершение элемента (при повторном щелчке отметка снимается).';
$string['completion_manual'] = 'Студенты могут вручную отмечать элемент курса как выполненный.';
$string['completionmenuitem'] = 'Отслеживание выполнения';
$string['completion-n'] = 'Не выполнено';
$string['completion_none'] = 'Не отображать выполнение элемента курса';
$string['completionnotenabled'] = 'Отслеживание выполнения отключено';
$string['completionnotenabledforcourse'] = 'Отслеживание выполнения в этом курсе отключено';
$string['completionnotenabledforsite'] = 'Отслеживание выполнения на этом сайте отключено';
$string['completion-n-override'] = 'Не выполнено (отметил(а) {$a})';
$string['completionondate'] = 'Дата';
$string['completionondatevalue'] = 'Дата, когда курс будет помечен как завершенный';
$string['completion-pass'] = 'Выполнено (оценка выше проходного балла)';
$string['completionsettingslocked'] = 'Настройки выполнения заблокированы';
$string['completionupdated'] = 'Обновлены настройки завершения для элемента курса <b>«{$a}»</b>';
$string['completionusegrade'] = 'Требуется оценка';
$string['completionusegrade_desc'] = 'Студент должен получить оценку для выполнения этого элемента';
$string['completionusegrade_help'] = 'При отметке этого варианта элемент считается выполненным, когда студент получает оценку. Будут отображаться значки успешного или неудачного выполнения, если в настройках элемента указан проходной балл.';
$string['completionview'] = 'Требуется просмотр';
$string['completionview_desc'] = 'Студент должен просмотреть этот элемент, чтобы он считался выполненным';
$string['completion-y'] = 'Выполнено';
$string['completion-y-override'] = 'Выполнено (отметил(а) {$a})';
$string['configcompletiondefault'] = 'Значение по умолчанию для отслеживания выполнения при создании новых элементов курса.';
$string['configenablecompletion'] = 'При включении у Вас появится возможность отслеживать выполнение элементов курса.';
$string['confirmselfcompletion'] = 'Самостоятельное подтверждение выполнения';
$string['courseaggregation'] = 'Требуемое условие';
$string['courseaggregation_all'] = 'ВСЕ выбранные курсы должны быть завершены';
$string['courseaggregation_any'] = 'ЛЮБОЙ из выбранных курсов должен быть завершен';
$string['coursealreadycompleted'] = 'Вы уже завершили данный курс';
$string['coursecomplete'] = 'Курс завершен';
$string['coursecompleted'] = 'Курс завершен';
$string['coursecompletion'] = 'Завершение курса';
$string['coursecompletioncondition'] = 'Состояние: {$a}';
$string['coursegrade'] = 'Оценка за курс';
$string['coursesavailable'] = 'Доступные курсы';
$string['coursesavailableexplaination'] = 'Примечание: состояние завершения курса должно быть установлено для курса в приведенном выше списке.';
$string['criteria'] = 'Критерии';
$string['criteriagroup'] = 'Группа критериев';
$string['criteriarequiredall'] = 'Требуются соответствие всем указанным ниже критериям';
$string['criteriarequiredany'] = 'Требуется соответствие любому из указанных ниже критериев';
$string['csvdownload'] = 'Скачать в формате электронной таблицы (UTF-8 .csv)';
$string['datepassed'] = 'Дата прохождения';
$string['days'] = 'Дней';
$string['daysoftotal'] = '{$a->days} из {$a->total}';
$string['defaultcompletion'] = 'Настройки по умолчанию для выполнения элемента курса';
$string['defaultcompletionupdated'] = 'Изменения сохранены';
$string['deletecompletiondata'] = 'Удалить данные о выполнении';
$string['dependencies'] = 'Зависимости';
$string['dependenciescompleted'] = 'Завершение других курсов';
$string['editcoursecompletionsettings'] = 'Настройки отслеживания выполнения для курса';
$string['enablecompletion'] = 'Включить отслеживание выполнения';
$string['enablecompletion_help'] = 'При включенном параметре условия выполнения элемента курса могут быть заданы как в его настройках, так и в настройках условий завершения курса.
Рекомендуется включить параметр, чтобы информативные данные отображались в обзоре курсов в Личном кабинете.';
$string['enrolmentduration'] = 'Продолжительность зачисления';
$string['enrolmentdurationlength'] = 'Пользователь должен оставаться зачисленным на протяжении';
$string['err_noactivities'] = 'Отслеживание выполнения не настроено ни для одного элемента курса, поэтому здесь нечего отображать. Вы можете настроить отслеживание выполнения при редактировании параметров отдельных элементов.';
$string['err_nocourses'] = 'Отслеживание выполнения курса не включено ни для одного другого курса, поэтому здесь нечего отображать. Вы можете настроить отслеживание завершения курса в его настройках курса.';
$string['err_nograde'] = 'Для этого курса не была установлена проходная оценка курса. Чтобы включить этот критерий, необходимо создать проходную оценку для этого курса.';
$string['err_noroles'] = 'В этом курсе нет ролей с правом «moodle/course:markcomplete».';
$string['err_nousers'] = 'Нет студентов в этом курсе или группе, для которых отображается информация о завершении. (По умолчанию, информация о завершении отображается только для студентов, поэтому если нет студентов, то Вы увидите эту ошибку. Администраторы могут изменить этот параметр на странице администрирования.)';
$string['err_settingslocked'] = 'Один или несколько студентов уже выполнили требования этого критерия, поэтому настройки были заблокированы. При разблокировке настроек критерия данные пользователей о его выполнении будут удалены и может возникнуть путаница.';
$string['err_system'] = 'Произошла внутренняя системная ошибка выполнения. (Системные администраторы могут включить информацию об отладке для просмотра подробностей.)';
$string['eventcoursecompleted'] = 'Курс завершен';
$string['eventcoursecompletionupdated'] = 'Завершение курса обновлено';
$string['eventcoursemodulecompletionupdated'] = 'Выполнение элемента курса обновлено';
$string['eventdefaultcompletionupdated'] = 'Настройки по умолчанию для выполнения элемента курса обновлены';
$string['excelcsvdownload'] = 'Скачать в Excel-совместимом формате (.csv)';
$string['fraction'] = 'Доля';
$string['graderequired'] = 'Необходимая оценка курса';
$string['gradexrequired'] = 'Необходимо {$a}';
$string['hiddenrules'] = 'Были скрыты некоторые настройки, относящиеся к следующим модулям: <b>{$a}</b>. Для просмотра этих настроек, снимите отметки с других элементов курса.';
$string['inprogress'] = 'В процессе';
$string['manual'] = 'Вручную';
$string['manualcompletionby'] = 'Завершение вручную за другого';
$string['manualcompletionbynote'] = 'Примечание: Право moodle/course:markcomplete  должно быть предоставлено роли в приведенном списке.';
$string['manualselfcompletion'] = 'Пользователь может сам поставить отметку о выполнении';
$string['manualselfcompletionnote'] = 'Примечание: блок самостоятельного завершения должен быть добавлен в курс, если самозавершение вручную включено.';
$string['markcomplete'] = 'Отметить как выполненный';
$string['markedcompleteby'] = 'Отметку о выполнении поставил пользователь «{$a}»';
$string['markingyourselfcomplete'] = 'Самостоятельно отметить как выполненный';
$string['modifybulkactions'] = 'Изменить действия, которые вы хотите редактировать пакетом';
$string['moredetails'] = 'Подробнее';
$string['nocriteriaset'] = 'Для этого курса не установлены критерии завершения';
$string['nogradeitem'] = 'Требуемая оценка не может быть включена для <b>{$a}</b>, так как элемент не оценивается.';
$string['notcompleted'] = 'Не выполнено';
$string['notenroled'] = 'Вы не записаны на этот курс';
$string['nottracked'] = 'Вы в настоящее время не отслеживаете завершение в этом курсе';
$string['notyetstarted'] = 'Еще не началось';
$string['overallaggregation'] = 'Требуемые условия завершения';
$string['overallaggregation_all'] = 'Курс завершается, когда ВСЕ условия будут выполнены';
$string['overallaggregation_any'] = 'Курс завершается, когда ЛЮБОЕ из условий будет выполнено';
$string['pending'] = 'Ожидается';
$string['periodpostenrolment'] = 'Период после зачисления на курс';
$string['privacy:metadata:completionstate'] = 'Если элемент был выполнен';
$string['privacy:metadata:course'] = 'Идентификатор курса.';
$string['privacy:metadata:coursecompletedsummary'] = 'Хранит информацию о пользователях, которые выполнили критерии в курсе';
$string['privacy:metadata:coursemoduleid'] = 'ID элемента';
$string['privacy:metadata:coursemodulesummary'] = 'Хранит данные о выполнении элементов для пользователя';
$string['privacy:metadata:coursesummary'] = 'Хранит данные о завершении курса для пользователя.';
$string['privacy:metadata:gradefinal'] = 'Итоговая оценка, необходимая для завершения курса';
$string['privacy:metadata:overrideby'] = 'ID пользователя, который переопределил выполнение элемента';
$string['privacy:metadata:reaggregate'] = 'Если завершение курса было реорганизовано.';
$string['privacy:metadata:timecompleted'] = 'Время, когда курс был завершен.';
$string['privacy:metadata:timeenrolled'] = 'Время, когда пользователь записался на курс';
$string['privacy:metadata:timemodified'] = 'Время, когда выполнение элемента было изменено';
$string['privacy:metadata:timestarted'] = 'Время начала курса';
$string['privacy:metadata:unenroled'] = 'Если пользователь был исключен из курса';
$string['privacy:metadata:userid'] = 'ID пользователя с данными о завершении курса и элементов';
$string['privacy:metadata:viewed'] = 'Если элемент был просмотрен';
$string['progress'] = 'Достижения студента';
$string['progress-title'] = '{$a->user}, {$a->activity}: {$a->state} {$a->date}';
$string['progresstotal'] = 'Прогресс: {$a->complete} / {$a->total}';
$string['recognitionofpriorlearning'] = 'Распознавание предшествующего обучения';
$string['remainingenroledfortime'] = 'Оставаться зарегистрированным в течение определенного периода времени';
$string['remainingenroleduntildate'] = 'Оставшиеся записанными на курс до указанной даты';
$string['reportpage'] = 'Показать пользователей с {$a->from} по {$a->to} из {$a->total}.';
$string['requiredcriteria'] = 'Необходимые критерии';
$string['resetactivities'] = 'Снять отметки со всех элементов курса и ресурсов';
$string['restoringcompletiondata'] = 'Запись данных отслеживания выполнения';
$string['roleaggregation'] = 'Требуемое условие';
$string['roleaggregation_all'] = 'ВСЕ выбранные роли должны поставить отметку выполнения';
$string['roleaggregation_any'] = 'ЛЮБАЯ из выбранных ролей может поставить отметку выполнения';
$string['roleidnotfound'] = 'ID роли «{$a}» не найден';
$string['saved'] = 'Сохранено';
$string['seedetails'] = 'Подробнее';
$string['select'] = 'Выбрать';
$string['self'] = 'Самостоятельно';
$string['selfcompletion'] = 'Самостоятельное выполнение';
$string['showinguser'] = 'Отображается информация о пользователе';
$string['unenrolingfromcourse'] = 'Отчисление из курса';
$string['unenrolment'] = 'Исключение из курса';
$string['unit'] = 'Модуль';
$string['unlockcompletion'] = 'Разблокировать настройки';
$string['unlockcompletiondelete'] = 'Разблокировать настройки и удалить данные о выполнении элемента пользователями';
$string['updateactivities'] = 'Обновить статус выполнения отмеченных элементов курса';
$string['usealternateselector'] = 'Использовать альтернативный способ выбора курса';
$string['usernotenroled'] = 'Пользователь не записан на этот курс';
$string['viewcoursereport'] = 'Просмотреть отчет по курсу';
$string['viewingactivity'] = 'Просмотр элемента «{$a}»';
$string['withconditions'] = 'С условиями';
$string['writingcompletiondata'] = 'Запись данных отслеживания выполнения';
$string['xdays'] = 'дней: {$a}';
$string['yourprogress'] = 'Ваши достижения';
