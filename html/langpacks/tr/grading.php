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
 * Strings for component 'grading', language 'tr', version '4.5'.
 *
 * @package     grading
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activemethodinfo'] = '\'{$a->area}\' alanı için aktif puanlama yöntemi olarak \'{$a-> method}\' seçildi';
$string['activemethodinfonone'] = '\'{$a->area}\' alanı için gelişmiş puanlama yöntemi seçilmedi. Basit doğrudan puanlama kullanılacaktır.';
$string['changeactivemethod'] = 'Aktif puanlama yöntemini şuna değiştir';
$string['clicktoclose'] = 'kapatmak için tıklayın';
$string['error:gradingunavailable'] = 'Gelişmiş puanlama yöntemi doğru ayarlanmamış.  Lütfen forum ayarlarında tüm forum puanlama seçeneklerini kontrol edin.';
$string['error:notinrange'] = 'Geçersiz not \'{$a->grade}\' sağlandı.  Notlar 0 ile {$a->maxgrade} arasında olmalıdır.';
$string['exc_gradingformelement'] = 'Puanlama öğesini bir örneği oluşturulamadı';
$string['formnotavailable'] = 'Gelişmiş bir puanlama yöntemi seçildi, ancak puan verme formunun hala tanımlanması gerekiyor.';
$string['gradingformunavailable'] = 'Lütfen dikkat: gelişmiş puanlama formu şu anda hazır değildir. Formun geçerli bir durumu gelene kadar basit puanlama yöntemi kullanılacaktır.';
$string['gradingmanagement'] = 'Gelişmiş puanlama';
$string['gradingmanagementtitle'] = 'Gelişmiş puanlama: {$a->component} ({$a->area})';
$string['gradingmethod'] = 'Puanlama yöntemi';
$string['gradingmethod_help'] = 'Verilen bağlamda notların hesaplanmasında kullanılması gereken gelişmiş puanlama yöntemini seçin.

Gelişmiş puanlamayı devre dışı bırakmak ve varsayılan puanlama mekanizmasına geri dönmek için \'Basit doğrudan puanlamayı\' seçin.';
$string['gradingmethodnone'] = 'Basit doğrudan not verme';
$string['gradingmethods'] = 'Puanlama yöntemleri';
$string['manageactionclone'] = 'Şablondan yeni puanlama formu oluşturma';
$string['manageactiondelete'] = 'Şu anda tanımlanmış formu sil';
$string['manageactiondeleteconfirm'] = '\'{$a->formname}\' puanlama formunu ve \'{$a->component}\' den ({$a->area}) tüm ilişkili bilgileri sileceksiniz. Lütfen aşağıdaki sonuçların anlaşıldığından emin olun:
* Bu işlemi geri almanın bir yolu yoktur.
* Bu formu silmeden \'Basit doğrudan puanlamaya dahil olmak üzere başka bir puanlama yöntemine geçebilirsiniz.
* Puanlama formlarının doldurulmasıyla ilgili tüm bilgiler kaybolacaktır.
* Not defterinde saklanan hesaplanan sonuç puanlar etkilenmeyecektir. Bununla birlikte, nasıl hesaplandıklarının açıklaması kullanılamayacak.
* Bu işlem, bu formun diğer etkinliklerde sonuçlandırılmış kopyalarını etkilemez.';
$string['manageactiondeletedone'] = 'Form başarıyla silindi';
$string['manageactionedit'] = 'Geçerli form tanımını düzenleme';
$string['manageactionnew'] = 'Yeni puanlama formunu sıfırdan tanımlayın';
$string['manageactionshare'] = 'Formu yeni bir şablon olarak yayınla';
$string['manageactionshareconfirm'] = '\'{$a}\' puanlama formunun bir kopyasını yeni bir genel şablon olarak kaydedersiniz. Sitenizdeki diğer kullanıcılar etkinliklerinde bu şablondan yeni puanlama formları oluşturabilirler.';
$string['manageactionsharedone'] = 'Form şablon olarak başarıyla kaydedildi';
$string['noitemid'] = 'Puanlama mümkün değil.  Puanlanan öğe mevcut değil.';
$string['nosharedformfound'] = 'Şablon bulunamadı';
$string['privacy:metadata:grading_definitions'] = 'Puanlanabilir bir alanda tanımlanan gelişmiş bir not verme formu hakkında temel bilgiler.';
$string['privacy:metadata:grading_definitions:areaid'] = 'Gelişmiş puanlama formunun tanımlandığı alan kimliği.';
$string['privacy:metadata:grading_definitions:copiedfromid'] = 'Bunun kopyalandığı puanlama tanımı kimliği.';
$string['privacy:metadata:grading_definitions:description'] = 'Gelişmiş puanlama yönteminin açıklaması.';
$string['privacy:metadata:grading_definitions:method'] = 'Tanımdan sorumlu olan puanlama yöntemi.';
$string['privacy:metadata:grading_definitions:name'] = 'Gelişmiş puanlama tanımının adı.';
$string['privacy:metadata:grading_definitions:options'] = 'Bu puanlama tanımına ait  bazı ayarlar.';
$string['privacy:metadata:grading_definitions:status'] = 'Bu gelişmiş puanlama tanımının durumu';
$string['privacy:metadata:grading_definitions:timecopied'] = 'Puanlama tanımının kopyalandığı tarih.';
$string['privacy:metadata:grading_definitions:timecreated'] = 'Puanlama tanımının oluşturuduğu tarih.';
$string['privacy:metadata:grading_definitions:timemodified'] = 'Puanlama tanımının en son değiştirildiği tarih.';
$string['privacy:metadata:grading_definitions:usercreated'] = 'Puanlama tanımını oluşturan kullanıcı kimliği.';
$string['privacy:metadata:grading_definitions:usermodified'] = 'Puanlama tanımını en son değiştiren kullanıcı kimliği.';
$string['privacy:metadata:grading_instances'] = 'Bir değerlendiric tarafından değerlendirilen puanlanabilir öğe için değerlendirme kaydı.';
$string['privacy:metadata:grading_instances:feedback'] = 'Kullanıcı tarafından verilen geri bildirim.';
$string['privacy:metadata:grading_instances:feedbackformat'] = 'Kullanıcı tarafından verilen geri bildirimin metin biçimi.';
$string['privacy:metadata:grading_instances:raterid'] = 'Puanlama örneğini değerlendiren kullanıcı kimliği.';
$string['privacy:metadata:grading_instances:rawgrade'] = 'Puan verma örneğinin puanı.';
$string['privacy:metadata:grading_instances:status'] = 'Puanlama örneğinin durumu.';
$string['privacy:metadata:grading_instances:timemodified'] = 'Puanlama örneğinin en son değiştirildiği tarih.';
$string['privacy:metadata:gradingformpluginsummary'] = 'Puanlama yöntemi için veriler.';
$string['searchownforms'] = 'Formlarımı ekle';
$string['searchtemplate'] = 'Puanlama formlarını arama';
$string['searchtemplate_help'] = 'Bir puanlama formunu arayabilir ve yeni puanlama formu için bir şablon olarak kullanabilirsiniz. Sadece form adında, açıklamasında veya formun kendisinde görünmesi gereken kelimeleri yazın. Bir cümle aramak için, sorguyu çift tırnak işareti içine alın.

Varsayılan olarak, yalnızca paylaşılan şablonlar olarak kaydedilen puanlama formları arama sonuçlarına dahil edilir. Ayrıca, kendi puanlama formlarınızın tümünü arama sonuçlarına ekleyebilirsiniz. Böylelikle, puanlama formlarınızı paylaşmadan bunları yeniden kullanabilirsiniz. Yalnızca \'Kullanıma hazır\' olarak işaretlenmiş formlar bu şekilde yeniden kullanılabilir.';
$string['statusdraft'] = 'Taslak';
$string['statusready'] = 'Kullanıma hazır';
$string['templatedelete'] = 'Sil';
$string['templatedeleteconfirm'] = '\'{$a}\' paylaşılan şablonunu sileceksiniz. Şablonu silmek, oluşturulan mevcut formları etkilemez.';
$string['templateedit'] = 'Düzenle';
$string['templatepick'] = 'Bu şablonu kullan';
$string['templatepickconfirm'] = '\'{$a->component}\' de ({$a->area}) yeni puanlama formu için \'{$a->formname}\' puanlama formunu bir şablon olarak kullanmak istiyor musunuz?';
$string['templatepickownform'] = 'Bu formu şablon olarak kullan';
$string['templatesource'] = 'Bölge: {$a->component} ({$a->area})';
$string['templatetypeown'] = 'Kendi formunuz';
$string['templatetypeshared'] = 'Paylaşılan şablon';
