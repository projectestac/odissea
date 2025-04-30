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
 * Strings for component 'editor_marklar', language 'zh_cn', version '4.4'.
 *
 * @package     editor_marklar
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['insertimage'] = '插入图片';
$string['insertlink'] = '插入文件';
$string['pluginname'] = 'Marklar';
$string['preferences'] = 'Marklar编辑器偏好';
$string['preferencesformat'] = '还可以使用Marklar编辑的额外文本格式';
$string['preferencesformat_help'] = 'Marklar原生支持 Markdown 格式的文本，也可以用于编辑其他格式的文本。 选择要使用Marklar编辑的其他文本格式。

默认情况下，Marklar用于Moodle自动格式和纯文本格式字段。 对于编辑 HTML，将使用另一个富文本编辑器（例如 Atto 或 TinyMCE）。';
$string['previewloading'] = '加载预览中……';
$string['previewoff'] = '编辑';
$string['previewon'] = '预览';
$string['privacy:export:preferences:format'] = '您是否更喜欢使用Marklar来编辑{$a->format}的文本。';
$string['syntax-format0'] = '<p>如同发送纯文本电子邮件一样，Moodle自动格式允许正常输入文本，且保留换行符。 如果您愿意，您仍然可以嵌入 HTML 代码，它将会保留。</p>';
$string['syntax-format1'] = '<dl>
<dt>链接</dt>
  <dd><code>&lt;a href="https://example.com"&gt;链接文本&lt;/a&gt;</code></dd>
<dt>斜体和加粗</dt>
  <dd><code>&lt;em&gt;斜体&lt;/em&gt;</code></dd>
  <dd><code>&lt;strong&gt;加粗&lt;/strong&gt;</code></dd>
<dt>标题</dt>
  <dd><code>&lt;h2&gt;2级&lt;/h2&gt;</code></dd>
  <dd><code>&lt;h3&gt;3级&lt;/h2&gt;</code></dd>
<dt>段落和换行符</dt>
  <dd><code>&lt;p&gt;段落文本&lt;/p&gt;</code></dd>
  <dd><code>换行&lt;br&gt;换行</code></dd>
</dl>';
$string['syntax-format2'] = '<p>当您需要包含大量代码或HTML并且希望完全按照您编写的方式显示时，这种格式非常有用。 它仍然会翻译空格和换行符，但不会修改您的文本。</p>';
$string['syntax-format4'] = '<dl>
<dt>链接</dt>
 <dd><code>[链接文本](https://example.com)</code></dd>
 <dd><code>[链接文本](https://example.com "链接标题")</code></dd>
<dt>斜体和加粗</dt>
 <dd><code>_斜体文字_</code></dd>
 <dd><code>*斜体文字*</code></dd>
 <dd><code>__加粗文字__</code></dd>
 <dd><code>**加粗文字**</code></dd>
<dt>标题</dt>
 <dd><code>## 2级 ##</code></dd>
 <dd><code>### 3级 ###</code></dd>
<dt>段落和换行符</dt>
 <dd>段落之间用空行分隔。对于换行符，以两个或多个空格结束一行。</dd>
<dt>块引用</dt>
 <dd><代码>&gt;电子邮件样式的块引用</code></dd>
<dt>列表</dt>
 <dd><code>* 项目符号列表项</code></dd>
 <dd><代码>1/编号列表项</code></dd>
<dt>预格式化</dt>
 <dd><code>`function_name()`</code>（内联）</dd>
 <dd><code>&nbsp;&nbsp;&nbsp;code_block()</code>（缩进四个空格）</dd>
<dt>分割线</dt>
 <dd><code>---</code></dd>
 <dd><code>***</code></dd>
<dt>HTML</dt>
 <dd>对于 Markdown 语法未涵盖的任何标记，使用原始 HTML即可。</dd>
 <dd><code>&lt;span class="badge badge-info"&gt;通知&lt;/span&gt;</code></dd>
 <dd><code>&lt;img class="img-responsive" src="..." alt="..." /&gt;</code></dd>
</dl>
<hr>
<p><a target="_blank" href="https://daringfireball.net/projects/markdown/syntax">完整的 Markdown语法文档</a></p>';
$string['syntaxloading'] = '语法帮助加载中……';
$string['syntaxoff'] = '隐藏语法';
$string['syntaxon'] = '显示语法';
