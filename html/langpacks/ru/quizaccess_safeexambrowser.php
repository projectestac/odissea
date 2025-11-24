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
 * Strings for component 'quizaccess_safeexambrowser', language 'ru', version '4.5'.
 *
 * @package     quizaccess_safeexambrowser
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedbrowserkeys'] = 'Разрешенные значения Browser Exam Key';
$string['allowedbrowserkeys_help'] = 'В этом поле вы можете ввести значения Browser Exam Key для тех версий Safe Exam Browser, при использовании которых должен быть разрешен доступ к этому тесту. Если значения не заданы, то для прохождения этого теста не требуется наличие Safe Exam Browser.';
$string['allowedbrowserkeysdistinct'] = 'Все значения должны быть разными.';
$string['allowedbrowserkeyssyntax'] = 'Вы должны ввести разрешенные значения по одному в каждой строке. Каждое значение должно быть строкой из 64 шестнадцатеричных символов.';
$string['allowedkeys_adv'] = 'Параметр «Разрешенные значения Browser Exam Key» относится к дополнительным настройкам';
$string['allowedkeys_adv_desc'] = 'При включении этого параметра поле «Разрешенные значения Browser Exam Key» будет отображать в форме настроек теста как дополнительная настройка.';
$string['pluginname'] = 'Правило доступа к тесту: Safe Exam Browser';
$string['privacy:metadata'] = 'Плагин "Правило доступа к тесту: Safe Exam Browser" не хранит никаких личных данных пользователя.';
$string['safebrowserdownloadurl'] = 'Ссылка на скачивание Safe Exam Browser';
$string['safebrowserdownloadurl_desc'] = 'Если вы укажете URL-адрес, пользователям будет указано, что они могут загрузить требуемую версию Safe Exam Browser по этой ссылке.';
$string['safebrowsermustbeused'] = 'Вы должны использовать одобренную версию Safe Exam Browser, чтобы пройти этот тест.';
$string['safebrowsermustbeusedwithlink'] = 'Вы должны использовать одобренную версию Safe Exam Browser, чтобы пройти этот тест. Вы можете скачать ее по ссылке {$a->link}.';
$string['safeexambrowser:exemptfromcheck'] = 'Не подвергаться проверке на использование Safe Exam Browser';
