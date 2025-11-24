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
 * Strings for component 'gradingform_guide', language 'tr', version '4.5'.
 *
 * @package     gradingform_guide
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomment'] = 'Sık kullanılan yorum ekle';
$string['addcriterion'] = 'Ölçüt ekle';
$string['additionalcomments'] = 'Ek Yorumlar';
$string['additionalcommentsforcriterion'] = '{$a} kriteri için ek yorumlar';
$string['alwaysshowdefinition'] = 'Klavuz açıklamalarını öğrencilere gösterin';
$string['backtoediting'] = 'Düzenlemeye geri dön';
$string['clicktocopy'] = 'Bu metni ölçütlerin geri bildirimine kopyalamak için tıklayın';
$string['clicktoedit'] = 'Düzenlemek için tıkla';
$string['clicktoeditname'] = 'Ölçüt adını düzenlemek için tıklayın';
$string['comment'] = 'Yorum';
$string['commentpickerforcriterion'] = 'Ek yorumlar için {$a} sık kullanılan yorum seçici';
$string['comments'] = 'Sık kullanılan yorumlar';
$string['commentsdelete'] = 'Yorumu sil';
$string['commentsempty'] = 'Yorumu düzenlemek için tıkla';
$string['commentsmovedown'] = 'Aşağı taşı';
$string['commentsmoveup'] = 'Yukarı taşı';
$string['confirmdeletecriterion'] = 'Bu öğeyi silmek istediğinizden emin misiniz?';
$string['confirmdeletelevel'] = 'Bu seviyeyi silmek istediğinizden emin misiniz?';
$string['criterion'] = 'Ölçüt adı';
$string['criteriondelete'] = 'Ölçütü sil';
$string['criterionempty'] = 'Ölçütü düzenlemek için tıklayın';
$string['criterionmovedown'] = 'Aşağı taşı';
$string['criterionmoveup'] = 'Yukarı taşı';
$string['criterionname'] = 'Ölçüt adı';
$string['criterionremark'] = '{$a} ölçütünün yeniden işaretlenmesi';
$string['definemarkingguide'] = 'Değerlendirme kılavuzunu tanımlayın';
$string['description'] = 'Açıklama';
$string['descriptionmarkers'] = 'Değerlendirici için açıklama';
$string['descriptionstudents'] = 'Öğrenciler için açıklama';
$string['err_maxscoreisnegative'] = 'Maksimum puan geçerli değil, negatif değerlere izin verilmiyor';
$string['err_maxscorenotnumeric'] = 'Ölçüt en yüksek puanı sayısal olmalıdır';
$string['err_nocomment'] = 'Yorum boş olamaz';
$string['err_nodescription'] = 'Öğrenci açıklaması boş olamaz';
$string['err_nodescriptionmarkers'] = 'Değerlendirici açıklaması boş olamaz';
$string['err_nomaxscore'] = 'Ölçüt en yüksek puanı boş olamaz';
$string['err_noshortname'] = 'Ölçüt adı boş olamaz';
$string['err_scoreinvalid'] = '\'{$a->criterianame}\' e verilen puan geçerli değil, maksimum puan: {$a->maxscore}';
$string['err_scoreisnegative'] = '\'{$a->criterianame}\' e verilen puan geçerli değil, negatif değerler izin verilmez';
$string['err_shortnametoolong'] = 'Ölçüt adı 256 karakterden az olmalı';
$string['gradingof'] = '{$a} puanlanıyor';
$string['guide'] = 'Değerlendirme kılavuzu';
$string['guidemappingexplained'] = 'UYARI: Değerlendirme kılavuzunuzunda en yüksek <b> {$a->maxscore} puanı ver </b> olarak belirlenmiştir ancak etkinliğinizde belirlenen en yüksek not {$a->modulegrade} Değerlendirme kılavuzunuzda belirlenen en yüksek not olacaktır <br /> Modülde en üst seviyede notlandırılabilir. <br /> Ara puanlar sırasıyla dönüştürülecek ve mevcut en yakın nota yuvarlanacaktır.';
$string['guidenotcompleted'] = 'Lütfen her ölçüt için geçerli bir not verin';
$string['guideoptions'] = 'Değerlendirme kılavuzu seçenekleri';
$string['guidestatus'] = 'Mevcut Değerlendirme kılavuzu durumu';
$string['hidemarkerdesc'] = 'Değerlendirici kriter açıklamalarını gizle';
$string['hidestudentdesc'] = 'Öğrenci ölçüt açıklamalarını gizle';
$string['informationforcriterion'] = '{$a} bilgi';
$string['insertcomment'] = 'Sık kullanılan yorumu ekleyin';
$string['maxscore'] = 'Maksimum puan';
$string['name'] = 'Adı';
$string['needregrademessage'] = 'Bu öğrenciye not verdikten sonra değerlendirme klavuzu tanımı değiştirildi. Öğrenci değerlendirme kılavuzunu kontrol edip notu güncelleyene kadar bu değerlendirme kılavuzunu göremez.';
$string['outof'] = '$a} üzerinden puan';
$string['pluginname'] = 'Değerlendirme kılavuzu';
$string['previewmarkingguide'] = 'Değerlendirme kılavuzunu görüntüle';
$string['privacy:metadata:criterionid'] = 'Gelişmiş puanlama için bir kriter tanımlayıcısı.';
$string['privacy:metadata:fillingssummary'] = 'Bir kullanıcının notu ve değerlendirme kılavuzu için geri bildirim hakkındaki bilgileri depolar.';
$string['privacy:metadata:instanceid'] = 'Bir etkinlik tarafından kullanılan bir notun tanımlayıcısı.';
$string['privacy:metadata:preference:showmarkerdesc'] = 'Değerlendirme kriteri açıklamalarının gösterilip gösterilmeyeceği';
$string['privacy:metadata:preference:showstudentdesc'] = 'Öğrenci kriteri açıklamalarının gösterilip gösterilmeyeceği';
$string['privacy:metadata:remark'] = 'Bu not kriteri ile ilgili açıklamalar.';
$string['privacy:metadata:score'] = 'Bu not kriteri için bir puan.';
$string['regrademessage1'] = 'Şimdiye kadar puanlama kullanılan bir değereledirme kılavuzu değişiklikleri kaydetmek üzeresiniz. Mevcut puanları gözden geçirilmesi gerekip gerekmediğini lütfen belirtiniz. Bunu ayarlarsanız, değerlendirme klavuzu öğeleri yeniden düzenlenene kadar öğrencilerden gizlenecektir.';
$string['regrademessage5'] = 'Önceden puanlamada kullanılmış bir değerlendirme kılavuzunda  önemli değişiklikler yapmak üzeresiniz. Not defteri değeri değişmeyecek, ancak değerlendici kılavuzu öğeleri yeniden düzenlenene kadar öğrencilerden gizlenecektir.';
$string['regradeoption0'] = 'Yeniden not verme için işaret yok';
$string['regradeoption1'] = 'Notların işaretleri';
$string['remark_help'] = 'Bu kriterle ilgili ek yorumlarınızı giriniz.';
$string['restoredfromdraft'] = 'NOT: Bu kişiye not vermek için yapılan son deneme düzgün kaydedilmediği için taslak notlar geri yüklenmiştir. Bu değişiklikleri iptal etmek istiyorsanız aşağıdaki \'İptal\' düğmesini kullanın.';
$string['save'] = 'Kaydet';
$string['saveguide'] = 'Değerlendirme kılavuzunu kaydedin ve hazır hale getirin';
$string['saveguidedraft'] = 'Taslak olarak kaydet';
$string['score'] = 'puan';
$string['score_help'] = '0 ile {$a->maxscore} arasında {$a->criterion} için bir puan girin.';
$string['scoreforcriterion'] = '{$a} score';
$string['showmarkerdesc'] = 'Değerlendirici kriter açıklamalarını göster';
$string['showmarkspercriterionstudents'] = 'Ölçüt bazında işaretleri öğrencilere gösterin';
$string['showstudentdesc'] = 'Öğrenci ölçüt açıklamalarını göster';
