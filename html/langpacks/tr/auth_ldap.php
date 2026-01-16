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
 * Strings for component 'auth_ldap', language 'tr', version '4.5'.
 *
 * @package     auth_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_ldap_ad_create_req'] = 'Active Directory\'de yeni hesap oluşturulamıyor. Bunun çalışması için tüm gerekenleri yerine getirdiğinizden emin olun (LDAPS bağlantısı, kullanıcıyı uygun haklarla ağlama vs.)';
$string['auth_ldap_attrcreators'] = 'Üyeleri öznitelik oluşturmaya izinli olan gruplar ya da bağlamlar listesi. Çoklu grupları \';\' ile ayırın. Genellikle şu şekilde \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_attrcreators_key'] = 'Öznitelik oluşturanlar';
$string['auth_ldap_auth_user_create_key'] = 'Kullanıcıları dışarıdan oluştur';
$string['auth_ldap_bind_dn'] = 'Kullanıcıları aramak için yetkili-kullanıcı kullanmak istiyorsanız burada belirtin. Örnek: \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_dn_key'] = 'Ayırt edici adı';
$string['auth_ldap_bind_pw'] = 'Yetkili kullanıcı için şifre';
$string['auth_ldap_bind_pw_key'] = 'Şifre';
$string['auth_ldap_bind_settings'] = 'Yetki ayarları';
$string['auth_ldap_changepasswordurl_key'] = 'Şifre değişim URL';
$string['auth_ldap_contexts'] = 'Kullanıcıların konumlandırılacağı bağlam listesi. Farklı bağlamları \';\' ile ayarın. Örnek: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_contexts_key'] = 'Bağlamlar';
$string['auth_ldap_create_context'] = 'E-posta onayı ile kullanıcı oluşturmayı etkinleştirdiyseniz, oluşturulacak kullanıcı bağlamını belirtin. Bu bağlam, güvenlikle ilgili sorunları engellemek için diğer kullanıcılardan farklı olmalıdır. Bu bağlamı, ldap_context değişkenine eklemenize gerek yok; Moodle otomatik olarak bu bağlamdan kullanıcıları arayacaktır.<br /><b>Dikkat!</b> Kullanıcı oluşturmanın çalışması için auth/ldap/lib.php dosyasındaki auth_user_create() işlevini düzeltmek zorundasınız.';
$string['auth_ldap_create_context_key'] = 'Yeni kullanıcılar için bağlam';
$string['auth_ldap_create_error'] = 'LDAP\'ta kullanıcı oluşturmada hata.';
$string['auth_ldap_expiration_desc'] = 'Süresi dolmuş parola denetimini devre dışı bırakmak için \'{$a->no}\' öğesini veya parola geçerlilik süresini doğrudan LDAP sunucusundan okumak için \'{$a->ldapserver}\' öğesini seçin.';
$string['auth_ldap_expiration_key'] = 'Zaman aşımı';
$string['auth_ldap_expiration_warning_desc'] = 'Parola zaman aşımı uyarısı verilmeden önceki gün sayısı.';
$string['auth_ldap_expiration_warning_key'] = 'Zaman aşımı uyarısı';
$string['auth_ldap_expireattr_desc'] = 'İsteğe bağlı: Parolanın zaman aşımını depolayan LDAP özniteliğini geçersiz kılar.';
$string['auth_ldap_expireattr_key'] = 'Zaman aşımı özniteliği';
$string['auth_ldap_graceattr_desc'] = 'İsteğe bağlı: Yetkisiz oturum açma özelliğini geçersiz kılar';
$string['auth_ldap_gracelogin_key'] = 'Oturum açma özel izin özniteliği';
$string['auth_ldap_gracelogins_desc'] = 'LDAP yetkisiz oturum açma desteğini etkinleştirin. Parolanın süresi dolduktan sonra kullanıcı, yetkisiz oturum açma sayısı 0 olana kadar oturum açabilir. Bu ayarın etkinleştirilmesi, parolanın süresi dolmuşsa yetkisiz oturum açma mesajını görüntüler.';
$string['auth_ldap_gracelogins_key'] = 'Özel izinle oturum açmalar';
$string['auth_ldap_groupecreators'] = 'Üyeleri grup oluşturmaya izinli grup ve bağlamların listesi. Çoklu grupları \';\' ile ayırın. Genellikle \'cn=teachers,ou=staff,o=myorg\' gibi.';
$string['auth_ldap_groupecreators_key'] = 'Grup oluşturucular';
$string['auth_ldap_host_url'] = 'LDAP ana bilgisayarını \'ldap://ldap.myorg.com/\' veya \'ldaps://ldap.myorg.com/\' gibi URL biçiminde belirtin. Birden çok sunucuyu \';\' ile ayırın yük devretme desteği almak için.';
$string['auth_ldap_host_url_key'] = 'Host URL';
$string['auth_ldap_ldap_encoding'] = 'LDAP sunucusu tarafından kullanılan kodlama, büyük olasılıkla utf-8. LDAP v2 seçilirse, Active Directory cp1252 veya cp1250 gibi kendi yapılandırılmış kodlamasını kullanır.';
$string['auth_ldap_ldap_encoding_key'] = 'LDAP kodlaması';
$string['auth_ldap_login_settings'] = 'Giriş ayarları';
$string['auth_ldap_memberattribute'] = 'İsteğe bağlı: Kullanıcı bir gruba üyeyse üye niteliğini geçersiz kılar. Genellikle \'member\'';
$string['auth_ldap_memberattribute_isdn'] = 'Üye öznitelik değerlerinin işlenmesini geçersiz kılar';
$string['auth_ldap_memberattribute_isdn_key'] = 'Üye özniteliği dn kullanır';
$string['auth_ldap_memberattribute_key'] = 'Üye niteliği';
$string['auth_ldap_no_mbstring'] = 'Active Directory\'de kullanıcılar oluşturmak için mbstring uzantısı gerekir.';
$string['auth_ldap_noconnect'] = 'LDAP modülü sunucuya bağlanamadı: {$a}';
$string['auth_ldap_noconnect_all'] = 'LDAP-modülü hiçbir sunucuya bağlanamadı: {$a}';
$string['auth_ldap_noextension'] = 'PHP LDAP modülü mevcut görünmüyor. Bu kimlik doğrulama eklentisini kullanmak istiyorsanız lütfen yüklendiğinden ve etkinleştirildiğinden emin olun.';
$string['auth_ldap_objectclass'] = 'İsteğe bağlı: ldap_user_type üzerinde kullanıcıları adlandırmak/aramak için kullanılan objectClass\'ı geçersiz kılar. Genellikle bunu değiştirmeniz gerekmez.';
$string['auth_ldap_objectclass_key'] = 'Nesne sınıfı';
$string['auth_ldap_opt_deref'] = 'Takma adların arama süresince nasıl ele alınacağını belirler. Aşağıdaki alanlardan birini seçin: Hayır ((LDAP_DEREF_NEVER) veya Evet (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_opt_deref_key'] = 'Takma adları ele alış';
$string['auth_ldap_passtype'] = 'LDAP sunucusundaki yeni ya da değiştirilmiş şifrelerin biçimini belirtin.';
$string['auth_ldap_passtype_key'] = 'Şifre biçimi';
$string['auth_ldap_passwdexpire_settings'] = 'LDAP parolası zaman aşımı ayarları';
$string['auth_ldap_preventpassindb'] = 'Şifrelerin Moodle veritabanı içinde saklanmasını önlemek için Evet\'i seçin.';
$string['auth_ldap_preventpassindb_key'] = 'Parola önbelleğe almayı önleyin';
$string['auth_ldap_rolecontext'] = '{$a->localname} bağlamı';
$string['auth_ldap_rolecontext_help'] = '<i>{$a->localname}</i> eşlemesi için seçim yapmak için kullanılan LDAP bağlamı. Birden çok grubu \';\' ile ayırın. Genellikle "cn={$a->shortname},ou=first-ou-with-role-groups,o=myorg; cn={$a->shortname},ou=second-ou-with gibi bir şey -rol grupları,o=myorg".';
$string['auth_ldap_search_sub'] = 'Kullanıcıları alt bağlamlarda ara';
$string['auth_ldap_search_sub_key'] = 'Alt bağlamları ara';
$string['auth_ldap_server_settings'] = 'LDAP sunucu ayarları';
$string['auth_ldap_suspended_attribute'] = 'İsteğe bağlı: Verildiğinde, bu özellik yerel olarak oluşturulan kullanıcı hesabını etkinleştirmek / askıya almak için kullanılacaktır.';
$string['auth_ldap_suspended_attribute_key'] = 'Askıdaki öznitelik';
$string['auth_ldap_unsupportedusertype'] = 'auth: ldap user_create() seçilen kullanıcı tipini desteklemiyor: {$a}';
$string['auth_ldap_update_userinfo'] = 'LDAP sunucudan gelen kullanıcı bilgilerini (ad, soyad, adres ...) Moodle\'a aktar. "Veri ilişkilendirmesi" ayarlarını da belirtmeniz gerekir.';
$string['auth_ldap_user_attribute'] = 'İsteğe bağlı: Kullanıcı arama için kullanılan ismi geçersiz kılar. Genellikle \'cn\'.';
$string['auth_ldap_user_attribute_key'] = 'Kullanıcı niteliği';
$string['auth_ldap_user_exists'] = 'LDAP kullanıcı adı zaten var.';
$string['auth_ldap_user_settings'] = 'Kullanıcı bulma ayarları';
$string['auth_ldap_user_type'] = 'Kullanıcıların LDAP\'de nasıl saklanacağını seçin. Bu ayar ayrıca oturum açma süresinin dolması, yetkisiz oturum açmalar ve kullanıcı oluşturmanın nasıl çalışacağını belirtir.';
$string['auth_ldap_user_type_key'] = 'Kullanıcı tipi';
$string['auth_ldap_usertypeundefined'] = 'config.user_type tanımlanmamış ya da işlev ldap_expirationtime2unix seçili tipi desteklemiyor!';
$string['auth_ldap_usertypeundefined2'] = 'config.user_type tanımlanmamış ya da işlev ldap_unixi2expirationtime seçili tipi desteklemiyor!';
$string['auth_ldap_version'] = 'Sunucunuzun kullandığı LDAP protokol sürümü';
$string['auth_ldap_version_key'] = 'Sürüm';
$string['auth_ldapdescription'] = 'Bu yöntem, harici bir LDAP sunucusuna karşı kimlik doğrulama sağlar. Verilen kullanıcı adı ve parola geçerliyse, Moodle veritabanında yeni bir kullanıcı girişi oluşturur. Bu eklenti, LDAP\'den kullanıcı özelliklerini okuyabilir ve Moodle\'da istenen alanları önceden doldurabilir. Aşağıdaki girişler için sadece kullanıcı adı ve şifre kontrol edilir.';
$string['auth_ldapextrafields'] = 'Bu alanlar isteğe bağlıdır. Burada belirttiğiniz <b>LDAP alanlarından</b> bilgilerle Moodle kullanıcı alanları önceden doldurulacaktır. <p>Alanları boş bırakırsanız LDAP\'tan hiçbir şey aktarılmaz ve bunun yerine Moodle varsayılanları kullanılır.</p><p>Bu durumda kullanıcı giriş yaptıktan sonra bu alanların hepsini düzenleyebilecektir.</p>';
$string['auth_ldapnotinstalled'] = 'LDAP kimlik denetimi kullanılamıyor. PHP LDAP modülü kurulmamış.';
$string['auth_ntlmsso'] = 'NTLM SSO';
$string['auth_ntlmsso_enabled'] = 'NTLM etki alanıyla Tek Oturum Açmayı denemek için evet olarak ayarlayın. Bunun çalışması için sunucuda ek kurulum gerektirdiğini unutmayın. Daha fazla ayrıntı için <a href="https://docs.moodle.org/en/NTLM_authentication">NTLM kimlik doğrulaması</a> belgelerine bakın.';
$string['auth_ntlmsso_enabled_key'] = 'Etkinleştir';
$string['auth_ntlmsso_ie_fastpath'] = 'NTLM SSO hızlı yolunu etkinleştirmek için ayarlayın (istemcinin tarayıcısı MS Internet Explorer ise belirli adımları atlar).';
$string['auth_ntlmsso_ie_fastpath_attempt'] = 'Tüm tarayıcılarda NTLM protokolünü dene';
$string['auth_ntlmsso_ie_fastpath_key'] = 'MS IE hızlı yol mu?';
$string['auth_ntlmsso_ie_fastpath_yesattempt'] = 'Evet, NTLM\'ye diğer tarayıcıları deneme';
$string['auth_ntlmsso_ie_fastpath_yesform'] = 'Evet, tüm diğer tarayıcılar standar giriş formunu kullanır';
$string['auth_ntlmsso_maybeinvalidformat'] = 'REMOTE_USER üstbilgiden kullanıcı adı çıkarılamıyor. Yapılandırılmış format doğru mudur?';
$string['auth_ntlmsso_missing_username'] = 'Uzak kullanıcı adı biçiminde en az %username% belirtmeniz gerekir.';
$string['auth_ntlmsso_remoteuserformat'] = '\'Kimlik doğrulama türü\' içinde \'NTLM\' seçtiyseniz, burada uzak kullanıcı adı biçimini belirtebilirsiniz. Bunu boş bırakırsanız, varsayılan DOMAINusername biçimi kullanılacaktır. Alan adının nerede göründüğünü belirtmek için isteğe bağlı <b>%domain% </b> yer tutucu ve kullanıcı adının nerede olduğunu belirten zorunlu <b>%username%</b> yer tutucusunu kullanabilirsiniz. <br/><br/> Bazı yaygın olarak kullanılan biçimler <tt>%domain%%username%</tt> (MS Windows varsayılanı), <tt>%domain%/%username%</tt>, <tt>%domain%+%username%</tt> ve yalnızca <tt>%username%</tt> (alan bölümü yoksa).';
$string['auth_ntlmsso_remoteuserformat_key'] = 'Uzak kullanıcı adı biçimi';
$string['auth_ntlmsso_subnet'] = 'Ayarlanırsa, yalnızca bu alt ağdaki istemcilerle SSO\'yu deneyecektir. Biçim: xxx.xxx.xxx.xxx/bit maskesi. Birden çok alt ağı \',\' (virgül) ile ayırın.';
$string['auth_ntlmsso_subnet_key'] = 'Alt ağ';
$string['auth_ntlmsso_type'] = 'Web sunucusunda kullanıcıların kimliğini doğrulamak için yapılandırılan kimlik doğrulama yöntemi (şüphe varsa, NTLM\'yi seçin)';
$string['auth_ntlmsso_type_key'] = 'Kimlik Doğrulama Türü';
$string['cannotmaprole'] = '"{$a->rolename}" rolü, kısa adı "{$a->shortname}" çok uzun olduğundan ve / veya tire içerdiğinden eşlenemiyor. Eşleştirilmesine izin vermek için, kısa adın maksimum {$a->charlimit} karaktere indirilmesi ve tüm kısa çizgilerin kaldırılması gerekir. <a href="{$a-> link} "> Rolü düzenleyin </a>';
$string['connectingldap'] = 'LDAP sunucusuna bağlanılıyor ...';
$string['connectingldapsuccess'] = 'LDAP sunucunuza bağlanma başarılı oldu';
$string['creatingtemptable'] = 'Geçici tablo oluşturma {$a}';
$string['diag_contextnotfound'] = '{$a} bağlamı mevcut değil veya bağlama DN\'si tarafından okunamıyor.';
$string['diag_emptycontext'] = 'Boş içerik bulundu.';
$string['diag_genericerror'] = '{$a->subject} okuma LDAP hatası {$a->code}: {$a->message}.';
$string['diag_rolegroupnotfound'] = '{$a->localname} rolü için {$a->group} grubu mevcut değil veya bağlama DN\'si tarafından okunamıyor.';
$string['diag_toooldversion'] = 'Modern bir LDAP sunucusunun LDAPv2 protokolünü kullanması pek olası değildir. Yanlış ayarlar, kullanıcı alanlarındaki değerleri bozabilir. LDAP yöneticinize danışın.';
$string['didntfindexpiretime'] = 'password_expire () zaman aşımı süresi bulamadık.';
$string['didntgetusersfromldap'] = 'LDAP\'den herhangi bir kullanıcı almadınız mı--hata? - -çıkarken';
$string['gotcountrecordsfromldap'] = 'LDAP\'den {$a} kayıt var';
$string['invalidusererrors'] = 'Uyarı: {$a} kullanıcı hesabının oluşturulması atlandı.';
$string['invaliduserexception'] = 'Hata: Yeni kullanıcı hesabı oluşturulamıyor.  Ayrıntılar ve nedeni:
 {$a}
 Bu kullanıcı atlanıyor.';
$string['ldapnotconfigured'] = 'LDAP ana makine url\'si şu anda yapılandırılmamış';
$string['morethanoneuser'] = 'LDAP\'de birden fazla kullanıcı kaydı bulundu. Sadece ilkini kullanma.';
$string['needbcmath'] = 'Active Directory ile süresi dolmuş parola denetimini kullanmak için BCMath uzantısına ihtiyacınız vardır.';
$string['needmbstring'] = 'Active Directory\'de parolaları değiştirmek için mbstring uzantısına ihtiyacınız var.';
$string['nodnforusername'] = 'User_update_password () hatası. Için DN yok: {$a->username}';
$string['noemail'] = 'Size e-posta göndermeye çalıştı ama başarısız oldu!';
$string['notcalledfromserver'] = 'Web sunucusundan çağrılmamalı!';
$string['noupdatestobedone'] = 'Yapılacak güncelleme yok';
$string['nouserentriestoremove'] = 'Kaldırılacak kullanıcı girdileri yok';
$string['nouserentriestorevive'] = 'Canlandırılacak kullanıcı girdileri yok';
$string['nouserstobeadded'] = 'Eklenecek kullanıcı girdileri yok';
$string['ntlmsso_attempting'] = 'NTLM yolu ile SSO girişi yapılıyor';
$string['ntlmsso_failed'] = 'Otomatik-giriş yapılamadı. Normal giriş sayfasını deneyin...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO etkin değil.';
$string['ntlmsso_unknowntype'] = 'Bilinmeyen ntlmsso tipi!';
$string['pagedresultsnotsupp'] = 'LDAP çağrı sonuçları desteklenmiyor (PHP sürümünüz desteklenmiyor veya Moodle\'ı LDAP protokol sürüm 2\'yi kullanacak şekilde yapılandırdınız)';
$string['pagesize'] = 'Bu değerin LDAP sunucusu sonuç kümesi boyut sınırınızdan (tek bir sorguda döndürülebilecek maksimum giriş sayısı) daha küçük olduğundan emin olun.';
$string['pagesize_key'] = 'Sayfa boyutu';
$string['pluginname'] = 'LDAP sunucu';
$string['pluginnotenabled'] = 'Eklenti etkinleştirilmedi!';
$string['privacy:metadata'] = 'LDAP sunucusu kimlik doğrulama eklentisi herhangi bir kişisel veri saklamaz.';
$string['renamingnotallowed'] = 'LDAP\'de kullanıcı yeniden adlandırma izinli değil';
$string['rootdseerror'] = 'Active Directory için rootDSE sorgulanıyorken hata oluştu';
$string['start_tls'] = 'TLS şifrelemesi ile düzenli LDAP hizmeti (bağlantı noktası 389) kullanın';
$string['start_tls_key'] = 'TLS kullan';
$string['sync_updateuserchunk'] = 'Bu değeri, işlem başına güncellenmesini istediğiniz kullanıcı sayısına ayarlayın.  Bunu 0\'a ayarlamak tüm kullanıcıları tek bir işlemde güncelleyecektir.';
$string['sync_updateuserchunk_key'] = 'Güncelleme kullanıcılarının yığın boyutunu senkronize et';
$string['syncroles'] = 'LDAP\'den sistem rollerini senkronize edin';
$string['synctask'] = 'LDAP kullanıcılarının işini senkronize et';
$string['systemrolemapping'] = 'Sistem rol eşlemesi';
$string['updatepasserror'] = 'User_update_password () hatası. Hata kodu: {$a->errno}; Hata dizgesi: {$a->errstring}';
$string['updatepasserrorexpire'] = 'Parola sona erme süresi okunurken user_update_password() hatası. Hata kodu: {$a->errno}; Hata dizesi: {$a->errstring}';
$string['updatepasserrorexpiregrace'] = 'Sona erme zamanı ve/veya yetkisiz girişler değiştirilirken user_update_password() hatası. Hata kodu: {$a->errno}; Hata dizesi: {$a->errstring}';
$string['updateremfail'] = 'LDAP kaydı güncellenirken hata oluştu. Hata kodu: {$a->errno}; Hata dizesi: {$a->errstring} <br/>Anahtar({$a->key}) - eski moodle değeri: \'{$a->ouvalue}\' yeni değer: \'{$a->nuvue}\'';
$string['updateremfailamb'] = 'LDAP, belirsiz alan {$a->key} ile güncellenemedi; Eski moodle değeri: \'{$a->ouvalue}\', yeni değer: \'{$a->nuvalue}\'';
$string['updateusernotfound'] = 'Harici olarak güncellenirken kullanıcı bulunamadı. Ayrıntılar takip: arama tabanı: \'{$a->userdn}\'; Arama filtresi: \'(objectClass = *)\'; Arama öznitelikleri: {$a->attribs}';
$string['user_activatenotsupportusertype'] = 'auth: ldap user_activate() seçilen kullanıcı türünü desteklemez: {$a}';
$string['user_disablenotsupportusertype'] = 'auth: ldap user_disable() seçilen kullanıcı türünü desteklemez: {$a}';
$string['useracctctrlerror'] = '{$a} için userAccountControl alma hatası';
$string['userentriestoadd'] = 'Eklenecek kullanıcı girdileri: {$a}';
$string['userentriestoremove'] = 'Kaldırılacak kullanıcı girdileri: {$a}';
$string['userentriestorevive'] = 'Canlandırılacak kullanıcı girdileri:  {$a}';
$string['userentriestoupdate'] = 'Güncellenecek kullanıcı girdileri: {$a}';
$string['usernotfound'] = 'Kullanıcı LDAP\'de bulunamadı';
