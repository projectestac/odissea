<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'antivirus_clamav', language 'eu', version '3.8'.
 *
 * @package     antivirus_clamav
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clamfailed'] = 'ClamAV-ren exekuzioak huts egin du. Errore-mezua {$a} izan da. Hau da ClamAV-ren irteera-mezua:';
$string['clamfailureonupload'] = 'ClamAV-ek huts egiten duenean';
$string['configclamactlikevirus'] = 'Tratatu fitxategiekin birusak balira bezala';
$string['configclamdonothing'] = 'Tratatu fitxategiak ondo baleude bezala';
$string['configclamfailureonupload'] = 'clam igotako fitxategiak eskaneatzeko konfiguratu baduzu, baina modu ezegokian konfiguratuta badago edo exekutatzean huts egiten badu arrazoi ezezagunak tarteko, zer egin beharko litzateke? \'Tratatu fitxategiekin birusak balira bezala\' aukeratzen baduzu, kuarentena-eremura mugituko dira, edo ezabatuko dira. \'Tratatu fitxategiak ondo baleude bezala\' aukeratzen baduzu, fitxategiak helburuko karpetara mugituko dira ohiko moduan. Edonola ere, kudeatzaileei clam-ek huts egin izanaren jakinarazpena bidaliko zaie. \'Tratatu fitxategiekin birusak balira bezala\' aukeratzen baduzu eta edozein arrazoiengatik clam-en exekuzioak huts egiten badu (normalean pathtoclam ezegokiaa zehaztu duzulako), igotako fitxategi GUZTIAK zehaztutako kuarentena-eremura mugituko dira, edo ezabatuko dira. Kontuz ibili ezarpen honekin.';
$string['errorcantopensocket'] = 'Unix domeinuko socket-erako konexioan errorea gertatu da {$a}';
$string['errorclamavnoresponse'] = 'ClamAV-k ez du erantzuten; egiaztatu \'daemon\'aren exekuzio-egoera.';
$string['errornounixsocketssupported'] = 'Sistema honetan ez da Unix domeinuko socket bidezko garraioa onartzen. Mesedez, erabili horren ordez komando-lerroa aukera.';
$string['invalidpathtoclam'] = 'ClamAV-rako bidea, {$a}, baliogabea da.';
$string['pathtoclam'] = 'Komando-lerroa';
$string['pathtoclamdesc'] = '"Komando-lerroa" exekuzio-modua aukeratzen denean, zehaztu hemen ClamAV-ren bidea. Linux sistematan /usr/bin/clamscan edo /usr/bin/clamdscan izan ohi da.';
$string['pathtounixsocket'] = 'Unix domeinuko socket-a';
$string['pathtounixsocketdesc'] = '"Unix domeinuko socket-a" exekuzio-modua aukeratzen denean, zehaztu hemen ClamAV Unix socket-erako bidea. Debian Linux sistematan /var/run/clamav/clamd.ctl izan ohi da. Mesedez, ziurtatu clamav \'daemon\'ak igotako fitxategiak irakurtzeko baimenak dituela, hori egiteko modurik errazena \'clamav\' erabiltzailea zure web-zerbitzariaren taldera gehitzea da (\'www-data\' Debian Linux sistematan).';
$string['pluginname'] = 'ClamAV antibirusa';
$string['privacy:metadata'] = 'ClamAV antibirus-pluginak ez du datu pertsonalik biltzen.';
$string['quarantinedir'] = 'Berrogeialdi-direktorioa';
$string['runningmethod'] = 'Exekuzio-modua';
$string['runningmethodcommandline'] = 'Komando-lerroa';
$string['runningmethoddesc'] = 'ClamAV exekutatzeko modua. Modu lehenetsian komando-lerroa erabiltzen da, baina Unix sistematan errendimendu hobea lor daiteke sistemako socket-ak erabilita.';
$string['runningmethodunixsocket'] = 'Unix domeinuko socket-a';
$string['unknownerror'] = 'ClamAV-ren errore ezezaguna gertatu da.';
