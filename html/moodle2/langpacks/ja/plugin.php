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
 * Strings for component 'plugin', language 'ja', branch 'MOODLE_31_STABLE'
 *
 * @package   plugin
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = '操作';
$string['availability'] = '利用';
$string['cancelinstallall'] = '新しいインストレーションをキャンセルする ({$a})';
$string['cancelinstallhead'] = 'プラグインストレーションのキャンセル';
$string['cancelinstallinfo'] = '次のプラグインはインストレーションがキャンセルされたため、完全にはインストールされていません。インストールするにはあなたのサーバからプラグインフォルダを削除してください。予想外にデータ  (あなたによるコード修正等) を喪失してしまう可能性があるため、あなたが本当に何をしたいのか確認してください。';
$string['cancelinstallinfodir'] = '削除されるフォルダ {$a}';
$string['cancelinstallone'] = 'このインストレーションをキャンセルする';
$string['cancelupgradeall'] = 'アップグレードをキャンセルする ({$a})';
$string['cancelupgradehead'] = '前のバージョンのプラグインのリストア';
$string['cancelupgradeone'] = 'このアップグレードをキャンセルする';
$string['checkforupdates'] = '利用可能な更新をチェックする';
$string['checkforupdateslast'] = '最終チェック: {$a}';
$string['dependencyavailable'] = '利用可能';
$string['dependencyfails'] = '失敗';
$string['dependencyinstall'] = 'インストール';
$string['dependencyinstallhead'] = '不足している依存のインストール';
$string['dependencyinstallmissing'] = '不足している依存をインストールする ({$a})';
$string['dependencymissing'] = '不足';
$string['dependencyunavailable'] = '利用不可';
$string['dependencyupload'] = 'アップロード';
$string['dependencyuploadmissing'] = 'ZIPファイルをアップロードする';
$string['detectedmisplacedplugin'] = 'プラグイン「 {$a->component}」が正しくないロケーション 「 {$a->current} 」にインストールされています。期待されるロケーションは「 {$a->expected} 」です。';
$string['displayname'] = 'プラグイン名';
$string['err_response_curl'] = '利用可能なアップデートデータを取得できません - 不明なcURLエラーです。';
$string['err_response_format_version'] = '予期しないレスポンスフォーマットのバージョンです。利用可能な更新を再度確認してください。';
$string['err_response_http_code'] = '利用可能なアップデートデータを取得できません - 不明なHTTPレスポンスコードです。';
$string['filterall'] = 'すべてを表示する';
$string['filtercontribonly'] = '追加プラグインのみ表示する';
$string['filterupdatesonly'] = '更新可能のみ表示する';
$string['misdepinfoplugin'] = 'プラグイン情報';
$string['misdepinfoversion'] = 'バージョン情報';
$string['misdepsavail'] = '利用可能な不足している依存';
$string['misdepsunavail'] = '利用不可な不足している依存';
$string['misdepsunavaillist'] = '依存必要条件を満たすバージョンは見つかりませんでした: {$a}.';
$string['misdepsunknownlist'] = 'プラグインディレクトリにありません: <strong>{$a}</strong>';
$string['moodleversion'] = 'Moodle {$a}';
$string['noneinstalled'] = 'このタイプのプラグインはインストールされていません。';
$string['notdownloadable'] = 'パッケージをダウンロードできません。';
$string['notdownloadable_help'] = 'アップデートのZIPパッケージを自動的にダウンロードできません。詳細はドキュメンテーションページをご覧ください。';
$string['notes'] = 'ノート';
$string['notwritable'] = 'プラグインファイル書き込み不可';
$string['notwritable_help'] = 'ウェブサーバにプラグインファイルを書き込むことができません。ウェブサーバプロセスはプラグインフォルダおよびそのコンテンツに関して書き込み権を持つ必要があります。プラグインタイプのルートフォルダにも書き込み権が必要です。';
$string['otherplugin'] = '{$a->component}';
$string['otherpluginversion'] = '{$a->component}';
$string['overviewall'] = 'すべてのプラグイン';
$string['overviewext'] = '追加プラグイン';
$string['overviewupdatable'] = '利用可能な更新';
$string['packagesdebug'] = 'デバッグ出力有効';
$string['packagesdownloading'] = 'ダウンロード {$a}';
$string['packagesextracting'] = '展開 {$a}';
$string['packagesvalidating'] = '確認 {$a}';
$string['packagesvalidatingfailed'] = '確認に失敗したため、インストレーションは中止されました。';
$string['packagesvalidatingok'] = '正常に確認しました。インストールを続けることができます。';
$string['plugincheckall'] = 'すべてのプラグイン';
$string['plugincheckattention'] = '注意が必要なプラグイン';
$string['pluginchecknone'] = 'あなたの注意が必要なプラグインはありません。';
$string['pluginchecknotice'] = 'このページではアップグレード中、インストールされる新しいプラグイン、アップグレードされるプラグイン、不足しているプラグイン等、あなたが注意する必要のあるプラグインを表示しています。利用可能な更新がある場合、追加プラグインが表示されます。このMoodleアップグレードを続ける前にさらに最新バージョンのプラグインがあるかどうか確認してソースコードを更新することをお勧めします。';
$string['plugindisable'] = '無効';
$string['plugindisabled'] = '無効';
$string['pluginenable'] = '有効';
$string['pluginenabled'] = '有効';
$string['release'] = 'リリース';
$string['requiredby'] = '次に必要です: {$a}';
$string['requires'] = '必要条件';
$string['rootdir'] = 'ディレクトリ';
$string['settings'] = '設定';
$string['source'] = 'ソース';
$string['sourceext'] = '追加';
$string['sourcestd'] = '標準';
$string['status'] = 'ステータス';
$string['status_delete'] = '削除予定';
$string['status_downgrade'] = 'すでに新しいバージョンがインストールされています!';
$string['status_missing'] = 'ディスクにありません!';
$string['status_new'] = 'インストール予定';
$string['status_nodb'] = 'データベースなし';
$string['status_upgrade'] = 'アップグレード予定';
$string['status_uptodate'] = 'インストール';
$string['supportedmoodleversions'] = 'サポートされるMoodleバージョン';
$string['systemname'] = '識別子';
$string['type_antivirus'] = 'アンチウイルスプラグイン';
$string['type_antivirus_plural'] = 'アンチウイルスプラグイン';
$string['type_auth'] = '認証方法';
$string['type_auth_plural'] = '認証プラグイン';
$string['type_availability'] = '利用制限';
$string['type_availability_plural'] = '利用制限';
$string['type_block'] = 'ブロック';
$string['type_block_plural'] = 'ブロック';
$string['type_cachelock'] = 'キャッシュロックハンドラ';
$string['type_cachelock_plural'] = 'キャッシュロックハンドラ';
$string['type_cachestore'] = 'キャッシュストア';
$string['type_cachestore_plural'] = 'キャッシュストア';
$string['type_calendartype'] = 'カレンダータイプ';
$string['type_calendartype_plural'] = 'カレンダータイプ';
$string['type_coursereport'] = 'コースレポート';
$string['type_coursereport_plural'] = 'コースレポート';
$string['type_dataformat'] = 'データフォーマット';
$string['type_dataformat_plural'] = 'データフォーマット';
$string['type_editor'] = 'エディタ';
$string['type_editor_plural'] = 'エディタ';
$string['type_enrol'] = '登録方法';
$string['type_enrol_plural'] = '登録方法';
$string['type_filter'] = 'テキストフィルタ';
$string['type_filter_plural'] = 'テキストフィルタ';
$string['type_format'] = 'コースフォーマット';
$string['type_format_plural'] = 'コースフォーマット';
$string['type_gradeexport'] = '評定エクスポート方法';
$string['type_gradeexport_plural'] = '評定エクスポート方法';
$string['type_gradeimport'] = '評定インポート方法';
$string['type_gradeimport_plural'] = '評定インポート方法';
$string['type_gradereport'] = '評定表レポート';
$string['type_gradereport_plural'] = '評定表レポート';
$string['type_gradingform'] = '高度な評定方法';
$string['type_gradingform_plural'] = '高度な評定方法';
$string['type_local'] = 'ローカルプラグイン';
$string['type_local_plural'] = 'ローカルプラグイン';
$string['type_message'] = 'メッセージングアウトプット';
$string['type_message_plural'] = 'メッセージングアウトプット';
$string['type_mnetservice'] = 'MNetサービス';
$string['type_mnetservice_plural'] = 'MNetサービス';
$string['type_mod'] = '活動モジュール';
$string['type_mod_plural'] = '活動モジュール';
$string['type_plagiarism'] = '盗作プラグイン';
$string['type_plagiarism_plural'] = '盗作プラグイン';
$string['type_portfolio'] = 'ポートフォリオ';
$string['type_portfolio_plural'] = 'ポートフォリオ';
$string['type_profilefield'] = 'プロファイルフィールドタイプ';
$string['type_profilefield_plural'] = 'プロファイルフィールドタイプ';
$string['type_qbehaviour'] = '問題動作';
$string['type_qbehaviour_plural'] = '問題動作';
$string['type_qformat'] = '問題インポート/エクスポートフォーマット';
$string['type_qformat_plural'] = '問題インポート/エクスポートフォーマット';
$string['type_qtype'] = '問題タイプ';
$string['type_qtype_plural'] = '問題タイプ';
$string['type_report'] = 'サイトレポート';
$string['type_report_plural'] = 'レポート';
$string['type_repository'] = 'リポジトリ';
$string['type_repository_plural'] = 'リポジトリ';
$string['type_search'] = '検索エンジン';
$string['type_search_plural'] = 'サーチエンジン';
$string['type_theme'] = 'テーマ';
$string['type_theme_plural'] = 'テーマ';
$string['type_tool'] = '管理ツール';
$string['type_tool_plural'] = '管理ツール';
$string['type_webservice'] = 'ウェブサービスプロトコル';
$string['type_webservice_plural'] = 'ウェブサービスプロトコル';
$string['uninstall'] = 'アンインストール';
$string['uninstallconfirm'] = 'あなたはプラグイン「 {$a->name} 」を完全にアンインストールしようとしています。これにより、設定、ログレコード、プラグイン管理のユーザファイルを含む、関連するデータベース内すべてのデータが完全に削除されます。バックアップする方法はなく、Moodle自体もリカバリバックアップを作成しません。本当に続けてもよろしいですか?';
$string['uninstalldelete'] = 'データベースからプラグイン「 {$a->name} 」に関するすべてのデータが削除されました。プラグイン自体の再インストールを防ぐには、あなたのサーバからフォルダ「 {$a->rootdir} 」を手動削除してください。書き込み権のため、Moodleはフォルダを削除することはできません。';
$string['uninstalldeleteconfirm'] = 'データベースからプラグイン「 {$a->name} 」に関するすべてのデータが削除されました。プラグイン自体の再インストールを防ぐには、あなたのサーバからフォルダ「 {$a->rootdir} 」を削除してください。プラグインフォルダを削除してもよろしいですか?';
$string['uninstalldeleteconfirmexternal'] = '現在のバージョンのプラグインはソースコード管理システム ({$a}) のチェックアウト経由で入手されたようです。プラグインフォルダを削除した場合、あなたはコードの重要なローカル修正を失うことになります。続ける前に、あなたが本当にプラグインフォルダを削除したいのか確認してください。';
$string['uninstallextraconfirmblock'] = 'このブロックには {$a->instances} 件のインスタンスがあります。';
$string['uninstallextraconfirmenrol'] = '{$a->enrolments} 名のユーザ登録があります。';
$string['uninstallextraconfirmmod'] = 'このモジュールに関して、{$a->courses} 件のコース内に {$a->instances} 件のインスタンスがあります。';
$string['uninstalling'] = '{$a->name} のアンインストール';
$string['updateavailable'] = '利用可能な新しいバージョンの {$a} があります!';
$string['updateavailable_moreinfo'] = '詳細情報 ...';
$string['updateavailable_release'] = 'リリース {$a}';
$string['updatepluginconfirm'] = 'プラグイン更新確認';
$string['updatepluginconfirmexternal'] = '現在のバージョンのプラグインはソースコード管理システム ({$a}) のチェックアウトによって取得されたようです。この更新をインストールした場合、あなたはこれ以上ソースコード管理システム経由でプラグイン更新を取得できないようになります。続ける前に、あなたが本当にプラグインを更新したいかどうか確認してください。';
$string['updatepluginconfirminfo'] = 'あなたは新しいバージョンのプラグイン「<strong>{$a->name}</strong>」をインストールしようとしています。 プラグインのバージョン {$a->version} のZIPパッケージが <a href="{$a->url}">{$a->url}</a> からダウンロードされた後、アップグレードするため、あなたのMoodleインストレーションに展開されます。';
$string['updatepluginconfirmwarning'] = 'アップグレード前にあなたのデータベースをMoodleが自動的にバックアップしないことに留意してください。新しいコードに含まれるバグがあなたのサイトを利用停止する、またはデータベースを破壊してしまうという稀なケースに対処するため、今から完全なスナップショットバックアップを実行されることを強くお勧めします。あなたの責任において、処理を進めてください。';
$string['validationmsg_componentmatch'] = 'ファイルコンポーネント名';
$string['validationmsg_componentmismatchname'] = 'プラグイン名不一致';
$string['validationmsg_componentmismatchname_help'] = 'GitHubから生成されたZIPパッケージには、正しくないルートディレクトリ名が含まれている可能性があります。あなたは宣言されたプラグイン名に合致するようルートディレクトリ名をリネームする必要があります。';
$string['validationmsg_componentmismatchname_info'] = 'プラグイン宣言名は「 {$a} 」ですが、ルートディレクトリ名と合致しません。';
$string['validationmsg_componentmismatchtype'] = 'プラグインタイプ不一致';
$string['validationmsg_componentmismatchtype_info'] = '期待されるタイプは「 {$a->expected} 」ですが、プラグインではタイプ「 {$a->found} 」が宣言されています。';
$string['validationmsg_filenotexists'] = '展開済みファイルが見つかりません。';
$string['validationmsg_filesnumber'] = 'パッケージ内に十分なファイルがありません。';
$string['validationmsg_filestatus'] = 'すべてのファイルを展開できません。';
$string['validationmsg_filestatus_info'] = 'ファイル「 {$a->file} 」の展開を試みましたが、エラー「 {$a->status} 」が発生しました。';
$string['validationmsg_foundlangfile'] = '言語ファイルが見つかりました。';
$string['validationmsglevel_debug'] = 'デバッグ';
$string['validationmsglevel_error'] = 'エラー';
$string['validationmsglevel_info'] = 'OK';
$string['validationmsglevel_warning'] = '警告';
$string['validationmsg_maturity'] = '宣言済み成熟レベル';
$string['validationmsg_maturity_help'] = 'プラグインに成熟レベルを宣言することができます。メインテナがプラグインを安定していると考える場合、宣言済み成熟レベルでは「MATURITY_STABLE」を読み込みます。他の成熟レベル (alphaまたはbeta等) は不安定だとみなされ、警告が表示されます。';
$string['validationmsg_missingcomponent'] = 'プラグインのコンポーネント名が宣言されていません。';
$string['validationmsg_missingcomponent_help'] = 'すべてのプラグインはversion.phpファイル内の「$plugin->component」変数経由で完全なコンポーネント名を提供する必要があります。';
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
$string['validationmsg_targetexists'] = 'すでにターゲットロケーションが存在しているため削除されます。';
$string['validationmsg_targetexists_help'] = 'すでにプラグインディレクトリが存在しているためプラグインパッケージのコンテンツと置換されます。';
$string['validationmsg_targetnotdir'] = 'ターゲットロケーションのファイル占有';
$string['validationmsg_unknowntype'] = '不明なプラグインタイプ';
$string['validationmsg_versionphpsyntax'] = 'version.php内でサポートされていない構文が検出されました。';
$string['version'] = 'バージョン';
$string['versiondb'] = '現在のバージョン';
$string['versiondisk'] = '新しいバージョン';
