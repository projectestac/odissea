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
 * Strings for component 'tool_oauth2', language 'ja', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_oauth2
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['authconfirm'] = 'この操作は認証済みアカウントにMoodleへの永続的APIアクセス権を与えます。これはMooldleにより所有されているファイルをシステムアカウントが管理するための使用を目的としています。';
$string['authconnected'] = 'システムアカウントはオフラインアクセスに接続されています。';
$string['authnotconnected'] = 'システムアカウントはオフラインアクセスに接続されていません。';
$string['configured'] = '設定済み';
$string['configuredstatus'] = '設定済み';
$string['connectsystemaccount'] = 'システムアカウントに接続する';
$string['createfromtemplate'] = 'テンプレートからOAuth 2サービスを作成する';
$string['createfromtemplatedesc'] = '既知のサービスタイプの1つが有効に設定されたOAuthサービスを作成するため、以下のOAuth 2サービスの1つを選択してください。これにより認証に要求される正しいエンドポイントおよびパラメータすべてが設定されたOAuth 2サービスが作成されます。あなたが新しいサービスを使用するためにはクライアントIDおよび秘密鍵を入力する必要があります。';
$string['createnewendpoint'] = '発行者「 {$a} 」の新しいエンドポイントを作成する';
$string['createnewfacebookissuer'] = '新しいFacebookサービスを作成する';
$string['createnewgoogleissuer'] = '新しいGoogleサービスを作成する';
$string['createnewissuer'] = '新しいカスタムサービスを作成する';
$string['createnewmicrosoftissuer'] = '新しいMicrosoftサービスを作成する';
$string['createnewnextcloudissuer'] = '新しいNextcloudサービスを作成する';
$string['createnewuserfieldmapping'] = '発行者「 {$a} 」の新しいユーザフィールドマッピングを作成する';
$string['deleteconfirm'] = '本当にアイデンティティ発行者「 {$a} 」を削除してもよろしいですか? この発行者に関わるすべてのプラグインは動作しなくなります。';
$string['deleteendpointconfirm'] = '本当に発行者「 {$a->issuer} 」のエンドポイント「 {$a->endpoint} 」を削除してもよろしいですか? このエンドポイントに関わるすべてのプラグインは動作しなくなります。';
$string['deleteuserfieldmappingconfirm'] = '本当に発行者「 $a} 」のユーザフィールドマッピングを削除してもよろしいですか?';
$string['discovered'] = 'サービスディスカバリ成功';
$string['discovered_help'] = 'ディスカバリはOAuth2エンドポイントをOAuthサービスのベースURLから自動的に決定できることを意味します。すべてのサービスが「発見」される必要はありませんが、サービスがない場合、エンドポイントおよびユーザマッピング情報を手動入力する必要があります。';
$string['discoverystatus'] = 'ディスカバリ';
$string['editendpoint'] = 'エンドポイントを編集する: 発行者 {$a->issuer} の {$a->endpoint}';
$string['editendpoints'] = 'エンドポイントを設定する';
$string['editissuer'] = 'アイデンティティ発行者を編集する: {$a}';
$string['edituserfieldmapping'] = '発行者 {$a} のユーザフィールドマッピングを編集する';
$string['edituserfieldmappings'] = 'ユーザフィールドマッピングを設定する';
$string['endpointdeleted'] = 'エンドポイントが削除されました。';
$string['endpointname'] = '名称';
$string['endpointname_help'] = 'このエンドポイントを探すために使用されるキーです。「_endpoint」で終わる必要があります。';
$string['endpointsforissuer'] = '発行者のエンドポイント: {$a}';
$string['endpointurl'] = 'URL';
$string['endpointurl_help'] = 'このエンドポイントのURLです。「https://」プロトコルを使用する必要があります。';
$string['issueralloweddomains'] = 'ログインドメイン';
$string['issueralloweddomains_help'] = '入力する場合、この設定はこのプロバイダを使用してログインする場合に制限されるカンマ区切りのドメイン一覧です。';
$string['issuerbaseurl'] = 'サービスベースURL';
$string['issuerbaseurl_help'] = 'サービスへのアクセスに使用されるベースURLです。';
$string['issuerclientid'] = 'クライアントID';
$string['issuerclientid_help'] = 'この発行者のOAuthクライアントIDです。';
$string['issuerclientsecret'] = 'クライアント秘密鍵';
$string['issuerclientsecret_help'] = 'この発行者のOAuthクライアント秘密鍵です。';
$string['issuerdeleted'] = 'アイデンティティ発行者が削除されました。';
$string['issuerdisabled'] = 'アイデンティティ発行者が無効にされました。';
$string['issuerenabled'] = 'アイデンティティ発行者が有効にされました。';
$string['issuerimage'] = 'ロゴURL';
$string['issuerimage_help'] = 'この発行者に表示するため使用されるイメージURLです。ログインページに表示することができます。';
$string['issuerloginparams'] = 'ログインリクエストに含まれる追加パラメータです。';
$string['issuerloginparams_help'] = 'いくつかのシステムではユーザ基本プロファイルを読むためログインリクエストに追加パラメータを必要とします。';
$string['issuerloginparamsoffline'] = 'オフラインアクセスのログインリクエストに含まれる追加パラメータです。';
$string['issuerloginparamsoffline_help'] = 'それぞれのOAuthでは異なるオフラインアクセスのリクエスト方法が定義されています。例) Googleでは追加パラメータが必要です: 「access_type=offline&prompt=consent」。これらのパラメータはURLクエリパラメータ形式にする必要があります。';
$string['issuerloginscopes'] = 'ログインリクエストに含まれるスコープです。';
$string['issuerloginscopes_help'] = 'いくつかのシステムではユーザ基本プロファイルを読むためログインリクエストに追加スコープを必要とします。OpenID接続準拠システムの標準スコープは「openid profile email」です。';
$string['issuerloginscopesoffline'] = 'オフラインアクセスのログインリクエストに含まれるスコープです。';
$string['issuerloginscopesoffline_help'] = 'それぞれのOAuthシステムでは異なるオフラインアクセスのリクエスト方法が定義されています。例) Microsoftでは追加スコープ「offline_access」が必要です。';
$string['issuername'] = '名称';
$string['issuername_help'] = 'アイデンティティ発行者名です。ログインページに表示することができます。';
$string['issuerrequireconfirmation'] = 'メール確認を必要とする';
$string['issuerrequireconfirmation_help'] = 'OAuthでログインする前にすべてのユーザにメールアドレスの確認を要求します。これは新しく作成されるアカウントにはログイン処理の一部として、既存のMoodleアカウントには合致するメールアドレスによるOAuthログインへの連携に適用されます。';
$string['issuers'] = '発行者';
$string['issuersetup'] = '一般的なOAuth 2サービス設定に関する詳細インストラクション';
$string['issuersetuptype'] = '{$a} OAuth 2プロバイダ設定に関する詳細インストラクション';
$string['issuershowonloginpage'] = 'ログインページに表示する';
$string['issuershowonloginpage_help'] = 'OAuth 2認証プラグインが有効にされた場合、この発行者のアカウントでユーザがログインできるようログインページにこのログイン発行者が表示されます。';
$string['loginissuer'] = 'ログイン許可';
$string['notconfigured'] = '未設定';
$string['notdiscovered'] = 'サービスディスカバリ不成功';
$string['notloginissuer'] = 'ログインを許可しない';
$string['pluginname'] = 'OAuth 2サービス';
$string['privacy:metadata'] = 'OAuth 2サービスプラグインはいかなる個人データも保存しません。';
$string['savechanges'] = '変更を保存する';
$string['serviceshelp'] = 'サービスプロバイダのセットアップインストラクションです。';
$string['systemaccountconnected'] = 'システムアカウント接続済み';
$string['systemaccountconnected_help'] = 'システムアカウントはプラグインに高度な機能を提供するため使用されます。ログイン機能にのみ必要であるだけではなく、システムアカウントが接続していない場合にOAuthサービスを利用している他のプラグインに縮小した形で機能を提供するためにも必要です。例えばリポジトリはシステムアカウントによるファイル処理なしに「コントロールリンク」をサポートすることはできません。';
$string['systemaccountnotconnected'] = 'システムアカウント未接続';
$string['systemauthstatus'] = 'システムアカウント接続済み';
$string['usebasicauth'] = 'トークンリクエストをHTTPヘッダ経由で認証する';
$string['usebasicauth_help'] = 'リフレッシュトークンリクエストでクライアントIDおよびパスワードを送信する場合、HTTP基本認証スキームを使用します。OAuth 2標準では推奨されていますが、利用できない発行者もあります。';
$string['userfieldexternalfield'] = '外部フィールド名';
$string['userfieldexternalfield_error'] = 'このフィールドにはHTMLを含むことはできません。';
$string['userfieldexternalfield_help'] = '外部OAuthシステムから提供されるフィールド名です。';
$string['userfieldinternalfield'] = '内部フィールド名';
$string['userfieldinternalfield_help'] = '外部フィールドからマッピングするMoodleのユーザフィールド名です。';
$string['userfieldmappingdeleted'] = 'ユーザフィールドマッピングが削除されました。';
$string['userfieldmappingsforissuer'] = '発行者のユーザフィールドマッピング: {$a}';
