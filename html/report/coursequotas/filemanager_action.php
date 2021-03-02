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
// along with Moodle. If not, see <http://www.gnu.org/licenses/>.

/**
 * Coursequotas report
 *
 * @package    report
 * @subpackage coursequotas
 * @copyright  2016 Pau Ferrer Ocaña pau@moodle.com
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once('../../config.php');
require_once('../../lib/filelib.php');

require_login();
$context = context_system::instance();
require_capability('report/coursequotas:manage', $context);

$action = optional_param('action', null, PARAM_ALPHANUMEXT);
$fileid = optional_param('fileid', null, PARAM_INT);

if (!$action || !$fileid) {
    die;
}

$fs = get_file_storage();
$file = $fs->get_file_by_id($fileid);
if (!$file) {
    send_file_not_found();
}

switch ($action) {
    case 'download':
        \core\session\manager::write_close(); // Unlock session during file serving.
        send_stored_file($file, null, $CFG->filteruploadedfiles, true);
        return;

    case 'delete':
        $file->delete();
        \core\notification::add(get_string('deleted'), 'success');
        if (!empty($_SERVER['HTTP_REFERER'])) {
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            redirect($CFG->wwwroot . '/report/coursequotas/filemanager.php');
        }
        return;
}
