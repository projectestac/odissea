<?php

//XTEC ************ FITXER AFEGIT - Fitxer del Nagios per comprovar el funcionament de l'espai web
//2014.01.28

require_once('config-works.php');

$state = '';
$dirToCheck = $CFG->dataroot . '/';

$con = oci_pconnect($CFG->dbuser, $CFG->dbpass, $CFG->dbname);

if ($con) {
    $sql = 'SELECT count(*) FROM ' . $CFG->prefix . 'course WHERE category = 0';

    $stmt = oci_parse($con, $sql);

    if (oci_execute($stmt, OCI_DEFAULT)) {
        if (oci_fetch($stmt)) {
            $result = oci_result($stmt, 1);
            if (is_numeric($result) && $result > 0) {
                $state = 'Aplicacio:OK';
            } else {
                $state = '<br />No s\'ha trobat el registre esperat a la taula ' . $CFG->prefix . 'course de l\'usuari ' . $CFG->dbuser . ' de la instància ' . $CFG->dbname;
            }
        } else {
            $state = '<br />No s\'ha pogut accedir a la taula ' . $CFG->prefix . 'course de l\'usuari ' . $CFG->dbuser . ' de la instància ' . $CFG->dbname;
        }
    } else {
        $state = '<br />No s\'ha pogut executar la consulta de validació a la taula ' . $CFG->prefix . 'course de l\'usuari ' . $CFG->dbuser . ' de la instància ' . $CFG->dbname;
    }
} else {
    $state = '<br />No s\'ha pogut connectar a la inst&agrave;ncia ' . $CFG->dbname . ' (usuari ' . $CFG->dbuser . ')';
}

oci_close($con);

// Check moodledata
if (!is_writable($dirToCheck)) {
    $state = ($state == 'Aplicacio:OK') ? '' : $state;
    $state .= "<br />El directori de dades del <strong>Moodle</strong> ($dirToCheck), o bé no està muntat o bé no té permís d'escriptura.<br>";
}

echo $state;
