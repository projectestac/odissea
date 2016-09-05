<?php
/**
 * Coursequotas report library
 *
 * @package    report
 * @subpackage coursequotas
 * @copyright  2012 Agora Development Team (http://agora.xtec.cat)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Gets this information for each category: subcategories, courses and disk usage
 *  (of that category). Iterates recursively.
 *
 * @author Toni Ginard (aginard@xtec.cat)
 * @global array $DB
 *
 * @return array Tree with data (see description)
 */
function report_coursequotas_getCategoryData() {

    global $DB;

    // Step 1: get system context ID, which is unique, but its value may vary
    $systemcontextid = context_system::instance()->id;

    // Step 2: build category tree
    $dbRecords = $DB->get_records('course_categories', array(), 'depth, id', 'id, name, parent, depth');
    $categoryTree = report_coursequotas_buildCatTree($dbRecords, 0, 1);

    // Step 3: add courses to each category
    $categoryTree = report_coursequotas_addCoursesToTree($categoryTree, true);

    // Step 4: Get all context elements belonging to /systemid/categoryid/.../categoryid/courseid
    // Step 5: Search contextid into m2files, get disk usage and add to tree
    $categoryTree = report_coursequotas_addContextElemsToTree($categoryTree, $systemcontextid);

    return $categoryTree;
}


/**
 * Creates a tree data structure wich contains, only, category information. Iterates
 *  recursively.
 *
 * @author Toni Ginard (aginard@xtec.cat)
 * @param array $dbRecords Contains all the categories info from the data base
 * @param int $catID ID of the category where to start
 * @param int $depth Level of the category being processed. Avoids processing subcategories.
 *
 * @return array Tree with data (see description)
 */
function report_coursequotas_buildCatTree($dbRecords, $catID, $depth) {
    $catTree = array();

    // First pass to get categories whose parent is this category (aka subcategories)
    foreach ($dbRecords as $key => $record) {
        if ($record->parent == $catID) {
            $catTree[$record->id] = array('id' => $record->id, 'name' => $record->name, 'subcategories' => array(), 'categorysize' => 0);
            // Effiency improvement: Once the category is added to the tree, it won't be added again
            unset($dbRecords[$key]);
        }
    }

    // Second pass for recursive call for all the categories in this category. The process
    //  can't be done in a single pass because we only have the full list of categories
    //  of this depth once we have completed the first pass.
    foreach ($catTree as $cat) {
        foreach ($dbRecords as $record) {
            // Condition 1: next level of depth
            // Condicion 2: the category must be under the current category
            if (($record->parent == $cat['id'])) {
                $catTree[$cat['id']]['subcategories'] = report_coursequotas_buildCatTree($dbRecords, $cat['id'], $depth + 1);
            }
        }
    }

    return $catTree;
}


/**
 * Adds courses information to category tree
 *
 * @author Toni Ginard (aginard@xtec.cat)
 * @param array $dbRecords Contains all the courses info from the data base
 * @param array $categoryTree
 * @param bool $addFrontPageCourse Flag to know if information of front page courses must be added or not
 *
 * @return array Tree with data (see description)
 */
function report_coursequotas_addCoursesToTree($categoryTree, $addFrontPageCourse = false) {

    global $DB;

    if ($addFrontPageCourse) {
        // Add front page course
        $dbRecord = $DB->get_record('course', array('category'=>0), 'id, fullname');
        $categoryTree['0'] = array('id' => 0, 'name' => get_string('front_page', 'report_coursequotas'), 'subcategories' => array());
        $categoryTree['0']['courses'][$dbRecord->id] = array('id' => $dbRecord->id, 'Fullname' => $dbRecord->fullname, 'coursesize' => 0);
    }

    // Add ordinary courses to category
    foreach ($categoryTree as $key => $cat) {
        $dbRecords = $DB->get_records('course', array('category'=>$key), 'id', 'id, category, fullname');
        foreach ($dbRecords as $record) {
            $categoryTree[$key]['courses'][$record->id] = array('id' => $record->id, 'Fullname' => $record->fullname, 'coursesize' => 0);
        }

        // Recursive call for subcategories
        if (!empty($cat['subcategories'])) {
            $categoryTree[$key]['subcategories'] = report_coursequotas_addCoursesToTree($categoryTree[$key]['subcategories'], false);
        }
    }

    return $categoryTree;
}


/**
 * Adds usage information to category tree, which is obtained from files table. This
 *  function identifies all files belonging to a course, sums the file sizes and,
 *  also, sums course sizes to categories.
 *
 * @author Toni Ginard (aginard@xtec.cat)
 * @global array $DB
 * @param array $categoryTree
 * @param int $systemContextId
 * @param int $depth Level of the category being processed. Avoids processing subcategories.
 *
 * @return array Tree with data (see description)
 */
function report_coursequotas_addContextElemsToTree($categoryTree, $systemContextId, $depth = 2) {

    global $DB;

    // One iteration per category of a given level
    foreach ($categoryTree as $key => $cat) {

        $totalsize = 0;

        // $key equal to 0 is a fake category for front page course.
        if ($key == 0) {
            // Get the site course. Ensure it's front page course by forcing depth = 2.
            $record = $DB->get_record_select('context', "contextlevel = 50 and path like '/$systemContextId/%' and depth = 2", null, 'id, path, instanceid');

            // Get context id of everything belonging to the site course.
            $path = $record->path . '/';
            $courseid = $record->instanceid;
            $contextid = $record->id;

            // Calculate size of all the files inside the front page avoiding duplicates.
            $totalsize = get_coursequotas_filesize("(f.contextid = c.id AND c.path like '$path/%') OR f.contextid = $contextid", "{context} c");
            $categoryTree['0']['categorysize'] = $totalsize;
            $categoryTree['0']['courses'][$courseid]['coursesize'] = $totalsize;
        } else {
            // All other categories.
            // Context id of the current category is unknown. This gets it.
            $catcontext = context_coursecat::instance($cat['id']);

            // Get context elements which are courses in this category.
            $sql = "SELECT ctx.*
                  FROM {context} ctx
                 WHERE ctx.path LIKE ? AND ctx.depth = ? AND ctx.contextlevel = ?";
            $params = array($catcontext->path.'/%', $catcontext->depth + 1, CONTEXT_COURSE);
            $records = $DB->get_records_sql($sql, $params);

            // There can be several courses in the category.
            foreach ($records as $record) {
                $path = $record->path;
                $courseid = $record->instanceid;
                $contextid = $record->id;
                // Calculate size of all the files inside the course avoiding duplicates.
                $coursesize = get_coursequotas_filesize("(f.contextid = c.id AND c.path like '$path/%') OR f.contextid = $contextid", "{context} c");
                $totalsize += $coursesize;
                $categoryTree[$key]['courses'][$courseid]['coursesize'] = $coursesize;
            }
        }

        // Recursive call for subcategories
        if (!empty($cat['subcategories'])) {
            $categoryTree[$key]['subcategories'] = report_coursequotas_addContextElemsToTree($categoryTree[$key]['subcategories'], $systemContextId, $depth + 1);
            foreach ($categoryTree[$key]['subcategories'] as $subCat) {
                $totalsize += $subCat['categorysize'];
            }
        }

        // Put total size into tree
        $categoryTree[$key]['categorysize'] = $totalsize;
    }

    return $categoryTree;
}


/**
 * Transforms category tree in a string HTML-formatted to be sent to the browser.
 *  Builds a list with category information
 *
 * @author Toni Ginard (aginard@xtec.cat)
 * @param array $data Category tree
 *
 * @return string HTML code to be sent to the browser
 */
function report_coursequotas_printCategoryData($data) {
    global $CFG;

    // Open HMTL list
    $content = '<ul class="CourseQuotasCategoryList" style="margin-top:0px; margin-bottom:0px;">';
    $managestr = get_string('manage', 'report_coursequotas');
    $canmanage = can_manage_files();

    foreach ($data as $category) {

        // Format size number adding unit information
        $size = report_coursequotas_formatSize($category['categorysize']);

        // Build list content
        $content .= '<li class="category_title" style="margin-top:3px; margin-bottom:3px;">';
        if ($category['id'] == 0) {
            $content .= $category['name'];
        } else {
            $content .= '<a href="../../course/index.php?categoryid=' . $category['id'] . '" target="_blank">' . $category['name'] . '</a>';
        }
        $content .= ' - ' . number_format($size['figure'], 2, ',', '.') . ' ' . $size['unit'];

        if ($canmanage && $size['figure'] > 0) {
            $content .= ' - <a href="'.$CFG->wwwroot.'/report/coursequotas/filemanager.php?category='.$category['id'].'&children=true">'.$managestr.'</a>';
        }

        $content .= '</li>';

        // Recursive call for subcategories
        if (!empty($category['subcategories'])) {
            $content .= report_coursequotas_printCategoryData($category['subcategories']);
        }
    }

    // Close HMTL list
    $content .= '</ul>';

    return $content;
}


function can_manage_files() {
    return has_capability('report/coursequotas:manage', context_system::instance());
}


/**
 * Transforms category tree in a string HTML-formatted to be sent to the browser.
 *  Builds a table with courses information
 *
 * @author Toni Ginard (aginard@xtec.cat)
 * @param array $data Category tree
 *
 * @return string HTML code to be sent to the browser
 */
function report_coursequotas_printCoursesData($data) {
    global $CFG;

    // Get a two-dimension array with the course to build the body of the table
    $courses = report_coursequotas_getCoursesDataBody($data);
    // Sort the array by course size. BTW, array_multisort is weird!!
    $courseSize = array();
    foreach ($courses as $key => $value) {
        $weight = 1;
        switch ($value['courseSizeUnit']) {
            case 'kB': $weight = 1024; break;
            case 'MB': $weight = 1024 * 1024; break;
            case 'GB': $weight = 1024 * 1024 * 1024; break;
        }
        $courseSize[$key] = $value['courseSize'] * $weight;
    }
    array_multisort($courseSize, SORT_DESC, $courses);

    $managestr = get_string('manage', 'report_coursequotas');
    $canmanage = can_manage_files();

    // Open HTML table and adds headings
    $table = new html_table();
    $table->class = 'generaltable';
    $table->head = array(get_string('course_name', 'report_coursequotas'), get_string('category_name', 'report_coursequotas'), get_string('disk_used', 'report_coursequotas'));
    $table->align = array('left', 'center', 'center');
    if ($canmanage) {
        $table->head[] = get_string('actions');
        $table->align[] = 'center';
    }
    foreach ($courses as $course) {

        $row = array();
        $row[] = '<a href="../../course/view.php?id=' . $course['courseId'] . '" target="_blank">' . $course['courseName'];
        // Exclude link in front page
        if ($course['categoryId'] == 0) {
            $row[] = $course['categoryName'];
        } else {
            $row[] = '<a href="../../course/index.php?categoryid=' . $course['categoryId'] . '" target="_blank">' . $course['categoryName'] . '</a>';
        }
        $row[] = number_format($course['courseSize'], 2, ',', '.') . ' ' . $course['courseSizeUnit'];

        if ($canmanage) {
            if ($course['courseSize'] > 0) {
                $row[] = '<a href="'.$CFG->wwwroot.'/report/coursequotas/filemanager.php?course='.$course['courseId'].'&children=true">'.$managestr.'</a>';
            } else {
                $row[] = "";
            }
        }


        $table->data[] = $row;
    }
    return html_writer::table($table);
}

/**
 * Transforms the n-level tree in a two-dimension array for two reasons: to be
 *  able to build an HTML table and to be able to order the courses by size
 *
 * @author Toni Ginard (aginard@xtec.cat)
 * @param array $data Category tree
 *
 * @return string HTML code to be sent to the browser
 */
function report_coursequotas_getCoursesDataBody($data) {

    $courseList = array();

    foreach ($data as $category) {

        if (!empty($category['courses'])) {
            foreach ($category['courses'] as $course) {

                // Format file size
                $size = report_coursequotas_formatSize($course['coursesize']);

                $courseList[] = array('courseId' => $course['id'],
                    'courseName' => $course['Fullname'],
                    'categoryId' => $category['id'],
                    'categoryName' => $category['name'],
                    'courseSize' => $size['figure'],
                    'courseSizeUnit' => $size['unit']);
            }
        }

        // Recursive call for subcategories
        if (!empty($category['subcategories'])) {
            // array_merge is used to join the courses of this level and of the subcategories
            $courseList = array_merge($courseList, report_coursequotas_getCoursesDataBody($category['subcategories']));
        }
    }

    return $courseList;
}


/**
 * Gets the amount of bytes used in course and users backups
 *
 * @author Toni Ginard (aginard@xtec.cat)
 * @global array $DB
 *
 * @return int Number of bytes used
 */
function report_coursequotas_getBackupUsage() {
    // component equal to backup means "course level backup"
    // filearea equal to backup means "user level backup" which is not associated to any course
    return get_coursequotas_filesize(getBackupWhereSQL());
}

function getBackupWhereSQL() {
    return "((component = 'backup' AND (filearea = 'activity' OR filearea = 'course' OR filearea = 'automated')) OR (component = 'user' AND filearea = 'backup'))";
}

function report_coursequotas_getUserUsage() {
    // User files excluding backups
    return get_coursequotas_filesize("component='user' AND filearea != 'backup'");
}

function report_coursequotas_getTempUsage() {
    global $CFG;
    if (isset($CFG->tempdir)) {
        $tempdir = $CFG->tempdir;
    } else {
        $tempdir = $CFG->dataroot.'/temp';
    }
    if (file_exists($tempdir)) {
        $size = exec('du -sk ' . $tempdir);
        $size = explode('/', $size);
        $size = $size[0]; // Size in kB
        return $size * 1024;
    }
    return 0;
}

function report_coursequotas_getTrashUsage() {
    global $CFG;
    if (isset($CFG->trashdir)) {
        $trashdir = $CFG->trashdir;
    } else {
        $trashdir = $CFG->dataroot.'/trashdir';
    }
    $trashdir .= '/';
    if (file_exists($trashdir)) {
        $size = exec('du -sk ' . $trashdir);
        $size = explode('/', $size);
        $size = $size[0]; // Size in kB
        return $size * 1024;
    }
    return 0;
}

function report_coursequotas_getRepositoryUsage() {
    global $CFG;
    if (file_exists($CFG->dataroot . '/repository/')) {
        $repoSize = exec('du -sk ' . $CFG->dataroot . '/repository/');
        $repoSize = explode('/', $repoSize);
        $repoSize = $repoSize[0]; // Size in kB
        $size = $repoSize * 1024;
        return $size;
    }
    return 0;
}


/**
 * Formats a size figure and adds unit information
 *
 * @author Toni Ginard (aginard@xtec.cat)
 * @param int $figure file size to be formatted
 *
 * @return array Figure and units
 */
function report_coursequotas_formatSize($figure) {

    $size['figure'] = $figure;
    $size['unit'] = 'Bytes';

    // Unit conversion (Bytes, kB, MB or GB)
    if ($size['figure'] > 1024) {
        $size['figure'] = $size['figure'] / 1024;
        $size['unit'] = 'kB';
    }

    if ($size['figure'] > 1024) {
        $size['figure'] = $size['figure'] / 1024;
        $size['unit'] = 'MB';
    }

    if ($size['figure'] > 1024) {
        $size['figure'] = $size['figure'] / 1024;
        $size['unit'] = 'GB';
    }

    return $size;
}

function report_coursequotas_formatSize_text($figure) {
    $size = report_coursequotas_formatSize($figure);
    return number_format($size['figure'], 2, ',', '.') . ' ' . $size['unit'];
}

function report_coursequotas_printChart($disaggregated, $consumed = false, $total = false){
    global $CFG;

    $consumed_calc = 0;
    foreach($disaggregated as $type => $value){
        $consumed_calc += $value / (1024 * 1024);
    }

    if ($consumed && $total) {
        $free = $total - $consumed;
        // Protect the graph against data errors
        if ($free < 0)  $free = 0;

        $consumed_percent = (int) ($consumed/$total *100);
        $free_percent = (int) ($free/$total *100);

        if (is_xtecadmin()) {
            $diff_calc = (int) ($consumed - $consumed_calc);
            if ($diff_calc != 0) {
                echo "<div class=\"well well-small\">Hi ha $diff_calc MB que s'escapen...</div>";
            }
        }
    } else {
        $free = 0;
        $free_percent = 0;

        $total = $consumed = $consumed_calc;
        $consumed_percent = 100;
    }

    $colors = array('course' =>'#FDB45C', 'backup' => '#46BFBD', 'user' => '#4C86B9', 'temp' => '#984298','trash' => '#A4822D', 'repo' => '#BB556F');
    $highlights = array('course' =>'#FFC870', 'backup' => '#5AD3D1', 'user' => '#5B90BF', 'temp' => '#D19ED1','trash' => '#C79E37', 'repo' => '#DF6A88');
    $text = '<script src="'.$CFG->wwwroot.'/report/coursequotas/chartjs/Chart.min.js"></script>';
    $text .= '<div id="canvas-holder" style="text-align:center;"><canvas id="chart-area" width="300" height="300"/></div>';
    $text .= '<script>
        window.onload = function(){
            var ctx = document.getElementById("chart-area").getContext("2d");
            var data = [';
    foreach($disaggregated as $type => $value){
        $value = $value / (1024*1024);
        $percent = (int) ($value/$total *100);
        if($percent > 0){
            $text .= '{ value: '.$value.', label: "'.get_string('disk_used_'.$type, 'report_coursequotas').' ('.$percent.'%)", color: "'.$colors[$type].'", highlight: "'.$highlights[$type].'"},';
            $consumed -= $value;
            $consumed_percent -= $percent;
        }
    }
    $text .= '  {
                    value: '.$consumed.',
                    color:"#F7464A",
                    highlight: "#FF5A5E",
                    label: "'.get_string('disk_used_other', 'report_coursequotas').' ('.$consumed_percent.'%)"
                },
                {
                    value: '.$free.',
                    color: "#2C9C69",
                    highlight: "#4CCA91",
                    label: "'.get_string('disk_free', 'report_coursequotas').' ('.$free_percent.'%)"
                }
            ];
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

function get_filtered_files($filename = "" , $userid = null, $context = null, $addchildren = false, $filearea = null,
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

    if ($context) {
        if ($addchildren) {
            $ctxt = context::instance_by_id($context);
            $filter[] = "((f.contextid = c.id AND c.path LIKE '$ctxt->path/%') OR f.contextid = $context )";
            $tables .= ', {context} c';
        } else {
            $filter[] = 'f.contextid = '.$context;
        }
    }

    if ($filearea) {
        $filter[] = "f.filearea = '$filearea'";
    }

    if ($component) {
        $filter[] = "f.component = '$component'";
    }

    if ($showonlybackups) {
        $filter[] = getBackupWhereSQL();
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

    if ($searchedcontext  && !isset($filters->contexts[$searchedcontext])) {
        $filecontext = context::instance_by_id($searchedcontext);
        $filters->contexts[$searchedcontext] = $filecontext->get_context_name();
    }

    $filters->fileareas = $DB->get_records_sql_menu('SELECT DISTINCT filearea AS f, filearea FROM {files} ORDER BY filearea');
    $filters->components = $DB->get_records_sql_menu('SELECT DISTINCT component AS c, component FROM {files} ORDER BY component');
    return $filters;
}
