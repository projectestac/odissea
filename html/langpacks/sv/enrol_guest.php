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
 * Strings for component 'enrol_guest', language 'sv', version '4.1'.
 *
 * @package     enrol_guest
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowguests'] = 'Denna kurs tillåter gäster.';
$string['guest:config'] = 'Konfigurera instanser för gästaccess';
$string['guestaccess_withoutpassword'] = 'Tillåt gäster';
$string['guestaccess_withpassword'] = 'Tillåt gäster';
$string['password'] = 'Gästlösenord';
$string['password_help'] = 'Ett gästlösenord begränsar tillträde till enbart gäster som känner till lösenordet. Gäster kommer att frågas om lösenordet varje gång de besöker kursen.';
$string['passwordinvalid'] = 'Felaktigt gästlösenord, vänligen prova igen';
$string['passwordinvalidhint'] = 'Felaktigt gästlösenord, vänligen prova igen<br />
(Ledtråd: det börjar med \'{$a}\')';
$string['pluginname'] = 'Tillåt gäster';
$string['pluginname_desc'] = '"Tillåt gäster" medger bara temporärt tillträde till kurs, användaren registreras inte i kursen.';
$string['privacy:metadata'] = 'Pluginmodulen för gäståtkomstregistrering lagrar inga personuppgifter.';
$string['requirepassword'] = 'Kräv gästlösenord';
$string['requirepassword_desc'] = 'Kräv gästlösenord i nya kurser och förhindra borttagande av gästlösenord i existerande kurser.';
$string['showhint'] = 'Ge en ledtråd till gästlösenordet';
$string['showhint_desc'] = 'Visa första bokstaven eller siffran i gästlösenordet';
$string['status'] = 'Tillåt gäster';
$string['status_desc'] = '"Tillåt gäster" som förinställning';
$string['status_help'] = 'Denna inställning avgör om kursen tillåter gäster utan att kräva registrering.';
$string['status_link'] = 'enrol/guest';
$string['usepasswordpolicy'] = 'Följ regler för att bestämma lösenord';
$string['usepasswordpolicy_desc'] = 'Använd systemets regler för lösenord för att bestämma gästlösenord';
