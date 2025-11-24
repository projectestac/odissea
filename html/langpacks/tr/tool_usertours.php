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
 * Strings for component 'tool_usertours', language 'tr', version '4.5'.
 *
 * @package     tool_usertours
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['above'] = 'Above';
$string['actions'] = 'Eylem';
$string['appliesto'] = 'Aşağıdakiler için geçerlidir';
$string['backdrop'] = 'Arka plan ile göster';
$string['backdrop_help'] = 'Sayfanın işaret ettiğiniz bölümünü vurgulamak için bir fon kullanabilirsiniz.

Not: Arka planlar, gezinme çubuğu gibi sayfanın bazı bölümleriyle uyumlu değildir.';
$string['below'] = 'Aşağıda';
$string['block'] = 'Blok';
$string['block_named'] = '\'{$a}\' adlı blok';
$string['cachedef_stepdata'] = 'Kullanıcı turu adımlarının listesi';
$string['cachedef_tourdata'] = 'Her sayfada getirilen etkin kullanıcı turları bilgilerinin listesi';
$string['confirmstepremovalquestion'] = 'Bu adımı kaldırmak istediğinizden emin misiniz?';
$string['confirmstepremovaltitle'] = 'Confirm step removal';
$string['confirmtourremovalquestion'] = 'Bu turu kaldırmak istediğinizden emin misiniz?';
$string['confirmtourremovaltitle'] = 'Turun kaldırılmasını onaylayın';
$string['content'] = 'İçerik';
$string['content_heading'] = 'İçerik';
$string['content_help'] = 'Adımı açıklayan içerik düz metin olarak eklenebilir ve gerekirse çok dilli etiketlerle (çok dilli içerik filtresiyle kullanmak için) çevrelenebilir.';
$string['content_type'] = 'İçerik türü';
$string['content_type_help'] = '* Manuel - içerik bir metin editörü kullanılarak girilir
* Dil dizesi kimliği - dize tanımlayıcı,bileşen biçiminde (virgülden sonra boşluk olmadan)';
$string['content_type_langstring'] = 'Dil dizisi kimliği';
$string['content_type_manual'] = 'Manual';
$string['cssselector'] = 'CSS seçici';
$string['defaultvalue'] = 'Varsayılan ({$a})';
$string['delay'] = 'Adımı göstermeden önceki gecikme';
$string['delay_help'] = 'Adım görüntülenmeden önce isteğe bağlı olarak bir gecikme eklemeyi seçebilirsiniz.

Bu gecikme milisaniye cinsindendir.';
$string['description'] = 'Tanım';
$string['description_help'] = 'Bir turun açıklaması düz metin olarak eklenebilir, gerekirse çoklu dil etiketleri (çoklu dil içerik filtresi ile kullanım için) içine alınabilir.

Alternatif olarak, bir dil dizesi kimliği identifier,component biçiminde girilebilir (virgülden sonra parantez veya boşluk olmadan)';
$string['displaystepnumbers'] = 'Adım numaralarını göster';
$string['displaystepnumbers_help'] = 'Kullanıcı turunun uzunluğunu belirtmek için 1/4, 2/4 vb. gibi bir adım sayısı gösterilip gösterilmeyeceği.';
$string['done'] = 'Yapıldı';
$string['duplicatetour'] = 'Yinelenen tur';
$string['duplicatetour_name'] = '{$a} (kopyala)';
$string['editstep'] = '"{$a}" düzenleniyor';
$string['enabled'] = 'Etkinleştirildi';
$string['endonesteptour'] = 'Anladım';
$string['endtour'] = 'Turu bitir';
$string['endtourlabel'] = 'Turu sonlandır düğmesinin etiketi';
$string['endtourlabel_help'] = 'Turu sonlandır düğmesi için isteğe bağlı olarak özel bir etiket belirleyebilirsiniz.  Varsayılan etiket, tek adımlı turlar için "Anladım" ve çok adımlı turlar için "Turu sonlandır" şeklindedir.

 Alternatif olarak, biçim tanımlayıcı, bileşen (virgülden sonra parantez veya boşluk olmadan) bir dil dizisi kimliği girilebilir.';
$string['event_step_shown'] = 'Gösterilen adım';
$string['event_tour_ended'] = 'Tur sona erdi';
$string['event_tour_reset'] = 'Tur sıfırlama';
$string['event_tour_started'] = 'Tur başladı';
$string['exporttour'] = 'Turu dışa aktar';
$string['filter_accessdate'] = 'Erişim tarihi';
$string['filter_accessdate_enabled'] = 'Erişim tarihi filtresini etkinleştir';
$string['filter_accessdate_enabled_help'] = 'Turu yalnızca yeni kullanıcılara veya siteye yakın zamanda erişmiş kullanıcılara gösterin.';
$string['filter_category'] = 'Kategori';
$string['filter_category_help'] = 'Turu, seçilen kategorideki bir kursla ilişkili bir sayfada gösterin.';
$string['filter_course'] = 'Kurslar';
$string['filter_course_help'] = 'Turu, seçilen kursla ilişkili bir sayfada gösterin.';
$string['filter_courseformat'] = 'Kurs Biçimi';
$string['filter_courseformat_help'] = 'Turu, seçilen kurs biçimini kullanarak bir kursla ilişkilendirilmiş bir sayfada gösterin.';
$string['filter_cssselector'] = 'CSS seçici';
$string['filter_cssselector_help'] = 'Turu yalnızca belirtilen CSS seçici sayfada bulunduğunda gösterin.';
$string['filter_date_account_creation'] = 'Kullanıcı hesabı oluşturma tarihi';
$string['filter_date_first_login'] = 'Kullanıcının ilk erişim tarihi';
$string['filter_date_last_login'] = 'Kullanıcının son erişim tarihi';
$string['filter_header'] = 'Tur filtreleri';
$string['filter_help'] = 'gösterilmiştir';
$string['filter_role'] = 'Rol';
$string['filter_role_help'] = 'Bir tur, turun gösterildiği bağlamda seçilen rollere sahip kullanıcılarla sınırlandırılabilir. Örneğin, kullanıcılar bir kurstaki öğrenci rolüne sahipse (genellikle olduğu gibi) bir Pano turunu öğrenci rolüne sahip kullanıcılarla sınırlamak işe yaramaz. Bir Pano turu yalnızca sistem rolü olan kullanıcılarla sınırlandırılabilir.';
$string['filter_theme'] = 'Tema';
$string['filter_theme_help'] = 'Kullanıcı seçilen temalardan birini kullanırken turu gösterin.';
$string['importtour'] = 'Turu içeri aktar';
$string['invalid_lang_id'] = 'Geçersiz dil dizisi kimliği';
$string['left'] = 'Sol';
$string['modifyshippedtourwarning'] = 'Bu, Moodle ile birlikte gelen bir kullanıcı turudur. Yaptığınız herhangi bir değişiklik, bir sonraki site yükseltmeniz sırasında geçersiz kılınabilir.';
$string['moodle_language_identifier'] = 'Dil dizisi kimliği';
$string['movestepdown'] = 'Bir adım aşağı git';
$string['movestepup'] = 'Bir adım yukarı git';
$string['movetourdown'] = 'Turu bir aşağı taşı';
$string['movetourup'] = 'Turu bir yukarı taşı';
$string['name'] = 'İsim';
$string['name_help'] = 'Bir turun adı, gerekirse çok dilli etiketler içine alınmış (çok dilli içerik filtresiyle kullanım için) düz metin olarak eklenebilir.

Alternatif olarak, biçim tanımlayıcısı,bileşenine (virgülden sonra parantez veya boşluk olmadan) bir dil dizisi kimliği girilebilir.';
$string['newstep'] = 'Yeni adım';
$string['newtour'] = 'Yeni bir tur oluştur';
$string['next'] = 'Sonraki';
$string['nextstep'] = 'Sonraki';
$string['nextstep_sequence'] = 'Sonraki ({$a->position}/{$a->total})';
$string['options_heading'] = 'Seçenekler';
$string['orphan'] = 'Hedef bulunamadı ise göster';
$string['orphan_help'] = 'Hedef sayfada bulunamadıysa adımı gösterin.';
$string['pathmatch'] = 'URL eşleşmesine uygula';
$string['pathmatch_help'] = 'Turlar, URL\'si bu değerle eşleşen herhangi bir sayfada görüntülenecektir.

Herhangi bir şeyi ifade etmek için % karakterini joker karakter olarak kullanabilirsiniz.
Bazı örnek değerler şunlardır:

* /my/% - Gösterge Tablosu ile eşleşmek için
* /course/view.php?id=2 - belirli bir kursla eşleştirmek için
* /mod/forum/view.php% - forum tartışma listesiyle eşleştirmek için
* /user/profile.php% - kullanıcı profili sayfasıyla eşleştirmek için

Site ana sayfasında bir tur görüntülemek istiyorsanız, değeri kullanabilirsiniz: "FRONTPAGE".';
$string['pausetour'] = 'Duraklat';
$string['placement'] = 'Yerleşim';
$string['placement_help'] = 'Bir adım hedefin üstüne, altına, soluna veya sağına yerleştirilebilir. Mobil görüntüleme için daha iyi ayarlandığından, yukarı veya aşağı önerilir.

Adım belirli bir sayfada belirtilen yere sığmazsa, otomatik olarak başka bir yere yerleştirilir.';
$string['pluginname'] = 'Kullanıcı turları';
$string['privacy:metadata:preference:completed'] = 'Kullanıcının kullanıcı turunu en son tamamladığı zaman.';
$string['privacy:metadata:preference:requested'] = 'Bir kullanıcının en son manuel olarak bir kullanıcı turu talep ettiği zaman.';
$string['privacy:request:preference:completed'] = '"{$a->name}" kullanıcı turunu en son {$a->time} tarihinde tamamlandı olarak işaretlediniz';
$string['privacy:request:preference:requested'] = '"{$a->name}" kullanıcı turunu en son {$a->time} tarihinde talep ettiniz';
$string['reflex'] = 'Tıklamaya devam edin';
$string['reflex_help'] = 'Hedefe tıklandığında bir sonraki adıma geçin.';
$string['resettouronpage'] = 'Bu sayfada kullanıcı turunu sıfırla';
$string['resumetour'] = 'Devam et';
$string['right'] = 'Sağ';
$string['select_block'] = 'Bir blok seçin';
$string['selector_defaulttitle'] = 'Açıklayıcı bir başlık girin';
$string['selectordisplayname'] = '\'{$a}\'ile eşleşen bir CSS seçici';
$string['selecttype'] = 'Adım türünü seçin';
$string['sharedtourslink'] = 'Tur deposu';
$string['showtoureachtime'] = 'bir filtreyle her eşleştiğinde';
$string['showtouruntilcomplete'] = 'kapatılana kadar';
$string['showtourwhen'] = 'Turu göster';
$string['skip'] = 'Atla';
$string['skip_tour'] = 'Turu atla';
$string['target'] = 'Hedef';
$string['target_block'] = 'Blok';
$string['target_heading'] = 'Adım hedefi';
$string['target_selector'] = 'Seçici';
$string['target_selector_targetvalue'] = 'CSS seçici';
$string['target_selector_targetvalue_help'] = 'Bir CSS seçici, sayfadaki hemen hemen her öğeyi hedeflemek için kullanılabilir. Uygun seçici, web tarayıcınızın geliştirici araçları kullanılarak kolayca bulunabilir.';
$string['target_unattached'] = 'Sayfanın ortasında görüntüleme';
$string['targettype'] = 'Hedef türü';
$string['targettype_help'] = 'Her adım sayfanın bir bölümü ile ilişkilendirilir - hedef. Hedef türleri şunlardır:

* Blok - bir adımı belirli bir bloğun yanında görüntülemek için
* CSS seçici - CSS kullanarak hedef alanı doğru bir şekilde tanımlamak için
* Sayfanın ortasında görüntüle - sayfanın belirli bir bölümüyle ilişkilendirilmesi gerekmeyen bir adım için';
$string['title'] = 'Başlık';
$string['title_help'] = 'Bir adımın başlığı düz metin olarak eklenebilir ve gerekirse çoklu dil etiketleri (çoklu dil içerik filtresi ile kullanım için) içine alınabilir.

Alternatif olarak, bir dil dizesi kimliği identifier,component biçiminde girilebilir (virgülden sonra parantez veya boşluk olmadan).';
$string['tour1_content_addingblocks'] = 'Aslında, sayfalarınıza herhangi bir blok eklemeyi dikkatlice düşünün.  Moodle uygulamasında bloklar gösterilmez, bu nedenle genel bir kural olarak sitenizin herhangi bir blok olmadan iyi çalıştığından emin olmak çok daha iyidir.';
$string['tour1_content_blockregion'] = 'Burada hala bir blok bölgesi var. Tüm işlevler Boost temasının başka bir yerinde olduğu için Navigasyon ve Yönetim bloklarını tamamen kaldırmanızı öneririz.';
$string['tour1_content_customisation'] = 'Sitenizin ve site ana sayfasının görünümünü özelleştirmek için bu başlığın köşesindeki ayarlar menüsünü kullanın.  Hemen şimdi düzenlemeyi açmayı deneyin.';
$string['tour1_content_end'] = 'Bu, kullanıcı turunuzun sonudur. Altbilgideki bağlantıyı kullanarak sıfırlamadığınız sürece bir daha gösterilmeyecektir. Bir yönetici olarak bunun gibi kendi turlarınızı da oluşturabilirsiniz!';
$string['tour1_content_navigation'] = 'Ana navigasyon artık bu nav çekmecesi üzerinden yapılıyor. İçerik, sitenin neresinde olduğunuza bağlı olarak güncellenir. Gizlemek veya göstermek için üstteki düğmeyi kullanın.';
$string['tour1_content_welcome'] = 'Boost temasına hoş geldiniz. Daha önceki bir sürümden yükseltme yaptıysanız, bu temada bazı şeylerin biraz farklı göründüğünü fark edebilirsiniz.';
$string['tour1_title_addingblocks'] = 'Blok ekleme';
$string['tour1_title_blockregion'] = 'Blok bölgesi';
$string['tour1_title_customisation'] = 'Özelleştirme';
$string['tour1_title_end'] = 'Turun sonu';
$string['tour1_title_navigation'] = 'Gezinme';
$string['tour1_title_welcome'] = 'Hoşgeldiniz';
$string['tour2_content_addblock'] = 'Düzenlemeyi açarsanız, nav çekmecesinden bloklar ekleyebilirsiniz. Ancak, sayfalarınıza herhangi bir blok ekleme konusunda dikkatlice düşünün. Bloklar Moodle uygulamasında gösterilmez, bu nedenle en iyi kullanıcı deneyimi için kursunuzun herhangi bir blok olmadan iyi çalıştığından emin olmak daha iyidir.';
$string['tour2_content_addingblocks'] = 'Bu düğmeyi kullanarak bu sayfaya bloklar ekleyebilirsiniz. Ancak, sayfalarınıza herhangi bir blok ekleme konusunda dikkatlice düşünün. Bloklar Moodle uygulamasında gösterilmez, bu nedenle en iyi kullanıcı deneyimi için kursunuzun herhangi bir blok olmadan iyi çalıştığından emin olmak daha iyidir.';
$string['tour2_content_customisation'] = 'Herhangi bir kurs ayarını değiştirmek için bu başlığın köşesindeki ayarlar menüsünü kullanın. Her etkinliğin ana sayfasında da benzer bir ayarlar menüsü bulacaksınız. Düzenlemeyi hemen şimdi açmayı deneyin.';
$string['tour2_content_end'] = 'Bu, kullanıcı turunuzun sonudur. Altbilgideki bağlantıyı kullanarak sıfırlamadığınız sürece bir daha gösterilmeyecektir. Site yöneticisi, gerekirse bu site için başka turlar da oluşturabilir.';
$string['tour2_content_navigation'] = 'Navigasyon artık bu nav çekmecesi üzerinden yapılmaktadır. Gizlemek veya göstermek için üstteki düğmeyi kullanın. Kursunuzun bölümleri için bağlantılar olduğunu göreceksiniz.';
$string['tour2_content_opendrawer'] = 'Gezinme çekmecesini şimdi açmayı deneyin.';
$string['tour2_content_participants'] = 'Katılımcıları burada görüntüleyin. Burası aynı zamanda öğrenci eklemek veya kaldırmak için gittiğiniz yerdir.';
$string['tour2_content_welcome'] = 'Boost temasına hoş geldiniz. Siteniz daha önceki bir sürümden yükseltildiyse, kurs sayfasında bazı şeylerin biraz farklı göründüğünü fark edebilirsiniz.';
$string['tour2_title_addblock'] = 'Blok ekle';
$string['tour2_title_addingblocks'] = 'Bloklar ekleniyor';
$string['tour2_title_customisation'] = 'Özelleştirme';
$string['tour2_title_end'] = 'Turun sonu';
$string['tour2_title_navigation'] = 'Gezinme';
$string['tour2_title_opendrawer'] = 'Gezinme çekmecesini aç';
$string['tour2_title_participants'] = 'Kurs katılımcıları';
$string['tour2_title_welcome'] = 'Hoşgeldiniz';
$string['tour3_content_dashboard'] = 'Yeni Panonuz, sizin için en önemli bilgilere kolayca erişmenize yardımcı olacak birçok özelliğe sahiptir.';
$string['tour3_content_displayoptions'] = 'Kurslar kurs adı, kurs kısa adı veya son erişim tarihine göre sıralanabilir.

Ayrıca kursları bir listede, özet bilgilerle veya varsayılan \'kart\' görünümünde görüntülemeyi seçebilirsiniz.';
$string['tour3_content_overview'] = 'Kursa genel bakış bloğu, kayıtlı olduğunuz tüm kursları gösterir.

Şu anda devam etmekte olan veya geçmişte veya gelecekte olan kursları veya yıldız verdiğiniz kursları göstermeyi seçebilirsiniz.';
$string['tour3_content_recentcourses'] = 'Son erişilen kurslar bloğu, en son ziyaret ettiğiniz kursları gösterir ve doğrudan geri dönmenizi sağlar.';
$string['tour3_content_starring'] = 'Öne çıkmak için bir kursa yıldız ekleyebilir veya artık sizin için önemli olmayan bir kursu gizleyebilirsiniz.

Bu işlemler yalnızca görünümünüzü etkiler.

Kursları bir listede veya özet bilgilerle veya varsayılan \'kart\' görünümünde görüntülemeyi de seçebilirsiniz.';
$string['tour3_content_timeline'] = 'Zaman Çizelgesi bloğu, yaklaşan önemli etkinliklerinizi gösterir.

Gelecek hafta, ay veya daha ilerideki etkinlikleri göstermeyi seçebilirsiniz.

Vadesi geçmiş ürünleri de gösterebilirsiniz.';
$string['tour3_title_dashboard'] = 'Kontrol paneliniz';
$string['tour3_title_displayoptions'] = 'Görüntüleme seçenekleri';
$string['tour3_title_overview'] = 'Kurslara genel bakış';
$string['tour3_title_recentcourses'] = 'Son erişilen kurslar';
$string['tour3_title_starring'] = 'Kursları yıldız ekleme ve gizleme';
$string['tour3_title_timeline'] = 'Zaman çizelgesi bloğu';
$string['tour4_content_groupconvo'] = 'Grup mesajlaşmasının etkin olduğu bir grubun üyesiyseniz, grup konuşmalarını burada görürsünüz.

Kurs grup sohbetleri, grubunuzdaki diğer kişilerle özel ve uygun bir konumda etkileşim kurmanıza olanak tanır.';
$string['tour4_content_icon'] = 'Bu simgeyi kullanarak mesajlarınıza herhangi bir sayfadan erişebilirsiniz.

Okunmamış mesajınız varsa okunmamış mesaj sayısı da burada gösterilir.

Mesajlaşma çekmecesini açmak ve tura devam etmek için simgeye tıklayın.';
$string['tour4_content_messaging'] = 'Yeni mesajlaşma özellikleri arasında bir kurs içinde grup mesajlaşması ve size kimlerin mesaj gönderebileceği üzerinde daha iyi kontrol yer alır.';
$string['tour4_content_settings'] = 'Mesajlaşma ayarlarınıza dişli simgesi üzerinden erişebilirsiniz. Yeni bir gizlilik ayarı, size kimlerin mesaj gönderebileceğini kısıtlamanıza olanak tanır.';
$string['tour4_content_starred'] = 'Daha kolay bulunmalarını sağlamak için belirli ileti dizilerine yıldız eklemeyi seçebilirsiniz.';
$string['tour4_title_groupconvo'] = 'Grup mesajları';
$string['tour4_title_icon'] = 'Mesaj';
$string['tour4_title_messaging'] = 'Yeni mesaj arayüzü';
$string['tour4_title_settings'] = 'Mesajlaşma ayarları';
$string['tour4_title_starred'] = 'Yıldızlı';
$string['tour_activityinfo_activity_student_content'] = 'Etkinlik tarihleri ve etkinliği tamamlamak için yapılması gerekenler etkinlik sayfasında gösterilmektedir.';
$string['tour_activityinfo_activity_student_title'] = 'Yeni: Etkinlik bilgileri';
$string['tour_activityinfo_activity_teacher_content'] = 'Etkinlik tarihleri ve tamamlama koşulları artık öğrenciler için her etkinlik sayfasında (ve isteğe bağlı olarak kurs sayfasında) gösterilmektedir.

 Öğrencilerin bir etkinliği elle tamamlandı olarak işaretlemesini gerektiren etkinlikler için, etkinlik sayfasında \'Tamamlandı olarak işaretle\' düğmesi gösterilir.';
$string['tour_activityinfo_activity_teacher_title'] = 'Yeni: Etkinlik bilgileri';
$string['tour_activityinfo_course_student_content'] = 'Etkinlik tarihleri ve/veya etkinliği tamamlamak için yapılması gerekenler kurs sayfasında gösterilir.';
$string['tour_activityinfo_course_student_title'] = 'Yeni: Etkinlik bilgileri';
$string['tour_activityinfo_course_teacher_content'] = 'Yeni kurs ayarları "Tamamlanma koşullarını göster" ve "Etkinlik tarihlerini göster", kurs sayfasında öğrenciler için etkinlik tamamlama koşullarının (ayarlanmışsa) ve/veya tarihlerin görüntülenip görüntülenmeyeceğini seçmenizi sağlar.';
$string['tour_activityinfo_course_teacher_title'] = 'Yeni: Etkinlik bilgileri';
$string['tour_final_step_content'] = 'Bu, kullanıcı turunuzun sonu.  Altbilgideki bağlantıyı kullanarak sıfırlamadığınız sürece tekrar gösterilmez.';
$string['tour_final_step_title'] = 'Turun sonu';
$string['tour_gradebook_action_content'] = '<div class="text-center">@@PIXICON::tour/tour_grader_report_action_menu::tool_usertours@@</div>Sütunları sıralayın ve hangilerinin görüntüleneceğini seçin.  Düzenleme modunda, not öğelerini görüntüleme ve düzenlemeyle ilgili sık kullanılan görevlere erişmek için bu kısayolu kullanın.';
$string['tour_gradebook_action_title'] = 'Eylemlere hızlı bağlantılar';
$string['tour_gradebook_filter_content'] = '<div class="text-center">@@PIXICON::tour/tour_grader_report_initials::tool_usertours@@</div>Öğrencileri adlarının veya soyadlarının baş harflerine göre filtreleyin.';
$string['tour_gradebook_filter_title'] = 'İsme göre filtrele';
$string['tour_gradebook_search_content'] = '<div class="text-center">@@PIXICON::tour/tour_grader_report_search::tool_usertours@@</div>Belirli öğrencileri hızla bulmak için arama kutusunu kullanın.';
$string['tour_gradebook_search_title'] = 'Öğrencileri kolayca bulun';
$string['tour_gradebook_tour_description'] = 'Not defteri değerlendici raponurda arama ve gezinme özellikleri';
$string['tour_gradebook_tour_name'] = 'Not Defteri Değerlendirici Raporu';
$string['tour_navigation_course_announcements_teacher_content'] = '@@PIXICON::tour/tour_course_admin_3::tool_usertours@@<br>Önemli haberleri burada yayınlayın.';
$string['tour_navigation_course_announcements_teacher_title'] = 'Herkese anlatacak bir şey mi var?';
$string['tour_navigation_course_edit_teacher_content'] = '@@PIXICON::tour/tour_course_admin_1::tool_usertours@@<br>Yeni içerik ekleyin veya mevcut içeriği düzenleyin.';
$string['tour_navigation_course_edit_teacher_title'] = 'Düzenleme modunu etkinleştir';
$string['tour_navigation_course_index_student_content'] = 'Etkinliklere göz atın ve ilerlemenizi takip edin.';
$string['tour_navigation_course_index_student_title'] = 'Uygulama Tanıtımı';
$string['tour_navigation_course_index_teacher_content'] = '@@PIXICON::tour/tour_course_admin_2::tool_usertours@@<br>Kurs içeriğini yeniden sıralamak için etkinlikleri sürükleyip bırakın.';
$string['tour_navigation_course_index_teacher_title'] = 'Kurs dizini';
$string['tour_navigation_course_student_tour_des'] = 'Bir kurstaki etkinliklere nereden göz atılır?';
$string['tour_navigation_course_student_tour_name'] = 'Kurs dizini';
$string['tour_navigation_course_teacher_tour_des'] = 'Düzenleme modu, etkinlikleri sürükleyip bırakma ve bir kursta duyuru gönderme';
$string['tour_navigation_course_teacher_tour_name'] = 'Kurs düzenleme';
$string['tour_navigation_dashboard_content'] = 'Yan panelden daha fazla özelliğe erişebilirsiniz.';
$string['tour_navigation_dashboard_title'] = 'Keşfetmek için genişletin';
$string['tour_navigation_dashboard_tour_des'] = 'Blokların bulunabileceği yerler';
$string['tour_navigation_dashboard_tour_name'] = 'Blok çekmecesi';
$string['tour_navigation_mycourses_content'] = '@@PIXICON::tour/tour_mycourses::tool_usertours@@<br>Bu menüden kurs ekleyin, kopyalayın, silin ve gizleyin.';
$string['tour_navigation_mycourses_endtourlabel'] = 'Anladım';
$string['tour_navigation_mycourses_title'] = 'Kurs ve Kategoriler';
$string['tour_navigation_mycourses_tour_des'] = 'Kurslarım sayfasındaki kurs yönetimi seçenekleri';
$string['tour_navigation_mycourses_tour_name'] = 'Kurs yönetimi';
$string['tour_resetforall'] = 'Turun durumu sıfırlandı.  Tekrar tüm kullanıcılara gösterilecektir.';
$string['tourconfig'] = 'Tur ayar dosyası içe aktarıldı';
$string['tourisenabled'] = 'Tur etkin';
$string['tourlist_explanation'] = 'İstediğiniz kadar tur oluşturabilir ve bunları Moodle\'ın farklı bölümleri için etkinleştirebilirsiniz. Sayfa başına yalnızca bir tur oluşturulabilir.';
$string['tours'] = 'Turlar';
$string['usertours'] = 'Kullanıcı turları';
$string['usertours:managetours'] = 'Kullanıcı turları oluşturun, düzenleyin ve kaldırın';
$string['viewtour_edit'] = '<a href="{$a->editlink}">tur varsayılanlarını düzenleyebilir</a> ve <a href="{$a->resetlink}">turu görüntülenmeye zorlayabilirsiniz</a> tüm kullanıcılar tekrar';
$string['viewtour_info'] = 'Bu, \'{$a->turnuvadı}\' turu.  \'{$a->path}\' yolu için geçerlidir.';
