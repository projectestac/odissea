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
 * Strings for component 'url', language 'ja', branch 'MOODLE_38_STABLE'
 *
 * @package   url
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['chooseavariable'] = '変数を選択する ...';
$string['clicktoopen'] = 'リソースを開くには {$a}  リンクをクリックしてください:';
$string['configdisplayoptions'] = '利用可能にしたいオプションすべてを選択してください。既存の設定は変更されません。複数のフィールドを選択するにはCTRLキーを押したままにしてください。';
$string['configframesize'] = 'フレーム内にウェブページまたはアップロードしたファイルが表示される場合の (ナビゲーションを含む) トップフレームサイズ (ピクセル) です。';
$string['configrolesinparams'] = 'ローカライズされたロール名を利用可能なパラメータ変数リストに含みたい場合、有効にしてください。';
$string['configsecretphrase'] = 'このシークレットフレーズはサーバにパラメータとして送信するための暗号コード値の生成に使用されます。暗号コードはcurrent_users IPアドレスとシークレットワードを結びつけてmd5により生成されます。例) code = md5(IP.secretphrase)。IPアドレスを変更できたり異なるコンピュータで共有できるため、これは信頼できることではない点に留意してください。';
$string['contentheader'] = 'コンテンツ';
$string['createurl'] = 'URLを作成する';
$string['displayoptions'] = '利用可能な表示オプション';
$string['displayselect'] = '表示';
$string['displayselectexplain'] = '表示タイプを選択してください。残念ですがすべてのタイプがすべてのURLに適しているということではありません。';
$string['displayselect_help'] = 'URLファイルタイプおよびブラウザが埋め込みを許可するかどうかも含めてこの設定ではURLがどのように表示されるか決定します。以下のオプションを含みます:

* 自動- 選択されたURLタイプを自動的に検出する最良の表示オプションです。
* 埋め込み - URLはナビゲーションバーの下にURL説明およびブロックと共に表示されます。
* オープン - URLはブラウザウィンドウ内でのみ表示されます。
* ポップアップ - URLはメニューまたはアドレスバーなしの新しいブラウザウィンドウに表示されます。
* フレーム - URLはフレーム内のナビゲーションバーの下にURL説明およびブロックと共に表示されます。
* 新しいウィンドウ - URLは新しいウィンドウ内にメニューおよびアドレスバーと共に表示されます。';
$string['externalurl'] = '外部URL';
$string['framesize'] = 'フレーム高';
$string['indicator:cognitivedepth'] = 'URL認知的';
$string['indicator:cognitivedepthdef'] = 'URL認知的';
$string['indicator:cognitivedepthdef_help'] = 'この分析間隔中、参加者がURLリソースから提供された認知的関与のこのパーセンテージに到達しました (レベル = 閲覧なし, 閲覧)。';
$string['indicator:cognitivedepth_help'] = 'この指標はURLリソースで学生が到達した認識深度に基づきます。';
$string['indicator:socialbreadth'] = 'URL社会的';
$string['indicator:socialbreadthdef'] = 'URL社会的';
$string['indicator:socialbreadthdef_help'] = 'この分析間隔中、参加者がURLリソースから提供された社会的関与のこのパーセンテージに到達しました (レベル = 参加なし, 個人で参加)。';
$string['indicator:socialbreadth_help'] = 'この指標はURLリソースで学生が到達した社会的広がりに基づきます。';
$string['invalidstoredurl'] = 'URLが無効のためこのリソースを表示できません。';
$string['invalidurl'] = '入力されたURLが無効です。';
$string['modulename'] = 'URL';
$string['modulename_help'] = 'URLモジュールにおいて教師はコースリソースとしてウェブリンクを提供することができます。ドキュメントまたはイメージのようにオンライン上にある無料のコンテンツをリンクすることができます。URLはウェブサイトのホームページ (トップページ) である必要はありません。特定のウェブページのURLはコピー＆ペーストすることができます。また、教師はファイルピッカを使用してFlickr、YouTubeまたはWikimedia (サイト内でどのリポジトリが有効にされているかに依存します) からリンクを選択することができます。

埋め込み、新しいウィンドウのオープン、必要であればURLに学生名のような情報を渡す高度なオプションのようにURLモジュールには数多くの表示オプションがあります。

テキストエディタをとおしてURLでは他のリソースまたは活動タイプを追加できることに留意してください。';
$string['modulenameplural'] = 'URL';
$string['page-mod-url-x'] = 'すべてのURLモジュールページ';
$string['parameterinfo'] = '&amp;parameter=変数';
$string['parametersheader'] = 'URL変数';
$string['parametersheader_help'] = 'いくつかの内部Moodle変数が自動的にURLに付加されます。あなたの変数名をテキストボックスに入力した後、必要なマッチング変数を選択してください。';
$string['pluginadministration'] = 'URLモジュール管理';
$string['pluginname'] = 'URL';
$string['popupheight'] = 'ポップアップ高 (ピクセル)';
$string['popupheightexplain'] = 'ポップアップウィンドウのデフォルト高を指定してください。';
$string['popupwidth'] = 'ポップアップ幅 (ピクセル)';
$string['popupwidthexplain'] = 'ポップアップウィンドウのデフォルト幅を指定してください。';
$string['printintro'] = 'URL説明を表示する';
$string['printintroexplain'] = 'コンテンツの下にURL説明を表示しますか? この設定を有効にした場合でもいくつかの表示タイプでは説明を表示することができません。';
$string['privacy:metadata'] = 'URLリソースプラグインはいかなる個人データも保存しません。';
$string['rolesinparams'] = 'パラメータにロール名を含む';
$string['search:activity'] = 'URL';
$string['serverurl'] = 'サーバURL';
$string['url:addinstance'] = '新しいURLリソースを追加する';
$string['url:view'] = 'URLを表示する';
