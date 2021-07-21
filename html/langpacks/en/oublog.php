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
 * Strings for component 'oublog', language 'en', version '3.11'.
 *
 * @package     oublog
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessdenied'] = 'Sorry: you do not have access to view this page.';
$string['accordion_closed'] = 'Closed';
$string['accordion_open'] = 'Open';
$string['activeblogs'] = 'Active';
$string['addcomment'] = 'Add comment';
$string['addlink'] = 'Add link';
$string['addpost'] = 'Add post';
$string['advancedoptions'] = 'Advanced options';
$string['afterendcomment'] = 'You cannot comment on posts at this time. Commenting ended on {$a}.';
$string['afterendcommentcapable'] = 'Students were able to comment on posts until {$a}.
<br/> You have access to comment after this time.';
$string['afterendpost'] = 'You cannot create posts at this time. Post creation ended on {$a}.';
$string['afterendpostcapable'] = 'Students were able to create their own posts until {$a}.
<br/> You have access to create posts after this time.';
$string['allowcomments'] = 'Allow comments';
$string['allowcomments_help'] = '&lsquo;Yes, from signed-on users&rsquo; allows comments from users who have access to the post.

&lsquo;Yes, from everybody&rsquo; allows comments from users and from the general public. You will receive emails to approve or reject comments from users who are not signed in.

&lsquo;No&rsquo; prevents anyone from making a comment on this post.';
$string['allowcommentsmax'] = 'Allow comments (if chosen for post)';
$string['allowimport'] = 'Enable post import';
$string['allowimport_help'] = 'Allow any user to import pages from other blog activities they have access to.';
$string['allowimport_invalid'] = 'Posts can only be imported when activity is set to individual mode.';
$string['alpha'] = 'A to Z';
$string['atom'] = 'Atom';
$string['atomfeed'] = 'Atom feed';
$string['attachments'] = 'Attachments';
$string['attachments_help'] = 'You can optionally attach one or more files to a blog post. If you attach an image, it will be displayed after the message.';
$string['beforeendcomment'] = 'You can only comment on posts until {$a}.';
$string['beforeendcommentcapable'] = 'Students are able to comment on posts until {$a}.
<br/> You have access to comment after this time.';
$string['beforeendpost'] = 'You can only create posts until {$a}.';
$string['beforeendpostcapable'] = 'Students are able to create their own posts until {$a}.
<br/> You have access to create posts after this time.';
$string['beforestartcomment'] = 'You cannot comment on posts at this time. Commenting is available from {$a}.';
$string['beforestartcommentcapable'] = 'Students cannot comment on posts until {$a}.
<br/> You have access to comment before this time.';
$string['beforestartpost'] = 'You cannot create posts at this time. Post creation is available from {$a}.';
$string['beforestartpostcapable'] = 'Students cannot create their own posts until {$a}.
<br/> You have access to create posts before this time.';
$string['blogfeed'] = '{$a} feeds';
$string['bloginfo'] = 'blog information';
$string['blogname'] = 'Blog name';
$string['blogoptions'] = 'Blog options';
$string['blogsummary'] = 'Blog summary';
$string['cancel'] = 'Cancel';
$string['comment'] = 'Add your comment';
$string['commentalert'] = 'Report comment';
$string['commentdated'] = 'Dated';
$string['commentfrom'] = 'Commenting only allowed from';
$string['commentonby'] = 'Comment on post <u>{$a->title}</u> {$a->date} by <u>{$a->author}</u>';
$string['commentonbyusers'] = 'Comment <u>{$a->commenttitle}</u> on post <u>{$a->posttitle}</u> <br> by <u>{$a->author}</u>';
$string['commentposts'] = 'Most commented posts';
$string['commentposts_info_alltime'] = 'Posts with the most number of comments';
$string['commentposts_info_thismonth'] = 'Posts with the most number of comments added in the past month';
$string['commentposts_info_thisyear'] = 'Posts with the most number of comments added in the past year';
$string['comments'] = 'Comments';
$string['comments_info_alltime'] = '{$a}s with the most number of comments';
$string['comments_info_thismonth'] = '{$a}s with the most number of comments added in the past month';
$string['comments_info_thisyear'] = '{$a}s with the most number of comments added in the past year';
$string['commentsby'] = 'Comments by {$a}';
$string['commentsfeed'] = 'Comments only';
$string['commentsnotallowed'] = 'Comments are not allowed';
$string['commentuntil'] = 'Commenting only allowed until';
$string['completioncomments'] = 'User must make comments on blog posts:';
$string['completioncommentsgroup'] = 'Require comments';
$string['completioncommentsgroup_help'] = 'If you enable this option, the blog will be marked as complete for a student once they have left the specified number of comments.';
$string['completionposts'] = 'User must make blog posts:';
$string['completionpostsgroup'] = 'Require posts';
$string['completionpostsgroup_help'] = 'If you enable this option, the blog will be marked as complete for a student once they have made the specified number of posts.';
$string['computingguide'] = 'Guide to OU blogs';
$string['computingguideurl'] = 'Computing guide URL';
$string['computingguideurlexplained'] = 'Enter the URL for the OU blogs omputing guide';
$string['configmaxattachments'] = 'Default maximum number of attachments allowed per blog post.';
$string['configmaxbytes'] = 'Default maximum size for all blog attachments on the site.
(subject to course limits and other local settings)';
$string['configremoteserver'] = 'Root address (wwwroot) of remote server to be used for post imports.
Blogs on this server will be shown in addition to those on local site when importing posts.';
$string['configremotetoken'] = 'Web service user token for oublog webservices on import remote server.';
$string['confirmdeletecomment'] = 'Are you sure you want to delete this comment?';
$string['confirmdeletelink'] = 'Are you sure you want to delete this link?';
$string['confirmdeletepost'] = 'Are you sure you want to delete this post?';
$string['contribution'] = 'Participation';
$string['contribution_all'] = 'Participation - All time';
$string['contribution_from'] = 'Participation - From {$a}';
$string['contribution_fromto'] = 'Participation - From {$a->start} To {$a->end}';
$string['contribution_to'] = 'Participation - To {$a}';
$string['copytoself'] = 'Send a copy to yourself';
$string['couldnotaddcomment'] = 'Could not add comment';
$string['couldnotaddlink'] = 'Could not add link';
$string['defaultpersonalblogname'] = '{$a->name}\'s {$a->displayname}';
$string['delete'] = 'Delete';
$string['deleteandemail'] = 'Delete and email';
$string['deletedblogpost'] = 'Untitled post.';
$string['deletedby'] = 'Deleted by {$a->fullname}, {$a->timedeleted}';
$string['deleteemailpostbutton'] = 'Delete and email';
$string['deleteemailpostdescription'] = 'Select to delete the post or delete and send a customisable email notification.';
$string['deleteglobalblog'] = 'You can\'t delete the global blog';
$string['details'] = 'Details';
$string['discovery'] = '{$a} usage';
$string['displayname'] = 'Alternate activity name (blank uses default)';
$string['displayname_default'] = 'blog';
$string['displayname_help'] = 'Set an alternate activity type name within the interface.

Leaving blank/empty will mean the default (\'blog\') is used.

The alternate name should start with a lower-case letter, this will be capitalised where needed.';
$string['displayperiod'] = 'Participation selector From date - To date.';
$string['displayperiod_help'] = '<p>The default selects all entries.</p>
<p>You can select \'From\' a date until todays entries.</p>
<p>You can select all entries between a \'From\' date and a \'To\' date.</p>
<p>Or you can select from the first entry \'To\' a date</p>';
$string['displayversion'] = 'OU blog version: <strong>{$a}</strong>';
$string['downloadas'] = 'Download data as';
$string['downloadcsv'] = 'Comma separated values text file';
$string['edit'] = 'Edit';
$string['editlink'] = 'Edit link';
$string['editonsummary'] = 'Edited {$a->editdate}';
$string['editpost'] = 'Update post';
$string['editsummary'] = 'Edited by {$a->editby}, {$a->editdate}';
$string['emailcontenthtml'] = 'This is a notification to advise you that your {$a->activityname} post with the
following details has been deleted by \'{$a->firstname} {$a->lastname}\':<br />
<br />
Subject: {$a->subject}<br />
{$a->activityname}: {$a->blog}<br />
Course: {$a->course}<br />
<br />
<a href={$a->deleteurl} title="view deleted post">View the deleted post</a>';
$string['emailerror'] = 'There was an error sending the email';
$string['emailmessage'] = 'Message';
$string['end'] = 'To';
$string['error_alreadyapproved'] = 'Comment already approved or rejected';
$string['error_grouppubliccomments'] = 'You cannot allow public comments when the blog is in group mode';
$string['error_moderatednotallowed'] = 'Moderated comments are no longer allowed on this blog or blog post';
$string['error_noconfirm'] = 'Enter the bold text above, exactly as given, into this box.';
$string['error_toomanycomments'] = 'You have made too many blog comments in the past hour from this internet address. Please wait a while then try again.';
$string['error_unspecified'] = 'The system cannot complete this request because an error occurred ({$a})';
$string['error_wrongkey'] = 'Comment key incorrect';
$string['event:commentapproved'] = 'Comment approved';
$string['event:commentcreated'] = 'Comment created';
$string['event:commentdeleted'] = 'Comment deleted';
$string['event:participationviewed'] = 'Participation viewed';
$string['event:postcreated'] = 'Post created';
$string['event:postdeleted'] = 'Post deleted';
$string['event:postimported'] = 'Post imported';
$string['event:postupdated'] = 'Post updated';
$string['event:postviewed'] = 'Post viewed';
$string['event:savefailed'] = 'Session fail on post save';
$string['event:siteentriesviewed'] = 'Site entries viewed';
$string['export:description'] = 'You can export individual blog posts from your online module content using the links below.
Alternatively, select several posts, the export type, and click \'Export\' to download them all at once.';
$string['export:header'] = 'Export';
$string['export:header_author'] = 'Author';
$string['export:header_date_posted'] = 'Date posted';
$string['export:header_tags'] = 'Tags';
$string['export:header_title'] = 'Title';
$string['export:title'] = 'Export';
$string['export:type'] = 'Export type';
$string['exportedpost'] = 'Exported post';
$string['exportpostscomments'] = 'all currently visible posts and their comments.';
$string['exportuntitledpost'] = 'An untitled post';
$string['externaldashboardadd'] = 'Add blog to dashboard';
$string['externaldashboardremove'] = 'Remove blog from dashboard';
$string['extra_emails'] = 'Email address of other recipients';
$string['extra_emails_help'] = 'Enter one or more email address(es) separated by spaces or semicolons.';
$string['extranavolderposts'] = 'Older posts: {$a->from}-{$a->to}';
$string['extranavtag'] = 'Filter: {$a}';
$string['feedhelp'] = 'Feeds';
$string['feedhelp_help'] = 'If you use feeds you can add these Atom or RSS links in order to keep up to date with posts.
Most feed readers support Atom and RSS.

If comments are enabled there are also feeds for &lsquo;Comments only&rsquo;.';
$string['feeds'] = 'Feeds';
$string['feedsnotenabled'] = 'Feeds are not enabled';
$string['filter'] = 'Filter:';
$string['filter-tooltip'] = 'Click to remove filter tag';
$string['foruser'] = 'for {$a}';
$string['globalblogmissing'] = 'Global blog is missing';
$string['globalusageexclude'] = 'Exclude from global usage stats';
$string['globalusageexclude_desc'] = 'Comma-separated list of user ids to exclude users from the top usage stats list for global blog';
$string['gradesupdated'] = 'Grades updated';
$string['grading'] = 'Grading';
$string['grading_help'] = 'If you select this option, a grade for this blog will be added
 to the course gradebook and calculated automatically.
 Leave this off for a non-assessed blog, or one you plan to assess manually.';
$string['grading_invalid'] = 'Posts can only be graded when either grade type or rating type are set.';
$string['group'] = 'Group';
$string['guestblog'] = 'If you have an account on the system, please
<a href=\'{$a}\'>log in for full access</a>.';
$string['import'] = 'Import';
$string['import_notallowed'] = 'Importing posts is disabled for this {$a}.';
$string['import_step0_blog'] = 'Import blog';
$string['import_step0_inst'] = 'From the list of blogs below, you may either import the entire blog or import selected posts.';
$string['import_step0_nonefound'] = 'You do not have access to any activities where posts can be imported from.';
$string['import_step0_numposts'] = '({$a} posts)';
$string['import_step0_selected_posts'] = 'Import selected posts';
$string['import_step1_addtag'] = 'Filter by tag - {$a}';
$string['import_step1_all'] = 'Select all';
$string['import_step1_from'] = 'Import from:';
$string['import_step1_include_label'] = 'Import post - {$a}';
$string['import_step1_inst'] = 'Select posts to import:';
$string['import_step1_none'] = 'Select none';
$string['import_step1_removetag'] = 'Remove tag filter - {$a}';
$string['import_step1_submit'] = 'Import';
$string['import_step1_table_include'] = 'Include in import';
$string['import_step1_table_posted'] = 'Date posted';
$string['import_step1_table_tags'] = 'Tags';
$string['import_step1_table_title'] = 'Title';
$string['import_step2_cancel_submit'] = 'Do not import duplicate posts';
$string['import_step2_conflicts'] = '{$a} post(s) have been imported before. If you wish to import the posts again select ‘import duplicate posts’ and another copy will be added to your blog.';
$string['import_step2_conflicts_submit'] = 'Import duplicate posts';
$string['import_step2_inst'] = 'Importing posts:';
$string['import_step2_none'] = 'No posts selected for import.';
$string['import_step2_prog'] = 'Importing in progress';
$string['import_step2_total'] = '{$a} post(s) imported successfully';
$string['includepost'] = 'Include post';
$string['individualblogs'] = 'Individual blogs';
$string['individualblogs_help'] = '<p><strong>No (blog together or in group)</strong>: <em>Individual blogs are not used</em> &ndash;
There are no individual blogs set, everyone is part of a bigger community
(depending on \'Group mode\' setting).</p>
<p><strong>Separate individual blogs</strong>: <em>Individual blogs are used privately</em> &ndash;
Individual users can only post to and see their own blogs,  unless they have permission("viewindividual") to view
other individual blogs.</p>
<p><strong>Visible individual blogs</strong>: <em>Individual blogs are used publically</em> &ndash;
individual users can only post to their own blogs, but they can view other individual blog posts.</p>';
$string['info'] = 'Participation within the selected period.';
$string['introonpost'] = 'Show intro when posting';
$string['invalidblog'] = 'Invalid Blog Id';
$string['invalidblogdetails'] = 'Can\'t find details for blog post {$a}';
$string['invalidblogtags'] = 'Invalid blog tags';
$string['invalidcomment'] = 'Invalid Comment Id';
$string['invalidedit'] = 'Invalid Edit Id';
$string['invalidformat'] = 'Format must be atom or rss';
$string['invalidlink'] = 'Invalid Link Id';
$string['invalidpost'] = 'Invalid Post Id';
$string['invalidpostid'] = 'Invalid Postid';
$string['invalidvisbilitylevel'] = 'Invalid visibility level {$a}';
$string['invalidvisibility'] = 'Invalid visbility level';
$string['lastcomment'] = '(latest comment by {$a->fullname}, {$a->timeposted})';
$string['lastmodified'] = 'Last post: {$a}';
$string['limits'] = 'Contribution time period';
$string['links'] = 'Related links';
$string['logincomments'] = 'Yes, from logged-in users';
$string['maxattachments'] = 'Maximum number of attachments';
$string['maxattachments_help'] = 'This setting specifies the maximum number of files that can be attached to a blog post.';
$string['maxattachmentsize'] = 'Maximum attachment size';
$string['maxattachmentsize_help'] = 'This setting specifies the largest size of image/file that can be used in a blog post.';
$string['maxvisibility'] = 'Maximum visibility';
$string['maxvisibility_help'] = '<p><em>On a personal blog:</em> <strong>Visible only to the blog owner (private)</strong> &ndash;
nobody* else can see this post.</p>
<p><em>On a course blog:</em> <strong>Visible to participants on this course</strong> &ndash; to view the post you must
have been granted access to the blog, usually by being enrolled on the course that contains it.</p>

<p><strong>Visible to everyone who is logged in to the system</strong> &ndash; everyone who is
logged in can view the post, even if they\'re not enrolled on a specific course.</p>
<p><strong>Visible to anyone in the world</strong> &ndash; any Internet user can see this post
if you give them the blog\'s address.</p>

<p>This option exists on the whole blog as well as on individual posts. If the
option is set on the whole blog, that becomes a maximum. For example, if
the whole blog is set to the first level, you cannot change the
level of an individual post at all.</p>';
$string['maybehiddenposts'] = 'This {$a->name} might contain posts that are only
visible to logged-in users, or where only logged-in users can comment. If you
have an account on the system, please <a href=\'{$a->link}\'>log in for full access</a>.';
$string['message'] = 'Message';
$string['moderated_addedcomment'] = 'Thank you for adding your comment, which has been successfully received. Your comment won\'t appear until it has been approved by the author of this post.';
$string['moderated_approve'] = 'Approve this comment';
$string['moderated_authorname'] = 'Your name';
$string['moderated_awaiting'] = 'Comments awaiting approval';
$string['moderated_awaitingnote'] = 'These comments are not visible to other users unless you approve them. Bear in mind that the system does not know the identity of commenters and comments may contain links which, if followed, could seriously <strong>damage your computer</strong>. If you are in any doubt, please reject comments <strong>without following any links</strong>.';
$string['moderated_confirm'] = 'Confirmation';
$string['moderated_confirminfo'] = 'Please enter <strong>yes</strong> below to confirm that you are a person.';
$string['moderated_confirmvalue'] = 'yes';
$string['moderated_emailhtml'] = '<p>(This is an automatically-generated email. Please do not reply.)</p>
<p>Someone has added a comment to your blog post: {$a->postlink}</p>
<p>You need to <strong>approve the comment</strong> before it will appear in public.</p>
<p>The system does not know the identity of the commenter and comments may
contain links which, if followed, could seriously <strong>damage your
computer</strong>. If you are in any doubt, please reject the comment
<strong>without following any links</strong>.</p>
<p>If you approve the comment, you take responsibility for posting it. Make sure
it doesn\'t contain anything that\'s against the rules.</p>
<hr/>
<p>Name given: {$a->commenter}</p>
<hr/>
<h3>{$a->commenttitle}</h3>
{$a->comment}
<hr/>
<ul class=\'oublog-approvereject\'>
<li><a href=\'{$a->approvelink}\'>{$a->approvetext}</a></li>
<li><a href=\'{$a->rejectlink}\'>{$a->rejecttext}</a></li>
</ul>
<p>
You can also ignore this email. The comment will be rejected automatically
after 30 days.
</p>
<p>
If you receive too many of these emails, you may wish to restrict commenting
to logged-in users only.
</p>
<ul class=\'oublog-restrict\'>
<li><a href=\'{$a->restrictpostlink}\'>{$a->restrictposttext}</a></li>
<li><a href=\'{$a->restrictbloglink}\'>{$a->restrictblogtext}</a></li>
</ul>';
$string['moderated_emailsubject'] = 'Comment awaiting approval on: {$a->blog} ({$a->commenter})';
$string['moderated_emailtext'] = 'This is an automatically-generated email. Please do not reply.

Someone has added a comment to your blog post:
{$a->postlink}

You need to approve the comment before it will appear in public.

The system does not know the identity of the commenter and comments may
contain links which, if followed, could seriously damage your computer.
If you are in any doubt, please reject the comment without following any
links.

If you approve the comment, you take responsibility for posting it. Make
sure it doesn\'t contain anything that\'s against the rules.

-----------------------------------------------------------------------
Name given: {$a->commenter}
-----------------------------------------------------------------------
{$a->commenttitle}
{$a->comment}
-----------------------------------------------------------------------

* {$a->approvetext}:
  {$a->approvelink}

* {$a->rejecttext}:
  {$a->rejectlink}

You can also ignore this email. The comment will be rejected automatically
after 30 days.

If you receive too many of these emails, you may wish to restrict
commenting to logged-in users only.

* {$a->restrictposttext}:
  {$a->restrictpostlink}

* {$a->restrictblogtext}:
  {$a->restrictbloglink}';
$string['moderated_info'] = 'Because you are not logged in, your comment will
only appear after it has been approved. If you
have an account on the system, please <a href=\'{$a}\'>log in for full blog access</a>.';
$string['moderated_postername'] = 'using the name <strong>{$a}</strong>';
$string['moderated_reject'] = 'Reject this comment';
$string['moderated_rejectedon'] = 'Rejected {$a}:';
$string['moderated_restrictblog'] = 'Restrict commenting on all your posts on this blog';
$string['moderated_restrictblog_info'] = 'Would you like to restrict comments on all your posts on this blog so that only people who are logged into the system can add comments?';
$string['moderated_restrictpage'] = 'Restrict commenting';
$string['moderated_restrictpost'] = 'Restrict commenting on this post';
$string['moderated_restrictpost_info'] = 'Would you like to restrict comments on this post so that only people who are logged into the system can add comments?';
$string['moderated_submitted'] = 'Awaiting moderation';
$string['moderated_typicaltime'] = 'In the past, this has usually taken about {$a}.';
$string['modulename'] = 'OU blog';
$string['modulename_help'] = 'This allows for the creation of blogs within a module (which are separate
to the core Moodle blog system). You can have module-wide blogs (everyone in the module posts to the same
blog), group blogs, or individual blogs. The blog activity can be renamed to reflect its purpose e.g. Learning Log.';
$string['modulenameplural'] = 'OU blogs';
$string['mostcomments'] = 'Most comments';
$string['mostposts'] = 'Most posts';
$string['mustprovidepost'] = 'Must provide postid';
$string['myparticipation'] = 'My participation summary';
$string['ncomments'] = '{$a} comments';
$string['newblogposts'] = 'New blog posts';
$string['newcomment'] = 'New comment';
$string['newerposts'] = 'Newer posts';
$string['newpost'] = 'New {$a} post';
$string['no'] = 'No';
$string['no_blogtogetheroringroups'] = 'No (blog together or in groups)';
$string['noblogposts'] = 'No blog posts';
$string['nocomments'] = 'Comments not allowed';
$string['nograde'] = 'No grade (default)';
$string['noposts'] = 'There are no visible posts in this {$a}.';
$string['nopostsnotags'] = 'There are no visible posts in this {$a->blog}, for this tag {$a->tag}.';
$string['notaddpost'] = 'Could not add post';
$string['notaddpostnogroup'] = 'Can\'t add post with no group';
$string['nousercommentpartsfound'] = 'No comments added in this period.';
$string['nousercomments'] = 'No comments made.';
$string['nousercommentsfound'] = 'No comments made during this period.';
$string['nousergrade'] = 'User grade not available.';
$string['nouserpostpartsfound'] = 'No posts made in this period.';
$string['nouserposts'] = 'No posts made.';
$string['nouserpostsfound'] = 'No posts made during this period.';
$string['npending'] = '{$a} comments awaiting approval';
$string['npendingafter'] = ', {$a} awaiting approval';
$string['numbercomments'] = '{$a} comments';
$string['numbercommentsmore'] = 'Plus {$a} more comments';
$string['numberofposts'] = 'Number of posts per page';
$string['numberofposts_help'] = 'Set the number of posts per page to display in a blog.';
$string['numberposts'] = '{$a} posts';
$string['numberpostsmore'] = 'Plus {$a} more posts';
$string['numberviews'] = '{$a} views';
$string['numposts'] = '{$a} posts';
$string['official'] = 'Set';
$string['olderposts'] = 'Previous posts';
$string['onecomment'] = '{$a} comment';
$string['onepending'] = '{$a} comment awaiting approval';
$string['onependingafter'] = ', {$a} awaiting approval';
$string['onlyworkspersonal'] = 'Only works for personal blogs';
$string['order'] = 'Order:';
$string['order_help'] = 'You can choose to order the display of the list of tags used,
either in alphabetical order or by number of posts used in.
Select the two links to switch between ordering methods,
this choice is remembered and will be used on subsequent views.';
$string['oublog'] = 'OU blog';
$string['oublog:addinstance'] = 'Add a new OU blog';
$string['oublog:audit'] = 'View deleted posts and old versions';
$string['oublog:comment'] = 'Comment on a post';
$string['oublog:contributepersonal'] = 'Post and comment in personal blogs';
$string['oublog:exportownpost'] = 'Export own post';
$string['oublog:exportpost'] = 'Export post';
$string['oublog:exportposts'] = 'Export posts';
$string['oublog:grade'] = 'Grade OU Blog user participation';
$string['oublog:ignorecommentperiod'] = 'Ignore comment time period';
$string['oublog:ignorepostperiod'] = 'Ignore post time period';
$string['oublog:managecomments'] = 'Manage comments';
$string['oublog:managelinks'] = 'Manage links';
$string['oublog:manageposts'] = 'Manage posts';
$string['oublog:post'] = 'Create a new post';
$string['oublog:rate'] = 'Can rate posts.';
$string['oublog:view'] = 'View posts';
$string['oublog:viewallratings'] = 'View all raw ratings given by individuals';
$string['oublog:viewanyrating'] = 'View total ratings that anyone received';
$string['oublog:viewindividual'] = 'View individual blogs';
$string['oublog:viewparticipation'] = 'View OU Blog user participation';
$string['oublog:viewpersonal'] = 'View posts in personal blogs';
$string['oublog:viewprivate'] = 'View private posts in personal blogs';
$string['oublog:viewrating'] = 'View the total rating you received';
$string['oublog_managealerts'] = 'Manage reported post/comment alerts';
$string['oublogallpostslogin'] = 'Force login on all posts page';
$string['oublogallpostslogin_desc'] = 'Enable to force login to the personal blog site entries page.
When enabled only logged-in users will see the link to this page.';
$string['oublogcrontask'] = 'OU blog maintenance jobs';
$string['oublogintro'] = 'Intro';
$string['overviewnumentrylog'] = 'entries since last log in';
$string['overviewnumentrylog1'] = 'entry since last log in';
$string['overviewnumentryvw'] = 'entries since last viewed';
$string['overviewnumentryvw1'] = 'entry since last viewed';
$string['participation'] = 'Participation';
$string['participation_all'] = 'Participation - All time';
$string['participation_from'] = 'Participation - From {$a}';
$string['participation_fromto'] = 'Participation - From {$a->start} To {$a->end}';
$string['participation_to'] = 'Participation - To {$a}';
$string['participationbyuser'] = 'Participation by user';
$string['permalink'] = 'Permalink';
$string['personalblognotsetup'] = 'Personal blogs not set up';
$string['personalblogtitle'] = 'Personal blog';
$string['pluginadministration'] = 'OU Blog administration';
$string['pluginname'] = 'OU Blog';
$string['postalert'] = 'Report post';
$string['postauthor'] = 'Post author';
$string['postdate'] = 'Post date';
$string['postdetail'] = 'Post detail';
$string['postedby'] = 'by {$a}';
$string['postedbymoderated'] = 'by {$a->commenter} (approved by {$a->approver}, {$a->approvedate})';
$string['postedbymoderatedaudit'] = 'by {$a->commenter} [{$a->ip}] (approved by {$a->approver}, {$a->approvedate})';
$string['postfrom'] = 'Posting only allowed from';
$string['postinfoblock'] = '<u>{$a->posttitle}</u> <br> <u>{$a->postdate}</u> <br> <u>{$a->sourcelink}</u>';
$string['postmessage'] = 'Post';
$string['posts'] = 'Posts';
$string['posts_info_alltime'] = '{$a}s with the most number of posts';
$string['posts_info_thismonth'] = '{$a}s with the most number of posts in the past month';
$string['posts_info_thisyear'] = '{$a}s with the most number of posts in the past year';
$string['postsby'] = 'Posts by {$a}';
$string['posttime'] = 'Post time';
$string['posttitle'] = 'Post title';
$string['postuntil'] = 'Posting only allowed until';
$string['predefinedtags'] = 'Pre-defined tags';
$string['predefinedtags_help'] = 'Give users tags to choose from when entering a tag on a post.
Tags should be comma separated.';
$string['privacy:metadata:core_rating'] = 'Ratings added to blog entries are stored using core_rating system';
$string['privacy:metadata:oublog_comments'] = 'Comments on an OU blog post.';
$string['privacy:metadata:oublog_comments:authorip'] = 'For moderated comments: author IP address (required).';
$string['privacy:metadata:oublog_comments:authorname'] = 'For moderated comments: author name (required).';
$string['privacy:metadata:oublog_comments:message'] = 'The comment detail.';
$string['privacy:metadata:oublog_comments:title'] = 'The title of the comment.';
$string['privacy:metadata:oublog_comments:userid'] = 'The user ID of the comment originator.';
$string['privacy:metadata:oublog_comments_moderated'] = 'OU blog post comments for moderation.';
$string['privacy:metadata:oublog_comments_moderated:authorip'] = 'Author IP address (required).';
$string['privacy:metadata:oublog_comments_moderated:authorname'] = 'Author name (required).';
$string['privacy:metadata:oublog_comments_moderated:message'] = 'The comment detail.';
$string['privacy:metadata:oublog_comments_moderated:postid'] = 'The post id the comment is on.';
$string['privacy:metadata:oublog_comments_moderated:title'] = 'The title the comment.';
$string['privacy:metadata:oublog_edits'] = 'OU blog edits (holds previous OU blog post versions).';
$string['privacy:metadata:oublog_edits:oldmessage'] = 'The previous content of the OU blog post.';
$string['privacy:metadata:oublog_edits:oldtitle'] = 'The previous title of the OU blog post.';
$string['privacy:metadata:oublog_edits:userid'] = 'The user ID of the OU blog post editor.';
$string['privacy:metadata:oublog_instances'] = 'Instances of a personal OU blog.';
$string['privacy:metadata:oublog_instances:name'] = 'The name of the OU blog instance.';
$string['privacy:metadata:oublog_instances:summary'] = 'Summary of the OU blog instance.';
$string['privacy:metadata:oublog_instances:userid'] = 'The user ID of the OU blog instance owner.';
$string['privacy:metadata:oublog_posts'] = 'Posts in an OU blog.';
$string['privacy:metadata:oublog_posts:deletedby'] = 'The user who deleted this blog post (if it was deleted).';
$string['privacy:metadata:oublog_posts:lasteditedby'] = 'The user to last edit the OU blog post (if it was edited).';
$string['privacy:metadata:oublog_posts:message'] = 'The text of the OU blog post.';
$string['privacy:metadata:oublog_posts:title'] = 'The title of the OU blog post.';
$string['privacy:metadata:oublog_taginstances'] = 'OU blog instances of tags.';
$string['privacy:metadata:oublog_taginstances:oubloginstancesid'] = 'The OU blog instance the tag is associated with.';
$string['privacy:metadata:oublog_taginstances:postid'] = 'The OU blog post the tag is associated with.';
$string['privacy:metadata:oublog_taginstances:tagid'] = 'The actual tag identifier.';
$string['privacy:metadata:oublog_tags'] = 'Tags associated with OU blog posts.';
$string['privacy:metadata:oublog_tags:tag'] = 'The OU blog post tag.';
$string['privacy:metadata:preference:mod_oublog_commentformfilter'] = 'Whether to show all/month/year stats for comments.';
$string['privacy:metadata:preference:mod_oublog_commentpostformfilter'] = 'Whether to show all/month/year stats for most commented posts.';
$string['privacy:metadata:preference:mod_oublog_hidestatsform_comment'] = 'Whether to hide stats for comments.';
$string['privacy:metadata:preference:mod_oublog_hidestatsform_commentpost'] = 'Whether to hide stats for most commented posts.';
$string['privacy:metadata:preference:mod_oublog_hidestatsform_post'] = 'Whether to hide stats for posts.';
$string['privacy:metadata:preference:mod_oublog_hidestatsform_visit'] = 'Whether to hide stats for visits.';
$string['privacy:metadata:preference:mod_oublog_postformfilter'] = 'Whether to show all/month/year stats for posts.';
$string['privacy:metadata:preference:mod_oublog_visitformfilter'] = 'Whether to show all/month/year stats for visits.';
$string['privacy:metadata:preference:oublog_accordion_allposts_open'] = 'Which panel is visible within the stats display (all posts view page).';
$string['privacy:metadata:preference:oublog_accordion_view_open'] = 'Which panel is visible within the stats display (normal blog view page).';
$string['privacy:metadata:preference:oublog_tagorder'] = 'The order you have chosen to display tags in.';
$string['privacy_commentnumber'] = 'Comment {$a}';
$string['privacy_commentplaceholder'] = '(Comment deleted by user request)';
$string['privacy_editnumber'] = 'Edit {$a}';
$string['privacy_somebodyelse'] = 'Somebody else';
$string['privacy_you'] = 'You';
$string['publiccomments'] = 'Yes, from everybody (even if not logged in)';
$string['publiccomments_info'] = 'If somebody adds a comment when they are not
logged in, you will receive email notification and can approve the comment for
display, or reject it. This is necessary in order to prevent spam.';
$string['re'] = 'Re: {$a}';
$string['recentcomments'] = 'Recent comments';
$string['recentposts'] = 'Recent posts';
$string['remoteserver'] = 'Import from remote server';
$string['remotetoken'] = 'Import remote server token';
$string['removeblogs'] = 'Remove all blog entries';
$string['reportingemail'] = 'Reporting email addresses';
$string['reportingemail_help'] = 'This setting specifies the email addresses of those who will be informed
about issues with posts or comments within the OUBlog.
They should be entered as a comma separated list.';
$string['restricttags'] = 'Tag options';
$string['restricttags_default'] = 'Add tags by default';
$string['restricttags_help'] = 'If you select this option, you can restrict
tag entry to only those that are pre-defined at activity level and/or require that at least one tag be entered in a post.';
$string['restricttags_req'] = 'Must enter tags';
$string['restricttags_req_set'] = 'Must enter pre-defined tags only';
$string['restricttags_set'] = 'Allow pre-defined tags only';
$string['restricttagslist'] = 'You may only enter the \'Set\' tags: {$a}';
$string['restricttagsvalidation'] = 'Only \'Set\' tags are allowed to be entered';
$string['rss'] = 'RSS';
$string['rssfeed'] = 'RSS feed';
$string['savefailnetwork'] = '<p>Unfortunately, your changes cannot be saved at this time.
This is due to a network error; the website is temporarily unavailable or you have been signed out. </p>
<p>Saving has been disabled on this blog.
In order to retain any changes you must copy the edited blog content,
access the Edit page again and then paste in your changes.</p>';
$string['savefailtitle'] = 'Post cannot be saved';
$string['savegrades'] = 'Save grades';
$string['search:activity'] = 'OU blog - activity information';
$string['search:comments'] = 'OU blog - posts comments';
$string['search:post'] = 'OU blog - posts';
$string['searchblogs'] = 'Search';
$string['searchblogs_help'] = 'Type your search term and press Enter or click the button.

To search for exact phrases use quote marks.

To exclude a word insert a hyphen immediately before the word.

Example: the search term <tt>picasso -sculpture &quot;early works&quot;</tt> will return results for &lsquo;picasso&rsquo; or the phrase &lsquo;early works&rsquo; but will exclude items containing &lsquo;sculpture&rsquo;.';
$string['searchthisblog'] = 'Search this {$a}';
$string['sendanddelete'] = 'Send and delete';
$string['separateindividual'] = 'Separate individuals';
$string['separateindividualblogs'] = 'Separate individual blogs';
$string['share'] = 'Share post';
$string['sharedblog'] = 'Shared blog';
$string['sharedblog_error'] = 'Error – no blog with that ID is available';
$string['sharedblog_existed'] = 'This is an ID number of a child blog';
$string['sharedblog_help'] = '<p><strong>Shared blog</strong></p>
<p>This option allows the blog instance to act as a ‘child’ blog and display the content of a ‘parent’ blog.</p>
<p>Please input the IDNumber field value of \'parent\' blog whose content you wish this blog to display</p>';
$string['sharedblog_invalid'] = 'No matching ID number';
$string['sharedblog_invalid_morethan1'] = 'More than 1 matching ID number';
$string['sharedblog_mastered'] = 'This blog is already a parent blog';
$string['siteentries'] = 'View site entries';
$string['start'] = 'From';
$string['statblockon'] = 'Show blog usage extra statistics';
$string['statblockon_help'] = 'Enable extra statistics display in the Blog usage \'block\'.
Personal (global), Visible Individual and Visible Group blogs only.';
$string['strftimerecent'] = '%d %B %y, %H:%M';
$string['subscribefeed'] = 'Subscribe to a feed (requires appropriate software) to receive notification when this {$a} is updated.';
$string['summary'] = 'Summary';
$string['tags'] = 'Tags';
$string['tags_help'] = 'Tags are labels that help you find and categorise posts.';
$string['tagsfield'] = 'Tags (separated by commas)';
$string['tagshowless'] = 'Show less ...';
$string['tagshowmore'] = 'Show more ...';
$string['tagupdatefailed'] = 'Failed to update tags';
$string['teachergrading'] = 'Teacher grades students';
$string['timefilter_alltime'] = 'All time';
$string['timefilter_close'] = 'Hide options';
$string['timefilter_label'] = 'Time period';
$string['timefilter_open'] = 'Show options';
$string['timefilter_submit'] = 'Update';
$string['timefilter_thismonth'] = 'Past month';
$string['timefilter_thisyear'] = 'Past year';
$string['timestartenderror'] = 'Selection end date cannot be earlier than the start date';
$string['title'] = 'Title';
$string['tweet'] = 'Tweet';
$string['unsupportedbrowser'] = '<p>Your browser cannot display Atom or RSS feeds directly.</p>
<p>Feeds are most useful in separate computer programs or websites. If you want
to use this feed in such a program, copy and paste the address from your browser\'s
address bar.</p>';
$string['untitledcomment'] = 'Untitled comment';
$string['untitledpost'] = 'Untitled post';
$string['url'] = 'Full Web address';
$string['use'] = 'Most used';
$string['usergrade'] = 'User grade';
$string['userparticipation'] = 'User participation';
$string['userrating'] = 'Use ratings';
$string['usersparticipation'] = 'All users participation';
$string['viewallparticipation'] = 'View all participation';
$string['viewallusers'] = 'View all users';
$string['viewallusersingroup'] = 'View all users in group';
$string['viewblogdetails'] = 'View blog details';
$string['viewblogposts'] = 'Return to blog';
$string['viewedit'] = 'View edit';
$string['viewmyparticipation'] = 'View my participation';
$string['views'] = 'Total visits to this {$a}:';
$string['visibility'] = 'Who can read this?';
$string['visibility_help'] = '<p><strong>Visible to participants on this course</strong> &ndash; to view the post you must
have been granted access to the activity, usually by being enrolled on the course that contains it.</p>

<p><strong>Visible to everyone who is logged in to the system</strong> &ndash; everyone who is
logged in can view the post, even if they\'re not enrolled on a specific course.</p>
<p><strong>Visible to anyone in the world</strong> &ndash; any Internet user can see this post
if you give them the address.</p>';
$string['visibleblogusers'] = 'Visible only to members of this blog';
$string['visiblecourseusers'] = 'Visible to participants on this course';
$string['visibleindividual'] = 'Visible individuals';
$string['visibleindividualblogs'] = 'Visible individual blogs';
$string['visibleloggedinusers'] = 'Visible to everyone who is logged in to the system';
$string['visiblepublic'] = 'Visible to anyone in the world';
$string['visibleyou'] = 'Visible only to the blog owner (private)';
$string['visits'] = 'Most visited';
$string['visits_info_active'] = 'Active {$a}s (contain a post in the past month) with the most number of visits';
$string['visits_info_alltime'] = '{$a}s with the most number of visits';
$string['yes'] = 'Yes';
