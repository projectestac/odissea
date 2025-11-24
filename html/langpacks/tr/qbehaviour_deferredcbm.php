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
 * Strings for component 'qbehaviour_deferredcbm', language 'tr', version '4.5'.
 *
 * @package     qbehaviour_deferredcbm
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Doğruluk';
$string['accuracyandbonus'] = 'Doğruluk + Puan';
$string['assumingcertainty'] = 'Kesinliği seçmedin. Şu varsayılarak: {$a}.';
$string['averagecbmmark'] = 'Ortalama CBM işareti';
$string['basemark'] = 'Temel işaret {$a}';
$string['breakdownbycertainty'] = 'Analiz kesinliği';
$string['cbmbonus'] = 'CBM bonus';
$string['cbmgradeexplanation'] = 'CBM için, yukarıdaki not C = 1\'de tüm doğru için maksimuma göre gösterilir.';
$string['cbmgrades'] = 'CBM notları';
$string['cbmgrades_help'] = 'Kesinliğe Dayalı Değerlendirme (CBM) ile C = 1 (düşük kesinlik) ile her sorunun doğru olması,% 100 derecesini verir. Her soru C = 3 ile doğruysa, notlar% 300 gibi yüksek olabilir (yüksek kesinlik). Yanılgılar (kendine güvenen yanlış cevaplar) belirsiz olduğu kabul edilen yanlış cevaplardan çok daha düşük notlar verir. Bu bile olumsuz genel notlara neden olabilir.

** Doğruluk ** kesinliği yok sayarak doğrudur, ancak her sorunun maksimum işareti için ağırlıklandırılmıştır. Başarılı bir şekilde daha güvenilir yanıtları ayırt etmek, her soru için aynı kesinliği seçmekten daha iyi bir not verir. Bu ** CBM Bonusu ** \'da yansır. ** Doğruluk ** ** CBM Bonusu ** ** Doğruluk ** \'dan daha iyi bir bilgi ölçüsüdür **. Yanılgılar negatif bir bonusa, bilinmeyen ve bilinmeyen şeylere dikkatle bakmak için bir uyarıya neden olabilir.';
$string['cbmgrades_link'] = 'qbehaviour/deferredcbm/certaintygrade';
$string['cbmmark'] = 'CBM imi {$a}';
$string['certainty'] = 'Kesinlik';
$string['certainty-1'] = 'Fikrim yok';
$string['certainty1'] = 'C=1 (Emin değilim: <67%)';
$string['certainty2'] = 'C=2 (Ortada: >67%)';
$string['certainty3'] = 'C=3 (Kesinlikle: >80%)';
$string['certainty_help'] = 'Kesinliğe dayalı değerlendirme, cevabınızın ne kadar güvenilir olduğunu belirtmenizi gerektirir. Mevcut düzeyler şunlardır:

Kesinlik  düzeyi     | C = 1 (Emin değilim) | C = 2 (Ortada) | C = 3 (Kesinlikle)
--------------------------| ---------------------------   | ---------------------| ----------------
Doğruysa işaretle | 1                                  | 2                        | 3
Yanlışsa işaretle    |  0                                 | -2                       | -6
Doğru olma  olasılığı   |  <67%                  | 67-80%      |    >80%
Belirsizliği kabul ederek en iyi notlar elde edilir. Örneğin, yanlış olma şansının 3\'te 1\'den fazla olduğunu düşünüyorsanız, C = 1 girmeli ve negatif puan riskinden kaçınmalısınız.';
$string['certainty_link'] = 'qbehaviour/deferredcbm/certainty';
$string['certaintyshort-1'] = 'Fikrim yok';
$string['certaintyshort1'] = 'C=1';
$string['certaintyshort2'] = 'C=2';
$string['certaintyshort3'] = 'C=3';
$string['dontknow'] = 'Fikri yok';
$string['foransweredquestions'] = 'Yanıtlanan {$a} sorununun sonuçları';
$string['forentirequiz'] = 'Tüm sınav sonuçları ({$a} soruları)';
$string['howcertainareyou'] = 'Kesin{$a->help}: {$a->choices}';
$string['judgementok'] = 'Tamam';
$string['judgementsummary'] = 'Yanıtlar: {$a->responses}. Doğruluk: {$a->fraction}. ({$a>idealrangelow} ile {$a->idealrangeheigh} arasındaki optimum aralık. Bu kesin seviyeyi kullanarak {$a->judgement}karar vermiştiniz.';
$string['noquestions'] = 'Yanıt yok';
$string['overconfident'] = 'Aşırı güvenen';
$string['pluginname'] = 'CBM ile ertelenmiş geribildirim';
$string['privacy:metadata'] = 'CBM soru davranış eklentisi ile ertelenmiş geri bildirim, herhangi bir kişisel veri saklamaz.';
$string['slightlyoverconfident'] = 'Biraz fazla güvenen';
$string['slightlyunderconfident'] = 'Biraz kendine güvenen';
$string['underconfident'] = 'Kendine güvenen';
$string['weightx'] = 'Ağırlık {$a}';
