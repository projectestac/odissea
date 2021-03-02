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
 * Strings for component 'qformat_webct', language 'ja', version '3.8'.
 *
 * @package     qformat_webct
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['errorsdetected'] = '{$a} 件のエラーが検出されました。';
$string['missinganswer'] = '{$a} 行目の問題文に「:ANSWER」「:Lx」「:Rx」の記述が少なすぎます。あなたは少なくとも2つの考えられる答えを定義する必要があります。';
$string['missingquestion'] = '{$a} 行目の後に問題ラベルがありません。';
$string['pluginname'] = 'WebCTフォーマット';
$string['pluginname_help'] = 'WebCTフォーマットではWebCTテキストベースフォーマットで保存された多肢選択問題および記述問題をインポートすることができます。';
$string['privacy:metadata'] = 'WebCT問題フォーマットプラグインはいかなる個人データも保存しません。';
$string['questionnametoolong'] = '{$a} 行目の問題名が長すぎます (最大半角255文字)。問題名は省略されました。';
$string['unknowntype'] = '{$a} 行目以後に不明な問題タイプがあります。';
$string['warningsdetected'] = '{$a} 件の警告が見つかりました。';
$string['wronggrade'] = '正しくない評点 ({$a} 行目の後) :';
