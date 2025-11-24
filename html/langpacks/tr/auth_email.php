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
 * Strings for component 'auth_email', language 'tr', version '4.5'.
 *
 * @package     auth_email
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_emaildescription'] = 'E-Posta onayı varsayılan kimlik denetimi yöntemidir. Kullanıcı kendi seçtiği kullanıcı adı ve şifreyle kaydolduğunda kullanıcının adresine bir onay e-postası gönderilir. Bu e-posta, kullanıcının hesabını onaylayabileceği güvenli bir bağlantı içerir. Sonraki girişler, Moodle veriabanındaki kayıtlı kullanıcı adı ve şifre değerleriyle kontrol edilir.';
$string['auth_emailnoemail'] = 'Size e-posta göndermeye çalıştı ama başarısız oldu!';
$string['auth_emailrecaptcha'] = 'Kendi kendine kayıt yaptıracak kullanıcılar için kayıt sayfasına görsel/işitsel bir teyit formu öğesi ekleyin. Bu sitenizi istenmeyen e-posta göndericilerine karşı korur ve değerli bir amaca hizmet eder. Daha fazla ayrıntı için https://recaptcha.net/learnmore.html. <br/><em>PHP cURL eklentisi gerekir.</em>';
$string['auth_emailrecaptcha_key'] = 'reCAPTCHA etkinleştir';
$string['auth_emailsettings'] = 'Ayarlar';
$string['pluginname'] = 'E-Posta temelli kendi kendine kayıt';
$string['privacy:metadata'] = 'E-posta tabanlı kendi kendine kayıt kimlik doğrulama eklentisi herhangi bir kişisel veriyi saklamaz.';
