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
 * Strings for component 'tool_dataprivacy', language 'tr', version '4.5'.
 *
 * @package     tool_dataprivacy
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitiesandresources'] = 'Etkinlik ve kaynaklar';
$string['addcategory'] = 'Kategori ekle';
$string['addnewdefaults'] = 'Yeni bir modül varsayılanı ekle';
$string['addpurpose'] = 'Amaç ekleyin';
$string['addroleoverride'] = 'Rol geçersiz kılma ekle';
$string['allowfiltering'] = 'Dışa aktarımların kursa göre filtrelenmesine izin ver';
$string['allowfiltering_desc'] = 'Etkinleştirilirse, gizlilik sorumlusu tüm kurslar yerine seçilen kurslardan kullanıcı verilerini dışa aktarmayı seçebilir. Bu özellik etkinleştirildiğinde, dışa aktarma talepleri \'Beklemede\'den başlayacak ve ancak bir arka plan görevi tamamlandıktan sonra onaylanabilecektir.';
$string['approve'] = 'Onayla';
$string['approvedrequestsubmitted'] = 'Talebiniz gönderildi ve yakında işleme alınacak.';
$string['approverequest'] = 'İsteği onaylayın';
$string['approverequestall'] = 'Talebi onayla (tüm veriler)';
$string['approveselectedcourses'] = 'Seçilen kursları onayla';
$string['automaticdatadeletionapproval'] = 'Otomatik veri silme talebi onayı';
$string['automaticdatadeletionapproval_desc'] = 'Etkinleştirilirse, veri silme istekleri otomatik olarak onaylanır. <br/> Otomatik onayın yalnızca bu ayar etkinken yeni veri silme istekleri için geçerli olacağını unutmayın. Onay bekleyen mevcut veri silme taleplerinin yine de gizlilik görevlisi tarafından manuel olarak onaylanması gerekecektir.';
$string['automaticdataexportapproval'] = 'Otomatik veri aktarım talebi onayı';
$string['automaticdataexportapproval_desc'] = 'Etkinleştirilirse, veri dışa aktarma istekleri otomatik olarak onaylanır.<br/>Otomatik onayın yalnızca bu ayar etkinken yeni veri dışa aktarma istekleri için geçerli olacağını unutmayın. Onay bekleyen mevcut veri dışa aktarma taleplerinin yine de gizlilik görevlisi tarafından manuel olarak onaylanması gerekecektir.';
$string['automaticdeletionrequests'] = 'Otomatik veri silme istekleri oluşturun';
$string['automaticdeletionrequests_desc'] = 'Etkinleştirilirse, manuel olarak silinen tüm kullanıcı hesapları için otomatik olarak bir veri silme talebi oluşturulacaktır.';
$string['bulkapproverequests'] = 'İstekleri onaylayın';
$string['bulkdenyrequests'] = 'İstekleri reddet';
$string['cachedef_contextlevel'] = 'Bağlam seviyeleri amaç ve kategori';
$string['cachedef_purpose'] = 'Veri amaçları';
$string['cachedef_purpose_overrides'] = 'Veri gizliliği aracında amaç geçersiz kılmaları';
$string['cancelrequest'] = 'İsteği iptal et';
$string['cancelrequestconfirmation'] = 'Bu veri talebini gerçekten iptal etmek istiyor musunuz?';
$string['cannotreset'] = 'Bu istek sıfırlanamıyor. Yalnızca reddedilen istekler sıfırlanabilir.';
$string['categories'] = 'Kategoriler';
$string['categorieslist'] = 'Veri kategorilerinin listesi';
$string['category'] = 'Kategori';
$string['category_help'] = 'Veri kayıt defterindeki bir kategori, bir veri türünü tanımlar. Yeni bir kategori eklenebilir veya Devral seçilirse, daha yüksek bir bağlamdaki veri kategorisi uygulanır. Bağlamlar (düşükten yükseğe): Bloklar>Etkinlik modülleri> Kurslar> Kurs kategorileri> Site.';
$string['categorycreated'] = 'Kategori oluşturuldu';
$string['categorydefault'] = 'Varsayılan kategori';
$string['categorydefault_help'] = 'Varsayılan kategori, herhangi bir yeni örneğe uygulanan veri kategorisidir. Devral seçilirse, daha yüksek bir bağlamdaki veri kategorisi uygulanır. Bağlamlar (düşükten yükseğe) şunlardır: Bloklar> Etkinlik modülleri> Kurslar> Kurs kategorileri> Kullanıcı> Site.';
$string['categoryupdated'] = 'Kategori güncellendi';
$string['close'] = 'Kapat';
$string['compliant'] = 'Uyum';
$string['confirmapproval'] = 'Bu veri talebini gerçekten onaylamak istiyor musunuz?';
$string['confirmbulkapproval'] = 'Seçilen veri isteklerini gerçekten toplu olarak onaylamak istiyor musunuz?';
$string['confirmbulkdenial'] = 'Seçilen veri isteklerini gerçekten toplu olarak reddetmek istiyor musunuz?';
$string['confirmcompletion'] = 'Bu kullanıcı sorgusunu gerçekten tamamlandı olarak işaretlemek istiyor musunuz?';
$string['confirmcontextdeletion'] = 'Seçilen bağlamların silinmesini gerçekten onaylamak istiyor musunuz? Bu, ilgili alt bağlamları için tüm kullanıcı verilerini de silecektir.';
$string['confirmdenial'] = 'Bu veri talebini gerçekten reddetmek istiyor musunuz?';
$string['confirmrequestresubmit'] = '{$a->username} için geçerli {$a->type} isteğini iptal edip yeniden göndermek istediğinizden emin misiniz?';
$string['contactdataprotectionofficer'] = 'Gizlilik görevlisiyle iletişime geçin';
$string['contactdataprotectionofficer_desc'] = 'Etkinleştirilirse, kullanıcılar gizlilik görevlisi ile iletişime geçebilir ve profil sayfalarındaki bir bağlantı aracılığıyla veri talebinde bulunabilirler.';
$string['contactdpoviaprivacypolicy'] = 'Etkinleştirilirse, oylama görevlisi ile cevap geçebilir ve profil sayfalarındaki bir bağlantı veri talebinde bulunabilirler.';
$string['contextlevelname10'] = 'Site';
$string['contextlevelname30'] = 'Kullanıcılar';
$string['contextlevelname40'] = 'Kurs kategorileri';
$string['contextlevelname50'] = 'Kurslar';
$string['contextlevelname70'] = 'Etkinlik modülleri';
$string['contextlevelname80'] = 'Bloklar';
$string['contextpurposecategorysaved'] = 'Amaç ve kategori kaydedildi.';
$string['createcategory'] = 'Veri kategorisi oluşturun';
$string['createdeletedatarequest'] = 'Veri silme talebi oluştur';
$string['createnewdatarequest'] = 'Yeni bir veri talebi oluştur';
$string['createpurpose'] = 'Veri amacı oluşturun';
$string['creationauto'] = 'Otomatik olarak';
$string['creationmanual'] = 'El ile';
$string['datadeletion'] = 'Veri silme';
$string['datadeletionpagehelp'] = 'Saklama süresinin dolduğu veriler burada listelenmiştir. Lütfen veri silme işlemini gözden geçirin ve onaylayın, bu daha sonra "Süresi dolan bağlamları sil" zamanlanmış görevi tarafından yürütülecektir.';
$string['dataprivacy:downloadallrequests'] = 'Herkes için dışa aktarılan verileri indirin';
$string['dataprivacy:downloadownrequest'] = 'Kendi dışa aktarılan verilerinizi indirin';
$string['dataprivacy:makedatadeletionrequestsforchildren'] = 'Küçükler için verilerin silinmesini isteyin';
$string['dataprivacy:makedatarequestsforchildren'] = 'Küçükler için veri talepleri yapın';
$string['dataprivacy:managedataregistry'] = 'Veri kaydını yönet';
$string['dataprivacy:managedatarequests'] = 'Veri taleplerini yönetin';
$string['dataprivacy:requestdelete'] = 'Kendiniz için veri silme talebinde bulunun';
$string['dataprivacy:requestdeleteforotheruser'] = 'Başka bir kullanıcı adına verilerin silinmesini isteyin';
$string['dataregistry'] = 'Veri kaydı';
$string['dataregistryinfo'] = 'Veri kaydı, kullanıcılardan kurslara, etkinliklere ve bloklara kadar sitedeki tüm içerik için kategorilerin (veri türleri) ve amaçların (veri işleme nedenleri) ayarlanmasını sağlar. Her amaç için bir saklama süresi belirlenebilir. Bir saklama süresi sona erdiğinde, veriler işaretlenir ve silinmek üzere listelenir ve yöneticinin onayı beklenir.';
$string['datarequestcreatedforuser'] = '{$a} için veri isteği oluşturuldu';
$string['datarequestcreatedfromscheduledtask'] = 'Zamanlanmış bir görevden otomatik olarak oluşturulur (önceden var olan silinmiş kullanıcı).';
$string['datarequestcreatedupondelete'] = 'Kullanıcı silindiğinde otomatik olarak oluşturulur.';
$string['datarequestemailsubject'] = 'Veri talebi: {$a}';
$string['datarequests'] = 'Veri talepleri';
$string['dataretentionexplanation'] = 'Bu özet, varsayılan kategorileri ve kullanıcı verilerini saklamaya yönelik amaçları gösterir. Bazı alanlar, burada listelenenlerden daha spesifik kategorilere ve amaçlara sahip olabilir.';
$string['dataretentionsummary'] = 'Veri saklama özeti';
$string['datecomment'] = '[{$a->date}]:
 {$a->comment}';
$string['daterequested'] = 'İstenen tarih';
$string['daterequesteddetail'] = 'İstenen tarih:';
$string['defaultexpired'] = 'Tüm kullanıcılar için veriler';
$string['defaultexpiredexcept'] = 'Aşağıdaki rollerden herhangi birine sahip olanlar dışındaki tüm kullanıcılar için veriler: <br>{$a->unexpired}';
$string['defaultsinfo'] = 'Varsayılan kategoriler ve amaçlar, bir değerin ayarlanmadığı tüm yeni ve mevcut örneklere uygulanır.';
$string['defaultssaved'] = 'Varsayılanlar kaydedildi';
$string['defaultswarninginfo'] = 'Uyarı: Bu varsayılanların değiştirilmesi, mevcut örneklerin saklama süresini etkileyebilir.';
$string['defaultunexpired'] = 'Yalnızca aşağıdaki rollerden herhangi birine sahip olan kullanıcılara ait veriler: <br>
{$a->expired}';
$string['defaultunexpiredwithexceptions'] = 'Yalnızca aşağıdaki rollerden herhangi birine sahip olan kullanıcılar için veriler: <br>
{$a->expired}
Aşağıdaki rollerden herhangi birine sahip olmadıkları sürece: <br>
{$a->unexpired}';
$string['deletecategory'] = 'Kategoriyi sil';
$string['deletecategorytext'] = '\'{$a}\' kategorisini silmek istediğinizden emin misiniz?';
$string['deletedefaults'] = 'Varsayılanları sil: {$a}';
$string['deletedefaultsconfirmation'] = 'Varsayılan kategoriyi ve {$a} modüllerinin amacını silmek istediğinizden emin misiniz?';
$string['deleteexistingdeleteduserstask'] = 'Önceden silinmiş kullanıcılar için veri silme isteği oluşturun';
$string['deleteexpiredcontextstask'] = 'Süresi dolan bağlamları silin';
$string['deleteexpireddatarequeststask'] = 'Süresi dolan veri talebi dışa aktarma dosyalarını silin';
$string['deletemyaccount'] = 'Hesabımı sil';
$string['deletepurpose'] = 'Amacı sil';
$string['deletepurposetext'] = '\'{$a}\' amacını silmek istediğinizden emin misiniz?';
$string['deny'] = 'Reddetmek';
$string['denyrequest'] = 'İsteği reddet';
$string['deprecated'] = 'Kullanımdan kaldırıldı';
$string['deprecatedexplanation'] = 'Bu eklenti, gizlilik arayüzlerinden birinin eski bir sürümünü kullanıyor ve güncellenmesi gerekiyor.';
$string['download'] = 'İndir';
$string['downloadexpireduser'] = 'İndirmenin süresi doldu. Kişisel verilerinizi dışa aktarmak istiyorsanız yeni bir talep gönderin.';
$string['dporolemapping'] = 'Gizlilik görevlisi rol eşlemesi';
$string['dporolemapping_desc'] = 'Gizlilik görevlisi veri taleplerini yönetebilir. Yetenek tool/dataprivacy:managedatarequests bir rolün gizlilik görevlisi rol eşleme seçeneği olarak listelenmesi için yönetilen görevlere izin verilmelidir.';
$string['duplicaterole'] = 'Rol zaten belirtildi';
$string['editcategories'] = 'Kategorileri düzenleyin';
$string['editcategory'] = 'Kategoriyi düzenleyin';
$string['editdefaults'] = 'Varsayılanları düzenle: {$a}';
$string['editmoduledefaults'] = 'Modül varsayılanlarını düzenleyin';
$string['editpurpose'] = 'Amacı düzenleyin';
$string['editpurposes'] = 'Amaçları düzenleyin';
$string['effectiveretentionperiodcourse'] = '{$a} (kurs bitiş tarihinden sonra)';
$string['effectiveretentionperioduser'] = '{$a} (kullanıcının siteye son erişiminden bu yana)';
$string['emailsalutation'] = 'Sevgili {$a},';
$string['errorcannotrequestdeleteforother'] = 'Bu kullanıcı için silme isteği oluşturma izniniz yok.';
$string['errorcannotrequestdeleteforself'] = 'Kendiniz için silme isteği oluşturma izniniz yok.';
$string['errorcannotrequestexportforself'] = 'Kendiniz için dışa aktarma talebi oluşturma izniniz yok.';
$string['errorcontactdpodisabled'] = 'Gizlilik görevlisiyle iletişim kurma seçeneği devre dışı bırakıldı.';
$string['errorcontexthasunexpiredchildren'] = '"{$a}" bağlamının hâlâ süresi dolmamış alt bağlamları var.  Hiçbir bağlam silinmek üzere işaretlenmedi.';
$string['errorinvalidrequestcomments'] = 'Yorumlar alanı yalnızca düz metin içerebilir.';
$string['errorinvalidrequestcreationmethod'] = 'Geçersiz istek oluşturma yöntemi!';
$string['errorinvalidrequeststatus'] = 'Geçersiz istek durumu!';
$string['errorinvalidrequesttype'] = 'Geçersiz istek türü!';
$string['errornocapabilitytorequestforothers'] = 'Kullanıcı {$a->requestedby}, kullanıcı {$a->userid} adına veri isteğinde bulunma yetkisine sahip değil';
$string['errornoexpiredcontexts'] = 'İşlenecek süresi dolmuş bağlam yok';
$string['errornoselectedcourse'] = 'En az bir kurs seçmelisiniz';
$string['errorrequestalreadyexists'] = 'Zaten devam eden bir isteğiniz var.';
$string['errorrequestnotfound'] = 'İstek bulunamadı';
$string['errorrequestnotwaitingforapproval'] = 'Talep onaylanmayı beklemiyor. Ya henüz hazır değil ya da zaten işlendi.';
$string['errorsendingmessagetodpo'] = '{$a}\'ya mesaj göndermeye çalışırken bir hatayla karşılaşıldı.';
$string['exceptionnotificationbody'] = '<p><b>{$a->fullmethodname}</b> çağrılırken istisna oluştu.<br>Bu, <b>{$a->bileşeninin</b> eklentisinin veri işlemeyi tamamlamadığı anlamına gelir .  Aşağıdaki istisna bilgileri, eklenti geliştiricisine iletilebilir:</p><pre>{$a->message}<br>

 {$a->geri izleme</pre>';
$string['exceptionnotificationsubject'] = 'Gizlilik verileri işlenirken istisna oluştu';
$string['expandplugin'] = 'Eklentiyi genişletin ve daraltın.';
$string['expandplugintype'] = 'Eklenti türünü genişletin ve daraltın.';
$string['expiredretentionperiodtask'] = 'Saklama süresi doldu';
$string['expiredrolewithretention'] = '{$a->retention} (Süresi doldu)';
$string['expiry'] = 'Son kullanma tarihi';
$string['explanationtitle'] = 'Bu sayfada kullanılan simgeler ve ne anlama geldikleri.';
$string['external'] = 'Ek';
$string['externalexplanation'] = 'Bu siteye ek bir eklenti yüklendi.';
$string['filterexportdata'] = 'Talebi onaylayın (seçilen kurslardan veriler)';
$string['filteroption'] = '{$a->category}: {$a->name}';
$string['frontpagecourse'] = 'Site Anasayfa kursu';
$string['gdpr_art_6_1_a_description'] = 'Veri konusu, kişisel verilerinin bir veya daha fazla özel amaç için işlenmesine izin vermiştir.';
$string['gdpr_art_6_1_a_name'] = 'İzin (GDPR Madde 6.1 (a))';
$string['gdpr_art_6_1_b_description'] = 'Veri konusunun taraf olduğu bir sözleşmenin ifası için veya bir sözleşmeye girmeden önce veri sahibinin talebi üzerine adımlar atmak için veri işleme gereklidir.';
$string['gdpr_art_6_1_b_name'] = 'Sözleşme (GDPR Madde 6.1 (b))';
$string['gdpr_art_6_1_c_description'] = 'Kontrolörün tabi olduğu yasal bir yükümlülüğe uymak için işlemenin gerekli olması';
$string['gdpr_art_6_1_c_name'] = 'Yasal yükümlülük (GDPR Madde 6.1 (c))';
$string['gdpr_art_6_1_d_description'] = 'Veri sahibinin veya başka bir gerçek kişinin hayati menfaatlerini korumak için işlemenin gerekli olması';
$string['gdpr_art_6_1_d_name'] = 'Önemli çıkarlar (GDPR Madde 6.1 (d))';
$string['gdpr_art_6_1_e_description'] = 'Kamu yararına yürütülen bir görevin yerine getirilmesi veya denetleyiciye verilen resmi yetkinin kullanılması için işlemenin gerekli olması';
$string['gdpr_art_6_1_e_name'] = 'Kamu görevi (GDPR Madde 6.1 (e))';
$string['gdpr_art_6_1_f_description'] = 'Veri sahibinin kişisel verilerin korunmasını gerektiren menfaatleri veya temel hakları ve özgürlükleri tarafından bu menfaatlerin geçersiz kılınması haricinde, kontrolör veya üçüncü bir şahıs tarafından gözetilen meşru menfaatler için, özellikle verilerin korunması için veri işleme gereklidir. konu bir çocuk';
$string['gdpr_art_6_1_f_name'] = 'Meşru menfaatler (GDPR Madde 6.1 (f))';
$string['gdpr_art_9_2_a_description'] = 'Birlik veya Üye Devlet yasalarının GDPR Madde 9\'un 1. paragrafında atıfta bulunulan yasağın veri sahibi tarafından kaldırılamayacağını öngörmesi dışında, veri sahibi, bu kişisel verilerin bir veya daha fazla belirli amaç için işlenmesine açık rıza vermiştir.';
$string['gdpr_art_9_2_a_name'] = 'Açık izin (GDPR Madde 9.2 (a))';
$string['gdpr_art_9_2_b_description'] = 'Veri işleme, Birlik veya Üye Devlet yasası veya a tarafından yetkilendirildiği ölçüde, kontrolörün veya istihdam ve sosyal güvenlik ve sosyal koruma hukuku alanındaki veri sahibinin yükümlülüklerini yerine getirmek ve belirli haklarını kullanmak amacıyla Üye Devlet kanunları uyarınca, temel haklar ve veri konusunun çıkarları için uygun güvenceler sağlayan toplu sözleşme';
$string['gdpr_art_9_2_b_name'] = 'İstihdam ve sosyal güvenlik / koruma kanunu (GDPR Madde 9.2 (b))';
$string['gdpr_art_9_2_c_description'] = 'Veri sahibinin fiziksel veya yasal olarak rıza veremeyeceği durumlarda veri sahibinin veya başka bir gerçek kişinin hayati menfaatlerini korumak için veri işleme gereklidir.';
$string['gdpr_art_9_2_c_name'] = 'Hayati çıkarların korunması (GDPR Madde 9.2 (c))';
$string['gdpr_art_9_2_d_description'] = 'İşleme, meşru faaliyetleri sırasında, bir vakıf, dernek veya politik, felsefi, dini veya sendika amacı olan kar amacı gütmeyen başka bir kuruluş tarafından ve yalnızca işlemin yalnızca aşağıdakilerle ilgili olması koşuluyla gerçekleştirilir. üyelerine veya kuruluşun eski üyelerine veya amaçlarıyla bağlantılı olarak kendisiyle düzenli teması olan kişilere ve kişisel verilerin veri sahiplerinin rızası olmadan bu organ dışında ifşa edilmediğine';
$string['gdpr_art_9_2_d_name'] = 'Bir vakıf, dernek veya diğer kar amacı gütmeyen kuruluşun üyeleri / yakın temasları ile ilgili meşru faaliyetler (GDPR Madde 9.2 (d))';
$string['gdpr_art_9_2_e_description'] = 'İşleme, veri sahibi tarafından açıkça kamuya açıklanmış kişisel verilerle ilgilidir.';
$string['gdpr_art_9_2_e_name'] = 'Veri sahibi tarafından kamuya açıklanan veriler (GDPR Madde 9.2 (e))';
$string['gdpr_art_9_2_f_description'] = 'Hukuki iddiaların tesisi, uygulanması veya savunması için veya mahkemelerin adli sıfatıyla hareket ettiği durumlarda işlem gereklidir.';
$string['gdpr_art_9_2_f_name'] = 'Yasal iddialar ve mahkeme işlemleri (GDPR Madde 9.2 (f))';
$string['gdpr_art_9_2_g_description'] = 'Veri koruma hakkının özüne saygı duyan ve temel hakları korumak için uygun ve spesifik tedbirler sağlayan, Birlik veya Üye Devlet hukuku temelinde, takip edilen amaç ile orantılı olacak şekilde, önemli kamu yararı gerekçeleri için veri işleme gereklidir ve veri konusunun çıkarları';
$string['gdpr_art_9_2_g_name'] = 'Önemli kamu yararı (GDPR Madde 9.2 (g))';
$string['gdpr_art_9_2_h_description'] = 'Koruyucu ya da mesleki tıp, çalışanın çalışma kapasitesinin değerlendirilmesi, tıbbi teşhis, sağlık ya da sosyal bakım ya da tedavi sağlanması ya da sağlık ya da sosyal bakım sistemleri ve hizmetlerinin temelde yönetimi için işlemenin gerekli olması. Birlik veya Üye Devlet yasası veya bir sağlık profesyoneli ile yapılan sözleşme uyarınca ve GDPR Madde 9\'un 3. paragrafında atıfta bulunulan koşullara ve güvencelere tabidir.';
$string['gdpr_art_9_2_h_name'] = 'Tıbbi amaçlar (GDPR Madde 9.2 (h))';
$string['gdpr_art_9_2_i_description'] = 'Birlik temelinde, sağlığa yönelik ciddi sınır ötesi tehditlere karşı koruma veya sağlık hizmetlerinin ve tıbbi ürünlerin veya tıbbi cihazların yüksek kalite ve güvenlik standartlarının sağlanması gibi halk sağlığı alanında kamu yararı nedeniyle işleme gereklidir. veya veri sahibinin haklarını ve özgürlüklerini, özellikle mesleki sırları korumak için uygun ve özel tedbirler sağlayan Üye Devlet yasası';
$string['gdpr_art_9_2_i_name'] = 'Halk sağlığı (GDPR Madde 9.2 (i))';
$string['gdpr_art_9_2_j_description'] = 'İşlem, takip edilen amaç ile orantılı olacak Birlik veya Üye Devlet yasasına dayanan 89 (1). Madde uyarınca kamu yararına arşivleme amaçları, bilimsel veya tarihi araştırma amaçları veya istatistiksel amaçlar için gereklidir, hakkın özüne saygı duyun. verilerin korunması ve temel hakların ve veri konusunun çıkarlarının korunması için uygun ve özel tedbirlerin sağlanması';
$string['gdpr_art_9_2_j_name'] = 'Kamu yararı veya bilimsel / tarihsel / istatistiksel araştırma (GDPR Madde 9.2 (j))';
$string['hide'] = 'Tümünü Daralt';
$string['httpwarning'] = 'Bu siteden indirilen hiçbir veri şifrelenemez. Lütfen sistem yöneticinize başvurun ve bu siteye SSL yüklemelerini isteyin.';
$string['inherit'] = 'Devral';
$string['lawfulbases'] = 'Yasal dayanaklar';
$string['lawfulbases_help'] = 'Kişisel verilerin işlenmesi için yasal dayanak oluşturacak en az bir seçenek seçin. Bu yasal dayanaklarla ilgili ayrıntılar için lütfen <a href="https://gdpr-info.eu/art-6-gdpr/" target="_blank"> GDPR Mad. 6.1 </a>';
$string['markcomplete'] = 'Tamamlandı olarak işaretle';
$string['markedcomplete'] = 'Sorgunuz gizlilik görevlisi tarafından tamamlandı olarak işaretlendi.';
$string['message'] = 'İleti';
$string['messagelabel'] = 'İleti';
$string['messageprovider:contactdataprotectionofficer'] = 'Veri talepleri';
$string['messageprovider:datarequestprocessingresults'] = 'Veri talebi işleme sonuçları';
$string['messageprovider:notifyexceptions'] = 'Veri talepleri istisna bildirimleri';
$string['moduleinstancename'] = '{$a->instancename} ({$a->modulename})';
$string['mypersonaldatarequests'] = 'Kişisel veri taleplerim';
$string['nameandparent'] = '{$a->parent} / {$a->name}';
$string['nameemail'] = '{$a->name} ({$a->email})';
$string['nchildren'] = '{$a} çocuklar';
$string['newrequest'] = 'Yeni istek';
$string['noactivitiestoload'] = 'Etkinlik yok';
$string['noassignedroles'] = 'Bu bağlamda atanmış rol yok';
$string['noblockstoload'] = 'Blok yok';
$string['nocategories'] = 'Henüz kategori yok';
$string['nocoursestoload'] = 'Etkinlik yok';
$string['nocoursetofilter'] = 'Kullanıcı seçebileceği herhangi bir kursa kayıtlı değil';
$string['nodatarequests'] = 'Veri talebi yok';
$string['nodatarequestsmatchingfilter'] = 'Verilen filtreyle eşleşen veri isteği yok';
$string['noexpiredcontexts'] = 'Bu bağlam düzeyinde, saklama süresinin dolduğu hiçbir veri yok.';
$string['nopersonaldatarequests'] = 'Kişisel veri talebiniz yok';
$string['nopurposes'] = 'Henüz amaç yok';
$string['nosubjectaccessrequests'] = 'İşlem yapmanız gereken hiçbir veri talebi yok';
$string['nosystemdefaults'] = 'Site amacı ve kategorisi henüz tanımlanmadı.';
$string['notset'] = 'Ayarlanmadı (varsayılan değeri kullanın)';
$string['notyetexpired'] = '{$a} (henüz süresi dolmadı)';
$string['overrideinstances'] = 'Örnekleri özel değerlerle sıfırlayın';
$string['pluginname'] = 'Veri gizliliği';
$string['pluginname_help'] = 'Veri gizliliği eklentisi';
$string['pluginregistry'] = 'Eklenti gizlilik kaydı';
$string['pluginregistrytitle'] = 'Eklenti gizlilik uyumluluğu kayıt defteri';
$string['privacy'] = 'Gizlilik';
$string['privacy:metadata:preference:tool_dataprivacy_request-filters'] = 'Şu anda veri istekleri sayfasına uygulanan filtreler.';
$string['privacy:metadata:preference:tool_dataprivacy_request-perpage'] = 'Kullanıcının bir sayfada görmeyi tercih ettiği veri taleplerinin sayısı';
$string['privacy:metadata:purpose'] = 'Bu site için yapılan veri amaçlı bilgiler.';
$string['privacy:metadata:purpose:usermodified'] = 'Amaçta değişiklik yapan kullanıcının kimliği';
$string['privacy:metadata:request'] = 'Bu site için yapılan kişisel veri taleplerinden (özne erişimi ve silme talepleri) elde edilen bilgiler.';
$string['privacy:metadata:request:comments'] = 'Talebe eşlik eden herhangi bir kullanıcı yorumu.';
$string['privacy:metadata:request:dpocomment'] = 'Taleple ilgili olarak sitenin gizlilik sorumlusu tarafından yapılan yorumlar.';
$string['privacy:metadata:request:requestedby'] = 'Başka bir kullanıcı adına yapılmışsa, istekte bulunan kullanıcının kimliği.';
$string['privacy:metadata:request:timecreated'] = 'Kullanıcı tarafından isteğin ne zaman yapıldığını gösteren zaman damgası.';
$string['privacy:metadata:request:userid'] = 'Talebin ait olduğu kullanıcının kimliği';
$string['privacyofficeronly'] = 'Yalnızca gizlilik görevlisi rolü ({$a}) atanan kullanıcılar bu içeriğe erişebilir';
$string['privacyrequestexpiry'] = 'Veri talebinin sona ermesi';
$string['privacyrequestexpiry_desc'] = 'Onaylanan veri taleplerinin süresi dolmadan önce indirilebilir. Sıfır olarak ayarlanırsa, zaman sınırı yoktur.';
$string['protected'] = 'Korumalı';
$string['protectedlabel'] = 'Bu verilerin saklanması, bir kullanıcının unutulma talebine göre daha yüksek bir yasal emsale sahiptir. Bu veriler yalnızca saklama süresi sona erdikten sonra silinecektir.';
$string['purpose'] = 'Amaç';
$string['purpose_help'] = 'Amaç, verilerin işlenme nedenini açıklar. Yeni bir amaç eklenebilir veya Devral seçilirse, daha yüksek bir bağlamdaki amaç uygulanır. Bağlamlar (düşükten yükseğe doğru): Bloklar > Etkinlik modülleri > Kurslar > Kurs kategorileri > Kullanıcı > Site.';
$string['purposecreated'] = 'Amaç oluşturuldu';
$string['purposedefault'] = 'Varsayılan amaç';
$string['purposedefault_help'] = 'Varsayılan amaç, herhangi bir yeni örneğe uygulanan amaçtır. Devral seçilirse, daha yüksek bir bağlamdaki amaç uygulanır. Bağlamlar (düşükten yükseğe): Bloklar> Etkinlik modülleri> Kurslar> Kurs kategorileri> Kullanıcı> Site.';
$string['purposeoverview'] = 'Bir amaç, depolanan veriler için amaçlanan kullanımı ve saklama politikasını tanımlar. Bu verilerin depolanmasının ve saklanmasının temeli de amaçta açıklanmaktadır.';
$string['purposes'] = 'Amaçlar';
$string['purposeslist'] = 'Veri amaçlarının listesi';
$string['purposeupdated'] = 'Amaç güncellendi';
$string['replyto'] = 'Yanıtla';
$string['requestactions'] = 'Hareketler';
$string['requestapproved'] = 'Talep onaylandı';
$string['requestby'] = 'Tarafından talep edildi';
$string['requestbydetail'] = 'Talep eden:';
$string['requestcomments'] = 'Yorumlar (değiştir | kaynağı değiştir)';
$string['requestcomments_help'] = 'Bu kutu, veri talebinizle ilgili daha fazla ayrıntı girmenizi sağlar.';
$string['requestcreation'] = 'Yaratılış';
$string['requestdenied'] = 'İstek reddedildi';
$string['requestemailintro'] = 'Bir veri talebi aldınız:';
$string['requestfor'] = 'Kullanıcı';
$string['requestmarkedcomplete'] = 'İstek tamamlandı olarak işaretlendi';
$string['requestorigin'] = 'Site';
$string['requestsapproved'] = 'İstekler onaylandı';
$string['requestsdenied'] = 'İstekler reddedildi';
$string['requeststatus'] = 'Durum';
$string['requestsubmitted'] = 'İsteğiniz gizlilik görevlisine gönderildi';
$string['requesttype'] = 'Tür';
$string['requesttype_help'] = 'Gizlilik görevlisiyle iletişim kurma nedenini seçin. Tüm kişisel verilerin silinmesinin artık siteye giriş yapamamanıza neden olacağını unutmayın.';
$string['requesttypedelete'] = 'Tüm kişisel verilerimi sil';
$string['requesttypedeleteshort'] = 'Silme';
$string['requesttypeexport'] = 'Tüm kişisel verilerimi dışa aktar';
$string['requesttypeexportallowfiltering'] = 'Kişisel bilgilerimi dışa aktar';
$string['requesttypeexportshort'] = 'Dışa aktar';
$string['requesttypeothers'] = 'Genel sorgu';
$string['requesttypeothersshort'] = 'İleti';
$string['requesttypeuser'] = '{$a->typename} ({$a->user})';
$string['requireallenddatesforuserdeletion'] = 'Bitiş tarihi olmayan kursları aktif olarak kabul edin';
$string['requireallenddatesforuserdeletion_desc'] = 'Kullanıcı geçerlilik süresi hesaplanırken çeşitli faktörler göz önünde bulundurulur:

* kullanıcının son oturum açma zamanı, kullanıcılar için saklama süresiyle karşılaştırılır; ve
* Kullanıcının herhangi bir kursa aktif olarak kayıtlı olup olmadığı.

Bir kursa aktif kayıt olup olmadığı kontrol edilirken, kursun bitiş tarihi yoksa, bu ayar o kursun aktif olarak kabul edilip edilmeyeceğini belirlemek için kullanılır.

Kursun bitiş tarihi yoksa ve bu ayar etkinleştirilmişse, kullanıcı silinemez.';
$string['requiresattention'] = 'Dikkat gerektirir.';
$string['requiresattentionexplanation'] = 'Bu eklenti, Moodle gizlilik API\'sini uygulamaz. Bu eklenti herhangi bir kişisel veri depolarsa, Moodle\'ın gizlilik sistemi aracılığıyla dışa aktarılamaz veya silinemez.';
$string['resubmitrequest'] = '{$a->kullanıcı adı} için {$a->tip} isteğini yeniden gönder';
$string['resubmitrequestasnew'] = 'Yeni istek olarak yeniden gönderin';
$string['resubmittedrequest'] = 'Mevcut {$a->kullanıcıadı} için {$a->tip} isteği iptal edildi ve yeniden gönderildi';
$string['resultdeleted'] = 'Kısa süre önce hesabınızın ve kişisel verilerinizin {$a} içinde silinmesini talep ettiniz.  Bu işlem tamamlandı ve artık oturum açamayacaksınız.';
$string['resultdownloadready'] = 'Kısa süre önce talep ettiğiniz {$a} adresindeki kişisel verilerinizin kopyası artık aşağıdaki bağlantıdan indirilebilir.';
$string['retentionperiod'] = 'Saklama süresi';
$string['retentionperiod_help'] = 'Saklama süresi, verilerin saklanması gereken süreyi belirtir. Saklama süresi sona erdiğinde veriler işaretlenir ve silinmek üzere listelenir, yönetici onayı beklenir.';
$string['retentionperiodnotdefined'] = 'Saklama süresi tanımlanmadı';
$string['retentionperiodzero'] = 'Saklama süresi yok';
$string['reviewdata'] = 'Verileri inceleyin';
$string['role'] = 'Rol';
$string['role_help'] = 'Geçersiz kılmanın uygulanması gereken rol.';
$string['roleoverride'] = 'Rol geçersiz kılma';
$string['roleoverrideoverview'] = 'Varsayılan saklama ilkesi, belirli kullanıcı rolleri için geçersiz kılınabilir, bu da daha uzun veya daha kısa bir saklama ilkesi belirlemenize olanak tanır. Bir kullanıcının süresi yalnızca tüm rollerinin süresi dolduğunda sona erer.';
$string['roleoverrides'] = 'Rol geçersiz kılmaları';
$string['selectbulkaction'] = 'Lütfen bir toplu işlem seçin.';
$string['selectcourses'] = 'Dışa aktarılacak kursları seçin';
$string['selectdatarequests'] = 'Lütfen veri isteklerini seçin.';
$string['selectuserdatarequest'] = '{$a->kullanıcıadı}\'nın {$a->istek türü} veri isteğini seçin.';
$string['send'] = 'Gönder';
$string['sensitivedatareasons'] = 'Hassas kişisel veri işleme nedenleri';
$string['sensitivedatareasons_help'] = 'Bu amaca bağlı hassas kişisel verilerin işlenmesi yasağını muaf tutan bir veya daha fazla geçerli neden seçin. Daha fazla bilgi için lütfen <a href="https://gdpr-info.eu/art-9-gdpr/" target="_blank">GDPR Md. 9.2</a>';
$string['setdefaults'] = 'Varsayılanları ayarlayın';
$string['showdataretentionsummary'] = 'Veri saklama özetini göster';
$string['showdataretentionsummary_desc'] = 'Etkinleştirilirse, sayfa alt bilgisinde ve kullanıcı profillerinde veri saklama özetine bir bağlantı görüntülenir.';
$string['statusapproved'] = 'Onaylandı';
$string['statusawaitingapproval'] = 'Onay Bekleniyor';
$string['statuscancelled'] = 'İptal edildi';
$string['statuscomplete'] = 'Tamamlayınız';
$string['statusdeleted'] = 'Silindi';
$string['statusdetail'] = 'Durum:';
$string['statusexpired'] = 'Süresi doldu';
$string['statuspending'] = 'Bekliyor';
$string['statuspreprocessing'] = 'Önişleme';
$string['statusprocessing'] = 'İşleme';
$string['statusready'] = 'İndirmeye hazır';
$string['statusrejected'] = 'Reddedildi';
$string['subjectscope'] = 'Konu kapsamı';
$string['subjectscope_help'] = 'Konu kapsamı, bu bağlamda atanabilecek rolleri listeler.';
$string['summary'] = 'Kayıt defteri yapılandırma özeti';
$string['systemconfignotsetwarning'] = 'Site amacı ve kategorisi tanımlanmadı. Bunlar tanımlanmadığında, silme istekleri işlenirken tüm veriler kaldırılacaktır.';
$string['tobedeleted'] = 'Silinecek veriler';
$string['unexpiredrolewithretention'] = '{$a->retention} (Süresi dolmamış)';
$string['user'] = 'Kullanıcı';
$string['userlistexplanation'] = 'Bu eklenti temel sağlayıcıya sahiptir, ancak gizlilik işlevselliğinin tam desteği için kullanıcı listesi sağlayıcısını da uygulamalıdır.';
$string['userlistnoncompliant'] = 'Kullanıcı listesi sağlayıcısı eksik';
$string['viewrequest'] = 'İsteği görüntüleyin';
$string['visible'] = 'Tümünü genişlet';
