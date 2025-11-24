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
 * Strings for component 'qtype_random', language 'tr', version '4.5'.
 *
 * @package     qtype_random
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configselectmanualquestions'] = 'Rastgele soru tipi, bir kategoriden rastgele soru seçimi yaparken el ile not verilen bir soruyu seçebilir mi?';
$string['includingsubcategories'] = 'Alt kategoriler dahil';
$string['pluginname'] = 'Rastgele';
$string['pluginname_help'] = 'Rastgele bir soru böyle bir soru türü değildir, ancak rastgele seçilen bir sorunun belirli bir kategoriden bir etkinliğe eklenmesinin bir yoludur.';
$string['pluginnameediting'] = 'Rastgele soru düzenleniyor';
$string['privacy:metadata'] = 'Rastgele soru tipi eklentisi herhangi bir kişisel veri saklamaz.';
$string['randomqname'] = 'Rastgele ({$a})';
$string['randomqnamefromtop'] = 'Hatalı random soru! Lütfen bu soruyu silin.';
$string['randomqnamefromtoptags'] = 'Hatalı random soru! Lütfen bu soruyu silin.';
$string['randomqnametags'] = 'Rastgele ({$a->category}, etiketler: {$a->tags})';
$string['randomqplusname'] = 'Rastgele ({$a} ve alt kategoriler)';
$string['randomqplusnamecourse'] = 'Rastgele (Bu kurstaki herhangi bir kategori)';
$string['randomqplusnamecoursecat'] = 'Rastgele (Kurs kategorisi {$a} içindeki herhangi bir kategori)';
$string['randomqplusnamecoursecattags'] = 'Rastgele (Kurs kategorisi içindeki herhangi bir kategori {$a->category}, etiketler: {$a->tags})';
$string['randomqplusnamecoursetags'] = 'Rastgele (Bu kurstaki herhangi bir kategori, etiketler: {$a->tags})';
$string['randomqplusnamemodule'] = 'Rastgele (Bu sınavın herhangi bir kategorisi)';
$string['randomqplusnamemoduletags'] = 'Rastgele (Bu testin herhangi bir kategorisi, etiketler: {$a->tags})';
$string['randomqplusnamesystem'] = 'Rastgele (Sistem düzeyinde herhangi bir kategori)';
$string['randomqplusnamesystemtags'] = 'Random (Herhangi bir sistem düzeyi kategori, etiketler: {$a->tags})';
$string['randomqplusnametags'] = 'Random ({$a->category} ve alt kategoriler, etiketler: {$a->tags})';
$string['selectedby'] = '{$a->questionname} {$a->randomname} tarafından seçildi';
$string['selectmanualquestions'] = 'Rastgele sorular el ile not verilen soruları kullanabilir.';
$string['taskunusedrandomscleanup'] = 'Kullanılmayan random soruları kaldırın';
