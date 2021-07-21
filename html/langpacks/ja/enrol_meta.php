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
 * Strings for component 'enrol_meta', language 'ja', version '3.11'.
 *
 * @package     enrol_meta
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addgroup'] = 'グループに追加する';
$string['coursesort'] = 'コース一覧を並べ替える';
$string['coursesort_help'] = 'ここではリンクできるコース一覧を並べ替え順 (例 「サイト管理 > コース > コースおよびカテゴリを管理する」で設定された順序) またはコース設定のアルファベット順で並べ替えるかどうか決定します。';
$string['creategroup'] = '新しいグループを作成する';
$string['defaultgroupnametext'] = '{$a->name} コース {$a->increment}';
$string['enrolmetasynctask'] = 'メタ登録同期タスク';
$string['linkedcourse'] = 'コースにリンクする';
$string['meta:config'] = 'メタ登録インスタンスを設定する';
$string['meta:selectaslinked'] = 'メタリンクされるコースを選択する';
$string['meta:unenrol'] = '一時停止ユーザを登録解除する';
$string['nosyncroleids'] = '同期しないロール';
$string['nosyncroleids_desc'] = 'デフォルトではすべてのコースレベルのロールは親コースから子コースに同期されます。ここで選択されたロールは同期処理に含まれることはありません。同期に使用できるロールは次のcron実行時に更新されます。';
$string['pluginname'] = 'コースメタリンク';
$string['pluginname_desc'] = 'コースメタリンク登録プラグインでは2つの異なるコース間で登録およびロールを同期します。';
$string['privacy:metadata:core_group'] = 'コースメタリンクプラグインは新しいグループを作成または既存のグループを使用してコースにリンクされた参加者すべてを追加することができます。';
$string['syncall'] = 'すべての登録済みユーザを同期する';
$string['syncall_desc'] = 'この設定を有効にした場合、親コースにロールがない場合でも登録済みユーザすべてが同期されます。この設定を無効にした場合、少なくとも1つの同期ロールが割り当てられているユーザのみが子コースに登録されます。';
