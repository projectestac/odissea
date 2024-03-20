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
 * Strings for component 'ltiservice_memberships', language 'ru', version '4.1'.
 *
 * @package     ltiservice_memberships
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allow'] = 'Использовать эту службу для получения информации об участниках в соответствии с настройками конфиденциальности.';
$string['ltiservice_memberships'] = 'Предоставление имен и ролей IMS LTI';
$string['ltiservice_memberships_help'] = 'Разрешить инструменту получать информацию об участниках курса с помощью службы Предоставления имен и ролей IMS LTI. Будут применены настройки конфиденциальности. Для запросов на уровне курса они будут основаны на настройках конфигурации инструмента. Если вы хотите всегда присылать такие реквизиты, не делегируйте право выбора учителям. Запросы на уровне ссылки всегда будут использовать настройки конфиденциальности, применимые к ссылке.';
$string['notallow'] = 'Не использовать эту службу';
$string['pluginname'] = 'Службы Предоставления имен и ролей IMS LTI';
$string['privacy:metadata:email'] = 'Электронная почта пользователя, использующего LTI.';
$string['privacy:metadata:externalpurpose'] = 'Эта информация отправляется поставщику внешнего LTI.';
$string['privacy:metadata:firstname'] = 'Имя пользователя, использующего LTI.';
$string['privacy:metadata:fullname'] = 'Имя и фамилия пользователя, использующего LTI.';
$string['privacy:metadata:lastname'] = 'Фамилия пользователя, использующего LTI.';
$string['privacy:metadata:userid'] = 'ID пользователя, использующего LTI.';
$string['privacy:metadata:useridnumber'] = 'ID-номер пользователя, использующего LTI.';
