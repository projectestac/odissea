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
 * Strings for component 'attendance', language 'ja', version '3.11'.
 *
 * @package     attendance
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['Aacronym'] = '欠';
$string['Afull'] = '欠席';
$string['Eacronym'] = '早';
$string['Efull'] = '早退';
$string['Lacronym'] = '遅';
$string['Lfull'] = '遅刻';
$string['Pacronym'] = '出';
$string['Pfull'] = '出席';
$string['absenteereport'] = '欠席者レポート';
$string['acronym'] = '頭字語';
$string['add'] = '追加';
$string['addedrecip'] = '{a} は新しい受信者として追加された';
$string['addedrecips'] = '{a} は新しい受信者として追加された';
$string['addmultiplesessions'] = '複数セッション';
$string['addsession'] = 'セッションを追加する';
$string['adduser'] = 'ユーザを追加する';
$string['addwarning'] = '警告を追加する';
$string['all'] = 'すべて';
$string['allcourses'] = 'すべてのコース';
$string['allpast'] = 'すべての過去';
$string['allsessions'] = 'すべてのセッション';
$string['allsessionstotals'] = 'すべての選択されたセッション';
$string['attendance:addinstance'] = '新しい出欠活動を追加する';
$string['attendance:canbelisted'] = '一覧に表示する';
$string['attendance:changeattendances'] = '出欠を変更する';
$string['attendance:changepreferences'] = 'プリファレンスを変更する';
$string['attendance:export'] = 'レポートをエクスポートする';
$string['attendance:manageattendances'] = '出欠を管理する';
$string['attendance:managetemporaryusers'] = '一時ユーザを管理する';
$string['attendance:takeattendances'] = '出欠を取る';
$string['attendance:view'] = '出欠を閲覧する';
$string['attendance:viewreports'] = 'レポートを閲覧する';
$string['attendance:viewsummaryreports'] = 'コース概要レポートを閲覧する';
$string['attendance:warningemails'] = '欠席ユーザをメールで登録できる';
$string['attendance_already_submitted'] = 'あなたの出欠は既に記録されています。';
$string['attendance_no_status'] = '利用可能な有効ステータスはありませんでした - あなたが出欠を記録するには遅すぎたようです。';
$string['attendancedata'] = '出欠データ';
$string['attendancefile'] = '出欠ファイル（CSV形式）';
$string['attendancefile_help'] = 'ファイルは、ヘッダー行と、ユーザーを識別および出席が記録された時間からなるフィールド（例：（email,scantime）または（username,time））を含むCSVファイルでなければなりません';
$string['attendanceforthecourse'] = 'コースの出欠';
$string['attendancegrade'] = '出席点';
$string['attendancenotset'] = 'あなたの出欠を設定する必要があります。';
$string['attendancenotstarted'] = 'このコースの出欠はまだ開始されていません。';
$string['attendancepercent'] = '出席率';
$string['attendancereport'] = '出欠レポート';
$string['attendanceslogged'] = '記録された出欠';
$string['attendancesuccess'] = '出欠が正常に取られました。';
$string['attendanceupdated'] = '出欠が正常に更新されました。';
$string['attforblockdirstillexists'] = 'まだ古いmod/attforblockディレクトリが存在します - このアップグレードを実行する前にあなたのサーバのこのディレクトリを削除する必要があります。';
$string['attrecords'] = '出欠レコード';
$string['autoassignstatus'] = '利用可能な最高のステータスを選択する';
$string['autoassignstatus_help'] = 'この設定を有効にした場合、学生には利用可能な最高評点が自動的に割り当てられます。';
$string['automark'] = '自動マーキング';
$string['automark_help'] = 'マーキングを完全自動にします。
「Yes」を選択した場合、学生は初回コースアクセスにより自動的にマークされます。
「セッション終了時にマーク解除する」を選択した場合、自分の出欠をマークしていないすべての学生には選択されたマーク未了ステータスが設定されます。';
$string['automarkall'] = 'Yes';
$string['automarkclose'] = 'セッション終了時にマーク未了を設定する';
$string['automarktask'] = '自動マーキングに必要な出欠セッションをチェックする';
$string['autorecorded'] = 'システム自動記録';
$string['averageattendance'] = '平均出欠';
$string['averageattendancegraded'] = '平均出欠';
$string['backtoparticipants'] = '参加者リストに戻る';
$string['below'] = '($a)%未満';
$string['calclose'] = 'クローズ';
$string['calendarevent'] = 'セッションのカレンダーイベントを生成';
$string['calendarevent_help'] = '有効にすると、このセッションに関してカレンダーイベントが生成されます。無効ならば、このセッションに関するすべての既存のカレンダーイベントが削除されます。';
$string['caleventcreated'] = 'セッションのカレンダーイベントが正常に作成されました。';
$string['caleventdeleted'] = 'セッションのカレンダーイベントが正常に削除されました。';
$string['calmonths'] = '1月,2月,3月,4月,5月,6月,7月,8月,9月,10月,11月,12月';
$string['calshow'] = '日付を選択する';
$string['caltoday'] = '本日';
$string['calweekdays'] = '日,月,火,水,木,金,土';
$string['cannottakeforgroup'] = 'あなたはグループ「 {$a} 」の出欠を取ることはできません。';
$string['cantaddstatus'] = '新しいステータスを追加する場合、あなたは頭字語および説明を記述する必要があります。';
$string['categoryreport'] = 'コースカテゴリレポート';
$string['changeattendance'] = '出欠を変更する';
$string['changeduration'] = '継続時間を変更する';
$string['changesession'] = 'セッションを変更する';
$string['checkweekdays'] = 'あなたが選択したセッション日の範囲内の週日を選択してください。';
$string['closed'] = '本セッションは現在，自己マーキング可能ではありません。';
$string['column'] = 'カラム';
$string['columnmap'] = 'カラムマッピング';
$string['columns'] = 'カラム';
$string['commonsession'] = 'すべての学生';
$string['commonsessions'] = 'すべての学生';
$string['confirm'] = '確認';
$string['confirmcolumnmappings'] = 'カラムマッピング確認';
$string['confirmdeletehiddensessions'] = '本当にコース開始日 ({$a->date}) 前に予定されている {$a->count} 件のセッションを削除してもよろしいですか?';
$string['confirmdeleteuser'] = '本当にユーザ「 {$a->fullname} 」 ({$a->email}) を削除してもよろしいですか?<br/>このユーザのすべての出欠レコードが完全に削除されます。';
$string['copyfrom'] = '出欠データをコピーする';
$string['countofselected'] = '選択数';
$string['course'] = 'コース';
$string['courseshortname'] = 'コース短縮名';
$string['coursesummary'] = 'コース概要レポート';
$string['createmultiplesessions'] = '複数セッションを作成する';
$string['createmultiplesessions_help'] = 'この機能によりあなたは1回の簡単なステップで複数セッションを作成することができます。セッションはベースセッションの日付で開始され「次まで繰り返す」の日付まで続きます。

* <strong>次に繰り返す</strong>: あなたのクラスが開講される週の曜日を選択してください (例えば、月曜日/水曜日/金曜日)。
* <strong>次を繰り返す</strong>: ここでは頻度を設定します。あなたのクラスが毎週開講される場合、1を選択してください。隔週開講される場合、2を選択してください。第3週に開講される場合、3を選択してください。
* <strong>次まで繰り返す</strong>: クラスの最終日を選択してください (あなたが出欠を取りたい最終日)。';
$string['createonesession'] = 'コースの1セッションを作成する';
$string['csvdelimiter'] = 'CSVデリミタ';
$string['currentlyselectedusers'] = '現在選択されているユーザー';
$string['customexportfields'] = 'カスタムユーザープロフィールフィールドのエクスポート';
$string['date'] = '日付';
$string['days'] = '日';
$string['defaultdisplaymode'] = 'デフォルト表示モード';
$string['defaults'] = 'デフォルト';
$string['defaultsessionsettings'] = 'デフォルトセッション設定';
$string['defaultsessionsettings_help'] = 'これらの設定ではすべての新しいセッションのデフォルトを定義します。';
$string['defaultsettings'] = 'デフォルト出欠設定';
$string['defaultsettings_help'] = 'これらの設定はすべての新しい出欠のデフォルトを定義します。';
$string['defaultstatus'] = 'デフォルトステータス設定';
$string['defaultsubnet'] = 'デフォルトネットワークアドレス';
$string['defaultsubnet_help'] = 'カンマ区切りの一部またはフルIPアドレスを指定することにより特定のサブネットに出欠の記録を制限することができます。これは新しいセッション作成時に使用されるデフォルト値です。';
$string['defaultview'] = 'ログイン時のデフォルト表示';
$string['defaultview_desc'] = 'これは教師による初回ログイン時に表示されるデフォルトです。';
$string['defaultwarnings'] = 'デフォルト警告セット';
$string['defaultwarningsettings'] = 'デフォルト警告設定';
$string['defaultwarningsettings_help'] = 'これらの設定ではすべての新しい警告のデフォルトを定義します。';
$string['delete'] = '削除';
$string['deletecheckfull'] = 'あなたは本当に本気で，全ユーザーデータも含めて {$a} を完全に削除したいのですか？';
$string['deletedgroup'] = 'このセッションに関連付けられたグループが削除されました。';
$string['deletehiddensessions'] = 'すべての非表示セッションを削除する';
$string['deletelogs'] = '出欠データを削除する';
$string['deleteselected'] = '選択したものを削除する';
$string['deletesession'] = 'セッションを削除する';
$string['deletesessions'] = 'すべてのセッションを削除する';
$string['deleteuser'] = 'ユーザを削除する';
$string['deletewarningconfirm'] = '本当にこの警告を削除してもよろしいですか?';
$string['deletingsession'] = 'コースのセッションを削除する';
$string['deletingstatus'] = 'コースのステータスを削除する';
$string['description'] = '説明';
$string['display'] = '表示';
$string['displaymode'] = '表示モード';
$string['donotusepaging'] = 'ページングを使用しない';
$string['downloadexcel'] = 'Excelフォーマットでダウンロードする';
$string['downloadooo'] = 'OpenOfficeフォーマットでダウンロードする';
$string['downloadtext'] = 'テキストフォーマットでダウンロードする';
$string['duration'] = '継続時間';
$string['editsession'] = 'セッションを編集する';
$string['edituser'] = 'ユーザを編集する';
$string['emailcontent'] = 'メール本文';
$string['emailcontent_default'] = '%userfirstname% さん

あなたの %coursename% %attendancename% での出席が %warningpercent% 以下になりました。現在 %percent% です。私達はあなたが大丈夫であることを願っています!

このコースを活用するにはあなたの出席を改善する必要があります。さらにサポートが必要な場合、どうぞご連絡ください。';
$string['emailcontent_help'] = '学生に警告が送信される場合、このフィールドからメールコンテンツが取得されます。以下のワイルドカードを使用することができます:
<ul>
<li>%coursename%</li>
<li>%userfirstname%</li>
<li>%userlastname%</li>
<li>%userid%</li>
<li>%warningpercent%</li>
<li>%attendancename%</li>
<li>%cmid%</li>
<li>%numtakensessions%</li>
<li>%points%</li>
<li>%maxpoints%</li>
<li>%percent%</li>
</ul>';
$string['emailsubject'] = 'メール件名';
$string['emailsubject_default'] = '出欠警告';
$string['emailsubject_help'] = '学生に警告を送信する場合、このフィールドからメール件名が取得されます。';
$string['emailuser'] = 'ユーザにメールする';
$string['emailuser_help'] = 'この設定を有効にした場合、学生に警告が送信されます。';
$string['emptyacronym'] = '空白の頭字語は許可されません。ステータスレコードは更新されませんでした。';
$string['emptydescription'] = '空白の説明は許可されません。ステータスレコードは更新されませんでした。';
$string['enablecalendar'] = 'カレンダーイベントを作成する';
$string['enablecalendar_desc'] = 'この設定を有効にした場合、それぞれの出欠セッションにカレンダーイベントが作成されます。この設定を変更した場合、あなたはカレンダーレポートのリセットを実行する必要があります。';
$string['enablewarnings'] = '警告を有効にする';
$string['enablewarnings_desc'] = 'ここでは出欠に警告を設定します。出欠が設定した閾値以下になった場合、ユーザに通知メールが送信されます。<br/><strong>注意: これは新機能であり厳密にはテストされていません。あくまでも自己責任で使用してください。また、正常に動作することも含めてMoodleフォーラムにフィードバックをご提供ください。</strong>';
$string['encoding'] = 'エンコーディング';
$string['endofperiod'] = '終了期間';
$string['endtime'] = 'セッション終了時間';
$string['enrolmentend'] = 'ユーザ登録終了 {$a}';
$string['enrolmentstart'] = 'ユーザ登録開始 {$a}';
$string['enrolmentsuspended'] = '登録停止';
$string['enterpassword'] = 'パスワードを入力';
$string['error:coursehasnoattendance'] = '省略名 {$a} のコースには出欠活動はありません。';
$string['error:coursenotfound'] = '省略名 {$a} のコースが見つかりませんでした。';
$string['error:sessioncourseinvalid'] = 'セッションコースが有効ではありません! スキップします。';
$string['error:sessiondateinvalid'] = 'セッション日付が有効ではありません! スキップします。';
$string['error:sessionendinvalid'] = 'セッション終了時間が有効ではありません! スキップします。';
$string['error:sessionstartinvalid'] = 'セッション開始時間が有効ではありません! スキップします。';
$string['errorgroupsnotselected'] = '1つまたはそれ以上のグループを選択してください。';
$string['errorinaddingsession'] = 'セッション追加時にエラーが発生しました。';
$string['erroringeneratingsessions'] = 'セッション生成時にエラーが発生しました。';
$string['eventdurationupdated'] = 'セッション継続時間が更新されました。';
$string['eventreportviewed'] = '出欠レポートが閲覧されました。';
$string['eventscreated'] = 'カレンダーイベントが作成されました。';
$string['eventsdeleted'] = 'カレンダーイベントが削除されました。';
$string['eventsessionadded'] = 'セッションが追加されました。';
$string['eventsessiondeleted'] = 'セッションが削除されました。';
$string['eventsessionsimported'] = 'セッションがインポートされました。';
$string['eventsessionupdated'] = 'セッションが更新されました。';
$string['eventstatusadded'] = 'ステータスが追加されました。';
$string['eventstatusupdated'] = 'ステータスが更新されました。';
$string['eventtaken'] = '出欠が取られました。';
$string['eventtakenbystudent'] = '学生によって出欠が取られました。';
$string['export'] = 'エクスポート';
$string['extrarestrictions'] = '追加制限';
$string['from'] = '開始:';
$string['gradebookexplanation'] = '評定表の評点';
$string['gradebookexplanation_help'] = '出欠モジュールではあなたが取得した出席点および取得することのできた出席点をもとに現在の出席点を表示します。これには将来的なクラス期間を含みません。評定表ではあなたの現在の出席パーセンテージを基にした出席点および取得することのできる将来的なクラス期間を含む出席点を表示します。そのため、あなたの課題モジュールおよび評定表に表示される出席点は同じ点数ではありませんがパーセンテージは同じです。

例えばあなたが今まで8/10点を取得して (出席点 80%) 全体のコース出席が50点の場合、出欠モジュールは8/10と表示して評定表では40/50と表示されます。あなたはまだ40点を取得しているわけではありませんが40はあなたの現在の出席率80%と同等の値です。出席日をもとにしているためあなたが出欠モジュールで取得した点数が減らされることはありません。コース全体の出席を基にしているため評定表に表示される出席点は将来的な出席により増加または減少する場合があります。';
$string['graded'] = '評定済みセッション';
$string['gridcolumns'] = 'グリッドカラム';
$string['group'] = 'グループ';
$string['groups'] = 'グループ';
$string['groupsession'] = '学生グループ';
$string['hiddensessions'] = '非表示セッション';
$string['hiddensessions_help'] = 'コース開始日より前に設定された場合、セッションは非表示にされます。

あなたはこの機能を使用して古いセッションを削除する代わりに非表示にすることができます。表示セッションのみ評定表に表示されます。';
$string['hiddensessionsdeleted'] = 'すべての非表示セッションが削除されました。';
$string['hideextrauserdetails'] = '特別ユーザ詳細を隠す';
$string['hidensessiondetails'] = 'セッション詳細を隠す';
$string['identifyby'] = '学生の識別';
$string['import'] = 'インポート';
$string['importfile'] = 'ファイルをインポートする';
$string['importfile_help'] = 'ファイルをインポートします。';
$string['importsessions'] = 'セッションをインポートする';
$string['importstatus'] = 'ステータスフィールド';
$string['includeabsentee'] = '欠席者レポートの計算時にセッションを含む';
$string['includeabsentee_help'] = 'この設定を有効にした場合、このセッションが欠席者レポート計算に含まれます。';
$string['includeall'] = 'すべてのセッションを選択する';
$string['includenottaken'] = '出欠が取られていないセッションを含む';
$string['includeqrcode'] = 'QRコードを含む';
$string['includeremarks'] = '備考を含む';
$string['incorrectpassword'] = 'あなたが正しくないパスワードを入力したため出欠は記録されませんでした。正しいパスワードを入力してください。';
$string['incorrectpasswordshort'] = '正しくないパスワードです。出欠は記録されませんでした。';
$string['indetail'] = '詳細 ...';
$string['invalidaction'] = 'あなたは処理を選択する必要があります。';
$string['invalidemails'] = 'あなたは既存のユーザアカウントのアドレスを指定する必要があります。見つけることができませんでした: {$a}';
$string['invalidimportfile'] = 'ファイルフォーマットが正しくありません。';
$string['invalidsessionenddate'] = 'この日付はセッション開始日より早くすることはできません。';
$string['invalidsessionendtime'] = '終了時間は開始時間より遅くする必要があります。';
$string['invalidstatus'] = 'あなたは無効なステータスを選択しました。再度お試しください。';
$string['jumpto'] = 'ジャンプ';
$string['keepsearching'] = '検索中';
$string['marksessionimportcsvhelp'] = 'このフォームは、ユーザー識別子とステータスを記録したCSVファイルのアップロードをあなたに許します - ステータスフィールドにはステータス頭文字またはそのユーザーの出欠が記録された時刻が認められます。時刻値が正しいと認められたら、その時刻における最も高い評価に状態を割り当てるよう試みられます。';
$string['maxpossible'] = '最大可能評点';
$string['maxpossible_help'] = 'まだ記録されていないセッション (過去および未来) でそれぞれのユーザが最大評点を取得した場合に取得可能な評点を表示します:
<ul>
<li><strong>評点</strong>: それぞれのユーザがすべてのセッションにより到達することのできる最大評点です。</li>
<li><strong>パーセンテージ</strong>: それぞれのユーザがすべてのセッションにより到達することのできる最大パーセンテージです。</li>
</ul>';
$string['maxpossiblepercentage'] = '最大可能パーセンテージ';
$string['maxpossiblepoints'] = '最大可能評点';
$string['maxwarn'] = 'メール警告の最大数';
$string['maxwarn_help'] = '警告を送信する最大数です (1セッションあたり1回の警告のみ)。';
$string['mergeuser'] = 'ユーザを統合する';
$string['mobilesessionfrom'] = '最終より過去のセッションを閲覧';
$string['mobilesessionto'] = '今後のセッションを閲覧';
$string['mobilesettings'] = 'モバイルアプリの設定';
$string['mobilesettings_help'] = 'これらの設定はMoodleモバイルアプリの挙動を制御する';
$string['modulename'] = '出欠';
$string['modulename_help'] = '出欠活動モジュールにより教師は授業中に出欠を取ることができます。学生は自分の出欠レコードを閲覧することができます。

教師は複数セッションを作成することができます。また、出欠ステータスを「出席」「欠席」「遅刻」「早退」として記録または必要に応じてをステータスを修正することができます。

クラス全体または個別の学生のレポートを利用することができます。';
$string['modulenameplural'] = '出欠';
$string['months'] = '月';
$string['moreattendance'] = 'このページで正常に出欠が取られました。';
$string['moveleft'] = '左に移動する';
$string['moveright'] = '右に移動する';
$string['multisessionexpanded'] = '複数セッション拡張';
$string['multisessionexpanded_desc'] = 'セッション作成時、デフォルトで「複数セッション」設定を広げた状態で表示します。';
$string['mustselectusers'] = 'エクスポートするユーザを選択してください。';
$string['newdate'] = '新しい日付';
$string['newduration'] = '新しい継続時間';
$string['newstatusset'] = '新しいステータスセット';
$string['noabsentstatusset'] = '使用されているステータスセットにはマークなしの時に使用できるステータスはありません。';
$string['noattendanceusers'] = 'コースに学生が登録されていないためデータをエクスポートすることはできません。';
$string['noattforuser'] = 'ユーザの出欠レコードが存在しません。';
$string['noautomark'] = '無効';
$string['nodescription'] = '通常クラスセッション';
$string['noeventstoreset'] = '更新が必要なカレンダーイベントはありません。';
$string['nogroups'] = 'あなたはグループセッションを追加できません。コース内にグループが存在しません。';
$string['noguest'] = 'ゲストは出欠を閲覧できません。';
$string['noofdaysabsent'] = '欠席日数';
$string['noofdaysexcused'] = '早退日数';
$string['noofdayslate'] = '遅刻日数';
$string['noofdayspresent'] = '出席日数';
$string['nosessiondayselected'] = 'セッション曜日が選択されていません。';
$string['nosessionexists'] = 'このコースにはセッションがありません。';
$string['nosessionsselected'] = 'セッションが選択されていません。';
$string['notfound'] = 'このコースには出欠活動がありません!';
$string['notifytask'] = 'ユーザに警告を送信する';
$string['notmember'] = '非メンバー';
$string['noupgradefromthisversion'] = 'あなたがインストールしたattforblockのバージョンからは出欠モジュールをアップグレードできません。新しい出欠モジュールをインストールする前にattforblockを削除するか最新バージョンにアップグレードしてください。';
$string['numsessions'] = 'セッション数';
$string['olddate'] = '旧日付';
$string['onlyselectedusers'] = '個別のユーザをエクスポートする';
$string['overallsessions'] = '全体のセッション';
$string['overallsessions_help'] = 'まだ記録されていないセッション (過去および未来) を含むすべてのセッションの統計を表示します:
<ul>
<li><strong>セッション</strong>: セッション合計数です。</li>
<li><strong>評点</strong>: 記録されたセッションをもとに付与された評点です。</li>
<li><strong>パーセンテージ</strong>: セッション全体での最大取得可能評点に対する付与済み評点のパーセンテージです。</li>
</ul>';
$string['oversessionstaken'] = '全体の記録済みセッション';
$string['oversessionstaken_help'] = '出欠が取られたセッションの統計を表示します:
<ul>
<li><strong>セッション</strong>: 既に記録済みのセッション数です。</li>
<li><strong>評点</strong>: 記録済みのセッションをもとに付与された評点です。</li>
<li><strong>パーセンテージ</strong>: 記録済みセッション全体での最大取得可能評点に対する付与済み評点のパーセンテージです。</li>
</ul>';
$string['pageof'] = '全{$a->numpages} 中の {$a->page} ページ';
$string['participant'] = '参加者';
$string['password'] = 'パスワード';
$string['passwordgrp'] = '学生パスワード';
$string['passwordgrp_help'] = '設定した場合、学生が自分のセッションの出欠ステータスを削除するにはパスワードを入力する必要があります。空白の場合、パスワードは要求されません。';
$string['passwordrequired'] = 'あなたの出欠を送信する前にセッションパスワードを入力する必要があります。';
$string['percentage'] = 'パーセンテージ';
$string['percentageallsessions'] = 'セッション全体のパーセンテージ';
$string['percentagesessionscompleted'] = '記録済みセッションのパーセンテージ';
$string['pluginadministration'] = '出欠管理';
$string['pluginname'] = '出欠';
$string['points'] = '評点';
$string['pointsallsessions'] = 'セッション全体の評点';
$string['pointssessionscompleted'] = '記録済みセッションの評点';
$string['preferences_desc'] = 'ステータスセットの変更により既存の出欠セッションおよび評点に影響する可能性があります。';
$string['preventsharediptime'] = 'IP Addressの再使用を許すまでの時間（分）';
$string['preview'] = 'ファイルプレビュー';
$string['previewhtml'] = 'HTML形式プレビュー';
$string['priorto'] = 'セッション日がコース開始日 ({$a}) 前に設定されたため新しいセッションスケジュールは非表示にされています (アクセス不可)。前の日付のセッションにアクセスする場合、あなたはいつでもコース開始日を変更することができます (コース設定をご覧ください)。
<br />
<br />
セッション日付を変更してください。または再度「セッションを追加する」ボタンをクリックして決定しますか?';
$string['privacy:metadata:groupid'] = 'セッションと割り付けられたグループID';
$string['privacy:metadata:sessionid'] = 'Attendance session ID。';
$string['processingfile'] = 'ファイル処理中';
$string['qrcode'] = 'QRコード';
$string['randompassword'] = 'ランダムパスワード';
$string['remark'] = '備考: {a}';
$string['remarks'] = '備考';
$string['repeatasfollows'] = '上記セッションを次のように繰り返す';
$string['repeatevery'] = '次を繰り返す';
$string['repeaton'] = '次に繰り返す';
$string['repeatuntil'] = '次まで繰り返す';
$string['report'] = 'レポート';
$string['required'] = '必須*';
$string['requiredentries'] = '一時レコードは参加者出欠レコードを上書きします。';
$string['requiredentry'] = '一時ユーザ統合ヘルプガイド';
$string['requiredentry_help'] = '<p align="center"><b>出欠</b></p>
<p align="left"><strong>アカウント統合</strong></p>
<p align="left">
<table border="2" cellpadding="4">
<tr>
<th>Moodleユーザ</th>
<th>一時ユーザ</th>
<th>処理</th>
</tr>
<tr>
<td>出欠データ</td>
<td>出欠データ</td>
<td>一時ユーザはMoodleユーザを上書きします。</td>
</tr>
<tr>
<td>出欠データなし</td>
<td>出欠データ</td>
<td>一時ユーザの出欠はMoodleユーザに移動されます。</td>
</tr>
<tr>
<td>出欠データ</td>
<td>出欠データなし</td>
<td>一時ユーザは削除されます。</td>
</tr>
<tr>
<td>出欠データなし</td>
<td>出欠データなし</td>
<td>一時ユーザは削除されます。</td>
</tr>
</table>

</p>
<p align="left"><strong>統合処理後、すべてのケースで一時ユーザは削除されます。</strong></p>';
$string['requiresubnet'] = 'ネットワークアドレスを必要とする';
$string['requiresubnet_help'] = 'カンマ区切りの一部またはフルIPアドレスを指定することにより出欠の記録を特定のサブネットに制限することができます。';
$string['resetcaledarcreate'] = 'カレンダーイベントが有効にされましたが多くの既存のセッションにはイベントがありません。本当に既存のセッションすべてにカレンダーイベントを作成しますか?';
$string['resetcaledardelete'] = 'カレンダーイベントが無効にされましたが多くの既存のセッションには削除すべきイベントがあります。本当に既存のイベントすべてを削除してもよろしいですか?';
$string['resetcalendar'] = 'カレンダーをリセットする';
$string['resetdescription'] = '出欠データを削除することによりデータベースから情報が削除されることに留意してください。あなたはコース開始日を変更することにより古いセッションを隠すことができます!';
$string['resetstatuses'] = 'ステータスをデフォルトにリセットする';
$string['restoredefaults'] = 'デフォルトをリストアする';
$string['resultsperpage'] = '1ページあたりの結果';
$string['resultsperpage_desc'] = '1ページに表示する学生数です。';
$string['rotateqrcode'] = 'QRコードを回転';
$string['save'] = '出欠を保存する';
$string['scantime'] = 'スキャンタイム';
$string['search:activity'] = '出欠 - 活動情報';
$string['session'] = 'セッション';
$string['session_help'] = 'セッション';
$string['sessionadded'] = 'セッションが正常に追加されました。';
$string['sessionalreadyexists'] = 'すでにこの日にはセッションが存在します。';
$string['sessiondate'] = '日付';
$string['sessiondays'] = 'セッション曜日';
$string['sessiondeleted'] = 'セッションが正常に削除されました。';
$string['sessionduplicate'] = 'コース {$a->course} の出欠 {$a->activity} に重複セッションが存在します。';
$string['sessionexist'] = 'セッションは追加されませんでした (すでに存在します)!';
$string['sessiongenerated'] = 'セッション1件が正常に生成されました。';
$string['sessions'] = 'セッション';
$string['sessionsallcourses'] = '全コース';
$string['sessionsbyactivity'] = '出欠インスタンス';
$string['sessionsbycourse'] = 'コース';
$string['sessionsbydate'] = '週';
$string['sessionscompleted'] = '記録済みセッション';
$string['sessionscurrentcourses'] = 'カスタムコース';
$string['sessionsgenerated'] = '($a) セッションが正常に生成されました。';
$string['sessionsids'] = 'セッションID:';
$string['sessionsnotfound'] = '選択された期間にはセッションはありません。';
$string['sessionstartdate'] = 'セッション開始日';
$string['sessionstotal'] = 'セッション合計数';
$string['sessiontype'] = 'セッションタイプ';
$string['sessiontype_help'] = 'あなたはすべての学生または学生のグループにセッションを追加することができます。活動のグループモードにより異なるタイプを追加することができます。

* グループモード「グループなし」の場合、あなたはすべての学生のみにセッションを追加することができます。
* グループモード「分離グループ」の場合、あなたは学生のグループのみにセッションを追加することができます。
* グループモード「可視グループ」の場合、あなたは両方のタイプのセッションを追加することができます。';
$string['sessiontypeshort'] = 'タイプ';
$string['sessionunknowngroup'] = 'セッションが不明なグループを指定しています: {$a}';
$string['sessionupdated'] = 'セッションが正常に更新されました。';
$string['set_by_student'] = '自己記録';
$string['setallstatuses'] = 'すべてのユーザにステータスを設定する';
$string['setallstatusesto'] = 'すべてのユーザのステータスを «{$a}» に設定する';
$string['settings'] = '設定';
$string['setunmarked'] = 'マーク未了の場合、自動的に設定する';
$string['setunmarked_help'] = 'この設定をセッション内で有効にした場合、学生が自分の出欠をマークしなかった場合にこのステータスを設定します。';
$string['showdefaults'] = 'デフォルトを表示する';
$string['showduration'] = '継続時間を表示する';
$string['showextrauserdetails'] = '特別ユーザ詳細を表示する';
$string['showqrcode'] = 'QRコードの表示';
$string['showsessiondescriptiononreport'] = 'レポートにセッション説明を表示する';
$string['showsessiondescriptiononreport_desc'] = '出欠レポート一覧にセッション説明を表示します。';
$string['showsessiondetails'] = 'セッション詳細を表示する';
$string['somedisabledstatus'] = '(セッションが開始されているためいくつかのオプションは削除されました)';
$string['sortedgrid'] = 'グリッド';
$string['sortedlist'] = 'リスト';
$string['startofperiod'] = '開始期間';
$string['starttime'] = '開始時間';
$string['status'] = 'ステータス';
$string['statusall'] = 'すべて';
$string['statusdeleted'] = 'ステータスが削除されました。';
$string['statuses'] = 'ステータス';
$string['statusset'] = 'ステータスセット {$a}';
$string['statussetsettings'] = 'ステータスセット';
$string['statusunselected'] = '未選択';
$string['strftimedm'] = '%b %d';
$string['strftimedmy'] = '%Y / %m / %d';
$string['strftimedmyhm'] = '%Y / %m / %d %H:%M';
$string['strftimedmyw'] = '%Y/%m/%d (%a)';
$string['strftimeh'] = '%I%p';
$string['strftimehm'] = '%H:%M';
$string['strftimeshortdate'] = '%Y/%m/%d';
$string['studentavailability'] = '学生利用可能 (分)';
$string['studentavailability_help'] = '学生が自分の出欠をマーキングする場合、セッション開始後の指定した時間 (分) 、このステータスは利用可能です。
<br/>空白にした場合、このステータスは常に利用可能です。ゼロが設定された場合、常に学生から隠されます。';
$string['studentid'] = '学籍番号';
$string['studentmarked'] = 'このセッションのあなたの出欠が記録されました。';
$string['studentmarking'] = '学生記録';
$string['studentpassword'] = '学生パスワード';
$string['studentrecordingexpanded'] = '学生記録拡張';
$string['studentrecordingexpanded_desc'] = 'セッション作成時、デフォルトで「学生記録」設定を広げた状態で表示します。';
$string['studentscanmark'] = '学生に自分の出欠の記録を許可する';
$string['studentscanmark_desc'] = 'この設定を有効にした場合、教師が学生に自分で出欠マークすることを許可できるようになります。';
$string['studentscanmark_help'] = 'この設定を有効にした場合、学生はセッションの自分の出欠ステータスを変更することができます。';
$string['studentscanmarksessiontime'] = '学生はセッション時間中に出欠を記録する';
$string['studentscanmarksessiontime_desc'] = 'この設定を有効にした場合、学生はセッション中のみ出欠を記録することができます。';
$string['studentscanmarksessiontimeend'] = 'セッション終了 (分)';
$string['studentscanmarksessiontimeend_desc'] = 'セッションに終了時間がない場合、学生の出欠記録のために何分間セッションを利用可能にしますか?';
$string['submit'] = '送信';
$string['submitattendance'] = '出欠を送信する';
$string['submitpassword'] = 'パスワード送信';
$string['subnet'] = 'サブネット';
$string['subnetactivitylevel'] = '活動レベルでのサブネット設定を許可する';
$string['subnetactivitylevel_desc'] = 'この設定を有効にした場合、教師は出欠作成時に活動レベルでのデフォルトサブネットを上書きできます。そうでない場合、セッション作成時にサイトデフォルトが使用されます。';
$string['subnetwrong'] = '出欠は特定のロケーションからのみ記録することができます。このコンピュータは許可リストにありません。';
$string['summary'] = '概要';
$string['tablerenamefailed'] = '古いattforblockテーブルのattendanceへのリネームに失敗しました。';
$string['tactions'] = '操作';
$string['takeattendance'] = '出欠を取る';
$string['takensessions'] = '記録済みセッション';
$string['tcreated'] = '作成日時';
$string['tempaddform'] = '一時ユーザを追加する';
$string['tempexists'] = 'このメールアドレスの一時ユーザはすでに存在します。';
$string['temptable'] = '一時ユーザ一覧';
$string['tempuser'] = '一時ユーザ';
$string['tempusermerge'] = '一時ユーザを統合する';
$string['tempusers'] = '一時ユーザ';
$string['tempusersedit'] = '一時ユーザを編集する';
$string['tempuserslist'] = '一時ユーザ';
$string['thirdpartyemails'] = '他のユーザに通知する';
$string['thirdpartyemails_help'] = '通知される他のユーザの一覧です (要ケイパビリティ「mod/attendance:viewreports」)。';
$string['thirdpartyemailsubject'] = '出欠警告';
$string['thirdpartyemailtext'] = '{$a->lastname} {$a->firstname} さんの {$a->coursename} {$a->aname} での出席が {$a->warningpercent} ({$a->percent}) より低くなりました。';
$string['thirdpartyemailtextfooter'] = 'このコースの教師があなたのメールアドレスを受信者一覧に追加したためあなたはこれを受信しています。';
$string['thiscourse'] = 'このコース';
$string['time'] = '時間';
$string['timeahead'] = '1年を超える複数セッションを作成することはできません。開始日および終了日を調整してください。';
$string['to'] = '終了:';
$string['triggered'] = '初回通知';
$string['tuseremail'] = 'メール';
$string['tusername'] = 'フルネーム';
$string['ungraded'] = 'セッションがアップグレードされました。';
$string['unknowngroup'] = '不明なグループ';
$string['update'] = '更新';
$string['uploadattendance'] = 'CSVで出欠をアップロード';
$string['usedefaultsubnet'] = 'デフォルトを使用する';
$string['userexists'] = 'すでのこのメールアドレスの実ユーザが存在します。';
$string['userid'] = 'ユーザーID';
$string['userimportfield'] = '外部ユーザーフィールド';
$string['userimportfield_help'] = 'アップロードされたユーザー識別子を含むCSVからのフィールド';
$string['userimportto'] = 'Moodleユーザーフィールド';
$string['users'] = 'エクスポートするユーザ';
$string['usestatusset'] = 'ステータスセット';
$string['variable'] = '変数';
$string['variablesupdated'] = '変数が正常に更新されました。';
$string['versionforprinting'] = '印刷バージョン';
$string['viewmode'] = '表示モード';
$string['warnafter'] = '警告前に記録されるセッション数';
$string['warnafter_help'] = 'ユーザが少なくともこのセッション数の出欠を記録した場合のみ警告が発生します。';
$string['warningdeleted'] = '警告が削除されました。';
$string['warningdesc'] = 'これらの警告は新しい出欠活動に自動的に追加されます。同一時間に2つ以上の警告が発生した場合、低い警告閾値の警告のみ送信されます。';
$string['warningdesc_course'] = 'ここで設定する警告閾値は欠席レポートに影響します。また、学生および第三者に通知することができます。同一時間に2つ以上の警告が発生した場合、低い警告閾値の警告のみ送信されます。';
$string['warningfailed'] = 'あなたは同じパーセンテージおよびセッション数を使用する警告を作成することはできません。';
$string['warningpercent'] = '次のパーセンテージ以下で警告する';
$string['warningpercent_help'] = '全体のパーセンテージがこの数字以下になった場合、警告が発生します。';
$string['warnings'] = '警告セット';
$string['warningthreshold'] = '警告閾値';
$string['warningupdated'] = '警告が更新されました。';
$string['week'] = '週';
$string['weeks'] = '週';
$string['youcantdo'] = 'あなたは何もできません。';
