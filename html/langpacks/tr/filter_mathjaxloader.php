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
 * Strings for component 'filter_mathjaxloader', language 'tr', version '4.5'.
 *
 * @package     filter_mathjaxloader
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionaldelimiters'] = 'Ek denklem sınırlayıcıları';
$string['additionaldelimiters_help'] = 'MathJax filtresi, sınırlayıcı karakterler içindeki denklemler için metin ayrıştırır.

Tanınan sınırlayıcı karakterlerin listesi buraya eklenebilir (örn., AsciiMath, `kullanır). Ayırıcılar birden fazla karakter içerebilir ve virgüllerle birlikte birden fazla sınırlayıcı ayrılabilir.';
$string['filtername'] = 'MathJax';
$string['httpsurl'] = 'MathJax URL \'si';
$string['httpsurl_help'] = 'MathJax kitaplığının tam URL \'si.';
$string['localinstall'] = 'Yerel MathJax kurulumu';
$string['localinstall_help'] = 'Varsayılan MathJax yapılandırması MathJax\'in CDN sürümünü kullanır, ancak MathJax gerekirse yerel olarak yüklenebilir.

Bu, bant genişliğinden tasarruf etmek için veya yerel proxy kısıtlamaları nedeniyle yararlı olabilir.

MathJax\'ın yerel bir kurulumunu kullanmak için, önce https://www.mathjax.org/ adresinden MathJax kütüphanesinin tamamını indirin. Daha sonra bir web sunucusuna yükleyin. Son olarak MathJax filtre ayarlarını httpurl ve/veya httpsurl yerel MathJax.js URL\'sini gösterecek şekilde güncelleyin.';
$string['mathjaxsettings'] = 'MathJax  yapılandırması';
$string['mathjaxsettings_desc'] = 'Varsayılan MathJax yapılandırması çoğu kullanıcı için uygun olmalıdır, ancak MathJax yüksek düzeyde yapılandırılabilir ve standart MathJax yapılandırma seçeneklerinden herhangi biri buraya eklenebilir.';
$string['privacy:metadata'] = 'MEDIAL eklentisi herhangi bir kişisel veri saklamaz.';
$string['texfiltercompatibility'] = 'TeX filter compatibility';
$string['texfiltercompatibility_help'] = 'MathJax filtresi TeX gösterim filtresi yerine kullanılabilir.

TeX gösterim filtresi tarafından desteklenen tüm sınırlayıcıları desteklemek için, MathJax tüm denklemleri metinde "satır içi" olarak gösterecek şekilde yapılandırılacaktır.';
