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
 * Strings for component 'customcert', language 'ja', version '4.1'.
 *
 * @package     customcert
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activity'] = '活動';
$string['addcertpage'] = 'ページを追加する';
$string['addelement'] = 'エレメントを追加する';
$string['aligncenter'] = '中央揃え';
$string['alignleft'] = '左寄せ';
$string['alignment'] = '配置';
$string['alignment_help'] = '本プロパティは要素の水平方向の配置を設定します。これをサポートしていない要素があります。また他の要素と動作が異なる場合もあります。';
$string['alignright'] = '右寄せ';
$string['awardedto'] = '授与対象';
$string['cannotverifyallcertificates'] = 'あなたにはサイトのすべての証明書を確認するパーミッションがありません。';
$string['certificate'] = '証明書';
$string['code'] = 'コード';
$string['copy'] = 'コピー';
$string['coursetimereq'] = 'コース要求時間 (分)';
$string['coursetimereq_help'] = '学生が証明書を受理できるまでにコース内にログインしている必要のある合計時間 (分) を入力してください。';
$string['createtemplate'] = 'テンプレートを作成する';
$string['customcert:addinstance'] = '新しいカスタム証明書インスタンスを追加する';
$string['customcert:manage'] = 'カスタム証明書を管理する';
$string['customcert:manageemailothers'] = '他の人にメールする設定を管理する';
$string['customcert:manageemailstudents'] = '学生にメールする設定を管理する';
$string['customcert:manageemailteachers'] = '教師にメールする設定を管理する';
$string['customcert:manageprotection'] = '保護設定を管理する';
$string['customcert:managerequiredtime'] = '要求時間設定を管理する';
$string['customcert:manageverifyany'] = '確認設定を管理する';
$string['customcert:receiveissue'] = '証明書を受理する';
$string['customcert:verifyallcertificates'] = 'サイトのすべての証明書を確認する';
$string['customcert:verifycertificate'] = '証明書を確認する';
$string['customcert:view'] = 'カスタム証明書を表示する';
$string['customcert:viewallcertificates'] = 'すべての証明書を表示する';
$string['customcert:viewreport'] = 'コースレポートを表示する';
$string['customcertsettings'] = 'カスタム証明書設定';
$string['deletecertpage'] = 'ページを削除する';
$string['deleteconfirm'] = '確認を削除する';
$string['deleteelement'] = 'エレメントを削除する';
$string['deleteelementconfirm'] = '本当にこのエレメントを削除してもよろしいですか?';
$string['deleteissueconfirm'] = '本当にこの証明書発行を削除してもよろしいですか?';
$string['deleteissuedcertificates'] = '発行済み証明書を削除する';
$string['deletepageconfirm'] = '本当にこの証明書ページを削除してもよろしいですか?';
$string['deletetemplateconfirm'] = '本当にこの証明書テンプレートを削除してもよろしいですか?';
$string['deliveryoptiondownload'] = 'ブラウザに送信してファイルを強制的にダウンロードする';
$string['deliveryoptioninline'] = 'ブラウザにインラインでファイルを送信する';
$string['deliveryoptions'] = '配送オプション';
$string['description'] = '説明';
$string['duplicate'] = '複製';
$string['duplicateconfirm'] = '複製確認';
$string['duplicatetemplateconfirm'] = '本当にこの証明書テンプレートを複製してもよろしいですか?';
$string['editcustomcert'] = '証明書を編集する';
$string['editelement'] = 'エレメントを編集する';
$string['edittemplate'] = 'テンプレートを編集する';
$string['elementname'] = 'エレメント名';
$string['elementname_help'] = 'これは証明書の編集時にこのエレメントを識別するため使用される名称です。メモ: これはPDFに表示されません。';
$string['elementplugins'] = 'エレメントプラグイン';
$string['elements'] = 'エレメント';
$string['elements_help'] = 'これは証明書に表示されるエレメントの一覧です。

注意: エレメントはこの順序で表示されます。順番はそれぞれのエレメントの隣にある矢印を使って変更できます。';
$string['elementwidth'] = '幅';
$string['elementwidth_help'] = 'エレメントの幅を指定してください - 「0」は幅に制限がないことを意味します。';
$string['emailnonstudentbody'] = '添付はコース「 {$a->coursefullname} 」における「 {$a->userfullname} 」の証明書「 {$a->certificatename} 」です。';
$string['emailnonstudentbodyplaintext'] = '添付はコース「 {$a->coursefullname} 」における「 {$a->userfullname} 」の証明書「 {$a->certificatename} 」です。';
$string['emailnonstudentcertificatelinktext'] = '証明書レポートを表示する';
$string['emailnonstudentgreeting'] = 'こんにちは';
$string['emailnonstudentsubject'] = '{$a->coursefullname}: {$a->certificatename}';
$string['emailothers'] = '他の人にメールする';
$string['emailothers_help'] = 'この設定を有効にした場合、ここで入力されたメールアドレス (カンマ区切り) 宛に証明書の利用可能時に証明書のコピーをメール送信します。<strong>警告:</strong> あなたが証明書作成完了前にこのフィールドを設定した場合、宛先に不完全な証明書がメール送信されてしまいます。';
$string['emailstudentbody'] = '添付はコース「 {$a->coursefullname} 」におけるあなたの証明書「 {$a->certificatename} 」です。';
$string['emailstudentbodyplaintext'] = '添付はコース「 {$a->coursefullname} 」におけるあなたの証明書「 {$a->certificatename} 」です。';
$string['emailstudentcertificatelinktext'] = '証明書を表示する';
$string['emailstudentgreeting'] = '{$a} さん';
$string['emailstudents'] = '学生にメールする';
$string['emailstudents_help'] = 'この設定を有効にした場合、証明書の利用可能時に証明書のコピーを学生にメール送信します。<strong>警告:</strong> あなたが証明書作成完了前にこの設定を有効にした場合、学生に不完全な証明書がメール送信されてしまいます。';
$string['emailstudentsubject'] = '{$a->coursefullname}: {$a->certificatename}';
$string['emailteachers'] = '教師にメールする';
$string['emailteachers_help'] = 'この設定を有効にした場合、証明書の利用可能時に証明書のコピーを教師にメール送信します。<strong>警告:</strong> あなたが証明書作成完了前にこの設定を有効にした場合、教師に不完全な証明書がメール送信されてしまいます。';
$string['exampledatawarning'] = 'これらの値のいくつかはエレメントのポジションが可能かどうか確認するための例にできます。';
$string['font'] = 'フォント';
$string['font_help'] = 'このエレメントの作成時に使用されるフォントです。';
$string['fontcolour'] = '色';
$string['fontcolour_help'] = 'フォントの色です。';
$string['fontsize'] = 'サイズ';
$string['fontsize_help'] = 'フォントのサイズ (ポイント) です。';
$string['getcustomcert'] = '証明書を表示する';
$string['gradeoutcome'] = 'アウトカム';
$string['height'] = '高さ';
$string['height_help'] = 'これは証明書PDFの高さ (mm) です。ご参考までにA4サイズは高さ297mm、レターサイズは高さ279mmです。';
$string['invalidcode'] = '無効なコードが提供されました。';
$string['invalidcolour'] = '無効な色が選択されました。有効なHTMLカラー名、6桁または3桁の16進数カラーコードを入力してください。';
$string['invalidheight'] = '高さはゼロを除く有効数字にしてください。';
$string['invalidmargin'] = '余白はゼロを除く有効数字にしてください。';
$string['invalidposition'] = 'ポジション {$a} には正数を選択してください。';
$string['invalidwidth'] = '幅はゼロを除く有効数字にしてください。';
$string['landscape'] = 'ランドスケープ';
$string['leftmargin'] = '左余白';
$string['leftmargin_help'] = 'これは証明書PDFの左余白 (mm) です。';
$string['listofissues'] = '受理者: {$a}';
$string['load'] = '読み込む';
$string['loadtemplate'] = 'テンプレートを読み込む';
$string['loadtemplatemsg'] = '本当にこのテンプレートを読み込んでもよろしいですか? これによりこの証明書の既存のページおよびエレメントすべてが削除されます。';
$string['managetemplates'] = 'テンプレートを管理する';
$string['managetemplatesdesc'] = 'このリンクによりあなたがコースのカスタム証明書活動で使用されるテンプレートを管理できる新しい画面に移動します。';
$string['modify'] = '修正';
$string['modulename'] = 'カスタム証明書';
$string['modulename_help'] = 'このモジュールではPDF証明書を動的に生成できます。';
$string['modulename_link'] = 'Custom_certificate_module';
$string['modulenameplural'] = 'カスタム証明書';
$string['mycertificates'] = '私の証明書';
$string['mycertificatesdescription'] = 'これらはメールまたは手動ダウンロードにより、あなたに発行された証明書です。';
$string['name'] = '名称';
$string['nametoolong'] = 'あなたは名称に許可される最大長を超過しました。';
$string['nocustomcerts'] = 'このコースに証明書はありません。';
$string['noimage'] = 'イメージなし';
$string['norecipients'] = '受理者なし';
$string['notemplates'] = 'テンプレートなし';
$string['notissued'] = '授与なし';
$string['notverified'] = '未検証';
$string['options'] = 'オプション';
$string['page'] = 'ページ {$a}';
$string['pluginadministration'] = 'カスタム証明書管理';
$string['pluginname'] = 'カスタム証明書';
$string['portrait'] = 'ポートレイト';
$string['posx'] = 'ポジション X';
$string['posx_help'] = 'これはあなたがエレメントの基準点を置きたい最上部左端からのX方向のポジション (mm) です。';
$string['posy'] = 'ポジション Y';
$string['posy_help'] = 'これはあなたがエレメントの基準点を置きたい最上部左端からのY方向のポジション (mm) です。';
$string['preventcopy'] = 'コピーを防ぐ';
$string['preventcopy_desc'] = 'コピー操作の保護を有効にします。';
$string['preventmodify'] = '修正を防ぐ';
$string['preventmodify_desc'] = '修正操作の保護を有効にします。';
$string['preventprint'] = '印刷を防ぐ';
$string['preventprint_desc'] = '印刷操作の保護を有効にします。';
$string['print'] = '印刷';
$string['privacy:metadata:customcert_issues'] = '発行済み証明書の一覧です。';
$string['privacy:metadata:customcert_issues:code'] = '証明書に属するコードです。';
$string['privacy:metadata:customcert_issues:customcertid'] = '証明書のIDです。';
$string['privacy:metadata:customcert_issues:emailed'] = '証明書がメール送信されたかどうか示します。';
$string['privacy:metadata:customcert_issues:timecreated'] = '証明書の発行日時です。';
$string['privacy:metadata:customcert_issues:userid'] = '証明書を発行したユーザのIDです。';
$string['rearrangeelements'] = 'エレメントを再配置する';
$string['rearrangeelementsheading'] = 'エレメントの証明書でのポジションを変更したい場合、ドラッグ＆ドロップしてください。';
$string['receiveddate'] = '授与日';
$string['refpoint'] = '設置場所の基準点';
$string['refpoint_help'] = 'エレメントの設置場所の基準点はXおよびYの座標により決定されます。これはエレメントの中央または端に表示される「+」により示されます。';
$string['replacetemplate'] = '置換';
$string['requiredtimenotmet'] = 'あなたがこの証明書にアクセスできるようになるにはこのコースに少なくとも {$a->requiredtime} 分滞在する必要があります。';
$string['rightmargin'] = '右余白';
$string['rightmargin_help'] = 'これは証明書PDFの右余白 (mm) です。';
$string['save'] = '保存';
$string['saveandclose'] = '保存して閉じる';
$string['saveandcontinue'] = '保存して続ける';
$string['savechangespreview'] = '保存してプレビューする';
$string['savetemplate'] = 'テンプレートを保存する';
$string['search:activity'] = 'カスタム証明書 - 活動情報';
$string['setprotection'] = '保護設定';
$string['setprotection_help'] = 'あなたがこの証明書でユーザによる実行を防ぎたい操作を選択してください。';
$string['showposxy'] = 'ポジション X および Y を表示する';
$string['showposxy_desc'] = 'これはエレメントの編集時にユーザが設置場所を正確に指定できるようXおよびYポジションを表示します。

あなたが設置場所を指定する目的で主にドラッグ＆ドロップを使用する場合、これは必要ではありません。';
$string['taskemailcertificate'] = '証明書のメール送信を処理します。';
$string['templatename'] = 'テンプレート名';
$string['templatenameexists'] = 'このテンプレート名は現在使用されています。別のテンプレート名を選択してください。';
$string['topcenter'] = '中央';
$string['topleft'] = '最上部左';
$string['topright'] = '最上部右';
$string['type'] = 'タイプ';
$string['uploadimage'] = 'イメージをアップロードする';
$string['uploadimagedesc'] = 'このリンクによりあなたがイメージをアップロードできる新しい画面に移動します。この方法でアップロードされたイメージは証明書を作成できるすべてのユーザがあなたのサイト全体で利用できます。';
$string['verified'] = '確認済み';
$string['verify'] = '確認する';
$string['verifyallcertificates'] = 'すべての証明書の確認を許可する';
$string['verifyallcertificates_desc'] = 'この設定により誰でも (未ログインのユーザを含む) それぞれの証明書の確認リンクにアクセスせずにリンク「 {$a} 」をクリックしてサイトの証明書すべてを確認できます。

注意 - これはカスタム証明書設定で「誰でも証明書を確認できる」が有効にされた場合のみ適用されます。';
$string['verifycertificate'] = '証明書を確認する';
$string['verifycertificateanyone'] = '誰でも証明書を確認できる';
$string['verifycertificateanyone_help'] = 'この設定により誰でも (未ログインのユーザを含む) 証明書確認リンクで証明書を確認できます。';
$string['verifycertificatedesc'] = 'このリンクによりあなたがサイトの証明書を確認できる新しい画面に移動します。';
$string['width'] = '幅';
$string['width_help'] = 'これは証明書PDFの幅  (mm) です。ご参考までにA4サイズは幅210mm、レターサイズは幅216mmです。';
