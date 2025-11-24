<?php

function is_agora(): bool
{
    global $CFG;
    return isset($CFG->isagora) && $CFG->isagora;
}

function is_eoi(): bool
{
    global $CFG;
    return isset($CFG->iseoi) && $CFG->iseoi;
}

function is_odissea(): bool
{
    global $CFG;
    return isset($CFG->isodissea) && $CFG->isodissea;
}

function is_alexandria(): bool
{
    global $CFG;
    return isset($CFG->isalexandria) && $CFG->isalexandria;
}

function is_xtecadmin($user = null): bool
{
    global $USER;
    if (empty($user)) {
        $user = $USER;
    }

    return isset($user->username) && $user->username === 'xtecadmin';
}

/**
 * @throws coding_exception
 * @throws require_login_exception
 * @throws moodle_exception
 */
function require_xtecadmin($canbesiteadmin = false): void
{
    require_login(0, false);
    if (!$canbesiteadmin) {
        if (!is_xtecadmin()) {
            throw new \moodle_exception('noxtecadmin', 'local_agora');
        }
    } else {
        if (is_agora() && !is_xtecadmin()) {
            throw new \moodle_exception('noxtecadmin', 'local_agora');
        }
        if (!is_siteadmin()) {
            throw new \moodle_exception('noxtecadmin', 'local_agora');
        }
    }

}

function get_protected_agora(): bool
{
    return !is_agora() || is_xtecadmin();
}

/**
 * @throws moodle_exception
 */
function require_not_rush_hour(): void
{
    global $CFG;
    if (!get_protected_agora() && is_rush_hour()) {
        throw new \moodle_exception('rush_hour', 'local_agora', $CFG->wwwroot);
    }
}

function get_debug(): void
{
    global $CFG;

    // Get the cookie (only changes if the cookie is enabled), if not, takes default settings
    if (isset($_COOKIE['agora_debug']) && $_COOKIE['agora_debug'] === '1') {
        $CFG->debug = E_ALL | E_STRICT;
        $CFG->debugdisplay = 1;
        $CFG->showcrondebugging = true;
        error_reporting($CFG->debug);
        @ini_set('display_errors', '1');
        @ini_set('log_errors', '0');
    }
}

// Execute a command via CLI
function run_cli($command, $outputfile = false, $append = true, $background = true, $params = []): string
{
    global $CFG;

    $command = $CFG->dirroot . '/' . $command;

    if (isset($CFG->dnscentre)) {
        $params['ccentre'] = $CFG->dnscentre;
    }

    if (is_array($params)) {
        foreach ($params as $key => $value) {
            $command .= ' --' . $key . '=' . $value;
        }
    }

    $cmd = $CFG->clicommand ?? 'php';
    $command = 'nohup ' . $cmd . ' ' . $command;
    $command .= ($append) ? ' >> ' : ' > ';

    if (empty($outputfile)) {
        $outputfile = ($background) ? '/dev/null' : '/dev/stdout';
    }

    $command .= $outputfile . ' 2>&1 ';

    if ($background) {
        $command .= ' & echo $!';
    }

    if (isset($CFG->cli_path)) {
        putenv('PATH=' . $CFG->cli_path);
    }

    // Extra safety
    \core\session\manager::write_close();

    $output = '';
    $returnvar = '';
    exec($command, $output, $returnvar);

    if (is_xtecadmin()) {
        mtrace($command, '<br/>');
        print_object($output);
        mtrace("Return var: $returnvar", '<br/>');
    }

    return $returnvar;
}

/**
 * @throws coding_exception
 */
function check_cron_run(): void
{
    global $CFG;

    if (!empty($CFG->cronclionly)) {
        $nocli = optional_param('nocli', false, PARAM_BOOL);
        if (!$nocli) {
            run_cli_cron();
            exit(0);
        }
    } else {
        $cli = optional_param('cli', false, PARAM_BOOL);
        if ($cli) {
            run_cli_cron();
            exit(0);
        }
    }
    $CFG->cronclionly = false;
}

// Executes a cron via CLI
/**
 * @throws moodle_exception
 * @throws coding_exception
 * @throws dml_exception
 */
function run_cli_cron($background = true): void
{
    global $CFG, $DB;

    if (!empty($CFG->cronremotepassword)) {
        $pass = optional_param('password', '', PARAM_RAW);
        if ($pass !== $CFG->cronremotepassword) {
            // wrong password.
            throw new \moodle_exception('cronerrorpassword', 'admin', $CFG->wwwroot);
        }
    }

    if (CLI_MAINTENANCE) {
        echo "CLI maintenance mode active, cron execution suspended.\n";
        exit(1);
    }

    if (moodle_needs_upgrading()) {
        echo "Moodle upgrade pending, cron execution suspended.\n";
        exit(1);
    }

    $command = $CFG->admin . '/cli/cron.php';

    $force = optional_param('forcecron', false, PARAM_BOOL);
    if ($force) {
        $command .= ' --forcecron=true';
        echo "Moodle cron forced.\n";
    }

    $outputfile = '';

    $savecronlog = $CFG->savecronlog ?? $DB->get_field('config', 'value', ['name' => 'savecronlog']);

    if (!empty($savecronlog)) {
        $outputdir = get_admin_datadir_folder('crons', false);
        $outputfile = $outputdir . '/cron_' . $CFG->siteidentifier . '_' . date("Ymd") . '.log';

        // Zip old files
        $search = $outputdir . '/cron_' . $CFG->siteidentifier . '_' . date("Y", strtotime("-1 day"));
        foreach (glob($search . '*.log') as $filename) {
            if ($outputfile !== $filename) {
                // If not is current cron file, zip it.
                $gzfilename = $filename . '.gz';
                $fp = gzopen($gzfilename, 'w9');
                gzwrite($fp, file_get_contents($filename));
                gzclose($fp);
                if (filesize($gzfilename) > 0) {
                    // If gz file is created, remove unzipped origin file.
                    unlink($filename);
                }
            }
        }

        // Erase old files
        $search = $outputdir . '/cron_' . $CFG->siteidentifier . '_' . date("Ym", strtotime("-2 month"));
        foreach (glob($search . '*.log.gz') as $filename) {
            unlink($filename);
        }
    }

    mtrace('Cron is being executed in background by CLI...');

    run_cli($command, $outputfile, true, $background);

}

/**
 * Check if the current time is considered rush hour in order to apply restrictions
 *
 * @global Object $CFG
 * @return Boolean true if restrictions apply, false otherwise.
 */
function is_rush_hour(): bool
{
    global $CFG;

    // If param is not defined or is false, there's no rush hour.
    if (!isset($CFG->enable_hour_restrictions) || (!$CFG->enable_hour_restrictions)) {
        return false;
    }

    // Get the hour frames
    if (empty($CFG->hour_restrictions)) {
        // Default values
        $timeframes = [
            ['start' => '9:00', 'end' => '13:59', 'days' => '1|2|3|4|5'],
            ['start' => '15:00', 'end' => '16:59', 'days' => '1|2|3|4|5'],
        ];
    } else {
        // Check for serialized data in $CFG->hour_restrictions
        $data = @unserialize($CFG->hour_restrictions);
        if ($CFG->hour_restrictions === 'b:0;' || $data !== false) {
            $timeframes = $data;
        } else {
            $timeframes = $CFG->hour_restrictions;
        }
    }

    // Check the hour frames
    $weekday = idate('w'); // 0 = sunday
    $hour = idate('H');
    $minutes = idate('i');
    $nowminutes = ($hour * 60) + $minutes;

    foreach ($timeframes as $frame) {
        $start = explode(':', $frame['start']);
        $end = explode(':', $frame['end']);
        $days = explode('|', $frame['days']);

        // Check if "today" is in the list of allowed days
        if (!in_array($weekday, $days, true)) {
            continue;
        }

        $startminutes = ((int)$start[0] * 60) + (int)$start[1];
        $endminutes = ((int)$end[0] * 60) + (int)$end[1];

        // Check if the current time is in the frame
        if (($nowminutes >= $startminutes) && ($nowminutes < $endminutes)) {
            return true;
        }
    }

    return false;
}

/**
 * Check if the specified module/block name is enabled
 *
 * @param String $mod module name
 * @return Boolean True if specified module name is enabled and false otherwise.
 *
 * @author sarjona
 **/
function is_enabled_in_agora(string $mod): bool
{
    if (is_agora()) {
        // Disabled in all Agora Moodles
        if ($mod === 'classic' || $mod === 'chat' || $mod === 'bigbluebuttonbn') {
            return false;
        }
    }
    return true;
}

function is_service_enabled($service): bool
{
    if (!is_agora()) {
        return false;
    }

    global $school_info;
    $id_service = 'id_' . $service;

    return !empty($school_info[$id_service]);
}

function get_service_url($service)
{
    global $agora, $CFG;

    if (isset($agora['server']) && is_service_enabled($service)) {
        if ($service === 'nodes') {
            return $agora['server']['nodes'] . $agora['server']['base'] . $CFG->dnscentre . '/';
        }

        return $agora['server']['server'] . $agora['server']['base'] . $CFG->dnscentre . '/' . $service . '/';
    }

    return false;
}

/**
 * Return the directory to store admin things
 *
 * @param bool $exceptiononerror throw exception if error encountered creating file
 * @throws coding_exception
 * @throws invalid_dataroot_permissions
 * @return string|false Returns full path to directory if successful, false if not; may throw exception
 */
function get_admin_datadir($exceptiononerror = true)
{
    global $agora, $CFG;
    if (isset($CFG->admindatadir)) {
        return $CFG->admindatadir;
    }

    if (isset($agora['admin']['datadir'])) {
        $dir = $agora['server']['root'] . $agora['admin']['datadir'] . '/data/moodle2/' . $CFG->siteidentifier;
    } else {
        $dir = $CFG->dataroot . $agora['moodle2']['repository_files'];
    }
    $CFG->admindatadir = make_writable_directory($dir, $exceptiononerror);

    return $CFG->admindatadir;
}

/**
 * Return the directory to store admin things
 *
 * @param bool $exceptiononerror throw exception if error encountered creating file
 * @throws coding_exception
 * @throws invalid_dataroot_permissions
 * @return string|false Returns full path to directory if successful, false if not; may throw exception
 */
function get_moodle2_admin_datadir($exceptiononerror = true)
{
    global $agora, $CFG;
    if (isset($CFG->moodle2admindatadir)) {
        return $CFG->moodle2admindatadir;
    }
    if (isset($agora['admin']['datadir'])) {
        // Portal.
        $dir = $agora['server']['root'] . '/' . $agora['admin']['datadir'] . '/data/moodle2';
    } else {
        // Moodle.
        $dir = $CFG->dataroot . $agora['moodle2']['repository_files'];
    }
    $CFG->moodle2admindatadir = make_writable_directory($dir, $exceptiononerror);
    return $CFG->moodle2admindatadir;
}

/**
 * Return the folder inside admindatadir directory to store admin things
 *
 * @param string $folder to add to the admindatadir
 * @param bool $exceptiononerror throw exception if error encountered creating file
 * @throws coding_exception
 * @throws invalid_dataroot_permissions
 * @return string|false Returns full path to directory if successful, false if not; may throw exception
 */
function get_admin_datadir_folder($folder = '', $exceptiononerror = true)
{
    $directory = get_admin_datadir($exceptiononerror);
    if ($directory && !empty($folder)) {
        $directory .= '/' . $folder;
        $directory = make_writable_directory($directory, $exceptiononerror);
    }

    return $directory;
}

/**
 * Return the folder inside admindatadir directory to store admin things
 *
 * @param string $folder to add to the admindatadir
 * @param bool $exceptiononerror throw exception if error encountered creating file
 * @throws coding_exception
 * @throws invalid_dataroot_permissions
 * @return string|false Returns full path to directory if successful, false if not; may throw exception
 */
function get_moodle2_admin_datadir_folder($folder = '', $exceptiononerror = true)
{
    $directory = get_moodle2_admin_datadir($exceptiononerror);
    if ($directory && !empty($folder)) {
        $directory .= '/' . $folder;
        $directory = make_writable_directory($directory, $exceptiononerror);
    }

    return $directory;
}
