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
 * Strings for component 'tool_installaddon', language 'ja', branch 'MOODLE_34_STABLE'
 *
 * @package   tool_installaddon
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acknowledgement'] = '同意';
$string['acknowledgementtext'] = 'プラグインをインストールする前に、私の責任として、このサイトをフルバックすることを理解しています。私はプラグイン (非公開の場所から取得したものに限らず) にセキュリティホールが含まれ、サイトが利用不可な状態、または個人情報が漏洩または喪失する可能性があることを容認および理解します。';
$string['featuredisabled'] = 'このサイトではプラグインインストーラが無効にされています。';
$string['installaddon'] = 'プラグインをインストールする!';
$string['installaddons'] = 'プラグインをインストールする';
$string['installfromrepo'] = 'Moodleプラグインディレクトリからプラグインをインストールする';
$string['installfromrepo_help'] = 'プラグインの検索およびインストールのため、あなたはMoodleプラグインディレクトリにリダイレクトされます。インストール処理を簡単にするため、同時にURLおよびメジャーバージョンも送信されます。';
$string['installfromzip'] = 'ZIPファイルからプラグインをインストールする';
$string['installfromzipfile'] = 'ZIPパッケージ';
$string['installfromzipfile_help'] = 'ZIPパッケージにはプラグイン名と一致するディレクトリ1つのみ含む必要があります。ZIPはプラグインタイプに適切な場所に展開されます。Moodleプラグインディレクトリからダウンロードした場合、パッケージはこの形式になっています。';
$string['installfromzip_help'] = 'Moodleプラグインディレクトリから直接プラグインをインストールする代わりに、あなたはZIPパッケージをアップロードして、手動でプラグインをインストールすることができます。ZIPパッケージはMoodleプラグインディレクトリからダウンロードされるZIPパッケージと同じ構造にしてください。';
$string['installfromzipinvalid'] = 'ZIPパッケージにはプラグイン名と一致するディレクトリ1つのみ含む必要があります。提供されたファイルは有効なプラグインZIPパッケージではありません。';
$string['installfromziprootdir'] = 'rootディレクトリをリネームする';
$string['installfromziprootdir_help'] = 'GitHubから生成されたZIPパッケージには正しくない名称のルートディレクトリが含まれている可能性があります。その場合、ここに正しいルートディレクトリ名を入力することができます。';
$string['installfromzipsubmit'] = 'ZIPファイルからプラグインをインストールする';
$string['installfromziptype'] = 'プラグインタイプ';
$string['installfromziptype_help'] = 'コンポーネント名が正しく宣言されているプラグインではインストーラが自動的にプラグインタイプを検出することができます。自動検出が失敗した場合、正しいプラグインタイプを手動選択してください。注意: 正しくないプラグインタイプが指定された場合、インストール処理が失敗する可能性があります。';
$string['permcheck'] = 'プラグインタイプのルートロケーションがウェブサーバプロセスから書き込み可能かどうか確認してください。';
$string['permcheckerror'] = '書き込み権のチェック中にエラーが発生しました。';
$string['permcheckprogress'] = '書き込み権のチェック ...';
$string['permcheckrepeat'] = '再度確認する';
$string['permcheckresultno'] = 'プラグインタイプロケーション「<em>{$a->path}</em>」が書き込み可能ではありません。';
$string['permcheckresultyes'] = 'プラグインタイプロケーション「<em>{$a->path}</em>」は書き込み可能です。';
$string['pluginname'] = 'プラグインインストーラ';
$string['privacy:metadata'] = 'プラグインインストーラプラグインはどのような個人データも保存しません。';
$string['remoterequestalreadyinstalled'] = 'このサイトにMoodleプラグインディレクトリからプラグイン {$a->name} ({$a->component}) バージョン {$a->version} をインストールするリクエストがあります。しかし、このプラグインは<strong>すでにこのサイトにインストールされています</strong>。';
$string['remoterequestconfirm'] = 'このサイトにMoodleプラグインディレクトリからプラグイン <strong>{$a->name}</strong> ({$a->component}) バージョン {$a->version} をインストールするリクエストがあります。あなたが続ける場合、妥当性確認のため、プラグインZIPパッケージがダウンロードされます。まだ、何もインストールされません。';
$string['remoterequestinvalid'] = 'このサイトにMoodleプラグインディレクトリからのプラグインのインストールリクエストがあります。残念ですが、リクエストが有効ではないため、プラグインをインストールすることはできません。';
$string['remoterequestnoninstallable'] = 'このサイトのMoodleプラグインディレクトリからプラグイン {$a->name} ({$a->component}) バージョン {$a->version} のインストールリクエストがあります。しかし、プラグインインストレーションの事前チェックに失敗しました (理由コード: {$a->reason})。';
$string['remoterequestpermcheck'] = 'このサイトにMoodleプラグインディレクトリからプラグイン <strong>{$a->name}</strong> ({$a->component}) バージョン {$a->version} をインストールするリクエストがあります。しかし、プラグインタイプロケーション <strong>{$a->typepath}</strong> に <strong>書き込むことができません</strong>。あなたはウェブサーバユーザにプラグインタイプロケーションへの書き込み権を与えて、再度チェックするため、「続ける」ボタンをクリックする必要があります。';
$string['remoterequestpluginfoexception'] = 'プラグイン {$a->name} ({$a->component}) バージョン {$a->version} の情報取得中にエラーが発生しました。プラグインをインストールすることはできません。エラーに関する詳細情報を閲覧するにはデバッグモードを有効にしてください。';
$string['typedetectionfailed'] = 'プラグインタイプを検出できませんでした。プラグインタイプを手動で選択してください。';
$string['typedetectionmismatch'] = '選択されたプラグインタイプはプラグインで宣言されたものに合致しません: {$a}';
