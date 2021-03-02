<?php

require_once('agora_script_base.class.php');

class script_course_quotas extends agora_script_base
{

    public $title = 'Calcula la mida dels cursos i les categories';
    public $info = 'Obté la llista de fitxers de cada curs i els suma per tal d\'obtenir la mida de cada curs (sense comprimir)';
    public $cron = false;
    protected $test = false;
    public $cli = true;
    public $api = true;
    protected $category = 'Utils';

    protected function _execute($params = array(), $execute = true): bool {

        global $CFG, $DB;

        require_once $CFG->libdir . '/adminlib.php';
        require_once $CFG->dirroot . '/report/coursequotas/lib/local.lib.php';
        require_once $CFG->dirroot . '/report/coursequotas/lib/util.lib.php';
        require_once $CFG->dirroot . '/report/coursequotas/lib/calculate.lib.php';
        require_once $CFG->dirroot . '/report/coursequotas/constants.php';

        mtrace('', '<br/>');

        // Get block size. Block size is the allocation unit of space in the file system. So if the block size is 4096, that means
        //  that a file of 1 byte, uses 4096 bytes in the file system
        $tempdir = isset($CFG->tempdir) ? $CFG->tempdir : $CFG->dataroot . '/temp';
        $trashdir = isset($CFG->trashdir) ? $CFG->trashdir : $CFG->dataroot . '/trashdir';

        $tempfile = $tempdir . '/test.txt';
        file_put_contents($tempfile, REPORT_COMPONENTNAME);
        $block_size = intval(exec('du ' . $tempfile . " | awk '{print $1}'")) * 1024;

        $categories = $DB->get_records('course_categories', array(), 'depth, id', 'id, name, parent, visible');

        foreach ($categories as $catid => $category) {
            $categoryContext = \context_coursecat::instance($catid);
            $categorySize = report_coursequotas_get_contextsize($categoryContext, $block_size);

            // Update or insert record
            $dataObject = $DB->get_record(CATEGORYSIZE_TABLENAME, [CATEGORYSIZE_FIELDCATEGORYID => $catid], '*', IGNORE_MULTIPLE);

            if ($dataObject) {
                $dataObject->{CATEGORYSIZE_FIELDQUOTA} = $categorySize;
                $DB->update_record(CATEGORYSIZE_TABLENAME, $dataObject);
            } else {
                $dataObject = new \stdClass();
                $dataObject->{CATEGORYSIZE_FIELDCATEGORYID} = $catid;
                $dataObject->{CATEGORYSIZE_FIELDQUOTA} = $categorySize;
                $DB->insert_record(CATEGORYSIZE_TABLENAME, $dataObject);
            }

            $categorySize = report_coursequotas_format_size($categorySize);
            mtrace('Categoria <strong>' . $category->name . '</strong>: ' . $categorySize->number . ' ' . $categorySize->unit, '<br/>');
        }

        mtrace('', '<br/>');

        $courses = $DB->get_records('course', null, '', 'id, fullname, visible, category');

        foreach ($courses as $courseId => $course) {
            $courseContext = \context_course::instance($courseId);
            $courseSize = report_coursequotas_get_contextsize($courseContext, $block_size);

            // Update or insert record
            $dataObject = $DB->get_record(COURSESIZE_TABLENAME, [COURSESIZE_FIELDCOURSEID => $courseId], '*', IGNORE_MULTIPLE);

            if ($dataObject) {
                $dataObject->{COURSESIZE_FIELDQUOTA} = $courseSize;
                $DB->update_record(COURSESIZE_TABLENAME, $dataObject);
            } else {
                $dataObject = new \stdClass();
                $dataObject->{COURSESIZE_FIELDCOURSEID} = $courseId;
                $dataObject->{COURSESIZE_FIELDQUOTA} = $courseSize;
                $DB->insert_record(COURSESIZE_TABLENAME, $dataObject);
            }

            $courseSize = report_coursequotas_format_size($courseSize);
            mtrace('Curs <strong>' . $course->fullname . '</strong>: ' . $courseSize->number . ' ' . $courseSize->unit, '<br/>');
        }

        mtrace('', '<br/>');

        // Calculate backup usage
        $size = get_coursequotas_filesize(get_backup_where_sql(), '', $block_size);
        set_config('backup_usage', $size, REPORT_COMPONENTNAME);
        $size = report_coursequotas_format_size($size);
        mtrace('<strong>backup_usage</strong>: ' . $size->number . ' ' . $size->unit, '<br/>');

        // Calculate course usage
        $syscontext = \context_system::instance();
        $sql = "SELECT id, path
                  FROM {context}
                 WHERE depth = ? AND contextlevel = ? AND path LIKE ?";
        $params = array($syscontext->depth + 1, CONTEXT_COURSECAT, $syscontext->path . '/%');
        $contexts = $DB->get_records_sql_menu($sql, $params);

        $sitecourse = $DB->get_field('course', 'id', array('category' => 0));
        $context = \context_course::instance($sitecourse);
        $contexts[$context->id] = $context->path;

        $sqlparts = [];
        foreach ($contexts as $contexid => $path) {
            $sqlparts[] = "(f.contextid = c.id AND c.path like '$path/%')";
        }
        $sqlparts[] = 'f.contextid IN (' . implode(',', array_keys($contexts)) . ')';

        $sql = implode(' OR ', $sqlparts);

        // Exclude backup files.
        $sql = "($sql) AND (f.component != 'backup' OR (f.filearea != 'activity' AND f.filearea != 'course' AND f.filearea != 'automated'))";

        $get_filesize = [
            [
                'where' => $sql,
                'tables' => '{context} c',
                'config_name' => 'course_usage',
            ],
            [
                'where' => "component = 'user' AND filearea != 'backup'",
                'tables' => '',
                'config_name' => 'user_usage',
            ],
            [
                'where' => "(f.component = 'mod_hvp' AND f.filearea = 'libraries') OR (f.component = 'core_h5p' AND f.filearea = 'libraries')",
                'tables' => '',
                'config_name' => 'h5plib_usage',
            ],
        ];

        foreach ($get_filesize as $item) {
            $size = get_coursequotas_filesize($item['where'], $item['tables'], $block_size);
            set_config($item['config_name'], $size, REPORT_COMPONENTNAME);
            $size = report_coursequotas_format_size($size);
            mtrace('<strong>' . $item['config_name'] . '</strong>: ' . $size->number . ' ' . $size->unit, '<br/>');
        }

        $get_directory_size = [
            [
                'directory' => $CFG->dataroot . '/repository/',
                'config_name' => 'repositories_usage',
            ],
            [
                'directory' => $tempdir,
                'config_name' => 'tempdir_usage',
            ],
            [
                'directory' => $trashdir,
                'config_name' => 'trashdir_usage',
            ],
        ];

        foreach ($get_directory_size as $item) {
            $size = report_coursequotas_get_directory_size($item['directory']);
            set_config($item['config_name'], $size, REPORT_COMPONENTNAME);
            $size = report_coursequotas_format_size($size);
            mtrace('<strong>' . $item['config_name'] . '</strong>: ' . $size->number . ' ' . $size->unit, '<br/>');
        }

        // Save timestamp
        set_config('updated', time(), REPORT_COMPONENTNAME);

        return true;
    }
}
