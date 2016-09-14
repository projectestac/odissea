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
 * Javascript helper function for Folder module
 *
 * @package    mod
 * @subpackage jclic
 * @copyright  2011 Departament d'Ensenyament de la Generalitat de Catalunya
 * @author     Sara Arjona Téllez <sarjona@xtec.cat>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

M.mod_jclic = {};

M.mod_jclic.initApplet = function(Y, params) {
    setJarBase(params['jclic_jarbase']);
    setReporter('TCPReporter','path='+params['jclic_path']+';service='+params['jclic_service']+';user='+params['jclic_user']+';key='+params['id']+';lap='+params['jclic_lap']+';protocol='+params['jclic_protocol']);
    setSkin(params['skin']);
    setLanguage(params['lang']);
    setExitUrl(params['exiturl']);
    document.getElementById('jclic_applet').innerHTML = getPlugin(params['jclic_url'], params['width'], params['height']);
};

M.mod_jclic.initHTML5 = function(Y, params) {
    var JClicOptions = {
        reporter: 'TCPReporter',
        path: params['jclic_path'],
        service: params['jclic_service'],
        user: params['jclic_user'],
        key: params['id'],
        lap: params['jclic_lap'],
        protocol: params['jclic_protocol'],
        skin: params['skin'],
        lang: params['lang'],
        exitUrl: params['exitUrl'],
        width: params['width'],
        height: params['height'],
    };
    if (params['jclic_ispreview']) {
        delete JClicOptions['reporter'];
        delete JClicOptions['path'];
    }

    JClicObject.loadProject(document.getElementById('jclic_html5'), params['jclic_url'], JClicOptions);
};



function showSessionActivities(sessionid){
    activities = document.getElementById('session_'+sessionid);
    if (activities.className == 'jclic-session-activities-visible') {
        activities.className='jclic-session-activities-hidden';
    } else{
        activities.className='jclic-session-activities-visible';
    }
}

function var_dump(obj) {
 var out = '';
 for (var i in obj) {
 out += i + ": " + obj[i] + "\n";
 }
alert(out);
}