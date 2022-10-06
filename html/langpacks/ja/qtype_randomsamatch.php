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
 * Strings for component 'qtype_randomsamatch', language 'ja', branch 'MOODLE_38_STABLE'
 *
 * @package   qtype_randomsamatch
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['insufficientoptions'] = 'この問題において不十分な選択オプションを使用することができます。そのため、この小テスト内では使用できません。あなたの先生に報告してください。';
$string['nosaincategory'] = 'あなたが選択したカテゴリ「 {$a->catname} 」には記述問題がありません。異なるカテゴリを選択するか、このカテゴリ内に問題を作成してください。';
$string['notenoughsaincategory'] = 'あなたが選択したカテゴリ「 {$a->catname} 」には {$a->nosaquestions} 問の問題のみ含まれています。異なるカテゴリを選択してさらに問題を含むようにするか、あなたが設定した選択問題数を減らしてください。';
$string['pluginname'] = 'ランダム記述組み合わせ問題';
$string['pluginnameadding'] = 'ランダム記述組み合わせ問題の追加';
$string['pluginnameediting'] = 'ランダム記述組み合わせ問題の編集';
$string['pluginname_help'] = '学生の視点からこれは組み合わせ問題のように見えます。異なる点は組み合わせのための名称または記述 (問題) 一覧が現在のカテゴリ内の記述問題からランダムに取得されることです。カテゴリ内に十分な未使用の記述問題が必要です。そうでない場合、エラーメッセージが表示されます。';
$string['pluginnamesummary'] = '組み合わせ問題に似ていますが特定のカテゴリ内の記述問題からランダムに作成されます。';
$string['privacy:metadata'] = 'ランダム記述問題タイププラグインはいかなる個人データも保存しません。';
$string['randomsamatch'] = 'ランダム記述組み合わせ';
$string['randomsamatchintro'] = '以下それぞれの問題に関してメニューから合致する答えを選択してください。';
$string['randomsamatchnumber'] = '選択する問題数';
$string['subcats'] = 'カテゴリを含む';
$string['subcats_help'] = 'この設定を有効にした場合、サブカテゴリからも問題が選択されます。';
