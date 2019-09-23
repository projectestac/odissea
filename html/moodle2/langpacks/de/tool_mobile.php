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
 * Strings for component 'tool_mobile', language 'de', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_mobile
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adodbdebugwarning'] = 'ADOdb Debugging ist aktiviert. Das sollte in den Einstellungen für die externe Datenbankauthentifizierung oder für die externe Datenbankeinschreibung deaktiviert werden.';
$string['androidappid'] = 'Eindeutige ID der Android-App';
$string['androidappid_desc'] = 'Diese Einstellung sollte nur geändert werden, wenn Sie eine eigene Android-App verwenden.';
$string['apppolicy'] = 'Datenschutzinformation für mobile App';
$string['apppolicy_help'] = 'Die URL zur Datenschutzinformation für Nutzer/innen der mobilen App, die auf der Seite \'Info\' in der App aufgeführt ist. Wenn das Feld leer bleibt, wird stattdessen die URL der Datenschutzinformation für die Website verwendet.';
$string['autologinkeygenerationlockout'] = 'Das Erzeugen von Auto-Login-Token ist blockiert. Sie müssen 6 Minuten zwischen den Anforderungen warten.';
$string['autologinnotallowedtoadmins'] = 'Das Auto-Login ist für Administratoren der Website nicht erlaubt.';
$string['cachedef_plugininfo'] = 'Dies speichert die Liste von Plugins mit mobilen Add-ons.';
$string['clickheretolaunchtheapp'] = 'Tippen Sie hier, falls sich die App nicht automatisch öffnet.';
$string['configmobilecssurl'] = 'Die CSS-Datei dient zur Anpassung der mobilen App.';
$string['customlangstrings'] = 'Angepasste Texte';
$string['customlangstrings_desc'] = 'Wörter und Texteinträge für die mobile App können angepasst werden. Schreiben Sie jeden angepassten Text in eine neue Zeile, u.z. in folgendem Format: Text-ID, angepasster Text und Sprachcode, jeweils getrennt durch Pipe-Zeichen |.

Beispiel:<pre>
mm.user.student|Learner|en
mm.user.student|Aprendiz|es
</pre>
Die vollständige Liste der Text-IDs und weitere Infos finden Sie in der <a href="https://github.com/moodlehq/moodlemobile-phonegapbuild/blob/master/assets/lang/de.json" target="_blank">Dokumentation</a>.';
$string['custommenuitems'] = 'Angepasste Menüpunkte';
$string['custommenuitems_desc'] = 'Zusätzliche Menüpunkte können im Hauptmenü der App hinzugefügt werden. Geben Sie jeden benutzerdefinierten Menüpunkt in eine neue Zeile mit folgendem Format ein: Elementtext, Link-URL, Link-Öffnungsmethode und Sprachcode (optional, zum Anzeigen des Elements in der angegebenen Sprache), getrennt durch Pipe-Zeichen.

Link-Öffnungsmethoden sind: App (zur Verknüpfung mit einer von der App unterstützten Aktivität), Inappbrowser (zum Öffnen im integrierten Browser innerhalb der App), Browser (zum Öffnen im Standard-Browser außerhalb der App) und eingebettet (zum Anzeigen in einem Iframe in einer neuen Seite innerhalb der App).

Zum Beispiel:
<pre>
App-Hilfe|https://someurl.xyz/help|inappbrowser
Meine Bewertungen|https://someurl.xyz/local/mygrades/index.php|embedded|en
Mis calificaciones|https://someurl.xyz/local/mygrades/index.php|embedded|es
</pre>';
$string['disabledfeatures'] = 'Deaktivierte Funktionen';
$string['disabledfeatures_desc'] = 'Wählen Sie hier die Funktionen aus, die für Ihre Website in der mobilen App deaktiviert sein sollen. Beachten Sie, dass einige Funktionen bereits an anderer Stelle deaktiviert sein könnten. Um die Änderungen sehen zu können, müssen Sie sich in der App von der Website abmelden und neu anmelden.';
$string['displayerrorswarning'] = 'Die Anzeige von Debug-Mitteilungen scheint aktiv zu sein. Diese Einstellung sollte deaktiviert werden. (debugdisplay)';
$string['downloadcourse'] = 'Kurs herunterladen';
$string['downloadcourses'] = 'Kurse herunterladen';
$string['enablesmartappbanners'] = 'Hinweisbanner für App aktivieren';
$string['enablesmartappbanners_desc'] = 'Diese Einstellung regelt die Anzeige eines Hinweisbanners für die mobile App, sobald die Website im Browser auf einem mobilen Endgerät aufgerufen wird.';
$string['forcedurlscheme'] = 'Wenn sich ausschließlich die eigene angepasste App öffnen soll, geben Sie hier deren URL Scheme an, andernfalls lassen Sie dieses Feld leer.';
$string['forcedurlscheme_key'] = 'URL Scheme';
$string['forcelogout'] = 'Abmeldung erzwingen';
$string['forcelogout_desc'] = 'Diese Einstellung legt fest, dass der Menüpunkt \'Website wechseln\' auf \'Abmelden\' geändert wird. Nutzer/innen werden dann vollständig aus der Website abgemeldet und müssen ihr Kennwort beim nächsten Zugriff neu eingeben.';
$string['getmoodleonyourmobile'] = 'Laden Sie die mobile App';
$string['httpsrequired'] = 'HTTPS erforderlich';
$string['insecurealgorithmwarning'] = 'Möglicherweise verwendet das HTTPS-Zertifikat eine unsichere SHA-1 Signatur. Versuchen Sie, das Zertifikat zu aktualisieren.';
$string['invalidcertificatechainwarning'] = 'Die Zertifikatskette scheint ungültig zu sein.';
$string['invalidcertificateexpiredatewarning'] = 'Das HTTPS-Zertifikat für die Website scheint abgelaufen zu sein.';
$string['invalidcertificatestartdatewarning'] = 'Das HTTPS-Zertifikat für die Website scheint noch nicht gültig ist (Startdatum in der Zukunft).';
$string['invalidprivatetoken'] = 'Ungültiges privates Token. Das Token sollte nicht leer sein oder als GET Parameter übermittelt werden.';
$string['invaliduserquotawarning'] = 'Das Nutzerkontingent (userquota) hat einen ungültigen Wert. In den Sicherheitsregeln der Website sollte ein gültiger ganzzahliger Wert eingetragen werden.';
$string['iosappid'] = 'Eindeutige ID der iOS-App';
$string['iosappid_desc'] = 'Diese Einstellung sollte nur geändert werden, wenn Sie eine eigene iOS-App verwenden.';
$string['loginintheapp'] = 'In der App';
$string['logininthebrowser'] = 'Im Browser (für SSO)';
$string['loginintheembeddedbrowser'] = 'Im integrierten Browser (für SSO)';
$string['mainmenu'] = 'Hauptmenü';
$string['mobileapp'] = 'Mobile App';
$string['mobileappconnected'] = 'Mobile App verbunden';
$string['mobileappearance'] = 'Mobile Darstellung';
$string['mobileappenabled'] = 'Für diese Website ist der mobile Zugriff aktiviert. Holen Sie sich die <a href="{$a}">mobile App</a>.';
$string['mobileauthentication'] = 'Mobile Authentifizierung';
$string['mobilecssurl'] = 'CSS';
$string['mobilefeatures'] = 'Mobile Funktionen';
$string['mobilenotificationsdisabledwarning'] = 'Die mobilen Systemnachrichten sind nicht aktiviert. Sie sollten unter "Systemnachrichten verwalten" aktiviert werden.';
$string['mobilesettings'] = 'Mobile Einstellungen';
$string['offlineuse'] = 'Offline-Nutzung';
$string['pluginname'] = 'Moodle App Tools';
$string['pluginnotenabledorconfigured'] = 'Das Plugin ist nicht aktiviert oder nicht richtig konfiguriert.';
$string['privacy:metadata:core_userkey'] = 'Nutzerschlüssel zum Erstellen eines Auto-Login für die aktuelle Person';
$string['privacy:metadata:preference:tool_mobile_autologin_request_last'] = 'Datum der letzten Auto-Login-Schlüsselanforderung. Zwischen jeder Anfrage sind 6 Minuten erforderlich.';
$string['remoteaddons'] = 'Remote Add-ons';
$string['selfsignedoruntrustedcertificatewarning'] = 'Das HTTPS-Zertifikat scheint selbst erstellt und nicht vertrauenswürdig zu sein. Die mobile App funktioniert nur mit vertrauenswürdigen Websites.';
$string['setuplink'] = 'Download für mobile App';
$string['setuplink_desc'] = 'Link zum Download der mobilen App im AppStore und bei Google Play.';
$string['smartappbanners'] = 'Hinweisbanner für App';
$string['typeoflogin'] = 'Login';
$string['typeoflogin_desc'] = 'Wenn die Website eine SSO-Authentifizierung verwendet, wählen Sie entweder \'Im Browser\' oder \'Im integrierten Browser\'. Der integrierte Browser sorgt für eine bessere Nutzerführung, funktioniert aber nicht mit allen SSO-Plugins.';
