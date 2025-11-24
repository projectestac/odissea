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
 * Strings for component 'qtype_multianswer', language 'tr', version '4.5'.
 *
 * @package     qtype_multianswer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmquestionsaveasedited'] = 'Sorunun düzenlenmiş olarak kaydedilmesini istediğimi onaylıyorum';
$string['confirmsave'] = 'Onaylayın ve sonra {$a} \'yı kaydedin';
$string['correctanswer'] = 'Doğru Cevap';
$string['correctanswerandfeedback'] = 'Doğru Cevap ve Geri bildirim';
$string['corruptedquestion'] = 'Bu soru arızalı ve sisteminizde bulunmayan alt sorular içermektedir.';
$string['decodeverifyquestiontext'] = 'Soru metninin kodunu çözme ve doğrulama';
$string['invalidmultianswerquestion'] = 'Cevabı soruda gömülü (Cloze) sorusu ({$a}).';
$string['layout'] = 'Yerleşim';
$string['layouthorizontal'] = 'Yatay radyo düğmeleri sırası';
$string['layoutmultiple_horizontal'] = 'Yatay onay kutusu sırası';
$string['layoutmultiple_vertical'] = 'Dikey onay kutusu sırası';
$string['layoutselectinline'] = 'Metin içinde satır içi açılır menü';
$string['layoutundefined'] = 'Tanımsız yerleşim';
$string['layoutvertical'] = 'Radyo düğmelerinden oluşan dikey sütun';
$string['missingsubquestion'] = 'Bu alt soru sisteminizde mevcut değildir ve görüntülenemez.';
$string['multichoicex'] = 'Çoktan seçmeli {$a}';
$string['nooptionsforsubquestion'] = 'Soru parçası # {$a->sub} (question->id={$a->id})için seçenek bulunamıyor';
$string['noquestions'] = 'Cevabı soruda göümülü (çok cevaplı) sorusu "<strong>{$a}</strong>" herhangi bir soru içermiyor';
$string['pleaseananswerallparts'] = 'Sorunun tüm bölümlerine cevap verin';
$string['pluginname'] = 'Cevabı soruda göümülü (Cloze)';
$string['pluginname_help'] = 'Cevabı soruda göümülü  (Cloze) soruları, içinde çoktan seçmeli ve kısa cevap gibi soruların bulunduğu bir metinden oluşur.';
$string['pluginname_link'] = 'question/type/multianswer';
$string['pluginnameadding'] = 'Cevabı soruda göümülü  (Cloze)';
$string['pluginnameediting'] = 'Cevabı soruda göümülü (Cloze) düzenleniyor';
$string['pluginnamesummary'] = 'Bu tür sorular çok esnektir, ancak yalnızca çoktan seçmeli, kısa cevaplı ve sayısal sorular gömülü özel kodlar içeren metin girerek oluşturulabilir.';
$string['privacy:metadata'] = 'Cevabı soruda göümülü  (Cloze) soru tipi eklentisi herhangi bir kişisel veri saklamaz.';
$string['qtypenotrecognized'] = 'Soru türü {$a} tanınmıyor';
$string['questiondefinition'] = 'Soru tanımı';
$string['questiondeleted'] = 'Soru silindi';
$string['questioninquiz'] = '<ul>
  <li>soru(lar) ekleyin veya silin,</li>
  <li>metindeki soruların sıralamasını değiştirin,</li>
  <li>soru türünü değiştirin (sayısal, kısa cevap, çoktan seçmeli). </li></ul>';
$string['questionnotfound'] = 'Sorunun #{$a} nolu soru bölümü bulunamıyor';
$string['questionsadded'] = 'Soru eklendi';
$string['questionsaveasedited'] = 'Soru düzenlenmiş olarak kaydedilecektir';
$string['questionsless'] = 'Veritabanında saklanan çokcevaplı sorudan daha az {$a} sorusu';
$string['questionsmissing'] = 'Soru metni en az bir gömülü cevap içermelidir.';
$string['questionsmore'] = 'Veritabanında saklanan çokcevaplı sorudan daha fazla {$a} sorusu';
$string['questiontypechanged'] = 'Soru türü değişti';
$string['questiontypechangedcomment'] = 'En az bir soru türü değiştirildi. <br />Bir soru eklediniz, sildiniz veya taşıdınız mı?<br />İleriye bakınız.';
$string['questionusedinquiz'] = 'Bu soru {$a->nb_of_quiz} quiz\'de kullanıldı, toplam deneme sayısı: {$a->nb_of_attempts}';
$string['regradeissuenumsubquestionschanged'] = 'Soru içerisindeki gömülü alt soruların sayısı değişmiştir.';
$string['storedqtype'] = 'Saklanan soru türü {$a}';
$string['subqresponse'] = 'bölüm {$a->i}: {$a->response}';
$string['unknownquestiontypeofsubquestion'] = 'Bilinmeyen soru tipi:{$a->type} soru parçasından # {$a->sub}';
$string['warningquestionmodified'] = '<b>UYARI</b>';
$string['youshouldnot'] = '<b>YAPMAMALISIN</b>';
