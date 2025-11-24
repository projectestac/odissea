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
 * Strings for component 'cachestore_mongodb', language 'tr', version '4.5'.
 *
 * @package     cachestore_mongodb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['database'] = 'Veritabanı';
$string['database_help'] = 'Kullanmak için veritabanının adı.';
$string['extendedmode'] = 'Genişletilmiş tuşları kullanma';
$string['extendedmode_help'] = 'Etkinleştirilirse, eklenti ile çalışırken tam anahtar kümeleri kullanılacaktır. Bu henüz dahili olarak kullanılmamaktadır, ancak isterseniz MongoDB eklentisini manuel olarak kolayca aramanıza ve araştırmanıza olanak tanır. Bunu açmak küçük bir ek yük getirecektir, bu nedenle yalnızca ihtiyacınız varsa kullanılmalıdır.';
$string['password'] = 'Şifre';
$string['password_help'] = 'Bağlantı için kullanılan kullanıcının şifresi.';
$string['pleaseupgrademongo'] = 'PHP Mongo uzantısının (<1.3) eski bir sürümünü kullanıyorsunuz. Gelecekte Mongo uzantısının eski sürümleri için destek düşecek. Lütfen yükseltmeyi düşünün.';
$string['pluginname'] = 'MongoDB';
$string['privacy:metadata:mongodb'] = 'MongoDB önbellek eklentisi, önbellekleme işlevinin bir parçası olarak verileri kısa süreliğine depolar. Bu veriler, verilerin düzenli olarak kaldırıldığı bir MongoDB sunucusunda saklanır.';
$string['replicaset'] = 'Yineleme seti';
$string['replicaset_help'] = 'Bağlanacak kopyanın adı. Eğer bu master verilirse
kökeni ismaster database komutu kullanılarak belirlenecek, böylece sürücü listede bulunmayan bir sunucuya bağlanmaya başlayabilir.';
$string['server'] = 'Sunucu';
$string['server_help'] = 'Bu, kullanmak istediğiniz sunucunun bağlantı dizesidir. Birden çok sunucu, virgülle ayrılmış bir liste kullanarak belirtilebilir.';
$string['testserver'] = 'Sunucuyu test edin';
$string['testserver_desc'] = 'Sınama için kullanılacak bir sunucu için bağlantı dizesi. Bir test sunucusu belirtilmişse, yönetim bloğundaki önbellek performans sayfası kullanılarak MongoDB performansı test edilebilir.
Örnek olarak: mongodb: //127.0.0.1: 27017';
$string['username'] = 'Kullanıcı adı';
$string['username_help'] = 'Bağlantı kurarken kullanılacak kullanıcı adı.';
$string['usesafe'] = 'Güvenli kullanım';
$string['usesafe_help'] = 'Etkinleştirildiğinde, güvenlikullanım seçeneği, ekleme, alma ve kaldırma işlemleri sırasında kullanılacaktır. Bir kopya kümesi belirlediyseniz, bu yine de zorlanacaktır.';
$string['usesafevalue'] = 'Güvenli değeri kullanın';
$string['usesafevalue_help'] = 'Güvenli kullanım için belirli bir değer sağlamayı seçebilirsiniz. Bu işlemlerin tamamlanmış sayılmadan önce tamamlanması gereken sunucu sayısını belirleyecektir.';
