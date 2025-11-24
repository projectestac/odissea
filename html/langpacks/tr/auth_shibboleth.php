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
 * Strings for component 'auth_shibboleth', language 'tr', version '4.5'.
 *
 * @package     auth_shibboleth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_shib_auth_logo'] = 'Kimlik doğrulama yöntemi logosu';
$string['auth_shib_auth_logo_description'] = 'Kullanıcılarınızın aşina olduğu Shibboleth kimlik doğrulama yöntemi için bir logo sağlayın. Bu, Shibboleth federasyonunuzun logosu olabilir, örn. <tt>SWITCHaai Login</tt> veya <tt>InCommon Login</tt> veya benzeri.';
$string['auth_shib_auth_method'] = 'Kimlik doğrulama yöntemi adı';
$string['auth_shib_auth_method_description'] = 'Parola ile kimlik denetimi yöntemi için kullanıcılarınızın bildiği bir ad belirleyin. Bu Shibboleth federation adınız da olabilir. Örnek: <tt>SWITCHaai Girişi</tt> veya <tt>InCommon Girişi</tt> vb.';
$string['auth_shib_changepasswordurl'] = 'Şifre değişim adresi';
$string['auth_shib_contact_administrator'] = 'Belirli kuruluşlarla ilişkili değilseniz ve bu sunucudaki bir kursa erişmek istiyorsanız, lütfen <a href="mailto:{$a}"> Moodle Yöneticisi </a> ile iletişime geçin.';
$string['auth_shib_convert_data'] = 'Veri düzenleme API';
$string['auth_shib_convert_data_description'] = 'Shibboleth tarafından sağlanan veriyi daha fazla düzenlemek için bu API kullanılabilir. Daha fazla bilgi için <a href="{$a}">README</a>\'yi okuyun.';
$string['auth_shib_convert_data_filepath_warning'] = 'Geçerli site veri dizininde ($CFG->dataroot) bulunan bir dosyayı veri değiştirme API\'si olarak kullanamazsınız.';
$string['auth_shib_convert_data_warning'] = 'Dosya yok veya sunucu tarafından okunabilir değil!';
$string['auth_shib_idp_list'] = 'Kimlik Sağlayıcılar';
$string['auth_shib_idp_list_description'] = 'Giriş sayfasında kullanıcının içinden seçim yapabileceği bir Kimlik Sağlayıcı varlık kimliği listesi oluşturun.<br/> Her bir satırda IdP\'nin varlık kimliği için virgülle ayrılmış bir kayıt bilgisi (bkz. Shibboleth metadata dosyası) ve aşağı doğru açılan listede görüntülenecek şekilde IdP adı olmalıdır.<br/> Üçüncü bir parametre seçeneği olarak da, eğer Moodle kurulumunuz çok federasyonlu bir düzeneğin parçasıysa kullanılacak olan bir Shibboleth oturum başlatıcısının yerini ekleyebilirsiniz.';
$string['auth_shib_instructions'] = 'Kurumunuz shibboleth aracılığıyla erişimi destekliyorsa <a href="{$a}">Shibboleth girişini</a> kullanın. Diğer durumda, burada gösterilen normal giriş formunu kullanın.';
$string['auth_shib_instructions_help'] = 'Kullanıcılarınıza Shibboleth\'ı açıklamak için burada yönergeleri yazabilirsiniz. Bu yönerge, giriş sayfasındaki yönergeler bölümünde gösterilecektir. Bu yönerge, kullanıcı giriş yapmak istediğinde "<b>{$a}</b>" adresini tıklayabileceği bir bağlantı içermelidir.';
$string['auth_shib_instructions_key'] = 'Giriş talimatları';
$string['auth_shib_integrated_wayf'] = 'Moodle WAYF Hizmeti';
$string['auth_shib_integrated_wayf_description'] = 'Bunu seçerseniz, Moodle, Shibboleth için yapılandırılanın yerine kendi WAYF hizmetini kullanacaktır. Moodle, bu alternatif giriş sayfasında kullanıcının kendi Kimlik Sağlayıcısını seçmesi için aşağıya doğru açılan bir liste görüntüleyecektir.';
$string['auth_shib_logout_return_url'] = 'Alternatif çıkış dönüş URL\'si';
$string['auth_shib_logout_return_url_description'] = 'Shibboleth kullanıcılarının çıkış yaptıktan sonra yeniden yönlendirilecekleri URL\'yi sağlayın. <br />Boş bırakılırsa, kullanıcılar moodle\'ın kullanıcıları yeniden yönlendireceği yere yönlendirileceklerdir.';
$string['auth_shib_logout_url'] = 'Shibboleth Hizmet Sağlayıcı çıkış işleyicisi URL';
$string['auth_shib_logout_url_description'] = 'Shibboleth Hizmet Sağlayıcısı çıkış işleyicisine URL sağlayın. Bu genellikle şudur: <tt>/Shibboleth.sso/Logout</tt>';
$string['auth_shib_no_organizations_warning'] = 'Bütünleşik WAYF hizmetini kullanmak isterseniz, Kimlik Sağlayıcı varlık kimliklerinin, adların ve isteğe bağlı olarak bir oturum başlatıcısının virgülle ayrılmış listesini sağlamalısınız.';
$string['auth_shib_only'] = 'Sadece Shibboleth';
$string['auth_shib_only_description'] = 'Shibboleth kimlik denetimi uygulanacaksa bu seçeneği seçin';
$string['auth_shib_username_description'] = 'Moodle kullanıcı adı olarak kullanılacak Shibboleth web sunucusu çevre değişkeninin adı';
$string['auth_shibboleth_errormsg'] = 'Lütfen üyesi olduğunuz kurumu seçin!';
$string['auth_shibboleth_login'] = 'Shibboleth Girişi';
$string['auth_shibboleth_login_long'] = 'Moodle\'a Shibboleth ile giriş yap';
$string['auth_shibboleth_manual_login'] = 'Manual Giriş';
$string['auth_shibboleth_select_member'] = 'Üyesiyim...';
$string['auth_shibboleth_select_organization'] = 'Shibboleth üzerinden kimlik denetimi için, açılan listeden lütfen kurumunuzu seçin:';
$string['auth_shibbolethdescription'] = 'Bu yöntem kullanılarak, kullanıcılar Shibboleth kullanılarak oluşturulur ve doğrulanır. Kurulum ayrıntıları için <a href="{$a}">Shibboleth README</a>\'ye bakın.';
$string['pluginname'] = 'Shibboleth';
$string['privacy:metadata'] = 'Shibboleth kimlik doğrulama eklentisi herhangi bir kişisel veriyi saklamaz.';
$string['shib_invalid_account_error'] = 'Shibboleth kimliği doğrulanmış gibi görünüyorsunuz, ancak Moodle\'ın kullanıcı adınız için geçerli bir hesabı yok. Hesabınız mevcut olmayabilir veya askıya alınmış olabilir.';
$string['shib_no_attributes_error'] = 'Shibboleth yetkilendirmesi kullandığınız görülüyor ama Moodle hiçbir kullanıcı niteliği almadı. Lütfen, Moodle üzerinde çalışan Kimlik Sağlayıcınızın gerekli nitelikleri ({$a}) yayınladığını kontrol edin ya da bu sunucunun yöneticisini bilgilendirin.';
$string['shib_not_all_attributes_error'] = 'Moodle, sizde olmayan Shibboleth niteliklerine gereksinim duyuyor. Bu nitelikler şunlardır: {$a}<br />Lütfen bu sitenin yöneticisi veya Kimlik Sağlayıcı ile iletişim kurun.';
$string['shib_not_set_up_error'] = 'Bu sayfa için hiçbir Shibboleth ortam değişkeni bulunmadığından, Shibboleth kimlik doğrulaması doğru ayarlanmamış gibi görünüyor. Shibboleth kimlik doğrulamasının nasıl kurulacağına ilişkin daha fazla talimat için lütfen <a href="{$a}">README</a>\'ye bakın veya bu Moodle kurulumunun web yöneticisiyle iletişime geçin.';
