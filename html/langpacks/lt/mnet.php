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
 * Strings for component 'mnet', language 'lt', version '4.5'.
 *
 * @package     mnet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['RPC_HTTPS_SELF_SIGNED'] = 'HTTPS (naudotojo pasirašyta)';
$string['RPC_HTTPS_VERIFIED'] = 'HTTPS (pasirašyta)';
$string['RPC_HTTP_PLAINTEXT'] = 'HTTP neiššifruota';
$string['RPC_HTTP_SELF_SIGNED'] = 'HTTP (naudotojo pasirašyta)';
$string['RPC_HTTP_VERIFIED'] = 'HTTP (pasirašyta)';
$string['aboutyourhost'] = 'Apie jūsų serverį';
$string['accesslevel'] = 'Prieigos lygmuo';
$string['addhost'] = 'Įtraukti pagrindinį kompiuterį';
$string['addnewhost'] = 'Įtraukti naują pagrindinį kompiuterį';
$string['addtoacl'] = 'Įtraukti, kad pasiektų prieigos valdymą';
$string['allhosts'] = 'Visi pagrindiniai kompiuteriai';
$string['allhosts_no_options'] = 'Peržiūrint kelis pagrindinius kompiuterius parinktys neprieinamos';
$string['allow'] = 'Leisti';
$string['allowaccess'] = 'Leisti prieigą';
$string['applicationtype'] = 'Programos tipas';
$string['authfail_nosessionexists'] = 'Autorizuoti nepavyko: „MNet“ seanso nėra.';
$string['authfail_sessiontimedout'] = 'Autorizuoti nepavyko: „MNet“ seanso skirtasis laikas baigėsi.';
$string['authfail_usermismatch'] = 'Autorizuoti nepavyko: neatitinka naudotojas.';
$string['authmnetdisabled'] = '„MNet“ autentifikavimo papildinys <strong>išjungtas</strong>.';
$string['badcert'] = 'Tai netinkamas sertifikatas.';
$string['certdetails'] = 'Sertifikato išsami informacija';
$string['configmnet'] = '„MNet“ iš šio serverio leidžia užmegzti ryšį su kitais serveriais arba paslaugomis.';
$string['couldnotgetcert'] = '<br />{$a} nerasta sertifikato. <br />Pagrindinis kompiuteris gali neveikti arba yra klaidingai sukonfigūruotas.';
$string['couldnotmatchcert'] = 'Neatitinka dabar žiniatinklio serveryje publikuojamo sertifikato.';
$string['courses'] = 'kursai';
$string['courseson'] = 'kursai';
$string['current_transport'] = 'Dabartinis transportavimas';
$string['currentkey'] = 'Dabartinis viešasis raktas';
$string['databaseerror'] = 'Į duomenų bazę nepavyko įrašyti išsamios informacijos.';
$string['deleteaserver'] = 'Naikinamas serveris';
$string['deletedhostinfo'] = 'Pagrindinis kompiuteris buvo pašalintas. Jei jūs nenorite pašalinto jo, pakeiskite pašalinimo statusą į „Ne“';
$string['deletedhosts'] = 'Pašalintas pagrindinis kompiuteris: {$a}';
$string['deletehost'] = 'Naikinti pagrindinį kompiuterį';
$string['deletekeycheck'] = 'Ar esate visiškai tikras, kad norite naikinti šį raktą?';
$string['deleteoutoftime'] = 'Šio rakto naikinimo lango 60 sekundžių trukmė baigėsi. Pradėkite dar kartą.';
$string['deleteuserrecord'] = 'SSO ACL: naikinti naudotojo {$a->user} iš {$a->host} įrašą.';
$string['deletewrongkeyvalue'] = 'Įvyko klaida. Jei nebandėte naujinti savo serverio SSL rakto, gali būti, kad tapote kenkėjiškos atakos auka. Nesiimta jokių veiksmų.';
$string['deny'] = 'Uždrausti';
$string['denyaccess'] = 'Uždrausti prieigą';
$string['description'] = 'Aprašas';
$string['duplicate_usernames'] = 'Mums nepavyko sukurti jūsų naudotojo lentelės stulpelių „mnethostid“ ir „username“ indekso.<br />Tai galėjo įvykti dėl naudotojo vardų dublikatų <a href=rdblquote{$a}" target="_blank">jūsų naudotojo lentelėje</a>.<br />Versijos naujinimas turėtų būti baigtas sėkmingai. Spustelėję aukščiau esantį saitą naujame lange pamatysite instrukcijas, kaip spęsti šią problemą. Tuo galite pasidomėti versijos naujinimo pabaigoje.<br />';
$string['enabled_for_all'] = '(Ši paslauga įjungta visuose pagrindiniuose kompiuteriuose).';
$string['enterausername'] = 'Įveskite naudotojo vardą arba kableliais atskirtų naudotojo vardų sąrašą.';
$string['error7020'] = 'Ši klaida paprastai įvyksta, jei nuotolinė svetainė sukūrė jums įrašą su neteisingu wwwroot, pavyzdžiui, https://yoursite.com, o ne https://www.yoursite.com. Susisiekite su nuotolinės svetainės administratoriumi naudodami wwwroot (kaip nurodyta config.php) ir paprašykite atnaujinti jūsų prieglobos įrašą.';
$string['error7022'] = 'Laiškas, kurį išsiuntėte į nuotolinę svetainę, buvo tinkamai užšifruotas, bet nepasirašytas. Tai labai netikėta; tikriausiai turėtumėte pranešti apie klaidą, jei tai įvyktų (pateikti kuo daugiau informacijos apie atitinkamas programos versijas ir pan.).';
$string['error7023'] = 'Nuotolinė svetainė bandė iškoduoti jūsų žinutę naudodama visus raktus, turimus pagal jūsų svetainės įrašą. Visi bandymai buvo nesėkmingi. Šią problemą galite išspręsti rankiniu būdu perrašydami nuotolinės svetainės raktus. Netikėta, kad tai nutiko, nebent jūs kelis mėnesius nepalaikėte ryšio su nuotoline svetaine.';
$string['error7024'] = 'Į nuotolinę svetainę siunčiate nešifruotą pranešimą, tačiau nuotolinė svetainė nepriima nešifruoto ryšio iš jūsų svetainės. Tai labai netikėta; tikriausiai turėtumėte pranešti apie klaidą, jei taip atsitiktų (pateikti kuo daugiau informacijos apie atitinkamas programos versijas ir pan.).';
$string['error7026'] = 'Raktas, kuriuo pasirašyta jūsų žinutė, skiriasi nuo to, kuris yra nuotoliniame pagrindiniame kompiuteryje, jūsų serverio faile. Be to, nuotoliniam pagrindiniam kompiuteriui nepavyko iškviesti jūsų dabartinio rakto. Perrašykite nuotolio pagrindinio kompiuterio raktus rankiniu būdu ir bandykite dar kartą.';
$string['error709'] = 'Nuotolinei svetainei nepavyko iš jūsų gauti SSL rakto.';
$string['eventaccesscontrolcreated'] = 'Sukurta prieigos kontrolė';
$string['eventaccesscontrolupdated'] = 'Prieigos kontrolė atnaujinta';
$string['expired'] = 'Šio rakto galiojimo laikas baigėsi';
$string['expires'] = 'Galioja iki';
$string['expireyourkey'] = 'Naikinti šį raktą';
$string['expireyourkeyexplain'] = 'Numatyta, kad „Moodle“ jūsų raktą automatiškai pakeičia kas 28 dienas, tačiau galite pasirinkti rakto galiojimo laiką nutraukti bet kada <em>rankiniu būdu</em>. Tai naudinga tik tada, jei manote, kad šis raktas buvo pažeistas. Jo pakaitalas iškart sugeneruojamas automatiškai. <br />Panaikinus šį raktą kitos taikomosios programos negalės su jumis užmegzti ryšio, kol rankiniu būdu susisieksite su kiekvienu administratoriumi ir pateiksite jiems naująjį raktą.';
$string['exportfields'] = 'Eksportuotini laukai';
$string['failedaclwrite'] = 'Nepavyko įrašyti į naudotojo {$a} „MNet“ prieigos teisių sąrašą.';
$string['findlogin'] = 'Rasti prisijungimo informaciją';
$string['forbidden-function'] = 'Tokia funkcija nebuvo įjungta RPC.';
$string['forbidden-transport'] = 'Jūsų bandomas naudoti transportavimo metodas neleidžiamas.';
$string['forcesavechanges'] = 'Reikalauti įrašyti keitimus';
$string['helpnetworksettings'] = 'Konfigūruoti „MNet“ ryšį';
$string['hidelocal'] = 'Slėpti vietos naudotojus';
$string['hideremote'] = 'Slėpti nuotolinius naudotojus';
$string['host'] = 'pagrindinis kompiuteris';
$string['hostcoursenotfound'] = 'Pagrindinio kompiuterio arba kursų nerasta';
$string['hostdeleted'] = 'Gerai. Pagrindinis kompiuteris panaikintas.';
$string['hostexists'] = 'Prieglobos su šiuo prieglobos pavadinimu įrašas jau yra. (Gali būti, kad jis buvo ištrintas.) <a href="{$a}">Redaguoti įrašą</a>';
$string['hostlist'] = 'Tinkle veikiančių pagrindinių kompiuterių sąrašas';
$string['hostname'] = 'Pagrindinio kompiuterio vardas';
$string['hostnamehelp'] = 'Visus reikalavimus atitinkantis nuotolinio pagrindinio kompiuterio domeno vardas, pvz., www.pavyzdys.lt.';
$string['hostnotconfiguredforsso'] = 'Šis serveris nesukonfigūruotas, kad būtų galima prisijungti nuotoliniu būdu.';
$string['hostsettings'] = 'Pagrindinio kompiuterio parametrai';
$string['http_self_signed_help'] = 'Leidžia ryšius naudojant naudotojo pasirašytą DIY SSL sertifikatą nuotoliniame pagrindiniame kompiuteryje.';
$string['http_verified_help'] = 'Leidžia ryšius naudojant patikrintą PHP rašytą SSL sertifikatą nuotoliniame pagrindiniame kompiuteryje, tačiau per HTTP, o ne per HTTPS.';
$string['https_self_signed_help'] = 'Leidžia ryšius naudojant naudotojo pasirašytą DIY SSL (PHP kalba) nuotoliniame pagrindiniame kompiuteryje per HTTP.';
$string['https_verified_help'] = 'Leidžia ryšius naudojant patikrintą SSL sertifikatą nuotoliniame pagrindiniame kompiuteryje.';
$string['id'] = 'ID';
$string['idhelp'] = 'Ši reikšmė priskirta automatiškai, todėl jos negalima pakeisti';
$string['importfields'] = 'Importuotini laukai';
$string['inspect'] = 'Tikrinti';
$string['installnosuchfunction'] = 'Kodavimo klaida! Kažkas bando įdiegti funkciją „mnet xmlrpc“ ({$a->method}) iš failo ({$a->file}), tačiau jos nepavyksta rasti.';
$string['installnosuchmethod'] = 'Kodavimo klaida! Kažkas bando įdiegti metodą „mnet xmlrpc“ ({$a->method}), esantį klasėje ({$a->file}), tačiau jo nepavyksta rasti.';
$string['installreflectionclasserror'] = 'Kodavimo klaida! Klasėje {$a->class} esančio metodo {$a->method} „MNet“ introspekcija nepavyko. Jei padės, pradinė klaidos žinutė yra: {$a->error}.';
$string['installreflectionfunctionerror'] = 'Kodavimo klaida! Faile {$a->file} esančios funkcijos {$a->method} „MNet“ introspekcija nepavyko. Jei padės, pradinė klaidos žinutė yra: {$a->error}.';
$string['invalidaccessparam'] = 'Klaidingas prieigos parametras.';
$string['invalidactionparam'] = 'Klaidingas veiksmo parametras.';
$string['invalidhost'] = 'Turite pateikti tinkamą pagrindinio kompiuterio identifikatorių';
$string['invalidpubkey'] = 'Tai nėra tinkamas SSL raktas. ({$a})';
$string['invalidurl'] = 'Klaidingas URL parametras.';
$string['ipaddress'] = 'IP adresas';
$string['is_in_range'] = 'IP adresas <code>{$a}</code> nurodo tinkamą patikimą pagrindinį kompiuterį.';
$string['ispublished'] = '{$a} jums įjungė šią paslaugą.';
$string['issubscribed'] = '{$a} jūsų pagrindiniame kompiuteryje prenumeruoja šią paslaugą.';
$string['keydeleted'] = 'Jūsų raktas sėkmingai panaikintas ir pakeistas.';
$string['keydeletedcancelled'] = 'Jokių rakto pakeitimų nepadaryta.';
$string['keymismatch'] = 'Jūsų turimas šio pagrindinio kompiuterio viešasis raktas skiriasi nuo šiuo metu publikuojamo viešojo rakto. Dabar publikuojamas šis raktas:';
$string['last_connect_time'] = 'Paskutinio prisijungimo laikas';
$string['last_connect_time_help'] = 'Laikas, kai paskutinį kartą buvote prisijungę prie šio pagrindinio kompiuterio.';
$string['last_transport_help'] = 'Transportavimo procesas, kurį naudojote paskutinį kartą užmegzdami ryšį su šiuo pagrindiniu kompiuteriu.';
$string['leavedefault'] = 'Geriau naudoti numatytuosius parametrus';
$string['listservices'] = 'Išvardyti paslaugas';
$string['loginlinkmnetuser'] = '<br />Jei esate „MNet“ nuotolinis naudotojas ir galite <a href="{$a}">patvirtinti savo el. pašto adresą čia</a>, galite būti nukreipti į savo prisijungimo puslapį.<br />';
$string['logs'] = 'žurnalai';
$string['managemnetpeers'] = 'Valdyti lygiaverčius mazgus';
$string['method'] = 'Metodas';
$string['methodhelp'] = 'Metodas';
$string['methodsavailableonhost'] = 'Metodai prieinami {$a}';
$string['methodsavailableonhostinservice'] = 'Metodai prieinami {$a->service}, esančiai {$a->host}';
$string['methodsignature'] = '{$a} metodo parašas';
$string['mnet'] = 'MNet';
$string['mnet_concatenate_strings'] = 'Sujunkite iki 3 eilučių ir grąžinkite rezultatą';
$string['mnet_session_prohibited'] = 'Jūsų pagrindinio serverio naudotojams dabar neleidžiama jungtis tarptinkliniu ryšiu prie {$a}.';
$string['mnetdisabled'] = '„MNet“ yra <strong>išjungtas</strong>.';
$string['mnetidprovider'] = '„MNet“ ID teikėjas';
$string['mnetidproviderdesc'] = 'Naudokite šią priemonę norėdami gauti saitą, kuriuo galėtumėte prisijungti, jei galite nurodyti teisingą el. pašto adresą, kad būtų palygintas naudotojo vardas, kurį naudodami bandėte prisijungti anksčiau.';
$string['mnetidprovidermsg'] = 'Turėtumėte galėti prisijungti prie savo {$a} teikėjo.';
$string['mnetidprovidernotfound'] = 'Atsiprašome, bet daugiau informacijos nepavyko rasti.';
$string['mnetpeers'] = 'Lygiaverčiai elementai';
$string['mnetservices'] = 'Paslaugos';
$string['mnetsettings'] = '„MNet“ parametrai';
$string['moodle_home_help'] = 'Kelias į „MNet“ taikomosios programos pagrindinį puslapį nuotoliniame pagrindiniame kompiuteryje, pvz., /moodle/.';
$string['name'] = 'Pavadinimas';
$string['net'] = 'Darbas tinkle';
$string['networksettings'] = 'Tinklo parametrai';
$string['never'] = 'Niekada';
$string['noaclentries'] = 'SSO prieigos teisių sąraše nėra įrašų';
$string['noaddressforhost'] = 'Atsiprašome, bet tokio pagrindinio kompiuterio vardo ({$a}) nepavyko išspręsti.';
$string['nocurl'] = 'Neįdiegta PHP cURL biblioteka';
$string['nolocaluser'] = 'Nėra nuotolinio naudotojo vietinio įrašo ir jo nepavyko sukurti, nes šis pagrindinis kompiuteris automatiškai naudotojų nekuria. Susisiekite sus sistemos administratoriumi.';
$string['nomodifyacl'] = 'Neturite teisių modifikuoti „MNet“ prieigos teisių sąrašo.';
$string['nonmatchingcert'] = 'Sertifikato tema <br /><em>{$a->subject}</em><br />nesutampa su pagrindiniu kompiuteriu, iš kurio ji paimta <br /><em>{$a->host}</em>.';
$string['nopubkey'] = 'Nuskaitant viešąjį raktą iškilo problema.<br />Gali būti, kad pagrindinis kompiuteris neleidžia „MNet“ arba raktas yra klaidingas.';
$string['nosite'] = 'Nepavyko rasti kursų svetainės lygiu';
$string['nosuchfile'] = 'Failo / funkcijos {$a} nėra.';
$string['nosuchfunction'] = 'Negalima nustatyti funkcijos vietos arba funkcija draudžiama naudoti RPC.';
$string['nosuchmodule'] = 'Klaidingai nurodytas funkcijos adresas, todėl nepavyko nustatyti jos vietos. Naudokite formatą mod/modulename/lib/functionname.';
$string['nosuchpublickey'] = 'Negalima gauti viešojo rakto siekiant patikrinti parašą.';
$string['nosuchservice'] = 'RPC paslauga nepaleista šiame pagrindiniame kompiuteryje.';
$string['nosuchtransport'] = 'Nėra transportavimo pagal tokį ID.';
$string['notBASE64'] = 'Ši eilutė nėra koduota „base64“ formatu. Ji negali būti tinkamas raktas.';
$string['notPEM'] = 'Šis raktas neveiks, nes parašytas ne PEM formatu.';
$string['not_in_range'] = 'IP adresas <code>{$a}</code> nenurodo tinkamo patikimo pagrindinio kompiuterio.';
$string['notenoughidpinfo'] = 'Jūsų tapatybės teikėjas nepateikė mums pakankamai informacijos, kad galėtume sukurti arba atnaujinti jūsų paskyrą vietinėje sistemoje. Atsiprašome.';
$string['notinxmlrpcserver'] = 'Bandoma pasiekti „MNet“ nuotolinį klientą ne per XMLRPC serverio vykdymo laiką';
$string['notmoodleapplication'] = 'ĮSPĖJIMAS: tai ne „Moodle“ taikomoji programa, todėl kai kurie tikrinimo metodai gali veikti netinkamai.';
$string['notpermittedtojump'] = 'Neturite teisių pradėti nuotolinio seanso iš šio „Moodle“ serverio.';
$string['notpermittedtojumpas'] = 'Jūs galite pradėti nuotolinę sesiją kai esate prisijungęs kaip kitas naudotojas';
$string['notpermittedtoland'] = 'Neturite teisių pradėti nuotolinio seanso.';
$string['off'] = 'Išjungta';
$string['on'] = 'Įjungta';
$string['options'] = 'Parinktys';
$string['peerprofilefielddesc'] = 'Čia galite perrašyti visuotinius parametrus, pagal kuriuos siunčiami ir importuojami profilio laukai, kai sukuriami nauji naudotojai.';
$string['permittedtransports'] = 'Leidžiami transportavimai';
$string['phperror'] = 'Dėl vidinės PHP klaidos neleidžiama atlikti jūsų užklausos.';
$string['position'] = 'Vieta';
$string['postrequired'] = 'Norint panaikinti šią funkciją reikalinga POST užklausa.';
$string['privacy:metadata'] = 'MNet papildinys nesaugo jokių asmeninių duomenų.';
$string['profileexportfields'] = 'Siųstini laukai';
$string['profilefielddesc'] = 'Čia galite konfigūruoti sąrašą profilio laukų, kurie buvo išsiųsti ir gauti per „MNet“ sukūrus arba atnaujinus naudotojų paskyras. Taip pat galite perrašyti pagal kiekvieną „MNet“ lygiavertį elementą. Atminkite, kad šie laukai visada yra siunčiami ir nėra pasirinktiniai: {$a}.';
$string['profilefields'] = 'Profilio laukai';
$string['profileimportfields'] = 'Importuotini laukai';
$string['promiscuous'] = 'Įvairu';
$string['publickey'] = 'Viešasis raktas';
$string['publickey_help'] = 'Viešasis raktas automatiškai gaunamas iš nuotolinio serverio.';
$string['publickeyrequired'] = 'Jūs turite pateikti viešąjį raktą';
$string['publish'] = 'Publikuoti';
$string['reallydeleteserver'] = 'Ar tikrai norite naikinti serverį?';
$string['receivedwarnings'] = 'Gauti šie įspėjimai';
$string['recordnoexists'] = 'Įrašo nėra.';
$string['reenableserver'] = 'Ne – pasirinkite šią parinktį norėdami iš naujo įjungti šį serverį.';
$string['registerallhosts'] = 'Registruoti visus pagrindinius kompiuterius (mišrus režimas)';
$string['registerallhostsexplain'] = 'Galite pasirinkti registruoti visus pagrindinius kompiuterius, bandančius prie jūsų jungtis automatiškai. Tai reiškia, kad  jūsų pagrindinių kompiuterių sąraše bus matomas bet kurios „MNet“ svetainės, kuri prie jūsų jungiasi ir prašo viešojo rakto, įrašas.<br />Apačioje galite pasirinkti konfigūruoti visų pagrindinių kompiuterių paslaugas, o čia įjungę kai kurias paslaugas galėsite teikti paslaugas į bet kurį nuotolinį serverį beatodairiškai.';
$string['registerhostsoff'] = 'Registruoti visus pagrindinius kompiuterius, kurie šiuo metu <b>išjungti</b>';
$string['registerhostson'] = 'Visų pagrindinių kompiuterių registras šiuo metu <b>įjungtas</b>';
$string['remotecourses'] = 'Nuotoliniai kursai';
$string['remotehost'] = 'Nuotolinis pagrindinis kompiuteris';
$string['remotehosts'] = 'Nuotoliniai pagrindiniai kompiuteriai';
$string['remoteuser'] = 'Nuotolinis naudotojas {$a->remotetype}';
$string['remoteuserinfo'] = 'Profilis iškviestas iš <a href="{$a->remoteurl}">{$a->remotename}</a>';
$string['requiresopenssl'] = 'Dirbant tinkle reikalingas plėtinys „OpenSSL“';
$string['restore'] = 'Atkurti';
$string['returnvalue'] = 'Grąžinti reikšmę';
$string['reviewhostdetails'] = 'Peržiūrėti pagrindinio kompiuterio išsamią informaciją';
$string['reviewhostservices'] = 'Peržiūrėti pagrindinio kompiuterio paslaugas';
$string['selectaccesslevel'] = 'Iš sąrašo pasirinkite prieigos lygį.';
$string['selectahost'] = 'Pasirinkite nuotolinį pagrindinį kompiuterį.';
$string['service'] = 'Paslaugos pavadinimas';
$string['serviceid'] = 'Paslaugos ID';
$string['servicesavailableonhost'] = 'Paslaugos prieinamos {$a}';
$string['serviceswepublish'] = '{$a} mūsų publikuojamos paslaugos.';
$string['serviceswesubscribeto'] = '{$a} esančios mūsų prenumeruojamos paslaugos.';
$string['settings'] = 'Parametrai';
$string['showlocal'] = 'Rodyti vietinius naudotojus';
$string['showremote'] = 'Rodyti nuotolinius naudotojus';
$string['ssl_acl_allow'] = 'SSO ACL: leisti naudotoją {$a->user} iš {$a->host}.';
$string['ssl_acl_deny'] = 'SSO ACL: drausti naudotoją {$a->user} iš {$a->host}.';
$string['sslverification'] = 'SSL patvirtinimas';
$string['sslverification_help'] = 'Ši parinktis leidžia sukonfigūruoti saugos lygį, kai prisijungiate prie lygiaverčio kompiuterio naudojant HTTPS.

* Nėra: nėra saugumo lygio
* Patvirtinti tik pagrindinį kompiuterį: patvirtina SSL sertifikato domeną
* Patvirtinti pagrindinį kompiuterį ir lygiavertį ryšį (rekomenduojama): patvirtina domeną ir SSL sertifikato išdavėją';
$string['ssoaccesscontrol'] = 'SSO prieigos valdymas';
$string['ssoacldescr'] = 'Naudokite šį puslapį norėdami suteikti / uždrausti konkrečių naudotojų prieigą iš nuotolinių „MNet“ pagrindinių kompiuterių. Tai veikia, kai nuotoliniams naudotojams siūlote SSO paslaugas. Norėdami valdyti <em>vietos</em> naudotojų galimybę jungtis tarptinkliniu ryšiu prie kitų „MNet“ pagrindinių kompiuterių, naudokite vaidmenų sistemą ir suteikite jiems <em>mnetlogintoremote</em> galimybę.';
$string['ssoaclneeds'] = 'Kad veiktų ši funkcija, turite įjungti parinktį Darbas tinkle ir „MNet“ autentifikavimo papildinį.';
$string['strict'] = 'Griežta';
$string['subscribe'] = 'Prenumeruoti';
$string['system'] = 'Sistema';
$string['testclient'] = '„MNet“ testo klientas';
$string['testtrustedhosts'] = 'Tikrinti adresą';
$string['testtrustedhostsexplain'] = 'Norėdami pamatyti, ar tai patikimas pagrindinis kompiuteris, įveskite IP adresą.';
$string['theypublish'] = 'Jie publikuoja';
$string['theysubscribe'] = 'Jie prenumeruoja';
$string['transport_help'] = 'Šiuos parinktys yra abipusės, todėl naudoti pasirašytą SSL sertifikatą galite reikalauti tik nuotolinio pagrindinio kompiuterio, jei jūsų serveris taip pat turi pasirašytą SSL sertifikatą.';
$string['trustedhosts'] = 'XML-RPC pagrindiniai kompiuteriai';
$string['trustedhostsexplain'] = '<p>Patikimų pagrindinių kompiuterių mechanizmas leidžia konkretiems kompiuteriams vykdyti skambučius per XML-RPC į bet kurią „Moodle“ API dalį. Tai galima naudojant scenarijus, skirtus „Moodle“ veikimui valdyti, tačiau įjungta ši parinktis gali būti labai pavojinga. Jei abejojate, palikite ją išjungtą.</p> <p><strong>To nereikia naudojant standartines „MNet“ funkcijas.</strong> Įjunkite ją tik jei tikrai žinote, ką darote.</p> <p>Norėdami įjungti, įveskite IP adresų arba tinklų sąrašą, po vieną kiekvienoje eilutėje. Keletas pavyzdžių:</p> Jūsų vietos pagrindinis kompiuteris:<br />127.0.0.1<br />Jūsų vietos pagrindinis kompiuteris (su tinklo bloku):<br />127.0.0.1/32<br />Tik pagrindinis kompiuteris, kurio IP adresas 192.168.0.7:<br />192.168.0.7/32<br />Bet kuris pagrindinis kompiuteris, kurio IP adresas nuo 192.168.0.1 iki 192.168.0.255:<br />192.168.0.0/24<br />Visiškai bet kuris pagrindinis kompiuteris:<br />192.168.0.0/0<br />Aišku, paskutinis pavyzdys nėra <strong>rekomenduojama</strong> konfigūracija.';
$string['turnitoff'] = 'Išjungti';
$string['turniton'] = 'Įjungti';
$string['type'] = 'Tipas';
$string['unknown'] = 'Nežinoma';
$string['unknownerror'] = 'Vykstant nustatymui įvyko nežinoma klaida.';
$string['usercannotchangepassword'] = 'Negalite čia pakeisti savo slaptažodžio, nes esate nuotolinis naudotojas.';
$string['userchangepasswordlink'] = '<br /> Savo slaptažodį galite pakeisti prisijungę prie savo <a href="{$a->wwwroot}/login/change_password.php">{$a->description}</a> teikėjo.';
$string['usernotfullysetup'] = 'Jūsų paskyra neišsami. Grįžkite į <a href="{$a}">savo teikėjo</a> puslapį ir įsitikinkite, kad jūsų profilis užpildytas. Kai tai veiktų, gali prireikti atsijungti ir vėl prisijungti.';
$string['usersareonline'] = 'Įspėjimas. Šiuo metu iš šio serverio prie jūsų svetainės yra prisijungusių naudotojų: {$a}.';
$string['validated_by'] = 'Tai patikrinta tinklo: <code>{$a}</code>';
$string['verifyhostandpeer'] = 'Patvirtinti tik prieglobą ir lygiavertę';
$string['verifyhostonly'] = 'Patvirtinti tik prieglobą';
$string['verifysignature-error'] = 'Parašo patikrinti nepavyko, nes įvyko klaida.';
$string['verifysignature-invalid'] = 'Parašo patikrinti nepavyko. Atrodo, kad ši mokamoji krova buvo pasirašyta ne jūsų.';
$string['version'] = 'Versija';
$string['warning'] = 'Įspėjimas';
$string['wrong-ip'] = 'Jūsų IP adresas nesutampa su mūsų turimu įrašytu.';
$string['xmlrpc-missing'] = 'Kad galėtumėte naudoti šią funkciją, jūsų PHP komponavimo versijoje turi būti įdiegtas XML-RPC.';
$string['yourhost'] = 'Jūsų pagrindinis kompiuteris';
$string['yourpeers'] = 'Jūsų lygiaverčiai elementai';
