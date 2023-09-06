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
 * Strings for component 'tool_mobile', language 'eu', version '4.1'.
 *
 * @package     tool_mobile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adodbdebugwarning'] = 'ADOdb arazketa gaituta dago. Desgaituta egon behar du kanpoko datu-base bidezko autentifikazio-pluginaren edo kanpoko datu-base bidezko matrikulazio-pluginaren ezarpenetan.';
$string['androidappid'] = 'Android aplikazioaren identifikatzaile bakarra';
$string['androidappid_desc'] = 'Ezarpen hau lehenetsitako balioarekin utz daiteke Android app pertsonalizatu bat izan ezean.';
$string['apppolicy'] = 'Aplikazioaren politikaren URLa';
$string['apppolicy_help'] = 'Aplikazioaren erabiltzaileentzako politikaren URLa aplikazioaren Honi buruz orrian zerrendatzen dena. Eremua hutsik badago, horren ordez gunearen politikaren URLa erabiliko da.';
$string['apprequired'] = 'Funtzionalitate hau eskuragarria izango da Moodle mobile edo mahaigaineko aplikazioaren bidez soilik.';
$string['autologinkeygenerationlockout'] = 'Saio-hasiera automatikorako gakoak sortzea blokeatuta dago. Eskaeren artean {$a} minutu itxaron behar dituzu.';
$string['autologinmintimebetweenreq'] = 'Gutxieneko denbora saio-hasiera automatikorako eskaeren artean';
$string['autologinmintimebetweenreq_desc'] = 'Aplikazioaren bitartez egindako saio-hasiera automatikorako eskaeren arteko gutxieneko denbora. Aplikazioko erabiltzaileei guneko eduki enbotatua ikustean euren kredentzialak sartzeko maiz eskatzen bazaie, hemen balio txikiago bat ezarri ezazu.';
$string['autologinnotallowedtoadmins'] = 'Saio-hasiera automatikoa ez dago guneko kudeatzaileentzat baimenduta.';
$string['cachedef_plugininfo'] = 'Honek mobile-gehigarriak dituzten pluginak biltzen ditu';
$string['cachedef_subscriptiondata'] = 'Hemen Moodle aplikazioaren harpidetzaren inguruko informazioa gordetzen da.';
$string['clickheretolaunchtheapp'] = 'Egin klik hemen aplikazioak ez badu automatikoki zabaltzen.';
$string['configmobilecssurl'] = 'CSS fitxategia app mugikorraren interfazea pertsonalizatzeko.';
$string['customlangstrings'] = 'Pertsonalizatu hizkuntza-kateak';
$string['customlangstrings_desc'] = 'Hemen aplikazioan erakusten diren hitz eta esaldiak pertsonalizatu daitezke. Idatzi hemen pertsonalizatutako hizkuntza-kate bat errenkada bakoitzean hurrengo formatuarekin: kate-identifikatzailea, pertsonalizatutako hizkuntza-katea eta hizkuntza-kodea, marra bertikal batez banatuak. Adibidez:
<pre>
mm.user.student|Learner|en
mm.user.student|Ikaslea|eu
</pre>
Kate-identifikatzaileen zerrenda osoa lortzeko, ikusi dokumentazioa.';
$string['custommenuitems'] = 'Pertsonalizatu menuaren elementuak';
$string['custommenuitems_desc'] = 'Hemen aplikazioaren menu nagusian elementu gehigarriak gehitu daitezke. Idatzi hemen menu-elementu pertsonalizatu bat errenkada bakoitzean hurrengo formatuarekin: elementuaren testua, URLa, esteka irekitzeko modua eta hizkuntza-kodea (hautazkoa, elementua hizkuntza zehatz batean soilik erakusteko), marra bertikalez banatuak.

Estekak irekitzeko moduak hurrengoak dira: app (aplikazioak onartzen duen jarduera bat estekatzeko), inappbrowser (esteka nabigatzailean irekitzeko aplikaziotik irten gabe), browser (esteka gailuaren lehenetsitako nabigatzailean aplikaziotik kanpo irekitzeko) eta embedded (esteka aplikazioaren orri berri baten barruko iframe batean erakusteko).

Elementuren batean hizkuntza bateko itzulpena falta bada horren ordez beste hizkuntzak erabiliko dira hizkuntza-kode horri "_only" gehitzen ez bazaio.

Adibidez:
<pre>
Aplikazioaren laguntza|https://adibidea.eus/laguntza|inappbrowser
My grades|https://adibidea.eus/laguntza/local/mygrades/index.php|embedded|en
Nire kalifikazioak|https://adibidea.eus/laguntza/local/mygrades/index.php|embedded|eu
Hau soilik euskaraz nabigatzean ikusiko da|https://adibidea.eus/euskara|browser|eu_only
</pre>';
$string['darkmode'] = 'Itxura iluna';
$string['disabledfeatures'] = 'Desgaitutako ezaugarriak';
$string['disabledfeatures_desc'] = 'Aukeratu hemen zure guneko Mobile aplikazioan desgaitu nahi dituzun ezaugarriak. Mesedez kontuan izan hemen zerredatutako ezaugarrietako batzuk guneko beste ezarpen batzuen bitartez dagoeneko desgaituta egon daitezkeela. Aldaketak ikusteko aplikaziotik irten eta berriz sartu beharko zara.';
$string['displayerrorswarning'] = 'Erakutsi arazketa-mezuak (debugdisplay) gaituta dago. Desgaituta egon beharko litzateke.';
$string['downloadcourse'] = 'Jaitsi ikastaroa';
$string['downloadcourses'] = 'Jaitsi ikastaroak';
$string['enablesmartappbanners'] = 'Gaitu Aplikazioaren Iragarkiak';
$string['enablesmartappbanners_desc'] = 'Gaituz gero, mobile aplikazioa iragartzen duen banner bat erakutsiko da gunean gailu mugikorretako nabigatzailea erabiliz sartuz gero.';
$string['filetypeexclusionlist'] = 'Fitxategi-moten baztertze-zerrenda';
$string['filetypeexclusionlist_desc'] = 'Aukeratu itzazu erabiltzaileek aplikaziotik irekitzea nahi ez dugun fitxategi-mota guztiak. Fitxategi hauek aplikazioko ikastaroko zerrendan agertuko dira oraindik ere, baina irekitzen saiatzean erabiltzaileari ohar bat erakutsiko zaio fitxategi-mota hori gailu mugikor batean erabiltzekoa ez dela adieraziz. Erabiltzaileak irekitzea bertan behera utzi edo mezua baztertu eta hala ere fitxategia ireki dezake.';
$string['filetypeexclusionlistplaceholder'] = 'Mobile-erako fitxategi-moten baztertze-zerrenda';
$string['forcedurlscheme'] = 'Zure pertsonalizatutako aplikazioa nabigatzaile leiho batean baino ez irekitzea baimendu nahi baduzu, zehaztu hemen bere URL eskema. App ofiziala baino ez baimendu nahi baduzu, berezko balioa ezarri ezazu.  Hutsik utzi ezazu edozein app baimendu nahi baduzu.';
$string['forcedurlscheme_key'] = 'URL eskema';
$string['forcelogout'] = 'Behartu irtetera';
$string['forcelogout_desc'] = 'Gaituz gero, kontuak aldatzerakoan erabiltzaileen saioak beti itxiko dira. Gunera sartzen diren hurrengo aldian euren pasahitza berriz sartu beharko dute.';
$string['getmoodleonyourmobile'] = 'Eskuratu aplikazio mugikorra';
$string['h5poffline'] = 'Ikusi H5P edukia lineaz kanpo';
$string['httpsrequired'] = 'HTTPS beharrezkoa da';
$string['insecurealgorithmwarning'] = 'Badirudi HTTPS ziurtagiriak zifratze-algoritmo ez segurua erabiltzen ari dela sinaduretarako (SHA-1). Mesedez saiatu ziurtagiria eguneratzen.';
$string['invalidcertificatechainwarning'] = 'Badirudi ziurtagiri-katea baliogabea dela. Baliteke ziurtagiri honek web-nabigatzaile batean funtzionatzea baina ez aplikazio mugikor batean.';
$string['invalidcertificateexpiredatewarning'] = 'Badirudi guneko HTTPS ziurtagiria iraungita dagoela.';
$string['invalidcertificatestartdatewarning'] = 'Badirudi guneko HTTPS ziurtagiria ez dela oraindik baliozkoa (etorkizuneko hasiera-data dauka).';
$string['invalidprivatetoken'] = 'Token pribatu baliogabea. Tokena ez da hutsik egon edo GET parametro bidez bidali.';
$string['invaliduserquotawarning'] = 'Erabiltzailearen kuota (userquota) zenbaki baliogabea du ezarrita. Baliozko zenbaki bat zehaztu behar da (balio oso bat) Gunearen segurtasun-ezarpenetan.';
$string['iosappid'] = 'iOS aplikazioaren identifikatzaile bakarra';
$string['iosappid_desc'] = 'Ezarpen hau lehenetsitako balioarekin utzi daiteke iOS app pertsonalizatu bat izan ezean.';
$string['launchviasiteinbrowser'] = 'Abiarazi gunearen bitartez sistemako nabigatzailean';
$string['loginintheapp'] = 'Aplikazioaren bidez';
$string['logininthebrowser'] = 'Nabigatzaile-leihoaren bidez (SSO pluginentzat)';
$string['loginintheembeddedbrowser'] = 'Enbotatutako nabigatzailearen bidez (SSO pluginentzat)';
$string['logoutconfirmation'] = 'Ziur zaude zure gailu mugikorretako aplikazioetan saioa itxi nahi duzula? Saioa ixten baduzu, gunean berriz sartzeko aplikazioa instalatuta duzun gailu mugikor guztietan zure erabiltzaile-izena eta pasahitza berriz sartu beharko dituzu.';
$string['mainmenu'] = 'Menu nagusia';
$string['managefiletypes'] = 'Kudeatu fitxategi-motak';
$string['minimumversion'] = 'Aplikazioaren bertsioa zehazten bada (3.8.0 edo altuagoa), aplikazioaren bertsio zaharragoak erabiltzen dituzten erabiltzaile guztiei euren aplikazioa eguneratzea eskatuko zaie gunera sarbidea eman aurretik.';
$string['minimumversion_key'] = 'Aplikazioaren gutxieneko bertsioa behar da';
$string['mobileapp'] = 'Mobile aplikazioa';
$string['mobileappconnected'] = 'Mobile aplikazioa konektatu da';
$string['mobileappearance'] = 'Mobile itxura';
$string['mobileappenabled'] = 'Gune honek mobile app bidezko sarbidea gaituta dauka<br /><a href="{$a}">Jaitsi mobile aplikazioa</a>.';
$string['mobileappsubscription'] = 'Moodle aplikazioaren harpidetza';
$string['mobileauthentication'] = 'Mobile autentifikazioa';
$string['mobilecssurl'] = 'CSS';
$string['mobilefeatures'] = 'Mobile ezaugarriak';
$string['mobilenotificationsdisabledwarning'] = 'Mobile jakinarazpenak ez daude gaituta. Jakinarazpenen ezarpenak atalean gaitu beharko lirateke.';
$string['mobilesettings'] = 'Mobile ezarpenak';
$string['moodleappsportalfeatureswarning'] = 'Kontuan izan ezaugarri batzuk zure Moodle aplikazioaren harpidetzaren arabera murriztu daitezkela. Xehetasunerako, joan <a href="{$a}" target="_blank">Moodle Aplikazioen Atarira</a>.';
$string['notifications'] = 'Jakinarazpenak';
$string['notificationsactivedevices'] = 'Gailu aktiboak';
$string['notificationscurrentactivedevices'] = 'Hilabete honetan jakinarazpenak jaso dituzten gailuak';
$string['notificationsignorednotifications'] = 'Bidali gabeko jakinarazpenak';
$string['notificationslimitreached'] = 'Hilabeteko erabiltzaile-gailu aktiboen muga gainditu da. Erabiltzaile batzuei ez zaizkie jakinarazpenak bidaliko. Horrelakorik ez gertatzeko <a href="{$a}" target="_blank">Moodle Aplikazioen Atarian</a> zure aplikazioaren harpidetza-plana eguneratu beharko zenuke.';
$string['notificationsmissingwarning'] = 'Ezin izan dira Moodle aplikazioaren estatistikak eskuratu. Honen arrazoia gunean gailu mugikorren jakinarazpenak oraindik gaitu gabe egotea izango da ziur aski. Aukera hori gaitu dezakezu Gunearen Kudeaketa / Mezularitza / Mugikorra atalean.';
$string['notificationsnewdevices'] = 'Gailu berriak';
$string['notificationsseemore'] = 'Oharra: Moodle aplikazioaren erabilera-estatistikak ez dira denbora errealean kalkulatzen. Estatistika zehatzagoak ikusteko, aurreko hilabeteetako datuak barne, sartu zaitez mesedez <a href="{$a}" target="_blank">Moodle Aplikazioen Atarian</a>.';
$string['notificationssentnotifications'] = 'Bidalitako jakinarazpenak';
$string['oauth2identityproviders'] = 'OAuth2 identitate-hornitzaileak';
$string['offlineuse'] = 'Lineaz kanpoko erabilera';
$string['openusingembeddedbrowser'] = 'Ireki enbotatutako nabigatzailea erabilita';
$string['pluginname'] = 'Moodle aplikaziorako tresnak';
$string['pluginnotenabledorconfigured'] = 'Plugina ez dago gaituta edo konfiguratuta.';
$string['privacy:metadata:core_userkey'] = 'Oraingo erabiltzailearen saio-hasiera automatikoa sortzeko erabilitako erabiltzaile-gakoak.';
$string['privacy:metadata:preference:tool_mobile_autologin_request_last'] = 'Azken saio-hasiera automatikoko eskaeraren data. Eskaeren artean beharrezkoa da 6 minutu igarotzea.';
$string['qrcodedisabled'] = 'QR kodearen bidezko sarbidea desgaituta';
$string['qrcodeformobileappaccess'] = 'QR kodea mobile aplikazio bidezko sarbiderako';
$string['qrcodeformobileapploginabout'] = 'Eskaneatu QR kodea zure mobile aplikazioarekin eta automatikoki sartuko zara. QR kodearen iraungitze-epea {$a} da.';
$string['qrcodeformobileappurlabout'] = 'Eskaneatu QR kodea zure mobile aplikazioan gunearen URLa betetzeko.';
$string['qrcodetype'] = 'QR kode bidezko sarbidea';
$string['qrcodetype_desc'] = 'QR kode bat eskaini daiteke mobile aplikazioko erabiltzaileek eskaneatzeko. Aukera hau gunearen URLa betetzeko edo, guneak HTTPS nabigazio segurua erabiltzen badu, saioa erabiltzaile-izena eta pasahitza idatzi behar izan gabe automatikoki hasteko erabili daiteke.';
$string['qrcodetypelogin'] = 'QR kodea saio-hasiera automatikorako';
$string['qrcodetypeurl'] = 'QR kodea gunearen URLarekin';
$string['qrkeyttl'] = 'QR autentifikazio-gakoaren iraupena';
$string['qrkeyttl_desc'] = 'Saio-hasiera automatikorako QR kode bat baliozkoa izango den denbora-tartea.';
$string['qrsameipcheck'] = 'QR eta autentifikazioaren IP beraren egiaztatzea';
$string['qrsameipcheck_desc'] = 'Erabiltzaileari saioa hasteko QR kodea sortu eta egiaztatzeko sare bera erabiltzera behartuko zaion ala ez. Soilik desgaitu ezazu erabiltzaileek QR bidezko saio hasierarekin arazoak izatekotan.';
$string['qrsiteadminsnotallowed'] = 'Segurtasun arrazoiengatik guneko kudeatzaileei edo beste erabiltzaile bat bezala sartuta daudenei ez zaie QR kode bidezko saio-hasiera baimentzen.';
$string['readingthisemailgettheapp'] = 'Mezu hau zure posta elektronikoan irakurtzen ari zara? <a href="{$a}">Mugikorrentzako aplikazioa jaitsi ezazu eta jakinarazpenak zure gailu mugikorrean jasoko dituzu</a>.';
$string['remoteaddons'] = 'Urruneko gehigarriak';
$string['responsivemainmenuitems'] = 'Menu-elementu moldagarriak';
$string['scanqrcode'] = 'Eskaneatu QR kodea';
$string['selfsignedoruntrustedcertificatewarning'] = 'Badirudi HTTPS ziurtagiria autosinatua edo ez da konfiantzazkoa. Mobile aplikazioak soilik konfiantzazko guneetan funtzionatzen du. Erabili ezazu mesedez SSL egiaztapenerako online tresnaren bat arazoaren diagnostikoa egiteko. Horrelako tresnek zure ziurtagiria ondo dagoela adierazten badute, ohar honi ezikusiarena egin ahal diozu.';
$string['setuplink'] = 'Aplikazioa deskargatzeko orria';
$string['setuplink_desc'] = 'App Store eta Google Play-tik Mobile aplikazioa jaisteko aukera ematen duen orriaren URLa. Aplikazioa jaisteko orriaren esteka orri-oinean eta erabiltzaile-profilean erakusten da. Hutsik utzi ezazu estekarik ez erakusteko.';
$string['smartappbanners'] = 'Aplikazioaren Iragarkiak';
$string['subscription'] = 'Harpidetza';
$string['subscriptioncreated'] = 'Hasiera-data';
$string['subscriptionerrorrequest'] = 'Ezusteko errorea gertatu da Moodle aplikazioaren harpidetzaren inguruko informazioa eskuratzen saiatzean.';
$string['subscriptionexpiration'] = 'Iraungitze-data';
$string['subscriptionfeaturenotapplied'] = 'Ezaugarri hau zure gunean konfiguratuta dago baina ez dago zure Moodle aplikazioaren harpidetza-planaren barruan. Ondorioz, ezarpen honek ez du eraginik izango.';
$string['subscriptionfeatures'] = 'Harpidetzaren ezaugarriak';
$string['subscriptionlimitsurpassed'] = 'Harpidetzaren muga gainditu da';
$string['subscriptionregister'] = 'Aplikazioen harpidetza-planen inguruko xehetasunak ezagutzeko, eta Moodle aplikazioaren erabilera-estatistikak ikusteko, sartu zaitez mesedez <a href="{$a}" target="_blank">Moodle Aplikazioen Atarian</a>.';
$string['subscriptionsseemore'] = 'Oharra: informazioa ez da denbora errealean eguneratzen. Baliteke informazio eguneratua ikusteko saioa amaitu eta berriz sartu behar izatea. Zure aplikazioaren harpidetza-plana eguneratzeko informazioa ikusteko sartu zaitez mesedez <a href="{$a}" target="_blank">Moodle Aplikazioen Atarian</a>.';
$string['switchaccount'] = 'Aldatu kontua';
$string['typeoflogin'] = 'Sarrera mota';
$string['typeoflogin_desc'] = 'Guneak SSO autentifikazio-metodo bat erabiliz gero, aukeratu nabigatzaile-leiho edo enbotatutako nabigatzaile bidezko modua. Enbotatutako nabigatzaileak erabiltzaile-esperientzia hobea ematen du, baina ez ditu SSO plugin guztiak onartzen.';
$string['viewqrcode'] = 'Ikusi QR kodea';
