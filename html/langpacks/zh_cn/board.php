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
 * Strings for component 'board', language 'zh_cn', version '4.5'.
 *
 * @package     board
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['Cancel'] = '取消';
$string['Ok'] = '确定';
$string['acceptedfiletypeforbackground'] = '背景图片接受的文件类型。';
$string['acceptedfiletypeforbackground_desc'] = '选择要支持的背景图片的文件类型。';
$string['acceptedfiletypeforcontent'] = '内容图片接受的文件类型。';
$string['acceptedfiletypeforcontent_desc'] = '选择要支持的内容图片的文件类型。';
$string['addcomment'] = '添加评论';
$string['addrating'] = '为帖子评分';
$string['addrating_all'] = '所有人';
$string['addrating_none'] = '禁用';
$string['addrating_students'] = '由学生';
$string['addrating_teachers'] = '由教师';
$string['allowed_singleuser_modes'] = '启用单用户模式';
$string['allowed_singleuser_modes_desc'] = '允许/禁止使用特定的单用户模式。不影响已创建的留言板';
$string['allowyoutube'] = '允许YouTube';
$string['allowyoutube_desc'] = '如果激活，将支持添加嵌入的YouTube视频的按钮。';
$string['aria_addmedia'] = '为 {column} 列的帖子 {post} 添加 {type}';
$string['aria_addmedianew'] = '为 {column} 列的新帖子添加 {type}';
$string['aria_canceledit'] = '取消对 {column} 列的帖子 {post} 的编辑';
$string['aria_cancelnew'] = '取消 {column} 列的新帖子';
$string['aria_choosefileedit'] = '为 {column} 列的帖子 {post} 选择文件';
$string['aria_choosefilenew'] = '为 {column} 列的新帖子选择文件';
$string['aria_column_locked'] = '{$a} 列已锁定';
$string['aria_column_unlocked'] = '{$a} 列已解锁';
$string['aria_deleteattachment'] = '从 {column} 列的帖子 {post} 删除附件';
$string['aria_deletecolumn'] = '删除 {column} 列';
$string['aria_deletepost'] = '从 {column} 列删除帖子 {post}';
$string['aria_editpost'] = '编辑帖子 {post}';
$string['aria_movecolumn'] = '移动 {column} 列';
$string['aria_movepost'] = '移动帖子 {post}';
$string['aria_newcolumn'] = '添加新列';
$string['aria_newpost'] = '在 {column} 列添加新帖子';
$string['aria_postedit'] = '保存对 {column} 列的帖子 {post} 的编辑';
$string['aria_postnew'] = '保存 {column} 列的新帖子';
$string['aria_ratepost'] = '为 {column} 列的帖子 {post} 评分';
$string['background_color'] = '背景颜色';
$string['background_color_help'] = '应该是一个有效的十六进制颜色，例如 #00cc99';
$string['background_image'] = '背景图片';
$string['blanktargetenabled'] = '此留言板已配置为在新窗口或标签页中启动其所有URL/网页链接。';
$string['board:addinstance'] = '新增留言板资源';
$string['board:deleteallcomments'] = '查看并删除所有帖子上的评论';
$string['board:manageboard'] = '管理栏目和所有帖子。';
$string['board:postcomment'] = '创建并查看帖子上的评论';
$string['board:view'] = '查看留言板内容并管理自己的帖子。';
$string['board_column_locked'] = '此列已锁定，无法编辑。';
$string['boardhasnotes'] = '此留言板已有帖子发布，不允许更改用户模式';
$string['boardsettings'] = '留言板设置';
$string['brickfieldlogo'] = '由 Brickfield 提供支持 logo';
$string['cancel_button_text'] = '取消';
$string['choose_file'] = '选择图像文件';
$string['column_colours'] = '列颜色';
$string['column_colours_desc'] = '每列顶部使用的颜色。应为十六进制颜色代码，每行放置一个，为3或6个字符。错误的颜色代码将会用默认值代替。';
$string['comment'] = '评论';
$string['comments'] = '{$a} 条评论';
$string['completiondetail:notes'] = '添加帖子：{$a}';
$string['completionnotes'] = '要求学生添加此数量的帖子以完成活动';
$string['completionnotesgroup'] = '需要学生添加帖子';
$string['default_column_heading'] = '标题';
$string['delete'] = '删除';
$string['deletecomment'] = '删除评论';
$string['embed_height'] = '嵌入高度';
$string['embed_height_desc'] = '在课程内嵌入留言板时要使用的iframe高度。这应该是一个有效的CSS值，例如px、rem、%等。';
$string['embed_width'] = '嵌入宽度';
$string['embed_width_desc'] = '在课程内嵌入留言板时要使用的iframe宽度。这应该是一个有效的CSS值，例如px、rem、%等。';
$string['embedboard'] = '将留言板嵌入课程页面';
$string['enableblanktarget'] = '启用链接打开新窗口/标签页';
$string['enableblanktarget_help'] = '启用后，所有链接将在新标签页/窗口中打开。';
$string['event_add_column'] = '列添加';
$string['event_add_column_desc'] = '用户ID为\'{$a->userid}\'创建了ID为\'{$a->objectid}\'和名称为\'{$a->name}\'的留言板列。';
$string['event_add_comment'] = '添加评论';
$string['event_add_comment_desc'] = '用户ID为\'{$a->userid}\'在ID为\'{$a->noteid}\'的帖子上添加了ID为\'{$a->objectid}\'、内容为\'{$a->content}\'的评论。';
$string['event_add_note'] = '帖子添加';
$string['event_add_note_desc'] = '用户ID为\'{$a->userid}\'在ID为\'{$a->columnid}\'的留言板列上创建了ID为\'{$a->objectid}\'、标题为\'{$a->heading}\'、内容为\'{$a->content}\'、媒体为\'{$a->media}\'的帖子。';
$string['event_delete_column'] = '列删除';
$string['event_delete_column_desc'] = '用户ID为\'{$a->userid}\'删除了ID为\'{$a->objectid}\'的留言板列。';
$string['event_delete_comment'] = '评论删除';
$string['event_delete_comment_desc'] = '用户ID为\'{$a->userid}\'从ID为\'{$a->noteid}\'的帖子中删除了ID为\'{$a->objectid}\'的评论。';
$string['event_delete_note'] = '帖子删除';
$string['event_delete_note_desc'] = '用户ID为\'{$a->userid}\'从ID为\'{$a->columnid}\'的留言板列中删除了ID为\'{$a->objectid}\'的帖子。';
$string['event_move_note'] = '帖子移动';
$string['event_move_note_desc'] = '用户ID为\'{$a->userid}\'将ID为\'{$a->objectid}\'的留言板帖子移动到ID为\'{$a->columnid}\'的列。';
$string['event_rate_note'] = '帖子评价';
$string['event_rate_note_desc'] = '用户ID为\'{$a->userid}\'为ID为\'{$a->objectid}\'的留言板帖子评价为\'{$a->rating}\'。';
$string['event_update_column'] = '列更新';
$string['event_update_column_desc'] = '用户ID为\'{$a->userid}\'将ID为\'{$a->objectid}\'的留言板列更新为\'{$a->name}\'。';
$string['event_update_note'] = '帖子更新';
$string['event_update_note_desc'] = '用户ID为\'{$a->userid}\'更新了ID为\'{$a->objectid}\'的留言板帖子的标题为\'{$a->heading}\'、内容为\'{$a->content}\'、媒体为\'{$a->media}\'。';
$string['export'] = '导出';
$string['export_backtoboard'] = '返回留言板';
$string['export_board'] = '导出留言板';
$string['export_comment'] = '评论';
$string['export_comments'] = '导出评论';
$string['export_comments_description'] = '请选择要导出的评论类型。';
$string['export_comments_include_deleted'] = '您可以选择导出所有评论，包括已删除的评论。';
$string['export_comments_include_deleted_button'] = '导出评论（包括已删除的评论）';
$string['export_content'] = '文本';
$string['export_deleted'] = '已删除';
$string['export_email'] = '电子邮件';
$string['export_firstname'] = '名字';
$string['export_heading'] = '帖子标题';
$string['export_info'] = '媒体标题';
$string['export_lastname'] = '姓氏';
$string['export_submissions'] = '导出提交内容';
$string['export_timecreated'] = '创建日期';
$string['export_url'] = '媒体URL';
$string['form_body'] = '内容';
$string['form_image_file'] = '图像文件';
$string['form_mediatype'] = '媒体类型';
$string['form_title'] = '帖子标题';
$string['hideheaders'] = '对学生隐藏列标题';
$string['history'] = '留言板历史';
$string['history_refresh'] = '留言板刷新设置';
$string['history_refresh_desc'] = '自动刷新留言板之间的超时时间（以秒为单位）。如果设置为0或为空，则仅在留言板操作（添加/更新等）期间刷新留言板。';
$string['historyinfo'] = '留言板历史表仅用于存储临时记录，由JavaScript进程使用以刷新留言板视图，然后立即删除。';
$string['include_deleted'] = '包括已删除的';
$string['invalid_file_extension'] = '不接受上传的文件扩展名。';
$string['invalid_file_size_max'] = '文件太大了，请调整。';
$string['invalid_file_size_min'] = '文件太小了，请调整。';
$string['invalid_youtube_url'] = '无效的YouTube链接';
$string['media_selection'] = '媒体选择';
$string['media_selection_buttons'] = '按钮';
$string['media_selection_desc'] = '配置帖子的媒体选择如何显示。';
$string['media_selection_dropdown'] = '下拉框';
$string['modal_title_edit'] = '编辑 {column} 列的帖子';
$string['modal_title_new'] = '在 {column} 列创建新帖子';
$string['modulename'] = '留言板';
$string['modulename_help'] = '这是一个Moodle的新活动，允许教师创建一个新的“便签”留言板。';
$string['modulenameplural'] = '留言板';
$string['move_column_to_aftercolumn'] = '移动列到 {$a} 列后';
$string['move_column_to_firstplace'] = '将列移动到列首';
$string['move_to_afterpost'] = '移动到帖子 {$a} 后移动';
$string['move_to_firstitemcolumn'] = '移动到 {$a} 列';
$string['new_column_icon'] = '新列图标';
$string['new_column_icon_desc'] = '在新增列的按钮上显示的图标。';
$string['new_note_icon'] = '新帖子图标';
$string['new_note_icon_desc'] = '在新增帖子的按钮上显示的图标。';
$string['nopermission'] = '您无权查看此留言板。';
$string['note_changed_text'] = '您正在编辑的帖子已更改。';
$string['note_changed_title'] = '确认';
$string['note_deleted_text'] = '您正在编辑的帖子已被删除。';
$string['nousers'] = '此留言板活动没有已注册的用户';
$string['opensinnewwindow'] = '在新窗口打开';
$string['option_empty'] = '无';
$string['option_image'] = '图像';
$string['option_image_info'] = '图像标题';
$string['option_image_url'] = '图像链接';
$string['option_link'] = '链接';
$string['option_link_info'] = '链接标题';
$string['option_link_url'] = '链接URL';
$string['option_youtube'] = '视频（YouTube）';
$string['option_youtube_info'] = '视频标题';
$string['option_youtube_url'] = 'YouTube链接';
$string['pluginadministration'] = '留言板模块管理';
$string['pluginname'] = '留言板';
$string['post_button_text'] = '发布';
$string['post_max_length'] = '帖子最大长度';
$string['post_max_length_desc'] = '允许的最大内容长度。超过此长度的内容将被截断。';
$string['postbydate'] = '按日期发布';
$string['postbyenabled'] = '限制学生按日期发布';
$string['posts'] = '帖子';
$string['privacy:metadata:board_comments'] = '每个板帖子的评论信息。';
$string['privacy:metadata:board_comments:content'] = '帖子评论的内容';
$string['privacy:metadata:board_comments:noteid'] = '相关帖子的ID';
$string['privacy:metadata:board_comments:timecreated'] = '帖子评论创建时间';
$string['privacy:metadata:board_comments:userid'] = '添加评论的用户ID';
$string['privacy:metadata:board_history'] = '临时留言板历史记录信息，由JavaScript进程使用以刷新留言板视图，然后立即删除。';
$string['privacy:metadata:board_history:action'] = '执行的操作';
$string['privacy:metadata:board_history:boardid'] = '留言板ID';
$string['privacy:metadata:board_history:content'] = '执行操作的JSON数据';
$string['privacy:metadata:board_history:timecreated'] = '执行操作的时间';
$string['privacy:metadata:board_history:userid'] = '执行操作的用户ID';
$string['privacy:metadata:board_note_ratings'] = '每个留言板帖子的评分信息。';
$string['privacy:metadata:board_note_ratings:noteid'] = '相关帖子的ID';
$string['privacy:metadata:board_note_ratings:timecreated'] = '帖子评分的创建时间';
$string['privacy:metadata:board_note_ratings:userid'] = '创建帖子评分的用户ID';
$string['privacy:metadata:board_notes'] = '每个留言板帖子的信息。';
$string['privacy:metadata:board_notes:columnid'] = '帖子列位置';
$string['privacy:metadata:board_notes:content'] = '帖子内容';
$string['privacy:metadata:board_notes:heading'] = '帖子标题';
$string['privacy:metadata:board_notes:info'] = '帖子的媒体信息';
$string['privacy:metadata:board_notes:timecreated'] = '帖子创建时间';
$string['privacy:metadata:board_notes:url'] = '帖子的媒体URL';
$string['privacy:metadata:board_notes:userid'] = '创建帖子的用户ID';
$string['rate_note_text'] = '您确定要为此帖子评分吗？';
$string['rate_note_title'] = '确认';
$string['rate_remove_note_text'] = '您确定要移除对此帖子的评分吗？';
$string['ratings'] = '评分';
$string['remove_column_text'] = '您确定要删除 "{$a}" 列及其包含的所有帖子吗？';
$string['remove_column_title'] = '确认';
$string['remove_note_text'] = '您确定要删除此帖子及其包含的所有数据吗？这将影响所有其他用户。';
$string['remove_note_title'] = '确认';
$string['selectuser'] = '选择用户';
$string['selectuserplease'] = '请选择用户';
$string['singleusermode'] = '单用户模式';
$string['singleusermode_desc'] = '在单用户模式中，用户只能在自己的留言板上添加帖子；如果是私密的，用户不能查看其他用户的留言板；如果是公开的，用户可以通过下拉菜单访问其他用户的留言板。';
$string['singleusermodenone'] = '禁用';
$string['singleusermodenotembed'] = '留言板不允许嵌入单用户留言板。请更改您的设置。';
$string['singleusermodeprivate'] = '单用户模式（私密）';
$string['singleusermodepublic'] = '单用户模式（公开）';
$string['sortby'] = '排序方式';
$string['sortbydate'] = '创建日期';
$string['sortbynone'] = '无';
$string['sortbyrating'] = '评分';
$string['userscanedit'] = '允许所有用户编辑自己帖子的位置。';
$string['viewboard'] = '查看留言板活动';
$string['warning'] = '通知';
