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
 * Strings for component 'cache', language 'ja', branch 'MOODLE_36_STABLE'
 *
 * @package   cache
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = '操作';
$string['addinstance'] = 'インスタンスを追加する';
$string['addlocksuccess'] = '新しいロックインスタンスが正常に追加されました。';
$string['addnewlockinstance'] = '新しいロックインスタンスを追加する';
$string['addstore'] = '{$a} ストアを追加する';
$string['addstoresuccess'] = '新しい {$a} ストアが正常に追加されました。';
$string['area'] = 'エリア';
$string['cacheadmin'] = 'キャッシュ管理';
$string['cacheconfig'] = '設定';
$string['cachedef_calendar_categories'] = 'ユーザがアクセスできるカレンダーコースカテゴリ';
$string['cachedef_calendar_subscriptions'] = 'カレンダー購読';
$string['cachedef_capabilities'] = 'システムケイパビリティリスト';
$string['cachedef_completion'] = '活動完了ステータス';
$string['cachedef_config'] = 'Config設定';
$string['cachedef_contextwithinsights'] = '洞察のコンテクスト';
$string['cachedef_coursecat'] = '特定ユーザのコースカテゴリ一覧';
$string['cachedef_coursecatrecords'] = 'コースカテゴリレコード';
$string['cachedef_coursecattree'] = 'コースカテゴリツリー';
$string['cachedef_coursecompletion'] = 'コース完了ステータス';
$string['cachedef_coursecontacts'] = 'コース連絡先一覧';
$string['cachedef_coursemodinfo'] = 'それぞれのコースのモジュールおよびセクションに関する累積情報';
$string['cachedef_databasemeta'] = 'データベースメタ情報';
$string['cachedef_eventinvalidation'] = 'イベント無効化';
$string['cachedef_externalbadges'] = '特定ユーザの外部バッジ';
$string['cachedef_fontawesomeiconmapping'] = 'Font Awesomのアイコンマッピング';
$string['cachedef_grade_categories'] = '評定カテゴリクエリ';
$string['cachedef_groupdata'] = 'コースグループ情報';
$string['cachedef_htmlpurifier'] = 'HTML Purifier - クリーニング済みコンテンツ';
$string['cachedef_langmenu'] = '利用可能な言語一覧';
$string['cachedef_locking'] = 'ロッキング';
$string['cachedef_message_processors_enabled'] = 'メッセージプロセッサ有効ステータス';
$string['cachedef_message_time_last_message_between_users'] = '会話内の直近メッセージの作成日時';
$string['cachedef_navigation_expandcourse'] = 'ナビゲーション拡張可能コース';
$string['cachedef_observers'] = 'イベントオブザーバ';
$string['cachedef_plugin_functions'] = 'プラグイン利用可能コールバック';
$string['cachedef_plugin_manager'] = 'プラグイン情報マネージャ';
$string['cachedef_postprocessedcss'] = '後処理CSS';
$string['cachedef_presignup'] = '特定の未登録ユーザの事前サインアップデータ';
$string['cachedef_questiondata'] = '問題定義';
$string['cachedef_repositories'] = 'リポジトリインスタンスデータ';
$string['cachedef_roledefs'] = 'ロール定義';
$string['cachedef_string'] = '言語ストリングキャッシュ';
$string['cachedef_suspended_userids'] = 'コースごとの利用停止ユーザ一覧';
$string['cachedef_tagindexbuilder'] = 'タグ付きアイテムの検索結果';
$string['cachedef_tags'] = 'タグコレクションおよびエリア';
$string['cachedef_temp_tables'] = '一時テーブルキャッシュ';
$string['cachedef_user_group_groupings'] = 'ユーザのコースあたりのグルーピングおよびグループ';
$string['cachedef_userselections'] = 'Moodle内でのユーザ選択の保持に使用するデータ';
$string['cachedef_yuimodules'] = 'YUIモジュール定義';
$string['cachelock_file_default'] = 'デフォルトファイルロッキング';
$string['cachestores'] = 'キャッシュストア';
$string['caching'] = 'キャッシング';
$string['component'] = 'コンポーネント';
$string['confirmlockdeletion'] = 'ロック削除確認';
$string['confirmstoredeletion'] = 'ストア削除確認';
$string['default_application'] = 'デフォルトアプリケーションストア';
$string['defaultmappings'] = 'マッピングが存在しない場合に使用されるストア';
$string['defaultmappings_help'] = 'あなたが1つまたはそれ以上のストアをキャッシュ定義にマップしない場合、デフォルトストアが使用されます。';
$string['default_request'] = 'デフォルトリクエストストア';
$string['default_session'] = 'デフォルトセッションストア';
$string['defaultstoreactions'] = 'デフォルトストアを編集することはできません。';
$string['definition'] = '定義';
$string['definitionsummaries'] = '既知のキャッシュ定義';
$string['delete'] = '削除';
$string['deletelock'] = 'ロックを削除する';
$string['deletelockconfirmation'] = '本当に {$a} ロックを削除してもよろしいですか?';
$string['deletelockhasuses'] = '1つまたはそれ以上のストアで使用されているため、あなたはこのロックインスタンスを削除できません。';
$string['deletelocksuccess'] = 'ロックが正常に削除されました。';
$string['deletestore'] = 'ストアを削除する';
$string['deletestoreconfirmation'] = '本当に「 {$a} 」ストアを削除してもよろしいですか?';
$string['deletestorehasmappings'] = 'マッピングされているため、あなたはこのストアを削除することはできません。ストアを削除する前に、すべてのマッピングを削除してください。';
$string['deletestoresuccess'] = 'キャッシュストアを正常に削除しました。';
$string['editdefinitionmappings'] = '{$a} 定義ストアマッピング';
$string['editdefinitionsharing'] = '{$a} の共有定義を編集する';
$string['editmappings'] = 'マッピングを編集する';
$string['editsharing'] = '共有を編集する';
$string['editstore'] = 'ストアを編集する';
$string['editstoresuccess'] = 'キャッシュストアを正常に編集しました。';
$string['ex_configcannotsave'] = 'キャッシュ設定ファイルを保存できません。';
$string['ex_nodefaultlock'] = 'デフォルトロックインスタンスを見つけることができません。';
$string['ex_unabletolock'] = 'キャッシングのロックを取得できません。';
$string['ex_unmetstorerequirements'] = '現在、あなたはこのストアを使用することはできません。必要条件を確認するため、ドキュメンテーションをご覧ください。';
$string['gethit'] = 'Get - ヒット';
$string['getmiss'] = 'Get - ミス';
$string['inadequatestoreformapping'] = 'このストアはすべての既知の定義に対して必要条件を満たしていません。このストアに対する定義が不適切な場合、選択されたストアの代わりにオリジナルのデフォルトストアが与えられます。';
$string['invalidlock'] = '無効なロック';
$string['invalidplugin'] = '無効なプラグイン';
$string['invalidstore'] = '無効なキャッシュストアが提供されました。';
$string['localstorenotification'] = 'このキャッシュはそれぞれのウェブサーバのストアに安全にマップすることができます。';
$string['lockdefault'] = 'デフォルト';
$string['locking'] = 'ロッキング';
$string['locking_help'] = 'ロッキングはデータがオーバライドされるのを防ぐためにキャッシュデータへのアクセスを1度に1プロセスに制限するメカニズムです。ロッキングメソッドではどのようにロックが獲得され、チェックされるか決定します。';
$string['lockname'] = '名称';
$string['locknamedesc'] = '名称はユニークにする必要があります。また、次の文字のみ使用することができます: a-zA-Z_';
$string['locknamenotunique'] = 'あなたが選択した名称はユニークではありません。ユニークな名称を選択してください。';
$string['locksummary'] = 'キャッシュロックインスタンスの概要';
$string['locktype'] = 'タイプ';
$string['lockuses'] = '利用';
$string['mappingdefault'] = '(デフォルト)';
$string['mappingfinal'] = '最終ストア';
$string['mappingprimary'] = '主ストア';
$string['mappings'] = 'ストアマッピング';
$string['mode'] = 'モード';
$string['mode_1'] = 'アプリケーション';
$string['mode_2'] = 'セッション';
$string['mode_4'] = 'リクエスト';
$string['modes'] = 'モード';
$string['nativelocking'] = 'このプラグインは自身のロッキングを処理します。';
$string['none'] = 'なし';
$string['plugin'] = 'プラグイン';
$string['pluginsummaries'] = 'インストール済みキャッシュストア';
$string['privacy:metadata:cachestore'] = 'キャッシュサブシステムはMoodleの他の部分の代理として一時的にデータを保存します。このデータは簡単に特定することはできません。また、データは非常に短い時間生存します。データはMoodle内のどこかで保存されたデータキャッシュとして提供されるため、すでにそれらのMoodleコンポーネントにより処理されています。';
$string['purge'] = '削除';
$string['purgedefinitionsuccess'] = '指定された定義を正常に削除しました。';
$string['purgestoresuccess'] = 'リクエストされたストアを正常に削除しました。';
$string['requestcount'] = '{$a} リクエストによりテストする';
$string['rescandefinitions'] = '定義を再スキャンする';
$string['result'] = '結果';
$string['set'] = 'セット';
$string['sharedstorenotification'] = 'このキャッシュはすべてのウェブサーバに共有されているストアにマップする必要があります。';
$string['sharing'] = '共有';
$string['sharing_all'] = 'すべて';
$string['sharing_help'] = 'あなたがクラスタをセットアップをしている場合、またはすべて同じストアを使用する複数サイトをセットアップしている場合、そしてデータを共有したい場合にどのようにキャッシュデータを共有するか決定することができます。これは高度な設定であるため、変更する前にその目的を確認してください。';
$string['sharing_input'] = 'カスタムキー (以下で入力)';
$string['sharingrequired'] = 'あなたは少なくとも1つの共有オプションを選択する必要があります。';
$string['sharingselected_all'] = 'すべて';
$string['sharingselected_input'] = 'カスタムキー';
$string['sharingselected_siteid'] = 'サイトID';
$string['sharingselected_version'] = 'バージョン';
$string['sharing_siteid'] = '同じサイトIDのサイト';
$string['sharing_version'] = '同じバージョンで動作しているサイト';
$string['storeconfiguration'] = 'ストア設定';
$string['store_default_application'] = 'アプリケーションキャッシュのデフォルトファイルストア';
$string['store_default_request'] = 'リクエストキャッシュのデフォルトスタティックストア';
$string['store_default_session'] = 'セッションキャッシュのデフォルトセッションストア';
$string['storename'] = 'ストア名';
$string['storenamealreadyused'] = 'あなたはこのストアに関してユニークな名称を選択する必要があります。';
$string['storename_help'] = 'ここではストア名を設定します。ストア名はシステム内のストアを識別します。「a-z A-Z 0-9 -_ 」およびスペースのみ使用することができます。また、ストア名はユニークである必要があります。すでに使用されている名称の使用を試みた場合、あなたはエラーメッセージを受信します。';
$string['storenameinvalid'] = '無効なストア名です。あなたは「a-z A-Z 0-9 -_ 」およびスペースのみ使用することができます。';
$string['storenotready'] = 'ストア準備未了';
$string['storeperformance'] = 'キャッシュストアパフォーマンスレポート - {$a} ユニークリクエスト/処理';
$string['storeready'] = '準備完了';
$string['storerequiresattention'] = '要注意';
$string['storerequiresattention_help'] = 'このストアインスタンスの使用準備はできていませんが、マッピングされています。この問題を修正することで、あなたのシステムのパフォーマンスを改善します。ストアバックエンドの使用準備ができていること、そしてPHPの必要条件に合致していることを確認してください。';
$string['storeresults_application'] = 'アプリケーションキャッシュとして使用されるストアリクエスト';
$string['storeresults_request'] = 'リクエストキャッシュとして使用されるストアリクエスト';
$string['storeresults_session'] = 'セッションキャッシュとして使用されるストアリクエスト';
$string['stores'] = 'ストア';
$string['storesummaries'] = '設定済みストアインスタンス';
$string['supports'] = 'サポート';
$string['supports_dataguarantee'] = 'データ保証';
$string['supports_keyawareness'] = 'キー認識度';
$string['supports_multipleidentifiers'] = '複数ID';
$string['supports_nativelocking'] = 'ロッキング';
$string['supports_nativettl'] = 'TTL';
$string['supports_searchable'] = 'キーによる検索';
$string['tested'] = 'テスト済み';
$string['testperformance'] = 'パフォーマンステスト';
$string['unsupportedmode'] = '未サポートモード';
$string['untestable'] = 'テスト不可';
$string['userinputsharingkey'] = '共有のためのカスタムキー';
$string['userinputsharingkey_help'] = 'あなたのプライベートキーをここに入力してください。データを共有するため、あなたが他のサイトでストアをセットアップした場合、そのサイトと同一のキーを必ず設定してください。';
