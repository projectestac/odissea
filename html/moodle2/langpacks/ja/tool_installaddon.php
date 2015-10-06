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
 * Strings for component 'tool_installaddon', language 'ja', branch 'MOODLE_28_STABLE'
 *
 * @package   tool_installaddon
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acknowledgement'] = '同意';
$string['acknowledgementmust'] = 'あなたはこれに同意する必要があります。';
$string['acknowledgementtext'] = 'プラグインをインストールする前に、私の責任として、このサイトをフルバックすることを理解しています。私はプラグイン (非公開の場所から取得したものに限らず) にセキュリティホールが含まれ、サイトが利用不可な状態、または個人情報が漏洩または喪失する可能性があることを容認および理解します。';
$string['featuredisabled'] = 'このサイトではプラグインインストーラが無効にされています。';
$string['installaddon'] = 'プラグインをインストールする!';
$string['installaddons'] = 'プラグインをインストールする';
$string['installexception'] = 'プラグインのインストール中にエラーが発生しました。エラーに関する詳細を表示するにはデバッグモードを有効にしてください。';
$string['installfromrepo'] = 'Moodleプラグインディレクトリからプラグインをインストールする';
$string['installfromrepo_help'] = 'プラグインの検索およびインストールのため、あなたはMoodleプラグインディレクトリにリダイレクトされます。インストール処理を簡単にするため、同時にURLおよびメジャーバージョンも送信されます。';
$string['installfromzip'] = 'ZIPファイルからプラグインをインストールする';
$string['installfromzipfile'] = 'ZIPパッケージ';
$string['installfromzipfile_help'] = 'ZIPパッケージにはプラグイン名のディレクトリ1つのみ含む必要があります。ZIPはプラグインタイプに適切な場所に解凍されます。 Moodleプラグインディレクトリからダウンロードした場合、パッケージはこの形式になっています。';
$string['installfromzip_help'] = 'Moodleプラグインディレクトリから直接プラグインをインストールする代わりに、あなたはZIPパッケージをアップロードして、手動でプラグインをインストールすることができます。ZIPパッケージはMoodleプラグインディレクトリからダウンロードされるZIPパッケージと同じ構造にしてください。';
$string['installfromziprootdir'] = 'rootディレクトリをリネームする';
$string['installfromziprootdir_help'] = 'GitHubから生成されたZIPパッケージには、正しくない名称のルートディレクトリが含まれている可能性があります。その場合、ここに正しいルートディレクトリ名を入力することができます。';
$string['installfromzipsubmit'] = 'ZIPファイルからプラグインをインストールする';
$string['installfromziptype'] = 'プラグインタイプ';
$string['installfromziptype_help'] = 'あなたのインストールに関して、正しいタイプのプラグインを選択してください。注意: 正しくないプラグインタイプが提供された場合、インストール処理が失敗する可能性があります。';
$string['permcheck'] = 'プラグインタイプのルートロケーションがウェブサーバプロセスから書き込み可能かどうか確認してください。';
$string['permcheckerror'] = '書き込み権のチェック中にエラーが発生しました。';
$string['permcheckprogress'] = '書き込み権のチェック ...';
$string['permcheckresultno'] = 'プラグインタイプロケーション「<em>{$a->path}</em>」が書き込み可能ではありません。';
$string['permcheckresultyes'] = 'プラグインタイプロケーション「<em>{$a->path}</em>」は書き込み可能です。';
$string['pluginname'] = 'プラグインインストーラ';
$string['remoterequestalreadyinstalled'] = 'このサイトにMoodleプラグインディレクトリからプラグイン {$a->name} ({$a->component}) バージョン {$a->version} をインストールするリクエストがあります。しかし、このプラグインは<strong>すでにこのサイトにインストールされています</strong>。';
$string['remoterequestconfirm'] = 'このサイトにMoodleプラグインディレクトリからプラグイン <strong>{$a->name}</strong> ({$a->component}) バージョン {$a->version} をインストールするリクエストがあります。あなたが続ける場合、妥当性確認のため、プラグインZIPパッケージがダウンロードされます。まだ、何もインストールされません。';
$string['remoterequestinvalid'] = 'このサイトにMoodleプラグインディレクトリからのプラグインのインストールリクエストがあります。残念ですが、リクエストが有効ではないため、プラグインをインストールすることはできません。';
$string['remoterequestpermcheck'] = 'このサイトにMoodleプラグインディレクトリからプラグイン <strong>{$a->name}</strong> ({$a->component}) バージョン {$a->version} をインストールするリクエストがあります。しかし、プラグインタイプロケーション <strong>{$a->typepath}</strong> に <strong>書き込むことができません</strong>。あなたはウェブサーバユーザにプラグインタイプロケーションへの書き込み権を与えて、再度チェックするため、「続ける」ボタンをクリックする必要があります。';
$string['remoterequestpluginfoexception'] = 'プラグイン {$a->name} ({$a->component}) バージョン {$a->version} の情報取得中にエラーが発生しました。プラグインをインストールすることはできません。エラーに関する詳細情報を閲覧するにはデバッグモードを有効にしてください。';
$string['validation'] = 'プラグインパッケージ妥当性確認';
$string['validationmsg_componentmatch'] = 'ファイルコンポーネント名';
$string['validationmsg_componentmismatchname'] = 'プラグイン名不一致';
$string['validationmsg_componentmismatchname_help'] = 'GitHubから生成されたZIPパッケージには、正しくないルートディレクトリ名が含まれている可能性があります。あなたは宣言されたプラグイン名に合致するようルートディレクトリ名をリネームする必要があります。';
$string['validationmsg_componentmismatchname_info'] = 'プラグイン宣言名は「 {$a} 」ですが、ルートディレクトリ名と合致しません。';
$string['validationmsg_componentmismatchtype'] = 'プラグインタイプ不一致';
$string['validationmsg_componentmismatchtype_info'] = 'あなたはタイプ「 {$a->expected} 」を選択しましたが、プラグインではタイプ「 {$a->found} 」が宣言されています。';
$string['validationmsg_filenotexists'] = '解凍済みファイルが見つかりません。';
$string['validationmsg_filesnumber'] = 'パッケージ内に十分なファイルがありません。';
$string['validationmsg_filestatus'] = 'すべてのファイルを解凍できません。';
$string['validationmsg_filestatus_info'] = 'ファイル「 {$a->file} 」の解凍を試みましたが、エラー「 {$a->status} 」が発生しました。';
$string['validationmsg_foundlangfile'] = '言語ファイルが見つかりました。';
$string['validationmsglevel_debug'] = 'デバッグ';
$string['validationmsglevel_error'] = 'エラー';
$string['validationmsglevel_info'] = 'OK';
$string['validationmsglevel_warning'] = '警告';
$string['validationmsg_maturity'] = '宣言済み成熟レベル';
$string['validationmsg_maturity_help'] = 'プラグインに成熟レベルを宣言することができます。メインテナがプラグインを安定していると考える場合、宣言済み成熟レベルでは「MATURITY_STABLE」を読み込みます。他の成熟レベル (alphaまたはbeta等) は不安定だとみなされ、警告が表示されます。';
$string['validationmsg_missingexpectedlangenfile'] = '英語言語ファイル名の不一致';
$string['validationmsg_missingexpectedlangenfile_info'] = 'プラグインタイプに英語言語ファイル「 {$a} 」を提供する必要があります。';
$string['validationmsg_missinglangenfile'] = '英語言語ファイルがありません。';
$string['validationmsg_missinglangenfolder'] = '英語言語フォルダがありません。';
$string['validationmsg_missingversion'] = 'プラグインのバージョンが宣言されていません。';
$string['validationmsg_missingversionphp'] = 'ファイル「version.php」がありません。';
$string['validationmsg_multiplelangenfiles'] = '複数の英語言語ファイルが見つかりました。';
$string['validationmsg_onedir'] = 'ZIPパッケージの構造が無効です。';
$string['validationmsg_onedir_help'] = 'ZIPパッケージにはプラグインコードを保持する1つのルートディレクトリのみ含んでください。ルートディレクトリ名はプラグイン名と合致する必要があります。';
$string['validationmsg_pathwritable'] = '書き込み権チェック';
$string['validationmsg_pluginversion'] = 'プラグインバージョン';
$string['validationmsg_release'] = 'プラグインリリース';
$string['validationmsg_requiresmoodle'] = '必須Moodleバージョン';
$string['validationmsg_rootdir'] = 'インストールするプラグイン名';
$string['validationmsg_rootdir_help'] = 'ZIPパッケージのルートディレクトリ名はインストールされるプラグイン名を形作ります。名称が正しくない場合、あなたはプラグインをインストールする前にZIP内のルートディレクトリ名を変更することもできます。';
$string['validationmsg_rootdirinvalid'] = '無効なプラグイン名です。';
$string['validationmsg_rootdirinvalid_help'] = 'ZIPパッケージのルートディレクトリ名が形式的構文の要件に違反しています。GitHubから生成されたZIPパッケージには、正しくないルートディレクトリ名が含まれている可能性があります。あなたはプラグイン名に合致するようルートディレクトリ名をリネームする必要があります。';
$string['validationmsg_targetexists'] = 'すでにターゲットロケーションが存在しています。';
$string['validationmsg_targetexists_help'] = 'プラグインがインストールされるディレクトリです。まだ存在しないディレクトリにしてください。';
$string['validationmsg_unknowntype'] = '不明なプラグインタイプ';
$string['validationresult0'] = '妥当性確認不合格!';
$string['validationresult0_help'] = '重大な問題が検出されました。プラグインのインストールは安全ではありません。詳細は妥当性確認ログメッセージをご覧ください。';
$string['validationresult1'] = '妥当性確認合格!';
$string['validationresult1_help'] = 'プラグインパッケージの正当性検証が完了しました。深刻な問題は見つかりませんでした。';
$string['validationresult2_help'] = '重篤な問題は検出されませんでした。あなたはプラグインインストールを続けることができます。詳細および最終警告に関して、妥当性確認ログメッセージをご覧ください。';
$string['validationresultinfo'] = '情報';
$string['validationresultmsg'] = 'メッセージ';
$string['validationresultstatus'] = 'ステータス';
