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
 * Strings for component 'simplecertificate', language 'tr', version '4.5'.
 *
 * @package     simplecertificate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['certificatename_help'] = 'Sertifika Adı';
$string['certificatetext_help'] = 'Bu metin sertifikanın arkasında kullanılacaktır, bazı özel kelimeler ders adı, öğrencinin adı, sınıfı gibi değişkenlerle değiştirilecektir...
Bunlar:
<ul>
<li>{USERNAME} -> Tam kullanıcı adı</li>
<li>{COURSENAME} -> Tam kurs adı (veya tanımlı bir alternatif kurs adı)</li>
<li>{GRADE} -> Biçimlendirilmiş Not</li>
<li>{DATE} -> Biçimlendirilmiş Tarih</li>
<li>{OUTCOME} -> Sonuçlar</li>
<li>{TEACHERS} -> Öğretmen Listesi</li>
<li>{IDNUMBER} -> Kullanıcı kimlik numarası</li>
<li>{FIRSTNAME} -> Kullanıcı adı</li>
<li>{LASTNAME} -> Kullanıcının soyadı</li>
<li>{EMAIL} -> Kullanıcı e-postası</li>
<li>{ICQ} -> ICQ Kullanıcısı</li>
<li>{SKYPE} -> Skype Kullanıcısı</li>
<li>{YAHOO} -> Kullanıcı yahoo messenger</li>
<li>{AIM} -> Kullanıcı AIM</li>
<li>{MSN} -> Kullanıcı MSN</li>
<li>{PHONE1} -> Kullanıcı 1° Telefon Numarası</li>
<li>{PHONE2} -> Kullanıcı 2° Telefon Numarası</li>
<li>{INSTITUTION} -> Kullanıcı kurumu</li>
<li>{DEPARTMENT} -> Kullanıcı departmanı</li>
<li>{ADDRESS} -> Kullanıcı adresi</li>
<li>{CITY} -> Kullanıcı şehri</li>
<li>{COUNTRY} -> Kullanıcı ülkesi</li>
<li>{URL} -> Kullanıcı Ana Sayfası</li>
<li>{CERTIFICATECODE} -> Benzersiz sertifika kodu metni</li>
<li>{USERROLENAME} -> Kursta kullanıcı rolü adı</li>
<li>{TIMESTART} -> Kursta Kullanıcı Kaydı başlangıç tarihi</li>
<li>{USERIMAGE} -> Kullanıcı profil resmi</li>
<li>{USERRESULTS} -> Diğer kurs etkinliklerindeki kullanıcı sonuçları (not)</li>
<li>{PROFILE_xxxx} -> Kullanıcı özel profil alanları</li>
</ul>
Özel profil alanlarını kullanmak için "PORFILE_" ön ekini kullanmalısınız, örneğin: "birthday" kısa adıyla özel bir profil oluşturdunuz, dolayısıyla sertifikada kullanılan metin işareti {PROFILE_BIRTHDAY} olmalıdır.
Metin, temel html\'yi, temel yazı tiplerini, tabloları kullanabilir, ancak herhangi bir konum tanımından kaçınır.';
$string['coursename'] = 'Alternatif Kurs Adı';
$string['hours'] = 'saat';
$string['neverdeleteoption'] = 'Asla silme';
$string['signname'] = 'Adı';
