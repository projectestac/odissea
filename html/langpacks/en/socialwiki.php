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
 * Strings for component 'socialwiki', language 'en', version '4.4'.
 *
 * @package     socialwiki
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomment'] = 'Add comment';
$string['addedbegins'] = 'added begins';
$string['addedends'] = 'added ends';
$string['admin'] = 'Administration';
$string['adminmenu'] = 'Admin menu';
$string['allpages'] = 'All Page Versions';
$string['allpages_empty'] = 'No page versions.';
$string['alltopics'] = 'All pages';
$string['alltopics_empty'] = 'No pages.';
$string['allusers'] = 'All Active Users';
$string['allusers_empty'] = 'No other users.';
$string['attachmentattach'] = 'Add as attachment';
$string['attachmentimage'] = 'Add as image';
$string['attachmentlink'] = 'Add as link';
$string['attachments'] = 'Attachments';
$string['backcomments'] = 'Back to comments';
$string['backoldversion'] = 'Back to old version';
$string['backpage'] = 'Back to page';
$string['backtomapmenu'] = 'Back to map menu';
$string['backversions'] = 'Back to versions';
$string['cannoteditpage'] = 'You can not edit this page.';
$string['cannotfollow'] = 'You can not follow yourself';
$string['cannotlike'] = 'You must be an enrolled user to like a page';
$string['cannotmanagefiles'] = 'You don\'t have permission to manage the wiki files.';
$string['cannotviewfiles'] = 'You don\'t have permission to view the wiki files.';
$string['cannotviewpage'] = 'You can not view this page.';
$string['changerate'] = 'Do you wish to change it?';
$string['classic'] = 'Classic';
$string['commentnewest'] = 'Newest First';
$string['commentoldest'] = 'Oldest First';
$string['comments'] = 'Comments';
$string['commentscount'] = 'Comments ({$a})';
$string['comparesel'] = 'Compare selected';
$string['comparewith'] = 'Comparing page {$a->old} with page {$a->new}';
$string['contributors'] = 'Contributors';
$string['contributors_help'] = 'The users that have contributed to this page.';
$string['create'] = 'Create';
$string['createcomment'] = 'Creating comment';
$string['createddate'] = 'Created: {$a->date} by {$a->username}';
$string['createpage'] = 'Create page';
$string['creating'] = 'Creating a wiki page';
$string['creole'] = 'Creole';
$string['defaultformat'] = 'Default format';
$string['defaultformat_help'] = 'This setting determines the default format used when editing wiki pages.
* HTML - The HTML editor is available
* Creole - A common wiki markup language for which a small edit toolbar is available
* Nwiki - Mediawiki-like markup language used in the contributed Nwiki module';
$string['deletecomment'] = 'Deleting comment';
$string['deletecommentcheck'] = 'Delete comment';
$string['deletecommentcheckfull'] = 'Are you sure you want to delete this comment?';
$string['deletedbegins'] = 'Deleted begins';
$string['deletedends'] = 'Deleted ends';
$string['deleteupload'] = 'Delete';
$string['deleteversions'] = 'Delete page versions';
$string['deniedfollow'] = 'You do not have permission to follow people';
$string['diff'] = 'Diff';
$string['diff_help'] = 'Selected versions of the page may be compared in order to find the differences.';
$string['distance0'] = 'Not in your network';
$string['distance1'] = 'Followed';
$string['distance2'] = 'Second Connection';
$string['distance3'] = 'Distant Connection';
$string['edit'] = 'Edit';
$string['editblocks'] = 'Turn edit blocks on';
$string['editcomment'] = 'Edit comment';
$string['editfiles'] = 'Edit wiki files';
$string['editing'] = 'Editing wiki page';
$string['editingcomment'] = 'Editing comment';
$string['editingpage'] = 'Editing this page \'{$a}\'';
$string['editsection'] = 'edit';
$string['editwarning'] = 'Editing will create a new page version, it will not modify this version.';
$string['favourite'] = 'Favourites';
$string['favourite_help'] = 'A favourite is the most recent like in a topic.';
$string['filenotuploadederror'] = 'File \'{$a}\' could not be uploaded correctly.';
$string['files'] = 'Files';
$string['filtername'] = 'Social Wiki auto-linking';
$string['follow'] = 'Follow';
$string['follow_tip'] = 'Click to follow this user';
$string['followedusers'] = 'Following';
$string['followedusers_empty'] = 'You don\'t follow anybody.';
$string['followers'] = 'Followers';
$string['followers_empty'] = 'You don\'t have any followers.';
$string['followsim'] = 'Follow Similarity';
$string['followsim_help'] = 'How similar your follows are to the user.';
$string['forceformat'] = 'Force format';
$string['forceformat_help'] = 'If the format is forced (checkbox ticked), there is no option to choose a format when editing a wiki page.';
$string['format'] = 'Format';
$string['format_help'] = '* HTML - The HTML editor is available
* Creole - A common wiki markup language for which a small edit toolbar is available
* Nwiki - Mediawiki-like markup language used in the contributed Nwiki module';
$string['formatcreole'] = 'Creole format';
$string['formatcreole_help'] = 'Creole is a common wiki markup language with an edit toolbar for inserting appropriate markup.

To create a new page, type the new page name enclosed in double square brackets, for example [[Page 2]].
To link to a page copy the page url, double square brackets with an existing page title inside links to a search for that page.';
$string['formatcreole_link'] = 'mod/socialwiki/creole';
$string['formathtml'] = 'HTML format';
$string['formathtml_help'] = 'The HTML editor may be used for formatting content.

To create a new page, type the new page name enclosed in double square brackets, for example [[Page 2]].
To link to a page copy the page url double square brackets with an existing page title inside links to a search for that page.';
$string['formatnwiki'] = 'NWiki format';
$string['formatnwiki_help'] = 'Nwiki is the Mediawiki-like markup language used in the contributed Nwiki module.

To create a new page, type the new page name enclosed in double square brackets, for example [[Page 2]].
To link to a page copy the page url double square brackets with an existing page title inside links to a search for that page.';
$string['formatnwiki_link'] = 'mod/socialwiki/nwiki';
$string['help'] = 'Help';
$string['help_admin'] = 'As a teacher or administrator you have access to the administration page to fix any unwanted content.</br>
The gear icon next to a page name will edit the specified page.
The X icon will delete the page and redirect back to home if the current page is the one being deleted.</br>
The button below the table will switch the view between showing related pages (other versions) and listing all the pages in the wiki.</br>
</br>
To get to this view, go to the admin tab of any page.';
$string['help_create'] = 'The create view will allow you to create a new page for the wiki.</br>
All that is required is the page title although there might also be the option to choose a format.</br>
If the format field is available, there will be 3 options:
<ul><li>HTML format: The default format and the best option for most users, includes the ability to change the HTML content directly.</li>
    <li>Creole format: A lightweight wiki markup language for advanced users.</li>
    <li>Nwiki format: Similar interface to the Creole format with a different set of markups.</li></ul>
The format is chosen for all the versions of this page. All future versions will have to use the selected format.</br>
</br>
Click the create page button to get working on the first version of this page. At this point the page is created and you cannot undo this action, you must save the first version or a blank page will be made with the specified title.';
$string['help_diff'] = 'The diff view compares two pages selected from a tree.</br>
Differences are shown in colour, with additions shown in green and missing parts shown in yellow.</br>
Navigate through different versions to compare using the page links below the compared pages.</br>
</br>
To get to this view, go to the <a href="#versions">versions tab</a> of a page or do a <a href="#search">search</a> to see a tree and select two versions to compare.';
$string['help_edit'] = 'The edit view allows you to modify a page and create a new version.</br>
The editor that was chosen on the create page will show up with the previous content allowing you to change anything to your liking.</br>
</br>
The HTML format will show the normal editor found elsewhere with formatting options at the top.</br>
The Creole and Nwiki format editors are similar although they do not have as many options and the formatting tags will show in the content.</br>
With these two formats it is also important to attach all the files you are going to use before adding any content or you will have to start over.</br>
</br>
There are special links to pages in the socialwiki and here are 3 different ways to add them:
<ul><li>[[page name]] Links to a search page name.</li>
    <li>[[page name@pageid]] Links to a specific version of a page.</li>
    <li>[[page name@.]] Links to the most recent version of that page.</li></ul>
Once you have are done editing you can preview the page using the preview button at the bottom of the page and when you are ready you can use the save button to publish your new page version.</br>
Now that the page version is created you cannot remove it, only a teacher has the option to remove content from the wiki.';
$string['help_home'] = 'The home view gives you an overview of the wiki allowing easy access to see all pages and contributors.</br>
There are 4 tabs to look through:
<ul><li>Explore: See all new page versions, page versions from your followers or browse through all the page versions available</li>
    <li>Pages: Take a look at all the pages in the wiki, clicking on one will redirect to a <a href="#search">search view</a> of all the versions created.</li>
    <li>Manage: View all of your Favourites (your most recent like of a page\'s version), your Likes and the page versions you have created.</li>
    <li>People: See a list of your followers and the users that follow you. You can also browse through all the users that have contributed.</li></ul>';
$string['help_search'] = 'The search view will search for your query in both the title and content of pages and show the results.</br>
Leaving the search box empty or typing * will show all the available pages.</br>
For more information look at <a href="#versions">Versions help</a> as these views act the exact same.</br>
</br>
To get to this view, use the search box at the top right of any page to search the current wiki.';
$string['help_versions'] = 'There are 3 different search views:
<ul><li>Tree View: Displays the search results in a tree view to so the versions of the page can easily be seen.</li>
    <li>List View: Shows a list of pages ordered using your likes and the people you are following to order the pages.</li>
    <li>Popular View: Orders the pages with the pages with more likes appearing at the top.</li></ul>
Use the button in the top right of each node to minimize it or hide an entire branch.</br>
To compare two versions, select pages using the radio buttons at the bottom of a node and then press Compare selected at the bottom.';
$string['help_viewuserpages'] = 'The user view will show you the content from another user.</br>
From here you can see the similarity between you and the specified user in the peer scores.</br>
There is also the option to follow the user if you are interested in their content and would like to get updates on what they publish.';
$string['home'] = 'Home';
$string['homemenu'] = 'Home menu';
$string['hometitle'] = 'Social Wiki Home';
$string['html'] = 'HTML';
$string['incorrectdeleteversions'] = 'Page versions provided for deletion are incorrect.';
$string['individualpagedoesnotexist'] = 'Individual wiki page doesn\'t exist';
$string['insertcomment'] = 'Insert comment';
$string['insertimage'] = 'Insert an image...';
$string['insertimage_help'] = 'This drop-down list will insert an image to the wiki editor. If you need to add images click the "Attach Files" link above.';
$string['invalidcoursemoduleid'] = 'Invalid parameters have been given.';
$string['invalidparameters'] = 'Invalid Course Module ID has been given.';
$string['invalidsection'] = 'Invalid section trying to be accessed.';
$string['invalidsesskey'] = 'The given sesskey is not valid. Please resend data again';
$string['invalidsubwikiid'] = 'Invalid Subwiki ID has been given.';
$string['invalidwikiid'] = 'Invalid Wiki ID has been given.';
$string['like'] = 'Like';
$string['like_tip'] = 'Like/Unlike this page';
$string['likes'] = 'Likes';
$string['likes_help'] = 'How many likes the page has.';
$string['likesim'] = 'Like Similarity';
$string['likesim_help'] = 'How similar your likes are to the user.';
$string['list'] = 'List View';
$string['listall'] = 'List all';
$string['listrelated'] = 'List related';
$string['makepage'] = 'Make a new Page';
$string['migrationfinished'] = 'Migration finished successfully';
$string['migrationfinishednowikis'] = 'Migration finished, no wikis were migrated';
$string['missingpages'] = 'Pages without content';
$string['modern'] = 'Modern';
$string['modified'] = 'Modified';
$string['modulename'] = 'Social Wiki';
$string['modulename_help'] = 'The Social Wiki activity module enables participants to add and edit a collection of web pages. A new wiki page is created for every edit someone makes to a page. Pages only exist while someone likes it, if a page has 0 likes it is deleted.

Participants can follow each other and like pages so that search results are specialy tailored for each participant.
A versions of previous versions of each page in the wiki is kept, listing the edits made by each participant.

Social Wikis have many uses, such as

* For group lecture notes or study guides
* For members of a faculty to plan a scheme of work or meeting agenda together
* For students to collaboratively author an online book, creating content on a topic set by their tutor
* For collaborative storytelling or poetry creation, where each participant writes a line or verse';
$string['modulename_link'] = 'mod/socialwiki/view';
$string['modulenameplural'] = 'Social Wikis';
$string['myfaves'] = 'My Favourites';
$string['myfaves_empty'] = 'You don\'t have any favourite pages.';
$string['mylikes'] = 'My Likes';
$string['mylikes_empty'] = 'You don\'t have any likes.';
$string['mypages'] = 'My Pages';
$string['mypages_empty'] = 'You haven\'t created any pages.';
$string['name'] = 'Name';
$string['name_help'] = 'The name of the user.';
$string['navigation'] = 'Navigation';
$string['navigationfrom'] = 'This page comes from';
$string['navigationfrom_help'] = 'The wiki pages linking to this page';
$string['navigationto'] = 'This page goes to';
$string['navigationto_help'] = 'Links to other pages';
$string['networkdistance'] = 'Social Distance';
$string['networkdistance_help'] = 'How many steps away the user is in your network of follows.';
$string['newpage'] = 'New';
$string['newpagehdr'] = 'New page';
$string['newpages'] = 'New Page Versions';
$string['newpages_empty'] = 'No new page versions.';
$string['newpagetitle'] = 'New page title';
$string['noattachments'] = '<strong>No files attached</strong>';
$string['nocomments'] = 'There are no comments';
$string['nocontent'] = 'There is no content for this page';
$string['nocontribs'] = 'You have no contributions in this wiki';
$string['nocreatepermission'] = 'Create page permission needed';
$string['noeditcommentpermission'] = 'Edit comment permission needed';
$string['noeditpermission'] = 'Edit page permission needed';
$string['nofrompages'] = 'There are no links to this page';
$string['nomanagecommentpermission'] = 'Manage comments permission needed';
$string['nomanagewikipermission'] = 'Manage wiki permission needed';
$string['nonode'] = 'The parent node doesn\'t exist';
$string['noorphanedpages'] = 'There are no orphaned pages';
$string['norated'] = 'This page has not been rated yet, be the first!';
$string['norating'] = 'No rating';
$string['norecentactivity'] = 'No recent activity';
$string['noteditblocks'] = 'Turn edit blocks off';
$string['notingroup'] = 'Not in group';
$string['notmigrated'] = 'This wiki has not been migrated yet. Please contact your administrator.';
$string['notopages'] = 'This page does not link to other pages';
$string['noupdatedpages'] = 'There are no updated pages';
$string['nouser'] = 'A pageid or userid must be passed to follow.php';
$string['noversions'] = 'There is no versions for this page';
$string['noviewcommentpermission'] = 'View comments permission needed';
$string['noviewpagepermission'] = 'View page permission needed';
$string['nwiki'] = 'NWiki';
$string['oldversion'] = 'Old version';
$string['orphaned'] = 'Orphaned pages';
$string['orphaned_help'] = 'List of pages that are not linked from other page.';
$string['page-mod-socialwiki-comments'] = 'Social Wiki module comments page';
$string['page-mod-socialwiki-versions'] = 'Social Wiki versions page';
$string['page-mod-socialwiki-view'] = 'Social Wiki module main page';
$string['page-mod-socialwiki-x'] = 'Any social wiki module page';
$string['pagecontributors'] = 'Contributors to this page:';
$string['pageexists'] = 'This page already exists. Redirecting to it.';
$string['pageindex'] = 'Page Index';
$string['pageindex_help'] = 'This wiki\'s page tree';
$string['pagelist'] = 'Page list';
$string['pagelist_help'] = 'Page list categorized by alphabetical order';
$string['pagename'] = 'Page name';
$string['pagesfollowed'] = 'From Users You Follow';
$string['pagesfollowed_empty'] = 'No unseen page versions liked by the users you follow.';
$string['peerscores'] = 'PEER SCORES';
$string['pluginadministration'] = 'Social Wiki administration';
$string['pluginname'] = 'Social Wiki';
$string['popular'] = 'Popular View';
$string['popularity'] = 'Followers';
$string['popularity_help'] = 'How many followers this user has.';
$string['prettyprint'] = 'Printer-friendly version';
$string['previewwarning'] = 'This is a preview. Changes have not been saved yet.';
$string['rated'] = 'You rated this page as a {$a}';
$string['rating'] = 'Rating';
$string['ratingmode'] = 'Rating mode';
$string['recommended'] = 'Recommended Pages';
$string['removeallwikitags'] = 'Remove all wiki tags';
$string['removepages'] = 'Remove pages';
$string['reparsetimeout'] = 'Reparsing default timeout';
$string['repeatedsection'] = 'Wiki error: Section name cannot be repeated \'{$a}\'';
$string['restore'] = 'Restore';
$string['restoreconfirm'] = 'Are you sure you want to restore version #{$a}?';
$string['restoreerror'] = 'Version #{$a} could not be restored';
$string['restorethis'] = 'Restore this version';
$string['restoreversion'] = 'Restore old version';
$string['restoring'] = 'Restoring version #{$a}';
$string['return'] = 'Go back';
$string['save'] = 'Save';
$string['saving'] = 'Saving wiki page';
$string['savingerror'] = 'Saving error';
$string['search'] = 'Search Wiki';
$string['searchcontent'] = 'Search in page content';
$string['searchresult'] = 'Search results for:';
$string['searchresults_empty'] = 'No results';
$string['searchterms'] = 'Search terms';
$string['searchviews'] = 'Views:';
$string['socialwiki'] = 'Social Wiki';
$string['socialwiki:addinstance'] = 'Add a new Social Wiki';
$string['socialwiki:createpage'] = 'Create new wiki pages';
$string['socialwiki:editcomment'] = 'Add comments to pages';
$string['socialwiki:editpage'] = 'Save wiki pages';
$string['socialwiki:manage_socialwiki'] = 'Manage wiki settings';
$string['socialwiki:managecomment'] = 'Manage wiki comments';
$string['socialwiki:managefiles'] = 'Manage wiki files';
$string['socialwiki:managewiki'] = 'Manage Social Wiki';
$string['socialwiki:viewcomment'] = 'View page comments';
$string['socialwiki:viewpage'] = 'View wiki pages';
$string['socialwikipages'] = 'Social Wiki pages';
$string['special'] = 'Special';
$string['style'] = 'Select style for Social wiki activity';
$string['tableofcontents'] = 'Table of Contents';
$string['tableview'] = 'Table View';
$string['tableview_help'] = 'Table view of all wiki pages';
$string['tagsdeleted'] = 'Wiki tags have been deleted';
$string['tagtitle'] = 'See the "{$a}" tag';
$string['timesrating'] = 'This page has been rated  {$a->c} times with an average of: {$a->s}';
$string['title'] = 'Title';
$string['title_help'] = 'The title of the page version.';
$string['tree'] = 'Tree View';
$string['unfollow'] = 'Unfollow';
$string['unfollow_tip'] = 'Click to unfollow this user';
$string['unknownfirstname'] = 'Unknown';
$string['unknownlastname'] = 'User';
$string['updated'] = 'Updated';
$string['updated_help'] = 'How long ago the page was created.';
$string['updatedpages'] = 'Updated pages';
$string['updatedpages_help'] = 'Recently updated wiki pages';
$string['updatedwikipages'] = 'Updated wiki pages';
$string['upload'] = 'Upload & Delete';
$string['uploadactions'] = 'Actions';
$string['uploadfiletitle'] = 'Attachments';
$string['uploadname'] = 'Filename';
$string['uploadtitle'] = 'Attach files';
$string['userdata'] = 'User data';
$string['userdata_help'] = 'User data includes page authors, likes and follows.';
$string['userfaves'] = 'Favourite Pages';
$string['userfaves_empty'] = 'This user has no favourite pages.';
$string['userpages'] = 'Created Pages';
$string['userpages_empty'] = 'This user has not created any pages.';
$string['userpages_help'] = 'List of pages that you created.';
$string['versionerror'] = 'Version ID does not exist';
$string['versions'] = 'Versions';
$string['versions_help'] = 'How many different versions this topic has.';
$string['view'] = 'View';
$string['viewallversions'] = 'View all versions';
$string['viewcurrent'] = 'Current Version';
$string['views'] = 'Views';
$string['views_help'] = 'How many views the page has.';
$string['viewuserpages'] = 'View User\'s Pages';
$string['wikiattachments'] = 'Wiki attachments';
$string['wikiboldtext'] = 'Bold text';
$string['wikiexternalurl'] = 'External URL';
$string['wikifiles'] = 'Wiki files';
$string['wikiheader'] = 'Level {$a} Header';
$string['wikihr'] = 'Horizontal rule';
$string['wikiimage'] = 'Image';
$string['wikiinternalurl'] = 'Internal link';
$string['wikiintro'] = 'Description';
$string['wikiitalictext'] = 'Italic text';
$string['wikimode'] = 'Wiki mode';
$string['wikimode_help'] = 'The wiki mode determines whether everyone can edit the wiki - a collaborative wiki - or whether everyone has their own wiki which only they can edit - an individual wiki.';
$string['wikimodecollaborative'] = 'Collaborative wiki';
$string['wikimodeindividual'] = 'Individual wiki';
$string['wikiname'] = 'Social Wiki name';
$string['wikinowikitext'] = 'Pre-formatted';
$string['wikiorderedlist'] = 'Ordered list';
$string['wikisettings'] = 'Wiki settings';
$string['wikiunorderedlist'] = 'Unordered list';
$string['wrongversionsave'] = 'Another user has created a version while you were editing and you have overwritten his changes, check the page versions.';
