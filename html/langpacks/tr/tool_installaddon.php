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
 * Strings for component 'tool_installaddon', language 'tr', version '4.5'.
 *
 * @package     tool_installaddon
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acknowledgement'] = 'Alındı bildirimi';
$string['acknowledgementtext'] = 'Eklentileri kurmadan önce bu sitenin tam yedeklerini almak benim sorumluluğumdadır. Eklentileri (özellikle de yalnızca gayri resmi kaynaklardan gelen kullanıcıları değil) güvenlik açıkları içerebilir, siteyi erişemeyecek duruma getirebilir veya özel veri sızıntılarına veya kayıplara neden olabileceğini kabul ederim ve bunu anlıyorum.';
$string['featuredisabled'] = 'Bu sitede eklenti yükleyicisi devre dışı bırakılmıştır.';
$string['installaddon'] = 'Eklenti yükle';
$string['installaddons'] = 'Eklenti yükle';
$string['installfromrepo'] = 'Moodle Eklenti klasöründen eklenti yükle';
$string['installfromrepo_help'] = 'Bir eklenti bulmak ve kurmak için Moodle eklentileri dizinine yönlendirileceksiniz. Yükleme işlemini sizin için daha kolay hale getirmek için sitenizin tam adı, URL ve Moodle sürümünün de gönderileceğini unutmayın.';
$string['installfromzip'] = 'Zip dosyasından eklenti yükle';
$string['installfromzip_help'] = 'Doğrudan Moodle eklentileri dizininden bir eklenti yüklemeye alternatif bir eklentinin bir ZIP paketini yüklemektir. ZIP paketi, Moodle eklentileri dizininden indirilen bir paketle aynı yapıya sahip olmalıdır.';
$string['installfromzipfile'] = 'ZIP paketi';
$string['installfromzipfile_help'] = 'Eklenti ZIP paketi eklentinin adıyla eşleşecek şekilde adlandırılmış yalnızca bir dizin içermelidir. ZIP, eklenti türü için uygun bir konuma çıkarılır. Paket Moodle eklentileri dizininden indirildiyse, bu yapıya sahip olacak.';
$string['installfromzipinvalid'] = 'Eklenti ZIP paketi eklentinin adıyla eşleşecek şekilde adlandırılmış yalnızca bir dizin içermelidir. Sağlanan dosya geçerli bir eklenti ZIP paketi değil.';
$string['installfromziprootdir'] = 'Kök dizinini yeniden adlandır';
$string['installfromziprootdir_help'] = 'Github tarafından üretilenler gibi bazı ZIP paketleri, yanlış bir kök dizin adı içerebilir. Eğer öyleyse, doğru ad buraya girilebilir.';
$string['installfromzipsubmit'] = 'Zip dosyasından eklenti yükle';
$string['installfromziptype'] = 'Eklenti türü';
$string['installfromziptype_help'] = 'Bileşen adlarını doğru bir şekilde ilan eden eklentiler için, yükleyici eklenti türünü otomatik olarak algılayabilir. Otomatik algılama başarısız olursa, doğru eklentiyi elle seçin. Uyarı: Yanlış bir eklenti türü belirtilmişse kurulum prosedürü başarısız olabilir.';
$string['installfromziptype_link'] = 'Development:Plugins';
$string['permcheck'] = 'Eklenti tipi kök konumunun web sunucusu işlemi tarafından yazılabilir olduğundan emin olun.';
$string['permcheckerror'] = 'Yazma izni kontrolü yapılırken hata oluştu';
$string['permcheckprogress'] = 'Yazma izni kontrolü ...';
$string['permcheckrepeat'] = 'Tekrar kontrol et';
$string['permcheckresultno'] = 'Eklenti türü konumu <em> {$a->path} </em> yazılabilir değil';
$string['permcheckresultyes'] = 'Eklenti türü yer <em> {$a->path} </em> yazılabilir';
$string['pluginname'] = 'Eklenti yükleyici';
$string['privacy:metadata'] = 'Eklenti yükleyici eklentisi herhangi bir kişisel veri saklamaz.';
$string['remoterequestalreadyinstalled'] = 'Bu sitedeki Moodle eklentileri dizininden eklenti {$a->name} ({$a->component}) sürümünü {$a->version} yüklemek için bir istek var. Bununla birlikte, bu eklenti sitede <strong> zaten yüklü </strong>.';
$string['remoterequestconfirm'] = 'Bu sitedeki Moodle eklentileri dizininden <strong>{$a->name}</strong> ({$a->component}) eklentisi {$a->component} eklentisi kurma isteği var. Devam ederseniz, doğrulama için eklenti ZIP paketi indirilecek. Hiçbir şey kurulmayacak.';
$string['remoterequestinvalid'] = 'Bu sitede Moodle eklentileri dizininden bir eklenti kurma isteği var. Ne yazık ki istek geçerli değil ve bu nedenle eklenti yüklenemiyor.';
$string['remoterequestnoninstallable'] = 'Bu sitedeki Moodle eklentileri dizininden eklenti {$a->name} ({$a->component}) sürümünü {$a->version} yüklemek için bir istek var. Bununla birlikte, eklenti kurulumunun ön denetimi başarısız oldu (neden kodu: {$a->reason}).';
$string['remoterequestpermcheck'] = 'Bu sitedeki Moodle eklentileri dizininden eklenti {$a->name} ({$a->component}) sürümünü {$a->version} yüklemek için bir istek var. Bununla birlikte, <strong> {$a->typepath} </strong> konumu <strong> yazılamaz </strong>. Web sunucusu kullanıcısının bulunduğu yere yazma erişimi vermeniz gerekir, daha sonra tekrar onaylamak için devam düğmesine basın.';
$string['remoterequestpluginfoexception'] = 'Hata! Eklenti {$a->name} ({$a->component}) sürümü {$a->version} hakkında bilgi edinmeye çalışılırken bir hata oluştu. Eklenti yüklenemiyor. Hatanın ayrıntılarını görmek için hata ayıklama modunu açın.';
$string['typedetectionfailed'] = 'Eklenti türü tespit edilemiyor. Lütfen eklenti türünü manuel olarak seçin.';
$string['typedetectionmismatch'] = 'Seçilen eklenti türü, eklenti tarafından bildirilen eklenti türü ile eşleşmiyor: {$a}';
