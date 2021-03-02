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
 * Strings for component 'tool_uploaduser', language 'eu', version '3.8'.
 *
 * @package     tool_uploaduser
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'Baimendu ezabatzea';
$string['allowrenames'] = 'Baimendu izena aldatzea';
$string['allowsuspends'] = 'Baimendu kontuak eten eta aktibatzea';
$string['assignedsysrole'] = 'Sistemako {$a} rola esleitu zaio';
$string['csvdelimiter'] = 'CSV bereizlea';
$string['defaultvalues'] = 'Lehenetsitako balioak';
$string['deleteerrors'] = 'Ezabatu erroreak';
$string['encoding'] = 'Kodifikazioa';
$string['errormnetadd'] = 'Ezin da urrutiko erabiltzailerik gehitu';
$string['errors'] = 'Erroreak';
$string['examplecsv'] = 'Adibidezko testu-fitxategia';
$string['examplecsv_help'] = 'Adibidezko testu-fitxategia erabiltzeko, jaitsi eta testuen edo kalkulu-orrien editore batekin ireki ezazu. Utzi lehen errenkada dagoen moduan, eta editatu hurrengoak zure erabiltzaileen datuak gehitzeko, errenkada gehiago gehituta behar izanez gero. Amaitzean fitxategia CSV gisa gorde ezazu eta ondoren igo ezazu.

Adibidezko testu-fitxategia probetarako ere erabili daiteke, erabiltzaile-kontuak sortu aurretik erabiltzaileen datuak aurreikusi eta ekintza bertan behera utz daitekeelako.';
$string['invalidtheme'] = '"{$a}" azala ez dago instalatuta eta baztertua izango da.';
$string['invalidupdatetype'] = 'Igoera mota honetan ezin da aukera hau aukeratu.';
$string['invaliduserdata'] = '{$a} erabiltzailearen datu baliogabea antzeman da eta automatikoki garbitu da.';
$string['nochanges'] = 'Aldaketarik ez';
$string['notheme'] = 'Ez dago azalik zehaztuta erabiltzaile honentzat.';
$string['pluginname'] = 'Igo erabiltzailea';
$string['privacy:metadata'] = 'Igo erabiltzailea pluginak ez du datu pertsonalik biltzen.';
$string['renameerrors'] = 'Aldatu erroreen izenak';
$string['requiredtemplate'] = 'Beharrezkoa. Hemen txantiloi-sintaxia erabil dezakezu (%l = abizena, %f = izena, %u = erabiltzaile-izena). Ikusi laguntza zehaztasun gehiagorako eta adibideak ikusteko.';
$string['rowpreviewnum'] = 'Aurreikusi errenkadak';
$string['unassignedsysrole'] = 'Sistemako {$a} rola kendu zaio';
$string['uploadpicture_baduserfield'] = 'Zehaztutako erabiltzaile-ezaugarriak ez du balio. Mesedez, saiatu berriz.';
$string['uploadpicture_cannotmovezip'] = 'Ezin da zip fitxategia aldi baterako direktorio batera mugitu';
$string['uploadpicture_cannotprocessdir'] = 'Ezin dira deskonprimatutako fitxategiak prozesatu.';
$string['uploadpicture_cannotsave'] = 'Ezin da gorde {$a} erabiltzailearentzako irudia. Egiaztatu jatorrizko irudi-fitxategia.';
$string['uploadpicture_cannotunzip'] = 'Ezin da irudi-fitxategia deskonprimatu.';
$string['uploadpicture_invalidfilename'] = '{$a} irudi-fitxategiaren izenak balio ez duten karaktereak ditu. Alde batera utzi da.';
$string['uploadpicture_overwrite'] = 'Gainidatzi erabiltzaileek dagoeneko dituzten irudiak?';
$string['uploadpicture_userfield'] = 'Irudiak lotzean erabilitako erabiltzailearen atributua:';
$string['uploadpicture_usernotfound'] = '\'{$a->uservalue}\'-n \'{$a->userfield}\' balioa duen erabiltzailea ez dago. Alde batera utzi da.';
$string['uploadpicture_userskipped'] = '{$a} erabiltzailea alde batera utzi da (dagoeneko badu irudia).';
$string['uploadpicture_userupdated'] = '{$a} erabiltzailearen irudia eguneratu da.';
$string['uploadpictures'] = 'Igo erabiltzaileen irudiak';
$string['uploadpictures_help'] = '<p>Erabiltzailearen irudiak zip fitxategia edo irudi-fitxategi gisa igo daitezke. Irudi-fitxategiei <i>aukeratutako-erabiltzaile-ezaugarria.luzapena</i> izena eman behar zaie. Adibidez, irudiak egokitzeko aukeratutako erabiltzaile-ezaugarria erabiltzaile-izena bada eta izen hori erabil1234 bada, orduan fitxategiaren izena erabil1234.jpg izango da.</p>
<p>Onartutako irudi motak gif, jpg, eta png dira.</p>
<p>Irudi-fitxategien izenetan ez ditu letra larriak eta xeheak bereizten .</p>';
$string['uploaduser:uploaduserpictures'] = 'Igo erabiltzailearen irudiak';
$string['uploadusers'] = 'Igo erabiltzaileak';
$string['uploadusers_help'] = 'Erabiltzaileak testu-fitxategi bidez igo (eta aukeran ikastaroetan matrikulatu) daitezke. Fitxategiak hurrengo formatua izan behar du:

* Fitxategiko errenkada bakoitzak erregistro bat du
* Erregistro bakoitza komaz (edo bestelako bereizleak) banatutako datu-multzo bat da
* Fitxategiko lehen errenkadak fitxategiaren formatua definitzen duten eremuen zerrenda du.
* Derrigorrezko eremuen izenak: \'username\' (erabiltzaile-izena), \'firstname\' (izena), \'lastname\' (abizena) eta \'email\' (helbide elektronikoa)';
$string['uploaduserspreview'] = 'Aurreikusi igotako erabiltzaileak';
$string['uploadusersresult'] = 'Igotako erabiltzaileen emaitzak';
$string['useraccountupdated'] = 'Erabiltzailea eguneratu da';
$string['useraccountuptodate'] = 'Eguneratuta zeuden erabiltzaileak';
$string['userdeleted'] = 'Erabiltzailea ezabatu da';
$string['userrenamed'] = 'Erabiltzailearen izena aldatu da';
$string['userscreated'] = 'Sortutako erabiltzaileak';
$string['usersdeleted'] = 'Ezabatutako erabiltzaileak';
$string['usersrenamed'] = 'Berrizendatutako erabiltzaileak';
$string['usersskipped'] = 'Albo batera utzitako erabiltzaileak';
$string['usersupdated'] = 'Eguneratutako erabiltzaileak';
$string['usersweakpassword'] = 'Pasahitz ahula duten erabiltzaileak';
$string['userthemesnotallowed'] = 'Erabiltzaile-azalak ez daude gaituta, eta beraz igotako erabiltzaile-fitxategian daudenak baztertuak izango dira.';
$string['uubulk'] = 'Aukeratu eragiketa masiboetarako ekintza';
$string['uubulkall'] = 'Erabiltzaile guztiak';
$string['uubulknew'] = 'Erabiltzaile berriak';
$string['uubulkupdated'] = 'Eguneratutako erabiltzaileak';
$string['uucsvline'] = 'CSV lerroa';
$string['uulegacy1role'] = '(Jatorrizko Ikaslea) N=1 mota';
$string['uulegacy2role'] = '(Jatorrizko Irakaslea) N=2 mota';
$string['uulegacy3role'] = '(Jatorrizko edizio-baimenik gabeko Irakaslea) N=3 mota';
$string['uunoemailduplicates'] = 'Galarazi helbide elektronikoak bikoiztea';
$string['uuoptype'] = 'Igotze mota';
$string['uuoptype_addinc'] = 'Gehitu guztia, behar izanez gero erabiltzaile-izenari kontagailua gehituta';
$string['uuoptype_addnew'] = 'Gehitu soilik berriak, lehendik existitzen diren erabiltzaileak alde batera utziz';
$string['uuoptype_addupdate'] = 'Gehitu berriak eta eguneratu lehendik dauden erabiltzaileak';
$string['uuoptype_update'] = 'Eguneratu soilik lehendik dauden erabiltzaileak';
$string['uupasswordcron'] = 'Cron bidez sortuko da';
$string['uupasswordnew'] = 'Erabiltzaile berriaren pasahitza';
$string['uupasswordold'] = 'Lehendik dagoen erabiltzailearen pasahitza';
$string['uustandardusernames'] = 'Estandarizatu erabiltzaile-izenak';
$string['uuupdateall'] = 'Gainidatzi fitxategiaren edukiarekin eta lehenetsitako balioekin';
$string['uuupdatefromfile'] = 'Gainidatzi fitxategiaren edukiarekin';
$string['uuupdatemissing'] = 'Bete fitxategian falta diren datuak eta lehenetsitako balioak';
$string['uuupdatetype'] = 'Lehendik dagoen erabiltzailearen xehetasunak';
$string['uuusernametemplate'] = 'Erabiltzaile-izenetarako txantiloia';
