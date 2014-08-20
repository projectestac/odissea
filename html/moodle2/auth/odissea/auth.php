<?php

/**
 * @author Sara Arjona
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 * @package moodle multiauth
 *
 * Authentication Plugin: Odissea Authentication
 *
 * Authentication for Odissea Moodle. Let authenticate users against XTEC's LDAP,
 * using the identity card like username. In the future will also let connect to GICAR
 *
 */
if (!defined('MOODLE_INTERNAL')) {
    die('Direct access to this script is forbidden.');    ///  It must be included from a Moodle page
}

require_once($CFG->libdir . '/authlib.php');
require_once($CFG->libdir . '/ldaplib.php');

/**
 * Plugin for no authentication.
 */
class auth_plugin_odissea extends auth_plugin_base {

    /**
     * Constructor.
     */
    function auth_plugin_odissea() {
        $this->authtype = 'odissea';
        $this->pluginconfig = 'auth/' . $this->authtype;
        $this->config = get_config($this->pluginconfig);
        $this->errorlogtag = '[AUTH ODISSEA] ';

        if (empty($this->config->objectclass)) {
            // Can't send empty filter
            $this->config->objectclass = '(objectClass=*)';
        }
    }

    /**
     * Returns true if the username and password works or doesn't exist and false
     * if the user exists and the password is wrong.
     *
     * @param string $username The username
     * @param string $password The password
     * @return bool Authentication success or failure.
     */
    function user_login($username, $password) {
        // Don't allow access to school codes
        $pattern = '/^[abce]\d{7}$/'; // Matches a1234567
        if (preg_match($pattern, $username)) {
            print_error('auth_odissea_no_schoolcode', 'auth_odissea');
            return false;
        }

        if (!function_exists('ldap_bind')) {
            print_error('auth_ldapnotinstalled', 'auth_ldap');
            return false;
        }

        // Trying to find specified user in LDAP-XTEC and LDAP-GICAR
        list($ldapconnection, $ldapuserdn) = $this->get_userdn($username, $password);

        // Try to bind with current username and password
        $ldap_login = @ldap_bind($ldapconnection, $ldapuserdn, $password);
        $this->ldap_close();
        if ($ldap_login) {
            return true;
        }
        return false;
    }

    /**
     *
     * @param type $username
     * @param type $password
     * @return array($ldapconnection, $userdn, $nif_attribute) or FALSE if the user is not found
     */
    function get_userdn($username, $password = false) {
        // Hack to solve the lack of password on get_userinfo
        global $auth_odissea_pass;
        if($password) $auth_odissea_pass = $password;
        else $password = $auth_odissea_pass;

        $ldapconnection = $this->get_xtecconnection($username, $password);
        $user_dn = $this->ldap_find_userdn($ldapconnection, $username);

        if (!$user_dn) {
            // If user_dn is empty, user does not exist so it's needed to search in GICAR-LDAP
            $this->ldap_close();
            $ldapconnection = $this->get_gicarconnection();
            $ldap_result = ldap_search($ldapconnection, $this->config->gicar_contexts, '(' . $this->config->gicar_nif_attribute . '=' . $username . ')', array($this->config->gicar_user_attribute));
            $gicar_entry = ldap_first_entry($ldapconnection, $ldap_result);
            if ($gicar_id_array = ldap_get_values($ldapconnection, $gicar_entry, $this->config->gicar_user_attribute)) {
                $gicar_id = $gicar_id_array[0];
            }
            $user_dn = $this->ldap_find_userdn($ldapconnection, $gicar_id, $this->config->gicar_contexts, $this->config->gicar_user_attribute);
            if (!$user_dn) {
                // If user_dn is empty, user does not exist
                $this->ldap_close();
                return false;
            } else {
                $nif_attribute = $this->config->gicar_nif_attribute;
            }
        } else {
            $nif_attribute = $this->config->nif_attribute;
        }
        return array($ldapconnection, $user_dn, $nif_attribute);
    }

    /**
     * Get ldapconnection using specified username and password as bind settings
     * @return resource LDAP-XTEC connection
     */
    function get_xtecconnection($username, $password) {
        $bind_dn = $this->config->user_attribute . '=' . $username . ',' . $this->config->bind_dn;
        $ldapconnection = $this->ldap_connect($this->config->host_url, $this->config->ldap_version, $bind_dn, $password);

        return $ldapconnection;
    }

    /**
     * Get ldapconnection using GICAR bind settings
     * @return resource LDAP-GICAR connection
     */
    function get_gicarconnection() {
        $ldapconnection = $this->ldap_connect($this->config->gicar_host_url, $this->config->gicar_ldap_version, $this->config->gicar_bind_dn, $this->config->gicar_bind_pw);

        return $ldapconnection;
    }

    /**
     * Reads user information from external authentication server and returns it in array()
     * Function should return all information available.
     *
     * @param string $username username
     *
     * @return mixed array with no magic quotes or false on error
     */
    function get_userinfo($username, $notused = false) {
        // Trying to find specified user in LDAP-XTEC and LDAP-GICAR
        list($ldapconnection, $ldapuserdn, $nif_attribute) = $this->get_userdn($username);
        $search_attribs = array();
        $attrmap = $this->odissea_attributes($nif_attribute);
        foreach ($attrmap as $key => $values) {
            if (!is_array($values)) {
                $values = array($values);
            }
            foreach ($values as $value) {
                if (!in_array($value, $search_attribs)) {
                    array_push($search_attribs, $value);
                }
            }
        }

        if (!$user_info_result = ldap_read($ldapconnection, $ldapuserdn, '(objectClass=*)', $search_attribs)) {
            $this->ldap_close();
            return false; // error!
        }

        $user_entry = ldap_get_entries_moodle($ldapconnection, $user_info_result);
        if (empty($user_entry)) {
            $this->ldap_close();
            return false; // entry not found
        }

        $result = array();
        foreach ($attrmap as $key => $values) {
            if (!is_array($values)) {
                $values = array($values);
            }
            $ldapval = NULL;
            foreach ($values as $value) {
                $entry = array_change_key_case($user_entry[0], CASE_LOWER);
                if (($value == 'dn') || ($value == 'distinguishedname')) {
                    $result[$key] = $ldapuserdn;
                    continue;
                }
                if (!array_key_exists($value, $entry)) {
                    continue; // wrong data mapping!
                }
                if (is_array($entry[$value])) {
                    if ($value == $this->config->nif_attribute || $value == $this->config->gicar_nif_attribute) {
                        $entry[$value][0] = str_replace(' ', '', $entry[$value][0]);
                    }
                    $newval = textlib::convert($entry[$value][0], $this->config->ldapencoding, 'utf-8');
                } else {
                    if ($value == $this->config->nif_attribute || $value == $this->config->gicar_nif_attribute) {
                        $entry[$value] = str_replace(' ', '', $entry[$value]);
                    }
                    $newval = textlib::convert($entry[$value], $this->config->ldapencoding, 'utf-8');
                }
                if (!empty($newval)) { // favour ldap entries that are set
                    $ldapval = $newval;
                }
            }
            if (!is_null($ldapval)) {
                $result[$key] = $ldapval;
            }
        }

        $this->ldap_close();
        return $result;
    }

    function prevent_local_passwords() {
        return true;
    }

    /**
     * Returns true if this authentication plugin is 'internal'.
     *
     * @return bool
     */
    function is_internal() {
        return false;
    }

    /**
     * Returns true if this authentication plugin can change the user's
     * password.
     *
     * @return bool
     */
    function can_change_password() {
        return false;
    }

    /**
     * Returns the URL for changing the user's pw, or empty if the default can
     * be used.
     *
     * @return moodle_url
     */
    function change_password_url() {
        return null;
    }

    /**
     * Returns true if plugin allows resetting of internal password.
     *
     * @return bool
     */
    function can_reset_password() {
        return false;
    }

    /**
     * Prints a form for configuring this authentication plugin.
     *
     * This function is called from admin/auth.php, and outputs a full page with
     * a form for configuring this plugin.
     *
     * @param array $page An object containing all the data for this page.
     */
    function config_form($config, $err, $user_fields) {
        global $CFG, $OUTPUT;

        if (!function_exists('ldap_connect')) { // Is php-ldap really there?
            echo $OUTPUT->notification(get_string('auth_ldap_noextension', 'auth_ldap'));
            return;
        }

        include('config.html');
    }

    /**
     * Processes and stores configuration data for this authentication plugin.
     */
    function process_config($config) {
        // Set to defaults if undefined
        // Common
        if (!isset($config->user_type)) {
            $config->user_type = 'default';
        }
        if (!isset($config->opt_deref)) {
            $config->opt_deref = LDAP_DEREF_NEVER;
        }
        if (!isset($config->search_sub)) {
            $config->search_sub = '';
        }
        // XTEC
        if (!isset($config->host_url)) {
            $config->host_url = '';
        }
        if (empty($config->ldapencoding)) {
            $config->ldapencoding = 'utf-8';
        }
        if (!isset($config->ldap_version)) {
            $config->ldap_version = '3';
        }
        if (!isset($config->user_type)) {
            $config->user_type = 'default';
        }
        if (!isset($config->opt_deref)) {
            $config->opt_deref = LDAP_DEREF_NEVER;
        }
        if (empty($config->user_attribute)) {
            $config->user_attribute = 'cn';
        }
        if (empty($config->nif_attribute)) {
            $config->nif_attribute = 'nif';
        }
        if (!isset($config->search_sub)) {
            $config->search_sub = '';
        }
        if (!isset($config->contexts)) {
            $config->contexts = '';
        }
        if (!isset($config->bind_dn)) {
            $config->bind_dn = '';
        }
        if (!isset($config->bind_pw)) {
            $config->bind_pw = '';
        }
        // GICAR defaults
        if (!isset($config->gicar_host_url)) {
            $config->gicar_host_url = '';
        }
        if (empty($config->gicar_ldapencoding)) {
            $config->gicar_ldapencoding = 'utf-8';
        }
        if (!isset($config->gicar_ldap_version)) {
            $config->gicar_ldap_version = '3';
        }
        if (empty($config->gicar_user_attribute)) {
            $config->gicar_user_attribute = 'sAMAccountName';
        }
        if (empty($config->gicar_nif_attribute)) {
            $config->gicar_nif_attribute = 'employeeID';
        }
        if (!isset($config->gicar_contexts)) {
            $config->gicar_contexts = '';
        }
        if (!isset($config->gicar_bind_dn)) {
            $config->gicar_bind_dn = '';
        }
        if (!isset($config->gicar_bind_pw)) {
            $config->gicar_bind_pw = '';
        }


        // Try to remove duplicates before storing the contexts (to avoid problems in sync_users()).
        $config->contexts = explode(';', $config->contexts);
        $config->contexts = array_map(create_function('$x', 'return textlib::strtolower(trim($x));'), $config->contexts);
        $config->contexts = implode(';', array_unique($config->contexts));

        $config->gicar_contexts = explode(';', $config->gicar_contexts);
        $config->gicar_contexts = array_map(create_function('$x', 'return textlib::strtolower(trim($x));'), $config->gicar_contexts);
        $config->gicar_contexts = implode(';', array_unique($config->gicar_contexts));

        // Save common settings
        set_config('user_type', textlib::strtolower(trim($config->user_type)), $this->pluginconfig);
        set_config('opt_deref', $config->opt_deref, $this->pluginconfig);
        set_config('search_sub', $config->search_sub, $this->pluginconfig);
        // Save XTEC settings
        set_config('host_url', trim($config->host_url), $this->pluginconfig);
        set_config('ldapencoding', trim($config->ldapencoding), $this->pluginconfig);
        set_config('ldap_version', $config->ldap_version, $this->pluginconfig);
        set_config('user_attribute', textlib::strtolower(trim($config->user_attribute)), $this->pluginconfig);
        set_config('nif_attribute', textlib::strtolower(trim($config->nif_attribute)), $this->pluginconfig);
        set_config('contexts', $config->contexts, $this->pluginconfig);
        set_config('bind_dn', trim($config->bind_dn), $this->pluginconfig);
        set_config('bind_pw', $config->bind_pw, $this->pluginconfig);
        // Save GICAR settings
        set_config('gicar_host_url', trim($config->gicar_host_url), $this->pluginconfig);
        set_config('gicar_ldapencoding', trim($config->gicar_ldapencoding), $this->pluginconfig);
        set_config('gicar_ldap_version', $config->gicar_ldap_version, $this->pluginconfig);
        set_config('gicar_user_attribute', textlib::strtolower(trim($config->gicar_user_attribute)), $this->pluginconfig);
        set_config('gicar_nif_attribute', textlib::strtolower(trim($config->gicar_nif_attribute)), $this->pluginconfig);
        set_config('gicar_contexts', $config->gicar_contexts, $this->pluginconfig);
        set_config('gicar_bind_dn', trim($config->gicar_bind_dn), $this->pluginconfig);
        set_config('gicar_bind_pw', $config->gicar_bind_pw, $this->pluginconfig);

        return true;
    }

    /**
     * Connect to the LDAP server, using the plugin configured
     * settings. It's actually a wrapper around ldap_connect_moodle()
     *
     * @param type $host_url
     * @param type $ldapversion
     * @param type $binddn
     * @param type $bindpwd
     * @return resource A valid LDAP connection (or dies if it can't connect)
     */
    function ldap_connect($host_url, $ldapversion, $binddn, $bindpwd) {
        global $CFG;
        // Cache ldap connections. They are expensive to set up
        // and can drain the TCP/IP ressources on the server if we
        // are syncing a lot of users (as we try to open a new connection
        // to get the user details). This is the least invasive way
        // to reuse existing connections without greater code surgery.
        if (!empty($this->ldapconnection)) {
            $this->ldapconns++;
            return $this->ldapconnection;
        }

        if ($ldapconnection = ldap_connect_moodle($host_url, $ldapversion, $this->config->user_type, $binddn, $bindpwd, $this->config->opt_deref, $debuginfo)) {
            $this->ldapconns = 1;
            $this->ldapconnection = $ldapconnection;
            return $ldapconnection;
        }

//        if ($bindpwd != '' && $CFG->debugdisplay) {
//            print_error('auth_ldap_noconnect_all', 'auth_ldap', '', $debuginfo);
//        }
    }

    /**
     * Disconnects from a LDAP server
     *
     * @param force boolean Forces closing the real connection to the LDAP server, ignoring any
     *                      cached connections. This is needed when we've used paged results
     *                      and want to use normal results again.
     */
    function ldap_close($force = false) {
        $this->ldapconns--;
        if (($this->ldapconns == 0) || ($force)) {
            $this->ldapconns = 0;
            @ldap_close($this->ldapconnection);
            unset($this->ldapconnection);
        }
    }

    /**
     * Search specified contexts for username and return the user dn
     * like: cn=username,ou=suborg,o=org. It's actually a wrapper
     * around ldap_find_userdn().
     *
     * @param resource $ldapconnection a valid LDAP connection
     * @param string $extusername the username to search (in external LDAP encoding, no db slashes)
     * @param string $contexts
     * @param string $user_attribute
     * @return mixed the user dn (external LDAP encoding) or false
     */
    function ldap_find_userdn($ldapconnection, $extusername, $contexts, $user_attribute) {
        if (empty($contexts)) {
            $contexts = $this->config->contexts;
        }
        $ldap_contexts = explode(';', $contexts);
        if (!empty($this->config->create_context)) {
            array_push($ldap_contexts, $this->config->create_context);
        }
        if (empty($user_attribute)) {
            $user_attribute = $this->config->user_attribute;
        }
        return ldap_find_userdn($ldapconnection, $extusername, $ldap_contexts, $this->config->objectclass, $user_attribute, $this->config->search_sub);
    }

    /**
     * Returns user attribute mappings between moodle and LDAP
     *
     * @return array
     */
    function odissea_attributes($nif_attribute) {
        $moodleattributes = array();
        foreach ($this->userfields as $field) {
            if (!empty($this->config->{"field_map_$field"})) {
                $moodleattributes[$field] = textlib::strtolower(trim($this->config->{"field_map_$field"}));
                if (preg_match('/,/', $moodleattributes[$field])) {
                    $moodleattributes[$field] = explode(',', $moodleattributes[$field]); // split ?
                }
            }
        }
        $moodleattributes['username'] = textlib::strtolower(trim($nif_attribute));
        return $moodleattributes;
    }

}
