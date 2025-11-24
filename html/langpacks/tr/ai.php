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
 * Strings for component 'ai', language 'tr', version '4.5'.
 *
 * @package     ai
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptai'] = 'Kabul et ve devam et';
$string['action'] = 'Eylem';
$string['action_generate_image'] = 'Görüntü oluştur';
$string['action_generate_image_desc'] = 'Bir metin istemine dayalı olarak bir görüntü oluşturur.';
$string['action_generate_text'] = 'Metin oluştur';
$string['action_generate_text_desc'] = 'Bir metin istemine dayalı olarak metin üretir.';
$string['action_generate_text_instruction'] = 'Kullanıcıdan bir metin girişi alacaksınız. Göreviniz onların isteklerine göre metin oluşturmaktır. Bu önemli yönergeleriizleyin:
1. Özeti yalnızca düz metin olarak döndürün.
2. Herhangi bir aşağılayıcı biçimlendirme, selamlama veya basmakalıp sözler eklemeyin.';
$string['action_summarise_text'] = 'Özetleyici metin';
$string['action_summarise_text_desc'] = 'Bir kurs sayfasındaki metin içeriğini özetler.';
$string['action_summarise_text_instruction'] = 'Kullanıcıdan bir metin girişi alacaksınız. Göreviniz sağlanan metni özetlemektir. Şu yönergeleri izleyin:
    1. Yoğunlaştırın: Uzun pasajları önemli noktalara kısaltın.
    2. Basitleştirin: Özellikle öğrenciler için karmaşık bilgilerin anlaşılmasını kolaylaştırın.

Önemli Yönergeler:
    1. Özeti yalnızca düz metin olarak döndürün.
    2. Herhangi bir aşağılayıcı biçimlendirme, selamlama veya basmakalıp sözler eklemeyin.
    3. Açıklığa, kısalığa ve erişilebilirliğe odaklanın.

Özetin okunmasının kolay olduğundan ve orijinal metnin ana noktalarını etkili bir şekilde aktardığından emin olun.';
$string['action_translate_text'] = 'Metni çevir';
$string['action_translate_text_desc'] = 'Sağlanan metni bir dilden diğerine çevirin.';
$string['actionsettingprovider'] = '{$a} işlem ayarları';
$string['actionsettingprovider_desc'] = 'Bu ayarlar, {$a->providername}\'in {$a->actionname} işlemini nasıl gerçekleştireceğini kontrol eder.';
$string['ai'] = 'Yapay Zeka';
$string['aiplacements'] = 'Yapay zeka uygulamaları';
$string['aiproviders'] = 'Yapay Zeka sağlayıcıları';
$string['aiusagepolicy'] = 'YZ uygulama poılitikaları';
$string['availableplacements'] = 'Yapay zeka eylemlerinin nerede kullanılabileceğini seçin';
$string['availableplacements_desc'] = 'Uygulamalar, yapay zeka eylemlerinin sitenizde nasıl ve nerede kullanılabileceğini tanımlar. Ayarlar aracılığıyla her uygulamada hangi eylemlerin kullanılabileceğini seçebilirsiniz.';
$string['availableproviders'] = 'ÖYS\'nize bağlı YZ sağlayıcılarını yönetin';
$string['availableproviders_desc'] = 'Yapay zeka sağlayıcıları, metin özetleme veya görüntü oluşturma gibi \'eylemler\' yoluyla sitenize yapay zeka işlevselliği ekler.<br/>
Her bir sağlayıcı için eylemleri ayarlarından yönetebilirsiniz.';
$string['contentwatermark'] = 'YZ tarafından üretilmiştir';
$string['declineaipolicy'] = 'Reddet';
$string['manageaiplacements'] = 'YZ uygulamalarını yönetin';
$string['manageaiproviders'] = 'YZ tedarikçilerini seçin';
$string['noproviders'] = 'Bu eylem kullanılamaz. Bu eylem için hiçbir <a href="{$a}">sağlayıcı</a> yapılandırılmadı';
$string['placement'] = 'Uygulama';
$string['placementactionsettings'] = 'Eylemler';
$string['placementactionsettings_desc'] = 'Bu yerleştirme için mevcut YZ eylemleri.';
$string['placementsettings'] = 'Uygulama özel ayarları';
$string['placementsettings_desc'] = 'Bu ayarlar, bu YZ yerleşiminin YZ hizmetine nasıl bağlandığını ve ilgili işlemleri kontrol eder.';
$string['privacy:metadata:ai_action_generate_image'] = 'Kullanıcılar tarafından yapılan görüntü oluşturma isteklerini depolayan bir tablo.';
$string['privacy:metadata:ai_action_generate_image:aspectratio'] = 'Oluşturulan görüntülerin en boy oranı.';
$string['privacy:metadata:ai_action_generate_image:numberimages'] = 'Oluşturulan görsellerin sayısı.';
$string['privacy:metadata:ai_action_generate_image:prompt'] = 'Görüntü oluşturma isteği istemi.';
$string['privacy:metadata:ai_action_generate_image:quality'] = 'Oluşturulan görüntülerin kalitesi.';
$string['privacy:metadata:ai_action_generate_image:revisedprompt'] = 'Oluşturulan görüntülerin gözden geçirilmiş istemi.';
$string['privacy:metadata:ai_action_generate_image:sourceurl'] = 'Oluşturulan görüntülerin kaynak URL\'si.';
$string['privacy:metadata:ai_action_generate_image:style'] = 'Oluşturulan görüntülerin stili.';
$string['privacy:metadata:ai_action_generate_text'] = 'Kullanıcılar tarafından yapılan metin oluşturma isteklerini depolayan bir tablo.';
$string['privacy:metadata:ai_action_generate_text:completiontoken'] = 'Metni oluşturmak için kullanılan tamamlama belirteçleri.';
$string['privacy:metadata:ai_action_generate_text:fingerprint'] = 'Modelin ve içeriğin durumunu/versiyonunu temsil eden benzersiz karma.';
$string['privacy:metadata:ai_action_generate_text:generatedcontent'] = 'Yapay zeka modeli tarafından giriş istemine göre oluşturulan gerçek metin.';
$string['privacy:metadata:ai_action_generate_text:prompt'] = 'Metin oluşturma talebi için istem.';
$string['privacy:metadata:ai_action_generate_text:prompttokens'] = 'Metni oluşturmak için kullanılan istem belirteçleri.';
$string['privacy:metadata:ai_action_generate_text:responseid'] = 'Yanıtın kimliği.';
$string['privacy:metadata:ai_action_register'] = 'Kullanıcılar tarafından yapılan eylem isteklerini depolayan bir tablo.';
$string['privacy:metadata:ai_action_register:actionid'] = 'Eylem talebinin kimliği.';
$string['privacy:metadata:ai_action_register:actionname'] = 'Talebin eylem adı.';
$string['privacy:metadata:ai_action_register:provider'] = 'İsteği işleyen sağlayıcının adı.';
$string['privacy:metadata:ai_action_register:success'] = 'Eylem isteğinin durumu.';
$string['privacy:metadata:ai_action_register:timecompleted'] = 'İsteğin tamamlanma süresi.';
$string['privacy:metadata:ai_action_register:timecreated'] = 'İsteğin oluşturulma zamanı.';
$string['privacy:metadata:ai_action_register:userid'] = 'Kullanıcılar tarafından yapılan özet metin isteklerini saklayan bir tablo.';
$string['privacy:metadata:ai_action_summarise_text'] = 'Kullanıcılar tarafından yapılan özet metin isteklerini saklayan bir tablo.';
$string['privacy:metadata:ai_action_summarise_text:completiontoken'] = 'Metni özetlemek için kullanılan tamamlama belirteçleri.';
$string['privacy:metadata:ai_action_summarise_text:fingerprint'] = 'Modelin ve içeriğin durumunu/versiyonunu temsil eden benzersiz karma.';
$string['privacy:metadata:ai_action_summarise_text:generatedcontent'] = 'Yapay zeka modeli tarafından giriş istemine göre oluşturulan gerçek metin.';
$string['privacy:metadata:ai_action_summarise_text:prompt'] = 'Özet metin isteği istemi.';
$string['privacy:metadata:ai_action_summarise_text:prompttokens'] = 'Metni özetlemek için kullanılan bilgi istemi belirteçleri.';
$string['privacy:metadata:ai_action_summarise_text:responseid'] = 'Yanıtın kimliği.';
$string['privacy:metadata:ai_policy_register'] = 'Her kullanıcı için AI politikasının kabul durumunu saklayan bir tablo.';
$string['privacy:metadata:ai_policy_register:contextid'] = 'Verileri kaydedilen bağlamın kimliği.';
$string['privacy:metadata:ai_policy_register:timeaccepted'] = 'Kullanıcının AI politikasını kabul ettiği zaman.';
$string['privacy:metadata:ai_policy_register:userid'] = 'Verileri kaydedilen kullanıcının kimliği.';
$string['provider'] = 'Tedarikçi';
$string['provideractionsettings'] = 'Eylemler';
$string['provideractionsettings_desc'] = '{$a}\'ın sitenizde gerçekleştirebileceği eylemleri seçin ve yapılandırın.';
$string['providers'] = 'Tedarikçiler';
$string['providersettings'] = 'Ayarlar';
$string['userpolicy'] = '<b>Yeni yapay zeka özelliğine hoş geldiniz!</b>
<p>
Yapay Zeka (AI) özelliği, öğrenme ve öğretme deneyiminizi geliştirmek için yalnızca harici Büyük Dil Modellerine (LLM) dayanmaktadır. Bu AI hizmetlerini kullanmaya başlamadan önce lütfen bu kullanım politikasını okuyun.
/p>
h4> <strong> AI tarafından oluşturulan içeriğin doğruluğu </strong> </h4>
<p> AI yararlı öneriler ve bilgiler verebilir, ancak doğruluğu değişebilir. Özel durumunuz için doğru, eksiksiz ve uygun olduğundan emin olmak için sağlanan bilgileri her zaman iki kez kontrol etmelisiniz.
<h4> <strong> Verileriniz nasıl işlenir </strong> </h4>
<p> Bu AI özelliği harici büyük dil modelleri (LLM) kullanır. Bu özelliği kullanırsanız, paylaştığınız herhangi bir bilgi veya kişisel veri, bu LLM\'lerin Gizlilik Politikasına göre ele alınacaktır. Verilerinizi nasıl ele alacaklarını anlamak için gizlilik politikalarını okumanızı öneririz. Ayrıca, bu sitede AI özellikleri ile etkileşimlerinizin bir kaydı kaydedilebilir. </p>
<p> Verilerinizin nasıl işlendiği hakkında sorularınız varsa, lütfen öğretmenlerinize veya öğrenme kuruluşunuza danışın. </p>
<p> Devam ederek, bu politikayı anladığınızı ve kabul ettiğinizi kabul edersiniz. </p>';
