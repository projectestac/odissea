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
 * Strings for component 'antivirus', language 'lt', version '4.5'.
 *
 * @package     antivirus
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actantivirushdr'] = 'Prieinami antivirusinės programos papildiniai';
$string['antiviruscommonsettings'] = 'Įprasti antivirusinės nustatymai';
$string['antiviruses'] = 'Antivirusinės programos papildiniai';
$string['antivirussettings'] = 'Valdyti antivirusinės programos įskiepius';
$string['configantivirusplugins'] = 'Prašome pasirinkti antivirusinės programos įskiepius, kuriuos norite naudoti ir išdėstykite juos taikomumo tvarka.';
$string['dataerrordesc'] = 'Įvyko duomenų nuskaitymo klaida.';
$string['dataerrorname'] = 'Duomenų skenerio klaida';
$string['datainfecteddesc'] = 'Aptikti užkrėsti duomenys.';
$string['datainfectedname'] = 'Duomenys užkrėsti';
$string['datastream'] = 'Duomenys';
$string['emailadditionalinfo'] = 'Papildoma informacija, grąžinta iš viruso variklio:';
$string['emailauthor'] = 'Įkėlė:';
$string['emailcontenthash'] = 'Turinio maiša:';
$string['emailcontenttype'] = 'Turinio tipas:';
$string['emaildate'] = 'Įkėlimo data:';
$string['emailfilename'] = 'Failo pavadinimas:';
$string['emailfilesize'] = 'Failo dydis:';
$string['emailgeoinfo'] = 'Geografinė padėtis:';
$string['emailinfectedfiledetected'] = 'Aptiktas užkrėstas failas';
$string['emailipaddress'] = 'IP adresas:';
$string['emailreferer'] = 'Referentas:';
$string['emailreport'] = 'Ataskaita:';
$string['emailscanner'] = 'Skaitytuvas:';
$string['emailscannererrordetected'] = 'Įvyko skaitytuvo klaida';
$string['emailsubject'] = '{$a} :: „ClamAV“ pranešimas';
$string['enablequarantine'] = 'Įgalinti karantiną';
$string['enablequarantine_help'] = 'Jei įjungta, visi failai, kurie aptikti kaip virusai, bus patalpinti į karantino aplanką ([dataroot]/{$a}), kad būtų galima vėliau patikrinti. Įkėlimas į Moodle nepavyks. Jei naudojate kokių nors failų sistemos lygio virusų nuskaitymą, karantino aplankas turėtų būti pašalintas iš antivirusinės patikros, kad nebūtų aptikti karantinuoti failai.';
$string['fileerrordesc'] = 'Įvyko failo nuskaitymo klaida.';
$string['fileerrorname'] = 'Failų skaitytuvo klaida';
$string['fileinfecteddesc'] = 'Aptiktas užkrėstas failas.';
$string['fileinfectedname'] = 'Failas užkrėstas';
$string['notifyemail'] = 'Antivirusinės įspėjimas el. paštu';
$string['notifyemail_help'] = 'Pašto adresas, skirtas pranešimams apie aptiktą virusą. Jei paliksite tuščią, visiems svetainės administratoriams bus siunčiami pranešimai.';
$string['notifylevel'] = 'Pranešimo lygis';
$string['notifylevel_help'] = 'Skirtingų lygių informacija, apie kurią norite gauti pranešimus';
$string['notifylevelerror'] = 'Aptiktos grėsmės ir skaitytuvo klaidos';
$string['notifylevelfound'] = 'Tik aptiktos grėsmės';
$string['privacy:metadata'] = 'Antivirusinė sistema nesaugo jokių asmeninių duomenų.';
$string['quarantinedfiles'] = 'Antivirusinės karantinuoti failai';
$string['quarantinedisabled'] = 'Karantinas išjungtas. Failas nėra saugomas.';
$string['quarantinetime'] = 'Maksimalus karantino laikas';
$string['quarantinetime_desc'] = 'Karantine esantys failai, senesni nei nurodytas laikotarpis, bus pašalinti.';
$string['taskcleanup'] = 'Išvalyti karantine esančius failus.';
$string['threshold'] = 'Būsenos patikrinimo slenkstis';
$string['threshold_desc'] = 'Kiek tikrinti atgal, palyginti su ankstesniais rezultatais, ar nėra klaidų ir pan., kaip nurodyta {$a}.';
$string['unknown'] = 'Nežinomas';
$string['virusfound'] = '{$a->item} buvo nuskaitytas virusų tikrintuvo ir nustatyta, kad jis užkrėstas!';
