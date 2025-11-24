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
 * Strings for component 'tool_xmldb', language 'tr', version '4.5'.
 *
 * @package     tool_xmldb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actual'] = 'Gerçek';
$string['addpersistent'] = 'Zorunlu kalıcı alanlar ekleyin';
$string['aftertable'] = 'Tablodan Sonra:';
$string['back'] = 'Geri';
$string['backtomainview'] = 'Ana Menü';
$string['cannotuseidfield'] = '"id" alanı eklenemedi. Bu otomatik-artan bir sütündur';
$string['change'] = 'Değiştir';
$string['charincorrectlength'] = 'Char alanı için geçersiz uzunluk';
$string['check_bigints'] = 'Hatalı DB sayılarını ara';
$string['check_defaults'] = 'Tutarsız varsayılan değerleri ara';
$string['check_foreign_keys'] = 'Tutarsız ilişkili anahtarı ara';
$string['check_indexes'] = 'Hatalı DB indekslerini ara';
$string['check_oracle_semantics'] = 'Yanlış uzunluk semantiği arayın';
$string['checkbigints'] = 'Büyük sayıları denetle';
$string['checkdefaults'] = 'Varsayılanları denetle';
$string['checkforeignkeys'] = 'İlişkili anahtarı denetle';
$string['checkindexes'] = 'İndeksleri denetle';
$string['checkoraclesemantics'] = 'Semantiği kontrol et';
$string['completelogbelow'] = '(aşağıdaki aramanın tam kaydına bakın.)';
$string['confirmcheckbigints'] = 'Bu işlev Moodle sunucunuzdaki <a href="https://tracker.moodle.org/browse/MDL-11038">potansiyel yanlış tamsayı alanlarını</a> arayacak ve DB\'nizdeki tüm tamsayıların doğru şekilde tanımlanması için gerekli SQL ifadelerini otomatik olarak oluşturacaktır (ancak yürütmeyecektir!).

Oluşturulduktan sonra bu ifadeleri kopyalayabilir ve favori SQL arayüzünüzle güvenli bir şekilde çalıştırabilirsiniz (bunu yapmadan önce verilerinizi yedeklemeyi unutmayın).

Yanlış tamsayıları aramayı çalıştırmadan önce Moodle sürümünüzün mevcut en son (+ sürümünü) çalıştırmanız şiddetle tavsiye edilir.

Bu işlev DB\'ye karşı herhangi bir eylem gerçekleştirmez (sadece ondan okur), bu nedenle herhangi bir anda güvenle çalıştırılabilir.';
$string['confirmcheckdefaults'] = 'Bu işlev Moodle sunucunuzdaki tutarsız varsayılan değerleri arayacak ve tüm varsayılan değerlerin düzgün bir şekilde tanımlanması için gerekli SQL ifadelerini oluşturacaktır (ancak yürütmeyecektir!).

Oluşturulduktan sonra bu ifadeleri kopyalayabilir ve favori SQL arayüzünüzle güvenli bir şekilde çalıştırabilirsiniz (bunu yapmadan önce verilerinizi yedeklemeyi unutmayın).

Tutarsız varsayılan değerlerin aranmasını gerçekleştirmeden önce Moodle sürümünüzün mevcut en son (+ sürümünü) çalıştırıyor olmanız şiddetle tavsiye edilir.

Bu işlev DB\'ye karşı herhangi bir eylem gerçekleştirmez (sadece ondan okur), bu nedenle herhangi bir anda güvenle çalıştırılabilir.';
$string['confirmcheckforeignkeys'] = 'Bu işlev, install.xml tanımlarında tanımlanan yabancı anahtarların olası ihlallerini arayacaktır. (Moodle şu anda veritabanında gerçek yabancı anahtar kısıtlamaları oluşturmamaktadır, bu nedenle geçersiz veriler mevcut olabilir).

Yabancı anahtarların olası ihlalleri için arama yapmadan önce Moodle sürümünüzün mevcut en son (+ sürüm) sürümünü çalıştırmanız şiddetle tavsiye edilir.

Bu işlev DB\'ye karşı herhangi bir eylem gerçekleştirmez (sadece ondan okur), bu nedenle herhangi bir anda güvenle çalıştırılabilir.';
$string['confirmcheckindexes'] = 'Bu işlev Moodle sunucunuzdaki olası eksik dizinleri arayacak ve her şeyi güncel tutmak için gerekli SQL deyimlerini otomatik olarak oluşturacaktır (ancak yürütmeyecektir!).

Oluşturulduktan sonra bu ifadeleri kopyalayabilir ve favori SQL arayüzünüzle güvenli bir şekilde çalıştırabilirsiniz (bunu yapmadan önce verilerinizi yedeklemeyi unutmayın).

Eksik dizinleri aramayı çalıştırmadan önce Moodle sürümünüzün mevcut en son (+ sürümünü) çalıştırmanız şiddetle tavsiye edilir.

Bu işlev DB\'ye karşı herhangi bir eylem gerçekleştirmez (sadece ondan okur), bu nedenle herhangi bir anda güvenle çalıştırılabilir.';
$string['confirmcheckoraclesemantics'] = 'Bu işlev Moodle sunucunuzda <a href="https://tracker.moodle.org/browse/MDL-29322">Oracle varchar2 sütunlarını BYTE semantiği</a> kullanarak arayacak, tüm sütunların CHAR semantiği kullanmaya dönüştürülmesi için gerekli SQL ifadelerini otomatik olarak oluşturacak (ancak yürütmeyecektir!) (çapraz veri tabanı uyumluluğu ve artan içerik maks. uzunluğu için daha iyidir).

Oluşturulduktan sonra bu ifadeleri kopyalayabilir ve favori SQL arayüzünüzle güvenle çalıştırabilirsiniz (bunu yapmadan önce verilerinizi yedeklemeyi unutmayın).

BYTE semantiği aramasını çalıştırmadan önce Moodle sürümünüzün mevcut en son (+ sürümünü) çalıştırmanız şiddetle tavsiye edilir.

Bu işlev DB\'ye karşı herhangi bir eylem gerçekleştirmez (sadece ondan okur), bu nedenle herhangi bir anda güvenle çalıştırılabilir.';
$string['confirmdeletefield'] = 'Alanı tamamen silmek istediğinizden emin misiniz:';
$string['confirmdeleteindex'] = 'İndeksi tamamen silmek istediğinizden emin misiniz:';
$string['confirmdeletekey'] = 'Anahtarı tamamen silmek istediğinizden emin misiniz:';
$string['confirmdeletetable'] = 'Tabloyu tamamen silmek istediğinizden emin misiniz:';
$string['confirmdeletexmlfile'] = 'Dosyayı tamamen silmek istediğinizden emin misiniz:';
$string['confirmrevertchanges'] = 'Daha önceden yapılan değişiklikleri geri almak istediğinizden emin misiniz:';
$string['create'] = 'Oluştur';
$string['createtable'] = 'Tablo Oluştur';
$string['defaultincorrect'] = 'Geçersiz varsayılan';
$string['delete'] = 'Sil';
$string['delete_field'] = 'Alanı Sil';
$string['delete_index'] = 'İndeksi Sil';
$string['delete_key'] = 'Anahtarı Sil';
$string['delete_table'] = 'Tabloyu Sil';
$string['delete_xml_file'] = 'XML Dosyayı Sil';
$string['doc'] = 'Belge';
$string['docindex'] = 'Belge İndeksi';
$string['documentationintro'] = 'Belgeleme XMLDB veritabanı tanımlamasından otomatik olarak oluşturulacaktır. Sadece İngilizce olarak ulaşılabilir.';
$string['down'] = 'Aşağı';
$string['duplicate'] = 'Kopyala';
$string['duplicatefieldname'] = 'Bu isimde başka bir alan var';
$string['duplicatefieldsused'] = 'Duplicate fields used';
$string['duplicateindexname'] = 'Dizin adını çoğalt';
$string['duplicatekeyname'] = 'Bu isimde başka bir anahtar var';
$string['duplicatetablename'] = 'Bu ismi taşıyan başka bir tablo var';
$string['edit'] = 'Düzenle';
$string['edit_field'] = 'Alanı düzenle';
$string['edit_field_save'] = 'Alanı Kaydet';
$string['edit_index'] = 'Dizini düzenle';
$string['edit_index_save'] = 'Dizini Kaydet';
$string['edit_key'] = 'Anahtarı Düzenle';
$string['edit_key_save'] = 'Anahtarı Kaydet';
$string['edit_table'] = 'Tabloyu düzenle';
$string['edit_table_save'] = 'Tabloyu Kaydet';
$string['edit_xml_file'] = 'XML dosyayı düzenle';
$string['enumvaluesincorrect'] = 'Enum alanı için geçersiz değerler';
$string['expected'] = 'Beklenen';
$string['extensionrequired'] = 'Maalesef - bu eylem için \'{$a}\' PHP uzantısı gerekiyor. Bu özelliği kullanmak istiyorsanız lütfen uzantıyı yükleyin.';
$string['extraindexesfound'] = 'Ekstra indeksler bulundu';
$string['field'] = 'Alan';
$string['fieldnameempty'] = 'İsim alanı boş';
$string['fields'] = 'Alanlar';
$string['fieldsnotintable'] = 'Alan, tabloda yok';
$string['fieldsusedinindex'] = 'Bu alan dizin olarak kullanılır';
$string['fieldsusedinkey'] = 'Bu alan, anahtar olarak kullanılıyor.';
$string['filemodifiedoutfromeditor'] = 'Uyarı: XMLDB Düzenleyicisi kullanılırken dosya yerel olarak değiştirildi. Kaydetmek, yerel değişikliklerin üzerine yazacaktır.';
$string['filenotwriteable'] = 'Dosya yazılabilir değil';
$string['fkunknownfield'] = '{$a->tablename} tablosundaki {$a->keyname} yabancı anahtar {$a->reftable} referanslı tabloda {$a->reffield} varolmayan bir alana işaret ediyor.';
$string['fkunknowntable'] = '{$a->tablename} tablosundaki {$a->keyname} yabancı anahtar {$a->reftable} olmayan bir tabloya işaret ediyor.';
$string['fkviolationdetails'] = 'Tablo {$a->tablename} üzerindeki {$a->keyname} yabancı anahtarı, {$a->numrows} satırlarından {$a->numviolations} tarafından ihlal ediliyor.';
$string['float2numbernote'] = 'Uyarı: "float" alanları XMLDB tarafından %100 desteklense de, bunun yerine "number" alanlarına geçilmesi önerilir.';
$string['floatincorrectdecimals'] = 'Float alanı için hatalı ondalık sayı';
$string['floatincorrectlength'] = 'Float alanı için hatalı uzunluk';
$string['generate_all_documentation'] = 'Tüm Belgeler';
$string['generate_documentation'] = 'Belgelendirme';
$string['gotolastused'] = 'Son kullanılan dosyaya git';
$string['incorrectfieldname'] = 'Geçersiz ad';
$string['incorrectindexname'] = 'Yanlış dizin adı';
$string['incorrectkeyname'] = 'Yanlış anahtar adı';
$string['incorrecttablename'] = 'Yanlış tablo adı';
$string['index'] = 'Dizin';
$string['indexes'] = 'Dizinler';
$string['indexnameempty'] = 'Dizin adı boş';
$string['integerincorrectlength'] = 'Sayı alanı için geçersiz uzunluk';
$string['key'] = 'Anahtar';
$string['keynameempty'] = 'Anahtar adı boş olamaz';
$string['keys'] = 'Anahtarlar';
$string['listreservedwords'] = 'Rezerve sözcükler listesi<br />(<a href="https://docs.moodle.org/en/XMLDB_reserved_words" target="_blank">XMLDB rezerve sözcüklerini</a> güncel tutmak için kullanılır)';
$string['load'] = 'Yükle';
$string['main_view'] = 'Ana Görünüm';
$string['masterprimaryuniqueordernomatch'] = 'Dış anahtarınızdaki alanlar, başvurulan tablodaki UNIQUE KEY\'de listelendiği gibi aynı sırada listelenmelidir.';
$string['missing'] = 'Eksik';
$string['missingindexes'] = 'Eksik İndeksler Bulundu';
$string['mustselectonefield'] = 'Alan ilişkili eylemleri görmek için bir alan seçmelisiniz!';
$string['mustselectoneindex'] = 'Index ilişkili eylemleri görmek için bir index seçmelisiniz!';
$string['mustselectonekey'] = 'Anahtar ilişkili eylemleri görmek için bir anahtar seçmelisiniz!';
$string['new_table_from_mysql'] = 'MySQL\'den Yeni Tablo';
$string['newfield'] = 'Yeni Alan';
$string['newindex'] = 'Yeni dizinler';
$string['newkey'] = 'Yeni Anahtar';
$string['newtable'] = 'Yeni Tablo';
$string['newtablefrommysql'] = 'MySQL\'den Yeni Tablo';
$string['nofieldsspecified'] = 'Belirtilen alanlar yok';
$string['nomasterprimaryuniquefound'] = 'Yabancı anahtarın başvurduğu sütun (lar), başvurulan tablodaki birincil veya benzersiz bir ANAHTAR\'e eklenmelidir. Unutmayın, sütun BENZERSİZ DİZİN\'de olması yeterince iyi değildir.';
$string['nomissingorextraindexesfound'] = 'Eksik veya fazladan dizin bulunmadığından başka bir işlem yapılmasına gerek yoktur.';
$string['noreffieldsspecified'] = 'Belirtilen referans alanı yok';
$string['noreftablespecified'] = 'Belirtilen referans tablosu bulunamadı';
$string['noviolatedforeignkeysfound'] = 'İhlal edilmiş yabancı anahtar bulunamadı';
$string['nowrongdefaultsfound'] = 'Hiçbir varsayılan tutarsız değer bulunmadı, DB\'nizin başka bir eyleme gereksinimi yoktur.';
$string['nowrongintsfound'] = 'Hiçbir yanlış tam sayı bulunmadı, DB\'nizin başka bir eyleme gereksinimi yoktur.';
$string['nowrongoraclesemanticsfound'] = 'BYTE semantiği kullanan Oracle sütunları bulunamadı, DB\'nizde başka işlem yapılmasına gerek yok.';
$string['numberincorrectdecimals'] = 'Sayı alanı için geçersiz ondalık basamak sayısı';
$string['numberincorrectlength'] = 'Sayı alanı için geçersiz uzunluk';
$string['numberincorrectwholepart'] = 'Sayı alanı için çok büyük tam sayı parçası';
$string['pendingchanges'] = 'Not: Bu dosyada değişiklikler yaptınız. İstediğiniz zaman kaydedilebilir.';
$string['pendingchangescannotbesaved'] = 'Bu dosyada değişiklikler var ancak kaydedilemezler! Lütfen hem dizin hem de içindeki "install.xml" dosyasının web sunucusu için yazma izinlerine sahip olduğunu doğrulayın.';
$string['pendingchangescannotbesavedreload'] = 'Bu dosyada değişiklikler yapıldı fakat kaydedilemedi! Lütfen hem klasörün hem de "install.xml" dosyasının web sunucusu tarafından yazma izinlerinin verildiğinden emin olun. Daha sonra bu sayfayı tekrar yükleyin. Değişiklikleri kaydedebiliyor olmanız gerekir.';
$string['persistentfieldscomplete'] = 'Aşağıdaki alanlar eklenmiştir:';
$string['persistentfieldsconfirm'] = 'Aşağıdaki alanları eklemek istiyor musunuz?';
$string['persistentfieldsexist'] = 'Aşağıdaki alanlar zaten mevcuttur:';
$string['pluginname'] = 'XMLDB düzenleyicisi';
$string['primarykeyonlyallownotnullfields'] = 'Birincil anahtarlar boş olamaz';
$string['privacy:metadata'] = 'XMLDB düzenleyici eklentisi herhangi bir kişisel veri saklamaz.';
$string['reconcile_files'] = 'Uzlaştırılması gereken XMLDB dosyalarını arayın';
$string['reconcile_files_intro'] = 'işlevi, XMLDB düzenleyicisinden oluşturmanın sonuçlarıyla eşleştiklerini doğrulamak için tüm XMLDB dosyalarının içeriğine bakar.

Uzlaştırılması (yeniden oluşturulması) gereken dosyaların bir listesi görüntülenir ve XMLDB düzenleyicisi bunları düzeltmek için kullanılabilir.';
$string['reconcile_files_no'] = 'Tüm dosyalarda sorun yok. Uzlaştırmaya gerek yok.';
$string['reconcile_files_yes'] = 'Uzlaştırılacak dosyalar bulundu:';
$string['reconcilefiles'] = 'XMLDB dosyalarını uzlaştırma';
$string['reserved'] = 'Rezerve edilmiş';
$string['reservedwords'] = 'Rezerve edilmiş kelimeler';
$string['revert'] = 'Geri Al';
$string['revert_changes'] = 'Değişiklikleri Geri Al';
$string['save'] = 'Kaydet';
$string['searchresults'] = 'Arama Sonuçları';
$string['selectaction'] = 'Eylem Seç:';
$string['selectdb'] = 'Veritabanı Seç:';
$string['selectfieldkeyindex'] = 'Alan/Anahtar/İndex Seç:';
$string['selectonecommand'] = 'PHP kodunu görmek için, lütfen listeden bir eylem seçin.';
$string['selectonefieldkeyindex'] = 'PHP kodunu görmek için, lütfen listeden bir Alan/Anahtar/İndex seçin.';
$string['selecttable'] = 'Tablo Seç:';
$string['table'] = 'Tablo';
$string['tablenameempty'] = 'Tablo adı boş olamaz';
$string['tables'] = 'Tablolar';
$string['unknownfield'] = 'Bilinmeyen bir alana atıfta bulunur.';
$string['unknowntable'] = 'bilinmeyen bir tabloya atıfta bulunur';
$string['unload'] = 'Boşalt';
$string['up'] = 'Yukarı';
$string['view'] = 'Görüntüe';
$string['view_reserved_words'] = 'Rezerve edilmiş kelimeleri görüntüle';
$string['view_structure_php'] = 'PHP yapısını görüntüle';
$string['view_structure_sql'] = 'SQL yapısını görüntüle';
$string['view_table_php'] = 'PHP tablosunu görüntüle';
$string['view_table_sql'] = 'SQL tablosunu görüntüle';
$string['viewedited'] = 'Düzeltilmişi görüntüle';
$string['vieworiginal'] = 'Orijinaline görüntüle';
$string['viewphpcode'] = 'PHP Koduna görüntüle';
$string['viewsqlcode'] = 'SQL Koduna görüntüle';
$string['viewxml'] = 'XML';
$string['violatedforeignkeys'] = 'Bozuk ilişikili anahtarlar';
$string['violatedforeignkeysfound'] = 'İhlal edilen yabancı anahtarlar bulundu';
$string['violations'] = 'İhlaller';
$string['wrong'] = 'Yanlış';
$string['wrongdefaults'] = 'Yanlış varsayılanlar bulundu';
$string['wrongints'] = 'Hatalı tamsayılar bulundu';
$string['wronglengthforenum'] = 'Enum alanı için geçersiz uzunluk';
$string['wrongnumberofreffields'] = 'Yanlış sayıda başvuru alanı';
$string['wrongoraclesemantics'] = 'Yanlış Oracle BYTE semantiği bulundu';
$string['wrongreservedwords'] = 'Şu anda kullanılan ayrılmış kelimeler<br />( $CFG->prefix kullanılıyorsa tablo adlarının önemli olmadığını unutmayın)';
$string['yesextraindexesfound'] = 'Aşağıdaki ek dizinler bulundu.';
$string['yesmissingindexesfound'] = '<p>DB\'nizde bazı eksik indeksler bulundu. İşte bunların ayrıntıları ve hepsini oluşturmak için en sevdiğiniz SQL arayüzü ile yürütülmesi gereken SQL ifadeleri. Önce verilerinizi yedeklemeyi unutmayın!<p>
<p>Bunu yaptıktan sonra, başka eksik indekslerin bulunmadığını tekrar denetlemek için bu işlevi yürütmek ısrarla önerilir.</p>';
$string['yeswrongdefaultsfound'] = '<p>Veritabanınızda bazı tutarsız varsayılanlar bulundu. İşte bunların ayrıntıları ve hepsini düzeltmek için favori SQL arayüzünüzle yürütülmesi gereken SQL deyimleri. Önce verilerinizi yedeklemeyi unutmayın!</p>';
$string['yeswrongintsfound'] = 'DB\'nizde BYTE semantiği kullanan bazı Oracle sütunları bulundu. Burada bunların ayrıntıları ve hepsini dönüştürmek için en sevdiğiniz SQL arayüzü ile çalıştırılacak gerekli SQL deyimleri bulunmaktadır. Önce verilerinizi yedeklemeyi unutmayın!</p>
<p>Bunu yaptıktan sonra, başka yanlış tam sayıların bulunmadığını tekrar denetlemek için bu işlevi yürütmek ısrarla önerilir.</p>';
$string['yeswrongoraclesemanticsfound'] = 'DB\'nizde BYTE semantiği kullanan bazı Oracle sütunları bulundu. Burada bunların ayrıntıları ve hepsini dönüştürmek için en sevdiğiniz SQL arayüzü ile çalıştırılacak gerekli SQL deyimleri bulunmaktadır. Önce verilerinizi yedeklemeyi unutmayın!</p>
<p>Bunu yaptıktan sonra, başka yanlış tam sayıların bulunmadığını tekrar denetlemek için bu işlevi yürütmek ısrarla önerilir.</p>';
