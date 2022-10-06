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
 * Strings for component 'tool_oauth2', language 'de', branch 'MOODLE_38_STABLE'
 *
 * @package   tool_oauth2
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['authconfirm'] = 'Diese Aktion gewährt Moodle einen permanenten API-Zugriff für das authentifizierte Konto. Dies soll als Systemaccount für die Verwaltung von Dateien von Moodle verwendet werden.';
$string['authconnected'] = 'Der Systemaccount ist nun für Offline-Zugriffe verbunden.';
$string['authnotconnected'] = 'Der Systemaccount wurde nicht für Offline-Zugriffe verbunden.';
$string['configured'] = 'Konfiguriert';
$string['configuredstatus'] = 'Konfiguriert';
$string['connectsystemaccount'] = 'Mit Systemaccount verbinden';
$string['createfromtemplate'] = 'OAuth 2-Service aus einer Vorlage anlegen';
$string['createfromtemplatedesc'] = 'Wählen Sie eine der Vorlagen aus, um einen OAuth 2-Service mit einer gültigen Konfiguration zu erstellen. Der OAuth 2-Service wird mit allen Parametern und den richtigen Endpoints erstellt, die für die Authentifizierung notwendig sind. Sie müssen anschließend nur noch die Client-ID und das Client-Secret in Moodle eingeben, um den OAuth 2-Service verwenden zu können.';
$string['createnewendpoint'] = 'Neuen Endpoint für den Service/Identitätsaussteller \'{$a}\' anlegen';
$string['createnewfacebookissuer'] = 'Neuen Facebook-Service anlegen';
$string['createnewgoogleissuer'] = 'Neuen Google-Service anlegen';
$string['createnewissuer'] = 'Neuen eigenen Service anlegen';
$string['createnewmicrosoftissuer'] = 'Neuen Microsoft-Service anlegen';
$string['createnewnextcloudissuer'] = 'Neuen Nextcloud-Service anlegen';
$string['createnewuserfieldmapping'] = 'Neue Nutzerfeldzuordnung für Service/Identitätsaussteller \'{$a}\' erstellen';
$string['deleteconfirm'] = 'Möchten Sie wirklich den Service/Identitätsaussteller \'{$a}\' löschen? Alle darauf zurückgreifenden Plugins funktionieren dadurch nicht mehr.';
$string['deleteendpointconfirm'] = 'Möchten Sie wirklich den Endpoint \'{$a->endpoint}\' für den Service/Identitätsaussteller \'{$a->issuer}\' löschen? Alle Plugins, die diesen Endpoint verwenden, werden dann nicht mehr funktionieren.';
$string['deleteuserfieldmappingconfirm'] = 'Möchten Sie wirklich die Nutzerfeldzuordnung für den Aussteller \'{$a}\' löschen?';
$string['discovered'] = 'Serviceerkennung erfolgreich';
$string['discovered_help'] = 'Eine erfolgreiche Serviceerkennung bedeutet, dass die OAuth 2-Endpoints automatisch aus der Basis-URL für den OAuth 2-Service ermittelt werden konnten. Das funktioniert aber nicht bei allen Diensten automatisch, so dass die Endpoints und die Nutzerfeldzuordnung in diesem Fall manuell eingegeben werden müssen.';
$string['discoverystatus'] = 'Erkennung';
$string['editendpoint'] = 'Endpoint bearbeiten:  {$a->endpoint} für Service/Identitätsaussteller {$a->issuer}';
$string['editendpoints'] = 'Endpoints konfigurieren';
$string['editissuer'] = 'Service/Identitätsaussteller bearbeiten: {$a}';
$string['edituserfieldmapping'] = 'Nutzerfeldzuordnung für Service/Identitätsaussteller {$a} bearbeiten';
$string['edituserfieldmappings'] = 'Nutzerfeldzuordnung konfigurieren';
$string['endpointdeleted'] = 'Endpoint gelöscht';
$string['endpointname'] = 'Name';
$string['endpointname_help'] = 'Schlüssel für die Suche nach diesem Endpoint. Er muss mit "_endpoint" enden.';
$string['endpointsforissuer'] = 'Endpoint für den Service/Identitätsaussteller: {$a}';
$string['endpointurl'] = 'URL';
$string['endpointurl_help'] = 'URL für diesen Endpoint. Die URL muss das Protokoll https:// verwenden.';
$string['issueralloweddomains'] = 'Login-Domains';
$string['issueralloweddomains_help'] = 'Wenn diese Option aktiviert ist, wird eine kommagetrennte Liste von Domainnamen angegeben, auf die die Logins beschränken werden.';
$string['issuerbaseurl'] = 'Service-Basis-URL';
$string['issuerbaseurl_help'] = 'Basis-URL für den Zugriff auf den Service';
$string['issuerclientid'] = 'Client-ID';
$string['issuerclientid_help'] = 'Die OAuth 2-Client-ID für diesen Service/Identitätsaussteller';
$string['issuerclientsecret'] = 'Client-Secret';
$string['issuerclientsecret_help'] = 'Das OAuth 2-Client-Secret für diesen Service/Identitätsaussteller';
$string['issuerdeleted'] = 'Service/Identitätsaussteller gelöscht';
$string['issuerdisabled'] = 'Service/Identitätsaussteller deaktiviert';
$string['issuerenabled'] = 'Service/Identitätsaussteller aktiviert';
$string['issuerimage'] = 'Logo-URL';
$string['issuerimage_help'] = 'Die Logo-URL wird verwendet, um ein Logo des Service/Identitätsausstellers anzuzeigen. Das Logo kann auf der Anmeldeseite angezeigt werden.';
$string['issuerloginparams'] = 'Zusätzliche Parameter für die Login-Anforderung';
$string['issuerloginparams_help'] = 'Einige Systeme brauchen zusätzliche Parameter für eine Anmeldeanforderung, um ein Nutzergrundprofil zu lesen.';
$string['issuerloginparamsoffline'] = 'Zusätzliche Parameter, die in einer Login-Anforderung für den Offline-Zugriff enthalten sind.';
$string['issuerloginparamsoffline_help'] = 'Jedes OAuth-System definiert seinen eigenen Weg, um den Offline-Zugriff anzufordern. Google verlangt z.B. die zusätzlichen Parameter: "access_type=offline&prompt=consent".  Diese Parameter sollten im URL-query-Parameterformat angegeben sein.';
$string['issuerloginscopes'] = 'Scopes, die bei einer Anmeldeanforderung angefordert werden.';
$string['issuerloginscopes_help'] = 'Einige OAuth-Systeme erfordern zusätzliche Scopes (d. h. Berechtigungen) für eine Anmeldeanforderung, um das Nutzergrundprofil zu lesen. Die Standard-Scopes für ein zu OpenID-Connect kompatibles System sind "openid profile email".';
$string['issuerloginscopesoffline'] = 'Scopes in einer Anmeldeanforderung für einen Offline-Zugriff';
$string['issuerloginscopesoffline_help'] = 'Jedes OAuth-System definiert seinen eigenen Weg, um den Offline-Zugriff anzufordern. Microsoft verlangt z.B. einen zusätzlichen Scope (Berechtigung) "offline_access".';
$string['issuername'] = 'Name';
$string['issuername_help'] = 'Name des Service/Identitätsausstellers. Der Name kann auf der Anmeldeseite angezeigt werden.';
$string['issuerrequireconfirmation'] = 'E-Mail-Bestätigung notwendig';
$string['issuerrequireconfirmation_help'] = 'Diese Option legt fest, dass alle Nutzer/innen ihre E-Mail-Adresse bestätigen müssen, bevor sie sich mit OAuth anmelden können. Bei neu erstellte Nutzerkonten ist dies dann ein Teil des Anmeldeprozesses. Bei bestehenden Nutzerkonten werden übereinstimmende E-Mail-Adressen mit dem OAuth-Login verbunden.';
$string['issuers'] = 'Services/Identitätsausteller';
$string['issuersetup'] = 'Detaillierte Anleitung zur Konfiguration der üblichen OAuth 2-Services';
$string['issuersetuptype'] = 'Detaillierte Anleitung zur Konfiguration des OAuth 2-Providers {$a}';
$string['issuershowonloginpage'] = 'Auf der Anmeldeseite anzeigen';
$string['issuershowonloginpage_help'] = 'Wenn dieses Plugin zur OAuth 2-Authentifizierung aktiviert ist, wird dieser Identitätsausteller auf der Anmeldeseite aufgelistet, damit Nutzer/innen sich mit Konten des Identitätsausstellers bei Moodle anmelden können.';
$string['loginissuer'] = 'Login erlauben';
$string['notconfigured'] = 'Nicht konfiguriert';
$string['notdiscovered'] = 'Serviceerkennung war nicht erfolgreich';
$string['notloginissuer'] = 'Login nicht erlauben';
$string['pluginname'] = 'OAuth 2-Services';
$string['privacy:metadata'] = 'Das Plugin \'OAuth2 Services\' speichert keine personenbezogenen Daten.';
$string['savechanges'] = 'Änderungen speichern';
$string['serviceshelp'] = 'Anleitung für die Einrichtung von Service-Providern';
$string['systemaccountconnected'] = 'Systemaccount ist verbunden';
$string['systemaccountconnected_help'] = 'Systemaccounts werden verwendet, um eine erweiterte Funktionalität für Plugins zur Verfügung zu stellen. Sie werden nicht nur für die Login-Funktionalität gebraucht, sondern auch für andere Plugins, die den OAuth 2-Service verwenden und ohne Einbindung des Systemaccounts nur einen reduzierten Funktionsumfang anbieten. Repositories stellen ohne Systemkonto z.B. keine "kontrollierten Links" bereit, die Dateioperationen ausführen können.';
$string['systemaccountnotconnected'] = 'Systemaccount nicht verbunden';
$string['systemauthstatus'] = 'Systemaccount verbunden';
$string['usebasicauth'] = 'Authentifizierungstoken-Anforderungen über HTTP-Header';
$string['usebasicauth_help'] = 'Verwenden Sie die HTTP-Basic-Authentifizierung, wenn Sie eine Client-ID und ein Kennwort mit einer Refresh-Token-Anforderung senden. Dies entspricht den Festlegungen für OAuth-2, ist aber bei einigen Services/Identitätsaustellern nicht verfügbar.';
$string['userfieldexternalfield'] = 'Externer Feldname';
$string['userfieldexternalfield_error'] = 'In diesem Feld darf kein HTML enthalten.';
$string['userfieldexternalfield_help'] = 'Name des Nutzerdatenfeldes, das vom externen OAuth 2-System bereit gestellt wird';
$string['userfieldinternalfield'] = 'Interner Feldname';
$string['userfieldinternalfield_help'] = 'Name des Nutzerdatenfeldes in Moodle, das mit dem externen Feld abgeglichen wird';
$string['userfieldmappingdeleted'] = 'Nutzerdatenfeldzuordnung gelöscht';
$string['userfieldmappingsforissuer'] = 'Nutzerdatenfeldzuordnung für Service/Identitätsaussteller: {$a}';
