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
 * Strings for component 'portfolio_mahara', language 'ja', version '3.8'.
 *
 * @package     portfolio_mahara
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['enableleap2a'] = 'Leap2Aポートフォリオサポートを有効にする (要Mahara 1.3またはそれ以上)';
$string['err_invalidhost'] = '無効なMNetホスト';
$string['err_invalidhost_help'] = 'このプラグインは無効な (または削除された) MNetホストにアクセスするよう誤って設定されています。このプラグインはSSO IDP (アイデンティティプロバイダ) が公開されたMoodleネットワーキングピア、登録されたSSO SP (サービスプロバイダ)、登録<b>および</b>公開されたポートフォリオを信頼します。';
$string['err_networkingoff'] = 'MNetは無効にされています。';
$string['err_networkingoff_help'] = '現在、MNetは無効にされています。このプラグインを設定する前に有効にしてください。MNet が有効にされるまでこのプラグインのインスタンスすべて非表示にされています。インスタンスは手動で表示する必要があります。';
$string['err_nomnetauth'] = 'MNet認証プラグインが無効にされています。';
$string['err_nomnetauth_help'] = 'MNet認証プラグインは無効にされていますが、このサービスで必要とされます。';
$string['err_nomnethosts'] = 'MNetに依存する';
$string['err_nomnethosts_help'] = 'このプラグインはSSO IDP (アイデンティティプロバイダ) が公開されたＭＮetピア、登録されたSSO SP (サービスプロバイダ) 、公開<b>および</b>登録されたポートフォリオサービス、MNet認証プラグインを信頼します。これらのコンディションに合致するまでこのプラグインのインスタンスはすべて非表示にされます。再度、手動でインスタンスを表示する必要があります。';
$string['failedtojump'] = 'リモートサーバとの通信の開始に失敗しました。';
$string['failedtoping'] = 'リモートサーバとの通信の開始に失敗しました: {$a}';
$string['mnet_nofile'] = '転送オブジェクトにファイルを見つけることができませんでした - 不明なエラー。';
$string['mnet_nofilecontents'] = '転送オブジェクトにファイルを発見しましたがコンテンツを取得できませんでした - 不明なエラー: {$a}';
$string['mnet_noid'] = 'このトークンに合致する転送レコードを見つけることができませんでした。';
$string['mnet_notoken'] = 'この転送に合致するトークンを見つけることができませんでした。';
$string['mnet_wronghost'] = 'このトークンの転送レコードにリモートホストが合致しません。';
$string['mnethost'] = 'MNetホスト';
$string['pf_description'] = 'このホストに対してユーザによるMoodleコンテンツの送信を許可します。
<br />
このサービスに公開<b>および</b>登録することであなたのサイトの認証済みユーザが {$a} にコンテンツを送信することを許可します。
<br />
<ul>
<li><em>依存関係</em>: あなたはまたSSO (アイデンティティプロバイダ) サービスを {$a} に<strong>公開</strong>する必要があります。</li>
<li><em>依存関係</em>: あなたはまた {$a} のSSO (サービスプロバイダ) サービスに<strong>登録</strong>する必要があります。</li>
<li><em>依存関係</em>: あなたはまたMNet認証プラグインを有効にする必要があります。</li>
</ul>
<br />';
$string['pf_name'] = 'ポートフォリオサービス';
$string['pluginname'] = 'Mahara eポートフォリオ';
$string['privacy:metadata'] = 'このプラグインは外部のリンクされたMaharaアプリケーションにデータを送信します。ローカルにデータを保存することはありません。';
$string['privacy:metadata:data'] = 'ポートフォリオサブシステムから渡された個人データです。';
$string['senddisallowed'] = '現在、あなたはMaharaにファイルを転送できません。';
$string['url'] = 'URL';
