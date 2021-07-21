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
 * Strings for component 'search_solr', language 'ja', version '3.11'.
 *
 * @package     search_solr
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['connectionerror'] = '指定されたSolrサーバを利用できないかインデックスが存在しません。';
$string['connectionsettings'] = '接続設定';
$string['errorcreatingschema'] = 'Solrスキーマ作成エラー: {$a}';
$string['errorsolr'] = 'Solr検索エンジンがエラーを報告しました: {$a}';
$string['errorvalidatingschema'] = 'Solrスキーマの妥当性確認にエラーが発生しました。フィールド {$a->fieldname} が存在しません。必須フィールドをセットアップするには<a href="{$a->setupurl}">このリンクにアクセス</a>してください。';
$string['extensionerror'] = 'Apache Solr PHP拡張モジュールがインストールされていません。ドキュメンテーションを確認してください。';
$string['fileindexing'] = 'ファイルインデックス化を有効にする';
$string['fileindexing_help'] = 'あなたのSolrインストールがサポートする場合、この機能ではインデックス化のためにMoodleがファイルを送信できるようにします。すべてのファイルを追加するためこのオプションを有効にした後、あなたはすべてのサイトコンテンツを再インデックス化する必要があります。';
$string['fileindexsettings'] = 'ファイルインデックス化設定';
$string['maxindexfilekb'] = 'インデックス最大ファイルサイズ (kB)';
$string['maxindexfilekb_help'] = 'このサイズより大きなファイルは検索インデックス化に含まれません。ゼロを設定した場合、すべてのサイズのファイルをインデックス化します。';
$string['minimumsolr4'] = 'Solr 4.0はMoodleに要求される最低バージョンです。';
$string['missingconfig'] = 'あなたのApache SolrサーバはMoodleでまだ設定されていません。';
$string['multivaluedfield'] = 'フィールド「 {$a} 」はスカラの代わりに配列を戻しました。Solr内でデータをインデックス化する前に現在のインデックスを削除、新しいインデックスを作成およびsetup_schema.phpを実行してください。';
$string['nodatafromserver'] = 'サーバからのデータがありません。';
$string['pluginname'] = 'Solr';
$string['privacy:metadata'] = 'このプラグインは外部のリンクされたSolr検索エンジンにデータを送信します。ローカルにデータを保存することはありません。';
$string['privacy:metadata:data'] = '検索サブシステムより渡された個人データです。';
$string['schemafieldautocreated'] = 'フィールド「 {$a} 」はSolrスキーマ内にすでに存在します。恐らく、あなたがデータのインデックス化前にこのスクリプトの実行を忘れたため、Solrによってフィールドが自動作成されたものと思われます。Solr内でデータをインデックス化する前に現在のインデックスを削除して新しいインデックスを作成した後、 再度setup_schema.phpを実行してください。';
$string['schemasetupfromsolr5'] = 'あなたのSolrサーババージョンは5.0より低いようです。あなたのSolrバージョンが5.0 またはそれ以上の場合のみスキーマを設定することができます。あなたは「\\search_solr\\document::get_default_fields_definition()」に従って手動でスキーマにフィールドを設定する必要があります。';
$string['searchinfo'] = '検索クエリ';
$string['searchinfo_help'] = '検索フィールドは検索クエリの前に「title:」「content:」「name:」または「intro:」を付けることにより指定することができます。例えば「title:news」ではタイトルが単語「news」の検索結果を返します。

ブール演算子 (「AND」「OR」「NOT」) はキーワードを結合または除外するため使用することができます。

ワイルドカード (「*」または「?」) は検索クエリの文字の代わりとして使用することができます。';
$string['setupok'] = 'スキーマの使用準備ができました。';
$string['solrauthpassword'] = 'HTTP認証パスワード';
$string['solrauthuser'] = 'HTTP認証ユーザ名';
$string['solrhttpconnectionport'] = 'ポート';
$string['solrhttpconnectiontimeout'] = 'タイムアウト';
$string['solrhttpconnectiontimeout_desc'] = 'HTTP接続タイムアウトはHTTPデータ転送処理に許可された最大時間 (秒) です。';
$string['solrindexname'] = 'インデックス名';
$string['solrinfo'] = 'Solr';
$string['solrnotselected'] = 'Solrエンジンは設定された検索エンジンではありません。';
$string['solrsecuremode'] = 'セキュアモード';
$string['solrserverhostname'] = 'ホスト名';
$string['solrserverhostname_desc'] = 'Solrサーバのドメイン名です。';
$string['solrsetting'] = 'Solr設定';
$string['solrsslcainfo'] = 'SSL CA証明書名';
$string['solrsslcainfo_desc'] = 'ピアを確認するために1つまたはそれ以上のCA証明書を保持するファイル名です。';
$string['solrsslcapath'] = 'SSL CA証明書パス';
$string['solrsslcapath_desc'] = 'ピアを確認するため複数のCA証明書を保持するディレクトリパスです。';
$string['solrsslcert'] = 'SSL証明書';
$string['solrsslcert_desc'] = 'PEMフォーマットプライベート証明書のファイル名です。';
$string['solrsslkey'] = 'SSLキー';
$string['solrsslkey_desc'] = 'PEMフォーマット秘密鍵のファイル名です。';
$string['solrsslkeypassword'] = 'SSLキーパスワード';
$string['solrsslkeypassword_desc'] = 'PEMフォーマット秘密鍵ファイルのパスワードです。';
