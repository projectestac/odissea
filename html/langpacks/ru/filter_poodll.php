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
 * Strings for component 'filter_poodll', language 'ru', version '4.5'.
 *
 * @package     filter_poodll
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activate'] = 'Активировать PoodLL?';
$string['alwayshtml5'] = 'Всегда использовать HTML5';
$string['audiotranscode'] = 'Автопреобр. в MP3';
$string['audiotranscodedetails'] = 'Преобразовывать записанные/закачанные аудиофайлы в MP3 перед сохранением в Moodle. Работает для записей, сделанных на tokyo.poodll.com, и для закачанных записей при использовании FFMPEG';
$string['autotryports'] = 'Пытаться использовать другие порты при неудачной попытке соединения';
$string['bandwidth'] = 'Скорость соединения для студентов, байт/с. Влияет на качество веб-камеры';
$string['bgtranscode_audio'] = 'Конвертацию в MP3 проводить в фоне';
$string['bgtranscode_video'] = 'Конвертацию в MP4 проводить в фоне';
$string['bgtranscodedetails_audio'] = 'Это более надежно, чем выполнять конвертацию в приоритетном режиме (когда пользователь не имеет возможности ничего делать до ее окончания). Но аудио не будет доступно пользователю, пока не пройдет задание cron после сохранения. Работает, только если вы используете FFMPEG и Moodle 2.7 или выше. В случае записи в формате MP3 при помощи MP3-рекордера  преобразование происходит в браузере, а не на сервере. Так что преобразование на стороне сервера (FFMPEG) не будет использоваться.';
$string['bgtranscodedetails_video'] = 'Это более надежно, чем выполнять конвертацию в приоритетном режиме (когда пользователь не имеет возможности ничего делать до ее окончания). Но аудио не будет доступно пользователю, пока не пройдет задание cron после сохранения. Работает, только если вы используете FFMPEG и Moodle 2.7 или выше.';
$string['bundle'] = 'Набор настроек';
$string['burntrose_recorder'] = 'Желтовато-красный';
$string['cameraback'] = 'задняя';
$string['camerafront'] = 'передняя';
$string['cancel'] = 'Отмена';
$string['capturefps'] = 'Кадровая частота (FPS) видеозахвата';
$string['captureheight'] = 'Высота области видеозахвата';
$string['capturewidth'] = 'Размер области видеозахвата';
$string['dataset'] = 'Набор данных';
$string['dataset_desc'] = 'PoodLL позволяет извлечь из базы данных набор данных для шаблона. Это функционал для продвинутых пользователей. Введите здесь sql-часть запроса $DB->get_records_sql.';
$string['datasetvars'] = 'Переменные набора данных';
$string['datasetvars_desc'] = 'Введите разделенный запятыми список переменных, которые составляют переменные запроса SQL. Вы можете и, вероятно, захотите использовать здесь переменные.';
$string['debug_enable'] = 'Включить отладку';
$string['debug_enable_details'] = 'При включении отладки информация о записях будет сохраняться в журналах работы Moodle, что помогает службе поддержки Poodll решать возникающие проблемы. Отключайте отладку при отсутствии проблем, иначе журналы Moodle будут забиты кучей бесполезной информации.';
$string['debug_heading'] = 'Отладка Poodll';
$string['default_camera'] = 'Камера по умолчанию';
$string['defaultwhiteboard'] = 'Электронная доска по умолчанию';
$string['event_adhoc_completed'] = 'Завершено специальное задание Poodll (Adhoc)';
$string['event_adhoc_convert_completed'] = 'Завершено специальное задание конвертации Poodll (Adhoc)';
$string['event_adhoc_convert_registered'] = 'Зарегистрировано специальное задание конвертации Poodll (Adhoc)';
$string['event_adhoc_move_completed'] = 'Завершено специальное задание перемещения Poodll (Adhoc)';
$string['event_adhoc_move_registered'] = 'Зарегистрировано специальное задание перемещения Poodll (Adhoc)';
$string['event_adhoc_registered'] = 'Зарегистрировано специальное задание Poodll (Adhoc)';
$string['event_debug_log'] = 'Отладочное сообщение Poodll';
$string['expired'] = 'PoodLL не отображается, так как истекла лицензия. Обратитесь к преподавателю/администратору для обновления лицензии на PoodLL.com';
$string['exportdiagnostics'] = 'Экспорт';
$string['extensions'] = 'Файловые расширения';
$string['extensions_desc'] = 'Список файловых расширений, разделенный запятыми (CSV), которые может обрабатывать фильтр.';
$string['extensionsettings'] = 'Настройки файловых расширений';
$string['ffmpeg'] = 'Конвертировать закачанные файлы при помощи FFMPEG';
$string['ffmpeg_details'] = 'FFMPEG должен быть установлен на сервере Moodle и прописан в системных путях. Требуется, чтобы он обеспечивал конвертацию в mp3, поэтому вначале опробуйте это в командной строке, например: ffmpeg -i somefile.flv somefile.mp3';
$string['filter_poodll_audioplayer_heading'] = 'Настройки аудиоплеера';
$string['filter_poodll_camera_heading'] = 'Настройки веб-камеры';
$string['filter_poodll_flashcards_heading'] = 'Настройки дидактических карточек';
$string['filter_poodll_html5recorder_heading'] = 'Настройки записывающего устройства HTML5';
$string['filter_poodll_mic_heading'] = 'Настройки микрофона';
$string['filter_poodll_mp3recorder_heading'] = 'Настройки MP3-рекордера';
$string['filter_poodll_network_heading'] = 'Сетевые настройки PoodLL';
$string['filter_poodll_registration_explanation'] = 'Для работы PoodLL 3 требуется регистрационный ключ. Если у вас нет ключа, посетите Poodll.com, чтобы получить его.';
$string['filter_poodll_registration_heading'] = 'Регистрация PoodLL';
$string['filter_poodll_videogallery_heading'] = 'Настройки видеогалереи';
$string['filter_poodll_videoplayer_heading'] = 'Настройки видеоплеера';
$string['filter_poodll_whiteboard_heading'] = 'Настройки электронной доски';
$string['filtername'] = 'Фильтр PoodLL';
$string['flashcardstype'] = 'Типы дидактических карточек';
$string['generalsettings'] = 'Общие настройки';
$string['handle'] = 'Обрабатывать {$a}';
$string['have_recent_event'] = 'Обнаружено недавно завершенное событие перемещения/обработки для: {$ a}';
$string['have_task'] = 'Обнаружено ожидающее задание перемещения/обработки для: {$a}';
$string['highquality'] = 'высокое';
$string['insert'] = 'Вставить';
$string['jumpcat_explanation'] = 'Полный список настроек фильтра PoodLL может быть найден  <a href="{$a}">здесь</a>.';
$string['jumpcat_heading'] = 'Настройки фильтра PoodLL';
$string['license_details'] = '<br> -------------- <br> Тип лицензии: {$a->license_type} <br> Срок истечения лицензии(JST): {$a->expire_date} <br> Зарегистрированный URL: {$a->registered_url}';
$string['lowquality'] = 'низкое';
$string['mediumquality'] = 'среднее';
$string['miccanpause'] = 'Разрешить паузу (только MP3-рекордер)';
$string['micecho'] = 'Подавление эха';
$string['micgain'] = 'Усиление микрофона';
$string['micloopback'] = 'Передача звука с микрофона на локальные динамики';
$string['micrate'] = 'Частота записи, кГц';
$string['micsilencelevel'] = 'Уровень тишины микрофона';
$string['mobile_audio_quality'] = 'Качество аудио';
$string['mobile_os_version_warning'] = '<p>Ваша операционная система слишком старая.</p>
		<p>Требуется версия Android 4 или выше.</p>
		<p>Либо версия iOS 6 или выше.</p>';
$string['mobile_show'] = 'Показывать кнопку мобильного приложения';
$string['mobile_show_desc'] = 'На устройствах с iOS вместо рекордера будет отображаться кнопка "закачать/записать" и "использовать приложение PoodLL". Отключите, чтобы скрыть кнопку приложения PoodLL';
$string['mobile_video_quality'] = 'Качество видео';
$string['mobileandwebkit'] = 'Mobile + браузеры на движке Webkit (Safari, Chrome и т.п.)';
$string['mobileonly'] = 'Только мобильные устройства';
$string['mobilesettings'] = 'Настройки приложения iOS';
$string['mp3_nocloud'] = 'Отключить облачные сервисы';
$string['mp3_nocloud_details'] = 'Не отправлять записанные Flash mp3 в облако для преобразования и обратного копирования';
$string['mp3opts'] = 'Настройки конвертации FFMPEG MP3';
$string['mp3opts_details'] = 'Оставьте поле пустым, если хотите, чтобы решения принимались кодеком FFMPEG. Всё, что вы введёте сюда, появится в команде между [ffmpeg -i myfile.xx ] и [ myfile.mp3 ]';
$string['mp3skin'] = 'Внешний вид MP3';
$string['mp3skin_details'] = 'Если вы хотите использовать тему оформления для рекордера, введите здесь ее имя. В противном случае введите: none.';
$string['mp4opts'] = 'Настройки конвертации FFMPEG MP4';
$string['mp4opts_details'] = 'Оставьте поле пустым, если хотите, чтобы решения принимались кодеком FFMPEG. Всё, что вы введёте сюда, появится в команде между [ffmpeg -i myfile.xx ] и [ myfile.mp4 ]';
$string['neverhtml5'] = 'Никогда не использовать HTML5';
$string['no_event_or_task'] = 'Не обнаружено ни ожидающих заданий перемещения, ни завершенных событий перемещения/обработки для: {$a}';
$string['normal'] = 'Обычный';
$string['picqual'] = 'Качество веб-камеры 1-10';
$string['plain_recorder'] = 'Обычный';
$string['player'] = 'Плеер {$a}';
$string['playertype'] = 'плеер';
$string['pluginname'] = 'Фильтр PoodLL';
$string['poodll:candownloadmedia'] = 'Разрешено скачивать файлы';
$string['poodllsupportinfo'] = 'Информация PoodLL о системе';
$string['presets'] = 'Автоматически заполнить шаблон предустановкой';
$string['presets_desc'] = 'С PoodLL поставляется ряд предварительно сконфигурированных настроек, которые можно использовать вместе с вашими шаблонами. Выберите одну из предустановок здесь или создайте собственный шаблон "с нуля". Вы можете экспортировать шаблон в виде набора настроек, нажав на зеленый прямоугольник вверху. Импортировать набор настроек можно, перетащив соответствующий файл на этот зеленый прямоугольник.';
$string['recorderorder'] = 'Предпочтительный порядок записывающих устройств';
$string['recorderorder_desc'] = 'PoodLL выберет наилучшее записывающее устройство для браузера и платформы пользователя. Здесь Вы можете задать порядок.';
$string['recui_audiogain'] = 'Усиление аудио';
$string['recui_audiorate'] = 'Битрейт аудио';
$string['recui_awaitingconfirmation'] = 'Ожидаем подтверждения';
$string['recui_btnupload'] = 'Записать или выбрать файл';
$string['recui_cancelsnapshot'] = 'Отмена';
$string['recui_close'] = 'Закрыть';
$string['recui_continue'] = 'Продолжить';
$string['recui_converting'] = 'конвертация';
$string['recui_echo'] = 'Подавление эха';
$string['recui_inaudibleerror'] = 'Мы вас не слышим. Пожалуйста, проверьте настройки браузера и flash.';
$string['recui_loopback'] = 'Передача звука с микрофона на локальные динамики';
$string['recui_nothingtosaveerror'] = 'Ничего не захвачено. К сожалению, загружать нечего.';
$string['recui_off'] = 'Откл.';
$string['recui_ok'] = 'ОК';
$string['recui_on'] = 'Вкл.';
$string['recui_openrecorderapp'] = 'Приложение PoodLL';
$string['recui_pause'] = 'Пауза';
$string['recui_play'] = 'Вопроизв.';
$string['recui_record'] = 'Запись';
$string['recui_recordorchoose'] = 'Записать или выбрать файл';
$string['recui_save'] = 'Закачать';
$string['recui_silencelevel'] = 'Уровень тишины';
$string['recui_stop'] = 'Стоп';
$string['recui_takesnapshot'] = 'Сделать снимок';
$string['recui_time'] = 'Время:';
$string['recui_timeouterror'] = 'К сожалению, время ожидания ответа на запрос истекло.';
$string['recui_uploadafile'] = 'Закачать файл';
$string['recui_uploaderror'] = 'Произошла ошибка, ваш файл НЕ был закачан.';
$string['recui_uploading'] = 'закачка';
$string['recui_uploadsuccess'] = 'Закачка успешна';
$string['registrationkey'] = 'Регистрационный ключ';
$string['registrationkey_explanation'] = 'Введите регистрационный ключ PoodLL в это поле. Вы можете получить ключ здесь: <a href=\'https://poodll.com/poodll-3-2\'>https://poodll.com/poodll-3-2</a>';
$string['serverhttpport'] = 'Порт сервера PoodLL (HTTP)';
$string['serverid'] = 'Идентификатор сервера PoodLL';
$string['servername'] = 'URL-адрес сервера PoodLL';
$string['serverport'] = 'Порт сервера PoodLL (RTMP)';
$string['settings'] = 'Настройки фильтра PoodLL';
$string['showdownloadicon'] = 'Показывать иконку "Скачать" под плеером';
$string['sitedefault'] = 'По умолчанию для сайта';
$string['size'] = 'Размер';
$string['studentcam'] = 'Предпочтительное имя для камеры';
$string['studentmic'] = 'Предпочтительное имя для микрофона';
$string['supportinfo'] = 'Информация о системе';
$string['template'] = 'Тело шаблона {$a}';
$string['template_desc'] = 'Разместите шаблон здесь, определите переменные, окружив их символами @@ с двух сторон, например, @@переменная@@';
$string['template_showatto'] = 'Показывать в Atto (шаблон {$a})';
$string['template_showatto_desc'] = 'Показывать кнопку и форму данного виджета в диалоге PoodLL Widgets для Atto.';
$string['template_showplayers'] = 'Показывать в списке плееров (шаблон {$a})';
$string['template_showplayers_desc'] = 'Показывать в выпадающем списке плееров, доступных для ассоциирования с файловым расширением.';
$string['templatealternate'] = 'Альтернативное содержимое (шаблон {$a})';
$string['templatealternate_desc'] = 'Используемое содержимое, если недоступно содержимое пользовательских CSS и Javascript. Сейчас оно используется, когда шаблон обрабатывается веб-службой, вероятно, для отображения в мобильном приложении';
$string['templatealternate_end'] = 'Конец альтернативного содержимого (шаблон {$a})';
$string['templatealternate_end_desc'] = 'Закрывающие альтернативное содержимое теги для шаблонов, которые обрамляют пользовательское содержимое начальными и конечными тегами Poodll';
$string['templatecount'] = 'Число шаблонов';
$string['templatecount_desc'] = 'Число допустимых шаблонов. По умолчанию - 20.';
$string['templatedefaults'] = 'Умолчания для переменных (шаблон {$a})';
$string['templatedefaults_desc'] = 'Задайте значения по умолчанию в виде наборов «имя=значение», разделенных запятыми, например: width=800,height=900,feeling=joy';
$string['templateend'] = 'Закрывающие теги (шаблон {$a})';
$string['templateend_desc'] = 'Если в вашем шаблоне содержится пользовательское содержимое, например, информационное окно, то поместите здесь закрывающие теги. Чтобы закрыть фильтр пользователь должен ввести что-то наподобие {POODLL: mytag_end}.';
$string['templateheading'] = 'Настройки шаблона Poodll {$a}';
$string['templateheadingcss'] = 'Настройки CSS/стилей.';
$string['templateheadingjs'] = 'Настройки JavaScript.';
$string['templateinstructions'] = 'Инструкции (шаблон {$a})';
$string['templateinstructions_desc'] = 'Все инструкции, введённые здесь, появятся в форме atto PoodLL, если этот шаблон доступен для отображения там. Будьте кратки, иначе они будут плохо смотреться!';
$string['templatekey'] = 'Ключ, определяющий шаблон {$a}';
$string['templatekey_desc'] = 'Ключ должен быть одним словом, содержащим только буквы, знаки подчеркивания, точки и дефисы.';
$string['templatename'] = 'Отображаемое имя шаблона {$a}';
$string['templatename_desc'] = 'Имя может содержать цифры, буквы, знаки подчеркивания, дефисы и точки.';
$string['templatepageheading'] = '(T): {$a}';
$string['templatepageplayerheading'] = '(P): {$a}';
$string['templatepagewidgetheading'] = '(W): {$a}';
$string['templaterequire_amd'] = 'Загрузить при помощи AMD';
$string['templaterequire_amd_desc'] = 'AMD - это механизм загрузки javascript. Если вы загружаете или ссылаетесь на библиотеки javascript в своем шаблоне, лучше отключите эту галочку. Работает только с Moodle 2.9 и выше.';
$string['templaterequire_css'] = 'Требует CSS (шаблон {$a})';
$string['templaterequire_css_desc'] = 'Ссылка (только одна) на внешний CSS-файл, требуемый для данного шаблона. Опционально.';
$string['templaterequire_jquery'] = 'Требует JQuery (шаблон {$a})';
$string['templaterequire_jquery_desc'] = 'Лучше НЕ ставить эту галочку. Достаточно много шаблонов, не использующих AMD, требуют JQuery. Установка галочки загрузкит JQuery, но не очень хорошо. В любом случае, используемая вами тема уже, возможно, подгрузила JQuery. Если нет, добавьте следующую строчку в разделе Администрирование -> Внешний вид -> Дополнительный HTML (в пункте "В тег HEAD"):<br/> &lt;script src="https://code.jquery.com/jquery-1.11.2.min.js"&gt;&lt;/script&gt;';
$string['templaterequire_js'] = 'Требует JS (шаблон {$a})';
$string['templaterequire_js_desc'] = 'Ссылка (только одна) на внешний JS-файл, требуемый для данного шаблона. Опционально.';
$string['templaterequire_js_shim'] = 'Экспорт shim-оболочки (шаблон {$a})';
$string['templaterequire_js_shim_desc'] = 'Введите значение экспортируемых shim-оболочек. ИСПОЛЬЗУЙТЕ ТОЛЬКО ТОГДА, когда вам нужна shim-оболочка.';
$string['templates'] = 'Шаблоны';
$string['templatescript'] = 'Пользовательский JS (шаблон {$a})';
$string['templatescript_desc'] = 'Если для вашего шаблона требуется пользовательский javascript, введите его здесь. Он будет запущен, как только загрузятся все элементы страницы.';
$string['templatestyle'] = 'Пользовательский CSS (шаблон {$a})';
$string['templatestyle_desc'] = 'Введите сюда используемые шаблоном пользовательские CSS. Переменные шаблона тут не работают. Только старый добрый чистый css.';
$string['templateversion'] = 'Версия данного шаблона {$a}';
$string['templateversion_desc'] = 'При совместном использовании шаблонов лучше всего поддерживать надежную версию для каждого релиза. Формат версии определяется вами.';
$string['tiny'] = 'Компактный';
$string['transcode_heading'] = 'Настройки конвертации аудио/видео файлов';
$string['type'] = 'Тип';
$string['unregistered'] = 'PoodLL не отображается, так как он не был зарегистрирован. Попросите преподавателя/администратора зарегистрировать PoodLL на PoodLL.com';
$string['usecloudnotifications'] = 'Облачные уведомления';
$string['usecloudnotifications_desc'] = 'Облачные уведомления PoodLL. Включает мгновенные уведомления о завершении облачного кодирования.';
$string['usecloudrecording'] = 'Облачная запись';
$string['usecloudrecording_desc'] = 'Облачная запись PoodLL. Эта настройка включает перекодировку и другие сервисы в облаке. Требуется для приложения PoodLL для iOS, а также для аудио- и видеозаписи html5. Записанные файлы НЕ хранятся в облаке.';
$string['useplayer'] = '{$a}-плеер';
$string['useplayerdesc'] = 'Выбранный плеер будет использовать информацию из соответствующего шаблона';
$string['value'] = 'значение';
$string['videotranscode'] = 'Автопреобр. в MP4';
$string['videotranscodedetails'] = 'Преобразует записанные/закачанные аудиофайлы в MP4 перед сохранением в Moodle. Работает для записей, сделанных на tokyo.poodll.com, и для закачанных записей при использовании FFMPEG';
$string['wboardautosave'] = 'Автосохранение (миллисекунды)';
$string['wboardautosave_details'] = 'Сохраняет рисунок, если пользователь прекратил рисование, через X миллисекунд. 0 = отключить автосохранение';
$string['wboardheight'] = 'Высота электронной доски по умолчанию';
$string['wboardwidth'] = 'Ширина электронной доски по умолчанию';
$string['whiteboardsave'] = 'Сохранить рисунок';
$string['widgetsettings'] = 'Настройки элемента интерфейса (виджета)';
$string['widgettype'] = 'виджет';
