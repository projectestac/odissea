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
 * Strings for component 'logstore_legacy', language 'ru', branch 'MOODLE_36_STABLE'
 *
 * @package   logstore_legacy
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['eventlegacylogged'] = 'В журнал записано устаревшее событие';
$string['loglegacy'] = 'Записывать данные в устаревшую таблицу';
$string['loglegacy_help'] = 'Этот способ хранения журнала событий записывает данные в устаревшую таблицу журнала mdl_log. Эта функциональность была заменена новыми, более функциональными и эффективными плагинами хранения журнала. Вы должны использовать этот плагин только в том случае, если имеются старые пользовательские отчеты, которые получают данные непосредственно из устаревшей таблицы журнала событий. Запись в устаревшую таблицу увеличивает нагрузку, поэтому для повышения производительности рекомендуется отключить этот плагин, если он не требуется.';
$string['pluginname'] = 'Устаревший журнал событий';
$string['pluginname_desc'] = 'Устаревший способ хранения журнала событий в таблице mdl_log.';
$string['privacy:metadata:log:userid'] = 'ID пользователя, который выполнил действие';
$string['taskcleanup'] = 'Очистка таблицы устаревшего журнала событий';
