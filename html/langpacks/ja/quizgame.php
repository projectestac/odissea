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
 * Strings for component 'quizgame', language 'ja', version '4.4'.
 *
 * @package     quizgame
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievedhighscoreof'] = '{$a} のハイスコアを達成しました。';
$string['attempt'] = '受験 #{$a}';
$string['completiondetail:score'] = '{$a} の最低スコアを獲得する';
$string['completionscore'] = '学生は次の最低スコアを獲得する必要があります:';
$string['completionscoredesc'] = '学生は次の最低スコアを獲得する必要があります: {$a}';
$string['completionscoregroup'] = '必須スコア';
$string['completionscoregroup_help'] = 'この設定を有効にした場合、あなたは活動完了マークされる前に最低スコアが満たされることを要求できます。

それぞれの問題では最初の受験で正解した場合に1000点の価値があります。そのためデフォルトで次のように設定した方が良いでしょう:

(問題数 x 1000)';
$string['emptyquiz'] = '選択したカテゴリ内に多肢選択問題はありません。';
$string['endofgame'] = 'あなたのスコアは {$a} です。 再開するにはスペースを押すかクリックしてください。';
$string['eventgamescoreadded'] = 'クイズベンチャのスコアが記録されました。';
$string['eventgamescoresviewed'] = 'クイズベンチャのスコアが閲覧されました。';
$string['eventgamestarted'] = 'クイズベンチャが開始しました。';
$string['fullscreen'] = 'フルスクリーン';
$string['howtoplay'] = 'プレイ方法';
$string['howtoplay_help'] = 'あなたは矢印キーまたはマウスのドラッグで船を移動できます。

スペースを押すかマウスボタンをクリックしてシュートするか、ゲーム画面のどこでも2本指でタップしてください。

正解をシューティングして可能な限り多くの問題をクリアしてください。幸運を祈ります!';
$string['invalidcmorid'] = 'エラー: あなたはcourse_module IDまたはインスタンスIDを指定する必要があります。';
$string['modulename'] = 'クイズベンチャ';
$string['modulename_help'] = '学生は先延ばししすぎですか? 勉強せずにゲームばかりしていませんか? あなたはそんな学生をやる気にさせれます!

クイズベンチャは追加されたコースから小テスト問題を読み込む活動モジュールです。答えの候補が宇宙船として降りてくるため、あなたは正しいものをシューティングする必要があります。

**注意**: クイズベンチャは評価のためではなく、学習を促進するために設計されています。学生は無限に受験できてすぐにフィードバックを取得できます。このため、学生が学習したかどうかを評価する問題ではなく、答えを学習させたい問題のみを追加してください。';
$string['modulenameplural'] = 'クイズベンチャゲーム';
$string['notyetplayed'] = '未プレイ';
$string['playedxtimeswithhighscore'] = '{$a->times} 回プレイしました。最後のゲームは {$a->score} のハイスコアで終了しました。';
$string['playerscores'] = 'プレイヤスコア';
$string['pluginadministration'] = 'クイズベンチャ管理';
$string['pluginname'] = 'クイズベンチャ';
$string['privacy:metadata:quizgame_scores'] = 'クイズゲームでユーザが選択した答えに関する情報です。';
$string['privacy:metadata:quizgame_scores:quizgameid'] = 'ユーザがクイズゲームの答えを提供する際のIDです。';
$string['privacy:metadata:quizgame_scores:score'] = 'プレイ中のユーザのスコアです。';
$string['privacy:metadata:quizgame_scores:timecreated'] = 'クイズゲームがいつプレイされたかを示すタイムスタンプです。';
$string['privacy:metadata:quizgame_scores:userid'] = 'このクイズゲーム活動をプレイしているユーザのIDです。';
$string['questioncategory'] = '問題カテゴリ';
$string['questioncategory_help'] = 'このゲームで使用するカテゴリを問題バンクから選択してください。

後で評価するために重要ではない問題のみを選択することに留意してください。クイズゲームは無限に受験できて正解または不正解を即座にフィードバックできる小テストの作成に似ています。

**注意**: クイズベンチャは評価のためではなく、学習を促進するために設計されています。学生は無限に挑戦できてすぐにフィードバックを取得できます。このため、学生が学習したかどうかを評価する問題ではなく、答えを学習させたい問題のみを追加してください。';
$string['quizgame'] = 'クイズベンチャ';
$string['quizgame:addinstance'] = 'クイズベンチャインスタンスを追加する';
$string['quizgame:view'] = 'クイズベンチャを表示する';
$string['quizgame:viewallscores'] = 'プレイヤスコアを表示する';
$string['quizgamefieldset'] = 'カスタムフィールドセット例';
$string['quizgamename'] = 'クイズベンチャ名';
$string['quizgamename_help'] = 'このクイズベンチャの名称を何にしますか?';
$string['removescores'] = 'すべてのユーザスコアを削除する';
$string['score'] = 'スコア: {$a->score} ライブ: {$a->lives}';
$string['scoreheader'] = 'スコア';
$string['scoreslink'] = 'すべての受験を表示する';
$string['scoreslinkhelp'] = 'すべてのプレイヤ受験およびスコアを表示する';
$string['sound'] = 'サウンド';
$string['spacetostart'] = 'スタートするにはスペースキーを押すかクリックしてしてください。';
