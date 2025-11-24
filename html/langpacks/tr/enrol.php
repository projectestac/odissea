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
 * Strings for component 'enrol', language 'tr', version '4.5'.
 *
 * @package     enrol
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actenrolshhdr'] = 'Mevcut kurs kayıt eklentileri';
$string['addinstance'] = 'Yöntem ekle';
$string['addinstanceanother'] = 'Yöntem ekleyin ve başka bir tane oluşturun';
$string['ajaxnext25'] = 'Sonraki 25...';
$string['ajaxoneuserfound'] = '1 kullanıcı bulundu';
$string['ajaxxmoreusersfound'] = '{$a}\'dan fazla kullanıcı bulundu';
$string['ajaxxusersfound'] = '{$a} kullanıcı bulundu';
$string['assignnotpermitted'] = 'Yetkiniz yok veya bu kursa rol atayamazsınız.';
$string['bulkuseroperation'] = 'Toplu kullanıcı işlemleri';
$string['configenrolplugins'] = 'Lütfen gerekli tüm eklentileri seçin ve daha sonra uygun sırayla düzenleyin.';
$string['custominstancename'] = 'Özel örnek adı';
$string['customwelcomemessage'] = 'Kişisel karşılama mesajı';
$string['customwelcomemessage_help'] = 'Kabul edilen formatlar: Düz metin veya Moodle-auto formatı. HTML etiketleri ve çoklu dil etiketlerinin yanı sıra aşağıdaki yer tutucular da kabul edilir:

<ul>
<li>Kurs adı {$a->coursename}</li>
<li>Kullanıcının profil sayfasına bağlantı {$a->profileurl}</li>
<li>Kullanıcı e-postası {$a-Bramemail>}/li<
<li>Kullancı tam adı {$a->fullname}</li>
<li>Kullancı adı {$a->firstname}</li>
<li>Kullanıcı soy adı {$a->lastname}</li>
<li>Kullanıcı kurs rolü {$a->courserole}</li>
</ul>';
$string['customwelcomemessageplaceholder'] = 'Merhaba {$a->firstname}, {$a->coursename} kursuna kaydoldunuz.';
$string['defaultenrol'] = 'Yeni kursa örnek ekle';
$string['defaultenrol_desc'] = 'Bu eklentiyi varsayılan olarak tüm yeni kurslara eklemek mümkündür.';
$string['deleteinstanceconfirm'] = '"{$a->name}" kayıt yöntemini silmek üzeresiniz. Bu yöntem ile kayıt edilmiş {$a->users} kullanıcının ders kaydı silinecek ve kullanıcıların notları, grup üyelikleri veya forum üyelikleri gibi dersle ilintili veriler silinecek.

Devam etmek istediğinizden emin misiniz?';
$string['deleteinstanceconfirmself'] = 'Bu kursa erişmenizi sağlayan "{$a->name}" örneğini devre dışı bırakmak istediğinizden emin misiniz? Devam ederseniz, bu kursa erişemeyebileceksiniz.';
$string['deleteinstancenousersconfirm'] = '"{$a->name}" kayıt yöntemini silmek üzeresiniz. Devam etmek istediğinizden emin misiniz?';
$string['disableinstanceconfirmself'] = 'Bu kursa erişmenizi sağlayan "{$a->name}" örneğini devre dışı bırakmak istediğinizden emin misiniz? Devam ederseniz, bu kursa erişemeyebileceksiniz.';
$string['durationdays'] = '{$a} gün';
$string['editenrolment'] = 'Kaydı düzenle';
$string['edituserenrolment'] = '{$a} kaydını düzenle';
$string['enrol'] = 'Kayıt ol';
$string['enrolcandidates'] = 'Kaydolmamış kullanıcılar';
$string['enrolcandidatesmatching'] = 'Eşleşen kayıtlı olmayan kullanıcılar';
$string['enrolcohort'] = 'Topluluğa kaydol';
$string['enrolcohortusers'] = 'Kullanıcıları kaydet';
$string['enroldetails'] = 'Kayıt detayları';
$string['enrollednewusers'] = '{$a} yeni kullanıcı başarıyla kayıt edildi';
$string['enrolledusers'] = 'Kayıtlı kullanıcılar';
$string['enrolledusersmatching'] = 'Eşleşen kayıtlı kullanıcılar';
$string['enrolme'] = 'Beni bu kursa kaydet';
$string['enrolment'] = 'Ders Kaydı';
$string['enrolmentinstances'] = 'Kursa kayıt yöntemleri';
$string['enrolmentmethod'] = 'Derse kayıt yöntemi';
$string['enrolmentnew'] = '{$a} yeni kayıt';
$string['enrolmentnewuser'] = '{$a->user}, "{$a->course}" kursuna kaydoldu';
$string['enrolmentoptions'] = 'Kurs kayıt seçenekleri';
$string['enrolments'] = 'Kurs kayıtları';
$string['enrolmentupdatedforuser'] = '"{$a->fullname}" kullanıcısının kurs kaydı güncellendi';
$string['enrolnotpermitted'] = 'Yetkiniz yok veya bu kursa birini kaydetmenize izin verilmemiş.';
$string['enrolperiod'] = 'Kayıt süresi';
$string['enroltimecreated'] = 'Kayıt oluşturuldu';
$string['enroltimeend'] = 'Kayıt bitimi';
$string['enroltimeendinvalid'] = 'Kurs kayıt bitiş tarihi, kayıt başlangıç tarihinden sonra olmalıdır';
$string['enroltimestart'] = 'Kurs kayıt başlangıcı';
$string['enrolusage'] = 'Örnekler / kayıtlar';
$string['enrolusers'] = 'Kullanıcılarıkursa kaydet';
$string['enrolxusers'] = '{$a} kullanıcıları kaydet';
$string['errajaxfailedenrol'] = 'Kullanıcılar kaydedilemedi';
$string['errajaxsearch'] = 'Kullanıcı ararken hata oluştu';
$string['erroreditenrolment'] = 'Kullanıcının kaydını düzenlemeye çalışırken bir hata oluştu';
$string['errorenrolcohort'] = 'Bu kursda topluluk senkronize kayıt örneği oluştururken hata oluştu.';
$string['errorenrolcohortusers'] = 'Bu kursda topluluk üyeleri kaydedilirken hata oluştu.';
$string['errorthresholdlow'] = 'Bildirim eşiği en az 1 gün olmalıdır.';
$string['errorwithbulkoperation'] = 'Toplu kayıt değişikliği işlenirken bir hata oluştu.';
$string['eventenrolinstancecreated'] = 'Kayıt örneği oluşturuldu';
$string['eventenrolinstancedeleted'] = 'Kayıt örneği silindi';
$string['eventenrolinstanceupdated'] = 'Kayıt örneği güncellendi';
$string['eventuserenrolmentcreated'] = 'Kullanıcı kursa kaydoldu';
$string['eventuserenrolmentdeleted'] = 'Kullanıcı kurs kaydını sildi';
$string['eventuserenrolmentupdated'] = 'Kullanıcı kaydı güncellendi';
$string['expirynotify'] = 'Kayıt süresi dolmadan önce bildir';
$string['expirynotify_help'] = 'Bu ayar, kayıt bitiş bildirimi mesajlarının gönderilip gönderilmeyeceğini belirler.';
$string['expirynotifyall'] = 'Kaydı yapan ve kayıtlı kullanıcı';
$string['expirynotifyenroller'] = 'Sadece kayıt yapan';
$string['expirynotifyhour'] = 'Kaydın sona erdiği bildiriminin gönderileceği saat';
$string['expirythreshold'] = 'Bildirim eşiği';
$string['expirythreshold_help'] = 'Kullanıcılar kayıt süresi sona ermeden ne kadar önce haberdar edilmeli?';
$string['extremovedaction'] = 'Harici kayıt silme eylemi';
$string['extremovedaction_help'] = 'Kullanıcı kaydı harici kayıt kaynağından kaybolduğunda gerçekleştirilecek eylemi seçin. Kurs kaydının kaldırılması sırasında bazı kullanıcı verilerinin ve ayarlarının kurstan temizlendiğini lütfen unutmayın.';
$string['extremovedkeep'] = 'Kullanıcıyı kayıtlı olarak tut';
$string['extremovedsuspend'] = 'Kurs kaydını devre dışı bırak';
$string['extremovedsuspendnoroles'] = 'Kurs kaydını devre dışı bırak ve rolleri kaldır';
$string['extremovedunenrol'] = 'Kullanıcının kurs kaydını sil';
$string['finishenrollingusers'] = 'Kullanıcı kaydını bitir.';
$string['foundxcohorts'] = '{$a} topluluk bulundu';
$string['instanceadded'] = 'Yöntem eklendi';
$string['instanceeditselfwarning'] = 'Uyarı:';
$string['instanceeditselfwarningtext'] = 'Bu kursda, bu kayıt yöntemi üzerinden kaydoldunuz, değişiklikler kursa erişiminizi etkileyebilir.';
$string['invalidenrolduration'] = 'Geçersiz kayıt süresi';
$string['invalidenrolinstance'] = 'Geçersiz kayıt örneği';
$string['invalidrequest'] = 'Geçersiz istek';
$string['invalidrole'] = 'Geçersiz rol';
$string['manageenrols'] = 'Kayıt eklentilerini yönet';
$string['manageinstance'] = 'Yönet';
$string['method'] = 'Yöntem';
$string['migratetomanual'] = 'Elle kayıta geçir';
$string['nochange'] = 'Değişiklik yok';
$string['noexistingparticipants'] = 'Mevcut katılımcı yok';
$string['nogroup'] = 'Grup yok';
$string['noguestaccess'] = 'Misafirler bu kursa erişemez, lütfen oturum açmayı deneyin.';
$string['none'] = 'Hiçbiri';
$string['notenrollable'] = 'Bu kursa kendinizi kayıt edemezsiniz.';
$string['notenrolledusers'] = 'Diğer kullanıcılar';
$string['otheruserdesc'] = 'Aşağıdaki kullanıcılar bu kursa kayıtlı değildir ancak bu kurs içinde devralınmış veya atanmış rolleri vardır.';
$string['participationactive'] = 'Etkin';
$string['participationnotcurrent'] = 'Güncel değil';
$string['participationstatus'] = 'Durum';
$string['participationsuspended'] = 'Askıya alınmış';
$string['periodend'] = '{$a} tarihine kadar';
$string['periodnone'] = 'kaydoldu {$a}';
$string['periodstart'] = '{$a} tarihinden';
$string['periodstartend'] = '{$a->start} tarihinden {$a->end} tarihine kadar';
$string['plugindisabled'] = '{$a} kurs kaydı eklentisi devre dışı bırakıldı';
$string['privacy:metadata:user_enrolments'] = 'Kurs kayıtları';
$string['privacy:metadata:user_enrolments:enrolid'] = 'Kurs kayıt eklentisi örneği';
$string['privacy:metadata:user_enrolments:modifierid'] = 'Kurs kullanıcı kaydını en son değiştiren kullanıcının kimliği';
$string['privacy:metadata:user_enrolments:status'] = 'Kursa kullanıcı kaydının durumu';
$string['privacy:metadata:user_enrolments:tableexplanation'] = 'Çekirdek kayıt eklentisi, kayıtlı kullanıcıları depolar.';
$string['privacy:metadata:user_enrolments:timecreated'] = 'Kullanıcı kurs kaydının oluşturulduğu saat';
$string['privacy:metadata:user_enrolments:timeend'] = 'Kurs kullanıcı kaydının sona erdiği saat';
$string['privacy:metadata:user_enrolments:timemodified'] = 'Kullanıcı kaydının değiştirildiği zaman';
$string['privacy:metadata:user_enrolments:timestart'] = 'Kullanıcı kaydının başladığı saat';
$string['privacy:metadata:user_enrolments:userid'] = 'Kullanıcı kimliği';
$string['recovergrades'] = 'Mümkünse kullanıcının eski notlarını kurtar';
$string['rolefromcategory'] = '{$a->role} (kurs kategorisinden devralınan)';
$string['rolefrommetacourse'] = '{$a->role} (Üst dersten devralınan)';
$string['rolefromsystem'] = '{$a->role} (Site düzeyinde atanan)';
$string['rolefromthiscourse'] = '{$a->role} (Bu kursda atanan)';
$string['sendcoursewelcomemessage'] = 'Kursa hoş geldiniz mesajı gönder';
$string['sendcoursewelcomemessage_help'] = 'Bir kullanıcıyı veya grubu kursa kaydederken onlara bir hoş geldiniz mesajı e-postası gönderilebilir. Kurs iletişim kişisinden (varsayılan olarak öğretmen) gönderilirse ve birden fazla kullanıcı bu role sahipse e-posta, role atanan ilk kullanıcıdan gönderilir.';
$string['sendfromcoursecontact'] = 'Kurs bağlantısından';
$string['sendfromkeyholder'] = 'Anahtar sahibinden';
$string['sendfromnoreply'] = 'Cevapsız adresten';
$string['startdatetoday'] = 'Bugün';
$string['synced'] = 'Senkronize';
$string['testsettings'] = 'Ayarları test et';
$string['testsettingsheading'] = 'Kayıt ayarlarını test et - {$a}';
$string['timeended'] = 'Süre bitti';
$string['timeenrolled'] = 'Ders kaydı süresi';
$string['timereaggregated'] = 'Süre birletirildi';
$string['timestarted'] = 'Süre başladı';
$string['totalenrolledusers'] = '{$a} kayıtlı kullanıcı';
$string['totalotherusers'] = '{$a} diğer kullanıcı';
$string['totalunenrolledusers'] = '{$a} kursa kayıtlı olmayan kullanıcı';
$string['unassignnotpermitted'] = 'Bu kursa rol ataması için izniniz yok';
$string['unenrol'] = 'Kurs kaydını sil';
$string['unenrolconfirm'] = '"{$a->user}" (daha önce "{$a->enrolinstancename}" aracılığıyla kaydolmuş) "{$a->course}" gerçekten kurs kaydınızı silmek istiyormusunuz?';
$string['unenrolleduser'] = '"{$a->fullname}" adlı kullanıcının kurs kaydı iptal edildi';
$string['unenrolme'] = 'Kurs kaydımı sil';
$string['unenrolnotpermitted'] = 'Bu kullanıcının kurs kaydını iptal etme izniniz yok.';
$string['unenrolroleusers'] = 'Kullanıcıların kurs kaydını sil';
$string['uninstallmigrating'] = '"{$a}" kayıt taşınıyor';
$string['unknowajaxaction'] = 'Bilinmeyen eylem talep edildi';
$string['unlimitedduration'] = 'Sınırsız';
$string['userremovedfromselectiona'] = '"{$a}" kullanıcısı seçimden çıkarıldı.';
$string['usersearch'] = 'Ara';
$string['withselectedusers'] = 'Seçili kullanıcılarla';
$string['youenrolledincourse'] = 'Kursa kayıt oldunuz.';
$string['youunenrolledfromcourse'] = '"{$a}" kursundan kaydınız silindi.';
