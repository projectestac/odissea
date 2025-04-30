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
 * Strings for component 'url', language 'eu', version '4.4'.
 *
 * @package     url
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowvariables'] = 'Baimendu URLko aldagaiak';
$string['allowvariables_desc'] = 'Baimendu URLetan aldagaiak gehitu ahal izatea. Aldagaiek barneko informazioa URLetan txertatzea ahalbidetzen dizute, hala nola erabiltzaileen izena. Kontuan izan funtzio hau erabiltzeak ekar lezakeen pribatutasun arrisku potentziala.';
$string['chooseavariable'] = 'Aukeratu aldagai bat...';
$string['clicktoopen'] = 'Egin klik {$a} estekan baliabidea irekitzeko.';
$string['configdisplayoptions'] = 'Aukeratu eskuragarri egon behar duten aukera guztiak, dauden ezarpenak ez dira aldatuko. CTRL tekla erabili hainbat eramu aukeratzeko.';
$string['configframesize'] = 'Web-orri bat edo eguneratutako fitxategia markorik gabe erakusten denean, balio honek adierazten du markoaren gainaren (nabigazioa duena) altuera (pixeletan).';
$string['configrolesinparams'] = 'Pertsonalizatutako rol-izenak (ikastaroko ezarpenetatik) URLaren aldagai gisa eskuragarri egon behar dira?';
$string['configsecretphrase'] = 'Hainbat zerbitzarira parametro gisa bidal daitekeen zifratutako kode-balioa sortzeko erabiltzen da ezkutuko esaldi hau. Zifratutako kodea oraingo erabiltzailearen IP helbidearen md5 balioaren bitartez sortzen da, atzetik zure ezkutuko esaldia duela. Hau da, kodea = md5(IP.secretphrase). Mesedez, ohartu ez dela fidagarria IP helbidea aldatu egin daitekeelako eta sarri hainbat ordenagailuk konpartitzen dutelako.';
$string['contentheader'] = 'Edukia';
$string['createurl'] = 'Sortu URL bat';
$string['displayoptions'] = 'Eskura dauden erakusteko aukerak';
$string['displayselect'] = 'Erakutsi';
$string['displayselect_help'] = 'Ezarpen honek, URL fitxategi-mota kontuan hartuta eta web-nabigatzaileak edukiak txertatzea baimentzen badu, URLa nola erakutsiko den zehazten du. Aukerak hurrengoak dira:

* Automatikoa - URLa erakusteko modurik onena automatikoki aukeratzea da
* Txertatua - URLa orriaren barruan erakutsiko da, nabigazio-barraren azpitik eta URLaren deskribapenaren eta edozein blokeren ondoan
* Ireki - URLa soilik erakusten da web-nabigatzailearen leihoan
* Pop-up-ean - URLa web-nabigatzailearen leiho berri batean erakusten da, menu eta helbide-barrarik gabe
* Markoan - URLa marko baten barruan erakusten da, nabigazio-barraren eta URLaren deskribapenaren azpian
* Leiho berria - URLa menuak eta helbide-barra dituen web-nabigatzailearen leiho berri batean erakusten da.';
$string['displayselectexplain'] = 'Aukeratu erakusteko modua; tamalez mota guztiak ezin dira URLetarako erabili.';
$string['externalurl'] = 'Kanpoko URLa';
$string['framesize'] = 'Markoaren altuera';
$string['indicator:cognitivedepth'] = 'Gaitasun kognitiboa URLetan';
$string['indicator:cognitivedepth_help'] = 'Adierazle hau ikasleak URLa motako baliabideetan lortutako sakonera kognitiboan oinarrituta dago.';
$string['indicator:cognitivedepthdef'] = 'Gaitasun kognitiboa URLetan';
$string['indicator:cognitivedepthdef_help'] = 'Partaide honek URL baliabideak eskaintzen duen gaitasun kognitiboaren ehuneko hau lortu du analisi-tarte honetan (Mailak = Ikusi gabe, Ikusi da)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Gaitasun soziala URLetan';
$string['indicator:socialbreadth_help'] = 'Helburu hau ikasleak URLa motako baliabideetan lortutako zabalera sozialean oinarrituta dago.';
$string['indicator:socialbreadthdef'] = 'Gaitasun soziala URLetan';
$string['indicator:socialbreadthdef_help'] = 'Partaide honek URL baliabideak eskaintzen duen gaitasun sozialaren ehuneko hau lortu du analisi-tarte honetan';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['invalidstoredurl'] = 'Ezin da baliabide hau erakutsi. URLak ez du balio.';
$string['invalidurl'] = 'Gehitutako URLak ez du balio';
$string['modulename'] = 'URLa';
$string['modulename_help'] = 'URL moduluak web-esteka bat ikastaroaren baliabide gisa erakustea ahalbidetzen dio irakasleari. On-line eskuragarri dagoen edozein eduki estekatu daiteke, hala nola dokumentuak edo irudiak; URLak ez du zertan web-gune baten orri nagusia izan. URLa web-gune jakin batetik kopia eta itsats daiteke edo irakasleak Fitxategi-hautatzailea erabilita Flickr, YouTube edo Wikimediako esteka aukera dezake (zure gunean gaitutako dauden biltegien arabera).

URLa erakusteko modu ezberdinak daude, hala nola enbotaturik edo leiho berri batean, eta behar izanez gero badago aukera aurreratu bat estekarekin batera informazio gehiago bidaltzeko, ikaslearen izena adibidez.

Badago, bestalde, beste edozein baliabide edo aktibitateetan testu-editorea erabilita URLak gehitzeko aukera ere.';
$string['modulename_link'] = 'mod/url/view';
$string['modulenameplural'] = 'URLak';
$string['name'] = 'Izena';
$string['name_help'] = 'Hau URLarentzako testua izango da.

URLaren helburua ondo deskribatzen duen testu esanguratsu bat idatzi ezazu.

Ekidin ezazu "esteka" hitza. Honek pantaila-irakurleak erabiltzen dituzten erabiltzaileei lagunduko die pantaila-irakurleek estekak iragartzen dituztelako (esaterako "Moodle.org, esteka") eta beraz ez dago "esteka" hitza testuaren eremuan gehitzeko beharrik.';
$string['page-mod-url-x'] = 'URL moduluaren edozein orria';
$string['parameterinfo'] = '&amp;parametroa=aldagaia';
$string['parametersheader'] = 'URLko aldagaiak';
$string['parametersheader_help'] = 'Atal honek informazioa URLaren barruan bidaltzea ahalbidetzen dizu. Hau erabilgarria da URLa parametroak jasotzen dituen web-orri interaktibo batena bada eta esaterako oraingo erabiltzailearen izena bidali nahi baduzu. Idatzi zure URLko aldagaiaren izena testu-kutxan eta ondoren aukeratu guneko zein aldagairekin lotu behar den.';
$string['pluginadministration'] = 'URLen kudeaketa';
$string['pluginname'] = 'URLa';
$string['popupheight'] = 'Pop-up-aren altuera (pixeletan)';
$string['popupheightexplain'] = 'Zehaztu popup leihoaren altuera lehenetsia.';
$string['popupwidth'] = 'Pop-up-aren zabalera (pixeletan)';
$string['popupwidthexplain'] = 'Zehaztu popup leihoaren zabalera lehenetsia.';
$string['printintro'] = 'Erakutsi URLaren deskribapena';
$string['printintroexplain'] = 'Erakutsi URL deskribapena edukiaren azpian? Erakusteko hainbat motak ez dute erakusten URL izena nahiz eta gaituta egon.';
$string['privacy:metadata'] = 'URLa baliabide-pluginak ez du datu pertsonalik biltzen.';
$string['rolesinparams'] = 'Rol-izenak URLko aldagaietan';
$string['search:activity'] = 'URLa';
$string['serverurl'] = 'Zerbitzariaren URLa';
$string['url:addinstance'] = 'Gehitu URL berria';
$string['url:view'] = 'Ikusi URLa';
