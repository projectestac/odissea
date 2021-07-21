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
 * Strings for component 'qtype_random', language 'ja', version '3.11'.
 *
 * @package     qtype_random
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configselectmanualquestions'] = 'カテゴリから問題をランダムに選択する場合、ランダム問題タイプは手動評定問題を選択できますか?';
$string['includingsubcategories'] = 'サブカテゴリを含む';
$string['pluginname'] = 'ランダム問題';
$string['pluginname_help'] = 'ランダム問題は通常の問題タイプではありませんが特定のカテゴリよりランダムに選択された問題を活動に追加することができます。';
$string['pluginnameediting'] = 'ランダム問題の編集';
$string['privacy:metadata'] = 'ランダム問題タイププラグインはいかなる個人データも保存しません。';
$string['randomqname'] = 'ランダム ({$a})';
$string['randomqnamefromtop'] = '不完全なランダム問題です! この問題を削除してください。';
$string['randomqnamefromtoptags'] = '不完全なランダム問題です! この問題を削除してください。';
$string['randomqnametags'] = 'ランダム ({$a->category} - タグ: {$a->tags})';
$string['randomqplusname'] = 'ランダム ({$a} およびサブカテゴリ)';
$string['randomqplusnamecourse'] = 'ランダム (このコースのカテゴリどれでも)';
$string['randomqplusnamecoursecat'] = 'ランダム (コースカテゴリ {$a} 内のカテゴリどれでも)';
$string['randomqplusnamecoursecattags'] = 'ランダム (コースカテゴリ {$a->category} 内のカテゴリすべて - タグ: {$a->tags})';
$string['randomqplusnamecoursetags'] = 'ランダム (このコース内のカテゴリすべて - タグ: {$a->tags})';
$string['randomqplusnamemodule'] = 'ランダム (この小テストのカテゴリどれでも)';
$string['randomqplusnamemoduletags'] = 'ランダム (この小テストのカテゴリすべて - タグ: {$a->tags})';
$string['randomqplusnamesystem'] = 'ランダム (システムレベルのカテゴリどれでも)';
$string['randomqplusnamesystemtags'] = 'ランダム (システムレベルのカテゴリすべて - タグ: {$a->tags})';
$string['randomqplusnametags'] = 'ランダム ({$a->category} およびサブカテゴリ - タグ: {$a->tags})';
$string['selectedby'] = '{$a->randomname} に選択された {$a->questionname}';
$string['selectmanualquestions'] = 'ランダム問題が手動評定問題を使用できる';
$string['taskunusedrandomscleanup'] = '未使用のランダム問題を削除する';
