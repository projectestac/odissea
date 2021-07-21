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
 * Strings for component 'workshopeval_credit', language 'ru', version '3.11'.
 *
 * @package     workshopeval_credit
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['mode'] = 'Способ выставления оценок';
$string['mode_desc'] = 'Способ выставления оценок, используемый по умолчанию в методе «Бонус за участие»';
$string['mode_help'] = 'Этот способ определяет, каким образом рассчитываются баллы при выставлении оценок.

* Всё или ничего - Для того, чтобы получить максимальный балл, рецензент должен оценить все представленные работы, иначе он получит ноль баллов.
* Пропорционально - Полученный балл пропорционален количеству оцененных работ. Если оценены все представленные работы, то рецензент получит максимальный балл; если оценена половина работ, то рецензент получит 50% от максимального балла.
* Как минимум одна работа - Рецензенту достаточно оценить не менее одной представленной работы, чтобы получить максимальный балл.';
$string['modeall'] = 'Всё или ничего';
$string['modeone'] = 'Как минимум одна работа';
$string['modeproportional'] = 'Пропорционально';
$string['pluginname'] = 'Бонус за участие';
