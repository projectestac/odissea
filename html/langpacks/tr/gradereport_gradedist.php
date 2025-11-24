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
 * Strings for component 'gradereport_gradedist', language 'tr', version '4.5'.
 *
 * @package     gradereport_gradedist
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['a'] = '(mutlak)';
$string['absolut'] = 'Mutlak';
$string['actcoverage'] = 'Mevcut harfleri içermeyen ögeler';
$string['actualcolumns'] = 'Geçer harf notları';
$string['actualgrade'] = 'No (geçerli)';
$string['boundaryerror'] = 'Yeni harf notları için bazı girişler geçersiz olabilir. Her alanda giriş olmalıdır';
$string['category'] = 'Not Kategorisi';
$string['changeletters'] = 'Not harflerini değiştir';
$string['chart'] = 'Grafik';
$string['columns'] = 'Çubuk';
$string['confirm'] = 'Not harflerini değiştir';
$string['confirmationtableviewed'] = 'Onay tablosu görüntülendi';
$string['confirmationtableviewed_description'] = '{$a->userid} kimliğine sahip kullanıcı, not dağılımı onay tablosunu görüntüledi.';
$string['contextbuttontitle'] = 'Grafik içerik menüsü';
$string['coursesum'] = 'Kurs için toplam';
$string['coverage'] = 'Yeni puan dağılımı tüm notları kapsamıyor!';
$string['coverage_export'] = 'Harflere dahil edilmeyen ögeler';
$string['decimals'] = 'Alt sınır 0 ile 100 arasında bir sayı olmalıdır. Maksimum iki ondalık basamağa izin verilir.';
$string['description'] = 'Etiketleme';
$string['download'] = 'İndir';
$string['downloadjpeg'] = 'JPEG görüntü';
$string['downloadpdf'] = 'PDF belgesi';
$string['downloadpng'] = 'PNG görüntü';
$string['downloadsvg'] = 'SVG vektör görüntüsünü indir';
$string['export'] = 'Veriyi şu olarak indir:';
$string['exportasimage'] = 'Grafiği şu olarak indir:';
$string['gradeboundary'] = '% Cinsinden alt sınır';
$string['gradeboundary_help'] = 'Ayar, notların not harfine atanacağı minimum yüzdeyi belirler.';
$string['gradeboundary_new'] = '% Cinsinden yeni alt sınır';
$string['gradeboundary_new_help'] = 'Yeni alt sınırların notların dağılımı üzerindeki etkilerini görebilirsiniz. Alt sınırlar en fazla 2 ondalık noktalı sayılar olmalıdır. 2 ondalık noktalı sayılar olmalıdır.';
$string['gradedist:edit'] = 'Not dağıtımını yönetme';
$string['gradedist:view'] = 'Not dağılımını görüntüle';
$string['gradedistdownloaded'] = 'Geçerli not dağılımı indirildi';
$string['gradedistdownloaded_description'] = '{$a->userid} kimliğine sahip kullanıcı, mevcut not dağılımını indirdi.';
$string['gradedistviewed'] = 'Not dağılımı görüntülendi';
$string['gradedistviewed_description'] = '{$a->userid} kimlikli kullanıcı, not dağılımını görüntüledi.';
$string['gradeitem'] = 'Not verme sütunu';
$string['gradeletter'] = 'Not harfleri';
$string['highchartsmissing'] = 'Diyagramı görüntülemek için Highcharts kütüphanesinin 4.x sürümünü <a href="http://code.highcharts.com/">http://code.highcharts.com/</a> adresinden indirin. Her ikisini birlikte, çekirdek modül highcharts.src.js ve exporting.src.js modülünü veya alternatif olarak küçültülmüş sürümlerini tercih ederseniz sırasıyla highcharts.js ve exporting.js modüllerini moodleroot/grade/report/gradedist/js dizinine kopyalayın.';
$string['interval'] = 'Alt sınır 0 ile 100 arasında olmalıdır.';
$string['labelgroup'] = 'Görünümü gruba odakla';
$string['labelgrouping'] = 'Görünümü gruplandırmaya odakla';
$string['newcolumns'] = 'yeni not harfleri';
$string['newcoverage'] = 'Yeni harflere dahil olmayan öğeler:';
$string['newgrade'] = 'Not (yeni)';
$string['newletterssubmitted'] = 'Yeni harf notları gönderildi';
$string['newletterssubmitted_description'] = '{$a->userid} kimlikli kullanıcı yeni not mektuplarını gönderdi.';
$string['nogroupingentry'] = 'Gruplama yok';
$string['notification'] = 'Not: Not harflerinin tanımı, kurstaki tüm not öğeleri için geçerlidir.';
$string['p'] = '(%)';
$string['percent'] = 'Yüzde';
$string['pluginname'] = 'Not dağılımı';
$string['pluginname_help'] = 'Bu rapor, harfe çevrilmiş notlar için tanımlanan alt sınırlara bağlı olarak notların belirli bir not öğesi üzerindeki dağılımını gösterir.  Önizleme işlevi, harfe çevrilmiş notların alt sınırlarında yapılan değişikliklerin not dağılımını nasıl etkilediğini hemen görmenizi sağlar.  Yeni alt sınırlardan memnunsanız, harfe çevrilmiş not tanımları kalıcı olarak değiştirilebilir.  Not: harfe çevrilmiş not tanımı, kurstaki tüm not öğeleri için geçerlidir.';
$string['privacy:null_reason'] = 'Bu eklenti herhangi bir kişisel bilgi saklamaz.  Bir kurstaki puan verilen öğelerin not dağılımını görsel olarak görüntülemek ve dışa aktarmak için bir arayüz sunar.';
$string['saved'] = 'Not harfleri başarıyla değiştirildi.';
$string['showgradeitem_description'] = 'Not görüntüleme tipini not öğesi için seçenek olarak göster.';
