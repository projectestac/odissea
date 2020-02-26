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

class vicensvives_ws {

    const WS_URL = 'http://api.vicensvivesdigital.com/rest';

    public static function configured() {
        global $CFG;

        return !empty($CFG->vicensvives_sharekey) and !empty($CFG->vicensvives_sharepass);
    }

    public function book($bookid) {
        if (!$bookid) {
            return null;
        }
// global $CFG;
// $json = file_get_contents( $CFG->wwwroot . '/blocks/courses_vicensvives/test/test.json');
// return json_decode($json);

        return $this->call('get', 'books/' . $bookid, array('lti_info' => "true"));
    }

    public function books() {
        $books = $this->call('get', 'books', array('own' => "true")) ?: array();

        foreach ($books as $key => $book) {
            if (empty($book->idBook)) {
                unset($books[$key]);
            }
            $book->isbn = isset($book->isbn) ? $book->isbn : '';
        }

        return $books;
    }

    public function levels($lang) {
        $levels = $this->call('get', 'levels', array('lang' => $lang)) ?: array();
        foreach ($levels as $key => $level) {
            if (empty($level->idLevel)) {
                unset($levels[$key]);
            }
        }
        return $levels;
    }

    public function licenses($book=null, $activated=null) {
        $params = array();
        if ($book !== null) {
            $params['book'] = (int) $book;
        }
        if ($activated !== null) {
            $params['activated'] = (bool) $activated;
        }
        return $this->call('get', 'licenses', $params);
    }

    public function send_token($token) {
        global $CFG;
        $params = array(
            'url' => $CFG->wwwroot,
            'token' => $token,
            'identifier' => get_site_identifier(),
            'serviceEndpoint' => $CFG->wwwroot . '/webservice/rest/server.php',
        );
        return (bool) $this->call('post', 'schools/moodle', $params);
    }

    public function subjects($lang) {
        $subjects = $this->call('get', 'subjects', array('lang' => $lang)) ?: array();
        foreach ($subjects as $key => $subject) {
            if (empty($subject->idSubject)) {
                unset($subjects[$key]);
            }
        }
        return $subjects;
    }

    private function call($method, $path, $params=null) {
        global $CFG;

        if (empty($CFG->vicensvives_sharekey) or empty($CFG->vicensvives_sharepass)) {
            throw new vicensvives_ws_error('wsnotconfigured');
        }

        if (empty($CFG->vicensvives_accesstoken)) {
            $this->refresh_token();
        }

        list($status, $response) = $this->curl($method, $path, $params);

        // El token no existe o ha caducado
        if ($status == 401 and isset($response->cod) and $response->cod == 401007) {
            $this->refresh_token();
            list($status, $response) = $this->curl($method, $path, $params);
        }

        // Credenciales ya usadas en otro sitio (schools/moodle)
        if ($status == 401 and isset($response->cod) and $response->cod == 401025) {
            throw new vicensvives_ws_error('wssitemismatch');
        }

        // Error desconocido
        if ($status != 200) {
            throw new vicensvives_ws_error('wsunknownerror');
        }

        return $response;
    }

    private function curl($method, $path, $params=null, $auth=true) {
        global $CFG;

        $url = !empty($CFG->vicensvives_apiurl) ? $CFG->vicensvives_apiurl : self::WS_URL;
        $url .= '/' . $path;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_VERBOSE, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible;)');

        if ($method == 'post') {
            curl_setopt($ch, CURLOPT_POST, true);
            if ($params) {
                curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params, '', '&'));
            }
        } else if ($method == 'put') {
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
            if ($params) {
                curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params, '', '&'));
            }
        } else if ($method == 'delete') {
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
        } else {
            if ($params) {
                $url .= '?' . http_build_query($params, '', '&');
            }
        }

        // Start the header.
        $header = array();
        if ($auth) {
            $header[] = 'Authorization: Bearer ' . $CFG->vicensvives_accesstoken;
        }

        // La llamada schools/moodle requiere los parámetros en formato JSON
        if ($path == 'schools/moodle') {
            $json = json_encode($params);
            $header[] = 'Content-Type: application/json';
            $header[] = 'Content-Length: ' . strlen($json);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        }

        // Add header to curl.
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

        curl_setopt($ch, CURLOPT_URL, $url);
        $response = json_decode(curl_exec($ch));
        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        $this->log($method, $path, $params, $status, $response);

        return array($status, $response);
    }

    private function log($method, $path, $params, $status, $response) {
        global $PAGE, $SCRIPT;

        $data = array(
            'context' => $PAGE->context,
            'other' => array(
                'script' => $SCRIPT,
                'method' => $method,
                'path' => $path,
                'params' => $params,
                'status' => $status,
                'message' => !empty($response->msg) ? $response->msg : '',
            ),
        );

        $event = \block_courses_vicensvives\event\webservice_called::create($data);
        $event->trigger();
    }

    private function refresh_token() {
        global $CFG;

        unset_config('vicensvives_accesstoken');

        $params = array(
            'client_id' => $CFG->vicensvives_sharekey,
            'client_secret' => $CFG->vicensvives_sharepass,
            'grant_type' => 'client_credentials',
        );

        list($status, $response) = $this->curl('post', 'oauth', $params, false);

        if ($status == 200 and !empty($response->access_token)) {
            set_config('vicensvives_accesstoken', $response->access_token);
        } else if ($status == 401 and isset($response->cod) and $response->cod == 401001) {
            throw new vicensvives_ws_error('wsauthfailed');
        } else {
            throw new vicensvives_ws_error('wsunknownerror');
        }
    }
}

class vicensvives_ws_error extends moodle_exception {
    public function __construct($errorcode, $a=null, $debuginfo=null) {
        parent::__construct($errorcode, 'block_courses_vicensvives', '', $a, $debuginfo);
    }
}

function vicensvives_reset_token() {
    unset_config('vicensvives_accesstoken');
}
