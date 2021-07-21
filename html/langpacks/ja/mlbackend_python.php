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
 * Strings for component 'mlbackend_python', language 'ja', version '3.11'.
 *
 * @package     mlbackend_python
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['errornoconfigdata'] = 'サーバ設定が完了していません。';
$string['errorserver'] = 'サーバエラー {$a}';
$string['host'] = 'ホスト';
$string['hostdesc'] = 'ホスト';
$string['packageinstalledshouldbe'] = 'moodlemlbackend pythonパッケージを更新してください。要求されるバージョンは「 {$a->required} 」です。インストールされているバージョンは「 {$a->installed} 」です。';
$string['packageinstalledtoohigh'] = 'moodlemlbackend PythonパッケージはこのMoodleバージョンとの互換性がありません。APIに互換性がある限り必須バージョンは「 {$a->required} 」またはそれ
以上です。インストール済みのバージョン「 {$a->installed} 」は高過ぎます。';
$string['password'] = 'パスワード';
$string['passworddesc'] = 'MoodleサーバとPythonサーバ間の通信のためのパスワードに使用される文字列です。';
$string['pluginname'] = 'Python機械学習バックエンド';
$string['port'] = 'ポート';
$string['portdesc'] = 'ポート';
$string['privacy:metadata'] = 'Python機械学習バックエンドプラグインはいかなる個人データも保存しません。';
$string['pythonpackagenotinstalled'] = 'moodlemlbackend pythonパッケージがインストールされていないか問題があります。詳細はコマンドラインインターフェースより「 {$a} 」を実行してください。';
$string['pythonpathnotdefined'] = 'あなたのPython実行バイナリのパスが指定されていません。設定するには「 {$a} 」にアクセスしてください。';
$string['secure'] = 'HTTPSを使用する';
$string['securedesc'] = 'HTTPまたはHTTPSの使用を指定します。';
$string['serversettingsinfo'] = '「サーバを使用する」が有効にされた場合、サーバ設定が表示されます。';
$string['tensorboardinfo'] = 'あなたのウェブサーバのコマンドラインで「tensorboard --logdir=\'{$a}\'」と入力してTensorBoardを起動してください。';
$string['username'] = 'ユーザ名';
$string['usernamedesc'] = 'MoodleサーバとPythonサーバ間の通信のためのユーザ名に使用される文字列です。';
$string['useserver'] = 'サーバを使用する';
$string['useserverdesc'] = '機械学習バックエンドPythonパッケージがウェブサーバではなく別のサーバにインストールされています。';
