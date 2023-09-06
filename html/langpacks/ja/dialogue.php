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
 * Strings for component 'dialogue', language 'ja', version '4.1'.
 *
 * @package     dialogue
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = '操作';
$string['ago'] = '前';
$string['attachment'] = '添付ファイル';
$string['attachments'] = '添付ファイル';
$string['bulkopener'] = 'バルク・ルール';
$string['bulkopenrule'] = '対話開始バルク・ルール';
$string['bulkopenrulenotifymessage'] = '<strong>注意:</strong><br/>対話開始バルク・ルールを使う場合、会話はすぐには開始されません。システムのクロン機能が作動する時（普通は30分ごと）に開始されます。';
$string['bulkopenrules'] = '対話開始バルク・ルール';
$string['cachedef_participants'] = '参加者のID（基本情報）';
$string['cannotclosedraftconversation'] = '始まっていない会話を終了することはできません!';
$string['cannotdeleteopenconversation'] = '進行中の会話を削除することはできません';
$string['closeconversation'] = '会話を終了';
$string['closed'] = '終了';
$string['completed'] = '完了';
$string['configmaxattachments'] = '1件の投稿に許される添付ファイルのデフォルトの最大数';
$string['configmaxbytes'] = 'サイトの全対話の添付ファイルのデフォルトの最大容量（コースの制限や他のローカル設定により変化します）';
$string['configtrackunread'] = 'コースのページ上の未読の対話メッセージを追跡する';
$string['configviewconversationsbyrole'] = '実験用: ロールごとに会話を見る（筆者のロールによって会話リストを並べる）';
$string['configviewstudentconversations'] = '実験用: 参加中の会話付きの学生リスト';
$string['conversationcloseconfirm'] = '会話「 {$a} 」を終了しますか?';
$string['conversationclosed'] = '会話「 {$a} 」は終了しました';
$string['conversationdeleteconfirm'] = '会話「  {$a} 」を削除しますか? この操作は取り消せません';
$string['conversationdeleted'] = '会話「 {$a} 」は削除されました';
$string['conversationdiscarded'] = '会話は放棄されました';
$string['conversationopened'] = '会話が開始されました';
$string['conversationopenedcron'] = '会話は自動的に開始されます';
$string['conversationopenedwith'] = '<strong>1</strong>  件の会話が開始されました:';
$string['conversations'] = '会話';
$string['conversationsopenedwith'] = '<strong>{$a}</strong>  件の会話が開始されました:';
$string['cutoffdate'] = '締切日';
$string['datefullyear'] = '{$a->datefull} <small>({$a->time})</small>';
$string['dateshortyear'] = '{$a->dateshort} <small>({$a->time})</small>';
$string['day'] = '日';
$string['days'] = '日';
$string['deleteconversation'] = '会話を削除';
$string['deletereply'] = '返信を削除';
$string['dialogue:addinstance'] = '対話を追加';
$string['dialogue:bulkopenrulecreate'] = '対話開始バルク・ルールを設定';
$string['dialogue:close'] = '会話を終了';
$string['dialogue:closeany'] = 'すべて終了';
$string['dialogue:delete'] = '自分の会話を削除';
$string['dialogue:deleteany'] = 'すべて削除';
$string['dialogue:open'] = '会話を開始';
$string['dialogue:reply'] = '返信';
$string['dialogue:replyany'] = 'すべてに返信';
$string['dialogue:viewany'] = 'すべてを見る';
$string['dialogue:viewbyrole'] = 'ロールごとに会話リストを見る:実験的';
$string['dialoguecron'] = 'Dialogue クロン';
$string['dialogueintro'] = 'Dialogue 説明';
$string['dialoguename'] = 'Dialogue 名称';
$string['displaybystudent'] = '学生ごとに表示';
$string['displayconversationsheading'] = '{$a} 件の会話を表示中';
$string['displaying'] = '表示中';
$string['draft'] = '下書き';
$string['draftconversation'] = '会話の下書き';
$string['draftconversationtrashed'] = '会話の下書きを削除しました';
$string['draftlistdisplayheader'] = '私の下書きを表示中';
$string['draftreply'] = '返信の下書き';
$string['draftreplytrashed'] = '返信の下書きを削除しました';
$string['drafts'] = '下書き';
$string['errorcutoffdateinpast'] = '締切日は過去に設定できません';
$string['erroremptymessage'] = 'メッセージは空白ではいけません';
$string['erroremptysubject'] = 'タイトルは空白ではいけません。';
$string['errornoparticipant'] = '対話は自分以外の誰かと開始しなければなりません...';
$string['eventconversationclosed'] = '会話を終了しました';
$string['eventconversationcreated'] = '会話を設定しました';
$string['eventconversationdeleted'] = '会話を削除しました';
$string['eventconversationviewed'] = '会話が閲覧されました';
$string['eventreplycreated'] = '返信を設定しました';
$string['everybody'] = '全員（飛び入り自由）';
$string['everyone'] = '全員';
$string['everyones'] = '全員の';
$string['firstname'] = '名';
$string['fullname'] = 'フル・ネーム';
$string['groupmodenotifymessage'] = 'この活動はグループ・モードで行われており、どの人と会話を始めることができるか 、また、どの会話が表示されるかに影響を与えます。';
$string['hasnotrun'] = '稼働待機中';
$string['hour'] = '時間';
$string['hours'] = '時間';
$string['includefuturemembers'] = '未来のメンバーを含める';
$string['lastname'] = '姓';
$string['lastranon'] = '最終稼働:';
$string['latest'] = '最新優先';
$string['matchingpeople'] = '({$a}) 人が合致';
$string['maxattachments'] = '添付ファイルの最大数';
$string['maxattachments_help'] = 'この設定は1件の投稿に添付できるファイルの最大数を指定します。';
$string['maxattachmentsize'] = '添付ファイルの最大容量';
$string['maxattachmentsize_help'] = 'この設定は1件の投稿に添付できるファイルの最大容量を指定します。';
$string['message'] = 'メッセージ';
$string['messageapibasicmessage'] = '<p>{$a->userfrom} が、あなたが参加中の会話（タイトル: <i>{$a->subject}</i>）に新しいメッセージを投稿しました<br/><br/><a href="{$a->url}">Moodleで見る</a></p>';
$string['messageapismallmessage'] = 'あなたが参加中の会話に {$a} が新しいメッセージを投稿しました';
$string['messageprovider:post'] = 'Dialogue 通知';
$string['messages'] = 'メッセージ';
$string['minute'] = '分';
$string['minutes'] = '分';
$string['modulename'] = 'Dialogue';
$string['modulename_help'] = 'Dialogueによって、学生あるいは教師は相手と双方向の対話が可能になります。教師がオンラインの活動上で学生に非公開のフィードバックを与える場を必要とする場合、Dialogueは役に立ちます。例えば、ある言語フォーラムに参加している学生が文法的な誤りをおかしたので、教師が学生を困惑させずにその指摘をしたいというような場合、Dialogueはまさにぴったりの場所です。Dialogueの活動は、学内カウンセラーが学生と交流をするにも良い方法となるでしょう - すべての活動は記録され、しかもemailを必ずしも必要としないのです';
$string['modulenameplural'] = 'Dialogue';
$string['month'] = 'ヶ月';
$string['months'] = 'ヶ月';
$string['nobulkrulesfound'] = 'バルク・ルールはありません!';
$string['noconversationsfound'] = '会話はありません!';
$string['nodraftsfound'] = '下書きはありません!';
$string['nopermissiontoclose'] = 'あなたにはこの会話を終了する権限がありません!';
$string['nopermissiontodelete'] = 'あなたには削除する権限がありません!';
$string['nosubject'] = '[タイトルなし]';
$string['numberattachments'] = '{$a} 件の添付ファイル';
$string['numberunread'] = '{$a} 件の未読';
$string['oldest'] = '開始順';
$string['onlydraftscanbetrashed'] = '下書きのみ削除できます';
$string['open'] = '進行中';
$string['openedbyfullyear'] = '<strong>{$a->fullname}</strong><small>が</small>{$a->datefull} <small>({$a->time})に開始</small>';
$string['openedbyshortyear'] = '<strong>{$a->fullname}</strong><small>が</small>{$a->dateshort} <small>({$a->time})に開始</small>';
$string['openedbytoday'] = '<strong>{$a->fullname}</strong> <small>が</small>{$a->time} <small>({$a->timepast}) 前に開始</small>';
$string['openwith'] = '対話を開始';
$string['participants'] = '参加者';
$string['people'] = '対話の相手';
$string['pluginadministration'] = 'Dialogue 管理';
$string['pluginname'] = 'Dialogue';
$string['repliedby'] = '<strong>{$a->fullname}</strong> <small>が返信:</small> {$a->timeago}';
$string['repliedbyfullyear'] = '<strong>{$a->fullname}</strong> <small>が返信:</small> {$a->datefull} <small>({$a->time})</small>';
$string['repliedbyshortyear'] = '<strong>{$a->fullname}</strong> <small>が返信:</small> {$a->dateshort} <small>({$a->time})</small>';
$string['repliedbytoday'] = '<strong>{$a->fullname}</strong> <small>が返信:</small> {$a->time} <small>({$a->timepast}) 前</small>';
$string['reply'] = '返信';
$string['replydeleteconfirm'] = 'この返信を削除しますか?';
$string['replydeleted'] = '返信は削除されました';
$string['replysent'] = '返信は送信されました';
$string['runsuntil'] = '稼働期限:';
$string['savedraft'] = '下書きを保存';
$string['searchpotentials'] = '対話の相手を検索';
$string['second'] = '秒';
$string['seconds'] = '秒';
$string['send'] = '送信';
$string['senton'] = '<small><strong>送信: </strong></small>';
$string['sortedby'] = 'ソート: {$a}';
$string['studenttostudent'] = '学生から学生';
$string['subject'] = 'タイトル';
$string['teachertostudent'] = '教師から学生';
$string['trashdraft'] = '下書きを削除';
$string['unread'] = '未読';
$string['unreadmessages'] = '未読のメッセージ';
$string['unreadmessagesnumber'] = '{$a} 件の未読のメッセージ';
$string['unreadmessagesone'] = '1 件の未読のメッセージ';
$string['usecoursegroups'] = 'コースのグループを使用';
$string['usecoursegroups_help'] = 'もしこのコースにグループがあるならば、対話できる相手は制約されます。対話を開始する人が「すべてのグループにアクセスできる」権限を持たない限り、対話は同じグループ内のメンバーとだけ可能です。';
$string['usesearch'] = '対話する人を検索';
$string['viewconversations'] = '会話を見る';
$string['viewconversationsbyrole'] = 'ロールごとに会話を見る';
$string['week'] = '週';
$string['weeks'] = '週';
$string['year'] = '年';
$string['years'] = '年';
