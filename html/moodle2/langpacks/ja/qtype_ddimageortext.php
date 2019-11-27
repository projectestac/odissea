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
 * Strings for component 'qtype_ddimageortext', language 'ja', branch 'MOODLE_36_STABLE'
 *
 * @package   qtype_ddimageortext
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoredropzones'] = 'さらに {no} 個の空白のドロップゾーンを追加する';
$string['addmoreimages'] = 'さらに {no} 個の空白のドラッグ可能アイテムを追加する';
$string['answer'] = '解答';
$string['bgimage'] = '背景イメージ';
$string['blank'] = '空白';
$string['correctansweris'] = '正解: {$a}';
$string['deletedchoice'] = '[削除済み選択肢]';
$string['draggableimage'] = 'ドラッグ可能イメージ';
$string['draggableitem'] = 'ドラッグ可能アイテム';
$string['draggableitemheader'] = 'ドラッグ可能アイテム {$a}';
$string['draggableitems'] = 'ドラッグ可能アイテム';
$string['draggableitemtype'] = 'タイプ';
$string['draggableword'] = 'ドラッグ可能テキスト';
$string['dropbackground'] = 'マーカーをドラッグするための背景イメージ';
$string['dropzone'] = 'ドロップゾーン {$a}';
$string['dropzoneheader'] = 'ドロップゾーン';
$string['formerror_disallowedtags'] = 'このドラッグ可能テキストでは {$a} タグのみ許可されます。';
$string['formerror_multipledraginstance'] = 'あなたはドロップゾーンの正解の選択肢としてこのイメージ {$a} を1回選択しましたが無制限のドラッグアイテムとしてマークされていません。';
$string['formerror_multipledraginstance2'] = 'あなたはドロップゾーンの正解の選択肢としてこのイメージを1回以上選択しましたが、無制限のドラッグアイテムとしてマークされていません。';
$string['formerror_noallowedtags'] = 'このテキストにはドラッグ可能イメージの代替テキストとしてHTMLタグは許可されていません。';
$string['formerror_nobgimage'] = 'あなたはドラッグ＆ドロップエリアの背景として使用するイメージを選択する必要があります。';
$string['formerror_nofile'] = 'あなたはここで使用するファイルをアップロードまたは選択する必要があります。';
$string['formerror_nofile3'] = 'あなたはここでイメージファイルを選択するか関連ラベルを削除して無制限チェックボックスを解除する必要があります。';
$string['formerror_noimageselected'] = 'あなたはこのドロップゾーンの正解の選択肢のためにドラッグアイテムを選択する必要があります。';
$string['formerror_notintxleft'] = 'x座標は整数である必要があります。';
$string['formerror_notintytop'] = 'y座標は整数である必要があります。';
$string['formerror_noxleft'] = 'あなたはこのドロップエリアの左上隅のx座標の値を提供する必要があります。あなたは座標を設定するために上のドロップエリアにドラッグ＆ドロップするか、ここに手動入力することができます。';
$string['formerror_noytop'] = 'あなたはこのドロップエリアの左上隅のy座標の値を提供する必要があります。あなたは座標を設定するために上のドロップエリアにドラッグ＆ドロップするか、ここに手動入力することができます。';
$string['infinite'] = '無制限';
$string['label'] = 'テキスト';
$string['nolabel'] = 'ラベルテキストなし';
$string['pleasedraganimagetoeachdropregion'] = 'あなたの解答は完了していません。それぞれのドロップエリアにアイテムをドラッグしてください。';
$string['pluginname'] = 'ドラッグ＆ドロップイメージ';
$string['pluginnameadding'] = 'ドラッグ＆ドロップイメージの追加';
$string['pluginnameediting'] = 'ドラッグ＆ドロップイメージの編集';
$string['pluginname_help'] = 'ドラッグ＆ドロップイメージ問題は背景イメージに定義されたドロップゾーンにイメージまたはテキストラベルをドラッグ＆ドロップするためのレスポンデントを必要とします。ドラッグ可能アイテムは特定のグループ内アイテムすべてをドロップゾーンで同じ色にするためにグループ分けすることができます。無制限にマークされたドラッグ可能アイテムは2つの以上のゾーンにドロップすることができます。';
$string['pluginnamesummary'] = 'イメージまたはテキストラベルを背景イメージのドロップゾーンにドラッグ＆ドロップします。';
$string['previewareaheader'] = 'プレビュー';
$string['previewareamessage'] = '背景イメージを選択してドラッグ可能イメージ指定した後、ドラッグするための背景イメージのドロップゾーンを定義してください。';
$string['privacy:metadata'] = 'ドラッグ＆ドロップイメージ問題タイププラグインはいかなる個人データも保存しません。';
$string['refresh'] = 'プレビューをリフレッシュする';
$string['shuffleimages'] = '問題の受験ごとにドラッグアイテムをシャッフルする';
$string['summarisechoice'] = '{$a->no}. {$a->text}';
$string['summarisechoiceno'] = 'アイテム {$a}';
$string['summariseplace'] = '{$a->no}. {$a->text}';
$string['summariseplaceno'] = 'ドロップゾーン {$a}';
$string['xleft'] = '左';
$string['ytop'] = 'トップ';
