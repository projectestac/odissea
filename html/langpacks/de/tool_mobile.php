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
 * Strings for component 'tool_mobile', language 'de', version '4.4'.
 *
 * @package     tool_mobile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adodbdebugwarning'] = 'ADOdb Debugging ist aktiviert. Dies sollte in den Einstellungen für die externe Datenbankauthentifizierung oder für die externe Datenbankeinschreibung deaktiviert werden.';
$string['androidappid'] = 'Eindeutige ID der Android-App';
$string['androidappid_desc'] = 'Diese Einstellung sollte nur dann geändert werden, wenn Sie eine eigene Android-App verwenden.';
$string['apppolicy'] = 'URL zu den Richtlinien für die App';
$string['apppolicy_help'] = 'URL zu den Richtlinien für die mobile App, die auf der Seite \'Info\' in der App angezeigt wird. Wenn das Feld leer bleibt, wird stattdessen die URL der Datenschutzinfo für die Website verwendet.';
$string['apprequired'] = 'Diese Funktionalität ist nur verfügbar, wenn Moodle Mobile oder Moodle Desktop verwendet wird.';
$string['autologinkeygenerationlockout'] = 'Das Erzeugen von Auto-Login-Token ist blockiert. Sie müssen {$a} Minuten zwischen den Anforderungen warten.';
$string['autologinmintimebetweenreq'] = 'Verzögerung zwischen zwei Auto-Login-Versuchen';
$string['autologinmintimebetweenreq_desc'] = 'Minimale Zeit zwischen zwei Auto-Login-Versuchen mit der mobilen App. Sie sollten einen niedrigen Wert verwenden, wenn Nutzer/innen der App häufig aufgefordert werden, ihre Anmeldedaten einzugeben, um eingebettete Inhalte anzuzeigen.';
$string['autologinnotallowedtoadmins'] = 'Das Auto-Login ist für Administrator/innen der Website nicht erlaubt.';
$string['autologout'] = 'Automatisches Abmelden für Nutzer/innen erzwingen';
$string['autologout_desc'] = 'Aus Sicherheitsgründen können Sie das automatische Abmelden für alle Nutzer/innen erzwingen, wenn diese die App verlassen, schließen oder in den Hintergrund bringen. Nutzer/innen müssen sich dann erneut anmelden, wenn sie zur App zurückkehren.';
$string['autologoutcustom'] = 'Nutzerdefinierte Zeit nach dem Verlassen oder Schließen der App';
$string['autologoutinmediate'] = 'Sofort nach dem Verlassen oder Schließen der App';
$string['autologouttime'] = 'Timer für automatische Abmeldung';
$string['cachedef_plugininfo'] = 'Hier wird die Liste von Plugins mit mobilen Add-ons gespeichert.';
$string['cachedef_subscriptiondata'] = 'Hier werden die Infos zum Moodle-App-Abonnement gespeichert.';
$string['clickheretolaunchtheapp'] = 'Tippen Sie hier, falls sich die mobile App nicht automatisch öffnet.';
$string['configmobilecssurl'] = 'Die CSS-Datei ermöglicht die optische Anpassung der mobilen App.';
$string['customlangstrings'] = 'Nutzerdefinierte Texte';
$string['customlangstrings_desc'] = 'Wörter und Texteinträge für die mobile App können angepasst werden. Schreiben Sie jeden angepassten Text in eine neue Zeile, u.z. in folgendem Format: Text-ID, angepasster Text und Sprachcode, jeweils getrennt durch Pipe-Zeichen |.

Beispiel:<pre>
mm.user.student|Learner|en
mm.user.student|Aprendiz|es
</pre>
Die vollständige Liste der Text-IDs und weitere Infos finden Sie in der Dokumentation.';
$string['custommenuitems'] = 'Nutzerdefinierte Menüpunkte';
$string['custommenuitems_desc'] = 'Im Hauptmenü der App können zusätzliche Punkte hinzugefügt werden. Geben Sie jeden nutzerdefinierten Menüpunkt in eine neue Zeile mit folgendem Format ein: Menütext, Link-URL, Link-Öffnungsmethode und Sprachcode (optional zum Anzeigen in der angegebenen Sprache), jeweils getrennt durch Pipe-Zeichen.

Methoden zum Öffnen von Links sind: App (zum Verknüpfen mit einer von der App unterstützten Aktivität), inappbrowser (zum Öffnen im Browser innerhalb der App), Browser (zum Öffnen im Standardbrowser außerhalb der App) und embedded (zum Anzeigen in einem iframe auf einer neuen Seite innerhalb der App).

Beispiele:
<pre>
App-Hilfe|https://someurl.zyx/help|inappbrowser
Meine Bewertungen|https://someurl.zyx/local/mygrades/index.php|embedded|en
Mis calificaciones|https://someurl.zyx/local/mygrades/index.php|embedded|es
You will only see this in English|https://someurl.zyx/english|browser|en_only
</pre>';
$string['darkmode'] = 'Dunkler Modus';
$string['disabledfeatures'] = 'Deaktivierte Funktionen';
$string['disabledfeatures_desc'] = 'Wählen Sie hier die Funktionen aus, die für Ihre Website in der mobilen App deaktiviert sein sollen. Einige Funktionen könnten bereits an anderer Stelle deaktiviert sein. Um die Änderungen sehen zu können, müssen Sie sich in der App von der Website abmelden und neu anmelden.';
$string['displayerrorswarning'] = 'Die Anzeige von Debug-Mitteilungen ist aktiviert. Diese Einstellung sollte deaktiviert werden. (debugdisplay)';
$string['downloadcourse'] = 'Kurs herunterladen';
$string['downloadcourses'] = 'Kurse herunterladen';
$string['enablesmartappbanners'] = 'Hinweisbanner für App aktivieren';
$string['enablesmartappbanners_desc'] = 'Diese Einstellung regelt die Anzeige eines Hinweisbanners für die mobile App, sobald die Website im Browser auf einem mobilen Endgerät aufgerufen wird.';
$string['filetypeexclusionlist'] = 'Ausschlussliste für Dateitypen';
$string['filetypeexclusionlist_desc'] = 'Wählen Sie alle Dateitypen aus, die nicht für ein mobiles Endgerät vorgesehen sind. Solche Dateien werden zwar weiter im Kurs aufgelistet, aber beim Versuch, sie zu öffnen, wird eine Warnung angezeigt. Nutzer/innen können die Warnung aber ignorieren und die Datei trotzdem öffnen.';
$string['filetypeexclusionlistplaceholder'] = 'Ausschlussliste für mobile Dateitypen';
$string['forcedurlscheme'] = 'Wenn Sie ausschließlich die offizielle Moodle-App zulassen möchten, tragen Sie hier den Standardwert ein. Falls Sie für Ihre Institution eine angepasste Branded-App verwenden, geben Sie hier deren URL-Schema an. Lassen Sie das Feld leer, wenn Sie jede App zulassen möchten.';
$string['forcedurlscheme_key'] = 'URL Schema';
$string['forcelogout'] = 'Abmeldung erzwingen';
$string['forcelogout_desc'] = 'Diese Einstellung legt fest, dass Nutzer/innen immer vollständig abgemeldet werden und beim nächsten Zugriff auf der Website ihr Kennwort neu eingeben müssen.';
$string['getmoodleonyourmobile'] = 'Laden Sie die mobile App';
$string['h5poffline'] = 'H5P-Inhalte offline anzeigen';
$string['httpsrequired'] = 'HTTPS erforderlich';
$string['insecurealgorithmwarning'] = 'Möglicherweise verwendet das HTTPS-Zertifikat eine unsichere SHA1-Signatur. Versuchen Sie, das Zertifikat zu aktualisieren.';
$string['invalidcertificatechainwarning'] = 'Die Zertifikatskette scheint ungültig zu sein. Dieses Zertifikat funktioniert möglicherweise im Browser, aber nicht für eine mobile App.';
$string['invalidcertificateexpiredatewarning'] = 'Das HTTPS-Zertifikat für die Website scheint abgelaufen zu sein.';
$string['invalidcertificatestartdatewarning'] = 'Das HTTPS-Zertifikat für die Website scheint noch nicht gültig ist (Startdatum in der Zukunft).';
$string['invalidprivatetoken'] = 'Ungültiges privates Token. Das Token sollte nicht leer sein oder als GET Parameter übermittelt werden.';
$string['invaliduserquotawarning'] = 'Das Nutzerkontingent (userquota) hat einen ungültigen Wert. In den Sicherheitseinstellungen der Website sollte ein gültiger ganzzahliger Wert eingetragen werden.';
$string['iosappid'] = 'Eindeutige ID der iOS-App';
$string['iosappid_desc'] = 'Diese Einstellung sollte nur dann geändert werden, wenn Sie eine eigene iOS-App verwenden.';
$string['launchviasiteinbrowser'] = 'Über die Website im Standardbrowser starten';
$string['loginintheapp'] = 'In der App';
$string['logininthebrowser'] = 'Im Browser (für SSO)';
$string['loginintheembeddedbrowser'] = 'Im integrierten Browser (für SSO)';
$string['logoutconfirmation'] = 'Möchten Sie sich wirklich von der mobilen App auf allen mobilen Geräten abmelden? Wenn Sie sich abmelden, müssen Sie Ihren Anmeldenamen und das Kennwort auf allen Geräten neu eingeben, um die App zu verwenden.';
$string['mainmenu'] = 'Hauptmenü';
$string['managefiletypes'] = 'Dateitypen verwalten';
$string['minimumversion'] = 'Wenn eine minimal erforderliche Version für die Moodle-App (ab 3.8.0) vorgegeben ist, werden Nutzer/innen mit einer älteren Version zur Aktualisierung der App aufgefordert, bevor sie auf die Website zugreifen können.';
$string['minimumversion_key'] = 'Minimal erforderliche Version der App';
$string['mobileapp'] = 'Mobile App';
$string['mobileappearance'] = 'Mobile Darstellung';
$string['mobileappenabled'] = 'Für diese Website ist der mobile Zugriff aktiviert. Laden Sie die <a href="{$a}">mobile App</a> herunter.';
$string['mobileappsubscription'] = 'Moodle-App-Abonnement';
$string['mobileauthentication'] = 'Mobile Authentifizierung';
$string['mobilecssurl'] = 'CSS';
$string['mobilefeatures'] = 'Mobile Features';
$string['mobilenotificationsdisabledwarning'] = 'Die mobilen Push-Mitteilungen sind nicht aktiviert. Sie sollten unter "Systemnachrichten verwalten" aktiviert werden.';
$string['mobilesettings'] = 'Mobile Einstellungen';
$string['moodleappsportalfeatureswarning'] = 'Einige Funktionen könnten abhängig von Ihrem Moodle-App-Abonnement eingeschränkt sein. Weitere Infos finden Sie im <a href="{$a}" target="_blank">Moodle Apps-Portal</a>.';
$string['notifications'] = 'Systemnachrichten';
$string['notificationsactivedevices'] = 'Aktive Endgeräte';
$string['notificationscurrentactivedevices'] = 'Endgeräte, die in diesem Monat Systemnachrichten erhalten';
$string['notificationsignorednotifications'] = 'Systemnachrichten nicht gesendet';
$string['notificationslimitreached'] = 'Das monatliche Limit für aktive Endgeräte wurde überschritten. Für einige Nutzer/innen werden keine Systemnachrichten gesendet. Um das zu beheben, müssen Sie den <a href="{$a}" target="_blank"> App-Plan erweitern </a>.';
$string['notificationsmissingwarning'] = 'Die Statistik zu den Moodle-App-Systemnachrichten konnte nicht abgerufen werden. Wahrscheinlich sind die mobilen Systemnachrichten auf der Website nicht aktiviert. Sie können dies unter \'Website-Administration > Messaging > Mobile\' aktivieren.';
$string['notificationsnewdevices'] = 'Neue Endgeräte';
$string['notificationsseemore'] = 'Hinweis: Die Nutzungsstatistiken für die Moodle-App werden nicht in Echtzeit berechnet. Um auf detaillierte Statistiken einschließlich der Daten aus früheren Monaten zuzugreifen, melden Sie sich bitte beim <a href="{$a}" target="_blank">Moodle Apps Portal</a> an.';
$string['notificationssentnotifications'] = 'Systemnachrichten gesendet';
$string['oauth2identityproviders'] = 'OAuth2 Identitätsprovider';
$string['offlineuse'] = 'Offline-Nutzung';
$string['pluginname'] = 'Moodle App Tools';
$string['pluginnotenabledorconfigured'] = 'Das Plugin ist nicht aktiviert oder nicht richtig konfiguriert.';
$string['privacy:metadata:core_userkey'] = 'Nutzerschlüssel zum Erstellen eines Auto-Login für die aktuelle Person';
$string['privacy:metadata:preference:tool_mobile_autologin_request_last'] = 'Datum der letzten Auto-Login-Schlüsselanforderung. Zwischen jeder Anfrage sind 6 Minuten erforderlich.';
$string['qrcodedisabled'] = 'Zugriff über QR-Code deaktiviert';
$string['qrcodeformobileappaccess'] = 'QR-Code für den Zugriff mit der mobilen App';
$string['qrcodeformobileapploginabout'] = 'Scannen Sie den QR-Code mit Ihrer mobilen App und Sie werden automatisch angemeldet. Der QR-Code läuft in {$a} ab.<br><br>';
$string['qrcodeformobileappurlabout'] = 'Scannen Sie den QR-Code mit Ihrer mobilen App, um die Website-URL einzugeben.<br><br>';
$string['qrcodetype'] = 'QR-Code-Zugriff';
$string['qrcodetype_desc'] = 'Für die Nutzung der mobilen App kann ein QR-Code bereitgestellt werden. Der QR-Code erlaubt es, die Website-URL einzugeben oder um die betreffende Person automatisch anzumelden, ohne einen Anmeldenamen oder ein Kennwort eingeben zu müssen.';
$string['qrcodetypelogin'] = 'QR-Code mit automatischer Anmeldung';
$string['qrcodetypeurl'] = 'QR-Code mit Website-URL';
$string['qrkeyttl'] = 'Gültigkeit der QR-Code-Anmeldung';
$string['qrkeyttl_desc'] = 'Die Gültigkeitsdauer eines QR-Codes für die automatische Anmeldung';
$string['qrsameipcheck'] = 'QR-Code-Anmeldung mit gleicher IP';
$string['qrsameipcheck_desc'] = 'Nutzer/innen müssen beim Generieren und beim Scannen einer QR-Code-Anmeldung das gleiche Netzwerk verwenden. Deaktivieren Sie diese Option nur, wenn es Probleme mit der QR-Code-Anmeldung gibt.';
$string['qrsiteadminsnotallowed'] = 'Aus Sicherheitsgründen können Sie sich nicht über einen QR-Code anmelden, wenn Sie Administrator/in sind oder sich als andere Person angemeldet haben.';
$string['readingthisemailgettheapp'] = 'Lesen Sie dies in einer E-Mail? <a href="{$a}">Laden Sie die mobile App und empfangen Sie alle Mitteilungen auf Ihrem mobilen Endgerät</a>.';
$string['remoteaddons'] = 'Remote Add-ons';
$string['responsivemainmenuitems'] = 'Responsive Menüelemente';
$string['scanqrcode'] = 'QR-Code scannen';
$string['selfsignedoruntrustedcertificatewarning'] = 'Das HTTPS-Zertifikat scheint selbstsigniert oder nicht vertrauenswürdig zu sein. Die mobile App funktioniert nur mit vertrauenswürdigen Websites. Prüfen Sie dieses Problem bitte mit einem Online-SSL-Checker. Wenn der anzeigt, dass Ihr Zertifikat in Ordnung ist, können Sie diese Warnung ignorieren.';
$string['setuplink'] = 'Download für mobile App';
$string['setuplink_desc'] = 'Link zum Download der mobilen App im App Store und bei Google Play. Der Link zum Download wird in der Fußzeile jeder Seite und in jedem Nutzerprofil angezeigt. Wenn dieses Feld leer ist, wird kein Link zum Download der App angezeigt.';
$string['smartappbanners'] = 'Hinweisbanner für App';
$string['subscription'] = 'Abonnement';
$string['subscriptioncreated'] = 'Startdatum';
$string['subscriptionerrorrequest'] = 'Fehler beim Abrufen von Infos zu Ihrem Moodle-App-Abonnement.';
$string['subscriptionexpiration'] = 'Verfallsdatum';
$string['subscriptionfeaturenotapplied'] = 'Diese Funktion ist auf Ihrer Website konfiguriert, jedoch nicht in Ihrem Moodle-App-Plan enthalten. Deswegen hat die Einstellung keine Wirkung.';
$string['subscriptionfeatures'] = 'Abonnementfunktionen';
$string['subscriptionlimitsurpassed'] = 'Abonnementlimit überschritten';
$string['subscriptionregister'] = 'Weitere Infos zu den verschiedenen App-Plänen und zum Zugriff auf die Nutzungsstatistiken für die Moodle-Apps finden Sie im <a href="{$a}" target="_blank"> Moodle-Apps-Portal </a>.';
$string['subscriptionsseemore'] = 'Hinweis: Die angezeigten Infos werden nicht in Echtzeit aktualisiert. Möglicherweise müssen Sie sich abmelden und neu anmelden, um die Aktualisierungen anzuzeigen. Infos zum Erweitern Ihres App-Plans erhalten Sie im <a href="{$a}" target="_blank">Moodle Apps-Portal</a>.<br>';
$string['switchaccount'] = 'Nutzerkonto wechseln';
$string['typeoflogin'] = 'Login';
$string['typeoflogin_desc'] = 'Wenn Ihre Website eine SSO-Authentifizierung verwendet, wählen Sie entweder \'Im Browser\' oder \'Im integrierten Browser\'. Der integrierte Browser sorgt für eine bessere Nutzerführung, funktioniert aber nicht mit allen SSO-Plugins.';
$string['viewqrcode'] = 'QR-Code anzeigen';
