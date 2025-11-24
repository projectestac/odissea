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
 * Strings for component 'ai', language 'zh_cn', version '4.5'.
 *
 * @package     ai
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptai'] = '接受并继续';
$string['action'] = '指令';
$string['action_generate_image'] = '生成图像';
$string['action_generate_image_desc'] = '根据文本提示生成图像。';
$string['action_generate_text'] = '生成文本';
$string['action_generate_text_desc'] = '根据文本提示生成文本。';
$string['action_generate_text_instruction'] = '您将收到来自用户的文本输入。您的任务是根据他们的请求生成文本。遵循以下重要指示：
1. 仅以纯文本形式返回摘要。
2. 不要包含任何 markdown 格式、问候或陈词滥调。';
$string['action_summarise_text'] = '总结文本';
$string['action_summarise_text_desc'] = '总结课程页面上的文本内容。';
$string['action_summarise_text_instruction'] = '您将收到来自用户的文本输入。你的任务是总结所提供的文本。遵循以下准则：
    1. 精简：把冗长的段落缩短成重点。
    2. 简化：使复杂的信息更容易理解，尤其是对学习者。

重要说明:
    1. 仅以纯文本形式返回摘要。
    2. 不要包含任何 markdown 格式、问候或陈词滥调。
    3. 专注于清晰、简洁和可访问性。

确保摘要易于阅读，并有效地传达原文的要点。';
$string['action_translate_text'] = '翻译文本';
$string['action_translate_text_desc'] = '将提供的文本从一种语言翻译成另一种语言。';
$string['actionsettingprovider'] = '{$a}指令设置';
$string['actionsettingprovider_desc'] = '这些设置控制{$a->providername}如何提供{$a->actionname}指令。';
$string['ai'] = 'AI';
$string['aiplacements'] = 'AI 位置';
$string['aiproviders'] = 'AI提供者';
$string['aiusagepolicy'] = 'AI 使用策略';
$string['availableplacements'] = '选择AI指令可用的位置';
$string['availableplacements_desc'] = '位置定义了AI指令可以在你的网站如何以及在哪里使用。您可以通过设置选择每个位置中可用的指令。';
$string['availableproviders'] = '管理连接到您的LMS的AI提供者';
$string['availableproviders_desc'] = 'AI提供者通过“actions”为您的网站添加文本摘要或图像生成AI功能。您可以在它们的设置中管理每个actions的操作。';
$string['contentwatermark'] = '由AI生成';
$string['declineaipolicy'] = '拒绝';
$string['manageaiplacements'] = '管理 AI 位置';
$string['manageaiproviders'] = '管理AI提供者';
$string['noproviders'] = '此操作不可用。没有为此操作配置 <a href="{$a}">AI 提供程序</a>。';
$string['placement'] = '位置';
$string['placementactionsettings'] = '操作';
$string['placementactionsettings_desc'] = '可用于此位置的 AI 操作。';
$string['placementsettings'] = '特定位置的设置';
$string['placementsettings_desc'] = '这些设置控制此 AI 位置如何连接到 AI 服务以及相关操作。';
$string['privacy:metadata:ai_action_generate_image'] = '一个用于存储用户发出的图像生成请求的表。';
$string['privacy:metadata:ai_action_generate_image:aspectratio'] = '生成的图像的纵横比';
$string['privacy:metadata:ai_action_generate_image:numberimages'] = '生成的图像数';
$string['privacy:metadata:ai_action_generate_image:prompt'] = '请求生成图像的提示词。';
$string['privacy:metadata:ai_action_generate_image:quality'] = '生成的图像质量';
$string['privacy:metadata:ai_action_generate_image:revisedprompt'] = '修改过的生成图像的提示词';
$string['privacy:metadata:ai_action_generate_image:sourceurl'] = '生成图像的源 URL';
$string['privacy:metadata:ai_action_generate_image:style'] = '生成的图像的样式';
$string['privacy:metadata:ai_action_generate_text'] = '一个用于存储用户发出的文本生成请求的表';
$string['privacy:metadata:ai_action_generate_text:completiontoken'] = '用于生成文本的完成标记';
$string['privacy:metadata:ai_action_generate_text:fingerprint'] = '表示模型和内容的状态/版本的唯一哈希值。';
$string['privacy:metadata:ai_action_generate_text:generatedcontent'] = 'AI 模型基于输入提示生成的实际文本。';
$string['privacy:metadata:ai_action_generate_text:prompt'] = '文本生成请求的提示';
$string['privacy:metadata:ai_action_generate_text:prompttokens'] = '用于生成文本的提示标记';
$string['privacy:metadata:ai_action_generate_text:responseid'] = '回答的 ID';
$string['privacy:metadata:ai_action_register'] = '一个用于存储用户发出的操作请求的表';
$string['privacy:metadata:ai_action_register:actionid'] = '操作请求的 ID';
$string['privacy:metadata:ai_action_register:actionname'] = '请求的操作名称';
$string['privacy:metadata:ai_action_register:provider'] = '处理请求的提供程序的名称';
$string['privacy:metadata:ai_action_register:success'] = '操作请求的状态';
$string['privacy:metadata:ai_action_register:timecompleted'] = '请求的完成时间';
$string['privacy:metadata:ai_action_register:timecreated'] = '请求的创建时间';
$string['privacy:metadata:ai_action_register:userid'] = '发出请求的用户的 ID';
$string['privacy:metadata:ai_action_summarise_text'] = '一个用于存储用户发出的摘要文本请求的表';
$string['privacy:metadata:ai_action_summarise_text:completiontoken'] = '用于总结文本的完成标记';
$string['privacy:metadata:ai_action_summarise_text:fingerprint'] = '表示模型和内容的状态/版本的唯一哈希值。';
$string['privacy:metadata:ai_action_summarise_text:generatedcontent'] = 'AI 模型基于输入提示生成的实际文本';
$string['privacy:metadata:ai_action_summarise_text:prompt'] = '总结文本请求的提示';
$string['privacy:metadata:ai_action_summarise_text:prompttokens'] = '用于总结文本的提示标记';
$string['privacy:metadata:ai_action_summarise_text:responseid'] = '回答的 ID';
$string['privacy:metadata:ai_policy_register'] = '一个存储每个用户的 AI 策略接受状态的表';
$string['privacy:metadata:ai_policy_register:contextid'] = '保存其数据的上下文的 ID';
$string['privacy:metadata:ai_policy_register:timeaccepted'] = '用户接受 AI 策略的时间';
$string['privacy:metadata:ai_policy_register:userid'] = '保存其数据的用户的 ID';
$string['provider'] = '提供者';
$string['provideractionsettings'] = '指令';
$string['provideractionsettings_desc'] = '选择并配置 {$a} 可以在您的站点上执行的指令。';
$string['providers'] = '提供者';
$string['providersettings'] = '设置';
$string['userpolicy'] = '<h4><strong>欢迎使用新的 AI 功能！</strong></h4>
<p>此人工智能 （AI） 功能完全基于外部大型语言模型 （LLM），以改善您的学习和教学体验。在开始使用这些 AI 服务之前，请阅读此使用策略。</p>
<h4><strong>AI 生成内容的准确性</strong></h4>
<p>AI 可以提供有用的建议和信息，但其准确性可能会有所不同。您应该始终仔细检查所提供的信息，以确保其准确、完整且适合您的具体情况。</p>
<h4><strong>您的数据的处理方式</strong></h4>
<p>此 AI 功能使用外部大型语言模型 （LLM）。如果您使用此功能，您共享的任何信息或个人数据都将根据这些 LLM 的隐私政策进行处理。我们建议您阅读他们的隐私政策，了解他们将如何处理您的数据。此外，您与 AI 功能的交互记录可能会保存在此站点中。</p>
<p>如果您对数据的处理方式有疑问，请咨询您的老师或学习机构。</p>
<p>继续，即表示您承认您理解并同意本政策。</p>';
