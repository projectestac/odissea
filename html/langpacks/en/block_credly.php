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
 * Strings for component 'block_credly', language 'en', version '3.11'.
 *
 * @package     block_credly
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addnewbadge'] = 'Add a new badge';
$string['apikey'] = 'API KEY';
$string['apikeydesc'] = 'The API key as provided by credly';
$string['apipassword'] = 'Password';
$string['apipassworddesc'] = 'The credly password for the authenticating user to use for API calls needing access tokens';
$string['apisecret'] = 'API SECRET';
$string['apisecretdesc'] = 'The API secret as provided by credly';
$string['apiuser'] = 'Username';
$string['apiuserdesc'] = 'The credly username for the authenticating user to use for API calls needing access tokens';
$string['badgeimage'] = 'Badge image';
$string['badgeimage_help'] = 'The image file you want to use as the badge image.  It is best to use an image with a square dimention.  The maximum file size is 1 MiB.';
$string['created_at'] = 'Date created';
$string['createnewbadge'] = 'Create a new badge';
$string['credly:addinstance'] = 'Add a new credly block';
$string['credly:grantbadge'] = 'Grant a credly badge to a user';
$string['credlybadges'] = 'Credly badges';
$string['credlyerrorresponse'] = 'The credly server responded with the following error: {$a}';
$string['criteria'] = 'Criteria';
$string['criteria_help'] = 'Criteria for the new badge (up to 500 characters)';
$string['description'] = 'Description';
$string['description_help'] = 'A long description for the new badge (up to 500 characters)';
$string['editbadge'] = 'Edit a badge';
$string['errorexpiresin'] = 'Expires value should be an integer value from 0 to {$a}.';
$string['errorfetchingbadgeinfo'] = 'The system encountered an error trying to fetch the badge info from Credly.';
$string['expires_in'] = 'Expires after how many seconds';
$string['expires_in_help'] = 'Number of seconds until the badge expires from the moment it is issued.  A value of 0 means never.';
$string['fetcherror'] = 'The system encountered an error trying to retrieve the badge information.';
$string['grantbadge'] = 'Grant a badge';
$string['grantbadgerequired'] = 'You are required to select a badge to grant.';
$string['grantedtouser'] = 'The badge was issued and the user was notified via Credly email.  The user may still need to accept the badge depending on the user&apos;s Credly account settings.';
$string['granterror'] = 'The system encountered an error trying to grant the badge.';
$string['granttocandidates'] = 'All students';
$string['granttocandidatesmatching'] = 'Students matching "{$a}"';
$string['grantuserrequired'] = 'You are required to select a user to issue a badge to.';
$string['id'] = 'ID';
$string['image_preview'] = 'Image preview';
$string['image_preview_current'] = 'Preview of current image';
$string['image_url'] = 'Image URL';
$string['is_claimable'] = 'Can be claimed';
$string['is_giveable'] = 'Can others give this badge?';
$string['is_giveable_help'] = 'Whether the new badge may be given by Credly members other than the creator';
$string['issuebadge'] = 'Issue badge';
$string['managebadges'] = 'Manage badges';
$string['missingbadgeimage'] = 'A badge image is required';
$string['missingtitle'] = 'Title is required';
$string['mybadges'] = 'My badges';
$string['noearnedbadges'] = 'You have not yet earned any badges.';
$string['notconfigured'] = 'The credly block plugin is not configured properly.  API credentials and authenticating user account information are required.  Set the parameters <a href="{$a->configureurl}">here</a>.';
$string['orgid'] = 'Organization ID';
$string['orgiddesc'] = 'If you are managing and granting badges on behalf of an organization, set this to the numerical id of the organization&apos;s account on Credly.  You can find this information by accessing the organization account and clicking on &quot;View Profile&quot;.  You will be taken to a URL such as http://credly.com/u/&lt;<i>numerical id</i>&gt; and you can use the id displayed in the url.  NOTE: If you are using an organization, you have to make sure that the account you are using for username/password is either an owner or a manager of the organization.';
$string['pluginname'] = 'Credly';
$string['selectbadgeaward'] = 'Select badge to grant';
$string['short_description'] = 'Short description';
$string['short_description_help'] = 'A short description for the new badge (up to 128 characters)';
$string['showinglatest'] = 'Your {$a} latest badges.';
$string['shownumlabel'] = 'How many badges to show';
$string['thumbnail'] = 'Thumbnail';
$string['title'] = 'Title';
$string['title_help'] = 'The title of the new badge (up to 128 characters)';
$string['usecache'] = 'Use cache';
$string['usecachedesc'] = 'Whether to enable the caching (24 hours) of api results into the database.  This is typically not needed as Credly already provides adequate limits.  This is here mostly as part of legacy code.';
$string['viewallmy'] = 'View all my badges';
$string['viewbadge'] = 'View badge';
$string['viewincredly'] = 'view in Credly';
