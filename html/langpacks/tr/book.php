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
 * Strings for component 'book', language 'tr', version '4.5'.
 *
 * @package     book
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addafter'] = 'Yeni bölüm ekle';
$string['addafterchapter'] = '"{$a->title}"dan sonra yeni bölüm ekle';
$string['book:addinstance'] = 'Yeni bir kitap ekle';
$string['book:edit'] = 'Kitap bölümlerini düzenle';
$string['book:read'] = 'Kitabı görüntüle';
$string['book:viewhiddenchapters'] = 'Gizli kitap bölümlerini görüntüle';
$string['chapterandsubchaptersdeleted'] = '"{$a-> title}" bölümü ve onun {$a->subchapters} alt bölümleri silindi';
$string['chapterdeleted'] = 'Bölüm "{$a->title}" silindi';
$string['chapters'] = 'Bölümler';
$string['chaptertitle'] = 'Bölüm başlığı';
$string['confchapterdelete'] = 'Bu bölümü gerçekten silmek istiyor musun?';
$string['confchapterdeleteall'] = 'Bu bölümü ve alt bölümlerini gerçekten silmek istiyor musunuz?';
$string['content'] = 'İçerik';
$string['customtitles'] = 'Özel başlıklar';
$string['customtitles_help'] = 'Normalde bölüm başlığı içerik bölümünde (TOC) AND içeriğin üstünde bir başlık olarak görüntülenir.

Özel başlıklar onay kutusu işaretlenmişse, bölüm başlığı içeriğin üstünde bir başlık olarak gösterilmemiştir. İçeriğin bir parçası olarak farklı bir başlık (belki de bölüm başlığından daha uzun) girilebilir.';
$string['deletechapter'] = 'Bölümü sil "{$a}"';
$string['editchapter'] = 'Bölümü düzenle "{$a}"';
$string['editingchapter'] = 'Bölümü düzenleme';
$string['errorchapter'] = 'Kitabın bölümünü okurken hata oluştu.';
$string['eventchaptercreated'] = 'Bölüm oluşturuldu';
$string['eventchapterdeleted'] = 'Bölüm silindi';
$string['eventchapterupdated'] = 'Bölüm güncellendi';
$string['eventchapterviewed'] = 'Bölüm incelendi';
$string['hidechapter'] = 'Bölümü gizle "{$a}"';
$string['indicator:cognitivedepth'] = 'Kitap bilişsel';
$string['indicator:cognitivedepth_help'] = 'Bu gösterge, öğrencinin bir Kitap kaynağında ulaştığı bilişsel derinliğe dayanmaktadır.';
$string['indicator:cognitivedepthdef'] = 'Kitap bilişsel';
$string['indicator:cognitivedepthdef_help'] = 'Katılımcı, bu analiz aralığı sırasında Kitap etkinlikleri tarafından sunulan bilişsel katılımın bu yüzdesine ulaştı (Düzeyler = Görüntüleme yok, Görüntüleme)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Kitap sosyal';
$string['indicator:socialbreadth_help'] = 'Bu gösterge, öğrencinin bir Kitap kaynağında ulaştığı sosyal genişliğe dayalıdır.';
$string['indicator:socialbreadthdef'] = 'Kitap sosyla';
$string['indicator:socialbreadthdef_help'] = 'Katılımcı, bu analiz aralığında Kitap etkinlikleri tarafından sunulan sosyal katılımın bu yüzdesine ulaşmıştır (Düzeyler = Katılım yok, Sadace katılımcı)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['modulename'] = 'Kitap';
$string['modulename_help'] = 'Kitap modülü, bir öğretmenin bölümlere ve alt bölümlere sahip kitap benzeri bir biçimde çok sayfalı bir kaynak oluşturmasını sağlar. Kitaplar, metinlerin yanı sıra medya dosyalarını da içerebilir ve bölümlere ayrılabilecek uzun bilgi pasajlarını görüntülemek için kullanışlıdır.

Bir kitap kullanılabilir

* Bireysel çalışma modülleri için okuma materyali göstermek
* Personel bölüm el kitabı olarak
* Öğrenci çalışmalarının vitrin portfolyosu olarak';
$string['modulename_link'] = 'mod/book/view';
$string['modulenameplural'] = 'Kitaplar';
$string['movechapterdown'] = 'Bölüm "{$a}" aşağı taşı';
$string['movechapterup'] = 'Bölümü yukarı taşı "{$a}"';
$string['navexit'] = 'Kitaptan çık';
$string['navimages'] = 'Görüntüler';
$string['navnext'] = 'Sonraki';
$string['navnexttitle'] = 'Sonraki: {$a}';
$string['navoptions'] = 'Gezinme bağlantıları için kullanılabilir seçenekler';
$string['navoptions_desc'] = 'Gezinmeyi kitap sayfalarında görüntülemek için kullanılan seçenekler';
$string['navprev'] = 'Önceki';
$string['navprevtitle'] = 'Önceki: {$a}';
$string['navstyle'] = 'Navigasyon stili';
$string['navstyle_help'] = '* Resimler - Simgeler navigasyon için kullanılır
* Metin - Bölüm başlıkları gezinmek için kullanılır';
$string['navtext'] = 'Metin';
$string['navtoc'] = 'Sadece TOC';
$string['nocontent'] = 'Bu kitaba henüz içerik eklenmedi.';
$string['numbering'] = 'Bölüm formatlama';
$string['numbering0'] = 'Yok';
$string['numbering1'] = 'Sayılar';
$string['numbering2'] = 'Madde İmleri';
$string['numbering3'] = 'Girintili';
$string['numbering_help'] = '* Yok - Bölüm ve alt bölüm başlıklarında biçimlendirme yok
* Sayılar - Bölümler ve alt bölüm başlıkları 1, 1.1, 1.2, 2, ... olarak numaralandırılmıştır.
* Madde işaretleri - Alt bölümler girintili ve içindekiler tablosunda madde işaretleriyle gösterilir
* Girintili - Alt bölümler içindekiler tablosunda girintilidir.';
$string['numberingoptions'] = 'Bölüm formatlaması için kullanılabilen seçenekler';
$string['numberingoptions_desc'] = 'Bölümlere ve alt bölümleri içindekiler tablosunda görüntüleme seçenekleri';
$string['page-mod-book-x'] = 'Herhangi bir kitap modülü sayfası';
$string['pluginadministration'] = 'Kitap yönetimi';
$string['pluginname'] = 'Kitap';
$string['previouschapter'] = 'Önceki bölüm';
$string['privacy:metadata'] = 'Kitap etkinlik modülü herhangi bir kişisel veri saklamaz.';
$string['removeallbooktags'] = 'Tüm kitap etiketleri';
$string['search:activity'] = 'Kitap - kaynak bilgisi';
$string['search:chapter'] = 'Kitap - bölümler';
$string['showchapter'] = 'Bölümleri göster "{$a}"';
$string['subchapter'] = 'Alt bölüm';
$string['subchapternotice'] = '(Sadece ilk bölüm oluşturulduktan sonra kullanılabilir)';
$string['subplugintype_booktool'] = 'Kitap aracı';
$string['subplugintype_booktool_plural'] = 'Kitap araçları';
$string['tagarea_book_chapters'] = 'Kitap bölümleri';
$string['tagsdeleted'] = 'Kitap etiketleri silindi';
$string['toc'] = 'İçindekiler';
$string['top'] = 'üst';
