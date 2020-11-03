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
 * Strings for component 'url', language 'ar', branch 'MOODLE_38_STABLE'
 *
 * @package   url
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['chooseavariable'] = 'اختر المتغير...';
$string['clicktoopen'] = 'اضغط الوصلة {$a} لفتح المورد.';
$string['configdisplayoptions'] = 'قم بتحديد كافة الخيارات التي يجب أن تكون متاحة، لن  يتم تعديل الإعدادات الموجودة. قم بالضغط على CTRL  لتحديد حقول متعددة.';
$string['configframesize'] = 'عندما يتم عرض صفحة ويب أو ملف داخل الإطار، تُمثِّل هذه القيمة الارتفاع (بالبكسل) من الإطار العلوي (الذي يحتوي على التنقل).';
$string['configrolesinparams'] = 'فعِّل هذا الخيار  إذا كنت ترغب بتضمين أسماء الأدوار المعدلة حسب اللغة ضمن قائمة عوامل المتغيرات المتاحة.';
$string['configsecretphrase'] = 'هذه العبارة السرية تُتسعمل لتوليد قيمة رمزية مشفرة يمكن إرسالها إلى أي مخدم بمثابة عامل. يتم توليد الترميز المشفر باستعمال قيمة md5 لعنوان IP الحالي للمستخدم ملحقاً بعبارتك السرية. بمعنى آخر، الرمز = md5(IP.العبارة السرية). لطفاً، لاحظ أن ذلك غير جدير بالثقة لأن عنوان IP قد يتغير وهو غالباً ما يكون مشتركاً بين حاسبات مختلفة.';
$string['contentheader'] = 'المحتوى';
$string['createurl'] = 'أنشئ الرابط الإلكتروني';
$string['displayoptions'] = 'خيارات العرض المُتاحة';
$string['displayselect'] = 'عرض';
$string['displayselectexplain'] = 'اختر نوع العرض، للأسف ليس كل أنواع العرض تكون مناسبة لجميع عناوين الروابط الإلكترونية.';
$string['displayselect_help'] = 'هذا الإعداد، جنباً إلى جنب مع نوع ملف الرابط الالكتروني وما إذا كان المتصفح يسمح بالتضمين، يحدد كيفية عرض الرابط الالكتروني. ويمكن أن تشمل الخيارات:

* تلقائي - يتم اختيار أفضل عرض لعنوان الرابط الالكتروني تلقائياً
* تضمين - يتم عرض عنوان الرابط الالكتروني ضمن الصفحة أسفل شريط التنقل جنباً إلى جنب مع وصف الرابط الالكتروني وأي كتل
* فتح - يتم عرض عنوان الرابط الالكتروني فقط في نافذة المتصفح
* في نافذة منبثقة - يتم عرض عنوان الرابط الالكتروني في نافذة جديدة للمتصفح دون القوائم أو شريط العنوان
* في إطار - يتم عرض الرابط الالكتروني ضمن إطار أسفل شريط التنقل ووصف الرابط الالكتروني
* نافذة جديدة - يتم عرض عنوان الرابط الالكتروني في نافذة متصفح جديدة مع القوائم وشريط العنوان';
$string['externalurl'] = 'رابط إلكتروني خارجي';
$string['framesize'] = 'ارتفاع الإطار';
$string['indicator:cognitivedepth'] = 'الرابط معرفياً';
$string['indicator:cognitivedepthdef'] = 'الرابط معرفياً';
$string['indicator:cognitivedepthdef_help'] = 'لقد وصل المشارك إلى هذه النسبة المئوية من المشاركة المعرفية التي وفرتها موارد الرابط خلال فترة التحليل هذه (المستويات = لا معاينة، معاينة)';
$string['indicator:cognitivedepth_help'] = 'هذا المؤشر مبني على عمق الحالة المعرفية التي وصلها الطالب في مورد الرابط.';
$string['indicator:socialbreadth'] = 'الرابط إجتماعياً';
$string['indicator:socialbreadthdef'] = 'الرابط إجتماعياً';
$string['indicator:socialbreadthdef_help'] = 'لقد وصل المشارك إلى هذه النسبة المئوية من المشاركة الاجتماعية التي وفرتها موارد الرابط خلال فترة التحليل هذه (المستويات = لا مشاركة، المشاركة منفرداً)';
$string['indicator:socialbreadth_help'] = 'هذا المؤشر مبني على عمق التوسع الاجتماعي الذي وصله الطالب في مورد الرابط.';
$string['invalidstoredurl'] = 'لا يمكن عرض هذا المصدر، عنوان الرابط الإلكتروني غير صالح.';
$string['invalidurl'] = 'عنوان الرابط الإلكتروني المُدخل غير صحيح';
$string['modulename'] = 'رابط الكتروني';
$string['modulename_help'] = 'وحدة الرابط الإلكتروني تمكن المُعلِّم من تقديم رابط لعنوان في الانترنت باعتباره مصدراً للمساق. ويمكن ربط كل ما هو متاح مجاناً على شبكة الإنترنت، مثل المستندات والصور؛ ولا يجب أن يكون العنوان هو الصفحة الرئيسية للموقع. يمكن نسخ العنوان الإلكتروني لصفحة ويب معينة ولصقه، أو يمكن للمُعلِّم استعما مُنتقي الملف ومن ثمَّ اختيار رابط من مستودع مثل Flickr أو يوتيوب أو ويكيميديا (اعتماداً على نوع المستودعات التي تمَّ تفعيلها في الموقع).

هناك عدد من خيارات العرض للرابط إلكتروني، مثل عرض الرابط مُضمَّناً أو فتحه في نافذة جديدة، وخيارات متقدمة لنقل المعلومات، مثل اسم الطالب، إلى عنوان الرابط الإلكتروني إذا لزم الأمر.

لاحظ أن عناوين الروابط الإلكترونية يمكن أن تضاف أيضاً إلى أي مصدر أو نشاط آخر من خلال محرر النصوص.';
$string['modulenameplural'] = 'روابط الكترونية';
$string['page-mod-url-x'] = 'أي صفحة لوحدة الرابط الالكتروني';
$string['parameterinfo'] = '&amp;parameter=variable';
$string['parametersheader'] = 'متغيرات الرابط الالكتروني';
$string['parametersheader_help'] = 'قد يتم إلحاق بعض متغيرات مودل الداخلية  تلقائياً إلى عنوان الرابط الإلكتروني. اكتب اسمك للمتغير في كل مربع النص (الخانات)، ثم حدد المتغير المطابقة المطلوب.';
$string['pluginadministration'] = 'إدارة وحدة الرابط الإلكتروني';
$string['pluginname'] = 'رابط إلكتروني';
$string['popupheight'] = 'ارتفاع النافذة المُنبثقة (بالبكسل)';
$string['popupheightexplain'] = 'يحدد الارتفاع الافتراضي للنوافذ المنبثقة.';
$string['popupwidth'] = 'عرض النافذة المُنبثقة (بالبكسل)';
$string['popupwidthexplain'] = 'يحدد العرض الافتراضي للنوافذ المنبثقة.';
$string['printintro'] = 'عرض وصف الرابط الالكتروني';
$string['printintroexplain'] = 'هل تريد عرض وصف الرابط الإلكتروني أسفل المحتوى؟ يُرجى الانتباه أنه لبعض أنواع العرض قد لا يتم عرض الوصف حتى لو تم التمكين.';
$string['privacy:metadata'] = 'إن ملحق مورد الرابط لا يخزن أي بيانات شخصية.';
$string['rolesinparams'] = 'تضمين أسماء الأدوار في العوامل';
$string['search:activity'] = 'الرابط';
$string['serverurl'] = 'الرابط الالكتروني للمخدم';
$string['url:addinstance'] = 'إضافة رابط إلكتروني جديد كمصدر';
$string['url:view'] = 'معاينة الرابط الالكتروني';
