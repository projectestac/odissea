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
 * Strings for component 'portfolio', language 'tr', version '4.5'.
 *
 * @package     portfolio
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activeexport'] = 'Etkin dışa vermeyi çözümle';
$string['activeportfolios'] = 'Uygun portfolyolar';
$string['addalltoportfolio'] = 'Tüm portfolyoları dışa aktar';
$string['addnewportfolio'] = 'Yeni portfolyo ekle';
$string['addtoportfolio'] = 'Portfolyoya aktar';
$string['alreadyalt'] = 'Zaten dışa veriliyor - bu aktarımı çözümlemek için lütfen burayı tıklayın';
$string['alreadyexporting'] = 'Bu oturumda zaten etkin bir portfolyo dışa  aktarımı var. Devam etmeden önce, bu aktarımı bitirmeli ya da iptal etmelisiniz. Devam etmek istiyor musunuz? (Hayır iptal edecektir)';
$string['availableformats'] = 'Kullanılabilir dışa verme biçimleri';
$string['callbackclassinvalid'] = 'Belirtilen sınıf geri bildirimi hatalı veya portfolio_caller yapısının bir parçası değil';
$string['callercouldnotpackage'] = 'Veriniz dışa çıkarım için paketlenirken hata oluştu: orijinal hata şuydu {$a}';
$string['cannotsetvisible'] = 'Görünür olarak ayarlanamaz - eklenti yanlış yapılandırmadan dolayı tamamen etkisizleştirildi.';
$string['commonportfoliosettings'] = 'Mevcut portfolyo ayarları';
$string['commonsettingsdesc'] = '<p>Aktarım \'Orta\' ya da \'Uzun\' zaman alırsa alsın kullanıcının aktarımın tamamlanmasını bekleyip bekleyemeyeceğini değiştirir.</p><p>\'Orta\' eşik değerine kadar olan boyutlar kullanıcıya sorulmadan yapılırken, \'Orta\' ve \'Uzun\' sürecek kullancıya işlemin biraz zaman alabileceğini belirten uyarıyla beraber bu seçenek de verilir.</p> <p>Buna ek olarak, bazı portföy eklentiler bu seçeneği tamamen göz ardı edip bütün transferlerin kuyruğa alınmasını zorlayabilir.</p>';
$string['configexport'] = 'Dışa çıkarılmış veriyi yapılandır';
$string['configplugin'] = 'Portfolyo eklentisini yapılandır';
$string['configure'] = 'Yapılandır';
$string['confirmcancel'] = 'Bu dışa vermeyi iptal etmek istediğinizden emin misiniz?';
$string['confirmexport'] = 'Lütfen bu dışa çıkarımı onaylayın';
$string['confirmsummary'] = 'Dışa çıkarım özeti';
$string['continuetoportfolio'] = 'Portfolyonuza devam edin';
$string['deleteportfolio'] = 'Portfolyo kopyasını sil';
$string['destination'] = 'Hedef';
$string['disabled'] = 'Üzgünüz, portfolyo dışa çıkarımı bu sitede etkinleştirilmemiş';
$string['disabledinstance'] = 'Etkisizleştirildi';
$string['displayarea'] = 'Alanı dışa ver';
$string['displayexpiry'] = 'Aktarım zaman aşımı';
$string['displayinfo'] = 'Dışa aktarma bilgisi';
$string['dontwait'] = 'Bekleme';
$string['enabled'] = 'Portfolyoları etkinleştir';
$string['enableddesc'] = 'Etkinleştirilirse, kullanıcılar forum gönderileri ve ödev sunumları gibi içerikleri harici portfolyolara ya da HTML sayfalara aktarabilirler.';
$string['err_uniquename'] = 'Portfolyo ismi benzersiz olmalı (her eklenti için)';
$string['exportalreadyfinished'] = 'Portfolyo dışa aktarımı tamamlandı!';
$string['exportalreadyfinisheddesc'] = 'Portfolyo dışa aktarımı tamamlandı!';
$string['exportcomplete'] = 'Portfolyo dışa aktarımı tamamlandı!';
$string['exportedpreviously'] = 'Önceki dışa çıkarımlar';
$string['exportexceptionnoexporter'] = 'Aktif bir oturumla bir portfolio_export_exception hatası oluştu, ancak dışa aktarıcı nesne yoktu';
$string['exportexpired'] = 'Portfolyo dışa aktarımı zaman aşımına uğradı';
$string['exportexpireddesc'] = 'Bazı bilgilerin dışa aktarımını tekrarlamaya çalıştınız veya boş bir dışa aktarmayı başlattınız. Bunu düzgün yapmak için, orijinal konuma dönüp tekrar başlayın. Bu, bazen bir dışa aktarım tamamlandıktan sonra geri düğmesini kullandığınızda veya geçersiz bir URL yerleştirdiğinizde olur.';
$string['exporting'] = 'Portfolyoya çıkartılıyor';
$string['exportingcontentfrom'] = 'İçerik buradan dışa çıkarılıyor: {$a}';
$string['exportingcontentto'] = 'İçerik şuraya çıkarılıyor {$a}';
$string['exportqueued'] = 'Portföy dışa aktarımı aktarım için başarıyla sıraya alındı';
$string['exportqueuedforced'] = 'Portfolyo dışa aktarımı aktarım için başarıyla sıraya alındı';
$string['failedtopackage'] = 'Paketlenecek dosya bulunamadı';
$string['failedtosendpackage'] = 'Veriniz seçili portfolyo sistemine gönderilirken hata oluştu: orijinal hata {$a}';
$string['filedenied'] = 'Bu dosyaya erişim engellendi';
$string['filenotfound'] = 'Dosya yok';
$string['fileoutputnotsupported'] = 'Bu biçim için dosya çıkışına yeniden yazmak desteklenmiyor';
$string['format_document'] = 'Belge';
$string['format_file'] = 'Dosya';
$string['format_image'] = 'Resim';
$string['format_leap2a'] = 'Leap2A portfolyo biçimi';
$string['format_mbkp'] = 'Moodle yedek biçimi';
$string['format_pdf'] = 'PDF';
$string['format_plainhtml'] = 'HTML';
$string['format_presentation'] = 'Sunum';
$string['format_richhtml'] = 'HTML (dosya ekli)';
$string['format_spreadsheet'] = 'Hesap tablosu';
$string['format_text'] = 'Düz metin';
$string['format_video'] = 'Video';
$string['highdbsizethreshold'] = 'Yüksek aktarım veritabanı boyutu';
$string['highdbsizethresholddesc'] = 'İletim zamanını hayli artıracak kadar veritabanı kaydı var';
$string['highfilesizethreshold'] = 'Yüksek aktarım dosya boyutu';
$string['highfilesizethresholddesc'] = 'Dosya boyutu bu eşiğin üzerinde olanların iletimi için uzun bir süre gerekecektir';
$string['insanebody'] = 'Merhaba! Bu mesajı şu sitenin yöneticisi olarak alıyorsunuz: {$a->sitename}.

Bazı portfolyo eklentileri hatalı yapılandırmalar nedeniyle devre dışı bırakıldı. Yani kullanıcılar şu an bu portfolyolara aktarım yapamıyorlar.

Devre dışı bırakılan portfolyo eklentileri şunlar:

{$a->textlist}

Şu adresi ziyaret ederek bir an önce düzeltmelisiniz {$a->fixurl}.';
$string['insanebodyhtml'] = '<p>Merhaba! Bu mesajı şu sitenin yöneticisi olarak alıyorsunuz: {$a->sitename}.</p>

<p>Bazı portfolyo eklentileri hatalı yapılandırmalar nedeniyle devre dışı bırakıldı. Yani kullanıcılar şu an bu portfolyolara aktarım yapamıyorlar.</p>

<p>Devre dışı bırakılan portfolyo eklentileri şunlar:</p>

{$a->htmlist}

<p><a href="{$a->fixurl}">Portfolyo yapılandırma sayfaları</a>nı ziyaret ederek bir an önce düzeltmelisiniz</p>';
$string['insanebodysmall'] = 'Merhaba! Bu mesajı şu sitenin yöneticisi olarak alıyorsunuz: {$a->sitename}. Bazı portfolyo eklentileri hatalı yapılandırmalar nedeniyle devre dışı bırakıldı. Yani kullanıcılar şu an bu portfolyolara aktarım yapamıyorlar. Şu adresi ziyaret ederek düzeltmelisiniz {$a->fixurl}.';
$string['insanesubject'] = 'Bazı portfolyo kopyaları otomatikmen devre dışı bırakıldı';
$string['instancedeleted'] = 'Portfolyo başarıyla silindi';
$string['instanceismisconfigured'] = 'Portfolyo kopyası hatalı yapılandırılmış, atlandı. Hata: {$a}';
$string['instancenotdelete'] = 'Portfolyo silinirken hata';
$string['instancenotsaved'] = 'Portfolyo kaydedilirken hata';
$string['instancesaved'] = 'Portfolyo başarıyla kaydedildi';
$string['intro'] = 'Oluşturduğunuz, ödev gönderimleri, forum gönderileri ve blog girişleri gibi içerikler bir portföye aktarılabilir veya indirilebilir.<br>
Kullanmak istemediğiniz herhangi bir portföy gizlenebilir; bu şekilde dışarı aktarma seçeneklerinde listelenmemiş olur.';
$string['invalidaddformat'] = 'portfolio_add_button\'a geçersiz ekleme biçimi iletildi. ({$a}) PORTFOLIO_ADD_XXX \'dan biri olmalı';
$string['invalidbuttonproperty'] = 'Portfolyo_butonun ({$a}) özelliği bulunamadı';
$string['invalidconfigproperty'] = 'Şu yapılandırma niteliği bulunamadı; ({$a->class} sınıfnın {$a->property}) niteliği';
$string['invalidexportproperty'] = 'Şu dışa aktarma yapılandırma niteliği bulunamadı; ({$a->class} sınıfnın {$a->property}) niteliği';
$string['invalidfileareaargs'] = 'set_file_and_format_data \'a geçersiz dosya alan parametreleri verildi - contextid, component, filearea ve itemid değerlerini taşımalı';
$string['invalidformat'] = 'Dışa çıkartılan bazı şeyler yanlış biçimde, {$a}';
$string['invalidinstance'] = 'Bu portfolyo kopyası bulunamadı';
$string['invalidpreparepackagefile'] = 'Hatalı prepare_package_file çağrısı - ya tek ya da çoklu dosyalar ayarlanmalı';
$string['invalidproperty'] = 'Özellik bulunamadı ({$a->class}::{$a->property})';
$string['invalidsha1file'] = 'Hatalı get_sha1_file çağrısı - ya tek ya da çoklu dosyalar ayarlanmalı';
$string['invalidtempid'] = 'Hatalı dışa verme id\'si. Süresi dolmuş olabilir.';
$string['invaliduserproperty'] = 'Kullanıcı ayar özelliği bulunamadı ({$a->class}::{$a->property})';
$string['leap2a_emptyselection'] = 'Gerekli değer seçilmedi';
$string['leap2a_entryalreadyexists'] = 'Bu beslemede zaten var olan, id\'si ({$a}) olan bir Leap2A gönderisi eklemeye çalıştınız';
$string['leap2a_feedtitle'] = 'Leap2A, Moodle\'dan {$a} için dışa çıkarıldı';
$string['leap2a_filecontent'] = 'Leap2A girdisinin içeriğini dosya alt sınıfını kullanmak yerine bir dosyaya koymaya çalışıldı';
$string['leap2a_invalidentryfield'] = 'Var olmayan bir giriş alanı ayarlamaya çalıştınız ({$a}) veya doğrudan ayarlayamazsınız';
$string['leap2a_invalidentryid'] = 'Bir gönderiye var olmayan bir id ile erişmeye çalıştınız ({$a})';
$string['leap2a_missingfield'] = 'Gerekli Leap2A giriş alanı {$a} eksik';
$string['leap2a_nonexistantlink'] = 'Bir Leap2A girişi ({$a->from}) ilişki {$a->rel} ile mevcut olmayan bir girişi ({$a->to}) bağlamayı denedi.';
$string['leap2a_overwritingselection'] = 'Bir girişin ({$a}) orijinal türünü make_selection\'daki seçime yazmak';
$string['leap2a_selflink'] = 'Bir Leap2A girişi ({$a->id}), ilişkisi {$a->rel} ile kendisine bağlantı kurmaya çalıştı.';
$string['logs'] = 'Aktarım kayıtları';
$string['logsummary'] = 'Başarıyla tamamlanan önceki aktarımlar';
$string['manageportfolios'] = 'Portfolyoları yönet';
$string['manageyourportfolios'] = 'Portfolyonuzu yönetin';
$string['mimecheckfail'] = '{$a->plugin} portfolyo eklentisi {$a->mimetype} içerik tipini desteklemiyor.';
$string['missingcallbackarg'] = '{$a->class} sınıfı için eksik {$a->arg} argümanı';
$string['moderatedbsizethreshold'] = 'Dengeli aktarım veritabanı boyutu';
$string['moderatedbsizethresholddesc'] = 'İletim zamanını hayli artıracak kadar veritabanı kaydı var';
$string['moderatefilesizethreshold'] = 'Dengeli aktarım dosya boyutu';
$string['moderatefilesizethresholddesc'] = 'Eşikteki Dosya Boyutu, iletmek için orta düzeyde bir zaman harcanacağı kabul edilecektir.';
$string['multipleinstancesdisallowed'] = 'Birden fazla örneği ({$a}) izin vermeyen bir eklenti örneği oluşturmaya çalışma';
$string['mustsetcallbackoptions'] = 'Geri arama seçeneklerini portfolio_add_button yapıcısında veya set_callback_options yöntemini kullanarak ayarlamanız gerekir';
$string['noavailableplugins'] = 'Üzgünüz, sizin için dışa çıkartılacak portfolyo yok';
$string['nocallbackclass'] = 'Kullanılacak geri arama sınıfı bulunamadı ({$a})';
$string['nocallbackcomponent'] = 'Belirtilen bileşen bulunamadı {$a}.';
$string['nocallbackfile'] = 'Dışa aktarmayı denediğiniz modüldeki bir şey bozuk - gerekli bir portfoyo dosyası bulamadım';
$string['noclassbeforeformats'] = 'Portfolio_button\'da set_formats\'ı çağırmadan önce geri arama sınıfını ayarlamanız gerekir';
$string['nocommonformats'] = 'Mevcut herhangi bir portfolyo eklentisi ile {$a->location} çağrı merkezi arasında ortak format yok (arayan desteklenmektedir:
{$a->formats})';
$string['noinstanceyet'] = 'Seçilmemiş';
$string['nologs'] = 'Gösterilecek kayıt yok!';
$string['nomultipleexports'] = 'Üzgünüz ama portfolyo hedefi ({$a->plugin}) aynı anda çoklu aktarımı desteklemiyor. Lütfen <a href="{$a->link}">önce ilkini tamamlayın</a> ve yeniden deneyin';
$string['nonprimative'] = 'İlkel olmayan bir değer, portfolio_add_button için bir geri arama argümanı olarak iletildi. Devam etmeyi reddetme. Anahtar {$a->key} idi ve değer {$a->value} idi';
$string['nopermissions'] = 'Üzgünüz ama bu alandan dosya dışa aktarmak için gerekli olan izine sahip değilsiniz';
$string['notexportable'] = 'Üzgünüz ama dışa aktarmaya çalıştığınız içerik türü buna uygun değil.';
$string['notimplemented'] = 'Maalesef, ancak henüz uygulanmayan bir biçimde içeriği dışa aktarmaya çalışıyorsunuz ({$a})';
$string['notyetselected'] = 'Seçilmemiş';
$string['notyours'] = 'Size ait olmayan bir portfolyo aktarmaya çalışıyorsunuz!';
$string['nouploaddirectory'] = 'Verinizi paketlemek için geçici klasör oluşturulamıyor';
$string['off'] = 'Etkin ama gizli';
$string['on'] = 'Etkin ve görünür';
$string['plugin'] = 'Portfolyo eklentisi';
$string['plugincouldnotpackage'] = 'Veriniz dışa çıkarım için paketlenirken hata oluştu: orijinal hata ({$a})';
$string['pluginismisconfigured'] = 'Portfolyo eklentisi hatalı yapılandırılmış, atlandı. Hata: {$a}';
$string['portfolio'] = 'Portfolyo';
$string['portfolios'] = 'Portfolyolar';
$string['privacy:metadata'] = 'Portföy alt sistemi, eklentilerden gelen istekleri çeşitli portföy eklentilerine ileten bir kanal görevi görür.';
$string['privacy:metadata:instance'] = 'Portfolyo tanımlayıcı';
$string['privacy:metadata:instancesummary'] = 'Portföy örnekleri ve tercihleri hakkındaki verileri depolar.';
$string['privacy:metadata:name'] = 'Tercih adı';
$string['privacy:metadata:portfolio_log'] = 'Portfolyo transferlerinin günlüğü (daha sonra mükerrer olup olmadığını kontrol etmek için kullanılır)';
$string['privacy:metadata:portfolio_log:caller_class'] = 'Aktarımı oluşturmak için kullanılan sınıfın adı';
$string['privacy:metadata:portfolio_log:caller_component'] = 'Dışa aktarmadan sorumlu bileşen adı';
$string['privacy:metadata:portfolio_log:time'] = 'Aktarım zamanı (kuyruğa alınmış bir aktarım durumunda bu, kullanıcının başlattığı zaman değil, gerçek aktarımın yapıldığı zamandır)';
$string['privacy:metadata:portfolio_log:userid'] = 'İçeriği dışa aktaran kullanıcının kimliği';
$string['privacy:metadata:portfolio_tempdata'] = 'Portföy dışa aktarma işlemleri için geçici verileri depolar.';
$string['privacy:metadata:portfolio_tempdata:data'] = 'Verileri dışa aktar';
$string['privacy:metadata:portfolio_tempdata:expirytime'] = 'Bu kaydın süresinin dolacağı zaman';
$string['privacy:metadata:portfolio_tempdata:instance'] = 'Portföy eklentisi örneği kullanılıyor';
$string['privacy:metadata:portfolio_tempdata:userid'] = 'Dışa aktarma işlemini gerçekleştiren kullanıcı';
$string['privacy:metadata:userid'] = 'Kullanıcı kimliği';
$string['privacy:metadata:value'] = 'Tercih için değer';
$string['privacy:path'] = 'Portföy örnekleri';
$string['queuesummary'] = 'Şu anda kuyruğa alınan aktarımlar';
$string['returntowhereyouwere'] = 'Geri dön';
$string['save'] = 'Kaydet';
$string['selectedformat'] = 'Seçili dışa çıkarım biçimi';
$string['selectedwait'] = 'Bekleme seçilmiş?';
$string['selectplugin'] = 'Hedef seçin';
$string['showhide'] = 'Göster / gizle';
$string['singleinstancenomultiallowed'] = 'Yalnızca tek bir portfolyo eklentisi örneği mevcuttur, oturum başına birden çok dışa aktarmayı desteklemez ve bu eklentiyi kullanarak oturumda zaten etkin bir dışa aktarma var!';
$string['somepluginsdisabled'] = 'Bazı tüm portfolyo eklentileri, yanlış yapılandırılmış veya başka bir şeye güvenenlerden dolayı devre dışı bırakılmıştır:';
$string['sure'] = '\'{$a}\'yı silmek istediğinize emin misiniz? Bu işlem geri alınamaz.';
$string['thirdpartyexception'] = 'Portfolyo dışa aktarma sırasında ({$a}) bir üçüncü taraf istisnası fırlatıldı. Yakalanır ve yeniden fırlatılır, ancak bu gerçekten düzeltilmelidir';
$string['transfertime'] = 'Aktarım zamanı';
$string['unknownplugin'] = 'Bilinmiyor (bir yönetici tarafından kaldırılmış olabilir)';
$string['wait'] = 'Bekle';
$string['wanttowait_high'] = 'Bu aktarımın tamamlanmasını beklemeniz önerilmez ancak ne yaptığınızı biliyorsanız bekleyebilirsiniz';
$string['wanttowait_moderate'] = 'Bu iletimi beklemek istiyor musunuz? Bu bir kaç dakika sürebilir';
