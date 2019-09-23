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
 * Strings for component 'tool_installaddon', language 'ru', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_installaddon
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acknowledgement'] = 'Подтверждение';
$string['acknowledgementtext'] = 'Я понимаю, что перед установкой плагинов необходимо создать полные резервные копии этого сайта. Я понимаю и соглашаюсь с тем, что плагины (в том числе те, которые получены из официальных источников, а особенно те, которые получены из неофициальных источников) могут содержать уязвимости в системе безопасности, что может привести к тому, что сайт станет недоступен, а также к уничтожению или утечке личных данных.';
$string['featuredisabled'] = 'На этом сайте отключена установка плагинов.';
$string['installaddon'] = 'Установить плагин!';
$string['installaddons'] = 'Установка плагинов';
$string['installfromrepo'] = 'Установить плагины из каталога плагинов Moodle (Moodle Plugins Directory)';
$string['installfromrepo_help'] = 'Вы будете перенаправлены в каталог плагинов Moodle (Moodle Plugins Directory) для поиска и установки плагина. Обратите внимание, что при этом будут переданы полное имя, URL-адрес и версия системы Moodle, установленной на Вашем сайте; это упрощает процесс установки плагинов.';
$string['installfromzip'] = 'Установить плагин из ZIP-файла';
$string['installfromzipfile'] = 'ZIP-пакет';
$string['installfromzipfile_help'] = 'ZIP-пакет с плагином должен содержать только один каталог, имя которого должно совпадать с названием плагина. Архив будет извлечен в каталог, предназначенный для плагинов указанного типа. Если архив был загружен из каталога плагинов Moodle, он точно имеет необходимую структуру.';
$string['installfromzip_help'] = 'В качестве альтернативы установке плагина непосредственно из каталога плагинов Moodle можно загрузить плагин в виде ZIP-пакета. ZIP-пакет должен иметь такую же структуру, как и пакет, скачанный из каталога плагинов Moodle.';
$string['installfromzipinvalid'] = 'ZIP-пакет плагина должен содержать только один каталог, имя которого совпадает с именем плагина. Представленный файл не является корректным ZIP-пакетом плагина.';
$string['installfromziprootdir'] = 'Переименовать корневой каталог';
$string['installfromziprootdir_help'] = 'В некоторых ZIP-пакетах (например, в генерируемых сервисом Github) корневой каталог может иметь неправильное название. В этом случае здесь можно указать правильное название.';
$string['installfromzipsubmit'] = 'Установить плагин из ZIP-файла';
$string['installfromziptype'] = 'Тип плагина';
$string['installfromziptype_help'] = 'Для плагинов, которые корректно указывают название своего компонента, установщик может определить тип плагина автоматически. Если автоматическое определение потерпит неудачу, выберите правильный тип плагина вручную. Предупреждение: процедура установки может завершиться неудачно, если тип плагина будет указан неправильно.';
$string['permcheck'] = 'Убедитесь, что каталог, предназначенный для плагинов указанного типа, доступен для записи пользователю, от имени которого запущен веб-сервер.';
$string['permcheckerror'] = 'Ошибка при проверке прав на запись';
$string['permcheckprogress'] = 'Проверка наличия разрешения на запись...';
$string['permcheckrepeat'] = 'Проверить снова';
$string['permcheckresultno'] = 'Каталог <em>{$a->path}</em>, предназначенный  для плагинов указанного типа не доступен для записи';
$string['permcheckresultyes'] = 'Каталог <em>{$a->path}</em>, предназначенный  для плагинов указанного типа доступен для записи';
$string['pluginname'] = 'Установщик плагинов';
$string['remoterequestalreadyinstalled'] = 'Есть запрос на установку на этом сайте плагина «{$a->name}» ({$a->component}) версии {$a->version} из каталога плагинов Moodle. Однако, этот плагин <strong>уже установлен</strong> на этом сайте.';
$string['remoterequestconfirm'] = 'Есть запрос на установку на этом сайте плагина «<strong>{$a->name}</strong>» ({$a->component}) версии {$a->version} из каталога плагинов Moodle. Если Вы нажмете «Продолжить», ZIP-пакет с плагином будет скачан для проверки. На этом этапе ничего не будет устанавливаться.';
$string['remoterequestinvalid'] = 'Есть запрос на установку на этом сайте плагина из каталога плагинов Moodle. К сожалению, этот запрос был некорретным и плагин не может быть установлен.';
$string['remoterequestnoninstallable'] = 'Есть запрос на установку плагина «{$a->name}» ({$a->component}) версии {$a->version} из каталога плагинов Moodle на этот сайт. Однако, предварительная проверка установки плагина завершилась с ошибкой (код причины: {$a->reason}).';
$string['remoterequestpermcheck'] = 'Есть запрос на установку на этом сайте плагина «{$a->name}» ({$a->component}) версии {$a->version} из каталога плагинов Moodle. Однако, каталог <strong>{$a->typepath}</strong>, предназначенный для плагинов этого типа, не доступен для записи. Вы должны дать доступ на запись в этот каталог пользователю, от имени которого запускается веб-сервер, и нажать кнопку «Продолжить», чтобы повторить проверку.';
$string['remoterequestpluginfoexception'] = 'Ой... Произошла ошибка при попытке получить информацию о плагине «{$a->name}» ({$a->component}) версии {$a->version}. Плагин не может быть установлен. Чтобы увидеть подробную информацию об ошибке, включите режим отладки.';
$string['typedetectionfailed'] = 'Не удается определить тип плагина. Пожалуйста, выберите тип плагина вручную.';
$string['typedetectionmismatch'] = 'Тип выбранного плагина не соответствует типу, объявленному в плагине: {$a}';
