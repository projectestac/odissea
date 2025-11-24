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
 * Strings for component 'url', language 'tr', version '4.5'.
 *
 * @package     url
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowvariables'] = 'URL değişkenlerine izin ver';
$string['allowvariables_desc'] = 'Değişkenlerin URL\'lere eklenmesine izin verin.  Değişkenler, kullanıcının adı gibi dahili bilgileri URL\'nin parçası olarak aktarmanıza olanak tanır.  Bu özelliği kullanırken potansiyel gizlilik risklerinin farkında olun.';
$string['chooseavariable'] = 'Bir değişken seçin...';
$string['clicktoopen'] = 'Kaynağı açmak için {$a} üzerine tıklayın.';
$string['configdisplayoptions'] = 'Mevcut olması gereken tüm seçenekleri seçin, mevcut ayarlar değiştirilmemiştir. Birden fazla alanı seçmek için CTRL tuşunu basılı tutun.';
$string['configframesize'] = 'Bir çerçeve içerisinde bir web sayfası veya yüklenen bir dosya görüntülendiğinde, bu değer, üst çerçevenin (gezinmeyi içerir) yüksekliğidir (piksel cinsinden).';
$string['configrolesinparams'] = 'Özelleştirilmiş rol adları (kurs ayarlarından) URL parametreleri için değişken olarak kullanılabilmeli mi?';
$string['configsecretphrase'] = 'Bu gizli cümle, bazı sunuculara parametre olarak gönderilebilen şifrelenmiş kod değeri üretmek için kullanılır. Şifreli kod, gizli ifadenizle birleştirilen geçerli kullanıcı IP adresinin bir md5 değeri tarafından üretilir. Yani kod = md5 (IP.secretphrase). IP adresinin değişebileceği ve genellikle farklı bilgisayarlar tarafından paylaşıldığından bunun güvenilir olmadığını unutmayın.';
$string['contentheader'] = 'İçerik';
$string['createurl'] = 'Bir URL oluştur';
$string['displayoptions'] = 'Erişilebilir görünüm seçenekleri';
$string['displayselect'] = 'Göster';
$string['displayselect_help'] = 'Bu ayar, URL dosya türüne ve tarayıcının gömülmesine izin verip vermeyeceğine göre URL\'nin görüntülenme şeklini belirler. Seçenekler arasında şunlar olabilir:

* Otomatik - URL için en iyi ekran seçeneği otomatik olarak seçilir
* Göm - URL, gezinme çubuğunun altındaki sayfada URL açıklaması ve tüm bloklarla birlikte görüntülenir
* Aç - Tarayıcı penceresinde yalnızca URL görüntülenir
* Açılır pencerede - URL, menüler veya adres çubuğu olmadan yeni bir tarayıcı penceresinde görüntülenir
* Çerçevede - URL, gezinme çubuğunun ve URL açıklamasının altındaki bir çerçeve içerisinde görüntülenir
* Yeni pencere - URL, menüler ve adres çubuğu bulunan yeni bir tarayıcı penceresinde görüntülenir';
$string['displayselectexplain'] = 'Görünüm tipini seçin. Maalesef tüm tipler tüm URL\'ler için uygun değildir.';
$string['externalurl'] = 'Harici URL';
$string['framesize'] = 'Frame yüksekliği';
$string['indicator:cognitivedepth'] = 'URL bilişsel';
$string['indicator:cognitivedepth_help'] = 'Bu gösterge, öğrencinin bir URL kaynağında ulaştığı bilişsel derinliğe dayanmaktadır.';
$string['indicator:cognitivedepthdef'] = 'URL bilişsel';
$string['indicator:cognitivedepthdef_help'] = 'Katılımcı, bu analiz aralığı esnasında URL kaynakları tarafından sunulan bilişsel katılımın bu yüzdesine ulaştı (Düzeyler = Görüntüleme yok, Görüntüleme)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'URL  Sosyal';
$string['indicator:socialbreadth_help'] = 'Bu gösterge, öğrencinin bir URL kaynağında ulaştığı sosyal derinliği esas alır.';
$string['indicator:socialbreadthdef'] = 'URL Sosyal';
$string['indicator:socialbreadthdef_help'] = 'Katılımcı, bu analiz aralığında URL kaynakları tarafından sunulan sosyal katılımın bu yüzdesine ulaştı (Seviyeler = Katılım yok, Yalnızca Katılımcı)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['invalidstoredurl'] = 'Bu kaynağı görüntüleyemiyor, URL geçersiz.';
$string['invalidurl'] = 'Girilen URL geçersiz';
$string['modulename'] = 'URL';
$string['modulename_help'] = 'URL modülü, bir öğretmenin kurs kaynağı olarak bir web bağlantısı sağlamasına yardımcı olur. Belgeler veya resimler gibi çevrimiçi olarak serbestçe kullanılabilen herhangi bir şeye bağlantı verilebilir; URL\'nin bir web sitesinin ana sayfası olması gerekmez. Belirli bir web sayfasının URL\'si kopyalanıp yapıştırılabilir veya öğretmen dosya seçiciyi kullanıp Flickr, YouTube veya Wikimedia gibi bir depodan bir bağlantı seçebilir (site için hangi depoların etkinleştirildiğine bağlı olarak)

Gömülü veya yeni bir pencerede açma gibi bir dizi görüntü seçenekleri ve öğrencinin adı gibi bilgileri URL\'ye aktarmak için gelişmiş seçenekler vardır.

URL\'lerin, metin editörü aracılığıyla herhangi bir başka kaynağa veya etkinlik türüne eklenebileceğini unutmayın.';
$string['modulename_link'] = 'mod/url/view';
$string['modulenameplural'] = 'Adresler';
$string['name'] = 'İsim';
$string['name_help'] = 'Bu, URL için bağlantı metni olarak işlev görecektir.

URL\'nin amacını kısaca açıklayan anlamlı bir metin girin.

"Bağlantı" kelimesini kullanmaktan kaçının. Bu, ekran okuyucular bağlantıları duyurduğu için ekran okuyucu kullanıcılarına yardımcı olacaktır (örneğin, "Moodle.org, bağlantı"), bu nedenle ad alanına "bağlantı" kelimesini dahil etmeye gerek yoktur.';
$string['page-mod-url-x'] = 'Herhangi bir URL modülü sayfası';
$string['parameterinfo'] = '&amp;parametre=değişken';
$string['parametersheader'] = 'URL değişkenleri';
$string['parametersheader_help'] = 'Bu bölüm, URL\'nin bir parçası olarak dahili bilgileri aktarmanıza olanak tanır. Bu, URL parametre alan etkileşimli bir web sayfasıysa ve örneğin geçerli kullanıcının adı gibi bir şey iletmek istiyorsanız kullanışlıdır. Metin kutusuna URL\'nin parametresinin adını girin ve ardından ilgili site değişkenini seçin.';
$string['pluginadministration'] = 'URL modülü yönetimi';
$string['pluginname'] = 'URL';
$string['popupheight'] = 'Açılır pencere yüksekliği (piksel)';
$string['popupheightexplain'] = 'Varsayılan açılır pencere yüksekliğini belirtir.';
$string['popupwidth'] = 'Açılır pencere genişliği (piksel)';
$string['popupwidthexplain'] = 'Varsayılan açılır pencere genişliğini belirtir.';
$string['printintro'] = 'URL açıklamasını göster';
$string['printintroexplain'] = 'URL açıklaması içeriğin altında gösterilsin mi? Bazı görüntüleme türleri etkinleştirilse bile açıklamayı görüntülemeyebilir.';
$string['privacy:metadata'] = 'URL kaynak eklentisi herhangi bir kişisel veri saklamaz.';
$string['rolesinparams'] = 'URL değişkenleri olarak rol adları';
$string['search:activity'] = 'URL';
$string['serverurl'] = 'Sunucu URL\'si';
$string['url:addinstance'] = 'Yeni bir URL kaynağı ekleyin';
$string['url:view'] = 'URL görünümü';
