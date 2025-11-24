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
 * Strings for component 'attendanceregister', language 'tr', version '4.5'.
 *
 * @package     attendanceregister
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['are_you_sure_to_delete_offline_session'] = 'Bu çevrimdışı Oturumu silmek istediğinizden emin misiniz?';
$string['attendanceregister:addinstance'] = 'Yeni katılım kaydı ekle';
$string['attendanceregister:addotherofflinesess'] = 'Başkalarının Kayıtlarına Çevrimdışı Oturumlar ekleyebilir';
$string['attendanceregister:addownofflinesess'] = 'Kendi Kayıt Defterine Çevrimdışı Oturumlar ekleyebilir';
$string['attendanceregister:deleteotherofflinesess'] = 'Başkalarının Kayıtlarındaki Çevrimdışı Oturumları silebilir';
$string['attendanceregister:deleteownofflinesess'] = 'Çevrimdışı Oturumları kendi Kayıt Defterinden silebilir';
$string['attendanceregister:recalcsessions'] = 'Katılım Kaydının Oturumları yeniden hesaplamalarını zorlayabilir';
$string['attendanceregister:tracked'] = 'Seyirci Kaydı tarafından izlenir';
$string['attendanceregister:viewotherregisters'] = 'Diğer kişilerin Devam Kayıtlarını görüntüleyebilir';
$string['attendanceregister:viewownregister'] = 'Kendi Devam Kayıtlarını görüntüleyebilir';
$string['back_to_normal'] = 'Normal sürüme dön';
$string['back_to_tracked_user_list'] = 'İzlenen Kullanıcılar listesine geri dön';
$string['click_for_detail'] = 'detaylar için tıklayın';
$string['comments'] = 'Yorumlar';
$string['completiondurationgroup'] = 'Toplam izlenen süre';
$string['completiontotalduration'] = 'Zaman gerektir [dakika]';
$string['count'] = '#';
$string['crontask'] = 'Katılımı yeniden hesapla oturumları kaydet';
$string['dayscertificable'] = 'Gün kadar önce';
$string['dayscertificable_exceeded'] = '{$a} günden daha önce olmamalıdır';
$string['dayscertificable_help'] = 'Çevrimdışı oturumların ne kadar eski olabileceğini sınırlar.<br />
    Bir öğrenci, bu günden daha eski bir Çevrimdışı Oturumu kaydedemez.';
$string['duration'] = 'Süre';
$string['enable_offline_sessions_certification'] = 'Çevrimdışı Oturumları Etkinleştir';
$string['end'] = 'Son';
$string['first_calc_at_next_cron_run'] = 'Herhangi bir geçmiş Oturum bir sonraki Cron\'da gösterilecektir';
$string['force_recalc_all_session'] = 'Tüm çevrimiçi Oturumları yeniden hesaplayın
';
$string['force_recalc_all_session_help'] = 'İzlenen tüm Kullanıcıların çevrimiçi Oturumlarını silin ve yeniden hesaplayın.<br />
    Normalde <b>bunu yapmanız gerekmez</b>!<br />
    Yeni Oturumlar arka planda otomatik olarak hesaplanır (biraz gecikmeden sonra).<br />
     Bu işlem <b>sadece</b> faydalı olabilir:
 <ul>
      <li>Daha önce izlenen Kurslardan herhangi birinde farklı bir Rol ile işlem yapmış olan bir Kullanıcının Rolünü değiştirdikten sonra
      (ör. Öğrenci izlendiğinde ve Öğretmen izlenmediğinde).</li>
      <li>Oturum hesaplamasını etkileyen Kayıt ayarlarını değiştirdikten sonra
      (ör. <i>Katılım İzleme Modu</i>, <i>Çevrimiçi Oturum zaman aşımı</i>)< /li>
    </ul>
    <b>Yeni Kullanıcıları kaydederken yeniden hesaplama yapmanız gerekmez</b>!<br /><br />
    Yeniden hesaplama hemen yürütülebilir veya bir sonraki cron tarafından yürütülmek üzere programlanabilir.
    Planlı yürütme, çok kalabalık dersler için daha verimli olabilir.';
$string['force_recalc_all_session_now'] = 'Oturumları Şimdi Yeniden Hesaplayın';
$string['force_recalc_user_session'] = 'Bu Kullanıcının çevrimiçi Oturumlarını yeniden hesaplayın';
$string['force_recalc_user_session_help'] = 'Bu Kullanıcının tüm çevrimiçi Oturumlarını silin ve yeniden hesaplayın.<br />
    Normalde <b>bunu yapmanız gerekmez</b>!<br />
    Yeni Oturumlar arka planda otomatik olarak hesaplanır (biraz gecikmeden sonra).<br / >
    Bu işlem <b>yalnızca</b> yararlı olabilir:
    <ul>
      <li>Kullanıcının Rolünü değiştirdikten sonra, daha önce izlenen herhangi bir Kurs\'ta farklı bir Rol ile
      (ör. Öğrenciye, Öğrenci izlendiğinde ve Öğretmen izlenmediğinde).</li>
      <li>Oturum hesaplamasını etkileyen Kayıt ayarlarını değiştirdikten sonra
      (örn. <i>Katılım İzleme Modu</i>, <i>Çevrimiçi Oturum zaman aşımı</i >></li>
    </ul>';
$string['fullname'] = 'İsim';
$string['grandtotal_time'] = 'Toplam zaman';
$string['insert_new_offline_session'] = 'Yeni bir çevrimdışı çalışma oturumu ekleyin';
$string['insert_new_offline_session_for_another_user'] = '{$a->fullname} için yeni bir çevrimdışı çalışma oturumu ekleyin';
$string['last_calc_online_session_logout'] = 'Son Kayıt çevrimiçi Oturum Sonu (geçerli Oturum hariç)';
$string['last_session_logout'] = 'Son Oturum Sonu';
$string['last_site_access'] = 'Sitedeki son aktivite';
$string['last_site_login'] = 'Siteye son giriş';
$string['login_must_be_before_logout'] = 'Bittikten sonra başlayın!';
$string['logout_is_future'] = 'Gelecekte olmayabilir';
$string['mandatory_offline_sessions_comments'] = 'Zorunlu Yorumlar';
$string['mandatoryofflinespecifycourse'] = 'Zorunlu Kurs seçimi';
$string['mandatoryofflinespecifycourse_help'] = 'Çevrimdışı Oturumlarda Kurs Belirleme zorunlu olacaktır';
$string['modulename_help'] = 'Katılım Kaydı, kullanıcıların çevrimiçi kurslarda çalışarak geçirdikleri zamanı hesaplar. <br />
İsteğe bağlı olarak Kullanıcı kayıtlarına Çevrimdışı Etkinlikler.<br />
Kayıt, Katılım moduna bağlı olarak tek bir kursta, aynı kategorideki tüm kurslarda veya Kayıt sahibinin bulunduğu kursa "Meta bağlantılı" tüm kurslarda etkinlikleri izleyebilir. <br />
Çevrimiçi çalışma oturumları, Moodle.<br /> tarafından kaydedilen günlük girişleri üzerinden hesaplanır
<b> Yeni çevrimiçi oturumlar, Kullanıcı oturumunu kapattıktan sonra Cron tarafından biraz gecikmeyle eklenir.</b>';
$string['never'] = '(asla)';
$string['no_refcourse'] = '(Kurs belirtilmedi)';
$string['offline_refcourse_duration'] = 'Çevrimdışı Süre, Kurs:';
$string['offline_session_comments'] = 'Yorumlar';
$string['offline_session_ref_course'] = 'Ref.Ders';
$string['offline_session_ref_course_help'] = 'Çevrimdışı çalışmanın yapıldığı Kursu veya iş konusunu kapsayan Kursu seçin.';
$string['offline_session_start'] = 'Başlat';
$string['offlinecomments'] = 'Kullanıcı yorumları';
$string['offlinespecifycourse'] = 'Çevrimdışı Oturumlarda Kursu Belirtin';
$string['offlinespecifycourse_help'] = 'Kullanıcının Çevrimdışı Oturumun ilgili olduğu Kursu seçmesine izin verin.<br />
Bu yalnızca Kayıt birden fazla Kursu kaydını içeriyorsa anlamlıdır (yani Katılım Modu "Kategori" veya "Meta-bağlantılı" ise)';
$string['participants_attendance_report_viewed'] = 'Katılımcıların katılım raporu görüntülendi';
$string['ref_course'] = 'Ref.Kurs';
$string['registertype_help'] = 'Yoklama İzleme Modları, Kayıt tarafından izlenen Kursları belirler (yani, kullanıcının etkinliğinin izleneceği):
* _Sadece Bu Kurs_: Yalnızca Katılım Kaydı modülünün olduğu Kursta.
* Aynı Kategorideki Tüm Kurslar_: Etkinlik, modülün bulunduğu Kursun aynı Kategorisindeki tüm Kurslarda izlenecektir.
* _Kurs meta bağlantısı ile bağlı tüm Kurslar_: Bu Kursta ve Kurs meta bağlantısıyla bağlanan tüm Kurslarda etkinlik izlenecektir.';
$string['select_a_course'] = '- Bir Kurs Seç -';
$string['select_a_course_if_any'] = '- Varsa Bir Kurs Seçin -';
$string['sessiontimeout_help'] = 'Oturum Zaman Aşımı, Çevrimiçi Oturum süresini tahmin etmek için kullanılır.<br />
Çevrimiçi Oturumlar, Oturum Zaman Aşımı süresinin en az <b>yarısı</b> olacak.<br />
Oturum Zaman Aşımı çok uzunsa, Kaydının Çevrimiçi Oturumların süresini abartma eğiliminde olduğunu unutmayın.<br />
Çok kısaysa, gerçek Seanslar çok daha kısa Seanslara bölünür.<br />
<h3>Uzun açıklama</h3>
Çevrimiçi çalışma oturumları, Kullanıcının izlenen Kurslardaki Günlük girişlerine bakılarak <b>tahmin edilir</b>
(bkz. <i>İzleme İzleme Modu</i>).<br/>
Ardışık iki Günlük Girişi arasında Oturum Zaman Aşımı\'ndan daha kısa bir zaman aralığı geçerse,
Kayıt, Kullanıcının sürekli olarak çevrimiçi çalıştığını (yani Oturumun devam ettiğini) kabul eder.<br />
Oturum Zaman Aşımı süresinden daha uzun bir zaman aralığı geçerse Kayıt, Kullanıcının çevrimiçi çalışmayı durdurduğunu tahmin eder.
Önceki Günlük Girişinden (yani Oturum sona erdikten) sonra Oturum Zaman Aşımının <b>yarısı</b> ve geri geldi
aşağıdaki Günlük Girişinde tekrar (yani yeni bir Oturum başlar)';
$string['total_time_offline'] = 'Toplam Çevrimdışı Süre';
$string['total_time_online'] = 'Toplam Çevrimiçi Süre';
$string['tracked_courses'] = 'Takip Edilen Kurslar';
$string['tracked_users'] = 'İzlenen Kullanıcılar';
$string['type_category'] = 'Aynı Kategorideki Tüm Kurslar';
$string['type_course'] = 'Sadece bu ders';
$string['type_meta'] = 'Kurs meta bağlantısıyla bağlanan tüm Kurslar';
$string['unknown'] = '(Bilinmeyen)';
$string['unreasoneable_session'] = 'Emin misin? Bu, {$a} saatten fazla sürüyor!';
$string['updating_online_sessions_of'] = '{$a}\'nin çevrimiçi oturumları güncelleniyor';
$string['user_attendance_addoffline'] = 'Kullanıcı bir çevrimdışı katılım girişi ekler';
$string['user_attendance_details_viewed'] = 'Kullanıcı yoklama ayrıntıları görüntülendi';
$string['user_sessions_summary'] = 'Kullanıcı oturumları özeti';
