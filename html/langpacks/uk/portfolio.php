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
 * Strings for component 'portfolio', language 'uk', version '4.1'.
 *
 * @package     portfolio
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activeexport'] = 'Дозвіл активного експорту';
$string['activeportfolios'] = 'Доступні портфоліо';
$string['addalltoportfolio'] = 'Експортувати все до портфоліо';
$string['addnewportfolio'] = 'Додати нове портфоліо';
$string['addtoportfolio'] = 'Експортувати до портфоліо';
$string['alreadyalt'] = 'Вже експортовано - будь ласка, натисніть тут, щоб вирішити цю передачу';
$string['alreadyexporting'] = 'Ви вже маєте активний експорт портфоліо в цій сесії. Перш ніж продовжити, ви повинні або завершити цей експорт, або скасувати його. Хотіли б ви продовжити її? (Не скасовувати його)';
$string['availableformats'] = 'Доступні формати експорту';
$string['callbackclassinvalid'] = 'Неправильна специфікація класу Callback або він не входить в ієрархію portfolio_caller';
$string['callercouldnotpackage'] = 'Помилка пакування ваших даних для експорту: повідомлення помилки: {$a}';
$string['cannotsetvisible'] = 'Неможливо встановити видимість - модуль було повністю відключено з причини неналаштованості';
$string['commonportfoliosettings'] = 'Загальні налаштування портфоліо';
$string['commonsettingsdesc'] = '<p>Визначте рівень передачі при зміні даних як \'Помірний\' або \'Високий\', чи потрібно користувачу очікувати закінчення чи ні.</p><p>Підняття розміру до \'Помірного\' означає передачу без попереджень користувача, і \'Помірний\' і \'Високий\' означає, що пропонуються варіанти, але попереджається, що це займе деякий час.</p><p>Крім того, деякі модулі Портфоліо можуть ігнорувати цю установку і примушувати всі передачі до очікування.</p>';
$string['configexport'] = 'Налаштувати експортовані дані';
$string['configplugin'] = 'Налаштувати модуль портфоліо';
$string['configure'] = 'Налаштувати';
$string['confirmcancel'] = 'Ви впевнені, що хочете відмінити цей експорт?';
$string['confirmexport'] = 'Будь ласка, підтвердіть цей експорт';
$string['confirmsummary'] = 'Узагальнення вашого експорту';
$string['continuetoportfolio'] = 'Повернутися до портфоліо';
$string['deleteportfolio'] = 'Видалити зразок портфоліо';
$string['destination'] = 'Напрямок';
$string['disabled'] = 'Вибачте, але експорт портфоліо не дозволено на цьому сайті';
$string['disabledinstance'] = 'Відключено';
$string['displayarea'] = 'Область експорту';
$string['displayexpiry'] = 'Час закінчення передачі';
$string['displayinfo'] = 'Інформація експорту';
$string['dontwait'] = 'Не чекати';
$string['enabled'] = 'Дозволити портфоліо';
$string['enableddesc'] = 'Якщо включено, то користувачі можуть експортувати вміст, наприклад, повідомлень форуму і результати виконання завдань, до зовнішніх портфоліо або HTML сторінок.';
$string['err_uniquename'] = 'Назва портфоліо повинна бути унікальною (в межах модуля)';
$string['exportalreadyfinished'] = 'Експорт портфоліо закінчено!';
$string['exportalreadyfinisheddesc'] = 'Експорт портфоліо закінчено!';
$string['exportcomplete'] = 'Експорт портфоліо закінчено!';
$string['exportedpreviously'] = 'Попередні експорти';
$string['exportexceptionnoexporter'] = 'Portfolio_export_exception була скинута з активної сесії, але не експортером об\'єкта';
$string['exportexpired'] = 'Експорт портфоліо минув';
$string['exportexpireddesc'] = 'Ви спробували повторити операцію експорту з деякою інформацією, або створили порожній експорт. Щоб зробити це правильно, ви повинні повернутися на попереднє місце і почати все заново. Це іноді трапляється при використанні кнопки "Назад" після  завершення експорту, або через неправильну адресу в закладках.';
$string['exporting'] = 'Експортування до портфоліо';
$string['exportingcontentfrom'] = 'Експортування вмісту з {$a}';
$string['exportingcontentto'] = 'Експортування вмісту до {$a}';
$string['exportqueued'] = 'Експорт портфоліо було успішно встановлено в чергу для передачі';
$string['exportqueuedforced'] = 'Експорт портфоліо було поміщено в чергу на передачу (віддалена система має примусову чергу трансфертів)';
$string['failedtopackage'] = 'Не знайдено файлів для пакету';
$string['failedtosendpackage'] = 'Помилка надсилання ваших даних до вказаної системи портфоліо: текст помилки: {$a}';
$string['filedenied'] = 'До цього файлу доступ заборонено';
$string['filenotfound'] = 'Файл не знайдено';
$string['fileoutputnotsupported'] = 'Переписування вихідного файлу не підтримується в цьому форматі';
$string['format_document'] = 'Документ';
$string['format_file'] = 'Файл';
$string['format_image'] = 'Картинка';
$string['format_leap2a'] = 'Формат портфоліо Leap2A';
$string['format_mbkp'] = 'Формат резервної копії Moodle';
$string['format_pdf'] = 'PDF';
$string['format_plainhtml'] = 'HTML';
$string['format_presentation'] = 'Презентація';
$string['format_richhtml'] = 'HTML з долученням';
$string['format_spreadsheet'] = 'Електронна таблиця';
$string['format_text'] = 'Звичайний текст';
$string['format_video'] = 'Відео';
$string['highdbsizethreshold'] = 'Великий розмір БД';
$string['highdbsizethresholddesc'] = 'Кількість записів бази даних, при перевищенні яких час трансферу буде суттєво збільшено';
$string['highfilesizethreshold'] = 'Великий розмір файлу';
$string['highfilesizethresholddesc'] = 'Розмір файлу, при перевищенні якого час трансферу буде суттєво збільшено';
$string['insanebody'] = 'Привіт! Ви отримали це повідомлення як адміністратор {$a->sitename}.

Деякі модулі портфоліо були автоматично відключені через помилки у конфігурації. Це означає, що користувачі не можуть в даний час експортувати зміст цих портфоліо.

Список модулів портфоліо, які були відключені:

{$a->textlist}.

Помилка має бути виправлена в найкоротші терміни, ви можете це зробити відвідавши {$a->fixurl}.';
$string['insanebodyhtml'] = '<p>Привіт! Ви отримали це повідомлення як адміністратор {$a->sitename}.</p> <p> Деякі екземпляри модулів портфоліо були автоматично відключені у зв\'язку з неправильною конфігурацією. Це означає, що користувачі не можуть в даний час проводити експорт вмісту в цих портфоліо. </p><p> Список екземплярів модуля портфоліо, які були відключені: </p> {$a->htmllist} <p> Помилка має бути виправлена в найкоротші терміни, ви можете це зробити відвідавши <a href="{$a->fixurl}"> сторінку налаштування портфоліо</a></p>';
$string['insanebodysmall'] = 'Привіт! Ви отримали це повідомлення як адміністратор {$a->sitename}. Деякі модулі портфоліо були автоматично відключені через помилки у конфігурації. Це означає, що користувачі не можуть в даний час експортувати зміст цих портфоліо. Помилка має бути виправлена в найкоротші терміни, ви можете це зробити відвідавши {$a->fixurl}.';
$string['insanesubject'] = 'Деякі портфоліо автоматично відключилися';
$string['instancedeleted'] = 'Портфоліо успішно видалений';
$string['instanceismisconfigured'] = 'Портфоліо не сконфігуровано, пропущено. Виникла помилка: {$a}';
$string['instancenotdelete'] = 'Помилка видалення портфоліо';
$string['instancenotsaved'] = 'Помилка збереження портфоліо';
$string['instancesaved'] = 'Портфоліо успішно збережено';
$string['intro'] = 'Вміст, який ви створюєте, як то здані завдання, повідомлення форуму або статті блогу, можуть бути експортовані у ваше портфоліо або завантажені.<br>
Деякі сайти портфоліо, які ви не збираєтеся використовувати, можуть бути прихованими та не показуватися у списку портфоліо, до якого  можна експортувати дані.';
$string['invalidaddformat'] = 'Передано неправильний вхідний формат до portfolio_add_button. ({$a}) Повинно бути одним з PORTFOLIO_ADD_XXX';
$string['invalidbuttonproperty'] = 'Не вдалося знайти властивість ({$a}) з portfolio_button';
$string['invalidconfigproperty'] = 'Не вдалося знайти конфігурацію властивості ({$a->property} з  {$a->class})';
$string['invalidexportproperty'] = 'Не вдалося знайти експорт конфігурації властивості ({$a->property} з  {$a->class})';
$string['invalidfileareaargs'] = 'Передано неправильний набір аргументів файлу до set_file_and_format_data - повинно містити contextid, component, filearea та itemid';
$string['invalidformat'] = 'Частина експорту передана у неправильному форматі, {$a}';
$string['invalidinstance'] = 'Не вдалося знайти примірник портфоліо';
$string['invalidpreparepackagefile'] = 'Неправильний виклик prepare_package_file - повинен бути один або кілька файлів';
$string['invalidproperty'] = 'Не вдалося знайти властивість ({$a->property} з  {$a->class})';
$string['invalidsha1file'] = 'Неправильний виклик get_sha1_file - повинен бути один або кілька файлів';
$string['invalidtempid'] = 'Неправильний експорт id. Можливо він вже закінчився';
$string['invaliduserproperty'] = 'Не вдалося знайти конфігурацію властивості користувача ({$a->property} з  {$a->class})';
$string['leap2a_emptyselection'] = 'Необхідне значення не вибрано';
$string['leap2a_entryalreadyexists'] = 'Ви намагалися додати запис Leap2A з ID ({$a}), який вже існує в цьому каналі';
$string['leap2a_feedtitle'] = 'Leap2A експорт з Moodle до {$a}';
$string['leap2a_filecontent'] = 'Спроба вставлення вмісту запису leap2a до файлу, замість того, щоб використати файл субклас';
$string['leap2a_invalidentryfield'] = 'Ви пробували вставити запис поля, якого не існує, ({$a}) або ж ви не можете робити це напряму';
$string['leap2a_invalidentryid'] = 'Ви намагалися отримати доступ до запису за його кодом, якого не існує ({$a})';
$string['leap2a_missingfield'] = 'Потрібний Leap2A запис поля {$a} відсутній';
$string['leap2a_nonexistantlink'] = 'Leap2A запис ({$a->from}) намагається зв’язатися з не існуючим записом ({$a->to}) з відношення {$a->rel}';
$string['leap2a_overwritingselection'] = 'Заміна оригінального типу запису ({$a}) на обраний в make_selection';
$string['leap2a_selflink'] = 'Leap2A запис ({$a->id}) намагався зв’язати себе з {$a->rel}';
$string['logs'] = 'Передача записів подій';
$string['logsummary'] = 'Попередня успішна передача';
$string['manageportfolios'] = 'Управляти портфоліо';
$string['manageyourportfolios'] = 'Управляти власним портфоліо';
$string['mimecheckfail'] = 'Модуль портфоліо {$a->plugin} не підтримує тип {$a->mimetype}';
$string['missingcallbackarg'] = 'Відсутній аргумент {$a->arg} для класу {$a->class}';
$string['moderatedbsizethreshold'] = 'Помірний розмір БД';
$string['moderatedbsizethresholddesc'] = 'Кількість записів БД, до якої буде розглядатися прийнятна помірна кількість часу для трансферу';
$string['moderatefilesizethreshold'] = 'Помірний розмір файлу';
$string['moderatefilesizethresholddesc'] = 'Розмір файлу, до якого буде розглядатися прийнятна помірна кількість часу для трансферу';
$string['multipleinstancesdisallowed'] = 'Спроба створення іншого примірника модуля, при забороні кількох примірників ({$a})';
$string['mustsetcallbackoptions'] = 'Ви повинні встановити параметри відповідного виклику або в конструкторі portfolio_add_button або з використанням методу set_callback_options';
$string['noavailableplugins'] = 'Вибачте, але немає портфоліо для вашого експорту до';
$string['nocallbackclass'] = 'Не знайдено клас виклику використання ({$a})';
$string['nocallbackcomponent'] = 'Не вдається знайти компонент специфікації {$a}.';
$string['nocallbackfile'] = 'Дещо неправильно в модулі, з якого ви намагаєтеся зробити експорт - відсутній потрібний файл';
$string['noclassbeforeformats'] = 'Ви повинні встановити клас зворотного виклику перед викликом set_formats в portfolio_button';
$string['nocommonformats'] = 'Немає спільних форматів між наявними модулями портфоліо та викликаним місцем {$a->location} (викликає підтримку {$a->formats})';
$string['noinstanceyet'] = 'Ще не вибрано';
$string['nologs'] = 'Немає записів про події для показу!';
$string['nomultipleexports'] = 'Вибачте, але портфоліо призначене ({$a->plugin}) не підтримує кілька експортів одночасно. Будь ласка, <a href="{$a->link}">закінчіть спочатку попередній</a> а потім спробуєте знову.';
$string['nonprimative'] = 'Без елементарного значення був прийнятий як зворотній виклик аргумент portfolio_add_button. Відмовлено у продовженні. Ключ був {$a->key} і значення було {$a->value}';
$string['nopermissions'] = 'Вибачте, але у вас немає необхідних дозволів для експорту файлів з цієї області';
$string['notexportable'] = 'Вибачте, але тип вмісту, який ви намагаєтеся експортувати, не експортується';
$string['notimplemented'] = 'Вибачте, але ви намагаєтеся експортувати вміст в деякий формат, який ще не реалізовано ({$a})';
$string['notyetselected'] = 'Ще не вибрано';
$string['notyours'] = 'Ви намагаєтеся відновити експорт портфоліо, що не належить вам!';
$string['nouploaddirectory'] = 'Не вдалося створити тимчасовий каталог для пакетів даних';
$string['off'] = 'Дозволено але сховано';
$string['on'] = 'Дозволено та доступно';
$string['plugin'] = 'Модуль портфоліо';
$string['plugincouldnotpackage'] = 'Помилка пакування ваших даних до експорту: {$a}';
$string['pluginismisconfigured'] = 'Модуль портфоліо не налаштовано, пропущено. Помилка: {$a}';
$string['portfolio'] = 'Портфоліо';
$string['portfolios'] = 'Портфоліо';
$string['privacy:metadata'] = 'Підсистема портфоліо діє як канал, передаючи запити від плагінів до різних плагінів портфоліо.';
$string['privacy:metadata:instance'] = 'Ідентифікатор портфоліо';
$string['privacy:metadata:instancesummary'] = 'Зберігає дані про екземпляри портфеля та вподобання.';
$string['privacy:metadata:name'] = 'Назва переваги';
$string['privacy:metadata:portfolio_log'] = 'Журнал переказів портфеля (використовується для подальшої перевірки на наявність дублікатів)';
$string['privacy:metadata:portfolio_log:caller_class'] = 'Назва класу, використаного для створення передачі';
$string['privacy:metadata:portfolio_log:caller_component'] = 'Ім\'я компонента, відповідального за експорт';
$string['privacy:metadata:portfolio_log:time'] = 'Час передачі (у випадку передачі в черзі це час фактичного виконання передачі, а не момент, коли користувач його розпочав)';
$string['privacy:metadata:portfolio_log:userid'] = 'Ідентифікатор користувача, який експортував вміст';
$string['privacy:metadata:portfolio_tempdata'] = 'Зберігає тимчасові дані для експорту портфеля.';
$string['privacy:metadata:portfolio_tempdata:data'] = 'Експортувати дані';
$string['privacy:metadata:portfolio_tempdata:expirytime'] = 'Час дії цього запису закінчиться';
$string['privacy:metadata:portfolio_tempdata:instance'] = 'Використовується примірник плагіна Portfolio';
$string['privacy:metadata:portfolio_tempdata:userid'] = 'Користувач виконує експорт';
$string['privacy:metadata:userid'] = 'Ідентифікатор користувача';
$string['privacy:metadata:value'] = 'Співвідношення для переваги';
$string['privacy:path'] = 'Примірники портфоліо';
$string['queuesummary'] = 'В даний час у черзі трансферу';
$string['returntowhereyouwere'] = 'Повернутися туди, де ви були';
$string['save'] = 'Зберегти';
$string['selectedformat'] = 'Вибраний формат експорту';
$string['selectedwait'] = 'Обрано зачекати?';
$string['selectplugin'] = 'Виберіть пункт призначення';
$string['showhide'] = 'Показати/Приховати';
$string['singleinstancenomultiallowed'] = 'Наразі доступний тільки один модуль портфоліо, який не підтримує кілька експортів за одну сесію. Вже є активний експорт в цій сесії, який використовує цей модуль!';
$string['somepluginsdisabled'] = 'Деякі модулі портфоліо були відключені через неправильне налаштування або інше';
$string['sure'] = 'Ви впевнені, що хочете видалити \'{$a}\'? Повернути буде неможливо.';
$string['thirdpartyexception'] = 'Стороннє виключення було отримано під час експорту портфоліо ({$a}). Перервіться та спробуйте знову, але помилка повинна бути виправлена.';
$string['transfertime'] = 'Час передачі';
$string['unknownplugin'] = 'Невідомо (можливо, було видалено адміністратором)';
$string['wait'] = 'Зачекайте';
$string['wanttowait_high'] = 'Не рекомендується вам очікувати на закінчення цього трансферу, однак ви можете продовжувати, якщо ви впевнені, що робите';
$string['wanttowait_moderate'] = 'Ви хочете зачекати на цей трансфер? Це може зайняти кілька хвилин';
