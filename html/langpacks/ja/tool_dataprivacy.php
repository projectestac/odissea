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
 * Strings for component 'tool_dataprivacy', language 'ja', version '4.1'.
 *
 * @package     tool_dataprivacy
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitiesandresources'] = '活動およびリソース';
$string['addcategory'] = 'カテゴリを追加する';
$string['addnewdefaults'] = '新しいモジュールデフォルトを追加する';
$string['addpurpose'] = '目的を追加する';
$string['addroleoverride'] = 'ロールオーバーライドを追加する';
$string['approve'] = '承認';
$string['approvedrequestsubmitted'] = 'あなたのリクエストが送信されました。まもなく処理されます。';
$string['approverequest'] = 'リクエストを承認する';
$string['automaticdatadeletionapproval'] = '自動データ削除リクエスト承認';
$string['automaticdatadeletionapproval_desc'] = 'この設定を有効にした場合、データ削除リクエストは自動的に承認されます。<br/>自動承認はこの設定が有効にされた後の新しいデータ削除リクエストにのみ適用されることに留意してください。既存の承認待ちのデータ削除リクエストはプライバシー責任者による手動承認が必要です。';
$string['automaticdataexportapproval'] = '自動データエクスポートリクエスト承認';
$string['automaticdataexportapproval_desc'] = 'この設定を有効にした場合、データエクスポートリクエストは自動的に承認されます。<br/>自動承認はこの設定が有効にされた後の新しいデータエクスポートリクエストにのみ適用されることに留意してください。既存の承認待ちのデータエクスポートリクエストはプライバシー責任者による手動承認が必要です。';
$string['automaticdeletionrequests'] = '自動データ削除リクエストを作成する';
$string['automaticdeletionrequests_desc'] = 'この設定を有効にした場合、手動でアカウント削除されたユーザすべてのデータ削除リクエストが自動的に作成されます。';
$string['bulkapproverequests'] = 'リクエストを承認する';
$string['bulkdenyrequests'] = 'リクエストを拒否する';
$string['cachedef_contextlevel'] = 'コンテクストレベルの目的およびカテゴリ';
$string['cachedef_purpose'] = 'データ目的';
$string['cachedef_purpose_overrides'] = 'データプライバシーツールのオーバーライド理由';
$string['cancelrequest'] = 'リクエストをキャンセルする';
$string['cancelrequestconfirmation'] = '本当にこのデータリクエストをキャンセルしてもよろしいですか?';
$string['cannotreset'] = 'このリクエストをリセットできません。拒否されたリクエストのみリセットすることができます。';
$string['categories'] = 'カテゴリ';
$string['categorieslist'] = 'データカテゴリ一覧';
$string['category'] = 'カテゴリ';
$string['category_help'] = 'データレジストリのカテゴリはデータのタイプを記述します。新しいカテゴリが追加された場合、または承継が選択された場合、高いコンテクストからデータカテゴリが適用されます。コンテクストは次のとおりです (低いものから高いものへ): ブロック > 活動モジュール > コース > コースカテゴリ > ユーザ > サイト';
$string['categorycreated'] = 'カテゴリが作成されました。';
$string['categorydefault'] = 'デフォルトカテゴリ';
$string['categorydefault_help'] = 'デフォルトカテゴリは新しいインスタンスすべてに適用されるデータカテゴリです。継承が選択された場合、高いコンテクストからデータカテゴリが適用されます。コンテクストは次のとおりです (低いものから高いものへ): ブロック > 活動モジュール > コース > コースカテゴリ > ユーザ > サイト';
$string['categoryupdated'] = 'カテゴリが更新されました。';
$string['close'] = '閉じる';
$string['compliant'] = '準拠';
$string['confirmapproval'] = '本当にこのデータリクエストを承認してもよろしいですか?';
$string['confirmbulkapproval'] = '本当に選択したデータリクエストを一括承認してもよろしいですか?';
$string['confirmbulkdenial'] = '本当に選択したデータリクエストを一括拒否してもよろしいですか?';
$string['confirmcompletion'] = '本当にこのユーザの問い合わせを完了にマークしてもよろしいですか?';
$string['confirmcontextdeletion'] = '本当に選択したコンテクストを削除してもよろしいですか? これにより関連するサブコンテクストのすべてのユーザデータも削除されます。';
$string['confirmdenial'] = '本当にこのデータリクエストを削除してもよろしいですか?';
$string['confirmrequestresubmit'] = '本当に現在の {$a->username} の {$a->type} リクエストをキャンセルして再送信してもよろしいですか?';
$string['contactdataprotectionofficer'] = 'プライバシー責任者に連絡する';
$string['contactdataprotectionofficer_desc'] = 'この設定を有効にした場合、ユーザはプライバシー責任者に連絡して自分のプロファイルページのリンクからデータをリクエストすることができます。';
$string['contactdpoviaprivacypolicy'] = 'プライバシーポリシーに記載されているプライバシー責任者にご連絡ください。';
$string['contextlevelname10'] = 'サイト';
$string['contextlevelname30'] = 'ユーザ';
$string['contextlevelname40'] = 'コースカテゴリ';
$string['contextlevelname50'] = 'コース';
$string['contextlevelname70'] = '活動モジュール';
$string['contextlevelname80'] = 'ブロック';
$string['contextpurposecategorysaved'] = '目的およびカテゴリが保存されました。';
$string['createcategory'] = 'データカテゴリを作成する';
$string['createdeletedatarequest'] = 'データ削除リクエストを作成する';
$string['createnewdatarequest'] = '新しいデータリクエストを作成する';
$string['createpurpose'] = 'データ目的を作成する';
$string['creationauto'] = '自動';
$string['creationmanual'] = '手動';
$string['datadeletion'] = 'データ削除';
$string['datadeletionpagehelp'] = 'ここで一覧表示されているとおり保持期間の有効期限が切れました。データの削除を確認および承認してください。「有効期限切れコンテクストを削除する」スケジュールタスクで削除が実行されます。';
$string['dataprivacy:downloadallrequests'] = '全員のエクスポート済みデータをダウンロードします。';
$string['dataprivacy:downloadownrequest'] = 'あなた自身のエクスポート済みデータをダウンロードします。';
$string['dataprivacy:makedatadeletionrequestsforchildren'] = '未成年のデータ削除リクエスト';
$string['dataprivacy:makedatarequestsforchildren'] = '未成年のデータリクエストを作成する';
$string['dataprivacy:managedataregistry'] = 'データレジストリを管理する';
$string['dataprivacy:managedatarequests'] = 'データリクエストを管理する';
$string['dataprivacy:requestdelete'] = 'あなた自身のデータ削除リクエスト';
$string['dataprivacy:requestdeleteforotheruser'] = '別のユーザの代理としてのデータ削除リクエスト';
$string['dataregistry'] = 'データレジストリ';
$string['dataregistryinfo'] = 'データレジストリによりカテゴリ (データのタイプ) および目的 (データを処理する目的) をサイトすべてのコンテンツに設定することができます - ユーザおよびコースから活動およびブロックまで。それぞれの目的には保持期間を設定することができます。保持期間の有効期限が切れた場合、データはフラグ付けされ削除リストに追加された後、管理者による承認を待ちます。';
$string['datarequestcreatedforuser'] = '{$a} のデータリクエストが作成されました。';
$string['datarequestcreatedfromscheduledtask'] = 'スケジュールタスクから自動的に作成されました (既存の削除済みユーザ)。';
$string['datarequestcreatedupondelete'] = 'ユーザの削除により自動的に作成されました。';
$string['datarequestemailsubject'] = 'データリクエスト: {$a}';
$string['datarequests'] = 'データリクエスト';
$string['dataretentionexplanation'] = 'この概要ではユーザデータ保持のデフォルトカテゴリおよび目的を表示します。特定のエリアではここよりさらに個別のカテゴリおよび目的を指定することができます。';
$string['dataretentionsummary'] = 'データ保持概要';
$string['datecomment'] = '[{$a->date}]:
{$a->comment}';
$string['daterequested'] = 'データリクエスト';
$string['daterequesteddetail'] = 'データリクエスト:';
$string['defaultexpired'] = 'すべてのユーザのデータ';
$string['defaultexpiredexcept'] = '次のロールのどれかを保持するユーザを除くすべてのユーザのデータ:<br />
{$a->unexpired}';
$string['defaultsinfo'] = 'デフォルトカテゴリおよび目的はすべての新しく作成されるインスタンスおよび値が設定されていない既存のインスタンスに適用されます。';
$string['defaultssaved'] = 'デフォルトが保存されました。';
$string['defaultswarninginfo'] = '警告: これらのデフォルトを変更することにより既存のインスタンスの保持期間に影響を及ぼす可能性があります。';
$string['defaultunexpired'] = '次のロールのどれかを保持するユーザのみのデータ:<br />
{$a->expired}';
$string['defaultunexpiredwithexceptions'] = '次のロールのどれかを保持するユーザのみのデータ:<br />
{$a->expired}
ただし次のロールのどれかも保持する:<br>
{$a->unexpired}';
$string['deletecategory'] = 'カテゴリを削除する';
$string['deletecategorytext'] = '本当にカテゴリ「 {$a} 」を削除してもよろしいですか?';
$string['deletedefaults'] = 'デフォルトを削除する: {$a}';
$string['deletedefaultsconfirmation'] = '本当に {$a} モジュールのデフォルトカテゴリおよび目的を削除してもよろしいですか?';
$string['deleteexistingdeleteduserstask'] = '既存の削除済みユーザのデータ削除リクエストを作成する';
$string['deleteexpiredcontextstask'] = '有効期限切れコンテクストを削除する';
$string['deleteexpireddatarequeststask'] = '有効期限切れデータリクエストエクスポートファイルを削除する';
$string['deletemyaccount'] = '私のアカウントを削除する';
$string['deletepurpose'] = '目的を削除する';
$string['deletepurposetext'] = '本当に目的「 {$a} 」を削除してもよろしいですか?';
$string['deny'] = '拒否';
$string['denyrequest'] = 'リクエストを拒否する';
$string['deprecated'] = '非推奨';
$string['deprecatedexplanation'] = 'このプラグインは古いバージョンのプライバシーインタフェースの1つを使用しているため更新してください。';
$string['download'] = 'ダウンロード';
$string['downloadexpireduser'] = 'ダウンロードの有効期限が切れました。あなたの個人データをエクスポートしたい場合、新しいリクエストを送信してください。';
$string['dporolemapping'] = 'プライバシー責任者ロールマッピング';
$string['dporolemapping_desc'] = 'プライバシー責任者はデータリクエストを管理することができます。ロールがプライバシー責任者ロールマッピングオプションとして一覧表示されるためにはケイパビリティ「tool/dataprivacy:managedatarequests」が許可される必要があります。';
$string['duplicaterole'] = 'ロール指定済み';
$string['editcategories'] = 'カテゴリを編集する';
$string['editcategory'] = 'カテゴリを編集する';
$string['editdefaults'] = 'デフォルトを編集する: {$a}';
$string['editmoduledefaults'] = 'モジュールデフォルトを編集する';
$string['editpurpose'] = '目的を編集する';
$string['editpurposes'] = '目的を編集する';
$string['effectiveretentionperiodcourse'] = '{$a} (コース終了日後)';
$string['effectiveretentionperioduser'] = '{$a} (最後にユーザがサイトにアクセスして以来)';
$string['emailsalutation'] = '{$a} さん';
$string['errorcannotrequestdeleteforother'] = 'あなたにはこのユーザの削除リクエストを作成するためのパーミッションはありません。';
$string['errorcannotrequestdeleteforself'] = 'あなたにはあなた自身の削除リクエストを作成するためのパーミッションはありません。';
$string['errorcannotrequestexportforself'] = 'あなた自身のエクスポートリクエストを作成するパーミッションはありません。';
$string['errorcontactdpodisabled'] = 'プライバシー責任者への連絡のオプションは無効にされています。';
$string['errorcontexthasunexpiredchildren'] = 'コンテクスト「 {$a} 」にはまだ有効期限切れではないサブコンテクストがあります。コンテクストには削除のための削除フラグは付けられませんでした。';
$string['errorinvalidrequestcomments'] = 'コメントフィールドにはプレインテキストのみ含めます。';
$string['errorinvalidrequestcreationmethod'] = '無効なリクエスト作成方法です!';
$string['errorinvalidrequeststatus'] = '無効なリクエストステータスです!';
$string['errorinvalidrequesttype'] = '無効なリクエストタイプです!';
$string['errornocapabilitytorequestforothers'] = 'ユーザ {$a->requestedby} にはユーザ {$a->userid} の代理でデータをリクエストするケイパビリティがありません。';
$string['errornoexpiredcontexts'] = '処理する有効期限切れコンテクストはありません。';
$string['errorrequestalreadyexists'] = 'あなたにはすでに進行中のリクエストがあります。';
$string['errorrequestnotfound'] = 'リクエストが見つかりませんでした。';
$string['errorrequestnotwaitingforapproval'] = 'リクエストは承認待ちではありません。まだ準備未了または処理済みでもありません。';
$string['errorsendingmessagetodpo'] = '{$a} へのメッセージ送信中にエラーが発生しました。';
$string['exceptionnotificationbody'] = '<p><b>{$a->fullmethodname}</b>の呼び出し中に例外が発生しました。<br />これはプラグイン<b>{$a->component}</b>がデータ処理を終えていないことを意味します。以下、あなたがプラグイン開発者に渡すことのできる例外情報です: </p><pre>{$a->message}<br />

{$a->backtrace}</pre>';
$string['exceptionnotificationsubject'] = 'プライバシーデータの処理中に例外が発生しました。';
$string['expandplugin'] = 'プラグインを展開および折り畳みます。';
$string['expandplugintype'] = 'プラグインタイプを展開および折り畳みます。';
$string['expiredretentionperiodtask'] = '有効期限切れ保存期間';
$string['expiredrolewithretention'] = '{$a->retention} (有効期限切れ)';
$string['expiry'] = '期限切れ';
$string['explanationtitle'] = 'このページで使用されているアイコンおよびその意味です。';
$string['external'] = '追加';
$string['externalexplanation'] = 'このサイトにインストールされている追加プラグインです。';
$string['filteroption'] = '{$a->category}: {$a->name}';
$string['frontpagecourse'] = 'サイトホームコース';
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
$string['gdpr_art_9_2_d_description'] = '政治的、哲学的、宗教的な財団法人、協会またはその他非営利団体、またはメンバまたは組織の前のメンバまたはその目的により定期的に接触のある人の関連のみ処理して個人データはデータ主体の同意なしに外部に公開されないことを目標および条件とした労働組織による適切な保護条項のある合法的活動の過程で処理が実行されます。';
$string['gdpr_art_9_2_d_name'] = '財団法人、協会、その他非営利団体のメンバ/関係者に関する合法的な活動 (GDPR Art. 9.2(d))';
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
$string['httpwarning'] = 'このサイトからダウンロードされるデータは暗号化されていないかもしれません。あなたのシステム管理者に連絡してこのサイトへのSSLのインストールを依頼してください。';
$string['inherit'] = '継承';
$string['lawfulbases'] = '法的根拠';
$string['lawfulbases_help'] = '個人データを処理するための法的根拠として提供するため少なくとも1つのオプションを選択してください。これらの法的根拠の詳細は<a href="https://gdpr-info.eu/art-6-gdpr/" target="_blank">GDPR Art. 6.1</a>をご覧ください。';
$string['markcomplete'] = '完了マークする';
$string['markedcomplete'] = 'あなたの問い合わせはプライバシー責任者によって完了マークされました。';
$string['message'] = 'メッセージ';
$string['messagelabel'] = 'メッセージ:';
$string['messageprovider:contactdataprotectionofficer'] = 'データリクエスト';
$string['messageprovider:datarequestprocessingresults'] = 'データリクエスト処理結果';
$string['messageprovider:notifyexceptions'] = 'データリクエスト例外通知';
$string['moduleinstancename'] = '{$a->instancename} ({$a->modulename})';
$string['mypersonaldatarequests'] = '私の個人データリクエスト';
$string['nameandparent'] = '{$a->parent} / {$a->name}';
$string['nameemail'] = '{$a->name} ({$a->email})';
$string['nchildren'] = '{$a} 子';
$string['newrequest'] = '新しいリクエスト';
$string['noactivitiestoload'] = '活動なし';
$string['noassignedroles'] = 'このコンテクストに割り当てられているロールはありません。';
$string['noblockstoload'] = 'ブロックなし';
$string['nocategories'] = 'まだカテゴリはありません。';
$string['nocoursestoload'] = '活動なし';
$string['nodatarequests'] = 'データリクエストはありません。';
$string['nodatarequestsmatchingfilter'] = '与えられたフィルタに合致するデータリクエストはありません。';
$string['noexpiredcontexts'] = 'このコンテクストレベルでは保持期間の有効期限が切れたデータはありません。';
$string['nopersonaldatarequests'] = 'あなたには個人データリクエストはありません。';
$string['nopurposes'] = 'まだ目的はありません。';
$string['nosubjectaccessrequests'] = 'あなたが対応する必要のあるデータリクエストはありません。';
$string['nosystemdefaults'] = 'まだサイト目的およびカテゴリは定義されていません。';
$string['notset'] = '未設定 (デフォルト値を使用します)';
$string['notyetexpired'] = '{$a} (有効期限未到来)';
$string['overrideinstances'] = 'カスタム値のインスタンスをリセットする';
$string['pluginname'] = 'データプライバシー';
$string['pluginname_help'] = 'データプライバシープラグイン';
$string['pluginregistry'] = 'プラグインプライバシーレジストリ';
$string['pluginregistrytitle'] = 'プラグインプライバシー準拠レジストリ';
$string['privacy'] = 'プライバシー';
$string['privacy:metadata:preference:tool_dataprivacy_request-filters'] = 'データリクエストページに現在適用されているフィルタです。';
$string['privacy:metadata:preference:tool_dataprivacy_request-perpage'] = 'ユーザが1ページ内で閲覧したいデータリクエスト数です。';
$string['privacy:metadata:purpose'] = 'このサイトのために作成されたデータ利用目的情報です。';
$string['privacy:metadata:purpose:usermodified'] = '目的を修正したユーザのIDです。';
$string['privacy:metadata:request'] = 'このサイトのために作成された個人データリクエスト (個人情報調査および削除リクエスト) の情報です。';
$string['privacy:metadata:request:comments'] = 'リクエストに付随するすべてのユーザコメントです。';
$string['privacy:metadata:request:dpocomment'] = 'リクエストに関してサイトのプライバシー責任者によって作成されたすべてのコメントです。';
$string['privacy:metadata:request:requestedby'] = '別のユーザとして作成された場合のリクエストを作成したユーザのIDです。';
$string['privacy:metadata:request:timecreated'] = 'タイムスタンプはユーザによってリクエストが作成された日時を示します。';
$string['privacy:metadata:request:userid'] = 'リクエストが属するユーザのIDです。';
$string['privacyofficeronly'] = 'プライバシー責任者ロール ({$a}) が割り当てられたユーザのみこのコンテンツにアクセスすることができます。';
$string['privacyrequestexpiry'] = 'データリクエスト有効期限';
$string['privacyrequestexpiry_desc'] = '承認されたデータリクエストを有効期限切れ前にダウンロードできる期間です。ゼロが設定された場合、時間制限はありません。';
$string['protected'] = '保護済み';
$string['protectedlabel'] = 'このデータの保存にはユーザの忘れられるリクエストに対して上位の判例があります。このデータは保存期間の有効期限切れのみにより削除されます。';
$string['purpose'] = '目的';
$string['purpose_help'] = '目的ではデータを処理する目的に関して説明します。新しい目的が追加された場合、または承継が選択された場合、高いコンテクストからの目的が適用されます。コンテクストは次のとおりです (低いものから高いものへ): ブロック > 活動モジュール > コース > コースカテゴリ > ユーザ > サイト';
$string['purposecreated'] = '目的が作成されました。';
$string['purposedefault'] = 'デフォルトの目的';
$string['purposedefault_help'] = 'デフォルトの目的は新しいインスタンスすべてに適用される目的です。継承が選択された場合、高いコンテクストから目的が適用されます。コンテクストは次のとおりです (低いものから高いものへ): ブロック > 活動モジュール > コース > コースカテゴリ > ユーザ > サイト';
$string['purposeoverview'] = '理由では保存済みデータの使用目的およびポリシーの保持に関して説明します。データの保存および保持に関しても理由で説明されます。';
$string['purposes'] = '目的';
$string['purposeslist'] = 'データ目的一覧';
$string['purposeupdated'] = '目的が更新されました。';
$string['replyto'] = '返信';
$string['requestactions'] = 'アクション';
$string['requestapproved'] = 'リクエストが承認されました。';
$string['requestby'] = 'リクエスト元';
$string['requestbydetail'] = 'リクエスト者:';
$string['requestcomments'] = 'コメント';
$string['requestcomments_help'] = 'あなたはこのボックスにデータリクエストのさらなる詳細を入力することができます。';
$string['requestcreation'] = '作成';
$string['requestdenied'] = 'リクエストが拒否されました。';
$string['requestemailintro'] = 'あなたはデータリクエストを受信しました:';
$string['requestfor'] = 'ユーザ';
$string['requestmarkedcomplete'] = 'リクエストが完了マークされました。';
$string['requestorigin'] = 'サイト';
$string['requestsapproved'] = 'リクエストが承認されました。';
$string['requestsdenied'] = 'リクエストが拒否されました。';
$string['requeststatus'] = 'ステータス';
$string['requestsubmitted'] = 'あなたのリクエストがサイトのプライバシー責任者に送信されました。';
$string['requesttype'] = 'タイプ';
$string['requesttype_help'] = 'あなたがサイトのプライバシー責任者に連絡したい理由を選択してください。すべての個人データを削除した場合、あなたがサイトにログインできなくなることに注意してください。';
$string['requesttypedelete'] = '私の個人データすべてを削除する';
$string['requesttypedeleteshort'] = '削除';
$string['requesttypeexport'] = '私の個人データすべてをエクスポートする';
$string['requesttypeexportshort'] = 'エクスポート';
$string['requesttypeothers'] = '一般的な問い合わせ';
$string['requesttypeothersshort'] = 'メッセージ';
$string['requesttypeuser'] = '{$a->typename} ({$a->user})';
$string['requireallenddatesforuserdeletion'] = '終了日のないコースをアクティブとみなす';
$string['requireallenddatesforuserdeletion_desc'] = 'ユーザの有効期限切れを判断する場合、いくつかの要素が考慮されます:

* ユーザの最終ログイン日時がユーザの保持期間と比較されます。
* ユーザが積極的にコースに受講登録しているかどうか。

コースへの有効な受講登録をチェックする時にコースに終了日がない場合、コースがアクティブであるかどうか判断するためこの設定が使用されます。

コースに終了日が設定されていない場合、そして、この設定が有効にされている場合、ユーザを削除することはできません。';
$string['requiresattention'] = '注意を必要とします。';
$string['requiresattentionexplanation'] = 'このプラグインにはMoodleプライバシーAPIは実装されません。このプラグインが個人データを保存した場合、Moodleのプライバシーシステムを経由で個人データをエクスポートまたは削除することはできません。';
$string['resubmitrequest'] = '{$a->username} の {$a->type} リクエストを再送信する';
$string['resubmitrequestasnew'] = '新しいリクエストとして再送信する';
$string['resubmittedrequest'] = '既存の {$a->username} の {$a->type} リクエストはキャンセルおよび再送信されました。';
$string['resultdeleted'] = 'あなたは最近 {$a} のあなたのアカウントおよび個人データを削除するようリクエストしました。この手続きが完了したため、あなたはログインできないようになりました。';
$string['resultdownloadready'] = 'あなたが最近リクエストした {$a} のあなたの個人データのコピーを次のリンクよりダウンロードできるようになりました。';
$string['retentionperiod'] = '保存期間';
$string['retentionperiod_help'] = '保持期間ではデータを保持する時間の長さを指定します。保持期間の有効期限が切れた場合、データはフラグ付けされて削除リストに追加された後、管理者による承認を待ちます。';
$string['retentionperiodnotdefined'] = '保存期間は定義されていません。';
$string['retentionperiodzero'] = '保存期間なし';
$string['reviewdata'] = 'データをレビューする';
$string['role'] = 'ロール';
$string['role_help'] = 'オーバーライドを適用するロールです。';
$string['roleoverride'] = 'ロールオーバーライド';
$string['roleoverrideoverview'] = 'デフォルトの保持ポリシーは特定のユーザロールの保持ポリシーを長くまたは短くするようオーバーライドすることができます。これらすべてのロールが有効期限切れとなった場合のみユーザの有効期限が切れます。';
$string['roleoverrides'] = 'ロールオーバーライド';
$string['selectbulkaction'] = 'バルク処理を選択してください。';
$string['selectdatarequests'] = 'データリクエストを選択してください。';
$string['selectuserdatarequest'] = '{$a->username} の {$a->requesttype} データリクエストを選択してください。';
$string['send'] = '送信';
$string['sensitivedatareasons'] = '機密性の高い個人データ処理理由';
$string['sensitivedatareasons_help'] = 'この目的に関係する機密性の高い個人データ処理の禁止を除外するための1つまたはそれ以上の適用可能な理由を選択してください。詳細情報は<a href="https://gdpr-info.eu/art-9-gdpr/" target="_blank">GDPR Art. 9.2</a>をご覧ください。';
$string['setdefaults'] = 'デフォルトに設定する';
$string['showdataretentionsummary'] = 'データ保持概要を表示する';
$string['showdataretentionsummary_desc'] = 'この設定を有効にした場合、データ保持概要リンクがページフッタおよびユーザのプロファイルページに表示されます。';
$string['statusapproved'] = '承認済み';
$string['statusawaitingapproval'] = '承認待ち';
$string['statuscancelled'] = 'キャンセル';
$string['statuscomplete'] = '完了';
$string['statusdeleted'] = '削除済み';
$string['statusdetail'] = 'ステータス:';
$string['statusexpired'] = '有効期限切れ';
$string['statuspending'] = '保留';
$string['statusprocessing'] = '処理';
$string['statusready'] = 'ダウンロード準備完了';
$string['statusrejected'] = '拒否';
$string['subjectscope'] = '主題範囲';
$string['subjectscope_help'] = '主題範囲はこのコンテクストで割り当てることのできるロールを一覧表示します。';
$string['summary'] = 'レジストリ設定概要';
$string['systemconfignotsetwarning'] = 'サイトの目的およびカテゴリが定義されていません。これらが定義されていない場合、削除リクエスト処理時にすべてのデータが削除されます。';
$string['tobedeleted'] = '削除されるデータ';
$string['unexpiredrolewithretention'] = '{$a->retention} (有効期限未到来)';
$string['user'] = 'ユーザ';
$string['userlistexplanation'] = 'このプラグインではベースプロバイダが提供されていますが、プライバシー機能のフルサポートのためユーザリストプロバイダも実装する必要があります。';
$string['userlistnoncompliant'] = 'ユーザリストプロバイダがありません。';
$string['viewrequest'] = 'リクエストを表示する';
$string['visible'] = 'すべてを展開する';
