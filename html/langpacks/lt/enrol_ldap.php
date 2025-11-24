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
 * Strings for component 'enrol_ldap', language 'lt', version '4.5'.
 *
 * @package     enrol_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Priskiriama rolė \'{$a->role_shortname}\' naudotojui  \'{$a->user_username}\' kurse \'{$a->course_shortname}\' (id {$a->course_id})';
$string['assignrolefailed'] = 'Nepavyko priskirti rolės \'{$a->role_shortname}\' naudotojui  \'{$a->user_username}\' kurse \'{$a->course_shortname}\' (id {$a->course_id})';
$string['autocreate'] = '<p> Kursai gali būti sukurti automatiškai jeigu yra registracijų į kursą kurio dar nėra Moodle </p> <p> Jeigu jūs naudojate automatinį kursų sukūrimą, yra rekomenduojama kad jūs pašalintumėte šiuos sugebėjimus: moodle/course:changeidnumber, moodle/course:changeshortname, moodle/course:changefullname ir moodle/course:changesummary, iš susijusių rolių kad išvengti pakeitimų keturiems aukščiau išvardintiems kursų laukams ( ID, trumpas vardas, pilnas vardas ir santrauka). </p>';
$string['autocreate_key'] = 'Automatinis sukūrimas';
$string['autocreation_settings'] = 'Automatinio kurso sukūrimo nustatymai';
$string['autoupdate_settings'] = 'Automatinio kurso atnaujinimo nustatymai';
$string['autoupdate_settings_desc'] = '<p>Pasirinkite laukus, kuriuos norite atnaujinti, kai vykdoma suplanuota užduotis „Sinchronizuoti LDAP registracijas“.</p><p>Pasirinkus bent vieną lauką, bus atnaujintas.</p>';
$string['bind_dn'] = 'Jei norite naudoti įpareigotus naudotojus paieškai, nusakykite čia. Pvz.: cn=ldapuser,ou=public,o=org';
$string['bind_dn_key'] = 'Įpareigoto naudotojo atpažinimo vardas';
$string['bind_pw'] = 'Slaptažodis įpareigotam naudotojui';
$string['bind_pw_key'] = 'Slaptažodis';
$string['bind_settings'] = 'Įpareigojimo nustatymai';
$string['cannotcreatecourse'] = 'Nepavyko sukurti kurso:trūksta reikalingų duomenų iš LDAP įrašų!';
$string['cannotupdatecourse'] = 'Negalima atnaujinti kurso: trūksta būtinų duomenų iš LDAP įrašo! Kurso ID numeris: „{$a->idnumber}“';
$string['cannotupdatecourse_duplicateshortname'] = 'Negalima atnaujinti kurso: pasikartoja trumpasis pavadinimas. Praleidžiamas kursas su ID numeriu „{$a->idnumber}“...';
$string['category'] = 'Kategorija automatiškai sukurtiems kursams';
$string['category_key'] = 'Kategorij';
$string['contexts'] = 'LDAP kontekstas';
$string['couldnotfinduser'] = 'Nepavyko rasti naudotojo \'{$a}\', praleidžiama';
$string['course_fullname'] = 'Papildomai: LDAP atributas gauti pilną vardą iš';
$string['course_fullname_key'] = 'Pilnas vardas';
$string['course_fullname_updateonsync'] = 'Atnaujinti pilną vardą sinchronizavimo metu';
$string['course_fullname_updateonsync_key'] = 'Atnaujinti pilną pavadinimą';
$string['course_idnumber'] = 'LDAP atributas gauti kurso ID numerį. Dažniausiai \'cn\' arba \'uid\'.';
$string['course_idnumber_key'] = 'ID numeris';
$string['course_search_sub'] = 'Ieškoti grupių narystės iš kontekstų';
$string['course_search_sub_key'] = 'Ieškoti kontekstų';
$string['course_settings'] = 'Kurso registracijos nustatymai';
$string['course_shortname'] = 'Papildomai: LDAP atributas gauti trumpą vardą iš';
$string['course_shortname_key'] = 'Trumpas vardas';
$string['course_shortname_updateonsync'] = 'Atnaujinti trumpąjį pavadinimą sinchronizavimo metu';
$string['course_shortname_updateonsync_key'] = 'Atnaujinti trumpą pavadinimą';
$string['course_summary'] = 'Papildoma: LDAP atributas gauti santrauka iš';
$string['course_summary_key'] = 'Santrauka';
$string['course_summary_updateonsync'] = 'Atnaujinti santrauką sinchronizavimo metu';
$string['course_summary_updateonsync_key'] = 'Atnaujinti santrauką';
$string['coursenotexistskip'] = 'Kursas \'{$a}\' neegzistuoja ir automatinis sukūrimas išjungtas, praleidžiama';
$string['courseupdated'] = 'Kursas su ID numeriu „{$a->idnumber}“ sėkmingai atnaujintas.';
$string['courseupdateskipped'] = 'Kurso su ID numeriu „{$a->idnumber}“ atnaujinti nereikia. Praleidžiama...';
$string['createcourseextid'] = 'SUKURTI Naudotojas įsiregistravo į neegzistuojantį kursą  \'{$a->courseextid}\'';
$string['createnotcourseextid'] = 'Naudotojas įsiregistravo į neegzistuojantį kursą  \'{$a->courseextid}\'';
$string['creatingcourse'] = 'Sukuriamas kursas \'{$a}\'...';
$string['duplicateshortname'] = 'Kurso sukurti nepavyko. Pasikartojantis trumpasis pavadinimas. Praleidžiamas kursas su ID numeriu „{$a->idnumber}“...';
$string['editlock'] = 'Užrakinti reikšmę';
$string['emptyenrolment'] = 'Tuščias registracija rolei  \'{$a->role_shortname}\' kurse  \'{$a->course_shortname}';
$string['enrolname'] = 'LDAP';
$string['enroluser'] = 'Registruoti naudotoją  \'{$a->user_username}\' į kursą \'{$a->course_shortname}\' (id {$a->course_id})';
$string['enroluserenable'] = 'Įjungta registracija naudotojams \'{$a->user_username}\' kurse \'{$a->course_shortname}\' (id {$a->course_id})';
$string['explodegroupusertypenotsupported'] = 'ldap_explode_group() nepalaiko pasirinkto naudotojo tipo: {$a}';
$string['extcourseidinvalid'] = 'Kurso išorinis id yra negaliojantis!';
$string['extremovedsuspend'] = 'Išjungta registracija naudotojui \'{$a->user_username}\' kurse  \'{$a->course_shortname}\' (id {$a->course_id})';
$string['extremovedsuspendnoroles'] = 'Išjungta registracija ir pašalintos rolės naudotojui \'{$a->user_username}\' kurse  \'{$a->course_shortname}\' (id {$a->course_id})';
$string['extremovedunenrol'] = 'Išregistruoti naudotoją \'{$a->user_username}\' iš kurso \'{$a->course_shortname}\' (id {$a->course_id})';
$string['failed'] = 'Nepavyko!';
$string['general_options'] = 'Bendri nustatymai';
$string['group_memberofattribute'] = 'Pavadinimas atributo kuris nusako kurios grupės duotas naudotojas ar grupė priklauso (pvz.: memberOf, groupMembership, ir pan.)';
$string['group_memberofattribute_key'] = '\'Member of\' atributas';
$string['host_url'] = 'Nusakykite LDAP pagrindinį kompiuterį URL adreso forma, pvz.: \'ldap://ldap.myorg.com/\' arba \'ldaps://ldap.myorg.com/';
$string['host_url_key'] = 'Pagrindinio kompiuterio URL';
$string['idnumber_attribute'] = 'Jei grupės narystė turi atskirų pavadinimų, nurodykite tą patį atributą, kurį naudojote naudotojo ID numerio susiejimui LDAP autentifikavimo nustatymuose.';
$string['idnumber_attribute_key'] = 'ID numerio atributas';
$string['ldap:manage'] = 'Tvarkyti LDAP registracijos reikalavimus';
$string['ldap_encoding'] = 'Nusakyti kodavimą naudojamą LDAP serverio. Greičiausiai bus utf-8, MS AD v2 naudoja numatytą kodavimo platformą tokia kaip cp1252, cp1250, ir pan.';
$string['ldap_encoding_key'] = 'LDAP atkodavimas';
$string['memberattribute'] = 'LDAP naudotojo atributas';
$string['memberattribute_isdn'] = 'Jei grupės narystė turi skiriamųjų vardų, turite juos nurodyti čia. Jei taip, taip pat turite sukonfigūruoti likusius šio skyriaus nustatymus.';
$string['memberattribute_isdn_key'] = 'Nario atributas naudoja dn';
$string['nested_groups'] = 'Ar norite naudoti įdėtas grupes (grupės grupėse) registracijai?';
$string['nested_groups_key'] = 'Įdėtos grupės';
$string['nested_groups_settings'] = 'Įdėtų grupių nustatymai';
$string['nosuchrole'] = 'Nėra tokios rolės: \'{$a}';
$string['objectclass'] = 'objectClass naudota ieškoti kursų. Dažniausiai \'group\' arba \'posixGroup';
$string['objectclass_key'] = 'Objektų klasė';
$string['ok'] = 'Gerai!';
$string['opt_deref'] = 'Jei grupėje yra narių su išskirtiniais vardais, nusakykite kaip kitaip jie bus atpažįstami paieškoje. Pasirinkite vieną iš šių reikšmių: \'No\' (LDAP_DEREF_NEVER) arba \'Yes\' (LDAP_DEREF_ALWAYS)';
$string['opt_deref_key'] = 'Slapyvardžiai';
$string['phpldap_noextension'] = 'Atrodo, kad PHP LDAP modulio nėra. Jei norite naudoti šį registracijos papildinį, įsitikinkite, kad jis įdiegtas ir įgalintas.';
$string['pluginname'] = 'LDAP registracijos';
$string['pluginname_desc'] = '<p>Jūs galite naudoti LDAP serverį registracijos kontrolei. Manoma kad jūsų LDAP medyje yra grupės susietos su kursais ir kad kiekviena tų grupių/kursų turi narystės įrašus susietus su besimokantiejis</p><p>Kursai yra apibrėžt kaip grupės LDAP\'e, kur kiekviena grupė turi kelias narystės sritis (<em>member</em> arba <em>memberUid</em>) kuriuose yra unikalus naudotojo ID. </p><p> Jei norite naudoti LDAP registraciją jūsų naudotojai <strong>privalo</strong> turėti galiojantį ID numerio sritį. LDAP grupės privalo turėti tą ID numerį narių srityse jeigu nori kad tie naudotojai būtų priregistruoti. Dažniausiai tai suveiks gerai, jeigu jūs jau naudojate LDAP patvirtinimą.</p><p>Registracija bus atnaujinta kai naudotojas prisijungs. Jūs taip pat galite naudoti scenarijų kad registracijos būtu suderintos. Žiūrėkite <em>enrol/ldap/cli/sync.php</em>.</p><p>Šis papildinys taip pat gali būti nustatytas į režimą kai automatiškai yra sukuriamos naujos paskaitos kai naujos grupės atsiranda LDAP. </p>';
$string['pluginnotenabled'] = 'Papildinys neįjungtas!';
$string['privacy:metadata'] = 'LDAP registravimo papildinys nesaugo jokių asmeninių duomenų.';
$string['role_mapping'] = '<p>Kiekvienam vaidmeniui turite nurodyti visus LDAP kontekstus, kuriuose yra kursus atstovaujančios grupės. Skirtingus kontekstus atskirkite kabliataškiu (;).</p><p>Taip pat turite nurodyti atributą, kurį jūsų LDAP serveris naudoja grupės nariams laikyti. Paprastai tai yra „narys“ arba „memberUid“.</p>';
$string['role_mapping_attribute'] = 'LDAP nario atributas, skirtas {$a}';
$string['role_mapping_context'] = 'LDAP kontekstai, skirti {$a}';
$string['role_mapping_key'] = 'Rolės atvaizdavimas iš LDAP';
$string['roles'] = 'Rolės atvaizdavimas';
$string['server_settings'] = 'LDAP serverio nustatymai';
$string['synccourserole'] = '== Sinchronizuojamas kursas \'{$a->idnumber}\' rolei \'{$a->role_shortname}';
$string['syncenrolmentstask'] = 'Sinchronizuoti LDAP registravimo užduotį';
$string['template'] = 'Papildoma: automatiškai sukurti kursai gali kopijuoti nustatymus iš šabloninio kurso';
$string['template_key'] = 'Šablonas';
$string['unassignrole'] = 'Atskiriama rolė  \'{$a->role_shortname}\' naudotojui  \'{$a->user_username}\'  iš kurso \'{$a->course_shortname}\' (id {$a->course_id})';
$string['unassignrolefailed'] = 'Nepavyko atskirti rolės \'{$a->role_shortname}\' naudotojui  \'{$a->user_username}\'  iš kurso \'{$a->course_shortname}\' (id {$a->course_id})';
$string['unassignroleid'] = 'Atskiriama rolė id  \'{$a->role_id}\' naudotojui id  \'{$a->user_id}';
$string['updatelocal'] = 'Atnaujinti vietinius duomenis';
$string['user_attribute'] = 'Jei grupės nariai turi išskirtinių vardų, apibūdinkite atributus naudojamus įvardijant / ieškant naudotojų. Jei naudojate LDAP autentifikavimą, ši reikšmė turėtų sutapti su atributu, apibūdintu \'ID Number\' atvaizdavimu LDAP autentifikavimo papildinyje.';
$string['user_attribute_key'] = 'ID numerio atributas';
$string['user_contexts'] = 'Jei grupėje yra narių su išskirtiniais vardais, nurodykite kontekstus, kuriuose naudotojai yra, sąrašą. Skirtingus kontekstus atskirkite kabliataškiu \';\'. Pvz.: \'ou=users,o=org; ou=others,o=org';
$string['user_contexts_key'] = 'Kontekstai';
$string['user_search_sub'] = 'Jei grupės narystė turi skiriamuosius pavadinimus, nurodykite, ar naudotojų paieška taip pat atliekama subkontekstuose.';
$string['user_search_sub_key'] = 'Ieškoti kontekstuose';
$string['user_settings'] = 'Naudotojo nustatymų peržvalga';
$string['user_type'] = 'Jei grupėje yra narių su išskirtiniais vardais, apibūdinkite kaip naudotojai yra saugojami LDAP';
$string['user_type_key'] = 'Naudotojo tipas';
$string['version'] = 'LDAP protokolo versija';
$string['version_key'] = 'Versija';
