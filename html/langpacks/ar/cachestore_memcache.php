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
 * Strings for component 'cachestore_memcache', language 'ar', version '4.5'.
 *
 * @package     cachestore_memcache
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['prefix_help'] = 'هذه البادئة مستعملة لكل أسماء المفاتيح في مخدم memcache.
* إذا كان لديك تنصيب واحد فقط من مودل في هذا المخدم، يمكنك ترك هذه القيمة الافتراضية.
* بسبب قيود طول المفتاح، يُسمح بخمسة أحرف كحد أقصى.';
$string['setservers_help'] = 'هذه قائمة المخدمات التي سيتم تحديثها عند تعديل البيانات في الخبء. عادة ما تكون التسمية المؤهلة الكاملة لكل مخدم في التجمع.
القائمة **يجب** أن تتضمن المخدم المدرج في *المخدمات* أعلاه، حتى لو كان باسم مضيف آخر.
ينبغي تعريف المخدمات بشكل سطر مستقل لكل منها يتضمن عنوان المخدم ورقم المنفذ إختياريًا.
إذا لم يتم تقديم رقم المنفذ، سيتم استعمال المنفذ الافتراضي (11211).

على سبيل المثال:
<pre>
server.url.com
ipaddress:port
</pre>';
