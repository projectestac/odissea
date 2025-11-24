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
 * Strings for component 'ouwiki', language 'ar', version '4.5'.
 *
 * @package     ouwiki
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addannotation'] = 'إضافة شرح';
$string['addnewsection'] = 'إضافة قسم جديد إلى هذه الصفحة';
$string['addnewsection1'] = 'إضافة قسم جديد';
$string['advice_annotate'] = '<p>ضع شروحاتك في الصفحة أدناه، ثم انقر على <strong>حفظ التغييرات</strong>.</p>
<ul>
<li>لوضع الشروحات، أنقر واحدًا من مُعلِّمات الشرح ثم أدخل النص المطلوب.</li>
<li>يمكن حذف الشروحات الجديدة والموجودة عبر إزالة كل النص من النموذج أدناه.</li>
<li>الأرقام التي بين الأقواس المربعة تشير إلى الشروحات.</li>
</ul>';
$string['advice_missingpage'] = 'تم الارتباط مع هذه الصفحة، ولكن لم يتم إنشاؤها بعد.';
$string['advice_viewdeleted'] = 'أنت تشاهد نسخة محذوفة من هذه الصفحة.';
$string['advice_viewold'] = 'أنت تشاهد نسخة قديمة من هذه الصفحة.';
$string['annotationmarker'] = 'مُعلِّم الشروحات';
$string['annotations'] = 'الشروحات';
$string['annotationsystem'] = 'نظام الشروحات';
$string['annotationsystem_help'] = 'تمكين تبويب الشروحات بالنسبة إلى المستخدمين الذين لديهم الصلاحيات المناسبة..

بهذا التبويب يمكنك إضافة الشروحات الضمنية إلى صفحات الويكي (على سبيل المثال، تعليقات المعلم على عمل الطالب).';
$string['collapseallannotations'] = 'طي الشروحات';
$string['collapseannotation'] = 'طي الشرح';
$string['countdowntext'] = 'يسمح الويكي بمهلة {$a} دقائق للتحرير فقط. أجرِ تغييراتك ثم انقر الحفظ أو الإلغاء قبل أن يصل المتبقي (إلى اليسار) إلى الصفر.';
$string['deleteorphanedannotations'] = 'حذف الشروحات المفقودة';
$string['diff_someannotations'] = 'هذا التحرير لم يجرِ تغييرات في النص الأصلي، لذلك لم يتم تأشير أي فروقات أدناه، مع ذلك، تغيرت الشروحات. قد تكون هناك ايضًا تغييرات في المظهر.';
$string['downloadcsv'] = 'ملف نصي ذو قيم مفصولة بفوارز';
$string['duplicatepagetitle'] = 'عنوان الصفحة الجديدة ينبغي أن لا يكون مطابقًا لأي من عناوين الصفحات الموجودة.';
$string['editpage'] = 'تحرير الصفحة';
$string['emptypagetitle'] = 'عنوان الصفحة الجديدة ينبغي أن لا يُترك فارغاً.';
$string['emptysectiontitle'] = 'عنوان القسم الجديد ينبغي أن لا يُترك فارغاً.';
$string['endannotation'] = 'نهاية الشرح';
$string['error_nopermission'] = 'ليست لديك صلاحية معاينة محتوى هذه الصفحة';
$string['event:ouwikidelete'] = 'إصدار ouwiki تم حذفه';
$string['event:ouwikipagecreated'] = 'صفحة ouwiki تم إنشاؤها';
$string['event:ouwikipageupdated'] = 'صفحة ouwiki تم تحديثها';
$string['event:ouwikiundelete'] = 'إصدار ouwiki تم إلغاء حذفه';
$string['event:ouwikiviewed'] = 'ouwiki تمت معاينته';
$string['event:pagelock'] = 'ouwiki تمت تأمينه';
$string['event:pageunlock'] = 'ouwiki تمت إلغاء تأمينه';
$string['event:savefailed'] = 'فشل جلسة عند الصفحة تم حفظه';
$string['expandallannotations'] = 'توسيع الشروحات';
$string['expandannotation'] = 'توسيع الشرح';
$string['externaldashboardadd'] = 'إضافة ويكي إلى لوحة التحكم';
$string['externaldashboardremove'] = 'إزالة الويكي من لوحة التحكم';
$string['feeditemdescriptiondate'] = '{$a->main} في {$a->date}.';
$string['feeditemdescriptionnodate'] = '{$a->main}.';
$string['feedtitle'] = 'ويكي {$a->course}: {$a->name} - {$a->subtitle}';
$string['hideannotationicons'] = 'إخفاء الشروحات';
$string['import_confirm_conflicts'] = 'تضاربات الصفحة:';
$string['import_confirm_conflicts_locked'] = 'صفحة {$a} مؤمَّنة';
$string['import_confirm_conflicts_lockedwarn'] = 'تم تعليق الصفحة المراد الكتابة عليها. تأكد من إمكانيتك في تحرير هذه الصفحة قبل المحاولة مجددًا.';
$string['import_confirm_conflicts_notlocked'] = 'الصفحة غير مؤمَّنة';
$string['import_confirm_conflicts_option1'] = 'دمج محتوى الصفحة';
$string['import_confirm_conflicts_option2'] = 'استبدال المحتوى الموجود في الصفحة';
$string['import_confirm_from'] = 'الاستيراد من';
$string['import_confirm_linkfrom_startpage1'] = 'الدمج مع المحتوى الموجود في صفحة البدء';
$string['import_confirm_linkheader'] = 'روابط الصفحة';
$string['import_confirm_mergeheader'] = 'تضاربات الصفحة';
$string['import_lockedpage'] = 'صفحة تم تأمينها';
$string['import_nocontent'] = 'نشاط الويكي ليس فيه أي محتوى لاستيراده.';
$string['import_process_summary_imported'] = 'الصفحات المستوردة';
$string['import_process_summary_updated'] = 'الصفحات المحدثة';
$string['import_selectwiki'] = 'الاستيراد من';
$string['linkedfrom'] = 'الصفحات التي ترتبط معها';
$string['linkedfromsingle'] = 'الصفحة التي ترتبط معها';
$string['nowikipages'] = 'لا توجد أي صفحات في هذا الويكي.';
$string['orphanedannotations'] = 'الشروحات المفقودة';
$string['ouwiki:editothers'] = 'معاينة محتوى أي ويكي فرعي تمكن معاينته';
$string['ouwikicrontask'] = 'أعمال صيانة ويكي OU';
$string['page'] = 'الصفحة';
$string['pagedeletedinfo'] = 'بعض الإصدارات المحذوفة معروضة في القائمة أدناه.
إنها مرئية فقط للأشخاص ذوي صلاحية حذف الإصدارات. المستخدمون العاديون لا يشاهدونها على الإطلاق.';
$string['pagedoesnotexist'] = 'هذه الصفحة ليست موجودة في الويكي بعد.';
$string['pagelockeddetails'] = '{$a->name} بدأ بتحرير هذه الصفحة في {$a->lockedat}، ولا يزال مشتغلاً بها حتى {$a->seenat}. لا يمكنك تحريرها حتى يتم الفراغ منها';
$string['pagelockeddetailsnojs'] = '{$a->name} بدأ بتحرير هذه الصفحة في {$a->lockedat}، ولديه حتى {$a->nojs} لتحريرها. لا يمكنك تحريرها حتى يتم الفراغ منها';
$string['pagelockedtitle'] = 'هذه الصفحة يجري تحريرها من قبل شخص آخر.';
$string['pagenameisstartpage'] = 'اسم الصفحة مماثل لاسم صفحة البدء. استعمل اسم صفحة مختلف.';
$string['pagenametoolong'] = 'اسم الصفحة طويل جدًا. استعمل اسم صفحة أقصر.';
$string['pagescreated'] = 'صفحات تم إنشاؤها';
$string['privacy:annotationdeleted'] = '[تم حذف الشرح بناءً على طلب المستخدم]';
$string['privacy:metadata:ouwiki_annotations'] = 'شروحات صفحات ويكي OU';
$string['privacy:metadata:ouwiki_annotations:content'] = 'محتوى الشرح للصفحة';
$string['privacy:metadata:ouwiki_annotations:timemodified'] = 'وقت آخر تعديل في الشرح';
$string['privacy:metadata:ouwiki_annotations:userid'] = 'المستخدم الذي أنشأ الشرح';
$string['privacy:metadata:ouwiki_versions:wordcount'] = 'عداد كلمات محتوى التنقيح';
$string['privacy:metadata:ouwiki_versions:xhtml'] = 'محتوى التنقيح';
$string['privacy:metadata:preferences:ouwiki_hide_annotations'] = 'إخفاء الشروحات عند معاينة الويكي';
$string['reverterrorcapability'] = 'ليست لديك صلاحية الرجوع إلى إصدار أقدم';
$string['savefailtitle'] = 'يتعذر حفظ الصفحة';
$string['showannotationicons'] = 'إظهار الشروحات';
$string['showwordcounts_help'] = 'عند تشغيله، سيتم احتساب عداد الكلمات للصفحات وعرضه عند أسفل المحتوى الرئيسي.';
$string['startannotation'] = 'بداية الشرح';
$string['typeinpagename'] = 'أكتب اسم الصفحة هنا';
$string['typeinsectionname'] = 'إطبع عنوان القسم هنا';
$string['wikiintro'] = 'الوصف';
$string['wikirecentchanges_from'] = 'تغييرات في الويكي (صفحة {$a})';
