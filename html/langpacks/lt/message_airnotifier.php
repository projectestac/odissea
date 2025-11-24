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
 * Strings for component 'message_airnotifier', language 'lt', version '4.5'.
 *
 * @package     message_airnotifier
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['airnotifier:managedevice'] = 'Tvarkyti įrenginius';
$string['airnotifieraccesskey'] = '"Airnotifier" prieigos raktas';
$string['airnotifierappname'] = '"Airnotifier" programėlės pavadinimas';
$string['airnotifierfielderror'] = 'Pašalinkite tuščius tarpus ar nereikalingus simbolius iš šio lauko: {$a}';
$string['airnotifiermobileappname'] = 'Mobiliosios programėlės pavadinimas';
$string['airnotifierport'] = 'Airnotifier prievadas';
$string['airnotifierurl'] = 'Airnotifier URL';
$string['checkconfiguration'] = 'Patikrinti ir išbandyti tiesioginių pranešimų konfigūraciją';
$string['configairnotifieraccesskey'] = 'Prieigos raktas, skirtas prisijungti prie Airnotifier serverio. Prieigos raktą galite gauti spustelėję toliau pateiktą nuorodą „Prašyti prieigos rakto“ (tik registruotoms svetainėms) arba susikūrę paskyrą <a href="https://apps.moodle.com">Moodle Apps portale</a >.';
$string['configairnotifierappname'] = 'Programos pavadinimo identifikatorius „Airnotifier“.';
$string['configairnotifiermobileappname'] = 'Mobiliosios programos unikalus identifikatorius (dažniausiai kažkas panašaus į com.moodle.moodlemobile).';
$string['configairnotifierport'] = 'Prievadas, naudojamas jungiantis prie airnotifier serverio.';
$string['configairnotifierurl'] = 'Serverio URL, prie kurio reikia prisijungti, norint siųsti tiesioginius pranešimus.';
$string['configured'] = 'Sukonfigūruotas';
$string['deletecheckdevicename'] = 'Ištrinti savo įrenginį: {$a->name}';
$string['deletedevice'] = 'Ištrinti įrenginį. Atminkite, kad programa gali vėl užregistruoti įrenginį. Jei įrenginys vėl pasirodo, išjunkite jį.';
$string['devicetoken'] = 'Įrenginio prieigos raktas';
$string['donotsendnotification'] = 'Visai nesiųsti pranešimų';
$string['enableprocessor'] = 'Įgalinti pranešimus mobiliesiems';
$string['encryptnotifications'] = 'Šifruoti pranešimus';
$string['encryptnotifications_help'] = 'Įgalinti galutinį programėlių pranešimų šifravimą. Kai kurie duomenys gali būti pašalinti iš pranešimų, jei jų neįmanoma užšifruoti.';
$string['encryptprocessing'] = 'Įrenginiams, nepalaikontiems šifravimo';
$string['encryptprocessing_desc'] = 'Norint gauti šifruotus pranešimus, reikia turėti bent "Android 8" arba "iOS 13" ir "Moodle" programėlę 4.2 arba naujesnę versiją.';
$string['errorretrievingkey'] = 'Gaunant prieigos raktą įvyko klaida. Jūsų svetainė turi būti užregistruota, kad galėtumėte naudotis šia paslauga. Jei jūsų svetainė jau užregistruota, pabandykite atnaujinti registraciją. Arba galite gauti prieigos raktą susikūrę paskyrą <a href="https://apps.moodle.com">Moodle Apps portale</a>.';
$string['keyretrievedsuccessfully'] = 'Prieigos raktas buvo sėkmingai nuskaitytas. Norėdami pasiekti Moodle programos naudojimo statistiką, susikurkite paskyrą <a href="https://apps.moodle.com">Moodle Apps portale</a>.';
$string['messageprovidersempty'] = 'Numatytosiose pranešimų nuostatose nėra įjungtų pranešimų mobiliesiems.';
$string['messageproviderslow'] = 'Numatytosiose pranešimų nuostatose įgalinti tik keli pranešimai mobiliesiems.';
$string['moodleappsportallimitswarning'] = 'Atminkite, kad vartotojų įrenginių, kuriems leidžiama gauti pranešimus, skaičius priklauso nuo jūsų Moodle programos prenumeratos. Norėdami gauti daugiau informacijos, apsilankykite <a href="{$a}" target="_blank">Moodle Apps portale</a>.';
$string['nodevices'] = 'Nėra registruotų įrenginių. Įrenginiai bus automatiškai rodomi įdiegus Moodle programėlę ir pridėjus šią svetainę.';
$string['noemailevernotset'] = '$CFG->noemailever išjungtas';
$string['noemaileverset'] = '$CFG->noemailever yra įjungtas config.php. Turite nustatyti šį nustatymą į klaidingą arba jį pašalinti.';
$string['nopermissiontomanagedevices'] = 'Neturite leidimo tvarkyti įrenginių.';
$string['notconfigured'] = '„Airnotifier“ serveris nesukonfigūruotas, todėl tiesioginių pranešimų siųsti negalima.';
$string['notificationsserverconfiguration'] = 'Pranešimų serverio (Airnotifier) konfigūracija';
$string['pluginname'] = 'Mobilusis';
$string['privacy:appiddescription'] = 'Tai yra naudojamos programos identifikatorius.';
$string['privacy:enableddescription'] = 'Jei šiame įrenginyje įjungtas "airnotifier".';
$string['privacy:metadata:date'] = 'Pranešimo išsiuntimo data.';
$string['privacy:metadata:enabled'] = 'Ar įjungtas airnotifier įrenginys.';
$string['privacy:metadata:externalpurpose'] = 'Ši informacija siunčiama į išorinę svetainę, kuri galiausiai bus pristatyta į naudotojo mobilųjį įrenginį.';
$string['privacy:metadata:fullmessage'] = 'Pilna žinutė';
$string['privacy:metadata:notification'] = 'Jeigu ši žinutė yra pranešimas.';
$string['privacy:metadata:smallmessage'] = 'Pranešimo dalis.';
$string['privacy:metadata:subject'] = 'Pranešimo temos eilutė.';
$string['privacy:metadata:tableexplanation'] = 'Čia saugoma Airnotifier įrenginio informacija.';
$string['privacy:metadata:userdeviceid'] = 'ID, susiejantis su naudotojo mobiliuoju įrenginiu';
$string['privacy:metadata:userfromfullname'] = 'Pilnas pranešimą išsiuntusio naudotojo vardas.';
$string['privacy:metadata:userfromid'] = 'Pranešimo autoriaus naudotojo ID.';
$string['privacy:metadata:userid'] = 'Pranešimą išsiuntusio naudotojo ID.';
$string['privacy:metadata:username'] = 'Naudotojo vardas.';
$string['privacy:metadata:usersubsystem'] = 'Šis papildinys yra prijungtas prie naudotojo posistemio.';
$string['privacy:subcontext'] = 'Pranešimas Airnotifier';
$string['requestaccesskey'] = 'Prašyti prieigos rakto';
$string['sendnotificationnotenc'] = 'Siųsti pranešimus be šifruotės';
$string['sendtest'] = 'Siųsti bandomąjį tiesioginį pranešimą į mano įrenginius';
$string['sendtestconfirmation'] = 'Įrenginiams, kuriuos naudojate prisijungdami prie šios svetainės, bus išsiųstas bandomasis tiesioginis pranešimas. Įsitikinkite, kad jūsų įrenginiai yra prijungti prie interneto ir nėra atidaryta mobilioji programėlė (nes tiesioginiai pranešimai rodomi tik tada, kai gaunami fone).';
$string['serverconnectivityerror'] = 'Ši svetainė negali prisijungti prie pranešimų serverio {$a}';
$string['showhide'] = 'Įjungti/išjungti įrenginį.';
$string['sitemustberegistered'] = 'Kad galėtumėte naudoti viešą Airnotifier egzempliorių, jūsų svetainė turi būti užregistruota. Arba galite gauti prieigos raktą susikūrę paskyrą <a href="https://apps.moodle.com">Moodle Apps portale</a>.';
$string['unknowndevice'] = 'Nežinomas įrenginys';
$string['userdevices'] = 'Naudotojo įrenginiai';
$string['view_notification'] = 'Spustelėkite norėdami peržiūrėti';
