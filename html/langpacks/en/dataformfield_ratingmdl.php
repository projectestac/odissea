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
 * Strings for component 'dataformfield_ratingmdl', language 'en', version '4.4'.
 *
 * @package     dataformfield_ratingmdl
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allusers'] = 'All users as a whole';
$string['avgratings'] = 'Average of ratings';
$string['eachuser'] = 'Each user separately';
$string['event_rating_created'] = 'Rating created';
$string['event_rating_deleted'] = 'Rating deleted';
$string['forceinorder'] = 'Force in order';
$string['forceinorder_help'] = 'When in-order is forced, the user cannot use a particular value for rating before preceding values in the scale have been used the "limit" number of times (if applicable).';
$string['maxratings'] = 'Highest rating';
$string['minratings'] = 'Lowest rating';
$string['numratings'] = 'Number of ratings';
$string['pluginname'] = 'Rating (moodle)';
$string['preventzero'] = 'Prevent zero rating';
$string['preventzero_help'] = 'By default point scales include a 0 value for rating. If set to Yes the 0 value will not be available for rating.';
$string['ratelabel'] = 'Rate label';
$string['ratelabel_help'] = 'Rate label';
$string['rating'] = 'Rating';
$string['ratinginvalid1'] = 'The number of ratings with value {$a} has reached its limit. Please select another value.';
$string['ratinginvalid2'] = 'Rating order applies. The first rating must be the first value in the rating scale.';
$string['ratinginvalid3'] = 'Rating order applies. This rating value cannot be unset before all current ratings with higher values are unset.';
$string['ratinginvalid4'] = 'Rating order applies. Your rating value must be consecutive to the rating with the highest value.';
$string['ratinginvalid5'] = 'Rating order applies. The preceding rating value must reach a limit before the value {$a} can be assigned. Please select the preceding value.';
$string['ratingmdl:addinstance'] = 'Add a new Rating (moodle) dataformfield';
$string['ratingmdl:anyrate'] = 'Any Entry - Rate';
$string['ratingmdl:anyviewaggregate'] = 'Any Entry - View Rating Aggregates';
$string['ratingmdl:anyviewratings'] = 'Any Entry - View Ratings';
$string['ratingmdl:ownrate'] = 'Own Entry - Rate';
$string['ratingmdl:ownviewaggregate'] = 'Own Entry - View Rating Aggregates';
$string['ratingmdl:ownviewratings'] = 'Own Entry - View Ratings';
$string['repititionlimit'] = 'Repitition limit';
$string['repititionlimit_help'] = 'The max number of times a value in the rating scale can be used by the users in scope for rating the entry. (Each user is still restricted to 1 rating per field)';
$string['repititionscope'] = 'Repitition scope';
$string['repititionscope_help'] = 'The scope of users to which the repitition limit applies.';
$string['sumratings'] = 'Sum of ratings';
$string['usersrating'] = 'User rating';
