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
 * Strings for component 'mediagallery', language 'ru', version '4.5'.
 *
 * @package     mediagallery
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addagallery'] = 'Добавить галерею';
$string['addanitem'] = 'Добавить элемент';
$string['addbulkitems'] = 'Добавить элементы массово';
$string['addfiles'] = 'Добавить файл(ы)';
$string['addsamplegallery'] = 'Добавить пример галереи';
$string['allowcomments'] = 'Разрешить комментарии';
$string['allowcomments_help'] = 'Разрешить пользователям комментировать элементы и галереи.';
$string['allowlikes'] = 'Разрешить лайки';
$string['allowlikes_help'] = 'Разрешите пользователям ставить «лайки» элементам в галерее.';
$string['areagallery'] = 'Галереи';
$string['areaitem'] = 'Элементы';
$string['arealowres'] = 'Низкое разрешение';
$string['areathumbnail'] = 'Миниатюры';
$string['assignedit'] = 'Редактировать задание';
$string['assignsubmit'] = 'Отправить ответ на задание';
$string['assignsubmitted'] = 'Задание сдано';
$string['automatic'] = 'Автоматически';
$string['beingprocessed'] = 'в процессе обработки';
$string['bottom'] = 'Внизу';
$string['caption'] = 'Подпись';
$string['caption_help'] = 'Подпись к этому элементу в вашей галерее. Эта подпись будет отображаться рядом с элементом. Если вы оставите это поле пустым, вместо подписи будет отображаться имя файла (или URL-адрес).';
$string['captionposition'] = 'Расположение подписи';
$string['carousel'] = 'Карусель';
$string['choosecontent'] = 'В приведенных ниже вариантах выберите либо файл для загрузки, либо URL-адрес.';
$string['close'] = 'Закрыть';
$string['collection'] = 'Коллекция';
$string['collection_help'] = 'Коллекция, из которой можно осуществлять поиск.';
$string['collectionwasdeleted'] = 'К сожалению, эта коллекция больше не существует и удалена из данного курса.';
$string['collmode'] = 'Режим коллекции';
$string['collmode_help'] = 'Этот параметр определяет, будет ли коллекция храниться исключительно в Moodle или будет связана с theBox. После установки это значение изменить нельзя.

<ul><li>Стандартный режим: в этом режиме коллекция, её галереи и элементы хранятся исключительно в Moodle.</li></ul>';
$string['colltype'] = 'Тип коллекции';
$string['colltype_help'] = 'Тип коллекции определяет какие пользователи могут взаимодействовать с коллекцией и ее содержимым.

<ul>
<li>Коллекция преподавателей: Только пользователи, имеющие право оценивать работы в коллекции, могут добавлять/редактировать её контент. В основном это используется преподавателями для создания коллекций примеров или набора галерей без возможности создания пользователями собственных.</li>
<li>Коллекция вкладов: Позволяет пользователям создавать свои собственные галереи и элементы, но коллекция не может использоваться в качестве части задания.</li>
<li>Коллекция работ: Пользователи могут видеть только те галереи, которые они или их группа (при групповом режиме) создали. Может использоваться в качестве части ответа на задания.</li>
<li>Коллекция рецензируемых работ: Пользователи могут просматривать галереи других пользователей/групп и ставить лайки/оставлять комментарии, если эти функции включены. Может использоваться в качестве части ответа на задания.</li></ul>';
$string['colltypeassignment'] = 'Коллекция работ';
$string['colltypecontributed'] = 'Коллекция вкладов';
$string['colltypeinstructor'] = 'Коллекция преподавателей';
$string['colltypepeerreviewed'] = 'Коллекция рецензируемых работ';
$string['colltypesingle'] = 'Одиночная коллекция';
$string['comments'] = 'Комментарии';
$string['completegallery'] = 'Полная галерея';
$string['configdisablestandardgallery'] = 'Запретить пользователям создавать стандартные галереи.';
$string['configenablethebox'] = 'Эту функцию необходимо включить, чтобы пользователи могли создавать новые коллекции и контент на основе theBox. Если она отключена, существующие коллекции theBox будут отображать сообщение о том, что элемент в данный момент недоступен. Стандартные коллекции это не затронет.';
$string['configmaxbytes'] = 'Максимальный размер файла элемента по умолчанию для всех медиа-коллекций на сайте (с учетом ограничений курса и других локальных настроек).';
$string['confirmcollectiondelete'] = 'Подтвердите удаление коллекции.';
$string['confirmgallerydelete'] = 'Подтвердить удаление галереи';
$string['confirmitemdelete'] = 'Подтвердите удаление элемента';
$string['content'] = 'Содержимое';
$string['content_help'] = 'Элемент, который вы хотите добавить в свою галерею.';
$string['contentbulk'] = 'Содержимое';
$string['contentbulk_help'] = 'Вы можете выбрать ZIP-архив, содержащий несколько изображений, которые после загрузки будут распакованы в папку с изображениями.';
$string['contentbulkheader'] = 'Здесь вы можете загрузить ZIP-архив с медиафайлами. Каждый файл из ZIP-архива будет добавлен в галерею, поэтому перед отправкой архива убедитесь, что в нём находятся только те файлы, которые вы хотите загрузить. Папки внутри архива игнорируются.';
$string['contentlinked'] = 'Содержимое';
$string['contentlinked_help'] = 'После того как элемент будет связан с содержимым в theBox, изменить связанный файл будет невозможно.';
$string['contentlinkedinfo'] = 'Этот элемент связан с файлом {$a} в theBox.';
$string['contributable'] = 'Вносимый вклад';
$string['contributable_help'] = 'Если галерея доступна для внесения вкладов, это значит, что другие пользователи могут добавлять в неё материалы. Они смогут редактировать только свои собственные элементы. Создатель галереи может удалять элементы из галереи.';
$string['copyright'] = 'Авторское право';
$string['copyright_help'] = 'Определяет, какая лицензия на авторские права установлена для всех элементов, которые вы загружаете через эту форму.';
$string['createdby'] = 'Создано: {$a}';
$string['creator'] = 'Автор';
$string['datecreated'] = 'Дата создания';
$string['deletegallery'] = 'Удалить галерею';
$string['deleteitem'] = 'Удалить элемент';
$string['deleteitemtype'] = 'Удалить {$a}';
$string['deleteorremovecollection'] = 'Если вы хотите удалить ссылку на коллекцию, не удаляя содержимое, нажмите «Отправить».<br/><br/>
Если вы хотите удалить ссылку на коллекцию и удалить содержимое внутри неё, введите DELETE в текстовое поле ниже и нажмите «Отправить».';
$string['deleteorremovecollectionwarn'] = 'Удаляя, вы подтверждаете, что:
- удаляете эту ссылку на медиа-коллекцию<br/>
- удаляете коллекцию и/или все галереи и весь контент из theBox<br/>
- отключаете все ссылки, сделанные в других курсах на эту коллекцию или её содержимое.';
$string['deleteorremovegallery'] = 'Если вы хотите удалить ссылку на галерею, не удаляя содержимое, нажмите «Отправить».<br/><br/>

Если вы хотите удалить ссылку на галерею и удалить содержимое внутри неё, введите DELETE в текстовое поле ниже и нажмите «Отправить».';
$string['deleteorremovegallerywarn'] = 'Удаляя, вы подтверждаете, что:
- удаляете эту ссылку на медиа-галерею<br/>
- удаляете медиа-галерею и всё контент из theBox<br/>
- отключаете все ссылки, сделанные в других курсах на эту медиа-галерею или её содержимое.';
$string['deleteorremoveitem'] = 'Если вы хотите удалить элемент из галереи, не удаляя содержимое, нажмите «Отправить».<br/><br/>

Если вы хотите удалить ссылку на галерею и удалить содержимое, введите DELETE в текстовое поле ниже и нажмите «Отправить».';
$string['deleteorremoveitemwarn'] = 'Удаляя, вы подтверждаете, что:
- удаляете эту ссылку на мультимедийный элемент<br/>
- удаляете мультимедийный элемент из theBox<br/>
- отключаете все ссылки на этот мультимедийный элемент, сделанные в других курсах.';
$string['disablestandardgallery'] = 'Отключить стандартные галереи';
$string['displayfullcaption'] = 'Показать весь текст подписи';
$string['download'] = 'Скачать';
$string['editgallery'] = 'Редактировать галерею';
$string['editgallerysettings'] = 'Изменить настройки галереи';
$string['edititem'] = 'Изменить элемент';
$string['edititemtype'] = 'Изменить {$a}';
$string['editthisgallery'] = 'Редактировать эту галерею';
$string['enablethebox'] = 'Включить theBox';
$string['enforcedefaults'] = 'Создать галерею с параметрами по умолчанию';
$string['enforcedefaults_help'] = 'Если этот параметр включен, то применяются настройки галереи по умолчанию, определенные инструктором.';
$string['errorchooseimportoption'] = 'Выберите вариант для импорта';
$string['errornopermissiontoadd'] = 'Вы не можете добавить галерею в эту коллекцию';
$string['errornotyouritem'] = 'Вы не можете редактировать этот медиа-объект, он принадлежит другому пользователю.';
$string['errortheboxunavailable'] = 'Извините, похоже, theBox сейчас недоступен. Пожалуйста, попробуйте позже.';
$string['errortoomanygalleries'] = 'К сожалению, вы или ваша группа превысили максимально допустимое количество галерей в этой коллекции ({$a}).';
$string['errortoomanyitems'] = 'К сожалению, в этой галерее уже есть максимально допустимое количество элементов ({$a}).';
$string['eventcollectiondeleted'] = 'Коллекция удалена';
$string['eventgallerycreated'] = 'Галерея создана';
$string['eventgallerydeleted'] = 'Галерея удалена';
$string['eventgalleryupdated'] = 'Галерея обновлена';
$string['eventgalleryviewed'] = 'Галерея просмотрена';
$string['eventitemcreated'] = 'Элемент создан';
$string['eventitemdeleted'] = 'Элемент удвлен';
$string['eventitemupdated'] = 'Элемент обновлен';
$string['exifmissing'] = 'Без этого файлы jpg/tiff могут не поворачиваться в правильном направлении в медиа-коллекциях.';
$string['export'] = 'Экспорт';
$string['exportascsv'] = 'Экспортировать как CSV';
$string['exportgallery'] = 'Экспортировать галерею';
$string['externalurl'] = 'Внешний URL';
$string['externalurl_help'] = 'В настоящее время ссылки на изображения и видео YouTube поддерживаются.';
$string['filename'] = 'Имя файла';
$string['filesize'] = 'Размер файла';
$string['foundxresults'] = 'Найдено результатов - {$a}:';
$string['gallery'] = 'Галерея';
$string['galleryfocus'] = 'Фокус галереи';
$string['galleryfocus_help'] = 'Фокус галереи по умолчанию (определяет, какие типы файлов отображаются в галерее в качестве фокуса). Если задана галерея YouTube, фокус будет привязан к видео.';
$string['galleryname'] = 'Название галереи';
$string['gallerythumbnail'] = 'Использовать как миниатюру';
$string['gallerythumbnail_help'] = 'При выборе этого параметра миниатюра данного элемента будет использоваться в качестве миниатюры для всей галереи.';
$string['galleryviewoptions'] = 'Параметры просмотра галереи';
$string['galleryviewoptions_help'] = 'Определяет параметры просмотра галереи, доступные студентам.';
$string['gridview'] = 'Вид сетки';
$string['gridviewcolumns'] = 'Столбцы в виде сетки';
$string['gridviewcolumns_help'] = 'В виде сетки, отображается количество столбцов.';
$string['gridviewrows'] = 'Строки в виде сетки';
$string['gridviewrows_help'] = 'В виде сетки, отображается количество строк.';
$string['group'] = 'Группа';
$string['group_help'] = 'Поскольку вы являетесь участником нескольких групп (или имеете разрешение на управление группами в рамках этого курса), именно с этой группой вы хотите связать галерею.';
$string['information'] = 'Информация';
$string['itemdisplay'] = 'Отобразить элемент';
$string['itemdisplay_help'] = 'Разместите этот элемент в галерее (например, в карусели).';
$string['like'] = 'Нравится';
$string['likedby'] = 'Понравилось';
$string['maxbytes'] = 'Максимальный размер элемента';
$string['maxgalleries'] = 'Максимальное количество галерей на пользователя/группу';
$string['maxgalleries_help'] = 'Максимальное количество галерей, которое пользователь (или группа при использовании группового режима) может создать в этой коллекции.

Примечание: для коллекций преподавателей это значение всегда неограничено.';
$string['maxgalleriesreached'] = 'Максимальное количество добавленных галерей';
$string['maxitems'] = 'Максимум элементов в галерее';
$string['maxitems_help'] = 'Максимальное количество элементов, которое пользователь может добавить в галерею в этой коллекции.

Примечание: для коллекций для преподавателей это значение всегда неограничено.';
$string['maxitemsreached'] = 'Максимальное количество добавленных предметов';
$string['mediagallery'] = 'Медиа-коллекция';
$string['mediagallery:addinstance'] = 'Добавлять экземпляр в медиа-коллекцию';
$string['mediagallery:comment'] = 'Комментировать галерею или элемент медиа-коллекции';
$string['mediagallery:grade'] = 'Оценивать галерею медиа';
$string['mediagallery:like'] = 'Ставить «лайки» элементам в медиа-коллекции';
$string['mediagallery:manage'] = 'Управлять экземпляром медиа-коллекции.';
$string['mediagallery:viewall'] = 'Просматривать все галереи в медиа-коллекции';
$string['mediagalleryfieldset'] = 'Пример пользовательского набора полей';
$string['mediagalleryname'] = 'Название медиа-коллекции';
$string['mediagalleryname_help'] = 'Имя, которое вы хотите дать своей медиа-коллекции.';
$string['mediainformation'] = 'Информация о медиа';
$string['mediasize'] = 'Размер медиа';
$string['mediasizelg'] = 'Большой';
$string['mediasizemd'] = 'Средний';
$string['mediasizesm'] = 'Маленький';
$string['mediatype'] = 'Тип медиа';
$string['medium'] = 'Вид медиа';
$string['medium_help'] = 'Используемый вид медиа (т.е. живопись, фотография, звук и т. д.).';
$string['metainfobulkheader'] = 'Приведенные ниже значения будут использоваться в качестве исходных метаданных для каждого из элементов, добавленных выше.';
$string['mode'] = 'Режим галереи';
$string['mode_help'] = 'Определяет тип контента, который поддерживает галерея. После установки это значение не может быть изменено.

<ul><li>Стандартный: в этом режиме пользователи могут добавлять любой контент мультимедиа по своему усмотрению.</li>
<li>YouTube: в этом режиме в галерею можно добавлять только видео с YouTube.</li></ul>';
$string['modestandard'] = 'Стандартный';
$string['modethebox'] = 'theBox';
$string['modeyoutube'] = 'YouTube';
$string['modulename'] = 'Медиа-коллекция';
$string['modulename_help'] = 'Используйте модуль «Медиа-коллекция» для создания галерей медиаконтента.

Пользователи могут создавать собственные галереи изображений, видео или аудио как самостоятельно, так и в группах.

Загруженный контент будет отображаться в виде миниатюр в формате карусели или сетки. Щелчок по любой из миниатюр увеличивает изображение и позволяет просматривать галерею. Пользователи могут ставить «лайки» и оставлять комментарии к контенту, который они видят в своих и чужих галереях.';
$string['modulenameplural'] = 'Медиа-коллекции';
$string['moralrights'] = 'Заявление о моральных правах';
$string['moralrights_help'] = 'Вы хотите отстоять свои моральные права?

Выбрав «Да», вы даете согласие на возможное использование данного материала в качестве образца работы.';
$string['noitemsadded'] = 'В эту галерею пока ничего не добавлено.';
$string['noitemsfound'] = 'Ничего не найдено.';
$string['noitemsselected'] = 'Ни один элемент не был выбран для экспорта.';
$string['originalauthor'] = 'Автор';
$string['originalauthor_help'] = 'Автор этого элемента';
$string['other'] = 'другой';
$string['otherfiles'] = 'Другие файлы';
$string['others'] = 'другие';
$string['pluginadministration'] = 'Управление медиа-коллекцией';
$string['pluginname'] = 'Медиа-коллекция';
$string['privacy:metadata:core_comments'] = 'Комментарии, связанные с галереями медиа-коллекции или элементами';
$string['privacy:metadata:core_files'] = 'Файлы, связанные с галереями медиа-коллекции или элементами';
$string['privacy:metadata:core_tag'] = 'Теги, связанные с галереями медиа-коллекции или элементами';
$string['privacy:metadata:mediagallery'] = 'Информация о медиа-галереях, созданных пользователем.';
$string['privacy:metadata:mediagallery:id'] = 'ID медиа-коллекции';
$string['privacy:metadata:mediagallery:name'] = 'Название медиа-коллекции';
$string['privacy:metadata:mediagallery:userid'] = 'ID пользователя, создавшего/владеющего медиа-коллекцией.';
$string['privacy:metadata:mediagallery_gallery'] = 'Информация о медиа галереях, созданных пользователем.';
$string['privacy:metadata:mediagallery_gallery:groupid'] = 'ID группы, в составе которой они создали галерею.';
$string['privacy:metadata:mediagallery_gallery:instanceid'] = 'ID элемента медиа-галереи, для которого пользователь предоставляет отзыв.';
$string['privacy:metadata:mediagallery_gallery:name'] = 'Название галереи.';
$string['privacy:metadata:mediagallery_gallery:userid'] = 'ID пользователя, создавшего галерею.';
$string['privacy:metadata:mediagallery_item'] = 'Информация об элементах медиа, созданных пользователем.';
$string['privacy:metadata:mediagallery_item:caption'] = 'Подпись, которую пользователь дал элементу.';
$string['privacy:metadata:mediagallery_item:description'] = 'Описание, которое пользователь дал элементу.';
$string['privacy:metadata:mediagallery_item:externalurl'] = 'Внешний URL-адрес (если таковой имеется), на который ссылается данный элемент.';
$string['privacy:metadata:mediagallery_item:galleryid'] = 'ID галереи, к которой принадлежит данный элемент.';
$string['privacy:metadata:mediagallery_item:medium'] = 'Материалы, использованные для создания произведения.';
$string['privacy:metadata:mediagallery_item:moralrights'] = 'Если пользователь заявил о своих моральных правах на данный элемент.';
$string['privacy:metadata:mediagallery_item:originalauthor'] = 'Автор/создатель произведения.';
$string['privacy:metadata:mediagallery_item:productiondate'] = 'Дата и время создания.';
$string['privacy:metadata:mediagallery_item:publisher'] = 'Издатель.';
$string['privacy:metadata:mediagallery_item:reference'] = 'Ссылка на коллекцию, к которой принадлежит произведение.';
$string['privacy:metadata:mediagallery_item:timecreated'] = 'Время создания пользователем элемента.';
$string['privacy:metadata:mediagallery_item:userid'] = 'ID пользователя, создавшего элемент.';
$string['privacy:metadata:mediagallery_userfeedback'] = 'Информация об отзывах пользователя на тот или иной элемент медиагалереи.';
$string['privacy:metadata:mediagallery_userfeedback:itemid'] = 'ID элемента медиагалереи, для которого пользователь оставляет отзыв.';
$string['privacy:metadata:mediagallery_userfeedback:liked'] = 'Если пользователь поставил «лайк» элементу.';
$string['privacy:metadata:mediagallery_userfeedback:rating'] = 'Какую оценку пользователь дал элементу (не реализовано).';
$string['privacy:metadata:mediagallery_userfeedback:userid'] = 'Пользователь, оставивший отзыв.';
$string['privacy:metadata:preference:mediasize'] = 'В каком размере пользователь предпочитает видеть элементы медиа.';
$string['productiondate'] = 'Дата выпуска';
$string['productiondate_help'] = 'Дата создания оригинала произведения.';
$string['publisher'] = 'Издатель';
$string['publisher_help'] = 'Издатель (если таковой имеется) данного произведения.';
$string['readonlyfrom'] = 'Только для чтения с';
$string['readonlyto'] = 'Только для чтения по';
$string['reference'] = 'Ссылка';
$string['reference_help'] = 'Ссылка на коллекцию (если таковая имеется), из которой взято произведение.';
$string['removecollectionconfirm'] = 'Вы уверены, что хотите удалить ссылку на эту коллекцию?';
$string['removefromcollection'] = 'Удалить из коллекции';
$string['removefromgallery'] = 'Удалить из галереи';
$string['removegalleryconfirm'] = 'Вы уверены, что хотите удалить ссылку на эту галерею?';
$string['removeitemconfirm'] = 'Вы уверены, что хотите удалить ссылку на этот элемент?';
$string['removethecollection'] = 'Удалить коллекцию';
$string['restrictavailableinfo'] = 'Чтобы ограничить период доступности данной галереи, ниже воспользуйтесь разделом «Ограничить доступ».';
$string['sample'] = 'Образец';
$string['search'] = 'Поиск';
$string['search_help'] = 'Введите ключевые слова для поиска.';
$string['searchcourseonly'] = 'Только этот курс';
$string['searchcourseonly_help'] = 'Вы хотите искать элементы в медиа-галереях только в этом курсе?';
$string['searchdisplayxtoyofzresults'] = 'Найдено  результатов: {$a->total}. Показано {$a->from}-{$a->to}:';
$string['searchresults'] = 'Результаты поиска';
$string['searchtitle'] = 'Поиск медиа-коллекции';
$string['selection'] = 'Выбор';
$string['settingsavailability'] = 'Доступность';
$string['settingsdisplay'] = 'Показать список';
$string['settingsgallery'] = 'Галерея по умолчанию';
$string['settingsgallerydisplay'] = 'Отображение галереи';
$string['settingsvisibility'] = 'Видимость';
$string['showall'] = 'Показать все';
$string['storagereport'] = 'Хранилище медиа-коллекции';
$string['storagetotalusage'] = 'Итого использовано хранилищ на сайте: {$a}.';
$string['submittedforgrading'] = 'Представлено для оценки';
$string['synclastcompleted'] = 'Последняя синхронизация завершена';
$string['syncwiththebox'] = 'Синхронизация с theBox';
$string['tagarea_mediagallery'] = 'Медиа-коллекции';
$string['tagarea_mediagallery_gallery'] = 'Медиа-галереи';
$string['tagarea_mediagallery_item'] = 'Медиа-элементы';
$string['tags'] = 'Теги';
$string['theboxisnotenabled'] = 'К сожалению, в настоящее время эта коллекция недоступна, поскольку связана с theBox, который в данный момент не активирован.';
$string['thumbnail'] = 'Миниатюры';
$string['thumbnail_help'] = 'Вы можете выбрать изображение для использования в качестве миниатюры в галерее для этого элемента.

Если вы не укажете изображение, оно будет сгенерировано автоматически из загруженного ресурса (для изображений) или значка типа файла (для других файлов).';
$string['thumbnailsperpage'] = 'Миниатюр на странице';
$string['thumbnailsperrow'] = 'Миниатюр в строке';
$string['togglefullscreen'] = 'Включить полноэкранный режим';
$string['togglesidebar'] = 'Переключить боковую панель';
$string['toomany'] = 'Слишком много галерей; удалите часть или измените тип коллекции';
$string['top'] = 'Верх';
$string['typeall'] = 'Все файлы';
$string['typeaudio'] = 'Аудио';
$string['typeimage'] = 'Изображения';
$string['typevideo'] = 'Видео';
$string['unlike'] = 'Не нравится';
$string['uploader'] = 'Загрузчик';
$string['viewgallery'] = 'Просмотр галереи';
$string['visibleinstructor'] = 'Видно преподавателям только после';
$string['visibleinstructor_help'] = 'Настройте галерею так, чтобы она была видна преподавателям курса после указанной даты. Это может быть полезно, чтобы предоставить преподавателям доступ раньше всех остальных пользователей. Менеджеры курса с соответствующими правами всегда смогут видеть галерею.';
$string['visibleother'] = 'Видно всем участникам курса после';
$string['visibleother_help'] = 'Определите, будет ли галерея видна другим пользователям после указанной даты. Менеджеры курса с соответствующими правами всегда смогут видеть галерею.';
$string['you'] = 'Вы';
$string['youmusttypedelete'] = 'Вы должны ввести DELETE, чтобы подтвердить удаление.';
$string['youtubeurl'] = 'URL YouTube';
