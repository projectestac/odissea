<?php
/**
 * Coursequotas report
 *
 * @package    report
 * @subpackage coursequotas
 * @copyright  2016 Pau Ferrer Ocaña pau@moodle.com
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once('../../config.php');
require_once($CFG->libdir . '/adminlib.php');
require_once($CFG->dirroot.'/report/coursequotas/locallib.php');

admin_externalpage_setup('filemanager', '', null, '', array('pagelayout' => 'report'));
$PAGE->requires->jquery();
$PAGE->requires->jquery_plugin('ui');
echo $OUTPUT->header();
echo $OUTPUT->heading(get_string('filemanager', 'report_coursequotas'), 3);

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
$filters = '<form>'.html_writer::label(get_string('filename', 'backup'), 'filename', false, array('class' => 'inline')).' ';
$filters .= '<input type="text" id="filename" name="filename" value="'.$filename.'"><br>';

$filters .= html_writer::label(get_string('owner', 'report_coursequotas'), 'userid', false, array('class' => 'inline')).' ';
$filters .= html_writer::select($filteroptions->users, "userid", $userid, get_string("allusers", 'report_coursequotas')).'<br>';

$filters .= html_writer::label(get_string('course'), 'context', false, array('class' => 'inline')).' ';
$filters .= html_writer::select($filteroptions->contexts, "context", $context, get_string("allcourses", "search")).' ';
$filters .= html_writer::checkbox("children", 1, $addchildren, get_string("addchildren", 'report_coursequotas')).'<br>';

$filters .= html_writer::label(get_string('filearea', 'report_coursequotas'), 'filearea', false, array('class' => 'inline')).' ';
$filters .= html_writer::select($filteroptions->fileareas, "filearea", $filearea, get_string("allfileareas", 'report_coursequotas')).' ';

$filters .= html_writer::label(get_string('component', 'report_coursequotas'), 'component', false, array('class' => 'inline')).' ';
$filters .= html_writer::select($filteroptions->components, "component", $component, get_string("allcomponents", 'report_coursequotas')).' ';
$filters .= html_writer::checkbox("backups", 1, $showonlybackups, get_string("showonlybackups", 'report_coursequotas')).'<br>';
if ( !function_exists('is_xtecadmin') || is_xtecadmin()) {
    $filters .= html_writer::checkbox("hidesamehash", 1, $hidesamehash, get_string("hidesamehash", 'report_coursequotas')).'<br>';
}

$sizeselect = array(
    get_string('more_than', 'report_coursequotas'),
    get_string('less_than', 'report_coursequotas')
);
$filters .= html_writer::label(get_string('size'), 'size', false, array('class' => 'inline')).' ';
$filters .= html_writer::select($sizeselect, "sizeselect", $sizeselected, false);
$filters .= ' <input type="number" id="size" name="size" value="'.$size.'"> MB<br>';
$filters .= '<button type="submit" class="btn btn-success edit-btn"><i class="smallicon fa fa-search"></i>'.get_string('search').'</button> <a href="'.$CFG->wwwroot.'/report/coursequotas/filemanager.php" class="btn btn-warning edit-btn"><i class="smallicon fa fa-undo"></i>'.get_string('reset').'</a></form>';

$caption = '<i class="smallicon fa fa-filter"></i>'.get_string('filter');
print_collapsible_region($filters, 'well well-small', 'filter', $caption, '', true) ;

echo $OUTPUT->box_start('', 'results');
if ($files->count) {

    echo $OUTPUT->box_start('well');
    $sizetotal = report_coursequotas_format_size_text($files->total);
    echo $OUTPUT->box(get_string('totalfilesize', 'report_coursequotas', $sizetotal));
    $filesize = report_coursequotas_format_size_text($files->filesize);
    echo $OUTPUT->box(get_string('realfilesize', 'report_coursequotas', $filesize));
    echo $OUTPUT->box_end();

    $contextcache = array();
    $ownercache = array();

    $pageparams = array(
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
        'perpage' => $perpage);
    $baseurl = new moodle_url('/report/coursequotas/filemanager.php', $pageparams);
    $pagingbar = $OUTPUT->paging_bar($files->count, $page, $perpage, $baseurl);

    $table = new html_table();
    $table->class = 'generaltable';
    $columns = array(
        'filename' => get_string('filename', 'backup'),
        'owner' => get_string('owner', 'report_coursequotas'),
        'context' => get_string('context', 'report_coursequotas'),
        'filearea' => get_string('filearea', 'report_coursequotas'),
        'component' => get_string('component', 'report_coursequotas'),
        'filesize' => get_string('size')
    );

    foreach ($columns as $column => $columnname) {
        if ($column  == 'owner' || $column  == 'context') {
            $table->head[] = $columnname;
        } else {
            if ($sort != $column) {
                $columnicon = "";
                if ($column == "filesize") {
                    $columndir = "DESC";
                } else {
                    $columndir = "ASC";
                }
            } else {
                $columndir = $dir == "ASC" ? "DESC" : "ASC";
                $columnicon = ($dir == "ASC") ? "sort_asc" : "sort_desc";
                $columnicon = "<img class='iconsort' src=\"" . $OUTPUT->image_url('t/' . $columnicon) . "\" alt=\"\" />";
            }
            $baseurl->param('sort', $column);
            $baseurl->param('dir', $columndir);
            $baseurl->param('page', 0);
            $url = $baseurl->out();
            $table->head[] = "<a href=\"$url\">".$columnname."</a>$columnicon";
        }
    }

    $table->align = array('left', 'center', 'center', 'center', 'center', 'center');
    foreach ($files->files as $file) {

        if ($file->userid && !isset($ownernamecache[$file->userid])) {
            $ownercache[$file->userid] = '<a href="'.$CFG->wwwroot.'/user/profile.php?id=' . $file->userid . '" target="_blank">' . $filteroptions->users[$file->userid] . '</a>';
        }
        if ($file->contextid && !isset($contextcache[$file->contextid])) {
            $filecontext = context::instance_by_id($file->contextid);
            if (!isset($filteroptions->contexts[$file->contextid])) {
                $filteroptions->contexts[$file->contextid] = $filecontext->get_context_name();
            }
            $contextcache[$file->contextid] = '<a href="'. $filecontext->get_url() . '" target="_blank">' . $filteroptions->contexts[$file->contextid] . '</a>';
        }
        $filesize = report_coursequotas_format_size_text($file->filesize);

        $deleteparams = array();
        $deleteparams[] = $file->id;
        $deleteparams[] = rawurlencode($file->filename);

        $params = array();
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

        $row = array();
        $row[] = '<a href="#fileModal" data-toggle="modal" title="'.get_string('showmore', 'form').'" onclick="filemanager_openFileInfo(\''.implode("','", $params).'\')">'.$file->filename.' <i class="fa fa-search" aria-hidden="true"></i></a> <a href="#deleteModal" data-toggle="modal" onclick="filemanager_deleteFileDirect(\''.implode("','", $deleteparams).'\')" title="'.get_string('delete').'"><i class="fa fa-trash" aria-hidden="true"></i></a>';
        $row[] = $file->userid ? $ownercache[$file->userid] : $file->userid;
        $row[] = $file->contextid ? $contextcache[$file->contextid] : $file->contextid;
        $row[] = $file->filearea;
        $row[] = $file->component;
        $row[] = $filesize;
        $table->data[] = $row;
    }

    echo $OUTPUT->box(get_string('showingfiles', 'report_coursequotas', ['files' => count($files->files), 'total' => $files->count]), 'text-right');
    echo $OUTPUT->box($pagingbar, 'text-right');
    echo html_writer::table($table);
    echo $OUTPUT->box($pagingbar, 'text-right');

    echo '  <div id="fileModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="fileModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="fileModal_filename"></h3>
              </div>
              <div class="modal-body">
                <span id="fileModal_fileid" class="hidden"></span>
                <span id="fileModal_urlroot" class="hidden">'.$CFG->wwwroot.'</span>
                <p><strong>'.get_string('owner', 'report_coursequotas').'</strong>: <span id="fileModal_owner"></span></p>
                <p><strong>'.get_string('context', 'report_coursequotas').'</strong>: <span id="fileModal_context"></span></p>
                <p><strong>'.get_string('filearea', 'report_coursequotas').'</strong>: <span id="fileModal_filearea"></span></p>
                <p><strong>'.get_string('component', 'report_coursequotas').'</strong>: <span id="fileModal_component"></span></p>
                <p><strong>'.get_string('size').'</strong>: <span id="fileModal_filesize"></span></p>
                <p><strong>'.get_String('path', 'repository').'</strong>: <span id="fileModal_filepath"></span></p>
                <p><strong>'.get_String('type', 'repository').'</strong>: <span id="fileModal_mimetype"></span></p>
                <p><strong>'.get_string('lastmodified').'</strong>: <span id="fileModal_timemodified"></span></p>
                <p><strong>Content hash</strong>: <span id="fileModal_contenthash"></span></p>
                <p><strong>Path hash</strong>: <span id="fileModal_pathnamehash"></span></p>
              </div>
              <div class="modal-footer">
                <a id="fileModal_similar" class="btn btn-info edit-btn" aria-hidden="true" href="#" target="_blank" original-href="'.$CFG->wwwroot.'/report/coursequotas/filemanager.php?hash="><i class="fa fa-eye" aria-hidden="true"></i>'.get_string('viewsimilarfiles', 'report_coursequotas').'</a>
                <button class="btn btn-primary edit-btn" aria-hidden="true" onclick="filemanager_downloadFile()"><i class="fa fa-download" aria-hidden="true"></i>'.get_string('download').'</button>
                <a href="#deleteModal" data-toggle="modal" class="btn btn-danger edit-btn" onclick="filemanager_deleteFile()"><i class="fa fa-trash" aria-hidden="true"></i>'.get_string('delete').'</a>
              </div>
            </div>
            <div id="deleteModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="deleteModal_filename"></h3>
              </div>
              <div class="modal-body">
                <p>'.get_string('confirmdeletefile', 'repository').'</p>
              </div>
              <div class="modal-footer">
                <button class="btn btn-success edit-btn" data-dismiss="modal" aria-hidden="true" onclick="filemanager_deleteFile_confirm()"><i class="fa fa-check" aria-hidden="true"></i>'.get_string('confirm').'</button>
                <button class="btn btn-danger edit-btn" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i>'.get_string('cancel').'</button>
              </div>
            </div>
        <script src="'.$CFG->wwwroot.'/report/coursequotas/filemanager.js"></script>';
} else {
    echo $OUTPUT->notification(get_string('nofilesfound', 'report_coursequotas'));
}
echo $OUTPUT->box_end();

echo $OUTPUT->footer();
