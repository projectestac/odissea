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
 * Strings for component 'antivirus_clamav', language 'tr', version '4.5'.
 *
 * @package     antivirus_clamav
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['antivirusfailed'] = 'Şu anda AntiVirus taramasında bir sorun var. {$a->item} dosyanız yüklenmedi. Lütfen daha sonra tekrar deneyiniz.';
$string['clamfailed'] = 'Clam AV çalıştırılırken hata oluştu. Geri dönen hata mesajı {$a}. Clam çıktısı:';
$string['clamfailureonupload'] = 'ClamAV\'de hata oluştuğunda';
$string['configclamactlikevirus'] = 'Dosyalara virüs olarak davran';
$string['configclamdonothing'] = 'Dosyalara sorunsuz olarak davran';
$string['configclamfailureonupload'] = '\'Dosyaları TAMAMLA muamele et\' seçilirse, dosyalar hedef dizine taşınır. \'Yüklemeyi reddet, tekrar dene\' seçilirse, kullanıcıdan daha sonra tekrar denemesi istenir. \'Virüs gibi dosyaları tedavi et\' seçilirse, dosyalar karantina alanına taşınır veya silinir. Uyarı: Bu seçenekle, herhangi bir nedenden dolayı istiridye çalıştırılamazsa (genellikle geçersiz bir pathtoclam nedeniyle), yüklenen TÜM dosyalar verilen karantina alanına taşınır veya silinir.';
$string['configclamtryagain'] = 'Yüklemeyi reddet, tekrar dene';
$string['errorcantopensocket'] = 'Unix alan soketine bağlanma {$a} hatasıyla sonuçlandı';
$string['errorclamavnoresponse'] = 'ClamAV yanıt vermiyor; daemon çalışma durumunu kontrol edin.';
$string['errornounixsocketssupported'] = 'Unix etki alanı soket aktarımı bu sistemde desteklenmemektedir. Lütfen bunun yerine komut satırı seçeneğini kullanın.';
$string['invalidpathtoclam'] = 'Site, dosya yüklemelerinde clam programını çalıştırılmak için yapılandırıldı, ancak Clam AV için belirtilen yol ({$a}) hatalıdır.';
$string['pathtoclam'] = 'Komut satırı';
$string['pathtoclamdesc'] = 'Çalışan yöntem "komut satırı" olarak ayarlanmışsa, buraya ClamAV yolunu girin. Linux\'ta bu / usr / bin / clamscan veya / usr / bin / clamdscan olacaktır.';
$string['pathtounixsocket'] = 'Unix alan soketi';
$string['pathtounixsocketdesc'] = 'Çalışan yöntem "Unix etki alanı soketi" olarak ayarlanmışsa, ClamAV Unix soketinin yolunu buraya girin. Debian Linux\'ta bu /var/run/clamav/clamd.ctl olacaktır. Lütfen clamav arka plan programının yüklenen dosyalara okuma erişimine sahip olduğundan emin olun, bunun en kolay yolu web sunucusu grubunuza \'clamav\' kullanıcısı eklemektir (Debian Linux\'ta \'www-data\').';
$string['pluginname'] = 'ClamAV antivirüs';
$string['privacy:metadata'] = 'ClamAV antivirüs eklentisi herhangi bir kişisel veri depolamaz.';
$string['quarantinedir'] = 'Karantina dizini';
$string['runningmethod'] = 'Koşu yöntemi';
$string['runningmethodcommandline'] = 'Komut satırı';
$string['runningmethoddesc'] = 'ClamAV çalıştırma yöntemi. Komut satırı varsayılan olarak kullanılır, ancak Unix sistemlerde sistem soketleri kullanılarak daha iyi performans elde edilebilir.';
$string['runningmethodtcpsocket'] = 'TCP soketi';
$string['runningmethodunixsocket'] = 'Unix alan soketi';
$string['tcpsockethost'] = 'TCP soketi ana bilgisayar adı';
$string['tcpsockethostdesc'] = 'ClamAV sunucusunun alan adı';
$string['tcpsocketport'] = 'TCP soket bağlantı noktası';
$string['tcpsocketportdesc'] = 'ClamAV\'a bağlanırken kullanılacak bağlantı noktası';
$string['tries'] = 'Tarama denemeleri';
$string['tries_desc'] = 'Tarama işlemi sırasında bir hata varsa ClamAV tarafından yapılan deneme sayısı.';
$string['tries_notice'] = 'Clamav taraması {$a->tries} süreyi denedi.
{$a->notice}';
$string['unknownerror'] = 'Antivirus yazılımında bilinmeyen bir hata var.';
