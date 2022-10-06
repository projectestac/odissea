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
 * Strings for component 'assignsubmission_onlinetext', language 'ru', branch 'MOODLE_38_STABLE'
 *
 * @package   assignsubmission_onlinetext
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowonlinetextsubmissions'] = 'Включено';
$string['default'] = 'Включено по умолчанию';
$string['default_help'] = 'Если установлено, то этот метод представления будет включен по умолчанию для всех новых заданий.';
$string['enabled'] = 'Ответ в виде текста';
$string['enabled_help'] = 'Если включен, студенты смогут вводить форматированный текст прямо в редактор, в качестве своего ответа.';
$string['eventassessableuploaded'] = 'Текст был загружен';
$string['nosubmission'] = 'Нет представленных ответов на это задание.';
$string['numwords'] = '(слов - {$a})';
$string['numwordsforlog'] = 'Количество представленных слов: {$a}';
$string['onlinetext'] = 'Ответ в виде текста';
$string['onlinetextfilename'] = 'onlinetext.html';
$string['onlinetextsubmission'] = 'Разрешить ответ в виде текста';
$string['pluginname'] = 'Ответ в виде текста';
$string['privacy:metadata:assignmentid'] = 'ID задания';
$string['privacy:metadata:filepurpose'] = 'Файлы, встроенные в ответ в виде текста.';
$string['privacy:metadata:submissionpurpose'] = 'ID ответа, который связывает ответы с пользователем.';
$string['privacy:metadata:tablepurpose'] = 'Хранит ответ в виде текста для каждой попытки.';
$string['privacy:metadata:textpurpose'] = 'Текст, фактически отправленный для этой попытки в задании.';
$string['privacy:path'] = 'Текст ответа';
$string['wordlimit'] = 'Лимит слов';
$string['wordlimitexceeded'] = 'Для этого задания задано ограничение максимального количества слов - {$a->limit}. Вы пытаетесь представить {$a->count} слово(а). Проверьте свой текст и попробуйте еще раз.';
$string['wordlimit_help'] = 'Если разрешен ответ в виде текста, то этот параметр задает максимальное количество слов, которое может содержать ответ студента.';
