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
 * Strings for component 'scorm', language 'ru', version '3.11'.
 *
 * @package     scorm
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activation'] = 'Активация';
$string['activityloading'] = 'Вы будете автоматически перенаправлены на элемент курса в';
$string['activityoverview'] = 'Есть пакеты SCORM, которые требуют Вашего внимания';
$string['activitypleasewait'] = 'Загружается элемент курса, пожалуйста, подождите...';
$string['adminsettings'] = 'Настройки администратора';
$string['advanced'] = 'Параметры';
$string['aicchacpkeepsessiondata'] = 'Хранить данные о сессии AICC HACP';
$string['aicchacpkeepsessiondata_desc'] = 'Продолжительность времени (в днях) хранения данных о сессии внешней AICC HACP  (большая длительность дополнит таблицу со старыми данными, но может быть полезна при отладке)';
$string['aicchacptimeout'] = 'Тайм-аут AICC HACP';
$string['aicchacptimeout_desc'] = 'Период времени в минутах, когда сессия внешнего AICC HACP может оставаться открытой';
$string['aiccuserid'] = 'Передавать в AICC числовой ID пользователя';
$string['aiccuserid_desc'] = 'Стандарт AICC для имен пользователей очень жесткий по сравнению с Moodle и допускает только цифры, буквы, дефис и подчеркивание. Точки, пробелы и символ @ не допускаются. Если параметр включен, в пакет AICC передаются числовые ID пользователей вместо их имен.';
$string['aliasonly'] = 'При выборе из репозитория файла imsmanifest.xml необходимо использовать псевдоним(алиас)/ярлык этого файла.';
$string['allowapidebug'] = 'Активировать отладку и трассировку API  (устанавливается захват маски с apidebugmask)';
$string['allowtypeaicchacp'] = 'Включить внешний AICC HACP';
$string['allowtypeaicchacp_desc'] = 'Включенный параметр позволяет связь с внешним AICC HACP, не требуя входа пользователя в систему для post-запросов из внешнего пакета AICC';
$string['allowtypeexternal'] = 'Разрешить внешний тип пакета';
$string['allowtypeexternalaicc'] = 'Разрешить прямой URL-адрес AICC';
$string['allowtypeexternalaicc_desc'] = 'Включенный параметр позволяет использовать прямой URL-адрес к простому пакету AICC';
$string['allowtypelocalsync'] = 'Разрешить загруженный тип пакета';
$string['apidebugmask'] = 'Отладка API с захватом маски - используйте простое регулярное выражение  <username>:<activityname>. Например: admin:.* отладка возможна только для пользователя-администратора.';
$string['areacontent'] = 'Файлы содержимого';
$string['areapackage'] = 'Файл пакета';
$string['asset'] = 'Элемент';
$string['assetlaunched'] = 'Элемент - Просмотрен';
$string['attempt'] = 'Попытка';
$string['attempt1'] = '1 попытка';
$string['attempts'] = 'Попытки';
$string['attemptsmanagement'] = 'Управление попытками';
$string['attemptstatusall'] = 'На странице «Личный кабинет» и странице предпросмотра SCORM';
$string['attemptstatusentry'] = 'Только на странице предпросмотра SCORM';
$string['attemptstatusmy'] = 'Только на странице «Личный кабинет»';
$string['attemptsx'] = '{$a} попыток';
$string['attr_error'] = 'Плохое значение атрибута ({$a->attr}) в теге {$a->tag}.';
$string['autocommit'] = 'Автоматическое завершение попытки';
$string['autocommit_help'] = 'При включенном параметре данные SCORM автоматически сохраняются в базе данных. Полезно для тех объектов SCORM, которые не регулярно сохраняют свои данные.';
$string['autocommitdesc'] = 'Автоматическое сохранение данных SCORM, если пакет SCORM не сохранил их.';
$string['autocontinue'] = 'Автопродолжение';
$string['autocontinue_help'] = 'Если параметр включен, то последующие учебные объекты будут запускаться автоматически, в противном случае потребуется нажимать кнопку «Продолжить».';
$string['autocontinuedesc'] = 'При включенном параметре последующие учебные объекты запускаются автоматически, в противном случае нужно нажимать на кнопку Продолжить.';
$string['averageattempt'] = 'Среднее попыток';
$string['badarchive'] = 'Вы должны предоставить действительный zip-файл';
$string['badimsmanifestlocation'] = 'Файл msmanifest.xml был найден, но не в корневом каталоге Вашего zip-архива. Повторно заархивируйте свой SCORM.';
$string['badmanifest'] = 'Какие-то ошибки манифеста: см. журнала ошибок';
$string['browse'] = 'Предпросмотр';
$string['browsed'] = 'Найден';
$string['browsemode'] = 'Режим предпросмотра';
$string['browserepository'] = 'Посмотреть  репозиторий';
$string['calculatedweight'] = 'Расчетный вес';
$string['calendarend'] = '«{$a}» закрывается';
$string['calendarstart'] = '«{$a}» открывается';
$string['cannotaccess'] = 'Вы не можете вызывать этот скрипт таким образом';
$string['cannotfindsco'] = 'Не удалось найти SCO (Shareable Content Object - Разделяемый объект содержимого)';
$string['chooseapacket'] = 'Выберите или модернизируйте SCORM пакет';
$string['closebeforeopen'] = 'Вы указали дату закрытия до даты открытия.';
$string['collapsetocwinsize'] = 'Свернуть оглавление, если размер окна меньше';
$string['collapsetocwinsizedesc'] = 'Этот параметр позволяет указать размер окна, при меньшем размере которого оглавление должно автоматически сворачиваться.';
$string['compatibilitysettings'] = 'Параметры совместимости';
$string['completed'] = 'Завершено';
$string['completiondetail:allscos'] = 'Выполнять все части этого активного элемента';
$string['completiondetail:completionscore'] = 'Получить оценку не менее {$a}';
$string['completiondetail:completionstatuscompleted'] = 'Завершить задание';
$string['completiondetail:completionstatuscompletedandpassed'] = 'Завершить и пройти задание';
$string['completiondetail:completionstatuspassed'] = 'Пройти задание';
$string['completionscorerequired'] = 'Необходимо набрать требуемый минимум баллов';
$string['completionscorerequired_help'] = 'При включении этого параметра для того, чтобы активный элемент курса типа SCORM считался выполненным, пользователь должен будет набрать по меньшей мере указанное минимальное количество баллов, а также выполнить все другие требования выполнения этого элемента курса.';
$string['completionscorerequireddesc'] = 'Для завершения требуется минимальный балл {$a}';
$string['completionstatus_completed'] = 'Завершено';
$string['completionstatus_passed'] = 'Пройдено';
$string['completionstatusallscos_help'] = 'Некоторые пакеты SCORM содержат несколько компонентов или «scos» - при разрешенном параметре все компоненты в пакете должны возвращать соответствующее состояние урока (lesson_status) для завершения этой операции.';
$string['completionstatusrequired'] = 'Требуется достичь состояния';
$string['completionstatusrequired_help'] = 'Пользователь должен проверить одно или несколько состояний  и достичь по меньшей мере одного из них, чтобы отметить этот SCORM выполненным, а также выполнить любые другие требования выполнения этого элемента курса.';
$string['completionstatusrequireddesc'] = 'Студент должен достичь хотя бы одного из следующих статусов: {$a}';
$string['confirmloosetracks'] = 'ВНИМАНИЕ: Вероятно, пакет был изменен. Если структура пакета изменилась, то некоторые попытки пользователей дорожек могли быть потеряны при обновлении.';
$string['contents'] = 'Содержание';
$string['coursepacket'] = 'Пакет курса';
$string['coursestruct'] = 'Структура курса';
$string['crontask'] = 'Фоновая обработка для SCORM';
$string['currentwindow'] = 'В текущем окне
';
$string['datadir'] = 'Ошибка файловой системы: Невозможно создать директорию для хранения данных курса';
$string['defaultdisplaysettings'] = 'Параметры отображения по умолчанию';
$string['defaultgradesettings'] = 'Настройки оценок по умолчанию';
$string['defaultothersettings'] = 'Остальные параметры по умолчанию';
$string['deleteallattempts'] = 'Удалить все попытки';
$string['deleteattemptcheck'] = 'Вы абсолютно уверены, что хотите полностью удалить эти попытки?';
$string['deleteselected'] = 'Удалить выбранные попытки';
$string['deleteuserattemptcheck'] = 'Вы абсолютно уверены, что хотите полностью удалить все свои попытки?';
$string['details'] = 'Подробный отчет';
$string['directories'] = 'Отображать панель ссылок';
$string['disabled'] = 'Выключить';
$string['display'] = 'Отображать контент';
$string['displayactivityname'] = 'Отображать название элемента курса.';
$string['displayactivityname_help'] = 'Отображать или нет имя элемента курса над плеером SCORM.';
$string['displayattemptstatus'] = 'Отображать состояние попытки';
$string['displayattemptstatus_help'] = 'Эта настройка позволяет показывать итог попыток пользователя в блоке «Сводка по курсам» на странице «Личный кабинет» и/или на странице SCORM.';
$string['displayattemptstatusdesc'] = 'Показывать итог попыток пользователя в блоке «Сводка по курсам» на странице «Личный кабинет» и/или на странице SCORM.';
$string['displaycoursestructure'] = 'Отображать структуру курса на главной странице';
$string['displaycoursestructure_help'] = 'При включенном параметре оглавление отображается на странице структуры SCORM.';
$string['displaycoursestructuredesc'] = 'При включенном параметре на странице SCORM  отображается оглавление.';
$string['displaydesc'] = 'Надо ли отображать пакет SCORM  в новом окне.';
$string['displaysettings'] = 'Параметры отображения';
$string['dnduploadscorm'] = 'Добавить пакет SCORM';
$string['domxml'] = 'Внешняя библиотека DOMXML';
$string['duedate'] = 'Срок выполнения';
$string['element'] = 'Элемент';
$string['enter'] = 'Войти';
$string['entercourse'] = 'Вход в SCORM курс';
$string['errorlogs'] = 'Журнал ошибок';
$string['eventattemptdeleted'] = 'Попытка удалена';
$string['eventinteractionsviewed'] = 'Взаимодействия просмотрены';
$string['eventreportviewed'] = 'Отчет просмотрен';
$string['eventscolaunched'] = 'Sco запущен';
$string['eventscorerawsubmitted'] = 'Отправленный сырой балл SCORM';
$string['eventstatussubmitted'] = 'Отправленный статус SCORM';
$string['eventtracksviewed'] = 'Треки просмотренны';
$string['eventuserreportviewed'] = 'Рассмотрен отчет по пользователю';
$string['everyday'] = 'Каждый день';
$string['everytime'] = 'При каждом использовании';
$string['exceededmaxattempts'] = 'Вы достигли максимального количества попыток.';
$string['exit'] = 'Выйти из курса';
$string['exitactivity'] = 'Перейти на главную страницу курса';
$string['expired'] = 'Извините, данный элемент курса закрыт в {$a} и уже не доступен';
$string['external'] = 'Время обновления внешних пакетов';
$string['failed'] = 'Неудачно';
$string['finishscorm'] = 'Если Вы закончили просмотр этого ресурса, {$a}';
$string['finishscormlinkname'] = 'щелкните здесь, чтобы вернуться на страницу курса';
$string['firstaccess'] = 'Первый раз';
$string['firstattempt'] = 'Первая попытка';
$string['floating'] = 'Плавающий';
$string['forceattemptalways'] = 'Всегда';
$string['forceattemptoncomplete'] = 'Когда предыдущая попытка завершена, пройдена или не удалась';
$string['forcecompleted'] = 'Принудительное завершение
';
$string['forcecompleted_help'] = 'Если параметр включен, то текущей попытке принудительно назначается статус «завершено». (Применимо только к пакетам SCORM 1.2.)';
$string['forcecompleteddesc'] = 'Этот параметр задает значение по умолчанию для настройки принудительного завершения';
$string['forcejavascript'] = 'Заставить пользователей включить JavaScript';
$string['forcejavascript_desc'] = 'При включенном параметре (рекомендуется) предотвращается доступ к объектам SCORM, если в браузере пользователя не поддерживается/отключен JavaScript.

Если этот параметр отключен, то пользователь может просмотреть SCORM, но связь не возможна и информация об оценке не будет сохранена.';
$string['forcejavascriptmessage'] = 'Для просмотра этого объекта  необходимо использование JavaScript. Пожалуйста, включите JavaScript в своем браузере и попробуйте еще раз.';
$string['forcenewattempts'] = 'Всегда новая попытка';
$string['forcenewattempts_help'] = 'Есть 3 варианта:

* Нет - если предыдущая попытка завершена, пройдена или не удалась, студенту будет предоставлена возможность войти в режим просмотра или начать новую попытку.
* Когда предыдущая попытка завершена, пройдена или не удалась - это зависит от пакета SCORM, устанавливающего статус «завершено», «пройдено» или «не выполнено».
* Всегда - каждый повторный вход в SCORM будет генерировать новую попытку, и студент не будет возвращен к той же точке, которой он достиг в предыдущей попытке.';
$string['found'] = 'Манифест найден';
$string['frameheight'] = 'Высота фрейма или окна.';
$string['framewidth'] = 'Ширина фрейма или окна.';
$string['fromleft'] = 'Слева';
$string['fromtop'] = 'Сверху';
$string['fullscreen'] = 'Во весь экран';
$string['general'] = 'Основные данные';
$string['gradeaverage'] = 'Средняя оценка';
$string['gradeforattempt'] = 'Оценка за попытку';
$string['gradehighest'] = 'Высшая оценка';
$string['grademethod'] = 'Метод оценивания';
$string['grademethod_help'] = 'Метод оценивания задает, как определяется оценка отдельной попытки.

Есть 4 метода оценивания:

* Объекты обучения - количество завершенных/пройденных объектов обучения
* Лучшая оценка - высший балл из полученных во всех пройденных учебных объектах
* Средняя оценка - среднее всех баллов * Суммарная оценка - сумма всех баллов.';
$string['grademethoddesc'] = 'Метод оценивания определяет то, каким образом должна определяться за одну попытку выполнения элемента курса.';
$string['gradereported'] = 'Оценка передана';
$string['gradescoes'] = 'Объекты обучения';
$string['gradesettings'] = 'Настройки оценивания';
$string['gradesum'] = 'Суммарная оценка';
$string['height'] = 'Высота';
$string['hidden'] = 'Скрыть';
$string['hidebrowse'] = 'Отключить режим предпросмотра';
$string['hidebrowse_help'] = '<h2>Скрыть кнопку «Предпросмотр» </h2>

<p> Если эта опция будет установлена в «Да», то кнопка «Предпросмотр» на странице Пакета SCORM/AICC будет скрыта.</p>

<p>По умолчанию ученик может выбрать способ предварительного просмотра результата, или старается выполнить попытку обычным способом. </p>

<p> Когда Объект обучения завершен способом предварительного просмотра, это обозначается иконкой <img src="<?php echo $CFG->wwwroot.\'/mod/scorm/pix/browsed.gif\' ?>" alt="<?php print_string(\'browsed\',\'scorm\') ?>" title="<?php print_string(\'browsed\',\'scorm\') ?>" />.</p>';
$string['hidebrowsedesc'] = 'Режим предварительного просмотра позволяет студенту просматривать пакет SCORM перед попыткой пройти его.';
$string['hideexit'] = 'Скрыть ссылку выхода';
$string['hidereview'] = 'Скрыть кнопку предпросмотра';
$string['hidetoc'] = 'Показать оглавление';
$string['hidetoc_help'] = 'Эта настройка определяет как оглавление отображается в плеере SCORM.';
$string['hidetocdesc'] = 'Этот параметр определяет, как оглавление отображается в окне проигрывателя SCORM.';
$string['highestattempt'] = 'Лучшая попытка';
$string['identifier'] = 'Идентификатор вопроса';
$string['incomplete'] = 'Не завершено';
$string['indicator:cognitivedepth'] = 'SCORM: познавательный аспект';
$string['indicator:cognitivedepth_help'] = 'Этот показатель основан на глубине познания, достигнутой студентом при работе с элементом курса «SCORM».';
$string['indicator:cognitivedepthdef'] = 'SCORM: познавательный аспект';
$string['indicator:cognitivedepthdef_help'] = 'Участник достиг этого процента познавательного взаимодействия, предлагаемого элементом курса «SCORM» в течение этого интервала анализа (Уровни = Нет просмотра, Просмотр, Отправка, Просмотр отзыва)';
$string['indicator:socialbreadth'] = 'SCORM: социальный аспект';
$string['indicator:socialbreadth_help'] = 'Этот показатель основан на широте общения, которая может быть достигнута студентом при работе с элементом SCORM.';
$string['indicator:socialbreadthdef'] = 'SCORM: социальный аспект';
$string['indicator:socialbreadthdef_help'] = 'Участник достиг этого процента социальной активности, предлагаемой элементами SCORM в течение этого интервала анализа (Уровни = нет участия, единственный участник)';
$string['info'] = 'Введение';
$string['interactions'] = 'Взаимодействие';
$string['invalidactivity'] = 'Элемент курса SCORM некорректен';
$string['invalidhacpsession'] = 'Неверный HACP сессии';
$string['invalidmanifestname'] = 'Могут быть выбраны только файлы imsmanifest.xml или zip-архив.';
$string['invalidmanifestresource'] = 'ВНИМАНИЕ:  в манифесте были указаны следующие ресурсы, но они не найдены:';
$string['invalidstatus'] = 'Недопустимое состояние';
$string['invalidurl'] = 'Указан неправильный URL-адрес.';
$string['invalidurlhttpcheck'] = 'Указан неправильный URL-адрес. Сообщение отладки:<pre>{$a->cmsg}</pre>';
$string['last'] = 'Последний раз работал';
$string['lastaccess'] = 'Последний доступ';
$string['lastattempt'] = 'Завершена последняя попытка';
$string['lastattemptlock'] = 'Блокировка после последней попытки';
$string['lastattemptlock_help'] = 'Если параметр включен, то студент не может запустить проигрыватель SCORM после израсходования им всех разрешенных попыток.';
$string['lastattemptlockdesc'] = 'При включенном параметре студент не имеет возможности запустить SCORM после использования всех выделенных ему попыток.';
$string['location'] = 'Отображать панель навигации';
$string['masteryoverride'] = 'Главный балл переопределяет статус';
$string['masteryoverride_help'] = 'Если параметр включен и при вызове LMSFinish предоставлен главный балл, а сырой балл также был задан, то статус будет пересчитан с использованием сырого балла и главного балла и любой статус, переданный SCORM (включая «незавершенный») будет переопределен.';
$string['masteryoverridedesc'] = 'Эта настройка задает по умолчанию, что переопределяет главный балл';
$string['max'] = 'Максимальный балл';
$string['maximumattempts'] = 'Количество попыток';
$string['maximumattempts_help'] = '<h2>Количество попыток</h2>

<p> Этим определяется количество попыток, разрешенных пользователям. <br /> Работает только с SCORM1.2 и пакетами AICC. SCORM2004 сам определяет максимальное количество попыток. </p>';
$string['maximumattemptsdesc'] = 'Данный параметр устанавливает максимальное количество попыток по умолчанию для элемента курса';
$string['maximumgradedesc'] = 'Данный параметр устанавливает максимальную оценку по умолчанию для элемента курса';
$string['menubar'] = 'Отображать панель меню';
$string['min'] = 'Минимальный балл';
$string['missing_attribute'] = 'Атрибут {$a->attr} отсутствует в теге {$a->tag}';
$string['missing_tag'] = 'Отсутствует тег {$a->tag}';
$string['missingparam'] = 'Требуемый параметр отсутствует или неверен';
$string['mode'] = 'Режим';
$string['modulename'] = 'Пакет SCORM';
$string['modulename_help'] = 'Пакет SCORM представляет собой набор файлов, которые упакованы в соответствии с согласованным стандартом для учебных объектов. Модуль SCORM позволяет добавить в курс пакеты SCORM или AICC, которые загружаются в виде архива.

Содержимое обычно отображается на нескольких страницах, с навигацией между страницами. Существуют различные варианты для отображения содержимого: в всплывающем окне, с оглавлением, с кнопками навигации и т.д. Пакеты SCORM обычно содержат вопросы,  оценки за ответы записывается в журнал оценок.

SCORM может быть использован:

* Для представления мультимедийного контента и анимации
* Как инструмент оценивания';
$string['modulenameplural'] = 'Пакеты SCORM';
$string['myaiccsessions'] = 'Мои сеансы AICC';
$string['myattempts'] = 'Мои попытки';
$string['nav'] = 'Показывать навигацию';
$string['nav_help'] = 'Этот параметр определяет, следует ли показать или скрыть кнопки навигации и их расположение.

Возможны 3 варианта:

* Нет - Кнопки навигации не отображаются
* Под содержимым - Кнопки навигации отображаются ниже содержимого пакета SCORM
* Плавающий - Кнопки навигации являются плавающими, с позицией сверху и слева, заданной в пакете.';
$string['navdesc'] = 'Этот параметр определяет, следует ли показать или скрыть кнопки навигации и их расположение.';
$string['navigation'] = 'Навигация';
$string['navpositionleft'] = 'Положение кнопок навигации слева в пикселях.';
$string['navpositiontop'] = 'Положение кнопок навигации сверху в пикселях.';
$string['networkdropped'] = 'Плеер SCORM определил, что интернет-соединение ненадежно или было прервано. Если Вы будете продолжать работать с этим SCORM-пакетом, то Ваш результат может не сохраниться. <br />
Вы сейчас должны выйти из SCORM и вернуться позже, когда будет надежное подключение к Интернету.';
$string['newattempt'] = 'Начать новую попытку';
$string['next'] = 'Продолжить';
$string['no_attributes'] = 'Тег {$a->tag} должны иметь атрибуты';
$string['no_children'] = 'Тег {$a->tag} должен иметь потомка';
$string['noactivity'] = 'Ничего не произошло';
$string['noattemptsallowed'] = 'Количество попыток';
$string['noattemptsmade'] = 'Выполнено попыток';
$string['nolimit'] = 'Не ограничено';
$string['nomanifest'] = 'Некорректный файл пакета - отсутствует файл imsmanifest.xml или структура AICC';
$string['noprerequisites'] = 'Извините, но Вы не выполнили требуемые предварительные условия для перехода к этому элемента курса.';
$string['noreports'] = 'Нет отчетов для показа';
$string['normal'] = 'Обычный';
$string['noscriptnoscorm'] = 'Ваш браузер не поддерживает JavaScript или JavaScript отключен. Невозможно воспроизвести пакет SCORM или корректно сохранить данные.';
$string['not_corr_type'] = 'Несоответствие типа для тега {$a->tag}';
$string['notattempted'] = 'Не приступал';
$string['notopenyet'] = 'Извините, данный элемент курса не доступен до {$a}';
$string['objectives'] = 'Объекты';
$string['openafterclose'] = 'Вы указали дату открытия после даты закрытия';
$string['optallstudents'] = 'все пользователи';
$string['optattemptsonly'] = 'только пользователи с попытками';
$string['options'] = 'Параметры (мешают некоторым браузером)';
$string['optionsadv'] = 'Дополнительные параметры';
$string['optionsadv_desc'] = 'При установленном флажке ширина и высота будут перечислены в качестве дополнительных параметров.';
$string['optnoattemptsonly'] = 'только пользователи без попыток';
$string['organization'] = 'Организация';
$string['organizations'] = 'Организаций';
$string['othersettings'] = 'Дополнительные настройки';
$string['package'] = 'Файл с пакетом';
$string['package_help'] = 'Пакет - это отдельный файл с расширением <b>zip</b> (или <b>pif</b>), содержащий файлы курса, поддерживающие AICC или SCORM.';
$string['packagedir'] = 'Ошибка файловой системы: невозможно создать директорию для пакета';
$string['packagefile'] = 'Нет указанного файла пакета';
$string['packagehdr'] = 'Пакет';
$string['packageurl'] = 'URL';
$string['packageurl_help'] = 'Этот параметр позволяет задать адрес (URL) пакета SCORM вместо выбора загрузки файла стандартным способом.';
$string['page-mod-scorm-x'] = 'Любая страница модуля SCORM';
$string['pagesize'] = 'Кол-во на странице';
$string['passed'] = 'Выполнено успешно';
$string['php5'] = 'PHP 5 (собственная библиотека DOMXML)';
$string['pluginadministration'] = 'Управление пакетом SCORM';
$string['pluginname'] = 'Пакет SCORM';
$string['popup'] = 'В новом окне';
$string['popuplaunched'] = 'Этот SCORM-пакет был запущен в всплывающем окне. Если Вы уже закончили просмотр этого ресурса - нажмите здесь, чтобы вернуться на страницу курса.';
$string['popupmenu'] = 'В выпадающем меню';
$string['popupopen'] = 'Открыть пакет в новом окне';
$string['popupsblocked'] = 'Вероятно, всплывающие окна заблокированы. Проигрывание этого пакета SCORM остановлено. Пожалуйста, проверьте настройки своего браузера и повторите попытку.';
$string['position_error'] = 'Тег {$a->tag} не может быть дочерним для тега {$a->parent}';
$string['preferencespage'] = 'Настройки';
$string['preferencesuser'] = 'Настройки отчета';
$string['prev'] = 'Предыдущий';
$string['privacy:metadata:aicc:data'] = 'Личные данные, передаваемые из подсистемы AICC/SCORM.';
$string['privacy:metadata:aicc:externalpurpose'] = 'Этот плагин отправляет данные внешней стороне с помощью AICC HACP.';
$string['privacy:metadata:aicc_session:lessonstatus'] = 'Состояние задания, которое нужно отслеживать';
$string['privacy:metadata:aicc_session:scormmode'] = 'Режим отслеживаемого элемента';
$string['privacy:metadata:aicc_session:scormstatus'] = 'Состояние отслеживаемого элемента';
$string['privacy:metadata:aicc_session:sessiontime'] = 'Время сеанса, которое необходимо отслеживать';
$string['privacy:metadata:aicc_session:timecreated'] = 'Время создания отслеживаемого элемента';
$string['privacy:metadata:attempt'] = 'Номер попытки';
$string['privacy:metadata:scoes_track:element'] = 'Имя отслеживаемого элемента';
$string['privacy:metadata:scoes_track:value'] = 'Значение данного элемента';
$string['privacy:metadata:scorm_aicc_session'] = 'Информация о сеансе AICC HACP';
$string['privacy:metadata:scorm_scoes_track'] = 'Отслеживаемые данные SCO, принадлежащие к активному элементу';
$string['privacy:metadata:timemodified'] = 'Время последнего изменения отслеживаемого элемента';
$string['privacy:metadata:userid'] = 'ID пользователя, который получил доступ к элементу SCORM';
$string['protectpackagedownloads'] = 'Защита скачивания пакета';
$string['protectpackagedownloads_desc'] = 'При включенном параметре пакеты SCORM могут быть скачаны только если у пользователя есть право course:manageactivities. Если параметр отключен, то SCORM-пакеты всегда можно скачивать (мобильными или другими средствами).';
$string['raw'] = 'Балл';
$string['regular'] = 'Регулярный манифест';
$string['report'] = 'Отчет';
$string['reportcountallattempts'] = 'Попыток - {$a->nbattempts} для пользователей - {$a->nbusers}, из результатов - {$a->nbresults}';
$string['reportcountattempts'] = 'результатов - {$a->nbresults} (пользователей - {$a->nbusers})
';
$string['reports'] = 'Отчеты';
$string['repositorynotsupported'] = 'Это хранилище не поддерживает прямые ссылки на файл imsmanifest.xml.';
$string['response'] = 'Ответ';
$string['result'] = 'Результат';
$string['results'] = 'Результаты';
$string['review'] = 'Обзор';
$string['reviewmode'] = 'Режим просмотра';
$string['rightanswer'] = 'Правильный ответ';
$string['scoes'] = 'Объекты обучения';
$string['score'] = 'Балл';
$string['scorm:addinstance'] = 'Добавлять новый пакет SCORM';
$string['scorm:deleteownresponses'] = 'Удалять свои попытки';
$string['scorm:deleteresponses'] = 'Удалить попытки';
$string['scorm:savetrack'] = 'Сохранять прохождение';
$string['scorm:skipview'] = 'Пропускать обзор';
$string['scorm:viewreport'] = 'Просматривать отчеты';
$string['scorm:viewscores'] = 'Просматривать оценки';
$string['scormclose'] = 'Доступно до';
$string['scormcourse'] = 'Учебный курс';
$string['scormloggingoff'] = 'Выключить протоколирование API';
$string['scormloggingon'] = 'Включить протоколирование API';
$string['scormopen'] = 'Доступно с';
$string['scormresponsedeleted'] = 'Удаленные попытки пользователя';
$string['scormstandard'] = 'Стандартный режим SCORM';
$string['scormstandarddesc'] = 'Когда этот параметр отключен, Moodle позволяет пакетам SCORM 1.2 хранить больше, чем позволяет спецификация, и использует настройки формата полного имени Moodle при передаче имени пользователя в пакет SCORM.';
$string['scormtype'] = 'Тип';
$string['scormtype_help'] = 'Этот параметр определяет каким образом пакет SCROM будет включен в курс. Существует 4 варианта:

* Загружаемый пакет - Пакет SCORM будет загружаться через стандартное средство загрузки файлов
* Манифест внешнего SCORM - В этом режиме нужно указать адрес файла imsmanifest.xml пакета. Имейте в виду: если в этом адресе доменное имя отличается от имени Вашего сайта, то лучше использовать вариант «Скачиваемый пакет», иначе оценки не будут сохранены.
* Скачиваемый пакет - Нужно будет указать адрес пакета. Пакет будет разархивирован и сохранен локально. При обновлении внешнего пакета он будет обновляться.
* Хранилище локального контента IMS - Включить пакет, который будет выбираться из хранилища IMS.';
$string['scrollbars'] = 'Разрешить прокручивание окна';
$string['search:activity'] = 'Пакет SCORM — информация об элементе курса';
$string['selectall'] = 'Выбрать все';
$string['selectnone'] = 'Отменить все';
$string['show'] = 'Показать';
$string['sided'] = 'В стороне';
$string['skipview'] = 'Учащийся пропускает страницу со структурой контента';
$string['skipview_help'] = '<h2>Пропуск учеником страницы структуры содержимого </h2>

<p> Если вы добавляете пакет только с одним Объектом обучения, вы можете выбрать автоматический пропуск страницы структуры, когда пользователи выбирают SCORM на странице курса. </p>

<p>Вы можете выбрать:</p>

<ul>
       <li><strong>Никогда</strong> не пропускать страницу структуры содержимого.</li>
       <li><strong>Первый раз</strong> пропустить страницу структуры только в первый раз.</li>
       <li><strong>Всегда</strong> пропускать страницу структуры.</li>
   </ul>';
$string['skipviewdesc'] = 'Этот параметр устанавливает значение по умолчанию, когда для страницы пропускается структура содержимого';
$string['slashargs'] = 'ВНИМАНИЕ: на этом сайте отключено использование «slash arguments» и объекты могут вести себя не так, как ожидается.';
$string['stagesize'] = 'Размер области контента';
$string['stagesize_help'] = '<h2>Размер</h2>
<p> Эти два параметра настройки Объектов обучения определяют высоту и ширину фрейма/окна. </p>';
$string['started'] = 'Приступил';
$string['status'] = 'Статус';
$string['statusbar'] = 'Показать строку состояния';
$string['student_response'] = 'Ответ';
$string['subplugintype_scormreport'] = 'Отчет';
$string['subplugintype_scormreport_plural'] = 'Отчеты';
$string['suspended'] = 'Приостановлено';
$string['syntax'] = 'Синтаксическая ошибка';
$string['tag_error'] = 'Неизвестный тег ({$a->tag}) со следующим содержанием: {$a->value}';
$string['time'] = 'Время';
$string['title'] = 'Название';
$string['toc'] = 'Оглавление';
$string['too_many_attributes'] = 'Тег {$a->tag} имеет слишком много атрибутов';
$string['too_many_children'] = 'Тег {$a->tag} имеет слишком много потомков';
$string['toolbar'] = 'Отображать панель управления';
$string['totaltime'] = 'Время';
$string['trackcorrectcount'] = 'Правильный подсчет';
$string['trackcorrectcount_help'] = 'Количество правильных результатов для вопроса';
$string['trackid'] = 'ID';
$string['trackid_help'] = 'Это идентификатор вопроса, который задан в пакете SCORM. Спецификация SCORM не позволяет передать полный текст вопроса.';
$string['trackingloose'] = 'Внимание: Данные прослеживания этого SCORM пакета будут потеряны!';
$string['tracklatency'] = 'Задержка';
$string['tracklatency_help'] = 'Время, прошедшее между моментом, когда студент получил возможность для ответа и временем его первого ответа.';
$string['trackpattern'] = 'Пример';
$string['trackpattern_help'] = 'Так должен выглядеть правильный ответ на этот вопрос, ответ учащегося здесь отсутствует.';
$string['trackresponse'] = 'Ответ';
$string['trackresponse_help'] = 'Это ответ, которы дал учащийся на этот вопрос';
$string['trackresult'] = 'Результат';
$string['trackresult_help'] = 'Итог, основанный на ответе студента и правильном результате';
$string['trackscoremax'] = 'Максимальный балл';
$string['trackscoremax_help'] = 'Максимальное значение в диапазоне исходных баллов';
$string['trackscoremin'] = 'Минимальный балл';
$string['trackscoremin_help'] = 'Минимальное значение в диапазоне исходных баллов';
$string['trackscoreraw'] = 'Первичный балл';
$string['trackscoreraw_help'] = 'Номер, который отражает продуктивность студента в сравнении с минимальным и максимальным значением';
$string['tracksuspenddata'] = 'Отложить данные';
$string['tracksuspenddata_help'] = 'Место для хранения и извлечения данных между сеансами студента';
$string['tracktime'] = 'Время';
$string['tracktime_help'] = 'Время начала попытки';
$string['tracktype'] = 'Тип';
$string['tracktype_help'] = 'Тип вопроса, например «Выбор» или «Короткий ответ».';
$string['trackweight'] = 'Вес';
$string['trackweight_help'] = 'Вес, назначенный элементу';
$string['type'] = 'Тип';
$string['typeaiccurl'] = 'URL-адрес внешней AICC';
$string['typeexternal'] = 'Манифест внешнего SCORMа';
$string['typelocal'] = 'Загруженный пакет';
$string['typelocalsync'] = 'Скачиваемый пакет';
$string['undercontent'] = 'Под содержимым';
$string['unziperror'] = 'Ошибка при распаковке пакета';
$string['updatefreq'] = 'Частота автообновления';
$string['updatefreq_error'] = 'Частота автоматического обновления может быть установлена только для файла внешнего пакета';
$string['updatefreq_help'] = 'Это позволяет автоматически загружать и обновлять внешний пакет';
$string['updatefreqdesc'] = 'Данный параметр устанавливает частоту автоматического обновления по умолчанию для элемента курса';
$string['validateascorm'] = 'Верный SCORM пакет';
$string['validation'] = 'Верный результат';
$string['validationtype'] = 'Желательно установить библиотеку DOMXML, используемую для проверки манифеста SCORM. Если не уверены - оставьте выбранный вариант.';
$string['value'] = 'Значение';
$string['versionwarning'] = 'Манифест версии старше чем 1.3, предупреждение в теге {$a->tag}';
$string['viewallreports'] = 'Просмотр отчетов для {$a} попыток';
$string['viewalluserreports'] = 'Просмотр отчетов для {$a} пользователей';
$string['whatgrade'] = 'Оценивание попыток';
$string['whatgrade_help'] = 'Если разрешено несколько попыток, то этот параметр определяет, какая оценка будет записана в журнал оценок: высшая, средняя, оценка первой или последней завершенной попытки. К последней завершенной попытке не относятся неудачные попытки.

Указания по управлению несколькими попытками:

* возможность начать новую попытку обеспечивает флажок выше кнопки «Ввод» на странице структуры содержимого. Убедитесь, что Вы предоставили доступ к этой странице, если хотите разрешить более одной попытки.

* Некоторые пакеты SCORM «понимают» особенности применения новых попыток, а многие - нет. Это значит, что если студент повторно входит в имеющиеся попытки, а внутренняя логика SCORM не позволяет избежать перезаписи предыдущих попыток, то они могут быть перезаписаны, хотя попытка была «завершена» или «передана».

* Настройки «Принудительно завершать», «Принудительная новая попытка» и «Блокировка после последней попытки» также обеспечивает дальнейшее управление несколькими попытками.';
$string['whatgradedesc'] = 'Какая оценка из завершенных попыток записывается в журнал оценок, если разрешено несколько попыток - лучшая, средняя, из первой или последней попыток?';
$string['width'] = 'Ширина';
$string['window'] = 'Окно';
$string['youmustselectastatus'] = 'Вы должны выбрать требуемый статус';
