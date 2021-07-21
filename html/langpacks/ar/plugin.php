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
 * Strings for component 'plugin', language 'ar', version '3.11'.
 *
 * @package     plugin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'الإجراءات';
$string['availability'] = 'حالة التوفر';
$string['cancelinstallall'] = 'إلغاء عمليات التنصيب الجديدة ({$a})';
$string['cancelinstallhead'] = 'يجري إلغاء تنصيب الملاحق';
$string['cancelinstallinfo'] = 'لم يتم تثبيت الملاحق الآتية بشكل كامل بعد، لذلك يمكن إلغاء تنصيبها. للقيام بذلك، يجب إزالة مجلد الملحق من المخدم الآن. يجب عليك التأكد من أن هذا هو ما تريده فعلاً لتجنب فقدان البيانات بطريق الخطأ (مثل التعديلات البرمجية التي أضفتها).';
$string['cancelinstallinfodir'] = 'مجلد مطلوب حذفه: {$a}';
$string['cancelinstallone'] = 'إلغاء هذا التنصيب';
$string['cancelupgradeall'] = 'إلغاء الترقيات ({$a})';
$string['cancelupgradehead'] = 'استعادة الإصدار السابق من الملاحق';
$string['cancelupgradeone'] = 'إلغاء هذه الترقية';
$string['checkforupdates'] = 'تحقق من وجود تحديثات متوفرة';
$string['checkforupdateslast'] = 'آخر عملية تحقق تم إجراؤها بتاريخ {$a}';
$string['dependencyavailable'] = 'متاح';
$string['dependencyfails'] = 'فشل';
$string['dependencyinstall'] = 'تنصيب';
$string['dependencyinstallhead'] = 'يجري تنصيب التبِعات المفقودة';
$string['dependencyinstallmissing'] = 'تنصيب التبِعات المفقودة ({$a})';
$string['dependencymissing'] = 'مفقود';
$string['dependencyunavailable'] = 'غير متاح';
$string['dependencyupload'] = 'تحميل';
$string['dependencyuploadmissing'] = 'تحميل ملفات مضغوطة ZIP';
$string['detectedmisplacedplugin'] = 'الملحق "{$a->component}" منصب في موقع غير صحيح "{$a->current}"، والموقع المتوقع هو "{$a->expected}"';
$string['displayname'] = 'اسم الملحق';
$string['err_response_curl'] = 'يتعذر جلب بيانات التحديثات المتاحة - خطأ cURL غير متوقع.';
$string['err_response_format_version'] = 'إصدار غير متوقع لشكل رد الفعل. يرجى محاولة إعادة التأكد من وجود تحديثات متاحة.';
$string['err_response_http_code'] = 'يتعذر جلب بيانات التحديثات المتاحة - رمز استجابة HTTP غير متوقع.';
$string['filterall'] = 'إظهار الكل';
$string['filtercontribonly'] = 'إظهار الملاحق الإضافية فقط';
$string['filterupdatesonly'] = 'إظهار القابل للتحديث فقط';
$string['incompatibleversion'] = 'إصدار مودل غير متوافق: {$a}';
$string['isenabled'] = 'مفعّل؟';
$string['misdepinfoplugin'] = 'معلومات الملحق';
$string['misdepinfoversion'] = 'معلومات الإصدار';
$string['misdepsavail'] = 'التبِعات المفقودة المتاحة';
$string['misdepsunavail'] = 'التبِعات المفقودة غير المتاحة';
$string['misdepsunavaillist'] = 'لم يتم العثور على إصدار لاستيفاء متطلبات التبِعَة: {$a}.';
$string['misdepsunknownlist'] = 'ليس في دليل المكونات الإضافية: <strong>{$a}</strong>.';
$string['moodlebranch'] = 'مودل {$a->min} - {$a->max}';
$string['moodleversion'] = 'Moodle {$a}';
$string['noneinstalled'] = 'لم يتم تنصيب أي ملاحق من هذا النوع';
$string['notdownloadable'] = 'لا يمكن تحميل الحزمة';
$string['notdownloadable_help'] = 'لا يمكن تنزيل حزمة ZIP مع التحديث تلقائياً. يرجى الرجوع إلى صفحة التوثيقات لمزيد من المساعدة.';
$string['notes'] = 'الملاحظات';
$string['notsupported'] = 'الملحق قد لا يكون متوافقاً مع مودل بإصداره {$a}';
$string['notwritable'] = 'ملفات الملحق غير قابلة للكتابة عليها';
$string['notwritable_help'] = 'ملفات الملحق غير قابلة للكتابة عليها من قبل مخدم الويب. ينبغي أن يكون لعملية مخدم الويب حق الوصول للكتابة في مجلد الملحق وكل محتوياته. إتاحة الكتابة في مجلد الجذر للملحق المعني قد تكون ضرورية أيضاً.';
$string['otherplugin'] = '{$a->component}';
$string['otherpluginversion'] = '{$a->component} ({$a->version})';
$string['overviewall'] = 'كل الملاحق';
$string['overviewext'] = 'الملاحق المضافة';
$string['overviewupdatable'] = 'تحديثات متاحة';
$string['packagesdebug'] = 'تخريج تصحيح الأخطاء مُمَكَّن';
$string['packagesdownloading'] = 'جارٍ تنزيل {$a}';
$string['packagesextracting'] = 'استخراج {$a}';
$string['packagesvalidating'] = 'جارٍ التحقق من صحة {$a}';
$string['packagesvalidatingfailed'] = 'تم إحباط التثبيت بسبب فشل التحقق من التحقق من الصحة';
$string['packagesvalidatingok'] = 'نجح التحقق من الصحة، يمكن متابعة التنصيب';
$string['plugincheckall'] = 'كل الملاحق';
$string['plugincheckattention'] = 'الملاحق التي تستدعي الاهتمام';
$string['pluginchecknone'] = 'لا يوجد مكونات إضافية تتطلب انتباهك حاليا.';
$string['pluginchecknotice'] = 'هذه الصفحة تعرض الملاحق التي قد تستدعي انتباهك في أثناء الترقية، مثل الملاحق الجديدة التي سيتم تنصيبها، الملاحق التي ستتم ترقيتها، الملاحق المفقودة... إلخ. يتم عرض ملاحق إضافية إذا كان هناك تحديث متاح لها. يُنصح بأن تتحقق من توفر أحدث الإصدارات للملاحق وتحديث نصوصها البرمجية قبل متابعة ترقية إصدار مودل هذا.';
$string['plugindisable'] = 'عطل';
$string['plugindisabled'] = 'تم تعطيله';
$string['pluginenable'] = 'مكن - فعل';
$string['pluginenabled'] = 'ممكن - مفعل';
$string['release'] = 'الإطلاق';
$string['requiredby'] = 'مطلوب من قِبَل: {$a}';
$string['requires'] = 'يتطلب';
$string['rootdir'] = 'دليل';
$string['settings'] = 'الإعدادات';
$string['source'] = 'مصدر';
$string['sourceext'] = 'إضافي';
$string['sourcestd'] = 'قياسي';
$string['status'] = 'الحالة';
$string['status_delete'] = 'للحذف';
$string['status_downgrade'] = 'تم تثبيت إصدار أحدث';
$string['status_missing'] = 'غير موجود على القرص';
$string['status_new'] = 'سيتم تثبيته';
$string['status_nodb'] = 'لا قاعدة بيانات';
$string['status_upgrade'] = 'سيتم ترقيته';
$string['status_uptodate'] = 'منصب';
$string['supportedconversions'] = 'تحويلات المستندات المدعومة';
$string['supportedmoodleversions'] = 'إصدارات مودل المدعومة';
$string['systemname'] = 'محدث';
$string['type_antivirus'] = 'ملحق مضاد الفيروسات';
$string['type_antivirus_plural'] = 'ملاحق مضادات الفيروسات';
$string['type_auth'] = 'طريقة المصادقة';
$string['type_auth_plural'] = 'طُرق المصادقة';
$string['type_availability'] = 'تقييد الإتاحة';
$string['type_availability_plural'] = 'تقييدات الإتاحة';
$string['type_block'] = 'كتلة';
$string['type_block_plural'] = 'الكتل';
$string['type_cachelock'] = 'معالج تأمين الخبء';
$string['type_cachelock_plural'] = 'معالجات تأمين الخبء';
$string['type_cachestore'] = 'مخزن المخبوءات';
$string['type_cachestore_plural'] = 'مخازن المخبوءات';
$string['type_calendartype'] = 'نوع التقويم';
$string['type_calendartype_plural'] = 'أنواع التقويم';
$string['type_contentbank'] = 'بنك المحتوى';
$string['type_contentbank_plural'] = 'ملاحق بنك المحتوى';
$string['type_coursereport'] = 'تقرير المقرر الدراسي';
$string['type_coursereport_plural'] = 'تقارير المقرر الدراسي';
$string['type_customfield'] = 'حقل مخصص';
$string['type_customfield_plural'] = 'حقول مخصصة';
$string['type_dataformat'] = 'تصميم البيانات';
$string['type_dataformat_plural'] = 'تصاميم البيانات';
$string['type_editor'] = 'محرر';
$string['type_editor_plural'] = 'محررات';
$string['type_enrol'] = 'طريقة انضمام';
$string['type_enrol_plural'] = 'طُرق الانضمام';
$string['type_fileconverter'] = 'محول المستندات';
$string['type_fileconverter_plural'] = 'محولات المستندات';
$string['type_fileconvertermanage'] = 'إدارة محولات المستندات';
$string['type_filter'] = 'مرشح النصوص';
$string['type_filter_plural'] = 'منقحات النصوص';
$string['type_format'] = 'تنسيق المقرر الدراسي';
$string['type_format_plural'] = 'تنسيقات المقرر الدراسي';
$string['type_gradeexport'] = 'طريقة تصدير العلامات';
$string['type_gradeexport_plural'] = 'طُرق تصدير العلامات';
$string['type_gradeimport'] = 'طريقة استيراد العلامات';
$string['type_gradeimport_plural'] = 'طُرق استيراد العلامات';
$string['type_gradereport'] = 'تقرير سجل التقديرات';
$string['type_gradereport_plural'] = 'تقارير سجل التقديرات';
$string['type_gradingform'] = 'طريقة متقدمة لمنح العلامات';
$string['type_gradingform_plural'] = 'طُرق متقدمة لمنح العلامات';
$string['type_h5plib'] = 'إطار عمل H5P';
$string['type_h5plib_plural'] = 'إطارات عمل H5P';
$string['type_local'] = 'ملحق محلي';
$string['type_local_plural'] = 'ملاحق محلية';
$string['type_media'] = 'مشغل وسائط';
$string['type_media_plural'] = 'مشغلات الوسائط';
$string['type_message'] = 'ملحق إشعارات';
$string['type_message_plural'] = 'ملاحق إشعارات';
$string['type_mlbackend'] = 'خلفية تعلم الآلة';
$string['type_mlbackend_plural'] = 'خلفيات تعلم الآلة';
$string['type_mnetservice'] = 'خدمة شبكة مودل';
$string['type_mnetservice_plural'] = 'خدمات شبكة مودل';
$string['type_mod'] = 'وحدة النشاط';
$string['type_mod_plural'] = 'وحدات النشاط';
$string['type_paygw'] = 'بوابة الدفع';
$string['type_paygw_plural'] = 'بوابات الدفع';
$string['type_paygwmanage'] = 'إدارة بوابات الدفع';
$string['type_plagiarism'] = 'ملحق منع الانتحال';
$string['type_plagiarism_plural'] = 'ملاحق منع الانتحال';
$string['type_portfolio'] = 'محفظة';
$string['type_portfolio_plural'] = 'المحافظ';
$string['type_profilefield'] = 'نوع حقل الملف الشخصي';
$string['type_profilefield_plural'] = 'أنواع حقول الملف الشخصي';
$string['type_qbehaviour'] = 'سلوك السؤال';
$string['type_qbehaviour_plural'] = 'سلوكات الأسئلة';
$string['type_qformat'] = 'تنسيق إستيراد/تصدير السؤال';
$string['type_qformat_plural'] = 'تنسيقات إستيراد/تصدير السؤال';
$string['type_qtype'] = 'نوع السؤال';
$string['type_qtype_plural'] = 'أنواع الأسئلة';
$string['type_report'] = 'تقرير الموقع';
$string['type_report_plural'] = 'تقارير';
$string['type_repository'] = 'مستودع';
$string['type_repository_plural'] = 'مستودعات';
$string['type_search'] = 'محرك بحث';
$string['type_search_plural'] = 'محركات بحث';
$string['type_theme'] = 'مظهر';
$string['type_theme_plural'] = 'مظاهر';
$string['type_tool'] = 'أداة الإدارة';
$string['type_tool_plural'] = 'أدوات الإدارة';
$string['type_webservice'] = 'بروتوكول خدمات الويب';
$string['type_webservice_plural'] = 'بروتوكولات خدمات الويب';
$string['uninstall'] = 'إزالة التثبيت';
$string['uninstallconfirm'] = 'أنت على وشك إلغاء تنصيب الملحق <em>{$a->name}</em>. سيؤدي هذا إلى حذف كل شيء في قاعدة البيانات ذي صلة بهذا الملحق، بما في ذلك تهيئته، سجلات وقوعاته، ملفات المستخدم المدارة من قبله... وما إلى ذلك. لا رجعة في ذلك، ومودل نفسه لا ينشئ أي نسخة احتياطية له لاسترداده لاحقاً. هل أنت <strong>متأكد</strong> من رغبتك في المتابعة؟';
$string['uninstalldelete'] = 'لقد تم حذف كل البيانات المتعلقة بالملحق <em>{$a->name}</em> من قاعدة البيانات. لمنع الملحق من إعادة تنصيب نفسه، تنبغي إزالة المجلد <em>{$a->rootdir}</em> يدوياً من مخدمك الآن. مودل نفسه لم يتمكن من إزالة المجلد بسبب صلاحيات
الكتابة في المخدم.';
$string['uninstalldeleteconfirm'] = 'تم حذف كل البيانات المرتبطة بالملحق <em>{$a->name}</em> من قاعدة البيانات. لمنع هذا الملحق من إعادة تثبيت نفسه، يجب إزالة مجلده <em>{$a->rootdir}</em> من المخدم. هل تريد إزالة مجلد هذا الملحق الآن؟';
$string['uninstalldeleteconfirmexternal'] = 'يبدو أن الإصدار الحالي من الملحق قد تم الحصول عليه من خلال نظام إدارة شفرة المصدر ({$a}). إذا أردت إزالة مجلد هذا الملحق، فقد تفقد تعديلات محلية هامة من التعليمات البرمجية. الرجاء <strong>التأكد</strong> من أنك بلا شك تريد إزالة مجلد الملحق قبل المتابعة.';
$string['uninstallextraconfirmblock'] = 'هناك عدة نسخ {$a->instances} من هذه المجموعة.';
$string['uninstallextraconfirmenrol'] = 'يوجد {$a->enrolments} لتسجيلات المستخدمين.';
$string['uninstallextraconfirmmod'] = 'يوجد  {$a->instances} نسخ مطابقة لهذا النموذج في {$a->courses} مقررات دراسية';
$string['uninstalling'] = 'يجري إلغاء تنصيب {$a->name}';
$string['updateavailable'] = 'هناك إصدار جديد {$a} متاح!';
$string['updateavailable_moreinfo'] = 'مزيد من المعلومات...';
$string['updateavailable_release'] = 'الإطلاق {$a}';
$string['updatepluginconfirm'] = 'تأكيد تحديث الملحق';
$string['updatepluginconfirmexternal'] = 'يبدو أن الإصدار الحالي من الملحق قد تم الحصول عليه من خلال نظام إدارة شفرة المصدر ({$a}). إذا قمت بتنصيب هذا التحديث، فلن تتمكن بعد ذلك من الحصول على تحديثات الملحق من مورد نظام إدارة التعليمات البرمجية. الرجاء <strong>التأكد</strong> من أنك بلا شك تريد تحديث الملحق قبل المتابعة.';
$string['updatepluginconfirminfo'] = 'ت على وشك تثبيت إصدار جديد من المكوّن الإضافي <strong>{$a->name}</strong>. سيتم تنزيل حزمة zip مع إصدار {$a->version} من المكوّن الإضافي من <a href="{$a->url}">{$a->url}</a> وسيتم استخراجها إلى تثبيت Moodle حتى تتمكن من ترقية التثبيت الخاص بك.';
$string['updatepluginconfirmwarning'] = 'يرجى ملاحظة أن مودل لن يقوم تلقائياً بعمل نسخة احتياطية من قاعدة البيانات الخاصة بك قبل الترقية. نوصي بشدة أن تنشئ نسخة إحتياطية كاملة الآن، وذلك للتماشي مع الاحتمالية النادرة باحتواء الشفرة الجديدة على أخطاء تجعل موقعك غير متاح أو ربما قد تفسد قاعدة البيانات الخاصة بك. استمر على مسؤوليتك الخاصة.';
$string['validationmsg_componentmatch'] = 'الاسم الكامل للمكون';
$string['validationmsg_componentmismatchname'] = 'عدم تطابق اسم الملحق';
$string['validationmsg_componentmismatchname_help'] = 'تحتوي بعض حزم ZIP ، مثل تلك التي تم إنشاؤها بواسطة Github، على اسم مجلد جذر غير صحيح. عليك بإصلاح اسم المجلد الجذر ليطابق الاسم المُعلن للملحق.';
$string['validationmsg_componentmismatchname_info'] = 'يعلن الملحق أن اسمه هو \'{$a}\' ولكنه لا يتطابق مع اسم الدليل الجذر.';
$string['validationmsg_componentmismatchtype'] = 'نوع الملحق غير مطابق';
$string['validationmsg_componentmismatchtype_info'] = 'النوع المتوقع هو \'{$a->expected}\'، لكن الملحق يعلن أن نوعه هو \'{$a->found}\'.';
$string['validationmsg_filenotexists'] = 'الملف المستخلص غير موجود';
$string['validationmsg_filesnumber'] = 'لم يتم العثور على ملفات كافية في الحزمة';
$string['validationmsg_filestatus'] = 'غير قادر على استخلاص جميع الملفات';
$string['validationmsg_filestatus_info'] = 'أدت محاولة استخراج الملف {$a->file} إلى حدوث خطأ \'{$a->status}\'.';
$string['validationmsg_foundlangfile'] = 'تم العثور على ملف اللغة';
$string['validationmsg_maturity'] = 'مستوى النضج المعلن';
$string['validationmsg_maturity_help'] = 'يمكن للملحق أن يُعلن عن مستوى نضجه. إذا اعتبر القَيِّم عليه أنه مستقر، سيقرأ مستوى النضج المعلن له MATURITY_STABLE. ينبغي اعتبار كل مستويات النضج الأخرى (مثل ألفا أو بيتا) غير مستقرة ويُرفع معها عَلَمُ التحذير.';
$string['validationmsg_missingcomponent'] = 'الملحق لا يُعلن اسم المُكون الخاص به';
$string['validationmsg_missingcomponent_help'] = 'يجب أن توفر كل الملاحق اسم مكونها الكامل عبر تعريف`$plugin->component` في ملف version.php.';
$string['validationmsg_missingexpectedlangenfile'] = 'عدم تطابق اسم ملف اللغة الإنجليزية';
$string['validationmsg_missingexpectedlangenfile_info'] = 'يفتقد نوع الملحق المحدد إلى ملف اللغة الإنجليزية المتوقع {$a}.';
$string['validationmsg_missinglangenfile'] = 'لم يتم العثور على ملف باللغة الإنجليزية';
$string['validationmsg_missinglangenfolder'] = 'مجلد اللغة الإنجليزية مفقود';
$string['validationmsg_missingversion'] = 'المكون المساعد لا يعلن إصداره';
$string['validationmsg_missingversionphp'] = 'ملف version.php غير موجود';
$string['validationmsg_multiplelangenfiles'] = 'تم العثور على ملفات متعددة للغة الإنجليزية';
$string['validationmsg_onedir'] = 'بنية غير صالحة لحزمة ZIP.';
$string['validationmsg_onedir_help'] = 'ينبغي أن تحتوي حزمة ZIP على مجلد جذر واحد يحتفظ برمز الملحق. يجب أن يتطابق اسم هذا المجلد الجذر مع اسم الملحق.';
$string['validationmsg_pathwritable'] = 'التحقق من اتاحة الكتابة';
$string['validationmsg_pluginversion'] = 'إصدار الملحق';
$string['validationmsg_pluginversiontoolow'] = 'هناك إصدار أحدث من هذا الملحق منصب سلفاً';
$string['validationmsg_release'] = 'إطلاق الملحق';
$string['validationmsg_requiresmoodle'] = 'طلب إصدارة Moodle';
$string['validationmsg_rootdir'] = 'اسم الملحق المراد تنصيبه';
$string['validationmsg_rootdir_help'] = 'يمثل اسم المجلد الجذر في حزمة ZIP اسم الملحق الإضافي المراد تنصيبه. إذا كان الاسم غير صحيح، فقد ترغب في إعادة تسمية المجلد الجذر في ملف ZIP قبل تثبيت الملحق.';
$string['validationmsg_rootdirinvalid'] = 'اسم الملحق غير صالح';
$string['validationmsg_rootdirinvalid_help'] = 'ينتهك اسم المجلد الجذر في حزمة ZIP متطلبات الصياغة الرسمية. قد تحتوي بعض حزم ZIP، مثل تلك التي تم إنشاؤها بواسطة Github، على اسم مجلد جذر غير صحيح. عليك بإصلاح اسم المجلد الجذر ليطابق اسم الملحق.';
$string['validationmsg_targetexists'] = 'الموضع المقصود موجود بالفعل وستتم إزالته';
$string['validationmsg_targetexists_help'] = 'مجلد الملحق موجود سلفاً وسيتم استبداله بمحتويات حزمة الملحق.';
$string['validationmsg_targetnotdir'] = 'الموضع المقصود يشغله ملف';
$string['validationmsg_unknowntype'] = 'نوع مجهول للملحق';
$string['validationmsg_versionphpsyntax'] = 'تم اكتشاف صيغة غير مدعومة في ملف version.php';
$string['validationmsglevel_debug'] = 'فحص الأخطاء';
$string['validationmsglevel_error'] = 'خطأ';
$string['validationmsglevel_info'] = 'حسنا';
$string['validationmsglevel_warning'] = 'تحذير';
$string['version'] = 'الإصدار';
$string['versiondb'] = 'الإصدار الحالي';
$string['versiondisk'] = 'الإصدار الجديد';
