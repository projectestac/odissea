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
 * Strings for component 'block_live_services', language 'ar', version '3.11'.
 *
 * @package     block_live_services
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alertsUntitled'] = 'تنبيه بدون عنوان';
$string['calendarAllDayEvent'] = 'حدث على امتداد اليوم';
$string['calendarAllDayEventMessage'] = 'هذا حدث على امتداد اليوم';
$string['calendarEndTime'] = 'وقت الإنهاء';
$string['calendarManyEvents'] = 'الأحداث القادمة';
$string['calendarNoEvents'] = 'لا توجد أحداث قادمة';
$string['calendarOneEvent'] = 'حدث قادم واحد';
$string['calendarStartTime'] = 'وقت البدء';
$string['calendarToday'] = 'هذا اليوم';
$string['calendarUntitled'] = 'حدث بدون عنوان';
$string['configuationErrorMissingAppId'] = 'لم تتم تهيئة ملحق خدمات مايكروسوفت المباشرة لكتلة مودل بشكل صحيح. لم يتم وضع مُعرَّف التطبيق أو المفتاح. يرجى التواصل مع المشرف على نظامك.';
$string['emailManyMessages'] = 'الرسائل الجديدة';
$string['emailNoMessages'] = 'لا توجد رسائل جديدة';
$string['emailToTooltip'] = 'الفصل ما بين الأسماء المتعددة بفوارز منقوطة';
$string['emailUntitled'] = 'رسالة بدون عنوان';
$string['faqPageIntro'] = 'جد إجابات عن الأسئلة كثيرة التكرار بشأن إعداد مُعرَّف Windows Live™ ، عبر استعمال حسابك في Windows Live ID لتسجيل الدخول في مودل واستعمال خدماته.';
$string['faqWLIDQ3'] = 'كيف يمكنني تغيير كلمة مرور مُعرَّف Windows Live الخاص بي؟';
$string['faqWLIDQ4'] = 'ما الذي عليَّ فعله إذا نسيت كلمة مرور مُعرَّف Windows Live الخاص بي؟';
$string['identityHomeLink'] = 'Windows Live&trade;';
$string['identityLogoAltText'] = 'شعار Windows Live';
$string['live_services_help'] = '<!--
    <style type=\\"text/css\\">

        div#faq
        {
            margin:18px;
        }
        h1
        {
            font-size:1.3em;
        }

        h2
        {
            font-size:1.1em;
        }
        h3
        {
            font-size:1.0em;
        }
        a.questionLink
        {
            display:block;
            margin:10px 4px;
        }

</style>  -->

    <h1>الأسئلة الشائعة: استعمال خدمات Windows Live&trade;&nbsp; في مودل</h1>
    <hr/>
    <p>إعثر على إجابات الأسئلة الشائعة بشأن تهيئة حسابك في Windows Live&trade;&nbsp;ID، لتسجيل الدخول في مودل واستعمال خدمات Windows Live.</p>

    <h2>Windows Live ID</h2>
    <a href="#WLID1" class="questionLink">ما هو Windows Live ID?</a>
    <a href="#WLID2" class="questionLink">كيف أحصل على Windows Live ID?</a>
    <a href="#WLID3" class="questionLink">كيف أقوم بتغيير كلمة مروري في Windows Live ID؟</a>
    <a href="#WLID4" class="questionLink">ما الذي ينبغي أن أقوم به عند نسياني لكلمة مروري في Windows Live ID؟</a>
    <h2>مودل</h2>

    <a href="#Moodle1" class="questionLink">كيف يتم استعمال Windows Live ID الخاص بي في مودل؟</a>
    <a href="#Moodle2" class="questionLink">لما ينبغي علي السماح بوصول Windows Live الخاص بي إلى حسابي في مودل؟</a>
    <a href="#Moodle3" class="questionLink">هل ينبغي علي إنشاء حساب بريد الكتروني جديد أم يمكنني استعمال حساب بريدي الحالي؟</a>
    <a href="#Moodle4" class="questionLink">كيف أربط حسابي في مودل مع حسابي في Windows Live ID؟</a>
    <a href="#Moodle5" class="questionLink">ماذا ينبغي أن أفعل إذا لم أستطع تسجيل الدخول؟</a>
    <h2>خدمات Windows Live</h2>

    <a href="#WLS1" class="questionLink">ما هي خدمات Windows Live التي يمكنني استعمالها من مودل الخاص بي؟</a>
    <a href="#WLS2" class="questionLink">لماذا لا يمكنني الوصول إلى بريدي الالكتروني؟</a>
    <a href="#WLS3" class="questionLink">إذا لم أتمكن من الوصول إلى بريدي الالكتروني، هل يمكنني الاحتفاظ بقائمة جهات الاتصال؟</a>
    <a href="#WLS4" class="questionLink">هل أن تقويم Windows Live متاح لكل من لديه حساب Windows Live ID؟</a>
    <a href="#WLS5" class="questionLink">أين يمكنني معرفة المزيد عن استعمالات تقويم Windows Live؟</a>
    <a href="#WLS6" class="questionLink">لماذا لا أستطيع إرسال رسائل فورية إلى زملائي في الصف؟</a>

    <a href="#WLS7" class="questionLink">كيف يمكنني تشغيل حضوري في مراسل Windows Live؟</a>
    <a href="#WLS8" class="questionLink">لماذا أظهر وكأنني غير متصل عندما يكون حضوري ممَكَّنًا في مراسل Windows Live؟</a>
    <a href="#WLS9" class="questionLink">ما هو تنبيه Windows Live؟</a>
    <a href="#WLS10" class="questionLink">من يستطيع إرسال تنبيه Windows Live؟</a>
    <a href="#WLS11" class="questionLink">من يمكنه تلقي تنبيه Windows Live؟</a>
    <a href="#WLS12" class="questionLink">هل يمكنني إرسال تنبيه Windows Live إلى طالب منفرد؟</a>

    <a href="#WLS13" class="questionLink">لماذا توقفت تنبيهات مساقي عن العمل فجأة؟</a>
    <h2>Windows Live ID</h2>
    <h3 id="WLID1">ما هو Windows Live ID?</h3>
    <p>يعطيك Windows Live ID إمكانية الوصول إلى خدمات Microsoft&reg;&nbsp; بما في ذلك Windows Live Hotmail&reg;، تقويم Windows Live، مراسل Windows Live، والبحث في bing&trade;&nbsp;. يمكنك إنشاء حسابك في Windows Live ID (بريد الكتروني وكلمة مرور) مرة واحدة، ومن ثم استعماله لتسجيل الدخول إلى تلك الخدمات وغيرها، كموقع مودل الخاص بك.
لمعرفة المزيد عن Windows Live ID، أنظر <a target=\\"_blank\\" href=\\"https://accountservices.passport.net/ppnetworkhome.srf?vv=650&lc=1033\\">تبسيط دخولك.</a></p>
    <h3 id="WLID2">كيف أحصل على Windows Live ID?</h3>

    <p>يمكنك تسجيل الدخول إلى Windows Live ID من صفحة تسجيل الدخول في مودل أو <a target=\\"blank\\" href=\\"https://signup.live.com/signup.aspx?rollrs=12&lic=1\\">اتصل بالإنترنت وأنشئ حسابًا.</a></p>
    <h3 id="WLID3">كيف أقوم بتغيير كلمة مروري في Windows Live ID؟</h3>
    <p>للمساعدة في حماية بياناتك الشخصية، من الموصى به أن تبادر إلى تغيير كلمة مرورك دوريًا.
<br/>لتغيير كلمة مرورك:
<ol>
<li>سجل دخولك إلى صفحة ملخص حسابك في Windows Live ID.</li>
<li>تحت <strong>معلومات إعادة تعيين كلمة المرور</strong>، أنقر <strong>تغيير</strong> المجاورة لـ <strong>كلمة المرور</strong>.</li>

<li>تحقق من صحة عنوان البريد الالكتروني في حقل <strong>Windows Live ID</strong>، ثم أدخل كلمة مرورك القديمة في مربع <strong>كلمة المرور القديمة</strong>.</li>
<li>أدخل كلمة المرور الجديدة وكررها من أجل التأكيد.</li>
<li>لتجعل كلمة المرور ذات صلاحية تنتهي بعد 72 يوم، أنقر خانة التأشير <strong>إجعل كلمة مروري منتهية الصلاحية كل 72 يوم</strong> ومن ثم انقر <strong>حفظ</strong>.</li>

</ol>
ملاحظة: بعض الخدمات تتطلب منك تغيير كلمة مرورك كل 72 يوم. إذا استعملت اي من تلك الخدمات، فقد يُصار إلى تأشير انتهاء الصلاحية تلقائياً بشكل غير قابل للتعديل.</p>
    <h3 id="WLID4">ما الذي ينبغي أن أقوم به عند نسياني لكلمة مروري في Windows Live ID؟</h3>
    <p>أولاً اتبع هذه الخطوات:
<ol>
<li>في منطقة تسجيل الدخول، أنقر <strong>هل نسيت كلمة مرورك؟</strong></li>
<li>في حقل <strong>عنوان البريد الالكتروني</strong>، أدخل العنوان الذي استعملته عند إنشاء حسابك في Windows Live ID.</li>

<li>أدخل الحروف التي تشاهدها في حقل <strong>الصورة</strong>، ومن ثم انقر <strong>استمر</strong>.</li>
</ol>
بعدها، لديك خياران لتعريف أو إعادة تعيين كلمة مرورك. يمكنك أن ترسل إلى نفسك رسالة أو تجيب على سؤالك السري.
لترسل إلى نفسك رسالة:
<ul>
<li>أنقر <strong>أرسل إلى نفسك رسالة إعادة تعيين كلمة المرور.</strong> </li>
<li>إذا قمت بإضافة عنوان بريد الكتروني بديل إلى حسابك، أنقر <strong>أرسل رسالة إلى عنوان بريدي الالكتروني البديل</strong>، ثم انقر <strong>إرسال الرسالة</strong>. أو، إذا استعملت خيار حفظ عنوان بريدي الالكتروني وكلمة المرور عند تسجيلك للدخول، أنقر خيار إرسال الرسالة إلى عنوانك البريدي المعتاد، ثم أرسل الرسالة. ستتمكن من الوصول إلى بريدك مباشرةً لأن كلمة مرورك قد تم حفظها تلقائياً.</li>

<li>إفتح عنوان بريدك الالكتروني البديل واتبع التعليمات الواردة في رسالة إعادة تعيين كلمة المرور.</li>
</ul>
لإجابة سؤالك السري:
<ul>
<li>أنقر <strong>أعطِ معلومات حسابك وأجب على سؤالك السري.</strong></li>
<li>من قائمة <strong>البلد/المنطقة</strong>، إختر اسم بلدك أو منطقتك، أدخل رمزك البريدي إذا تمت مطالبتك بذلك. بعدها في منطقة <strong>الجواب السري</strong>، أدخل إجابتك على السؤال الظاهر في منطقة السؤال.</li>
<li>أنقر <strong>استمر.</strong></li>

<li>أدخل كلمة المرور الجديدة وكررها للتأكيد، ثم انقر <strong>استمر</strong>.</li>
<li>أنقر <strong>تم</strong></li>
</ul>
</p>
    <h2>مودل</h2>
    <h3 id="Moodle1">كيف يتم استعمال Windows Live ID الخاص بي في مودل؟</h3>
    <p>يعطيك ملحق خدمات Microsoft Live لمودل خيار تسجيل الدخول إلى حسابك فيه باستعمال حسابك في Windows Live ID. فضلاً عن ذلك، عندما تكون مسجلاً لدخولك في مودل ستتمكن من الوصول السريع إلى بعض الخدمات الشائعة في Windows Live مثل بريد Windows Live، تقويمه ومراسله.</p>

    <h3 id="Moodle2">لما ينبغي علي السماح بوصول Windows Live الخاص بي إلى حسابي في مودل؟</h3>
    <p>عند تسجيلك للدخول في مودل لأول مرة باستعمال حسابك في Windows Live ID ستحتاج إلى منح الموقع سماحية الوصول إلى قائمة جهات اتصالك في مراسل Windows Live، ليتمكن Windows Live من إرسال إعداداتك عبر مودل.</p>
    <h3 id="Moodle3">هل ينبغي علي إنشاء حساب بريد الكتروني جديد أم يمكنني استعمال حساب بريدي الحالي؟</h3>
    <p>يمكنك استعمال عنوان بريدك الالكتروني الحالي أو الحصول على عنوان جديد مجاني من Windows Live. الخيار لك. خد بنظر الاعتبار أن بعض المزايا متاحة فقط لبعض حسابات البريد الالكتروني. على سبيل المثال، الوصول إلى البريد الالكتروني مقيد بـ Hotmail، MSN&reg;، وعناوين Live.</p>
    <h3 id="Moodle4">كيف أربط حسابي في مودل مع حسابي في Windows Live ID؟</h3>
    <p>قد يكون هذا ما حصل لك تلقائياً من قبل مشرف موقع مودل. إذا كان خلاف ذلك، يمكنك ربط حسابيك في مودل و Windows Live ID معًا عبر الخطوات الآتية:

<br/><br/><strong>ملاحظة:</strong> إذا لم تكن تمتلك حساب في Windows Live ID، ستحتاج إلى الحصول على حساب قبل المتابعة.
<br/>لربط حسابيك في مودل و Windows Live ID معًا:
<ol>
<li>سجل دخولك في مودل.</li>
<li>أنقر اسمك في الزاوية العليا اليسرى لمعاينة حسابك.</li>
<li>أنقر <strong>تحرير الملف الشخصي.</strong></li>
<li>أنقر <strong>إظهار المتقدم.</strong></li>
<li>في حقل <strong>MSN ID</strong>، أدخل Windows Live ID الخاص بك.</li>

<li>أنقر <strong>تحديث الملف الشخصي.</strong></li>
</ol>
</p>
    <h3 id="Moodle5">ماذا ينبغي أن أفعل إذا لم أستطع تسجيل الدخول؟</h3>
    <p>إذا لم تتمكن من تسجيل الدخول إلى مودل باستعمال حسابك في Windows Live ID، حاول ما يأتي:<br/>
<ul>
<li>تأكد من إدخال كامل عنوان بريدك الالكتروني (قبل علامة @ وبعدها) في حقل <strong>عنوان البريد الالكتروني</strong>.</li>

<li>تأكد من إدخال كلمة مرورك بشكل صحيح. كلمات المرور تتحسس حالة الأحرف الكبيرة والصغيرة. إذا نسيت كلمة مرورك، حاول إعادة تعيينها.</li>
<li>إذا لم تستعمل حسابك في Hotmail أو MSN لمدة طويلة، فقد يكون قد تعرض إلى تعطيل. في حالة تعطيل الحساب، <a href=\\"http://login.live.com/login.srf?wa=wsignin1.0&rpsnv=10&ct=1244735143&rver=5.5.4177.0&wp=MBI&wreply=http://mail.live.com/default.aspx&lc=1033&id=64855&mkt=en-US\\" target=\\"_blank\\">قم بزيارة صفحة التسجيل في موقع Hotmail</a> لفتح حساب جديد.</li>
<li>قد لا يصير اسم المستخدم متاحًا إن لم يتضمن كلمة msn أو hotmail بعد علامة @، ولم تستعمل الحساب لمدة تزيد على سنة. لتحصل على معطيات حساب جديدة، قم بزيارة صفحة التسجيل في موقع Windows Live ID.</li>
<li>تأكد من قيامك بضبط متصفحك لقبول ملفات تعريف الارتباط. إذا كان متصفك لا يسمح بخزن تلك الملفات، لن تتمكن من تسجيل الدخول باستعمال حسابك في Windows Live ID.</li>
<li>أنظر ما إذا كانت هناك رسالة خطأ تخبرك بأن الشبكة حالياً خارج الخدمة.</li>
</ul>
 </p>
   <h2>خدمات Windows Live</h2>

    <h3 id="WLS1">ما هي خدمات Windows Live التي يمكنني استعمالها من مودل الخاص بي؟</h3>
    <p>يعطيك Windows Live ID إمكانية الوصول إلى خدمات بريد Windows Live، تقويمه، مراسله، تنبيهاته والبحث في bing.<br/><br/>
ملاحظة، إذا لم تكن خدمات Windows Live متاحة من موقع مودل الخاص بك، فقد لا يكون مشرف الموقع قد قام بتنصيب هذا الخيار.</p>
    <h3 id="WLS2">لماذا لا يمكنني الوصول إلى بريدي الالكتروني؟</h3>
    <p>إذا سجلت في Windows Live ID باستعمال عنوان بريد الكتروني ليس من Hotmail، Live، أو MSN، لن تتمكن من الوصول إلى بريدك الالكتروني من داخل مودل.</p>
    <h3 id="WLS3">إذا لم أتمكن من الوصول إلى بريدي الالكتروني، هل يمكنني الاحتفاظ بقائمة جهات الاتصال؟</h3>

    <p>نعم، حتى إن لم يكن لديك وصول كامل إلى بريدك، ستبقى قائمة جهات الاتصال متاحة لك باستعمال Windows Live ID الخاص بك.</p>
    <h3 id="WLS4">هل أن تقويم Windows Live متاح لكل من لديه حساب Windows Live ID؟</h3>
    <p>نعم، إن تقويم Windows Live متاح إلى كل حسابات Windows Live ID.</p>
    <h3 id="WLS5">أين يمكنني معرفة المزيد عن استعمالات تقويم Windows Live؟</h3>
    <p>لمعرفة المزيد عن تهيئة تقويمك وإدامته، إفتح <a target=\\"_blank\\" href=\\"http://help.live.com/help.aspx?project=Calendar&market=en-WW&querytype=&query=&tmt=main&domain=calendar.live.com\\">مساعدة تقويم Windows Live.</a></p>
    <h3 id="WLS6">لماذا لا أستطيع إرسال رسائل فورية إلى زملائي في الصف؟</h3>

    <p>تأكد من إضافة زملاء صفك إلى قائمة عناوينك في مراسل Windows Live. عليك وعلى زملائك أن تقوموا بتحديث إعدادات الويب في مراسل Windows Live للسماح للآخرين بمشاهدة حضورك قبل أن تتمكنوا من مشاهدة بعضكم البعض والدردشة معًا.</p>
    <h3 id="WLS7">كيف يمكنني تشغيل حضوري في مراسل Windows Live؟</h3>
    <p>لتشغيل خاصية الحضور:<br/>
<ol>
<li>إفتح <a href=\\"http://settings.messenger.live.com/applications/websettings.aspx?wa=wsignin1.0\\" target=\\"_blank\\">إعدادات الويب في مراسل Windows Live.</a></li>
<li>إذا لم يسبق لك تسجيل الدخول، ستحتاج إلى القيام بذلك باستعمال حسابك في Windows Live ID.</li>
<li>أنقر <strong>السماح للجميع بمشاهدة حضوري ومراسلتي.</strong></li>

<li>أنقر <strong>حفظ.</strong></li>
</ol></p>
    <h3 id="WLS8">لماذا أظهر وكأنني غير متصل عندما يكون حضوري ممَكَّنًا في مراسل Windows Live؟</h3>
    <p>من أجل أن تظهر متصلاً بالإنترنت لزملاء صفك، تأكد من:
<ul>
<li>كون مراسل Windows Live شغال وأنت مسجل لدخولك فيه. (إذا لم يكن مراسل Windows Live متاحًا لك، فقد يكون مشرف مودل غير منصب لهذا الخيار.)</li>
<li>زملاء صفك قد أضافوك إلى قائمة جهات اتصالهم وأنك قد قبلت دعواتهم.</li>
<li>قد قمت بتحديث إعداداتك بحيث تسمح للآخرين بمشاهدة حضورك.</li>
</ul>

أنظر <a target=\\"_blank\\" href=\\"http://help.live.com/help.aspx?mkt=en-us&project=WL_Messengerv9&querytype=keyword&query=nogol\\">مساعدة مراسل Windows Live</a> لمزيد من المعلومات.
</p>
    <h3 id="WLS9">ما هو تنبيه Windows Live؟</h3>
    <p>التنبيه هو رسالة تُبث إلى مجموعة من المعلمين والطلاب. يمكن إيصال التنبيهات إلى بريدك الالكتروني، مراسل Windows Live، وأجهزة الجوال. عندما تشترك في تنبيهات Windows Live، يمكنك مشاهدة طرق التوصيل المفضلة لديك.</p>
    <h3 id="WLS10">من يستطيع إرسال تنبيه Windows Live؟</h3>
    <p>المعلمون ضمن مساق مودل يمكنهم إرسال التنبيهات إلى الطلاب المنضمين إلى ذلك المساق.</p>

    <h3 id="WLS11">من يمكنه تلقي تنبيه Windows Live؟</h3>
    <p>إذا اشتركتَ في تنبيهات Windows Live، وقمت <strong>بالاشتراك في تنبيهات مساق معين</strong>، يمكنك تلقي التنبيهات المرسلة من قبل المعلم في ذلك المساق.</p>
    <h3 id="WLS12">هل يمكنني إرسال تنبيه Windows Live إلى طالب منفرد؟</h3>
    <p>لا، في الوقت الحالي تنبيهات Windows Live يمكن إرسالها فقط إلى كل المشتركين في نفس المساق.</p>
    <h3 id="WLS13">لماذا توقفت تنبيهات مساقي عن العمل فجأة؟</h3>

    <p>إذا قام مشرف مودل بتغيير الاسم المختصر المستعمل في المساق، ستتوقف اشتراكات التنبيه الموجودة عن العمل في ذلك المساق. لمعاودة تلقي تنبيهات المساق، عليك الاشتراك فيها مرة أخرى.</p>
    <hr>
    <p style="font-size:0.8em;color:#333333">Microsoft&reg;، bing&trade;، Hotmail&reg;، MSN&reg; و Windows Live&trade;&nbsp; كلها علامات تجارية لمجموعة شركات مايكروسوفت. ك';
$string['messengerStudents'] = 'الطلاب';
$string['passwordstr'] = 'كلمة المرور';
$string['popupQuickEventTitle'] = 'حدث التقويم السريع';
$string['privacyUrlText'] = 'بيان الخصوصية عبر الإنترنت لشركة Microsoft.';
