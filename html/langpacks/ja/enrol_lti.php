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
 * Strings for component 'enrol_lti', language 'ja', version '4.1'.
 *
 * @package     enrol_lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcontent'] = 'コンテンツを追加する';
$string['adddeployment:deploymentid'] = 'デプロイメントID';
$string['adddeployment:deploymentid_help'] = 'プラットフォーム内の各ツール (このサイト) のデプロイメントには登録時にユニークなデプロイメントIDが割り当てられます。各ツールのデプロイメントからの起動を許可する前にデプロイメントIDをツール (このサイト) に登録する必要があります。';
$string['adddeployment:invaliddeploymentiderror'] = '無効なデプロイメントIDです。このデプロイメントIDはすでにこのアプリ登録に存在します。';
$string['adddeployment:name'] = 'デプロイメント名';
$string['addtocourse'] = 'コースに追加する';
$string['addtogradebook'] = '評定表に追加する';
$string['allowframeembedding'] = '注意: ツールを新しいウィンドウではなくフレーム内に表示するため、サイト管理設定「フレーム内埋め込みを許可する」を有効にすることをお勧めします。';
$string['authltimustbeenabled'] = '注意: このプラグインではLTI認証プラグインも有効にする必要があります。';
$string['cartridgeurl'] = 'カートリッジURL';
$string['cookiesarerequired'] = 'あなたのブラウザでクッキーがブロックされいます。';
$string['cookiesarerequiredinfo'] = 'あなたのブラウザがサードパーティのクッキーをブロックしているため、このツールを起動できません。
<br><br>
このツールを使用するにはブラウザのクッキー設定を変更するか、別のブラウザを使用してください。';
$string['copiedtoclipboard'] = '{$a} がクリップボードにコピーされました。';
$string['copytoclipboard'] = 'クリップボードにコピーする';
$string['couldnotestablishproxy'] = 'コンシューマでプロキシを確立できませんでした。';
$string['customproperties'] = 'カスタムプロパティ';
$string['deeplinkingurl'] = 'ディープリンクURL';
$string['deletedactivity'] = '削除済み活動';
$string['deletedactivityalt'] = 'このインスタンスで共有する活動は削除されました。';
$string['deletedactivitydescription'] = 'このインスタンスで共有される活動は削除されました。インスタンスを編集して共有する別の活動を選択するか、不要になった場合、あなたはインスタンスを削除できます。インスタンスを削除した場合、関連するすべてのユーザ登録が削除されます。';
$string['deploymentadd'] = 'デプロイメントを追加する';
$string['deploymentaddnotice'] = 'デプロイメントが追加されました。';
$string['deploymentdelete'] = 'デプロイメントを削除する';
$string['deploymentdeleteconfirm'] = '警告: デプロイメントを削除した場合、プラットフォーム内のこのツールデプロイメントに関連付けられたリソースリンクを使用するすべてのユーザがアクセスできなくなります。また、これらのリソースのメンバおよび評定の同期サービスも削除されます。本当にツールデプロイメントID「 {$a} 」を削除してもよろしいですか?';
$string['deploymentdeletenotice'] = 'デプロイメントが削除されました。';
$string['deploymentid'] = 'デプロイメントID';
$string['deployments'] = 'デプロイメント';
$string['deploymentsinfo'] = 'デプロイメントIDはツールがあるコンテクストで利用できるようになった時点でプラットフォームにより生成されます。これは登録時に発生する場合、または後で特定のコースまたはカテゴリでツールが利用可能な状態になった時点で発生する場合もあります。ツール配置からの起動が許可される前に配置IDをここに入力する必要があります。';
$string['details'] = '詳細';
$string['editplatformdetails'] = 'プラットフォーム詳細を編集する';
$string['endpointltiversionnotice'] = '以下のツールエンドポイントはLTI1.3の手動セットアップ専用です。それ以前のバージョン (1.1/2.0) についてはコースナビゲーションからアクセス可能な「LTIツールとして公開する」ページでコンシューマ向け詳細を確認できます。';
$string['enrolenddate'] = '終了日';
$string['enrolenddate_help'] = 'この設定を有効にした場合、ユーザはこの日のみアクセスすることができます。';
$string['enrolenddateerror'] = '登録終了日を開始日より早くすることはできません。';
$string['enrolisdisabled'] = '「LTIツールとして公開する」プラグインは無効にされています。';
$string['enrolltiversionincorrect'] = 'リソースはレガシLTI (バージョン1.1/2.0) 上で使用するように設定されていません。このツールに関して管理者にご連絡ください。';
$string['enrolmentfinished'] = '登録は終了しました。';
$string['enrolmentnotstarted'] = '登録はまだ開始されていません。';
$string['enrolperiod'] = '登録期間';
$string['enrolperiod_help'] = '登録が有効な期間です。ユーザがリモートシステムから登録した時点で始まります。この設定を無効にした場合、登録期間は無制限となります。';
$string['enrolstartdate'] = '開始日';
$string['enrolstartdate_help'] = 'この設定を有効にした場合、ユーザはこの日以降のみアクセスすることができます。';
$string['existingregistrationerror'] = 'このイシュアおよびクライアントIDに対してすでに登録が存在します。';
$string['failedrequest'] = 'リクエストに失敗しました。理由: {$a->reason}';
$string['frameembeddingnotenabled'] = 'ツールにアクセスするには以下のリンクにアクセスしてください。';
$string['gradesync'] = '評定同期';
$string['gradesync_help'] = 'ツールからの評点をリモートシステム (LTIコンシューマ) に送信するか決定します。';
$string['incorrecttoken'] = 'トークンが正しくありません。URLを確認して再度試すか、このツールの管理者にご連絡ください。';
$string['invalidexpiredregistrationurl'] = '登録URLが無効か期限切れです。URLをチェックして再度お試しください。';
$string['invalidrequest'] = '無効なリクエスト';
$string['invalidtoolconsumer'] = '無効なツールコンシューマです。';
$string['jwksurl'] = 'JWKS URL';
$string['launchdetails'] = '起動詳細';
$string['launchdetails_help'] = 'ツールを設定するにはカートリッジURL (設定URLとも呼ばれます) および秘密鍵または起動URLが必要です。';
$string['launchurl'] = '起動URL';
$string['loginurl'] = 'ログイン開始URL';
$string['lti13'] = 'LTI Advantage';
$string['lti13launchdetails'] = '起動詳細';
$string['lti13launchdetails_help'] = '起動URLおよびカスタムプロパティはプラットフォームでリソースリンクを手動設定する場合にのみ必要です。可能であれば、教師はリソースリンク作成にコンテンツ選択 (ディープリンク) プロセスを優先させるべきです。';
$string['lti:config'] = '「LTIツールとして公開する」インスタンスを設定する';
$string['lti:unenrol'] = 'コースからユーザを登録解除する';
$string['ltiadvdynregerror:invalidopenidconfigjson'] = 'プラットフォームからのOpenID設定取得時に問題が発生しました。結果は有効なJSONではありませんでした。これはブロックされたホスト設定により発生する可能性もあります。サイトがプラットフォームのドメインに接続するよう構成されていることを確認して新しい登録URLで再度お試しください。';
$string['ltiadvlauncherror:invaliddeployment'] = '起動データまたはツール設定が無効です。デプロイメントが見つかりませんでした (デプロイメントID: {$a})。';
$string['ltiadvlauncherror:invalidid'] = '起動データが無効です。リソース「 {$a} 」は利用できないか存在しません。';
$string['ltiadvlauncherror:invalidregistration'] = '起動データまたはツール設定が無効です。プラットフォーム登録が見つかりませんでした (イシュア: {$a->platform}, クライアントID: {$a->clientid})。';
$string['ltiadvlauncherror:missingid'] = '起動データが無効です。LTI Advantageで活動またはリソースを起動するにはカスタム要求フィールド「id」が必要です。';
$string['ltilegacy'] = 'レガシLTI (1.1/2.0)';
$string['ltilegacydeprecatednotice'] = 'レガシLTI (1.1/2.0) ツールは非推奨です。コンテンツはLTI Advantageを使用して共有する必要があります。';
$string['ltiversion'] = 'LTIバージョン';
$string['ltiversion_help'] = '公開されたコンテンツにアクセスするため使用されるLTIのバージョンです。

LTI Advantageは事前に登録したプラットフォームにコンテンツを公開できます。新しいコンテンツが公開されるたびにプラットフォーム上で変更する必要はありません。セキュリティ契約はプラットフォームとツールの間で結ばれます。

レガシバージョン (1.1および2.0) では新たに公開されるコンテンツごとにコンシューマに新しいツール登録を作成する必要があります。これは公開されるコンテンツごとにコンシューマサイトと独自のセキュリティ契約を結んでケースバイケースで設定しなければならないためです。';
$string['managedeployments'] = 'デプロイメントを管理する';
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
$string['moodle'] = 'Moodle';
$string['nodeployments'] = 'ツールデプロイメントは見つかりませんでした。';
$string['nopublishedcontent'] = 'まだリソースまたは活動は公開されていません。';
$string['noregisteredplatforms'] = '登録済みプラットフォームはありません。';
$string['notoolsprovided'] = '提供ツールなし';
$string['opensslconfiginvalid'] = 'LTI 1.3ではあなたのウェブサーバに有効なopenssl.cnfの設定および利用可能であることが必要です。このサイトのopensslを設定して利用可能にするにはサイト管理者にご連絡ください。';
$string['opentool'] = 'ツールを開く';
$string['platformdetails'] = 'プラットフォーム詳細';
$string['platformdetailsinfo'] = 'プラットフォームにツールをセットアップした後、プラットフォームからの詳細をここに記録して登録を完了する必要があります。
<ul>
</li>動的登録の場合、この情報は自動的に設定されるため、それ以上の変更は必要ありません。</li>
<li>手動登録の場合、この情報はプラットフォームから手動コピーする必要があります。</li>
</ul>';
$string['pluginname'] = 'LTIツールとして公開する';
$string['pluginname_desc'] = '選択されたコースおよび活動に対してLTI認証プラグインと共にリモートユーザにアクセスを許可する「LTIツールとして公開する」プラグインです。言い換えれば、MoodleがLTIツールプロバイダとして機能すると言えます。';
$string['privacy:metadata:enrol_lti_users'] = 'LTIプロバイダ経由で登録されたユーザの一覧です。';
$string['privacy:metadata:enrol_lti_users:lastaccess'] = 'ユーザが最後にコースにアクセスした日時です。';
$string['privacy:metadata:enrol_lti_users:lastgrade'] = 'ユーザに記録された最終評点です。';
$string['privacy:metadata:enrol_lti_users:timecreated'] = 'ユーザが登録された日時です。';
$string['privacy:metadata:enrol_lti_users:userid'] = 'ユーザのIDです。';
$string['provisioningmode'] = 'プロビジョニングモード';
$string['provisioningmode_help'] = 'この設定では初回起動時のアカウントの扱いを決定します。いくつかのモードがサポートされます:
<ul>
<li>新しいアカウントのみ (自動) - プラットフォームから起動するユーザのアカウントは自動的に作成されます。これは学生起動のデフォルトです。</li>
<li>既存のアカウントおよび新しいアカウント (プロンプト) - ユーザには何をするか選択肢が与えられます。既存のアカウントをリンクさせるか、新しいアカウントを作成するか決定できます。これは最も柔軟なオプションであり、教師起動のデフォルトです。</li>
<li>既存のアカウントのみ (プロンプト) - ユーザは既存のアカウントをリンクするよう求められます。リンクしない場合、ツールリソースにアクセスできません。</li>
</ul>';
$string['provisioningmodestudentlaunch'] = '学生初回起動プロビジョニングモード';
$string['provisioningmodeteacherlaunch'] = '教師初回起動プロビジョニングモード';
$string['publishedcontent'] = '公開済みコンテンツ';
$string['publishedcontent_help'] = '公開されたリソースまたは活動はコンテンツ選択 (ディープリンク) フローを通じて登録されたプラットフォームで利用できます。さらに、リソースリンクは起動URLおよび提供されるカスタムプロパティを使用してプラットフォームで手動作成できます。';
$string['registeredplatforms'] = '登録済みプラットフォーム';
$string['registeredplatformsltiversionnotice'] = '以下のプラットフォームはLTI 1.3通信に登録されています。それ以前のバージョンではコンシューマ登録は必要ありません。';
$string['registerplatform:accesstokenurl'] = 'アクセストークンURL';
$string['registerplatform:accesstokenurl_help'] = 'ツールがアクセストークンリクエストを送信するためのURLです。プラットフォームから提供されます。';
$string['registerplatform:authrequesturl'] = '認証リクエストURL';
$string['registerplatform:authrequesturl_help'] = 'ツールがOpenID Connectリクエストを送信するためのURLです。プラットフォームから提供されます。';
$string['registerplatform:clientid'] = 'クライアントID';
$string['registerplatform:clientid_help'] = 'プラットフォーム上でのツール登録の識別に使用される文字列です。プラットフォームから提供されます。';
$string['registerplatform:duplicateregistrationerror'] = 'クライアントIDが無効です。このクライアントIDはすでに提供されたプラットフォームIDに登録されています。';
$string['registerplatform:invalidurlerror'] = '無効なURLです。http://またはhttps://が含まれていますか?';
$string['registerplatform:jwksurl'] = '公開鍵セットURL';
$string['registerplatform:jwksurl_help'] = 'プラットフォームの公開鍵を取得するために使用する公開鍵セットまたはJWKSのURLです。プラットフォームから提供されます。';
$string['registerplatform:name'] = 'プラットフォーム名';
$string['registerplatform:name_help'] = 'プラットフォームを説明する短い名称です。これはいつでも変更できます。';
$string['registerplatform:platformid'] = 'プラットフォームID (イシュア)';
$string['registerplatform:platformid_help'] = 'サードパーティ学習プラットフォームを識別するためのURLです。プラットフォームから提供されます。';
$string['registerplatformadd'] = 'プラットフォームを登録する';
$string['registerplatformaddnotice'] = 'プラットフォーム登録が追加されました。';
$string['registerplatformdelete'] = 'プラットフォーム登録を削除する';
$string['registerplatformdeleteconfirm'] = '本当にプラットフォーム「 {$a} 」の登録を削除してもよろしいですか? この登録に対して保存されたすべてのツールデプロイメントも削除します。';
$string['registerplatformdeletenotice'] = 'プラットフォーム登録が削除されました。';
$string['registerplatformedit'] = '登録を編集する';
$string['registerplatformeditnotice'] = 'プラットフォーム登録が更新されました。';
$string['registration'] = 'ツール登録公開';
$string['registrationdeeplinklabel'] = '{$a} からコンテンツを追加する';
$string['registrationdynamic'] = 'ダイナミック登録';
$string['registrationmanual'] = '手動登録';
$string['registrationresourcelinklabel'] = '{$a} からコンテンツを起動する';
$string['registrationstatus'] = 'ステータス';
$string['registrationstatusactive'] = 'アクティブ';
$string['registrationstatuspending'] = '保留';
$string['registrationurl'] = '登録URL';
$string['registrationurl_help'] = '登録URL (プロキシURLとも呼ばれます) が使用された場合、ツールは自動的に設定されます。';
$string['registrationurlinfomessage'] = 'プラットフォームが動的登録をサポートしている場合、以下の登録URLを使用してください。動的登録の詳細情報に関して<a href="{$a}">LTIツールとして公開する</a>ドキュメンテーションをご覧ください。';
$string['remotesystem'] = 'リモートシステム';
$string['requirecompletion'] = '評定同期前にコースまたは活動の完了を必要とする';
$string['returnurlnotset'] = '戻り先URLが設定されていません。';
$string['roleinstructor'] = '教師ロール';
$string['roleinstructor_help'] = 'リモート教師にツール内で割り当てられるロールです。';
$string['rolelearner'] = '学生ロール';
$string['rolelearner_help'] = 'リモート学生にツール内で割り当てられるロールです。';
$string['secret'] = '秘密鍵';
$string['secret_help'] = 'ツールへのアクセスを許可するためにリモートシステム (LTIコンシューマ) と同期するための文字列です。';
$string['sharedexternaltools'] = 'LTIツールとしての公開';
$string['successfulregistration'] = '登録成功';
$string['tasksyncgrades'] = 'LTIツールとして公開する評定同期';
$string['tasksyncmembers'] = 'LTIツールとして公開するユーザ同期';
$string['tooldetails'] = 'ツール詳細';
$string['toolsprovided'] = '公開ツール';
$string['toolsprovided_help'] = '起動URLまたは登録URLを提供することにより別のサイトとツールを共有することができます。';
$string['tooltobeprovided'] = '公開されるツール';
$string['toolurl'] = 'ツールURL';
$string['userdefaultvalues'] = 'ユーザデフォルト値';
$string['viewplatformdetails'] = 'プラットフォーム詳細を表示する';
$string['viewtoolendpoints'] = 'ツールエンドポイントを表示する';
