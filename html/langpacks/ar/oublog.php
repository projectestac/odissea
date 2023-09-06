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
 * Strings for component 'oublog', language 'ar', version '4.1'.
 *
 * @package     oublog
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessdenied'] = 'عذرًا، ليست لديك صلاحية الوصول إلى هذه الصفحة.';
$string['advancedoptions'] = 'خيارات متقدمة';
$string['commentonby'] = 'تعليق على المشاركة <u>{$a->title}</u> {$a->date} من قبل <u>{$a->author}</u>';
$string['commentonbyusers'] = 'التعليق <u>{$a->commenttitle}</u> على المشاركة <u>{$a->posttitle}</u> <br> من قبل <u>{$a->author}</u>';
$string['deletedblogpost'] = 'مشاركة بلا عنوان.';
$string['displayname'] = 'الاسم البديل للنشاط (فراغ لاستعمال الافتراضي)';
$string['downloadcsv'] = 'ملف نصي ذو قيم مفصولة بفوارز';
$string['emailcontenthtml'] = 'هذا إشعار لإبلاغك بأن منشورك في {$a->activityname}
ذي التفاصيل الآتية قد تم حذفه من قبل \'{$a->firstname} {$a->lastname}\':<br />
<br />
الموضوع: {$a->subject}<br />
{$a->activityname}: {$a->blog}<br />
المساق: {$a->course}<br/>
<br/>
<a href="{$a->deleteurl}" title="معاينة المنشور المحذوف">معاينة المنشور المحذوف</a>';
$string['event:commentapproved'] = 'تعليق تمت الموافقة عليه';
$string['event:commentcreated'] = 'تعليق تم إنشاؤه';
$string['event:commentdeleted'] = 'تعليق تم حذفه';
$string['event:participationviewed'] = 'مشاركة تمت معاينتها';
$string['event:postcreated'] = 'مشاركة تم إنشاؤها';
$string['event:postdeleted'] = 'مشاركة تم حذفها';
$string['event:postimported'] = 'مشاركة تم استيرادها';
$string['event:postupdated'] = 'مشاركة تم تحديثها';
$string['event:postviewed'] = 'مشاركة تمت معاينتها';
$string['event:savefailed'] = 'فشل جلسة عند النشر تم حفظه';
$string['event:siteentriesviewed'] = 'إدخالات موقع تمت معاينتها';
$string['export:header_tags'] = 'الوسوم';
$string['export:header_title'] = 'العنوان';
$string['exportuntitledpost'] = 'مشاركة بلا عنوان';
$string['externaldashboardadd'] = 'إضافة مدونة إلى دفة القيادة';
$string['externaldashboardremove'] = 'إزالة المدونة من دفة القيادة';
$string['import_step1_all'] = 'إختيار الكل';
$string['import_step1_from'] = 'الاستيراد من';
$string['import_step1_table_tags'] = 'الوسوم';
$string['import_step1_table_title'] = 'العنوان';
$string['individualblogs'] = 'المدونات الفردية';
$string['invalidvisbilitylevel'] = 'مستوى حالة الإظهار غير صحيح {$a}';
$string['maxattachmentsize'] = 'أقصى حجم للمرفقات';
$string['maxvisibility'] = 'حالة الإظهار القصوى';
$string['numberofposts'] = 'عدد المشاركات لكل صفحة';
$string['numberofposts_help'] = 'تعيين عدد المشاركات المعروضة في المدونة لكل صفحة.';
$string['onlyworkspersonal'] = 'يعمل فقط مع المدونات الشخصية';
$string['oublog:contributepersonal'] = 'النشر والتعليق في المدونات الشخصية';
$string['oublog:viewpersonal'] = 'معاينة المنشورات في المدونات الشخصية';
$string['oublog:viewprivate'] = 'معاينة المنشورات الخاصة في المدونات الشخصية';
$string['oublogallpostslogin'] = 'فرض تسجيل الدخول عند صفحة كل المنشورات';
$string['oublogallpostslogin_desc'] = 'تمكين فرض تسجيل الدخول إلى صفحة مُدخلات المدونات الشخصية في الموقع.
عند تمكينه، ستقتصر رؤية رابط هذه الصفحة على المستخدمين الذين سجلوا دخولهم.';
$string['personalblognotsetup'] = 'المدونة الشخصية غير مهيأة';
$string['personalblogtitle'] = 'المدونة الشخصية';
$string['postinfoblock'] = '<u>{$a->posttitle}</u> <br> <u>{$a->postdate}</u> <br> <u>{$a->sourcelink}</u>';
$string['posttitle'] = 'عنوان المشاركة';
$string['privacy:metadata:oublog_comments:title'] = 'عنوان التعليق';
$string['privacy:metadata:oublog_comments_moderated:title'] = 'عنوان التعليق';
$string['privacy:metadata:oublog_instances'] = 'عيِّنات من مدونة OU الشخصية';
$string['privacy:metadata:preference:oublog_accordion_allposts_open'] = 'أي من اللوحات سيكون مرئيًا ضمن عرض الحالة (صفحة معاينة كل المنشورات).';
$string['restricttags_req'] = 'ينبغي إدخال الوسوم';
$string['sharedblog_help'] = '<p><strong>مدونة مشاركة</strong></p>
<p>هذا الخيار يسمح لعينة المدونة أن تتصرف على أنها مدونة ‘فرعية’ وتعرض محتويات مدونة ‘رئيسية’.</p>
<p>يرجى إدخال قيمة حقل الرقم التعريفي للمدونة \'الرئيسية\' التي ترغب بأن تعرض هذه المدونة محتوياتها</p>';
$string['statblockon'] = 'إظهار إحصائيات إضافية لاستعمال المدونة';
$string['statblockon_help'] = 'تمكين عرض الإحصائيات الإضافية في \'كتلة\' استعمال المدونة.
يعمل مع المدونات الشخصية (العمومية)، الفردية المرئية والمجموعية المرئية فقط.';
$string['tags'] = 'الوسوم';
$string['timefilter_label'] = 'فترة زمنية';
$string['title'] = 'العنوان';
$string['untitledcomment'] = 'تعليق بلا عنوان';
$string['untitledpost'] = 'مشاركة بلا عنوان';
