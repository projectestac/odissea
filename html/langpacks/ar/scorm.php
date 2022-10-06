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
 * Strings for component 'scorm', language 'ar', branch 'MOODLE_38_STABLE'
 *
 * @package   scorm
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activation'] = 'تفعيل';
$string['activityloading'] = 'سيتم إعادة توجيهك تلقائيا إلى النشاط في';
$string['activityoverview'] = 'لديك حزم سكورم التي تحتاج إلى عناية';
$string['activitypleasewait'] = 'تحميل النشاط، يرجى الانتظار ...';
$string['adminsettings'] = 'إعدادات المشرف';
$string['advanced'] = 'المعامِلات';
$string['aicchacpkeepsessiondata'] = 'بيانات دورة  AICC HACP';
$string['aicchacpkeepsessiondata_desc'] = 'طول المدة بالأيام للحفاظ على بيانات جلسة HACP AICC الخارجية (القيمة العالية للإعداد ستملأ الجدول بالبيانات القديمة ولكنها قد تكون مفيدة عند التصحيح)';
$string['aicchacptimeout'] = 'مهلة AICC HACP';
$string['aicchacptimeout_desc'] = 'طول الوقت في الدقائق التي HACP خارجي الدورة AICC يمكن أن تبقى مفتوحة';
$string['aiccuserid'] = 'تمرير AICC معرف مستخدم رقمي';
$string['aiccuserid_desc'] = 'يعد معيار AICC لأسماء المستخدمين مقيدًا جدًا مقارنةً بـ Moodle ، و يسمح للأحرف الأبجدية الرقمية ، الشرْطة و الشرْطة السفلية فقط. غير مسموح بالفترات و المسافات و الرمز @.
في حالة التمكين ، يتم تمرير أرقام معرف المستخدم إلى حزمة AICC بدلاً من أسماء المستخدمين.';
$string['aliasonly'] = 'عند تحديد ملف imsmanifest.xml من مستودع التخزين ، يجب عليك استخدام اسم مستعار / اختصار لهذا الملف.';
$string['allowapidebug'] = 'تنشيط واجهة برمجة التطبيق للتصحيح والتقفي (تعيين قناع الالتقاط مع قناع واجهة برمجة التطبيق للتصحيح)';
$string['allowtypeaicchacp'] = 'مكّن AICC HACP الخارجي';
$string['allowtypeaicchacp_desc'] = 'إذا مكّن هذا يسمح AICC HACP بالاتصالات الخارجية دون الحاجة إلى الدخول للمستخدمين لطلبات المشاركة من حزمة AICC الخارجية.';
$string['allowtypeexternal'] = 'مكّن نوع الحزمة الخارجية';
$string['allowtypeexternalaicc'] = 'مكّن الرابط المباشر AICC';
$string['allowtypeexternalaicc_desc'] = 'إذا مكّن هذا يسمح URL مباشرة إلى حزمة بسيطة AICC';
$string['allowtypelocalsync'] = 'مكّن تحميل حزمة من نوع';
$string['apidebugmask'] = 'التقاط قناع التصحيح API  - باستخدام التعابير المنطقية البسيطة على <username>: <activityname> مثل مشرف: * سوف يتم التصحيح للمستخدم المشرف فقط.';
$string['areacontent'] = 'ملفات المحتوى';
$string['areapackage'] = 'ملف الحزمة';
$string['asset'] = 'الأصل';
$string['assetlaunched'] = 'الأصل - تمت معاينته';
$string['attempt'] = 'حاول';
$string['attempt1'] = 'محاولة 1';
$string['attempts'] = 'محاولات';
$string['attemptsmanagement'] = 'إدارة المحاولات';
$string['attemptstatusall'] = 'دفة القيادة وصفحة تسجيل الدخول';
$string['attemptstatusentry'] = 'صفحة تسجيل الدخول فقط';
$string['attemptstatusmy'] = 'لوحة القيادة فقط';
$string['attemptsx'] = 'محاولات {$a}';
$string['attr_error'] = 'قيمة غير صحيحة للسمة ({$a->attr}) في الوسم {$a->tag}.';
$string['autocommit'] = 'تنفيذ تلقائي';
$string['autocommitdesc'] = 'حفظ بيانات سكورم تلقائياً إذا لم تقم حزمة سكورم بحفظها.';
$string['autocommit_help'] = 'عند التمكين، يتم حفظ بيانات سكورم تلقائياً في قاعدة البيانات. مفيد لكائنات سكورم التي لا تحفظ بياناتها بانتظام.';
$string['autocontinue'] = 'استمرار تلقائي';
$string['autocontinuedesc'] = 'عند التمكين، يتم تشغيل كائنات التعلم اللاحقة تلقائياً، وإلا وجب استعمال زر الاستمرار.';
$string['autocontinue_help'] = 'إذا مكّن ، كائنات التعلم اللاحقة تطلق تلقائياً، و إلا يجب استخدام الزر متابعة.';
$string['averageattempt'] = 'متوسط المحاولات';
$string['badarchive'] = 'يجب عليك تقديم ملف مضغوط صالح';
$string['badimsmanifestlocation'] = 'تم العثور على ملف imsmanifest.xml و لكنه لم يكن في جذر ملف zip الخاص بك ، يرجى إعادة حزم سكورم';
$string['badmanifest'] = 'بيان بعض الأخطاء: انظر سجل الأخطاء';
$string['browse'] = 'معاينة';
$string['browsed'] = 'أُستعرض';
$string['browsemode'] = 'النمط العرضي';
$string['browserepository'] = 'استعراض المخزن';
$string['calculatedweight'] = 'الوزن المحسوب';
$string['calendarend'] = '{$a} يغلق';
$string['calendarstart'] = '{$a} يفتح';
$string['cannotaccess'] = 'لا يمكنك استدعاء هذا البرنامج النصي بهذه الطريقة';
$string['cannotfindsco'] = 'تعذر العثور على SCO';
$string['chooseapacket'] = 'إختر أو قم بتحديث الرزمة';
$string['closebeforeopen'] = 'لقد حددت تاريخ إغلاق قبل تاريخ الفتح.';
$string['collapsetocwinsize'] = 'طي جدول المحتويات عندما يكون حجم النافذة أدناه';
$string['collapsetocwinsizedesc'] = 'يتيح لك هذا الإعداد تحديد حجم النافذة الذي يجب أن ينطوي جدول المحتويات عليه تلقائياً.';
$string['compatibilitysettings'] = 'إعدادات التوافق';
$string['completed'] = 'تم';
$string['completionscorerequired'] = 'تتطلب الدرجة الدنيا';
$string['completionscorerequireddesc'] = 'يتطلب الدرجة الدنيا {$a} لإكماله';
$string['completionscorerequired_help'] = 'تمكين هذا الإعداد سوف يطلب من المستخدم أن يكون له على الأقل الحد الأدنى من الدرجة المدخلة على أن تكون علامة كاملة في هذا نشاط سكورم، و كذلك أية متطلبات أخرى للنشاط تستكمل.';
$string['completionstatusallscos'] = 'تتطلب جميع scos للعودة حالة الانتهاء';
$string['completionstatusallscos_help'] = 'تحتوي بعض حزم سكورم على مكونات متعددة أو "scos" - عند تمكين ذلك ، يجب على جميع scos داخل الحزمة إرجاع الدرس ذي الصلة ليتم وضع علامة على هذا النشاط بالكامل.';
$string['completionstatus_completed'] = 'اكتمل';
$string['completionstatus_passed'] = 'مرّ';
$string['completionstatusrequired'] = 'تقتضي الحالة';
$string['completionstatusrequireddesc'] = 'يجب على الطالب تحقيق واحد على الأقل من الحالات التالية: {$a}';
$string['completionstatusrequired_help'] = 'التحقق من واحد أو أكثر من الحالات تتطلب من المستخدم تحقيق واحد على الأقل من حالات الفحص من أجل وضع علامة كاملة في نشاط سكورم هذا، و كذلك أية متطلبات أخرى تستكمل للنشاط.';
$string['confirmloosetracks'] = 'تحذير: الحزمة يبدو أنه تم تغييرها أو تعديلها. إذا تم تغيير بنية الحزمة، قد تفقد بعض المسارات المستخدمين أثناء عملية التحديث.';
$string['contents'] = 'محتويات';
$string['coursepacket'] = 'حزمة المقرر الدراسي';
$string['coursestruct'] = 'بناء المقرر الدراسي';
$string['crontask'] = 'معالجة خلفية سكورم';
$string['currentwindow'] = 'النافذة الحالية';
$string['datadir'] = 'خطأ في ملف النظام: تعذر إنشاء مجلد بيانات المساق';
$string['defaultdisplaysettings'] = 'إعدادات العرض الافتراضية';
$string['defaultgradesettings'] = 'إعدادات التقييم الافتراضية';
$string['defaultothersettings'] = 'إعدادات افتراضية أخرى';
$string['deleteallattempts'] = 'احذف كل محاولات سكورم';
$string['deleteattemptcheck'] = 'هل أنت متأكد تماما أنك تريد حذف هذه المحاولات تماما؟';
$string['deleteselected'] = 'حذف المحاولات المحددة';
$string['deleteuserattemptcheck'] = 'هل أنت متأكد تماما أنك تريد حذف كل محاولاتك تماماً؟';
$string['details'] = 'تفاصيل المسار';
$string['directories'] = 'أظهر روابط الدليل';
$string['disabled'] = 'تعطيل';
$string['display'] = 'أعرض الحزمة';
$string['displayactivityname'] = 'عرض اسم النشاط';
$string['displayactivityname_help'] = 'ما إذا كان سيتم عرض اسم النشاط أعلى مشغل سكورم أم لا.';
$string['displayattemptstatus'] = 'أعرض حالة المحاولة';
$string['displayattemptstatusdesc'] = 'ما إذا كان يتم عرض ملخص لمحاولات المستخدم في كتلة نظرة عامة على المساق في دفة القيادة و/أو صفحة دخول سكورم.';
$string['displayattemptstatus_help'] = 'هذا التفضيل يسمح بموجز للمستخدمين الذين يحاولون العرض في كتلة نظرة عامة على المقرر في صفحتي و / أو إلى صفحة الدخول سكورم.';
$string['displaycoursestructure'] = 'عرض هيكل المساق في صفحة الدخول';
$string['displaycoursestructuredesc'] = 'هذا التفضيل يحدد القيمة الافتراضية لعرض هيكل المقرر في إعداد صفحة الدخول';
$string['displaycoursestructure_help'] = 'إذا مكّن ، يتم عرض جدول المحتويات في صفحة المخطط التفصيلي  لسكورم.';
$string['displaydesc'] = 'هذا التفضيل يحدد ما إذا كان الافتراضي عرض الحزمة أو لا في النشاط.';
$string['displaysettings'] = 'إعدادات العرض';
$string['dnduploadscorm'] = 'إضافة حزمة سكورم';
$string['domxml'] = 'مكتبة دومكسمل الخارجية';
$string['duedate'] = 'موعد التسليم';
$string['element'] = 'عنصر';
$string['enter'] = 'ادخل';
$string['entercourse'] = 'أدخل المساق';
$string['errorlogs'] = 'سجل الأخطاء';
$string['eventattemptdeleted'] = 'تم حذف المحاولة';
$string['eventinteractionsviewed'] = 'النظر إلى التفاعلات';
$string['eventreportviewed'] = 'مشاهدة التقرير';
$string['eventscolaunched'] = 'أطلقت Sco';
$string['eventscorerawsubmitted'] = 'درجة سكورم المقدمة الأولية';
$string['eventstatussubmitted'] = 'تقديم حالة سكورم';
$string['eventtracksviewed'] = 'المسارات المشاهدة';
$string['eventuserreportviewed'] = 'عرض تقرير المستخدم';
$string['everyday'] = 'كل يوم';
$string['everytime'] = 'في كل مرة من استخدامه';
$string['exceededmaxattempts'] = 'لقد وصلت إلى الحد الأقصى لعدد المحاولات.';
$string['exit'] = 'الخروج من المقرر الدراسي';
$string['exitactivity'] = 'الخروج من نشاط';
$string['expired'] = 'عذراً، تم إغلاق هذا النشاط في {$a} وهو غير متوفر الآن.';
$string['external'] = 'تحديث توقيت الحزم الخارجية';
$string['failed'] = 'فشل';
$string['finishscorm'] = 'إذا انتهيت من مشاهدة هذا المصدر، {$a}';
$string['finishscormlinkname'] = 'اضغط هنا للعودة إلى صفحة المقرر';
$string['firstaccess'] = 'الدخول الأول';
$string['firstattempt'] = 'المحاولة الأولى';
$string['floating'] = 'يطفو';
$string['forceattemptalways'] = 'دائما';
$string['forceattemptoncomplete'] = 'عند اكتمال المحاولة السابقة ، بنجاح أو فشل';
$string['forcecompleted'] = 'أجبر على الانتهاء';
$string['forcecompleteddesc'] = 'هذا التفضيل يحدد القيمة الافتراضية لإعداد الاستكمال الإجباري';
$string['forcecompleted_help'] = 'إذا مكّن ، يتم فرض حالة المحاولة الحالية على " الانتهاء". هذا الإعداد لا ينطبق إلا على حزم سكورم 1.2.';
$string['forcejavascript'] = 'افرض على المستخدمين تمكين JavaScript';
$string['forcejavascript_desc'] = 'إذا تم تمكينه (مستحسن) فسيمنع الوصول إلى كائنات سكورم عندما تكون JavaScript غير مدعومة أو مُمَكَّنة في المستعرض لدى المستخدمين. إذا تم تعطيله، فقد يشاهد المستخدم حزمة سكورم لكن اتصالات واجهة برمجة التطبيق ستفشل، ولن يتم حفظ معلومات العلامات.';
$string['forcejavascriptmessage'] = 'JavaScript مطلوب لعرض هذا الكائن، يرجى تمكينه في المتصفح الخاص بك وحاول مرة أخرى.';
$string['forcenewattempts'] = 'فرض محاولة جديدة';
$string['forcenewattempts_help'] = 'هناك 3 خيارات:

* لا - في حالة إكتمال المحاولة السابقة أو اجتيازها أو إخفاقها، سيتم تزويد الطالب بخيار للدخول في وضع المراجعة أو بدء محاولة جديدة.
* عند إكتمال المحاولة السابقة أو اجتيازها أو إخفاقها - يعتمد ذلك على حزمة سكورم التي تحدد حالة \'مكتملة\' أو \'ناجحة\' أو \'فاشلة\'.
* دائماً - سيؤدي كل دخول جديد إلى نشاط سكورم إلى إنشاء محاولة جديدة ولن يتم إرجاع الطالب إلى نفس النقطة التي وصل إليها في محاولته السابقة.';
$string['found'] = 'تم العثور على البيان الأساسي';
$string['frameheight'] = 'يعين هذا التفضيل الارتفاع الافتراضي لإطار المرحلة أو النافذة.';
$string['framewidth'] = 'يعين هذا التفضيل العرض الافتراضي لإطار المرحلة أو النافذة.';
$string['fromleft'] = 'من اليسار';
$string['fromtop'] = 'من أعلى';
$string['fullscreen'] = 'إملأ كل الشاشة';
$string['general'] = 'بيانات عامة';
$string['gradeaverage'] = 'المتوسط';
$string['gradeforattempt'] = 'درجة للمحاولة';
$string['gradehighest'] = 'العلامة العليا';
$string['grademethod'] = 'طريقة رصد الدرجات';
$string['grademethoddesc'] = 'هذا التفضيل يحدد أسلوب الدرجات الافتراضي لهذا النشاط';
$string['grademethod_help'] = 'تحدد طريقة منح العلامات كيفية تحديد علامة المحاولة الواحدة من النشاط.

هناك 4 طرق لمنح العلامات:

* كائنات التعلم - عدد كائنات التعلم المكتملة/الناجحة
* أعلى درجة - أعلى درجة تم الحصول عليها في كافة كائنات التعلم الناجحة
* متوسط الدرجات - متوسط كل الدرجات
* درجة المجموع - مجموع كل الدرجات';
$string['gradereported'] = 'الدرجة المعلنة';
$string['gradescoes'] = 'كائنات تعلّم';
$string['gradesettings'] = 'إعدادات الدرجة';
$string['gradesum'] = 'الدرجة الاجمالية';
$string['height'] = 'أرتفاع';
$string['hidden'] = 'مخفي';
$string['hidebrowse'] = 'عطل وضع المعاينة';
$string['hidebrowsedesc'] = 'هذا التفضيل يحدد الافتراضي سواء لتعطيل أو تمكين وضع المعاينة';
$string['hidebrowse_help'] = 'وضع المعاينة يسمح للطالب بتصفح النشاط قبل محاولته. إذا تم تعطيل وضع المعاينة، يتم إخفاء زر المعاينة.';
$string['hideexit'] = 'اخفاء رابط الخروج';
$string['hidereview'] = 'اخفاء أزرار المعاينة';
$string['hidetoc'] = 'عرض ترتيب المقرر الدراسي';
$string['hidetocdesc'] = 'هذا التفضيل يحدد ما إذا كان الافتراضي لإظهار أو إخفاء هيكل المقرر هو  (TOC) في مشغل سكورم.';
$string['hidetoc_help'] = 'يحدد هذا الإعداد كيفية عرض جدول المحتويات في مشغل سكورم.';
$string['highestattempt'] = 'أعلى محاولة';
$string['identifier'] = 'معرف السؤال';
$string['incomplete'] = 'غير مكتمل';
$string['indicator:cognitivedepth'] = 'سكورم معرفياً';
$string['indicator:cognitivedepthdef'] = 'سكورم معرفياً';
$string['indicator:cognitivedepthdef_help'] = 'لقد وصل المشارك إلى هذه النسبة المئوية من المشاركة المعرفية التي وفرتها نشاطات سكورم خلال فترة التحليل هذه (المستويات = لا معاينة، معاينة، تقديم، معاينة الرد)';
$string['indicator:cognitivedepth_help'] = 'هذا المؤشر مبني على عمق الحالة المعرفية التي وصلها الطالب في نشاط سكورم.';
$string['indicator:socialbreadth'] = 'سكورم إجتماعياً';
$string['indicator:socialbreadthdef'] = 'سكورم إجتماعياً';
$string['indicator:socialbreadthdef_help'] = 'لقد وصل المشارك إلى هذه النسبة المئوية من المشاركة الاجتماعية التي وفرتها نشاطات سكورم خلال فترة التحليل هذه (المستويات = لا مشاركة، المشاركة منفرداً)';
$string['indicator:socialbreadth_help'] = 'هذا المؤشر مبني على عمق التوسع الاجتماعي الذي وصله الطالب في نشاط سكورم.';
$string['info'] = 'المعلومات';
$string['interactions'] = 'تفاعلات';
$string['invalidactivity'] = 'نشاط سكورم غير صحيح';
$string['invalidhacpsession'] = 'جلسة HACP غير صحيحة';
$string['invalidmanifestname'] = 'يمكن تحديد ملفات imsmanifest.xml أو .zip فقط';
$string['invalidmanifestresource'] = 'تحذير: تمت الإشارة إلى المصادر التالية في بيانك و لا يمكن العثور عليها:';
$string['invalidstatus'] = 'حالة غير صحيحة';
$string['invalidurl'] = 'رابط محدد غير صالح';
$string['invalidurlhttpcheck'] = 'رابط إنترنت غير صالح. رسالة التصحيح :<pre>{$a->cmsg}</pre>';
$string['last'] = 'كان آخر دخول في';
$string['lastaccess'] = 'آخر دخول';
$string['lastattempt'] = 'آخر محاولة مكتملة';
$string['lastattemptlock'] = 'قفّل بعد المحاولة الأخيرة';
$string['lastattemptlockdesc'] = 'هذا التفضيل يحدد القيمة الافتراضية لإعداد القفل بعد المحاولة الأخيرة.';
$string['lastattemptlock_help'] = 'إذا مكّن ، يتم منع الطالب من إطلاق مشغل سكورم بعد استخدام كل المحاولات المخصصة له.';
$string['location'] = 'أظهر شريط الموقع';
$string['masteryoverride'] = 'درجة الإتقانها تتخطى الحالة';
$string['masteryoverridedesc'] = 'يعيّن هذا التفضيل الإعداد الافتراضي لتجاوز درجة الإتقان';
$string['masteryoverride_help'] = 'إذا تم التمكين وتم توفير درجة إتقان ، عندما يتم استدعاء LMSFinish وتم تعيين درجة أولية، سيتم إعادة حساب الحالة باستخدام النتيجة الأولية ودرجة إتقان وأي حالة يتم توفيرها بواسطة سكورم (بما في ذلك "غير مكتملة") سيتم تجاوزها.';
$string['max'] = 'أعلى درجة';
$string['maximumattempts'] = 'عدد المحاولات';
$string['maximumattemptsdesc'] = 'هذا التفضيل يحدد الحد الأقصى الافتراضي لمحاولات نشاط';
$string['maximumattempts_help'] = 'هذا الإعداد يمكن عدد المحاولات المقيدة. فإنه لا ينطبق إلا على SCORM 1.2 وحزم AICC.';
$string['maximumgradedesc'] = 'هذا التفضيل يحدد الحد الأقصى الافتراضي  لدرجة النشاط';
$string['menubar'] = 'أظهر شريط القائمة';
$string['min'] = 'أدنى درجة';
$string['missing_attribute'] = 'سمة مفقودة  {$a->attr} في الوسم {$a->tag}';
$string['missingparam'] = 'العامل المطلوب مفقود أو خاطئ';
$string['missing_tag'] = 'وسم مفقود {$a->tag}';
$string['mode'] = 'نمط';
$string['modulename'] = 'سكورم';
$string['modulename_help'] = 'حزمة SCORM هي عبارة عن مجموعة من الملفات التي يتم حزمها وفقاً لمعيار متفق عليه لموضوعات التعلم. تُمكن وحدة النشاط SCORM من تحميل حزم SCORM أو AICC كملف مضغوط وإضافتها إلى المساق.

عادة ما يتم عرض المحتوى عبر عدة صفحات، مع التنقل بين الصفحات. هناك خيارات مختلفة لعرض المحتوى في النافذة المنبثقة، مع جدول المحتويات، مع أزرار التنقل الخ. تتضمن أنشطة SCORM عموماً أسئلة، مع علامات يتم تسجيلها في سجل العلامات.

يمكن استعمال أنشطة SCORM:

* لعرض محتوى الوسائط المتعددة والرسوم المتحركة
* كأداة تقييم';
$string['modulenameplural'] = 'حزم إسكورم';
$string['myaiccsessions'] = 'جلسات AICC الخاصة بي';
$string['myattempts'] = 'محاولاتي';
$string['nav'] = 'أظهر التنقل';
$string['navdesc'] = 'يحدد هذا الإعداد ما إذا كان سيتم إظهار أو إخفاء أزرة التنقل و موضعها.';
$string['nav_help'] = 'يحدد هذا الإعداد ما إذا كان سيتم إظهار أو إخفاء أزرة التنقل و موضعها. هناك 3 خيارات:
* لا - لا تظهر أزرة التنقل
* ضمن المحتوى - تظهر أزرة التنقل أسفل محتوى حزمة سكورم
* عائم - تظهر أزرة التنقل عائمة ، مع تحديد الموضع من الأعلى و من اليسار المحدد بواسطة الحزمة.';
$string['navigation'] = 'التنقل';
$string['navpositionleft'] = 'موضع أزرار التنقل من اليسار بالبكسل.';
$string['navpositiontop'] = 'موضع أزرار التنقل من الأعلى بالبكسل.';
$string['networkdropped'] = 'قرر مشغل سكورم أن اتصالك بالإنترنت غير موثوق أو أنه تمت مقاطعة. إذا تابعت نشاط سكورم هذا ، فقد لا يتم حفظ تقدمك.
يجب عليك الخروج من النشاط الآن ، و العودة عندما يكون لديك اتصال إنترنت يمكن الاعتماد عليه.';
$string['newattempt'] = 'إبدء محاولة جديدة';
$string['next'] = 'استمر';
$string['noactivity'] = 'لا شيء لتقديم تقرير عنه';
$string['noattemptsallowed'] = 'عدد المحاولات المسموح بها';
$string['noattemptsmade'] = 'عدد المحاولات التي قمت بها';
$string['no_attributes'] = 'الوسم {$a->tag} يجب أن يكون لديها سمات';
$string['no_children'] = 'الوسم {$a->tag} يجب أن يكون لديها فروع';
$string['nolimit'] = 'محاولات بلا حدود';
$string['nomanifest'] = 'حزمة ملفات غير صحيحة - بنية imsmanifest.xml أو AICC مفقودة';
$string['noprerequisites'] = 'آسف و لكن لم تكن قد وصلت إلى ما يكفي من المتطلبات الأساسية للوصول إلى هذا الكائن التعليمي.';
$string['noreports'] = 'لا يوجد تقرير للعرض';
$string['normal'] = 'عادي';
$string['noscriptnoscorm'] = 'متصفحك لا يدعم JavaScript أو تم تعطيل دعمه. حزمة سكورم هذه قد لا تشتغل أو تحفظ بياناتها بشكل صحيح.';
$string['notattempted'] = 'لم تتم محاولته';
$string['not_corr_type'] = 'عدم تطابق النوع للوسم {$a->tag}';
$string['notopenyet'] = 'آسف، هذا النشاط غير متوفر حتى {$a}';
$string['objectives'] = 'أهداف';
$string['openafterclose'] = 'لقد حددت تاريخًا مفتوحًا بعد تاريخ الإغلاق';
$string['optallstudents'] = 'كل المستخدمين';
$string['optattemptsonly'] = 'المستخدمون الذين لديهم محاولات فقط';
$string['options'] = 'الخيارات (ممنوعة من قبل بعض مستعرضات الويب)';
$string['optionsadv'] = 'الخيارات (متقدم)';
$string['optionsadv_desc'] = 'إذا تم التحقق ، فسيتم سرد العرض والارتفاع كإعدادات متقدمة.';
$string['optnoattemptsonly'] = 'المستخدمون الذين ليس لديهم محاولات فقط';
$string['organization'] = 'المنظمة';
$string['organizations'] = 'المنظمات';
$string['othersettings'] = 'إعدادات إضافية';
$string['package'] = 'ملف الحزمة';
$string['packagedir'] = 'خطأ نظام الملفات: لا يمكن إنشاء دليل الحزمة';
$string['packagefile'] = 'لا يوجد ملف حزمة محدد';
$string['packagehdr'] = 'حزمة';
$string['package_help'] = 'ملف الحزمة هو ملف مضغوط (أو PIF) يحتوي على ملفات تعريف المساق لـ SCORM/AICC.';
$string['packageurl'] = 'عنوان';
$string['packageurl_help'] = 'يتيح هذا الإعداد تحديد رابط URL لحزمة سكورم ، بدلاً من اختيار ملف عبر منتقي الملفات.';
$string['page-mod-scorm-x'] = 'الوحدة النمطية لأي صفحة سكورم';
$string['pagesize'] = 'حجم الصفحة';
$string['passed'] = 'نجح';
$string['php5'] = 'PHP 5 (مكتبة DOMXML الأصلي)';
$string['pluginadministration'] = 'إدارة SCORM / AICC';
$string['pluginname'] = 'حزمة SCORM';
$string['popup'] = 'نافذة جديدة';
$string['popuplaunched'] = 'تم إطلاق حزمة سكورم هذه في نافذة منبثقة ، إذا كنت قد انتهيت من عرض هذا المورد ، انقر هنا للعودة إلى صفحة المادة';
$string['popupmenu'] = 'في القائمة المنسدلة';
$string['popupopen'] = 'افتح الحزمة في نافذة جديدة';
$string['popupsblocked'] = 'يبدو أن النوافذ المنبثقة محظورة ، مما يؤدي إلى إيقاف تشغيل حزمة سكورم.
يرجى التحقق من إعدادات المتصفح الخاص بك قبل المحاولة مرة أخرى.';
$string['position_error'] = 'الـ {$a->tag} لا يمكن أن يكون علامة فرعية من  {$a->parent}';
$string['preferencespage'] = 'تفضيلات لهذه الصفحة فقط';
$string['preferencesuser'] = 'تفضيلات لهذا التقرير';
$string['prev'] = 'السابق';
$string['privacy:metadata:aicc:data'] = 'البيانات الشخصية التي تم تمريرها من خلال النظام الفرعي AICC/SCORM';
$string['privacy:metadata:aicc:externalpurpose'] = 'يرسل هذا الملحق البيانات خارجياً باستعمال AICC HACP';
$string['privacy:metadata:aicc_session:lessonstatus'] = 'حالة الدرس المطلوب تتبعها';
$string['privacy:metadata:aicc_session:scormmode'] = 'وضع العنصر المراد تتبعه';
$string['privacy:metadata:aicc_session:scormstatus'] = 'حالة العنصر المراد تتبعه';
$string['privacy:metadata:aicc_session:sessiontime'] = 'وقت الجلسة لتتبعها';
$string['privacy:metadata:aicc_session:timecreated'] = 'الوقت الذي تم فيه إنشاء العنصر المتعقب';
$string['privacy:metadata:attempt'] = 'رقم المحاولة';
$string['privacy:metadata:scoes_track:element'] = 'اسم العنصر المراد تتبعه';
$string['privacy:metadata:scoes_track:value'] = 'قيمة العنصر المحدد';
$string['privacy:metadata:scorm_aicc_session'] = 'معلومات الدورة من AICC HACP';
$string['privacy:metadata:scorm_scoes_track'] = 'البيانات المتعقبة في كائنات SCO التي تنتمي إلى النشاط';
$string['privacy:metadata:timemodified'] = 'وقت آخر مرة تم فيها تعديل العنصر المتعقب';
$string['privacy:metadata:userid'] = 'معرف المستخدم الذي قام بالوصول إلى نشاط سكورم';
$string['protectpackagedownloads'] = 'حماية الحزمة من تنزيلات';
$string['protectpackagedownloads_desc'] = 'في حالة التمكين، لا يمكن تنزيل حزمة سكورم إلا إذا كان لدى المستخدم الإمكانية course:manageactivities. في حالة التعطيل، يمكن دائماً تنزيل حزم سكورم (عن طريق الجوال أو الوسائل الأخرى).';
$string['raw'] = 'الدرجة الأولية';
$string['regular'] = 'بيان عادي';
$string['report'] = 'تقرير';
$string['reportcountallattempts'] = 'محاولات لـ  {$a->nbattempts}  المستخدمين، من {$a->nbusers}  نتائج {$a->nbresults}';
$string['reportcountattempts'] = '{$a->nbresults} نتائج ({$a->nbusers}  مستخدمين)';
$string['reports'] = 'التقارير';
$string['repositorynotsupported'] = 'لا يدعم مستودع التخزين هذا الارتباط مباشرة بملف imsmanifest.xml.';
$string['response'] = 'الإستجابة';
$string['result'] = 'نتيجة';
$string['results'] = 'نتائج';
$string['review'] = 'مراجعة';
$string['reviewmode'] = 'وضع المراجعة';
$string['rightanswer'] = 'الإجابة الصحيحة';
$string['scoes'] = 'كائنات تعلّم';
$string['score'] = 'الدرجة';
$string['scorm:addinstance'] = 'إضافة حزمة سكورم جديدة';
$string['scormclose'] = 'متاح حتى';
$string['scormcourse'] = 'منهج دراسي تعليمي';
$string['scorm:deleteownresponses'] = 'حذف محاولاته';
$string['scorm:deleteresponses'] = 'حذف محاولات سكورم';
$string['scormloggingoff'] = 'تسجيل خروج API';
$string['scormloggingon'] = 'تسجيل دخول عبر API';
$string['scormopen'] = 'متاح من';
$string['scormresponsedeleted'] = 'تم حذف محاولات مستخدم';
$string['scorm:savetrack'] = 'حفظ المسارات';
$string['scorm:skipview'] = 'تخطي النظرة العامة';
$string['scormstandard'] = 'وضع معايير سكورم';
$string['scormstandarddesc'] = 'عند تعطيله ، يسمح Moodle لحزم سكورم 1.2 بتخزين أكثر مما تسمح به المواصفات ، ويستخدم إعدادات تنسيق الاسم الكامل لـ Moodle عند تمرير اسم المستخدم إلى حزمة سكورم .';
$string['scormtype'] = 'نوع';
$string['scormtype_help'] = 'يحدد هذا الإعداد كيف يتم تضمين حزمة سكورم في هذه المادة، هناك ما يصل إلى 4 خيارات:
* تحميل الحزمة - تمكين حزمة  سكورم ليتم اختيارها عن طريق منتقي الملف
* بيان  سكورم الخارجي - تمكين عنوان URL imsmanifest.xml التي لا بد من تحديدها. ملاحظة: إذا كان عنوان رابط URL يحتوي على اسم مجال مختلف عن موقع الويب الخاص بك، فـ "تحميل الحزمة" هو الخيار الأفضل، و إلا لن يتم حفظ الدرجات.
* الحزمة التي تم تحميلها - بتمكين العنوان URL و المجموعة المحددة. سيتم فك ضغط الحزمة و حفظها محليا، و تحديثها عند تحديث حزمة  سكورم الخارجية.
* محلي، مستودع المحتوى IMS - بتمكين المجموعة التي سيتم اختيارها من داخل مستودع IMS .
* الخارجية AICC URL - هذا العنوان هو عنوان URL لإطلاق نشاط واحد. و سيتم تشييد حزمة زائفة حول هذا.';
$string['scorm:viewreport'] = 'معاينة التقارير';
$string['scorm:viewscores'] = 'معاينة الدرجات';
$string['scrollbars'] = 'إسمح للنافذة بالتمرير';
$string['search:activity'] = 'حزمة سكورم - معلومات النشاط';
$string['selectall'] = 'إختر الكل';
$string['selectnone'] = 'إلغاء التحديد';
$string['show'] = 'اظهر';
$string['sided'] = 'إلى الجانب';
$string['skipview'] = 'الطالب يتخطى هيكل محتوى الصفحة';
$string['skipviewdesc'] = 'هذا التفضيل يحدد الافتراضي حين يتخطى هيكل محتوى الصفحة';
$string['skipview_help'] = 'يحدد هذا الإعداد ما إذا كان هيكل محتوى الصفحة دائما يجب أن يتم تخطيه (لا يظهر). إذا كائن يحتوي على حزمة تعليمية واحدة فقط، فيمكن دائما أن يتم تخطي هيكل محتوى الصفحة.';
$string['slashargs'] = 'تحذير: تم تعطيل الشرْطة المائلة للوسيطات على هذا الموقع فالكائنات قد لا تعمل كما هو متوقع!';
$string['stagesize'] = 'حجم المرحلة';
$string['stagesize_help'] = 'تحديد إعدادين هما الإطار / النوافذ و الارتفاع / عرض لكائنات التعلم.';
$string['started'] = 'بدأ في';
$string['status'] = 'الوضع';
$string['statusbar'] = 'إظهار شريط الحالة';
$string['student_response'] = 'اجابة';
$string['subplugintype_scormreport'] = 'التقرير';
$string['subplugintype_scormreport_plural'] = 'التقارير';
$string['suspended'] = 'معلّق';
$string['syntax'] = 'خطأ في تركيب الجملة';
$string['tag_error'] = 'وسم مجهول ({$a->tag}) في هذا المحتوى : {$a->value}';
$string['time'] = 'وقت';
$string['title'] = 'عنوان';
$string['toc'] = 'قائمة المحتويات';
$string['toolbar'] = 'اظهر شريط الأدوات';
$string['too_many_attributes'] = 'الوسم {$a->tag} له عدة مظاهر';
$string['too_many_children'] = 'الوسم {$a->tag} له عدة فروع صغيرة';
$string['totaltime'] = 'الوقت';
$string['trackcorrectcount'] = 'العد الصحيح';
$string['trackcorrectcount_help'] = 'عدد النتائج الصحيحة للسؤال';
$string['trackid'] = 'الرقم';
$string['trackid_help'] = 'هذا هو المعرف الذي حددته حزمة  سكورم لهذا السؤال ، و لا تسمح مواصفات  سكورم بتوفير نص السؤال الكامل.';
$string['trackingloose'] = 'تحذير: سيتم فقدان بيانات التتبع لهذه الحزمة !';
$string['tracklatency'] = 'وقت الإستجابة';
$string['tracklatency_help'] = 'الوقت المنقضي بين وقت إتاحة السؤال للطالب للرد و وقت الاستجابة الأولى.';
$string['trackpattern'] = 'نمط';
$string['trackpattern_help'] = 'هذا هو ما سيكون الرد الصحيح على هذا السؤال ، فإنه لا يظهر استجابة المتعلمين.';
$string['trackresponse'] = 'الإستجابة';
$string['trackresponse_help'] = 'هذا هو الرد الذي قدمه المتعلم على هذا السؤال';
$string['trackresult'] = 'النتيجة';
$string['trackresult_help'] = 'يوضح ما إذا كان المتعلم قد أدخل استجابة صحيحة.';
$string['trackscoremax'] = 'الدرجة القصوى';
$string['trackscoremax_help'] = 'القيمة القصوى التي يمكن تعيينها للدرجة الأولية';
$string['trackscoremin'] = 'النتيجة الدنيا';
$string['trackscoremin_help'] = 'القيمة الدنيا التي يمكن تعيينها للدرجة الأولية';
$string['trackscoreraw'] = 'الدرجة الأولية';
$string['trackscoreraw_help'] = 'الرقم الذي يعكس أداء المتعلم بالنسبة للنطاق المحدد بالقيمة الدنيا و القيمة القصوى';
$string['tracksuspenddata'] = 'علّق البيانات';
$string['tracksuspenddata_help'] = 'وفّر مساحة لتخزين و استرجاع البيانات بين جلسات المتعلم';
$string['tracktime'] = 'الوقت';
$string['tracktime_help'] = 'الوقت الذي بدأت فيه المحاولة';
$string['tracktype'] = 'النوع';
$string['tracktype_help'] = 'نوع السؤال ، على سبيل المثال "الاختيار" أو "إجابة قصيرة".';
$string['trackweight'] = 'الوزن';
$string['trackweight_help'] = 'الوزن المخصص للسؤال عند حساب النتيجة.';
$string['type'] = 'نوع';
$string['typeaiccurl'] = 'رابط AICC خارجي';
$string['typeexternal'] = 'بيان سكورم الخارجي';
$string['typelocal'] = 'الحزمة المحمّلة';
$string['typelocalsync'] = 'الحزمة المنزلّة';
$string['undercontent'] = 'تحت المحتوى';
$string['unziperror'] = 'حدث خطأ أثناء فك الحزمة';
$string['updatefreq'] = 'التحديث التلقائي باستمرار';
$string['updatefreqdesc'] = 'هذا التفضيل يحدد وتيرة التحديث التلقائي الافتراضي للنشاط';
$string['updatefreq_error'] = 'لا يمكن ضبط تردد التحديث التلقائي إلا عند استضافة ملف الحزمة خارجيًا';
$string['updatefreq_help'] = 'هذا يسمح للحزمة الخارجية ليتم تحميلها تلقائيا و تحديثها';
$string['validateascorm'] = 'التحقق من صحة الحزمة';
$string['validation'] = 'التحقق من الصحة النتيجة';
$string['validationtype'] = 'يعين هذا التفضيل مكتبة DOMXML لتستخدم التحقق من صحة بيان سكورم. إذا كنت لا تعرفه اترك الخيار المحدد.';
$string['value'] = 'قيمة';
$string['versionwarning'] = 'إصدار البيان هو أقدم من 1.3، محذراً في وسم {$a->tag}';
$string['viewallreports'] = 'شاهد تقارير للمحاولات {$a}';
$string['viewalluserreports'] = 'عرض تقارير عن {$a} المستخدمين';
$string['whatgrade'] = 'تقييم المحاولات';
$string['whatgradedesc'] = 'سواءً كانت علامات المحاولة الأعلى أم متوسطها (معدلها) أم الأولى أم الأخيرة المكتملة هي التي ستذهب إلى سجل العلامات في حالة السماح بمحاولات متعددة.';
$string['whatgrade_help'] = 'إذا تم السماح بالمحاولات المتعددة، هذا الإعداد يحدد ما سيتم تسجيله في سجل العلامات؛ أعلى، متوسط (معدل)، أول أو آخر محاولة يتم الانتهاء منها. خيار آخر محاولة مكتملة لا يشمل المحاولات ذات الحالة \'فشل\'.

ملاحظات بشأن التعامل مع المحاولات المتعددة:

* يتم توفير خيار لبدء محاولة جديدة من قبل مربع اختيار فوق زر الإدخال في صفحة بنية المحتوى، لذلك تأكد من أنك تتيح الوصول إلى تلك الصفحة إذا كنت ترغب في السماح بأكثر من محاولة.
* بعض حزم سكورم ذكية بشأن المحاولات الجديدة، والعديد منها ليست كذلك. ما يعنيه هذا هو أنه إذا كان المتعلم يعاود الدخول إلى محاولة موجودة سابقاً، فإذا لم يكن لدى محتوى سكورم منطق داخلي لمنع الكتابة فوق المحاولات السابقة، فسيكون ممكناً الكتابة عليها، حتى لو كانت المحاولة \'مكتملة\' أو \'ناجحة\'.
* إعدادات "فرض الإكمال"، "فرض محاولة جديدة" و "أقفل بعد المحاولة الأخيرة" تقدم أيضاً مزيداً من الإدارة للمحاولات المتعددة.';
$string['width'] = 'العرض';
$string['window'] = 'النافذة';
$string['youmustselectastatus'] = 'يجب عليك تحديد حالة الطلب';
