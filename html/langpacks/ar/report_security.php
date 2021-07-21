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
 * Strings for component 'report_security', language 'ar', version '3.11'.
 *
 * @package     report_security
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_configrw_details'] = '<p>من الموصى به تغيير صلاحيات الملف <code>config.php</code> بعد التنصيب لكي لا يكون قابلاً للتعديل من قبل مخدم الويب.
لطفاً، لاحظ أن هذا الإجراء لا يحسن الأمان في المخدم بشكل كبير، رغم أنه قد يبطئ أو يحد من محاولات الاختراق عموماً.</p>';
$string['check_configrw_name'] = 'config.php قابل للكتابة';
$string['check_configrw_ok'] = 'config.php لا يمكن تعديله من قبل نصوص برمجة PHP.';
$string['check_configrw_warning'] = 'نصوص برمجة PHP يمكنها تعديل config.php.';
$string['check_cookiesecure_details'] = '<p>إذا تم تمكين الاتصال المشفر https، من الموصى به تمكين إرسال ملفات تعريف الارتباط الآمنة. ينبغي أن يكون لديك تحويل دائم من http إلى https وبشكل مثالي تخديم رؤوس HSTS أيضاً.</p>';
$string['check_cookiesecure_error'] = 'لطفاً، قم بتمكين ملفات تعريف الارتباط الآمنة';
$string['check_cookiesecure_http'] = 'عليك تفعيل https لتتمكن من استعمال ملفات تعريف الارتباط الآمنة';
$string['check_cookiesecure_name'] = 'ملفات تعريف الارتباط الآمنة';
$string['check_cookiesecure_ok'] = 'تم تمكين ملفات تعريف الارتباط الآمنة.';
$string['check_crawlers_details'] = '<p>يُمَكِّن إعداد "مفتوح لمحركات البحث" محركات البحث من الدخول إلى المقررات الدراسية المتاحة لوصول الضيوف. ليست هناك فائدة من تمكين هذا الإعداد إن كان وصول الضيوف غير مسموح به.</p>';
$string['check_crawlers_error'] = 'وصول محركات البحث مسموح به ولكن وصول الضيوف معطل.';
$string['check_crawlers_info'] = 'يمكن لمحركات البحث الدخول بصفة ضيف.';
$string['check_crawlers_name'] = 'مفتوح لمحركات البحث';
$string['check_crawlers_ok'] = 'وصول محركات البحث معطل.';
$string['check_defaultuserrole_details'] = '<p>كل المستخدمين الداخلين إلى الموقع يُعطون إمكانيات الدور الافتراضي للمستخدم. لطفاً، تأكد من عدم السماح بإمكانيات خطرة في هذا الدور.</p>
<p>النوع الموروث المدعوم الوحيد لدور المستخدم الافتراضي هو <em>المستخدم الموثوق</em>. لا ينبغي تمكين إمكانية معاينة المقرر الدراسي.</p>';
$string['check_defaultuserrole_error'] = 'دور المستخدم الافتراضي "{$a}" ليس معرفاً بشكل صحيح!';
$string['check_defaultuserrole_name'] = 'الدور الافتراضي لكل المستخدمين';
$string['check_defaultuserrole_notset'] = 'الدور الافتراضي غير مهيأ.';
$string['check_defaultuserrole_ok'] = 'تعريف الدور الافتراضي لكل المستخدمين جيد.';
$string['check_dirindex_info'] = 'لا ينبغي تمكين فهرس المجلد';
$string['check_displayerrors_details'] = '<p>تمكين إعداد PHP <code>display_errors</code> غير موصى به في المواقع الإنتاجية لأن رسائل الأخطاء قد تكشف معلومات حساسة عن مخدمك.</p>';
$string['check_displayerrors_error'] = 'إعداد PHP لعرض الأخطاء مُمَكَّن. من الموصى به تعطيله.';
$string['check_displayerrors_name'] = 'عرض أخطاء PHP';
$string['check_displayerrors_ok'] = 'عرض أخطاء PHP مُعطل.';
$string['check_dotfiles_info'] = 'كل الملفات ذات النقطة ما عدا /.well-known/* لا ينبغي أن تكون علنية';
$string['check_emailchangeconfirmation_details'] = '<p>من الموصى به اعتماد خطوة تأكيد البريد الالكتروني عندما يقوم المستخدمون بتغيير عنوانهم هذا في ملفهم الشخصي. عند تعطيله، قد يحاول المزعجون انتهاك المخدم وجعله مرسلاً للرسائل المزعجة.</p>
<p>يمكن أيضاً تأمين حقل البريد الالكتروني من ملاحق المصادقة، هذه الإحتمالية غير مأخوذ بها هنا.</p>';
$string['check_emailchangeconfirmation_error'] = 'يمكن للمستخدمين إدخال أي عنوان بريد الكتروني.';
$string['check_emailchangeconfirmation_info'] = 'يمكن للمستخدمين إدخال عناوين البريد الالكتروني من المجالات المسموح بها فقط.';
$string['check_emailchangeconfirmation_name'] = 'تأكيد تغيير البريد الالكتروني';
$string['check_emailchangeconfirmation_ok'] = 'تأكيد تغيير البريد الالكتروني في الملف الشخصي للمستخدم.';
$string['check_embed_details'] = '<p>تضمين المكون اللامحدود خطر جداً - قد يقوم أي مستخدم مسجل في الموقع بإطلاق هجوم من نوع XSS ضد مستخدميه الآخرين. ينبغي تعطيل هذا الإعداد في المواقع الإنتاجية.</p>';
$string['check_embed_error'] = 'تضمين المكون اللامحدود مُمَكَّن - هذا خطير جداً في أغلب المخدمات.';
$string['check_embed_name'] = 'إسمح بـ EMBED و OBJECT';
$string['check_embed_ok'] = 'تضمين المكون اللامحدود غير مسموح به.';
$string['check_frontpagerole_details'] = '<p>دور الواجهة الأمامية الافتراضي يُعطى لكل المستخدمين المسجلين من أجل نشاطات الواجهة الأمامية. لطفاً، تأكد من عدم السماح بإمكانيات خطيرة في هذا الدور.</p>
<p>من الموصى به إنشاء دور خاص لهذا الغرض وتجنب استعمال دور من نوع موروث.</p>';
$string['check_frontpagerole_error'] = 'تم الكشف عن تعريف خاطئ لدور الواجهة الأمامية "{$a}"!';
$string['check_frontpagerole_name'] = 'دور الواجهة الأمامية';
$string['check_frontpagerole_notset'] = 'دور الواجهة الأمامية غير مُعَد.';
$string['check_frontpagerole_ok'] = 'تعريف دور الواجهة الأمامية جيد.';
$string['check_guestrole_details'] = '<p>دور الضيف يستعمل للمستخدمين غير مسجلي الدخول في الموقع ومن أجل الوصول المؤقت للضيوف في المقررات الدراسية. لطفاً، تأكد من عدم السماح بإمكانيات خطيرة في هذا الدور.</p>
<p>النوع الموروث المدعوم الوحيد لدور الضيف هو <em>الضيف</em>.</p>';
$string['check_guestrole_error'] = 'دور الضيف "{$a}" ليس معرفاً بشكل صحيح!';
$string['check_guestrole_name'] = 'دور الضيف';
$string['check_guestrole_notset'] = 'دور الضيف غير مُعد.';
$string['check_guestrole_ok'] = 'تعريف دور الضيف جيد.';
$string['check_mediafilterswf_details'] = '<p>التضمين التلقائي لـ swf خطر جداً - قد يقوم أي مستخدم مسجل في الموقع بإطلاق هجوم من نوع XSS ضد مستخدميه الآخرين. لطفاً، عطل هذا الإعداد في المواقع الإنتاجية.</p>';
$string['check_mediafilterswf_error'] = 'مرشح وسائط فلاش مُمَكَّن - هذا خطير جداً في أغلب المخدمات.';
$string['check_mediafilterswf_name'] = 'تمكين مرشح وسائط فلاش';
$string['check_mediafilterswf_ok'] = 'مرشح وسائط فلاش معطل';
$string['check_nodemodules_details'] = '<p>يحتوي المجلد <code>{$a->path}</code> على وحدات Node.js وتبعياتها، والمنصبة عادة من قبل الأداة NPM. قد تكون هناك حاجة لهذه الوحدات في  التطوير المحلي لمودل، مثل استعمال إطار عمل الناخر. ليس لها حاجة عند تشغيل مودل في موقع إنتاجي وهي قد تحتوي على رموز برمجية خطرة قد تعرض موقعك إلى هجمات خارجية.</p><p>يوصى بشدة بإزالة المجلد إذا كان الموقع متاحاً على رابط عمومي، أو على الأقل، إمنع وصول الويب إليه في إعدادات تهيئة المخدم عندك.</p>';
$string['check_nodemodules_info'] = 'مجلد node_modules لا ينبغي تواجده في المواقع العمومية.';
$string['check_nodemodules_name'] = 'مجلد وحدات Node.js';
$string['check_openprofiles_details'] = 'فتح الملفات الشخصية للمستخدمين يمكن أن يكون سبباً للإزعاج. يوصى بتمكين <code>إجبار المستخدمين على تسجيل الدخول لمعاينة الملفات الشخصية</code> أو تمكين <code>إجبار المستخدمين على تسجيل الدخول </code>.';
$string['check_openprofiles_error'] = 'يمكن لأي شخص معاينة الملفات الشخصية للمستخدمين بدون تسجيل الدخول.';
$string['check_openprofiles_name'] = 'إفتح الملفات الشخصية للمستخدمين';
$string['check_openprofiles_ok'] = 'يتطلب تسجيل الدخول لمعاينة الملفات الشخصية للمستخدمين.';
$string['check_passwordpolicy_details'] = '<p>من الموصى به وضع سياسة لكلمة المرور، نظراً لشيوع حالات تخمين كلمات المرور ولكونها أسهل طريقة للدخول غير المصرح به.
مع ذلك، لا تجعل المتطلبات صارمة جداً لأن ذلك قد يجعل تذكر كلمة المرور أمراً صعباً على المستخدمين وبالتالي نسيانهم لها أو لجوئهم إلى تدوينها على أوراق.</p>';
$string['check_passwordpolicy_error'] = 'سياسة كلمة المرور غير مُعدة.';
$string['check_passwordpolicy_name'] = 'سياسة كلمة المرور';
$string['check_passwordpolicy_ok'] = 'سياسة كلمة المرور مُمَكَّنة.';
$string['check_preventexecpath_details'] = '<p>السماح بوضع المسارات القابلة للتنفيذ عبر واجهة المشرف هو توجه نحو تصعيد الامتيازات. ينبغي فرض ذلك في الملف config.php:</p><p><code>$CFG->preventexecpath = true;<code></p>';
$string['check_preventexecpath_name'] = 'المسارات القابلة للتنفيذ';
$string['check_preventexecpath_ok'] = 'المسارات القابلة للتنفيذ يمكن إعدادها حصراً في config.php.';
$string['check_preventexecpath_warning'] = 'يمكن ضبط المسارات القابلة للتنفيذ في واجهة المحاورة الرسومية للمشرف.';
$string['check_publicpaths_403'] = '(أرجعت 403، نموذجيًا ينبغي أن تكون 404)';
$string['check_publicpaths_generic'] = 'ينبغي أن لا تكون ملفات {$a} علنية';
$string['check_publicpaths_name'] = 'تحقق من كل المسارات العمومية/الخاصة';
$string['check_riskadmin_detailsok'] = '<p>لطفاً، تحقق من القائمة الآتية لمشرفي النظام:</p>{$a}';
$string['check_riskadmin_detailswarning'] = '<p>لطفاً، تحقق من القائمة الآتية لمشرفي النظام:</p>{$a->admins}
<p>من الموصى به الاقتصار على منح دور المشرف ضمن سياق النظام حصراً. المستخدمون الآتية أسماؤهم لديهم تعيينات بدور مشرف (غير مدعوم) ضمن سياقات أخرى:</p>{$a->unsupported}';
$string['check_riskadmin_name'] = 'المشرفون';
$string['check_riskadmin_ok'] = 'تم العثور على {$a} مشرف/مشرفين للمخدم.';
$string['check_riskadmin_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) تعيين بدور المراجعة</a>';
$string['check_riskadmin_warning'] = 'تم العثور على {$a->admincount} مشرف/مشرفين للمخدم مع {$a->unsupcount} تعيينات غير مدعومة لدور المشرف.';
$string['check_riskbackup_details_overriddenroles'] = '<p>تجاوزات النشاط هذه تعطي المستخدمين إمكانية تضمين بيانات المستخدمين في الحفظ الاحتياطي. لطفاً، تأكد من أن هذه الصلاحية ضرورية.</p> {$a}';
$string['check_riskbackup_details_systemroles'] = '<p>تسمح أدوار النظام الآتية بتضمين بيانات المستخدمين في الحفظ الاحتياطي. لطفاً، تأكد من أن هذه الصلاحية ضرورية.</p> {$a}';
$string['check_riskbackup_details_users'] = '<p>بسبب الأدوار أعلاه أو التجاوزات المحلية، يمتلك أصحاب الحسابات الآتية صلاحية إجراء الحفظ الاحتياطي المتضمن لبيانات المستخدمين الشخصية ولأي من المنضمين إلى مقرراتهم. تأكد من كونهم أهل للثقة وأن حساباتهم محمية بكلمات مرور قوية:</p> {$a}';
$string['check_riskbackup_detailsok'] = 'لا توجد أدوار تسمح صراحة بالحفظ الاحتياطي لبيانات المستخدمين. مع ذلك، لاحظ أن المشرفين الذين لهم إمكانية "doanything" يبقى مرجحاً قدرتهم على القيام بذلك.';
$string['check_riskbackup_editoverride'] = '<a href="{$a->url}">{$a->name} في {$a->contextname}</a>';
$string['check_riskbackup_editrole'] = '<a href="{$a->url}">{$a->name}</a>';
$string['check_riskbackup_name'] = 'الحفظ الاحتياطي لبيانات المستخدم';
$string['check_riskbackup_ok'] = 'لا توجد أدوار تسمح صراحة بالحفظ الاحتياطي لبيانات المستخدمين';
$string['check_riskbackup_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) في {$a->contextname}</a>';
$string['check_riskbackup_warning'] = 'تم العثور على {$a->rolecount} أدوار، {$a->overridecount} تجاوزات و {$a->usercount} مستخدمين لديهم إمكانية الحفظ الاحتياطي لبيانات المستخدمين.';
$string['check_riskxss_details'] = '<p>RISK_XSS يدل على كل الإمكانيات الخطيرة التي يسمح فقط للمستخدمين الموثوق بهم استعمالها.</p>
<p>لطفاً، تحقق من قائمة المستخدمين الآتية وتأكد من أنك تثق بهم بشكل كامل في هذا المخدم:</p><p>{$a}</p>';
$string['check_riskxss_name'] = 'المستخدمون الموثوق بهم بشأن XSS';
$string['check_riskxss_warning'] = 'RISK_XSS - تم العثور على {$a} مستخدم/مستخدمين ينبغي أن يكونوا محل ثقة.';
$string['check_unsecuredataroot_details'] = '<p>ينبغي أن يكون مجلد dataroot غير قابل للوصول عبر الويب. أفضل طريقة للتأكد من تحقيق ذلك هو جعله خارج مجلد الويب العمومي.</p>
<p>إذا قمت بنقل المجلد، ينبغي عليك تحديث إعداد <code>$CFG->dataroot</code> في الملف <code>config.php</code> وفقاً له.</p>';
$string['check_unsecuredataroot_error'] = 'مجلد dataroot الخاص بك <code>{$a}</code> هو في الموضع الخطأ ومكشوف للويب!';
$string['check_unsecuredataroot_name'] = 'dataroot غير آمن';
$string['check_unsecuredataroot_ok'] = 'مجلد Dataroot ينبغي أن لا يكون متاحاً للوصول عبر الويب.';
$string['check_unsecuredataroot_warning'] = 'مجلد dataroot الخاص بك <code>{$a}</code> هو في الموضع الخطأ وقد يكون مكشوفاً للويب.';
$string['check_vendordir_details'] = '<p>المجلد <code>{$a->path}</code> يحتوي مكتبات متعددة من أطراف ثالثة مع تبعياتها، منصبة عادة من قبل مؤلف PHP. قد تكون هذه المكتبات مطلوبة للتطوير المحلي لمودل، كما في حالة تنصيب إطار العمل PHPUnit. ليست لها حاجة عند تشغيل الموقع الإنتاجي لمودل وقد تحتوي على رموز برمجية خطرة مما قد يعرض موقعك إلى هجمات خارجية.</p><p>يوصى بشدة بإزالة المجلد إذا كان الموقع متاحاً عبر رابط ويب عمومي، أو على الأقل منع وصول الويب إليه عبر إعدادات التهيئة في مخدمك.</p>';
$string['check_vendordir_info'] = 'ينبغي أن لا يكون مجلد البائع متواجداً في المواقع الإنتاجية.';
$string['check_vendordir_name'] = 'مجلد البائع';
$string['check_webcron_details'] = '<p>تشغيل مشغل الوظائف الدورية من مستعرض الويب قد يكشف معلومات بالغة الأهمية إلى أشخاص مجهولين. من الموصى به الاقتصار على طلب مشغل الوظائف الدورية عبر سطر الأوامر حصراً أو وضع كلمة مرور له عند الوصول إليه عبر الويب.</p>';
$string['check_webcron_name'] = 'مشغل الوظائف الدورية للويب';
$string['check_webcron_ok'] = 'لا يمكن للمستخدمين المجهولين الوصول إلى مشغل الوظائف الدورية.';
$string['check_webcron_warning'] = 'يمكن للمستخدمين المجهولين الوصول إلى مشغل الوظائف الدورية.';
$string['configuration'] = 'التهيئة';
$string['description'] = 'الوصف';
$string['details'] = 'التفاصيل';
$string['eventreportviewed'] = 'تقرير تدقيقات الأمان تمت معاينته';
$string['issue'] = 'المشكلة';
$string['pluginname'] = 'تدقيقات الأمان';
$string['privacy:metadata'] = 'إن ملحق استعراض الأمان لا يخزن أي بيانات شخصية.';
$string['security:view'] = 'معاينة تقرير الأمان';
$string['timewarning'] = 'معالجة البيانات قد يستغرق وقتاً طويلاً، كن صبوراً لطفاً...';
