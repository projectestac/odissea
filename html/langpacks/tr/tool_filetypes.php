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
 * Strings for component 'tool_filetypes', language 'tr', version '4.5'.
 *
 * @package     tool_filetypes
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfiletypes'] = 'Yeni dosya türü ekle';
$string['corestring'] = 'Alternatif dil dizeleri';
$string['corestring_help'] = 'Bu ayar çekirdek mimetypes.php dil dosyasından farklı bir dil dizisi seçmek için kullanılabilir. Genellikle boş bırakılmalıdır. Özel türler için açıklama alanını kullanın.';
$string['defaulticon'] = 'MIME türü için varsayılan simge';
$string['defaulticon_help'] = 'Aynı MIME türüne sahip birden çok dosya uzantısı varsa, uzantılardan biri için bu seçeneği seçin, böylece simgesi MIME türünün bir simgesi belirlenirken kullanılacaktır.';
$string['delete_confirmation'] = '<strong>.{$a}</strong> kaldırmak istediğiniz kesinlikle emin misiniz?';
$string['deletea'] = '{$a} sil';
$string['deletefiletypes'] = 'Dosya türünü silin';
$string['description'] = 'Varsayılan açıklama';
$string['description_help'] = 'Basit dosya türü açıklaması, örneğin \'Kindle e-kitabı\'. Siteniz birden fazla dili destekliyorsa ve çoklu dil filtresini kullanıyorsa, farklı dillerde bir açıklama sağlamak için bu alana çoklu dil etiketleri girebilirsiniz.';
$string['descriptiontype'] = 'Açıklama türü';
$string['descriptiontype_custom'] = 'Bu forma özel açıklama';
$string['descriptiontype_default'] = 'Varsayılan (MIME türü veya varsa, ilgili dil dizesi)';
$string['descriptiontype_help'] = 'Bir açıklama belirtmenin üç olası yolu vardır.

* Varsayılan davranış MIME türünü kullanır. Mimetypes.php dosyasında bu MIME türüne karşılık gelen bir dil dizgesi varsa kullanılacaktır; Aksi takdirde MIME türünün kendisi kullanıcılara gösterilir.
* Bu formda özel bir açıklama belirtebilirsiniz.
* MIME türü yerine kullanmak için mimetypes.php\'de bir dil dizesinin adını belirtebilirsiniz.';
$string['descriptiontype_lang'] = 'Alternatif dil dizeleri  (mimetypes.php den)';
$string['displaydescription'] = 'Açıklama';
$string['editfiletypes'] = 'Varolan dosya türünü düzenleyin';
$string['emptylist'] = 'Tanımlanmış dosya türü yok';
$string['error_addentry'] = 'Dosya türü uzantısı, açıklaması, MIME türü ve simgesi satır besleme ve noktalı virgül karakterleri içermemelidir.';
$string['error_defaulticon'] = 'Aynı MIME türüne sahip başka bir dosya uzantısı zaten varsayılan simge olarak işaretlenmiştir.';
$string['error_extension'] = 'Dosya türü uzantısı <strong>{$a}</strong> zaten var veya geçersiz. Dosya uzantıları benzersiz olmalı ve özel karakterler içermemelidir.';
$string['error_notfound'] = 'Uzantıya sahip {$a} dosya türü bulunamıyor.';
$string['extension'] = 'Uzantı';
$string['extension_help'] = 'Nokta olmadan dosya uzandısı ör. örneğin \'mobi\'';
$string['groups'] = 'Tür grupları';
$string['groups_help'] = 'Bu türün ait olduğu dosya türü gruplarının isteğe bağlı listesi. Bunlar \'belge\' ve \'resim\' gibi genel kategorilerdir.';
$string['icon'] = 'Dosya simgesi';
$string['icon_help'] = 'Simge dosya adı.

Simgelerin listesi, Moodle kurulumunuzdaki/pix/f dizininden alınmıştır. Gerekirse bu klasöre özel simgeler ekleyebilirsiniz.';
$string['mimetype'] = 'MIME türü';
$string['mimetype_help'] = 'Bu dosya türüyle ilişkili MIME türü, örneğin \'application/x-mobipocket-ebook\'';
$string['pluginname'] = 'Dosya Türü';
$string['privacy:metadata'] = 'Dosya türleri eklentisi herhangi bir kişisel veri saklamaz.';
$string['revert'] = 'Geri yükle {$a} Moodle varsayılanını';
$string['revert_confirmation'] = 'Değişiklikleri iptal ederek, Moodle varsayılanına <strong>.{$a}</strong> geri yüklemek istediğinizden emin misiniz?';
$string['revertfiletype'] = 'Dosyü türünü geri yükleyin';
$string['source'] = 'Tür';
$string['source_custom'] = 'Geçerli';
$string['source_deleted'] = 'Silinmiş';
$string['source_modified'] = 'Değiştirilmiş';
$string['source_standard'] = 'Standart';
