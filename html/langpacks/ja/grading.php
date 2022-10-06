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
 * Strings for component 'grading', language 'ja', branch 'MOODLE_38_STABLE'
 *
 * @package   grading
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activemethodinfo'] = '「 {$a->area} 」エリアのアクティブ評定方法として、 「 {$a->method} 」が選択されました。';
$string['activemethodinfonone'] = '「 {$a->area} 」エリアに高度な評定方法はありません。シンプル直接評定が使用されます。';
$string['changeactivemethod'] = 'アクティブ評定方法を変更する';
$string['clicktoclose'] = '閉じるにはクリックしてください。';
$string['error:notinrange'] = '無効な評点「 {$a->grade} 」が提供されました。評点は 0 から {$a->maxgrade} の間にしてください。';
$string['exc_gradingformelement'] = '評定フォームエレメントを例示できません。';
$string['formnotavailable'] = '高度な評定方法が選択されましたが、現在のところ評定フォームを利用できません。アクションメニューまたは管理ブロック内のリンクを使用して最初に評定フォームを定義してください。';
$string['gradingformunavailable'] = '注意: 現在、高度な評定フォームの準備が整っていません。フォームが有効な状態になるまで、シンプル直接評定方法が使用されます。';
$string['gradingmanagement'] = '高度な評定';
$string['gradingmanagementtitle'] = '高度な評定: {$a->component} ({$a->area})';
$string['gradingmethod'] = '評定方法';
$string['gradingmethod_help'] = 'コンテクスト内で評定計算に使用される高度な評定方法を選択してください。

高度な評定方法を無効にしてデフォルト評定方法に戻すには「シンプル直接評定」を選択してください。';
$string['gradingmethodnone'] = 'シンプル直接評定';
$string['gradingmethods'] = '評定方法';
$string['manageactionclone'] = 'テンプレートから新しい評定フォームを作成する';
$string['manageactiondelete'] = '現在定義されているフォームを削除する';
$string['manageactiondeleteconfirm'] = 'あなたは評定フォーム「 {$a->formname} 」および関連する情報すべてを「 {$a->component} ({$a->area}) 」から削除しようとしています。以下の内容を十分理解して、操作を進めてください:

* この操作を元に戻すことはできません。
* このフォームを削除せずに、あなたは「シンプル直接評定」を含む他の評定方法にスイッチすることができます。
* どのように評定フォームが補完されるかということも含めて、すべての情報が失われます。
* 評定表に保存された計算済みの評定結果は影響を受けません。しかし、評定がどのように計算されたかという説明は閲覧できないようになります。
* この操作により、このフォームがコピーされた他の活動内のフォームは影響を受けません。';
$string['manageactiondeletedone'] = 'フォームが正常に削除されました。';
$string['manageactionedit'] = '現在のフォーム定義を編集する';
$string['manageactionnew'] = '新しい評定フォームを最初から定義する';
$string['manageactionshare'] = '新しいテンプレートとしてフォームを公開する';
$string['manageactionshareconfirm'] = 'あなたは新しいパブリックテンプレートとして、評定フォーム「 {$a} 」を保存しようとしています。あなたのサイトの他のユーザはこのテンプレートから活動内に新しい評定フォームを作成することができます。';
$string['manageactionsharedone'] = 'フォームがテンプレートとして正常に保存されました。';
$string['noitemid'] = '評定できません。評定項目がありません。';
$string['nosharedformfound'] = 'テンプレートはありません。';
$string['privacy:metadata:grading_definitions'] = '評定可能エリアの高度な評定フォーム定義に関する基本情報です。';
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
$string['privacy:metadata:gradingformpluginsummary'] = '評定方法のデータです。';
$string['privacy:metadata:grading_instances'] = '評価者によって評価された評定可能アイテムの評価レコードです。';
$string['privacy:metadata:grading_instances:feedback'] = 'ユーザにより与えられたフィードバックです。';
$string['privacy:metadata:grading_instances:feedbackformat'] = 'ユーザにより与えられたフィードバックのテキストフォーマットです。';
$string['privacy:metadata:grading_instances:raterid'] = '評定インスタンスを評価したユーザのIDです。';
$string['privacy:metadata:grading_instances:rawgrade'] = '評定インスタンスの評定です。';
$string['privacy:metadata:grading_instances:status'] = '評定インスタンスのステータスです。';
$string['privacy:metadata:grading_instances:timemodified'] = '評定インスタンスの最終更新日時です。';
$string['searchownforms'] = '私のフォームを含む';
$string['searchtemplate'] = '評定フォーム検索';
$string['searchtemplate_help'] = 'あなたは評定フォームを検索して新しいフォームのテンプレートとしてここで使用することができます。フォーム名、説明またはフォーム本文に使われている単語を入力してください。言葉を検索するには検索後を二重引用符 (") で囲んでください。

デフォルトでは共有テンプレートとして保存されているテンプレートは検索結果に含まれます。あなたは自分の評定フォームを検索結果に含むこともできます。このようにすることであなたの評定フォームを共有せずに再利用することができます。「利用可能」とマークされているフォームのみ再利用することができます。';
$string['statusdraft'] = '下書き';
$string['statusready'] = '利用可能';
$string['templatedelete'] = '削除';
$string['templatedeleteconfirm'] = 'あなたは共有テンプレート「 {$a} 」を削除しようとしています。このフォームをベースとして作成されたフォームはテンプレートを削除することで影響を受けることはありません。';
$string['templateedit'] = '編集';
$string['templatepick'] = 'このテンプレートを使用する';
$string['templatepickconfirm'] = '「 {$a->component} ({$a->area}) 」内の新しい評定フォームのテンプレートとして、評定フォーム「 {$a->formname} 」を使用しますか?';
$string['templatepickownform'] = 'このフォームをテンプレートとして使用する';
$string['templatesource'] = 'ロケーション: {$a->component} ({$a->area})';
$string['templatetypeown'] = '私のフォーム';
$string['templatetypeshared'] = '共有テンプレート';
