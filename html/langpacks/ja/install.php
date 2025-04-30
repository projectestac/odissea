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
 * Strings for component 'install', language 'ja', version '4.4'.
 *
 * @package     install
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admindirerror'] = '指定されたadminディレクトリが正しくありません。';
$string['admindirname'] = 'adminディレクトリ';
$string['admindirsetting'] = 'まれにコントロールパネルまたはその他の管理ツールにアクセスするためのURLとして「/admin」ディレクトリを使用しているウェブホストがあります。残念ですが、これはMoodle管理ページの標準的なロケーションと衝突します。あなたはインストール時にadminディレクトリをリネームできます。ここに新しいディレクトリ名を入力してください。例: <br /> <br /><b>moodleadmin</b><br /> <br />
これでMoodleでのadminへのリンクを変更します。';
$string['admindirsettinghead'] = 'adminディレクトリ設定中 ...';
$string['admindirsettingsub'] = 'まれにコントロールパネルまたはその他の管理ツールにアクセスするためのURLとして/adminディレクトリを使用しているウェブホストがあります。残念ですが、これはMoodle管理ページの標準的なロケーションと衝突します。あなたはインストール時にadminディレクトリをリネームできます。ここに新しいディレクトリ名を入力してください。例: <br /> <br /><b>moodleadmin</b><br /> <br />
これでMoodleでのadminへのリンクが修正されます。';
$string['availablelangs'] = '利用可能な言語パック';
$string['caution'] = '警告';
$string['chooselanguage'] = '言語を選択してください。';
$string['chooselanguagehead'] = '言語を選択してください。';
$string['chooselanguagesub'] = 'インストールに使用する言語を選択してください。この言語はサイトのデフォルト言語としても使用されますが、後で変更もできます。';
$string['cliadminemail'] = '新しい管理ユーザメールアドレス';
$string['cliadminpassword'] = '新しい管理者パスワード';
$string['cliadminusername'] = '管理者アカウントユーザ名';
$string['clialreadyconfigured'] = '設定ファイルconfig.phpはすでに登録されています。このサイトをインストールする場合、admin/cli/install_database.phpを使用してください。';
$string['clialreadyinstalled'] = '設定ファイルconfig.phpはすでに登録されています。このサイトをアップグレードする場合、admin/cli/upgrade.phpを使用してください。';
$string['cliinstallfinished'] = 'インストールが正常に完了しました。';
$string['cliinstallheader'] = 'Moodle {$a} コマンドラインインストレーションプログラム';
$string['climustagreelicense'] = '非インタラクティブモードにおいて、あなたは「--agree-license」オプションを指定してライセンスに同意する必要があります。';
$string['cliskipdatabase'] = 'データベースインストレーションをスキップしています。';
$string['clisupportemail'] = 'サポートメールアドレス';
$string['clitablesexist'] = 'データベーステーブルがすでに存在するため、CLIインストールを継続できません。';
$string['compatibilitysettings'] = 'あなたのPHP設定を確認しています ...';
$string['compatibilitysettingshead'] = 'あなたのPHP設定を確認しています ...';
$string['compatibilitysettingssub'] = 'あなたのサーバはMoodleを適切に動作させるためにこれらすべてのテストに合格する必要があります。';
$string['configfilenotwritten'] = 'インストールスクリプトは自動的にあなたの選択した設定を反映したconfig.phpファイルを作成できませんでした。恐らくMoodleディレクトリに書き込み権がないためだと思われます。あなたは以下のコードをconfig.phpという名称のファイルとしてMoodleのルートディレクトリにコピーできます。';
$string['configfilewritten'] = 'config.phpが正常に作成されました。';
$string['configurationcomplete'] = '設定を完了しました。';
$string['configurationcompletehead'] = '設定を完了しました。';
$string['configurationcompletesub'] = 'Moodleはあなたの設定をMoodleインストレーションのルートにあるファイルに保存しようと試みました。';
$string['database'] = 'データベース';
$string['databasehead'] = 'データベース設定';
$string['databasehost'] = 'データベースホスト';
$string['databasename'] = 'データベース名';
$string['databasepass'] = 'データベースパスワード';
$string['databaseport'] = 'データベースポート';
$string['databasesocket'] = 'Unixソケット';
$string['databasetypehead'] = 'データベースドライバを選択する';
$string['databasetypesub'] = 'Moodeではいくつかのデータベースサーバのタイプをサポートします。どのタイプを使用するか分からない場合、サーバ管理者にご連絡ください。';
$string['databaseuser'] = 'データベースユーザ';
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
Moodleにアクセスする完全なウェブアドレスを指定してください。あなたのウェブサイトに複数のURLでアクセスできる場合、学生が使用するであろう最も自然なものを選択してください。末尾にスラッシュを付けないでください。</p>

<p><b>Moodleディレクトリ:</b>
インストール先の完全なディレクトリパスを指定してください。大文字/小文字が正しいことを確認してください。</p>

<p><b>データディレクトリ:</b>
Moodleにはアップロードされたファイルを保存する場所が必要です。 このディレクトリにはウェブサーバのユーザ (通常は「nobody」または「apache」) が読み込みおよび書き込みできるようにしてください。しかし、ウェブから直接アクセスできないようにしてください。データディレクトリが存在しない場合、インストーラは作成を試みます。</p>';
$string['directorysettingshead'] = 'このMoodleのインストール先を確認してください。';
$string['directorysettingssub'] = '<p><b>ウェブアドレス:</b>
Moodleにアクセスする完全なウェブアドレスを指定してください。あなたのウェブサイトに複数のURLでアクセスできる場合、学生が使用するであろう最も自然なものを選択してください。末尾にスラッシュを付けないでください。</p>
<br />
<br />
<p><b>Moodleディレクトリ:</b>
インストール先の完全なディレクトリパスを指定してください。大文字/小文字が正しいことを確認してください。</p>
<br />
<br />
<p><b>データディレクトリ:</b>
Moodleにはアップロードされたファイルを保存する場所が必要です。 このディレクトリにはウェブサーバのユーザ (通常は「nobody」または「apache」) が読み込みおよび書き込みできるようにしてください。しかし、ウェブから直接アクセスできないようにしてください。データディレクトリが存在しない場合、インストーラは作成を試みます。</p>';
$string['dirroot'] = 'Moodleディレクトリ';
$string['dirrooterror'] = '「Moodleディレクトリ」設定が正しくないようです - インストール済みMoodleが見つかりませんでした。以下の値がリセットされました。';
$string['download'] = 'ダウンロード';
$string['downloadlanguagebutton'] = '「 {$a} 」言語パックをダウンロードする';
$string['downloadlanguagehead'] = '言語パックをダウンロードする';
$string['downloadlanguagenotneeded'] = 'あなたはデフォルトの言語パック「 {$a} 」を使用してインストールプロセスを続行できます。';
$string['downloadlanguagesub'] = 'あなたは言語パックをダウンロードして、この言語でインストールプロセスを続行できます。<br /><br />もし、あなたが言語パックをダウンロードできない場合、インストールは英語で続行されます (インストール完了後、さらに言語パックをダウンロードして、インストールできます)。';
$string['doyouagree'] = '同意しますか ? (yes/no):';
$string['environmenthead'] = 'あなたの環境を確認しています ...';
$string['environmentsub'] = 'あなたのシステムの様々なコンポーネントがシステム要件を満たしているか確認しています。';
$string['environmentsub2'] = 'それぞれのMoodleリリースにはPHPバージョンの最小必要条件および多くの必須PHP拡張モジュールがあります。完全な環境チェックはインストールおよびアップグレードごとに実行されます。新しいバージョンのインストールまたはPHP拡張モジュールの有効化に関して分からない場合、あなたのサーバ管理者にご連絡ください。';
$string['errorsinenvironment'] = '環境チェックに失敗しました!';
$string['fail'] = '失敗';
$string['fileuploads'] = 'ファイルアップロード';
$string['fileuploadserror'] = 'これは有効にしてください。';
$string['fileuploadshelp'] = '<p>あなたのサーバではファイルのアップロードが無効にされているようです。</p>

<p>Moodleのインストールは可能ですが、ファイルのアップロードができない状態ではコースファイルまたは新しいユーザプロファイルのイメージをアップロードできません。</p>

<p>ファイルアップロードを可能にするにはあなた (またはシステム管理者) があなたのシステムのメインのphp.iniファイルを編集して、<b>file_uploads</b> を「1」に変更する必要があります。</p>';
$string['inputdatadirectory'] = 'データディレクトリ:';
$string['inputwebadress'] = 'ウェブアドレス :';
$string['inputwebdirectory'] = 'Moodleディレクトリ:';
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
<li>あなたがリコンパイル可能な場合、PHPを<i>--enable-memory-limit</i>オプションでコンパイルしてください。これでMoodle自身がメモリ制限を設定することが可能になります。</li>
<li>あなたがphp.iniファイルにアクセスできる場合、<b>memory_limit</b>設定を40Mのように変更することができます。php.iniファイルにアクセスできない場合、管理者に変更を依頼してください。</li>
<li>いくつかのPHPサーバでは以下の行を含む.htaccessファイルをMoodleディレクトリに作成することができます:
<blockquote><div>php_value memory_limit 40M</div></blockquote>
<p>しかし、この設定が<b>すべての</b>PHPページの動作を妨げる場合もあります。ページ閲覧中にエラーが表示される場合、.htaccessファイルを削除してください。</p></li>
</ol>';
$string['mysqliextensionisnotpresentinphp'] = 'PHPのMySQLi拡張モジュールが適切に設定されていないため、MySQLと通信できません。あなたのphp.iniファイルをチェックするか、PHPを再コンパイルしてください。';
$string['nativeauroramysql'] = 'Aurora MySQL (native/auroramysql)';
$string['nativeauroramysqlhelp'] = '<p>データベースはほとんどのMoodle設定およびデータが保存される場所であり、ここで設定する必要があります。</p>
<p>データベース名、ユーザ名およびパスワードは必須入力フィールドです。テーブル接頭辞は任意です。</p>
<p>データベース名には半角英数字、ドル記号 ($) およびアンダースコア (_) のみ含めることができます。</p>
<p>データベースが現在存在せず、あなたが指定したユーザにパーミッションがある場合、Moodleは正しいパーミッションおよび設定の新しいデータベースの作成を試みます。</p>
<p>このドライバはレガシMyISAMエンジンとは互換性がありません。</p>';
$string['nativemariadb'] = 'MariaDB (native/mariadb)';
$string['nativemariadbhelp'] = '<p>データベースはほとんどのMoodle設定およびデータが保存される場所であり、ここで設定する必要があります。</p>
<p>データベース名、ユーザ名およびパスワードは必須入力フィールドです。テーブル接頭辞は任意です。</p>
<p>データベース名には半角英数字、ドル記号 ($) およびアンダースコア (_) のみ含むことができます。</p>
<p>データベースが存在せず、あなたが指定したユーザにパーミッションがある場合、Moodleは正しいパーミッションおよび設定の新しいデータベースの作成を試みます。</p>
<p>このドライバはレガシMyISAMエンジンとは互換性がありません。</p>';
$string['nativemysqli'] = 'Improved MySQL (ネイティブ/mysqli)';
$string['nativemysqlihelp'] = '<p>データベースはほとんどのMoodle設定およびデータが保存される場所であり、ここで設定する必要があります。</p>
<p>データベース名、ユーザ名およびパスワードは必須入力フィールドです。テーブル接頭辞は任意です。</p>
<p>データベース名には半角英数字、ドル記号 ($) およびアンダースコア (_) のみ含むことができます。</p>
<p>データベースが存在せず、あなたが指定したユーザにパーミッションがある場合、Moodleは正しいパーミッションおよび設定の新しいデータベースの作成を試みます。</p>';
$string['nativeoci'] = 'Oracle (ネイティブ/oci)';
$string['nativeocihelp'] = 'あなたはほとんどのMoodleデータが保存されるデータベースを設定する必要があります。このデータベースはすでに作成され、アクセスするためのユーザ名およびパスワードが作成されている必要があります。テーブル接頭辞は必須目です。';
$string['nativepgsql'] = 'PostgreSQL (ネイティブ/pgsql)';
$string['nativepgsqlhelp'] = '<p>データベースはほとんどのMoodle設定およびデータが保存される場所であり、ここで設定する必要があります。</p>
<p>データベース名、ユーザ名、パスワードおよびテーブル接頭辞は必須入力フィールドです。/p>
<p>このデータベースはすでに作成されている必要があります。また、ユーザには読み取りおよび書き込みの両方のアクセス権が必要です。</p>';
$string['nativesqlsrv'] = 'SQL*Server Microsoft (ネイティブ/sqlsrv)';
$string['nativesqlsrvhelp'] = 'あなたはほとんどのMoodleデータが保存されるデータベースを設定する必要があります。このデータベースはすでに作成され、アクセスするためのユーザ名およびパスワードが作成されている必要があります。テーブル接頭辞は必須です。';
$string['nativesqlsrvnodriver'] = 'Microsoft SQL Server Driver for PHPがインストールされていないか、適切に設定されていません。';
$string['ociextensionisnotpresentinphp'] = 'PHPのOCI8拡張モジュールが適切に設定されていないため、Oracleと通信できません。あなたのphp.iniファイルをチェックするか、PHPを再コンパイルしてください。';
$string['pass'] = 'パス';
$string['paths'] = 'パス';
$string['pathserrcreatedataroot'] = 'データディレクトリ ({$a->dataroot}) をインストーラで作成できません。';
$string['pathshead'] = 'パスを確認する';
$string['pathsrodataroot'] = 'datarootディレクトリに書き込み権がありません。';
$string['pathsroparentdataroot'] = '親ディレクトリ ({$a->parent}) に書き込み権がありません。データディレクトリ ({$a->dataroot}) をインストーラで作成できません。';
$string['pathssubadmindir'] = 'ごく少数のウェブホストですが、コントロールパネルまたはその他の管理ツールにアクセスするためのURLとして/adminディレクトリを使用しています。残念ですが、これはMoodle管理ページの標準的なロケーションと衝突します。あなたはインストール時にadminディレクトリをリネームできます。ここに新しいディレクトリ名を入力してください。例: <b>moodleadmin</b> これでMoodleでのadminへのリンクを変更します。';
$string['pathssubdataroot'] = '<p>ユーザがアップロードしたファイルコンテンツすべてをMoodleが保存するディレクトリです。</p>
<p>このディレクトリはウェブサーバユーザ (通常「nobody」または「apache」) から読み込みおよび書き込みできる必要があります。</p>
<p>ウェブからは直接アクセスできないようにしてください。</p>
<p>現在ディレクトリが存在しない場合、インストレーションプロセスは作成を試みます。</p';
$string['pathssubdirroot'] = '<p>Moodleコードを含むディレクトリへのフルパスです。</p>';
$string['pathssubwwwroot'] = '<p>Moodleにアクセスするための完全なウェブアドレスです。例えばユーザがブラウザのアドレスバーに入力してMoodleにアクセスするためのアドレスです。</p>
<p>複数アドレスを使用したMoodleへのアクセスはできません。あなたのサイトに複数アドレスからアクセスできる場合、最も簡単なアドレスを選択して、すべてのアドレスにパーマネントリダイレクトを設定してください。</p>
<p>あなたのサイトにインターネットおよび内部ネットワーク (イントラネットと呼ばれることもあります) からアクセスできる場合、ここではパブリックアドレスを使用してください。</p>
<p>現在のアドレスが正しくない場合、あなたのブラウザのアドレスバーでURLを変更して、インストールをやり直してください。</p>';
$string['pathsunsecuredataroot'] = 'datarootの場所が安全ではありません。';
$string['pathswrongadmindir'] = 'adminディレクトリが存在しません。';
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
