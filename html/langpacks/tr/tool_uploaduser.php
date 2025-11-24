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
 * Strings for component 'tool_uploaduser', language 'tr', version '4.5'.
 *
 * @package     tool_uploaduser
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'Silme izni';
$string['allowrenames'] = 'Yeniden adlandırabilir';
$string['allowsuspends'] = 'Hesapları askıya alma ve aktif etme izni';
$string['assignedsysrole'] = 'Atanan sistem rolü {$a}';
$string['clidefault'] = 'Geçerli:';
$string['clierrorargument'] = '--{$a->name} bağımsız değişkeninin değeri geçerli değil. İzin verilen değerler: {$a->değerler}';
$string['clifile'] = 'Kullanıcı verilerini içeren CSV dosyasının yolu. Gerekli.';
$string['clifilenotreadable'] = 'Dosya {$a} mevcut değil veya okunabilir değil';
$string['clihelp'] = 'Bu yardımın çıktısını alın.';
$string['climissingargument'] = 'Argüman --{$a} gereklidir';
$string['clititle'] = 'Komut satırı Yükleme kullanıcı aracı.';
$string['clivalidationerror'] = 'Doğrulama hatası:';
$string['csvdelimiter'] = 'CSV ayracı';
$string['defaultvalues'] = 'Varsayılan değerler';
$string['deleteerrors'] = 'Hataları sil';
$string['duplicateemail'] = 'email {$a} ile birden fazla kullanıcı tespit edildi';
$string['encoding'] = 'Kodlama';
$string['errormnetadd'] = 'Uzak kullanıcılareklenemiyor';
$string['errorprefix'] = 'Hata:';
$string['errors'] = 'Hatalar';
$string['examplecsv'] = 'Örnek metin dosyası';
$string['examplecsv_help'] = 'Örnek metin dosyasını kullanmak için dosyayı indirin ve ardından bir metin veya elektronik tablo düzenleyicisi ile açın. İlk satırı değiştirmeden bırakın, ardından sonraki satırları (kayıtları) düzenleyin ve kullanıcı verilerinizi ekleyin, gerektiğinde daha fazla satır ekleyin. Dosyayı CSV olarak kaydedin ve ardından yükleyin.

Kullanıcı verilerini önizleyebildiğiniz ve kullanıcı hesapları oluşturulmadan önce işlemi iptal etmeyi seçebildiğiniz için örnek metin dosyası test için de kullanılabilir.';
$string['infoprefix'] = 'Bilgi:';
$string['invalidtheme'] = 'Tema "{$a}" yüklü değil ve yok sayılacak.';
$string['invalidupdatetype'] = 'Bu seçenek, seçilen yükleme türü ile seçilemez.';
$string['invaliduserdata'] = '{$a} kullanıcısı için geçersiz veri tespit edildi ve otomatik olarak temizlendi.';
$string['invaliduserdatavalues'] = 'Kullanıcı {$a->kullanıcı adı} için yanlış veri ({$a->değerler}) bulundu. Bu veri düzeltildi veya silindi.';
$string['linex'] = 'Line {$a}';
$string['matchemail'] = 'E-posta adresinde eşleşme';
$string['nochanges'] = 'Değişiklik yok';
$string['notheme'] = 'Bu kullanıcı için herhangi bir tema tanımlanmamıştır.';
$string['pluginname'] = 'Kullanıcı yükleme';
$string['privacy:metadata'] = 'Kullanıcı yükleme eklentisi herhangi bir kişisel veri saklamaz.';
$string['renameerrors'] = 'Yeniden adlandırmada hata';
$string['requiredtemplate'] = 'Gerekli. Burada şablon sözdizimini kullanabilirsiniz (%l = lastname, %f = firstname, %u = username). . Ayrıntılar ve örnekler için yardıma bakabilirsiniz.';
$string['rowpreviewnum'] = 'Başlıkları yeniden yaz';
$string['unassignedsysrole'] = 'Atanmamış sistem rolü {$a}';
$string['uploadpicture_baduserfield'] = 'Belirtilen kullanıcı özniteliği geçerli değil. Lütfen tekrar deneyin.';
$string['uploadpicture_cannotmovezip'] = 'Zip dosyası geçici dizine taşınamıyor.';
$string['uploadpicture_cannotprocessdir'] = 'Ziplenmemiş dosyalar işlenemiyor.';
$string['uploadpicture_cannotsave'] = 'Kullanıcı {$a} resmi kaydedilemiyor. Orijinal resim dosyasını seçin.';
$string['uploadpicture_cannotunzip'] = 'Resim dosyasının zip sıkıştırması açılamıyor.';
$string['uploadpicture_invalidfilename'] = 'Resim dosyası {$a} adında geçersiz karakterler var. Atlanıyor.';
$string['uploadpicture_overwrite'] = 'Kullanıcının resmi varsa üzerine yaz';
$string['uploadpicture_userfield'] = 'Resimle eşleştirilecek kullanıcı özelliği';
$string['uploadpicture_usernotfound'] = 'Kullanıcının, \'{$a->uservalue}\' değerinin \'{$a->userfield}\' niteliği yok. Atlanıyor.';
$string['uploadpicture_userskipped'] = '{$a} kullanıcısı atlanıyor (resmi zaten var)';
$string['uploadpicture_userupdated'] = '{$a} kullanıcısı için resim yüklendi.';
$string['uploadpictures'] = 'Kullanıcı resimleri yükle';
$string['uploadpictures_help'] = 'Kullanıcı fotoğrafları, resim dosyasının zip sıkıştırması olarak yüklenebilir. Resim dosyaları seçilen kullanıcı-ozelliği.uzantı şeklinde isimlendirilmelidir. örneğin, kullanıcı adı user1234 olan bir kullanıcının, dosyada adı user1234.jpg adlı olmalıdır.';
$string['uploaduser:uploaduserpictures'] = 'Kullanıcı resimlerini yükle';
$string['uploadusers'] = 'Kullanıcı yükle';
$string['uploadusers_help'] = 'Kullanıcılar metin dosyası aracılığıyla yüklenebilir (ve isteğe bağlı olarak kurslara kaydedilebilir). Dosyanın formatı aşağıdaki gibi olmalıdır:

* Dosyanın her satırı bir kayıt içerir
* Her kayıt, seçilen ayırıcı ile ayrılmış bir dizi veridir
* İlk kayıt, dosyanın geri kalanının formatını tanımlayan alan adlarının bir listesini içerir
* Gerekli alan adları kullanıcı adı, şifre, ad, soyad, e-posta';
$string['uploadusers_link'] = 'admin/tool/uploaduser/index';
$string['uploaduserspreview'] = 'Kullanıcıların önizlemesini yükle';
$string['uploadusersresult'] = 'Kullanıcı sonuçlarını yükle';
$string['useraccountupdated'] = 'Kullanıcı güncellendi';
$string['useraccountuptodate'] = 'Kullanıcı güncel';
$string['userdeleted'] = 'Kullanıcı silindi';
$string['userrenamed'] = 'Kullanıcı yeniden adlandırıldı';
$string['userscreated'] = 'Kullanıcı oluşturuldu';
$string['usersdeleted'] = 'Kullanıcılar silindi';
$string['usersrenamed'] = 'Kullanıcılar yeniden adlandırıldı';
$string['usersskipped'] = 'Atlanan kullanıcılar';
$string['usersupdated'] = 'Kullanıcılar güncellendi';
$string['usersweakpassword'] = 'Güçlü parolası olmayan kullanıcılar';
$string['userthemesnotallowed'] = 'Kullanıcı temaları etkinleştirilmemiştir, bu nedenle yükleme kullanıcıları dosyasına dahil edilenler göz ardı edilecektir.';
$string['uubulk'] = 'Toplu kullanıcı eylemleri için seçin';
$string['uubulkall'] = 'Tüm kullanıcılar';
$string['uubulknew'] = 'Yeni kullanıcılar';
$string['uubulkupdated'] = 'Güncellenmiş kullanıcılar';
$string['uucsvline'] = 'CSV satırı';
$string['uulegacy1role'] = '(Orijinal Öğenci) typeN=1';
$string['uulegacy2role'] = '(Orijinal Öğretmen) typeN=2';
$string['uulegacy3role'] = '(Orijinal düzeltme hakkı olmayan eğitmen) typeN=3';
$string['uunoemailduplicates'] = 'E-posta adresi tekrarını engelle';
$string['uuoptype'] = 'Yükleme tipi';
$string['uuoptype_addinc'] = 'Bunlara ek olarak, gerekirse kullanıcı adlarınına sayaç ekle';
$string['uuoptype_addnew'] = 'Yalnızca yenileri ekle, mevcut kullanıcıları atla';
$string['uuoptype_addupdate'] = 'Yeni ekle ve mevcut kullanıcıları güncelle';
$string['uuoptype_update'] = 'Yalnızca mevcut kullanıcıları güncelle';
$string['uupasswordcron'] = 'Cron içinde oluşturulan';
$string['uupasswordnew'] = 'Yeni kullanıcı şifresi';
$string['uupasswordold'] = 'Mevcut kullanıcı şifresi';
$string['uustandardusernames'] = 'Kullanıcı adlarını standartlaştırın';
$string['uuupdateall'] = 'Dosya ve varsayılanlarla geçersiz kıl';
$string['uuupdatefromfile'] = 'Dosya ile geçersiz kıl';
$string['uuupdatemissing'] = 'Dosyada ve varsayılanlardaki eksiği doldur';
$string['uuupdatetype'] = 'Mevcut kullanıcı ayrıntıları';
$string['uuusernametemplate'] = 'Kullanıca adı şablonu';
$string['warningprefix'] = 'Uyarı:';
