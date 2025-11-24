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
 * Strings for component 'enrol_paypal', language 'tr', version '4.5'.
 *
 * @package     enrol_paypal
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Rol ata';
$string['businessemail'] = 'Iş e-postası için PayPal';
$string['businessemail_desc'] = 'İşletmenizin PayPal hesabının e-posta adresi';
$string['cost'] = 'Kayıt ücreti';
$string['costerror'] = 'Kayıt ücreti sayısal değil';
$string['costorkey'] = 'Lütfen, aşağıdaki kayıt yöntemlerinden birini seçiniz.';
$string['currency'] = 'Para birimi';
$string['defaultrole'] = 'Varsayılan rol ataması';
$string['defaultrole_desc'] = 'PayPal kayıtları sırasında kullanıcılara atanması gereken rolü seçin';
$string['enrolenddate'] = 'Bitiş tarihi';
$string['enrolenddate_help'] = 'Etkinleştirilirse kullanıcılar yalnızca bu tarihe kadar kaydolabilir.';
$string['enrolenddaterror'] = 'Kayıt bitiş tarihi başlangıç tarihinden önce olamaz';
$string['enrolperiod'] = 'Kayıt süresi';
$string['enrolperiod_desc'] = 'Kaydın geçerli olduğu varsayılan süre. Sıfır olarak ayarlanırsa, kayıt süresi varsayılan olarak sınırsız olacaktır.';
$string['enrolperiod_help'] = 'Kaydın geçerli olduğu süre, kullanıcı kayıtlı olduğu andan itibaren. Devre dışı bırakılırsa, kayıt süresi sınırsız olur.';
$string['enrolstartdate'] = 'Başlangıç tarihi';
$string['enrolstartdate_help'] = 'Etkinleştirilirse kullanıcılar bu tarihten itibaren yalnızca kayıt edilebilir.';
$string['errdisabled'] = 'PayPal kayıt eklentisi devre dışıdır ve ödeme bildirimlerini işlemez.';
$string['erripninvalid'] = 'Anında ödeme bildirimi PayPal tarafından doğrulanmadı.';
$string['errpaypalconnect'] = 'Anında ödeme bildirimini doğrulamak için {$a->url} ile bağlantı kurulamadı: {$a->result}';
$string['expiredaction'] = 'Kayıt son kullanma haraketi';
$string['expiredaction_help'] = 'Kullanıcı kaydı sona erdiğinde gerçekleştirilecek işlemi seçin. Bazı kullanıcı verilerinin ve ayarlarının kurs boyunca derse kaydedilmeyeceğini  lütfen unutmayın.';
$string['mailadmins'] = 'Yöneticiye bildir';
$string['mailstudents'] = 'Öğrencilere bildir';
$string['mailteachers'] = 'Öğretmenlere bildir';
$string['messageprovider:paypal_enrolment'] = 'PayPal kayıt iletileri';
$string['nocost'] = 'Bu kursa kaydolmanın hiçbir maliyeti yoktur!';
$string['paypal:config'] = 'PayPal kayıt örneklerini yapılandırma';
$string['paypal:manage'] = 'Kayıtlı kullanıcıları yönet';
$string['paypal:unenrol'] = 'Kullanıcıları dersten kaydettirme';
$string['paypal:unenrolself'] = 'Kendi kendine dersten kaydettirme';
$string['paypalaccepted'] = 'PayPal ödemeleri kabul edilir';
$string['pluginname'] = 'PayPal';
$string['pluginname_desc'] = 'PayPal modülü, ücretli kurslar kurmanıza izin verir. Herhangi bir kursun maliyeti sıfırsa, öğrencilerin giriş ücretini ödemeleri istenmez. Burada sitenin tamamı için bir varsayılan değer olarak belirlediğiniz site genelinde bir maliyet ve ardından her bir kurs için ayrı ayrı ayarlayabileceğiniz bir kurs ayarı var. Kurs ücreti site maliyetini geçersiz kılar.';
$string['privacy:metadata:enrol_paypal:enrol_paypal'] = 'PayPal kayıtları için PayPal işlemleri hakkında bilgi.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:business'] = 'Ödeme alıcısının (yani satıcının) e-posta adresi veya PayPal hesap kimliği.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:courseid'] = 'Satılan kursun kimliği.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:instanceid'] = 'Kurstaki kayıt örneğinin kimliği.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:item_name'] = 'Kaydının satıldığı kursun tam adı.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:memo'] = 'Alıcı tarafından PayPal web sitesi ödeme notu alanına girilen bir not.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:option_selection1_x'] = 'Alıcının tam adı.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:parent_txn_id'] = 'Geri ödeme, geri alma veya iptal edilmiş geri alma durumunda bu, orijinal işlemin işlem kimliği olacaktır.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_status'] = 'Ödeme durumu.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_type'] = 'Ödemenin bir eCheck (echeck) ile mi yoksa PayPal bakiyesi, kredi kartı veya anında havale (anında) ile mi finanse edildiğini gösterir.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:pending_reason'] = 'Ödeme durumunun beklemede olmasının nedeni (eğer öyleyse).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:reason_code'] = 'Ödeme durumunun Geri Alındı, İade Edildi, İptali_İptal Edildi veya Reddedildi olmasının nedeni (durum bunlardan biriyse).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_email'] = 'Ödeme alıcısının (yani satıcının) birincil e-posta adresi.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_id'] = 'Ödeme alıcısının (ör. satıcı) benzersiz PayPal hesap kimliği.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:tax'] = 'Ödeme sırasında alınan vergi tutarı.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:timeupdated'] = 'Moodle\'ın PayPal tarafından ödeme hakkında bilgilendirilme zamanı.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:txn_id'] = 'Davanın açıldığı, alıcıdan yapılan ödemeye ilişkin tüccarın orijinal işlem kimlik numarası';
$string['privacy:metadata:enrol_paypal:enrol_paypal:userid'] = 'Kurs kaydını satın alan kullanıcının kimliği.';
$string['privacy:metadata:enrol_paypal:paypal_com'] = 'PayPal kayıt eklentisi, kullanıcı verilerini Moodle\'dan PayPal web sitesine iletir.';
$string['privacy:metadata:enrol_paypal:paypal_com:address'] = 'Kursu satın alan kullanıcının adresi.';
$string['privacy:metadata:enrol_paypal:paypal_com:city'] = 'Kursu satın alan kullanıcının şehri.';
$string['privacy:metadata:enrol_paypal:paypal_com:country'] = 'Kursu satın alan kullanıcının ülkesi.';
$string['privacy:metadata:enrol_paypal:paypal_com:custom'] = 'Kullanıcının (alıcının) kimliğini, kursun kimliğini, kayıt örneğinin kimliğini içeren tire ile ayrılmış bir dize.';
$string['privacy:metadata:enrol_paypal:paypal_com:email'] = 'Kursu satın alan kullanıcının e-posta adresi.';
$string['privacy:metadata:enrol_paypal:paypal_com:first_name'] = 'Kursu satın alan kullanıcının adı.';
$string['privacy:metadata:enrol_paypal:paypal_com:last_name'] = 'Kursu satın alan kullanıcının soyadı.';
$string['privacy:metadata:enrol_paypal:paypal_com:os0'] = 'Alıcının tam adı.';
$string['processexpirationstask'] = 'PayPal kaydı, sona erme bildirimi gönderme görevi';
$string['sendpaymentbutton'] = 'Ödemeyi PayPal ile yap';
$string['status'] = 'PayPal kayıtlarına izin ver';
$string['status_desc'] = 'Kullanıcıların varsayılan olarak bir kursa kaydolmak için PayPal\'ı kullanmasına izin verin.';
$string['transactions'] = 'PayPal işlemleri';
$string['unenrolselfconfirm'] = '"{$a}" dersinden kaydınızı silmek istediğinize emin misiniz ?';
