<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'auth_email', language 'de', branch 'MOODLE_36_STABLE'
 *
 * @package   auth_email
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_emaildescription'] = '<p>Die Authentifizierung \'E-Mail basiert\' ermöglicht, dass sich Nutzer/innen selber in Moodle neu anmelden können. Die Nutzer/innen erhalten nach dem Ausfüllen des Nutzerprofils automatisch eine E-Mail mit einer Bestätigungs-URL zugesendet, über die das neue Nutzerkonto freigeschaltet werden muss. Anschließend wird bei der Anmeldung nur noch der Anmeldename und das Kennwort anhand der gespeicherten Daten geprüft.</p>
<p>Hinweis: Zusätzlich zur Aktivierung muss für die Selbstregistrierung das Plugin \'E-Mail basiert\' auf der Seite \'Authentifizierungen verwalten\' ausgewählt werden.</p>';
$string['auth_emailnoemail'] = 'Der Versuch ist gescheitert, Ihnen eine E-Mail zu senden!';
$string['auth_emailrecaptcha'] = 'Diese Option fügt bei der Selbstregistierung ein Kontrollelement (Bild oder Audio) ein, um die Website gegen Spambots zu schützen. Weitere Infos finden Sie unter <a href="http://www.google.com/recaptcha" target="_blank">http://www.google.com/recaptcha</a>.';
$string['auth_emailrecaptcha_key'] = 'ReCaptcha aktivieren';
$string['auth_emailsettings'] = 'Einstellungen';
$string['pluginname'] = 'E-Mail basiert';
$string['privacy:metadata'] = 'Das Plugin \'Authentifizierung E-Mail-Selbstregistrierung\' speichert keine personenbezogenen Daten.';
