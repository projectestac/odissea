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
 * Strings for component 'tool_installaddon', language 'ar', branch 'MOODLE_38_STABLE'
 *
 * @package   tool_installaddon
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acknowledgement'] = 'العرفان';
$string['acknowledgementtext'] = 'أدرك أنه من مسؤوليتي الحصول على نسخ احتياطية كاملة لهذا الموقع قبل تثبيت ملاحق إضافية. أقبل وأتفهم أن الملاحق الإضافية (خاصة ولكن ليس فقط تلك التي تنشأ من مصادر غير رسمية) قد تحتوي على ثغرات أمنية، أو قد تجعل الموقع غير متاح، أو تتسبب في تسرب البيانات الخاصة أو فقدها.';
$string['featuredisabled'] = 'مُنصِّب الملاحق معطَّل في هذا الموقع.';
$string['installaddon'] = 'تنصيب الملحق!';
$string['installaddons'] = 'تنصيب الملاحق';
$string['installfromrepo'] = 'تنصيب الملاحق من مجلد ملاحق مودل';
$string['installfromrepo_help'] = 'ستتم إعادة توجيهك إلى مجلد ملاحق مودل للبحث عن وتنصيب الملحق. لاحظ أنه سيتم إرسال الاسم الكامل لموقعك ورابطه  وإصدار مودل، لتسهيل عملية التنصيب بالنسبة لك.';
$string['installfromzip'] = 'تنصيب الملحق من ملف مضغوط';
$string['installfromzipfile'] = 'حزمة zip مضغوطة';
$string['installfromzipfile_help'] = 'يجب أن تحتوي حزمة البرنامج المساعد ZIP على دليل واحد فقط ، اسمه لمطابقة اسم البرنامج المساعد. سيتم استخراج الملف المضغوط  في موقع مناسب لنوع البرنامج المساعد.
إذا تم تنزيل الحزمة من دليل الإضافات Moodle ، فستتوفر هذه البنية.';
$string['installfromzip_help'] = 'يعد تثبيت حزمة ZIP للملحق بديلاً عن تنصيبه مباشرةً من مجلد ملاحق مودل. ينبغي أن يكون لحزمة ZIP نفس بنية الحزمة التي تم تنزيلها من مجلد ملاحق مودل.';
$string['installfromzipinvalid'] = 'يجب أن تحتوي حزمة البرنامج المساعد ZIP على دليل واحد فقط ، اسمه لمطابقة اسم البرنامج المساعد. الملف المقدم ليس حزمة ZIP إضافية صالحة.';
$string['installfromziprootdir'] = 'إعادة تسمية الدليل الجذر';
$string['installfromziprootdir_help'] = 'قد تحتوي بعض حزم ZIP ، مثل تلك التي تم إنشاؤها بواسطة Github ، على اسم دليل جذر غير صحيح. إذا كان الأمر كذلك ، فقد يتم إدخال الاسم الصحيح هنا.';
$string['installfromzipsubmit'] = 'تنصيب الملحق من ملف ZIP';
$string['installfromziptype'] = 'نوع الملحق';
$string['installfromziptype_help'] = 'بالنسبة إلى الملاحق التي تعلن عن اسم المكون الخاص بها بشكل صحيح، يكون المنصِّب قادراً على اكتشاف نوع الملحق تلقائياً. في حالة فشل الاكتشاف التلقائي، إختر النوع الصحيح للملحق يدوياً.
تحذير: قد يفشل إجراء التثبيت بشدة إذا تم تحديد نوع غير صحيح للملحق.';
$string['installfromziptype_link'] = 'تطوير : الإضافات';
$string['permcheck'] = 'تأكد من أن موقع جذر نوع البرنامج المساعد قابل للكتابة بواسطة عملية خادم الويب.';
$string['permcheckerror'] = 'خطأ أثناء التحقق من إذن الكتابة';
$string['permcheckprogress'] = 'جارٍ التحقق من إذن الكتابة ...';
$string['permcheckrepeat'] = 'تحقق مرة أخرى';
$string['permcheckresultno'] = 'موقع نوع الملحق <em>{$a->path}</em> غير قابل للكتابة';
$string['permcheckresultyes'] = 'موقع نوع الملحق <em>{$a->path}</em> قابل للكتابة';
$string['pluginname'] = 'منصِّب الملحق';
$string['privacy:metadata'] = 'إن ملحق، منصِّب الملحق لا يخزن أي بيانات شخصية.';
$string['remoterequestalreadyinstalled'] = 'هناك طلب لتنصيب الملحق {$a->name} ({$a->component}) بإصدار {$a->version} من مجلد ملاحق مودل في هذا الموقع. ومع ذلك، هذا الملحق <strong>منصب سلفاً</strong> في الموقع.';
$string['remoterequestconfirm'] = 'هناك طلب لتنصيب الملحق <strong>{$a->name}</strong> ({$a->component}) بإصدار {$a->version} من مجلد ملاحق مودل في هذا الموقع. إذا اخترت المتابعة، سيتم تنزيل الملف المضغوط لهذا الملحق للتحقق. لن يتم تنصيب شيء بعد.';
$string['remoterequestinvalid'] = 'هناك طلب لتنصيب ملحق في هذا الموقع من دليل ملاحق مودل. للأسف، الطلب غير صالح وبالتالي لا يمكن تثبيت الملحق.';
$string['remoterequestnoninstallable'] = 'هناك طلب لتثبيت الملحق {$a->name} ({$a->component}) ذي الإصدار {$a->version} من دليل ملاحق مودل في هذا الموقع. و مع ذلك، فشل الاختبار الأولي لتنصيب الملحق (رمز السبب: {$a->reason}).';
$string['remoterequestpermcheck'] = 'هناك طلب لتثبيت الملحق {$a->name} ({$a->component}) ذي الإصدار {$a->version} من دليل ملاحق مودل في هذا الموقع. ومع ذلك، فإن الموضع <strong>{$a->typepath}</strong> هو <strong>غير قابل للكتابة</strong>. تحتاج إلى منح حق الكتابة لمستخدم مخدم الويب إلى ذلك الموضع، ثم الضغط على زر "استمر" لإعادة التحقق.';
$string['remoterequestpluginfoexception'] = 'عفواً... وقع خطأ عند محاولة الحصول على معلومات عن الملحق {$a->name} ({$a->component}) الإصدار {$a->version}. لا يمكن تنصيب الملحق. قم بتشغيل وضع تصحيح الأخطاء لمعرفة تفاصيل الخطأ.';
$string['typedetectionfailed'] = 'غير قادر على اكتشاف نوع البرنامج المساعد. يرجى اختيار نوع البرنامج المساعد يدوياً.';
$string['typedetectionmismatch'] = 'نوع الملحق المحدد لا يتطابق مع النوع الذي أعلنه الملحق: {$a}';
