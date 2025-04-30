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
 * Strings for component 'grading', language 'ja', version '4.4'.
 *
 * @package     grading
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activemethodinfo'] = '「 {$a->area} 」エリアのアクティブな評定方法として 「 {$a->method} 」が選択されました。';
$string['activemethodinfonone'] = '選択された「 {$a->area} 」エリアに高度な評定方法はありません。シンプル直接評定が使用されます。';
$string['changeactivemethod'] = 'アクティブ評定方法を次に変更する';
$string['clicktoclose'] = 'クリックして閉じる';
$string['error:gradingunavailable'] = '高度な評定方法が正しく設定されていません。フォーラム設定でフォーラム全体の評定オプションを確認してください。';
$string['error:notinrange'] = '無効な評点「 {$a->grade} 」が提供されました。評点は 0 から {$a->maxgrade} の間にしてください。';
$string['exc_gradingformelement'] = '評定フォームエレメントをインスタンス化できません。';
$string['formnotavailable'] = '高度な評定方法が選択されましたが、さらに評定フォームを定義する必要があります。';
$string['gradingformunavailable'] = '注意: 現在、高度な評定フォームの準備が整っていません。フォームが有効な状態になるまでシンプル直接評定方法が使用されます。';
$string['gradingmanagement'] = '高度な評定';
$string['gradingmanagementtitle'] = '高度な評定: {$a->component} ({$a->area})';
$string['gradingmethod'] = '評定方法';
$string['gradingmethod_help'] = 'コンテクスト内で評定計算に使用する高度な評定方法を選択してください。

高度な評定方法を無効にしてデフォルト評定方法に戻すには「シンプル直接評定」を選択してください。';
$string['gradingmethodnone'] = 'シンプル直接評定';
$string['gradingmethods'] = '評定方法';
$string['manageactionclone'] = 'テンプレートから新しい評定フォームを作成する';
$string['manageactiondelete'] = '現在定義されているフォームを削除する';
$string['manageactiondeleteconfirm'] = 'あなたは評定フォーム「 {$a->formname} 」および関連する情報すべてを「 {$a->component} ({$a->area}) 」から削除しようとしています。以下の結果を十分ご理解ください。

* この操作は元に戻せません。
* あなたはこのフォームを削除せずに「シンプル直接評定」を含む他の評定方法にスイッチできます。
* どのように評定フォーム記入方法に関するすべての情報が失われます。
* 評定表に保存された計算済みの評定結果は影響を受けません。しかし、評定がどのように計算されたかという説明は閲覧できないようになります。
* この操作は他の活動でのこのフォームのコピーには影響しません。';
$string['manageactiondeletedone'] = 'フォームが正常に削除されました。';
$string['manageactionedit'] = '現在のフォーム定義を編集する';
$string['manageactionnew'] = '新しい評定フォームを最初から定義する';
$string['manageactionshare'] = '新しいテンプレートとしてフォームを公開する';
$string['manageactionshareconfirm'] = 'あなたは新しいパブリックテンプレートとして評定フォーム「 {$a} 」を保存しようとしています。あなたのサイトの他のユーザはこのテンプレートから活動内に新しい評定フォームを作成できます。';
$string['manageactionsharedone'] = 'フォームがテンプレートとして正常に保存されました。';
$string['noitemid'] = '評定できません。評定項目がありません。';
$string['nosharedformfound'] = 'テンプレートはありません。';
$string['privacy:metadata:grading_definitions'] = '評定可能エリアに定義された高度な評定フォームに関する基本情報です。';
$string['privacy:metadata:grading_definitions:areaid'] = '高度な評定フォームが定義された場所のエリアIDです。';
$string['privacy:metadata:grading_definitions:copiedfromid'] = 'これがコピーされた元の評定定義IDです。';
$string['privacy:metadata:grading_definitions:description'] = '高度な評定方法の説明です。';
$string['privacy:metadata:grading_definitions:method'] = '定義に関連する評定方法です。';
$string['privacy:metadata:grading_definitions:name'] = '高度な評定定義名です。';
$string['privacy:metadata:grading_definitions:options'] = 'この評定定義の設定です。';
$string['privacy:metadata:grading_definitions:status'] = 'この高度な評定定義のステータスです。';
$string['privacy:metadata:grading_definitions:timecopied'] = '評定定義がコピーされた日時です。';
$string['privacy:metadata:grading_definitions:timecreated'] = '評定定義が作成された日時です。';
$string['privacy:metadata:grading_definitions:timemodified'] = '評定定義の最終更新日時です。';
$string['privacy:metadata:grading_definitions:usercreated'] = '評定定義を作成したユーザのIDです。';
$string['privacy:metadata:grading_definitions:usermodified'] = '評定定義を最後に更新したユーザのIDです。';
$string['privacy:metadata:grading_instances'] = '評価者によって評価された評定項目の評価レコードです。';
$string['privacy:metadata:grading_instances:feedback'] = 'ユーザにより与えられたフィードバックです。';
$string['privacy:metadata:grading_instances:feedbackformat'] = 'ユーザにより与えられたフィードバックのテキストフォーマットです。';
$string['privacy:metadata:grading_instances:raterid'] = '評定インスタンスを評価したユーザのIDです。';
$string['privacy:metadata:grading_instances:rawgrade'] = '評定インスタンスの評定です。';
$string['privacy:metadata:grading_instances:status'] = 'この評定インスタンスのステータスです。';
$string['privacy:metadata:grading_instances:timemodified'] = '評定インスタンスの最終更新日時です。';
$string['privacy:metadata:gradingformpluginsummary'] = '評定方法のデータです。';
$string['searchownforms'] = '私のフォームを含む';
$string['searchtemplate'] = '評定フォーム検索';
$string['searchtemplate_help'] = 'あなたは評定フォームを検索した上で新しいフォームのテンプレートとしてここで使用できます。フォーム名、説明またはフォーム本文に使用されている単語を入力してください。文を検索するには検索後を二重引用符 (") で囲んでください。

デフォルトでは共有テンプレートとして保存されているテンプレートは検索結果に含まれます。あなたは自分の評定フォームを検索結果に含むこともできます。このようにすることであなたの評定フォームを共有せずに再利用できます。「利用可能」とマークされているフォームのみ再利用できます。';
$string['statusdraft'] = '下書き';
$string['statusready'] = '利用可能';
$string['templatedelete'] = '削除';
$string['templatedeleteconfirm'] = 'あなたは共有テンプレート「 {$a} 」を削除しようとしています。テンプレートを削除した場合、そのテンプレートから作成された既存のフォームは影響を受けません。';
$string['templateedit'] = '編集';
$string['templatepick'] = 'このテンプレートを使用する';
$string['templatepickconfirm'] = '「 {$a->component} ({$a->area}) 」の新しい評定フォームのテンプレートとして評定フォーム「 {$a->formname} 」を使用しますか?';
$string['templatepickownform'] = 'このフォームをテンプレートとして使用する';
$string['templatesource'] = 'ロケーション: {$a->component} ({$a->area})';
$string['templatetypeown'] = '私のフォーム';
$string['templatetypeshared'] = '共有テンプレート';
