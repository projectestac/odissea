<?php

require_once('agora_script_base.class.php');

class script_replace_database_text extends agora_script_base{

    public $title = 'Replace database texts';
    public $info = "Eina XTEC de cerca i substitució a la base de dades [Només Oracle]";
    public $cron = false;
    public $cli = true;
    protected $test = false;
    protected $category = "Upgrade";

    public function params(){
        global $CFG;
        $params = array();
        $params['origintext'] = optional_param('origintext', "", PARAM_TEXT);
        $params['targettext'] = optional_param('targettext', $CFG->wwwroot, PARAM_TEXT);
        return $params;
    }

    protected function _execute($params = array(), $execute = true){
        global $CFG, $OUTPUT;

        $search = $params['origintext'];
        $replace = $params['targettext'];
        if (empty($search) || empty($replace)) {
            echo $this->output('Falten paràmetres', 'ERROR');
            return false;
        }

        if ($search == $replace) {
            echo $this->output('Falten paràmetres', 'ERROR');
        }

        echo "Reemplaçant '<strong>$search</strong>' per '<strong>$replace</strong>'<br />";

        switch ($CFG->dbtype) {
            case 'oci':
            case 'oci8':
                $result = $this->replaceMoodleOCI($search, $replace);
                break;
            default:
                $result = $this->replaceMoodle($search, $replace);
                break;
        }

        purge_all_caches();


        if ($result) {
            echo $this->output('S\'ha executat correctament el canvi de text al Moodle', 'OK');
            return true;
        } else {
            echo $this->output('El canvi de text no ha finalitzat correctament al Moodle', 'ERROR');
            return false;
        }
    }

    /**
     * Replace $search string to $new string at Moodle
     *
     * @param type $search old string to replace
     * @param type $replace new string
     * @return type Boolean
     */
    private function replaceMoodle($search, $replace) {
        global $CFG, $DB, $OUTPUT;

        // TODO: this is horrible hack, we should do whitelisting and each plugin should be responsible for proper replacing...
        $skiptables = array('config', 'config_plugins', 'config_log', 'upgrade_log', 'log',
                        'filter_config', 'sessions', 'events_queue', 'repository_instance_config',
                        'block_instances', '');

        // Turn off time limits, sometimes upgrades can be slow.
        @set_time_limit(0);

        if (!$tables = $DB->get_tables() ) {    // No tables yet at all.
            return false;
        }
        foreach ($tables as $table) {

            if (in_array($table, $skiptables)) {      // Don't process these
                continue;
            }

            if ($columns = $DB->get_columns($table)) {
                $DB->set_debug(true);
                foreach ($columns as $column) {
                    try {
                        $DB->replace_all_text($table, $column, $search, $replace);
                    } catch (Exception $e) {
                        echo $OUTPUT->notification($e->getMessage());
                    }
                }
                $DB->set_debug(false);
            }
        }

        $blocks = core_component::get_plugin_list('block');
        foreach ($blocks as $blockname => $fullblock) {
            if ($blockname === 'NEWBLOCK') {   // Someone has unzipped the template, ignore it
                continue;
            }

            if (!is_readable($fullblock.'/lib.php')) {
                continue;
            }

            $function = 'block_'.$blockname.'_global_db_replace';
            include_once($fullblock.'/lib.php');
            if (!function_exists($function)) {
                continue;
            }

            echo $OUTPUT->notification("Replacing in $blockname blocks...", 'notifysuccess');
            $function($search, $replace);
            echo $OUTPUT->notification("...finished", 'notifysuccess');
        }

        return true;
    }

    /**
     * Replace $search string to $new string at Moodle
     *
     * @param type $search old string to replace
     * @param type $replace new string
     * @return type Boolean
     */
    private function replaceMoodleOCI($search, $replace) {
        global $CFG, $DB;

        if (!($con = oci_pconnect($CFG->dbuser, $CFG->dbpass, $CFG->dbname))) {
            echo 'No s\'ha pogut connectar a la base de dades de Moodle';
            return false;
        }

        // Get all tables
        $sql = 'SELECT table_name FROM user_tables WHERE table_name like \'' . strtoupper($CFG->prefix) . '%\' ';
        $stmt = oci_parse($con, $sql);
        $tables = array();
        if (!oci_execute($stmt, OCI_DEFAULT)) {
            return false;
        }
        while (oci_fetch($stmt)) {
            $tables[] = oci_result($stmt, 'TABLE_NAME');
        }

        // Get all columns
        foreach ($tables as $table) {
            echo '<br>Reemplaçant taula ' . $table . '...';
            $sql = 'SELECT column_name, data_type FROM user_tab_columns WHERE table_name = \'' . $table . '\' ';
            $stmt = oci_parse($con, $sql);
            $columns = array();
            if (!oci_execute($stmt, OCI_DEFAULT)) {
                return false;
            }
            while (oci_fetch($stmt)) {
                $columns[] = array('column_name' => oci_result($stmt, 'COLUMN_NAME'),
                    'data_type' => oci_result($stmt, 'DATA_TYPE')
                );
            }

            // Replace only CLOB and VARCHAR
            foreach ($columns as $column) {
                if ($column['data_type'] == 'CLOB' || $column['data_type'] == 'VARCHAR2') {
                    $sql = 'UPDATE ' . $table . ' SET ' . $column['column_name'] . ' = replace(' . $column['column_name'] . ', \'' . $search . '\', \'' . $replace . '\') WHERE ' . $column['column_name'] . ' LIKE \'%' . $search . '%\' ';
                    $stmt = oci_parse($con, $sql);
                    $columns = array();
                    if (!oci_execute($stmt, OCI_DEFAULT)) {
                        $e = oci_error($stmt);
                        echo '<br />&nbsp;&nbsp;&nbsp;<strong style="color:red">ERROR</strong>: ' . $e['message'];
                        continue;
                    }
                }
            }
        }

        // Commit the changes
        $r = oci_commit($con);
        if (!$r) {
            $e = oci_error($con);
            trigger_error(htmlentities($e['message']), E_USER_ERROR);
        }

        oci_close($con);

        echo '<br>Reemplaçant camps base64 de taula block_instances...';
        $instances = $DB->get_recordset('block_instances');
        foreach ($instances as $instance) {
            // TODO: intentionally hardcoded until MDL-26800 is fixed
            $config = unserialize(base64_decode($instance->configdata));
            if (isset($config->text) and is_string($config->text)) {
                $config->text = str_replace($search, $replace, $config->text);
                $DB->set_field('block_instances', 'configdata', base64_encode(serialize($config)), array('id' => $instance->id));
            }
        }
        $instances->close();

        return true;
    }

}
