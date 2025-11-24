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
 * Strings for component 'qtype_gapselect', language 'tr', version '4.5'.
 *
 * @package     qtype_gapselect
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmorechoiceblanks'] = '{no} daha fazla seçenek için boşluk bırakır';
$string['answer'] = 'Cevap';
$string['blanknumber'] = 'Boşluk {$a}';
$string['choices'] = 'Seçenekler';
$string['choicex'] = 'Seçenek  [[{no}]]';
$string['combinedcontrolnamegapselect'] = 'açılır menü';
$string['combinedcontrolnamegapselectplural'] = 'açılır menüler';
$string['correctansweris'] = 'Doğru cevap: {$a}';
$string['errorblankchoice'] = 'Lütfen seçenekleri kontrol edin: {$a} Seçim boş.';
$string['errormissingchoice'] = 'Lütfen soru metnini kontrol edin: Seçenekler arasında {$a} bulunamadı! Yalnızca seçenek cevapları belirtilen sayıların yer tutucu olarak kullanılmasına izin verilir.';
$string['errornoslots'] = 'Soru metni, eksik kelimelerin nereye gittiğini göstermek için [[1]] gibi yer tutucular içermelidir.';
$string['errorquestiontextblank'] = 'Bir soru metni girmelisiniz.';
$string['group'] = 'Grup';
$string['pleaseputananswerineachbox'] = 'Lütfen her kutuya bir cevap yazın.';
$string['pluginname'] = 'Eksik kelimeleri seç';
$string['pluginname_help'] = 'Eksik kelimeleri seçme soruları, cevap verenlerin açılır menüden doğru cevapları seçmesini gerektirir. Soru metninde [[1]], [[2]], [[3]], ... yer tutucu olarak kullanılır ve doğru yanıtlar sırasıyla 1, 2, 3, ... seçenek cevapları olarak belirtilir. Soruyu daha zor hale getirmek için ekstra seçenekli cevaplar eklenebilir. Şıklı cevaplar, her bir açılır menüdeki cevapları kısıtlamak için gruplandırılabilir.';
$string['pluginname_link'] = 'question/type/gapselect';
$string['pluginnameadding'] = 'Eksik kelimeler seç sorusu ekleme';
$string['pluginnameediting'] = 'Eksik kelimeler seç sorusunu düzenleme';
$string['pluginnamesummary'] = 'Soru metnindeki eksik kelimeler açılır menüler kullanılarak doldurulur.';
$string['privacy:metadata'] = 'Eksik kelimeleri seç soru tipi eklentisi, soru yazarlarının varsayılan seçenekleri kullanıcı tercihleri olarak ayarlamasına imkân tanır.';
$string['privacy:preference:defaultmark'] = 'Belirli bir soru için varsayılan not kümesi.';
$string['privacy:preference:penalty'] = 'Sorular \'Çoklu deneme ile etkileşimli\' veya \'Uyarlanabilir mod\' davranışı kullanılarak çalıştırıldığında her yanlış deneme için ceza.';
$string['privacy:preference:shuffleanswers'] = 'Cevapların otomatik olarak karıştırılıp karıştırılmayacağı.';
$string['regradeissuenumchoiceschanged'] = '{$a} grubundaki seçenek sayısı değişti.';
$string['regradeissuenumgroupsschanged'] = 'Seçenek gruplarının sayısı değişmiştir.';
$string['shuffle'] = 'Karıştır';
$string['tagsnotallowed'] = '{$a->tag} \'e izin verilmiyor. (Sadece {$a->allowed} izin verilir.)';
$string['tagsnotallowedatall'] = '{$a->tag} \'e izin verilmiyor. (Burada HTML\'ye izin verilmiyor.)';
