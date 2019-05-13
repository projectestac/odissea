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
 * Strings for component 'repository_flickr', language 'ja', branch 'MOODLE_34_STABLE'
 *
 * @package   repository_flickr
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikey'] = 'APIキー';
$string['callbackurl'] = 'コールバックURL';
$string['callbackurltext'] = '<ol>
<li>再度、<a href="http://www.flickr.com/services/api/keys/">Flickr APIキー</a>にアクセスしてください。</li>
<li>このFlickrキーにコールバックURL <strong>{$a}</strong> を設定したかどうか確認してください。</li>
</ol>';
$string['callbackwarning'] = '<ol>
<li>あなたのMoodleサイトに<a href="http://www.flickr.com/services/api/keys/">Flickr APIキーおよびSecret</a>を取得してください。</li>
<li>これら詳細を入力した後、「保存」ボタンをクリックしてください。「設定」をクリックすることでこのページに戻ります。あなたにはMoodleが生成したコールバックURLが表示されます。</li>
<li>あなたの<a href="http://www.flickr.com/services/api/keys/">Flickrキー</a>詳細を編集した後、コールバックURLを設定してください。</li>
</ol>';
$string['configplugin'] = 'Flickr設定';
$string['emailaddress'] = 'メールアドレス';
$string['flickr:view'] = 'Flickrリポジトリを表示する';
$string['invalidemail'] = '無効なFlickrメールアドレスです。';
$string['notitle'] = 'タイトルなし';
$string['nullphotolist'] = 'このアカウントの写真はありません。';
$string['pluginname'] = 'Flickr';
$string['pluginname_help'] = 'flickr.comのリポジトリ';
$string['privacy:metadata:repository_flickr'] = 'Flickrリポジトリプラグインはユーザプリファレンスを保存します。また、ユーザデータをMoodleからリモートシステムに転送します。';
$string['privacy:metadata:repository_flickr:preference:repository_flickr_access_token'] = 'FlickrリポジトリのOAuthトークンプリファレンスです。';
$string['privacy:metadata:repository_flickr:preference:repository_flickr_access_token_secret'] = 'FlickrリポジトリのOAuth秘密鍵プリファレンスです。これはプライバシーデータのエクスポートから除外されます。';
$string['privacy:metadata:repository_flickr:text'] = 'Flickrリポジトリユーザ検索テキストクエリです。';
$string['remember'] = '次回から入力を省略する';
$string['secret'] = '秘密鍵';
$string['username'] = 'Flickrアカウントメール';
