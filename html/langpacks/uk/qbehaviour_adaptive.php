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
 * Strings for component 'qbehaviour_adaptive', language 'uk', version '4.5'.
 *
 * @package     qbehaviour_adaptive
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['disregardedwithoutpenalty'] = 'Відповідь є некоректною, ігнорується без штрафних балів.';
$string['gradingdetails'] = 'Бали за цю відповідь: {$a->raw}/{$a->max}.';
$string['gradingdetailsadjustment'] = 'Враховуючи попередні спроби, це дає <strong>{$a->cur}/{$a->max}</strong>.';
$string['gradingdetailspenalty'] = 'Для цієї відповіді нараховується штраф {$a} балів.';
$string['gradingdetailspenaltytotal'] = 'Всього штрафних балів: {$a}.';
$string['gradingdetailswithadjustment'] = 'Оцінка за цю відповідь: {$a->raw}/{$a->max}. З врахуванням попередніх спроб: <strong>{$a->cur}/{$a->max}</strong>.';
$string['gradingdetailswithadjustmentpenalty'] = 'Оцінка за цю відповідь: {$a->raw}/{$a->max}. З врахуванням попередніх спроб: <strong>{$a->cur}/{$a->max}</strong>. Ця відповідь отримала штраф {$a->penalty}.';
$string['gradingdetailswithadjustmenttotalpenalty'] = 'Оцінка за цю відповідь: {$a->raw}/{$a->max}. З врахуванням попередніх спроб: <strong>{$a->cur}/{$a->max}</strong>. Ця відповідь отримала штраф {$a->penalty}. Всього штрафів: {$a->totalpenalty}.';
$string['gradingdetailswithpenalty'] = 'Оцінка за цю відповідь: {$a->raw}/{$a->max}. Ця відповідь отримала штраф {$a->penalty}.';
$string['gradingdetailswithtotalpenalty'] = 'Оцінка за цю відповідь: {$a->raw}/{$a->max}. Ця відповідь отримала штраф {$a->penalty}. Всього штрафів: {$a->totalpenalty}.';
$string['notcomplete'] = 'Не завершено';
$string['pluginname'] = 'Адаптивний режим';
$string['privacy:metadata'] = 'Плагін поведінки запитань в адаптивному режимі не зберігає жодних особистих даних.';
