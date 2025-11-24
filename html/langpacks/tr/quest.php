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
 * Strings for component 'quest', language 'tr', version '4.5'.
 *
 * @package     quest
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['approvesubmission_help'] = '<P align="justify">Bu sayfa, öğretmenin bir öğrenci tarafından önerilen bir meydan okumayı onaylamasına, kaydetmesine veya silmesine olanak tanır.  Yapılabilecek işlemler aşağıda açıklanmıştır:</P>
<ul>
<li><strong align="justify">Onayla</strong>: görevle ilgili tüm veriler, öğretmen tarafından önerilen değişikliklerle birlikte kaydedilir.  Bundan sonra, meydan okuma açıldıktan sonra cevap gönderebilecek olan diğer öğrenciler için meydan okuma mevcut olacaktır.</li>
<li><strong align="justify">Kaydet</strong>: Öğretmen tarafından meydan okumada yapılan tüm değişiklikler kaydedilir, ancak diğer öğrenciler için hâlâ mevcut olmayacaktır.  Bu, meydan okumanın yazarının öğretmenin onaylaması için gerekli değişiklikleri yapmasına olanak tanır.</li>
</ul>
<P align="justify">Bu işlemlerden herhangi biri gerçekleştiğinde, meydan okumanın yazarına, profiline göre kullanıcı tercihlerine bağlı olarak dahili olarak veya e-posta yoluyla bir mesaj gönderilir.</P>';
$string['calification'] = 'Puan';
$string['commentsforauthor_help'] = '<strong>Yazar için Yorumlar</strong>: Bu alanda, öğretmenin yarışmayı öneren öğrenciye yapmak istediği önerileri veya yorumları ekleyebilecek ve diğer öğretmenler tarafından da erişilebilecektir.</strong> li>';
$string['commentsforstudent_help'] = '<strong>Öğrenciler için Yorumlar</strong>: Bu alan, öğretmenin öğrencilere bu yarışma hakkında göstermek istediği yorumları içerir, bu yorumlar QUESTOURnament\'teki tüm katılımcılar tarafından kullanılabilir.';
$string['commentsforteacher'] = 'Öğretmen için yorumlar';
$string['delete'] = 'Sil';
$string['edit'] = 'Düzenle';
$string['emailtagline'] = 'Bu e-posta, \\"{$a} \\" tarihinde gönderdiğiniz mesajın bir kopyasıdır.';
$string['modifsubmission_help'] = '<P align="justify">Bu sayfa, öğretmenin bir öğrenci tarafından önerilen bir meydan okumayı değiştirmesine olanak tanır. Öğrenciler de, öğretmen tarafından henüz onaylanmadığında, kendi önerdikleri meydan okumaları değiştirebileceklerdir</P>

<P align="justify">Görev hakkında sunulan ve değiştirilebilen bilgiler şunlardır:</P>

<li><strong>Başlık</strong>: meydan okumanın adı, anonimliği korumak için meydan okumanın yazarının adını içermemelidir.

 aksi takdirde, öğretmen tarafından itiraz reddedilebilir veya değiştirilebilir.</li>

       <li><strong>Açıklama</strong>: Sorunun ve yanıtta yer alacak öğelerin sunulduğu sorunun gövdesidir.  Açık ve eksiksiz olmalıdır.  </li>

       <li><strong>Maksimum Puan</strong>: meydan okumanın ulaşabileceği maksimum puandır, <a href="help.php?component=quest&identifier=maxcalification"">En Yüksek Puan ile sınırlıdır. Mücadelenin ait olduğu QUESTOURnament puanı</a>.</li>

       <li><strong>İlk Puan</strong>: Yarışmanın açıldığında aldığı puandır ve yarışmanın gelişimi sırasında değişiklik gösterecektir.</li>

       <li><strong>Başlangıç Tarihi</strong>: Yarışmanın açıldığı tarihi belirler, bu parametre sadece öğretmen tarafından ayarlanabilir.  Meydan okuma bir öğrenci tarafından eklendiğinde başlangıç tarihi, meydan okumanın eklendiği saattir.</li>

       <li><strong>Kapanış Tarihi</strong>: Yarışmanın kapatıldığı tarihi belirler, bu tarihten sonra yanıt gönderemez, ancak yarışmanın yazarı veya öğretmen yine de yanıt verebilir. meydan okuma süresi boyunca verilen cevapları değerlendirin.  QUESTOURnament için belirlenen <a href="help.php?component=quest&identifier=dateend"">Kapanış Tarihinden</a> sonra olamaz.</li>

       <li><strong>Ekler</strong>: QUESTOURnament tanımlandığında bu olasılık ayarlandıysa, bu, eklerin belirtilmesine izin verir.  Şu anda, meydan okumaya şu ana kadar dahil edilen ekleri silmek de mümkündür.</li>

   <li><strong>Yazar için Yorumlar</strong>: bu alanda, öğretmenin yarışmayı öneren öğrenciye yapmak istediği öneri veya yorumlar yer alabilir ve bu alan diğer öğretmenler tarafından da erişilebilir olur .</li>

   <li><strong>Öğrenciler için Yorumlar</strong>: Bu alanda, öğretmenin öğrencilere meydan okumayla ilgili yapmak istediği yorumlar yer alabilecek, bu yorumlar QUESTOURnament\'teki tüm katılımcılar tarafından görülebilecek.  </li>

 </ul>';
$string['points'] = 'Puan';
$string['pointsteam'] = 'Takım Puanı';
$string['preview'] = 'Önizleme';
$string['questgraphYlegend'] = 'Puan';
$string['save'] = 'Kaydet';
$string['scaleyes'] = '2 puan Evet/Hayır ölçeği';
$string['team'] = 'Takım';
$string['title'] = 'Başlık';
$string['typeteam'] = 'Takım';
$string['user'] = 'Kullanıcı';
