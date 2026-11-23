<?php
// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'qtype_geogebra'
 *
 * @package        qtype_geogebra
 * @author         Christoph Stadlbauer <christoph.stadlbauer@geogebra.org>
 * @copyright  (c) International GeoGebra Institute 2014
 * @license        http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['pluginname'] = 'GeoGebra';
$string['pluginname_link'] = 'question/type/geogebra';$string['addconstraints'] = 'Değişkenlere kısıtlar (koşullar) ekle.';
$string['addmorevarblanks'] = '{no} ek değişken(ler) için boşluklar';
$string['answerinvalid'] = 'Yanıtınızdaki cevap-zinciri geçersizdir. Bu olamaz.';
$string['answermissing'] = 'Yanıtınızdaki cevap eksiktir. Muhtemelen JavaScript, Tarayıcıda çalışmıyor veya bilinmeyen bir hata oluştu.';
$string['answervar'] = 'Otomatik notlandırma için değişkenler';
$string['answervar_help'] = 'Otomatik notlandırma için: Öğrenci soruyu (kısmen) çözdüğünde, GeoGebra\'da doğru değeri alan mantıksal nesnenin adı. Mantıksal nesneler için bütün notların toplamı. Eğer herhangi bir kombinasyon %100-ü aşıyorsa soru doğrudur fakat toplamı tam olarak %100 olan en az bir kombinasyon var olmalıdır. El ile notlandırma için boş bırakınız.';
$string['applet_advanced_settings'] = 'Gelişmiş Ayarlar...';
$string['constraints'] = 'Kısıtlar (koşullar)';
$string['constraints_help'] = 'Değişkenler için sürgü seçenekleri kullanılarak ifade edilemeyen, a<b gibi, herhangi bir kısıt var mı? Virgülle ayrılmış. Desteklenen ilişkiler: <, <=, >, >=. Eğer bir eşitliğe ihtiyaç duyuyorsanız, aynı değişkeni GeoGebra çalışma sayfasını oluştururken kullanmalısınız. Dinamik sınırlar (yani sürgünün min/max değerleri için değişken kullanımı) desteklenmemektedir.';
$string['constraintswrongortoohard'] = '{$a->inequalities} yanlıştır veya karşılanması çok güçtür, {$a->time} saniye içerisinde {$a->tries} kere denedik. Belki ileride daha iyi bir metot kullanırız...';
$string['dragndrop'] = 'GeoGebra dosyasını, GeoGebra aplet kısmındaki herhangi bir yere sürükleyin ve bırakın';
$string['enable_label_drags'] = 'Etiketlerin Sürüklenmesine İzin Ver.';
$string['enable_right_click'] = 'Sağ Tık ve Klavye Düzenlemeye izin ver';
$string['enable_shift_drag_zoom'] = 'Shift-Sürükleme & Yakınlaştırmaya izin ver';
$string['feedback'] = 'Değişken doğru iken geri bildirim';
$string['feedback_help'] = 'Geri bildirim, değişkenin GeoGebra dosyasındaki başlığından otomatik olarak alındı.';
$string['geogebraapplet'] = 'GeoGebra Applet';
$string['getvars'] = 'Applet\'dan rastgele hale getirilebilecek değişkenleri al';
$string['ggbfilemissing'] = 'Yanıtınızdaki taban64 zinciri eksiktir. Muhtemelen JavaScript, Tarayıcıda çalışmıyor veya bilinmeyen bir hata oluştu.';
$string['ggbturl'] = 'GeoGebra Çalışma Sayfasına ait URL veya ID';
$string['ggbturl_help'] = 'GeoGebra\'de paylaş düğmesini kullanıp bağlantıyı kopyalayıp yapıştırabilir veya GeoGebra havuzunu kullanabilirsiniz. Applet ve parametreler veri tabanına yüklendi; applet, talep edilmedikçe GeoGebra\'den yeniden yüklenmeyecektir. Applet\'ın sadece ID veya paylaşım anahtarının sunulması desteklenmektedir.';
$string['ggbxmlmissing'] = 'Yanıtınızdaki XML zinciri eksiktir. Muhtemelen JavaScript, Tarayıcıda çalışmıyor veya bilinmeyen bir hata oluştu';
$string['invalidinequality'] = '{$a} geçersizdir';
$string['isexercise'] = 'Soruyu kontrol etmek için GeoGebra-Alıştırma kullan.';
$string['isexercise_help'] = 'The applet contains user-defined tools which can be used for automatic checking of the exercise.\nBeware: All answers below are not applicable in this case!';
$string['israndomized'] = 'Rastgele hale getirilecek herhangi bir değişken var mı?';
$string['loadapplet'] = 'Applet\'ı (yeniden) yükle ve göster';
$string['loadapplet_help'] = 'Applet\'ı GeoGebra\'den (yeniden) yükleyiniz ve yeni versiyonu GeoGebra\'den veri tabanına depolayınız.';
$string['mineqmax'] = 'Rastgele hale getirmek için Min ve Max, {$a} değişkeni için düzgün olarak belirtilmedi, ya sürgü\'nün min ve max değerlerini belirtmediniz ya da eleman bir sürgü değil. Muhtemelen bunu GeoGebra dosyanızda düzeltmelisiniz.';
$string['minplusstepgtmax'] = '{$a} değişkeni için; en küçük değer artı artış, en büyük değerden büyüktür, muhtemelen bunu GeoGebra dosyanızda düzeltmelisiniz.';
$string['noappletloaded'] = 'Applet yüklenmedi! URL\'nin doğruluğunu ve bağlantıyı seçtikten veya appletı (yeniden) yükledikten sonra bir applet görüp görmediğinizi kontrol ediniz.';
$string['nofractionsumeq1'] = 'Notların en az bir kombinasyonunun toplamı %100 olmalıdır';
$string['pluginname_help'] = 'Öğrencinin GeoGebra kullanarak çözebileceği sorular';
$string['pluginnameadding'] = 'Bir GeoGebra sorusu ekleme';
$string['pluginnameediting'] = 'Bir GeoGebra sorusu düzenleme';
$string['pluginnamesummary'] = 'Hesaplanmış soruların (Quiz alındığında), soruyu göstermek ve cevabı doğrulamak için GeoGebra kullanan versiyonu.';
$string['randomizedbutnovars'] = 'Sorunun rastgele hale getirilmesini seçtiniz, fakat rastgele hale getirilecek hiç bir değişken belirtmediniz.';
$string['randomizedvar'] = 'Rastgele hale getirilecek değişkenler';
$string['randomizedvar_help'] = 'Rastgele hale getirilecek değişkenler (virgül ile ayrılmış). Minimum, Maximum ve Artışı ifade etmek için GeoGebra\'da sürgü seçeneklerini kullanınız. Bu değişkenler aynı zamanda soru metninde, küme parantezleri arasında kullanılabilir, örneğin: {a}.';
$string['show_algebra_input'] = 'Giriş Çubuğunu Göster';
$string['show_menu_bar'] = 'Menüyü Göster';
$string['show_reset_icon'] = 'İnşayı Sıfırlama İkonunu Göster';
$string['show_tool_bar'] = 'Araç Çubuğunu Göster';
$string['stepzero'] = '{$a} değişkeni için artış 0\'dır; ya sürgü\'nün artışını belirlemediniz ya da bu eleman bir sürgü değildir. Muhtemelen bunu, GeoGebra dosyanızda düzeltmelisiniz.';
$string['useafile'] = '... veya bir ggb-dosya kullan';
$string['valuecheckedfor'] = 'GeoGebra\'da doğruluğu kontrol etmekte kullanılan Mantıksal Nesne.';
$string['variablenamewrong'] = 'GeoGebra dosyasında bu adda bir değişken bulunamadı.';
$string['variableno'] = 'Değişken {$a}';
$string['variables'] = 'Değişkenler';
$string['willbereadfromfile'] = 'GeoGebra\'dan okunacak... (yardım tuşuna bakınız)';
