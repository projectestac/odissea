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
 * Strings for component 'qtype_ddmarker', language 'ja', version '3.11'.
 *
 * @package     qtype_ddmarker
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreitems'] = 'さらに {no} 個の空白のマーカーを追加する';
$string['alttext'] = '代替テキスト';
$string['answer'] = '答え';
$string['bgimage'] = '背景イメージ';
$string['clearwrongparts'] = '間違って置かれたマーカーをイメージの下のデフォルトスタートポジションに戻す';
$string['coords'] = '座標';
$string['correctansweris'] = '正解: {$a}';
$string['draggableimage'] = 'ドラッグ可能イメージ';
$string['draggableitem'] = 'ドラッグ可能アイテム';
$string['draggableitemheader'] = 'ドラッグ可能アイテム {$a}';
$string['draggableitemtype'] = 'タイプ';
$string['draggableword'] = 'ドラッグ可能テキスト';
$string['dropbackground'] = 'マーカーをドラッグするための背景イメージ';
$string['dropzone'] = 'ドロップゾーン {$a}';
$string['dropzoneheader'] = 'ドロップゾーン';
$string['dropzones'] = 'ドロップゾーン';
$string['dropzones_help'] = 'ドロップゾーンは座標または上のプレビューでポジションをドラッグすることにより定義することができます。

最初に形 (円、長方形または多角形) を選択することによりプレビューの上部左側に新しいドロップゾーンの形を追加します。これはあなたがドロップゾーンの編集中にプレビューを表示するためのマーカーセクションの最小化に有用です。

形の編集はプレビュー内の形をクリックして編集ハンドルを表示して始めることができます。あなたは中央ハンドルを使用するか、形の範囲の交点ハンドルで調整することにより形を移動することができます。

多角形のみ交点ハンドルをクリックしている間にCTRLボタン (Macのcommandボタン) を押したままにすることで新しい多角形の交点を追加することができます。線を交差させずに多角形を可能な限りシンプルにしてください。

以下、3つの形での座標の使用に関する情報です:

* 円: 中心_x, 中心_y; 半径<br />例えば次のようになります: <code>80, 100; 50</code>
20, 100</code>
* 長方形: 左, トップ, 幅, 高さ<br />例えば次のようになります: <code>20, 60; 80, 40</code>
* 多角形: x1, y1; x2, y2; ...; xn, yn<br />例えば次のようになります: <code>20,60;100,60;20,100</code>

マーカーテキストを選択することによりプレビューの形にそのテキストを追加します。';
$string['followingarewrong'] = '以下のマーカーは正しくないエリアに置かれました: {$a}';
$string['followingarewrongandhighlighted'] = '次のマーカーは正しくない場所に置かれています : {$a}。ハイライトされたマーカーは正しい場所で表示されています。<br />許可された場所をハイライトするにはマーカーをクリックしてください。';
$string['formerror_nobgimage'] = 'あなたはドラッグ＆ドロップエリアの背景として使用するイメージを選択する必要があります。';
$string['formerror_noitemselected'] = 'あなたはドロップゾーンを指定しましたがゾーンにドラッグする必要のあるマーカーを選択していません。';
$string['formerror_nosemicolons'] = 'あなたの座標ストリングにはセミコロンがありません。あなたの {$a->shape} の座標は次のように記述される必要があります - {$a->coordsstring}。';
$string['formerror_onlysometagsallowed'] = 'マーカーのラベルとして「 {$a} 」タグのみ許可されます。';
$string['formerror_onlyusewholepositivenumbers'] = '形状のxy座標および幅および高さを指定する場合、正の整数のみを使用してください。あなたの {$a->shape} の座標は次のようになります - {$a->coordsstring}。';
$string['formerror_polygonmusthaveatleastthreepoints'] = '多角形の場合、少なくとも3点を指定する必要があります。あなたの {$a->shape} の座標は次のようになります - {$a->coordsstring}。';
$string['formerror_repeatedpoint'] = 'あなたは同じ座標を2回入力しました。それぞれの点はユニークである必要があります。あなたの {$a->shape} の座標は次のようになります - {$a->coordsstring}。';
$string['formerror_shapeoutsideboundsofbgimage'] = 'あなたが定義した形状は背景イメージの境界を越えてしまいます。';
$string['formerror_toomanysemicolons'] = 'あなたが指定した座標の分離部分にセミコロンが使われすぎています。あなたの {$a->shape} の座標は次のようになります - {$a->coordsstring}。';
$string['formerror_unrecognisedwidthheightpart'] = 'あなたが指定した幅および高さを認識できませんでした。あなたの {$a->shape} の座標は次のように記述してください - {$a->coordsstring}';
$string['formerror_unrecognisedxypart'] = 'あなたが指定したxy座標を認識できませんでした。あなたの {$a->shape} の座標は次のように記述してください - {$a->coordsstring}';
$string['infinite'] = '無制限';
$string['marker'] = 'マーカー';
$string['marker_n'] = 'マーカー {no}';
$string['markers'] = 'マーカー';
$string['nolabel'] = 'ラベルテキストなし';
$string['noofdrags'] = 'マーカー数';
$string['pleasedragatleastonemarker'] = 'あなたの解答は完了していません。あなたはイメージに少なくとも1つのマーカーを置く必要があります。';
$string['pluginname'] = 'ドラッグ＆ドロップマーカー';
$string['pluginname_help'] = 'ドラッグ＆ドロップマーカーは背景イメージに定義されたドロップゾーンにテキストラベルをドラッグ＆ドロップするためのレスポンデントを必要とします。';
$string['pluginnameadding'] = 'ドラッグ＆ドロップマーカーの追加';
$string['pluginnameediting'] = 'ドラッグ＆ドロップマーカーの編集';
$string['pluginnamesummary'] = 'マーカーは背景イメージにドラッグ＆ドロップされます。

注意: この問題タイプは視覚に障害のあるユーザは利用できません。';
$string['previewareaheader'] = 'プレビュー';
$string['previewareamessage'] = '背景イメージファイルを選択してマーカーのテキストラベルを入力した後、ドラッグされるための背景イメージのドロップゾーンを定義してください。';
$string['privacy:metadata'] = 'ドラッグ＆ドロップマーカー問題タイププラグインは問題作成者がユーザプリファレンスとしてデフォルトオプションを設定できます。';
$string['privacy:preference:defaultmark'] = '指定された問題に設定されるデフォルトの評点です。';
$string['privacy:preference:penalty'] = '問題が「複数回受験インタラクティブ」または「アダプティブモード」で出題された場合のそれぞれの不正解のペナルティです。';
$string['privacy:preference:shuffleanswers'] = '解答を自動的にシャッフルするかどうか指定します。';
$string['refresh'] = 'プレビューをリフレッシュする';
$string['shape'] = '形状';
$string['shape_circle'] = '円';
$string['shape_circle_coords'] = 'x,y;r (xおよびyは円の中心の座標、rは半径です)';
$string['shape_circle_lowercase'] = '円';
$string['shape_polygon'] = '多角形';
$string['shape_polygon_coords'] = 'x1,y1;x2,y2;x3,y3;x4,y4....(x1, y1は最初の頂点の座標、x2, y2は2番目の頂点の座標です。多角形を閉じるために最初の頂点の座標を繰り返す必要はありません)';
$string['shape_polygon_lowercase'] = '多角形';
$string['shape_rectangle'] = '長方形';
$string['shape_rectangle_coords'] = 'x,y;w,h (x,yは多角形の左上隅の座標、wおよびhは多角形の幅および高さです)';
$string['shape_rectangle_lowercase'] = '長方形';
$string['showmisplaced'] = '正しいマーカーがドロップされていないドロップゾーンをハイライトする';
$string['shuffleimages'] = '問題の受験ごとにドラッグアイテムをシャッフルする';
$string['stateincorrectlyplaced'] = 'どのマーカーが間違って置かれたかを示す';
$string['summariseplace'] = '{$a->no}. {$a->text}';
$string['summariseplaceno'] = 'ドロップゾーン {$a}';
$string['ytop'] = 'トップ';
