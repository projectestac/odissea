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
 * Strings for component 'auth_shibboleth', language 'ro', version '4.5'.
 *
 * @package     auth_shibboleth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_shib_auth_logo'] = 'Sigla metodei de autentificare';
$string['auth_shib_auth_logo_description'] = 'Furnizați o siglă pentru metoda de autentificare Shibboleth care este familiară utilizatorilor dvs. Acesta ar putea fi sigla federației dvs. Shibboleth, de ex. <tt> SWITCHaai Login </tt> sau <tt> InCommon Login </tt> sau similar.';
$string['auth_shib_auth_method'] = 'Numele metodei de autentificare';
$string['auth_shib_auth_method_description'] = 'Furnizați o denumire pentru metoda de autentificare Shibboleth, care este familiară utilizatorilor dvs. Acesta ar putea fi numele federației dvs. Shibboleth, de ex. <tt> SWITCHaai Login </tt> sau <tt> InCommon Login </tt> sau similar.';
$string['auth_shib_changepasswordurl'] = 'URL schimbare parolă';
$string['auth_shib_contact_administrator'] = 'În cazul în care nu sunteți asociat cu organizațiile date și aveți nevoie de acces la un curs de pe acest server, vă rugăm să contactați <a href="mailto:{$a}"> Administratorul Moodle </a>.';
$string['auth_shib_convert_data'] = 'API de modificare a datelor';
$string['auth_shib_convert_data_description'] = 'Puteți utiliza acest API pentru a modifica în continuare datele furnizate de Shibboleth. Citiți <a href="{$a}"> README </a> pentru instrucțiuni suplimentare.';
$string['auth_shib_convert_data_filepath_warning'] = 'Nu puteți utiliza un fișier care se află în directorul de date actual al site-ului ($CFG->dataroot) ca API de modificare a datelor.';
$string['auth_shib_convert_data_warning'] = 'Fișierul nu există sau nu poate fi citit de  webserver!';
$string['auth_shib_idp_list'] = 'Furnizorii de identitate';
$string['auth_shib_idp_list_description'] = 'Furnizați o listă cu entityID-urile furnizorul de identitate pentru a permite utilizatorului să aleagă pe pagina de autentificare. <br /> Pe fiecare linie trebuie să existe o entitate separată prin virgulă pentru entityID-ul IdP (vezi fișierul de metadate Shibboleth) și numele IdP ca va fi afișat în lista derulantă. <br /> Ca al treilea parametru opțional, puteți adăuga locația unui inițiator de sesiune Shibboleth care va fi utilizat în cazul în care instalarea Moodle face parte dintr-o configurație multi-federație.';
$string['auth_shib_instructions'] = 'Utilizați <a href="{$a}"> conectarea la Shibboleth </a> pentru a obține acces prin Shibboleth, dacă instituția dvs. o acceptă. În caz contrar, utilizați formularul normal de conectare afișat aici.';
$string['auth_shib_instructions_help'] = 'Aici ar trebui să furnizați instrucţiuni pentru ca utilizatorii dvs. să poată să explice Shibboleth. Acestea vor fi afişate pe pagina de conectare în secţiunea instrucţiuni. Instrucţiunile trebuie să includă un link către "<b>{$a}</b>" pe care utilizatorii să facă click atunci când vor să se conecteze';
$string['auth_shib_instructions_key'] = 'Instrucțiuni pentru autentificare';
$string['auth_shib_integrated_wayf'] = 'Service Moodle WAYF';
$string['auth_shib_integrated_wayf_description'] = 'Dacă activați acest lucru, Moodle va folosi propriul serviciu WAYF în locul celui configurat pentru Shibboleth. Moodle va afișa o listă derulantă pe această pagină alternativă de conectare în care utilizatorul trebuie să își selecteze Furnizorul de identitate.';
$string['auth_shib_logout_return_url'] = 'Adresă URL alternativă de logout';
$string['auth_shib_logout_return_url_description'] = 'Furnizați adresa URL către care utilizatorii Shibboleth vor fi redirecționați după deconectare. <br /> Dacă este lăsat necompletat, utilizatorii vor fi redirecționați către locația către care moodle îi va redirecționa';
$string['auth_shib_logout_url'] = 'Adresa URL a gestionarului de deconectare a furnizorului de servicii Shibboleth';
$string['auth_shib_logout_url_description'] = 'Furnizați adresa URL către gestionarul de deconectare a furnizorului de servicii Shibboleth. Aceasta este de obicei <tt> /Shibboleth.sso/Logout </tt>';
$string['auth_shib_no_organizations_warning'] = 'Dacă doriți să utilizați serviciul WAYF integrat, trebuie să furnizați o listă separată de comă a ID-urilor entității furnizorului de identitate, numele acestora și opțional un inițiator de sesiune.';
$string['auth_shib_only'] = 'Doar Shibboleth';
$string['auth_shib_only_description'] = 'Bifati această opțiune dacă autentificarea Shibboleth va fi forțată';
$string['auth_shib_username_description'] = 'Numele variabilei de mediu a serverului web Shibboleth care va fi folosit ca nume de utilizator Moodle';
$string['auth_shibboleth_errormsg'] = 'Vă rugăm să selectați organizația unde sunteți membru!';
$string['auth_shibboleth_login'] = 'Logare Shibboleth';
$string['auth_shibboleth_login_long'] = 'Logare in Moodle via Shibboleth';
$string['auth_shibboleth_manual_login'] = 'Logare manuală';
$string['auth_shibboleth_select_member'] = 'Sunt un membru al...';
$string['auth_shibboleth_select_organization'] = 'Pentru autentificare prin Shibboleth, vă rugăm să selectați organizația dvs. din meniul derulant:';
$string['auth_shibbolethdescription'] = 'Folosind această metodă, utilizatorii sunt creați și autentificați folosind Shibboleth. Pentru detalii despre configurare, consultați <a href="{$a}"> Shibboleth README </a>.';
$string['pluginname'] = 'Shibboleth';
$string['privacy:metadata'] = 'Plugin-ul de autentificare Shibboleth nu stochează date personale.';
$string['shib_invalid_account_error'] = 'Sunteți autentificat în Shibboleth, dar Moolde nu găsește un cont corespunzător numelui dumnevoatră de utilizator. Contul dumneavoastră nu există sau a fost suspendat.';
$string['shib_no_attributes_error'] = 'Se pare că sunteți autentificat Shibboleth, dar Moodle nu a primit niciun atribut de utilizator. Vă rugăm să verificați dacă furnizorul dvs. de identitate eliberează atributele necesare ({$a}) către furnizorul de servicii Moodle rulează sau informați administratorul web al acestui server.';
$string['shib_not_all_attributes_error'] = 'Moodle are nevoie de anumite atribute Shibboleth care nu sunt prezente în cazul dvs. Atributele sunt: {$a} <br /> Vă rugăm să contactați webmasterul acestui server sau furnizorul dvs. de identitate.';
$string['shib_not_set_up_error'] = 'Autentificarea Shibboleth nu pare să fie configurată corect, deoarece nu se găsesc variabile de mediu Shibboleth pentru această pagină. Vă rugăm să consultați <a href="{$a}"> README </a> pentru instrucțiuni suplimentare despre cum să configurați autentificarea Shibboleth sau contactați administratorul web al acestei instalări Moodle.';
