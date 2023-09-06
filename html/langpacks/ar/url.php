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
 * Strings for component 'url', language 'ar', version '4.1'.
 *
 * @package     url
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['chooseavariable'] = 'اختر المتغير...';
$string['clicktoopen'] = 'اضغط الوصلة {$a} لفتح المصدر.';
$string['configdisplayoptions'] = 'قم بتحديد كافة الخيارات التي يجب أن تكون متاحة، لن  يتم تعديل الإعدادات الموجودة. قم بالضغط على CTRL  لتحديد حقول متعددة.';
$string['configframesize'] = 'عند عرض صفحة ويب أو ملف محمل ضمن إطار، هذه القيمة هي الارتفاع (بالبكسل) للإطار العلوي (الذي يحتوي على أدوات التنقل).';
$string['configrolesinparams'] = 'هل ينبغي لأسماء الأدوار المعدلة (من إعدادات المساق) أن تتاح بمثابة متغيرات لعوامل عنوان الرابط؟';
$string['configsecretphrase'] = 'هذه العبارة السرية تُستعمل لتوليد قيمة رمزية مشفرة يمكن إرسالها إلى أي مخدم بمثابة عامل. يتم توليد الترميز المشفر باستعمال قيمة md5 لعنوان IP الحالي للمستخدم ملحقاً بعبارتك السرية. بمعنى آخر، الرمز = md5(IP.العبارة السرية). لطفاً، لاحظ أن ذلك غير جدير بالثقة لأن عنوان IP قد يتغير وهو غالباً ما يكون مشتركاً بين حاسبات مختلفة.';
$string['contentheader'] = 'المحتوى';
$string['createurl'] = 'أنشئ الرابط الإلكتروني';
$string['displayoptions'] = 'خيارات العرض المُتاحة';
$string['displayselect'] = 'عرض';
$string['displayselect_help'] = 'هذا الإعداد، جنباً إلى جنب مع نوع ملف الرابط الالكتروني وما إذا كان المتصفح يسمح بالتضمين، يحدد كيفية عرض الرابط الالكتروني. ويمكن أن تشمل الخيارات:

* تلقائي - يتم اختيار أفضل عرض لعنوان الرابط الالكتروني تلقائياً
* تضمين - يتم عرض عنوان الرابط الالكتروني ضمن الصفحة أسفل شريط التنقل جنباً إلى جنب مع وصف الرابط الالكتروني وأي كتل
* فتح - يتم عرض عنوان الرابط الالكتروني فقط في نافذة المتصفح
* في نافذة منبثقة - يتم عرض عنوان الرابط الالكتروني في نافذة جديدة للمتصفح دون القوائم أو شريط العنوان
* في إطار - يتم عرض الرابط الالكتروني ضمن إطار أسفل شريط التنقل ووصف الرابط الالكتروني
* نافذة جديدة - يتم عرض عنوان الرابط الالكتروني في نافذة متصفح جديدة مع القوائم وشريط العنوان';
$string['displayselectexplain'] = 'اختر نوع العرض، للأسف ليس كل أنواع العرض تكون مناسبة لجميع عناوين الروابط الإلكترونية.';
$string['externalurl'] = 'رابط إلكتروني خارجي';
$string['framesize'] = 'إرتفاع الإطار';
$string['indicator:cognitivedepth'] = 'الرابط معرفياً';
$string['indicator:cognitivedepth_help'] = 'هذا المؤشر مبني على عمق الحالة المعرفية التي وصلها الطالب في مورد الرابط.';
$string['indicator:cognitivedepthdef'] = 'الرابط معرفياً';
$string['indicator:cognitivedepthdef_help'] = 'لقد وصل المشارك إلى هذه النسبة المئوية من المشاركة المعرفية التي وفرتها موارد الرابط خلال فترة التحليل هذه (المستويات = لا معاينة، معاينة)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'الرابط إجتماعياً';
$string['indicator:socialbreadth_help'] = 'هذا المؤشر مبني على عمق التوسع الاجتماعي الذي وصله الطالب في مورد الرابط.';
$string['indicator:socialbreadthdef'] = 'الرابط إجتماعياً';
$string['indicator:socialbreadthdef_help'] = 'لقد وصل المشارك إلى هذه النسبة المئوية من المشاركة الاجتماعية التي وفرتها موارد الرابط خلال فترة التحليل هذه (المستويات = لا مشاركة، المشاركة منفرداً)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['invalidstoredurl'] = 'لا يمكن عرض هذا المصدر، عنوان الرابط الإلكتروني غير صالح.';
$string['invalidurl'] = 'عنوان الرابط الإلكتروني المُدخل غير صحيح';
$string['modulename'] = 'رابط الكتروني';
$string['modulename_help'] = 'وحدة الرابط الالكتروني تمكن المُعلِّم من تقديم رابط لعنوان في الانترنت باعتباره مصدرًا للمساق. يمكن ربط كل ما هو متاح مجاناً على شبكة الإنترنت، مثل المستندات والصور؛ ولا يجب أن يكون العنوان هو الصفحة الرئيسية للموقع. يمكن نسخ العنوان الالكتروني لصفحة ويب معينة ولصقه، أو يمكن للمُعلِّم استعمال مُنتقي الملفات ومن ثمَّ اختيار رابط من مستودع مثل Flickr أو يوتيوب أو ويكيميديا (اعتماداً على نوع المستودعات التي تمَّ تفعيلها في الموقع).

هناك عدد من خيارات العرض للرابط الالكتروني، مثل عرض الرابط مُضمَّناً أو فتحه في نافذة جديدة، وخيارات متقدمة لنقل المعلومات، مثل اسم الطالب إلى عنوان الرابط الالكتروني إذا لزم الأمر.

لاحظ أن عناوين الروابط الالكترونية يمكن أن تضاف أيضاً إلى أي مصدر أو نشاط آخر من خلال محرر النصوص.';
$string['modulename_link'] = 'mod/url/view';
$string['modulenameplural'] = 'روابط الكترونية';
$string['page-mod-url-x'] = 'أي صفحة لوحدة الرابط الالكتروني';
$string['parameterinfo'] = '&amp;parameter=variable';
$string['parametersheader'] = 'متغيرات الرابط الالكتروني';
$string['parametersheader_help'] = 'هذا المقطع يسمح لك بتمرير معلومات داخلية كجزء من عنوان الرابط. هذا مفيد إذا كان الرابط هو صفحة ويب تفاعلية تتقبل معاملات، وأنت تريد تمرير شيء ما، كاسم المستخدم الحالي، مثلاً. أدخل اسم معامل الرابط في مربع النص، ثم حدد متغير الموقع الذي يقابله.';
$string['pluginadministration'] = 'إدارة وحدة الرابط الإلكتروني';
$string['pluginname'] = 'رابط إلكتروني';
$string['popupheight'] = 'ارتفاع النافذة المُنبثقة (بالبكسل)';
$string['popupheightexplain'] = 'يحدد الارتفاع الافتراضي للنوافذ المنبثقة.';
$string['popupwidth'] = 'عرض النافذة المُنبثقة (بالبكسل)';
$string['popupwidthexplain'] = 'يحدد العرض الافتراضي للنوافذ المنبثقة.';
$string['printintro'] = 'عرض وصف الرابط الالكتروني';
$string['printintroexplain'] = 'هل تريد عرض وصف الرابط الإلكتروني أسفل المحتوى؟ يُرجى الانتباه أنه لبعض أنواع العرض قد لا يتم عرض الوصف حتى لو تم التمكين.';
$string['privacy:metadata'] = 'إن ملحق مورد الرابط لا يخزن أي بيانات شخصية.';
$string['rolesinparams'] = 'أسماء الأدوار بمثابة عوامل عنوان الرابط';
$string['search:activity'] = 'الرابط';
$string['serverurl'] = 'الرابط الالكتروني للمخدم';
$string['url:addinstance'] = 'إضافة رابط إلكتروني جديد كمصدر';
$string['url:view'] = 'معاينة الرابط الالكتروني';
