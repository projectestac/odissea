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
 * Strings for component 'enrol_lti', language 'de', version '4.1'.
 *
 * @package     enrol_lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcontent'] = 'Inhalt hinzufügen';
$string['adddeployment:deploymentid'] = 'Entwickler-ID';
$string['adddeployment:deploymentid_help'] = 'Jeder Bereitstellung des Tools (dieser Website) auf einer Plattform wird eine Bereitstellungs-ID zugewiesen, die für die Registrierung eindeutig ist. Die Bereitstellungs-ID muss beim Tool (dieser Website) registriert werden, bevor Starts von der jeweiligen Toolbereitstellung zugelassen werden.';
$string['adddeployment:invaliddeploymentiderror'] = 'Ungültige Bereitstellungs-ID. Diese Bereitstellungs-ID ist für diese App-Registrierung bereits vorhanden.';
$string['adddeployment:name'] = 'Bereitstellungsname';
$string['addtocourse'] = 'Zum Kurs hinzufügen';
$string['addtogradebook'] = 'Zu den Bewertungen hinzufügen';
$string['allowframeembedding'] = 'Hinweis: Die Einstellung "Frame-Einbettung erlauben" sollte aktiviert werden, damit LTI Tools in einem Frame statt in einem neuen Fenster angezeigt werden.';
$string['authltimustbeenabled'] = 'Hinweis: Dieses Plugin benötigt auch der Aktivierung des Plugins "LTI Authentifizierung"';
$string['cartridgeurl'] = 'Cartridge URL';
$string['copiedtoclipboard'] = '{$a} in die Zwischenablage kopiert';
$string['copytoclipboard'] = 'In die Zwischenablage kopieren';
$string['couldnotestablishproxy'] = 'Proxy mit Consumer konnte nicht hergestellt werden.';
$string['customproperties'] = 'Nutzerdefinierte Eigenschaften';
$string['deeplinkingurl'] = 'Deep-Linking-URL';
$string['deletedactivity'] = 'Gelöschte Aktivität';
$string['deletedactivityalt'] = 'Die von dieser Instanz gemeinsam genutzte Aktivität wurde gelöscht.';
$string['deletedactivitydescription'] = 'Die von dieser Instanz gemeinsam genutzte Aktivität wurde gelöscht. Sie können eine andere Aktivität zum Freigeben auswählen, indem Sie die Instanz bearbeiten, oder, falls sie nicht mehr benötigt wird, können Sie die Instanz einfach löschen. Durch das Löschen der Instanz werden alle zugehörigen Nutzerregistrierungen entfernt.';
$string['deploymentadd'] = 'Eine Bereitstellung hinzufügen';
$string['deploymentaddnotice'] = 'Bereitstellung hinzugefügt';
$string['deploymentdelete'] = 'Bereitstellung löschen';
$string['deploymentdeleteconfirm'] = 'Warnung: Das Löschen einer Bereitstellung führt zu einem Zugriffsverlust für alle Nutzer/innen, die Ressourcenlinks folgen, die mit dieser Toolbereitstellung in der Plattform verknüpft sind. Services zur Mitglieder- und Bewertungssynchronisierung werden für diese Ressourcen ebenfalls entfernt. Möchten Sie die Bereitstellungs-ID "{$a}" wirklich löschen?';
$string['deploymentdeletenotice'] = 'Bereitstellung gelöscht';
$string['deploymentid'] = 'Bereitstellungs-ID';
$string['deployments'] = 'Bereitstellungen';
$string['deploymentsinfo'] = 'Eine Bereitstellungs-ID wird von der Plattform generiert, wenn das Tool in einem Kontext verfügbar gemacht wird. Dies kann zum Zeitpunkt der Registrierung oder später erfolgen, wenn das Tool für einen bestimmten Kurs oder einen bestimmte Kursbereich verfügbar gemacht wird. Die Bereitstellungs-ID muss hier eingegeben werden, bevor Starts aus dem Tool-Deployment zugelassen werden.';
$string['details'] = 'Details';
$string['editplatformdetails'] = 'Plattformdetail bearbeiten';
$string['endpointltiversionnotice'] = 'Die folgenden Tool-Endpunkte gelten nur für die manuelle Einrichtung von LTI 1.3. Für frühere Versionen (1.1/2.0) finden sich Details für Anwender/innen auf der Seite "Veröffentlicht als LTI-Tools", die über die Kursnavigation zugänglich ist.';
$string['enrolenddate'] = 'Einschreibungsende';
$string['enrolenddate_help'] = 'Diese Option legt fest, dass Nutzer/innen nur bis zu diesem Termin zugreifen können.';
$string['enrolenddateerror'] = 'Das Einschreibungsende muss nach dem Einschreibungsbeginn liegen.';
$string['enrolisdisabled'] = 'Das Plugin \'Veröffentlichen als LTI Tool\' ist deaktiviert.';
$string['enrolltiversionincorrect'] = 'Die Ressource ist nicht für die Verwendung über Legacy-LTI (Versionen 1.1/2.0) eingerichtet. Wenden Sie sich bitte an die Administrator /innen dieses Tools.';
$string['enrolmentfinished'] = 'Einschreibung beendet';
$string['enrolmentnotstarted'] = 'Einschreibung hat nicht begonnen';
$string['enrolperiod'] = 'Einschreibungsdauer';
$string['enrolperiod_help'] = 'Zeitdauer der Gültigkeit einer Einschreibung ab dem Moment der Selbsteinschreibung vom entfernten System. Wenn deaktiviert, ist die Einschreibung unbegrenzt gültig.';
$string['enrolstartdate'] = 'Einschreibungsbeginn';
$string['enrolstartdate_help'] = 'Diese Option legt fest, dass Nutzer/innen nur nach diesem Termin zugreifen können.';
$string['existingregistrationerror'] = 'Für diese Aussteller- und Client-ID existiert bereits eine Registrierung.';
$string['failedrequest'] = 'Anfrage fehlgeschlagen. Grund: {$a->reason}';
$string['frameembeddingnotenabled'] = 'Um auf das Tool zuzugreifen, folgen Sie dem nachfolgenden Link.';
$string['gradesync'] = 'Synchronisation der Bewertungen';
$string['gradesync_help'] = 'Festlegung, ob Bewertungen synchronisiert werden (LTI Consumer).';
$string['incorrecttoken'] = 'Das Token war falsch. Überprüfen Sie die URL und versuchen Sie es erneut oder kontaktieren Sie die Administrator/innen dieses Tools.';
$string['invalidexpiredregistrationurl'] = 'Ungültige oder abgelaufene Registrierungs-URL.Prüfen Sie bitte die URL und versuchen Sie es noch einmal.';
$string['invalidrequest'] = 'Ungültige Anfrage';
$string['invalidtoolconsumer'] = 'Ungültige Tool-Consumer';
$string['jwksurl'] = 'JWKS URL';
$string['launchdetails'] = 'Launch-Details';
$string['launchdetails_help'] = 'Zur Konfiguration des Tools sind eine Cartridge-URL (auch Configuration-URL genannt) und ein Secret notwendig.';
$string['launchurl'] = 'Start URL';
$string['loginurl'] = 'Anmelde-URL für den Start';
$string['lti13'] = 'LTI Advantage';
$string['lti13launchdetails'] = 'Details aufrufen';
$string['lti13launchdetails_help'] = 'Die Start-URL und die nutzerdefinierten Eigenschaften sind nur erforderlich, wenn ein Ressourcenlink in der Plattform manuell konfiguriert wird. Wenn möglich, sollten Trainer/innen die Inhaltsauswahl (Deep Linking) für die Erstellung von Ressourcenlinks bevorzugen.';
$string['lti:config'] = 'Instanzen für \'Veröffentlichen als LTI-Tool\' konfigurieren';
$string['lti:unenrol'] = 'Nutzer/innen vom Kurs abmelden';
$string['ltiadvdynregerror:invalidopenidconfigjson'] = 'Beim Abrufen der OpenID-Konfiguration von der Plattform ist ein Problem aufgetreten. Das Ergebnis war kein gültiges JSON. Dies kann auch durch die Konfiguration blockierter Hosts verursacht werden. Stellen Sie bitte sicher, dass Ihre Website für die Verbindung mit der Plattform konfiguriert ist, und versuchen Sie es erneut mit einer neuen Registrierungs-URL.';
$string['ltiadvlauncherror:invaliddeployment'] = 'Ungültige Startdaten oder Tool-Konfiguration. Die Bereitstellung konnte nicht gefunden werden (Bereitstellungs-ID: {$a}).';
$string['ltiadvlauncherror:invalidid'] = 'Ungültige Startdaten. Die Ressource "{$a}" ist nicht verfügbar oder existiert nicht.';
$string['ltiadvlauncherror:invalidregistration'] = 'Ungültige Startdaten oder Tool-Konfiguration. Eine Plattformregistrierung konnte nicht gefunden werden (Aussteller: {$a->platform}, Client-ID: {$a->clientid}).';
$string['ltiadvlauncherror:missingid'] = 'Ungültige Startdaten. Das nutzerdefinierte Feld "id" ist erforderlich, um eine Aktivität oder Ressource über LTI Advantage zu starten.';
$string['ltilegacy'] = 'Legacy LTI (1.1/2.0)';
$string['ltilegacydeprecatednotice'] = 'Legacy-LTI-Tools (1.1/2.0) sind veraltet. Inhalte sollten jetzt mit LTI Advantage geteilt werden.';
$string['ltiversion'] = 'LTI Version';
$string['ltiversion_help'] = 'Die Version von LTI, die für den Zugriff auf die veröffentlichten Inhalte verwendet wird.

LTI Advantage ermöglicht die Veröffentlichung von Inhalten auf vorregistrierten Plattformen, ohne dass Änderungen auf der Plattform vorgenommen werden müssen, wenn neue Inhalte veröffentlicht werden. Der Sicherheitsvertrag besteht zwischen der Plattform und dem Tool.

Legacy-Versionen (1.1 und 2.0) erfordern, dass für jeden neu veröffentlichten Inhalt eine neue Tool-Registrierung auf dem Verbraucher erstellt wird, da jeder veröffentlichte Inhalt einen eigenen Sicherheitsvertrag mit der Anwender-Website hat und auf einem Fall von eingerichtet werden muss Fallbasis.';
$string['managedeployments'] = 'Bereitstellungen verwalten';
$string['maxenrolled'] = 'Maximal eingeschriebene Nutzer/innen';
$string['maxenrolled_help'] = 'Legt die Höchstzahl der Nutzer fest, die vom externen System zugreifen dürfen. Der Wert \'0\' bedeutet keine Begrenzung.';
$string['maxenrolledreached'] = 'Die Höchstzahl der zugelassenen Nutzer, die vom externen System zugreifen dürfen, wurde erreicht.';
$string['membersync'] = 'Nutzersynchronisation';
$string['membersync_help'] = 'Diese Option legt fest, ob ein regelmäßiger Task externe Nutzer/innen aus einem anderen System mit den Einschreibungen dieses Kurses synchronisiert, wobei für externe Nutzer/innen ein Nutzerkonto angelegt und die Einschreibung bzw. Abmeldung vorgenommen wird.

Bei \'Nein\' werden für externe Nutzer/innen in dem Moment des Zugriffs automatisch Nutzerkonten angelegt und Einschreibungen vorgenommen, eine Abmeldung findet nicht statt.';
$string['membersyncmode'] = 'Nutzersynchronisierungsmodus';
$string['membersyncmode_help'] = 'Die Option legt fest, ob Remote-Nutzer/innen in diesem Kurs eingeschrieben und/oder abgemeldet werden sollen.';
$string['membersyncmodeenrolandunenrol'] = 'Neue Nutzer/innen einschreiben und fehlende abmelden';
$string['membersyncmodeenrolnew'] = 'Neue Nutzer/innen einschreiben';
$string['membersyncmodeunenrolmissing'] = 'Fehlende Nutzer/innen abmelden';
$string['moodle'] = 'Moodle';
$string['nodeployments'] = 'Keine Bereitstellungen gefunden';
$string['nopublishedcontent'] = 'Keine Materialien oder Aktivitäten bereitgestellt';
$string['noregisteredplatforms'] = 'Keine registrierten Plattformen';
$string['notoolsprovided'] = 'Keine Tools unterstützt';
$string['opensslconfiginvalid'] = 'Für LTI 1.3 muss eine gültige openssl.cnf konfiguriert und für Ihren Webserver verfügbar sein. Bitte wenden Sie sich an den Website-Administrator/in, um openssl für diese Website zu konfigurieren und zu aktivieren.';
$string['opentool'] = 'Tool öffnen';
$string['platformdetails'] = 'Plattformdetails';
$string['platformdetailsinfo'] = 'Nachdem das Tool in der Plattform eingerichtet wurde, müssen hier Angaben zur Plattform erfasst werden, um die Registrierung abzuschließen.
<ul>
<li>Für dynamische Registrierungen werden diese Informationen automatisch festgelegt und es sind keine weiteren Änderungen erforderlich</li>
<li>Für manuelle Registrierungen müssen diese Informationen manuell von der Plattform kopiert werden.</li>
</ul>';
$string['pluginname'] = 'Als LTI-Tool bereitstellen';
$string['pluginname_desc'] = 'Das Plugin für die Bereitstellung von Zugriffen durch externe Nutzer ermöglicht Nutzern anderer Systeme  auf einen Kurs oder eine Aktivität zuzugreifen. Sie benötigen dazu lediglich einen Link. Das LTI Authentifizierungsplugin muss aktiv sein. Moodle arbeitet dabei als LTI Tool Provider.';
$string['privacy:metadata:enrol_lti_users'] = 'Liste der Nutzer, die über den LTI-Provider eingeschrieben sind';
$string['privacy:metadata:enrol_lti_users:lastaccess'] = 'Zeitpunkt zu dem Nutzer zuletzt den Kurs genutzt hat';
$string['privacy:metadata:enrol_lti_users:lastgrade'] = 'Letzte Bewertung, die für den Nutzer erstellt wurde';
$string['privacy:metadata:enrol_lti_users:timecreated'] = 'Datum, an dem eine Person eingeschrieben wurde';
$string['privacy:metadata:enrol_lti_users:userid'] = 'ID von Nutzer/in';
$string['provisioningmode'] = 'Bereitstellungsmodus';
$string['provisioningmode_help'] = 'Diese Einstellung legt fest, wie Konten beim ersten Start behandelt werden. Mehrere Modi werden unterstützt:
<ul>
<li>Nur neue Konten (automatisch). Konten werden automatisch für Nutzer/innen erstellt, die von der Plattform aus starten. Dies ist die standardmäßige Starteinstellung für Teilnehmer/innen.</li>
<li>Bestehende und neue Konten (Eingabeaufforderung). Nutzer/innen wird eine Auswahlmöglichkeit gegeben. Sie können sich entscheiden, ein bestehendes Konto zu verknüpfen oder ein neues Konto für sich erstellen zu lassen. Dies ist die flexibelste Option und die standardmäßige Starteinstellung für Trainer/innen.</li>
<li>Nur bestehende Konten (Eingabeaufforderung). Nutzer/innen werden aufgefordert, ein vorhandenes Konto zu verknüpfen, und können andernfalls nicht auf die Tool-Ressourcen zugreifen.</li>
</ul>';
$string['provisioningmodestudentlaunch'] = 'Erster Start des Bereitstellungsmodus für Teilnehmer/innen';
$string['provisioningmodeteacherlaunch'] = 'Erster Start des Bereitstellungsmodus für Trainer/innen';
$string['publishedcontent'] = 'Veröffentlicher Inhalt';
$string['publishedcontent_help'] = 'Eine veröffentlichte Ressource oder Aktivität kann in registrierten Plattformen über die Inhaltsauswahl (Deep Linking) verwendet werden. Darüber hinaus kann ein Ressourcenlink manuell in der Plattform erstellt werden, indem die Start-URL und die bereitgestellten nutzerdefinierten Eigenschaften verwendet werden.';
$string['registeredplatforms'] = 'Registrierte Plattformen';
$string['registeredplatformsltiversionnotice'] = 'Die unten aufgeführten Plattformen sind für die LTI 1.3-Kommunikation registriert. Für frühere Versionen ist keine Nutzerregistrierung erforderlich.';
$string['registerplatform:accesstokenurl'] = 'Zugriffstoken-URL';
$string['registerplatform:accesstokenurl_help'] = 'Die URL, an die Zugriffstokenanforderungen vom Tool gesendet werden. Diese URL wird von der Plattform bereitgestellt.';
$string['registerplatform:authrequesturl'] = 'Authentifizierungsanfrage-URL';
$string['registerplatform:authrequesturl_help'] = 'Die URL, an die OpenID Connect-Authentifizierungsanfragen vom Tool gesendet werden. Diese URL wird von der Plattform bereitgestellt.';
$string['registerplatform:clientid'] = 'Client-ID';
$string['registerplatform:clientid_help'] = 'Eine Zeichenfolge zur Identifizierung der Tool-Registrierung auf der Plattform. Diese Zeichenfolge wird von der Plattform bereitgestellt.';
$string['registerplatform:duplicateregistrationerror'] = 'Ungültige Client-ID. Diese Client-ID ist bereits für die angegebene Plattform-ID registriert.';
$string['registerplatform:invalidurlerror'] = 'Ungültige URL. Haben Sie http:// oder https:// mit angegeben?';
$string['registerplatform:jwksurl'] = 'Public Keyset URL';
$string['registerplatform:jwksurl_help'] = 'Die Public Keyset URL oder JWKS URL wird verwendet, um den öffentlichen Schlüssel der Plattform zu bekommen. Diese URL wird von der Plattform bereitgestellt.';
$string['registerplatform:name'] = 'Plattform-Name';
$string['registerplatform:name_help'] = 'Ein Kurzname, der die Plattform beschreibt. Dieser Name kann jederzeit geändert werden.';
$string['registerplatform:platformid'] = 'Plattform-ID (Aussteller)';
$string['registerplatform:platformid_help'] = 'Die URL, die die Lernplattform des Drittanbieters identifiziert. Diese URL wird von der Plattform bereitgestellt.';
$string['registerplatformadd'] = 'Eine Plattform registrieren';
$string['registerplatformaddnotice'] = 'Plattformregistrierung hinzugefügt';
$string['registerplatformdelete'] = 'Plattformregistrierung löschen';
$string['registerplatformdeleteconfirm'] = 'Möchten Sie die Registrierung für die Plattform "{$a}" wirklich löschen? Dadurch werden auch alle für diese Registrierung gespeicherten Toolbereitstellungen entfernt.';
$string['registerplatformdeletenotice'] = 'Plattformregistrierung gelöscht';
$string['registerplatformedit'] = 'Registrierung bearbeiten';
$string['registerplatformeditnotice'] = 'Plattformregistrierung aktualisiert';
$string['registration'] = 'Veröffentlichte Tool-Registrierung';
$string['registrationdeeplinklabel'] = 'Inhalt von {$a} hinzufügen';
$string['registrationdynamic'] = 'Dynamische Registrierung';
$string['registrationmanual'] = 'Manuelle Registrierung';
$string['registrationresourcelinklabel'] = 'Inhalt von {$a} starten';
$string['registrationstatus'] = 'Status';
$string['registrationstatusactive'] = 'Aktiv';
$string['registrationstatuspending'] = 'Ausstehend';
$string['registrationurl'] = 'Registrierungs-URL';
$string['registrationurl_help'] = 'Wenn eine Registrierungs-URL verwendet wird (auch Proxy-URL genannt), dann wird das Tool automatisch konfiguriert.';
$string['registrationurlinfomessage'] = 'Wenn die Plattform die dynamische Registrierung unterstützt, verwenden Sie die unten stehende Registrierungs-URL. Weitere Informationen zur dynamischen Registrierung finden Sie in der Dokumentation <a href="{$a}">Als LTI-Tool veröffentlichen</a>.';
$string['remotesystem'] = 'Entferntes System';
$string['requirecompletion'] = 'Kurs- oder Aktivitäts-Abschluss notwendig vor Noten Synchronisation';
$string['returnurlnotset'] = 'Die Rückgabe-URL ist nicht gesetzt.';
$string['roleinstructor'] = 'Rolle für Trainer/in';
$string['roleinstructor_help'] = 'Die Rolle, die in diesem Tool Trainer/innen zugewiesen wird, wenn sie von einem externen System zugreifen.';
$string['rolelearner'] = 'Rolle für Teilnehmer/in';
$string['rolelearner_help'] = 'Die Rolle, die in diesem Tool Teilnehmer/innen zugewiesen wird, die von einem externen System zugreifen';
$string['secret'] = 'Secret';
$string['secret_help'] = 'Eine Zeichenkette, die dem externen System (LTI consumer) mitgeteilt wird um Zugriff auf das tool zu ermöglichen.';
$string['sharedexternaltools'] = 'Als LTI-Tools bereitgestellt';
$string['successfulregistration'] = 'Registrierung erfolgreich';
$string['tasksyncgrades'] = 'LTI-Tool Bewertungen synchronisieren';
$string['tasksyncmembers'] = 'LTI-Tool Nutzer/innen synchronisieren';
$string['tooldetails'] = 'Tool-Details';
$string['toolsprovided'] = 'Bereitgestellte Tools';
$string['toolsprovided_help'] = 'Ein Tool kann mit einer weiteren Seite geteilt werden indem entweder Launch-Details oder eine Registrierungs-URL angegeben werden.';
$string['tooltobeprovided'] = 'zu veröffentlichendes Tool';
$string['toolurl'] = 'Tool URL';
$string['userdefaultvalues'] = 'Standardnutzerwerte';
$string['viewplatformdetails'] = 'Plattformdetails anzeigen';
$string['viewtoolendpoints'] = 'Tool-Endpoints anzeigen';
