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
 * Strings for component 'portfolio_googledocs', language 'tr', version '4.5'.
 *
 * @package     portfolio_googledocs
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'Alıcı kimliği';
$string['noauthtoken'] = 'Google\'dan bir kimlik doğrulama jetonu alınmadı. Lütfen Moodle\'ın Google hesabınıza erişmesine izin verdiğinizden emin olun';
$string['nooauthcredentials'] = 'OAuth kimlik bilgileri gerekiyor.';
$string['nooauthcredentials_help'] = 'Google Drive portföy eklentisini kullanmak için portföy ayarlarında OAuth kimlik bilgilerini yapılandırmanız gerekir.';
$string['nosessiontoken'] = 'Oturum kimliği yok';
$string['oauthinfo'] = '<p>Bu eklentiyi kullanmak için, <a href="{$a->docsurl}">Google OAuth 2.0 kurulumu</a> belgesinde açıklandığı gibi sitenizi Google\'a kaydettirmeniz gerekir. </p><p>Kayıt işleminin bir parçası olarak, aşağıdaki URL\'yi \'Yetkili Yönlendirme URI\'leri\' olarak girmeniz gerekecektir:</p><p>{$a->callbackurl}</p><p>Kayıt olduktan sonra, tüm Google Drive eklentilerini yapılandırmak için kullanılabilecek bir istemci kimliği ve sırrı sağlanacaktır.</p><p';
$string['pluginname'] = 'Google Drive';
$string['privacy:metadata'] = 'Bu eklenti, verileri harici olarak bağlantılı bir Google hesabına gönderir. Verileri yerel olarak depolamaz.';
$string['privacy:metadata:data'] = 'Portföy alt sisteminden geçen kişisel veriler.';
$string['secret'] = 'Gizlilik';
$string['sendfailed'] = '{$a} dosyası google docs\'a aktarılırken hata oluştu';
