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
 * Strings for component 'qtype_essay', language 'ja', version '3.11'.
 *
 * @package     qtype_essay
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptedfiletypes'] = '許可されるファイルタイプ';
$string['acceptedfiletypes_help'] = '許可されるファイルタイプは一連のファイル拡張子を入力して制限することができます。フィールドが空白の場合、すべてのファイルタイプが許可されます。';
$string['allowattachments'] = '添付を許可する';
$string['answerfiles'] = '解答ファイル';
$string['answertext'] = '解答テキスト';
$string['attachedfiles'] = '添付: {$a}';
$string['attachmentsoptional'] = '添付は任意です';
$string['attachmentsrequired'] = '添付必須';
$string['attachmentsrequired_help'] = 'このオプションでは回答を評定可能と判断される最低必須添付数を指定します。';
$string['err_maxminmismatch'] = '最大ワード制限は最小ワード制限より大きくしてください。';
$string['err_maxwordlimit'] = '最大ワード制限が有効にされていますが、設定されていません。';
$string['err_maxwordlimitnegative'] = '最大ワード制限はマイナスにできません。';
$string['err_minwordlimit'] = '最小ワード制限が有効にされていますが、設定されていません。';
$string['err_minwordlimitnegative'] = '最小ワード制限はマイナスにできません。';
$string['formateditor'] = 'HTMLエディタ';
$string['formateditorfilepicker'] = 'HTMLエディタ (+ファイルピッカ)';
$string['formatmonospaced'] = 'プレインテキスト、等幅フォント';
$string['formatnoinline'] = 'インラインテキストなし';
$string['formatplain'] = 'プレインテキスト';
$string['graderinfo'] = '評定者情報';
$string['graderinfoheader'] = '評定者情報';
$string['maxbytes'] = '最大ファイルサイズ';
$string['maxwordlimit'] = '最大ワード制限';
$string['maxwordlimit_help'] = '解答に学生のテキスト入力を要求する場合、これはそれぞれの学生が送信を許可される最大ワード数です。';
$string['maxwordlimitboundary'] = 'この問題のワード制限は {$a->limit} ワードです。あなたは {$a->count} ワードを送信しようとしています。あなたの解答内容を減らして再度お試しください。';
$string['minwordlimit'] = '最小ワード制限';
$string['minwordlimit_help'] = '解答に学生のテキスト入力を要求する場合、これはそれぞれの学生が送信を許可される最小ワード数です。';
$string['minwordlimitboundary'] = 'この問題の必須ワードは少なくとも {$a->limit} ワードです。あなたは {$a->count} ワードを送信しようとしています。あなたの解答内容を増やして再度お試しください。';
$string['mustattach'] = '「インラインテキストなし」が選択された場合、または解答が任意の場合、あなたは少なくとも1つの添付を許可する必要があります。';
$string['mustrequire'] = '「インラインテキストなし」が選択された場合、または解答が任意の場合、あなたは少なくとも1つの添付を要求する必要があります。';
$string['mustrequirefewer'] = 'あなたが許可している以上の添付を要求することはできません。';
$string['nlines'] = '{$a} 行';
$string['nonexistentfiletypes'] = '次のファイルタイプは認識されませんでした: {$a}';
$string['pluginname'] = '作文問題';
$string['pluginname_help'] = '問題への解答において解答者は１つ以上のファイルをアップロードまたはオンラインでテキストを入力することができます。解答は手動で評定する必要があります。';
$string['pluginnameadding'] = '作文問題の追加';
$string['pluginnameediting'] = '作文問題の編集';
$string['pluginnamesummary'] = 'ファイルアップロードまたはオンラインテキストによる解答を許可します。これは手動で評定する必要があります。';
$string['privacy:metadata'] = '作文問題タイププラグインは問題作成者がユーザプリファレンスとしてデフォルトオプションを設定できます。';
$string['privacy:preference:attachments'] = '許可される添付数です。';
$string['privacy:preference:attachmentsrequired'] = '必要な添付数です。';
$string['privacy:preference:defaultmark'] = '指定された問題に設定されるデフォルトの評点です。';
$string['privacy:preference:maxbytes'] = '最大ファイルサイズです。';
$string['privacy:preference:responsefieldlines'] = '入力ボックス (textarea) のサイズを示す行数です。';
$string['privacy:preference:responseformat'] = '解答フォーマット (HTMLエディタ、プレインテスト等) は何ですか?';
$string['privacy:preference:responserequired'] = '学生にテキスト入力を要求するか任意とするか指定します。';
$string['responsefieldlines'] = '入力ボックスサイズ';
$string['responseformat'] = '解答形式';
$string['responseisrequired'] = '学生はテキストを入力する必要があります';
$string['responsenotrequired'] = 'テキスト入力は任意です';
$string['responseoptions'] = '解答オプション';
$string['responserequired'] = 'テキスト必須';
$string['responsetemplate'] = '解答テンプレート';
$string['responsetemplate_help'] = 'ここで入力されたテキストは問題の新しい解答開始時に解答入力ボックス内に表示されます。';
$string['responsetemplateheader'] = '解答テンプレート';
$string['wordcount'] = 'ワードカウント: {$a}';
$string['wordcounttoofew'] = 'ワードカウント: {$a->count} - 必須 {$a->limit} ワードに達していません。';
$string['wordcounttoomuch'] = 'ワードカウント: {$a->count} - {$a->limit} ワード制限を越えています。';
