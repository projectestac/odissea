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
 * Strings for component 'tool_generator', language 'tr', version '4.5'.
 *
 * @package     tool_generator
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionalmodules'] = 'Ek etkinlikler';
$string['additionalmodules_help'] = 'Normalde kursta standart modüller oluştururuz (forum, sayfa veya etiket gibi),
Test kursuna dahil edilecek course_backend_generator_create_activity işlevini uygulayan diğer etkinlikleri seçin.';
$string['bigfile'] = 'Büyük dosya {$a}';
$string['courseexplanation'] = 'Bu araç, birçokları içeren standart test kursları oluşturur
Bölümler, etkinlikler ve dosyalar.

Bu, güvenilirliği kontrol etmek için standartlaştırılmış bir önlem sağlamayı amaçlamaktadır
Ve çeşitli sistem bileşenlerinin (yedekleme ve geri yükleme gibi) performansı.

Bu test önemlidir çünkü daha önce birçok durumda,
Gerçek hayat kullanım durumlarıyla (ör. 1.000 etkinlik içeren bir kursla) karşılaşırsanız, sistem
çalışmıyor.

Bu özellik kullanılarak oluşturulan kurslar çok miktarda veritabanı işgal edebilir ve
Dosya sistemi alanı (onlarca gigabayt). Kursları silmeniz gerekecek
(Ve çeşitli temizleme çalışmalarını bekleyerek) bu alanı tekrar serbest bırakın.

** Bu özelliği canlı bir sistemde kullanmayın **. Yalnızca bir geliştirici sunucusunda kullanın.
(Yanlışlıkla kullanılmasını önlemek için, seçili olmadıkça bu özellik devre dışı bırakılır DEVELOPER hata ayıklama düzeyi.)';
$string['coursesize_0'] = 'XS (~ 10KB, yaklaşık ~1 saniye içinde oluşturulur)';
$string['coursesize_1'] = 'S (~ 10MB, ~30 saniye içinde oluşturulur)';
$string['coursesize_2'] = 'M (~ 100MB, yaklaşık ~2 dakika içinde oluşturulur)';
$string['coursesize_3'] = 'L (~ 1GB, ~30 dakikada oluşturulur)';
$string['coursesize_4'] = 'XL (~ 10GB, yaklaşık ~2 saat içinde oluşturulur)';
$string['coursesize_5'] = 'XXL (~ 20GB, yaklaşık ~4 saat içinde oluşturulur)';
$string['coursewithoutusers'] = 'Seçilen kursun kullanıcısı yok';
$string['createcourse'] = 'Kurs oluştur';
$string['createtestplan'] = 'Test planı oluştur';
$string['creating'] = 'Kurs oluşturma';
$string['done'] = 'tamamlanan({$a}s)';
$string['downloadtestplan'] = 'Test planını indir';
$string['downloadusersfile'] = 'Kullanıcı dosyasını indir';
$string['error_nocourses'] = 'Test planını oluşturmak için herhangi bir kurs yoktur';
$string['error_noforumdiscussions'] = 'Seçilen kurs forum tartışmaları içermiyor';
$string['error_noforuminstances'] = 'Seçilen kurs forum modülü örneklerini içermiyor';
$string['error_noforumreplies'] = 'Seçilen kurs forum cevaplarını içermiyor';
$string['error_nonexistingcourse'] = 'Belirtilen kurs mevcut değil';
$string['error_nopageinstances'] = 'Seçilen kurs sayfa modülü örneklerini içermiyor';
$string['error_notdebugging'] = 'Hata ayıklama DEVELOPER olarak ayarlanmadığından bu sunucuda kullanılamıyor';
$string['error_nouserspassword'] = 'Test planını oluşturmak için config.php dosyasında $CFG->tool_generator_users_password ayarlamanız gerekir';
$string['execute'] = 'Yürüt';
$string['execute_cleanup'] = 'Senaryoları Temizle';
$string['execute_scenarios'] = 'Senaryoları test et';
$string['fullname'] = 'Kursu test edin: {$a->size}';
$string['maketestcourse'] = 'Test kursu ver';
$string['maketestplan'] = 'JMeter test planını hazırla';
$string['notenoughusers'] = 'Seçilen dersin yeterli kullanıcısı yok';
$string['pluginname'] = 'Geliştirme veri Üreticisi';
$string['privacy:metadata'] = 'Geliştirme veri oluşturucu eklentisi herhangi bir kişisel veri saklamaz.';
$string['progress_checkaccounts'] = 'Kullanıcı hesaplarını kontrol etme ({$a})';
$string['progress_coursecompleted'] = 'Kurs tamamlandı ({$a}s)';
$string['progress_createaccounts'] = 'Kullanıcı hesapları oluşturma ({$a->from} - {$a->to})';
$string['progress_createassignments'] = 'Atamalar oluşturma ({$a})';
$string['progress_createbigfiles'] = 'Büyük dosyalar oluşturma ({$a})';
$string['progress_createcourse'] = 'Kurs oluşturma {$a}';
$string['progress_createforum'] = 'Forum oluşturma ({$a} gönderileri)';
$string['progress_createpages'] = 'Sayfalar oluşturma ({$a})';
$string['progress_createsmallfiles'] = 'Küçük dosyalar oluşturma ({$a})';
$string['progress_createusers'] = 'Kullanıcı hesapları oluşturma ({$a})';
$string['progress_enrol'] = 'Kullanıcıları derse kaydetme ({$a})';
$string['progress_sitecompleted'] = 'Site tamamlandı ({$a}s)';
$string['shortsize_0'] = 'XS';
$string['shortsize_1'] = 'S';
$string['shortsize_2'] = 'M';
$string['shortsize_3'] = 'L';
$string['shortsize_4'] = 'XL';
$string['shortsize_5'] = 'XXL';
$string['sitesize_0'] = 'XS (~ 10MB, 3 kurs, yaklaşık ~30 saniye içinde oluşturuldu)';
$string['sitesize_1'] = 'S (~ 50MB, 8 kurs, yaklaşık ~2 dakika içinde oluşturuldu)';
$string['sitesize_2'] = 'M (~ 200MB; 73 kurs, yaklaşık ~10 dakika içinde oluşturuldu)';
$string['sitesize_3'] = 'L (~ 1\'5GB; 277 kurs yaklaşık ~1\'5 saat içinde oluşturuldu)';
$string['sitesize_4'] = 'XL (~ 10GB, yaklaşık 1065 kurs, yaklaşık ~5 saatte oluşturuldu)';
$string['sitesize_5'] = 'XXL (~ 20GB, 4177 kurs, yaklaşık ~10 saatte oluşturuldu)';
$string['size'] = 'Kursun boyutu';
$string['smallfiles'] = 'Küçük dosyalar';
$string['step_example'] = 'Örnek adım:';
$string['targetcourse'] = 'Hedef dersi test et';
$string['testplanexplanation'] = 'Bu araç, kullanıcı kimlik bilgileri dosyasıyla birlikte bir JMeter test planı dosyası oluşturur.

Bu test planı, {$a} ile birlikte çalışacak şekilde tasarlanmıştır; bu da, test planının belirli bir Moodle ortamında yürütülmesini kolaylaştırır, çalışanlar hakkında bilgi toplar ve sonuçları karşılaştırır; dolayısıyla indirip test_runner.sh\'ı kullanmanız gerekecektir komut dosyasını çalıştırın veya kurulum ve kullanım yönergelerini izleyin.

Config.php içindeki kurs kullanıcıları için bir şifre ayarlamanız gerekir (ör. $CFG->tool_generator_users_password = \'moodle\';). Aracın istemeden kullanılmasını önlemek için bu parola için varsayılan değer yok. Kurs kullanıcılarınızın başka şifreleri varsa veya tool_generator tarafından oluşturulduysa, ancak bir $CFG>tool_generator_users_password değeri ayarlamadan, güncelleme şifreleri seçeneğini kullanmanız gerekir.

Kurslar ve site üreticileri tarafından oluşturulan kurslarla iyi çalışması için tool_generator\'ın bir parçasıdır,
En azından aşağıdakileri içeren herhangi bir dersle de kullanılabilir:

* Kayıtlı kullanıcı sayısı yeterlidir (seçtiğiniz sınama planı boyutuna bağlıdır) şifre sıfırlanarak "moodle"
* Bir sayfa modülü örneği
* En az bir tartışma ve bir yanıt içeren bir forum modülü örneği

JMeter tarafından üretilen yük miktarı olarak büyük test planları çalıştırırken sunucularınızın kapasitesini göz önüne almak isteyebilirsiniz
Özel olarak büyük olabilir. Tırmanma süresi
Bu tür sorunları azaltmak için iş parçacığı sayısına (kullanıcılara) göre ayarlandı ancak yük hala çok büyük.

** Test planını canlı bir sistemde çalıştırmayın **. Bu özellik yalnızca JMeter\'i besleyecek dosyaları oluşturur, dolayısıyla tehlikeli değildir.
Bununla birlikte, ASLA ** bu test planını bir üretim sitesinde çalıştırmayın **.';
$string['testplansize_0'] = 'XS ({$a->user} kullanıcıları, {$a->loops} döngüler ve {$a->rumpup} tırmanma süresi süresi)';
$string['testplansize_1'] = 'S ({$a->users} kullanıcı, {$a->loops} döngü ve {$a->rumpup} tırmanma süresi)';
$string['testplansize_2'] = 'M ({$a->users} kullanıcı, {$a->loops} döngü ve {$a->rumpup} tırmanma süresi)';
$string['testplansize_3'] = 'L ({$a->users} kullanıcı, {$a->loops} döngü ve {$a->rumpup} tırmanma süresi)';
$string['testplansize_4'] = 'XL ({$a->users} kullanıcı, {$a->loops} döngü ve {$a->rumpup} tırmanma süresi)';
$string['testplansize_5'] = 'XXL ({$a->users} kullanıcı, {$a->loops} döngü ve {$a->rumpup} tırmanma süresi)';
$string['testscenario'] = 'Test senaryoları oluşturun';
$string['testscenario_description'] = 'Test senaryoları oluşturmak, manuel bir test çalıştırmak için gerekli tüm öğeleri oluşturmak üzere sınırlı bir özellik dosyaları sözdizimi kullanır.';
$string['testscenario_errorparsing'] = 'Özell dosya ayrıştırılırken hata oluştu: {$a}';
$string['testscenario_file'] = 'Özell dosya';
$string['testscenario_filedesc'] = 'Yükleme özelliği dosyaları yalnızca core_data_generator adımlarını veya selenyum gerektirmeyen bazı belirli adımları içeren senaryoları içerebilir. @cleanup etiketli senaryolar dışındaki tüm senaryolar tek seferde yürütülecektir.';
$string['testscenario_filedesc_cleanup'] = 'Temizle etiketi içeren senaryolar yalnızca “Yürüt” ayarı varsa yürütülecektir
“Temizle” olarak ayarlanmıştır. Temizleme işlemini CLI üzerinden yürütmek için --cleanup seçeneğini kullanabilirsiniz.';
$string['testscenario_filedesc_list'] = 'Bu, test senaryosu özellik dosyasında kullanılabilecek adımların listesidir:';
$string['testscenario_invalidfile'] = 'Dosya biçimi geçerli değil veya geçersiz adımlar içeriyor.';
$string['testscenario_invalidstep'] = 'Unkown step. Create testing scenarios only accepts generator steps.';
$string['testscenario_nosteps'] = 'Dosyada yürütülecek herhangi bir adım yoktur.';
$string['testscenario_notready'] = 'Composer ve behat kütüphaneleri kurulu değil.<br><br>Lütfen, bu aracı etkinleştirmek için şu komutu yürütün: <strong>php admin/tool/generator/cli/runtestscenario.php</strong>';
$string['testscenario_outline'] = 'Senaryo anahatları desteklenmez.';
$string['testscenario_scenarionosteps'] = 'Bu senaryoda herhangi bir adım yoktur.';
$string['testscenario_steps'] = 'Test senaryosu adımları:';
$string['updateuserspassword'] = 'Kurs kullanıcılarının şifresini güncelle';
$string['updateuserspassword_help'] = 'JMeter\'in kurs kullanıcıları olarak giriş yapması gerekir; config.php dosyasında $CFG->tool_generator_users_password kullanılarak kullanıcı şifresini ayarlayabilirsiniz; Bu ayar, kurs kullanıcısının parolasını $CFG->tool_generator_users_password değerine göre güncelleştirir. Bu, tool_generator tarafından oluşturulmayan bir dersi kullanıyorsanız veya test kursları oluştururken $CFG->tool_generator_users_password ayarlanmadığında yararlı olabilir.';
