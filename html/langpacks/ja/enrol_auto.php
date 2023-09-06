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
 * Strings for component 'enrol_auto', language 'ja', version '4.1'.
 *
 * @package     enrol_auto
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auto:config'] = '自動登録インスタンスを設定する';
$string['auto:manage'] = '登録済みユーザを管理する';
$string['auto:unenrol'] = 'ユーザをコースから登録解除する';
$string['auto:unenrolself'] = '自分をコースから登録解除する';
$string['courseview'] = 'コースの閲覧';
$string['customwelcomemessage'] = 'カスタムウェルカムメッセージ';
$string['customwelcomemessage_help'] = 'カスタムウェルカムメッセージはプレインテキストまたはHTMLタグおよびmulti-langタグを含むMoodleオートフォーマットで追加することができます。

次のプレースホルダをメッセージに含むことができます:

* コース名 {$a->coursename}
* ユーザプロファイルページへのリンク {$a->profileurl}';
$string['defaultrole'] = 'デフォルトロール割り当て';
$string['defaultrole_desc'] = '自動登録時にユーザに割り当てられるロールを選択してください。';
$string['editenrolment'] = '登録を編集する';
$string['enrolon'] = '次の場合に登録する';
$string['enrolon_desc'] = '自動登録を動作させるイベントです。';
$string['enrolon_help'] = '自動登録を動作させるイベントを選択してください。

**コースの閲覧** -  コースの閲覧によりユーザを登録します。<br />

**ユーザログイン** - ユーザのログイン直後にユーザを登録します。<br />

**コース活動/リソースの閲覧** - 選択された活動/リソースの1つが閲覧された時点でユーザを登録します。<br />
*注意:* このオプションはゲストアクセス登録インスタンスを必要とします。';
$string['modview'] = 'コース活動/リソースの閲覧';
$string['modviewmods'] = '活動/リソース';
$string['modviewmods_desc'] = '選択されたリソース/活動を閲覧した時点で自動登録が動作します。';
$string['pluginname'] = '自動登録';
$string['pluginname_desc'] = '自動登録プラグインはコース/活動/リソースの閲覧によりユーザを自動的に登録します。';
$string['requirepassword'] = '登録キーを要求する';
$string['requirepassword_desc'] = '新しいコースで登録キーを要求して既存のコースからの登録キーの削除を防ぎます。';
$string['role'] = 'デフォルトで割り当てられるロール';
$string['sendcoursewelcomemessage'] = 'コースウェルカムメッセージを送信する';
$string['sendcoursewelcomemessage_help'] = 'この設定を有効にした場合、ユーザが自動登録時にウェルカムメッセージをメールで受信します。';
$string['status'] = '自動登録を許可する';
$string['status_desc'] = 'デフォルトでコースへのユーザ自動登録を許可します。';
$string['status_help'] = 'この設定によりこのコースで自動登録プラグインを有効にするかどうか決定します。';
$string['unenrol'] = 'ユーザを登録解除する';
$string['unenrolselfconfirm'] = '本当にあなた自身をコース「 {$a} 」から登録解除してもよろしいですか?';
$string['unenroluser'] = '本当に「 {$a->user} 」をコース「 {$a->course} 」から登録解除してもよろしいですか?';
$string['userlogin'] = 'ユーザログイン';
$string['welcometocourse'] = '{$a} へようこそ';
$string['welcometocoursetext'] = '{$a->coursename} へようこそ!

あなたがまだプロファイルページの編集を完了していない場合、私たちがあなたのことを知ることができるよう編集してください:

{$a->profileurl}';
