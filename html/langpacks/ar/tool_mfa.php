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
 * Strings for component 'tool_mfa', language 'ar', version '4.5'.
 *
 * @package     tool_mfa
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievedweight'] = 'الوزن المؤرشف';
$string['added'] = 'تمت الإضافة';
$string['alltime'] = 'كل الوقت';
$string['areyousure'] = 'هل أنت متأكد أنك تريد إزالة هذا العامل؟
';
$string['cancellogin'] = 'إلغاء الدخول';
$string['combination'] = 'مزيج';
$string['confirmationreplace'] = 'سيُطلب منك على الفور إعداد \'{$a}\' آخر. الرجاء التأكد من أنك مستعد لإكمال عملية الإعداد.';
$string['confirmationrevoke'] = 'لن تتمكن بعد الآن من استخدام \'{$a}\' لتسجيل الدخول إلى هذا الموقع.';
$string['connector'] = 'AND';
$string['created'] = 'مُنشأ';
$string['createdfromip'] = 'مُنشأ من عنوان IP';
$string['debugmode:heading'] = 'وضع كشف الأخطاء';
$string['devicename'] = 'الجهاز';
$string['editfactor'] = 'تحرير إعدادات العامل {$a}';
$string['email:subject'] = 'يتعذر تسجيل الدخول إلى {$a}';
$string['enablefactor'] = 'تمكين العامل';
$string['entercode'] = 'ادخل الرمز';
$string['error:actionnotfound'] = 'الإجراء \'{$a}\' غير مدعوم';
$string['error:couldnotreplace'] = 'لا يمكن استبدال هذا العامل.';
$string['error:directaccess'] = 'لا ينبغي الوصول إلى هذه الصفحة بشكل مباشر';
$string['error:factornotenabled'] = 'عامل المصادقة متعددة العوامل \'{$a}\' غير مُمَكَّن';
$string['error:factornotfound'] = 'عامل المصادقة متعددة العوامل \'{$a}\' غير موجود';
$string['error:isguestuser'] = 'غير مسموح بالضيوف هنا.';
$string['error:notenoughfactors'] = 'غير قادر على المصادقة';
$string['error:reauth'] = 'لم نستطع التأكد من هويتك بما يكفي لتلبية سياسة أمان المصادقة في الموقع<br>قد يكون ذلك معزو إلى: <br> 1) وجود خطوات مغلقة - يرجى الانتظار لدقائق معدودة ثم حاول مجددًا.
     <br> 2) وجود خطوات مخفقة - يرجى التأكد أكثر من كل خطوة. <br> 3) وجود خطوات تم تخطيها - يرجى إعادة تحميل هذه الصفحة أو حاول تسجيل الدخول مرة أخرى.';
$string['error:revoke'] = 'غير قادر على إزالة العامل';
$string['error:setupfactor'] = 'غير قادر على تهيئة العامل';
$string['error:support'] = 'إذا ما زلت عاجزًا عن تسجيل دخولك، أو تعتقد بأنه من الخطأ أن تشاهد هذا، ترجى مراسلة:';
$string['error:wrongfactorid'] = 'مُعرَّف العامل \'{$a}\' غير صحيح';
$string['event:failfactor'] = 'المصادقة متعددة العوامل فشلت بسبب عامل فاشل.';
$string['event:faillockout'] = 'المصادقة متعددة العوامل فشلت بسبب كثرة المحاولات.';
$string['event:failnotenoughfactors'] = 'المصادقة متعددة العوامل فشلت بسبب قلة العوامل الملباة.';
$string['event:userdeletedfactor'] = 'عامل تم حذفه';
$string['event:userfailedmfa'] = 'مستخدم أخفق عند المصادقة متعددة العوامل';
$string['event:userpassedmfa'] = 'تحقق نجح';
$string['event:userrevokedfactor'] = 'سحب العامل';
$string['event:usersetupfactor'] = 'تهيئة العامل';
$string['factor'] = 'العامل';
$string['factorreplace'] = 'تم استبدال العامل \'{$a}\' بنجاح.';
$string['factorreport'] = 'تقرير كل العوامل';
$string['factorreset'] = 'مصادقتك متعددة العوامل \'{$a->factor}\' قد تمت إعادة تعيينها من قبل مشرف الموقع. قد تحتاج إلى إعداد هذا العامل مرة أخرى. {$a->url}';
$string['factorresetall'] = 'كل عوامل مصادقتك متعددة العوامل قد تمت إعادة تعيينها من قبل مشرف الموقع. قد تحتاج إلى إعداد تلك العوامل مرة أخرى. {$a}';
$string['factorrevoked'] = 'تمت إزالة \'{$a}\' بنجاح.
';
$string['factorsetup'] = 'تم إعداد \'{$a}\' بنجاح.
';
$string['fallback'] = 'عامل التراجع';
$string['fallback_info'] = 'هذا العامل هو خيار التراجع إذا لم تتم تهيئة أي عوامل أخرى. هذا العامل سيفشل دائمًا.';
$string['guidance'] = 'دليل المستخدم للمصادقة متعددة العوامل';
$string['inputrequired'] = 'إدخال المستخدم';
$string['ipatcreation'] = 'عنوان IP عند إنشاء العامل';
$string['lastused'] = 'آخر أستخدام';
$string['lastverified'] = 'آخر تحقق';
$string['locked'] = '{$a} (غير متاح)';
$string['lockedusersforallfactors'] = 'المستخدمون الممنوعون: كل العوامل';
$string['lockedusersforfactor'] = 'المستخدمون الممنوعون: {$a}';
$string['lockoutnotification'] = 'بقيت لديك {$a} من المحاولات.';
$string['managefactor'] = 'إدارة العامل';
$string['mfa'] = 'المصادقة متعددة العوامل';
$string['mfa:intro'] = 'إجعل حسابك أكثر أمانًا عبر المطالبة بطرق مصادقة إضافية عندما تسجل دخولك.';
$string['mfa:mfaaccess'] = 'التعامل مع المصادقة متعددة العوامل';
$string['mfareports'] = 'تقارير المصادقة متعددة العوامل';
$string['mfasettings'] = 'إدارة المصادقة متعددة العوامل';
$string['na'] = 'غير متاح';
$string['needhelp'] = 'أتريد مساعدة؟';
$string['nologinusers'] = 'غير مسجل لدخوله';
$string['nonauthusers'] = 'بانتظار المصادقة متعددة العوامل';
$string['overall'] = 'إجمالاً';
$string['pending'] = 'بالانتظار';
$string['performbulk'] = 'إجراء بالجملة';
$string['pluginname'] = 'المصادقة متعددة العوامل';
$string['preferences:activefactors'] = 'العوامل الفعالة';
$string['preferences:availablefactors'] = 'العوامل المتاحة';
$string['preferences:header'] = 'تفضيلات المصادقة متعددة العوامل';
$string['preferenceslink'] = 'أنقر هنا للذهاب إلى تفضيلات المستخدم.';
$string['privacy:metadata:tool_mfa'] = 'البيانات ذات المصادقة متعددة العوامل المهيئة';
$string['privacy:metadata:tool_mfa:createdfromip'] = 'عنوان IP الذي تمت منه تهيئة العامل';
$string['privacy:metadata:tool_mfa:factor'] = 'نوع العامل';
$string['privacy:metadata:tool_mfa:id'] = 'مُعرَّف السجل';
$string['privacy:metadata:tool_mfa:label'] = 'ملصق عيِّنة العامل، مثلاً جهاز أو عنوان بريد الكتروني';
$string['privacy:metadata:tool_mfa:lastverified'] = 'آخر وقت حصل فيه المستخدم على المصادقة بهذا العامل';
$string['privacy:metadata:tool_mfa:secret'] = 'أي بيانات سرية للعامل';
$string['privacy:metadata:tool_mfa:timecreated'] = 'وقت تهيئة عيِّنة العامل';
$string['privacy:metadata:tool_mfa:timemodified'] = 'وقت آخر تعديل للعامل';
$string['privacy:metadata:tool_mfa:userid'] = 'مُعرَّف المستخدم العائد له العامل';
$string['privacy:metadata:tool_mfa_auth'] = 'آخر وقت تم فيه تسجيل مصادقة متعددة العوامل ناجحة لمُعرَّف المستخدم';
$string['privacy:metadata:tool_mfa_auth:lastverified'] = 'آخر وقت تمت مصادقة المستخدم به';
$string['privacy:metadata:tool_mfa_auth:userid'] = 'المستخدم ذي الصلة بهذا الطابع الزمني';
$string['privacy:metadata:tool_mfa_secrets'] = 'كلمات السر المؤقتة لمصادقة المستخدم';
$string['privacy:metadata:tool_mfa_secrets:factor'] = 'العامل الذي يرتبط به هذا السر';
$string['privacy:metadata:tool_mfa_secrets:secret'] = 'رمز الأمان السري';
$string['privacy:metadata:tool_mfa_secrets:sessionid'] = 'مُعرَّف الجلسة الذي يتعلق به هذا السر';
$string['privacy:metadata:tool_mfa_secrets:userid'] = 'المستخدم الذي يرتبط به هذا السر';
$string['redirecterrordetected'] = 'تم الكشف عن إعادة توجيه غير مدعومة. تم إنهاء تنفيذ النص البرمجي. وقع خطأ إعادة توجيه ما بين المصادقة متعددة العوامل و {$a}.';
$string['remove'] = 'يزيل';
$string['replace'] = 'يستبدل';
$string['replacefactor'] = 'عامل الاستبدال';
$string['resetconfirm'] = 'إعادة تعيين عامل المستخدم';
$string['resetfactor'] = 'إعادة تعيين عوامل مصادقة المستخدم';
$string['resetfactorconfirm'] = 'هل أنت متأكد من رغبتك في إعادة تعيين هذا العامل لـ {$a}؟';
$string['resetfactorplaceholder'] = 'اسم المستخدم أو البريد الالكتروني';
$string['resetsuccess'] = 'تمت إعادة تعيين العامل \'{$a->factor}\' بنجاح للمستخدم \'{$a->username}\'.';
$string['resetsuccessbulk'] = 'تمت إعادة تعيين العامل \'{$a->factor}\' بنجاح للمستخدمين المعينين.';
$string['resetuser'] = 'المستخدم:';
$string['revoke'] = 'سحب';
$string['revokefactor'] = 'إزالة العامل
';
$string['selectfactor'] = 'إختر العامل المزمعة إعادة تعيينه:';
$string['selectperiod'] = 'إختر فترة العودة إلى الوراء للتقرير:';
$string['settings:combinations'] = 'موجز الشروط الجيدة لتسجيل الدخول';
$string['settings:debugmode'] = 'تمكين وضع كشف الأخطاء';
$string['settings:debugmode_help'] = 'وضع كشف الأخطاء سيعرض شريط إشعارات صغير في صفحات إدارة المصادقة متعددة العوامل فضلاً عن صفحة تفضيلات المستخدم تحتوي معلومات عن العوامل المُمَكَّنة حاليًا.';
$string['settings:duration'] = 'فترة نفاذية السر';
$string['settings:duration_help'] = 'فترة نفاذية كلمات السر المولدة.';
$string['settings:enabled'] = 'ملحق المصادقة متعددة العوامل تم تمكينه';
$string['settings:enablefactor'] = 'تمكين العامل';
$string['settings:enablefactor_help'] = 'ضع إشارة على عنصر التحكم هذا للسماح باستعمال العامل لأغراض المصادقة متعددة العوامل.';
$string['settings:general'] = 'الإعدادات العامة للمصادقة متعددة العوامل';
$string['settings:guidancecheck'] = 'استعمال صفحة الدليل';
$string['settings:guidancecheck_help'] = 'إضافة رابط يؤدي إلى صفحة الإرشادات في صفحات المصادقة متعددة العوامل، وصفحة تفضيلاتها.';
$string['settings:guidancefiles'] = 'ملفات صفحة الدليل';
$string['settings:guidancefiles_help'] = 'أضف أي ملفات هنا لاستعمالها في صفحة الإرشادات وقم بتضمينها في الصفحة باستعمال {{filename}} (resolved path) أو {{{filename}}} (رابط html) في المحرر';
$string['settings:guidancepage'] = 'محتوى صفحة الإرشادات';
$string['settings:guidancepage_help'] = 'نصوص HTML هنا سيتم عرضها في صفحة الإرشادات. أدخل أسماء الملفات التي في منطقة الملفات لتضمينها مع مسارات الوصول إليها بشكل {{filename}} أو بشكل رابط html باستعمال {{{filename}}}.';
$string['settings:lockout'] = 'عتبة المنع';
$string['settings:lockout_help'] = 'عدد المحاولات التي بإمكان المستخدم خلالها إجابة عوامل الدخول قبل أن يتم منعه من تسجيل الدخول.';
$string['settings:redir_exclusions'] = 'عناوين الروابط التي ينبغي أن لا تعيد توجيه تحقق المصادقة متعددة العوامل.';
$string['settings:redir_exclusions_help'] = 'كل سطر جديد هو عنوان رابط نسبي للعنوان الأساسي للموقع والذي لن يقوم فحص المصادقة متعددة العوامل بإعادة التوجيه منه';
$string['settings:weight'] = 'وزن العامل';
$string['settings:weight_help'] = 'وزن هذا العامل عند اجتيازه. يحتاج المستخدم ما لا يقل عن 100 نقطة ليتمكن من تسجيل دخوله.';
$string['setup'] = 'نظام
';
$string['setupfactor'] = 'عامل الإعداد
';
$string['setupfactorbuttonadditional'] = 'إضافة عامل إضافي';
$string['setuprequired'] = 'تنصيب المستخدم';
$string['state:fail'] = 'الفشل';
$string['state:locked'] = 'ممنوع';
$string['state:neutral'] = 'محايد';
$string['state:pass'] = 'مجتاز';
$string['state:unknown'] = 'مجهول';
$string['subplugintype_factor'] = 'نوع العامل';
$string['subplugintype_factor_plural'] = 'أنواع العوامل';
$string['totalusers'] = 'إجمالي المستخدمين';
$string['totalweight'] = 'إجمالي الأوزان';
$string['userempty'] = 'لا يمكن أن يكون حقل المستخدم خاليًا.';
$string['userlogs'] = 'سجل وقوعات المستخدم';
$string['usernotfound'] = 'يتعذر تحديد المستخدم.';
$string['usersauthedinperiod'] = 'مسجل لدخوله';
$string['verification'] = 'التحقق بخطوتين';
$string['verification_desc'] = 'للحفاظ على حسابك آمنًا، نحتاج التحقق من أنه حقًا أنت.';
$string['verificationcode'] = 'رمز التحقق
';
$string['verificationcode_help'] = 'رمز التحقق المعطة من قبل عامل المصادقة الحالي.';
$string['verifyalt'] = 'جرب طريقة أخرى للتحقق:';
$string['weight'] = 'الوزن';
$string['yesremove'] = 'نعم، أخرج';
$string['yesreplace'] = 'نعم، استبدال';
