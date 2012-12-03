<?php

//XTEC ************* ADD -> New page to run all the synchronization
//2011.01.25 @mmartinez

include_once('../../config.php');
require_once('lib/ftp4p.class.php');

class odissea_gtaf_synchronizer{
	
	var $cron = false, $inputpath = '', $outputpath = '', $returnurl = '', $isfolders = true, $errors, $ftp, $files;
	
	function odissea_gtaf_synchronizer($cron = false){
		
		//check if user have privileges to run the synchro
		//require_capability('moodle/site:uploadusers', get_context_instance(CONTEXT_SYSTEM));
		
		//set constants
		define('SYNCHRO_BACKUPFOLDER', 'backup');      //folder inside inputpath to put files backups
		define('SYNCHRO_STUDENT', 'alumnes');
		define('SYNCHRO_TEACHERS', 'professors');
		define('SYNCHRO_ENROLMENTS', 'baixa_alumnes');
		
		define('SYNCHRO_ENCODING', 'utf8');
		define('SYNCHRO_OUTPUTDELIMETER', ';');
		define('SYNCHRO_DELIMETERNAME', 'semicolon'); //comma: ","
		                                              //semicolon: ";"
		                                              //colon: ":"
		                                              //tab: "\t"
		                                              
		define('SYNCHRO_UUTYPE', '2');                //0: Add new only, skip existing users
		                                              //1: Add all, append counter to usernames if needed
		                                              //2: Add new and update existing users
		                                              //3: Update existing users only
		define('SYNCHRO_UUUPDATETYPE', '1');          //0: No changes
		                                              //1: Override with file
		                                              //2: Override with file and defaults
		                                              //3: Fill in missing from file and defaults
		define('SYNCHRO_UUPASSWORDNEW', '0');         //0: Field required in file
		                                              //1: Create password if needed
		define('SYNCHRO_UUPASSWORDOLD', '0');         //0: No changes
		                                              //1: Update
		define('SYNCHRO_UUALLOWRENAMES', '0');        //0: No
		                                              //1: Yes
		define('SYNCHRO_UUALLOWDELETES', '0');        //0: No
		                                              //1: Yes
		define('SYNCHRO_UUNOEMAILDUPLICATES', '1');   //0: No
		                                              //1: Yes
		define('SYNCHRO_UUBULK', '0');                //0: No
		                                              //1: New users
		                                              //2: Update users
		                                              //3: All users
		define('SYNCHRO_EMAILDISPLAY', '0');          //0: Hide my email address from everyone
		                                              //1: Allow everyone to see my email address
		                                              //2: Allow only other course members to see my email address
		define('SYNCHRO_EMAILSTOP', '0');             //0: This email address is enabled
		                                              //1: This email address is disabled
		define('SYNCHRO_EMAILFORMAT', '1');           //0: Plain text format
		                                              //1: Pretty HTML format
		define('SYNCHRO_EMAILDIGEST', '2');           //0: No digest (single email per forum post)
		                                              //1: Complete (daily email with full posts)
		                                              //2: Subjects (daily email with subjects only)
		define('SYNCHRO_FORUMAUTOSUBSCRIBE', '1');    //0: Yes: when I post, subscribe me to that forum
		                                              //1: No: don't automatically subscribe me to forums
	    define('SYNCHRO_TRACKFORUMS', '1');           //0: No: Do not monitor the messages I've seen
	                                                  //1: Yes: highlight new messages
		define('SYNCHRO_AJAX', '1');                  //0: No: use basic web features
		                                              //1: Yes: use advanced web features		
		define('SYNCHRO_COUNTRY', 'CT');
		define('SYNCHRO_TIMEZONE', '99');             //99: Server's local time
		define('SYNCHRO_LANG', 'ca_utf8');
		//SYNCHRO_UULEGACY1: ORIGINAL STUDENT (TypeN=1)
		define('SYNCHRO_UULEGACY1', '5');             //0: Default role on course
		                                              //2: coursecreator
		                                              //3: editingteacher
		                                              //4: teacher
		                                              //5: student
		                                              //6: guest
		                                              //7: user
		//SYNCHRO_UULEGACY2: ORIGINAL TEACHER (TypeN=2)
		define('SYNCHRO_UULEGACY2', '3');             //2: coursecreator
		                                              //3: editingteacher
		                                              //4: teacher
		                                              //5: student
		                                              //6: guest
		                                              //7: user
	    //SYNCHRO_UULEGACY3: NON-EDITING TEACHER (TypeN=3)
	    define('SYNCHRO_UULEGACY3', '4');             //2: coursecreator
		                                              //3: editingteacher
		                                              //4: teacher
		                                              //5: student
		                                              //6: guest
		                                              //7: user
		
		define('UU_ADDNEW', 0);
        define('UU_ADDINC', 1);
        define('UU_ADD_UPDATE', 2);
        define('UU_UPDATE', 3);
        
        //define enrolments constants
        define ('SYNCHRO_MAILSTUDENTS', '0');         //0: No
                                                      //1: Yes
        define ('SYNCHRO_MAILTEACHERS', '0');         //0: No
                                                      //1: Yes
        define ('SYNCHRO_MAILADMINS', '1');           //0: No
                                                      //1: Yes
		//set system configuration
		@set_time_limit(1800); // 30 minuts should be enough
        @raise_memory_limit('256M');
        
		//set parameters
		global $CFG;
		
		$this->inputpath  = $CFG->dataroot.'/'.$CFG->synchrooutputfolderpath.'/temp';
		$this->outputpath = $CFG->dataroot.'/'.$CFG->synchrooutputfolderpath;
		$this->returnurl  = $CFG->wwwroot.'/admin/settings.php?section=blocksettingodissea_gtaf_synchronization';
		
		$this->isfolders = true;  //variable that determines if folders path exits or not
		$this->errors    = array();
		$this->iscron    = $cron;  // variable that determines if visual aspect are shown or not
		
		//check if there are connection with espina
		$this->ftp = new ftp4p($CFG->synchroinput_host, $CFG->synchroinput_user, $CFG->synchroinput_pass, true, true);
//XTEC ********** MODIFICAT -> Fixed bug when ftp dir is empty
//2011.09.12 @mmartinez        
        $this->files = $this->ftp->get_dir_list('/'.$CFG->synchroinput_path);
		if ($this->files === false){
//*********** ORIGINAL
        //if (!$this->files = $this->ftp->get_dir_list('/'.$CFG->synchroinput_path)){
//*********** FI
        	$this->isfolders = false;
			$this->errors[]  = get_string('ftperror', 'block_odissea_gtaf_synchronization');
        }
		//check if isset output folder
	    if (!is_dir($this->outputpath)){
	    	if (!$this->make_upload_directory($this->outputpath)){
			    $this->isfolders = false;
			    $this->errors[] = get_string('outputfolderpatherror', 'block_odissea_gtaf_synchronization');
	    	}
		}
        
		//check if isset input folder
		if (!is_dir($this->inputpath)){
			if (!$this->make_upload_directory($this->inputpath)){
			    $this->isfolders = false;
			    $this->errors[] = get_string('inputfolderpatherror', 'block_odissea_gtaf_synchronization');
			}
		}
		
	    //check if isset backup folder
        if (!is_dir($this->outputpath.'/'.SYNCHRO_BACKUPFOLDER)){
		    if (!$this->make_upload_directory($this->outputpath.'/'.SYNCHRO_BACKUPFOLDER)){
			    $this->isfolders = false;
			    $this->errors[] = get_string('inputbackupfolderpatherror', 'block_odissea_gtaf_synchronization');
		    }
		} 
	}
	
	function synchro (){
		
        //check if there are errors to avoid synchro
        if (!$this->isfolders){
        	if (!$this->iscron){
        		error(implode(', ', $this->errors), $this->returnurl);
        		return;
        	} else {
        	    return implode(', ', $this->errors);
        	}
        }
        
        //set global parameters
		global $CFG;
		
		//set require fields
		require_once($CFG->libdir.'/adminlib.php');
		require_once('lib/csvlib.class.php');
		require_once($CFG->dirroot.'/user/profile/lib.php');
		require_once('lib/lib.php');		

        //if we are on manual synchronization show visual aspect
        if (!$this->iscron){
            $systemcontext = get_context_instance(CONTEXT_SYSTEM);
        
        	// Print the header
            admin_externalpage_setup('manageblocks');
            admin_externalpage_print_header();
            print_heading(get_string('uploadusersresult', 'admin'));
        }
        
        //download the getted files list
        if (is_array($this->files)){
	        foreach ($this->files as $file){
	        	$fnamearray = explode("/", $file);
	        	$fname = $fnamearray[count($fnamearray)-1];
	        	$prefixfname = substr($fname, 0, strlen($fname)-16);
	        	if ($prefixfname == SYNCHRO_STUDENT || $prefixfname == SYNCHRO_TEACHERS || $prefixfname == SYNCHRO_ENROLMENTS ){
		        	if (!$this->ftp->get_file($file, $this->inputpath.'/'.$fname, false)){
		        		continue;
		        	}
		        	//delete the downloaded file
		        	$this->ftp->del_file($file);  //commented temporaly for don't delete them since it will be in production
	            }
	        }
        }

        

		//check if there are new files
		if ($files = opendir($this->inputpath)){
		    while (($file = readdir($files)) !== false){ 
			    if (is_file($this->inputpath.'/'.$file)){
				    //check files type to call the appropriate function
				    switch(substr($file, 0, strlen($file)-16)){
				    	case SYNCHRO_STUDENT: case SYNCHRO_TEACHERS:
				    		$this->synchro_users($file);
				    		break;
				    	case SYNCHRO_ENROLMENTS: 
				    		$this->synchro_enrolments($file);
				    		break;
				    }
			    }
		    }
		}
		
		//if we are on manual synchronization show visual aspect
		if (!$this->iscron){
		    if (isset($bulk) && $bulk) {
		        print_continue($bulknurl);
		    } else {
		        print_continue($this->returnurl);
		    }
			admin_externalpage_print_footer();
		}
		
		//return results
		if (empty($this->errors)){
		    return 'OK!';
		} else {
			return implode( ', ', $this->errors);
		}
	}
	
	function synchro_users($file){
		
		global $CFG, $STD_FIELDS, $PRF_FIELDS;
		
		$systemcontext = get_context_instance(CONTEXT_SYSTEM);
		
		// array of all valid fields for validation
        $STD_FIELDS = array('id', 'firstname', 'lastname', 'username', 'email', 
            'city', 'country', 'lang', 'auth', 'timezone', 'mailformat', 
            'maildisplay', 'maildigest', 'htmleditor', 'ajax', 'autosubscribe', 
            'mnethostid', 'institution', 'department', 'idnumber', 'skype', 
            'msn', 'aim', 'yahoo', 'icq', 'phone1', 'phone2', 'address', 
            'url', 'description', 'oldusername', 'emailstop', 'deleted',  
            'password');
		
        $PRF_FIELDS = array();
        
	    if ($prof_fields = get_records('user_info_field')) {
            foreach ($prof_fields as $prof_field) {
                $PRF_FIELDS[] = 'profile_field_'.$prof_field->shortname;
            }
            unset($prof_fields);
        }
        
        //set strings
		$struserrenamed             = get_string('userrenamed', 'admin');
		$strusernotrenamedexists    = get_string('usernotrenamedexists', 'error');
		$strusernotrenamedmissing   = get_string('usernotrenamedmissing', 'error');
		$strusernotrenamedoff       = get_string('usernotrenamedoff', 'error');
		$strusernotrenamedadmin     = get_string('usernotrenamedadmin', 'error');
		
		$struserupdated             = get_string('useraccountupdated', 'admin');
		$strusernotupdated          = get_string('usernotupdatederror', 'error');
		$strusernotupdatednotexists = get_string('usernotupdatednotexists', 'error');
		$strusernotupdatedadmin     = get_string('usernotupdatedadmin', 'error');
		
		$struseradded               = get_string('newuser');
		$strusernotadded            = get_string('usernotaddedregistered', 'error');
		$strusernotaddederror       = get_string('usernotaddederror', 'error');
		
		$struserdeleted             = get_string('userdeleted', 'admin');
		$strusernotdeletederror     = get_string('usernotdeletederror', 'error');
		$strusernotdeletedmissing   = get_string('usernotdeletedmissing', 'error');
		$strusernotdeletedoff       = get_string('usernotdeletedoff', 'error');
		$strusernotdeletedadmin     = get_string('usernotdeletedadmin', 'error');
		
		$strcannotassignrole        = get_string('cannotassignrole', 'error');
		$strduplicateusername       = get_string('duplicateusername', 'error');
		
		$struserauthunsupported     = get_string('userauthunsupported', 'error');
		$stremailduplicate          = get_string('useremailduplicate', 'error');
		
		$errorstr                   = get_string('error');
		   
        //Sincronization type
        $optype = SYNCHRO_UUTYPE;
        
        $createpasswords   = (SYNCHRO_UUPASSWORDNEW and $optype != UU_UPDATE);
        $updatepasswords   = (SYNCHRO_UUPASSWORDNEW and $optype != UU_ADDNEW and $optype != UU_ADDINC);
        $allowrenames      = (SYNCHRO_UUALLOWRENAMES and $optype != UU_ADDNEW and $optype != UU_ADDINC);
        $allowdeletes      = (SYNCHRO_UUALLOWDELETES and $optype != UU_ADDNEW and $optype != UU_ADDINC);
        $updatetype        = SYNCHRO_UUUPDATETYPE;
        $bulk              = SYNCHRO_UUBULK;
        $noemailduplicates = SYNCHRO_UUNOEMAILDUPLICATES;
        
        // verification moved to two places: after upload and into form2
	    $usersnew      = 0;
	    $usersupdated  = 0;
	    $userserrors   = 0;
	    $userswarning  = 0;
	    $deletes       = 0;
	    $deleteerrors  = 0;
	    $renames       = 0;
	    $renameerrors  = 0;
	    $usersskipped  = 0;
	    $weakpasswords = 0;
	    
	    //backup files
	    $i=1;
	    $filename = $file;
		while (file_exists($this->outputpath.'/'.SYNCHRO_BACKUPFOLDER.'/'.$filename)){
			if (substr($filename, strlen($filename)-5, 1) != ')'){
		        $filename = substr($filename, 0, strlen($filename)-4).'('.$i.').txt';
			} else {
			    $j = 6;
				while (substr($filename, strlen($filename)-($j+1), 1) != '('){
				    $j++;
				}
				$filename = substr($filename, 0, strlen($filename)-$j).$i.').txt';  // need upgrade
			}
		    $i++;
		}
			
        if (!copy($this->inputpath.'/'.$file, $this->outputpath.'/'.SYNCHRO_BACKUPFOLDER.'/'.$filename)){
        	$this->errors[] = 'Error doing files backup';
        	if (!$this->iscron){
        	    error ('Error doing files backup', $this->returnurl);
        	}
        	return;
        }
        
        //start importation
        $textlib = textlib_get_instance();
        $cir = new csv_import_reader($file, 'uploaduser', $this->inputpath);

        //load content
        $content = "";
        $f = @fopen($this->inputpath.'/'.$file, "rb");
	    if ($f) {
            while (!feof($f)) {
                $content .= fread($f, 1024); // TODO: do we really have to do this?
            }
            fclose($f);
        } else {
        	$this->errors[] = 'Error reading temporary file';
        	$this->restore_backup($filename, $file);
        	return;
        }
        
        $readcount = $cir->load_csv_content($content, SYNCHRO_ENCODING, SYNCHRO_DELIMETERNAME, 'validate_user_upload_columns');
        unset($content);
                
        
	    if ($readcount === false) {
	    	$this->errors[] = $cir->get_error();
	    	$this->restore_backup($filename, $file);
	    	return;
        } else if ($readcount == 0) {
        	$this->errors[] = get_string('csvemptyfile', 'error');
        	//$this->restore_backup($filename, $file);
        	$cir->close();
	        $cir->cleanup(false);
        	return;
        }
        //get columns
	    if (!$columns = $cir->get_columns()) {
	    	$this->errors[] = 'Error reading temporary file';
	    	$this->restore_backup($filename, $file);
	    	return;
        }
        
        //get auth
        $allowedauths   = uu_allowed_auths();
        $allowedauths   = array_keys($allowedauths);
        $availableauths = get_list_of_plugins('auth');
        
        //get roles
        $allowedroles = uu_allowed_roles(true);        
	    foreach ($allowedroles as $rid=>$rname) {
	        $rolecache[$rid] = new object();
	        $rolecache[$rid]->id = $rid;
	        $rolecache[$rid]->name = $rname;
	        if (!is_numeric($rname)) { // only non-numeric shornames are supported!!!
	            $rolecache[$rname] = new object();
	            $rolecache[$rname]->id = $rid;
	            $rolecache[$rname]->name = $rname;
	        }
	    }
	    unset($allowedroles);
	    
	    // clear bulk selection
	    if ($bulk) {
	        $SESSION->bulk_users = array();
	    }
	
	    // init csv import helper
	    $cir->init();
	    $linenum = 1; //column header is first line
	    
	    // init upload progress tracker
	    $upt = new uu_progress_tracker();
	    $upt->init(); // start table
	    
	    while ($line = $cir->next()) {
	        $upt->flush();
	        $linenum++;
	
	        $upt->track('line', $linenum);
	
	        $forcechangepassword = false;
	
	        $user = new object();
	        
	        // by default, use the local mnet id (this may be changed in the file)
	        $user->mnethostid = $CFG->mnet_localhost_id;
	        
	        // add fields to user object	        
	        foreach ($line as $key => $value) {
	            if ($value !== '') {
	                $key = $columns[$key];
	                // password is special field
	                if ($key == 'password') {
	                    if ($value !== '') {
	                        $user->password = hash_internal_user_password($value);
	                        if (!empty($CFG->passwordpolicy) and !check_password_policy($value, $errmsg)) {
	                            $forcechangepassword = true;
	                            $weakpasswords++;
	                        }
	                    }
	                } else {
	                    $user->$key = $value;
	                    if (in_array($key, $upt->columns)) {
	                        $upt->track($key, $value);
	                    }
	                }
	            }
	        }
	
	        // get username, first/last name now - we need them in templates!!
	        if ($optype == UU_UPDATE) {
	            // when updating only username is required
	            if (!isset($user->username)) {
	                $upt->track('status', get_string('missingfield', 'error', 'username'), 'error');
	                $upt->track('username', $errorstr, 'error');
	                $userserrors++;
	                continue;
	            }
	
	        } else { 
	            $error = false;
	            // when all other ops need firstname and lastname
	            if (!isset($user->firstname) or $user->firstname === '') {
	                $upt->track('status', get_string('missingfield', 'error', 'firstname'), 'error');
	                $upt->track('firstname', $errorstr, 'error');
	                $error = true;
	            }
	            if (!isset($user->lastname) or $user->lastname === '') {
	                $upt->track('status', get_string('missingfield', 'error', 'lastname'), 'error');
	                $upt->track('lastname', $errorstr, 'error');
	                $error = true;
	            }
	            if ($error) {
	                $userserrors++;
	                continue;
	            }
	            // we require username too - we might use template for it though
	            if (!isset($user->username)) {
/**/                if (!isset($formdata->username) or $formdata->username === '') {
	                    $upt->track('status', get_string('missingfield', 'error', 'username'), 'error');
	                    $upt->track('username', $errorstr, 'error');
	                    $userserrors++;
	                    continue;
	                } else {
	                    $user->username = process_template($formdata->username, $user);
	                    $upt->track('username', $user->username);
	                }
	            }
	            
	        }

	        // normalize username
	        $user->username = $textlib->strtolower($user->username); 
	        
	        if (empty($CFG->extendedusernamechars)) { 
//XTEC ************ AFEGIT - Patch to change special chars in CSV user upload files  (only for the username field)
//2011.01.13 @ pferre22- http://agora.xtec.cat/moodle/moodle/help.php?module=moodle&file=uploadusers2.html        	
                $find    = array('á','à','â','ã','ä','ª','é','è','ê','ë','í','ì','î','ï','ó','ò','ô','õ','ö','º','ú','ù','û','ü','ý','ỳ','ç','ñ');
                $replace = array('a','a','a','a','a','a','e','e','e','e','i','i','i','i','o','o','o','o','o','o','u','u','u','u','y','y','c','n');
                $user->username = str_replace($find,$replace,$user->username);
//************ FI
	            $user->username = eregi_replace('[^(-\.[:alnum:])]', '', $user->username);
	        }
	        
	        if (empty($user->username)) {
	            $upt->track('status', get_string('missingfield', 'error', 'username'), 'error');
	            $upt->track('username', $errorstr, 'error');
	            $userserrors++;
	            continue;
	        }
	
	        if ($existinguser = get_record('user', 'username', addslashes($user->username), 'mnethostid', $user->mnethostid)) {
	            $upt->track('id', $existinguser->id, 'normal', false);
	        }
	
	        // find out in username incrementing required
	        if ($existinguser and $optype == UU_ADDINC) {
	            $oldusername = $user->username;
	            $user->username = increment_username($user->username, $user->mnethostid);
	            $upt->track('username', '', 'normal', false); // clear previous
	            $upt->track('username', $oldusername.'-->'.$user->username, 'info');
	            $existinguser = false;
	        }
	
	        // add default values for remaining fields
	        foreach ($STD_FIELDS as $field) {
	            if (isset($user->$field)) {
	                continue;
	            }
	            // all validation moved to form2
	            if (isset($formdata->$field)) {
	                // process templates
	                $user->$field = process_template($formdata->$field, $user);
	            }
	        }
	        foreach ($PRF_FIELDS as $field) {
	            if (isset($user->$field)) {
	                continue;
	            }
	            if (isset($formdata->$field)) {
	                // process templates
	                $user->$field = process_template($formdata->$field, $user);
	            }
	        }
	
	        // delete user
	        if (!empty($user->deleted)) {
	            if (!$allowdeletes) {
	                $usersskipped++;
	                $upt->track('status', $strusernotdeletedoff, 'warning');
	                $userswarning++;
	                continue;
	            }
	            if ($existinguser) {
	                if (has_capability('moodle/site:doanything', $systemcontext, $existinguser->id)) {
	                    $upt->track('status', $strusernotdeletedadmin, 'error');
	                    $deleteerrors++;
	                    continue;
	                }
	                if (delete_user($existinguser)) {
	                    $upt->track('status', $struserdeleted);
	                    $deletes++;
	                } else {
	                    $upt->track('status', $strusernotdeletederror, 'error');
	                    $deleteerrors++;
	                }
	            } else {
	                $upt->track('status', $strusernotdeletedmissing, 'error');
	                $deleteerrors++;
	            }
	            continue;
	        }
	        // we do not need the deleted flag anymore
	        unset($user->deleted);
	
	        // renaming requested?
	        if (!empty($user->oldusername) ) {
	            $oldusername = $textlib->strtolower($user->oldusername);
	            if (!$allowrenames) {
	                $usersskipped++;
	                $upt->track('status', $strusernotrenamedoff, 'warning');
	                $userswarning++;
	                continue;
	            }
	
	            if ($existinguser) {
	                $upt->track('status', $strusernotrenamedexists, 'error');
	                $renameerrors++;
	                continue;
	            }
	
	            if ($olduser = get_record('user', 'username', addslashes($oldusername), 'mnethostid', addslashes($user->mnethostid))) {
	                $upt->track('id', $olduser->id, 'normal', false);
	                if (has_capability('moodle/site:doanything', $systemcontext, $olduser->id)) {
	                    $upt->track('status', $strusernotrenamedadmin, 'error');
	                    $renameerrors++;
	                    continue;
	                }
	                if (set_field('user', 'username', addslashes($user->username), 'id', $olduser->id)) {
	                    $upt->track('username', '', 'normal', false); // clear previous
	                    $upt->track('username', $oldusername.'-->'.$user->username, 'info');
	                    $upt->track('status', $struserrenamed);
	                    $renames++;
	                } else {
	                    $upt->track('status', $strusernotrenamedexists, 'error');
	                    $renameerrors++;
	                    continue;
	                }
	            } else {
	                $upt->track('status', $strusernotrenamedmissing, 'error');
	                $renameerrors++;
	                continue;
	            }
	            $existinguser = $olduser;
	            $existinguser->username = $user->username;
	        }
	 
	        // can we process with update or insert?
	        $skip = false;
	        switch ($optype) {
	            case UU_ADDNEW:
	                if ($existinguser) {
	                    $usersskipped++;
	                    $upt->track('status', get_string('usernotaddedregistered', 'error', $user->username), 'warning');
	                    $userswarning++;
	                    $skip = true;;
	                }
	                break;
	
	            case UU_ADDINC:
	                if ($existinguser) {
	                    //this should not happen!
	                    $upt->track('status', get_string('usernotaddederror', 'error', $user->username), 'error');
	                    $userserrors++;
	                    continue;
	                }
	                break;
	
	            case UU_ADD_UPDATE:
	                break;
	
	            case UU_UPDATE:
	                if (!$existinguser) {
	                    $usersskipped++;
	                    $upt->track('status', $strusernotupdatednotexists, 'warning');
	                    $userswarning++;
	                    $skip = true;
	                }
	                break;
	        }
	
	        if ($skip) {
	            continue;
	        }
// XTEC ************ AFEGIT -> Fixed problem with city codification
// 2011.12.19 @mmartinez
		$maxstrlen = 20;
		while (strlen($user->city) > $maxstrlen) {
                    $user->city = mb_substr($user->city,0,-1,'utf-8');
		}
// ************ FI
	        if ($existinguser) {
	            $user->id = $existinguser->id;
	
	            if (has_capability('moodle/site:doanything', $systemcontext, $user->id)) {
	                $upt->track('status', $strusernotupdatedadmin, 'error');
	                $userserrors++;
	                continue;
	            }
	
	            if (!$updatetype) {
	                // no updates of existing data at all
	            } else {
	                $existinguser->timemodified = time();
	                //load existing profile data
	                profile_load_data($existinguser);
	
	                $allowed = array();
	                if ($updatetype == 1) {
	                    $allowed = $columns;
	                } else if ($updatetype == 2 or $updatetype == 3) {
	                    $allowed = array_merge($STD_FIELDS, $PRF_FIELDS);
	                }
	                foreach ($allowed as $column) {
	                    if ($column == 'username') {
	                        continue;
	                    }
	                    if ($column == 'password') {
	                        if (!$updatepasswords or $updatetype == 3) {
	                            continue;
	                        } else if (!empty($user->password)) {
	                            $upt->track('password', get_string('updated'));
	                            if ($forcechangepassword) {
	                                set_user_preference('auth_forcepasswordchange', 1, $existinguser->id);
	                            }
	                        }
	                    }
	                    if ((array_key_exists($column, $existinguser) and array_key_exists($column, $user)) or in_array($column, $PRF_FIELDS)) {
	                        if ($updatetype == 3 and $existinguser->$column !== '') {
	                            //missing == non-empty only
	                            continue;
	                        }
	                        if ($existinguser->$column !== $user->$column) {
	                            if ($column == 'email') {
	                                if (record_exists('user', 'email', addslashes($user->email))) {
	                                    if ($noemailduplicates) {
	                                        $upt->track('email', $stremailduplicate, 'error');
	                                        $upt->track('status', $strusernotupdated, 'error');
	                                        $userserrors++;
	                                        continue 2;
	                                    } else {
	                                        $upt->track('email', $stremailduplicate, 'warning');
	                                        $userswarning++;
	                                    }
	                                }
	                            }
	                            if ($column != 'password' and in_array($column, $upt->columns)) {
	                                $upt->track($column, '', 'normal', false); // clear previous
	                                $upt->track($column, $existinguser->$column.'-->'.$user->$column, 'info');
	                            }
	                            $existinguser->$column = $user->$column;
	                        }
	                    }
	                }
	
	                // do not update record if new auth plguin does not exist!
	                if (!in_array($existinguser->auth, $availableauths)) {
	                    $upt->track('auth', get_string('userautherror', 'error', $existinguser->auth), 'error');
	                    $upt->track('status', $strusernotupdated, 'error');
	                    $userserrors++;
	                    continue;
	                } else if (!in_array($existinguser->auth, $allowedauths)) {
	                    $upt->track('auth', $struserauthunsupported, 'warning');
	                    $userswarning++;
	                }
	
	                if (update_record('user', addslashes_recursive($existinguser))) {
	                    $upt->track('status', $struserupdated);
	                    $usersupdated++;
	                } else {
	                    $upt->track('status', $strusernotupdated, 'error');
	                    $userserrors++;
	                    continue;
	                }
	                // save custom profile fields data from csv file
	                profile_save_data(addslashes_recursive($existinguser));
	            }
	
	            if ($bulk == 2 or $bulk == 3) {
	                if (!in_array($user->id, $SESSION->bulk_users)) {
	                    $SESSION->bulk_users[] = $user->id;
	                }
	            }
	
	        } else {
	            // save the user to the database
	            $user->confirmed = 1;
	            $user->timemodified = time();
	            $user->trackforums = SYNCHRO_TRACKFORUMS;
	
	            if (!$createpasswords and empty($user->password)) {
	                $upt->track('password', get_string('missingfield', 'error', 'password'), 'error');
	                $upt->track('status', get_string('usernotaddederror', 'error', $user->username), 'error');
	                $userserrors++;
	                continue;
	            }
	
	            // do not insert record if new auth plguin does not exist!
	            if (isset($user->auth)) {
	                if (!in_array($user->auth, $availableauths)) {
	                    $upt->track('auth', get_string('userautherror', 'error', $user->auth), 'error');
	                    $upt->track('status', get_string('usernotaddederror', 'error', $user->username), 'error');
	                    $userserrors++;
	                    continue;
	                } else if (!in_array($user->auth, $allowedauths)) {
	                    $upt->track('auth', $struserauthunsupported, 'warning');
	                    $userswarning++;
	                }
	            }
	
	            if (record_exists('user', 'email', addslashes($user->email))) {
	                if ($noemailduplicates) {
	                    $upt->track('email', $stremailduplicate, 'error');
	                    $upt->track('status', get_string('usernotaddederror', 'error', $user->username), 'error');
	                    $userserrors++;
	                    continue;
	                } else {
	                    $upt->track('email', $stremailduplicate, 'warning');
	                    $userswarning++;
	                }
	            }
	            
	            if ($user->id = insert_record('user', addslashes_recursive($user))) {
	                $info = ': ' . $user->username .' (ID = ' . $user->id . ')';
	                $upt->track('status', $struseradded);
	                $upt->track('id', $user->id, 'normal', false);
	                $usersnew++;
	                if ($createpasswords and empty($user->password)) {
	                    // passwords will be created and sent out on cron
	                    set_user_preference('create_password', 1, $user->id);
	                    set_user_preference('auth_forcepasswordchange', 1, $user->id);
	                    $upt->track('password', get_string('new'));
	                }
	                if ($forcechangepassword) {
	                    set_user_preference('auth_forcepasswordchange', 1, $user->id);
	                }
	            } else {
	                // Record not added -- possibly some other error
	                $upt->track('status', get_string('usernotaddederror', 'error', $user->username), 'error');
	                $userserrors++;
	                continue;
	            }
	            // save custom profile fields data
	            profile_save_data($user);
	
	            // make sure user context exists
	            get_context_instance(CONTEXT_USER, $user->id);
	
	            if ($bulk == 1 or $bulk == 3) {
	                if (!in_array($user->id, $SESSION->bulk_users)) {
	                    $SESSION->bulk_users[] = $user->id;
	                }
	            }
	        }
	
	        // find course enrolments, groups and roles/types
	        foreach ($columns as $column) {
	            if (!preg_match('/^course\d+$/', $column)) {
	                continue;
	            }
	            $i = substr($column, 6);
	
	            $shortname = $user->{'course'.$i};
	            $ccache = (isset($ccache))? $ccache: array();
	            if (!array_key_exists($shortname, $ccache)) {
	                if (!$course = get_record('course', 'shortname', addslashes($shortname), '', '', '', '', 'id, shortname, defaultrole')) {
	                    $upt->track('enrolments', get_string('unknowncourse', 'error', $shortname), 'error');
	                    continue;
	                }
	                $ccache[$shortname] = $course;
	                $ccache[$shortname]->groups = null;
	            }
	            $courseid      = $ccache[$shortname]->id;
	            $coursecontext = get_context_instance(CONTEXT_COURSE, $courseid);
	
	            // find role
	            $rid = false;
	            if (!empty($user->{'role'.$i})) {
	                $addrole = $user->{'role'.$i};
	                if (array_key_exists($addrole, $rolecache)) {
	                    $rid = $rolecache[$addrole]->id;
	                } else {
	                    $upt->track('enrolments', get_string('unknownrole', 'error', $addrole), 'error');
	                    continue;
	                }
	
	            } else if (!empty($user->{'type'.$i})) {
	                // if no role, then find "old" enrolment type
	                $addtype = $user->{'type'.$i};
	                if ($addtype < 1 or $addtype > 3) {
	                    $upt->track('enrolments', $strerror.': typeN = 1|2|3', 'error');
	                    continue;
	                } else if ($addtype == 1 and SYNCHRO_UULEGACY1 == 0) {
	                    if (empty($ccache[$shortname]->defaultrole)) {
	                        $rid = $CFG->defaultcourseroleid;
	                    } else {
	                        $rid = $ccache[$shortname]->defaultrole;
	                    }
	                } else {
	                	switch ($addtype){
	                		case "1":{
	                			$rid = SYNCHRO_UULEGACY1;
	                			break;
	                		}
	                	    case "2":{
	                			$rid = SYNCHRO_UULEGACY2;
	                			break;
	                		}
	                	    case "3":{
	                			$rid = SYNCHRO_UULEGACY3;
	                			break;
	                		}
	                	}
	                }
	
	            } else {
	                // no role specified, use the default
	                if (empty($ccache[$shortname]->defaultrole)) {
	                    $rid = $CFG->defaultcourseroleid;
	                } else {
	                    $rid = $ccache[$shortname]->defaultrole;
	                }
	            }
	            if ($rid) {
	                $a = new object();
	                $a->course = $shortname;
	                $a->role   = $rolecache[$rid]->name;
	                if (role_assign($rid, $user->id, 0, $coursecontext->id)) {
	                    $upt->track('enrolments', get_string('enrolledincourserole', '', $a));
	                } else {
	                    $upt->track('enrolments', get_string('enrolledincoursenotrole', '', $a), 'error');
	                }
	            }
	            
	            // find group to add to
	            if (!empty($user->{'group'.$i})) {
	                // make sure user is enrolled into course before adding into groups
	                if (!has_capability('moodle/course:view', $coursecontext, $user->id, false)) {
	                    $upt->track('enrolments', get_string('addedtogroupnotenrolled', '', $gname), 'error');
	                    continue;
	                }
	                //build group cache
	                if (is_null($ccache[$shortname]->groups)) {
	                    $ccache[$shortname]->groups = array();
	                    if ($groups = get_groups($courseid)) {
	                        foreach ($groups as $gid=>$group) {
	                            $ccache[$shortname]->groups[$gid] = new object();
	                            $ccache[$shortname]->groups[$gid]->id   = $gid;
	                            $ccache[$shortname]->groups[$gid]->name = $group->name;
	                            if (!is_numeric($group->name)) { // only non-numeric names are supported!!!
	                            $ccache[$shortname]->groups[$group->name] = new object();
	                            $ccache[$shortname]->groups[$group->name]->id   = $gid;
	                            $ccache[$shortname]->groups[$group->name]->name = $group->name;
	                            }
	                        }
	                    }
	                }
	                // group exists?
	                $addgroup = $user->{'group'.$i};
	                if (!array_key_exists($addgroup, $ccache[$shortname]->groups)) {
	                    // if group doesn't exist,  create it
	                    $newgroupdata = new object();
	                    $newgroupdata->name = $addgroup;
	                    $newgroupdata->courseid = $ccache[$shortname]->id;
	                    if ($ccache[$shortname]->groups[$addgroup]->id = groups_create_group($newgroupdata)){
	                        $ccache[$shortname]->groups[$addgroup]->name = $newgroupdata->name;
	                    } else {
	                        $upt->track('enrolments', get_string('unknowngroup', 'error', $addgroup), 'error');
	                        continue;
	                    }
	                }
	                $gid   = $ccache[$shortname]->groups[$addgroup]->id;
	                $gname = $ccache[$shortname]->groups[$addgroup]->name;
	
	                if (groups_add_member($gid, $user->id)) {
	                    $upt->track('enrolments', get_string('addedtogroup', '', $gname));
	                } else {
	                    $upt->track('enrolments', get_string('addedtogroupnot', '', $gname), 'error');
	                    continue;
	                }
	            }
	        }
	    }
	    $upt->flush();
	    $response = $upt->close(); // close table
	    
	    $cir->close();
	    $cir->cleanup(false);
	    
	    //if have been any error send mail to admin
	    if (SYNCHRO_MAILADMINS == 1 && ($userserrors > 0 || $userswarning > 0)){
	    	$a->filename = substr($filename, 0, strlen($filename)-4).'.csv';
	    	$a->urlfilename = $CFG->wwwroot.'/file.php/'.$CFG->synchrooutputfolderpath.'/'.substr($filename, 0, strlen($filename)-4).'.csv';
	    	$a->errors   = ($userserrors > 0)? $userserrors : 0;
	    	$a->warnings = ($userswarning > 0)? $userswarning : 0;
	    	email_to_user(get_admin(), get_admin(), get_string('mailsubject', 'block_odissea_gtaf_synchronization'), get_string('mailerror', 'block_odissea_gtaf_synchronization', $a), get_string('mailerror', 'block_odissea_gtaf_synchronization', $a));
	    }
	    
	    // check if there are errors to restore de backup file
	    if (count($this->errors) > 0){
            
	    	$this->restore_backup($filename, $file);
	    	return;

	    }
	
	    if (!$this->iscron){
	    	
	    	echo "<h3>$file</h3>";
	    	
	    	echo $response[1];
	        
	        print_box_start('boxwidthnarrow boxaligncenter generalbox', 'uploadresults');
	        
		    echo '<p>';
		    if ($optype != UU_UPDATE) {
		        echo get_string('userscreated', 'admin').': '.$usersnew.'<br />';
		    }
		    if ($optype == UU_UPDATE or $optype == UU_ADD_UPDATE) {
		        echo get_string('usersupdated', 'admin').': '.$usersupdated.'<br />';
		    }
		    if ($allowdeletes) {
		        echo get_string('usersdeleted', 'admin').': '.$deletes.'<br />';
		        echo get_string('deleteerrors', 'admin').': '.$deleteerrors.'<br />';
		    }
		    if ($allowrenames) {
		        echo get_string('usersrenamed', 'admin').': '.$renames.'<br />';
		        echo get_string('renameerrors', 'admin').': '.$renameerrors.'<br />';
		    }
		    if ($usersskipped) {
		        echo get_string('usersskipped', 'admin').': '.$usersskipped.'<br />';
		    }
		    echo get_string('usersweakpassword', 'admin').': '.$weakpasswords.'<br />';
		    echo get_string('errors', 'admin').': '.$userserrors.'</p>';
		    
		    print_box_end();

		    echo "<br><br>";
	    }        
        
		$this->save_logs ($response[0], $file);
		
		return;
	}
	
	function synchro_enrolments($filename){
		
		$response = array();
		$adds     = 0;
		$deletes  = 0;
		$errors   = 0;
		$warnings = 0;

        if (($fh = fopen($this->inputpath.'/'.$filename, "r")) != false) {

            list($roles, $rolemap) = get_roles();
            
            // init upload progress tracker
	        $upt = new uu_progress_tracker(true);
	        $upt->init(); // start table
               
            $line = 0;
            while (!feof($fh)) { 
                
                $fields = explode(",", str_replace( "\r", "", fgets($fh) ) );
                
                /// If a line is incorrectly formatted ie does not have 4 comma separated fields then ignore it
                if ((count($fields) != 4 and count($fields) !=6) || $fields[0] == 'operation') {
                    if ( count($fields) > 1 or strlen($fields[0]) > 1) { // no error for blank lines
                        $this->log .= "$line: Line incorrectly formatted - ignoring\n";
                    }
                    continue;
                }
                
            	$line++;
                
                $fields[0] = trim(strtolower($fields[0]));
                $fields[1] = trim(strtolower($fields[1]));
                $fields[2] = trim($fields[2]);
                $fields[3] = trim($fields[3]);
                
                $upt->flush();
            	$upt->track('line', $line);                
                $upt->track('id', $fields[2]);
                $upt->track('operation', $fields[0]);
                $upt->track('enrolments', $fields[3]); 
                   
                $this->log .= "$line: $fields[0] $fields[1] $fields[2] $fields[3] ";
                
                    
                if (!empty($fields[5])) {
                    $fields[4] = (int)trim($fields[4]);
                    $fields[5] = (int)trim($fields[5]);
                    $this->log .= "$fields[4] $fields[5]";
                } else {
                    $fields[4] = 0;
                    $fields[5] = 0;
                } 

                $this->log .= ":";



            /// check correct formatting of operation field
                if ($fields[0] != "add" and $fields[0] != "del") {
                	$errors++;
                    $this->log .= "Unknown operation in field 1 - ignoring line\n";
                    $upt->track('status', 'Unknown operation in field 1 - ignoring line', 'error');
                    continue;
                }


            /// check correct formatting of role field
                if (!isset($rolemap[$fields[1]]) && !isset($roles[$fields[1]])) {
                	$errors++;
                    $this->log .= "Unknown role in field2 - ignoring line\n";
                    $upt->track('status', 'Unknown role in field2 - ignoring line', 'error');
                    continue;
                }

                if (! $user = get_record("user", "idnumber", $fields[2]) ) {
                	$errors++;
                    $this->log .= "Unknown user idnumber in field 3 - ignoring line\n";
                    $upt->track('status', 'Unknown user idnumber in field 3 - ignoring line', 'error');
                    continue;
                }
                
                $upt->track('username', $user->username);
                $upt->track('firstname', $user->firstname);
                $upt->track('lastname', $user->lastname);


                if (! $course = get_record("course", "idnumber", $fields[3]) ) {
                	$errors++;
                    $this->log .= "Unknown course idnumber in field 4 - ignoring line\n";   // deprecated
                    $upt->track('status', 'Unknown course idnumber in field 4 - ignoring line', 'error');
                    continue;
                }

                if ($fields[4] > $fields[5]) {
                	$errors++;
                    $this->log .= "Start time was later than end time - ignoring line\n";   // deprecated
                    $upt->track('status', 'Start time was later than end time - ignoring line', 'error');
                    continue;
                }
                
                unset($elog);

                // Either field[1] is a name that appears in the mapping,
                // or it's an actual short name. It has to be one or the
                // other, or we don't get to this point.
                $roleid = isset($rolemap[$fields[1]]) ? $roles[$rolemap[$fields[1]]] : $roles[$fields[1]];
                // Create/resurrect a context object
                $context = get_context_instance(CONTEXT_COURSE, $course->id);
                    
                if ($fields[0] == 'add') {
                   role_assign($roleid, $user->id, null, $context->id, $fields[4], $fields[5], 0, 'flatfile');
                   $upt->track('status', get_string('add', 'block_odissea_gtaf_synchronization'));
                   $adds++;
                } else {
                    role_unassign($roleid, $user->id, null, $context->id);
                    $upt->track('status', get_string('del', 'block_odissea_gtaf_synchronization'));
                    $deletes++;
                }
	    
                if (empty($elog) and ($fields[0] == "add")) {
   
                    if ($fields[1] == "student") {

                        if ($teachers = get_users_by_capability($context, 'moodle/course:update', 'u.*,ra.hidden', 'ra.sortorder ASC')) {
                            foreach ($teachers as $u) {
                                if (!$u->hidden || has_capability('moodle/role:viewhiddenassigns', $context)) {
                                    $teacher = $u;
                                    break;
                                }
                            }
                        }

                        if (!isset($teacher)) {
                            $teacher = get_admin();
                        }
                    } else {
                        $teacher = get_admin();
                    }

                        
                    if (SYNCHRO_MAILSTUDENTS == 1) {
                        $a->coursename = "$course->fullname";
                        $a->profileurl = "$CFG->wwwroot/user/view.php?id=$user->id&amp;course=$course->id";
                        email_to_user($user, $teacher, get_string("enrolmentnew", '', $course->shortname), 
                                      get_string('welcometocoursetext', '', $a));
                    }

                    if (SYNCHRO_MAILTEACHERS == 1 && $teachers) {

                       foreach($teachers as $teacher) {
                          
                           if (!$u->hidden || has_capability('moodle/role:viewhiddenassigns', $context)) {
                                $a->course = "$course->fullname";
                                $a->user = fullname($user);
                                email_to_user($teacher, $user, get_string("enrolmentnew", '', $course->shortname), 
                                              get_string('enrolmentnewuser', '', $a));
                            }
                        }
                    }
                }

                if (empty($elog)) {
                    $elog = "OK\n";
                }
                $this->log .= $elog;  // deprecated
                
                

            } // end of while loop
            
            $upt->flush();
	        $response = $upt->close(); // close table

            fclose($fh);
            
        } // end of if(file_open)
        else {
        	$this->errors[] = get_string('inputfolderpatherror', 'block_odissea_gtaf_synchronization');
        }
        
        //set done filename
        $i=1;
        $donefilename = $filename;
	    while (file_exists($this->outputpath.'/'.SYNCHRO_BACKUPFOLDER.'/'.$donefilename)){
			if (substr($donefilename, strlen($donefilename)-5, 1) != ')'){
		        $donefilename = substr($donefilename, 0, strlen($donefilename)-4).'('.$i.').txt';
			} else {
			    $j = 6;
			    while (substr($donefilename, strlen($donefilename)-($j+1), 1) != '('){
				    $j++;
				}
				$donefilename = substr($donefilename, 0, strlen($donefilename)-$j).$i.').txt';  // need upgrade
			}
		    $i++;
		}

	    if(! @rename($this->inputpath.'/'.$filename, $this->outputpath.'/'.SYNCHRO_BACKUPFOLDER.'/'.$donefilename)) {
         	/*if (SYNCHRO_MAILADMINS == 1){
                email_to_user(get_admin(), get_admin(), get_string("filelockedmailsubject", "enrol_flatfile"), get_string("filelockedmail", "enrol_flatfile", $filename));
           	}*/
            $this->log .= "Error moving file $filename\n";
        }

        if (SYNCHRO_MAILADMINS == 1 && ($errors > 0 || $warnings > 0)) {
        	global $CFG;
        	$a->filename = substr($filename, 0, strlen($filename)-4).'.csv';
	    	$a->urlfilename = $CFG->wwwroot.'/file.php/'.$CFG->synchrooutputfolderpath.'/'.substr($filename, 0, strlen($filename)-4).'.csv';
	    	$a->errors = ($errors > 0)? $errors: 0;
	    	$a->warnings = ($warnings > 0)? $warnings: 0;
	    	email_to_user(get_admin(), get_admin(), get_string('mailsubject', 'block_odissea_gtaf_synchronization'), get_string('mailerror', 'block_odissea_gtaf_synchronization', $a), get_string('mailerror', 'block_odissea_gtaf_synchronization', $a));
        }
        
	    if (!$this->iscron){
	    	
	    	echo "<h3>$filename</h3>";
	    	
	    	echo $response[1]; 
	        
	        print_box_start('boxwidthnarrow boxaligncenter generalbox', 'uploadresults');
		    echo '<p>';
		    echo get_string('userscreated', 'admin').': '.$adds.'<br />';
		    echo get_string('usersdeleted', 'admin').': '.$deletes.'<br />';
		    echo get_string('errors', 'admin').': '.$errors.'</p>';
		    print_box_end();   
		    
		    echo "<br><br>";
	    }
                
        $this->save_logs ($response[0], $filename);          
                
        return;
	}
	
	function save_logs ($logs, $filename){
		if (!empty($logs)){
			//transform array to string			
			$str = '';
			foreach ($logs as $log){
				$str .= implode (SYNCHRO_OUTPUTDELIMETER, $log)."\n";
			}
			
			//change $filename extension to csv
			$filename = substr($filename, 0, strlen($filename)-4).'.csv';
			
			//save string to file
			$i=1;
			while (file_exists($this->outputpath.'/'.$filename)){
				if (substr($filename, strlen($filename)-5, 1) != ')'){
			        $filename = substr($filename, 0, strlen($filename)-4).'('.$i.').csv';
				} else {
					$j = 6;
					while (substr($filename, strlen($filename)-($j+1), 1) != '('){
					    $j++;
				    }
					$filename = substr($filename, 0, strlen($filename)-$j).$i.').csv';  // need upgrade
				}
			    $i++;
			}
			
			if (!$f = fopen($this->outputpath.'/'.$filename, 'w')){
				$this->errors[] = 'KO! Imposible to create the output file';
				return;
			}
			
			if (!fputs($f, utf8_decode($str))){
				$this->errors[] = 'KO! Imposible to write in the output file';
				return;
			}
			
			return;
		} else {
			$this->errors[] = 'KO! Empty string result';
			return;
		}
	}
	
/**
	 * Create a directory.
	 *
	 * @uses $CFG
	 * @param string $directory  a string of directory names 
	 * @return string|false Returns full path to directory if successful, false if not
	 */
	function make_upload_directory($directory) {
	
	    global $CFG;
	
	    umask(0000);
	    
	    $directory = str_replace("\\", "/", $directory);
	
	    $dirarray = explode("/", $directory);
	    $currdir = '';
	    
	    foreach ($dirarray as $dir) {
	    	if ($dir == ''){
	    		continue;
	    	}
	    	if ($CFG->ostype != "WINDOWS"){
	    		$strstart = '/';
	    	} else {
	    		$strstart = '';
	    	}
	        $currdir = ($currdir != '') ? $currdir .'/'. $dir : $strstart.$dir;
	        if (!is_dir($currdir)) {
	            if (!mkdir($currdir)) {
	                return false;
	            }
	            //@chmod($currdir, $CFG->directorypermissions);  // Just in case mkdir didn't do it
	        }
	    }
    	return $currdir;
    }
    
    /*
     * Restore backup 
     * @param string $filename   name of the backup file
     * @param string $file       name that must have the file after the restore
     * 
     */
    function restore_backup ($filename, $file){
//XTEC *********** AFEGIT -> Send mail when any restore backup is done
//2011.09.12 @mmartinez
    	//notify restore by email
    	global $CFG;
    	$a->filename = $file;
	    $a->urlfilename = $CFG->wwwroot.'/file.php/'.$CFG->synchrooutputfolderpath.'/temp/'.$file;
	    $a->error = $this->errors[count($this->errors)-1];
    	email_to_user(get_admin(), get_admin(), get_string('mailsubject', 'block_odissea_gtaf_synchronization'), get_string('mailerror2', 'block_odissea_gtaf_synchronization', $a), get_string('mailerror2', 'block_odissea_gtaf_synchronization', $a));
//*********** FI

        if (!@rename($this->outputpath.'/'.SYNCHRO_BACKUPFOLDER.'/'.$filename, $this->inputpath.'/'.$file)){
           	$this->errors[] = 'Imposible to recover the backup file';
//XTEC *********** AFEGIT -> Notify instead of show error
//2011.09.13 @mmartinez
            $strerror  = $file.': '.$this->errors[count($this->errors)-2].', '.$this->errors[count($this->errors)-1];
//XTEC *********** AFEGIT -> Fixed bug, reset errors var when restore some bad file to continue processing others
//2011.10.13 @mmartinez
            $this->errors = array();
//********** FI
           	notify($strerror);
//*********** FI
           	return 'Imposible to recover the backup file';
        }
            
        if (!$this->iscron && count($this->errors) > 0){
//XTEC ********* MODIFICAT -> Notify instead of show error
//2011.09.12 @mmartinez
            $strerror  = $file.': ';
            $strerror .= implode(", ", $this->errors);
//XTEC *********** AFEGIT -> Fixed bug, reset errors var when restore some bad file to continue processing others
//2011.10.13 @mmartinez
            $this->errors = array();
//********** FI
           	notify($strerror);
//********** ORIGINAL
            //$strerror = implode(", ", $this->errors);
            //error($strerror);
//********** FI
        }
        return;
    }
    
    /**
     * 
     */
    function restore_file($f = ''){
    	
    	if (empty($f)){
    		$error = get_string('fileno', 'block_odissea_gtaf_synchronization');
    	}
    
    	if (!is_file($this->outputpath.'/'.SYNCHRO_BACKUPFOLDER.'/'.$f)){
    		$error = get_string('filenofound', 'block_odissea_gtaf_synchronization');
    	}
    	
    	if (empty($error)){
    	    $error = $this->restore_backup($f, $f);
    	}
    	
    	global $CFG;
    	require_once($CFG->libdir.'/adminlib.php');
    	$systemcontext = get_context_instance(CONTEXT_SYSTEM);
        // Print the header
        admin_externalpage_setup('manageblocks');
        admin_externalpage_print_header();
        print_heading(get_string('uploadusersresult', 'admin'));
        
        if (!empty($error)){
        	notify($error);
        } else {
        	echo '<p>'.get_string('restoreok', 'block_odissea_gtaf_synchronization').':</p>';
        	echo "<h3>$f</h3>";
        	
        }
        
        print_continue($this->returnurl);
        admin_externalpage_print_footer();
    	
    }
    
}

if (isset($_GET['run']) && !empty($_GET['run'])){
	
    $synchro = new odissea_gtaf_synchronizer();    
    
    if ($_GET['run'] == 1){
        $result = $synchro->synchro();
    } else if ($_GET['run'] == 2){
    	$result = $synchro->restore_file($_GET['f']);
    }
}

//*********** FI
?>
