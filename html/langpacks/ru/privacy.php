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
 * Strings for component 'privacy', language 'ru', branch 'MOODLE_38_STABLE'
 *
 * @package   privacy
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['broughtbymoodle'] = 'Этот экспорт данных предоставлен Moodle.';
$string['exportfrom'] = 'Экспортировано из {$a}';
$string['exporttime'] = 'Экспортировано в {$a}';
$string['exportuser'] = 'Данные для {$a}';
$string['navigation'] = 'Навигация';
$string['privacy:metadata'] = 'Подсистема конфиденциальности не хранит никаких данных сама по себе и выступает каналом между компонентами и интерфейсом, используемым для описания, экспорта и удаления их данных.';
$string['privacy:subsystem:empty'] = 'Подсистема не хранит никаких данных.';
$string['trace:deletingapproved'] = 'Выполнение удаления {$a-> total} одобренных контекстов ({$a-> datetime})';
$string['trace:deletingapprovedusers'] = 'Выполнение удаления пользователей из {$a->total} одобренных компонентов для контекста {$a->contextid} ({$a->datetime}).';
$string['trace:deletingcontext'] = 'Выполняется удаление контекста из компонентов:  {$a->total} ({$a->datetime})';
$string['trace:deletinguser'] = 'Выполнение удаления пользователя из {$a->total} компонентов ({$a->datetime})';
$string['trace:done'] = 'Завершено';
$string['trace:exportcomplete'] = 'Экспорт завершен';
$string['trace:exportingapproved'] = 'Выполняется первичный экспорт для компонентов:  {$a->total} ({$a->datetime})';
$string['trace:exportingrelated'] = 'Выполняется связанный экспорт для компонентов: {$a->total} ({$a->datetime})';
$string['trace:fetchcomponents'] = 'Извлечение данных из {$a-> total} компонентов ({$a-> datetime})';
$string['trace:finalisingexport'] = 'Завершаем экспорт';
$string['trace:preprocessingcomponent'] = 'Предварительная обработка {$a->component} ({$a->progress}/{$a->total}) ({$a->datetime})';
$string['trace:processingcomponent'] = 'Обработка {$a->component} ({$a->progress}/{$a->total}) ({$a->datetime})';
$string['viewdata'] = 'Нажмите на ссылку в навигации, чтобы просмотреть данные.';
