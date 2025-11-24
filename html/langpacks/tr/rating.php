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
 * Strings for component 'rating', language 'tr', version '4.5'.
 *
 * @package     rating
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregateavg'] = 'Puan ortalaması';
$string['aggregatecount'] = 'Puan sayısı';
$string['aggregatemax'] = 'Maksimum puan';
$string['aggregatemin'] = 'Minimum puan';
$string['aggregatenone'] = 'Puan yok';
$string['aggregatesum'] = 'Puan toplamı';
$string['aggregatetype'] = 'Toplama türü';
$string['aggregatetype_help'] = 'Toplam tür, not defterinde  nihai notu oluşturmak için puanların nasıl birleştirildiğini tanımlar.

* Puan ortalaması - Tüm puanların ortalaması
* Puan sayısı - Puanlanan öğelerin sayısı nihai nota dönüşür. Toplamın etkinliğin maksimum notunu aşamayacağına dikkat edin.
* Enbüyük- En yüksek puan nihai nota dönüşür
* Enküçük- En küçük puanı nihai nota dönüşür
* Toplam - Tüm puanlar birlikte eklenir. Toplamın, etkinliğin maksimum notunu aşamayacağına dikkat edin.

"Puanlama Yok" seçilirse, etkinlik not defterinde görünmez.';
$string['allowratings'] = 'Öğelerin değerlendirilmesine izin verilsin mi?';
$string['allratingsforitem'] = 'Yapılan tüm puanlamalar';
$string['capabilitychecknotavailable'] = 'Kapasite kontrolü mevcut değil önce etkinlik kaydedilmiş olmalıdır';
$string['couldnotdeleteratings'] = 'Maalesef, bunlara daha önce  not verildiği için silinemiyor';
$string['norate'] = 'Öğelerin değerlendirilmesine izin verilmiyor!';
$string['noratings'] = 'Puanlama yapılmadı';
$string['noviewanyrate'] = 'Üretilmiş etiketler için yalnızca sonuçlara bakabilirsiniz';
$string['noviewrate'] = 'Bu öğeyi puanlamaya yetkiniz yok';
$string['privacy:metadata:rating'] = 'Kullanıcı tarafından girilen değerlendirme, değerlendirilen öğenin bir eşlemesiyle birlikte saklanır.';
$string['privacy:metadata:rating:rating'] = 'Kullanıcının girdiği sayısal değerlendirme.';
$string['privacy:metadata:rating:timecreated'] = 'Değerlendirmenin ilk yapıldığı zaman.';
$string['privacy:metadata:rating:timemodified'] = 'Değerlendirmenin en son güncellendiği zaman.';
$string['privacy:metadata:rating:userid'] = 'Değerlendirmenin yapan kullanıcı.';
$string['rate'] = 'Değerlendir';
$string['ratepermissiondenied'] = 'Bu öğeyi puanlama izniniz yok';
$string['rating'] = 'Puanlama';
$string['ratinginvalid'] = 'Geçersiz değerlendirme';
$string['ratings'] = 'Puanlar';
$string['ratingtime'] = 'Değerlendirilmiş ögeleri bu aralıkta sınırla:';
$string['rolewarning'] = 'Not verme yetkisi olan roller';
$string['rolewarning_help'] = 'Puanlama iznine sahip roller, moodle/rating:not verme özelliğine ve etkinliğe özel herhangi bir puanlama özelliğine sahip rollerdir.  İzinler sayfasından daha fazla role puanlama izni verebilirsiniz.';
$string['scaleselectionrequired'] = 'Puanlama toplama türünü seçerken, bir ölçek kullanmayı veya maksimum puan belirlemeyi de seçmelisiniz.';
