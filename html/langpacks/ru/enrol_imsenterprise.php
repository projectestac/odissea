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
 * Strings for component 'enrol_imsenterprise', language 'ru', version '4.1'.
 *
 * @package     enrol_imsenterprise
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aftersaving...'] = 'После сохранения своих настроек Вы, возможно, пожелаете';
$string['allowunenrol'] = 'Разрешить данным IMS отчислять студентов и преподавателей';
$string['allowunenrol_desc'] = 'При включенном параметре, участник будет отчислен из курса, если это указано в данных организации.';
$string['basicsettings'] = 'Основные настройки';
$string['categoryidnumber'] = 'Разрешить ID-номер категории';
$string['categoryidnumber_desc'] = 'Если включено, то IMS Enterprise создаст категорию с ID-номером';
$string['categoryseparator'] = 'Обозначение разделителя категории';
$string['categoryseparator_desc'] = 'Необходим при включенном параметре «ID-номер категории». Символ для разделения названия и ID-номера категории.';
$string['coursesettings'] = 'Настройки данных курса';
$string['createnewcategories'] = 'Создавать новые (скрытые) категории курсов, если они не найдены в Moodle';
$string['createnewcategories_desc'] = 'Если элемент <org><orgunit>  присутствует в данных создаваемого курса, то эта информация будет использоваться для определения категории, если курс должен быть создан с нуля. Плагин НЕ будет изменять категории существующих курсов.

Если нет категории с нужным названием, то будет создана скрытая категория.';
$string['createnewcourses'] = 'Создавать новые (скрытые) курсы, если они не найдены в Moodle';
$string['createnewcourses_desc'] = 'При включенном параметре плагин IMS  может создать новые курсы для любого из найденных в данных IMS, но не в базе данных в Moodle. Любой вновь созданный курс изначально скрыт.';
$string['createnewusers'] = 'Создать учетные записи для пользователей, еще не зарегистрированных в Moodle';
$string['createnewusers_desc'] = 'IMS Enterprise - типичные данные для регистрации, характеризующие группу пользователей. При включенном параметре учетная запись может быть создана для любого пользователя, отсутствующего в базе данных Moodle. Пользователей сначала ищут по их «ID-номеру», потом - по их логину в Moodle. Пароли не импортируются с помощью плагина IMS Enterprise.

Для аутентификации пользователей рекомендуется использовать плагин аутентификации';
$string['cronfrequency'] = 'Частота обработки';
$string['deleteusers'] = 'Удалять учетные записи пользователей, если это указано в данных IMS';
$string['deleteusers_desc'] = 'При включенном параметре в данных IMS можно указать удаление учетных записей пользователей (если в параметре «recstatus» выбран п.3, который означает удаление аккаунта). Как это принято в Moodle, запись пользователя не удаляется из базы данных Moodle, но устанавливается флаг, который помечает аккаунт как удаленный.';
$string['disableenrolmentandremoveallroles'] = 'Приостановить регистрацию и удалить роли';
$string['disableenrolonly'] = 'Только приостановить зачисление';
$string['doitnow'] = 'Выполнить импорт IMS  прямо сейчас';
$string['emptyattribute'] = 'Оставить пустым';
$string['filelockedmail'] = 'Процесс cron не может удалить IMS-файл ({$a}), используемый вами для записи на курсы. Обычно это означает, что неправильно установлены права доступа к этому файлу. Пожалуйста, исправьте права доступа так, чтобы система Moodle могла удалять этот файл. В противном случае один и тот же файл будет обрабатываться повторно.';
$string['filelockedmailsubject'] = 'Серьезная ошибка: Файл зачисления';
$string['fixcasepersonalnames'] = 'Изменить личные имена пользователей в Верхний Регистр';
$string['fixcaseusernames'] = 'Переводить логины в нижний регистр';
$string['ignore'] = 'Игнорировать';
$string['importimsfile'] = 'Импорт файла IMS Enterprise';
$string['imsenterprise:config'] = 'Настраивать экземпляры способа записи на курс «Файл IMS Enterprise»';
$string['imsenterprisecrontask'] = 'Обработка файла зачисления';
$string['imsrolesdescription'] = 'Спецификация IMS Enterprise включает в себя 8 различных типов ролей. Выберите, как Вы хотите  назначить их в Moodle, при этом любая из них может быть проигнорирована.';
$string['location'] = 'Расположение файла';
$string['logtolocation'] = 'Расположение файла журнала (пусто, если протоколирование не ведется)';
$string['mailadmins'] = 'Уведомить администратора по электронной почте';
$string['mailusers'] = 'Уведомить пользователей по электронной почте';
$string['messageprovider:imsenterprise_enrolment'] = 'Сообщения о зачислении MS Enterprise';
$string['miscsettings'] = 'Разное';
$string['nestedcategories'] = 'Разрешить вложенные категории';
$string['nestedcategories_desc'] = 'Если включено, то IMS Enterprise создаст вложенные категории';
$string['noaction'] = 'Ничего не предпринимать';
$string['pluginname'] = 'Файл IMS Enterprise';
$string['pluginname_desc'] = 'Этот способ записи будет неоднократно проверять и обрабатывать специально-форматированный текстовый файл в указанном Вами месте. Файл должен следовать спецификации IMS Enterprise и содержать XML-элементы person, group и membership.';
$string['privacy:metadata'] = 'Плагин зачисления «Файл IMS Enterprise» не хранит никаких персональных данных.';
$string['processphoto'] = 'Добавить данные о фотографии пользователя  в профиль';
$string['processphotowarning'] = 'Внимание: обработка изображений может добавить значительную нагрузку на сервер. Рекомендуется не активировать эту опцию, если ожидается обработка большого количества студентов.';
$string['removeenrolmentandallroles'] = 'Удалить зачисление и роли';
$string['restricttarget'] = 'Обрабатывать данные только если указана следующая цель';
$string['restricttarget_desc'] = 'Файл данных IMS Enterprise может быть предназначен для нескольких «целей» - разных систем обучения или различных систем внутри школы/университета. В файле можно указать, что данные предназначены для одной или нескольких целевых именованных систем, именуя их в тегах <target>, содержащихся в теге <properties>.

Обычно Вам не нужно беспокоиться об этом. Оставьте поле пустым и Moodle всегда будет обрабатывать данные файла, независимо от того, задана ли цель или нет. В противном случае введите в поле точное название, которое будет присутствовать внутри тега <target>.';
$string['roles'] = 'Роли';
$string['settingfullname'] = 'Тег описания IMS для  полного названия курса';
$string['settingfullnamedescription'] = 'Полное название курса является обязательным полем. Вы должны определить выбранный тег описания в файле своего IMS Enterprise.';
$string['settingshortname'] = 'Тег описания IMS для  краткого названия курса';
$string['settingshortnamedescription'] = 'Краткое название курса является обязательным полем. Вы должны определить выбранный тег описания в файле своего IMS Enterpris';
$string['settingsummary'] = 'Тег описания IMS для  описания курса';
$string['settingsummarydescription'] = 'Необязательное поле. Выберите «Оставить пустым», если не хотите указывать описание курса';
$string['sourcedidfallback'] = 'Использовать идентификатор «sourcedid» для персонального идентификатора, если поле «userid» не найдено';
$string['sourcedidfallback_desc'] = 'В данных IMS поле <sourcedid>  является постоянным ID-кодом человека, используемый в исходной системе. Поле <userid> - это отдельное поле, которое содержит ID-код, используемый пользователем при входе. Во многих случаях эти два кода могут быть одинаковы - но не всегда.

Некоторые системы не могут выводить информацию из поля <userid>. В этом случае Вы должны включить этот параметр - разрешить использовать поле <sourcedid> в качестве ID-номера пользователя Moodle. В противном случае оставьте этот параметр отключенным.';
$string['truncatecoursecodes'] = 'Обрезать коды курсов до этой длины';
$string['truncatecoursecodes_desc'] = 'В некоторых случаях перед обработкой Вы можете обрезать коды курсов до указанной длины. Для этого введите нужное количество символов в этом поле. В противном случае оставьте это поле пустым и никаких сокращений не будет.';
$string['unenrolaction'] = 'Действие при отчислении';
$string['unenrolaction_desc'] = 'Действие, предпринимаемое при отчислении пользователя из курса (применяется только в том случае, если  включен указанный выше параметр отмены зачисления).';
$string['updatecourses'] = 'Обновить курс';
$string['updatecourses_desc'] = 'Если этот параметр включен, то подключаемый модуль IMS Enterprise может обновлять полные и короткие названия курсов (если в параметре «recstatus» установлено значение 2, что означает обновление).';
$string['updateusers'] = 'Обновление учетных записей пользователей, указанных в данных IMS';
$string['updateusers_desc'] = 'Если этот параметр включен, то данные регистрации IMS Enterprise могут вносить изменения в учетные записи пользователей (если в параметре «recstatus» установлено значение 2, что означает обновление).';
$string['usecapitafix'] = 'Отметьте это поле, если используется «Capita» (поскольку их формат XML немного отличается)';
$string['usecapitafix_desc'] = 'При получении «Capita» была найдена одна небольшая ошибка в XML-выводе из системы студенческих данных. При использовании «Capita» Вы должны включить этот параметр; в противном случае оставьте его не отмеченным.';
$string['usersettings'] = 'Настройки данных пользователя';
$string['zeroisnotruncation'] = '0 указывает на отсутствие усечения';
