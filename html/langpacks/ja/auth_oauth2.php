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
 * Strings for component 'auth_oauth2', language 'ja', version '3.8'.
 *
 * @package     auth_oauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountexists'] = 'このユーザ名のユーザはこのシステムにすでに存在します。これがあなたのアカウントの場合、あなたのユーザ名およびパスワードを使用してログインした後、プリファレンスページからリンクログインとして追加してください。';
$string['alreadylinked'] = 'この外部アカウントはすでにこのサイトのアカウントとリンクされています。';
$string['auth_oauth2description'] = 'OAuth 2標準ベース認証';
$string['auth_oauth2settings'] = 'OAuth 2認証設定';
$string['confirmaccountemail'] = '{$a->fullname} さん

あなたのメールアドレスを使用して「 {$a->sitename} 」の新しいアカウントがリクエストされました。

あなたの新しいアカウントを確認するにはこのウェブアドレスにアクセスしてください:

{$a->link}

ほとんどのメールプログラムではあなたがクリックできる青いリンクとして表示されているはずです。クリックできない場合、あなたのウェブブラウザウィンドウのアドレス欄にアドレスをコピー＆ペーストしてください。

分からない場合、サイト管理者 ( {$a->admin}) にご連絡ください。

あなたがこれを完了しない場合、他の誰かがあなたのアカウントの情報取得を試みる場合があります。すぐにサイト管理者にご連絡ください。';
$string['confirmaccountemailsubject'] = '{$a}: アカウント確認';
$string['confirmationinvalid'] = '確認リンクが無効または有効期限が切れています。新しい確認メールを生成するため再度ログイン処理を開始してください。';
$string['confirmationpending'] = 'このアカウントはメール確認保留中です。';
$string['confirmlinkedloginemail'] = '{$a->fullname} さん

あなたのメールアドレスを使用して「 {$a->sitename} 」のアカウントに {$a->linkedemail} ログインするよう {$a->issuername} へのリンクがリクエストされました。

このリクエストおよびログインへのリンクを確認するにはこのウェブアドレスにアクセスしてください:

{$a->link}

ほとんどのメールプログラムではあなたがクリックできる青いリンクとして表示されているはずです。クリックできない場合、あなたのウェブブラウザウィンドウのアドレス欄にアドレスをコピー＆ペーストしてください。

分からない場合、サイト管理者 ( {$a->admin}) にご連絡ください。

あなたがこれを完了しない場合、他の誰かがあなたのアカウントの情報取得を試みる場合があります。すぐにサイト管理者にご連絡ください。';
$string['confirmlinkedloginemailsubject'] = '{$a}: リンクログイン確認';
$string['createaccountswarning'] = 'このプラグインによりユーザはあなたのサイトでアカウントを作成することができます。このプラグインを使用する場合、アカウント作成を禁止したいならば、「authpreventaccountcreation」設定を有効にしてください。';
$string['createnewlinkedlogin'] = '新しいアカウント ({$a}) のリンク';
$string['emailconfirmlink'] = 'あなたのアカウントのリンク';
$string['emailconfirmlinksent'] = 'このメールアドレスで既存のアカウントが見つかりましたが、まだリンクされていません。あなたがログインできるようにするにはアカウントをリンクする必要があります。

あなたのメールアドレス <b>{$a}</b> にメールが送信されています。

メールにはあなたのアカウントをリンクするための簡単なインストラクションが含まれます。難しい場合、あなたのサイト管理者にご連絡ください。';
$string['emailpasswordchangeinfo'] = '{$a->firstname} さん

誰か (恐らくあなた) が「 {$a->sitename} 」 のあなたのアカウントの新しいパスワードをリクエストしました。

しかし、あなたは別のサイトのアカウントをログインに使用しているため、あなたのパスワードをリセットできません。

これまでのようにログインページのリンクを使用してログインしてください。
{$a->admin}';
$string['emailpasswordchangeinfosubject'] = '{$a}: パスワード変更情報';
$string['info'] = '外部アカウント';
$string['issuer'] = 'OAuth 2サービス';
$string['issuernologin'] = 'この発行者はログインに使用できません。';
$string['linkedlogins'] = 'リンクログイン';
$string['linkedloginshelp'] = 'リンクログインのヘルプです。';
$string['loginerror_authenticationfailed'] = '認証処理に失敗しました。';
$string['loginerror_cannotcreateaccounts'] = 'あなたのメールアドレスのアカウントは見つかりませんでした。';
$string['loginerror_invaliddomain'] = 'このサイトでは指定されたメールアドレスは許可されていません。';
$string['loginerror_nouserinfo'] = 'ユーザ情報が戻されませんでした。OAuth 2サービスが正しく設定されていない可能性があります。';
$string['loginerror_userincomplete'] = '戻されたユーザ情報にはユーザ名およびメールアドレスを含んでいません。OAuth 2サービスが正しく設定されていない可能性があります。';
$string['noissuersavailable'] = 'あなたがログインアカウントにリンクできる設定済みOAuth2サービスはありません。';
$string['notenabled'] = '申し訳ございません、OAuth 2認証プラグインが有効にされていません。';
$string['notloggedindebug'] = 'ログインに失敗しました。理由: {$a}';
$string['notwhileloggedinas'] = '別のユーザでログインされているため、リンクログインを管理することができません。';
$string['oauth2:managelinkedlogins'] = '自分のリンクログインアカウントを管理する';
$string['plugindescription'] = 'この認証プラグインはログインページに設定済みアイデンティティプロバイダ一覧を表示します。アイデンティティプロバイダを選択することによりユーザはOAuth 2プロバイダのクレデンシャル情報でログインできるようになります。';
$string['pluginname'] = 'OAuth 2';
$string['privacy:metadata:auth_oauth2'] = 'OAuth 2認証';
$string['privacy:metadata:auth_oauth2:authsubsystem'] = 'このプラグインは認証サブシステムに接続されます。';
$string['privacy:metadata:auth_oauth2:confirmtoken'] = '確認トークです。';
$string['privacy:metadata:auth_oauth2:confirmtokenexpires'] = '確認トークン有効期限切れのタイムスタンプです。';
$string['privacy:metadata:auth_oauth2:email'] = 'このアカウントにマップする外部メールです。';
$string['privacy:metadata:auth_oauth2:issuerid'] = 'このOAuth 2ログインのOAuth 2発効者のIDです。';
$string['privacy:metadata:auth_oauth2:tableexplanation'] = 'ユーザのMoodleアカウントにリンクされるOAuth 2アカウントです。';
$string['privacy:metadata:auth_oauth2:timecreated'] = 'ユーザアカウントがOAuth 2ログインにリンクされた時のタイムスタンプです。';
$string['privacy:metadata:auth_oauth2:timemodified'] = 'このレコードが修正された時のタイムスタンプです。';
$string['privacy:metadata:auth_oauth2:userid'] = 'このOAuth 2ログインがリンクされているユーザアカウントのユーザIDです。';
$string['privacy:metadata:auth_oauth2:usermodified'] = 'このアカウントを修正したユーザのIDです。';
$string['privacy:metadata:auth_oauth2:username'] = 'このアカウントにマップする外部ユーザ名です。';
