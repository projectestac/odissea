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
 * Strings for component 'install', language 'ja', branch 'MOODLE_38_STABLE'
 *
 * @package   install
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admindirerror'] = '指定されたadminディレクトリが正しくありません。';
$string['admindirname'] = 'Adminディレクトリ';
$string['admindirsetting'] = 'まれに、コントロールパネルまたはその他の管理ツールにアクセスするためのURLとして/adminディレクトリを使用しているウェブホストがあります。残念ですが、これはMoodle管理ページの標準的なロケーションと衝突します。あなたはインストール時にadminディレクトリをリネームすることができます。ここに新しいディレクトリ名を入力してください。例: <br /> <br /><b>moodleadmin</b><br /> <br />
これによりMoodleでのadminへのリンクを変更します。';
$string['admindirsettinghead'] = '管理ディレクトリの設定中 ...';
$string['admindirsettingsub'] = 'まれに、コントロールパネルまたはその他の管理ツールにアクセスするためのURLとして/adminディレクトリを使用しているウェブホストがあります。残念ですが、これはMoodle管理ページの標準的なロケーションと衝突します。あなたはインストール時にadminディレクトリをリネームすることができます。ここに新しいディレクトリ名を入力してください。例: <br /> <br /><b>moodleadmin</b><br /> <br />
これによりMoodleでのadminへのリンクを変更します。';
$string['availablelangs'] = '利用可能な言語パック';
$string['caution'] = '警告';
$string['chooselanguage'] = '言語を選択してください。';
$string['chooselanguagehead'] = '言語を選択してください。';
$string['chooselanguagesub'] = 'インストールにのみ使用する言語を選択してください。この言語はサイトのデフォルト言語としても使用されます。後でサイト言語を変更することができます。';
$string['cliadminemail'] = '新しい管理ユーザメールアドレス';
$string['cliadminpassword'] = '新しい管理者パスワード';
$string['cliadminusername'] = '管理者アカウントユーザ名';
$string['clialreadyconfigured'] = '設定ファイルconfig.phpはすでに登録されています。このサイトをインストールする場合、admin/cli/install_database.phpを使用してください。';
$string['clialreadyinstalled'] = '設定ファイルconfig.phpはすでに登録されています。このサイトをアップグレードする場合、admin/cli/upgrade.phpを使用してください。';
$string['cliinstallfinished'] = 'インストールが正常に完了しました。';
$string['cliinstallheader'] = 'Moodle {$a} コマンドラインインストールプログラム';
$string['climustagreelicense'] = '非インタラクティブモードにおいて、あなたは「--agree-license」オプションを指定してライセンスに同意する必要があります。';
$string['cliskipdatabase'] = 'データベースインストレーションをスキップしています。';
$string['clitablesexist'] = 'データベーステーブルはすでに作成されています。CLIインストールを続けることはできません。';
$string['compatibilitysettings'] = 'あなたのPHP設定を確認しています ...';
$string['compatibilitysettingshead'] = 'あなたのPHP設定を確認しています ...';
$string['compatibilitysettingssub'] = 'Moodleを適切に動作させるために、あなたのサーバがこれらすべてのテストに合格する必要があります。';
$string['configfilenotwritten'] = 'インストールスクリプトは自動的にあなたの選択した設定を反映したconfig.phpファイルを作成することができませんでした。恐らく、Moodleディレクトリに書き込み権がないためだと思われます。あなたは以下のコードをconfig.phpという名称のファイルとしてMoodleのルートディレクトリにコピーすることができます。';
$string['configfilewritten'] = 'config.phpが正常に作成されました。';
$string['configurationcomplete'] = '設定が完了しました。';
$string['configurationcompletehead'] = '設定が完了しました。';
$string['configurationcompletesub'] = 'MoodleはあなたのMoodleインストレーションルートへの設定内容の保存を試みました。';
$string['database'] = 'データベース';
$string['databasehead'] = 'データベース設定';
$string['databasehost'] = 'データベースホスト :';
$string['databasename'] = 'データベース名 :';
$string['databasepass'] = 'データベースパスワード :';
$string['databaseport'] = 'データベースポート';
$string['databasesocket'] = 'Unixソケット';
$string['databasetypehead'] = 'データベースドライバを選択する';
$string['databasetypesub'] = 'Moodeではいくつかのデータベースサーバのタイプをサポートします。どのタイプを使用するか分からない場合、サーバ管理者にご連絡ください。';
$string['databaseuser'] = 'データベースユーザ :';
$string['dataroot'] = 'データディレクトリ';
$string['datarooterror'] = 'あなたが指定した「データディレクトリ」が見つからないか、作成されませんでした。パスを訂正するか、ディレクトリを手動作成してください。';
$string['datarootpermission'] = 'データディレクトリパーミッション';
$string['datarootpublicerror'] = 'あなたが指定した「データディレクトリ」はウェブ経由でアクセスすることができます。異なるディレクトリを使用してください。';
$string['dbconnectionerror'] = 'あなたが指定したデータベースに接続できませんでした。データベース設定を確認してください。';
$string['dbcreationerror'] = 'データベース作成エラー。設定で指定された名称のデータベースを作成できませんでした。';
$string['dbhost'] = 'ホストサーバ';
$string['dbpass'] = 'パスワード';
$string['dbport'] = 'ポート';
$string['dbprefix'] = 'テーブル接頭辞';
$string['dbtype'] = 'タイプ';
$string['directorysettings'] = '<p>このMoodleのインストール先を確認してください。</p>

<p><b>ウェブアドレス:</b>
Moodleにアクセスする完全なウェブアドレスを指定してください。あなたのウェブサイトに複数のURLよりアクセス可能な場合、学生が利用する最も自然なURLを選択してください。末尾にスラッシュを付けないでください。</p>

<p><b>Moodleディレクトリ:</b>
インストール先の完全なディレクトリパスを指定してください。大文字/小文字が正しいか確認してください。</p>

<p><b>データディレクトリ:</b>
Moodleにはアップロードされたファイルを保存する場所が必要です。 このディレクトリはウェブサーバのユーザ (通常は「nobody」または「apache」) が読み込みおよび書き込みできるようにしてください。ウェブから直接アクセスできないようにしてください。データディレクトリがない場合、インストーラーは作成を試みます。</p>';
$string['directorysettingshead'] = 'Moodleのインストール先を確認してください。';
$string['directorysettingssub'] = '<p><b>ウェブアドレス:</b>
Moodleにアクセスする完全なウェブアドレスを指定してください。あなたのウェブサイトに複数のURLよりアクセス可能な場合、学生が利用する最も自然なURLを選択してください。末尾にスラッシュを付けないでください。</p>
<br />
<br />
<p><b>Moodleディレクトリ:</b>
インストール先の完全なディレクトリパスを指定してください。大文字/小文字が正しいか確認してください。</p>
<br />
<br />
<p><b>データディレクトリ:</b>
Moodleにはアップロードされたファイルを保存する場所が必要です。 このディレクトリはウェブサーバのユーザ (通常は「nobody」または「apache」) が読み込みおよび書き込みできるようにしてください。ウェブから直接アクセスできないようにしてください。データディレクトリがない場合、インストーラーは作成を試みます。</p>';
$string['dirroot'] = 'Moodleディレクトリ';
$string['dirrooterror'] = '「Moodleディレクトリ」設定が正しくないようです - インストール済みMoodleが見つかりませんでした。以下の値がリセットされました。';
$string['download'] = 'ダウンロード';
$string['downloadlanguagebutton'] = '「 {$a} 」言語パックをダウンロードする';
$string['downloadlanguagehead'] = '言語パックのダウンロード';
$string['downloadlanguagenotneeded'] = 'あなたはデフォルトの言語パック「 {$a} 」でインストール処理を続けることができます。';
$string['downloadlanguagesub'] = 'あなたは言語パックをダウンロードして、この言語でインストールを継続することができます。<br /><br />もし、あなたが言語パックをダウンロードできない場合、インストールは英語で継続されます。 (インストール完了後、さらに言語パックをダウンロードして、インストールすることができます。)';
$string['doyouagree'] = '同意しますか ? (yes/no):';
$string['environmenthead'] = 'あなたの環境を確認しています ...';
$string['environmentsub'] = 'あなたのシステムに関する様々な要素がシステム要件に合致するか確認しています。';
$string['environmentsub2'] = 'それぞれのMoodleリリースにはPHPバージョンの最小必要条件および多くの必須PHP拡張モジュールがあります。完全な環境チェックはインストールおよびアップグレードごとに実行されます。新しいPHPバージョンのインストールまたはPHP拡張モジュールの有効化に関して分からない場合、あなたのサーバ管理者にご連絡ください。';
$string['errorsinenvironment'] = '環境チェックに失敗しました!';
$string['fail'] = '失敗';
$string['fileuploads'] = 'ファイルアップロード';
$string['fileuploadserror'] = 'これは有効にしてください。';
$string['fileuploadshelp'] = '<p>あなたのサーバではファイルのアップロードができないようです。</p>

<p>Moodleのインストールは可能ですが、ファイルのアップロードができない状態ではコースファイルまたは新しいユーザプロファイルのイメージをアップロードすることができません。</p>

<p>ファイルアップロードを可能にするにはあなた (またはシステム管理者) があなたのシステムのメインのphp.iniファイルを編集して、<b>file_uploads</b> を「1」にする必要があります。</p>';
$string['inputdatadirectory'] = 'データディレクトリ :';
$string['inputwebadress'] = 'ウェブアドレス :';
$string['inputwebdirectory'] = 'Moodleディレクトリ :';
$string['installation'] = 'インストレーション';
$string['invaliddbprefix'] = '無効な接頭辞です。接頭辞は半角小文字およびアンダースコアのみで構成できます。';
$string['langdownloaderror'] = '残念ですが、言語「 {$a} 」をダウンロードできませんでした。インストール処理は英語で継続されます。';
$string['langdownloadok'] = '言語「 {$a} 」が正常にインストールされました。インストール処理はこの言語で継続されます。';
$string['memorylimit'] = 'Memory Limit';
$string['memorylimiterror'] = 'PHPのmemory limitが低すぎます ... 後で問題が発生する可能性があります。';
$string['memorylimithelp'] = '<p>現在、サーバのPHPメモリ制限が {$a} に設定されています。</p>

<p>この設定ではMoodleのメモリに関わるトラブルが発生する可能性があります。 特に多くのモジュールを使用したり、多くのユーザがMoodleを使用する場合にトラブルが発生します。</p>

<p>可能でしたら、PHPのメモリ制限上限を40M以上に設定されることをお勧めします。この設定を実現するために、いくつかの方法があります:
<ol>
<li>あなたがリコンパイル可能な場合、PHPを<i>--enable-memory-limit</i>オプションでコンパイルしてください。これにより、Moodle自身がメモリ制限を設定することが可能になります。</li>
<li>あなたがphp.iniファイルにアクセスできる場合、<b>memory_limit</b>設定を40Mのように変更することができます。php.iniファイルにアクセスできない場合、管理者に変更を依頼してください。</li>
<li>いくつかのPHPサーバでは以下の行を含む.htaccessファイルをMoodleディレクトリに作成することができます:
<blockquote><div>php_value memory_limit 40M</div></blockquote>
<p>しかし、この設定が<b>すべての</b>PHPページの動作を妨げる場合もあります。ページ閲覧中にエラーが表示される場合、.htaccessファイルを削除してください。</p></li>
</ol>';
$string['mysqliextensionisnotpresentinphp'] = 'PHPのMySQLi拡張モジュールが適切に設定されていないため、MySQLと通信できません。あなたのphp.iniファイルをチェックするか、PHPを再コンパイルしてください。';
$string['nativemariadb'] = 'MariaDB (native/mariadb)';
$string['nativemariadbhelp'] = '<p>データベースにはほとんどのMoodle設定およびデータが保存され、ここで設定する必要があります。</p>
<p>データベース名、ユーザ名およびパスワードは必須入力フィールドです。また、テーブル接頭辞は任意です。</p>
<p>データベース名には半角英数字、ドル記号 ($) およびアンダースコア (_) のみ含むことができます。</p>
<p>データベースが存在せず、あなたが指定したユーザにパーミッションがある場合、Moodleは正しいパーミッションおよび設定の新しいデータベースの作成を試みます。</p>
<p>このドライバに関してレガシーMyISAMエンジンに対する互換性はありません。</p>';
$string['nativemysqli'] = 'Improved MySQL (ネイティブ/mysqli)';
$string['nativemysqlihelp'] = '<p>データベースにはほとんどのMoodle設定およびデータが保存され、ここで設定する必要があります。</p>
<p>データベース名、ユーザ名およびパスワードは必須入力フィールドです。また、テーブル接頭辞は任意です。</p>
<p>データベース名には半角英数字、ドル記号 ($) およびアンダースコア (_) のみ含むことができます。</p>
<p>データベースが存在せず、あなたが指定したユーザにパーミッションがある場合、Moodleは正しいパーミッションおよび設定の新しいデータベースの作成を試みます。</p>';
$string['nativeoci'] = 'Oracle (ネイティブ/oci)';
$string['nativeocihelp'] = 'あなたはほとんどのMoodleデータが保存されるデータベースを設定する必要があります。このデータベースはすでに作成され、アクセスするためのユーザ名およびパスワードが作成されている必要があります。テーブル接頭辞は必須目です。';
$string['nativepgsql'] = 'PostgreSQL (ネイティブ/pgsql)';
$string['nativepgsqlhelp'] = '<p>データベースにはほとんどのMoodle設定およびデータが保存され、ここで設定する必要があります。</p>
<p>データベース名、ユーザ名、パスワードおよびテーブル接頭辞は必須入力フィールドです。/p>
<p>このデータベースはすでに作成されている必要があります。また、データベースにアクセスするため、ユーザ名およびパスワードも作成されている必要があります。</p>';
$string['nativesqlsrv'] = 'SQL*Server Microsoft (ネイティブ/sqlsrv)';
$string['nativesqlsrvhelp'] = 'あなたはほとんどのMoodleデータが保存されるデータベースを設定する必要があります。このデータベースはすでに作成され、アクセスするためのユーザ名およびパスワードが作成されている必要があります。テーブル接頭辞は必須です。';
$string['nativesqlsrvnodriver'] = 'Microsoft SQL Server Driver for PHP がインストールされていない、または適切に設定されませんでした。';
$string['ociextensionisnotpresentinphp'] = 'PHPのOCI8拡張モジュールが適切に設定されていないため、Oracleと通信できません。あなたのphp.iniファイルをチェックするか、PHPを再コンパイルしてください。';
$string['pass'] = 'パス';
$string['paths'] = 'パス';
$string['pathserrcreatedataroot'] = 'データディレクトリ ({$a->dataroot}) はインストーラーで作成できません。';
$string['pathshead'] = 'パスを確認する';
$string['pathsrodataroot'] = 'datarootディレクトリに書き込み権がありません。';
$string['pathsroparentdataroot'] = '親ディレクトリ ({$a->parent}) に書き込み権がありません。データディレクトリ ({$a->dataroot}) はインストーラーで作成できません。';
$string['pathssubadmindir'] = 'まれに、コントロールパネルまたはその他の管理ツールにアクセスするためのURLとして/adminディレクトリを使用しているウェブホストがあります。残念ですが、これはMoodle管理ページの標準的なロケーションと衝突します。あなたはインストール時にadminディレクトリをリネームすることができます。ここに新しいディレクトリ名を入力してください。例: <br /> <br /><b>moodleadmin</b><br /> <br />
これによりMoodleでのadminへのリンクを変更します。';
$string['pathssubdataroot'] = '<p>ユーザによってアップロードされたファイルコンテンツすべてをMoodleが保存するディレクトリです。</p>
<p>このディレクトリはウェブサーバユーザ (通常「nobody」または「apache」) から読み込みおよび書き込みできる必要があります。</p>
<p>ウェブからは直接アクセスできないようにしてください。</p>
<p>現在ディレクトリが存在しない場合、インストレーションプロセスは作成を試みます。</p';
$string['pathssubdirroot'] = '<p>Moodleコードを含むディレクトリに関するフルパスです。</p>';
$string['pathssubwwwroot'] = '<p>Moodleにアクセスできるフルウェブアドレスです。例えばユーザがブラウザのアドレスバーに入力してMoodleにアクセスするためのアドレスです。</p>

<p>複数アドレスを使用したMoodleへのアクセスはできません。あなたのサイトに複数アドレスからアクセスできる場合、最も簡単なアドレスを選択して、すべてのアドレスにパーマネントリダイレクトを設定してください。</p>

<p>あなたのサイトにインターネットおよび内部ネットワーク (イントラネットと呼ばれます) からアクセスできる場合、ここではパブリックアドレスを使用してください。</p>

<p>現在のアドレスが正しくない場合、あなたのブラウザのURLを変更して、異なる値でインストレーションを再開してください。</p>';
$string['pathsunsecuredataroot'] = 'dataroot ロケーションが安全ではありません。';
$string['pathswrongadmindir'] = 'adminディレクトリがありません。';
$string['pgsqlextensionisnotpresentinphp'] = 'PHPのPGSQL拡張モジュールが適切に設定されていないため、PostgreSQLと通信できません。あなたのphp.iniファイルをチェックするか、PHPを再コンパイルしてください。';
$string['phpextension'] = '{$a} PHP拡張モジュール';
$string['phpversion'] = 'PHPバージョン';
$string['phpversionhelp'] = '<p>Moodleには少なくとも5.6.5または7.1のPHPバージョンが必要です (7.0.x にはエンジンの制限があります)。</p>
<p>現在、あなたはバージョン {$a} を動作させています。</p>
<p>PHPをアップグレードするか新しいバージョンのPHPがインストールされているホストに移動する必要があります。</p>';
$string['releasenoteslink'] = 'このバージョンのMoodleの情報に関して、{$a} のリリースノートをご覧ください。';
$string['safemode'] = 'セーフモード';
$string['safemodeerror'] = 'セーフモードが有効の場合、Moodleに問題が発生する場合があります。';
$string['safemodehelp'] = '<p>セーフモードが有効にされている場合、Moodleには様々な問題が発生する場合があります。 特に新しいファイルを作成することができません。</p>

<p>通常セーフモードは被害妄想を持ったウェブホストで有効にされています。Moodleサイト用に別の新しいウェブホスティング会社を探してください。</p>

<p>あなたはインストール作業を続けることも可能ですが、後でいくつかの問題が発生することが予想されます。</p>';
$string['sessionautostart'] = 'セッション自動スタート';
$string['sessionautostarterror'] = 'これは無効にしてください。';
$string['sessionautostarthelp'] = '<p>Moodleはセッションサポートを必要とします。また、セッションサポートなしでは動作しません。</p>

<p>セッションはphp.iniファイルで有効にすることができます ... session.auto_startパラメータを探してください。</p>';
$string['sqliteextensionisnotpresentinphp'] = 'PHPのSQLite拡張モジュールが適切に設定されていません。あなたのphp.iniファイルをチェックするか、PHPを再コンパイルしてください。';
$string['upgradingqtypeplugin'] = '問題/タイププラグインのアップグレード';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'インストールが正常に完了して、あなたのコンピュータで <strong>{$a->packname} {$a->packversion}</strong> パッケージが起動されたため、このページが表示されています。おめでとうございます!';
$string['welcomep30'] = 'このリリース <strong>{$a->installername}</strong> には<strong>Moodle</strong>で環境を作成するアプリケーションが含まれています。すなわち:';
$string['welcomep40'] = 'パッケージには <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong> も含まれています。';
$string['welcomep50'] = 'このパッケージ内のすべてのアプリケーションの使用は個別のライセンスによって規定されています。全体の<strong>{$a->installername}</strong>パッケージは<a href="https://www.opensource.org/docs/definition_plain.html">オープンソース</a>であり、<a href="https://www.gnu.org/copyleft/gpl.html">GPL</a>ライセンスの下で配布されています。';
$string['welcomep60'] = '次からのページはあなたのコンピュータに<strong>Moodle</strong>を簡単に設定およびセットアップする手順にしたがって進みます。あなたはデフォルトの設定を使用することも、必要に応じて任意で設定を変更することもできます。';
$string['welcomep70'] = '<strong>Moodle</strong>のセットアップを続けるには「次へ」ボタンをクリックしてください。';
$string['wwwroot'] = 'ウェブアドレス';
$string['wwwrooterror'] = '「ウェブアドレス」が正しくありません - Moodleインストレーションはそこには表示されません。以下の値はリセットされました。';
