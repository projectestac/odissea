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
 * Strings for component 'format_socialwall', language 'en', version '4.4'.
 *
 * @package     format_socialwall
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addactivityresource'] = 'Add activity/resource';
$string['addalink'] = 'Add a link';
$string['addedactivities'] = 'Add activities';
$string['addrecentactivity'] = 'Add existing activity';
$string['addselectedactivities'] = 'Add selected activities';
$string['allmodultypes'] = 'All module types';
$string['allmygroups'] = 'All my Groups';
$string['attach'] = 'Attach';
$string['attachactivities'] = 'Create a new activity or drag and drop a existing one into here:';
$string['attachedactivities'] = 'Attached activities (will be sent by next post):';
$string['attachedrecentactivities'] = 'Attached existing activities (will be sent by next post or update)';
$string['attachessaved'] = 'Attachments saved';
$string['attachmentorpostrequired'] = 'Attachment or posttext required!';
$string['attachmentsaveerror'] = 'Error by saving attachment';
$string['attachselectedactivities'] = 'Attach selected activities';
$string['attachturnediton'] = 'Turn editing on, to attach activities to post';
$string['cachedef_attachedrecentactivities'] = 'SocialWall:Attached recent activities';
$string['cachedef_commentformerrors'] = 'SocialWall:Comment form errors';
$string['cachedef_postformerrors'] = 'SocialWall:Post form errors';
$string['cachedef_postformparams'] = 'SocialWall:Post form params';
$string['cachedef_timelinefilter'] = 'SocialWall:Timeline filter';
$string['cancel'] = 'Cancel';
$string['commentdeleted'] = 'Comment deleted';
$string['commentidinvalid'] = 'Invalid comment id';
$string['commentsaved'] = 'Comment saved';
$string['commentsaveerror'] = 'Error by saving comment';
$string['confirmdeletecomment'] = 'Do you really want to delete this comment?';
$string['countcomments'] = '{$a} Comments';
$string['countlikes'] = '{$a} Likes';
$string['counttotalpost'] = '{$a->count}/{$a->total} posts';
$string['currentsection'] = 'This topic';
$string['deleteafterunenrol'] = 'Delete Items after unenrol user';
$string['deleteafterunenrol_help'] = 'When a user unenrols from a course all his posts and comments will be deleted.';
$string['deleteafterunenroldesc'] = 'When a user unenrols from a course all his posts and comments will be deleted.';
$string['deletemodspermanently'] = 'Automatically delete activities';
$string['deletemodspermanently_help'] = 'When set to Yes an activity is deleted, when the last post is deleted, where this activity was attached to.
    Note that posts (and probably activities) are also deleted, when a user is deleted. So please be careful with this setting!';
$string['edited'] = 'edited';
$string['editnotification'] = 'Edit notification settings';
$string['enablelikes'] = 'Enable likes';
$string['enablelikes_help'] = 'User will be able to like or unlike a post in this course.';
$string['enablelikesdesc'] = 'Default setting for enable likes.';
$string['enablenotification'] = 'Enable notification';
$string['enablenotification_help'] = 'Notification can be setup for users.';
$string['enablenotificationdesc'] = 'Default setting for course format options.';
$string['enablestudentupload'] = 'Allow users to upload files and links';
$string['enablestudentupload_help'] = 'Students will be able to add a file or a url to a post';
$string['enablestudentuploaddesc'] = 'Default setting for upload option.';
$string['errorsavestateedit'] = 'Error by saving post. post is not saved.';
$string['filtersheader'] = 'Filters';
$string['filtertimeline'] = 'Filter';
$string['gradednote'] = 'You have been graded on {$a->name}: {$a->result}';
$string['hidefromothers'] = 'Hide topic';
$string['invalidcommentid'] = 'Invalid comment';
$string['invalidcourseid'] = 'Invalid course';
$string['invalidpostcomment'] = 'Error while posting comment';
$string['invalidpostid'] = 'Invalid post';
$string['like'] = 'Like';
$string['likenomore'] = 'Like no more';
$string['likesaredisabled'] = 'Likes are disabled';
$string['likesaved'] = 'Like saved';
$string['locked'] = 'locked';
$string['lockpost'] = 'Post is unlocked, click to lock';
$string['makealert'] = 'Make alert';
$string['makesticky'] = 'Make post sticky';
$string['makeunsticky'] = 'Make post unsticky';
$string['messageprovider:timelineposts'] = 'Notification of aocialwall course format timeline';
$string['missingcapdeletecomment'] = 'You don\'t have the permission to delete a comment.';
$string['missingcapdeletepost'] = 'You don\'t have the permission to delete a post.';
$string['missingcaplikepost'] = 'Missing capabiltiy to like posts.';
$string['missingcaplockcomment'] = 'Missing capability to lock comments.';
$string['missingcapmakesticky'] = 'Missing capabiltiy to make a post sticky or unsticky';
$string['missingcappostfile'] = 'You don\'t have the permission to post a file.';
$string['missingcapposturl'] = 'You don\'t have the permission to post a url.';
$string['missingcapupdatepost'] = 'You don\'t have the permission to update this post.';
$string['missingcapwritecomment'] = 'Missing capability to write comments.';
$string['nf_comment_created'] = '{$a->creator} commented a post: {$a->commenttext}';
$string['nf_gotocourse'] = 'Go to course';
$string['nf_like_created'] = '{$a->creator} liked a post: {$a->posttext}';
$string['nf_like_deleted'] = '{$a->creator} unliked a post: {$a->posttext}';
$string['nf_post_created'] = '{$a->creator} posted to timeline: {$a->posttext}';
$string['nf_post_locked'] = '{$a->creator} stopped commenting on: {$a->posttext}';
$string['nf_post_unlocked'] = '{$a->creator} enabled commenting on: {$a->posttext}';
$string['nonexistinggroup'] = 'no more existing group';
$string['noposttoupdate'] = 'The post you like to update doesn\'t in the database';
$string['norecentactivities'] = 'There are no recent activities';
$string['notificationdigest'] = 'Per digest';
$string['notificationfromcourse'] = 'Notification from course: {$a}';
$string['notificationoff'] = 'Off';
$string['notificationperpost'] = 'Each post';
$string['notificationtype'] = 'Notification type';
$string['page-course-view-socialwall'] = 'Any course main page in socialwall format';
$string['page-course-view-socialwall-x'] = 'Any course page in socialwall format';
$string['pluginname'] = 'Socialwall format';
$string['postcomment'] = 'Post';
$string['postdeleted'] = 'Post deleted';
$string['postedonto'] = '{$a->author} posted on: {$a->date} to {$a->to}';
$string['postidinvalid'] = 'Invalid post-ID';
$string['postislocked'] = 'Post is locked';
$string['postsaved'] = 'Post successfully saved';
$string['poststatus'] = 'Post status';
$string['poststatusordnote'] = 'Post status or note';
$string['privatepost'] = 'Private post';
$string['recentactivities'] = 'Recent activities';
$string['replycomment'] = 'Reply to comment';
$string['savepost'] = 'Post';
$string['savesetting'] = 'Save setting';
$string['searchbyname'] = 'Search by name...';
$string['section0name'] = 'General';
$string['sectionname'] = 'Topic';
$string['selectactivitiesfrombelow'] = 'Select activities from below';
$string['sendtimelinedigests'] = 'Send timeline digests';
$string['sendtimelineintant'] = 'Send timeline notifications (per Post)';
$string['showalert'] = 'Timeline is filtered to show an alert';
$string['showallcomments'] = 'Show all comments ({$a} more)';
$string['showalldicussions'] = 'Show all discussions';
$string['showallposts'] = 'Reset filter to show all posts';
$string['showallreplies'] = 'Show all replies ({$a} more)';
$string['showfromothers'] = 'Show topic';
$string['socialwall:deleteanycomment'] = 'Delete others users comments';
$string['socialwall:deleteanypost'] = 'Delete all users posts';
$string['socialwall:deleteowncomment'] = 'Delete own comments';
$string['socialwall:deleteownpost'] = 'Delete own posts';
$string['socialwall:like'] = 'Create likes';
$string['socialwall:lockcomment'] = 'Lock comments';
$string['socialwall:makesticky'] = 'Make sticky';
$string['socialwall:postfile'] = 'Post file (module)';
$string['socialwall:posthtml'] = 'Post HTML text';
$string['socialwall:postprivate'] = 'Do private posts';
$string['socialwall:posturl'] = 'Post url (module)';
$string['socialwall:updateanypost'] = 'Update any post';
$string['socialwall:updateownpost'] = 'Update own post';
$string['socialwall:viewlikes'] = 'View number of likes';
$string['socialwall:viewprivate'] = 'View private posts';
$string['socialwall:writecomment'] = 'Write comment';
$string['sticky'] = 'Sticky post';
$string['textrequired'] = 'Text required';
$string['timeagodays'] = '{$a->days} days {$a->hours} hours ago';
$string['timeagohours'] = '{$a->hours} hours {$a->minutes} mins ago';
$string['timeagomin'] = '{$a} mins ago';
$string['timeagomonthdays'] = '%m months %d days ago';
$string['timeagosec'] = '{$a} secs ago';
$string['timeagoyearsdays'] = '%y years %m months ago';
$string['timecreateasc'] = 'Order by date (ascending)';
$string['timecreatedesc'] = 'Order by date (descending)';
$string['timelinedigests'] = 'Your digest report from timelines of moodle';
$string['tlnumcomments'] = 'Number of comments';
$string['tlnumcommentsdesc'] = 'Default number of comments shown per post';
$string['tlnumposts'] = 'Num of posts (per request)';
$string['tlnumpostsdesc'] = 'Display this num of posts on course main page and per AJAX request.';
$string['tlnumreplies'] = 'Number of replies';
$string['tlnumrepliesdesc'] = 'Default number of replies shown per comments';
$string['turneditoroff'] = 'HTML-Editor off';
$string['turneditoron'] = 'HTML-Editor on';
$string['unknownuser'] = 'Unknown user';
$string['unlockpost'] = 'Post is locked, click to unlock';
$string['updatepost'] = 'Update';
$string['updatepostfiltered'] = 'Timeline is filtered to show the post to update';
$string['uploadafile'] = 'Upload a file';
$string['writecomment'] = 'Write a comment';
