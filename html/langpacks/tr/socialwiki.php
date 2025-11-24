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
 * Strings for component 'socialwiki', language 'tr', version '4.5'.
 *
 * @package     socialwiki
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admin'] = 'Yönetici';
$string['allpages'] = 'Tüm Sayfa Sürümleri';
$string['comments'] = 'Yorumlar';
$string['commentscount'] = 'Yorumlar ({$a})';
$string['deleteupload'] = 'Sil';
$string['edit'] = 'Düzenle';
$string['editcomment'] = 'Yorumları düzenle';
$string['editfiles'] = 'Viki dosyasını düzenle';
$string['editing'] = 'Vik sayfasını düzenle';
$string['editingcomment'] = 'Yorumları düzenle';
$string['filtername'] = 'Sosyal Wiki otomatik bağlantı';
$string['formatcreole_link'] = 'mod/socialwiki/creole';
$string['formatnwiki_link'] = 'mod/socialwiki/nwiki';
$string['help_edit'] = 'Düzenleme görünümü, bir sayfayı değiştirmenize ve yeni bir sürüm oluşturmanıza yardımcı olur.</br>
Sayfa oluşturulurken seçilin metin düzenleyicik, önceki içerikle birlikte görünecek ve her şeyi istediğiniz gibi değiştirmenize yardımcı olacaktır.</br>
</br>
HTML biçimi, üstte biçimlendirme seçenekleriyle birlikte başka yerlerde bulunan normal metin düzenleyicisin gösterecektir.</br>
Creole ve Nwiki format editörleri, birbirinden çok fazla farklı seçeneğe sahip olmamalarına ve biçimlendirme etiketlerinin içerikte gösterilmesine rağmen birbirine oldukça benzemektedir.</br>
Bu iki formatta, herhangi bir içerik eklemeden önce kullanacağınız tüm dosyaları eklemeniz de önemlidir, aksi takdirde baştan başlamanız gerekir.</br>
</br>
Sosyalwiki\'de sayfalara özel bağlantılar vardır ve bunları eklemenin 3 farklı yolu vardır:
<ul><li>[[sayfa adı]] Bir arama sayfası adına bağlantılar.</li>
<li>[[sayfa adı@sayfa kimliği]] Bir sayfanın belirli bir sürümüne bağlantılar.</li>
<li>[[sayfa adı@.]] Söz konusu sayfanın en son sürümüne bağlantılar.</li></ul>
Düzenlemeyi bitirdikten sonra, sayfanın altındaki ön izleme düğmesini kullanarak sayfayı önizleyebilirsiniz ve hazır olduğunuzda, yeni sayfa sürümünüzü yayınlamak için kaydet düğmesini kullanabilirsiniz.</br>
Artık sayfa sürümü oluşturulduğundan onu kaldıramazsınız, yalnızca bir öğretmen wikiden içerik kaldırma seçeneğine sahiptir.';
$string['help_search'] = 'Arama görünümü, sorgunuzu sayfaların başlığında ve içeriğinde arar ve sonuçları gösterir.</br>
Arama kutusunu boş bırakmak veya * yazmak kullanılabilir tüm sayfaları gösterir.</br>
Daha fazla bilgi için <a href="#versions"> sürümlerine bakın, bu görünümler aynı şekilde hareket ettiğinden </a>\'a yardımcı olun.</br>
</br>
Bu görünüme ulaşmak için, geçerli wiki\'yi aramak için herhangi bir sayfanın sağ üst kısmındaki arama kutusunu kullanın.';
$string['hometitle'] = 'Sosyal Wiki Anasayfa';
$string['insertcomment'] = 'Yorum ekle';
$string['insertimage'] = 'Resim ekle...';
$string['modulename'] = 'Sosyal Wiki';
$string['modulename_help'] = 'Sosyal Wiki etkinlik modülü, katılımcıların bir web sayfası koleksiyonu eklemesine ve düzenlemesine olanak tanır. Birinin bir sayfada yaptığı her düzenleme için yeni bir wiki sayfası oluşturulur. Sayfalar sadece birisi beğendiği sürece var olur, eğer bir sayfa 0 beğeniye sahipse silinir.

Katılımcılar birbirlerini takip edebilir ve sayfaları beğenebilir, böylece arama sonuçları her katılımcı için özel olarak uyarlanır.
Wiki\'deki her sayfanın önceki sürümlerinin bir versiyonu tutulur ve her katılımcı tarafından yapılan düzenlemeler listelenir.

Sosyal Vikilerin birçok kullanım alanı vardır, örneğin

* Grup ders notları veya çalışma kılavuzları için
* Fakülte üyelerinin birlikte bir çalışma planı veya toplantı gündemi planlaması için
* Öğrencilerin, eğitmenleri tarafından belirlenen bir konuda içerik oluşturarak işbirliği içinde çevrimiçi bir kitap yazmaları için
* Her katılımcının bir dize veya mısra yazdığı ortak hikaye anlatımı veya şiir oluşturma için';
$string['modulename_link'] = 'mod/socialwiki/view';
$string['modulenameplural'] = 'Sosyal Vikiler';
$string['name'] = 'İsim';
$string['networkdistance'] = 'Sosyal Mesafe';
$string['newpages'] = 'Yeni Sayfa Sürümleri';
$string['page-mod-socialwiki-comments'] = 'Sosyal Wiki modülü yorum sayfası';
$string['page-mod-socialwiki-versions'] = 'Sosyal Wiki sürüm sayfası';
$string['page-mod-socialwiki-view'] = 'Sosyal Wiki modülü ana sayfası';
$string['pluginadministration'] = 'Sosyal Wiki yönetimi';
$string['pluginname'] = 'Sosyal Wiki';
$string['restoreerror'] = 'Sürüm #{$a} geri yüklenemedi';
$string['save'] = 'Kaydet';
$string['socialwiki'] = 'Sosyal Wiki';
$string['socialwiki:addinstance'] = 'Yeni Sosyal Wiki ekle';
$string['socialwiki:editpage'] = 'Viki sayfalarını kaydet';
$string['socialwiki:managewiki'] = 'Sosyal Wikiyi yönet';
$string['socialwikipages'] = 'Sosyal Wiki sayfaları';
$string['style'] = 'Sosyal wiki etkinliği için stil seçin';
$string['tableofcontents'] = 'İçindekiler Tablosu';
$string['tableview'] = 'Tablo görünümü';
$string['tableview_help'] = 'Tüm wiki sayfalarının tablo görünümü';
$string['title'] = 'Başlık';
$string['versionerror'] = 'Sürüm Kimliği mevcut değil';
$string['versions'] = 'Sürümler';
$string['viewcurrent'] = 'Geçerli sürüm';
$string['wikiname'] = 'Sosyal Wiki adı';
