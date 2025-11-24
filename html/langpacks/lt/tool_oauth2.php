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
 * Strings for component 'tool_oauth2', language 'lt', version '4.5'.
 *
 * @package     tool_oauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptrisk'] = 'Suprantu, kad el. pašto patvirtinimo išjungimas gali būti saugumo problema.';
$string['acceptrisk_help'] = 'El. pašto patvirtinimo išjungimas gali leisti naudotojui patvirtinti kito naudotojo tapatybę.';
$string['authconfirm'] = 'Šis veiksmas suteiks nuolatinę API prieigą prie Moodle autentifikuotai paskyrai. Tai skirta naudoti kaip sistemos paskyra Moodle priklausantiems failams tvarkyti.';
$string['authconnected'] = 'Sistemos paskyra dabar prijungta prieigai neprisijungus';
$string['authnotconnected'] = 'Sistemos paskyra nebuvo prijungta prieigai neprisijungus';
$string['clever_service'] = 'Gudrus';
$string['configured'] = 'Sukonfigūruota';
$string['configuredstatus'] = 'Sukonfigūruota';
$string['connectsystemaccount'] = 'Prisijungti prie sistemos paskyros';
$string['createfromtemplate'] = 'Sukurti „OAuth 2“ paslaugą naudojant šabloną';
$string['createfromtemplatedesc'] = 'Pasirinkite vieną iš toliau pateiktų „OAuth 2“ paslaugų šablonų, kad sukurtumėte „OAuth“ paslaugą su galiojančia vieno iš žinomų paslaugų tipų konfigūracija. Taip bus sukurta „OAuth 2“ paslauga su visais tinkamais galutiniais taškais ir parametrais, reikalingais autentifikavimui, tačiau vis tiek turėsite įvesti naujos paslaugos kliento ID ir paslaptį, kad galėtumėte tai naudoti.';
$string['createnewendpoint'] = 'Sukurti naują išleidėjo „{$a}“ galinį tašką';
$string['createnewservice'] = 'Sukurti naują paslaugą:';
$string['createnewuserfieldmapping'] = 'Sukurti naują naudotojo lauko susiejimą išdavėjui „{$a}“';
$string['custom_service'] = 'Pasirinktinis';
$string['deleteconfirm'] = 'Ar tikrai norite ištrinti tapatybės išdavėją „{$a}“? Visi papildiniai, pagrįsti šiuo leidėju, nustos veikti.';
$string['deleteendpointconfirm'] = 'Ar tikrai norite ištrinti išdavėjo „{$a->issuer}“ galinį tašką „{$a->endpoint}“? Visi papildiniai, besiremiantys šiuo galutiniu tašku, nustos veikti.';
$string['deleteuserfieldmappingconfirm'] = 'Ar tikrai norite ištrinti išdavėjo „{$a}“ naudotojo lauko susiejimą?';
$string['discovered'] = 'Paslauga sėkmingai aptikta';
$string['discovered_help'] = 'Atradimas reiškia, kad „OAuth 2“ galutiniai taškai gali būti automatiškai nustatyti pagal pagrindinį „OAuth“ paslaugos URL. Ne visos paslaugos turi būti „atrastos“, tačiau jei taip nėra, galinius taškus ir naudotojo susiejimo informaciją reikės įvesti rankiniu būdu.';
$string['discoverystatus'] = 'Atradimas';
$string['editendpoint'] = 'Redaguoti galinį tašką: {$a->endpoint} išdavėjui {$a->issuer}';
$string['editendpoints'] = 'Konfigūruoti galutinius taškus';
$string['editissuer'] = 'Redaguoti tapatybės išdavėją: {$a}';
$string['edituserfieldmapping'] = 'Redaguoti naudotojo lauko susiejimą, skirtą išdavėjui {$a}';
$string['edituserfieldmappings'] = 'Konfigūruoti naudotojo lauko susiejimus';
$string['endpointdeleted'] = 'Galutinis taškas ištrintas';
$string['endpointname'] = 'Pavadinimas';
$string['endpointname_help'] = 'Raktas, naudojamas ieškant šio galutinio taško. Turi baigtis „_endpoint“.';
$string['endpointsforissuer'] = 'Išdavėjo galutiniai taškai: {$a}';
$string['endpointurl'] = 'URL';
$string['endpointurl_help'] = 'Šio galutinio taško URL. Turi būti naudojamas https:// protokolas.';
$string['facebook_service'] = 'Facebook';
$string['google_service'] = 'Google';
$string['imsobv2p1_service'] = 'Open Badges';
$string['issueralloweddomains'] = 'Prisijungimo domenai';
$string['issueralloweddomains_help'] = 'Jei nustatyta, šis nustatymas yra kableliais atskirtas domenų, prie kurių prisijungimas bus ribojamas naudojant šį teikėją, sąrašas.';
$string['issueralloweddomains_link'] = 'OAuth_2_login_domains';
$string['issuerbaseurl'] = 'Paslaugos bazinis URL';
$string['issuerbaseurl_help'] = 'Bazinis URL, naudojamas norint pasiekti paslaugą.';
$string['issuerclientid'] = 'Kliento ID';
$string['issuerclientid_help'] = 'Šio išdavėjo „OAuth“ kliento ID.';
$string['issuerclientsecret'] = 'Kliento paslaptis';
$string['issuerclientsecret_help'] = 'Šio išdavėjo „OAuth“ kliento paslaptis.';
$string['issuerdeleted'] = 'Tapatybės išdavėjas ištrintas';
$string['issuerdisabled'] = 'Tapatybės išdavėjas išjungtas';
$string['issuerenabled'] = 'Tapatybės išdavėjas įjungtas';
$string['issuerimage'] = 'Logo URL';
$string['issuerimage_help'] = 'Vaizdo URL, naudojamas šio leidėjo logotipui rodyti. Gali būti rodomas prisijungimo puslapyje.';
$string['issuerloginpagename'] = 'Prisijungimo puslapyje rodomas vardas';
$string['issuerloginpagename_help'] = 'Jei nurodyta, šis vardas bus naudojamas prisijungimo puslapyje, o ne paslaugos pavadinimas.';
$string['issuerloginparams'] = 'Papildomi parametrai, įtraukti į prisijungimo užklausą.';
$string['issuerloginparams_help'] = 'Kai kurioms sistemoms reikalingi papildomi prisijungimo užklausos parametrai, kad būtų galima nuskaityti pagrindinį naudotojo profilį.';
$string['issuerloginparamsoffline'] = 'Papildomi parametrai, įtraukti į prisijungimo užklausą norint pasiekti neprisijungus.';
$string['issuerloginparamsoffline_help'] = 'Kiekviena OAuth sistema apibrėžia skirtingą būdą, kaip pateikti užklausą dėl prieigos neprisijungus. Pvz. „Google“ reikalauja papildomų parametrų: „access_type=offline&prompt=consent“. Šie parametrai turi būti URL užklausos parametro formatu.';
$string['issuerloginscopes'] = 'Taikymo sritis, įtraukta į prisijungimo užklausą.';
$string['issuerloginscopes_help'] = 'Kai kurioms sistemoms reikia papildomų apimčių prisijungimo užklausai, kad būtų galima skaityti pagrindinį naudotojo profilį. Standartinės su OpenID Connect suderinamos sistemos apimtys yra „atviro profilio el. paštas“.';
$string['issuerloginscopesoffline'] = 'Taikymo sritis, įtraukta į prisijungimo užklausą, kad būtų galima pasiekti neprisijungus.';
$string['issuerloginscopesoffline_help'] = 'Kiekviena OAuth sistema apibrėžia skirtingą prieigos neprisijungus užklausos būdą. Pvz. „Microsoft“ reikalauja papildomos apimties „offline_access“.';
$string['issuername'] = 'Pavadinimas';
$string['issuername_help'] = 'Tapatybės išdavėjo pavadinimas. Gali būti rodomas prisijungimo puslapyje.';
$string['issuerrequireconfirmation'] = 'Reikalauti el. pašto patvirtinimo';
$string['issuerrequireconfirmation_help'] = 'Reikalauti, kad visi naudotojai patvirtintų savo el. pašto adresą, kad galėtų prisijungti naudodami OAuth. Tai taikoma naujai sukurtoms paskyroms, kurios yra prisijungimo proceso dalis arba kai esama Moodle paskyra yra prijungta prie OAuth prisijungimo naudojant atitinkamus el. pašto adresus.';
$string['issuers'] = 'Išleidėjai';
$string['issuersetup'] = 'Išsamios instrukcijos, kaip konfigūruoti įprastas OAuth 2 paslaugas';
$string['issuersetuptype'] = 'Išsamios instrukcijos, kaip nustatyti {$a} OAuth 2 teikėją';
$string['issuershowonloginpage'] = 'Rodyti prisijungimo puslapyje';
$string['issuershowonloginpage_help'] = 'Jei įgalintas OAuth 2 autentifikavimo papildinys, šis prisijungimo išdavėjas bus nurodytas prisijungimo puslapyje, kad naudotojai galėtų prisijungti naudodami šio išdavėjo paskyras.';
$string['issuersmtpsystememail'] = 'SMTP el. paštas';
$string['issuersservicesallow'] = 'Leisti paslaugas';
$string['issuersservicesnotallow'] = 'Neleisti paslaugų';
$string['issuerusedforinternal'] = 'Vidaus paslaugos';
$string['issuerusedforlogin'] = 'Prisijungti';
$string['issuerusein'] = 'Šia paslauga bus naudojamasi';
$string['issuerusein_help'] = 'Jei reikia, OAuth 2 paslaugas galima naudoti vidinėms paslaugoms, prisijungimo puslapyje arba abiem.';
$string['issueruseineverywhere'] = 'Prisijungimo puslapis ir vidinės paslaugos';
$string['issueruseininternalonly'] = 'Tik vidaus paslaugos';
$string['issueruseinloginonly'] = 'Tik prisijungimo puslapis';
$string['linkedin_service'] = 'LinkedIn';
$string['logindisplay'] = 'Prisijungimo puslapyje rodyti kaip';
$string['loginissuer'] = 'Leisti prisijungti';
$string['microsoft_service'] = 'Microsoft';
$string['moodlenet_service'] = 'MoodleNet';
$string['nextcloud_service'] = 'Nextcloud';
$string['notconfigured'] = 'Nesukonfigūruota';
$string['notdiscovered'] = 'Paslaugos aptikimas nepavyko';
$string['notloginissuer'] = 'Neleisti prisijungti';
$string['pluginname'] = 'OAuth 2 paslaugos';
$string['privacy:metadata'] = 'OAuth 2 paslaugų papildinys nesaugo jokių asmeninių duomenų.';
$string['savechanges'] = 'Išsaugoti pakeitimus';
$string['serviceshelp'] = 'Paslaugų teikėjo sąrankos instrukcijos.';
$string['systemaccountconnected'] = 'Sistemos paskyra prijungta';
$string['systemaccountconnected_help'] = 'Sistemos paskyros naudojamos išplėstinėms priedų funkcijoms teikti. Jos reikalingos ne tik prisijungimo funkcijoms, bet ir todėl, kad kiti papildiniai, naudojantys OAuth paslaugą, gali pasiūlyti sumažintą funkcijų rinkinį, jei sistemos paskyra nėra prijungta. Pavyzdžiui, saugyklos negali palaikyti „kontroliuojamų nuorodų“ be sistemos paskyros failo operacijoms atlikti.';
$string['systemaccountnotconnected'] = 'Sistemos paskyra neprijungta';
$string['systemauthstatus'] = 'Sistemos paskyra prijungta';
$string['usebasicauth'] = 'Autentifikuokite prieigos raktų užklausas naudodami HTTP antraštes';
$string['usebasicauth_help'] = 'Siųsdami kliento ID ir slaptažodį su atnaujinimo prieigos rakto užklausa, naudokite HTTP pagrindinio autentifikavimo schemą. Rekomenduojama pagal „OAuth 2“ standartą, bet kai kurie leidėjai gali būti neprieinami.';
$string['userfieldexternalfield'] = 'Išorinio lauko pavadinimas';
$string['userfieldexternalfield_error'] = 'Šiame lauke negali būti HTML.';
$string['userfieldexternalfield_help'] = 'Išorinės OAuth sistemos pateikto lauko pavadinimas.';
$string['userfieldinternalfield'] = 'Vidinis lauko pavadinimas';
$string['userfieldinternalfield_help'] = 'Moodle naudotojo lauko pavadinimas, kuris turėtų būti susietas iš išoriniu lauku.';
$string['userfieldmappingdeleted'] = 'Naudotojo lauko susiejimas ištrintas';
$string['userfieldmappingsforissuer'] = 'Išdavėjo naudotojo laukų susiejimas: {$a}';
