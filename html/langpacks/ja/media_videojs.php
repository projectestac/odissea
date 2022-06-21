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
 * Strings for component 'media_videojs', language 'ja', version '3.11'.
 *
 * @package     media_videojs
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['audiocssclass'] = 'オーディオ用CSSクラス';
$string['audioextensions'] = 'オーディオファイル拡張子';
$string['configaudiocssclass'] = '「&lt;audio&gt;」エレメントに追加されるCSSクラスです。';
$string['configaudioextensions'] = 'サポートされるオーディオファイル拡張子のカンマ区切りリストです。利用可能な場合、VideoJSはブラウザネイティブのビデオプレイヤまたはネイティブのVideoJS機能を使用します。ブラウザでFlashがサポートされてFlashフォールバックが以下で有効にされている場合、他のフォーマットではFlashプレイヤに戻ります。';
$string['configlimitsize'] = 'この設定が有効にされた場合、そしてビデオの幅および高さが指定されていない場合、デフォルトの幅および高さで表示します。そうでない場合、可能な最大幅に広げられます。';
$string['configrtmp'] = 'この設定を有効にした場合、サポートされるビデオファイル拡張子 (videoextensions) の設定にかかわらず、rtmp://から始まるリンクはプラグインによって処理されます。RTMPが動作するためにはFlashフォールバックを有効にする必要があります。';
$string['configuseflash'] = 'ビデオフォーマットがブラウザでネイティブにサポートされない場合、またはVideoJSプレイヤでネイティブにサポートされない場合、Flashプレイヤを使用します。この設定が有効にされた場合、VideoJSはブラウザのチェックなしに上のリストの拡張子を基に動作します。Flashはモバイルブラウザで使用できない点、多くのデスクトップブラウザで推奨されない点に留意してください。';
$string['configvideocssclass'] = '「&lt;video&gt;」エレメントに追加されるCSSクラスです。例えばCSSクラス「vjs-big-play-centered」は中央に再生ボタンを設置します。カスタムスキンの設定を含む詳細はdocs.videojs.comをご覧ください。';
$string['configvideoextensions'] = 'サポートされるビデオファイル拡張子のカンマ区切り一覧です。利用可能な場合、VideoJSはブラウザのネイティブビデオプレイヤを使用します。ブラウザでFlashがサポートされてFlashフォールバックが以下で有効にされている場合、他のフォーマットではFlashプレイヤに戻ります。';
$string['configyoutube'] = 'YouTubeビデオの再生にVideo.JSを使用します。Video.JSはYouTubeプレイリストをまだサポートしていないことに留意してください。';
$string['limitsize'] = 'サイズを制限する';
$string['pluginname'] = 'VideoJSプレイヤ';
$string['pluginname_help'] = 'Flashプレイヤのフォールバックでビデオファイルが再生される場合のブラウザのネイティブビデオプレイヤ用Javaスクリプトラッパです (フォーマットのサポートはブラウザに依存します)。';
$string['privacy:metadata'] = 'VideoJSプレイヤメディアプラグインはいかなる個人データも保存しません。';
$string['rtmp'] = 'RTMPストリーム';
$string['useflash'] = 'Flashフォールバックを使用する';
$string['videocssclass'] = 'ビデオ用CSSクラス';
$string['videoextensions'] = 'ビデオファイル拡張子';
$string['youtube'] = 'YouTubeビデオ';
