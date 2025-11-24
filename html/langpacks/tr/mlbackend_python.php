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
 * Strings for component 'mlbackend_python', language 'tr', version '4.5'.
 *
 * @package     mlbackend_python
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['errornoconfigdata'] = 'Sunucu yapılandırması tamamlanmadı.';
$string['errorserver'] = 'Sunucu hatası {$a}';
$string['host'] = 'Ev sahibi';
$string['hostdesc'] = 'Ev sahibi';
$string['packageinstalledshouldbe'] = 'Moodlemlbackend Python paketi güncellenmelidir.  Gerekli sürüm "{$a->required}" ve kurulu sürüm "{$a->installed}".';
$string['packageinstalledtoohigh'] = 'Moodlemlbackend Python paketi, Moodle\'ın bu sürümüyle uyumlu değildir.  API uyumlu olduğu sürece gerekli sürüm "{$a->required}" veya daha yüksektir.  Yüklü "{$a->installed}" sürümü çok yüksek.';
$string['password'] = 'Şifre';
$string['passworddesc'] = 'Moodle sunucusu ile Python sunucusu arasında iletişim kurmak için parola olarak kullanılan karakter dizisi.';
$string['pluginname'] = 'Python makine öğrenimi arka ucu';
$string['port'] = 'Port';
$string['portdesc'] = 'Port';
$string['privacy:metadata'] = 'Python makine öğrenimi arka uç eklentisi herhangi bir kişisel veri saklamaz.';
$string['pythonpackagenotinstalled'] = 'Moodlemlbackend Python paketi kurulu değil veya bununla ilgili bir sorun var.  Lütfen daha fazla bilgi için komut satırı arayüzünden "{$a}" komutunu çalıştırın.';
$string['pythonpathnotdefined'] = 'Yürütülebilir Python ikili dosyanızın yolu tanımlanmadı.  Ayarlamak için lütfen "{$a}" adresini ziyaret edin.';
$string['secure'] = 'HTTPS kullan';
$string['securedesc'] = 'HTTP veya HTTPS kullanmak için.';
$string['serversettingsinfo'] = 'HTTP veya HTTPS kullanmak için.';
$string['tensorboardinfo'] = 'Web sunucunuza tensorboard --logdir=\'{$a}\' yazarak TensorBoard\'u komut satırından başlatın.';
$string['username'] = 'Kullanıcı adı';
$string['usernamedesc'] = 'Moodle sunucusu ile Python sunucusu arasında iletişim kurmak için kullanıcı adı olarak kullanılan karakter dizisi.';
$string['useserver'] = 'Bir sunucu kullan';
$string['useserverdesc'] = 'Makine öğrenimi arka uç Python paketi, web sunucusuna değil, farklı bir sunucuya kurulur.';
