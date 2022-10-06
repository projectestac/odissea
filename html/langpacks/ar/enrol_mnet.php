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
 * Strings for component 'enrol_mnet', language 'ar', branch 'MOODLE_38_STABLE'
 *
 * @package   enrol_mnet
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['error_multiplehost'] = 'توجد عينة سلفاً من ملحق انضمام شبكة مودل في هذا المضيف. يُسمح فقط لعينة واحدة لكل مضيف و/أو عينة واحدة لـ \'كل المضيفين\'.';
$string['instancename'] = 'اسم طريقة الانضمام';
$string['instancename_help'] = 'يمكنك اختيارياً إعادة تسمية هذه العينة من طريقة انضمام شبكة مودل. إذا تركت هذا الحقل فارغاً، سيتم استعمال الاسم الافتراضي للعينة، محتوياً على اسم المضيف البعيد والدور المعين لمستخدميه.';
$string['mnet:config'] = 'تهيئة عينات انضمام شبكة مودل';
$string['mnet_enrol_description'] = 'أنشر هذه الخدمة للسماح للمشرفين في {$a} بضم طلبتهم في المساقات التي أنشأتها في مخدمك.<br/><ul><li><em>تَبِعَة</em>: عليك أيضاً <strong>الاشتراك</strong> في خدمة SSO (مزود الهوية) في {$a}.</li><li><em>تَبِعَة</em>: عليك أيضاً <strong>نشر</strong> خدمة SSO (مزود الخدمة) في {$a}.</li></ul><br/>إشترك في هذه الخدمة لتتمكن من ضم طلبتك في مساقات {$a}.<br/><ul><li><em>تَبِعَة</em>: عليك أيضاً <strong>نشر</strong> خدمة SSO (مزود الهوية) في {$a}.</li><li><em>تَبِعَة</em>: عليك أيضاً <strong>الاشتراك</strong> في خدمة SSO (مزود الخدمة) في {$a}.</li></ul><br/>';
$string['mnet_enrol_name'] = 'خدمة الانضمام البعيد';
$string['pluginname'] = 'انضمامات شبكة مودل البعيدة';
$string['pluginname_desc'] = 'إسمح لمضيف شبكة مودل البعيد بضم مستخدميه إلى المساقات عندنا.';
$string['privacy:metadata'] = 'إن ملحق الانضمام البعيد لشبكة مودل لا يخزن أي بيانات شخصية.';
$string['remotesubscriber'] = 'المضيف البعيد';
$string['remotesubscriber_help'] = 'إختر \'كل المضيفين\' لفتح هذا المساق إلى كل نظراء شبكة مودل الذين نقدم لهم خدمة الانضمام البعيد. أو اختر مضيفاً واحداً لجعل هذا المساق متاحاً إلى مستخدميه فقط.';
$string['remotesubscribersall'] = 'كل المضيفين';
$string['roleforremoteusers'] = 'دور مستخدميه';
$string['roleforremoteusers_help'] = 'ما هو الدور الذي سيحصل عليه المستخدمون البعيدون من المضيف المحدد.';
