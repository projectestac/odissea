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
 * Strings for component 'cohort', language 'ja', branch 'MOODLE_36_STABLE'
 *
 * @package   cohort
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcohort'] = '新しいコーホートを追加する';
$string['allcohorts'] = 'すべてのコーホート';
$string['anycohort'] = 'すべて';
$string['assign'] = '割り当て';
$string['assigncohorts'] = 'コーホートメンバーを割り当てる';
$string['assignto'] = 'コーホート「 {$a} 」メンバー';
$string['backtocohorts'] = 'コーホートに戻る';
$string['bulkadd'] = 'コーホートに追加する';
$string['bulknocohort'] = '利用可能なコーホートは見つかりませんでした。';
$string['categorynotfound'] = 'カテゴリ <b>{$a}</b> が見つからないか、あなたにはコーホートを作成するパーミッションがありません。デフォルトコンテクストが使用されます。';
$string['cohort'] = 'コーホート';
$string['cohorts'] = 'コーホート';
$string['cohortsin'] = '{$a}: 利用可能なコーホート';
$string['component'] = 'ソース';
$string['contextnotfound'] = 'コンテクスト <b>{$a}</b> が見つからないか、あなたにはコーホートを作成するパーミッションがありません。デフォルトコンテクストが使用されます。';
$string['csvcontainserrors'] = 'CSVデータにエラーが見つかりました。詳細は以下をご覧ください。';
$string['csvcontainswarnings'] = 'CSVデータに警告が見つかりました。詳細は以下をご覧ください。';
$string['csvextracolumns'] = 'カラム <b>{$a}</b> は無視されます。';
$string['currentusers'] = '現在のユーザ';
$string['currentusersmatching'] = '既存ユーザとの合致';
$string['defaultcontext'] = 'デフォルトコンテクスト';
$string['delcohort'] = 'コーホートを削除する';
$string['delconfirm'] = '本当にコーホート「 {$a} 」を削除してもよろしいですか?';
$string['description'] = '説明';
$string['displayedrows'] = '{$a->total} 行中 {$a->displayed} 行が表示されます。';
$string['duplicateidnumber'] = '同一IDナンバーのコーホートがすでに存在します。';
$string['editcohort'] = 'コーホートを編集する';
$string['editcohortidnumber'] = 'コーホートIDを編集する';
$string['editcohortname'] = 'コーホート名を編集する';
$string['eventcohortcreated'] = 'コーホートが作成されました。';
$string['eventcohortdeleted'] = 'コーホートが削除されました。';
$string['eventcohortmemberadded'] = 'コーホートにユーザが追加されました。';
$string['eventcohortmemberremoved'] = 'コーホートからユーザが削除されました。';
$string['eventcohortupdated'] = 'コーホートが更新されました。';
$string['external'] = '外部コーホート';
$string['idnumber'] = 'コーホートID';
$string['invalidtheme'] = 'コーホートテーマが存在しません。';
$string['memberscount'] = 'コーホート数';
$string['name'] = '名称';
$string['namecolumnmissing'] = 'CSVファイルのフォーマットに問題があります。正しいカラム名が含まれていることを確認してください。ユーザをコーホートに追加するにはサイト管理の「ユーザをアップロードする」に移動してください。';
$string['namefieldempty'] = 'フィールド名を空白にすることはできません。';
$string['newidnumberfor'] = 'コーホート {$a} の新しいIDナンバー';
$string['newnamefor'] = 'コーホート {$a} の新しい名称';
$string['nocomponent'] = '手動作成';
$string['potusers'] = '潜在的ユーザ';
$string['potusersmatching'] = '潜在的な合致ユーザ';
$string['preview'] = 'プレビュー';
$string['privacy:metadata:cohort_members'] = 'ユーザのコーホートに関する情報です。';
$string['privacy:metadata:cohort_members:cohortid'] = 'コーホートのIDです。';
$string['privacy:metadata:cohort_members:timeadded'] = 'タイムスタンプはユーザがコーホートに追加された日時を示します。';
$string['privacy:metadata:cohort_members:userid'] = 'コーホートに関連するユーザのIDです。';
$string['removeuserwarning'] = 'コーホートからユーザを削除することにより、結果としてユーザ設定、評定、グループメンバーシップおよびコースに関係するユーザ情報も含めて、複数のコースからユーザを登録解除することになります。';
$string['search'] = '検索';
$string['searchcohort'] = 'コーホートを検索する';
$string['selectfromcohort'] = 'コーホートからメンバーを選択する';
$string['systemcohorts'] = 'システムコーホート';
$string['unknowncohort'] = '不明なコーホートです ({$a})!';
$string['uploadcohorts'] = 'コーホートをアップロードする';
$string['uploadcohorts_help'] = 'テキストファイルによってコーホートをアップロードすることができます。ファイルのフォーマットは以下に従ってください:

* それぞれの行に1レコードを含んでください。
* それぞれのレコードはカンマ (またはデリミタ) によって区切られた一連のデータです。
* 最初のレコードにはファイルの残りの部分のフォーマットを定義するフィールド名一覧を含んでください。
* 必須フィールド名は「name」です。
* 任意フィールド名は「idnumber」「description」「descriptionformat」「context」「category」「category_id」「category_idnumber」「category_path」です。';
$string['uploadedcohorts'] = '{$a} 件のコーホートをアップロードする';
$string['useradded'] = 'ユーザがコーホート「 {$a} 」に追加されました。';
$string['visible'] = '可視性';
$string['visible_help'] = 'コーホートコンテクスト内で「moodle/cohort:view」ケイパビリティが割り当てられたユーザはコーホートすべてを閲覧することができます。<br />
また、利用可能なコーホートはコース内のユーザによって閲覧することもできます。';
