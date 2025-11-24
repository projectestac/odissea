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
 * Strings for component 'tool_customlang', language 'tr', version '4.5'.
 *
 * @package     tool_customlang
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkin'] = 'Dizeleri dil paketine kaydet';
$string['checkout'] = 'Dil paketini düzenleme için aç';
$string['checkoutdone'] = 'Dil paketi yüklendi';
$string['checkoutinprogress'] = 'Dil paketi yükleniyor';
$string['cliexportfileexists'] = '{$a->lang} için dosya zaten mevcut, atlanıyor. Eğer üzerine yazmak istiyorsanız --override=true seçeneğini ekleyin.';
$string['cliexportfilenotfoundforcomponent'] = 'Dosya {$a->filepath} dil {$a->lang} için bulunamadı. Bu dosya atlanıyor.';
$string['cliexportheading'] = 'Dil dosyalarını dışa aktarmaya başlayın.';
$string['cliexportnofilefoundforlang'] = 'Dışa aktarılacak dosya bulunamadı. Bu dil için dışa aktarma atlanıyor.';
$string['cliexportstartexport'] = '{$a} dili dışa aktarılıyor';
$string['cliexportzipdone'] = 'Zip oluşturuldu: {$a}';
$string['cliexportzipfail'] = 'zip {$a} oluşturulamıyor';
$string['clifiles'] = '{$a} a aktarılacak dosyalar';
$string['cliimporting'] = 'Dosya dizesini içe aktar (mode {$a})';
$string['climissingfiles'] = 'Geçerli dosyalar eksik';
$string['climissinglang'] = 'Eksik dil';
$string['climissingmode'] = 'Eksik veya geçersiz mod (hepsi geçerli, yeni veya güncelleme)';
$string['climissingsource'] = 'Eksik dosya veya klasör';
$string['clinolog'] = '{$a} a aktarılacak hiçbir şey yok';
$string['confirmcheckin'] = 'Değişiklikleri yerel dil paketinize kaydetmek üzeresiniz. Bu, özelleştirilmiş dizeleri çevirmenden site veri dizininize aktaracak ve siteniz değiştirilmiş dizeleri kullanmaya başlayacaktır. Kaydetmeye devam etmek için \'Devam\' düğmesine basın.';
$string['customlang:edit'] = 'Yerel çeviriyi düzenle';
$string['customlang:export'] = 'Yerel çeviriyi dışa aktar';
$string['customlang:view'] = 'Yerel çeviriyi görüntüle';
$string['editlangpack'] = 'Dil paketini düzenle';
$string['export'] = 'Özel dizeleri dışa aktar';
$string['exportfilter'] = 'Dışa aktarılacak bileşen(ler)i seçin';
$string['exportzipfilename'] = 'customlang-export-{$a->lang}.zip';
$string['filter'] = 'Dizeleri süz';
$string['filtercomponent'] = 'Bu bileşenlerin dizelerini göster';
$string['filtercustomized'] = 'Yalnızca kişiselleştirilmiş';
$string['filtermodified'] = 'Yalnızca bu oturumda değiştirilenler';
$string['filteronlyhelps'] = 'Yalnızca  yardım';
$string['filtershowstrings'] = 'Dizeleri göster';
$string['filterstringid'] = 'Dize tanımlayıcı';
$string['filtersubstring'] = 'Sadece içeren dizeler';
$string['headingcomponent'] = 'Bileşen';
$string['headinglocal'] = 'Yerel özelleştirme';
$string['headingstandard'] = 'Standart metin';
$string['headingstringid'] = 'Dize';
$string['import'] = 'Özel dizeleri içe aktar';
$string['import_all'] = 'Bileşen(ler)deki tüm dizeleri oluşturma veya güncelleme';
$string['import_mode'] = 'İçe aktarma modu';
$string['import_new'] = 'Yerel özelleştirme olmadan yalnızca dizeler oluşturun';
$string['import_update'] = 'Yalnızca yerel özelleştirmeye sahip dizeleri güncelleyin';
$string['importfile'] = 'Dosyayı içe aktar';
$string['langpack'] = 'Dil bileşenleri';
$string['markinguptodate'] = 'Değerlendirmeyi güncel olarak işaretleme';
$string['markinguptodate_help'] = 'Dize sitenizde özelleştirildiğinden İngilizce orijinal veya ana çevirinin değiştirilmesi durumunda, özelleştirilmiş çeviri eski haline gelebilir. Özelleştirilmiş çeviriyi gözden geçirin. Onu güncel bulursanız onay kutusunu tıklayın. Aksi takdirde düzenleyin.';
$string['markuptodate'] = 'Güncel olarak işaretle';
$string['modifiedno'] = 'Kaydedilecek değiştirilmiş dizeler yok.';
$string['modifiednum'] = '{$a} Değiştirilen dizeler var. Bu değişiklikleri yerel dil paketinize kaydetmek istiyor musunuz?';
$string['nolocallang'] = 'Yerel dizge bulunamadı.';
$string['nostringsfound'] = 'Dize bulunamadı, lütfen filtre ayarlarını değiştirin';
$string['notice_ignorenew'] = 'Özelleştirilmediği için {$a->component}/{$a->stringid} dizesi yok sayılıyor.';
$string['notice_ignoreupdate'] = 'Zaten tanımlı olduğu için {$a->component}/{$a->stringid} dizesi yok sayıldı.';
$string['notice_inexitentstring'] = 'String {$a->component}/{$a->stringid} bulunamadı.';
$string['notice_missingcomponent'] = 'Eksik bileşen {$a->component}.';
$string['notice_success'] = 'String {$a->component}/{$a->stringid} başarıyla güncellendi.';
$string['placeholder'] = 'Yer Tutucular';
$string['placeholder_help'] = 'Yer tutucular, dize içinde `{$a}` ya da `{$a->something}` gibi özel ifadelerdir. Dize gerçekten basıldığında bir değerle değiştirilirler.

Bunları tam olarak orijinal dizede olduğu gibi kopyalamak önemlidir. Onları tercüme etmeyin veya sol-sağ yönelimlerini değiştirmeyin.';
$string['placeholderwarning'] = 'Dize bir yer tutucu içeriyor';
$string['pluginname'] = 'Dili özelleştirme';
$string['privacy:metadata'] = 'Dil özelleştirme eklentisi herhangi bir kişisel veri saklamaz.';
$string['savecheckin'] = 'Değişiklikleri dil paketine kaydet';
$string['savecontinue'] = 'Değişiklikleri uygula ve düzenlemeye devam et';
