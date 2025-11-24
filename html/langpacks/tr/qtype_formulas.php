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
 * Strings for component 'qtype_formulas', language 'tr', version '4.5'.
 *
 * @package     qtype_formulas
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abserror'] = 'Mutlak hata';
$string['addmorepartsblanks'] = 'Daha fazla {no} parça için boşluklar';
$string['algebraic_formula'] = 'Cebirsel formül';
$string['answer'] = 'Cevap';
$string['answer_help'] = '**Gerekli**.
 cevaba bağlı olarak bir sayı listesi veya bir dize listesi olmalıdır
 tipi seçildi.  Yalnızca bir yanıt olduğunda, bir sayı veya dize olabilir
 doğrudan girilir.  Lütfen listedeki öğe sayısının
 bu bölüm için cevap alanlarının sayısını tanımlar.

 <pre class="prettyprint">123<br>[1, 0, 0, 1]<br>a<br>[1, a, b]<br>"exp(-at)"<br>[" vx t", "vy t - ^2\'de 0,5"]</pre>';
$string['answercombinedunitmulti'] = '{$a->part} kısmı için cevap ve birim';
$string['answercombinedunitsingle'] = 'Cevap ve birim';
$string['answercoordinatemulti'] = '{$a->part} bölümü için {$a->numanswer} cevap alanı';
$string['answercoordinatesingle'] = 'Cevap alanı {$a->numanswer}';
$string['answermark'] = 'Bölüm işareti*';
$string['answermark_help'] = '**Gerekli**.
Bu bölümün cevabına ilişkin not, 0\'dan büyük bir sayı olmalıdır.
Tüm sorunun varsayılan notu, tüm bölüm notlarının toplamıdır.

Not: Bu bölümün not alanı boş bırakılırsa, soru kaydedildiğinde bölüm silinecektir.';
$string['answermulti'] = 'Bölüm için cevap {$a->part}';
$string['answerno'] = 'Bölüm {$a}';
$string['answersingle'] = 'Cevap';
$string['answertype'] = 'Cevap türü';
$string['answertype_help'] = 'Dört cevap türü vardır.

Rakam, sayısal ve sayısal formül cevapları, cevap olarak bir rakam veya rakam listesi gerektirir.

Cebirsel formül cevapları, cevap olarak bir dize veya dizeler listesi gerektirir.

Farklı cevap türleri, cevapları girerken farklı kısıtlamalar getirecektir, bu nedenle öğrencilerin bunları nasıl gireceklerini bilmeleri gerekecektir. Soru kodundaki biçim denetimi, bir şeylerin yanlış olup olmadığını yazdıklarında da onlara bildirecektir. Ayrıntılar için lütfen belgeleri okuyun.';
$string['answertype_link'] = 'https://moodleformulas.org/';
$string['answerunitmulti'] = 'Bölüm için birim {$a->part}';
$string['answerunitsingle'] = 'Birim';
$string['checkvarshdr'] = 'Değişken örneklemesini kontrol edin';
$string['choiceno'] = 'Hayır';
$string['choiceyes'] = 'Evet';
$string['commonsiunit'] = 'Ortak SI birimleri';
$string['correctansweris'] = 'Muhtemel doğru cevaplardan biri şudur: {$a}';
$string['correctfeedback'] = 'Herhangi bir doğru cevap için';
$string['correctfeedback_help'] = 'Bu geri bildirim, bu bölümden en yüksek puanı alan öğrencilere gösterilecektir.  Değerleriyle değiştirilecek olan genel ve özel değişkenleri içerebilir.';
$string['correctness'] = 'Not verme kriteri*';
$string['correctness_help'] = '**Gerekli**. Hata aralığı olarak bağıl hata veya mutlak hata seçebilirsiniz. Göreceli hata cebirsel cevap türü için kullanılamaz.

Birden fazla cevap alanı olduğunda bağıl hata ve mutlak hatanın kesin tanımı için belgelere bakın.';
$string['correctness_link'] = 'https://moodleformulas.org/';
$string['correctnessexpert'] = 'Uzman';
$string['correctnesssimple'] = 'Basitleştirilmiş mod';
$string['defaultanswermark'] = 'Varsayılan bölüm işareti';
$string['defaultanswermark_desc'] = 'Yeni sorunun bölümleri için varsayılan bölümün işareti';
$string['defaultanswertype'] = 'Varsayılan cevap türü';
$string['defaultanswertype_desc'] = 'Yeni sorunun bölümleri için varsayılan cevap türü';
$string['defaultcorrectness'] = 'Varsayılan not verme kriterleri';
$string['defaultcorrectness_desc'] = 'Yeni sorunun bölümleri için varsayılan not verme ölçütü';
$string['defaultunitpenalty'] = 'Varsayılan birim cezası';
$string['defaultunitpenalty_desc'] = 'Yanlış birim için varsayılan ceza (0-1)';
$string['error_algebraic_var'] = 'Cebirsel değişkeni tanımlamada sözdizimi hatası.';
$string['error_answer_missing'] = 'Cevap tanımlanmadı.';
$string['error_answerbox_duplicate'] = 'Her cevap alanı yer tutucusu bir bölümde yalnızca bir kez kullanılabilir.';
$string['error_answertype_mistmatch'] = 'Cevap türü uyuşmazlığı: Sayısal yanıt türü rakam gerektirir ve cebirsel cevap türü ise dize gerektirir';
$string['error_criterion'] = 'Not verme ölçütü tek bir sayı ile değerlendirilmelidir.';
$string['error_eval_numerical'] = 'Bazı ifadeler sayısal olarak değerlendirilemez.';
$string['error_fixed_range'] = 'Sabit bir aralıkta sözdizimi hatası.';
$string['error_forbid_char'] = 'Formül veya ifade, yasaklanmış karakterler veya işleçler içeriyor.';
$string['error_forloop'] = 'for döngüsünün sözdizimi hatası.';
$string['error_forloop_expression'] = 'for döngüsünün ifadesi bir liste olmalıdır.';
$string['error_forloop_var'] = 'for döngüsünün değişkeninde bazı hatalar var.';
$string['error_func_param'] = '{$a}() işlevi için yanlış sayıda veya yanlış parametre türü';
$string['error_grading_error'] = 'Puanlama hatası! Büyük olasılıkla yanlış içe aktarma dosyası veya veritabanı bozulması kaynaklıdır.';
$string['error_mark'] = 'Cevap işareti 0\'dan büyük bir değer almalıdır.';
$string['error_no_answer'] = 'En az bir cevap gereklidir.';
$string['error_placeholder_format'] = 'Yanlış yer tutucu biçimi veya yasak karakterler.';
$string['error_placeholder_main_duplicate'] = 'Ana soru metninde yinelenen yer tutucu.';
$string['error_placeholder_missing'] = 'Bu yer tutucu, ana soru metninde eksik.';
$string['error_placeholder_sub_duplicate'] = 'Bu yer tutucu zaten başka bir kısımda tanımlanmış.';
$string['error_placeholder_too_long'] = 'Yer tutucunun uzunluğu 40 karakterle sınırlıdır.';
$string['error_question_damaged'] = 'Hata: Soru bozuk, metin parçası sayısı ile soru parçası sayısı eşit değil.';
$string['error_randvars_set_size'] = 'Kümedeki üretilebilir öğelerin sayısı 1\'den büyük olmalıdır.';
$string['error_randvars_type'] = 'Kümedeki tüm elemanlar tam olarak aynı türde ve boyutta olmalıdır.';
$string['error_rule'] = 'Kural ayrıştırma hatası!';
$string['error_ruleid'] = 'id/name ile dosyada böyle bir kural yok.';
$string['error_subexpression_empty'] = 'Bir alt ifade boş.';
$string['error_syntax'] = 'Sözdizimi hatası.';
$string['error_unit'] = 'Birim ayrıştırma hatası!';
$string['error_unitpenalty'] = 'Ceza 0 ile 1 arasında bir sayı olmalıdır.';
$string['error_validation_eval'] = 'Dene değerlendirme hatası!';
$string['error_vars_array_index_nonnumeric'] = 'Sayısal olmayan değer, liste dizini olarak kullanılamaz.';
$string['error_vars_array_index_out_of_range'] = 'Liste dizini aralık dışında !!!';
$string['error_vars_array_size'] = 'Listenin boyutu 1 ile 1000 arasında olmalıdır.';
$string['error_vars_array_type'] = 'Aynı listedeki öğeler, sayı veya dize olmak üzere aynı türde olmalıdır.';
$string['error_vars_array_unsubscriptable'] = 'Değişken alt simge olarak yazılamaz.';
$string['error_vars_bracket_mismatch'] = 'Parantez uyumsuzluğu.';
$string['error_vars_end_separator'] = 'Sonunda bir ayırma işareti eksik.';
$string['error_vars_name'] = 'Değişken adının sözdizimi yanlıştır.';
$string['error_vars_reserved'] = 'Fonksiyon {$a}() rezerve edilmiştir ve değişken olarak kullanılamaz.';
$string['error_vars_string'] = 'Hata! Ya çift tırnak kapatılmamış bir dize ya da \' (tek tırnak) gibi kabul edilmeyen bir karakter kullanılmış.';
$string['error_vars_undefined'] = '\'{$a}\' değişkeni tanımlanmadı.';
$string['feedback'] = 'Bölüm genel geribildirimi';
$string['feedback_help'] = 'Bu bölüm geri bildirimi tüm öğrencilere gösterilecektir.  Değerleriyle değiştirilecek olan global ve yerel değişkenleri içerebilir.';
$string['functiontakesatleasttwo'] = '{$a} işlevinin en az iki argümanı olmalıdır';
$string['functiontakesnoargs'] = '{$a} işlevi herhangi bir bağımsız değişken almaz';
$string['functiontakesonearg'] = '{$a} işlevinin tam olarak bir bağımsız değişkeni olmalıdır';
$string['functiontakesoneortwoargs'] = '{$a} işlevinin bir veya iki argümanı olmalıdır';
$string['functiontakesthreeargs'] = '{$a} işlevinin tam olarak üç argümanı olmalıdır';
$string['functiontakestwoargs'] = '{$a} işlevinin tam olarak iki argümanı olmalıdır';
$string['globalvarshdr'] = 'Değişkenler';
$string['illegalformulasyntax'] = '\'{$a}\' ile başlayan geçersiz formül sözdizimi';
$string['incorrectfeedback'] = 'Herhangi bir yanlış yanıt için';
$string['incorrectfeedback_help'] = 'Bu geri bildirim, bu bölümden herhangi bir not almayan öğrencilere gösterilecektir.  Değerleriyle değiştirilecek olan global ve yerel değişkenleri içerebilir.';
$string['instantiate'] = 'Örneklendirme';
$string['mainq'] = 'Ana soru';
$string['modelanswer'] = 'Model Cevap';
$string['none'] = 'Yok';
$string['number'] = 'Birim';
$string['number_unit'] = 'Sayısal ve birim';
$string['numdataset'] = 'Veri seti sayısı';
$string['numeric'] = 'Sayısal';
$string['numeric_unit'] = 'Sayısal ve birim';
$string['numerical_formula'] = 'Sayısal formül';
$string['numerical_formula_unit'] = 'Sayısal formül ve birim';
$string['otherrule'] = 'Diğer kurallar';
$string['otherrule_help'] = 'Burada sorunun yazarı, kabul edilen diğer temel birimler için ek dönüştürme kuralları tanımlayabilir.  Gelişmiş kullanımlar için belgelere bakın.';
$string['partiallycorrectfeedback'] = 'Herhangi bir kısmen doğru yanıt için';
$string['partiallycorrectfeedback_help'] = 'Bu geri bildirim, bu bölümde en yüksek notu alamayan öğrencilere gösterilecektir. Değerleriyle değiştirilecek genel ve özel değişkenleri içerebilir';
$string['placeholder'] = 'Yer tutucu adı';
$string['placeholder_help'] = 'Yer tutucu, ana soru metninde bölümün içeriğiyle değiştirilecek konumu tanımlamak için kullanılır. Bu, #1, #2a, #2b ve #A gibi \'**#**\' ile ön eklenmiş alfanümerik karakterlerden oluşan bir dizedir.

Bu alan boş bırakılırsa, bölüm ana soru metninin sonuna eklenecektir.';
$string['pleaseputananswer'] = 'Lütfen her giriş alanına bir cevap girin.';
$string['pluginname'] = 'Formüller';
$string['pluginname_help'] = 'Bu soruyu kullanmaya başlamak için lütfen <a href="https://moodleformulas.org/">moodleformulas.org</a> adresine gidin.

Olası sorular için lütfen <a href="https://moodleformulas.org/">moodleformulas.org</a> adresine gidin.

Aşağıdaki düzenleme formundaki seçenekler için lütfen <a href="https://moodleformulas.org/">moodleformulas.org</a> adresine gidin.

Belgelerin tamamı için lütfen <a href="https://moodleformulas.org/">moodleformulas.org</a> adresine gidin.';
$string['pluginname_link'] = 'question/type/formulas';
$string['pluginnameadding'] = 'Formül sorusu ekleme';
$string['pluginnameediting'] = 'Bir formül sorusunu düzenleme';
$string['pluginnamesummary'] = 'Rastgele değerler ve çoklu yanıtlar içeren soru türü
Cevap alanları, vektörler, polinomlar ve matris gibi çeşitli yapıları içeren sorular oluşturabilmemiz için herhangi bir yere yerleştirilebilir.
Birim kontrolü ve çoklu parça soruları gibi diğer özellikler de sıkı bir şekilde entegre edilmiştir ve kullanımı kolaydır.';
$string['postunit'] = 'Birim';
$string['postunit_help'] = 'Burada birimi belirtebilirsiniz.  Bu soru türü SI birimi için özel olarak tasarlanmıştır, bu nedenle
 boş alan, farklı \'temel birimin\' \'çarpımını\' temsil eder ve üsler için <tt> ^ </tt> kullanılır.
 Ayrıca ters üs için <tt> / </tt> kullanılabilir.  Temel birimin herhangi bir permütasyonu aynı şekilde ele alınır.

 Öğrencilerin aynı giriş formatını kullanmaları gerekmektedir.  Örneğin,

 <pre class="prettyprint">1 m<br>0,1 m^2<br>20 ms^(-1)<br>400 kg m/s<br>100 kW</pre>';
$string['previewerror'] = 'Önizleme mevcut değil. Rastgele değişkenler, genel değişkenler, parçaların yerel değişkenleri ve cevapları tanımınızı kontrol edin. Orijinal hata mesajı:';
$string['privacy:metadata'] = 'Formüller soru türü eklentisi herhangi bir kişisel veri saklamaz.';
$string['qtextpreview'] = 'Önizleme';
$string['questiontext'] = 'Soru metni';
$string['questiontext_help'] = 'Normal soru metnine ek olarak, burada genel değişkenleri ve yer tutucuları da kullanabilirsiniz.

Genel değişkenler değerleri ile değiştirilecek ve yer tutucular parçalarla değiştirilecektir.
<tt> A, B, C </tt> ve <tt> #1, #2, #3 </tt> değişkenleri ile basit bir örnek:

<pre class="prettyprint"> {A}+{B}?<br>{#1}<br> {A}-{B}?<br>{#2}<br>{C}/{B}?<br>{#3}</pre>\'in sonucu nedir';
$string['relerror'] = 'Bağıl hata';
$string['renew'] = 'Güncelleme';
$string['ruleid'] = 'Temel dönüştürme kuralları';
$string['ruleid_help'] = 'Bu soru tipinde yerleşik bir birim dönüştürme sistemi ve temel dönüştürme kuralları vardır.

Temel olanı, standart birimleri dönüştürecek olan "Ortak SI birimi" kurallarıdır
uzunluk birimi gibi, örneğin km, m, cm ve mm. Bu seçeneğin hiçbir
hiçbir birim kullanılmamışsa etkili olur.';
$string['settingusepopup'] = 'Araç ipuçlarını kullanma';
$string['settingusepopup_desc'] = 'Doğru cevabı ve geri bildirimi bir araç ipucunda gösterme';
$string['subqoptions'] = 'Birim ayarları';
$string['subqtext'] = 'Bölüm metni';
$string['subqtext_help'] = 'Bölüm metni ve cevap alanlarının yerleri burada belirtilebilir.  Cevap alanlarının yerlerini belirtmek için kullanılabilecek yer tutucular şunlardır:

 <pre class="prettyprint">{_0}<br>{_1}<br>{_2}<br>...<br>{_u}</pre>

 <tt> {_0}, {_1}, {_2} </tt>, değerler için farklı giriş alanlarıdır ve <tt> {_u} </tt>, birim için giriş alanıdır.

 Tüm eksik alanlar, bölüm metninin sonuna otomatik olarak eklenir.  <tt> {_0}, {_u} </tt> art arda belirtilirse ve yalnızca bir cevap alanı ve birim varsa, yani <tt> {_0}{_u} </tt> özel bir durumdur. hem cevap hem de birim için tek bir uzun giriş cevap alanında birleştirilecektir.';
$string['unit'] = 'Birim';
$string['unitpenalty'] = 'Yanlış birim için düşüm (0-1)*';
$string['unitpenalty_help'] = 'Bu seçenek, yanlış birim için öğrenciyi cezalandırmak istediğiniz işareti belirtir.

Bu seçenek 0 ile 1 arasında bir değer alır. 1 değerini alırsa, birim ve cevap
not alabilmek için aynı anda doğru olmalıdır. Bu birim
ve cevap tek bir varlık olarak değerlendirilir. Öte yandan, eğer
değeri 0 ise, öğrenciler sadece doğru cevap için tam puan alabilirler, tüm rastgele
dizesinin yanıtın sonunda hiçbir etkisi olmayacaktır.

Bu nedenle, cevabın ilişkili bir birimi olmadığında 1 değerinin kullanılması önerilir.';
$string['unsupportedformulafunction'] = '{$a} işlevi desteklenmiyor';
$string['vars1'] = 'Yerel değişkenler';
$string['vars1_help'] = 'Burada değişkenleri, genel değişkenlerin soru düzeyinde tanımlandığı şekilde tanımlayabilirsiniz. Burada tanımlanan değişkenler, bölümün yanıtında veya geri bildiriminde kullanılabilir.';
$string['vars2'] = 'Not verme değişkenleri';
$string['vars2_help'] = 'Tüm yerel değişkenler ve öğrencinin yanıtları burada kullanılabilir.  Gelişmiş kullanımlar için belgelere bakın.';
$string['vars2_link'] = 'https://moodleformulas.org/';
$string['varsdata'] = 'Örnek veri kümeleri';
$string['varsglobal'] = 'Genel değişkenler';
$string['varsglobal_help'] = 'Formüller, örneklenen rastgele değişkenleri manipüle etmek için burada belirtilebilir (all rasgele değişkenler burada mevcuttur). The full list of mathematical functions and operators is given in the documentation.

<pre class="prettyprint">a = 1.11111;<br>b = exp(3);<br>c = A + a + b;<br>d = sin(1. 5*pi()) + c;<br>e = round(a, 0);<br>f = [0,1,2,3][A];<br>g = ["zero","one","two","three"][A];<br>distance = sqrt(a*a + b*b);</pre>';
$string['varsglobal_link'] = 'https://moodleformulas.org/';
$string['varsrandom'] = 'Rastgele değişkenler';
$string['varsrandom_help'] = 'Her denemenin başında bu değişkenler için yeni rasgele değerler üretilir.  Bu olabilir
 seçim için bir dizi öğe tanımlayarak yapılabilir:

 <pre class="prettyprint">A = {1, 2, 3};<br>C = {[1, -1], [2, -2], [3, -3]};<br>E = {10:100:10, 100, 1000};</pre>

 Öğeler sayılar, dizeler veya bunların listeleri olabilir.  Yeni bir girişimin başlangıcında, kümeden bir eleman çekilecek ve değişkene atanacaktır.
 soldaki.  Ayrıca, bir sayı kümesi için 10:100:10 gibi aralık gösterimini kullanabilirsiniz (yukarıdaki örnek E\'ye bakın).  </p>';
$string['varsrandom_link'] = 'https://moodleformulas.org/';
$string['varsstatistics'] = 'İstatistikler';
$string['yougotnright'] = 'Bu sorunun {$a->num} kısmını doğru cevapla.';
