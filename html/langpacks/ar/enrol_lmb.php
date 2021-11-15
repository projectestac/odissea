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
 * Strings for component 'enrol_lmb', language 'ar', version '3.11'.
 *
 * @package     enrol_lmb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bannerextractimport'] = 'استيراد XML للافتة';
$string['bannerxmlfolder'] = 'موضع مجلد XML للافتة';
$string['bannerxmlfoldercomp'] = 'إعتبار مجلد XML للافتة بأنه شامل';
$string['bannerxmllocation'] = 'موضع ملف XML للافتة';
$string['bannerxmllocationcomp'] = 'إعتبار ملف XML للافتة بأنه شامل';
$string['consolidateusers'] = 'دمج أسماء المستخدمين الموجودة';
$string['courseshorttitlehelp'] = 'هذا يحتوي على القالب المعد لإنشاء الاسم المختصر للمساق. أنظر أعلاه لمعرفة الوسوم المتاحة.';
$string['coursetitle'] = 'الاسم الكامل للمساق';
$string['coursetitlehelp'] = 'هذا يضم قالب إنشاء الاسم الكامل للمساق.
<p>يمكنك أن تقرر كيفية صياغة الاسم الكامل والاسم المختصر للمساق باستعمال الرموز الآتية. أي ذكر لتلك الرموز في الإعداد سيتم استبداله بما يقابله من معلومات المساق. أي نص ليس من بين هذه الرموز سيترك كما هو.</p>
<p><ul>
<li>[SOURCEDID] - مثل [CRN].[TERM]<br />
<li>[CRN] - رقم المساق/المقطع<br />
<li>[TERM] - رمز الفصل الدراسي<br />
<li>[TERMNAME] - الاسم الكامل للفصل الدراسي<br />
<li>[LONG] - مثل [DEPT]-[NUM]-[SECTION]<br />
<li>[FULL] - العنوان الكامل للمساق<br />
<li>[RUBRIC] - مثل [DEPT]-[NUM]<br />
<li>[DEPT] - رمز القسم المختصر<br />
<li>[NUM] - رمز القسم العائد للمساق<br />
<li>[SECTION] - رقم المقطع العائد للمساق<br />
</ul></p>
<p>مثال: الإعداد \'[RUBRIC]-[CRN]-[FULL]\' سيبدو بشكل \'ENG-341-12345-English History\' بالنسبة إلى مساق بتلك المعلومات.</p>';
$string['createusersemaildomain'] = 'الاقتصار على إنشاء المستخدمين ذوي العناوين البريدية من هذا المجال';
$string['createusersemaildomainhelp'] = 'إذا كانت هناك قيمة لهذا الإعداد، سيكون للمستخدمين الذين لديهم عناوين بريد الكتروني من المجال المحدد فقط حسابات مولدة لهم من قبل وحدة LMB.';
$string['cronunhidedays'] = 'إرفع الإخفاء عند هذا العدد من الأيام قبل بدء المقرر الدراسي';
$string['cronunhidedayshelp'] = 'هذا هو عدد الأيام التي يُرفع فيها إخفاء المقرر الدراسي قبل بدئه. ضعه على 0 ليتم رفع إخفاء المقرر في يوم بدئه.';
$string['forcetitle'] = 'فرض اسم المساق عند التحديث';
$string['ignoredomaincase'] = 'تجاهل الحروف الكبيرة للمجال';
$string['ignoredomaincasehelp'] = 'إجعل مقارنة المجال حساسة لحالة الأحرف.';
$string['ignoreusernamecase'] = 'إجعل أسماء المستخدمين بحروف صغيرة';
$string['ignoreusernamecasehelp'] = 'سيتم تحويل كل أسماء المستخدمين إلى الحروف الصغيرة عند تحديد هذا الخيار.
مودل يتطلب عادةً استعمال الحروف الصغيرة في أسماء المستخدمين.';
$string['logtolocation'] = 'موضع مخرجات ملف الوقوعات (فارغ ليكون بلا تسجيل للوقوعات)';
$string['nicknamehelp'] = 'إذا كان اسم العائلة متضمنًا لنصوص XML، استعمله بدلاً من الاسم الأول للاسم الصحيح.';
$string['page_backfillenddates'] = 'إعادة إملاء تواريخ إنتهاء المقررات الدراسية';
$string['usernamesourcehelp'] = 'هذا يقرر ما سيكون عليه اسم المستخدم بالنسبة إلى المستخدمين المنشأة حساباتهم
<ul>
<li>عنوان البريد الالكتروني الكامل: العنوان البريدي بأكمله يستعمل بمثابة اسم المستخدم.
<li>اسم البريد (قبل @): استعمل جزء عنوان البريد الالكتروني الذي قبل @.
<li>useridtype - مُعرَّف الدخول: استعمل القيمة المعطاة في وسم مُعرَّف المستخدم المعلمة  \'Login ID\'.
<li>useridtype - SCTID: استعمل القيمة المعطاة في وسم مُعرَّف المستخدم المعلمة \'SCTID\'.
<li>useridtype - مُعرَّف البريد: استعمل القيمة المعطاة في وسم مُعرَّف المستخدم المعلمة \'Email ID\'.
<li>useridtype - غيره: استعمل القيمة المعطاة في وسم مُعرَّف المستخدم المعلمة كما هو مشار إليه في مربع النص.
</ul>';
$string['whitelist'] = 'القائمة البيضاء';
$string['xlsshorttitlehelp'] = 'هذا يحتوي على القالب المعد لإنشاء الاسم المختصر للمساق بالنسبة للمساقات المدرجة في القائمة. أنظر وصف العنوان الكامل للقائمة المدرجة لمعرفة التفاصيل.';
$string['xlstitle'] = 'الاسم الكامل للمساق المدرج في القائمة';
$string['xlstitledivider'] = 'مُقسِّم الاسم الكامل';
$string['xlstitledividerhelp'] = 'هذه هي الجملة التي سيتم وضعها بين كل جملة للأعضاء المعرفين في \'مكرر الاسم الكامل\'.
<p>يوضع \'فاصل الاسم\' بين كل \'مكرر الاسم\'/</p>
<p>ينبغي أن لا يحتوي \'فاصل الاسم\' على أي رموز تعويضية.</p>
<p>مثال: لنقل بأن لديك مساقين، 12345.200710 و 54321.200710، وهما مدرجان بالتقاطع بالرمز المتقاطع XLSAA200710. إذا جعلت \'الاسم الكامل للمساق المدرج بالتقاطع\' بالشكل \'[XLSID] - [REPEAT]\'، \'مكرر الاسم الكامل\' بالشكل \'[CRN]\'، و \'فاصل الاسم الكامل\' بالشكل \' / \'، فسيكون العنوان الكامل للمساق المدرج بالتقاطع \'XLSAA200710 - 12345 / 54321\'.</p>';
