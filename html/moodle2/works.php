<?php
//XTEC ************ FITXER AFEGIT - Fitxer del Nagios per comprovar funciona l'espai web
//2010.09.01

	require_once('config-works.php');
	$con = oci_connect($CFG->dbuser, $CFG->dbpass, $CFG->dbname);
	if ($con){
		oci_close($con);
		echo 'Aplicacio:OK';
	}else{
		echo 'DB ERROR';
	}
?>
