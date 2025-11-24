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
 * Strings for component 'feedback', language 'uk', version '4.5'.
 *
 * @package     feedback
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_item'] = 'Додати запитання';
$string['add_pagebreak'] = 'Додати розрив сторінки';
$string['adjustment'] = 'Регулювання';
$string['after_submit'] = 'Після відправлення';
$string['allowfullanonymous'] = 'Дозволити повну анонімність';
$string['analysis'] = 'Аналіз';
$string['anonymous'] = 'Анонімно';
$string['anonymous_edit'] = 'Записати ім’я користувача';
$string['anonymous_entries'] = 'Анонімні записи ({$a})';
$string['anonymous_user'] = 'Анонімний користувач';
$string['answerquestions'] = 'Дайте відповіді на запитання';
$string['append_new_items'] = 'Додавання нових елементів';
$string['autonumbering'] = 'Автоматична нумерація';
$string['autonumbering_help'] = 'Включає або виключає автоматичну нумерацію кожного питання';
$string['average'] = 'Середнє';
$string['bold'] = 'Жирне';
$string['calendarend'] = '{$a} закрито';
$string['calendarstart'] = '{$a} відкрито';
$string['cannotaccess'] = 'Ви можете отримати доступ до цих відгуків лише з курсу';
$string['cannotsavetempl'] = 'Зберігання шаблонів заборонено';
$string['captcha'] = 'Перевірка (Captcha)';
$string['captchanotset'] = 'Перевірка (Captcha) не встановлена.';
$string['check'] = 'Множинний вибір - кілька варіантів відповіді';
$string['check_values'] = 'Можливі відповіді';
$string['checkbox'] = 'Множинний вибір - дозволено кілька варіантів відповіді (прапорці)';
$string['choosefile'] = 'Вибір файлу';
$string['chosen_feedback_response'] = 'Вибраний відгук';
$string['closebeforeopen'] = 'Визначено кінцеву дату раніше дати початку';
$string['complete_the_form'] = 'Дайте відповіді на запитання';
$string['completed'] = 'Завершено';
$string['completed_feedbacks'] = 'Надані відповіді';
$string['completedon'] = 'Завершено {$a}';
$string['completiondetail:submit'] = 'Надішліть відгук';
$string['completionsubmit'] = 'Переглянути як завершені, якщо відповідь надано';
$string['configallowfullanonymous'] = 'Якщо встановлено значення "так", користувачі можуть виконувати зворотний зв\'язок на домашній сторінці сайту без необхідності входити в систему.';
$string['confirmdeleteentry'] = 'Ви впевнені, що хочете видалити цей запис?';
$string['confirmdeleteitem'] = 'Ви впевнені, що хочете видалити цей елемент?';
$string['confirmdeletetemplate'] = 'Ви впевнені, що хочете видалити цей шаблон?';
$string['confirmusetemplate'] = 'Ви впевнені, що хочете використати цей шаблон?';
$string['continue_the_form'] = 'Продовжуйте відповідати на запитання';
$string['count_of_nums'] = 'Кількість чисел';
$string['courseid'] = 'Код курсу';
$string['creating_templates'] = 'Зберегти ці питання як новий шаблон';
$string['delete_entry'] = 'Видалити запис';
$string['delete_item'] = 'Видалити питання';
$string['delete_old_items'] = 'Видалити застарілі записи';
$string['delete_pagebreak'] = 'Видалити розрив сторінки';
$string['delete_template'] = 'Видалити шаблон';
$string['delete_templates'] = 'Видалити шаблон...';
$string['depending'] = 'в залежності елементів';
$string['depending_help'] = 'Залежність елементів дозволяє вам показувати елементи в залежності від значень інших елементів.<br /> <strong> Наприклад: </strong><br /> <ul> <li> Спочатку створіть елемент, від значення якого будуть залежати інші елементи.</li> <li>Потім додайте розрив сторінки.</li> <li>Потім додайте елемент залежний від значення попереднього елемента<br /> Виберіть у формі створення елементу елемент у списку "залежний елемент" та вкажіть потрібне значення в поле "залежне значення".</li> </ul> <strong>Структура повинна виглядати наступним чином:</strong> <ol> <li>Елемент Питання: ви маєте машину? Відповідь: так/ні</li> <li>Розрив сторінки</li> <li>Елемент Питання: якого кольору ваша машина?<br /> (цей елемент залежить від відповіді "так" на перше питання)</li> <li>Елемент Питання: чому ви не маєте машини?<br />(цей елемент залежить від відповіді "ні" на перше питання)</li> <li> ... інші елементи</li> </ol> От і все. Щасти!';
$string['dependitem'] = 'залежний елемент';
$string['dependvalue'] = 'залежне значення';
$string['description'] = 'Опис';
$string['do_not_analyse_empty_submits'] = 'Пропустити порожні відповіді в аналізі';
$string['downloadresponseas'] = 'Завантажити всі відповіді як:';
$string['drop_feedback'] = 'Видалити з цього курсу';
$string['dropdown'] = 'Кілька варіантів – дозволена одна відповідь (випадаючим списком)';
$string['dropdown_values'] = 'Відповіді';
$string['dropdownlist'] = 'Кілька варіантів – одна відповідь (розкривне меню)';
$string['dropdownrated'] = 'Розкривне меню (оцінка)';
$string['edit_item'] = 'Редагувати питання';
$string['edit_items'] = 'Редагувати питання';
$string['email_notification'] = 'Надсилати повідомлення по ел.пошті';
$string['email_notification_help'] = 'Якщо включено, то адміністратори отримують на ел.пошту повідомлення про надання коментаря.';
$string['emailteachermail'] = '{$a->username} дав відповідь у дільності зворотного зв’язку: \'{$a->feedback}\'

Ви можете переглянути її тут:

{$a->url}';
$string['emailteachermailhtml'] = '{$a->username} дав відповідь у дільності зворотного зв’язку: <i>\'{$a->feedback}\' </i><br /><br /> Ви можете переглянути її <a href="{$a->url}">тут</a>.';
$string['entries_saved'] = 'Ваша відповідь збережена. Дякуємо.';
$string['eventresponsedeleted'] = 'Відповідь вилучено';
$string['eventresponsesubmitted'] = 'Відповідь надіслано';
$string['export_questions'] = 'Експортувати питання';
$string['export_to_excel'] = 'Експортувати до Excel';
$string['feedback:addinstance'] = 'Додавати нові коментарі';
$string['feedback:complete'] = 'Використовувати зворотний зв’язок';
$string['feedback:createprivatetemplate'] = 'Створювати персональні шаблони';
$string['feedback:createpublictemplate'] = 'Створювати загальні шаблони';
$string['feedback:deletesubmissions'] = 'Видаляти відповіді';
$string['feedback:deletetemplate'] = 'Видаляти шаблони';
$string['feedback:edititems'] = 'Редагувати елементи';
$string['feedback:mapcourse'] = 'Прив’язувати курси до глобального зворотного зв’язку';
$string['feedback:receivemail'] = 'Отримувати повідомлення на ел.пошту';
$string['feedback:view'] = 'Переглядати зворотний зв’язок';
$string['feedback:viewanalysepage'] = 'Переглядати результати аналізу зворотного зв’язку';
$string['feedback:viewreports'] = 'Переглядати звіти';
$string['feedback_is_not_for_anonymous'] = 'Зворотній зв\'язок не для анонімів';
$string['feedback_is_not_open'] = 'Зворотний зв\'язок не відкрито';
$string['feedbackclose'] = 'Закрити зворотний зв’язок до';
$string['feedbackcompleted'] = '{$a->username} відповів у {$a->feedbackname}';
$string['feedbackopen'] = 'Відкрити  зворотний зв’язок до';
$string['feedbackupdated'] = 'Відгук оновлено.';
$string['file'] = 'Файл';
$string['filter_by_course'] = 'Фільтр за курсом';
$string['handling_error'] = 'Сталася помилка в модулі обробки зворотного зв’язку';
$string['hide_no_select_option'] = 'Приховати елемент "Не вибрано"';
$string['horizontal'] = 'Горизонтально';
$string['import_questions'] = 'Імпортувати питання';
$string['import_successfully'] = 'Імпортування закінчено';
$string['importfromthisfile'] = 'Імпортувати з цього файлу';
$string['includeuserinrecipientslist'] = 'Включити {$a} до списку одержувачів';
$string['indicator:cognitivedepth'] = 'Зворотній зв\'язок: пізнавальний аспект';
$string['indicator:cognitivedepth_help'] = 'Цей показник базується на глибині пізнання, досягнутої учнем під час дії зворотного зв’язку.';
$string['indicator:cognitivedepthdef'] = 'Зворотній зв\'язок пізнавальний';
$string['indicator:cognitivedepthdef_help'] = 'Учасник досяг цього відсотка когнітивної активності, запропонованої діяльністю зворотного зв’язку протягом цього інтервалу аналізу (Рівні = Немає перегляду, Перегляд, Надсилання)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Зворотній зв\'язок: соціальний аспект';
$string['indicator:socialbreadth_help'] = 'Цей показник базується на соціальному розширенні, досягнутому студентом у діяльності зі зворотним зв’язком.';
$string['indicator:socialbreadthdef'] = 'Зворотній зв\'язок соц';
$string['indicator:socialbreadthdef_help'] = 'Учасник досяг цього відсотка соціальної залученості, запропонованої діяльністю зворотного зв’язку протягом цього інтервалу аналізу (Рівні = Без участі, Учасник сам, Учасник з іншими)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['info'] = 'Інформація';
$string['infotype'] = 'Тип інформації';
$string['insufficient_responses'] = 'недостатньо відповідей';
$string['insufficient_responses_for_this_group'] = 'Є недостатньо відповідей для цієї групи';
$string['insufficient_responses_help'] = 'Щоб відгук був анонімним, має бути принаймні 2 відповіді.';
$string['item_label'] = 'Позначка';
$string['item_name'] = 'Питання';
$string['label'] = 'Напис';
$string['labelcontents'] = 'Містиме';
$string['mapcourse'] = 'Прив’язати зворотний зв’язок до курсів';
$string['mapcourse_help'] = 'Типово, форма зворотного зв’язку створена на головній сторінці буде доступна на всьому сайті у всіх курсах, які використовують блок зворотного зв’язку. Ви можете змусити з’являтися блок зворотного зв’язку через липкі блоки, або обмежити курси,  в яких цей блок буде з’являтися.';
$string['mapcourseinfo'] = 'Цей зворотний зв’язок рівня сайту доступний для всіх курсів. Однак, ви можете обмежити курси, у яких він з\'явиться вказавши їх. Знайдіть курс та прив’яжіть його до зворотного зв’язку.';
$string['mapcoursenone'] = 'Не прив’язано ніяких курсів. Зворотний зв’язок доступний для всіх курсів.';
$string['mapcourses'] = 'Прив’язка зворотного зв’язку до курсів';
$string['mappedcourses'] = 'Зв’язані курси';
$string['mappingchanged'] = 'Змінилася прив’язкадокурсу';
$string['maximal'] = 'Максимально';
$string['messageprovider:message'] = 'Нагадування зворотного зв’язку';
$string['messageprovider:submission'] = 'Повідомлення зворотного зв’язку';
$string['minimal'] = 'Мінімально';
$string['mode'] = 'Режим';
$string['modulename'] = 'Зворотний зв’язок';
$string['modulename_help'] = '<p>Даний елемент дозволяє викладачам створити своє власне опитування для отримання зворотного зв\'язку, використовуючи різні типи питань для збирання та аналізу даних від користувачів. Частина типів питань містить можливі відповіді, задані викладачем, у тому числі, коли користувач вибирає потрібний варіант; деякі типи питань дозволяють надавати відповіді власноруч.</p>
<p>Опитування через дану діяльність, за бажання, може бути анонімним, а результати можуть бути показані всім учасникам або лише викладачу. Також передбачена можливість додавати форму зворотного зв\'язку на головній сторінці порталу, що дає змогу незареєстрованим користувачам (гостьовий вхід) залишати відгуки або повідомляти про будь-що анонімно.</p>
<p><b>Зворотний зв\'язок</b> може бути використаний:</p>
<ul>
  <li>Для оцінки курсів, допомагаючи покращити зміст для наступних учасників</li>
  <li>Щоб дати учасникам можливість записатися на навчальні модулі, заходи тощо</li>
  <li>Для збору анонімних відповідей про причини обрання курсів, політики навчального закладу і т.д.</li>
  <li>Для профілактики та попередження випадків хуліганства, насилля, булінгу шляхом отримання анонімних повідомлень про будь-які неприпустимі випадки/події</li>
</ul>';
$string['modulename_link'] = 'mod/feedback/view';
$string['modulenameplural'] = 'Зворотний зв’язок';
$string['move_item'] = 'Перемістити це питання';
$string['multichoice'] = 'Множинний вибір';
$string['multichoice_values'] = 'Значення  множинного вибору';
$string['multichoiceoption'] = '<span class="weight">({$a->weight}) </span>{$a->name}';
$string['multichoicerated'] = 'Множинний вибір (оцінення)';
$string['multichoicetype'] = 'Тип множинного вибору';
$string['multiplesubmit'] = 'Кілька відповідей';
$string['multiplesubmit_help'] = 'Якщо включена для анонімного слідкування, користувачі можуть відправити відгук необмежену кількість разів.';
$string['name'] = 'Назва';
$string['name_required'] = 'Назва обов’язкова';
$string['nameandlabelformat'] = '({$a->label}) {$a->name}';
$string['next_page'] = 'Наступна сторінка';
$string['no_handler'] = 'В обробнику не створено дій для';
$string['no_itemlabel'] = 'Немає позначки';
$string['no_itemname'] = 'Немає назви елементу';
$string['no_items_available_yet'] = 'Немає питань';
$string['no_templates_available_yet'] = 'Немає шаблонів';
$string['non_anonymous'] = 'Ім\'я користувача буде записане та показане з відповідями';
$string['non_anonymous_entries'] = 'Не анонімні записи ({$a})';
$string['non_respondents_students'] = 'Студенти-нереспонденти ({$a})';
$string['not_completed_yet'] = 'Ще не перевірено';
$string['not_selected'] = 'Не вибрано';
$string['not_started'] = 'Не почато';
$string['numberoutofrange'] = 'Значення поза діапазоном';
$string['numeric'] = 'Числова відповідь';
$string['numeric_range_from'] = 'Діапазон від';
$string['numeric_range_to'] = 'Діапазон до';
$string['of'] = 'від';
$string['oldvaluespreserved'] = 'Всі старі питання та пов’язані значення будуть збережені';
$string['oldvalueswillbedeleted'] = 'Поточні запитання та всі відповіді будуть видалені.';
$string['only_one_captcha_allowed'] = 'У зворотному зв’язку дозволено тільки одну перевірку (captcha)';
$string['openafterclose'] = 'Ви вказали дату відкриття після дати закриття';
$string['overview'] = 'Перегляд';
$string['page'] = 'Сторінка';
$string['page-mod-feedback-x'] = 'Будь-яка сторінка модуля Зворотного зв’язку';
$string['page_after_submit'] = 'Сторінка після відсилання відповіді';
$string['pagebreak'] = 'Розрив сторінки';
$string['pluginadministration'] = 'Керування зворотним зв’язком';
$string['pluginname'] = 'Зворотний зв’язок';
$string['position'] = 'Позиція';
$string['previewquestions'] = 'Попередній перегляд запитань';
$string['previous_page'] = 'Попередня сторінка';
$string['privacy:metadata:completed'] = 'Запис про подання відгуків';
$string['privacy:metadata:completed:anonymousresponse'] = 'Чи потрібно використовувати подання анонімно.';
$string['privacy:metadata:completed:timemodified'] = 'Час, коли подання було востаннє змінено.';
$string['privacy:metadata:completed:userid'] = 'Ідентифікатор користувача, який завершив дію зворотного зв’язку.';
$string['privacy:metadata:completedtmp'] = 'Запис подання, яке ще триває.';
$string['privacy:metadata:value'] = 'Запис відповіді на запитання.';
$string['privacy:metadata:value:value'] = 'Вибрана відповідь.';
$string['privacy:metadata:valuetmp'] = 'Запис відповіді на запитання в поданні, що триває.';
$string['public'] = 'Відкрито';
$string['question'] = 'Питання';
$string['questionandsubmission'] = 'Налаштування питання та відповіді';
$string['questions'] = 'Питання';
$string['questionslimited'] = 'Показано лише {$a} з перших запитань, перегляньте індивідуальні відповіді або завантажте таблицю з даними для перегляду всього.';
$string['radio'] = 'Множинний вибір - одна відповідь';
$string['radio_values'] = 'Відповіді';
$string['ready_feedbacks'] = 'Готові відгуки';
$string['required'] = 'Необхідне';
$string['resetting_data'] = 'Скидання відповідей зворотного зв\'язку';
$string['resetting_feedbacks'] = 'Скидання зворотного зв\'язку';
$string['response_nr'] = 'Номер відповіді';
$string['responses'] = 'Відповіді';
$string['responsetime'] = 'Час відповідей';
$string['save_as_new_item'] = 'Зберегти як нове питання';
$string['save_as_new_template'] = 'Зберегти як новий шаблон';
$string['save_entries'] = 'Відправити ваші відповіді';
$string['save_item'] = 'Зберегти питання';
$string['saving_failed'] = 'Збереження не вдалося';
$string['search:activity'] = 'Відгук - інформація про діяльність';
$string['search_course'] = 'Пошук курсу';
$string['searchcourses'] = 'Пошук курсів';
$string['searchcourses_help'] = 'Пошук по коду або назві курсу(ів), які ви хочете пов’язати з цим зворотним відгуком.';
$string['selected_dump'] = 'Вибрані індекси змінної $SESSION скидаються нижче:';
$string['send'] = 'Надіслати';
$string['send_message'] = 'Надіслати повідомлення';
$string['show_all'] = 'Показати все';
$string['show_analysepage_after_submit'] = 'Показати сторінку аналізу після відповіді';
$string['show_entries'] = 'Показати відповіді';
$string['show_entry'] = 'Показати відповідь';
$string['show_nonrespondents'] = 'Показати користувачів без відповіді';
$string['site_after_submit'] = 'Сайт після відповіді';
$string['sort_by_course'] = 'Сортувати за курсом';
$string['started'] = 'Почато';
$string['startedon'] = 'Розпочато {$a}';
$string['subject'] = 'Тема';
$string['switch_item_to_not_required'] = 'Встановити як непотрібний';
$string['switch_item_to_required'] = 'Встановіть як потрібно';
$string['template'] = 'Шаблон';
$string['template_deleted'] = 'Шаблон вилучено';
$string['template_saved'] = 'Шаблон збережено';
$string['templates'] = 'Шаблони';
$string['textarea'] = 'Довгий текст відповіді';
$string['textarea_height'] = 'Кількість рядків';
$string['textarea_width'] = 'Ширина';
$string['textfield'] = 'Короткий текст відповіді';
$string['textfield_maxlength'] = 'Максимальна кількість символів';
$string['textfield_size'] = 'Ширина текстового поля';
$string['there_are_no_settings_for_recaptcha'] = 'Перевірка (captcha) не налаштована';
$string['this_feedback_is_already_submitted'] = 'Ви вже пройшли цю діяльність';
$string['typemissing'] = 'Відсутнє значення "тип"';
$string['update_item'] = 'Зберегти зміни в питанні';
$string['url_for_continue'] = 'URL для кнопки-продовження';
$string['url_for_continue_help'] = 'Типово після відповіді користувача перекидає на основну сторінку курсу. Але ви можете перевизначити URL для кнопки продовження';
$string['use_one_line_for_each_value'] = 'Використовувати по одному рядку для кожної відповіді!';
$string['use_this_template'] = 'Використовувати цей шаблон';
$string['using_templates'] = 'Використовувати шаблон';
$string['vertical'] = 'Вертикально';
$string['whatfor'] = 'Що ти хочеш робити?';
