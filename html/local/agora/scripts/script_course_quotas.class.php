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

        $block_size = get_block_size();

        $categories = $DB->get_records('course_categories', array(), 'depth, id', 'id, name, parent, visible');
        foreach ($categories as $cat_id => $category) {
            $category_context = \context_coursecat::instance($cat_id);
            $categorySize = insert_or_update_coursequotas_size($category_context, CATEGORYSIZE_TABLENAME, CATEGORYSIZE_FIELDCATEGORYID, CATEGORYSIZE_FIELDQUOTA, $cat_id, $block_size);
            $categorySize = report_coursequotas_format_size($categorySize);
            mtrace('Categoria <strong>' . $category->name . '</strong>: ' . $categorySize->number . ' ' . $categorySize->unit, '<br/>');
        }

        mtrace('', '<br/>');

        $courses = $DB->get_records('course', null, '', 'id, fullname, visible, category');
        foreach ($courses as $course_id => $course) {
            $course_context = \context_course::instance($course_id);
            $courseSize = insert_or_update_coursequotas_size($course_context, COURSESIZE_TABLENAME, COURSESIZE_FIELDCOURSEID, COURSESIZE_FIELDQUOTA, $course_id, $block_size);
            $courseSize = report_coursequotas_format_size($courseSize);
            mtrace('Curs <strong>' . $course->fullname . '</strong>: ' . $courseSize->number . ' ' . $courseSize->unit, '<br/>');
        }

        mtrace('', '<br/>');

        // Calculate backup usage
        $size = get_coursequotas_filesize(get_backup_where_sql(), '', $block_size);
        set_config('backup_usage', $size, REPORT_COMPONENTNAME);
        $size = report_coursequotas_format_size($size);
        mtrace('<strong>backup_usage</strong>: ' . $size->number . ' ' . $size->unit, '<br/>');

        // Calculate global usages from database
        $query_items = get_coursequotas_queries_info();
        foreach ($query_items as $item) {
            $size = get_coursequotas_filesize($item[REPORT_COURSEQUOTAS_WHERE_STRING], $item[REPORT_COURSEQUOTAS_TABLES_STRING], $block_size);
            set_config($item[REPORT_COURSEQUOTAS_CONFIGNAME_STRING], $size, REPORT_COMPONENTNAME);
            $size = report_coursequotas_format_size($size);
            mtrace('<strong>' . $item['config_name'] . '</strong>: ' . $size->number . ' ' . $size->unit, '<br/>');
        }

        $directory_items = get_coursequotas_directories_info();
        foreach ($directory_items as $item) {
            $size = report_coursequotas_get_directory_size($item[REPORT_COURSEQUOTAS_DIRECTORY_STRING]);
            set_config($item[REPORT_COURSEQUOTAS_CONFIGNAME_STRING], $size, REPORT_COMPONENTNAME);
            $size = report_coursequotas_format_size($size);
            mtrace('<strong>' . $item['config_name'] . '</strong>: ' . $size->number . ' ' . $size->unit, '<br/>');
        }

        // Save timestamp
        set_config('updated', time(), REPORT_COMPONENTNAME);

        return true;
    }
}
