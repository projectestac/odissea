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
 * Strings for component 'tool_dataprivacy', language 'ja', branch 'MOODLE_34_STABLE'
 *
 * @package   tool_dataprivacy
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitiesandresources'] = '活動およびリソース';
$string['addcategory'] = 'カテゴリを追加する';
$string['addpurpose'] = '目的を追加する';
$string['approve'] = '承認';
$string['approverequest'] = 'リクエストを承認する';
$string['cachedef_contextlevel'] = 'コンテクストレベルの目的およびカテゴリ';
$string['cachedef_purpose'] = 'データ目的';
$string['cancelrequest'] = 'キャンセルリクエスト';
$string['cancelrequestconfirmation'] = '本当にこのデータリクエストをキャンセルしてもよろしいですか?';
$string['categories'] = 'カテゴリ';
$string['categorieslist'] = 'データカテゴリ一覧';
$string['category'] = 'カテゴリ';
$string['categorycreated'] = 'カテゴリが作成されました。';
$string['categorydefault'] = 'デフォルトカテゴリ';
$string['categorydefault_help'] = 'デフォルトカテゴリは新しいインスタンスすべてに適用されるデータカテゴリです。継承が選択された場合、高いコンテクストからデータカテゴリが適用されます。コンテクストは次のとおりです (低いものから高いものへ): ブロック > 活動モジュール > コース > コースカテゴリ > ユーザ > サイト';
$string['category_help'] = 'データレジストリのカテゴリはデータのタイプを記述します。新しいカテゴリが追加された場合、または承継が選択された場合、高いコンテクストからデータカテゴリが適用されます。コンテクストは次のとおりです (低いものから高いものへ): ブロック > 活動モジュール > コース > コースカテゴリ > ユーザ > サイト';
$string['categoryupdated'] = 'カテゴリが更新されました。';
$string['close'] = '閉じる';
$string['compliant'] = '準拠';
$string['confirmapproval'] = '本当にこのデータリクエストを承認してもよろしいですか?';
$string['confirmcontextdeletion'] = '本当に選択したコンテクストを削除してもよろしいですか? これにより関連するサブコンテクストのすべてのユーザデータも削除されます。';
$string['confirmdenial'] = '本当にこのデータリクエストを削除してもよろしいですか?';
$string['contactdataprotectionofficer'] = 'データ保護官に連絡する';
$string['contactdataprotectionofficer_desc'] = 'この設定を有効にすることによりユーザはデータ保護官に連絡して自分のプロファイルページのリンクからデータをリクエストすることができます。';
$string['contactdpoviaprivacypolicy'] = 'プライバシーポリシーに記載されているデータ保護官にご連絡ください。';
$string['contextlevelname10'] = 'サイト';
$string['contextlevelname30'] = 'ユーザ';
$string['contextlevelname40'] = 'コースカテゴリ';
$string['contextlevelname50'] = 'コース';
$string['contextlevelname70'] = '活動モジュール';
$string['contextlevelname80'] = 'ブロック';
$string['contextpurposecategorysaved'] = '目的およびカテゴリが保存されました。';
$string['createcategory'] = 'データカテゴリを作成する';
$string['createpurpose'] = 'データ目的を作成する';
$string['datadeletion'] = 'データ削除';
$string['datadeletionpagehelp'] = 'ここで一覧表示されているとおり保持期間の有効期限が切れました。データの削除を確認および承認してください。「有効期限切れコンテクストを削除する」スケジュールタスクで削除されます。';
$string['dataprivacy:makedatarequestsforchildren'] = '未成年のデータリクエストを作成する';
$string['dataprivacy:managedataregistry'] = 'データレジストリを管理する';
$string['dataprivacy:managedatarequests'] = 'データリクエストを管理する';
$string['dataregistry'] = 'データレジストリ';
$string['dataregistryinfo'] = 'データレジストリによりカテゴリ (データのタイプ) および目的 (データを処理する目的) をサイトすべてのコンテンツに設定することができます - ユーザおよびコースから活動およびブロックまで。それぞれの目的には保持期間を設定することができます。保持期間の有効期限が切れた場合、データはフラグ付けされて削除リストに追加された後、管理者による承認を待ちます。';
$string['datarequestcreatedforuser'] = '{$a} のデータリクエストが作成されました。';
$string['datarequestemailsubject'] = 'データリクエスト: {$a}';
$string['datarequests'] = 'データリクエスト';
$string['daterequested'] = 'データリクエスト';
$string['daterequesteddetail'] = 'データリクエスト:';
$string['defaultsinfo'] = 'デフォルトカテゴリおよび目的はすべての新しく作成されるインスタンスに適用されます。';
$string['defaultssaved'] = 'デフォルトが保存されました。';
$string['deletecategory'] = '「 {$a} 」カテゴリを削除する';
$string['deletecategorytext'] = '本当に「 {$a} 」カテゴリを削除してもよろしいですか?';
$string['deleteexpiredcontextstask'] = '有効期限切れコンテクストを削除する';
$string['deletepurpose'] = '「 {$a} 目的を削除する';
$string['deletepurposetext'] = '本当に「 {$a} 」目的を削除してもよろしいですか?';
$string['deny'] = '拒否';
$string['denyrequest'] = 'リクエストを拒否する';
$string['download'] = 'ダウンロード';
$string['dporolemapping'] = 'データ保護官ロールマッピング';
$string['dporolemapping_desc'] = 'データ保護官はデータリクエストを管理することができます。データ保護官ロールマッピングオプションとして一覧表示されるためにはケイパビリティ「tool/dataprivacy:managedatarequests」が許可される必要があります。';
$string['editcategories'] = 'カテゴリを編集する';
$string['editcategory'] = 'カテゴリを編集する';
$string['editpurpose'] = '目的を編集する';
$string['editpurposes'] = '目的を編集する';
$string['effectiveretentionperiodcourse'] = '{$a} (コース終了日後)';
$string['effectiveretentionperioduser'] = '{$a} (最後にユーザがサイトにアクセスして以来)';
$string['emailsalutation'] = '{$a} さん';
$string['errorcontexthasunexpiredchildren'] = 'コンテクスト「 {$a} 」にはまだ有効期限切れではないサブコンテクストがあります。コンテクストには削除フラグが付けられませんでした。';
$string['errorinvalidrequeststatus'] = '無効なリクエストステータスです!';
$string['errorinvalidrequesttype'] = '無効なリクエストタイプです!';
$string['errornocapabilitytorequestforothers'] = 'ユーザ {$a->requestedby} にはユーザ {$a->userid} の代理でデータをリクエストするケイパビリティがありません。';
$string['errornoexpiredcontexts'] = '処理する有効期限切れコンテクストはありません。';
$string['errorrequestalreadyexists'] = 'あなたにはすでに進行中のリクエストがあります。';
$string['errorrequestnotfound'] = 'リクエストが見つかりませんでした。';
$string['errorrequestnotwaitingforapproval'] = 'リクエストは承認待ちではありません。まだ準備未了または処理済みでもありません。';
$string['errorsendingmessagetodpo'] = '{$a} へのメッセージ送信中にエラーが発生しました。';
$string['exceptionnotificationbody'] = '<p><b>{$a->fullmethodname}</b>の呼び出し中に例外が発生しました。<br />これはプラグイン<b>{$a->component}</b>がデータ処理を終えていないことを意味します。以下、あなたがプラグイン開発者に渡すことのできる例外情報です。</p><pre>{$a->message}<br />

{$a->backtrace}</pre>';
$string['exceptionnotificationsubject'] = 'プライバシーデータの処理中に例外が発生しました。';
$string['expandplugin'] = 'プラグインを展開および折り畳みます。';
$string['expandplugintype'] = 'プラグインタイプを展開および折り畳みます。';
$string['expiredretentionperiodtask'] = '有効期限切れ保存期間';
$string['expiry'] = '期限切れ';
$string['explanationtitle'] = 'このページで使用されているアイコンおよびその意味です。';
$string['external'] = '追加';
$string['externalexplanation'] = 'このサイトにインストールされている追加プラグインです。';
$string['frontpagecourse'] = 'フロントページコース';
$string['gdpr_art_6_1_a_description'] = 'データ主体は1つまたはそれ以上の目的で彼または彼女の個人データを処理することに同意しています。';
$string['gdpr_art_6_1_a_name'] = '同意 (GDPR Art. 6.1(a))';
$string['gdpr_art_6_1_b_description'] = 'データ主体が関係する契約を履行する場合、または契約前のデータのリクエストの対策を講じる場合に処理が必要です。';
$string['gdpr_art_6_1_b_name'] = '契約 (GDPR Art. 6.1(b))';
$string['gdpr_art_6_1_c_description'] = '管理者が主体である場合の法的義務を順守するため処理が必要です。';
$string['gdpr_art_6_1_c_name'] = '法的義務 (GDPR Art 6.1(c))';
$string['gdpr_art_6_1_d_description'] = 'データ主体または別の自然人の重大利益を保護するため処理が必要です。';
$string['gdpr_art_6_1_d_name'] = '重大利益 (GDPR Art. 6.1(d)';
$string['gdpr_art_6_1_e_description'] = '公益のために遂行されるタスクの実施または管理者に帰属する職権の行使のため処理が必要です。';
$string['gdpr_art_6_1_e_name'] = 'パブリックタスク (GDPR Art. 6.1(e))';
$string['gdpr_art_6_1_f_description'] = '特にデータ主体が子供の場合のように保護が必要なデータ主体の利益または基本的権利および自由により優先される利益を除き管理者またはサードパーティにより追及される正当な利益の目的のため処理が必要です。';
$string['gdpr_art_6_1_f_name'] = '正当な利益 (GDPR Art. 6.1(f))';
$string['gdpr_art_9_2_a_description'] = '連合または加盟国法が提供するGDPR第9条第1項で言及されるデータ主体により解除されない禁止を除き1つまたはそれ以上の指定された目的のためデータ主体はこれらの個人データ処理のため明確に同意しています。';
$string['gdpr_art_9_2_a_name'] = '明確な同意 (GDPR Art. 9.2(a))';
$string['gdpr_art_9_2_b_description'] = '連合または加盟国法または加盟国法に従ったデータ主体の基本的権利および利益のための適切な保護条項を提供する団体協定によって公認される限りにおいて雇用および社会保障および社会保護法の分野で管理者またはデータ主体の義務および特定の権利を行使する目的として処理が必要です。';
$string['gdpr_art_9_2_b_name'] = '雇用および社会保障/保護法 (GDPR Art. 9.2(b))';
$string['gdpr_art_9_2_c_description'] = 'データ主体が物理的または合法的に同意できない場合、データ主体または別の自然人の重大利益を保護するため処理が必要です。';
$string['gdpr_art_9_2_c_name'] = '重大利益の保護 (GDPR Art. 9.2(c))';
$string['gdpr_art_9_2_d_description'] = '政治的、哲学的、宗教的な財団法人、協会またはその他非営利団体、またはメンバーまたは組織の前のメンバーまたはその目的により定期的に接触のある人の関連のみ処理して個人データはデータ主体の同意なしに外部に公開されないことを目標および条件とした労働組織による適切な保護条項のある合法的活動の過程で処理が実行されます。';
$string['gdpr_art_9_2_d_name'] = '財団法人、協会、その他非営利団体のメンバー/関係者に関する合法的な活動 (GDPR Art. 9.2(d))';
$string['gdpr_art_9_2_e_description'] = 'データ主体により明白に公開された個人データに関する処理';
$string['gdpr_art_9_2_e_name'] = 'データ主体により公開されたデータ (GDPR Art. 9.2(e))';
$string['gdpr_art_9_2_f_description'] = '法的要求の制定、行使または弁護または裁判所が司法上の権限に基づき行動する場合に処理が必要です。';
$string['gdpr_art_9_2_f_name'] = '法的要求および裁判所の介入 (GDPR Art. 9.2(f))';
$string['gdpr_art_9_2_g_description'] = '目的の追求、データ保護のための権利の本質の配慮、基本的人権およびデータ主体の利益の保護のための適切および具体的な方策の提供を比例させる連合または加盟国法に基づき実体のある公益の根拠のため処理が必要です。';
$string['gdpr_art_9_2_g_name'] = '実体公益 (GDPR Art. 9.2(g))';
$string['gdpr_art_9_2_h_description'] = '予防の目的または職業病医薬、雇用者の職業能力、医療診断、健康管理、社会医療、健康治療、連合または加盟国法が提供するGDPR第9条第3項で言及される条件および保護条項に基づく医療関係者および対象者との契約による健康管理または社会医療システムおよびサービスのため処理が必要です。';
$string['gdpr_art_9_2_h_name'] = '医療目的 (GDPR Art. 9.2(h))';
$string['gdpr_art_9_2_i_description'] = '国境を越えた健康に対する脅威からの保護、健康管理および医薬品または医療機器の品質および安全性の高度な基準の保証のような公衆衛生の領域の公益、特に専門的秘密厳守のような連合または加盟国法に基づくデータ主体の権利および自由の保護のための適切および具体的な方策の提供の目的ため処理が必要です。';
$string['gdpr_art_9_2_i_name'] = '公衆衛生 (GDPR Art. 9.2(i))';
$string['gdpr_art_9_2_j_description'] = '目的の追求、データ保護のための権利の本質の配慮、基本的人権およびデータ主体の利益の保護のための適切および具体的な方策を提供を比例させる連合または加盟国法に基づいた第89条(1)に従った公益、科学的または歴史的調査または統計的目的における保管のため処理が必要です。';
$string['gdpr_art_9_2_j_name'] = '公益または科学的/歴史的/統計的調査 (GDPR Art. 9.2(j))';
$string['hide'] = 'すべてを折り畳む';
$string['httpwarning'] = 'このサイトからダウンロードされるデータは暗号化されていないかもしれません。あなたのシステム管理者に連絡してサイトへのSSLのインストールを依頼してください。';
$string['inherit'] = '継承';
$string['lawfulbases'] = '法的根拠';
$string['lawfulbases_help'] = '個人データを処理するための法的根拠として提供するため少なくとも1つのオプションを選択してください。これらの法的根拠の詳細は<a href="https://gdpr-info.eu/art-6-gdpr/" target="_blank">GDPR Art. 6.1</a>をご覧ください。';
$string['message'] = 'メッセージ';
$string['messagelabel'] = 'メッセージ:';
$string['messageprovider:contactdataprotectionofficer'] = 'データリクエスト';
$string['messageprovider:datarequestprocessingresults'] = 'データリクエスト処理結果';
$string['messageprovider:notifyexceptions'] = 'データリクエストの例外通知です。';
$string['moduleinstancename'] = '{$a->instancename} ({$a->modulename})';
$string['mypersonaldatarequests'] = '私の個人データリクエスト';
$string['nameandparent'] = '{$a->parent} / {$a->name}';
$string['nameemail'] = '{$a->name} ({$a->email})';
$string['nchildren'] = '{$a} 子';
$string['newrequest'] = '新しいリクエスト';
$string['noactivitiestoload'] = '活動なし';
$string['noassignedroles'] = 'このコンテクストに割り当てられているロールはありません。';
$string['noblockstoload'] = 'ブロックなし';
$string['nocategories'] = 'まだカテゴリーはありません。';
$string['nocoursestoload'] = '活動なし';
$string['nodatarequests'] = 'データリクエストはありません。';
$string['noexpiredcontexts'] = 'このコンテクストレベルでは保持期間の有効期限が切れたデータはありません。';
$string['nopersonaldatarequests'] = 'あなたには個人データリクエストはありません。';
$string['nopurposes'] = 'まだ目的はありません。';
$string['nosubjectaccessrequests'] = 'あなたが対応する必要のあるデータリクエストはありません。';
$string['nosystemdefaults'] = 'まだサイト目的およびカテゴリは定義されていません。';
$string['notset'] = '未設定 (デフォルト値を使用します)';
$string['pluginname'] = 'データプライバシー';
$string['pluginname_help'] = 'データプライバシープラグイン';
$string['pluginregistry'] = 'プラグインプライバシーレジストリ';
$string['pluginregistrytitle'] = 'プラグインプライバシー準拠レジストリ';
$string['privacy'] = 'プライバシー';
$string['privacy:metadata:request'] = 'このサイトのために作成された個人データリクエスト (個人情報調査および削除リクエスト) の情報です。';
$string['privacy:metadata:request:comments'] = 'リクエストに付随するすべてのユーザコメントです。';
$string['privacy:metadata:request:dpocomment'] = 'リクエストに関してサイトのデータ保護官によって作成されたすべてのコメントです。';
$string['privacy:metadata:request:requestedby'] = '別のユーザによって作成された場合のリクエストを作成したユーザのIDです。';
$string['privacy:metadata:request:timecreated'] = 'タイムスタンプはユーザによってリクエストが作成された日時を示します。';
$string['privacy:metadata:request:userid'] = 'リクエストが属するユーザのIDです。';
$string['protected'] = '保護済み';
$string['protectedlabel'] = 'このデータの保存にはユーザの忘れられるリクエストに関して上位の判例があります。このデータは保存期間の有効期限切れのみにより削除されます。';
$string['purpose'] = '目的';
$string['purposecreated'] = '目的が作成されました。';
$string['purposedefault'] = 'デフォルトの目的';
$string['purposedefault_help'] = 'デフォルトの目的は新しいインスタンスすべてに適用される目的です。継承が選択された場合、高いコンテクストから目的が適用されます。コンテクストは次のとおりです (低いものから高いものへ): ブロック > 活動モジュール > コース > コースカテゴリ > ユーザ > サイト';
$string['purpose_help'] = '目的はデータを処理する目的を記述します。新しい目的が追加された場合、または承継が選択された場合、高いコンテクストからの目的が適用されます。コンテクストは次のとおりです (低いものから高いものへ): ブロック > 活動モジュール > コース > コースカテゴリ > ユーザ > サイト';
$string['purposes'] = '目的';
$string['purposeslist'] = 'データ目的一覧';
$string['purposeupdated'] = '目的が更新されました。';
$string['replyto'] = '返信';
$string['requestactions'] = 'アクション';
$string['requestby'] = 'リクエスト元';
$string['requestcomments'] = 'コメント';
$string['requestcomments_help'] = 'あなたはこのボックスにデータリクエストのさらなる詳細を入力することができます。';
$string['requestemailintro'] = 'あなたはデータリクエストを受信しました:';
$string['requestfor'] = 'リクエスト先';
$string['requeststatus'] = 'ステータス';
$string['requestsubmitted'] = 'あなたのリクエストはサイトのデータ保護官に送信されました。';
$string['requesttype'] = 'タイプ';
$string['requesttypedelete'] = '私の個人データすべてを削除する';
$string['requesttypedeleteshort'] = '削除';
$string['requesttypeexport'] = '私の個人データすべてをエクスポートする';
$string['requesttypeexportshort'] = 'エクスポーｔ';
$string['requesttype_help'] = 'あなたがサイトのデータ保護官に連絡したい理由を選択してください。';
$string['requesttypeothers'] = '一般の問い合わせ';
$string['requesttypeothersshort'] = 'その他';
$string['requesttypeuser'] = '{$a->typename} ({$a->user})';
$string['requiresattention'] = '注意を必要とします。';
$string['requiresattentionexplanation'] = 'このプラグインにはMoodleプライバシーAPIは実装されません。このプラグインが個人データを保存した場合、Moodleのプライバシーシステムを通して個人データをエクスポートまたは削除することはできません。';
$string['resultdeleted'] = 'あなたは最近 {$a} のあなたのアカウントおよび個人データを削除するようリクエストしました。この手続きが完了したため、あなたはログインできないようになりました。';
$string['resultdownloadready'] = 'あなたが最近リクエストした {$a} のあなたの個人データのコピーをダウンロードできるようになりました。ダウンロードページに移動するには以下のリンクをクリックしてください。';
$string['retentionperiod'] = '保存期間';
$string['retentionperiod_help'] = '保持期間ではデータを保持する時間の長さを指定します。保持期間の有効期限が切れた場合、データはフラグ付けされて削除リストに追加された後、管理者による承認を待ちます。';
$string['retentionperiodnotdefined'] = '保存期間は定義されていません。';
$string['retentionperiodzero'] = '保存期間なし';
$string['reviewdata'] = 'データをレビューする';
$string['send'] = '送信';
$string['sensitivedatareasons'] = '機密性の高い個人データ処理理由';
$string['sensitivedatareasons_help'] = 'この目的に関係する機密性の高い個人データ処理の禁止を除外するための1つまたはそれ以上の適用可能な理由を選択してください。詳細情報は<a href="https://gdpr-info.eu/art-9-gdpr/" target="_blank">GDPR Art. 9.2</a>をご覧ください。';
$string['setdefaults'] = 'デフォルトに設定する';
$string['statusapproved'] = '承認済み';
$string['statusawaitingapproval'] = '承認待ち';
$string['statuscancelled'] = 'キャンセル';
$string['statuscomplete'] = '完了';
$string['statusdetail'] = 'ステータス:';
$string['statuspending'] = '保留';
$string['statuspreprocessing'] = '前処理';
$string['statusprocessing'] = '処理';
$string['statusrejected'] = '拒否';
$string['subjectscope'] = '主題範囲';
$string['subjectscope_help'] = '主題目的はこのコンテクストで割り当てることのできるロールを一覧表示します。';
$string['user'] = 'ユーザ';
$string['viewrequest'] = 'リクエストを表示する';
$string['visible'] = 'すべてを展開する';
