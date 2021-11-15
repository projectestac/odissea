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
 * Strings for component 'hub', language 'ru', version '3.11'.
 *
 * @package     hub
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activeparticipantnumberaverage'] = 'Среднее количество недавно активных участников ({$a})';
$string['activeusersnumber'] = 'Количество недавно активных пользователей ({$a})';
$string['addscreenshots'] = 'Добавить снимки экрана';
$string['advertise'] = 'Разместите информацию о Вашем курсе, чтобы желающие могли присоединиться';
$string['advertised'] = 'Для присоединившихся людей';
$string['advertiseon'] = 'Поделитесь этим курсом на {$a}';
$string['advertisepublication_help'] = 'Этот курс будет указан на Moodle.net как курс, на который люди могут записаться и быть его участником. На сайте должна быть включена самостоятельная регистрация на основе электронной почты и в этом курсе необходимо разрешить самостоятельную запись.';
$string['analyticsactions'] = 'Количество действий, соотнесенных с созданными прогнозами ({$a})';
$string['analyticsactionsnotuseful'] = 'Количество действий, помечающих прогноз как бесполезный ({$a})';
$string['analyticsenabledmodels'] = 'Количество включенных моделей прогнозирования ({$a})';
$string['analyticspredictions'] = 'Количество сгенерированных прогнозов ({$a})';
$string['audience'] = 'Аудитория';
$string['audience_help'] = 'Выберите предполагаемую аудиторию для курса.';
$string['audienceadmins'] = 'Администраторы Moodle';
$string['audienceeducators'] = 'Преподаватели';
$string['audiencestudents'] = 'Студенты';
$string['badgesnumber'] = 'Количество значков ({$a})';
$string['communityremoved'] = 'Ссылка на этот курс была удалена из Вашего списка';
$string['completeregistration'] = 'Завершенная регистрация в Moodle.net';
$string['confirmregistration'] = 'Подтверждение регистрации';
$string['contributornames'] = 'Другие авторы';
$string['contributornames_help'] = 'Вы можете использовать это поле, чтобы перечислить имена тех, кто внес вклад в разработку курса.';
$string['coursename'] = 'Название';
$string['coursepublished'] = 'Этот курс был успешно опубликован на «{$a}».';
$string['courseshortname'] = 'Краткое название';
$string['courseshortname_help'] = 'Введите краткое название своего курса. Оно не обязательно должно быть уникальным.';
$string['coursesnumber'] = 'Количество курсов ({$a})';
$string['courseunpublished'] = 'Курс «{$a->courseshortname}» более не опубликован в каталоге «{$a->hubname}».';
$string['courseurl'] = 'URL курса';
$string['courseurl_help'] = 'Это - адрес Вашего курса. Этот адрес отображается как гиперссылка в результатах поиска.';
$string['creatorname'] = 'Автор';
$string['creatorname_help'] = 'Создатель - создатель курса.';
$string['creatornotes'] = 'Примечания автора';
$string['creatornotes_help'] = 'Примечания создателя - руководство для учителей по использованию курса.';
$string['deletescreenshots'] = 'Удалить эти снимки экрана';
$string['deletescreenshots_help'] = 'Удалить все текущие загруженные скриншоты.';
$string['demourl'] = 'URL демонстрации';
$string['demourl_help'] = 'Введите адрес демонстрациионной версии своего курса. По умолчанию это адрес Вашего курса. Он отображается как гиперссылка в результатах поиска.';
$string['description'] = 'Описание';
$string['description_help'] = 'Текст описания будут отображаться в списке курсов в Moodle.net';
$string['detectednotexistingpublication'] = 'В каталоге «{$a->hubname}» присутствует курс, который больше не существует. Сообщите администрации этого каталога, что следует удалить публикацию № {$a->id}.';
$string['downloadable'] = 'Загружаемый';
$string['educationallevel'] = 'Образовательный уровень';
$string['educationallevel_help'] = 'Выберите уровень образования, которому более всего соответствует курс.';
$string['edulevelassociation'] = 'Ассоциация';
$string['edulevelcorporate'] = 'Корпоративное';
$string['edulevelgovernment'] = 'Руководство';
$string['edulevelother'] = 'Другое';
$string['edulevelprimary'] = 'Начальное';
$string['edulevelsecondary'] = 'Среднее';
$string['eduleveltertiary'] = 'Высшее';
$string['emailalert'] = 'Уведомления по электронной почте';
$string['emailalert_help'] = 'Если этот параметр включен, то администратор каталога сможет отправлять Вам электронные письма о вопросах безопасности и других важных новостях.';
$string['enrollable'] = 'Зарегистрированный';
$string['errorbadimageheightwidth'] = 'Размер изображения не должен превышать {$a->width} X {$a->height}';
$string['errorcourseinfo'] = 'Произошла ошибка при извлечении метаданных курса из узла ({$a}). Попробуйте снова извлечь метаданные курса из узла, позже перезагрузив эту страницу. Вы также можете решить продолжить процесс регистрации с метаданными по умолчанию.';
$string['errorcoursepublish'] = 'Во время публикации курса произошла ошибка ({$a}). Попробуйте снова позже.';
$string['errorcoursewronglypublished'] = 'Moodle.net вернул сообщение об ошибке публикации. Позже попробуйте снова.';
$string['errorotherhubsnotsupported'] = 'Эту страницу больше нельзя использовать для регистрации в каталогах пользовательских сайтов.';
$string['errorregistration'] = 'Во время регистрации произошла ошибка, пожалуйста, попробуйте еще раз позже. ({$a})';
$string['errorregistrationupdate'] = 'Во время обновления регистрации произошла ошибка ({$a})';
$string['errorunpublishcourses'] = 'В связи с непредвиденной ошибкой не удалось удалить курсы из Moodle.net. Попробуйте повторить операцию позже (рекомендуется) или свяжитесь с администратором Moodle.net.';
$string['errorws'] = '{$a}';
$string['errorwstokenreset'] = '{$a}. Регистрационный токен на этом сайте был сброшен. Вы можете снова зарегистрировать свой сайт.';
$string['existingscreenshotnumber'] = 'Созданные скриншоты - {$a}. Вы сможете видеть эти скриншоты на странице только после того, как администратор Moodle.net откроет Ваш курс.';
$string['existingscreenshots'] = 'Существующие снимки экрана';
$string['geolocation'] = 'Геолокация';
$string['geolocation_help'] = 'В будущем мы сможем обеспечить поиск, основанный на местоположении. Если Вы хотите задать место расположения своего курса, используйте значения широты/долготы, (например: -31.947884, 115.871285). Одним из способов определения местоположения является использование Google Maps.';
$string['imageurl'] = 'URL изображения';
$string['imageurl_help'] = 'Это изображение будет отображаться в каталоге. Оно должно быть быть всегда доступным из каталога. Максимальный размер изображения {$a->width} X {$a->height}.';
$string['issuedbadgesnumber'] = 'Количество выданных значков ({$a})';
$string['language'] = 'Язык';
$string['language_help'] = 'Основной язык этого курса';
$string['lasttimechecked'] = 'Время последней проверки';
$string['licence'] = 'Лицензия';
$string['licence_help'] = 'Укажите лицензию, под которой Вы хотите распространять Ваш курс';
$string['logourl'] = 'URL логотипа';
$string['mobilenotificationsenabled'] = 'Мобильные уведомления включены ({$a})';
$string['mobileservicesenabled'] = 'Мобильные сервисы включены ({$a})';
$string['modulenumberaverage'] = 'Среднее число модулей в курсах ({$a})';
$string['mustselectsubject'] = 'Необходимо указать тематику';
$string['name'] = 'Название';
$string['name_help'] = 'Это название будет показано в списке курсов.';
$string['neverchecked'] = 'Никогда не проверялся';
$string['next'] = 'Далее';
$string['no'] = 'Нет';
$string['nocheckstatusfromunreghub'] = 'Этот сайт не зарегистрирован в каталоге, поэтому статус не может быть проверен.';
$string['nohubselected'] = 'Каталог не выбран';
$string['none'] = 'Ни один';
$string['nosearch'] = 'Не опубликовывать каталог и курсы';
$string['notregisteredonhub'] = 'Ваш администратор должен зарегистрировать этот сайт на Moodle.net, прежде чем Вы сможете поделиться своим курсом.';
$string['operation'] = 'Действия';
$string['participantnumberaverage'] = 'Среднее число участников ({$a})';
$string['policyagreed'] = 'Уведомление о конфиденциальности и соглашение об обработке данных';
$string['policyagreeddesc'] = 'Я согласен с <a href="{$a}" target="_blank">Уведомлением о конфиденциальности и соглашением об обработке данных</a>';
$string['postaladdress'] = 'Почтовый адрес';
$string['postaladdress_help'] = 'Почтовый адрес этого сайта или лица, представляющего этот сайт.';
$string['postsnumber'] = 'Количество сообщений ({$a})';
$string['previousregistrationdeleted'] = 'Предыдущая регистрационная информация была удалена из каталога «{$a}». Вы можете перезапустить процесс регистрации. Спасибо';
$string['publicationinfo'] = 'Опубликованная информация о курсе';
$string['publish'] = 'Опубликовать';
$string['publishcourse'] = 'Опубликовать «{$a}»';
$string['publishcourseon'] = 'Опубликовать в каталоге «{$a}»';
$string['publishedon'] = 'Курс опубликован';
$string['publisheremail'] = 'Адрес электронной почты издателя';
$string['publisheremail_help'] = 'Если указать адрес электронной почты того, кто опубликовал курс, администратор каталога сможет сообщить ему о любых изменениях в статусе опубликованного курса.';
$string['publishername'] = 'Издатель';
$string['publishername_help'] = 'Издатель - человек или организация, являющиеся официальным издателем курса. Если Вы не издаете курс от чьего-то имени, то издателем будете Вы.';
$string['questionsnumber'] = 'Количество вопросов ({$a})';
$string['readvertiseon'] = 'Обновить регистрационную информацию в каталоге «{$a}»';
$string['registeredactiveuserdevices'] = 'Число активных пользователей с зарегистрированными мобильными устройствами, которые получают уведомления ({$a})';
$string['registeredcourses'] = 'Зарегистрированные курсы';
$string['registeredsites'] = 'Зарегистрированные сайты';
$string['registereduserdevices'] = 'Число пользователей с зарегистрированными мобильными устройствами ({$a})';
$string['registersite'] = 'Зарегистрироваться в каталоге «{$a}»';
$string['registerwithmoodleorg'] = 'Зарегистрируйте свой сайт';
$string['registerwithmoodleorgcomplete'] = 'Регистрация сайта завершена';
$string['registerwithmoodleorginfo'] = 'Мы хотели бы оставаться на связи и предоставлять вам важные материалы для вашего сайта Moodle! При регистрации:

* Вы можете подписаться на получение уведомлений о новых выпусках Moodle, о предупреждениях системы безопасности и других важных новостях.
* Вы можете получить доступ и активировать поддержку мобильных уведомлений со своего сайта Moodle через наше бесплатное приложение Moodle.
* Вы вносите свой вклад в нашу статистику мирового сообщества Moodle, которая помогает нам улучшать Moodle и сайты наших сообществ.
* При желании ваш сайт может быть включен в список зарегистрированных сайтов Moodle в вашей стране.';
$string['registerwithmoodleorginfoapp'] = 'О приложении Moodle';
$string['registerwithmoodleorginfosites'] = 'Другие сайты в моей стране';
$string['registerwithmoodleorginfostats'] = 'Статистика Moodle';
$string['registerwithmoodleorgremove'] = 'Вы собираетесь отменить регистрацию своего сайта. Вы больше не будете получать уведомления о предупреждениях системы безопасности, и пользователи не смогут получать поддержку уведомлений с вашего сайта в свое приложение Moodle. Однако вы сможете перерегистрироваться в любой момент! Вы уверены, что хотите продолжить?';
$string['registerwithmoodleorgupdate'] = 'Обновить регистрацию своего сайта';
$string['registrationconfirmed'] = 'Регистрация сайта подтверждена';
$string['registrationconfirmedon'] = 'Спасибо за регистрацию вашего сайта. Регистрационная информация будет поддерживаться в актуальном состоянии запланированной задачей «Регистрация сайта».';
$string['registrationinfo'] = 'Регистрационная информация';
$string['removefromhub'] = 'Убрать из Moodle.net';
$string['renewregistration'] = 'Обновить регистрацию';
$string['resourcesnumber'] = 'Количество ресурсов ({$a})';
$string['restartregistration'] = 'Перезапустить процесс регистрации';
$string['roleassignmentsnumber'] = 'Количество назначений ролей ({$a})';
$string['screenshots'] = 'Снимки экрана';
$string['screenshots_help'] = 'Любые скриншоты курса будут показаны в результатах поиска.';
$string['search'] = 'Поиск';
$string['sendfollowinginfo'] = 'Дополнительная информация';
$string['sendfollowinginfo_help'] = 'Следующая информация будет отправляться в Moodle при каждом обновлении регистрации вашего сайта (по умолчанию еженедельно, когда запускается запланированная задача «Регистрация сайта»). Эта информация используется только для общей статистики и не будет публиковаться ни в каких списках сайтов.
Кроме того, для вашей зарегистрированной версии Moodle еженедельно автоматически проверяется ссылка на сайт.';
$string['sendingcourse'] = 'Загрузка курса';
$string['sendingsize'] = 'Пожалуйста, подождите. Идет загрузка файла курса в каталог ({$a->total} Мб)...';
$string['sent'] = '...завершено';
$string['share'] = 'Поделиться курсом с другими людьми, предоставив возможность его скачать.';
$string['shared'] = 'Для желающих скачать';
$string['shareon'] = 'Загрузить этот курс в каталог «{$a}»';
$string['sharepublication_help'] = 'Резервная копия этого курса будет доступна на Moodle.net. Желающие смогут его восстановить и использовать на своем собственном сайте.';
$string['siteadmin'] = 'Администратор';
$string['siteadmin_help'] = 'Полное имя администратора сайта.';
$string['sitecommnews'] = 'Информационный бюллетень Moodle';
$string['sitecommnews_help'] = 'У вас есть возможность подписаться на нашу рассылку новостей Moodle. Подписку можно отменить в любое время.';
$string['sitecommnewsno'] = 'Нет, я не хочу получать никакие электронные письма';
$string['sitecommnewsyes'] = 'Да, я хочу получать информационный бюллетень Moodle';
$string['sitecountry'] = 'Страна';
$string['sitecountry_help'] = 'Страна, в которой находится Ваша организация или учреждение.';
$string['sitedesc'] = 'Описание';
$string['sitedesc_help'] = 'Предоставьте некоторую информацию о том, как вы используете Moodle.';
$string['siteemail'] = 'Адрес электронной почты администратора';
$string['siteemail_help'] = 'Адрес электронной почты необходим, чтобы из штаб-квартиры Moodle могли связаться с Вами в случае необходимости. Он также может использоваться для других целей, которые вы разрешите ниже. Рекомендуется ввести адрес электронной почты, связанный с должностью (например: sitemanager@example.com), а не личный адрес.';
$string['sitegeolocation'] = 'Геолокация';
$string['sitegeolocation_help'] = 'Возможно, то в будущем мы внедрим поиск по каталогам на основе географического положения. Если Вы хотите указать расположение вашего сайта, укажите здесь широту и долготу (например:  -31.947884, 115.871285). Координаты можно узнать, например, с помощью Google Maps.';
$string['sitelang'] = 'Язык';
$string['sitelang_help'] = 'Какой основной язык используется на вашем сайте Moodle?';
$string['sitename'] = 'Название';
$string['sitename_help'] = 'Название сайта, которое будет отображаться в списке сайтов, если в каталоге это разрешено.';
$string['sitephone'] = 'Телефон';
$string['sitephone_help'] = 'Ваш номер телефона будет будет виден только администратору каталога.';
$string['siteprivacy'] = 'Список сайтов';
$string['siteprivacy_help'] = 'Вы можете опубликовать свой сайт в списке зарегистрированных сайтов со ссылкой на сайт или без неё.';
$string['siteprivacylinked'] = 'Показать название моего сайта со ссылкой';
$string['siteprivacynotpublished'] = 'Не показывать мой сайт в списке';
$string['siteprivacypublished'] = 'Отображать только имя моего сайта';
$string['siteregistrationcontact'] = 'Показать форму для связи';
$string['siteregistrationcontact_help'] = 'Если вы разрешите, то другие люди из нашего сообщества Moodle (которые нуждаются в учетной записи входа в систему) смогут связаться с вами через форму на нашем сайте сообщества Moodle. Тем не менее, они никогда не смогут увидеть ваш адрес электронной почты.';
$string['siteregistrationemail'] = 'Уведомления о новых выпусках Moodle, предупреждения системы безопасности и другие важные новости';
$string['siteregistrationemail_help'] = 'Вы можете подписаться на наш небольшой список рассылки для уведомлений о новых выпусках Moodle, предупреждениях о безопасности и других важных новостях. Подписку можно отменить в любое время.';
$string['siteregistrationupdated'] = 'Регистрационная информация обновлена';
$string['siterelease'] = 'Релиз Moodle';
$string['siterelease_help'] = 'Номер релиза системы Moodle на этом сайте';
$string['sitereleasenum'] = 'Релиз Moodle ({$a})';
$string['siteurl'] = 'Адрес сайта';
$string['siteurl_help'] = 'Это адрес этого сайта. Если настройки конфиденциальности позволяют пользователям каталога видеть адреса сайтов, то отображаться будет именно этот.';
$string['siteversion'] = 'Версия Moodle';
$string['siteversion_help'] = 'Номер версии системы Moodle, установленной на этом сайте.';
$string['skipregistration'] = 'Пропустить';
$string['status'] = 'Статус публикации';
$string['statuspublished'] = 'В списке';
$string['statusunpublished'] = 'Не в списке';
$string['subject'] = 'Тематика';
$string['subject_help'] = 'Выберите основную тематику, которую охватывает курс.';
$string['tags'] = 'Теги';
$string['tags_help'] = 'Теги помогают в дальнейшем классифицировать Ваш курс и упростить его поиск. Используйте простые, значащие слова и отделяйте их запятой. Пример: математика, алгебра, геометрия.';
$string['type'] = 'Опубликован';
$string['unpublish'] = 'Убрать из публикации';
$string['unpublishalladvertisedcourses'] = 'Удалить все курсы, которые были опубликованы на Moodle.net для присоединившихся людей.';
$string['unpublishalluploadedcourses'] = 'Убрать все курсы, которые были опубликованы на Moodle.net для их скачивания';
$string['unpublishconfirmation'] = 'Вы действительно хотите убрать курс «{$a->courseshortname}» из каталога «{$a->hubname}»';
$string['unpublishcourse'] = 'Остановить публикацию {$a}';
$string['unregister'] = 'Убрать сайт из каталога';
$string['unregisterexplained'] = 'Если сайт с URL {$a} зарегистрирован, то его регистрация будет удалена.';
$string['unregisterfrom'] = 'Убрать сайт из каталога «{$a}»';
$string['unregistrationerror'] = 'Во время попытки удаления регистрации сайта произошла ошибка: {$a}';
$string['update'] = 'Обновить';
$string['updatesite'] = 'Обновить регистрационную информацию в каталоге «{$a}»';
$string['updatesiteregistration'] = 'Обновить регистрацию';
$string['updatestatus'] = 'Проверить сейчас.';
$string['urlalreadyregistered'] = 'Ваш сайт кажется уже зарегистрированным, что означает, что что-то пошло не так. Обратитесь к администратору каталога сайтов, чтобы сбросить регистрацию и повторить попытку.';
$string['usedifferentemail'] = 'Использовать другой адрес электронной почты';
$string['usersnumber'] = 'Количество пользователей ({$a})';
$string['wrongtoken'] = 'В процессе регистрации произошла неизвестная ошибка (может быть проблемы с сетью?). Пожалуйста, попробуйте снова.';
