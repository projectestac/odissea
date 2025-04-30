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
 * Strings for component 'plugin', language 'ar', version '4.4'.
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
$string['cancelinstallhead'] = 'يجري إلغاء تنصيب الإضافات';
$string['cancelinstallinfo'] = 'لم يتم تنصيب الإضافات الآتية بشكل كامل بعد، لذلك يمكن إلغاء تنصيبها. للقيام بذلك، يجب إزالة مجلد الإضافة من المخدم الآن. يجب عليك التأكد من أن هذا هو ما تريده فعلاً لتجنب فقدان البيانات بطريق الخطأ (مثل التعديلات البرمجية التي أضفتها).';
$string['cancelinstallinfodir'] = 'مجلد مطلوب حذفه: {$a}';
$string['cancelinstallone'] = 'إلغاء هذا التنصيب';
$string['cancelupgradeall'] = 'إلغاء الترقيات ({$a})';
$string['cancelupgradehead'] = 'استعادة الإصدار السابق من الإضافات';
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
$string['detectedmisplacedplugin'] = 'الإضافة "{$a->component}" منصب في موقع غير صحيح "{$a->current}"، والموقع المتوقع هو "{$a->expected}"';
$string['displayname'] = 'اسم الإضافة';
$string['err_response_curl'] = 'يتعذر جلب بيانات التحديثات المتاحة - خطأ cURL غير متوقع.';
$string['err_response_format_version'] = 'إصدار غير متوقع لشكل رد الفعل. يرجى محاولة إعادة التأكد من وجود تحديثات متاحة.';
$string['err_response_http_code'] = 'يتعذر جلب بيانات التحديثات المتاحة - رمز استجابة HTTP غير متوقع.';
$string['filterall'] = 'إظهار الكل';
$string['filtercontribonly'] = 'إظهار الإضافات الإضافية فقط';
$string['filterupdatesonly'] = 'إظهار القابل للتحديث فقط';
$string['incompatibleversion'] = 'إصدار مودل غير متوافق: {$a}';
$string['isenabled'] = 'مفعّل؟';
$string['misdepinfoplugin'] = 'معلومات الإضافة';
$string['misdepinfoversion'] = 'معلومات الإصدار';
$string['misdepsavail'] = 'التبِعات المفقودة المتاحة';
$string['misdepsunavail'] = 'التبِعات المفقودة غير المتاحة';
$string['misdepsunavaillist'] = 'لم يتم العثور على إصدار لاستيفاء متطلبات التبِعَة: {$a}.';
$string['misdepsunknownlist'] = 'ليس في دليل المكونات الإضافية: <strong>{$a}</strong>.';
$string['moodlebranch'] = 'مودل {$a->min} - {$a->max}';
$string['moodleversion'] = 'Moodle {$a}';
$string['noneinstalled'] = 'لم يتم تنصيب أي إضافات من هذا النوع';
$string['notdownloadable'] = 'لا يمكن تحميل الحزمة';
$string['notdownloadable_help'] = 'لا يمكن تنزيل حزمة ZIP مع التحديث تلقائياً. يرجى الرجوع إلى صفحة التوثيقات لمزيد من المساعدة.';
$string['notdownloadable_link'] = 'admin/mdeploy/notdownloadable';
$string['notes'] = 'الملاحظات';
$string['notsupported'] = 'الإضافة قد لا تكون متوافقة مع مودل بإصداره {$a}';
$string['notwritable'] = 'ملفات الإضافة غير قابلة للكتابة عليها';
$string['notwritable_help'] = 'ملفات الإضافة غير قابلة للكتابة عليها من قبل مخدم الويب. ينبغي أن يكون لعملية مخدم الويب حق الوصول للكتابة في مجلد الإضافة وكل محتوياتها. إتاحة الكتابة في مجلد الجذر للإضافة المعنية قد تكون ضرورية أيضاً.';
$string['otherplugin'] = '{$a->component}';
$string['otherpluginversion'] = '{$a->component} ({$a->version})';
$string['overviewall'] = 'كل الإضافات';
$string['overviewext'] = 'الإضافات المضافة';
$string['overviewupdatable'] = 'تحديثات متاحة';
$string['packagesdebug'] = 'تخريج تصحيح الأخطاء مُمَكَّن';
$string['packagesdownloading'] = 'جارٍ تنزيل {$a}';
$string['packagesextracting'] = 'استخراج {$a}';
$string['packagesvalidating'] = 'جارٍ التحقق من صحة {$a}';
$string['packagesvalidatingfailed'] = 'تم إحباط التنصيب بسبب فشل التحقق من الصحة';
$string['packagesvalidatingok'] = 'نجح التحقق من الصحة، يمكن متابعة التنصيب';
$string['plugincheckall'] = 'كل الإضافات';
$string['plugincheckattention'] = 'الإضافات التي تستدعي الانتباه';
$string['pluginchecknone'] = 'لا يوجد مكونات إضافية تتطلب انتباهك حاليا.';
$string['pluginchecknotice'] = 'هذه الصفحة تعرض الإضافات التي قد تستدعي انتباهك في أثناء الترقية، مثل الإضافات الجديدة التي سيتم تنصيبها، الإضافات التي ستتم ترقيتها، الإضافات المفقودة... إلخ. يتم عرض إضافات إضافية إذا كان هناك تحديث متاح لها. يُنصح بأن تتحقق من توفر أحدث الإصدارات للإضافات وتحديث نصوصها البرمجية قبل متابعة ترقية إصدار مودل هذا.';
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
$string['status_downgrade'] = 'الإصدار الأحدث منصب مسبقًا!';
$string['status_missing'] = 'غير موجود على القرص';
$string['status_new'] = 'سيتم تنصيبه';
$string['status_nodb'] = 'لا قاعدة بيانات';
$string['status_upgrade'] = 'سيتم ترقيته';
$string['status_uptodate'] = 'منصب';
$string['supportedconversions'] = 'تحويلات المستندات المدعومة';
$string['supportedmoodleversions'] = 'إصدارات مودل المدعومة';
$string['systemname'] = 'محدث';
$string['type_antivirus'] = 'ملحق مضاد الفيروسات';
$string['type_antivirus_plural'] = 'إضافات مضادات الفيروسات';
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
$string['type_communication'] = 'مزود الاتصالات';
$string['type_communication_plural'] = 'مزودو الاتصالات';
$string['type_contentbank'] = 'بنك المحتوى';
$string['type_contentbank_plural'] = 'إضافات بنك المحتوى';
$string['type_contenttype'] = 'بنك المحتوى';
$string['type_contenttype_plural'] = 'إضافات بنك المحتوى';
$string['type_coursereport'] = 'تقرير المساق';
$string['type_coursereport_plural'] = 'تقارير المساق';
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
$string['type_format'] = 'تنسيق المقرر';
$string['type_format_plural'] = 'تنسيقات المساق';
$string['type_gradeexport'] = 'طريقة تصدير التقديرات';
$string['type_gradeexport_plural'] = 'طُرق تصدير التقديرات';
$string['type_gradeimport'] = 'طريقة استيراد التقديرات';
$string['type_gradeimport_plural'] = 'طُرق استيراد التقديرات';
$string['type_gradereport'] = 'تقرير سجل التقديرات';
$string['type_gradereport_plural'] = 'تقارير سجل التقديرات';
$string['type_gradingform'] = 'الطريقة المتقدمة لمنح التقديرات';
$string['type_gradingform_plural'] = 'الطُرق المتقدمة لمنح التقديرات';
$string['type_h5plib'] = 'إطار عمل H5P';
$string['type_h5plib_plural'] = 'إطارات عمل H5P';
$string['type_local'] = 'ملحق محلي';
$string['type_local_plural'] = 'إضافات محلية';
$string['type_media'] = 'مشغل وسائط';
$string['type_media_plural'] = 'مشغلات الوسائط';
$string['type_message'] = 'ملحق إشعارات';
$string['type_message_plural'] = 'إضافات الإشعارات';
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
$string['type_plagiarism_plural'] = 'إضافات منع الانتحال';
$string['type_portfolio'] = 'محفظة';
$string['type_portfolio_plural'] = 'المحافظ';
$string['type_profilefield'] = 'نوع حقل الملف الشخصي';
$string['type_profilefield_plural'] = 'أنواع حقول الملف الشخصي';
$string['type_qbank'] = 'ملحق بنك الأسئلة';
$string['type_qbank_plural'] = 'إضافات بنك الأسئلة';
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
$string['type_theme'] = 'القالب';
$string['type_theme_plural'] = 'القوالب';
$string['type_tool'] = 'أداة الإدارة';
$string['type_tool_plural'] = 'أدوات الإدارة';
$string['type_webservice'] = 'بروتوكول خدمات الويب';
$string['type_webservice_plural'] = 'بروتوكولات خدمات الويب';
$string['uninstall'] = 'إلغاء التنصيب';
$string['uninstallconfirm'] = 'أنت على وشك إلغاء تنصيب الإضافة <em>{$a->name}</em>. سيؤدي هذا إلى حذف كل شيء في قاعدة البيانات ذي صلة بهذا الملحق، بما في ذلك تهيئته، سجلات وقوعاته، ملفات المستخدم المدارة من قبله... وما إلى ذلك. لا رجعة في ذلك، ومودل نفسه لا ينشئ أي نسخة احتياطية له لاسترداده لاحقاً. هل أنت <strong>متأكد</strong> من رغبتك في المتابعة؟';
$string['uninstalldelete'] = 'لقد تم حذف كل البيانات المتعلقة بالإضافة <em>{$a->name}</em> من قاعدة البيانات. لمنع الإضافة من إعادة تنصيب نفسها، تنبغي إزالة المجلد <em>{$a->rootdir}</em> يدوياً من مخدمك الآن. مودل نفسه لم يتمكن من إزالة المجلد بسبب صلاحيات
الكتابة في المخدم.';
$string['uninstalldeleteconfirm'] = 'تم حذف كل البيانات المرتبطة بالإضافة <em>{$a->name}</em> من قاعدة البيانات. لمنع هذه الإضافة من إعادة تنصيب نفسها، يجب إزالة مجلده <em>{$a->rootdir}</em> من المخدم. هل تريد إزالة مجلد هذه الإضافة الآن؟';
$string['uninstalldeleteconfirmexternal'] = 'يبدو أن الإصدار الحالي من الإضافة قد تم الحصول عليه من خلال نظام إدارة شفرة المصدر ({$a}). إذا أردت إزالة مجلد هذه الإضافة، فقد تفقد تعديلات محلية هامة من التعليمات البرمجية. الرجاء <strong>التأكد</strong> من أنك بلا شك تريد إزالة مجلد الإضافة قبل المتابعة.';
$string['uninstallextraconfirmblock'] = 'هناك عدة نسخ {$a->instances} من هذه المجموعة.';
$string['uninstallextraconfirmenrol'] = 'يوجد {$a->enrolments} لتسجيلات المستخدمين.';
$string['uninstallextraconfirmmod'] = 'يوجد  {$a->instances} نسخ مطابقة لهذا النموذج في {$a->courses} مساقات';
$string['uninstalling'] = 'يجري إلغاء تنصيب {$a->name}';
$string['updateavailable'] = '_هناك إصدار جديد {$a} متاح!';
$string['updateavailable_moreinfo'] = 'مزيد من المعلومات...';
$string['updateavailable_release'] = 'الإطلاق {$a}';
$string['updatepluginconfirm'] = 'تأكيد تحديث الإضافة';
$string['updatepluginconfirmexternal'] = 'يبدو أن الإصدار الحالي من الإضافة قد تم الحصول عليه من خلال نظام إدارة شفرة المصدر ({$a}). إذا قمت بتنصيب هذا التحديث، فلن تتمكن بعد ذلك من الحصول على تحديثات الملحق من مورد نظام إدارة التعليمات البرمجية. الرجاء <strong>التأكد</strong> من أنك بلا شك تريد تحديث الملحق قبل المتابعة.';
$string['updatepluginconfirminfo'] = 'أنت على وشك تنصيب إصدار جديد من الإضافة <strong>{$a->name}</strong>. سيتم تنزيل حزمة zip ذات الإصدار {$a->version} من الإضافة من <a href="{$a->url}">{$a->url}</a> وسيتم استخراجها إلى تنصيب لتتمكن من ترقية التنصيب الخاص بك.';
$string['updatepluginconfirmwarning'] = 'يرجى ملاحظة أن مودل لن يقوم تلقائياً بعمل نسخة احتياطية من قاعدة البيانات الخاصة بك قبل الترقية. نوصي بشدة أن تنشئ نسخة إحتياطية كاملة الآن، وذلك للتماشي مع الاحتمالية النادرة باحتواء الشفرة الجديدة على أخطاء تجعل موقعك غير متاح أو ربما قد تفسد قاعدة البيانات الخاصة بك. استمر على مسؤوليتك الخاصة.';
$string['validationmsg_componentmatch'] = 'الاسم الكامل للمكون';
$string['validationmsg_componentmismatchname'] = 'عدم تطابق اسم الإضافة';
$string['validationmsg_componentmismatchname_help'] = 'تحتوي بعض حزم ZIP ، مثل تلك التي تم إنشاؤها بواسطة Github، على اسم مجلد جذر غير صحيح. عليك بإصلاح اسم المجلد الجذر ليطابق الاسم المُعلن للملحق.';
$string['validationmsg_componentmismatchname_info'] = 'تعلن الإضافة أن اسمها هو \'{$a}\' ولكنه لا يتطابق مع اسم الدليل الجذر.';
$string['validationmsg_componentmismatchtype'] = 'نوع الإضافة غير مطابق';
$string['validationmsg_componentmismatchtype_info'] = 'النوع المتوقع هو \'{$a->expected}\'، لكن الإضافة تعلن أن نوعها هو \'{$a->found}\'.';
$string['validationmsg_filenotexists'] = 'الملف المستخلص غير موجود';
$string['validationmsg_filesnumber'] = 'لم يتم العثور على ملفات كافية في الحزمة';
$string['validationmsg_filestatus'] = 'غير قادر على استخلاص جميع الملفات';
$string['validationmsg_filestatus_info'] = 'أدت محاولة استخراج الملف {$a->file} إلى حدوث خطأ \'{$a->status}\'.';
$string['validationmsg_foundlangfile'] = 'تم العثور على ملف اللغة';
$string['validationmsg_maturity'] = 'مستوى النضج المعلن';
$string['validationmsg_maturity_help'] = 'يمكن للملحق أن يُعلن عن مستوى نضجه. إذا اعتبر القَيِّم عليه أنه مستقر، سيقرأ مستوى النضج المعلن له MATURITY_STABLE. ينبغي اعتبار كل مستويات النضج الأخرى (مثل ألفا أو بيتا) غير مستقرة ويُرفع معها عَلَمُ التحذير.';
$string['validationmsg_missingcomponent'] = 'الإضافة لا تعلن اسم المُكون الخاص به';
$string['validationmsg_missingcomponent_help'] = 'يجب أن توفر كل الإضافات اسم مكونها الكامل عبر تعريف`$plugin->component` في ملف version.php.';
$string['validationmsg_missingcomponent_link'] = 'Development:version.php';
$string['validationmsg_missingexpectedlangenfile'] = 'عدم تطابق اسم ملف اللغة الإنجليزية';
$string['validationmsg_missingexpectedlangenfile_info'] = 'يفتقد نوع الإضافة المحدد إلى ملف اللغة الإنجليزية المتوقع {$a}.';
$string['validationmsg_missinglangenfile'] = 'لم يتم العثور على ملف باللغة الإنجليزية';
$string['validationmsg_missinglangenfolder'] = 'مجلد اللغة الإنجليزية مفقود';
$string['validationmsg_missingversion'] = 'المكون المساعد لا يعلن إصداره';
$string['validationmsg_missingversionphp'] = 'ملف version.php غير موجود';
$string['validationmsg_multiplelangenfiles'] = 'تم العثور على ملفات متعددة للغة الإنجليزية';
$string['validationmsg_onedir'] = 'بنية غير صالحة لحزمة ZIP.';
$string['validationmsg_onedir_help'] = 'ينبغي أن تحتوي حزمة ZIP على مجلد جذر واحد يحتفظ برمز الإضافة. يجب أن يتطابق اسم هذا المجلد الجذر مع اسم الإضافة.';
$string['validationmsg_pathwritable'] = 'التحقق من إتاحة الكتابة';
$string['validationmsg_pluginversion'] = 'إصدار الملحق';
$string['validationmsg_pluginversiontoolow'] = 'هناك إصدار أحدث من هذه الإضافة منصب سلفاً';
$string['validationmsg_release'] = 'نسخة الملحق';
$string['validationmsg_requiresmoodle'] = 'إصدار مودل المطلوب';
$string['validationmsg_rootdir'] = 'اسم الإضافة المراد تنصيبها';
$string['validationmsg_rootdir_help'] = 'يمثل اسم المجلد الجذر في حزمة ZIP اسم الإضافة المراد تنصيبها. إذا كان الاسم غير صحيح، فقد ترغب في إعادة تسمية المجلد الجذر في ملف ZIP قبل تنصيب الإضافة.';
$string['validationmsg_rootdirinvalid'] = 'اسم الإضافة غير صالح';
$string['validationmsg_rootdirinvalid_help'] = 'ينتهك اسم المجلد الجذر في حزمة ZIP متطلبات الصياغة الرسمية. قد تحتوي بعض حزم ZIP، مثل تلك التي تم إنشاؤها بواسطة Github، على اسم مجلد جذر غير صحيح. عليك بإصلاح اسم المجلد الجذر ليطابق اسم الإضافة.';
$string['validationmsg_targetexists'] = 'الموضع المقصود موجود بالفعل وستتم إزالته';
$string['validationmsg_targetexists_help'] = 'مجلد الإضافة موجود سلفاً وسيتم استبداله بمحتويات حزمة الإضافة.';
$string['validationmsg_targetnotdir'] = 'الموضع المقصود يشغله ملف';
$string['validationmsg_unknowntype'] = 'نوع مجهول للملحق';
$string['validationmsg_versionphpsyntax'] = 'تم اكتشاف صيغة غير مدعومة في ملف version.php';
$string['validationmsglevel_debug'] = 'فحص الأخطاء';
$string['validationmsglevel_error'] = 'خطأ';
$string['validationmsglevel_info'] = 'جيد';
$string['validationmsglevel_warning'] = 'تحذير';
$string['version'] = 'الإصدار';
$string['versiondb'] = 'الإصدار الحالي';
$string['versiondisk'] = 'الإصدار الجديد';
