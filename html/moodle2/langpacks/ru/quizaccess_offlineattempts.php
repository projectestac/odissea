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
 * Strings for component 'quizaccess_offlineattempts', language 'ru', branch 'MOODLE_36_STABLE'
 *
 * @package   quizaccess_offlineattempts
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowofflineattempts'] = 'Разрешить тест в автономном режиме с использованием мобильного приложения';
$string['allowofflineattempts_help'] = 'При включенном параметре пользователь мобильного приложения может загрузить тест и пройти его в автономном режиме.

Примечание. Невозможно  в автономном режиме выполнить попытку теста, если у него есть ограничение по времени или требуется сетевой адрес, или используется какое-либо поведение, отличное от отложенного отзыва (с CBM или без него).';
$string['confirmdatasaved'] = 'Я подтверждаю, что у меня нет никаких несохраненных работ на мобильном устройстве.';
$string['mobileapp'] = 'Мобильное приложение';
$string['offlineattemptserror'] = 'Невозможно выполнить попытку теста в автономном режиме, если у него есть ограничение по времени или требуется сетевой адрес, или используется любое поведение, отличное от отложенного отзыва (с CBM или без него).';
$string['offlinedatamessage'] = 'Вы использовали эту попытку с помощью мобильного устройства. Данные были сохранены на этом сайте {$a} назад.';
$string['pleaseconfirm'] = 'Проверьте и подтвердите, что у вас нет несохраненной работы.';
$string['pluginname'] = 'Правило доступа к автономным попыткам';
