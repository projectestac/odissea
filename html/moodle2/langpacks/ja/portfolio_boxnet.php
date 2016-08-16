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
 * Strings for component 'portfolio_boxnet', language 'ja', branch 'MOODLE_31_STABLE'
 *
 * @package   portfolio_boxnet
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'クライアントID';
$string['clientsecret'] = 'クライアント秘密鍵';
$string['existingfolder'] = 'ファイルを保存するための既存フォルダ';
$string['folderclash'] = 'あなたが作成を依頼したフォルダはすでに登録されています!';
$string['foldercreatefailed'] = 'あなたのターゲットフォルダをBoxに作成できませんでした。';
$string['folderlistfailed'] = 'Boxからフォルダ一覧を取得できませんでした。';
$string['missinghttps'] = 'HTTPS必須';
$string['missinghttps_help'] = 'BoxはHTTPSが有効にされているウェブサイトでのみ動作します。';
$string['missingoauthkeys'] = 'クライアントIDおよび秘密鍵がありません。';
$string['missingoauthkeys_help'] = 'このプラグインのクライアントIDまたは秘密鍵設定がありません。あなたはBox開発ページでこれらを取得することができます。';
$string['newfolder'] = 'ファイルを保存するための新しいフォルダ';
$string['noauthtoken'] = 'このセッションで使用する認証トークンを取得できませんでした。';
$string['notarget'] = 'あなたはファイルをアップロードするための既存フォルダまたは新しいフォルダを指定する必要があります。';
$string['noticket'] = '認証セッションを開始するためのチケットをBoxから取得できませんでした。';
$string['password'] = 'あなたのBoxパスワード (保存されません)';
$string['pluginname'] = 'Box';
$string['sendfailed'] = 'コンテンツをBoxに送信できませんでした: {$a}';
$string['setupinfo'] = 'セットアップインストラクション';
$string['setupinfodetails'] = 'クライアントIDおよび秘密鍵を取得するにはBoxにログインした後、<a href="{$a->servicesurl}">Box.net開発者ページ</a>にアクセスしてください。「Create new application」ボタンをクリックしてあなたのMoodleサイト用の新しいアプリケーションを作成してください。クライアントIDおよび秘密鍵はアプリケーション編集フォームの「OAuth2 parameters」セクションに表示されます。あなたのMoodleサイトに関する他の情報を任意に提供することもできます。';
$string['sharedfolder'] = '共有';
$string['sharefile'] = 'このファイルを共有しますか?';
$string['sharefolder'] = 'この新しいフォルダを共有しますか?';
$string['targetfolder'] = 'ターゲットフォルダ';
$string['tobecreated'] = '作成予定';
$string['username'] = 'あなたのBoxユーザ名 (保存されません)';
$string['warninghttps'] = 'Boxのポートフォリオを動作させるにはあなたのウェブサイトがHTTPSを使用している必要があります。';
