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
 * Strings for component 'tool_lpmigrate', language 'ja', version '4.4'.
 *
 * @package     tool_lpmigrate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedcourses'] = '許可されたコース';
$string['allowedcourses_help'] = '新しいフレームワークに移行するコースを選択してください。コースが指定されない場合、すべてのコースが移行されます。';
$string['continuetoframeworks'] = 'フレームワークを続ける';
$string['coursecompetencymigrations'] = 'コースコンピテンシ移行';
$string['coursemodulecompetencymigrations'] = 'コース活動およびリソースのコンピテンシ移行';
$string['coursemodulesfound'] = 'コース活動またはリソースが見つかりました。';
$string['coursesfound'] = 'コースは見つかりませんでした。';
$string['coursestartdate'] = 'コース開始日';
$string['coursestartdate_help'] = 'この設定を有効にした場合、ここで指定された開始日以前のコースは移行されません。';
$string['disallowedcourses'] = '未許可のコース';
$string['disallowedcourses_help'] = '新しいフレームワークに移行しないコースを選択してください。';
$string['errorcannotmigratetosameframework'] = '同一フレームワークに移行することはできません。';
$string['errorcouldnotmapcompetenciesinframework'] = 'フレームワーク内でコンピテンシにマップできませんでした。';
$string['errors'] = 'エラー';
$string['errorwhilemigratingcoursecompetencywithexception'] = 'コースコンピテンシ移行中にエラーが発生しました: {$a}';
$string['errorwhilemigratingmodulecompetencywithexception'] = '活動またはリソースコンピテンシ移行中にエラーが発生しました: {$a}';
$string['excludethese'] = 'これらを除く';
$string['explanation'] = 'このツールはコンピテンシフレームワークを新しいバージョンに更新するために使用することができます。これは古いフレームワークを使用してコースおよび活動内のコンピテンシを検索した上で新しいフレームワークを指すようリンクを更新します。

すでにユーザの学習プラン内で付与されたコンピテンシすべてを変更することになるため、一連の古いコンピテンシを直接編集することはお勧めできません。

一般的にあなたは新しいバージョンのフレームワークをインポートして古いフレームワークを隠した後、新しいコースを新しいフレームワークに移行するためにこのツールを使用するでしょう。';
$string['findingcoursecompetencies'] = 'コースコンピテンシ検索';
$string['findingmodulecompetencies'] = '活動およびリソースのコンピテンシ検索';
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
$string['pluginname'] = 'コンピテンシ移行ツール';
$string['privacy:metadata'] = 'コンピテンシ移行ツールプラグインはいかなる個人データも保存しません。';
$string['results'] = '結果';
$string['startdatefrom'] = '開始日';
$string['unmappedin'] = '{$a} 内でのマップ解除';
$string['warningcouldnotremovecoursecompetency'] = 'コースコンピテンシを削除することができませんでした。';
$string['warningcouldnotremovemodulecompetency'] = '活動またはリソースのコンピテンシを削除することができませんでした。';
$string['warningdestinationcoursecompetencyalreadyexists'] = '宛先のコースコンピテンシはすでに存在します。';
$string['warningdestinationmodulecompetencyalreadyexists'] = '宛先の活動またはリソースのコンピテンシはすでに存在します。';
$string['warnings'] = '警告';
