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
 * Strings for component 'workshopallocation_random', language 'tr', version '4.5'.
 *
 * @package     workshopallocation_random
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addselfassessment'] = 'Öz değerlendirmeler ekleyin';
$string['allocationaddeddetail'] = 'Yapılacak yeni değerlendirme: <strong> {$a-> reviewername} </strong>, <strong> {$a-> authorname}</strong>\'ın gözden geçiricisidir';
$string['allocationdeallocategraded'] = 'Önceden not verililmiş değerlendirmenin dağıtımı kaldırılamıyor: gözden geçiren <strong > {$a->reviewername}< / strong>, gönderim yazarı < strong>{$a->authorname}</strong>';
$string['allocationreuseddetail'] = 'Yeniden kullanılan değerlendirme: <strong>{$a->reviewername}</strong>, <strong>{$a->yazaradı</strong>\'nın incelemecisi olarak tutuldu';
$string['allocationsettings'] = 'Atama ayarları';
$string['assessmentdeleteddetail'] = 'Dağıtımı kaldırılan değerlendirme: <strong>{$a->reviewername}</strong>, artık <strong>{$a->authorname</strong> adlı makalenin incelemecisi değil';
$string['assesswosubmission'] = 'Katılımcılar hiçbir şey sunmadan değerlendirme yapabilirler';
$string['confignumofreviews'] = 'Rasgele dağıtılacak varsayılan gönderim sayısı';
$string['excludesamegroup'] = 'Aynı gruptaki paşdaşın incelemelerini önleyin';
$string['noallocationtoadd'] = 'Eklenecek dağıtım yok';
$string['nogroupusers'] = '<p>Uyarı: Çalıştay "görünür gruplar" veya "ayrı gruplar" modundaysa, kullanıcıların bu araç tarafından kendilerine akran değerlendirmesi atanması için en az bir grubun parçası OLMALIDIR.  Gruplandırılmamış kullanıcılara yine de yeni öz değerlendirmeler verilebilir veya mevcut değerlendirmeler kaldırılabilir.</p>
 <p>Bu kullanıcılar şu anda bir grupta değil: {$a}</p>';
$string['numofdeallocatedassessment'] = '{$a} değerlendirmeyi yeniden atayın';
$string['numofrandomlyallocatedsubmissions'] = '{$a} dağıtımını rastgele atama';
$string['numofreviews'] = 'Kendi kendine atanmış {$a} gönderim(ler)';
$string['numofselfallocatedsubmissions'] = 'Öz dağıtımlı {$a} gönderim(ler)';
$string['numperauthor'] = 'gönderi başına';
$string['numperreviewer'] = 'incelemeci başına';
$string['pluginname'] = 'Rastgele Atama';
$string['privacy:metadata'] = 'Rastgele ayırma eklentisi hiçbir kişisel veriyi saklamaz. Atölye modülünün kendisi tarafından kimlerin depolandığını değerlendireceğine dair gerçek kişisel veriler ve bu veriler, değerlendirme ayrıntılarını dışa aktarmak için temel oluşturur.';
$string['randomallocationdone'] = 'Rastgele atama yapıldı';
$string['removecurrentallocations'] = 'Mevcut dağıtımları kaldır';
$string['resultnomorepeers'] = 'Başka mevcut akran yok';
$string['resultnomorepeersingroup'] = 'Bu ayrı grupta başka akran yok';
$string['resultnotenoughpeers'] = 'Yeterli sayıda akran yok';
$string['resultnumperauthor'] = 'Yazar başına {$a} inceleme ayırmaya çalışılıyor';
$string['resultnumperreviewer'] = 'İnceleyen başına {$a} inceleme ayırmaya çalışıyorum';
$string['stats'] = 'Mevcut atama istatistikleri';
