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
 * Strings for component 'tool_uploadcourse', language 'tr', version '4.5'.
 *
 * @package     tool_uploadcourse
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'Silmelere izin ver';
$string['allowdeletes_help'] = 'Silme alanının kabul edilip edilmediği.';
$string['allowrenames'] = 'Yeniden isimlendirmeye izin ver';
$string['allowrenames_help'] = 'Yeniden adlandırma alanının kabul edilip edilmediği.';
$string['allowresets'] = 'Sıfırlamaya izin ver';
$string['allowresets_help'] = 'Sıfırlama alanının kabul edilip edilmediği.';
$string['cachedef_helper'] = 'Önbelleğe alma Yardımcısı';
$string['cannotdeletecoursenotexist'] = 'Kurs mevcut olmadığı için silinemiyor';
$string['cannotforcelang'] = 'Bu kurs için zorunlu dil seçimine izin verilmiyor';
$string['cannotgenerateshortnameupdatemode'] = 'Güncellemelere izin verildiğinde kısa ad üretilemiyor';
$string['cannotreadbackupfile'] = 'Yedekleme dosyası okunamıyor';
$string['cannotrenamecoursenotexist'] = 'Kurs mevcut olmadığı için yeniden adlandırılamıyor';
$string['cannotrenameidnumberconflict'] = 'Kursa yeniden adlandırılamıyor, Aynı kimlik numarasına sahip başka bir kurs var';
$string['cannotrenameshortnamealreadyinuse'] = 'Kursa yeniden adlandırılamıyor, Bu kısa isim başka bir kurs için kullanılıyor';
$string['cannotupdatefrontpage'] = 'Site ana sayfasını değiştirmenize izin verilmez.';
$string['canonlyrenameinupdatemode'] = 'Sadece güncelleme için izin verilen kursu yeniden adlandırabilirsiniz.';
$string['canonlyresetcourseinupdatemode'] = 'Bir kursu yalnızca güncelleme modunda sıfırlayabilir';
$string['couldnotresolvecatgorybyid'] = 'Kategori Kimliği çözümlenemedi';
$string['couldnotresolvecatgorybyidnumber'] = 'Kategori kimlik numarasına göre çözülemedi';
$string['couldnotresolvecatgorybypath'] = 'Kategori yola göre çözümlenemedi';
$string['coursecreated'] = 'Kurs eklendi';
$string['coursedeleted'] = 'Kurs silindi';
$string['coursedeletionnotallowed'] = 'Kurs silmeye izin verilimiyor';
$string['coursedoesnotexistandcreatenotallowed'] = 'Kurs mevcut değil ve yeni kurs eklemeye izin verilmiyor';
$string['courseexistsanduploadnotallowed'] = 'Kurs mevcut fakat güncellemeye izin verilmiyor';
$string['coursefile'] = 'Dosya';
$string['coursefile_help'] = 'Dosya CSV biçiminde olmalı';
$string['courseidnumberincremented'] = 'Kurs kimlik numarası artırıldı {$a->from} -> {$a->to}';
$string['courseprocess'] = 'Kurs süreci';
$string['courserenamed'] = 'Kurs yeniden adlandırıldı';
$string['courserenamingnotallowed'] = 'Kursun yeniden adlandırılmasına izin verilmiyor';
$string['coursereset'] = 'Kurs sıfırlama';
$string['courseresetnotallowed'] = 'Kurs sıfırlamaya izin verilmiyor';
$string['courserestored'] = 'Kurs geri yüklendi';
$string['coursescreated'] = 'Kurs eklendi: {$a}';
$string['coursesdeleted'] = 'Kurs silindi: {$a}';
$string['courseserrors'] = 'Kurs hataları:';
$string['courseshortnamegenerated'] = 'Kurs kısa adı oluşturuldu: {$a}';
$string['courseshortnameincremented'] = 'Kurs kısa adı artırıldı {$a->from} -> {$a->to}';
$string['coursestotal'] = 'Toplam kurs sayısı:  {$a}';
$string['coursesupdated'] = 'Kurslar güncellendi: {$a}';
$string['coursetemplatename'] = 'Yükledikten sonra bu kusdan geri yükleyin';
$string['coursetemplatename_help'] = 'Tüm kursların oluşturulması için şablon olarak kullanılacak mevcut bir kurs kısa adını girin.';
$string['coursetorestorefromdoesnotexist'] = 'Geri yüklenecek kurs mevcut değil';
$string['courseupdated'] = 'Kurs güncellendi';
$string['courseuploadnotallowed'] = 'Şu kategoriye kurs yükleme izni yok: {$a}';
$string['courseuploadupdatenotallowed'] = 'Bu kısa ada sahip kurs mevcut ve güncellemek için kurs yükleme işlemine kullanma izniniz yok';
$string['createall'] = 'Tümünü oluştur, gerekirse kısa adını arttır';
$string['createnew'] = 'Yalnızca yeni kurslar oluşturun, mevcut olanları atlayın';
$string['createorupdate'] = 'Yeni kurs oluşturabilir veya mevcut olanları güncelleyebilirsiniz';
$string['csvdelimiter'] = 'CSV sınırlayıcı';
$string['csvdelimiter_help'] = 'Her kayıttaki veri serisini ayıran karakter.';
$string['csvfileerror'] = 'CSV dosyasının biçiminde bir sorun var. Lütfen başlık ve sütun sayısının eşleşip eşleşmediğini ve ayırıcının ve dosya kodlamasının doğru olup olmadığını kontrol edin. {$bir}';
$string['csvline'] = 'Satır';
$string['customfieldinvalid'] = '\'{$a} \' özel alanı boş veya geçersiz veri içeriyor';
$string['defaultvalues'] = 'Varsayılan kurs değerleri';
$string['defaultvaluescustomfieldcategory'] = '\'{$a}\'için varsayılan değerler';
$string['downloadcontentnotallowed'] = 'Kurs içeriğinin indirilmesine izin verilmeyen yapılandırma';
$string['encoding'] = 'Şifreleme';
$string['encoding_help'] = 'CSV dosyasının şifrelemesi.';
$string['errorcannotcreateorupdateenrolment'] = '\'{$a}\' kayıt yöntemi oluşturulamıyor veya güncellenemiyor';
$string['errorcannotdeleteenrolment'] = '\'{$a}\' kayıt yöntemi silinemiyor';
$string['errorcannotdisableenrolment'] = '\'{$a}\' kayıt yöntemi devre dışı bırakılamıyor';
$string['errorunsupportedmethod'] = 'Kayıt yöntemi \'{$a}\' csv yüklemesinde desteklenmiyor';
$string['errorwhiledeletingcourse'] = 'Kurs silinirken hata oluştu';
$string['errorwhilerestoringcourse'] = 'Kurs geri yüklenirken hata oluştu';
$string['generatedshortnamealreadyinuse'] = 'Oluşturulan kısa ad zaten kullanımdadır';
$string['generatedshortnameinvalid'] = 'Oluşturulan kısa ad geçersiz';
$string['id'] = 'Kimlik';
$string['idnumberalreadyinuse'] = 'Bu kimlik numarası halihazırda bir kursda kullanılıyor';
$string['importoptions'] = 'İçe aktarma seçenekleri';
$string['invalidbackupfile'] = 'Geçersiz yedek dosyası';
$string['invalidcourseformat'] = 'Geçersiz kurs formatı';
$string['invalidcsvfile'] = 'Geçersiz giriş CSV dosyası';
$string['invaliddownloadcontent'] = 'Geçersiz kurs içeriği indirme değeri';
$string['invalidencoding'] = 'Geçersiz şifreleme';
$string['invalideupdatemode'] = 'Geçersiz güncelleme modu seçildi';
$string['invalidfullnametoolong'] = 'Tam ad alanı {$a} karakterleriyle sınırlıdır';
$string['invalidmode'] = 'Geçersiz mod seçildi';
$string['invalidroles'] = 'Geçersiz rol adları: {$a}';
$string['invalidshortname'] = 'Geçersiz kısa ad';
$string['invalidshortnametoolong'] = 'Kısa ad alanı {$a} karakterleriyle sınırlıdır';
$string['invalidvisibilitymode'] = 'Geçersiz görünür mod';
$string['missingmandatoryfields'] = 'Zorunlu alanlar için eksik değer: {$a}';
$string['missingshortnamenotemplate'] = 'Eksik kısa ad ve kısa ad şablonu ayarlanmadı';
$string['mode'] = 'Yükleme modu';
$string['mode_help'] = 'Bu, kursların oluşturulup oluşturulamayacağını ve/veya güncelleneceğini belirtmenizi sağlar.';
$string['nochanges'] = 'Değişiklik yok';
$string['pluginname'] = 'Kursu yükle';
$string['preview'] = 'Önizleme';
$string['privacy:metadata'] = 'Kurs yükleme eklentisi herhangi bir kişisel veri saklamaz.';
$string['reset'] = 'Yükledikten sonra kurs sıfırlayın';
$string['reset_help'] = 'Kursu oluşturduktan/güncelleştirdikten sonra kuralı sıfırlamalı mı';
$string['restoreafterimport'] = 'İçe aktarmadan sonra geri yükle';
$string['result'] = 'Sonuç';
$string['rowpreviewnum'] = 'Satırları önizleme';
$string['rowpreviewnum_help'] = 'CSV dosyasından bir sonraki sayfada önizlenecek satır sayısı. Bu seçenek aşağıdaki sayfanın boyutunu sınırlamak içindir.';
$string['shortnametemplate'] = 'Kısa isim oluşturmak için şablon';
$string['shortnametemplate_help'] = 'Kursun kısa adı navigasyonda gösterilir. Şablon sözdizimini burada (%f = fullname,%i = idnumber) kullanabilir veya artırılan bir başlangıç değeri girebilirsiniz.';
$string['templatefile'] = 'Yükledikten sonra bu dosyadan geri yükle';
$string['templatefile_help'] = 'Tüm kursların oluşturulması için bir şablon olarak kullanılacak bir dosya seçin.';
$string['unknownimportmode'] = 'Bilinmeyen içe aktarma modu';
$string['updatemissing'] = 'CSV verilerinden eksik öğeleri ve varsayılanları doldurun';
$string['updatemode'] = 'Güncelleme modu';
$string['updatemode_help'] = 'Kursların güncellenmesine izin verirseniz, araca kursları neyle güncelleyeceğinizi de söylemeniz gerekir.';
$string['updatemodedoessettonothing'] = 'Güncelleme modu hiçbir şeyin güncellenmesine izin vermiyor';
$string['updateonly'] = 'Sadece mevcut kursları güncelle';
$string['updatewithdataonly'] = 'Sadece CVS verilerini güncelle';
$string['updatewithdataordefaults'] = 'CVS verilerini ve varsayılanları güncelle';
$string['uploadcourse:use'] = 'Kurs yükleme aracını kullanın';
$string['uploadcourses'] = 'Kursu yükle';
$string['uploadcourses_help'] = 'Kurslar metin dosyası aracılığıyla yüklenebilir.  Dosyanın biçimi aşağıdaki gibi olmalıdır:

 * Dosyanın her satırı bir kayıt içerir
 * Her kayıt, seçilen ayırıcıyla ayrılmış bir dizi veridir
 * İlk kayıt, dosyanın geri kalanının biçimini tanımlayan bir alan adları listesi içerir.
 * Gerekli alan adları kısa ad, tam ad ve kategoridir.';
$string['uploadcoursespreview'] = 'Yüklenen kurs önizlemesi';
$string['uploadcoursesresult'] = 'Kurs yükeame sonuçları';
