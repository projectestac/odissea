<?php
// This file is part of CodeRunner - http://coderunner.org.nz
//
// CodeRunner is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// CodeRunner is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with CodeRunner.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Deprecated entry point for the bulk tester. Redirects to management.php.
 *
 * @deprecated since CodeRunner 5.x - use management.php instead.
 * @package   qtype_coderunner
 * @copyright 2025 Richard Lobb, The University of Canterbury
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../../config.php');

require_login();
$PAGE->set_url('/question/type/coderunner/bulktestindex.php');
$PAGE->set_context(context_system::instance());

redirect(
    new moodle_url('/question/type/coderunner/management.php'),
    'This URL (bulktestindex.php) is deprecated and will be removed in a future release. '
        . 'Please update your bookmarks to use management.php instead.',
    5,
    \core\output\notification::NOTIFY_WARNING
);
