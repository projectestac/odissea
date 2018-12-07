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
 * Strings for component 'tool_policy', language 'ja', branch 'MOODLE_34_STABLE'
 *
 * @package   tool_policy
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptanceacknowledgement'] = '私がユーザの代わりに同意するためのリクエストを受信したことを認めます。';
$string['acceptancecount'] = '{$a->agreedcount} / {$a->policiescount}';
$string['acceptancenote'] = 'コメント';
$string['acceptancepolicies'] = 'ポリシー';
$string['acceptancessavedsucessfully'] = '同意が正常に保存されました。';
$string['acceptancestatusoverall'] = '全体';
$string['acceptanceusers'] = 'ユーザ';
$string['actions'] = '操作';
$string['activate'] = 'ステータスを「アクティブに」設定する';
$string['activateconfirm'] = '<p>あなたはポリシー「 {$a->name}」を有効にしてバージョン「 {$a->revision} 」を現在のバージョンにしようとしています。</p><p>このサイトを利用する場合、すべてのユーザは新しいポリシーのバージョンに同意する必要があります。</p>';
$string['activateconfirmyes'] = 'アクティブ';
$string['activating'] = 'ポリシーを有効化する';
$string['agreed'] = '同意';
$string['agreedby'] = '同意元';
$string['agreedno'] = '不同意';
$string['agreednowithlink'] = '同意なし、クリックしてユーザの代理として {$a} に同意する';
$string['agreednowithlinkall'] = '同意なし、クリックしてユーザの代理としてすべてのポリシーに同意する';
$string['agreedon'] = '同意先';
$string['agreedyes'] = '同意';
$string['agreedyesonbehalf'] = 'ユーザの代理による同意';
$string['agreedyesonbehalfwithlink'] = '代理として同意 - {$a} への同意を取り下げるにはクリックしてください。';
$string['agreedyesonbehalfwithlinkall'] = '代理として同意 - すべてのポリシーへの同意を取り下げるにはクリックしてください。';
$string['agreedyeswithlink'] = '同意 - {$a} への同意を取り下げるにはクリックしてください。';
$string['agreedyeswithlinkall'] = '同意 - すべてのポリシーへの同意を取り下げるにはクリックしてください。';
$string['agreepolicies'] = '次のポリシーに同意してください。';
$string['backtotop'] = 'トップに戻る';
$string['consentbulk'] = '同意';
$string['consentdetails'] = 'ユーザの代理として同意する';
$string['consentpagetitle'] = '同意';
$string['contactdpo'] = 'ポリシーに関する質問はデータ保護官にご連絡ください。';
$string['dataproc'] = '個人データ処理';
$string['deleteconfirm'] = '<p>本当にポリシー「 {$a->name} 」を削除してもよろしいですか?</p><p>この操作は元に戻すことはできません。</p>';
$string['deleting'] = 'バージョンを削除する';
$string['editingpolicydocument'] = 'ポリシーを編集する';
$string['errorpolicyversionnotfound'] = 'このIDのポリシーのバージョンはありません。';
$string['errorsaveasdraft'] = 'マイナーチェンジは下書きとして保存することはできません。';
$string['errorusercantviewpolicyversion'] = 'ユーザはこのポリシーバージョンにアクセスすることはできません。';
$string['event_acceptance_created'] = 'ユーザポリシー同意が作成されました。';
$string['event_acceptance_updated'] = 'ユーザポリシー同意が更新されました。';
$string['filtercapabilityno'] = 'パーミッション: 同意できない';
$string['filtercapabilityyes'] = 'パーミッション: 同意できる';
$string['filterplaceholder'] = 'キーワード検索またはフィルタを選択する';
$string['filterpolicy'] = 'ポリシー: {$a}';
$string['filterrevision'] = 'バージョン: {$a}';
$string['filterrevisionstatus'] = 'バージョン: {$a->name} ({$a->status})';
$string['filterrole'] = 'ロール: {$a}';
$string['filters'] = 'フィルタ';
$string['filterstatusno'] = 'ステータス: 不同意';
$string['filterstatusyes'] = 'ステータス: 同意';
$string['guestconsent:continue'] = '続ける';
$string['guestconsentmessage'] = 'このウェブサイトを続けて閲覧したい場合、あなたは私たちのポリシーに同意する必要があります:';
$string['iagree'] = '私は {$a} に同意します。';
$string['iagreetothepolicy'] = 'ユーザの代理として同意する';
$string['inactivate'] = 'ステータスを「非アクティブ」に設定する';
$string['inactivating'] = 'ポリシーを非アクティブにする';
$string['inactivatingconfirm'] = '<p>あなたはポリシー「 {$a->name}」 バージョン「 {$a->revision} 」を無効にしようとしています。</p>';
$string['inactivatingconfirmyes'] = '非アクティブ';
$string['invalidversionid'] = 'このIDのポリシーはありません!';
$string['irevokethepolicy'] = 'ユーザ同意を取り下げる';
$string['managepolicies'] = 'ポリシーを管理する';
$string['minorchange'] = 'マイナーチェンジ';
$string['minorchangeinfo'] = 'マイナーチェンジはポリシーの意味を変更しません。編集がマイナーチェンジであるとマークされた場合、ユーザはポリシーに再度同意する必要はありません。';
$string['movedown'] = '下に移動する';
$string['moveup'] = '上に移動する';
$string['mustagreetocontinue'] = '続けるにはあなたはこれらすべてのポリシーに同意する必要があります。';
$string['newpolicy'] = '新しいポリシー';
$string['newversion'] = '新しいバージョン';
$string['nofiltersapplied'] = 'フィルタ適用なし';
$string['nopermissiontoagreedocs'] = 'ポリシーに同意するパーミッションがありません。';
$string['nopermissiontoagreedocsbehalf'] = 'このユーザに代わってポリシーに同意するパーミッションがありません。';
$string['nopermissiontoagreedocsbehalf_desc'] = '申し訳ございません、あなたには {$a} の代わりに次のポリシーに同意する必要なパーミッションがありません:';
$string['nopermissiontoagreedocscontact'] = 'さらなる支援が必要な場合、次の人にご連絡ください:';
$string['nopermissiontoagreedocs_desc'] = '申し訳ございません、あなたにはポリシーに同意するための必要なパーミッションがありません。<br />あなたは次のポリシーに同意するまでこのサイトを利用できません:';
$string['nopermissiontoviewpolicyversion'] = 'あなたにはこのポリシーのバージョンを閲覧するパーミッションがありません。';
$string['nopolicies'] = '登録済みユーザのための有効なバージョンのポリシーはありません。';
$string['pluginname'] = 'ポリシー';
$string['policiesagreements'] = 'ポリシーおよび同意';
$string['policy:accept'] = 'ポリシーに同意する';
$string['policy:acceptbehalf'] = '他の人の代理としてポリシーに同意する';
$string['policydocaudience'] = 'ユーザ同意';
$string['policydocaudience0'] = 'すべてのユーザ';
$string['policydocaudience1'] = '認証済みユーザ';
$string['policydocaudience2'] = 'ゲスト';
$string['policydoccontent'] = '完全なポリシー';
$string['policydochdrpolicy'] = 'ポリシー';
$string['policydochdrversion'] = 'ドキュメントバージョン';
$string['policydocname'] = '名称';
$string['policydocrevision'] = 'バージョン';
$string['policydocsummary'] = '概要';
$string['policydocsummary_help'] = 'このテキストでは潜在的にシンプルおよび簡単にアクセス可能な形で分かりやすい言葉を使用したポリシーの概要を提供してください。';
$string['policydoctype'] = 'タイプ';
$string['policydoctype0'] = 'サイトポリシー';
$string['policydoctype1'] = 'プライバシーポリシー';
$string['policydoctype2'] = 'サードパーティポリシー';
$string['policydoctype99'] = 'その他のポリシー';
$string['policydocuments'] = 'ポリシードキュメント';
$string['policy:managedocs'] = 'ポリシーを管理する';
$string['policynamedversion'] = 'ポリシー {$a->name} (バージョン {$a->revision} - {$a->id})';
$string['policyversionacceptedinbehalf'] = 'このポリシーへの同意はあなたの代理として与えられました。';
$string['policyversionacceptedinotherlang'] = 'このポリシーバージョンへの同意は異なる言語で与えられました。';
$string['policy:viewacceptances'] = 'ユーザ同意レポートを表示する';
$string['previousversions'] = '{$a} 前のバージョン';
$string['privacy:metadata:acceptances'] = 'サイトユーザによって作成されたポリシー同意の情報です。';
$string['privacy:metadata:acceptances:lang'] = 'ポリシーが同意された場合に表示される現在の言語です。';
$string['privacy:metadata:acceptances:note'] = '別のユーザの代理でポリシーに同意したユーザによって追加されたすべてのコメントです。';
$string['privacy:metadata:acceptances:policyversionid'] = '同意されたバージョンのポリシーのIDです。';
$string['privacy:metadata:acceptances:status'] = '同意ステータス: 0 = 同意されていない場合、1 = その他';
$string['privacy:metadata:acceptances:timecreated'] = 'ユーザがポリシーに同意した日時です。';
$string['privacy:metadata:acceptances:timemodified'] = 'ユーザが同意を修正した日時です。';
$string['privacy:metadata:acceptances:userid'] = 'ポリシーに同意したユーザのIDです。';
$string['privacy:metadata:acceptances:usermodified'] = '別のユーザの代理でポリシーに同意したユーザのIDです。';
$string['privacy:metadata:subsystem:corefiles'] = 'ポリシーツールは概要および完全なポリシーを含むファイルを保存します。';
$string['privacy:metadata:versions'] = 'ポリシーバージョン情報です。';
$string['privacy:metadata:versions:archived'] = 'ポリシーステータスです (アクティブまたは非アクティブ)。';
$string['privacy:metadata:versions:audience'] = '同意を求められるユーザのタイプです。';
$string['privacy:metadata:versions:content'] = 'このポリシーのバージョンのコンテンツです。';
$string['privacy:metadata:versions:contentformat'] = 'コンテンツフィールドのフォーマットです。';
$string['privacy:metadata:versions:name'] = 'ポリシー名です。';
$string['privacy:metadata:versions:policyid'] = 'このバージョンが関連するポリシーです。';
$string['privacy:metadata:versions:revision'] = 'このバージョンのポリシーの改訂版名です。';
$string['privacy:metadata:versions:summary'] = 'このバージョンのポリシーの概要です。';
$string['privacy:metadata:versions:summaryformat'] = '概要フィールドのフォーマットです。';
$string['privacy:metadata:versions:timecreated'] = 'このバージョンのポリシーが作成された日時です。';
$string['privacy:metadata:versions:timemodified'] = 'このバージョンのポリシーが更新された日時です。';
$string['privacy:metadata:versions:type'] = 'ポリシータイプです。';
$string['privacy:metadata:versions:usermodified'] = 'ポリシーを修正したユーザです。';
$string['privacysettings'] = 'プライバシー設定';
$string['readpolicy'] = '私たちの {$a} をお読みください。';
$string['refertofullpolicytext'] = 'あなたがテキストをレビューしたい場合、完全な {$a} を参照してください。';
$string['revokeacknowledgement'] = '私がユーザの代理として同意取り下げのリクエストを受信したことを認めます。';
$string['revokedetails'] = 'ユーザの同意を取り下げる';
$string['save'] = '保存';
$string['saveasdraft'] = '下書きとして保存する';
$string['selectpolicyandversion'] = 'ポリシーまたはバージョンを選択するには上のフィルタを使用してください。';
$string['selectuser'] = 'ユーザを選択する {$a}';
$string['selectusersforconsent'] = '代理として同意を与えるユーザを選択する';
$string['settodraft'] = '新しい下書きを作成する';
$string['status'] = 'ポリシーステータス';
$string['status0'] = '下書き';
$string['status1'] = 'アクティブ';
$string['status2'] = '非アクティブ';
$string['statusinfo'] = '初回ログインであっても既存のユーザによる次回ログインであっても「有効」ステータスのポリシーはユーザに同意を求めます。';
$string['steppolicies'] = 'ポリシー {$a->numpolicy} / {$a->totalpolicies}';
$string['useracceptancecount'] = '{$a->agreedcount} / {$a->userscount} ({$a->percent}%)';
$string['useracceptancecountna'] = 'N/A';
$string['useracceptances'] = 'ユーザ同意';
$string['userpolicysettings'] = 'ポリシー';
$string['usersaccepted'] = '同意';
$string['viewarchived'] = '前のバージョンを閲覧する';
$string['viewconsentpageforuser'] = '{$a} の代わりにこのページを閲覧する';
