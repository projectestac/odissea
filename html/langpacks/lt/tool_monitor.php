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
 * Strings for component 'tool_monitor', language 'lt', version '4.5'.
 *
 * @package     tool_monitor
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addrule'] = 'Pridėti naują taisyklę';
$string['allevents'] = 'Visi įvykiai';
$string['allmodules'] = 'Visi atvejai';
$string['area'] = 'Sritis';
$string['areatomonitor'] = 'Stebėtina sritis';
$string['cachedef_eventsubscriptions'] = 'Išsaugomas atskirų kursų renginių prenumeratos sąrašas';
$string['contactadmin'] = 'Susisiekite su administratoriumi, kad jį įgalintumėte.';
$string['core'] = 'Branduolys';
$string['coresubsystem'] = 'Posistemis ({$a})';
$string['currentsubscriptions'] = 'Jūsų dabartinės prenumeratos';
$string['defaultmessagetemplate'] = 'Taisyklės pavadinimas: {rulename}<br />Aprašymas: {description}<br />Įvykio pavadinimas: {eventname}';
$string['deleterule'] = 'Panaikinti taisyklę';
$string['deletesubscription'] = 'Ištrinti prenumeratą';
$string['description'] = 'Aprašymas:';
$string['disablefieldswarning'] = 'Kai kurių laukų redaguoti negalima, nes ši taisyklė jau prenumeruojama.';
$string['duplicaterule'] = 'Dubliuoti taisyklę';
$string['editrule'] = 'Redaguoti taisyklę';
$string['enablehelp'] = 'Įjungti / išjungti įvykio stebėjimą';
$string['enablehelp_help'] = 'Įvykių stebėjimas turi būti įjungtas, kad galėtumėte kurti ir užsiprenumeruoti taisykles. Atminkite, kad įvykių stebėjimo įjungimas gali turėti įtakos jūsų svetainės našumui.';
$string['errorincorrectevent'] = 'Pasirinkite įvykį, susijusį su pasirinktu papildiniu';
$string['event'] = 'Įvykis';
$string['eventnotfound'] = 'Įvykis nerastas';
$string['eventrulecreated'] = 'Taisyklė sukurta';
$string['eventruledeleted'] = 'Taisyklė panaikinta';
$string['eventruleupdated'] = 'Taisyklė atnaujinta';
$string['eventsubcreated'] = 'Prenumerata sukurta';
$string['eventsubcriteriamet'] = 'Prenumeratos kriterijai atitiko';
$string['eventsubdeleted'] = 'Prenumerata ištrinta';
$string['freqdesc'] = '{$a->freq} kartą (-us) per {$a->mins} minutę (-es)';
$string['frequency'] = 'Pranešimo slenkstis';
$string['frequency_help'] = 'Įvykių skaičius per nurodytą laikotarpį, kurio reikia norint išsiųsti pranešimą.';
$string['inminutes'] = 'minutėmis';
$string['invalidmodule'] = 'Netinkamas modulis';
$string['manage'] = 'Tvarkyti';
$string['managerules'] = 'Įvykio stebėsenos taisyklės';
$string['manageruleslink'] = 'Taisykles galite tvarkyti {$a} puslapyje.';
$string['managesubscriptions'] = 'Įvykio stebėsena';
$string['managesubscriptionslink'] = 'Galite užsiprenumeruoti taisykles {$a} puslapyje.';
$string['messageprovider:notification'] = 'Pranešimai apie prenumeratos taisykles';
$string['messagetemplate'] = 'Pranešimo žinutė';
$string['messagetemplate_help'] = 'Pasiekus pranešimo slenkstį, abonentams išsiunčiamas pranešimas. Jame gali būti bet kuri arba visos toliau nurodytos žymos:

* Nuoroda į įvykio vietą {link}
* Nuoroda į stebimą sritį {modulelink}
* Taisyklės pavadinimas {rulename}
* Aprašymas {description}
* Įvykis {eventname}
* Visas kurso pavadinimas {coursefullname}
* Trumpasis kurso pavadinimas {courseshortname}';
$string['messagetemplate_link'] = 'admin/tool/monitor/managerules';
$string['moduleinstance'] = 'Instancija';
$string['monitor:managerules'] = 'Tvarkyti įvykių sekimo taisykles';
$string['monitor:managetool'] = 'Įjungti/išjungti įvykių sekimą';
$string['monitor:subscribe'] = 'Prenumeruoti įvykio stebėjimo taisykles';
$string['monitordisabled'] = 'Įvykių sekimas šiuo metu yra išjungtas.';
$string['monitorenabled'] = 'Įvykių stebėsena šiuo metu įjungta.';
$string['norules'] = 'Nėra įvykių sekimo taisyklių.';
$string['pluginname'] = 'Įvykio stebėsena';
$string['privacy:createdrules'] = 'Aš sukūriau įvykių stebėjimo taisykles';
$string['privacy:metadata:description'] = 'Taisyklės aprašymas';
$string['privacy:metadata:eventname'] = 'Visiškai kvalifikuotas renginio pavadinimas';
$string['privacy:metadata:frequency'] = 'Pranešimų dažnumas';
$string['privacy:metadata:historysummary'] = 'Išsaugoma išsiųstų žinučių pranešimų istorija';
$string['privacy:metadata:inactivedate'] = 'Laikotarpis dienomis, po kurio neaktyvi prenumerata bus visiškai pašalinta';
$string['privacy:metadata:lastnotificationsent'] = 'Kada paskutinį kartą buvo išsiųstas pranešimas apie šią prenumeratą.';
$string['privacy:metadata:messagesummary'] = 'Pranešimai siunčiami į pranešimų sistemą.';
$string['privacy:metadata:name'] = 'Taisyklės pavadinimas';
$string['privacy:metadata:plugin'] = '„Frankenstyle“ papildinio pavadinimas';
$string['privacy:metadata:rulessummary'] = 'Saugo stebėjimo taisykles.';
$string['privacy:metadata:subscriptionssummary'] = 'Saugo vartotojų prenumeratas pagal įvairias taisykles';
$string['privacy:metadata:template'] = 'Žinutės šablonas';
$string['privacy:metadata:timecreatedrule'] = 'Kai buvo sukurta ši taisyklė';
$string['privacy:metadata:timecreatedsub'] = 'Kai buvo sukurta ši prenumerata';
$string['privacy:metadata:timemodifiedrule'] = 'Kada ši taisyklė buvo paskutinį kartą pakeista';
$string['privacy:metadata:timesent'] = 'Kai žinutė buvo išsiųsta';
$string['privacy:metadata:timewindow'] = 'Laiko langas sekundėmis';
$string['privacy:metadata:userid'] = 'Taisyklę sukūrusio naudotojo ID.';
$string['privacy:metadata:useridhistory'] = 'Taisyklę sukūrusio naudotojo ID.';
$string['privacy:metadata:useridsub'] = 'Abonento ID.';
$string['privacy:subscriptions'] = 'Mano įvykių stebėjimo prenumeratos';
$string['processevents'] = 'Apdoroti įvykius';
$string['ruleareyousure'] = 'Ar Jūs tikrai norite ištrinti taisyklę "{$a}"?';
$string['ruleareyousureextra'] = 'Yra {$a} šios taisyklės prenumerata (-os), kuri taip pat bus ištrinta.';
$string['rulecopysuccess'] = 'Taisyklė sėkmingai dubliuota';
$string['ruledeletesuccess'] = 'Taisyklė sėkmingai ištrinta';
$string['rulehelp'] = 'Taisyklės detalės';
$string['rulehelp_help'] = 'Ši taisyklė stebi, kada įvykis \'{$a->eventname}\' iš \'{$a->eventcomponent}\' buvo suaktyvintas {$a->frequency} kartų (-us) per  {$a->minutes} minutę (-es).';
$string['rulename'] = 'Vaidmens pavadinimas';
$string['rulenopermission'] = 'Neturite leidimo prenumeruoti jokių įvykių.';
$string['rulenopermissions'] = 'Neturite „{$a} taisyklės“ leidimų';
$string['rulescansubscribe'] = 'Taisyklės, kurias galite užsiprenumeruoti';
$string['selectacourse'] = 'Pasirinkti kursą';
$string['selectcourse'] = 'Apsilankykite šioje ataskaitoje kurso lygiu, kad gautumėte galimų modulių sąrašą';
$string['subareyousure'] = 'Ar tikrai norite ištrinti taisyklės „{$a}“ prenumeratą?';
$string['subcreatesuccess'] = 'Prenumerata sėkmingai sukurta';
$string['subdeletesuccess'] = 'Prenumerata sėkmingai pašalinta';
$string['subhelp'] = 'Išsami prenumeratos informacija';
$string['subhelp_help'] = 'Ši prenumerata stebi, kada įvykis \'{$a->eventname}\' buvo suaktyvintas per \'{$a->moduleinstance}\' {$a->frequency} kartą (-us) per {$a->minutes} minutę ( -es).';
$string['subscribeto'] = 'Prenumeruoti taisyklę „{$a}“';
$string['taskchecksubscriptions'] = 'Suaktyvinti/deaktyvuoti negaliojančias taisyklių prenumeratas';
$string['taskcleanevents'] = 'Valymo įvykių stebėjimo įvykiai';
$string['unsubscribe'] = 'Atsisakyti prenumeratos';
