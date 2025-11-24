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
 * Strings for component 'report_performance', language 'tr', version '4.5'.
 *
 * @package     report_performance
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_backup'] = 'Otomatik yedekleme';
$string['check_backup_comment_disable'] = 'Yedekleme işlemi sırasında performans olumsuz olarak etkilenebilir. Etkinleştirilirse, yedeklemeler için yoğun olmayan zamanları planlayın.';
$string['check_backup_comment_enable'] = 'Yedekleme işlemi sırasında performans olumsuz olarak etkilenebilir. Etkinleştirilirse, yedeklemeler için yoğun olmayan zamanları planlayın.';
$string['check_backup_details'] = 'Otomatik yedeklemenin etkinleştirilmesi otomatik olarak belirttiğiniz zamanda sunucudaki tüm kursların arşivleri oluşturacak. <p> Bu süreçte, daha fazla sunucu kaynaklarını tüketeceğini ve performansı olumsuz etkileyeceğini unutmayın. </p>';
$string['check_cachejs_comment_disable'] = 'Etkinleştirilirse , sayfa yükleme performansı artar.';
$string['check_cachejs_comment_enable'] = 'Devre dışı bırakırsanız, sayfa yavaş yüklenir.';
$string['check_cachejs_details'] = 'Javascripti önbellekleme ve sıkıştırma büyük ölçüde sayfa yükleme performansını artırır. Çok sayıda veri üreten siteler için şiddetle tavsiye edilir.';
$string['check_dbschema_errors'] = 'Veritabanı şeması hizalı değil.';
$string['check_dbschema_name'] = 'Veritabanı şeması kontrolü';
$string['check_dbschema_ok'] = 'Veritabanı şeması doğru.';
$string['check_debugmsg_comment_developer'] = 'GELİŞTİRİCİ dışında bir değere ayarlanırsa, performans biraz iyileştirilebilir.';
$string['check_debugmsg_comment_nodeveloper'] = 'Eğer GELİŞTİRİCİ olarak ayarlarsanız performansı biraz arttırmış olursunuz.';
$string['check_debugmsg_details'] = 'Geliştirici değilseniz, Geliştirici seviyesine gitmenin nadiren avantajı vardır, bu durumda şiddetle tavsiye edilir. <p>Hata mesajı alıp, onu kopyalaıp, bir yere yapıştırdığınızda.
Debug\'u tekrar NONE\'a çevirmek için ŞİDDETLE ÖNERİLİR. Hata ayıklama mesajları, bir bilgisayar korsanına sitenizin kurulumu konusunda ipucu verebilir ve performansı etkileyebilir.</p>';
$string['check_enablestats_comment_disable'] = 'Performans istatistik işlemden etkilenebilir. Etkinleştirilirse, istatistik ayarları dikkatle ayarlanmalıdır.';
$string['check_enablestats_comment_enable'] = 'Performans istatistik işlemden etkilenebilir. İstatistik ayarları dikkatle ayarlanmalıdır.';
$string['check_enablestats_details'] = 'Bunu etkinleştirirseniz, cronjob\'daki günlükler işlenir ve bazı istatistikler toplanır. Sitenizdeki trafik miktarına bağlı olarak, bu biraz zaman alabilir. <p>Bu işlem sırasında daha fazla sunucu kaynağı tüketir ve performansı etkileyebilir.</p>';
$string['check_themedesignermode_comment_disable'] = 'Etkinleştirilirse, görüntüler ve stil sayfaları önbelleğe alınmayacak ve böylece önemli bir performans düşüşü yaşanacaktır.';
$string['check_themedesignermode_comment_enable'] = 'Devre dışı bırakılırsa, görüntüler ve stil sayfaları önbelleğe alınır ve önemli performans iyileştirmeleri yapılır.';
$string['check_themedesignermode_details'] = 'Genellikle yavaş Moodle sitelerinin nedeni budur. <p>Tema tasarımcısı modu etkinleştirilmiş bir Moodle sitesini çalıştırmak ortalama olarak CPU\'nun en az iki katı kadar zaman alabilir.</p>';
$string['comments'] = 'Yorumlar';
$string['disabled'] = 'Devre dışı';
$string['edit'] = 'Düzenle';
$string['enabled'] = 'Etkin';
$string['issue'] = 'Sayı';
$string['morehelp'] = 'daha fazla yardım';
$string['performance:view'] = 'Performans raporunu görüntüle';
$string['performancereportdesc'] = 'Bu rapor, {$a} site performansını etkileyebilecek sorunları listeler.';
$string['pluginname'] = 'Performans genel bakış';
$string['privacy:metadata'] = 'Performansa genel bakış eklentisi herhangi bir kişisel veri saklamaz.';
$string['value'] = 'Değer';
