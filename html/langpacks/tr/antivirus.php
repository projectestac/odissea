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
 * Strings for component 'antivirus', language 'tr', version '4.5'.
 *
 * @package     antivirus
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actantivirushdr'] = 'Kullanılabilir antivirüs eklentileri';
$string['antiviruscommonsettings'] = 'Genel antivirüs ayarları';
$string['antiviruses'] = 'Antivirus eklentileri';
$string['antivirussettings'] = 'Antivirüs eklentilerini yönetin';
$string['configantivirusplugins'] = 'Lütfen, kullanmak istediğiniz virüsten koruma eklentilerini seçin ve uygulanması için ayarlayın.';
$string['dataerrordesc'] = 'Veri tarayıcı hatası oluştu.';
$string['dataerrorname'] = 'Veri tarayıcı hatası';
$string['datainfecteddesc'] = 'Etkilenen veriler tespit edildi.';
$string['datainfectedname'] = 'Veriler virüslü';
$string['datastream'] = 'Veri';
$string['emailadditionalinfo'] = 'Virüs motorundan döndürülen ek ayrıntılar:';
$string['emailauthor'] = 'Yükleyen:';
$string['emailcontenthash'] = 'İçerik karıştırıcısı:';
$string['emailcontenttype'] = 'İçerik türü:';
$string['emaildate'] = 'Yükleme tarihi:';
$string['emailfilename'] = 'Dosya adı:';
$string['emailfilesize'] = 'Dosya boyutu:';
$string['emailgeoinfo'] = 'Coğrafi konum:';
$string['emailinfectedfiledetected'] = 'Virüslü dosya tespit edildi';
$string['emailipaddress'] = 'IP adresi:';
$string['emailreferer'] = 'Yönlendiren:';
$string['emailreport'] = 'Bildiri:';
$string['emailscanner'] = 'Tarayıcı:';
$string['emailscannererrordetected'] = 'Bir tarayıcı hatası oluştu';
$string['emailsubject'] = '{$a} :: Antivirüs bildirimi';
$string['enablequarantine'] = 'Karantinayı etkinleştir';
$string['enablequarantine_help'] = 'Etkinleştirilirse, virüs olarak algılanan dosyalar daha sonra incelenmek üzere bir karantina klasörüne ([dataroot]/{$a}) yerleştirilir. Moodle\'a yükleme başarısız olacaktır. Dosya sistemi düzeyinde herhangi bir virüs taraması yapıyorsanız, karantinaya alınan dosyaların algılanmasını önlemek için karantina klasörü virüsten koruma denetiminden çıkarılmalıdır.
tutulmalıdır.';
$string['fileerrordesc'] = 'Dosya tarayıcı hatası oluştu.';
$string['fileerrorname'] = 'Dosya tarayıcı hatası';
$string['fileinfecteddesc'] = 'Virüs bulaşmış bir dosya tespit edildi.';
$string['fileinfectedname'] = 'Virüs bulaşmış dosya';
$string['notifyemail'] = 'Antivirüs uyarı bildirim e-postası';
$string['notifyemail_help'] = 'Bir virüs algılandığında bildirimler için e-posta adresi. Boş bırakılırsa, tüm site yöneticilerine bildirim gönderilir.';
$string['notifylevel'] = 'Bildirim düzeyi';
$string['notifylevel_help'] = 'Hakkında bilgilendirilmek istediğiniz farklı bilgi seviyeleri';
$string['notifylevelerror'] = 'Tespit edilen tehditler ve tarayıcı hataları';
$string['notifylevelfound'] = 'Yalnızca algılanan tehditler';
$string['privacy:metadata'] = 'Antivirüs sistemi herhangi bir kişisel veri depolamaz.';
$string['quarantinedfiles'] = 'Antivirüs karantinaya alınan dosyalar';
$string['quarantinedisabled'] = 'Karantina devre dışı. Dosya saklanmaz.';
$string['quarantinetime'] = 'Maksimum karantina süresi';
$string['quarantinetime_desc'] = 'Belirtilen süreden daha eski olan karantinaya alınan dosyalar kaldırılacaktır.';
$string['taskcleanup'] = 'Karantinaya alınan dosyaları temizleyin.';
$string['threshold'] = 'Durum kontrolü için eşik';
$string['threshold_desc'] = '{$a}\'da bildirildiği gibi, hatalar vb. için önceki sonuçlarla ne kadar geriye gidileceği.';
$string['unknown'] = 'Bilinmeyen';
$string['virusfound'] = '{$a->item} bir virüs denetleyicisi tarafından tarandı ve virüs bulaştığı tespit edildi!';
