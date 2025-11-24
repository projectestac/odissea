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
 * Strings for component 'tool_mobile', language 'lt', version '4.5'.
 *
 * @package     tool_mobile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adodbdebugwarning'] = 'ADOdb derinimas įjungtas. Jis turėtų būti išjungtas išorinio duomenų bazės autentifikavimo arba išorinio duomenų bazės registravimo papildinio nustatymuose.';
$string['androidappid'] = '„Android“ programėlės unikalus identifikatorius';
$string['androidappid_desc'] = 'Šis nustatymas gali būti paliktas kaip numatyta, nebent turite tinkintą „Android“ programėlę.';
$string['apppolicy'] = 'Programos politikos URL';
$string['apppolicy_help'] = 'Programos naudotojams skirtos politikos URL, pateiktas programos puslapyje Apie. Jei laukas paliekamas tuščias, vietoj jo bus naudojamas svetainės politikos URL.';
$string['apprequired'] = 'Ši funkcija pasiekiama tik naudojant „Moodle“ mobiliąją arba darbalaukio programėlę.';
$string['autologinkeygenerationlockout'] = 'Užblokuotas automatinio prisijungimo rakto generavimas. Tarp užklausų turite palaukti {$a} min.';
$string['autologinmintimebetweenreq'] = 'Minimalus laikas tarp automatinio prisijungimo užklausų';
$string['autologinmintimebetweenreq_desc'] = 'Minimalus laikas tarp automatinio prisijungimo užklausų iš mobiliosios programos. Jei programos naudotojų dažnai prašoma įvesti savo kredencialus peržiūrint turinį, įterptą iš svetainės, nustatykite mažesnę reikšmę.';
$string['autologinnotallowedtoadmins'] = 'Automatinis prisijungimas neleidžiamas svetainės administratoriams.';
$string['autologout_desc'] = 'Saugumo sumetimais galite užtikrinti automatinį naudotojų atsijungimą, kai jie palieka arba uždaro programėlę, arba kai ji pereina į foninį režimą. Grįžę į programėlę naudotojai turės iš naujo prisijungti.';
$string['autologoutcustom'] = 'Pasirinktinis laikas po to, kai naudotojai palieka arba uždaro programėlę';
$string['autologoutinmediate'] = 'Iš karto po to, kai naudotojai palieka arba uždaro programėlę.';
$string['autologouttime'] = 'Automatinio at(si)jungimo laikmatis';
$string['cachedef_plugininfo'] = 'Tai išsaugo papildinių su mobiliaisiais priedais sąrašą';
$string['cachedef_subscriptiondata'] = 'Čia saugoma Moodle programėlės prenumeratos informacija.';
$string['clickheretolaunchtheapp'] = 'Spauskite čia, jei programėlė nepasileidžia automatiškai.';
$string['configmobilecssurl'] = 'Mobiliosios programėlės išvaizdos pritaikymas CSS failu';
$string['customlangstrings'] = 'Pasirinktos kalbos eilutės';
$string['customlangstrings_desc'] = 'Čia galima pritaikyti programėlėje rodomus žodžius ir frazes. Įveskite kiekvieną pasirinktą kalbos eilutę naujoje eilutėje formatu: eilutės identifikatorius, pasirinktos kalbos eilutė ir kalbos kodas, atskiriami statmenu simboliu. Pavyzdžiui:
<pre>
mm.user.student|Besimokantieji|lt
mm.user.student|Aprendiz|es
</pre>
Visas eilučių identifikatoriaus sąrašą peržiūrėti galite dokumentacijoje.';
$string['custommenuitems'] = 'Pasirinktinio meniu elementai';
$string['custommenuitems_desc'] = 'Į pagrindinį programos meniu galima įtraukti papildomų elementų, juos nurodant čia. Įveskite kiekvieną pasirinktinį meniu elementą naujoje eilutėje su formatu: elemento tekstu, nuorodos URL, nuorodos atidarymo metodu ir kalbos kodu (neprivaloma, norint rodyti elementą tik nurodytos kalbos naudotojams), atskirtus vertikaliais brūkšniais.

Nuorodų atidarymo būdai yra šie: programėlė (skirta susieti su programėlės palaikoma veikla), inappbrowser (nuorodos atidarymui naršyklėje neišeinant iš programėlės), naršyklė (nuorodos atidarymui įrenginio numatytojoje naršyklėje už programėlės ribų) ir įdėtas (norint rodyti nuorodą iframe naujame programos puslapyje).

Kai elementams trūksta vertimo tam tikra kalba, jie naudos kitas kalbas kaip atsargines kalbas, nebent prie kalbos kodo bus pridėta „_only“.

Pavyzdžiui:
<pre>
Programos pagalba|https://someurl.xyz/help|inappbrowser
Mano pažymiai|https://someurl.xyz/local/mygrades/index.php|embedded|lt
Mis calificaciones|https://someurl.xyz/local/mygrades/index.php|embedded|es
Tai matysite tik anglų kalba|https://someurl.xyz/english|browser|en_only
</pre>';
$string['darkmode'] = 'Tamsus režimas';
$string['disabledfeatures'] = 'Išjungtos funkcijos';
$string['disabledfeatures_desc'] = 'Čia pažymėkite funkcijas, kurias norite išjungti svetainės mobiliojoje programėlėje. Atminkite, kad kai kurios funkcijos jau gali būti išjungtos pagal kitus svetainės nustatymus. Pakeitimų peržiūrai, turite atsijungti ir vėl prisijungti programėlėje.';
$string['displayerrorswarning'] = '"Rodyti derinimo pranešimus" (debugdisplay) įjungtas. Jis turėtų būti išjungtas.';
$string['downloadcourse'] = 'Atsisiųsti kursą';
$string['downloadcourses'] = 'Atsisiųsti kursus';
$string['enablesmartappbanners'] = 'Įjungti programėlės reklamjuostę';
$string['enablesmartappbanners_desc'] = 'Jei įjungta, mobiliosios programėlės reklamjuostė  bus rodoma prieinant prie svetainės iš naršyklės mobiliajame.';
$string['filetypeexclusionlist'] = 'Failų tipų išimčių sąrašas';
$string['filetypeexclusionlist_desc'] = 'Pasirinkite visus failų tipus, kurie nėra skirti naudoti mobiliajame įrenginyje. Tokie failai bus išvardyti kurse, o jei naudotojas bandys juos atidaryti, bus rodomas įspėjimas, kad failo tipas nėra skirtas naudoti mobiliajame įrenginyje. Tada naudotojas gali atšaukti arba nepaisyti įspėjimo ir vis tiek atidaryti failą.';
$string['filetypeexclusionlistplaceholder'] = 'Mobiliųjų failų tipų išskyrimo sąrašas';
$string['forcedurlscheme'] = 'Jei norite leisti per naršyklės langą atidaryti tik tinkintą prekės ženklo programą, čia nurodykite jos URL schemą. Jei norite leisti tik oficialią programą, nustatykite numatytąją reikšmę. Palikite lauką tuščią, jei norite leisti bet kurią programą.';
$string['forcedurlscheme_key'] = 'URL schema';
$string['forcelogout'] = 'Priverstinis atsijungimas';
$string['forcelogout_desc'] = 'Jei įjungta, naudotojai visada bus visiškai atsijungę net perjungdami paskyras. Tada jie turi iš naujo įvesti slaptažodį, kai kitą kartą norės prisijungti prie svetainės.';
$string['getmoodleonyourmobile'] = 'Parsisiųsti mobiliąją programėlę';
$string['h5poffline'] = 'Peržiūrėti H5P turinį neprisijungus';
$string['httpsrequired'] = 'Reikalingas HTTPS';
$string['insecurealgorithmwarning'] = 'Atrodo, kad HTTPS sertifikate naudojamas nesaugus pasirašymo algoritmas (SHA-1). Pabandykite atnaujinti sertifikatą.';
$string['invalidcertificatechainwarning'] = 'Atrodo, kad sertifikatų grandinė neteisinga. Šis sertifikatas gali veikti naršyklėje, bet ne programoje mobiliesiems.';
$string['invalidcertificateexpiredatewarning'] = 'Panašu, kad svetainės HTTPS sertifikato galiojimo laikas baigėsi.';
$string['invalidcertificatestartdatewarning'] = 'Atrodo, kad svetainės HTTPS sertifikatas dar negalioja (su pradžios data ateityje).';
$string['invalidprivatetoken'] = 'Neteisingas privatus prieigos raktas. Ženklas neturi būti tuščias arba perduodamas per GET parametrą.';
$string['invaliduserquotawarning'] = 'Naudotojo kvota (naudotojo kvota) nustatyta kaip netinkamas skaičius. Svetainės saugos nustatymuose turėtų būti nustatytas tinkamas skaičius (sveiko skaičiaus reikšmė).';
$string['iosappid'] = '„iOS" programėlės unikalus identifikatorius';
$string['iosappid_desc'] = 'Nustatymas gali būti paliktas kaip numatyta, nebent turite tinkintą „iOS“ programėlę.';
$string['launchviasiteinbrowser'] = 'Paleisti per svetainę sistemos naršyklėje';
$string['loginintheapp'] = 'Per programėlę';
$string['logininthebrowser'] = 'Per naršyklės langą (SSO papildiniams)';
$string['loginintheembeddedbrowser'] = 'Per įdėtąją naršyklę (SSO papildiniams)';
$string['logoutconfirmation'] = 'Ar tikrai norite atsijungti nuo mobiliosios programėlės savo mobiliuosiuose įrenginiuose? Atsijungę turėsite iš naujo įvesti savo naudotojo vardą ir slaptažodį mobiliojoje programėlėje visuose įrenginiuose, kuriuose esate įdiegę programą.';
$string['mainmenu'] = 'Pagrindinis meniu';
$string['managefiletypes'] = 'Tvarkyti failų tipus';
$string['minimumversion'] = 'Jei nurodyta programos versija (3.8.0 arba naujesnė), bet kurie naudotojai, naudojantys senesnę programos versiją, bus raginami naujovinti savo programą prieš jiems suteikiant prieigą prie svetainės.';
$string['minimumversion_key'] = 'Reikalinga minimali programos versija';
$string['mobileapp'] = 'Mobilioji programėlė';
$string['mobileappearance'] = 'Mobiliųjų išvaizda';
$string['mobileappenabled'] = 'Svetainei įgalinta mobiliųjų programėlių prieiga. <br /><a href="{$a}"> Atsisiųsti mobiliąją programėlę</a>.';
$string['mobileappsubscription'] = 'Moodle programėlės prenumerata';
$string['mobileauthentication'] = 'Mobiliųjų autentifikavimas';
$string['mobilecssurl'] = 'CSS';
$string['mobilefeatures'] = 'Mobiliųjų funkcijos';
$string['mobilenotificationsdisabledwarning'] = 'Pranešimai mobiliuosiuose nėra įjungti. Jie turėtų būti įgalinti pranešimų nustatymuose.';
$string['mobilesettings'] = 'Mobilieji nustatymai';
$string['moodleappsportalfeatureswarning'] = 'Atminkite, kad kai kurios funkcijos gali būti apribotos, atsižvelgiant į jūsų Moodle programos prenumeratą. Norėdami gauti daugiau informacijos, apsilankykite <a href="{$a}" target="_blank">Moodle Apps portale</a>.';
$string['notifications'] = 'Pranešimai';
$string['notificationsactivedevices'] = 'Aktyvūs įrenginiai';
$string['notificationscurrentactivedevices'] = 'Įrenginiai šį mėnesį gauna pranešimus';
$string['notificationsignorednotifications'] = 'Pranešimai neišsiųsti';
$string['notificationslimitreached'] = 'Viršytas mėnesio aktyvių naudotojų įrenginių limitas. Kai kurių naudotojų pranešimai nebus siunčiami. Programos planą rekomenduojama naujovinti <a href="{$a}" target="_blank">Moodle Apps portale</a>.';
$string['notificationsmissingwarning'] = 'Nepavyko gauti Moodle programos pranešimų statistikos. Greičiausiai taip yra todėl, kad svetainėje dar neįjungti mobilieji pranešimai. Galite juos įjungti Site Administration / Messaging / Mobile.';
$string['notificationsnewdevices'] = 'Nauji įrenginiai';
$string['notificationsseemore'] = 'Pastaba: Moodle programėlės naudojimo statistika neskaičiuojama realiuoju laiku. Norėdami pasiekti išsamesnę statistiką, įskaitant ankstesnių mėnesių duomenis, prisijunkite prie <a href="{$a}" target="_blank">Moodle Apps portalo</a>.';
$string['notificationssentnotifications'] = 'Pranešimai išsiųsti';
$string['oauth2identityproviders'] = 'OAuth 2 tapatybės teikėjai';
$string['offlineuse'] = 'Naudojimas neprisijungus';
$string['pluginname'] = 'Moodle programėlės įrankiai';
$string['pluginnotenabledorconfigured'] = 'Papildinys neįjungtas arba nesukonfigūruotas.';
$string['privacy:metadata:core_userkey'] = 'Naudotojo raktai, naudojami dabartinio naudotojo automatinio prisijungimo raktui sukurti.';
$string['privacy:metadata:preference:tool_mobile_autologin_request_last'] = 'Paskutinės automatinio prisijungimo rakto užklausos data. Tarp kiekvienos užklausos reikia 6 minučių.';
$string['qrcodedisabled'] = 'Prieiga per QR kodą išjungta';
$string['qrcodeformobileappaccess'] = 'QR kodas prieigai prie mobiliosios programėlės';
$string['qrcodeformobileapploginabout'] = 'Nuskaitykite QR kodą naudojant programą mobiliesiems ir būsite automatiškai prisijungę. QR kodas nustos galioti po {$a}.';
$string['qrcodeformobileappurlabout'] = 'Nuskaitykite QR kodą naudodami programą mobiliesiems, kad programėlėje užpildytumėte svetainės URL.';
$string['qrcodetype'] = 'Prieiga prie QR kodo';
$string['qrcodetype_desc'] = 'Gali būti pateiktas QR kodas, kurį mobiliosios programėlės naudotojai galėtų nuskaityti. Tai gali būti naudojama norint užpildyti svetainės URL arba kai svetainė yra apsaugota naudojant HTTPS, kad naudotojas automatiškai prisijungtų neįvesdamas naudotojo vardo ir slaptažodžio.';
$string['qrcodetypelogin'] = 'QR kodas su automatiniu prisijungimu';
$string['qrcodetypeurl'] = 'QR kodas su svetainės URL';
$string['qrkeyttl'] = 'QR autentifikavimo rakto trukmė';
$string['qrkeyttl_desc'] = 'Laikotarpis, kurį galioja automatinio prisijungimo QR kodas.';
$string['qrsameipcheck'] = 'QR autentifikavimo ta pati IP patikra';
$string['qrsameipcheck_desc'] = 'Ar naudotojai turi naudoti tą patį tinklą ir generuodami, ir nuskaitydami prisijungimo QR kodą. Išjunkite jį tik tuo atveju, jei naudotojai praneša apie QR prisijungimo problemas.';
$string['qrsiteadminsnotallowed'] = 'Saugumo sumetimais svetainės administratoriams arba jei esate prisijungę kito naudotojo vardu, prisijungti naudojant QR kodą neleidžiama.';
$string['readingthisemailgettheapp'] = 'Ar skaitote tai el. laiške? <a href="{$a}">Atsisiųskite programą mobiliesiems ir gaukite pranešimus savo mobiliajame įrenginyje</a>.';
$string['remoteaddons'] = 'Nuotoliniai papildiniai';
$string['responsivemainmenuitems'] = 'Reaguojantys meniu elementai';
$string['scanqrcode'] = 'Nuskaityti QR kodą';
$string['selfsignedoruntrustedcertificatewarning'] = 'Atrodo, kad HTTPS sertifikatas yra pasirašytas savarankiškai arba nepatikimas. Programėlė mobiliesiems veiks tik su patikimomis svetainėmis. Norėdami diagnozuoti problemą, naudokite bet kurį internetinį SSL tikrintuvą. Jei jis rodo, kad jūsų sertifikatas yra geras, galite nepaisyti šio įspėjimo.';
$string['setuplink'] = 'Programėlės atsisiuntimo puslapis';
$string['setuplink_desc'] = 'Puslapio URL su nuoroda atsisiųsti mobiliąją programėlę iš „App Store“ ir „Google Play“. Programos atsisiuntimo puslapio nuoroda rodoma svetainės poraštėje ir naudotojo profilyje. Palikite tuščią, kad nuoroda nebūtų rodoma.';
$string['smartappbanners'] = 'Programėlės reklamjuostės';
$string['subscription'] = 'Prenumerata';
$string['subscriptioncreated'] = 'Pradžios data';
$string['subscriptionerrorrequest'] = 'Bandant gauti Moodle programos prenumeratos informaciją įvyko netikėta klaida.';
$string['subscriptionexpiration'] = 'Galiojimo data';
$string['subscriptionfeaturenotapplied'] = 'Ši funkcija sukonfigūruota jūsų svetainėje, bet neįtraukta į jūsų Moodle programos planą. Taigi nustatymas neturės jokios įtakos.';
$string['subscriptionfeatures'] = 'Prenumeratos ypatybės';
$string['subscriptionlimitsurpassed'] = 'Viršyta prenumeratos riba';
$string['subscriptionregister'] = 'Norėdami gauti išsamios informacijos apie įvairius programų planus ir pasiekti Moodle programos naudojimo statistiką, apsilankykite <a href="{$a}" target="_blank">Moodle Apps portale</a>.';
$string['subscriptionsseemore'] = 'Pastaba: rodoma informacija neatnaujinama realiuoju laiku. Gali tekti atsijungti ir vėl prisijungti, kad pamatytumėte naujinimus. Norėdami gauti informacijos apie programos plano naujovinimą, prisijunkite prie <a href="{$a}" target="_blank">Moodle Apps portalo</a>.';
$string['switchaccount'] = 'Perjungti paskyrą';
$string['typeoflogin'] = 'Prisijungimo tipas';
$string['typeoflogin_desc'] = 'Jei svetainėje naudojamas SSO autentifikavimo metodas, tuomet pasirinkite per naršyklės langą arba per įterptą naršyklę. Įterptoji naršyklė suteikia geresnę naudotojų patirtį, tačiau ji neveikia su visais SSO papildiniais.';
$string['viewqrcode'] = 'Žiūrėti QR kodą';
