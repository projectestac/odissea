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
 * Strings for component 'auth_shibboleth', language 'ja', branch 'MOODLE_38_STABLE'
 *
 * @package   auth_shibboleth
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_shib_auth_logo'] = '認証方法ロゴ';
$string['auth_shib_auth_logo_description'] = 'あなたのユーザになじみのあるShibboleth認証方法のロゴを提供してください。これはあなたのShibboleth認証連携のロゴにすることができます。例) 「SWITCHaaiログイン」または「InCommonログイン」または類似のもの。';
$string['auth_shib_auth_method'] = '認証方法名';
$string['auth_shib_auth_method_description'] = 'あなたのユーザになじみのあるShibboleth認証方法の名称を提供してください。あなたのシボレスフェデレーションの名称を使用することもできます 例) <tt>SWITCHaai Login</tt>または<tt>InCommon Login</tt>または同様の名称。';
$string['auth_shibbolethdescription'] = 'この方法を使用することにより、Shibbolethを使用してユーザが作成および認証されます。詳細は<a href="{$a}">Shibboleth README</a>をご覧ください。';
$string['auth_shibboleth_errormsg'] = 'あなたがメンバーになっている組織を選択してください!';
$string['auth_shibboleth_login'] = 'Shibbolethログイン';
$string['auth_shibboleth_login_long'] = 'Shibboleth経由でMoodleにログインする';
$string['auth_shibboleth_manual_login'] = '手動ログイン';
$string['auth_shibboleth_select_member'] = '私は ...';
$string['auth_shibboleth_select_organization'] = 'Shibboleth経由の認証のため、あなたの組織をドロップダウンメニューから選択してください。';
$string['auth_shib_changepasswordurl'] = 'パスワード変更URL';
$string['auth_shib_contact_administrator'] = 'あなたが組織との関係がなく、このサーバのコースにアクセスする必要がある場合、<a href="mailto:{$a}">Moodle管理者</a>にご連絡ください。';
$string['auth_shib_convert_data'] = 'データ修正API';
$string['auth_shib_convert_data_description'] = 'あなたがShibbolethから提供されるデータを修正したい場合、このAPIを使用できます。詳細は<a href="{$a}">README</a>をご覧ください。';
$string['auth_shib_convert_data_warning'] = 'ファイルが存在しないかウェブサーバプロセスで読み取れません!';
$string['auth_shib_idp_list'] = 'アイデンティティプロバイダ';
$string['auth_shib_idp_list_description'] = 'ログインページでユーザが選択できるようアイデンティティプロバイダのエンティティIDリストを入力してください。<br />それぞれの行ではアイデンティティプロバイダのエンティティIDにカンマ区切りのタプル (tuple) を追加してください (詳細はShibbolethメタデータファイルをご覧ください)。アイデンティティプロバイダ名がドロップダウンリストに表示されます。<br />あなたのMoodleが複数フェデレーション設定の一部にある場合、任意の第3パラメータとしてShibbolethセッションイニシエータのロケーションを追加することができます。';
$string['auth_shib_instructions'] = 'あなたの機関がShibbolethをサポートしている場合、Shibboleth経由のアクセスには<a href="{$a}">Shibbolethログイン</a>を使用してください。Shibbolethをサポートしていない場合、ここに表示される通常ログインを使用してください。';
$string['auth_shib_instructions_help'] = 'Shibbolethに関してあなたのユーザに提示する説明文です。 これはログインページの説明セクションに表示されます。Shibbolethユーザが簡単にログインできるよう「<b>{$a}</b>」へのリンクを含んでください。';
$string['auth_shib_instructions_key'] = 'ログインインストラクション';
$string['auth_shib_integrated_wayf'] = 'Moodle WAYFサービス';
$string['auth_shib_integrated_wayf_description'] = 'この設定を有効にした場合、Shibbolethで設定されたWAYFサービスを使用するのではなく、Moodleは独自のWAYFサービスを使用します。この代替ログインページのため、Moodleはユーザがアイデンティティプロバイダを選択できるドロップダウンリストを表示します。';
$string['auth_shib_logout_return_url'] = '代替ログアウト戻りURL';
$string['auth_shib_logout_return_url_description'] = 'ログアウト後、ShibbolethユーザがリダイレクトされるURLを入力してください。<br />空にした場合、ユーザはMoodleがリダイレクトする場所にリダイレクトされます。';
$string['auth_shib_logout_url'] = 'ShibbolethサービスプロバイダのログアウトハンドラURL';
$string['auth_shib_logout_url_description'] = 'ShibbolethサービスプロバイダのログアウトハンドラのURLを入力してください。一般的に<tt>/Shibboleth.sso/Logout</tt>のようになります。';
$string['auth_shib_no_organizations_warning'] = 'あなたが統合WAYFサービスを利用したい場合、カンマで区切ったアイデンティティプロバイダのエンティティID、名称およびセッションイニシエータのリストを入力してください。';
$string['auth_shib_only'] = 'Shibbolethのみ';
$string['auth_shib_only_description'] = 'Shibboleth認証を強制する場合、このオプションをチェックしてください。';
$string['auth_shib_username_description'] = 'Moodleユーザ名として使用されるShibbolethウェブサーバ環境のユーザ名';
$string['pluginname'] = 'Shibboleth';
$string['privacy:metadata'] = 'Shibboleth認証プラグインはいかなる個人データも保存しません。';
$string['shib_invalid_account_error'] = 'あなたは正常にShibboleth認証できたようですがあなたの有効なユーザ名がMoodleにはありません。あなたのアカウントは存在しないか利用停止にされている可能性があります。';
$string['shib_no_attributes_error'] = 'あなたはShibbolethによりユーザ認証したようですが、Moodleはユーザ属性を受信していません。Moodleが稼動しているサービスプロバイダに対して必要な属性 ({$a}) をアイデンティティプロバイダが発行しているか確認またはこのサーバの管理者にご連絡ください。';
$string['shib_not_all_attributes_error'] = 'あなたの場合、存在していないShibboleth属性をMoodleが必要としているようです。属性は次のとおりです: {$a}<br />このサーバの管理者またはアイデンティティプロバイダにご連絡ください。';
$string['shib_not_set_up_error'] = 'Shibboleth環境変数がこのページに存在していないため、Shibboleth認証が正しく設定されていないようです。Shibboleth認証の設定に関するさらなるインストラクションは<a href="{$a}">README</a>を参照またはこのMoodleをインストールした管理者にご連絡ください。';
