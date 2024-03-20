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
 * Strings for component 'chat', language 'ar', version '4.1'.
 *
 * @package     chat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'لديك جلسات دردشة (محادثة) قادمة';
$string['ajax'] = 'الإصدار الذي يستعمل AJAX';
$string['autoscroll'] = 'نزول صفحة تلقائي';
$string['beep'] = 'أرسل نغمة';
$string['bubble'] = 'فقاعة';
$string['cantlogin'] = 'تعذر تسجيل الدخول إلى غرفة المحادثة!!';
$string['chat:addinstance'] = 'إضافة محادثة جديدة';
$string['chat:chat'] = 'الدخول إلى المحادثة';
$string['chat:deletelog'] = 'حذف سجلات المحادثة';
$string['chat:exportparticipatedsession'] = 'تصدير جلسة المحادثة التي شارك فيها';
$string['chat:exportsession'] = 'تصدير أي جلسة محادثة';
$string['chat:readlog'] = 'معاينة سجلات وقوعات المحادثة';
$string['chat:talk'] = 'الحديث في المحادثة';
$string['chat:view'] = 'معاينة نشاط المحادثة';
$string['chatintro'] = 'الوصف';
$string['chatname'] = 'اسم غرفة المحادثة الحالية';
$string['chatreport'] = 'جلسة المحادثة';
$string['chattime'] = 'الموعد القادم للمحادثة';
$string['compact'] = 'مدمج';
$string['composemessage'] = 'إنشاء رسالة';
$string['configmethod'] = 'طريقة المحادثة باستعمال AJAX توفر واجهة محادثة مبنية على تقنية AJAX وهي تتصل مع المخدم دورياً للحصول على تحديثات. الطريقة العادية للمحادثة تتطلب من المستخدم الاتصال المتكرر بالخادم للحصول على التحديثات. هذا لا يتطلب التهيئة ويعمل في أي مكان، ولكن يمكنه وضع حمل كبير على المخدم عندما يكون عدد المتحدثين كبيراً. استعمال daemon المخدم يتطلب الدخول المباشر على Unix، ولكن نتائجه ستكون بيئة محادثة أسرع وأقدر على التوسع.';
$string['confignormalupdatemode'] = 'تحديثات غرف المحادثة تتم تلبيتها عادة بكفاءة باستعمال ميزة <em>الاتصال المستمر</em> الموجودة في HTTP 1.1، ولكنها تبقى حملاً عالياً على المخدم. طريقة أكثر تقدماً تتمثل باستعمال استراتيجية <em>الدفق</em> لتغذية التحديثات إلى المستخدمين. استعمال<em>الدفق</em> يمكنه التوسع بشكل أفضل (مشابه لطريقة chatd) ولكنه قد لا يكون مدعوماً من قبل المخدم عندك.';
$string['configoldping'] = 'ما هي أقصى مدة منقضية بعد آخر نشاط للمستخدم التي يعتبر بعدها قد قطع الاتصال (بالثواني)؟ هذا مجرد الحد الأعلى، حيث عادة ما يتم الكشف عن قطع الاتصال باكراً. القيم الأدنى ستزيد الحمل على المخدم. إذا كنت تستعمل الطريقة الاعتيادية، <strong>أبداً</strong> لا تجعله الأدنى من 2 × chat_refresh_room.';
$string['configrefreshroom'] = 'ما هي فترة تنشيط غرفة المحادثة نفسها؟ (بالثواني) وضع هذه القيمة قليلة سيجعل غرفة المحادثة تبدو سريعة، ولكن ذلك سيضع حملاً عاليًا على مخدم الويب عندك حينما يكون عدد المتحدثين في الغرفة كبيرًا. إذا كنت تستعمل تحديثات <em>Stream</em>، يمكنك تحديد معدلات تنشيط أعلى -- إبدأ بتجربة 2.';
$string['configrefreshuserlist'] = 'ماهي المدة التي خلالها يتم تنشيط قائمة المستخدمين (بالثواني)';
$string['configserverhost'] = 'اسم المضيف للحاسوب حيث يتواجد ديمون المخدم';
$string['configserverip'] = 'رقم عنوان بروتوكل الانترنت المطابق لاسم المضيف السابق';
$string['configservermax'] = 'الحد الأعلى لعدد العملاء المسموح بهم';
$string['configserverport'] = 'المنفذ المستخدم على  الخادم لإستخدام ديمون';
$string['coursetheme'] = 'قالب المساق';
$string['crontask'] = 'المعالجة الخلفية لوحدة المحادثة';
$string['currentchats'] = 'جلسات الدردشة (المحادثة) النَّشطة';
$string['currentusers'] = 'المستخدمين الحاليين';
$string['deletesession'] = 'حذف هذه الجلسة';
$string['deletesessionsure'] = 'هل أنت متأكد من أنك تريد حذف هذه الجلسة';
$string['donotusechattime'] = 'لا تقم بنشر المحادثة في أي وقت';
$string['enterchat'] = 'الدخول إلى المحادثة';
$string['entermessage'] = 'أدخل رسالتك';
$string['errornousers'] = 'لا يمكن العثور على أي المستخدمين!';
$string['eventmessagesent'] = 'رسالة تم إرسالها';
$string['eventsessionsviewed'] = 'جلسات تمت معاينتها';
$string['explaingeneralconfig'] = 'هذه الإعدادات <strong>دائماً</strong> فعاله';
$string['explainmethoddaemon'] = 'هذه الاعدادات مؤثرة فقط إذا تم اختيار \'خادم daemon للمحادثة\' كطريقة للمحادثة.';
$string['explainmethodnormal'] = 'هذه الاعدادات مؤثرة فقط إذا تم اختيار طريقة المحادثة العادية.';
$string['generalconfig'] = 'إعدادات عامة';
$string['idle'] = 'خامل';
$string['indicator:cognitivedepth'] = 'المحادثة معرفياً';
$string['indicator:cognitivedepth_help'] = 'هذا المؤشر مبني على عمق الحالة المعرفية التي وصلها الطالب في نشاط المحادثة';
$string['indicator:cognitivedepthdef'] = 'المحادثة معرفياً';
$string['indicator:cognitivedepthdef_help'] = 'لقد وصل المشارك إلى هذه النسبة المئوية من المشاركة المعرفية التي وفرتها نشاطات المحادثة خلال فترة التحليل هذه (المستويات = لا معاينة، معاينة، تقديم، معاينة الرد، التعليق على الرد)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'المحادثة إجتماعياً';
$string['indicator:socialbreadth_help'] = 'هذا المؤشر مبني على عمق التوسع الاجتماعي الذي وصله الطالب في نشاط المحادثة.';
$string['indicator:socialbreadthdef'] = 'المحادثة إجتماعياً';
$string['indicator:socialbreadthdef_help'] = 'لقد وصل المشارك إلى هذه النسبة المئوية من المشاركة الاجتماعية التي وفرتها نشاطات المحادثة خلال فترة التحليل هذه (المستويات = لا مشاركة، المشاركة منفرداً، المشاركة مع الآخرين)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['inputarea'] = 'منطقة الإدخال';
$string['invalidid'] = 'تعذر العثور على غرفة المحادثة تلك!';
$string['list_all_sessions'] = 'قائمة جميع الجلسات.';
$string['list_complete_sessions'] = 'أدرج الجلسات الكاملة فقط.';
$string['listing_all_sessions'] = 'اظهر جميع الجلسات.';
$string['messagebeepseveryone'] = '{$a}  إرسال نغمة صفير للجميع!';
$string['messagebeepsyou'] = '{$a}  أرسل نغمة صفير لك!';
$string['messageenter'] = '{$a}  دخل غرفة محادثة';
$string['messageexit'] = '{$a}  خرج من غرفة محادثة';
$string['messages'] = 'الرسائل';
$string['messageyoubeep'] = 'أرسلت نغمة صفير لـ{$a}';
$string['method'] = 'طريقة الدردشة (المحادثة)';
$string['methodajax'] = '';
$string['methoddaemon'] = 'خادم ديمون للمحادثة';
$string['methodnormal'] = 'إعتيادية';
$string['modulename'] = 'محادثة';
$string['modulename_help'] = 'وحدة نشاط المحادثة تمكن المشاركين من المشاركة في مناقشات نصِّية متزامنة ومباشرة.

قد تكون المحادثة نشاطاً لمرة واحدة أو قد تتكرر في نفس الوقت كل يوم أو كل أسبوع. يتم حفظ جلسات المحادثة، ويمكن أن تتاح للجميع لمعاينتها أو تقتصر على المستخدمين الذين لديهم إمكانية معاينة سجلات المحادثة.

المحادثات مفيدة بشكل خاص عندما تكون المجموعة غير قادرة على الالتقاء وجهاً لوجه، مثل

* الاجتماعات المنتظمة للطلاب المشاركين في المقررات الدراسية على الانترنت لتمكينهم من تبادل الخبرات مع الآخرين في نفس المقرر ولكن في مكان مختلف
* الطالب غير القادر مؤقتاً على الحضور شخصياً والالتقاء بالمعلم يمكنه التحادث معه واللحاق بركب العمل
* الطلاب الذين يعملون خارجاً للحصول على الخبرة، فيجتمعون معًا لمناقشة تجاربهم مع بعضهم البعض ومع معلمهم
* الأطفال الأصغر سنًا الذين يستعملون المحادثة من المنزل في المساء بمثابة مقدمة (خاضعة للرقابة) إلى عالم الشبكات الاجتماعية
* سؤال وجواب مع مُتحدِّث مدعو يتواجد في موقع مختلف
* جلسات لمساعدة الطلاب على الاستعداد للاختبارات حيث المعلم، أو الطلاب الآخرون، يقومون بطرح نماذج الأسئلة';
$string['modulename_link'] = 'mod/chat/view';
$string['modulenameplural'] = 'محادثات';
$string['neverdeletemessages'] = 'لا تحذف الرسائل أبداً';
$string['nextchattime'] = 'وقت المحادثة القادم:';
$string['nextsession'] = 'الجلسة المجدوله التالية';
$string['no_complete_sessions_found'] = 'لم يتم العثور على جلسات كاملة.';
$string['nochat'] = 'لم يتم العثور على دردشة (محادثة)';
$string['noguests'] = 'المحادثة غير متاحة للزوار';
$string['nomessages'] = 'لا توجد رسائل بعد';
$string['nopermissiontoseethechatlog'] = 'ليست لديك صلاحية مشاهدة سجلات المحادثة.';
$string['normalkeepalive'] = 'البقاء نشط';
$string['normalstream'] = 'تزويد';
$string['noscheduledsession'] = 'لا يوجد جلسة مجدولة';
$string['notallowenter'] = 'لا يسمح لك بدخول غرفة المحادثة.';
$string['notlogged'] = 'لم يتم دخولك!';
$string['oldping'] = 'مهلة قطع الاتصال';
$string['page-mod-chat-x'] = 'أي صفحة لوحدة المحادثة';
$string['pastchats'] = 'جلسات الدردشة (المحادثة) الماضية';
$string['pastsessions'] = 'الجلسات الماضية';
$string['pluginadministration'] = 'إدارة الدردشة (المحادثة)';
$string['pluginname'] = 'المحادثة';
$string['privacy:metadata:chat_messages_current'] = 'جلسة المحادثة الحالية. هذه البيانات مؤقتة ويتم حذفها بعد حذف جلسة المحادثة';
$string['privacy:metadata:chat_users'] = 'يتعقب أي من المستخدمين يتواجد في أي غرفة محادثة';
$string['privacy:metadata:chat_users:firstping'] = 'وقت أول وصول إلى غرفة المحادثة';
$string['privacy:metadata:chat_users:ip'] = 'عنوان IP للمستخدم';
$string['privacy:metadata:chat_users:lang'] = 'لغة المستخدم';
$string['privacy:metadata:chat_users:lastmessageping'] = 'وقت آخر رسالة في غرفة المحادثة هذه';
$string['privacy:metadata:chat_users:lastping'] = 'وقت آخر وصول إلى غرفة المحادثة';
$string['privacy:metadata:chat_users:userid'] = 'مُعرَّف المستخدم';
$string['privacy:metadata:chat_users:version'] = 'كيفية وصول المستخدم إلى المحادثة (مقابس/أساسي/ajax/header_js)';
$string['privacy:metadata:messages'] = 'سجل للرسائل المرسلة خلال جلسة المحادثة';
$string['privacy:metadata:messages:issystem'] = 'فيما إذا كانت الرسالة منشأة من قبل النظام';
$string['privacy:metadata:messages:message'] = 'الرسالة';
$string['privacy:metadata:messages:timestamp'] = 'وقت إرسال الرسالة';
$string['privacy:metadata:messages:userid'] = 'مُعرَّف المستخدم لمؤلف الرسالة';
$string['refreshroom'] = 'تحديث الغرفة';
$string['refreshuserlist'] = 'تحديث قائمة المستخدمين';
$string['removemessages'] = 'إزالة كافة الرسائل';
$string['repeatdaily'] = 'في نفس الموعد كل يوم';
$string['repeatnone'] = 'لا تكرار- قم بنشر الموعد المُحدَّد فقط';
$string['repeattimes'] = 'أعد/أنشر أوقات الجلسة';
$string['repeatweekly'] = 'في نفس الموعد اسبوعياً';
$string['saidto'] = 'قال لـ';
$string['savemessages'] = 'حفظ الجلسات السابقة';
$string['search:activity'] = 'الدردشة (المحادثة) - معلومات النشاط';
$string['seesession'] = 'شاهد هذه الجلسة';
$string['send'] = 'أرسل';
$string['sending'] = 'يتم الإرسال';
$string['serverhost'] = 'اسم الخادم';
$string['serverip'] = 'عنوان ال ip للخادم';
$string['servermax'] = 'أقصى عدد للمستخدمين';
$string['serverport'] = 'منفذ الخادم';
$string['sessions'] = 'جلسة محادثة';
$string['sessionstart'] = 'ي  {$a->date}, ({$a->fromnow} وسوف تبدأ جلسة  الدردشة القادمة في من الآن';
$string['sessionstartsin'] = 'جلسة المحادثة القادمة ستبدأ {$a} من الآن.';
$string['strftimemessage'] = '%H:%M';
$string['studentseereports'] = 'يستطيع الجميع معاينة الجلسات السابقة';
$string['studentseereports_help'] = 'إذا تم اختيار لا، فقط المستخدمين الذين يملكون صلاحية mod/chat   سيكونون قادرين على رؤية سجلات الدردشة(المحادثة)';
$string['talk'] = 'حديث';
$string['updatemethod'] = 'طريقة التحديث';
$string['updaterate'] = 'معدل التحديث:';
$string['userlist'] = 'قائمة المستخدم';
$string['usingchat'] = 'استخدام المحادثة';
$string['usingchat_help'] = 'ًتحتوي وحدة الدردشة (المحادثة) على بعض الميزات لجعل الدردشة ألطف قليلا.

* ًالابتسامات - أي الوجوه المبتسمة (الرموز) التي يمكنك كتابة في أي مكان آخر في مودل يمكن أيضا أن تكتب هنا، على سبيل المثال :-)
* الروابط - وسيتم تشغيل عناوين مواقع ويب إلى روابط آلياً
*Emoting - You can start a line with "/me" or ":" to emote, for example if your name is Kim and you type ":laughs!" or "/me laughs!" then everyone will see "Kim laughs!"
* الصفير - يمكنك إرسال الصوت إلى المشاركين الآخرين من خلال النقر على الرابط "صفير" بجوار اسمهم. كما يوجد اختصار مفيدلإرسال صفير لكل المشاركين عن طريق "beep all".
* HTML - إذا كنت تعرف بعض رمز HTML، يمكنك استخدامها في النص الخاص بك أن تفعل أشياء مثل إدراج الصور، تشغيل الأصوات أو إنشاء نص ملون';
$string['viewreport'] = 'الجلسات السابقة';
