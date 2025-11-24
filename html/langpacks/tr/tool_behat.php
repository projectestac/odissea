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
 * Strings for component 'tool_behat', language 'tr', version '4.5'.
 *
 * @package     tool_behat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aim'] = 'Bu yönetim aracı, geliştiricilere ve test yazarlarına, Moodle\'ın işlevlerini tanımlayan .feature dosyaları oluşturmalarına ve otomatik olarak çalıştırmalarına yardımcı olur. .feature dosyalarında kullanılabilen adım tanımları aşağıda listelenmiştir.';
$string['allavailablesteps'] = 'Kullanılabilir tüm adım tanımları';
$string['errorbehatcommand'] = 'Behat CLI komutu çalıştırılırken hata oluştu. Sorun hakkında daha fazla bilgi edinmek için CLI\'dan manuel olarak "{$a} --help" komutunu çalıştırmayı deneyin.';
$string['errorcomposer'] = 'Yazar bağımlılıkları yüklü değil.';
$string['errordataroot'] = '$CFG->behat_dataroot ayarlanmadı veya geçersiz.';
$string['errorsetconfig'] = '$CFG->behat_dataroot, $CFG->behat_prefix ve $CFG->behat_wwwroot ayarları config.php\'de ayarlanmalıdır.';
$string['erroruniqueconfig'] = '$CFG->behat_dataroot, $CFG->behat_prefix ve $CFG->behat_wwwroot değerlerinin $CFG->dataroot, $CFG->prefix, $CFG->wwwroot, $CFG->phpunit_dataroot ve $CFG- değerlerinden farklı olması gerekir >phpunit_prefix değerleri.<br/>Veya $CFG->behat_prefix aynı ise, $CFG->behat_dbname veya $CFG->behat_dbhost, $CFG->phpunit_dbname ve $CFG->phpunit_dbhost\'tan ve $\'dan farklı olmalıdır CFG->dbname ve $CFG->dbhost.';
$string['fieldvalueargument'] = 'Alan değeri argümanları';
$string['fieldvalueargument_help'] = 'Bu argüman bir alan değeri ile tamamlanmalıdır. Onay kutuları, seçimler veya metin alanları gibi basit veya tarih seçiciler gibi karmaşık olanlar da dahil olmak üzere birçok alan türü vardır. Beklenen alan değerlerinin ayrıntıları için <a href="https://moodledev.io/general/development/tools/behat" target="_blank" >Kabul_testi</a> geliştirme belgesine bakın.';
$string['giveninfo'] = 'Verildi. Çevrenin kurulması için süreçler';
$string['infoheading'] = 'Bilgi';
$string['installinfo'] = 'Kurulum için {$a} okuyun ve uygulama bilgilerinin test edilmesi';
$string['newstepsinfo'] = 'Yeni adım tanımlarının nasıl ekleneceği hakkında bilgi için {$a} bölümünü okuyun';
$string['newtestsinfo'] = 'Yeni testler nasıl yazacağınız hakkında bilgi için {$a} okuyun';
$string['nostepsdefinitions'] = 'Bu filtreyle eşleşen adım tanımları yok';
$string['pluginname'] = 'Kabul testleri';
$string['privacy:metadata'] = 'Kabul testi eklentisi herhangi bir kişisel veri saklamaz.';
$string['stepsdefinitionscomponent'] = 'Alan';
$string['stepsdefinitionscontains'] = 'Kapsamlar';
$string['stepsdefinitionsfilters'] = 'Adımların tanımları';
$string['stepsdefinitionstype'] = 'Tür';
$string['theninfo'] = 'Sonra. Kazanımların beklenen kazanımlar olduğundan emin olmak için kontroller';
$string['unknownexceptioninfo'] = 'Selenyum veya tarayıcınızla ilgili bir sorun oluştu. Lütfen Selenium\'un en yeni sürümünü kullandığınızdan emin olun. Hata:';
$string['viewsteps'] = 'Filtre';
$string['warndirrootconfigfound'] = 'Bir yapılandırma dosyası {$a} adresinde bulundu. Bu dosya otomatik olarak güncellenmez ve eski hale gelebilir. Bu dosyayı kaldırmanızı öneririz.';
$string['wheninfo'] = 'Ne zaman. Bir olaya neden olan eylemler';
$string['wrongbehatsetup'] = 'Behat kurulumu ile ilgili bir sorun var ve bu nedenle adım tanımları listelenemiyor: <b>{$a->errormsg} </b> <br/> <br/> Lütfen kontrol edin: <ul>$CFG->behat_dataroot, $CFG->behat_prefix ve $CFG>behat_wwwroot ayarları, config.php dosyasında $CFG->dataroot, $CFG-> önek ve $CFG->wwwroot\'tan farklı değerlerle ayarlanır. </li>
<li>Moodle kök dizininizden "{$a-> behatinit}" koştunuz.</i>
<li>Bağımlılıklar satıcıya yüklenir ve {$a->behatcommand} dosyasında yürütme izinleri vardır. </li> </ul>';
