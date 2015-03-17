<?php

class bigdata {

    private $file;
    private $courses;
    private $coursescontext;
    private $roles;
    private $users;
    private $exportfields;
    private $foreignkeys;
    private $tablefields;
    private $possibleextrafields;
    private $profilename;
    private $savedirectory;


    function __construct($profilename) {
        global $DB, $CFG;

        $profile = $DB->get_record('bigdata_profiles', array('name' => $profilename));
        if (!$profile) {
            throw new Exception('Profile not found');
        }

        $this->profilename = $profile->name;

        if (empty($profile->savedirectory)) {
            if (function_exists('get_admin_datadir_folder')) {
                $this->savedirectory = get_admin_datadir_folder('bigdata');
            } else {
                $this->savedirectory = $CFG->dataroot.'/bigdata';
            }
        } else {
            $this->savedirectory = $profile->savedirectory;
        }
        make_writable_directory($this->savedirectory);

        if (empty($profile->courses)) {
            $courses = $DB->get_fieldset_select('course', 'id', '1=1 ORDER BY id');
        } else {
            $courses = explode(',', $profile->courses);
        }

        foreach ($courses as $course) {
            $this->courses[$course] = $course;
            $context = $DB->get_record('context', array('contextlevel' => '50', 'instanceid' => $course), 'id, instanceid as course, path');
            if ($context) {
                $this->coursescontext[$context->id] = $context;
            }
        }

        if (empty($profile->roles)) {
            $roles = array_keys(get_all_roles());
        } else {
            $roles = explode(',', $profile->roles);
        }
        foreach ($roles as $role) {
            $this->roles[$role] = $role;
        }

        $select = 'roleid IN ('.implode(',', $this->roles).') AND contextid IN ('.implode(',', array_keys($this->coursescontext)).')';
        if (!empty($profile->excludedusers)) {
            $excludedusers = explode(',', $profile->excludedusers);
            $select .= ' AND userid NOT IN ('.implode(',', $excludedusers).')';
        }
        $users = $DB->get_fieldset_select('role_assignments', 'userid', $select);
        foreach ($users as $userid) {
            $this->users[$userid] = $userid;
        }


        $this->exportfields = array();
        if (!empty($profile->tablefields)) {
            $exportfields = explode(',', $profile->tablefields);
            foreach ($exportfields as $tablefield) {
                list($table, $field) = explode('.', $tablefield, 2);
                if (!isset($this->exportfields[$table])) {
                    $this->exportfields[$table] = array();
                }
                $this->exportfields[$table][$field] = $field;
            }
        }

        $this->load_database();
        $this->possibleextrafields = array('course', 'courseid', 'role', 'roleid', 'context', 'contextid', 'user', 'userid');
    }

    public function export($filename, $escola) {
        $this->file = new bigdata_filemanager($this->savedirectory, $filename.'_'.$this->profilename , $escola);

        // Export Selected tables
        foreach ($this->exportfields as $table => $fields) {
            $this->add_data($table, $fields);
        }

        $this->file->close();

        return true;
    }

    private function check_user($data) {
        if (!empty($this->users)) {
            $id = false;
            if (isset($data->userid)) {
                $id = $data->userid;
            } else if (isset($data->user)) {
                $id = $data->user;
            }
            if ($id !== false && !isset($this->users[$id])) {
                return false;
            }
        }
        return true;
    }

    private function check_course($data) {
        $id = false;
        if (isset($data->courseid)) {
            $id = $data->courseid;
        } else if (isset($data->course)) {
            $id = $data->course;
        }
        if ($id !== false && !isset($this->courses[$id])) {
            return false;
        }
        return true;
    }

    private function check_role($data) {
        $id = false;
        if (isset($data->roleid)) {
            $id = $data->roleid;
        } else if (isset($data->role)) {
            $id = $data->role;
        }
        if ($id !== false && !isset($this->roles[$id])) {
            return false;
        }
        return true;
    }

    private function check_context($data) {
        $id = false;
        if (isset($data->contextid)) {
            $id = $data->contextid;
        } else if (isset($data->context)) {
            $id = $data->context;
        }
        if ($id) {
            if (isset($this->coursescontext[$id])) {
                return true;
            }
            $context = context::instance_by_id($id, IGNORE_MISSING);
            if (!$context) {
                return false;
            }
            $parents = $context->get_parent_context_ids();
            foreach ($parents as $parent) {
                if (isset($this->coursescontext[$parent])) {
                    return true;
                }
            }
            return false;
        }
        return true;
    }

    private function add_data($table, $fields) {
        global $DB;

        // Special queries
        switch ($table) {
            case 'course':
                $rs = $DB->get_recordset_select($table, 'id IN ('.implode(',', $this->courses).')', null, 'id');
                break;
            case 'user': // No needed but still have it
                $rs = $DB->get_recordset_select($table, 'id IN ('.implode(',', $this->users).')', null, 'id');
                break;
            case 'role':
                $rs = $DB->get_recordset_select($table, 'id IN ('.implode(',', $this->roles).')', null, 'id');
                break;
            case 'files':
                $rs = $DB->get_recordset_select($table, "filename != '.'", null, 'id');
                break;
            case 'context':
                foreach ($this->coursescontext as $coursecontext) {
                    $rs = $DB->get_recordset_select($table, 'path LIKE ? OR path = ?', array($coursecontext->path.'/%', $coursecontext->path), 'id');
                    $this->add_records($table, $fields, $rs);
                }
                return;
                break;
            default:
                // Get possible joins
                if (isset($this->foreignkeys[$table])) {
                    $fks = $this->foreignkeys[$table];
                    $i = 2;
                    $joins = array();
                    $extrafields = array();
                    foreach ($fks as $field => $fk) {
                        $efs = array();
                        foreach ($this->possibleextrafields as $ef) {
                            if (isset($this->tablefields[$fk->reftable][$ef])) {
                                $efs[] = 't'.$i.'.'.$ef;
                            }
                        }
                        if (!empty($efs)) {
                            $extrafields = array_merge($extrafields, $efs);
                            if (!$fk->notnull) {
                                $left = 'LEFT';
                            } else {
                                $left = "";
                            }
                            $joins[] = 'LEFT JOIN {'.$fk->reftable.'} t'.$i.' ON t1.'.$field.' = t'.$i.'.'.$fk->reffield;
                            $i++;
                        }
                    }
                    $extraf = implode(',', $extrafields);
                    if (!empty($extraf)) {
                        $sql = 'SELECT t1.*, '.$extraf.' FROM {'.$table.'} t1 '.implode(' ', $joins). ' ORDER BY t1.id';
                        $rs = $DB->get_recordset_sql($sql);
                    }
                }
                break;
        }

        if (!isset($rs)) {
            $rs = $DB->get_recordset($table, null, 'id');
        }

        $this->add_records($table, $fields, $rs);
    }

    private function add_records($table, $fields, $rs) {

        $fields['id'] = 'id';
        foreach ($rs as $record) {
            // Exclude non related data
            if (!$this->check_user($record) ||
                !$this->check_course($record) ||
                !$this->check_role($record) ||
                !$this->check_context($record)) {
                continue;
            }

            // Unset not selected fields
            $rowarray = (array) $record;
            foreach ($rowarray as $fieldname => $unused) {
                if (!isset($fields[$fieldname])) {
                    unset($record->$fieldname);
                }
            }
            $this->file->add($record, $table);
        }
        $rs->close();
    }

    private function load_database() {
        global $CFG, $DB;
        require_once($CFG->libdir.'/ddllib.php');

        $this->foreignkeys = array();

        $xmldirs = array();
        $dbdirectories = get_db_directories();

        foreach ($dbdirectories as $path) {
            if (file_exists($path)) {
                $xmldbfile = new xmldb_file($path. '/install.xml');
                if ($xmldbfile->fileExists()) {
                    $xmldirs[$path] = $xmldbfile;
                }
            }
        }
        // Sort by key
        ksort($dbdirectories);

        $dbman = $DB->get_manager();

        if ($xmldirs) {
            foreach ($xmldirs as $xmldbfile) {
                $loaded = $xmldbfile->loadXMLStructure();
                if (!$loaded || !$xmldbfile->isLoaded()) {
                    continue;
                }
                // Arriving here, everything is ok, get the XMLDB structure
                $structure = $xmldbfile->getStructure();
                if ($xmldbtables = $structure->getTables()) {
                    foreach ($xmldbtables as $xmldbtable) {
                        if (!$dbman->table_exists($xmldbtable)) {
                            continue;
                        }
                        $tablename = $xmldbtable->getName();

                        $columns = $DB->get_columns($tablename);
                        $columnsclean = array();
                        foreach ($columns as $key => $unused) {
                            $columnsclean[$key] = $key;
                        }
                        $this->tablefields[$tablename] = $columnsclean;

                        // Do not load the foreign keys if the table is not going to be exported
                        if (!isset($this->exportfields[$tablename])) {
                            continue;
                        }

                        if ($keys = $xmldbtable->getKeys()) {
                            $tablekeys = array();
                            foreach ($keys as $key) {
                                // We are only interested in foreign keys.
                                if (!in_array($key->getType(), array(XMLDB_KEY_FOREIGN, XMLDB_KEY_FOREIGN_UNIQUE))) {
                                    continue;
                                }

                                $reftable = $key->getRefTable();
                                if (!$dbman->table_exists($reftable)) {
                                    continue;
                                }

                                // Work out the SQL to find key violations.
                                $keyfields = $key->getFields();
                                $reffields = $key->getRefFields();
                                $joinconditions = array();
                                $nullnessconditions = array();
                                $params = array();
                                foreach ($keyfields as $i => $field) {
                                    if (!$dbman->field_exists($reftable, $reffields[$i])) {
                                        continue;
                                    }
                                    $xmldbfield = $xmldbtable->getField($field);
                                    // Do not load the references to the main tables
                                    if (in_array($reftable, array('user', 'course', 'context', 'role'))) {
                                        continue;
                                    }
                                    $tablekey = new StdClass();
                                    $tablekey->reftable = $reftable;
                                    $tablekey->reffield = $reffields[$i];
                                    $tablekey->default = $xmldbfield->getDefault();
                                    $tablekey->notnull = $xmldbfield->getNotNull();
                                    $tablekeys[$field] = $tablekey;
                                }
                            }

                            if (!empty($tablekeys)) {
                                $this->foreignkeys[$tablename] = $tablekeys;
                            }
                        }
                    }
                }
            }
        }
    }

}

class bigdata_filemanager{
    private $handler;
    private $filepath;
    private $filename;
    private $escola;

    function __construct($filepath, $filename, $escola) {
        $this->filepath = $filepath;
        $this->filename = $filename;
        $this->escola = $escola;
        $this->reset();
    }

    private function reset() {
        $this->handler = fopen($this->filepath.'/'.$this->filename.'.json', "w+");
        fwrite($this->handler, '');
    }

    private function open() {
        $this->handler = fopen($this->filepath.'/'.$this->filename.'.json', "a+");
        if (!$this->handler) {
            throw new Exception('Cannot open file '.$this->filepath);
        }
    }

    public function close() {
        global $CFG;

        fclose($this->handler);

        require_once("$CFG->libdir/filestorage/tgz_packer.php");
        $zp = new tgz_packer();
        $files = array($this->filename.'.json' => $this->filepath.'/'.$this->filename.'.json');
        $zp->archive_to_pathname($files, $this->filepath.'/'.$this->filename.'_'.$this->escola.'_'.date('Ymd_Hi').'.tgz');

        unlink($this->filepath.'/'.$this->filename.'.json');
    }

    public function add($object, $table) {
        $this->open();
        $object->table = $table;
        $text = json_encode($object);
        return fwrite($this->handler, $text."\n");
    }


}
