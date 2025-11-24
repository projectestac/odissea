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
 * Strings for component 'enrol_attributes', language 'tr', version '4.5'.
 *
 * @package     enrol_attributes
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcondition'] = 'Koşul ekle';
$string['addgroup'] = 'Grup ekle';
$string['ajax-error'] = 'Bir hata oluştu';
$string['ajax-okforced'] = 'Tamam, {$a} kullanıcı kaydedildi';
$string['ajax-okpurged'] = 'Tamam, kayıtlar silindi';
$string['attributes:config'] = 'Eklenti örneklerini yapılandırın';
$string['attributes:manage'] = 'Kayıtlı kullanıcıları yönet';
$string['attributes:unenrol'] = 'Kullanıcıların dersten kaydını sil';
$string['attributes:unenrolself'] = 'Kendini dersten sil';
$string['attrsyntax'] = 'Kullanıcı profili alanları kuralları';
$string['attrsyntax_help'] = '<p>Bu kurallar yalnızca özel kullanıcı profili alanlarını kullanabilir.</p>';
$string['cachedef_dbquerycache'] = 'DB sorgu önbelleği';
$string['confirmforce'] = 'Bu, bu kurala karşılık gelen tüm kullanıcıları (yeniden) kaydeder.';
$string['confirmpurge'] = 'Bu, bu kurala karşılık gelen tüm kayıtları kaldıracaktır.';
$string['defaultrole'] = 'Varsayılan rol';
$string['defaultrole_desc'] = 'Kişileri bu eklentiyle kaydetmek için kullanılan varsayılan rol (her örnek bunu geçersiz kılabilir).';
$string['defaultwhenexpired'] = 'Niteliklerin sona ermesinden sonra varsayılan davranış';
$string['defaultwhenexpired_desc'] = 'Artık öznitelik kuralına uymayan kullanıcılarla ne yapılmalı? Bu ayar, her kayıt örneğinde geçersiz kılınabilir.';
$string['deletecondition'] = 'Koşulu sil';
$string['force'] = 'Kayıtları şimdi zorla';
$string['mappings'] = 'Shibboleth eşlemeleri';
$string['mappings_desc'] = 'Shibboleth kimlik doğrulamasını kullanırken, bu eklenti her girişte bir kullanıcının profilini otomatik olarak güncelleyebilir.<br><br>Örneğin, kullanıcının <code>homeorganizationtype</code> profil alanını Shibboleth <code> özniteliği ile güncellemek istiyorsanız Shib-HomeOrganizationType</code> (giriş sırasında sunucunun kullanabileceği ortam değişkeni olması koşuluyla), tek satırda şunu girebilirsiniz: <code>Shib-HomeOrganizationType:homeorganizationtype</code><br>İstediğiniz kadar satır girebilirsiniz gerektiği gibi.<br><br>Bu özelliği kullanmamak için veya Shibboleth kimlik doğrulamasını kullanmıyorsanız, bunu boş bırakın.';
$string['observelogins'] = 'Kullanıcıları oturum açarken hemen kaydedin';
$string['observelogins_desc'] = 'Kullanıcıları oturum açtıklarında hemen kaydetmeye çalışın. Bu, sitenizin performansını etkileyebilir, aynı anda çok sayıda kullanıcı oturum açarsa ve aynı anda kaydolmaları bir darboğaz haline gelirse bunu devre dışı bırakın.';
$string['pluginname'] = 'Kullanıcı profili alanlarına göre kaydolun';
$string['privacy:metadata'] = 'Kullanıcı profili alanlarına göre kayıt eklentisi herhangi bir kişisel veri saklamaz.';
$string['profilefields'] = 'Seçicide kullanılacak profil alanları';
$string['profilefields_desc'] = 'Bir kayıt örneğini yapılandırırken hangi kullanıcı profili alanları kullanılabilir?<br> <br>
<div class="alert alert-warning alert-block fade in" role="alert" data-aria-autofocus="true"> burada herhangi bir özellik seçmezseniz, bu eklentiyi tartışır ve bu nedenle kurslardaki kullanımını devre dışı bırakır.</div> <br> aşağıdaki özellik yine de bu durumda kullanılabilir.';
$string['purge'] = 'Kayıtları temizle';
$string['removewhenexpired'] = 'Niteliklerin sona ermesinden sonra kaydı iptal et';
$string['removewhenexpired_help'] = 'Artık özellik kuralıyla eşleşmezlerse, oturum açtıklarında kullanıcıların kaydını iptal edin.';
$string['whenexpired'] = 'Niteliklerin sona ermesinden sonraki davranış';
$string['whenexpired_help'] = 'Artık öznitelik kuralına uymayan kullanıcılarla ne yapılmalı?';
$string['whenexpireddonothing'] = 'Kullanıcıyı kayıtlı bırak';
$string['whenexpiredremove'] = 'Kullanıcının kaydını iptal et';
$string['whenexpiredsuspend'] = 'Kullanıcıyı askıya al';
