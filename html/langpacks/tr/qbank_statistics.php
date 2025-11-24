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
 * Strings for component 'qbank_statistics', language 'tr', version '4.5'.
 *
 * @package     qbank_statistics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['discrimination_index'] = 'Kontrol gerekiyor mu?';
$string['discrimination_index_help'] = 'Bir soru, soru istatistiklerine göre kontrol edilmesi gereken bir soru olarak belirtilmiştir. Örneğin, öğrenciler sorudan düşük puan alırken tüm sınavdan yüksek puan alıyorsa veya sorudan yüksek puan alırken tüm sınavdan düşük puan alıyorsa, soruda yanlış cevabın doğru olarak ayarlanması gibi bir sorun olabilir. İstatistikler hatasız değildir; bu sadece sorunun kontrol edilmesi gerektiğine dair bir ipucudur.';
$string['discriminative_efficiency'] = 'Ayırt edicilik gücü';
$string['discriminative_efficiency_help'] = 'Ayırt edicilik gücü, sorunun öğrencileri ne kadar iyi değerlendirdiğinin istatistiksel bir tahminidir ve daha yüksek bir değer daha iyidir. Özellikle düşük bir değer soruda bir sorun olduğunu gösterebilir. Çok zor veya kolay bir soru (kolaylık endeksi %0 veya %100\'e yakın) da düşük bir değere yol açabilir.';
$string['discriminative_efficiency_link'] = 'mod/quiz/statistics';
$string['emptyvalue'] = '-';
$string['facility_index'] = 'Güçlük indeksi';
$string['facility_index_help'] = 'Kolaylık endeksi, sorunun sorulduğu tüm sınavlarda sorudan (tüm sürümler) alınan ortalama notu (yüzde olarak) verir. Daha yüksek bir değer normalde daha kolay bir soruya işaret eder.';
$string['likely'] = 'Kontrol gerekiyor';
$string['na'] = 'Giriş Yok';
$string['pluginname'] = 'Soru istatistikleri';
$string['privacy:metadata'] = 'Soru istatistikleri soru bankası eklentisi herhangi bir kişisel veri saklamaz.';
$string['unlikely'] = 'Gerekmiyor';
$string['verylikely'] = 'Çok büyük oranda';
