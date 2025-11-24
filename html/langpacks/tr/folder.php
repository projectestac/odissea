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
 * Strings for component 'folder', language 'tr', version '4.5'.
 *
 * @package     folder
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bynameondate'] = 'Tarafından {$a->name} - {$a->date}';
$string['contentheader'] = 'İçerik';
$string['display'] = 'Klasör içeriklerini göster';
$string['display_help'] = 'Klasör içeriğini bir kurs sayfasında görüntülemeyi seçerseniz, ayrı bir sayfaya bağlantı olmayacaktır. Açıklama, yalnızca \'Açıklamayı kurs sayfasında görüntüle\' seçeneği işaretlendiğinde görüntülenecektir. Bu durumda katılımcıların görüntüleme işlemlerinin kaydedilemeyeceğini unutmayın.';
$string['displayinline'] = 'Kurs sayfasında satır içi';
$string['displaypage'] = 'Ayrı bir sayfada';
$string['dnduploadmakefolder'] = 'Dosyaları aç ve klasör oluştur';
$string['downloadfolder'] = 'Klasörü indir';
$string['eventallfilesdownloaded'] = 'İndirilen klasörün zip arşivi';
$string['eventfolderupdated'] = 'Klasör güncellendi';
$string['folder:addinstance'] = 'Yeni klasör ekle';
$string['folder:managefiles'] = 'Klasör Modülündeki dosyaları yönet';
$string['folder:view'] = 'Klasör içeriklerini incele';
$string['foldercontent'] = 'Dosyalar ve alt klasörler';
$string['forcedownload'] = 'Dosyaları indirmeye zorunlu tut';
$string['forcedownload_help'] = 'Görüntüler veya HTML dosyaları gibi belirli dosyaların indirilmek yerine tarayıcıda görüntülenip görüntülenmeyeceğini belirleyin. Güvenlik nedeniyle, bu ayarın yalnızca klasördeki dosyaları yönetme kapasitesine sahip tüm kullanıcılar güvenilen kullanıcılarsa seçilmemesi gerektiğini unutmayın.';
$string['indicator:cognitivedepth'] = 'Klasör bilişsel';
$string['indicator:cognitivedepth_help'] = 'Bu gösterge, öğrencinin bir Klasör kaynağında ulaştığı bilişsel derinliği esas alır';
$string['indicator:cognitivedepthdef'] = 'Klasör bilişsel';
$string['indicator:cognitivedepthdef_help'] = 'Katılımcı, bu analiz aralığında Klasör kaynakları tarafından sunulan bilişsel katılımın bu yüzdesine ulaşmıştır (Düzeyler = Görünülenmedi, Görüntülendi)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Klasör sosyal';
$string['indicator:socialbreadth_help'] = 'Bu gösterge, öğrencinin bir Klasör kaynağında ulaştığı sosyal derinliği esas alır.';
$string['indicator:socialbreadthdef'] = 'Klasör sosyal';
$string['indicator:socialbreadthdef_help'] = 'Katılımcı, bu analiz aralığında Klasör kaynakları tarafından sunulan sosyal katılımın bu yüzdesine ulaşmıştır (Düzeyler = Katılım yok, Yalnız katılımcı)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['maxsizetodownload'] = 'Maksimum klasör indirme boyutu (MB)';
$string['maxsizetodownload_help'] = 'Zip dosyası olarak indirilebilen maksimum klasör boyutu. Sıfır olarak ayarlanırsa, klasör boyutu sınırsızdır.';
$string['modulename'] = 'Klasör';
$string['modulename_help'] = 'Klasör modülü, bir öğretmenin bir tek klasör içerisinde birkaç ilgili dosyayı görüntülemesini sağlar, böylece kurs sayfasındaki kaydırma işlemi azaltılır. Sıkıştırılmış bir klasöre görüntü için yüklenebilir veya sıkıştırılmış olabilir, boş bir klasör oluşturulmuş ve içine dosyalar yüklenmiş olabilir.

Bir klasör şu durumlarda kullanılabilir

* Bir konuda konularla ilgili bir dizi dosya için, örneğin öğrenci projelerinde kullanılmak üzere pdf formatında geçmiş sınav kağıtları seti veya resim dosyalarının bir koleksiyonu
* Kurs sayfasındaki öğretmenler için paylaşılan bir yükleme alanı sağlamak (yalnızca öğretmenlerin görebilmesi için klasörü gizli tutmak için)';
$string['modulename_link'] = 'mod/folder/view';
$string['modulenameplural'] = 'Klasörler';
$string['newfoldercontent'] = 'Yeni klasör içeriği';
$string['noautocompletioninline'] = 'Etkinliği görüntülerken otomatik tamamlama "Satır içi göster" seçeneği ile birlikte seçilemez';
$string['page-mod-folder-view'] = 'Klasör modülü ana sayfası';
$string['page-mod-folder-x'] = 'Klasör modülü ana sayfası...';
$string['pluginadministration'] = 'Klasör yönetimi';
$string['pluginname'] = 'Klasör';
$string['privacy:metadata'] = 'Klasör kaynak eklentisi herhangi bir kişisel veri saklamaz.';
$string['search:activity'] = 'Klasör';
$string['showdownloadfolder'] = 'Klasörü indir düğmesini göster';
$string['showdownloadfolder_help'] = '\'Evet\' olarak ayarlanırsa, klasörün içeriğinin bir zip dosyası olarak indirilebileceği bir düğme görüntülenir.';
$string['showexpanded'] = 'Alt klasörleri genişletilmiş olarak göster';
$string['showexpanded_help'] = '\'Evet\' olarak ayarlanırsa, varsayılan olarak alt klasörler genişletilmiş olarak gösterilir; Aksi takdirde çökmüş olarak gösterilir.';
