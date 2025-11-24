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
 * Strings for component 'auth_saml', language 'tr', version '4.5'.
 *
 * @package     auth_saml
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_saml_course_mapping_dsn'] = 'Kurs dns';
$string['auth_saml_course_mapping_sql'] = 'Kurt sql';
$string['auth_saml_course_not_found'] = 'Kurs saml {\\$a->course} saml kullanıcısı {\\$a->user}\\n için bulunamadı';
$string['auth_saml_coursemapping'] = 'Kurs Haritalama';
$string['auth_saml_mapping_export'] = 'Bunları bir CSV\'ye aktarın';
$string['auth_saml_moodle_course_id_field_warning'] = 'Herhangi bir kurs eşleştirmesi eklemeden önce, moodle kursunu tanımlamak için hangi kimlik alanının (kurs kısa adı veya sayı kimliği) kullanılacağına karar verin. Karar verdikten sonra formu kaydedin ve ardından Moodle Kurs Kimliği seçiminde kısa ad veya numara kimliği görünecektir. Numberid\'in varsayılan olarak moodle\'da gerekli olmadığını unutmayın, ancak seçtiğiniz seçenek buysa bunu sağlamalısınız (aksi takdirde bu kurs için boş bir seçenek görünecektir). Bazı eşlemeler sağladıktan sonra bir kursu tanımlamak için kullanılan alanın değerini değiştirirseniz, bu eşlemeler yok sayılacaktır (ancak yine de veritabanında saklanacaktır)';
$string['auth_saml_sucess_creating_course_mapping'] = 'Moodle veritabanında oluşturulan Course_mapping tablosu';
$string['auth_saml_sucess_creating_role_mapping'] = 'Moodle veritabanında oluşturulan Course_role tablosu';
