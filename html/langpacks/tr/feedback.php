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
 * Strings for component 'feedback', language 'tr', version '4.5'.
 *
 * @package     feedback
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_item'] = 'Soru ekle';
$string['add_pagebreak'] = 'Sayfa sonu ekle';
$string['adjustment'] = 'Ayar';
$string['after_submit'] = 'Gönderdikten sonra';
$string['allowfullanonymous'] = 'Tam anonim olarak izin ver';
$string['analysis'] = 'Analiz';
$string['anonymous'] = 'Anonim';
$string['anonymous_edit'] = 'Kullanıcı adlarını kaydet';
$string['anonymous_entries'] = 'Anonim kayıtlar ({$a})';
$string['anonymous_user'] = 'Anonim kullanıcı';
$string['answerquestions'] = 'Soruları cevaplayın';
$string['append_new_items'] = 'Yeni ögeleri ekle';
$string['autonumbering'] = 'Otomatik numaralandırılmış sorular';
$string['autonumbering_help'] = 'Her soru için otomatik sayıları etkinleştirir veya devre dışı bırakır';
$string['average'] = 'Ortalama';
$string['bold'] = 'Kalın';
$string['calendarend'] = '{$a} kapanıyor';
$string['calendarstart'] = '{$a} açılıyor';
$string['cannotaccess'] = 'Bu geribildirime yalnızca bir dersten erişebilirsiniz';
$string['cannotcreatepagebreak'] = 'Bu sayfa başına sayfa sonu eklenemez ve sonuna da yalnızca bir sayfa sonu eklenebilir';
$string['cannotsavetempl'] = 'Şablonları kaydetmeye izin verilmiyor';
$string['captcha'] = 'Captcha';
$string['captchanotset'] = 'Captcha ayarlanmamış.';
$string['check'] = 'Çoktan seçmeli - çoklu cevaplar';
$string['check_values'] = 'Olası yanıtlar';
$string['checkbox'] = 'Çoklu Seçme - birden fazla cevaba izin ver (onay kutuları)';
$string['choosefile'] = 'Dosya seç';
$string['chosen_feedback_response'] = 'Seçilen geri bildirim yanıtı';
$string['closebeforeopen'] = 'Başlangıç tarihinden önce bir bitiş tarihi belirttiniz.';
$string['complete_the_form'] = 'Soruları cevaplayın...';
$string['completed'] = 'Tamamlandı';
$string['completed_feedbacks'] = 'Gönderilen cevaplar';
$string['completedon'] = '{$a} tarihinde tamamlandı';
$string['completiondetail:submit'] = 'Geri bildirim gönder';
$string['completionsubmit'] = 'Geri bildirim gönder';
$string['configallowfullanonymous'] = '\'Evet\' olarak ayarlanırsa, kullanıcılar oturum açmak zorunda kalmadan anasayfada bir geri bildirim etkinliği gerçekleştirebilirler.';
$string['confirmdeleteentry'] = 'Bu girdiyi silmek istediğinizden emin misiniz?';
$string['confirmdeleteitem'] = 'Bu ögeyi silmek istediğinizden emin misiniz?';
$string['confirmdeletetemplate'] = 'Bu şablonu silmek istediğinizden emin misiniz?';
$string['confirmusetemplate'] = 'Bu şablonu kullanmak istediğinizden emin misiniz?';
$string['continue_the_form'] = 'Soruları cevaplamaya devam edin';
$string['count_of_nums'] = 'Sayıları sayma';
$string['courseid'] = 'Kurs Kimliği';
$string['creating_templates'] = 'Bu soruları yeni bir şablon olarak kaydet';
$string['delete_entry'] = 'Girdiyi sil';
$string['delete_item'] = 'Soruyu sil';
$string['delete_old_items'] = 'Eski ögeleri sil';
$string['delete_pagebreak'] = 'Sayfa sonu sil';
$string['delete_template'] = 'Şablonu sil';
$string['delete_templates'] = 'Şablonu sil...';
$string['depending'] = 'Bağımlılıklar';
$string['depending_help'] = '<br /> Başka bir öğenin değerine bağlı olarak bir öğe göstermek mümkündür. <br />
<strong> İşte bir örnek. </strong> <br />
<ul>
<li> Önce, başka bir öğenin üzerinde bağımlı olacağı bir öğe oluşturun. </li>
<li> Ardından, sayfa sonu ekleyin. </li>
<li> Öğe daha önce oluşturulan öğenin değerine bağlı öğeleri ekleyin. "Bağımlılık maddesi" etiketli listeden kalemi seçin ve "Bağımlılık değeri" etiketli metin kutusuna gerekli değeri yazın. </li>
</ul>
<strong> Öğe yapısı şöyle görünmelidir. </strong>
<ol>
<li> Öğe Q: Bir arabanız var mı? A: evet / hayır </li>
<li> Sayfa sonu</li>
<li> Öğe Q: Otomobiliniz hangi renktedir? <br />
(Bu öğe değeri 1 olan öğeye 1 bağlıdır) </li>
<li> Öğe Q: Neden arabanız yok mu? <br />
(Bu öğe değeri = 1 olan öğeye 1 bağlıdır) </li>
<li> ... diğer öğeler </li>
</ol>';
$string['dependitem'] = 'Bağımlılık öğesi';
$string['dependvalue'] = 'Bağımlılık değeri';
$string['description'] = 'Açıklama';
$string['do_not_analyse_empty_submits'] = 'Boş gönderileri analiz etmeyin';
$string['downloadresponseas'] = 'Tüm yanıtları şu şekilde indirin:';
$string['drop_feedback'] = 'Bu kursdan çıkar';
$string['dropdown'] = 'Çoktan seçmeli - tek cevaba izin ver (açılır menü)';
$string['dropdown_values'] = 'Cevaplar';
$string['dropdownlist'] = 'Çoktan seçmeli - tek cevap (açılır menü)';
$string['dropdownrated'] = 'Açılır menü listesi (puanlamalı)';
$string['edit_item'] = 'Soru düzenle';
$string['edit_items'] = 'Soruları düzenle';
$string['email_notification'] = 'Gönderimler için bildirimleri etkinleştir.';
$string['email_notification_help'] = 'Etkinleştirilirse, öğretmenler geribildirim gönderimlerine ilişkin bildirim alır.';
$string['emailteachermail'] = '{$a->username} geribildirim etkinliğini tamamladı: \'{$a->feedback}\'

Burada görebilirsiniz:

{$a->url}';
$string['emailteachermailhtml'] = '<p>{$a->username} geribildirim etkinliğini tamamladı: <i>\'{$a->feedback}\'</i></p>
<p>
Geri bildirimi <a href="{$a->url}">burada</a>görebilirsiniz.</p>';
$string['entries_saved'] = 'Cevaplarınız kaydedildi. Teşekkürler.';
$string['eventresponsedeleted'] = 'Yanıt silindi';
$string['eventresponsesubmitted'] = 'Yanıt gönderildi';
$string['export_questions'] = 'Soruları dışa ver';
$string['export_to_excel'] = 'Excel\'e gönder';
$string['feedback:addinstance'] = 'Yeni bir geri bildirim ekle';
$string['feedback:complete'] = 'Geri bildirimi tamamla';
$string['feedback:createprivatetemplate'] = 'Özel şablon oluştur';
$string['feedback:createpublictemplate'] = 'Genel şablon oluştur';
$string['feedback:deletesubmissions'] = 'Tamamlanmış gönderimleri sil';
$string['feedback:deletetemplate'] = 'Şablon sil';
$string['feedback:edititems'] = 'Ögeleri düzenle';
$string['feedback:mapcourse'] = 'Genel geribildirimleri kurslarla eşleştir';
$string['feedback:receivemail'] = 'E-posta bildirimlerini al';
$string['feedback:view'] = 'Geri bildirime bak';
$string['feedback:viewanalysepage'] = 'Gönderdikten sonra analiz sayfasına bak';
$string['feedback:viewreports'] = 'Raporlara bak';
$string['feedback_is_not_for_anonymous'] = 'Geri bildirim anonim değil';
$string['feedback_is_not_open'] = 'Geri bildirim açık değil';
$string['feedbackclose'] = 'Şuna yazılan cevaplara izin ver:';
$string['feedbackcompleted'] = '{$a->username} tamamlandı {$a->feedbackname}';
$string['feedbackopen'] = 'Şu tarihten itibaren izin ver:';
$string['feedbackupdated'] = 'Geri bildirim güncellendi';
$string['file'] = 'Dosya';
$string['filter_by_course'] = 'Kursa göre süz';
$string['handling_error'] = 'İşlem yapılırken geribildirimde sorun oluştu';
$string['hide_no_select_option'] = '"Seçilmedi" seçeneğini gizle';
$string['horizontal'] = 'Yatay';
$string['import_questions'] = 'Soruları içe aktar';
$string['import_successfully'] = 'İçe alma başarılı';
$string['importfromthisfile'] = 'Bu dosyadan içe aktar';
$string['includeuserinrecipientslist'] = 'Alıcılar listesine {$a} ekleyin';
$string['indicator:cognitivedepth'] = 'Geri bildirim bilişsel';
$string['indicator:cognitivedepth_help'] = 'Bu gösterge, öğrencinin Geri Bildirim etkinliğinde ulaştığı bilişsel derinliğe dayanır.';
$string['indicator:cognitivedepthdef'] = 'Geri bildirim bilişsel';
$string['indicator:cognitivedepthdef_help'] = 'Katılımcı, bu analiz aralığı boyunca Geri Bildirim etkinliklerinin sunduğu bilişsel etkileşim yüzdesine ulaştı (Seviye = Görüntüleme yok, Görüntüle, Gönder)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Geri bildirim sosyal';
$string['indicator:socialbreadth_help'] = 'Bu gösterge, öğrencinin Geri Bildirim etkinliğinde ulaştığı sosyal genişliği temel alır.';
$string['indicator:socialbreadthdef'] = 'Geri bildirim sosyal';
$string['indicator:socialbreadthdef_help'] = 'Katılımcı, bu analiz aralığı boyunca Geri Bildirim etkinliklerinin sunduğu sosyal etkileşim yüzdesine ulaştı (Seviye = Katılım yok, Katılımcı tek başına, Katılımcı diğer kişilerle)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['info'] = 'Bilgi';
$string['infotype'] = 'Bilgi türü';
$string['insufficient_responses'] = 'Yetersiz yanıtlar';
$string['insufficient_responses_for_this_group'] = 'Bu grup için yeterli yanıt yok';
$string['insufficient_responses_help'] = 'Geri bildirimin anonim olması için en az 2 yanıt olması gerekir.';
$string['item_label'] = 'Etiket';
$string['item_name'] = 'Soru';
$string['label'] = 'Metin ve çoklu ortam alanı';
$string['labelcontents'] = 'İçerikler';
$string['mapcourse'] = 'Geri bildirimi derslere eşleştirin';
$string['mapcourse_help'] = 'Varsayılan olarak, ana sayfanızda oluşturulan geribildirim formları site genelinde kullanılabilir
Ve geribildirim bloğunu kullanarak tüm kurslarda görünecektir. Geri bildirim formunu yapışkan bir blok yaparak ya da geri bildirim formunun belirli kurslara eşleştirilerek kısıtlanacak şekilde sınırlayarak zorla gösterebilirsiniz.';
$string['mapcourseinfo'] = 'Bu, geri bildirim bloğunu kullanan tüm kurslarda kullanılabilen site genelinde bir geri bildirimdir. Ancak eşleyerek görüneceği kursları sınırlayabilirsiniz. Kursu arayın ve bu geri bildirimle eşleştirin.';
$string['mapcoursenone'] = 'Eşleştirilmiş kurs yok. Tüm kurslar için geri bildirim mevcuttur';
$string['mapcourses'] = 'Geri bildirimi kurslarla eşleştirin';
$string['mappedcourses'] = 'Eşlenmiş kurslar';
$string['mappingchanged'] = 'Kurs haritalama değiştirildi';
$string['maximal'] = 'azami (en fazla)';
$string['messageprovider:message'] = 'Geri bildirim hatırlatıcısı';
$string['messageprovider:submission'] = 'Geri bildirim bildirimleri';
$string['minimal'] = 'asgari (en az)';
$string['mode'] = 'Mod';
$string['modulename'] = 'Anket (Geri bildirim)';
$string['modulename_help'] = 'Geri bildirim etkinliği, bir öğretmenin, çoktan seçmeli, evet / hayır veya metin girişi de dahil olmak üzere çeşitli soru türlerini kullanan katılımcılardan geri bildirim toplamak için özel anket oluşturmasını sağlar.

Geri bildirim cevapları istenirse anonim olabilir ve sonuçlar tüm katılımcılara gösterilebilir veya sadece öğretmenlerle sınırlı olabilir. Site anasayfasındaki herhangi bir geri bildirim etkinliği, oturum açmamış kullanıcılar tarafından da tamamlanabilir.

Geri bildirim etkinlikleri aşağadaki durumlar için kullanılabilir:

* Kurs değerlendirmeleri için, sonraki katılımcıların içeriğini iyileştirmeye yardımcı olmak
* Katılımcıların kurs modüllerine, etkinliklere vs. kaydolmalarını sağlamak.
* Kurs tercihleri, okul politikaları vb. Konulu anketler için
* Öğrencilerin olayları anonim olarak rapor edebilecekleri zorbalığa karşı anketler için';
$string['modulename_link'] = 'mod/feedback/view';
$string['modulenameplural'] = 'Geri Bildirim';
$string['move_item'] = 'Bu soruyu taşı';
$string['multichoice'] = 'Çoktan seçmeli';
$string['multichoice_values'] = 'Çoktan seçmeli değerleri';
$string['multichoiceoption'] = '<span class="weight">({$a->weight}) </span>{$a->name}';
$string['multichoicerated'] = 'Çoktan seçmeli (puanlamalı)';
$string['multichoicetype'] = 'Çoktan seçmeli tipi';
$string['multiplesubmit'] = 'Birden fazla gönderime izin ver';
$string['multiplesubmit_help'] = 'Evet olarak ayarlanırsa:

* Anonim anketler için: katılımcılar sınırsız yanıt gönderebilir ve tüm yanıtlar kaydedilir.
* Anonim olmayan anketler için: katılımcılar sınırsız yanıt gönderebilir, ancak yalnızca en son yanıtları kaydedilir.';
$string['name'] = 'Ad';
$string['name_required'] = 'Ad gerekli';
$string['nameandlabelformat'] = '({$a->label}) {$a->name}';
$string['next_page'] = 'Sonraki sayfa';
$string['no_handler'] = 'Bunun için hiçbir işleyici bulunmamaktadır:';
$string['no_itemlabel'] = 'Etiket yok';
$string['no_itemname'] = 'Öge ismi yok';
$string['no_items_available_yet'] = 'Henüz soru oluşturulmamış';
$string['no_templates_available_yet'] = 'Henüz kullanılabilir şablon yok';
$string['non_anonymous'] = 'Kullanıcıların adları kaydedilecek ve cevaplarıyla birlikte gösterilecek';
$string['non_anonymous_entries'] = 'anonim olmayan kayıtlar({$a})';
$string['non_respondents_students'] = 'Yanıt vermeyen öğrenciler ({$a})';
$string['not_completed_yet'] = 'Henüz doldurulmadı';
$string['not_selected'] = 'Seçilmedi';
$string['not_started'] = 'Başlatılmadı';
$string['numberoutofrange'] = 'Aralık dışı numara';
$string['numeric'] = 'Sayısal cevap';
$string['numeric_range_from'] = 'Aralık başlangıcı';
$string['numeric_range_to'] = 'Aralık bitişi';
$string['of'] = '/';
$string['oldvaluespreserved'] = 'Tüm eski sorular ve atanan değerler korunacak';
$string['oldvalueswillbedeleted'] = 'Geçerli sorular ve bütün kullanıcı yanıtları silinecek';
$string['only_one_captcha_allowed'] = 'Geri bildirimde yalnızca bir tane captcha\'ya izin verilir';
$string['openafterclose'] = 'Kapanış tarihinden sonra birzamana gelen açılış tarih belirlediniz';
$string['overview'] = 'Gözat';
$string['page'] = 'Sayfa';
$string['page-mod-feedback-x'] = 'Herhangi bir geri bildirim modülü sayfası';
$string['page_after_submit'] = 'Tamamlama bildirimi';
$string['pagebreak'] = 'Sayfa sonu';
$string['pluginadministration'] = 'Geri bildirim yönetimi';
$string['pluginname'] = 'Geri bildirim';
$string['position'] = 'Konum';
$string['previewquestions'] = 'Sorulazı önizle';
$string['previous_page'] = 'Önceki sayfa';
$string['privacy:metadata:completed'] = 'Geri bildirime yapılan başvuruların kaydı';
$string['privacy:metadata:completed:anonymousresponse'] = 'Gönderimin isimsiz olarak kullanılıp kullanılmayacağı.';
$string['privacy:metadata:completed:timemodified'] = 'Gönderimin en son değiştirildiği zaman.';
$string['privacy:metadata:completed:userid'] = 'Geri bildirim etkinliğini tamamlayan kullanıcının kimliği.';
$string['privacy:metadata:completedtmp'] = 'Halen devam etmekte olan gönderimlerin bir kaydı.';
$string['privacy:metadata:value'] = 'Bir sorunun cevabının kaydı.';
$string['privacy:metadata:value:value'] = 'Seçilen cevap.';
$string['privacy:metadata:valuetmp'] = 'Devam etmekte olan bir gönderimde bir soruya verilen cevabın kaydı.';
$string['public'] = 'Genel';
$string['question'] = 'Soru';
$string['questionandsubmission'] = 'Soru ve gönderme ayarları';
$string['questions'] = 'Sorular';
$string['questionslimited'] = 'Sadece {$a} ilk soruları göstererek, tek tek cevapları görüntüleyin veya hepsini görüntülemek için tablo verilerini indirin.';
$string['radio'] = 'Çoktan seçmeli - tek cevap';
$string['radio_values'] = 'Yanıtlar';
$string['ready_feedbacks'] = 'Hazır Geri bildirimler';
$string['required'] = 'Gerekli';
$string['resetting_data'] = 'Yanıtlar';
$string['resetting_delete'] = 'Yanıtları sil';
$string['resetting_feedbacks'] = 'Geri bildirimler temizleniyor';
$string['response_nr'] = 'Yanıt numarası';
$string['responses'] = 'Yanıtlar';
$string['responsetime'] = 'Yanıt süresi';
$string['save_as_new_item'] = 'Yeni soru olarak kaydet';
$string['save_as_new_template'] = 'Yeni bir şablon olarak kaydet';
$string['save_entries'] = 'Cevaplarınızı gönderin';
$string['save_item'] = 'Soruyu kaydet';
$string['saving_failed'] = 'Kaydetme işlemi başarısız';
$string['search:activity'] = 'Geri bildirim - etkinlik bilgileri';
$string['search_course'] = 'Kurs ara';
$string['searchcourses'] = 'Kursları ara';
$string['searchcourses_help'] = 'Bu geribildirimle ilişkilendirmek istediğiniz kursun kodunu veya adını arayın.';
$string['selected_dump'] = '$SESSION değişkeninin içinde seçili bölümler aşağıda gösterilmiştir:';
$string['send'] = 'Gönder';
$string['send_message'] = 'Bildirim gönder';
$string['show_all'] = 'Tümünü göster';
$string['show_analysepage_after_submit'] = 'Analiz sayfasını göster';
$string['show_entries'] = 'Yanıtları göster';
$string['show_entry'] = 'Yanıtı göster';
$string['show_nonrespondents'] = 'Katılımcıları gösterme';
$string['site_after_submit'] = 'Gönderdikten sonraki site';
$string['sort_by_course'] = 'Kursa göre sırala';
$string['started'] = 'Başlatıldı';
$string['startedon'] = 'Başlatılıyor {$a}';
$string['subject'] = 'Konu';
$string['switch_item_to_not_required'] = 'Zorunlu değil olarak belirle';
$string['switch_item_to_required'] = 'Zorunlu olarak belirle';
$string['template'] = 'Şablon';
$string['template_deleted'] = 'Şablon silindi';
$string['template_saved'] = 'Şablon kaydedildi';
$string['templates'] = 'Şablonlar';
$string['textarea'] = 'Uzun metin cevabı';
$string['textarea_height'] = 'Satır sayısı';
$string['textarea_width'] = 'Genişlik';
$string['textfield'] = 'Kısa metin cevabı';
$string['textfield_maxlength'] = 'Kabul edilen en fazla karakter sayısı';
$string['textfield_size'] = 'Metin alanı genişliği';
$string['there_are_no_settings_for_recaptcha'] = 'Captcha için ayar yok.';
$string['this_feedback_is_already_submitted'] = 'Bu etkinliği zaten doldurdunuz.';
$string['typemissing'] = 'Eksik değer "tür"';
$string['update_item'] = 'Soru için değişiklikleri kaydet';
$string['url_for_continue'] = 'Bir sonraki etkinlik bağlantısı';
$string['url_for_continue_help'] = 'Geri bildirim gönderildikten sonra, kurs sayfasına bağlantı veren bir devam düğmesi görüntülenir. Alternatif olarak, etkinliğin URL\'si buraya girilirse bir sonraki etkinliğe bağlanabilir.';
$string['use_one_line_for_each_value'] = 'Her cevap için bir satır kullanın!';
$string['use_this_template'] = 'Bu şablonu kullan';
$string['using_templates'] = 'Bir şablon kullan';
$string['vertical'] = 'Dikey';
$string['whatfor'] = 'Ne yapmak istiyorsun?';
