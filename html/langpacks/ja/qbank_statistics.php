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
 * Strings for component 'qbank_statistics', language 'ja', version '4.5'.
 *
 * @package     qbank_statistics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['discrimination_index'] = 'チェックが必要ですか?';
$string['discrimination_index_help'] = '問題統計に基づきチェックが必要な可能性のある問題が表示されます。例えば学生が問題で低い評点を取得したにもかかわらず、小テスト全体では高い評点を取得した場合、または問題で高い評点を取得したにもかかわらず、小テスト全体では低い評点を取得した場合、間違った答えが正しいものとして設定されている等、問題に問題がある可能性があります。統計は絶対なものではないため、これはあくまでも問題をチェックするためのヒントに過ぎません。';
$string['discriminative_efficiency'] = '識別効率';
$string['discriminative_efficiency_help'] = '判別効率は問題がどの程度学生を評価するかについての統計的推定値であり、値が高いほど優れています。特に低い値は問題に問題があることを示している場合があります。非常に難しい問題または簡単な問題 (ファシリティ指標が0%または100%に近い) も低い値になる場合があります。';
$string['discriminative_efficiency_link'] = 'mod/quiz/statistics';
$string['emptyvalue'] = '-';
$string['facility_index'] = 'ファシリティ指標';
$string['facility_index_help'] = 'ファシリティ指標はその問題が受験されたすべての小テストで取得された平均点 (パーセンテージ) を示します。通常、高い値はより簡単な問題であることを示します。';
$string['likely'] = '可能性が高い';
$string['na'] = 'N/A';
$string['pluginname'] = '問題統計';
$string['privacy:metadata'] = '問題統計問題バンクプラグインはいかなる個人データも保存しません。';
$string['unlikely'] = '可能性が低い';
$string['verylikely'] = '可能性が非常に高い';
