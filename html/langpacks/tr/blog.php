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
 * Strings for component 'blog', language 'tr', version '4.5'.
 *
 * @package     blog
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addnewentry'] = 'Yeni girdi ekle';
$string['addnewexternalblog'] = 'Harici bir blog kaydet';
$string['assocdescription'] = 'Bir kurs/etkinlik eklentisi hakkında yazıyorsanız onları burada seçin.';
$string['associated'] = '{$a} ile ilişkili';
$string['associatewithcourse'] = '{$a->coursename} kursu hakkında blog';
$string['associatewithmodule'] = '{$a->modtype}: {$a->modname} hakkında blog';
$string['association'] = 'İlişki';
$string['associations'] = 'İlişkiler';
$string['associationunviewable'] = 'Bu girdi, bir kurs kendisiyle ilişkilendirilinceye veya \'Yayınlanacak\' alanı değiştirilene kadar başkaları tarafından görülemez.';
$string['author'] = 'Yazar';
$string['autotags'] = 'Bu etiketleri ekle';
$string['autotags_help'] = 'Harici blogdan yerel blogunuza kopyalanan her blog girişine otomatik olarak eklemek istediğiniz bir veya daha fazla yerel etiketi (virgül ile ayrılmış olarak) girin.';
$string['backupblogshelp'] = 'Etkinleştirilirse, bloglar, SITE otomatik yedeklemelerine dahil edilir.';
$string['blockexternalstitle'] = 'Harici bloglar';
$string['blog'] = 'Blog';
$string['blogaboutthis'] = 'Bu {$a->type} hakkında blog';
$string['blogaboutthiscourse'] = 'Bu kurs hakkında bilgi ekle';
$string['blogaboutthismodule'] = 'Bu {$a} hakkında bir bilgi ekle';
$string['blogadministration'] = 'Blog yönetimi';
$string['blogattachment'] = 'Blog eki';
$string['blogdeleteconfirm'] = 'Bu blog girdisi \'{$a}\' silinsin mi?';
$string['blogdisable'] = 'Blog etkinleştirilmemiş!';
$string['blogentries'] = 'Blog girdileri';
$string['blogentriesabout'] = '{$a} hakkında blog girdileri';
$string['blogentriesbygroupaboutcourse'] = '{$a->group} / {$a->course} hakkında blog girdileri';
$string['blogentriesbygroupaboutmodule'] = '{$a->group} / {$a->mod} hakkında blog girdileri';
$string['blogentriesbyuseraboutcourse'] = '{$a->user} tarafından {$a->course} hakkında blog girdileri';
$string['blogentriesbyuseraboutmodule'] = '{$a->user} tarafından bu {$a->mod} hakkında blog girdileri';
$string['blogentrybyuser'] = '{$a} tarafından blog girdileri';
$string['blogpreferences'] = 'Blog seçenekleri';
$string['blogs'] = 'Bloglar';
$string['blogscourse'] = 'Kurs blogları';
$string['blogssite'] = 'Site blogları';
$string['blogtags'] = 'Blog etiketleri';
$string['cannoteditentryorblog'] = 'Bu girişi veya blogu düzenleyemezsiniz';
$string['cannotviewcourseblog'] = 'Bu kurdaki blogları görmek için gerekli izinleriniz yok';
$string['cannotviewcourseorgroupblog'] = 'Bu kursdaki/gruptaki blogları görmek için gerekli izinleriniz yok';
$string['cannotviewsiteblog'] = 'Sitedeki tüm blogları görmek için gerekli izinleriniz yok';
$string['cannotviewuserblog'] = 'Kullanıcı bloglarını görmek için gerekli izinleriniz yok';
$string['configexternalblogcrontime'] = 'Moodle, harici blogları ne sıklıkta yeni girdiler için kontrol ediyor.';
$string['configmaxexternalblogsperuser'] = 'Her kullanıcının kendi Moodle bloguna bağlanmasına izin verilen harici blogların sayısı.';
$string['configuseblogassociations'] = 'Blog girdilerinin kurslar ve kurs modülleri ile ilişkilendirilmesini sağlar.';
$string['configuseexternalblogs'] = 'Kullanıcıların harici blog yayınlarını belirtmelerini sağlar. Moodle düzenli olarak bu blog yayınlarını kontrol eder ve yeni girdileri o kullanıcının yerel bloguna kopyalar.';
$string['courseblog'] = 'Kurs blogu: {$a}';
$string['courseblogdisable'] = 'Kurs blogları etkinleştirilmedi';
$string['courseblogs'] = 'Kullanıcılar, sadece kursda paylaşıma açılan kullanıcı bloglarını görebilir';
$string['deleteblogassociations'] = 'Blog ilişkilendirmeleri';
$string['deleteblogassociations_help'] = 'İşaretliyse, blog girişleri artık bu kursla veya herhangi bir kurs faaliyetleri veya kaynakları ile ilişkilendirilmez. Blog girdileri de silinmeyecek.';
$string['deleteentry'] = 'Girdiyi sil';
$string['deleteexternalblog'] = 'Bu harici  bloğun kaydını sil';
$string['deleteotagswarn'] = 'Bu etiketleri bütün blog mesajlarından ve sistemden kaldırmak istediğinizden emin misiniz?';
$string['description'] = 'Açıklama';
$string['description_help'] = 'Harici blogunuzun içeriğini özetleyen bir cümle yazın. (Hiçbir açıklama sağlanmazsa, harici blogunuzda kayıtlı açıklama kullanılır).';
$string['donothaveblog'] = 'Kendinize ait bir bloğunuz yok, üzgünüz.';
$string['editentry'] = 'Blog girdisi düzenle';
$string['editexternalblog'] = 'Bu harici blogu düzenle';
$string['emptybody'] = 'Blog metni boş olamaz';
$string['emptyrssfeed'] = 'Girdiğiniz URL, geçerli bir RSS akışını göstermiyor';
$string['emptytitle'] = 'Blog başlığı boş olamaz';
$string['emptyurl'] = 'Gecerli bir RSS kaynagının adresine girmelisin';
$string['entrybody'] = 'Blog metni';
$string['entrybodyonlydesc'] = 'Açıklama';
$string['entryerrornotyours'] = 'Bu girdi size ait değil';
$string['entrysaved'] = 'Girdiniz kaydedildi';
$string['entrytitle'] = 'Girdi başlığı';
$string['entrytitlewithlink'] = 'Bağlantı içeren giriş başlığı';
$string['eventblogassociationadded'] = 'Blog ilişkilendirmesi oluşturuldu';
$string['eventblogassociationdeleted'] = 'Blog ilişkilendirmesi silindi';
$string['eventblogentriesviewed'] = 'Blog girdileri görüntülendi';
$string['eventblogexternaladded'] = 'Kayıtlı dış blog';
$string['eventblogexternalremoved'] = 'Harici blog kayıtsız';
$string['eventblogexternalupdated'] = 'Harici blog güncellendi';
$string['evententryadded'] = 'Blog girişi eklendi';
$string['evententrydeleted'] = 'Blog kaydı silindi';
$string['evententryupdated'] = 'Blog güncellendi';
$string['eventexternalblogsviewed'] = 'Görüntülenen harici kayıtlı bloglar';
$string['externalblogcrontime'] = 'Harici blog cron zamanlaması';
$string['externalblogdeleteconfirm'] = 'Bu harici blog kaldırılsın mı?';
$string['externalblogdeleted'] = 'Harici blog kaldırıldı';
$string['externalblogs'] = 'Harici bloglar';
$string['feedisinvalid'] = 'Bu akış geçersiz';
$string['feedisvalid'] = 'Bu akış geçerli';
$string['filterblogsby'] = 'Girdileri şuna göre filtrele...';
$string['filtertags'] = 'Etiketleri filtrele';
$string['filtertags_help'] = 'Bu özelliği, kullanmak istediğiniz girdileri süzmek için kullanabilirsiniz. Burada etiketleri (virgülle ayrılmış olarak) belirlerseniz, yalnızca bu etiketleri içeren girdiler harici blog\'dan kopyalanır.';
$string['groupblog'] = 'Grup blogu: {$a}';
$string['groupblogdisable'] = 'Grup blogu etkin değil';
$string['groupblogentries'] = '{$a->coursename} ile {$a->groupname} grubuyla ilişkili blog girdileri';
$string['groupblogs'] = 'Kullanıcılar, sadece grupta paylaşıma açılan kullanıcı bloglarını görebilir';
$string['incorrectblogfilter'] = 'Hatalı blog filtreleme tipi';
$string['intro'] = 'Bu RSS kaynağı bir veya birden fazla blogdan otomatik olarak oluşturuldu.';
$string['invalidgroupid'] = 'Hatalı grup ID';
$string['invalidurl'] = 'Bu adrese erişilemiyor';
$string['linktooriginalentry'] = 'Orijinal blog girdisi';
$string['maxexternalblogsperuser'] = 'Her kullanıcı için en fazla harici blog sayısı';
$string['myprofileuserblogs'] = 'Tüm blog girdilerini görüntüle';
$string['name'] = 'İsim';
$string['name_help'] = 'Harici blog\'unuz için açıklayıcı bir ad girin. (Hiçbir ad sağlanmazsa harici blogunuzun başlığı kullanılacaktır).';
$string['noentriesyet'] = 'Henüz gösterilecek girdi yok';
$string['noguestpost'] = 'Konuklar blog gönderemezler!';
$string['nopermissionstodeleteentry'] = 'Bu blog girdisini silmek için gerekli izinlere sahip değilsiniz.';
$string['norighttodeletetag'] = 'Bu etiketi silme hakkınız yok - {$a}';
$string['nosuchentry'] = 'Böyle bir blog girdisi yok';
$string['notallowedtoedit'] = 'Bu girdiyi düzenleme izniniz yok';
$string['numberofentries'] = 'Girdiler: {$a}';
$string['numberoftags'] = 'Gösterilecek etiket sayısı';
$string['page-blog-edit'] = 'Blog düzenleme sayfaları';
$string['page-blog-index'] = 'Blog liste sayfaları';
$string['page-blog-x'] = 'Tüm blog sayfaları';
$string['pagesize'] = 'Sayfa başına blog sayısı';
$string['permalink'] = 'SabitBağlantı';
$string['personalblogs'] = 'Kullanıcılar sadece kendi bloglarını görebilir';
$string['preferences'] = 'Blog tercihleri';
$string['privacy:metadata:core_comments'] = 'Blog girdileriyle ilgili yorumlar';
$string['privacy:metadata:core_files'] = 'Blog girdilerine eklenen dosyalar';
$string['privacy:metadata:core_tag'] = 'Blog girdileriyle ilgili etiketler';
$string['privacy:metadata:external'] = 'Harici bir RSS beslemesine bağlantı';
$string['privacy:metadata:external:description'] = 'besleme açıklaması';
$string['privacy:metadata:external:filtertags'] = 'Girişleri filtrelemek için etiketlerin listesi';
$string['privacy:metadata:external:name'] = 'Beslemenin adı';
$string['privacy:metadata:external:timefetched'] = 'Beslenemesin en son getirildiği zaman';
$string['privacy:metadata:external:timemodified'] = 'İlişkilendirmenin en son değiştirildiği zaman';
$string['privacy:metadata:external:url'] = 'Yayının URL\'si';
$string['privacy:metadata:external:userid'] = 'Harici blog girişini ekleyen kullanıcının kimliği';
$string['privacy:metadata:post'] = 'Blog girdileri ile ilgili bilgiler';
$string['privacy:metadata:post:content'] = 'Harici bir blog girişinin içeriği';
$string['privacy:metadata:post:created'] = 'Blog girdisinin oluşturulduğu tarih';
$string['privacy:metadata:post:lastmodified'] = 'Blog girdisinin en son değiştirildiği tarih';
$string['privacy:metadata:post:publishstate'] = 'Girişin başkaları tarafından görülebilir olup olmadığı';
$string['privacy:metadata:post:subject'] = 'Blog girişi başlığı';
$string['privacy:metadata:post:summary'] = 'Blog giriş metni';
$string['privacy:metadata:post:uniquehash'] = 'Harici bir giriş için benzersiz bir tanımlayıcı, genellikle bir URL';
$string['privacy:metadata:post:userid'] = 'Blog girdisini ekleyen kullanıcının kimliği';
$string['privacy:metadata:post:usermodified'] = 'Girişi en son değiştiren kullanıcı';
$string['privacy:path:blogassociations'] = 'İlişkili blog yazıları';
$string['privacy:unknown'] = 'Bilinmiyor';
$string['published'] = 'Yayınlanan';
$string['publishto'] = 'Yayınla';
$string['publishto_help'] = 'Ayarlayabileceğiniz 3 seçenek var:

* Kendiniz (taslak) - Sadece siz ve yöneticiler bu kaydı görebilir.
* Bu sitedeki herkes - Bu sitedeki kayıtlı kişiler bu kaydı okuyabilir.
* Bu dünyadaki herkes - Herkes, site ziyaretçileri de dahil. bu kaydı okuyabilir.';
$string['publishtocourse'] = 'Sizinle kurs paylaşan kullanıcılar';
$string['publishtocourseassoc'] = 'İlişkili kurs üyeleri';
$string['publishtocourseassocparam'] = '{$a} üyeleri';
$string['publishtodraft'] = 'Taslak';
$string['publishtogroup'] = 'Bir grubu sizinle paylaşan kullanıcılar';
$string['publishtogroupassoc'] = 'İlgili kurs grubundaki üyeleriniz';
$string['publishtogroupassocparam'] = '{$a} daki grup üyeleriniz';
$string['publishtonoone'] = 'Kendinize (taslak)';
$string['publishtosite'] = 'Bu sitedeki herkese';
$string['publishtoworld'] = 'Dünyadaki herkese';
$string['readfirst'] = 'Önce bunu oku';
$string['relatedblogentries'] = 'İlişkili blog girdileri';
$string['retrievedfrom'] = 'Alınan yer';
$string['rssfeed'] = 'Blog RSS kaynağı';
$string['searchterm'] = 'Ara: {$a}';
$string['settingsupdatederror'] = 'Bir hata oluştu, blog seçenekleri ayarları güncellenemedi';
$string['siteblogdisable'] = 'Site blogu etkin değil';
$string['siteblogheading'] = 'Site blog\'u';
$string['siteblogs'] = 'Tüm site kullanıcıları tüm blog girdilerini görebilir';
$string['tagdatelastused'] = 'Son kullanım tarihi';
$string['tagparam'] = 'Etiket: {$a}';
$string['tags'] = 'Etiketler';
$string['tagsort'] = 'Etiket görünümünü sırala';
$string['tagtext'] = 'Etiket metni';
$string['timefetched'] = 'Son eşitleme zamanı';
$string['timewithin'] = 'Şu gün içinde kullanılan etiketleri göster';
$string['updateentrywithid'] = 'Girdi güncelleniyor';
$string['url'] = 'RSS besleme URL\'si';
$string['url_help'] = 'Harici blogunuzun RSS besleme URL\'sini girin.';
$string['useblogassociations'] = 'Blog ilişkilendirmelerini etkinleştir';
$string['useexternalblogs'] = 'Harici blogları etkinleştir';
$string['userblog'] = 'Kullanıcı blogu: {$a}';
$string['userblogentries'] = '{$a} blog girdileri';
$string['valid'] = 'Geçerli';
$string['viewallblogentries'] = '{$a} hakkında tüm girdiler';
$string['viewallmodentries'] = '{$a->type} tipi hakkında tüm girdilere bak';
$string['viewallmyentries'] = 'Tüm kayıtlarımı göster';
$string['viewblogentries'] = '{$a->type} tipi hakkında girdiler';
$string['viewblogsfor'] = 'Tüm girdilere bak...';
$string['viewcourseblogs'] = 'Bu kurs için tüm girdilere bak';
$string['viewentriesbyuseraboutcourse'] = '{$a} tarafından bu kursla ilgili girdileri görüntüle';
$string['viewgroupblogs'] = 'Grup girdilerine bak...';
$string['viewgroupentries'] = 'Grup girdileri';
$string['viewmodblogs'] = 'Eklenti girdilerine bak...';
$string['viewmodentries'] = 'Eklenti girdileri';
$string['viewmyentries'] = 'Benim girdilerim';
$string['viewmyentriesaboutcourse'] = 'Bu kursla ilgili girdileri göster';
$string['viewmyentriesaboutmodule'] = 'Bu {$a} ile ilgili girdileri görüntüle';
$string['viewsiteentries'] = 'Tüm girdilere bak';
$string['viewuserentries'] = '{$a} adlı kullanıcının tüm girdilerine bak';
$string['worldblogs'] = 'Tüm dünyaya açık olarak ayarlanmış blogları görebilir';
$string['wrongexternalid'] = 'Harici blog ID yanlış';
