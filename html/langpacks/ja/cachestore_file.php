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
 * Strings for component 'cachestore_file', language 'ja', branch 'MOODLE_38_STABLE'
 *
 * @package   cachestore_file
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autocreate'] = '自動ディレクトリ作成';
$string['autocreate_help'] = 'この設定を有効にした場合、指定されたパスにディレクトリがすでに存在しない場合に自動作成されます。';
$string['path'] = 'キャッシュパス';
$string['path_help'] = 'このキャッシュストアのファイルを保存するために使用されるディレクトリです。空白 (デフォルト) にした場合、moodledataディレクトリ内にディレクトリが自動作成されます。これはパフォーマンスの良いドライブ (メモリ等) に対してファイルストアをポイントするために使用することができます。';
$string['pluginname'] = 'ファイルキャッシュ';
$string['prescan'] = 'ディレクトリを事前スキャンする';
$string['prescan_help'] = 'この設定を有効にした場合、キャッシュが最初に使用されスキャンデータに対してファイルリクエストが最初にチェックされる時点でディレクトリがスキャンされます。あなたが遅いファイルシステムを使用してファイル処理がボトルネックを発生させている場合、これは役に立ちます。';
$string['privacy:metadata'] = 'ファイルキャッシュストアプラグインはキャッシング機能の一部として短時間だけデータを保存します。しかし、データは定期的に削除されます。';
$string['singledirectory'] = '単一ディレクトリストア';
$string['singledirectory_help'] = 'この設定を有効にした場合、ファイル (キャッシュアイテム) は複数のディレクトリに分けられるのではなく、単一ディレクトリに保存されます。

有効にすることでファイルインタラクションをスピードアップすることができますが、ファイルシステム制限に達するリスクを増大させる可能性があります。

以下の場合のみ、この設定を有効にすることをお勧めします:

*あなたが動作させているファイルシステムに問題を発生しない十分に少ない量のアイテムがキャッシュ内に保存されることを把握している場合。
* キャッシュされるデータの生成がコスト高にならないこと。その場合、デフォルトのままにすることで問題発生の可能性を減らす好ましい選択肢となります。';
