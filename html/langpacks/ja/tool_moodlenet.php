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
 * Strings for component 'tool_moodlenet', language 'ja', version '4.4'.
 *
 * @package     tool_moodlenet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addingaresource'] = 'MoodleNetからコンテンツを追加する';
$string['aria:enterprofile'] = 'あなたのMoodleNetプロファイルIDを入力する';
$string['aria:footermessage'] = 'MoodleNetのコンテンツを閲覧する';
$string['autoenablenotification'] = '<p>Moodle 4.0以降、<a href="https://moodle.net/">MoodleNet</a>インテグレーションが拡張機能でデフォルトで有効にされています。活動の作成および管理するケイパビリティのあるユーザは活動チューザからMoodleNetを閲覧してMoodleNetリソースをコースにインポートできます。</p><p>必要であれば、<a href="{$a->settingslink}">MoodleNet内向き設定</a>で別のMoodleNetインスタンスを指定できます。</p>';
$string['autoenablenotification_subject'] = 'デフォルトMoodleNet設定が変更されました。';
$string['browsecontentmoodlenet'] = 'またはMoodleNetのコンテンツを閲覧する';
$string['clearsearch'] = '検索をクリアする';
$string['connectandbrowse'] = '接続して閲覧する:';
$string['defaultmoodlenet'] = 'MoodleNetURL';
$string['defaultmoodlenet_desc'] = '活動チューザで利用できるMoodleNetインスタンスのURLです。';
$string['defaultmoodlenetname'] = 'MoodleNetインスタンス名';
$string['defaultmoodlenetname_desc'] = '活動チューザで利用可能なMoodleNetインスタンス名です。';
$string['defaultmoodlenetnamevalue'] = 'MoodleNetセントラル';
$string['enablemoodlenet'] = 'MoodleNetインテグレーション (内向き) を有効にする';
$string['enablemoodlenet_desc'] = 'この設定を有効にした場合、活動を作成および管理できるケイパビリティのあるユーザは活動チューザでMoodleNetを閲覧してMoodleNetリソースを自分のコースにインポートできます。加えてバックアップをリストアできるケイパビリティのあるユーザはMoodelNetのバックアップを選択してMoodleにリストアできます。';
$string['errorduringdownload'] = 'ファイルのダウンロード中にエラーが発生しました: {$a}';
$string['footermessage'] = 'またはコンテンツを閲覧する';
$string['forminfo'] = 'あなたのMoodleNetプロファイルIDはこのサイトのあなたのプロファイルに自動的に保存されます。';
$string['importconfirm'] = 'あなたはコンテンツ「 {$a->resourcename} ({$a->resourcetype}) 」をコース「 {$a->coursename} 」にインポートしようとしています。本当に続けてもよろしいですか?';
$string['importconfirmnocourse'] = 'あなたはコンテンツ「 {$a->resourcename} ({$a->resourcetype}) 」をあなたのサイトにインポートしようとしています。本当に続けてもよろしいですか?';
$string['importformatselectguidingtext'] = 'このコンテンツ「 {$a->name} ({$a->type}) 」をあなたのコースにどのフォーマットで追加しますか?';
$string['importformatselectheader'] = 'コンテンツ表示フォーマットを選択する';
$string['inputhelp'] = 'またはすでにあなたのMoodleNetアカウントがある場合、あなたのMoodleNetプロファイルからIDをコピーしてここに貼り付けてください:';
$string['instancedescription'] = 'MoodleNetはオープンリソースの集合体の協同キュレーションに焦点を合わせた教育者のためのオープンソーシャルメディアプラットフォームです。';
$string['instanceplaceholder'] = 'a1b2c3d4e5f6-example@moodle.net';
$string['invalidmoodlenetprofile'] = '$userprofile が正しくフォーマットされていません。';
$string['missinginvalidpostdata'] = 'MoodleNetからのリソース情報が存在しないか、正しくないフォーマットです。これが繰り返し発生する場合、サイト管理者にご連絡ください。';
$string['mnetprofile'] = 'MoodleNetプロファイル';
$string['mnetprofiledesc'] = '<p>あなたのMoodleNet訪問中にあなたのプロファイルにリダイレクトされるMoodleNetプロファイル詳細をここに入力してください。</p>';
$string['moodlenetnotenabled'] = 'リソースインポートを進めるにはサイト管理 / MoodleNetでMoodleNetインテグレーションを有効にする必要があります。';
$string['moodlenetsettings'] = 'MoodleNet内向き設定';
$string['notification'] = 'あなたはコンテンツ「 {$a->name} ({$a->type}) 」をあなたのサイトにインポートしようとしています。コンテンツが追加されるコースを選択するか、<a href="{$a->cancellink}">キャンセル</a>を選択してください。';
$string['pluginname'] = 'MoodleNet';
$string['privacy:metadata'] = 'MoodleNetツールはMoodleNetとの通信を補助するだけです。データは保存しません。';
$string['profilevalidationerror'] = 'あなたのプロファイルIDの検証中に問題が発生しました。';
$string['profilevalidationfail'] = '有効なMoodleNetプロファイルIDを入力してください。';
$string['profilevalidationpass'] = 'いいです!';
$string['removedmnetprofilenotification'] = 'MoodleNetプラットフォームにおける最近の変更により、以前MoodleNetプロファイルIDをサイトに保存していたユーザはMoodleNetプラットフォームで認証するために新しいフォーマットでMoodleNetプロファイルIDを入力する必要があります。';
$string['removedmnetprofilenotification_subject'] = 'MoodleNetプロファイルIDフォーマット変更';
$string['saveandgo'] = '保存して続ける';
$string['searchcourses'] = 'コースを検索する';
$string['selectpagetitle'] = 'ページを選択する';
$string['uploadlimitexceeded'] = 'ファイルサイズ {$a->filesize} がユーザアップロード制限の {$a->uploadlimit} バイトを超えます。';
