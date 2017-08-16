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
 * Strings for component 'atto_accessibilitychecker', language 'ja', branch 'MOODLE_32_STABLE'
 *
 * @package   atto_accessibilitychecker
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['emptytext'] = '空のテキスト';
$string['entiredocument'] = 'ドキュメント全体';
$string['imagesmissingalt'] = 'イメージに代替テキストを必要とします。この警告を修正するにはあなたのimgタグにalt属性を追加してください。空のalt属性が使用されますが、イメージは完全に装飾的であり、情報を伝えることはありません。';
$string['needsmorecontrast'] = '前景および背景テキスト色に十分なコントラストがありません。この警告を修正するには簡単に読めるよう前景または背景テキスト色を変更してください。';
$string['needsmoreheadings'] = 'ヘッディングのないテキストが数多く存在します。ヘッディングはスクリーンリーダユーザのページ間ナビゲートを容易にします。また、すべての人に対してページをさらに使いやすくします。';
$string['nowarnings'] = 'おめでとうございます、アクセシビリティ問題は発見されませんでした!';
$string['pluginname'] = 'アクセシビリティチェッカ';
$string['report'] = 'アクセシビリティレポート:';
$string['tablesmissingcaption'] = 'テーブルにキャプションを付けてください。それぞれのテーブルにキャプションを付ける必要はありませんが、キャプションは一般的に非常に有用です。';
$string['tablesmissingheaders'] = 'テーブルに行およびカラムヘッダを付けてください。';
$string['tableswithmergedcells'] = 'テーブルには結合セルを含まないでください。長年に渡ってテーブルに関する標準的なマークアップですが、スクリーンリーダの中には複雑なテーブルを完全にはサポートしないものもあります。可能であれば、テーブルを「フラット」にして結合セルを避けてください。';
