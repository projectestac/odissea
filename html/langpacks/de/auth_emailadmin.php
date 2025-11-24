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
 * Strings for component 'auth_emailadmin', language 'de', version '4.5'.
 *
 * @package     auth_emailadmin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_emailadminconfirmation'] = 'Lieber Administrator,

diese Mitteilung wurde automatisch versendet, weil auf der Website \'{$a->sitename}\' ein neues Nutzerkonto mit folgende Daten angefordert wurde und Sie als Person zur Bestätigung eingetragen sind.

Ein Beispiel für ein Feld im Nutzerprofil ist:
user->lastname: {$a->lastname}

Ein Nutzerprofil hat folgende Felder:
{$a->customfields}

Die im neuen Nutzerprofil eingetragenen Daten lauten:
{$a->userdata}

Um das neue Nutzerkonto zu bestätigen, rufen Sie diese Web-Adresse auf:

{$a->link}

In den meisten E-Mail-Programmen sollte diese Adresse als knickbarer Link angezeigt werden. Falls ein Klick darauf nicht funktioniert, kopieren Sie die Adresse und fügen Sie diese in das Adressfeld Ihres Webbrowsers ein.

Sie können aber auch neue Nutzerkonten bestätigen, in dem Sie in Moodle in die Nutzerverwaltung \'Website-Administration > Nutzer/innen\' gehen und das neue Nutzerkonto suchen.';
$string['auth_emailadminconfirmationsubject'] = '{$a}: Bestätigung für Nutzerkonto';
$string['auth_emailadminconfirmsent'] = '<p>Ihr Nutzerkonto wurde registriert und benötigt die Bestätigung durch einen Administrator der Website. Sie sollten in Kürze eine Bestätigung erhalten oder bei Unklarheiten kontaktiert werden.</p>';
$string['auth_emailadmindescription'] = '<p>Die Authentifizierung \'E-Mail basiert mit Administratorbestätigung\' ermöglicht, dass sich Nutzer/innen selber in Moodle neu anmelden können. Die Nutzer/innen erhalten nach dem Ausfüllen des Nutzerprofils automatisch eine E-Mail mit einer Bestätigungs-URL zugesendet, über die das neue Nutzerkonto freigeschaltet werden muss. Anschließend wird bei der Anmeldung nur noch der Anmeldename und das Kennwort anhand der gespeicherten Daten geprüft.</p>
<p>Hinweis: Zusätzlich zur Aktivierung muss für die Selbstregistrierung das Plugin \'E-Mail basiert mit Administratorbestätigung\' auf der Seite \'Authentifizierungen verwalten\' ausgewählt werden.</p>';
$string['auth_emailadminnoadmin'] = 'Basierend auf der Mitteilungsstrategie wurde kein Administrator gefunden. Prüfen Sie die Konfiguration von auth_emailadmin.';
$string['auth_emailadminnoemail'] = 'Der Versuch, Ihnen eine E-Mail zu senden, ist gescheitert!';
$string['auth_emailadminnotif_failed'] = 'Die Registrierungsmitteilung konnte nicht an folgende E-Mail-Adresse gesendet werden:';
$string['auth_emailadminnotif_strategy'] = 'Diese Option legt fest, an wen die Registrierungsmitteilungen gesendet werden. Verfügbare Optionen sind \'Hauptadministrator, \'Alle Administrator/innen\' oder eine bestimmte ausgewählte Administrator/in.';
$string['auth_emailadminnotif_strategy_all'] = 'Alle Administrator/innen';
$string['auth_emailadminnotif_strategy_first'] = 'Hauptadministrator/in';
$string['auth_emailadminnotif_strategy_key'] = 'Mitteilungsstrategie';
$string['auth_emailadminrecaptcha'] = 'Diese Option fügt bei der Selbstregistierung ein Kontrollelement (Bild oder Audio) ein, um die Website gegen Spambots zu schützen. Weitere Infos finden Sie unter <a href="http://www.google.com/recaptcha" target="_blank">http://www.google.com/recaptcha</a>.';
$string['auth_emailadminrecaptcha_key'] = 'ReCaptcha aktivieren';
$string['auth_emailadminsettings'] = 'Einstellungen';
$string['auth_emailadminuserconfirmation'] = 'Hallo {$a->firstname},

herzlich willkommen auf dieser Website. Ihr neues Nutzerkonto wurde bestätigt. Falls Sie möchten, schreiben Sie uns, wie Sie auf diese Website aufmerksam wurden. Für Kurszugriffe teilen Sie uns bitte mit, an welchem Projekt Sie teilhaben möchten.

Wir freuen uns, dass Sie sich bei uns angemeldet haben. Sie sind jetzt Mitglied einer schnell wachsenden Gemeinschaft, die Moodle nutzt, um Projekte, Ideen, Arbeit und Wissen zu teilen. Falls Sie Fragen haben, schreiben Sie an die Administrator/innen dieser Website.

Herzliche Grüße
Administrator

<a href=http://www.my.org/>http://www.my.org</a>
<a href=mailto:myorg@gmail.com>myorg@gmail.com</a>
<a href=tel:123%20555%205555>123 555 5555</a>';
$string['pluginname'] = 'E-Mail basiert mit Administratorbestätigung';
