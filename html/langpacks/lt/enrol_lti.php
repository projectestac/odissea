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
 * Strings for component 'enrol_lti', language 'lt', version '4.5'.
 *
 * @package     enrol_lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcontent'] = 'Pridėti turinį';
$string['adddeployment:deploymentid'] = 'Diegimo ID';
$string['adddeployment:deploymentid_help'] = 'Kiekvienam įrankio (šios svetainės) diegimui platformoje bus priskirtas diegimo ID, kuris yra unikalus registracijai. Diegimo ID turi būti užregistruotas įrankyje (šioje svetainėje), kad būtų galima paleisti atitinkamą įrankį.';
$string['adddeployment:invaliddeploymentiderror'] = 'Neteisingas dislokacijos ID. Šios programos registracijos dislokacijos ID jau yra.';
$string['adddeployment:name'] = 'Diegimo pavadinimas';
$string['addtocourse'] = 'Pridėti į kursą';
$string['addtogradebook'] = 'Pridėti į įvertinimų knygelę';
$string['allowframeembedding'] = 'Pastaba: rekomenduojama įjungti svetainės administravimo nustatymą „Leisti rėmelių įterpimą“, kad įrankiai būtų rodomi rėmelyje, o ne naujame lange.';
$string['authltimustbeenabled'] = 'Pastaba: Šiam papildiniui taip pat reikia įjungti LTI autentifikavimo papildinį.';
$string['cartridgeurl'] = 'Cartridge URL';
$string['cookiesarerequired'] = 'Jūsų naršyklė blokuoja slapukus';
$string['copiedtoclipboard'] = '{$a} nukopijuotas į iškarpinę';
$string['copytoclipboard'] = 'Nukopijuoti į iškarpinę';
$string['couldnotestablishproxy'] = 'Nepavyko sukurti įgaliotojo serverio su vartotoju.';
$string['customproperties'] = 'Pasirinktinės savybės';
$string['deeplinkingurl'] = 'Giliųjų nuorodų URL';
$string['deletedactivity'] = 'Ištrinta veikla';
$string['deletedactivityalt'] = 'Šio egzemplioriaus bendrinama veikla buvo ištrinta';
$string['deletedactivitydescription'] = 'Šio egzemplioriaus bendrinama veikla buvo ištrinta. Galite pasirinkti kitą veiklą, kurią norite bendrinti, redaguodami egzempliorių arba, jei nebereikia, galite tiesiog ištrinti egzempliorių. Ištrynus egzempliorių, bus pašalintos visos susietos naudotojų registracijos.';
$string['deploymentadd'] = 'Pridėti dislokavimą';
$string['deploymentaddnotice'] = 'Dislokavimas pridėtas';
$string['deploymentdelete'] = 'Ištrinti dislokavimą';
$string['deploymentdeleteconfirm'] = 'Įspėjimas: ištrynus diegimą, visi naudotojai, neteks prieigos prie išteklių nuorodų, susietų su šio įrankio diegimu platformoje. Šių išteklių narių ir įverčių sinchronizavimo paslaugos taip pat bus pašalintos. Ar tikrai norite ištrinti diegimo ID „{$a}“?';
$string['deploymentdeletenotice'] = 'Diegimas ištrintas';
$string['deploymentid'] = 'Diegimo ID';
$string['deployments'] = 'Diegimai';
$string['deploymentsinfo'] = 'Diegimo ID sugeneruoja platforma, kai įrankis pasiekiamas kontekste. Tai gali įvykti registracijos metu arba vėliau, kai įrankis bus prieinamas konkrečiam kursui ar kategorijai. Prieš leidžiant paleidimus iš įrankio diegimo, čia turi būti įvestas diegimo ID.';
$string['details'] = 'Detalės';
$string['editplatformdetails'] = 'Redaguoti išsamią platformos informaciją';
$string['endpointltiversionnotice'] = 'Toliau pateikti įrankio galiniai taškai skirti tik rankinei LTI 1.3 sąrankai. Ankstesnėse versijose (1.1 / 2.0) naudotojams skirtą informaciją galima rasti puslapyje „Paskelbti kaip LTI įrankiį“, kurį galima pasiekti per kursų naršymą.';
$string['enrolenddate'] = 'Pabaigos data';
$string['enrolenddate_help'] = 'Jei įjungta, naudotojai gali pasiekti tik iki šios datos.';
$string['enrolenddateerror'] = 'Registracijos pabaigos data negali būti ankstesnė nei pradžios data';
$string['enrolisdisabled'] = 'Papildinys „Paskelbti kaip LTI įrankį“ išjungtas.';
$string['enrolltiversionincorrect'] = 'Išteklius nesukurtas naudoti per senąją LTI (1.1/2.0 versijos). Kreipkitės į šio įrankio administratorių.';
$string['enrolmentfinished'] = 'Įtraukimas baigtas.';
$string['enrolmentnotstarted'] = 'Įtraukimas dar neprasidėjęs.';
$string['enrolperiod'] = 'Registracijos trukmė';
$string['enrolperiod_help'] = 'Laikas, per kurį galioja registracija, pradedant nuo to momento, kai naudotojas užsiregistruoja iš nuotolinės sistemos. Jei išjungta, registracijos trukmė bus neribota.';
$string['enrolstartdate'] = 'Pradžios data';
$string['enrolstartdate_help'] = 'Jei įjungta, naudotojai gali pasiekti tik nuo šios datos.';
$string['existingregistrationerror'] = 'Šio išdavėjo ir kliento ID registracija jau yra.';
$string['failedrequest'] = 'Užklausa nepavyko. Priežastis: {$a->reason}';
$string['frameembeddingnotenabled'] = 'Norėdami pasiekti įrankį, spustelėkite toliau pateiktą nuorodą.';
$string['gradesync'] = 'Įvertinimo sinchronizacija';
$string['gradesync_help'] = 'Ar įvertinimai iš įrankio siunčiami nuotolinei sistemai (LTI vartotojui).';
$string['incorrecttoken'] = 'Prieigos raktas buvo neteisingas. Patikrinkite URL ir bandykite dar kartą arba susisiekite su šio įrankio administratoriumi.';
$string['invalidexpiredregistrationurl'] = 'Neteisingas arba pasibaigęs registracijos URL. Patikrinkite URL ir bandykite dar kartą.';
$string['invalidrequest'] = 'Užklausa nepavyko';
$string['invalidtoolconsumer'] = 'Neteisingas įrankio naudotojas.';
$string['jwksurl'] = 'JWKS URL';
$string['launchdetails'] = 'Išsami paleidimo informacija';
$string['launchdetails_help'] = 'Norint konfigūruoti įrankį, reikalingas kasetės URL (taip pat vadinamas konfigūracijos URL) ir slaptasis arba paleidimo URL.';
$string['launchurl'] = 'Paleidimo URL';
$string['loginurl'] = 'Inicijuoti prisijungimo URL';
$string['lti13'] = 'LTI Advantage';
$string['lti13launchdetails'] = 'Išsami paleidimo informacija';
$string['lti13launchdetails_help'] = 'Paleidimo URL ir tinkintų ypatybių reikia tik rankiniu būdu konfigūruojant šaltinio nuorodą platformoje. Kur įmanoma, dėstytojai turėtų teikti pirmenybę turinio atrankos (giliųjų nuorodų) procesui, kad būtų sukurtos išteklių nuorodos.';
$string['lti:config'] = 'Konfigūruoti „Paskelbti kaip LTI įrankį“ egzempliorius';
$string['lti:unenrol'] = 'Išregistruoti naudotojus iš kurso';
$string['ltiadvdynregerror:invalidopenidconfigjson'] = 'Gaunant OpenID konfigūraciją iš platformos kilo problema. Rezultatas negalioja JSON. Tai taip pat gali sukelti užblokuotų prieglobų konfigūracija. Įsitikinkite, kad svetainė sukonfigūruota prisijungti prie platformos domeno, ir bandykite dar kartą naudodami naują registracijos URL.';
$string['ltiadvlauncherror:invaliddeployment'] = 'Netinkami paleidimo duomenys arba įrankio konfigūracija. Diegimo nepavyko rasti (diegimo ID: {$a}).';
$string['ltiadvlauncherror:invalidid'] = 'Netinkami paleidimo duomenys. Išteklius „{$a}“ nepasiekiamas arba jo nėra.';
$string['ltiadvlauncherror:invalidregistration'] = 'Netinkami paleidimo duomenys arba įrankio konfigūracija. Nepavyko rasti platformos registracijos (išdavėjas: {$a->platform}, kliento ID: {$a->clientid}).';
$string['ltiadvlauncherror:missingid'] = 'Netinkami paleidimo duomenys. Priskirtas paraiškos laukas „id“ reikalingas norint pradėti veiklą arba išteklių per „LTI Advantage“.';
$string['ltilegacy'] = 'Legacy LTI (1.1/2.0)';
$string['ltilegacydeprecatednotice'] = 'Seni LTI (1.1/2.0) įrankiai nebenaudojami. Dabar turinys turėtų būti bendrinamas naudojant LTI Advantage.';
$string['ltiversion'] = 'LTI versija';
$string['ltiversion_help'] = 'LTI versija, kuri bus naudojama norint pasiekti paskelbtą turinį.

„LTI Advantage“ leidžia skelbti turinį iš anksto užsiregistravusiose platformose, nereikalaujant platformos pakeitimų, kai tik skelbiamas naujas turinys. Saugos sutartis sudaroma tarp platformos ir įrankio.

Pasenusiose versijose (1.1 ir 2.0) reikalaujama, kad naudotojui būtų sukurta nauja įrankio registracija kiekvienai naujai paskelbto turinio daliai, nes kiekviena paskelbto turinio dalis turi savo saugos sutartį su naudotojo svetaine ir turi būti nustatyta pagal atvejį atvejo pagrindu.';
$string['managedeployments'] = 'Tvarkyti dislokavimus';
$string['maxenrolled'] = 'Maksimalus užsiregistravusių naudotojų skaičius';
$string['maxenrolled_help'] = 'Didžiausias nuotolinių naudotojų, galinčių pasiekti įrankį, skaičius. Jei nustatyta į nulį, užsiregistravusių naudotojų skaičius neribojamas.';
$string['maxenrolledreached'] = 'Pasiektas maksimalus nuotolinių naudotojų, kuriems leidžiama pasiekti įrankį, skaičius.';
$string['membersync'] = 'Naudotojų sinchronizacija';
$string['membersync_help'] = 'Ar suplanuota užduotis sinchronizuoja nuotolinėje sistemoje užsiregistravusius naudotojus su registracija į šį kursą, prireikus sukuria kiekvienam nuotoliniam naudotojui paskyrą ir prireikus juos užregistruoja arba išregistruoja.

Jei nustatyta į ne, tuo metu, kai nuotolinis naudotojas pasiekia įrankį, jam bus sukurta paskyra ir jie bus automatiškai užregistruoti.';
$string['membersyncmode'] = 'Naudotojo sinchronizavimo režimas';
$string['membersyncmode_help'] = 'Ar nuotoliniai naudotojai turėtų būti užregistruoti ir (arba) išregistruoti iš šio kurso.';
$string['membersyncmodeenrolandunenrol'] = 'Užregistruoti naujus ir išregistruoti trūkstamus naudotojus';
$string['membersyncmodeenrolnew'] = 'Užregistruoti naujus naudotojus';
$string['membersyncmodeunenrolmissing'] = 'Išregistruoti trūkstamus naudotojus';
$string['moodle'] = 'Moodle';
$string['nodeployments'] = 'Įrankių diegimų nerasta';
$string['nopublishedcontent'] = 'Jokie ištekliai ar veiklos dar nepaskelbti';
$string['noregisteredplatforms'] = 'Nėra registruotų platformų';
$string['notoolsprovided'] = 'Jokių įrankių nesuteikiama';
$string['opensslconfiginvalid'] = 'Naudojant LTI 1.3 reikia sukonfigūruoti galiojantį openssl.cnf failą, kuris būtų pasiekiamas jūsų interneto serveriui. Norėdami sukonfigūruoti ir įjungti šios svetainės openssl, susisiekite su svetainės administratoriumi.';
$string['opentool'] = 'Atvirieji įrankiai';
$string['platformdetails'] = 'Platformos detalės';
$string['platformdetailsinfo'] = 'Kai įrankis bus nustatytas platformoje, norint užbaigti registraciją, čia turi būti įrašyta išsami informacija iš platformos.
<ul>
<li>Dinaminės registracijos atveju ši informacija bus nustatyta automatiškai ir nereikia atlikti jokių papildomų pakeitimų.</li>
<li>Jei registruojama rankiniu būdu, ši informacija turi būti rankiniu būdu nukopijuota iš platformos.</li>
</ul>';
$string['pluginname'] = 'Paskelbti kaip LTI įrankį';
$string['pluginname_desc'] = 'Papildinys „Paskelbti kaip LTI įrankį“ kartu su LTI autentifikavimo įskiepiu leidžia nuotoliniams naudotojams pasiekti pasirinktus kursus ir veiklą. Kitaip tariant, Moodle veikia kaip LTI įrankių tiekėjas.';
$string['privacy:metadata:enrol_lti_users'] = 'Naudotojų, užsiregistravusių per LTI teikėją, sąrašas';
$string['privacy:metadata:enrol_lti_users:lastaccess'] = 'Laikas, kai naudotojas paskutinį kartą lankėsi kurse';
$string['privacy:metadata:enrol_lti_users:lastgrade'] = 'Paskutinis naudotojo įvertinimas, kuris buvo įrašytas';
$string['privacy:metadata:enrol_lti_users:timecreated'] = 'Laikas, kai naudotojas buvo įregistruotas';
$string['privacy:metadata:enrol_lti_users:userid'] = 'Naudotojo ID';
$string['provisioningmode'] = 'Atidėjimų režimas';
$string['provisioningmode_help'] = 'Šis nustatymas numato, kaip paskyros tvarkomos pirmą kartą paleidus. Palaikomi keli režimai:
<ul>
<li>Tik naujos paskyros (automatinis). Naudotojams, paleidžiantiems iš platformos, paskyros bus sukurtos automatiškai. Tai yra numatytasis besimokančiųjų paleidimų nustatymas.</li>
<li>Esamos ir naujos paskyros (raginimas). Naudotojas galės pasirinkti, ką daryti. Jis gali nuspręsti susieti esamą paskyrą arba sukurti naują paskyrą. Tai lanksčiausia parinktis ir numatytoji dėstytojų paleidimo parinktis.</li>
<li>Tik esamos paskyros (raginimas). Naudotojo bus paprašyta susieti esamą paskyrą ir negalės pasiekti įrankio išteklių to nepadaręs.</li>
</ul>';
$string['provisioningmodestudentlaunch'] = 'Besimokantysis pirmą kartą paleidžia aprūpinimo režimą';
$string['provisioningmodeteacherlaunch'] = 'Dėstytojas pirmą kartą paleidžia aprūpinimo režimą';
$string['publishedcontent'] = 'Published content';
$string['publishedcontent_help'] = 'Paskelbtas išteklius ar veikla gali būti naudojami registruotose platformose per turinio atrankos (giliojo susiejimo) srautą. Be to, platformoje galima rankiniu būdu sukurti išteklių nuorodą, naudojant paleidimo URL ir pateiktas pasirinktines ypatybes.';
$string['registeredplatforms'] = 'Registruotos platformos';
$string['registeredplatformsltiversionnotice'] = 'Žemiau išvardytos platformos yra užregistruotos LTI 1.3 ryšiui. Ankstesnėse versijose naudotojo registracija nereikalinga.';
$string['registerplatform:accesstokenurl'] = 'Prieigos rakto URL';
$string['registerplatform:accesstokenurl_help'] = 'URL, į kurį įrankis siųs prieigos rakto užklausas. Bus teikiama per platformą.';
$string['registerplatform:authrequesturl'] = 'Autentifikavimo užklausos URL';
$string['registerplatform:authrequesturl_help'] = 'URL, į kurį įrankis išsiųs OpenID Connect autentifikavimo užklausas. Bus teikiama per platformą.';
$string['registerplatform:clientid'] = 'Kliento ID';
$string['registerplatform:clientid_help'] = 'Eilutė, naudojama įrankio registracijai platformoje identifikuoti. Bus teikiama per platformą.';
$string['registerplatform:duplicateregistrationerror'] = 'Netinkamas kliento ID. Šis kliento ID jau užregistruotas pateiktam platformos ID.';
$string['registerplatform:invalidurlerror'] = 'Neteisingas URL. Ar įtraukėte http:// arba https://?';
$string['registerplatform:jwksurl'] = 'Viešojo rakto rinkinio URL';
$string['registerplatform:jwksurl_help'] = 'Viešasis raktų rinkinys arba JWKS URL, naudojamas platformos viešajam raktui gauti. Parūpins platforma.';
$string['registerplatform:name'] = 'Platformos pavadinimas';
$string['registerplatform:name_help'] = 'Trumpas pavadinimas, apibūdinantis platformą. Tai galės būti pakeista bet kuriuo metu.';
$string['registerplatform:platformid'] = 'Platformos ID (išdavėjas)';
$string['registerplatform:platformid_help'] = 'URL, identifikuojantis trečiosios šalies mokymosi platformą. Parūpins platforma.';
$string['registerplatformadd'] = 'Užregistruoti platformą';
$string['registerplatformaddnotice'] = 'Pridėta platformos registracija';
$string['registerplatformdelete'] = 'Ištrinti platformos registraciją';
$string['registerplatformdeleteconfirm'] = 'Ar tikrai norite ištrinti platformos „{$a}“ registraciją? Taip pat bus pašalinti visi šioje registracijoje saugomi įrankių diegimai.';
$string['registerplatformdeletenotice'] = 'Platformos registracija ištrinta';
$string['registerplatformedit'] = 'Redaguoti registraciją';
$string['registerplatformeditnotice'] = 'Platformos registracija atnaujinta';
$string['registration'] = 'Paskelbta įrankių registracija';
$string['registrationdeeplinklabel'] = 'Pridėti turinį iš {$a}';
$string['registrationdynamic'] = 'Dinaminė registracija';
$string['registrationmanual'] = 'Rankinė registracija';
$string['registrationresourcelinklabel'] = 'Paleisti turinį iš {$a}';
$string['registrationstatus'] = 'Būsena';
$string['registrationstatusactive'] = 'Aktyvu';
$string['registrationstatuspending'] = 'Laukiama';
$string['registrationurl'] = 'Registracijos URL';
$string['registrationurl_help'] = 'Jei naudojamas registracijos URL (taip pat vadinamas tarpinio serverio URL), įrankis sukonfigūruojamas automatiškai.';
$string['registrationurlinfomessage'] = 'Jei platforma palaiko dinaminę registraciją, naudokite toliau pateiktą registracijos URL. Daugiau informacijos apie dinaminę registraciją žr. dokumentacijoje <a href="{$a}">Paskelbtas kaip LTI įrankis</a>.';
$string['remotesystem'] = 'Nuotolinė sistema';
$string['requirecompletion'] = 'Reikalauti užbaigti kursą arba veiklą prieš sinchronizuojant įvertinimą';
$string['returnurlnotset'] = 'Grąžinimo URL nenustatytas.';
$string['roleinstructor'] = 'Vaidmuo dėstytojui';
$string['roleinstructor_help'] = 'Vaidmuo, priskirtas įrankyje nuotoliniam dėstytojui.';
$string['rolelearner'] = 'Vaidmuo besimokančiajam';
$string['rolelearner_help'] = 'Vaidmuo, priskirtas įrankyje nuotoliniam besimokančiąjam.';
$string['secret'] = 'Paslaptis';
$string['secret_help'] = 'Simbolių eilutė, kuri bendrinama su nuotoline sistema (LTI naudotoju), kad būtų suteikta prieiga prie įrankio.';
$string['sharedexternaltools'] = 'Paskelbta kaip LTI įrankiai';
$string['successfulregistration'] = 'Sėkminga registracija';
$string['tasksyncgrades'] = 'Paskelbti kaip LTI įrankio įvertinimo sinchronizavimą';
$string['tasksyncmembers'] = '"Paskelbti kaip LTI įrankį" naudotojų sinchronizacija';
$string['tooldetails'] = 'Įrankio detalės';
$string['toolsprovided'] = 'Paskelbtos priemonės';
$string['toolsprovided_help'] = 'Įrankis gali būti bendrinamas su kita svetaine, pateikiant išsamią paleidimo informaciją arba registracijos URL.';
$string['tooltobeprovided'] = 'Paskelbtinas įrankis';
$string['toolurl'] = 'Įrankio URL';
$string['userdefaultvalues'] = 'Naudotojo numatytosios reikšmės';
$string['viewplatformdetails'] = 'Peržiūrėkite išsamią platformos informaciją';
$string['viewtoolendpoints'] = 'Žiūrėti įrankio galinius taškus';
