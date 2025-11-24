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
 * Strings for component 'tool_oauth2', language 'ja', version '4.5'.
 *
 * @package     tool_oauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptrisk'] = '私はメール認証無効化によるセキュリティ上の問題を理解しています。';
$string['acceptrisk_help'] = 'メール認証を無効にした場合、ユーザが別のユーザとして認証される可能性があります。';
$string['authconfirm'] = 'この操作は認証済みアカウントにMoodleへの永続的APIアクセス権を与えます。これはMooldleにより所有されているファイルをシステムアカウントが管理するための使用を目的としています。';
$string['authconnected'] = 'システムアカウントはオフラインアクセスに接続されています。';
$string['authnotconnected'] = 'システムアカウントはオフラインアクセスに接続されていません。';
$string['clever_service'] = 'Clever';
$string['configured'] = '設定済み';
$string['configuredstatus'] = '設定済み';
$string['connectsystemaccount'] = 'システムアカウントに接続する';
$string['createfromtemplate'] = 'テンプレートからOAuth 2サービスを作成する';
$string['createfromtemplatedesc'] = '既知のサービスタイプの1つが有効に設定されたOAuthサービスを作成するため、以下のOAuth 2サービスの1つを選択してください。これで認証に要求される正しいエンドポイントおよびパラメータすべてが設定されたOAuth 2サービスが作成されます。あなたが新しいサービスを使用するためにはクライアントIDおよび秘密鍵を入力する必要があります。';
$string['createnewendpoint'] = 'イシュア「 {$a} 」の新しいエンドポイントを作成する';
$string['createnewservice'] = '新しいサービスを作成する:';
$string['createnewuserfieldmapping'] = 'イシュア「 {$a} 」の新しいユーザフィールドマッピングを作成する';
$string['custom_service'] = 'カスタム';
$string['deleteconfirm'] = '本当にアイデンティティイシュア「 {$a} 」を削除してもよろしいですか? このイシュアに関わるすべてのプラグインは動作しなくなります。';
$string['deleteendpointconfirm'] = '本当にイシュア「 {$a->issuer} 」のエンドポイント「 {$a->endpoint} 」を削除してもよろしいですか? このエンドポイントに関わるすべてのプラグインは動作しなくなります。';
$string['deleteuserfieldmappingconfirm'] = '本当にイシュア「 $a} 」のユーザフィールドマッピングを削除してもよろしいですか?';
$string['discovered'] = 'サービスディスカバリ成功';
$string['discovered_help'] = 'ディスカバリはOAuth2エンドポイントをOAuthサービスのベースURLから自動的に決定できることを意味します。すべてのサービスが「発見」される必要はありませんが、サービスがない場合、エンドポイントおよびユーザマッピング情報を手動入力する必要があります。';
$string['discoverystatus'] = 'ディスカバリ';
$string['editendpoint'] = 'エンドポイントを編集する: イシュア{$a->issuer} の {$a->endpoint}';
$string['editendpoints'] = 'エンドポイントを設定する';
$string['editissuer'] = 'アイデンティティイシュアを編集する: {$a}';
$string['edituserfieldmapping'] = 'イシュア{$a} のユーザフィールドマッピングを編集する';
$string['edituserfieldmappings'] = 'ユーザフィールドマッピングを設定する';
$string['endpointdeleted'] = 'エンドポイントが削除されました。';
$string['endpointname'] = '名称';
$string['endpointname_help'] = 'このエンドポイントを探すために使用されるキーです。「_endpoint」で終わる必要があります。';
$string['endpointsforissuer'] = 'イシュアのエンドポイント: {$a}';
$string['endpointurl'] = 'URL';
$string['endpointurl_help'] = 'このエンドポイントのURLです。「https://」プロトコルを使用する必要があります。';
$string['facebook_service'] = 'Facebook';
$string['google_service'] = 'Google';
$string['imsobv2p1_service'] = 'Open Badges';
$string['issueralloweddomains'] = 'ログインドメイン';
$string['issueralloweddomains_help'] = '入力する場合、この設定はこのプロバイダを使用してログインする場合に制限されるカンマ区切りのドメイン一覧です。';
$string['issueralloweddomains_link'] = 'OAuth_2_login_domains';
$string['issuerbaseurl'] = 'サービスベースURL';
$string['issuerbaseurl_help'] = 'サービスへのアクセスに使用されるベースURLです。';
$string['issuerclientid'] = 'クライアントID';
$string['issuerclientid_help'] = 'このイシュアのOAuthクライアントIDです。';
$string['issuerclientsecret'] = 'クライアント秘密鍵';
$string['issuerclientsecret_help'] = 'このイシュアのOAuthクライアント秘密鍵です。';
$string['issuerdeleted'] = 'アイデンティティイシュアが削除されました。';
$string['issuerdisabled'] = 'アイデンティティイシュアが無効にされました。';
$string['issuerenabled'] = 'アイデンティティイシュアが有効にされました。';
$string['issuerimage'] = 'ロゴURL';
$string['issuerimage_help'] = 'このイシュアに表示するため使用されるイメージURLです。ログインページに表示することができます。';
$string['issuerloginpagename'] = 'ログインページの表示名';
$string['issuerloginpagename_help'] = '指定された場合、この名称がサービス名の代わりにログインページで使用されます。';
$string['issuerloginparams'] = 'ログインリクエストに含まれる追加パラメータ';
$string['issuerloginparams_help'] = 'いくつかのシステムではユーザ基本プロファイルを読むためログインリクエストに追加パラメータを必要とします。';
$string['issuerloginparamsoffline'] = 'オフラインアクセスのログインリクエストに含まれる追加パラメータ';
$string['issuerloginparamsoffline_help'] = 'それぞれのOAuthでは異なるオフラインアクセスのリクエスト方法が定義されています。例) Googleでは追加パラメータが必要です: 「access_type=offline&prompt=consent」。これらのパラメータはURLクエリパラメータ形式にする必要があります。';
$string['issuerloginscopes'] = 'ログインリクエストに含まれるスコープ';
$string['issuerloginscopes_help'] = 'いくつかのシステムではユーザ基本プロファイルを読むためログインリクエストに追加スコープを必要とします。OpenID接続準拠システムの標準スコープは「openid profile email」です。';
$string['issuerloginscopesoffline'] = 'オフラインアクセスのログインリクエストに含まれるスコープ';
$string['issuerloginscopesoffline_help'] = 'それぞれのOAuthシステムでは異なるオフラインアクセスのリクエスト方法が定義されています。例) Microsoftでは追加スコープ「offline_access」が必要です。';
$string['issuername'] = '名称';
$string['issuername_help'] = 'アイデンティティイシュア名です。ログインページに表示することができます。';
$string['issuerrequireconfirmation'] = 'メール確認を必要とする';
$string['issuerrequireconfirmation_help'] = 'OAuthでログインする前にすべてのユーザにメールアドレスの確認を要求します。これは新しく作成されるアカウントにはログイン処理の一部として、既存のMoodleアカウントには合致するメールアドレスによるOAuthログインへの連携に適用されます。';
$string['issuers'] = 'イシュア';
$string['issuersetup'] = '一般的なOAuth 2サービス設定に関する詳細インストラクション';
$string['issuersetuptype'] = '{$a} OAuth 2プロバイダ設定に関する詳細インストラクション';
$string['issuershowonloginpage'] = 'ログインページに表示する';
$string['issuershowonloginpage_help'] = 'OAuth 2認証プラグインが有効にされた場合、このイシュアのアカウントでユーザがログインできるようログインページにこのログインイシュアが表示されます。';
$string['issuersmtpsystememail'] = 'SMTPメール';
$string['issuersmtpsystememail_help'] = '指定した場合、このメールアドレスはSMTP経由でメールを送信するためのシステムアカウントの接続に使用されます。これは一部のOAuth 2サービス (例: Microsoft) で必要です。この設定が必須かどうか、あなたのOAuth 2サービスのドキュメントを確してください。';
$string['issuersservicesallow'] = 'サービスを許可する';
$string['issuersservicesnotallow'] = 'サービスを許可しない';
$string['issuerusedforinternal'] = '内部サービス';
$string['issuerusedforlogin'] = 'ログイン';
$string['issuerusein'] = 'このサービスが使用される場所';
$string['issuerusein_help'] = 'OAuth 2 サービスは内部サービス、ログインページ、XOAUTH2のSMTP、または必要に応じてログインページおよび内部サービスの両方に使用できます。';
$string['issueruseineverywhere'] = 'ログインページおよび内部サービス';
$string['issueruseininternalonly'] = '内部サービスのみ';
$string['issueruseinloginonly'] = 'ログインページのみ';
$string['issueruseinsmtpwithoauth'] = 'XOAUTH2のみのSMTP';
$string['linkedin_service'] = 'LinkedIn';
$string['logindisplay'] = '以下のログインページに表示する';
$string['loginissuer'] = 'ログイン許可';
$string['microsoft_service'] = 'Microsoft';
$string['moodlenet_service'] = 'MoodleNet';
$string['nextcloud_service'] = 'Nextcloud';
$string['notconfigured'] = '未設定';
$string['notdiscovered'] = 'サービスディスカバリ不成功';
$string['notloginissuer'] = 'ログインを許可しない';
$string['pluginname'] = 'OAuth 2サービス';
$string['privacy:metadata'] = 'OAuth 2サービスプラグインはいかなる個人データも保存しません。';
$string['savechanges'] = '変更を保存する';
$string['serviceshelp'] = 'サービスプロバイダのセットアップインストラクション';
$string['systemaccountconnected'] = 'システムアカウント接続済み';
$string['systemaccountconnected_help'] = 'システムアカウントはプラグインに高度な機能を提供するため使用されます。ログイン機能にのみ必要であるだけではなく、システムアカウントが接続していない場合にOAuthサービスを利用している他のプラグインに縮小した形で機能を提供するためにも必要です。例えばリポジトリはシステムアカウントによるファイル処理なしに「コントロールリンク」をサポートすることはできません。';
$string['systemaccountnotconnected'] = 'システムアカウント未接続';
$string['systemauthstatus'] = 'システムアカウント接続済み';
$string['usebasicauth'] = 'トークンリクエストをHTTPヘッダ経由で認証する';
$string['usebasicauth_help'] = 'リフレッシュトークンリクエストでクライアントIDおよびパスワードを送信する場合、HTTP基本認証スキームを使用します。OAuth 2標準では推奨されていますが、利用できないイシュアもあります。';
$string['userfieldexternalfield'] = '外部フィールド名';
$string['userfieldexternalfield_error'] = 'このフィールドにはHTMLを含むことはできません。';
$string['userfieldexternalfield_help'] = '外部OAuthシステムから提供されるフィールド名です。';
$string['userfieldinternalfield'] = '内部フィールド名';
$string['userfieldinternalfield_help'] = '外部フィールドからマッピングするMoodleのユーザフィールド名です。';
$string['userfieldmappingdeleted'] = 'ユーザフィールドマッピングが削除されました。';
$string['userfieldmappingsforissuer'] = 'イシュアのユーザフィールドマッピング: {$a}';
