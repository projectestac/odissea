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
 * Strings for component 'tool_behat', language 'ja', branch 'MOODLE_32_STABLE'
 *
 * @package   tool_behat
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aim'] = 'この管理ツールは開発者およびテスト作成者の.featureファイル作成に役立ちします。.featureファイルにはMoodle機能および機能の自動実行を記述します。.featureファイルで使用できるステップ定義は以下に一覧表示されます。';
$string['allavailablesteps'] = 'すべての利用可能なステップ定義';
$string['errorbehatcommand'] = 'behat CLIコマンドの実行中にエラーが発生しました。手動によりCLIで「{$a} --help」を実行して、問題を調査してください。';
$string['errorcomposer'] = 'Composer依存関係がインストールされていません。';
$string['errordataroot'] = '「$CFG->behat_dataroot」が設定されていないか、有効ではありません。';
$string['errorsetconfig'] = 'config.php内で「$CFG->behat_dataroot」「$CFG->behat_prefix」および「$CFG->behat_wwwroot」を設定する必要があります。';
$string['erroruniqueconfig'] = '「$CFG->behat_dataroot」「$CFG->behat_prefix」および「$CFG->behat_wwwroot」の値は「$CFG->dataroot」「$CFG->prefix」「$CFG->wwwroot」「$CFG->phpunit_dataroot」および「$CFG->phpunit_prefix」の値と異なる必要があります。';
$string['fieldvalueargument'] = 'フィールド値変数';
$string['fieldvalueargument_help'] = 'この変数にはフィールド値を設定してください。シンプルなチェックボックス、テキストエリア、セレクトまたは複雑な日付選択のような数多くのフィールドタイプがあります。あなたは提供するフィールドタイプに応じて期待されるフィールド値を確認するため、<a href="http://docs.moodle.org/dev/Acceptance_testing#Providing_values_to_steps" target="_blank">フィールド値</a>を閲覧することができます。';
$string['giveninfo'] = 'Given - 環境セットアップ作業';
$string['infoheading'] = '情報';
$string['installinfo'] = 'インストールおよびテスト実行情報に関して、{$a} をご覧ください。';
$string['newstepsinfo'] = '新しいステップ定義の追加に関して、{$a} をご覧ください。';
$string['newtestsinfo'] = '新しいテストの記述に関して、{$a} をご覧ください。';
$string['nostepsdefinitions'] = 'このフィルタに合致するステップ定義はありません。';
$string['pluginname'] = '受け入れテスト';
$string['stepsdefinitionscomponent'] = 'エリア';
$string['stepsdefinitionscontains'] = '含む';
$string['stepsdefinitionsfilters'] = 'ステップ定義';
$string['stepsdefinitionstype'] = 'タイプ';
$string['theninfo'] = 'Then - アウトカムが期待された結果であることを確認する';
$string['unknownexceptioninfo'] = 'Seleniumまたはブラウザに問題が発生しました。あなたが最新バージョンのSeleniumを使用していることを確認してください。エラー:';
$string['viewsteps'] = 'フィルタ';
$string['wheninfo'] = 'When - イベントを発生させるアクション';
$string['wrongbehatsetup'] = 'behatセットアップに問題が生じたため、ステップ定義を一覧表示できませんでした: <b>{$a->errormsg}</b><br /><br />確認してください:<ul>
<li>config.php内で「$CFG->behat_dataroot」「$CFG->behat_prefix」および「$CFG->behat_wwwroot」に「$CFG->dataroot」「$CFG->prefix」および「$CFG->wwwroot」とは異なる値が設定されている。</li>
<li>あなたのMoodleディレクトリから「{$a->behatinit}」を実行した。</li>
<li>ベンダにより依存関係がインストールされ、{$a->behatcommand} ファイルに実行権限が与えられている。</li></ul>';
