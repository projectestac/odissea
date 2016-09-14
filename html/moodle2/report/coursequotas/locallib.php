<?php

/**
 * Coursequotas report library
 *
 * @package    report
 * @subpackage coursequotas
 * @copyright  2012 Agora Development Team (http://agora.xtec.cat)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

function report_coursequotas_diskinfo($chartinfo) {
    global $CFG;

    $hasinfo = function_exists('is_agora') && is_agora() && function_exists('getDiskInfo');
    $info = false;

    if ($hasinfo) {
        // Get diskSpace and diskConsume from Agoraportal (might be out-of-date).
        $tempinfo = getDiskInfo($CFG->dnscentre, 'moodle2');

        $info = new StdClass();
        $info->space = round($tempinfo['diskSpace']); // In MB.
        $info->consumed = $tempinfo['diskConsume'] / 1024; // Originally in kB.

        // If disk info is not avalaible...
        if ($info->consumed == 0) {
            $info->consumed += report_coursequotas_get_charinfo_total($chartinfo);
        }
        $info->consumed = round($info->consumed);
    }
    return $info;
}

/**
 * Formats a size figure and adds unit information
 *
 * @author Pau Ferrer (pau@moodle.com)
 * @param int $size file size to be formatted
 *
 * @return object number and units
 */
function report_coursequotas_format_size($size) {
    $formatted = new StdClass();
    $formatted->bytes = $size;

    $suffixes = array('Bytes', 'kB', 'MB', 'GB', 'TB');

    $suffix = 0;
    while ($size > 1024 && $suffix < count($suffixes)) {
        $size = $size / 1024;
        $suffix++;
    }

    $formatted->number = number_format($size, 2, ',', '.');
    $formatted->unit = $suffixes[$suffix];

    return $formatted;
}

/**
 * Format a size figure and adds unit information in text
 * @param int $size file size to be formatted
 *
 * @return string number and units
 */
function report_coursequotas_format_size_text($size) {
    $size = report_coursequotas_format_size($size);
    return $size->number . ' ' . $size->unit;
}

function report_course_quotas_get_chart_info($treedata) {
    $chartinfo = array();
    // Get quota used in repositories.
    $chartinfo['repository'] = report_coursequotas_get_repository_usage();

    // Calculate quota used by course files (does not include backups).
    $coursessize = 0;
    foreach ($treedata as $category) {
        $coursessize += $category->categorysize;
    }
    $chartinfo['course'] = report_coursequotas_format_size($coursessize);

    // Get quota used in backups.
    $chartinfo['backup'] = report_coursequotas_get_backup_usage();

    // Get quota used by users.
    $chartinfo['user'] = report_coursequotas_get_user_usage();

    // Get quota used in files in temp and trash directories.
    $chartinfo['temp'] = report_coursequotas_get_temp_usage();
    $chartinfo['trash'] = report_coursequotas_get_trash_usage();

    return $chartinfo;
}

/**
 * Gets this information for each category: subcategories, courses and disk usage
 *  (of that category). Iterates recursively.
 *
 * @author Toni Ginard (aginard@xtec.cat)
 * @global array $DB
 *
 * @return array Tree with data (see description)
 */
function report_coursequotas_get_category_data() {
    global $DB;

    // Step 1: build category tree.
    $catrecords = $DB->get_records('course_categories', array(), 'depth, id', 'id, name, parent, depth, visible');
    $cattree = report_coursequotas_build_category_tree($catrecords);

    // Add fake front page category.
    $cat = new StdClass();
    $cat->id = 0;
    $cat->name = get_string('front_page', 'report_coursequotas');
    $cat->subcategories = array();
    $cat->categorysize = 0;
    $cat->visible = 1;
    $cat->courses = array();

    // Add front page course.
    $course = $DB->get_record('course', array('category' => 0), 'id, fullname, visible');
    $course->coursesize = 0;
    $cat->courses[$course->id] = $course;
    $cattree[0] = $cat;

    // Search contextid into m2files, get disk usage and add to tree.
    report_coursequotas_add_size_to_tree($cattree);

    return $cattree;
}

/**
 * Creates a tree data structure wich contains, only, category information. Iterates
 *  recursively.
 *
 * @author Toni Ginard (aginard@xtec.cat)
 * @param array $catrecords Contains all the categories info from the data base
 * @param int $parent ID of the category where to start
 * @param int $depth Level of the category being processed. Avoids processing subcategories.
 *
 * @return array Tree with data (see description)
 */
function report_coursequotas_build_category_tree(&$catrecords, $parent = 0, $depth = 1) {
    $cattree = array();

    // Find categories with the same parent and add them.
    foreach ($catrecords as $catid => $record) {
        if ($record->parent == $parent) {
            $cat = new StdClass();
            $cat->id = $catid;
            $cat->name = $record->name;
            $cat->categorysize = 0;
            $cat->visible = $record->visible;
            // Recursive call to find subcategories.
            $cat->subcategories = report_coursequotas_build_category_tree($catrecords, $record->id, $depth + 1);
            // Call to find its courses.
            $cat->courses = report_coursequotas_get_tree_courses($record->id);
            $cattree[$record->id] = $cat;
            // Effiency improvement: Once the category is added to the tree, it won't be added again.
            unset($catrecords[$catid]);
        }
    }

    return $cattree;
}

/**
 * Adds courses information to category tree
 *
 * @author Pau Ferrer Ocaña (pau@moodle.com)
 * @param array $catid
 *
 * @return array courses on category.
 */
function report_coursequotas_get_tree_courses($catid) {
    global $DB;

    $courses = array();

    $records = $DB->get_records('course', array('category' => $catid), 'id', 'id, category, fullname, visible');
    foreach ($records as $course) {
        $course->coursesize = 0;
        $courses[$course->id] = $course;
    }

    return $courses;
}

/**
 * Adds usage information to category tree, which is obtained from files table. This function identifies all files belonging to a
 * course, sums the file sizes and all course sizes to categories.
 *
 * @author Pau Ferrer Ocaña (pau@moodle.com)
 * @param array $cattree    Category tree.
 * @param int   $depth      Level of the category being processed. Avoids processing subcategories.
 */
function report_coursequotas_add_size_to_tree(&$cattree, $depth = 2) {
    global $DB;

    // One iteration per category of a given level.
    foreach ($cattree as $catid => $category) {
        $categorysize = 0;

        // Fake category for front page course.
        if ($catid == 0) {
            $courseid = reset($category->courses)->id;
            $coursecontext = context_course::instance($courseid);

            $category->courses[$courseid]->coursesize = $coursesize = report_coursequotas_get_contextsize($coursecontext);
            $categorysize += $coursesize;
        } else {
            // All other categories.
            $catcontext = context_coursecat::instance($catid);

            // Get context elements which are courses in this category.
            $sql = "SELECT id, path, instanceid
                  FROM {context}
                 WHERE depth = ? AND contextlevel = ? AND path LIKE ?";
            $params = array($catcontext->depth + 1, CONTEXT_COURSE, $catcontext->path.'/%');
            $coursecontexts = $DB->get_records_sql($sql, $params);

            // There can be several courses in the category.
            foreach ($coursecontexts as $coursecontext) {
                $courseid = $coursecontext->instanceid;
                $category->courses[$courseid]->coursesize = $coursesize = report_coursequotas_get_contextsize($coursecontext);
                $categorysize += $coursesize;
            }

            // Recursive call for subcategories.
            if (!empty($category->subcategories)) {
                report_coursequotas_add_size_to_tree($category->subcategories, $depth + 1);
                foreach ($category->subcategories as $subcat) {
                    $categorysize += $subcat->categorysize;
                }
            }
        }

        // Put total size into tree.
        $category->categorysize = $categorysize;
    }

    return $cattree;
}

/**
 * Sum all files from a given context and its children.
 * @param  Object $context Containing path and instanceid.
 * @return int             Sum of all total bytes of context.
 */
function report_coursequotas_get_contextsize($context) {
    $path = $context->path;
    $contextid = $context->id;

    // Calculate size of all the files inside the course avoiding duplicates.
    return get_coursequotas_filesize("(f.contextid = c.id AND c.path like '$path/%') OR f.contextid = $contextid", "{context} c");
}

/**
 * Transforms category tree in a string HTML-formatted to be sent to the browser.
 * Builds a list with category information
 *
 * @author Toni Ginard (aginard@xtec.cat)
 * @param array $cattree Category tree
 *
 * @return string HTML code to be sent to the browser
 */
function report_coursequotas_print_category_data($cattree) {
    global $CFG;

    $content = '<ul>';
    $managestr = get_string('manage', 'report_coursequotas');
    $canmanage = can_manage_files();

    foreach ($cattree as $catid => $category) {

        // Format size number adding unit information.
        $size = report_coursequotas_format_size($category->categorysize);

        // Build list content.
        $content .= '<li>';
        if ($catid == 0) {
            $content .= $category->name;
        } else {
            $dimmed = $category->visible ? "" : ' class="dimmed"';
            $content .= '<a href="'.$CFG->wwwroot.'/course/index.php?categoryid='.$catid.'" '.$dimmed.' target="_blank">'.$category->name.'</a>';
        }
        $content .= ' - ' . $size->number . ' ' . $size->unit;

        if ($canmanage && $size->bytes > 0) {
            $content .= ' - <a href="'.$CFG->wwwroot.'/report/coursequotas/filemanager.php?category='.$catid.'&children=true">'.$managestr.'</a>';
        }

        // Recursive call for subcategories.
        if (!empty($category->subcategories)) {
            $content .= report_coursequotas_print_category_data($category->subcategories);
        }
        $content .= '</li>';
    }
    $content .= '</ul>';

    return $content;
}

function can_manage_files() {
    return has_capability('report/coursequotas:manage', context_system::instance());
}

/**
 * Transforms category tree in a string HTML-formatted to be sent to the browser.
 * Builds a table with courses information
 *
 * @author Toni Ginard (aginard@xtec.cat)
 * @param array $cattree Category tree
 *
 * @return string HTML code to be sent to the browser
 */
function report_coursequotas_print_courses_data($cattree) {
    global $CFG;

    // Get a one-dimension array with the course to build the body of the table.
    $courses = report_coursequotas_get_flat_courses_array($cattree);

    // Sort the array by course size.
    usort($courses, "cmp_sort_course_array");

    $canmanage = can_manage_files();

    $table = new html_table();
    $table->class = 'generaltable';
    $table->head = array(
        get_string('course_name', 'report_coursequotas'),
        get_string('category_name', 'report_coursequotas'),
        get_string('disk_used', 'report_coursequotas')
    );
    $table->align = array('left', 'center', 'center');
    if ($canmanage) {
        $managestr = get_string('manage', 'report_coursequotas');
        $table->head[] = get_string('actions');
        $table->align[] = 'center';
    }
    foreach ($courses as $course) {
        $dimmed = $course->visible ? "" : ' class="dimmed"';
        $row = array(
            '<a href="'.$CFG->wwwroot.'/course/view.php?id='.$course->id.'" '.$dimmed.' target="_blank">'.$course->fullname.'</a>',
            $course->catlink,
            $course->sizeformat
        );

        if ($canmanage) {
            if ($course->bytes > 0) {
                $row[] = '<a href="'.$CFG->wwwroot.'/report/coursequotas/filemanager.php?course='.$course->id.'&children=true">'.$managestr.'</a>';
            } else {
                $row[] = "";
            }
        }

        $table->data[] = $row;
    }
    return html_writer::table($table);
}

function cmp_sort_course_array($a, $b) {
    return $a->bytes < $b->bytes;
}

/**
 * Transforms the n-level tree in a two-dimension array for two reasons: to be
 *  able to build an HTML table and to be able to order the courses by size
 *
 * @author Toni Ginard (aginard@xtec.cat)
 * @param array $cattree Category tree
 *
 * @return string HTML code to be sent to the browser
 */
function report_coursequotas_get_flat_courses_array($cattree) {
    global $CFG;

    $courselist = array();

    foreach ($cattree as $catid => $category) {
        if (!empty($category->courses)) {
            if ($catid == 0) {
                $categorylink = $category->name;
            } else {
                $dimmed = $category->visible ? "" : ' class="dimmed"';
                $categorylink = '<a href="'.$CFG->wwwroot.'/course/index.php?categoryid='.$catid.'" '.$dimmed.' target="_blank">'.$category->name.'</a>';
            }

            foreach ($category->courses as $course) {
                $courseflat = new StdClass();
                $courseflat->id = $course->id;
                $courseflat->fullname = $course->fullname;
                $courseflat->visible = $course->visible;
                $courseflat->catlink = $categorylink;

                $size = report_coursequotas_format_size($course->coursesize);
                $courseflat->bytes = $size->bytes;
                $courseflat->sizeformat = $size->number.' '.$size->unit;
                $courselist[] = $courseflat;
            }
        }

        // Recursive call for subcategories.
        if (!empty($category->subcategories)) {
            // Join the courses of this level and of the subcategories.
            $courselist = array_merge($courselist, report_coursequotas_get_flat_courses_array($category->subcategories));
        }
    }

    return $courselist;
}

/**
 * Gets the amount of bytes used in course and users backups
 *
 * @author Toni Ginard (aginard@xtec.cat)
 * @global array $DB
 *
 * @return int Number of bytes used
 */
function report_coursequotas_get_backup_usage() {
    // Component equal to backup means "course level backup".
    // filearea equal to backup means "user level backup" which is not associated to any course.
    $size = get_coursequotas_filesize(get_backup_where_sql());
    return report_coursequotas_format_size($size);
}

function get_backup_where_sql() {
    return "((component = 'backup' AND (filearea = 'activity' OR filearea = 'course' OR filearea = 'automated')) OR (component = 'user' AND filearea = 'backup'))";
}

function report_coursequotas_get_user_usage() {
    // User files excluding backups.
    $size = get_coursequotas_filesize("component='user' AND filearea != 'backup'");
    return report_coursequotas_format_size($size);
}

function report_coursequotas_get_directory_size($directory) {
    $size = 0;

    if (file_exists($directory)) {
        $size = exec('du -sk ' . $directory);
        $size = explode('/', $size);
        $size = $size[0] * 1024; // Size in kB to bytes.
    }

    return $size;
}

function report_coursequotas_get_temp_usage() {
    global $CFG;

    $tempdir = isset($CFG->tempdir) ? $CFG->tempdir : $CFG->dataroot.'/temp';

    $size = report_coursequotas_get_directory_size($tempdir);
    return report_coursequotas_format_size($size);
}

function report_coursequotas_get_trash_usage() {
    global $CFG;

    $trashdir = isset($CFG->trashdir) ? $CFG->trashdir : $CFG->dataroot.'/trashdir';

    $size = report_coursequotas_get_directory_size($trashdir);
    return report_coursequotas_format_size($size);
}

function report_coursequotas_get_repository_usage() {
    global $CFG;
    $size = report_coursequotas_get_directory_size($CFG->dataroot . '/repository/');
    return report_coursequotas_format_size($size);
}

function report_coursequotas_get_charinfo_total($chartinfo) {
    $total = 0;
    foreach ($chartinfo as $value) {
        $total += $value->bytes;
    }
    $total = $total / (1024 * 1024);

    return $total;
}

function report_coursequotas_print_chart($chartinfo, $consumed = false, $total = false) {
    global $CFG;

    $text = "";

    $consumedcalc = report_coursequotas_get_charinfo_total($chartinfo);

    if ($consumed && $total) {
        if (is_xtecadmin()) {
            $diffcalc = (int) ($consumed - $consumedcalc);
            if ($diffcalc != 0) {
                $text .= "<div class=\"well well-small\">Hi ha $diffcalc MB que s'escapen...</div>";
            }
        }

        if ($consumedcalc > $consumed) {
            $consumed = $consumedcalc;
        }

        // Protect the graph against data errors.
        $free = $total - $consumed > 0 ? $total - $consumed : 0;
    } else {
        $free = 0;
        $total = $consumed = $consumedcalc;
    }

    $colors = array(
        'course' => '#FDB45C',
        'backup' => '#46BFBD',
        'user' => '#4C86B9',
        'temp' => '#984298',
        'trash' => '#A4822D',
        'repository' => '#BB556F'
    );
    $highlights = array(
        'course' => '#FFC870',
        'backup' => '#5AD3D1',
        'user' => '#5B90BF',
        'temp' => '#D19ED1',
        'trash' => '#C79E37',
        'repository' => '#DF6A88'
    );

    $onepercent = (int) $total / 100;
    $consumedpercent = 0;
    $chartvalues = array();
    foreach ($chartinfo as $type => $value) {
        $value = $value->bytes / (1024 * 1024);
        if ($value > $onepercent) {
            $chartvalue = new StdClass();
            $chartvalue->label = get_string('disk_used_'.$type, 'report_coursequotas');
            $chartvalue->value = $value;
            $chartvalue->percent = round($value / $total * 100, 1);
            $chartvalue->color = $colors[$type];
            $chartvalue->highlight = $highlights[$type];
            $chartvalues[] = $chartvalue;
            $consumed -= $value;
            $consumedpercent += $chartvalue->percent;
        }
    }

    if ($consumed > 0) {
        $chartvalue = new StdClass();
        $chartvalue->label = get_string('disk_used_other', 'report_coursequotas');
        $chartvalue->value = $consumed;
        $chartvalue->percent = round($consumed / $total * 100, 1);
        $chartvalue->color = '#F7464A';
        $chartvalue->highlight = '#FF5A5E';
        $chartvalues[] = $chartvalue;
        $consumedpercent += $chartvalue->percent;
    }

    if ($consumedpercent < 100) {
        $chartvalue = new StdClass();
        $chartvalue->label = get_string('disk_free', 'report_coursequotas');
        $chartvalue->value = $free;
        $chartvalue->percent = round(100 - $consumedpercent, 1);
        $chartvalue->color = '#2C9C69';
        $chartvalue->highlight = '#4CCA91';
        $chartvalues[] = $chartvalue;
    }

    $text .= '<script src="'.$CFG->wwwroot.'/report/coursequotas/chartjs/Chart.min.js"></script>';
    $text .= '<div id="canvas-holder" style="text-align:center;"><canvas id="chart-area" width="300" height="300"/></div>';
    $text .= '<script>
        window.onload = function(){
            var ctx = document.getElementById("chart-area").getContext("2d");
            var data = [';

    foreach ($chartvalues as $value) {
        $text .= '{ value: '.$value->value.', label: "'.$value->label.' ('.$value->percent.'%)", color: "'.$value->color.'", highlight: "'.$value->highlight.'"},';
    }

    $text .= '];
            var options = {
                animateRotate : true,
                animateScale : true,
                tooltipTemplate: "<%if (label){%><%=label%><%} else {%><%= value %><%}%>"
            };
            window.pieChart = new Chart(ctx).Pie(data, options);
        };
    </script>';
    return $text;
}

/**
 * Get the sum of all filesize on a SQL from filesizes avoiding duplicates.
 * @param  string $where  where SQL on file table.
 * @param  string $tables Additional tables to check.
 * @return int            Sum of Bytes.
 */
function get_coursequotas_filesize($where = "", $tables = "") {
    global $DB;

    if (!empty($tables)) {
        $tables = ', '.$tables;
    }

    $where = 'WHERE '.$where.' AND filename != \'.\'';
    $sql = "SELECT sum(total) as total FROM (
       SELECT DISTINCT f.contenthash, f.filesize as total FROM {files} f $tables $where) t";
    $size = $DB->get_field_sql($sql);
    return $size ? $size : 0;
}

/**
 * Returns a list of files filtered.
 * @param  string  $filename        Filename to filter (LIKE).
 * @param  int     $userid          User owner to filter.
 * @param  int     $contextid       Context to filter
 * @param  boolean $addchildren     Add children of the context.
 * @param  string  $filearea        Filearea to filter
 * @param  string  $component       Component to filter.
 * @param  integer $size            Size (less or more to filter).
 * @param  integer $sizeselected    0 if more than, 1 if less than (size).
 * @param  boolean $showonlybackups Show only backup files.
 * @param  boolean $hidesamehash    Hide same hash files (only show one file per hash). It will cause warnings.
 * @param  string  $sort            Sort by field.
 * @param  string  $direction       Direction to sort by.
 * @param  integer $from            From which record return
 * @param  integer $limitnum        Limit number of records.
 * @return Object                   Object containing: files, count of files, filesize (disk usage), total (total sum of files).
 */
function get_filtered_files($filename = "" , $userid = null, $contextid = null, $addchildren = false, $filearea = null,
    $component = null, $size = 0, $sizeselected = 0, $showonlybackups = false, $hidesamehash = false, $sort = 'filename',
    $direction = 'ASC', $from = 0, $limitnum = 100) {
    global $DB;

    $tables = '{files} f';

    $filter = array("f.filename != '.'");
    if (!empty($filename)) {
        $filter[] = "f.filename LIKE '%$filename%'";
    }

    if ($userid) {
        $filter[] = 'f.userid = '.$userid;
    }

    if ($contextid) {
        if ($addchildren) {
            $ctxt = context::instance_by_id($contextid);
            $filter[] = "((f.contextid = c.id AND c.path LIKE '$ctxt->path/%') OR f.contextid = $contextid )";
            $tables .= ', {context} c';
        } else {
            $filter[] = 'f.contextid = '.$contextid;
        }
    }

    if ($filearea) {
        $filter[] = "f.filearea = '$filearea'";
    }

    if ($component) {
        $filter[] = "f.component = '$component'";
    }

    if ($showonlybackups) {
        $filter[] = get_backup_where_sql();
    }

    if ($size > 0) {
        $size *= 1024 * 1024;
        if ($sizeselected == 0) {
            $filter[] = "f.filesize >= $size";
        } else if ($sizeselected == 1) {
            $filter[] = "f.filesize <= $size";
        }
    }

    $avaiablesorts = array('filename', 'filearea', 'component', 'filesize');
    if (!in_array($sort, $avaiablesorts)) {
        $sort = 'filename';
    }
    $direction = strtolower($direction) == 'desc' ? 'DESC' : 'ASC';

    $where = implode(' AND ', $filter);
    $record = new StdClass();

    if ($hidesamehash) {
        $distinct = "DISTINCT f.contenthash, f.id";
    } else {
        $distinct = "DISTINCT f.id, f.contenthash";
    }
    $sql = "SELECT $distinct, f.filename, f.userid, f.contextid, f.filearea, f.component, f.filesize, f.pathnamehash, f.filepath, f.mimetype, f.timemodified FROM $tables WHERE $where ORDER BY f.$sort $direction";

    $record->files = @$DB->get_records_sql($sql, null, $from, $limitnum);

    if ($hidesamehash) {
        $sql = "SELECT count(DISTINCT f.contenthash) FROM $tables WHERE $where";
    } else {
        $sql = "SELECT count(DISTINCT f.id) FROM $tables WHERE $where";
    }
    $record->count = $DB->count_records_sql($sql);

    $sql = "SELECT sum(total) as total FROM (SELECT DISTINCT (f.contenthash), f.filesize as total FROM $tables WHERE $where) t";
    $size = $DB->get_field_sql($sql);
    $record->filesize  = $size ? $size : 0;

    if ($hidesamehash) {
        $record->total  = $record->filesize;
    } else {
        $sql = "SELECT sum(total) AS total FROM (SELECT DISTINCT (f.id), f.filesize as total FROM $tables WHERE $where) t";
        $size = $DB->get_field_sql($sql);
        $record->total  = $size ? $size : 0;
    }

    return $record;
}

/**
 * Get files by contenthash
 * @param  string  $hash      Hash of the content to filter.
 * @param  string  $sort      Sort by field.
 * @param  string  $direction Direction to sort by.
 * @param  integer $from      From which record return
 * @param  integer $limitnum  Limit number of records.
 * @return Object             Object containing: files, count of files, filesize (disk usage) = total (total sum of files).
 */
function get_contenthash_files($hash, $sort = 'filename', $direction = 'ASC', $from = 0, $limitnum = 100) {
    global $DB;

    $where = "f.contenthash = '$hash'";

    $avaiablesorts = array('filename', 'filearea', 'component', 'filesize');
    if (!in_array($sort, $avaiablesorts)) {
        $sort = 'filename';
    }
    $direction = strtolower($direction) == 'desc' ? 'DESC' : 'ASC';

    $record = new StdClass();
    $sql = "SELECT DISTINCT (f.id), f.filename, f.userid, f.contextid, f.filearea, f.component, f.filesize, f.contenthash, f.pathnamehash, f.filepath, f.mimetype, f.timemodified FROM {files} f WHERE $where ORDER BY f.$sort $direction";
    $record->files = $DB->get_records_sql($sql, null, $from, $limitnum);
    $sql = "SELECT count(DISTINCT f.id) FROM {files} f WHERE $where";
    $record->count = $DB->count_records_sql($sql);

    $sql = "SELECT sum(total) AS total FROM (SELECT DISTINCT (f.id), f.filesize as total FROM {files} f WHERE $where) t";
    $size = $DB->get_field_sql($sql);
    $record->total  = $size ? $size : 0;

    $sql = "SELECT sum(total) as total FROM (SELECT DISTINCT (f.contenthash), f.filesize as total FROM {files} f WHERE $where) t";
    $size = $DB->get_field_sql($sql);
    $record->filesize  = $size ? $size : 0;

    return $record;
}

/**
 * Get all options to filter for.
 * @param  int $searchedcontext Contextid where we're searching.
 * @return object               Filters.
 */
function get_all_filter_options($searchedcontext) {
    global $DB;

    $filters = new StdClass();
    $users = $DB->get_records_sql('SELECT DISTINCT userid, firstname, lastname FROM {files} f, {user} u  WHERE f.userid = u.id ORDER BY lastname');
    $filters->users = [];
    foreach ($users as $userid => $user) {
        $filters->users[$userid] = $user->firstname.' '.$user->lastname;
    }
    $contexts = $DB->get_records_sql('SELECT DISTINCT contextid FROM {files} ORDER BY contextid');
    $filters->contexts = [];
    foreach ($contexts as $contextid => $context) {
        $filecontext = context::instance_by_id($contextid);
        if ($filecontext->contextlevel == CONTEXT_COURSE) {
            $filters->contexts[$contextid] = $filecontext->get_context_name();
        }
    }

    if ($searchedcontext && !isset($filters->contexts[$searchedcontext])) {
        $filecontext = context::instance_by_id($searchedcontext);
        $filters->contexts[$searchedcontext] = $filecontext->get_context_name();
    }

    $filters->fileareas = $DB->get_records_sql_menu('SELECT DISTINCT filearea AS f, filearea FROM {files} ORDER BY filearea');
    $filters->components = $DB->get_records_sql_menu('SELECT DISTINCT component AS c, component FROM {files} ORDER BY component');
    return $filters;
}
