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
 * Strings for component 'auth_db', language 'tr', version '4.5'.
 *
 * @package     auth_db
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dbcannotconnect'] = 'Harici veri tabanına bağlanılamıyor.';
$string['auth_dbcannotreadtable'] = 'Dış tablo okunamıyor.';
$string['auth_dbcantconnect'] = 'Belirtilen kimlik denetimi veritabanına bağlantı kurulamadı.';
$string['auth_dbchangepasswordurl_key'] = 'Şifre değişim adresi';
$string['auth_dbcolumnlist'] = 'Harici tablo aşağıdaki sütunları içerir: <br/> {$a}';
$string['auth_dbdebugauthdb'] = 'ADOdb hata ayıklama';
$string['auth_dbdebugauthdbhelp'] = 'Dış veritabanına ADOdb hata ayıklama bağlantısı - girişte boş sayfa çıktığında kullanın. Üretim sitelerine uygun değildir.';
$string['auth_dbdeleteuser'] = 'Kullanıcı {$a->name} id {$a->id} silindi';
$string['auth_dbdeleteusererror'] = '{$a} kullanıcısını silerken hata';
$string['auth_dbdescription'] = 'Bu yöntem, sağlanan kullanıcı adı ve şifrenin doğru olup olmadığını kontrol etmek için harici bir veritabanı kullanır. Hesap yeni oluşturulacaksa veritabanındaki alanları eşleştirerek bu bilgilerin Moodle içinde de kullanılmasını sağlayabilirsiniz.';
$string['auth_dbextencoding'] = 'Harici veritabanı kodlaması';
$string['auth_dbextencodinghelp'] = 'Harici veritabanında kullanılan kodlama';
$string['auth_dbextrafields'] = 'Bu alanlar isteğe bağlıdır. Burada belirttiğiniz <b>harici veritabanı alanlarındaki</b> bilgilerden sağlanan kullanıcı alanlarının bazılarının, önceden doldurulmasını sağlayabilirsiniz.<p>Bu alanları boş bırakırsanız, varsayılanlar kullanılacaktır.</p><p>Diğer durumda, kullanıcılar giriş yaptıktan sonra bu alanları değiştirebileceklerdir.</p>';
$string['auth_dbfieldpass'] = 'Şifreyi içeren alan adı';
$string['auth_dbfieldpass_key'] = 'Şifre alanı';
$string['auth_dbfielduser'] = 'Kullanıcı adlarını içeren alanın adı. Bu alan bir varchar veri türü olmalıdır.';
$string['auth_dbfielduser_key'] = 'Kullanıcıadı alanı';
$string['auth_dbhost'] = 'Veritabanı sunucusunu barındıran bilgisayardır. ODBC kullanılıyorsa bir sistem DSN girişi kullanın. PDO kullanılıyorsa bir PDO DSN girişi kullanın.';
$string['auth_dbhost_key'] = 'Host';
$string['auth_dbinsertuser'] = 'Kullanıcı {$a->name} kimliği {$a->id} eklendi';
$string['auth_dbinsertuserduplicate'] = '{$a->username} kullanıcısını ekleme hatası - kullanıcı bu kullanıcı adıyla zaten \'{$a->auth}\' eklentisi aracılığıyla oluşturuldu.';
$string['auth_dbinsertusererror'] = '{$a} kullanıcısını eklerken hata';
$string['auth_dbname'] = 'Veritabanının kendisinin adı. ODBC DSN kullanılıyorsa boş bırakın. PDO DSN\'niz zaten veritabanı adını içeriyorsa boş bırakın.';
$string['auth_dbname_key'] = 'Veri tabanı adı';
$string['auth_dbnoexttable'] = 'Harici tablo belirtilmedi.';
$string['auth_dbnouserfield'] = 'Harici kullanıcı alanı belirtilmedi.';
$string['auth_dbpass'] = 'Yukarıdaki kullanıcıya ait şifre';
$string['auth_dbpass_key'] = 'Şifre';
$string['auth_dbpasstype'] = '<p>Parola alanının kullandığı biçimi belirtin.</p> <p>Harici veritabanının kullanıcı adlarını ve e-posta adreslerini yönetmesini, ancak Moodle\'ın parolaları yönetmesini istiyorsanız \'dahili\' seçeneğini kullanın. \'Dahili\' seçeneğini kullanırsanız, harici veritabanında doldurulmuş bir e-posta adresi alanı sağlamanız ve \\auth_db\\task\\sync_users zamanlanmış görevini etkinleştirmeniz gerekir. Moodle yeni kullanıcılara geçici bir parola içeren bir e-posta gönderecektir.</p>';
$string['auth_dbpasstype_key'] = 'Şifre biçimi';
$string['auth_dbreviveduser'] = '{$a->name} kimliği {$a->id} canlandırıldı';
$string['auth_dbrevivedusererror'] = 'Kullanıcı {$a}\'yı canlandırmada hata';
$string['auth_dbsaltedcrypt'] = 'Crypt tek yönlü dize karması';
$string['auth_dbsetupsql'] = 'SQL ayar komutu';
$string['auth_dbsetupsqlhelp'] = 'Genellikle iletişim kodlaması kurulumu yapmak için kullanılan, özel veritabanı kurulumu için SQL komutu- MySQL ve PostgreSQL\'e örnek: <em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = 'Askıya alınan kullanıcı {$a->name} kimliği {$a->id}';
$string['auth_dbsuspendusererror'] = 'Kullanıcı {$a}\'yı askıya almada hata';
$string['auth_dbsybasequoting'] = 'Sybase tırnaklarını kullan';
$string['auth_dbsybasequotinghelp'] = 'Karakterleri seçmek için sybase tarzı tek tırnak. Oracle, MS SQL ve bazı diğer veritabaları için gerekli. MySQL için kullanmayın!';
$string['auth_dbsyncuserstask'] = 'Kullanıcı görevini senkronize edin';
$string['auth_dbtable'] = 'Veritabanındaki tablo adı';
$string['auth_dbtable_key'] = 'Tablo';
$string['auth_dbtableempty'] = 'Harici tablo boş.';
$string['auth_dbtype'] = 'Veritabanı türü (belgelere bakın <a href="http://adodb.org/dokuwiki/doku.php"target="_blank" >ADOdb - PHP için Veritabanı Soyutlama Katmanı</a> ayrıntılar için).';
$string['auth_dbtype_key'] = 'Veritabanı';
$string['auth_dbupdateerror'] = 'Harici veritabanı güncellenirken hata oluştu.';
$string['auth_dbupdateusers'] = 'Kullanıcıları güncelleyin';
$string['auth_dbupdateusers_description'] = 'Yeni kullanıcılar eklemenin yanı sıra, mevcut kullanıcıları güncelleyin.';
$string['auth_dbupdatinguser'] = 'Kullanıcı {$a->name} kimliği {$a->id} güncelleniyor';
$string['auth_dbuser'] = 'Veritabanı kullanıcısı';
$string['auth_dbuser_key'] = 'VT kullanıcısı';
$string['auth_dbuserstoadd'] = 'Eklenecek kullanıcı girişleri: {$a}';
$string['auth_dbuserstoremove'] = 'Kaldırılacak kullanıcı girişleri: {$a}';
$string['pluginname'] = 'Harici veritabanı';
$string['privacy:metadata'] = 'Harici veritabanı kimlik doğrulama eklentisi herhangi bir kişisel veriyi saklamaz.';
