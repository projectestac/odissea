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
 * Strings for component 'completion', language 'tr', version '4.5'.
 *
 * @package     completion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = 'Not kazanma';
$string['achievingpassinggrade'] = 'Geçer not alma';
$string['activities'] = 'Etkinlikler';
$string['activitiescompleted'] = 'Etkinlik tamamlama';
$string['activitiescompletednote'] = 'Dikkat: Etkinliklerin yukarıdaki listede çıkması için etkinlik tamamlamanın seçilmesi gerekmektedir.';
$string['activitieslabel'] = 'Etkinlikler / kaynaklar';
$string['activityaggregation'] = 'Şart gereksinimi';
$string['activityaggregation_all'] = 'TÜM seçilen etkinlikler tamamlanmalıdır';
$string['activityaggregation_any'] = 'Seçilen etkinliklerden HERHANGİ BİRİ tamamlanmalıdır';
$string['activitycompletion'] = 'Tamamlama koşulları';
$string['activitycompletionupdated'] = 'Değişiklikler kaydedildi';
$string['activitygradenotrequired'] = 'Not gerekli değil';
$string['activitygradetopassnotset'] = 'Bu etkinliğin geçmek için geçerli bir notu yok.  Etkinlik ayarlarının Not bölümünde ayarlanabilir.';
$string['addconditions'] = 'Koşul ekle';
$string['affectedactivities'] = 'Değişiklikler şu  <b>{$a}</b> etkinlik ya da kaynağı etkileyecek;';
$string['aggregationmethod'] = 'Toplama yöntemi';
$string['all'] = 'Tüm';
$string['allconditions'] = 'Öğrenciler aşağıdakilerin hepsini yaptığında etkinlik tamamlanmış olur:';
$string['any'] = 'Herhangi';
$string['approval'] = 'Onay';
$string['areyousureoverridecompletion'] = 'Bu kullanıcı için bu etkinliğin mevcut tamamlanma durumunu geçersiz kılmak ve "{$a}" olarak işaretlemek istediğinizden emin misiniz?';
$string['badautocompletion'] = 'En az bir koşul seçmelisiniz.';
$string['badcompletiongradeitemnumber'] = 'Puan iste seçeneği, {$a} tarafından puanlama etkinleştirilmediği için <b> {$a} </b> için etkinleştirilemez.';
$string['bulkactivitycompletion'] = 'Etkinlik tamamlamayı toptan düzenle';
$string['bulkactivitydetail'] = 'Toptan düzenlemek istediğiniz etkinlikleri seçin.';
$string['bulkcompletiontracking'] = 'Tamamlama izleme';
$string['bulkcompletiontracking_help'] = '<strong>Yok:</strong> Etkinlik tamamlamayı izleme
<strong>Elle:</strong> Öğrenciler etkinlikleri kendileri tamamlandı olarak işaretleyebilir
<strong>Koşul(lar)la:</strong> Koşullar karşılandığında etkinliği tamamlanmış olarak gösterilir';
$string['checkactivity'] = 'Etkinlik/kaynak için onay kutusu: {$a}';
$string['checkall'] = 'Tüm etkinlikleri ve kaynakları işaretleyin veya işaretini kaldırın';
$string['checkallsection'] = 'Aşağıdaki bölümde yer alan tüm etkinlikleri ve kaynakları işaretleyin veya işaretini kaldırın: {$a}';
$string['completeactivity'] = 'Etkinliği tamamla';
$string['completed'] = 'Tamamlandı';
$string['completedunlocked'] = 'Tamamlama seçeneklerinin kilidi açıldı';
$string['completedunlockedtext'] = 'Bu formu kaydettiğinizde, tamamlama verileri silinecek ve mümkün olan yerlerde yeniden hesaplanacaktır. Bundan kaçınmak için kaydetmeden çıkabilirsiniz.';
$string['completedwarning'] = 'Tamamlama seçenekleri kilitlendi';
$string['completedwarningtext'] = 'Bu etkinlik bir veya daha fazla öğrenci için tamamlandı olarak işaretlenmiştir. Bir değişiklik yapmak için ayarların kilidini açıp formu kaydederseniz tamamlama verileri silinecek ve mümkünse yeniden hesaplanacaktır. Manuel tamamlama yeniden hesaplanamaz, bu nedenle bu durumda öğrencinin tekrar yapıldı olarak işaretlemesi gerekecektir.';
$string['completion'] = 'Tamamlama izleme';
$string['completion-alt-auto-enabled'] = 'Sistem koşullara göre bu ögeyi tamamlanmış olarak işaretliyor : {$a}';
$string['completion-alt-auto-fail'] = 'Tamamlandı: {$a} (geçer not almayı başaramadı)';
$string['completion-alt-auto-n'] = 'Tamamlanmadı: {$a}';
$string['completion-alt-auto-n-override'] = 'Tamamlanmadı: {$a->modname} ({$a->overrideuser} tarafından ayarlandı)';
$string['completion-alt-auto-pass'] = 'Tamamlandı: {$a} (geçer not almayı başardı)';
$string['completion-alt-auto-y'] = 'Tamamlandı: {$a}';
$string['completion-alt-auto-y-override'] = 'Tamamlandı: {$a->modname} ({$a->overrideuser} tarafından ayarlandı)';
$string['completion-alt-manual-enabled'] = 'Öğrencileri  {$a} etkinliğini maunel tamamlandı olarak işaretlesin';
$string['completion-alt-manual-n'] = 'Tamamlanmadı: {$a}. Tamamlandı olarak işaretlemek için seçin';
$string['completion-alt-manual-n-override'] = 'Tamamlanmadı: {$a->modname} ({$a->overrideuser} tarafından ayarlandı). Tamamlandı olarak işaretlemek için seçin.';
$string['completion-alt-manual-y'] = '{$a} tamamlandı. Tamamlanmadı olarak işaretlemek için seçin';
$string['completion-alt-manual-y-override'] = '{$a->modname} tamamlandı. ({$a->overrideuser} tarafından bu şekilde ayarlandı). Tamamlanmadı olarak işaretlemek için seçin.';
$string['completion-fail'] = 'Tamamlandı (geçme notu alınamadı)';
$string['completion-n'] = 'Tamamlanmadı';
$string['completion-n-override'] = 'Tamamlanmadı ({$a} tarafından ayarlandı)';
$string['completion-pass'] = 'Tamamlandı (geçme notunu kazandı)';
$string['completion-y'] = 'Tamamlandı';
$string['completion-y-override'] = 'Tamamlandı ({$a} tarafından ayarlandı)';
$string['completion_automatic'] = 'Koşulları ekleyin';
$string['completion_help'] = 'Etkinleştirilirse, etkinliğin tamamlanması belirli koşullara dayalı olarak el ile veya otomatik olarak izlenir. İsterseniz çoklu koşullar ayarlanabilir. Eğer öyleyse, TÜM koşullar karşılandığında etkinlik yalnızca eksiksiz olarak değerlendirilecektir.';
$string['completion_link'] = 'activity/completion';
$string['completion_manual'] = 'Öğrenciler etkinliği yapıldı olarak elle işaretlemelidir';
$string['completion_none'] = 'Hiçbiri';
$string['completionactivitydefault'] = 'Varsayılan etkinliği kullan';
$string['completionanygrade_desc'] = 'Herhangi bir not';
$string['completiondefault'] = 'Geçerli tamamlamayı izieği';
$string['completiondisabled'] = 'Geçersiz kılındı, etkinlik ayarlarında gösterilmez';
$string['completionduration'] = 'Kayıtlanma';
$string['completionenabled'] = 'Etkin, tamamlama ve etkinlik ayarlarıyla kontrol';
$string['completionexpected'] = 'Zaman Çizelgesi\'nde hatırlatıcı ayarla';
$string['completionexpected_help'] = 'Bu, öğrencilerin bu etkinlikde çalışmaları için bir hatırlatıcı ayarlamanıza izin verir. Gösterge Panelindeki Zaman Çizelgesi bloğunda "{$a} eylem gerektiriyor" şeklinde görünecektir.';
$string['completionexpecteddesc'] = 'Tamamlamanın beklendiği tarih {$a}';
$string['completionexpectedfor'] = '{$a->instancename} tamamlanmalı';
$string['completionicons'] = 'Tamamlama onay kutuları';
$string['completionicons_help'] = 'Etkinliğin ne zaman tamamlandığını göstermek için etkinlik adının yanındaki onay işareti kullanılabilir.

Onay kutusu noktalardan oluşan bir kutu olarak görüyorsanız, öğretmenin belirlediği koşullara göre etkinliğii tamamladığınızda otomatik olarak onay işaret belirir.

Onay kutusunu düz bir kenarlı bir kutu olarak  görüyorsanız, etkinliği tamamladığınızı düşündüğünüzde işaretlemek için kutuyu tıklayabilirsiniz. (Karar  değiştirirseniz tekrar tıklamanız onay işareti kaldırır.) Onay isteğe bağlıdır ve yalnızca ilerleme rotanız üzerinden izlenebilmenin bir yoludur.';
$string['completionmenuitem'] = 'Tamamlama';
$string['completionnotenabled'] = 'Tamamlama etkin değil';
$string['completionnotenabledforcourse'] = 'Tamamlama bu kurs için etkin değil';
$string['completionnotenabledforsite'] = 'Tamamlama bu site için etkin değil';
$string['completionondate'] = 'Tarih';
$string['completionondatevalue'] = 'Kursun tamamlandı olarak işaretlenmesi gereken tarih';
$string['completionpassgrade'] = 'Geçme notu zorunlu olsun';
$string['completionpassgrade_desc'] = 'Geçme notu';
$string['completionpassgrade_help'] = 'Etkinleştirilirse, öğrenci geçer not aldığında etkinlik tamamlanmış sayılır.';
$string['completionsettingslocked'] = 'Tamamlama ayarları kilitli';
$string['completionupdated'] = '<b>{$a}</b> etkinliği için tamamlama güncellendi';
$string['completionusegrade'] = 'Not gerekir';
$string['completionusegrade_desc'] = 'Not alma';
$string['completionusegrade_help'] = 'Etkinleştirilirse, öğrenci not aldığında etkinlik tamamlanmış sayılır.  Etkinlik için bir geçme notu ayarlanmışsa, etkinlik tamamlama raporunda başarılı ve başarısız simgeleri görüntülenir.';
$string['completionview'] = 'Görüntülemesi gerekir';
$string['completionview_desc'] = 'Etkinliği görüntüleme';
$string['configcompletiondefault'] = 'Yeni etkinlikler oluşturulurken tamamlama izleme için varsayılan ayar';
$string['configenablecompletion'] = 'Etkinleştirilirse kurs ve etkinlik tamamlama koşulları ayarlanabilir. Kullanıcıların Gösterge Panelindeki kurs genel görünümlerinde anlamlı veriler görüntülenmesi için etkinlik tamamlama koşullarının ayarlanması önerilir.';
$string['confirmselfcompletion'] = 'Kendi kendine tamamlamak için onayla';
$string['courseaggregation'] = 'Şart gereksinimi';
$string['courseaggregation_all'] = 'Seçilen tüm kursları tamamlanmalıdır';
$string['courseaggregation_any'] = 'Seçilen kurslardan HERHANGİ BİRİ tamamlanmalıdır';
$string['coursealreadycompleted'] = 'Bu kursu zaten tamamladınız';
$string['coursecomplete'] = 'Kurs tamamlama';
$string['coursecompleted'] = 'Kurs tamamlandı';
$string['coursecompletedmessage'] = '<p>Tebrikler!</p><p><a href="{$a->courselink}">{$a->coursename}</a> kursunu tamamladınız.</p>';
$string['coursecompletion'] = 'Kurs tamamlama';
$string['coursecompletioncondition'] = 'Koşul : {$a}';
$string['coursecompletionnavigation'] = 'Kurs tamamlama üçüncül navigasyon';
$string['coursecompletionsettings'] = 'Kurs tamamlama ayarları';
$string['coursegrade'] = 'Kurs notu';
$string['coursesavailable'] = 'Mevcut Kurslar';
$string['coursesavailableexplaination'] = 'Not : Kurs tamamlama şartları kurs sayfasındaki liste altında görünecek şekilde ayarlanmalıdır.';
$string['criteria'] = 'Ölçüt';
$string['criteriagroup'] = 'Ölçüt Grubu';
$string['criteriarequiredall'] = 'Aşağıdaki ölçütlerin tümü gereklidir';
$string['criteriarequiredany'] = 'Aşağıdaki herhangi bir kriter gereklidir';
$string['criteriasummary'] = '{$a->type}: {$a->summary}';
$string['csvdownload'] = 'Hesap tablosu (excel) formatında indir (UTF-8 .csv)';
$string['datepassed'] = 'Süre geçti';
$string['days'] = 'Gün';
$string['daysoftotal'] = '{$a->days} / {$a->total}';
$string['daystakingcourse'] = 'Kursa alınan günler';
$string['daysuntilcompletion'] = 'Tamamlanana kadar geçecek süre';
$string['defaultactivitycompletioncourse'] = 'Bunlar, bu kurstaki etkinlikler için varsayılan tamamlanma koşullarıdır.';
$string['defaultactivitycompletionsite'] = 'Bunlar, tüm kurslardaki etkinlikler için varsayılan tamamlanma koşullarıdır.';
$string['defaultcompletion'] = 'Varsayılan etkinlik tamamlama';
$string['defaultcompletionupdated'] = 'Değişiklikler kaydedildi';
$string['deletecompletiondata'] = 'Tamamlama verisi';
$string['dependencies'] = 'Bağımlılıklar';
$string['dependenciescompleted'] = 'Diğer kursların tamamlanması';
$string['detail_desc:receivegrade'] = 'Not kazanma';
$string['detail_desc:receivepassgrade'] = 'Geçme notu kazanma';
$string['detail_desc:view'] = 'Görüntüleme';
$string['done'] = 'Yapıldı';
$string['editconditions'] = 'Koşulları düzenle';
$string['editcoursecompletionsettings'] = 'Kurs tamamlama ayarlarını düzenle';
$string['emptyconditionsinfo'] = 'Bu etkinlik için belirlenmiş herhangi bir tamamlanma koşulu bulunmamaktadır.';
$string['emptyconditionswarning'] = 'En az bir tamamlanma koşulu eklemelisiniz.';
$string['enablecompletion'] = 'Tamamlama izlemeyi etkinleştir';
$string['enablecompletion_help'] = 'Etkinleştirilmişse, etkinlik tamamlama veya kurs tamamlama koşullarını ayarlayabilirsiniz.';
$string['enrolmentduration'] = 'Kaydolma süresi';
$string['enrolmentdurationlength'] = 'Kullanıcının kayıtlı kalma süresi';
$string['err_noactivities'] = 'Tamamlama bilgisi hiçbir etkinlik için etkin değildir, bu yüzden hiç bir şey gösterilmiyor. Etkinlik ayarlarını düzenleyerek tamamlama bilgisini etkinleştirebilirsiniz.';
$string['err_nocourses'] = 'Kurs tamamlama diğer kurslar için etkin değildir. Bu yüzden hiçbiri görüntülenemez. Kurs tamamlamayı kurs ayarlarından etkinleştirebilirsiniz.';
$string['err_nograde'] = 'Bu kurs için geçme notu ayarlanmamış. Bu ölçütü aktif hale getirmek için bu kursa ait geçme notunu ayarlayın.';
$string['err_noroles'] = 'Bu kursda moodle / course: markcomplete yeteneği ile herhangi bir rol yoktur.';
$string['err_nousers'] = 'Bu kursda ya da grupta tamamlama bilgisinin görüntülendiği hiçbir öğrenci yok. (Tamamlama bilgileri yalnızca \'Tamamlama raporlarında gösterilsin\' özelliğine sahip kullanıcılar için görüntülenir. Bu özelliğe yalnızca varsayılan öğrenci rolü için izin verilir, bu nedenle öğrenci yoksa bu mesajı görürsünüz).';
$string['err_settingslocked'] = 'Bir ya da daha çok öğrenci hali hazırda bir kriteri tamamladı. Bu yüzden ayarlar kilitlendi. Tamamlama kriteri ayarlarının kilidini açmak var olan kullanıcı tamamlama verilerini siler ve karışıklığa neden olabilir.';
$string['err_system'] = 'Tamamlama sisteminde bir iç hata oluştu. (Sistem yöneticileri daha fazla ayrıntı görebilmek için hata ayıklama bilgisini etkinleştirebilir.)';
$string['eventcoursecompleted'] = 'Kurs tamamlandı';
$string['eventcoursecompletionupdated'] = 'Kurs tamamlama yenilendi';
$string['eventcoursemodulecompletionupdated'] = 'Kurs etkinlik tamamlama yenilendi';
$string['eventdefaultcompletionupdated'] = 'Kurs etkinliği tamamlama varsayılan değerleri güncellendi';
$string['excelcsvdownload'] = 'Excel-uyumlu formatta indir (.csv)';
$string['failed'] = 'Yapılmadı';
$string['fraction'] = 'Kesir';
$string['graderequired'] = 'Gerekli kurs notu';
$string['gradexrequired'] = '{$a} gerekli';
$string['hiddenrules'] = '<b>{$a}</b> için özel bazı ayarlar gizlendi. Görmek için diğer etkinlikler üzerindeki seçimi kaldırın';
$string['incompatibleplugin'] = 'Bu faaliyet varsayılan tamamlama ayarlarını desteklemez. Tamamlama koşulları her kullanım için elle ayarlanmalıdır.';
$string['inprogress'] = 'Devam ediyor';
$string['manual'] = 'Elle';
$string['manualcompletionby'] = 'Diğerlerinin elle tamamlaması';
$string['manualcompletionbynote'] = 'Not: Bir rolü listede görünmesi için moodle / course: markcomplete yeteneğine izin verilmelidir.';
$string['manualselfcompletion'] = 'Kendi kendine elle tamamlama';
$string['manualselfcompletionnote'] = 'Not: Elle kendi kendine tamamlama etkinleştirilirse, kendi kendine tamamlama bloğu kursa eklenmelidir.';
$string['markcomplete'] = 'Tamamlanmış olarak işaretle';
$string['markedcompleteby'] = '{$a} tarafından tamamlandı olarak işaretlendi';
$string['markingyourselfcomplete'] = 'Kendini tamamlamış olarak işaretle';
$string['modifybulkactions'] = 'Topluca düzenlemek istediğiniz eylemleri değiştirin';
$string['moredetails'] = 'Daha fazla ayrıntı';
$string['nocriteriaset'] = 'Bu kurs için hiç bir tamamlama ölçütü ayarlanmamış';
$string['nogradeitem'] = '<b>{$a}</b> için not almayı gerektir koşulu devreye sokulamıyor çünkü etkinliğe not verilmiyor.';
$string['notcompleted'] = 'Tamamlanmadı';
$string['notenroled'] = 'Bu kursa kayıtlı değilsiniz';
$string['nottracked'] = 'Bu kursta henüz tamamlamış olarak kaydedilmediniz';
$string['notyetstarted'] = 'Henüz başlamadı';
$string['overallaggregation'] = 'Tamamlama Gereklilikleri';
$string['overallaggregation_all'] = 'Kurs tüm koşullar karşılandığında tamamlanır';
$string['overallaggregation_any'] = 'Kurs koşullardan herhangi biri karşılandığında tamamlanır';
$string['pending'] = 'Bekliyor';
$string['periodpostenrolment'] = 'Kayıt sonrası dönem';
$string['privacy:metadata:completionstate'] = 'Etkinlik tamamlanmışssa';
$string['privacy:metadata:course'] = 'Kurs tanımlayıcı';
$string['privacy:metadata:coursecompletedsummary'] = 'Bir kursta ölçütleri tamamlayan kullanıcılar hakkında bilgi saklar';
$string['privacy:metadata:coursemoduleid'] = 'Etkinlik kimliği';
$string['privacy:metadata:coursemodulesummary'] = 'Bir kullanıcı için etkinlik tamamlama verilerini saklar';
$string['privacy:metadata:coursesummary'] = 'Bir kullanıcı için kurs tamamlama verilerini saklar.';
$string['privacy:metadata:gradefinal'] = 'Kurs tamamlama için alınan nihai not';
$string['privacy:metadata:overrideby'] = 'Etkinlik tamamlamayı geçersiz kılan kişinin kullanıcı kimliği';
$string['privacy:metadata:reaggregate'] = 'Kurs tamamlama yeniden toplandıysa (icmali alındıysa).';
$string['privacy:metadata:timecompleted'] = 'Kursun tamamlanma zamanı';
$string['privacy:metadata:timecreated'] = 'Etkinlik tamamlamanın oluşturulduğu zaman';
$string['privacy:metadata:timeenrolled'] = 'Kullanıcının kursa kayıtlı olduğu zaman';
$string['privacy:metadata:timemodified'] = 'Etkinlik tamamlama işleminin değiştirildiği zaman';
$string['privacy:metadata:timestarted'] = 'Kursun başlama zamanı';
$string['privacy:metadata:unenroled'] = 'Kullanıcı kurstan kaydını sildirmişse';
$string['privacy:metadata:userid'] = 'Kurs ve etkinlik tamamlama verilerini sahip olan kişinin kullanıcı kimliği';
$string['privacy:metadata:viewed'] = 'Etkinlik görüntülendiyse';
$string['progress'] = 'Öğrenci ilerlemesi';
$string['progress-title'] = '{$a->user}, {$a->activity}: {$a->state} {$a->date}';
$string['progresstotal'] = 'İlerleme: {$a->complete} / {$a->total}';
$string['recognitionofpriorlearning'] = 'Önceki öğrenmenin tanınması';
$string['remainingenroledfortime'] = 'Kalan miktar belirli bir süre için kayıt yaptırdı';
$string['remainingenroleduntildate'] = 'Belli bir tarihe kadar kalan kayıtlar';
$string['reportpage'] = '{$a->total} kullanıcıdan {$a->from}-{$a->to} arası gösteriyor.';
$string['requiredcriteria'] = 'Gerekli Ölçüt';
$string['resetactivities'] = 'Seçili etkinlik ve kaynakların tamamını kaldır';
$string['restoringcompletiondata'] = 'Tamamlama verileri yazılıyor';
$string['roleaggregation'] = 'Şart gereksinimi';
$string['roleaggregation_all'] = 'Seçilen TÜM roller için koşul seçildiğinde tamamlandı olarak işaretlensin';
$string['roleaggregation_any'] = 'Seçilen HERHANGİ BİR rol için koşul yerine getirildiğinde tamamlandı olarak işaretlensin';
$string['roleidnotfound'] = 'Rol Kimliği {$a} bulunamadı';
$string['saved'] = 'Kaydedildi';
$string['seedetails'] = 'Detaylara bakın';
$string['select'] = 'Seç';
$string['self'] = 'Kendi';
$string['selfcompletion'] = 'Kendi kendine tamamlama';
$string['showcompletionconditions'] = 'Etkinlik tamamlama koşullarını göster';
$string['showcompletionconditions_help'] = 'Kurs sayfasında etkinlik tamamlama koşullarını gösterin.';
$string['showinguser'] = 'Gösterilen kullanıcı';
$string['studentsmust'] = 'Öğrenciler şunları yapmalıdır';
$string['timecompleted'] = 'Tamamlanan süre';
$string['todo'] = 'Yapılacak';
$string['unenrolingfromcourse'] = 'Kursdan kayıt sildirme';
$string['unenrolment'] = 'Kayıt sildirme';
$string['unit'] = 'birim';
$string['unlockcompletion'] = 'Tamamlama ayarlarının kilidini aç';
$string['unlockcompletiondelete'] = 'Tamamlama ayarlarının kilidini açın ve kullanıcı tamamlama verilerini silin';
$string['updateactivities'] = 'Seçili etkinliklerin tamamlanma durumunu güncelle';
$string['usealternateselector'] = 'Alternatif kurs seçiciyi kullanın';
$string['usernotenroled'] = 'Kullanıcı bu kursa kayıtlı değil';
$string['viewcoursereport'] = 'Kurs raporunu görüntüle';
$string['viewingactivity'] = '{$a} görüntüleniyor';
$string['withconditions'] = 'Koşullarla';
$string['writingcompletiondata'] = 'Tamamlama verileri yazılıyor';
$string['xdays'] = '{$a} gün';
$string['youmust'] = 'Yapmalısın';
