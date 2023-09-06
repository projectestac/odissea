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
 * Strings for component 'tool_brickfield', language 'ru', version '4.1'.
 *
 * @package     tool_brickfield
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessibility'] = 'Общедоступность';
$string['accessibilitydisabled'] = 'Инструментарий общедоступности Brickfield не включен на этом сайте. Для включения обратитесь к администратору своего сайта.';
$string['accessibilityreport'] = 'Инструментарий общедоступности';
$string['accessibilitytool'] = 'Инструмент общедоступности Brickfield';
$string['accessibilitytools'] = 'Инструменты общедоступности Brickfield';
$string['activate'] = 'Активировать';
$string['activated'] = 'Плагин активирован и готов к использованию.';
$string['activationform'] = 'Регистрация Brickfield';
$string['activationheader'] = 'Активация Brickfield';
$string['activationinfo'] = '<p> Чтобы использовать этот плагин, вы должны представить в этой форме действительные ключи для этого сайта. </p> <p> Пожалуйста, <a href="{$a}" data-action="send_info" target="_blank">зарегистрируйтесь на портале Brickfield (открывается в новом окне)</a>, чтобы получить эти ключи, если у вас их еще нет. </p> <p> После активации ваши ключи будут проверены с помощью запланированных задач cron. </p>';
$string['activityresults:pluginname'] = 'Отчет инструмента общедоступности с разбивкой по активным элементам';
$string['activityresults:toolname'] = 'Сводка по активным элементам';
$string['activityresults:toolshortname'] = 'Разбивка по активным элементам';
$string['advanced:pluginname'] = 'Расширенный отчет общедоступности';
$string['advanced:toolname'] = 'Расширенная сводка';
$string['advanced:toolshortname'] = 'Расширенный';
$string['allcourses'] = 'Все проверенные курсы ({$a})';
$string['allcoursescat'] = 'Все просмотренные курсы для категории {$a->catname} ({$a->count})';
$string['analysis:byrequest'] = 'По запросу';
$string['analysis:disabled'] = 'Отключено';
$string['analysistype'] = 'Разрешить запросы на анализ';
$string['analysistype_desc'] = 'Разрешить запрос на анализ общедоступности контента';
$string['analysistypedisabled'] = 'Анализ контента отключен';
$string['bannercontentone'] = 'В Enterprise Accessibility Toolkit есть полный набор функций, которые помогут вашей организации улучшить общедоступность ваших курсов. <a href="{$a}"> Обратитесь в Brickfield Education Labs </a>, чтобы заказать бесплатную демонстрацию расширенных функций.';
$string['bannercontenttwo'] = 'Создайте эффективную и общедоступную платформу для преподавания и обучения. Найдите контент, который не соответствует рекомендациям, исправьте проблемы и обеспечьте  в будущем безопасность своего контента курса Moodle с помощью доступных файлов, редактора и расширенных функций.';
$string['bannerheadingone'] = 'Обновление до Enterprise Accessibility Toolkit';
$string['batch'] = 'Предел пакета проверок';
$string['brickfield'] = 'Инструментарий Brickfield';
$string['brickfield:viewcoursetools'] = 'Просматривать отчеты по курсам';
$string['brickfield:viewsystemtools'] = 'Видеть отчеты по всем курсам';
$string['bulkprocesscaches'] = 'Процесс массового кэширования';
$string['bulkprocesscourses'] = 'Проверка массовой общедоступности';
$string['buttonone'] = 'Получить бесплатную демонстрацию';
$string['cachepending'] = 'Сбор сводных данных';
$string['checkdesc:alinksdontopennewwindow'] = 'Нужно заранее предупреждать пользователей о ссылках, открывающихся в новом окне,';
$string['checkdesc:amustcontaintext'] = 'Чтобы быть осознаваемой, ссылка должна содержать текст.';
$string['checkdesc:areadontopennewwindow'] = 'Нужно заранее предупреждать пользователей о ссылках из областей изображений, открывающихся в новом окне.';
$string['checkdesc:areahasaltvalue'] = 'Области изображений, должны иметь альтернативный текст, аналогичный альтернативным текстам изображений.';
$string['checkdesc:asuspiciouslinktext'] = 'Текст ссылки должен быть описательным и содержать контекст о ее назначении.';
$string['checkdesc:basefontisnotused'] = 'Элементы Basefont (традиционно используемые для форматирования) недоступны и не должны использоваться.';
$string['checkdesc:blinkisnotused'] = 'Мигающие элементы, которые мигают и гаснут, недоступны и не должны использоваться.';
$string['checkdesc:boldisnotused'] = 'Жирный шрифт (b) использовать не следует. Вместо этого следует использовать «strong».';
$string['checkdesc:contenttoolong'] = 'Общая длина содержимого страницы не должна превышать 500 слов.';
$string['checkdesc:csstexthascontrast'] = 'Цветовой контраст между текстом и фоном слишком низкий.';
$string['checkdesc:embedhasassociatednoembed'] = 'В элементах Embed (для встраивания мультимедиа) не должны отсутствовать соответствующие им элементы noembed.';
$string['checkdesc:headerh3'] = 'Заголовки, следующие после заголовков H3 (параметр большого заголовка редактора), не должны нарушать иерархию заголовков страницы.';
$string['checkdesc:headershavetext'] = 'Чтобы заголовок был осознаваемым, он должен содержать текст.';
$string['checkdesc:iisnotused'] = 'Курсив (i) использовать не следует. Вместо этого следует использовать «em».';
$string['checkdesc:imgaltisdifferent'] = 'Альтернативный текст изображения не должен совпадать с именем файла изображения.';
$string['checkdesc:imgaltistoolong'] = 'Альтернативный текст изображения не должен превышать 125 символов.';
$string['checkdesc:imgaltnotemptyinanchor'] = 'Альтернативный текст изображения  не должен быть пустым, особенно если у изображения есть область со ссылкой, ведущей в другое место.';
$string['checkdesc:imgaltnotplaceholder'] = 'Альтернативный текст изображения не должен быть неинформативным текстом-заполнителем, таким как «изображение».';
$string['checkdesc:imghasalt'] = 'Альтернативный текст изображения не должен отсутствовать для изображений, если только они  не являются чисто декоративными и не имеют конкретного значения.';
$string['checkdesc:imgwithmaphasusemap'] = 'Изображения с интерактивными областями должны соответствовать элементам «usemap» и «map».';
$string['checkdesc:legendtextnotempty'] = 'Элементы Legend, используемые для обозначения элементов fieldset, должны содержать текст.';
$string['checkdesc:marqueeisnotused'] = 'Элементы Marquee (автоматическая прокрутка) недоступны и не должны использоваться.';
$string['checkdesc:noheadings'] = 'Отсутствие заголовков делает контент менее структурированным и трудным для чтения.';
$string['checkdesc:objectmusthaveembed'] = 'В элементах Object (для встраивания внешних ресурсов) не должны отсутствовать соответствующие им элементы «embed».';
$string['checkdesc:objectmusthavetitle'] = 'В элементах Object (для встраивания внешних ресурсов) не должно отсутствовать соответствующее им описание «title».';
$string['checkdesc:objectmusthavevalidtitle'] = 'Элементы Object (для встраивания внешних ресурсов) должны иметь соответствующие атрибуты «titles» с текстом.';
$string['checkdesc:strikeisnotused'] = 'Не следует использовать элементы «Strike» (зачеркнуто). Вместо этого следует использовать «del» (удалено).';
$string['checkdesc:tabledatashouldhaveth'] = 'В идеале в таблицах должны присутствовать заголовки.';
$string['checkdesc:tablesummarydoesnotduplicatecaption'] = 'Сводка и заголовки таблиц не должны совпадать.';
$string['checkdesc:tabletdshouldnotmerge'] = 'Таблицы в идеале не должны иметь объединенных ячеек.';
$string['checkdesc:tablethshouldhavescope'] = 'Должны быть обозначены границы строки или столбца таблицы (используемые для сопоставления строки и столбца с каждой ячейкой).';
$string['checkidvalidation'] = 'Задача проверки наличия любых недействительных контрольных идентификаторов';
$string['checkscompleted'] = 'Проверки завершены: {$a}';
$string['checktype'] = 'Проверка группы';
$string['checktype:form'] = 'Форма';
$string['checktype:image'] = 'Изображение';
$string['checktype:layout'] = 'Макет';
$string['checktype:link'] = 'Ссылка';
$string['checktype:media'] = 'Медиа';
$string['checktype:table'] = 'Таблица';
$string['checktype:text'] = 'Текст';
$string['checktyperesults:pluginname'] = 'Отчет общедоступности типов контента';
$string['checktyperesults:toolname'] = 'Сводка типов контента';
$string['checktyperesults:toolshortname'] = 'Типы контента';
$string['cmpercent'] = 'Общий процент активных элементов';
$string['cmpercenterrors'] = 'Общий процент ошибок';
$string['cmpercenttitle'] = 'Общий % ошибок в сравнении с разбивкой по активным элементам';
$string['confirmationmessage'] = 'Этот курс запланирован для анализа. Анализ будет завершен не ранее {$a}. После этого проверьте еще раз.';
$string['contactadmin'] = 'Свяжитесь со своим администратором, чтобы завершить регистрацию.';
$string['contactus'] = 'Свяжитесь с нами';
$string['contentfive'] = 'Автоматически исправлять устаревшие теги HTML.';
$string['contentfour'] = 'Определите, какие элементы вызывают больше всего проблем с общедоступностью, чтобы расставить приоритеты.';
$string['contentone'] = 'Автоматически оценивайте ресурсы и активные элементы курса на предмет общедоступности.';
$string['contentsix'] = 'Своевременно давайте преподавателям советы по созданию более подходящего контента.';
$string['contentthree'] = 'Предоставьте своим студентам контент в доступных форматах, включая аудио, электронные книги в формате ePub и электронный шрифт Брайля.';
$string['contenttwo'] = 'Массовое обновление нечеткого или отсутствующего текста для веб-ссылок, описаний изображений и субтитров к видео.';
$string['contenttypeerrors'] = 'Общие результаты проверок активности контента по курсу и типу контента.';
$string['contentyperesults'] = 'Всего «пройдено/не пройдено» для типов контента по курсу.';
$string['contextid'] = 'ID контекста';
$string['core_course'] = 'Курс';
$string['core_question'] = 'Банки вопросов';
$string['count'] = 'Количество';
$string['country'] = 'Страна';
$string['country_help'] = 'Страна сайта';
$string['coursecount'] = 'Количество курсов';
$string['deletehistoricaldata'] = 'Удалить результаты предыдущих проверок';
$string['dependency'] = 'Зависит от';
$string['emptycategory'] = 'В категории {$a} курсы не найдены';
$string['emptytagcourses'] = 'В курсах с настроенными тегами результаты не найдены';
$string['enableaccessibilitytools'] = 'Разрешить использовать инструменты общедоступности';
$string['enableaccessibilitytools_desc'] = 'Инструментарий общедоступности помогает выявлять проблемы с общедоступностью в курсах.';
$string['error:nocoursespecified'] = 'Для этого сводного отчета требуется действительный ID курса. Получите доступ к инструментарию общедоступности из курса.';
$string['errors'] = 'Ошибки: {$a}';
$string['errors:pluginname'] = 'Список ошибок инструмента общедоступности';
$string['errors:toolname'] = 'Сводка списка ошибок';
$string['errors:toolshortname'] = 'Список ошибок';
$string['eventanalysis_requested'] = 'Запрошен анализ контента';
$string['eventanalysis_requesteddesc'] = 'Был запрошен анализ контента для курса {$a}.';
$string['eventreport_downloaded'] = 'Сводка общедоступности скачана';
$string['eventreport_downloadeddesc'] = 'Сводка общедоступности была загружена для курса с ID {$a}.';
$string['eventreport_viewed'] = 'Отчет общедоступности просмотрен';
$string['eventreport_vieweddesc'] = 'Отчет общедоступности просмотрен для курса с ID {$a->course}, ID категории {$a->category}, вкладка {$a->tab}.';
$string['failed'] = 'Безуспешно';
$string['failedcount'] = 'Безуспешно: {$a}';
$string['footerheading'] = 'Нижний колонтитул';
$string['fullcachedone'] = 'Отключить перезапуск кэширования';
$string['hashcorrect'] = 'Введенный код правильный.';
$string['hashincorrect'] = 'Введенный код неверен.';
$string['headingfive'] = 'Исправления HTML';
$string['headingone'] = 'Оценить контент';
$string['headingsix'] = 'Поддержка производительности';
$string['headingthree'] = 'Доступные форматы файлов';
$string['headingtwo'] = 'Исправление';
$string['hideshow'] = 'Скрыть/показать';
$string['icon:analytics-custom'] = 'Значок аналитики';
$string['icon:file-edit-custom'] = 'Значок редактирования файла';
$string['icon:hands-helping-custom'] = 'Значок руки помощи';
$string['icon:search-plus-custom'] = 'Значок поиска';
$string['icon:tools-custom'] = 'Значок инструментов';
$string['icon:wand-magic-custom'] = 'Значок волшебной палочки';
$string['inactive'] = 'Плагин неактивен и не может использоваться. Введите действующие регистрационные ключи и нажмите «Активировать».';
$string['innercontextid'] = 'Внутренний контекст';
$string['installed'] = 'Плагин установлен';
$string['installedcli'] = 'Плагин устанавливается из командной строки';
$string['installeddescription'] = 'Плагин установлен, перенаправляем на форму активации.';
$string['invalidaccessibilitytool'] = 'Запрошен недопустимый плагин общедоступности.';
$string['invalidcategoryid'] = 'Неверная категория. Проверьте введенные вами данные';
$string['invalidcourseid'] = 'Неверный курс. Проверьте введенные вами данные';
$string['language'] = 'Язык';
$string['language_help'] = 'Язык сайта';
$string['mobileservice'] = 'Включены мобильные службы ({$a})';
$string['module'] = 'Модуль';
$string['modulename'] = 'Название';
$string['moreinfo'] = 'Больше информации';
$string['noerrorsfound'] = 'По вашим параметрам поиска не обнаружено ошибок общедоступности. Примите поздравления!';
$string['norecords'] = 'По вашим параметрам поиска не найдено ни одной подходящей записи.';
$string['notregistered'] = 'Ваш инструментарий общедоступности должен быть зарегистрирован.';
$string['notvalidated'] = 'Ваш инструментарий общедоступности работает и во время проверки.';
$string['numcourses'] = 'Количество курсов ({$a})';
$string['numfactivities'] = 'Количество активных элементов ({$a})';
$string['numfiles'] = 'Количество файлов ({$a})';
$string['numinstances'] = 'Количество экземпляров';
$string['numusers'] = 'Количество пользователей ({$a})';
$string['pagedesc:checktype'] = '<p>Для обобщения и анализа результатов различных проведенных проверок последние группируются по различным типам контента. Например, все результаты проверки общедоступности, связанные с изображениями, находятся в группе типов контента «Изображение», все результаты проверки общедоступности, связанные с макетом, находятся в группе типов контента «Макет» и так далее. </p> <p> В элементы, относящиеся к самим курсам, включены активные элементы, ресурсы или области контента. </p> <p> На странице диаграммы типов содержимого отображается разбивка ошибок по группам типов содержимого: изображение, макет, ссылка, мультимедиа, таблица и текст. </ p>';
$string['pagedesc:pertarget'] = '<p> Для обобщения и анализа результатов проведенных проверок по каждому активному элементу, мы группируем  результаты проверки по различным обнаруженным элементам. </p> <p> В элементы, относящиеся к самим курсам, включаются активные элементы, ресурсы или другие области контента. Каждый элемент без обнаруженных ошибок считается пройденным, каждый элемент с одной или несколькими обнаруженными ошибками считается неудачным. В таком случае отображается соотношение пройденных и неудачных элементов. </p> <p> На странице с диаграммой распределения  отображается соотношение пройденных и неудачных проверок в целом и по каждому отдельному элементу, такому как задание, курс, пояснение и т.д. </p>';
$string['pagedesctitle:checktype'] = 'Объяснение типов контента';
$string['pagedesctitle:pertarget'] = 'Объяснение распределения активных элементов';
$string['passed'] = 'Пройдено';
$string['passedcount'] = 'Пройдено: {$a}';
$string['passrate'] = 'Процент пройденных: {$a}%';
$string['pdf:filename'] = 'Brickfield_Summaryreport_CourseID-{$a}';
$string['percheckerrors'] = 'Количество проверок и ошибок на проверку в курсе.';
$string['perpage'] = 'Элементов на странице';
$string['pluginname'] = 'Инструментарий общедоступности';
$string['printable:downloadpdf'] = 'Скачивать PDF';
$string['printable:pluginname'] = 'Сводный отчет проверки общедоступности';
$string['printable:printreport'] = 'Отчет для печати';
$string['printable:toolname'] = 'Сводный отчет';
$string['printable:toolshortname'] = 'Сводный отчет';
$string['privacy:metadata'] = 'Плагин отчета о проверках общедоступности не хранит никаких личных данных.';
$string['processanalysisrequests'] = 'Обработка запросов на анализ контента';
$string['registernow'] = 'Зарегистрируйтесь сейчас.';
$string['registration'] = 'Форма регистрации';
$string['registrationinfo'] = '<p> Эта регистрация позволит вам использовать стартовую версию инструментария Brickfield для обеспечения общедоступности вашего зарегистрированного сайта Moodle. </p> <p> Его использование регулируется <a href="{$a}" target="_ blank"> Условиями использования Brickfield Education Labs (открывается в новом окне) </a>, с которыми вы соглашаетесь, используя этот продукт. </p>';
$string['release'] = 'Релиз Moodle ({$a})';
$string['remaining'] = '(осталось ошибок: {$a})';
$string['response:0'] = 'Этот URL-адрес никуда не указывает';
$string['response:404'] = 'Страница с этим URL-адресом не найдена';
$string['schedule:blocknotscheduled'] = '<p> Для этого курса еще не запланирован анализ для выявления распространенных проблем с общедоступностью. </p>';
$string['schedule:notscheduled'] = '<p> Для этого курса еще не запланирован анализ для выявления распространенных проблем с общедоступностью. </p> <p> Нажимая кнопку «Отправить для анализа», вы подтверждаете, что весь соответствующий HTML-контент вашего курса, например: описания разделов курса, описания занятий, вопросы, страницы и т.д. необходимо запланировать для анализа. </p>
<p> В ходе этого анализа будет проведено несколько общих проверок общедоступности HTML-контента вашего курса, и эти результаты будут затем отображаться в отчетах о доступности страниц. Анализ будет обрабатываться в фоновом режиме по запланированным задачам, поэтому скорость его завершения будет зависеть от времени выполнения задач и расписания выполнения задач. </p>';
$string['schedule:requestanalysis'] = 'Отправить для анализа';
$string['schedule:scheduled'] = 'Этот курс запланирован для анализа.';
$string['schedule:sitenotscheduled'] = '<p> Глобальный (не зависящий от курса) контент еще не запланирован для анализа с целью выявления всеобъемлющих проблем общедоступности. </p>
<p> Нажимая кнопку «Отправить для анализа», вы подтверждаете, что хотите, чтобы весь соответствующий глобальный (не зависящий от курса) контент был запланирован для анализа. </p>
<p> В ходе этого анализа будет проведено несколько общих проверок общедоступности этого контента, и эти результаты затем будут отображаться на страницах отчетов инструментария специальных возможностей. Анализ будет обрабатываться в фоновом режиме по запланированным задачам, поэтому скорость его выполнения будет зависеть от времени выполнения задач и расписания выполнения задач. </p>';
$string['schedule:sitescheduled'] = 'Глобальный (не зависящий от курса) контент запланирован для анализа.';
$string['secretkey'] = 'API-ключ';
$string['secretkey_help'] = 'Этот код вы получите по электронной почте после регистрации.';
$string['sendfollowinginfo'] = '<p> Следующая информация будет периодически отправляться только в целях общей статистики. Она не будет размещена в основном перечне. </p> {$a}';
$string['settings'] = 'Настройки инструментария общедоступности';
$string['sitehash'] = 'Секретный ключ';
$string['sitehash_help'] = 'Этот код вы получите по электронной почте после регистрации.';
$string['taberrors'] = 'Проверить ошибки';
$string['targetavetitle'] = 'Среднее количество ошибок для элемента';
$string['targetpercentage'] = 'Процент пройденных/неудачных проверок для элемента';
$string['targetratio'] = 'Коэффициент прохождения элемента';
$string['tblcheck'] = 'Проверка';
$string['tblcheckexample'] = 'Пример';
$string['tblcheckfailed'] = 'Неудачные проверки';
$string['tblchecksummary'] = 'Сводка';
$string['tbledit'] = 'Редактировать';
$string['tblerrorcount'] = 'Ошибки';
$string['tblhtmlcode'] = 'Имеющийся HTML-код';
$string['tblline'] = 'Строк';
$string['tbloverallpercentage'] = 'Ошибок в целом, %';
$string['tblpercentage'] = 'Процент';
$string['tblpreview'] = 'Предпросмотр';
$string['tbltarget'] = 'Активный элемент';
$string['tblupdateto'] = 'Обновить до';
$string['titleactivityresultsall'] = 'Результаты по элементам: все просмотренные курсы (курсов - {$a->count})';
$string['titleactivityresultspartial'] = 'Результаты по элементам: курс {$a->name}';
$string['titleall'] = 'Сведения об ошибках - всего проверено курсов: ({$a->count})';
$string['titlechecktyperesultsall'] = 'Результаты по типу контента - всего проверено курсов: ({$a->count})';
$string['titlechecktyperesultspartial'] = 'Результаты по типу контента: курс {$a->name}';
$string['titleerrorsall'] = 'Сведения об ошибках - всего проверено курсов: ({$a->count})';
$string['titleerrorscount'] = 'Сведения об ошибках: (показано первых ошибок: {$a})';
$string['titleerrorspartial'] = 'Сведения об ошибках: курс {$a->name}';
$string['titlepartial'] = 'Сведения об ошибках: курс {$a->name}';
$string['titleprintableall'] = 'Курс {$a->name}';
$string['titleprintablepartial'] = 'Курс {$a->name}';
$string['tools'] = 'Отчеты';
$string['toperrors'] = 'Частые ошибки';
$string['toptargets'] = 'Элементы с ошибками';
$string['totalactivities'] = 'Всего элементов';
$string['totalactivitiescount'] = 'Всего элементов: {$a}';
$string['totalareas'] = 'Всего областей';
$string['totalerrors'] = 'Всего ошибок';
$string['totalgrouperrors'] = 'Всего (суммарно) ошибок по типу контента';
$string['updatesummarydata'] = 'Обновить сводные данные сайта';
$string['usersmobileregistered'] = 'Количество пользователей с зарегистрированными мобильными устройствами ({$a})';
$string['validationerror'] = 'Проверка регистрационного ключа не удалась. Убедитесь, что URL-адрес вашего регистрационного сайта и ключи указаны правильно.';
$string['warningcheckidbody'] = 'Возникла проблема с проверкой Brickfield, которая активна, но не указана в базе данных. Найдите причину.';
$string['warningcheckidsubject'] = 'Предупреждение проверки Brickfield';
