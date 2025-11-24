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
 * Strings for component 'booktool_wordimport', language 'tr', version '4.5'.
 *
 * @package     booktool_wordimport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cannotopentempfile'] = 'Geçici dosya açılamıyor <b>{$a}</b>';
$string['embeddedimageswarning'] = 'Uyarı: Katıştırılmış görüntülerin doğru şekilde işlenebilmesi için bu dosyanın Word 2020 veya Word 365 kullanılarak açılması gerekir.';
$string['encodedimageswarning'] = 'Uyarı: Bu dosya kodlanmış görüntüler içerir. Bkz. <a href="http://www.moodle2word.net/mod/page/view.php?id=143" >bunların gömülü görüntülere nasıl dönüştürüleceği hakkında daha fazla bilgi</a>.';
$string['exportbook'] = 'Kitabı Microsoft Word\'e aktar';
$string['exportchapter'] = 'Bu bölümü Microsoft Word\'e aktarın';
$string['exportformat'] = 'Dışa aktarma biçimi.';
$string['exportformat_desc'] = 'Dışa aktarma biçimi.';
$string['exportformat_embedded'] = 'Word 2010';
$string['exportformat_encoded'] = 'Word 2020';
$string['exportformat_help'] = 'Word 2019, Word 2020 veya Word 365\'e erişiminiz varsa Word 2020/365 uyumlu biçimi seçin. Aksi takdirde, görüntüleri kullanılabilir bir formata dönüştürmek için harici bir Word şablonu gerektiren Word 2010\'ü seçin. Bkz. <a href="http://www.moodle2word.net/mod/page/view.php?id=143"> Gömülü görüntülere geri dönüştürme hakkında daha fazla bilgi </a>.';
$string['heading1stylelevel'] = 'Word "Başlık 1" stilinin eşleştirilmesi gereken HTML başlık öğesi düzeyi';
$string['heading1stylelevel_desc'] = '"Başlık 1" stilinin eşlenmesi gereken HTML başlık öğesi düzeyi';
$string['importchapters'] = 'Microsoft Word\'den içe aktarma';
$string['insertionpoint'] = 'Mevcut bölümden önce ekle';
$string['insertionpoint_help'] = 'İçeriği mevcut tüm bölümde tutarak, geçerli bölümden önce yerleştirin';
$string['nochapters'] = 'Kitap bölümleri bulunamadı, bu nedenle Microsoft Word\'e dışa aktarılamadı.';
$string['pluginname'] = 'Microsoft Word dosyası Alma/Verme (Kitap)';
$string['privacy:metadata'] = 'Kitaplar için Microsoft Word dosyası alma / verme aracı kişisel verileri depolamaz.';
$string['replacebook'] = 'Kitabı değiştir';
$string['replacebook_help'] = 'İçe aktarmadan önce mevcut kitap içeriğini sil';
$string['replacechapter'] = 'Mevcut bölümü değiştir';
$string['replacechapter_help'] = 'İçerik bölümünü dosyanın ilk bölümüyle değiştirin, ancak diğer tüm bölümleri saklayın';
$string['settings'] = 'Microsoft Word dosya alma / verme (Kitap) ayarları';
$string['splitonsubheadings'] = 'Alt başlıklar temel alınarak alt bölüm oluşturma';
$string['splitonsubheadings_help'] = 'Alt başlıklar "Başlık 2" stilleri üzerinde oluşturulacak';
$string['stylesheetunavailable'] = 'XSLT Stil Sayfası <b>{$a}</b> kullanılamıyor';
$string['transformationfailed'] = 'XSLT dönüşümü başarısız oldu';
$string['wordfile'] = 'Microsoft Word dosyası';
$string['wordfile_help'] = 'Microsoft Word veya LibreOffice\'den kaydedilen <i>.docx</i> dosyasını yükle';
$string['wordimport:export'] = 'Microsoft Word dosyasını dışa aktar';
$string['wordimport:import'] = 'Microsoft Word dosyasını içe aktarın';
$string['xsltunavailable'] = 'Bu Word dosyasını kaydetmek için PHP\'de XSLT kitaplığına ihtiyacınız var.';
