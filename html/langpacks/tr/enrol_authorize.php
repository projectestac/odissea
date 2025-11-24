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
 * Strings for component 'enrol_authorize', language 'tr', version '4.5'.
 *
 * @package     enrol_authorize
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminacceptccs'] = 'Hangi kredi kartı tipleri kabul edilecek?';
$string['adminaccepts'] = 'İzin verilen ödeme yöntemlerini ve tiplerini seçin';
$string['adminauthorizeccapture'] = 'Siparişi İnceleme ve Zamanlanmış-Çekme Ayarları';
$string['adminauthorizeemail'] = 'E-Posta Gönderme Ayarları';
$string['adminauthorizesettings'] = 'Authorize.net Satıcı Hesabı Ayarları';
$string['adminauthorizewide'] = 'Genel Ayarlar';
$string['adminconfighttps'] = 'Bu eklentiyi kullanmak için lütfen,<br />Yönetim >> Değişkenler >> Güvenlik >> HTTP güvenliği içindeki "<a href="{$a->url}">loginhttps</a>" ayarını AÇIK yapın.';
$string['adminconfighttpsgo'] = 'Bu eklentiyi yapılandırmak için <a href="{$a->url}">güvenli sayfaya</a> geçin.';
$string['admincronsetup'] = 'Cron.php bakım betiği son 24 saattir çalışmıyor. <br />Zamanlanmış-çekme özelliğini kullanmak istiyorsanız cron etkin olmalı.<br />\'Authorize.net eklentisini\' <b>etkinleştirin</b> ve <b>cronu</b> düzgün ayarlayın; ya da an_review\'i tekrar <b>seçili durumdan kaldırın.</b><br />Zamanlanmış-çekmeyi etkinleştirmezseniz ve 30 gün içinde işlemleri incelemezseniz işlem iptal edilir.<br />Ödemeleri 30 gün içinde <b>elle</b> kabul etmek veya iptal etmek istiyorsanız <b>an_review\'i seçin</b> ve <b>an_capture_day alanına \'0\'</b> girin.';
$string['adminemailexpiredsort'] = 'Süresi dolacak siparişlerin sayısı emaille eğitimcilere gönderilirken hangisi önemli?';
$string['adminemailexpiredsortcount'] = 'Sipariş sayısı';
$string['adminemailexpiredsortsum'] = 'Toplam ücret';
$string['adminemailexpsetting'] = '(0=email gönderme pasif, varsayılan=2, en fazla=5)<br />(E-posta gönderme için elle-çekme ayarları: cron=etkin, an_review=seçili, an_capture_day=0, an_emailexpired=1-5)';
$string['adminhelpcapturetitle'] = 'Zamanlanmış-Çekme Günü';
$string['adminhelpreviewtitle'] = 'Siparişi İnceleme';
$string['adminneworder'] = 'Değerli Yönetici,

Yeni bir bekleyen sipariş aldınız:

Sipariş no: {$a->orderid}
İşlem ID: {$a->transid}
Kullanıcı: {$a->user}
Kurs: {$a->course}
Miktar: {$a->amount}

ZAMANLANMIŞ-ÇEKME ETKİN Mİ?: {$a->acstatus}

Zamanlanmış-çekme etkinse kredi kartından {$a->captureon} tarihinde çekilecek ve öğrencinin kursa kaydı yapılacak. Diğer durumda {$a->expireon} tarihinde süresi dolacak ve bu tarihten sonra çekilemeyecek.

Ayrıca aşağıdaki linki tıklayarak ödemeyi derhal kabul veya reddedebilir ve öğrenciyi kursa kaydedebilirsiniz:

{$a->url}';
$string['adminnewordersubject'] = '{$a->course}; Bekleyen Yeni Sipariş: {$a->orderid}';
$string['adminpendingorders'] = 'Zamanlanmış-çekme özelliğini etkinleştirmediniz.<br />PROVİZYON durumundaki toplam {$a->count} işlemi kontrol etmezseniz iptal edilecek. <br />Ödemeleri kabul etmek/reddetmek için <a href=\'{$a->url}\'>Ödeme Yönetimi</a> sayfasına gidin.';
$string['adminteachermanagepay'] = 'Eğitimciler kurs ödemelerini yönetebilir.';
$string['allpendingorders'] = 'Tüm Bekleyen Siparişler';
$string['amount'] = 'Miktar';
$string['anlogin'] = 'Authorize.net: Kullanıcı adı';
$string['anpassword'] = 'Authorize.net: Şifre';
$string['anreferer'] = 'Authorize.net satıcı hesabınızda URL referer ayarı yaptıysanız buraya yazınız. Bu, web isteğinde "Referer: URL" başlığını gönderir.';
$string['antestmode'] = 'İşlemleri deneme modunda çalıştır (para çekilmez)';
$string['antrankey'] = 'Authorize.net: İşlem Anahtarı (Transaction Key)';
$string['approvedreview'] = 'İnceleme Onaylandı';
$string['authcaptured'] = 'Yetki Verilmiş / Çekilmiş';
$string['authcode'] = 'Yetki Kodu';
$string['authorize:managepayments'] = 'Ödemeleri yönet';
$string['authorize:uploadcsv'] = 'CSV dosyası yükle';
$string['authorizedpendingcapture'] = 'Yetki Verilmiş / Çekilmeyi Bekliyor';
$string['authorizeerror'] = 'Authorize.net Hatası: {$a}';
$string['avsa'] = 'Adres (cadde) uydu, posta kodu uymadı';
$string['avsb'] = 'Adres bilgisi verilmedi';
$string['avse'] = 'Adres Doğrulama Sistemi Hatası';
$string['avsg'] = 'ABD dışı kart yayıncısı';
$string['avsn'] = 'Ne adres (cadde) ne de posta kodu uymadı';
$string['avsp'] = 'Adres Doğrulama Sistemi uygulanamaz';
$string['avsr'] = 'Tekrar dene - Sistem erişilemez veya zaman aşımı';
$string['avsresult'] = 'Adres Doğrulama: {$a}';
$string['avss'] = 'Servis, yayıncı tarafından desteklenmiyor';
$string['avsu'] = 'Adres bilgisine erişilemiyor';
$string['avsw'] = '9 rakamlık posta kodu eşleşti, adres (cadde) eşleşmedi';
$string['avsx'] = 'Adres (cadde) ve 9 rakamlık posta kodu eşleşti';
$string['avsy'] = 'Adres (cadde) ve 5 rakamlık posta kodu eşleşti';
$string['avsz'] = '5 rakamlık posta kodu eşleşti, adres (cadde) eşleşmedi';
$string['canbecredit'] = '{$a->upto}\'a kadar geri ödenebilir';
$string['cancelled'] = 'İptal Edilmiş';
$string['capture'] = 'Çek';
$string['capturedpendingsettle'] = 'Çekilmiş / Uzlaşma Bekliyor';
$string['capturedsettled'] = 'Çekilmiş / Uzlaşılmış';
$string['captureyes'] = 'Para kredi kartından çekilecek ve öğrencinin derse kaydı yapılacak. Emin misiniz?';
$string['ccexpire'] = 'Geçerlilik Tarihi';
$string['ccexpired'] = 'Kredi kartının süresi geçmiş';
$string['ccinvalid'] = 'Geçersiz kart numarası';
$string['cclastfour'] = 'KK son 4';
$string['ccno'] = 'Kredi Kartı No';
$string['cctype'] = 'Kredi Kartı Tipi';
$string['ccvv'] = 'Onay Kodu';
$string['ccvvhelp'] = 'Kartın arkasına bakınız (son 3 rakam)';
$string['choosemethod'] = 'Kursun kayıt anahtarını biliyorsanız lütfen aşağıya giriniz;<br />Diğer durumda bu kurs için ödeme yapmanız gerekiyor.';
$string['chooseone'] = 'Aşağıdaki iki alandan birini veya ikisini doldurun. Şifre gösterilmez.';
$string['costdefaultdesc'] = 'Bu varsayılan ayarı kullanmak için, <strong>kurs ayarlarında ücret alanına -1</strong> girin.';
$string['cutofftime'] = 'Kesim Zamanı';
$string['dataentered'] = 'Veri girildi';
$string['delete'] = 'Sil';
$string['description'] = 'Authorize.Net modülü, ödeme sağlayıcıları aracılığıyla ücretli kurslar oluşturmanıza yardımcı olur. Kurs ücretini ayarlamanın iki yolu vardır (1) tüm site için varsayılan olarak site genelinde bir ücret veya (2) her kurs için ayrı ayrı ayarlayabileceğiniz bir kurs ayarı. Kurs ücreti site ücretini geçersiz kılar.';
$string['echeckabacode'] = 'Banka ABA Numarası';
$string['echeckaccnum'] = 'Banka Hesap Numarası';
$string['echeckacctype'] = 'Banka Hesap Tipi';
$string['echeckbankname'] = 'Banka Adı';
$string['echeckbusinesschecking'] = 'Ticari Çek';
$string['echeckchecking'] = 'Çek';
$string['echeckfirslasttname'] = 'Banka Hesap Sahibi';
$string['echecksavings'] = 'Tasarruf';
$string['enrolname'] = 'Authorize.net Ödeme Sağlayıcısı';
$string['expired'] = 'Süresi dolan';
$string['haveauthcode'] = 'Zaten bir yetki kodum var';
$string['howmuch'] = 'Ne kadar?';
$string['httpsrequired'] = 'Üzgünüz, isteğinizi şu anda yerine getiremiyoruz. Bu sitenin ayarı doğru yapılandırılmamış.<br /><br />Tarayıcınızın alt tarafında sarı bir kilit görmüyorsanız kredi kartı numaranızı girmeyiniz. Bu, sizinle sunucu arasında gidip gelen verinin şifrelendiği anlamına gelir. Böylece 2 bilgisayar arasında akan bilgi korunmuş olur ve kredi kartı numaranız internet üzerinden yakalanamaz.';
$string['invalidaba'] = 'Geçersiz ABA numarası';
$string['invalidaccnum'] = 'Geçersiz hesap numarası';
$string['invalidacctype'] = 'Geçersiz hesap tipi';
$string['isbusinesschecking'] = 'Ticari çek mi?';
$string['logindesc'] = 'Bu seçenek AÇIK olmalı.<br /><br /><a href="{$a->url}">Loginhttps</a> seçeneğini Değişkenler/Güvenlik bölümünden ayarlayabilirsiniz.<br /><br />Bu seçenek aktif ise sadece giriş ve ödeme sayfaları için güvenli bağlantı (https) kullanılacaktır.';
$string['logininfo'] = 'Authorize.Net hesabınızı yapılandırırken, oturum açma adı gereklidir ve uygun kutuya <strong>ve</strong> işlem anahtarını <strong>veya</strong> şifreyi girmeniz gerekir. Güvenlik önlemleri nedeniyle işlem anahtarını girmenizi öneririz.';
$string['methodcc'] = 'Kredi Kartı';
$string['methodecheck'] = 'E-Çek (ACH)';
$string['missingaba'] = 'ABA numarası eksik';
$string['missingaddress'] = 'Adres eksik';
$string['missingbankname'] = 'Banka adı eksik';
$string['missingcc'] = 'Kart no eksik';
$string['missingccauthcode'] = 'Yetki kodu eksik';
$string['missingcctype'] = 'Kart tipi eksik';
$string['missingcvv'] = 'Onay no eksik';
$string['missingzip'] = 'Posta kodu eksik';
$string['mypaymentsonly'] = 'Sadece benim ödemelerim';
$string['nameoncard'] = 'Kart Üzerindeki İsim';
$string['new'] = 'Yeni';
$string['noreturns'] = 'Geri ödeme yok';
$string['notsettled'] = 'Karara bağlanmamış';
$string['orderdetails'] = 'Sipariş Ayrıntıları';
$string['orderid'] = 'Sipariş ID';
$string['paymentmanagement'] = 'Ödeme Yönetimi';
$string['paymentmethod'] = 'Ödeme Yöntemi';
$string['paymentpending'] = '{$a->orderid} numaralı ödemeniz bu kurs için onay bekliyor. <a href=\'{$a->url}\'>Sipariş Ayrıntılarına</a> bakabilirsiniz.';
$string['pendingecheckemail'] = 'Sayın yönetici,

Şu anda {$a->count} bekleyen eÇek var ve kullanıcıları kaydettirmek için csv dosyası yüklemeniz gerekmektedir.

Bağlantıyı tıklayın ve sayfada görünen yardım dosyasını okuyun:
{$a->url}';
$string['pendingechecksubject'] = '{$a->course}: Bekleyen eÇekler({$a->count})';
$string['pendingordersemail'] = 'Değerli yönetici,

{$a->days} gün içinde "{$a->course}" kursu için onay bekleyen {$a->pending} işlemi kabul etmezseniz süresi dolacak ve iptal edilecek.

Zamanlanmış-çekmeyi etkinleştirmediğiniz için bu uyarı mesajı size gönderilmiştir. Bu durumda ödemeleri elle kabul veya reddetmelisiniz.

Ödemeleri kabul/reddetmek için:

{$a->url}

Zamanlanmış-çekmeyi etkinleştirmek için, artık uyarı mesajı almayacağınız anlamına gelir, bu adrese gidin:

{$a->enrolurl}';
$string['pendingordersemailteacher'] = 'Değerli eğitimci,

"{$a->course}" kursu için {$a->sumcost} {$a->currency} tutan {$a->pending} işlemi {$a->days} gün içinde kabul etmezseniz süresi dolacak.

Yönetici zamanlanmış-çekmeyi etkinleştirmediği için ödemeleri elle kabul veya reddetmek zorundasınız.

{$a->url}';
$string['pendingorderssubject'] = 'UYARI: {$a->course}, {$a->pending} siparişin {$a->days} gün içinde süresi dolacak.';
$string['reason11'] = 'Aynı işlem gönderildi.';
$string['reason13'] = 'Satıcı Giriş ID geçersiz veya hesap etkin değil.';
$string['reason16'] = 'İşlem bulunamadı.';
$string['reason17'] = 'Satıcı bu kredi kartı tipini kabul etmiyor.';
$string['reason245'] = 'Ödeme geçidi tarafından barındırılan form kullanılırken bu e-çek tipine izin verilmiyor.';
$string['reason246'] = 'Bu e-çek tipine izin verilmiyor.';
$string['reason27'] = 'İşlem AVS hatasına sebep oldu. Verilen adres kart sahibinin adresiyle eşleşmiyor.';
$string['reason28'] = 'Satıcı bu kredi kartı tipini kabul etmiyor.';
$string['reason30'] = 'İşleyici yapılandırması hatalı. Satıcı Servis Sağlayıcını arayın.';
$string['reason39'] = 'Verilen para birimi ya hatalı ya desteklenmiyor ya bu satıcı buna izin vermiyor ya da döviz kuru yok.';
$string['reason43'] = 'Satıcı işleyiciyi hatalı yapılandırdı. Satıcı Servis Sağlayıcınızı arayın.';
$string['reason44'] = 'İşlem reddedildi. Kart kodu süzgeci hatası!';
$string['reason45'] = 'İşlem reddedildi. Kart kodu / Adres süzgeci hatası!';
$string['reason47'] = 'Uzlaşma için istenen tutar orijinal provizyondaki miktardan fazla olamaz.';
$string['reason5'] = 'Geçerli bir miktar gerekli.';
$string['reason50'] = 'İşlem faturalandırma uzlaşması beklediği için geri para iadesi yapılamaz.';
$string['reason51'] = 'Bu işleme karşı tüm geri ödemelerin toplamı orijinal işlem miktarından daha büyüktür.';
$string['reason54'] = 'Referans gösterilen işlem geri ödeme şartlarına uymuyor.';
$string['reason55'] = 'Referans edilen işleme karşı tüm geri ödemelerin toplamı orijinal borç miktarını aşıyor.';
$string['reason56'] = 'Bu satıcı sadece eÇek (ACH) işlemlerini kabul ediyor; kredi kartı işlemlerini değil.';
$string['refund'] = 'Geri Öde';
$string['refunded'] = 'Geri Ödenmiş';
$string['returns'] = 'Geri Ödemeler';
$string['reviewfailed'] = 'İnceleme Hatalı';
$string['reviewnotify'] = 'Ödemeniz incelenecek. Bir kaç gün içinde eğitimcinizden bir email bekleyin.';
$string['sendpaymentbutton'] = 'Ödemeyi Yap';
$string['settled'] = 'Uzlaşılmış';
$string['settlementdate'] = 'Uzlaşma Tarihi';
$string['shopper'] = 'Alıcı';
$string['subvoidyes'] = 'Geri ödenen {$a->transid} nolu işlem iptal edilecek ve hesabınıza {$a->amount} yüklenecek. Emin misiniz?';
$string['tested'] = 'Test edilmiş';
$string['testmode'] = '[DENEME MODU]';
$string['testwarning'] = 'Çekme/İptal Etme/Geri Ödeme deneme modunda çalışıyor görünüyor ama veritabanına kayıt eklenmedi/güncellenmedi.';
$string['transid'] = 'İşlem ID';
$string['underreview'] = 'İnceleme Altında';
$string['unenrolstudent'] = 'Öğrencinin ders kaydını sil?';
$string['uploadcsv'] = 'CSV dosyası yükle';
$string['usingccmethod'] = '<a href="{$a->url}"><strong>Kredi Kartı</strong></a> kullanarak kaydol';
$string['usingecheckmethod'] = '<a href="{$a->url}"><strong>E-Çek</strong></a> kullanarak kaydol';
$string['verifyaccount'] = 'Authorize.net satıcı hesabınızı doğrulayın';
$string['verifyaccountresult'] = 'Doğrulama sonucu: {$a}';
$string['void'] = 'İptal et';
$string['voidyes'] = 'İşlem iptal edilecek. Emin misiniz?';
$string['welcometocoursesemail'] = 'Sevgili {$a->name},

Ödemeleriniz için teşekkürler. Bu kurslara kaydınız yapılmıştır:

{$a->courses}

Profilinizi düzenlemek için:
{$a->profileurl}

Ödeme ayrıntılarına bakmak için:
{$a->paymenturl}';
$string['youcantdo'] = 'Bu eylemi yapamazsınız: {$a->action}';
$string['zipcode'] = 'Posta Kodu';
