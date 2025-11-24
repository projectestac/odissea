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
 * Strings for component 'assignsubmission_mahara', language 'tr', version '4.5'.
 *
 * @package     assignsubmission_mahara
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assign_submission_mahara_description'] = 'Mahara\'nın Assign Submission plugin adlı Mahara portfolyosunda kullanılan Mahara işlevleri. <br /> Bu hizmeti bir Moodle sitesinde yayınlamak hiç bir etkisinin olmamıştır. <br /> {$a} ile ödevleri kullanabilmek istiyorsanız bu servise abone olun. <br />';
$string['assign_submission_mahara_name'] = 'Mahara hizmetlerini atama';
$string['collectionsby'] = 'Koleksiyonlar {$a} tarafından';
$string['defaultlockpages'] = 'Varsayılan "{$a}"';
$string['defaultlockpages_help'] = 'Yeni Mahara ödevlerinde "{$a}" ayarı için varsayılan ayar.';
$string['defaulton'] = 'Varsayılan olarak etkindir';
$string['defaulton_help'] = 'Ayarlanırsa, bu gönderme yöntemi tüm yeni ödevler için varsayılan olarak etkinleştirilir.';
$string['defaultsite'] = 'Varsayılan "{$a}"';
$string['defaultsite_help'] = 'Yeni Mahara ödevlerinde "{$a}" ayarı için varsayılan ayar.';
$string['emptysubmission'] = 'Gönderilecek sayfayı seçmediniz.';
$string['enabled'] = 'Mahara portfolyo';
$string['enabled_help'] = 'Etkinleştirildiğinde, öğrenciler Moodle\'daki değerlendirme için Mahara sayfalarını gönderebilirler. Mahara sitesi, bu Moodle sitesi ile mnet ağı için önceden yapılandırılmış olmalıdır.';
$string['errorinvalidhost'] = 'Geçersiz ana makine kimliği seçildi';
$string['errorinvalidstatus'] = 'Geliştirici Hatası: Geçersiz gönderim durumu gönderildi
assign_submission_mahara::set_mahara_submission_status()';
$string['errormnetrequest'] = 'Mnet isteği göndermeye çalışıldığında hata oluştu: {$a}';
$string['errorvieworcollectionalreadysubmitted'] = 'Seçilen Mahara görüntüsü veya koleksiyonu gönderilemedi. Lütfen başka birini seçin.';
$string['eventassessableuploaded'] = 'Bir Mahara sayfası veya koleksiyonu gönderildi.';
$string['lockpages'] = 'Gönderilen sayfaları kilitle';
$string['lockpages_help'] = '"Evet, kilitli tutun" seçilirse, gönderilen Mahara sayfaları ve koleksiyonları Mahara\'da düzenleme engellenecek ve derecelendirildikten sonra kilitli kalacaktır. "Evet, ancak derecelendirmenin ardından kilidini aç" ise, sayfa veya koleksiyon, gönderme derecelendirmesinden sonra açılacak veya iş akışı işaretlemesi yapıldıysa, öğrencilere işaretler serbest bırakıldığında kilidi açılacaktır.';
$string['mahara'] = 'Mahara portfolyo';
$string['nomaharahostsfound'] = 'Hiçbir mahara ana makinası bulunamadı.';
$string['noneselected'] = 'Hiçbiri seçilmedi';
$string['noviewscreated'] = 'Mevcut Mahara sayfalarınız veya koleksiyonlarınız yok. "{$a->name}" sayfasını ziyaret etmek ve yeni bir tane oluşturmak için lütfen <a target="_blank" href="{$a->jumpurl} "> buraya tıklayın </a>.';
$string['option_collections'] = 'Kolleksiyonlar';
$string['option_views'] = 'Görüntülenenler';
$string['outputforlog'] = '{$a->remotehostname}: {$a->viewtitle} (view id: {$a->viewid})';
$string['outputforlognew'] = 'Yeni {$a} gönderim.';
$string['pluginname'] = 'Mahara portfolyo';
$string['previousattemptsnotvisible'] = 'Mahara gönderme eklentisiyle daha önce yapılmış denemeler görünmüyor.';
$string['selectmaharaview'] = 'Kullanılabilir portfolyo sayfalarınızdan veya koleksiyonlarınızdan birini aşağıdaki listeden seçin veya "{$a->name}" adresini ziyaret etmek için <a target="{blank" href="{$a->jumpurl} "> burayı tıklayın </a> "ve yeni bir tane oluşturun.';
$string['site'] = 'Site';
$string['site_help'] = 'Bu ayar, öğrencilerinizin sayfalarını hangi Mahara sitesinden göndermeleri gerektiğini seçmenizi sağlar.';
$string['viewsby'] = 'Sayfasından {$a}';
$string['yeskeeplocked'] = 'Evet, kilitli tutun';
$string['yesunlock'] = 'Evet, ancak not vermeden sonra kilidini aç';
