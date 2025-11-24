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
 * Strings for component 'enrol_database', language 'tr', version '4.5'.
 *
 * @package     enrol_database
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['database:config'] = 'Veritabanı kayıt örneklerini yapılandırma';
$string['database:unenrol'] = 'Kayıtları silinen kullanıcıları askıya al';
$string['dbencoding'] = 'Veritabanı kodlama';
$string['dbhost'] = 'Veritabanı sunucusu';
$string['dbhost_desc'] = 'Veritabanı sunucusu IP adresini veya ana makine adını yazın. ODBC kullanılıyorsa, bir sistem DSN adı kullanın.';
$string['dbname'] = 'Veritabanı adı';
$string['dbname_desc'] = 'Veritabanı sunucusunda bir DSN adı kullanılıyorsa boş bırakın.';
$string['dbpass'] = 'Veritabanı parolası';
$string['dbsetupsql'] = 'Veritabanı kurulum komutu';
$string['dbsetupsql_desc'] = 'Özel veritabanı kurulumu için SQL komutu, genellikle iletişim kodlamasını kurmak için kullanılır - MySQL ve PostgreSQL için örnek: <em> SET NAMES \'utf8\' </em>';
$string['dbsybasequoting'] = 'Sybase tırnak işaretini kullan';
$string['dbsybasequoting_desc'] = 'Sybase tarzı tek tırnak işareti atlanır - Oracle, MS SQL ve diğer bazı veritabanları için gereklidir. MySQL için kullanmayın!';
$string['dbtype'] = 'Veritabanı sürücüsü';
$string['dbtype_desc'] = 'ADOdb veritabanı sürücü adı, harici veritabanı motorunun türü.';
$string['dbuser'] = 'Veritabanı kullanıcısı';
$string['debugdb'] = 'ADOdb hata ayıklama';
$string['debugdb_desc'] = 'ADOdb bağlantısını harici veritabanına ayıklayın - giriş sırasında boş sayfa elde etmek için kullanın. Üretim alanları için uygun değil!';
$string['defaultcategory'] = 'Varsayılan yeni kurs kategorisi';
$string['defaultcategory_desc'] = 'Otomatik oluşturulan kurslar için varsayılan kategori. Yeni kategori kimliği belirtilmeyen veya bulunmadığından kullanılır.';
$string['defaultrole'] = 'Varsayılan rol';
$string['defaultrole_desc'] = 'Harici tabloda başka bir rol belirtilmemişse, varsayılan olarak atanacak rol.';
$string['ignorehiddencourses'] = 'Gizli kursları gözardı et';
$string['ignorehiddencourses_desc'] = 'Etkinleştirilirse kullanıcılar, öğrenciler için kullanılamaz şekinde ayarlanan kurslara kaydedilmeyecektir.';
$string['localcategoryfield'] = 'Yerel kategori alanı';
$string['localcoursefield'] = 'Yerel kurs alanı';
$string['localrolefield'] = 'Yerel rol alanı';
$string['localuserfield'] = 'Yerel kullanıcı alanı';
$string['newcoursecategory'] = 'Yeni kurs kategorisi alanı';
$string['newcourseenddate'] = 'Yeni kurs bitiş tarihi alanı';
$string['newcourseenddate_desc'] = 'Yyyy-aa-gg biçiminde bir tarih veya Unix saati belirtin ya da yapılandırılan kurs süresinden hesaplanacak kurs bitiş tarihi için boş bırakın.';
$string['newcoursefullname'] = 'Yeni kurs tam adı alanı';
$string['newcourseidnumber'] = 'Yeni kurs kimlik numarası alanı';
$string['newcourseshortname'] = 'Yeni kurs kısa adı alanı';
$string['newcoursestartdate'] = 'Yeni kurs başlangıç tarihi alanı';
$string['newcoursestartdate_desc'] = 'Yyyy-aa-gg biçiminde bir tarih veya Unix saati belirtin ya da kurs başlangıç tarihinin geçerli tarihe ayarlanması için boş bırakın.';
$string['newcoursetable'] = 'Uzak yeni kurs tablosu';
$string['newcoursetable_desc'] = 'Otomatik olarak oluşturulması gereken kursların listesini içeren tablonun adını belirtin. Boş, kurslar oluşturulmadığı anlamına gelir.';
$string['pluginname'] = 'Harici veritabanı';
$string['pluginname_desc'] = 'Kayıtlarınızı kontrol etmek için (neredeyse her türlü harici bir veritabanı kullanabilirsiniz). Harici veritabanınızın en az bir kurs kimliği içeren bir alan ve bir kullanıcı kimliği içeren bir alan içerdiği kabul edilir. Bunlar yerel kurs ve kullanıcı tablolarında seçtiğiniz alanlarla karşılaştırılır.';
$string['privacy:metadata'] = 'Harici veritabanı kayıt eklentisi herhangi bir kişisel veri depolamaz.';
$string['remotecoursefield'] = 'Uzak kurs alanın adı';
$string['remotecoursefield_desc'] = 'Kurs tablosundaki girdileri eşleştirmek için kullandığımız uzak tablodaki alanın adı.';
$string['remoteenroltable'] = 'Uzak kullanıcı kayıt tablosu';
$string['remoteenroltable_desc'] = 'Kullanıcı kayıtlarının listesini içeren tablonun adını belirtin. Boş, kullanıcı kaydı senkronizasyonu yapılmadığı anlamına gelir.';
$string['remoteotheruserfield'] = 'Uzaktan Diğer Kullanıcı alanı';
$string['remoteotheruserfield_desc'] = '"Diğer Kullanıcı" rol atamalarını işaretlemek için kullandığımız uzak tablodaki alanın adı.';
$string['remoterolefield'] = 'Uzak rol alanının adı.';
$string['remoterolefield_desc'] = 'Roller tablosundaki girdileri eşleştirmek için kullandığımız uzak tablodaki alanın adı.';
$string['remoteuserfield'] = 'Kullanıcı tablosundaki kayıtlarla eşleştirmek için kullandığımız uzak tablodaki alanın adı.';
$string['remoteuserfield_desc'] = 'Kullanıcı tablosundaki girdileri eşleştirmek için kullandığımız uzak tablodaki alanın adı.';
$string['settingsheaderdb'] = 'Harici veritabanı bağlantısı';
$string['settingsheaderlocal'] = 'Yerel alan eşleştirme';
$string['settingsheadernewcourses'] = 'Yeni kursların oluşturulması';
$string['settingsheaderremote'] = 'Uzaktan kayıt senkronizasyonu';
$string['syncenrolmentstask'] = 'Harici veritabanı kayıt görevlerini senkronize etme';
$string['templatecourse'] = 'Yeni kurs şablonu';
$string['templatecourse_desc'] = 'İsteğe bağlı: otomatik oluşturulan kursa ait ayarlar bir şablon kurstan kopyalanabilir. Buraya şablon kursun kısa adını yazın.';
