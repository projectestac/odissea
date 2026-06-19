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
 * Strings for component 'publication', language 'ja', version '4.5'.
 *
 * @package     publication
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_uploads'] = 'ファイルを追加する';
$string['allfiles'] = 'すべてのファイル';
$string['allowedfiletypes'] = '許可されるファイルタイプ';
$string['allowedfiletypes_err'] = '入力をチェックしてください! 無効なファイル拡張子またはセパレータです。';
$string['allowedfiletypes_help'] = '許可されるファイルタイプはカンマで区切られたmimetypeのリスト (例「video/mp4, audio/mp3, image/png, image/jpeg」) またはドットを含むファイル拡張子 (例「.png, .jpg」) を入力して制限できます。フィールドが空白の場合、すべてのファイルタイプが許可されます。';
$string['allowsubmissionsanddescriptionfromdatesummary'] = '課題詳細および提出フォームは <strong>{$a}</strong> から入手可能です。';
$string['allowsubmissionsfromdate'] = '開始';
$string['allowsubmissionsfromdate_import'] = '承認開始';
$string['allowsubmissionsfromdate_upload'] = 'アップロード開始';
$string['allowsubmissionsfromdatesummary'] = 'この課題は <strong>{$a}</strong> からの提出を受け付けます。';
$string['alwaysshowdescription'] = '常に説明を表示する';
$string['alwaysshowdescription_help'] = 'この設定を無効にした場合、上の課題説明は「アップロード/承認開始」日にのみ学生に表示されます。';
$string['approval_timeover'] = 'あなたは変更期間中のみ承認を変更できます。';
$string['approvalchange'] = '承認ステータスが変更されました。';
$string['approved'] = '承認済み';
$string['approveusers'] = '誰でも閲覧可';
$string['assignment'] = '課題';
$string['assignment_help'] = 'ファイルをインポートする課題を選択してください。現在のところ、グループ課題はサポートされていないため選択できません。';
$string['assignment_notfound'] = 'ファイルのインポート元の課題が見つかりませんでした。';
$string['assignment_notset'] = '選択された課題はありません。';
$string['availability'] = 'アップロード/承認の時間枠';
$string['choose'] = '選択してください ...';
$string['configautoimport'] = 'あなたが学生の提出物を自動的に学生フォルダインスタンスにインポートしたい場合、この設定を有効にしてください。この機能は学生フォルダインスタンスごとに個別に有効/無効に設定できます。';
$string['configmaxbytes'] = '学生フォルダ内すべてのファイルのデフォルトの最大サイズです。';
$string['configmaxfiles'] = 'ユーザごとに許可される添付のデフォルトの最大数です。';
$string['courseuploadlimit'] = 'コースアップロード制限';
$string['currentlynotapproved'] = '* 現在承認または不承認されていません。';
$string['cutoffdate'] = '遮断日';
$string['cutoffdate_help'] = 'この設定を有効にした場合、提出期限を延長しない限り、この期日経過後の提出は受け付けられません。';
$string['cutoffdate_import'] = '最終承認';
$string['cutoffdate_upload'] = '最終アップロード';
$string['cutoffdatefromdatevalidation'] = '遮断日は提出許可日以降にする必要があります。';
$string['cutoffdatevalidation'] = '遮断日は提出期限以前にできません。';
$string['details'] = '詳細';
$string['downloadall'] = 'すべてのファイルをZIPとしてダウンロードする';
$string['duedate'] = '終了';
$string['duedate_help'] = 'これは課題の提出期限です。この日以降も提出は許可されますが、この日以降に提出された課題は遅延マークされます。特定の日付以降の提出を防ぐには課題遮断日を設定してください。';
$string['duedate_import'] = '承認終了';
$string['duedate_upload'] = 'アップロード終了';
$string['duedatevalidation'] = '提出期限は提出許可日以降にする必要があります。';
$string['edit_timeover'] = 'ファイルは変更期間中のみ編集できます。';
$string['edit_uploads'] = 'ファイルを編集/アップロードする';
$string['entiresperpage'] = '1ページあたりの参加者数';
$string['eventpublicationapprovalchanged'] = '公開ファイルの承認が変更されました。';
$string['eventpublicationduedateextended'] = '公開ファイルの期限が延長されました。';
$string['eventpublicationfiledeleted'] = '公開ファイル削除';
$string['eventpublicationfileimported'] = '公開ファイルインポート';
$string['eventpublicationfileuploaded'] = '公開ファイルアップロード';
$string['extensionduedate'] = '延長期限';
$string['extensionnotafterduedate'] = '延長日は期限後にする必要があります。';
$string['extensionnotafterfromdate'] = '延長日は提出許可日以降にする必要があります。';
$string['extensionto'] = '延長:';
$string['filedetails'] = '詳細';
$string['filesofthesetypes'] = 'これらのタイプのファイルを追加できます:';
$string['go'] = 'Go';
$string['grantextension'] = '延長を許可する';
$string['guideline'] = '誰でも閲覧可:';
$string['hidden'] = '秘匿';
$string['importfrom_err'] = 'あなたがインポートしたい課題を選択する必要があります。';
$string['maxbytes'] = '最大添付サイズ';
$string['maxfiles'] = '最大添付数';
$string['messageprovider:publication_updates'] = '公開通知';
$string['mode'] = 'モード';
$string['mode_help'] = '学生がフォルダ内のドキュメントをアップロードできるか、課題のドキュメントがそのソースであるか選択してください。';
$string['modeimport'] = '課題からドキュメントを取得する';
$string['modeupload'] = '学生はドキュメントをアップロードできる';
$string['modulename'] = '学生フォルダ';
$string['modulename_help'] = '学生フォルダには以下の機能があります:
* 参加者はドキュメントをアップロードできます。ドキュメントはすぐにまたはあなたが確認および承認した後に他の参加者が利用できます。
* 課題を学生フォルダのベースとして選択できます。教師はすべての参加者がどの課題のドキュメントを閲覧できるか決定できます。教師は自分のドキュメントを他の参加者に公開するかどうか参加者に決定させることもできます。';
$string['modulenameplural'] = '学生フォルダ';
$string['myfiles'] = '自分のファイル';
$string['mygroupfiles'] = 'マイグループファイル';
$string['name'] = '学生フォルダ名';
$string['noentries'] = 'エントリなし';
$string['nofiles'] = '利用可能なファイルはありません。';
$string['nofilestozip'] = 'ZIP圧縮するファイルはありません。';
$string['nonexistentfiletypes'] = '次のファイルタイプが認識されませんでした: {$a}';
$string['nopublicationsincourse'] = 'このコースには学生フォルダのインスタンスはありません。';
$string['nothing_to_show_groups'] = '表示するものはありません - 利用可能なグループはありません。';
$string['nothing_to_show_users'] = '表示するものはありません - 利用可能な学生はありません。';
$string['nothingtodisplay'] = '表示するエントリはありません。';
$string['notice'] = '注意:';
$string['notifications'] = '通知';
$string['notifystudents'] = '承認変更に関して学生に通知する';
$string['notifystudents_help'] = 'この設定を有効にした場合、学生はアップロードの承認ステータスが変更されるたびにメッセージを受信します。メッセージ送信方法は設定可能です。';
$string['notifyteacher'] = 'アップロードに関して教師に通知する';
$string['notifyteacher_help'] = 'この設定を有効にした場合、学生がファイルをアップロードするたびに教師はメッセージを受信します。メッセージ送信方法は設定可能です。';
$string['obtainstudentapproval'] = '承認を取得する';
$string['obtainstudentapproval_help'] = '学生の承認を得るかどうか決定します:
<br />
<ul>
<li>Yes - ファイルは学生が承認した場合のみ、すべての人に公開されます。教師は承認を求めるために個々の学生/ファイルを選択できます。</li>
<li> No - 学生の承認はMoodleでは得られません。ファイルの可視性は教師のみが決定します。</li>
</ul>';
$string['obtainteacherapproval'] = 'デフォルトで承認する';
$string['obtainteacherapproval_help'] = 'アップロード時にファイルをすぐに表示するかどうか決定します:
<br />
<ul>
<li> Yes - すべてのファイルはすぐに誰でも閲覧できるようになります。</li>
<li> No - ファイルは教師が承認した場合のみ公開されます。</li>
</ul>';
$string['optionalsettings'] = 'オプション';
$string['pending'] = '保留中';
$string['pluginadministration'] = '学生フォルダ管理';
$string['pluginname'] = '学生フォルダ';
$string['privacy:metadata:approval'] = 'グループメンバがファイルを承認したか拒否したか。';
$string['privacy:metadata:contenthash'] = 'ファイルが変更されたかどうか判断するために使用されるファイルコンテンツのSHA1ハッシュです。';
$string['privacy:metadata:extduedates'] = 'mod_publicationのオーバーライド/延長された期限に関する情報を保存します。';
$string['privacy:metadata:extensionduedate'] = 'オーバーライド/延長を原因とするユーザの有効な期限です。';
$string['privacy:metadata:fileid'] = 'ファイルの識別子です。';
$string['privacy:metadata:filename'] = 'ファイル名です。';
$string['privacy:metadata:files'] = 'mod_publicationにアップロード/インポートされたファイルに関する情報 (識別子、所有者、入手元、コンテンツハッシュ、ファイル名、教師または学生の承認の有無) を保存します。';
$string['privacy:metadata:groupapproval'] = 'グループ提出からインポートされたファイルのグループメンバ承認または拒否に関する情報を保存します。';
$string['privacy:metadata:publicationfileexplanation'] = 'このプラグインのファイルおよび変換されたオンラインテキスト提出はMoodleのファイルAPI経由で保存されます。';
$string['privacy:metadata:publicationperpage'] = '単一テーブルページにいくつのエントリを表示しますか!';
$string['privacy:metadata:studentapproval'] = '学生がファイルを承認したか拒否したか。';
$string['privacy:metadata:teacherapproval'] = '教師がファイルを承認したか拒否したか。';
$string['privacy:metadata:timecreated'] = 'データレコードが作成された日時です。';
$string['privacy:metadata:timemodified'] = 'データレコードが更新/変更された最新の日時です。';
$string['privacy:metadata:type'] = 'ファイルの発生元をマークする (学生によるアップロード、提出課題からのインポートまたは提出課題からオンラインテキストへの変換)。';
$string['privacy:metadata:userid'] = 'ユーザの識別子です。';
$string['privacy:path:files'] = 'ファイル';
$string['privacy:path:resources'] = 'リソース';
$string['privacy:type:import'] = 'インポート済みファイル';
$string['privacy:type:onlinetext'] = 'インポート済みオンラインテキスト';
$string['privacy:type:upload'] = 'アップロード済みファイル';
$string['publication:addinstance'] = '新しい学生フォルダを追加する';
$string['publication:approve'] = 'すべての学生にファイルを表示するかどうか決定する';
$string['publication:grantextension'] = '延長を許可する';
$string['publication:receiveteachernotification'] = '教師への通知を受信する';
$string['publication:upload'] = 'ファイルを学生フォルダにアップロードする';
$string['publication:view'] = '学生フォルダを閲覧する';
$string['publicfiles'] = '公開ファイル';
$string['published_aftercheck'] = 'いいえ、教師の承認後のみ';
$string['published_immediately'] = 'はい、すぐに (教師の承認なし)';
$string['rejected'] = '却下';
$string['rejectusers'] = '誰でも閲覧不可';
$string['reset'] = '元に戻す';
$string['reset_userdata'] = 'すべてのデータ';
$string['resetstudentapproval'] = 'ステータスをリセットする';
$string['save_changes'] = '変更を保存する';
$string['saveapproval'] = '承認を保存する';
$string['savestudentapprovalwarning'] = '本当に変更を保存してもよろしいですか? あなたが一度設定したステータスは変更できません。';
$string['saveteacherapproval'] = '承認を保存する';
$string['search:activity'] = '学生フォルダ - 活動情報';
$string['show_details'] = '詳細を表示する';
$string['status'] = 'ステータス';
$string['status:approved'] = '承認済み';
$string['status:approvednot'] = '却下済み';
$string['student_approve'] = '承認';
$string['student_approved'] = '承認済み';
$string['student_pending'] = '閲覧不可 (未承認)';
$string['student_reject'] = '却下';
$string['student_rejected'] = '却下済み';
$string['studentapproval'] = 'ステータス';
$string['studentapproval_help'] = 'カラムステータスは学生の承認に対する返答を表します:
* ? - 承認保留
* ✓ - 承認
* ✖ - 承認拒否';
$string['teacher_approved'] = '閲覧可 (承認済み)';
$string['teacher_pending'] = '確認保留';
$string['teacher_rejected'] = '拒否';
$string['teacherapproval'] = '承認';
$string['teacherapproval_help'] = 'ファイルに関する現在の決定です。すべての参加者が閲覧できるようにします:
<br />
<ul>
<li>選択 ... - 未承認または非承認の場合、ファイルは表示されません。</li>
<li>Yes - 承認済みの場合、ファイルは表示されます。</li>
<li>No - 非承認の場合、ファイルは表示されません。</li>
</ul>';
$string['total'] = '合計';
$string['updatefiles'] = 'ファイルを更新する';
$string['updatefileswarning'] = '学生フォルダ内の個々の学生のファイルは学生の課題提出により更新されます。すでに表示されている学生のファイルが削除または更新された場合も置換されます - 可視性に関する学生の設定は変更されません。';
$string['uploaded'] = 'アップロード済み';
$string['visibility'] = '誰でも閲覧可';
$string['visible'] = '閲覧可';
$string['visibleforstudents'] = '誰でも閲覧可';
$string['visibleforstudents_no'] = 'このファイルは学生には公開されません。';
$string['visibleforstudents_yes'] = '学生はこのファイルを閲覧できます。';
$string['withselected'] = '選択したものに対して ...';
$string['zipusers'] = 'ZIPとしてダウンロードする';
