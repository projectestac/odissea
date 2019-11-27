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
 * Strings for component 'repository_googledocs', language 'ja', branch 'MOODLE_36_STABLE'
 *
 * @package   repository_googledocs
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['both'] = '内部および外部';
$string['cachedef_folder'] = 'システムアカウント内フォルダのGoogleファイルID';
$string['clientid'] = 'クライアントID';
$string['configplugin'] = 'Google Driveプラグインを設定する';
$string['defaultreturntype'] = 'デフォルト戻りタイプ';
$string['docsformat'] = 'デフォルトのドキュメントインポートフォーマット';
$string['drawingformat'] = 'デフォルトの図形描画インポートフォーマット';
$string['external'] = '外部 (Moodle内に保存されたリンクのみ)';
$string['fileoptions'] = 'ここでタイプおよび戻されるファイルのデフォルトを設定することができます。外部にリンクされているすべてのファイルが更新されるため、オーナーがMoodleシステムアカウントになる点に留意してください。';
$string['googledocs:view'] = 'Google Driveリポジトリを表示する';
$string['importformat'] = 'Googleからのデフォルトのインポートフォーマットを設定する';
$string['internal'] = '内部 (Moodle内に保存されているファイル)';
$string['issuer'] = 'OAuth 2サービス';
$string['issuer_help'] = 'Google Drive APIと通信するため設定するOAuth 2サービスを選択してください。まだサービスが存在していない場合、あなたは作成する必要があります。';
$string['oauth2serviceslink'] = '<a href="{$a}" title="OAuth 2サービス設定へのリンク">OAuth 2サービス設定</a>';
$string['oauthinfo'] = '<p>このプラグインを使用するにはドキュメンテーション「<a href="{$a->docsurl}">Google OAuth 2.0セットアップ</a>」に記載されているようにあなたのサイトをGoogleに登録する必要があります。</p><p>登録処理の一環として、あなたは次のURLを「公式リダイレクトURL」として入力する必要があります:</p><p>{$a->callbackurl}</p><p>登録後、他の特定のGoogle DriveおよびPicasaプラグインの設定に使用できるクライアントIDおよび秘密鍵が提供されます。</p>';
$string['owner'] = 'オーナー: {$a}';
$string['pluginname'] = 'Google Drive';
$string['presentationformat'] = 'デフォルトのプレゼンテーションインポートフォーマット';
$string['privacy:metadata:repository_googledocs'] = 'Google Driveリポジトリプラグインはいかなる個人データも保存しません。しかし、ユーザデータをMoodleからリモートシステムに転送します。';
$string['privacy:metadata:repository_googledocs:email'] = 'Google Driveリポジトリユーザのメールアドレスです。';
$string['privacy:metadata:repository_googledocs:searchtext'] = 'Google Driveリポジトリユーザ検索テキストクエリです。';
$string['searchfor'] = '{$a} を探す';
$string['secret'] = '秘密鍵';
$string['servicenotenabled'] = 'アクセスが設定されていません。「Drive API」が有効にされているか確認してください。';
$string['spreadsheetformat'] = 'デフォルトのスプレッドシートインポートフォーマット';
$string['supportedreturntypes'] = 'サポートされるファイル';
