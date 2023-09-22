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
 * Strings for component 'block_massaction', language 'ja', version '4.1'.
 *
 * @package     block_massaction
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action_contentchangednotification'] = 'コンテンツ変更通知を送信する';
$string['action_delete'] = '削除する';
$string['action_duplicate'] = '複製する';
$string['action_duplicatetocourse'] = '別のコースに複製する';
$string['action_duplicatetosection'] = 'セクションに複製する';
$string['action_hide'] = '秘匿する';
$string['action_hidedescription'] = '説明を秘匿する';
$string['action_makeavailable'] = '利用可能にする';
$string['action_moveleft'] = 'アウトデント (左に移動する)';
$string['action_moveright'] = 'インデント (右に移動する)';
$string['action_movetosection'] = 'セクションに移動する';
$string['action_show'] = '表示する';
$string['action_showdescription'] = '説明を表示する';
$string['actionexecuted'] = 'あなたがリクエストしたアクションが実行されました。';
$string['applicablecourseformats'] = '適用可能なコースフォーマット';
$string['applicablecourseformats_description'] = 'マスアクションブロックは選択されたコースフォーマットでのみ使用できます。<br />事前に選択されたデフォルトはプラグインメンテナによりテストおよびサポートされたものです。あなたの責任で他のフォーマットは追加してください。';
$string['backgroundtaskinformation'] = 'あなたが要求したアクションはバックグラウンドで実行されます。あなたは完了を待つ間、作業を継続できます。';
$string['blockname'] = 'マスアクション';
$string['blocktitle'] = 'マスアクション';
$string['choosecoursetoduplicateto'] = 'あなたが選択したコースモジュールの複製先のコースを選択してください。';
$string['choosesectiontoduplicateto'] = 'あなたが選択したコースモジュールの複製先のセクションを選択してください。';
$string['choosetargetcourse'] = 'ターゲットコースを選択する';
$string['choosetargetsection'] = 'ターゲットセクションを選択する';
$string['confirmcourseselect'] = 'コースを選択する';
$string['confirmsectionselect'] = 'セクションを選択する';
$string['deletecheck'] = '一括削除を確認する';
$string['deletecheckconfirm'] = '本当に次のモジュールを削除してもよろしいですか?';
$string['deselectall'] = 'すべてを選択解除する';
$string['duplicatemaxactivities'] = '複製するコースモジュールの最大数';
$string['duplicatemaxactivities_description'] = 'バックグラウンドタスクとしてプロセスを実行せずに同時に複製できるコースモジュールの最大数です。「0」に設定した場合、すべての複製処理はバックグラウンドタスクとして実行されます。';
$string['invalidaction'] = '不明な操作: {$a}';
$string['invalidcourseid'] = '無効なコースID';
$string['invalidcoursemodule'] = '無効なコースモジュール';
$string['invalidmoduleid'] = '無効なモジュールID: {$a}';
$string['jsonerror'] = 'コーディングエラー: 無効なJSONフォーマットです。';
$string['keepsectionnum'] = 'オリジナルセクションナンバを保持する';
$string['limittoenrolled'] = '対象コースリストをユーザが登録されているコースに限定する';
$string['limittoenrolled_description'] = 'この設定を有効にした場合、「別のコースに複製する」機能のコース選択はユーザが登録されているコースに制限されます。コースを制限しない場合、パフォーマンス問題およびタイムアウトが発生する可能性が高いため、多くのコースが存在するインスタンスではこのオプションの有効化をお勧めします。あなたの責任でこのオプションは無効にしてください。';
$string['massaction:addinstance'] = '新しいマスアクションブロックを追加する';
$string['massaction:sendcontentchangednotifications'] = 'コンテンツ変更通知を送信する';
$string['massaction:use'] = 'マスアクションブロックを使用する';
$string['modulename'] = '活動名';
$string['moduletype'] = '活動タイプ';
$string['multipleinstances'] = 'このブロックは同一ページに複数は存在できません。
<br />
追加インスタンスを削除してください。';
$string['newsection'] = '新しいセクション';
$string['noaction'] = 'アクション指定なし';
$string['noactionsavailable'] = 'あなたにはこのブロックが提供する可能性のあるアクションを実行するためのパーミッションがありません。';
$string['nocaptobackup'] = 'あなたにはコースでバックアップを実行するための十分なパーミッションがありません。';
$string['nocaptorestore'] = 'あなたにはコースでリストアを実行するための十分なパーミッションがありません。';
$string['noitemselected'] = 'マスアクションを適用するアイテムを少なくとも1つ選択してください。';
$string['nomovingtargetselected'] = 'ターゲットセクションを選択してください。';
$string['notargetcourseidspecified'] = '対象のコースIDが指定されていません。';
$string['pluginname'] = 'マスアクション';
$string['privacy:metadata'] = 'このブロックは同時に複数のコースモジュールに標準操作を適用する可能性を提供するのみです。そのため、このブロックではデータは保存されません。';
$string['sectionnotexist'] = 'ターゲットセクションが存在しません。';
$string['sectionselect'] = 'セクション選択';
$string['sectionselect_help'] = 'あなたは少なくとも1つのコースモジュールを含むセクションのみ選択できます。加えてTilesまたはOne Topicのコースフォーマットを使用する場合、あなたは現在表示されているセクションのみ選択できます。';
$string['selectall'] = 'すべてを選択する';
$string['selectallinsection'] = 'セクション内すべてを選択する';
$string['sourcecourseidlost'] = 'ソースコースIDが見つかりませんでした。';
$string['unusable'] = 'このコースフォーマットまたは現在のテーマではマスアクション機能は使用できません。';
$string['usage'] = 'マスアクションブロックの使い方';
$string['usage_help'] = '<p>このブロックでインストラクタは個々のアイテムに繰り返しアクションを実行することなく、クラス表示で複数のリソースまたは活動にアクションを実行できます。</p>
<p>このブロックを使用するにはあなたのブラウザのJavaScriptを有効にしてコースホームページを編集モードにする必要があります。サポートされるコースフォーマットは「ウィークリー」「トピック」「Topcoll」「Onetopic」および「Tiles」です。</p>
<p>サポートされるアクションには削除、インデント内/外、秘匿/表示、移動が含まれます。アクションを実行するアイテムを選択するにはコースホームページでその左側にあるチェックボックスをクリックするか、すべてのアイテムを選択するか、ブロックを使用してセクション内すべてのアイテムを選択してください。アクションを実行するにはあなたがブロック内で実行したいアクションをクリックしてください。</p>';
$string['withselected'] = '選択したものに対して';
