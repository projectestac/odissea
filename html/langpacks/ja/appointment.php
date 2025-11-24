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
 * Strings for component 'appointment', language 'ja', version '4.5'.
 *
 * @package     appointment
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addingappointment'] = 'アポイントメントの追加';
$string['addingappointments'] = 'アポイントメントの追加';
$string['addremoveattendees'] = '参加者を追加/削除';
$string['addsession'] = 'セッションを追加';
$string['addtimeframe'] = '時間枠を追加';
$string['advanced'] = '高度';
$string['allowcancellations'] = 'キャンセルを許可';
$string['allowcancellations_help'] = 'チェックを入れると、セッションの参加者は登録をキャンセルできます';
$string['allowcancellationsdefault'] = 'デフォルトでキャンセルを許可';
$string['allowcancellationsdefault_help'] = 'チェックを入れると、デフォルト設定では、活動の新しいセッションを作成する際に登録キャンセルが許可します。';
$string['allowwaitlist'] = 'キャンセル待ちを許可';
$string['allowwaitlist_help'] = '「キャンセル待ちを許可する」がチェックされた場合、アポイントメントセッションが満席でも学習者は申し込みをすることができます。<br/>既に満席のセッションに学習者が申し込みをした際は、キャンセル待ちのお知らせメールが送られ、予約が可能になっら再度通知します。';
$string['alreadysignedup'] = 'このアポイントメント活動は申し込み済みです';
$string['appointment'] = 'アポイントメント';
$string['appointment:addattendees'] = '参加者をアポイントメントセッションに追加';
$string['appointment:addinstance'] = 'インスタンスを追加';
$string['appointment:configurecancellation'] = 'アポイントメント活動を追加/編集する時に、登録キャンセルの設定を許可します。';
$string['appointment:editsessions'] = 'アポイントメントセッションの追加、編集、複製、削除';
$string['appointment:managecustomfields'] = 'アポイントセッションのカスタムフィールドを管理する';
$string['appointment:overbook'] = 'キャンセル待ちが有効になっていないフルセッションに登録します。';
$string['appointment:removeattendees'] = 'アポイントメントセッションから参加者を削除';
$string['appointment:signup'] = 'セッションに登録';
$string['appointment:takeattendance'] = '出欠をとる';
$string['appointment:view'] = 'アポイントメント活動とセッションを表示';
$string['appointment:viewattendees'] = '出欠リストと参加者を表示';
$string['appointment:viewcancellations'] = 'キャンセルを表示';
$string['appointmentactivity'] = 'アポイントメント活動';
$string['appointmentcustomfields'] = 'アポイントメントのカスタムフィールド';
$string['appointmentname'] = 'アポイントメント名';
$string['appointments'] = 'アポイントメント';
$string['appointmentsession'] = 'アポイントメントセッション';
$string['appointmentsessiondates'] = 'アポイントメントセッションの日付';
$string['appointmentsessions'] = 'アポイントメントセッション';
$string['appointmentsettings'] = 'アポイントメントの設定';
$string['approvalreqd'] = '承認が必要';
$string['approvalreqd_help'] = '「承認が必要」にチェックを入れると、学習者がアポイントメントセッションに参加するためにマネージャの承認が必要となります。';
$string['approve'] = '承認';
$string['attendance'] = '出欠';
$string['attendanceinstructions'] = 'セッションに参加したユーザを選択：';
$string['attendedsession'] = '参加したセッション';
$string['attendees'] = '参加者';
$string['attendeestablesummary'] = 'このセッションに参加検討中か参加したことのある人';
$string['availableplaceholders'] = '使用可能なプレースホルダー';
$string['availableseats'] = '{$a}  席可能';
$string['book'] = '予約';
$string['bookedat'] = '<strong>予約済:</strong> {$a}';
$string['bookedvscapacity'] = '予約済/定員';
$string['bookingcancelled'] = '予約はキャンセルされました';
$string['bookingcompleted'] = '予約が完了しました';
$string['bookingfull'] = '満席';
$string['bookingopen'] = '受付中';
$string['break'] = '休憩';
$string['break_help'] = 'セッション間の休憩を設定できます。0と設定すると、休憩はありません。';
$string['calendareventdescriptionbooking'] = 'あなたはこの <a href=" {$a} ">アポイントメントセッション</a>に予約されました。';
$string['calendareventdescriptionsession'] = 'あなたはこの <a href=" {$a} ">アポイントメントセッション</a>を作成しました。';
$string['calendaroptions'] = 'カレンダーオプション';
$string['cancel'] = 'キャンセル';
$string['cancelbooking'] = '予約をキャンセル';
$string['cancellationinstrmngr'] = '# マネージャに通知';
$string['cancellationinstrmngr_help'] = '「マネージャに通知」にチェックをいれると、「マネージャに通知」に入力された内容が学習者のマネージャに通知され、アポイントメント予約をキャンセルしたことを知らせます。';
$string['cancellationmessage'] = 'キャンセルメッセージ';
$string['cancellationmessage_help'] = 'このメッセージは、ユーザがセッションをキャンセルすると送信されます。';
$string['cancellations'] = 'キャンセル';
$string['cancellationstablesummary'] = 'セッションの登録をキャンセルした人の一覧';
$string['cancelreason'] = 'キャンセルの理由';
$string['cannotapproveatcapacity'] = 'このセッションは満席のため、新たな参加者を承認できません。';
$string['cannotsignupsessioninprogress'] = 'このセッションは準備中のため登録できません。';
$string['cannotsignupsessionover'] = 'このセッションは終了しているため登録できません。';
$string['capacity'] = '定員';
$string['capacity_help'] = '「 定員 」は、そのセッションに参加できる最大人数のことです。

  アポイントメントのセッションが定員に達した場合、コースページにはセッションの詳細は表示されません。「全てのセッション」では詳細がグレーアウトし、学習者はそのセッションに申し込むことができません。';
$string['closed'] = '受付終了';
$string['completionattended'] = 'アポイントメントを予約して参加する';
$string['completionattended_help'] = '有効になっている場合、受講者の予約出席が「フル出席」または「一部出席」とマークされていれば、アクティビティは完了したとみなされます。';
$string['completionbooked'] = 'このアクティビティを完了するには、受講者はアポイントメントが必要です';
$string['completionbooked_help'] = '有効にすると、受講者のステータスが「予約済み」、「フル参加」、「一部参加」の場合、アクティビティは完了したとみなされます。受講者がキャンセルした場合、キャンセル待ちの場合、または出席が「No show」と表示されている場合、アクティビティは完了したとはみなされません。';
$string['completiondetail:attended'] = 'アポイントメントに参加';
$string['completiondetail:booked'] = 'アポイントメントを予約';
$string['confirmationinstrmngr'] = '# マネージャに通知';
$string['confirmationinstrmngr_help'] = '「マネージャへの通知を送信する」にチェックが入っていると、「マネージャへの通知」欄のテキストは、スタッフがアポイントメントセッションに登録したことを通知するため、マネージャに送信されます。';
$string['confirmationmessage'] = '確認メッセージ';
$string['confirmationmessage_help'] = 'このメッセージは、ユーザがセッションに登録する度に送信されます。';
$string['confirmcancelbooking'] = 'キャンセルを確認';
$string['courseresetsessions'] = 'すべてのセッションを削除します';
$string['courseresetsignups'] = 'すべてのセッション申込みを削除します';
$string['crontask'] = 'アポイントメントメンテナンスジョブ';
$string['currentstatus'] = '現在のステータス';
$string['customisednotifications'] = 'カスタム通知';
$string['date'] = '日付';
$string['decidelater'] = '後で決める';
$string['decline'] = '辞退';
$string['delete'] = '削除';
$string['deleteappointmentconfirm'] = '本当にこのアポイントメントと、これに関わる全ての予約を完全に削除しますか？';
$string['deletesession'] = 'セッションの削除';
$string['deletetimeframe'] = '時間枠を削除';
$string['details'] = '詳細';
$string['duplicate'] = '複製';
$string['duplicateappointment'] = 'アポイントメントの複製';
$string['editingappointment'] = 'アポイントメントの編集';
$string['email:message'] = 'メッセージ';
$string['email:subject'] = '件名';
$string['emailmanager'] = 'マネージャーに通知を送る';
$string['emailmanagercancellation'] = '# マネージャに通知';
$string['emailmanagercancellation_help'] = '「マネージャに通知を送信する」にチェックが入っていると、マネージャにメールが送信され、アポイントメント予約がキャンセルされたことを知らせます。';
$string['emailmanagerconfirmation'] = '# マネージャに通知';
$string['emailmanagerconfirmation_help'] = '「マネージャに通知を送信する」にチェックが入っていると、学習者がアポイントメントセッションに登録したときに学習者のマネージャに確認メールが送信されます。';
$string['emailmanagerreminder'] = '# マネージャに通知';
$string['emailmanagerreminder_help'] = '「マネージャに通知を送信する」にチェックが入っていると、アポイントメントセッション開始日の数日前に学習者のマネージャにリマインダーメッセージが送信されます。';
$string['empty'] = '空席';
$string['endtime'] = '終了時間';
$string['entitiysession'] = 'セッション';
$string['error:cancellationsnotallowed'] = 'この登録はキャンセルできません。';
$string['error:canttakeattendanceforunstartedsession'] = 'まだ開始していないセッションには出席できません。';
$string['error:eventoccurred'] = '既に起きたイベントをキャンセルすることはできません。';
$string['error:invaliduserid'] = '無効なユーザID';
$string['error:manageremailaddressmissing'] = 'あなたは現在システム内でマネージャに割り当てられていません。サイト管理者に連絡してください。';
$string['error:sessionsplitexceeds'] = 'セッションの分割時間がセッションの継続期間を超えています。';
$string['error:sessionstartafterend'] = 'セッション開始時間が終了時間より遅い時間です。';
$string['errorcannoteditsessions'] = 'セッションを編集するパーミッションがありません。';
$string['errorcannotviewappointment'] = 'このアポイントメントを表示するパーミッションがありません。';
$string['errorcannotviewattendees'] = '参加者を表示するパーミッションがありません。';
$string['eventaddsession'] = '追加されたセッション';
$string['eventapproverequests'] = 'セッションはリクエストを承認';
$string['eventattendancetaken'] = 'セッション参加者数';
$string['eventattendeesviewed'] = 'セッション参加者を表示';
$string['eventcancelbooking'] = 'セッションキャンセルの予約';
$string['eventcourseappointmentviewed'] = 'コースアポイントメントインスタンスを表示';
$string['eventcoursemoduleviewed'] = '表示されたアポイントメントモジュールインスタンス';
$string['eventdeletesession'] = 'セッション削除';
$string['eventsignup'] = 'セッション登録';
$string['eventupdatesession'] = 'セッション更新';
$string['full'] = '日付は満席です';
$string['fullfilter'] = '満席';
$string['fullybooked'] = '満席';
$string['goback'] = '戻る';
$string['icalendarheading'] = 'iCalender形式の添付ファイル';
$string['joinwaitlist'] = 'キャンセル待ちに加わる';
$string['location'] = '場所';
$string['managecustomfields'] = 'カスタムフィールドを管理';
$string['modulename'] = 'アポイントメント予約';
$string['modulename_help'] = 'アポイントメントはトレーナーが対面での活動を記録するための活動モジュールです。

 トレーナーは、学習者が登録するための1つまたは多数の対面または教室ベースのセッションの予約システムを設定することができます。

 この活動モジュールは、1対1のセッションやセミナーなどの複数セッションの活動に適しています。

 セッションは1つのアポイントメントアクティビティ内で複数の日付を持つことができ、設定で指定した時間割を使用して一括で作成することができます。

 このアクティビティでは、出席のトラッキングが可能です。';
$string['modulename_link'] = 'Appointments';
$string['modulenameplural'] = 'アポイントメント';
$string['multipleappointments'] = '複数のアポイントメント';
$string['noactionableunapprovedrequests'] = '活動可能な未承認のリクエストはありません';
$string['noremindersneedtobesent'] = 'リマインダーの送信は不要です。';
$string['nosignedupusers'] = 'このセッションに登録したユーザはいません。';
$string['notset'] = '設定なし';
$string['notsignedup'] = 'このセッションに登録されていません。';
$string['partiallyfull'] = '部分的に満席';
$string['placeholder:alldates'] = '[全日付]';
$string['placeholder:appointmentname'] = '[アポイントメント名]';
$string['placeholder:attendeeslink'] = '[参加者リンク]';
$string['placeholder:details'] = '詳細';
$string['placeholder:finishtime'] = '終了時刻';
$string['placeholder:firstname'] = '名';
$string['placeholder:lastname'] = '姓';
$string['placeholder:reminderperiod'] = '[リマインダー期間]';
$string['placeholder:sessiondate'] = '[セッション日]';
$string['placeholder:starttime'] = '開始時刻';
$string['placeholdersdesc'] = 'プレースホルダー';
$string['placeholdersdesc_help'] = 'プレースホルダーを使用すると、動的なコンテンツを追加できます。たとえば、[firstname] プレースホルダーは、ユーザに送信される通知内でユーザの名前に置き換えられます';
$string['pluginadministration'] = 'アポイントメント管理';
$string['pluginname'] = 'アポイントメント';
$string['potentialattendees'] = '潜在的な参加者';
$string['privacy:metadata:appointment_signups'] = 'アポイントメントセッションへのユーザの登録';
$string['privacy:metadata:appointment_signups:id'] = '登録ID';
$string['privacy:metadata:appointment_signups:mailedreminder'] = 'リマインダーが最後に送信された時間';
$string['privacy:metadata:appointment_signups:sessionid'] = 'セッションID';
$string['privacy:metadata:appointment_signups_status'] = 'セッションへのユーザ登録ステータス';
$string['privacy:metadata:appointment_signups_status:grade'] = 'セッションに参加したことで割り当てられた評定';
$string['privacy:metadata:appointment_signups_status:note'] = 'セッションキャンセルの理由を保存';
$string['privacy:metadata:appointment_signups_status:signupid'] = '登録ID';
$string['privacy:metadata:appointment_signups_status:statuscode'] = '登録ステータス 例)キャンセル、拒否、全員出席';
$string['privacy:metadata:appointment_signups_status:timecreated'] = '登録が作成された時間';
$string['privacy:metadata:userid'] = 'アポイントメント活動にアクセスしたユーザID';
$string['remindermessage'] = 'リマインダーメッセージ';
$string['remindermessage_help'] = 'このメッセージは、セッション開始日付の数日前に送信されます。';
$string['reminderperiod'] = 'メッセージ送信までの日数';
$string['reminderperiod_help'] = 'リマインダーは、セッション開始の何日も前に送信されます。';
$string['requestmessage'] = 'メッセージをリクエスト';
$string['requestmessage_help'] = '「承認が必要」が有効になっていると、「リクエストメッセージ」セクションが利用できます。
 「リクエストメッセージ」セクションには、学習者がアポイントメントセッションに参加するための承認プロセスに関して、学習者とマネージャに送信された通知が表示されます。
 「件名」は、マネージャと学習者に送信される承認リクエストメールに表示される件名です。
 「メッセージ」は、学習者に送信されるEメールの文面で、アポイントセッションへの参加依頼がマネージャに送信され、承認されたことを通知します。
 「マネージャに通知」は、学習者のマネージャに送信されるメールの文面で、アポイントセッションへの参加を承認することを要求します。';
$string['requeststablesummary'] = 'このセッションの参加をリクエストしている人';
$string['room'] = 'ルーム';
$string['saveattendance'] = '出席を保存';
$string['search:activity'] = 'アポイントメント活動';
$string['seatsavailable'] = '空席あり';
$string['seatsbooked'] = '席を予約';
$string['sessionavailability'] = 'セッションの空き状況';
$string['sessiondatetime'] = 'セッションの日付/時間';
$string['sessiondescription'] = '説明';
$string['sessionduration'] = 'セッションの持続時間';
$string['sessionfinished'] = '終了';
$string['sessionfinishtime'] = 'セッションの終了時間';
$string['sessioninprogress'] = '進行中のセッション';
$string['sessionisfull'] = 'このセッションは、ただいま満席です。別の時間を選択するか、インストラクターに相談してください。';
$string['sessionnotstarted'] = '未開始';
$string['sessionrequiresmanagerapproval'] = 'このセッションを予約するためには、マネージャの承認が必要です。';
$string['sessions'] = 'セッション';
$string['sessionsdetailstablesummary'] = '現在のセッションの詳しい説明';
$string['sessionstartdate'] = 'セッション開始日';
$string['sessionstartdateandtime'] = '{$a->startdate}, {$a->starttime} - {$a->endtime} (タイムゾーン: {$a->timezone})';
$string['sessionstartdateandtimewithouttimezone'] = '{$a->startdate}, {$a->starttime} - {$a->endtime}';
$string['sessionstartfinishdateandtime'] = '{$a->startdate} - {$a->enddate}, {$a->starttime} - {$a->endtime} (タイムゾーン: {$a->timezone})';
$string['sessionstartfinishdateandtimewithouttimezone'] = '{$a->startdate} - {$a->enddate}, {$a->starttime} - {$a->endtime';
$string['sessionstarttime'] = 'セッション開始時間';
$string['sessionstatus'] = 'セッションステータス';
$string['setting:defaultcancellationmessagedefault'] = 'これは、以下のアポイントメントがキャンセルされたことをお知らせするためのものです:<br><br>
*** 以下の予約はキャンセルされました。***
参加者：   [firstname] [lastname]<br>
予　約：   [appointmentname]<br>
日　付：<br>
[alldates]<br><br>
場　所：   [session:location]<br>
会　場：   [session:venue]<br>
ルーム：[session:room]';
$string['setting:defaultcancellationsubjectdefault'] = 'アポイントメント予約キャンセル';
$string['setting:defaultconfirmationmessagedefault'] = 'これはあなたが次のアポイントメントに予約が入っていることを確認するためのものです。<br><br>
 参加者: [firstname] [lastname]<br>
 アポイントメント名: [appointmentname]<br><br>

 日付:<br>
 [alldates]<br><br>

 場所: [session:location]<br>
 会場: [session:venue]<br>
 ルーム: [session:room]<br><br>

 ***アポイントメントの開始する10分前には到着するようにしてください***<br><br>

 予約を再予約あるいはキャンセルするには<br>
 予約を再予約あるいはキャンセルするには、あなたはこの予約をキャンセルして新しいセッションを再予約する必要があります。<br>
予約をキャンセルするには、アポイントメントページに戻り、「キャンセルする」を選択してください。<br><br>

 [details]<br><br>

 あなたはこのアポイントメントの[reminderperiod]営業日前にリマインダーを受け取ります。<br><br>';
$string['setting:defaultconfirmationsubjectdefault'] = 'アポイントメント予約確認: [appointmentname], [starttime]-[finishtime], [sessiondate]';
$string['setting:defaultremindermessagedefault'] = 'これはあなたが予約している次のアポイントメントのリマインダーです:<br><br>

 参加者: [firstname] [lastname]<br>
 アポイントメント名: [appointmentname]<br><br>

 日付:<br>
 [alldates]<br><br>

 場所: [session:location]<br>
 会場: [session:venue]<br>
 ルーム: [session:room]<br><br>

 ***アポイントメントの開始する10分前には到着するようにしてください***<br><br>

 予約を再予約あるいはキャンセルするには<br>
 予約を再予約あるいはキャンセルするには、あなたはこの予約をキャンセルして新しいセッションを再予約する必要があります。<br>
予約をキャンセルするには、アポイントメントページに戻り、「キャンセルする」を選択してください。<br><br>

 [details]';
$string['setting:defaultremindersubjectdefault'] = 'アポイントメント予約リマインダー: [appointmentname], [starttime]-[finishtime], [sessiondate]';
$string['setting:defaultrequestmessagedefault'] = '下記のアポイントメントの予約リクエストがマネージャに送信されました：

 参加者: [firstname] [lastname]
 アポイントメント名: [appointmentname]

 日付:
 [alldates]

 場所: [session:location]
 会場: [session:venue]
 ルーム: [session:room]';
$string['setting:defaultrequestsubjectdefault'] = 'アポイントメント予約リクエスト: [appointmentname], [starttime]-[finishtime]';
$string['setting:defaultupdatemessagedefault'] = 'これは、予約したまたはウェイトリストに登録した予定が変更されたことをお知らせするものです：<br><br>
参加者: [firstname] [lastname]<br>
予定: [appointmentname]<br><br>
日付:<br>
[alldates]<br><br>
場所: [session:location]<br>
会場: [session:venue]<br>
ルーム: [session:room]<br><br>
これは予約確定通知ではありませんのでご注意ください<br><br>

予約またはウェイトリストの登録をキャンセルするには、予約ページに戻り、「キャンセル」を選択してください。<br><br>

[details]<br><br>';
$string['setting:defaultupdatesubjectdefault'] = '予約更新: [appointmentname], [starttime]-[finishtime], [sessiondate]';
$string['setting:defaultwaitlistedmessagedefault'] = 'これは、あなたがキャンセル待ちリストに追加されたことをお知らせするためのものです。

 アポイントメント名: [appointmentname]
 場所: [session:location]
 参加者: [firstname] [lastname]

 ***これは予約確認ではありませんのでご注意ください。***
 キャンセル待ちリストに登録することで、この予約に興味を持ったことになります。セッションが利用可能になった際に直接ご連絡させていただきます。

 キャンセル待ちを解除するには、この予約に戻り、キャンセルをクリックしてください。キャンセル待ちリスト解除の確認メールはありませんのでご注意ください。';
$string['setting:defaultwaitlistedsubjectdefault'] = '[appointmentname]のキャンセル待ち報告';
$string['setting:oneemailperday'] = '複数日にわたるイベントの場合、各日に対して個別のメールを送信します。';
$string['setting:oneemailperday_caption'] = '各日に対して個別のメール';
$string['settings'] = '設定';
$string['shortname'] = '# 省略名';
$string['shortname_help'] = '「省略名」は、「カレンダーに表示」が有効なとき、学習カレンダーに表示されます。';
$string['showoncalendar'] = 'カレンダー表示設定';
$string['showoncalendar_help'] = '「サイト」を選択すると、アポイントメント活動セッションはグローバルイベントとしてサイトカレンダーに表示されます。 すべてのサイトユーザはこれらのセッションを閲覧することもできます。

 「コース」を選択すると、すべてのアポイントメント管理セッションがコースカレンダーに表示され、サイトレベルカレンダーにコースイベントとして表示され、そのコースに登録しているすべてのユーザが閲覧できます。

 「なし」が選択されている場合、「ユーザのカレンダーに表示する」オプションが選択されている場合に限り、アポイントメント活動セッションは、確認済みの参加者のカレンダーにユーザイベントとして表示されます。';
$string['sign-ups'] = '登録';
$string['signupforthissession'] = 'このアポイントメントセッションに登録';
$string['split'] = '自動分割';
$string['split_help'] = 'この設定は、時間枠内に作成された各セッションの継続期間を定義します。0に設定すると、このオプションは無効になります。';
$string['status'] = 'ステータス';
$string['status_approved'] = '承認済';
$string['status_booked'] = '予約済';
$string['status_declined'] = '辞退済';
$string['status_fully_attended'] = '完全出席';
$string['status_no_show'] = '表示なし';
$string['status_partially_attended'] = '部分的に出席しました';
$string['status_requested'] = 'リクエストされました';
$string['status_user_cancelled'] = 'ユーザがキャンセル';
$string['status_waitlisted'] = 'キャンセル待ち';
$string['suppressemail'] = 'Eメール通知を停止';
$string['suppressemail_help'] = 'このオプションは、アポイントメントセッションからユーザに気づかれずに、ユーザを追加/削除したい場合に使用してください。このオプションが設定されている場合、通常のEメールは選択されたユーザには送信されません。';
$string['takeattendance'] = '出欠をとる';
$string['thirdpartyemailaddress'] = '第三者のEメールアドレス';
$string['thirdpartyemailaddress_help'] = '「第三者のEメールアドレス」は、ユーザがセッションに登録した際に確認メッセージを受け取る第三者（外部講師など）のメールアドレスを指定するためのオプションフィールドです。
 「複数のEメールアドレス」を入力する場合は、各アドレスをカンマで区切ってください。例: bob@example.com,joe@example.com';
$string['thirdpartywaitlist'] = 'キャンセル待ちのセッションについて第三者に通知';
$string['thirdpartywaitlist_help'] = '「キャンセル待ちのセッションについて第三者に通知する」を選択した場合、学習者がキャンセル待ち中のセッションに登録すると、第三者に通知されます。

 「キャンセル待ちのセッションについて第三者に通知する」が無効な場合、ユーザが予定されたセッションに登録（またはキャンセル）した場合にのみ、第三者に通知されます。';
$string['timecancelled'] = 'キャンセルされた時間';
$string['timeframes'] = '時間枠';
$string['timerequested'] = 'リクエストされた時間';
$string['timesignedup'] = '登録された時間';
$string['timestart'] = '開始時間';
$string['unapprovedrequests'] = '未承認のリクエスト';
$string['unknowndate'] = '(日付不明)';
$string['unknowntime'] = '(時間不明)';
$string['updatemessage'] = 'メッセージを更新';
$string['updatemessage_help'] = 'このメッセージは、セッションが変更されるたびに送信されます。';
$string['usercalentry'] = 'ユーザのカレンダーにエントリを表示';
$string['usercalentry_help'] = 'この設定を有効にすると、予定セッションの出席者のカレンダーにユーザイベントのエントリが追加されます。オフにすると、カレンダーの表示設定が「コース」または「サイト」に設定されているセッションの参加者のカレンダ ーに、イベントが重複して表示されるのを防ぐことができます。';
$string['usercancelledon'] = '{$a} をキャンセルしたユーザ';
$string['usernotsignedup'] = 'ステータス：登録していません';
$string['usersignedup'] = 'ステータス：登録しました';
$string['usersignedupon'] = '{$a} に登録したユーザ';
$string['userwillbewaitlisted'] = 'このセッションは満席です。「登録」ボタンをクリックすると、キャンセル待ちリストに登録されます。';
$string['venue'] = '会場';
$string['waitlistedat'] = '<strong>キャンセル待ちリスト登録済み:</strong> {$a}';
$string['waitlistedmessage'] = 'キャンセル待ちメッセージ';
$string['waitlistedmessage_help'] = 'このメッセージは、ユーザがキャンセル待ちセッションに登録する度に送信されます。';
