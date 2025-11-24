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
 * Strings for component 'enrol_imsenterprise', language 'tr', version '4.5'.
 *
 * @package     enrol_imsenterprise
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aftersaving...'] = 'Ayarları kaydettiğinizde bunu yapmak isteyebilirsiniz:';
$string['allowunenrol'] = 'IMS verilerinin öğrencilerin ve öğretmenlerin kaydını silmesine izin ver';
$string['allowunenrol_desc'] = 'Etkinleştirilirse, Kurumsal verilerde belirtildiğinde kurs kayıtları kaldırılır.';
$string['basicsettings'] = 'Temel ayarlar';
$string['categoryidnumber'] = 'Kategori kimlik numarasına izin ver';
$string['categoryidnumber_desc'] = 'Etkinleştirilirse, IMS Enterprise kimlik numarasına sahip kategori oluşturacaktır';
$string['categoryseparator'] = 'Kategori ayırıcı karakter';
$string['categoryseparator_desc'] = '"Kategori numarası numarası" etkinleştirildiğinde gereklidir. Kategori adı ve sayı numarasını ayırmak için karakter.';
$string['coursesettings'] = 'Kurs verisi seçenekleri';
$string['createnewcategories'] = 'Moodle\'da yok ise yeni (gizli) kurs kategorilerini oluştur';
$string['createnewcategories_desc'] = 'Bir kursun gelen verilerinde &lt;org&gt;&lt;orgunit&gt; öğesi mevcutsa, kurs sıfırdan oluşturulacaksa içeriği bir kategori belirtmek için kullanılacaktır. Eklenti mevcut kursları yeniden kategorilendirmeyecektir.

Eğer istenen isimde bir kategori yoksa, gizli bir kategori oluşturulacaktır.';
$string['createnewcourses'] = 'Moodle\'da yok ise yeni (gizli) kurs oluştur';
$string['createnewcourses_desc'] = 'Etkinleştirildiğinde, IMS Enterprise kayıt eklentisi, IMS verilerinde bulan herhangi biri için yeni kurslar oluşturabilir ancak Moodle\'ın veritabanında bulunmayabilir. Yeni oluşturulan kurslar başlangıçta gizlenir.';
$string['createnewusers'] = 'Moodle\'da kayıtlı olmayan kullanıcıların hesaplarını oluştur';
$string['createnewusers_desc'] = 'IMS Enterprise kayıt verileri tipik olarak bir dizi kullanıcıyı tanımlar. Etkinleştirilirse, Moodle veritabanında bulunmayan tüm kullanıcılar için hesaplar oluşturulabilir.

Kullanıcılar önce kimlik numaralarına göre, sonra da Moodle kullanıcı adlarına göre aranır. Parolalar IMS Enterprise eklentisi tarafından içe aktarılmaz. Kullanıcıların kimliklerini doğrulamak için bir kimlik doğrulama eklentisinin kullanılması önerilir.';
$string['cronfrequency'] = 'İşleme sıklığı';
$string['deleteusers'] = 'IMS verisinde belirtildiği zaman kullanıcının hesaplarını sil';
$string['deleteusers_desc'] = 'Etkinleştirilirse, IMS Enterprise kayıt verileri, kullanıcı hesaplarının silinmesini belirleyebilir ("recstatus" işareti 3\'e ayarlanırsa, bu da bir hesabın silinmesini gösterir). Moodle\'da standart olduğu gibi, kullanıcı kaydı Moodle\'ın veritabanından gerçekten silinmez, ancak hesabı silinmiş olarak işaretlemek için bir bayrak ayarlanır.';
$string['disableenrolmentandremoveallroles'] = 'Kaydı askıya alma ve rolleri kaldırma';
$string['disableenrolonly'] = 'Yalnızca kaydı askıya al';
$string['doitnow'] = 'hemen şimdi IMS Enterprise içe aktarma gerçekleştir';
$string['emptyattribute'] = 'Boş bırak';
$string['filelockedmail'] = 'IMS-dosya-temelli ders kayıtları için kullandığınız dosya ({$a}) cron işlemi tarafından silinemiyor. Bu genellikle dosya üzerindeki izinler yanlış tanımlandığında olur. Lütfen, dosyanın Moodle tarafından silinebilmesi için gerekli izinleri verin, aksi takdirde bu işlem sürekli devam eder.';
$string['filelockedmailsubject'] = 'Önemli hata: Ders kaydı dosyası';
$string['fixcasepersonalnames'] = 'İsimlerin ilk harflerini Büyük Harfe çevir';
$string['fixcaseusernames'] = 'Kullanıcı adlarını küçük harfe çevir';
$string['ignore'] = 'Yok say';
$string['importimsfile'] = 'IMS Enterprise dosyasını içe aktarma';
$string['imsenterprise:config'] = 'IMS Enterprise kayıt örneklerini yapılandır';
$string['imsenterprisecrontask'] = 'Kayıt dosyası işleme';
$string['imsrolesdescription'] = 'IMS Enterprise tanımlaması 8 farklı rol içerir. Lütfen bu kişileri yok sayılacakları da belirterek Moodle\'a nasıl atanacağını seçin.';
$string['location'] = 'Dosyanın yeri';
$string['logtolocation'] = 'Log dosyası yeri (kayıt tutmamak için boş bırakın)';
$string['mailadmins'] = 'Yöneticiyi e-posta ile bilgilendir';
$string['mailusers'] = 'Kullanıcıları e-posta ile bilgilendir';
$string['messageprovider:imsenterprise_enrolment'] = 'IMS Enterprise kayıt mesajları';
$string['miscsettings'] = 'Çeşitli';
$string['nestedcategories'] = 'İç içe geçmiş kategorilere izin ver';
$string['nestedcategories_desc'] = 'Etkinleştirilirse, IMS Enterprise iç içe geçmiş kategoriler oluşturur';
$string['noaction'] = 'Eylem yok';
$string['pluginname'] = 'IMS Enterprise dosyası';
$string['pluginname_desc'] = 'Bu yöntem, belirttiğiniz yerde özel olarak biçimlendirilmiş bir metin dosyasını tekrar tekrar kontrol eder ve işler. Dosya kişi, grup ve üyelik XML öğelerini içeren IMS Enterprise teknik özelliklerini takip etmelidir.';
$string['privacy:metadata'] = 'IMS Enterprise dosya kayıt eklentisi herhangi bir kişisel veri depolamaz.';
$string['processphoto'] = 'Profile kullanıcı fotoğrafı ekle';
$string['processphotowarning'] = 'Uyarı: Resim işleme sunucuya önemli derecede yük bindirir. Çok fazla öğrencinin işleme alınacağı durumlarda bu seçeneği aktifleştirmemeniz tavsiye edilir.';
$string['removeenrolmentandallroles'] = 'Kaydı ve rolleri silin';
$string['restricttarget'] = 'Yalnızca aşağıdaki hedef belirlenmiş ise verileri işle';
$string['restricttarget_desc'] = 'Bir IMS Enterprise veri dosyası birden fazla "hedef" için tasarlanabilir - farklı LMS\'ler veya bir okul / üniversitede farklı sistemler. Enterprise dosyasında, verilerin bir veya daha fazla adlandırılmış hedef sistemi için tasarlandığını, <properties> etiketinde bulunan <target> etiketlerinde adlandırarak belirtmek mümkündür.

Genel olarak bunun için endişelenmeniz gerekmez. Ayarı boş bırakın ve bir hedef belirtilmiş olsun veya olmasın, Moodle daima veri dosyasını işleyecektir. Aksi takdirde, <target> etiketinde çıktılacak tam adı girin.';
$string['roles'] = 'Roller';
$string['settingfullname'] = 'Kursun adı için IMS açıklama etiketi';
$string['settingfullnamedescription'] = 'Tam ad gerekli bir ders ayrıntısıdır, bu nedenle seçilen açıklama etiketini IMS Enterprise dosyanızda tanımlamanız gerekir';
$string['settingshortname'] = 'Kurs kısa adı için IMS açıklama etiketi';
$string['settingshortnamedescription'] = 'Tam ad gerekli bir kurs alanıdır, bu nedenle seçilen açıklama etiketini IMS Enterprise dosyanızda tanımlamanız gerekir';
$string['settingsummary'] = 'Kurs özeti için IMS açıklama etiketi';
$string['settingsummarydescription'] = 'İsteğe bağlı bir alansa, kurs özetini belirtmek istemiyorsanız \'Boş bırak\' seçeneğini belirleyin';
$string['sourcedidfallback'] = '"userid" alanı bulunamazsa kişinin userid\'si için "sourcedid" alanını kullan';
$string['sourcedidfallback_desc'] = 'IMS verilerinde, <sourcedid>, bir kişinin kaynak sisteminde kullandığı gibi kalıcı kimlik kodunu temsil eder. <userid> alanı, oturum açarken kullanıcının kullandığı kimlik kodunu içermesi gereken ayrı bir alandır. Çoğu durumda, bu iki kod aynı olabilir; ancak her zaman geçerli değildir.

Bazı öğrenci bilgi sistemleri <userid> alanını çıktılamıyor. Bu durumda, Moodle kullanıcı kimliği olarak <sourcedid> \'i kullanmaya izin vermek için bu ayarı etkinleştirmelisiniz. Aksi takdirde, bu ayarı devre dışı bırakın.';
$string['truncatecoursecodes'] = 'Kurs kodlarını bu uzunluğa kadar kabul et';
$string['truncatecoursecodes_desc'] = 'Bazı durumlarda, işleme başlamadan önce belirli bir uzunlukta kesmek istediğiniz kurs kodunuz olabilir. Öyleyse, bu kutuya karakter sayısını girin. Aksi takdirde, kutuyu boş bırakın ve kesme meydana gelmez.';
$string['unenrolaction'] = 'Kaydı iptal etme eylemi';
$string['unenrolaction_desc'] = 'Bir kullanıcının bir dersten kaydı silindiğinde yapılacak işlem (yalnızca yukarıdaki kaydı iptal etme ayarı etkinleştirildiğinde geçerlidir).';
$string['updatecourses'] = 'Kursu güncelle';
$string['updatecourses_desc'] = 'Etkinleştirilirse, IMS Enterprise kayıt eklentisi kurs tam ve kısa adlarını güncelleyebilir ("recstatus" bayrağı bir güncelleme temsil eden 2 olarak ayarlanırsa).';
$string['updateusers'] = 'IMS verilerinde kullanıcı hesaplarını güncelleyin';
$string['updateusers_desc'] = 'Etkinleştirilirse, IMS Kurumsal kayıt verileri kullanıcı hesaplarındaki değişiklikleri belirleyebilir ("recstatus" bayrağı bir güncelleme temsil eden 2\'ye ayarlanırsa).';
$string['usecapitafix'] = '"Capita" kullanıyorsanız bu kutucuğu seçin (bunun XML biçimi biraz hatalıdır)';
$string['usecapitafix_desc'] = 'Capita tarafından üretilen öğrenci veri sisteminin XML çıktısında bir miktar hata olduğu tespit edildi. Capita\'yı kullanıyorsanız, bu ayarı etkinleştirmeniz gerekir - aksi halde işaretli bırakın.';
$string['usersettings'] = 'Kullanıcı verisi seçenekleri';
$string['zeroisnotruncation'] = '0 kesme olmayacağını gösterir';
