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
 * Strings for component 'attendanceregister', language 'ja', version '4.4'.
 *
 * @package     attendanceregister
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['are_you_sure_to_delete_offline_session'] = '本当にこのオフラインセッションを削除してもよろしいですか?';
$string['attendanceregister:addinstance'] = '新しい出席記録を追加する';
$string['attendanceregister:addotherofflinesess'] = '他の人の記録にオフラインセッションを追加できる';
$string['attendanceregister:addownofflinesess'] = '自分の記録にオフラインセッションを追加できる';
$string['attendanceregister:deleteotherofflinesess'] = '他の人の記録からオフラインセッションを削除できる';
$string['attendanceregister:deleteownofflinesess'] = '自分の記録からオフラインセッションを削除できる';
$string['attendanceregister:recalcsessions'] = '出席記録セッションの再計算を強制できる';
$string['attendanceregister:tracked'] = '出席記録で追跡される';
$string['attendanceregister:viewotherregisters'] = '他の人の出席記録を閲覧できる';
$string['attendanceregister:viewownregister'] = '自分の出席記録を閲覧できる';
$string['back_to_normal'] = '通常バージョンに戻る';
$string['back_to_tracked_user_list'] = '追跡対象ユーザ一覧に戻る';
$string['click_for_detail'] = 'クリックして詳細表示する';
$string['comments'] = 'コメント';
$string['completiondurationgroup'] = '合計追跡時間';
$string['completiontotalduration'] = '所要時間 [分］';
$string['count'] = '#';
$string['crontask'] = '出席記録セッションを再計算する';
$string['dayscertificable'] = '記録保持日数';
$string['dayscertificable_exceeded'] = '{$a} 日以内を指定してください。';
$string['dayscertificable_help'] = 'オフラインセッションの有効期限を制限します。
<br>
 学生はこの日数より古いオフラインセッションを記録できません。';
$string['duration'] = '期間';
$string['duration_hh_mm'] = '{$a->hours} 時間 {$a->minutes} 分';
$string['duration_mm'] = '{$a->minutes} 分';
$string['enable_offline_sessions_certification'] = 'オフラインセッションを有効にする';
$string['end'] = '終了';
$string['first_calc_at_next_cron_run'] = '過去のセッションは次のcronで表示されます。';
$string['force_recalc_all_session'] = 'すべてのオンラインセッションを再計算する';
$string['force_recalc_all_session_help'] = 'すべての追跡対象ユーザのすべてのオンラインセッションを削除および再計算します。
<br>
通常、あなたには<b>この必要はありません</b>!
<br>
新しいセッションは (若干の遅延の後) バックグラウンドで自動的に計算されます。
<br>
この操作は以下で<b>のみ</b>有用かもしれません:
<ul>
<li>過去に異なる「ロール」で追跡されたコースに参加していたユーザの「ロール」を変更した場合 (例:「教師」から「学生」に変更した場合、「学生」は追跡されますが、「教師」は追跡されません)。</li>
<li>セッション計算に影響する記録設定を変更した後 (例「出席追跡モード」「オンラインセッションタイムアウト」)</li>
</ul>
あなたが<b>新しいユーザを登録する際に再計算の必要はありません</b>!
<br><br>
再計算は即座に実行することも、次のcronで実行するようスケジュールすることもできます。混雑したコースではスケジュール実行の方が効率的です。';
$string['force_recalc_all_session_now'] = '今すぐセッションを再計算する';
$string['force_recalc_user_session'] = 'このユーザのオンラインセッションを再計算する';
$string['force_recalc_user_session_help'] = 'このユーザのすべてのオンラインセッションを削除および再計算します。
<br>
通常、あなたには<b>この必要はありません</b>!
<br>
新しいセッションは (若干の遅延の後) バックグラウンドで自動的に計算されます。<br>
この操作は以下で<b>のみ</b>有用かもしれません:
<ul>
<li>過去に異なる「ロール」で追跡されたコースに参加していたユーザの「ロール」を変更した場合 (例:「教師」から「学生」に変更した場合、「学生」は追跡されますが、「教師」は追跡されません)。</li>
<li>セッション計算に影響する記録設定を変更した後 (例「出席追跡モード」「オンラインセッションタイムアウト」)</li>
</ul>';
$string['fullname'] = '氏名';
$string['grandtotal_time'] = '合計時間';
$string['insert_new_offline_session'] = '新しいオフライン作業セッションを挿入する';
$string['insert_new_offline_session_for_another_user'] = '{$a->fullname} の新しいオフライン作業セッションを挿入する';
$string['last_calc_online_session_logout'] = '最新記録オンラインセッション終了 (現在のセッションを除く)';
$string['last_session_logout'] = '最新セッション終了';
$string['last_site_access'] = '最新サイト活動';
$string['last_site_login'] = '最新サイトログイン';
$string['login_must_be_before_logout'] = '終了日時の前に開始日時が指定されています!';
$string['logout_is_future'] = '将来的な時間ではないと思われます。';
$string['mandatory_offline_sessions_comments'] = 'コメント必須';
$string['mandatoryofflinespecifycourse'] = 'コース選択必須';
$string['mandatoryofflinespecifycourse_help'] = 'オフラインセッションでのコース指定は必須となります。';
$string['maynotaddselfcertforother'] = 'あなたは他のユーザのオフラインセッションを追加できません。';
$string['mod_attendance_recalculation'] = 'セッション更新ログを再計算するモジュールです。';
$string['modulename'] = '出席記録';
$string['modulename_help'] = '出席記録はユーザがオンラインコースで作業した時間を計算します。
<br>
任意でユーザにオフライン活動の記録を許可できます。
<br>
出席記録は出席モードで単一コース、同一カテゴリ内すべてのコースまたは出席記録が設置されたコースに「メタリンク」されたすべてのコースの活動を追跡できます。
<br>
オンライン作業セッションはMoodleに記録されたログエントリに基づき計算されます。
<br>
<b>新しいオンラインセッションはユーザがログアウトした後、cronにより少し遅れて追加されます。</b>';
$string['modulenameplural'] = '出席記録';
$string['myattendanceregisteraggregates'] = 'マイ出席記録集計値';
$string['myattendanceregistersessions'] = 'マイ出席記録セッション';
$string['never'] = '(なし)';
$string['no_refcourse'] = '(コース指定なし)';
$string['no_session'] = 'セッションなし';
$string['no_session_for_this_user'] = '- このユーザのセッションはまだありません -';
$string['no_tracked_user'] = '- この出席記録で追跡されたユーザはいません -';
$string['not_specified'] = '(指定なし)';
$string['offline'] = 'オフライン';
$string['offline_refcourse_duration'] = 'オフライン時間, コース';
$string['offline_session_comments'] = 'コメント';
$string['offline_session_comments_help'] = 'オフライン作業セッションのテーマを記述してください。';
$string['offline_session_deleted'] = 'オフラインセッションが削除されました。';
$string['offline_session_end'] = '終了';
$string['offline_session_ref_course'] = '参照コース';
$string['offline_session_ref_course_help'] = 'オフライン作業が実施されたコースまたは作業内容をカバーするコースを選択してください。';
$string['offline_session_saved'] = '新しいオフラインセッションが保存されました。';
$string['offline_session_start'] = '開始';
$string['offline_session_start_help'] = '送信したいオフライン作業セッションの開始日時および終了日時を選択してください。
<br>
オフラインセッションはオンラインまたはオフラインを問わず、以前に記録されたセッションまたは現在のオンラインセッションとは重複できません。';
$string['offline_sessions_certification'] = 'オフライン作業セッション';
$string['offline_sessions_certification_help'] = 'ユーザがオフライン作業セッションを追加できるようにします。
<br>
これはある種の「自己認定」だと言えます。
<br>
「官僚主義」のためにすべての学生の活動記録を管理する必要がある場合、これは有用かもしれません。
<br>
オフラインセッションを追加できるのは実ユーザのみです: 「... としてログイン」中の管理者は追加できません!';
$string['offline_sessions_total_duration'] = 'オフライン合計時間';
$string['offlinecomments'] = 'ユーザコメント';
$string['offlinecomments_help'] = 'オフラインセッションへのテキストコメントの追加を有効にします。';
$string['offlinespecifycourse'] = 'オフラインセッションのコースを指定する';
$string['offlinespecifycourse_help'] = 'ユーザがオフラインセッションに関連するコースを選択できるようにします。
<br>
これは出席登録が複数コースを追跡する場合のみ意味があります (出席モードが「カテゴリ」または「メタリンク」である場合)。';
$string['online'] = 'オンライン';
$string['online_offline'] = 'オンライン/オフライン';
$string['online_session_updated'] = 'オンラインセッションが更新されました。';
$string['online_session_updated_report'] = '{$a->fullname} のオンラインセッションが更新されました: {$a->numnewsessions} 件の新しいセッションがあります。';
$string['online_sessions_total_duration'] = 'オンラインセッション合計時間';
$string['onlyrealusercanaddofflinesessions'] = '実ユーザのみオフラインセッションを追加できる';
$string['onlyrealusercandeleteofflinesessions'] = '実ユーザのみオフラインセッションを削除できる';
$string['overlaps_current_session'] = '現在のオンラインセッション (現在のログイン以降) と重なります。';
$string['overlaps_old_sessions'] = 'オンラインまたはオフラインで別のセッションと重なります。';
$string['participants_attendance_report_viewed'] = '参加者出席レポートが閲覧されました。';
$string['pluginadministration'] = '出席記録管理';
$string['pluginname'] = '出席記録';
$string['prev_site_login'] = '前回のサイトログイン';
$string['privacy:metadata:attendanceregister_aggregate'] = 'ユーザごとに集計されたセッションを追跡します。';
$string['privacy:metadata:attendanceregister_aggregate:duration'] = 'セッション持続時間です。';
$string['privacy:metadata:attendanceregister_aggregate:grandtotal'] = '総合計時間です。';
$string['privacy:metadata:attendanceregister_aggregate:lastsessionlogout'] = 'attendanceregister_sessionログアウトから取得した最終ユーザのオンラインセッションログアウトです。';
$string['privacy:metadata:attendanceregister_aggregate:onlinesess'] = 'セッションがオンラインであるかオフラインであるか示します。';
$string['privacy:metadata:attendanceregister_aggregate:refcourse'] = 'オフラインセッションを参照するコースです。';
$string['privacy:metadata:attendanceregister_aggregate:total'] = '合計セッション時間です。';
$string['privacy:metadata:attendanceregister_aggregate:userid'] = 'ユーザIDです。';
$string['privacy:metadata:attendanceregister_lock'] = '再計算中にユーザの出席記録をロックします。';
$string['privacy:metadata:attendanceregister_lock:userid'] = 'ユーザの記録を再計算するために私たちはセッションのユーザIDを保存します。このデータは一時的なものであり、セッション再計算完了後に削除されます。';
$string['privacy:metadata:attendanceregister_session'] = 'ユーザセッションを追跡します。';
$string['privacy:metadata:attendanceregister_session:addedbyuserid'] = 'オフラインセッションが別のユーザに挿入された場合、これは関連するユーザIDです。';
$string['privacy:metadata:attendanceregister_session:comments'] = 'オフラインセッションコメントです。';
$string['privacy:metadata:attendanceregister_session:duration'] = 'セッション持続時間です。';
$string['privacy:metadata:attendanceregister_session:login'] = 'ログインタイムスタンプです。';
$string['privacy:metadata:attendanceregister_session:logout'] = 'ログアウトタイムスタンプです。';
$string['privacy:metadata:attendanceregister_session:onlinesess'] = 'セッションがオンラインであるかオフラインであるか示します。';
$string['privacy:metadata:attendanceregister_session:refcourse'] = 'オフラインセッションを参照するコースです。';
$string['privacy:metadata:attendanceregister_session:userid'] = 'ユーザIDです。';
$string['recalc_already_pending'] = '(次のcron実行のためにすでに保留中です)';
$string['recalc_complete'] = 'セッション再計算完了';
$string['recalc_scheduled'] = 'セッション再計算がスケジュールされました。次のcronで実行されます。';
$string['recalc_scheduled_on_next_cron'] = 'セッション再計算は次のcronで実行されるようスケジュールされました。';
$string['ref_course'] = '参照コース';
$string['registername'] = '出席記録名';
$string['registertype'] = '出席追跡モード';
$string['registertype_help'] = '出席追跡モードは出席記録で追跡されるコースを決定します (ユーザの活動が監視される場所です):
<br><br>
* _このコースのみ_: 出席記録モジュールが設置されたコースのみ。
<br>
* _同一カテゴリ内すべてのコース_: 出席記録モジュールが属するコースと同じカテゴリに属するすべてのコースで活動が監視されます。
<br>
* _コースメタリンクでリンクされたすべてのコース_: このコースおよびコースメタリンクでリンクされたすべてのコースで活動が監視されます。';
$string['schedule_reclalc_all_session'] = 'セッション再計算をスケジュールする';
$string['select_a_course'] = '- コースを選択する -';
$string['select_a_course_if_any'] = '- コースを選択する (ある場合) -';
$string['session_added_by_another_user'] = '追加ユーザ: {$a}';
$string['sessions_grandtotal_duration'] = '総合計時間';
$string['sessiontimeout'] = 'オンラインセッションタイムアウト';
$string['sessiontimeout_help'] = 'セッションタイムアウトはオンラインセッションの持続時間を推定するために使用されます。
<br>
オンラインセッションは少なくとも<b>セッションタイムアウトの半分</b>の長さになります。
<br>
セッションタイムアウトが長すぎる場合、出席記録はオンラインセッションの期間を過大評価する傾向があることに留意してください。
<br>
セッションが短すぎる場合、実際のセッションはさらに多くの短いセッションに分けられてしまいます。
<br>
<h3>長い説明</h3>
オンライン作業セッションは追跡されたコースにおけるユーザのログエントリで「推測」されます (詳細は「出席追跡モード」をご覧ください)。
<br>
2つの連続したログエントリの間にセッションタイムアウトより短い時間が経過した場合、出席記録はそのユーザが継続してオンラインで作業している (すなわち、セッションが継続している) と推測します。
<br>
セッションタイムアウトより長い時間が経過した場合、出席記録はユーザが前のログエントリの後、セッションタイムアウトの<b>半分</b>の時間でオンライン作業を停止した後 (つまり、セッション終了)、次のログエントリで再び戻ってきている (つまり、新しいセッション開始) と推測します。';
$string['show_my_sessions'] = '私のセッションを表示する';
$string['show_printable'] = '印刷バージョンを表示する';
$string['standardlog_disabled'] = 'Moodle標準ログは無効にされています。すべての新しいユーザセッションは追跡されません。';
$string['standardlog_readonly'] = 'Moodle標準ログは読み込み専用にされています。すべての新しいユーザセッションは追跡されません。';
$string['start'] = '開始';
$string['total_time_offline'] = '合計オフライン時間';
$string['total_time_online'] = '合計オンライン時間';
$string['tracked_courses'] = '追跡コース';
$string['tracked_users'] = '追跡対象ユーザ';
$string['type_category'] = '同一カテゴリ内すべてのコース';
$string['type_course'] = 'このコースのみ';
$string['type_meta'] = 'コースメタリンクでリンクされたすべてのコース';
$string['unknown'] = '(不明)';
$string['unreasoneable_session'] = '本当によろしいですか? これは {$a} 時間以上あります!';
$string['updating_online_sessions_of'] = '{$a} のオンラインセッションを更新する';
$string['user_attendance_addoffline'] = 'ユーザがオフライン出席エントリを追加する';
$string['user_attendance_deloffline'] = 'ユーザがオフライン出席エントリを削除する';
$string['user_attendance_details_viewed'] = 'ユーザが出席詳細を閲覧しました。';
$string['user_sessions_summary'] = 'ユーザセッション概要';
