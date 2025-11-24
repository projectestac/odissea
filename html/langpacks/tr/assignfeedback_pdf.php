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
 * Strings for component 'assignfeedback_pdf', language 'tr', version '4.5'.
 *
 * @package     assignfeedback_pdf
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addquicklist'] = 'Hızlı listeden yorum ekle';
$string['allowpdffeedback'] = 'Aktif';
$string['annotatesubmission'] = 'Ek açıklama Gönderimi';
$string['annotationhelp'] = 'Ek açıklama yardımı';
$string['annotationhelp_text'] = '<table>
<thead><tr><th>Denetim</th><th>Klavye kısa yolları</th><th>Tanım</th></tr></thead>
<tr><td>{$a->save}</td><td> </td><td>Yanıt yazmadan PDF notunu kapatın (Tüm ek açıklamalar kaydedildikçe ek açıklamalar hemen kaydedilir.</td></tr>
 <tr><td>{$a->generate}</td><td> </td><td>Öğrencinin indireceği ek açıklamalı bir PDF oluşturun</td></tr>
 <tr><td>Yorumları bulun</td><td> </td><td>Doğrudan önceden girilmiş bir yoruma (bu gönderimde) atlayın ve vurgulayın.</td></tr>
 <tr><td>Öncekileri göster</td><td> </td><td>Bu öğrencinin görüşlerini bu dersin başka bir görevinden göster (yan çerçevede)</td></tr>
 <tr><td><-- Prev</td><td>p</td><td>Önceki sayfayı göster</td></tr>
 <tr><td>Next --></td><td>n</td><td>Sonraki sayfayı göster</td></tr>
 <tr><td>Arkaplan Rengi</td><td>[ and ]</td><td>Yorum kutusunun dolgu rengini değiştirme (bir açıklamayı sağ tıklatarak da yapabilirsiniz)</td></tr>
 <tr><td>Line colour</td><td>{ and }</td><td>Ek açıklamaların rengini değiştirme</td></tr>
 <tr><td><Damga seçin</td><td> </td><td>Damga aracı için kullanılacak damgayı biçimini seçin (yeni damgalar sunucu üzerindeki \'pix/stamps\'  klasörüne eklenebilir)</td></tr>
 <tr><td>{$a->comment}</td><td>c</td><td>Yorum kutusunu eklemek için sayfayı tıklayın, yorumu yazın, ardından kaydetmek için sayfayı tekrar tıklayın. Düzenlemek için yorum üzerine tıklayın, taşımak için sürükleyin. Rengi değiştirmek, hızlı listeye kaydetmek veya silmek için sağ tıklayın (silmek için metni silin).
</td></tr>
 <tr><td>{$a->line}</td><td>l</td><td>Sayfada bir çizgi çizmek için tıklayın + sürükleyin (veya tıklayın, hareket ettirin, tıklayın)</td></tr>
 <tr><td>{$a->rectangle}</td><td>r</td><td>Sayfada bir dikdörtgen çizmek için tıklayın + sürükleyin (veya tıklayın, hareket ettirin, tıklayın)</td></tr>
 <tr><td>{$a->oval}</td><td>o</td><td>Sayfada bir oval çizmek için tıklayın + sürükleyin (veya tıklayın, hareket ettirin, tıklayın)</td></tr>
 <tr><td>{$a->freehand}</td><td>f</td><td>Sayfada serbest çizm yapmak için tıklayın+ sürükleyin</td></tr>
 <tr><td>{$a->highlight}</td><td>h</td><td>Mevcut sayfa içeriğinde yarı şeffaf bir vurgu çizmek için tıklayın + sürükleyin (veya tıklayın, hareket ettirin, tıklayın)</td></tr>
 <tr><td>{$a->stamp}</td><td>s</td><td>Seçilen damgayı varsayılan boyutta eklemek için tıklayın. Farklı bir boyuta eklemek için tıklayın + sürükleyin
</td></tr>
 <tr><td>{$a->erase}</td><td>e</td><td>Silmek için bir not üzerinde (bir yorum değil) tıklayın</td></tr>
 <tr><td>Hızlıliste</td><td> </td><td>Daha önce \'hızlı listeye\' kaydedilmiş bir ek açıklama eklemek için sayfayı sağ tıklayın. İstenmeyen çabucak liste öğelerini silmek için \'x\' kullanın.</td></tr>
 </table>';
$string['backtocommentlist'] = 'Yorumlara geri dön';
$string['badaction'] = 'Geçersiz eylem\'{$a}';
$string['badannotationid'] = 'Ek açıklama kimliği, farklı bir gönderim veya sayfa içindir.';
$string['badcommentid'] = 'Yorum kimliği, farklı bir gönderme veya sayfa içindir.';
$string['badcoordinate'] = 'Satırdaki tek sayıdaki koordinat sayısı - nokta başına 2 koordinat olmalıdır.';
$string['badpath'] = 'Yol ucu geçersiz';
$string['badtype'] = 'Geçersiz tür :  {$a}';
$string['cancel'] = 'İptal';
$string['clearimagecache'] = 'Sayfanın resin ön belleğini temizle';
$string['colourblack'] = 'Siyah';
$string['colourblue'] = 'Mavi';
$string['colourclear'] = 'Temizle';
$string['colourgreen'] = 'Yeşil';
$string['colourred'] = 'Kırmızı';
$string['colourwhite'] = 'Beyaz';
$string['colouryellow'] = 'Sarı';
$string['comment'] = 'Yorum';
$string['commentcolour'] = '[,] - arka plan rengini yorumla';
$string['commenticon'] = 'c - Bir çizgi çizmek için commentsnHold Ctrl ekleyin';
$string['deletecomment'] = 'Yorumu sil';
$string['deleteresponse'] = 'Yanıtı sil';
$string['deleteresponseconfirm'] = '\'{$a->assignmentname}\' ödevinde {$a->username} için verilen yanıtı silmek istediğinizden emin misiniz?';
$string['downloadoriginal'] = 'Orjinal başvuru PDF ini indir';
$string['downloadresponse'] = 'İndirme yanıtı';
$string['draftsaved'] = 'Taslak kaydedildi';
$string['emptyquicklist'] = 'Hızlı Listede öğe yok';
$string['emptyquicklist_instructions'] = 'Bir Yorumu sağ tıklayıp hızlı listeye kopyalayın';
$string['emptysubmission'] = 'Boş başvuru';
$string['enabled'] = 'PDF geribeslemesi';
$string['enabled_help'] = 'Bu, PDF\'lerin çevrimiçi ek açıklamalarını (PDF gönderme türünü kullanarak gönderilir) ve ek açıklama çalışmanın öğrencilere geri gönderilmesine olanak tanır.';
$string['eraseicon'] = 'e - çizgileri ve şekilleri sil';
$string['errorgenerateimage'] = 'Resim oluşturulamadı - ayrıntılar: {$a}';
$string['errormessage'] = 'Hata mesajı:';
$string['errornosubmission'] = 'Olmayan gönerim için resim yaratma girişimi';
$string['errornosubmission2'] = 'Başvuru PDFi bulunamadı';
$string['errortempfolder'] = 'Geçici klasör yaratılamadı';
$string['findcomments'] = 'Yorum bul';
$string['findcommentsempty'] = 'Yorum yok';
$string['freehandicon'] = 'f - serbest çizim hatları';
$string['generateresponse'] = 'Yanıt dosyası oluştur';
$string['gspath'] = 'Hayalet komut dosyası yolu';
$string['gspath2'] = 'Çoğu Linux kurulumunda bu, \'/usr/bin/gs\' olarak bırakılabilir. Windows\'ta \'c: gsbingswin32c.exe\' gibi bir şey olacaktır (yolda boşluk olmamasına dikkat edin - gerekirse \'gswin32c.exe\' ve \'gsdll32.dll\' dosyalarını boşluk bırakmadan yeni bir klasöre kopyalayın.)';
$string['highlighticon'] = 'h - vurgulama metni';
$string['imagefor'] = '{$a} için resim dosyaları';
$string['jsrequired'] = 'PDF ek açıklamalarının çalışabilmesi için tarayıcınızda javascript etkinleştirilmiş olmalıdır';
$string['keyboardnext'] = 'n - sonraki sayfa';
$string['keyboardprev'] = 'p - önceki sayfa';
$string['linecolour'] = '{,} - çizgi rengi';
$string['lineicon'] = 'l - satırlar';
$string['missingannotationdata'] = 'Eksik ek açıklama verileri';
$string['missingcommentdata'] = 'Eksik Yorum verileri';
$string['missingquicklistdata'] = 'Eksik hızlı liste verileri';
$string['next'] = 'Sonraki';
$string['nocomments'] = 'Yorum yok';
$string['nogroup'] = 'Grup yok';
$string['okagain'] = 'Tamam a basın ve tekrar deneyin';
$string['openlinknewwindow'] = 'Bağlantıları yeni pencerede aç';
$string['opennewwindow'] = 'Bu sayfayı yeni bir pencerede açın';
$string['ovalicon'] = 'o - ovaller';
$string['pagenumber'] = 'Sayfa numarası';
$string['pagenumbertoobig'] = 'İstenen sayfa numarası sayfa sayısından daha büyük ({$a->pageno} > {$a->pagecount})';
$string['pagenumbertoosmall'] = 'İstenen sayfa numarası çok küçük  (<1)';
$string['pdf'] = 'PDF geri bildirimi';
$string['pluginname'] = 'PDF geri bildirimi';
$string['previous'] = 'Önceki';
$string['previousnone'] = 'Yok';
$string['quicklist'] = 'Yorum hızlı listesi';
$string['rectangleicon'] = 'r - dikdörtgen';
$string['resend'] = 'Yeniden gönder';
$string['responsefor'] = 'İçin yanıt dosyası {$a}';
$string['responseok'] = 'Yanıt dosyası oluşturuldu';
$string['responseproblem'] = 'Yanıt dosyası oluşturulurken bir sorun oluştu.';
$string['savedraft'] = 'Taslak dipnotları kaydet';
$string['servercommfailed'] = 'Sunucuyla iletişim başarısız oldu - mesajı yeniden yollamak ister misiniz ?';
$string['showpreviousassignment'] = 'Önceki ödevi göster';
$string['stamp'] = 'Damgayı seçin';
$string['stampicon'] = 's - damga';
$string['test_doesnotexist'] = 'Ghostscript yolu mevcut olmayan bir dosyayı işaret eder';
$string['test_empty'] = 'Ghostscript yolu boş - lütfen doğru yolu girin';
$string['test_isdir'] = 'Ghostscript yolu bir klasörü işaret eder, lütfen belirttiğiniz yola ghostscript programını ekleyin';
$string['test_notestfile'] = 'Test PDF eksik';
$string['test_notexecutable'] = 'Ghostscript, yürütülebilir olmayan bir dosyaya işaret eder';
$string['test_ok'] = 'Ghostscript dosyası yolu Tamam gibi görünüyor - lütfen aşağıdaki resimde mesajı görebilirsiniz';
$string['testgs'] = 'Ghostscript dosyasının yolunu test edin';
$string['viewresponse'] = 'Yanıtı çevrimiçi görüntüleyin';
