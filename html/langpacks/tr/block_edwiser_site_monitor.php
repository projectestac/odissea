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
 * Strings for component 'block_edwiser_site_monitor', language 'tr', version '4.5'.
 *
 * @package     block_edwiser_site_monitor
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activeusers'] = 'Etkin';
$string['cannotshowonsidebar'] = 'Kenar çubuğunda kullanım tablosu gösterilemiyor. Kullanım tablosunu görmek için lütfen bloğu içerik bölgesine taşıyın.';
$string['changelog'] = 'Günlüğü değiştir';
$string['checksettings'] = 'Please <a target="_blank" href="{$a->link}">{$a->text}</a> kontrol edin';
$string['comeswith'] = 'Şununla birlikte gelir: {$a}';
$string['configtitle'] = 'Edwiser Site Monitor blok başlığı';
$string['contactus'] = 'Bize Ulaşın';
$string['cpu'] = 'İşlemci';
$string['cpucommandnotallowed'] = 'Komut satırı <strong>/proc/cpuinfo</strong> --İzin Reddedildi.';
$string['cpuhigherlimit'] = 'CPU üst sınırı';
$string['cpuhigherlimit_help'] = 'CPU kullanımı üst sınırı';
$string['cpulimit_invalid'] = 'Lütfen geçerli CPU limitini belirtin';
$string['cpulimit_overlap'] = 'Lütfen geçerli CPU limitini sağlayın. Üst limit alt limite eşit veya daha az olamaz';
$string['cpulowerlimit'] = 'CPU alt sınırı';
$string['cpulowerlimit_help'] = 'CPU kullanımı alt limiti';
$string['cpuusage'] = 'İşlemci kullanımı';
$string['crontask'] = 'Edwiser Site Monitor - 24 saatlik toplanan kullanım istatistikleri';
$string['crontaskwarning'] = '24 saatlik kullanım verilerini görmek için her 5 dakikada bir cron görevi çalıştırmanız gerekir. Cron\'u kurmak için bu <a target="_blank" href="{$a}"> bağlantı </a>\'sini izleyin.';
$string['deletedusers'] = 'Silinen';
$string['edwiser_site_monitor:addinstance'] = 'Yeni bir site izleme bloğu ekle';
$string['edwiser_site_monitor:myaddinstance'] = 'Gösterge Tablosuna yeni bir site monitörü ekleyin';
$string['edwiserplugins'] = 'Edwiser Eklentileri';
$string['emailfailed'] = 'Eposta gönderilemiyor';
$string['emailsent'] = 'Eposta gönderildi.';
$string['emailsuccess'] = 'Mesajınız başarıyla gönderildi. Teşekkürler.';
$string['enablethreshold'] = 'Eşik sınırlarını etkinleştir';
$string['enablethreshold_help'] = 'Bu, eşik kontrollerini etkinleştirecek ve kullanım alt limitten az veya üst limitten fazla ise e-posta gönderecektir';
$string['errorfetching'] = 'Eklenti ZIP alınırken hata oluştu. <b> {$a}</b>';
$string['errorfetchingexist'] = 'ZIP eklentisi alınırken hata oluştu: Hedef konum mevcut. <b> {$a}</b>';
$string['errors'] = 'Hatalar';
$string['failed'] = 'Başarısız';
$string['hader-threshold'] = 'Eşik';
$string['header-current'] = 'Şimdiki';
$string['header-expected'] = 'Düşük/Yüksek';
$string['header-type'] = 'Tür';
$string['high'] = 'Yüksek';
$string['highusage'] = 'Yüksek kullanım';
$string['installnew'] = 'Yeni eklentiyi yükle';
$string['invalidjsonfile'] = 'Geçersiz Edwiser ürün listesi.';
$string['invalidzip'] = 'Geçersiz zip dosyası.  <b>{$a}</b>';
$string['knowmore'] = 'Daha Fazla Bilgi Edinin';
$string['last24hoursusage'] = 'Son 24 saat kullanım';
$string['livestatusrefreshrate'] = 'Yenileme hızı';
$string['livestatusrefreshrate_help'] = 'Canlı durum sekmesi için yenileme hızı saniyeler içinde';
$string['livestatusrefreshrate_invalid'] = 'Lütfen saniyeler içinde geçerli yenileme hızı sağlayın';
$string['liveusage'] = 'Canlı kullanım';
$string['liveusers'] = 'Canlı kullanıcılar';
$string['low'] = 'Düşük';
$string['lowusage'] = 'Düşük kullanım';
$string['memory'] = 'Bellek';
$string['memorycommandnotallowed'] = 'Komut satırı <strong>ücretsiz< / strong > -- İzin Reddedildi.';
$string['memoryhigherlimit'] = 'Bellek daha yüksek sınırı';
$string['memoryhigherlimit_help'] = 'Daha yüksek bellek kullanım sınırı';
$string['memorylimit_invalid'] = 'Lütfen geçerli bir bellek sınırı belirtin';
$string['memorylimit_overlap'] = 'Lütfen geçerli bir bellek sınırı belirtin. Daha yüksek sınır, alt sınıra eşit veya daha az olamaz';
$string['memorylowerlimit'] = 'Bellek alt sınırı';
$string['memorylowerlimit_help'] = 'Bellek kullanımının alt sınırı';
$string['memoryusage'] = 'Bellek kullanımı';
$string['messageprovider:notifications'] = 'Edwiser Haberleri ve Güncellemeleri';
$string['moderateusage'] = 'Orta düzeyde kullanım';
$string['news'] = 'Edwiser Haberleri ve Güncellemeleri';
$string['noupdates'] = 'Her şey güncel.';
$string['otherplugins'] = 'Diğer Eklentiler';
$string['pluginname'] = 'Edwiser Site İzleyicisi';
$string['policy'] = '<a href="{$a}" target="_blank">Gizlilik Politikasını</a> kabul ediyorum';
$string['privacy:metadata'] = 'Site izleyicisi bloğu sunucu hakkındaki bilgileri gösterir.';
$string['privacy:metadata:block_edwiser_site_monitor:cpu'] = 'Kaydedildiğinde sitenin CPU kullanımı.';
$string['privacy:metadata:block_edwiser_site_monitor:memory'] = 'Kaydedildiğinde sitenin hafıza kullanımı.';
$string['privacy:metadata:block_edwiser_site_monitor:storage'] = 'Kaydedildiğinde sitenin depolama kullanımı.';
$string['privacy:metadata:block_edwiser_site_monitor:tableexplanation'] = 'Sitenin işlemci, bellek ve depolama kullanımını depolar.';
$string['privacy:metadata:block_edwiser_site_monitor:time'] = 'Kullanımın kaydedildiği zaman.';
$string['recommendation'] = 'Önerilen Eklentiler';
$string['requirehigherversion'] = 'Moodle sürümü : < b > {$a}< / b> gerektirir';
$string['storage'] = 'Depolama';
$string['storagehigherlimit'] = 'Depolama daha yüksek limit';
$string['storagehigherlimit_help'] = 'Daha yüksek depolama alanı kullanım sınırı';
$string['storagelimit_invalid'] = 'Lütfen geçerli depolama limiti sağlayın';
$string['storagelimit_overlap'] = 'Lütfen geçerli depolama limiti sağlayın. Daha yüksek sınır, alt sınıra eşit veya daha az olamaz';
$string['storagelowerlimit'] = 'Depolama alt sınırı';
$string['storagelowerlimit_help'] = 'Depolama alanı kullanımının alt sınırı';
$string['storageusage'] = 'Depolama kullanımı';
$string['suspendedusers'] = 'Askıya alınan';
$string['thanksmessage'] = 'div style= " arka plan rengi: # efefef; - webkit-metin boyutu ayarı: yok !önemli; kenar boşluğu: 0; dolgu: 70px 70px 70px 70px;"> 0, 0.024) 0px 0px 0px 3px !önemli; sınır yarıçapı: 6 piksel !önemli; kenar boşluğu: otomatik; "kenarlık=" 0 " genişlik="500" hücre aralığı= " 0 "hücre ekleme= "0">
<tbody>
<tr>
önemli; kenarlık-sağ üst-yarıçap: 6 piksel !önemli; kenarlık altı: 0;yazı tipi ailesi: Arial;yazı tipi ağırlığı: kalın;satır yüksekliği: %100; dikey hizalama: orta;">
< center > <img style = "yükseklik: 60 piksel;" src="https://edwiser.org/wp-content/uploads/2016/07/edwiser-logoalternate.png" > < / merkez>
< / td>
< / tr>
<tr>
önemli; "align =" center "valign= "top">
<div style="yazı tipi ailesi: Arial; yazı tipi boyutu: 14 piksel; satır yüksekliği: %150; metin hizala: sol;" > Merhaba {$a - > kullanıcı}, < / div> 14px; satır yüksekliği: %150; metin hizala: sol; " > < br > Bizimle iletişime geçtiğiniz için teşekkür ederiz.<br> < br> Destek ekibimiz önümüzdeki 24 saat içinde geri dönecek.< / div><br > <div style="font-family: Arial; font-size: 14px; satır yüksekliği: %150; metin hizala: sol;">Bu, otomatik olarak oluşturulan bir e-postadır. Ek sorularınız veya yardımlarınız için {$a->email}</div></td></tr></tbody></table><br>adresinden bizimle iletişime geçebilirsiniz
< / div>';
$string['thankssubject'] = 'Bizimle iletişime geçtiğiniz için teşekkür ederiz.';
$string['thresholdheader'] = 'Eşik sınırı';
$string['today'] = 'Bugün';
$string['unabletoloadplugindetails'] = 'Eklenti ayrıntıları yüklenemiyor <b>{$a}</b>';
$string['unabletounzip'] = '<b>{$a}</b> sıkıştırması açılamıyor';
$string['usageemailsubject'] = '{$a}: Edwiser Site Monitor - Kullanım Uyarısı';
$string['users'] = 'Kullanıcılar';
$string['xaxistitle'] = 'Zaman';
$string['yaxistitle'] = '(%) Kullanım';
