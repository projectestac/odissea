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
 * Strings for component 'enrol_imsenterprise', language 'ar', version '4.1'.
 *
 * @package     enrol_imsenterprise
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aftersaving...'] = 'بمجرد حفظ إعداداتك، قد ترغب في';
$string['allowunenrol'] = 'إسمح لبيانات IMS بإلغاء انضمام الطلبة والمعلمين';
$string['allowunenrol_desc'] = 'عند تمكينه، سيكون بالإمكان إلغاء الانضمامات في المقررات الدراسية بناءً على بيانات المؤسسة';
$string['basicsettings'] = 'الإعدادات الأساسية';
$string['categoryidnumber'] = 'السماح بالرمز التعريفي للتصنيف';
$string['categoryidnumber_desc'] = 'عند تمكينه، سيقوم IMS المؤسسة بإنشاء التصنيف بالرمز التعريفي.';
$string['categoryseparator'] = 'فاصلة التصنيف';
$string['categoryseparator_desc'] = 'مطلوب عند تمكين \'الرمز التعريفي للتصنيف\'. إنه الحرف الفاصل ما بين اسم التصنيف ورمزه التعريفي.';
$string['coursesettings'] = 'خيارات بيانات مساق';
$string['createnewcategories'] = 'أنشئ تصنيفات جديدة للمساقات (مخفية) إذا تعذر العثور عليها في مودل';
$string['createnewcategories_desc'] = 'إذا كان عنصر <org><orgunit> موجوداً في البيانات القادمة للمقرر ، فسيتم استعمال محتوياته لتحديد التصنيف إن كان المقرر سيتم إنشاؤه من الصفر. الإضافة لن تقوم بإعادة تصنيف المقررات الدراسية الموجودة حالياً.

إذا لم يتم العثور على تصنيف بالتسمية المطلوبة، فسيتم إنشاء تصنيف مخفي.';
$string['createnewcourses'] = 'أنشئ مساقات جديدة (مخفية) إذا تعذر العثور عليها في مودل';
$string['createnewcourses_desc'] = 'عند تمكينه، فسيكون بإمكان إضافة انضمام مؤسسات IMS إنشاء مساقات جديدة لأي مما تجده في بيانات IMS ولكنه غير موجود في قاعدة بيانات مودل. أي مساقات منشأة ستكون مخفية مبدئياً.';
$string['createnewusers'] = 'أنشئ حسابات مستخدمين لمن ليس لهم حسابات في مودل';
$string['createnewusers_desc'] = 'بيانات انضمام مؤسسة IMS عادة ما تصف مجموعة من المستخدمين. عند تمكينها، سيكون بالإمكان إنشاء حسابات لأي مستخدمين غير موجودين في قاعدة بيانات مودل.

يتم البحث عن المستخدمين أولاً باستعمال رموزهم التعريفية، وثانياً بواسطة اسم المستخدم في مودل. كلمات المرور لا يتم استيرادها من قبل ملحق مؤسسة IMS. يوصى باستعمال ملحق مصادقة للمصادقة على المستخدمين.';
$string['cronfrequency'] = 'تكرار المعالجة';
$string['deleteusers'] = 'إحذف حسابات المستخدمين عند تحديد ذلك في بيانات IMS';
$string['deleteusers_desc'] = 'عند تمكينه، سيكون بإمكان بيانات انضمام IMS تقرير حذف حسابات المستخدمين (إذا تم وضع القيمة 3 في العلم "recstatus"، والذي يعني حذف الحساب). كما هو معمول به قياسياً في مودل، فإن سجل المستخدم لا يتم حذفه فعلياً من قاعدة بيانات مودل، ولكن سيتم وضع علم للدلالة على أنه محذوف.';
$string['disableenrolmentandremoveallroles'] = 'تعليق الانضمام وإزالة الأدوار';
$string['disableenrolonly'] = 'تعليق الانضمام فقط';
$string['doitnow'] = 'نفذ استيراد مؤسسة IMS الآن';
$string['emptyattribute'] = 'أتركه فارغاً';
$string['filelockedmail'] = 'الملف النصي الذي تستعمله للإنشاء الانضمامات المبنية على ملف IMS ({$a}) لا يمكن حذفه من قبل مهمة الوظائف المجدولة. هذا عادة معناه وجود خطأ في صلاحياته. لطفاً، قم بإصلاح الصلاحيات ليتمكن مودل من حذف الملف، أو بخلافه، قد تعاد محاولة معالجته مراراً.';
$string['filelockedmailsubject'] = 'خطأ هام: ملف الانضمام';
$string['fixcasepersonalnames'] = 'تغيير الأسماء الشخصية إلى حالة العنوان (الحرف الأول كبير)';
$string['fixcaseusernames'] = 'تغيير أسماء المستخدمين إلى الحروف الصغيرة';
$string['ignore'] = 'تجاهل';
$string['importimsfile'] = 'استورد ملف مؤسسة IMS';
$string['imsenterprise:config'] = 'تهيئة عينات انضمام مؤسسة IMS';
$string['imsenterprisecrontask'] = 'معالجة ملف الانضمام';
$string['imsrolesdescription'] = 'مواصفات مؤسسة IMS تتضمن 8 أنواع أدوار مختلفة. لطفاً، إختر كيفية تعيينها في مودل، بما في ذلك احتمالية تجاهل أي منها.';
$string['location'] = 'موقع الملف';
$string['logtolocation'] = 'موضع مخرجات ملف الوقوعات (فارغ ليكون بلا تسجيل للوقوعات)';
$string['mailadmins'] = 'احط المدير عبر البريد الإلكتروني';
$string['mailusers'] = 'احط المستخدم عبر البريد الإلكتروني';
$string['messageprovider:imsenterprise_enrolment'] = 'رسائل انضمام مؤسسة IMS';
$string['miscsettings'] = 'متنوعات';
$string['nestedcategories'] = 'إسمح بالتصنيفات المتداخلة';
$string['nestedcategories_desc'] = 'عند تمكينه، سيقوم ملف مؤسسة IMS بإنشاء تصنيفات متداخلة';
$string['noaction'] = 'لا  إجراء';
$string['pluginname'] = 'ملف مؤسسة IMS';
$string['pluginname_desc'] = 'هذه الطريقة ستقوم بالتحقق دورياً من ملف نصي ذي صيغة خاصة في الموضع الذي تحدده وتقوم بمعالجته. ينبغي أن يراعي الملف مواصفات مؤسسة IMS متضمناً عناصر XML للأشخاص، المجموعات، والعضوية .';
$string['privacy:metadata'] = 'إن إضافة انضمام مؤسسة IMS لا تخزن أي بيانات شخصية.';
$string['processphoto'] = 'أضف بيانات صورة المستخدم للملف الشخصي';
$string['processphotowarning'] = 'تحذير: من المرجح أن تؤدي معالجة الصور إلى تعريض المخدم إلى حمل عالٍ. من الموصى به عدم تفعيل هذا الخيار إذا كان متوقعاً معالجة صور عدد كبير من الطلبة.';
$string['removeenrolmentandallroles'] = 'حذف الانضمام والأدوار';
$string['restricttarget'] = 'فقط عالج البيانات إذا تم تحديد المقصد الآتي';
$string['restricttarget_desc'] = 'ملف بيانات مؤسسة IMS يمكن توظيفه لأهداف متعددة "targets" - أنظمة إدارة تعليم أو أنظمة أخرى مختلفة ضمن المدرسة/الجامعة. من الممكن أن يصار إلى تحديد الوجهة المقصودة من البيانات ضمن ملف مؤسسة IMS عبر تسمية تلك الأنظمة في وسوم <target> المحتواة في وسم <properties>.

بشكل عام، ليس عليك التفكير بهذا. إترك الإعداد فارغاً وسيقوم مودل دائماً بمعالجة بيانات الملف، بغض النظر عما إذا تم تحديد الهدف منها أم لا. بخلاف ذلك، أدخل الاسم المضبوط الذي سيستعمل داخل الوسم <target>.';
$string['roles'] = 'الأدوار';
$string['settingfullname'] = 'وسم وصف IMS لاسم المساق الكامل';
$string['settingfullnamedescription'] = 'الاسم الكامل هو حقل مطلوب للمساق، ولذلك عليك تعريف وسم الوصف المحدد في ملف مؤسسة IMS';
$string['settingshortname'] = 'وسم وصف IMS للاسم المختصر للمساق';
$string['settingshortnamedescription'] = 'الاسم المختصر هو حقل مطلوب للمساق، ولذلك عليك تعريف وسم الوصف المحدد في ملف مؤسسة IMS';
$string['settingsummary'] = 'وسم وصف IMS لملخص المساق';
$string['settingsummarydescription'] = 'كحقل إختياري، إختر \'أتركه فارغاً\' إذا لم تكن تريد تحديد ملخص للمساق';
$string['sourcedidfallback'] = 'استعمل \'sourcedid\' لمُعرَّف المستخدم إذا تعذر العثور على حقل \'userid\\';
$string['sourcedidfallback_desc'] = 'في بيانات IMS، حقل <sourcedid> يمثل رمز المُعرَّف الدائم للمستخدم بغرض الاستعمال في النظام المصدري. إن حقل <userid> هو حقل منفصل والذي ينبغي أن يحتوي على رمز المُعرَّف المستعمل من قبل المستخدم عند تسجيل دخوله. في حالات عديدة، قد يكون هذان الرمزان شيئاً واحداً - ولكن ليس دائماً.

بعض أنظمة التعليم تفشل في إخراج حقل <userid>. في تلك الحالة، عليك تمكين هذا الإعداد للسماح باستعمال <sourcedid> بمثابة مُعرَّف المستخدم في مودل. بخلاف ذلك، أترك هذا الإعداد معطلاً.';
$string['truncatecoursecodes'] = 'إقتطع رموز المساق إلى هذا الطول';
$string['truncatecoursecodes_desc'] = 'في بعض الحالات، قد يكون لديك رموز مساقات تريد تقنين طولها إلى عدد حروف معين قبل معالجتها. إن كان الحال كذلك، أدخل عدد الحروف في هذا الحقل. بخلافه، أتركه فارغاً ولن يكون هناك أي استقطاع.';
$string['unenrolaction'] = 'إجراء إلغاء الانضمام';
$string['unenrolaction_desc'] = 'الإجراء المتخذ عند إلغاء انضمام المستخدم من المساق (تطبق فقط عند تمكين إعداد إلغاء الانضمام أعلاه).';
$string['updatecourses'] = 'تحديث المساق';
$string['updatecourses_desc'] = 'عند تمكينه، يمكن لإضافة انضمام مؤسسة IMS تحديث أسماء المقررات الدراسية الكاملة والمختصرة (إذا تم وضع قيمة 2 في العلم "recstatus" والذي يعني التحديث).';
$string['updateusers'] = 'تحديث حسابات المستخدمين كما هو محدد في بيانات IMS';
$string['updateusers_desc'] = 'عند تمكينه، يمكن لإضافة انضمام مؤسسة IMS تحديث حسابات المستخدمين (إذا تم وضع قيمة 2 في العلم "recstatus" والذي يعني التحديث).';
$string['usecapitafix'] = 'أشر هذه الخانة إن كنت تستعمل Capita (حيث أن صيغتها من XML مختلفة قليلاً)';
$string['usecapitafix_desc'] = 'نظام بيانات الطلبة المولد من قبل Capita قد عُثر على أنه يحتوي على خطأ خفيف في مخرجاته بصيغة XML. إذا كنت تستعمل Capita، عليك تمكين هذا الخيار - بخلافه، أتركه بلا تأشير.';
$string['usersettings'] = 'خيارات بيانات المستخدم';
$string['zeroisnotruncation'] = '0 معناها بلا استقطاع';
