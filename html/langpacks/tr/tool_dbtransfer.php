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
 * Strings for component 'tool_dbtransfer', language 'tr', version '4.5'.
 *
 * @package     tool_dbtransfer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clidriverlist'] = 'Taşıma için kullanılabilir veritabanı sürücüleri';
$string['cliheading'] = 'Veritabanı taşıma - Taşıma sırasında kimsenin sunucuya erişmediğinden emin olun!';
$string['climigrationnotice'] = 'Veritabanı taşıma işlemi sürüyor, lütfen taşıma işlemi tamamlanıncaya ve sunucu yöneticisi yapılandırmayı güncelleyip $CFG>dataroot/climaintenance.html dosyasını silene kadar bekleyin.';
$string['convertinglogdisplay'] = 'Günlük görüntüleme eylemlerini dönüştürme';
$string['dbexport'] = 'Veritabanı dışa aktar';
$string['dbtransfer'] = 'Veritabanı taşıma';
$string['enablemaintenance'] = 'Bakım modunu etkinleştir';
$string['enablemaintenance_help'] = 'Bu seçenek, veritabanı geçişi sırasında ve sonrasında bakım modunu etkinleştirir, taşıma tamamlanıncaya kadar tüm kullanıcıların erişimini engeller. Yönetici, config.php ayarlarını güncelledikten sonra normal işlemleri sürdürmek için elle $CFG->dataroot/climaintenance.html dosyasını silmeniz gerektiğini unutmayın.';
$string['exportdata'] = 'Veriyi dışa aktar';
$string['notargetconectexception'] = 'Üzgünüz, hedef veritabanına bağlantı kurulamadı.';
$string['options'] = 'Seçenekler';
$string['pluginname'] = 'Veritabanı aktar';
$string['privacy:metadata'] = 'Veritabanı aktarım eklentisi herhangi bir kişisel veri saklamaz.';
$string['targetdatabase'] = 'Hedef veritabanı';
$string['targetdatabasenotempty'] = 'Hedef veritabanı, verilen önekle birlikte herhangi bir tablo içermemelidir!';
$string['transferdata'] = 'Veriyi aktar';
$string['transferdbintro'] = 'Bu komut dosyası, bu veritabanının tüm içeriğini başka bir veritabanı sunucusuna aktaracaktır. Genellikle verilerin farklı veritabanı türlerine taşınması için kullanılır.';
$string['transferdbtoserver'] = 'Bu Moodle veritabanını başka bir sunucuya transfer et';
$string['transferringdbto'] = 'Bu veritabanı, {$a->dbhost} sunucusundaki {$a->dbtype} {$a->dbname} veritabanına aktarılıyor';
