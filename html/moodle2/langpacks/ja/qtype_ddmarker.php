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
 * Strings for component 'qtype_ddmarker', language 'ja', branch 'MOODLE_28_STABLE'
 *
 * @package   qtype_ddmarker
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreitems'] = 'さらに {no} 件の空白のマーカーを追加する';
$string['alttext'] = '代替テキスト';
$string['answer'] = '答え';
$string['bgimage'] = '背景イメージ';
$string['clearwrongparts'] = '間違って置かれたマーカーをイメージのデフォルトスタートポジションに戻す';
$string['confirmimagetargetconversion'] = 'あなたは上記のイメージターゲット問題をドラッグ＆ドロップマーカー問題タイプに変換しようとしています。';
$string['convertingimagetargetquestion'] = '変換済み問題「 {$a->name} 」';
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
$string['dropzones_help'] = '座標を入力することによりドラッグゾーンを定義することができます。あなたが入力した場合、上のプレビューがすぐに更新されるため、試行錯誤しながら配置することができます。

* 円: 中心_x, 中心_y; 半径<br>例えば次のようになります: <code>80, 100; 50</code>
* 多角形: x1, y1; x2, y2; ...; xn, yn<br>例えば次のようになります: <code>20, 60; 100, 60; 20, 100</code>
* 長方形: 左, トップ, 幅, 高さ<br>例えば次のようになります: <code>20, 60; 80, 40</code>';
$string['followingarewrong'] = '以下のマーカーは正しくないエリアに置かれました: {$a}';
$string['followingarewrongandhighlighted'] = '次のマーカーは正しくない場所に置かれています : {$a}。ハイライトされたマーカーは正しい場所と一緒に表示されています。<br />許可された場所をハイライトするにはマーカーをクリックしてください。';
$string['formerror_nobgimage'] = 'あなたはドラッグ＆ドロップエリアの背景として使用するイメージを選択する必要があります。';
$string['formerror_noitemselected'] = 'あなたはドロップゾーンを指定しましたが、ゾーンにドラッグする必要のあるマーカーを選択していません。';
$string['formerror_nosemicolons'] = 'あなたの座標ストリングにはセミコロンがありません。あなたの {$a->shape} の座標は次のように記述される必要があります - {$a->coordsstring}。';
$string['formerror_onlysometagsallowed'] = 'マーカーのラベルとして「 {$a} 」タグのみ許可されます。';
$string['formerror_onlyusewholepositivenumbers'] = '形状のxy座標および幅および高さを指定する場合、正の整数のみを使用してください。あなたの {$a->shape} の座標は次のようになります - {$a->coordsstring}。';
$string['formerror_polygonmusthaveatleastthreepoints'] = '多角形の場合、少なくとも3点を指定する必要があります。あなたの {$a->shape} の座標は次のようになります - {$a->coordsstring}。';
$string['formerror_repeatedpoint'] = 'あなたは同じ点を2回指定しました。重複を削除してください。あなたの {$a->shape} の座標は次のようになります - {$a->coordsstring}。';
$string['formerror_shapeoutsideboundsofbgimage'] = 'あなたが定義した形状は背景イメージの境界を越えてしまいます。';
$string['formerror_toomanysemicolons'] = 'あなたが指定した座標の分離部分にセミコロンが使われすぎています。あなたの {$a->shape} の座標は次のようになります - {$a->coordsstring}。';
$string['formerror_unrecognisedwidthheightpart'] = '私たちはあなたが指定した幅および高さを認識できませんでした。あなたの {$a->shape} の座標は次のように記述してください - {$a->coordsstring}';
$string['formerror_unrecognisedxypart'] = '私たちはあなたが指定したxy座標を認識できませんでした。あなたの {$a->shape} の座標は次のように記述してください - {$a->coordsstring}';
$string['imagetargetconverter'] = 'イメージターゲット問題をドラッグ＆ドロップマーカーに変換する';
$string['infinite'] = '無制限';
$string['listitemconfirmcategory'] = 'カテゴリ「 {$a->name} 」 ({$a->qcount} 件のイメージターゲット問題を含む) 内のイメージターゲット問題すべてを変換予定';
$string['listitemconfirmcontext'] = 'コンテクスト「 {$a->name} 」 ({$a->qcount} 件のイメージターゲット問題を含む) 内のイメージターゲット問題すべてを変換予定';
$string['listitemconfirmquestion'] = '問題「 {$a->name} 」を変換予定';
$string['listitemlistallcategory'] = 'カテゴリ「 {$a->name} 」 ({$a->qcount} 件のイメージターゲット問題を含む) 内のイメージターゲット問題すべてを選択する';
$string['listitemlistallcontext'] = 'コンテクスト「 {$a->name} 」 ({$a->qcount} 件のイメージターゲット問題を含む) 内のイメージターゲット問題すべてを選択する';
$string['listitemlistallquestion'] = '問題「 {$a->name} 」を選択する';
$string['listitemprocessingcategory'] = 'カテゴリ「 {$a->name} 」 ({$a->qcount} 件のイメージターゲット問題を含む) 内のイメージターゲット問題すべての変換';
$string['listitemprocessingcontext'] = 'コンテクスト「 {$a->name} 」 ({$a->qcount} 件のイメージターゲット問題を含む) 内のイメージターゲット問題すべての変換';
$string['listitemprocessingquestion'] = '変換済み問題「 {$a->name} 」';
$string['marker'] = 'マーカー';
$string['marker_n'] = 'マーカー {no}';
$string['markers'] = 'マーカー';
$string['nolabel'] = 'ラベルテキストなし';
$string['noofdrags'] = 'マーカー数';
$string['noquestionsfound'] = 'ここで変換する問題は見つかりませんでした。';
$string['pleasedragatleastonemarker'] = 'あなたの解答は完了していません。あなたはイメージに少なくとも1つのマーカーを置く必要があります。';
$string['pluginname'] = 'ドラッグ＆ドロップマーカー';
$string['pluginnameadding'] = 'ドラッグ＆ドロップマーカーの追加';
$string['pluginnameediting'] = 'ドラッグ＆ドロップマーカーの編集';
$string['pluginname_help'] = '背景イメージファイルを選択してマーカーのテキストラベルを入力した後、ドラッグされるための背景イメージのドロップゾーンを定義してください。';
$string['pluginnamesummary'] = '背景イメージにマーカーをドラッグ＆ドロップします。';
$string['previewareaheader'] = 'プレビュー';
$string['previewareamessage'] = '背景イメージファイルを選択してマーカーのテキストラベルを入力した後、ドラッグされるための背景イメージのドロップゾーンを定義してください。';
$string['refresh'] = 'プレビューをリフレッシュする';
$string['shape'] = '形状';
$string['shape_circle'] = '円';
$string['shape_circle_coords'] = 'x,y;r (xおよびyは円の中心のxy座標、rは半径です)';
$string['shape_circle_lowercase'] = '円';
$string['shape_polygon'] = '多角形';
$string['shape_polygon_coords'] = 'x1,y1;x2,y2;x3,y3;x4,y4....(x1, y1は最初の頂点のx,y座標、x2, y2は2番目の頂点のx,y座標です。あなたは多角形を閉じるために最初の頂点の座標を繰り返す必要はありません)';
$string['shape_polygon_lowercase'] = '多角形';
$string['shape_rectangle'] = '長方形';
$string['shape_rectangle_coords'] = 'x,y;w,h (x,yは多角形の左上隅のxy座標、wおよびhは多角形の幅および高さです)';
$string['shape_rectangle_lowercase'] = '長方形';
$string['showmisplaced'] = '正しいマーカーがドロップされていないドロップゾーンをハイライトする';
$string['shuffleimages'] = '問題の受験ごとにドラッグアイテムをシャッフルする';
$string['stateincorrectlyplaced'] = 'どのマーカーが間違って置かれたか示す';
$string['summariseplace'] = '{$a->no}. {$a->text}';
$string['summariseplaceno'] = 'ドロップゾーン {$a}';
$string['ytop'] = 'トップ';
