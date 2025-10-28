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
 * Strings for component 'search', language 'ja', version '4.4'.
 *
 * @package     search
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advancedsearch'] = '高度な検索';
$string['all'] = 'すべて';
$string['allareas'] = 'すべてのエリア';
$string['allcourses'] = 'すべてのコース';
$string['allusers'] = 'すべてのユーザ';
$string['author'] = '著者';
$string['authorname'] = '著者名';
$string['back'] = '戻る';
$string['beadmin'] = 'このページを使用するには管理者である必要があります。';
$string['checkdb'] = 'データベースをチェックする';
$string['checkdbadvice'] = '問題がある場合、あなたのデータベースをチェックしてください。';
$string['checkdir'] = 'ディレクトリをチェックする';
$string['checkdiradvice'] = 'データディレクトリが存在して書き込み可能であるかどうかご確認ください。';
$string['commenton'] = 'コメント';
$string['confirm_delete'] = '本当に {$a} のインデックスを削除してもよろしいですか? 検索エリアがインデックス化されるまでユーザはこのエリアから検索結果を取得することはできません。';
$string['confirm_deleteall'] = '本当にすべてのインデックス化済みコンテンツを削除してもよろしいですか？サイトが再度インデックス化されるまでユーザは検索結果を取得することはできません。';
$string['confirm_indexall'] = '本当にインデックス化済みコンテンツを更新してもよろしいですか? 大量のコンテンツをインデックス化する必要がある場合、この作業には時間を要します。実運用サーバでは通常あなたは「グローバル検索インデックス化」スケジュールタスクにインデックス化させるべきです。';
$string['confirm_reindexall'] = '本当にすべてのサイトコンテンツを再インデックス化してもよろしいですか? あなたのサイトに大量のコンテンツが含まれる場合、この作業には時間を要します。再インデックス化が完了するまでユーザは完全な検索結果を取得することはできません。';
$string['content:courserole'] = '{$a->course} の {$a->role}';
$string['core-all'] = 'すべて';
$string['core-course-content'] = 'コースコンテンツ';
$string['core-courses'] = 'コース';
$string['core-other'] = 'その他';
$string['core-users'] = 'ユーザ';
$string['createanindex'] = 'インデックスを作成する';
$string['createdon'] = '作成日時';
$string['database'] = 'データベース';
$string['databasestate'] = 'インデックス化処理データベース状態';
$string['datadirectory'] = 'データディレクトリ';
$string['deleteindex'] = 'インデックスを削除する {$a}';
$string['deletionsinindex'] = 'インデックスの削除';
$string['docmodifiedon'] = '最終更新日時: {$a}';
$string['doctype'] = 'Doctype';
$string['doctypenotsupported'] = '指定されたドキュメントタイプはまだサポートされていません。';
$string['documents'] = 'ドキュメント';
$string['documentsfor'] = 'ドキュメント';
$string['documentsindatabase'] = 'データベースのドキュメント';
$string['documentsinindex'] = 'インデックスのドキュメント';
$string['duration'] = '継続時間';
$string['emptydatabaseerror'] = 'データベーステーブルが存在していないか、インデックスレコードを含んでいません。';
$string['enginenotfound'] = 'エンジン {$a} が見つかりませんでした。';
$string['enginenotinstalled'] = 'エンジン {$a} がインストールされていません。';
$string['enginenotselected'] = 'あなたはサーチエンジンを選択していません。';
$string['engineserverstatus'] = '検索エンジンを利用できません。あなたの管理者にご連絡ください。';
$string['enteryoursearchquery'] = '検索クエリを入力';
$string['error_indexing'] = 'インデックス化中にエラーが発生しました。';
$string['errorareanotavailable'] = '{$a} 検索エリアは利用できません。';
$string['errors'] = 'エラー';
$string['everywhere'] = 'あなたがアクセスできるすべての場所';
$string['filesinindexdirectory'] = 'インデックスディレクトリのファイル';
$string['filterheader'] = 'フィルタ';
$string['fromtime'] = '修正後';
$string['globalsearch'] = 'グローバル検索';
$string['globalsearchdisabled'] = 'グローバル検索が有効にされていません。';
$string['gradualreindex'] = '段階的再インデックス化 {$a}';
$string['gradualreindex_confirm'] = '本当に {$a} を再インデックス化してもよろしいですか? これには時間を要します。再インデックス化中、既存のデータは利用可能です。';
$string['gradualreindex_queued'] = '{$a->name} ({$a->count} コンテクスト) の再インデックス化がリクエストされました。このインデックス化は「グローバル検索インデックス化」タスクにより実行されます。';
$string['incourse'] = 'コース {$a}';
$string['index'] = 'インデックス';
$string['indexwhendisabledfullnotice'] = '検索が無効にされているため、現在、インデックス化することはできません。これを有効にするには<a href="{$a->url}">searchindexwhendisabled</a>設定をご覧ください。';
$string['indexwhendisabledshortnotice'] = 'インデックス化は利用できません。';
$string['invalidindexerror'] = 'インデックスディレクトリに無効なインデックスが含まれているか、インデックスがありません。';
$string['ittook'] = '検索時間:';
$string['matchingfile'] = 'ファイル<span class="filename">{$a}</span>に合致する';
$string['matchingfiles'] = 'ファイルに合致する:';
$string['mycoursesonly'] = 'マイコースのみ';
$string['next'] = '次へ';
$string['noindexmessage'] = '管理: 検索インデックスが作成されていないようです。';
$string['noresults'] = '該当データはありません。';
$string['normalsearch'] = '標準検索';
$string['notitle'] = 'タイトルなし';
$string['openedon'] = '開始日時';
$string['optimize'] = '最適化';
$string['order'] = '結果順';
$string['order_location'] = '{$a} に関連する結果を優先する';
$string['order_relevance'] = '最も関連性のある結果を最初にする';
$string['priority'] = '優先度';
$string['priority_normal'] = 'ノーマル';
$string['priority_reindexing'] = '再インデックス化';
$string['privacy:metadata'] = '検索サブシステムはいかなる個人データも保存しません。';
$string['progress'] = '進捗';
$string['queryerror'] = 'あなたが提供したクエリは検索エンジンによって構文解析することができませんでした: {$a}';
$string['queueheading'] = '追加インデックス化キュー ({$a} アイテム)';
$string['resultsreturnedfor'] = '件が見つかりました - 検索キーワード:';
$string['runindexer'] = 'インデックサ (実) を実行する';
$string['runindexertest'] = 'インデックサテストを実行する';
$string['schemanotupdated'] = '検索スキーマが新しくありません。';
$string['schemaversionunknown'] = '検索エンジンが現在のスキーマバージョンを理解できません。';
$string['score'] = 'スコア';
$string['search'] = '検索';
$string['search:course'] = 'コース';
$string['search:course_teacher'] = 'コース教師';
$string['search:customfield'] = 'コースカスタムフィールド';
$string['search:message_received'] = 'メッセージ - 受信';
$string['search:message_sent'] = 'メッセージ - 送信';
$string['search:mycourse'] = 'マイコース';
$string['search:section'] = 'コースセクション';
$string['search:user'] = 'ユーザ';
$string['searcharea'] = '検索エリア';
$string['searchareacategories'] = '検索エリアカテゴリ';
$string['searching'] = '検索 ...';
$string['searchnotpermitted'] = 'あなたは検索を許可されていません。';
$string['searchsetupdescription'] = '次のステップではあなたのMoodleグローバル検索の設定を支援します。';
$string['searchwithin'] = '検索対象';
$string['seconds'] = '秒';
$string['solutions'] = 'ソリューション';
$string['statistics'] = '統計';
$string['step'] = 'ステップ';
$string['thesewordshelpimproverank'] = '次の文字で検索ランクを改善する';
$string['thesewordsmustappear'] = '次の文字を含む';
$string['thesewordsmustnotappear'] = '次の文字を含まない';
$string['title'] = 'タイトル';
$string['tofetchtheseresults'] = '&nbsp;';
$string['topresults'] = '上位結果';
$string['totalsize'] = '合計サイズ';
$string['totime'] = '修正前';
$string['type'] = 'タイプ';
$string['uncompleteindexingerror'] = 'インデックス化処理が完全に終了していません。リスタートしてください。';
$string['versiontoolow'] = '申し訳ございません、グローバル検索にはPHP 5.0.0またはそれ以上が必要です。';
$string['viewresultincontext'] = 'この結果をコンテクスト内で表示する';
$string['wordsintitle'] = '次の文字をタイトルに含む';
