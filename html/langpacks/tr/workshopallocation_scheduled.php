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
 * Strings for component 'workshopallocation_scheduled', language 'tr', version '4.5'.
 *
 * @package     workshopallocation_scheduled
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['crontask'] = 'Zamanlanmış atamaları arka planda işleme';
$string['currentstatus'] = 'Şu anki durum';
$string['currentstatusexecution'] = 'Durum';
$string['currentstatusexecution1'] = '{$a->datetime} tarihinde yürütüldü';
$string['currentstatusexecution2'] = '{$a->datetime} tarihinde tekrar yürütülecek';
$string['currentstatusexecution3'] = '{$a->datetime} tarihinde yürütülecek';
$string['currentstatusexecution4'] = 'Uygulanma bekleniyor';
$string['currentstatusnext'] = 'Sonraki yürütme';
$string['currentstatusnext_help'] = 'Bazı durumlarda, atama yapılmış olsa bile otomatik olarak yeniden atama yapılacak şekilde ayarlanır. Bu durum, örneğin gönderimler için son tarih uzatılmışsa meydana gelebilir.';
$string['currentstatusreset'] = 'Sıfırla';
$string['currentstatusreset_help'] = 'Formu bu onay kutusu işaretlenmiş olarak kaydetmek, mevcut durumun sıfırlanmasına neden olacaktır. Önceki yürütmeyle ilgili tüm bilgiler kaldırılacaktır, böylece atama yeniden yürütülebilir (yukarıda etkinleştirildiyse).';
$string['currentstatusresetinfo'] = 'Yürütme sonucunu sıfırlamak için kutucuğu işaretleyin ve formu kaydedin';
$string['currentstatusresult'] = 'Son yürütme sonucu';
$string['enablescheduled'] = 'Planlı atamayı etkinleştirin';
$string['enablescheduledinfo'] = 'Gönderim aşamasının sonunda gönderimleri otomatik olarak atayın';
$string['pluginname'] = 'Planlanmış atama';
$string['privacy:metadata'] = 'Planlanmış atama eklentisi herhangi bir kişisel veriyi saklamaz. Kimin kimi değerlendireceğine ilişkin gerçek kişisel veriler Çalıştay modülünün kendisi tarafından saklanır ve değerlendirme ayrıntılarının dışa aktarılması için temel oluşturur.';
$string['randomallocationsettings'] = 'Atama ayarlaı';
$string['randomallocationsettings_help'] = 'Rastgele dağıtım yöntemi için parametreler burada tanımlanır. Bunlar, gönderimlerin gerçek dağıtımı için rastgele dağıtım eklentisi tarafından kullanılacaktır.';
$string['resultdisabled'] = 'Planlanan dağıtım devre dışı bırakıldı';
$string['resultenabled'] = 'Planlı atama etkinleştirildi';
$string['resultexecuted'] = 'Başarılı';
$string['resultfailed'] = 'Gönderimler otomatik olarak atanamıyo';
$string['resultfailedconfig'] = 'Planlanmış atama yapınlı yapılandırılmış';
$string['resultfaileddeadline'] = 'Çalıştay için belirlenen son teslim tarihi yok';
$string['resultfailedphase'] = 'Çalıştay teslim aşamasında değil';
$string['resultvoid'] = 'Gönderim atanamadı';
$string['resultvoiddeadline'] = 'Son gönderim tarihinden sonra henüz değil';
$string['resultvoidexecuted'] = 'Atama daha önce yapılmış';
$string['scheduledallocationsettings'] = 'Planlanmış atama ayarları';
$string['scheduledallocationsettings_help'] = 'Etkinleştirilirse, zamanlanmış tahsis yöntemi, gönderim aşamasının sonunda değerlendirme için gönderimleri otomatik olarak tahsis edecektir. Aşamanın sonu \'Gönderimlerin son tarihi\' atölye ayarında tanımlanabilir.

Dahili olarak, rastgele dağıtım yöntemi bu formda önceden tanımlanmış parametrelerle yürütülür. Bu, programlı dağıtımın, öğretmenin aşağıdaki dağıtım ayarlarını kullanarak gönderim aşamasının sonunda rastgele dağıtımı kendisi yürütmüş gibi çalıştığı anlamına gelir.

Son gönderim tarihinden önce çalıştayı manuel olarak değerlendirme aşamasına geçirirseniz planlanan dağıtımın *yürütülmeyeceğini* unutmayın. Bu durumda gönderimleri kendinizin dağıtması gerekir. Programlı dağıtım yöntemi, otomatik faz değiştirme özelliği ile birlikte kullanıldığında özellikle kullanışlıdır.';
$string['setup'] = 'Planlanmış atamayı ayalayın';
