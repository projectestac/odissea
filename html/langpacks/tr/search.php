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
 * Strings for component 'search', language 'tr', version '4.5'.
 *
 * @package     search
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advancedsearch'] = 'Gelişmiş arama';
$string['all'] = 'Tümü';
$string['allareas'] = 'Tüm alanlar';
$string['allcourses'] = 'Tüm kurslar';
$string['allusers'] = 'Tüm kullanıcılar';
$string['author'] = 'Yazar';
$string['authorname'] = 'Yazar adı';
$string['back'] = 'Geri';
$string['beadmin'] = 'Bu sayfayı kullanmak için yönetici olmalısınız.';
$string['checkdb'] = 'Veritabanını kontrol et';
$string['checkdbadvice'] = 'Herhangi bir sorun için veritabanınızı kontrol edin.';
$string['checkdir'] = 'Klasör kontrol et';
$string['checkdiradvice'] = 'Veri klasörünün mevcut ve yazılabilir olduğundan emin olun.';
$string['commenton'] = 'Yorum';
$string['confirm_delete'] = '{$a} dizinini silmek istediğinizden emin misiniz? Arama alanı dizine eklenene kadar, kullanıcılar bu alandan arama sonuçları almayacaktır.';
$string['confirm_deleteall'] = 'Dizine eklenen tüm içerikleri şimdi silmek istediğinizden emin misiniz? Site tekrar indekslenene kadar kullanıcılar arama sonuçlarını alamayacaktır.';
$string['confirm_indexall'] = 'Dizine eklenen içerikleri şimdi güncellemek istediğinizden emin misiniz? Büyük miktarda içeriğin indekslenmesi gerekiyorsa, bu uzun zaman alabilir. Canlı sunucular için normalde indekslemeyi \'Genel arama indeksleme\' zamanlanmış görevine bırakmalısınız.';
$string['confirm_reindexall'] = 'Tüm site içeriğini şimdi yeniden dizine eklemek istediğinizden emin misiniz?  Siteniz çok miktarda içerik içeriyorsa, bu uzun zaman alacaktır ve kullanıcılar site tamamlanana kadar tam arama sonuçlarını alamayabilir.';
$string['content:courserole'] = '{$a->course} içindeki {$a->rol}';
$string['core-all'] = 'Tümü';
$string['core-course-content'] = 'Kurs içeriği';
$string['core-courses'] = 'Kurslar';
$string['core-other'] = 'Diğer';
$string['core-users'] = 'Kullanıcılar';
$string['createanindex'] = 'index oluştur';
$string['createdon'] = 'Oluşturulma';
$string['database'] = 'Veritabanı';
$string['databasestate'] = 'Veritabanı durumu indexleniyor';
$string['datadirectory'] = 'Veri klasörü';
$string['deleteindex'] = '{$a} dizinini sil';
$string['deletionsinindex'] = 'Dizinde silmeler';
$string['docmodifiedon'] = 'Son değişiklik {$a} tarihinde yapıldı';
$string['doctype'] = 'Belge tipi';
$string['doctypenotsupported'] = 'Belirtilen doküman türü henüz desteklenmiyor';
$string['documents'] = 'belgeler';
$string['documentsfor'] = 'Belgeler:';
$string['documentsindatabase'] = 'Veritabanındaki belgeler';
$string['documentsinindex'] = 'Indexteki belgeler';
$string['duration'] = 'Süre';
$string['emptydatabaseerror'] = 'Veritabanı tablosu mevcut değil, ya da hiç indeks kaydı içermiyor.';
$string['enginenotfound'] = '{$a} Motoru bulunamadı.';
$string['enginenotinstalled'] = '{$a} Motoru yüklü değil.';
$string['enginenotselected'] = 'Herhangi bir arama motoru seçmediniz.';
$string['engineserverstatus'] = 'Arama motoru kullanılamıyor. Lütfen yöneticinize başvurun.';
$string['enteryoursearchquery'] = 'Arama sorgunuzu giriniz';
$string['error_indexing'] = 'İndeksleme sırasında bir hata oluştu';
$string['errorareanotavailable'] = '{$a} arama alanı kullanılamıyor.';
$string['errors'] = 'Hatalar';
$string['everywhere'] = 'Erişebildiğiniz her yerde';
$string['filesinindexdirectory'] = 'Indeks dizinindeki dosyalar';
$string['filterheader'] = 'Filtre';
$string['fromtime'] = 'Sonra değiştirildi';
$string['globalsearch'] = 'Genel arama';
$string['globalsearchdisabled'] = 'Genel arama etkin değil.';
$string['gradualreindex'] = 'Kademeli olarak yeniden dizinleme {$a}';
$string['gradualreindex_confirm'] = '{$a} öğesini yeniden indekslemek istediğinizden emin misiniz? Bu işlem biraz zaman alabilir, ancak mevcut veriler yeniden indeksleme sırasında kullanılabilir durumda kalacaktır.';
$string['gradualreindex_queued'] = 'Yeniden indeksleme {$a->name} ({$a->count} bağlamları) için talep edildi. Bu indeksleme " Genel arama indekslemesi" zamanlanmış görevi tarafından gerçekleştirilecektir.';
$string['incourse'] = '{$a} dersinde';
$string['index'] = 'Dizin';
$string['indexwhendisabledfullnotice'] = 'Arama devre dışı bırakıldığında dizin oluşturma işlemine şu anda izin verilmiyor. Bunu etkinleştirmek için lütfen <a href="{$a->url}"> searchindexwhenever Disabled </a> (Arama dizinini devre dışı bırakıldığında) ayarına bakın.';
$string['indexwhendisabledshortnotice'] = 'İndeksleme mevcut değil.';
$string['invalidindexerror'] = 'Indeks dizini ya geçersiz bir indeks içerir  ya da hiçbir şey içermez.';
$string['ittook'] = 'Sürdü';
$string['matchingfile'] = 'Dosyalardan eşleştirilen  <span class="filename">{$a}</span>';
$string['matchingfiles'] = 'Dosyalardan eşleştirilen:';
$string['mycoursesonly'] = 'Sadece kurslarım';
$string['next'] = 'Sonraki';
$string['noindexmessage'] = 'Yönetici: Hiç arama indeksi gözükmüyor.';
$string['noresults'] = 'Sonuç yok';
$string['normalsearch'] = 'Normal arama';
$string['notitle'] = 'Başlık yok';
$string['openedon'] = 'Açılmış';
$string['optimize'] = 'Optimize et';
$string['order'] = 'Sonuç sırası';
$string['order_location'] = '{$a} ile ilgili sonuçlara öncelik verin';
$string['order_relevance'] = 'Önce en alakalı sonuçlar';
$string['priority'] = 'Öncelik';
$string['priority_normal'] = 'Normal';
$string['priority_reindexing'] = 'Yeniden indeksleme';
$string['privacy:metadata'] = 'Arama alt sistemi herhangi bir kişisel veri saklamaz.';
$string['progress'] = 'İlerleme';
$string['queryerror'] = 'Sağladığınız sorgu, arama motoru tarafından ayrıştırılamadı: {$a}';
$string['queueheading'] = 'Ek indeksleme kuyruğu ({$a} öğe)';
$string['resultsreturnedfor'] = 'Verilen sonuçlar';
$string['runindexer'] = 'Indeksleyiciyi çalıştırın (gerçek)';
$string['runindexertest'] = 'Indeksleyici sınavını çalıştırın';
$string['schemanotupdated'] = 'Arama şeması güncel değil.';
$string['schemaversionunknown'] = 'Arama motoru mevcut şema sürümü konusunda herhangi bir bilgiye sahip değildir.';
$string['score'] = 'Puan';
$string['search'] = 'Ara';
$string['search:course'] = 'Kurslar';
$string['search:course_teacher'] = 'Kurs öğretmeni';
$string['search:customfield'] = 'Kurs özel alanları';
$string['search:message_received'] = 'İletiler - alındı';
$string['search:message_sent'] = 'İletiler - gönderildi';
$string['search:mycourse'] = 'Kurslarım';
$string['search:section'] = 'Kurs bölümleri';
$string['search:user'] = 'Kullanıcılar';
$string['searcharea'] = 'Arama alanı';
$string['searchareacategories'] = 'Arama alanı kategorileri';
$string['searching'] = 'Aranıyor...';
$string['searchnotpermitted'] = 'Arama yapabilmek için yetkili değilsiniz';
$string['searchsetupdescription'] = 'Aşağıdaki adımlar, Moodle genel aramasını ayarlamanıza yardımcı olur.';
$string['searchwithin'] = 'Içinde ara';
$string['seconds'] = 'saniye';
$string['solutions'] = 'Çözümler';
$string['statistics'] = 'İstatistikler';
$string['step'] = 'Adım';
$string['thesewordshelpimproverank'] = 'Bu kelimeler değrelendirmenin gelişmesini sağlar';
$string['thesewordsmustappear'] = 'Bu sözcükler gözükmelidir';
$string['thesewordsmustnotappear'] = 'Bu sözcükler gözükmemelidir';
$string['title'] = 'Başlık';
$string['tofetchtheseresults'] = 'Bu sonuçları getirmek için';
$string['topresults'] = 'En iyi sonuçlar';
$string['totalsize'] = 'Toplam boyut';
$string['totime'] = 'Daha önce değiştirilmiş';
$string['type'] = 'Tipi';
$string['uncompleteindexingerror'] = 'İndeksleme başarıyla tamamlanmadı, lütfen yeniden başlatın.';
$string['versiontoolow'] = 'Üzgünüz, genel arama için en az PHP 5.0 sürümünü gerekir.';
$string['viewresultincontext'] = 'Bu sonucu bağlam içinde görüntüle';
$string['wordsintitle'] = 'Başlıktaki sözcükler';
