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
 * Strings for component 'qtype_randomsamatch', language 'tr', version '4.5'.
 *
 * @package     qtype_randomsamatch
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['insufficientoptions'] = 'Bu soru için yetersiz seçim seçenekleri mevcut olduğundan dolayı bu testte mevcut değildir. Lütfen öğretmeninize haber verin.';
$string['nosaincategory'] = 'Seçtiğiniz \'{$a->catname}\' kategorisinde kısa cevaplı soru yok. Farklı bir kategori seçin ve bu kategoride yeni sorular oluşturun.';
$string['notenoughsaincategory'] = 'Seçtiğiniz \'{$a->catname}\' kategorisinde sadece {$a->nosaquestions} kısa cevaplı soru var. Farklı bir kategori seçin, bu kategoride yeni sorular oluşturun veya seçtiğiniz soru sayısını arttırın.';
$string['pluginname'] = 'Rastgele kısa-cevap eşleme';
$string['pluginname_help'] = 'Öğrenci bakış açısıyla, bu, eşleşen bir soru gibi görünüyor. Aradaki fark, eşlemenin yapıldığı ad veya ifadelerin (soruların) listesinin mevcut kategorideki kısa cevap soruları arasından rasgele çizilmesidir. Kategori içinde yeterli kullanılmayan kısa cevaplı soru olmalıdır, aksi takdirde bir hata mesajı görüntülenir.';
$string['pluginname_link'] = 'question/type/randomsamatch';
$string['pluginnameadding'] = 'Rasgele kısa-cevap eşleme sorusu ekleme';
$string['pluginnameediting'] = 'Rasgele kısa-cevap eşleme sorusu düzenleme';
$string['pluginnamesummary'] = 'Eşleşen bir soru gibi, ancak belirli bir kategorideki kısa cevap sorularından rastgele oluşturulmuştur.';
$string['privacy:metadata'] = 'Rastgele kısa cevap eşleştirme soru türü eklentisi herhangi bir kişisel veri depolamaz.';
$string['randomsamatch'] = 'Rastgele kısa-cevap eşleme';
$string['randomsamatchintro'] = 'Aşağıdaki sorulardan her biri için, menüden eşleşen cevabı seçin.';
$string['randomsamatchnumber'] = 'Seçilecek soru sayısı';
$string['subcats'] = 'Alt kategorileri dahil et';
$string['subcats_help'] = 'İşaretlenirse, sorular alt kategorilerden de seçilecektir.';
