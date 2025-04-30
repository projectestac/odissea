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
 * Strings for component 'tiny_filterws', language 'ja', version '4.4'.
 *
 * @package     tiny_filterws
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfilterws'] = 'ウェブサービスフィルタタグを追加する';
$string['apply'] = '適用';
$string['filteruseragent'] = 'ユーザエージェントでフィルタする';
$string['filteruseragent_help'] = '値が指定された場合、選択されたコンテンツはユーザエージェントにこの値が含まれている場合のみ表示されます。値は正規表現に変換されます。';
$string['insert'] = '挿入';
$string['insertfilterws'] = 'ウェブサービスフィルタを挿入する';
$string['origin'] = 'オリジン';
$string['origin_help'] = 'ウェブ: ブラウザでのみ表示します。
<br>
ウェブサービス: Moodleアプリのようなウェブサービスクライアントでのみ表示します。
<br>
すべて: すべてのオリジンに対して表示します。';
$string['originany'] = 'すべて';
$string['originweb'] = 'ウェブ';
$string['originws'] = 'ウェブサービス';
$string['pluginname'] = 'TinyMCEウェブサービスフィルタ';
$string['predefined'] = '事前定義フィルタ';
$string['predefined_desc'] = 'すべてのユーザがTinyMCEエディタを使用する際に使用できる定義済みフィルタのリストです。

それぞれのフィルタを新しい行にパイプ文字 (|)で区切った次のフォーマットで入力してください: 表示名, オリジン (web, wsまたはany), ユーザエージェント(任意) 例えば次のようになります:
<pre>
    Moodle App|ws|MoodleMobile
</pre>';
$string['privacy:metadata'] = 'tiny_filterwsプラグインはいかなる個人データも保存しません。';
$string['settings'] = 'ウェブサービスフィルタ設定';
