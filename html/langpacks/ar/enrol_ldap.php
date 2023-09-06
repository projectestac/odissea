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
 * Strings for component 'enrol_ldap', language 'ar', version '4.1'.
 *
 * @package     enrol_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'تعيين دور \'{$a->role_shortname}\' للمستخدم \'{$a->user_username}\' في المساق \'{$a->course_shortname}\' (المُعرَّف {$a->course_id})';
$string['assignrolefailed'] = 'فشل في إسناد الدور \'{$a->role_shortname}\' للمستخدم \'{$a->user_username}\' في المساق \'{$a->course_shortname}\' (id {$a->course_id})';
$string['autocreate'] = '<p>يمكن إنشاء المقررات الدراسية تلقائياً إن كانت هناك انضمامات إلى مقرر ليس له وجود بعد في مودل</p><p>إذا كنت تستعمل إنشاء المقرر تلقائياً، فمن الموصى به إزالة الإمكانيات الآتية: moodle/course:changeidnumber، moodle/course:changeshortname، moodle/course:changefullname و moodle/course:changesummary، من الأدوار ذات الصلة لمنع التعديل في حقول المقرر الأربعة المحددة أعلاه (ID number، shortname، fullname و summary).</p>';
$string['autocreate_key'] = 'أنشئ تلقائياً';
$string['autocreation_settings'] = 'الإعدادت التلقائية لإنشاء المساق';
$string['autoupdate_settings'] = 'الإعداد التلقائية لتحديث المساق';
$string['autoupdate_settings_desc'] = '<p>إختر الحقول المطلوب تحديها عندما تكون المهمة المجدولة \'مزامنة انضمامات LDAP\' شغالة.</p><p>عند اختيار حقل واحد على الأقل، فالتحديث سيقع.</p>';
$string['bind_dn'] = 'إذا أردت استعمال مستخدم مربوط للبحث عن المستخدمين، حدده هنا. شيء ما من قبيل \'cn=ldapuser,ou=public,o=org\\';
$string['bind_dn_key'] = 'الاسم المميز لربط المستخدم';
$string['bind_pw'] = 'كلمة مرور لمستخدم مرتبط';
$string['bind_pw_key'] = 'كلمة المرور';
$string['bind_settings'] = 'إعدادات الربط';
$string['cannotcreatecourse'] = 'تعذر إنشاء المساق: البيانات المطلوبة مفقودة من سجل LDAP!';
$string['cannotupdatecourse'] = 'تعذر تحديث المساق: البيانات المطلوبة مفقودة من سجل LDAP!  الرمز التعريفي للمساق هو: \'{$a->idnumber}\\';
$string['cannotupdatecourse_duplicateshortname'] = 'تعذر تحديث المساق: تكرار في الاسم المختصر. يتم تجاوز المساق ذي  الرمز التعريفي \'{$a->idnumber}\'...';
$string['category'] = 'تصنيف المقررات الدراسية المنشأة تلقائياً';
$string['category_key'] = 'التصنيف';
$string['contexts'] = 'سياقات LDAP';
$string['couldnotfinduser'] = 'تعذر العثور على المستخدم \'{$a}\'، تم تجاوزه';
$string['course_fullname'] = 'إختياري: سمة LDAP للحصول على الاسم الكامل من';
$string['course_fullname_key'] = 'الاسم الكامل';
$string['course_fullname_updateonsync'] = 'تحديث الاسم الكامل خلال نص المزامنة';
$string['course_fullname_updateonsync_key'] = 'تحديث الاسم الكامل';
$string['course_idnumber'] = 'سمة LDAP للحصول منها على رقم مُعرَّف المساق. عادة \'cn\' أو \'uid\'.';
$string['course_idnumber_key'] = 'رقم المُعرَّف';
$string['course_search_sub'] = 'إبحث عن عضويات المجموعة من السياقات الفرعية';
$string['course_search_sub_key'] = 'البحث في السياقات الفرعية';
$string['course_settings'] = 'إعدادات الانضمام إلى المساق';
$string['course_shortname'] = 'خيارى: حقل الـ LDAP للحصول على اسم قصير من';
$string['course_shortname_key'] = 'الاسم المختصر';
$string['course_shortname_updateonsync'] = 'تحديث الاسم المختصر خلال نص مزامنة';
$string['course_shortname_updateonsync_key'] = 'تحديث الاسم المختصر';
$string['course_summary'] = 'خيارى: حقل الـ LDAP للحصول على ملخص من';
$string['course_summary_key'] = 'الموجز';
$string['course_summary_updateonsync'] = 'تحديث الملخص خلال نص المزامنة';
$string['course_summary_updateonsync_key'] = 'تحديث الملخص';
$string['coursenotexistskip'] = 'المساق \'{$a}\' غير موجود والإنشاء التلقائي للمساقات معطل، تم تجاوزه';
$string['courseupdated'] = 'تم تحديث المساق ذي  الرمز التعريفي \'{$a->idnumber}\' بنجاح.';
$string['courseupdateskipped'] = 'المساق ذي  الرمز التعريفي \'{$a->idnumber}\' لا يحتاج التحديث، تم تجاوزه.';
$string['createcourseextid'] = 'إنشاء مستخدم منضم إلى المساق غير الموجود \'{$a->courseextid}\'';
$string['createnotcourseextid'] = 'المستخدم المنضم إلى المساق غير الموجود \'{$a->courseextid}\\';
$string['creatingcourse'] = 'يتم إنشاء المساق \'{$a}\'...';
$string['duplicateshortname'] = 'فشل إنشاء المساق . تكرار الاسم المختصر. تم تجاوز المساق ذي الرمز التعريفي \'{$a->idnumber}\'...';
$string['editlock'] = 'تأمين القيمة';
$string['emptyenrolment'] = 'أفرغ الانضمام لدور \'{$a->role_shortname}\' في المساق \'{$a->course_shortname}\\';
$string['enrolname'] = 'LDAP';
$string['enroluser'] = 'ضم المستخدم \'{$a->user_username}\' في المساق \'{$a->course_shortname}\' (المُعرَّف {$a->course_id})';
$string['enroluserenable'] = 'تمكين الانضمام للمستخدم \'{$a->user_username}\' في المساق \'{$a->course_shortname}\' (المُعرَّف {$a->course_id})';
$string['explodegroupusertypenotsupported'] = 'الدالة ldap_explode_group() لا تدعم نوع المستخدم المحدد: {$a}';
$string['extcourseidinvalid'] = 'المُعرَّف الخارجي للمساق غير صحيح!';
$string['extremovedsuspend'] = 'تعطيل الانضمام للمستخدم \'{$a->user_username}\' في المساق \'{$a->course_shortname}\' (المُعرَّف {$a->course_id})';
$string['extremovedsuspendnoroles'] = 'تعطيل الانضمام للمستخدم \'{$a->user_username}\'  وأزل أدواره في المساق \'{$a->course_shortname}\' (المُعرَّف {$a->course_id})';
$string['extremovedunenrol'] = 'ألغ انضمام المستخدم \'{$a->user_username}\'  في المساق \'{$a->course_shortname}\' (المُعرَّف {$a->course_id})';
$string['failed'] = 'فشل!';
$string['general_options'] = 'الخيارات العامة';
$string['group_memberofattribute'] = 'اسم السمة التي تحدد المجموعة التي ينتمي إليها مستخدم معين أوة مجموعة ما (مثل memberOf، groupMembership... إلخ.)';
$string['group_memberofattribute_key'] = 'سمة \'Member of\\';
$string['host_url'] = 'حدد مضيف LDAP بشكل رابط مثل \'ldap://ldap.myorg.com/\' أو \'ldaps://ldap.myorg.com/\\';
$string['host_url_key'] = 'رابط المضيف';
$string['idnumber_attribute'] = 'إن كانت عضوية المجموعة تضم أسماء مميزة، حدد نفس السمة التي استعملتها لمُعرَّف المستخدم \'ID Number\' المعين في إعدادات مصادقة LDAP.';
$string['idnumber_attribute_key'] = 'سمة المُعرَّف';
$string['ldap:manage'] = 'إدارة عينات انضمام LDAP';
$string['ldap_encoding'] = 'حدد الترميز المستعمل من قبل مخدم LDAP. غالباً هو utf-8، يستعمل MS AD v2 ترميز المنصة الافتراضي مثل cp1252، cp1250، إلخ.';
$string['ldap_encoding_key'] = 'ترميز LDAP';
$string['memberattribute'] = 'سمة العضو في LDAP';
$string['memberattribute_isdn'] = 'إذا كانت عضوية المجموعة تحتوي على أسماء مميزة، فعليك تحديدها هنا. إن كان الأمر كذلك، عليك إكمال باقي الإعدادات في هذا المقطع.';
$string['memberattribute_isdn_key'] = 'سمة العضو تستعمل dn';
$string['nested_groups'] = 'هل تريد استعمال المجموعات المتداخلة (مجموعات من مجموعات) للانضمامات؟';
$string['nested_groups_key'] = 'مجموعات متداخلة';
$string['nested_groups_settings'] = 'إعدادات المجموعات المتداخلة';
$string['nosuchrole'] = 'لا دور بتسمية: \'{$a}\\';
$string['objectclass'] = 'objectClass المستعمل للبحث في المقررات الدراسية. عادة \'group\' أو \'posixGroup\\';
$string['objectclass_key'] = 'صنف المكوِّن';
$string['ok'] = 'تمام!';
$string['opt_deref'] = 'إذا كانت عضوية المجموعة تحتوي على أسماء مميزة، حدد كيفية معاملة الأسماء المستعارة خلال إجراء البحث. إختر واحداً من القيم الآتية: \'No\' (LDAP_DEREF_NEVER) أو \'Yes\' (LDAP_DEREF_ALWAYS).';
$string['opt_deref_key'] = 'إحالات الأسماء المستعارة';
$string['phpldap_noextension'] = 'إن وحدة PHP LDAP لا يبدو أنها موجودة. لطفاً، تأكد أنها منصبة ومُمَكَّنة إذا أردت استعمال إضافة الانضمام هذا.';
$string['pluginname'] = 'إنضمامات LDAP';
$string['pluginname_desc'] = '<p>يمكنك استعمال مخدم LDAP للسيطرة على الانضمامات عندك. من المفترض أن شجرة LDAP لديك تحتوي على مجموعات تعكس المقررات الدراسية، وإن كل واحد من تلك المجموعات/المقررات الدراسية سيكون له مدخلات عضوية تنعكس على الطلاب.</p><p>من المفترض أن المقررات الدراسية معرفة بمثابة مجموعات في LDAP، ولكل مجموعة عدة حقول انضمام (<em>member</em> أو <em>memberUid</em>) تحتوي على مُعرَّف فريد أو ما يعرف بـ uniqueidentification للمستخدم.</p><p>لاستعمال انضمامات LDAP، على مستخدميك <strong>إجباراً</strong> أن يكون لهم حقل رمز تعريفي idnumber صحيح. مجموعة LDAP عليها أن تمتلك ذلك الرمز التعريفي idnumber في حقل العضو ليكون المستخدم قادراً على الانضمام إلى المقرر. هذا عادة ما يسير بشكل جيد إذا سبق لك استعمال مصادقة LDAP.</p><p>سيتم تحديث الانضمامات عندما يقوم المستخدمون بتسجيل دخولهم. يمكنك أيضاً تشغيل نص برمجي لإبقاء الانضمامات متزامنة. أنظر في <em>enrol/ldap/cli/sync.php</em>.</p><p>يمكن ضبط هذه الإضافة أيضاً لإنشاء المقررات الدراسية الجديدة تلقائياً عندما تظهر مجموعات جديدة في LDAP.</p>';
$string['pluginnotenabled'] = 'الإضافة غير مفعلة';
$string['privacy:metadata'] = 'إن إضافة انضمام LDAP لا تخزن أي بيانات شخصية.';
$string['role_mapping'] = '<p>لكل دور، عليك تحديد كل سياقات LDAP حيث توجد المجموعات التي تمثل المقررات الدراسية. إفصل ما بين السياقات المختلفة بفاصلة منقوطة (;).</p><p>عليك أيضاً تحديد السمة التي يستعمل مخدم LDAP لتمثيل أعضاء المجموعة. هذا عادة ما تكون \'member\' أو \'memberUid\'.</p>';
$string['role_mapping_attribute'] = 'سمة عضوية LDAP لـ {$a}';
$string['role_mapping_context'] = 'سياقات LDAP لـ {$a}';
$string['role_mapping_key'] = 'تعيين الأدوار من LDAP';
$string['roles'] = 'تعيين الأدوار';
$string['server_settings'] = 'إعدادات مخدم LDAP';
$string['synccourserole'] = '== مزامنة المساق \'{$a->idnumber}\' لدور \'{$a->role_shortname}\\';
$string['syncenrolmentstask'] = 'مهمة مزامنة انضمامات LDAP';
$string['template'] = 'إختياري: المقررات الدراسية المنشأة تلقائياً يمكنها أن تنسخ إعداداتها من مقرر يعمل بمثابة مظهر';
$string['template_key'] = 'المظهر';
$string['unassignrole'] = 'إلغاء تعيين دور \'{$a->role_shortname}\' للمستخدم \'{$a->user_username}\' من المساق \'{$a->course_shortname}\' (المُعرَّف {$a->course_id})';
$string['unassignrolefailed'] = 'فشل إلغاء تعيين دور \'{$a->role_shortname}\' للمستخدم \'{$a->user_username}\' في المساق \'{$a->course_shortname}\' (المُعرَّف {$a->course_id})';
$string['unassignroleid'] = 'إلغاء الدور ذي المُعرَّف \'{$a->role_id}\' للمستخدم ذي المُعرَّف \'{$a->user_id}\\';
$string['updatelocal'] = 'حدث المعلومات المحلية';
$string['user_attribute'] = 'إذا كانت عضوية المجموعة تحتوي على أسماء مميزة، حدد السمة المستعملة لتسمية/بحث المستخدمين. إذا كنت تستعمل مصادقة LDAP، هذه القيمة ينبغي أن تطابق السمة المحددة في \'ID Number\' المعينة في إضافة مصادقة LDAP.';
$string['user_attribute_key'] = 'سمة المُعرَّف';
$string['user_contexts'] = 'إذا كانت عضوية المجموعة تحتوي على أسماء مميزة، حدد قائمة بالسياقات التي يوجد فيها المستخدمون. إفصل ما بين السياقات المختلفة بفارزة منقوطة (;). مثلاً: \'ou=users,o=org; ou=others,o=org\'.';
$string['user_contexts_key'] = 'السياقات';
$string['user_search_sub'] = 'إذا كانت عضوية المجموعة تحتوي على أسماء مميزة، حدد فيما إذا كان البحث عن المستخدمين يجري على مستوى السياقات الفرعية أيضاً.';
$string['user_search_sub_key'] = 'إبحث في السياقات الفرعية';
$string['user_settings'] = 'إعدادات البحث عن المستخدمين';
$string['user_type'] = 'إذا كانت عضوية المجموعة تحتوي على أسماء مميزة، حدد كيفية حزن المستخدمين في LDAP';
$string['user_type_key'] = 'نوع المستخدم';
$string['version'] = 'مزودك يستعمل هذا الإصدار من بروتوكول LDAP.';
$string['version_key'] = 'الإصدار';
