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
 * Strings for component 'availability_grade', language 'ja', branch 'MOODLE_31_STABLE'
 *
 * @package   availability_grade
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cachedef_items'] = '条件付利用評価のためにキャッシュされた評定項目';
$string['cachedef_scores'] = '条件付利用評価のためにキャッシュされたユーザ評点';
$string['description'] = '学生は指定された評点に到達する必要があります。';
$string['error_backwardrange'] = '評点範囲を指定する場合、最小評点は最大評点より小さくなる必要があります。';
$string['error_invalidnumber'] = '評点範囲には有効なパーセンテージを指定する必要があります。';
$string['error_selectgradeid'] = 'あなたは評定条件の評定項目を選択する必要があります。';
$string['label_max'] = '最大評点割合 (排他)';
$string['label_min'] = '最小評点割合 (包括)';
$string['missing'] = '(不明な活動)';
$string['option_max'] = '評点 <';
$string['option_min'] = '評点 ≥';
$string['pluginname'] = '評点による制限';
$string['requires_any'] = 'あなたに <strong>{$a}</strong> の評点がない場合';
$string['requires_max'] = 'あなたが <strong>{$a}</strong> の適切な評点を取得している場合';
$string['requires_min'] = 'あなたが <strong>{$a}</strong> の必須評点に達した場合';
$string['requires_notany'] = 'あなたに <strong>{$a}</strong> の評点がない場合';
$string['requires_notgeneral'] = 'あなたが <strong>{$a}</strong> の評点を取得していない場合';
$string['requires_range'] = 'あなたが <strong>{$a}</strong> の特定の評点を取得している場合';
$string['title'] = '評点';
