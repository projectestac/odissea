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
 * Strings for component 'tool_behat', language 'ja', version '3.11'.
 *
 * @package     tool_behat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aim'] = 'この管理ツールは開発者およびテスト作成者のMoodle機能が記述された.featureファイル作成に役立ちします。.featureファイルは自動実行されます。.featureファイルで使用できるステップ定義を以下に一覧表示します。';
$string['allavailablesteps'] = 'すべての利用可能なステップ定義';
$string['errorapproot'] = '$CFG->behat_ionic_dirrootは有効なMoodleアプリ開発者インストールを指定していません。';
$string['errorbehatcommand'] = 'behat CLIコマンドの実行中にエラーが発生しました。CLIで「{$a} --help」を手動実行して問題を調査してください。';
$string['errorcomposer'] = 'Composer依存関係がインストールされていません。';
$string['errordataroot'] = '$CFG->behat_datarootが設定されていないか有効ではありません。';
$string['errorsetconfig'] = 'config.php内で「$CFG->behat_dataroot」「$CFG->behat_prefix」および「$CFG->behat_wwwroot」を設定する必要があります。';
$string['erroruniqueconfig'] = '「$CFG->behat_dataroot」「$CFG->behat_prefix」および「$CFG->behat_wwwroot」の値は「$CFG->dataroot」「$CFG->prefix」「$CFG->wwwroot」「$CFG->phpunit_dataroot」および「$CFG->phpunit_prefix」の値と異なる必要があります。';
$string['fieldvalueargument'] = 'フィールド値変数';
$string['fieldvalueargument_help'] = 'この変数にはフィールド値を設定してください。シンプルなチェックボックス、テキストエリア、セレクトまたは複雑な日付選択を含む数多くのフィールドタイプがあります。期待されるフィールド値の詳細に関して<a href="https://docs.moodle.org/dev/Acceptance_testing" target="_blank">Acceptance_testing</a>をご覧ください。';
$string['giveninfo'] = 'Given - 環境セットアップ作業';
$string['infoheading'] = '情報';
$string['installinfo'] = 'インストールおよびテスト実行情報に関して {$a} をご覧ください。';
$string['newstepsinfo'] = '新しいステップ定義の追加に関して {$a} をご覧ください。';
$string['newtestsinfo'] = '新しいテストの記述に関して {$a} をご覧ください。';
$string['nostepsdefinitions'] = 'このフィルタに合致するステップ定義はありません。';
$string['pluginname'] = '受け入れテスト';
$string['privacy:metadata'] = '受け入れテストプラグインはいかなる個人データも保存しません。';
$string['stepsdefinitionscomponent'] = 'エリア';
$string['stepsdefinitionscontains'] = '含む';
$string['stepsdefinitionsfilters'] = 'ステップ定義';
$string['stepsdefinitionstype'] = 'タイプ';
$string['theninfo'] = 'Then - アウトカムが期待された結果であることを確認する';
$string['unknownexceptioninfo'] = 'Seleniumまたはブラウザに問題が発生しました。あなたが最新バージョンのSeleniumを使用していることを確認してください。エラー:';
$string['viewsteps'] = 'フィルタ';
$string['warndirrootconfigfound'] = '{$a} で設定ファイルが見つかりました。このファイルは自動的に更新されていないため 最新ではなくなります。私たちはこのファイルの削除をお勧めします。';
$string['wheninfo'] = 'When - イベントを発生させるアクション';
$string['wrongbehatsetup'] = 'behatセットアップに問題が生じたため、ステップ定義を一覧表示できませんでした: <b>{$a->errormsg}</b><br /><br />確認してください:<ul>
<li>config.php内で「$CFG->behat_dataroot」「$CFG->behat_prefix」および「$CFG->behat_wwwroot」に「$CFG->dataroot」「$CFG->prefix」および「$CFG->wwwroot」とは異なる値が設定されている。</li>
<li>あなたのMoodleディレクトリから「{$a->behatinit}」を実行した。</li>
<li>ベンダにより依存関係がインストールされ {$a->behatcommand} ファイルに実行権限が与えられている。</li></ul>';
