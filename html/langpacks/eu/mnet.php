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
 * Strings for component 'mnet', language 'eu', version '3.11'.
 *
 * @package     mnet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['RPC_HTTPS_SELF_SIGNED'] = 'HTTPS (auto-sinatua)';
$string['RPC_HTTPS_VERIFIED'] = 'HTTPS (sinatua)';
$string['RPC_HTTP_PLAINTEXT'] = 'HTTP zifratu gabea';
$string['RPC_HTTP_SELF_SIGNED'] = 'HTTP (auto-sinatua)';
$string['RPC_HTTP_VERIFIED'] = 'HTTP (sinatua)';
$string['aboutyourhost'] = 'Zure zerbitzariari buruz';
$string['accesslevel'] = 'Sarbide-maila';
$string['addhost'] = 'Gehitu ostalaria';
$string['addnewhost'] = 'Gehitu ostalari berria';
$string['addtoacl'] = 'Gehitu sarbidea kontrolatzeko';
$string['allhosts'] = 'Ostalari guztiak';
$string['allhosts_no_options'] = 'Ez dago beste aukerarik eskuragarri ostalari bat baino gehiago dagoenean';
$string['allow'] = 'Baimendu';
$string['applicationtype'] = 'Aplikazio mota';
$string['authfail_nosessionexists'] = 'Autorizazioak huts egin du: mnet saioa ez da existitzen.';
$string['authfail_sessiontimedout'] = 'Autorizazioak huts egin du: mnet saioak denbora-muga gainditu du.';
$string['authfail_usermismatch'] = 'Autorizazioak huts egin du: erabiltzailea ez dator bat bietan.';
$string['authmnetdisabled'] = 'Moodle Sareko Autentifikazio-plugina <strong>desgaituta</strong>.';
$string['badcert'] = 'Ziurtagiri honek ez du balio.';
$string['certdetails'] = 'Ziurtagiriaren xehetasunak';
$string['configmnet'] = 'MNet-i esker zerbitzari hau beste zerbitzari edo zerbitzuekin komunika daiteke.';
$string['couldnotgetcert'] = 'Ez da ziurtagiria aurkitu hemen: <br />{$a}. <br /> Ostalaria erorita edo modu ez egokian konfiguratuta egon daiteke.';
$string['couldnotmatchcert'] = 'Hau ez dator bat web zerbitzariak une honetan argitaratutako ziurtagiriarekin.';
$string['courses'] = 'ikastaroak';
$string['courseson'] = 'Ikastaro aktiboak';
$string['current_transport'] = 'Oraingo garraioa';
$string['currentkey'] = 'Oraingo giltza publikoa';
$string['databaseerror'] = 'Ezin izan dira xehetasunak idatzi datu-basean';
$string['deleteaserver'] = 'Zerbitzaria ezabatzen';
$string['deletedhostinfo'] = 'Ostalaria ondo ezabatu da. Berreskuratu nahi baduzu, aldatu ezabatze-egoerae eta ipini \'Ez\'.';
$string['deletedhosts'] = 'Ezabatutako ostalariak: {$a}';
$string['deletehost'] = 'Ezabatu ostalaria';
$string['deletekeycheck'] = 'Ziur al zaude gako hau ezabatu nahi duzula?';
$string['deleteoutoftime'] = 'Giltza hau ezabatzeko 60 segundoko leihoa iraungi da. Mesedez, hasi berriz.';
$string['deleteuserrecord'] = 'SSO ACL: ezabatu \'{$a->user}\' erabiltzailearen erregistroa hemendik: {$a->host}.';
$string['deletewrongkeyvalue'] = 'Errorea gertatu da. Zure zerbitzariko SSL giltza ezabatzeko asmorik ez bazenuen, litekeena da eraso maltzurren bat egin nahi izatea. Ez da ekintzarik burutu.';
$string['deny'] = 'Ukatu';
$string['description'] = 'Deskribapena';
$string['duplicate_usernames'] = 'Zure erabiltzaile-taulako "mnethostid" eta "username" zutabeetan indize bat sortzeak huts egin du.<br />Hau <a href="{$a}" target="_blank">erabiltzaile-taulan bikoiztutako erabiltzaileak dituzunean</a> gerta daiteke.<br />Hala ere, zure eguneratzea ondo amai daiteke. Egin klik beheko estekan eta arazo hau konpontzeko argibideak leiho berri batean agertuko dira. Eguneratzea amaitu ondoren konpon dezakezu hori.<br />';
$string['enabled_for_all'] = '(Zerbitzu hau ostalari guztietarako gaitu da).';
$string['enterausername'] = 'Idatzi mesedez erabiltzaile-izena, edo komaz banatutako erabiltzaile-izenen zerrenda bat.';
$string['error7020'] = 'Errore hau gertatzen denean normalean urruneko guneak zuretzako erregistroa sortu du wwwroot okerrarekin, esaterako https://adibidea.eus https://www.adibidea.eus izan beharrean. Mesedez urruneko gunearen kudeatzailearekin harremanetan jarri zaitez zure wwwroot adierazita (config.php fitxategian zehaztuta dagoen moduan) zure ostalariko erregistroa eguneratzeko eskatuz.';
$string['error7022'] = 'Urruneko gunera bidali duzun mezua ondo zifratu da, baina ez da sinatu. Hau ezuste handia da; hau gertatzen bada arazoaren berri eman beharko zenuke (guri ahal bezain beste informazio emanda arazoak dituen aplikazioen bertsioei buruz...)';
$string['error7023'] = 'Urruneko guneak zure mezua zure guneak erregistroan duen gakoekin deszifratzen saiatu da. Denek huts egin dute. Arazo hau konpondu ahal izan beharko zenuke urruneko guneko gakoak eskuz eguneratuta. Hau nekez gertatuko da urruneko gunearekin hilabete batzuz konexiorik egon ez bada.';
$string['error7024'] = 'Urruneko gunera zifratu gabeko mezu bat bidali duzu, baina urruneko guneak ez du zure gunetik zifratu gabeko komunikaziorik onartzen. Hau ezuste handia da; hau gertatzen bada arazoaren berri eman beharko zenuke (arazoak dituen aplikazioen bertsioei buruzko ahal bezain beste informazio emanda...)';
$string['error7026'] = 'Zure mezua sinatzeko erabili zen gakoa ez da urruneko ostalariak zure zerbitzarirako duen gakoarekin bat etortzen. Horretaz gain, urruneko ostalaria zure oraingo gakoa eskuratzen saiatu da eta saiakerak huts egin du. Mesedez, urruneko ostalariaren gakoa eguneratu eta saiatu berriz.';
$string['error709'] = 'Urrutiko guneak ezin izan du SSL giltza lortu zuretzat.';
$string['eventaccesscontrolcreated'] = 'Sarbide-kontrola sortu da';
$string['eventaccesscontrolupdated'] = 'Sarbide-kontrola eguneratu da';
$string['expired'] = 'Gako hau ondoko datan iraungi zen:';
$string['expires'] = 'Noiz arte indarrean';
$string['expireyourkey'] = 'Ezabatu giltza hau';
$string['expireyourkeyexplain'] = 'Moodlek zure gakoak 28 egunean behin (modu lehenetsian) automatikoki biratzen ditu baina edozein unetan gako hau <em>eskuz</em> iraungi dezakezu. Hau soilik gakoa arriskuan egon bada izan daiteke erabilgarria. Ordezkoa automatikoki sortuko da.<br />Gakoa ezabatuta beste aplikazioek ez dute zurekin komunikatzeko aukera izango, zuk kudeatzaile bakoitzarekin eskuz harremanetan jarri eta zure gako berria helarazi ezean.';
$string['exportfields'] = 'Esportatzeko eremuak';
$string['failedaclwrite'] = 'MNet sarbide-kontrolaren zerrenda \'{$a}\' erabiltzailea idazteak huts egin du.';
$string['findlogin'] = 'Bilatu sarbidea';
$string['forbidden-function'] = 'Funtzio hori ez da RPCrako gaitu.';
$string['forbidden-transport'] = 'Erabiltzen saiatzen ari zaren garraio-modua ez dago baimenduta.';
$string['forcesavechanges'] = 'Behartu aldaketak gordetzera';
$string['helpnetworksettings'] = 'Konfiguratu Moodle Sarearen komunikazioa';
$string['hidelocal'] = 'Ezkutatu erabiltzaile lokalak';
$string['hideremote'] = 'Ezkutatu urrutiko erabiltzaileak';
$string['host'] = 'ostalaria';
$string['hostcoursenotfound'] = 'Ez dira ostalaria edo ikastaroa aurkitu';
$string['hostdeleted'] = 'Ostalaria ezabatuta';
$string['hostexists'] = 'Dagoeneko badago ostalari-izen hau duen ostalari baten erregistroa (agian ezabatu daiteke). <a href="{$a}">Egin klik hemen</a> erregistro hori ezabatzeko.';
$string['hostlist'] = 'Sarean dauden ostalarien zerrenda';
$string['hostname'] = 'Ostalariaren izena';
$string['hostnamehelp'] = 'Urrutiko ostalariaren domeinuaren izen osoa, adibidez, www.adibidea.com';
$string['hostnotconfiguredforsso'] = 'Zerbitzari hau ez dago konfiguratuta saioa urrutitik hasteko.';
$string['hostsettings'] = 'Ostalariaren ezarpenak';
$string['http_self_signed_help'] = 'Konexioak baimendu urrutiko ostalarian DIY SSL ziurtagiri auto-sinatua erabiliz.';
$string['http_verified_help'] = 'Konexioak baimendu PHPn SSL ziurtagiri egiaztatua erabiliz urrutiko ostalarian, http-ren gainean izan ezik (ez https).';
$string['https_self_signed_help'] = 'Baimendu norberak sinatutako DIY SSL konexioak PHP-n urruneko ostalarian http bidez.';
$string['https_verified_help'] = 'Baimendu konexioak urrutiko ostalarian SSL ziurtagiri egiaztatua erabiliz.';
$string['id'] = 'ID';
$string['idhelp'] = 'Balio hau automatikoki esleitzen da eta ezin da aldatu';
$string['importfields'] = 'Inportatzeko eremuak';
$string['inspect'] = 'Ikuskatu';
$string['installnosuchfunction'] = 'Kodearen errorea! Zerbait mnet xmlrpc ({$a->method}) funtzioa instalatzen saiatzen ari da fitxategi batetik  ({$a->file}) eta ezin da aurkitu!';
$string['installnosuchmethod'] = 'Kodearen errorea! Zerbait mnet xmlrpc ({$a->method}) metodoa instalatzen saiatzen ari da klase batean ({$a->class}) eta ezin da aurkitu!';
$string['installreflectionclasserror'] = 'Kodearen errorea! MNet introspection-ek huts egin du \'{$a->class}\' klaseko \'{$a->method}\' metodoarentzat. Jatorrizko errore-mezua, lagungarria bada, hurrengo hau da: \'{$a->error}\'';
$string['installreflectionfunctionerror'] = 'Kodearen errorea! MNet introspection-ek huts egin du \'{$a->file}\' fitxategiko \'{$a->method}\' funtzioarentzat. Jatorrizko errore-mezua, lagungarria bada, hurrengo hau da: \'{$a->error}\'';
$string['invalidaccessparam'] = 'Sarbide-parametroak ez du balio.';
$string['invalidactionparam'] = 'Ekintza-parametroak ez du balio.';
$string['invalidhost'] = 'Zure ostalari-identifikatzaileak baliagarria izan behar du';
$string['invalidpubkey'] = 'Giltza ez da SSL giltza baliagarria. ({$a})';
$string['invalidurl'] = 'URL parametroak ez du balio.';
$string['ipaddress'] = 'IP helbidea';
$string['is_in_range'] = '<code>{$a}</code> IP helbideak konfiantzazko ostalari baliozkoa erakusten du.';
$string['ispublished'] = '{$a}-k zerbitzu hau gaitu du zuretzat.';
$string['issubscribed'] = '{$a} zerbitzu honetara harpidetzen ari da zure ostalarian.';
$string['keydeleted'] = 'Zure giltza ondo ezabatu eta ordezkatu da.';
$string['keymismatch'] = 'Ostalari honentzat daukazun gako publikoa ez dator bat une honetan publibkoki erakusten ari denarekin. Une honetan publikatutako gakoa hurrengoa da:';
$string['last_connect_time'] = 'Azken konexioa';
$string['last_connect_time_help'] = 'Ostalari honetara konektatu zaren azken aldia.';
$string['last_transport_help'] = 'Ostalari honetara azkenengo aldian konektatzeko erabilitako garraioa.';
$string['leavedefault'] = 'Horren ordez ezarpen lehenetsiak erabili';
$string['listservices'] = 'Zerbitzuen zerrenda';
$string['loginlinkmnetuser'] = '<br />MNet-eko urrutiko erabiltzailea bazara eta <a href="{$a}">helbide elektronikoa hemen egiaztatu ahal baduzu</a>, sarbide-orrira joateko moduan izango zara.<br/>';
$string['logs'] = 'agerraldiak';
$string['managemnetpeers'] = 'Kudeatu kideak';
$string['method'] = 'Metodoa';
$string['methodhelp'] = '{$a}-rako metodoaren laguntza';
$string['methodsavailableonhost'] = 'Eskura dauden metodoak hemen: {$a}';
$string['methodsavailableonhostinservice'] = '{$a->service} -rako eskuragarri dauden metodoak {$a->host} ostalarian';
$string['methodsignature'] = '{$a}-(r)entzako metodo-sinadura';
$string['mnet'] = 'MNet';
$string['mnet_concatenate_strings'] = 'Kateatu 3 kate (gehienez) eta itzuli emaitza';
$string['mnet_session_prohibited'] = 'Zure jatorrizko zerbitzariko erabiltzaileei une honetan ez zaie {$a}(e)n ibiltzea baimentzen.';
$string['mnetdisabled'] = 'MNet  <strong>desgaituta</strong> dago.';
$string['mnetidprovider'] = 'Moodle  Sarearen ID hornitzailea';
$string['mnetidproviderdesc'] = 'Aukera hau erabil dezakezu saioa hasteko esteka bat eskuratzeko, aurretik saioa hasteko erabili duzun erabiltzailearen helbide elektronikoa eman ahal baduzu.';
$string['mnetidprovidermsg'] = 'Zure {$a} hornitzailean saio hasteko aukera izan beharko zenuke';
$string['mnetidprovidernotfound'] = 'Sentitzen dugu, ezin izan da informazio gehiago aurkitu.';
$string['mnetpeers'] = 'Kideak';
$string['mnetservices'] = 'Zerbitzuak';
$string['mnetsettings'] = 'MNet-eko ezarpenak';
$string['moodle_home_help'] = 'Urruneko ostalariko MNet aplikazioko hasiera-orrirako bidea, esaterako /moodle/.';
$string['name'] = 'Izena';
$string['net'] = 'Sarea';
$string['networksettings'] = 'Sarearen ezarpenak';
$string['never'] = 'Inoiz ez';
$string['noaclentries'] = 'Ez dago sarrerarik SSO sarbidearen kontrol-zerrendan';
$string['noaddressforhost'] = 'Sentitzen dugu, baina ({$a}) ostalariaren izena ezin izan da ebatzi.';
$string['nocurl'] = 'PHP cURL liburutegia ez dago instalatuta';
$string['nolocaluser'] = 'Ez da erregistro lokalik existitzen urrutiko erabiltzailearentzat, eta ezin izan da sortu ostalari honek ez duelako erabiltzaileen sorrera automatikoa baimentzen. Mesedez jarri harremanetan zure kudeatzailearekin!';
$string['nomodifyacl'] = 'Ez duzu MNet sarbiderako kontrol-zerrenda aldatzeko baimenik.';
$string['nonmatchingcert'] = 'Ziurtagiriaren subjektua: <br /><em>{$a->subject}</em><br /> ez dator bat datorren ostalariarekin:<br /><em>{$a->host}</em>.';
$string['nopubkey'] = 'Arazo bat egon da gako publikoa eskuratzean.<br />Baliteke ostalariak MNet ez onartzea edo gakoa baliogabea izatea.';
$string['nosite'] = 'Ezin izan da ikastarorik aurkitu gunearen mailan';
$string['nosuchfile'] = '{$a} fitxategia/funtzioa ez da existitzen.';
$string['nosuchfunction'] = 'Ezin izan da funtzioa aurkitu, edo funtzioa PRC-rako debekatuta dago.';
$string['nosuchmodule'] = 'Funtzioa ez da modu egokian kokatu edo ezin da aurkitu. Mesedez, erabili mod/modulename/lib/functionname formatua.';
$string['nosuchpublickey'] = 'Ezin izan da sinadura egiaztatzeko gako publikoa eskuratu.';
$string['nosuchservice'] = 'RPC zerbitzua ez dabil ostalari honetan.';
$string['nosuchtransport'] = 'Ez dago ID hori duen garraiorik.';
$string['notBASE64'] = 'Karaktere-kate hau ez dago base64 formatuan kodetuta. Ezin da baliozko gakoa izan.';
$string['notPEM'] = 'Giltza hau ez dago PEM formatuan. Ez du funtzionatuko.';
$string['not_in_range'] = '<code>{$a}</code> IP helbideak ez du konfiantzazko ostalari baliozkoa bat erakusten.';
$string['notenoughidpinfo'] = 'Zure identitate-hornitzailea ez da zure kontua lokalki sortzeko adina informazio ematen ari. Sentitzen dugu!';
$string['notinxmlrpcserver'] = 'MNet-eko urruneko klientea sartzeko saiakera, ez zerbitzariko XMLRPC exekuzioak iraun bitartean';
$string['notmoodleapplication'] = 'KONTUZ: hau ez da Moodle aplikazioa, eta horregatik metodo batzuk ez ibiltzea gerta daiteke.';
$string['notpermittedtojump'] = 'Ez duzu urrutiko saioa hasteko baimenik Moodle zerbitzari honetatik.';
$string['notpermittedtojumpas'] = 'Ezin duzu urruneko saio bat hasi beste erabiltzaile bat bezala sartuta zaudenean.';
$string['notpermittedtoland'] = 'Ez duzu urrutiko saioa hasteko baimenik.';
$string['off'] = 'Off';
$string['on'] = 'On';
$string['options'] = 'Aukerak';
$string['peerprofilefielddesc'] = 'Hemen erabiltzaile berriak bidali eta sortzeko erabiliko diren profil-eremuen ezarpen orokorrak baliogabe ditzakezu';
$string['permittedtransports'] = 'Baimendutako garraioak';
$string['phperror'] = 'PHP barruko errore batek zure eskaera ondo egitea saihestu du.';
$string['position'] = 'Kokalekua';
$string['postrequired'] = 'delete funtzioak POST eskaera bat behar du.';
$string['privacy:metadata'] = 'MNet pluginak ez du datu pertsonalik biltzen.';
$string['profileexportfields'] = 'Bidaltzeko eremuak';
$string['profilefielddesc'] = 'Hemen MNet bitartez erabiltzaile-kontu berriak sortzean edo eguneratzean bidaliko diren profil-eremuen zerrenda konfigura dezakezu. Hau MNet kide bakoitzarentzat ere baliogabe dezakezu. Kontuan izan eremu hauek beti bidaltzen direla eta ez direla aukerazkoak: {$a}';
$string['profilefields'] = 'Profil-eremuak';
$string['profileimportfields'] = 'Inportatzeko eremuak';
$string['promiscuous'] = 'Promiskuoa';
$string['publickey'] = 'Giltza publikoa';
$string['publickey_help'] = 'Giltza publikoa automatikoki lortzen da urrutiko zerbitzaritik.';
$string['publickeyrequired'] = 'Giltza publikoa eman behar duzu.';
$string['publish'] = 'Argitaratu';
$string['reallydeleteserver'] = 'Ziur zaude zerbitzari hau ezabatu nahi duzula?';
$string['receivedwarnings'] = 'Ondoko abisuak jaso dira';
$string['recordnoexists'] = 'Erregistroa ez da existitzen.';
$string['reenableserver'] = 'Ez - aukeratu hau zerbitzari hau berriz gaitzeko';
$string['registerallhosts'] = 'Erregistratu ostalari guztiak (modu nahasian)';
$string['registerallhostsexplain'] = 'Zure gunera konektatzen saiatzen diren ostalari guztiak erregistratzea aukera dezakezu. Honek esan nahi du edozein MNet gunek zurera konektatu eta gako publikoa eskatzen duenean erregistro bat agertuko dela zure ostalarien zerrendan.<br />Azpian badaukazu ere \'Ostalari guztiak\' aukeratuta zerbitzuak ostalari guztientzat konfiguratzeko aukera, eta horrela edozein urruneko zerbitzarirentzako zerbitzua eskainiko duzu.';
$string['registerhostsoff'] = 'Ostalari guztien erregistroa une honetan <b>itzalita</b> dago';
$string['registerhostson'] = 'Ostalari guztien erregistroa une honetan <b>piztuta</b> dago';
$string['remotecourses'] = 'Urrutiko ikastaroak';
$string['remotehost'] = 'Urrutiko ostalaria';
$string['remotehosts'] = 'Urrutiko ostalariak';
$string['remoteuser'] = 'Urrutiko {$a->remotetype} erabiltzailea';
$string['remoteuserinfo'] = 'Profila eskuratu da <a href="{$a->remoteurl}">{$a->remotename}</a>(e)tik';
$string['requiresopenssl'] = 'Sareak OpenSSL hedapena behar du';
$string['restore'] = 'Berreskuratu';
$string['returnvalue'] = 'Itzulera-balioa';
$string['reviewhostdetails'] = 'Berrikusi ostalariaren xehetasunak';
$string['reviewhostservices'] = 'Berrikusi ostalariaren zerbitzuak';
$string['selectaccesslevel'] = 'Mesedez, aukeratu sarbide-maila bat zerrnda honetatik';
$string['selectahost'] = 'Mesedez, aukera ezau urrutiko ostalari bat.';
$string['service'] = 'Zerbitzuaren izena';
$string['serviceid'] = 'Zerbitzuaren IDa';
$string['servicesavailableonhost'] = 'Eskura dauden zerbitzuak hemen: {$a}';
$string['serviceswepublish'] = '{$a}(e)ri publikatzen dizkiogun zerbitzuak.';
$string['serviceswesubscribeto'] = 'Harpidetuta gauden {$a}(e)ko zerbitzuak';
$string['settings'] = 'Ezarpenak';
$string['showlocal'] = 'Erakutsi erabiltzaile lokalak';
$string['showremote'] = 'Erakutsi urrutiko erabiltzaileak';
$string['ssl_acl_allow'] = 'SSO ACL: Baimendu \'{$a->user}\' erabiltzailea hemendik: \'{$a->host}\'';
$string['ssl_acl_deny'] = 'SSO ACL: Ukatu \'{$a->user}\' erabiltzailea hemendik: \'{$a->host}\'';
$string['sslverification'] = 'SSL egiaztapena';
$string['sslverification_help'] = 'Aukera honek kide batera HTTPS bidez konektatzean erabilitako segurtasun-maila konfiguratzeko aukera ematen du.

* Bat ere ez: segurtasun-mailarik ez
* Egiaztatu ostalaria: domeinuko SSL ziurtagiria egiaztatzen du
* Egiaztatu ostalaria eta kidea (gomendatua): domeinua eta SSL ziurtagiriaren jaulkitzailea egiaztatzen ditu';
$string['ssoaccesscontrol'] = 'SSO sarbide-kontrola';
$string['ssoacldescr'] = 'Erabili orri hau urruneko MNet ostalariko erabiltzaile konkretuei sarbidea eman edota ukatzeko. Hau erabilgarria da urruneko erabiltzaileei SSO zerbitzua eskaintzen ari zarenean. Zure erabiltzaile <em>lokalek</em> beste MNet ostalarietan ibiltzeko gaitasuna kontrolatzeko, erabili rol-sistema erabiltzaileei <em>mnetlogintoremote</em> gaitasuna emateko.';
$string['ssoaclneeds'] = 'Funtzionalitate hau martxan jartzeko, Sarea gaituta eta MNet autentifikazio-plugina gaituta egon behar dira.';
$string['strict'] = 'Zorrotza';
$string['subscribe'] = 'Harpidetu';
$string['system'] = 'Sistema';
$string['testclient'] = 'Moodle Sarerako proba-bezeroa';
$string['testtrustedhosts'] = 'Testatu helbide bat';
$string['testtrustedhostsexplain'] = 'Idatzi IP helbide bat konfiantzazko ostalaria den ziurtatzeko.';
$string['theypublish'] = 'Haiek argitaratu';
$string['theysubscribe'] = 'Haiek harpidetu';
$string['transport_help'] = 'Aukera hauek bi norabidetakoak dira, eta beraz, urruneko ostalari batek sinatutako SSL ziurtagiria erabiltzera behartu ahal izateko zure zerbitzariak ere sinatutako SSL ziurtagiria izan behar du.';
$string['trustedhosts'] = 'XML-RPC ostalariak';
$string['trustedhostsexplain'] = '<p>Konfiantzazko ostalarien mekanismoak makina konkretu batzuk XML-RPC bitartez Moodle API-ko edozein dei exekutatzeko aukera ematen du. Honek Moodleko jokaera script bidez kontrolatzea ahalbidetzen du eta gaitzeak arrisku handia suposa lezake. Zalantzak badituzu, desgaituta utzi.</p>
<p><strong>Hau ez da beharrezkoa ohiko MNet funtzioentzat!</strong> Soilik gaitu zer egiten ari zaren badakizu.</p>
<p>Aukera hau gaitzeko, sartu IP helbideen edo sareen zerrenda, bat errenkada bakoitzean. Adibide batzuk:</p>
Zure ostalari lokala:<br />127.0.0.1<br />Zure ostalari lokala (sareko blokearekin):<br />127.0.0.1/32<br />Soilik  192.168.0.7 IP helbidea duen ostalaria:<br />192.168.0.7/32<br />192.168.0.1 eta 192.168.0.255 IP helbideen arteko edozein ostalari:<br />192.168.0.0/24<br />Edozein ostalari:<br />192.168.0.0/0<br />Jakina, azken adibidea <strong>ez</strong> da gomendatutako konfigurazio bat.';
$string['turnitoff'] = 'Itzali';
$string['turniton'] = 'Piztu';
$string['type'] = 'Mota';
$string['unknown'] = 'Ezezaguna';
$string['unknownerror'] = 'Errore ezezaguna gertatu da negoziazioan zehar.';
$string['usercannotchangepassword'] = 'Ezin duzu pasahitza hemen aldatu urrutiko erabiltzailea baitzara.';
$string['userchangepasswordlink'] = '<br /> Zure pasahitza aldatu ahalko duzu zure<a href="{$a->wwwroot}/login/change_password.php">{$a->description}</a> hornitzailean.';
$string['usernotfullysetup'] = 'Zure erabiltzaile-kontua osatu gabe dago. <a href="{$a}">Zure hornitzailera itzuli</a> behar duzu eta bertan zure profila osatuta dagoela ziurtatu. Baliteke saioa itxi eta berriz sartu behar izatea aldaketak aplika daitezen.';
$string['usersareonline'] = 'Abisua: zerbitzari honetako {$a} erabiltzaile une honetan zure gunean daude.';
$string['validated_by'] = 'Sareak balioztatua dago: <code>{$a}</code>';
$string['verifyhostandpeer'] = 'Egiaztatu ostalaria eta kidea';
$string['verifyhostonly'] = 'Egiaztatu ostalaria soilik';
$string['verifysignature-error'] = 'Sinadura egiaztatzeak huts egin du. Errorea gertatu da.';
$string['verifysignature-invalid'] = 'Sinadura egiaztatzeak huts egin du. Badirudi ez duzula zeuk sinatu.';
$string['version'] = 'Bertsioa';
$string['warning'] = 'Kontuz!';
$string['wrong-ip'] = 'Zure IP helbidea ez dator bat erregistratuta dugunarekin.';
$string['xmlrpc-missing'] = 'Zure PHP bertsioan XML-RPC instalatuta izan behar duzu funtzio hau erabili ahal izateko.';
$string['yourhost'] = 'Zure ostalaria';
$string['yourpeers'] = 'Zure kideak';
