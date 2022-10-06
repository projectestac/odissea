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
 * Strings for component 'tool_mobile', language 'eu', version '3.8'.
 *
 * @package     tool_mobile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adodbdebugwarning'] = 'ADOdb arazketa gaituta dago. Desgaituta egon behar du kanpoko datu-base bidezko autentifikazio-pluginaren edo kanpoko datu-base bidezko matrikulazio-pluginaren ezarpenetan.';
$string['androidappid'] = 'Android app-aren identifikatzaile bakarra';
$string['androidappid_desc'] = 'Ezarpen hau lehenetsitako balioarekin utz daiteke Android app pertsonalizatu bat izan ezean.';
$string['apppolicy'] = 'Aplikazioaren politikaren URLa';
$string['apppolicy_help'] = 'Aplikazioaren erabiltzaileentzako politikaren URLa aplikazioaren Honi buruz orrian zerrendatzen dena. Eremua hutsik badago, horren ordez gunearen politikaren URLa erabiliko da.';
$string['apprequired'] = 'Funtzionalitate hau eskuragarria izango da Moodle mobile edo mahaigaineko aplikazioaren bidez soilik.';
$string['autologinkeygenerationlockout'] = 'Saio-hasiera automatikorako gakoak sortzea blokeatuta dago. Eskaeren artean 6 minutu itxaron behar dituzu.';
$string['autologinnotallowedtoadmins'] = 'Saio-hasiera automatikoa ez dago guneko kudeatzaileentzat baimenduta.';
$string['cachedef_plugininfo'] = 'Honek mobile-gehigarriak dituzten pluginak biltzen ditu';
$string['clickheretolaunchtheapp'] = 'Egin klik hemen app-ak ez badu automatikoki zabaltzen.';
$string['configmobilecssurl'] = 'CSS fitxategia app mugikorraren interfazea pertsonalizatzeko.';
$string['customlangstrings'] = 'Pertsonalizatu hizkuntza-kateak';
$string['customlangstrings_desc'] = 'Hemen app-an erakusten diren hitz eta esaldiak pertsonalizatu daitezke. Idatzi hemen pertsonalizatutako hizkuntza-kate bat errenkada bakoitzean hurrengo formatuarekin: kate-identifikatzailea, pertsonalizatutako hizkuntza-katea eta hizkuntza-kodea, marra bertikal batez banatuak. Adibidez:
<pre>
mm.user.student|Learner|en
mm.user.student|Ikaslea|eu
</pre>
Kate-identifikatzaileen zerrenda osoa lortzeko, ikusi dokumentazioa.';
$string['custommenuitems'] = 'Pertsonalizatu menuaren elementuak';
$string['custommenuitems_desc'] = 'Hemen app-aren menu nagusian elementu gehigarriak gehitu daitezke. Idatzi hemen menu-elementu pertsonalizatu bat errenkada bakoitzean hurrengo formatuarekin: elementuaren testua, URLa, esteka irekitzeko modua eta hizkuntza-kodea (aukerazkoa, elementua hizkuntza zehatz batean soilik erakusteko), marra bertikal batez banatuak.

Estekak irekitzeko moduak hurrengoak dira: app (app-ak onartzen duen jarduera bat estekatzeko), inappbrowser (esteka nabigatzailean irekitzeko app-tik irten gabe), browser (esteka gailuaren lehenetsitako nabigatzailean app-tik kanpo irekitzeko) eta embedded (esteka app-aren orri berri baten barruko iframe batean erakusteko).

Adibidez:
<pre>
App laguntza|https://adibidea.eus/laguntza|inappbrowser
My grades|https://adibidea.eus/laguntza/local/mygrades/index.php|embedded|en
Nire kalifikazioak|https://adibidea.eus/laguntza/local/mygrades/index.php|embedded|eu
</pre>';
$string['darkmode'] = 'Itxura iluna';
$string['disabledfeatures'] = 'Desgaitutako ezaugarriak';
$string['disabledfeatures_desc'] = 'Aukeratu hemen zure guneko Mobile app-an desgaitu nahi dituzun ezaugarriak. Mesedez kontuan izan hemen zerredatutako ezaugarrietako batzuk guneko beste ezarpen batzuen bitartez dagoeneko desgaituta egon daitezkela. Aldaketak ikusteko app-tik irten eta berriz sartu beharko zara.';
$string['displayerrorswarning'] = 'Erakutsi arazketa-mezuak (debugdisplay) gaituta dago. Desgaituta egon beharko litzateke.';
$string['downloadcourse'] = 'Jaitsi ikastaroa';
$string['downloadcourses'] = 'Jaitsi ikastaroak';
$string['enablesmartappbanners'] = 'Gaitu App Banner-ak';
$string['enablesmartappbanners_desc'] = 'Gaituz gero, mobile app-a iragartzen duen banner bat erakutsiko da gunean gailu mugikorretako nabigatzailea erabiliz sartuz gero.';
$string['forcedurlscheme'] = 'Zure pertsonalizatutako aplikazioa nabigatzaile leiho batean baino ez irekitzea baimendu nahi baduzu, zehaztu hemen bere URL eskema. App ofiziala baino ez baimendu nahi baduzu, berezko balioa ezarri ezazu.  Hutsik utzi ezazu edozein app baimendu nahi baduzu.';
$string['forcedurlscheme_key'] = 'URL eskema';
$string['forcelogout'] = 'Behartu irtetera';
$string['forcelogout_desc'] = 'Gaituz gero, app-ko \'Aldatu gunea\' aukera \'Irten\' aukerarekin ordezkatuko da. Honen ondorioz erabiltzailea guztiz ateratzen da. Hurrengo aldian gunean sartzeko euren pasahitza sartu beharko du.';
$string['getmoodleonyourmobile'] = 'Eskuratu aplikazio mugikorra';
$string['h5poffline'] = 'Ikusi H5P edukia lineaz kanpo';
$string['httpsrequired'] = 'HTTPS beharrezkoa da';
$string['insecurealgorithmwarning'] = 'Badirudi HTTPS ziurtagiriak zifratze-algoritmo ez segurua erabiltzen ari dela sinaduretarako (SHA-1). Mesedez saiatu ziurtagiria eguneratzen.';
$string['invalidcertificatechainwarning'] = 'Badirudi ziurtagiri-katea baliogabea dela.';
$string['invalidcertificateexpiredatewarning'] = 'Badirudi guneko HTTPS ziurtagiria iraungitua dagoela.';
$string['invalidcertificatestartdatewarning'] = 'Badirudi guneko HTTPS ziurtagiria ez dela oraindik baliozkoa (etorkizuneko hasiera-data dauka).';
$string['invalidprivatetoken'] = 'Token pribatu baliogabea. Tokena ez da hutsik egon edo GET parametro bidez bidali.';
$string['invaliduserquotawarning'] = 'Erabiltzailearen kuota (userquota) zenbaki baliogabea du ezarrita. Baliozko zenbaki bat zehaztu behar da (balio oso bat) Gunearen segurtasun-ezarpenetan.';
$string['iosappid'] = 'iOS app-aren identifikatzaile bakarra';
$string['iosappid_desc'] = 'Ezarpen hau lehenetsitako balioarekin utzi daiteke iOS app pertsonalizatu bat izan ezean.';
$string['loginintheapp'] = 'Aplikazioaren bidez';
$string['logininthebrowser'] = 'Nabigatzaile-leihoaren bidez (SSO pluginentzat)';
$string['loginintheembeddedbrowser'] = 'Enbotatutako nabigatzailearen bidez (SSO pluginentzat)';
$string['mainmenu'] = 'Menu nagusia';
$string['minimumversion'] = 'Aplikazioaren bertsioa zehazten bada (3.8.0 edo altuagoa), aplikazioaren bertsio zaharragoak erabiltzen dituzten erabiltzaile guztiei euren aplikazioa eguneratzea eskatuko zaie gunera sarbidea eman aurretik.';
$string['minimumversion_key'] = 'Aplikazioaren gutxieneko bertsioa behar da';
$string['mobileapp'] = 'Mobile app-a';
$string['mobileappconnected'] = 'Mobile app-a konektatu da';
$string['mobileappearance'] = 'Mobile itxura';
$string['mobileappenabled'] = 'Gune honek mobile app bidezko sarbidea gaituta dauka<br /><a href="{$a}">Jaitsi mobile app-a</a>.';
$string['mobileauthentication'] = 'Mobile autentifikazioa';
$string['mobilecssurl'] = 'CSS';
$string['mobilefeatures'] = 'Mobile ezaugarriak';
$string['mobilenotificationsdisabledwarning'] = 'Mobile jakinarazpenak ez daude gaituta. Jakinarazpenen ezarpenak atalean gaitu beharko lirateke.';
$string['mobilesettings'] = 'Mobile ezarpenak';
$string['moodleappsportalfeatureswarning'] = 'Kontuan izan ezaugarri batzuk zure Moodle aplikazioaren harpidetzaren arabera murriztu daitezkela. Xehetasunerako, joan <a href="{$a}" target="_blank">Moodle Aplikazioen Atarira</a>.';
$string['oauth2identityproviders'] = 'OAuth2 identitate-hornitzaileak';
$string['offlineuse'] = 'Lineaz kanpoko erabilera';
$string['pluginname'] = 'Moodle aplikaziorako tresnak';
$string['pluginnotenabledorconfigured'] = 'Plugina ez dago gaituta edo konfiguratuta.';
$string['privacy:metadata:core_userkey'] = 'Oraingo erabiltzailearen saio-hasiera automatikoa sortzeko erabilitako erabiltzaile-gakoak.';
$string['privacy:metadata:preference:tool_mobile_autologin_request_last'] = 'Azken saio-hasiera automatikoko eskaeraren data. Eskaeren artean beharrezkoa da 6 minutu igarotzea.';
$string['readingthisemailgettheapp'] = 'Mezu hau zure posta elektronikoan irakurtzen ari zara? <a href="{$a}">Mugikorrentzako aplikazioa jaitsi ezazu eta jakinarazpenak zure gailu mugikorrean jasoko dituzu</a>.';
$string['remoteaddons'] = 'Urruneko gehigarriak';
$string['responsivemainmenuitems'] = 'Menu-elementu moldagarriak';
$string['selfsignedoruntrustedcertificatewarning'] = 'Badirudi HTTPS ziurtagiria autosinatua edo ez da konfiantzazkoa. Mobile app-ak soilik konfiantzazko guneetan funtzionatzen du.';
$string['setuplink'] = 'Aplikazioa deskargatzeko orria';
$string['setuplink_desc'] = 'App Store eta Google Play-tik Mobile aplikazioa jaisteko aukera ematen duen orriaren URLa. Aplikazioa jaisteko orriaren esteka orri-oinean eta erabiltzaile-profilean erakusten da. Hutsik utzi ezazu estekarik ez erakusteko.';
$string['smartappbanners'] = 'App Banner-ak';
$string['typeoflogin'] = 'Sarrera mota';
$string['typeoflogin_desc'] = 'Guneak SSO autentifikazio-metodo bat erabiliz gero, aukeratu nabigatzaile-leiho edo enbotatutako nabigatzaile bidezko modua. Enbotatutako nabigatzaileak erabiltzaile-esperientzia hobea ematen du, baina ez ditu SSO plugin guztiak onartzen.';
