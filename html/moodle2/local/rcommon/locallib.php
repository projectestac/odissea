<?php

function set_marsupial_state($enable) {
    global $DB;
    $DB->set_field('modules', 'visible', $enable, array('name' => 'rcontent'));
    $DB->set_field('block', 'visible', $enable, array('name' => 'my_books'));
    $DB->set_field('block', 'visible', $enable, array('name' => 'rgrade'));
    set_config('enabled', $enable, 'rcommon');
}

function is_marsupial_enabled() {
    if (isset($CFG->ismarsupial) && $CFG->ismarsupial) {
        return true;
    } else {
        return (bool)get_config('rcommon', 'enabled');
    }
}

class rcommon_publisher {

    public static function get($id) {
        global $DB;
        return $DB->get_record('rcommon_publisher', array('id' => $id));
    }

    public static function check_auth($publisherid, $user, $passwd) {
        global $DB;

        if (!$user || !$passwd) {
            return false;
        }

        return $DB->record_exists('rcommon_publisher', array('id' => $publisherid, 'username' => $user, 'password' => $passwd));
    }

}

class rcommon_level {

    public static function get_by_format($format) {
        global $DB;
        $emptysql = $DB->sql_isempty('rcommon_level', 'code', false, false);
        $sql = "SELECT * FROM {rcommon_level}
            WHERE id IN (SELECT DISTINCT levelid FROM {rcommon_books} WHERE format = :format) AND NOT $emptysql ORDER BY code, name";

        return $DB->get_records_sql($sql, array('format' => $format));
    }

    public static function get_create_by_code($code) {
        global $DB;

        if ($code == null or empty($code)) {
            $code = 'SENSE NIVELL';
        }

		if (is_numeric($code)) {
			return $code;
		}

		if (!$levelid = $DB->get_field('rcommon_level', 'id', array('code' => $code))) {
			// If the level does not exist create it
			$record = new stdClass();
			$record->name = $code;
			$record->code = $code;
			$record->timemodified = time();
			$record->timecreated = $record->timemodified;
			$levelid = $DB->insert_record('rcommon_level', $record);
		}

        return $levelid;
    }
}

class rcommon_book{
    public static $allowedformats = array('webcontent');

    public static function get($id) {
        global $DB;
        return $DB->get_record('rcommon_books', array('id' => $id));
    }

    public static function get_by_level($levelid, $format = false) {
        global $DB;

        $emptysql = $DB->sql_isempty('rcommon_books', 'rb.isbn', false, false);
        $sql = "SELECT rb.*, rp.name as publisher FROM {rcommon_books} rb
                    INNER JOIN {rcommon_publisher} rp ON rb.publisherid = rp.id
                    WHERE rb.levelid = :levelid AND rb.format = :format AND NOT $emptysql
                    ORDER BY rp.name, rb.name ASC";
        $params = array('levelid' => $levelid);
        if ($format) {
            $params['format'] = $format;
        }
        return $DB->get_records_sql($sql, $params);
    }

    public static function check_auth($bookid, $user, $passwd) {
        global $DB;

        if (!$publisherid = $DB->get_field('rcommon_books', 'publisherid', array('id' => $bookid))) {
            return false;
        }
        return rcommon_publisher::check_auth($publisherid, $user, $passwd);
    }

    public static function add_update($record) {
        global $DB;

        if (empty($record->isbn)) {
            return false;
        }

        // Check that book name isn't larger than 255 characters
        if (core_text::strlen($record->name) > 255) {
            $record->name = core_text::substr($record->name, 0, 255);
        }

        // Check that book summary isn't larger than 1024 characters
        if (core_text::strlen($record->summary) > 1024) {
            $record->summary = core_text::substr($record->summary, 0, 1024);
        }

        $record->format = core_text::strtolower($record->format);
        $record->levelid = rcommon_level::get_create_by_code($record->levelid);

        // Test that de obligatory fields aren't empty
        $obligatoryarray = array('isbn', 'levelid', 'format', 'summary');
        foreach ($obligatoryarray as $value) {
            if (empty($record->$value)) {
                throw new Exception('Required parameter <strong>'.$value.' not found!</strong>');
            }
        }

        $record->timemodified = time();
        if (!$bookid = $DB->get_field('rcommon_books', 'id', array('isbn' => $record->isbn))) {
            $record->timecreated = $record->timemodified;
            return $DB->insert_record('rcommon_books', $record);
        } else {
            $record->id = $bookid;
            if ($DB->update_record('rcommon_books', $record)) {
                return $bookid;
            }
        }
        return false;
    }

    public static function clean($bookid, $time) {
        global $DB;
        $units2delete = $DB->get_records_select('rcommon_books_units', 'bookid = :bookid AND timemodified < :time', array('bookid' => $bookid, 'time' => $time));
        foreach ($units2delete as $unit) {
            if (!$DB->record_exists('rcontent', array('bookid' => $bookid, 'unitid' => $unit->id))) {
                $DB->delete_records('rcommon_books_units', array('id' => $unit->id));
            }
        }
        $acts2delete = $DB->get_records_select('rcommon_books_activities', 'bookid = :bookid AND timemodified < :time', array('bookid' => $bookid, 'time' => $time));
        foreach ($acts2delete as $act) {
            if (!$DB->record_exists('rcontent', array('bookid' => $bookid, 'unitid' => $act->unitid, 'activityid' => $act->id))) {
                $DB->delete_records('rcommon_books_activities', array('id' => $act->id));
            }
        }
    }

    public static function delete($bookid, $publisherid) {
        global $DB;
        $book = $DB->get_record('rcommon_books', array('id' => $bookid, 'publisherid' => $publisherid));
        if ($book) {
            $DB->delete_records('rcommon_books', array('id' => $bookid, 'publisherid' => $publisherid));
            $DB->delete_records('rcommon_books_units', array('bookid' => $bookid));
            $DB->delete_records('rcommon_books_activities', array('bookid' => $bookid));
            return true;
        }
        return false;
    }
}

class rcommon_unit{

    public static function get($id) {
        global $DB;
        return $DB->get_record('rcommon_books_units', array('id' => $id));
    }

    public static function get_from_code($code, $bookid) {
        global $DB;
        return $DB->get_record('rcommon_books_units', array('code' => $code, 'bookid' => $bookid));
    }

    public static function get_by_book($bookid) {
        global $DB;
        $emptysql = $DB->sql_isempty('rcommon_books_units', 'code', false, false);
        return $DB->get_records_select('rcommon_books_units', "bookid = :bookid AND NOT $emptysql", array('bookid' => $bookid), 'sortorder, name');
    }

    public static function add_update($record) {
        global $DB;

        if (empty($record->code) || empty($record->bookid)) {
            return false;
        }

        // Check that unit name isn't larger than 200 characters
        if (core_text::strlen($record->name) > 200) {
            $record->name = core_text::substr($record->name, 0, 200);
        }

        // Check that unit summary isn't larger than 1024 characters
        if (core_text::strlen($record->summary) > 1024) {
            $record->summary = core_text::substr($record->summary, 0, 1024);
        }

        $record->timemodified = time();
        if (!$unitid = $DB->get_field('rcommon_books_units', 'id', array('bookid' => $record->bookid, 'code' => $record->code))) {
            $record->timecreated = $record->timemodified;
            return $DB->insert_record('rcommon_books_units', $record);
        } else {
            $record->id = $unitid;
            if ($DB->update_record('rcommon_books_units', $record)) {
                return $unitid;
            }
        }
        return false;
    }
}

class rcommon_activity{

    public static function get($id) {
        global $DB;
        return $DB->get_record('rcommon_books_activities', array('id' => $id));
    }

    public static function get_from_code($code, $unitid, $bookid) {
        global $DB;
        return $DB->get_record('rcommon_books_activities', array('code' => $code, 'unitid' => $unitid, 'bookid' => $bookid));
    }

    public static function get_by_unit($unitid, $bookid) {
        global $DB;
        $emptysql = $DB->sql_isempty('rcommon_books_activities', 'code', false, false);
        return $DB->get_records_select('rcommon_books_activities', "bookid = :bookid AND unitid = :unitid AND NOT $emptysql",
            array('bookid' => $bookid, 'unitid' => $unitid), 'sortorder, name');
    }

    public static function add_update($record) {
        global $DB;

        if (empty($record->code) || empty($record->bookid) || empty($record->unitid)) {
            return false;
        }

        // Check that unit activity isn't larger than 200 characters
        if (core_text::strlen($record->name) > 200) {
            $record->name = core_text::substr($record->name, 0, 200);
        }

        // Check that unit summary isn't larger than 1024 characters
        if (core_text::strlen($record->summary) > 1024) {
            $record->summary = core_text::substr($record->summary, 0, 1024);
        }

        $record->timemodified = time();

        $params = array('bookid' => $record->bookid, 'unitid' => $record->unitid, 'code' => $record->code);
        if (!$activityid = $DB->get_field('rcommon_books_activities', 'id', $params)) {
            $record->timecreated = $record->timemodified;
            return $DB->insert_record('rcommon_books_activities', $record);
        } else {
            $record->id = $activityid;
            if ($DB->update_record('rcommon_books_activities', $record)) {
                return $activityid;
            }
        }
        return false;
    }
}


class credentials{

    public static function get($id) {
        global $DB;
        $cred = $DB->get_record('rcommon_user_credentials', array('id' => $id));

        if (!$cred || !self::check_empty_credential($cred)) {
            return false;
        }
        return $cred;
    }

    public static function get_by_user_isbn($userid, $isbn) {
        global $DB;

        $cred = $DB->get_record('rcommon_user_credentials', array('isbn' => $isbn, 'euserid' => $userid));
        if (!$cred || !self::check_empty_credential($cred)) {
            return false;
        }
        return $cred;
    }

    static function add($isbn, $credentials, $username_or_id = false){
        global $DB;

        $record               	= new stdClass();
        $record->isbn 			= $isbn;
	    $record->credentials 	= $credentials;

        if ($username_or_id) {
            if(!is_numeric($username_or_id)){
                $record->euserid = $DB->get_field('user','id',array('username'=>$username_or_id));
                if(!$record->euserid) return false;
            } else if($username_or_id !== false){
                $record->euserid = $username_or_id;
            }
        } else {
            $record->euserid = false;
        }

        $record->timemodified = time();
	    $record->timecreated  = $record->timemodified;
        return $DB->insert_record('rcommon_user_credentials', $record);
    }

    static function update($id, $isbn, $credentials, $username_or_id = false){
        global $DB;

        $record               	= new stdClass();
        $record->id 			= $id;
        $record->isbn 			= $isbn;
	    $record->credentials 	= $credentials;

        if(is_string($username_or_id)){
            $record->euserid = $DB->get_field('user','id',array('username'=>$username_or_id));
            if(!$record->euserid) return false;
        } else if($username_or_id !== false){
            $record->euserid = $username_or_id;
        }

        $record->timemodified = time();
        return $DB->update_record('rcommon_user_credentials', $record);
    }

    static function assign($id, $userid){
        global $DB;

        $record               = new StdClass();
        $record->id           = $id;
        $record->euserid      = $userid;
        $record->timemodified = time();

        return $DB->update_record('rcommon_user_credentials', $record);
    }

    static function unassign($id){
        global $DB;

        $record               = new StdClass();
        $record->id           = $id;
        $record->euserid      = 0;
        $record->timemodified = time();

        return $DB->update_record('rcommon_user_credentials', $record);
    }

    static function check_empty_credential($credential){
        if ($credential->credentials == ' ' || empty($credential->credentials)){
            self::delete($credential->id);
            return false;
        }
        return true;
    }

    static function bulk_assign_users($bookisbn, array $ids, array $users){
        global $DB;

        $i = 0;
        $ids_where = implode(',', $ids);

        $params = array('isbn'=>$bookisbn);
        $empty_credentials = $DB->get_records_select('rcommon_user_credentials', "isbn = :isbn AND euserid = 0 AND id IN ({$ids_where})", $params);
        if ($empty_credentials){
            foreach($empty_credentials as $credential_id => $c){
                if ($i > count($users) - 1){
                    break;
                }

                $params['euserid'] = $users[$i];
                if ($existing_cred = $DB->get_record('rcommon_user_credentials', $params)){
                    // Unassign empty credentials
                    if(!self::check_empty_credential($existing_cred)){
                        continue;
                    }
                }

                if (self::assign($credential_id, $users[$i])){
                    $i++;
                }
            }
        }

        return $i;
    }

    static function bulk_unassign_users($bookisbn, array $users){
        global $DB;

        $i = 0;
        foreach ($users as $userid){
            $credid = $DB->get_field('rcommon_user_credentials', 'id', array('isbn'=>$bookisbn, 'euserid' => $userid));
            if ($credid){
                if(self::unassign($credid)){
                    $i++;
                }
            }
        }
        return $i;
    }

    static function bulk_unassign(array $ids){
        global $DB;

        $ids_where = implode(',', $ids);
        return $DB->execute("UPDATE {rcommon_user_credentials} SET euserid = 0, timemodified = '" . time() . "' WHERE id IN ({$ids_where})");
    }

    static function bulk_delete(array $ids){
        global $DB;

        $ids_where = implode(',', $ids);
        return $DB->execute("DELETE FROM {rcommon_user_credentials} WHERE id IN ({$ids_where})");
    }

    static function delete($id){
        global $DB;
        return $DB->delete_records('rcommon_user_credentials', array('id' => $id));
    }

    /**
     * Validation callback function - verified the column line of csv file.
     * Converts standard column names to lowercase.
     * @param csv_import_reader $cir
     * @param array $fields standard user fields
     * @param moodle_url $returnurl return url in case of any error
     * @return array list of fields
     */
    static function validate_columns(csv_import_reader $cir, $fields, moodle_url $returnurl) {
        $columns = $cir->get_columns();

        $ignoredfields = $fields['ignored'];
        $stdfields = array_merge($fields['required'], $fields['optional']);

        if (empty($columns)) {
            $cir->close();
            $cir->cleanup();
            print_error('cannotreadtmpfile', 'error', $returnurl);
        }
        if (count($columns) < 2) {
            $cir->close();
            $cir->cleanup();
            print_error('csvfewcolumns', 'error', $returnurl);
        }

        // test columns
        $processed = array();
        foreach ($columns as $key => $unused) {
            $field = $columns[$key];
            $lcfield = core_text::strtolower($field);
            if (in_array($field, $stdfields) or in_array($lcfield, $stdfields)) {
                // standard fields are only lowercase
                $newfield = $lcfield;
            } else if (in_array($field, $ignoredfields) or in_array($lcfield, $ignoredfields)) {
                continue;
            } else {
                $cir->close();
                $cir->cleanup();
                print_error('invalidfieldname', 'error', $returnurl, $field);
            }
            if (in_array($newfield, $processed)) {
                $cir->close();
                $cir->cleanup();

            }
            $processed[$key] = $newfield;
        }

        foreach ($fields['required'] as $field) {
            $lcfield = core_text::strtolower($field);
            if (!in_array($lcfield, $processed)) {
                $cir->close();
                $cir->cleanup(true);
                print_error('fieldrequired', 'error', $returnurl, $lcfield);
            }
        }

        return $processed;
    }
}

class credentials_progress_tracker {
    private $_row;
    public $columns = array('line', 'isbn', 'credential', 'username', 'userid', 'status');

    /**
     * Print table header.
     * @return void
     */
    public function start() {
        $ci = 0;
        echo '<table id="credentialsresults" class="generaltable boxaligncenter flexible-wrap" summary="'.get_string('keymanager_import_title', 'local_rcommon').'">';
        echo '<tr class="heading r0">';
        echo '<th class="header c'.$ci++.'" scope="col">'.get_string('csvline', 'local_rcommon').'</th>';
        echo '<th class="header c'.$ci++.'" scope="col">'.get_string('book', 'local_rcommon').'</th>';
        echo '<th class="header c'.$ci++.'" scope="col">'.get_string('credential', 'local_rcommon').'</th>';
        echo '<th class="header c'.$ci++.'" scope="col">'.get_string('username').'</th>';
        echo '<th class="header c'.$ci++.'" scope="col">UserID</th>';
        echo '<th class="header c'.$ci++.'" scope="col">'.get_string('status').'</th>';
        echo '</tr>';
        $this->_row = null;
    }

    /**
     * Flush previous line and start a new one.
     * @return void
     */
    public function flush() {
        if (empty($this->_row) or empty($this->_row['line']['normal'])) {
            // Nothing to print - each line has to have at least number
            $this->_row = array();
            foreach ($this->columns as $col) {
                $this->_row[$col] = array('normal'=>'', 'info'=>'', 'warning'=>'', 'error'=>'');
            }
            return;
        }
        $ci = 0;
        $ri = 1;
        echo '<tr class="r'.$ri.'">';
        foreach ($this->_row as $key=>$field) {
            foreach ($field as $type=>$content) {
                if ($field[$type] !== '') {
                    $field[$type] = '<span class="credentials'.$type.'">'.$field[$type].'</span>';
                } else {
                    unset($field[$type]);
                }
            }
            echo '<td class="cell c'.$ci++.'">';
            if (!empty($field)) {
                echo implode('<br />', $field);
            } else {
                echo '&nbsp;';
            }
            echo '</td>';
        }
        echo '</tr>';
        foreach ($this->columns as $col) {
            $this->_row[$col] = array('normal'=>'', 'info'=>'', 'warning'=>'', 'error'=>'');
        }
    }

    /**
     * Add tracking info
     * @param string $col name of column
     * @param string $msg message
     * @param string $level 'normal', 'warning' or 'error'
     * @param bool $merge true means add as new line, false means override all previous text of the same type
     * @return void
     */
    public function track($col, $msg, $level = 'normal', $merge = true) {
        if (empty($this->_row)) {
            $this->flush(); //init arrays
        }
        if (!in_array($col, $this->columns)) {
            debugging('Incorrect column:'.$col);
            return;
        }
        if ($merge) {
            if ($this->_row[$col][$level] != '') {
                $this->_row[$col][$level] .='<br />';
            }
            $this->_row[$col][$level] .= $msg;
        } else {
            $this->_row[$col][$level] = $msg;
        }
    }

    /**
     * Print the table end
     * @return void
     */
    public function close() {
        $this->flush();
        echo '</table>';
    }
}
