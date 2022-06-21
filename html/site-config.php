<?php

require_once $agora['server']['root'] . '/html/config/dblib-mysql.php';

global $school_info;

$centre = getSchoolInfo('moodle2');

// Check for special status of the services
if (isset($school_info['state_moodle2']) && ($school_info['state_moodle2'] !== '1')) {
    switch ($school_info['state_moodle2']) {
        case '-5':
            $status = 'migrating';
            break;
        case '-6':
            $status = 'migrated';
            break;
        case '-7':
            $status = ($school_info['id_moodle2'] !== '1') ? 'saturated' : 'active';
            break;
        default:
            $status = '';
            exit;
    }

    if ($status !== 'active') {
        header('Location: ' . WWWROOT . 'error.php?s=moodle&' . $status . '=' . $centre);
        exit;
    }
}

// Check for subdomain
if (!empty($school_info['url_type']) && ($school_info['url_type'] === 'subdomain') && !empty($school_info['url_host'])) {
    $CFG->wwwroot = $agora['server']['html'] . 'moodle';
} else {
    $CFG->wwwroot = $agora['server']['html'] . $centre . '/moodle';
}

// Add redirect using full URI for sites that have changed their domain
if (isset($_SERVER['HTTP_HOST'], $_SERVER['REQUEST_URI'])) {
    $moodle_domain = explode('//', $agora['server']['server'])[1];
    $request_domain = $_SERVER['HTTP_HOST'];

    if ($moodle_domain !== $request_domain) {
        header('Location: ' . $agora['server']['server'] . $agora['server']['base'] . ltrim($_SERVER['REQUEST_URI'], '/'));
        exit;
    }
}

$CFG->dbhost = $school_info['dbhost_moodle2'];
$CFG->dbname = $agora['moodle2']['userprefix'] . $school_info['id_moodle2'];
$CFG->dbuser = $agora['moodle2']['userprefix'] . $school_info['id_moodle2'];
$CFG->dataroot = $agora['server']['root'] . '/' . $agora['moodle2']['datadir'] . $agora['moodle2']['userprefix'] . $school_info['id_moodle2'];

if (!empty($agora['server']['temp'])) {
    $CFG->tempdir = $agora['server']['temp'] . '/' . $agora['moodle2']['datadir'] . $agora['moodle2']['userprefix'] . $school_info['id_moodle2'];
}

$CFG->dnscentre = $centre;