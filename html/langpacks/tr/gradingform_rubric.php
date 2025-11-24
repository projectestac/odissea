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
 * Strings for component 'gradingform_rubric', language 'tr', version '4.5'.
 *
 * @package     gradingform_rubric
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcriterion'] = 'Ölçüt ekle';
$string['additionalfeedback'] = 'Ek geri bildirim';
$string['alwaysshowdefinition'] = 'Kullanıcıların rubriği (dereceli puanlama anahtarı) önizlemesine izin verin (aksi halde puanlamadan sonra görüntülenir)';
$string['backtoediting'] = 'Düzenlemeye geri dön';
$string['confirmdeletecriterion'] = 'Bu ölçütü silmek istediğinizden emin misiniz?';
$string['confirmdeletelevel'] = 'Bu seviyeyi silmek istediğinizden emin misiniz?';
$string['criterion'] = 'Ölçüt {$a}';
$string['criterionaddlevel'] = 'Seviye ekle';
$string['criteriondelete'] = 'Ölçütü sil';
$string['criterionduplicate'] = 'Ölçütü çoğalt';
$string['criterionempty'] = 'Ölçütü düzenlemek için tıkla';
$string['criterionmovedown'] = 'Aşağı taşı';
$string['criterionmoveup'] = 'Yukarı taşı';
$string['criterionremark'] = 'Ölçüt için yeni işaretleme {$a->description}: {$a->remark}';
$string['definerubric'] = 'Rubrik tanımla';
$string['description'] = 'Açıklama';
$string['enableremarks'] = 'Not verenin her ölçüt için yeni metin işaretleri eklemesine izin verin';
$string['err_mintwolevels'] = 'Her ölçüt en az iki seviyeye sahip olmalıdır';
$string['err_nocriteria'] = 'Rubrik, en az bir ölçüt içermelidir';
$string['err_nodefinition'] = 'Seviye tanımı boş olamaz';
$string['err_nodescription'] = 'Ölçüt açıklaması boş olamaz';
$string['err_novariations'] = 'Ölçüt seviyeleri aynı puana eşit sayılamaz';
$string['err_scoreformat'] = 'Her seviye için puan sayısı geçerli bir sayı olmalıdır';
$string['err_totalscore'] = 'Rubrik ile not verilirken mümkün olan azami puan sayısı sıfırdan fazla olmalı';
$string['gradingof'] = '{$a} puanlanlama';
$string['level'] = 'Seviye {$a->definition}, {$a->score} puanları.';
$string['leveldefinition'] = '{$a} seviyesi tanımı';
$string['leveldelete'] = '{$a} seviyesini sil';
$string['levelempty'] = 'Seviyeyi düzenlemek için tıkla';
$string['levelsgroup'] = 'Seviye grubu';
$string['lockzeropoints'] = 'Puanlamayı, en düşük notun, rubrik için elde edilebilir en düşük not olmasına göre hesapla';
$string['lockzeropoints_help'] = 'Bu ayar yalnızca her bir kriter için minimum puan sayısının toplamı 0\'dan büyükse geçerlidir. Eğer seçilirse, etkinliğin minimum puanı dereceli puanlama anahtarı için elde edilebilecek en düşük not olacaktır. Seçilmezse, dereceli puanlama anahtarı için mümkün olan en düşük puan, etkinlik için mevcut olan en düşük notla eşleştirilecektir (ölçek kullanılmadığı sürece bu not 0\'dır).';
$string['name'] = 'Adı';
$string['needregrademessage'] = 'Bu öğrenci notlandırıldıktan sonra değerlendirme formu tanımı değiştirildi. Öğrenci, senaryoyu kontrol edip notu güncelleyene kadar bu yazıyı göremez.';
$string['notset'] = 'Ayarlanmadı';
$string['pluginname'] = 'Rubrik';
$string['pointsvalue'] = '{$a} puan';
$string['previewrubric'] = 'Rubrik önizleme';
$string['privacy:metadata:criterionid'] = 'Not verilen belirli bir kriter için bir tanımlayıcı.';
$string['privacy:metadata:fillingssummary'] = 'Dereceli puanlama anahtarı tarafından oluşturulan kullanıcının notuyla ilgili bilgileri depolar.';
$string['privacy:metadata:instanceid'] = 'Bir etkinlikteki bir notla ilgili tanımlayıcı.';
$string['privacy:metadata:levelid'] = 'Rubrikten elde edilen düzey.';
$string['privacy:metadata:remark'] = 'Değerlendirilen dereceli puanlama anahtarı kriteri ile ilgili açıklamalar.';
$string['regrademessage1'] = 'Şimdiye kadar puanlamada kullanılan bir dereceli puanlama anahtarındaki değişiklikleri kaydetmek üzeresiniz. Mevcut puanların gözden geçirilmesi gerekip gerekmediğini lütfen belirtiniz. Bunu ayarlarsanız, öğe yeniden düzenleninceye kadar dereceli puanlama anahtarı öğrencilerden gizlenecektir.';
$string['regrademessage5'] = 'Önceden puanlamada kullanılan dereceli puanlama anahtarında  önemli değişiklikleri kaydetmek üzeresiniz. Not defteri değeri değişmez, ancak puanlama formu yeniden düzenlenene kadar öğrencilerden gizlenecektir.';
$string['regradeoption0'] = 'Yeniden not verme için işaretleme yapma';
$string['regradeoption1'] = 'Yeniden not verme için işaret';
$string['restoredfromdraft'] = 'NOT: Bu kişiyie not vermeye yönelik son girişim uygun şekilde kaydedilmedi, böylece taslak notları geri yüklendi. Bu değişiklikleri iptal etmek istiyorsanız aşağıdaki \'İptal\'i kullanın.';
$string['rubric'] = 'Rubrik';
$string['rubricmapping'] = 'Puan eşleştirmesi haritalama kuralları';
$string['rubricmappingexplained'] = 'Bu dereceli puanlama anahtarı  için mümkün olan en düşük puan, <b> {$a->minscore}</b> \'dır. Etkinlik için mevcut en düşük nota dönüştürülecektir (bir ölçek kullanılmadığı sürece 0\'dır). <b> {$a->maxscore} puan </b> maksimum puanı maksimum nota dönüştürülecektir. Orta dereceli puanlar sırasıyla dönüştürülecektir.

Not vermek için bir ölçek kullanılıyorsa, puan yuvarlanır ve art arda tamsayı gibi ölçek elemanlarına dönüştürülür.

Bu not hesaplama, formu düzenleyip \'Puan en az 0 olan bir puna göre hesapla\' kutusunu işaretleyerek değiştirilebilir.';
$string['rubricnotcompleted'] = 'Lütfen her ölçüt için bir şeyler seçin';
$string['rubricoptions'] = 'Rubrik seçenekleri';
$string['rubricstatus'] = 'Şu anki işaret durumu';
$string['save'] = 'Kaydet';
$string['saverubric'] = 'Rubriği kaydedin ve hazır hale getirin';
$string['saverubricdraft'] = 'Taslak olarak kaydet';
$string['scoreinputforlevel'] = '{$a} seviyesindeki puan girişi';
$string['scorepostfix'] = '{$a} puan';
$string['showdescriptionstudent'] = 'Not verme işlemi yapılacak kişilere derceli puanlama anahtarının açıklamasını göster';
$string['showdescriptionteacher'] = 'Değerlendirme sırasında rubriğin açıklamasını göster';
$string['showremarksstudent'] = 'Değerlendirilmekte olanlar için yeniden işaretler gösterin';
$string['showscorestudent'] = 'Değerlendirilmek üzere her seviye için puanları gösterin';
$string['showscoreteacher'] = 'Değerlendirme sırasında her seviye için puanları göster';
$string['sortlevelsasc'] = 'Seviyeler için sıralama düzeni:';
$string['sortlevelsasc0'] = 'Puan sayısına göre azalan';
$string['sortlevelsasc1'] = 'Puan sayısına göre artan';
$string['zerolevelsabsent'] = 'Uyarı: Bu rubrik (dereceli puanlama anahtarı) için mümkün olan en düşük puan 0 değil; Bu durum, etkinlik için beklenmedik notlara neden olabilir. Bunu önlemek için, her bir ölçüt 0 puanlı bir seviyeye sahip olmalıdır. <br>
Not vermek için bir ölçek kullanılıyorsa ve rubrikteki minimum düzeyler ölçeğin minimum değerine karşılık geliyorsa, bu uyarı göz ardı edilebilir.';
