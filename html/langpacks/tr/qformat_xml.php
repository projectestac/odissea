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
 * Strings for component 'qformat_xml', language 'tr', version '4.5'.
 *
 * @package     qformat_xml
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['invalidxml'] = 'Hatalı xml dosyası - metin bekleniyordu (CDATA mı kullanılmış?)';
$string['pluginname'] = 'Moodle XML biçimi';
$string['pluginname_help'] = 'Bu Moodle özgü soru alma ve verme biçimidir.';
$string['pluginname_link'] = 'qformat/xml';
$string['privacy:metadata'] = 'XML soru formatı eklentisi herhangi bir kişisel veri saklamaz.';
$string['truefalseimporterror'] = '<b>Uyarı</b>:doğru / yanlış soruları \'{$a->questiontext}\' düzgün olarak alınamadı. Doğru cevaplarlar ve cevapların hangisinin doğru veya yanlış olduğu belirtilmemiş. Sorunun cevabı \'{$a->answer}\'nın doğru olduğu varsayarak ithal edilmiştir. Cevap doğru değilse, soruyu düzenlemeniz gerekir.';
$string['unsupportedexport'] = '{$a} soru tipi xml dışaverme tarafından desteklenmiyor';
$string['xmlimportnoname'] = 'XML dosyasındaki soru ismi eksiktir.';
$string['xmlimportnoquestion'] = 'XML dosyasında eksik soru metni eksik';
$string['xmltypeunsupported'] = 'Soru tipi {$a} XML alma işlemi tarafından desteklenmiyor.';
