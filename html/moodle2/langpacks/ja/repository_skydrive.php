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
 * Strings for component 'repository_skydrive', language 'ja', branch 'MOODLE_36_STABLE'
 *
 * @package   repository_skydrive
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cachedef_foldername'] = 'フォルダ名キャッシュ';
$string['clientid'] = 'クライアントID';
$string['configplugin'] = 'Microsoft OneDriveを設定する (レガシー)';
$string['deprecatedwarning'] = '警告: このリポジトリプラグインに使用されているAPIはMicrosoftにより廃止されました。そのため、結果として動作しなくなります。新しい「Microsoft OneDrive」リポジトリに移行してください。';
$string['oauthinfo'] = '<p>このプラグインを使用するためにはあなたのサイトを<a href="https://account.live.com/developers/applications">Microsoft</a>に登録する必要があります。</p>

<p>登録処理の一環としてあなたは「リダイレクトドメイン」に次のURLを入力する必要があります:</p>

<p>{$a->callbackurl}</p>

<p>登録完了後、あなたにはここで入力できるクライアントIDおよび秘密鍵が提供されます。</p>';
$string['pluginname'] = 'Microsoft OneDrive (レガシー)';
$string['privacy:metadata'] = 'Microsoft OneDrive (レガシー) リポジトリプラグインはいかなる個人データも保存しません。しかし、ユーザデータをMoodleからリモートシステムに転送します。';
$string['secret'] = '秘密鍵';
$string['skydrive:view'] = 'OneDrive (レガシー) 表示する';
