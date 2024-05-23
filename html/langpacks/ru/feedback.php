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
 * Strings for component 'feedback', language 'ru', version '4.1'.
 *
 * @package     feedback
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_item'] = 'Добавить вопрос';
$string['add_pagebreak'] = 'Добавить разрыв страницы';
$string['adjustment'] = 'Расположение';
$string['after_submit'] = 'После ответа';
$string['allowfullanonymous'] = 'Полностью анонимно';
$string['analysis'] = 'Анализ результатов';
$string['anonymous'] = 'Анонимный';
$string['anonymous_edit'] = 'Вид респондента';
$string['anonymous_entries'] = 'Анонимные записи ({$a})';
$string['anonymous_user'] = 'Анонимные пользователи';
$string['answerquestions'] = 'Ответы на вопросы';
$string['append_new_items'] = 'Добавлены новые элементы';
$string['autonumbering'] = 'Автоматическая нумерация вопросов';
$string['autonumbering_help'] = 'Включает или отключает автоматизированную нумерацию каждого вопроса.';
$string['average'] = 'Средний';
$string['bold'] = 'Жирный';
$string['calendarend'] = '{$a} закрывается';
$string['calendarstart'] = '{$a} открывается';
$string['cannotaccess'] = 'Вы можете получить доступ к этому модулю обратной связи только из курса';
$string['cannotsavetempl'] = 'Сохранение шаблонов не разрешено';
$string['captcha'] = 'Капча';
$string['captchanotset'] = 'Капча не была установлена';
$string['check'] = 'Множественный выбор с несколькими вариантами ответа';
$string['check_values'] = 'Возможные ответы';
$string['checkbox'] = 'Множественный выбор с несколькими вариантами ответа (используются флажки)';
$string['choosefile'] = 'Выберите файл';
$string['chosen_feedback_response'] = 'Выбрали ответ';
$string['closebeforeopen'] = 'Вы указали дату окончания до даты начала.';
$string['complete_the_form'] = 'Ответьте на вопросы';
$string['completed'] = 'Завершено';
$string['completed_feedbacks'] = 'Отправлено ответов';
$string['completedon'] = 'Завершено в {$a}';
$string['completiondetail:submit'] = 'Отправить отзыв';
$string['completionsubmit'] = 'Рассматривать как выполненный, если представлены ответы';
$string['configallowfullanonymous'] = 'Если установлено значение этого параметра «Да», то «Обратная связь» на главной странице может быть заполнена Гостем, без входа в систему.';
$string['confirmdeleteentry'] = 'Вы уверены, что хотите удалить эту запись?';
$string['confirmdeleteitem'] = 'Вы уверены, что хотите удалить этот элемент?';
$string['confirmdeletetemplate'] = 'Вы уверены, что хотите удалить этот шаблон?';
$string['confirmusetemplate'] = 'Вы уверены, что хотите использовать этот шаблон?';
$string['continue_the_form'] = 'Продолжить ответы на вопросы...';
$string['count_of_nums'] = 'Количество чисел';
$string['courseid'] = 'ID курса';
$string['creating_templates'] = 'Сохранить эти вопросы как новый шаблон';
$string['delete_entry'] = 'Удалить запись';
$string['delete_item'] = 'Удалить вопрос';
$string['delete_old_items'] = 'Удалить старые элементы';
$string['delete_pagebreak'] = 'Удалить разрыв страницы';
$string['delete_template'] = 'Удалить шаблон';
$string['delete_templates'] = 'Удалить шаблон ...';
$string['depending'] = 'Зависимости';
$string['depending_help'] = 'Зависимые элементы позволяют Вам указать элементы, зависящие от значения других элементов.<br />
<strong>Здесь приведены примеры их использования:</strong><br />
<ul>
<li>Сначала создайте элемент, от значения которого зависят другие элементы.</li>
<li>Затем добавьте разрыв страницы.</li>
<li>Затем добавьте элемент, зависящий от значения прежнего элемента<br />
Выберите в форме создания элемент в списке «зависит от элемента» и вставьте нужное значение в текстовое поле «зависит от значения».</li>
</ul>
<strong>Структура должна выглядеть следующим образом:</strong>
<ol>
<li>Вопрос элемента 1: У Вас есть автомобиль?
Ответ: да/нет</li>
<li>Разрыв страницы</li>
<li>Вопрос элемента 2: Какого цвета Ваш автомобиль?<br />
(этот элемент зависит от элемента 1 со значением=да)</li>
<li>Вопрос элемента 3: почему у Вас нет автомобиля?<br />
(этот элемент зависит от элемента 1 со значением=нет)</li>
<li> ... другие элементы</li>
</ol>
Вот и всё. Развлекайтесь!';
$string['dependitem'] = 'Зависимые элементы';
$string['dependvalue'] = 'Значения зависимых элементов';
$string['description'] = 'Описание';
$string['do_not_analyse_empty_submits'] = 'Пропускать пустые ответы при анализе';
$string['downloadresponseas'] = 'Скачать все ответы:';
$string['drop_feedback'] = 'Удалить из этого курса';
$string['dropdown'] = 'Множественный выбор - разрешен один ответ (выпадающий список)';
$string['dropdown_values'] = 'Ответы';
$string['dropdownlist'] = 'Множественный выбор - один ответ (выпадающий список)';
$string['dropdownrated'] = 'Выпадающий список (со значениями)';
$string['edit_item'] = 'Редактировать вопрос';
$string['edit_items'] = 'Редактировать вопросы';
$string['email_notification'] = 'Уведомления о новых ответах на электронную почту преподавателю';
$string['email_notification_help'] = 'При включенном параметре преподаватели получают уведомление электронной почты о представлении ответов Обратной связи.';
$string['emailteachermail'] = '{$a->username} заполнил(а) анкету обратной связи: «{$a->feedback}»

Вы можете просмотреть ответы здесь:
{$a->url}';
$string['emailteachermailhtml'] = '<p>{$a->username} заполнил(а) анкету обратной связи: <i>\'{$a->feedback}\'</i>.</p>
<p>Вы можете просмотреть ответы <a href="{$a->url}">здесь</a>.</p>';
$string['entries_saved'] = 'Ваши ответы были сохранены. Спасибо.';
$string['eventresponsedeleted'] = 'Ответ удален';
$string['eventresponsesubmitted'] = 'Ответ представлен';
$string['export_questions'] = 'Экспортировать вопросы';
$string['export_to_excel'] = 'Экспорт в Excel';
$string['feedback:addinstance'] = 'Добавить новый учебный элемент обратной связи';
$string['feedback:complete'] = 'Заполнять анкету';
$string['feedback:createprivatetemplate'] = 'Создавать личный шаблон';
$string['feedback:createpublictemplate'] = 'Создавать общий шаблон';
$string['feedback:deletesubmissions'] = 'Удалять завершенные анкеты';
$string['feedback:deletetemplate'] = 'Удалять шаблон';
$string['feedback:edititems'] = 'Редактировать элементы';
$string['feedback:mapcourse'] = 'Сопоставлять курсы с глобальной Обратной связью';
$string['feedback:receivemail'] = 'Получать уведомления по электронной почте';
$string['feedback:view'] = 'Просматривать анкету обратной связи';
$string['feedback:viewanalysepage'] = 'Просматривать страницу с анализом ответов';
$string['feedback:viewreports'] = 'Просматривать отчеты';
$string['feedback_is_not_for_anonymous'] = 'Анкета обратной связи не для анонимных пользователей';
$string['feedback_is_not_open'] = 'эта анкета обратной связи не открыта';
$string['feedbackclose'] = 'Разрешить отвечать до';
$string['feedbackcompleted'] = 'Пользователь «{$a->username}» заполнил элемент курса «{$a->feedbackname}»';
$string['feedbackopen'] = 'Разрешить отвечать с';
$string['feedbackupdated'] = 'Обратная связь обновлена';
$string['file'] = 'Файл';
$string['filter_by_course'] = 'Фильтр по курсам';
$string['handling_error'] = 'Ошибка при обработке действий модуля «Обратная связь»';
$string['hide_no_select_option'] = 'Скрыть вариант «Не выбран»';
$string['horizontal'] = 'горизонтально';
$string['import_questions'] = 'импорт вопросов';
$string['import_successfully'] = 'импорт прошел успешно';
$string['importfromthisfile'] = 'импорт из файла';
$string['includeuserinrecipientslist'] = 'Включить {$a} в список получателей';
$string['indicator:cognitivedepth'] = 'Обратная связь: познавательный аспект';
$string['indicator:cognitivedepth_help'] = 'Этот показатель основан на глубине познания, достигнутой студентом при работе с элементом курса «Обратная связь».';
$string['indicator:cognitivedepthdef'] = 'Обратная связь: познавательный аспект';
$string['indicator:cognitivedepthdef_help'] = 'Участник достиг этого процента познавательного взаимодействия, предлагаемого элементом курса «Обратная связь» в течение этого интервала анализа (Уровни = Нет просмотра, Просмотр, Отправка)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Обратная связь: социальный аспект';
$string['indicator:socialbreadth_help'] = 'Этот показатель основан на широте общения, которая может быть достигнута студентом при работе с элементом Обратная связь.';
$string['indicator:socialbreadthdef'] = 'Обратная связь: социальный аспект';
$string['indicator:socialbreadthdef_help'] = 'Участник достиг этого процента социальной активности, предлагаемой элементами Обратная связь в течение этого интервала анализа (Уровни = нет участия, единственный участник, участник с другими)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['info'] = 'информация';
$string['infotype'] = 'Тип информации';
$string['insufficient_responses'] = 'недостаточно ответов';
$string['insufficient_responses_for_this_group'] = 'Недостаточно ответов для этой группы.';
$string['insufficient_responses_help'] = 'Для обеспечения анонимности обратной связи должно быть представлено не менее 2 ответов.';
$string['item_label'] = 'Метка';
$string['item_name'] = 'Вопрос';
$string['label'] = 'Пояснение';
$string['labelcontents'] = 'Содержимое';
$string['mapcourse'] = 'Сопоставление Обратной связи с курсами';
$string['mapcourse_help'] = 'По умолчанию, формы обратной связи, созданные на главной странице Вашего сайта, появятся во всех курсах, использующих блок «Обратная связь». Вы можете принудительно отображать форму обратной связи, делая блок закрепленным или ограничить отображения формы обратной связи только для определенных курсов.';
$string['mapcourseinfo'] = 'Этот модуль «Обратная связь» доступен для всех курсов этого сайта, использующих блок «Обратная связь». Однако, Вы можете ограничить курсы, в которых модуль появится путём их сопоставления. Найдите курс и сопоставьте его с этим модулем «Обратная связь».';
$string['mapcoursenone'] = 'Нет сопоставленных курсов. Обратная связь доступна для всех курсов';
$string['mapcourses'] = 'Сопоставление Обратной связи с курсами';
$string['mappedcourses'] = 'Сопоставленные курсы';
$string['mappingchanged'] = 'Привязка к курсу изменилась';
$string['maximal'] = 'максимум';
$string['messageprovider:message'] = 'Напоминание об «обратной связи»';
$string['messageprovider:submission'] = 'Уведомления о получении ответов в элементах типа «Обратная связь»';
$string['minimal'] = 'минимум';
$string['mode'] = 'Режим';
$string['modulename'] = 'Обратная связь';
$string['modulename_help'] = 'Модуль «Обратная связь» позволяет создать собственные анкеты для сбора обратной связи от участников, используя различные типы вопросов, включая множественный выбор, да/нет или ввод текста.

Обратная связь, при желании, может быть анонимной, а результаты могут быть показаны всем участникам или только преподавателям. Любая учебная деятельность «Обратная связь» может быть добавлена на главной странице сайта. В этом случае незарегистрированные пользователи могут заполнить анкету.

«Обратная связь» может быть использована:

* Для оценки курсов, помогая улучшить содержание для последующих участников
* Чтобы дать участникам возможность записаться на учебные модули, мероприятия и т.д.
* Для ответа гостей о выборе курса, политики образовательного учреждения и т.д.
* Для анонимных сообщений о случаях издевательства';
$string['modulename_link'] = 'mod/feedback/view';
$string['modulenameplural'] = 'Обратная связь';
$string['move_item'] = 'Переместить этот вопрос';
$string['multichoice'] = 'Множественный выбор';
$string['multichoice_values'] = 'Значения множественного выбора';
$string['multichoiceoption'] = '<span class="weight">({$a->weight}) </span>{$a->name}';
$string['multichoicerated'] = 'Множественный выбор (с показателями)';
$string['multichoicetype'] = 'Тип множественного выбора';
$string['multiplesubmit'] = 'Разрешать многократную отправку ответа';
$string['multiplesubmit_help'] = 'Если включено для анонимных опросов, то пользователи могут отвечать неограниченное число раз';
$string['name'] = 'Название';
$string['name_required'] = 'Необходимо заполнить';
$string['nameandlabelformat'] = '({$a->label}) {$a->name}';
$string['next_page'] = 'Следующая страница';
$string['no_handler'] = 'Отсутствует обработчик действия для';
$string['no_itemlabel'] = 'Не отмечено';
$string['no_itemname'] = 'Не задано название элемента';
$string['no_items_available_yet'] = 'Никакие вопросы еще не созданы';
$string['no_templates_available_yet'] = 'Нет доступных шаблонов';
$string['non_anonymous'] = 'Имя пользователя будет записано и показано с его ответами';
$string['non_anonymous_entries'] = 'Не анонимные записи ({$a})';
$string['non_respondents_students'] = 'Не ответившие студенты ({$a})';
$string['not_completed_yet'] = 'Еще не завершено';
$string['not_selected'] = 'Не выбрано';
$string['not_started'] = 'Не начато';
$string['numberoutofrange'] = 'Значение вне диапазона';
$string['numeric'] = 'Числовой ответ';
$string['numeric_range_from'] = 'Диапазон от';
$string['numeric_range_to'] = 'Диапазон до';
$string['of'] = 'от';
$string['oldvaluespreserved'] = 'Все старые вопросы и присвоенные им значения будут сохранены';
$string['oldvalueswillbedeleted'] = 'Текущие вопросы и все ответы на них будут удалены.';
$string['only_one_captcha_allowed'] = 'Только одна капча допускается в анкете обратной связи';
$string['openafterclose'] = 'Вы указали дату открытия после даты закрытия';
$string['overview'] = 'Просмотр';
$string['page'] = 'Страница';
$string['page-mod-feedback-x'] = 'Страница любого модуля Обратная связь';
$string['page_after_submit'] = 'Сообщение о завершении';
$string['pagebreak'] = 'Разрыв страницы';
$string['pluginadministration'] = 'Управление обратной связью';
$string['pluginname'] = 'Обратная связь';
$string['position'] = 'Позиция';
$string['previewquestions'] = 'Предпросмотр вопросов';
$string['previous_page'] = 'Предыдущая страница';
$string['privacy:metadata:completed'] = 'Запись об отправленных ответах.';
$string['privacy:metadata:completed:anonymousresponse'] = 'Будет ли ответ представлен анонимно.';
$string['privacy:metadata:completed:timemodified'] = 'Время последнего изменения ответа.';
$string['privacy:metadata:completed:userid'] = 'ID пользователя, который завершил элемент «Обратная связь».';
$string['privacy:metadata:completedtmp'] = 'Запись о не отправленных ответах.';
$string['privacy:metadata:value'] = 'Запись об ответе на вопрос.';
$string['privacy:metadata:value:value'] = 'Выбранный ответ.';
$string['privacy:metadata:valuetmp'] = 'Запись об ответе на вопрос в процессе представления.';
$string['public'] = 'Опубликовать';
$string['question'] = 'Вопрос';
$string['questionandsubmission'] = 'Параметры вопросов и ответов';
$string['questions'] = 'Вопросы';
$string['questionslimited'] = 'Отображаются только несколько ({$a}) первых вопросов, просмотр отдельных ответов или загрузка данных таблицы при просмотре всех.';
$string['radio'] = 'Множественный выбор с одним ответом';
$string['radio_values'] = 'Ответы';
$string['ready_feedbacks'] = 'Готовые отзывы';
$string['required'] = 'Обязательный';
$string['resetting_data'] = 'Очистить ответы';
$string['resetting_feedbacks'] = 'Очистить обратную связь';
$string['response_nr'] = 'Номер ответа';
$string['responses'] = 'Ответы';
$string['responsetime'] = 'Время ответов';
$string['save_as_new_item'] = 'Сохранить как новый вопрос';
$string['save_as_new_template'] = 'Сохранить как новый шаблон';
$string['save_entries'] = 'Отправить свои ответы';
$string['save_item'] = 'Сохранить вопрос';
$string['saving_failed'] = 'Ошибка сохранения';
$string['search:activity'] = 'Обратная связь — информация об элементе курса';
$string['search_course'] = 'Поиск курса';
$string['searchcourses'] = 'Поиск курсов';
$string['searchcourses_help'] = 'Поиск курса(ов) (по коду или названию), которые Вы хотите соединить с этой Обратной связью.';
$string['selected_dump'] = 'Выбранные индексы переменной $SESSION приведены ниже:';
$string['send'] = 'Отправить';
$string['send_message'] = 'Отправить сообщение';
$string['show_all'] = 'Показать все';
$string['show_analysepage_after_submit'] = 'Показать страницу с анализом';
$string['show_entries'] = 'Показать ответивших';
$string['show_entry'] = 'Показать ответ';
$string['show_nonrespondents'] = 'Показать не ответивших';
$string['site_after_submit'] = 'Сайт после завершения';
$string['sort_by_course'] = 'Сортировать по курсу';
$string['started'] = 'Начало';
$string['startedon'] = 'Начато в {$a}';
$string['subject'] = 'Тема';
$string['switch_item_to_not_required'] = 'Сделать необязательным';
$string['switch_item_to_required'] = 'Сделать обязательным';
$string['template'] = 'Шаблон';
$string['template_deleted'] = 'Шаблон удален';
$string['template_saved'] = 'Шаблон сохранен';
$string['templates'] = 'Шаблоны';
$string['textarea'] = 'Эссе';
$string['textarea_height'] = 'Число строк';
$string['textarea_width'] = 'Ширина';
$string['textfield'] = 'Короткий ответ';
$string['textfield_maxlength'] = 'Максимальное количество символов';
$string['textfield_size'] = 'Ширина текстового поля';
$string['there_are_no_settings_for_recaptcha'] = 'Не задано никаких настроек для капчи';
$string['this_feedback_is_already_submitted'] = 'Вы уже завершили этот учебный элемент';
$string['typemissing'] = 'Пропущено значение «тип»';
$string['update_item'] = 'Сохранить изменения для вопроса';
$string['url_for_continue'] = 'Ссылка на следующий элемент курса';
$string['url_for_continue_help'] = 'По умолчанию, после ответа на Обратную связь кнопка «Продолжить» переводит на страницу курса. Вы можете задать ссылку на следующий элемент курса, указав здесь URL этого элемента.';
$string['use_one_line_for_each_value'] = 'Каждый вариант ответа с новой строки!';
$string['use_this_template'] = 'Использовать этот шаблон';
$string['using_templates'] = 'Использовать шаблон';
$string['vertical'] = 'Вертикально';
$string['whatfor'] = 'Что вы хотите сделать?';
