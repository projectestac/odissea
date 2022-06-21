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
 * Strings for component 'qtype_match', language 'ar', version '3.11'.
 *
 * @package     qtype_match
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answer'] = 'الإجابة {$a}';
$string['availablechoices'] = 'الخيارات المتاحة';
$string['blanksforxmorequestions'] = 'إضافة {no} أسئلة أخرى';
$string['correctansweris'] = 'الجواب الصحيح هو: {$a}';
$string['deletedchoice'] = '[اختيار محذوف]';
$string['deletedsubquestion'] = 'تم حذف هذا الجزء من السؤال بعد بدء المحاولة.';
$string['filloutthreeqsandtwoas'] = 'ينبغي توفير ما لا يقل عن اثنين من الأسئلة وثلاثة من الأجوبة. يمكنك تقديم إجابات خاطئة إضافية من خلال إعطاء جواب لسؤال فارغ. سيتم تجاهل الإدخالات التي يكون فيها كل من السؤال والجواب فارغين.';
$string['nomatchinganswer'] = 'يجب تحديد جواب مطابق للسؤال \'{$a}\'.';
$string['nomatchinganswerforq'] = 'يجب عليك تحديد جواب لهذا السؤال.';
$string['notenoughqsandas'] = 'ينبغي توفير ما لا يقل عن {$a->q} من الأسئلة و {$a->a} من الإجابات.';
$string['notenoughquestions'] = 'يجب توفير ما لا يقل عن {$a} سؤال وجواب بشكل أزواج.';
$string['pleaseananswerallparts'] = 'يرجى الإجابة على جميع أجزاء هذا السؤال.';
$string['pluginname'] = 'المطابقة';
$string['pluginname_help'] = 'أسئلة تتطلب مطابقة الإجابة لقائمة أسماء أو بيانات (الأسئلة) إلى قائمة أخرى من الأسماء أو البيانات (إجابات) بشكل صحيح.';
$string['pluginnameadding'] = 'إضافة سؤال المطابقة';
$string['pluginnameediting'] = 'تحرير سؤال المطابقة';
$string['pluginnamesummary'] = 'الجواب على كل الأسئلة الفرعية، كما يجب تحديده من قائمة الاحتمالات.';
$string['privacy:metadata'] = 'إن ملحق نوع السؤال، المطابقة يسمح لمنشئي السؤال بتعيين الخيارات الافتراضية بشكل تفضيلات للمستخدم.';
$string['privacy:preference:defaultmark'] = 'الدرجة الافتراضية المعدة لسؤال معين';
$string['privacy:preference:penalty'] = 'الغرامة المفروضة على كل محاولة خاطئة عند تشغيل الأسئلة باستعمال السلوك \'تفاعلي مع محاولات متعددة\' أو \'النمط المتكيف\'';
$string['privacy:preference:shuffleanswers'] = 'فيما إذا كان ينبغي خلط الإجابات تلقائيًا';
$string['shuffle'] = 'الخلط';
$string['shuffle_help'] = 'عند تمكينه، ترتيب الأسئلة سيعاد خلطه عشوائيًا عند كل محاولة، شريطة أن يتم تمكين "الخلط ما بين الأسئلة" في إعدادات النشاط أيضًا. في سؤال المطابقة، يقتصر تأثير هذا المعامل على الأسئلة فقط. خيارات الإجابات يجري خلطها دائمًا.';
