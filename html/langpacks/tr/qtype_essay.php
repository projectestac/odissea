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
 * Strings for component 'qtype_essay', language 'tr', version '4.5'.
 *
 * @package     qtype_essay
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptedfiletypes'] = 'Kabul edilen dosya türleri';
$string['acceptedfiletypes_help'] = 'Kabul edilen dosya türleri, dosya uzantılarının bir listesi girilerek kısıtlanabilir. Alan boş bırakılırsa, tüm dosya türlerine izin verilir.';
$string['allowattachments'] = 'Eklere izin ver';
$string['answerfiles'] = 'Cevap dosyası';
$string['answertext'] = 'Cevap metni';
$string['attachedfiles'] = 'Ekler : {$a}';
$string['attachmentsoptional'] = 'Ekler isteğe bağlıdır';
$string['attachmentsrequired'] = 'Ekleri gerekli kıl';
$string['attachmentsrequired_help'] = 'Bu seçenek, yanıtın not verilebiir olarak kabul edilmesi için gereken en düşük ek sayısını belirtir.';
$string['err_maxminmismatch'] = 'Kelime üst sınırı, kelime alt sınırından büyük olmalıdır';
$string['err_maxwordlimit'] = 'Kelime üst sınırı etkinleştirildi ancak ayarlanmadı';
$string['err_maxwordlimitnegative'] = 'Kelime üst sınırı negatif bir sayı olamaz';
$string['err_minwordlimit'] = 'Alt kelime sınırı etkinleştirildi ancak ayarlanmadı';
$string['err_minwordlimitnegative'] = 'Kelime alt sınırı negatif bir sayı olamaz';
$string['formateditor'] = 'HTML editor';
$string['formateditorfilepicker'] = 'Dosya seçici ile HTML editörü';
$string['formatmonospaced'] = 'Düz metin, tek aralıklı yazı tipi';
$string['formatnoinline'] = 'Çevrimiçi  metin yok';
$string['formatplain'] = 'Düz metin';
$string['graderinfo'] = 'Değerlendiciler için bilgilendirme metni';
$string['graderinfoheader'] = 'Değerlendici Bilgilendirme';
$string['maxbytes'] = 'Azami dosya boyutu';
$string['maxwordlimit'] = 'Kelime  üst sınırı';
$string['maxwordlimit_help'] = 'Cevap öğrencilerin metin girmesini gerektiriyorsa, bu her öğrencinin göndermesine izin verilecek en üst kelime sayısıdır.';
$string['maxwordlimitboundary'] = 'Bu soru için kelime sınırı {$a->limit} kelimedir ve siz {$a->count} kelime göndermeye çalışıyorsunuz. Lütfen cevabınızı kısaltın ve tekrar deneyin.';
$string['minwordlimit'] = 'Kelime alt sınırı';
$string['minwordlimit_help'] = 'Cevap öğrencilerin metin girmesini gerektiriyorsa, bu her öğrencinin göndermesine izin verilecek minimum kelime sayısıdır.';
$string['minwordlimitboundary'] = 'Bu soru en az {$a->limit} kelimelik bir cevap gerektiriyor ve siz {$a->count} kelime göndermeye çalışıyorsunuz. Lütfen cevabınızı genişletin ve tekrar deneyin.';
$string['mustattach'] = '"Çevrimiçi metin yok" seçildiğinde veya cevaplar isteğe bağlı olduğunda, en az bir adet eke izin vermeniz gerekir.';
$string['mustrequire'] = '"Çerim içi metin yok" seçildiğinde veya cevaplar isteğe bağlı olduğunda, en az bir ek içermesi gerekir.';
$string['mustrequirefewer'] = 'İzin verilenden daha fazla ek talep edemezsiniz.';
$string['nlines'] = '{$a} dize';
$string['nonexistentfiletypes'] = 'Aşağıdaki dosya türleri tanınmadı: {$a}';
$string['pluginname'] = 'Yazılı';
$string['pluginname_help'] = 'Cevaplayan, bir soruya cevap olarak (bir görüntü içerebilir), bir veya iki paragrafın bir cevabı yazar. Kompozisyon sorusu bir öğretmen tarafından gözden geçirilene ve elle notlandırılana kadar bir not atanmaz.';
$string['pluginname_link'] = 'question/type/essay';
$string['pluginnameadding'] = 'Yazılı sorusu ekleniyor';
$string['pluginnameediting'] = 'Yazılı sorusu düzenleniyor';
$string['pluginnamesummary'] = 'Bir dosya yükleme ve/veya çevrimiçi metin yanıtına izin verir. Cevaba daha sonra elle not verilmesi gerekir.';
$string['privacy:metadata'] = 'Deneme soru türü eklentisi, soru yazarlarının varsayılan seçenekleri kullanıcı tercihleri olarak ayarlamasına imkan tanır.';
$string['privacy:preference:attachments'] = 'İzin verilen eklerin sayısı.';
$string['privacy:preference:attachmentsrequired'] = 'Gerekli eklerin sayısı.';
$string['privacy:preference:defaultmark'] = 'Belirli bir soru için varsayılan not kümesi.';
$string['privacy:preference:maxbytes'] = 'Dosya üst boyutu.';
$string['privacy:preference:responsefieldlines'] = 'Giriş kutusunun (textarea) boyutunu gösteren satır sayısı.';
$string['privacy:preference:responseformat'] = 'Cevap formatı nedir (HTML editörü, düz metin, vb.)?';
$string['privacy:preference:responserequired'] = 'Öğrencinin metin girmesi gerekip gerekmediği veya metin girişinin isteğe bağlı olup olmadığı.';
$string['responsefieldlines'] = 'Girdi kutusu boyutu';
$string['responseformat'] = 'Cevap formatı';
$string['responseisrequired'] = 'Öğrencinin metin girmesini zorunlu kıl';
$string['responsenotrequired'] = 'Metin girişi isteğe bağlıdır';
$string['responseoptions'] = 'Cevap seçenekleri';
$string['responserequired'] = 'Metni gerekli kıl';
$string['responsetemplate'] = 'Cevap şablonu';
$string['responsetemplate_help'] = 'Buraya girilen herhangi bir metin, soruya yeni bir girişime başladığında yanıt girişi kutusuna görüntülenir.';
$string['responsetemplateheader'] = 'Cevap şablonu';
$string['wordcount'] = 'Kelime sayısı: {$a}';
$string['wordcounttoofew'] = 'Kelime sayısı: {$a->count}, gerekli {$a->limit} kelime sayısından az.';
$string['wordcounttoomuch'] = 'Kelime sayısı: {$a->count}, {$a->limit} kelime sınırından fazla.';
