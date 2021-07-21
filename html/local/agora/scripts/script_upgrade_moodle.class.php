<?php

require_once('agora_script_base.class.php');

class script_upgrade_moodle extends agora_script_base
{

    public $title = 'Actualitza Moodle';
    public $info = "Executa el procès d'actualització de Moodle";
    public $cron = false;
    protected $test = false;
    public $cli = true;
    public $api = true;
    protected $category = 'Upgrade';

    protected function _execute($params = [], $execute = true)
    {
        global $CFG;

        define('IGNORE_COMPONENT_CACHE', true);

        $interactive = false;
        $allow_unstable = false;

        require_once $CFG->libdir . '/upgradelib.php'; // General upgrade/install related functions
        require_once $CFG->libdir . '/environmentlib.php';

        if (empty($CFG->version)) {
            mtrace(get_string('missingconfigversion', 'debug'));
            return false;
        }

        require "$CFG->dirroot/version.php"; // Defines $version, $release, $branch and $maturity
        $CFG->target_release = $release; // Used during installation and upgrades

        if ($version < $CFG->version) {
            mtrace(get_string('downgradedcore', 'error'));
            return false;
        }

        $oldversion = "$CFG->release ($CFG->version)";
        $newversion = "$release ($version)";

        $a = new stdClass();
        $a->oldversion = $oldversion;
        $a->newversion = $newversion;

        if (!moodle_needs_upgrading()) {
            mtrace(get_string('cliupgradenoneed', 'core_admin', $newversion));
            return true;
        }

        // Test environment first
        list ($envstatus, $environment_results) = check_moodle_environment(normalize_version($release), ENV_SELECT_RELEASE);
        if (!$envstatus) {
            $errors = environment_get_errors($environment_results);
            mtrace(get_string('environment', 'admin'));
            foreach ($errors as $error) {
                list($info, $report) = $error;
                echo "!! $info !!\n$report\n\n";
            }
            return true;
        }

        // Test plugin dependencies
        $failed = [];
        if (!core_plugin_manager::instance()->all_plugins_ok($version, $failed)) {
            mtrace(get_string('pluginscheckfailed', 'admin', ['pluginslist' => implode(', ', array_unique($failed))]));
            mtrace(get_string('pluginschecktodo', 'admin'));
            return false;
        }

        // make sure we are upgrading to a stable release or display a warning
        if (isset($maturity)) {
            if (($maturity < MATURITY_STABLE) and !$allow_unstable) {
                $maturitylevel = get_string('maturity' . $maturity, 'admin');
                mtrace(get_string('maturitycorewarning', 'admin', $maturitylevel));
                mtrace(get_string('maturityallowunstable', 'admin'));
                return false;
            }
        }

        if ($version > $CFG->version) {
            // We purge all of MUC's caches here.
            // Caches are disabled for upgrade by CACHE_DISABLE_ALL so we must set the first arg to true.
            // This ensures a real config object is loaded and the stores will be purged.
            // This is the only way we can purge custom caches such as memcache or APC.
            // Note: all other calls to caches will still used the disabled API.
            cache_helper::purge_all(true);
            upgrade_core($version, true);
        }

        set_config('release', $release);
        set_config('branch', $branch);

        // Unconditionally upgrade
        upgrade_noncore(true);

        // Log in as admin - We need doanything permission when applying defaults
        \core\session\manager::set_user(get_admin());

        // apply all default settings
        $settingsoutput = admin_apply_default_settings(null, false);

        foreach ($settingsoutput as $setting => $value) {
            if ($options['verbose-settings']) {
                $stringvlaues = array(
                    'name' => $setting,
                    'defaultsetting' => var_export($value, true) // Expand objects.
                );
                echo get_string('cliupgradedefaultverbose', 'admin', $stringvlaues) . PHP_EOL;

            } else {
                echo get_string('cliupgradedefault', 'admin', $setting) . PHP_EOL;

            }
        }

        // This needs to happen at the end to ensure it occurs after all caches
        // have been purged for the last time.
        // This will build a cached version of the current theme for the user
        // to immediately start browsing the site.
        upgrade_themes();

        echo get_string('cliupgradefinished', 'admin', $a) . "\n";

        return true;
    }

}
