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
 * Strings for component 'scorm', language 'ja', branch 'MOODLE_36_STABLE'
 *
 * @package   scorm
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activation'] = 'アクティベーション';
$string['activityloading'] = 'あなたは次の時間経過後、自動的にリダイレクトされます:';
$string['activityoverview'] = 'あなたには注意が必要なSCORMパッケージがあります。';
$string['activitypleasewait'] = '活動読み込み中、お待ちください ...';
$string['adminsettings'] = '管理設定';
$string['advanced'] = 'パラメータ';
$string['aicchacpkeepsessiondata'] = 'AICC HACPセッションデータ';
$string['aicchacpkeepsessiondata_desc'] = '外部AICC HACPセッションデータを保持する日数です (設定値を高くすることでテーブル内に古いデータが一杯になりますがデバッグには有用です)。';
$string['aicchacptimeout'] = 'AICC HACPタイムアウト';
$string['aicchacptimeout_desc'] = '外部AICC HACPセッションをオープンしたままにできる最大時間 (分) です。';
$string['aiccuserid'] = 'AICC数字ユーザID渡し';
$string['aiccuserid_desc'] = 'Moodleに比べてAICCスタンダードのユーザ名には制限が多く、半角英数字、ダッシュ (-) およびアンダースコア (_) のみ許可されます。ピリオド (.)、スペースおよびアットマーク (@) は許可されません。この設定を有効にした場合、ユーザ名の代わりにユーザIDナンバーがAICCパッケージに渡されます。';
$string['aliasonly'] = 'リポジトリからimsmanifest.xmlファイルを選択する場合、あなたはこのファイルのエイリアス/ショートカットを使用する必要があります。';
$string['allowapidebug'] = 'アクティブAPIデバッグおよびトレース (apidebugmaskでキャプチャマスクを設定する)';
$string['allowtypeaicchacp'] = '外部AICC HACPを有効にする';
$string['allowtypeaicchacp_desc'] = 'この設定を有効にした場合、外部AICCパッケージからユーザログインのポストリクエストを必要とせずにAICC HACP外部通信することができます。';
$string['allowtypeexternal'] = '外部パッケージタイプを有効にする';
$string['allowtypeexternalaicc'] = 'ダイレクトAICC URLを有効にする';
$string['allowtypeexternalaicc_desc'] = 'この設定を有効にした場合、シンプルAICCパッケージのダイレクトURLが許可されます。';
$string['allowtypelocalsync'] = 'ダウンロード済みパッケージタイプを有効にする';
$string['apidebugmask'] = 'APIデバッグキャプチャマスク - &lt;username&gt;:&lt;activityname&gt; でシンプルなregexを使用します。例) 「admin:.*」は管理ユーザ (admin) のみのデバッグとなります。';
$string['areacontent'] = 'コンテンツファイル';
$string['areapackage'] = 'パッケージファイル';
$string['asset'] = 'アセット';
$string['assetlaunched'] = 'アセット - 閲覧済み';
$string['attempt'] = '受験';
$string['attempt1'] = '受験 1';
$string['attempts'] = '受験';
$string['attemptsmanagement'] = '受験管理';
$string['attemptstatusall'] = 'ダッシュボードおよびエントリページ';
$string['attemptstatusentry'] = 'エントリページのみ';
$string['attemptstatusmy'] = 'ダッシュボードのみ';
$string['attemptsx'] = '受験 {$a}';
$string['attr_error'] = 'タグ {$a->tag} のアトリビュート ({$a->attr}) に不適切な値が設定されています。';
$string['autocommit'] = '自動コミット';
$string['autocommitdesc'] = 'SCORMパッケージがSCORMデータを保存しない場合、自動的にSCORMデータを保存します。';
$string['autocommit_help'] = 'この設定を有効にした場合、SCORMデータは自動的にデータベースに保存されます。定期的にデータを保存しないSCORMオブジェクトに有用です。';
$string['autocontinue'] = '自動継続';
$string['autocontinuedesc'] = 'この設定を有効にした場合、次に続く学習オブジェクトが自動的に開始動されます。そうでない場合、「続ける」ボタンが使用されます。';
$string['autocontinue_help'] = 'この設定を有効にした場合、自動的に次の利用可能な学習オブジェクトが起動されます。そうでない場合、「続ける」ボタンを使用してください。';
$string['averageattempt'] = '平均評点';
$string['badarchive'] = 'あなたは有効なZIPファイルを提供する必要があります。';
$string['badimsmanifestlocation'] = 'imsmanifest.xmlファイルが見つかりましたが、あなたのZIPファイルのルートにありません。あなたのSCORMを再パッケージしてください。';
$string['badmanifest'] = 'マニフェストエラー: エラーログをご覧ください。';
$string['browse'] = 'プレビュー';
$string['browsed'] = '閲覧済み';
$string['browsemode'] = 'プレビューモード';
$string['browserepository'] = 'リポジトリを閲覧する';
$string['calculatedweight'] = '計算加重';
$string['calendarend'] = '{$a} 終了';
$string['calendarstart'] = '{$a} 開始';
$string['cannotaccess'] = 'あなたはこのスクリプトをそのようにコールすることはできません。';
$string['cannotfindsco'] = 'SCOを見つけることができませんでした。';
$string['chooseapacket'] = 'パッケージを選択または更新する';
$string['closebeforeopen'] = 'あなたは開始日時の前に終了日時を指定しました。';
$string['collapsetocwinsize'] = '次のサイズ以下の場合、TOCを折りたたむ';
$string['collapsetocwinsizedesc'] = 'ここではTOCを自動的に折りたたむウィンドウサイズを指定します。';
$string['compatibilitysettings'] = '互換性設定';
$string['completed'] = '完了';
$string['completionscorerequired'] = '必要最小点数';
$string['completionscorerequireddesc'] = '完了するには最低でも {$a} 点必要です。';
$string['completionscorerequired_help'] = 'この設定を有効にすることによりユーザがこのSCORM活動を完了するためには他の活動完了必要条件と同じく少なくとも設定された最小点数に到達する必要があります。';
$string['completionstatusallscos'] = 'すべてのscosに完了ステータスの返信を要求する';
$string['completionstatusallscos_help'] = 'SCORMパッケージには複数のコンポーネントまたは「scos」を含むものがあります。この設定が有効にされた場合、この活動の完了をフラグするためにパッケージ内のすべてのscosは関連するlesson_statusを返す必要があります。';
$string['completionstatus_completed'] = '完了';
$string['completionstatus_passed'] = '合格';
$string['completionstatusrequired'] = '必要ステータス';
$string['completionstatusrequireddesc'] = '学生は少なくとも次のステータスに到達する必要があります: {$a}';
$string['completionstatusrequired_help'] = '1つまたはそれ以上のステータスを選択することによりユーザがこのSCORM活動を完了するためには他の活動完了必要条件と同じく少なくとも選択されたステータスの1つに到達する必要があります。';
$string['confirmloosetracks'] = '警告: パッケージが変更/修正されたようです。パッケージ構造が変更された場合、更新処理中にユーザトラックが失われる可能性があります。';
$string['contents'] = 'コンテンツ';
$string['coursepacket'] = 'コースパッケージ';
$string['coursestruct'] = 'コース構造';
$string['crontask'] = 'SCORMバックグラウンド処理';
$string['currentwindow'] = '現在のウィンドウ';
$string['datadir'] = 'ファイルシステムエラー: コースデータディレクトリを作成できません。';
$string['defaultdisplaysettings'] = 'デフォルト表示設定';
$string['defaultgradesettings'] = 'デフォルト評定設定';
$string['defaultothersettings'] = '他のデフォルト設定';
$string['deleteallattempts'] = 'すべてのSCORM受験を削除する';
$string['deleteattemptcheck'] = '本当にこれらの受験を完全に削除してもよろしいですか?';
$string['deleteselected'] = '選択した受験を削除する';
$string['deleteuserattemptcheck'] = '本当にあなたの受験すべてを完全に削除してもよろしいですか?';
$string['details'] = 'トラック詳細';
$string['directories'] = 'ディレクトリリンクを表示する';
$string['disabled'] = '無効';
$string['display'] = 'パッケージを表示する';
$string['displayactivityname'] = '活動名を表示する';
$string['displayactivityname_help'] = 'SCORMプレイヤの上に活動名を表示するかどうか指定します。';
$string['displayattemptstatus'] = '受験状況を表示する';
$string['displayattemptstatusdesc'] = 'ダッシュボードのコース概要ブロックおよびSCORMエントリページにユーザの受験概要を表示するかどうか設定します。';
$string['displayattemptstatus_help'] = 'このプリファレンスではユーザ受験の概要をダッシュボード内のコース概要ブロックまたはSCORMエントリページに表示できるようにします。';
$string['displaycoursestructure'] = 'エントリページにコース構造を表示する';
$string['displaycoursestructuredesc'] = 'この設定を有効にした場合、SCORMアウトラインページに目次が表示されます。';
$string['displaycoursestructure_help'] = 'この設定を有効にした場合、コンテンツのSCORMテーブルをSCORMアウトラインページに表示します。';
$string['displaydesc'] = '新しいウィンドウにSCORMパッケージを表示するかどうか設定します。';
$string['displaysettings'] = '表示設定';
$string['dnduploadscorm'] = 'SCORMパッケージを追加する';
$string['domxml'] = 'DOMXML外部ライブラリ';
$string['duedate'] = '終了日時';
$string['element'] = 'エレメント';
$string['enter'] = '問題に入る';
$string['entercourse'] = 'コースに入る';
$string['errorlogs'] = 'エラーログ';
$string['eventattemptdeleted'] = '受験が削除されました。';
$string['eventinteractionsviewed'] = 'インタラクションが閲覧されました。';
$string['eventreportviewed'] = 'レポートが閲覧されました。';
$string['eventscolaunched'] = 'SCOが起動されました。';
$string['eventscorerawsubmitted'] = '送信済みSCORMの素点';
$string['eventstatussubmitted'] = '送信済みSCORMのステータス';
$string['eventtracksviewed'] = 'トラックが閲覧されました。';
$string['eventuserreportviewed'] = 'ユーザレポートが閲覧されました。';
$string['everyday'] = '毎日';
$string['everytime'] = '毎回使用されるたびに';
$string['exceededmaxattempts'] = 'あなたは最大受験回数に達しました。';
$string['exit'] = 'コースから抜ける';
$string['exitactivity'] = '活動から抜ける';
$string['expired'] = '申し訳ございません、この活動は {$a} に終了しているため、これ以上利用することはできません。';
$string['external'] = '外部パッケージを更新するタイミング';
$string['failed'] = '不合格';
$string['finishscorm'] = 'あなたがこのリソースの閲覧を終了した場合、{$a}';
$string['finishscormlinkname'] = 'ここをクリックしてコースページに戻ってください。';
$string['firstaccess'] = '最初のアクセス';
$string['firstattempt'] = '最初の受験';
$string['floating'] = 'フローティング';
$string['forceattemptalways'] = '常に';
$string['forceattemptoncomplete'] = '前の受験が完了、合格または不合格の場合';
$string['forcecompleted'] = '完了を強制する';
$string['forcecompleteddesc'] = 'このプリファレンスでは完了の強制に関するデフォルト値を設定します。';
$string['forcecompleted_help'] = 'この設定を有効にした場合、現在の受験ステータスが強制的に「完了」とされます (SCORM 1.2パッケージのみで動作します)。';
$string['forcejavascript'] = 'ユーザにJavaScriptの有効化を強制する';
$string['forcejavascript_desc'] = 'この設定を有効にした場合 (推奨)、ユーザのブラウザでJavaScriptをサポートしていない場合にSCORMオブジェクトへのアクセスを防ぎます。無効にした場合、ユーザはSCORMを閲覧することはできますがAPI通信が失敗するため評定情報が保存されることはありません。';
$string['forcejavascriptmessage'] = 'このオブジェクトを閲覧するにはJavaScriptが必要です。あなたのブラウザのJavaScriptを有効にして再度お試しください。';
$string['forcenewattempts'] = '新しい受験を強制する';
$string['forcenewattempts_help'] = '3つのオプションがあります:

* No - 前の受験が完了、合格、失敗した場合、ユーザにはレビューモードまたは新しい受験を開始するオプションが提供されます。
* 前の受験が完了、合格または不合格の場合 - これはSCORMパッケージ設定「完了」「合格」「不合格」ステータスに依存します。
* 常に - SCORM活動への再エントリ毎に新しい受験が生成されます。学生は前の受験で到達した同じポイントに戻ることはありません。';
$string['found'] = 'マニフェストが見つかりました。';
$string['frameheight'] = 'ステージフレームまたはウィンドウの高さです。';
$string['framewidth'] = 'ステージフレームまたはウィンドウの幅です。';
$string['fromleft'] = '左から';
$string['fromtop'] = 'トップから';
$string['fullscreen'] = 'フルスクリーンモード';
$string['general'] = '一般データ';
$string['gradeaverage'] = '平均評点';
$string['gradeforattempt'] = '受験の評点';
$string['gradehighest'] = '最高評点';
$string['grademethod'] = '評定方法';
$string['grademethoddesc'] = '評定方法では活動の受験をどのように評定するか決定します。';
$string['grademethod_help'] = '評定方法では活動の受験をどのように評定するか決定します。

以下4つの評定方法があります:

* 学習オブジェクト - 完了/合格した活動の学習オブジェクト数です。
* 最高評点 - すべてのパスした学習オブジェクトにおけるユーザの最高評点です。
* 平均評点 - すべての評点の平均です。
* 評点の合計 - すべての評点の合計です。';
$string['gradereported'] = '記録済み評定';
$string['gradescoes'] = '学習オブジェクト';
$string['gradesettings'] = '評定設定';
$string['gradesum'] = '評点の合計';
$string['height'] = '高さ';
$string['hidden'] = '隠す';
$string['hidebrowse'] = 'プレビューモードを無効にする';
$string['hidebrowsedesc'] = 'プレビューモードでは学生が受験の前に活動を閲覧することができます。';
$string['hidebrowse_help'] = 'プレビューモードでは受験の前に学生が活動を閲覧することができます。プレビューモードが無効にされた場合、プレビューボタンは非表示にされます。';
$string['hideexit'] = 'コースから抜けるボタンを隠す';
$string['hidereview'] = 'レビューボタンを隠す';
$string['hidetoc'] = 'プレイヤにコース構造を表示する';
$string['hidetocdesc'] = 'ここではSCORMプレイヤの目次表示方法を設定します。';
$string['hidetoc_help'] = 'SCORMプレイヤの目次表示方法';
$string['highestattempt'] = '最高評点';
$string['identifier'] = '問題識別子';
$string['incomplete'] = '不完全';
$string['indicator:cognitivedepth'] = 'SCORM認知的';
$string['indicator:cognitivedepth_help'] = 'この指標はSCORM活動で学生が到達した認識深度に基づきます。';
$string['indicator:socialbreadth'] = 'SCORM社会的';
$string['indicator:socialbreadth_help'] = 'この指標はSCORM活動で学生が到達した社会的広がりに基づきます。';
$string['info'] = '情報';
$string['interactions'] = 'インタラクション';
$string['invalidactivity'] = 'SCORM活動が正しくありません。';
$string['invalidhacpsession'] = '無効なHACPセッションです。';
$string['invalidmanifestname'] = 'imsmanifest.xmlまたは.zipファイルのみ選択することができます。';
$string['invalidmanifestresource'] = '警告: 次のリソースはあなたのマニフェスト内で参照されていますが見つかりませんでした:';
$string['invalidurl'] = '無効なURLが指定されました。';
$string['invalidurlhttpcheck'] = '無効なURLが指定されました。デバッグメッセージ:<pre>{$a->cmsg}</pre>';
$string['last'] = '最終アクセス日時';
$string['lastaccess'] = '最終アクセス';
$string['lastattempt'] = '最新の完了済み受験';
$string['lastattemptlock'] = '最終受験後にロックする';
$string['lastattemptlockdesc'] = 'この設定を有効にした場合、割り当てられた受験すべての終了後、学生はSCORMプレイヤを起動できないようになります。';
$string['lastattemptlock_help'] = 'この設定を有効にした場合、割り当てられた受験すべての終了後、学生はSCORMプレイヤを起動できないようになります。';
$string['location'] = 'ロケーションバーを表示する';
$string['masteryoverride'] = '熟達度がステータスをオーバーライドする';
$string['masteryoverridedesc'] = 'このプリファレンスでは熟練度オーバーライド設定のデフォルトを設定します。';
$string['masteryoverride_help'] = 'この設定を有効にして熟練度が提供された場合、LMSFinishがコールされて素点が設定された時点で素点を使用してステータスが再計算されます。SCORM (「未完了」を含む) によって提供された熟練度およびステータスはオーバーライドされます。';
$string['max'] = '最大評点';
$string['maximumattempts'] = '受験回数';
$string['maximumattemptsdesc'] = 'このプリファレンスでは活動に対するデフォルトの最大受験回数を設定します。';
$string['maximumattempts_help'] = 'ここではユーザに許可される最大受験回数を設定します。この設定値はSCORM1.2およびAICCパッケージのみで動作します。';
$string['maximumgradedesc'] = 'このプリファレンスでは活動に対するデフォルトの最大評点を設定します。';
$string['menubar'] = 'メニューバーを表示する';
$string['min'] = '最小評点';
$string['missing_attribute'] = 'タグ {$a->tag} に属性 {$a->attr} がありません。';
$string['missingparam'] = '必要パラーメタが設定されていないか間違っています。';
$string['missing_tag'] = '{$a->tag} タグがありません。';
$string['mode'] = 'モード';
$string['modulename'] = 'SCORMパッケージ';
$string['modulename_help'] = 'SCORMパッケージは同意された標準に基づきパッケージされた一連のファイルです。SCORM活動モジュールではSCORMおよびAICCパッケージをZIPファイルとしてをアップロードした後、コースに追加することができます。

通常、コンテンツはページ間のナビゲーションと共にそれぞれのページに表示されます。コンテンツを目次およびナビゲーションボタン等と共にポップアップウィンドウ上に表示するための様々なオプションがあります。通常、SCORM活動には問題を含み評点は評定表に記録されます。

SCORM活動は以下のように使用することができます:

* マルチメディアコンテンツおよびアニメーションの表示のため
* 評価ツールとして';
$string['modulenameplural'] = 'SCORMパッケージ';
$string['myaiccsessions'] = '私のAICCセッション';
$string['myattempts'] = '私の受験';
$string['nav'] = 'ナビゲーションを表示する';
$string['navdesc'] = 'ここではナビゲーションボタンの表示/非表示およびポジションを設定します。';
$string['nav_help'] = 'ここではナビゲーションボタンの表示/非表示およびポジションを設定します。

以下3つのオプションがあります:

* なし - ナビゲーションボタンを表示しません。
* コンテンツの下 - SCORMパッケージコンテンツの下にナビゲーションボタンを表示します。
* フロート - ナビゲーションボタンはパッケージによって決定されたトップおよび左からのポジションにフロート表示されます。';
$string['navigation'] = 'ナビゲーション';
$string['navpositionleft'] = '左からのナビゲーションボタンのポジション (ピクセル) です。';
$string['navpositiontop'] = 'トップからのナビゲーションボタンのポジション (ピクセル) です。';
$string['networkdropped'] = 'SCORMプレイヤはあなたのインターネット接続が信頼できないまたは中断されていることを検出しました。このSCORM活動を続ける場合、あなたの進捗が保存されない場合があります。<br />今すぐこの活動を終了してあなたが信頼できるインターネット接続を利用できるようになった後に戻ってください。';
$string['newattempt'] = '新しい受験を開始する';
$string['next'] = '続ける';
$string['noactivity'] = '報告はありません。';
$string['noattemptsallowed'] = '許可された受験回数';
$string['noattemptsmade'] = 'あなたの受験回数';
$string['no_attributes'] = 'タグ {$a->tag} には属性を割り当てる必要があります。';
$string['no_children'] = 'タグ {$a->tag} には子タグを割り当てる必要があります。';
$string['nolimit'] = '受験制限なし';
$string['nomanifest'] = 'ファイルパッケージが正しくありません - imsmanifest.xmlまたはAICC構造がありません。';
$string['noprerequisites'] = '申し訳ございません、あなたはこの活動にアクセスするための十分な必要条件に達していません。';
$string['noreports'] = '表示するレポートはありません。';
$string['normal'] = 'ノーマル';
$string['noscriptnoscorm'] = 'あなたのブラウザがJavaScriptをサポートしていないかJavaScriptサポートが無効にされています。このSCORMパッケージが実行されないかデータが正常に保存されません。';
$string['notattempted'] = '未受験';
$string['not_corr_type'] = 'タグ {$a->tag} のタイプが合致しません。';
$string['notopenyet'] = '申し訳ございません、この活動は {$a} まで利用することができません。';
$string['objectives'] = '学習目標';
$string['openafterclose'] = 'あなたは終了日の後に開始日を指定しました。';
$string['optallstudents'] = 'すべてのユーザ';
$string['optattemptsonly'] = '受験済みユーザのみ';
$string['options'] = 'オプション (ブラウザにより動作しない場合もあります)';
$string['optionsadv'] = 'オプション (高度)';
$string['optionsadv_desc'] = 'このオプションを有効にした場合、高さおよび幅が高度な設定に表示されます。';
$string['optnoattemptsonly'] = '未受験のユーザのみ';
$string['organization'] = '組織';
$string['organizations'] = '組織';
$string['othersettings'] = '追加設定';
$string['package'] = 'パッケージファイル';
$string['packagedir'] = 'ファイルシステムエラー: パッケージディレクトリを作成できません。';
$string['packagefile'] = 'パッケージファイルが指定されていません。';
$string['packagehdr'] = 'パッケージ';
$string['package_help'] = 'パッケージはSCORM/AICCコース定義ファイルを含むZIP (またはpif) ファイルです。';
$string['packageurl'] = 'URL';
$string['packageurl_help'] = 'この設定ではファイルピッカよりファイルを選択するのではなくSCORMパッケージを指定するためのURLを有効にします。';
$string['page-mod-scorm-x'] = 'すべてのSCORMモジュールページ';
$string['pagesize'] = 'ページサイズ';
$string['passed'] = '合格';
$string['php5'] = 'PHP 5 (DOMXMLネイティブライブラリ)';
$string['pluginadministration'] = 'SCORMパッケージ管理';
$string['pluginname'] = 'SCORMパッケージ';
$string['popup'] = '新しいウィンドウ';
$string['popuplaunched'] = 'SCORMパッケージはポップアップウィンドウに起動しました。あなたがこのリソースの閲覧を終了した場合、ここをクリックしてコースページに戻ってください。';
$string['popupmenu'] = 'ドロップダウンメニュー';
$string['popupopen'] = 'パッケージを新しいウィンドウで開く';
$string['popupsblocked'] = 'ポップアップウィンドウがブロックされたためSCORMモジュールの実行を停止します。再度開始する前にあなたのブラウザ設定を確認してください。';
$string['position_error'] = '{$a->tag} タグを {$a->parent} タグの子タグにすることはできません。';
$string['preferencespage'] = 'このページ限定のプリファレンス';
$string['preferencesuser'] = 'このレポートのプリファレンス';
$string['prev'] = '前に戻る';
$string['privacy:metadata:aicc:data'] = 'AICC/SCORMサブシステムから渡される個人データです。';
$string['privacy:metadata:aicc:externalpurpose'] = 'このプラグインはAICC HACPを使用して外部にデータを送信します。';
$string['privacy:metadata:aicc_session:lessonstatus'] = '追跡するレッスンのステータスです。';
$string['privacy:metadata:aicc_session:scormmode'] = '追跡するエレメントのモードです。';
$string['privacy:metadata:aicc_session:scormstatus'] = '追跡するエレメントのステータスです。';
$string['privacy:metadata:aicc_session:sessiontime'] = '追跡するセッション時間です。';
$string['privacy:metadata:aicc_session:timecreated'] = '追跡するエレメントが作成された日時です。';
$string['privacy:metadata:attempt'] = '受験番号です。';
$string['privacy:metadata:scoes_track:element'] = '追跡するエレメントの名称です。';
$string['privacy:metadata:scoes_track:value'] = 'エレメントの値です。';
$string['privacy:metadata:scorm_aicc_session'] = 'AICC HACPのセッション情報です。';
$string['privacy:metadata:scorm_scoes_track'] = '活動に属するSCOの追跡データです。';
$string['privacy:metadata:timemodified'] = '追跡エレメントの最終更新日時です。';
$string['privacy:metadata:userid'] = 'SCORM活動にアクセスしたユーザのIDです。';
$string['protectpackagedownloads'] = 'パッケージダウンロードを保護する';
$string['protectpackagedownloads_desc'] = 'この設定を有効にした場合、course:manageactivitiesケイパビリティが割り当てられているユーザのみSCORMパッケージをダウンロードすることができます。この設定が無効にされた場合、SCORMパッケージを常に (モバイルまたは他の方法で) ダウンロードすることができます';
$string['raw'] = '素点';
$string['regular'] = '標準マニフェストファイル';
$string['report'] = 'レポート';
$string['reportcountallattempts'] = '受験回数: {$a->nbattempts} / ユーザ数: {$a->nbusers} (該当数: {$a->nbresults})';
$string['reportcountattempts'] = '受験回数: {$a->nbresults} ({$a->nbusers} ユーザ)';
$string['reports'] = 'レポート';
$string['repositorynotsupported'] = 'このリポジトリはimsmanifest.xmlファイルへの直リンクをサポートしていません。';
$string['response'] = 'レスポンス';
$string['result'] = '結果';
$string['results'] = '結果';
$string['review'] = 'レビュー';
$string['reviewmode'] = 'レビューモード';
$string['rightanswer'] = '正解';
$string['scoes'] = '学習オブジェクト';
$string['score'] = '評点';
$string['scorm:addinstance'] = '新しいSCORMパッケージを追加する';
$string['scormclose'] = '終了日時';
$string['scormcourse'] = '学習コース';
$string['scorm:deleteownresponses'] = '自分の受験を削除する';
$string['scorm:deleteresponses'] = 'SCORM受験を削除する';
$string['scormloggingoff'] = 'APIロギング: OFF';
$string['scormloggingon'] = 'APIロギング: ON';
$string['scormopen'] = '開始日時';
$string['scormresponsedeleted'] = 'ユーザ受験が削除されました。';
$string['scorm:savetrack'] = 'トラックを保存する';
$string['scorm:skipview'] = '概要をスキップする';
$string['scormstandard'] = 'SCORM標準モード';
$string['scormstandarddesc'] = 'この設定を無効にした場合、 Moodleは仕様で許可される以上にSCORM 1.2パッケージが保存することを許可します。ユーザ名をSCORMパッケージに渡す場合、Moodleフルネームフォーマット設定を使用します。';
$string['scormtype'] = 'タイプ';
$string['scormtype_help'] = 'ここではパッケージがどのようにコースに含まれるか設定します。以下4つのオプションがあります:

* アップロード済みパッケージ - SCORMパッケージをファイルピッカで選択できるようにします。
* 外部SCORMマニフェスト - imsmanifest.xmlのURLを指定できるようにします。注意: URLがあなたのサイトと異なるドメインの場合、評定が保存されないため「ダウンロード済みパッケージ」を選択することをお勧めします。
* ダウンロード済みパッケージ - パッケージのURLを指定できるようにします。パッケージが展開されてローカルに保存されます。外部SCORMパッケージが更新された場合、ローカルに保存されたパッケージも更新されます。
* 外部AICC URL - このURLは単一のAICC活動起動用URLです。この周りに擬似パッケージが構築されます。';
$string['scorm:viewreport'] = 'レポートを表示する';
$string['scorm:viewscores'] = '評点を表示する';
$string['scrollbars'] = 'ウィンドウのスクロールを許可する';
$string['search:activity'] = 'SCORMパッケージ - 活動情報';
$string['selectall'] = 'すべてを選択する';
$string['selectnone'] = 'すべての選択を解除する';
$string['show'] = '表示';
$string['sided'] = 'サイド';
$string['skipview'] = '学生によるコンテンツ構造ページのスキップ';
$string['skipviewdesc'] = 'このプリファレンスではページに対するコンテンツ構造のスキップタイミングに関するデフォルトを設定します。';
$string['skipview_help'] = 'この設定ではコンテンツ構造ページをスキップ (非表示) するかどうか指定します。パッケージが学習オブジェクトのみ含む場合、コンテンツ構造ページは常にスキップされます。';
$string['slashargs'] = '警告: このサイトではスラッシュ引数が無効にされています。期待されたとおりにオブジェクトが動作しない場合があります!';
$string['stagesize'] = 'ステージサイズ';
$string['stagesize_help'] = 'これら2つの設定では学習オブジェクトのフレーム/ウィンドウの高さおよび幅を定義します。';
$string['started'] = '開始日時';
$string['status'] = 'ステータス';
$string['statusbar'] = 'ステータスバーを表示する';
$string['student_response'] = 'レスポンス';
$string['subplugintype_scormreport'] = 'レポート';
$string['subplugintype_scormreport_plural'] = 'レポート';
$string['suspended'] = '一時停止';
$string['syntax'] = '構文エラー';
$string['tag_error'] = 'コンテンツに不明なタグ ({$a->tag}) があります:  {$a->value}';
$string['time'] = '時間';
$string['title'] = 'タイトル';
$string['toc'] = 'TOC';
$string['toolbar'] = 'ツールバーを表示する';
$string['too_many_attributes'] = 'タグ {$a->tag} の属性が多すぎます。';
$string['too_many_children'] = 'タグ {$a->tag} の子タグが多すぎます。';
$string['totaltime'] = '時間';
$string['trackcorrectcount'] = '正解数';
$string['trackcorrectcount_help'] = '問題の正解数';
$string['trackid'] = 'ID';
$string['trackid_help'] = 'これはこの問題に関してあなたのSCORMパッケージに設定されたIDです。SCORM仕様では完全な問題テキストの提供は許可されていません。';
$string['trackingloose'] = '警告: このパッケージのトラッキングデータは消滅します!';
$string['tracklatency'] = '待ち時間';
$string['tracklatency_help'] = 'インタクラクション間の経過時間は学習者のレスポンスおよび初回レスポンス時間に利用できます。';
$string['trackpattern'] = 'パターン';
$string['trackpattern_help'] = 'この問題の正しい解答です。学習者のレスポンスは表示されません。';
$string['trackresponse'] = 'レスポンス';
$string['trackresponse_help'] = 'この問題に対する学習者のレスポンスです。';
$string['trackresult'] = '結果';
$string['trackresult_help'] = '学習者が正解を入力した場合に表示します。';
$string['trackscoremax'] = '最大評点';
$string['trackscoremax_help'] = '素点に割り当てることのできる最大値';
$string['trackscoremin'] = '最小評点';
$string['trackscoremin_help'] = '素点に割り当てることのできる最小値';
$string['trackscoreraw'] = '素点';
$string['trackscoreraw_help'] = '学習者のパフォーマンスを反映する値です。最大値および最小値の範囲に制限されます。';
$string['tracksuspenddata'] = '保留データ';
$string['tracksuspenddata_help'] = '学習者のセッション間においてデータを保存および検索するためのスペースを提供します。';
$string['tracktime'] = '時間';
$string['tracktime_help'] = '受験開始時間';
$string['tracktype'] = 'タイプ';
$string['tracktype_help'] = '例えば「投票」または「記述問題」のような問題タイプです。';
$string['trackweight'] = '加重';
$string['trackweight_help'] = '評点計算時に問題に割り当てられる加重です。';
$string['type'] = 'タイプ';
$string['typeaiccurl'] = '外部AICC URL';
$string['typeexternal'] = '外部SCORMマニフェスト';
$string['typelocal'] = 'アップロード済みパッケージ';
$string['typelocalsync'] = 'ダウンロード済みパッケージ';
$string['undercontent'] = 'コンテンツの下';
$string['unziperror'] = 'パッケージの展開処理中にエラーが発生しました。';
$string['updatefreq'] = '自動更新頻度';
$string['updatefreqdesc'] = 'このプリファレンスでは活動に対するデフォルトの自動更新頻度を設定します。';
$string['updatefreq_error'] = 'パッケージファイルが外部に置かれている場合のみ自動更新頻度を設定することができます。';
$string['updatefreq_help'] = 'これにより外部パッケージを自動的にダウンロードおよび更新することができます。';
$string['validateascorm'] = 'パッケージを確認する';
$string['validation'] = '妥当性確認結果';
$string['validationtype'] = 'このプリファレンスではSCORMマニフェストファイルを確認するDOMXMLライブラリを設定します。あなたが分からない場合、このままにしてください。';
$string['value'] = '値';
$string['versionwarning'] = 'マニフェストファイルのバージョンが1.3より古いため {$a->tag} タグに警告があります。';
$string['viewallreports'] = '{$a} 件の受験レポートを表示する';
$string['viewalluserreports'] = '{$a} 件のユーザレポートを表示する';
$string['whatgrade'] = '複数回受験時の評点';
$string['whatgradedesc'] = '複数受験が許可された場合、最高、平均、最初または最後に完了した受験が評定表に記録されます。';
$string['whatgrade_help'] = '複数回の受験を許可した場合、ここでは最高、平均、最初または最後の受験のどれを評定表に記録するか設定します。最後の受験オプションには「不合格」ステータスの受験を含みません。

複数受験の処理に関するメモ:

* 新しい受験を開始するオプションはコース構造ページ内の「Enter」ボタンの上にチェックボックスとして提供されます。あなたが2回以上の受験を許可したい場合、このページにユーザがアクセスできることを確認してください。
* 他とは異なりSCORMパッケージは新しい受験に関して洗練されています。学習者が既存の受験に再度入った場合、SCORMコンテンツに上書きを禁止する内部ロジックがないとしても、また受験が「完了」または「合格」にされていたとしても、上書きすることができます。
* 「完了を強制する」「新しい受験を強制する」「最終受験後、ロックする」設定もさらに複数の受験の管理を提供します。';
$string['width'] = '幅';
$string['window'] = 'ウィンドウ';
$string['youmustselectastatus'] = 'あなたは要求するステータスを選択する必要があります。';
