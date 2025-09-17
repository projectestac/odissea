<?php
// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Displays external information about a course
 * @package    core_course
 * @copyright  1999 onwards Martin Dougiamas  http://dougiamas.com
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once("../config.php");
require_once($CFG->dirroot.'/course/lib.php');

$q         = optional_param('q', '', PARAM_RAW);       // Global search words.
$search    = optional_param('search', '', PARAM_RAW);  // search words
$page      = optional_param('page', 0, PARAM_INT);     // which page to show
$perpage   = optional_param('perpage', '', PARAM_RAW); // how many per page, may be integer or 'all'
$blocklist = optional_param('blocklist', 0, PARAM_INT);
$modulelist= optional_param('modulelist', '', PARAM_PLUGIN);
$tagid     = optional_param('tagid', '', PARAM_INT);   // searches for courses tagged with this tag id

// Use global search.
if ($q) {
    $search = $q;
}

// List of minimum capabilities which user need to have for editing/moving course
$capabilities = array('moodle/course:create', 'moodle/category:manage');

// Populate usercatlist with list of category id's with course:create and category:manage capabilities.
$usercatlist = core_course_category::make_categories_list($capabilities);

// XTEC ************ AFEGIT - Added filtering to param to prevent abuse.
// 2025.10.01 @corentin.robin

// List of forbidden patterns to remove from search.
$blacklist_patterns = [
    '/(https?:\/\/[^\s]+|www\.[^\s]+)/i',
    '/\b(?:seo|search\s*engine\s*optimization|search\s*ranking|boost\s*ranking|google\s*ranking|increase\s*ranking|higher\s*ranking|keyword\s*optimization|keyword\s*density|meta\s*tags?|content\s*marketing|digital\s*marketing|growth\s*hacking|traffic|web\s*traffic|site\s*traffic|website\s*traffic|increase\s*traffic|boost\s*traffic|targeted\s*traffic|real\s*visitors?|unique\s*visitors?|page\s*views?|buy\s*traffic|back\s*links?|link\s*building|link\s*exchange|guest\s*posts?|sponsored\s*posts?|dofollow\s*links?|high\s*authority\s*links?|domain\s*authority|dr\s*\d+|da\s*\d+|ahrefs|semrush|moz\s*rank|organic\s*reach|social\s*media\s*growth|followers?|subscribers?|likes?|views?|boost\s*followers?|buy\s*followers?|buy\s*likes?|buy\s*subscribers?|increase\s*engagement|email\s*marketing|newsletter\s*blast|sms\s*marketing|cold\s*emails?|automation\s*tools?|lead\s*generation|generate\s*leads?|sales\s*funnel|conversion\s*rate|click\s*through\s*rate|CTR|CPC|cost\s*per\s*click|adwords|google\s*ads?|facebook\s*ads?|instagram\s*ads?|tiktok\s*ads?|ppc\s*campaign|sponsored\s*campaign|promo(?:tions?)?|special\s*offers?|discounts?|limited\s*time\s*offer|exclusive\s*deal|flash\s*sale|coupon\s*codes?|voucher\s*codes?|free\s*trial|free\s*access|bonus\s*offer|best\s*price|lowest\s*price|cheap|affordable|budget\s*deal|low\s*cost|guaranteed\s*results?|100%\s*satisfaction|money\s*back\s*guarantee)\b/i',
    '/\b(?:sex|sexual|sexy|porn|porno|pornography|adult\s*content|adult\s*video|xxx|call\s*girls?|companions?|cams?|webcams?|live\s*cams?|sex\s*cams?|private\s*show|strip\s*cams?|onlyfans?|fansly|justforfans|nudes?|naked|leaks?|leaked\s*videos?|hardcore|softcore|striptease|camgirl|cam\s*boy|cheating\s*wife|cheating\s*husband|sugar\s*daddy|casual\s*sex|one\s*night\s*stand|dating\s*site|adult\s*dating)\b/i',
    '/\b(?:hacked|hacking|hackers|\bhacker\w*|hack|\.com)\b/i',
];

// Clean the search query by removing forbidden patterns.
$search = preg_replace($blacklist_patterns, '', $search);

// Limit the length of the search query to prevent abuse.
$search = substr($search, 0, 50);

// Block any attempt to change language via URL parameter.
$lang = optional_param('lang', '', PARAM_RAW);
if ($lang) {
    force_current_language('ca');
}

// ************ FI

$search = trim(strip_tags($search)); // trim & clean raw searched string

$site = get_site();

$searchcriteria = array();
foreach (array('search', 'blocklist', 'modulelist', 'tagid') as $param) {
    if (!empty($$param)) {
        $searchcriteria[$param] = $$param;
    }
}
$urlparams = array();
if ($perpage !== 'all' && !($perpage = (int)$perpage)) {
    // default number of courses per page
    $perpage = $CFG->coursesperpage;
} else {
    $urlparams['perpage'] = $perpage;
}
if (!empty($page)) {
    $urlparams['page'] = $page;
}
$PAGE->set_url('/course/search.php', $searchcriteria + $urlparams);
$PAGE->set_context(context_system::instance());
$PAGE->set_pagelayout('standard');
$courserenderer = $PAGE->get_renderer('core', 'course');

if ($CFG->forcelogin) {
    require_login();
}

$strcourses = new lang_string("courses");
$strsearch = new lang_string("search");
$strsearchresults = new lang_string("searchresults");
$strnovalidcourses = new lang_string('novalidcourses');

$courseurl = core_course_category::user_top() ? new moodle_url('/course/index.php') : null;
$PAGE->navbar->add($strcourses, $courseurl);
$PAGE->navbar->add($strsearch, new moodle_url('/course/search.php'));
if (!empty($search)) {
    $PAGE->navbar->add(s($search));
}

if (empty($searchcriteria)) {
    // no search criteria specified, print page with just search form
    $PAGE->set_title($strsearch);
} else {
    // this is search results page
    $PAGE->set_title($strsearchresults);
    // Link to manage search results should be visible if user have system or category level capability
    if ((can_edit_in_category() || !empty($usercatlist))) {
        $aurl = new moodle_url('/course/management.php', $searchcriteria);
        $searchform = $OUTPUT->single_button($aurl, get_string('managecourses'), 'get');
    } else {
        $searchform = $courserenderer->course_search_form($search);
    }
    $PAGE->set_button($searchform);

    // Trigger event, courses searched.
    $eventparams = array('context' => $PAGE->context, 'other' => array('query' => $search));
    $event = \core\event\courses_searched::create($eventparams);
    $event->trigger();
}

$PAGE->set_heading($site->fullname);

echo $OUTPUT->header();
echo $courserenderer->search_courses($searchcriteria);
echo $OUTPUT->footer();
