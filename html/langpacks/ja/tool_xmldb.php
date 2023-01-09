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
 * Strings for component 'tool_xmldb', language 'ja', version '3.11'.
 *
 * @package     tool_xmldb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actual'] = '実値';
$string['addpersistent'] = '必須存続フィールドを追加する';
$string['aftertable'] = 'テーブルの後:';
$string['back'] = '戻る';
$string['backtomainview'] = 'メインに戻る';
$string['cannotuseidfield'] = '「id」フィールドは追加できません。自動作成されるカラムです。';
$string['change'] = '変更';
$string['charincorrectlength'] = 'charフィールドの長さが正しくありません。';
$string['check_bigints'] = '不正なDB整数型を調査中';
$string['check_defaults'] = '矛盾したデフォルト値を調査中';
$string['check_foreign_keys'] = '外部キー違反を調査中';
$string['check_indexes'] = '不明なDBインデックスを調査中';
$string['check_oracle_semantics'] = '正しくない長さのセマンティクスを調査中';
$string['checkbigints'] = '整数型をチェックする';
$string['checkdefaults'] = 'デフォルトをチェックする';
$string['checkforeignkeys'] = '外部キーをチェックする';
$string['checkindexes'] = 'インデックスをチェックする';
$string['checkoraclesemantics'] = 'セマンティクスをチェックする';
$string['completelogbelow'] = '(検索結果に関する以下の完全なログをご覧ください)';
$string['confirmcheckbigints'] = 'この機能はあなたのMoodleサーバで<a href="https://tracker.moodle.org/browse/MDL-11038">潜在的に不正な整数型フィールド</a>を調査し、DB内の整数型を適切に定義するためのSQL文を自動的に生成します (実行ではありません!)。

SQL文の生成後、あなたはSQL文をコピーして自分の好きなSQLインタフェースで安全に実行できます (実行前にあなたのデータを忘れずにバックアップしてください)。

不正な整数型の調査を実行する前にあなたのMoodleリリースを最新のもの (+バージョン) にすることを強くお勧めします。

この機能はDBに対していかなる処理も実行しません (DBから読むだけです)。そのため、いつでも安全に実行できます。';
$string['confirmcheckdefaults'] = 'この機能はあなたのMoodleサーバで矛盾したデフォルト値を調査し、DB内のすべてのデフォルト値を適切に定義するためのSQL文を自動的に生成します (実行ではありません!)。

SQL文の生成後、あなたはSQL文をコピーして、自分の好きなSQLインタフェースで安全に実行することができます (実行前にあなたのデータを忘れずにバックアップしてください)。

矛盾したデフォルト値の調査を実行する前にあなたのMoodleリリースを最新のもの (+バージョン) にすることを強くお勧めします。

この機能はDBに対していかなる処理も実行しません (DBから読むだけです)。そのため、いつでも安全に実行できます。';
$string['confirmcheckforeignkeys'] = 'この機能はinstall.xml定義で定義された外部キーの潜在的な違反を調査します (現在、Moodleはデータベースに制約された外部キーを生成しないため、無効なデータが存在する可能性があります)。

外部キーの潜在的な違反調査を実行する前にあなたのMoodleリリースを最新 (+バージョン) にすることを強くお勧めします。

この機能はDBに対していかなる処理も実行しません (DBから読むだけです)。そのため、いつでも安全に実行できます。';
$string['confirmcheckindexes'] = 'この機能はあなたのMoodleサーバで潜在的に不明なインデックスを調査し、すべてを最新の状態にするためのSQL文を自動的に生成します (実行ではありません!)。

SQL文の生成後、あなたはSQL文をコピーして自分の好きなSQLインタフェースで安全に実行することができます (実行前にあなたのデータを忘れずにバックアップしてください)。

不明なインデックス調査を実行する前にあなたのMoodleリリースを最新 (+バージョン) にすることを強くお勧めします。

この機能はDBに対していかなる処理も実行しません (DBから読むだけです)。そのため、いつでも安全に実行できます。';
$string['confirmcheckoraclesemantics'] = 'この機能はあなたのMoodleサーバで<a href="https://tracker.moodle.org/browse/MDL-29322">BYTEセマンティクスを使用しているOracle varchar2カラム</a>を調査および代わりにCHARセマンティクスを使用するよう (cross-db互換性およびコンテンツ最大長に有利) カラムすべてを変換するためのSQL文を自動的に生成します (実行ではありません!)。

SQL文の生成後、あなたはSQL文をコピーして自分の好きなSQLインタフェースで安全に実行できます (実行前にあなたのデータを忘れずにバックアップしてください)。

BYTEセマンティクス検索を実行する前にあなたのMoodleリリースを最新 (+バージョン) にすることを強くお勧めします。

この機能はDBに対していかなる処理も実行しません (DBから読むだけです)。そのため、いつでも安全に実行できます。';
$string['confirmdeletefield'] = '本当に次のフィールドを削除してもよろしいですか:';
$string['confirmdeleteindex'] = '本当に次のインデックスを削除してもよろしいですか:';
$string['confirmdeletekey'] = '本当に次のキーを削除してもよろしいですか:';
$string['confirmdeletetable'] = '本当に次のテーブルを削除してもよろしいですか:';
$string['confirmdeletexmlfile'] = '本当に次のファイルを削除してもよろしいですか:';
$string['confirmrevertchanges'] = '本当に変更を元に戻してもよろしいですか:';
$string['create'] = '作成';
$string['createtable'] = 'テーブルの作成:';
$string['defaultincorrect'] = 'デフォルトが正しくありません。';
$string['delete'] = '削除';
$string['delete_field'] = 'フィールドの削除';
$string['delete_index'] = 'インデックスの削除';
$string['delete_key'] = 'キーの削除';
$string['delete_table'] = 'テーブルの削除';
$string['delete_xml_file'] = 'XMLファイルの削除';
$string['doc'] = 'Doc';
$string['docindex'] = 'ドキュメンテーションインデックス:';
$string['documentationintro'] = 'このドキュメンテーションはXMLDBデータベース定義より自動的に生成されたものです。英語のみ利用できます。';
$string['down'] = '下へ';
$string['duplicate'] = '複製';
$string['duplicatefieldname'] = '同じ名称の別のフィールドが存在します。';
$string['duplicatefieldsused'] = '重複フィールドが使用されています。';
$string['duplicateindexname'] = 'インデックス名が重複しています。';
$string['duplicatekeyname'] = '同じ名称のキーが存在します。';
$string['duplicatetablename'] = '同じ名称のテーブルが存在します。';
$string['edit'] = '編集';
$string['edit_field'] = 'フィールドを編集する';
$string['edit_field_save'] = 'フィールドを保存する';
$string['edit_index'] = 'インデックスを編集する';
$string['edit_index_save'] = 'インデックスを保存する';
$string['edit_key'] = 'キーを編集する';
$string['edit_key_save'] = 'キーを保存する';
$string['edit_table'] = 'テーブルを編集する';
$string['edit_table_save'] = 'テーブルを保存する';
$string['edit_xml_file'] = 'XMLファイルを編集する';
$string['enumvaluesincorrect'] = 'enumフィールドの値が正しくありません。';
$string['expected'] = '期待値';
$string['extensionrequired'] = '申し訳ございません - この処理を実行するにはPHP拡張モジュール「 {$a} 」が必要です。あなたがこの機能を使用したい場合、拡張モジュールをインストールしてください。';
$string['extraindexesfound'] = '拡張インデックスが見つかりました。';
$string['field'] = 'フィールド';
$string['fieldnameempty'] = 'フィールド名が空です。';
$string['fields'] = 'フィールド';
$string['fieldsnotintable'] = 'フィールドがテーブル内に存在しません。';
$string['fieldsusedinindex'] = 'このフィールドはインデックスとして使用されています。';
$string['fieldsusedinkey'] = 'このフィールドはキーとして使用されています。';
$string['filemodifiedoutfromeditor'] = '警告: XMLDBエディタの使用中にファイルがローカルで修正されました。保存によりローカルの変更を上書きします。';
$string['filenotwriteable'] = 'ファイルに書き込み権がありません。';
$string['fkunknownfield'] = 'テーブル「 {$a->tablename} 」の外部キー「 {$a->keyname} 」は参照テーブル「 {$a->reftable} 」の存在しないフィールド「 {$a->reffield} 」を指しています。';
$string['fkunknowntable'] = 'テーブル「 {$a->tablename} 」の外部キー「 {$a->keyname} 」は存在しないテーブル「 {$a->reftable} 」を指しています。';
$string['fkviolationdetails'] = 'テーブル {$a->tablename} の外部キー {$a->keyname} は {$a->numrows} 行中 {$a->numviolations} 行が違反しています。';
$string['float2numbernote'] = '注意: XMLDBにおいて「浮動小数」フィールドは100%サポートされますが、代わりに「数値」フィールドへの移行をお勧めします。';
$string['floatincorrectdecimals'] = '浮動小数フィールドの小数点以下桁数が正しくありません。';
$string['floatincorrectlength'] = '浮動小数フィールドの長さが正しくありません。';
$string['generate_all_documentation'] = 'ドキュメンテーションすべて';
$string['generate_documentation'] = 'ドキュメンテーション';
$string['gotolastused'] = '最後に使用されたファイルへ移動する';
$string['incorrectfieldname'] = 'フィールド名が正しくありません。';
$string['incorrectindexname'] = 'インデックス名が正しくありません。';
$string['incorrectkeyname'] = 'キー名が正しくありません。';
$string['incorrecttablename'] = 'テーブル名が正しくありません。';
$string['index'] = 'インデックス';
$string['indexes'] = 'インデックス';
$string['indexnameempty'] = 'インデックス名が空白です。';
$string['integerincorrectlength'] = '整数型フィールドの長さが正しくありません。';
$string['key'] = 'キー';
$string['keynameempty'] = 'キー名は空白にできません。';
$string['keys'] = 'キー';
$string['listreservedwords'] = '予約語一覧<br />(<a href="https://docs.moodle.org/en/XMLDB_reserved_words" target="_blank">XMLDB予約語</a>を更新するため使用されます)';
$string['load'] = 'ロード';
$string['main_view'] = 'メインビュー';
$string['masterprimaryuniqueordernomatch'] = 'あなたの外部キーのフィールドは参照テーブルのユニークキーと同じ順番で記述する必要があります。';
$string['missing'] = '不明';
$string['missingindexes'] = 'インデックスが見つかりません。';
$string['mustselectonefield'] = 'フィールドに関連した処理を見るにはフィールド1つを選択してください!';
$string['mustselectoneindex'] = 'インデックスに関連した処理を見るにはインデックス1つを選択してください!';
$string['mustselectonekey'] = 'キーに関連した処理を見るにはキー1つを選択してください!';
$string['new_table_from_mysql'] = 'MySQLから新しいテーブル';
$string['newfield'] = '新しいフィールド';
$string['newindex'] = '新しいインデックス';
$string['newkey'] = '新しいキー';
$string['newtable'] = '新しいテーブル';
$string['newtablefrommysql'] = 'MySQLから新しいテーブル';
$string['nofieldsspecified'] = '指定されたフィールドはありません。';
$string['nomasterprimaryuniquefound'] = 'あなたの外部キーが参照するカラムは参照テーブルのプライマリまたはユニークキーに含まれている必要があります。ユニークインデックスに含まれているカラムでは十分ではありませんので留意してください。';
$string['nomissingorextraindexesfound'] = '不明または拡張インデックスは見つかりませんでした。そのため、さらなる操作は不要です。';
$string['noreffieldsspecified'] = '参照フィールドが指定されていません。';
$string['noreftablespecified'] = '指定された参照テーブルが見つかりませんでした。';
$string['noviolatedforeignkeysfound'] = '外部キー違反は見つかりませんでした。';
$string['nowrongdefaultsfound'] = '矛盾したデフォルト値は見つかりませんでした。あなたのDBに関してさらなる操作は不要です。';
$string['nowrongintsfound'] = '不正な整数型は見つかりませんでした。あなたのDBに関してさらなる操作は不要です。';
$string['nowrongoraclesemanticsfound'] = 'BYTEセマンティクスを使用しているOracleカラムは見つかりませんでした。さらなる操作は不要です。';
$string['numberincorrectdecimals'] = 'numberフィールドの小数点以下桁数が正しくありません。';
$string['numberincorrectlength'] = 'numberフィールドの長さが正しくありません。';
$string['numberincorrectwholepart'] = 'numberフィールドの整数部分が大き過ぎます。';
$string['pendingchanges'] = 'メモ: あなたはこのファイルを変更しました。ファイルはいつでも保存できます。';
$string['pendingchangescannotbesaved'] = 'このファイルに変更が加えられましたが、保存できません! ディレクトリおよび「install.xml」にウェブサーバの書込み権があるか確認してください。';
$string['pendingchangescannotbesavedreload'] = 'このファイルに変更が加えられましたが、保存できません! ディレクトリおよび「install.xml」にウェブサーバの書込み権があるか確認してください。確認後、あなたはこのページをリロードして変更を保存できます。';
$string['persistentfieldscomplete'] = '次のフィールドが追加されました:';
$string['persistentfieldsconfirm'] = '次のフィールドを追加してもよろしいですか:';
$string['persistentfieldsexist'] = '次のフィールドはすでに存在します:';
$string['pluginname'] = 'XMLDBエディタ';
$string['primarykeyonlyallownotnullfields'] = '主キーはNullにできません。';
$string['privacy:metadata'] = 'XMLDBエディタプラグインはいかなる個人データも保存しません。';
$string['reconcile_files'] = 'リコンサイルが必要なXMLDBファイルを探す';
$string['reconcile_files_intro'] = 'この機能はすべてのXMLDBファイルの内容を調べてXMLDBエディタから生成された結果と一致するかどうかを確認します。

リコンサイル (再生成) が必要なファイルのリストが表示されます。表示された内容はXMLDBエディタで修正できます。';
$string['reconcile_files_no'] = 'すべてのファイルはOKです。リコンサイルは必要ありません。';
$string['reconcile_files_yes'] = 'リコンサイルするファイルが見つかりました:';
$string['reconcilefiles'] = 'XMLDBファイルをリコンサイルする';
$string['reserved'] = '予約済み';
$string['reservedwords'] = '予約語';
$string['revert'] = '元に戻す';
$string['revert_changes'] = '変更を元に戻す';
$string['save'] = '保存';
$string['searchresults'] = '検索結果';
$string['selectaction'] = '処理を選択する:';
$string['selectdb'] = 'データベースを選択する:';
$string['selectfieldkeyindex'] = 'フィールド/キー/インデックスを選択する:';
$string['selectonecommand'] = 'PHPコードを表示するにはリストより処理を1つ選択してください。';
$string['selectonefieldkeyindex'] = 'PHPコードを表示するにはリストよりフィールド/キー/インデックスを1つ選択してください。';
$string['selecttable'] = 'テーブルを選択する:';
$string['table'] = 'テーブル';
$string['tablenameempty'] = 'テーブル名は空白にできません。';
$string['tables'] = 'テーブル';
$string['unknownfield'] = '不明なフィールドを参照しています。';
$string['unknowntable'] = '不明なテーブルを参照しています。';
$string['unload'] = 'アンロード';
$string['up'] = '上へ';
$string['view'] = '表示';
$string['view_reserved_words'] = '予約語を表示する';
$string['view_structure_php'] = 'PHPストラクチャを表示する';
$string['view_structure_sql'] = 'SQLストラクチャを表示する';
$string['view_table_php'] = 'PHPテーブルを表示する';
$string['view_table_sql'] = 'SQLテーブルを表示する';
$string['viewedited'] = '編集済みを表示する';
$string['vieworiginal'] = 'オリジナルを表示する';
$string['viewphpcode'] = 'PHPコードを表示する';
$string['viewsqlcode'] = 'SQLコードを表示する';
$string['viewxml'] = 'XML';
$string['violatedforeignkeys'] = '外部キー違反';
$string['violatedforeignkeysfound'] = '外部キー違反が見つかりました。';
$string['violations'] = '違反';
$string['wrong'] = '不正';
$string['wrongdefaults'] = '不正なデフォルトが見つかりました';
$string['wrongints'] = '不正な整数型が見つかりました';
$string['wronglengthforenum'] = 'enumフィールドの長さが正しくありません。';
$string['wrongnumberofreffields'] = '参照フィールド番号が正しくありません。';
$string['wrongoraclesemantics'] = '不正なOracle BYTEセマンティクスが見つかりました。';
$string['wrongreservedwords'] = '現在使用されている予約語<br />($CFG->prefixを使用している場合、テーブル名は重要ではない点に留意してください)';
$string['yesextraindexesfound'] = '次の追加インデックスが見つかりました。';
$string['yesmissingindexesfound'] = '<p>あなたのDBに不明なインデックスが見つかりました。以下、詳細情報およびあなたの好きなSQLインタフェースでインデックス作成を実行するためのSQL文です。最初にあなたのデータを忘れずにバックアップしてください!</p>
<p>SQL文の実行後、これ以上不明なインデックスが見つかるかどうかこのユーティリティの再実行を強くお勧めします。</p>';
$string['yeswrongdefaultsfound'] = '<p>あなたのDBに矛盾したデフォルト値が見つかりました。以下、詳細情報およびあなたの好きなSQLインタフェースでインデックス作成を実行するためのSQL文です。最初にあなたのデータを忘れずにバックアップしてください!</p>
<p>SQL文の実行後、これ以上矛盾したデフォルト値が見つかるかどうかこのユーティリティの再実行を強くお勧めします。</p>';
$string['yeswrongintsfound'] = '<p>あなたのDBに不正な整数型が見つかりました。以下、詳細情報およびあなたの好きなSQLインタフェースで整数型の修正を実行するためのSQL文です。最初にあなたのデータを忘れずにバックアップしてください!</p>
<p>修正後、これ以上不正な整数型が見つかるかどうかこのユーティリティの再実行を強くお勧めします。<p>';
$string['yeswrongoraclesemanticsfound'] = '<p>あなたのOracleカラムに不正なBYTEセマンティクスが見つかりました。以下、詳細情報およびあなたの好きなSQLインタフェースでOracleカラムすべての変換を実行するためのSQL文です。最初にあなたのデータを忘れずにバックアップしてください!</p>
<p>SQL文の実行後、これ以上不正なセマンティクスが見つかるかどうかこのユーティリティの再実行を強くお勧めします。<p>';
