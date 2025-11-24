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
 * Strings for component 'qtype_calculated', language 'tr', version '4.5'.
 *
 * @package     qtype_calculated
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additem'] = 'Öğe ekle';
$string['addmoreanswerblanks'] = 'Başka cevap seçeneği ekle';
$string['addsets'] = 'Küme ekle';
$string['answerdisplay'] = 'Cevap ekranı';
$string['answerformula'] = 'Cevap {$a} formülü';
$string['answerhdr'] = 'Cevap';
$string['answerstoleranceparam'] = 'Tolerans parametrelerine cevaplar';
$string['answerwithtolerance'] = '{$a->answer} (±{$a->tolerance} {$a->tolerancetype})';
$string['anyvalue'] = 'Herhangi bir değer';
$string['atleastoneanswer'] = 'En az bir cevap vermeniz gerekiyor.';
$string['atleastonerealdataset'] = 'Söz konusu metinde en az bir gerçek veri kümesi bulunmalıdır';
$string['atleastonewildcard'] = 'Cevap formülünde veya soru metninde en az bir joker karekter yer olmalıdır';
$string['calcdistribution'] = 'Dağılım';
$string['calclength'] = 'Ondalık alanı';
$string['calcmax'] = 'En fazla';
$string['calcmin'] = 'En az';
$string['choosedatasetproperties'] = 'Joker karakter veri kümesi özelliklerini seçin';
$string['choosedatasetproperties_help'] = 'Veri kümesi, bir joker karakter yerine yerleştirilen bir değer kümesidir. Belirli bir soru için özel bir veri kümesi veya kategorideki hesaplanan diğer sorgular için kullanılabilecek paylaşılan bir veri kümesi oluşturabilirsiniz.';
$string['correctanswerformula'] = 'Doğru cevap formülü';
$string['correctanswershows'] = 'Doğru cevap gösterir';
$string['correctanswershowsformat'] = 'Biçim';
$string['correctfeedback'] = 'Herhangi bir doğru cevap için';
$string['dataitemdefined'] = 'önceden tanımlanmış {$a} sayısal değerleri ile kullanılabilir';
$string['datasetrole'] = 'joker karakterler <strong> {x ..} </strong>, veri kümesindeki sayısal bir değerle değiştirilir';
$string['decimals'] = 'birlikte {$a}';
$string['deleteitem'] = 'Ögeyi sil';
$string['deletelastitem'] = 'Son ögeyi sil';
$string['distributionoption'] = 'Dağılım seçeneğini seçin';
$string['editdatasets'] = 'Joker karakter veri kümelerini düzenleme';
$string['editdatasets_help'] = 'Joker karakter değerleri, joker karakter  alanına bir sayı girip ekleme düğmesini tıklatarak oluşturulabilir. Otomatik olarak 10 veya daha fazla değer üretmek için, ekle düğmesini tıklamadan önce gereken değer sayısını seçin. Düzgün dağılım, sınırlar arasındaki herhangi bir değerin eşit derecede üretileceği anlamına gelir; Loguniform dağılımı, alt sınıra doğru değerlerin daha olası olduğu anlamına gelir.';
$string['editdatasets_link'] = 'soru/tür/hesaplanan';
$string['existingcategory1'] = 'hali hazırda var olan ve paylaşılan bir veri kümesini kullanacaktır';
$string['existingcategory2'] = 'bu kategorideki diğer sorular tarafından da kullanılan mevcut bir dosya kümesinden bir dosya';
$string['existingcategory3'] = 'bu kategorideki diğer sorular tarafından da kullanılan mevcut bir bağlantı grubundan bir bağlantı';
$string['forceregeneration'] = 'zorla  yenileme';
$string['forceregenerationall'] = 'tüm joker karakterlerin yenilenmesini zorla';
$string['forceregenerationshared'] = 'yalnızca paylaşılmayan joker karakterlerin yeniden oluşturulmasını zorla';
$string['functiontakesatleasttwo'] = '{$a} işlevi en az iki bağımsız değişkene sahip olmalıdır';
$string['functiontakesnoargs'] = '{$a} işlevi herhangi bir değişken almaz';
$string['functiontakesonearg'] = '{$a} işlevi tam olarak bir bağımsız değişkene sahip olmalıdır';
$string['functiontakesoneortwoargs'] = '{$a} işlevi bir veya iki bağımsız değişkene sahip olmalıdır';
$string['functiontakestwoargs'] = '{$a} işlevi tam olarak iki bağımsız değişkene sahip olmalıdır';
$string['generatevalue'] = 'Aralığında yeni bir değer oluşturun';
$string['getnextnow'] = 'Şimdi yeni \'Eklenecek Öğe\' alın';
$string['hexanotallowed'] = '<strong>{$a->name}</strong> hexadecimal format değeri {$a->value} veri kümesine izin verilmiyor';
$string['illegalformulasyntax'] = '\'{$a}\' ile başlayan geçersiz formül sözdizimi';
$string['incorrectfeedback'] = 'Herhangi bir yanlış cevap için';
$string['itemno'] = 'Öğe {$a}';
$string['itemscount'] = 'Öğe <br /> Sayısı';
$string['itemtoadd'] = 'Eklenecek öğe';
$string['keptcategory1'] = 'daha önce olduğu gibi aynı mevcut paylaşılan veri kümesini kullanacaktır';
$string['keptcategory2'] = 'aynı kategorideki bir dosya, daha önce olduğu gibi tekrar kullanılabilir dosyalar kümesi';
$string['keptcategory3'] = 'aynı kategoriden bir bağlantı, daha önce olduğu gibi tekrar kullanılabilir bağlantılar dizisi';
$string['keptlocal1'] = 'daha önce olduğu gibi aynı mevcut özel veri kümesini kullanacaktır';
$string['keptlocal2'] = 'aynı sorudan bir dosya, daha önce olduğu gibi özel dosyalar kümesi';
$string['keptlocal3'] = 'aynı sorudan gelen bir bağlantı, daha önce olduğu gibi özel bağlantılar dizisi';
$string['lengthoption'] = 'Uzunluk seçeneğini seçin';
$string['loguniform'] = 'Loguniform';
$string['loguniformbit'] = 'Loguniform dağılımdan gelen rakamlar';
$string['makecopynextpage'] = 'Sonraki sayfa (yeni soru)';
$string['mandatoryhdr'] = 'Cevaplarda zorunlu joker kartlar mevcuttur';
$string['max'] = 'Maks';
$string['min'] = 'Min';
$string['minmax'] = 'Değer Aralığı';
$string['missingformula'] = 'Eksik formül';
$string['missingname'] = 'Soru adı eksik';
$string['missingquestiontext'] = 'Soru metni eksik';
$string['mustenteraformulaorstar'] = 'Bir formül veya \'*\' girmeniz gerekir.';
$string['newcategory1'] = 'yeni bir paylaşılan veri kümesi kullanacak';
$string['newcategory2'] = 'bu kategorideki diğer sorular tarafından da kullanılabilen yeni bir dosya grubundaki bir dosya';
$string['newcategory3'] = 'bu kategorideki diğer sorular tarafından da kullanılabilecek yeni bir bağlantı grubundan bir bağlantı';
$string['newlocal1'] = 'yeni bir özel veri kümesi kullanacak';
$string['newlocal2'] = 'Yalnızca bu soru tarafından kullanılacak yeni bir dosya grubundaki bir dosya';
$string['newlocal3'] = 'Yalnızca bu soru tarafından kullanılacak yeni bir dizi bağlantıdan bir bağlantı';
$string['newsetwildcardvalues'] = 'joker karakter (ler) yeni değer ayarlamaları';
$string['nextitemtoadd'] = 'Sonraki \'Eklenecek Öge\'';
$string['nextpage'] = 'Sonraki Sayfa';
$string['nocoherencequestionsdatyasetcategory'] = 'Soru kimliği {$a->qid} için kategori kimliği {$a->qcat}, paylaşılan joker {$a->name} kategori kimliği {$a->sharedcat} ile aynı değil. Soruyu düzenleyin.';
$string['nocommaallowed'] = 'Kullanılamaz, 0.013 veya 1.3e-2\'de olduğu şekilde kullanın.';
$string['nodataset'] = 'hiçbir şey - bu joker kart değil';
$string['nosharedwildcard'] = 'Bu kategoride paylaşılan bir joker kart yok';
$string['notvalidnumber'] = 'Joker karakter değeri geçerli bir numara değil';
$string['oneanswertrueansweroutsidelimits'] = 'Gerçek değer sınırlarının dışında en az bir doğru cevap. <br /> Gelişmiş parametreler olarak verilen cevapların tolerans ayarlarını değiştirin.';
$string['param'] = 'Parametre {<strong>{$a}</strong>}';
$string['partiallycorrectfeedback'] = 'Kısmen doğru cevap için';
$string['pluginname'] = 'Hesaplanan';
$string['pluginname_help'] = 'Hesaplanan sorular, sınav alındığında bireysel değerlerle ikame edilen kıvrımlı parantez içindeki joker karakterleri kullanarak bireysel sayısal soruların oluşturulmasını sağlar. Örneğin, "Uzunluk {l} ve genişlik {w} olan bir dikdörtgenin alanı nedir?" Sorusu. Doğru formül "{l} * {w}" olurdu (burada * çarpımı gösterir).';
$string['pluginname_link'] = 'soru/tür/hesaplanan';
$string['pluginnameadding'] = 'Hesaplanan soru ekleniyor';
$string['pluginnameediting'] = 'Hesaplanan soru düzenleniyor';
$string['pluginnamesummary'] = 'Hesaplanan sorular sayısal sorular gibi olsa da, kullanılan sayılar sınav yapılırken bir kümeden rasgele olarak seçilir.';
$string['possiblehdr'] = 'Yalnızca soru metninde bulunan olası joker karakterler';
$string['privacy:metadata'] = 'Hesaplanan soru türü eklentisi herhangi bir kişisel veri saklamaz.';
$string['questiondatasets'] = 'Soru veri setleri';
$string['questiondatasets_help'] = 'Her bir sorunda kullanılacak joker karekterlerin soru veri kümeleri';
$string['questionstoredname'] = 'Soru saklanan isimi';
$string['replacewithrandom'] = 'Rastgele bir değerle değiştirin';
$string['reuseifpossible'] = 'varsa önceki değeri tekrar kullanma';
$string['setno'] = '{$a} ayarla';
$string['setwildcardvalues'] = 'Joker kart (ler) i ayarla';
$string['sharedwildcard'] = 'Paylaşılan joker karakter{<strong> {$a} </strong>}';
$string['sharedwildcardname'] = 'Paylaşılan joker karekter';
$string['sharedwildcards'] = 'Paylaşılan joker karakter';
$string['showitems'] = 'Göster';
$string['significantfigures'] = 'birlikte {$a}';
$string['significantfiguresformat'] = 'anlamlı rakamlar';
$string['synchronize'] = 'Paylaşılan veri kümesindeki verileri diğer bir sorudaki soruyla senkronize edin';
$string['synchronizeno'] = 'Senkronize etme';
$string['synchronizeyes'] = 'Senkronize';
$string['synchronizeyesdisplay'] = 'Senkronize edin ve paylaşılan veri kümelerini soru adının öneki olarak görüntüleyin';
$string['tolerance'] = 'Tolerans ±';
$string['tolerancetype'] = 'Tür';
$string['trueanswerinsidelimits'] = 'Doğru yanıt: {$a->correct} gerçek değerin {$a->true} sınırları içinde';
$string['trueansweroutsidelimits'] = '<span class="error">HATA Doğru yanıt:{$a->correct} gerçek değerin {$a->true}</span> sınırları dışında';
$string['uniform'] = 'Aynılama';
$string['uniformbit'] = 'aynılama dağılımdan ondalık,';
$string['unsupportedformulafunction'] = 'fonksiyon {$a} desteklenmiyor';
$string['updatecategory'] = 'Kategoriyi güncelle';
$string['updatedatasetparam'] = 'Veri kümeleri parametrelerini güncelleme';
$string['updatetolerancesparam'] = 'Cevapların tolerans parametrelerini güncelleyin';
$string['updatewildcardvalues'] = 'Joker kart değerlerini güncelle';
$string['useadvance'] = 'Hataları görmek için ilerleme düğmesini kullanın';
$string['usedinquestion'] = 'Soruda kullanıldı';
$string['wildcard'] = 'Joker kart {<strong>{$a}</strong>} kodu';
$string['wildcardparam'] = 'Değerleri üretmek için kullanılan joker karakter parametreleri';
$string['wildcardrole'] = 'Joker karakterler <strong> {x ..} </strong>, üretilen değerlerden sayısal bir değerle değiştirilir';
$string['wildcards'] = 'Joker karekterler {a}...{z}';
$string['wildcardvalues'] = 'joker kart(lar) değerleri';
$string['wildcardvaluesgenerated'] = 'Üretilen joker kartların değerleri';
$string['youmustaddatleastoneitem'] = 'Bu soruyu kaydetmeden önce en az bir veri kümesi öğesi eklemeniz gerekir.';
$string['youmustaddatleastonevalue'] = 'Bu soruyu kaydetmeden önce en az bir joker karakter kümesi eklemeniz gerekir.';
$string['zerosignificantfiguresnotallowed'] = 'Doğru cevap sıfır anlamlı rakamlara sahip olamaz!';
