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
 * Strings for component 'data', language 'ru', version '3.11'.
 *
 * @package     data
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Действия';
$string['add'] = 'Добавить запись';
$string['addcomment'] = 'Добавить комментарий';
$string['addentries'] = 'Добавить записи';
$string['addtemplate'] = 'Шаблон добавления';
$string['advancedsearch'] = 'Расширенный поиск';
$string['allowcomments'] = 'Разрешены комментарии по записям';
$string['alttext'] = 'Альтернативный текст';
$string['approvalstatus'] = 'Статус одобрения';
$string['approve'] = 'Одобрить';
$string['approved'] = 'Одобрено';
$string['areacontent'] = 'Поля';
$string['ascending'] = 'По возрастанию';
$string['asearchtemplate'] = 'Шаблон расширенного поиска';
$string['atmaxentry'] = 'Вы внесли максимально разрешенное количество записей!';
$string['authorfirstname'] = 'Имя автора';
$string['authorlastname'] = 'Фамилия автора';
$string['autogenallforms'] = 'Генерировать все шаблоны по умолчанию';
$string['autolinkurl'] = 'Автоматически делать ссылкой';
$string['availablefromdate'] = 'Доступно с';
$string['availabletags'] = 'Доступные теги';
$string['availabletags_help'] = 'Теги - это подстановки в шаблоне базы данных, которые при просмотре или редактировании записи будут заменены данными или другими элементами, такими как кнопка редактирования.

Поля должны иметь следующий формат: [[ИмяПоля]]. Все другие теги имеют формат ##КакойТоТег##.

В текущем шаблоне могут использоваться только теги из списка «Доступные теги».';
$string['availabletodate'] = 'Доступно до';
$string['availabletodatevalidation'] = 'Дата, до которой доступно не может быть раньше даты, с которой доступно.';
$string['blank'] = 'Пусто';
$string['buttons'] = 'Действия';
$string['bynameondate'] = 'от {$a->name} - {$a->date}';
$string['calendarend'] = '{$a} закрывается';
$string['calendarstart'] = '{$a} открывается';
$string['cancel'] = 'Отменить';
$string['cannotaccesspresentsother'] = 'У Вас нет доступа к заготовкам от других пользователей';
$string['cannotadd'] = 'Невозможно добавить записи!';
$string['cannotdeletepreset'] = 'Ошибка удаления заготовки!';
$string['cannotoverwritepreset'] = 'Ошибка перезаписи заготовки';
$string['cannotunziptopreset'] = 'Невозможно распаковать в заданный каталог';
$string['checkbox'] = 'Флажки';
$string['chooseexportfields'] = 'Выберите поля, которые хотите экспортировать:';
$string['chooseexportformat'] = 'Выберите формат, в который хотите экспортировать:';
$string['chooseorupload'] = 'Выберите файл';
$string['closebeforeopen'] = 'Вы указали дату окончания до даты начала.';
$string['columns'] = 'столбцы';
$string['comment'] = 'Комментарий';
$string['commentdeleted'] = 'Комментарий удален';
$string['commentempty'] = 'Комментарий был пустой';
$string['comments'] = 'Комментарии';
$string['commentsaved'] = 'Комментарий сохранен';
$string['commentsn'] = 'комментариев - {$a}';
$string['commentsoff'] = 'Комментарии отключены';
$string['completiondetail:entries'] = 'Надо внести записей: {$a}';
$string['completionentries'] = 'Требуемое количество записей';
$string['completionentriescount'] = 'Количество записей';
$string['completionentriesdesc'] = 'Минимальное количество требуемых записей: {$a}';
$string['configenablerssfeeds'] = 'Включенный параметр позволит делать рассылку RSS-лент для всех баз данных. Вы должны будете вручную настроить рассылку для каждой базы данных.';
$string['confirmdeletefield'] = 'Вы собираетесь удалить это поле. Вы уверены?';
$string['confirmdeleterecord'] = 'Вы уверены, что хотите удалить эту запись?';
$string['confirmdeleterecords'] = 'Вы уверены, что хотите удалить эти записи?';
$string['csstemplate'] = 'Шаблон CSS';
$string['csvfailed'] = 'Невозможно прочитать исходные данные из файла CSV';
$string['csvfile'] = 'CSV файл';
$string['csvimport'] = 'Импорт CSV файла';
$string['csvimport_help'] = 'Записи могут быть импортированы в простой текстовый файл со списком имен полей в первой строке. Данные размещаются в последующих строках, одна запись на строку.';
$string['csvwithselecteddelimiter'] = '<abbr title="Comma Separated Values">CSV</abbr>';
$string['data:addinstance'] = 'Добавлять новую базу данных';
$string['data:approve'] = 'Одобрять записи и отменять одобрение';
$string['data:comment'] = 'Добавлять комментарии';
$string['data:exportallentries'] = 'Экспортировать записи всех Баз данных';
$string['data:exportentry'] = 'Экспортировать запись Базы данных';
$string['data:exportownentry'] = 'Экспортировать свою запись Базы данных';
$string['data:exportuserinfo'] = 'Экспортировать информацию о пользователях';
$string['data:managecomments'] = 'Управлять комментариями';
$string['data:manageentries'] = 'Управлять записями';
$string['data:managetemplates'] = 'Управлять шаблонами';
$string['data:manageuserpresets'] = 'Управлять заготовками всех шаблонов';
$string['data:rate'] = 'Оценивать записи';
$string['data:readentry'] = 'Читать записи';
$string['data:view'] = 'Просматривать базу данных';
$string['data:viewallratings'] = 'Видеть все черновые оценки';
$string['data:viewalluserpresets'] = 'Видеть заготовки от всех пользователей';
$string['data:viewanyrating'] = 'Видеть итоговые оценки любого пользователя';
$string['data:viewentry'] = 'Видеть записи';
$string['data:viewrating'] = 'Видеть свои итоговые оценки';
$string['data:writeentry'] = 'Делать записи';
$string['date'] = 'Дата';
$string['dateentered'] = 'Дата добавления';
$string['defaultfielddelimiter'] = '(по умолчанию - запятая)';
$string['defaultfieldenclosure'] = '(по умолчанию - нет)';
$string['defaultsortfield'] = 'По умолчанию сортировать по полю';
$string['delcheck'] = 'Массовое удаление флажков';
$string['delete'] = 'Удалить';
$string['deleteallentries'] = 'Удалить все записи';
$string['deletecomment'] = 'Вы уверены, что хотите удалить этот комментарий?';
$string['deleted'] = 'удалено';
$string['deletefield'] = 'Удалить существующее поле';
$string['deletenotenrolled'] = 'Удалить записи незарегистрированных пользователей';
$string['deletewarning'] = 'Вы уверены, что хотите удалить эту заготовку?';
$string['descending'] = 'По убыванию';
$string['directorynotapreset'] = '{$a->directory} не заготовка: отсутствующие файлы: {$a->missing_files}';
$string['disapprove'] = 'Отменить одобрение';
$string['download'] = 'Скачать';
$string['edit'] = 'Редактировать';
$string['editcomment'] = 'Редактировать комментарий';
$string['editentry'] = 'Редактировать запись';
$string['editordisable'] = 'Отключить редактор';
$string['editorenable'] = 'Включить редактор';
$string['emptyadd'] = 'Шаблон добавления пуст, генерируется форма по умолчанию...';
$string['emptyaddform'] = 'Вы не заполнили ни одного поля!';
$string['enabletemplateeditorcheck'] = 'Вы действительно хотите включить редактор? Это может привести к изменению содержимого при сохранении шаблона.';
$string['entries'] = 'Записи';
$string['entrieslefttoadd'] = 'Вы должны добавить ещё записи ({$a->entriesleft}), чтобы этот активный элемент считался завершённым';
$string['entrieslefttoaddtoview'] = 'Вы должны добавить ещё {$a->entriesleft} запись(и, ей), чтобы иметь возможность видеть записи других участников';
$string['entry'] = 'Запись';
$string['entrysaved'] = 'Ваша запись сохранена';
$string['errormustbeteacher'] = 'Вы должны быть преподавателем, чтобы работать с этой страницей!';
$string['errormustsupplyvalue'] = 'Вы должны здесь указать значение.';
$string['errorpresetexists'] = 'Уже есть заготовка с таким названием';
$string['eventfieldcreated'] = 'Поле создано';
$string['eventfielddeleted'] = 'Поле удалено';
$string['eventfieldupdated'] = 'Поле обновлено';
$string['eventrecordcreated'] = 'Запись создана';
$string['eventrecorddeleted'] = 'Запись удалена';
$string['eventrecordupdated'] = 'Запись обновлена';
$string['eventtemplateupdated'] = 'Шаблон обновлен';
$string['eventtemplateviewed'] = 'Шаблоны просмотрены';
$string['example'] = 'Пример модуля База данных';
$string['excel'] = 'Excel';
$string['expired'] = 'К сожалению, этот элемент закрыт {$a} и более не доступен';
$string['export'] = 'Экспортировать';
$string['exportaszip'] = 'Экспортировать в ZIP';
$string['exportaszip_help'] = 'Экспорт в zip позволяет Вам сохранить шаблоны и поля в виде заготовки для скачивания. Этот архив может быть импортирован в другой курс.';
$string['exportedtozip'] = 'Экспортировано во временный ZIP...';
$string['exportentries'] = 'Экспорт записей';
$string['exportformat'] = 'Формат экспорта';
$string['exportoptions'] = 'Параметры экспорта';
$string['exportownentries'] = 'Экспортировать только свои собственные записи?({$a->mine}/{$a->all})';
$string['failedpresetdelete'] = 'Ошибка удаления заготовки!';
$string['fieldadded'] = 'Поле добавлено';
$string['fieldallowautolink'] = 'Разрешить автосвязывание';
$string['fielddeleted'] = 'Поле удалено';
$string['fielddelimiter'] = 'Разделитель полей';
$string['fielddescription'] = 'Описание поля';
$string['fieldenclosure'] = 'Символ конца поля';
$string['fieldheight'] = 'Высота';
$string['fieldheightlistview'] = 'Высота при просмотре списком';
$string['fieldheightsingleview'] = 'Высота при просмотре по одной записи';
$string['fieldids'] = 'ID полей';
$string['fieldmappings'] = 'Сопоставления полей';
$string['fieldmappings_help'] = 'Это меню позволяет сохранять данные из существующей базы данных. Чтобы сохранить данные в новом поле, нужно выбрать тип нового поля из данного списка. Любое поле можно оставить пустым, без информации. Все старые поля, не отображенные в новом списке, будет потеряны и все данные удалены.

Вы можете сопоставлять поля только того же самого типа, т.е. каждый раз из выпадающего списка выбираются различные поля. Не пытайтесь сопоставлять одно старое поле к более, чем одному новому полю.';
$string['fieldname'] = 'Название поля';
$string['fieldnametype'] = '{$a->name} ({$a->type})';
$string['fieldnotmatched'] = 'Следующие поля из файла не известны в этой базе данных: {$a}';
$string['fieldoptions'] = 'Варианты (по одному на строку)';
$string['fields'] = 'Поля';
$string['fieldupdated'] = 'Поле обновлено';
$string['fieldwidth'] = 'Ширина';
$string['fieldwidthlistview'] = 'Ширина при просмотре списком';
$string['fieldwidthsingleview'] = 'Ширина при просмотре по одной записи';
$string['file'] = 'Файл';
$string['fileencoding'] = 'Кодировка';
$string['filesnotgenerated'] = 'Не все файлы были созданы: {$a}';
$string['filtername'] = 'Автосвязывание Базы данных';
$string['footer'] = 'Нижний колонтитул';
$string['forcelinkname'] = 'Принудительное название для ссылки';
$string['foundnorecords'] = 'Не найдено ни одной записи (<a href="{$a->reseturl}">Сбросить фильтры</a>)';
$string['foundrecords'] = 'Найдено записей: {$a->num}/{$a->max}. (<a href="{$a->reseturl}">Сбросить фильтры</a>)';
$string['fromfile'] = 'Импортировать из ZIP архива';
$string['fromfile_help'] = 'Импорт из ZIP-архива позволяет просматривать и загружать заготовки шаблонов и полей из ZIP-файла.';
$string['generateerror'] = 'Созданы не все файлы!';
$string['header'] = 'Заголовок';
$string['headeraddtemplate'] = 'Определение интерфейса добавления и редактирования записей';
$string['headerasearchtemplate'] = 'Определение интерфейса Расширенного поиска';
$string['headercsstemplate'] = 'Определение локальных CSS стилей для других шаблонов';
$string['headerjstemplate'] = 'Определяет пользовательский Javascript для управления способом отображения элементов в шаблонах Списка, Одиночной записи или Добавления записи.';
$string['headerlisttemplate'] = 'Определение интерфейса просмотра списка записей';
$string['headerrsstemplate'] = 'Определение структуры RSS-ленты';
$string['headersingletemplate'] = 'Определение интерфейса просмотра по одной записи';
$string['importentries'] = 'Импорт записей';
$string['importsuccess'] = 'Заготовка была успешно применена.';
$string['includeapproval'] = 'Включить состояние одобрения';
$string['includetags'] = 'Включить теги';
$string['includetime'] = 'Включить время добавления/изменения';
$string['includeuserdetails'] = 'Включить информацию о пользователях';
$string['indicator:cognitivedepth'] = 'База данных: познавательный аспект';
$string['indicator:cognitivedepth_help'] = 'Этот показатель основан на  глубине познания, достигнутой студентом при работе с Базами Данных.';
$string['indicator:cognitivedepthdef'] = 'База данных: познавательный аспект';
$string['indicator:cognitivedepthdef_help'] = 'Участник достиг этого процента познавательного взаимодействия, предлагаемого Базами данных в течение этого интервала анализа (Уровни = Нет просмотра, Просмотр, Отправка ответа)';
$string['indicator:socialbreadth'] = 'База данных: социальный аспект';
$string['indicator:socialbreadth_help'] = 'Этот показатель основан на широте общения, которая может быть достигнута студентом при работе с элементом База данных.';
$string['indicator:socialbreadthdef'] = 'База данных: социальный аспект';
$string['indicator:socialbreadthdef_help'] = 'Участник достиг этого процента социальной активности, предлагаемой Базами данных в течение этого интервала анализа (Уровни = нет участия, единственный участник)';
$string['insufficiententries'] = 'необходимо добавить больше записей для просмотра базы данных';
$string['intro'] = 'Описание';
$string['invalidaccess'] = 'Корректно эта страница не доступна';
$string['invalidfieldid'] = 'Неправильный ID поля';
$string['invalidfieldname'] = 'Пожалуйста, выберите другое название для этого поля';
$string['invalidfieldtype'] = 'Неправильный тип поля';
$string['invalidid'] = 'Неправильный ID';
$string['invalidpreset'] = '{$a} - не заготовка.';
$string['invalidrecord'] = 'Неправильная запись';
$string['invalidurl'] = 'Вы указали некорректный адрес';
$string['jstemplate'] = 'Шаблон Javascript';
$string['latitude'] = 'Широта';
$string['latlong'] = 'Координаты';
$string['latlongboth'] = 'Необходимо задать и широту, и долготу.';
$string['latlongdownloadallhint'] = 'Загрузить все записи в формате KML';
$string['latlongkmllabelling'] = 'Вид метки записей в KML файлах (Google Earth)';
$string['latlonglinkservicesdisplayed'] = 'Отображать ссылки в';
$string['latlongotherfields'] = 'Другие поля';
$string['list'] = 'Просмотр списком';
$string['listtemplate'] = 'Шаблон списка';
$string['longitude'] = 'Долгота';
$string['manageapproved'] = 'Разрешить редактирование одобренных записей';
$string['manageapproved_help'] = 'Если параметр отключен, пользователь, добавивший одобренные записи, больше не сможет их изменить или удалять. Этот параметр не учитывается, если не включен параметр «Требуется одобрение».';
$string['mapexistingfield'] = 'Сопоставить с полем {$a}';
$string['mapnewfield'] = 'Создать новое поле';
$string['mappingwarning'] = 'Все старые поля, не сопоставленные с новыми, будут пропущены и все данные этих полей будут удалены.';
$string['maxentries'] = 'Максимум записей';
$string['maxentries_help'] = 'Максимальное число записей от студента, разрешенное для внесения в базу данных.';
$string['maxsize'] = 'Максимальный размер';
$string['menu'] = 'Выпадающий список';
$string['menuchoose'] = 'Выбрать...';
$string['missingdata'] = 'Данные ID или объект должны быть предоставлены в классе поля';
$string['missingfield'] = 'Программная ошибка: Вы должны указать поле и/или данные при определении класса поля.';
$string['modulename'] = 'База данных';
$string['modulename_help'] = 'База данных позволяет участникам создавать, корректировать записи и искать записи из их набора.

Структура записей определяется с использованием различных типов полей, таких как краткий текст, раскрывающийся список, текстовая область, URL-адрес, изображение или файл.

Как учитель, вы можете комментировать и оценивать записи. Вы также можете разрешить учащимся оценивать и комментировать записи (оценка коллег). Оценки могут быть объединены для формирования окончательной оценки, которая записывается в журнал оценок.

Если включен фильтр автоматического связывания с базой данных, любые записи в базе данных будут автоматически связываться со словами или фразами, появляющимися в курсе.

База данных имеет множество применений, таких как:

* совместные коллекции веб-ссылок, книг, рецензий на книги, журнальные ссылки, библиографические списки и т.д.
* отображение созданных студентами фотографий, плакатов, веб-сайтов или стихов для просмотра и взаимных комментариев.';
$string['modulenameplural'] = 'Базы данных';
$string['more'] = 'Просмотр записи';
$string['moreurl'] = 'Адрес записи';
$string['movezipfailed'] = 'Невозможно переместить ZIP';
$string['multientry'] = 'Повторяющиеся записи';
$string['multimenu'] = 'Меню';
$string['multipletags'] = 'Найдены повторяющиеся теги! Шаблон не сохранен';
$string['newentry'] = 'Новая запись';
$string['newfield'] = 'Создать новое поле';
$string['newfield_help'] = 'Поля предназначены для ввода информации. Каждая запись в элементе курса «База данных» состоит из нескольких полей разнообразных типов. Если выбрать тип поля «Дата», то участники смогут выбрать год, месяц и день из выпадающего списка. Если указать тип «Изображение», то участники смогут загрузить изображение. А если выбрать тип «Флажки», то появится возможность выбрать один или несколько вариантов из указанных.

Каждое поле в базе данных должно иметь уникальное название. Описание поля является необязательным.';
$string['noaccess'] = 'У Вас нет доступа к этой странице';
$string['nodefinedfields'] = 'В новой заготовке не определены поля!';
$string['nofieldcontent'] = 'Содержимое поля не найдено';
$string['nofieldindatabase'] = 'Для этой Базы данных не определено ни одного поля';
$string['nolisttemplate'] = 'Шаблон списка еще не определен';
$string['nomatch'] = 'Соответствующих записей не найдено!';
$string['nomaximum'] = 'Максимум не определен';
$string['norecords'] = 'Нет записей в базе данных';
$string['nosingletemplate'] = 'Шаблон одиночной записи еще не определен';
$string['notapproved'] = 'Запись еще не утверждена.';
$string['notinjectivemap'] = 'Не совпадающее сопоставление';
$string['notopenyet'] = 'К сожалению, эта база данных не доступна до {$a}';
$string['number'] = 'Число';
$string['numberrssarticles'] = 'Записей в RSS-ленте';
$string['numnotapproved'] = 'Ожидают одобрения';
$string['numrecords'] = 'записей: <strong>{$a}</strong>';
$string['ods'] = '<abbr title="OpenDocument Spreadsheet">ODS</abbr>&nbsp;(OpenOffice)';
$string['openafterclose'] = 'Вы указали дату открытия после даты закрытия';
$string['optionaldescription'] = 'Краткое описание (необязательно)';
$string['optionalfilename'] = 'Имя файла (необязательно)';
$string['other'] = 'Другое';
$string['overrwritedesc'] = 'Заменить заготовку, если она уже существует';
$string['overwrite'] = 'Заменить';
$string['overwritesettings'] = 'Заменить текущие настройки';
$string['page-mod-data-x'] = 'Страница любой Базы данных';
$string['pagesize'] = 'Записей на страницу';
$string['participants'] = 'Участники';
$string['picture'] = 'Изображение';
$string['pleaseaddsome'] = 'Сначала создайте поля с помощью выпадающего меню, расположенного ниже, либо <a href="{$a}">выберите одну из заготовок</a>.';
$string['pluginadministration'] = 'Управление базой данных';
$string['pluginname'] = 'База данных';
$string['portfolionotfile'] = 'Экспорт предпочтительнее в портфолио, чем в файл (только CSV и Leap2a)';
$string['presetinfo'] = 'Сохранение в виде заготовки сделает этот шаблон общим. Другие пользователи смогут использовать его в своих базах данных.';
$string['presets'] = 'Заготовки';
$string['privacy:metadata:commentpurpose'] = 'Комментарии к записям базы данных';
$string['privacy:metadata:data_content'] = 'Представлен один ответ в одно поле в базе данных.';
$string['privacy:metadata:data_content:content'] = 'Содержимое';
$string['privacy:metadata:data_content:content1'] = 'Дополнительное содержимое 1';
$string['privacy:metadata:data_content:content2'] = 'Дополнительное содержимое 2';
$string['privacy:metadata:data_content:content3'] = 'Дополнительное содержимое 3';
$string['privacy:metadata:data_content:content4'] = 'Дополнительное содержимое 4';
$string['privacy:metadata:data_content:fieldid'] = 'ID поля';
$string['privacy:metadata:data_records'] = 'Представлены записи в базе данных';
$string['privacy:metadata:data_records:approved'] = 'Статус «Одобрено»';
$string['privacy:metadata:data_records:groupid'] = 'Группа';
$string['privacy:metadata:data_records:timecreated'] = 'Время создания записи';
$string['privacy:metadata:data_records:timemodified'] = 'Время последнего изменения записи';
$string['privacy:metadata:data_records:userid'] = 'Пользователь, который создал запись';
$string['privacy:metadata:datafieldnpluginsummary'] = 'Поля Базы данных';
$string['privacy:metadata:filepurpose'] = 'Файл, прикрепленный к записи базы данных';
$string['privacy:metadata:ratingpurpose'] = 'Оценки записей в базе данных';
$string['privacy:metadata:tagpurpose'] = 'Теги в записях базы данных';
$string['radiobutton'] = 'Переключатель';
$string['recordapproved'] = 'Запись одобрена';
$string['recorddeleted'] = 'Запись удалена';
$string['recorddisapproved'] = 'Снято одобрение записи';
$string['recordsnotsaved'] = 'Ни одной записи не сохранено. Пожалуйста, проверьте формат загружаемого файла';
$string['recordssaved'] = 'записи сохранены';
$string['removealldatatags'] = 'Удалить все теги базы данных';
$string['requireapproval'] = 'Требовать одобрение?';
$string['requireapproval_help'] = 'Если параметр включен, то записи должны быть одобрены преподавателем. Только после одобрения они будут доступны всем.';
$string['required'] = 'Обязательно';
$string['requiredentries'] = 'Необходимое количество записей';
$string['requiredentries_help'] = 'Количество записей, которое должен представить студент, чтобы его деятельность могла считаться завершенной';
$string['requiredentriestoview'] = 'Количество записей, необходимое для просмотра';
$string['requiredentriestoview_help'] = 'Количество записей, которые должен предоставить студент, прежде чем он сможет просматривать записи других студентов.

Примечание: Если перед просмотром требуются свои записи, то автосвязывающий базу данных фильтр должен быть отключен. Причина - автосвязывающий базу данных фильтр не может определить, внес ли пользователь  требуемое количество записей.';
$string['requiredentrieswarning'] = 'Этот параметр был заменен параметром «Требовать записи» выполнения элемента курса';
$string['requiredfield'] = 'Обязательное поле';
$string['resetsettings'] = 'Сбросить фильтры';
$string['resettemplate'] = 'Сбросить шаблон';
$string['resizingimages'] = 'Изменение размера миниатюр изображений...';
$string['rows'] = 'строк';
$string['rssglobaldisabled'] = 'Отключено. Смотрите переменные в конфигурации сайта.';
$string['rsstemplate'] = 'Шаблон RSS';
$string['rsstitletemplate'] = 'Шаблон заголовка RSS';
$string['rsstype'] = 'RSS-лента для этого элемента курса';
$string['save'] = 'Сохранить';
$string['saveandadd'] = 'Сохранить и добавить еще';
$string['saveandview'] = 'Сохранить и просмотреть';
$string['saveaspreset'] = 'Сохранить как заготовку';
$string['saveaspreset_help'] = 'Сохранение в виде заготовки делает общими шаблоны и поля базы данных. Все на сайте смогут их использовать. (Вы всегда можете удалить заготовку из списка доступных.)';
$string['savesettings'] = 'Сохранить настройки';
$string['savesuccess'] = 'Сохранено успешно. Ваша заготовка теперь может быть доступна на всем сайте.';
$string['savetemplate'] = 'Сохранить шаблон';
$string['search'] = 'Поиск';
$string['search:activity'] = 'База данных — информация об элементе курса';
$string['search:entry'] = 'База данных - записи';
$string['selectedrequired'] = 'Все выбранные требуются';
$string['selectexportoptions'] = 'Выберите параметры экспорта';
$string['selectfields'] = 'Выберите поля';
$string['showall'] = 'Показать все записи';
$string['single'] = 'Просмотр по одной записи';
$string['singletemplate'] = 'Шаблон одиночной записи';
$string['subplugintype_datafield'] = 'Тип поля Базы данных';
$string['subplugintype_datafield_plural'] = 'Типы полей Базы данных';
$string['subplugintype_datapreset'] = 'Заготовка';
$string['subplugintype_datapreset_plural'] = 'Заготовки';
$string['tagarea_data_records'] = 'Записи данных';
$string['tags'] = 'Теги';
$string['tagsdeleted'] = 'Теги базы данных были удалены';
$string['teachersandstudents'] = '<strong>{$a->teachers}</strong> и <strong>{$a->students}</strong>';
$string['templates'] = 'Шаблоны';
$string['templatesaved'] = 'Шаблон сохранен';
$string['text'] = 'Текст';
$string['textarea'] = 'Текстовая область';
$string['timeadded'] = 'Время добавления';
$string['timemodified'] = 'Время изменения';
$string['todatabase'] = 'в эту Базу данных';
$string['type'] = 'Тип поля';
$string['undefinedprocessactionmethod'] = 'Никакой метод не определен в Data_Preset по обработке действия «{$a}».';
$string['unsupportedexport'] = '{$a->fieldtype} не может быть экспортировано';
$string['unsupportedfields'] = 'Неподдерживаемые поля';
$string['unsupportedfieldslist'] = 'Следующие поля нельзя экспортировать:';
$string['updatefield'] = 'Обновить существующее поле';
$string['uploadfile'] = 'Загрузить файл';
$string['uploadrecords'] = 'Загрузить записи из файла';
$string['uploadrecords_help'] = 'Записи могут быть загружены из текстового файла. Формат файла должен выглядеть следующим образом:

* Каждая строка файла содержит одну запись
* Каждая запись - ряд данных, разделенных запятыми (или другими разделителями)
* Первая запись содержит список имен полей, определяющий формат остальных записей файла.

Каждое поле каждой записи ограждено символами, разделяющими поля. Обычно это может быть оставлено без изменений.';
$string['url'] = 'URL';
$string['usedate'] = 'Включить в поиск';
$string['usestandard'] = 'Использовать заготовку';
$string['usestandard_help'] = 'Чтобы использовать доступную для всего сайта заготовку, выберите ее из списка.

(Если это Вы добавили заготовку в список с помощью кнопки «Сохранить как заготовку», то у Вас есть возможность ее удаления).';
$string['viewfromdate'] = 'Просмотр только с';
$string['viewtodate'] = 'Просмотр только по';
$string['viewtodatevalidation'] = 'Дата, до которой действует «Только для чтения» не может быть раньше даты, с которой действует «Только для чтения».';
$string['wrongdataid'] = 'Неправильный ID';
