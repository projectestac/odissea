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
 * Strings for component 'tool_installaddon', language 'ar', version '4.4'.
 *
 * @package     tool_installaddon
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acknowledgement'] = 'العرفان';
$string['acknowledgementtext'] = 'أدرك أنه من مسؤوليتي الحصول على نسخ احتياطية كاملة لهذا الموقع قبل تنصيب إضافات إضافية. أقبل وأتفهم أن الإضافات الإضافية (خاصة ولكن ليس فقط تلك التي تنشأ من مصادر غير رسمية) قد تحتوي على ثغرات أمنية، أو قد تجعل الموقع غير متاح، أو تتسبب في تسرب البيانات الخاصة أو فقدها.';
$string['featuredisabled'] = 'مُنصِّب الإضافات معطَّل في هذا الموقع.';
$string['installaddon'] = 'تنصيب الإضافة!';
$string['installaddons'] = 'تنصيب الإضافات';
$string['installfromrepo'] = 'تنصيب الإضافات من مجلد إضافات مودل';
$string['installfromrepo_help'] = 'ستتم إعادة توجيهك إلى مجلد إضافات مودل للبحث عن وتنصيب الإضافة. لاحظ أنه سيتم إرسال الاسم الكامل لموقعك ورابطه  وإصدار مودل، لتسهيل عملية التنصيب بالنسبة لك.';
$string['installfromzip'] = 'تنصيب الإضافة من ملف مضغوط';
$string['installfromzip_help'] = 'رفع ملف ZIP من الإضافة بديلاً عن تنصيبه مباشرةً من مجلد إضافات مودل. ينبغي أن يكون لحزمة ZIP نفس بنية الحزمة التي تم تنزيلها من مجلد إضافات مودل.';
$string['installfromzipfile'] = 'حزمة zip مضغوطة';
$string['installfromzipfile_help'] = 'يجب أن تحتوي الحزمة المضغوطة للإضافة على مجلد واحد فقط، مسمى بما يطابق اسم الإضافة. سيتم استخراج الملف المضغوط  في الموضع المناسب لنوع الإضافة. إذا ما تم تنزيل الحزمة من مجلد إضافات مودل، فستتوفر فيها هذه البنية.';
$string['installfromzipinvalid'] = 'يجب أن تحتوي حزمة البرنامج المساعد ZIP على دليل واحد فقط ، اسمه لمطابقة اسم البرنامج المساعد. الملف المقدم ليس حزمة ZIP إضافية صالحة.';
$string['installfromziprootdir'] = 'إعادة تسمية الدليل الجذر';
$string['installfromziprootdir_help'] = 'قد تحتوي بعض حزم ZIP ، مثل تلك التي تم إنشاؤها بواسطة Github ، على اسم دليل جذر غير صحيح. إذا كان الأمر كذلك ، فقد يتم إدخال الاسم الصحيح هنا.';
$string['installfromzipsubmit'] = 'تنصيب الإضافة من ملف ZIP';
$string['installfromziptype'] = 'نوع الإضافة';
$string['installfromziptype_help'] = 'بالنسبة إلى الإضافات التي تعلن عن اسم المكون الخاص بها بشكل صحيح، يكون المنصِّب قادراً على اكتشاف نوع الإضافة تلقائياً. في حالة فشل الاكتشاف التلقائي، إختر النوع الصحيح للإضافة يدوياً.
تحذير: قد يفشل إجراء التنصيب بشدة إذا تم تحديد نوع غير صحيح للإضافة.';
$string['installfromziptype_link'] = 'تطوير : الملاحق';
$string['permcheck'] = 'تأكد من أن موقع جذر نوع البرنامج المساعد قابل للكتابة بواسطة عملية خادم الويب.';
$string['permcheckerror'] = 'خطأ أثناء التحقق من إذن الكتابة';
$string['permcheckprogress'] = 'جارٍ التحقق من إذن الكتابة ...';
$string['permcheckrepeat'] = 'تحقق مرة أخرى';
$string['permcheckresultno'] = 'موقع نوع الإضافة <em>{$a->path}</em> غير قابل للكتابة';
$string['permcheckresultyes'] = 'موقع نوع الإضافة <em>{$a->path}</em> قابل للكتابة';
$string['pluginname'] = 'منصِّب الإضافة';
$string['privacy:metadata'] = 'إن الإضافة، منصِّب الإضافة لا تخزن أي بيانات شخصية.';
$string['remoterequestalreadyinstalled'] = 'هناك طلب لتنصيب الإضافة {$a->name} ({$a->component}) بإصدار {$a->version} من مجلد إضافات مودل في هذا الموقع. ومع ذلك، هذه الإضافة <strong>منصب سلفاً</strong> في الموقع.';
$string['remoterequestconfirm'] = 'هناك طلب لتنصيب الإضافة <strong>{$a->name}</strong> ({$a->component}) بإصدار {$a->version} من مجلد إضافات مودل في هذا الموقع. إذا اخترت المتابعة، سيتم تنزيل الملف المضغوط لهذه الإضافة للتحقق. لن يتم تنصيب شيء بعد.';
$string['remoterequestinvalid'] = 'هناك طلب لتنصيب ملحق في هذا الموقع من مجلد ملاحق مودل. للأسف، الطلب غير صالح وبالتالي لا يمكن تنصيب الإضافة.';
$string['remoterequestnoninstallable'] = 'هناك طلب لتنصيب الملحق {$a->name} ({$a->component}) ذي الإصدار {$a->version} من مجلد ملاحق مودل في هذا الموقع. ومع ذلك، فشل الاختبار الأولي لتنصيب الملحق (رمز السبب: {$a->reason}).';
$string['remoterequestpermcheck'] = 'هناك طلب لتنصيب الملحق {$a->name} ({$a->component}) ذي الإصدار {$a->version} من مجلد ملاحق مودل في هذا الموقع. ومع ذلك، فإن الموضع <strong>{$a->typepath}</strong> هو <strong>غير قابل للكتابة</strong>. تحتاج إلى منح حق الكتابة لمستخدم مخدم الويب إلى ذلك الموضع، ثم الضغط على زر "استمر" لإعادة التحقق.';
$string['remoterequestpluginfoexception'] = 'عفواً... وقع خطأ عند محاولة الحصول على معلومات عن الإضافة {$a->name} ({$a->component}) الإصدار {$a->version}. لا يمكن تنصيب الإضافة. قم بتشغيل وضع تصحيح الأخطاء لمعرفة تفاصيل الخطأ.';
$string['typedetectionfailed'] = 'غير قادر على اكتشاف نوع البرنامج المساعد. يرجى اختيار نوع البرنامج المساعد يدوياً.';
$string['typedetectionmismatch'] = 'نوع الإضافة المحدد لا يتطابق مع النوع الذي أعلنته الإضافة: {$a}';
