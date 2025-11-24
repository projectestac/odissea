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
 * Strings for component 'payment', language 'tr', version '4.5'.
 *
 * @package     payment
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountarchived'] = 'Arşiv';
$string['accountconfignote'] = 'Bu hesap için ödeme ağ geçitleri ayrıca yapılandırılacaktır';
$string['accountdeleteconfirm'] = 'Bu hesabın daha önce ödemeleri varsa arşivlenecek, aksi takdirde yapılandırma verileri kalıcı olarak silinecektir. Devam etmek istediğinizden emin misiniz?';
$string['accountidnumber'] = 'Kimlik numarası';
$string['accountidnumber_help'] = 'Kimlik numarası yalnızca hesabı harici sistemlerle eşleştirirken kullanılır ve sitenin herhangi bir yerinde görüntülenmez. Hesabın resmi bir kod adı varsa girilebilir, aksi takdirde alan boş bırakılabilir.';
$string['accountname'] = 'Hesap adı';
$string['accountname_help'] = 'Ödemeleri ayarlayan öğretmenler veya yöneticiler için bu hesabın nasıl tanımlanacağı (örneğin kurs kayıt eklentisinde).';
$string['accountnotavailable'] = 'Kullanılamaz';
$string['createaccount'] = 'Ödeme hesabı oluştur';
$string['deleteorarchive'] = 'Sil veya arşivle';
$string['editpaymentaccount'] = 'Ödeme hesabını düzenle';
$string['eventaccountcreated'] = 'Ödeme hesabı oluşturuldu';
$string['eventaccountdeleted'] = 'Ödeme hesabı silindi';
$string['eventaccountupdated'] = 'Ödeme hesabı güncellendi';
$string['feeincludesurcharge'] = '{$a->fee} (bu ödeme türünü kullanmak için %{$a->surcharge} ek ücreti içerir)';
$string['gatewaycannotbeenabled'] = 'Yapılandırma eksik olduğundan ödeme ağ geçidi etkinleştirilemiyor.';
$string['gatewaydisabled'] = 'Devre dışı';
$string['gatewayenabled'] = 'Etkinleştirildi';
$string['gatewaynotfound'] = 'Ağ geçidi bulunamadı';
$string['gotomanageplugins'] = '{$a} aracılığıyla ödeme ağ geçitlerini etkinleştirin ve devre dışı bırakın ve ek ücretleri ayarlayın.';
$string['gotopaymentaccounts'] = '{$a} sayfasında bu ağ geçitlerinden herhangi birini kullanarak birden fazla ödeme hesabı oluşturabilirsiniz.';
$string['hidearchived'] = 'Arşivlenenleri gizle';
$string['noaccountsavilable'] = 'Ödeme hesabı bulunmamaktadır.';
$string['nocurrencysupported'] = 'Herhangi bir para biriminde ödeme desteklenmez.  Lütfen en az bir ödeme ağ geçidinin etkinleştirildiğinden emin olun.';
$string['nogateway'] = 'Kullanılabilecek bir ödeme ağ geçidi yoktur.';
$string['nogatewayselected'] = 'Öncelikle bir ödeme ağ geçidi seçmeniz gerekir.';
$string['paymentaccount'] = 'Ödeme Hesabı';
$string['paymentaccounts'] = 'Ödeme hesapları';
$string['paymentaccountsexplained'] = 'Bu site için bir veya daha fazla ödeme hesabı oluşturun. Her hesap, mevcut ödeme ağ geçitleri için yapılandırma içerir. Sitede ödemeleri yapılandıran kişi (örneğin, kurs kaydı için ödeme) mevcut hesaplar arasından seçim yapabilecektir.';
$string['payments'] = 'Ödemeler';
$string['privacy:metadata:database:payments'] = 'Ödemeler hakkında bilgi.';
$string['privacy:metadata:database:payments:amount'] = 'Ödeme tutarı.';
$string['privacy:metadata:database:payments:currency'] = 'Ödemenin para birimi.';
$string['privacy:metadata:database:payments:gateway'] = 'Ödeme için kullanılan ödeme ağ geçidi.';
$string['privacy:metadata:database:payments:timecreated'] = 'Ödemenin yapıldığı zaman.';
$string['privacy:metadata:database:payments:timemodified'] = 'Ödeme kaydının en son güncellendiği zaman.';
$string['privacy:metadata:database:payments:userid'] = 'Ödemeyi yapan kullanıcı.';
$string['restoreaccount'] = 'Geri Yükleme';
$string['selectpaymenttype'] = 'Ödeme türünü seçin';
$string['showarchived'] = 'Arşivlendi';
$string['supportedcurrencies'] = 'Desteklenen para birimleri';
$string['surcharge'] = 'Ek ücret (yüzde)';
$string['surcharge_desc'] = 'Ek ücret, bu ödeme ağ geçidini kullanarak ödeme yapmayı tercih eden kullanıcılardan alınan ek bir yüzdedir.';
