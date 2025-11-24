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
 * Strings for component 'block_configurable_reports', language 'tr', version '4.5'.
 *
 * @package     block_configurable_reports
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitypost'] = 'Ektiknlik mesajları';
$string['activityview'] = 'Etkinlik görünümleri';
$string['addreport'] = 'Rapor ekle';
$string['anyone'] = 'Herkes';
$string['anyone_summary'] = 'Kampüsdeki herhangi bir kullanıcının bu raporu görmesi mümkün olacak';
$string['availablemarks'] = 'Kullanılabilir notlar';
$string['average'] = 'Ortalama';
$string['badconditionexpr'] = 'Hatalı Koşul ifadesi';
$string['badsize'] = 'Yanlış boyut, o veya % px olmalıdır';
$string['badtablewidth'] = 'Yanlış genişlik, genişlik % veya mutlak değer olmalıdır';
$string['blockname'] = 'Yapılandırılabilir raporlar';
$string['calcs'] = 'Hesaplamalar';
$string['categories'] = 'Kategoriler';
$string['categoryfield'] = 'Kategori alanı';
$string['categoryfieldorder'] = 'Kategori alan sıralaması';
$string['ccoursefield'] = 'Kurs alan koşulu';
$string['cellalign'] = 'Hürce hizalama';
$string['cellsize'] = 'Hücre büyüklüğü';
$string['cellwrap'] = 'Hücre kaydırma';
$string['cohorts'] = 'Topluluk';
$string['column'] = 'Sütun';
$string['columnandcellproperties'] = 'Sütün ve hücre özellikleri';
$string['columncalculations'] = 'Sütun hesaplamaları';
$string['columns'] = 'Sütünlar';
$string['comp_calcs'] = 'Hesaplamalar';
$string['comp_calcs_help'] = '<p> Burada sütunlar için hesaplamalar ekleyebilirsiniz, örn: kurslarına kaydolan ortalama  kullanıcı sayısı </p>

<p> Yardım için bakınız: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Eklenti belgeleri</a> </p>';
$string['comp_calculations'] = 'Hesaplamalar';
$string['comp_calculations_help'] = '<p> Burada sütunlar için hesaplamalar ekleyebilirsiniz, örn: kurslarına kaydolan ortalama  kullanıcı sayısı </p>';
$string['comp_columns'] = 'Sütunlar';
$string['comp_columns_help'] = '<p> Burada rapor türüne bağlı olarak raporun farklı sütunlarını seçebilirsiniz </p>

<p> Yardım için bakınız: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Eklenti belgeleri</a> </p>';
$string['comp_conditions'] = 'Koşullar';
$string['comp_conditions_help'] = '<p> Burada koşulları (örn, sadece sadece kategorideki kurslar, sadece Karaman\'dan katılan kullanıcılar vb.) tanımlayabilirsiniz . </p>

<p> Birden fazla koşul kullanacaksanız mantıksal ifadeler ekleyebilirsiniz. </p>

<p> Yardım için bakınız: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank"></p>';
$string['comp_customsql'] = 'Özel SQL';
$string['comp_customsql_help'] = '<p> Çalışan bir SQL sorgusu ekleyin. moodle veritabanı öneki $CFG->prefix\'i kullanmayın, bunun yerine tırnak işaretleri olmadan "prefix_" kullanın </p>
<p>Örnek: SELECT * FROM prefix_course</p>

<p>Burada çok miktarda SQL Raporu bulabilirsiniz: <a href="http://docs.moodle.org/en/ad-hoc_contributed_reports" target="_blank">ad-hoc contributed reports</a></p>

p>Bu blok Tim Hunt\'ın CustomSQL sorgu raporlarını desteklediği için, herhangi bir sorgu kullanabilirsiniz.</p>

<p>Raporları zaman belirteçleri ile kullanacaksanız,  "zaman filtresi" eklemeyi unutmayın.</p>

<p>Süzgeç kullanmak için bakınız: <a href="http://docs.moodle.org/en/blocks/configurable_reports/#Creating_a_SQL_Report" target="_blank">SQL Raporu Oluşturma Dersi</a></p>';
$string['comp_filters'] = 'Süzgeçler';
$string['comp_filters_help'] = '<p> Burada  hangi süzgeçlerin görüntüleneceğini seçebilirisiniz </p>

<p>Sonuç raporunda hangi sütünların süzüleceğini seçmek için kullanıcıya izin verir </p>

<p>SQL Roporunda kullanabileceğiniz süzgeç türleri için bkz:  <a href="http://docs.moodle.org/en/blocks/configurable_reports/#Creating_a_SQL_Report" target="_blank">SQL Raporu Oluşturma Öğreticisi</a></p>

<p>Daha fazla yardım için bakınız: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Eklenti Belgeleri</a></p>';
$string['comp_ordering'] = 'Sıralama';
$string['comp_ordering_help'] = 'p> Burada alanları ve yönergeleri kullanarak raporu nasıl sıralayacağınızı seçebilirsiniz </p>
<p> Daha fazla yardım için bknz: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Eklenti belgeleri </a> </p>';
$string['comp_permissions'] = 'İzinler';
$string['comp_permissions_help'] = '<p> Burada raporu kimlerin görüntüleyebileceğiniz seçebilirsiniz. .</p>

<p> Birden fazla koşul kullanıyorsanız nihai izni hesaplamak için mantıksal ifade ekleyebilirsiniz. </p>

<p> Daha fazla yardım için bakınız: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Eklenti belgeleri</a> </p>';
$string['comp_plot'] = 'Çizim';
$string['comp_plot_help'] = 'p> Burada roporunuza sütunlar ve değerlere dayalı grafik ekleyebilirsiniz </p><p> Daha fazla yardım için bakınız: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Eklenti belgeleri</a> </p>';
$string['comp_template'] = 'Şablon';
$string['comp_template_help'] = '<p> Bir şablon oluşturarak roparun sayfa görünümünü değiştirebilirsiniz </p>

<p> Bir şablon dosyası oluşturmak için roparların üstbilgi, altbilgi ve Her rapor kaydı için yardım düğmeleri veya aynı sayfada görüntülenen bilgileri kullanarak. hangi işaretlerle değiştirildiğine bulabilirsiniz. </p>

<p> Daha fazla yardım için baknız: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Eklenti belgeleri</a> </p>';
$string['componenthelp'] = 'Bileşen yardımı';
$string['conditionexpr'] = 'Koşul';
$string['conditionexpr_conditions'] = 'Koşullar';
$string['conditionexpr_conditions_help'] = '<p> Bir mantıksal ifade kullanarak koşulları birleştirebilirsiniz </p>

<p> Geçerli bir mantıksal ifade girin: ve, veya. operatörlerini kullanarak </p>';
$string['conditionexpr_permissions'] = 'Koşul';
$string['conditionexpr_permissions_help'] = '<p> Bir mantıksal ifade kullanarak koşulları birleştirebilirsiniz </p>

<p> Geçerli bir mantıksal ifade girin: ve, veya. operatörlerini kullanarak </p>';
$string['conditionexprhelp'] = 'Geçerli bir koşul girin. örn ()  (c1 and c2) or (c4 ve c3)';
$string['conditions'] = 'Koşullar';
$string['configurable_reports:addinstance'] = 'Yeni yapılandırılabilir rapor bloğu ekle';
$string['configurable_reports:manageownreports'] = 'Kendi raporlarını ı yönetin';
$string['configurable_reports:managereports'] = 'Raporları yönet';
$string['configurable_reports:managesqlreports'] = 'SQL raporlarını yönet';
$string['configurable_reports:myaddinstance'] = 'BENİM saSAYFAM\'a yeni yapılandırılabilir raporlar bloğu ekle';
$string['configurable_reports:viewreports'] = 'Raporları izle';
$string['confirmdeletereport'] = 'Bu raporu silmek istediğinizden eminmisiniz?';
$string['coursecategories'] = 'Kategori ders filtresi';
$string['coursecategory'] = 'Kategorideki kurs';
$string['coursechild'] = 'Kursların alt kategorileri';
$string['coursededicationtime'] = 'Kursların bağlanma zamanı';
$string['coursefield'] = 'Kurs alanı';
$string['coursefieldorder'] = 'Kurs alanı sıralaması';
$string['coursemodules'] = 'Kurs modülü';
$string['courseparent'] = 'Üst kategor olan kurslar';
$string['courses'] = 'Kurslar';
$string['coursestats'] = 'Kurs istatistikleri';
$string['cron'] = 'Otomatik olarak günlük calıştır';
$string['cron_help'] = 'Sorguyu her gün çalışacak şekilde palanlayın (geceleri)';
$string['crondescription'] = 'Sorguyu her gün çalışacak şekilde palanlayın (geceleri)';
$string['crrepository'] = 'Rapor deposu';
$string['crrepositoryinfo'] = 'Tamamen işlevsel örnek raporlarlar birlikte paylaşılan uzak depo';
$string['currentreportcourse'] = 'Gecerli kurs raporu';
$string['currentreportcourse_summary'] = 'Raporun oluşturulduğu kurs';
$string['currentuser'] = 'Geçerli kullanıcı';
$string['currentuser_summary'] = 'Raporu görüntüleyen kullanıcı';
$string['currentusercourses'] = 'Geçerli kullanıcının kayıtlı kursları';
$string['currentusercourses_summary'] = 'Geçerli kullanıcıların kurs (yalnızca görünür kurslar) listesi';
$string['currentuserfinalgrade'] = 'Geçerli kullanıcının dersteki nihai notu';
$string['currentuserfinalgrade_summary'] = 'Bu sütun, halihazırdaki kullanıcının satır-kursdaki nihai notunu gösterir';
$string['cuserfield'] = 'Kullancı alan koşulu';
$string['custom'] = 'Geçerli';
$string['customdateformat'] = 'Geçreli tarih formatı';
$string['customsql'] = 'Geçerli SQL';
$string['datatables'] = 'DataTable JS kütüphanesini etkinleştirin';
$string['datatables_loadingrecords'] = 'Yükleniyor...';
$string['datatablesinfo'] = 'DataTables JS Kütüphanesi (sütun sıralama, sabit başlık, arama, sayfalama...)';
$string['date'] = 'Tarih';
$string['dateformat'] = 'Tarih formatı';
$string['dbhost'] = 'Veritabanı Sunucusu';
$string['dbhostinfo'] = 'Uzak veritabanı ana bilgisayar adı (hangi, bizim SQL sorguları çalıştırabilecek)';
$string['dbname'] = 'Veri tabanı adı';
$string['dbnameinfo'] = 'Uzak veritabanı ana bilgisayar adı (hangi, bizim SQL sorguları çalıştırabilecek)';
$string['dbpass'] = 'Veritabanı şifresi';
$string['dbpassinfo'] = 'Uzak Veritabanı şifresi (Yukarıdaki kullanıcı adı için)';
$string['dbuser'] = 'Veritabanı Kullanıcıadı';
$string['dbuserinfo'] = 'Uzak Veritabanı adı (yukarıdaki DB SELECT ayrıcalıklarana sahip olmalıdır)';
$string['direction'] = 'Yön';
$string['disabled'] = 'Devre dışı';
$string['displayglobalreports'] = 'Genel raporları görüntüle';
$string['displayreportslist'] = 'Blok gövdesi listesi raporunu görüntüle';
$string['donotshowtime'] = 'Tarih bilgisini gösterme';
$string['download'] = 'İndir';
$string['downloadreport'] = 'İndirme raporu';
$string['email_message'] = 'Mesaj';
$string['email_send'] = 'E-posta gönder';
$string['email_subject'] = 'Konu';
$string['enabled'] = 'Etkin';
$string['enableglobal'] = 'Bu (herhangi bir dersten erişilebilir) genel rapordur.';
$string['enablejsordering'] = 'JavaScript sıralamasını etkinleştir';
$string['enablejspagination'] = 'JavaScript Sayfalandırmayı etkinleştirin';
$string['endtime'] = 'Bitiş tarihi';
$string['enrolledstudents'] = 'Kayıtlı öğrenciler';
$string['error_field'] = 'Alana izin verilmiyor';
$string['error_operator'] = 'İşleç\'e izin verilmiyor.';
$string['error_value_expected_integer'] = 'Beklenen tamsayı değeri';
$string['executeat'] = '\'de çalıştır';
$string['executeatinfo'] = 'Moodle CRON 24 saat içinde planlan zamanda SQL sorgularını bir kez çalıştıracaktır.';
$string['export_csv'] = 'CSV biçiminde dışa ver';
$string['export_ods'] = 'ODS biçiminde dışa ver';
$string['export_xls'] = 'XLS formadında dışa ver';
$string['exportoptions'] = 'Dışa verme seçenekleri';
$string['exportreport'] = 'Raporu dışa ver';
$string['fcoursefield'] = 'Kurs alanı süzgeci';
$string['field'] = 'Alan';
$string['filter'] = 'Süzgeç';
$string['filter_all'] = 'Tümü';
$string['filter_apply'] = 'Uygula';
$string['filter_searchtext'] = 'Arama metni';
$string['filter_searchtext_summary'] = 'Serbest metin filtresi';
$string['filtercategories'] = 'Süzgeç kategorileri';
$string['filtercategories_summary'] = 'Kategoriye göre Süz';
$string['filtercohorts'] = 'Topluluk';
$string['filtercoursecategories'] = 'Kategori kurs süzgeci';
$string['filtercoursecategories_summary'] = 'Üst kategorilerine göre kursları süz';
$string['filtercoursemodules'] = 'Kurs Modülü';
$string['filtercoursemodules_summary'] = 'Kurs modüllerine süz';
$string['filtercourses'] = 'Kurslar';
$string['filtercourses_summary'] = 'Bu süzgeç kurs listesini görüntüler. Aynı anda sadece bir kurs seçebilirsiniz.';
$string['filterenrolledstudents'] = 'Kursa kayıt yaptıran öğrenciler';
$string['filterenrolledstudents_summary'] = 'Öğrencileri (Kimliklerine göre)  kaydoldukları kursa göre süz';
$string['filterrole'] = 'yetki';
$string['filterrole_summary'] = 'Sistem yetkilerini süz (öğrenci,öğretmen...)';
$string['filters'] = 'Süzgeçler';
$string['filtersemester'] = 'Yarıyıl (İbranice)';
$string['filtersemester_list'] = 'Dönem 1,dönem 2, dönem, seminer.';
$string['filtersemester_summary'] = 'Önceki dönemi süzmer (örneğin İbranice: 1 dönem,  2.dönem).';
$string['filterstartendtime_summary'] = 'Başlangıç / Bitiş tarihi süzgeci';
$string['filtersubcategories'] = 'Kategori (alt kategoriler dahil)';
$string['filtersubcategories_summary'] = 'Kullanımı: %% FILTER_CATEGORIES: mdl_course_category.path %%';
$string['filteruser'] = 'Geçerli kurs kullanıcısı';
$string['filteruser_summary'] = 'Kurs  kullanıcı listesine göre Kullanıcı süz';
$string['filterusers'] = 'Sistem kullanıcısı';
$string['filterusers_summary'] = 'Sistem kullanıcı listesine göre Kullanıcı süz(kimliğe göre)';
$string['filteryearhebrew'] = 'Yıl (İbranice';
$string['filteryearhebrew_summary'] = 'İbranice yıl kullanarak süz (תשעג, ...)';
$string['filteryearnumeric'] = 'Yıl (Sayısal)';
$string['filteryearnumeric_summary'] = 'Sayısal yıl(2015....)  kullanarak Süz';
$string['filteryears'] = 'Yıl (Sayısal)';
$string['filteryears_list'] = '2010,2011,2012,2013,2014,2015';
$string['filteryears_summary'] = 'Yıllara göre süz (sayısal gösterimi, 2012 ...)';
$string['finalgradeincurrentcourse'] = 'Kursun nihai notu';
$string['fixeddate'] = 'Sabit tarih';
$string['footer'] = 'Altbilgi';
$string['forcemidnight'] = 'Gece yarısına zorla';
$string['fuserfield'] = 'Kullanıcı alan süzgeci';
$string['global'] = 'Genel rapor';
$string['global_help'] = 'Genel rapora sadece  platformadaki herhangi bir kursun  ekle&courseid=MY_COURSE_ID rapor adresinden ulaşılabilir.,';
$string['globalstatsshouldbeenabled'] = 'Sİte istatistikleri etkinleştirilmelidir. Bunun için Sunucu->istatistikler yolunu kullanınız';
$string['groupseries'] = 'Grup serisi';
$string['groupvalues'] = 'Grup, aynı değerleri (toplam)';
$string['header'] = 'Başlık';
$string['importfromrepository'] = 'Ana depodan rapor al';
$string['importreport'] = 'Raporu al';
$string['includesubcats'] = 'Alt kategorileri içersin';
$string['jsordering'] = 'JavaScript sıralaması';
$string['jsordering_help'] = 'JavaScript sıralaması sayfayı yenilemeden ropar tablosunu sıralamanıza izin verir.';
$string['lastexecutiontime'] = 'Çalışma süresi = {$a} (Sec)';
$string['legacylognotenabled'] = 'Eksi günlükler etkinleştirimelidir.
Bunun için Site yönetimi/Etkinlikler/Eski günlükleri etkinleştir adresine gidin ve kayıt ayarlarından  kayıtları ve eski kayıt verilerini inceleyin.';
$string['line'] = 'Çizgi grafiği';
$string['linesummary'] = 'Birden çok veri serisi içeren bir çizgi grafiği';
$string['listofsqlreports'] = 'Tam ekran düzenlemesi için imleç edidörte iken F11 tuşuna basın.  Tüm ekran düzenlemesinden çıkmak isin Esc tuşuna basın. br/><br/><a href="http://docs.moodle.org/en/ad-hoc_contributed_reports" target="_blank">SQL raporu katkıda bulunanlar listesi</a>';
$string['managereports'] = 'Raporları yönet';
$string['max'] = 'Maksimum';
$string['min'] = 'Minimum';
$string['missingcolumn'] = 'Bir sütün gerekiyor';
$string['module'] = 'Modül';
$string['nocolumnsyet'] = 'Henüz bir sütün seçilmedi';
$string['noconditionsyet'] = 'Henüz bir koşul seçilmedi';
$string['noexplicitprefix'] = 'Belirgin önek yok';
$string['nofiltersyet'] = 'Henüz süzgeç yok';
$string['nofilteryet'] = 'Henüz süzgeç yok';
$string['noorderingyet'] = 'Henüz sıralama yok';
$string['nopermissionsyet'] = 'Henüz yetkiniz yok';
$string['noplotyet'] = 'Henüz çizim yok';
$string['norecordsfound'] = 'Henüz kayıt yok';
$string['noreportsavailable'] = 'Kullanılabilir rapor yok';
$string['norowsreturned'] = 'Hiçbir satır döndürülmedi';
$string['nosemicolon'] = 'Noktalı virgül yok';
$string['notallowedwords'] = 'Kabul edilmiş kelime yok';
$string['operator'] = 'İşleç';
$string['ordering'] = 'Sıralama';
$string['pagination'] = 'Sayfa numaraları ekleme';
$string['pagination_help'] = 'Her sayfada gösterilecek kayıt sayısı. Sıfırın anlamı sayfalandırma yapma demektir.';
$string['parentcategory'] = 'Ana kategori';
$string['permissions'] = 'Ana kategori';
$string['pie'] = 'Pasta';
$string['pieareaname'] = 'İsim';
$string['pieareavalue'] = 'Değer';
$string['piesummary'] = 'Pasta grafiği';
$string['plot'] = 'Çizgi-Grafik';
$string['pluginname'] = 'Özelleştirilebilir Raporlar';
$string['previousdays'] = 'Önceki gün';
$string['previousend'] = 'Önceki bitti';
$string['previousstart'] = 'Önceki başladı';
$string['printreport'] = 'Raporu yazdır';
$string['privacy:metadata:block_configurable_reports:courseid'] = 'Kurs kimliği';
$string['puserfield'] = 'Kullanıcı alan değeri';
$string['puserfield_summary'] = 'Kullanıcı seçili alanında seçilen değer';
$string['queryfailed'] = 'Sorgu başarısız';
$string['querysql'] = 'SQL Sorgusu';
$string['remote'] = 'Uzak veritabanında çalıştır';
$string['remote_help'] = 'Bu sorguyu uzak veritabanında çalıştırmak istediğinizden eminmisiniz';
$string['remotedescription'] = 'Bu sorguyu uzak veritabanında çalıştırmak istediğinizden eminmisiniz';
$string['remotequerysql'] = 'SQL sorgusu';
$string['report'] = 'Rapor';
$string['report_categories'] = 'Kategorilerin raporu';
$string['report_courses'] = 'Kurs raporu';
$string['report_sql'] = 'SQL Raporu';
$string['report_timeline'] = 'Zaman tablosu raporu';
$string['report_users'] = 'Kullanıcı raporu';
$string['reportcategories'] = '1) Uzak rapor kategorisini seçiniz';
$string['reportcolumn'] = 'Diğer rapor sütüları';
$string['reportcreated'] = 'Rapor başarıyla oluşturuldu';
$string['reportlimit'] = 'Rapor satır sınırı';
$string['reportlimitinfo'] = 'Rapor tablosunda görüntülenen satır sayısını sınırlayın (Varsayılan 5000 satır. Kullanıcıların  Veritabın  motoruna yük olmamaları için Sınırlama olması her zaman iyidir)';
$string['reports'] = 'Raporlar';
$string['reportscapabilities'] = 'Rapor özellikleri';
$string['reportscapabilities_summary'] = 'Özellikleri ile kullanıcılar moodle/site:viewreopts etkinleştirilmelidir.';
$string['reportsincategory'] = '2) Listeden bir rapor seçin';
$string['reporttable'] = 'Rapor tablosu';
$string['reporttable_help'] = '<p> Bu rapor kayıtlarınının görüntüleneceğin  tablonun genişliğidir </p>
<p> Bir Şablon kullanıyorsanız bu seçenek hiçbir etkisi yoktur </p>';
$string['reporttableuiinfo'] = 'Rapor tablosunu şu şekilde görüntüleyin: Basit kaydırılabilir HTML tablosu, sütun sıralamalı jQuery Veya DataTables JS kitaplığı (Sütun sıralama, sabit başlık, arama, sayfalama...)';
$string['repository'] = 'Anadepo raporları';
$string['repository_help'] = 'Örnek raporları ortak paylaşılan bir depodan içe aktarabilirsiniz.

Lütfen, depoya yapılan günlük bir çağrı sınırı olduğuna dikkat edin.

Depo bağlantısı çalışmıyorsa buradan manuel olarak indirebilirsiniz <a href="https://github.com/jleyva/moodle-configurable_reports_repository" target="_blank">https://github.com/jleyva/ moodle-configurable_reports_repository</a> bir rapor oluşturun ve ardından aşağıda görüntülenen "Raporu içe aktar" özelliğini kullanarak içe aktarın';
$string['role'] = 'Yetki';
$string['searchtext'] = 'Arama metni';
$string['statsactiveenrolments'] = 'Aktif (geçen hafta) kayıtlar';
$string['tablealign'] = 'Tablo hizalama';
$string['tablecellpadding'] = 'Tablo hücre dolgusu';
$string['tablecellspacing'] = 'Tablo hücre aralığı';
$string['tableclass'] = 'Tablo sınıfı';
$string['tablewidth'] = 'Tablo genişliği';
$string['user'] = 'Kurs kullanıcısı (id)';
$string['usercompletion'] = 'Kullanıcı kursu tamamlama durumu';
$string['usercompletionsummary'] = 'Kurs tamamlama durumu';
$string['value'] = 'Değer';
$string['viewreport'] = 'Raporu görüntüle';
$string['xaxis'] = 'X Ekseni';
$string['yaxis'] = 'Y Ekseni';
$string['yearhebrew'] = 'Yıl (İbranice)';
$string['yearnumeric'] = 'Yıl (Sayısal)';
$string['years'] = 'Yıl (Sayısal)';
$string['youmustselectarole'] = 'Asgari bir rol gereklidir';
