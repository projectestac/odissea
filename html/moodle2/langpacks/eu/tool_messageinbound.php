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
 * Strings for component 'tool_messageinbound', language 'eu', branch 'MOODLE_34_STABLE'
 *
 * @package   tool_messageinbound
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['classname'] = 'Klasearen izena';
$string['component'] = 'Osagaia';
$string['configmessageinboundhost'] = 'Moodle-k e-postak bilatzera joan behar deneko zerbitzariaren helbidea. Berezkoa ez den ataka bat zehazteko, [zerbitzaria]:[ataka] erabili dezakezu, mail.adibidea.eus:587 formatua adibidez. Atakarik zehazten ez baduzu, Moodle-k zehazten duzun e-posta zerbitzariko berezko ataka erabiliko da.';
$string['defaultexpiration'] = 'Helbideen berezko iraungitze-epea';
$string['defaultexpiration_help'] = 'Kudeatzaileak e-posta helbide bat sortzen duenean, automatikoki iraungitze-epe bat zehaztu dakioke epe hori igaro ondoren ezin erabiltzeko. Iraungitze-epea zehaztea gomendagarria da.';
$string['description'] = 'Deskribapena';
$string['domain'] = 'E-postaren domeinua';
$string['edit'] = 'Editatu';
$string['edithandler'] = 'Editatu {$a} kudeatzailerako ezarpenak';
$string['editinghandler'] = '{$a} editatzen';
$string['enabled'] = 'Gaituta';
$string['fixedenabled_help'] = 'Ezin duzu aldatu kudeatzaile honen egoera. Baliteke beste kudeatzaileren batek kudeatzaile honen beharra izatea.';
$string['fixedvalidateaddress'] = 'Balioztatu igorlearen helbidea';
$string['fixedvalidateaddress_help'] = 'Ezin duzu aldatu kudeatzaile honen helbide-egiaztatzea. Baliteke kudeatzaileak konfigurazio zehatz bat behar izatea.';
$string['handlerdisabled'] = 'Kontaktatu nahi izan duzun e-postaren kudeatzailea desgaituta dago. Une honetan ezin izan da mezua prozesatu.';
$string['incomingmailconfiguration'] = 'Sarrerako e-postaren ezarpenak';
$string['incomingmailserversettings'] = 'Sarrerako posta-zerbitzariaren ezarpenak';
$string['incomingmailserversettings_desc'] = 'Moodle gai da modu egokian konfiguratutako IMAP zerbitzarietara konektatzeko. Hemen zure IMAP zerbitzarira konektatzeko erabili beharreko ezarpenak zehaztu ditzakezu.';
$string['invalidrecipientdescription'] = '"{$a->subject}" mezua ezin izan da autentifikatu, zure erabiltzaile-profilekoa ez den e-posta helbide batetik bidali delako. Mezu hori autentifikatu nahi baduzu, erantzun mezu honi.';
$string['invalidrecipientdescriptionhtml'] = '"{$a->subject}" mezua ezin izan da autentifikatu, zure erabiltzaile-profilekoa ez den e-posta helbide batetik bidali delako. Mezu hori autentifikatu nahi baduzu, erantzun mezu honi.';
$string['invalidrecipientfinal'] = '"{$a->subject}" mezua ezin izan da autentifikatu. Mesedez egiaztatu zure erabiltzaile profilean zehaztutako e-posta helbidetik bidaltzen ari zarela.';
$string['invalid_recipient_handler'] = 'Baliozkoa den mezu bat jasotzen denean baina igorlea ezin bada autentifikatu, mezua e-posta zerbitzarian gordetzen da eta erabiltzaileari erabiltzaile-profilean duen e-posta helbidera mezu bat bidaltzen zaio. Mezu horretan erabiltzaileari jatorrizko mezuaren egiazkotasuna egiaztatzeko mezuari erantzuteko aukera ematen zaio.

Kudeatzaile honek erantzun horiek kudeatzen ditu.

Ezin da desgaitu kudeatzaile honen igorlearen egiaztapena erabiltzaileak e-posta helbide baliogabetik erantzun dezakeelako bere e-posta bezeroaren konfigurazioa egokia ez bada.';
$string['invalid_recipient_handler_name'] = 'Igorle baliogabeen kudeatzailea';
$string['mailbox'] = 'Postontziaren izena';
$string['mailboxconfiguration'] = 'Postontziaren ezarpenak';
$string['mailboxdescription'] = '[postontzia]+azpihelbidea@[domeinua]';
$string['mailsettings'] = 'Postaren ezarpenak';
$string['message_handlers'] = 'Mezu-kudeatzaileak';
$string['messageinbound'] = 'Sarrerako mezua';
$string['messageinboundenabled'] = 'Gaitu sarrerako e-postaren prozesatzea';
$string['messageinboundenabled_desc'] = 'Sarrerako e-postaren prozesatzea gaitu behar da mezuak dagokien informazioarekin bidali ahal izateko.';
$string['messageinboundgeneralconfiguration'] = 'Ezarpen orokorra';
$string['messageinboundgeneralconfiguration_desc'] = 'Sarrerarko mezuen prozesatzeak e-postak jaso eta Moodle-ren baitan kudeatzea ahalbidetzen du. Honela e-posta bidez foroetan erantzutea eta gune pribatura fitxategiak igotzea moduko erabilerak gaitu daitezke.';
$string['messageinboundhost'] = 'Sarrerako e-posta zerbitzaria';
$string['messageinboundhostpass'] = 'Pasahitza';
$string['messageinboundhostpass_desc'] = 'Hemen zure zerbitzu-hornitzaileak e-posta helbidean sartzeko eman dizun pasahitza zehaztu behar da.';
$string['messageinboundhostssl'] = 'Erabili SSL';
$string['messageinboundhostssl_desc'] = 'e-posta zerbitzari batzuk segurtasun-maila gehigarria onartzen dute zure zerbitzariaren eta Moodle-n arteko komunikazioak zifratzea ahalbidetuz.  Zure zerbitzariak onartzen badu SSL zifratzea erabiltzea gomendagarria da.';
$string['messageinboundhosttype'] = 'Zerbitzari-mota';
$string['messageinboundhostuser'] = 'Erabiltzaile-izena';
$string['messageinboundhostuser_desc'] = 'Hemen zure zerbitzu-hornitzaileak e-posta helbidean sartzeko eman dizun erabiltzaile-izena zehaztu behar da.';
$string['messageinboundmailboxconfiguration_desc'] = 'Mezuak bidaltzen direnean, helbidea+datuak@adibidea.eus formatua izaten dute. Moodle-tik helbideak modu fidagarrian sortzeko, mesedez zehaztu @ zeinuaren aurretik erabili beharreko helbidea eta @ zeinuaren atzetik erabili beharreko domeinua. Esaterako, adibideko Postontziaren izena "helbidea" izango litzateke, eta e-postaren domeinua "adibidea.eus" izango litzateke. Helburu honetarako e-posta kontu dedikatu bat erabili beharko zenuke.';
$string['messageprocessingerror'] = 'Orain dela gutxi "{$a->subject}" e-posta bidali duzu baina tamalez ezin izan da prozesatu.

Errorearen xehetasunak azpian erakusten dira.

{$a->error}';
$string['messageprocessingerrorhtml'] = '<p>Orain dela gutxi "{$a->subject}" e-posta bidali duzu baina tamalez ezin izan da prozesatu.</p>
<p>Errorearen xehetasunak azpian erakusten dira.</p>
<p>{$a->error}</p>';
$string['messageprocessingfailed'] = '"{$a->subject}" e-posta ezin izan da prozesatu. Errorea hurrengo hau da: "{$a->message}".';
$string['messageprocessingfailedunknown'] = '"{$a->subject}" e-posta ezin izan da prozesatu. Informazio gehiago izateko jarri harremanetan zure kudeatzailearekin.';
$string['messageprocessingsuccess'] = '{$a->plain}

Aurrerantzean ez baduzu horrelako jakinarazpenik jaso nahi, zure mezularitza hobespenak editatu ditzakezu zure nabigatzailean {$a->messagepreferencesurl} irekita.';
$string['messageprocessingsuccesshtml'] = '{$a->html}
<p>Aurrerantzean ez baduzu horrelako jakinarazpenik jaso nahi, <a href="{$a->messagepreferencesurl}">zure mezularitza hobespenak editatu ditzakezu</a>.</p>';
$string['messageprovider:invalidrecipienthandler'] = 'Sarrera-mezu bat zuk bidali duzula konfirmatzeko mezua';
$string['messageprovider:messageprocessingerror'] = 'Sarrera-mezu bat prozesatu ezin deneko abisua';
$string['messageprovider:messageprocessingsuccess'] = 'Mezu bat ondo prozesatu deneko baieztatzea';
$string['name'] = 'Izena';
$string['noencryption'] = 'Desgaituta - Zifraketarik ez';
$string['noexpiry'] = 'Iraungitzerik ez';
$string['oldmessagenotfound'] = 'Mezu bat eskuz autentifikatzen saiatu zara, baina ezin izan da mezua aurkitu. Hau gertatu daiteke mezua dagoeneko prozesatu delako edo mezua iraungitu delako.';
$string['oneday'] = 'Egunbete';
$string['onehour'] = 'Ordubete';
$string['oneweek'] = 'Astebete';
$string['oneyear'] = 'Urtebete';
$string['pluginname'] = 'Sarrera-mezuen ezarpenak';
$string['privacy:metadata:coreuserkey'] = 'Jasotako e-posta egiaztatzeko erabiltzaile-gakoak';
$string['privacy:metadata:messagelist'] = 'Balidazioak huts egin duen eta egiaztatze gehiago behar duten mezuen identifikatzaileen zerrenda';
$string['privacy:metadata:messagelist:address'] = 'e-posta bidali zeneko helbidea.';
$string['privacy:metadata:messagelist:messageid'] = 'Mezuaren IDa';
$string['privacy:metadata:messagelist:timecreated'] = 'Erregistroa egin zeneko unea';
$string['privacy:metadata:messagelist:userid'] = 'Mezua onartu behar duen erabiltzailearen IDa';
$string['replysubjectprefix'] = 'Er:';
$string['requirevalidation'] = 'Balioztatu Igorlearen helbidea';
$string['ssl'] = 'SSL (Detektatu automatikoki SSL bertsioa)';
$string['sslv2'] = 'SSLv2 (Behartu SSL-en 2 bertsioa)';
$string['sslv3'] = 'SSLv2 (Behartu SSL-en 3 bertsioa)';
$string['taskcleanup'] = 'Egiaztatu gabeko sarrera-mezuen garbiketa';
$string['taskpickup'] = 'Eskuratu sarrera-mezuak';
$string['tls'] = 'TLS (TLS; zifratu gabeko kanal batean protokolo-mailako negoziazioaren bidez hasitakoa; konexio segurua hasteko GOMENDATUTAKO modua)';
$string['tlsv1'] = 'TLSv1 (zerbitzarietara TLS direct 1.x bertsioak erabiliz konektatzeko)';
$string['validateaddress'] = 'Balioztatu Igorlearen e-posta helbidea';
$string['validateaddress_help'] = 'Erabiltzaile baten mezu bat jasotzen denean, Moodle mezua egiaztatzen saiatzen da igorlearen e-posta helbidea eta erabiltzaile-profileko e-posta helbidea konparatuz.

Igorlearen helbidea bat ez badator, erabiltzaileari mezu bat bidaltzen zaio e-posta berak bidali duela egiaztatzeko.

Ezarpen hau desgaitzen bada, e-posta helbidea ez da egiaztatzen.';
