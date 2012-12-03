<?php

//XTEC ************* ADD -> New page to run all the synchronization
//2011.01.25 @mmartinez

//set ftp host name
$settings->add(new admin_setting_configtext('synchroinput_host', get_string('ftp_host', 'block_odissea_gtaf_synchronization'),
                   get_string('ftp_host_info', 'block_odissea_gtaf_synchronization'), 'espina.xtec.cat', PARAM_RAW));
//set ftp username
$settings->add(new admin_setting_configtext('synchroinput_user', get_string('ftp_user', 'block_odissea_gtaf_synchronization'),
                   '', '', PARAM_RAW));
                   
//set ftp password
$settings->add(new admin_setting_configpasswordunmask('synchroinput_pass', get_string('ftp_pass', 'block_odissea_gtaf_synchronization'),
                   '', '', PARAM_RAW));
                   
//set ftp path
$settings->add(new admin_setting_configtext('synchroinput_path', get_string('inputfolderpath', 'block_odissea_gtaf_synchronization'),
                   get_string('inputfolderpathinfo', 'block_odissea_gtaf_synchronization'), '', PARAM_RAW));
                   
// set output path                   
$settings->add(new admin_setting_configtext('synchrooutputfolderpath', get_string('outputfolderpath', 'block_odissea_gtaf_synchronization'),
                   get_string('outputfolderpathinfo', 'block_odissea_gtaf_synchronization'), '', PARAM_RAW));

//set button
$output  = get_string('synchrotext', 'block_odissea_gtaf_synchronization');
//XTEC ********** MODIFICAT -> Fixed bug with button
//2011.09.12 @mmartinez
$output .= '<a href="'.$CFG->wwwroot.'/blocks/odissea_gtaf_synchronization/synchronizer.php?run=1" title="'.get_string('synchrotitle', 'block_odissea_gtaf_synchronization').'"><input type="button" value="'.get_string('synchrobutton', 'block_odissea_gtaf_synchronization').'" /></a>';
//*********** ORIGINAL
//$output .= '<a href="'.$CFG->wwwroot.'/blocks/odissea_gtaf_synchronization/synchronizer.php?run=1" title="'.get_string('synchrotitle', 'block_odissea_gtaf_synchronization').'"><button>'.get_string('synchrobutton', 'block_odissea_gtaf_synchronization').'</button></a>';
//*********** FI


$settings->add(new admin_setting_heading('block_odissea_gtaf_synchronization', '', $output));

$output = get_string('restoretext', 'block_odissea_gtaf_synchronization');
$output .= '<br><br><input type="text" id="f" value="" size="30">';
$output .= '<input type="button" value="'.get_string('restorebutton', 'block_odissea_gtaf_synchronization').'" onClick="location.href=\''.$CFG->wwwroot.'/blocks/odissea_gtaf_synchronization/synchronizer.php?run=2&f=\'+document.getElementById(\'f\').value;"></form>';

$settings->add(new admin_setting_heading('block_odissea_gtaf_synchronization2', '', $output));

//*********** FI
?>