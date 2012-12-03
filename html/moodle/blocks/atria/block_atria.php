<?php
class block_atria extends block_base {
  function init() {
    //tittle of the block in moodle. Its translatable.
    $this->title   = get_string('Atria', 'block_atria');
    //the version of the block, its not important
    $this->version = 2010122100;
  }

  function instance_allow_multiple() {
    return false;
  }

  function get_content() {
    //if the content is already computed, do not compute it again
    if ($this->content !== NULL) {
      return $this->content;
    }

    //get the current user object
    global $USER, $CFG;
    $this->content         =  new stdClass;

    if($USER->id > 0) {
      //if the user its not a guest, show the content
      $this->content->text   = '<a href="'.$CFG->wwwroot.'/atria/">'.  get_string('atriasyncbtn', 'block_atria').'</a>';
	  if(isadmin()) {
		  $this->content->text   = $this->content->text.'<br /><a href="'.$CFG->wwwroot.'/atria/admin/">'.  get_string('atriasyncbtnadmin', 'block_atria').'</a>';
	  }
    } else {
      //by not showing any content, moodle hides the block from the screen
      //guest users can not sync with atria
      $this->content->text   = '';
    }
    //we use no footer for the moment, maybe logos?
    $this->content->footer = '';

    return $this->content;
  }
  
    //XTEC ************ AFEGIT - In Agora the Atria block has no content (the block with the main information is rcommon)
    //2011.06.20 @sarjona 
    function applicable_formats() {
        global $CFG;
        if (isset($CFG->ismarsupial))
            return array('none' => true);        
        else
            return array('site' => true, 'admin' => true);
    }
    //************ FI
  
}
?>
