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
 * A script to serve files from web service client with CORS support
 *
 * @package    local_mobile
 * @copyright  2014 Juan Leyva <juan@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * NO_DEBUG_DISPLAY - disable moodle specific debug messages and any errors in output
 */

define('AJAX_SCRIPT', true);
define('NO_MOODLE_COOKIES', true);

require('../../../config.php');
require_once($CFG->libdir . '/filelib.php');
require_once($CFG->dirroot . '/webservice/lib.php');

// Authenticate the user.
$token = required_param('token', PARAM_ALPHANUM);
$webservicelib = new webservice();
$authenticationinfo = $webservicelib->authenticate_user($token);

// Check the service allows file download.
$enabledfiledownload = (int) ($authenticationinfo['service']->downloadfiles);
if (empty($enabledfiledownload)) {
    throw new webservice_access_exception('Web service file downloading must be enabled in external service settings');
}

// Finally we can serve the file :).
$relativepath = get_file_argument();

// Serve the SCORM file.
if (strpos($relativepath, 'mod_scorm/package') !== false) {

    $contextid = (int)array_shift(explode('/', ltrim($relativepath, '/')));
    list($context, $course, $cm) = get_context_info_array($contextid);

    require_login($course, true, $cm);

    $fs = get_file_storage();
    if (!$file = $fs->get_file_by_hash(sha1($relativepath)) or $file->is_directory()) {
        send_header_404();
        die;
    }
    send_stored_file($file, $lifetime, 0, false, array());
} else {
    header('Access-Control-Allow-Origin: *');
    file_pluginfile($relativepath, 0);
}
