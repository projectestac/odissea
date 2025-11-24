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
 * Strings for component 'auth_emailadmin', language 'ar', version '4.5'.
 *
 * @package     auth_emailadmin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_emailadmindescription'] = '<p>التسجيل الشخصي المبني على أساس البريد الالكتروني مع تأكيد المشرف، يُمكِّن المستخدم من إنشاء حسابه الخاص عبر زر \'إنشاء حساب جديد\' في صفحة الدخول. سيستلم بعدها مشرفو الموقع رسالة الكترونية تتضمن رابطاً مؤمناً إلى صفحة يمكن عبرها تأكيد الحساب. تسجيلات الدخول اللاحقة تقوم فقط بالتحقق من اسم المستخدم وكلمة المرور عبر مقارنتهما بما هو مخزون في قاعدة بيانات مودل.</p><p>ملاحظة: فضلاً عن تمكين الإضافة، لا بد من اختيار التسجيل الشخصي المبني على أساس البريد الالكتروني مع تأكيد المشرف من القائمة المنسدلة لأنواع التسجيل الذاتي في صفحة \'إدارة المصادقة\'.</p>';
$string['auth_emailadminnoemail'] = 'تمت محاولة إرسال بريد إلكتروني لك ولكنها فشلت';
$string['auth_emailadminnotif_strategy_all'] = 'كل المشرفين';
$string['auth_emailadminnotif_strategy_allupdate'] = 'كل المشرفين والمستخدمين الذين لديهم إمكانية تحديث المستخدمين';
$string['auth_emailadminrecaptcha'] = 'يضيف عنصر تأكيد بشكل مرئي/مسموع إلى صفحة تسجيل الدخول بالنسبة إلى المستخدمين الراغبين بالتسجيل الشخصي المبني على أساس البريد الالكتروني. هذا من شأنه حماية موقعك من المزعجين ويرفع من أدائه بشكل عام. أنظر https://www.google.com/recaptcha للمزيد من التفاصيل. <br /><em>يتطلب ذلك وجود الامتداد cURL لـ PHP.</em>';
$string['auth_emailadminrecaptcha_key'] = 'تمكين عنصر reCAPTCHA';
$string['auth_emailadminuserconfirmation'] = 'هذا نموذج رسالة. يمكن لمشرفك تخصيصها عبر تسجيل دخوله إلى مودل والذهاب إلى إدارة الموقع 》تخصيص اللغة وتعديل الإدخالات المتعلقة بـ auth/auth_emailadmin.php، وبخاصة auth_emailadminconfirmation و auth_emailadminuserconfirmation.

في هذه الرسالة، سيجد المشرف نماذج لتضمين بيانات المستخدم عبر استعمال العناصر النائبة التي بين القوسين { و }. سيجد قائمة بالحقول المحتملة والمولدة في الإشعارات الخاصة به.

--
مرحبًا {$a->firstname}،

مرحبًا بك في (مؤسستي)! تمت الموافقة على حسابك. إذا لم يسبق لك القيام بذلك، تلطف بإخبارنا كيف عثرت على (مؤسستي).

بالنسبة إلى حسابات الطلاب، يرجى إعلامنا عن المشروع الذي ترغب بالمساهمة فيه وسنقوم بإنشاء حساب معلمك. معلومات إنشاء حساب الطالب تجدها في http://www.my.org/student-accounts <a href=http://www.my.org/student-accounts>هنا</a>.

ينبغي أن يكون الاسم الأول هو "الاسم الأول" للطالب مع "الحرف الأول من اسم العائلة". الاسم الأخير للطالب سيكون هو اسم المدرسة. كلمات المرور ينبغي أن تكون من 8 حروف على الأقل.

نحن مبتهجون بانضمامك إلينا ونأمل بمشاهدتك وطلابك وأنتم تساهمون في بعض مشاريعنا. أنت الآن عضو في مجتمع سريع النمو من المعلمين والطلاب الذين يستعملون (مؤسستي) لمشاركة المشاريع، العمل والمعرفة. متى احتجت إلى مساعدة، لا تتردد في الكتابة لنا myorg@gmail.com <a href=mailto:myorg@gmail.com>هنا</a>. سنحاول الإجابة على أي استفسارات، تعليقات أو مشاغل قد تتولد عندك بشأن (مؤسستي) باستعمال موارد Google، خدماتها وأدواتها. راجع صفحاتنا على الويب http://www.my.org <a href=http://www.my.org/>هنا</a>

* * *

ما هي (مؤسستي)؟

(مؤسستي) هي بيئة سهلة الاستعمال، مبنية على الإنترنت تمكن المعلمين من تطوير وإدارة مشاريع منهجية على الإنترنت، مشاركة المعلومات، والعمل معًا على مستوى عالمي. (مؤسستي) تقدم مجموعة متنوعة من أدوات Google وملاحقها بضمنها الرسائل التكاملية، تنظيم المؤتمرات والتقاويم، من أجل دعم التعاون ما بين المعلمين والطلاب ضمن (مؤسستي).

(مؤسستي) ترحب بمشاريعك وهي تتطلع إلى مشاركة طيف متنوع وغني منها مع طلابك المساهمين معنا. عند تسجيل دخولك، ستظهر لك قائمة بالتصنيفات الشائعة. أنقر على إحداها لاستعراض المشاريع المحددة بها. بينما أنت تستعرض تلك المشاريع (أنقر على عناوينها)، قد يساعدك ذلك في تكوين صورة أو أكثر عن كيفية تطوير مشروعك الخاص في (مؤسستي) أو قد تساعدك في تحديد المشاريع التي قد ترغب في التعاون مع معلميها وطلابها.

* * *

لأن (مؤسستي) تعمل من منطلق المشاريع ويديرها متطوعون، نرغب بأن تأخذ بنظر الاعتبار إنشاء مشروعك في (مؤسستي) أو التطوع لتقديم المساعدة في أي منها. إذا قررت إنشاء مشروعك أو التطوع للمساعدة في مشاريع الآخرين أو دعمها، يرجى مراسلتنا myorg@gmail.com <a href=mailto:myorg@gmail.com>هنا</a>. قادة (مؤسستي) ومتطوعوها متواجدون هنا لدعم إحتياجاتك.

تذكر بأن الدعم المقدم إلى كل المساهمين في (مؤسستي) هو من متطوعيها. رجاءً، خذ ما تعلمته منا وساعد المعلمين الآخرين في التعلم أيضًا! نحن نتطلع للعمل معك ومشاهدة مشاريعك الجديدة!


مع الشكر،

اسمي، المدير


--
فريق (مؤسستي)
<a href=http://www.my.org/>http://www.my.org</a>
<a href=mailto:myorg@gmail.com>myorg@gmail.com</a>
<a href=tel:123%20555%205555>123 555 5555</a>';
$string['pluginname'] = 'التسجيل الذاتي المبني على البريد الالكتروني مع تأكيد المشرف';
