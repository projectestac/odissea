<?php

require_once('agora_script_base.class.php');

class script_moodle_register extends agora_script_base{

    public $title = 'Auto-registra Moodle';
    public $info = "Registra o actualitza les dades de registre a Moodle per poder rebre notificacions PUSH";
    public $cron = false;
    protected $test = false;
    public $cli = true;
    public $api = true;
    protected $category = "Utils";

    public function params() {
        $params = array();
        $params['disable'] = optional_param('disable', false, PARAM_BOOL);
        return $params;
    }

    protected function _execute($params = array(), $execute = true) {
        global $CFG, $DB, $OUTPUT;
        require_once($CFG->dirroot . '/' . $CFG->admin . '/registration/lib.php');
        require_once($CFG->dirroot . '/course/lib.php');
        require_once($CFG->libdir . '/badgeslib.php');


        $huburl = HUB_MOODLEORGHUBURL;
        $hubname = 'Moodle.org';
        $registrationmanager = new registration_manager();

        $registeredhub = $registrationmanager->get_registeredhub($huburl);

        if (!empty($registeredhub->token) && $registeredhub->token != $CFG->siteidentifier) {
            require_once($CFG->dirroot . "/webservice/xmlrpc/lib.php");
            $serverurl = $huburl . "/local/hub/webservice/webservices.php";
            $xmlrpcclient = new webservice_xmlrpc_client($serverurl, $registeredhub->token);
            if ($params['disable']) {
                $function = 'hub_unregister_site';
                $params = array();
                try {
                    $result = $xmlrpcclient->call($function, $params);
                    $registrationmanager->delete_registeredhub($huburl);
                    echo $OUTPUT->notification(get_string('unregister', 'hub').' OK', 'notifysuccess');
                    return true;
                } catch (Exception $e) {
                    echo $OUTPUT->notification(get_string('unregistrationerror', 'hub', $e->getMessage()));
                    return false;
                }
            } else {
                $function = 'hub_update_site_info';
                $siteinfo = $registrationmanager->get_site_info($huburl);
                $siteinfo['description'] = html_to_text($siteinfo['description']);
                $params = array('siteinfo' => $siteinfo);
                try {
                    $result = $xmlrpcclient->call($function, $params);
                    echo $OUTPUT->notification(get_string('siteupdatesend', 'hub'), 'notifysuccess');
                    return true;
                } catch (Exception $e) {
                    echo $OUTPUT->notification(get_string('errorregistration', 'hub', $e->getMessage()));
                    return false;
                }
            }
        } else if ($params['disable']) {
            return true;
        }

        $site = get_site();

        // Save the settings.
        $cleanhuburl = clean_param($huburl, PARAM_ALPHANUMEXT);
        if (isset($CFG->mailheader)) {
            $mailheader = str_replace(array('[', ']'), "", $CFG->mailheader);
            $fullname = $mailheader.': '.$site->fullname;
        } else {
            $fullname = $site->fullname;
        }
        echo $fullname;
        $sitename = format_string($fullname, true, array('context' => context_course::instance(SITEID)));
        set_config('site_name_' . $cleanhuburl, $sitename, 'hub');
        $sitedescription = html_to_text($site->summary);
        if(empty($sitedescription)) {
            $sitedescription = 'Moodle';
        }
        set_config('site_description_' . $cleanhuburl, $sitedescription, 'hub');
        $contactname = 'Administrador/a XTEC';
        set_config('site_contactname_' . $cleanhuburl, $contactname, 'hub');
        $contactemail = 'agora@xtec.cat';
        set_config('site_contactemail_' . $cleanhuburl, $contactemail, 'hub');
        set_config('site_contactphone_' . $cleanhuburl, "", 'hub');
        $imageurl = $CFG->wwwroot.'/theme/image.php/xtec2/theme/1420623267/logo_main';
        set_config('site_imageurl_' . $cleanhuburl, $imageurl, 'hub');
        set_config('site_privacy_' . $cleanhuburl, HUB_SITENOTPUBLISHED, 'hub');
        set_config('site_address_' . $cleanhuburl, "", 'hub');
        set_config('site_region_' . $cleanhuburl, "", 'hub');
        set_config('site_country_' . $cleanhuburl, 'ES', 'hub');
        set_config('site_language_' . $cleanhuburl, 'ca', 'hub');
        set_config('site_geolocation_' . $cleanhuburl, "", 'hub');
        set_config('site_contactable_' . $cleanhuburl, 0, 'hub');
        set_config('site_emailalert_' . $cleanhuburl, 0, 'hub');
        $coursecount = $DB->count_records('course') - 1;
        set_config('site_coursesnumber_' . $cleanhuburl, $coursecount, 'hub');
        $usercount = $DB->count_records('user', array('deleted' => 0));
        set_config('site_usersnumber_' . $cleanhuburl, $usercount, 'hub');
        $roleassigncount = $DB->count_records('role_assignments');
        set_config('site_roleassignmentsnumber_' . $cleanhuburl, $roleassigncount, 'hub');
        $postcount = $DB->count_records('forum_posts');
        set_config('site_postsnumber_' . $cleanhuburl, $postcount, 'hub');
        $questioncount = $DB->count_records('question');
        set_config('site_questionsnumber_' . $cleanhuburl, $questioncount, 'hub');
        $resourcecount = $DB->count_records('resource');
        set_config('site_resourcesnumber_' . $cleanhuburl, $resourcecount, 'hub');
        $badges = $DB->count_records_select('badge', 'status <> ' . BADGE_STATUS_ARCHIVED);
        set_config('site_badges_' . $cleanhuburl, $badges, 'hub');
        $issuedbadges = $DB->count_records('badge_issued');
        set_config('site_issuedbadges_' . $cleanhuburl, $issuedbadges, 'hub');
        $modulenumberaverage = average_number_of_courses_modules();
        set_config('site_modulenumberaverage_' . $cleanhuburl, $modulenumberaverage, 'hub');
        $participantnumberaverage = average_number_of_participants();
        set_config('site_participantnumberaverage_' . $cleanhuburl, $participantnumberaverage, 'hub');


        $hubconfig = get_config('hub');

        $unconfirmedhub = $registrationmanager->get_unconfirmedhub($huburl);
        if (empty($unconfirmedhub)) {
            //we save the token into the communication table in order to have a reference
            $unconfirmedhub = new stdClass();
            $unconfirmedhub->token = $registrationmanager->get_site_secret_for_hub($huburl);
            $unconfirmedhub->secret = $unconfirmedhub->token;
            $unconfirmedhub->huburl = $huburl;
            $unconfirmedhub->hubname = $hubname;
            $unconfirmedhub->confirmed = 0;
            $unconfirmedhub->id = $registrationmanager->add_registeredhub($unconfirmedhub);
        }

        print_object($unconfirmedhub);

        // Retrieve the optional info (specially course number, user number, module number average...).
        $params = $registrationmanager->get_site_info($huburl);
        $params['token'] = $unconfirmedhub->token;
        $params['url'] = $CFG->wwwroot;

        $returnurl = $this->register($huburl, $params);
        if (!$returnurl) {
            return false;
        }
        $url = parse_url($returnurl);
        parse_str($url['query'], $params);

        if (isset($params['error']) and !empty($params['error']) and $params['error'] == 'urlalreadyexist') {
            echo $OUTPUT->notification(get_string('urlalreadyregistered', 'hub'));
            return false;
        }

        if (!empty($unconfirmedhub) and $unconfirmedhub->token == $params['token']) {
            $unconfirmedhub->token = $params['newtoken'];
            $unconfirmedhub->confirmed = 1;
            $unconfirmedhub->hubname = $params['hubname'];
            $registrationmanager->update_registeredhub($unconfirmedhub);
            print_object($unconfirmedhub);
            echo $OUTPUT->notification(get_string('registrationconfirmed', 'hub'), 'notifysuccess');
        }

        return true;
    }


    private function register($huburl, $params) {
        global $CFG;

        $url = $huburl . '/local/hub/siteregistration.php';

        $curl = curl_init();

        $paramsurl = array();
        foreach ($params as $key => $value) {
            $paramsurl[] = $key.'='.rawurlencode($value);
        }
        $completeurl = $url.'?'.implode('&', $paramsurl);

        curl_setopt($curl, CURLOPT_URL, $completeurl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HEADER, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_NOBODY, true);
        // curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        if (!is_proxybypass($url)) {
            if (!empty($CFG->proxytype) && $CFG->proxytype == 'HTTP' && !empty($CFG->proxyhost)) {
                curl_setopt($curl, CURLOPT_PROXY, $CFG->proxyhost);
                if (!empty($CFG->proxyport)) {
                    curl_setopt($curl, CURLOPT_PROXYPORT, $CFG->proxyport);
                }
                if (!empty($CFG->proxyuser)) {
                    curl_setopt($curl, CURLOPT_PROXYUSERPWD, $CFG->proxyuser . ':' . $CFG->proxypassword);
                }
            }
        }

        $contents = curl_exec($curl);
        curl_close($curl);

        preg_match_all('/^Location:(.*)$/mi', $contents, $matches);

        $return = !empty($matches[1]) ? trim($matches[1][0]) : false;
        if (!$return) {
            print_object($completeurl);
            print_object($contents);
        }

        return $return;
    }

}
