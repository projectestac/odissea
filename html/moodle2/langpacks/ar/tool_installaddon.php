<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'tool_installaddon', language 'ar', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_installaddon
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acknowledgement'] = 'إعتراف بالجميل';
$string['acknowledgementtext'] = 'أدرك أنه من مسؤوليتي الحصول على نسخ احتياطية كاملة لهذا الموقع قبل تثبيت مكونات إضافية.
أقبل و أتفهم أن المكونات الإضافية (خاصة و لكن ليس فقط تلك التي تنشأ من مصادر غير رسمية) قد تحتوي على ثغرات أمنية ، أو قد تجعل الموقع غير متاح ، أو تتسبب في تسرب البيانات الخاصة أو فقدها.';
$string['featuredisabled'] = 'مثبت البرنامج المساعد معطل على هذا الموقع.';
$string['installaddon'] = 'تثبيت البرنامج المساعد!';
$string['installaddons'] = 'تثبيت الإضافات';
$string['installfromrepo'] = 'تثبيت المكونات الإضافية من دليل الإضافات Moodle';
$string['installfromrepo_help'] = 'ستتم إعادة توجيهك إلى دليل الإضافات Moodle للبحث عن و تثبيت مكون إضافي. لاحظ أنه سيتم إرسال الاسم الكامل لموقعك و رابطه  و إصدار Moodle ، لتسهيل عملية التثبيت بالنسبة لك.';
$string['installfromzip'] = 'تثبيت البرنامج المساعد من ملف مضغوط';
$string['installfromzipfile'] = 'حزمة zip مضغوطة';
$string['installfromzipfile_help'] = 'يجب أن تحتوي حزمة البرنامج المساعد ZIP على دليل واحد فقط ، اسمه لمطابقة اسم البرنامج المساعد. سيتم استخراج الملف المضغوط  في موقع مناسب لنوع البرنامج المساعد.
إذا تم تنزيل الحزمة من دليل الإضافات Moodle ، فستتوفر هذه البنية.';
$string['installfromzip_help'] = 'يعد تثبيت حزمة ZIP من المكون الإضافي بديلاً لتثبيت مكون إضافي مباشرةً من دليل الإضافات Moodle. يجب أن يكون لحزمة ZIP نفس بنية الحزمة التي تم تنزيلها من دليل الإضافات Moodle.';
$string['installfromzipinvalid'] = 'يجب أن تحتوي حزمة البرنامج المساعد ZIP على دليل واحد فقط ، اسمه لمطابقة اسم البرنامج المساعد. الملف المقدم ليس حزمة ZIP إضافية صالحة.';
$string['installfromziprootdir'] = 'إعادة تسمية الدليل الجذر';
$string['installfromziprootdir_help'] = 'قد تحتوي بعض حزم ZIP ، مثل تلك التي تم إنشاؤها بواسطة Github ، على اسم دليل جذر غير صحيح. إذا كان الأمر كذلك ، فقد يتم إدخال الاسم الصحيح هنا.';
$string['installfromzipsubmit'] = 'تثبيت البرنامج المساعد من ملف ZIP';
$string['installfromziptype'] = 'نوع البرنامج المساعد';
$string['installfromziptype_help'] = 'بالنسبة إلى المكونات الإضافية التي تعلن عن اسم المكون الخاص بها بشكل صحيح ، يكون المثبت قادرًا على اكتشاف نوع المكون الإضافي تلقائيًا. في حالة فشل الاكتشاف التلقائي ، اختر نوع المكون الإضافي الصحيح يدويًا.
تحذير: قد يفشل إجراء التثبيت بشدة إذا تم تحديد نوع مكون إضافي غير صحيح.';
$string['installfromziptype_link'] = 'تطوير : الإضافات';
$string['permcheck'] = 'تأكد من أن موقع جذر نوع البرنامج المساعد قابل للكتابة بواسطة عملية خادم الويب.';
$string['permcheckerror'] = 'خطأ أثناء التحقق من إذن الكتابة';
$string['permcheckprogress'] = 'جارٍ التحقق من إذن الكتابة ...';
$string['permcheckrepeat'] = 'تحقق مرة اخرى';
$string['permcheckresultno'] = 'موقع نوع المكون الإضافي {$a->path} غير قابل للكتابة';
$string['permcheckresultyes'] = 'موقع نوع البرنامج المساعد {$a->path} قابل للكتابة';
$string['pluginname'] = 'مساعد التثبيت';
$string['privacy:metadata'] = 'المكون الإضافي  Plugin installer لا يخزن أيّ بيانات شخصية.';
$string['remoterequestalreadyinstalled'] = 'هناك طلب لتثبيت الإصدار {$a->name} ({$a->component}) إصدار {$a->version} من دليل الإضافات Moodle على هذا الموقع. ومع ذلك ، تم تثبيت هذا البرنامج المساعد بالفعل على الموقع.';
$string['remoterequestconfirm'] = 'هناك طلب لتثبيت الإصدار {$a->name} ({ a->component}) إصدار {$a->version} من دليل الإضافات Moodle على هذا الموقع. في حالة المتابعة ، سيتم تنزيل حزمة البرنامج المساعد ZIP للتحقق من صحتها. لن يتم تثبيت أي شيء حتى الآن.';
$string['remoterequestinvalid'] = 'يوجد طلب لتثبيت مكون إضافي من دليل الإضافات Moodle على هذا الموقع. للأسف ، الطلب غير صالح و بالتالي لا يمكن تثبيت البرنامج المساعد.';
$string['remoterequestnoninstallable'] = 'هناك طلب لتثبيت الإصدار {$a->name} ({$a->component}) إصدار {$a->version} من دليل الإضافات Moodle على هذا الموقع. و مع ذلك ، فشل اختبار التثبيت المساعد مسبقًا (رمز السبب: {$a->reason}).';
$string['remoterequestpermcheck'] = 'هناك طلب لتثبيت الإصدار {$a->name} ({$a->component}) إصدار {$a->version} من دليل الإضافات Moodle على هذا الموقع. ومع ذلك ، فإن الموقع {$a->typepath} غير قابل للكتابة . تحتاج إلى منح حق الوصول للكتابة لمستخدم خادم الويب إلى الموقع ، ثم اضغط على زر "متابعة" لتكرار عملية التحقق.';
$string['remoterequestpluginfoexception'] = 'عفوًا ... حدث خطأ أثناء محاولة الحصول على معلومات حول المكون الإضافي {$a->name} ({$a->component}) إصدار {$a->version}. لا يمكن تثبيت البرنامج المساعد.
قم بتشغيل وضع تصحيح الأخطاء لمعرفة تفاصيل الخطأ.';
$string['typedetectionfailed'] = 'غير قادر على اكتشاف نوع البرنامج المساعد. يرجى اختيار نوع البرنامج المساعد يدوياً.';
$string['typedetectionmismatch'] = 'نوع المكون الإضافي المحدد لا يتطابق مع النوع الذي أعلنه البرنامج المساعد: {$a}';
