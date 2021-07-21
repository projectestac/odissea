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
 * Strings for component 'auth_shibboleth', language 'ar', version '3.11'.
 *
 * @package     auth_shibboleth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_shib_auth_logo'] = 'شعار طريقة المصادقة';
$string['auth_shib_auth_logo_description'] = 'أعط شعاراً لطريقة مصادقة Shibboleth ليكون مألوفاً لمستخدميك. هذا قد يكون شعار Shibboleth لاتحادك، كما في <tt>دخول SWITCHaai</tt> أو <tt>دخول InCommon</tt> أو ما شابه.';
$string['auth_shib_auth_method'] = 'اسم طريقة المصادقة';
$string['auth_shib_auth_method_description'] = 'أعط اسماً لطريقة مصادقة Shibboleth ليكون مألوفاً لمستخدميك. هذا قد يكون اسم Shibboleth لاتحادك، كما في <tt>دخول SWITCHaai</tt> أو <tt>دخول InCommon</tt> أو ما شابه.';
$string['auth_shib_changepasswordurl'] = 'رابط تغيير كلمة المرور';
$string['auth_shib_contact_administrator'] = 'في حالة عدم ارتباطك بتلك المنظمات ولكنك بحاجة إلى الوصول إلى مقرر دراسي ما في هذا المخدم، لطفاً، تواصل مع <a href="mailto:{$a}">مشرف مودل</a>.';
$string['auth_shib_convert_data'] = 'تعديل البيانات API';
$string['auth_shib_convert_data_description'] = 'يمكنك استعمال واجهة برمجة التطبيق هذه لإجراء المزيد من التعديلات على البيانات المزودة من قبل Shibboleth. إقرأ <a href="{$a}">README</a> للمزيد من التعليمات.';
$string['auth_shib_convert_data_filepath_warning'] = 'لا يمكنك استعمال ملف موجود ضمن مجلد بيانات الموقع الحالي ($CFG->dataroot) بمثابة واجهة برمجة التطبيق لتعديل البيانات.';
$string['auth_shib_convert_data_warning'] = 'الملف غير موجود أو تتعذر قراءته من قبل عملية مخدم الويب!';
$string['auth_shib_idp_list'] = 'مزودو الهوية';
$string['auth_shib_idp_list_description'] = 'أعط قائمة من مزودي الهوية entityIDs لتسمح للمستخدم بالاختيار منها في صفحة الدخول.<br />في كل سطر، ينبغي أن يوجد صف مفصول بفوارز من entityID لـ IdP (أنظر ملف البيانات الوصفية لـ Shibboleth) واسم  IdP حيث سيتم عرضها في القائمة المنسدلة.<br />بمثابة خيار ثالث إختياري، يمكنك إضافة بادئ موضع جلسة Shibboleth الذي سيتم استعماله في حالة كون تنصيبك من مودل هو جزء من تنصيب متعدد موحد .';
$string['auth_shib_instructions'] = 'استعمل <a href="{$a}">دخول Shibboleth</a> للحصول على إمكانية الوصول عبر Shibboleth، إذا كانت مؤسستك تدعمه. بخلاف ذلك، استعمل نموذج الدخول الاعتيادي المبين أدناه.';
$string['auth_shib_instructions_help'] = 'هناك عليك وضع تعليمات مخصصة لمستخدميك تشرح لهم Shibboleth. سيتم إظهارها في صفحة الدخول في مقطع التعليمات. التعليمات ينبغي أن تتضمن رابطاً إلى "<b>{$a}</b>" لينقر عليه المستخدمون عندما يرغبون بتسجيل الدخول.';
$string['auth_shib_instructions_key'] = 'تعليمات الدخول';
$string['auth_shib_integrated_wayf'] = 'خدمة WAYF لمودل';
$string['auth_shib_integrated_wayf_description'] = 'إذا قمت بتمكينه، سيستعمل مودل خدمته الخاصة من WAYF بدلاً من تلك التي لم تتم تهيئتها لـ Shibboleth. سيقوم مودل بعرض قائمة منسدلة في صفحة الدخول البديلة هذه حيث سيكون على المستخدم اختيار مزود الهوية العائد له.';
$string['auth_shib_logout_return_url'] = 'رابط تسجيل الخروج البديل';
$string['auth_shib_logout_return_url_description'] = 'أعط الرابط الذي سيتم توجيه مستخدمي Shibboleth إليه بعد تسجيل خروجهم.<br />عند تركه فارغاً، سيتم توجيه المستخدمين إلى الموضع الذي يقوم مودل بتوجيه المستخدمين إليه';
$string['auth_shib_logout_url'] = 'رابط معامل تسجيل الخروج لمزود خدمة Shibboleth';
$string['auth_shib_logout_url_description'] = 'أعط رابط معامل تسجيل الخروج لمزود خدمة Shibboleth. هذا عادة ما يكون <tt>/Shibboleth.sso/Logout</tt>';
$string['auth_shib_no_organizations_warning'] = 'إذا أردت استعمال الخدمة المتكاملة لـ WAYF، عليك إعطاء قائمة من مزودي الهوية مفصولة بفوارز لـ entityIDs، أسمائها واختيارياً، بادئي الجلسات.';
$string['auth_shib_only'] = 'شيبولث فقط';
$string['auth_shib_only_description'] = 'قم بتأشير هذا الخيار إذا كان في النية فرض مصادقة Shibboleth.';
$string['auth_shib_username_description'] = 'اسم متغير مخدم الويب لـ Shibboleth الذي سيتم استعماله بمثابة اسم دخول مودل';
$string['auth_shibboleth_errormsg'] = 'الرجاء اختيار المنظمة التي أنت عضو فيها';
$string['auth_shibboleth_login'] = 'دخول Shibboleth';
$string['auth_shibboleth_login_long'] = 'الدخول إلى مودل عن طريق شيبولث';
$string['auth_shibboleth_manual_login'] = 'الدخول اليدوي';
$string['auth_shibboleth_select_member'] = 'أنا عضو في...';
$string['auth_shibboleth_select_organization'] = 'بغرض المصادقة بواسطة Shibboleth، لطفاً، إختر منظمتك من القائمة المنسدلة:';
$string['auth_shibbolethdescription'] = 'باستعمال هذه الطريقة يتم إنشاء حسابات المستخدمين والمصادقة عليها بواسطة Shibboleth. لمعرفة تفاصيل التنصيب، أنظر <a href="{$a}">Shibboleth README</a>.';
$string['pluginname'] = 'Shibboleth';
$string['privacy:metadata'] = 'إن ملحق مصادقة Shibboleth لا يخزن أي بيانات شخصية.';
$string['shib_invalid_account_error'] = 'يبدو أنك مصادق من قبل Shibboleth ولكن ليس لمودل حساب صحيح باسم دخولك. حسابك قد لا يكون موجوداً أو تم تعليقه.';
$string['shib_no_attributes_error'] = 'يبدو أنك مصادق من قبل Shibboleth ولكن مودل لم يتلقَ أي سمات مستخدم. لطفاً، تحقق من كون مزود هويتك يطلق السمات المطلوبة ({$a}) لمزود الخدمة الذي يقوم مودل بتشغيله، أو قم بإبلاغ مدير الويب في هذا المخدم.';
$string['shib_not_all_attributes_error'] = 'مودل بحاجة إلى سمات Shibboleth معينة والتي ليست موجودة عندك. السمات هي: {$a}<br />لطفاً، تواصل مع مشرف الويب لهذا المخدم أو مع مزود الهوية العائد لك.';
$string['shib_not_set_up_error'] = 'مصادقة Shibboleth لا يبدو أنها معدة بشكل صحيح لأنه لا يوجد أي من متغيرات بيئة عمل Shibboleth لهذه الصفحة. لطفاً، راجع <a href="{$a}">README</a> للمزيد من التعليمات عن كيفية تنصيب مصادقة Shibboleth أو تواصل مع مشرف الويب لهذا التنصيب من مودل.';
