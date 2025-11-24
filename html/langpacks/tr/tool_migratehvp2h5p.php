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
 * Strings for component 'tool_migratehvp2h5p', language 'tr', version '4.5'.
 *
 * @package     tool_migratehvp2h5p
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['attempted'] = 'Deneme yapan kullanıcılar';
$string['cannot_migrate'] = 'Etkinlik taşınamıyor';
$string['contenttype'] = 'İçerik türü';
$string['copy2cb'] = 'Bu içerikler içerik bankasına eklenmeli mi?';
$string['copy2cb_no'] = 'Hayır, bunlar sadece etkinlikte oluşturulmalıdır.';
$string['copy2cb_yeswithlink'] = 'Evet ve etkinlikte bu dosyalara bir bağlantı kullanılmalıdır.';
$string['copy2cb_yeswithoutlink'] = 'Evet, ancak etkinlikte bir kopya kullanılacaktır (içerik bankasındaki değişiklikler etkinliğe yansıtılmayacaktır)';
$string['error_contenttypeh5p_disabled'] = 'H5P contentbank türü devre dışı bırakıldı. Etkinlikleri mod_hvp\'den geçirmek için etkinleştirilmelidir
ve bunları içerik bankasına da ekleyin. Bu içerik türünü \'Site yönetimi / Eklentiler / içerik bankası / Yönet\' bölümünden etkinleştirebilirsiniz
içerik türleri \' veya geçiş aracını yeniden çalıştırın ve \'Hayır, yalnızca etkinlikte oluşturulmaları gerekir.\'(veya\' kopya2cb=0 \' ise
content bank\'ta dosya oluşturmaktan kaçınmak için CLI çalıştırıyorsunuz).';
$string['error_modh5pactivity_disabled'] = 'H5P etkinliği devre dışı bırakıldı. Etkinlikleri mod_hvp\'den geçirmek için etkinleştirilmelidir';
$string['event_hvp_migrated'] = 'mod_hvp, mod_h5pactivity öğesine taşındı';
$string['graded'] = 'Not verilen kullanıcılar';
$string['hvpactivities'] = 'Bekleyen mod_hvp etkinlikleri';
$string['id'] = 'Kimlik';
$string['keeporiginal'] = 'Taşındıktan sonra orijinal etkinlikle ne yapacağınızı seçin';
$string['keeporiginal_delete'] = 'Orijinal etkinliği sil';
$string['keeporiginal_hide'] = 'Orijinal etkinliği gizle';
$string['keeporiginal_nothing'] = 'Orijinal etkinliği olduğu gibi bırakın';
$string['migrate'] = 'Taşınma';
$string['migrate_fail'] = 'Hvp etkinliğini {$a}kimliğiyle geçirirken hata oluştu';
$string['migrate_gradesoverridden'] = 'Kimliği{$a->ıd} olan orijinal mod_hvp etkinliği "{$a->name}" başarıyla taşındı. Ancak,
    geri bildirim gibi geçersiz kılınan bazı derecelendirme bilgilerine sahiptir; bu bilgiler, orijinal etkinlik
    geçersiz bir maksimum notla yapılandırılmıştır (not defterine geçirilebilmesi için notun 0\'dan yüksek olması gerekir).';
$string['migrate_gradesoverridden_notdelete'] = 'Orijinal mod_hvp etkinliği "{$a->name}", id {$a->id} ile başarıyla taşındı.
Ancak, orijinal etkinlik taşınmadığı için taşınmamış olan geri bildirim gibi bazı değerlendirme bilgileri geçersiz kılınmıştır geçersiz bir maksimum not ile yapılandırılmıştır (not defterine taşınabilmesi için 0\'dan yüksek olması gerekir).
    Orijinal etkinlik kaldırılmak yerine gizlenmiştir.';
$string['migrate_success'] = '{$a} kimliğine sahip Hvp etkinliği başarıyla taşındı';
$string['nohvpactivities'] = 'Mod_h5pactivity öğesine geçirilecek mod_hvp etkinliği yoktur.';
$string['pluginname'] = 'İçeriği mod_hvp\'den mod_h5pactivity\'ye geçirme';
$string['privacy:metadata'] = 'İçeriği mod_hvp\'den mod_h5p\'ye geçirme etkinlik hiçbir kişisel veri saklamaz';
$string['savedstate'] = 'Kaydedilmiş durum';
$string['selecthvpactivity'] = '{$a} mod_hvp etkinliğini seçin';
$string['settings'] = 'Taşınma ayarları';
