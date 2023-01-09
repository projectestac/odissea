<?php

require_once 'agora_script_base.class.php';

class script_configure_idi extends agora_script_base {

    public $title = 'Configura el client oAuth2 per a IDI';
    public $info = 'Afegeix els registres a les taules oAuth2 per configurar el client d\'autenticació via IDI. 
                    L\'id i el secret del client i l\'id del <em>tenant</em> s\'han d\'omplir necessàriament. La resta 
                    de paràmetres es poden deixar buits. En aquest cas, els valors per defecte seran els següents:
                    <ul>
                        <li>loginpagename: IDI</li>
                        <li>image: https://educaciodigital.cat/favicon.ico</li>
                        <li>loginscopes: openid profile email user.read</li>
                        <li>loginscopesoffline: openid profile email user.read offline_access</li>
                    </ul>';
    public $cron = false;
    protected $test = false;
    public $cli = true;
    public $api = true;
    protected $category = 'Utils';

    /**
     * @throws coding_exception
     */
    public function params(): array {
        $params = [];
        $params['clientid'] = optional_param('clientid', false, PARAM_TEXT);
        $params['clientsecret'] = optional_param('clientsecret', false, PARAM_TEXT);
        $params['tenantid'] = optional_param('tenantid', false, PARAM_TEXT);
        $params['loginpagename'] = optional_param('image', 'IDI', PARAM_TEXT);
        $params['image'] = optional_param('image', 'https://educaciodigital.cat/favicon.ico', PARAM_TEXT);
        $params['loginscopes'] = optional_param('loginscopes', 'openid profile email user.read', PARAM_TEXT);
        $params['loginscopesoffline'] = optional_param('openid profile email user.read offline_access', false, PARAM_TEXT);

        return $params;
    }

    /**
     * @throws moodle_exception
     * @throws coding_exception
     * @throws \core\invalid_persistent_exception
     */
    protected function _execute($params = array(), $execute = true): bool {

        $type = 'microsoft';

        $data = new stdClass();
        $data->name = 'Azure AD';
        $data->clientid = $params['clientid'];
        $data->clientsecret = $params['clientsecret'];
        $data->baseurl = '';
        $data->image = $params['image'];
        $data->showonloginpage = 2;
        $data->loginpagename = $params['loginpagename'];
        $data->loginscopes = $params['loginscopes'];
        $data->loginscopesoffline = $params['loginscopesoffline'];
        $data->loginparams = '';
        $data->loginparamsoffline = '';
        $data->alloweddomains = '';
        $data->requireconfirmation = 0;
        $data->acceptrisk = 1;
        $data->sortorder = 0;
        $data->servicetype = $type;
        $data->enabled = 1;
        $data->id = 0;

        // Log in as admin.
        \core\session\manager::set_user(get_admin());

        $issuer = new core\oauth2\issuer(0, $data);
        $issuer->create();
        $issuer = core\oauth2\api::create_endpoints_for_standard_issuer($type, $issuer);

        $issuer_id = $issuer->get('id');
        $authorization_endpoint = 'https://login.microsoftonline.com/' . $params['tenantid'] . '/oauth2/v2.0/authorize';
        $token_endpoint = 'https://login.microsoftonline.com/' . $params['tenantid'] . '/oauth2/v2.0/token';

        mtrace('Issuer created', '<br />');

        global $DB, $USER;

        $sql = "UPDATE {oauth2_endpoint}
                SET url = '$authorization_endpoint'
                WHERE name = 'authorization_endpoint' AND issuerid = $issuer_id";
        $DB->execute($sql);

        $sql = "UPDATE {oauth2_endpoint}
                SET url = '$token_endpoint'
                WHERE name = 'token_endpoint' AND issuerid = $issuer_id";
        $DB->execute($sql);

        mtrace('Endpoints updated', '<br />');

        $mappings = [
            (object) [
                'timemodified' => time(),
                'timecreated' => time(),
                'usermodified' => $USER->id,
                'issuerid' => $issuer_id,
                'externalfield' => 'givenName',
                'internalfield' => 'firstname',
            ],
            (object) [
                'timemodified' => time(),
                'timecreated' => time(),
                'usermodified' => $USER->id,
                'issuerid' => $issuer_id,
                'externalfield' => 'surname',
                'internalfield' => 'lastname',
            ],
            (object) [
                'timemodified' => time(),
                'timecreated' => time(),
                'usermodified' => $USER->id,
                'issuerid' => $issuer_id,
                'externalfield' => 'mail',
                'internalfield' => 'email',
            ],
            (object) [
                'timemodified' => time(),
                'timecreated' => time(),
                'usermodified' => $USER->id,
                'issuerid' => $issuer_id,
                'externalfield' => 'userPrincipalName',
                'internalfield' => 'username',
            ],
            (object) [
                'timemodified' => time(),
                'timecreated' => time(),
                'usermodified' => $USER->id,
                'issuerid' => $issuer_id,
                'externalfield' => 'company',
                'internalfield' => 'institution',
            ],
        ];

        $DB->delete_records('oauth2_user_field_mapping', ['issuerid' => $issuer_id]);
        $DB->insert_records('oauth2_user_field_mapping', $mappings);

        mtrace('Field mappings updated', '<br />');

        core\oauth2\api::disable_issuer($issuer_id);

        mtrace('Issuer disabled', '<br />');

        return true;

    }

}
