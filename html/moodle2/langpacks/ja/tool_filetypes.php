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
 * Strings for component 'tool_filetypes', language 'ja', branch 'MOODLE_32_STABLE'
 *
 * @package   tool_filetypes
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfiletypes'] = '新しいファイルタイプを追加する';
$string['corestring'] = '代替言語ストリング';
$string['corestring_help'] = 'この設定はmimetypes.php言語ファイルから異なる言語ストリングを選択するために使用することができます。通常、空白にしてください。カスタムタイプの場合、説明フィールドを使用してください。';
$string['defaulticon'] = 'MIMEタイプのデフォルトアイコン';
$string['defaulticon_help'] = '同一MIMEタイプに複数のファイル拡張子がある場合、MIMEタイプからアイコンを決定できるよう拡張子の1つでこのオプションを選択してください。';
$string['deletea'] = '{$a} を削除する';
$string['delete_confirmation'] = '本当に <strong>.{$a}</strong> を削除してもよろしいですか?';
$string['deletefiletypes'] = 'ファイルタイプを削除する';
$string['description'] = 'カスタム説明';
$string['description_help'] = 'シンプルなファイルタイプ説明 例) &lsquo;Kindle ebook&rsquo;。あなたのサイトが複数言語をサポートして、multi-languageフィルタを使用している場合、異なる言語で提供するため、このフィールドにmulti-languageタグを入力することができます。';
$string['descriptiontype'] = '説明タイプ';
$string['descriptiontype_custom'] = 'このフォームで指定されたカスタム説明';
$string['descriptiontype_default'] = 'デフォルト (MIMEタイプまたは利用可能な場合に一致する言語ストリング)';
$string['descriptiontype_help'] = '説明を記述するために3つの方法があります。

* デフォルトでMIMEタイプを使用します。MIMEタイプに対応する言語ストリングがmimetypes.phpにある場合、それが使用されます。 そうでない場合、MIMEタイプ自体がユーザに表示されます。
* あなたはこのフォームでカスタム説明を記述することができます。
* あなたはMIMEタイプで使用する代わりにmimetypes.php内で言語ストリング名を記述することができます。';
$string['descriptiontype_lang'] = '代替言語ストリング (mimetypes.phpから)';
$string['displaydescription'] = '説明';
$string['editfiletypes'] = '既存のファイルタイプを編集する';
$string['emptylist'] = '定義されたファイルタイプはありません。';
$string['error_addentry'] = 'ファイルタイプ拡張子、説明、MIMEタイプおよびアイコンには改行およびセミコロン文字を含むことはできません。';
$string['error_defaulticon'] = 'すでに同じMIMEタイプの別のファイル拡張子がデフォルトアイコンとしてマークされています。';
$string['error_extension'] = 'ファイル拡張子 <strong>{$a}</strong> がすでに存在するか、無効です。ファイル拡張子はユニークである必要があり、特殊文字を含むことはできません。';
$string['error_notfound'] = '拡張子 {$a} のファイルタイプは見つかりませんでした。';
$string['extension'] = '拡張子';
$string['extension_help'] = 'ドットなしのファイル名拡張子 例) &lsquo;mobi&rsquo;';
$string['groups'] = 'タイプグループ';
$string['groups_help'] = 'このタイプが属する任意のファイルタイプグループ一覧です。「document」および「image」のような一般的なカテゴリがあります。';
$string['icon'] = 'ファイルアイコン';
$string['icon_help'] = 'アイコンファイル名

あなたのMoodleインストレーション内の/pix/fディレクトリより取得されたアイコン一覧です。必要であれば、あなたはこのフォルダにカスタムアイコンを追加することができます。';
$string['mimetype'] = 'MIMEタイプ';
$string['mimetype_help'] = 'このファイルに関連付けられているMIMEタイプ 例) &lsquo;application/x-mobipocket-ebook&rsquo;';
$string['pluginname'] = 'ファイルタイプ';
$string['revert'] = '{$a} をMoodleデフォルトにリストアする';
$string['revert_confirmation'] = '本当にあなたの変更を破棄して、<strong>.{$a}</strong> をMoodleデフォルトとしてリストアしてもよろしいですか?';
$string['revertfiletype'] = 'ファイルタイプをリストアする';
$string['source'] = 'タイプ';
$string['source_custom'] = 'カスタム';
$string['source_deleted'] = '削除';
$string['source_modified'] = '修正';
$string['source_standard'] = 'スタンダード';
