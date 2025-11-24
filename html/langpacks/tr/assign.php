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
 * Strings for component 'assign', language 'tr', version '4.5'.
 *
 * @package     assign
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityattachments'] = 'Ödev Eklentisi Ekleri';
$string['activitydate:submissionsdue'] = 'Son tarih:';
$string['activitydate:submissionsopen'] = 'Başvurular açılır:';
$string['activitydate:submissionsopened'] = 'Açıldı:';
$string['activityeditor'] = 'Etkinlik yönergeleri';
$string['activityeditor_help'] = 'Öğrencinin bu ödev için tamamlamasını istediğiniz faaliyetler. Bu yalnızca öğrencinin ödevini düzenleyip gönderdiği gönderim sayfasında gösterilir.';
$string['activityoverview'] = 'İlgilenmeniz gereken ödev(ler)iniz var';
$string['addattempt'] = 'Yeniden denemeye izin ver';
$string['addnewattempt'] = 'Yeni bir deneme ekle';
$string['addnewattempt_help'] = 'Bu, üzerinde çalışabileceğiniz boş bir gönderim oluşturacaktır.';
$string['addnewattemptfromprevious'] = 'Önceki gönderim üzerinden yeni bir denemeye izin ver';
$string['addnewattemptfromprevious_help'] = 'Bu, önceki gönderiminizin içeriğini üzerinde çalışmanız için yeni bir başvuruya kopyalar.';
$string['addnewgroupoverride'] = 'Grup geçersiz kılma ekle';
$string['addnewuseroverride'] = 'Kullanıcı geçersiz kılma ekle';
$string['addsubmission'] = 'Gönderim ekle';
$string['addsubmission_help'] = 'Henüz bir gönderimde bulunmadınız.';
$string['allocatedmarker'] = 'Atanan değerlendirici';
$string['allocatedmarker_help'] = 'Bu gönderiye atanan değerlendirici';
$string['allowsubmissions'] = 'Kullanıcıların bu ödeve için gönderi tesilim edebilmesine izin ver.';
$string['allowsubmissionsfromdate'] = 'Gönderme tarihi başlangıcı';
$string['allowsubmissionsfromdate_help'] = 'Eğer etkinse öğrenciler bu tarihten önce başvuramayacak. Eğer etkin değilse öğrenciler hemen başvurduktan sonra başlayabilecek.';
$string['allowsubmissionsshort'] = 'Gönderim değişikliklerine izin ver';
$string['alwaysshowdescription'] = 'Her zaman açıklamayı göster';
$string['alwaysshowdescription_help'] = 'Devre dışı bırakılırsa, yukarıdaki ödev açıklaması yalnızca "Şu tarihten itibaren gönderimlere izin ver" tarihinde öğrenciler tarafından görülebilir.';
$string['applytoteam'] = 'Notları onayla ve tüm gruba geri bildirimde bulun';
$string['assign:addinstance'] = 'Yeni ödev ekle';
$string['assign:editothersubmission'] = 'Başka bir öğrencinin gönderimini düzenle';
$string['assign:exportownsubmission'] = 'Kendi gönderimlerini dışa aktar';
$string['assign:grade'] = 'Ödeve not ver';
$string['assign:grantextension'] = 'Ek süre tanı';
$string['assign:manageallocations'] = 'Gönderimlere atanan değerlendiricileri yönet';
$string['assign:managegrades'] = 'Notları incele ve yayımla';
$string['assign:manageoverrides'] = 'Ödev geçersiz kılmalarını yönet';
$string['assign:receivegradernotifications'] = 'Değerlendirici gönderim  bildirimlerini al';
$string['assign:releasegrades'] = 'Notları yayınla';
$string['assign:revealidentities'] = 'Öğrenci kimliklerini görünür yap';
$string['assign:reviewgrades'] = 'Notları gözden geçir';
$string['assign:showhiddengrader'] = 'Gizli değerlendicinini kimliğini görün';
$string['assign:submit'] = 'Ödevi gönder';
$string['assign:view'] = 'Ödevi görüntüle';
$string['assign:viewblinddetails'] = 'İsimisiz gönderimler etkinleştirildiğinde öğrenci kimliklerini görüntüle';
$string['assign:viewgrades'] = 'Notları görüntüle';
$string['assign:viewownsubmissionsummary'] = 'Gönderiminizi özetini görüntüleyin';
$string['assignfeedback'] = 'Geri bildirim eklentisi';
$string['assignfeedbackpluginname'] = 'Geri bildirim eklentisi';
$string['assignmentduedigesthtml'] = '<p>Merhaba {$a->firstname},</p>
<p>Aşağıdaki ödevlerin teslim tarihi <strong>{$a->duedate}</strong> tarihinde yapılacak.</p>
{$a->digest}';
$string['assignmentduedigestitem'] = '{$a->coursename}Kursundaki <strong>{$a->assignmentname}</strong> <br/>
<strong>Bitiş tarihi: {$a->duetime}</strong>dir<br/>
<a href="{$a->url}" aria-label="Go to {$a->assignmentname}">Etkinliğe gitmek için tıklayın</a>';
$string['assignmentduedigestsubject'] = '7 gün içinde teslim edilmesi gereken ödevleriniz var';
$string['assignmentduesoonhtml'] = '<p>Merhaba {$a->firstname},</p>
<p>{$a->coursename} kursundaki <strong>{$a->questmentname</strong> ödevinin teslim tarihi yaklaştı.</p>
<p><strong>Son tarih: {$a->duedate</strong></p>
<p><a href="{$a->url}">Etkinliğe git</a></p>';
$string['assignmentduesoonsubject'] = 'Son teslim tarihi {$a->duedate}: {$a-> assignmentname}';
$string['assignmentisdue'] = 'Ödevin teslim süresi dolmuş';
$string['assignmentmail'] = '{$a->grader}, \'{$a->assignment}\'  ödevinizle ilgili bazı geribildiriler yayınladı.

Ödev gönderiminize eklenen bu geribilidirimi şuradan görebilirsiniz:

     {$a->url}';
$string['assignmentmailhtml'] = '<p> {$a->grader}, <i> {$a->assignment} </i> ödevinizle ilgili geri bildirim gönderdi. </p>
<p> <a href="{$a->url} "> adresinden ödevinize eklenen bu geri bildirimi görebilirsiniz</p>';
$string['assignmentmailsmall'] = '{$a->grader}, \'{$a->assignment}\' ödevinizle ilgili bazı geriblidimler yayınladı. Ödevinize eklene bu geriblidirimi görebilirsiniz';
$string['assignmentname'] = 'Ödev adı';
$string['assignmentoverduehtml'] = '<p>Merhaba {$a->firstname}, </p>
{$a->coursename} kursundaki <p><strong>{$a->questmentname</strong>\'in teslim tarihi <strong>{$a->duedate</strong> tarihindeydi.</p>
<p>Ödevinizi{$a->cutoffsnippet} hâlâ gönderebilirsiniz ancak gönderiminiz geç kaldı olarak işaretlenecektir.</p>
<p><a href="{$a->url}">Etkinliğe git</a></p>';
$string['assignmentoverduehtmlcutoffsnippet'] = '<strong>{$a->cutoffdate</strong>\'e kadar';
$string['assignmentoverduesubject'] = 'Geç kalmış: {$a->assignmentname}';
$string['assignmentplugins'] = 'Ödev eklentileri';
$string['assignmentsperpage'] = 'Her sayfadaki ödev sayısı';
$string['assignsubmission'] = 'Gönderim eklentisi';
$string['assignsubmissionpluginname'] = 'Gönderim eklentisi';
$string['assigntimeleft'] = 'Geçen süre';
$string['attemptheading'] = 'Deneme {$a->attemptnumber}: {$a->submissionsummary}';
$string['attempthistory'] = 'Önceki denemeler';
$string['attemptnumber'] = 'Deneme numarası';
$string['attemptreopenmethod'] = 'İzin verilen denemeler';
$string['attemptreopenmethod_automatic'] = 'Otomatik';
$string['attemptreopenmethod_automatic_help'] = 'Her denemeden sonra, bir sonraki otomatik olarak verilir.';
$string['attemptreopenmethod_help'] = 'Bu ayar, öğrencilere bu ödev için ne şekilde deneme hakkı verileceğini kontrol eder. Her deneme için not ve geri bildirim kaydedilir ve öğretmen ve öğrenci tarafından görüntülenebilir. Kullanılabilir seçenekler şunlardır:

* Manuel - Her denemeden sonra, Gönderim sayfası veya Notlandırıcı sayfası aracılığıyla bir sonrakine izin verebilirsiniz.
* Otomatik olarak - Her denemeden sonra bir sonraki demeye otomatik olarak izin verilir.
* Geçene kadar otomatik olarak - Her denemeden sonra, öğrenci geçme notuna ulaşana kadar bir sonrakine otomatik olarak izin verilecektir.';
$string['attemptreopenmethod_manual'] = 'El ile';
$string['attemptreopenmethod_manual_help'] = 'Her denemeden sonra, Gönderimler sayfası veya değernedrici sayfası aracılığıyla bir sonrakine izin verebilirsiniz.';
$string['attemptreopenmethod_none'] = 'Asla';
$string['attemptreopenmethod_untilpass'] = 'Başarılı oluncaya kadar otomatik';
$string['attemptreopenmethod_untilpass_help'] = 'Her denemeden sonra, öğrenci geçme notu alana kadar bir sonrakidenemye  otomatik olarak izin  verilecektir.';
$string['attemptsettings'] = 'Deneme ayarları';
$string['availability'] = 'Uygunluk';
$string['back'] = 'Geri';
$string['backtoassignment'] = 'Ödeve dön';
$string['batchoperationaddattempt'] = 'Yeni deneme';
$string['batchoperationconfirmaddattempt'] = 'Seçilen gönderim için yeni deneme yapılabilsin mi ?';
$string['batchoperationconfirmdownloadselected'] = 'Seçilen gönderimler indirilsin mi?';
$string['batchoperationconfirmgrantextension'] = 'Seçilmiş tüm gönderimler için ek süre tanınsın mı ?';
$string['batchoperationconfirmlock'] = 'Tüm seçilmiş gönderimler kilitlensin mi?';
$string['batchoperationconfirmremovesubmission'] = 'Seçilen gönderimler kaldırılsın mı?';
$string['batchoperationconfirmreverttodraft'] = 'Seçilen gönderimler taslağa döndürülsün mü ?';
$string['batchoperationconfirmsetmarkingallocation'] = 'Seçilent üm gönderimler için değerlendirme ataması yapılsın mı?';
$string['batchoperationconfirmsetmarkingworkflowstate'] = 'Seçilen tüm gönderimler için değerlendirme iş akışı durumu ayarlansın mı?';
$string['batchoperationconfirmunlock'] = 'Seçilen tüm gönderimlerin kilidi açılsın mı?';
$string['batchoperationdownloadselected'] = 'İndir';
$string['batchoperationgrantextension'] = 'Uzat';
$string['batchoperationlock'] = 'Kilitle';
$string['batchoperationremovesubmission'] = 'Sil';
$string['batchoperationreverttodraft'] = 'Taslağa döndür';
$string['batchoperationsdescription'] = 'Seçilenlerin...';
$string['batchoperationsetmarkingallocation'] = 'Değerlendiriciye ata';
$string['batchoperationsetmarkingworkflowstate'] = 'Değerlendirme durumunu değiştir';
$string['batchoperationunlock'] = 'Kilidi kaldır';
$string['batchsetallocatedmarker'] = 'Seçilen {$a} kullanıcı için değerlendirmeci atayın';
$string['batchsetmarkingworkflowstateforusers'] = 'Seçilen {$a} kullanıcı(lar) için değerlendirme iş akışı durumunu ayarlayın.';
$string['beginassignment'] = 'Göndermeye başla';
$string['blindmarking'] = 'İsimsiz gönderimler';
$string['blindmarking_help'] = 'İsimsiz gönderimler, öğrencilerin kimliğini değerlendiriciden gizler. İsimsiz gönderim ayarları, bu ödevle ilgili bir gönderim veya not verildiğinde kilitlenecektir.';
$string['blindmarkingenabledwarning'] = 'Bu faaliyet için anonim gönderimler etkinleştirilmiştir.';
$string['blindmarkingnogradewarning'] = 'Bu faaliyet için anonim gönderimler etkinleştirilmiştir. Öğrenci kimlikleri "Eylemler" menüsü aracılığıyla açıklanana kadar notlar not defterine eklenmeyecektir.';
$string['bulkactionsselection'] = 'Toplu işlem seçimi';
$string['cachedef_overrides'] = 'Kullanıcı ve grup geçersiz kılma bilgileri';
$string['calendardue'] = '{$a} süresi doluyor';
$string['calendarextension'] = '{$a}\'nın süresi bittii (uzatma)';
$string['calendargradingdue'] = '{$a} not verilecek';
$string['caneditsubmission'] = 'Gönderinizi düzenleyebilir ve süre sınırı sona erdikten sonra gönderebilirsiniz, ancak geç kaldı olarak değerlendirilecekti.';
$string['changefilters'] = 'Filtreleri değiştir';
$string['changeuser'] = 'Kullanıcı değiştir';
$string['choosegradingaction'] = 'Not verme işlemi';
$string['choosemarker'] = 'Seçiniz...';
$string['chooseoperation'] = 'İşlemi seçin';
$string['clickexpandreviewpanel'] = 'İnceleme panelini genişletmek için tıklayın';
$string['collapsegradepanel'] = 'Not panelini daralt';
$string['collapsereviewpanel'] = 'İnceleme panelini daralt';
$string['comment'] = 'Yorum';
$string['completiondetail:submit'] = 'Gönderim yap';
$string['completionsubmit'] = 'Ödev gönder';
$string['configshowrecentsubmissions'] = 'Herkes, şu anki etkinlik raporlarındaki gönderimlerin uyarılarını görebilir.';
$string['confirmbatchgradingoperation'] = '{$a->count} öğrenci için {$a->operation} yapmak istediğinizden emin misiniz?';
$string['confirmstart'] = 'Bu ödevi tamamlamak için {$a} süreniz var. Başladığınızda, zamanlayıcı geri saymaya başlayacak ve durdurulamayacaktır.';
$string['confirmsubmission'] = 'Çalışmanıza not verilmesi için göndermek istediğinize emin misiniz? Bundan sonra değişiklik yapamayacaksınız.';
$string['confirmsubmissionheading'] = 'Gönderiyi onayla';
$string['conversionexception'] = 'Ödevi çevirilemedi. İstisna: {$a}.';
$string['couldnotconvertgrade'] = '{$a} kullanıcısı için ödev notu çevrilemedi.';
$string['couldnotconvertsubmission'] = '{$a} kullanıcısı için ödev gönderimi çevrilemedi.';
$string['couldnotcreatecoursemodule'] = 'Kurs modülü oluşturulamadı';
$string['couldnotcreatenewassignmentinstance'] = 'Yeni ödev örneği oluşturulamadı.';
$string['couldnotfindassignmenttoupgrade'] = 'Güncellenebilecek geçmiş ödev örneği bulunamadı.';
$string['crontask'] = 'Atama modülü için arka plan işleme';
$string['currentassigngrade'] = 'Ödevdeki mevcut not';
$string['currentattempt'] = '{$a}. deneme';
$string['currentattemptof'] = 'Bu, {$a->attemptnumber} ({$a->maxattempts} deneme izinli) denemesi.';
$string['currentgrade'] = 'Notdefterindeki şuanki notu';
$string['cutoffdate'] = 'Tamamlanması gereken tarih';
$string['cutoffdate_help'] = 'Ayarlanmışsa, bu tarihten sonra uzatma olmadan başvurular kabul edilmeyecektir. Ayarlanmazsa, başvurular her zaman kabul edilecektir.';
$string['cutoffdatecolon'] = 'Tamamlanması gereken tarih: {$a}';
$string['cutoffdatefromdatevalidation'] = 'Tamamlanması gereken tarih, gönderime izin verilen tarihten önce olamaz.';
$string['cutoffdatevalidation'] = 'Tamamlanması gereken tarih son teslim tarihinden önce olamaz.';
$string['defaultgradescale'] = 'Not verme ölçeği';
$string['defaultgradescale_help'] = 'Yeni ödevler için varsayılan not verme ölçeği. Yalnızca standart ölçekler kullanılabilir.';
$string['defaultgradetype'] = 'Not verme türü';
$string['defaultgradetype_help'] = 'Yeni ödevler için varsayılan not verme türü.';
$string['defaultlayout'] = 'Varsayılan düzeni geri yükle';
$string['defaultsettings'] = 'Öntanımlı ödev ayarları';
$string['defaultsettings_help'] = 'Bu ayar tüm yeni ödevler için öntanımlı değerleri tanımlar';
$string['defaultteam'] = 'Varsayılan grup';
$string['deleteallsubmissions'] = 'Tüm gönderimler';
$string['description'] = 'Açıklama';
$string['disabled'] = 'Devre dışı bırakıldı';
$string['downloadall'] = 'Bütün gönderimleri indir';
$string['downloadasfolders'] = 'Gönderimleri klasörlere indirin';
$string['downloadasfolders_help'] = 'Ödev gönderimleri klasörler halinde indirilebilir. Daha sonra her gönderim, klasör yapısı herhangi bir alt klasör için tutulacak şekilde ayrı bir klasöre konur ve dosyalar yeniden adlandırılmaz.';
$string['downloadselectedsubmissions'] = 'Seçili başvuruları indir';
$string['duedate'] = 'Son teslim tarihi';
$string['duedate_help'] = 'Bu, görevin bitiş tarihidir. Gönderimlere bu tarihten sonra da izin verilecektir, ancak bu tarihten sonra gönderilen ödevler geç kaldı olarak değerlendirilecektir. Belirli bir tarihten sonra gönderimleri önlemek için tamamlanması gereken tarih belirleyin.';
$string['duedateaftersubmissionvalidation'] = 'Son teslim tarihi, gönderimlere izin verilen tarihten sonra olmalıdır.';
$string['duedatecolon'] = 'Son teslim tarihi: {$a}';
$string['duedatereached'] = 'Bu ödevin teslim tarihi geçmiş';
$string['duedatevalidation'] = 'Son tarih, izin verilen tarihten önce gönderilemez.';
$string['duplicateoverride'] = 'Geçersiz kılmaları çoğalt';
$string['editaction'] = 'Eylemler...';
$string['editattemptfeedback'] = '{$a} numaralı deneme için notu ve geribildirimi düzenleyin.';
$string['editingpreviousfeedbackwarning'] = 'Daha önceki bir deneme için geri bildirimi düzenliyorsunuz. Bu, {$a->totalattempts} içinde {$a->attemptnumber} olan girişimdir.';
$string['editingstatus'] = 'Durumu düzenleme';
$string['editonline'] = 'Çevrimiçi düzenleme';
$string['editoverride'] = 'Geçersiz kılmayı düzenle';
$string['editsubmission'] = 'Gönderimi düzenleyin';
$string['editsubmission_help'] = 'Yine de gönderiminizde değişiklik yapabilirsiniz.';
$string['editsubmissionother'] = '{$a} için gönderimi düzenle';
$string['enabled'] = 'Etkin';
$string['enabletimelimit'] = 'Zamanlanmış atamaları etkinleştir';
$string['enabletimelimit_help'] = 'Etkinleştirilirse, atama ayarları sayfasında bir zaman sınırı belirleyebilirsiniz.';
$string['errorgradechangessaveddetail'] = 'Not ve geri bildirimde yapılan değişiklikler kaydedilmedi.';
$string['errornosubmissions'] = 'İndirilebilecek hiç gönderim bulunmuyor';
$string['errorquickgradingvsadvancedgrading'] = 'Bu ödev şu anda gelişmiş not vermeyi kullandığı için notlar kaydedilmedi';
$string['errorrecordmodified'] = 'Birisi, sayfayı yüklediğinizden daha yakın bir veya daha fazla kaydı değiştirdiği için notlar kaydedilmedi.';
$string['eventallsubmissionsdownloaded'] = 'Tüm gönderimler indiriliyor.';
$string['eventassessablesubmitted'] = 'Bir gönderimde bulunuldu.';
$string['eventbatchsetmarkerallocationviewed'] = 'Toplu değerlendime ataması görüntülendi';
$string['eventbatchsetworkflowstateviewed'] = 'Toplu iş akışı durumu görüntüleneni ayarlayın.';
$string['eventextensiongranted'] = 'Ek süre tanındı';
$string['eventfeedbackupdated'] = 'Geri bildirim güncellendi';
$string['eventfeedbackviewed'] = 'Görüş geribildirimi';
$string['eventgradingformviewed'] = 'Değerlendirme formu görüntülendi.';
$string['eventgradingtableviewed'] = 'Değerlendirme tablosu görüntülendi.';
$string['eventidentitiesrevealed'] = 'Kimlikler açığa çıkarıldı.';
$string['eventmarkerupdated'] = 'Atanan değerlendici görüntülendi';
$string['eventoverridecreated'] = 'Ödev geçersiz kılma oluşturuldu';
$string['eventoverridedeleted'] = 'Ödev geçersiz kılma silindi';
$string['eventoverrideupdated'] = 'Ödev geçersiz kılma güncellendi';
$string['eventremovesubmissionformviewed'] = 'Görüntülenen gönderim onayını kaldırın.';
$string['eventrevealidentitiesconfirmationpageviewed'] = 'Görüntülenen kimlik doğrulama sayfası açığa çıkıyor.';
$string['eventstatementaccepted'] = 'Kullanıcı gönderim beyanını kabul etmiştir.';
$string['eventsubmissionconfirmationformviewed'] = 'Gönderme onay formu görüntülendi.';
$string['eventsubmissioncreated'] = 'Gönderme oluşturuldu.';
$string['eventsubmissionduplicated'] = 'Kullanıcı gönderisini kopyaladı.';
$string['eventsubmissionformviewed'] = 'Gönderme formu görüntülendi.';
$string['eventsubmissiongraded'] = 'Gönderim notlandırılmıştır.';
$string['eventsubmissionlocked'] = 'Gönderimler bir kullanıcı için kilitlendi.';
$string['eventsubmissionremoved'] = 'Ödev gönderisi kaldırıldı';
$string['eventsubmissionstatusupdated'] = 'Gönderimin durumu güncellendi.';
$string['eventsubmissionstatusviewed'] = 'Gönderim durumuna bakıldı.';
$string['eventsubmissionunlocked'] = 'Gönderimlerin bir kullanıcı için kilidi açık.';
$string['eventsubmissionupdated'] = 'Gönderme güncellendi.';
$string['eventsubmissionviewed'] = 'Gönderme görüntülendi.';
$string['eventworkflowstateupdated'] = 'İş akışı durumu güncellendi.';
$string['expandreviewpanel'] = 'İnceleme paneli genişletin';
$string['extensionduedate'] = 'Ek sürenin bitiş tarihi';
$string['extensionduedatecurrent'] = 'Mevcut uzatma son tarihi';
$string['extensionduedatenone'] = 'Hiçbiri';
$string['extensionduedaterange'] = 'Hiçbiri';
$string['extensionduedatewithout'] = 'Geçerli uzantısı olmayan kullanıcılar: {$a}';
$string['extensionnotafterduedate'] = 'Ek sürenin bitiş tarihi, ödevin ilk bitiş tarihinden sonra olmalıdır';
$string['extensionnotafterfromdate'] = 'Uzatma tarihi, tarihinden itibaren izin verilen gönderimlerin sonrasında olmalıdır';
$string['feedback'] = 'Geri bildirim';
$string['feedbackavailableanonhtml'] = 'Hakkında yeni geri bildiriminiz var.
\'<i>{$a->assignment} </i>\' için atama sunumu <br /> <br/>
<a href="{$a->url} "> Ödev tesliminize </a> eklendiğini görebilirsiniz.';
$string['feedbackavailableanonsmall'] = '{$a->assignment} ödevi için yeni geri bildirim';
$string['feedbackavailableanontext'] = 'Hakkında yeni geri bildiriminiz var.
\'{$a->assignment}\' için atama sunumu

Ödev tesliminize eklendiğini görebilirsiniz:

    {$a->url}';
$string['feedbackavailablehtml'] = '{$a->username} sizinle ilgili bazı geri bildirimler yayınladı.
<i> {$a->assignment} </i> \'için atama başvurusu <br/> <br/>
<a href="{$a->url} "> ödev gönderiminize eklendiğini görebilirsiniz </a>.';
$string['feedbackavailablesmall'] = '{$a->username}, {$a->assignment} ödevi için geri bildirim verdi';
$string['feedbackavailabletext'] = '{$a->username}, \'{$a->assignment}\' ödeviniz için bir geriblidirim yayınladı

Ödev gönderiminize eklenen bu geribildirimi şu adresden görebilirsiniz:

     {$a->url}';
$string['feedbackplugin'] = 'Geri bildirim eklentisi';
$string['feedbackpluginforgradebook'] = 'Not defterlerine yorum gönderen geri bildirim eklentisi';
$string['feedbackpluginforgradebook_help'] = 'Sadece bir ödev geribildirimi eklentisi geribildirim not defterine itilebilir.';
$string['feedbackplugins'] = 'Geri bildirim eklentisi';
$string['feedbacksettings'] = 'Geri bildirim ayarları';
$string['feedbacktypes'] = 'Geri bildirim türleri';
$string['filesubmissions'] = 'Dosya gönderimleri';
$string['filter'] = 'Filtre';
$string['filterall'] = 'Tümü';
$string['filterdraft'] = 'Taslak';
$string['filtergrantedextension'] = 'Uzatma verilen';
$string['filternone'] = 'Filtre yok';
$string['filternotsubmitted'] = 'Teslim edilmedi.';
$string['filterrequiregrading'] = 'Not verilmesi gerekiyor';
$string['filtersubmitted'] = 'Gönderilmiş';
$string['fixrescalednullgrades'] = 'Bu ödevde bazı hatalı notlar bulunmaktadır. <a href="{$a-> link}">bu notları otomatik olarak düzeltebilir</a>. Bu, kurs toplamlarını etkileyebilir.';
$string['fixrescalednullgradesconfirm'] = 'Hatalı notları düzeltmek istediğinizden emin misiniz? Etkilenen tüm notlar kaldırılacaktır. Bu, ders toplamlarını etkileyebilir.';
$string['fixrescalednullgradesdone'] = 'Notlar sabitlendi.';
$string['gradeabovemaximum'] = 'Verilen puan {$a} den küçük ya da eşit olmalıdır.';
$string['gradeactions'] = 'Not verme işlemleri';
$string['gradebelowzero'] = 'Notlar sıfıra (0) eşit ya da büyük olmalıdır';
$string['gradebreakdown'] = 'Not dağılımı';
$string['gradecanbechanged'] = 'Not değiştirilebilir';
$string['gradechangessaveddetail'] = 'Not ve geribildirim değişiklikleri kaydedildi';
$string['graded'] = 'Not verildi';
$string['gradedby'] = 'Notu veren';
$string['gradedfollowupsubmit'] = 'Not verildi - yeniden gönderildi';
$string['gradedon'] = 'Not verildi';
$string['gradeitem:submissions'] = 'Gönderimler';
$string['gradelocked'] = 'Bu not kilitli veya not defterinde geçersiz kılınmıştır.';
$string['gradeoutof'] = '{$a} Dışarıdan notu';
$string['gradeoutofhelp'] = 'Not';
$string['gradeoutofhelp_help'] = 'Öğrencinin gönderim notunu buraya girin. Ondalık sayıları ekleyebilirsiniz.';
$string['gradersubmissionupdatedhtml'] = '{$a->username}, <i>\'{$a->assignment}\'</i> isimli gönderimini güncelledi.<br/><br /><a href="{$a->url}">Web sitesinden</a> ulaşabilirsiniz.';
$string['gradersubmissionupdatedsmall'] = '{$a->username} Ödev gönderimleri güncellendi{$a->assignment}.';
$string['gradersubmissionupdatedtext'] = '{$a->username}, \'{$a->assignment}\' isimli ödevini güncelledi.

Buradan ulaşabilirsiniz:

{$a->url}';
$string['gradestudent'] = 'Öğrenci notu: (id={$a->id}, fullname={$a->fullname}).';
$string['gradeuser'] = 'Not {$a}';
$string['grading'] = 'Not verme';
$string['gradingchangessaved'] = 'Not değişiklikleri kaydedildi.';
$string['gradingduedate'] = 'Not vermeyi hatırlat';
$string['gradingduedate_help'] = 'Sunumların değerlendirmesinin tamamlanması gereken tarih. Bu tarih, öğretmenler için gösterge panosu bildirimlerine öncelik vermek için kullanılır.';
$string['gradingdueduedatevalidation'] = 'Not vermem gereken tarihin son tarihten önce olamayacağını hatırlatın.';
$string['gradingduefromdatevalidation'] = 'Tarihe göre not vermem gerektiğini hatırlat:  bu tarih ödev gönderimlere izin verilen tarihten önce olamaz.';
$string['gradingmethodpreview'] = 'Not verme Ölçütü';
$string['gradingoptions'] = 'Seçenekler';
$string['gradingstatus'] = 'Puan durumu';
$string['gradingstudent'] = 'Öğrenciye not verme';
$string['gradingsummary'] = 'Notverme özeti';
$string['grantextension'] = 'Ek süre tanı';
$string['grantextensionforusers'] = '{$a} öğrencilerine ek süre tanı';
$string['groupoverrides'] = 'Grup geçersiz kılmaları';
$string['groupoverridesdeleted'] = 'Grup geçersiz kılmaları silindi';
$string['groupsnone'] = 'Erişebileceğiniz grup yok.';
$string['groupsubmissionsettings'] = 'Grup gönderimleri ayarları';
$string['hiddenuser'] = 'Katılımcı';
$string['hidegrader'] = 'Değerlendici kimliğini öğrencilerden gizle';
$string['hidegrader_help'] = 'Etkinleştirilirse, ödevi puanlayan herhangi bir kullanıcının kimliği gösterilmez, böylece öğrenciler çalışmalarını kimin değerlendirdiğini göremezler. Bu ayarın puanlama sayfasındaki yorumlar kutusu üzerinde bir etkisi olmadığını unutmayın.';
$string['hideshow'] = 'Gizle/Göster';
$string['inactiveoverridehelp'] = '* Bu geçersiz kılma etkin değildir çünkü kullanıcının etkinliğe erişimi kısıtlanmıştır. Bunun nedeni grup veya rol atamaları, diğer erişim kısıtlamaları veya gizlenen etkinlik olabilir.';
$string['includesuspendedparticipants'] = 'Askıya alınan katılımcıları dahil edin';
$string['indicator:cognitivedepth'] = 'Bilişsel ödev';
$string['indicator:cognitivedepth_help'] = 'Bu gösterge, bir ödev etkinliğinde öğrencinin ulaştığı bilişsel derinliğe dayanır.';
$string['indicator:cognitivedepthdef'] = 'Bilişsel ödev';
$string['indicator:cognitivedepthdef_help'] = 'Katılımcı, bu analiz aralığı boyunca Ödev faaliyetleri tarafından sunulan bilişsel katılım yüzdesine ulaştı (Düzeyler = Görünüm yok, Görüntüle, Gönder, Geri bildirimi görüntüle, Geri bildirim hakkında yorum, Geri bildirimi görüntüledikten sonra tekrar gönder)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Sosyal görevlendirme';
$string['indicator:socialbreadth_help'] = 'Bu gösterge, bir ödev etkinliğinde öğrencinin ulaştığı sosyal genişliğe dayanır.';
$string['indicator:socialbreadthdef'] = 'Sosyal görevlendirme';
$string['indicator:socialbreadthdef_help'] = 'Katılımcı, bu analiz aralığı boyunca Ödev faaliyetlerinin sunduğu sosyal katılımın bu yüzdesine ulaştı (Düzeyler = Katılım yok, Yalnız katılımcı, Başkalarıyla katılımcı)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['instructionfiles'] = 'Talimat dosyaları';
$string['introattachments'] = 'Ek dosyalar';
$string['introattachments_help'] = 'Cevap şablonları gibi ödevde kullanılmak üzere ek dosyalar eklenebilir.';
$string['invalidfloatforgrade'] = 'Verilen puan anlaşılamadı: {$a}';
$string['invalidgradeforscale'] = 'Verilen puan  mevcut ölçek için geçerli değildi';
$string['invalidoverrideid'] = 'Geçersiz geçersiz kılma kimliği';
$string['lastmodifiedgrade'] = 'Son düzenleme (not)';
$string['lastmodifiedsubmission'] = 'Son düzenleme (gönderim)';
$string['latesubmissions'] = 'Gecikmiş gönderimler';
$string['latesubmissionsaccepted'] = '{$a} tarihine kadar izin verildi';
$string['loading'] = 'Yükleniyor...';
$string['locksubmissionforstudent'] = 'Öğrenci için daha fazla gönderme yapılmasını önle: (id={$a->id}, fullname={$a->fullname}).';
$string['locksubmissions'] = 'Gönderimleri kilitle';
$string['manageassignfeedbackplugins'] = 'Ödev geribildirim eklentilerini yönet';
$string['manageassignsubmissionplugins'] = 'Ödev gönderim eklentilerini yönet';
$string['marker'] = 'Değerlendirici';
$string['markerfilter'] = 'Değerlendirici flitresi';
$string['markerfilternomarker'] = 'Değerlendirici yok';
$string['markingallocation'] = 'Değerlendirici ataması kullan';
$string['markingallocation_help'] = 'Değerlendiime iş akışıyla birlikte etkinleştirildiyse değerlendiriciler belirli öğrencilere atanabilir.';
$string['markinganonymous'] = 'Anonim olarak not verirken notların kısmen açıklanmasına izin verin';
$string['markinganonymous_help'] = 'Anonim gönderimler ve değerlendirme iş akışı ile birlikte etkinleştirilirse, anonim olarak değerlendirme yapılırken notların kısmen serbest bırakılmasına olanak tanır.';
$string['markingstate'] = 'Değerlendirme durumu';
$string['markingworkflow'] = 'Değerlendirme iş akışın kullan';
$string['markingworkflow_help'] = 'Etkinleştirilirse, notlar öğrencilere verilmeden önce bir dizi iş akışı aşamasından geçecektir. Bu, birden fazla notlandırma turuna olanak tanır ve notların tüm öğrencilere aynı anda verilmesini sağlar.';
$string['markingworkflowstate'] = 'Değerlendirme iş akışı durumu';
$string['markingworkflowstate_help'] = 'Olası iş akışı durumları şunları içerebilir (izinlerinize bağlı olarak):

* Değerlendirilmedi- Değerlendirmeci henüz değerlendirmeye başlamadı
* Değerlendiriliyor- Değerlendirmeci değerlendirme başladı ancak henüz bitmedi
*Değerlendirme tamamlandı - Değerlendirici değerlendirmeyi bitirdi ancak kontrol/düzeltmeler için geri dönüş yapabilir
* İnceleniyor- Değerlendirme artık kalite kontrolünden sorumlu öğretmende
* Yayınlanmaya hazır - sorumlu öğretmen değerlendirmeden memnun, ancak öğrencilerin değerlendirmeye erişmesine izin vermeden önce bekleyebilir
* Yanılandı - öğrenci notlara/geri bildirime erişebilir';
$string['markingworkflowstateinmarking'] = 'Değerlendiriliyor';
$string['markingworkflowstateinreview'] = 'İncelemede';
$string['markingworkflowstatenotmarked'] = 'Değerlendirilmedi';
$string['markingworkflowstatereadyforrelease'] = 'Yayımlamak için hazır';
$string['markingworkflowstatereadyforreview'] = 'Değerlendime tamamlandı';
$string['markingworkflowstatereleased'] = 'Yayımlandı';
$string['maxattempts'] = 'Kabul Edilen deneme';
$string['maxattempts_help'] = 'Bir öğrenci tarafından yapılabilecek maksimum gönderim denemesi sayısı. Bu sayıya ulaşıldıktan sonra gönderi yeniden açılamaz.';
$string['maxgrade'] = 'Enyüksek not';
$string['maxperpage'] = 'Sayfa başına en fazla ödev';
$string['maxperpage_help'] = 'Değerlendiricinin ödev değerlendirme sayfasında gösterebileceği en fazla ödev sayısı. Bu ayar, çok sayıda katılımcının bulunduğu kurslar için zaman aşımlarının önlenmesinde yararlıdır.';
$string['messageprovider:assign_due_digest'] = 'Ödevlerin 7 gün içinde teslim edilmesi';
$string['messageprovider:assign_due_soon'] = 'Teslim tarihi yaklaşan ödev bildirimi';
$string['messageprovider:assign_notification'] = 'Ödev bildirimleri';
$string['messageprovider:assign_overdue'] = 'Ödev gecikme bildirimi';
$string['modulename'] = 'Ödev';
$string['modulename_help'] = 'Ödev etkinliği modülü, bir öğretmenin ödevleri duyurmasına, çalışmaları toplayıp not ve geri bildirim vermesine imkan sağlar.

Öğrenciler, metin belgeleri, e-tablolar, resimler veya ses ve video klipleri gibi dijital içerikleri (dosyalar) gönderebilir. Alternatif veya buna ek olarak, ödev, öğrencilerin doğrudan metin düzenleyicisine metin yazmasını gerektirebilir. Ödev, öğrencilere, sanat eseri gibi çevrimdışı tamamlamaları gereken \'gerçek dünya\' ödevlerini hatırlatmak için de kullanılabilir; dolayısıyla herhangi bir dijital içerik gerektirmez. Öğrenciler tek başlarına veya bir gruba üye olarak çalışabilirler.

Ödevleri incelerken, öğretmenler geribildirim yorumları gönderebilir ve değerlendirilmiş öğrenci gönderimleri, yorumlar içeren belgeler veya sesli geribildirim gibi dosyaları yükleyebilir. Ödevler sayısal puan, özel ölçek veya not harfleri gibi gelişmiş not verme yöntemiyle değerlendirilebilir. Nihati notları not defterine kaydedilir.';
$string['modulename_link'] = 'mod/assignment/view';
$string['modulenameplural'] = 'Ödevler';
$string['moreusers'] = '{$a} daha...';
$string['multipleteams'] = 'Birden fazla grubun üyesi';
$string['multipleteams_desc'] = 'Ödev, gruplar halinde sunulmayı gerektirir. Birden fazla grubun üyesisiniz. Gönderebilmeniz için yalnızca bir grubun üyesi olmanız gerekir. Grup üyeliğinizi değiştirmek için lütfen öğretmeninizle iletişime geçin.';
$string['multipleteamsgrader'] = 'Birden fazla grubun üyesi, bu nedenle gönderim yapamıyor.';
$string['newsubmissions'] = 'Gönderilmiş ödevler';
$string['nextuser'] = 'Sonraki kullanıcı';
$string['noattempt'] = 'Deneme yok';
$string['noclose'] = 'Kapanış tarihi yok';
$string['nofiles'] = 'Dosya yok';
$string['nofilters'] = 'Filtre yok';
$string['nograde'] = 'Not yok.';
$string['nogroupoverrides'] = 'Şu anda herhangi bir grup geçersiz kılma işlemi bulunmamaktadır.';
$string['nomoresubmissionsaccepted'] = 'Yalnızca uzatma verilen katılımcılar için izin verilir';
$string['none'] = 'Yok';
$string['noonlinesubmissions'] = 'Bu ödev için online gönderimde bulunmanız gerekmiyor.';
$string['noopen'] = 'Açılış tarih yok';
$string['nooverridedata'] = 'Ödev ayarlarından en az birini geçersiz kılmalısınız.';
$string['nosavebutnext'] = 'Sonraki';
$string['nosubmission'] = 'Bu ödev için gönderimde bulunulmamış.';
$string['nosubmissionyet'] = 'Henüz herhangi ödev gönderilmedi';
$string['noteam'] = 'Herhangi bir grubun üyesi değil';
$string['noteam_desc'] = 'Bu ödev, gruplar halinde sunulmayı gerektirir. Herhangi bir grubun üyesi değilsiniz, bu nedenle gönderim oluşturamazsınız. Lütfen bir gruba eklenecek öğretmeninizle iletişime geçin.';
$string['noteamgrader'] = 'Herhangi bir grubun üyesi değil, bu nedenle gönderim yapamıyor.';
$string['notgraded'] = 'Puanlanmamış';
$string['notgradedyet'] = 'Henüz no verilmemiş';
$string['notifications'] = 'Bildirimler';
$string['notifystudents'] = 'Öğrencileri bilgilendir';
$string['nouseroverrides'] = 'Şu anda kullanıcı geçersiz kılma yok.';
$string['nousers'] = 'Kullanıcı yok';
$string['nousersselected'] = 'Hiçbir kullanıcı seçilmedi';
$string['numberofdraftsubmissions'] = 'Taslaklar';
$string['numberofparticipants'] = 'Katılımcılar';
$string['numberofsubmissionsneedgrading'] = 'Not verilmesi gereken';
$string['numberofsubmissionsneedgradinglabel'] = 'Not verilmesi gerekiyor: {$a}';
$string['numberofsubmittedassignments'] = 'Gönderilen';
$string['numberofteams'] = 'Gruplar';
$string['offline'] = 'Çevrimiçi başvuru gerekmiyor';
$string['open'] = 'Aç';
$string['opensubmissionexists'] = 'Açık ödev gönderimi zaten var.';
$string['outlinegrade'] = 'Not : {$a}';
$string['outof'] = '{$a->current} dışında {$a->total}';
$string['overdue'] = 'Öde tarinten itibaren geç kaldı: {$a}';
$string['override'] = 'Geçersiz kıl';
$string['overridedeletegroupsure'] = '{$a} grubu için geçersiz kılmayı silmek istediğinizden emin misiniz?';
$string['overridedeleteusersure'] = '{$a} kullanıcısı için geçersiz kılma işlemini silmek istediğinizden emin misiniz?';
$string['overridegroup'] = 'Grubu geçersiz kıl';
$string['overridegroupeventname'] = '{$a->assign} - {$a->group}';
$string['overrides'] = 'Geçersiz kılma işllemleri';
$string['overrideuser'] = 'Kullanıcıyı geçersiz kıl';
$string['overrideusereventname'] = '{$a->assign} - Geçersiz kıl';
$string['page-mod-assign-view'] = 'Ödev modülü anasayfası ve gönderim sayfası';
$string['page-mod-assign-x'] = 'Herhangi bir ödev modülü sayfası';
$string['paramtimeremaining'] = 'Kalan {$a}';
$string['participant'] = 'Katılımcı';
$string['pluginadministration'] = 'Ödev yönetimi';
$string['pluginname'] = 'Ödev';
$string['preventsubmissionnotingroup'] = 'Grup gönderimini şart koş';
$string['preventsubmissionnotingroup_help'] = 'Etkinleştirilirse, bir gruba üye olmayan kullanıcılar gönderim yapamaz.';
$string['preventsubmissions'] = 'Kullanıcının bu ödev için başka herhangi bir gönderim yapmasını önleyin.';
$string['preventsubmissionsshort'] = 'Gönderim değişikliklerini önle';
$string['previous'] = 'Önceki';
$string['previoususer'] = 'Önceki kullanıcı';
$string['privacy:attemptpath'] = '{$a} denemesi';
$string['privacy:blindmarkingidentifier'] = 'İsimisiz gönderimler için kullanılan tanımlayıcı';
$string['privacy:gradepath'] = 'not';
$string['privacy:metadata:assigndownloadasfolders'] = 'Birden fazla dosya gönderiminin klasörler halinde indirilip indirilmeyeceğine ilişkin bir kullanıcı tercihi';
$string['privacy:metadata:assignfeedbackpluginsummary'] = 'Ödev için geri bildirim verileri.';
$string['privacy:metadata:assignfilter'] = '\'Gönderildi\', \'Gönderilmedi\', \'Puanlama gerektirir\' ve \'Verilen uzatma\' gibi filtre seçenekleri';
$string['privacy:metadata:assigngrades'] = 'Ödev için kullanıcı notlarını saklar';
$string['privacy:metadata:assignmarkerfilter'] = 'Gönderim özetini atanan değerlendiciye göre filtreleyin.';
$string['privacy:metadata:assignmentid'] = 'Ödev Kimliği';
$string['privacy:metadata:assignmessageexplanation'] = 'Mesajlar mesajlaşma sistemi aracılığıyla öğrencilere gönderilir.';
$string['privacy:metadata:assignoverrides'] = 'Ödev için geçersiz kılma bilgilerini depolar';
$string['privacy:metadata:assignperpage'] = 'Sayfa başına gösterilen ödev sayısı.';
$string['privacy:metadata:assignquickgrading'] = 'Hızlı not vermenin kullanılıp kullanılmayacağı tercihi.';
$string['privacy:metadata:assignsubmissiondetail'] = 'Kullanıcı gönderim bilgilerini saklar';
$string['privacy:metadata:assignsubmissionpluginsummary'] = 'Ödev için gönderim verileri.';
$string['privacy:metadata:assignuserflags'] = 'Uzatma tarihleri gibi kullanıcı meta verilerini depolar';
$string['privacy:metadata:assignusermapping'] = 'İsimsiz gönderimler için eşleme';
$string['privacy:metadata:assignworkflowfilter'] = 'Farklı iş akışı aşamalarına göre filtreleyin.';
$string['privacy:metadata:grade'] = 'Bu ödev teslimi için sayısal puan. Ölçek / gelişmiş puanlama formları vb. İle belirlenebilir ancak her zaman ondalıklı sayıyı dönüştürülür';
$string['privacy:metadata:grader'] = 'Değerlendirme yapna kişinin kullanıcı kimliği.';
$string['privacy:metadata:groupid'] = 'Kullanıcının üyesi olduğu grup kimliği.';
$string['privacy:metadata:latest'] = 'Yalnızca en son deneme hakkında bilgi edinmek isteyen sorguları büyük ölçüde basitleştirir.';
$string['privacy:metadata:mailed'] = 'Bu kullanıcıya henüz posta gönderilmedi mi?';
$string['privacy:metadata:timecreated'] = 'Oluşturulan zaman';
$string['privacy:metadata:timestarted'] = 'Süre başladı';
$string['privacy:metadata:userid'] = 'Kullanıcının kimliği';
$string['privacy:studentpath'] = 'öğrencigönderimleri';
$string['privacy:submissionpath'] = 'gönderim';
$string['quickgrading'] = 'Hızlı not verme';
$string['quickgrading_help'] = 'Hızlı puanlama, puan verilen ödevlere doğrudan puan (ve kazanım) göndermenizi sağlar. Hızlı puanlama, gelişmiş puanlamaya uyumlu değildir ve birden çok değerlendirici olduğunda önerilmez.';
$string['quickgradingchangessaved'] = 'Not değişiklikleri kaydedildi';
$string['quickgradingresult'] = 'Hızlı not verme';
$string['recordid'] = 'Tanımlayıcı';
$string['relativedatessubmissiontimeleft'] = 'Her öğrenci için hesaplanmıştır';
$string['removeallgroupoverrides'] = 'Tüm grup geçersiz kılmaları';
$string['removealluseroverrides'] = 'Tüm kullanıcı geçersiz kılmaları';
$string['removesubmission'] = 'Gönderimi kaldır';
$string['removesubmissionconfirm'] = 'Gönderinizi kaldırmak istediğinizden emin misiniz?';
$string['removesubmissionconfirmforstudent'] = '{$a} için gönderimi kaldırmak istediğinizden emin misiniz?';
$string['removesubmissionconfirmforstudentwithtimelimit'] = '{$a} için gönderimi kaldırmak istediğinizden emin misiniz? Lütfen bunun öğrencinin zaman sınırını sıfırlamayacağını unutmayın. Bir zaman sınırı kullanıcı geçersiz kılma ekleyerek daha fazla zaman verebilirsiniz.';
$string['removesubmissionconfirmwithtimelimit'] = 'Gönderinizi kaldırmak istediğinizden emin misiniz? Lütfen bunun zaman sınırınızı sıfırlamayacağını unutmayın.';
$string['removesubmissionforstudent'] = 'Öğrenci için gönderimi kaldırın: (id={$a->id}, tam adı={$a->fullname}).';
$string['reopenuntilpassincompatiblewithblindmarking'] = 'Geçirilene kadar yeniden aç seçeneği isimsiz gönderimlerle uyumlu değildir, çünkü notlar, öğrenci kimlikleri açıklanana kadar not defterine aktarılmaz.';
$string['requireallteammemberssubmit'] = 'Tüm grup üyelerinin göndermeleri gerekiyor';
$string['requireallteammemberssubmit_help'] = 'Bu ayar, Gönderim ayarlarındaki \'Öğrencilerin gönder düğmesini tıklamasını zorunlu kıl\' seçeneğiyle birlikte kullanılmalıdır.

Etkinleştirilirse, grup gönderiminin gönderilmiş olarak kabul edilmesi için tüm grup üyelerinin gönder düğmesine tıklaması gerekir.  Devre dışı bırakılırsa herhangi bir grup üyesi gönder düğmesine tıklayabilir.';
$string['requiresubmissionstatement'] = 'Öğrencilerin gönderim bildirimini kabul etmelerini isteyin';
$string['requiresubmissionstatement_help'] = 'Öğrencilerin bu göreve gönderilen tüm gönderiler için gönderim beyanını kabul etmelerini isteyin.';
$string['revealidentities'] = 'Öğrenci bilgilerini göster';
$string['revealidentitiesconfirm'] = 'Bu ödev için öğrenci kimliklerini göstermek istediğinizden emin misiniz? Bu işlem geri alınamaz. Öğrenci kimlikleri ortaya çıkınca, notlar not defterine yazılacaktır.';
$string['reverttodefaults'] = 'Ödev varsayılanlarını geri al';
$string['reverttodraft'] = 'Gönderiyi taslak durumuna geri döndür';
$string['reverttodraftforgroup'] = 'Ödev gönderimini, {$a} grubu için tekrar taslağa döndürün.';
$string['reverttodraftforstudent'] = '(id={$a->id} nolu fullname={$a->fullname}) isimli öğrencinin gönderimini taslağa döndür';
$string['reverttodraftshort'] = 'Gönderimi, taslağa döndür';
$string['reviewed'] = 'İncelendi';
$string['save'] = 'Kaydet';
$string['saveallquickgradingchanges'] = 'Tüm hızlı puanlama değişikliklerini kaydet';
$string['saveandcontinue'] = 'Kaydet ve devam et';
$string['savechanges'] = 'Değişiklikleri kaydet';
$string['savegradingresult'] = 'Not';
$string['savenext'] = 'Kaydet ve sonrakini göster';
$string['saveoverrideandstay'] = 'Kaydet ve diğer geçersiz kılmayı gir';
$string['savingchanges'] = 'Değişiklikleri kaydetme...';
$string['scale'] = 'Ölçek';
$string['search:activity'] = 'Ödev - etkinlik bilgisi';
$string['selectedusers'] = 'Seçilen kullanıcılar';
$string['selectlink'] = 'Seçiniz...';
$string['selectuser'] = '{$a} yı seç';
$string['sendlatenotifications'] = 'Değerlendiricileri geç gönderimler için uyar';
$string['sendlatenotifications_help'] = 'Etkinleştirilirse, bir öğrenci ödevi geç teslim ettiğinde, not verenler (genellikle öğretmenler) bir mesaj alır. İleti yöntemleri yapılandırılabilir.';
$string['sendnotificationduedatesoon'] = 'Ödev son teslim tarihinin yaklaştığını kullanıcıya bildirme';
$string['sendnotificationduedigest'] = '7 gün içinde teslim edilmesi gereken ödevleri kullanıcıya bildir';
$string['sendnotificationoverdue'] = 'Gecikmiş bir ödevi kullanıcıya bildirme';
$string['sendnotifications'] = 'Değerlendicileri gönderimler için uyar';
$string['sendnotifications_help'] = 'Etkinleştirilirse, öğrenciler her öğrenci bir ödevi erken, zamanında ve geç teslim ettiğinde, not verenler (genellikle öğretmenler) bir mesaj alır. İleti yöntemleri yapılandırılabilir.';
$string['sendstudentnotifications'] = 'Öğrenciye tebliğ et';
$string['sendstudentnotifications_help'] = 'Güncellenen not veya geri bildirim hakkında bir bildirim göndermek için bu kutuyu işaretleyin. Ödev bir değerlendirme iş akışı kullanıyorsa veya değerlendirici raporunda notlar gizliyse, not verilene kadar bildirim gönderilmez.';
$string['sendstudentnotificationsdefault'] = '\'Öğrenciye tebliğ et\' için varsayılan';
$string['sendstudentnotificationsdefault_help'] = 'Her öğrenciye not verilirken varsayılan olarak \'Öğrenciye bildir\' seçeneği işaretlenmeli mi?';
$string['sendsubmissionreceipts'] = 'Öğrencilere alındı mesajı gönderme';
$string['sendsubmissionreceipts_help'] = 'Bu anahtar, öğrenciler için teslim alındıların da etkinleştirir. Öğrenciler, başarılı bir şekilde her ödev gönderdiklerinde bir bildirim alırlar.';
$string['setmarkerallocationforlog'] = 'Puan dağılımını ayarla: (id={$a->id}, fullname={$a->fullname}, marker={$a->marker}).';
$string['setmarkingallocation'] = 'Puanlama dağılımını ayarla';
$string['setmarkingworkflowstate'] = 'Değerlendirme iş akışı dağılımını ayarla';
$string['setmarkingworkflowstateforlog'] = 'Değerlendirme İş akışı durumunu ayarla: (id ={$a->id}, fullname ={$a->fullname}, state ={$a->state}).';
$string['settings'] = 'Ödev ayarları';
$string['showrecentsubmissions'] = 'Son gönderimleri göster';
$string['status'] = 'Durum';
$string['studentnotificationworkflowstateerror'] = 'Öğrencileri bilgilendirmek için Değerlendime iş akışı durumu "Yayınlandı" olmalıdır.';
$string['submission'] = 'Gönderim';
$string['submissionactions'] = 'Gönderim işlemleri';
$string['submissionattachments'] = 'Dosyaları yalnızca gönderim sırasında göster';
$string['submissionattachments_help'] = 'Dosyaları yalnızca gönderim sayfasında göstermek için kutuyu işaretleyin. Aksi takdirde dosyalar hem ödev hem de gönderim sayfalarında gösterilecektir.';
$string['submissioncopiedhtml'] = '<p> Önceki ödev gönderiminizin <i> {$a->assignment} </i> bir kopyasını yaptınız.</p>
<p> <a href="{$a->url} "> ödev gönderiminizin durumunu görebilirsiniz. </a></p>';
$string['submissioncopiedsmall'] = '{$a->assignment} için önceki ödev gönderimini kopyaladınız.';
$string['submissioncopiedtext'] = 'Önceki dosyanızın bir kopyasını yaptınız
\'{$a->assignment}\' için ödev gönderimi

Ödev gönderiminizin durumunu görebilirsiniz:

     {$a->url}';
$string['submissiondrafts'] = 'Öğrencilerin gönder düğmesini tıklamasını zorunlu kılın';
$string['submissiondrafts_help'] = 'Öğrencilerin gönderdikleri ödevlerde değişiklik yapmayı bitirdiklerini ve değerlendirmeye hazır olduklarını gösteren bir gönder düğmesi olmalı mı?';
$string['submissioneditable'] = 'Öğrenci bu gönderimi düzenleyebilir';
$string['submissionempty'] = 'Hiçbir şey gönderilmemiş';
$string['submissionlog'] = 'Öğrenci: {$a->fullname}, Durumları: {$a->status}';
$string['submissionmodified'] = 'Mevcut gönderim verileriniz var. Lütfen bu sayfayı bırakın ve tekrar deneyin.';
$string['submissionmodifiedgroup'] = 'Gönderim başka biri tarafından değiştirildi. Lütfen bu sayfayı bırakın ve tekrar deneyin.';
$string['submissionnotcopiedinvalidstatus'] = 'Gönderim kopyalanmadı, çünkü yeniden açıldığı andan itibaren düzenlendi.';
$string['submissionnoteditable'] = 'Öğrenci bu gönderimi düzenleneyemez';
$string['submissionnotopen'] = 'Bu ödev gönderimler için açık değil';
$string['submissionnotready'] = 'Bu ödev gönderilmek için hazır değil :';
$string['submissionplugins'] = 'Gönderim eklentileri';
$string['submissionreceipthtml'] = '<p> \'<i>{$a->assignment}</i>\' için bir ödev gönderdiniz. </p>
<p> <a href="{$a->url}">ödev gönderiminizin</a> durumunu görebilirsiniz.</p>';
$string['submissionreceiptotherhtml'] = 'Şu ödev gönderiminiz
\'<i>{$a->assingment} </i>\' gönderildi. <br/> <br/>
<a href="{$a->url} "> Ödev gönderiminizin durumunu </a> görebilirsiniz.';
$string['submissionreceiptothersmall'] = '{$a->assignment} için ödev gönderiminiz gönderildi.';
$string['submissionreceiptothertext'] = 'İçin ödev gönderiniz
\'{$a->assignment}\' gönderildi.

Ödev gönderiminizin durumunu görebilirsiniz:

     {$a->url}';
$string['submissionreceipts'] = 'Gönderi alındılarını gönder.';
$string['submissionreceiptsmall'] = '{$a->assignment} için ödevinizi gönderdiniz';
$string['submissionreceipttext'] = '\'{$a->assignment}\'  ödevi için gönderimde bulundunuz.

Ödevinizin durumunu aşağıdaki bağlantıdan görebilirsiniz :

     {$a->url}';
$string['submissionsclosed'] = 'Gönderimler kapatıldı';
$string['submissionsettings'] = 'Gönderim ayarları';
$string['submissionslocked'] = 'Bu ödev gönderim kabul etmemektedir';
$string['submissionslockedshort'] = 'Gönderim değişikliklerine izin verilmiyor';
$string['submissionstatement'] = 'Gönderim durumu';
$string['submissionstatement_help'] = 'Çalışmalarını teslim etmek için her öğrencinin kabul etmesi gereken bildirim.';
$string['submissionstatementacceptedlog'] = 'Gönderim durumu {$a} tarafından onaylandı';
$string['submissionstatementdefault'] = 'Bu gönderi, başkalarının eserlerinin kullanımını kabul ettiğim durumlar dışında, kendi eserimdir.';
$string['submissionstatementrequired'] = 'Gönderimde bulunmadan önce bu beyanı kabul etmeniz gerekmektedir.';
$string['submissionstatementteamsubmission'] = 'Grup teslim bildirimi';
$string['submissionstatementteamsubmission_help'] = 'Her öğrencinin, kendi grubunun çalışmalarını sunabilmesi için kabul etmesi gerektiği ifadesi';
$string['submissionstatementteamsubmissionallsubmit'] = 'Tüm grup üyelerinin gönderdiği grup teslim bildirimi';
$string['submissionstatementteamsubmissionallsubmit_help'] = 'Her öğrencinin çalışmalarını grup üyesi olarak sunabilmesi için kabul etmesi gerektiğine dair beyan.';
$string['submissionstatementteamsubmissionallsubmitdefault'] = 'Bu sunum, başkalarının çalışmalarını kullandığımı belirttiğim yerler dışında, bir grup üyesi olarak benim kendi çalışmamdır.';
$string['submissionstatementteamsubmissiondefault'] = 'Bu gönderim, başkalarının çalışmalarının kullanıldığını kabul ettiğimiz yerler dışında, grubumuzun kendi çalışmasıdır.';
$string['submissionstatus'] = 'Gönderim durumu';
$string['submissionstatus_'] = 'Gönderim yok';
$string['submissionstatus_draft'] = 'Taslak (gönderilmedi)';
$string['submissionstatus_marked'] = 'Not verildi';
$string['submissionstatus_new'] = 'Gönderim yok';
$string['submissionstatus_reopened'] = 'Tekrar açıldı';
$string['submissionstatus_submitted'] = 'Not verilmesi için gönderildi';
$string['submissionstatusheading'] = 'Gönderim durumu';
$string['submissionsummary'] = '{$a->status}. En son şu zamanda düzenlenmiş {$a->timemodified}';
$string['submissionteam'] = 'Grup';
$string['submissiontypes'] = 'Gönderim türü';
$string['submitaction'] = 'Gönder';
$string['submitassignment'] = 'Ödevi gönder';
$string['submitassignment_help'] = 'Ödevinizi gönderdiğinizde,  üzerinde değişiklik yapmanız mümkün olmayacak.';
$string['submitforgrading'] = 'Not verilmesi için gönder';
$string['submitted'] = 'Gönderilmiş';
$string['submittedearly'] = 'Ödev {$a} erken teslim edildi';
$string['submittedlate'] = 'Ödev {$a} geç teslim edildi';
$string['submittedlateshort'] = '{$a} sonrası';
$string['submittedovertime'] = 'Ödev, süre sınırının {$a} üzerinde gönderildi';
$string['submittedundertime'] = 'Ödev, süre sınırının altında {$a} gönderildi';
$string['subpagetitle'] = '{$a->contextname} - {$a->subpage}';
$string['subplugintype_assignfeedback'] = 'Eklenti geri bildirimi';
$string['subplugintype_assignfeedback_plural'] = 'Eklentiler geri bildirimi';
$string['subplugintype_assignsubmission'] = 'Genderim eklentisi';
$string['subplugintype_assignsubmission_plural'] = 'Gönderim eklentileri';
$string['teamname'] = 'Gurup: {$a}';
$string['teamsubmission'] = 'Öğrenciler gruplar halinde gönderim yapar';
$string['teamsubmission_help'] = 'Etkinleştirilirse, öğrenciler varsayılan grup kümesine veya özel bir gruplamaya göre gruplara ayrılacaktır. Bir grup gönderimi grup üyeleri arasında paylaşılacak ve grubun tüm üyeleri birbirlerinin gönderimde yaptığı değişiklikleri görecektir.';
$string['teamsubmissiongroupingid'] = 'Öğrenci grupları için grup oluştur';
$string['teamsubmissiongroupingid_help'] = 'Bu, ödevin öğrenci gruplarını bulmada kullanacağı gruplamadır. Ayarlanmazsa, varsayılan grup kümesi kullanılacaktır.';
$string['textinstructions'] = 'Ödev yönergesi';
$string['timelimit'] = 'Zaman sınırı';
$string['timelimit_help'] = 'Etkinleştirilirse, süre sınırı ödev sayfasında belirtilir ve ödev sırasında bir geri sayım sayacı görüntülenir.';
$string['timelimitnotenabled'] = 'Ödev gönderim için zaman sınırı etkinleştirilmedi.';
$string['timelimitpassed'] = 'Zaman sınırı sona erdi';
$string['timemodified'] = 'Son düzenleme';
$string['timeremaining'] = 'Kalan süre';
$string['timeremainingcolon'] = 'Kalan süre: {$a}';
$string['togglezoom'] = 'Bölgeyi büyüt/küçült';
$string['ungroupedusers'] = '\'Gönderim yapmak için grup gerekli\' ayarı etkindir ve bazı kullanıcılar herhangi bir gruba üye olmadıkları veya birden fazla gruba üye olduğundan, gönderim yapamazlar.';
$string['ungroupedusersoptional'] = '\'Öğrenciler gruplar halinde gönderim yapsın\' ayarı etkinleştirilmiştir ve bazı kullanıcılar ya hiçbir gruba üye değildir ya da birden fazla gruba üyedir. Lütfen bu öğrencilerin \'Varsayılan grup\' üyesi olarak gönderim yapacaklarını unutmayın.';
$string['unlimitedattempts'] = 'Sınırsız';
$string['unlimitedattemptsallowed'] = 'Sınırsız deneme yapılabilir.';
$string['unlimitedpages'] = 'Sınırsız';
$string['unlocksubmissionforstudent'] = 'Öğrenci gönderimlerini kabul edin: (id={$a->id}, fullname={$a->fullname}).';
$string['unlocksubmissions'] = 'Gönderimlerin kilidini aç';
$string['unsavedchanges'] = 'Kaydedilmemiş değişiklikler';
$string['unsavedchangesquestion'] = 'Notlar veya geribildirim için kaydedilmemiş değişiklikler var. Değişiklikleri kaydetmek ve devam etmek istiyor musunuz?';
$string['updategrade'] = 'Notu yükselt';
$string['updatetable'] = 'Tabloyu kaydet ve güncelle';
$string['upgradenotimplemented'] = 'Eklentiye uygulanamadı ({$a->type} {$a->subtype})';
$string['userassignmentdefaults'] = 'Kullanıcı ödevi varsayılanları';
$string['userextensiondate'] = 'Şu zamana kadar ek süre tanındı : {$a}';
$string['usergrade'] = 'Kullanıcı notu';
$string['useridlistnotcached'] = 'Hangi ödev gönderim için olduklarını belirlemek mümkün olmadığından Not değişiklikleri KAYDEDİLEMEDİ.';
$string['useroverrides'] = 'Kullanıcı geçersiz kılma';
$string['useroverridesdeleted'] = 'Kullanıcı geçersiz kılma işyemleri silindi';
$string['usersnone'] = 'Bu ödeve hiçbir öğrencinin erişimi yoktur.';
$string['usersubmissioncannotberemoved'] = '{$a} gönderimi kaldırılamaz.';
$string['userswhoneedtosubmit'] = 'Ödev göndermesi gereken kullanıcı: {$a}';
$string['validmarkingworkflowstates'] = 'Geçerli değerlendirme iş akışı durumları';
$string['viewadifferentattempt'] = 'Farklı bir denemeyi görüntüle';
$string['viewbatchmarkingallocation'] = 'Değerlendirmeci atama sayfasını göüntüleyin';
$string['viewbatchsetmarkingworkflowstate'] = 'Toplu Değerlerlendiici iş akışı durumu sayfasını görüntüleyin.';
$string['viewfeedback'] = 'Geri bildirimi görüntüle';
$string['viewfeedbackforuser'] = 'Kullanıcıya geri bildirimde bulun: {$a}';
$string['viewfull'] = 'Tümünü görüntüle';
$string['viewfullgradingpage'] = 'Geri bildirim sağlamak için tam puanlama sayfasını açın';
$string['viewgradebook'] = 'Not defterine görüntüle';
$string['viewgrader'] = 'Değerlendiricelir görüntüle';
$string['viewgrading'] = 'Tüm gönderimleri görüntüle';
$string['viewgradingformforstudent'] = 'Öğrenci not verme sayfasını görüntüle: (id={$a->id}, fullname={$a->fullname}).';
$string['viewownsubmissionform'] = 'Kendi ödev gönderme sayfasını görüntüleyin.';
$string['viewownsubmissionstatus'] = 'Kendi ödev gönderme sayfasını görüntüleyin.';
$string['viewrevealidentitiesconfirm'] = 'Öğrenci kimlik doğrulama sayfasını görüntüle.';
$string['viewsubmission'] = 'Ödev gönderimi görüntüle';
$string['viewsubmissionforuser'] = 'Kullanıcı için gönderimi görüntüle: {$a}';
$string['viewsubmissiongradingtable'] = 'Ödev not tablosunu göster.';
$string['viewsummary'] = 'Özeti görüntüle';
$string['workflowfilter'] = 'İş akışı filtresi';
$string['xofy'] = '{$a->x} nın {$a->y}';
