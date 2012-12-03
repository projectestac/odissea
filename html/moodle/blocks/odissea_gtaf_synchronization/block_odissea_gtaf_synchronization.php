<?php 

//XTEC ************* ADD -> New page to run all the synchronization
//2011.01.25 @mmartinez

class block_odissea_gtaf_synchronization extends block_base {

    function init() {
        $this->title = get_string('blockname', 'blocks/odissea_gtaf_synchronization');
        $this->version = 2011121992;
        $this->cron = 8*60*60; //24h * 60' * 60'' = 86400
    }

    function applicable_formats() {
        return array('none' => true);
    }
    function instance_allow_multiple() {
        return false;
    }

    function get_content() {
        return '';
    }
    
    function has_config() {
        return true;
    }
    
    function cron(){
    	//load syncronicer
    	require_once 'synchronizer.php';
    	$synchro = new odissea_gtaf_synchronizer(true);
    	//call synchro
        $result = $synchro->synchro();
        //print result
        mtrace(' '.$result);
        
        return true;
    }
}

//*********** FI
?>
