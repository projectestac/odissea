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
 * Strings for component 'media_videojs', language 'zh_cn', version '4.1'.
 *
 * @package     media_videojs
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['audiocssclass'] = '音频的CSS类';
$string['audioextensions'] = '音频文件扩展名';
$string['configaudiocssclass'] = '将被添加到&lt:audio&gt; 元素的CSS类';
$string['configaudioextensions'] = '使用逗号分隔的可以支持的音频文件扩展名列表。如果浏览器有自带可用的视频播放器，VideoJS将使用浏览器自带的视频播放器或自带的VideoJS功能。如果浏览器支持Flash且在下面启用了Flash播放，VideoJS将使用Flash播放器播放其他格式视频。';
$string['configlimitsize'] = '如果启用，且未指定宽度和高度，视频将以默认宽度和高度显示。否则，它将拉伸到可能的最大宽度。';
$string['configrtmp'] = '如果启用，则插件将处理以rtmp://开头的链接，而不管是否在“视频文件扩展名（videoextensions）”设置中启用了扩展名。必须启用闪存回调，RTMP才能工作。';
$string['configuseflash'] = '如果浏览器和/或VideoJS播放器本身不支持视频的格式，请使用Flash player。如果启用，VideoJS将用于上述列表中的任何文件扩展名，而无需进行浏览器检查。请注意，Flash在移动浏览器中不可用，在许多桌面浏览器中不鼓励使用。';
$string['configvideocssclass'] = '将被添加到&lt:audio&gt; 元素的CSS类。例如，CSS类“vjs-big-play-centered”将播放按钮放在中间。有关详细信息，包括如何设置自定义皮肤，请参阅docs.videojs.com。';
$string['configvideoextensions'] = '支持的视频文件扩展名的逗号分隔列表。VideoJS将在可用时尝试使用浏览器的原生视频播放器';
$string['configyoutube'] = '使用VideoJS播放YouTube视频。请注意，VideoJS目前还不支持YouTube播放列表。';
$string['limitsize'] = '限制尺寸';
$string['pluginname'] = 'VideoJS播放器';
$string['pluginname_help'] = '浏览器原生视频播放器播放的视频文件JavaScript包装。（格式支持取决于浏览器。）';
$string['privacy:metadata'] = 'VideoJS播放器媒体插件不存储任何个人数据。';
$string['rtmp'] = 'RTMP流';
$string['useflash'] = '使用Flash回调';
$string['videocssclass'] = 'CSS视频类';
$string['videoextensions'] = '视频文件扩展名';
$string['youtube'] = 'YouTube视频';
