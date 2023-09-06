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
 * Strings for component 'block_point_view', language 'ja', version '4.1'.
 *
 * @package     block_point_view
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminpix'] = 'サイトデフォルト:';
$string['blacktrack'] = 'ブラックトラック';
$string['blockdisabled'] = '<h3 class="text-danger">ブロックは無効にされています。</h3>';
$string['bluetrack'] = 'ブルートラック';
$string['contentinputlabel'] = 'ブロックコンテンツ';
$string['contentinputlabel_help'] = 'このフィールドではブロックに表示されるテキストを変更できます。空白のままにした場合、学生にブロックは表示されません。';
$string['customemoji'] = 'カスタム絵文字';
$string['customemoji_help'] = 'リアクションで使用するカスタム絵文字をここで設定できます。<h5 class="text-danger">Important:</h5>絵文字画像のファイル名 <b><code>[emoji_name].png</code></b>: <code>easy.png</code>, <code>better.png</code>, <code>hard.png</code> 同時にグループ絵文字<b><code>group_[emojis_initials].png</code></b>が必要です。例えば次のようになります: <code>group_EB.png</code>は「簡単」および「上達」リアクションのグループ絵文字です。投票なしのイメージファイル<b><code>group_.png</code></b>も忘れないでください。推奨イメージサイズは絵文字200x200、グループ絵文字400x200です。<br /><br /> 想定される11ファイルは次のとおりです: <code>easy.png</code>, <code>better.png</code>, <code>hard.png</code>, <code>group_.png</code>, <code>group_E.png</code>, <code>group_B.png</code>, <code>group_H.png</code>, <code>group_EB.png</code>, <code>group_EH.png</code>, <code>group_BH.png</code>, <code>group_EBH.png</code>';
$string['custompix'] = 'カスタム:';
$string['defaultpix'] = 'デフォルト:';
$string['defaulttextbetter'] = '上達しました!';
$string['defaulttextcontent'] = 'このプラグインは活動に対して反応および困難レベルを与える可能性を提供します。<br/ ><br />このプラグインは<a href="mailto:q.fombaron@outlook.fr?subject=%22Point%20of%20view%22%20Moodle%20plugin%20-%20Feedback">Quentin Fombaron</a>によって開発されました。<br /><br />あなたはブロック設定メニューでこのテキストを編集または削除できます。<br /><br />';
$string['defaulttexteasy'] = '簡単です!';
$string['defaulttexthard'] = '難しい ...';
$string['delete_custom_pix'] = 'カスタム絵文字を削除する';
$string['deleteemojiconfirmation'] = '本当にこのブロックのカスタム絵文字を削除してもよろしいですか? これにより下の下書きエリアで現在保存されている絵文字およびファイルが削除されます。この操作は元に戻せません。';
$string['disable_type'] = 'すべての <b>{$a}</b> を無効にする';
$string['disableall'] = '<b>{$a}</b> ですべてを無効にする';
$string['emojidesc'] = '絵文字説明';
$string['emojidesc_help'] = 'リアクショントップに表示するカスタムテキストです。';
$string['emojitouse'] = '使用する絵文字';
$string['emojitouse_help'] = 'このコースでリアクションとして使用される絵文字を選択してください。<br />あなたは「カスタム」を選択して独自のカスタム絵文字を追加できます。';
$string['enable_disable_section'] = 'このセクションですべてを有効/無効にする';
$string['enable_disable_section_help'] = 'このセクションのすべて活動モジュールでリアクションを有効または無効にします。';
$string['enable_disable_type'] = 'このタイプすべてを有効/無効にする';
$string['enable_disable_type_help'] = 'コース内のこのタイプのすべての活動モジュールでリアクションを有効または無効にします。';
$string['enable_type'] = 'すべての <b>{$a}</b> を有効にする';
$string['enableall'] = '<b>{$a}</b> ですべてを有効にする';
$string['enablecustompix'] = 'カスタムリアクション絵文字を使用する';
$string['enabledifficulties'] = '<b>難易度トラック</b>を有効にする';
$string['enableforfuturemodules'] = '将来的なモジュールを有効にする';
$string['enableforfuturemodules_help'] = 'このコースで作成される新しいモジュールで自動的にリアクションを有効にします。';
$string['enablepoint_views'] = '<b>リアクション</b>を有効にする';
$string['errorfilemanager'] = '<b>エラー</b>: <b>{$a}.png</b>の名称が適合していません。';
$string['errorfilemanagerempty'] = '少なくとも1つのファイルを提供してください。';
$string['greentrack'] = 'グリーントラック';
$string['header_activities'] = 'リアクションおよび難易度トラックを設定する';
$string['header_images'] = '絵文字設定';
$string['module'] = 'モジュール';
$string['noactivity'] = '活動なし';
$string['nonetrack'] = 'トラックなし';
$string['pluginname'] = 'ポイントオブビュー';
$string['point_view:access_overview'] = 'リアクション詳細を表示する';
$string['point_view:addinstance'] = 'ポイントオブビューブロックインスタンスを追加する';
$string['point_view:myaddinstance'] = 'ダッシュボードにポイントオブビューブロックインスタンスを追加する';
$string['privacy:metadata:activity_votes_database:cmid'] = 'カスタム活動ID';
$string['privacy:metadata:activity_votes_database:courseid'] = 'コースID';
$string['privacy:metadata:activity_votes_database:userid'] = 'ユーザID';
$string['privacy:metadata:activity_votes_database:vote'] = '投票 1 (簡単です!), 2 (上達しました!), 3 (難しい ...)';
$string['privacy:metadata:block_point_view'] = 'ポイントオブビューブロックはそれぞれの活動のユーザの投票を保存します。';
$string['reactions'] = 'リアクション';
$string['reactionsdetails'] = 'リアクション詳細';
$string['reactionsresetsuccessfully'] = 'リアクションが正常にリセットされました。';
$string['reactionsunavailable'] = 'あなたはこのモジュールでリアクションを追加または削除できません。';
$string['redtrack'] = 'レッドトラック';
$string['resetcoursereactions'] = '<b>{$a}</b> コースリアクションをリセットする';
$string['resetreactions'] = 'リアクションをリセットする';
$string['resetreactions_help'] = 'コースのすべてのユーザリアクションをリセット (削除) する';
$string['resetreactionsconfirmation'] = '本当にコース「 {$a} 」のすべてのユーザリアクションをリセット (削除) してもよろしいですか? この操作は元に戻せません。';
$string['showotherreactions'] = '他のユーザのリアクションを表示する';
$string['showotherreactions_help'] = 'モジュールにおける他のユーザからのそれぞれのタイプのリアクション数を学生が確認できるようにします。';
$string['totalreactions'] = '合計リアクション: {$a}';
