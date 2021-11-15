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
 * Strings for component 'blog', language 'ar', version '3.11'.
 *
 * @package     blog
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addnewentry'] = 'إضافة مشاركة جديدة';
$string['addnewexternalblog'] = 'تسجيل مدونة خارجية';
$string['assocdescription'] = 'إذا كنت تكتب عن وحدات مساق و/أو نشاط، فحددها هنا.';
$string['associated'] = '{$a} مرتبطة';
$string['associatewithcourse'] = 'مدونة عن المقرر الدراسي {$a->coursename}';
$string['associatewithmodule'] = 'مدونة عن {$a->modtype}: {$a->modname}';
$string['association'] = 'ارتباط';
$string['associations'] = 'ارتباطات';
$string['associationunviewable'] = 'لا يمكن للآخرين مشاهدة هذه المشاركة حتى يتم ربطها بمقرر أو تغيير الحقل "نشر إلى"';
$string['autotags'] = 'أضف هذه الوسوم';
$string['autotags_help'] = 'أدخل واحد أو أكثر من الوسوم المحلية (مفصولة بفوارز) التي تريد إضافتها تلقائياً إلى كل مشاركة مدونة تم نسخها من المدونة الخارجية إلى مدونتك المحلية.';
$string['backupblogshelp'] = 'في حالة تشغيله، سيتم تضمين المدونات في الحفظ الاحتياطي للموقع';
$string['blockexternalstitle'] = 'المدونات الخارجية';
$string['blog'] = 'المدونة';
$string['blogaboutthis'] = 'مدونة عن هذا {$a->type}';
$string['blogaboutthiscourse'] = 'إضافة مدخل عن هذا المقرر';
$string['blogaboutthismodule'] = 'إضافة مدخل عن هذا {$a}';
$string['blogadministration'] = 'إدارة المدونة';
$string['blogdeleteconfirm'] = 'حذف المدخل \'{$a}\' ؟';
$string['blogdisable'] = 'تم تعطيل التدوين';
$string['blogentries'] = 'مشاركات المدونة';
$string['blogentriesabout'] = 'مشاركات المدونة عن {$a}';
$string['blogentriesbygroupaboutcourse'] = 'مشاركات المدونة حول {$a->course} بواسطة {$a->group}';
$string['blogentriesbygroupaboutmodule'] = 'مشاركات المدونة حول {$a->mod} بواسطة {$a->group}';
$string['blogentriesbyuseraboutcourse'] = 'مشاركات المدونة حول {$a->course} بواسطة {$a->user}';
$string['blogentriesbyuseraboutmodule'] = 'مشاركات المدونة عن هذا {$a->mod} بواسطة {$a->user}';
$string['blogentrybyuser'] = 'المشاركات المكتوبة بواسطة {$a}';
$string['blogpreferences'] = 'تفضيلات المدونة';
$string['blogs'] = 'المدونات';
$string['blogscourse'] = 'مدونات المقرر';
$string['blogssite'] = 'مدونات الموقع';
$string['blogtags'] = 'وسوم المدونة';
$string['cannotviewcourseblog'] = 'ليست لديك الصلاحيات المطلوبة لمعاينة المدونات في هذا المقرر';
$string['cannotviewcourseorgroupblog'] = 'ليست لديك الصلاحيات المطلوبة لمعاينة المدونات في هذا المقرر/المجموعة';
$string['cannotviewsiteblog'] = 'ليست لديك الصلاحيات المطلوبة لمعاينة كل مدونات الموقع';
$string['cannotviewuserblog'] = 'لا تملك صلاحية قراءة مدونات المستخدم';
$string['configexternalblogcrontime'] = 'كم مرة يتحقق مودل من المدونات الخارجية بحثاً عن تدوينات جديدة.';
$string['configmaxexternalblogsperuser'] = 'عدد المدونات الخارجية المسموح للمستخدم بربطها بمدونة مودل الخاصة به.';
$string['configuseblogassociations'] = 'تمكين ربط مدخلات المدونات بالمقررات الدراسية ووحدات المقررات الدراسية';
$string['configuseexternalblogs'] = 'تمكين المستخدمين من تحديد مغذيات مدونات خارجية. يتحقق مودل من هذه المغذيات بشكل دوري وينسخ المدخلات الجديدة إلى المدونة المحلية لذلك المستخدم.';
$string['courseblog'] = 'مدونة المقرر الدراسي: {$a}';
$string['courseblogdisable'] = 'تم تعطيل مدونات المقرر';
$string['courseblogs'] = 'يستطيع المستخدمون رؤية مدونات من يشاركونهم في المقرر فقط';
$string['deleteblogassociations'] = 'حذف متعلقات المدونة';
$string['deleteblogassociations_help'] = 'عند تأشيره فلن تعود مشاركات المدونة مرتبطة بهذا المقرر الدراسي أو أي من أنشطته وموارده. لن يتم حذف مدخلات المدونة نفسها.';
$string['deleteentry'] = 'حذف المشاركة';
$string['deleteexternalblog'] = 'إلغاء تسجيل هذه المدونة الخارجية';
$string['deleteotagswarn'] = 'هل أنت متأكد من رغبتك بإزالة هذه الوسوم من جميع مشاركات المدونة وإزالتها من النظام؟';
$string['description'] = 'الوصف';
$string['description_help'] = 'أدخل جملة أو اثنتين تلخص محتويات مدونتك الخارجية. (إذا لم توفر وصفاً لها، سيتم استخدام الوصف المسجل في مدونتك الخارجية).';
$string['donothaveblog'] = 'ليس لديك مدونتك الخاصة، عذراً.';
$string['editentry'] = 'تحرير تدوينة';
$string['editexternalblog'] = 'تحرير هذه المدونة الخارجية';
$string['emptybody'] = 'لا يمكن ترك محتوى المدونة فارغاً';
$string['emptyrssfeed'] = 'العنوان الذي أدخلته لا يشير إلى خلاصات RSS صالحة';
$string['emptytitle'] = 'لا يمكن ترك عنوان المدونة فارغاً';
$string['emptyurl'] = 'يجب أن تحدد عنوان لخلاصات RSS صالحة';
$string['entrybody'] = 'متن بند المدونة';
$string['entrybodyonlydesc'] = 'وصف المشاركة';
$string['entryerrornotyours'] = 'هذا المدخل ليس خاص بك';
$string['entrysaved'] = 'تم حفظ مشاركتك';
$string['entrytitle'] = 'عنوان المشاركة';
$string['eventblogassociationadded'] = 'متعلقات مدونة تم إنشاؤها';
$string['eventblogassociationdeleted'] = 'متعلقات مدونة تم حذفها';
$string['eventblogentriesviewed'] = 'مدخلات مدونة تمت معاينتها';
$string['eventblogexternaladded'] = 'مدونة خارجية تم تسجيلها';
$string['eventblogexternalremoved'] = 'مدونة خارجية تم إلغاء تسجيلها';
$string['eventblogexternalupdated'] = 'مدونة خارجية تم تحديثها';
$string['evententryadded'] = 'مشاركة مدونة تمت إضافتها';
$string['evententrydeleted'] = 'مشاركة مدونة تم حذفها';
$string['evententryupdated'] = 'مشاركة مدونة تم تحديثها';
$string['eventexternalblogsviewed'] = 'مدونات خارجية مسجلة تمت معاينتها';
$string['externalblogcrontime'] = 'جدولة مشغل الوظائف الدورية للمدونة الخارجية';
$string['externalblogdeleteconfirm'] = 'هل حقاً تريد إلغاء تسجيل هذه المدونة الخارجية؟';
$string['externalblogdeleted'] = 'تم إلغاء تسجيل المدونة الخارجية';
$string['externalblogs'] = 'مدونات خارجية';
$string['feedisinvalid'] = 'هذه الخلاصة غير صالحة';
$string['feedisvalid'] = 'هذه الخلاصة صالحة';
$string['filterblogsby'] = 'ترشيح حسب...';
$string['filtertags'] = 'ترشيح الوسوم';
$string['filtertags_help'] = 'يمكنك استعمال هذه الميزة لترشيح المدونات التي تريدها. إذا حددت الوسوم (مفصولة بفوارز) هنا، فسيتم نسخ المدخلات الموسومة بهذه الوسوم فقط من المدونة الخارجية.';
$string['groupblog'] = 'مدونة مجموعة: {$a}';
$string['groupblogdisable'] = 'مدونة المجموعة غير مفعلة';
$string['groupblogentries'] = 'مدخلات المدونات المرتبطة بـ {$a->coursename} بواسطة مجموعة {$a->groupname}';
$string['groupblogs'] = 'يستطيع المستخدمون فقط رؤية مدونات الأشخاص المشتركين معهم في المجموعة';
$string['incorrectblogfilter'] = 'نوع مرشح المدونة المحدد غير صحيح';
$string['intro'] = 'تم إنشاء هذه التغذية الاخبارية تلقائياً من مدونة واحدة أو أكثر.';
$string['invalidgroupid'] = 'قم مجموعة غير صحيح';
$string['invalidurl'] = 'لا يمكن الوصول إلى هذا الرابط';
$string['linktooriginalentry'] = 'رابط الدخول إلى المدونة الأصلية';
$string['maxexternalblogsperuser'] = 'الحد الأقصى لعدد المدونات الخارجية لكل مستخدم';
$string['myprofileuserblogs'] = 'عرض جميع مشاركات المدونة';
$string['name'] = 'الاسم';
$string['name_help'] = 'أدخل اسماً واصفاً لمدونتك الخارجية. (سيتم استعمال عنوان مدونتك الخارجية إن لم تكتب اسماً).';
$string['noentriesyet'] = 'لا توجد مشاركات ظاهرة هنا';
$string['noguestpost'] = 'الضيوف لا يمكنهم نشر المدونات!';
$string['nopermissionstodeleteentry'] = 'تنقصك الصلاحيات المطلوبة لحذف هذه المشاركة';
$string['norighttodeletetag'] = 'ليس لديك الحق في حذف هذا الوسم - {$a}';
$string['nosuchentry'] = 'لا توجد مشاركات مماثلة';
$string['notallowedtoedit'] = 'لا تملك صلاحية تعديل هذه المشاركة';
$string['numberofentries'] = 'المشاركات: {$a}';
$string['numberoftags'] = 'عدد الوسوم التي ترغب بعرضها';
$string['page-blog-edit'] = 'صفحات تحرير المدونة';
$string['page-blog-index'] = 'صفحات قوائم المدونات';
$string['page-blog-x'] = 'كل صفحات المدونة';
$string['pagesize'] = 'عدد مدخلات المدونة في كل صفحة';
$string['permalink'] = 'الرابط الدائم';
$string['personalblogs'] = 'يستطيع المستخدم رؤية مدونته فقط';
$string['preferences'] = 'تفضيلات المدونة';
$string['privacy:metadata:core_comments'] = 'التعليقات المرتبطة بمشاركات المدونة';
$string['privacy:metadata:core_files'] = 'الملفات المرفقة بمشاركات المدونة';
$string['privacy:metadata:core_tag'] = 'الوسوم المرتبطة بمشاركات المدونة';
$string['privacy:metadata:external'] = 'رابط لتغذية ملخص الموقع';
$string['privacy:metadata:external:description'] = 'وصف التغذية الاخبارية';
$string['privacy:metadata:external:filtertags'] = 'قائمة الوسوم لفرز المشاركات بناءَ عليها';
$string['privacy:metadata:external:name'] = 'اسم التغذية الاخبارية';
$string['privacy:metadata:external:timefetched'] = 'الوقت الذي تم فيه جلب آخر ملخص';
$string['privacy:metadata:external:timemodified'] = 'الوقت الذي تم فيه آخر تعديل للارتباط';
$string['privacy:metadata:external:url'] = 'رابط الملخص';
$string['privacy:metadata:external:userid'] = 'مُعرَّف المستخدم الذي أضاف مشاركات المدونة الخارجية';
$string['privacy:metadata:post'] = 'المعلومات المتعلقة بمشاركات المدونة';
$string['privacy:metadata:post:content'] = 'محتوى مشاركة المدونة الخارجية';
$string['privacy:metadata:post:created'] = 'تاريخ إنشاء المشاركة';
$string['privacy:metadata:post:lastmodified'] = 'تاريخ آخر تعديل للمشاركة';
$string['privacy:metadata:post:publishstate'] = 'ما إذا كانت المشاركة مرئية للآخرين أم لا';
$string['privacy:metadata:post:subject'] = 'عنوان المشاركة';
$string['privacy:metadata:post:summary'] = 'نص المشاركة';
$string['privacy:metadata:post:uniquehash'] = 'المعرف الفريد للمشاركة الخاجية، عادة ما يكون الرابط';
$string['privacy:metadata:post:userid'] = 'رقم المستخدم الذي أضاف المشاركة';
$string['privacy:metadata:post:usermodified'] = 'المستخدم الذي أجرى آخر تعديل للمشاركة';
$string['privacy:path:blogassociations'] = 'المشاركات المرتبطة';
$string['privacy:unknown'] = 'غير معروف';
$string['publishto'] = 'النشر إلى';
$string['publishto_help'] = 'لديك 3 خيارات:

* شخصي (مسودة) - فقط أنت والإداريين يمكنهم رؤية هذه المداخلة
* أي شخص على هذا الموقع - أي سخص مسجل في هذا الموقع يمكنه رؤية هذه المداخلة
* أي شخص في العالم - يمكن لأي شخص، متضمناً الضيوف قراءة هذه المداخلة';
$string['publishtocourse'] = 'المستخدمون المشتركون معك بالمقرر';
$string['publishtocourseassoc'] = 'أعضاء المقرر المرتبط';
$string['publishtocourseassocparam'] = 'أعضاء في {$a}';
$string['publishtogroup'] = 'المستخدمون المشتركون معك في مجموعة';
$string['publishtogroupassoc'] = 'أعضاء مجموعتك في المقرر المرتبط';
$string['publishtogroupassocparam'] = 'أعضاء مجموعتك في {$a}';
$string['publishtonoone'] = 'أنت (مسودة)';
$string['publishtosite'] = 'أي شخص على هذا الموقع';
$string['publishtoworld'] = 'أي شخص بالعالم';
$string['readfirst'] = 'إقرأ هذه أولاً';
$string['relatedblogentries'] = 'المشاركات ذات الصلة';
$string['retrievedfrom'] = 'جلب من';
$string['rssfeed'] = 'مغذي المدونة  باستخدام تكنولوجي  RSS';
$string['searchterm'] = 'البحث: {$a}';
$string['settingsupdatederror'] = 'لقد حدث خطأ ما، لا يمكن تحديث إعدادات تفضيلات المدونة';
$string['siteblogdisable'] = 'مدونات الموقع غير مفعلة';
$string['siteblogheading'] = 'مدونة الموقع';
$string['siteblogs'] = 'يستطيع كل مستخدمي الموقع مشاهدة كل مدخلات المدونات';
$string['tagdatelastused'] = 'أرخ العلامة المستخدة مؤخرا';
$string['tagparam'] = 'وسم: {$a}';
$string['tags'] = 'الوسوم';
$string['tagsort'] = 'رتب العلامة المعروضة بي';
$string['tagtext'] = 'نص الوسم';
$string['timefetched'] = 'وقت آخر مزامنة';
$string['timewithin'] = 'إعرض الوسوم المستعملة ضمن هذا العدد من الأيام';
$string['updateentrywithid'] = 'تحديث مدخل';
$string['url'] = 'رابط مغذي خدمة الأخبار';
$string['url_help'] = 'أدخل عنوان الخلاصات RSS للمدونة الخارجية';
$string['useblogassociations'] = 'تمكين ربط المدونات';
$string['useexternalblogs'] = 'تمكين المدونات الخارجية';
$string['userblog'] = 'مدونة المستخدم: {$a}';
$string['userblogentries'] = 'مدخلات المدونات من قِبَل {$a}';
$string['valid'] = 'صالح';
$string['viewallblogentries'] = 'كل المدخلات حول هذا {$a}';
$string['viewallmodentries'] = 'عرض كل المدخلات حول هذا {$a->type}';
$string['viewallmyentries'] = 'عرض كافة تدويناتي';
$string['viewblogentries'] = 'التدوينات حول هذا {$a->type}';
$string['viewblogsfor'] = 'عرض كل التدوينات لـ...';
$string['viewcourseblogs'] = 'معاينة كل التدوينات لهذا المقرر الدراسي';
$string['viewentriesbyuseraboutcourse'] = 'معاينة التدوينات حول هذا المقرر الدراسي والتي من قِبَل {$a}';
$string['viewgroupblogs'] = 'عرض تدوينات المجموعة...';
$string['viewgroupentries'] = 'تدوينات المجموعة';
$string['viewmodblogs'] = 'المدونات لوحدة...';
$string['viewmodentries'] = 'مدونات الوحدة';
$string['viewmyentries'] = 'تدويناتي';
$string['viewmyentriesaboutcourse'] = 'عرض تدويناتي حول هذا المقرر';
$string['viewmyentriesaboutmodule'] = 'عرض تدويناتي حول هذا {$a}';
$string['viewsiteentries'] = 'عرض كل المشاركات';
$string['viewuserentries'] = 'عرض كل تدوينات {$a}';
$string['worldblogs'] = 'العالم يستطيع قراءة التدوينات الموضوعة لتكون متاحة للعالم';
$string['wrongexternalid'] = 'مُعرَّف المدونة الخارجية خاطئ';
$string['wrongpostid'] = 'مُعرَّف المشاركة غير صحيح';
