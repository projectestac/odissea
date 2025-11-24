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
 * Strings for component 'enrol_flatfile', language 'tr', version '4.5'.
 *
 * @package     enrol_flatfile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['encoding'] = 'Dosya şifrelemesi';
$string['expiredaction'] = 'Kayıt son kullanma hareketi';
$string['expiredaction_help'] = 'Kullanıcı kaydı sona erdiğinde gerçekleştirilecek işlemi seçin. Bazı kullanıcı verilerinin ve ayarlarının ders elden çıkarma sırasında elden çıkarıldığını lütfen unutmayın.';
$string['filelockedmail'] = 'Ders kaydı için kullandığınız dosya ({$a}) cron uygulaması tarafından silinemedi. Bu, dosyada yanlış izinlerin kullanılması anlamına gelmektedir. Moodle\'nin bu dosyayı silebilmesi için izinleri değiştirin yoksa bu işlem sürekli tekrar edecektir.';
$string['filelockedmailsubject'] = 'Önemli hata: Kayıt dosyası';
$string['flatfile:manage'] = 'Kullanıcı kayıtlarını el ile yönetin';
$string['flatfile:unenrol'] = 'Kullanıcıları dersten el ile kaydettirin';
$string['flatfileenrolments'] = 'Düz dosya (CSV) kayıtları';
$string['flatfilesync'] = 'Düz dosya kaydı senkronize etme';
$string['location'] = 'Dosya yeri';
$string['location_desc'] = 'Kayıt dosyası için tam yolu belirtin. Dosya, işlemden sonra otomatik olarak silinir.';
$string['mapping'] = 'Düz dosya rolü eşlemesi';
$string['messageprovider:flatfile_enrolment'] = 'Düz dosya kayıt mesajları';
$string['notifyadmin'] = 'Yöneticiye bildir';
$string['notifyenrolled'] = 'Kayıtlı kullanıcılara bildirin';
$string['notifyenroller'] = 'Kayıtlardan sorumlu kişiyi bilgilendirin';
$string['pluginname'] = 'Düz dosya (CSV)';
$string['pluginname_desc'] = 'Bu yöntem, belirttiğiniz yerde özel olarak biçimlendirilmiş bir metin dosyasını tekrar tekrar kontrol eder ve işler.
Dosya satır başına dört veya altı alan olduğu varsayılarak virgülle ayrılmış bir dosyadır:
Işlem, rol, kurs kullanıcı kimliği numarası  [, starttime [, endtime]]

Nerede:

* operation - add | del
* role - student | teacher | teacheredit
* user idnumber - idnumber in the user table NB not id
* course idnumber - idnumber in the course table NB not id
* starttime - start time (in seconds since epoch) - optional
* endtime - end time (in seconds since epoch) - optional

 Şöyle bir şey olabilir:   
<pre class="informationbox">
   add, student, 5, CF101
   add, teacher, 6, CF101
   add, teacheredit, 7, CF101
   del, student, 8, CF101
   del, student, 17, CF101
   add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['privacy:metadata:enrol_flatfile'] = 'Düz dosya (CSV) kayıt eklentisi, enrol_flatfile tablosunda gelecekteki kayıtlarla ilgili kişisel verileri saklayabilir.';
$string['privacy:metadata:enrol_flatfile:action'] = 'Verilen tarihte beklenen kayıt işlemi';
$string['privacy:metadata:enrol_flatfile:courseid'] = 'Kaydın ilgili olduğu kurs kimliği';
$string['privacy:metadata:enrol_flatfile:roleid'] = 'Atanacak veya atanmayacak rolün kimliği';
$string['privacy:metadata:enrol_flatfile:timeend'] = 'Kaydın bittiği saat';
$string['privacy:metadata:enrol_flatfile:timemodified'] = 'Kaydın değiştirildiği saat';
$string['privacy:metadata:enrol_flatfile:timestart'] = 'Kaydın başladığı saat';
$string['privacy:metadata:enrol_flatfile:userid'] = 'Rol atamasının ilgili olduğu kullanıcının kimliği';
