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
 * Strings for component 'auth_emailadmin', language 'tr', version '4.5'.
 *
 * @package     auth_emailadmin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_emailadminconfirmation'] = 'Bu örnek bir mesajdır.  Yöneticiniz, Moodle\'da oturum açıp Site Yönetimi 》 Dil Özelleştirme\'ye giderek ve auth/auth_emailadmin.php ile ilgili girişleri, özellikle auth_emailadminconfirmation ve auth_emailadminuserconfirmation\'ı değiştirerek özelleştirebilir.

Bu mesajda yönetici, { ve } arasında yer tutucular kullanarak kullanıcı verilerinin eklenmesine ilişkin örnekler bulacaktır.  a-》userdata yer tutucusu tarafından oluşturulan listede olası alanların bir listesini bulacaktır.

Merhaba Moodle Yöneticisi,

 \'{$a->sitename}\' adresinde aşağıdaki verilerle yeni bir hesap talep edildi:

 Özel bir kullanıcı alanı örneği:
 kullanıcı->soyadı: {$a->lastname}

 Tüm özel alanlar:
{$a->customfields}

 Tüm kullanıcı alanları + özel alanlar:
{$a->userdata}

 Yeni hesabı onaylamak için lütfen şu web adresine gidin:

 {$a->link}

 Çoğu posta programında bu, üzerine tıklayabileceğiniz mavi bir bağlantı olarak görünmelidir.  Bu işe yaramazsa, adresi kesip web tarayıcı pencerenizin üst kısmındaki adres satırına yapıştırın.

 Hesapları Moodle içinden de şu adrese giderek onaylayabilirsiniz:
 Site Yönetimi -> Users';
