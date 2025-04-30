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
 * Strings for component 'assignfeedback_pdf', language 'ar', version '4.4'.
 *
 * @package     assignfeedback_pdf
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['annotationhelp'] = 'مساعدة التعليق';
$string['annotationhelp_text'] = '<table>
<thead><tr><th>Control</th><th>مختصر لوحة المفاتيح</th><th>الوصف</th></tr></thead>
<tr><td>{$a->save}</td><td>&nbsp;</td><td>إغلاق الملاحظة بدون توليد ملف رد بصيغة PDF (لاحظ بأن كل الملاحظات يتم حفظها فورًا بمجرد طلب حفظها</td></tr>
 <tr><td>{$a->generate}</td><td>&nbsp;</td><td>توليد ملف PDF ذي ملاحظات للطالب لغرض تنزيله</td></tr>
 <tr><td>العثور على التعليقات</td><td>&nbsp;</td><td>الذهاب مباشرةً إلى تعليق مُدخل سابقًا (في هذا التسليم) وإبرازه.</td></tr>
 <tr><td>إظهار السابق</td><td>&nbsp;</td><td>إظهار التعليقات الصادرة لهذا الطالب من واجب آخر في هذا المساق (في إطار جانبي)</td></tr>
 <tr><td>&lt;-- السابق</td><td>p</td><td>معاينة الصفحة السابقة</td></tr>
 <tr><td>التالي --&gt;</td><td>n</td><td>معاينة الصفحة التالية</td></tr>
 <tr><td>لون الخلفية</td><td>[ and ]</td><td>تغيير لون تعبئة مربع التعليق (متاح أيضًا عبر النقر بزر الماوس الأيمن على التعليق)</td></tr>
 <tr><td>لون الخط</td><td>{ and }</td><td>تغيير لون الملاحظات</td></tr>
 <tr><td>إختر الختم</td><td>&nbsp;</td><td>إختر الختم المستعمل لأداة الختم (يمكن إضافة الأختام الجديدة إلى المجلد \'pix/stamps\' في المخدم)</td></tr>
 <tr><td>{$a->comment}</td><td>c</td><td>أنقر على الصفحة لإضافة مربع تعليق، إطبع فيه التعليق، ثم انقر على الصفحة مجددًا لحفظه. أنقر على التعليق لتحريره، إسحبه لنقله. أنقر بزر الماوس الأيمن لتغيير لونه، حفظه إلى قائمة سريعة أو حذفه (أو إحذف النص لحذفه).</td></tr>
 <tr><td>{$a->line}</td><td>l</td><td>النقر + السحب (أو النقر، النقل، النقر) لرسم خط في الصفحة</td></tr>
 <tr><td>{$a->rectangle}</td><td>r</td><td>النقر + السحب (أو النقر، النقل، النقر) لرسم مستطيل في الصفحة</td></tr>
 <tr><td>{$a->oval}</td><td>o</td><td>النقر + السحب (أو النقر، النقل، النقر) لرسم شكل بيضاوي في الصفحة</td></tr>
 <tr><td>{$a->freehand}</td><td>f</td><td>النقر + السحب لرسم خطوط حرة في الصفحة</td></tr>
 <tr><td>{$a->highlight}</td><td>h</td><td>النقر + السحب (أو النقر، النقل، النقر) لرسم خطوط تأشير شبه شفافة عبر محتوى الصفحة </td></tr>
 <tr><td>{$a->stamp}</td><td>s</td><td>أنقر لإدراج الختم المحدد بالحجم الافتراضي. النقر + السحب لإدراجه بحجم مختلف</td></tr>
 <tr><td>{$a->erase}</td><td>e</td><td>النقر في الملاحظة أو عليها (وليس التعليق) لحذفها</td></tr>
 <tr><td>القائمة السريعة</td><td>&nbsp;</td><td>النقر بزر الماوس الأيمن على الصفحة لإدارج تعليق سبق وأن تم حفظه في \'القائمة السريعة\'. استعمل علامة الضرب \'×\' لحذف عناصر القائمة السريعة غير المرغوب بها.</td></tr>
 </table>';
$string['backtocommentlist'] = 'عودة إلى قائمة التعليقات';
$string['badannotationid'] = 'مُعرَّف التعليق هو لتسليم أو صفحة أخرى';
$string['clearimagecache'] = 'إخلاء خبء صورة الصفحة';
$string['colourgreen'] = 'أخضر';
$string['colourwhite'] = 'أبيض';
$string['commentcolour'] = '[,] - لون خلفية التعليق';
$string['enabled'] = 'إفادة PDF';
$string['enabled_help'] = 'هذا يسمح بوضع التعليقات عبر الإنترنت على ملفات PDF (المسلمة بطريقة التسليم المعتمدة على PDF) مع إعادة الأعمال المؤشرة إلى الطلبة.';
$string['jsrequired'] = 'ينبغي تمكين Javascript في مستعرضك لتعمل وظيفة التعليق على ملفات PDF بشكل صحيح';
$string['keyboardnext'] = 'n - الصفحة التالية';
$string['keyboardprev'] = 'p - الصفحة السابقة';
$string['missingannotationdata'] = 'بيانات التعليق مفقودة';
$string['openlinknewwindow'] = 'فتح الروابط في نافذة جديدة';
$string['opennewwindow'] = 'فتح هذه الصفحة في نافذة جديدة';
$string['pagenumber'] = 'رقم الصفحة';
$string['pagenumbertoobig'] = 'رقم الصفحة المطلوب أكبر من عدد الصفحات ({$a->pageno} > {$a->pagecount})';
$string['pagenumbertoosmall'] = 'رقم الصفحة المطلوبة صغير جداً (<1)';
$string['pdf'] = 'إفادة PDF';
$string['pluginname'] = 'إفادة PDF';
$string['resend'] = 'إعادة إرسال';
$string['savedraft'] = 'حفظ مسودة التعليقات';
$string['viewresponse'] = 'معاينة الاستجابة عبر الإنترنت';
