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
 * Strings for component 'forumanon', language 'ar', version '4.5'.
 *
 * @package     forumanon
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addanewdiscussion'] = 'إضافة موضوع مناقشة جديد';
$string['addanewquestion'] = 'إضافة سؤال جديد';
$string['addanewtopic'] = 'إضافة موضوع جديد';
$string['advancedsearch'] = 'بحث متقدم';
$string['allowsdiscussions'] = 'هذا المنتدى يسمح لكل مستخدم أن يبدأ موضوعاً واحداً للنقاش.';
$string['alreadyfirstpost'] = 'هذه هي المشاركة الأولى في المناقشة';
$string['cannotadd'] = 'تعذرت إضافة المناقشة في هذا المنتدى';
$string['cannotadddiscussion'] = 'إضافة مناقشات إلى هذا المنتدى يتطلب عضوية مجموعات.';
$string['cannotadddiscussionall'] = 'ليست لديك صلاحية إضافة موضوع مناقشة جديد لكل المشاركين.';
$string['cannotcreatediscussion'] = 'تعذر إنشاء مناقشة جديدة';
$string['cannotfinddiscussion'] = 'تعذر العثور على المناقشة في هذا المنتدى';
$string['cannotfindfirstpost'] = 'تعذر العثور على المنشور الأول في هذا المنتدى';
$string['cannotfindorcreateforum'] = 'تعذر العثور على منتدى الأخبار الرئيسي لهذا الموقع أو إنشائه';
$string['cannotmovefromsingleforum'] = 'لا يمكن نقل المناقشة من منتدى بسيط ذي مناقشة منفردة';
$string['cannotpurgecachedrss'] = 'تعذر تطهير المغذيات المخبأة لخدمة الأخبار لمنتدى أو منتديات المصدر و/أو المقصد - تحقق من ملفك المسمى permissionsforums';
$string['cannotsplit'] = 'لا يمكن تقسيم المناقشات في هذا المنتدى';
$string['cannotviewpostyet'] = 'لانك لم تقم بالمشاركة في هذا المنتدى لذا لا تستطيع قراءة أسئلة الطلاب الآخرين';
$string['completiondiscussions'] = 'ينبغي على الطالب إنشاء المناقشات:';
$string['completiondiscussionsgroup'] = 'يتطلب مناقشات';
$string['completiondiscussionshelp'] = 'يتطلب إكتمال المناقشات';
$string['completionposts'] = 'ينبغي على الطالب طرح المناقشات أو الردود:';
$string['completionpostshelp'] = 'يتطلب إكتمال المناقشات أو الردود';
$string['completionreplies'] = 'ينبغي على الطالب تقديم الردود:';
$string['configdisplaymode'] = 'نمط العرض الافتراضي للمناقشات إذا لم يتم اختيار أحدها.';
$string['configenabletimedposts'] = 'أضبطه على \'نعم\' إذا أردت السماح بتحديد فترات العرض عند نشر مناقشة جديدة في المنتدى.';
$string['configlongpost'] = 'أي منشور يزيد عن هذا الحد (مقاساً بالحروف دون إحتساب رموز HTML) يعتبر طويلاً. المنشورات المعروضة في صفحة واجهة الموقع، صفحات المساقات ذات النمط الاجتماعي، أو الملفات الشخصية للمستخدمين يتم تقصيرها إلى فاصل طبيعي في موضع ما بين قيمتي forumanon_shortpost و forumanon_longpost.';
$string['configmanydiscussions'] = 'الحد الأقصى لعدد للمناقشات المعروضة في الصفحة الواحد للمنتدى';
$string['configoldpostdays'] = 'عدد الأيام الماضية التي تُعتبر عندها المنشورات مقروءة.';
$string['configreplytouser'] = 'هل ينبغي تضمين عنوان البريد الإلكتروني الخاص بالمشارك في المنتدى عند إرسال المشاركة بالبريد الالكتروني؟ هذا سيسمح لمتلقي الرسالة بالرد على صاحب المشاركة شخصياً عبر البريد الالكتروني بدلاً من استعمال المنتدى. حتى لو تم ضبطه على \'نعم\'، يستطيع المستخدمون من خلال الخيارات المتاحة في ملفهم الشخصي جعل عناوين بريدهم سرية.';
$string['configtrackreadposts'] = 'إختر \'نعم\' إذا كنت تريد متابعة ما تمت قراءته أو عدم قراءته لكل مستخدم.';
$string['deleteddiscussion'] = 'موضوع المناقشة تم حذفه';
$string['discussion'] = 'المناقشة';
$string['discussionmoved'] = 'تم نقل هذه المناقشة إلى \'{$a}\'.';
$string['discussionmovedpost'] = 'لقد تم نقل هذه المناقشة إلى <a href="{$a->discusshref}">هنا</a> في المنتدى <a href="{$a->forumhref}">{$a->forumname}</a>';
$string['discussionname'] = 'اسم المناقشة';
$string['discussions'] = 'المناقشات';
$string['discussionsstartedby'] = 'المناقشات التي بدأها {$a}';
$string['discussionsstartedbyrecent'] = 'المناقشات التي بدأها {$a} مؤخرًا';
$string['eachuserforum'] = 'كل مستخدم يطرح مناقشة واحدة';
$string['exportdiscussion'] = 'تصدير المناقشة بأكملها';
$string['forumanon:addnews'] = 'إضافة أخبار';
$string['forumanon:exportdiscussion'] = 'تصدير المناقشة بأكملها';
$string['forumanon:movediscussions'] = 'نقل المناقشات';
$string['forumanon:splitdiscussions'] = 'فصل المناقشات';
$string['forumanon:startdiscussion'] = 'بدء مناقشات جديدة';
$string['forumanon:viewdiscussion'] = 'معاينة المناقشات';
$string['forumbodyhidden'] = 'لا يمكن معاينة هذا المنشور من قبلك، ربما لأنك لم تنشر شيئاً في المناقشة، أو لم تنقضِ بعد مدة التحرير القصوى.';
$string['forumintro'] = 'مقدمة المنتدى';
$string['forumtype_help'] = 'توجد خمسة أنواع من المنتديات:

* نقاش واحد بسيط - موضوع مناقشة واحد يمكن لأي شخص أن يرد عليه
* كل شخص يطرح نقاشاً واحداً - يمكن لكل طالب طرح موضوع مناقشة واحد فقط، يمكن لأي أحد بعدها الرد عليه
* منتدى سؤال وجواب - ينبغي على الطلاب طرح آرائهم أولاً قبل أن يتمكنوا من رؤية منشورات باقي الطلاب
* منتدى قياسي يظهر بشكل مدونة - منتدى مفتوح يستطيع فيه أي شخص أن يبدأ موضوعاً جديداً في أي وقت، ويتم عرض مواضيع المناقشات في صفحة واحدة مع روابط "ناقش هذا الموضوع"
* منتدى قياسي للاستعمال العام - منتدى مفتوح يستطيع فيه أي شخص أن يبدأ موضوعاً جديداً في أي وقت';
$string['introblog'] = 'المنشورات في هذا المنتدى تم نسخها تلقائياً من مدونات المستخدمين في هذا المساق لأن تلك المشاركات لم تعد متاحة';
$string['introteacher'] = 'منتدى الملاحظات والنقاش الخاص بالمعلم فقط';
$string['invalidaccess'] = 'لم يتم الوصول إلى هذه الصفحة بشكل صحيح';
$string['invaliddiscussionid'] = 'مُعرَّف المناقشة لم يكن صحيحاً أو لم يعد موجوداً';
$string['manydiscussions'] = 'المناقشات في الصفحة الواحدة';
$string['markalldread'] = 'قم باعتبار كل منشورات هذه المناقشة مقروءة.';
$string['markallread'] = 'قم باعتبار كل منشورات هذا المنتدى مقروءة.';
$string['modulename_help'] = 'تُمكن وحدة نشاط المنتدى المشاركين من إجراء مناقشات غير متزامنة.';
$string['modulename_link'] = 'forumanon';
$string['movethisdiscussionto'] = 'أنقل هذه المناقشة إلى...';
$string['mustprovidediscussionorpost'] = 'عليك إعطاء إما مُعرَّف المناقشة أو مُعرَّف المنشور لغرض التصدير.';
$string['newforumposts'] = 'المنشورات الجديدة في المنتدى';
$string['nodiscussions'] = 'لا يوجد موضوع للمناقشة بعد في هذا المنتدى';
$string['nodiscussionsstartedby'] = 'لا توجد مناقشات مبدوءة من قبل هذا المستخدم';
$string['nopermissiontosubscribe'] = 'ليست لديك صلاحية معاينة مشتركي المنتدى';
$string['nopermissiontoview'] = 'ليست لديك صلاحية معاينة هذا المنشور';
$string['nopostforum'] = 'عذراً، ليس مسموحاً لك بالنشر في هذا المنتدى';
$string['noquestions'] = 'لا توجد أسئلة بعد في هذا المنتدى';
$string['nosubscribers'] = 'لا يوجد مشتركون بعد في هذا المنتدى';
$string['notexists'] = 'المناقشة لم يعد لها وجود';
$string['notpartofdiscussion'] = 'هذا المنشور ليس جزءاً من مناقشة!';
$string['noviewdiscussionspermission'] = 'ليس لديك الصلاحية لمعاينة المناقشات في هذا المنتدى';
$string['olderdiscussions'] = 'المناقشات الأقدم';
$string['oldpostdays'] = 'مقروءة بعد';
$string['openmode0'] = 'لا مناقشات، لا ردود';
$string['openmode1'] = 'لا مناقشات، لكن الردود مسموح بها';
$string['openmode2'] = 'المناقشات والردود مسموح بها';
$string['postaddedtimeleft'] = 'لديك {$a} للتحرير إن كنت تريد عمل أي تعديلات.';
$string['prunedpost'] = 'تم إنشاء مناقشة جديدة لذلك المنشور';
$string['pruneheading'] = 'إقسم المناقشة وانقل هذا المنشور إلى مناقشة جديدة';
$string['qandanotify'] = 'هذا منتدي سؤال وجواب. لمعاينة المشاركات فيه يجب عليك المشاركة بإجابتك على الأسئلة أولاً';
$string['resetforumsall'] = 'حذف كل المنشورات';
$string['rssarticles_help'] = 'هذا الإعداد يحدد عدد المقالات (إما مناقشات أو منشورات) المطلوب تضمينها في خدمة مغذي الأخبار. تتراوح القيم المقبولة عادة ما بين 5 و20.';
$string['rsssubscriberssdiscussions'] = 'مغذي الأخبار للمناقشات';
$string['seeallposts'] = 'مشاهدة كل منشورات هذا المستخدم';
$string['singleforum'] = 'نقاش واحد بسيط';
$string['trackingtype'] = 'أتريد تعقب القراءة في هذا المنتدى؟';
$string['trackingtype_help'] = 'عند تمكينه، سيتمكن المشاركون من تعقب حالات قراءة الرسائل والمناقشات في المنتدى من حيث قراءتها.

هناك ثلاثة خيارات:

* إختياري - يمكن للمشاركين اختيار تمكين تعقب القراءة أو تعطيله
* مُمَكَّن - تعقب القراءة فعال دائمًا
* مُعطل - تعقب القراءة متوقف دائمًا';
$string['viewalldiscussions'] = 'معاينة كل المناقشات';
$string['yournewquestion'] = 'سؤالك الجديد';
$string['yournewtopic'] = 'موضوع مناقشتك الجديد';
