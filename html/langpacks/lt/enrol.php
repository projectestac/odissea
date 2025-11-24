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
 * Strings for component 'enrol', language 'lt', version '4.5'.
 *
 * @package     enrol
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actenrolshhdr'] = 'Galimi įregistravimo į kursą papildiniai';
$string['addinstance'] = 'Įtraukti metodą';
$string['addinstanceanother'] = 'Pridėti metodą ir sukurti kitą';
$string['ajaxnext25'] = 'Sekantys 25...';
$string['ajaxoneuserfound'] = 'Rastas 1 naudotojas';
$string['ajaxxmoreusersfound'] = 'Rasta daugiau nei {$a} naudotojų';
$string['ajaxxusersfound'] = 'Rasta naudotojų: {$a}';
$string['assignnotpermitted'] = 'Neturite teisių arba negalite priskirti vaidmenų šiuose kursuose.';
$string['bulkuseroperation'] = 'Masinės naudotojų operacijos';
$string['configenrolplugins'] = 'Pasirinkite visus būtinus papildinius ir išdėstykite juos tinkama tvarka.';
$string['custominstancename'] = 'Pasirinktinis pavadinimas';
$string['customwelcomemessage'] = 'Pasirinktinis pasveikinimo pranešimas';
$string['customwelcomemessage_help'] = 'Priimtini formatai: paprastas tekstas arba Moodle-automatinis formatas. Taip pat priimamos HTML žymos ir multi-lang žymos, ir šios vietos žymos:
<ul>
<li>Kurso pavadinimas {$a->coursename}</li>
<li>Nuoroda į naudotojo profilio puslapį {$a->profileurl}</li>
<li>Naudotojo el. paštas{$a->email}</li>
<li>Naudotojo vardas ir pavardė {$a->fullname}</li>
<li>Naudotojo vardas {$a->firstname}</li>
<li>Naudotojo pavardė {$a->lastname}</li>
<li>Naudotojo vaidmuo kurse {$a->courserole}</li>
</ul>';
$string['customwelcomemessageplaceholder'] = 'Sveiki, {$a->fullname}, esate įregistruota(-as) į kursą „{$a->coursename}“.';
$string['defaultenrol'] = 'Įtraukti egzempliorių į naują kursą';
$string['defaultenrol_desc'] = 'Šį papildinį galima įtraukti į visus naujus kursus kaip numatytąjį.';
$string['deleteinstanceconfirm'] = 'Ketinate ištrinti registracijos metodą „{$a->name}“. Visi šiuo metodu įregistruoti {$a->users} naudotojai bus išregistruoti, o visi su kursu susiję duomenys, pvz., naudotojų įvertinimai, narystė grupėje ar forumo prenumeratos, bus ištrinti.

Ar tikrai norite tęsti?';
$string['deleteinstanceconfirmself'] = 'Ar esate tikri, kad norite ištrinti egzempliorių "{$a->name}", kuris suteikia jums prieigą prie šio kurso? Gali būti, kad jūs negalėsite pasiekti šio kurso, jei tai atliksite.';
$string['deleteinstancenousersconfirm'] = 'Jūs ketinate panaikinti įregistravimo metodą "{$a->name}". Ar tikrai norite tęsti?';
$string['disableinstanceconfirmself'] = 'Ar esate tikri, kad norite išjungti egzempliorių "{$a->name}", kuris suteikia jums prieigą prie šio kurso? Gali būti, kad jūs negalėsite pasiekti šio kurso, jei tai atliksite.';
$string['durationdays'] = 'Dienų: {$a}';
$string['editenrolment'] = 'Redaguoti registraciją';
$string['edituserenrolment'] = 'Redaguoti {$a} registraciją';
$string['enrol'] = 'Įregistruoti';
$string['enrolcandidates'] = 'Neįregistruoti naudotojai';
$string['enrolcandidatesmatching'] = 'Atitinkantys neužsiregistravę naudotojai';
$string['enrolcohort'] = 'Įregistruoti junginį';
$string['enrolcohortusers'] = 'Įregistruoti naudotojus';
$string['enroldetails'] = 'Įregistravimo detalės';
$string['enrollednewusers'] = 'Sėkmingai įregistruoti {$a} nauji naudotojai';
$string['enrolledusers'] = 'Įregistruoti naudotojai';
$string['enrolledusersmatching'] = 'Atitinkantys užsiregistravę naudotojai';
$string['enrolme'] = 'Įsiregistruoti';
$string['enrolment'] = 'Registracija';
$string['enrolmentinstances'] = 'Įregistravimo metodai';
$string['enrolmentmethod'] = 'Įregistravimo metodai';
$string['enrolmentnew'] = 'Naujas įregistravimas į {$a}';
$string['enrolmentnewuser'] = '{$a->user} įregistruotas į kursą {$a->course}';
$string['enrolmentoptions'] = 'Įregistravimo parinktys';
$string['enrolments'] = 'Registracijos';
$string['enrolmentupdatedforuser'] = 'Naudotojo „{$a->fullname}“ registracija buvo atnaujinta';
$string['enrolnotpermitted'] = 'Neturite teisių arba jums neleidžiama ką nors įregistruoti į šį kursą';
$string['enrolperiod'] = 'Įregistravimo trukmė';
$string['enroltimecreated'] = 'Įregistravimas sukurtas';
$string['enroltimeend'] = 'Įregistravimas baigtas';
$string['enroltimeendinvalid'] = 'Įregistravimo pabaigos data privalo būti po įregistravimo pradžios datos';
$string['enroltimestart'] = 'Įregistravimas pradėtas';
$string['enrolusage'] = 'Egzemplioriai / registracijos';
$string['enrolusers'] = 'Įregistruoti naudotojus';
$string['enrolxusers'] = 'Įregistruoti {$a} naudotojus';
$string['errajaxfailedenrol'] = 'Nepavyko įregistruoti naudotojo';
$string['errajaxsearch'] = 'Klaida ieškant naudotojų';
$string['erroreditenrolment'] = 'Įvyko klaida bandant pataisyti naudotojo registraciją.';
$string['errorenrolcohort'] = 'Klaida kuriant įregistravimo į kursą junginio sinchronizavimo egzempliorių.';
$string['errorenrolcohortusers'] = 'Klaida įregistruojant junginio narius į kursą.';
$string['errorthresholdlow'] = 'Pranešimo slenkstis turi būti bent 1 diena.';
$string['errorwithbulkoperation'] = 'Įvyko klaida atliekant grupinį registravimo pakeitimą.';
$string['eventenrolinstancecreated'] = 'Įregistravimo egzempliorius sukurtas';
$string['eventenrolinstancedeleted'] = 'Įregistravimo egzempliorius pašalintas';
$string['eventenrolinstanceupdated'] = 'Įregistravimo egzempliorius atnaujintas';
$string['eventuserenrolmentcreated'] = 'Naudotojas įregistruotas į kursą';
$string['eventuserenrolmentdeleted'] = 'Naudotojas išregistruotas iš kurso';
$string['eventuserenrolmentupdated'] = 'Naudotojo registracija atnaujinta';
$string['expirynotify'] = 'Pranešti prieš registracijos galiojimo pabaigą';
$string['expirynotify_help'] = 'Šis parametras nustato, ar siunčiami registravimo galiojimo pabaigos pranešimai.';
$string['expirynotifyall'] = 'Registruojantis ir įregistruotas naudotojas';
$string['expirynotifyenroller'] = 'Tiktai registruojantis';
$string['expirynotifyhour'] = 'Valanda kai siunčiami registracijos galiojimo pabaigos pranešimai';
$string['expirythreshold'] = 'Pranešti prieš';
$string['expirythreshold_help'] = 'Kiek laiko prieš registracijos galiojimo pabaigą turėtų būti informuojami naudotojai?';
$string['extremovedaction'] = 'Išorinis išregistravimo veiksmas';
$string['extremovedaction_help'] = 'Pasirinkite veiksmą, kurį atliksite, jei naudotojo registracija dings iš išorinio registracijos šaltinio. Atminkite, kad kai kurie naudotojo duomenys ir parametrai išvalomi atliekant išregistravimą iš kursų.';
$string['extremovedkeep'] = 'Palikti įregistruotus naudotojus';
$string['extremovedsuspend'] = 'Išjungti registravimą į kursą';
$string['extremovedsuspendnoroles'] = 'Išjungti registravimą į kursą ir pašalinti vaidmenis';
$string['extremovedunenrol'] = 'Išregistruoti naudotoją iš kursų';
$string['finishenrollingusers'] = 'Užbaigti naudotojų registraciją';
$string['foundxcohorts'] = 'Rasta junginių: {$a}';
$string['instanceadded'] = 'Metodas pridėtas';
$string['instanceeditselfwarning'] = 'Įspėjimas:';
$string['instanceeditselfwarningtext'] = 'Jūs į kursą esate įregistruotas šiuo registracijos metodu, pakeitimai gali paveikti Jūsų prieigą prie šio kurso.';
$string['invalidenrolduration'] = 'Netinkama registracijos trukmė';
$string['invalidenrolinstance'] = 'Klaidingas įregistravimo egzempliorius';
$string['invalidrequest'] = 'Klaidinga užklausa';
$string['invalidrole'] = 'Klaidingas vaidmuo';
$string['manageenrols'] = 'Valdyti įregistravimo papildinius';
$string['manageinstance'] = 'Valdyti';
$string['method'] = 'Metodas';
$string['migratetomanual'] = 'Perkelti į rankinį įregistravimą';
$string['nochange'] = 'Nėra pakeitimų';
$string['noexistingparticipants'] = 'Nėra dalyvių';
$string['nogroup'] = 'Nėra grupės';
$string['noguestaccess'] = 'Svečiai negali pasiekti šio kurso. Prašome prisijungti.';
$string['none'] = 'Nėra';
$string['notenrollable'] = 'Jūs negalite patys įsiregistruoti į šį kursą.';
$string['notenrolledusers'] = 'Kiti naudotojai';
$string['otheruserdesc'] = 'Šie naudotojai neįregistruoti į kursus, tačiau turi vaidmenis juose, paveldėtus arba priskirtus.';
$string['participationactive'] = 'Aktyvu';
$string['participationnotcurrent'] = 'Neleistina';
$string['participationstatus'] = 'Būsena';
$string['participationsuspended'] = 'Sulaikyta';
$string['periodend'] = 'iki {$a}';
$string['periodnone'] = 'įregistruota {$a}';
$string['periodstart'] = 'nuo {$a}';
$string['periodstartend'] = 'nuo {$a->start} iki {$a->end}';
$string['plugindisabled'] = '{$a} registracijos papildinys yra išjungtas';
$string['privacy:metadata:user_enrolments'] = 'Įtraukimai';
$string['privacy:metadata:user_enrolments:enrolid'] = 'Registracijos papildinys';
$string['privacy:metadata:user_enrolments:modifierid'] = 'Naudotojo, kuris paskutinį kartą redagavo naudotojo registraciją, ID';
$string['privacy:metadata:user_enrolments:status'] = 'Naudotojo registracijos į kursą būsena';
$string['privacy:metadata:user_enrolments:tableexplanation'] = 'Pagrindiniame registracijos papildinyje saugomi įregistruoti naudotojai.';
$string['privacy:metadata:user_enrolments:timecreated'] = 'Laikas, kai naudotojo registracija buvo sukurta.';
$string['privacy:metadata:user_enrolments:timeend'] = 'Laikas, kai naudotojo registravimas baigėsi.';
$string['privacy:metadata:user_enrolments:timemodified'] = 'Laikas, kai naudotojo registracija buvo keista.';
$string['privacy:metadata:user_enrolments:timestart'] = 'Laikas, kada prasideda naudotojo registracija';
$string['privacy:metadata:user_enrolments:userid'] = 'Naudotojo ID';
$string['recovergrades'] = 'Jeigu galima, atstatyti naudotojų senus vertinimus';
$string['rolefromcategory'] = '{$a->role} (Paveldėta iš kursų kategorijos)';
$string['rolefrommetacourse'] = '{$a->role} (Paveldėta iš pirminių kursų)';
$string['rolefromsystem'] = '{$a->role} (Priskirta svetainės lygmeniu)';
$string['rolefromthiscourse'] = '{$a->role} (Priskirta šiuose kursuose)';
$string['sendcoursewelcomemessage'] = 'Siųsti kurso pasveikinimo žinutę';
$string['sendfromcoursecontact'] = 'Nuo kurso kontakto';
$string['sendfromkeyholder'] = 'Nuo rakto savininko';
$string['sendfromnoreply'] = 'Nuo adreso be galimybės atsakyti';
$string['startdatetoday'] = 'Šiandien';
$string['synced'] = 'Sinchronizuota';
$string['testsettings'] = 'Bandymo nustatymai';
$string['testsettingsheading'] = 'Bandomieji registracijos nustatymai – {$a}';
$string['timeended'] = 'Baigimo laikas';
$string['timeenrolled'] = 'Registravimo laikas';
$string['timereaggregated'] = 'Persumuotas laikas';
$string['timestarted'] = 'Pradžios laikas';
$string['totalenrolledusers'] = '{$a} įregistruoti naudotojai';
$string['totalotherusers'] = '{$a} kiti naudotojai';
$string['totalunenrolledusers'] = '{$a} išregistruoti naudotojai';
$string['unassignnotpermitted'] = 'Neturite teisių panaikinti vaidmenų priskyrimo šiuose kursuose';
$string['unenrol'] = 'Išregistruoti';
$string['unenrolconfirm'] = 'Ar tikrai norite išregistruoti naudotoją {$a->user} (anksčiau įregistruotą per "{$a->enrolinstancename}") iš kursų {$a->course}?';
$string['unenrolleduser'] = 'Naudotojas „{$a->fullname}“ buvo išregistruotas iš kurso';
$string['unenrolme'] = 'Išsiregistruoti iš šio kurso';
$string['unenrolnotpermitted'] = 'Neturite teisių išregistruoti šio naudotojo iš šio kurso.';
$string['unenrolroleusers'] = 'Išregistruoti naudotojus';
$string['uninstallmigrating'] = 'Perkeliama registracija "{$a}"';
$string['unknowajaxaction'] = 'Pageidaujama nežinomo veiksmo';
$string['unlimitedduration'] = 'Neribota';
$string['userremovedfromselectiona'] = 'Naudotojas "{$a}" pašalintas iš pasirinkimo.';
$string['usersearch'] = 'Paieška';
$string['withselectedusers'] = 'Su pasirinktais naudotojais';
$string['youenrolledincourse'] = 'Jūs esate įregistruotas į kursą.';
$string['youunenrolledfromcourse'] = 'Esate išregistruotas iš kurso „{$a}“.';
