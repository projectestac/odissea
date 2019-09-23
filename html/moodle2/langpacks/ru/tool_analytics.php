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
 * Strings for component 'tool_analytics', language 'ru', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_analytics
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allpredictions'] = 'Все прогнозы';
$string['bettercli'] = 'Оценка моделей и создание прогнозов могут вызвать интенсивный процесс. Рекомендуется запускать эти действия из командной строки.';
$string['clearmodelpredictions'] = 'Вы уверены, что хотите очистить все прогнозы «{$a}»?';
$string['clearpredictions'] = 'Очистить прогнозы';
$string['edittrainedwarning'] = 'Эта модель уже прошла обучение. Обратите внимание, что изменение её показателей или метода разделения времени удалит прогнозы модели и даст начало созданию новых прогнозов.';
$string['errorcantenablenotimesplitting'] = 'Перед включением модели нужно выбрать метод разделения по времени.';
$string['evaluationinbatches'] = 'Содержимое сайта рассчитывается и хранится партиями. Процесс оценки может быть остановлен в любое время. В следующий раз, когда процесс будет запущен, он будет продолжен с момента остановки.';
$string['getpredictions'] = 'Получить прогнозы';
$string['indicators'] = 'Показатели';
$string['nodatatopredict'] = 'Нет новых элементов, чтобы получить прогнозы для';
$string['predictionprocessfinished'] = 'Процесс прогнозирования завершен';
$string['predictionresults'] = 'Результаты прогноза';
$string['target'] = 'Цель';
$string['timesplittingnotdefined_help'] = 'Перед включением модели нужно выбрать метод разделения по времени.';
