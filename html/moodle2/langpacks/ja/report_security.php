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
 * Strings for component 'report_security', language 'ja', branch 'MOODLE_34_STABLE'
 *
 * @package   report_security
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_configrw_details'] = '<p>ウェブサーバからファイルが修正されないようインストール後、config.phpのファイルパーミッションを変更することをお勧めします。この方法はサーバのセキュリティを著しく向上させるものではありませんが一般的なセキュリティ上の弱点 (exploits) をスローダウンしたり、制限することはできます。</p>';
$string['check_configrw_name'] = '書き込み可能なconfig.php';
$string['check_configrw_ok'] = 'PHPスクリプトはconfig.phpを修正することができません。';
$string['check_configrw_warning'] = 'PHPスクリプトはconfig.phpを修正することができます。';
$string['check_cookiesecure_details'] = 'p>あなたが、https通信を有効にした場合、セキュアクッキーも有効にすることをお勧めします。また、httpからhttpsへのパーマネントリダイレクトも追加してください。理想的にはHSTSヘッダも送信してください。</p>';
$string['check_cookiesecure_error'] = 'セキュアクッキーを有効にしてください。';
$string['check_cookiesecure_name'] = 'セキュアクッキー';
$string['check_cookiesecure_ok'] = 'セキュアクッキーは有効にされています。';
$string['check_defaultuserrole_details'] = '<p>すべてのログインユーザにはデフォルトのユーザロールのケイパビリティが割り当てられます。このロールにリスクのあるケイパビリティが許可されているかどうか確認してください。</p>
<p>デフォルトのユーザロールでサポートされているレガシータイプのロールは「認証済みユーザ」のみです。コース閲覧ケイパビリティは有効にしないでください。</p>';
$string['check_defaultuserrole_error'] = 'デフォルトユーザロール「 {$a} 」は正しくない定義です!';
$string['check_defaultuserrole_name'] = 'すべてのユーザのデフォルトロール';
$string['check_defaultuserrole_notset'] = 'デフォルトロールが設定されていません。';
$string['check_defaultuserrole_ok'] = 'すべてのユーザのデフォルトロール定義はOKです。';
$string['check_displayerrors_details'] = '<p>いくつかのエラーメッセージはあなたのサーバに関する機密情報を漏洩する可能性があるためPHP設定 <code>display_errors</code>の有効化は実運用サイトではお勧めできません。</p>';
$string['check_displayerrors_error'] = 'エラー表示のPHP設定が有効にされています。この設置を無効にすることをお勧めします。';
$string['check_displayerrors_name'] = 'PHPエラーを表示する';
$string['check_displayerrors_ok'] = 'PHPエラーの表示は無効にされています。';
$string['check_emailchangeconfirmation_details'] = '<p>ユーザがプロファイルでメールアドレスを変更する場合、メール確認ステップが推奨されています。無効にされている場合、スパム送信者がサーバをスパム送信に悪用する恐れがあります。</p>
<p>認証プラグインからロックされたメールアドレスフィールドに関して、この可能性を考える必要はありません。</p>';
$string['check_emailchangeconfirmation_error'] = 'ユーザはどのようなメールアドレスでも入力することができます。';
$string['check_emailchangeconfirmation_info'] = 'ユーザは許可されたドメインからのみメールアドレスを入力することができます。';
$string['check_emailchangeconfirmation_name'] = 'メール変更確認';
$string['check_emailchangeconfirmation_ok'] = 'ユーザプロファイル内のメールアドレス変更は確認されるべきです。';
$string['check_embed_details'] = '<p>無制限のオブジェクト埋め込みは非常に危険です - すべての登録ユーザは他のサーバに対してXSSアタックを開始することができます。この設定は実稼動サーバで無効にされるべきです。</p>';
$string['check_embed_error'] = '無制限のオブジェクト埋め込みが許可されています - これは大部分のサーバで非常に危険な設定です。';
$string['check_embed_name'] = 'EMBEDおよびOBJECTを許可する';
$string['check_embed_ok'] = '無制限のオブジェクト埋め込みは許可されていません。';
$string['check_frontpagerole_details'] = '<p>すべての登録ユーザのフロントページ活動にはデフォルトのフロントページロールのケイパビリティが割り当てられます。このロールにリスクのあるケイパビリティが許可されているかどうか確認してください。</p>
<p>この目的のため、特別なロールを作成してレガシータイプのロールは使用しないことをお勧めします。</p>';
$string['check_frontpagerole_error'] = '正しくないフロントページロール「 {$a} 」の割り当てが検出されました!';
$string['check_frontpagerole_name'] = 'フロントページロール';
$string['check_frontpagerole_notset'] = 'フロントページロールが設定されていません。';
$string['check_frontpagerole_ok'] = 'フロントページロール定義はOKです。';
$string['check_google_details'] = '<p>Googleに公開する設定ではサーチエンジンがコースにゲストとしてログインできるようにします。ゲストログインが許可されていない場合、この設定の有効化は意味を持ちません。</p>';
$string['check_google_error'] = 'サーチエンジンによるゲストアクセスは許可されていますが、ゲストアクセスは無効にされています。';
$string['check_google_info'] = 'サーチエンジンはゲストとして入ることができます。';
$string['check_google_name'] = 'Googleに公開する';
$string['check_google_ok'] = 'サーチエンジンによるアクセスは有効にされていません。';
$string['check_guestrole_details'] = '<p>ゲストロールはゲストに使用され、ログインユーザおよび一時的なゲストコースアクセスには使用されません。このロールにリスクのあるケイパビリティが許可されているかどうか確認してください。</p>
<p>ゲストロールでサポートされているレガシータイプのロールは「ゲスト」のみです</p>';
$string['check_guestrole_error'] = 'ゲストロール「 {$a} 」の定義は正しくありません!';
$string['check_guestrole_name'] = 'ゲストロール';
$string['check_guestrole_notset'] = 'ゲストロールが設定されていません。';
$string['check_guestrole_ok'] = 'ゲストロール定義はOKです。';
$string['check_mediafilterswf_details'] = '<p>自動swf埋め込みは非常に危険です - すべての登録ユーザは他のサーバに対してXSSアタックを開始することができます。この設定は実稼動サーバで無効にされるべきです。</p>';
$string['check_mediafilterswf_error'] = 'Flashメディアフィルタが許可されています - これは大部分のサーバで非常に危険な設定です。';
$string['check_mediafilterswf_name'] = '.swfメディアフィルタを有効にする';
$string['check_mediafilterswf_ok'] = 'Flashメディアフィルタが有効にされていません。';
$string['check_noauth_details'] = '<p>「認証なし」プラグインは実運用サイト向けではありません。このサイトが開発テストサイトではない限りこのプラグインを無効にしてください。</p>';
$string['check_noauth_error'] = '「認証なし」プラグインは実運用サイトでは使用できません。';
$string['check_noauth_name'] = '認証なし';
$string['check_noauth_ok'] = '無効にされた認証プラグインはありません。';
$string['check_nodemodules_details'] = '<p>ディレクトリ「 {$a->path} 」はNode.jsモジュールおよび一般的にNPMユーティリティによってインストールされる依存関係を含みます。これらのモジュールはgruntフレームワークを使用するようなローカルのMoodleの開発に必要です。これらのためにMoodleサイトを実運用する必要はありません。また、あなたのサイトをリモート攻撃にさらす潜在的に危険なコードを含むことができてしまいます。</p><p>サイトにパブリックURLからアクセスできる場合、ディレクトリを削除することを強くお勧めします。またはあなたのウェブサーバ設定で少なくともディレクトリへのウェブアクセスを禁止してください。</p>';
$string['check_nodemodules_info'] = 'node_modulesディレクトリはパブリックサイトに存在すべきではありません。';
$string['check_nodemodules_name'] = 'Node.jsモジュールディレクトリ';
$string['check_openprofiles_details'] = 'ユーザプロファイルを公開することで、スパム送信者が不正利用することができます。「プロファイル閲覧時にユーザのログインを強制する」または「ユーザのログインを強制する」を有効にすることをお勧めします。';
$string['check_openprofiles_error'] = 'ログインなしで誰でもユーザプロファイルを閲覧できます。';
$string['check_openprofiles_name'] = 'ユーザプロファイルを公開する';
$string['check_openprofiles_ok'] = 'ユーザプロファイルを閲覧するにはログインが必要です。';
$string['check_passwordpolicy_details'] = '<p>非常に多くの場合、不正なアクセスを引き起こす可能性がありますので、パスワードポリシーの設定をお勧めします。ユーザがパスワードを記憶できなかったり、忘れたり、書き留めることがありますので、必要条件を厳格にしすぎないでください。</p>';
$string['check_passwordpolicy_error'] = 'パスワードポリシーが設定されていません。';
$string['check_passwordpolicy_name'] = 'パスワードポリシー';
$string['check_passwordpolicy_ok'] = 'パスワードポリシーが有効にされています。';
$string['check_preventexecpath_details'] = '<p>管理画面による実行可能パスの設定を許可することにより権限昇格の可能性が生じます。</p>';
$string['check_preventexecpath_name'] = '実行可能パス';
$string['check_preventexecpath_ok'] = '実行可能パスはconfig.phpのみで設定することができます。';
$string['check_preventexecpath_warning'] = '実行可能パスは管理画面で設定することができます。';
$string['check_riskadmin_detailsok'] = '<p>以下の管理者リストを確認してください:</p>{$a}';
$string['check_riskadmin_detailswarning'] = '<p>以下のシステム管理者リストを確認してください。:</p>{$a->admins}
<p>システムコンテクストのみへの管理者ロール割り当てをお勧めします。以下のユーザはサポートされない管理者ロールが他のコンテクスト内で割り当てられています:</p>{$a->unsupported}';
$string['check_riskadmin_name'] = '管理者';
$string['check_riskadmin_ok'] = '{$a} 名のサーバ管理者が登録されています。';
$string['check_riskadmin_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) ロール割り当てのレビュー</a>';
$string['check_riskadmin_warning'] = '{$a->admincount} 名のサーバ管理者および {$a->unsupcount} 名のサポートされない管理者ロールの割り当てが見つかりました。';
$string['check_riskbackup_detailsok'] = 'ユーザデータのバックアップを明確に許可しているロールはありません。しかし、「doanything」ケイパビリティを持った管理者はまだユーザデータをバックアップできることに留意してください。';
$string['check_riskbackup_details_overriddenroles'] = '<p>これらのアクティブなオーバーライドはユーザにバックアップ内にユーザデータを含むことができる能力を与えます。このパーミッションが本当に必要かどうか確認してください。</p> {$a}';
$string['check_riskbackup_details_systemroles'] = '<p>現在、以下のシステムロールはユーザにバックアップ内にユーザデータを含むことを許可しています。このパーミッションが本当に必要かどうか確認してください。</p> {$a}';
$string['check_riskbackup_details_users'] = '<p>上記のロールまたはローカルオーバーライドのため、以下のユーザアカウントは現在コースに登録しているユーザの個人情報を含むバックアップを作成できるパーミッションを持っています。これらのユーザが、(a)信用されて、(b)強度の高いパスワードで守られていることを確認してください:</p> {$a}';
$string['check_riskbackup_editoverride'] = '<a href="{$a->url}">{$a->contextname} 内の {$a->name}</a>';
$string['check_riskbackup_editrole'] = '<a href="{$a->url}">{$a->name}</a>';
$string['check_riskbackup_name'] = 'ユーザデータのバックアップ';
$string['check_riskbackup_ok'] = 'ユーザデータのバックアップを明確に許可しているロールはありません。';
$string['check_riskbackup_unassign'] = '<a href="{$a->url}">{$a->contextname} 内の {$a->fullname} ({$a->email})</a>';
$string['check_riskbackup_warning'] = 'ユーザデータをバックアップすることができる {$a->rolecount} 件のロール、{$a->overridecount} 件のオーバーライドおよび {$a->usercount} 名のユーザが見つかりました。';
$string['check_riskxss_details'] = '<p>RISK_XSSは信頼されるユーザのみ使用できるすべての危険なケイパビリティを意味します。</p>
<p>以下のユーザ一覧を閲覧した後、このサーバにおいてあなたがこれらのユーザを完全に信頼できることを確認してください:</p><p>{$a}</p>';
$string['check_riskxss_name'] = 'XSS信頼ユーザ';
$string['check_riskxss_warning'] = 'RISK_XSS - {$a} 名のユーザが信頼されています。';
$string['check_unsecuredataroot_details'] = '<p>datarootディレクトリはウェブからアクセスできないようにしてください。ウェブからアクセスできないディレクトリを使用する最良の方法はパブリックウェブディレクトリ外のディレクトリを使用することです。</p>
<p>あなたがディレクトリを移動した場合、それに応じて<code>config.php</code>の<code>$CFG->dataroot</code>設定を変更してください。</p>';
$string['check_unsecuredataroot_error'] = 'あなたのdatarootディレクトリ <code>{$a}</code> は正しくない場所に配置され、ウェブに晒された状態です!';
$string['check_unsecuredataroot_name'] = '安全ではないdataroot';
$string['check_unsecuredataroot_ok'] = 'datarootディレクトリはウェブからアクセスできないようにしてください。';
$string['check_unsecuredataroot_warning'] = 'あなたのdatarootディレクトリ <code>{$a}</code> は正しくない場所に配置されウェブに晒された状態です。';
$string['check_vendordir_details'] = '<p>ディレクトリ「 {$a->path} 」は様々なサードパーティライブラリおよび一般的にPHPコンポーザによってインストールされる依存関係を含みます。PHPUnitフレームワークのインストールのようなローカルのMoodle開発に必要であると思われます。これらのためにMoodleサイトを実運用する必要はありません。また、あなたのサイトをリモート攻撃にさらす潜在的に危険なコードを含むことができてしまいます。</p><p>サイトにパブリックURLからアクセスできる場合、ディレクトリを削除することを強くお勧めします。またはあなたのウェブサーバ設定で少なくともディレクトリへのウェブアクセスを禁止してください。</p>';
$string['check_vendordir_info'] = 'vendorディレクトリはパブリックサイトに存在すべきではありません。';
$string['check_vendordir_name'] = 'ベンダディレクトリ';
$string['check_webcron_details'] = '<p>ウェブ経由でcronを実行することにより、匿名ユーザに機密情報を晒してしまいます。そのため、コマンドラインによるcronの実行またはリモートアクセスに対してcronにパスワードを設定することをお勧めします。</p>';
$string['check_webcron_name'] = 'ウェブcron';
$string['check_webcron_ok'] = '匿名ユーザはcronにアクセスできません。';
$string['check_webcron_warning'] = '匿名ユーザはcronにアクセスできます。';
$string['configuration'] = '設定';
$string['description'] = '説明';
$string['details'] = '詳細';
$string['issue'] = '問題';
$string['pluginname'] = 'セキュリティ概要';
$string['privacy:metadata'] = 'セキュリティ概要プラグインはどのような個人データも保存しません。';
$string['security:view'] = 'セキュリティレポートを表示する';
$string['status'] = 'ステータス';
$string['statuscritical'] = 'クリティカル';
$string['statusinfo'] = '情報';
$string['statusok'] = 'OK';
$string['statusserious'] = 'シリアス';
$string['statuswarning'] = '警告';
$string['timewarning'] = 'データ処理には長時間を要します、しばらくお待ちください ...';
