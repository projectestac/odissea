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
 * Strings for component 'assignfeedback_offline', language 'tr', version '4.5'.
 *
 * @package     assignfeedback_offline
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmimport'] = 'Not eklemeyi onayla';
$string['default'] = 'Varsayılan olarak etkinleştir';
$string['default_help'] = 'Ayarlıysa, ödevleri çevrimdışı olarak puanlama varsayılan olarak etkin olacaktır.';
$string['downloadgrades'] = 'Puanlama çalışma sayfasını indir';
$string['enabled'] = 'Çevrimdışı puanlama çalışma sayfası';
$string['enabled_help'] = 'Eğer etkinse, öğretmenler ödevleri öğrencilerin notlarıyla beraber indirebilir veya yükleyebilir olacaklardır.';
$string['feedbackupdate'] = '"{$a->field}" boşluğunu "{$a->student}" öğrencisi için şuna "{$a->text}"';
$string['gradelockedingradebook'] = '{$a} için not defterindeki not kilitli';
$string['graderecentlymodified'] = 'Not, Moodle\'da {$a} için not verme çalışma sayfasından daha yakın bir zamanda değiştirilmiştir.';
$string['gradesfile'] = 'Puanlama çalışma sayfası (csv formatında)';
$string['gradesfile_help'] = 'Değiştirilmiş notlarla birlikte puanlama çalışma sayfası. Bu dosya, ödevden indirilen UTF-8 kodlamasına sahip bir CSV dosyası olmalı ve öğrenci notu ve tanımlayıcısı sütunları olmalıdır.';
$string['gradeupdate'] = '{$a->student} öğrenci için {$a->grade} notunu gir';
$string['ignoremodified'] = 'Yakın zamanlarda Moodle içinde elektronik tablodaki değiştirilen kayıtları güncelleştirme izin verin';
$string['ignoremodified_help'] = 'Puanlama çalışma sayfası Moodle\'dan indirildiğinde, notların her biri için son değiştirilme tarihini içerir. Bu çalışma sayfası indirildikten sonra notlardan herhangi biri Moodle\'da güncellenirse varsayılan olarak Moodle notları içe aktarırken bu güncellenmiş bilgilerin üzerine yazmayı reddeder. Bu seçenek Moodle seçildiğinde bu güvenlik kontrolü devre dışı bırakılır ve birden fazla değerelendicininin notları diğerlerinin üzerine yazılabilir.';
$string['importgrades'] = 'Puanlama çalışma sayfası değişiklerini onayla';
$string['invalidgradeimport'] = 'Moodle yüklenen ödevi okuyamadı. Ödevin virgülle ayırılmış değerler ile (.csv formatında) kaydedildiğine emin olun ve tekrar deneyin.';
$string['nochanges'] = 'Yüklenen puanlama çalışma sayfasında değiştirilmiş not bulunmadı';
$string['offlinegradingworksheet'] = 'Notlar';
$string['pluginname'] = 'Çevrimdışı puanlama çalışma sayfası';
$string['privacy:nullproviderreason'] = 'Bu eklentinin kullanıcı bilgilerini depolayacak bir veritabanı yok. Puanlam arayüzünün görüntülenmesine yardımcı olmak için sadece mod_assign içindeki API\'leri kullanır.';
$string['processgrades'] = 'Notları içeri aktar';
$string['skiprecord'] = 'Kayıtı atla';
$string['updatedgrades'] = '<strong> {$a->gradeupdatescount} </strong> notları ve <strong> {$a->feedbackupdatescount} </strong> geri bildirim örnekleri güncellendi.';
$string['updaterecord'] = 'Kayıtı güncelle';
$string['uploadgrades'] = 'Puanlama çalışma sayfası yükle';
