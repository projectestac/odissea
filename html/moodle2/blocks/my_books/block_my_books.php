<?php
// MARSUPIAL ************* ADDED -> block my_books


class block_my_books extends block_list {

    function init() {
        $this->title = get_string('my_books', 'block_my_books');
    }

    function instance_allow_multiple() {
        return false;
    }

    function has_config() {
        return true;
    }

	/*function applicable_formats() {
	    return array('site-index' => true);
	}*/

    function get_content() {

    	global $CFG, $USER, $DB, $OUTPUT;

        if (empty($USER->id)) {
            return $this->content;
        }

	    // If the content is already computed, do not compute it again
	    if ($this->content !== null) {
	        return $this->content;
	    }

    	$this->content = new stdClass;
    	$this->content->items = array();
        $this->content->icons = array();
        $this->content->footer = '';
        $mybooksconfig = self::get_mybooksconfig();

        require_once($CFG->dirroot.'/local/rcommon/locallib.php');
        require_once($CFG->dirroot.'/mod/rcontent/lib.php');

        // Load user books
        $sql = "SELECT uc.isbn FROM {rcommon_user_credentials} uc INNER JOIN {rcommon_books} rb ON rb.isbn = uc.isbn WHERE uc.euserid = :userid ORDER BY rb.name";
        if (!$isbns = $DB->get_fieldset_sql($sql, array('userid' => $USER->id))) {
        	$this->content->items[] = get_string('nobooks', 'block_my_books');
        	$this->content->icons[] = "";
        } else {
	        foreach ($isbns as $isbn) {
                $item = $this->get_item($isbn, $mybooksconfig);
                if (!$item) {
                    continue;
                }
                $this->content->items[] = $item;
                $this->content->icons[] = '<img src="'.$OUTPUT->pix_url('icon', 'rcontent').'" class="icon" alt="" />';
	        }
        }

		$bt = "";
        $context = context_system::instance(); // pinned blocks do not have own context
		if (has_capability('local/rcommon:managecredentials', $context) || has_capability('local/rcommon:editowncredentials', $context)) {
			$bt = '<a href="' . $CFG->wwwroot . '/local/rcommon/users.php?action=manage" title="' . get_string('manage_button_title', 'block_my_books') . '"><button>' . get_string('manage_button', 'block_my_books') . '</button></a>';
		}
		if ($mybooksconfig->addkey) {
			$bt .= '<a href="' . $CFG->wwwroot.'/local/rcommon/add_user_credential.php?username='.$USER->username.'" title="' . get_string('addkey_button_title', 'block_my_books') . '"><button>' . get_string('addkey_button', 'block_my_books') . '</button></a>';
		}
		$this->content->footer = $bt;
    	return $this->content;
    }

    private static function get_mybooksconfig() {
        $mybooksconfig = get_config('mybooks');
        if (!isset($mybooksconfig->viewer_opening)) {
            $mybooksconfig->viewer_opening = 1;
            $mybooksconfig->width = 800;
            $mybooksconfig->height = 600;
            $mybooksconfig->activity_opening = 0;
            $mybooksconfig->scrollbars = 1;
            $mybooksconfig->menubar = 0;
            $mybooksconfig->toolbar = 0;
            $mybooksconfig->status = 1;
            $mybooksconfig->addkey = 1;
        }
        return $mybooksconfig;
    }

    private function get_item($isbn, $mybooksconfig) {
        global $DB, $CFG;
        // Deleted book
        if (!$book = $DB->get_record('rcommon_books', array('isbn' => $isbn))) {
            return false;
        }

        // Old book formats
        $bookformat = core_text::strtolower($book->format);
        if (!in_array($bookformat, rcommon_book::$allowedformats)) {
            return false;
        }

        // Check rcontent to know if isset entry for that book
        if ($rcontent = $DB->get_record('rcontent', array('course' => SITEID, 'bookid' => $book->id, 'unitid' => 0))) {
            // Search course_module
            if (!$cm = get_coursemodule_from_instance('rcontent', $rcontent->id, 1)) {
                return get_string('error_loading_data', 'block_my_books', $book->name);
            }
            $cmid = $cm->id;
        } else {
            // Add new rcontent
            $add = new stdClass();
            $add->course         = SITEID;
            $add->name           = addslashes($book->name);
            $add->levelid        = $book->levelid;
            $add->isbn           = $book->id;
            $add->unit           = 0;
            $add->activity       = 0;
            $add->intro          = 'Auto added from my_books block';
            $add->introformat    = FORMAT_MOODLE;
            $add->whatgrade      = 0;
            $add->frame      = 0;
            $add->coursemodule   = 0;
            $add->cmidnumber     = 0;
            $add->popup          = $mybooksconfig->activity_opening;
            $add->scrollbars     = $mybooksconfig->scrollbars;
            $add->menubar        = $mybooksconfig->menubar;
            $add->toolbar        = $mybooksconfig->toolbar;
            $add->status         = $mybooksconfig->status;
            $add->width          = $mybooksconfig->width;
            $add->height         = $mybooksconfig->height;
            $add->section        = 2;
            $add->visible        = 1;
            $add->module         = $DB->get_field('modules', 'id', array('name' => 'rcontent'));

            // Add entry to rscorm table
            if (!$add->instance = rcontent_add_instance($add)) {
                return get_string('error_loading_data', 'block_my_books', $book->name);
            }

            if (! $add->coursemodule = add_course_module($add) ) {
                return get_string('error_loading_data', 'block_my_books', $book->name);
            }

            $sectionid = course_add_cm_to_section($add->course, $add->module, $add->section);
            if (! $sectionid ) {
                return get_string('error_loading_data', 'block_my_books', $book->name);
            }
            if (! $DB->set_field('course_modules', 'section', $sectionid, array("id" => $add->coursemodule))) {
                return get_string('error_loading_data', 'block_my_books', $book->name);
            }

            // Make sure visibility is set correctly
            set_coursemodule_visible($add->coursemodule, $add->visible);

            if (isset($add->cmidnumber)) { // Label
                // Set cm idnumber
                set_coursemodule_idnumber($add->coursemodule, $add->cmidnumber);
            }
            $cmid = $add->coursemodule;
        }
        $target = $mybooksconfig->viewer_opening == 1 ? ' target="_blank"' : "";
        return '<a href="'.$CFG->wwwroot.'/mod/rcontent/view.php?id='.$cmid.'" title="'.$book->name.'" '.$target.'>'.$book->name.'</a>';
    }
}
