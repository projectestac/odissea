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
 * Strings for component 'gradeimport_xml', language 'ja', version '4.4'.
 *
 * @package     gradeimport_xml
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['errbadxmlformat'] = 'エラー - 不正なXMLフォーマットです。';
$string['errduplicategradeidnumber'] = 'エラー - このコースのIDナンバ「 {$a} 」には2つの評定項目があります。インポートすることはできません。';
$string['errduplicateidnumber'] = 'エラー - IDナンバが重複しています。';
$string['errincorrectgradeidnumber'] = 'エラー - インポートファイルのIDナンバ「 {$a} 」がどの評定項目とも合致しません。';
$string['errincorrectidnumber'] = 'エラー - IDナンバが正しくありません。';
$string['errincorrectuseridnumber'] = 'エラー - インポートファイルのIDナンバ「 {$a} 」がどのユーザとも合致しません。';
$string['error'] = 'エラーが発生しました。';
$string['errorduringimport'] = 'インポート中にエラーが発生しました: {$a}';
$string['fileurl'] = 'リモートファイルURL';
$string['fileurl_help'] = 'リモートファイルURLフィールドは学生情報システム等のリモートサーバからデータを取得するためのものです。';
$string['importxml'] = 'XMLインポート';
$string['importxml_help'] = '評定はユーザIDナンバおよび活動IDナンバを含むXMLファイルによりインポートすることができます。正しいフォーマットを取得するには最初にXMLファイルに評定をエクスポートしてファイルを確認してください。';
$string['importxml_link'] = 'grade/import/xml/index';
$string['pluginname'] = 'XMLファイル';
$string['privacy:metadata'] = 'XMLから評定をインポートするプラグインはいかなる個人データも保存しません。';
$string['xml:publish'] = 'XMLからの評定インポートを公開する';
$string['xml:view'] = 'XMLから評定をインポートする';
