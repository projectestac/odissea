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
 * Strings for component 'ai', language 'ar', version '4.5'.
 *
 * @package     ai
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptai'] = 'القبول والمتابعة';
$string['action'] = 'الإجراء';
$string['action_generate_image'] = 'توليد الصورة';
$string['action_generate_image_desc'] = 'توليد الصورة بناءً على النص التلقيني.';
$string['action_generate_text'] = 'توليد النص';
$string['action_generate_text_desc'] = 'توليد النص بناءً على النص الملقن.';
$string['action_generate_text_instruction'] = 'ستتلقى إدخالاً نصيًا من المستخدم. مهمتك هي توليد نص بناءً على طلبه. إتبع التعليمات الهامة الآتية:
    1. أعد الملخص كنص عادي فقط.
    2. لا تضمن أي علامات تنسيق، تحيات، أو كلام مبتذل.';
$string['action_summarise_text'] = 'تلخيص النص';
$string['action_summarise_text_desc'] = 'تلخيص محتوى النص في صفحة المساق.';
$string['action_summarise_text_instruction'] = 'ستتلقى إدخالاً نصيًا من المستخدم. مهمتك هي توليد نص بناءً على طلبه. إتبع الإرشادات الآتية:
    1. التركيز: إختصر الجمل الطويلة في نقاط هامة.
    2. التبسيط: إجعل المعلومات المعقدة أسهل للفهم، وبخاصة للمتعلمين.

تعليمات هامة:
    1. أعد الملخص كنص عادي فقط.
    2. لا تضمن أي علامات تنسيق، تحيات، أو كلام مبتذل.
    3. ركز على الوضوح، الإيجاز، وسهولة الوصول.

تأكد من أن الموجز سهل القراءة ويوصل النقاط الأساسية للنص الأصلي بسهولة.';
$string['action_translate_text'] = 'ترجمة النص';
$string['action_translate_text_desc'] = 'ترجمة النص المقدم من لغة إلى أخرى.';
$string['actionsettingprovider'] = 'إعدادات الإجراء {$a}';
$string['actionsettingprovider_desc'] = 'هذه الإعدادات تتحكم بالكيفية التي يقوم بها المزود {$a->providername} بالإجراء
{$a->actionname}.';
$string['ai'] = 'الذكاء الاصطناعي';
$string['aiplacements'] = 'مواضع الذكاء الاصطناعي';
$string['aiproviders'] = 'مزودو الذكاء الاصطناعي';
$string['aiusagepolicy'] = 'سياسة استعمال الذكاء الاصطناعي';
$string['availableplacements'] = 'إختر مواضع إتاحة إجراءات الذكاء الاصطناعي';
$string['availableplacements_desc'] = 'مواضع الذكاء الاصطناعي مسؤولة عن تقرير مكان وكيفية استعمال خدمات الذكاء الاصطناعي ضمن موقعك. يمكنك تحديد أي من الإجراءات سيتوافر في أي موضع عبر الإعدادات.';
$string['availableproviders'] = 'إدارة مزودي الذكاء الاصطناعي المتصلون بموقعك';
$string['availableproviders_desc'] = 'مزودو الذكاء الاصطناعي يضيفون خدمات الذكاء الاصطناعي إلى موقعك عبر
\'الإجراءات\' مثل تلخيص النص وتوليد الصور.<br/>
يمكنك إدارة تلك الإجراءات لكل مزود عبر إعداداته.';
$string['contentwatermark'] = 'منشأة من قبل الذكاء الاصطناعي';
$string['declineaipolicy'] = 'رفض';
$string['manageaiplacements'] = 'إدارة مواضع الذكاء الاصطناعي';
$string['manageaiproviders'] = 'إدارة مزودي الذكاء الاصطناعي';
$string['noproviders'] = 'هذا الإجراء غير متاح. ليس هناك <a href="{$a}">مزودو ذكاء اصطناعي</a> معرفون لهذا الإجراء.';
$string['placement'] = 'الموضع';
$string['placementactionsettings'] = 'الإجراءات';
$string['placementactionsettings_desc'] = 'إجراءات الذكاء الاصطناعي المتاحة لهذا الموضع.';
$string['placementsettings'] = 'الإعدادات الخاصة بالموضع';
$string['placementsettings_desc'] = 'تلك الإعدادات تتحكم بكيفية اتصال الموضع بخدمة الذكاء الاصطناعي والعمليات ذات الصلة.';
$string['privacy:metadata:ai_action_generate_image'] = 'جدول يخزن طلبات توليد الصور المقدمة من قبل المستخدمين';
$string['privacy:metadata:ai_action_generate_image:aspectratio'] = 'نسبة أبعاد الصورة المولدة';
$string['privacy:metadata:ai_action_generate_image:numberimages'] = 'عدد الصور المولدة';
$string['privacy:metadata:ai_action_generate_image:prompt'] = 'عبارة الطلب لتوليد الصورة';
$string['privacy:metadata:ai_action_generate_image:quality'] = 'جودة الصورة المولدة';
$string['privacy:metadata:ai_action_generate_image:revisedprompt'] = 'عبارة الطلب المنقحة للصورة المولدة';
$string['privacy:metadata:ai_action_generate_image:sourceurl'] = 'عنوان الرابط المصدري للصورة المولدة';
$string['privacy:metadata:ai_action_generate_image:style'] = 'نمط الصورة المولدة';
$string['privacy:metadata:ai_action_generate_text'] = 'جدول يخزن طلبات توليد النصوص المقدمة من قبل المستخدمين';
$string['privacy:metadata:ai_action_generate_text:completiontoken'] = 'ترميزات الإكمال المستعملة لتوليد النص';
$string['privacy:metadata:ai_action_generate_text:fingerprint'] = 'الترميز الرقمي الفريد الذي يمثل حالة/إصدار الوحدة ومحتواها';
$string['privacy:metadata:ai_action_generate_text:generatedcontent'] = 'النص الفعلي المولد من قبل وحدة الذكاء الاصطناعي بناءً على النص الملقن';
$string['privacy:metadata:ai_action_generate_text:prompt'] = 'النص التلقيني لطلب توليد النص';
$string['privacy:metadata:ai_action_generate_text:prompttokens'] = 'ترميزات النص التلقيني المستعملة لتوليد النص';
$string['privacy:metadata:ai_action_generate_text:responseid'] = 'مُعرَّف الاستجابة';
$string['privacy:metadata:ai_action_register'] = 'جدول يخزن طلبات الإجراءات المقدمة من قبل المستخدمين';
$string['privacy:metadata:ai_action_register:actionid'] = 'مُعرَّف طلب الإجراء';
$string['privacy:metadata:ai_action_register:actionname'] = 'اسم الإجراء للطلب';
$string['privacy:metadata:ai_action_register:provider'] = 'اسم المزود الذي يتولى الطلب';
$string['privacy:metadata:ai_action_register:success'] = 'حالة طلب الإجراء';
$string['privacy:metadata:ai_action_register:timecompleted'] = 'وقت إكمال الطلب';
$string['privacy:metadata:ai_action_register:timecreated'] = 'وقت إنشاء الطلب';
$string['privacy:metadata:ai_action_register:userid'] = 'مُعرَّف المستخدم الذي قدم الطلب';
$string['privacy:metadata:ai_action_summarise_text'] = 'جدول يخزن طلبات تلخيص النص المقدمة من قبل المستخدمين';
$string['privacy:metadata:ai_action_summarise_text:completiontoken'] = 'ترميزات الإكمال المستعملة في تلخيص النص';
$string['privacy:metadata:ai_action_summarise_text:fingerprint'] = 'الترميز الفريد الذي يمثل الحالة/الإصدار للوحدة ومحتواها';
$string['privacy:metadata:ai_action_summarise_text:generatedcontent'] = 'النص الفعلي المولد من قبل وحدة الذكاء الاصطناعي بناءً على النص الملقن';
$string['privacy:metadata:ai_action_summarise_text:prompt'] = 'النص الخاص بطلب تلخيص النص';
$string['privacy:metadata:ai_action_summarise_text:prompttokens'] = 'ترميزات الطلب المستعملة لتلخيص النص';
$string['privacy:metadata:ai_action_summarise_text:responseid'] = 'مُعرَّف الاستجابة';
$string['privacy:metadata:ai_policy_register'] = 'جدول يخزن حالة سياسة قبول الذكاء الاصطناعي لكل مستخدم';
$string['privacy:metadata:ai_policy_register:contextid'] = 'مُعرَّف السياق الذي تم خزن بياناته';
$string['privacy:metadata:ai_policy_register:timeaccepted'] = 'وقت موافقة المستخدم على سياسة الذكاء الاصطناعي';
$string['privacy:metadata:ai_policy_register:userid'] = 'مُعرَّف المستخدم الذي تم خزن بياناته';
$string['provider'] = 'المزود';
$string['provideractionsettings'] = 'الإجراءات';
$string['provideractionsettings_desc'] = 'حدد الإجراءات وقم بتهيئتها والتي يمكن لـ {$a} القيام بها في موقعك.';
$string['providers'] = 'المزودون';
$string['providersettings'] = 'الإعدادات';
$string['userpolicy'] = '<h4><strong>مرحبًا بكم مع ميزة الذكاء الاصطناعي الجديدة!</strong></h4>
<p>ميزة الذكاء الاصطناعي (AI) هذه مؤسسة كليًا على وحدات لغة كبيرة خارجية (LLM) لتحسين تجربة التعلم والتعليم عندك. قبل أن تبدأ باستعمال خدمات الذكاء الاصطناعي هذه، يرجى قراءة سياسة الاستعمال هذه..</p>
<h4><strong>دقة المحتوى المولد بالذكاء الاصطناعي</strong></h4>
<p>يستطيع الذكاء الاصطناعي توفير معلومات ومقترحات هامة، ولكن دقته قد تتباين. عليك دومًا إعادة التأكد من المعلومات التي يقدمها للتثبت من أنها دقيقة، كاملة، ومناسبة للحالة الخاصة عندك.</p>
<h4><strong>كيف تُعالج بياناتك</strong></h4>
<p>ميزة الذكاء الاصطناعي هذه توفرها وحدات لغة كبيرة خارجية من أطراف ثالثة. إذا اخترت استعمال هذه الميزة، ستتم معالجة أي إدخالات أو بيانات شخصية تقدمها وفقًا لسياسات الخصوصية لهؤلاء المزودين للخدمات. نحن ننصح بأن تراجع سياسة الخصوصية لديهم لتتفهم كيفية معاملة بياناتك.
فضلاً عن ذلك، قد يتم الاحتفاظ بسجل عن تعاملاتك مع ميزات الذكاء الاصطناعي في هذا الموقع.</p>
<p>إذا كانت لديك أسئلة عن كيفية معالجة بياناتك، يرجى مراجعة معلميك أو مؤسستك التعليمية.</p>
<p>المتابعة من هنا معناها أنك تعرفت على هذه السياسة ووافقت عليها.</p>';
