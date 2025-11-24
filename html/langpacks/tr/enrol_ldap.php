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
 * Strings for component 'enrol_ldap', language 'tr', version '4.5'.
 *
 * @package     enrol_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Rol atama \'{$a->role_shortname}\' kullanıcısına \'{$a->user_username}\' kurs \'{$a->course_shortname}\' (id {$a->course_id})';
$string['assignrolefailed'] = '\'{$a->user_username}\' kullanıcısına \'{$a->role_shortname}\' kullanıcısı için (\'{$a->course_shortname}\' rolü atama başarısız oldu (id {{$a->course_id})';
$string['autocreate'] = '<p>Moodle\'da henüz mevcut olmayan bir kursa kayıt varsa kurslar otomatik olarak oluşturulabilir</p><p>Otomatik kurs oluşturmayı kullanıyorsanız, yukarıda belirtilen dört kurs alanında (kimlik numarası, kısa ad, tam ad ve özet) değişiklik yapılmasını önlemek için ilgili rollerden moodle/course:changeidnumber, moodle/course:changeshortname, moodle/course:changefullname ve moodle/course:changesummary özelliklerini kaldırmanız önerilir.</p>';
$string['autocreate_key'] = 'Otomatik oluştur';
$string['autocreation_settings'] = 'Otomatik kurs oluşturma ayarları';
$string['autoupdate_settings'] = 'Otomatik kurs güncelleme ayarları';
$string['autoupdate_settings_desc'] = '<p>\'LDAP kayıtlarını senkronize et\' zamanlanmış görevi çalışırken güncellenecek alanları seçin.</p><p>En az bir alan seçildiğinde bir güncelleme gerçekleşecektir.</p><p';
$string['bind_dn'] = 'Kullanıcıları aramak için yetkili-kullanıcı kullanmak istiyorsanız burada belirtin. Örnek: \'cn=ldapuser,ou=public,o=org\'';
$string['bind_dn_key'] = 'Kullanıcı ayırt edici adını bağla';
$string['bind_pw'] = 'Yetkili kullanıcı için şifre';
$string['bind_pw_key'] = 'Parola';
$string['bind_settings'] = 'Bind ayarları';
$string['cannotcreatecourse'] = 'Kurs oluşturulamıyor: gerekli veriler LDAP kaydından eksik!';
$string['cannotupdatecourse'] = 'Kurs güncellenemiyor: gerekli veriler LDAP kaydından eksik! Kurs kimliği numarası: \'{$a->idnumber}\'';
$string['cannotupdatecourse_duplicateshortname'] = 'Kurs güncellenemiyor: Kısa adı çoğaltın. Kurs numarasını kimlik numarasıyla atlama \'{$a->idnumber}\'...';
$string['category'] = 'Otomatik oluşturulan kurslar için kategori.';
$string['category_key'] = 'Kategori';
$string['contexts'] = 'LDAP bağlamları';
$string['couldnotfinduser'] = '\'{$a}\' kullanıcısını bulamadık, atlayarak';
$string['course_fullname'] = 'İsteğe bağlı: Tam adının alınacağı LDAP alanı';
$string['course_fullname_key'] = 'Tam adı';
$string['course_fullname_updateonsync'] = 'Senkronizasyon betiği sırasında tam adı güncelle';
$string['course_fullname_updateonsync_key'] = 'Tam adı güncelle';
$string['course_idnumber'] = 'LDAP\'taki birincil tanımlayıcıyı belirtin. Genellikle <em>cn</em> veya <em>uid</em>. Otomatik kurs oluşturmayı kullanıyorsanız değeri kilitlemeniz önerilir.';
$string['course_idnumber_key'] = 'Kimlik numarası';
$string['course_search_sub'] = 'Alt içeriklerden grup üyeliklerini ara';
$string['course_search_sub_key'] = 'Alt içeriği ara';
$string['course_settings'] = 'Kurs kaydı ayarları';
$string['course_shortname'] = 'İsteğe bağlı: Kısa adının alınacağı LDAP alanı';
$string['course_shortname_key'] = 'Kısa adı';
$string['course_shortname_updateonsync'] = 'Senkronizasyon komut dosyası sırasında kısa adı güncelle';
$string['course_shortname_updateonsync_key'] = 'Kısa adı güncelle';
$string['course_summary'] = 'İsteğe bağlı: Özetin alınacağı LDAP alanı';
$string['course_summary_key'] = 'Özet';
$string['course_summary_updateonsync'] = 'Senkronizasyon komut dosyası sırasında özeti güncelleme';
$string['course_summary_updateonsync_key'] = 'Özeti güncelle';
$string['coursenotexistskip'] = '\'{$a}\' kursu mevcut değil ve otomatik oluşturma devre dışı, atlanıyor';
$string['courseupdated'] = 'Kimlik numarası \'{$a->idnumber}\' olan kurs başarıyla güncellendi.';
$string['courseupdateskipped'] = 'Ad numarası \'{$a->idnumber}\' olan kurs başarıyla güncellendi. Atlanıyor...';
$string['createcourseextid'] = 'Var olmayan bir kursa kaydolan kullanıcı OLUŞTUR  \' {$a->courseextid}\'';
$string['createnotcourseextid'] = 'Var olmayan bir derse kaydolan kullanıcı  \'{$a->courseextid}\'';
$string['creatingcourse'] = 'Kurs oluşturma \'{$a}\'...';
$string['duplicateshortname'] = 'Kurs oluşturma başarısız oldu. Yinelenen kısa ad. Kimlik numarası \'{$a->idnumber}\' olan kurs atlanıyor...';
$string['editlock'] = 'Değeri kilitle';
$string['emptyenrolment'] = 'Rol için boş kayıt \'{$a->role_shortname}\' derste \'{$a->course_shortname}\'';
$string['enrolname'] = 'LDAP';
$string['enroluser'] = 'Kullanıcı kaydı \'{$a->user_username}\' derse \'{$a->course_shortname}\' (id {$a->course_id})';
$string['enroluserenable'] = 'Kullanıcı için kaydı etkinleştirildi \'{$a->user_username}\' derste \'{$a->course_shortname}\' (id {$a->course_id})';
$string['explodegroupusertypenotsupported'] = 'ldap_explode_group () Seçilen kullanıcı türünü desteklemiyor: {$a}';
$string['extcourseidinvalid'] = 'Kurs harici kimliği geçersiz!';
$string['extremovedsuspend'] = 'Kullanıcı için devre dışı bırakılmış kayıt \'{$a->user_username}\' kursda \'{$a->course_shortname}\' (id {$a->course_id})';
$string['extremovedsuspendnoroles'] = 'Engelli kaydı ve kaldırılacak roller kaldırıldı \'{$a->user_username}\' derste \'{$a->course_shortname}\' (id {$a->course_id})';
$string['extremovedunenrol'] = 'Kullanıcı kaydını kaldır  \'{$a->user_username}\' dersten \'{$a->course_shortname}\' (id {$a->course_id})';
$string['failed'] = 'Başarısız oldu!';
$string['general_options'] = 'Genel Seçenekler';
$string['group_memberofattribute'] = 'Belirli bir kullanıcı veya grubun hangi gruplara ait olduğunu belirten özellik adı (ör. MemberOf, groupMembership, vb.)';
$string['group_memberofattribute_key'] = '\'Üyesi\' özniteliği';
$string['host_url'] = 'LDAP sunucunun adresini belirtin.
Ör: \'ldap://ldap.sirketim.com/\' veya \'ldaps://ldap.sirketim.com/\'';
$string['host_url_key'] = 'Host URL';
$string['idnumber_attribute'] = 'Grup üyeliği ayırıcı adlar içeriyorsa, LDAP kimlik doğrulama ayarlarında kullanıcı \'Kimlik Numarası\' eşlemesi için kullandığınızla aynı niteliği belirtin';
$string['idnumber_attribute_key'] = 'Kimlik numarası özniteliği';
$string['ldap:manage'] = 'LDAP kayıt örneklerini yönetme';
$string['ldap_encoding'] = 'LDAP sunucusu tarafından kullanılan kodlamayı belirleyin. Büyük olasılıkla utf-8, MS AD v2, cp1252, cp1250 vb. Gibi varsayılan platform kodlamayı kullanır.';
$string['ldap_encoding_key'] = 'LDAP şifrleme';
$string['memberattribute'] = 'LDAP üye niteliği';
$string['memberattribute_isdn'] = 'Grup üyeliği seçkin isimler içeriyorsa, burada belirtmeniz gerekir. Varsa, bu bölümün kalan ayarlarını yapılandırmanız gerekir';
$string['memberattribute_isdn_key'] = 'Üye niteliği dn kullanıyor';
$string['nested_groups'] = 'Kayıt için iç içe geçmiş grupları (gruplar grubu) kullanmak istiyor musunuz?';
$string['nested_groups_key'] = 'İç içe geçmiş gruplar';
$string['nested_groups_settings'] = 'İç içe grupların ayarları';
$string['nosuchrole'] = '\'{$a}\' Böyle bir rol yok:';
$string['objectclass'] = 'Kursları aramak için kullanılacak objectClass. Genellikle \'posixGroup\'';
$string['objectclass_key'] = 'Nesne sınıfı';
$string['ok'] = 'Tamam.';
$string['opt_deref'] = 'Grup üyeliği farklı isimler içeriyorsa, arama sırasında takma adların nasıl ele alınacağını belirtin. Aşağıdaki değerlerden birini seçin: \'Hayır\' (LDAP_DEREF_NEVER) veya \'Evet\' (LDAP_DEREF_ALWAYS)';
$string['opt_deref_key'] = 'Takma ad ayrımı';
$string['phpldap_noextension'] = '<em> PHP LDAP modülü mevcut görünmüyor. Bu kayıt eklentisini kullanmak istiyorsanız lütfen yüklü olduğundan ve etkinleştirildiğinden emin olun. </em>';
$string['pluginname'] = 'LDAP kayıtları';
$string['pluginname_desc'] = '<p>Kayıtlarınızı kontrol etmek için bir LDAP sunucusu kullanabilirsiniz. LDAP ağacınızın kurslarla eşleşen gruplar içerdiği ve bu grupların/kursların her birinin öğrencilerle eşleşecek üyelik girişlerine sahip olacağı varsayılmaktadır</p>

<p>Kursların LDAP içinde grup olarak tanımlandığını ve her bir grubun (yani dersin) çoklu üyelik alanlarının olduğunu - ki bu alanların kullanıcıyı tanımlamak için tekil olması gerekir (<em>member</em> veya <em>memberUid</em> gibi) - varsayıyoruz.</p>

<p>LDAP kayıt yöntemini kullanabilmeniz için kullanıcılarınızın geçerli bir idnumber alanı <strong>olmalı</strong>. Bir kullanıcı kursa kaydolduğunda LDAP grupları bu idnumber alanını içermeli. Zaten LDAP yetkilendirmesini kullanıyorsanız genellikle bu iyi çalışır.</p>

<p>Kurs kayıtları kullanıcı giriş yaptığında güncellenir ve ayrıca kayıtların senkronize olması için bir betik de çalıştırabilirsiniz.
Buraya bakınız: <em>enrol/ldap/enrol_ldap_sync.php</em>.</p>

<p>Bu eklenti, LDAP içinde görünen yeni gruplardan otomatik olarak yeni kurslar da oluşturabilir.</p>';
$string['pluginnotenabled'] = 'Eklenti etkin değil!';
$string['privacy:metadata'] = 'LDAP kayıt eklentisi herhangi bir kişisel veri depolamaz.';
$string['role_mapping'] = '<p> LDAP\'den atamak istediğiniz her rol için, rol kurslarının gruplarının bulunduğu bağlamların listesini belirtmeniz gerekir. Farklı bağlamları \';\' ile ayırın. </p> <p> LDAP sunucunuzun bir grubun üyelerini tutmak için kullandığı öznitelik de belirtmeniz gerekir. Genellikle \'member\' veya \'memberUid\' </p>';
$string['role_mapping_attribute'] = '{$a} İçin LDAP üye özniteliği';
$string['role_mapping_context'] = '{$a} için LDAP bağlamları';
$string['role_mapping_key'] = 'LDAP\'lerden rolleri haritala';
$string['roles'] = 'Rol eşleştirmesi';
$string['server_settings'] = 'LDAP sunucu ayarları';
$string['synccourserole'] = '== Kurs senkronize etme \'{$a->idnumber}\' rolü için \'{$a->role_shortname}\'';
$string['syncenrolmentstask'] = 'LDAP kayıtları görevini senkronize et';
$string['template'] = 'İsteğe bağlı: Otomatik oluşturulan kurslar, bir kurs şemasından ayarlarını kopyalayabilir. Şablon kursun kısa adını giriniz.';
$string['template_key'] = 'Şablon';
$string['unassignrole'] = 'Rol atama \'{$a->role_shortname}\' kullanıcıya \'{$a->user_username}\' dersten \'{$a->course_shortname}\' (id {$a->course_id})';
$string['unassignrolefailed'] = 'Rol atama başarısız oldu  \'{$a->role_shortname}\' kullanıcıya \'{$a->user_username}\' dersten \'{$a->course_shortname}\' (id {$a->course_id})';
$string['unassignroleid'] = 'Rol kimliği atanamadı  \'{$a->role_id}\' kullanıcı kimliğine \'{$a->user_id}\'';
$string['updatelocal'] = 'Yerel veriyi güncelle';
$string['user_attribute'] = 'Grup üyeliği farklı isimler içeriyorsa, kullanıcıları adlandırmak / araştırmak için kullanılan nitelik belirtin. LDAP kimlik doğrulaması kullanıyorsanız, bu değer LDAP kimlik doğrulama eklentisindeki \'Kimlik Numarası\' eşlemesinde belirtilen öznitelikle eşleşmelidir.';
$string['user_attribute_key'] = 'Kimlik numarası özniteliği';
$string['user_contexts'] = 'Grup üyeliği seçkin adlar içeriyorsa, kullanıcıların bulunduğu bağlamların listesini belirtin. Farklı bağlamları \';\' ile ayırın. Örneğin: \'ou = kullanıcılar, o = org; Ou = diğerleri, o = org \'';
$string['user_contexts_key'] = 'Bağlamlar';
$string['user_search_sub'] = 'Grup üyeliği seçkin isimler içeriyorsa, kullanıcılar için arama işleminin alt metinlerde mi yapıldığını belirtin';
$string['user_search_sub_key'] = 'Alt içerikeri ara';
$string['user_settings'] = 'Kullanıcı arama ayarları';
$string['user_type'] = 'Grup üyeliği seçkin isimler içeriyorsa, kullanıcıların LDAP\'de nasıl saklanacağını belirtin';
$string['user_type_key'] = 'Kullanıcı türü';
$string['version'] = 'Sunucunun kullandığı protokol sürümü';
$string['version_key'] = 'Sürüm';
