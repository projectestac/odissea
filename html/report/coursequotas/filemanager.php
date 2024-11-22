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

require_once '../../config.php';
require_once $CFG->libdir . '/adminlib.php';
require_once $CFG->dirroot . '/report/coursequotas/lib/local.lib.php';
require_once $CFG->dirroot . '/report/coursequotas/lib/calculate.lib.php';
require_once $CFG->dirroot . '/report/coursequotas/lib/filemanager.lib.php';
require_once $CFG->dirroot . '/report/coursequotas/lib/util.lib.php';
require_once $CFG->dirroot . '/report/coursequotas/constants.php';

admin_externalpage_setup('filemanager', '', null, '', ['pagelayout' => 'report']);

echo $OUTPUT->header();
echo $OUTPUT->heading(get_string('filemanager', REPORT_COMPONENTNAME), 3);

$filename = optional_param('filename', null, PARAM_TEXT);
$userid = optional_param('userid', null, PARAM_INT);
$context = optional_param('context', null, PARAM_INT);
$addchildren = optional_param('children', false, PARAM_BOOL);
$filearea = optional_param('filearea', null, PARAM_TEXT);
$component = optional_param('component', null, PARAM_TEXT);
$size = optional_param('size', null, PARAM_INT);
$sizeselected = optional_param('sizeselect', null, PARAM_INT);
$showonlybackups = optional_param('backups', false, PARAM_BOOL);
$hidesamehash = optional_param('hidesamehash', null, PARAM_TEXT);
$hash = optional_param('hash', null, PARAM_TEXT);
$sort = optional_param('sort', 'filename', PARAM_TEXT);
$dir = optional_param('dir', 'ASC', PARAM_TEXT);
$page = optional_param('page', 0, PARAM_INT);
$perpage = optional_param('perpage', 50, PARAM_INT);

if (!$context) {
    // Get context from URL (may not appear on the filter).
    $system = optional_param('system', null, PARAM_INT);
    $category = optional_param('category', null, PARAM_INT);
    $course = optional_param('course', null, PARAM_INT);
    $module = optional_param('module', null, PARAM_INT);
    $block = optional_param('block', null, PARAM_INT);
    if ($system) {
        $context = context_system::instance()->id;
    } else if ($category) {
        $context = context_coursecat::instance($category)->id;
    } else if ($course) {
        $context = context_course::instance($course)->id;
    } else if ($module) {
        $context = context_module::instance($module)->id;
    } else if ($block) {
        $context = context_block::instance($block)->id;
    }
}

if ($hash) {
    $files = get_contenthash_files($hash, $sort, $dir, $page * $perpage, $perpage);
} else {
    $files = get_filtered_files($filename, $userid, $context, $addchildren, $filearea, $component, $size, $sizeselected, $showonlybackups, $hidesamehash, $sort, $dir, $page * $perpage, $perpage);
}
$filteroptions = get_all_filter_options($context);

// Filtering.
$filters = '<form>' . html_writer::label(get_string('filename', 'backup'), 'filename', false, [REPORT_COURSEQUOTAS_CLASS_STRING => REPORT_COURSEQUOTAS_INLINE_STRING]) . ' ';
$filters .= '<input type="text" id="filename" name="filename" value="' . $filename . '"><br>';

$filters .= html_writer::label(get_string(REPORT_COURSEQUOTAS_OWNER_STRING, REPORT_COMPONENTNAME), 'userid', false, [REPORT_COURSEQUOTAS_CLASS_STRING => REPORT_COURSEQUOTAS_INLINE_STRING]) . ' ';
$filters .= html_writer::select($filteroptions->users, "userid", $userid, get_string("allusers", REPORT_COMPONENTNAME)) . '<br>';

$filters .= html_writer::label(get_string('course'), 'context', false, [REPORT_COURSEQUOTAS_CLASS_STRING => REPORT_COURSEQUOTAS_INLINE_STRING]) . ' ';
$filters .= html_writer::select($filteroptions->contexts, "context", $context, get_string("allcourses", "search")) . ' ';
$filters .= html_writer::checkbox("children", 1, $addchildren, get_string("addchildren", REPORT_COMPONENTNAME)) . '<br>';

$filters .= html_writer::label(get_string('filearea', REPORT_COMPONENTNAME), 'filearea', false, [REPORT_COURSEQUOTAS_CLASS_STRING => REPORT_COURSEQUOTAS_INLINE_STRING]) . ' ';
$filters .= html_writer::select($filteroptions->fileareas, "filearea", $filearea, get_string("allfileareas", REPORT_COMPONENTNAME)) . ' ';

$filters .= html_writer::label(get_string('component', REPORT_COMPONENTNAME), 'component', false, [REPORT_COURSEQUOTAS_CLASS_STRING => REPORT_COURSEQUOTAS_INLINE_STRING]) . ' ';
$filters .= html_writer::select($filteroptions->components, "component", $component, get_string("allcomponents", REPORT_COMPONENTNAME)) . ' ';
$filters .= html_writer::checkbox("backups", 1, $showonlybackups, get_string("showonlybackups", REPORT_COMPONENTNAME)) . '<br>';

if (!function_exists('get_protected_agora') || get_protected_agora()) {
    $filters .= html_writer::checkbox("hidesamehash", 1, $hidesamehash, get_string("hidesamehash", REPORT_COMPONENTNAME)) . '<br>';
}

$sizeselect = [
    get_string('more_than', REPORT_COMPONENTNAME),
    get_string('less_than', REPORT_COMPONENTNAME),
];

$filters .= html_writer::label(get_string('size'), 'size', false, [REPORT_COURSEQUOTAS_CLASS_STRING => REPORT_COURSEQUOTAS_INLINE_STRING]) . ' ';
$filters .= html_writer::select($sizeselect, "sizeselect", $sizeselected, false);
$filters .= ' <input type="number" id="size" name="size" value="' . $size . '"> MB<br />';
$filters .= '<button type="submit" class="btn btn-success edit-btn"><i class="smallicon fa fa-search"></i>' . get_string('search') . '</button> <a href="' . $CFG->wwwroot . '/report/coursequotas/filemanager.php" class="btn btn-warning edit-btn"><i class="smallicon fa fa-undo"></i>' . get_string('reset') . '</a></form>';

$caption = '<i class="smallicon fa fa-filter"></i>' . get_string('filter');
print_collapsible_region($filters, 'well well-small', 'filter', $caption, '', true);

echo $OUTPUT->box_start('', 'results');
if ($files->count) {

    echo $OUTPUT->box_start('well');
    $sizetotal = report_coursequotas_format_size_text($files->total);
    echo $OUTPUT->box(get_string('totalfilesize', REPORT_COMPONENTNAME, $sizetotal));
    $filesize = report_coursequotas_format_size_text($files->filesize);
    echo $OUTPUT->box(get_string('realfilesize', REPORT_COMPONENTNAME, $filesize));
    echo $OUTPUT->box_end();

    $contextcache = [];
    $ownercache = [];

    $pageparams = [
        'filename' => $filename,
        'userid' => $userid,
        'context' => $context,
        'children' => $addchildren,
        'filearea' => $filearea,
        'component' => $component,
        'size' => $size,
        'sizeselect' => $sizeselected,
        'backups' => $showonlybackups,
        'hidesamehash' => $hidesamehash,
        'sort' => $sort,
        'dir' => $dir,
        'perpage' => $perpage,
        ];

    $baseurl = new moodle_url('/report/coursequotas/filemanager.php', $pageparams);
    $pagingbar = $OUTPUT->paging_bar($files->count, $page, $perpage, $baseurl);

    $table = new html_table();
    $table->class = 'generaltable';
    $columns = [
        'filename' => get_string('filename', 'backup'),
        REPORT_COURSEQUOTAS_OWNER_STRING => get_string(REPORT_COURSEQUOTAS_OWNER_STRING, REPORT_COMPONENTNAME),
        'context' => get_string('context', REPORT_COMPONENTNAME),
        'filearea' => get_string('filearea', REPORT_COMPONENTNAME),
        'component' => get_string('component', REPORT_COMPONENTNAME),
        'filesize' => get_string('size'),
    ];

    foreach ($columns as $column => $columnname) {
        if ($column == REPORT_COURSEQUOTAS_OWNER_STRING || $column == 'context') {
            $table->head[] = $columnname;
        } else {
            if ($sort != $column) {
                $columnicon = '';
                if ($column == 'filesize') {
                    $columndir = 'DESC';
                } else {
                    $columndir = 'ASC';
                }
            } else {
                $columndir = $dir == 'ASC' ? 'DESC' : 'ASC';
                $columnicon = ($dir == 'ASC') ? 'sort_asc' : 'sort_desc';
                $columnicon = "<img class='iconsort' src=\"" . $OUTPUT->image_url('t/' . $columnicon) . "\" alt=\"\" />";
            }
            $baseurl->param('sort', $column);
            $baseurl->param('dir', $columndir);
            $baseurl->param('page', 0);
            $url = $baseurl->out();
            $table->head[] = "<a href=\"$url\">" . $columnname . "</a>$columnicon";
        }
    }

    $table->align = ['left', REPORT_COURSEQUOTAS_CENTER_STRING, REPORT_COURSEQUOTAS_CENTER_STRING, REPORT_COURSEQUOTAS_CENTER_STRING, REPORT_COURSEQUOTAS_CENTER_STRING, REPORT_COURSEQUOTAS_CENTER_STRING];
    foreach ($files->files as $file) {

        if ($file->userid && !isset($ownernamecache[$file->userid])) {
            $ownercache[$file->userid] = '<a href="' . $CFG->wwwroot . '/user/profile.php?id=' . $file->userid . '" target="_blank">' . $filteroptions->users[$file->userid] . '</a>';
        }
        if ($file->contextid && !isset($contextcache[$file->contextid])) {
            $filecontext = context::instance_by_id($file->contextid);
            if (!isset($filteroptions->contexts[$file->contextid])) {
                $filteroptions->contexts[$file->contextid] = $filecontext->get_context_name();
            }
            $contextcache[$file->contextid] = '<a href="' . $filecontext->get_url() . '" target="_blank">' . $filteroptions->contexts[$file->contextid] . '</a>';
        }
        $filesize = report_coursequotas_format_size_text($file->filesize);

        $deleteparams = [];
        $deleteparams[] = $file->id;
        $deleteparams[] = rawurlencode($file->filename);

        $params = [];
        $params[] = $file->id;
        $params[] = rawurlencode($file->filename);
        $params[] = $file->userid ? rawurlencode($filteroptions->users[$file->userid]) : $file->userid;
        $params[] = $file->contextid ? rawurlencode($filteroptions->contexts[$file->contextid]) : $file->contextid;
        $params[] = $file->filearea;
        $params[] = $file->component;
        $params[] = $filesize;
        $params[] = $file->contenthash;
        $params[] = $file->pathnamehash;
        $params[] = rawurlencode($file->filepath);
        $params[] = $file->mimetype;
        $params[] = userdate($file->timemodified);

        $row = [];
        $row[] = '<a href="#fileModal" title="' . get_string('showmore', 'form') . '" onclick="filemanager_openFileInfo(\'' . implode("','", $params) . '\')"  data-toggle="modal" data-target="#fileModal">' . $file->filename . ' <i class="fa fa-search" aria-hidden="true"></i></a> <a href="#deleteModal" data-toggle="modal" onclick="filemanager_deleteFileDirect(\'' . implode("','", $deleteparams) . '\')" title="' . get_string('delete') . '"><i class="fa fa-trash" aria-hidden="true"></i></a>';
        $row[] = $file->userid ? $ownercache[$file->userid] : $file->userid;
        $row[] = $file->contextid ? $contextcache[$file->contextid] : $file->contextid;
        $row[] = $file->filearea;
        $row[] = $file->component;
        $row[] = $filesize;
        $table->data[] = $row;
    }

    echo $OUTPUT->box(get_string('showingfiles', REPORT_COMPONENTNAME, ['files' => count($files->files), 'total' => $files->count]), REPORT_COURSEQUOTAS_TEXTRIGHT_STRING);
    echo $OUTPUT->box($pagingbar, REPORT_COURSEQUOTAS_TEXTRIGHT_STRING);
    echo html_writer::table($table);
    echo $OUTPUT->box($pagingbar, REPORT_COURSEQUOTAS_TEXTRIGHT_STRING);

    echo '  
    <div id="fileModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="fileModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h3 id="fileModal_filename"></h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              </div>
              <div class="modal-body">
                <span id="fileModal_fileid" class="hidden"></span>
                <span id="fileModal_urlroot" class="hidden">' . $CFG->wwwroot . '</span>
                <p><strong>' . get_string(REPORT_COURSEQUOTAS_OWNER_STRING, REPORT_COMPONENTNAME) . '</strong>: <span id="fileModal_owner"></span></p>
                <p><strong>' . get_string('context', REPORT_COMPONENTNAME) . '</strong>: <span id="fileModal_context"></span></p>
                <p><strong>' . get_string('filearea', REPORT_COMPONENTNAME) . '</strong>: <span id="fileModal_filearea"></span></p>
                <p><strong>' . get_string('component', REPORT_COMPONENTNAME) . '</strong>: <span id="fileModal_component"></span></p>
                <p><strong>' . get_string('size') . '</strong>: <span id="fileModal_filesize"></span></p>
                <p><strong>' . get_string('path', REPORT_COURSEQUOTAS_REPOSITORY_STRING) . '</strong>: <span id="fileModal_filepath"></span></p>
                <p><strong>' . get_string('type', REPORT_COURSEQUOTAS_REPOSITORY_STRING) . '</strong>: <span id="fileModal_mimetype"></span></p>
                <p><strong>' . get_string('lastmodified') . '</strong>: <span id="fileModal_timemodified"></span></p>
                <p><strong>Content hash</strong>: <span id="fileModal_contenthash"></span></p>
                <p><strong>Path hash</strong>: <span id="fileModal_pathnamehash"></span></p>
              </div>
              <div class="modal-footer">
                <a id="fileModal_similar" class="btn btn-info edit-btn" aria-hidden="true" href="#" target="_blank" original-href="' . $CFG->wwwroot . '/report/coursequotas/filemanager.php?hash="><i class="fa fa-eye" aria-hidden="true"></i>' . get_string('viewsimilarfiles', REPORT_COMPONENTNAME) . '</a>
                <button class="btn btn-primary edit-btn" aria-hidden="true" onclick="filemanager_downloadFile()"><i class="fa fa-download" aria-hidden="true"></i>' . get_string('download') . '</button>
                <a href="#deleteModal" data-toggle="modal" class="btn btn-danger edit-btn" onclick="filemanager_deleteFile()"><i class="fa fa-trash" aria-hidden="true"></i>' . get_string('delete') . '</a>
              </div>
            </div>
        </div>
    </div>
    <div id="deleteModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h3 id="deleteModal_filename"></h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              </div>
              <div class="modal-body">
                <p>' . get_string('confirmdeletefile', REPORT_COURSEQUOTAS_REPOSITORY_STRING) . '</p>
              </div>
              <div class="modal-footer">
                <button class="btn btn-success edit-btn" data-dismiss="modal" aria-hidden="true" onclick="filemanager_deleteFile_confirm()"><i class="fa fa-check" aria-hidden="true"></i>' . get_string('confirm') . '</button>
                <button class="btn btn-danger edit-btn" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i>' . get_string('cancel') . '</button>
              </div>
            </div>
        </div>
    </div>
        <script src="' . $CFG->wwwroot . '/report/coursequotas/filemanager.js"></script>';
} else {
    echo $OUTPUT->notification(get_string('nofilesfound', REPORT_COMPONENTNAME));
}
echo $OUTPUT->box_end();

echo $OUTPUT->footer();
