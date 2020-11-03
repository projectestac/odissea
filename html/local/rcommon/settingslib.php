<?php

/**
 * Special checkbox for enable mobile web service
 * If enable then we store the service id of the mobile service into config table
 * If disable then we unstore the service id from the config table
 */
class admin_setting_enablemarsupial extends admin_setting_configselect {

    /**
     * Save the selected setting
     *
     * @param string $data The selected site
     * @return string empty string or error message
     */
    public function write_setting($data) {
        global $CFG;
        set_marsupial_state($data);
        return (parent::write_setting($data));
    }
}