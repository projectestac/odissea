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
 * Strings for component 'customlesson', language 'tr', version '4.5'.
 *
 * @package     customlesson
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitylinkname'] = '{$a} öğesine gidin';
$string['attempt'] = 'Deneme: {$a}';
$string['cancel'] = 'İptal';
$string['cannotfindnextpage'] = 'Ders yedeği: Sonraki sayfa bulunamadı!';
$string['cannotfindpages'] = 'Kurs sayfaları bulunamadı';
$string['cannotfindrecords'] = 'Hata: ders kayıtları bulunamadı';
$string['canretake'] = '{$a} yeniden alabilir';
$string['completed'] = 'Tamamlandı';
$string['completederror'] = 'Kurs tamamla';
$string['completethefollowingconditions'] = 'Devam edebilmeniz için <b>{$a}</b> dersinde aşağıdaki koşul(lar)ı tamamlamanız gerekir.';
$string['congratulations'] = 'Tebrikler - dersin sonuna ulaşıldı';
$string['deleteallattempts'] = 'Tüm ders denemelerini sil';
$string['deletedefaults'] = '{$a} x ders varsayılanı silindi';
$string['deletingpage'] = 'Sayfa siliniyor: {$a}';
$string['displayleftif_help'] = 'Bu ayar, bir öğrencinin sol menüyü görüntülemeden önce belirli bir not alması gerekip gerekmediğini belirler. Bu, öğrenciyi ilk denemesinde tüm dersi gözden geçirmeye zorlar, ardından gerekli notu aldıktan sonra gözden geçirme için sol menüyü kullanabilir.';
$string['displayscorewithoutessays'] = 'Puanınız {$a->score} ({$a->grade} üzerinden).';
$string['edit'] = 'Düzenle';
$string['editingquestionpage'] = '{$a} soru sayfası düzenleniyor';
$string['editlessonsettings'] = 'Kurs ayarlarını düzenle';
$string['editpage'] = 'Sayfa içeriğini düzenle';
$string['editpagecontent'] = 'Sayfa içeriğini düzenle';
$string['eolstudentoutoftime'] = 'Dikkat: Bu ders için zamanınız bitti. Son cevabınız, süre dolduktan sonra cevaplandıysa sayılmaz.';
$string['eolstudentoutoftimenoanswers'] = 'Hiçbir soruya cevap vermedin. Bu ders için 0 aldınız.';
$string['gotoendoflesson'] = 'Dersin sonuna git';
$string['handlingofretakes_help'] = 'Tekrarlara izin veriliyorsa, bu ayar ders notunun tüm denemelerin ortalaması mı yoksa maksimumu mu olduğunu belirtir.';
$string['importcount'] = '{$a} soru içe aktarılıyor';
$string['importindividualdata'] = 'Kişisel verileri içe aktarın';
$string['importquestions'] = 'Soruları içe aktar';
$string['insertedpage'] = 'Eklenen sayfa';
$string['invalidid'] = 'Hiçbir kurs modülü kimliği veya ders kimliği geçilmedi';
$string['invalidlessonid'] = 'ders kimliği yanlıştı';
$string['leftduringtimedsession'] = 'Süreli bir ders sırasında ayrıldınız.';
$string['lesson:edit'] = 'Bir ders etkinliğini düzenle';
$string['lessonattempted'] = 'Ders denemesi yapıldı';
$string['lessoncloses'] = 'Ders kapandı';
$string['lessoncloseson'] = '{$a} tarihinde ders kapanıyor';
$string['lessonformating'] = 'Ders biçimlendirme';
$string['lessonmenu'] = 'Ders menüsü';
$string['lessonopens'] = 'Ders başlıyor';
$string['lessonpagelinkingbroken'] = 'İlk sayfa bulunamadı.  Ders sayfası bağlantısı bozuk olmalı.  Lütfen bir yönetici ile iletişime geçin.';
$string['lessonstats'] = 'Ders istatistikleri';
$string['maximumnumberofanswersbranches_help'] = 'Bu ayar, derste kullanılabilecek en yüksek cevap sayısını belirtir. Yalnızca doğru/yanlış soruları kullanılıyorsa, 2 olarak ayarlanabilir. Ayar herhangi bir zamanda değiştirilebilir, çünkü verileri değil yalnızca öğretmenin gördüklerini etkiler.';
$string['modulename'] = 'Özel Ders';
$string['modulename_help'] = 'Özel Ders etkinlik modülü, geleneksel Ders\'in bir çeşididir ve dersleri, soruları ve cevapları öğrenci bazında özelleştirmeye olanak tanır.  (Geleneksel) ders etkinlik modülü, bir öğretmenin içerik ve/veya uygulama etkinliklerini ilginç ve esnek yollarla sunmasını sağlar. Bir öğretmen dersi, öğrenci için çeşitli yollar veya seçenekler sunan doğrusal bir içerik sayfaları veya öğretim etkinlikleri kümesi oluşturmak için kullanabilir. Her iki durumda da öğretmenler çoktan seçmeli, eşleştirmeli ve kısa cevaplı gibi çeşitli sorular ekleyerek katılımı artırmayı ve anlamayı sağlamayı seçebilirler. Öğrencinin cevap seçimine ve öğretmenin dersi nasıl geliştirdiğine bağlı olarak, öğrenciler bir sonraki sayfaya ilerleyebilir, önceki bir sayfaya geri dönebilir veya tamamen farklı bir yola yönlendirilebilir.

Bir derse not verilebilir ve not not defterine kaydedilebilir.

Dersler şu durumlarda kullanılabilir

* Yeni bir konunun kendi kendine öğrenilmesi için
* Senaryolar veya simülasyonlar/karar verme alıştırmaları için
* Başlangıç sorularına verilen cevaplara bağlı olarak farklı revizyon soru setleri ile farklılaştırılmış revizyon için';
$string['modulename_link'] = 'mod/customlesson/view';
$string['page-mod-lesson-view'] = 'Kurs sayfasını görüntüleme veya önizleme';
$string['preview'] = 'Önizleme';
$string['previewlesson'] = 'Önizleme {$a}';
$string['reviewquestionback'] = 'Evet, tekrar denemek istiyorum';
$string['savechanges'] = 'Değişiklikleri Kaydet';
$string['savechangesandeol'] = 'Tüm değişiklikleri kaydedin ve dersin sonuna gidin.';
$string['savepage'] = 'Sayfayı kaydet';
$string['score'] = 'Puan';
$string['scores'] = 'Puanlar';
$string['submit'] = 'Gönder';
$string['truefalse'] = 'Doğru/yanlış';
$string['youshouldview'] = 'En azından cevap vermelisiniz: {$a}';
