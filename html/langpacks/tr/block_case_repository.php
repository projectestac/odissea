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
 * Strings for component 'block_case_repository', language 'tr', version '4.5'.
 *
 * @package     block_case_repository
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ILMS_YELLOW_MARKUP_LIMIT'] = 'Sarı';
$string['activity_learning_time'] = 'Beklenen öğrenme süresi';
$string['activity_social_requirement'] = 'Öğrenme modu';
$string['apply_metadata_presets'] = 'Üstveri varsayılan değerlerini uygula';
$string['button_dependencies'] = 'Bu öğrenme etkinliğine bağlı öğrenme etkinliklerini göster/gizle';
$string['button_dependent_on'] = 'Bu öğrenme etkinliğinin bağımlı olduğu ana öğrenme etkinliklerini göster/gizle';
$string['button_details'] = 'Bu öğrenme etkinliğinin ayrıntılarını göster/gizle';
$string['button_metadata'] = 'Bu öğrenme etkinliği için meta verileri göster/gizle';
$string['colgroup_currentactivity'] = 'Mevcut öğrenme etkinliği meta verileri';
$string['config_description_adjust2'] = '<p>Aşağıdaki koşul türleri seçilebilir:</p><dl><dt>(asla):</dt> <dd>Bu öznitelik için tanımlanmış bir kural yok. Bu öznitelik için ayarlanan diğer tüm değerler yok sayılır.</dd><dt>Değer küçük:</dt> <dd>İki özellik değeri arasındaki fark hesaplanır. Fark, koşulu karşılamak için verilen sınırdan negatif ve daha küçük olmalıdır. Bu, referans durumunun değerinin mevcut durumun değerinden verilen limitin çıkarılmasından daha küçük olduğu anlamına gelir.</dd><dt>Value great than:</dt> <dd>İki özellik değeri arasındaki fark hesaplanır. Fark pozitiftir ve koşulu karşılamak için verilen sınırdan büyüktür. Bu, referans durumunun öznitelik değerinin mevcut durumun değeri artı verilen limitten daha büyük olduğu anlamına gelir. </dd><dt>Fark büyüktür:</dt> <dd>İki özellik değeri arasındaki fark hesaplanır. İşaret dikkate alınmaz. Farkın mutlak değeri, koşulu karşılamak için verilen sınırdan büyüktür. Başka bir deyişle, referans vakanın öznitelik değeri, verilen sınır hakkında mevcut vakanın değerinden farklı olabilir.</dd></dl><p>Aşağıdaki karşılaştırma öznitelik türleri seçilebilir:</p><dl ><dt>Öğrenci üst verileri</dt> <dd>Mevcut öğrencinin tercihleri ile öğrencinin referans durumundaki tercihleri arasında karşılaştırma yapılır.</dd><dt>Öğrenme etkinliği üst verileri:</dt> <dd> Mevcut öğrencinin tercihleri ile referans durumundaki çözüm öğrenme etkinliğinin bir üst veri özelliği arasında karşılaştırma yapılır.</dd></dl><p>Aşağıdaki eylemler seçilebilir:</p><dl> <dt>Red durumu:</dt> <dd>Koşul karşılanırsa, uygun olmadığı varsayıldığından referans durum reddedilir. En iyi uyarlama çözümünü belirlemek için sonraki hesaplamalar için göz ardı edilir.</dd><dt>Ayarlama çözümü:</dt> <dd>Koşul sağlanırsa, durumun kısmen uygun olduğu varsayılır. Sistem tarafından öğrenciye bir çözüm olarak sunulabilir ancak alaka düzeyi, verilen <cite>strength</cite> değeri (gerekli!) tarafından azaltılır. Burada, 0. 3, orijinal değerin yüzde 30\'unun azaltılması, böylece orijinal alaka düzeyinin yüzde 70\'inin sonunda kalması anlamına gelir. 0.0 ile 1.0 arasında herhangi bir sayısal değer girebilirsiniz.</dd></dl>';
$string['config_description_adjust_checkbox'] = 'Bu kutuyu işaretleyerek değerlendirme sonuçlarını iyileştirmek için öğrenci uyarlaması için büyük/küçük harf ayarlamayı açabilirsiniz. Bu, uyarlanabilir kurs yapısını görüntülemek için gereken süreyi biraz artıracaktır.';
$string['config_description_case_count'] = 'Bu pozitif sayı, servis talebi havuzunda depolanacak azami vaka sayısını belirtir (varsayılan 1000). Yeni vakaların depolanması için boş alan elde etmek için bu sınıra ulaşıldığında önemsiz vakalar değiştirilir.<br/>Bu değeri değiştirirken dikkatli olun: Vaka havuzunda çok fazla vaka saklanırsa, öğrenci adaptasyonu için hesaplamalar uzun zaman alacaktır. çünkü bir çözüm elde etmek için büyük miktarda dava alınması gerekir. Vaka havuzunda birkaç vaka saklanırsa, uygun çözümleri depolamak için boş alan olmayacağından, öğrenci adaptasyonunun kalitesi istendiği kadar iyi olmayabilir.';
$string['config_description_casecompare'] = 'Durum karşılaştırma ağırlık faktörleri, daha yüksek nitelik gruplarının veya durumların benzerliğini hesaplamak için alt niteliklerin veya nitelik gruplarının benzerliğinin hangi derecede dikkate alındığını belirtmek için mevcut ve referans durumlar arasındaki karşılaştırmada kullanılır.<br/><br/>Siz 0.0 ve 1.0 aralığında sayısal değerler girebilir. Örneğin 0,05 değeri, bir özniteliğin, bir öznitelik grubunun diğer öznitelikleri ile birlikte yüzde 5\'lik önemle kabul edildiği anlamına gelir. Bu nedenle, bir öznitelik grubunun veya bir vakanın tüm ağırlıklarının toplamı <em>1.0\'a eşit olmalıdır</em> (veya yüzde 100).<br/>';
$string['config_description_defaults'] = 'Varsayılan olarak tüm dersler/etkinlikler için tüm aktivite meta veri değerleri boştur.<br/>Burada her aktivite modülü için kendi aktivite meta veri varsayılanlarınızı tanımlayabilirsiniz. Etkinlik meta veri değerleri, bir etkinlik oluşturulduğunda bu varsayılanlarla önceden ayarlanır ve daha sonra tek öğrenme etkinlikleri için yine de değişiklik yapılabilir.';
$string['config_description_half_value_time'] = 'Mantıksal kesinlik için yarı değer süresi, belirli bir öğrenci tercih değerindeki kesinliğin zaman içinde ne kadar azalacağını veya mantıksal belirsizliğin ne kadar güçlü büyüyeceğini belirtir. Verilen süre SI saniye cinsinden bir değerdir. Bu süreden sonra kesinlik yalnızca orijinal değerinin yarısı kadar yüksektir.<br/>Örneğin yarı değer süresi 31557600 SI saniye (tam 1 yıl) ise ve orijinal öznitelik değeri yüzde 80 kesinliğe sahipse kesinlik ilk yıl içinde yüzde 40\'a düşmüş olacaktır. Bir yıl sonra, bir kez daha yüzde 20\'ye düşecek.';
$string['config_description_leak_limit'] = 'Bu değer, mantıksal kesinliğin, yüksek mantıksal belirsizliği nedeniyle bir öğrenci tercih değerinin veritabanından kaldırılması gereken bir miktarda azaldığında sınırı belirtir.<br/>Örneğin, 0,1 değeri, aşağıdaki durumlarda değerin silineceğini belirtir. kalan kesinlik yüzde 10\'a ulaştı. Bu, 1 yıllık bir yarı değer süresi ile, değerin ilk belirlenmesinden yaklaşık 3 yıl ve 4 aylık bir süre sonra bir değerin kaldırılacağı anlamına gelir.';
$string['config_description_replace'] = 'Bu değer (0,0 ile 1,0 arasında, varsayılan 0,9) çok benzer iki durumun ne zaman tek bir durumda birleştirilebileceğini belirtir. 0,95\'lik bir sınır, örneğin, benzerliği yüzde 95 (veya daha fazla) olan iki vakanın, servis talebi havuzunda depolama alanından tasarruf etmek için birleştirilebileceği anlamına gelir.';
$string['config_difftype_diff'] = 'Farkı daha büyük';
$string['config_difftype_greater_than'] = 'Değeri daha büyük';
$string['config_difftype_lesser_than'] = 'Değeri daha düşük';
$string['config_legend_difftype'] = 'Koşul';
$string['config_legend_general'] = 'Genel sınırlar';
$string['config_save_preset'] = 'Bu modül için ön ayarı kaydet';
$string['config_submit'] = 'Değişiklikleri kaydet';
$string['count_records'] = 'kayıt bulundu.';
$string['description_editing'] = 'Bu sayfa, değiştirilecek ve yeniden düzenlenecek düzenleme modundaki tüm öğrenme etkinliklerini görüntüler.<br/>Daha sonra, sunum modunda bunlar iLMS istatistiklerine göre gruplandırılacaktır. Bu şekilde her öğrenciye kendi kişisel yeteneklerine ve tercihlerine göre özelleştirilmiş öğrenme etkinliklerini ziyaret etmeleri için bazı ipuçları verilebilir.';
$string['description_last_activity'] = 'Aşağıdaki etkinliği en son ziyaret ettiniz. Devam ettirilebilir veya tekrar edilebilir.';
$string['description_recommended_activities'] = 'Daha sonra aşağıdaki öğrenme etkinliklerini ziyaret edebilirsiniz.<br/>Geçmişte, sizinkine benzer tercihlere ve yeteneklere sahip öğrenciler, yeşil yıldız şeklindeki işaretlenen etkinlikleri seçerek başarılı oldular.';
$string['edit_button_delete'] = 'Sil';
$string['edit_button_save_changes'] = 'Değişiklikleri Kaydet';
$string['error_invalid_activity'] = 'Geçersiz öğrenme etkinliği kimliği.<br/>Mevcut kursta bu kimliğe sahip bir öğrenme etkinliği bulunmadığından öğrenme etkinliğinin özellikleri değiştirilemez.';
$string['formatilms'] = 'Uyarlanabilir iLMS Kursu';
$string['headline_editing'] = 'Öğrenme etkinlikleri (Düzenleme modu)';
$string['headline_recommended_activities'] = 'Sonraki öğrenme etkinlikleri';
$string['legend_activity_meta'] = 'Öğrenme etkinliği meta verileri';
$string['legend_dependent_on_add'] = 'Yeni ana etkinlik ekle';
$string['legend_history'] = 'Ziyaret edilen öğrenme etkinlikleri';
$string['markup2_bad'] = 'Bu öğrenme içeriği yalnızca birkaç durumda işlenmelidir';
$string['markup2_good'] = 'Bu öğrenme içeriği daha sonra işlenmelidir';
$string['markup2_medium'] = 'Bu öğrenme içeriği de işlenebilir';
$string['usermeta_feedback_submit'] = 'Gönder!';
