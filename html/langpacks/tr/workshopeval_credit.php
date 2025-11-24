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
 * Strings for component 'workshopeval_credit', language 'tr', version '4.5'.
 *
 * @package     workshopeval_credit
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['mode'] = 'Değerlendirme modu';
$string['mode_desc'] = 'Varsayılan  değerlendirme modu puanlamasında _Katılımcı katkısı_yöntemi kullanılmıştır.';
$string['mode_help'] = 'Bu mod ödevlerin nasıl puanlanacağını belirler.

*Tümü veya hiçbiri - İncelemeci tüm ilgili gönderimleri maksimum puanlama için değerlendirmesi gerekir, aksi halde gönderimler sıfır olarak  puanlanır.
* Nispi- Elde edilen puan değerlendirmelerin sayısı ile doğru orantılıdır. Tüm ilgili gönderimler değerlendirildiğinde ise, İncelemeci maksimum notu elde edecektir; ilgili gönderilerin yarısı değerlendirilir ise, incelemeci maksimum puanın 50% \'sin elde edecektir.
En az bir tane -İncelemeci maksimum puanı elde etmek için en az bir ilgili gönderimi değerlendirmesi gerekir.';
$string['modeall'] = 'Tümü veya hiçbiri';
$string['modeone'] = 'En az bir tane';
$string['modeproportional'] = 'Nispi';
$string['pluginname'] = 'Nispi katılım';
$string['privacy:metadata'] = 'Üyelik hesabı herhangi bir kişisel veri depolamaz';
