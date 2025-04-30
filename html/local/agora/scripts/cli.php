<?php

const CLI_SCRIPT = true;

require dirname(__FILE__, 4) . '/config.php';
require_once $CFG->libdir . '/clilib.php'; // cli only functions.
require_once $CFG->libdir . '/adminlib.php'; // cli only functions.
require_once 'scripts.lib.php';

// Get cli options.
[$options, $params] = cli_get_params(
    ['help' => false, 'script' => false],
    ['h' => 'help', 's' => 'script']
);

$script = $options['script'];
if ($params) {
    $params = implode("\n  ", $params);
}

if ($options['help'] || !$script) {
    if ($script) {
        echo "Params of the script $script:\n";
        scripts_cli_get_params($script);
    } else {
        $help = "Execute Agora operations

Options:
-h, --help            Print out this help
-s, --script          Script to execute

Example:
\$sudo -u www-data /usr/bin/php local/agora/scripts/cli.php

";
        echo $help;
        echo "Avalaible Scripts:\n";
        scripts_cli_list_scripts();
    }
    die;
}

mtrace('Start server Time: ' . date('r') . "\n");
set_time_limit(0);

try {
    $success = scripts_cli_execute_script($script);
} catch (Exception $e) {
    $success = false;
    mtrace($e->getMessage());
}

mtrace('End server Time: ' . date('r') . "\n");

if ($success) {
    mtrace('Script ' . $script . ' succeed');
    echo "\n";
    echo 'success';
    exit (0);
}

mtrace('Script ' . $script . ' failed');
echo "\n";
exit ('error');
