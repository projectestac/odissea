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
 * Strings for component 'plugin', language 'ar', branch 'MOODLE_34_STABLE'
 *
 * @package   plugin
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'أفعال';
$string['availability'] = 'حالة التوفر';
$string['cancelinstallall'] = 'إلغاء عمليات التثبيت الجديدة ({$a})';
$string['cancelinstallhead'] = 'إلغاء تثبيت المكونات الإضافية';
$string['cancelinstallinfo'] = 'لم يتم تثبيت المكونات الإضافية التالية بشكل كامل بعد، لذا إلغاء التثبيت ممكن. للقيام بذلك ، يجب إزالة ملف المكون الإضافي من الخادم الآن. يجب عليك التأكد من أن هذا هو ما تريد فعله وذلك لتجنب فقدان بيانات بطريق الخطأ (مثل التعديلات البرمجية التي أضفتها).';
$string['cancelinstallinfodir'] = 'مجلد مطلوب حذفه: {$a}';
$string['cancelinstallone'] = 'إلغاء هذا التثبيت';
$string['cancelupgradeall'] = 'إلغاء الترقيات ({$a})';
$string['cancelupgradehead'] = 'العودة إلى الإصدار السابق من المكونات الإضافية';
$string['cancelupgradeone'] = 'إلغاء هذه الترقية';
$string['checkforupdates'] = 'تحقق من وجود تحديثات متوفرة';
$string['checkforupdateslast'] = 'آخر عملية تحقق تم إجراؤها بتاريخ {$a}';
$string['dependencyavailable'] = 'متاح';
$string['dependencyfails'] = 'فشل';
$string['dependencyinstall'] = 'ثبت';
$string['dependencyinstallhead'] = 'تثبيت التبعيات المفقودة';
$string['dependencyinstallmissing'] = 'تثبيت التبعيات المفقودة ({$a})';
$string['dependencymissing'] = 'مفقود';
$string['dependencyunavailable'] = 'غير متاح';
$string['dependencyupload'] = 'تحميل';
$string['dependencyuploadmissing'] = 'تحميل ملفات مضغوطة ZIP';
$string['detectedmisplacedplugin'] = 'المكون الإضافي "{$a->component}" مثبت في موقع غير صحيح "{$a->current}" ، والموقع المتوقع هو "{$a->expected}"';
$string['displayname'] = 'اسم المكون الإضافي';
$string['err_response_curl'] = 'يتعذر جلب بيانات التحديثات المتاحة - خطأ cURL غير متوقع.';
$string['err_response_format_version'] = 'إصدار غير متوقع لشكل رد الفعل. يرجى محاولة إعادة التأكد من وجود تحديثات متاحة.';
$string['err_response_http_code'] = 'يتعذر جلب بيانات التحديثات المتاحة - رمز استجابة HTTP غير متوقع.';
$string['filterall'] = 'إظهار الكل';
$string['filtercontribonly'] = 'أظهار  المكونات الإضافية فقط';
$string['filterupdatesonly'] = 'إظهار القابل للتحديث فقط';
$string['isenabled'] = 'مفعّل؟';
$string['misdepinfoplugin'] = 'معلومات المكون الإضافي';
$string['misdepinfoversion'] = 'معلومات الإصدار';
$string['misdepsavail'] = 'التبعيات المفقودة المتاحة';
$string['misdepsunavail'] = 'التبعيات المفقودة المفقودة';
$string['misdepsunavaillist'] = 'لم يتم العثور على إصدار لاستيفاء متطلبات التبعية: {$a}.';
$string['misdepsunknownlist'] = 'ليس في دليل المكونات الإضافية: <strong>{$a}</strong>.';
$string['moodleversion'] = 'Moodle {$a}';
$string['noneinstalled'] = 'لم يتم تثبيت أي مكونات إضافية من هذا النوع';
$string['notdownloadable'] = 'لا يمكن تحميل الحزمة';
$string['notdownloadable_help'] = 'لا يمكن تنزيل حزمة ZIP مع التحديث تلقائيًا. يرجى الرجوع إلى صفحة الوثائق لمزيد من المساعدة';
$string['notes'] = 'ملاحظات';
$string['notwritable'] = 'ملفات المكون الإضافي غير قابلة للكتابة عليها';
$string['notwritable_help'] = 'ملفات المكون الإضافي غير قابلة للكتابة عليها بواسطة خادم الويب. يجب أن يكون لعملية خادم الويب حق الوصول للكتابة إلى مجلد المكوّن الإضافي وجميع محتوياته. اتاحة الكتابة على مجلد الجذر للمكون الإضافي المعني قد تكون ضرورية أيضًا.';
$string['otherplugin'] = '{$a->component}';
$string['otherpluginversion'] = '{$a->component} ({$a->version})';
$string['overviewall'] = 'كل المكونات الإضافية';
$string['overviewext'] = 'مكونات إضافية مضافة';
$string['overviewupdatable'] = 'تحديثات متاحة';
$string['packagesdebug'] = 'استخراج الأخطاء مفعّل';
$string['packagesdownloading'] = 'جارٍ تنزيل {$a}';
$string['packagesextracting'] = 'استخراج {$a}';
$string['packagesvalidating'] = 'جارٍ التحقق من صحة {$a}';
$string['packagesvalidatingfailed'] = 'تم إحباط التثبيت بسبب فشل التحقق من التحقق من الصحة';
$string['packagesvalidatingok'] = 'نجاح التحقق من الصحة، يمكن متابعة التثبيت';
$string['plugincheckall'] = 'كل المكونات الإضافية';
$string['plugincheckattention'] = 'المكونات الإضافية التي تتطلب الاهتمام';
$string['pluginchecknone'] = 'لا يوجد مكونات إضافية تتطلب انتباهك حاليا.';
$string['pluginchecknotice'] = 'هذه الصفحة تعرض المكونات الإضافية التي قد تتطلب انتباهك أثناء الترقية، مثل مكونات إضافية جديدة سيتم تثبيتها، مكونات إضافية سيتم ترقيتها، ومكونات إضافية مفقودة إلخ. يتم عرض مكونات إضافية جديدة إذا كان هناك تحديث متاح لها. ينصح بأن تتحقق من توفر أحدث الإصدارات للمكوّنات الإضافية وتحديث شفرة المصدر الخاصة بها قبل متابعة الترقية لنسخة Moodle هذا.';
$string['plugindisable'] = 'عطل';
$string['plugindisabled'] = 'تم تعطيله';
$string['pluginenable'] = 'مكن - فعل';
$string['pluginenabled'] = 'ممكن - مفعل';
$string['release'] = 'إطلاق';
$string['requiredby'] = 'مطلوب لِ: {$a}';
$string['requires'] = 'يتطلب';
$string['rootdir'] = 'دليل';
$string['settings'] = 'الإعدادات';
$string['source'] = 'مصدر';
$string['sourceext'] = 'إضافي';
$string['sourcestd'] = 'معياري';
$string['status'] = 'الحالة';
$string['status_delete'] = 'للحذف';
$string['status_downgrade'] = 'تم تثبيت إصدار أحدث';
$string['status_missing'] = 'غير موجود على القرص';
$string['status_new'] = 'سيتم تثبيته';
$string['status_nodb'] = 'لا يوجد قاعدة بيانات';
$string['status_upgrade'] = 'سيتم ترقيته';
$string['status_uptodate'] = 'مركب';
$string['supportedconversions'] = 'تحويلات المستندات المدعومة';
$string['supportedmoodleversions'] = 'إصدارات Moodle المدعومة';
$string['systemname'] = 'محدث';
$string['type_antivirus'] = 'مكون أضافي لمكافحة الفيروسات';
$string['type_antivirus_plural'] = 'مكونات ‘ضافية لمكافحة الفيروسات';
$string['type_auth'] = 'طريقة إثبات الأصالة';
$string['type_auth_plural'] = 'إضافات الصلاحيات';
$string['type_availability'] = 'شرط التوفر';
$string['type_availability_plural'] = 'شروط التوفر';
$string['type_block'] = 'كتلة';
$string['type_block_plural'] = 'كتل';
$string['type_cachelock'] = 'معالج قفل ذاكرة التخزين المؤقت';
$string['type_cachelock_plural'] = 'معالجات قفل ذاكرة التخزين المؤقت';
$string['type_cachestore'] = 'مخزن ذاكرة التخزين المؤقت';
$string['type_cachestore_plural'] = 'مخازن ذاكرة التخزين المؤقت';
$string['type_calendartype'] = 'نوع التقويم';
$string['type_calendartype_plural'] = 'أنواع التقويم';
$string['type_coursereport'] = 'تقرير المقرر';
$string['type_coursereport_plural'] = 'تقارير المقرر';
$string['type_dataformat'] = 'تصميم البيانات';
$string['type_dataformat_plural'] = 'تصاميم البيانات';
$string['type_editor'] = 'محرر';
$string['type_editor_plural'] = 'محررات';
$string['type_enrol'] = 'اسلوب إنضمام';
$string['type_enrol_plural'] = 'اساليب إنضمام';
$string['type_fileconverter'] = 'محول المستندات';
$string['type_fileconvertermanage'] = 'إدارة محولات المستندات';
$string['type_fileconverter_plural'] = 'محولات المستندات';
$string['type_filter'] = 'فلتر';
$string['type_filter_plural'] = 'مرشحات النص';
$string['type_format'] = 'تنسيق مقرر دراسي';
$string['type_format_plural'] = 'تنسيق المقرر الدراسي';
$string['type_gradeexport'] = 'اسلوب تصدير الدرجات';
$string['type_gradeexport_plural'] = 'اساليب تصدير الدرجات';
$string['type_gradeimport'] = 'اسلوب إستيراد الدرجات';
$string['type_gradeimport_plural'] = 'اساليب إستيراد الدرجات';
$string['type_gradereport'] = 'تقرير سجل الدرجات';
$string['type_gradereport_plural'] = 'تقارير سجل الدرجات';
$string['type_gradingform'] = 'طريقة متقدمة لتوزيع الدرجات';
$string['type_gradingform_plural'] = 'طرق متقدمة لتوزيع الدرجات';
$string['type_local'] = 'مكون إضافي محلي';
$string['type_local_plural'] = 'مكونات إضافية محلية';
$string['type_media'] = 'مشغل وسائط';
$string['type_media_plural'] = 'مشغلات وسائط';
$string['type_message'] = 'نتاج المراسلة';
$string['type_message_plural'] = 'مخرجات المراسلة';
$string['type_mlbackend'] = 'خلفية تعلم الآلة';
$string['type_mlbackend_plural'] = 'خلفيات تعلم الآلة';
$string['type_mnetservice'] = 'خدمة MNet';
$string['type_mnetservice_plural'] = 'خدمات MNet';
$string['type_mod'] = 'وحدة نشاط';
$string['type_mod_plural'] = 'وحدات النشاط';
$string['type_plagiarism'] = 'منع الانتحال';
$string['type_plagiarism_plural'] = 'مكونات إضافية لمنع الانتحال';
$string['type_portfolio'] = 'محفظة';
$string['type_portfolio_plural'] = 'محافظ';
$string['type_profilefield'] = 'نوع حقل الملف الشخصي';
$string['type_profilefield_plural'] = 'أنواع حقول الملف الشخصي';
$string['type_qbehaviour'] = 'سلوك السؤال';
$string['type_qbehaviour_plural'] = 'تصرف الأسئلة';
$string['type_qformat'] = 'تنسيق إستيراد/تصدير السؤال';
$string['type_qformat_plural'] = 'تنسيقات إستيراد/تصدير السؤال';
$string['type_qtype'] = 'نوع السؤال';
$string['type_qtype_plural'] = 'أنواع الأسئلة';
$string['type_report'] = 'تقرير الموقع';
$string['type_report_plural'] = 'تقارير الموقع';
$string['type_repository'] = 'مخزن';
$string['type_repository_plural'] = 'مستودعات';
$string['type_search'] = 'محرك بحث';
$string['type_search_plural'] = 'محركات بحث';
$string['type_theme'] = 'الشكل';
$string['type_theme_plural'] = 'الاشكال';
$string['type_tool'] = 'أداة المشرف';
$string['type_tool_plural'] = 'أدوات الإدارة';
$string['type_webservice'] = 'بروتوكول خدمات الويب';
$string['type_webservice_plural'] = 'بروتوكولات خدمات الويب';
$string['uninstall'] = 'إزالة التثبيت';
$string['uninstallconfirm'] = 'أنت على وشك إلغاء تثبيت المكوّن الإضافي <em>{$a->name}</em>. سيؤدي هذا إلى حذف كل شيء في قاعدة البيانات المرتبطة بهذا المكوِّن الإضافي ، بما في ذلك التكوين ، وسجلات السجل ، وملفات المستخدم التي يديرها المكون الإضافي وما إلى ذلك. ولا توجد طريقة للخلف ولا ينشئ Moodle نفسه أي نسخة احتياطية للاسترداد. هل أنت متأكد أنك تريد المتابعة؟';
$string['uninstalldelete'] = 'أنت على وشك إلغاء تثبيت المكوّن الإضافي <em>{$a->name}</em>. سيؤدي هذا الإلغاء إلى حذف، من قاعدة البيانات، كل شيء مرتبط بهذا المكوِّن الإضافي، بما في ذلك التكوين، وجداول السجل، وملفات المستخدم المتابعة من قبل هذا المكون الإضافي وما إلى ذلك. ولن يكون هناك سبيل للرجوع للخلف وMoodle نفسه لا ينشئ أي نسخة استرداد احتياطية. هل أنت متأكد أنك تريد الاستمرار؟';
$string['uninstalldeleteconfirm'] = 'تم حذف جميع البيانات المرتبطة بالمكون الإضافي <em>{$a->name}</em> من قاعدة البيانات. لمنع هذا المكون الإضافي من إعادة تثبيت نفسه، يجب إزالة مجلده <em>{$a->rootdir}</em> من الخادم. هل تريد إزالة مجلد هذا المكوّن الإضافي الآن؟';
$string['uninstalldeleteconfirmexternal'] = 'يبدو أن الإصدار الحالي من المكوِّن الإضافي تم الحصول عليه من خلال نظام إدارة شفرة المصدر ({$a}). إذا أردت إزالة مجلد هذا المكون الإضافي، فقد تفقد تعديلات محلية هامة من التعليمات البرمجية. الرجاء التأكد من أنك بالتأكيد تريد إزالة مجلد المكوِّن الإضافي قبل الاستمرار.';
$string['uninstallextraconfirmblock'] = 'هناك عدة نسخ {$a->instances} من هذه المجموعة.';
$string['uninstallextraconfirmenrol'] = 'يوجد {$a->enrolments} لتسجيلات المستخدمين.';
$string['uninstallextraconfirmmod'] = 'يوجد  {$a->instances} نسخ مطابقة لهذا النموذج في {$a->courses} مساقات';
$string['uninstalling'] = 'جاري إلغاء تثبيت {$a->name}';
$string['updateavailable'] = 'هناك إصدار جديد {$a} متاح!';
$string['updateavailable_moreinfo'] = 'مزيد من المعلومات...';
$string['updateavailable_release'] = 'إطلاق {$a}';
$string['updatepluginconfirm'] = 'تأكيد تحديث المكون الإضافي';
$string['updatepluginconfirmexternal'] = 'يبدو أن الإصدار الحالي من المكوِّن الإضافي تم الحصول عليه من خلال نظام إدارة شفرة المصدر ({$a}). إذا قمت بتثبيت هذا التحديث، فلن تتمكن بعد ذلك من الحصول على تحديثات المكون الإضافي من مورد نظام إدارة التعليمات البرمجية. الرجاء التأكد من أنك بالتأكيد تريد تحديث المكون الإضافي قبل المتابعة.';
$string['updatepluginconfirminfo'] = 'ت على وشك تثبيت إصدار جديد من المكوّن الإضافي <strong>{$a->name}</strong>. سيتم تنزيل حزمة zip مع إصدار {$a->version} من المكوّن الإضافي من <a href="{$a->url}">{$a->url}</a> وسيتم استخراجها إلى تثبيت Moodle حتى تتمكن من ترقية التثبيت الخاص بك.';
$string['updatepluginconfirmwarning'] = 'يرجى ملاحظة أن Moodle لن يقوم تلقائيًا بعمل نسخة احتياطية من قاعدة البيانات الخاصة بك قبل الترقية. نوصي بشدة أن تنشئ لقطات احتياطية كاملة الآن، وذلك للتعامل مع الحالة النادرة التي قد تحوي الشفرة الجديدة أخطاء تجعل موقعك غير متوفر أو ربما تفسد قاعدة البيانات الخاصة بك. المضي قدما على مسؤوليتك الخاصة.';
$string['validationmsg_componentmatch'] = 'الاسم الكامل للمكون';
$string['validationmsg_componentmismatchname'] = 'عدم تطابق اسم المكون الإضافي';
$string['validationmsg_componentmismatchname_help'] = 'د تحتوي بعض حزم ZIP ، مثل تلك التي تم إنشاؤها بواسطة Github ، على اسم دليل جذر غير صحيح. يلزمك إصلاح اسم الدليل الجذر لمطابقة اسم المكون الإضافي المُعلن.';
$string['validationmsg_componentmismatchname_info'] = 'يعلن المكون الإضافي أن اسمه هو \'{$a}\' ولكنه لا يتطابق مع اسم الدليل الجذر.';
$string['validationmsg_componentmismatchtype'] = 'عدم تطابق نوع المكون الإضافي';
$string['validationmsg_componentmismatchtype_info'] = 'النوع المتوقع "{$a->expected}”، لكن المكون الإضافي يعلن أن نوعه هو {$a->found}".';
$string['validationmsg_filenotexists'] = 'الملف المستخلص غير موجود';
$string['validationmsg_filesnumber'] = 'لم يتم العثور على ملفات كافية في الحزمة';
$string['validationmsg_filestatus'] = 'غير قادر على استخلاص جميع الملفات';
$string['validationmsg_filestatus_info'] = 'أدت محاولة استخراج الملف {$a->file} إلى حدوث خطأ \'{$a->status}\'.';
$string['validationmsg_foundlangfile'] = 'تم العثور على ملف اللغة';
$string['validationmsglevel_debug'] = 'استخرج الأخطأ';
$string['validationmsglevel_error'] = 'خطأ';
$string['validationmsglevel_info'] = 'حسنا';
$string['validationmsglevel_warning'] = 'تحذير';
$string['validationmsg_maturity'] = 'مستوى النضج المعلن';
$string['validationmsg_maturity_help'] = 'يمكن المكوِّن الإضافي أن يعلن عن مستوى نضجه. إذا اعتبر المشرف أن المكوِّن الإضافي مستقر ، سيقرأ مستوى النضج المعلن MATURITY_STABLE. يجب اعتبار جميع مستويات النضج الأخرى (مثل ألفا أو بيتا) غير مستقرة ويتم رفع التحذير.';
$string['validationmsg_missingcomponent'] = 'المكوِّن الإضافي لا يعلن اسم المكون الخاص به';
$string['validationmsg_missingcomponent_help'] = 'يجب أن توفر جميع المكونات الإضافية اسم مكونها الكامل عبر تعريف `$plugin->component` في ملف version.php.';
$string['validationmsg_missingexpectedlangenfile'] = 'عدم تطابق اسم ملف اللغة الإنجليزية';
$string['validationmsg_missingexpectedlangenfile_info'] = '{$a}يفتقد نوع المكون الإضافي المحدد ملف اللغة الإنجليزية المتوقع {$ a}.';
$string['validationmsg_missinglangenfile'] = 'لم يتم العثور على ملف باللغة الإنجليزية';
$string['validationmsg_missinglangenfolder'] = 'مجلد اللغة الإنجليزية مفقود';
$string['validationmsg_missingversion'] = 'المكون المساعد لا يعلن إصداره';
$string['validationmsg_missingversionphp'] = 'ملف version.php غير موجود';
$string['validationmsg_multiplelangenfiles'] = 'تم العثور على ملفات متعددة للغة الإنجليزية';
$string['validationmsg_onedir'] = 'بنية غير صالحة لحزمة ZIP.';
$string['validationmsg_onedir_help'] = 'يجب أن تحتوي حزمة ZIP على دليل جذر واحد يحتفظ برمز المكون الإضافي. يجب أن يتطابق اسم هذا الدليل الجذر مع اسم المكون الإضافي.';
$string['validationmsg_pathwritable'] = 'التحقق من اتاحة الكتابة';
$string['validationmsg_pluginversion'] = 'إصدارة المكون الإضافي';
$string['validationmsg_release'] = 'إطلاق مكون إضافي';
$string['validationmsg_requiresmoodle'] = 'طلب إصدارة Moodle';
$string['validationmsg_rootdir'] = 'اسم المكون الإضافي المراد تثبيته';
$string['validationmsg_rootdir_help'] = 'يمثل اسم الدليل الجذر في حزمة ZIP اسم المكون الإضافي المراد تثبيته. إذا كان الاسم غير صحيح ، فقد ترغب في إعادة تسمية الدليل الجذر في ملف ZIP قبل تثبيت المكون الإضافي.';
$string['validationmsg_rootdirinvalid'] = 'اسم المكون الإضافي غير صالح';
$string['validationmsg_rootdirinvalid_help'] = 'نتهك اسم الدليل الجذر في حزمة ZIP متطلبات البنية الرسمية. قد تحتوي بعض حزم ZIP ، مثل تلك التي تم إنشاؤها بواسطة Github ، على اسم دليل جذر غير صحيح. يلزمك إصلاح اسم الدليل الجذر لمطابقة اسم المكون الإضافي.';
$string['validationmsg_targetexists'] = 'الموقع المراد موجود بالفعل وستتم إزالته';
$string['validationmsg_targetexists_help'] = 'يوجد بالفعل دليل المكون الإضافي وسيتم استبداله بمحتويات حزمة المكونات الإضافية.';
$string['validationmsg_targetnotdir'] = 'الموقع المراد يشغله ملف';
$string['validationmsg_unknowntype'] = 'نوع مجهول للمكون الإضافي';
$string['validationmsg_versionphpsyntax'] = 'تم اكتشاف صيغة غير مدعومة في ملف version.php';
$string['version'] = 'إصدار';
$string['versiondb'] = 'إصدار حالي';
$string['versiondisk'] = 'إصدار جديد';
