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
 * Strings for component 'scorm', language 'eu', version '3.11'.
 *
 * @package     scorm
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activation'] = 'Aktibazioa';
$string['activityloading'] = 'Ondoko jarduerara eramango zaitugu automatikoki';
$string['activityoverview'] = 'Zain dituzu hainbat SCORM pakete';
$string['activitypleasewait'] = 'Jarduera kargatzen, itxaron mesedez...';
$string['adminsettings'] = 'Kudeaketaren ezarpenak';
$string['advanced'] = 'Parametroak';
$string['aicchacpkeepsessiondata'] = 'AICC HACP saioaren datuak';
$string['aicchacpkeepsessiondata_desc'] = 'Kanpoko AICC HACP saioaren datuak gordeko dira denbora tarte honetan (egunetan). Balio handia ezarriz gero, taula datu zaharrez beteko da, baina mesedegarri izan daiteke arazketa eginez gero';
$string['aicchacptimeout'] = 'AICC HACPren gehieneko denbora';
$string['aicchacptimeout_desc'] = 'Kanpoko AICC HACP saioa irekita mantendu daitekeen denbora (minututan)';
$string['aiccuserid'] = 'AICC pass erabiltzailearen ID numerikoa';
$string['aiccuserid_desc'] = 'AICC erabiltzaile-izenentzako estandarra oso mugatzailea da Moodlerekin konparatuta, eta karaktere alfanumerikoak, gidoia eta beheko gidoia soilik onartzen ditu. Puntuak, espazioak eta @ sinboloa ez ditu onartzen. Gaituz gero, erabiltzaileen ID zenbakiak pasatzen dira AICC paketeari erabiltzaile-izenen ordez.';
$string['aliasonly'] = 'Alias/lasterbidea erabili behar duzu imsmanifest.xml fitxategia biltegi batetik aukeratzean.';
$string['allowapidebug'] = 'Arazketa eta jazarpenerako APIa gaitu (atzipen maskara ezarri apidebugmask-aren bidez)';
$string['allowtypeaicchacp'] = 'Gaitu kanpoko AICC HACP';
$string['allowtypeaicchacp_desc'] = 'Gaituz gero, kanpoko AICC HACP komunikaziorako, ez da beharrekoa izango erabiltzailea plataforman sartzea kanpoko AICC paketeetatik post eskaerak egiteko orduan';
$string['allowtypeexternal'] = 'Gaitu kanpoko pakete-mota';
$string['allowtypeexternalaicc'] = 'Gaitu AICC-ren URL zuzena';
$string['allowtypeexternalaicc_desc'] = 'Gaituz gero, onartuko dira zuzeneko URLak AICC pakete bakunetara';
$string['allowtypelocalsync'] = 'Gaitu jaitsitako pakete mota';
$string['apidebugmask'] = 'API arazketa-atzipen maskara - adierazpen erregular sinplea erabili <erabiltzailea>:<jardueraizena> formatuarekin.
Esaterako, admin:.* soilik admin erabiltzailearentzako arazketa  egingo du';
$string['areacontent'] = 'Eduki-fitxategiak';
$string['areapackage'] = 'Pakete-fitxategia';
$string['asset'] = 'Baliabidea';
$string['assetlaunched'] = 'Baliabidea - Ikusia';
$string['attempt'] = 'Saiakera';
$string['attempt1'] = 'saiakera 1';
$string['attempts'] = 'Saiakerak';
$string['attemptsmanagement'] = 'Saiakeren kudeaketa';
$string['attemptstatusall'] = 'Aginte-panela eta sarbide-orria';
$string['attemptstatusentry'] = 'Sarbide-orria baino ez';
$string['attemptstatusmy'] = 'Aginte-panela baino ez';
$string['attemptsx'] = '{$a} saiakera';
$string['attr_error'] = '({$a->attr}) atributuaren balio desegokia {$a->tag} etiketan.';
$string['autocommit'] = 'Automatikoki gorde';
$string['autocommit_help'] = 'Gaituz gero, SCORM datuak datu-basean automatikoki gordetzen dira. Erabilgarria da beren datuak aldiro gordetzen ez dituzten SCORM objektuetan.';
$string['autocommitdesc'] = 'SCORM datuak automatikoki gorde SCORM paketeak berak gordetzen ez baditu.';
$string['autocontinue'] = 'Jarraipen automatikoa';
$string['autocontinue_help'] = 'Gaituz gero, hemendik aurrerako ikasteko objektuak automatikoki hasiko dira, bestela, Jarraitu botoia erabili beharko da.';
$string['autocontinuedesc'] = 'Gaituz gero, hurrengo ikasteko objektuak automatikoki abiarazten dira, bestela Jarraitu botoia erabili behar da.';
$string['averageattempt'] = 'Saiakeren batez bestekoa';
$string['badarchive'] = 'zip fitxategi baliagarria eman behar duzu';
$string['badimsmanifestlocation'] = 'imsmanifest.xml fitxategia aurkitu da baina ez dago zure zip fitxategiaren jatorrian, zure SCORM eduki-paketea berregin ezazu mesedez.';
$string['badmanifest'] = 'Manifestu-erroreak: erroreen erregistroa ikusi';
$string['browse'] = 'Aurrebista';
$string['browsed'] = 'Nabigatua';
$string['browsemode'] = 'Aurrebista-modua';
$string['browserepository'] = 'Biltegian zehar nabigatu';
$string['calculatedweight'] = 'Kalkulatutako pisua';
$string['calendarend'] = '{$a}-(r)en itxiera-data:';
$string['calendarstart'] = '{$a}-(r)en hasiera-data';
$string['cannotaccess'] = 'Ezin duzu script hau modu horretan deitu.';
$string['cannotfindsco'] = 'Ezin da SCO aurkitu';
$string['chooseapacket'] = 'Aukeratu edo eguneratu SCORM paketea';
$string['closebeforeopen'] = 'Ezarri duzun itxiera-data hasiera-data baino lehenagokoa da.';
$string['collapsetocwinsize'] = 'Tolestu TOC leihoaren tamaina ondokoa baino txikiagoa denean';
$string['collapsetocwinsizedesc'] = 'Ezarpen honek leihoaren tamaina minimo batetik behera TOC-a automatikoki tolesteko aukera ematen du.';
$string['compatibilitysettings'] = 'Bateragarritasunerako ezarpenak';
$string['completed'] = 'Osatua';
$string['completiondetail:allscos'] = 'Jardueraren atal guztiak egitea';
$string['completiondetail:completionscore'] = '{$a} edo gehiagoko puntuazio bat jasotzea';
$string['completiondetail:completionstatuscompleted'] = 'Jarduera osatzea';
$string['completiondetail:completionstatuscompletedandpassed'] = 'Jarduera osatu eta gainditzea';
$string['completiondetail:completionstatuspassed'] = 'Jarduera gainditzea';
$string['completionscorerequired'] = 'Gutxieneko puntuazioa beharrezkoa da';
$string['completionscorerequired_help'] = 'Ezarpen hau gaituz gero, ikasleari SCORM jarduera osatutzat emateko, puntuazio minimoa izan beharko du eta jarduera-osaketarako beste eskakizunak bete beharko ditu.';
$string['completionscorerequireddesc'] = 'Jarduera osatzeko {$a}-eko gutxieneko kalifikazioa beharrezkoa da.';
$string['completionstatus_completed'] = 'Osatua';
$string['completionstatus_passed'] = 'Gaindituta';
$string['completionstatusallscos'] = 'Behartu sco guztiek osatze-egoerara bueltatzea';
$string['completionstatusallscos_help'] = 'SCORM pakete batzuk osagai anitz edo "sco" dituzte - aukera hau gaitzean paketeko sco guztiek lesson_status balioa bueltatu behar dute jarduera hau osatutzat emateko.';
$string['completionstatusrequired'] = 'Egoera ezarri gabe';
$string['completionstatusrequired_help'] = 'Egoera bat edo gehiago aukeratuz gero, erabiltzaileei SCORM jarduera gainditutzat emateko, lortu beharko dute: gutxienez, aukeratutako egoeretako bat eta jarduera-osaketarako beste eskakizunak bete.';
$string['completionstatusrequireddesc'] = 'Ikaslea gutxienez hurrengo egoeretako batera heldu behar da: {$a}';
$string['confirmloosetracks'] = 'KONTUZ: Badirudi paketea aldatu egin dela. Paketearen egitura aldatu egin bada zenbait erabiltzaileren pistak agian galdu egingo ziren eguneratze-prozesuan.';
$string['contents'] = 'Edukiak';
$string['coursepacket'] = 'Ikastaro-paketea';
$string['coursestruct'] = 'Ikastaro-egitura';
$string['crontask'] = 'SCORM-eko atzeko planoko prozesamendua';
$string['currentwindow'] = 'Oraingo leihoa';
$string['datadir'] = 'Fitxategi-sistema errorea: Ikastaroko datuen karpeta ezin da sortu';
$string['defaultdisplaysettings'] = 'Erakusteko ezarpen lehenetsiak';
$string['defaultgradesettings'] = 'Lehenetsitako kalifikazio-ezarpenak';
$string['defaultothersettings'] = 'Lehenetsitako beste ezarpen batzuk';
$string['deleteallattempts'] = 'Ezabatu SCORMetako saiakera guztiak';
$string['deleteattemptcheck'] = 'Ziur al zaude saiakera hauek ezabatu nahi dituzula?';
$string['deleteselected'] = 'Ezabatu aukeratutako saiakerak';
$string['deleteuserattemptcheck'] = 'Ziur al zaude zure saiakera guztiak ezabatu nahi dituzula?';
$string['details'] = 'Pistaren zehaztasunak';
$string['directories'] = 'Erakutsi direktorioaren estekak';
$string['disabled'] = 'Desgaituta';
$string['display'] = 'Erakutsi paketea';
$string['displayactivityname'] = 'Erakutsi jardueraren izena';
$string['displayactivityname_help'] = 'SCORM erreproduzigailuaren gainean jardueraren izena erakustea edo ez.';
$string['displayattemptstatus'] = 'Erakutsi saiakeren egoera';
$string['displayattemptstatus_help'] = 'Gaituz gero, erabiltzailearen saiakeren laburpena Aginte-paneleko ikastaroaren ikuspegi orokorreko blokean edota SCORM-en laburpen-orrian erakutsiko dira.';
$string['displayattemptstatusdesc'] = 'Erakutsi erabiltzailearen saiakeren laburpena ikastaroaren ikuspegi orokorreko blokean Aginte-panelean edota SCORM-en laburpen-orrian.';
$string['displaycoursestructure'] = 'Erakutsi ikastaro-egitura sarrera-orrian';
$string['displaycoursestructure_help'] = 'Gaituz gero, eduki-taula SCORM-en laburpen-orrian erakutsiko da';
$string['displaycoursestructuredesc'] = 'Gaituz gero, eduki-taula SCORM-en laburpen-orrian erakutsiko da.';
$string['displaydesc'] = 'SCORM paketea leiho berri batean erakutsi ala ez.';
$string['displaysettings'] = 'Erakutsi ezarpenak';
$string['dnduploadscorm'] = 'Gehitu SCORM pakete bat';
$string['domxml'] = 'DOMXML kanpoko liburutegia';
$string['duedate'] = 'Entregatze-data';
$string['element'] = 'Elementua';
$string['enter'] = 'Sartu';
$string['entercourse'] = 'Sartu SCORM ikastarora';
$string['errorlogs'] = 'Erroreen erregistroa';
$string['eventattemptdeleted'] = 'Saiakera ezabatu da';
$string['eventinteractionsviewed'] = 'Interakzioak ikusi dira';
$string['eventreportviewed'] = 'Txostena ikusi da';
$string['eventscolaunched'] = 'Sco-a abiarazi da';
$string['eventscorerawsubmitted'] = 'SCORM puntuazio gordina bidali da';
$string['eventstatussubmitted'] = 'Bidalitako SCORMaren egoera';
$string['eventtracksviewed'] = 'Ikusitako pistak';
$string['eventuserreportviewed'] = 'Erabiltzailearen txostena ikusi da';
$string['everyday'] = 'Egunero';
$string['everytime'] = 'Erabiltzen den bakoitzean';
$string['exceededmaxattempts'] = 'Gehieneko saiakera-kopurua egin duzu.';
$string['exit'] = 'Irten ikastarotik';
$string['exitactivity'] = 'Irten jardueratik';
$string['expired'] = 'Sentitzen dugu, jarduera {$a} -n itxi zen eta dagoeneko ez dago eskuragarri';
$string['external'] = 'Eguneratu kanpoko paketeen denbora-tartea';
$string['failed'] = 'Gainditu gabea';
$string['finishscorm'] = 'Baliabide hau ikusten amaitu baduzu,  {$a}';
$string['finishscormlinkname'] = 'egin klik hemen ikastaroko hasiera-orrira itzultzeko';
$string['firstaccess'] = 'Lehenengo sarrera';
$string['firstattempt'] = 'Lehen saiakera';
$string['floating'] = 'Mugikorra';
$string['forceattemptalways'] = 'Beti';
$string['forceattemptoncomplete'] = 'Aurreko saiakera osatu denean, gaindituta edo gainditu gabe';
$string['forcecompleted'] = 'Behartu osatzera';
$string['forcecompleted_help'] = 'Gaituz gero, oraingo saiakeraren egoera "osatua" egoerara behartuko da (soilik SCORM 1.2 paketeetan aplikatu daiteke).';
$string['forcecompleteddesc'] = '\'Behartu osatzera\' ezarpenaren lehenetsitako balioa';
$string['forcejavascript'] = 'Behartu erabiltzaileak JavaScript gaitzera';
$string['forcejavascript_desc'] = 'Gaituz gero (gomendatuta), SCORM paketera sartzea saihesten da JavaScript ez badago onartuta/gaituta erabiltzailearen nabigatzailean. Ez bada gaitzen, erabiltzaileak SCORM-a ikusi ahal izango du, baina API komunikazioak huts egingo du eta ez da gordeko kalifikazioei buruzko informaziorik.';
$string['forcejavascriptmessage'] = 'JavaScript beharrezkoa da objektu hau ikusteko, mesedez, gaitu JavaScript zure nabigatzailean eta berriz saiatu.';
$string['forcenewattempts'] = 'Behartu saiakera berria';
$string['forcenewattempts_help'] = '3 aukera dago:

* Ez - Aurreko saiakera osatu bada, gainditu edo gainditu gabe, ikasleari aurrebista-moduan sartu edo saiakera berri bat hasteko aukera emango zaio.
* Aurreko saiakera osatu denean, gaindituta edo gainditu gabe - Hemen SCORM paketearen egoera \'osatuta\', \'gaindituta\' edo \'gainditu gabea\' izan beharko da.
* Beti - Saiakera berri bakoitzean SCORM jarduerak saiakera berri bat sortuko du eta ikaslea ez da aurreko saiakeran heldu zeneko puntura bueltatuko.';
$string['found'] = 'Manifestua aurkitu da';
$string['frameheight'] = 'Marko edo leihoaren altuera.';
$string['framewidth'] = 'Marko edo leihoaren zabalera.';
$string['fromleft'] = 'Ezkerretik';
$string['fromtop'] = 'Goitik';
$string['fullscreen'] = 'Pantaila osoa bete';
$string['general'] = 'Datu orokorrak';
$string['gradeaverage'] = 'Batez besteko kalifikazioa';
$string['gradeforattempt'] = 'Saikerarako kalifikazioa';
$string['gradehighest'] = 'Kalifikazio altuena';
$string['grademethod'] = 'Kalifikazio-metodoa';
$string['grademethod_help'] = 'Kalifikazio-metodoak definitzen du nola zehazten den kalifikazioa jarduera-saiakera bakoitzeko.

4 kalifikazio-metodo daude:

* Ikasteko objektuak - Betetako/gainditutako ikasteko objektu-kopurua
* Kalifikazio altuena - Gainditutako ikasteko objektuen puntuaziorik altuena
* Batez besteko kalifikazioa - Puntuazio guztien arteko batez bestekoa
* Batutako kalifikazioak - Puntuazio guztien batura';
$string['grademethoddesc'] = 'Kalifikazio-metodoak jardueraren saiakera bat ebaluatzeko modua zehazten du.';
$string['gradereported'] = 'Emandako kalifikazioa';
$string['gradescoes'] = 'Ikasteko objektuak';
$string['gradesettings'] = 'Kalifikazioen ezarpenak';
$string['gradesum'] = 'Batutako kalifikazioak';
$string['height'] = 'Altuera';
$string['hidden'] = 'Ezkutuan';
$string['hidebrowse'] = 'Desgaitu aurrebista-botoia';
$string['hidebrowse_help'] = 'Aurrebista-moduak baimentzen die ikasleei jarduera arakatzea saiakera egin aurretik. Aurrebista-modua desgaitua badago, Aurreikusi botoia ezkutatuko da.';
$string['hidebrowsedesc'] = 'Aurrebista-moduak baimentzen die ikasleei jarduera arakatzea saiakera egin aurretik.';
$string['hideexit'] = 'Ezkutatu irteera-esteka';
$string['hidereview'] = 'Ezkutatu berrikusketa-esteka';
$string['hidetoc'] = 'Erakutsi ikastaroaren egitura erreproduzigailuan';
$string['hidetoc_help'] = 'Nola erakutsiko den eduki-taula SCORM erreproduzigailuan.';
$string['hidetocdesc'] = 'Ezarpen honek zehazten du nola erakutsiko den eduki-taula SCORM erreproduzigailuan.';
$string['highestattempt'] = 'Saiakera altuena';
$string['identifier'] = 'Galdera-identifikatzailea';
$string['incomplete'] = 'Osatu gabea';
$string['indicator:cognitivedepth'] = 'Gaitasun kognitiboa SCORM jardueretan';
$string['indicator:cognitivedepth_help'] = 'Adierazle hau ikasleak SCORM motako jardueretan lortutako sakonera kognitiboan oinarrituta dago.';
$string['indicator:cognitivedepthdef'] = 'Gaitasun kognitiboa SCORM jardueretan';
$string['indicator:cognitivedepthdef_help'] = 'Partaide honek SCORM jarduerak eskaintzen duen gaitasun kognitiboaren ehuneko hau lortu du analisi-tarte honetan (Mailak = Ikusi gabe, Ikusi da, Bidali da, Feedbacka ikusi da)';
$string['indicator:socialbreadth'] = 'Gaitasun soziala SCORM jardueretan';
$string['indicator:socialbreadth_help'] = 'Helburu hau ikasleak SCORM motako baliabideetan lortutako zabalera sozialean oinarrituta dago.';
$string['indicator:socialbreadthdef'] = 'Gaitasun soziala SCORM jardueretan';
$string['indicator:socialbreadthdef_help'] = 'Partaide honek SCORM jarduerak eskaintzen duen gaitasun sozialaren ehuneko hau lortu du analisi-tarte honetan';
$string['info'] = 'Informazioa';
$string['interactions'] = 'Interakzioak';
$string['invalidactivity'] = 'SCORM jarduera ez da egokia';
$string['invalidhacpsession'] = 'HACP saio ezegokia';
$string['invalidmanifestname'] = 'Soilik imsmanifest.xml edo .zip fitxategiak aukeratu daitezke';
$string['invalidmanifestresource'] = 'KONTUZ: baliabide hauek zure manifestuan aipatuak daude baina ezin dira aurkitu:';
$string['invalidstatus'] = 'Egoera baliogabea';
$string['invalidurl'] = 'Balio ez duen URLa ezarri da';
$string['invalidurlhttpcheck'] = 'Balio ez duen URLa ezarri da. Arazketa mezua:<pre>{$a->cmsg}</pre>';
$string['last'] = 'Azken sarrera hemen';
$string['lastaccess'] = 'Azken sarrera';
$string['lastattempt'] = 'Osatutako azken saiakera';
$string['lastattemptlock'] = 'Blokeatu azken saiakeraren ondoren';
$string['lastattemptlock_help'] = 'Gaituz gero, ikasleari ez zaio uzten SCORM erreproduzigailua abiarazten baimendutako saiakera kopurua erabili ondoren.';
$string['lastattemptlockdesc'] = 'Gaituz gero, ikasleari ez zaio uzten SCORM erreproduzigailua abiarazten baimendutako saiakera kopurua erabili ondoren.';
$string['location'] = 'Erakutsi kokapen-barra';
$string['masteryoverride'] = 'Menderatze-mailaren puntuazioaren salbuespenaren egoera';
$string['masteryoverride_help'] = 'Gaituz gero eta menderatze-mailaren puntuazioa badago, LMSFinish deitzen denean eta puntuazio gordina ezarri denean, egoera berriz kalkulatutako da puntuazio gordina eta menderatze-mailaren puntuazioa erabilita eta SCORM-ek emandako edozein egoera ("osatu gabea" barne) gainidatziko da.';
$string['masteryoverridedesc'] = 'Ezarpen honek lehenetsitako menderatze-mailaren puntuazioaren salbuespena zehazten du.';
$string['max'] = 'Gehieneko puntuazioa';
$string['maximumattempts'] = 'Saiakera-kopurua';
$string['maximumattempts_help'] = 'Ezarpen honek erabiltzaileei baimendutako saiakera-kopurua zehazten du. SCORM 1.2 eta AICC paketeetan baino ezin da aplikatu.';
$string['maximumattemptsdesc'] = 'Hobespen honek jarduera baterako lehenetsitako gehieneko saiakera-kopurua ezartzen du';
$string['maximumgradedesc'] = 'Hobespen honek jarduera baterako lehenetsitako gehieneko kalifikazioa ezartzen du';
$string['menubar'] = 'Erakutsi menu-barra';
$string['min'] = 'Gutxieneko puntuazioa';
$string['missing_attribute'] = '{$a->attr} atributua {$a->tag} etiketan falta da';
$string['missing_tag'] = '{$a->tag} etiketa falta da';
$string['missingparam'] = 'Beharrezko parametro bat falta da edo okerra da';
$string['mode'] = 'Modua';
$string['modulename'] = 'SCORM paketea';
$string['modulename_help'] = 'SCORM paketeak irakaskuntza-objektuentzat adostutako estandarrei jarraituz bildutako fitxategi-multzoak dira. SCORM jarduera-moduluak SCORM edota AICC paketeak ikastaroan erabiliak izateko ZIP fitxategi batean igo ditzake.

Edukia hainbat orritan erakutsi ohi da, orrien arteko nabigazioarekin. Edukiak erakusteko modu ezberdinak daude: pop-up leiho batetan, nabigazio-menuarekin edo botoiekin,... SCORM jarduerek galderak izan ohi dituzte, eta kalifikazioak kalifikazio-liburuan gordetzen dira.

SCORM jarduera ondokoetarako erabil daiteke

* Eduki multimedia eta animazioak erakusteko
* Ebaluaketa tresna gisa';
$string['modulenameplural'] = 'SCORM paketeak';
$string['myaiccsessions'] = 'Nire AICC saioak';
$string['myattempts'] = 'Nire saiakerak';
$string['nav'] = 'Erakutsi nabigazioa';
$string['nav_help'] = 'Ezarpen honek nabigazio-botoiak erakutsi edo ezkutatzea ahalbidetzen du, baita euren kokalekua ere.

3 aukera daude:

* Ez - Nabigazio-botoiak ez dira erakusten
* Edukien azpian - Nabigazio-botoiak SCORM paketearen edukien azpian erakutsiko dira
* Mugikorra - Nabigazio-botoiak era mugikorrean erakusten dira, goikaldetik eta ezkerretik paketean zehaztutako posizioan.';
$string['navdesc'] = 'Ezarpen honek nabigazio-botoiak erakutsi edo ezkutatzea ahalbidetzen du, baita euren kokalekua ere.';
$string['navigation'] = 'Nabigazioa';
$string['navpositionleft'] = 'Nabigazio-botoien kokalekua ezkerretik (pixeletan)';
$string['navpositiontop'] = 'Nabigazio-botoien kokalekua goiko aldetik (pixeletan)';
$string['networkdropped'] = 'SCORM erreproduzigailuak zure Internet konexioa ezegonkorra dela edo moztu egin dela konprobatu du. SCORM jarduerarekin jarraituz gero, baliteke zure aurrerapena ez gordetzea.<br/>
Jardueratik atera beharko zinateke orain, eta itzuli Internet konexio fidagarri bat duzunean.';
$string['newattempt'] = 'Hasi saiakera berria';
$string['next'] = 'Jarraitu';
$string['no_attributes'] = '{$a->tag} etiketak atributuak izan behar ditu';
$string['no_children'] = '{$a->tag} etiketak seme-alabak izan behar ditu';
$string['noactivity'] = 'Informaziorik ez';
$string['noattemptsallowed'] = 'Baimendutako saiakera-kopurua';
$string['noattemptsmade'] = 'Egin duzun saiakera-kopurua';
$string['nolimit'] = 'Saiakera-kopuru mugagabea';
$string['nomanifest'] = 'Pakete-fitxategi ezegokia - ez da aurkitu imsmanifest.xml fitxategia edo AICC egiturarik';
$string['noprerequisites'] = 'Sentitzen dugu, baina ez dituzu jarduera honetara sarbidea izateko aurrebaldintza guztiak betetzen.';
$string['noreports'] = 'Ez dago txostenik erakusteko';
$string['normal'] = 'Arrunta';
$string['noscriptnoscorm'] = 'Zure nabigatzaileak ez du javascript onartzen, edo ez dago gaiturik. Baliteke SCORM paketea ez abiaraztea edo datuak ondo ez gordetzea.';
$string['not_corr_type'] = '{$a->tag} etiketari ez dagokio mota hau';
$string['notattempted'] = 'Saiatu gabea';
$string['notopenyet'] = 'Sentitzen dugu, jarduera hau ez dago eskuragarri {$a} arte';
$string['objectives'] = 'Helburuak';
$string['openafterclose'] = 'Ezarri duzun hasiera-data itxiera-data baino beranduagokoa da.';
$string['optallstudents'] = 'erabiltzaile guztiak';
$string['optattemptsonly'] = 'saiakerak egin dituzten erabiltzaileak baino ez';
$string['options'] = 'Aukerak (nabigatzaile batzuek galarazita)';
$string['optionsadv'] = 'Aukerak (aurreratuak)';
$string['optionsadv_desc'] = 'Aukeratuz gero, zabalera eta altuera ezarpen aurreratuetan zerrendatuko dira.';
$string['optnoattemptsonly'] = 'saiakerak egin ez dituzten erabiltzaileak baino ez';
$string['organization'] = 'Erakundea';
$string['organizations'] = 'Erakundeak';
$string['othersettings'] = 'Ezarpen gehigarriak';
$string['package'] = 'Pakete-fitxategia';
$string['package_help'] = 'Pakete-fitxategia zip (edo pif) formatukoa da eta SCORM/AICC moldeko ikastaroen fitxategiak ditu.';
$string['packagedir'] = 'Sistema-errorea: Ezin da paketearen direktorioa sortu';
$string['packagefile'] = 'Ez da pakete-fitxategirik zehaztu';
$string['packagehdr'] = 'Paketea';
$string['packageurl'] = 'URLa';
$string['packageurl_help'] = 'Ezarpen hau gaituz gero, SCORM paketea hautatzeko, fitxategi-hautatzailearen bidez fitxategi bat hautatu ordez, haren URLa zuzenean zehaztu beharko da.';
$string['page-mod-scorm-x'] = 'SCORM moduluaren edozein orri';
$string['pagesize'] = 'Orriaren tamaina';
$string['passed'] = 'Gainditua';
$string['php5'] = 'PHP 5 (DOMXML jatorrizko liburutegia)';
$string['pluginadministration'] = 'SCORM paketearen kudeaketa';
$string['pluginname'] = 'SCORM paketea';
$string['popup'] = 'Leiho berrian';
$string['popuplaunched'] = 'SCORM pakete hau popup leiho batean abiarazi da, baliabidea ikusten amaitu baduzu egin klik hemen ikastaroko orrira bueltatzeko.';
$string['popupmenu'] = 'Zabaltzen den menuan';
$string['popupopen'] = 'Ireki paketea leiho berrian';
$string['popupsblocked'] = 'Itxuraz popup leihoak blokeatuta daude, eta ez da posible SCORM pakete hau erreproduzitzea. Mesedez, zure nabigatzailearen ezarpenak berrikusi berriro saiatu aurretik.';
$string['position_error'] = '{$a->tag} etiketa ezin da {$a->parent} etiketaren seme-alaba izan';
$string['preferencespage'] = 'Orri honen hobespenak';
$string['preferencesuser'] = 'Txosten honetarako hobespenak';
$string['prev'] = 'Aurrekoa';
$string['privacy:metadata:aicc:data'] = 'AICC/SCORM azpisistemaren bitartez pasatako datu pertsonalak.';
$string['privacy:metadata:aicc:externalpurpose'] = 'Plugin honek AICC HACP erabilita datuak kanpora bidaltzen ditu.';
$string['privacy:metadata:aicc_session:lessonstatus'] = 'Jarraituko diren ikasgaiaren egoerak';
$string['privacy:metadata:aicc_session:scormmode'] = 'Jarraituko den elementuaren modua';
$string['privacy:metadata:aicc_session:scormstatus'] = 'Jarraituko den elementuaren egoera';
$string['privacy:metadata:aicc_session:sessiontime'] = 'Jarraituko den saioaren iraupen-denbora';
$string['privacy:metadata:aicc_session:timecreated'] = 'Jarraitutako elementua sortu zeneko unea';
$string['privacy:metadata:attempt'] = 'Saiakeraren zenbakia';
$string['privacy:metadata:scoes_track:element'] = 'Jarraitutako elementuaren izena';
$string['privacy:metadata:scoes_track:value'] = 'Emandako elementuaren balioa';
$string['privacy:metadata:scorm_aicc_session'] = 'AICC HACP-aren saioaren informazioa';
$string['privacy:metadata:scorm_scoes_track'] = 'Jarduerarenak diren jarraitutako SCO-en datuak';
$string['privacy:metadata:timemodified'] = 'Jarraitutako elementua azkenengoz aldatu zeneko unea';
$string['privacy:metadata:userid'] = 'SCORM jardueran sartu zen erabiltzailearen IDa';
$string['protectpackagedownloads'] = 'Babestu paketeen deskargak';
$string['protectpackagedownloads_desc'] = 'Gaituz gero, SCORM paketeak soilik course:manageactivities gaitasuna duten erabiltzaileek jaitsi ahal izango dute. Desgaituz gero, SCORM paketeak beti jaitsi ahal izango dira (gailu mugikorrak edo bestelakoak izan arren).';
$string['raw'] = 'Puntuazio gordina';
$string['regular'] = 'Manifestu erregularra';
$string['report'] = 'Txostena';
$string['reportcountallattempts'] = '{$a->nbusers} erabiltzailek {$a->nbattempts} saiakera egin dute eta {$a->nbresults} emaitza lortu dituzte';
$string['reportcountattempts'] = '{$a->nbresults} emaitzak ({$a->nbusers} erabiltzaileak)';
$string['reports'] = 'Txostenak';
$string['repositorynotsupported'] = 'Biltegi honek ez du onartzen imsmanifest.xml fitxategiak zuzenean estekatzea.';
$string['response'] = 'Erantzuna';
$string['result'] = 'Emaitza';
$string['results'] = 'Emaitzak';
$string['review'] = 'Berrikusketa';
$string['reviewmode'] = 'Berrikusketa-modua';
$string['rightanswer'] = 'Erantzun zuzena';
$string['scoes'] = 'Ikasteko objektuak';
$string['score'] = 'Puntuazioa';
$string['scorm:addinstance'] = 'Gehitu SCORM pakete berria';
$string['scorm:deleteownresponses'] = 'Ezabatu norberaren saiakerak';
$string['scorm:deleteresponses'] = 'Ezabatu SCORM saiakerak';
$string['scorm:savetrack'] = 'Gorde pistak';
$string['scorm:skipview'] = 'Saltatu berrikusketa';
$string['scorm:viewreport'] = 'Ikusi txostenak';
$string['scorm:viewscores'] = 'Ikusi puntuazioak';
$string['scormclose'] = 'Noiz arte eskuragarri';
$string['scormcourse'] = 'Ikasteko ikastaroa';
$string['scormloggingoff'] = 'API sarbidea itxita dago';
$string['scormloggingon'] = 'API sarbidea zabalik dago';
$string['scormopen'] = 'Noiztik eskuragarri';
$string['scormresponsedeleted'] = 'Erabiltzailearen saiakerak ezabatuta';
$string['scormstandard'] = 'SCORM estandarraren modua';
$string['scormstandarddesc'] = 'Desgaituta dagoenean, Moodlek SCORM 1.2 paketeei espezifikazioak baimendutakoa baino datu gehiago gordetzea baimenduko die, eta Moodleko izen osoaren formatua erabiltzen du erabiltzaileen izenak SCORM paketera pasatzerakoan.';
$string['scormtype'] = 'Mota';
$string['scormtype_help'] = 'Ezarpen honek paketea ikastaroan gehitzeko modua zehazten du. 4 aukera ezberdin daude:

* Igotako paketea - Fitxategi hautatzailetik SCORM paketea hautatzea ahalbidetzen du.
* Kanpoko SCORM manifestua - imsmanifest.xml URLa zehaztea ahalbidetzen du.
Oharra: URLak zuren gunearena ez den domeinu izena badu "Jaitsitako paketea" aukera hobea da, bestela kalifikazioak ez dira gordeko eta.
* Jaitsitako paketea - paketearen URLa zehaztea ahalbidetzen du. Paketea lokalki erauzi eta gordeko da, eta kanpoko SCORM paketea eguneratzean eguneratuko da.
* AICC-ren kanpo URLa - URL hau AICC jarduera bakoitzaren abiorako URLa da. Pseudo pakete bat eraikiko da honetarako.';
$string['scrollbars'] = 'Baimendu leihoan mugitzea';
$string['search:activity'] = 'SCORM paketea - jardueraren informazioa';
$string['selectall'] = 'Aukeratu guztiak';
$string['selectnone'] = 'Desmarkatu guztiak';
$string['show'] = 'Erakutsi';
$string['sided'] = 'Albo batean';
$string['skipview'] = 'Ikasleak ez dio jaramonik egingo orriaren eduki-egiturari';
$string['skipview_help'] = 'Aukera honek zehaztuko du orriaren eduki-egiturari jaramonik ez egiteko (ez erakusteko) aukeraren balio lehenetsia. Paketeak ikasteko objektu bakarra badu, eduki-egiturari beti salto egin dakioke.';
$string['skipviewdesc'] = 'Orriaren eduki-egiturari jaramonik ez egiteko aukeraren balio lehenetsia';
$string['slashargs'] = 'KONTUZ: slash argumentuak ez daude gaituta gune honetan eta litekeena da behar bezala ez funtzionatzea';
$string['stagesize'] = 'Markoaren edo leihoaren tamaina';
$string['stagesize_help'] = 'Bi ezarpen hauek zehazten dute ikasteko objektuen markoa/leihoaren zabalera eta altuera.';
$string['started'] = 'Hasiera-data:';
$string['status'] = 'Egoera';
$string['statusbar'] = 'Erakutsi egoera-barra';
$string['student_response'] = 'Erantzuna';
$string['subplugintype_scormreport'] = 'Txostena';
$string['subplugintype_scormreport_plural'] = 'Txostenak';
$string['suspended'] = 'Bere horretan utzia';
$string['syntax'] = 'Sintaxi-errorea';
$string['tag_error'] = 'Etiketa ezezagun honek ({$a->tag}) eduki hau dauka: {$a->value}';
$string['time'] = 'Ordua';
$string['title'] = 'Izenburua';
$string['toc'] = 'TOC';
$string['too_many_attributes'] = 'Etiketa honek ({$a->tag}) atributu gehiegi dauka';
$string['too_many_children'] = 'Etiketa honek ({$a->tag}) seme-alaba gehiegi dauka';
$string['toolbar'] = 'Erakutsi tresna-barra';
$string['totaltime'] = 'Ordua';
$string['trackcorrectcount'] = 'Zenbaketa zuzena';
$string['trackcorrectcount_help'] = 'Galderarentzako emaitz egokien kopurua';
$string['trackid'] = 'IDa';
$string['trackid_help'] = 'Hau da zure SCORM paketeak galdera honentzat ezarritako identifikatzailea, SCORM espezifikazioak ez du galderen testu osoa ematea uzten.';
$string['trackingloose'] = 'KONTUZ: Pakete honen miaketa-datuak galdu egingo dira!';
$string['tracklatency'] = 'Itxarote-denbora';
$string['tracklatency_help'] = 'Galdera erantzuteko eskuragarri jartzen denetik ikaslearen lehen erantzuna egin arteko denbora-tartea.';
$string['trackpattern'] = 'Patroia';
$string['trackpattern_help'] = 'Hau galderarentzako erantzun egokiaren patroia da, ez da ikasleei erakusten.';
$string['trackresponse'] = 'Erantzuna';
$string['trackresponse_help'] = 'Hau da ikasleak galderari emandako erantzuna';
$string['trackresult'] = 'Emaitza';
$string['trackresult_help'] = 'Ikasleak ondo erantzun duen erakusten du.';
$string['trackscoremax'] = 'Gehieneko puntuazioa';
$string['trackscoremax_help'] = 'Puntuazio gordin batek izan dezakeen gehieneko balioa';
$string['trackscoremin'] = 'Gutxieneko puntuazioa';
$string['trackscoremin_help'] = 'Puntuazio gordin batek izan dezakeen gutxieneko balioa';
$string['trackscoreraw'] = 'Puntuazio gordina';
$string['trackscoreraw_help'] = 'Gehieneko eta gutxieneko balioen arteko tartean ikaslearen errendimendua erakusten duen zenbakia';
$string['tracksuspenddata'] = 'Bertan-behera utzitako data';
$string['tracksuspenddata_help'] = 'Ikaslearen saioen arteko datak gorde eta berreskuratzeko lekua ematen du';
$string['tracktime'] = 'Denbora';
$string['tracktime_help'] = 'Saiakeraren hasi zeneko unea';
$string['tracktype'] = 'Mota';
$string['tracktype_help'] = 'Galdera mota, esaterako "choice" edo "shortanswer"';
$string['trackweight'] = 'Pisua';
$string['trackweight_help'] = 'Puntuazioa kalkulatzeko galderari emandako pisua.';
$string['type'] = 'Mota';
$string['typeaiccurl'] = 'Kanpoko AICC-ren URLa';
$string['typeexternal'] = 'Kanpoko SCORM manifestua';
$string['typelocal'] = 'Igotako paketea';
$string['typelocalsync'] = 'Jaitsitako paketea';
$string['undercontent'] = 'Edukien azpian';
$string['unziperror'] = 'Errorea gertatu da zip paketea deskonprimatzean';
$string['updatefreq'] = 'Frekuentzia automatikoki eguneratu';
$string['updatefreq_error'] = 'Eguneraketa automatikoa pakete-fitxategia kanpoko zerbitzari batean dagoenean soilik ezarri daiteke';
$string['updatefreq_help'] = 'Honek baimentzen du kanpoko paketeak automatikoki jaistea eta eguneratzea';
$string['updatefreqdesc'] = 'Hobespen honek jarduera bat automatikoki eguneratzeko lehenetsitako frekuentzia ezartzen du';
$string['validateascorm'] = 'Balioztatu SCORM paketea';
$string['validation'] = 'Onespenaren emaitza';
$string['validationtype'] = 'Hobespen honek SCORM Manifestua onartzeko erabili den DOMXML liburutegian ezarpenak egiten ditu. Zalantzak izatekotan, aukera aktibatuta utzi.';
$string['value'] = 'Balioa';
$string['versionwarning'] = 'Manifestuaren bertsioa 1.3 baino lehenagokoa da. Kontuz {$a->tag} etiketarekin';
$string['viewallreports'] = 'Ikusi {$a} saiakeren txostenak';
$string['viewalluserreports'] = 'Ikusi {$a} erabiltzaileen txostenak';
$string['whatgrade'] = 'Saiakeren kalifikazioa';
$string['whatgrade_help'] = 'Saiakera anizkoitzak onartzen badira, aukera honek zehazten du zein saiakeraren puntuazioa gordeko den kalifikazio liburuan: altuena, batez bestekoa, amaitutako lehen saiakera edo amaitutako azken saiakera. Amaitutako azken saiakeran ez da kontuan hartuko \'Gainditu gabe\' egoeran dauden saiakerak.

Saiakera anizkoitzei buruzko oharrak:

* Saiakera berria hasteko, eduki-egitura orriaren Sartu botoiaren gainean dagoen laukitxoan klik egin behar da, beraz, bermatu orri horretara sarbidea aukera anizkoitzak onartu nahi badituzu.
* SCORM pakete batzuk barne logika bat jarraitzen dute saiakera anizkoitzei dagokienez, gehienek ez dute ezer berezirik egiten arlo honetan. Beraz, ikaslea saiakera batean berriro sartzen bada, SCORM edukiak ez badu kasu hau modu berezi batean tratatzen, gerta liteke aurreko saiakeraren balioak berridaztea, nahiz eta saiakeraren egoera \'osatua\' edo \'gainditua\' izan.
* Aukera anizkoitzak kudeatzeko aukera osagarriak lortuko dituzu zehaztapen hauen bidez: \'Behartu osatzera\', \'Behartu saiakera berria\' eta \'Blokeatu azken saiakeraren ondoren\'.';
$string['whatgradedesc'] = 'Kalifikazio-liburuan notarik altuena, batez bestekoa, lehen saiakerarena edo azken saiakerarena gordeko den, saiakera anizkoitzak gaituz gero.';
$string['width'] = 'Zabalera';
$string['window'] = 'Leihoa';
$string['youmustselectastatus'] = 'Derrigortu beharreko egoera aukeratu behar duzu';
