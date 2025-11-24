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
 * Strings for component 'cachestore_file', language 'tr', version '4.5'.
 *
 * @package     cachestore_file
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asyncpurge'] = 'Dizini eşzamansız olarak temizle';
$string['asyncpurge_help'] = 'Etkinleştirilirse, yeni dizin önbellek düzeltmesiyle oluşturulur ve eski dizin zamanlanmış bir görev aracılığıyla asenkron olarak silinir.';
$string['autocreate'] = 'Otomatik dizin oluştur';
$string['autocreate_help'] = 'Etkinleştirilirse, yolunda belirtilen dizin, önceden yoksa otomatik olarak oluşturulur.';
$string['lockwait'] = 'Maksimum kilitli bekleme süresi';
$string['lockwait_help'] = 'Bir önbellek anahtarını okumadan veya yazmadan önce özel bir kilit için beklenecek saniye cinsinden maksimum süre. Bu yalnızca okuma veya yazma kilidi gerektiren önbellek tanımları için kullanılır.';
$string['path'] = 'Önbellek yolu';
$string['path_help'] = 'Bu önbellek deposu için dosyaları depolamada kullanılabilecek dizin. Boş bırakılırsa (varsayılan) moodledata dizininde otomatik olarak bir dizin oluşturulur. Bu, bir dosya deposunu daha iyi performans gösteren bir sürücüdeki (bellekte olduğu gibi) bir dizine yönlendirmek için kullanılabilir.';
$string['pluginname'] = 'Dosya önbelleği';
$string['prescan'] = 'Ön tarama dizini';
$string['prescan_help'] = 'Etkinleştirildiğinde, önbellek ilk kullanıldığında dizin taranır ve dosyalar için istekler tarama verilerine karşı önce kontrol edilir. Yavaş bir dosya sisteminiz varsa ve dosya işlemlerinin bir tıkanıklığa neden olduğu bulgusuna sahipseniz bu size yardımcı olabilir.';
$string['privacy:metadata'] = 'Dosya önbelleği cachestore eklentisi, önbelleğe alma işlevinin bir parçası olarak verileri kısa süreliğine saklar ancak bu veriler düzenli olarak temizlenir.';
$string['singledirectory'] = 'Tek dizin deposu';
$string['singledirectory_help'] = 'Etkinleştirilirse dosyalar (önbelleğe alınmış öğeler) birden fazla dizine bölünmek yerine tek bir dizinde saklanacaktır.

Bunu etkinleştirmek dosya etkileşimlerini hızlandırır, ancak dosya sistemi sınırlamalarına çarpma riskinin artması pahasına gelir.

Bunu yalnızca aşağıdakiler doğruysa açmanız önerilir:

* Önbellekteki öğe sayısının çalıştırdığınız dosya sisteminde sorun yaratmayacak kadar az olacağını biliyorsanız.
* Önbelleğe alınan verilerin oluşturulması pahalı değildir. Eğer öyleyse, sorun olasılığını azalttığı için varsayılana bağlı kalmak yine de daha iyi bir seçenek olabilir.';
$string['task_asyncpurge'] = 'Dosya deposu eski önbellek düzeltme dizinlerini eşzamansız olarak temizleyin';
