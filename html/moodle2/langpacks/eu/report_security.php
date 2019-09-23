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
 * Strings for component 'report_security', language 'eu', branch 'MOODLE_36_STABLE'
 *
 * @package   report_security
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_configrw_details'] = '<p>Instalazioa burutu ondoren config.php fitxategiaren baimenak aldatzea gomendatzen da, fitxategia web-zerbitzaritik aldatzea ekiditeko.
Kontuan izan neurri honek ez duela zerbitzariaren segurtasuna modu nabarmenean hobetzen, baina exploit orokorrak mugatu edo mantsotu ditzake.</p>';
$string['check_configrw_name'] = 'config.php idatz daiteke';
$string['check_configrw_ok'] = 'PHP script-ek ezin dute config.php fitxategia aldatu.';
$string['check_configrw_warning'] = 'PHP script-ek config.php fitxategia alda dezakete.';
$string['check_cookiesecure_details'] = '<p>HTTPS komunikazioak gaituta badaude cookie seguruak ere gaitzea gomendatzen da. HTTPtik HTTPSra berbideraketa iraunkorra ere gehitu beharko zenuke, eta ahal dela HSTS goiburuak bidaltzea.</p>';
$string['check_cookiesecure_error'] = 'Mesedez, gaitu cookie seguruak';
$string['check_cookiesecure_name'] = 'Cookie seguruak';
$string['check_cookiesecure_ok'] = 'Cookie seguruak gaituta.';
$string['check_defaultuserrole_details'] = '<p>Saioa hasten duten erabiltzaile guztiei lehenetsitako erabiltzaile-rola esleitzen zaie. Mesedez ziurtatu rol honi ez zaizkiola arriskutsuak izan daitezkeen gaitasunak esleitzen.</p>
<p>Lehenetsitako erabiltzaile rolarentzat onartzen den modu zaharkitu bakarra <em>Autentifikatutako erabiltzailea</em> da. Ikastaroak ikusteko gaitasuna ez litzateke gaitu beharko.</p>';
$string['check_defaultuserrole_error'] = '"{$a}" izeneko lehenetsitako erabiltzaile-rola modu ezegokian definituta dago!';
$string['check_defaultuserrole_name'] = 'Lehenetsitako rola erabiltzaile guztientzat';
$string['check_defaultuserrole_notset'] = 'Lehenetsitako rola ez da ezarri.';
$string['check_defaultuserrole_ok'] = 'Erabiltzaile guztientzako lehenetsitako rolaren definizioa ONDO dago.';
$string['check_displayerrors_details'] = '<p>Ez da gomendatzen <code>display_errors</code> izeneko PHP ezarpena gaitzea lanean dauden guneetan errore-mezuek zerbitzariari buruzko informazioa garrantzitsua ezagutzera eman dezaketelako.</p>';
$string['check_displayerrors_error'] = 'Erroreak erakusteko PHP ezarpena gaituta dago. Desgaituta egotea gomendatzen da.';
$string['check_displayerrors_name'] = 'PHP erroreak erakustea';
$string['check_displayerrors_ok'] = 'PHP erroreak erakustea desgaituta.';
$string['check_emailchangeconfirmation_details'] = '<p>Erabiltzaile batek bere profileko e-posta helbidea aldatzen duenean e-posta helbidea baieztatzeko urratsa behartzea gomendatzen da. Desgaituz gero, spam-igorleek aukera hori baliatu dezakete zerbitzaria SPAMa bidaltzen saiatzeko.</p>
<p>Beste aukera bat e-posta helbidearen eremua autentifikazio-pluginetan blokeatzea da, baina aukera hori hemen ez da kontuan hartzen.</p>';
$string['check_emailchangeconfirmation_error'] = 'Erabiltzaileek edozein posta-helbide sar dezakete.';
$string['check_emailchangeconfirmation_info'] = 'Erabiltzaileek baimendutako domeinuetako posta-helbideak sar ditzakete.';
$string['check_emailchangeconfirmation_name'] = 'E-posta helbidearen aldaketaren baieztatzea';
$string['check_emailchangeconfirmation_ok'] = 'E-postaren helbidearen aldaketaren baieztatzea erabiltzaile-profilean';
$string['check_embed_details'] = '<p>Objektuak mugarik gabe enbotatzeko aukera oso arriskutsua da - erregistratutako edozein erabiltzailek XSS eraso bat burutu dezake. Ezarpen hau desgaitu beharko litzateke lanean dauden guneetan.</p>';
$string['check_embed_error'] = 'Objektuak mugarik gabe enbotatzeko aukera gaituta dago - hau oso arriskutsua izan daiteke zerbitzari gehienetan.';
$string['check_embed_name'] = 'Baimendu EMBED eta OBJECT';
$string['check_embed_ok'] = 'Objektuak mugarik gabe enbotatzea ez dago baimenduta.';
$string['check_frontpagerole_details'] = '<p>Hasiera-orriko lehenetsitako rola erregistratutako erabiltzaile guztiei hasiera-orriko jardueretan esleitzen zaie. Ziurtatu rol honi ez zaizkiola arriskutsuak izan daitezkeen gaitasunak esleitzen.</p>
<p>Helburu honetarako rol berezi bat sortzea eta zaharkitutako rol-mota ez erabiltzea gomendatzen da.</p>';
$string['check_frontpagerole_error'] = 'Modu ezegokian definitutako hasiera-orriko "{$a}" rola antzeman da!';
$string['check_frontpagerole_name'] = 'Hasiera-orriko rola';
$string['check_frontpagerole_notset'] = 'Hasiera-orriko rola ez da ezarri.';
$string['check_frontpagerole_ok'] = 'Hasiera-orriko rolaren definizioa ONDO dago.';
$string['check_google_details'] = '<p>Zabaldu Google-ri ezarpenak bilaketa-motorei ikastaroetan bisitari gisa sartzen uzten die. Honek ez du zentzurik bisitariek sarbidea baimenduta ez badute.</p>';
$string['check_google_error'] = 'Bilaketa-motoreen sarbidea baimenduta dago baina bisitarien sarbidea desgaituta dago.';
$string['check_google_info'] = 'Bilaketa-motoreak bisitari gisa sar daitezke';
$string['check_google_name'] = 'Zabaldu Google-ri';
$string['check_google_ok'] = 'Bilaketa-motoreen sarbidea ez dago gaituta.';
$string['check_guestrole_details'] = '<p>Bisitari-rola bisitariekin erabiltzen da, saio hasi gabeko erabiltzaileak eta behin-behineko ikastaroetako gonbidatu-sarbidea. Ziurtatu ezazu rol honi ez zaizkiola arriskutsuak izan daitezkeen gaitasunak esleitzen.</p>
<p></p>';
$string['check_guestrole_error'] = '"{$a}" bisitari-rola ez dago modu egokian definituta!';
$string['check_guestrole_name'] = 'Bisitari-rola';
$string['check_guestrole_notset'] = 'Bisitari-rola ez da ezarri.';
$string['check_guestrole_ok'] = 'Bisitari-rolaren definizioa ONDO dago.';
$string['check_mediafilterswf_details'] = '<p>swf enbotatze automatikoa oso arriskutsua da - erregistratutako edozein erabiltzailek XSS eraso bat burutu dezake. Ezarpen hau desgaitu beharko litzateke lanean dauden guneetan.</p>';
$string['check_mediafilterswf_error'] = 'Flash media iragazkia gaituta dago - hau oso arrikutsua izaten da zerbitzari gehienentzat';
$string['check_mediafilterswf_name'] = '.swf media iragazkia gaituta dago';
$string['check_mediafilterswf_ok'] = 'Flash media iragazkia ez dago gaituta.';
$string['check_noauth_details'] = '<p><em>Autentifikatu gabe</em> plugina ez dago diseinatuta lanean dauden guneetarako. Mesedez, desgaitu aukera hori garapenerako proba-zerbitzaria ez bada.</p>';
$string['check_noauth_error'] = '\'Autentifikatu gabe\' plugina ezin da erabili lanean dauden guneetan.';
$string['check_noauth_name'] = 'Autentifikatu gabe';
$string['check_noauth_ok'] = '\'Autentifikatu gabe\' plugina desgaituta dago.';
$string['check_nodemodules_details'] = '<p><em>{$a->path}</em> karpetak Node.js moduluak eta euren menpekotasunak ditu, normalean NPM bitartez instalatuta. Modulu hauek Moodle-ko garapen lokalerako beharrezkoak izan daitezke, esaterako grunt framework-a erabiltzeko. Ez dira behar lanean dagoen Moodle gune batean, eta potentzialki urruneko erasotzaileei kodea erakusteko arriskua dago.</p>
<p>Karpeta hori ezabatzea irmoki gomendatzen da gunea URL publiko baten bitartez eskuragarri badago, edo gutxienez zure web-zerbitzariaren konfigurazioan bertara web bidezko sarbidea ukatzea.</p>';
$string['check_nodemodules_info'] = 'node_modules karpetak ez luke gune publikoetan egon behar.';
$string['check_nodemodules_name'] = 'Node.js moduluen karpeta';
$string['check_openprofiles_details'] = 'Spam-bidaltzaileek erabiltzaile-profil irekiak baliatu ditzakete. Gomendatzen da <code>Behartu erabiltzaileak identifikatzera profilak ikusi ahal izateko</code> edo <code>Behartu erabiltzaileak identifikatzera</code> gaituta egotea.';
$string['check_openprofiles_error'] = 'Edozeinek erabiltzaileen profilak ikus ditzake saioa hasi gabe ere.';
$string['check_openprofiles_name'] = 'Erabiltzaile-profil irekiak';
$string['check_openprofiles_ok'] = 'Erabiltzaileen profilak ikusi ahal izateko, beharrezkoa da saioa hastea.';
$string['check_passwordpolicy_details'] = '<p>Pasahitzen politika bat zehaztea gomendatzen da, pasahitzak igartzea delako baimendu gabeko sarbidea lortzeko modurik errazena.
Hala ere, ez zehaztu baldintza zorrotzegiak, horrek erabiltzaileek pasahitza ez gogoratzea edo pasahitzak nonbaiten idaztea eragin dezakeelako.</p>';
$string['check_passwordpolicy_error'] = 'Pasahitzen politika ez da ezarri.';
$string['check_passwordpolicy_name'] = 'Pasahitzen politika';
$string['check_passwordpolicy_ok'] = 'Pasahitzen politika gaituta dago.';
$string['check_preventexecpath_details'] = '<p>Exekutagarrietarako bideak kudeatzailearen interfaz grafikoaren bidez zehaztea baimentzea baimenetan gora egiteko bektore bat da.</p>';
$string['check_preventexecpath_name'] = 'Exekutagarrietarako bideak';
$string['check_preventexecpath_ok'] = 'Exekutagarrietarako bideak config.php fitxategian baino ezin dira konfiguratu.';
$string['check_preventexecpath_warning'] = 'Exekutagarrietarako bideak kudeatzailearen interfaz grafikoan konfiguratu daitezke.';
$string['check_riskadmin_detailsok'] = '<p>Mesedez, egiaztatu ezazu sistemako kudeatzaileen ondoko zerrenda hau:</p>{$a}';
$string['check_riskadmin_detailswarning'] = '<p>Mesedez, egiazta ezazu sistemako kudeatzaileen zerrenda hau:</p>{$a->admins}
<p>Gomendagarria da kudeatzaile-rola sistemaren testuinguruan baino ez esleitzea. Ondoko erabiltzaileek (onartzen ez den) kudeatzaile-rola esleituta dute beste testuinguru batzuetan:</p>{$a->unsupported}';
$string['check_riskadmin_name'] = 'Kudeatzaileak';
$string['check_riskadmin_ok'] = 'Guneko {$a} kudeatzaile aurkitu dira.';
$string['check_riskadmin_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) berrikusi rol-esleipena</a>';
$string['check_riskadmin_warning'] = 'Guneko {$a->admincount} kudeatzaile eta onartzen ez diren {$a->unsupcount} kudeatzaile-rol esleipen aurkitu dira.';
$string['check_riskbackup_detailsok'] = 'Ezein rolek ez du esplizituki erabiltzaile-datuen segurtasun-kopia baimentzen. Halere, kontuan izan "doanything" gaitasuna duten kudeatzaileek hori egiteko aukera izango dutela.';
$string['check_riskbackup_details_overriddenroles'] = '<p>Aktibo dauden baliogabetze hauek erabiltzaileei segurtasun-kopietan erabiltzaile-datuak gehitzeko aukera ematen diete. Mesedez ziurtatu ezazu baimen hau beharrezkoa dela.</p> {$a}';
$string['check_riskbackup_details_systemroles'] = '<p>Sistemako hurrengo rol hauek erabiltzaileei segurtasun-kopietan erabiltzaile-datuak gehitzeko aukera ematen diete. Mesedez ziurtatu ezazu baimen hau beharrezkoa dela.</p> {$a}';
$string['check_riskbackup_details_users'] = '<p>Goiko roletako edo baliogabetze-lokalak direla eta, une honetan hurrengo erabiltzaileek segurtasun-kopietan euren ikastaroetan matrikulatutako edozein erabiltzaileren erabiltzaile-datuak gehitzeko baimena dute. Ziurtatu ezazu (a) konfiantzazkoak direla eta (b) pasahitz sendoekin babestuta daudela:</p> {$a}';
$string['check_riskbackup_editoverride'] = '<a href="{$a->url}">{$a->name} {$a->contextname}-(e)an</a>';
$string['check_riskbackup_editrole'] = '<a href="{$a->url}">{$a->name}</a>';
$string['check_riskbackup_name'] = 'Erabiltzaile-datuen segurtasun-kopia';
$string['check_riskbackup_ok'] = 'Ezein rolek ez du esplizituki erabiltzaile-datuen segurtasun-kopia baimentzen';
$string['check_riskbackup_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) {$a->contextname}-(e)an</a>';
$string['check_riskbackup_warning'] = '{$a->rolecount} rol, {$a->overridecount} baliogabetze eta erabiltzaile-datuen segurtasun-kopiak egiteko baimena duen {$a->usercount} erabiltzaile aurkitu dira.';
$string['check_riskxss_details'] = '<p>RISK_XSS konfiantzazko erabiltzaileek bakarrik izan beharko luketen gaitasun arriskutusak biltzen ditu.</p>
<p>Egiaztatu hurrengo erabiltzaile-zerrenda eta ziurtatu zerbitzari honetan erabiltzaileok konfiantzazkoak direla:</p>
<p>{$a}</p>';
$string['check_riskxss_name'] = 'XSS konfiantzazko erabiltzaileak';
$string['check_riskxss_warning'] = 'RISK_XSS - konfiantzazkoak izan beharko liratekeen {$a} erabiltzaile aurkitu dira.';
$string['check_unsecuredataroot_details'] = '<p>dataroot karpeta ez litzateke web bidez eskuragarri egon beharko. Karpeta web bidez eskuragarri ez dagoela ziurtatzeko modurik onena web-karpeta publikotik kanpoko karpeta bat erabiltzea da.</p>
<p>Karpeta mugitzen baduzu, <code>config.php</code> fitxategiko <code>$CFG->dataroot</code> ezarpenean aldaketa bera egin beharko duzu.</p>';
$string['check_unsecuredataroot_error'] = 'Zure <code>{$a}</code> dataroot karpeta okerreko kokagunean dago eta web bidez eskuragarri dago!';
$string['check_unsecuredataroot_name'] = 'dataroot ez da segurua';
$string['check_unsecuredataroot_ok'] = 'Dataroot karpetak ez du web bidez eskuragarri egon behar.';
$string['check_unsecuredataroot_warning'] = 'Zure <code>{$a}</code> dataroot karpeta okerreko kokagunean dago eta web bidez eskuragarri egon daiteke.';
$string['check_vendordir_details'] = '<p><em>{$a->path}</em> karpetak bitartekoen liburutegiak eta euren menpekotasunak ditu, normalean PHP composer bitartez instalatutakoak. Liburutegi hauek Moodle-ko garapen lokalerako beharrezkoak izan daitezke, esaterako PHPUnit framework-a instalatzeko. Ez dira behar lanean dagoen Moodle gune batean, eta potentzialki urruneko erasotzaileei kodea erakusteko arriskua dago.</p>
<p>Karpeta hori ezabatzea irmoki gomendatzen da gunea URL publiko baten bitartez eskuragarri badago, edo gutxienez zure web-zerbitzariaren konfigurazioan bertara web bidezko sarbidea ukatzea.</p>';
$string['check_vendordir_info'] = 'vendor karpetak ez luke gune publikoetan egon behar.';
$string['check_vendordir_name'] = 'vendor karpeta';
$string['check_webcron_details'] = '<p>Cron-a web-nabigatzaile baten bitartez exekutatzeak informazio pribilegiatua erabiltzaile ezezagunei ikusgai jartzea suposatu lezake. Cron-a komando-lerro batetik baino ez exekutatzea edo bestela cron-aren urruneko sarbideetarako pasahitza zehaztea gomendatzen da</p>';
$string['check_webcron_name'] = 'Web bidezko cron-a';
$string['check_webcron_ok'] = 'Erabiltzaile anonimoek ez dute cron-era sarbiderik.';
$string['check_webcron_warning'] = 'Erabiltzaile anonimoak cron-era sar daitezke.';
$string['configuration'] = 'Ezarpenak';
$string['description'] = 'Deskribapena';
$string['details'] = 'Xehetasunak';
$string['issue'] = 'Arazoa';
$string['pluginname'] = 'Segurtasunaren ikuspegi orokorra';
$string['privacy:metadata'] = 'Segurtasunaren ikuspegi orokorra pluginak ez du datu pertsonalik biltzen.';
$string['security:view'] = 'Ikusi segurtasun-txostena';
$string['status'] = 'Egoera';
$string['statuscritical'] = 'Larria';
$string['statusinfo'] = 'Informazioa';
$string['statusok'] = 'ONDO';
$string['statusserious'] = 'Larria';
$string['statuswarning'] = 'Kontuz';
$string['timewarning'] = 'Datuen prozesamenduak luze iraun dezake, mesedez, pazientzia izan ezazu...';
