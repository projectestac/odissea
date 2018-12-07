<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'plugin', language 'ru', branch 'MOODLE_34_STABLE'
 *
 * @package   plugin
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Действия';
$string['availability'] = 'Доступность';
$string['cancelinstallall'] = 'Отменить новые установки ({$a})';
$string['cancelinstallhead'] = 'Отмена установки плагинов';
$string['cancelinstallinfo'] = 'Следующие плагины еще не полностью установлены, поэтому их установка может быть отменена. Чтобы отменить установку плагина необходимо немедленно удалить папку плагина с сервера. Убедитесь, что это именно то, что Вы хотите сделать, чтобы избежать потери важных данных (в том числе Ваших изменений в коде плагина).';
$string['cancelinstallinfodir'] = 'Этот каталог будет удален: {$a}';
$string['cancelinstallone'] = 'Отменить эту установку';
$string['cancelupgradeall'] = 'Отменить обновления ({$a})';
$string['cancelupgradehead'] = 'Восстановление предыдущей версии плагинов';
$string['cancelupgradeone'] = 'Отменить это обновление';
$string['checkforupdates'] = 'Проверить наличие обновлений';
$string['checkforupdateslast'] = 'Последняя проверка обновлений: {$a}';
$string['dependencyavailable'] = 'Доступно';
$string['dependencyfails'] = 'Неудачно';
$string['dependencyinstall'] = 'Установить';
$string['dependencyinstallhead'] = 'Установка плагинов, необходимых для удовлетворения зависимостей';
$string['dependencyinstallmissing'] = 'Установить плагины, необходимые для удовлетворения зависимостей ({$a})';
$string['dependencymissing'] = 'Отсутствует';
$string['dependencyunavailable'] = 'Недоступно';
$string['dependencyupload'] = 'Загрузить';
$string['dependencyuploadmissing'] = 'Загрузить ZIP-файлы';
$string['detectedmisplacedplugin'] = 'Плагин «{$a->component}» расположен неверно - «{$a->current}»; ожидаемое расположение - «{$a->expected}»';
$string['displayname'] = 'Название плагина';
$string['err_response_curl'] = 'Невозможно получить имеющиеся обновления данных - непредвиденная ошибка cURL.';
$string['err_response_format_version'] = 'Непредвиденная версия формата ответа. Попробуйте еще раз проверить наличие обновлений.';
$string['err_response_http_code'] = 'Невозможно получить информацию о доступных обновлениях - непредвиденный код ответа HTTP.';
$string['filterall'] = 'Отображать все';
$string['filtercontribonly'] = 'Отображать только дополнения';
$string['filterupdatesonly'] = 'Отображать только с доступными обновлениями';
$string['isenabled'] = 'Разрешить?';
$string['misdepinfoplugin'] = 'Информация о плагине';
$string['misdepinfoversion'] = 'Информация о версии';
$string['misdepsavail'] = 'Доступные плагины, необходимые для удовлетворения зависимостей';
$string['misdepsunavail'] = 'Недоступные плагины, необходимые для удовлетворения зависимостей';
$string['misdepsunavaillist'] = 'Не найдена версия, способная удовлетворить зависимость: {$a}.';
$string['misdepsunknownlist'] = 'Отсутствует в каталоге плагинов: <strong>{$a}</strong>.';
$string['moodleversion'] = 'Moodle {$a}';
$string['noneinstalled'] = 'Плагинов этого типа не установлено';
$string['notdownloadable'] = 'Не удается загрузить пакет';
$string['notdownloadable_help'] = 'ZIP-пакет с обновлением не может быть загружен автоматически. Обратитесь к странице документации для получения дополнительной помощи.';
$string['notes'] = 'Заметки';
$string['notwritable'] = 'Файлы плагинов не перезаписываются';
$string['notwritable_help'] = 'У Вас включено автоматическое применение обновлений и есть доступное обновление для этого плагина. Однако, веб-сервер не может перезаписать файлы плагина и обновление не может быть установлено автоматически.

Вам необходимо сделать папку с плагином и все ее содержимое доступным для записи, чтобы получить возможность установить имеющиеся обновления автоматически. Также может потребоваться доступ на запись к родительской папке, содержащей все плагины этого типа.';
$string['otherplugin'] = '{$a->component}';
$string['otherpluginversion'] = '{$a->component} ({$a->version})';
$string['overviewall'] = 'Все плагины';
$string['overviewext'] = 'Дополнения';
$string['overviewupdatable'] = 'Доступные обновления';
$string['packagesdebug'] = 'Включено отображение отладочной информации';
$string['packagesdownloading'] = 'Идет загрузка {$a}';
$string['packagesextracting'] = 'Идет извлечение {$a}';
$string['packagesvalidating'] = 'Идет проверка {$a}';
$string['packagesvalidatingfailed'] = 'Установка отменена в связи с ошибкой проверки';
$string['packagesvalidatingok'] = 'Проверка прошла успешна, установка может быть продолжена';
$string['plugincheckall'] = 'Все плагины';
$string['plugincheckattention'] = 'Плагины, требующие внимания';
$string['pluginchecknone'] = 'Сейчас нет плагинов, требующих внимания';
$string['pluginchecknotice'] = 'На этой странице отображаются плагины, которые могут потребовать особого внимания в процессе обновления. Это новые плагины, ожидающие установки, плагины ожидающие обновления, отсутствующие плагины и т.п. Дополнения выделены при наличии доступных для них обновлений. Рекомендуется проверить, существуют ли более свежие версии доступных дополнений и обновить их исходный код перед продолжением обновления Moodle.';
$string['plugindisable'] = 'Отключить';
$string['plugindisabled'] = 'Отключено';
$string['pluginenable'] = 'Включить';
$string['pluginenabled'] = 'Включено';
$string['release'] = 'Релиз';
$string['requiredby'] = 'Требуется для: {$a}';
$string['requires'] = 'Необходимо';
$string['rootdir'] = 'Каталог';
$string['settings'] = 'Установки';
$string['source'] = 'Источник';
$string['sourceext'] = 'Дополнение';
$string['sourcestd'] = 'Стандартный';
$string['status'] = 'Статус';
$string['status_delete'] = 'Будет удален';
$string['status_downgrade'] = 'Более новая версия уже установлена!';
$string['status_missing'] = 'Отсутствует на диске!';
$string['status_new'] = 'Должен быть установлен';
$string['status_nodb'] = 'Нет в базе данных';
$string['status_upgrade'] = 'Должен быть обновлен';
$string['status_uptodate'] = 'Установлен';
$string['supportedconversions'] = 'Поддерживаемые преобразования документов';
$string['supportedmoodleversions'] = 'Поддерживаемые версии Moodle';
$string['systemname'] = 'Идентификатор';
$string['type_antivirus'] = 'Антивирусный плагин';
$string['type_antivirus_plural'] = 'Антивирусные плагины';
$string['type_auth'] = 'Метод аутентификации';
$string['type_auth_plural'] = 'Методы аутентификации';
$string['type_availability'] = 'Ограничение доступности';
$string['type_availability_plural'] = 'Ограничения доступности';
$string['type_block'] = 'Блок';
$string['type_block_plural'] = 'Блоки';
$string['type_cachelock'] = 'Обработчик блокировок кэша';
$string['type_cachelock_plural'] = 'Обработчики блокировок кэша';
$string['type_cachestore'] = 'Хранилище кэша';
$string['type_cachestore_plural'] = 'Хранилища кэша';
$string['type_calendartype'] = 'Тип календаря';
$string['type_calendartype_plural'] = 'Типы календарей';
$string['type_coursereport'] = 'Отчет по курсу';
$string['type_coursereport_plural'] = 'Отчеты по курсам';
$string['type_dataformat'] = 'Формат данных';
$string['type_dataformat_plural'] = 'Форматы данных';
$string['type_editor'] = 'Редактор';
$string['type_editor_plural'] = 'Редакторы';
$string['type_enrol'] = 'Способ записи';
$string['type_enrol_plural'] = 'Способы записи';
$string['type_fileconverter'] = 'Конвертер документов';
$string['type_fileconvertermanage'] = 'Управление конвертерами документов';
$string['type_fileconverter_plural'] = 'Конвертеры документов';
$string['type_filter'] = 'Фильтр';
$string['type_filter_plural'] = 'Текстовые фильтры';
$string['type_format'] = 'Формат курса';
$string['type_format_plural'] = 'Форматы курсов';
$string['type_gradeexport'] = 'Метод экспорта оценки';
$string['type_gradeexport_plural'] = 'Методы экспорта оценки';
$string['type_gradeimport'] = 'Метод импорта оценки';
$string['type_gradeimport_plural'] = 'Методы импорта оценки';
$string['type_gradereport'] = 'Отчет журнала оценок';
$string['type_gradereport_plural'] = 'Отчеты журнала оценок';
$string['type_gradingform'] = 'Расширенный способ оценивания';
$string['type_gradingform_plural'] = 'Расширенные способы оценивания';
$string['type_local'] = 'Локальный плагин';
$string['type_local_plural'] = 'Локальные плагины';
$string['type_media'] = 'Медиаплеер';
$string['type_media_plural'] = 'Медиаплееры';
$string['type_message'] = 'Вывод сообщений';
$string['type_message_plural'] = 'Вывод сообщений';
$string['type_mnetservice'] = 'Служба MNet';
$string['type_mnetservice_plural'] = 'Службы MNet';
$string['type_mod'] = 'Модуль элемента курса';
$string['type_mod_plural'] = 'Модули элементов курса';
$string['type_plagiarism'] = 'Плагин предотвращение плагиата';
$string['type_plagiarism_plural'] = 'Плагины предотвращение плагиата';
$string['type_portfolio'] = 'Портфолио';
$string['type_portfolio_plural'] = 'Портфолио';
$string['type_profilefield'] = 'Тип поля профиля';
$string['type_profilefield_plural'] = 'Типы полей профиля';
$string['type_qbehaviour'] = 'Поведение вопросов';
$string['type_qbehaviour_plural'] = 'Поведение вопросов';
$string['type_qformat'] = 'Формат импорта/экспорта вопросов';
$string['type_qformat_plural'] = 'Форматы импорта/экспорта вопросов';
$string['type_qtype'] = 'Тип вопроса';
$string['type_qtype_plural'] = 'Типы вопросов';
$string['type_report'] = 'Отчет по сайту';
$string['type_report_plural'] = 'Отчеты по сайту';
$string['type_repository'] = 'Хранилище';
$string['type_repository_plural'] = 'Хранилища';
$string['type_search'] = 'Поисковая машина';
$string['type_search_plural'] = 'Поисковые машины';
$string['type_theme'] = 'Тема оформления';
$string['type_theme_plural'] = 'Темы оформления';
$string['type_tool'] = 'Инструмент администрирования';
$string['type_tool_plural'] = 'Инструменты администрирования';
$string['type_webservice'] = 'Протокол веб-службы';
$string['type_webservice_plural'] = 'Протоколы веб-служб';
$string['uninstall'] = 'Удалить';
$string['uninstallconfirm'] = 'Вы собираетесь удалить плагин «<em>{$a->name}</em>». При этом из базы данных будет удалено всё, что связано с этим плагином, в том числе его настройки, записи журнала событий, файлы пользователя, управляемые с помощью плагина и т.д. Назад пути не будет - системой Moodle не будет создано никаких резервных копий для последующего восстановления плагина. Вы УВЕРЕНЫ, что хотите продолжить?';
$string['uninstalldelete'] = 'Все данные, связанные с плагином «<em>{$a->name}</em>» были удалены из базы данных. Для предотвращения самоустановки плагина, его каталог «<em>{$a->rootdir}</em>» теперь должен быть вручную удален с сервера. Moodle самостоятельно не может удалить каталог из-за отсутствия прав на запись.';
$string['uninstalldeleteconfirm'] = 'Все данные, связанные с плагином «<em>{$a->name}</em>» были удалены из базы данных. Для предотвращения самоустановки плагина, его каталог «<em>{$a->rootdir}</em>» теперь должен быть удален с сервера. Вы хотите сейчас удалить каталог плагина?';
$string['uninstalldeleteconfirmexternal'] = 'Вероятно текущая версия плагина была получена через систему управления исходным кодом ({$a}). При удалении каталога плагина Вы можете потерять важные локальные изменения кода. Перед продолжением убедитесь, что Вы осознанно хотите удалить папку плагинов.';
$string['uninstallextraconfirmblock'] = 'Экземпляров этого блока: {$a->instances}.';
$string['uninstallextraconfirmenrol'] = 'С помощью этого модуля зачислено пользователей: {$a->enrolments}.';
$string['uninstallextraconfirmmod'] = 'Экземпляров этого модуля: {$a->instances}. Курсов, где используется модуль: {$a->courses}.';
$string['uninstalling'] = 'Удаление плагина «{$a->name}»';
$string['updateavailable'] = 'Доступна новая версия {$a}!';
$string['updateavailable_moreinfo'] = 'Подробнее...';
$string['updateavailable_release'] = 'Релиз {$a}';
$string['updatepluginconfirm'] = 'Подтверждение обновления плагина';
$string['updatepluginconfirmexternal'] = 'Похоже, что текущая версия плагина была получена через систему управления исходным кодом ({$a}). Если Вы установите это обновление, то больше не будете иметь возможность получать обновления плагина из системы управления исходным кодом. Пожалуйста, перед продолжением убедитесь, что Вы действительно хотите обновить плагин.';
$string['updatepluginconfirminfo'] = 'Вы собираетесь установить новую версию плагина  «<strong>{$a->name}</strong>». ZIP-пакет с версией {$a->version} этого плагина будет загружен по ссылке <a href="{$a->url}">{$a->url}</a> и распакован в каталог с системой Moodle, чтобы произвести обновление.';
$string['updatepluginconfirmwarning'] = 'Обратите внимание, что Moodle перед обновлением автоматически не сделает резервную копию базы данных. Вам настоятельно рекомендуется сейчас сделать полную резервную копию, чтобы справиться с редким случаем, когда новый код содержит ошибки, которые сделают Ваш сайт недоступным или даже испортят базу данных. Вы действуете на свой страх и риск.';
$string['validationmsg_componentmatch'] = 'Полное имя компонента';
$string['validationmsg_componentmismatchname'] = 'Несовпадение названия плагина';
$string['validationmsg_componentmismatchname_help'] = 'В некоторых ZIP-пакетах (например, в генерируемых сервисом Github) корневой каталог может иметь неправильное название. Вам необходимо исправить название корневого каталога в соответствии с указанным названием плагина.';
$string['validationmsg_componentmismatchname_info'] = 'В плагине указано его название - «{$a}», но оно не совпадает с названием корневого каталога.';
$string['validationmsg_componentmismatchtype'] = 'Несоответствие типа плагина';
$string['validationmsg_componentmismatchtype_info'] = 'Ожидался тип «{$a->expected}», но в плагине указан его тип как «{$a->found}».';
$string['validationmsg_filenotexists'] = 'Извлеченный файл не найден';
$string['validationmsg_filesnumber'] = 'В пакете не хватает файлов.';
$string['validationmsg_filestatus'] = 'Не удалось извлечь все файлы';
$string['validationmsg_filestatus_info'] = 'Попытка извлечения файла «{$a->file}» привела к ошибке «{$a->status}».';
$string['validationmsg_foundlangfile'] = 'Языковой файл найден';
$string['validationmsglevel_debug'] = 'Отладка';
$string['validationmsglevel_error'] = 'Ошибка';
$string['validationmsglevel_info'] = 'OK';
$string['validationmsglevel_warning'] = 'Предупреждение';
$string['validationmsg_maturity'] = 'Заявленная стадия разработки';
$string['validationmsg_maturity_help'] = 'Для плагина может быть указана стадия разработки. Если разработчик считает плагин стабильным, то он указывает значение MATURITY_STABLE. Все остальные стадии разработки (например, альфа- или бета-) считаются нестабильными. В этом случае выводится соответствующее предупреждение.';
$string['validationmsg_missingcomponent'] = 'Для плагина не указано название компонента';
$string['validationmsg_missingcomponent_help'] = 'Для всех плагинов должно быть указано полное название компонента. Это делается путем объявления переменной «$plugin->component» в файле version.php.';
$string['validationmsg_missingexpectedlangenfile'] = 'Неправильное имя языкового файла для английского языка';
$string['validationmsg_missingexpectedlangenfile_info'] = 'Отсутствует необходимый для данного типа плагина языковой файл английского языка «{$a}».';
$string['validationmsg_missinglangenfile'] = 'Не найден языковой файл для английского языка';
$string['validationmsg_missinglangenfolder'] = 'Отсутствует каталог для языковых файлов английского языка';
$string['validationmsg_missingversion'] = 'В плагине не указана его версия';
$string['validationmsg_missingversionphp'] = 'Не найден файл version.php';
$string['validationmsg_multiplelangenfiles'] = 'Найдено несколько языковых файлов для английского языка';
$string['validationmsg_onedir'] = 'Неверная структура ZIP-пакета.';
$string['validationmsg_onedir_help'] = 'ZIP-пакет должен содержать только один каталог, в котором содержится исходный код плагина. Название этого корневого каталога должно совпадать с именем плагина.';
$string['validationmsg_pathwritable'] = 'Проверка доступа на запись';
$string['validationmsg_pluginversion'] = 'Версия плагина';
$string['validationmsg_release'] = 'Релиз плагина';
$string['validationmsg_requiresmoodle'] = 'Необходимая версия Moodle';
$string['validationmsg_rootdir'] = 'Название устанавливаемого плагина';
$string['validationmsg_rootdir_help'] = 'Название корневого каталога в ZIP-пакете  отвечает за название устанавливаемого плагина. Если название неправильное, Вы можете переименовать корневой каталог в архиве перед установкой плагина.';
$string['validationmsg_rootdirinvalid'] = 'Неверное название плагина';
$string['validationmsg_rootdirinvalid_help'] = 'Название корневого каталога в ZIP-пакете не соответствует формальным требованиям к синтаксису. В некоторых ZIP-пакетах (например, в генерируемых сервисом Github) корневой каталог может иметь неправильное название. Вам необходимо исправить название корневого каталога в соответствии с названием плагина.';
$string['validationmsg_targetexists'] = 'Целевой каталог уже существует и будет очищен';
$string['validationmsg_targetexists_help'] = 'Каталог плагина уже существует. Содержимое каталога будет заменено содержимым пакета.';
$string['validationmsg_targetnotdir'] = 'Место целевого каталога занимает файл';
$string['validationmsg_unknowntype'] = 'Неизвестный тип плагина';
$string['validationmsg_versionphpsyntax'] = 'В файле version.php используется неподдерживаемый синтаксис.';
$string['version'] = 'Версия';
$string['versiondb'] = 'Текущая версия';
$string['versiondisk'] = 'Новая версия';
