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
 * Strings for component 'tool_assignmentupgrade', language 'tr', version '4.5'.
 *
 * @package     tool_assignmentupgrade
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['areyousure'] = 'Emin misiniz?';
$string['areyousuremessage'] = '"{$a->name}" ödevini yükseltmek istediğinizden emin misiniz?';
$string['assignmentid'] = 'Ödev ID';
$string['assignmentnotfound'] = 'Ödev bulunamadı (id={$a})';
$string['assignmentsperpage'] = 'Sayfa başı ödev sayısı';
$string['assignmenttype'] = 'Ödev türü';
$string['backtoindex'] = 'Dizine geri dön';
$string['batchoperations'] = 'Toplu işlemler';
$string['batchupgrade'] = 'Birden çok ödevi güncelleyin';
$string['confirmbatchupgrade'] = 'Toplu iş yükseltme atamalarını onayla';
$string['conversioncomplete'] = 'Atama dönüştürüldü';
$string['conversionfailed'] = 'Ödev dönüşümü başarısız oldu. Güncelleştirmenin günlüğü: <br/>{$a}';
$string['listnotupgraded'] = 'Yeni sürüme geçirilmemiş listeler içinde görev atama listeleri';
$string['listnotupgraded_desc'] = 'Bireysel ödevleri buradan yükseltebilirsiniz.';
$string['noassignmentsselected'] = 'Hiçbir ödev seçilmedi';
$string['noassignmentstoupgrade'] = 'Güncellenmesi gerek ödev bulunmuyor';
$string['notupgradedintro'] = 'Bu sayfada, Moodle 2.3\'teki yeni atama modülüne yükseltilmemiş eski bir Moodle sürümü ile oluşturulan atamaların listesi verilmektedir. Tüm ödevler yükseltilemez - bir özel atama alt türü ile oluşturulduysa, bu altürün yükseltmeyi tamamlamak için yeni atama eklentisi biçimine yükseltilmesi gerekir.';
$string['notupgradedtitle'] = 'Ödevler yükseltilmedi';
$string['pluginname'] = 'Ödev yükseltme yardımcısı';
$string['select'] = 'Seç';
$string['submissions'] = 'Gönderimler';
$string['supported'] = 'Güncelleme';
$string['unknown'] = 'Bilinmeyen';
$string['updatetable'] = 'Günleme tablosu';
$string['upgradable'] = 'Güncellenebilir';
$string['upgradeall'] = 'Tüm ödevleri güncelle';
$string['upgradeallconfirm'] = 'Tüm ödevler güncellensin mi?';
$string['upgradeassignmentfailed'] = 'Sonuç: Yükseltme başarısız. Güncelleştirmenin günlüğü: <br/><div class="tool_assignmentupgrade_upgradelog">{$a->log}</div>';
$string['upgradeassignmentsuccess'] = 'Sonuç: Güncelleme başarılı';
$string['upgradeassignmentsummary'] = 'Yeni sürüme atama: {$a->name} (Course: {$a->shortname})';
$string['upgradeprogress'] = 'Ödev yükseltme {$a->current} / {$a->total}';
$string['upgradeselected'] = 'Seçilen ödevleri güncelle';
$string['upgradeselectedcount'] = 'Seçilen {$a} ödev güncellensin mi?';
$string['upgradesingle'] = 'Tek ödevi yükselt';
$string['viewcourse'] = 'Dönüştürülen atamayla dersi görüntüleme';
