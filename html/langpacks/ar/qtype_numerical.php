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
 * Strings for component 'qtype_numerical', language 'ar', version '3.8'.
 *
 * @package     qtype_numerical
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptederror'] = 'خطأ مقبول';
$string['addmoreanswerblanks'] = 'إضافة {no} إجابات أخرى';
$string['addmoreunitblanks'] = 'إضافة {no} وحدات قياس أخرى';
$string['answercolon'] = 'الجواب:';
$string['answererror'] = 'خطأ';
$string['answermustbenumberorstar'] = 'ينبغي أن تكون الإجابة رقماً، على سبيل المثال -1.234 أو 3e8، أو \'*\'.';
$string['answerno'] = 'الجواب {$a}';
$string['decfractionofquestiongrade'] = 'كجزء (0-1) من درجة السؤال';
$string['decfractionofresponsegrade'] = 'كجزء (0-1) من درجة الجواب';
$string['decimalformat'] = 'المراتب العشرية';
$string['editableunittext'] = 'عنصر إدخال النص';
$string['errornomultiplier'] = 'عليك تحديد معامل الضرب لهذه الوحدة.';
$string['errorrepeatedunit'] = 'لا يمكن أن يكون لديك وحدتان بنفس الاسم.';
$string['geometric'] = 'هندسي';
$string['invalidnumber'] = 'عليك إدخال رقم صالح.';
$string['invalidnumbernounit'] = 'عليك إدخال رقم صالح. لا تقم بتضمين وحدة القياس في إجابتك.';
$string['invalidnumericanswer'] = 'أحد الإجابات التي أعطيتها ليست رقماً صالحاً.';
$string['invalidnumerictolerance'] = 'أحد السماحات التي أعطيتها ليست رقماً صالحاً.';
$string['leftexample'] = 'على اليسار، على سبيل المثال 1.00$ أو 1.00£';
$string['manynumerical'] = 'الوحدات إختيارية. إذا تم إدخال الوحدة، ستستعمل لتحويل الإجابة إلى الوحدة 1 قبل منح العلامة.';
$string['multiplier'] = 'المضروب به';
$string['nominal'] = 'شكلي';
$string['noneditableunittext'] = 'نص غير قابل للتحرير لوحدة القياس 1';
$string['nonvalidcharactersinnumber'] = 'حروف غير صحيحة في الرقم';
$string['notenoughanswers'] = 'عليك إدخال إجابة واحدة على الأقل.';
$string['nounitdisplay'] = 'منح العلامة بلا وحدات قياس';
$string['numericalmultiplier'] = 'المضروب به';
$string['numericalmultiplier_help'] = 'المضروب به هو العامل الذي تُضرب به الإجابة الرقمية الصحيحة.

وحدة القياس الأولى (الوحدة 1) لديها معامل الضرب إفتراضياً 1. وهكذا، إذا كان الجواب الرقمي الصحيح 5500 ووضعتَ متر كوحدة قياس في الوحدة 1، فالإجابة الصحيحة ستكون 5500 متر.

إذا أضفتَ الوحدة كيلو متر بمضاعف مقداره 0.001، فهذا سيضيف إجابة صحيحة أخرى بشكل 5.5 كيلو متر. هذا معناه أن الإجابتين 5500 متر أو 5.5 كيلو متر ستعتبران صائبتين.

لاحظ أن الخطأ المقبول سيتم ضربه أيضاً، ما يجعل الخطأ المسموح به البالغ 100 متر أن يكون معادلاً لـ 0.1 كيلو متر.';
$string['oneunitshown'] = 'الوحدة 1 ستظهر تلقائياً بجوار حقل الإجابة.';
$string['onlynumerical'] = 'لن يتم استعمال الوحدات أبداً. فقط القيمة الرقمية سيتم منح العلامة على ضوئها.';
$string['pleaseenterananswer'] = 'لطفاً، أدخل جواباً.';
$string['pleaseenteranswerwithoutthousandssep'] = 'لطفاً، أدخل إجابتك بدون استعمال فاصل الآلاف ({$a}).';
$string['pluginname'] = 'رقمي';
$string['pluginname_help'] = 'من وجهة نظر الطلبة، يبدو السؤال الرقمي مشابهاً إلى حد كبير لسؤال الإجابة القصيرة. الفرق هو أن الإجابات الرقمية يُسمح فيها بهامش خطأ مقبول. هذا يسمح بمعاملة مدى ثابت من الإجابات بمثابة إجابة صائبة. على سبيل المثال، إذا كان الجواب هو 10 بهامش خطأ مقبول مقداره 2، فأي رقم ما بين 8 و12 سيعتبر جواباً صائباً.';
$string['pluginnameadding'] = 'تجري إضافة سؤال رقمي';
$string['pluginnameediting'] = 'يجري تحرير سؤال رقمي';
$string['pluginnamesummary'] = 'يسمح بجواب رقمي، مُمكن أن يتضمن وحدات، تُمنح درجاته عبر المقارنة مع نماذج إجابات متعددة، إحتمالاً مع هوامش تسامح.';
$string['privacy:metadata'] = 'إن ملحق نوع السؤال الرقمي لا يخزن أي بيانات شخصية.';
$string['relative'] = 'نسبي';
$string['rightexample'] = 'على اليمين، على سبيل المثال 1.00cm أو 1.00km';
$string['selectunit'] = 'إختر وحدة قياس واحدة';
$string['selectunits'] = 'إختر وحدات القياس';
$string['studentunitanswer'] = 'يتم إدخال الوحدات باستعمال';
$string['tolerancetype'] = 'نوع التسامح';
$string['unit'] = 'الوحدة';
$string['unitappliedpenalty'] = 'هذه العلامات تتضمن غرامة مقدارها {$a} لوحدة القياس الخاطئة.';
$string['unitchoice'] = 'تحديد من متعدد الخيارات';
$string['unitedit'] = 'تحرير وحدة القياس';
$string['unitgraded'] = 'لا بد من إعطاء وحدة القياس، وسيتم منح درجة لها.';
$string['unithandling'] = 'معالجة وحدة القياس';
$string['unitincorrect'] = 'لم تقم بإعطاء وحدة القياس الصحيحة.';
$string['unitmandatory'] = 'إلزامي';
$string['unitmandatory_help'] = '* سيتم منح العلامة على الإجابة باستعمال وحدة القياس المكتوبة.

* سيتم تطبيق غرامة وحدة القياس إذا كان حقلها خالياً.';
$string['unitnotselected'] = 'عليك إختيار وحدة القياس.';
$string['unitonerequired'] = 'عليك إدخال وحدة قياس واحدة على الأقل.';
$string['unitoptional'] = 'وحدة قياس إختيارية';
$string['unitoptional_help'] = '* إذا لم يكن حقل وحدة القياس خالياً، سيتم منح العلامة على الإجابة باستعمال هذه الوحدة.

* إذا كانت وحدة القياس مكتوبة بشكل خاطئ أو غير معلومة، سيتم اعتبار الإجابة غير صحيحة.';
$string['unitpenalty'] = 'غرامة وحدة القياس';
$string['unitpenalty_help'] = 'يتم فرض الغرامة عند

* إدخال اسم وحدة قياس خاطئة في خانة وحدة القياس، أو
* إدخال وحدة القياس في خانة القيمة';
$string['unitposition'] = 'وحدات القياس المقبولة';
$string['units'] = 'وحدات القياس';
$string['unitselect'] = 'قائمة منسدلة';
$string['unitx'] = 'وحدة القياس {no}';
$string['validnumberformats'] = 'تنسيقات الرقم الصائبة';
$string['validnumberformats_help'] = '* أرقام عادية 13500.67، 500.6 13، 13500,67 أو 500,67 13

* إن كانت إعدادات حزمة اللغة الخاصة بك (ملف langconfig.php) تستعمل الفارزة (,) بمثابة فاصل الآلاف، *دائماً* ضع الفاصلة العشرية (.) كما في 13,500.67 : 13,500.

* لتنسيق الأسس، ولنقل 1.350067 * 10<sup>4</sup>، استعمل 1.350067 E4 : 1.350067 E04';
$string['validnumbers'] = '13500.67، 500.67 13، 13,500.67، 13500,67، 500,67 13، 1.350067 E4 أو 1.350067 E04';
$string['xmustbenumeric'] = '{$a} ينبغي أن يكون رقماً.';
$string['xmustnotbenumeric'] = '{$a} لا يمكن أن يكون رقماً.';
$string['youmustenteramultiplierhere'] = 'عليك إدخال عامل الضرب هنا.';
