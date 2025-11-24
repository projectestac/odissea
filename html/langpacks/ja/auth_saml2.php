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
 * Strings for component 'auth_saml2', language 'ja', version '4.5'.
 *
 * @package     auth_saml2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowcreate'] = '作成を許可する';
$string['allowcreate_help'] = 'オンデマンドによるIdPユーザ作成を許可する';
$string['alterlogout'] = '代替ログアウトURL';
$string['alterlogout_help'] = 'すべての内部ログアウト処理が実行された後にユーザをリダイレクトするためのURLです。';
$string['anyauth'] = '許可される認証タイプ';
$string['anyauth_help'] = 'Yes: すべてのユーザのSAMLログインを許可します。No: タイプがSAML 2.0のユーザのみログインを許可します。';
$string['anyauthotherdisabled'] = 'あなたは「 {$a->username} 」として正常にログインしましたが、あなたの認証タイプ「 {$a->auth} 」は無効にされています。';
$string['assertionsconsumerservices'] = 'アサーションコンシューマサービス';
$string['assertionsconsumerservices_help'] = 'SPがサポートするバインディングのリストです。';
$string['attemptsignout'] = 'IdPサインアウトを試みる';
$string['attemptsignout_help'] = 'ここではサインアウト要求を送信するためにIdPとの通信を試みます。';
$string['attrsimple'] = '属性を簡略化 する';
$string['attrsimple_help'] = 'ADFS等の様々なIdPではurnsまたは名前空間付きxmlスキーマ名等の長い属性キーが使用されます。この設定を有効にした場合、例えばhttps://schemas.xmlsoap.org/ws/2005/05/identity/claims/givennameを「givenname」にマッピングする等、簡略化できます。';
$string['auth_data_mapping'] = 'データマッピング';
$string['auth_fieldlock_expl'] = '<p><b>ロック値:</b> この設定を有効にした場合、Moodleユーザおよび管理者がフィールドを直接編集できなくなります。あなたがこのデータを外部認証システムで管理している場合、このオプションを使用してください。</p>';
$string['auth_fieldlockfield'] = 'ロック値 ({$a})';
$string['auth_fieldlocks'] = 'ユーザフィールドをロックする';
$string['auth_fieldmapping'] = 'データマッピング ({$a})';
$string['auth_saml2blockredirectdescription'] = '設定されたグループ制限に基づきSAML2ログインにリダイレクトまたはメッセージを表示します。';
$string['auth_saml2description'] = 'SAML2アイデンティティプロバイダ (IdP) で認証する';
$string['auth_updatelocalfield'] = 'ローカルを更新する ({$a})';
$string['auth_updateremotefield'] = '外部を更新する ({$a})';
$string['authncontext'] = 'AuthnContext';
$string['authncontext_help'] = 'アサーション拡張を許可します。必要でない場合、空白のままにしてください。';
$string['autocreate'] = 'ユーザ自動作成';
$string['autocreate_help'] = 'オンデマンドでのMoodleユーザ作成を許可します。';
$string['autologin'] = '自動ログイン';
$string['autologin_help'] = 'ログインせずにゲストアクセスを許可するページにおいてユーザが (パッシブ認証を使用して) IdPにログインしている場合、自動的に実際のユーザアカウントでMoodleにログインします。';
$string['autologinbycookie'] = '指定されたクッキーが存在するか、または変更されるか確認する';
$string['autologinbysession'] = '1セッションにつき1回チェックする';
$string['autologincookie'] = '自動ログインクッキー';
$string['autologincookie_help'] = '自動ログインを試みるタイミングを決定するために使用されるクッキーの名称です (上でクッキーのオプションが選択されている場合のみ関係します)。';
$string['availableidps'] = '利用可能なIdPを選択する';
$string['availableidps_help'] = 'IdPメタデータxmlに複数のIdPエンティティが含まれる場合、あなたはユーザがログインするために利用可能なエンティティを選択する必要があります。';
$string['blockredirectheading'] = 'アカウントブロック動作';
$string['cannotmapfield'] = 'マッピングの衝突が検出されました - 2つのフィールドが同じ評定項目 {$a} にマッピングされます。';
$string['certificate'] = '証明書を再生成する';
$string['certificate_help'] = 'このSPが使用する秘密鍵および証明書を再生成します。 | <a href=\'{$a}\'>SP証明書を表示する</a>';
$string['certificatedetails'] = '証明書詳細';
$string['certificatedetailshelp'] = '<h1>SAML2自動生成公開証明書コンテンツ</h1><p>証明書のパスは次のとおりです:</p>';
$string['certificatelock'] = '証明書をロックする';
$string['certificatelock_help'] = '証明書ロックにより一度生成された証明書の上書きを防げます。';
$string['certificatelock_locked'] = '証明書ロック済み';
$string['certificatelock_lockedmessage'] = '現在、証明書はロックされています。';
$string['certificatelock_regenerate'] = 'ロックされているため、証明書を再生成できません!';
$string['certificatelock_unlock'] = '証明書のロックを解除する';
$string['certificatelock_warning'] = '警告: あなたは証明書をロックしようとしています。本当にロックしてもよろしいですか?
<br />
現在、証明書はロックされていません。';
$string['checkcertificateexpired'] = 'SAML証明書は {$a} 前に有効期限切れとなりました。';
$string['checkcertificateexpiry'] = 'SAML証明書有効期限';
$string['checkcertificateok'] = 'SAML証明書は {$a} で有効期限が切れます。';
$string['checkcertificatewarn'] = 'SAML証明書は {$a} で有効期限が切れます。';
$string['commonname'] = '一般名';
$string['countryname'] = '国';
$string['debug'] = 'デバッギング';
$string['debug_help'] = '<p>ここでは追加デバッグ情報を通常のMoodleログに追加します。 | <a href=\'{$a}\'>SSP設定を表示する</a></p>';
$string['duallogin'] = '同時ログイン';
$string['duallogin_help'] = '<p>この設定を「Yes」にした場合、ユーザには手動およびSAMLログインボタンの両方が表示されます。この設定を「No」にした場合、常にIdPログインページに直接移動します。</p>
<p>「パッシブモード」の場合、IdP認証済みユーザは自動的にログインします。そうでない場合、Moodleログインページに移動します。</p>
<p>この設定を「No」にした場合、管理者は/login/index.php?saml=offで手動ログインページにアクセスできます。</p>
<p>この設定を「Yes」にした場合、外部ページはSAMLを使用してMoodleにディープリンクできます。例) /course/view.php?id=45&saml=on</p>';
$string['emailtaken'] = 'メールアドレス {$a} がすでに登録されているため、新しいアカウントを作成できません。';
$string['emailtakenupdate'] = 'メールアドレス {$a} がすでに登録されているため、あなたのメールアドレスは更新されませんでした。';
$string['error'] = 'ログインエラー';
$string['errorinvalidautologin'] = '無効な自動ログインリクエスト';
$string['errorparsingxml'] = 'XML構文解析エラー: {$a}';
$string['exception'] = 'SAML2例外: {$a}';
$string['expirydays'] = '有効期限 (日)';
$string['fielddelimiter'] = 'フィールドデリミタ';
$string['fielddelimiter_help'] = 'フィールドがIdPから値の配列を受け取る場合に使用するデリミタです。';
$string['flaggedresponsetypemessage'] = 'カスタムメッセージを表示する';
$string['flaggedresponsetyperedirect'] = '外部URLにリダイレクトする';
$string['flagmessage'] = 'レスポンスメッセージ';
$string['flagmessage_default'] = 'あなたのアイデンティティプロバイダにログインしていますが、このアカウントではMoodleへのアクセスが制限されています。詳細はあなたの管理者にお問い合わせください。';
$string['flagmessage_help'] = '<p>設定されたグループ制限に基づきユーザがMoodleへのアクセスを許可されない場合に表示されるメッセージです。</p> <p>(「レスポンスタイプ」が「カスタムメッセージを表示する」の場合のみ使用されます)</p>';
$string['flagredirecturl'] = 'リダイレクトURL';
$string['flagredirecturl_help'] = '<p>設定されたグループ制限に基づきユーザがMoodleへのアクセスを許可されない場合のリダイレクト先URLです。</p><p>(「レスポンスタイプ」が「外部URLにリダイレクトする」の場合のみ使用されます)</p>';
$string['flagresponsetype'] = 'アカウントブロックレスポンスタイプ';
$string['flagresponsetype_help'] = '設定されたグループ制限に基づきアクセスがブロックされた場合、Moodleはどのように対応しますか?';
$string['grouprules'] = 'グループルール';
$string['grouprules_help'] = '<p>グループ属性の値に基づきアクセスを制御できるようにするためのルールリストです。</p> <p>それぞれの行には次のフォーマットで1ルールを記述してください: {allowまたはdeny} {グループ属性}={値}</p><p>リスト上位のルールが最初に適用されます。</p>
例:
<br />
allow admins=yes
<br />
deny admins=no
<br />
allow examrole=proctor
<br />
deny library=overdue
<br />';
$string['idpattr'] = 'IdPマッピング';
$string['idpattr_help'] = 'どのIdP属性がMoodleユーザフィールドと照合されるべきですか?';
$string['idpmetadata'] = 'IdPメタデータxmlまたは公開xml URL';
$string['idpmetadata_badurl'] = '{$a} のメタデータが無効です。';
$string['idpmetadata_help'] = '複数のIdPを使用する場合、それぞれの公開メタデータURLを新しい行に入力してください。
<br />
名称を上書きするにはhttpsの前にテキストを記述してください。例) Forced IdP Name https://ssp.local/simplesaml/saml2/idp/metadata.php';
$string['idpmetadata_invalid'] = 'IdP XMLが有効ではありません。';
$string['idpmetadata_noentityid'] = 'IdP XMLにエンティティIDがありません。';
$string['idpmetadatarefresh'] = 'IdPメタデータリフレッシュ';
$string['idpmetadatarefresh_help'] = 'IdPメタデータURLからIdPメタデータを更新するためのスケジュールタスクを実行します。';
$string['idpname'] = 'IdPラベルオーバーライド';
$string['idpname_help'] = '例) myUNI - これはメタデータから検出されて同時ログインページに表示されます (有効な場合)。';
$string['idpnamedefault'] = 'SAML2でログインする';
$string['idpnamedefault_varaible'] = 'SAML2 ({$a}) でログインする';
$string['localityname'] = '所在地';
$string['locked'] = 'ロック済み';
$string['logdir'] = 'ログディレクトリ';
$string['logdir_help'] = 'SSPHPが書き込むログディレクトリです。ファイル名はsimplesamlphp.logになります。';
$string['logdirdefault'] = '/tmp/';
$string['logtofile'] = 'ファイルへのロギングを有効にする';
$string['logtofile_help'] = 'この設定を有効にした場合、logdirにあるファイルにSSPHPのログ出力がリダイレクトされます。';
$string['manageidpsheading'] = '利用可能なIDプロバイダ (IdP) を管理する';
$string['mdlattr'] = 'Moodleマッピング';
$string['mdlattr_help'] = 'どのMoodleユーザフィールドにIdP属性を合致させるべきですか?';
$string['metadatafetchfailed'] = 'メタデータ取得失敗: {$a}';
$string['metadatafetchfailedstatus'] = 'メタデータ取得失敗: ステータスコード {$a}';
$string['metadatafetchfailedunknown'] = 'メタデータ取得失敗: 不明なcURLエラー';
$string['multiidp:label:active'] = 'アクティブ';
$string['multiidp:label:admin'] = '管理ユーザのみ';
$string['multiidp:label:admin_help'] = 'このIdPを使用してログインしたユーザは自動的にサイト管理者になります。';
$string['multiidp:label:alias'] = 'エイリアス';
$string['multiidp:label:defaultidp'] = 'デフォルトIdP';
$string['multiidp:label:displayname'] = '表示名';
$string['multiidp:label:whitelist'] = 'リダイレクトIPアドレス';
$string['multiidp:label:whitelist_help'] = 'この設定を有効にした場合、クライアントをこのIdPに強制的に誘導します。フォーマットは次のとおりです: xxx.xxx.xxx.xxx/bitmask
複数のサブネットは改行で区切ってください。';
$string['multiidpbuttons'] = 'アイコン付きボタン';
$string['multiidpdisplay'] = '複数IdP表示タイプ';
$string['multiidpdisplay_help'] = 'IdPメタデータxmlに複数のIdPエンティティが含まれる場合、利用可能なIdPをどのように表示しますか?';
$string['multiidpdropdown'] = 'ドロップダウンリスト';
$string['multiidpinfo'] = '<ul>
<li>IdPはActiveに設定されている場合のみ使用できる</li>
<li>同時ログインを有効にした場合、すべてのアクティブなIdPがログインページに表示されます。</li>
<li>IdPがデフォルトに設定されて同時ログインが有効にされていない場合、/login/index.phpに?multiidp=onまたはsaml=offが渡されない限り、自動的にこのIdPが使用されます。</li>
<li>IdPにエイリアスを渡せます。/login/index.php?idpalias={alias}にアクセスした場合、エイリアスを渡して直接そのIdPを使用できます。</li>
</ul>';
$string['nameidasattrib'] = 'NameIDを属性として公開する';
$string['nameidasattrib_help'] = 'NameID要求はnameidという属性としてSSPHPに公開されます。';
$string['nameidpolicy'] = 'NameIDポリシー';
$string['nameidpolicy_help'] = 'NameIDのポリシーです。';
$string['noattribute'] = 'あなたは正常にログインしましたが、Moodleのアカウントに関連付けるためのあなたの「 {$a} 」属性が見つかりませんでした。';
$string['noidpfound'] = '設定済みIdPとしてIdP「 {$a} 」が見つかりませんでした。';
$string['nouser'] = 'あなたは「 {$a} 」として正常にログインしましたが、Moodleにアカウントがありません。';
$string['nullprivatecert'] = '秘密証明書の作成に失敗しました。';
$string['nullpubliccert'] = '公開証明書の作成に失敗しました。';
$string['organizationalunitname'] = '組織単位';
$string['organizationname'] = '組織';
$string['passivemode'] = 'パッシブモード';
$string['phone1'] = '電話';
$string['phone2'] = '携帯電話';
$string['plugindisabled'] = 'SAML2認証プラグインは無効にされています。';
$string['pluginname'] = 'SAML2';
$string['privacy:no_data_reason'] = 'SAML2認証プラグインはいかなる個人データも保存しません。';
$string['privatekeypass'] = '秘密証明書鍵パスワード';
$string['privatekeypass_help'] = 'これはローカルMoodle証明書に署名するために使用されます。これを変更した場合、現在の証明書が無効になります。';
$string['regenerate_submit'] = '再生成';
$string['regenerateheader'] = '秘密鍵および証明書を再生成する';
$string['regenerateheading'] = '秘密鍵および証明書を再生成する';
$string['regeneratepath'] = '証明書パス: {$a}';
$string['regeneratesuccess'] = '秘密鍵および証明書が正常に再生成されました。';
$string['regeneratewarning'] = '警告! 新しい証明書を生成した場合、現在の証明書が上書きされるため、あなたのIDPの更新が必要な場合があります。';
$string['rememberidp'] = 'ログインサービスを記憶する';
$string['required'] = 'このフィールドは必須です。';
$string['requireint'] = 'このフィールドは必須です。また、正の整数である必要があります。';
$string['selectloginservice'] = 'ログインサービスを選択する';
$string['sha1'] = 'Legacy SHA1 (危険)';
$string['sha256'] = 'SHA256';
$string['sha384'] = 'SHA384';
$string['sha512'] = 'SHA512';
$string['showidplink'] = 'IdPリンクを表示する';
$string['showidplink_help'] = 'これによりサイト設定時にIdPリンクが表示されます。';
$string['signaturealgorithm'] = '署名アルゴリズム';
$string['signaturealgorithm_help'] = 'これはSAMLリクエストに署名するために使用されるアルゴリズムです。警告: SHA1アルゴリズムは下位互換のためにのみ提供されています。絶対に使用しなければならない場合を除き、これを避けて代わりに少なくともSHA256の使用をお勧めします。';
$string['source'] = 'ソース: {$a}';
$string['spentityid'] = 'エンティティID';
$string['spentityid_help'] = 'サービスプロバイダのエンティティIDをオーバーライドします。ほとんどの場合、空白のままにすることにより代わりに適切なデフォルトが使用されます。';
$string['spmetadata'] = 'SPメタデータ';
$string['spmetadata_help'] = '<a href=\'{$a}\'>サービスプロバイダメタデータを表示する</a> | <a href=\'{$a}?download=1\'>SPメタデータをダウンロードする</a><p>あなたをホワイトリストに登録するためにIdP管理者にこれを渡す必要がある場合があります。</p>';
$string['spmetadatasign'] = 'SPメタデータ署名';
$string['spmetadatasign_help'] = 'SPメタデータに署名します。';
$string['sspversion'] = 'SimpleSAMLphpバージョン';
$string['stateorprovincename'] = '都道府県';
$string['status'] = 'ステータス';
$string['suspendeduser'] = 'あなたは「 {$a} 」として正常にログインしましたが、あなたのアカウントはMoodleで一時停止されています。';
$string['taskmetadatarefresh'] = 'メタデータリフレッシュタスク';
$string['test_auth_button_login'] = 'IdPログイン';
$string['test_auth_button_logout'] = 'IdPログアウト';
$string['test_auth_str'] = 'isAuthenticatedおよびログインのテスト';
$string['test_noticetestrequirements'] = 'このテストを使用するにはプラグインを設定および有効にした上でプラグイン設定でデバッグモードを有効にする必要があります。';
$string['test_passive_str'] = 'isPassiveを使用してテストする';
$string['testdebuggingdisabled'] = 'このテストページを使用するにはSAMLデバッグを有効にする必要があります。';
$string['tolower'] = '大文字小文字の区別';
$string['tolower:caseandaccentinsensitive'] = '大文字小文字およびアクセントを区別しない';
$string['tolower:caseinsensitive'] = '大文字小文字を区別しない';
$string['tolower:exact'] = '厳密';
$string['tolower:lowercase'] = '小文字';
$string['tolower_help'] = '<p>厳密: 照合時に大文字小文字を区別します (デフォルト)。</p>
<p>小文字: 照合前にIdP属性に小文字を適用します。</p>
<p>大文字小文字を区別しない: 照合時に大文字小文字を区別しません。</p>';
$string['unlocked'] = 'ロック解除済み';
$string['unlockedifempty'] = '空白の場合、ロック解除済みにする';
$string['update_never'] = 'なし';
$string['update_oncreate'] = '作成時';
$string['update_onlogin'] = '毎回ログイン時';
$string['update_onupdate'] = 'アップデート時';
$string['wantassertionssigned'] = 'アサーションの署名を必要とする';
$string['wantassertionssigned_help'] = 'このSPが受信するアサーションに署名が必要であるかどうか決定します。';
$string['wrongauth'] = 'あなたは「 {$a} 」として正常にログインしましたが、Moodleへのアクセスは許可されていません。';
