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
 * Strings for component 'block_grade_me', language 'ja', version '4.5'.
 *
 * @package     block_grade_me
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alt_gradebook'] = '{$a->course_name} 評定表に移動する ...';
$string['alt_mark'] = 'チェック';
$string['alt_mod'] = '評定表の {$a->mod_name} に移動する';
$string['datetime'] = '%Y/%m/%d %H:%M';
$string['excess'] = '{$a->maxcourses} 以上のコースに未評定の課題があります。';
$string['expand'] = '折りたたむ / 展開する';
$string['grade_me:addinstance'] = '新しいグレードミーブロックを追加する';
$string['grade_me:myaddinstance'] = 'マイMoodleページに新しいグレードミーブロックを追加する';
$string['grade_me_tools'] = 'ツール';
$string['grade_me_tools_desc'] = '<p><a href="{$a}/blocks/grade_me/quiz_update_ngrade.php">評定が必要な小テストを再読み込みする</a></p>';
$string['link_grade_img'] = '課題を評定する ...';
$string['link_gradebook'] = '{$a->course_name} に移動する ...';
$string['link_gradebook_icon'] = '{$a->course_name} 評定表に移動する ...';
$string['link_mod'] = '{$a->mod_name} に移動する';
$string['link_mod_img'] = '評定表の {$a->mod_name} に移動する ...';
$string['link_user_profile'] = '{$a->last_name} さんのプロファイル …';
$string['nothing'] = '評定するものはありません!';
$string['pluginname'] = 'グレードミー';
$string['pluginname-reset'] = 'グレードミー - テーブルリセット';
$string['quiz_update_ngrade_complete'] = '更新完了';
$string['quiz_update_ngrade_success'] = '小テスト受験リストが正常に更新されました。現在評定が必要な問題が {$a} 問あります。';
$string['settings_adminviewall'] = '管理者にすべてを表示する';
$string['settings_configadminviewall'] = '管理者に評定者ロールを持つコースだけではなく、すべての未評定課題を閲覧する権利を与えます。';
$string['settings_configenablepre'] = 'グレードミーは「 {$a->plugin_name} 」モジュールからの未評定活動を表示しますか?';
$string['settings_configmaxage'] = '評定可能アイテムの最大表示日数です。これより古いアイテムは非表示となります。制限なしの場合は「0」を入力してください。';
$string['settings_configmaxcourses'] = '表示する未評定コースの最大数を設定してください。これを高く設定しすぎた場合、パフォーマンスに影響を与える可能性があります。';
$string['settings_configshowhidden'] = '非表示コースで評定項目を表示できるようにする';
$string['settings_enablepre'] = '表示';
$string['settings_maxage'] = '最大日数';
$string['settings_maxcourses'] = '最大コース表示数';
$string['settings_showhidden'] = '非表示コースアイテムを表示する';
$string['title'] = 'グレードミー';
