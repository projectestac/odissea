<?php

//XTEC ************* ADD -> New page to run all the synchronization
//2011.01.25 @mmartinez

class uu_progress_tracker {
    var $_row;
    var $columns;
    var $return;
    var $print;
    var $enrolments;

    function uu_progress_tracker($enrolments = false) {
//XTEC *********** AFEGIT ->
//2011.01.26 @mmartinez
    	$this->return = array();
    	$this->print = '';
    	$this->enrolments = $enrolments;
//************* FI

    }

    function init() {
        $ci = 0;
//XTEC ************ AFEGIT ->
//2011.01.26 @mmartinez
        if (!$this->enrolments){
        	$this->columns = array('status', 'line', 'id', 'username', 'firstname', 'lastname', 'email', 'password', 'auth', 'enrolments', 'deleted', 'result');
//************ FI
//XTEC *********** MODIFICAT ->
//2011.01.26 @mmartinez
	        $this->print .= '<table id="uuresults" class="generaltable boxaligncenter" summary="'.get_string('uploadusersresult', 'admin').'">';
	        $this->print .= '<tr class="heading r0">';
	        $this->print .= '<th class="header c'.$ci++.'" scope="col">'.get_string('status').'</th>';
	        $this->print .= '<th class="header c'.$ci++.'" scope="col">'.get_string('uucsvline', 'admin').'</th>';
	        $this->print .= '<th class="header c'.$ci++.'" scope="col">ID</th>';
	        $this->print .= '<th class="header c'.$ci++.'" scope="col">'.get_string('username').'</th>';
	        $this->print .= '<th class="header c'.$ci++.'" scope="col">'.get_string('firstname').'</th>';
	        $this->print .= '<th class="header c'.$ci++.'" scope="col">'.get_string('lastname').'</th>';
	        $this->print .= '<th class="header c'.$ci++.'" scope="col">'.get_string('email').'</th>';
	        $this->print .= '<th class="header c'.$ci++.'" scope="col">'.get_string('password').'</th>';
	        $this->print .= '<th class="header c'.$ci++.'" scope="col">'.get_string('authentication').'</th>';
	        $this->print .= '<th class="header c'.$ci++.'" scope="col">'.get_string('enrolments').'</th>';
	        $this->print .= '<th class="header c'.$ci++.'" scope="col">'.get_string('delete').'</th>';
	        $this->print .= '<th class="header c'.$ci++.'" scope="col">'.get_string('result', 'block_odissea_gtaf_synchronization').'</th>';
	        $this->print .= '</tr>';
//************ ORIGINAL
            /*echo '<table id="uuresults" class="generaltable boxaligncenter" summary="'.get_string('uploadusersresult', 'admin').'">';
	        echo '<tr class="heading r0">';
	        echo '<th class="header c'.$ci++.'" scope="col">'.get_string('status').'</th>';
	        echo '<th class="header c'.$ci++.'" scope="col">'.get_string('uucsvline', 'admin').'</th>';
	        echo '<th class="header c'.$ci++.'" scope="col">ID</th>';
	        echo '<th class="header c'.$ci++.'" scope="col">'.get_string('username').'</th>';
	        echo '<th class="header c'.$ci++.'" scope="col">'.get_string('firstname').'</th>';
	        echo '<th class="header c'.$ci++.'" scope="col">'.get_string('lastname').'</th>';
	        echo '<th class="header c'.$ci++.'" scope="col">'.get_string('email').'</th>';
	        echo '<th class="header c'.$ci++.'" scope="col">'.get_string('password').'</th>';
	        echo '<th class="header c'.$ci++.'" scope="col">'.get_string('authentication').'</th>';
	        echo '<th class="header c'.$ci++.'" scope="col">'.get_string('enrolments').'</th>';
	        echo '<th class="header c'.$ci++.'" scope="col">'.get_string('delete').'</th>';
	        
	        echo '</tr>';*/
//************ FI

//XTEC ************ AFEGIT ->
//2011.01.26 @mmartinez
        	$this->return[0] =  array('status', 'uucsvline', 'id', 'username', 'firstname', 'lastname', 'email', 'password', 'authentication', 'enrolments', 'delete', 'result');
        } else {
        	
        	$this->columns = array('status', 'line', 'id', 'username', 'firstname', 'lastname', 'operation', 'enrolments', 'result');
        	
    	    $this->print .= '<table id="uuresults" class="generaltable boxaligncenter" summary="'.get_string('uploadusersresult', 'admin').'">';
    	    $this->print .= '<tr class="heading r0">';
	        $this->print .= '<th class="header c'.$ci++.'" scope="col">'.get_string('status').'</th>';
	        $this->print .= '<th class="header c'.$ci++.'" scope="col">'.get_string('uucsvline', 'admin').'</th>';
	        $this->print .= '<th class="header c'.$ci++.'" scope="col">ID</th>';
	        $this->print .= '<th class="header c'.$ci++.'" scope="col">'.get_string('username').'</th>';
	        $this->print .= '<th class="header c'.$ci++.'" scope="col">'.get_string('firstname').'</th>';
	        $this->print .= '<th class="header c'.$ci++.'" scope="col">'.get_string('lastname').'</th>';
	        $this->print .= '<th class="header c'.$ci++.'" scope="col">'.get_string('operation', 'block_odissea_gtaf_synchronization').'</th>';
	        $this->print .= '<th class="header c'.$ci++.'" scope="col">'.get_string('enrolments').'</th>';
	        $this->print .= '<th class="header c'.$ci++.'" scope="col">'.get_string('result', 'block_odissea_gtaf_synchronization').'</th>';
	        $this->print .= '</tr>';
	        
	        $this->return[0] = array('status', 'uucsvline', 'id', 'username', 'firstname', 'lastname', 'operation', 'enrolments', 'result');
        }
//************* FI
        $this->_row = null;
    }

    function flush() {
        if (empty($this->_row) or empty($this->_row['line']['normal'])) {
            $this->_row = array();
            foreach ($this->columns as $col) {
                $this->_row[$col] = array('normal'=>'', 'info'=>'', 'warning'=>'', 'error'=>'');
            }
            return;
        }
        $ci = 0;
        $ri = 1;
//XTEC *********** MODIFICAT ->
//2011.01.26 @mmartinez
        $this->print .= '<tr class="r'.$ri++.'">';
//************ ORIGINAL
        //echo '<tr class="r'.$ri++.'">';
//************* FI
//XTEC *********** ADDED ->
        $str = '';
//************* FI

        foreach ($this->_row as $field) {
        	$str = ' ';
            foreach ($field as $type=>$content) {
                if ($field[$type] !== '') {
//XTEC *********** AFEGIT ->
//2011.01.26 @mmartinez
                    $str = $field[$type];
//*********** FI

                    $field[$type] = '<span class="uu'.$type.'">'.$field[$type].'</span>';
                } else {
                    unset($field[$type]);
                }
            }
//XTEC *********** MODIFICAT ->
//2011.01.26 @mmartinez
            $this->print .= '<td class="cell c'.$ci++.'">';
//************ ORIGINAL
            //echo '<td class="cell c'.$ci++.'">';
//************* FI

//XTEC ************ AFEGIT ->
//2011.01.26 @mmartinez
            if (!empty($str)){
                $return[] = str_replace(';', ',', str_replace('&quot;', '"', $str));            
                unset($str);
            }
//************** FI

            if (!empty($field)) {
//XTEC *********** MODIFICAT ->
//2011.01.26 @mmartinez
                $this->print .= implode('<br />', $field);
//************ ORIGINAL
            //echo implode('<br />', $field);
//************* FI

            } else {
//XTEC *********** MODIFICAT ->
//2011.01.26 @mmartinez
                $this->print .= '&nbsp;';
//************ ORIGINAL
            //echo '&nbsp;';
//************* FI

            }
//XTEC *********** MODIFICAT ->
//2011.01.26 @mmartinez
            $this->print .= '</td>';
//************ ORIGINAL
            //echo '</td>';
//************* FI

        }
//XTEC *********** MODIFICAT ->
//2011.01.26 @mmartinez
        $this->print .= '</tr>';
//************ ORIGINAL
            //echo '</tr>';
//************* FI

        $this->return[] = $return;
        unset($return);

        foreach ($this->columns as $col) {
            $this->_row[$col] = array('normal'=>'', 'info'=>'', 'warning'=>'', 'error'=>'');
        }
    }

    function track($col, $msg, $level='normal', $merge=true) {
        if (empty($this->_row)) {
            $this->flush(); //init arrays
        }
        if (!in_array($col, $this->columns)) {
            debugging('Incorrect column:'.$col);
            return;
        }
        
//XTEC *********** AFEGIT -> Add $level to the end of the messages with errors or warnings, to find problems quickly
//2011.05.16 @mmartinez       
        if ($level != 'normal'){
        	$msg .= " (".$level.")";
        }
//*********** FI
        
        if ($merge) {
            if ($this->_row[$col][$level] != '') {
                $this->_row[$col][$level] .='<br />';
            }
            $this->_row[$col][$level] .= s($msg);
        } else {
            $this->_row[$col][$level] = s($msg);
        }
//XTEC ********** AFEGIT -> Add error or warning to the column result if it happend
//2011.05.16 @mmartinez
        if ($level == 'error' && $this->_row["result"]["error"] == ''){
        	$this->_row["result"]["error"] = 'error';
        	//clean warning
        	if ($this->_row["result"]["warning"] != ''){
        		$this->_row["result"]["warning"] = '';
        	}
        } else if ($level == 'warning' && $this->_row["result"]["error"] == ''){
        	$this->_row["result"]["warning"] = 'warning';
        }
//********** FI

        
        
        
        
    }

    function close() {
//XTEC *********** MODIFICAT ->
//2011.01.26 @mmartinez
        $this->print .= '</table>';
//************ ORIGINAL
            //echo '</table>';
//************* FI

//XTEC ************ AFEGIT ->
//2011.01.26 @mmartinez
        return array($this->return, $this->print);
//************* FI
    }
}

/**
 * Validation callback function - verified the column line of csv file.
 * Converts column names to lowercase too.
 */
function validate_user_upload_columns(&$columns) {
    global $STD_FIELDS, $PRF_FIELDS;

    if (count($columns) < 2) {
        return get_string('csvfewcolumns', 'error');
    }

    // test columns
    $processed = array();
    foreach ($columns as $key=>$unused) {
        $columns[$key] = strtolower($columns[$key]); // no unicode expected here, ignore case
        $field = $columns[$key];
        if (!in_array($field, $STD_FIELDS) && !in_array($field, $PRF_FIELDS) &&// if not a standard field and not an enrolment field, then we have an error
            !preg_match('/^course\d+$/', $field) && !preg_match('/^group\d+$/', $field) &&
            !preg_match('/^type\d+$/', $field) && !preg_match('/^role\d+$/', $field)) {
            return get_string('invalidfieldname', 'error', $field);
        }
        if (in_array($field, $processed)) {
            return get_string('csvcolumnduplicates', 'error');
        }
        $processed[] = $field;
    }
    return true;
}

/**
 * Increments username - increments trailing number or adds it if not present.
 * Varifies that the new username does not exist yet
 * @param string $username
 * @return incremented username which does not exist yet
 */
function increment_username($username, $mnethostid) {
    if (!preg_match_all('/(.*?)([0-9]+)$/', $username, $matches)) {
        $username = $username.'2';
    } else {
        $username = $matches[1][0].($matches[2][0]+1);
    }

    if (record_exists('user', 'username', addslashes($username), 'mnethostid', addslashes($mnethostid))) {
        return increment_username($username, $mnethostid);
    } else {
        return $username;
    }
}

/**
 * Check if default field contains templates and apply them.
 * @param string template - potential tempalte string
 * @param object user object- we need username, firstname and lastname
 * @return string field value
 */
function process_template($template, $user) {
    if (strpos($template, '%') === false) {
        return $template;
    }

    // very very ugly hack!
    global $template_globals;
    $template_globals = new object();
    $template_globals->username  = isset($user->username)  ? $user->username  : '';
    $template_globals->firstname = isset($user->firstname) ? $user->firstname : '';
    $template_globals->lastname  = isset($user->lastname)  ? $user->lastname  : '';

    $result = preg_replace_callback('/(?<!%)%([+-~])?(\d)*([flu])/', 'process_template_callback', $template);

    $template_globals = null;

    if (is_null($result)) {
        return $template; //error during regex processing??
    } else {
        return $result;
    }
}

/**
 * Internal callback function.
 */
function process_template_callback($block) {
    global $template_globals;
    $textlib = textlib_get_instance();
    $repl = $block[0];

    switch ($block[3]) {
        case 'u': $repl = $template_globals->username; break;
        case 'f': $repl = $template_globals->firstname; break;
        case 'l': $repl = $template_globals->lastname; break;
    }
    switch ($block[1]) {
        case '+': $repl = $textlib->strtoupper($repl); break;
        case '-': $repl = $textlib->strtolower($repl); break;
        case '~': $repl = $textlib->strtotitle($repl); break;
    }
    if (!empty($block[2])) {
        $repl = $textlib->substr($repl, 0 , $block[2]);
    }

    return $repl;
}

/**
 * Returns list of auth plugins that are enabled and known to work.
 */
function uu_allowed_auths() {
    global $CFG;

    // only following plugins are guaranteed to work properly
    // TODO: add support for more plguins in 2.0
    $whitelist = array('manual', 'nologin', 'none', 'email');
    $plugins = get_enabled_auth_plugins();
    $choices = array();
    foreach ($plugins as $plugin) {
        $choices[$plugin] = auth_get_plugin_title ($plugin);
    }

    return $choices;
}

/**
 * Returns list of non administrator roles
 */
function uu_allowed_roles($shortname=false) {
    global $CFG;

    $roles = get_all_roles();
    $choices = array();
    foreach($roles as $role) {
        if ($shortname) {
            $choices[$role->id] = $role->shortname;
        } else {
            $choices[$role->id] = format_string($role->name);
        }
    }
    // get rid of all admin roles
    if ($adminroles = get_roles_with_capability('moodle/site:doanything', CAP_ALLOW)) {
        foreach($adminroles as $adminrole) {
            unset($choices[$adminrole->id]);
        }
    }

    return $choices;
}

/**
 * Returns a pair of arrays.  The first is the set of roleids, indexed by
 * their shortnames.  The second is the set of shortnames that have
 * mappings, indexed by those mappings.
 *
 * @return array ($roles, $rolemap)
 */
function get_roles() {
    // Get a list of all the roles in the database, indexed by their short names.
    $roles = get_records('role', '', '', '', 'shortname, id');
    array_walk($roles, create_function('&$value', '$value = $value->id;'));

    // Get any name mappings. These will be of the form 'map_shortname' => 'flatfilename'.
    $ffconfig = get_config('enrol_flatfile');
    $rolemap = array();
    if (is_array($ffconfig)){
	    foreach($ffconfig as $name => $value) {
	        if (strpos($name, 'map_') === 0 && isset($roles[$key = substr($name, 4)])) {
	            $rolemap[$value] = $key;
	        }
	    }
    }
    return array($roles, $rolemap);
}

//*********** FI
?>