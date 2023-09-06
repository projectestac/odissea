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
 * Strings for component 'block_xp', language 'ar', version '4.1'.
 *
 * @package     block_xp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addinstructions'] = 'إضافة المزيد من المعلومات';
$string['cachedef_ruleevent_eventslist'] = 'قائمة بعض الأحداث';
$string['cannotshowblockconfig'] = 'أقوم عادة بعرض إعدادات الظهور هنا، ولكنني لم أتمكن من العثور على كتلتك. لتغيير مظهر الكتلة، توجه إلى [هنا] ({$a}) (أو حيثما أضفت الكتلة)، قم بتشغيل وضع التحرير، واتبع خيار "التهيئة" في القائمة المنسدلة للكتلة. إن لم تجد الكتلة، أضفها إلى مساقك مجددًا.';
$string['cannotshowblockconfigsys'] = 'سأقوم عادة بعرض إعدادات المظهر هنا، ولكنني لم أتمكن من العثور على كتلتك. قد تكون مفقودة من [front page]({$a->fp}) ومن [default dashboard] ({$a->mysys}) لمستخدميك، أو موجودة في كليهما. لتحرير الإعدادات من هنا، تأكد من كونها تظهر في واحدة منهما فقط.';
$string['configdescription_help'] = 'وصف موجز يُعرض في الكتلة، تحت مستوى الطالب. يمتلك الطلاب إمكانية صرف الرسالة، وفي تلك الحالة، لن يشاهدوها مرة أخرى.';
$string['configtitle'] = 'العنوان';
$string['configtitle_help'] = 'عنوان الكتلة.';
$string['description'] = 'الوصف';
$string['enablelevelupnotif_help'] = 'عند ضبطه على \'نعم\'، سيتم عرض نافذة منبثقة للطلاب لتهنئتهم بالمستوى الجديد الذي وصلوه.';
$string['enablexpgain_help'] = 'عند جعله \'لا\'، لن يحصل أحد على نقاط في المساق. هذا مفيد لتجميد الحصصول على النقاط، أو لتمكينها في وقت معين.

يرجى ملاحظة أن ذلك يمكن التحكم به على مستوى أدق باستعمال الإمكانية _block/xp:earnxp_.';
$string['errorcontextcoursemismatchforwholesite'] = 'إن رابط صفحة <em>الترقي!</em> هذه لا تتوافق مع التهيئة الحالية للإضافة. التهيئة الحالية عندك تعلن بأن <em>الترقي!</em> يُستعمل \'لكل الموقع\'، ولكن هذه الصفحة تتوقع استعماله \'حسب المساق\'. يرجى <a href="{$a->nexturl}">النقر هنا</a> للانتقال إلى الصفحة الصحيحة. إبحث عن الإعداد \'block_xp_context\' إذا أردت تغيير التهيئة الخاصة بك.';
$string['errorcontextcoursemismatchpercourse'] = 'إن رابط صفحة <em>الترقي!</em> هذه لا تتوافق مع التهيئة الحالية للإضافة. التهيئة الحالية عندك تعلن بأن <em>الترقي!</em> يُستعمل \'لكل مقرر\'، ولكن هذه الصفحة تتوقع استعماله على مستوى \'كل الموقع\'. هذا غالباً منشؤه <em>كتلة</em> أضيفت إلى دفة القيادة أو صفحة الواجهة في أثناء تهيئة مختلفة. ينبغي عليك إزالة الكتلة من الصفحات اللاحقة، واستعمالها من داخل المقررات الدراسية الفردية فقط.';
$string['errorformvalues'] = 'هناك بعض الأخطاء في قِيَم النموذج، يرجى إصلاحها.';
$string['errorunknownevent'] = 'خطأ: حدث مجهول';
$string['event_user_leveledup'] = 'مستخدم مرتبته ترقَّت';
$string['eventis'] = 'الحدث هو {$a}';
$string['eventname'] = 'اسم الحدث';
$string['eventproperty'] = 'خاصية الحدث';
$string['eventsrules'] = 'قواعد الحدث';
$string['eventsrules_help'] = 'هذه الإضافة يستعمل الأحداث لمنح النقاط سمة الإجراءات التي على الطلاب القيام بها.
يمكنك استعمال النموذج أدناه لإضافة القواعد الخاصة بك وتعديل القواعد الافتراضية.

من الموصى به مراجعة صفحة وقوعات الإضافة _Log_ page لمعرفة أيّ الأحداث تم تحفيزها عندما يقوم الطلاب بإجراءات في المساق.

موارد إضافية:

- [كيفية احتساب نقاط الخبرة](https://levelup.plus/docs/article/how-are-experience-points-calculated?ref=blockxp_help)
- [قواعد تشخيص المشاكل](https://levelup.plus/docs/article/event-rule-not-working?ref=blockxp_help)';
$string['eventtime'] = 'وقت الحدث';
$string['for1day'] = 'ليوم واحد';
$string['for3days'] = 'لثلاثة أيام';
$string['forthewholesite'] = 'للموقع بأكمله';
$string['invalidxp'] = 'قيمة النقاط غير صالحة';
$string['keeplogs'] = 'الإبقاء على سجلات الوقوعات';
$string['leveldesc'] = 'وصف المستوى';
$string['maxactionspertime'] = 'أقصى عدد من الإجراءات ضمن الإطار الزمني';
$string['maxactionspertime_help'] = 'العدد الأقصى من الإجراءات التي ستحتسب لها نقاط خلال الإطار الزمني المعطى. سيتم تجاهل أي إجراءات لاحقة. عندما تكون هذه القيمة خالية أو مساوية لصفر، لن تؤخذ بعين الاعتبار.';
$string['name'] = 'الاسم';
$string['nologsrecordedyet'] = 'لم يتم توثيق سجلات الوقوعات بعد.';
$string['participant'] = 'المشارك';
$string['perpagecolon'] = 'لكل صفحة:';
$string['privacy:metadata:log:eventname'] = 'اسم الحدث';
$string['privacy:metadata:prefladderpagesize'] = 'حجم الصفحة المفضل للمستخدم عند معاينة السُّلم';
$string['privacy:path:logs'] = 'سجلات الوقوعات';
$string['property:eventname'] = 'اسم الحدث';
$string['rulecm'] = 'النشاط أو المورد';
$string['ruleevent'] = 'حدث مُعيَّن';
$string['ruleeventdesc'] = 'الحدث هو \'{$a->eventname}\'';
$string['rulepropertydesc'] = 'الخاصية \'{$a->property}\' {$a->compare} \'{$a->value}\'.';
$string['shortcode:xpiflevel_help'] = 'إرجع إلى الأمثلة أدناه لتنسيق هذا الرمز المختصر. عند تحديد المستوى بشكل صارم، سيتم عرض المحتوى بغض النظر عن القواعد الأخرى.
ينبغي أن تتطابق The _greater_ and _less than_ rules جميعاً ليتم عرض المحتوى. تنبه لأن ذلك قد يؤدي أحياناً إلى عدم عرض أي محتوى!
لاحظ أن المعلمين، أو سواهم من المستخدمين الذين لهم إمكانية التحرير، سيشاهدون كل شيء دائماً.

```
[xpiflevel 1 3 5]
    تُعرض إذا كان مستوى المستخدم بالضبط 1، 3 أو 5.
[/xpiflevel]

[xpiflevel >3]
    تُعرض إذا كان مستوى المستخدم أكبر من 3.
[/xpiflevel]

[xpiflevel >=3]
    تُعرض إذا كان مستوى المستخدم أكبر من أو مساوياً 3.
[/xpiflevel]

[xpiflevel >=10 <20 30]
    تُعرض إذا كان مستوى المستخدم أكبر من أو مساوياً 10 وحصراً أقل من 20
    أو إذا كان مساوياً بالضبط 30.
[/xpiflevel]

[xpiflevel <=10 >=20]
    لا تُعرَض مطلقاً لأن مستوى المستخدم لا يمكن أبداً أن يكون أقل من أو مساوياً 10 وأكثر من أو مساوياً 20.
[/xpiflevel]
```

لاحظ أن تلك الرموز المختصرة لا يمكن جعلها متداخلة بعضها مع البعض الآخر.';
$string['taskcollectionloggerpurge'] = 'تطهير سجلات وقوعات المجموعة';
$string['timebetweensameactions'] = 'الوقت المطلوب ما بين الإجراءات المتطابقة';
$string['timebetweensameactions_help'] = 'الوقت الأدنى المطلوب قبل قبول الإجراء الذي سبق حدوثه مرة أخرى. يُعتبر الإجراء متطابق إذا وُضع في نفس السياق وعلى نفس المكون، فقراءة منشور المنتدى سيعتبر متطابق مع قراءة لاحقة تجري لنفس المنشور مرة أخرى. عندما تكون هذه القيمة خالية أو مساوية لصفر، لن تؤخذ بعين الاعتبار.';
$string['timeformaxactions'] = 'الإطار الزمني لأقصى عدد من الإجراءات';
$string['unknowneventa'] = 'حدث مجهول ({$a})';
$string['value'] = 'القيمة';
$string['valuessaved'] = 'تم حفظ القِيَم بنجاح.';
$string['xp:addinstance'] = 'إضافة كتلة جديدة';
$string['xp:view'] = 'معاينة الكتلة والصفحات المتعلقة بها';
$string['xp:viewlogs'] = 'معاينة سجلات الوقوعات';
