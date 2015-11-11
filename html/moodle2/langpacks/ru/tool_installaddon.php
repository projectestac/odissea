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
 * Strings for component 'tool_installaddon', language 'ru', branch 'MOODLE_28_STABLE'
 *
 * @package   tool_installaddon
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acknowledgement'] = 'Подтверждение';
$string['acknowledgementmust'] = 'Вы должны подтвердить свое согласие с этим пунктом';
$string['acknowledgementtext'] = 'Я понимаю, что перед установкой плагинов необходимо создать полные резервные копии этого сайта. Я понимаю и соглашаюсь с тем, что плагины (в том числе те, которые получены из официальных источников, а особенно те, которые получены из неофициальных источников) могут содержать уязвимости в системе безопасности, что может привести к тому, что сайт станет недоступен, а также к уничтожению или утечке личных данных.';
$string['featuredisabled'] = 'На этом сайте отключена установка плагинов.';
$string['installaddon'] = 'Установить плагин!';
$string['installaddons'] = 'Установка плагинов';
$string['installexception'] = 'Ой... При попытке установить плагин произошла ошибка. Чтобы увидеть подробную информацию об ошибке, включите режим отладки.';
$string['installfromrepo'] = 'Установить плагины из каталога плагинов Moodle (Moodle Plugins Directory)';
$string['installfromrepo_help'] = 'Вы будете перенаправлены в каталог плагинов Moodle (Moodle Plugins Directory) для поиска и установки плагина. Обратите внимание, что при этом будут переданы полное имя, URL-адрес и версия системы Moodle, установленной на Вашем сайте; это упрощает процесс установки плагинов.';
$string['installfromzip'] = 'Установить плагин из ZIP-файла';
$string['installfromzipfile'] = 'ZIP-пакет';
$string['installfromzipfile_help'] = 'ZIP-пакет с плагином должен содержать только один каталог, имя которого должно совпадать с названием плагина. Архив будет извлечен в каталог, предназначенный для плагинов указанного типа. Если архив был загружен из каталога плагинов Moodle, он точно имеет необходимую структура.';
$string['installfromzip_help'] = 'В качестве альтернативы установке плагина непосредственно из каталога плагинов Moodle можно загрузить плагин в виде ZIP-пакета. ZIP-пакет должен иметь такую же структуру, как и пакет, скачанный из каталога плагинов Moodle.';
$string['installfromziprootdir'] = 'Переименовать корневой каталог';
$string['installfromziprootdir_help'] = 'В некоторых ZIP-пакетах (например, в генерируемых сервисом Github) корневой каталог может иметь неправильное название. В этом случае здесь можно указать правильное название.';
$string['installfromzipsubmit'] = 'Установить плагин из ZIP-файла';
$string['installfromziptype'] = 'Тип плагина';
$string['installfromziptype_help'] = 'Правильно укажите тип устанавливаемого плагина. Внимание: процедура установки может завершиться неудачно, если тип плагина будет указан неправильно.';
$string['permcheck'] = 'Убедитесь, что каталог, предназначенный для плагинов указанного типа, доступен для записи пользователю, от имени которого запущен веб-сервер.';
$string['permcheckerror'] = 'Ошибка при проверке прав на запись';
$string['permcheckprogress'] = 'Проверка наличия разрешения на запись...';
$string['permcheckresultno'] = 'Каталог <em>{$a->path}</em>, предназначенный  для плагинов указанного типа не доступен для записи';
$string['permcheckresultyes'] = 'Каталог <em>{$a->path}</em>, предназначенный  для плагинов указанного типа доступен для записи';
$string['pluginname'] = 'Установщик плагинов';
$string['remoterequestalreadyinstalled'] = 'Есть запрос на установку на этом сайте плагина «{$a->name}» ({$a->component}) версии {$a->version} из каталога плагинов Moodle. Однако, этот плагин <strong>уже установлен</strong> на этом сайте.';
$string['remoterequestconfirm'] = 'Есть запрос на установку на этом сайте плагина «<strong>{$a->name}</strong>» ({$a->component}) версии {$a->version} из каталога плагинов Moodle. Если Вы нажмете «Продолжить», ZIP-пакет с плагинов будет скачан для проверки. На этом этапе ничего не будет устанавливаться.';
$string['remoterequestinvalid'] = 'Есть запрос на установку на этом сайте плагина из каталога плагинов Moodle. К сожалению, этот запрос был некорретным и плагин не может быть установлен.';
$string['remoterequestpermcheck'] = 'Есть запрос на установку на этом сайте плагина «{$a->name}» ({$a->component}) версии {$a->version} из каталога плагинов Moodle. Однако, каталог <strong>{$a->typepath}</strong>, предназначенный для плагинов этого типа, не доступен для записи. Вы должны дать доступ на запись в этот каталог пользователю, от имени которого запускается веб-сервер и нажать кнопку «Продолжить», чтобы повторить проверку.';
$string['remoterequestpluginfoexception'] = 'Ой... Произошла ошибка при попытке получить информацию о плагине «{$a->name}» ({$a->component}) версии {$a->version}. Дополнение не может быть установлено. Чтобы увидеть подробную информацию об ошибке, включите режим отладки.';
$string['validation'] = 'Проверка пакета плагина';
$string['validationmsg_componentmatch'] = 'Полное имя компонента';
$string['validationmsg_componentmismatchname'] = 'Несовпадение названия плагина';
$string['validationmsg_componentmismatchname_help'] = 'В некоторых ZIP-пакетах (например, в генерируемых сервисом Github) корневой каталог может иметь неправильное название. Вам необходимо исправить название корневого каталога в соответствии с указанным названием плагина.';
$string['validationmsg_componentmismatchname_info'] = 'В плагине указано его название - «{$a}», но оно не совпадает с названием корневого каталога.';
$string['validationmsg_componentmismatchtype'] = 'Несоответствие типа плагина';
$string['validationmsg_componentmismatchtype_info'] = 'Вы выбрали тип «{$a->expected}», а в плагине указан тип «{$a->found}».';
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
$string['validationmsg_targetexists'] = 'Целевой каталог уже существует';
$string['validationmsg_targetexists_help'] = 'Каталог, в который должен быть установлен плагин, пока что не существует.';
$string['validationmsg_unknowntype'] = 'Неизвестный тип плагина';
$string['validationresult0'] = 'Проверка не пройдена!';
$string['validationresult0_help'] = 'Была обнаружена серьезная проблем, поэтому устанавливать этот плагин небезопасно. Подробности смотрите в сообщениях журнала проверки.';
$string['validationresult1'] = 'Проверка пройдена!';
$string['validationresult1_help'] = 'При проверке пакета плагина не обнаружено никаких серьезных проблем.';
$string['validationresult2_help'] = 'Серьезных проблем не обнаружено . Вы можете продолжить установку плагина. Более подробную информацию и возможные предупреждения смотрите в сообщениях журнала проверки.';
$string['validationresultinfo'] = 'Информация';
$string['validationresultmsg'] = 'Сообщение';
$string['validationresultstatus'] = 'Состояние';
