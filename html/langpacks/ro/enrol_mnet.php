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
 * Strings for component 'enrol_mnet', language 'ro', version '4.4'.
 *
 * @package     enrol_mnet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['error_multiplehost'] = 'Există deja o sesiune de plugin de înscriere MNet pentru această gazdă. Este permisă o singură sesiune pentru fiecare gazdă și/ sau o singură instanță pentru \'Toate gazdele\'.';
$string['instancename'] = 'Numele metodei de înscriere';
$string['instancename_help'] = 'Opțional, puteți redenumi această sesiune a metodei de înscriere MNet. Dacă lăsați acest câmp gol, va fi folosit numele implicit al sesiunii, conținând numele gazdei la distanță și rolul atribuit utilizatorilor acestora.';
$string['mnet:config'] = 'Configurați sesiunea de înscriere MNet';
$string['mnet_enrol_description'] = 'Publicați acest serviciu, pentru a permite administratorilor de la {$a} să-și înscrie studenții la cursurile pe care le-ați creat pe serverul dumneavoastră.<br/><ul><li><em>Dependenţă</em>: De asemenea, trebuie să <strong>subscribe</strong> la serviciul SSO (furnizor identitate) pe {$a}.</li><li><em>Dependenţă</em>: De asemenea, trebuie să <strong>publish</strong> la serviciul SSO (furnizor identitate) pe {$a}.</li></ul><br/>Abonați-vă la acest serviciu, pentru a vă putea înscrie cursanții la cursuri {$a}.<br/><ul><li><em>Dependenţă</em>: De asemenea, trebuie să <strong>publish</strong> la serviciul SSO (furnizor identitate) pe {$a}.</li><li><em>Dependență</em>: De asemenea, trebuie să <strong>subscribe</strong> la serviciul SSO (furnizor identitate) pe {$a}.</li></ul><br/>';
$string['mnet_enrol_name'] = 'Serviciu de înscriere la distanță';
$string['pluginname'] = 'Înscrieri la distanță MNet';
$string['pluginname_desc'] = 'Permite gazdei MNet la distanță să își înscrie utilizatorii la cursurile noastre.';
$string['privacy:metadata'] = 'Plugin-ul pentru înscrieri la distanță MNet nu stochează date personale.';
$string['remotesubscriber'] = 'Gazdă la distanță';
$string['remotesubscriber_help'] = 'Selectați \'Toate gazdele\', pentru a deschide acest curs pentru toți colegii MNet cărora le oferim serviciul de înscriere la distanță. Sau alegeți o singură gazdă, pentru a face acest curs disponibil doar utilizatorilor lor.';
$string['remotesubscribersall'] = 'Toate gazdele';
$string['roleforremoteusers'] = 'Rol pentru utilizatorii lor';
$string['roleforremoteusers_help'] = 'Ce rol vor primi utilizatorii la distanță de la gazda selectată.';
