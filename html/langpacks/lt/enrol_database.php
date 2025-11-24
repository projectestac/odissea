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
 * Strings for component 'enrol_database', language 'lt', version '4.5'.
 *
 * @package     enrol_database
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['database:config'] = 'Sukonfigūruoti duomenų bazės registravimo egzempliorius';
$string['database:unenrol'] = 'Panaikinti sustabdytų naudotojų registraciją';
$string['dbencoding'] = 'Duomenų bazės kodavimas';
$string['dbhost'] = 'Duomenų bazės pagrindinis kompiuteris';
$string['dbhost_desc'] = 'Įveskite duomenų bazės serverio IP adresą arba pagrindinio kompiuterio pavadinimą. Jei naudojate ODBC, naudokite sistemos DSN pavadinimą. Jei naudojate SKVN, naudokite SKVN DSN.';
$string['dbname'] = 'Duomenų bazės pavadinimas';
$string['dbname_desc'] = 'Palikite tuščią, jei duomenų bazės priegloboje naudojate DSN pavadinimą.';
$string['dbpass'] = 'Duomenų bazės slaptažodis';
$string['dbsetupsql'] = 'Duomenų bazės nustatymo komanda';
$string['dbsetupsql_desc'] = 'SQL komanda specialiam duomenų bazės nustatymui atlikti, dažnai naudojama nustatyti ryšio kodavimą, pvz., „MySQL“ ir „PostgreSQL“: <em>SET NAMES \'utf8\'</em>';
$string['dbsybasequoting'] = 'Naudoti „Sybase“ kabutes';
$string['dbsybasequoting_desc'] = '„Sybase“ stiliaus vienguba kabutė: reikalinga „Oracle“, MS SQL ir kai kuriose kitose duomenų bazėse. Nenaudoti „MySQL“!';
$string['dbtype'] = 'Duomenų bazės tvarkyklė';
$string['dbtype_desc'] = '„ADOdb“ duomenų bazės pavadinimas, įveskite išorinio duomenų bazės variklį.';
$string['dbuser'] = 'Duomenų bazės naudotojas';
$string['debugdb'] = 'Derinti „ADOdb“';
$string['debugdb_desc'] = 'Derinti „ADOdb“ ryšį su išorine duomenų baze – naudokite, jei prisijungdami gaunate tuščią puslapį. Netinka gamybos svetainėms!';
$string['defaultcategory'] = 'Numatytoji naujo kurso kategorija';
$string['defaultcategory_desc'] = 'Numatytoji automatiškai sukurtų kursų kategorija. Naudojama, kai nenurodytas arba nerastas naujos kategorijos ID.';
$string['defaultrole'] = 'Numatytasis vaidmuo';
$string['defaultrole_desc'] = 'Vaidmenį galima priskirti pagal numatytuosius nustatymus, jei išorinėje lentelėje nenurodytas kitas vaidmuo.';
$string['ignorehiddencourses'] = 'Nepaisyti paslėptų kursų';
$string['ignorehiddencourses_desc'] = 'Jei įgalinta, naudotojai nebus registruojami į kursus, kurie nustatyti kaip nepasiekiami besimokantiesiems.';
$string['localcategoryfield'] = 'Vietinės kategorijos laukelis';
$string['localcoursefield'] = 'Vietinis kursų laukas';
$string['localrolefield'] = 'Vietinis vaidmens laukas';
$string['localuserfield'] = 'Vietinis naudotojo laukas';
$string['newcoursecategory'] = 'Naujų kursų kategorijos ID laukas';
$string['newcourseenddate'] = 'Naujas kurso pabaigos datos laukas';
$string['newcoursefullname'] = 'Naujų kursų viso pavadinimo laukas';
$string['newcourseidnumber'] = 'Naujų kursų ID numerio laukas';
$string['newcourseshortname'] = 'Naujų kursų trumpojo pavadinimo laukas';
$string['newcoursestartdate'] = 'Naujas kurso pradžios datos laukas';
$string['newcoursetable'] = 'Nuotolinė naujų kursų lentelė';
$string['newcoursetable_desc'] = 'Nurodykite lentelės su sąrašu kursų, kuriuos reikia sukurti automatiškai, pavadinimą. Jei sąrašas tuščias, vadinasi kursų nesukurta.';
$string['pluginname'] = 'Išorinė duomenų bazė';
$string['pluginname_desc'] = 'Galite naudoti išorinę duomenų bazę (beveik bet kokios rūšies) savo registracijai valdyti. Laikoma, kad jūsų išorinėje duomenų bazėje yra bent vienas laukas, kuriame yra kursų ID, ir vienas laukas, kuriame yra naudotojo ID. Jie lyginami su laukais, kuriuos pasirinkote vietiniuose kursuose ir naudotojo lentelėse.';
$string['privacy:metadata'] = 'Išorinės duomenų bazės registracijos papildinys nesaugo jokių asmeninių duomenų.';
$string['remotecoursefield'] = 'Nuotolinių kursų laukas';
$string['remotecoursefield_desc'] = 'Įrašus kursų lentelėje atitinkantis lauko pavadinimas nuotolinėje lentelėje.';
$string['remoteenroltable'] = 'Nuotolinio naudotojo registracijos lentelė';
$string['remoteenroltable_desc'] = 'Nurodykite lentelės pavadinimą, kurioje yra naudotojo registracijų sąrašas. Tuščias sąrašas reiškia, kad naudotojų registracija nesinchronizuojama.';
$string['remoteotheruserfield'] = 'Nuotolinis kito naudotojo laukas';
$string['remoteotheruserfield_desc'] = 'Lauko pavadinimas nuotolinėje lentelėje, kurį naudojame žymėdami „Kito naudotojo“ vaidmenų priskyrimus.';
$string['remoterolefield'] = 'Nuotolinio vaidmens laukas';
$string['remoterolefield_desc'] = 'Įrašus vaidmenų lentelėje atitinkantis lauko pavadinimas nuotolinėje lentelėje.';
$string['remoteuserfield'] = 'Nuotolinio naudotojo laukas';
$string['remoteuserfield_desc'] = 'Įrašus naudotojo lentelėje atitinkantis lauko pavadinimas nuotolinėje lentelėje.';
$string['settingsheaderdb'] = 'Išorinis duomenų bazės ryšys';
$string['settingsheaderlocal'] = 'Vietinio lauko susiejimas';
$string['settingsheadernewcourses'] = 'Naujų kursų kūrimas';
$string['settingsheaderremote'] = 'Nuotolinės registracijos sinchronizavimas';
$string['syncenrolmentstask'] = 'Sinchronizuoti išorinės duomenų bazės registravimo užduotį';
$string['templatecourse'] = 'Naujų kursų šablonas';
$string['templatecourse_desc'] = 'Pasirinktinis: automatiškai sukurtų kursų nustatymus galima kopijuoti iš kursų šablono. Čia įveskite trumpąjį kursų šablono pavadinimą.';
