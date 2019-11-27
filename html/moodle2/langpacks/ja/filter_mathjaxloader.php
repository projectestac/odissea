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
 * Strings for component 'filter_mathjaxloader', language 'ja', branch 'MOODLE_36_STABLE'
 *
 * @package   filter_mathjaxloader
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionaldelimiters'] = '追加数式デリミタ';
$string['additionaldelimiters_help'] = 'MathJaxフィルタはデリミタ文字内に含まれる数式を構文解析します。

認められるデリミタ文字をここに追加することができます (例 AsciiMathは「`」を使用します)。デリミタには複数文字を含むことができます。また、複数デリミタをカンマで区切ることもできます。';
$string['filtername'] = 'MathJax';
$string['httpsurl'] = 'MathJax URL';
$string['httpsurl_help'] = 'MathJaxライブラリのフルURLです。';
$string['localinstall'] = 'ローカルMathJaxインストレーション';
$string['localinstall_help'] = 'デフォルトのMathJax設定ではCDNバージョンのMathJaxを使用しますが、必要であればローカルにMathJaxをインストールすることもできます。

これは帯域幅の節約またはローカルプロキシの制限に対して有用です。

MathJaxのローカルインストレーションを使用するには最初に「https://www.mathjax.org/」から完全なMathJaxライブラリをダウンロードしてください。それからウェブサーバにインストールしてください。最後にローカルのMathJax.js URLを指すため、MathJaxフィルタ設定「httpurl」および「httpsurl」を更新してください。';
$string['mathjaxsettings'] = 'MathJax設定';
$string['mathjaxsettings_desc'] = 'ほとんどのユーザに対してMathJaxデフォルト設定は適切ですが、MathJaxは高度に設定可能であり標準MathJax設定オプションをここでどれでも追加することができます。';
$string['privacy:metadata'] = 'MathJaxプラグインはいかなる個人データも保存しません。';
$string['texfiltercompatibility'] = 'TeXフィルタ互換性';
$string['texfiltercompatibility_help'] = 'TeX表記法フィルタの代わりにMathJaxフィルタを使用することができます。

TeX表記法フィルタで使用されるデリミタすべてをサポートするため、MathJaxはすべての数式をテキストに「インライン」表示するよう設定されます。';
