<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * MathJAX filter upgrade code.
 *
 * @package    filter_mathjaxloader
 * @copyright  2014 Damyon Wiese (damyon@moodle.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * @param int $oldversion the version we are upgrading from
 * @return bool result
 */
function xmldb_filter_mathjaxloader_upgrade($oldversion) {
    global $CFG;

    require_once($CFG->dirroot . '/filter/mathjaxloader/db/upgradelib.php');

    if ($oldversion < 2017040300) {

        $httpsurl = get_config('filter_mathjaxloader', 'httpsurl');
        $newcdnurl = filter_mathjaxloader_upgrade_cdn_cloudflare($httpsurl, false);

        set_config('httpsurl', $newcdnurl, 'filter_mathjaxloader');

        $mathjaxconfig = get_config('filter_mathjaxloader', 'mathjaxconfig');
        if (strpos($mathjaxconfig, 'MathJax.Ajax.config.path') === false) {
            $newconfig = 'MathJax.Ajax.config.path["Contrib"] = "{wwwroot}/filter/mathjaxloader/contrib";' . "\n";
            $newconfig .= $mathjaxconfig;

            set_config('mathjaxconfig', $newconfig, 'filter_mathjaxloader');
        }

        upgrade_plugin_savepoint(true, 2017040300, 'filter', 'mathjaxloader');
    }

    if ($oldversion < 2017042602) {

        $httpsurl = get_config('filter_mathjaxloader', 'httpsurl');
        if ($httpsurl === "https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js") {
            set_config('httpsurl', 'https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.1/MathJax.js', 'filter_mathjaxloader');
        }

        $mathjaxconfig = get_config('filter_mathjaxloader', 'mathjaxconfig');

        if (strpos($mathjaxconfig, 'MathJax.Ajax.config.path') !== false) {
            // Now we need to remove this config again because mathjax 2.7.1 supports the extensions on the CDN.
            $configtoremove = 'MathJax.Ajax.config.path["Contrib"] = "{wwwroot}/filter/mathjaxloader/contrib";';

            $mathjaxconfig = str_replace($configtoremove, '', $mathjaxconfig);

            set_config('mathjaxconfig', $mathjaxconfig, 'filter_mathjaxloader');
        }

        upgrade_plugin_savepoint(true, 2017042602, 'filter', 'mathjaxloader');
    }

    // Automatically generated Moodle v3.3.0 release upgrade line.
    // Put any upgrade step following this.

    if ($oldversion < 2017091900) {

        $httpsurl = get_config('filter_mathjaxloader', 'httpsurl');
        if (empty($httpsurl)) {
            // URL is empty, most likely because of bad upgrade path. See MDL-59780.
            set_config('httpsurl', 'https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.1/MathJax.js', 'filter_mathjaxloader');
        }
        upgrade_plugin_savepoint(true, 2017091900, 'filter', 'mathjaxloader');
    }

    if ($oldversion < 2017100900) {
        // Update the MathJax CDN URL to the new default if the site has been using default value.
        $httpsurl = get_config('filter_mathjaxloader', 'httpsurl');
        if ($httpsurl === 'https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.1/MathJax.js') {
            set_config('httpsurl', 'https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.2/MathJax.js', 'filter_mathjaxloader');
        }
        upgrade_plugin_savepoint(true, 2017100900, 'filter', 'mathjaxloader');
    }

    if ($oldversion < 2017101200) {
        // Update default MathJax configuration so that it does not use the Accessible.js config (causes JS errors due to upstream bug).
        $previousdefault = '
MathJax.Hub.Config({
    config: ["Accessible.js", "Safe.js"],
    errorSettings: { message: ["!"] },
    skipStartupTypeset: true,
    messageStyle: "none"
});
';

        $newdefault = '
MathJax.Hub.Config({
    config: ["default.js", "MMLorHTML.js", "Safe.js"],
    errorSettings: { message: ["!"] },
    skipStartupTypeset: true,
    messageStyle: "none"
});
';

        $mathjaxconfig = get_config('filter_mathjaxloader', 'mathjaxconfig');

        if (empty($mathjaxconfig) || filter_mathjaxloader_upgrade_mathjaxconfig_equal($mathjaxconfig, $previousdefault)) {
            set_config('mathjaxconfig', $newdefault, 'filter_mathjaxloader');
        }

        upgrade_plugin_savepoint(true, 2017101200, 'filter', 'mathjaxloader');
    }

    if ($oldversion < 2017102000) {
        // Re-add Accessible.js (we should not have removed it).
        $previousdefault = '
MathJax.Hub.Config({
    config: ["default.js", "MMLorHTML.js", "Safe.js"],
    errorSettings: { message: ["!"] },
    skipStartupTypeset: true,
    messageStyle: "none"
});
';
        $newdefault = '
MathJax.Hub.Config({
    config: ["Accessible.js", "Safe.js"],
    errorSettings: { message: ["!"] },
    skipStartupTypeset: true,
    messageStyle: "none"
});
';

        $mathjaxconfig = get_config('filter_mathjaxloader', 'mathjaxconfig');

        if (empty($mathjaxconfig) || filter_mathjaxloader_upgrade_mathjaxconfig_equal($mathjaxconfig, $previousdefault)) {
            set_config('mathjaxconfig', $newdefault, 'filter_mathjaxloader');
        }

        upgrade_plugin_savepoint(true, 2017102000, 'filter', 'mathjaxloader');
    }

    // Automatically generated Moodle v3.4.0 release upgrade line.
    // Put any upgrade step following this.

    // Automatically generated Moodle v3.5.0 release upgrade line.
    // Put any upgrade step following this.

    // Automatically generated Moodle v3.6.0 release upgrade line.
    // Put any upgrade step following this.

    // Automatically generated Moodle v3.7.0 release upgrade line.
    // Put any upgrade step following this.

    // Automatically generated Moodle v3.8.0 release upgrade line.
    // Put any upgrade step following this.

    if ($oldversion < 2019111801) {
        // Update CDN url.
        $originalurl = 'https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.2/MathJax.js';
        $newurl = 'https://cdn.jsdelivr.net/npm/mathjax@2.7.8/MathJax.js';
        $currenturl = get_config('filter_mathjaxloader', 'httpsurl');
        if ($currenturl == $originalurl) {
            set_config('httpsurl', $newurl, 'filter_mathjaxloader');
        }

        upgrade_plugin_savepoint(true, 2019111801, 'filter', 'mathjaxloader');
    }

    return true;
}
