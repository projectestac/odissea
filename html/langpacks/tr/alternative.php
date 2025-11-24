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
 * Strings for component 'alternative', language 'tr', version '4.5'.
 *
 * @package     alternative
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alternative'] = 'alternatif';
$string['alternativename'] = 'Etkinlik adı';
$string['alternativeoptions'] = 'Bu alternatif için seçenekler';
$string['alternativeoptions_help'] = 'Her alternatif, kullanıcıya birkaç seçenek gösterir.
Bu seçenekler bu formda açıklanmıştır.
Başlık ayarlanmazsa, seçenek oluşturulmaz (ancak varsa silinir).
Bu alan setlerinden sonra buton ile yeni seçenek ekleyebilirsiniz.';
$string['changeallowed'] = 'İzin verilen değişiklik';
$string['changeallowed_help'] = 'İşaretlenmezse, kullanıcı seçimini değiştiremez.
Öğretmenler ve \'alternatifler: zorla kayıt\' yeteneğine sahip tüm roller, herkesin seçimini değiştirebilecek.';
$string['chooseteammembers'] = 'Lütfen ekip üyelerinizi seçin';
$string['chooseuser'] = 'Lütfen kaydolacak kullanıcıyı seçin';
$string['csv'] = 'CSV İçe Aktarma';
$string['csv2ndfield'] = '2. alan (yerler), 0 = limitsiz sayısal olmalıdır.';
$string['csv_help'] = 'Her satır Başlıktan oluşur; Yerler ; Tarih ; Açıklama';
$string['csvbadfieldnb'] = 'Kötü alan sayısı: 4 yerine {$a}.';
$string['csvunableopen'] = 'CSV dosyası açılamıyor.';
$string['datecomment'] = 'Tarih';
$string['datecomment_help'] = 'Bu alan herhangi bir metin içerebilir, ancak bir tarih veya tarih aralığı içindir.';
$string['displaycompact'] = 'Kompakt ekran';
$string['displaycompact_help'] = 'İşaretlenmezse, her seçenek açık bir açıklama ile birkaç satırda görüntülenecektir.
	İşaretlenirse, her seçenek katlanmış bir açıklama ile bir satırda görüntülenecektir.';
$string['fieldsetcsv'] = 'Seçenekleri CSV dosyasından içe aktar';
$string['fieldsetmultiple'] = 'Çoklu kayıt ayarları';
$string['fieldsetteam'] = 'Ekipler için ayarlar';
$string['forceregister'] = 'Kayıtları zorla';
$string['groupdependent'] = 'Gruba bağlı';
$string['groupdependent_help'] = 'Bu kutu işaretlenirse, her kullanıcıya gösterilen metin kullanıcının grubuna bağlı olacaktır.';
$string['individual'] = 'Bireysel';
$string['instructionsforcereg'] = 'Kendiniz kaydolamazsınız, ancak rolünüz öğrencileri herhangi bir seçeneğe kaydetmenize izin verir.';
$string['instructionsgeneral'] = '';
$string['instructionsmultiple'] = '{$a->multiplemin} ve {$a->multiplemax} seçenekleri arasından seçim yapmalısınız.';
$string['instructionsmultiplenomax'] = 'En az {$a->multiplemin} seçeneği seçmelisiniz.';
$string['instructionsnochange'] = 'Bir seçim kaydedildikten sonra değiştirilmesine izin verilmeyecektir.';
$string['instructionsteam'] = 'Takım olarak kayıt olabilirsiniz. Bir takımın {$a->teammin} ile {$a->teammax} arasında üyeye sahip olması gerekir.
Ekibinizin diğer üyelerini kaydettikçe ekip lideri olacaksınız';
$string['messageprovider:reminder'] = 'mod/alternatif öğrenci hatırlatıcısı';
$string['modulename'] = 'Alternatif';
$string['modulename_help'] = 'Alternatif modül, öğrencilerin belirli bir listede bir veya birkaç seçeneği kaydetmelerine olanak tanır.';
$string['modulenameplural'] = 'alternatifler';
$string['multiple'] = 'çoklu';
$string['multipleenable'] = 'Bu ayarları etkinleştir';
$string['multipleenable_help'] = 'Her kullanıcının minimum ve maksimum değerler arasında birkaç seçeneği kaydetmesi gerekir.';
$string['multiplemax'] = 'Kullanıcı maksimum kayıtları';
$string['multiplemin'] = 'Kullanıcı minimum kayıtları';
$string['noselectedoption'] = 'Bir seçenek seçmelisiniz';
$string['noselectedusers'] = 'Kullanıcı seçilmedi';
$string['option'] = 'Seçenek';
$string['optionintro'] = 'Açıklama';
$string['optionname'] = 'Başlık';
$string['options'] = 'Seçenekler';
$string['places'] = 'Yerler';
$string['placesavail'] = 'müsait yerler';
$string['pluginadministration'] = 'alternatif yönetim';
$string['pluginname'] = 'alternatif';
$string['potentialteammembers'] = 'Potansiyel ekip üyeleri';
$string['private'] = 'Özel';
$string['public'] = 'halka açık';
$string['publicreg'] = 'Genel kayıtlar';
$string['publicreg_help'] = 'Kayıtlar şunlar olabilir:<dl>
<dt>genel</dt> <dd>herkese gösterilir,</dd>
<dt>aynı grupta herkese açık</dt> <dd>kullanıcılar, paylaşımda bulunan kullanıcıların kayıtlarını görebilir. en az bir grup</dd>
<dt>özel</dt> <dd>yalnızca ileri düzey kullanıcılara (öğretmenler vb.) gösterilir.</dd>
</dl>';
$string['register'] = 'Kayıt ol';
$string['registrationforbidden'] = 'Burada kayıt olamazsınız.';
$string['registrations'] = 'Kayıtlar';
$string['registrationsaved'] = 'Kayıt seçiminiz kaydedildi.';
$string['regteams'] = 'Kayıtlı ekipler';
$string['remains'] = 'Kalır';
$string['reminderBefore'] = '[[AlterUntil]]\'den önce';
$string['reminderFull'] = '“[[AlterName]]” etkinliğinde bir seçim yapmalısınız';
$string['reminderFullHtml'] = '“<i>[[AlterName]]</i>” etkinliğinde bir seçim yapmalısınız';
$string['reminderSmall'] = '“[[AlterName]]” etkinliğinde bir seçim yapmalısınız';
$string['reminderSubject'] = 'Hatırlatma : Alternatif seçenekler arasından seçim yapmalısınız';
$string['sendReminder'] = 'Hatırlatıcıyı gönder';
$string['separator'] = 'Ayırıcı';
$string['students'] = 'öğrenciler';
$string['synthesis'] = 'sentez';
$string['synthfree'] = 'Bedava';
$string['synthlimitplaces'] = 'Sınırlı yer seçenekleri (bireysel)';
$string['synthlimitteamplaces'] = 'Sınırlı yer seçenekleri (ekip)';
$string['synthplaces'] = 'Yerler (bireysel)';
$string['synthpotential'] = 'potansiyel öğrenciler';
$string['synthregistered'] = 'Kayıtlı öğrenciler';
$string['synthreserved'] = 'Ayrılmış (sınırlı arasında)';
$string['synthteamplaces'] = 'Yerler (ekip)';
$string['synthunlimitplaces'] = 'Sınırsız yer seçeneği (bireysel)';
$string['synthunlimitteamplaces'] = 'Sınırsız yer seçeneği (ekip)';
$string['synthunregistered'] = 'Kayıtsız öğrenciler';
$string['team'] = 'Takım';
$string['teamenable'] = 'Ekip ayarlarını etkinleştir';
$string['teamenable_help'] = 'Minimum ve maksimum takım boyutlarını ayarlayın.';
$string['teamleader'] = 'Takım Lideri';
$string['teamleadernotamember'] = 'Ekip lideri, ekibinin bir üyesi olmamalıdır.';
$string['teammax'] = 'Maksimum takım boyutu';
$string['teammin'] = 'Min team size';
$string['teamplaces'] = 'Takım yerleri';
$string['teamplacesavail'] = 'Ekipler için uygun yerler';
$string['teams'] = 'Takımlar';
$string['unique'] = 'Benzersiz';
$string['unregister'] = 'Kaydı Sil';
$string['unregisterLeader'] = 'Dikkat: Bir liderin kaydını silmek, tüm ekibin kaydının silinmesine neden olacaktır.';
$string['uploadoverwrites'] = 'Dikkat: yeni bir dosya yüklemek, önceki tüm kayıtları ve seçenekleri siler.';
$string['userinfo'] = '{$a} seçeneklerine kaydoldu.';
$string['usersnotreg'] = 'Kayıtlı olmayan kullanıcılar';
$string['usersreg'] = 'Kayıtlı kullanıcılar';
$string['viewallregistrations'] = 'Kayıtları görüntüle';
$string['viewallusersnotreg'] = 'Kayıtlı olmayan kullanıcıları görüntüle';
$string['viewallusersreg'] = 'Kayıtlı kullanıcıları görüntüle';
$string['viewsynthesis'] = 'Sentezi görüntüle';
$string['viewteams'] = 'Ekipleri görüntüle';
$string['wrongteamsize'] = 'Takımınızın büyüklüğü izin verilen sınırlar arasında değil.';
