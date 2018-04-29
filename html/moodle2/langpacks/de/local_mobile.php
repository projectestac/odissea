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
 * Strings for component 'local_mobile', language 'de', branch 'MOODLE_32_STABLE'
 *
 * @package   local_mobile
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowpermissions'] = 'Rolle \'Authentifizierte/r Nutzer/in\' erweitern';
$string['allowpermissionsdescription'] = 'Bearbeiten Sie die Rolle \'Authentifizierte/r Nutzer/in\' und erlauben Sie zusätzlich das Recht moodle/webservice:createtoken.';
$string['cannotcreatetoken'] = 'Die Token für Administratoren werden nicht automatisch generiert, sondern müssen manuell auf der Website angelegt werden.';
$string['checkpluginconfiguration'] = 'Einstellungen für \'Moodle Mobile - Zusatzfeatures\' prüfen';
$string['clickheretolaunchtheapp'] = 'Klicken Sie hier, wenn die App sich nicht automatisch öffnet.';
$string['customlangstrings'] = 'Angepasste Texte';
$string['customlangstrings_desc'] = 'Die Texte, die in der App angezeigt werden, können hier angepasst werden. Geben Sie jede angepasste Textfolge in einer neuen Zeile ein, u.z im folgenden Format: Text-ID, angepasster Text und Sprachcode, jeweils getrennt durch Pipe-Zeichen.

Beispiele:<pre>
Mm.user.student | Learner | en
Mm.user.student | Aprendiz | es
</pre>
Eine vollständige Liste der Text-IDs finden Sie auf der <a href="https://github.com/moodlehq/moodlemobile-phonegapbuild/blob/master/build/lang/de.json">Entwicklerseite</a>.';
$string['custommenuitems'] = 'Angepasste Menüpunkte';
$string['custommenuitems_desc'] = 'Zusätzliche Menüpunkte können im Hauptmenü der App hinzugefügt werden. Geben Sie jeden benutzerdefinierten Menüpunkt in einer neuen Zeile ein, u.z  im folgenden Format : Menüpunkt, Link-URL, Öffnungsmethode (inappbrowser, browser oder embedded) und Sprachcode (optional, um den Menüpunkt nur in der angegebenen Sprache anzuzeigen), jeweils getrennt durch Pipe-Zeichen.

Beispiele:<pre>
App\'s help | https://someurl.xyz/help | inappbrowser | en
Visit our SIS | https://someurl.xyz | browser | en
My grades | https://someurl.xyz/local/mygrades/index.php | embedded | en
Mis calificaciones | https://someurl.xyz/local/mygrades/index.php | embedded | es
</pre>
Verwenden Sie \'inappbrowser\', wenn Sie den Link im Browser öffnen möchten, ohne die App zu verlassen. Verwenden Sie \'browser\', um den Link im Standard-Browser des Gerätes zu öffnen. Verwenden Sie \'embedded\', wenn Sie die verlinkte Datei eingebettet in einer neuen App-Seite anzeigen möchten.';
$string['disabledfeatures'] = 'Deaktivierte Funktionen';
$string['disabledfeatures_desc'] = 'Wählen Sie Funktionen aus, die in der Mobile App für Ihre Website deaktiviert sein sollen. Beachten Sie, dass einige der hier aufgeführten Funktionen bereits über andere Einstellungen deaktiviert sein könnten. Sie müssen sich abmelden und sich erneut in der App anmelden, um die Änderungen sehen zu können.';
$string['enableadditionalservice'] = 'Webservice \'Moodle Mobile - Zusatzfunktionen\' aktivieren';
$string['enableadditionalservicedescription'] = 'Dieser Webservice muss aktiviert sein.';
$string['forcelogout'] = 'Abmelden erzwingen';
$string['forcelogout_desc'] = 'Diese Einstellung legt fest, ob die Option \'Website wechseln\' durch \'Abmelden\' ersetzt wird. Auf diese Weise werden Nutzer/innen vollständig abgemeldet und müssen für den nächsten Zugriff ihr Kennwort neu eingeben.';
$string['local_mobiledescription'] = 'Das Plugin erweitert den mobilen Webservice.';
$string['local_mobilesettings'] = 'Einstellungen';
$string['mainmenu'] = 'Hauptmenü';
$string['mobilefeatures'] = 'Mobile Features';
$string['pluginname'] = 'Moodle Mobile - Zusatzfeatures';
$string['pluginnotenabledorconfigured'] = 'Das Plugin \'Moodle Mobile - Zusatzfeatures\' muss aktiviert und konfiguriert sein, um die App automatisch zu starten.';
$string['remoteaddons'] = 'Remote Add-ons';
