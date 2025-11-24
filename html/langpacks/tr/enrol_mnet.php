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
 * Strings for component 'enrol_mnet', language 'tr', version '4.5'.
 *
 * @package     enrol_mnet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['error_multiplehost'] = 'Bu konak için MNet kayıt eklentisinin bir örneği zaten var. Ev sahibi başına yalnızca bir örnek ve / veya \'Tüm ev sahipliği yapan kişiler için\' bir örneğe izin verilir.';
$string['instancename'] = 'Kayıt yöntemi adı';
$string['instancename_help'] = 'İsteğe bağlı olarak MNet kayıt yönteminin bu örneğini yeniden adlandırabilirsiniz. Bu alanı boş bırakırsanız, uzak ana bilgisayarın adını ve kullanıcıları için atanan rolü içeren varsayılan örnek adı kullanılacaktır.';
$string['mnet:config'] = 'MNet kayıt örneklerini yapılandırma';
$string['mnet_enrol_description'] = '{$a} yöneticilerinin öğrencilerini sunucunuzda oluşturduğunuz kurslara kaydetmelerini sağlamak için bu hizmeti yayınlayın. <br/> <ul> <li> <em> bağımlılık </em>: Ayrıca {$a}.</li> <li> <em> bağımlılık <strong> </em>\'da SSO (Kimlik Sağlayıcısı) hizmetine </strong> aboneliği de yapmalısınız: Ayrıca, <strong>\'ın </strong>\'i {$a} kullanıcısına SSO (hizmet Sağlayıcı) hizmeti yayınlamanız gerekir. Öğrencilerinizi {$a} kanalındaki kurslara kaydedebilmek için </li> </ul> <br/> bu hizmete abone olun. <br/> <ul> <li> <em> bağımlılık </em>: Ayrıca <strong>, SSO (Kimlik Sağlayıcı) hizmetini {$A} kullanıcısına da yayınlamanız gerekir. </li> <li> <em> </strong> bağımlılık </em> </li> </ul> <br/>: Ayrıca </strong> <strong>\'ın {A} üzerinde SSO (hizmet Sağlayıcı) hizmetine abone olması gerekir';
$string['mnet_enrol_name'] = 'Uzaktan kayıt hizmeti';
$string['pluginname'] = 'MNet uzaktan kayıtlar';
$string['pluginname_desc'] = 'Uzak MNet ana bilgisayarının kullanıcılarını kurslarımıza kaydetmesine izin verir.';
$string['privacy:metadata'] = 'MNet uzaktan kayıt eklentisi herhangi bir kişisel veri depolamaz.';
$string['remotesubscriber'] = 'Uzak barındırıcı';
$string['remotesubscriber_help'] = 'Uzaktan kayıt hizmeti sunduğumuz tüm MNet akranları için bu kursu açmak için \'Tüm barındırıcılar\'ı seçin. Veya bu kursu yalnızca kullanıcıları için kullanılabilir hale getirmek için tek bir barındırıcı seçin.';
$string['remotesubscribersall'] = 'Tüm sağlayıcılar';
$string['roleforremoteusers'] = 'Kullanıcıları için rol';
$string['roleforremoteusers_help'] = 'Seçilen bilgisayarın uzak kullanıcıları hangi rolü alırlar.';
