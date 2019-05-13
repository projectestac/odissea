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
 * External functions backported.
 *
 * @package    local_mobile
 * @copyright  2014 Juan Leyva <juan@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

require_once("$CFG->libdir/externallib.php");

class local_mobile_external extends external_api {

    /**
     * Returns description of method parameters
     *
     * @return external_function_parameters
     */
    public static function get_plugin_settings_parameters() {
        return new external_function_parameters(
            array()
        );
    }

    /**
     * Get all the plugin settings.
     * PLEASE DO NOT DELETE THIS FUNCTION.
     * The Mobile app relies in this function to detect if the site is using the local_mobile plugin.
     *
     * @return array of settings
     */
    public static function get_plugin_settings() {

        // Warnings array, it can be empty at the end but is mandatory.
        $warnings = array();
        $settings = array();

        $pluginsettings = get_config('local_mobile');
        foreach ($pluginsettings as $key => $val) {
            $settings[] = array(
                'name' => $key,
                'value' => $val,
            );
        }

        $results = array(
            'settings' => $settings,
            'warnings' => $warnings
        );
        return $results;
    }

    /**
     * Returns description of method result value
     *
     * @return external_description
     */
    public static function get_plugin_settings_returns() {
        return new external_single_structure(
            array(
                'settings' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'name' => new external_value(PARAM_NOTAGS, 'setting name'),
                            'value' => new external_value(PARAM_RAW, 'setting value'),
                        )
                    )
                ),
                'warnings' => new external_warnings(),
            )
        );
    }

    /**
     * Returns description of get_config() parameters.
     *
     * @return external_function_parameters
     * @since  Moodle 3.2
     */
    public static function tool_mobile_get_config_parameters() {
        return \tool_mobile\external::get_config_parameters();
    }

    /**
     * Returns a list of site settings, filtering by section.
     *
     * @param string $section settings section name
     * @return array with the settings and warnings
     * @since  Moodle 3.2
     */
    public static function tool_mobile_get_config($section = '') {

        $params = self::validate_parameters(self::tool_mobile_get_config_parameters(), array('section' => $section));

        $settings = \tool_mobile\api::get_config($params['section']);

        if (empty($section) or $section == 'mobileapp') {
            $settings->tool_mobile_forcelogout = get_config('local_mobile', 'forcelogout');
            $settings->tool_mobile_customlangstrings = get_config('local_mobile', 'customlangstrings');
            $settings->tool_mobile_disabledfeatures = get_config('local_mobile', 'disabledfeatures');
            $settings->tool_mobile_custommenuitems = get_config('local_mobile', 'custommenuitems');
        }

        $result['settings'] = array();
        foreach ($settings as $name => $value) {
            $result['settings'][] = array(
                'name' => $name,
                'value' => $value,
            );
        }

        $result['warnings'] = array();
        return $result;
    }

    /**
     * Returns description of tool_mobile_get_config() result value.
     *
     * @return external_description
     * @since  Moodle 3.2
     */
    public static function tool_mobile_get_config_returns() {
        return \tool_mobile\external::get_config_returns();
    }

    /**
     * Returns description of get_plugins_supporting_mobile() parameters.
     *
     * @return external_function_parameters
     * @since  Moodle 3.1
     */
    public static function tool_mobile_get_plugins_supporting_mobile_parameters() {
        return new external_function_parameters(array());
    }

    /**
     * Returns a list of Moodle plugins supporting the mobile app.
     *
     * @return array an array of warnings and objects containing the plugin information
     * @since  Moodle 3.1
     */
    public static function tool_mobile_get_plugins_supporting_mobile() {

        global $CFG;
        require_once($CFG->libdir . '/adminlib.php');

        $pluginsinfo = [];
        // For not logged users return only auth plugins.
        // This is to avoid anyone (not being a registered user) to obtain and download all the site remote add-ons.
        if (!isloggedin()) {
            $plugintypes = array('auth' => $CFG->dirroot.'/auth');
        } else {
            $plugintypes = core_component::get_plugin_types();
        }

        foreach ($plugintypes as $plugintype => $unused) {
            // We need to include files here.
            $pluginswithfile = core_component::get_plugin_list_with_file($plugintype, 'db' . DIRECTORY_SEPARATOR . 'mobile.php');
            foreach ($pluginswithfile as $plugin => $notused) {
                $path = core_component::get_plugin_directory($plugintype, $plugin);
                $component = $plugintype . '_' . $plugin;
                $version = get_component_version($component);

                require("$path/db/mobile.php");
                foreach ($addons as $addonname => $addoninfo) {

                    // Add handlers (for site add-ons).
                    $handlers = !empty($addoninfo['handlers']) ? $addoninfo['handlers'] : array();
                    $handlers = json_encode($handlers); // JSON formatted, since it is a complex structure that may vary over time.

                    // Now language strings used by the app.
                    $lang = array();
                    if (!empty($addoninfo['lang'])) {
                        $stringmanager = get_string_manager();
                        $langs = $stringmanager->get_list_of_translations();
                        foreach ($langs as $langid => $langname) {
                            foreach ($addoninfo['lang'] as $stringinfo) {
                                $lang[$langid][$stringinfo[0]] =
                                    $stringmanager->get_string($stringinfo[0], $stringinfo[1], null, $langid);
                            }
                        }
                    }
                    $lang = json_encode($lang);

                    $plugininfo = array(
                        'component' => $component,
                        'version' => $version,
                        'addon' => $addonname,
                        'dependencies' => !empty($addoninfo['dependencies']) ? $addoninfo['dependencies'] : array(),
                        'fileurl' => '',
                        'filehash' => '',
                        'filesize' => 0,
                        'handlers' => $handlers,
                        'lang' => $lang,
                    );

                    // All the mobile packages must be under the plugin mobile directory.
                    $package = $path . '/mobile/' . $addonname . '.zip';
                    if (file_exists($package)) {
                        $plugininfo['fileurl'] = $CFG->wwwroot . '' . str_replace($CFG->dirroot, '', $package);
                        $plugininfo['filehash'] = sha1_file($package);
                        $plugininfo['filesize'] = filesize($package);
                    }
                    $pluginsinfo[] = $plugininfo;
                }
            }
        }

        return array(
            'plugins' => $pluginsinfo,
            'warnings' => array(),
        );
    }

    /**
     * Returns description of get_plugins_supporting_mobile() result value.
     *
     * @return external_description
     * @since  Moodle 3.1
     */
    public static function tool_mobile_get_plugins_supporting_mobile_returns() {
        return new external_single_structure(
            array(
                'plugins' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'component' => new external_value(PARAM_COMPONENT, 'The plugin component name.'),
                            'version' => new external_value(PARAM_NOTAGS, 'The plugin version number.'),
                            'addon' => new external_value(PARAM_COMPONENT, 'The Mobile addon (package) name.'),
                            'dependencies' => new external_multiple_structure(
                                                new external_value(PARAM_COMPONENT, 'Mobile addon name.'),
                                                'The list of Mobile addons this addon depends on.'
                                               ),
                            'fileurl' => new external_value(PARAM_URL, 'The addon package url for download
                                                            or empty if it doesn\'t exist.'),
                            'filehash' => new external_value(PARAM_RAW, 'The addon package hash or empty if it doesn\'t exist.'),
                            'filesize' => new external_value(PARAM_INT, 'The addon package size or empty if it doesn\'t exist.'),
                            'handlers' => new external_value(PARAM_RAW, 'Handlers definition (JSON)', VALUE_OPTIONAL),
                            'lang' => new external_value(PARAM_RAW, 'Language strings used by the handlers (JSON)', VALUE_OPTIONAL),
                        )
                    )
                ),
                'warnings' => new external_warnings(),
            )
        );
    }

    /**
     * Returns description of get_fragment parameters
     *
     * @return external_function_parameters
     * @since Moodle 3.5
     */
    public static function tool_mobile_get_content_parameters() {
        return new external_function_parameters(
            array(
                'component' => new external_value(PARAM_COMPONENT, 'Component where the class is e.g. mod_assign.'),
                'method' => new external_value(PARAM_ALPHANUMEXT, 'Method to execute in class \$component\output\mobile.'),
                'args' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'name' => new external_value(PARAM_ALPHANUMEXT, 'Param name.'),
                            'value' => new external_value(PARAM_RAW, 'Param value.')
                        )
                    ), 'Args for the method are optional.', VALUE_OPTIONAL
                )
            )
        );
    }

    /**
     * Returns a piece of content to be displayed in the Mobile app, it usually returns a template, javascript and
     * other structured data that will be used to render a view in the Mobile app..
     *
     * Callbacks that are called by this web service are responsible for doing the appropriate security checks
     * to access the information returned.
     *
     * @param string $component Name of the component.
     * @param string $method Function method name in class \$component\output\mobile.
     * @param array $args optional arguments for the method.
     * @return array HTML, JavaScript and structured data to create a view in the app.
     * @since Moodle 3.5
     */
    public static function tool_mobile_get_content($component, $method, $args = array()) {
        global $OUTPUT, $PAGE, $USER;

        $params = self::validate_parameters(self::tool_mobile_get_content_parameters(),
                array(
                    'component' => $component,
                    'method' => $method,
                    'args' => $args
                )
        );

        // Reformat arguments into something less unwieldy.
        $arguments = array();
        foreach ($params['args'] as $paramargument) {
            $arguments[$paramargument['name']] = $paramargument['value'];
        }

        $classname = '\\' . $params['component'] .'\output\mobile';
        if (!method_exists($classname, $params['method'])) {
            throw new coding_exception("Missing method in $classname");
        }
        $result = call_user_func_array(array($classname, $params['method']), array($arguments));

        // Populate otherdata.
        $otherdata = array();
        if (!empty($result['otherdata'])) {
            $result['otherdata'] = (array) $result['otherdata'];
            foreach ($result['otherdata'] as $name => $value) {
                $otherdata[] = array(
                    'name' => $name,
                    'value' => $value
                );
            }
        }

        return array(
            'templates'  => !empty($result['templates']) ? $result['templates'] : array(),
            'javascript' => !empty($result['javascript']) ? $result['javascript'] : '',
            'otherdata'  => $otherdata,
            'files'      => !empty($result['files']) ? $result['files'] : array(),
            'restrict'   => !empty($result['restrict']) ? $result['restrict'] : array(),
        );
    }

    /**
     * Returns description of tool_mobile_get_content() result value
     *
     * @return array
     * @since Moodle 3.5
     */
    public static function tool_mobile_get_content_returns() {
        return new external_single_structure(
            array(
                'templates' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'id' => new external_value(PARAM_TEXT, 'ID of the template.'),
                            'html' => new external_value(PARAM_RAW, 'HTML code.'),
                        )
                    )
                ),
                'javascript' => new external_value(PARAM_RAW, 'JavaScript code'),
                'otherdata' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'name' => new external_value(PARAM_RAW, 'Field name.'),
                            'value' => new external_value(PARAM_RAW, 'Field value.')
                        )
                    ),
                    'Other data that can be used or manipulated by the template via 2-way data-binding.'
                ),
                'files' => new external_files('Files in the content.'),
                'restrict' => new external_single_structure(
                    array(
                        'users' => new external_multiple_structure(
                            new external_value(PARAM_INT, 'user id'), 'List of allowed users.', VALUE_OPTIONAL
                        ),
                        'courses' => new external_multiple_structure(
                            new external_value(PARAM_INT, 'course id'), 'List of allowed courses.', VALUE_OPTIONAL
                        ),
                    ),
                    'Restrict to certain users or courses'
                )
            )
        );
    }

}
