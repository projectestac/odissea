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
 * Strings for component 'block', language 'tr', version '4.5'.
 *
 * @package     block
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addblock'] = '{$a} blok ekle';
$string['anypagematchingtheabove'] = 'Yukarıdaki ile eşleşen herhangi sayfa';
$string['appearsinsubcontexts'] = 'Alt-bağlamlarda görünür';
$string['assignrolesinblock'] = '{$a} bloğundaki rolleri ata';
$string['blocksdrawertoggle'] = 'Blok çekmecesini gizle/göster';
$string['blocksettings'] = 'Blok ayarları';
$string['bracketfirst'] = '{$a} (ilk)';
$string['bracketlast'] = '{$a} (son)';
$string['configureblock'] = '{$a} bloğunu yapılandır';
$string['contexts'] = 'Sayfa içerikleri';
$string['contexts_help'] = 'Bağlamlar, bu bloğun orijinal blok konumunda görüntülenebileceği daha özel sayfalardır. Orijinal blok konumuna ve bulunduğunuz konuma bağlı olarak burada farklı seçenekler olacaktır. Örneğin, bir engeli yalnızca kursdaki forum sayfalarında görünecek şekilde sınırlandırabilirsiniz (tüm alt sayfalarda görünmesini sağlayarak), ardından bir foruma girerek ve ekranı kısıtlamak için blok ayarlarını düzenleyerek Sadece forum sayfaları.';
$string['createdat'] = 'Orijinal blok konumu';
$string['createdat_help'] = 'Bloğun oluşturulduğu orijinal konum Blok ayarları, orijinal konum içindeki diğer konumlarda (bağlamlarda) görünmesine neden olabilir Örneğin, bir kurs sayfasında oluşturulan bir blok, o kurs içindeki etkinliklerde görüntülenebilir Site ana sayfasında oluşturulan bir blok, site genelinde görüntülenebilir.';
$string['defaultregion'] = 'Varsayılan bölge';
$string['defaultregion_help'] = 'Temalar, blokların görüntüleneceği bir veya daha fazla adlandırılmış blok bölgesi tanımlayabilir. Bu ayar, hangilerinin bu blokun varsayılan olarak görünmesini istediğinizi tanımlar. Bölge, gerekirse belirli sayfalarda geçersiz kılınabilir.';
$string['defaultweight'] = 'Varsayılan ağırlık';
$string['defaultweight_help'] = 'Varsayılan ağırlık, seçilen bölgede, üstte veya altta bloğun nereden görüleceğini kabaca seçmenize olanak tanır. Son yer, o bölgedeki tüm bloklardan hesaplanır (örneğin, yalnızca bir blok aslında üstte olabilir). Bu değer, gerekirse belirli sayfalarda geçersiz kılınabilir.';
$string['deleteblock'] = '{$a} bloğunu sil';
$string['deleteblockcheck'] = 'Bu {$a} bloğunu silecektir.';
$string['deleteblockinprogress'] = '{$a} bloğu kaldırılıyor...';
$string['deleteblockwarning'] = '<p>Başka bir yerde görünen bir bloğu silmek üzeresiniz.</p><p>Orijinal blok konumu: {$a->location}<br />Sayfa türlerinde görüntüle: {$a->pagetype}</p><p>Devam etmek istediğinizden emin misiniz?</p>';
$string['deletecheck'] = '{$a} bloğu silinsin mi?';
$string['deletecheck_modal'] = 'Blok silinsin mi?';
$string['hideblock'] = '{$a} bloğunu gizle';
$string['hidepanel'] = 'Paneli gizle';
$string['moveblock'] = '{$a} bloğunu taşı';
$string['moveblockafter'] = 'Bloğu {$a} bloğunun ardına taşı';
$string['moveblockbefore'] = 'Bloğu {$a} bloğunun öncesine taşı';
$string['moveblockinregion'] = 'Bu bloğu {$a} bölgesine taşı';
$string['movingthisblockcancel'] = 'Bu blok taşınıyor ({$a})';
$string['myblocks'] = 'Bloklarım';
$string['onthispage'] = 'Bu sayfada';
$string['pagetypes'] = 'Sayfa türleri';
$string['pagetypewarning'] = 'Daha önce belirtilen sayfa türü artık seçilebilir değil Lütfen aşağıdaki en uygun sayfa türünü seçin.';
$string['privacy:metadata:userpref:dockedinstance'] = 'Kullanıcı bir bloğu yerleştirdiğinde kaydeder';
$string['privacy:metadata:userpref:hiddenblock'] = 'Kullanıcı bir bloğu kapattığında / gizlediğinde kaydeder';
$string['privacy:request:blockisdocked'] = 'Bloğun yerleştirilip yerleştirilmediğini gösterir';
$string['privacy:request:blockishidden'] = 'Bloğun gizlenmiş / daraltılmış olup olmadığını gösterir';
$string['region'] = 'Bölge';
$string['restrictpagetypes'] = 'Sayfa türlerinde göster';
$string['showblock'] = '{$a} bloğunu göster';
$string['showoncontextandsubs'] = '\'{$a}\' ve içindeki tüm sayfalarda görüntüle';
$string['showoncontextonly'] = 'Sadece \'{$a}\' sayfasında göster';
$string['showonentiresite'] = 'Tüm sitede göster';
$string['showonfrontpageandsubs'] = 'Anasayfa ve anasayfaya eklenmiş sayfalarda göster';
$string['showonfrontpageonly'] = 'Sadece  anasayfada göster';
$string['subpages'] = 'Sayfaları seç';
$string['thisspecificpage'] = 'Bu özel sayfa';
$string['visible'] = 'Görünür';
$string['weight'] = 'Ağırlık';
$string['wherethisblockappears'] = 'Bu blok nerede görünecek';
