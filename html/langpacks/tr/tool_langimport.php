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
 * Strings for component 'tool_langimport', language 'tr', version '4.5'.
 *
 * @package     tool_langimport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['downloadnotavailable'] = 'İndirme sunucusuna bağlanılamıyor.  Dil paketlerini otomatik olarak yüklemek veya güncellemek mümkün değildir.  Lütfen uygun ZIP dosyalarını <a href="{$a->src}">{$a->src}</a> adresinden indirin ve bunları manuel olarak <code>{$a- veri dizininize açın >hedef</kod>';
$string['install'] = 'Seçili dil paket(lerini) kur';
$string['installedlangs'] = 'Kurulu dil paketleri';
$string['installfailed'] = 'Dil paketleri kurulumu başarısız oldu!';
$string['installfinished'] = 'Dil paketleri kurulumu tamamlandı.';
$string['installpending'] = 'Aşağıdaki dil paketleri yakında kurulacak: {$a}.';
$string['installscheduled'] = 'Kurulum için zamanlanmış dil paketleri.';
$string['langimport'] = 'Dil yükleme aracı';
$string['langimportdisabled'] = 'Dil içe aktarma özelliği devre dışı bırakıldı. Dil paketlerinizi dosya sistemi düzeyinde kendiniz güncellemelisiniz. Bunu yaptıktan sonra dize önbelleklerini temizlemeyi unutmayın.';
$string['langpackinstalled'] = '{$a} dil paketi başarıyla kuruldu';
$string['langpackinstalledevent'] = 'Yüklü dil paketi';
$string['langpacknotremoved'] = 'Bir hata oluştu; \'{$a}\' dil paketi tamamen kaldırılmadı. Lütfen dosya izinlerini kontrol edin.';
$string['langpackremoved'] = 'Dil paketi \'{$a}\' kaldırıldı';
$string['langpackremovedevent'] = 'Dil paketi kaldırıldı';
$string['langpackupdated'] = '\'{$a}\' dil paketi başarıyla güncellendi';
$string['langpackupdatedevent'] = 'Dil paketi güncellendi';
$string['langpackupdateskipped'] = '\'{$a}\' dil paketinin güncellemesi atlandı';
$string['langpackuptodate'] = '\'{$a}\' dil paketi güncel';
$string['langunsupported'] = '<p>Sunucunuz şu dilleri tam olarak desteklemiyor gibi görünüyor:</p><ul>{$a->missinglocales}</ul><p>Bunun yerine, global yerel ayar ({$a->globallocale}) tarihler veya sayılar gibi belirli dizeleri biçimlendirmek için kullanılacaktır.</p>';
$string['langupdatecomplete'] = 'Dil paketi güncellemesi tamamlandı';
$string['missingcfglangotherroot'] = 'Yapılandırma değeri eksik $CFG->langotherroot';
$string['missinglangparent'] = '<em>{$a->lang}</em> altında eksik üst dil <em>{$a->parent}</em> .';
$string['noenglishuninstall'] = 'İngilizce dil paketi kaldırılamaz.';
$string['noenglishuninstalltitle'] = 'Kaldırılamıyor';
$string['nolangupdateneeded'] = 'Tüm dil paketleriniz güncel olduğundan güncelleştirmeye gerek yok';
$string['pluginname'] = 'Dil paketleri';
$string['privacy:metadata'] = 'Dil paketleri eklentisi herhangi bir kişisel veri saklamaz.';
$string['purgestringcaches'] = 'Dize önbelleklerini temizle';
$string['search'] = 'Mevcut dil paketlerini ara';
$string['selectlangs'] = 'Kaldırılacak dilleri seçin';
$string['uninstall'] = 'Seçili dil paket(ler)ini kaldır';
$string['uninstallconfirm'] = 'Şu dil paketlerini tamamen kaldırmak üzeresiniz: <strong> {$a}</strong>. Emin misiniz?';
$string['updatelangs'] = 'Tüm dil paketlerini güncelle';
$string['updatelangsnote'] = 'Yüklü tüm dil paketlerinin düğmeye tıklanarak güncellenmesi uzun sürebilir ve zaman aşımlarına yol açabilir. Bunun yerine zamanlanmış görev \'{$a->taskname}\' (varsayılan olarak her gün çalışır) kullanılması önerilir.';
