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
 * Strings for component 'assignsubmission_cloudpoodll', language 'zh_cn', version '4.4'.
 *
 * @package     assignsubmission_cloudpoodll
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowcloudpoodllsubmissions'] = '启用';
$string['apisecret'] = 'Poodll API密码';
$string['apisecret_details'] = 'Poodll API密码。请参见<a href= "https://support.poodll.com/support/solutions/articles/19000083076-cloud-poodll-api-secret">此处</a>查看更多详细信息';
$string['apiuser'] = 'Poodll API 用户';
$string['apiuser_details'] = '授权此网站上的Poodll的Poodll帐户用户名。';
$string['appauthorised'] = '已为此网站授权分配提交Cloud Poodll。';
$string['appnotauthorised'] = '此网站未授权分配提交Cloud Poodll。';
$string['audiolistdisplay'] = '显示音频播放器(列表)';
$string['audiosingledisplay'] = '显示音频播放器(单独的)';
$string['clicktohide'] = '隐藏当前提交';
$string['clicktoshow'] = '显示当前提交';
$string['cloudpoodll:use'] = '允许使用云Cloud Poodll提交';
$string['cloudpoodll_cleanup_task'] = 'CloudPoodll分配提交清理';
$string['credentialsinvalid'] = '无法使用输入的API用户和密码获取访问权限。请检查一下。';
$string['currentsubmission'] = '定制提交:';
$string['customname'] = '定制名称';
$string['customnamedetails'] = '为插件中显示的提交字段（即非“记录器”）设置自定义名称';
$string['default'] = '默认启用';
$string['default_help'] = '如果已设置，则默认情况下将为所有新任务分配启用此提交方法。';
$string['defaultplayertype'] = '成绩单显示（教师）';
$string['defaultplayertypedetails'] = '如果你正在转录成绩单，请使用交互式或者静态成绩单展示器';
$string['defaultplayertypestudent'] = '成绩单显示（学生）';
$string['defaultrecorder'] = '记录类型';
$string['deletesubmission'] = '删除提交';
$string['displayaudioplayerlist'] = '显示音频播放器(列表)';
$string['displayaudioplayersingle'] = '显示音频播放器(常规)';
$string['displaysizelist'] = '视频播放器大小(列表中)';
$string['enableaudio'] = '允许音频录制';
$string['enabled_help'] = '如果启用，学生可以录制此作业的音频或视频（根据设置）。';
$string['enablesecureplayback'] = '限制播放';
$string['enablesecureplayback_details'] = '如果启用，提交的播放URL将有时间限制，并将在60分钟后过期。';
$string['enabletranscode'] = '允许转码';
$string['enabletranscode_details'] = 'Cloud Poodll可以转码录制为 mp3/mp4';
$string['enabletranscription'] = '启用转录';
$string['enabletranscription_details'] = '如果需要，Cloud Poodll可以转录学生讲话';
$string['enablevideo'] = '启用视频录制';
$string['expiredays'] = 'Cloud Poodll保留文件的天数';
$string['fallback'] = '非HTML5反馈';
$string['fallbackdetails'] = '如果浏览器不支持所选媒体类型的HTML5录制，请返回上传屏幕或警告';
$string['fallbackiosupload'] = 'iOS: 上传,除非警告';
$string['fallbackupload'] = '上传';
$string['fallbackwarning'] = '警告';
$string['fillcredentials'] = '使用现有凭据设置API用户和密码';
$string['forever'] = '永不过期';
$string['freetrial_desc'] = '应该会出现一个对话框，允许您注册Poodll免费试用版。注册后，您应该登录到成员仪表板以获取API用户和密码。并注册您的网站URL。';
$string['noapisecret'] = '未输入API密钥。此插件无法正常工作。';
$string['noapiuser'] = '未输入API用户。此插件无法正常工作。';
$string['nocredentials'] = '未输入API用户和密钥。请在 <a href="{$a}">设置页面</a>中输入它们 您可以从<a href=“https://poodll.com/member“>Poodll.com</a>找到这个页面';
$string['nosubmission'] = '此作业未提交任何内容';
$string['nosubscriptions'] = '此网站/插件当前没有订阅。';
$string['notokenincache'] = '刷新以查看许可证信息。如果有问题，请联系Poodll支持。';
$string['novalidcredentials'] = 'API用户和密钥被拒绝，无法访问。请在<a href="{$a}">设置页面</a>上检查它们</a> 您可以从<a href=“https://poodll.com/member“>Poodll.com</a>找到这个页面';
$string['numwords'] = '({$a} 词)';
$string['playertype'] = 'Cloud Poodll成绩单显示 (教师)';
$string['playertypedefault'] = '没有成绩单';
$string['playertypeinteractivetranscript'] = '交互式成绩单';
$string['playertypestandardtranscript'] = '静态成绩单';
$string['playertypestudent'] = 'Cloud Poodll成绩单显示 (学生)';
$string['pluginname'] = 'Cloud Poodll提交';
$string['privacy:metadata:assignmentid'] = '分配id';
$string['privacy:metadata:cloudpoodllcom'] = 'assignsubmission_cloudpoodl插件通过云将记录存储在AWS S3存储桶中。poodll。通用域名格式。';
$string['privacy:metadata:cloudpoodllcom:userid'] = 'assignsubmission_cloudpoodl插件在录制的URL中包含moodle用户ID。';
$string['privacy:metadata:filepurpose'] = '已提交录制的文件URL。';
$string['privacy:metadata:fulltranscriptpurpose'] = '此任务尝试的包含元数据成绩单。';
$string['privacy:metadata:submissionpurpose'] = '链接到用户提交内容的提交ID。';
$string['privacy:metadata:tablepurpose'] = '存储每次尝试提交的文本和URL。';
$string['privacy:metadata:transcriptpurpose'] = '本次任务尝试的成绩单。';
$string['privacy:metadata:vttpurpose'] = '本次作业的字幕呈现。';
$string['privacy:path'] = '字幕文本';
$string['reallydeletesubmission'] = '是否确实删除此提交？';
$string['recorder'] = '记录器类型';
$string['recorderdisplayname'] = '记录器';
$string['recorderskin'] = 'Cloud Poodll Rec. 皮肤';
$string['recordertype'] = 'Cloud Poodll Rec. 类型';
$string['recordervideo'] = '视频记录器';
$string['refreshtoken'] = '刷新许可证信息';
$string['safesave'] = '启用安全保存-禁用分配提交按钮，直到Cloud Poodll上传完成。';
$string['setting_audio_heading'] = '音频播放器设置';
$string['setting_audio_heading_details'] = '控制提交审核和列表页面中播放器外观的设置';
$string['setting_video_heading'] = '视频播放器设置';
$string['setting_video_heading_details'] = '控制提交审核和列表页面中播放器外观的设置';
$string['showaudiolightbox'] = '显示文件名(轻量盒外观)';
$string['shownoaudio'] = '显示文件名';
$string['shownovideo'] = '显示文件名';
$string['showvideolightbox'] = '显示文件名(轻量盒外观)';
$string['skin123'] = '1 2 3';
$string['skinonce'] = '一次';
$string['skinplain'] = '纯文本';
$string['skinscreen'] = '屏幕录制器(视频)';
$string['skinupload'] = '上传';
