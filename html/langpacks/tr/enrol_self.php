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
 * Strings for component 'enrol_self', language 'tr', version '4.5'.
 *
 * @package     enrol_self
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['canntenrol'] = 'Kurs kaydı devre dışı veya etkin değil';
$string['canntenrolearly'] = 'Henüz kayıt olamazsınız; kayıtlar {$a} tarihinde başlar.';
$string['canntenrollate'] = 'Kayıt işlemi {$a} tarihinde bittiği için artık kayıt yapamazsınız.';
$string['cohortnonmemberinfo'] = 'Yalnızca \'{$a}\' topluluğunun üyeleri kendi kendine kayıt olabilirler.';
$string['cohortonly'] = 'Sadece topluluk üyeleri';
$string['cohortonly_help'] = 'Kendi Kendine kayıt, yalnızca belirli bir topluluk üyeleri ile sınırlandırılabilir. Bu ayarın değiştirilmesinin mevcut kayıtlar üzerinde herhangi bir etkisi olmadığını unutmayın.';
$string['confirmbulkdeleteenrolment'] = 'Bu kullanıcı kayıtlarını silmek istediğinizden emin misiniz?';
$string['customwelcomemessage'] = 'Kişisel karşılama mesajı';
$string['customwelcomemessage_help'] = 'Kabul edilen biçimler: Düz metin veya Moodle-otomatik format.  Aşağıdaki yer tutucuların yanı sıra HTML etiketleri ve çok dilli etiketler de kabul edilir:

<ul>
<li>Kurs adı {$a->coursename}</li>
<li>Kullanıcının profil sayfasına bağlantı {$a->profileurl}</li>
<li>Kullanıcı e-postası {$a-Bramemail>}/li<
<li>Kullancı tam adı {$a->fullname}</li>
<li>Kullancı adı {$a->firstname}</li>
<li>Kullanıcı soyadı {$a->lastname}</li>
<li>Kullanıcı kurs rolü {$a->courserole}</li>
</ul>';
$string['defaultrole'] = 'Varsayılan rol ataması';
$string['defaultrole_desc'] = 'Kendi kendine kayıt sırasında kullanıcılara atanacak rolü seçin';
$string['deleteselectedusers'] = 'Seçilen kullanıcı kayıtlarını sil';
$string['editselectedusers'] = 'Seçilen kullanıcı kurs kayıtlarını düzenle';
$string['enrolenddate'] = 'Bitiş tarihi';
$string['enrolenddate_help'] = 'Etkinleştirilirse, kullanıcılar bu tarihe kadar kendilerini kayıt edebilirler.';
$string['enrolenddaterror'] = 'Kayıt bitiş tarihi, kayıt başlangıç tarihinden önce olamaz';
$string['enrolme'] = 'Beni kaydet';
$string['enrolperiod'] = 'Kayıt süresi';
$string['enrolperiod_desc'] = 'Kaydın geçerli olduğu varsayılan süre. Sıfır olarak ayarlanırsa, kayıt süresi varsayılan olarak sınırsız olacaktır.';
$string['enrolperiod_help'] = 'Kaydın geçerli olduğu süre, kullanıcı kendi kendine kayıtlı olduğu andan başlar. Devre dışı bırakılırsa, kayıt süresi sınırsız olur.';
$string['enrolstartdate'] = 'Başlangıç tarihi';
$string['enrolstartdate_help'] = 'Etkinleştirilirse, kullanıcılar bu tarihten sonra kendilerini kayıt edebilirler.';
$string['expiredaction'] = 'Kayıt son kullanma haraketi';
$string['expiredaction_help'] = 'Kullanıcı kaydı sona erdiğinde gerçekleştirilecek işlemi seçin. Bazı kullanıcı verilerinin ve ayarlarının kurs boyunca derese kaydedilmeyeceğini lütfen unutmayın.';
$string['expiryinactivemessageenrolledbody'] = 'Merhaba {$a->user},

Son {$a->inactivetime} gün içinde ziyaret etmediğiniz için {$a->course} kursuna kaydınız {$a->timeend} tarihinde sona eriyor.

Kaydınızı aktif tutmak için oturum açmanız ve {$a->timeend} tarihinden önce <a href="{$a->url}">{$a->course}</a> adresini ziyaret ediniz.';
$string['expiryinactivemessageenrolledsubject'] = 'Kaydınızın süresi doluyor: {$a->course}';
$string['expirymessageenrolledbody'] = 'Sayın {$a->user},

Bu, \'{$a->course}\' kursundaki kayıt işleminizin {$a->timeend} boyunca sona ermesi nedeniyle yapılan bir bildirimdir.

Yardıma ihtiyacınız varsa, lütfen {$a->enroller} ile iletişime geçin.';
$string['expirymessageenrolledsubject'] = 'Kendi kendine kayıt sona erme bildirimi';
$string['expirymessageenrollerbody'] = '\'{$a->course}\' dersindeki kendi kendine kaydı, aşağıdaki kullanıcılar için bir sonraki {$a->threshold} içinde sona erecek:

{$a->users}

Kayıtlarını genişletmek için {$a->extendurl} adresine gidin.';
$string['expirymessageenrollersubject'] = 'Kendi kendine kayıt sona erme bildirimi';
$string['expirynotifyall'] = 'Kaydı yapan ve kayıtlı kullanıcı';
$string['expirynotifyenroller'] = 'Sadece öğretmen';
$string['groupkey'] = 'Grup kayıt anahtarlarını kullanma';
$string['groupkey_desc'] = 'Varsayılan olarak grup kayıt anahtarlarını kullanın.';
$string['groupkey_help'] = 'Kursu yalnızca anahtarı tanıyan kişilere sınırlamanın yanı sıra, grup kayıt anahtarlarını kullanmak, kullanıcıların derse kaydolurken otomatik olarak gruplara eklendiği anlamına gelir.

Not: Kurs için bir kayıt anahtarı, grup ayarlarındaki kendi kayıt ayarlarında ve grup kayıt anahtarlarında belirtilmelidir.';
$string['keyholder'] = 'Bu kayıt anahtarını şu adresten almalısınız:';
$string['longtimenosee'] = 'Ardından etkinliğin kaydını silmek';
$string['longtimenosee_help'] = 'Kullanıcılar bir derse uzun süre erişemediyse, otomatik olarak kapatılacaktır. Bu parametre, zaman sınırını belirtir.';
$string['maxenrolled'] = 'Maksimum kayıtlı kullanıcılar';
$string['maxenrolled_help'] = 'Kendi kendine kaydolabilen maksimum kullanıcı sayısını belirtir. 0, sınırsız demektir.';
$string['maxenrolledreached'] = 'Kendi kendine kayda izin verilen maksimum kullanıcı sayısı zaten ulaşıldı.';
$string['messageprovider:expiry_notification'] = 'Kendi kendine kayıt süresi sona erme bildirimleri';
$string['newenrols'] = 'Yeni kişisel kayıtlara izin ver';
$string['newenrols_desc'] = 'Kullanıcıların varsayılan olarak yeni kurslara kaydolmalarına izin verin.';
$string['newenrols_help'] = 'Bu ayar, bir kullanıcının bu kursa kaydolup giriş yapamayacağını belirler.';
$string['nopassword'] = 'Kayıt anahtarına gerek yok.';
$string['password'] = 'Kayıt anahtarı';
$string['password_help'] = 'Kayıt anahtarı, kursa erişimin yalnızca anahtarı bilen kişilerle sınırlandırılmasını sağlar.

Alan boş bırakılırsa herhangi bir kullanıcı kursa kaydolabilir.

Bir kayıt anahtarı belirtilirse, kursa kaydolmaya çalışan herhangi bir kullanıcının anahtarı sağlaması gerekecektir. Bir kullanıcının kursa kaydolurken kayıt anahtarını yalnızca BİR KEZ girmesi gerektiğini unutmayın.';
$string['passwordinvalid'] = 'Yanlış kayıt anahtarı, lütfen tekrar deneyin';
$string['passwordinvalidhint'] = 'Bu kayıt anahtarı yanlıştır, lütfen tekrar deneyin<br />(İpucu - \'{$a}\' ile başlıyor)';
$string['passwordmatchesgroupkey'] = 'Bu kayıt anahtarı zaten bir grup kayıt anahtarı olarak kullanılmaktadır.';
$string['pluginname'] = 'Kendi kendine kayıt';
$string['pluginname_desc'] = 'Otomatik kayıt eklentisi, kullanıcıların hangi kurslara katılmak istediklerini seçmelerine yardımcı olur. Kurslar bir kayıt anahtarı ile korunabilir. Dahili olarak kayıt, aynı kursta etkinleştirilmesi gereken manuel kayıt eklentisi aracılığıyla yapılır.';
$string['privacy:metadata'] = 'Kendi kendine kayıt eklentisi herhangi bir kişisel veri depolamaz.';
$string['requirepassword'] = 'Kayıt anahtarı gerekir';
$string['requirepassword_desc'] = 'Yeni kurslarda kayıt anahtarı talep etmek ve mevcut kayıtlardan kayıt anahtarı kaldırılmasını önlemek.';
$string['role'] = 'Varsayılan olarak atanan rol';
$string['self:config'] = 'Kendi kendine kayıt örneklerini yapılandır';
$string['self:enrolself'] = 'Kursa kendi kendine kayıt olma';
$string['self:holdkey'] = 'Kendi kendine kayıt anahtarı olarak görünür';
$string['self:manage'] = 'Kayıtlı kullanıcıları yönet';
$string['self:unenrol'] = 'Kullanıcıları dersten kaydettirin';
$string['self:unenrolself'] = 'Kendi kendine dersten kaydettirmeyin';
$string['sendcoursewelcomemessage'] = 'Kursa hoşgeldin mesajını gönder';
$string['sendcoursewelcomemessage_help'] = 'Bir kullanıcı kursa kendi kendine kaydolduğunda, kendisine bir hoş geldiniz mesajı e-postası gönderilebilir. Kurs iletişim kişisinden (varsayılan olarak öğretmen) gönderilirse ve birden fazla kullanıcı bu role sahipse e-posta, role atanan ilk kullanıcıdan gönderilir.';
$string['sendexpirynotificationstask'] = 'Kendi kendine kayıt, süre sonu bildirimleri gönderme görevi';
$string['showhint'] = 'İpucu  göster';
$string['showhint_desc'] = 'Misafir erişim anahtarının ilk harfini gösterin.';
$string['status'] = 'Mevcut bireysel kayıtları aktif tutun';
$string['status_desc'] = 'Yeni kurslarda kendi kendine  kayıt yöntemini etkinleştiriniz.';
$string['status_help'] = 'Hayır olarak ayarlanırsa kursa kaydolan mevcut katılımcılar artık erişime sahip olmayacaktır.';
$string['syncenrolmentstask'] = 'Kendi kendine kayıt görevini senkronize et';
$string['unenrol'] = 'Kullanıcı kaydını kaldır';
$string['unenrolselfconfirm'] = '"{$a}" dersinden kaydınızı silmek istediğinize emin misiniz ?';
$string['unenroluser'] = '"{$a->user}" "{$a->course}" dersinden gerçekten silmek istiyor musunuz?';
$string['unenrolusers'] = 'Kullanıcıların kaydını iptal edin';
$string['usepasswordpolicy'] = 'Parola ilkesini kullanın';
$string['usepasswordpolicy_desc'] = 'Kayıt anahtarı için standart parola ilkesini kullanın.';
$string['welcometocourse'] = '{$a} sitesine hoş geldiniz';
$string['welcometocoursetext'] = '{$a->coursename} kursuna hoş geldiniz!

Şu ana kadar hiçbir şey yapmadıysanız yapmanız gereken ilk şey, hakkınızda bilgi edinebilmemiz için kurs içindeki profil sayfanızı düzenlemektir:

  {$a->profileurl}';
