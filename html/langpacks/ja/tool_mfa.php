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
 * Strings for component 'tool_mfa', language 'ja', version '4.5'.
 *
 * @package     tool_mfa
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievedweight'] = '到達加重';
$string['added'] = '追加';
$string['alltime'] = 'すべての時間';
$string['areyousure'] = '本当に要素を削除してもよろしいですか?';
$string['cancellogin'] = 'ログインをキャンセルする';
$string['combination'] = '組み合わせ';
$string['confirmationreplace'] = 'あなたはすぐに別の「 {$a} 」をセットアップする必要があります。セットアッププロセスを完了する準備ができていることをご確認ください。';
$string['confirmationrevoke'] = 'あなたはこのサイトへのログインに「 {$a} 」を使用できなくなります。';
$string['connector'] = 'AND';
$string['created'] = '作成日時';
$string['createdfromip'] = '作成元IP';
$string['debugmode:heading'] = 'デバッグモード';
$string['devicename'] = 'デバイス';
$string['editfactor'] = '{$a} 要素の設定を編集する';
$string['email:subject'] = '{$a} ログイン不可';
$string['enablefactor'] = '要素を有効にする';
$string['entercode'] = 'コードを入力する';
$string['error:actionnotfound'] = '操作「 {$a} 」はサポートされていません。';
$string['error:couldnotreplace'] = 'この要素を置換できませんでした。';
$string['error:directaccess'] = 'このページには直接アクセスすべきではありません。';
$string['error:factornotenabled'] = '多要素認証要素「 {$a} 」は有効にされていません。';
$string['error:factornotfound'] = '多要素認証要素「 {$a} 」は見つかりませんでした。';
$string['error:isguestuser'] = 'ここではゲストは許可されていません。';
$string['error:notenoughfactors'] = '認証できません。';
$string['error:reauth'] = '私たちはこのサイトの認証セキュリティポリシーを満たすためにあなたの身元を十分に確認できませんでした。
<br />
これは次のような原因が考えられます:
<br />
1) ステップがロックされている - 数分待って再度お試しください。
<br />
2) ステップが失敗している - それぞれステップの詳細を再度ご確認ください。
<br />
3) ステップがスキップされた - このページを再読み込みするか、再度ログインをお試しください。';
$string['error:revoke'] = '要素を削除できません。';
$string['error:setupfactor'] = '要素を設定できません。';
$string['error:support'] = 'あなたがまだログインできない場合、またはあなたがこれをエラーだと信じる場合、次にメールをお送りください:';
$string['error:wrongfactorid'] = '要素ID「 {$a} 」が正しくありません。';
$string['event:failfactor'] = '失敗した要素のため多要素認証に失敗しました。';
$string['event:faillockout'] = '試行回数が多過ぎため多要素認証に失敗しました。';
$string['event:failnotenoughfactors'] = '要素が十分ではないため多要素認証に失敗しました。';
$string['event:userdeletedfactor'] = '要素が削除されました。';
$string['event:userfailedmfa'] = 'ユーザが多要素認証に失敗しました。';
$string['event:userpassedmfa'] = '検証をパスしました。';
$string['event:userrevokedfactor'] = '要素取り消し';
$string['event:usersetupfactor'] = '要素設定';
$string['factor'] = '要素';
$string['factorreplace'] = '「 {$a} 」が正常に置換されました。';
$string['factorreport'] = 'すべての要素レポート';
$string['factorreset'] = 'あなたの多要素認証「 {$a->factor} 」はサイト管理者によってリセットされました。あなたはこの要素を再度設定する必要があります。{$a->url}';
$string['factorresetall'] = 'あなたのすべての多要素認証要素はサイト管理者によってリセットされました。あなたはこれらの要素を再度設定する必要があります。
{$a}';
$string['factorrevoked'] = '「 {$a} 」が正常に削除されました。';
$string['factorsetup'] = '「 {$a} 」が正常に設定されました。';
$string['fallback'] = 'フォールバック要素';
$string['fallback_info'] = '他にない要素が設定されていない場合、この要素はフォールバックとなります。この要素は常に失敗します。';
$string['guidance'] = '多要素認証ユーザガイド';
$string['inputrequired'] = 'ユーザ入力';
$string['ipatcreation'] = '要素作成時のIPアドレス';
$string['lastused'] = '最後の使用';
$string['lastverified'] = '最終確認';
$string['locked'] = '{$a} (利用不可)';
$string['lockedusersforallfactors'] = 'ロック済みユーザ: すべての要素';
$string['lockedusersforfactor'] = 'ロック済みユーザ: {$a}';
$string['lockoutnotification'] = 'あなたはあと {$a} 回試行できます。';
$string['managefactor'] = '要素を管理する';
$string['mfa'] = '多要素認証';
$string['mfa:intro'] = 'あなたのログイン時に追加の認証方法を要求することでアカウントをより安全にします。';
$string['mfa:mfaaccess'] = 'MFA連動';
$string['mfareports'] = 'MFAレポート';
$string['mfasettings'] = '多要素認証を管理する';
$string['na'] = 'n/a';
$string['needhelp'] = 'サポートが必要ですか?';
$string['nologinusers'] = '未ログイン';
$string['nonauthusers'] = '保留MFA';
$string['overall'] = '全体';
$string['pending'] = '保留';
$string['performbulk'] = 'バルク処理';
$string['pluginname'] = '多要素認証';
$string['preferences:activefactors'] = 'アクティブ要素';
$string['preferences:availablefactors'] = '利用可能な要素';
$string['preferences:header'] = '多要素認証プレファレンス';
$string['preferenceslink'] = 'ユーザプレファレンスに移動するにはここをクリックしてください。';
$string['privacy:metadata:tool_mfa'] = 'MFA要素が設定されたデータ';
$string['privacy:metadata:tool_mfa:createdfromip'] = 'この要素の設定元IPアドレスです。';
$string['privacy:metadata:tool_mfa:factor'] = '要素タイプ';
$string['privacy:metadata:tool_mfa:id'] = 'レコードID';
$string['privacy:metadata:tool_mfa:label'] = '要素インスタンスのラベルです。例) デバイスまたはメールアドレス';
$string['privacy:metadata:tool_mfa:lastverified'] = 'ユーザがこの要素で最後に検証された日時';
$string['privacy:metadata:tool_mfa:secret'] = '要素のすべてのシークレットデータ';
$string['privacy:metadata:tool_mfa:timecreated'] = '要素インスタンスが設定された日時です。';
$string['privacy:metadata:tool_mfa:timemodified'] = '要素修正日時';
$string['privacy:metadata:tool_mfa:userid'] = '要素が属するユーザのID';
$string['privacy:metadata:tool_mfa_auth'] = 'このデータベーステーブルはユーザIDに対して最後に多要素認証が成功した日時を保持します。';
$string['privacy:metadata:tool_mfa_auth:lastverified'] = 'ユーザ認証日時';
$string['privacy:metadata:tool_mfa_auth:userid'] = 'このタイムスタンプが関連するユーザ';
$string['privacy:metadata:tool_mfa_secrets'] = 'ユーザ認証のための一時的なシークレットです。';
$string['privacy:metadata:tool_mfa_secrets:factor'] = 'このシークレットが関連付けられる要素です。';
$string['privacy:metadata:tool_mfa_secrets:secret'] = 'シークレットセキュリティコードです。';
$string['privacy:metadata:tool_mfa_secrets:sessionid'] = 'このシークレットが関連付けられるセッションIDです。';
$string['privacy:metadata:tool_mfa_secrets:userid'] = 'このシークレットが関連付けられるユーザです。';
$string['redirecterrordetected'] = 'サポートされていないリダイレクトが検出されたためスクリプトの実行を終了しました。MFAと {$a} の間でリダイレクトエラーが発生しました。';
$string['remove'] = '削除';
$string['replace'] = '置換';
$string['replacefactor'] = '要素を置換する';
$string['resetconfirm'] = 'ユーザ要素をリセットする';
$string['resetfactor'] = 'ユーザ認証要素をリセットする';
$string['resetfactorconfirm'] = '本当にこの {$a} の要素をリセットしてもよろしいですか?';
$string['resetfactorplaceholder'] = 'ユーザ名またはメールアドレス';
$string['resetsuccess'] = '要素「 {$a->factor} 」はユーザ「 {$a->username} 」のために正常にリセットされました。';
$string['resetsuccessbulk'] = '要素「 {$a} 」は提供されたユーザのために正常にリセットされました。';
$string['resetuser'] = 'ユーザ:';
$string['revoke'] = '取り消す';
$string['revokefactor'] = '要素を削除する';
$string['selectfactor'] = 'リセットする要素を選択する:';
$string['selectperiod'] = 'レポートのルックバック期間を選択する:';
$string['settings:combinations'] = 'ログイン良好概要';
$string['settings:debugmode'] = 'デバッグモードを有効にする';
$string['settings:debugmode_help'] = 'デバッグモードではMFA管理ページおよび現在有効な要素情報を記載したユーザプレファレンスページに小さな通知バナーを表示します。';
$string['settings:duration'] = 'シークレット有効期限';
$string['settings:duration_help'] = '生成されたシークレットの有効期限です。';
$string['settings:enabled'] = 'MFAプラグイン有効';
$string['settings:enablefactor'] = '要素を有効にする';
$string['settings:enablefactor_help'] = 'MFA認証に使用する要素を許可する場合、このコントロールをチェックしてください。';
$string['settings:general'] = '一般MFA設定';
$string['settings:guidancecheck'] = 'ユーザガイダンスページ';
$string['settings:guidancecheck_help'] = 'MFA認証ページおよびMFAプレファレンスページにガイダンスページへのリンクを追加します。';
$string['settings:guidancefiles'] = 'ガイダンスページファイル';
$string['settings:guidancefiles_help'] = 'ガイダンスページで使用するファイルをここに追加してください。エディタで {{filename}} (解決パス) または {{filename}} (htmlリンク) を使用してページに埋め込みます。';
$string['settings:guidancepage'] = 'ガイダンスページコンテンツ';
$string['settings:guidancepage_help'] = 'ここのHTMLはガイダンスページに表示されます。ファイルエリアからファイル名を入力した場合、解決されたパス {{filename}} でファイルが埋め込まれるか、{{filename}} でHTMLリンクとして表示されます。';
$string['settings:lockout'] = 'ロックアウト閾値';
$string['settings:lockout_help'] = 'ユーザがログインできなくなるまでに入力要素に回答できる試行回数です。';
$string['settings:redir_exclusions'] = 'MFAチェックをリダイレクトさせないURLです。';
$string['settings:redir_exclusions_help'] = 'それぞれの新しい行はMFAチェックがリダイレクトしないサイトルートからの相対URLです。';
$string['settings:weight'] = '要素加重';
$string['settings:weight_help'] = '合格した場合のこの要素の加重です。ユーザはログインするために少なくとも100ポイント必要です。';
$string['setup'] = '設定';
$string['setupfactor'] = '要素を設定する';
$string['setupfactorbuttonadditional'] = '追加要因を追加する';
$string['setuprequired'] = 'ユーザ設定';
$string['state:fail'] = '失敗';
$string['state:locked'] = 'ロック済み';
$string['state:neutral'] = '中立';
$string['state:pass'] = 'パス';
$string['state:unknown'] = '不明';
$string['subplugintype_factor'] = '要素タイプ';
$string['subplugintype_factor_plural'] = '要素タイプ';
$string['totalusers'] = '合計ユーザ数';
$string['totalweight'] = '合計加重';
$string['userempty'] = 'ユーザは空にできません。';
$string['userlogs'] = 'ユーザログ';
$string['usernotfound'] = 'ユーザを探せません。';
$string['usersauthedinperiod'] = 'ログイン';
$string['verification'] = '2段階認証';
$string['verification_desc'] = 'あなたのアカウントの安全性を保つため、私たちはこれが本当にあなたであるのか確認する必要があります。';
$string['verificationcode'] = '認証コード';
$string['verificationcode_help'] = '現在の認証要素から提供される認証コードです。';
$string['verifyalt'] = '別の方法で確認する:';
$string['weight'] = '加重';
$string['yesremove'] = 'はい、削除します';
$string['yesreplace'] = 'はい、置換します';
