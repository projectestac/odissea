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
 * Strings for component 'tool_health', language 'ja', version '4.5'.
 *
 * @package     tool_health
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['category_loop_parents'] = '次のカテゴリは親カテゴリのループを形成しています:';
$string['category_missing_parents'] = '次のカテゴリは親カテゴリが行方不明です:';
$string['healthnoproblemsfound'] = '健康問題は見つかりませんでした!';
$string['healthproblemsdetected'] = '健康問題が検出されました!';
$string['healthproblemsolution'] = '健康問題の解決方法';
$string['healthreturntomain'] = '続ける';
$string['healthsolution'] = '解決方法';
$string['pluginname'] = 'ヘルスセンター';
$string['privacy:metadata'] = 'ヘルスセンタープラグインはいかなる個人データも保存しません。';
$string['problem_000002_description'] = 'あなたのMoodle設定ファイルconfig.phpまたはその他のライブラリファイルにはPHPタグの閉じタグ (?>) の後にいくつかの文字が含まれています。これはMoodleにいくつかの問題 (ダウンロードファイルの破損等) を引き起こすため、修正する必要があります。';
$string['problem_000002_solution'] = 'あなたは「 {$a}/config.php 」を編集して、末尾の「?>」タグ以降のすべての文字 (スペースおよびリターンを含む) を削除する必要があります。この2文字はそのファイルの最後の文字となります。余分な末尾の空白は「lib/setup.php」からインクルードされた他のPHPファイルにも存在する可能性があります。';
$string['problem_000002_title'] = 'config.phpまたはその他のライブラリ関数の末尾に余分な文字があります。';
$string['problem_000003_description'] = 'あなたのconfig.phpは「データルート」ディレクトリが {$a} であると言っています。しかし、このディレクトリは存在しないか、Moodleから書き込めません。これはユーザログイン不可、ファイルアップロード不可等、様々な問題が発生することを意味します。Moodleを正しく動作させるため、あなたがこの問題に対処することが必須です。';
$string['problem_000003_solution'] = 'まず、{$a} ディレクトリが存在することを確認してください。ディレクトリが存在する場合、あなたはMoodleがそのディレクトリに書き込めることを確認する必要があります。あなたのウェブサーバ管理者に連絡して、ウェブサーバプロセスが実行されているユーザにそのディレクトリへの書き込み権限を与えるよう依頼してください。';
$string['problem_000003_title'] = '$CFG->datarootが存在しないか、書き込み権限がありません。';
$string['problem_000004_description'] = 'cron.phpメインナンススクリプトが期待された間隔で実行されていません。この間隔は$CFG->expectedcronfrequencyで定義できます。これは恐らく、あなたのサーバがこのスクリプトを一定間隔で自動的に実行するよう設定されていないことを意味します。この場合、Moodleはほとんど正常に動作しますが、いくつかの操作 (特にユーザへのメール送信) は全く実行されません。';
$string['problem_000004_link_cron'] = 'Cron - MoodleDocs';
$string['problem_000004_solution'] = 'cronを有効にする方法の詳細に関して以下のリンクを参照してください。';
$string['problem_000004_title'] = 'cron.phpが自動的に実行されるよう設定されていません。';
$string['problem_000005_description'] = 'あなたのPHP設定にはMoodleを正しく動作させるために無効にしなければならない有効な設定「session.auto_start」が含まれます。この誤った設定に起因する顕著な症状にはログイン時に致命的なエラーおよび空白ページが含まれます。';
$string['problem_000005_solution'] = 'あなたがこの問題を解決する方法は2つあります:';
$string['problem_000005_solution_step_one'] = 'あなたがメインのphp.iniファイルにアクセスできる場合、「session.auto_start = 1」のような行を見つけてください。そしてこれを「session.auto_start = 0」に変更した後、あなたのウェブサーバを再起動してください。これは他のPHPの設定変更と同様にサーバ上で動作している他のウェブアプリケーションに影響を与える可能性があることに注意してください。';
$string['problem_000005_solution_step_two'] = '最後に「 {$a}/.htaccess 」ファイルを作成または編集して次の行を含めることで、あなたのサイトのみこの設定を変更できるかもしれません: php_value session.auto_start 0';
$string['problem_000005_title'] = 'PHP: session.auto_startが有効にされています。';
$string['problem_000007_description'] = 'あなたのPHP設定には「file_uploads」という無効にされた設定が含まれています。Moodleのすべての機能を使用するためにはこの設定を有効にする必要があります。この設定が有効になるまでMoodleにファイルをアップロードできません。これには例えばコースコンテンツおよびユーザ画像が含まれます。';
$string['problem_000007_solution'] = 'あなたがこの問題を解決するには2つの方法があります:';
$string['problem_000007_solution_step_one'] = 'あなたがメインのphp.iniファイルにアクセスできる場合、「file_uploads = Off」のような行を見つけてください。そしてこれを「file_uploads = On」に変更した後、あなたのウェブサーバを再起動してください。これは他のPHPの設定変更と同様にサーバ上で動作している他のウェブアプリケーションに影響を与える可能性があることに注意してください。';
$string['problem_000007_solution_step_two'] = '最後に「 {$a}/.htaccess 」ファイルを作成または編集して次の行を含めることで、あなたのサイトだけこの設定を変更できるかもしれません: php_value file_uploads On';
$string['problem_000007_title'] = 'PHP: file_uploadsが無効にされています。';
$string['problem_000008_description'] = 'あなたのサーバのPHPの設定ではスクリプトの実行中にそれ以上のメモリを要求できません。これはそれぞれのスクリプトに {$a} のハードリミットがあることを意味します。特に処理するデータが多い場合、Moodle内の特定のオペレーションが正常に完了するためにはこの容量以上を必要とする可能性があります。';
$string['problem_000008_solution'] = 'この問題に対処するにはあなたのウェブサーバ管理者に連絡することをお勧めします。';
$string['problem_000008_title'] = 'PHP: memory_limit cannotはMoodleではコントロールできません。';
$string['problem_000009_description'] = 'あなたがデータベースサーバに接続しているユーザアカウントはパスワードなしで設定されています。これは非常に大きなセキュリティリスクであり、あなたのデータベースがMoodleの動作しているサーバ以外のホストからの接続を受け付けないよう設定されている場合のみ、多少軽減されます。あなたがデータベースに接続する場合、強力なパスワードを使用しない限り、あなたのデータへの不正アクセスおよび不正操作のリスクがあります。';
$string['problem_000009_description_root'] = 'このようなデータベースへのアクセスはスーパーユーザ (root) として実行されるため、これは極めて憂慮すべきことです!';
$string['problem_000009_solution'] = 'あなたのデータベースおよびMoodle config.phpの両方でユーザ {$a} のパスワードを直ちに変更してください!';
$string['problem_000009_solution_root'] = 'データベースが侵害された場合の影響が少なくなるため、ユーザアカウントをrootから他のものに変更するのも良いアイデアでしょう。';
$string['problem_000009_title'] = 'SQL: パスワードなしでアカウントを使用しています。';
$string['problem_000012_description'] = 'ランダム問題ではquestion.parentはquestion.idと等しくする必要があります。あなたのデータベースではこれが正しくない問題があります。MDL-5482が修正される前にバックアップからリストアされたランダム問題でこれが発生する可能性があります。';
$string['problem_000012_solution'] = 'Moodle 1.9.1以降にアップグレードするか、手動でSQLを実行してください。';
$string['problem_000012_title'] = 'ランダム問題データ一貫性';
$string['problem_000014_description'] = 'あなたのデータベースにはこれに違反する問題があります。あなたはどうしてこのようなことが発生したのか調査する必要があります。';
$string['problem_000014_link_cron'] = '小テストフォーラム';
$string['problem_000014_solution'] = '問題がどのように発生したかを詳しく知らない限り、解決策を示すことは不可能です。あなたは小テストフォーラムでサポートを受けれるかもしれません。';
$string['problem_000014_title'] = '多肢選択問題およびランダム問題のみが他の問題の親となれます。';
$string['problem_000016_description'] = 'ある問題カテゴリが別の問題カテゴリの親である場合、両者ともに同じコンテクストに属する必要があります。これは次のカテゴリには当てはまりません:';
$string['problem_000016_description_child'] = '子カテゴリ';
$string['problem_000016_description_context'] = 'コンテクストID';
$string['problem_000016_description_id'] = 'ID';
$string['problem_000016_description_name'] = '名称';
$string['problem_000016_description_parent'] = '親カテゴリ';
$string['problem_000016_link_cron'] = '小テストフォーラム';
$string['problem_000016_solution'] = '自動的な解決は難しいと思われます。親カテゴリまたは子カテゴリが間違った場所にあるかどうかによります。小テストフォーラムの人たちが助けてくれるかもしれません。';
$string['problem_000016_title'] = '問題カテゴリはその親と同じコンテクストに属する必要があります。';
$string['problem_000017_description'] = '問題カテゴリはquestion_categories.parentフィールドによりツリー構造に配置される必要があります。時々このツリー構造が壊れてしまう場合があります。';
$string['problem_000017_solution'] = '以下のSQLクエリの実行を検討してください。これらはいくつかのカテゴリをトップレベルに移動することで問題を解決します。';
$string['problem_000017_title'] = '小テストカテゴリのツリー構造';
$string['problem_000018_description'] = 'コースカテゴリはcourse_categories.parentフィールドによりツリー構造に配置される必要があります。時々このツリー構造が壊れてしまう場合があります。';
$string['problem_000018_solution'] = '以下のSQLクエリの実行を検討してください。これらはいくつかのカテゴリをトップレベルに移動することで問題を解決します。';
$string['problem_000018_title'] = 'コースカテゴリーのツリー構造';
