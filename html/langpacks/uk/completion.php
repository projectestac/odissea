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
 * Strings for component 'completion', language 'uk', version '4.5'.
 *
 * @package     completion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = 'Досягнення оцінки';
$string['achievingpassinggrade'] = 'Досягнення прохідного бала';
$string['activities'] = 'Діяльності';
$string['activitiescompleted'] = 'Виконання діяльності';
$string['activitiescompletednote'] = 'Зауваження: Виконання діяльності повинно бути вказане для цього елементу в наведеному вище списку.';
$string['activitieslabel'] = 'Види діяльності / ресурси';
$string['activityaggregation'] = 'Потрібна умова';
$string['activityaggregation_all'] = 'ВСІ вибрані діяльності повинні бути виконані';
$string['activityaggregation_any'] = 'БУДЬ-ЯКА з вибраних діяльностей повинна бути виконана';
$string['activitycompletion'] = 'Умови завершення';
$string['activitycompletionupdated'] = 'Зміни збережено';
$string['activitygradenotrequired'] = 'Оцінка не потрібна';
$string['activitygradetopassnotset'] = 'Ця діяльність не має належної оцінки для проходження. Його можна встановити в розділі Оцінка налаштувань діяльності.';
$string['addconditions'] = 'Додайте умови';
$string['affectedactivities'] = 'Зміни вплинуть на такі дії або ресурси <b>{$a}</b>:';
$string['aggregationmethod'] = 'Спосіб об’єднання';
$string['all'] = 'Все';
$string['allconditions'] = 'Діяльність вважається завершеною, коли учні виконують усе наступне:';
$string['any'] = 'На вибір';
$string['approval'] = 'Схвалення';
$string['areyousureoverridecompletion'] = 'Ви впевнені, що хочете змінити поточний стан завершення цієї дії для цього користувача та позначити його як "{$a}"?';
$string['badautocompletion'] = 'Ви повинні вибрати принаймні одну умову.';
$string['badcompletiongradeitemnumber'] = 'Вимагати оцінку не можна ввімкнути для  <b>{$a}</b>, оскільки оцінювання за {$a} не ввімкнено.';
$string['bulkactivitycompletion'] = 'Завершення операції масового редагування';
$string['bulkactivitydetail'] = 'Виберіть дії, які потрібно масово редагувати.';
$string['bulkcompletiontracking'] = 'Відстеження завершення';
$string['bulkcompletiontracking_help'] = '<strong>Немає:</strong> не вказувати на завершення дії
<strong>Вручну:</strong> учні можуть вручну позначити роботу як виконану
<strong>З умовою(ами):</strong> показувати діяльність як завершену, якщо умови виконані';
$string['checkactivity'] = 'Прапорець для активності/ресурсу: {$a}';
$string['checkall'] = 'Установіть або зніміть прапорці для всіх видів діяльності та ресурсів';
$string['checkallsection'] = 'Установіть або зніміть прапорці для всіх видів діяльності та ресурсів у цьому розділі: {$a}';
$string['completeactivity'] = 'Завершіть вправу';
$string['completed'] = 'Виконано';
$string['completedunlocked'] = 'Опції відслідковування виконання розблоковано';
$string['completedunlockedtext'] = 'Коли ви збережете цю форму, дані про завершення буде видалено, а потім перераховано, де це можливо. Щоб уникнути цього, ви можете перейти без збереження.';
$string['completedwarning'] = 'Опції відслідковування виконання заблоковано';
$string['completedwarningtext'] = 'Ця дія позначена як виконана для одного або кількох студентів. Якщо ви розблокуєте налаштування, щоб внести зміни, а потім збережете форму, дані заповнення буде видалено, а потім перераховано, де це можливо. Виконання вручну не можна перерахувати, тому в цьому випадку студенту потрібно буде ще раз позначити його як виконане.';
$string['completion'] = 'Відстеження виконання';
$string['completion-alt-auto-enabled'] = 'Система відмічає цей елемент як виконаний відповідно до умов: {$a}';
$string['completion-alt-auto-fail'] = 'Виконано: {$a}  (не вдалося досягти прохідного балу)';
$string['completion-alt-auto-n'] = 'Не виконано: {$a}';
$string['completion-alt-auto-n-override'] = 'Не виконано: {$a->modname} (встановлено {$a->overrideuser})';
$string['completion-alt-auto-pass'] = 'Виконано: {$a} (перевищено прохідний бал)';
$string['completion-alt-auto-y'] = 'Виконано: {$a}';
$string['completion-alt-auto-y-override'] = 'Завершено: {$a->modname} (встановлено {$a->overrideuser})';
$string['completion-alt-manual-enabled'] = 'Студенти можуть самостійно відмітити елемент як виконаний';
$string['completion-alt-manual-n'] = 'Не виконано: {$a}. Виберіть для позначення виконання';
$string['completion-alt-manual-n-override'] = 'Не виконано: {$a->modname} (встановлено {$a->overrideuser}). Виберіть, щоб позначити як завершене.';
$string['completion-alt-manual-y'] = 'Виконано: {$a}. Виберіть для позначення не виконання';
$string['completion-alt-manual-y-override'] = 'Завершено: {$a->modname} (встановлено {$a->overrideuser}). Виберіть, щоб позначити як незавершене.';
$string['completion-fail'] = 'Виконано (не вдалося досягти прохідного балу)';
$string['completion-n'] = 'Не виконано';
$string['completion-n-override'] = 'Не завершено (встановлено {$a})';
$string['completion-pass'] = 'Виконано (перевищено прохідний бал)';
$string['completion-y'] = 'Виконано';
$string['completion-y-override'] = 'Завершено (встановлено {$a})';
$string['completion_automatic'] = 'Додайте вимоги';
$string['completion_help'] = 'Якщо ввімкнено, завершення діяльності відстежується вручну або автоматично залежно від певних умов. За бажанням можна встановити декілька умов. Якщо так, діяльність буде вважатися завершеною лише тоді, коли будуть виконані УСІ умови.';
$string['completion_link'] = 'activity/completion';
$string['completion_manual'] = 'Учні повинні вручну позначити дію як виконану';
$string['completion_none'] = 'Жодного';
$string['completionactivitydefault'] = 'Використати діяльність як типову';
$string['completionanygrade_desc'] = 'Будь-який сорт';
$string['completiondefault'] = 'Типове відстеження завершення';
$string['completiondisabled'] = 'Відключено, не показувати в налаштуваннях діяльностей';
$string['completionduration'] = 'Зарахування';
$string['completionenabled'] = 'Включено, управляє відслідковуванням виконання курсу в налаштуваннях діяльностей';
$string['completionexpected'] = 'Встановити нагадування на шкалі часу';
$string['completionexpected_help'] = 'Це дозволяє встановити нагадування для студентів, щоб вони попрацювали над цим завданням. Це з’явиться в блоці часової шкали на їхній інформаційній панелі як «{$a} вимагає дії».';
$string['completionexpecteddesc'] = 'Завершення очікується {$a}';
$string['completionexpectedfor'] = '{$a->instancename} слід заповнити';
$string['completionicons'] = 'Поля відміток виконання';
$string['completionicons_help'] = 'Прапорець біля назви активності може використовуватися, щоб вказати, коли діяльність завершена.

Якщо показано поле з пунктирною рамкою, галочка з’явиться автоматично, коли ви завершите вправу відповідно до умов, встановлених вчителем.

Якщо відображається поле із суцільною рамкою, ви можете клацнути його, щоб поставити прапорець, коли ви думаєте, що завершили дію. (Якщо ви передумаєте, якщо ви передумаєте, клацніть його ще раз.)';
$string['completionmenuitem'] = 'Відслідковування виконання';
$string['completionnotenabled'] = 'Відслідковування виконання не включено';
$string['completionnotenabledforcourse'] = 'Відслідковування виконання не включено для цього курсу';
$string['completionnotenabledforsite'] = 'Відслідковування виконання не включено для цього сайту';
$string['completionondate'] = 'Дата';
$string['completionondatevalue'] = 'Дата, коли курс буде позначено як завершений';
$string['completionpassgrade'] = 'Вимагають прохідної оцінки';
$string['completionpassgrade_desc'] = 'Прохідний бал';
$string['completionpassgrade_help'] = 'Якщо ввімкнено, діяльність вважається завершеною, коли учень отримує прохідну оцінку.';
$string['completionsettingslocked'] = 'Налаштування виконання заблоковано';
$string['completionupdated'] = 'Оновлено завершення дії <b>{$a}</b>';
$string['completionusegrade'] = 'Потрібна оцінка';
$string['completionusegrade_desc'] = 'Отримати оцінку';
$string['completionusegrade_help'] = 'Якщо ввімкнено, діяльність вважається завершеною, коли учень отримує оцінку. Якщо для діяльності встановлено прохідну оцінку, то у звіті про завершення діяльності відображаються піктограми успішно і не вдалося.';
$string['completionview'] = 'Потрібен перегляд';
$string['completionview_desc'] = 'Переглянути діяльність';
$string['configcompletiondefault'] = 'Типове налаштування для відслідковування виконання при створенні нової діяльності.';
$string['configenablecompletion'] = 'Якщо ввімкнено, можна встановити умови завершення курсу та діяльності. Рекомендується встановлювати умови завершення діяльності, щоб значущі дані відображалися для користувачів у огляді курсу на інформаційній панелі.';
$string['confirmselfcompletion'] = 'Самостійне підтвердження виконання';
$string['courseaggregation'] = 'Потрібні умови';
$string['courseaggregation_all'] = 'ВСІ вибрані курси повинні бути завершені';
$string['courseaggregation_any'] = 'БУДЬ-ЯКИЙ з вибраних курсів повинен бути завершеним';
$string['coursealreadycompleted'] = 'Ви вже завершили цей курс';
$string['coursecomplete'] = 'Курс завершено';
$string['coursecompleted'] = 'Курс завершено';
$string['coursecompletedmessage'] = '<p>Вітаємо! Ви завершили курс <a href="{$a->courselink}">{$a->coursename}.</a>.</p>';
$string['coursecompletion'] = 'Завершення курсу';
$string['coursecompletioncondition'] = 'Стан: {$a}';
$string['coursecompletionnavigation'] = 'Завершення курсу третинної навігації';
$string['coursecompletionsettings'] = 'Налаштування проходження курсу';
$string['coursegrade'] = 'Оцінка за курс';
$string['coursesavailable'] = 'Доступні курси';
$string['coursesavailableexplaination'] = 'Зауваження: Критерії виконання курсу повинні бути встановлені, щоб він з’явився в цьому списку.';
$string['criteria'] = 'Критерій';
$string['criteriagroup'] = 'Група критеріїв';
$string['criteriarequiredall'] = 'Потрібна відповідність всім вказаним критеріям';
$string['criteriarequiredany'] = 'Потрібна відповідність будь-якому критерію';
$string['criteriasummary'] = '{$a->type}: {$a->summary}';
$string['csvdownload'] = 'Завантажити в табличному форматі (UTF-8 .csv)';
$string['datepassed'] = 'Дата проходження';
$string['days'] = 'Днів';
$string['daysoftotal'] = '{$a->days} з {$a->total}';
$string['daystakingcourse'] = 'Дні проходження курсу';
$string['daysuntilcompletion'] = 'Час до завершення';
$string['defaultactivitycompletioncourse'] = 'Це стандартні умови виконання завдань у цьому курсі.';
$string['defaultactivitycompletionsite'] = 'Це стандартні умови виконання завдань усіх курсів.';
$string['defaultcompletion'] = 'Налаштування за замовчуванням для виконання елементу курсу';
$string['defaultcompletionupdated'] = 'Зміни збережено';
$string['deletecompletiondata'] = 'Дані про завершення';
$string['dependencies'] = 'Залежності';
$string['dependenciescompleted'] = 'Завершення курсів';
$string['detail_desc:receivegrade'] = 'Отримайте оцінку';
$string['detail_desc:receivepassgrade'] = 'Отримайте прохідну оцінку';
$string['detail_desc:view'] = 'Переглянути';
$string['done'] = 'Готово';
$string['editconditions'] = 'Редагувати умови';
$string['editcoursecompletionsettings'] = 'Налаштування стеження за виконанням курсу';
$string['emptyconditionsinfo'] = 'Для цієї діяльності не встановлено умов завершення.';
$string['emptyconditionswarning'] = 'Ви повинні додати принаймні одну умову завершення.';
$string['enablecompletion'] = 'Включити стеження за виконанням';
$string['enablecompletion_help'] = 'Якщо ввімкнено, ви можете встановити умови для завершення діяльності або завершення курсу.';
$string['enrolmentduration'] = 'Термін навчання';
$string['enrolmentdurationlength'] = 'Користувач повинен залишатися зарахованим протягом';
$string['err_noactivities'] = 'Інформація про виконання не включена в жодній діяльності, тому ніяк не відображається. Ви можете включити інформацію про виконання в налаштуваннях діяльності.';
$string['err_nocourses'] = 'Інформація про виконання не включена для інших курсів, тому ніяк не відображається. Ви можете включити інформацію про виконання в налаштуваннях діяльності.';
$string['err_nograde'] = 'Прохідний бал для цього курсу не встановлено. Для включення цього критерію вам потрібно вказати прохідний бал для цього курсу.';
$string['err_noroles'] = 'Немає ролей з правом \'moodle/course:markcomplete\' в цьому курсі. Ви можете включити цей тип критерію додавши таке право в роль(і).';
$string['err_nousers'] = 'У цьому курсі чи групі немає студентів, для яких відображається інформація про завершення. (Інформація про завершення відображається лише для користувачів із можливістю «Відображатися у звітах про завершення». Ця можливість дозволена лише для ролі студента за замовчуванням, тому, якщо студентів немає, ви побачите це повідомлення.)';
$string['err_settingslocked'] = 'Один або кілька студентів уже виконали критерій, тому налаштування заблоковано. Розблокування налаштувань призведе до видалення даних про виконання користувача та може призвести до плутанини.';
$string['err_system'] = 'Внутрішня помилка в системі відслідковування виконання. (Системні адміністратори можуть включити режим розробки, щоб побачити деталі помилки.)';
$string['eventcoursecompleted'] = 'Курс завершено';
$string['eventcoursecompletionupdated'] = 'Оновлено завершення курсу';
$string['eventcoursemodulecompletionupdated'] = 'Завершення курсу оновлено';
$string['eventdefaultcompletionupdated'] = 'За умовчанням для завершення курсової діяльності оновлено';
$string['excelcsvdownload'] = 'Завантажити в Excel-сумісному форматі (.csv)';
$string['failed'] = 'Не вдалося';
$string['fraction'] = 'Частка';
$string['graderequired'] = 'Необхідна оцінка';
$string['gradexrequired'] = 'Необхідно {$a}';
$string['hiddenrules'] = 'Деякі налаштування, характерні для <b>{$a}</b>, приховано. Щоб переглянути, зніміть вибір інших видів діяльності';
$string['incompatibleplugin'] = 'Ця діяльність не підтримує налаштування завершення за умовчанням. Умови завершення потрібно встановлювати вручну для кожного використання.';
$string['inprogress'] = 'В процесі';
$string['manual'] = 'Посібник';
$string['manualcompletionby'] = 'Завершення відмічають';
$string['manualcompletionbynote'] = 'Зауваження: право moodle/course:markcomplete повинно бути дозволено для ролей в цьому списку.';
$string['manualselfcompletion'] = 'Самореєстрація завершення';
$string['manualselfcompletionnote'] = 'Зауваження: Блок самореєстрації завершення курсу повинен бути доданий в курс, якщо включено самореєстрацію виконання';
$string['markcomplete'] = 'Відмітити виконання';
$string['markedcompleteby'] = 'Відмітив виконаним {$a}';
$string['markingyourselfcomplete'] = 'Самостійно відмітити виконання';
$string['modifybulkactions'] = 'Змініть дії, які потрібно масово редагувати';
$string['moredetails'] = 'Докладніше';
$string['nocriteriaset'] = 'Не встановлено критерії закінчення курсу';
$string['nogradeitem'] = 'Вимагати оцінку не можна ввімкнути для <b>{$a}</b>, оскільки діяльність не оцінюється.';
$string['notcompleted'] = 'Не виконано';
$string['notenroled'] = 'Ви не зареєстровані як студент цього курсу';
$string['nottracked'] = 'Наразі відслідковування завершення не проводиться на вашому курсі';
$string['notyetstarted'] = 'Ще не почато';
$string['overallaggregation'] = 'Умови завершення';
$string['overallaggregation_all'] = 'Курс буде завершено, коли виконаються ВСІ умови';
$string['overallaggregation_any'] = 'Курс буде завершено, коли виконається БУДЬ-ЯКА з умов';
$string['pending'] = 'Очікується';
$string['periodpostenrolment'] = 'Період після реєстрації';
$string['privacy:metadata:completionstate'] = 'Якщо діяльність завершена';
$string['privacy:metadata:course'] = 'Ідентифікатор курсу';
$string['privacy:metadata:coursecompletedsummary'] = 'Зберігає інформацію про користувачів, які виконали критерії курсу';
$string['privacy:metadata:coursemoduleid'] = 'Ідентифікатор активності';
$string['privacy:metadata:coursemodulesummary'] = 'Зберігає дані про завершення дії для користувача';
$string['privacy:metadata:coursesummary'] = 'Зберігає дані про завершення курсу для користувача.';
$string['privacy:metadata:gradefinal'] = 'Остаточна оцінка отримана за закінчення курсу';
$string['privacy:metadata:overrideby'] = 'Ідентифікатор користувача особи, яка змінила завершення дії';
$string['privacy:metadata:reaggregate'] = 'Якщо завершення курсу було переагреговано.';
$string['privacy:metadata:timecompleted'] = 'Час закінчення курсу.';
$string['privacy:metadata:timecreated'] = 'Час, коли було створено завершення дії';
$string['privacy:metadata:timeenrolled'] = 'Час, протягом якого користувач був зареєстрований на курсі';
$string['privacy:metadata:timemodified'] = 'Час завершення діяльності було змінено';
$string['privacy:metadata:timestarted'] = 'Час початку курсу.';
$string['privacy:metadata:unenroled'] = 'Якщо користувач був скасований з курсу';
$string['privacy:metadata:userid'] = 'Ідентифікатор користувача з даними про завершення курсу та діяльності';
$string['privacy:metadata:viewed'] = 'Якщо активність була переглянута';
$string['progress'] = 'Прогрес студента';
$string['progress-title'] = '{$a->user}, {$a->activity}: {$a->state} {$a->date}';
$string['progresstotal'] = 'Прогрес: {$a->complete} / {$a->total}';
$string['recognitionofpriorlearning'] = 'Визначення попереднього навчання';
$string['remainingenroledfortime'] = 'Залишатися зареєстрованим протягом певного періоду часу';
$string['remainingenroleduntildate'] = 'Залишатися зареєстрованим до вказаної дати';
$string['reportpage'] = 'Показано користувачів від {$a->from} до {$a->to} з {$a->total}.';
$string['requiredcriteria'] = 'Необхідний критерій';
$string['resetactivities'] = 'Очистіть усі перевірені дії та ресурси';
$string['restoringcompletiondata'] = 'Запис даних відслідковування виконання';
$string['roleaggregation'] = 'Потрібна умова';
$string['roleaggregation_all'] = 'ВСІ вибрані ролі повинні поставити відмітку закінчення';
$string['roleaggregation_any'] = 'БУДЬ-ХТО з вибраних ролей повинен поставити відмітку закінчення';
$string['roleidnotfound'] = 'Роль з КОДОМ {$a} не знайдено';
$string['saved'] = 'Збережено';
$string['seedetails'] = 'Переглянути деталі';
$string['select'] = 'Виберіть';
$string['self'] = 'Самостійно';
$string['selfcompletion'] = 'Самостійне виконання';
$string['showcompletionconditions'] = 'Показати умови завершення діяльності';
$string['showcompletionconditions_help'] = 'Показати умови виконання вправ на сторінці курсу.';
$string['showinguser'] = 'Показано користувача';
$string['studentsmust'] = 'Учні повинні';
$string['timecompleted'] = 'Час завершено';
$string['todo'] = 'Виконати';
$string['unenrolingfromcourse'] = 'Зняття з курсу';
$string['unenrolment'] = 'Відрахування';
$string['unit'] = 'Модуль';
$string['unlockcompletion'] = 'Розблокувати налаштування завершення';
$string['unlockcompletiondelete'] = 'Розблокуйте налаштування завершення та видаліть дані завершення користувача';
$string['updateactivities'] = 'Оновити статус завершення перевірених дій';
$string['usealternateselector'] = 'Використати альтернативний вибір курсу';
$string['usernotenroled'] = 'Користувач не зарахований до цього курсу';
$string['viewcoursereport'] = 'Переглянути звіт курсу';
$string['viewingactivity'] = 'Перегляд {$a}';
$string['withconditions'] = 'З умовами';
$string['writingcompletiondata'] = 'Запис даних про виконання';
$string['xdays'] = 'днів: {$a}';
$string['youmust'] = 'Ви маєте';
