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
 * Strings for component 'qtype_coderunner', language 'tr', version '4.5'.
 *
 * @package     qtype_coderunner
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['coderunner_link'] = 'question/type/coderunner';
$string['coderunnercontexts'] = 'CodeRunner soruları içeren bağlamlar';
$string['exportthisquestion'] = 'Bu soruyu dışa aktar';
$string['globalextra_help'] = 'Şablon yazarları tarafından genel amaçlı kullanım için, her test senaryosunun ekstra alanı gibi, ancak tüm testler için global olan bir metin alanı. Şablon yazarı tarafından {{ QUESTION.globalextra }} olarak kullanılabilir.';
$string['htmlui_enable_in_editor_descr'] = 'Eğer doğru ise, örnek cevabı ve cevap ön yüklemesini serileştirilmiş versiyon yerine soru düzenleme formu içinde görüntülemek için kullanıcı arayüzünü kullanın. HTML src alanında Twig kullanıyorsanız bunu yanlış olarak ayarlayın.';
$string['pluginname_link'] = 'question/type/coderunner';
$string['precheck_disabled'] = 'Devre dışı';
$string['privacy:metadata'] = 'CodeRunner soru tipi eklentisi herhangi bir kişisel veri saklamaz.';
$string['proceed_at_own_risk'] = 'Yerleşik bir soru prototipini mi düzenliyorsunuz?! Kendi sorumluluğunuzdadır devam edin!';
$string['prototypeextra_help'] = 'Soru türü yazarları tarafından genel amaçlı kullanım için, global ekstra gibi, ancak prototip durumunun bir parçası olan bir metin alanı. Şablon yazarı tarafından {{ QUESTION.prototypeextra }} olarak kullanılabilir.';
$string['prototypeusageindex'] = 'Mevcut kurslar';
$string['resultcolumnheader'] = 'Sonuç';
$string['table_ui_missingparams'] = 'Tablo Kullanıcı Arabirimi parametreleri num_columns ve
num_rows (satır_sayısı).';
$string['uicontrols_help'] = 'Öğrenci cevabı ve soru yazarının şablonu için Kullanıcı Arayüzü denetleyicilerini seçin.

Öğrenci Cevabı açılır menüsü mevcut eklentilerin bir listesini görüntüler.
Kodlama soruları için genellikle Ace editörü kullanılır.
Sadece ham bir metin kutusu sağlamak için \'Yok\' değeri kullanılabilir.

\'Graph\' değeri kullanıcıya, öğrenciden bazı belirtimlere göre bir grafik çizmesini isteyen sorularda kullanılmak üzere basit bir grafik çizme kullanıcı arayüzü sağlar;
bu tür sorular genellikle grafiğin serileştirilmiş gösterimini analiz eden ve cevap doğruysa "OK" gibi bir mesaj, aksi takdirde uygun şekilde bilgilendirici bir hata mesajı yazdıran bir şablonla derecelendirilen tek bir test durumuna sahip olacaktır.

Öğrencinin doldurması için metin alanlarından oluşan bir tablo görüntüleyen \'Tablo\' kullanıcı arayüzü öğesi. Github\'daki örnek sorularda yer alan \'python3_program_testing\' soru türü tarafından kullanılır.

\'Gapfiller\' ve \'Html\' kullanıcı arayüzleri https://github.com/trampgeek/moodle-qtype_coderunner#code-runner adresindeki ana CodeRunner belgelerinde belgelenmiştir.

Gözleri iyi görmeyen öğrenciler veya serileştirmeleri incelemek isteyen yazarlar (örneğin Graph UI tarafından kullanılan temsili anlamak için) Ctrl-Alt-M yazarak geçerli sayfadaki tüm UI eklentilerinin kullanımını değiştirebilirler.

Öğrenci cevabı için hangi değer seçilirse seçilsin, öğrenci cevabı içinde de kullanılacaktır.
Örnek Yanıt ve Yanıt Ön Yükleme alanları için düzenleyici formu.

\'Şablon ace kullanır\' işaretliyse, Ace kod editörü hem şablonu hem de şablon parametreleri kutularını yönetecektir. Aksi takdirde ham metin kutusu kullanılır.';
