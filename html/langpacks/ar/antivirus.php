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
 * Strings for component 'antivirus', language 'ar', version '4.5'.
 *
 * @package     antivirus
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actantivirushdr'] = 'برامج مضادات الفيروسات المتاحة';
$string['antiviruscommonsettings'] = 'الإعدادات الشائعة لمضاد الفيروسات';
$string['antiviruses'] = 'برامج مضادات الفيروسات';
$string['antivirussettings'] = 'إدارة برامج مضادات الفيروسات';
$string['configantivirusplugins'] = 'الرجاء اختيار برامج مكافحة الفيروسات التي ترغب في استخدامها وترتيبها ليتم تطبيقها.';
$string['dataerrordesc'] = 'وقع خطأ في ماسح البيانات';
$string['dataerrorname'] = 'خطأ في ماسح البيانات';
$string['datainfecteddesc'] = 'تم الكشف عن بيانات مصابة.';
$string['datainfectedname'] = 'بيانات مصابة';
$string['datastream'] = 'البيانات';
$string['emailadditionalinfo'] = 'تفاصيل إضافية أعطاها محرك الفيروس:';
$string['emailauthor'] = 'تم رفعه من قِبَل:';
$string['emailcontenthash'] = 'الترميز الرقمي للمحتوى:';
$string['emailcontenttype'] = 'نوع المحتوى:';
$string['emaildate'] = 'تاريخ رفعه:';
$string['emailfilename'] = 'اسم الملف:';
$string['emailfilesize'] = 'حجم الملف:';
$string['emailgeoinfo'] = 'الموقع الجغرافي:';
$string['emailinfectedfiledetected'] = 'تم الكشف عن ملف مصاب';
$string['emailipaddress'] = 'عنوان IP:';
$string['emailreferer'] = 'المُحيل';
$string['emailreport'] = 'التقرير:';
$string['emailscanner'] = 'الماسح:';
$string['emailscannererrordetected'] = 'وقع خطأ في الماسح';
$string['emailsubject'] = '{$a}:: إشعار مضاد الفيروسات';
$string['enablequarantine'] = 'تمكين الحجر';
$string['enablequarantine_help'] = 'عند تمكين، سيتم الإبقاء على أي ملفات تُكتشف كفيروسات في مجلد الحجر ([dataroot]/{$a}) لأغراض الفحص اللاحق.
الرفع إلى مودل سيعتبر فاشلاً. إذا كان لديك أي مضاد للفيروسات عاملاً على مستوى نظام الملفات، فمجلد الحجر ينبغي استثناؤه من جولات فحص ذلك البرنامج لتجنب قيامه بكشف تلك الملفات المحجورة من جانبه.';
$string['fileerrordesc'] = 'وقع خطأ في ماسح الملفات';
$string['fileerrorname'] = 'خطأ في ماسح الملفات';
$string['fileinfecteddesc'] = 'تم الكشف عن ملف مصاب.';
$string['fileinfectedname'] = 'الملف مصاب';
$string['notifyemail'] = 'رسالة التنبيه بالبريد الالكتروني لمضاد الفيروسات';
$string['notifyemail_help'] = 'عنوان البريد الالكتروني المطلوب إشعاره عند الكشف عن وجود فيروس. عند تركه فارغاً، سيتم الإشعار إلى كل مشرفي الموقع.';
$string['notifylevel'] = 'مستوى الإشعار';
$string['notifylevel_help'] = 'المستويات المختلفة من المعلومات التي تريد تلقي إشعارات بشأنها';
$string['notifylevelerror'] = 'التهديدات المكتشفة وأخطاء المسح';
$string['notifylevelfound'] = 'التهديدات المكتشفة فقط';
$string['privacy:metadata'] = 'نظام مضاد الفيروسات لا يخزن أي بيانات شخصية.';
$string['quarantinedfiles'] = 'الملفات المحجورة لمضاد الفيروسات';
$string['quarantinedisabled'] = 'تم تعطيل الحجر. لم يتم خزن الملف.';
$string['quarantinetime'] = 'أقصى مدة للحجر';
$string['quarantinetime_desc'] = 'ستتم إزالة الملفات المحجورة التي تزيد مدة حجرها عن الفترة المحددة.';
$string['taskcleanup'] = 'إخلاء الملفات المحجورة.';
$string['threshold'] = 'عتبة فحص الحالة';
$string['threshold_desc'] = 'إلى أي مدى يتم الرجوع إلى الوراء عند التحقق من النتائج السابقة للأخطاء، إلخ، كما مُبلغ عنها في {$a}.';
$string['unknown'] = 'مجهول';
$string['virusfound'] = 'تم فحص {$a->item} بواسطة مدقق الفيروسات ووجد مصاباً!';
