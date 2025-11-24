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
 * Strings for component 'chat', language 'tr', version '4.5'.
 *
 * @package     chat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'Gelecekteki sohbet oturumlarınız var';
$string['ajax'] = 'Kullanılan ajax sürümü';
$string['autoscroll'] = 'Otomatik kaydır';
$string['beep'] = 'Bip sesi';
$string['bubble'] = 'Kabarcık';
$string['cantlogin'] = 'Sohbet odasına giriş yapılamadı!';
$string['chat:addinstance'] = 'Yeni bir sohbet ekle';
$string['chat:chat'] = 'Sohbet odasında konuş';
$string['chat:deletelog'] = 'Sohbet kayıtlarını sil';
$string['chat:exportparticipatedsession'] = 'Katılımcı sohbet oturumlarını dışa aktar';
$string['chat:exportsession'] = 'Sohbet oturumunu dışa aktar';
$string['chat:readlog'] = 'Sohbet günlüklerini görüntüle';
$string['chat:talk'] = 'Sohbet et';
$string['chat:view'] = 'Sohbet etkinliğini görüntüleyin';
$string['chatintro'] = 'Tanıtım';
$string['chatname'] = 'Sohbet odasının adı';
$string['chatreport'] = 'Sohbet oturumları';
$string['chattime'] = 'Sohbet saati';
$string['compact'] = 'Kısa öz';
$string['composemessage'] = 'Bir mesaj oluştur';
$string['configmethod'] = 'AJAX sohbet yöntemi, güncellemeler için sunucuyla düzenli olarak iletişim kuran AJAX tabanlı bir sohbet arayüzü sağlar. Normal sohbet yöntemi, istemcilerin güncellemeler için sunucuyla düzenli olarak iletişim kurmasını içerir. Yapılandırma gerektirmez ve her yerde çalışır, ancak çok sayıda kullanıcı sohbet ediyorsa sunucu üzerinde büyük bir yük oluşturabilir.  Bir sunucu arka plan programı kullanmak Unix\'e kabuk erişimi gerektirir, ancak hızlı ölçeklenebilir bir sohbet ortamı sağlar.';
$string['confignormalupdatemode'] = 'Sohbet odası güncellemeleri, HTTP/1.1 protokolünün <em>Keep-Alive(SürekliBağlantı)</em> özelliği kullanılarak, normalde verimli olarak sunulur; ancak bu, sunucunuza ağır yük getirebilir. Gelişmiş diğer bir seçenek <em>Stream(Akım)</em> planını kullanmaktır. <em>Stream(Akım)</em> daha iyi ölçeklenebilir (chatd yöntemindeki gibi) fakat sunucunuz tarafından desteklenmiyor olabilir.';
$string['configoldping'] = 'Bir kullanıcının bağlantısının kesildiği algılandığında en fazla ne kadar süre geçecek(saniye olarak)? Bu sadece üst sınırdır ve kesintiler zaten çok hızlı şekilde algılanır. Düşük değerler sunucunuza daha fazla istek olmasına sebep olur. Normal yöntemi kullanıyorsanız, bunu <strong>asla</strong> (2 * chat_refresh_room)\'dan daha düşük ayarlamayın.';
$string['configrefreshroom'] = 'Sohbet odası kaç saniyede bir yenilenecek? Bu ayarı düşük tutarsanız sohbet odası daha hızlı yenilenir. Ancak sunucuda çok fazla kullanıcı sohbet ediyorsa sunucunuza ağır yük getirebilir. <em>Stream(Akım)</em> güncellemelerini kullanıyorsanız daha yüksek yenileme sıklığı seçebilirsiniz. 2\'yi deneyin.';
$string['configrefreshuserlist'] = 'Kullanıcı listesi kaç saniyede bir yenilenecek?';
$string['configserverhost'] = 'Daemonun çalıştığı bilgisayarın alan adı';
$string['configserverip'] = 'Yukarıdaki alan adının IP numarası';
$string['configservermax'] = 'İzin verilen en fazla istemci sayısı';
$string['configserverport'] = 'Daemon için sunucuda kullanılacak port';
$string['coursetheme'] = 'Kurs teması';
$string['crontask'] = 'Sohbet modülü için arka plan işleme';
$string['currentchats'] = 'Aktif sohbet oturumları';
$string['currentusers'] = 'Aktif kullanıcılar';
$string['deletesession'] = 'Bu oturumu sil';
$string['deletesessionsure'] = 'Bu oturumu silmek istediğinizden emin misiniz?';
$string['donotusechattime'] = 'Zaman sınırı yok, her zaman açık';
$string['enterchat'] = 'Şimdi sohbete katıl';
$string['entermessage'] = 'Mesajınızı buraya girin';
$string['errornousers'] = 'Hiç kullanıcı bulunamadı!';
$string['eventmessagesent'] = 'Mesajı gönderildi';
$string['eventsessionsviewed'] = 'İzlenen oturumlar';
$string['explaingeneralconfig'] = 'Bu ayarlar <strong>her zaman</strong> kullanılır';
$string['explainmethoddaemon'] = 'Bu ayarlar yalnızca sohbet yöntemi olarak \'Sohbet sunucusu arka plan programı\' seçildiğinde etkili olur.';
$string['explainmethodnormal'] = 'Bu ayarlar yalnızca sohbet yöntemi olarak Normal seçildiğinde bir etkiye sahiptir.';
$string['generalconfig'] = 'Genel yapılandırma';
$string['idle'] = 'Boş geçen';
$string['indicator:cognitivedepth'] = 'Bilişsel sohbet';
$string['indicator:cognitivedepth_help'] = 'Bu gösterge, öğrencinin bir Sohbet etkinliğinde ulaştığı bilişsel derinliğe dayanmaktadır.';
$string['indicator:cognitivedepthdef'] = 'Bilişsel sohbet';
$string['indicator:cognitivedepthdef_help'] = 'Katılımcı, bu analiz aralığı sırasında Sohbet etkinliklerinin sunduğu bilişsel katılımın bu yüzdesine ulaştı (Düzeyler = Görünüm yok, Görüntüle, Gönder, Geri bildirimi görüntüle, Geri bildirim hakkında yorum yap)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Sosyal sohbet';
$string['indicator:socialbreadth_help'] = 'Bu gösterge, öğrencinin bir Sohbet etkinliğinde ulaştığı sosyal genişliğe dayanmaktadır.';
$string['indicator:socialbreadthdef'] = 'Sosyal sohbet';
$string['indicator:socialbreadthdef_help'] = 'Katılımcı, bu analiz aralığı boyunca Sohbet etkinlikleri tarafından sunulan sosyal katılımın bu yüzdesine ulaştı (Düzeyler = Katılım yok, Tek başına katılımcı, Başkalarıyla birlikte katılımcı)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['inputarea'] = 'Girdi alanı';
$string['invalidid'] = 'Bu sohbet odası bulunamadı!';
$string['list_all_sessions'] = 'Tüm oturumları listele';
$string['list_complete_sessions'] = 'Sadece bitmiş oturumları listele';
$string['listing_all_sessions'] = 'Tüm oturumların listesi';
$string['messagebeepseveryone'] = '{$a} herkese sesleniyor!';
$string['messagebeepsyou'] = '{$a} size sesleniyor!';
$string['messageenter'] = '{$a} odaya girdi';
$string['messageexit'] = '{$a} odadan ayrıldı';
$string['messages'] = 'Mesajlar';
$string['messageyoubeep'] = '{$a} kullanıcısına seslendiniz';
$string['method'] = 'Sohbet yöntemi';
$string['methodajax'] = 'AJAX yöntemi';
$string['methoddaemon'] = 'Sohbet sunucusu daemonu';
$string['methodnormal'] = 'Normal yöntemi';
$string['modulename'] = 'Sohbet';
$string['modulename_help'] = 'Sohbet etkinliği modülü, katılımcıların metin tabanlı, gerçek zamanlı senkronize tartışmalar yapmalarını sağlar.

Sohbet, bir kerelik bir etkinlik olabilir veya her gün veya her hafta aynı anda tekrarlanabilir. Sohbet oturumları kaydedilir ve herkesin sohbet oturumu günlüklerini görüntüleme olanağı olan kullanıcılar görüntülemesine veya kısıtlamasına izin verecek şekilde kullanılabilir.

Sohbetler, grup sohbeti yüz yüze görüşemediğinden özellikle yararlıdır; örneğin

* Online kurslara katılan öğrencilerin aynı kurslarla, ancak başka bir yerde başkalarıyla paylaşmalarını sağlamak için düzenli toplantılar düzenlenmesi
* Bir öğrenci geçici olarak öğretmenleriyle sohbet edip işine yetişememektedir.
* Öğrenciler bir araya gelerek deneyimlerini birbirleriyle ve öğretmenleriyle tartışmak için iş tecrübesine başvururlar.
* Küçük yaştaki çocuklar, akşamları evde sohbetlerini sosyal ağ dünyasına kontrollü (izlenen) giriş olarak kullanıyor.
* Farklı bir konumda davet edilen bir konuşmacı ile soru cevap oturumu
* Öğrencilerin öğretmenin veya diğer öğrencilerin örnek sorular sunacağı testlere hazırlanmaları için oturumlar';
$string['modulename_link'] = 'mod/chat/view';
$string['modulenameplural'] = 'Sohbetler';
$string['neverdeletemessages'] = 'Mesajları asla silme';
$string['nextchattime'] = 'Sonraki sohbet zamanı:';
$string['no_complete_sessions_found'] = 'Bitmiş oturum bulunamadı.';
$string['nochat'] = 'Sohbet yok';
$string['noguests'] = 'Sohbet odası konuklara açık değildir';
$string['nomessages'] = 'Henüz mesaj yok';
$string['nopermissiontoseethechatlog'] = 'Sohbet günlüklerini görme izniniz yok.';
$string['normalkeepalive'] = 'KeepAlive(SürekliBağlantı)';
$string['normalstream'] = 'Stream(Akım)';
$string['noscheduledsession'] = 'Zamanlanmış oturum yok';
$string['notallowenter'] = 'Sohbet odasına girmenize izin verilmiyor.';
$string['notlogged'] = 'Giriş yapmadın!';
$string['oldping'] = 'Bağlantı kesimi zaman aşımı';
$string['page-mod-chat-x'] = 'Herhangi bir sohbet modülü sayfası';
$string['pastchats'] = 'Geçmiş sohbet oturumları';
$string['pastsessions'] = 'Geçmiş oturumlar';
$string['pluginadministration'] = 'Sohbet Yönetimi';
$string['pluginname'] = 'Sohbet';
$string['privacy:metadata:chat_messages_current'] = 'Mevcut sohbet oturumu. Bu veriler geçicidir ve sohbet oturumu silindikten sonra silinir';
$string['privacy:metadata:chat_users'] = 'Hangi kullanıcıların hangi sohbet odalarında olduğunu takip eder';
$string['privacy:metadata:chat_users:firstping'] = 'Sohbet odasına ilk erişim zamanı';
$string['privacy:metadata:chat_users:ip'] = 'Kullanıcı IP\'si';
$string['privacy:metadata:chat_users:lang'] = 'Kullanıcı dili';
$string['privacy:metadata:chat_users:lastmessageping'] = 'Bu sohbet odasındaki son mesajın zamanı';
$string['privacy:metadata:chat_users:lastping'] = 'Sohbet odasına son erişim zamanı';
$string['privacy:metadata:chat_users:userid'] = 'Kullanıcı kimliği';
$string['privacy:metadata:chat_users:version'] = 'Kullanıcı sohbete nasıl erişti (sockets / basic / ajax / header_js)';
$string['privacy:metadata:messages'] = 'Bir sohbet oturumu sırasında gönderilen mesajların kaydı';
$string['privacy:metadata:messages:issystem'] = 'Mesajın sistem tarafından oluşturulmuş bir mesaj olup olmadığı';
$string['privacy:metadata:messages:message'] = 'Mesaj';
$string['privacy:metadata:messages:timestamp'] = 'Mesajın gönderildiği saat.';
$string['privacy:metadata:messages:userid'] = 'Mesajın yazarının kullanıcı kimliği';
$string['refreshroom'] = 'Odayı yenile';
$string['refreshuserlist'] = 'Kullanıcı listesini yenile';
$string['removemessages'] = 'Tüm mesajlar';
$string['repeatdaily'] = 'Her gün aynı saatte';
$string['repeatnone'] = 'Tekrar yok - sadece belirtilen vakitte';
$string['repeattimes'] = 'Oturum zamanlarını tekrarlayın / yayınlayın';
$string['repeatweekly'] = 'Her hafta aynı vakitte';
$string['saidto'] = 'söyledi';
$string['savemessages'] = 'Geçmiş oturumları kaydet';
$string['search:activity'] = 'Sohbet - etkinlik bilgileri';
$string['seesession'] = 'Bu oturuma gözat';
$string['send'] = 'Gönder';
$string['sending'] = 'Gönderiliyor';
$string['serverhost'] = 'Sunucu adı';
$string['serverip'] = 'Sunucu IP';
$string['servermax'] = 'En fazka kullanıcı';
$string['serverport'] = 'Sunucu bağlantı noktası';
$string['sessions'] = 'Sohbet oturumları';
$string['sessionstartsin'] = 'Bir sonraki sohbet oturumu şu andan itibaren {$a} başlayacak.';
$string['strftimemessage'] = '%H:%M';
$string['studentseereports'] = 'Geçmiş oturumlara herkes gözatabilir';
$string['studentseereports_help'] = 'Hayır olarak ayarlanırsa, yalnızca kullanıcıların mod / sohbeti vardır: readlog özelliği sohbet günlüklerini görebilir';
$string['talk'] = 'Sohbet et';
$string['updatemethod'] = 'Güncelleme türü';
$string['updaterate'] = 'Güncelleme oranı:';
$string['userlist'] = 'Kullanıcı listesi';
$string['usingchat'] = 'Sohbeti  kullanma';
$string['usingchat_help'] = 'Sohbet modülü, sohbet etmeyi biraz daha güzel yapan bazı özellikler içerir.

* İfadeler - Moodle\'ın herhangi bir yerinde yazabileceğiniz herhangi bir suratlı yüzler (ifadeler) de burada yazılabilir; örneğin :-)
* Bağlantılar - Web sitesi adresleri otomatik olarak bağlantılara çevrilecek
* Duygusal - Örneğin, adınız Kim ve siz ": gülüyor!" Yazarsanız, ifade etmek için "/ me" veya ":" ile bir satıra başlayabilirsiniz. Veya "/ ben gülüyor!" Sonra herkes "Kim gülüyor!"
* Bip sesleri - Adının yanındaki "bip" bağlantısını tıklayarak diğer katılımcılara ses gönderebilirsiniz. Sohbetteki tüm kişileri bir kerede bip sesi yapmak için kullanışlı bir kısayol "hepsi bip sesi" yazmanızdır.
* HTML - Bazı HTML kodlarını biliyorsanız, resim eklemek, ses çalmak veya farklı renkli metinler oluşturmak gibi işlemleri yapmak için metninizde kullanabilirsiniz.';
$string['viewreport'] = 'Geçmiş sohbet oturumlar';
