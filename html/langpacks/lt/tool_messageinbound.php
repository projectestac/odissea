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
 * Strings for component 'tool_messageinbound', language 'lt', version '4.5'.
 *
 * @package     tool_messageinbound
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['classname'] = 'Klasės pavadinimas';
$string['component'] = 'Komponentas';
$string['configmessageinboundhost'] = 'Serverio adresas, pagal kurį Moodle turėtų tikrinti paštą. Norėdami nurodyti nenumatytąjį prievadą, naudokite  [server]:[port], pvz., mail.example.com:993. Jei prievadas nenurodytas, bus naudojamas numatytasis pašto serverio tipo prievadas.';
$string['defaultexpiration'] = 'Numatytasis adreso galiojimo laikas';
$string['defaultexpiration_help'] = 'Kai tvarkytojas sugeneruoja el. pašto adresą, jis gali būti nustatytas taip, kad po tam tikro laiko automatiškai pasibaigtų, kad jo nebebūtų galima naudoti. Patartina nustatyti galiojimo laiką.';
$string['description'] = 'Aprašymas';
$string['domain'] = 'El. pašto domenas';
$string['edit'] = 'Redaguoti';
$string['edithandler'] = 'Redaguoti {$a} tvarkyklės nustatymus';
$string['editinghandler'] = 'Redaguojama {$a}';
$string['enabled'] = 'Įjungtas';
$string['fixedenabled_help'] = 'Negalite pakeisti šios tvarkyklės būsenos. Taip gali būti todėl, kad tvarkytojo reikia kitiems tvarkytojams.';
$string['fixedvalidateaddress'] = 'Patvirtinti siuntėjo adresą';
$string['fixedvalidateaddress_help'] = 'Negalite pakeisti šios tvarkyklės adreso patvirtinimo. Taip gali būti todėl, kad tvarkytojui reikalingas konkretus nustatymas.';
$string['handlerdisabled'] = 'El. pašto tvarkytojas, su kuriuo bandėte susisiekti, buvo išjungtas. Šiuo metu nepavyko apdoroti pranešimo.';
$string['incomingmailconfiguration'] = 'Gaunamo pašto konfigūracija';
$string['incomingmailserversettings'] = 'Gaunamo pašto serverio nustatymai';
$string['incomingmailserversettings_desc'] = 'Moodle gali prisijungti prie tinkamai sukonfigūruotų IMAP serverių. Čia galite nurodyti nustatymus, naudojamus prisijungiant prie IMAP serverio.';
$string['invalid_recipient_handler'] = 'Jei gaunamas galiojantis pranešimas, bet siuntėjo autentifikuoti nepavyksta, laiškas išsaugomas el. pašto serveryje ir su naudotoju susisiekiama naudojant jo naudotojo profilyje esantį el. pašto adresą. Naudotojui suteikiama galimybė atsakyti, kad patvirtintų pradinio pranešimo autentiškumą.

Šis tvarkytojas apdoroja tuos atsakymus.

Neįmanoma išjungti šios tvarkyklės siuntėjo patvirtinimo, nes naudotojas gali atsakyti iš neteisingo el. pašto adreso, jei jo el. pašto programos konfigūracija yra neteisinga.';
$string['invalid_recipient_handler_name'] = 'Neteisingas siuntėjo tvarkytojas';
$string['invalidrecipientdescription'] = 'Nepavyko autentifikuoti pranešimo „{$a->subject}“, nes jis išsiųstas iš kito el. pašto adreso, nei nurodyta jūsų naudotojo profilyje. Kad pranešimas būtų autentifikuotas, turite atsakyti į šį pranešimą.';
$string['invalidrecipientdescriptionhtml'] = 'Nepavyko autentifikuoti pranešimo „{$a->subject}“, nes jis išsiųstas iš kito el. pašto adreso, nei nurodyta jūsų naudotojo profilyje. Kad pranešimas būtų autentifikuotas, turite atsakyti į šį pranešimą.';
$string['invalidrecipientfinal'] = 'Nepavyko autentifikuoti pranešimo „{$a->subject}“. Patikrinkite, ar savo pranešimą siunčiate iš to paties el. pašto adreso, kaip ir jūsų profilyje.';
$string['mailbox'] = 'Pašto dėžutės pavadinimas';
$string['mailboxconfiguration'] = 'Pašto dėžutės konfigūravimas';
$string['mailboxdescription'] = '[mailbox]+subaddress@[domain]';
$string['mailsettings'] = 'Pašto nustatymai';
$string['message_handlers'] = 'Pranešimų tvarkytojai';
$string['messageinbound'] = 'Įeinantis pranešimas';
$string['messageinboundenabled'] = 'Įgalinti gaunamų laiškų apdorojimą';
$string['messageinboundenabled_desc'] = 'Norint, kad pranešimai būtų išsiųsti su atitinkama informacija, turi būti įjungtas gaunamų laiškų apdorojimas.';
$string['messageinboundgeneralconfiguration'] = 'Bendroji konfigūracija';
$string['messageinboundgeneralconfiguration_desc'] = 'Gaunamų pranešimų apdorojimas leidžia gauti ir apdoroti el. laiškus per Moodle. Tai apima tokias programas kaip atsakymų siuntimas el. paštu į forumo įrašus arba failų įtraukimas į naudotojo privačius failus.';
$string['messageinboundhost'] = 'Gaunamo pašto serveris';
$string['messageinboundhostoauth_help'] = 'OAuth 2 paslauga, skirta pasiekti IMAP serverį naudojant XOAUTH2 autentifikavimą. Jei paslauga dar neegzistuoja, turėsite ją sukurti.';
$string['messageinboundhostpass'] = 'Slaptažodis';
$string['messageinboundhostpass_desc'] = 'Tai slaptažodis, kurį pateiks jūsų paslaugų teikėjas, kad galėtumėte prisijungti prie jūsų el. pašto paskyros.';
$string['messageinboundhostssl'] = 'Naudoti SSL';
$string['messageinboundhostssl_desc'] = 'Kai kurie pašto serveriai palaiko papildomą saugumo lygį šifruodami ryšį tarp Moodle ir jūsų serverio. Rekomenduojame naudoti šį SSL šifravimą, jei jūsų serveris jį palaiko.';
$string['messageinboundhosttype'] = 'Serverio tipas';
$string['messageinboundhostuser'] = 'Naudotojo vardas';
$string['messageinboundhostuser_desc'] = 'Tai naudotojo vardas, kurį suteiks jūsų paslaugų teikėjas, kad galėtumėte prisijungti prie savo el. pašto paskyros.';
$string['messageinboundmailboxconfiguration_desc'] = 'Išsiunčiant pranešimus jie telpa į formatą adresas+duomenys@example.com. Norėdami patikimai generuoti adresus iš Moodle, nurodykite adresą, kurį įprastai naudotumėte prieš @ ženklą ir domeną po @ ženklo atskirai. Pavyzdžiui, pavyzdyje pašto dėžutės pavadinimas būtų „adresas“, o el. pašto domenas būtų „example.com“. Šiuo tikslu turėtumėte naudoti tam skirtą el. pašto paskyrą.';
$string['messageprocessingerror'] = 'Neseniai išsiuntėte el. laišką „{$a->subject}“, bet, deja, jo apdoroti nepavyko.

Išsami informacija apie klaidą pateikta žemiau.

{$a->error}';
$string['messageprocessingerrorhtml'] = '<p>Neseniai išsiuntėte el. laišką „{$a->subject}“, bet, deja, jo nepavyko apdoroti.</p>
<p>Išsami klaidos informacija rodoma toliau.</p>
<p>{$a->error}</p>';
$string['messageprocessingfailed'] = 'El. laiško „{$a->subject}“ apdoroti nepavyko. Klaida yra tokia: „{$a->message}“.';
$string['messageprocessingfailedunknown'] = 'El. laiško „{$a->subject}“ apdoroti nepavyko. Norėdami gauti daugiau informacijos, susisiekite su administratoriumi.';
$string['messageprocessingsuccess'] = '{$a->plain}

Jei nenorite gauti šių pranešimų ateityje, galite redaguoti asmenines pranešimų siuntimo nuostatas naršyklėje atidarę {$a->messagepreferencesurl}.';
$string['messageprocessingsuccesshtml'] = '{$a->html}
<p>Jei nenorite gauti šių pranešimų ateityje, galite <a href="{$a->messagepreferencesurl}">redaguoti asmenines pranešimų siuntimo nuostatas</a>.</p>';
$string['messageprovider:invalidrecipienthandler'] = 'Pranešimas, patvirtinantis, kad gautas pranešimas atėjo iš jūsų';
$string['messageprovider:messageprocessingerror'] = 'Įspėjimas, kai nepavyko apdoroti gaunamo pranešimo';
$string['messageprovider:messageprocessingsuccess'] = 'Patvirtinimas, kad pranešimas buvo sėkmingai apdorotas';
$string['name'] = 'Pavadinimas';
$string['noencryption'] = 'Išjungta – nėra šifravimo';
$string['noexpiry'] = 'Nėra galiojimo pabaigos';
$string['oldmessagenotfound'] = 'Bandėte rankiniu būdu autentifikuoti pranešimą, bet pranešimo nepavyko rasti. Taip gali būti dėl to, kad jis jau buvo apdorotas, arba dėl to, kad pasibaigė pranešimo galiojimo laikas.';
$string['oneday'] = 'Viena diena';
$string['onehour'] = 'Viena valanda';
$string['oneweek'] = 'Viena savaitė';
$string['oneyear'] = 'Vieneri metai';
$string['pluginname'] = 'Gaunamo pranešimo konfigūracija';
$string['privacy:metadata:coreuserkey'] = 'Naudotojo raktai gautam el. laiškui patvirtinti';
$string['privacy:metadata:messagelist'] = 'Pranešimų identifikatorių, kurių patvirtinimas nepavyko ir kuriems reikalingas tolesnis leidimas, sąrašas';
$string['privacy:metadata:messagelist:address'] = 'Adresas, kuriuo buvo išsiųstas el. laiškas';
$string['privacy:metadata:messagelist:messageid'] = 'Žinutės ID';
$string['privacy:metadata:messagelist:timecreated'] = 'Laikas, kai buvo padarytas įrašas';
$string['privacy:metadata:messagelist:userid'] = 'Naudotojo, kuris turi patvirtinti pranešimą, ID';
$string['replysubjectprefix'] = 'Ats:';
$string['requirevalidation'] = 'Patvirtinti siuntėjo adresą';
$string['ssl'] = 'SSL (automatiškai aptikti SSL versiją)';
$string['sslv2'] = 'SSLv2 (priverstinė SSL versija 2)';
$string['sslv3'] = 'SSLv3 (priverstinė SSL versija 3)';
$string['taskcleanup'] = 'Nepatvirtintų gaunamų el. laiškų išvalymas';
$string['taskpickup'] = 'Gaunamo el. pašto paėmimas';
$string['tls'] = 'TLS (TLS; pradėtas per protokolo lygio derybas nešifruotu kanalu; REKOMENDUOJAMAS saugaus ryšio inicijavimo būdas)';
$string['tlsv1'] = 'TLSv1 (tiesioginis ryšys su TLS serverio 1.x versija)';
$string['validateaddress'] = 'Patvirtinti siuntėjo el. pašto adresą';
$string['validateaddress_help'] = 'Kai iš naudotojo gaunamas pranešimas, Moodle bando patvirtinti pranešimą, palygindama siuntėjo el. pašto adresą su el. pašto adresu naudotojo profilyje.

Jei siuntėjas nesutampa, naudotojui siunčiamas pranešimas, patvirtinantis, kad jis tikrai išsiuntė el. laišką.

Jei šis nustatymas išjungtas, siuntėjo el. pašto adresas iš viso nėra tikrinamas.';
