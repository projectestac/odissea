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
 * Strings for component 'tool_task', language 'tr', version '4.5'.
 *
 * @package     tool_task
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adhoc'] = 'Özel (Amaca uygun)';
$string['adhocempty'] = 'Geçici görev kuyruğu boş';
$string['adhocqueueold'] = 'İşlenmemiş en eski görev {$a->age}\'dir ve {$a->max} değerinden büyüktür.';
$string['adhocqueuesize'] = 'Ad hoc görev kuyruğunda {$a} görev var';
$string['adhoctaskid'] = 'Geçici görev kimliği: {$a}';
$string['adhoctaskrun'] = 'Özel görev çalışması başlatıldı';
$string['adhoctasks'] = 'Geçici görevler';
$string['adhoctasksdue'] = 'Süresi gelen geçici görevler';
$string['adhoctasksfailed'] = 'Geçici görevler başarısız oldu';
$string['adhoctasksfuture'] = 'Gelecekteki geçici görevler';
$string['adhoctasksrunning'] = 'Geçici görevler çalışıyor';
$string['asap'] = '<abbr title = "en kısa zamanda"> ASAP </bbr>';
$string['backtoadhoctasks'] = 'Geçici görevlere geri dön';
$string['backtoscheduledtasks'] = 'Zamanlanmış görevlere geri dön';
$string['blocking'] = 'Engelleme';
$string['cannotfindthepathtothecli'] = 'PHP CLI yürütülebilir dosyasının yolu bulunamadığından görev yürütme durduruldu. Site yönetimi / Sunucu / Sistem yollarında \'PHP CLI\'ye giden yol\' ayarını yapın.';
$string['checkadhocqueue'] = 'Geçici görev kuyruğu';
$string['checkcronrunning'] = 'Cron çalışıyor';
$string['checklongrunningtaskcount'] = 'Uzun süredir devam eden görevler: {$a}';
$string['checklongrunningtasks'] = 'Uzun süreli görevler';
$string['checkmaxfaildelay'] = 'Görevler maksimum başarısızlık gecikmesi';
$string['classname'] = 'Sınıf adı';
$string['clearfaildelay_confirm'] = '\'{$a}\' görevi için başarısızlık gecikmesini temizlemek istediğinizden emin misiniz? Gecikme giderildikten sonra görev normal programına göre çalışacaktır.';
$string['component'] = 'Bileşen';
$string['corecomponent'] = 'Çekirdek';
$string['crondisabled'] = 'Cron devre dışı. Yeni görev başlatılmayacak. Sistem tekrar etkinleştirilene kadar düzgün çalışmayacaktır.';
$string['cronok'] = 'Cron sık çalışıyor';
$string['default'] = 'Varsayılan';
$string['defaultx'] = 'Varsayılan: {$a}';
$string['disabled'] = 'Devre dışı';
$string['disabled_help'] = 'Devre dışı bırakılmış zamanlanmış görevler cron\'dan yürütülmez, ancak yine de CLI aracı ile manuel olarak yürütülebilir.';
$string['edittaskschedule'] = 'Görev zamanlamasını düzenle: {$a}';
$string['enablerunnow'] = 'Zamanlanmış görevler için \'Şimdi çalıştır\'a izin ver';
$string['enablerunnow_desc'] = 'Yöneticilerin, planlandığı gibi çalışmasını beklemek yerine, tek bir zamanlanmış görevi hemen çalıştırmalarına izin verir. Bu özellik, Sistem yollarında \'PHP CLI\'ye Giden Yol\' (pathtophp) ayarlanmasını gerektirir. Görev web sunucusunda çalışır, bu nedenle olası performans sorunlarından kaçınmak için bu özelliği devre dışı bırakmak isteyebilirsiniz.';
$string['faildelay'] = 'Gecikme başarısız';
$string['failed'] = 'Arızalı';
$string['fromcomponent'] = 'Bileşenden: {$a}';
$string['hostname'] = 'ana bilgisayar adı';
$string['lastcronstart'] = 'Son cron çalışmasından bu yana geçen süre: {$a}';
$string['lastruntime'] = 'Son çalıştırma';
$string['lastupdated'] = 'Son güncelleme {$a}.';
$string['nextruntime'] = 'Sonraki çalıştırma';
$string['noclassname'] = 'Sınıf adı belirtilmedi';
$string['notasks'] = 'Çalıştırılacak görev yok';
$string['payload'] = 'Yük';
$string['pid'] = 'PID';
$string['plugindisabled'] = 'Eklenti devre dışı';
$string['pluginname'] = 'Zamanlanmış görev yapılandırması';
$string['privacy:metadata'] = 'Zamanlanmış görev yapılandırma eklentisi herhangi bir kişisel veri saklamaz.';
$string['resettasktodefaults'] = 'Görev zamanlamasını varsayılanlara sıfırlama';
$string['resettasktodefaults_help'] = 'Bu, tüm yerel değişiklikleri atar ve bu görevi zamanlamasının kendi orijinal ayarlarına geri döndürür.';
$string['run_adhoctasks'] = 'Geçici görevleri çalıştır';
$string['runadhoc'] = 'Anlık görevler şimdi çalıştırılsın mı?';
$string['runadhoc_confirm'] = 'Görevler web sunucusunda çalışacak ve tamamlanması biraz zaman alabilir.';
$string['runadhoctask'] = '\'{$a->task}\' görev kimliğini {$a->taskid} çalıştırın';
$string['runadhoctasks'] = 'Tüm \'{$a}\' görevlerini çalıştırın';
$string['runadhoctasksfailed'] = 'Başarısız \'{$a}\' görevlerini çalıştır';
$string['runagain'] = 'Çalıştırmayı tekrar dene';
$string['runclassname'] = 'Tümünü çalıştır';
$string['runclassnamefailedonly'] = 'Tümünü çalıştırma başarısız oldu';
$string['runningalltasks'] = 'Tüm görevleri çalıştırma';
$string['runningfailedtasks'] = 'Başarısız görevleri çalıştır';
$string['runningtasks'] = 'Şu anda çalışan görevler';
$string['runnow'] = 'Şimdi çalıştır';
$string['runnow_confirm'] = 'Bu \'{$a}\' görevini şimdi çalıştırmak istediğinizden emin misiniz? Görev web sunucusunda çalışacak ve tamamlanması biraz zaman alabilir.';
$string['runpattern'] = 'Deseni çalıştır';
$string['scheduled'] = 'zamanlanmış';
$string['scheduledtaskchangesdisabled'] = 'Moodle yapılandırmasında zamanlanmış görevler listesindeki değişiklikler engellendi';
$string['scheduledtasks'] = 'Zamanlanmış görevler';
$string['showall'] = 'Tümünü Göster';
$string['showfailedonly'] = 'Yalnızca başarısız olanı göster';
$string['showsummary'] = 'Anlık görevlerin özetini göster';
$string['slowtask'] = 'Görev {$a} \' dan daha uzun süre çalıştı';
$string['started'] = 'başladı';
$string['taskage'] = 'Çalışma zamanı';
$string['taskdetails'] = 'Görevler {$a->time}\'dan daha uzun süredir çalışıyor (maksimum {$a->maxtime}): {$a->sayı}';
$string['taskdisabled'] = 'Görev devre dışı';
$string['taskfailures'] = '{$a} görev(ler) başarısız';
$string['taskid'] = 'Görev kimliği';
$string['tasklogs'] = 'Görev günlükleri';
$string['tasknofailures'] = 'Başarısız görev yok';
$string['taskrunningtime'] = 'Görev {$a} için çalıştı';
$string['taskscheduleday'] = 'Gün';
$string['taskscheduleday_help'] = 'Görev zamanlaması için ayın günü alanı. Alan, unix cron ile aynı formatı kullanır. Bazı örnekler:

* <strong>*</strong> Her gün
* <strong>*/2</strong> Her 2 günde bir
* <strong>1</strong> Her ayın ilki
* <strong>1, 15</strong> Her ayın biri ve on beşi';
$string['taskscheduledayofweek'] = 'Haftanın günü';
$string['taskscheduledayofweek_help'] = 'Görev zamanlaması için haftanın günü alanı. Alan, unix cron ile aynı formatı kullanır. Bazı örnekler:

* <strong>*</strong> Her gün
* <strong>0</strong> Her Pazar
* <strong>6</strong> Her Cumartesi
* <strong>1,5</strong> Her Pazartesi ve Cuma';
$string['taskschedulehour'] = 'Saat';
$string['taskschedulehour_help'] = 'Görev zamanlaması için saat alanı. Alan, unix cron ile aynı formatı kullanır. Bazı örnekler:

* <strong>*</strong> Saatte bir
* <strong>*/2</strong> 2 saatte bir
* <strong>2-10</strong> Saat 02 :00\'den 10:00\'a kadar (dahil) her saat başı
* <strong>2,6,9</strong> 2am, 6am ve 9am';
$string['taskscheduleminute'] = 'Dakika';
$string['taskscheduleminute_help'] = 'örev zamanlaması için dakika alanı. Alan, unix cron ile aynı formatı kullanır. Bazı örnekler:

* <strong>*</strong> Her dakika
* <strong>*/5</strong> Her 5 dakikada bir
* <strong>2-10</strong> Saati 2 ile 10 arasında her dakika ( dahil)
* <strong>2,6,9</strong> saati 2, 6 ve 9 dakika geçiyor';
$string['taskschedulemonth'] = 'Ay';
$string['taskschedulemonth_help'] = 'Görev zamanlaması için ay alanı. Alan, unix cron ile aynı formatı kullanır. Bazı örnekler:

* <strong>*</strong> Her ay
* <strong>*/2</strong> Her iki ayda bir
* <strong>1</strong> Her Ocak
* <strong>1,5</strong> Her Ocak ve Mayıs';
$string['viewlogs'] = '{$a} için günlükleri görüntüleyin';
