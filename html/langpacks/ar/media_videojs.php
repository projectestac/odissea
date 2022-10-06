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
 * Strings for component 'media_videojs', language 'ar', version '3.11'.
 *
 * @package     media_videojs
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['audiocssclass'] = 'صنف CSS للصوت';
$string['audioextensions'] = 'إمتدادات ملف الصوت';
$string['configaudiocssclass'] = 'صنف CSS ستتم إضافته إلى مكون <audio>.';
$string['configaudioextensions'] = 'قائمة مفصولة بفوارز لامتدادات ملفات الصوت المدعومة. سيحاول VideoJS استعمال مشغل الفيديو المحلي في المستعرض عند توافره أو الوظيفة العادية لـ VideoJS، والتراجع إلى مشغل فلاش للصيغ الأخرى إذا كان الفلاش مدعوماً من قبل المستعرض وتم تمكين الرجوع إلى الفلاش أدناه.';
$string['configlimitsize'] = 'عند تمكينه، وكان كل من العرض والارتفاع غير محددين، سيتم عرض الفيديو بالعرض والارتفاع الافتراضيين. بخلاف ذلك، سيتمدد إلى أقصى عرض ممكن.';
$string['configrtmp'] = 'عند تمكينها، فإن الروابط التي تبدأ بـ rtmp:// ستتم معاملتها من قبل الإضافة بغض النظر عما إذا كان الامتداد مُمَكَّناً في إعداد امتدادات ملفات الفيديو (videoextensions). الرجوع إلى الفلاش ينبغي تمكينه ليعمل RTMP.';
$string['configuseflash'] = 'استعمل مشغل الفلاش إن كانت صيغة الفيديو غير مدعومة محلياً من قبل المستعرض و/أو غير مدعومة أيضاً من قبل مشغل VideoJS. عند تمكينه، سيتم الزج بـ VideoJS لأي ملف بالامتدادات من القائمة أعلاه دون التحقق من المستعرض. لطفاً، لاحظ أن مشغل الفلاش غير متاح في مستعرضات الجوالات وغير موصى به في الكثير من أجهزة سطح المكتب.';
$string['configvideocssclass'] = 'صنف CSS ستتم إضافته إلى مكون <video>. على سبيل المثال، صنف CSS "vjs-big-play-centered" سيقوم بوضع زر التشغيل في الوسط. لمعرفة التفاصيل، بضمنها كيفية وضع مظهر مخصص، أنظر docs.videojs.com.';
$string['configvideoextensions'] = 'قائمة مفصولة بفوارز لامتدادات ملفات الفيديو المدعومة. سيحاول VideoJS استعمال مشغل الفيديو المحلي في المستعرض عند توافره أو الوظيفة العادية لـ VideoJS، والتراجع إلى مشغل فلاش للصيغ الأخرى إذا كان الفلاش مدعوماً من قبل المستعرض وتم تمكين الرجوع إلى الفلاش أدناه.';
$string['configyoutube'] = 'استعمل VideoJS لتشغيل فيديوهات يوتيوب. لاحظ أن قوائم تشغيل يوتيوب لا تزال غير مدعومة من قبل VideoJS.';
$string['limitsize'] = 'قيِّد الحجم';
$string['pluginname'] = 'مشغل VideoJS';
$string['pluginname_help'] = 'غلاف JavaScript لملفات الفيديو المشغلة من قبل مشغل الفيديو المحلي في المستعرض مع الرجوع إلى مشغل الفلاش. (دعم الصيغ يعتمد على المستعرض).';
$string['privacy:metadata'] = 'إن ملحق مشغل الوسائط، VideoJS لا يخزن أي بيانات شخصية.';
$string['rtmp'] = 'دفق RTMP';
$string['useflash'] = 'استعمل الرجوع إلى فلاش';
$string['videocssclass'] = 'صنف CSS للفيديو';
$string['videoextensions'] = 'إمتدادات ملف الفيديو';
$string['youtube'] = 'فيديوهات يوتيوب';
