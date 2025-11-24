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
 * Strings for component 'customcert', language 'tr', version '4.5'.
 *
 * @package     customcert
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activity'] = 'Aktivite';
$string['addcertpage'] = 'Sayfa ekle';
$string['addelement'] = 'Öğe ekle';
$string['awardedto'] = 'Ödüllendirildi';
$string['cannotverifyallcertificates'] = 'Sitedeki tüm sertifikaları doğrulama izniniz yok.';
$string['certificate'] = 'Sertifika';
$string['code'] = 'Kod';
$string['copy'] = 'Kopyala';
$string['coursetimereq'] = 'Kursun zorunlu dakikaları';
$string['coursetimereq_help'] = 'Sertifikayı alabilmek için bir öğrencinin kursa girmesi gereken minimum süreyi dakika cinsinden girin.';
$string['createtemplate'] = 'Şablon oluştur';
$string['customcert:addinstance'] = 'Yeni bir özel sertifika örneği ekle';
$string['customcert:manage'] = 'Özel bir sertifikayı yönetme';
$string['customcert:manageemailothers'] = 'E-posta başkaları ayarını yönet';
$string['customcert:manageemailstudents'] = 'E-posta öğrencileri ayarını yönetin';
$string['customcert:manageemailteachers'] = 'E-posta öğretmenleri ayarını yönet';
$string['customcert:manageprotection'] = 'Koruma ayarını yönetin';
$string['customcert:managerequiredtime'] = 'Gereken süre ayarını yönetin';
$string['customcert:manageverifyany'] = 'Doğrulama ayarını yönetin';
$string['customcert:receiveissue'] = 'Bir sertifika alın';
$string['customcert:verifyallcertificates'] = 'Sitedeki tüm sertifikaları doğrulayın';
$string['customcert:verifycertificate'] = 'Bir sertifikayı doğrulayın';
$string['customcert:view'] = 'Özel bir sertifikayı görüntüleme';
$string['customcert:viewallcertificates'] = 'Tüm sertifikaları görüntüleyin';
$string['customcert:viewreport'] = 'Kurs raporunu görüntüle';
$string['customcertsettings'] = 'Özel sertifika ayarları';
$string['deletecertpage'] = 'Sayfayı sil';
$string['deleteconfirm'] = 'Onayı sil';
$string['deleteelement'] = 'Öğeyi sil';
$string['deleteelementconfirm'] = 'Bu öğeyi silmek istediğinizden emin misiniz?';
$string['deleteissueconfirm'] = 'Bu sertifika sorununu silmek istediğinizden emin misiniz?';
$string['deleteissuedcertificates'] = 'Verilen sertifikaları silin';
$string['deletepageconfirm'] = 'Bu sertifika sayfasını silmek istediğinizden emin misiniz?';
$string['deletetemplateconfirm'] = 'Bu sertifika şablonunu silmek istediğinizden emin misiniz?';
$string['description'] = 'Açıklama';
$string['duplicate'] = 'Yinelenen';
$string['duplicateconfirm'] = 'Yinelenen onay';
$string['duplicatetemplateconfirm'] = 'Bu sertifika şablonunu çoğaltmak istediğinizden emin misiniz?';
$string['editcustomcert'] = 'Sertifikayı düzenleyin';
$string['editelement'] = 'Öğeyi düzenle';
$string['edittemplate'] = 'Şablonu düzenle';
$string['elementname'] = 'Adı düzenle';
$string['elementname_help'] = 'Bu, bir sertifika düzenlerken bu öğeyi tanımlamak için kullanılan ad olacaktır. Not: bu, PDF\'de görüntülenmeyecektir.';
$string['elementplugins'] = 'Element eklentileri';
$string['elements'] = 'Öğeler';
$string['elements_help'] = 'Sertifika üzerinde görüntülenecek öğelerin listesi.

Lütfen dikkat: Elemanlar bu sırada gösterilir. Sipariş, her bir öğenin yanındaki okları kullanarak değiştirilebilir.';
$string['elementwidth'] = 'Genişlik';
$string['elementwidth_help'] = 'Elemanın genişliğini belirtin - \'0\' genişlik kısıtlaması olmadığı anlamına gelir.';
$string['emailnonstudentbody'] = '\'{$a->coursefullname}\' dersi için \'{$a->userfullname}\' için \'{$a->certificatename}\' sertifikası eklidir.';
$string['emailnonstudentbodyplaintext'] = '\'{$a->coursefullname}\' kursu için \'{$a->userfullname}\' için \'{$a->certificatename}\' sertifikası eklidir.';
$string['emailnonstudentcertificatelinktext'] = 'Sertifika raporunu görüntüle';
$string['emailnonstudentgreeting'] = 'Selam';
$string['emailothers'] = 'Başkalarına e-posta gönder';
$string['emailothers_help'] = 'Ayarlanırsa, burada listelenen e-posta adreslerini (virgülle ayrılmış olarak), kullanılabilir olduğunda sertifikanın bir kopyasıyla birlikte e-postayla gönderir. <strong> Uyarı: </strong> Sertifikayı oluşturmayı bitirmeden önce bu alanı ayarlarsanız, adreslere eksik bir sertifika e-postayla gönderilir.';
$string['emailstudentbody'] = '\'{$a->coursefullname}\' dersi için \'{$a->certificatename}\' sertifikanız ektedir.';
$string['emailstudentbodyplaintext'] = '\'{$a->coursefullname}\' dersi için \'{$a->certificatename}\' sertifikanız ektedir.';
$string['emailstudentcertificatelinktext'] = 'Sertifikayı Görüntüle';
$string['emailstudentgreeting'] = 'Sayın {$a}';
$string['emailstudents'] = 'Öğrencilere e-posta gönder';
$string['emailstudents_help'] = 'Ayarlanırsa, bu sertifika kullanıma sunulduğunda öğrencilere sertifikanın bir kopyasını e-posta ile gönderecektir. <strong> Uyarı: </strong> Sertifikayı oluşturmayı tamamlamadan önce bunu \'Evet\' olarak ayarlarsanız, öğrenciye eksik bir sertifika e-postayla gönderilir.';
$string['emailteachers'] = 'E-posta öğretmenleri';
$string['emailteachers_help'] = 'Ayarlanırsa, bu sertifika kullanılabilir olduğunda öğretmenlere sertifikanın bir kopyasını e-posta ile gönderecektir. <strong> Uyarı: </strong> Sertifikayı oluşturmayı bitirmeden önce bunu \'Evet\' olarak ayarlamak öğretmene tamamlanmamış bir sertifika e-posta gönderecektir.';
$string['exampledatawarning'] = 'Bu değerlerden bazıları, elemanların konumlandırılmasının mümkün olmasını sağlamak için sadece bir örnek olabilir.';
$string['font'] = 'Yazı tipi';
$string['font_help'] = 'Bu öğeyi oluştururken kullanılan yazı tipi.';
$string['fontcolour'] = 'Renk';
$string['fontcolour_help'] = 'Yazı tipi rengi.';
$string['fontsize'] = 'Boyut';
$string['fontsize_help'] = 'Yazı tipinin punto cinsinden boyutu.';
$string['getcustomcert'] = 'Sertifikayı Görüntüle';
$string['gradeoutcome'] = 'Sonuç';
$string['height'] = 'Yükseklik';
$string['height_help'] = 'Bu, PDF belgesinin mm cinsinden yüksekliğidir. Referans için bir A4 kağıt parçası 297mm yüksekliğinde ve bir harf 279mm yüksekliğinde.';
$string['invalidcode'] = 'Geçersiz kod sağlandı.';
$string['invalidcolour'] = 'Geçersiz renk seçildi, lütfen geçerli bir HTML renk adı veya altı basamaklı veya üç basamaklı onaltılık renk girin.';
$string['invalidheight'] = 'Yükseklik 0\'dan büyük geçerli bir sayı olmalıdır.';
$string['invalidmargin'] = 'Kenar boşluğu, 0\'dan büyük geçerli bir sayı olmalıdır.';
$string['invalidposition'] = '{$a} konumu için lütfen bir pozitif sayı seçin.';
$string['invalidwidth'] = 'Genişlik, 0\'dan büyük geçerli bir sayı olmalıdır.';
$string['landscape'] = 'Biçimleme';
$string['leftmargin'] = 'Sol kenar boşluğu';
$string['leftmargin_help'] = 'Bu, PDF belgesinin mm cinsinden sol kenar boşluğudur.';
$string['listofissues'] = 'Alıcılar: {$a}';
$string['load'] = 'Yükle';
$string['loadtemplate'] = 'Şablonu yükle';
$string['loadtemplatemsg'] = 'Bu şablonu yüklemek istediğinizden emin misiniz? Bu, bu sertifika için mevcut tüm sayfaları ve öğeleri kaldıracaktır.';
$string['managetemplates'] = 'Şablonları yönet';
$string['managetemplatesdesc'] = 'Bu bağlantı sizi kurslarda Özel sertifika etkinlikleri tarafından kullanılan şablonları yönetebileceğiniz yeni bir ekrana götürecektir.';
$string['modify'] = 'Değiştirme';
$string['modulename'] = 'Özel sertifika';
$string['modulename_help'] = 'Bu modül, PDF sertifikalarının dinamik olarak oluşturulmasını sağlar.';
$string['modulename_link'] = 'Custom_certificate_module';
$string['modulenameplural'] = 'Özel sertifikalar';
$string['mycertificates'] = 'Sertifikalarım';
$string['mycertificatesdescription'] = 'Bunlar, e-posta ile veya manuel olarak indirerek size verilen sertifikalardır.';
$string['name'] = 'Adı';
$string['nametoolong'] = 'İsim için izin verilen maksimum uzunluğu aştınız';
$string['nocustomcerts'] = 'Bu ders için sertifika yok';
$string['noimage'] = 'Resim yok';
$string['norecipients'] = 'Alıcı yok';
$string['notemplates'] = 'Şablon yok';
$string['notissued'] = 'Ödül verilmedi';
$string['notverified'] = 'Ödül verilmedi';
$string['options'] = 'Seçenekler';
$string['page'] = 'Sayfa {$a}';
$string['pluginadministration'] = 'Özel sertifika yönetimi';
$string['pluginname'] = 'Özel sertifika';
$string['portrait'] = 'Vesika';
$string['posx'] = 'Pozisyon X';
$string['posx_help'] = 'Bu, elemanın referans noktasının x yönünde bulunmasını istediğiniz sol üst köşeden mm cinsinden konumdur.';
$string['posy'] = 'Pozisyon Y';
$string['posy_help'] = 'Bu, öğenin referans noktasının y yönünde bulunmasını istediğiniz sol üst köşeden mm cinsinden konumdur.';
$string['preventcopy'] = 'Kopyalamayı önle';
$string['preventcopy_desc'] = 'Kopyalama eylemine karşı korumayı etkinleştirin.';
$string['preventmodify'] = 'Değişikliği önle';
$string['preventmodify_desc'] = 'Değişiklik eylemine karşı korumayı etkinleştirin.';
$string['preventprint'] = 'Baskıyı önle';
$string['preventprint_desc'] = 'Baskı eyleminden korumayı etkinleştirin.';
$string['print'] = 'Yazdır';
$string['privacy:metadata:customcert_issues'] = 'Verilen sertifikaların listesi';
$string['privacy:metadata:customcert_issues:code'] = 'Sertifikaya ait olan kod';
$string['privacy:metadata:customcert_issues:customcertid'] = 'Sertifikanın kimliği';
$string['privacy:metadata:customcert_issues:emailed'] = 'Sertifikanın e-postayla gönderilip gönderilmediği';
$string['privacy:metadata:customcert_issues:timecreated'] = 'Sertifikanın verildiği zaman';
$string['privacy:metadata:customcert_issues:userid'] = 'Sertifikayı veren kullanıcının kimliği';
$string['rearrangeelements'] = 'Parçaları yeniden konumlandır';
$string['rearrangeelementsheading'] = 'Sertifika üzerinde konumlandırıldıklarını değiştirmek için öğeleri sürükleyip bırakın.';
$string['receiveddate'] = 'Tarihinde ödüllendirildi';
$string['refpoint'] = 'Referans noktası konumu';
$string['refpoint_help'] = 'Referans noktası, x ve y koordinatlarının belirlendiği bir öğenin konumudır. Elemanın ortasında veya köşelerinde görünen \'+\' ile gösterilir.';
$string['replacetemplate'] = 'Değiştir';
$string['requiredtimenotmet'] = 'Bu sertifikaya erişebilmeniz için derste en az {$a->requiredtime} dakika geçirmelisiniz.';
$string['rightmargin'] = 'Sağ kenar boşluğu';
$string['rightmargin_help'] = 'Bu, PDF belgesinin mm cinsinden sağ kenar boşluğudur.';
$string['save'] = 'Kaydıt';
$string['saveandclose'] = 'Kaydet ve kapat';
$string['saveandcontinue'] = 'Kaydet ve devam et';
$string['savechanges'] = 'Değişiklikleri kaydet';
$string['savechangespreview'] = 'Değişiklikleri kaydet ve önizle';
$string['savetemplate'] = 'Şablonu kaydet';
$string['search:activity'] = 'Özel sertifika - etkinlik bilgileri';
$string['setprotection'] = 'Korumayı ayarla';
$string['setprotection_help'] = 'Kullanıcıların bu sertifikada performans göstermesini önlemek istediğiniz işlemleri seçin.';
$string['showposxy'] = 'X ve Y konumunu göster';
$string['showposxy_desc'] = 'Bu, bir öğe düzenlenirken X ve Y konumunu göstererek kullanıcının konumu doğru bir şekilde belirlemesine olanak tanır.

Bu amaçla yalnızca sürükle ve bırak arayüzünü kullanmayı planlıyorsanız bu gerekli değildir.';
$string['taskemailcertificate'] = 'E-posta gönderme sertifikalarını yönetir.';
$string['templatename'] = 'Şablon adı';
$string['templatenameexists'] = 'Bu şablon adı şu an kullanımda, lütfen başka birini seçin.';
$string['topcenter'] = 'Orta';
$string['topleft'] = 'Sol üst';
$string['topright'] = 'Sağ üst';
$string['type'] = 'Tür';
$string['uploadimage'] = 'Fotoğraf yükleniyor';
$string['uploadimagedesc'] = 'Bu bağlantı sizi resim yükleyebileceğiniz yeni bir ekrana götürecektir.
Bu yöntem kullanılarak yüklenen resimler sitenizin tamamında sertifika oluşturabilen tüm kullanıcılar tarafından kullanılabilir olacaktır.';
$string['verified'] = 'Doğrulandı';
$string['verify'] = 'Doğrulayın';
$string['verifyallcertificates'] = 'Tüm sertifikaların doğrulanmasına izin ver';
$string['verifyallcertificates_desc'] = 'Bu ayar etkinleştirildiğinde, herhangi bir kişi (oturum açmamış kullanıcılar dahil), her sertifika için doğrulama bağlantısına gitmek yerine sitedeki herhangi bir sertifikayı doğrulamak için \'{$a}\' bağlantısını ziyaret edebilir.

Not - bu yalnızca sertifika ayarlarında \'Herkesin bir sertifikayı doğrulamasına izin ver\' seçeneğinin \'Evet\' olarak ayarlandığı sertifikalar için geçerlidir.';
$string['verifycertificate'] = 'Sertifikayı doğrula';
$string['verifycertificateanyone'] = 'Herkesin bir sertifikayı doğrulamasına izin ver';
$string['verifycertificateanyone_help'] = 'Bu ayar, sertifika doğrulama bağlantısına sahip olan herkesin (oturum açmamış kullanıcılar dahil) bir sertifikayı doğrulamasını sağlar.';
$string['verifycertificatedesc'] = 'Bu bağlantı sizi sitedeki sertifikaları doğrulayabileceğiniz yeni bir ekrana götürecektir.';
$string['width'] = 'Genişlik';
$string['width_help'] = 'Bu, PDF belgesinin mm cinsinden genişliği. Referans için bir A4 kağıt parçası 210mm genişliğinde ve bir harf 216mm genişliğinde.';
