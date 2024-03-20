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
        $params['loginscopesoffline'] = optional_param('loginscopesoffline', 'openid profile email user.read offline_access', PARAM_TEXT);

        return $params;
    }

    /**
     * @throws moodle_exception
     * @throws coding_exception
     * @throws \core\invalid_persistent_exception
     */
    protected function _execute($params = array(), $execute = true): bool {

        global $DB, $USER;

        $type = 'microsoft';
        $userinfo_endpoint = 'https://graph.microsoft.com/v1.0/me/?$select=userPrincipalName,givenName,surname,mail,companyName';
        $authorization_endpoint = 'https://login.microsoftonline.com/' . $params['tenantid'] . '/oauth2/v2.0/authorize';
        $token_endpoint = 'https://login.microsoftonline.com/' . $params['tenantid'] . '/oauth2/v2.0/token';

        $data = new stdClass();
        $data->name = 'Azure AD';
        $data->clientid = $params['clientid'];
        $data->clientsecret = $params['clientsecret'];
        $data->baseurl = '';
        $data->image = $params['image'];
        $data->showonloginpage = 2;
        $data->loginpagename = !empty($params['loginpagename']) ? $params['loginpagename'] : 'IDI';
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

        mtrace('Issuer created', '<br />');

        $endpoints = core\oauth2\api::get_endpoints($issuer);

        foreach ($endpoints as $endpoint) {
            switch ($endpoint->get('name')) {
                case 'userinfo_endpoint':
                    $url = $userinfo_endpoint;
                    break;
                case 'authorization_endpoint':
                    $url = $authorization_endpoint;
                    break;
                case 'token_endpoint':
                    $url = $token_endpoint;
                    break;
                default:
                    $url = '';
            }

            if (!empty($url)) {
                $epdata = [
                    'url' => $url,
                    'name' => $endpoint->get('name'),
                    'issuerid' => $issuer_id,
                    'id' => $endpoint->get('id'),
                ];
                if ($DB->update_record('oauth2_endpoint', $epdata)) {
                    mtrace('Endpoint ' . $endpoint->get('name') . ' updated', '<br />');
                }
            }
        }

        $mappings = [
            (object)[
                'timemodified' => time(),
                'timecreated' => time(),
                'usermodified' => $USER->id,
                'issuerid' => $issuer_id,
                'externalfield' => 'givenName',
                'internalfield' => 'firstname',
            ],
            (object)[
                'timemodified' => time(),
                'timecreated' => time(),
                'usermodified' => $USER->id,
                'issuerid' => $issuer_id,
                'externalfield' => 'surname',
                'internalfield' => 'lastname',
            ],
            (object)[
                'timemodified' => time(),
                'timecreated' => time(),
                'usermodified' => $USER->id,
                'issuerid' => $issuer_id,
                'externalfield' => 'mail',
                'internalfield' => 'email',
            ],
            (object)[
                'timemodified' => time(),
                'timecreated' => time(),
                'usermodified' => $USER->id,
                'issuerid' => $issuer_id,
                'externalfield' => 'userPrincipalName',
                'internalfield' => 'username',
            ],
            (object)[
                'timemodified' => time(),
                'timecreated' => time(),
                'usermodified' => $USER->id,
                'issuerid' => $issuer_id,
                'externalfield' => 'companyName',
                'internalfield' => 'schoolcode',
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
