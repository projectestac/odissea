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
 * Strings for component 'url', language 'ja', version '4.1'.
 *
 * @package     url
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['chooseavariable'] = '変数を選択する ...';
$string['clicktoopen'] = 'リソース開くには {$a} をクリックしてください。';
$string['configdisplayoptions'] = '利用可能にしたいオプションすべてを選択してください。既存の設定は変更されません。複数のフィールドを選択するにはCTRLキーを押したままにしてください。';
$string['configframesize'] = 'フレーム内にウェブページまたはアップロードしたファイルが表示される場合の (ナビゲーションを含む) トップフレームサイズ (ピクセル) です。';
$string['configrolesinparams'] = 'カスタマイズされたロール名 (コース設定から) をURLパラメータの変数として利用できるようにしますか?';
$string['configsecretphrase'] = 'このシークレットフレーズはサーバにパラメータとして送信するための暗号コード値の生成に使用されます。暗号コードはcurrent_users IPアドレスとシークレットワードを結びつけてmd5により生成されます。例) code = md5(IP.secretphrase)。IPアドレスを変更できたり異なるコンピュータで共有できるため、これは信頼できることではない点に留意してください。';
$string['contentheader'] = 'コンテンツ';
$string['createurl'] = 'URLを作成する';
$string['displayoptions'] = '利用可能な表示オプション';
$string['displayselect'] = '表示';
$string['displayselect_help'] = 'URLファイルタイプおよびブラウザが埋め込みを許可するかどうかも含めてこの設定ではURLがどのように表示されるか決定します。以下のオプションを含みます:

* 自動- 選択されたURLタイプを自動的に検出する最良の表示オプションです。
* 埋め込み - URLはナビゲーションバーの下にURL説明およびブロックと共に表示されます。
* オープン - URLはブラウザウィンドウ内でのみ表示されます。
* ポップアップ - URLはメニューまたはアドレスバーなしの新しいブラウザウィンドウに表示されます。
* フレーム - URLはフレーム内のナビゲーションバーの下にURL説明およびブロックと共に表示されます。
* 新しいウィンドウ - URLは新しいウィンドウ内にメニューおよびアドレスバーと共に表示されます。';
$string['displayselectexplain'] = '表示タイプを選択してください。残念ですがすべてのタイプがすべてのURLに適しているということではありません。';
$string['externalurl'] = '外部URL';
$string['framesize'] = 'フレーム高';
$string['indicator:cognitivedepth'] = 'URL認知的';
$string['indicator:cognitivedepth_help'] = 'この指標はURLリソースで学生が到達した認識深度に基づきます。';
$string['indicator:cognitivedepthdef'] = 'URL認知的';
$string['indicator:cognitivedepthdef_help'] = 'この分析間隔中、参加者がURLリソースから提供された認知的関与のこのパーセンテージに到達しました (レベル = 閲覧なし, 閲覧)。';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'URL社会的';
$string['indicator:socialbreadth_help'] = 'この指標はURLリソースで学生が到達した社会的広がりに基づきます。';
$string['indicator:socialbreadthdef'] = 'URL社会的';
$string['indicator:socialbreadthdef_help'] = 'この分析間隔中、参加者がURLリソースから提供された社会的関与のこのパーセンテージに到達しました (レベル = 参加なし, 個人で参加)。';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['invalidstoredurl'] = 'URLが無効のためこのリソースを表示できません。';
$string['invalidurl'] = '入力されたURLが無効です。';
$string['modulename'] = 'URL';
$string['modulename_help'] = 'URLモジュールにおいて教師はコースリソースとしてウェブリンクを提供することができます。ドキュメントまたはイメージのようにオンライン上にある無料のコンテンツをリンクすることができます。URLはウェブサイトのホームページ (トップページ) である必要はありません。特定のウェブページのURLはコピー＆ペーストすることができます。また、教師はファイルピッカを使用してFlickr、YouTubeまたはWikimedia (サイト内でどのリポジトリが有効にされているかに依存します) からリンクを選択することができます。

埋め込み、新しいウィンドウのオープン、必要であればURLに学生名のような情報を渡す高度なオプションのようにURLモジュールには数多くの表示オプションがあります。

テキストエディタをとおしてURLでは他のリソースまたは活動タイプを追加できることに留意してください。';
$string['modulename_link'] = 'mod/url/view';
$string['modulenameplural'] = 'URL';
$string['name'] = '名称';
$string['name_help'] = 'これはURLのリンクテキストとなります。

URLの目的を簡潔に説明する意味のあるテキストを入力してください。

「link」という単語を使用しないでください。これはスクリーンリーダがユーザにリンクを知らせるための助けとなります (例「Moodle.org, link」)。そのため「link」という単語は名称フィールドに含める必要はありません。';
$string['page-mod-url-x'] = 'すべてのURLモジュールページ';
$string['parameterinfo'] = '&amp;parameter=変数';
$string['parametersheader'] = 'URL変数';
$string['parametersheader_help'] = 'このセクションでは内部情報をURLの一部として渡せます。これはURLでパラメータを取得するインタラクティブなWebページで現在のユーザ名等を渡したい場合に有用です。テキストボックスにURLのパラメータ名を入力して対応するサイト変数を選択してください。';
$string['pluginadministration'] = 'URLモジュール管理';
$string['pluginname'] = 'URL';
$string['popupheight'] = 'ポップアップ高 (ピクセル)';
$string['popupheightexplain'] = 'ポップアップウィンドウのデフォルト高を指定してください。';
$string['popupwidth'] = 'ポップアップ幅 (ピクセル)';
$string['popupwidthexplain'] = 'ポップアップウィンドウのデフォルト幅を指定してください。';
$string['printintro'] = 'URL説明を表示する';
$string['printintroexplain'] = 'コンテンツの下にURL説明を表示しますか? この設定を有効にした場合でもいくつかの表示タイプでは説明を表示することができません。';
$string['privacy:metadata'] = 'URLリソースプラグインはいかなる個人データも保存しません。';
$string['rolesinparams'] = 'URL変数としてのロール名';
$string['search:activity'] = 'URL';
$string['serverurl'] = 'サーバURL';
$string['url:addinstance'] = '新しいURLリソースを追加する';
$string['url:view'] = 'URLを表示する';
