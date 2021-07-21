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
 * Alexandria importer
 *
 * @package    local
 * @subpackage alexandriaimporter
 * @copyright  2020 Ulises Martínez
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once '../../config.php';
require_once 'lib.php';
require_once 'locallib.php';
require_once $CFG->dirroot . '/webservice/rest/lib.php';
require_once $CFG->dirroot . '/lib/filelib.php';

// Must be logged as an admin
require_admin();

$data = new StdClass();
$data->url = get_config('local_alexandriaimporter', 'alexandria_url');
$data->token = get_config('local_alexandriaimporter', 'alexandria_token');

$function = 'local_alexandria_get_databases';
$serverurl = $data->url . '/local/alexandria/webservice/server.php';

$client = new webservice_rest_client($serverurl, $data->token, 'json');

// DEBUG
$params['wsfunction'] = $function;
$params['wstoken'] = $data->token;
$url = new moodle_url($serverurl, $params);
echo '<p>' . $url->out() . '</p>';

$result = [];
try {
    $result = $client->call($function, $params);
    if (isset($result->exception)) {
        throw new Exception($result->errorcode . ': ' . $result->message);
    }
} catch (Exception $e) {
    $errormessage = $e->getMessage();
    echo '<p>' . $errormessage . '</p>';
    // DEBUG
    echo '<pre>';
    print_object($e);
    echo '</pre>';
}

if (count($result) <= 0) {
    echo '<p>' . get_string('nodatabases', 'local_alexandriaimporter') . '</p>';
}

// Echo tabs
echo '<pre style="width:1000px; height:800px; overflow:scroll; border:1px solid black;">';
print_r($result);
echo '</pre>';
