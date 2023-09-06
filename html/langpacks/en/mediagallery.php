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
 * Strings for component 'mediagallery', language 'en', version '4.1'.
 *
 * @package     mediagallery
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addagallery'] = 'Add a gallery';
$string['addanitem'] = 'Add an item';
$string['addbulkitems'] = 'Add items in bulk';
$string['addfiles'] = 'Add file(s)';
$string['addsamplegallery'] = 'Add a sample gallery';
$string['allowcomments'] = 'Allow comments';
$string['allowcomments_help'] = 'Allow users to comment on items and galleries.';
$string['allowlikes'] = 'Allow likes';
$string['allowlikes_help'] = 'Allow users to \'like\' items in a gallery.';
$string['areagallery'] = 'Galleries';
$string['areaitem'] = 'Items';
$string['arealowres'] = 'Low resolution';
$string['areathumbnail'] = 'Thumbnails';
$string['assignedit'] = 'Edit assignment';
$string['assignsubmit'] = 'Submit assignment';
$string['assignsubmitted'] = 'Assignment submitted';
$string['automatic'] = 'Automatic';
$string['beingprocessed'] = 'being processed';
$string['bottom'] = 'Bottom';
$string['broadcaster'] = 'Broadcaster';
$string['broadcaster_help'] = 'Who was the distributor that broadcasted this work?';
$string['caption'] = 'Caption';
$string['caption_help'] = 'The caption for this item in your gallery. This caption will be displayed alongside the item. If you opt to leave this blank, the filename (or url) will be displayed as the caption instead.';
$string['captionposition'] = 'Caption position';
$string['carousel'] = 'Carousel';
$string['choosecontent'] = 'Select either a file to upload, or a URL in the options below.';
$string['close'] = 'Close';
$string['collection'] = 'Collection';
$string['collection_help'] = 'The collection to search from.';
$string['collectionwasdeleted'] = 'Sorry, this collection no longer exists and has been removed from this course.';
$string['collmode'] = 'Collection mode';
$string['collmode_help'] = 'This decides if the collection will be purely in Moodle, or be linked to theBox. Once set, this value cannot be changed.

<ul><li>Standard: in this mode, the collection, its galleries and items, are stored purely in Moodle.</li></ul>';
$string['colltype'] = 'Collection type';
$string['colltype_help'] = 'The collection type determines what level users can interact with the collection and its content.

<ul>
<li>Instructor collection: Only users that can grade the collection can add/edit content within it. This is primarily used for instructors to create example collections; or a set of galleries without letting users create their own.</li>
<li>Contributed collection: Allows users to create their own galleries and items, but the collection cannot be used as part of an assignment.</li>
<li>Assignment collection: Users are only able to see the galleries they or their group (if in group mode) have created. Can be used as part of an assignment submission.</li>
<li>Peer reviewed assignment collection: Users are able to view other users/groups galleries and like/comment on them if those features are enabled. Can be used as part of an assignment submission.</li></ul>';
$string['colltypeassignment'] = 'Assignment collection';
$string['colltypecontributed'] = 'Contributed collection';
$string['colltypeinstructor'] = 'Instructor collection';
$string['colltypepeerreviewed'] = 'Peer reviewed assignment collection';
$string['colltypesingle'] = 'Single collection';
$string['comments'] = 'Comments';
$string['completegallery'] = 'Complete gallery';
$string['configdisablestandardgallery'] = 'Prevent users from creating standard galleries.';
$string['configenablethebox'] = 'This needs to be enabled in order for users to create new theBox based collections and content. If disabled, existing theBox collections will display a message saying the activity is currently unavailable. Standard collections will not be affected.';
$string['configmaxbytes'] = 'Default maximum item file size for all media collections on the site (subject to course limits and other local settings)';
$string['confirmcollectiondelete'] = 'Confirm collection deletion';
$string['confirmgallerydelete'] = 'Confirm gallery deletion';
$string['confirmitemdelete'] = 'Confirm item deletion';
$string['content'] = 'Content';
$string['content_help'] = 'The item you want to add to your gallery.';
$string['contentbulk'] = 'Content';
$string['contentbulk_help'] = 'You can select a zip archive containing multiple images, which will be extracted into the image directory after being uploaded.';
$string['contentbulkheader'] = 'Here you can upload a zip archive full of media. Every file inside the zip archive will be added as an item in the gallery, so make sure only files you want uploaded are in the archive before submitting it. Folders inside the archive are ignored.';
$string['contentlinked'] = 'Content';
$string['contentlinked_help'] = 'Once an item is linked to content in theBox, you cannot change the linked file.';
$string['contentlinkedinfo'] = 'This item is linked to the file {$a} in theBox.';
$string['contributable'] = 'Contributable';
$string['contributable_help'] = 'When a gallery is contributable, it allows other users to add content to your gallery. They\'ll only be limited to editing their own items. The gallery creator will have the ability to remove items from the gallery.';
$string['copyright'] = 'Copyright';
$string['copyright_help'] = 'This defines which copyright license is set for all the items you upload via this form.';
$string['createdby'] = 'Created by: {$a}';
$string['creator'] = 'Creator';
$string['datecreated'] = 'Date created';
$string['deletegallery'] = 'Delete gallery';
$string['deleteitem'] = 'Delete item';
$string['deleteitemtype'] = 'Delete {$a}';
$string['deleteorremovecollection'] = 'If you wish to remove the link to the collection without deleting the content click submit.<br/><br/>

If you wish to remove the link to the collection and delete the content within type DELETE in the textbox below and click submit.';
$string['deleteorremovecollectionwarn'] = 'By deleting you acknowledge you are:<br/>
- removing this link to the media collection<br/>
- deleting the collection and/or all galleries and all content from theBox<br/>
- disabling all links made in other courses to this collection or its content';
$string['deleteorremovegallery'] = 'If you wish to remove the link to the gallery without deleting the content click submit.<br/><br/>

If you wish to remove the link to the gallery and delete the content within type DELETE in the textbox below and click submit.';
$string['deleteorremovegallerywarn'] = 'By deleting you acknowledge you are:<br/>
- removing this link to the media gallery<br/>
- deleting the media gallery and all content from theBox<br/>
- disabling all links made in other courses to this media gallery or its content';
$string['deleteorremoveitem'] = 'If you wish to remove the item from the gallery without deleting the content click submit.<br/><br/>

If you wish to remove the link to the gallery and delete the content type DELETE in the textbox below and click submit.';
$string['deleteorremoveitemwarn'] = 'By deleting you acknowledge you are:<br/>
- removing this link to the media item<br/>
- deleting the media item from theBox<br/>
- disabling all links made in other courses to this media item';
$string['disablestandardgallery'] = 'Disable standard galleries';
$string['displayfullcaption'] = 'Display full caption text';
$string['download'] = 'Download';
$string['editgallery'] = 'Edit gallery';
$string['editgallerysettings'] = 'Edit gallery settings';
$string['edititem'] = 'Edit item';
$string['edititemtype'] = 'Edit {$a}';
$string['editthisgallery'] = 'Edit this gallery';
$string['enablethebox'] = 'Enable theBox';
$string['enforcedefaults'] = 'Enforce gallery defaults';
$string['enforcedefaults_help'] = 'If enabled, then the gallery defaults determined by the instructor are enforced.';
$string['errorchooseimportoption'] = 'Please select an option to import';
$string['errornopermissiontoadd'] = 'You can not add a gallery to this collection';
$string['errornotyouritem'] = 'You cannot edit this media object, it belongs to another user.';
$string['errortheboxunavailable'] = 'Sorry, it looks like theBox is unavailable right now. Please try again later.';
$string['errortoomanygalleries'] = 'Sorry, you or your group has exceeded the maximum number of galleries allowed in this collection ({$a}).';
$string['errortoomanyitems'] = 'Sorry, this gallery already has the maximum number of items allowed ({$a}).';
$string['eventcollectiondeleted'] = 'Collection deleted';
$string['eventgallerycreated'] = 'Gallery created';
$string['eventgallerydeleted'] = 'Gallery deleted';
$string['eventgalleryupdated'] = 'Gallery updated';
$string['eventgalleryviewed'] = 'Gallery viewed';
$string['eventitemcreated'] = 'Item created';
$string['eventitemdeleted'] = 'Item deleted';
$string['eventitemupdated'] = 'Item updated';
$string['exifmissing'] = 'Without this, jpg/tiff files may not be rotated to the correct orientation in media collections.';
$string['export'] = 'Export';
$string['exportascsv'] = 'Export as CSV';
$string['exportgallery'] = 'Export gallery';
$string['externalurl'] = 'External URL';
$string['externalurl_help'] = 'Currently links to images and youtube videos are supported.';
$string['filename'] = 'File name';
$string['filesize'] = 'File size';
$string['foundxresults'] = 'Found {$a} result(s):';
$string['gallery'] = 'Gallery';
$string['galleryfocus'] = 'Gallery focus';
$string['galleryfocus_help'] = 'The default focus of the gallery (determines what filetypes are presented as the focus of the gallery). If set as a YouTube gallery, the focus is locked to Video.';
$string['galleryname'] = 'Gallery name';
$string['gallerythumbnail'] = 'Use as thumbnail';
$string['gallerythumbnail_help'] = 'If selected, the thumbnail for this item is used as the thumbnail for the gallery.';
$string['galleryviewoptions'] = 'Gallery view options';
$string['galleryviewoptions_help'] = 'Determines the gallery view options which are available to students.';
$string['gridview'] = 'Grid view';
$string['gridviewcolumns'] = 'Columns in grid view';
$string['gridviewcolumns_help'] = 'In grid view, the number of columns displayed.';
$string['gridviewrows'] = 'Rows in grid view';
$string['gridviewrows_help'] = 'In grid view, the number of rows displayed.';
$string['group'] = 'Group';
$string['group_help'] = 'As you are a member of multiple groups (or have permission to manage groups in this course), this is the group you wish to associate the gallery with.';
$string['information'] = 'Information';
$string['itemdisplay'] = 'Item display';
$string['itemdisplay_help'] = 'Include this item in the gallery display (e.g. carousel).';
$string['like'] = 'Like';
$string['likedby'] = 'Liked by';
$string['maxbytes'] = 'Maximum size per item';
$string['maxgalleries'] = 'Max galleries per user/group';
$string['maxgalleries_help'] = 'The maximum number of galleries a user (or group when using groups modes) can create in this collection.

Note: for Instructor collections, this is always unlimited.';
$string['maxgalleriesreached'] = 'Maximum number of galleries added';
$string['maxitems'] = 'Maximum items per gallery';
$string['maxitems_help'] = 'The maximum number of items a user can put in a gallery in this collection.

Note: for Instructor collections, this is always unlimited.';
$string['maxitemsreached'] = 'Maximum number of items added';
$string['mediagallery'] = 'Media collection';
$string['mediagallery:addinstance'] = 'Add an instance of Media collection';
$string['mediagallery:comment'] = 'Comment on a media collection gallery or item';
$string['mediagallery:grade'] = 'Grade media gallery';
$string['mediagallery:like'] = 'Ability to like items in a media collection';
$string['mediagallery:manage'] = 'Manage an instance of Media collection';
$string['mediagallery:viewall'] = 'Ability to view all galleries in a Media collection';
$string['mediagalleryfieldset'] = 'Custom example fieldset';
$string['mediagalleryname'] = 'Media collection name';
$string['mediagalleryname_help'] = 'The name you want to give your media collection.';
$string['mediainformation'] = 'Media information';
$string['mediasize'] = 'Media size';
$string['mediasizelg'] = 'Large';
$string['mediasizemd'] = 'Medium';
$string['mediasizesm'] = 'Small';
$string['mediatype'] = 'Media type';
$string['medium'] = 'Medium';
$string['medium_help'] = 'The medium used to create the work (i.e. painting, photography, sound, etc).';
$string['metainfobulkheader'] = 'The below values will be used as the initial metadata for each of the items added above.';
$string['mode'] = 'Gallery mode';
$string['mode_help'] = 'This defines the kind of content the gallery supports. Once set, this value cannot be changed.

<ul><li>Standard: in this mode, users can add any kind of media content they wish.</li>
<li>YouTube: in this mode, only youtube videos can be added to the gallery.</li></ul>';
$string['modestandard'] = 'Standard';
$string['modethebox'] = 'theBox';
$string['modeyoutube'] = 'YouTube';
$string['modulename'] = 'Media collection';
$string['modulename_help'] = 'Use the Media collection module for creating galleries of media content.

Users can create their own galleries of images, video or audio either on their own or in groups.


Uploaded content will be presented in either a carousel or grid format as thumbnails. Click on any of the thumbnails brings that image into focus and allows you to browse through the gallery. Users are able to \'like\' and comment on content they can see in their own and other galleries.';
$string['modulenameplural'] = 'Media collections';
$string['moralrights'] = 'Moral rights';
$string['moralrights_help'] = 'Do you wish to assert your moral rights?

By selecting yes you\'re granting your consent for this item to potentially be used as a sample of work.';
$string['noitemsadded'] = 'No items have been added to this gallery.';
$string['noitemsfound'] = 'No items found.';
$string['noitemsselected'] = 'No items have been selected to export.';
$string['originalauthor'] = 'Original author';
$string['originalauthor_help'] = 'The original author of the item.';
$string['other'] = 'other';
$string['otherfiles'] = 'Other files';
$string['others'] = 'others';
$string['pluginadministration'] = 'Media collection administration';
$string['pluginname'] = 'Media collection';
$string['privacy:metadata:core_comments'] = 'Comments associated with media collection galleries or items';
$string['privacy:metadata:core_files'] = 'Tags associated with media collection galleries or items';
$string['privacy:metadata:core_tag'] = 'Tags associated with media collection galleries or items';
$string['privacy:metadata:mediagallery'] = 'Information about the the media galleries a user has created.';
$string['privacy:metadata:mediagallery:id'] = 'The ID of the media collection.';
$string['privacy:metadata:mediagallery:name'] = 'The name of the media collection.';
$string['privacy:metadata:mediagallery:userid'] = 'The ID of the user who created/owns the media collection activity.';
$string['privacy:metadata:mediagallery_gallery'] = 'Information about the the media galleries a user has created.';
$string['privacy:metadata:mediagallery_gallery:groupid'] = 'What ID of the group they created the gallery as a part of.';
$string['privacy:metadata:mediagallery_gallery:instanceid'] = 'The ID of the mediagallery item the user is providing a feedback for.';
$string['privacy:metadata:mediagallery_gallery:name'] = 'The name of the gallery.';
$string['privacy:metadata:mediagallery_gallery:userid'] = 'The ID of the user who created the gallery.';
$string['privacy:metadata:mediagallery_item'] = 'Information about the the media items a user has created.';
$string['privacy:metadata:mediagallery_item:broadcaster'] = 'Broadcaster of the work.';
$string['privacy:metadata:mediagallery_item:caption'] = 'The caption the user gave the item.';
$string['privacy:metadata:mediagallery_item:description'] = 'The desciption the user gave the item.';
$string['privacy:metadata:mediagallery_item:externalurl'] = 'The externalurl, if any, the item references.';
$string['privacy:metadata:mediagallery_item:galleryid'] = 'The ID of the gallery the item belongs to.';
$string['privacy:metadata:mediagallery_item:medium'] = 'Medium used to create the work.';
$string['privacy:metadata:mediagallery_item:moralrights'] = 'If the user claimed their moral rights on the item.';
$string['privacy:metadata:mediagallery_item:originalauthor'] = 'Original author/creator of the work.';
$string['privacy:metadata:mediagallery_item:productiondate'] = 'Datetime the piece was created.';
$string['privacy:metadata:mediagallery_item:publisher'] = 'Publisher of the work.';
$string['privacy:metadata:mediagallery_item:reference'] = 'Reference to the collection the work belongs to.';
$string['privacy:metadata:mediagallery_item:timecreated'] = 'The time the user created the item.';
$string['privacy:metadata:mediagallery_item:userid'] = 'The ID of the user who created the item.';
$string['privacy:metadata:mediagallery_userfeedback'] = 'Information about the user\'s feedback on a given mediagallery item';
$string['privacy:metadata:mediagallery_userfeedback:itemid'] = 'The ID of the mediagallery item the user is providing a feedback for.';
$string['privacy:metadata:mediagallery_userfeedback:liked'] = 'If the user "liked" the item.';
$string['privacy:metadata:mediagallery_userfeedback:rating'] = 'What rating the user gave the item (not implemented).';
$string['privacy:metadata:mediagallery_userfeedback:userid'] = 'The user who made the feedback.';
$string['privacy:metadata:preference:mediasize'] = 'What viewing size the user prefers to see media items in.';
$string['productiondate'] = 'Production date';
$string['productiondate_help'] = 'The date the original work was produced.';
$string['publisher'] = 'Publisher';
$string['publisher_help'] = 'The publisher (if any) of the work.';
$string['readonlyfrom'] = 'Read only from';
$string['readonlyto'] = 'Read only to';
$string['reference'] = 'Reference';
$string['reference_help'] = 'Reference to the collection (if any) the work is from.';
$string['removecollectionconfirm'] = 'Are you sure you wish to remove the link to this collection?';
$string['removefromcollection'] = 'Remove from collection';
$string['removefromgallery'] = 'Remove from gallery';
$string['removegalleryconfirm'] = 'Are you sure you wish to remove the link to this gallery?';
$string['removeitemconfirm'] = 'Are you sure you wish to remove the link to this item?';
$string['removethecollection'] = 'Remove/delete the collection';
$string['restrictavailableinfo'] = 'To restrict the dates this activity is available between, use the Restrict access section below.';
$string['sample'] = 'Sample';
$string['search'] = 'Search';
$string['search_help'] = 'Enter the keywords you want to search for.';
$string['searchcourseonly'] = 'Only this course';
$string['searchcourseonly_help'] = 'Did you only want to search for items in media galleries withing this course?';
$string['searchdisplayxtoyofzresults'] = 'Found {$a->total} result(s). Displaying {$a->from}-{$a->to}:';
$string['searchresults'] = 'Search results';
$string['searchtitle'] = 'Media collection search';
$string['selection'] = 'Selection';
$string['settingsavailability'] = 'Availability';
$string['settingsdisplay'] = 'Display list';
$string['settingsgallery'] = 'Gallery defaults';
$string['settingsgallerydisplay'] = 'Gallery display';
$string['settingsvisibility'] = 'Visibility';
$string['showall'] = 'Show all';
$string['storagereport'] = 'Media collection storage';
$string['storagetotalusage'] = 'Total storage usage across the site: {$a}.';
$string['submittedforgrading'] = 'Submitted for grading';
$string['synclastcompleted'] = 'Sync last completed';
$string['syncwiththebox'] = 'Sync from theBox';
$string['tagarea_mediagallery'] = 'Media collections';
$string['tagarea_mediagallery_gallery'] = 'Media galleries';
$string['tagarea_mediagallery_item'] = 'Media items';
$string['tags'] = 'Tags';
$string['theboxisnotenabled'] = 'Unfortunately, this collection is not currently accessible as it\'s linked to theBox, which is not currently enabled.';
$string['thumbnail'] = 'Thumbnail';
$string['thumbnail_help'] = 'You can select an image to use as the thumbnail in the gallery for this item.

If you don\'t supply one, one is generated for you from the uploaded resource (for images) or a file type icon used (for other files).';
$string['thumbnailsperpage'] = 'Thumbnails per page';
$string['thumbnailsperrow'] = 'Thumbnails per row';
$string['togglefullscreen'] = 'Toggle fullscreen';
$string['togglesidebar'] = 'Toggle sidebar';
$string['toomany'] = 'Too many galleries, please delete or change collection type';
$string['top'] = 'Top';
$string['typeall'] = 'All files';
$string['typeaudio'] = 'Audio';
$string['typeimage'] = 'Image';
$string['typevideo'] = 'Video';
$string['unlike'] = 'Unlike';
$string['uploader'] = 'Uploader';
$string['viewgallery'] = 'View gallery';
$string['visibleinstructor'] = 'Visible to instructors only after';
$string['visibleinstructor_help'] = 'Define the gallery as visible to course instructors after the specified date. This can be useful for allowing instructors to access before all other users. Course managers with appropriate permissions will always be able to see the gallery.';
$string['visibleother'] = 'Visible to everyone in the course after';
$string['visibleother_help'] = 'Define the gallery as visible to other users after the specified date. Course managers with appropriate permissions will always be able to see the gallery.';
$string['you'] = 'you';
$string['youmusttypedelete'] = 'You must type DELETE to confirm deletion.';
$string['youtubeurl'] = 'YouTube URL';
