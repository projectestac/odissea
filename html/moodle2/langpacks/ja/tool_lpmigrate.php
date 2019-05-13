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
 * Strings for component 'tool_lpmigrate', language 'ja', branch 'MOODLE_34_STABLE'
 *
 * @package   tool_lpmigrate
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedcourses'] = '許可されたコース';
$string['allowedcourses_help'] = '新しいフレームワークに移行するコースを選択してください。コースが指定されない場合、すべてのコースが移行されます。';
$string['continuetoframeworks'] = 'フレームワークを続ける';
$string['coursecompetencymigrations'] = 'コースコンピテンシー移行';
$string['coursemodulecompetencymigrations'] = 'コース活動およびリソースのコンピテンシー移行';
$string['coursemodulesfound'] = 'コース活動またはリソースが見つかりました。';
$string['coursesfound'] = 'コースは見つかりませんでした。';
$string['coursestartdate'] = 'コース開始日';
$string['coursestartdate_help'] = 'この設定を有効にした場合、ここで指定された開始日以前のコースは移行されません。';
$string['disallowedcourses'] = '未許可のコース';
$string['disallowedcourses_help'] = '新しいフレームワークに移行しないコースを選択してください。';
$string['errorcannotmigratetosameframework'] = '同一フレームワークに移行することはできません。';
$string['errorcouldnotmapcompetenciesinframework'] = 'フレームワーク内でコンピテンシーにマップできませんでした。';
$string['errors'] = 'エラー';
$string['errorwhilemigratingcoursecompetencywithexception'] = 'コースコンピテンシー移行中にエラーが発生しました: {$a}';
$string['errorwhilemigratingmodulecompetencywithexception'] = '活動またはリソースコンピテンシー移行中にエラーが発生しました: {$a}';
$string['excludethese'] = 'これらを除く';
$string['explanation'] = 'このツールはコンピテンシーフレームワークを新しいバージョンに更新するために使用することができます。これは古いフレームワークを使用してコースおよび活動内のコンピテンシーを検索した上で新しいフレームワークを指すようリンクを更新します。

すでにユーザの学習プラン内で付与されたコンピテンシーすべてを変更することになるため、一連の古いコンピテンシーを直接編集することはお勧めできません。

一般的にあなたは新しいバージョンのフレームワークをインポートして古いフレームワークを隠した後、新しいコースを新しいフレームワークに移行するためにこのツールを使用するでしょう。';
$string['findingcoursecompetencies'] = 'コースコンピテンシー検索';
$string['findingmodulecompetencies'] = '活動およびリソースのコンピテンシー検索';
$string['frameworks'] = 'フレームワーク';
$string['limittothese'] = 'これらに制限する';
$string['lpmigrate:frameworksmigrate'] = 'フレームワークを移行する';
$string['migrateframeworks'] = 'フレームワークを移行する';
$string['migratefrom'] = '移行元';
$string['migratefrom_help'] = '現在使用中の古いフレームワークを選択してください。';
$string['migratemore'] = 'さらに移行する';
$string['migrateto'] = '移行先';
$string['migrateto_help'] = '新しいバージョンのフレームワークを選択してください。非表示ではないフレームワークのみ選択することができます。';
$string['migratingcourses'] = 'コース移行';
$string['missingmappings'] = '不明マッピング';
$string['performmigration'] = '移行を実行する';
$string['pluginname'] = 'コンピテンシー移行ツール';
$string['privacy:metadata'] = 'コンピテンシー移行ツールプラグインはどのような個人データも保存しません。';
$string['results'] = '結果';
$string['startdatefrom'] = '開始日';
$string['unmappedin'] = '{$a} 内でのマップ解除';
$string['warningcouldnotremovecoursecompetency'] = 'コースコンピテンシーを削除することができませんでした。';
$string['warningcouldnotremovemodulecompetency'] = '活動またはリソースのコンピテンシーを削除することができませんでした。';
$string['warningdestinationcoursecompetencyalreadyexists'] = '宛先のコースコンピテンシーはすでに存在します。';
$string['warningdestinationmodulecompetencyalreadyexists'] = '宛先の活動またはリソースのコンピテンシーはすでに存在します。';
$string['warnings'] = '警告';
