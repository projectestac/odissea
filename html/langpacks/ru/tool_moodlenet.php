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
 * Strings for component 'tool_moodlenet', language 'ru', version '4.5'.
 *
 * @package     tool_moodlenet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addingaresource'] = 'Добавление контента из MoodleNet';
$string['aria:enterprofile'] = 'Введите ID вашего профиля MoodleNet';
$string['aria:footermessage'] = 'Просмотрите контент в MoodleNet';
$string['autoenablenotification'] = '<p>В Moodle 4.0 и более поздних версиях интеграция с <a href="https://moodle.net/">MoodleNet</a> включена по умолчанию в расширенных возможностях. Пользователи, имеющие возможность создавать активные элементы и управлять ими, могут просматривать MoodleNet через средство выбора элементов и импортировать ресурсы MoodleNet в свои курсы.</p><p>При желании альтернативный экземпляр MoodleNet можно указать в разделе <a href="{$a->settingslink}">Настройки MoodleNet</a>.</p>';
$string['autoenablenotification_subject'] = 'Изменены настройки MoodleNet по умолчанию.';
$string['browsecontentmoodlenet'] = 'Или просмотрите контент в MoodleNet';
$string['clearsearch'] = 'Очистить поиск';
$string['connectandbrowse'] = 'Подключитесь и просматривайте:';
$string['defaultmoodlenet'] = 'URL-адрес MoodleNet';
$string['defaultmoodlenet_desc'] = 'URL-адрес MoodleNet, доступного через средство выбора элементов.';
$string['defaultmoodlenetname'] = 'Имя сайта MoodleNet';
$string['defaultmoodlenetname_desc'] = 'Имя экземпляра MoodleNet, доступного через средство выбора элементов.';
$string['defaultmoodlenetnamevalue'] = 'MoodleNet Central';
$string['enablemoodlenet'] = 'Включить интеграцию с MoodleNet (входящую)';
$string['enablemoodlenet_desc'] = 'При включенном параметре пользователь, имеющий возможность редактировать курс, может просматривать MoodleNet с помощью средства выбора элементов и импортировать ресурсы MoodleNet в свой курс. Кроме того, пользователь с правом восстановления резервных копий может выбрать в MoodleNet файл резервной копии и восстановить его в Moodle.';
$string['errorduringdownload'] = 'Ошибка при загрузке файла: {$a}';
$string['footermessage'] = 'Или просмотрите контент на';
$string['forminfo'] = 'ID вашего профиля MoodleNet будет автоматически сохранен в вашем профиле на этом сайте.';
$string['importconfirm'] = 'Вы собираетесь импортировать контент «{$a->resourcename} ({$a->resourcetype})» в курс «{$a->coursename}». Вы уверены, что хотите продолжить?';
$string['importconfirmnocourse'] = 'Вы собираетесь импортировать контент «{$a->resourcename} ({$a->resourcetype})» на свой сайт. Вы уверены, что хотите продолжить?';
$string['importformatselectguidingtext'] = 'В каком формате вы хотите добавить контент «{$a->name} ({$a->type})» в свой курс?';
$string['importformatselectheader'] = 'Выберите формат отображения контента';
$string['inputhelp'] = 'Или, если у вас уже есть учетная запись MoodleNet, скопируйте ID своего профиля MoodleNet и вставьте его сюда:';
$string['instancedescription'] = 'MoodleNet - это открытая  социальная медиа-платформа для преподавателей, ориентированная на совместное применение коллекций открытых ресурсов.';
$string['instanceplaceholder'] = 'a1b2c3d4e5f6-example@moodle.net';
$string['invalidmoodlenetprofile'] = 'Неверный формат $userprofile';
$string['missinginvalidpostdata'] = 'Информация о ресурсах из MoodleNet либо отсутствует, либо имеет неверный формат.
Если это происходит неоднократно, обратитесь к администратору сайта.';
$string['mnetprofile'] = 'Профиль MoodleNet';
$string['mnetprofiledesc'] = '<p> Введите здесь данные своего профиля MoodleNet, чтобы вас перенаправили в ваш профиль при посещении MoodleNet. </p>';
$string['moodlenetnotenabled'] = 'Интеграция с MoodleNet должна быть включена в Администрирование сайта/MoodleNet, прежде чем можно будет импортировать ресурсы.';
$string['moodlenetsettings'] = 'Настройки входящего трафика MoodleNet';
$string['notification'] = 'Вы собираетесь импортировать контент «{$a->name} ({$a->type})» на свой сайт. Выберите курс, в который его нужно добавить, или <a href="{$a->cancellink}">отмените</a>.';
$string['pluginname'] = 'MoodleNet';
$string['privacy:metadata'] = 'Средство MoodleNet только облегчает общение с MoodleNet. Оно не хранит данных.';
$string['profilevalidationerror'] = 'При проверке ID вашего профиля MoodleNet возникла проблема';
$string['profilevalidationfail'] = 'Введите корректный ID профиля MoodleNet';
$string['profilevalidationpass'] = 'Проверка пройдена!';
$string['removedmnetprofilenotification'] = 'В связи с недавними изменениями на платформе MoodleNet всем пользователям, ранее сохранившим ID своего профиля MoodleNet на сайте, потребуется ввести ID профиля MoodleNet в новом формате для аутентификации на платформе MoodleNet.';
$string['removedmnetprofilenotification_subject'] = 'Изменение формата ID профиля MoodleNet';
$string['saveandgo'] = 'Сохранить и продолжить';
$string['searchcourses'] = 'Поиск курсов';
$string['selectpagetitle'] = 'Выбор страницы';
$string['uploadlimitexceeded'] = 'Размер файла {$a->filesize} превышает установленный предел загрузки ({$a->uploadlimit} байт).';
