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
 * Strings for component 'enrol_paypal', language 'lt', version '4.5'.
 *
 * @package     enrol_paypal
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Priskirti vaidmenį';
$string['businessemail'] = '„PayPal“ verslo el. paštas';
$string['businessemail_desc'] = 'Jūsų „PayPal“ verslo paskyros el. pašto adresas';
$string['cost'] = 'Registracijos kaina';
$string['costerror'] = 'Registracijos kaina nėra skaitinė';
$string['costorkey'] = 'Pasirinkite vieną iš šių registracijos metodų.';
$string['currency'] = 'Valiuta';
$string['defaultrole'] = 'Numatytasis vaidmens priskyrimas';
$string['defaultrole_desc'] = 'Pasirinkti vaidmenį, kurį reikia priskirti naudotojams atliekant „PayPal“ registraciją';
$string['enrolenddate'] = 'Pabaigos data';
$string['enrolenddate_help'] = 'Jei įjungta, naudotojai gali būti registruojami tik iki šios datos.';
$string['enrolenddaterror'] = 'Registracijos pabaigos data negali būti ankstesnė nei pradžios data';
$string['enrolperiod'] = 'Registracijos laikotarpis';
$string['enrolperiod_desc'] = 'Numatytoji trukmė, kiek galioja registracija. Jei nustatytas nulis, registracijos trukmė pagal numatytuosius nustatymus bus neribota.';
$string['enrolperiod_help'] = 'Laiko trukmė kada  registracija yra įgalinta, pradedant nuo momentai kai naudotojas yra priregistruotas. Kai išjungta, registracijos trukmė neapibrėžta.';
$string['enrolstartdate'] = 'Pradžios data';
$string['enrolstartdate_help'] = 'Jei įjungta, naudotojai gali būti registruoji tik nuo šios datos.';
$string['errdisabled'] = '„PayPal“ registracijos papildinys išjungtas ir neapdoroja mokėjimo pranešimų.';
$string['erripninvalid'] = 'Momentinio mokėjimo pranešimo nepatvirtino PayPal.';
$string['errpaypalconnect'] = 'Nepavyko prisijungti prie {$a->url}, kad būtų patvirtintas momentinio mokėjimo pranešimas: {$a->result}';
$string['expiredaction'] = 'Registracijos galiojimo pabaigos veiksmas';
$string['expiredaction_help'] = 'Pasirinkite veiksmą, kurį norite atlikti, kai baigiasi naudotojo registracijos galiojimo laikas. Atminkite, kad kai kurie naudotojo duomenys ir nustatymai pašalinami iš kurso išregistruojant.';
$string['mailadmins'] = 'Pranešti administratoriui';
$string['mailstudents'] = 'Pranešti besimokantiesiems';
$string['mailteachers'] = 'Pranešti dėstytojams';
$string['messageprovider:paypal_enrolment'] = 'PayPal registracijos žinutės';
$string['nocost'] = 'Nėra kainos, susietos su registracija į šiuos kursus!';
$string['paypal:config'] = 'Konfigūruoti „PayPal“ registracijos egzempliorius';
$string['paypal:manage'] = 'Valdyti įregistruotus naudotojus';
$string['paypal:unenrol'] = 'Išregistruoti naudotojus iš kursų';
$string['paypal:unenrolself'] = 'Išsiregistruoti iš kursų';
$string['paypalaccepted'] = '„PayPal“ mokėjimai priimami';
$string['pluginname'] = '„PayPal“';
$string['pluginname_desc'] = '„PayPal“ modulis leidžia nustatyti mokamus kursus. Jei bet kurių kursų kaina lygi nuliui, besimokančiųjų negali būti prašoma mokėti už kursų atidarymą. Čia nustatote numatytąją visos svetainės kainą, o tada kursų parametrą, kurį galite nustatyti atskirai kiekvienam kursui. Kursų kaina pakeičia svetainės kainą.';
$string['privacy:metadata:enrol_paypal:enrol_paypal'] = 'Informacija apie PayPal operacijas, susijusias su PayPal registracija.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:business'] = 'Mokėjimo gavėjo (t.y. prekybininko) el. pašto adresas arba PayPal paskyros ID.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:courseid'] = 'Parduodamo kurso ID.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:instanceid'] = 'Kurso registracijos egzemplioriaus ID.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:item_name'] = 'Visas kurso, kurio registracija buvo parduota, pavadinimas.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:memo'] = 'Pastaba, kurią pirkėjas įvedė PayPal svetainės mokėjimų pastabos laukelyje.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:option_selection1_x'] = 'Pilnas pirkėjo vardas.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_status'] = 'Mokėjimo būsena.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_type'] = 'Nurodoma, ar mokėjimas buvo apmokėtas naudojant eCheck (echeck), ar buvo atliktas naudojant PayPal balansą, kredito kortelę ar momentinį pavedimą (momentinis).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:pending_reason'] = 'Priežastis, kodėl mokėjimo būsena laukiama (jei yra).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:reason_code'] = 'Priežastis, kodėl mokėjimo būsena yra Grąžinta, Atšaukta, Atmesta (jei būsena yra viena iš jų).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_email'] = 'Pagrindinis mokėjimo gavėjo (t.y. prekybininko) el. pašto adresas.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_id'] = 'Unikalus mokėjimo gavėjo (t. y. prekybininko) PayPal paskyros ID.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:tax'] = 'Mokėjime sumokėto mokesčio suma.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:timeupdated'] = 'Moodle laikas, kai PayPal praneša apie mokėjimą.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:txn_id'] = 'Pradinis prekybininko operacijos identifikavimo numeris, skirtas mokėjimui iš pirkėjo, dėl kurio buvo užregistruotas atvejis';
$string['privacy:metadata:enrol_paypal:enrol_paypal:userid'] = 'Naudotojo, įsigijusio kurso registraciją, ID.';
$string['privacy:metadata:enrol_paypal:paypal_com'] = 'PayPal registracijos papildinys perduoda naudotojo duomenis iš Moodle į PayPal svetainę.';
$string['privacy:metadata:enrol_paypal:paypal_com:address'] = 'Kursą perkančio naudotojo adresas.';
$string['privacy:metadata:enrol_paypal:paypal_com:city'] = 'Kursą perkančio naudotojo miestas.';
$string['privacy:metadata:enrol_paypal:paypal_com:country'] = 'Kursą perkančio naudotojo šalis.';
$string['privacy:metadata:enrol_paypal:paypal_com:custom'] = 'Brūkšneliu atskirta eilutė, kurioje yra naudotojo (pirkėjo) ID, kurso ID, registracijos egzemplioriaus ID.';
$string['privacy:metadata:enrol_paypal:paypal_com:email'] = 'Kursą perkančio naudotojo el. pašto adresas.';
$string['privacy:metadata:enrol_paypal:paypal_com:first_name'] = 'Kursą perkančio naudotojo vardas.';
$string['privacy:metadata:enrol_paypal:paypal_com:last_name'] = 'Kursą perkančio naudotojo pavardė.';
$string['privacy:metadata:enrol_paypal:paypal_com:os0'] = 'Visas pirkėjo vardas ir pavardė.';
$string['processexpirationstask'] = '„PayPal“ registracija siunčia pranešimus apie galiojimo pabaigą';
$string['sendpaymentbutton'] = 'Siųsti mokėjimą per „PayPal“';
$string['status'] = 'Leisti „PayPal“ registraciją';
$string['status_desc'] = 'Pagal numatytuosius nustatymus leisti naudotojams naudoti „PayPal“, kad įsiregistruotų į šiuos kursus.';
$string['transactions'] = 'PayPal operacijos';
$string['unenrolselfconfirm'] = 'Ar tikrai norite išsiregistruoti iš kursų {$a}?';
