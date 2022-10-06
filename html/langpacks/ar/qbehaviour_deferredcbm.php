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
 * Strings for component 'qbehaviour_deferredcbm', language 'ar', branch 'MOODLE_38_STABLE'
 *
 * @package   qbehaviour_deferredcbm
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'الدقة';
$string['accuracyandbonus'] = 'الدقة + العلاوة';
$string['assumingcertainty'] = 'لم تختر أي درجة يقين. مفترضاً: {$a}.';
$string['averagecbmmark'] = 'متوسط العلامة المبنية على اليقين';
$string['basemark'] = 'علامة الأساس {$a}';
$string['breakdownbycertainty'] = 'التقسيم حسب اليقين';
$string['cbmbonus'] = 'علاوة العلامة المبنية على اليقين';
$string['cbmgradeexplanation'] = 'بالنسبة إلى العلامات المبنية على اليقين، العلامة أعلاه مقاسة نسبة إلى العلامة العظمى لكل ما كان صحيحاً عند C=1.';
$string['cbmgrades'] = 'العلامات المبنية على اليقين';
$string['cbmgrades_help'] = 'مع العلامات المبنية على اليقين (CBM)، إجابة كل سؤال بشكل صحيح مع درجة اليقين C=1 (يقين ضعيف) يعطي علامة 100%. يمكن أن تكون العلامات أعلى حتى 300% إذا كانت كل إجابة صحيحة مع درجة يقين C=3 (يقين عالٍ). الفهم الخاطئ (الإجابات الخاطئة بثقة عالية) تخفض العلامة أكثر بكثير من مجرد الإجابات الخاطئة المصحوبة بمستوى يقين ضعيف. هذا قد يؤدي حتى إلى علامات نهائية سالبة.

**الدقة** هو نسبة % لما هو صحيح مع تجاهل اليقين، ولكنه موزون بالنسبة إلى العلامة القصوى لكل سؤال. التمييز الصحيح ما بين مستوى الثقة الأعلى أو الأقل في الإجابات يعطي علامة أفضل من اختيار نفس الدرجة من اليقين لكل سؤال. هذا ينعكس على **علاوة العلامة المبنية على اليقين**. **الدقة** + **علاوة العلامة المبنية على اليقين** هي مقياس أفضل للمعرفة من **الدقة** لوحدها. المفاهيم الخاطئة قد تقود إلى علاوات سالبة، وهي تنبيه لإعادة النظر بحذر بشأن ما هو معلوم وما هو مجهول بالنسبة إلى المتعلم.';
$string['cbmmark'] = 'العلامة المبنية على اليقين {$a}';
$string['certainty'] = 'اليقين';
$string['certainty1'] = 'C=1 (غير متأكد: <67%)';
$string['certainty-1'] = 'لا فكرة';
$string['certainty2'] = 'C=2 (متوسط: >67%)';
$string['certainty3'] = 'C=3 (متأكد تماماً: >80%)';
$string['certainty_help'] = 'منح العلامات المبني على اليقين يتطلب منك الإشارة إلى مستوى تأكدك من إجابتك. المستويات المتاحة هي:

مستوى اليقين         | C=1 (غير متأكد) | C=2 (وسط) | C=3 (متأكد تماماً)
-------------------- | ----------------- | ------------- | ----------------
العلامة إن أصبت     |   1                 |    2            |      3
العلامة إن أخطأت    |   0                 |   -2            |     -6
إحتمالية الصواب     |  <67%           | 67-80%    |    >80%

يتم الحصول على أفضل العلامات عند التصريح بعدم الثقة. على سبيل المثال، إن كنتَ تظن أن هناك احتمالية أعلى من نسبة 1 إلى 3 بأنك على خطأ، فعليك إدخال C=1 لتتجنب المخاطرة بالحصول على علامة سالبة.';
$string['certaintyshort1'] = 'C=1';
$string['certaintyshort-1'] = 'لا فكرة';
$string['certaintyshort2'] = 'C=2';
$string['certaintyshort3'] = 'C=3';
$string['dontknow'] = 'لا فكرة';
$string['foransweredquestions'] = 'النتائج بالنسبة إلى {$a} سؤال/أسئلة التي تمت إجابتها فقط.';
$string['forentirequiz'] = 'النتائج بالنسبة إلى الاختبار بأكمله ({$a} سؤال/أسئلة)';
$string['howcertainareyou'] = 'اليقين {$a->help}: {$a->choices}';
$string['judgementok'] = 'تمام';
$string['judgementsummary'] = 'الإجابات: {$a->responses}. الدقة: {$a->fraction}. (المدى المثالي {$a->idealrangelow} إلى {$a->idealrangehigh}). كان موقعك {$a->judgement} باستعمال مستوى اليقين هذا.';
$string['noquestions'] = 'لا إجابات';
$string['overconfident'] = 'واثق جداً';
$string['pluginname'] = 'الإفادة المؤجلة مع العلامة المبنية على اليقين';
$string['privacy:metadata'] = 'إن ملحق سلوك السؤال، الإفادة المؤجلة مع العلامة المبنية على اليقين لا يخزن أي بيانات شخصية.';
$string['slightlyoverconfident'] = 'أكثر من واثق بقليل';
$string['slightlyunderconfident'] = 'أقل من واثق بقليل';
$string['underconfident'] = 'أقل من واثق';
$string['weightx'] = 'الوزن {$a}';
