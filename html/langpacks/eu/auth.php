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
 * Strings for component 'auth', language 'eu', branch 'MOODLE_38_STABLE'
 *
 * @package   auth
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = 'Eskura dauden autentifikazio-pluginak';
$string['allowaccountssameemail'] = 'Baimendu helbide elektroniko bera duten kontuak';
$string['allowaccountssameemail_desc'] = 'Gaituz gero, helbide elektroniko bera erabiltzaile-kontu batek baino gehiagok parteka dezake. Horrek segurtasun- edo pribatutasun-arazoak sor ditzake, adibidez pasahitzaren aldaketa baieztatzeko e-mailarekin.';
$string['alternatelogin'] = 'Hemen URL bat sartuz gero, gune honetarako sarbide-orri gisa erabiliko da. Orriak formularioa eduki beharko luke, ekintza <strong>\'{$a}\'</strong> ezaugarrian ezarrita duena eta eremu hauek itzultzen dituena: <strong>erabiltzaile-izena</strong> eta <strong>pasahitza</strong>.<br />Tentuz saiatu zaitez URL ezegokia ez sartzen, hori egiteak gunetik kanpo utziko baitzaitu.<br />Lehenetsitako sarbide-orria erabiltzeko hutsik utzi, mesedez.';
$string['alternateloginurl'] = 'Aukerazko sarbiderako URLa';
$string['auth_changepasswordhelp'] = 'Pasahitza aldatzeko laguntza';
$string['auth_changepasswordhelp_expl'] = '{$a} pasahitza galdu duten erabiltzaileei laguntza erakusten die. Aukera hau erantsi daiteke edo <strong>Pasahitza aldaketaren URLa</strong>ren ordez erakutsi edo Moodleren barne pasahitza-aldaketa moduan azaldu.';
$string['auth_changepasswordurl'] = 'Pasahitza aldatzeko URLa';
$string['auth_changepasswordurl_expl'] = 'Beren {$a} pasahitza galdu duten erabiltzaileak zein URL helbidera bidaliko dituzun zehaztu.  Aukeratu <strong>Pasahitz aldaketa orri estandar erabili</strong> orrian <strong>Ez</strong>.';
$string['auth_changingemailaddress'] = 'Helbide elektronikoa {$a->oldemail}-tik {$a->newemail}-ra aldatzeko eskaera egin duzu. Segurtasunagatik, helbide elektroniko berrira e-maila bidaltzen ari gara benetan zurea dela ziurtatzeko. Mezu honetan bidali dizugun URLa ireki bezain pronto eguneratuko da helbide elektronikoa.';
$string['auth_common_settings'] = 'Ezarpen komunak';
$string['auth_data_mapping'] = 'Datuen lotura';
$string['authenticationoptions'] = 'Autentifikazio-aukerak';
$string['auth_fieldlock'] = 'Blokeatu balioa';
$string['auth_fieldlock_expl'] = '<p><b>Blokeatu balioa:</b> Gaituz gero, Moodleko erabiltzaile eta kudeatzaileek ezingo dute eremua zuzenean editatu. Aukeratu hau hautatu datu horiek kanpoko autentifikazio-sisteman badituzu. </p>';
$string['auth_fieldlockfield'] = 'Blokeatze-balioa ({$a})';
$string['auth_fieldlocks'] = 'Blokeatu erabiltzaile-eremuak';
$string['auth_fieldlocks_help'] = '<p>Erabiltzaileen datu-eremuak blokea ditzakezu, kudeatzaileek datuok eskuz mantentzen dituzten guneetan bereziki erabilgarria gertatzen dena, erabiltzaileen erregistroak editatuz edo \'Erabiltzaileak igo\' aplikazioaren bidez. Moodlek behar dituen eremuak blokeatzen badituzu, erabiltzaile-kontuak sortzean datu horiek ematen dituzula ziurtatu; bestela, kontuak ezingo dira erabili.</p><p>Pentsa ezazu ea \'Hutsik egotekotan desblokeatu\' aukera aktibatu behar duzun arazo hori ebitatzeko.</p>';
$string['auth_fieldmapping'] = 'Datu-parekatzea ({$a})';
$string['authinstructions'] = 'Eremu hau hutsik utzi ezazu hasiera-orrian sarbide-orrian lehenetsitako argibideak erakusteko. Argibide pertsonalizatuak eman nahi badituzu, idatz itzazu hemen.';
$string['auth_invalidnewemailkey'] = 'Errorea: helbide elektronikoa aldatzea baieztatu nahian ari bazara, nahastu egingo zinen e-mailez bidali dugun URLa kopiatzean. Mesedez, kopiatu helbidea eta saiatu berriz.';
$string['authloginviaemail'] = 'Baimendu helbide elektroniko bidezko saio-hasiera';
$string['authloginviaemail_desc'] = 'Baimendu erabiltzaile-izen eta helbide elektronikoaren bidezko sarbidea (azken hori bakarra izatekotan).';
$string['auth_multiplehosts'] = 'Ostalari anitzak zehaz daitezke (ad. ostalari1.com;ostalari2.com;ostalari3.com) edo (edo a. xxx.xxx.xxx.xxx;xxx.xxx.xxx.xxx)';
$string['auth_notconfigured'] = '{$a} autentifikazio-metodoa ez dago konfiguratuta.';
$string['auth_outofnewemailupdateattempts'] = 'Zure helbide elektronikoa eguneratzeko baimenduta dauden saiakerak agortuko dituzu. Bertan behera utzi da zure eguneratzeko eskaria.';
$string['auth_passwordisexpired'] = 'Zure pasahitza iraungita dago. Mesedez aldatu ezazu orain.';
$string['auth_passwordwillexpire'] = 'Zure pasahitza {$a} egun barru iraungiko da. Pasahitza orain aldatu nahi duzu?';
$string['auth_remove_delete'] = 'Osorik ezabatu';
$string['auth_remove_keep'] = 'Barruan gorde';
$string['auth_remove_suspend'] = 'Barruan eten';
$string['auth_remove_user'] = 'Zehaztu zer egin barruko erabiltzaile-kontuekin sinkronizazio masiboetan erabiltzailea kanpoko iturritik ezabatu bada. Etendako erabiltzaileak soilik kanpoko iturrian berriz agertzen badira berreskuratuko dira.';
$string['auth_remove_user_key'] = 'Kanpoko erabiltzailea ezabatu da';
$string['auth_sync_script'] = 'Erabiltzaile-kontuaren sinkronizazioa';
$string['auth_sync_suspended'] = 'Gaituz gero, etendako atributua erabiltzaile-kontu lokalen etete-egoera eguneratzeko erabiliko da';
$string['auth_sync_suspended_key'] = 'Sinkronizatu erabiltzaile lokalen etete-egoera';
$string['auth_updatelocal'] = 'Eguneratu datu lokalak';
$string['auth_updatelocal_expl'] = '<p><b>Eguneratu datu lokalak:</b> Gaituz gero, eremua eguneratuko da (kanpoko autentikazioz) erabiltzailea sartu edo erabiltzaileen sinkronizazioa gertatzen den bakoitzean. Modu lokalean eguneratu beharreko eremuak blokeatu beharko lirateke.</p>';
$string['auth_updatelocalfield'] = 'Eguneratu lokala ({$a})';
$string['auth_updateremote'] = 'Eguneratu kanpoko datuak';
$string['auth_updateremote_expl'] = '<p><b>Eguneratu kanpoko datuak:</b> Gaituz gero, kanpoko eguneratu egingo da erabiltzailearen erregistroa eguneratzen denean. eremuak editatu ahal izateko desblokeatuta egon behar dira.</p>';
$string['auth_updateremotefield'] = 'Eguneratu kanpokoa ({$a})';
$string['auth_updateremote_ldap'] = '<p><b>Oharra:</b> LDAP kanpoko datuen eguneratzeak \'binddn\' eta \'bindpw\' balioak ezartzeko eskatzen du erabiltzaile-erregistro guztien edizio-baimena duen erabiltzaile batentzat. Oraingoz, honek ez ditu balio anitzeko atributuak babesten, eta soberako balioak ezabatuko ditu eguneratzean zehar. </p>';
$string['auth_user_create'] = 'Gaitu erabiltzaileen sorrera';
$string['auth_user_creation'] = 'Erabiltzaile anonimo berriek erabiltzaile-kontuak autentifikazioko kanpo kodearen gainean sor ditzakete eta posta elektroniko bidez baieztatu. Aukera hau gaituz gero, erabiltzaileen sorrerarako moduluaren aukerak ere ezarri behar dituzula gogoratu.';
$string['auth_usernameexists'] = 'Aukeratutako erabiltzailearen izena honez gero badago. Beste bat aukeratu, mesedez.';
$string['auth_usernotexist'] = 'Ezin da existitzen ez den erabiltzailea eguneratu: {$a}';
$string['auto_add_remote_users'] = 'Gehitu automatikoki urrutiko erabiltzaileak';
$string['cannotmapfield'] = '"{$a->fieldname}" eremua ezin da lotu bere izen laburra "{$a->shortname}" luzeegia delako. Lotura egitea baimentzeko, izen laburra  {$a->charlimit} karaktereko luzerara murriztu beharko duzu. <a href="{$a->link}">Editatu erabiltzaile profilaren eremuak</a>';
$string['changepassword'] = 'Pasahitza aldatzeko URLa';
$string['changepasswordhelp'] = 'Ahaztutako pasahitza berreskuratzeko URLa, erabiltzaileei posta elektronikoz bidaliko dena. Kontuan izan ezarpen honek ez duela efekturik autentifikazio ezarpen komunetan pasahitza berreskuratzeko URLa ezarriz gero.';
$string['chooseauthmethod'] = 'Aukeratu autentifikazio-metodoa';
$string['chooseauthmethod_help'] = 'Ezarpen honek erabiltzailea sartzean erabiltzen den autentifikazio-metodoa zehazten du. Soilik gaitutako autentifikazio-pluginak erabili beharko lirateke, bestela erabiltzailea ezingo da sartu. Erabiltzaileari sartzea ukatzeko, aukeratu "Autentifikaziorik ez"';
$string['createpassword'] = 'Sortu pasahitza eta jakinarazi erabiltzaileari';
$string['createpasswordifneeded'] = 'Sortu pasahitza eta bidali posta elektronikoz, beharrezkoa bada';
$string['emailchangecancel'] = 'Utzi helbide elektronikoaren aldaketa';
$string['emailchangepending'] = 'Egin gabeko aldaketa. Ireki bidalitako esteka hemen {$a->preference_newemail}.';
$string['emailnowexists'] = 'Zure profilari ezarri nahi diozun helbide elektronikoa beste erabiltzaile bati ezarri zaio zuk eskaria egin zenuenetik. Helbide elektronikoa aldatzeko eskaera bertan behera geratu da, beraz; baina, nahi izanez gero beste helbide elektroniko batekin egin dezakezu eskaera berria.';
$string['emailupdate'] = 'Eguneratu helbide elektronikoa';
$string['emailupdatemessage'] = '{$a->fullname} agurgarria,

Zure kontuko helbide elektronikoa aldatzeko eskaria egin duzu {$a->site} gunean. Aldaketa hau baieztatzeko joan mesedez ondorengo web helbidera:

{$a->url}

{$a->supportemail}';
$string['emailupdatesuccess'] = '<em>{$a->fullname}</em> erabiltzailearean helbide elektronikoa ondo eguneratu da honetara: <em>{$a->email}</em>';
$string['emailupdatetitle'] = 'Helbide elektronikoa eguneratzeko baieztapena hemen: {$a->site}';
$string['errormaxconsecutiveidentchars'] = 'Pasahitzak gehienez {$a} karaktere berdin izan behar ditu elkarren segidan.';
$string['errorminpassworddigits'] = 'Pasahitzak gutxienez {$a} zenbaki izan behar ditu.';
$string['errorminpasswordlength'] = 'Pasahitzak gutxienez {$a} karaktere izan behar ditu.';
$string['errorminpasswordlower'] = 'Pasahitzak gutxienez {$a} letra xehe izan behar ditu.';
$string['errorminpasswordnonalphanum'] = 'Pasahitzak gutxienez {$a} karaktere ez alfa-numeriko izan behar ditu, adibidez, *, -, edo #.';
$string['errorminpasswordupper'] = 'Pasahitzak gutxienez {$a} letra larri izan behar ditu.';
$string['errorpasswordreused'] = 'Pasahitz hau lehenago erabili da eta ez dago baimenduta berriz erabiltzea';
$string['errorpasswordupdate'] = 'Errorea pasahitza eguneratzean, pasahitza ez da aldatu';
$string['eventuserloggedin'] = 'Erabiltzailea hemen sartu da:';
$string['eventuserloggedinas'] = 'Erabiltzailea beste erabiltzaile bat bezala sartu da';
$string['eventuserloginfailed'] = 'Erabiltzailearen saio-hasierak huts egin du';
$string['forcechangepassword'] = 'Behartu pasahitz aldaketa';
$string['forcechangepasswordfirst_help'] = 'Behartu pasahitza aldatzera erabiltzaileak Moodlen sartzen diren lehenengo aldian.';
$string['forcechangepassword_help'] = 'Behartu pasahitza aldatzera erabiltzaileak Moodlen sartzen diren hurrengo aldian.';
$string['forgottenpassword'] = 'Hemen URL bat idatziz gero, gune honetan galdu diren pasahitzak berreskuratzeko orri gisa erabiliko da. Aukera hau pentsatuta dago pasahitzak Moodletik kanpo kudeatzen diren guneetarako. Hutsik utz ezazu pasahitza berreskuratzeko lehenetsitako orria erabiltzeko.';
$string['forgottenpasswordurl'] = 'Ahaztutako pasahitzaren URLa';
$string['getrecaptchaapi'] = 'reCAPTCHA erabiltzeko, API giltza lortu behar duzu hemendik: <a href=\'https://www.google.com/recaptcha/admin\'>https://www.google.com/recaptcha/admin</a>';
$string['guestloginbutton'] = 'Bisitariek saioa hasteko botoia';
$string['incorrectpleasetryagain'] = 'Ez da zuzena. Mesedez, saiatu berriz.';
$string['infilefield'] = 'Fitxategiko beharrezko eremua';
$string['informminpassworddigits'] = 'gutxienez {$a} digitu';
$string['informminpasswordlength'] = 'gutxienez {$a} karaktere';
$string['informminpasswordlower'] = 'gutxienez {$a} letra xehe';
$string['informminpasswordnonalphanum'] = 'gutxienez {$a} karaktere ez alfa-numeriko, adibidez, *, -, edo #';
$string['informminpasswordreuselimit'] = 'Pasahitzak {$a} aldaketen ondoren berrerabil daitezke';
$string['informminpasswordupper'] = 'gutxienez {$a} letra larri';
$string['informpasswordpolicy'] = 'Pasahitzak {$a} izan behar du';
$string['instructions'] = 'Argibideak';
$string['internal'] = 'Barrukoa';
$string['limitconcurrentlogins'] = 'Aldi bereko saio-hasieren kopuruaren muga';
$string['limitconcurrentlogins_desc'] = 'Gaituz gero, nabigatzailearen bidezko aldibereko sarbide-kopurua  erabiltzaileko mugatuta dago. Mugara iritsitakoan saio zaharrena ixten da. Kontuan izan gorde gabeko lana gal daitekeela. Ezarpen hau ez da SSO (saio-hasiera bakarra) autentikazio-pluginekin bateragarria.';
$string['locked'] = 'Blokeatuta';
$string['md5'] = 'MD5 hash-a';
$string['nopasswordchange'] = 'Ezin da pasahitza aldatu';
$string['nopasswordchangeforced'] = 'Ezin duzu aurrera egin pasahitza aldatu gabe, baina ez dago aldatzeko inongo orririk. Mesedez, jarri harremanetan zure Moodle Kudeatzailearekin.';
$string['noprofileedit'] = 'Ezin da profila editatu';
$string['ntlmsso_attempting'] = 'Single Sign On saiatzen NTLM bidez...';
$string['ntlmsso_failed'] = 'Saio-hasiera automatikoak huts egin du, saiatu sarbide-orri arrunta...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO desgaituta dago.';
$string['passwordhandling'] = 'Pasahitz eremuaren kudeaketa';
$string['plaintext'] = 'Testu arrunta';
$string['pluginnotenabled'] = '\'{$a}\' autentifikazio-plugina ez dago gaituta';
$string['pluginnotinstalled'] = '\'{$a}\' autentifikazio-plugina ez dago instalatuta';
$string['potentialidps'] = 'Sartu beste kontu bat erabiliz:';
$string['privacy:metadata:userpref:createpassword'] = 'Erabiltzailearentzako pasahitz bat sortu behar dela adierazten du';
$string['privacy:metadata:userpref:forcepasswordchange'] = 'Erabiltzaileak saioa hastean bere pasahitza aldatu behar duen edo ez adierazten du';
$string['privacy:metadata:userpref:loginfailedcount'] = 'Erabiltzaileak saio-hastean egindako huts kopurua';
$string['privacy:metadata:userpref:loginfailedcountsincesuccess'] = 'Erabiltzaileak azken saio-haste arrakastatsuaren ondoren huts egindako saio-hasiera saiakera kopurua';
$string['privacy:metadata:userpref:loginfailedlast'] = 'Huts egindako azken saio-hasiera saiakera gorde zeneko unea';
$string['privacy:metadata:userpref:loginlockout'] = 'Huts egindako saio-hasiera saiakeren ondorioz erabiltzaile-kontua blokeatuta dagoen edo ez, eta erabiltzaile-kontua blokeatu zeneko data';
$string['privacy:metadata:userpref:loginlockoutignored'] = 'Erabiltzaile-kontu bat blokeatu ezin daitekela adierazten du';
$string['privacy:metadata:userpref:loginlockoutsecret'] = 'Blokeatuta dagoenean, erabiltzaileak bere kontua desblokeatzeko erabili beharreko sekretua';
$string['recaptcha'] = 'reCAPTCHA';
$string['recaptcha_help'] = 'CAPTCHA automatizatutako programen gehiegikeriak ekiditeko da. Jarraitu argibideei pertsona bat zarela egiaztatzeko. Klikatu beharreko laukitxo bat izan daiteke, azaldutako karaktereak idatzi beharra edo aukeratzeko irudi multzoa.

Ziur ez bazaude zein irudi diren, beste CAPTCHA bat eska dezakezu edo audio CAPTCHA bat.';
$string['security_question'] = 'Segurtasun-galdera';
$string['selfregistration'] = 'Auto-erregistroa';
$string['selfregistration_help'] = 'Autentifikazio-plugin bat, posta elektronikoan oinarritutako auto-erregistroa adibidez, aukeratzen bada aukera ematen die ustezko erabiltzaileei beren buruak erregistratu eta kontuak sortzeko. Horrela, spam sortzaileek kontuak sor ditzakete eta foroetako mezuak, blog sarrerak, e.a. spamerako erabili. Arrisku horri aurre egiteko, auto-erregistroa desgaitu edo mugatu egin behar da <em>Baimendutako posta elektronikoko domeinuak </em> ezarpena erabilita.';
$string['settingmigrationmismatch'] = 'Pluginaren ezarpenen izenak zuzentzerakoan desadostasuna aurkitu da. \'{$a->plugin}\' autentikazio-pluginak \'{$a->setting}\' ezarpena dauka \'{$a->legacy}\'(e)rako terminologia zaharrarekin eta \'{$a->current}\'(e)rako terminologia berriarekin. Azken balioa mantendu da. Baieztatu horrela izan behar duela, mesedez.';
$string['sha1'] = 'SHA-1 hash-a';
$string['showguestlogin'] = 'Bisitariek saioa hasteko botoia erakuts edo ezkuta dezakezu sarbide-orrian.';
$string['stdchangepassword'] = 'Erabili pasahitza aldatzeko orri estandarra';
$string['stdchangepassword_expl'] = 'Kanpoko autentifikazio-sistemak Moodlen pasahitz aldaketa ahalbidetzen badu,  BAI aukeratu. Ezarpen honek \'Pasahitza aldatzeko URLa\' baliogabetzen du.';
$string['stdchangepassword_explldap'] = 'OHARRA: LDAP SSL zifratze-tunel baten gainean erabiltzea aholkatzen da (ldaps://) LDAP zerbitzaria urrutikoa bada.';
$string['suspended'] = 'Etendako kontua';
$string['suspended_help'] = 'Etendako erabiltzaile-kontuek ezin dute saioa hasi edo web-zerbitzuak erabili, eta beren irteera-mezu guztiak baztertuko dira.';
$string['testsettings'] = 'Probatu ezarpenak';
$string['testsettingsheading'] = 'Probatu autentifikazio-ezarpenak - {$a}';
$string['unlocked'] = 'Desblokeatuta';
$string['unlockedifempty'] = 'Desblokeatua hutsik badago';
$string['update_never'] = 'Inoiz ez';
$string['update_oncreate'] = 'Sortzean';
$string['update_onlogin'] = 'Sarrera bakoitzean';
$string['update_onupdate'] = 'Eguneratzean';
$string['user_activatenotsupportusertype'] = 'auth: ldap user_activate()-k ez du onartzen aukeratutako erabiltzaile-mota: {$a}';
$string['user_disablenotsupportusertype'] = 'auth: ldap user_disable()-k ez du onartzen aukeratutako erabiltzaile-mota (..oraingoz)';
$string['username'] = 'Erabiltzaile-izena';
$string['username_help'] = 'Kontuan izan autentikazio-plugin batzuek ez dutela erabiltzaile-izenaren aldaketa onartuko.';
