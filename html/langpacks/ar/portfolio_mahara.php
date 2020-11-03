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
 * Strings for component 'portfolio_mahara', language 'ar', branch 'MOODLE_38_STABLE'
 *
 * @package   portfolio_mahara
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['enableleap2a'] = 'تمكين دعم محفظة Leap2A (يتطلب مهارا 1.3 أو أعلى)';
$string['err_invalidhost'] = 'مضيف شبكة مودل غير صحيح';
$string['err_invalidhost_help'] = 'هذا الملحق معرف بشكل خاطئ لأنه يشير إلى مضيف شبكة مودل غير صحيح (أو محذوف). هذا الملحق يعتمد على نظراء شبكة مودل مع كون SSO IDP منشورة، SSO_SP مشترك فيها، والمحفظة مشترك فيها <b>و</b> منشورة.';
$string['err_networkingoff'] = 'شبكة مودل مطفأة';
$string['err_networkingoff_help'] = 'مصادقة شبكة مودل معطل حالياً. لطفاً، قم بتمكينه قبل محاولة تهيئة هذا الملحق. أي عينات لهذا الملحق تبقى مخفية حتى تمكين شبكة مودل. ثم ينبغي جعلها مرئية يدوياً مرة أخرى.';
$string['err_nomnetauth'] = 'ملحق مصادقة شبكة مودل معطل';
$string['err_nomnetauth_help'] = 'ملحق مصادقة شبكة مودل معطل، ولكنه مطلوب لهذه الخدمة';
$string['err_nomnethosts'] = 'يعتمد على شبكة مودل';
$string['err_nomnethosts_help'] = 'هذا الملحق يعتمد على نظراء شبكة مودل مع كون SSO IDP منشورة، SSO SP مشترك فيها، خدمات المحفظة منشورة <b>و</b> مشترك فيها فضلاً عن ملحق مصادقة شبكة مودل. أي عينات من هذا الملحق تبقى مخفية حتى تتم تلبية هذه الشروط. ثم ينبغي جعلها مرئية يدوياً مرة أخرى.';
$string['failedtojump'] = 'فشل بدء الاتصال مع المخدم البعيد';
$string['failedtoping'] = 'فشل بدء الاتصال مع المخدم البعيد: {$a}';
$string['mnethost'] = 'مضيف شبكة مودل';
$string['mnet_nofile'] = 'تعذر العثور على الملف في مكون النقل - خطأ غريب';
$string['mnet_nofilecontents'] = 'تم العثور على الملف في مكون النقل، ولكن تعذر استخراج المحتويات - خطأ غريب: {$a}';
$string['mnet_noid'] = 'تعذر العثور على سجل النقل المطابق لهذا الترميز';
$string['mnet_notoken'] = 'تعذر العثور على الترميز المطابق لهذا النقل';
$string['mnet_wronghost'] = 'المضيف الخارجي لم يطابق سجل النقل لهذا الترميز';
$string['pf_description'] = 'يسمح للمستخدمين بوضع محتوى مودل في هذا المضيف<br />إشترك <b>و</b> انشر هذه الخدمة للسماح للمستخدمين المصادق عليهم في هذا الموقع بوضع المحتوى في {$a}<br /><ul><li><em>تبعة</em>: عليك أيضاً <strong>نشر</strong> خدمة SSO (مزود هوية) في {$a}.</li><li><em>تبعة</em>: عليك أيضاً <strong>الاشتراك</strong> في خدمة SSO (مزود خدمة) في {$a}</li><li><em>تبعة</em>: عليك أيضاً تمكين ملحق مصادقة شبكة مودل.</li></ul><br />';
$string['pf_name'] = 'خدمات المحفظة';
$string['pluginname'] = 'المحفظة الالكترونية من مهارا';
$string['privacy:metadata'] = 'هذا الملحق يرسل البيانات خارجياً إلى تطبيق مهارا مرتبط. هو لا يحفظ البيانات محلياً';
$string['privacy:metadata:data'] = 'البيانات الشخصية المُمرَّرة عبر نظام المحفظة الفرعي';
$string['senddisallowed'] = 'لا يمكنك نقل الملفات إلى مهارا في هذا الوقت';
$string['url'] = 'الرابط';
