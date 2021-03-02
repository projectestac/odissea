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
 * Strings for component 'search', language 'ar', version '3.8'.
 *
 * @package     search
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advancedsearch'] = 'بحث متقدم';
$string['all'] = 'الكل';
$string['allareas'] = 'كل المناطق';
$string['allcourses'] = 'كل المقررات الدراسية';
$string['allusers'] = 'كل المستخدمين';
$string['author'] = 'الكاتب';
$string['authorname'] = 'اسم الكاتب';
$string['back'] = 'رجوع';
$string['beadmin'] = 'يجب أن تكون مستخدم مسؤول لتستخدم هذه الصفحة';
$string['checkdb'] = 'التحقق من قاعدة البيانات';
$string['checkdbadvice'] = 'التحقق من أي مشاكل في قاعدة البيانات';
$string['checkdir'] = 'التحقق من المجلد';
$string['checkdiradvice'] = 'التحقق من أن مجلد البيانات موجود ويمكن الكتابة فيه';
$string['commenton'] = 'تعليق على';
$string['confirm_delete'] = 'هل أنت متأكد من رغبتك في حذف الفهرس في {$a}؟ لن يحصل المستخدمون على نتائج لعمليات البحث في هذه المنطقة حتى تكتمل فهرستها.';
$string['confirm_deleteall'] = 'هل أنت متأكد من رغبتك في حذف كل الفهارس الآن؟ لن يحصل المستخدمون على نتائج لعمليات البحث في الموقع حتى تكتمل فهرسته.';
$string['confirm_indexall'] = 'هل أنت متأكد من رغبتك في تحديث المحتويات المفهرسة الآن؟ إن كان المحتوى المطلوبة فهرسته كبيراً، فقد يستغرق وقتاً طويلاً. بالنسبة إلى المخدمات الفعالة، ينبغي عادة ترك مهمة الفهرسة إلى المهمة المجدولة \'فهرسة البحث العمومية\'.';
$string['confirm_reindexall'] = 'هل أنت متأكد من رغبتك في إعادة فهرسة كل محتويات الموقع الآن؟ إن كان موقعك يضم محتوى كبيراً، فقد يستغرق وقتاً طويلاً، والمستخدمون لن يحصلوا على نتائج البحث الكاملة حتى إكمالها.';
$string['core-all'] = 'الكل';
$string['core-course-content'] = 'محتوى المقرر الدراسي';
$string['core-courses'] = 'المقررات الدراسية';
$string['core-other'] = 'غيرها';
$string['core-users'] = 'المستخدمون';
$string['createanindex'] = 'إنشاء فهرس';
$string['createdon'] = 'تم إنشاؤه في';
$string['database'] = 'قاعدة البيانات';
$string['databasestate'] = 'حالة فهرسة قاعدة البيانات';
$string['datadirectory'] = 'مجلد البيانات';
$string['deleteindex'] = 'إحذف الفهرس {$a}';
$string['deletionsinindex'] = 'المحذوفات في الفهرس';
$string['docmodifiedon'] = 'آخر تحديث في {$a}';
$string['doctype'] = 'نوع المستند';
$string['doctypenotsupported'] = 'نوع المستند المحدد غير مدعوم بعد';
$string['documents'] = 'المستندات';
$string['documentsfor'] = 'المستندات لـ';
$string['documentsindatabase'] = 'المستندات في قاعدة البيانات';
$string['documentsinindex'] = 'المستندات في الفهرس';
$string['duration'] = 'المدة';
$string['emptydatabaseerror'] = 'جدول قاعدة البيانات غير موجود، أو لايحوي سجلات فهرس.';
$string['enginenotfound'] = 'تعذر العثور على المحرك {$a}.';
$string['enginenotinstalled'] = 'المحرك {$a} غير منصب.';
$string['enginenotselected'] = 'لم تحدد أي محرك بحث.';
$string['engineserverstatus'] = 'محرك البحث غير متاح. لطفاً، تواصل من المشرف.';
$string['enteryoursearchquery'] = 'ادخل استفسار بحثك';
$string['error_indexing'] = 'وقع خطأ في أثناء الفهرسة';
$string['errorareanotavailable'] = 'منطقة البحث {$a} غير متاحة.';
$string['errors'] = 'الأخطاء';
$string['everywhere'] = 'حيثما يمكنك الوصول';
$string['filesinindexdirectory'] = 'الملفات في مجلد الفهرس';
$string['filterheader'] = 'المرشح';
$string['fromtime'] = 'مُعدل بعد';
$string['globalsearch'] = 'بحث عمومي';
$string['globalsearchdisabled'] = 'البحث الشامل غير مفعل';
$string['gradualreindex'] = 'إعادة فهرسة {$a} تدريجياً';
$string['gradualreindex_confirm'] = 'هل أنت متأكد من رغبتك في إعادة فهرسة {$a}؟ هذا قد يستغرق بعض الوقت، رغم أن البيانات الحالية ستكون متاحة خلال إعادة الفهرسة.';
$string['gradualreindex_queued'] = 'تم طلب إعادة فهرسة {$a->name} ({$a->count} contexts). هذه الفهرسة ستكون على عاتق المهمة المجدولة "فهرسة البحث العمومية".';
$string['incourse'] = 'في المقرر الدراسي {$a}';
$string['index'] = 'فهرس';
$string['indexwhendisabledfullnotice'] = 'الفهرسة غير مسموح بها عند تعطيل البحث. لتمكينها، لطفاً، أنظر الإعداد <a href="{$a->url}">searchindexwhendisabled</a>.';
$string['indexwhendisabledshortnotice'] = 'الفهرسة غير متاحة.';
$string['invalidindexerror'] = 'مجلد الفهرس يحوي فهرس غير صالح، أو لا يحوي فهرس على الإطلاق.';
$string['ittook'] = 'لقد استغرق';
$string['matchingfile'] = 'مطابَقة من الملف <span class="filename">{$a}</span>';
$string['matchingfiles'] = 'مطابَقة من الملفات:';
$string['mycoursesonly'] = 'مقرراتي فقط';
$string['next'] = 'التالي';
$string['noindexmessage'] = 'من فضلك يامدير: يبدو انه لا يوجد فهرس بحث';
$string['noresults'] = 'لا نتائج';
$string['normalsearch'] = 'بحث عادي';
$string['notitle'] = 'لا عنوان';
$string['openedon'] = 'تم فتحه في';
$string['optimize'] = 'تحسين';
$string['order'] = 'فرز النتائج';
$string['order_location'] = 'إمنح الأولوية للنتائج المتعلقة بـ {$a}';
$string['order_relevance'] = 'النتائج الأكثر صلة أولاً';
$string['priority'] = 'الأولوية';
$string['priority_normal'] = 'عادي';
$string['priority_reindexing'] = 'إعادة الفهرسة';
$string['privacy:metadata'] = 'نظام البحث الفرعي لا يخزن أي بيانات شخصية.';
$string['progress'] = 'التقدم';
$string['queryerror'] = 'تعذر تحليل الاستعلام الذي أعطيته من قبل محرك البحث: {$a}';
$string['queueheading'] = 'طابور فهرسة إضافي ({$a} فقرة)';
$string['resultsreturnedfor'] = 'هذه النتائج عادة لـ';
$string['runindexer'] = 'إجراء الفهرسة (فعلياً)';
$string['runindexertest'] = 'إجراء اختبار الفهرسة';
$string['schemanotupdated'] = 'مخطط البحث منته الصلاحية.';
$string['schemaversionunknown'] = 'محرك البحث لا يعرف الإصدار الحالي للمخطط.';
$string['score'] = 'الدرجة';
$string['search'] = 'بحث';
$string['search:course'] = 'المقررات الدراسية';
$string['search:customfield'] = 'الحقول المخصصة للمقررات';
$string['search:message_received'] = 'الرسائل - المتلقاة';
$string['search:message_sent'] = 'الرسائل - المرسلة';
$string['search:mycourse'] = 'مقرراتي الدراسية';
$string['search:section'] = 'مقاطع المقررات الدراسية';
$string['search:user'] = 'المستخدمون';
$string['searcharea'] = 'منطقة البحث';
$string['searchareacategories'] = 'تصنيفات منطقة البحث';
$string['searching'] = 'البحث في';
$string['searchnotpermitted'] = 'لا يسمح لك بالبحث';
$string['searchsetupdescription'] = 'الخطوات الآتية تساعدك في إعداد بحث مودل العمومي.';
$string['searchwithin'] = 'البحث ضمن';
$string['seconds'] = 'ثواني';
$string['solutions'] = 'حلول';
$string['statistics'] = 'الإحصائيات';
$string['step'] = 'الخطوة';
$string['thesewordshelpimproverank'] = 'هذه الكلمات ستساعد في تحسين المرتبة';
$string['thesewordsmustappear'] = 'يجب أن تظهر هذه الكلمات';
$string['thesewordsmustnotappear'] = 'يجب ألا تظهر هذه الكلمات';
$string['title'] = 'العنوان';
$string['tofetchtheseresults'] = 'لجلب هذه النتائج';
$string['totalsize'] = 'الحجم الكلي';
$string['totime'] = 'مُعدل قبل';
$string['type'] = 'النوع';
$string['uncompleteindexingerror'] = 'لم يتم إجراء الفهرسة بنجاح، الرجاء إعادتها من جديد.';
$string['versiontoolow'] = 'عذراً، البحث الشامل يحتاج إلى النسخة 5.0.0 من PHP أو أحدث';
$string['viewresultincontext'] = 'معاينة هذه النتيجة في سياقها';
$string['wordsintitle'] = 'الكلمات في العنوان';
