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
 * Strings for component 'mlbackend_python', language 'ar', version '4.1'.
 *
 * @package     mlbackend_python
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['errornoconfigdata'] = 'تهيئة المخدم غير مكتملة.';
$string['errorserver'] = 'خطأ في المخدم {$a}';
$string['host'] = 'المضيف';
$string['hostdesc'] = 'المضيف';
$string['packageinstalledshouldbe'] = 'ينبغي تحديث حزمة moodlemlbackend العائدة لبايثون. الإصدار المطلوب هو "{$a->required}" والإصدار المنصب هو "{$a->installed}".';
$string['packageinstalledtoohigh'] = 'إن حزمة moodlemlbackend العائدة لبايثون غير متوافقة مع هذا الإصدار من مودل. الإصدار المطلوب هو "{$a->required}" أو أعلى طالما هو متوافق مع واجهة برمجة التطبيق. الإصدار المنصب "{$a->installed}" عالٍ جداً.';
$string['password'] = 'كلمة المرور';
$string['passworddesc'] = 'سلسلة الحروف المستعملة بمثابة كلمة مرور للاتصال ما بين مخدم مودل ومخدم بايثون.';
$string['pluginname'] = 'خلفية التعلم الآلي لبايثون';
$string['port'] = 'المنفذ';
$string['portdesc'] = 'المنفذ';
$string['privacy:metadata'] = 'إن ملحق خلفية التعلم الآلي لبايثون لا يخزن أي بيانات شخصية.';
$string['pythonpackagenotinstalled'] = 'حزمة moodlemlbackend العائدة لبايثون غير منصبة أو فيها مشكلة. لطفاً، قم بتنفيذ "{$a}" من واجهة سطر الأوامر للمزيد من المعلومات.';
$string['pythonpathnotdefined'] = 'لم يتم تحديد المسار إلى مكتبة التنفيذ لبايثون بعد. لطفاً، قم بزيارة "{$a}" لمشاهدته.';
$string['secure'] = 'استعمل HTTPS';
$string['securedesc'] = 'ما إذا يتم استعمال HTTP أو HTTPS.';
$string['serversettingsinfo'] = 'إذا تم تمكين \'استعمل مخدم\'، سيتم عرض إعدادات المخدم.';
$string['tensorboardinfo'] = 'أطلق TensorBoard من سطر الأوامر عبر طباعة tensorboard --logdir=\'{$a}\' في مخدم الويب عندك.';
$string['username'] = 'اسم المستخدم';
$string['usernamedesc'] = 'سلسلة الحروف المستعملة بمثابة اسم المستخدم للاتصال ما بين مخدم مودل ومخدم بايثون.';
$string['useserver'] = 'استعمل مخدم';
$string['useserverdesc'] = 'لم يتم تنصيب حزمة خلفية التعلم الآلي لبايثون في مخدم الويب ولكن في مخدم آخر.';
