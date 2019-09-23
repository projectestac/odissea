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
 * Strings for component 'portfolio_picasa', language 'ja', branch 'MOODLE_36_STABLE'
 *
 * @package   portfolio_picasa
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'クライアントID';
$string['noauthtoken'] = 'Googleから認証トークンが受信されませんでした。あなたのGoogleアカウントにMoodleのアクセスが許可されているか確認してください。';
$string['nooauthcredentials'] = 'OAuth認証情報が必要です。';
$string['nooauthcredentials_help'] = 'Picasaポートフォリオプラグインを使用するにはポートフォリオ設定でOAuth認証情報を設定する必要があります。';
$string['oauthinfo'] = '<p>このプラグインを使用するにはドキュメンテーション「<a href="{$a->docsurl}">Google OAuth 2.0セットアップ</a>」に記載されているようあなたのサイトをGoogleに登録する必要があります。</p><p>登録処理の一環として、あなたは次のURLを「公式リダイレクトURL」として入力する必要があります:</p><p>{$a->callbackurl}</p><p>登録後、すべてのGoogle DriveおよびPicasaプラグインに使用できるクライアントIDおよび秘密鍵が提供されます。</p>';
$string['pluginname'] = 'Picasa';
$string['privacy:metadata'] = 'このプラグインは外部のリンクされたPicasaアカウントにデータを送信します。ローカルにデータを保存することはありません。';
$string['privacy:metadata:data'] = 'ポートフォリオサブシステムから渡された個人データです。';
$string['secret'] = '秘密鍵';
$string['sendfailed'] = 'Picasaへのファイル {$a} の転送に失敗しました。';
