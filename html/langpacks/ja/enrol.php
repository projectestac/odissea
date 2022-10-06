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
 * Strings for component 'enrol', language 'ja', branch 'MOODLE_38_STABLE'
 *
 * @package   enrol
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actenrolshhdr'] = '利用可能なコース登録プラグイン';
$string['addinstance'] = '登録方法を追加する';
$string['addinstanceanother'] = '登録方法を追加して、もう1つ作成する';
$string['ajaxnext25'] = '次の25 ...';
$string['ajaxoneuserfound'] = '1名のユーザが見つかりました。';
$string['ajaxxmoreusersfound'] = '{$a} 名以上のユーザが見つかりました。';
$string['ajaxxusersfound'] = '{$a} 名のユーザが見つかりました。';
$string['assignnotpermitted'] = 'あなたにはこのコースでロールを割り当てるパーミッションがありません。または割り当てることができません。';
$string['bulkuseroperation'] = 'バルクユーザ操作';
$string['configenrolplugins'] = '必要なプラグインすべてを選択した後、適切な順序に並べ替えてください。';
$string['custominstancename'] = 'カスタムインスタンス名';
$string['defaultenrol'] = '新しいコースにインスタンスを追加する';
$string['defaultenrol_desc'] = 'このプラグインを新しいコースすべてにデフォルトで追加することができます。';
$string['deleteinstanceconfirm'] = 'あなたは登録方法「 {$a->name} 」を削除しようとしています。この登録方法を使用して登録している {$a->users} 名のユーザすべては登録解除され、ユーザ評定、グループメンバーシップ、フォーラム購読のようなコース関連データすべてが削除されます。

本当に続けてもよろしいですか?';
$string['deleteinstanceconfirmself'] = 'あなたがこのコースにアクセスできるインスタンス「 {$a->name} 」を本当に削除してもよろしいですか? 続ける場合、あなたはこのコースにアクセスできなくなります。';
$string['deleteinstancenousersconfirm'] = 'あなたは登録方法「 {$a->name} 」を削除しようとしています。本当に続けてもよろしいですか?';
$string['disableinstanceconfirmself'] = 'あなたがこのコースにアクセスできるインスタンス「 {$a->name} 」を本当に無効にしてもよろしいですか? 続ける場合、あなたはこのコースにアクセスできなくなります。';
$string['durationdays'] = '{$a} 日';
$string['editenrolment'] = '登録を編集する';
$string['edituserenrolment'] = '{$a} の登録を編集する';
$string['enrol'] = '登録';
$string['enrolcandidates'] = '受講未登録ユーザ';
$string['enrolcandidatesmatching'] = '合致する受講未登録ユーザ';
$string['enrolcohort'] = 'コーホートを登録する';
$string['enrolcohortusers'] = 'ユーザを登録する';
$string['enroldetails'] = '登録詳細';
$string['enrollednewusers'] = '新しい {$a} 名のユーザが正常に登録されました。';
$string['enrolledusers'] = '登録済みユーザ';
$string['enrolledusersmatching'] = '合致する登録済みユーザ';
$string['enrolme'] = 'このコースに私を登録する';
$string['enrolmentinstances'] = '登録方法';
$string['enrolmentmethod'] = '登録方法';
$string['enrolmentnew'] = '{$a} の新しい登録';
$string['enrolmentnewuser'] = '{$a->user} がコース 「 {$a->course} 」に登録しました。';
$string['enrolmentoptions'] = '登録オプション';
$string['enrolments'] = '登録';
$string['enrolnotpermitted'] = 'あなたにはこのコースにユーザを登録するパーミッションが割り当てられていないか、許可されていません。';
$string['enrolperiod'] = '登録期間';
$string['enroltimecreated'] = '登録作成日時';
$string['enroltimeend'] = '登録終了';
$string['enroltimeendinvalid'] = '登録終了日は登録開始日の後にする必要があります。';
$string['enroltimestart'] = '登録開始';
$string['enrolusage'] = 'インスタンス / 登録';
$string['enrolusers'] = 'ユーザを登録する';
$string['enrolxusers'] = '{$a} 名のユーザを登録する';
$string['errajaxfailedenrol'] = 'ユーザの登録に失敗しました。';
$string['errajaxsearch'] = 'ユーザ検索中にエラーが発生しました。';
$string['erroreditenrolment'] = 'ユーザ登録の編集中にエラーが発生しました。';
$string['errorenrolcohort'] = 'このコース内でのコーホート同期登録インスタンス作成中にエラーが発生しました。';
$string['errorenrolcohortusers'] = 'このコースへのコーホートメンバー登録中にエラーが発生しました。';
$string['errorthresholdlow'] = '通知閾値は少なくとも1日にする必要があります。';
$string['errorwithbulkoperation'] = 'あなたのバルク登録変更処理中にエラーが発生しました。';
$string['eventenrolinstancecreated'] = '登録インスタンスが作成されました。';
$string['eventenrolinstancedeleted'] = '登録インスタンスが削除されました。';
$string['eventenrolinstanceupdated'] = '登録インスタンスが更新されました。';
$string['eventuserenrolmentcreated'] = 'ユーザがコースに登録されました。';
$string['eventuserenrolmentdeleted'] = 'ユーザがコースから登録解除されました。';
$string['eventuserenrolmentupdated'] = 'ユーザ登録解除が更新されました。';
$string['expirynotify'] = '登録期限切れの前に通知する';
$string['expirynotifyall'] = '登録者および登録済みユーザ';
$string['expirynotifyenroller'] = '登録者のみ';
$string['expirynotify_help'] = 'この設定では登録期限切れ通知メッセージを送信するかどうか決定します。';
$string['expirynotifyhour'] = '登録期限切れ通知が送信される時間';
$string['expirythreshold'] = '通知閾値';
$string['expirythreshold_help'] = 'ユーザに登録期限切れ通知が送信されるまでの期間はどのくらいにしますか?';
$string['extremovedaction'] = '外部登録解除処理';
$string['extremovedaction_help'] = '外部登録ソースからユーザ登録が削除された場合に実施する処理を選択してください。コース登録解除時、いくつかのユーザデータおよび設定がコースから削除されることに留意してください。';
$string['extremovedkeep'] = 'ユーザの登録状態を保持する';
$string['extremovedsuspend'] = 'コース登録を無効にする';
$string['extremovedsuspendnoroles'] = 'コース登録を無効にして、ロールを削除する';
$string['extremovedunenrol'] = 'コースからユーザを登録解除する';
$string['finishenrollingusers'] = 'ユーザ登録を終了する';
$string['foundxcohorts'] = '{$a} 件のコーホートが見つかりました。';
$string['instanceadded'] = '登録方法が追加されました。';
$string['instanceeditselfwarning'] = '警告:';
$string['instanceeditselfwarningtext'] = 'あなたはこの登録方法により、このコースに登録されています。変更することにより、このコースに対するあなたのアクセスに影響する場合があります。';
$string['invalidenrolduration'] = '無効な登録期間です。';
$string['invalidenrolinstance'] = '無効な登録インスタンスです。';
$string['invalidrequest'] = '無効なリクエスト';
$string['invalidrole'] = '無効なロール';
$string['manageenrols'] = '登録プラグイン管理';
$string['manageinstance'] = '管理';
$string['migratetomanual'] = '手動登録に移行する';
$string['nochange'] = '変更なし';
$string['noexistingparticipants'] = '参加者は登録されていません。';
$string['nogroup'] = 'グループなし';
$string['noguestaccess'] = 'このコースにゲストはアクセスできません。ログインしてください。';
$string['none'] = 'なし';
$string['notenrollable'] = 'あなたはこのコースに登録できません。';
$string['notenrolledusers'] = '他のユーザ';
$string['otheruserdesc'] = '以下のユーザはこのコースに登録されていませんが、コース内でのロールが継承または割り当てられています。';
$string['participationactive'] = 'アクティブ';
$string['participationnotcurrent'] = '現在なし';
$string['participationstatus'] = 'ステータス';
$string['participationsuspended'] = '一時停止';
$string['periodend'] = '-> {$a}';
$string['periodnone'] = '登録日時 {$a}';
$string['periodstart'] = '{$a}';
$string['periodstartend'] = '{$a->start} -> {$a->end}';
$string['privacy:metadata:user_enrolments'] = '登録です。';
$string['privacy:metadata:user_enrolments:enrolid'] = '登録プラグインのインスタンスです。';
$string['privacy:metadata:user_enrolments:modifierid'] = 'ユーザ登録を最後に更新したユーザのIDです。';
$string['privacy:metadata:user_enrolments:status'] = 'コースのユーザ登録のステータスです。';
$string['privacy:metadata:user_enrolments:tableexplanation'] = 'コア登録プラグインは登録済みユーザを保存します。';
$string['privacy:metadata:user_enrolments:timecreated'] = 'ユーザ登録が作成された日時です。';
$string['privacy:metadata:user_enrolments:timeend'] = 'ユーザ登録が終了する日時です。';
$string['privacy:metadata:user_enrolments:timemodified'] = 'ユーザ登録が修正された日時です。';
$string['privacy:metadata:user_enrolments:timestart'] = 'ユーザ登録が開始する日時です。';
$string['privacy:metadata:user_enrolments:userid'] = 'ユーザのIDです。';
$string['proceedtocourse'] = 'コースコンテンツに移動する';
$string['recovergrades'] = '可能であればユーザの古い評定を回復する';
$string['rolefromcategory'] = '{$a->role} (コースカテゴリより継承)';
$string['rolefrommetacourse'] = '{$a->role} (親コースより継承)';
$string['rolefromsystem'] = '{$a->role} (サイトレベルで割り当て)';
$string['rolefromthiscourse'] = '{$a->role} (このコースで割り当て)';
$string['sendfromcoursecontact'] = 'コース連絡先から';
$string['sendfromkeyholder'] = 'キーホルダから';
$string['sendfromnoreply'] = 'no-replyアドレスから';
$string['startdatetoday'] = '本日';
$string['synced'] = '同期';
$string['testsettings'] = '設定テスト';
$string['testsettingsheading'] = 'テスト登録設定 - {$a}';
$string['totalenrolledusers'] = '登録済みユーザ数: {$a}';
$string['totalotherusers'] = '他のユーザ数: {$a} ';
$string['totalunenrolledusers'] = '{$a} 登録解除ユーザ';
$string['unassignnotpermitted'] = 'あなたにはこのコース内のロール割り当てを解除するパーミッションがありません。';
$string['unenrol'] = '登録解除';
$string['unenrolconfirm'] = '本当に「 {$a->user} 」 (「 {$a->enrolinstancename} 」経由で登録済み) を「 {$a->course} 」から登録解除してもよろしいですか?';
$string['unenrolme'] = '{$a} から私を登録解除する';
$string['unenrolnotpermitted'] = 'あなたにはこのユーザをこのコースから登録解除するパーミッションがない、または登録解除することができません。';
$string['unenrolroleusers'] = '次のユーザを登録解除する';
$string['uninstallmigrating'] = '「 {$a} 」登録の移行';
$string['unknowajaxaction'] = '不明な操作がリクエストされました。';
$string['unlimitedduration'] = '無制限';
$string['userremovedfromselectiona'] = '選択したものからユーザ「 {$a} 」が削除されました。';
$string['usersearch'] = '検索';
$string['withselectedusers'] = '選択したユーザに対して';
$string['youenrolledincourse'] = 'あなたはコースに登録されています。';
$string['youunenrolledfromcourse'] = 'あなたはコース「 {$a} 」から登録解除されます。';
