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
 * Strings for component 'block_supervised', language 'tr', version '4.5'.
 *
 * @package     block_supervised
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addingnewlessontype'] = 'Yeni ders türü ekle';
$string['addlessontype'] = 'Bir ders türü ekleyin...';
$string['addlessontypenavbar'] = 'Ders türü ekle';
$string['addlessontypepagetitle'] = 'Ders türü ekle';
$string['alllessontypes'] = 'Tüm ders türleri';
$string['cannotdeletelessontype'] = 'Oturumlarda veya kısa sınavlarda kullanıldığı için bu ders türünü silemezsiniz.';
$string['deletelessontypecheck'] = 'Bu ders türünü tamamen silmek istediğinizden emin misiniz?';
$string['editclassroomnavbar'] = 'Sınıfı düzenle';
$string['editclassroompagetitle'] = 'Sınıfı düzenle';
$string['editingclassroom'] = 'Sınıfı düzenle';
$string['editinglessontype'] = 'Ders türünü düzenleme';
$string['editingsession'] = 'Oturum düzenleniyor';
$string['editlessontypenavbar'] = 'Ders türünü düzenle';
$string['editlessontypepagetitle'] = 'Ders türünü düzenle';
$string['editsessionnavbar'] = 'Oturumu düzenle';
$string['emailsessioninfo'] = 'Kurs: {$a->course}
Sınıf: {$a->classroom}
Grup: {$a->group}
Ders türü: {$a->lessontype}
Zaman başlangıcı: {$a->timestart}
Süre (dk ): {$a->duration}
Süre sonu: {$a->timeend}

{$a->comment}';
$string['eventaddlessontype'] = 'Yeni ders türü eklendi';
$string['eventdeletelessontype'] = 'Ders türü silindi';
$string['eventupdatelessontype'] = 'Ders türü güncellendi';
$string['insertlessontypeerror'] = 'Veri tabanı hatası! Veritabanına ders türü eklenemiyor';
$string['invalidlessontypeid'] = 'Geçersiz bir ders türü kimliği kullanmaya çalışıyorsunuz';
$string['lessontype'] = 'Ders Türü';
$string['lessontypesbreadcrumb'] = 'Ders Türleri';
$string['lessontypesdefinition'] = 'Ders türleri tanımı';
$string['lessontypespagetitle'] = 'Ders Türleri';
$string['lessontypesurl'] = 'Ders Türleri';
$string['lessontypesview'] = 'Mevcut dersteki ders türleri';
$string['notifyteacher'] = 'Denetçiyi e-posta ile bilgilendirin';
$string['sessionsdefinition_help'] = 'Ders süpervizörü, grup, ders türü (örn. laboratuvar çalışması, sınav vb.), sınıf ve süreyi belirten oturumlar oluşturur. Bundan sonra öğrenciler aşağıdaki koşullara göre bu dersten quizlere başlayabileceklerdir:

- oturum aktif;

- öğrenci, oturumun oluşturulduğu bir gruptaysa;

- öğrenci oturumun sınıfındadır (denetleyici her sınıf için ip alt ağını belirleyebilir);

- oturum, quiz için belirtilen ders türü için oluşturulmuştur (quiz ayarlarına gidin -> Denemelerde ekstra kısıtlamalar).';
$string['supervised:editlessontypes'] = 'Ders türlerini düzenle';
