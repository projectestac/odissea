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
 * Strings for component 'tool_customlang', language 'ar', version '3.11'.
 *
 * @package     tool_customlang
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkin'] = 'حفظ النصوص في حزمة اللغة';
$string['checkout'] = 'فتح حزمة اللغة لتحريرها';
$string['checkoutdone'] = 'تم تحميل حزمة اللغة';
$string['checkoutinprogress'] = 'يجري تحميل حزمة اللغة';
$string['cliexportfileexists'] = 'ملف اللغة {$a->lang} موجود مسبقاً، يجري تخطيه. إذا أردت الكتابة فوقه، أضف الخيار --override=true.';
$string['cliexportfilenotfoundforcomponent'] = 'تعذر العثور على الملف {$a->filepath} العائد للغة {$a->lang}. يجري تخطيه.';
$string['cliexportheading'] = 'البدء الآن بتصدير ملفات اللغة.';
$string['cliexportnofilefoundforlang'] = 'لم يتم العثور على ملف لتصديره. يجري تخطي التصدير لهذه اللغة.';
$string['cliexportstartexport'] = 'تصدير اللغة {$a}';
$string['cliexportzipdone'] = 'تم إنشاء الملف المضغوط: {$a}';
$string['cliexportzipfail'] = 'تعذر إنشاء الملف المضغوط {$a}';
$string['clifiles'] = 'الملفات المزمع استيرادها إلى {$a}';
$string['cliimporting'] = 'استيراد جملة الملف (النمط {$a})';
$string['climissingfiles'] = 'الملفات الصحيحة مفقودة';
$string['climissinglang'] = 'اللغة مفقودة';
$string['climissingmode'] = 'النمط مفقود أو خاطئ (الصحيح هو إما: الكل، الجديد، أو تحديث)';
$string['climissingsource'] = 'الملف أو المجلد مفقود';
$string['clinolog'] = 'لا شيء للاستيراد إليه {$a}';
$string['confirmcheckin'] = 'أنت بصدد حفظ تعديلات في الحزمة المحلة للغة في موقعك. سيقوم هذا بتصدير النصوص المعدّلة من المترجم إلى مجلد بيانات موقعك وسيبدأ مودل باستعمال النصوص المعدّلة. اضغط زر "استمر" لمتابعة إجراءات الحفظ.';
$string['customlang:edit'] = 'تحرير الترجمة المحلية';
$string['customlang:export'] = 'تصدير الترجمة المحلية';
$string['customlang:view'] = 'معاينة الترجمة المحلية';
$string['export'] = 'تصدير الجُمل المخصصة';
$string['exportfilter'] = 'إختر المكونات المزمع تصديرها';
$string['exportzipfilename'] = 'تصدير-لغة-مخصصة-{$a->lang}.zip';
$string['filter'] = 'ترشيح النصوص';
$string['filtercomponent'] = 'إعرض نصوص هذه المكونات';
$string['filtercustomized'] = 'المخصصة فقط';
$string['filtermodified'] = 'المعدلة في هذه الجلسة فقط';
$string['filteronlyhelps'] = 'المساعدة فقط';
$string['filtershowstrings'] = 'إعرض النصوص';
$string['filterstringid'] = 'مُعرِّف النص';
$string['filtersubstring'] = 'فقط الجمل التي تحتوي على';
$string['headingcomponent'] = 'العنصر';
$string['headinglocal'] = 'مخصصة المحلية';
$string['headingstandard'] = 'النص الأصل';
$string['headingstringid'] = 'الجملة';
$string['import'] = 'استيراد الجُمل المخصصة';
$string['import_all'] = 'إنشاء أو تحديث كل الجُمل من المكون/المكونات';
$string['import_mode'] = 'نمط الاستيراد';
$string['import_new'] = 'إنشاء الجُمل فقط بدون التخصيص المحلي';
$string['import_update'] = 'تحديث الجُمل فقط بدون التخصيص المحلي';
$string['importfile'] = 'استيراد الملف';
$string['langpack'] = 'مكون/مكونات اللغة';
$string['markinguptodate'] = 'تأشير التخصيص على أنه الأحدث';
$string['markinguptodate_help'] = 'الترجمة المخصصة قد تصير قديمة إما لتعديل الأصل الإنجليزي أو الترجمة الرئيسية منذ تم تخصيص النص في الموقع. راجع الترجمة المخصصة. إذا وجدت أنها مواكبة لأحدث نص أصلي، أنقر خانة الاختيار، أو حررها بخلاف ذلك.';
$string['markuptodate'] = 'علّم بأنها مواكبة للأحدث';
$string['modifiedno'] = 'لا توجد نصوص معدلة لحفظها.';
$string['modifiednum'] = 'هناك {$a} نص مغّير. هل ترغب بحفظ هذه التغييرات في حزمة اللغة المحلية؟';
$string['nolocallang'] = 'لم يتم العثور على جُمل محلية.';
$string['nostringsfound'] = 'لم نجد أي نصوص، يرجى تغيير إعدادات المرشح';
$string['notice_ignorenew'] = 'يجري تجاهل الجُملة {$a->component}/{$a->stringid} لأنها غير مخصصة.';
$string['notice_ignoreupdate'] = 'يجري تجاهل الجُملة {$a->component}/{$a->stringid} لأنها مُعرَّفة سابقاً.';
$string['notice_inexitentstring'] = 'تعذر العثور على الجُملة {$a->component}/{$a->stringid}.';
$string['notice_missingcomponent'] = 'المكون {$a->component} مفقود.';
$string['notice_success'] = 'تم تحديث الجُملة {$a->component}/{$a->stringid} بنجاح.';
$string['placeholder'] = 'العناصر النائبة';
$string['placeholder_help'] = 'العناصر النائبة هي عبارات خاصة مثل `{$a}` أو `{$a->something}` ضمن النص. يتم استبدالها بقيمة عند طبع الجملة فعلياً.

من المهم أن تنسخها بالضبط كما تبدو في النص الأصلي. لا تترجمها ولا تغير اتجاه اليسار إلى اليمين الخاصة بها.';
$string['placeholderwarning'] = 'النص المحتوي على عنصر نائب';
$string['pluginname'] = 'تخصيص اللغة';
$string['privacy:metadata'] = 'إن ملحق تخصيص اللغة لا يخزن أي بيانات شخصية.';
$string['savecheckin'] = 'حفظ التغييرات في حزمة اللغة';
$string['savecontinue'] = 'قم بتطبيق التغييرات وتابع التحرير';
