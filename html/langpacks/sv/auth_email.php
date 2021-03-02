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
 * Strings for component 'auth_email', language 'sv', version '3.8'.
 *
 * @package     auth_email
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_emaildescription'] = 'E-postbekräftelse är standardvalet som autentiseringsmetod.  När användaren registrerar sig, väljer eget nytt användarnamn och lösenord, kommer en bekräftelse via e-post sändas till användarens e-postadress.  Detta e-postbrev innehåller en säker länk till en sida där användaren kan bekräfta sitt konto. Framtida inlogging kontrollerar bara användarnamn och lösenord mot de lagrade värdena i Moodles databas.';
$string['auth_emailnoemail'] = 'Vi försökte att skicka e-post till dig men det misslyckades!';
$string['auth_emailrecaptcha'] = 'Lägger till ett audio/visuellt formulärelement till sidan där användare kan registrera sig själva med hjälp av e-post. Det här skyddar din webbplats mot de som skickar ut skräppost och bidrar till något som är värt att ta vara på. Se http://recaptcha.net/learnmore.html för mer detaljer.';
$string['auth_emailrecaptcha_key'] = 'Aktivera reCAPTCHA-elementet';
$string['auth_emailsettings'] = 'Inställningar';
$string['pluginname'] = 'E-postbaserad självregistrering';
