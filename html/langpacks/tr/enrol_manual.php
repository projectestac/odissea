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
 * Strings for component 'enrol_manual', language 'tr', version '4.5'.
 *
 * @package     enrol_manual
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advanced'] = 'Gelişmiş';
$string['alterstatus'] = 'Durumu değiştir';
$string['altertimeend'] = 'Bitiş saatini değiştir';
$string['altertimestart'] = 'Başlama saatini değiştir';
$string['assignrole'] = 'Rol ata';
$string['assignroles'] = 'Rol ata';
$string['browsecohorts'] = 'Topluluklara göz at';
$string['browseusers'] = 'Kullanıcılara göz at';
$string['confirmbulkdeleteenrolment'] = 'Meta kayıt senkronizasyon görevi';
$string['defaultperiod'] = 'Varsayılan ders kayıt süresi';
$string['defaultperiod_desc'] = 'Bu kayıtlanmanın varsayılan süresi geçerli. Eğer sıfır olarak atanırsa, kayıt süresi varsayılan olarak sınırsız kabul edilecektir.';
$string['defaultperiod_help'] = 'Bu kayıtlanmanın varsayılan süresi geçerli, şu andan itibaren kullanıcı derse kayıtlanmıştır. Eğer devre dışı bırakılırsa, kayıtlanma süresi varsayılan olarak sınırsız kabul edilecektir.';
$string['defaultstart'] = 'Varsayılan kayıt başlatma';
$string['deleteselectedusers'] = 'Seçilen kullanıcı (ders) kayıtlanmalarını sil';
$string['editselectedusers'] = 'Seçilen kullanıcı kayıtlarını düzenleme';
$string['enrolledincourserole'] = '"{$a->course}" kursuna"{$a->role}" olarak kaydolundu';
$string['enrolusers'] = 'Kullanıcıları kaydet';
$string['enroluserscohorts'] = 'Seçili kullanıcıları yada grupları derse ata';
$string['expiredaction'] = 'Kayıt son kullanma haraketi';
$string['expiredaction_help'] = 'Kullanıcı kaydı sona erdiğinde gerçekleştirilecek eylemi seçin. Lütfen bazı kullanıcı verilerinin ve ayarlarının kurs kaydının silinmesi sırasında kurstan temizlendiğini unutmayın.';
$string['expirymessageenrolledbody'] = 'Sayın {$a->user},

Bu \'{$a->course}\' kursundaki kaydınızın {$a->timeend} tarihinde sona ereceğini belirten bir bildirimdir.

Yardıma ihtiyacınız varsa, lütfen {$a->enroller} ile iletişime geçin.';
$string['expirymessageenrolledsubject'] = 'Kayıt son bildirimi';
$string['expirymessageenrollerbody'] = 'Aşağıdaki kullanıcıların \'{$a->course}\' kurs kayıtları {$a->threshold} tarihinde sona erecektir.

{$a->users}

Kayıt sürelerini buradan {$a->extendurl} uzatabilirsiniz.';
$string['expirymessageenrollersubject'] = 'Ders kayıt bitimi bildirimi';
$string['managemanualenrolements'] = 'Manuel kayıtları yönetin';
$string['manual:config'] = 'El ile kayıt örneklerini yapılandır';
$string['manual:enrol'] = 'Kullanıcıları kaydet';
$string['manual:manage'] = 'Kullanıcı kayıtlarını yönet';
$string['manual:unenrol'] = 'Kullanıcıları dersten sil';
$string['manual:unenrolself'] = 'Kendini dersten kaydettirdmeme';
$string['manualpluginnotinstalled'] = '"Manuel" eklenti henüz yüklenmedi';
$string['messageprovider:expiry_notification'] = 'Manuel kayıt olma süre bitimi bildirimleri';
$string['now'] = 'Şimdi';
$string['pluginname'] = 'El ile kayıtlar';
$string['pluginname_desc'] = 'El ile kayıt eklentisi, bir öğretmen gibi uygun izinlere sahip bir kullanıcı tarafından kurs yönetimi ayarlarındaki bir bağlantı yoluyla kullanıcıların elle kayıt edilmesini sağlar. Kendi kayıt gibi bazı diğer kayıt eklentileri gerektirdiğinden, eklenti normal olarak etkinleştirilmelidir.';
$string['privacy:metadata'] = 'Manuel kayıtlar eklentisi herhangi bir kişisel veri depolamaz.';
$string['selectcohorts'] = 'Grup seç';
$string['selection'] = 'Seçim';
$string['selectusers'] = 'Kullanıcıları seç';
$string['sendexpirynotificationstask'] = 'Manuel kayıt, süre sonu bildirimleri gönderme görevi';
$string['status'] = 'El ile kayıtları etkinleştir';
$string['status_desc'] = 'Dahili olarak kayıtlı olan kullanıcıların kurs erişimine izin verin. Çoğu durumda bu muhafaza edilmelidir.';
$string['status_help'] = 'Bu ayar, kullanıcıların kurs yönetimi ayarlarındaki bir bağlantı yoluyla, öğretmen gibi uygun izinlere sahip bir kullanıcı tarafından el ile kaydedilip kaydedilmeyeceğini belirler.';
$string['statusdisabled'] = 'Devre dışı bırakıldı';
$string['statusenabled'] = 'Etkinleştirildi';
$string['syncenrolmentstask'] = 'Manuel kayıt görevini senkronize et';
$string['unenrol'] = 'Kullanıcı kaydını kaldır';
$string['unenrolselectedusers'] = 'Seçilen kullanıcıların kaydını sil';
$string['unenrolselfconfirm'] = '"{$a}" kursundan kaydınızı silmek istediğinize emin misiniz ?';
$string['unenroluser'] = 'Gerçekten kayıtlarının silinmesini istiyor musunuz  "{$a->user}" dersten "{$a->course}"?';
$string['unenrolusers'] = 'Kullanıcıların kaydını silme';
$string['wscannotenrol'] = 'Eklenti örneği bir kullanıcıyı kurs kimlik numarasına el ile kaydedemez  id= {$a->courseid}';
$string['wsnoinstance'] = 'El ile kayıt eklentisi örneği mevcut değil veya kurs için devre dışı bırakıldı  (id = {$a->courseid})';
$string['wsusercannotassign'] = 'Bu kursta ({$a->courseid}) bu rolü ({$a->roleid}) bu kullanıcıya ({$a->userid}) atama izniniz yok.';
