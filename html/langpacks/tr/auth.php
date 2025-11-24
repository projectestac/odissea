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
 * Strings for component 'auth', language 'tr', version '4.5'.
 *
 * @package     auth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = 'Kullanılabilir kimlik doğrulama eklentileri';
$string['allowaccountssameemail'] = 'Aynı e-postayla hesaplara izin ver';
$string['allowaccountssameemail_desc'] = 'Etkinleştirilirse, birden fazla kullanıcı hesabı aynı e-posta adresini paylaşabilir. Bu, güvenlik veya gizlilik sorunlarıyla, örneğin şifre değişikliği onay e-postasıyla sonuçlanabilir.';
$string['alternatelogin'] = 'Buraya bir URL girerseniz, sitenin giriş adresi olarak bu sayfa kullanılacaktır. Bu sayfa, eylemin <strong>\'{$a}\'</strong> olarak ayarlandığı, kullanıcı adı(<strong>username</strong>) ve şifre(<strong>password</strong>) alanlarını döndüren bir formdan oluşmalıdır.<br />Yanlış adres girmeniz durumunda kendi kendinizi bile site dışı bir yere kilitleyebilirsiniz.<br />Varsayılan giriş sayfasını kullanmak için burayı boş bırakın.';
$string['alternateloginurl'] = 'Alternatif giriş URL\'si';
$string['auth_changepasswordhelp'] = 'Şifre değiştirme yardımı';
$string['auth_changepasswordhelp_expl'] = '{$a} şifresini kaybeden kullanıcılara kayıp şifre yardımı göster. Bu, <strong>Şifre Değiştirme Adresi</strong> veya Dahili Moodle şifre değiştirme yerine gösterilecektir.';
$string['auth_changepasswordurl'] = 'Şifre değiştirme adresi';
$string['auth_changepasswordurl_expl'] = '{$a} şifrelerini kaybeden kullanıcılara şifre gönderimini yapacak adresi burada belirtin. <strong>Şifre Değişim Sayfasını</strong> Hayır olarak ayarlayın.';
$string['auth_changingemailaddress'] = 'E-posta adresinizi{$a->oldemail} dan {$a->newemail}.ya değiştirmek istediniz. Güvenlik nedeniyle, size ait olduğunu teyit etmek için yeni adresinize bir mesaj gönderiyoruz. Mesajda size gönderilen URL\'yi açtığınız anda e-posta adresiniz güncellenecektir. Onay bağlantısının süresi 10 dakika içinde dolacaktır.';
$string['auth_common_settings'] = 'Genel Ayarlar';
$string['auth_data_mapping'] = 'Veri İlişkilendirmesi';
$string['auth_fieldlock'] = 'Değeri kilitle';
$string['auth_fieldlock_expl'] = '<p><b>Değeri kilitle:</b> Etkinleştirilirse, bu alanın kullanıcılar ve yöneticiler tarafından düzenlenmesi engellenecektir. Harici yetkilendirme sistemlerinde bu alanı düzenliyorsanız bu seçeneği kullanabilirsiniz.</p>';
$string['auth_fieldlockfield'] = 'Değeri ({$a}) kilitle';
$string['auth_fieldlocks'] = 'Kullanıcı alanlarını kilitle';
$string['auth_fieldlocks_help'] = '<p> Kullanıcı veri alanlarını kilitleyebilirsiniz. Bu, kullanıcı verilerinin yöneticiler tarafından kullanıcı kayıtlarının elle  düzenlendiği veya "Kullanıcıları yükle" özelliğini kullanarak  sisteme yükleyerek korunduğu siteler için kullanışlıdır. Moodle tarafından zorunlu kılınan alanları kilitliyorsanız, kullanıcı hesapları oluştururken bu verileri sağladığınızdan emin olun, aksi takdirde hesaplar kullanılamaz. </p> <p> Bu sorunu önlemek için kilit modunu "boşsa kilitsiz" olarak ayarlayın.</p>';
$string['auth_fieldmapping'] = 'Veri haritalama ({$a})';
$string['auth_invalidnewemailkey'] = 'Hata: E-posta adresinde bir değişikliği teyit etmeye çalışıyorsanız, size e-posta ile gönderdiğimiz URL\'yi kopyalamada hata yapmış olabilirsiniz. Lütfen adresi kopyalayıp tekrar deneyin.';
$string['auth_loginpasswordtoggle'] = 'Şifre görünürlüğü geçişi';
$string['auth_loginpasswordtoggle_desc'] = 'Oturum açma ekranındaki parola alanına, kullanıcıların girdikleri parolayı göstermelerini veya gizlemelerini sağlayan bir simge ekleyin.';
$string['auth_loginrecaptcha'] = 'Giriş için reCAPTCHA\'yı etkinleştirin';
$string['auth_loginrecaptcha_desc'] = 'Oturum açma sayfasına görsel/sesli bir onay formu öğesi ekleyin. Bu, yersiz oturum açma girişimleri riskini azaltır. Daha fazla ayrıntı için <a target="_blank" href="https://www.google.com/recaptcha">Google reCAPTCHA</a> sayfasına bakın.';
$string['auth_multiplehosts'] = 'Birden çok alan adları VEYA adresler belirtilebilir. (örnek host1.com;host2.com;host3.com veya xxx.xxx.xxx.xxx;xxx.xxx.xxx.xxx)';
$string['auth_notconfigured'] = '{$a} kimlik doğrulama yöntemi yapılandırılmadı.';
$string['auth_outofnewemailupdateattempts'] = 'E-posta adresinizi güncellemek için izin verilen deneme sayısını aştınız. Güncelleme talebiniz iptal edildi.';
$string['auth_passwordisexpired'] = 'Şifrenizin süresi dolmuş. Lütfen şimdi değiştirin.';
$string['auth_passwordwillexpire'] = 'Şifrenizin süresi {$a} gün içinde dolacak. Şifrenizi şimdi değiştirmek istiyor musunuz?';
$string['auth_remove_delete'] = 'İçi tamamen sil';
$string['auth_remove_keep'] = 'İçi koru';
$string['auth_remove_suspend'] = 'İçi askıya al';
$string['auth_remove_user'] = 'Kullanıcı harici kaynaktan kaldırıldığında toplu senkronizasyon sırasında dahili kullanıcı hesabıyla ne yapılacağını belirtin. Yalnızca askıya alınmış kullanıcılar harici kaynakta yeniden görünürlerse otomatik olarak geri yüklenirler.';
$string['auth_remove_user_key'] = 'Silinmiş dış kullanıcı';
$string['auth_sync_script'] = 'Kullanıcı hesabı senkronizasyonu';
$string['auth_sync_suspended'] = 'Etkinleştirilirse askıya alınmış öznitelik, yerel kullanıcı hesabının askıya alma durumunu güncellemek için kullanılacaktır.';
$string['auth_sync_suspended_key'] = 'Yerel kullanıcı askıya alma durumunu senkronize edin';
$string['auth_updatelocal'] = 'Yereli güncelle';
$string['auth_updatelocal_expl'] = '<p><b>Yereli güncelle:</b> Etkinleştirilirse, kullanıcı her oturum açtığında veya bir kullanıcı senkronizasyonu olduğunda alan güncellenir (harici kimlik doğrulamadan). Yerel olarak güncellenecek şekilde ayarlanan alanlar kilitlenmelidir.</p>';
$string['auth_updatelocalfield'] = 'Yerel olarak ({$a}) güncelle';
$string['auth_updateremote'] = 'Harici olanı güncelle';
$string['auth_updateremote_expl'] = '<p><b>Harici olanı güncelle:</b> Etkinleştirilmesi durumunda kullanıcı kaydı güncellendiği anda harici yetki sistemi de güncellenir. Alanların düzenlenebilmesi için alanda kilit olmaması gerekir.</p>';
$string['auth_updateremote_ldap'] = '<p><b>Not:</b> Harici LDAP verisi güncellemesi, yetkilendirme için kullanılan binddn ve bindpw alanlarının kullanıcı alanlarını güncellemede düzenleme haklarının olmasını gerektirir. Bu, şu anda birden fazla değerli nitelikleri saklamaz ve güncellemede ek değerleri silecektir.</p>';
$string['auth_updateremotefield'] = 'Harici olarak ({$a}) güncelle';
$string['auth_user_create'] = 'Kullanıcı oluşturmayı etkinleştir';
$string['auth_user_creation'] = 'Yeni (anonim) kullanıcılar, harici yetkilendirme kaynağında veya e-postayla onay ile hesap açabilirler. Bunu etkinleştirirseniz aynı zamanda kullanıcı oluşturma için modüle-özel seçenekleri de yapılandırmayı unutmayın.';
$string['auth_usernameexists'] = 'Seçilen kullanıcı zaten var. Başka bir tane seçin.';
$string['auth_usernotexist'] = 'Varolmayan kullanıcı: {$a}\'yı güncelleyemiyor';
$string['authenticationoptions'] = 'Kimlik denetimi seçenekleri';
$string['authinstructions'] = 'Varsayılan oturum açma yörergelerinin oturum açma sayfasında görüntülenmesi için bunu boş bırakın. Özel oturum açma yönergeleri sağlamak istiyorsanız, bunları buraya girin.';
$string['authloginviaemail'] = 'Eposta yoluyla girişe izin ver';
$string['authloginviaemail_desc'] = 'Siteye giriş için e-posta ve kulanıcı adını birlikteç kullanın (eğer benzersizse)';
$string['auto_add_remote_users'] = 'Uzak kullanıcıları otomatik ekle';
$string['cannotmapfield'] = '"{$a->fieldname}" alanı, kısa adı "{$a-> shortname}" çok uzun olduğu için eşlenemiyor.  Haritalanmasına izin vermek için, kısa adı {$a-> charlimit} karaktere indirmeniz gerekir.  <a href="{$a-> link}"> Kullanıcı profili alanlarını düzenleyin </a>';
$string['changepassword'] = 'Şifre değiştirme bağlantısı';
$string['changepasswordhelp'] = 'Kullanıcılara bir e-posta ile gönderilecek olan kayıp şifre kurtarma sayfasının URL\'si. Kimlik doğrulama ortak ayarlarında unutulmuş bir parola URL\'si ayarlanırsa bu ayarın hiçbir etkisinin olmayacağını unutmayın.';
$string['chooseauthmethod'] = 'Bir kimlik denetimi metodu seçin';
$string['chooseauthmethod_help'] = 'Bu ayar, kullanıcı oturum açtığında kullanılan kimlik doğrulama yöntemini belirler. Yalnızca etkinleştirilmiş kimlik doğrulama eklentileri seçilmelidir, aksi takdirde kullanıcı artık oturum açamaz. Kullanıcının oturum açmasını engellemek için "Oturum açma yok" seçeneğini seçin.';
$string['createpassword'] = 'Şifre oluştur ve kullanıcıya bildir';
$string['createpasswordifneeded'] = 'Gerekirse şifre oluşturun ve e-posta ile gönderin';
$string['emailchangecancel'] = 'E-posta değişikliğini iptal et';
$string['emailchangepending'] = 'Değişiklik beklemede. {$a->preference_newemail}\'de size gönderilmiş olan bağlantıyı açın.';
$string['emailnowexists'] = 'İstekte bulunmanızdan sonra, profilinize atamaya çalıştığınız e-posta adresi başka birisine atandı. Bu nedenle e-posta adres değişikliği isteğiniz iptal oldu, ama farklı bir adresle tekrar deneyebilirsiniz.';
$string['emailupdate'] = 'E-posta adresi güncellemesi';
$string['emailupdatemessage'] = 'Merhaba {$a->firstname},

$a->site} hesabınız için e-posta adresinizin değiştirilmesini talep ettiniz. Bu değişikliği onaylamak için lütfen aşağıdaki web adresine gidin:

{$a->url}
Onay bağlantısının süresi <b>10 dakika</b> içinde dolacaktır.

{$a->supportemail}';
$string['emailupdatesuccess'] = '<em>{$a->fullname}</em> kullanıcısının e-posta adresi başarılı bir şekilde <em>{$a->email}</em> olarak güncellendi.';
$string['emailupdatetitle'] = '{$a->site}\'deki e-posta güncellemesinin teyidi';
$string['errormaxconsecutiveidentchars'] = 'Şifreler en fazla {$a} ardışık özdeş karakter içermelidir.';
$string['errorminpassworddigits'] = 'Şifreler en az {$a} rakam içermeli.';
$string['errorminpasswordlength'] = 'Şifreler en az {$a} karakter uzunluğunda olmalı.';
$string['errorminpasswordlower'] = 'Şifreler en az {$a} küçük karakter içermeli.';
$string['errorminpasswordnonalphanum'] = 'Şifre en az {$a} *, - veya # gibi özel karakter(ler) içermelidir.';
$string['errorminpasswordupper'] = 'Şifreler en az {$a} büyük karakter içermeli.';
$string['errorpasswordreused'] = 'Bu şifre daha önce kullanılmış ve tekrar kullanılmasına izin verilmiyor';
$string['errorpasswordupdate'] = 'Şifreyi güncellerken hata, şifre değiştirilmedi.';
$string['eventuserloggedin'] = 'Kullanıcı oturum açtı';
$string['eventuserloggedinas'] = 'Kullanıcı, başka bir kullanıcı olarak oturum açtı';
$string['eventuserloginfailed'] = 'Kullanıcı girişi başarısız';
$string['forcechangepassword'] = 'Şifre değişimini zorunlu tut';
$string['forcechangepassword_help'] = 'Kullanıcıların sonraki girişinde şifre değişimini zorunlu tut.';
$string['forcechangepasswordfirst_help'] = 'Kullanıcılar ilk defa giriş yaptıklarında şifre değişimini zorunlu tut';
$string['forgottenpassword'] = 'Buraya bir şifre girerseniz, bu sitede kayıp şifre kurtarma sayfası olarak kullanılacaktır. Bu, şifrelerin tamamen Moodle dışında ele alındığı sitelerde kullanım içindir. Varsayılan şifre kurtarmayı kullanmak için bunu boş bırakın.';
$string['forgottenpasswordurl'] = 'Unutulmuş şifre URL';
$string['getrecaptchaapi'] = 'ReCAPTCHA\'yı kullanmak için <a href=\'https://www.google.com/recaptcha/admin\'> https://www.google.com/recaptcha/admin </a> adresinden bir API anahtarı almanız gerekir.';
$string['guestloginbutton'] = 'Ziyaretçi giriş düğmesi';
$string['incorrectpleasetryagain'] = 'Hatalı. Lütfen yeniden deneyin.';
$string['infilefield'] = 'Dosyada alan gerekli';
$string['informminpassworddigits'] = 'en az {$a} basamak';
$string['informminpasswordlength'] = 'en az {$a} karakter';
$string['informminpasswordlower'] = 'en az {$a} küçük harf';
$string['informminpasswordnonalphanum'] = 'en az {$a} *, - veya # gibi özel karakter(ler)';
$string['informminpasswordreuselimit'] = '{$a} değişikliklerden sonra şifreler tekrar kullanılabilir';
$string['informminpasswordupper'] = 'en az {$a} büyük harf';
$string['informpasswordpolicy'] = 'Şifre {$a} içermeli';
$string['instructions'] = 'Yönergeler';
$string['internal'] = 'Dahili';
$string['limitconcurrentlogins'] = 'Eşzamanlı oturum açmayı sınırla';
$string['limitconcurrentlogins_desc'] = 'Etkinleştirildiğinde, her kullanıcı için eşzamanlı tarayıcı oturum açma sayısı sınırlanır. En eski oturum, sınıra ulaştıktan sonra sonlandırılır; kullanıcıların kaydedilmemiş tüm işleri kaybedebileceğini lütfen unutmayın. Bu ayar, tek oturum açma (SSO) kimlik doğrulama eklentileri ile uyumlu değildir.';
$string['locked'] = 'Kilitli';
$string['md5'] = 'MD5 değeri';
$string['nopasswordchange'] = 'Şifre değiştirilemez';
$string['nopasswordchangeforced'] = 'Şifrenizi değiştirmeden devam edemezsiniz, ancak şifrenizi değiştirmek için de bir sayfa mevcut değil. Lütfen Moodle Yöneticinizle iletişime geçin.';
$string['noprofileedit'] = 'Profil düzenlenemez';
$string['ntlmsso_attempting'] = 'NTLM ile SSO girişi yapılıyor...';
$string['ntlmsso_failed'] = 'Otomatik-giriş başarısız oldu. Normal giriş sayfasını deneyin...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO devre dışı.';
$string['passwordhandling'] = 'Şifre alanı işleme';
$string['plaintext'] = 'Düz metin';
$string['pluginnotenabled'] = '\'{$a}\' kimlik denetimi eklentisi etkin değil.';
$string['pluginnotinstalled'] = '\'{$a}\' kimlik denetimi eklentisi kurulu değil.';
$string['potentialidps'] = 'Şu hesabınızla oturum açın:';
$string['privacy:metadata:userpref:createpassword'] = 'Kullanıcı için bir şifre oluşturulması gerektiğini gösterir.';
$string['privacy:metadata:userpref:forcepasswordchange'] = 'Kullanıcının oturum açtıktan sonra şifresini değiştirmesi gerekip gerekmediğini gösterir';
$string['privacy:metadata:userpref:loginfailedcount'] = 'Kullanıcının oturum açamama sayısı';
$string['privacy:metadata:userpref:loginfailedcountsincesuccess'] = 'Kullanıcının son başarılı girişinden bu yana giriş yapamama sayısı';
$string['privacy:metadata:userpref:loginfailedlast'] = 'Başarısız olan son giriş denemesinin kaydedildiği tarih';
$string['privacy:metadata:userpref:loginlockout'] = 'Başarısız oturum açma girişimleri nedeniyle kullanıcının hesabının kilitlenip kilitlenmediği ve hesabın kilitlendiği tarih';
$string['privacy:metadata:userpref:loginlockoutignored'] = 'Bir kullanıcının hesabının asla kilitlenmeye tabi olmaması gerektiğini belirtir';
$string['privacy:metadata:userpref:loginlockoutsecret'] = 'Kilitlendiğinde, kullanıcının hesabının kilidini açmak için kullanması gereken sır';
$string['recaptcha'] = 'Güvenlik kodu';
$string['recaptcha_help'] = 'CAPTCHA, otomatik programlardan kötüye kullanımı önlemek içindir. Bir kişi olduğunuzu doğrulamak için talimatları izleyin. Bu, kontrol edilecek bir kutu, girmeniz gereken bir görüntüde sunulan karakterler veya aralarından seçim yapabileceğiniz bir dizi görüntü olabilir.

Görüntülerin ne olduğundan emin değilseniz, başka bir CAPTCHA veya sesli bir CAPTCHA almayı deneyebilirsiniz.';
$string['recaptcha_link'] = 'auth/email';
$string['security_question'] = 'Güvenlik sorusu';
$string['selfregistration'] = 'Kendi kendine kayıt';
$string['selfregistration_help'] = 'E-posta temelli kendi kendine kayıt gibi bir kimlik denetimi eklentisi seçilirse olası kullanıcıların yeni hesap oluşturarak kaydolmasına olanak sağlanmış olur. Bu aynı zamanda istenmeyen posta göndericilerinin de hesap oluşturmalarına, forumları, blogları vb kullanarak reklam yapmasına olanak sağlar. Bu riskten kaçınmak için kendi kendine kayıt kapatılmalı veya <em>İzin verilen e-posta alan adları</em> ayarı yapılarak sınırlandırılmalıdır.';
$string['settingmigrationmismatch'] = 'Eklenti ayar adları düzeltilirken değerlerde uyuşmazlık belirlendi! Kimlik doğrulama eklentisi \'{$a->plugin}\' için  \'{$a->setting}\' ayarı eski adda \'{$a->legacy}\' ve yeni adda \'{$a->current}\' olarak belirlenmiş. Bu ikinci değer geçerli değer olarak belirlense de kontrol edip beklendiği gibi çalıştığından emin olun.';
$string['sha1'] = 'SHA-1 şifrelemesi';
$string['showguestlogin'] = 'Ziyaretçi düğmesini giriş sayfasından gizleyebilir veya gösterebilirsiniz.';
$string['showloginform'] = 'Manuel giriş formunu görüntüle';
$string['showloginform_desc'] = 'Sitedeki tüm kullanıcılar OAuth 2 gibi kullanıcı adı ve parola girmelerini gerektirmeyen bir kimlik doğrulama yöntemi kullanıyorsa manuel oturum açma formunu gizleyebilirsiniz. Manuel hesabı olan kullanıcıların giriş yapamayacağını unutmayın.

Manuel giriş formunu gizledikten sonra giriş yapamazsanız, php admin/cli/cfg.php --name=showloginform --set=1 komut satırını kullanarak tekrar görüntüleyebilirsiniz.';
$string['stdchangepassword'] = 'Şifre değiştirmek için standart sayfa kullan';
$string['stdchangepassword_expl'] = 'Harici yetkilendirme sistemi Moodle yoluyla şifre değişikliklerine izin veriyorsa bunu Evet olarak değiştirin. Bu ayar \'Şifre Değiştirme Sayfasını\' hükümsüz kılar.';
$string['stdchangepassword_explldap'] = 'DİKKAT: LDAP sunucuya uzaktan erişiliyorsa şifreli SSL bağlantısı (ldaps://) kullanmanız tavsiye edilir.';
$string['suspended'] = 'Askıya alınmış hesap';
$string['suspended_help'] = 'Askıya alınmış kullanıcı hesapları giriş yapamaz veya web hizmetlerini kullanamaz, gönderilmiş mesajlar göz ardı edilir.';
$string['testsettings'] = 'Test ayarları';
$string['testsettingsheading'] = 'Kimlik doğrulama ayarlarını test et - {$a}';
$string['unlocked'] = 'Kilit yok';
$string['unlockedifempty'] = 'Boşsa kilit yok';
$string['update_never'] = 'Asla';
$string['update_oncreate'] = 'Oluşturulduğunda';
$string['update_onlogin'] = 'Her giriş yapıldığında';
$string['update_onupdate'] = 'Güncellendiğinde';
$string['user_activatenotsupportusertype'] = 'auth: ldap user_activate() seçili kullanıcı tipini desteklemiyor: {$a}';
$string['user_disablenotsupportusertype'] = 'auth: ldap user_disable() seçili kullanıcı tipini desteklemiyor (..şimdilik)';
$string['username'] = 'Kullanıcı adı';
$string['username_help'] = 'Bazı kimlik doğrulama eklentilerinin kullanıcı adını değiştirmenize izin vermeyeceğini lütfen unutmayın.';
