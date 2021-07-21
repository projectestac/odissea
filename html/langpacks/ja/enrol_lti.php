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
 * Strings for component 'enrol_lti', language 'ja', version '3.11'.
 *
 * @package     enrol_lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowframeembedding'] = '注意: ツールを新しいウィンドウではなくフレーム内に表示するため、サイト管理設定「フレーム内埋め込みを許可する」を有効にすることをお勧めします。';
$string['authltimustbeenabled'] = '注意: このプラグインではLTI認証プラグインも有効にする必要があります。';
$string['cartridgeurl'] = 'カートリッジURL';
$string['couldnotestablishproxy'] = 'コンシューマでプロキシを確立できませんでした。';
$string['enrolenddate'] = '終了日';
$string['enrolenddate_help'] = 'この設定を有効にした場合、ユーザはこの日のみアクセスすることができます。';
$string['enrolenddateerror'] = '登録終了日を開始日より早くすることはできません。';
$string['enrolisdisabled'] = '「LTIツールとして公開する」プラグインは無効にされています。';
$string['enrolmentfinished'] = '登録は終了しました。';
$string['enrolmentnotstarted'] = '登録はまだ開始されていません。';
$string['enrolperiod'] = '登録期間';
$string['enrolperiod_help'] = '登録が有効な期間です。ユーザがリモートシステムから登録した時点で始まります。この設定を無効にした場合、登録期間は無制限となります。';
$string['enrolstartdate'] = '開始日';
$string['enrolstartdate_help'] = 'この設定を有効にした場合、ユーザはこの日以降のみアクセスすることができます。';
$string['failedrequest'] = 'リクエストに失敗しました。理由: {$a->reason}';
$string['frameembeddingnotenabled'] = 'ツールにアクセスするには以下のリンクにアクセスしてください。';
$string['gradesync'] = '評定同期';
$string['gradesync_help'] = 'ツールからの評点をリモートシステム (LTIコンシューマ) に送信するか決定します。';
$string['incorrecttoken'] = 'トークンが正しくありません。URLを確認して再度試すか、このツールの管理者にご連絡ください。';
$string['invalidrequest'] = '無効なリクエスト';
$string['invalidtoolconsumer'] = '無効なツールコンシューマです。';
$string['launchdetails'] = '起動詳細';
$string['launchdetails_help'] = 'ツールを設定するにはカートリッジURL (設定URLとも呼ばれます) および秘密鍵または起動URLが必要です。';
$string['launchurl'] = '起動URL';
$string['lti:config'] = '「LTIツールとして公開する」インスタンスを設定する';
$string['lti:unenrol'] = 'コースからユーザを登録解除する';
$string['maxenrolled'] = '最大登録ユーザ数';
$string['maxenrolled_help'] = 'ツールにアクセスできるリモートユーザ最大数を指定します。ゼロを設定した場合、登録ユーザ数は制限されません。';
$string['maxenrolledreached'] = 'ツールにアクセスを許可されるリモートユーザの最大数に達しています。';
$string['membersync'] = 'ユーザ同期';
$string['membersync_help'] = 'スケジュールタスクがリモートシステム内の登録済みユーザをこのコースへの登録に同期する、必要に応じてリモートユーザのアカウントを作成する、必要に応じてリモートユーザを登録および登録解除するか決定します。

この設定が無効にされた場合、リモートユーザがツールにアクセスした時点でアカウントが作成されて自動的に登録されます。';
$string['membersyncmode'] = 'ユーザ同期モード';
$string['membersyncmode_help'] = 'このコースにリモートユーザが登録および登録解除されるか決定します。';
$string['membersyncmodeenrolandunenrol'] = '新しいユーザを登録して不明なユーザを登録解除する';
$string['membersyncmodeenrolnew'] = '新しいユーザを登録する';
$string['membersyncmodeunenrolmissing'] = '不明なユーザを登録解除する';
$string['notoolsprovided'] = '提供ツールなし';
$string['opentool'] = 'オープンツール';
$string['pluginname'] = 'LTIツールとして公開する';
$string['pluginname_desc'] = '選択されたコースおよび活動に対してLTI認証プラグインと共にリモートユーザにアクセスを許可する「LTIツールとして公開する」プラグインです。言い換えれば、MoodleがLTIツールプロバイダとして機能すると言えます。';
$string['privacy:metadata:enrol_lti_users'] = 'LTIプロバイダ経由で登録されたユーザの一覧です。';
$string['privacy:metadata:enrol_lti_users:lastaccess'] = 'ユーザが最後にコースにアクセスした日時です。';
$string['privacy:metadata:enrol_lti_users:lastgrade'] = 'ユーザに記録された最終評点です。';
$string['privacy:metadata:enrol_lti_users:timecreated'] = 'ユーザが登録された日時です。';
$string['privacy:metadata:enrol_lti_users:userid'] = 'ユーザのIDです。';
$string['registration'] = 'ツール登録公開';
$string['registrationurl'] = '登録URL';
$string['registrationurl_help'] = '登録URL (プロキシURLとも呼ばれます) が使用された場合、ツールは自動的に設定されます。';
$string['remotesystem'] = 'リモートシステム';
$string['requirecompletion'] = '評定同期前にコースまたは活動の完了を必要とする';
$string['returnurlnotset'] = '戻り先URLが設定されていません。';
$string['roleinstructor'] = '教師ロール';
$string['roleinstructor_help'] = 'リモート教師にツール内で割り当てられるロールです。';
$string['rolelearner'] = '学生ロール';
$string['rolelearner_help'] = 'リモート学生にツール内で割り当てられるロールです。';
$string['secret'] = '秘密鍵';
$string['secret_help'] = 'ツールへのアクセスを許可するためにリモートシステム (LTIコンシューマ) と同期するための文字列です。';
$string['sharedexternaltools'] = 'LTIツールとして公開済み';
$string['successfulregistration'] = '登録成功';
$string['tasksyncgrades'] = 'LTIツールとして公開する評定同期';
$string['tasksyncmembers'] = 'LTIツールとして公開するユーザ同期';
$string['toolsprovided'] = '公開ツール';
$string['toolsprovided_help'] = '起動URLまたは登録URLを提供することにより別のサイトとツールを共有することができます。';
$string['tooltobeprovided'] = '公開されるツール';
$string['toolurl'] = 'ツールURL';
$string['userdefaultvalues'] = 'ユーザデフォルト値';
