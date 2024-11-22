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
 * Strings for component 'block_xp', language 'ja', version '4.1'.
 *
 * @package     block_xp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'アクション';
$string['activityname'] = '活動名';
$string['activityname_help'] = '活動名に含まれる、または等しいテキスト。大文字と小文字は区別されません。';
$string['activityoresourceis'] = '活動またはリソースは{$a}';
$string['addacondition'] = '条件を追加';
$string['addarule'] = 'ルールを追加';
$string['addinstructions'] = 'インフォメーションを追加';
$string['additionalresources'] = 'その他のリソース';
$string['addlevel'] = 'レベルを追加';
$string['addoninstallationerror'] = 'アドオン(local_xp)が正しくインストールされていないようです。管理者がインストールを確定してください。';
$string['addonnotactivated'] = 'アドオンが有効化されていません。';
$string['addrulesformhelp'] = '最後の欄は、条件を満たしたときに得られる経験点の量を定義する。';
$string['admindefaultrulesintro'] = '以下のルールはブロックが追加されたコースのデフォルトとして使用されます。';
$string['admindefaultsettingsintro'] = 'ブロックがコースに新しく追加された場合、下記の設定がデフォルトとして使用されます。いくつかの設定はロックすることができ、その場合、プラグインのすべてのインスタンスでその値が厳密に適用されます。';
$string['admindefaultvisualsintro'] = 'ブロックがコースに新しく追加された場合、下記の設定がデフォルトとして使用されます。';
$string['adminscanearnxp'] = '管理者がポイントを獲得できる';
$string['adminscanearnxp_desc'] = 'デフォルトでは、管理者はポイントを獲得できるユーザーグループに含まれません。これは、管理者が常に_block/xp:earnxp_パーミッションを持っており、どこでも継続的にポイントを集めることができるためです。この設定を使用して、管理者もポイントを獲得できるようにすることができます。';
$string['allcoursesreset'] = 'すべてのコースがリセットされました。';
$string['anonymity'] = '名前を隠す';
$string['anonymity_help'] = 'この設定は、参加者がお互いの名前とアバターを見ることができるかどうかをコントロールします。';
$string['apply'] = '適用';
$string['awardaxpwhen'] = '<strong>{$a}</strong>ポイントを以下の場合に獲得できる：';
$string['badgeaward'] = '付与するバッジ';
$string['badgeawarddesc'] = 'ユーザがそのレベルに到達したときに付与されるバッジ。';
$string['basepoints'] = '基本ポイント';
$string['basepointslineardesc'] = 'レベルの基本ポイント';
$string['basepointsrelativedesc'] = 'スタート時のポイント数。';
$string['basexp'] = '算出基準';
$string['blockappearance'] = 'ブロックの表示';
$string['blockappearancemovedtopluginsettings'] = 'ブロックの外観設定をプラグインの設定ページに移動しました。';
$string['cachedef_filters'] = 'レベルフィルター';
$string['cachedef_ruleevent_eventslist'] = 'イベント一覧';
$string['cannotbesetindefaults'] = 'デフォルト値では設定できない。';
$string['cannotearnpoints'] = 'ポイント獲得はできない。';
$string['cannotshowblockconfig'] = '通常はここに外観の設定を表示するのですが、あなたのブロックが見つかりませんでした。ブロックの外観を変更するには、[ここ]({$a}) (またはブロックを追加した場所) に戻り、編集モードをオンにして、ブロックのドロップダウンにある「設定」オプションに従ってください。ブロックが見つからない場合、再度コースに追加してください。';
$string['cannotshowblockconfigsys'] = '通常は外観の設定をここに表示するのですが、あなたのブロックを見つけることができませんでした。ユーザーの[フロントページ]({$a->fp})と[デフォルトダッシュボード]({$a->mysys})から消えているか、両方に存在している可能性があります。ここから設定を編集するには、どちらか一方にのみ表示されていることを確認してください。';
$string['changecourse'] = 'コース変更';
$string['changelevelformhelp'] = 'レベル数を変更した場合、カスタムレベルバッジはバッジのないレベルを防ぐために一時的に無効になります。レベル数を変更した場合、このフォームを保存した後、「ビジュアル」のページでカスタムバッジを再度有効にしてください。';
$string['changetocourse'] = 'コース変更';
$string['changetositewide'] = 'サイト全体に戻る';
$string['cheatguard'] = 'チート防止';
$string['chooseacondition'] = '条件を選ぶ';
$string['clearfilter'] = 'クリアフィルタ';
$string['clicktoselectcm'] = 'クリックして活動やリソースを選択';
$string['cmselector'] = 'コースモジュール選択';
$string['coefxp'] = 'アルゴリズム係数';
$string['compatibilitycheck'] = '互換性チェック';
$string['completionrules'] = 'コンプリーションルール';
$string['completionrules_help'] = 'コンプリーションルールは、活動完了、セクション完了、コース完了の3つのカテゴリーに分かれています。カテゴリーに条件を追加することで、いつ、どれだけのポイントが与えられるかが決まります。

ルールは画面に表示された順に評価されます。条件が満たされ次第、対応するポイントが与えられ、それ以降のルールは評価されません。

[Learn more](https://docs.levelup.plus/xp/docs/completion-rules?ref=blockxp_help)';
$string['completionrulesintro'] = '活動、セクション、コースを完了すると、学生にポイントが付与されます。';
$string['completionruleslegacyusednotice'] = '完了条件を使用した「イベントルール」があります。「イベントルール」と「コンプリーションルール」の両方を使用すると、獲得ポイントが2倍になる可能性があるため、以下の方法を選択し、削除することを強くお勧めします。';
$string['condition'] = '状態';
$string['configblockrankingsnapshot'] = 'リーダーボードのスナップショットを表示';
$string['configblockrankingsnapshot_help'] = 'リーダーボードのスナップショットは、ユーザーのランクを表示します。また、そのユーザーを取り囲む2人も表示しようとします。この機能は、リーダーボードが有効で、そのランクが表示されている必要があります。';
$string['configdescription'] = '追加説明';
$string['configdescription_help'] = 'ブロック内に短い紹介メッセージが表示されます。学生にはメッセージを削除する機能があり、その場合、メッセージは二度と表示されません。';
$string['configheader'] = '設定';
$string['configrecentactivity'] = '最近のリワードを表示';
$string['configrecentactivity_help'] = '有効にすると、ブロックは学生にポイントを与えた最近のイベントの短いリストを表示します。';
$string['configtitle'] = 'タイトル';
$string['configtitle_help'] = 'ブロックのタイトル';
$string['congratulationsyouleveledup'] = 'おめでとうございます！';
$string['coolthanks'] = 'ありがとう！';
$string['coursea'] = 'コース "{$a}"';
$string['courselog'] = 'コースログ';
$string['coursereport'] = 'コースレポート';
$string['courserules'] = 'コース内のルール';
$string['courseselectedcolon'] = 'コース選択：';
$string['coursesettings'] = 'コース内の設定';
$string['coursevisuals'] = 'コース内のビジュアル';
$string['currencysign'] = 'ポイント記号';
$string['currencysign_help'] = 'この設定により、ポイントの意味を変更することができます。この記号は、_experience points_の代わりに、各ユーザーのポイント数の横に表示されます。

用意されているシンボルから1つを選ぶか、独自のシンボルをアップロードしてください！';
$string['currencysignxp'] = 'XP（経験ポイント）';
$string['customizelevels'] = 'レベルをカスタマイズする';
$string['dangerzone'] = '危険ゾーン';
$string['defaultlevels'] = 'デフォルトレベル';
$string['defaultrules'] = 'デフォルトルール';
$string['defaultrulesformhelp'] = 'これらはプラグインが提供するデフォルトのルールで、自動的にデフォルトのポイントを与え、いくつかの冗長なイベントを無視します。あなたのルールが優先されます。';
$string['defaultsettings'] = 'デフォルト設定';
$string['defaultvisuals'] = 'デフォルトのアピアランス';
$string['deletecondition'] = '条件を削除する';
$string['deleterule'] = 'ルールを削除する';
$string['description'] = '説明';
$string['difficulty'] = 'ポイント計算方法';
$string['difficultyflat'] = '等間隔';
$string['difficultyflatdesc'] = 'どのレベルも、達成に必要なポイント数は同じである。';
$string['difficultylinear'] = '一定増加';
$string['difficultylineardesc'] = '各レベル間で難易度が直線的に増加する。';
$string['difficultylinearincrdesc'] = '累進難易度に使用されるポイント数。';
$string['difficultypointincrease'] = 'ポイント増加';
$string['difficultyrelative'] = '雪だるま式';
$string['difficultyrelativedesc'] = 'レベルに到達するのは指数関数的に難しくなる。';
$string['difficultyrelativeincrdesc'] = '前回からのポイント増加率。';
$string['discoverlevelupplus'] = 'レベルアップXP+を発見する';
$string['dismissnotice'] = '通知を却下する';
$string['displayeveryone'] = '全員を表示';
$string['displaynneighbours'] = '{$a}人の隣人を表示する';
$string['displayoneneigbour'] = '隣人を1人表示する';
$string['displayparticipantsidentity'] = '参加者のIDを表示';
$string['displayrank'] = 'ランクを表示';
$string['displayrelativerank'] = '相対ランクを表示する';
$string['documentation'] = 'ドキュメント';
$string['drops'] = 'ドロップ';
$string['drops_help'] = 'ビデオゲームでは、一部のキャラクターがアイテムや経験点を地面に落とし、プレイヤーが拾うことができる。これらのアイテムやポイントは一般的にドロップと呼ばれています。

レベルアップXPでは、ドロップはインストラクターが通常のMoodleコンテンツに配置できるショートコード (例 `[xpdrop abcdef]`) です。ユーザがドロップに遭遇した場合、これらのドロップはピックアップされ、一定のポイントが与えられます。

現在のところ、ドロップはユーザーからは見えず、初めてドロップに遭遇したときに受動的にポイントが与えられます。

ドロップは特定のコンテンツが消費されたときにポイントを与えるために使用することができます。以下にいくつかのアイデアを紹介します：

- クイズのフィードバックにドロップを設置し、満点の場合のみ表示する。
- ディープコンテンツにドロップを置き、その消費に報酬を与える。
- 興味深いフォーラムディスカッションにドロップを置く
- レッスンモジュールの見つけにくいページにドロップを置く

[詳細](https://docs.levelup.plus/xp/docs/how-to/use-drops?ref=blockxp_help)';
$string['dropsintro'] = 'ドロップとは、コンテンツに直接配置されたコードのことで、ユーザーが遭遇するとポイントが付与されます。';
$string['editcondition'] = '編集条件';
$string['editingdefaultsettingsinwholesitemodenotice'] = '**注意！*** 現在有効な設定を変更するのではなく、デフォルト値を編集することになります。レベルアップXPはサイト全体で使用されるため、あなたの目的はサイト全体の設定を変更することでしょう。設定を変更するには、[ここに移動]({$a->url})するか、XPブロック自体から "設定 "リンクをたどってください。';
$string['editinstructions'] = '情報の編集';
$string['enablecheatguard'] = 'チート防止を有効にする';
$string['enablecheatguard_help'] = 'チートガードは、同じページを延々とリフレッシュしたり、同じ動作を何度も繰り返したりといった、明らかなテクニックを使ってシステムを悪用する学生を防ぐための、シンプルで安価なメカニズムを提供します。

[詳細](https://docs.levelup.plus/xp/docs/getting-started/cheat-guard?ref=blockxp_help)';
$string['enableinfos'] = '詳細ページを有効にする';
$string['enableinfos_help'] = '\'No’にすると、学習者は詳細ページを見ることができなくなります．';
$string['enableladder'] = 'リーダーボードの有効化';
$string['enableladder_help'] = '\'No\'に設定した場合、生徒はリーダーボードを見ることができません。';
$string['enablelevelupnotif'] = 'レベルアップ通知を有効にする';
$string['enablelevelupnotif_help'] = '\'Yes\' の場合、新たなレベルに達した学習者にポップアップのお祝いが表示されます．';
$string['enablelogging'] = 'ログを有効にする';
$string['enablexpgain'] = '経験値増加を有効にする';
$string['enablexpgain_help'] = '\'No\'に設定した場合、誰もコースでポイントを獲得することはできません。これは獲得ポイントを凍結する、または特定の時点で有効にするのに便利です。

これは_block/xp:earnxp_ケイパビリティを使用して、より細かくコントロールすることもできます。';
$string['entersearchterm'] = '検索用語を入力';
$string['errorcontextcoursemismatchforwholesite'] = 'このページ<em>Level Up XP</em>のURLが現在のプラグイン設定と一致しません。あなたの現在の設定は<em>Level Up XP</em>「サイト全体」で使用されることを宣言していますが、このページは「コースごと」で使用されることを期待しています。<a href="{$a->nexturl}">ここをクリック</a>して正しいページに移動してください。設定を変更したい場合は、管理設定の「block_xp_context」を検索してください。';
$string['errorcontextcoursemismatchpercourse'] = 'この<em>Level Up XP</em>ページのURLが現在のプラグイン設定と一致しません。あなたの現在の設定は<em>Level Up XP</em>を「コースごと」に使用することを宣言していますが、このページは「サイト全体」に使用されることを期待しています。これはダッシュボードまたはフロントページに追加された<em>block</em>に起因している可能性が高いです。後者のページからブロックを削除し、個々のコースからのみブロックを使用してください。';
$string['errorformvalues'] = 'フォームの値にいくつか問題があります。';
$string['errorlevelsincorrect'] = '最小レベル数は2';
$string['errornotalllevelsbadgesprovided'] = 'すべてのレベルバッジが提供されているわけではありません。未提供です： {$a}';
$string['errorunknownevent'] = 'エラー：不明なイベント';
$string['errorunknownmodule'] = 'エラー：不明なモジュール';
$string['errorxprequiredlowerthanpreviouslevel'] = '必要なポイントは、前回のレベル以下です。';
$string['event_user_leveledup'] = 'レベルアップしたユーザー';
$string['eventis'] = 'イベントは{$a}';
$string['eventname'] = 'イベント名';
$string['eventproperty'] = 'イベントプロパティ';
$string['eventsrules'] = 'イベント規定';
$string['eventsrules_help'] = 'このプラグインは生徒が行ったアクションにポイントを割り当てるために、イベントを利用しています。
下記のフォームを使用して、独自のルールを追加したり、デフォルトのルールを変更することができます。

学生がコースでアクションを実行する際、どのイベントがトリガーされるか確認するため、プラグインの_Log_ページを確認することをお勧めします。

追加リソース

- 経験ポイントはどのように計算されますか](https://docs.levelup.plus/xp/docs/getting-started/points-calculation?ref=blockxp_help)
- ルールのトラブルシューティング](https://docs.levelup.plus/xp/docs/troubleshooting/event-rule-not-working?ref=blockxp_help)';
$string['eventsrulesintro'] = '生徒の動作を観察し、その動作に応じてポイントを与える。';
$string['eventtime'] = 'イベント開催時間';
$string['filterbyuser'] = 'ユーザーで絞り込む';
$string['filtermodules'] = 'フィルターモジュール';
$string['for1day'] = '1日';
$string['for1month'] = '1ヶ月間';
$string['for1week'] = '1週間';
$string['for3days'] = '3日間';
$string['forever'] = 'ずっと';
$string['forthewholesite'] = 'サイト全体';
$string['give'] = '与える';
$string['gotofullladder'] = '全リーダーボードへ';
$string['graderules'] = 'グレード規定';
$string['graderules_help'] = '生徒は成績と同数のポイントを獲得する。
5/10の評点と5/100の評点はともに学生に5ポイントを与えます。
学生の評点が複数回変更された場合、学生は最大評点と同じポイントを獲得します。
学生から減点されることはなく、マイナスの評点は無視されます。

例 アリスは課題を提出し、40/100の評点を受け取りました。レベルアップXP_では、アリスは40点の評定を受けます。
アリスは課題に再挑戦しますが、今度は評点が100分の25に下げられます。レベルアップXP_でのアリスの点数は変わりません。
最後の挑戦でアリスは60/100点を取り、_レベルアップXP_で20点を追加で獲得し、獲得した点の合計は60点です。

[詳しくは_レベルアップXP_のドキュメントを参照](https://docs.levelup.plus/xp/docs/how-to/grade-based-rewards?ref=blockxp_help)';
$string['graderulesintro'] = '評定規則により、利用者は獲得した評定と同等のポイントを受け取ることができる。';
$string['grid'] = 'グリッド';
$string['hasbadgeaward'] = '表彰バッジ一覧';
$string['hasdescription'] = '解説一覧';
$string['hasname'] = '名前一覧';
$string['hasnobadgeaward'] = '表彰バッジなし';
$string['hasnodescription'] = '解説なし';
$string['hasnoname'] = '名前なし';
$string['hasnopopupmessage'] = 'メッセージなし';
$string['haspopupmessage'] = 'メッセージ一覧';
$string['hideparticipantsidentity'] = '参加者の個人情報を隠す';
$string['hiderank'] = 'ランクを隠す';
$string['importpoints'] = 'ポイントインポート';
$string['importpoints_help'] = 'インポートは学生の得点を増やす、または提供された値で上書きするために使用することができます。

インポートではエクスポートされたレポートと同じ書式を使用しないことに注意してください。必要な書式は[ドキュメント](https://docs.levelup.plus/xp/docs/how-to/import-points/importing-points-from-csv?ref=localxp_help) に記載されており、[サンプルファイル](https://docs.levelup.plus/xp/docs/how-to/import-points/importing-points-from-csv?ref=localxp_help#sample-file) が利用できます。';
$string['importpointsintro'] = 'CSVファイルからポイントをインポートし、オプションで受信者にメッセージを送信します。';
$string['incourses'] = 'コース内';
$string['ineffective'] = '効果なし';
$string['infos'] = '詳細';
$string['installed'] = 'インストール済み';
$string['instructions'] = '詳細はこちら';
$string['invalidxp'] = '無効なポイント数';
$string['keeplogs'] = 'ログを保存する';
$string['ladder'] = 'リーダーボード';
$string['ladderadditionalcols'] = '追加カラム';
$string['ladderadditionalcols_help'] = 'この設定は、リーダーボードに表示される追加の列を決定する。複数の列を選択したり、選択した列の選択を解除するには、クリック中にCTRLまたはCMDキーを押してください。';
$string['ladderempty'] = 'リーダーボードは現在空欄です、後でまた来てね！';
$string['learnmore'] = '詳細はこちら';
$string['level'] = 'レベル';
$string['levelbadges'] = 'レベルバッヂ';
$string['levelbadges_help'] = '個々のレベルの外観を置き換えるために画像をアップロードします。

ファイル名は[level].[file extension]とし、例えば1.png、2.jpgなどとしてください。

100x100ピクセルのサイズで、以下のタイプの画像をお勧めします： GIF、JPEG、PNG、SVG。';
$string['levelbadgesformhelp'] = 'ファイル名を[level].[file extension] にしてください．例: 1.png, 2.jpg, etc... 画像サイズは100x100を推奨します．';
$string['levelcount'] = 'レベルカウント';
$string['leveldesc'] = 'レベル説明';
$string['leveldesc_help'] = 'レベルに関する短い説明で、情報ページにレベル自体と一緒に表示されます。このレベルを達成した学習者へのご褒美を説明したり、このレベルを達成するための学習方法を記載したり、遊び心を持ってレベルを説明したりすることができます (例: _Only the bravest souls have been known to attain this level_)。';
$string['leveldescriptiondesc'] = '情報ページで学生に表示される、レベルの短い説明。';
$string['levelname'] = 'レベル名';
$string['levelname_help'] = '時々表示されるデフォルトの_Level #1_、_Level #2_などの代わりに表示する短い名前です。いくつかのレベルに名前を付ける場合、すべてのレベルに名前を付けることをお勧めします！';
$string['levelpointslength'] = '必要ポイント';
$string['levelpointsstart'] = 'スタート';
$string['levels'] = 'レベル';
$string['levelsappearance'] = 'レベルの外観';
$string['levelssaved'] = 'レベルは保存されました。';
$string['levelswillbereset'] = '注意： このフォームを保存すると、全員のレベルが再計算されます！';
$string['levelupoptionsunavailableforlevelone'] = '第1レベルでは、レベル達成に関するオプションは利用できません。';
$string['levelx'] = 'レベル#{$a}';
$string['likenotice'] = 'このプラグインが気に入りましたか？Moodle.orgのお気に入りに追加して、GitHubに登録してください。';
$string['limitparticipants'] = '参加者を制限する';
$string['limitparticipants_help'] = 'この設定は、リーダーボードに誰が表示されるかをコントロールします。隣人とは、現在のユーザーの上下にランク付けされた参加者のことです。例えば、「2人の隣人を表示」を選択した場合、現在のユーザーより直接上位と下位にランクされている2人の参加者のみが表示されます。';
$string['list'] = 'リスト';
$string['logging'] = 'ログ管理';
$string['manually'] = '手動';
$string['maxactionspertime'] = '時間枠内の最大アクション数';
$string['maxactionspertime_help'] = '指定された時間内にポイントを獲得できるアクションの最大数。それ以降のアクションは無視される。この値が空であるか、0に等しい場合は適用されない。';
$string['menu'] = 'メニュー';
$string['movecondition'] = '移動条件';
$string['moverule'] = '移動ルール';
$string['name'] = '名称';
$string['namecontains'] = '「{$a}」を含む';
$string['nameequalsto'] = '「{$a}」と等しい';
$string['navbardisplay'] = 'ナビゲーションバーに表示';
$string['navbardisplay_desc'] = '有効な場合、ユーザのレベルはトップナビゲーションバーに表示されます。プラグインが「コースごと」に使用されている場合、コースにのみ表示されます。この機能はテーマに大きく依存しており、サードパーティのテーマではうまく動作しないか、まったく動作しない可能性があることに注意してください。[詳細はこちら](https://docs.levelup.plus/xp/docs/navbar-display)';
$string['navcompletionrules'] = '完了';
$string['navdrops'] = 'ドロップ';
$string['naveventrules'] = 'イベント規定';
$string['navgraderules'] = 'グレード規定';
$string['navimport'] = 'インポート';
$string['navinfos'] = '詳細';
$string['navladder'] = 'リーダーボード';
$string['navlevels'] = 'レベル';
$string['navlevelssetup'] = '設定';
$string['navlog'] = 'ログ';
$string['navpoints'] = 'ポイント';
$string['navpromo'] = 'Plus有料版';
$string['navreport'] = 'レポート';
$string['navrules'] = 'ルール';
$string['navsettings'] = '設定';
$string['navvisuals'] = 'ビジュアル';
$string['nextlevelin'] = '次のレベル';
$string['noconditionsyet'] = 'まだ条件を設定していません！';
$string['noconditionsyetintro'] = '条件を追加することから始めましょう。';
$string['nodescription'] = '記述なし';
$string['noissuesidentified'] = '特になし';
$string['nologsrecordedyet'] = 'ログはまだ記録されていません。';
$string['noname'] = '名前なし';
$string['noneareavailable'] = 'いずれもない。';
$string['notecompatibilityissues'] = '以下の互換性の問題にご注意ください：';
$string['notesomesettingslocked'] = '管理者によってロックされている場合、編集できない設定もありますのでご注意ください。';
$string['nothingmatchesfilter'] = 'フィルターに一致するものはない。';
$string['numberoflevels'] = 'レベル数';
$string['occasionally'] = '時々';
$string['outofsync'] = '同期ずれ';
$string['outofsyncexcessive'] = '過度の同期ずれ';
$string['outofsyncexcessiveinfo'] = 'XP+はXPより過度に古いため、予期せぬ問題を引き起こす可能性がある。誤動作を防ぐため、XP+は将来的に自動的に無効化される可能性があります。';
$string['outofsyncinfo'] = 'XPのプラグインは互いに互換性がないため、予期せぬ問題を引き起こす可能性がある。';
$string['participant'] = '参加者';
$string['participants'] = '参加者一覧';
$string['participatetolevelup'] = '科目の経験値をためてレベルアップを目指せ!';
$string['perpagecolon'] = 'ページあたり：';
$string['pickaconditiontype'] = 'コンディションタイプを選ぶ';
$string['pluginavailabilityxpdesc'] = 'このプラグインにより、インストラクターは学生のレベルに応じてアクティビティへのアクセスを制限することができます。';
$string['pluginenrolxpdesc'] = 'このプラグインは学生の他のコースレベルに基づいたコースへの自動登録を可能にします。';
$string['pluginshortcodesdesc'] = 'このプラグインは、XPに関連する要素（ポイント、レベル、リーダーボード、...）をコンテンツに含めたり、生徒のレベルに応じてコンテンツを非表示にしたり、表示したりすることで、インストラクターが教材をカスタマイズすることができます。';
$string['pluginsoutofsync'] = 'プラグインが同期していません。

これは、_レベルアップXP_をアップグレードしたが、_レベルアップXP+_をアップグレードしていないことを意味します。問題を防ぐために最善を尽くしておりますが、_Level Up XP_自体も含め、いくつかの機能が正しく機能しなくなる可能性があります。そのため、_Level Up XP+_を最新のリリースにアップグレードすることをお勧めします。[続きを読む]({$a->url})';
$string['pluginxmaybeincompatible'] = 'このバージョンの{$a->name} ({$a->component})は、Moodle {$a->version}と互換性がないかもしれません。';
$string['pointsintimelinker'] = 'ごとに';
$string['pointsperlevel'] = 'レベルごとのポイント';
$string['pointsrequired'] = '必要なポイント';
$string['pointstoaward'] = '付与ポイント';
$string['pointstoaward_help'] = '条件が満たされたときに与えるポイント数。';
$string['popupnotificationmessage'] = 'ポップアップメッセージ';
$string['popupnotificationmessagedesc'] = 'ポップアップ通知内に表示される、ユーザのレベル達成を祝福するオプションのメッセージ。';
$string['potentialmoodleincompatibility'] = 'Moodleとの非互換性の可能性';
$string['privacy:metadata:log'] = 'イベントのログを保存';
$string['privacy:metadata:log:eventname'] = 'イベント名';
$string['privacy:metadata:log:time'] = '発生した日付';
$string['privacy:metadata:log:userid'] = 'ポイントを獲得したユーザー';
$string['privacy:metadata:log:xp'] = '大会のポイント';
$string['privacy:metadata:prefintro'] = 'ブロックのイントロをユーザーが解除したかどうかを記録';
$string['privacy:metadata:prefladderpagesize'] = 'リーダーボードを表示する際にユーザーが希望するページサイズ';
$string['privacy:metadata:preflevelup'] = 'ユーザにレベルアップ通知を表示するかどうかを記録';
$string['privacy:metadata:prefnotices'] = 'ユーザーがサポート通知を閉じたかどうかを記録';
$string['privacy:metadata:prefseenpromo'] = 'ユーザーがいつプロモページを閲覧したかを記録';
$string['privacy:metadata:xp'] = 'ユーザーのポイントとレベルを保存';
$string['privacy:metadata:xp:lvl'] = 'ユーザーのレベル';
$string['privacy:metadata:xp:userid'] = 'ユーザー';
$string['privacy:metadata:xp:xp'] = 'ユーザーのポイント';
$string['privacy:path:logs'] = 'ログ';
$string['progress'] = '進捗状況';
$string['progressbar'] = '進捗状況一覧';
$string['promocheatguard'] = 'このチートガードは、長い時間枠をカバーするようには設計されていません。より多くの時間枠と他の機能のロックを解除するためにアップグレードすることを検討してください。';
$string['promocontactintro'] = '詳細はお問い合わせください。';
$string['promocontactus'] = '連絡先';
$string['promoemailusat'] = 'Eメールでのお問い合わせは _levelup@branchup.tech_ まで。';
$string['promoerrorsendingemail'] = 'おっと！メッセージを送信できませんでした...直接メールでお問い合わせください： {$a}. ありがとうございました！';
$string['promointro'] = 'ゲームマスターになろう！レベルアップXP+で追加機能をアンロックし、ゲーミフィケーションをまったく新しいレベルに引き上げましょう！';
$string['promointroinstalled'] = 'アドオン _Level Up XP+_ がシステムにインストールされ、すべての機能が有効になっています。';
$string['promorulesdidyouknow'] = '<em>Level Up XP+</em>では、<em>コース</em>や <em>活動</em>を完了するとポイントがもらえたり、<em>成績</em>に応じてポイントがもらえたりすることをご存知ですか？<a href="{$a->url}">詳しくはこちらをご覧ください</a>。';
$string['promoyourmessagewassent'] = 'ありがとうございます。すぐにお返事いたします。';
$string['property:action'] = 'イベントアクション';
$string['property:component'] = 'イベントコンポーネント';
$string['property:crud'] = 'イベントCRUD';
$string['property:eventname'] = 'イベント名';
$string['property:target'] = 'イベント対象';
$string['questreleasenotice'] = '🎉 新しいゲーミフィケーション・プラグイン「レベルアップクエスト」を発表できることを嬉しく思います。🥳コースをエキサイティングな冒険に変え、意欲を高める戦略や お祝いの言葉でいっぱいにしよう！ 🤯[ウェブサイト]({$a->questurl})と私たちの[発売記事はこちら]({$a->questblogurl})をチェックしてください。👈';
$string['quickeditpoints'] = 'ポイントのクイック編集';
$string['rank'] = 'ランク';
$string['ranking'] = 'ランキング';
$string['ranking_help'] = 'ランクは、リーダーボードにおける現在のユーザーの絶対的な位置です。相対順位は、そのユーザーと隣接するユーザーとの経験ポイントの差です。';
$string['reallydeleteuserstate'] = 'ユーザーを削除するのは、リーダーボードから削除する場合のみ有効です。それ以外の理由の場合は、代わりにポイントを0に設定することをお勧めします。ユーザーを削除しても、今後ポイントを獲得することには影響しません。

重要なのは、サイト全体で_レベルアップXP_を使用している場合、その選手を削除するとレポートから消えてしまい、その場合ポイントを再割り当てすることができなくなるということです。しかし、コースごとに_レベルアップXP_を使用している場合、コースに登録されている学生はレポートに表示されます。

本当にこのユーザのポイントを削除しますか?';
$string['reallydeleteuserstateandlogs'] = 'ユーザーを削除すると、リーダーボードから削除され、関連するすべてのログが削除されます。

ログを削除することで、ユーザーが以前の行動でポイントを再獲得できる場合があります。もしユーザーのポイントをリセットしたいだけであれば、代わりにポイントを0に設定することをお勧めします。ユーザーを削除しても、将来ポイントを獲得できるようになることには影響しません。

重要なのは、サイト全体で_レベルアップXP_を使用している場合、ユーザーを削除するとレポートからそのユーザーが消えてしまい、その場合、ポイントを再度割り当てることができなくなるということです。しかし、コースごとに_レベルアップXP_を使用している場合、コースに登録されている学生はレポートに表示されます。

本当にこのユーザーのポイントとログを削除しますか?';
$string['reallyresetallcourselevelstodefaults'] = '本当にすべてのコースのレベルをデフォルトのレベルに戻しますか？この操作は元に戻せません。';
$string['reallyresetallcoursestodefaults'] = '本当にすべてのコースのルールをデフォルトのルールにリセットしますか？この操作は元に戻せません。';
$string['reallyresetallcoursevisualstodefaults'] = '本当にすべてのコースレベルの外観をデフォルトの外観にリセットしますか? この操作は元に戻せません。';
$string['reallyresetcourselevelstodefaults'] = '本当にコースレベルをデフォルトレベルに戻しますか？この操作は元に戻せません。';
$string['reallyresetcourserulestodefaults'] = '本当にコースルールをデフォルトルールに戻しますか? この操作は元に戻せません。';
$string['reallyresetcoursevisualstodefaults'] = '本当にコースレベルの外観をデフォルトの外観にリセットしますか? この操作は元に戻せません。';
$string['reallyresetdata'] = 'このコースの全員のレベルとポイントを本当にリセットしますか？';
$string['reallyresetgroupdata'] = 'このグループの全員のレベルとポイントを本当にリセットしますか？';
$string['reallyreverttopluginsdefaults'] = '本当にプラグインが提案するデフォルトルールにリセットしますか？この操作は元に戻せません。';
$string['recentrewards'] = '最近の獲得';
$string['recommended'] = 'おすすめ';
$string['recommendedplugins'] = 'おすすめプラグイン';
$string['releasenotes'] = 'リリース情報';
$string['remaining'] = '残り';
$string['removefilter'] = 'フィルタを削除する';
$string['reportisempty'] = 'レポートは空欄で、生徒はまだポイントを獲得していません。';
$string['reportisemptyenrolstudents'] = 'レポートは空です。このコースに学生は登録されていますか？';
$string['requires'] = '獲得条件';
$string['resetallcoursestodefaults'] = '全コースをデフォルトに戻す';
$string['resetallcoursestodefaultsintro'] = '下のボタンをクリックすると、すべてのコースが上記のデフォルトにリセットされます。';
$string['resetcoursedata'] = 'コース内のデータをリセットする';
$string['resetcourserulestodefaults'] = 'コースのルールをデフォルトに戻す';
$string['resetgroupdata'] = 'グループのデータをリセットする';
$string['resetlevelstodefaults'] = 'レベルをデフォルトに戻す';
$string['resetvisualstodefaults'] = 'アピアランスをデフォルトに戻す';
$string['resultsfilteredforn'] = '{$a}でフィルタリングした結果。';
$string['reverttopluginsdefaults'] = 'プラグインのデフォルトに戻す';
$string['reverttopluginsdefaultsintro'] = '上記のデフォルトをプラグインのデフォルトに戻したい場合、下のボタンを使用してください。これは既存のコースのルールには影響しません。';
$string['reward'] = '報酬';
$string['rule'] = 'ルール';
$string['rule:contains'] = '含む';
$string['rule:eq'] = '等しい';
$string['rule:eqs'] = '全く等しい';
$string['rule:gt'] = 'より大きい';
$string['rule:gte'] = '以上';
$string['rule:lt'] = 'より小さい';
$string['rule:lte'] = '以下';
$string['rule:regex'] = '参照に合っている';
$string['ruleadded'] = '条件が追加されました。';
$string['rulecm'] = '活動またはリソース';
$string['rulecm_help'] = 'この条件は、指定されたアクティビティやリソースでイベントが発生したときに満たされます。';
$string['rulecmdesc'] = '活動またはリソースは \'{$a->contextname}\'';
$string['rulecmdescwithcourse'] = '活動またはリソースは: \'{$a->contextname}\' in \'{$a->coursename}\'.';
$string['rulecminfo'] = 'この条件は、アクションが特定の活動やリソースで行われることを要求します。';
$string['ruleevent'] = '特定のイベント';
$string['ruleeventdesc'] = 'このイベントは\'{$a->eventname}\'';
$string['ruleeventinfo'] = 'ユーザーが実行しなければならないアクションを、厳選されたイベントリストから選択します。';
$string['rulefilterany'] = 'いずれも';
$string['rulefilteranycm'] = 'いずれかの活動';
$string['rulefilteranycmdesc'] = 'この条件は、いずれかの活動に合致する。';
$string['rulefilteranycourse'] = 'いずれかのコース';
$string['rulefilteranycoursedesc'] = 'この条件はいずれかのコースにマッチする。';
$string['rulefilteranydesc'] = 'この条件はすべてのものにマッチする。';
$string['rulefilteranysection'] = 'いずれかのセクション';
$string['rulefilteranysectiondesc'] = 'この条件はいずれかのセクションにマッチする。';
$string['rulefiltercm'] = '特定の活動';
$string['rulefiltercmdesc'] = 'コース内の特定の活動やリソースを対象とする。';
$string['rulefiltercmname'] = '活動名';
$string['rulefiltercmnamedesc'] = '活動名に基づく条件。';
$string['rulefiltersection'] = '特定のセクション';
$string['rulefiltersectiondesc'] = 'コース内の特定のセクションを対象とする。';
$string['rulefilterthiscourse'] = '現在のコース';
$string['rulefilterthiscoursedesc'] = '現在のコースを対象とする。';
$string['ruleproperty'] = 'イベントプロパティ';
$string['rulepropertydesc'] = 'プロパティ \'{$a->property}\' {$a->compare} \'{$a->value}\'.';
$string['rulepropertyinfo'] = 'この条件は、イベントとそのプロパティを技術的に理解しているパワーユーザー向けです。';
$string['ruleset'] = '条件セット';
$string['ruleset:all'] = 'すべての条件が当てはまる';
$string['ruleset:any'] = 'いずれかの条件が当てはまる';
$string['ruleset:none'] = 'どの条件も当てはまらない';
$string['rulesetinfo'] = '複数の条件を1つにまとめる。';
$string['rulesformhelp'] = '<p>このプラグインはイベントを利用して、生徒が行ったアクションにポイントを属性します。下記のフォームから独自のルールを追加したり、デフォルトのルールを見ることができます。</p>
<p>あなたがコースでアクションを実行する際に、どのようなイベントがトリガーされるかを確認するために、プラグインの<a href="{$a->log}">ログ</a>をチェックすることをお勧めします。: <a href="{$a->list}">全イベントのリスト</a>, <a href="{$a->doc}">開発者ドキュメント</a>.</p>
<p>最後に、プラグインは以下について考慮しないことに注意してください。:
<ul>
    <li>管理者、ゲスト、またはログインしていないユーザーによって実行されたアクション。</li>
    <li>ケイパビリティブロック(例:earnxp)を持たないユーザーが行う行為。</li>
    <li>不正行為を防止するために、短い時間内に繰り返し行われる行為。</li>
    <li>匿名フィードバックなどで<em>匿名</em>とフラグが立てられたイベント。</li>
    <li>イベントに参加できるレベルではない場合。</li>
</ul>
</p>';
$string['rulesscope'] = 'スコープ';
$string['rulesscope_help'] = 'ルールのスコープはルールが適用されるタイミングを決定します。

ルールはサイト全体およびコース固有の2つのスコープで作成することができます。可能な限り、コース固有のルールが最初に評価され、次にサイト全体のルールが評価されます。このアプローチにより、教育者はサイト全体（サイトワイド）に適用される広範なルールを作成し、次に個々のコース用に調整することができます。

- サイト全体： コース固有のルールが設定されている場合を除き、サイト全体に適用されます。
- コース： これらのルールは特定のコース内でのみ適用されます。サイト全体のルールよりも優先されます。';
$string['ruletypecmcompletion'] = '活動完了';
$string['ruletypecmcompletiondesc'] = '活動完了のマークがついたらポイントを与える。';
$string['ruletypecoursecompletion'] = 'コース完了';
$string['ruletypecoursecompletiondesc'] = 'コース完了がマークされた場合、ポイントを与える。';
$string['ruletypesectioncompletion'] = 'セクション完了';
$string['ruletypesectioncompletiondesc'] = 'コースセクションが完了とマークされた場合、ポイントを与える。';
$string['searchandselectcourse'] = 'コースの検索と選択';
$string['searchandselectmodule'] = '活動やリソースの検索と選択';
$string['selectcourse'] = 'コース選択';
$string['send'] = '送信';
$string['setpoints'] = '設定ポイント';
$string['shortcode:xpbadge'] = '現在のユーザーのレベルに一致したバッジ。';
$string['shortcode:xpiflevel'] = '現在のユーザーのレベルが一致したときにコンテンツを表示する。';
$string['shortcode:xpiflevel_help'] = 'このショートコードをフォーマットするには、以下の例を参照してください。レベルが厳密に指定されている場合、コンテンツは他のルールに関係なく表示されます。
コンテンツが表示されるためには、_より大きい_ルールと_未満_ルールがすべて一致する必要があります。その結果、コンテンツが表示されなくなることがあるので注意してください！
教師、または編集機能を持つユーザーは、常にすべてを見ることに注意してください。

、、、
[xpiflevel 1 3 5］
    ユーザーのレベルがちょうど1、3、5の場合に表示される。
[/xpiflevel]

[xpiflevel >3］
    ユーザーのレベルが3より大きい場合に表示される。
[/xpiflevel]

[xpiflevel >=3]
    ユーザーのレベルが3以上の場合に表示される。
[/xpiflevel]

[xpiflevel >=10 <20 30]
    ユーザーのレベルが10以上であり、かつ厳密に20未満である場合に表示される。
    または厳密に30に等しい場合に表示される。
[/xpiflevel]

[xpiflevel <=10 >=20]
ユーザのレベルが10以下かつ20以上であることはないため、表示されません。
[/xpiflevel]
、、、

これらのショートコード同士を入れ子にすることはできません。';
$string['shortcode:xpladder'] = 'リーダーボードの一部を表示します。';
$string['shortcode:xpladder_help'] = 'デフォルトでは、現在のユーザーを囲むリーダーボードの一部が表示されます。

```
[xpladder］
```

現在のユーザーの隣ではなく、上位10人の生徒を表示するには、パラメータ `top` を設定してください。`top=20`のように、オプションで表示するユーザー数を設定することができます。

```
[xpladder top]
[xpladder top=15]
```

表の下にリーダーボード全体へのリンクが自動的に表示されます。このようなリンクを表示したくない場合は、引数 `hidelink` を追加してください。

```
[xpladder hidelink］
```

デフォルトでは、テーブルにはプログレスバーを表示するプログレスカラムは含まれていません。もしそのようなカラムがリーダーボードの設定の追加カラムで選択されている場合は、引数 `withprogress` を使って表示することができます。

```
[xpladder withprogress]
```

コースがグループを使用している場合、リーダーボードはどのグループのリーダーボードを表示するか推測することに注意してください。';
$string['shortcode:xplevelname'] = 'レベル名を表示します。';
$string['shortcode:xplevelname_help'] = 'デフォルトでは、このタグは現在のユーザのレベル名を表示します。
あるいは、`level` 引数を使用して特定のレベルの名前を表示することもできます。

```
[xplevelname］
[xplevelname level=5］
```

引数に `level` を指定し、そのレベルが存在しない場合、何も表示されません。';
$string['shortcode:xppoints'] = '経験点としてフォーマットされた点数を表示する。';
$string['shortcode:xppoints_help'] = 'デフォルトでは、現在のユーザーのポイント数が表示されます。あるいは、この値を上書きする数値を指定することもできます。

ポイントのスタイリングは、任意の値が表示されるか、現在のユーザのポイントが表示されるかに依存します。引数 `plain` を指定することで、スタイル指定を解除することができる。

```
[xppoints]
[xppoints 500]
[xppoints 123 plain]
```';
$string['shortcode:xpprogressbar'] = '現在のユーザーの次のレベルへのプログレスバー。';
$string['sitewide'] = 'サイト全体';
$string['somefeaturesrequireotherplugins'] = 'いくつかの機能は、追加のプラグインをインストールする必要があります。';
$string['someoneelse'] = '他の誰か';
$string['somethinghappened'] = '変化が起きた';
$string['taskcollectionloggerpurge'] = '収集ログの削除';
$string['taskusagereport'] = '使用レポート';
$string['thankyou'] = 'ありがとう！';
$string['timebetweensameactions'] = '同じ動作の間に要する時間';
$string['timebetweensameactions_help'] = '以前にすでに起こったアクションが再び受け入れられるまでに必要な最小時間。アクションは、それが同じコンテキストとオブジェクトに配置された場合、同一とみなされます。この値が空、または0に等しい場合、適用されません。';
$string['timeformaxactions'] = '最大アクションの時間枠';
$string['timeformaxactions_help'] = 'ユーザーが最大アクション数を超えてはならない時間枠（秒単位）。';
$string['total'] = '合計';
$string['tryme'] = '試してみる';
$string['unavailable'] = '利用不可';
$string['unknownactivitya'] = '不明な活動({$a})';
$string['unknownbadgea'] = '不明なバッジ({$a})';
$string['unknownconditiona'] = '不明な条件({$a})';
$string['unknowneventa'] = '不明なイベント({$a})';
$string['unknownsectiona'] = '不明なセクション({$a})';
$string['unknowntypea'] = '不明なタイプ({$a})';
$string['unlockfeaturewithxpplus'] = 'XP+でこの機能をアンロックする。<a href="{$a}">さらに詳しく</a>';
$string['updateandpreview'] = '更新とプレビュー';
$string['upgradingplugins'] = 'プラグインをアップグレード';
$string['urlaccessdeprecated'] = 'このURLからのアクセスは非推奨です。リンクを更新してください。';
$string['usagereport'] = '利用レポートを共有する';
$string['usagereport_desc'] = '定期的にプラグイン開発者と匿名の使用情報を共有します。この情報はプラグインがどのように使用されているかをよりよく理解し、プラグインの開発に影響を与えます。共有される情報には、Moodleサイトの基本情報 (URL、バージョン)、およびプラグインの利用情報 (ポイントを獲得したユーザ数、設定の概要、使用されたルールなど) が含まれます。';
$string['usealgo'] = 'アルゴリズムを使用';
$string['usecustomlevelbadges'] = 'カスタム・レベルバッジの使用';
$string['usecustomlevelbadges_help'] = 'yesに設定すると、各レベルに画像を設定する必要があります。';
$string['usingalgo'] = 'アルゴリズム';
$string['value'] = '値';
$string['valuessaved'] = '値は正常に保存されました。';
$string['viewas'] = '次のように表示';
$string['viewlogs'] = 'ログを見る';
$string['viewtheladder'] = 'ラダーを見る';
$string['visualsintro'] = 'レベルの外観やポイントの意味をカスタマイズできます。';
$string['wherearexpused'] = 'ポイントを使用する場所';
$string['wherearexpused_desc'] = '「コース内」に設定された場合、獲得ポイントはブロックが追加されたコースでのみ考慮されます。「サイト全体」に設定された場合、ユーザーはコースごとに選択的にレベルアップするのではなく、サイト内で「レベルアップ」し、サイト全体で獲得したすべてのポイントが使用されます。';
$string['xp'] = '経験ポイント';
$string['xp:addinstance'] = '新しいブロックを追加する';
$string['xp:earnxp'] = 'ポイント獲得';
$string['xp:manage'] = '経験ポイントの管理';
$string['xp:myaddinstance'] = 'ダッシュボードにブロックを追加する';
$string['xp:view'] = 'ブロックとその関連ページを見る';
$string['xp:viewlogs'] = 'ログを見る';
$string['xp:viewreport'] = 'レポートを見る';
$string['xpgaindisabled'] = 'ポイント獲得不可';
$string['xpplusrequired'] = 'XP+が必要です。';
$string['xprequired'] = 'XPが必要です。';
$string['xptogo'] = 'あと[{$a}]';
$string['youleveledupexcl'] = 'レベルアップしたね！';
$string['youreachedlevel'] = 'あなたはこのレベルに到達しました：';
$string['youreachedlevela'] = 'レベルが {$a}に上がった!';
$string['yourmessage'] = 'あなたのメッセージ';
$string['yourownrules'] = '独自のルール';
