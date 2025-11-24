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
 * Strings for component 'tool_mfa', language 'de', version '4.5'.
 *
 * @package     tool_mfa
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievedweight'] = 'Erreichtes Gesamtgewicht';
$string['added'] = 'Hinzugefügt';
$string['alltime'] = 'Immer';
$string['areyousure'] = 'Möchten Sie den Faktor wirklich entfernen?';
$string['cancellogin'] = 'Anmeldung abbrechen';
$string['combination'] = 'Kombination';
$string['confirmationreplace'] = 'Sie werden sofort aufgefordert, ein anderes \'{$a}\' einzurichten. Bitte stellen Sie sicher, dass Sie den Einrichtungsvorgang abzuschließen können.';
$string['confirmationrevoke'] = 'Sie können sich nicht mehr mit \'{$a}\' auf dieser Website anmelden.';
$string['connector'] = 'UND';
$string['created'] = 'Erstellt';
$string['createdfromip'] = 'Erstellt von IP';
$string['debugmode:heading'] = 'Debug-Modus';
$string['devicename'] = 'Gerät';
$string['editfactor'] = 'Einstellungen für den Faktor "{$a}" bearbeiten';
$string['email:subject'] = 'Anmeldung bei {$a} nicht möglich';
$string['enablefactor'] = 'Faktor aktivieren';
$string['entercode'] = 'Code eingeben';
$string['error:actionnotfound'] = 'Aktion \'{$a}\' wird nicht unterstützt';
$string['error:couldnotreplace'] = 'Dieser Faktor konnte nicht ersetzt werden.';
$string['error:directaccess'] = 'Auf diese Seite sollte nicht direkt zugegriffen werden.';
$string['error:factornotenabled'] = 'MFA-Faktor \'{$a}\' nicht aktiviert';
$string['error:factornotfound'] = 'MFA-Faktor \'{$a}\' nicht gefunden';
$string['error:isguestuser'] = 'Gäste sind hier nicht erlaubt.';
$string['error:notenoughfactors'] = 'Authentifizierung nicht möglich';
$string['error:reauth'] = 'Ihre Identität konnte entsprechend der Authentifizierungrichtlinien nicht ausreichend bestätigt werden.
<br>Dies kann verschiedene Ursachen haben:
<br> 1) Schritte sind gesperrt – warten Sie bitte ein paar Minuten und versuchen Sie es nochmal.
<br> 2) Schritte sind fehlgeschlagen – überprüfen Sie bitte die Details für jeden Schritt.
<br> 3) Schritte wurden übersprungen – laden Sie bitte diese Seite neu oder versuchen Sie die Anmeldung nochmal.';
$string['error:revoke'] = 'Der Faktor kann nicht entfernt werden.';
$string['error:setupfactor'] = 'Der Faktor kann nicht eingerichtet werden.';
$string['error:support'] = 'Wenn Sie sich nicht anmelden können, senden Sie bitte eine E-Mail an die folgende Adresse:';
$string['error:wrongfactorid'] = 'Die Faktor-ID \'{$a}\' ist falsch.';
$string['event:failfactor'] = 'Die Multi-Faktor-Authentifizierung ist wegen eines nicht bestandenen Faktors fehlgeschlagen.';
$string['event:faillockout'] = 'Die Multi-Faktor-Authentifizierung ist wegen zu vieler Versuche fehlgeschlagen.';
$string['event:failnotenoughfactors'] = 'Die Multi-Faktor-Authentifizierung ist wegen nicht ausreichend erfüllter Faktoren fehlgeschlagen.';
$string['event:userdeletedfactor'] = 'Faktor gelöscht.';
$string['event:userfailedmfa'] = 'Die Multi-Faktor-Authentifizierung ist bei Nutzer/in fehlgeschlagen.';
$string['event:userpassedmfa'] = 'Verifizierung erfolgreich';
$string['event:userrevokedfactor'] = 'Faktor-Widerruf';
$string['event:usersetupfactor'] = 'Faktor-Einrichtung';
$string['factor'] = 'Faktor';
$string['factorreplace'] = 'Faktor \'{$a}\' erfolgreich ersetzt.';
$string['factorreport'] = 'Gesamt-Faktor-Bericht';
$string['factorreset'] = 'Ihre Multi-Faktor-Authentifizierung \'{$a->factor}\' wurde zurückgesetzt. Sie müssen diesen Faktor neu einrichten. {$a->url}';
$string['factorresetall'] = 'Alle Faktoren für Ihre Multi-Faktor-Authentifizierung wurden zurückgesetzt. Sie müssen diese Faktoren neu einrichten. {$a}';
$string['factorrevoked'] = '\'{$a}\' erfolgreich entfernt.';
$string['factorsetup'] = '\'{$a}\' erfolgreich eingerichtet.';
$string['fallback'] = 'Fallback-Faktor';
$string['fallback_info'] = 'Dieser Faktor ist ein Fallback, wenn keine anderen Faktoren konfiguriert sind. Dieser Faktor wird immer fehlschlagen.';
$string['guidance'] = 'Anleitung zur Multi-Faktor-Authentifizierung';
$string['inputrequired'] = 'Nutzereingabe';
$string['ipatcreation'] = 'IP-Adresse, wenn der Faktor angelegt wird';
$string['lastused'] = 'Zuletzt verwendet';
$string['lastverified'] = 'Zuletzt überprüft';
$string['locked'] = '{$a} (nicht verfügbar)';
$string['lockedusersforallfactors'] = 'Gesperrte Nutzer/innen: Alle Faktoren';
$string['lockedusersforfactor'] = 'Gesperrte Nutzer/innen: {$a}';
$string['lockoutnotification'] = 'Noch mögliche Versuche: {$a}';
$string['managefactor'] = 'Faktor werwalten';
$string['mfa'] = 'Multi-Faktor-Authentifizierung';
$string['mfa:intro'] = 'Machen Sie Ihr Nutzerkonto sicherer, indem Sie für das Anmelden eine zusätzliche Bestätigung  einrichten.';
$string['mfa:mfaaccess'] = 'Zugang über MFA';
$string['mfareports'] = 'MFA-Berichte';
$string['mfasettings'] = 'Multi-Faktor-Authentifizierung verwalten';
$string['na'] = 'n/a';
$string['needhelp'] = 'Brauchen Sie Hilfe?';
$string['nologinusers'] = 'Nicht angemeldet';
$string['nonauthusers'] = 'Ausstehende MFA';
$string['overall'] = 'Insgesamt';
$string['pending'] = 'Ausstehend';
$string['performbulk'] = 'Sammelaktion';
$string['pluginname'] = 'Multi-Faktor-Authentifizierung';
$string['preferences:activefactors'] = 'Aktive Faktoren';
$string['preferences:availablefactors'] = 'Verfügbare Faktoren';
$string['preferences:header'] = 'Multi-Faktor-Authentifizierung';
$string['preferenceslink'] = 'Klicken Sie hier, um zu den Nutzereinstellungen zu gelangen.';
$string['privacy:metadata:tool_mfa'] = 'Daten mit konfigurierten MFA-Faktoren';
$string['privacy:metadata:tool_mfa:createdfromip'] = 'IP, von der aus der Faktor eingerichtet wurde';
$string['privacy:metadata:tool_mfa:factor'] = 'Faktortyp';
$string['privacy:metadata:tool_mfa:id'] = 'Datensatz-ID';
$string['privacy:metadata:tool_mfa:label'] = 'Beschriftung für die Faktor-Instanz, z.B. Gerät oder E-Mail';
$string['privacy:metadata:tool_mfa:lastverified'] = 'Zeit, zu der die Person zuletzt mit diesem Faktor verifiziert wurde';
$string['privacy:metadata:tool_mfa:secret'] = 'Alle geheimen Daten zum Faktor';
$string['privacy:metadata:tool_mfa:timecreated'] = 'Zeit, zu der dieser Faktor eingerichtet wurde';
$string['privacy:metadata:tool_mfa:timemodified'] = 'Zeit, zu der der Faktors zuletzt geändert wurde';
$string['privacy:metadata:tool_mfa:userid'] = 'Die ID der Person, der dieser Faktor gehört';
$string['privacy:metadata:tool_mfa_auth'] = 'Zeit, zu der das letzte Mal die Multi-Faktor-Authentifizierung für eine Nutzer-ID erfolgreich war';
$string['privacy:metadata:tool_mfa_auth:lastverified'] = 'Zeitpunkt der letzten Authentifizierung von Nutzer/in mit';
$string['privacy:metadata:tool_mfa_auth:userid'] = 'Person, der dieser Zeitstempel zugeordnet ist.';
$string['privacy:metadata:tool_mfa_secrets'] = 'Temporäre Secrets für die Nutzerauthentifizierung.';
$string['privacy:metadata:tool_mfa_secrets:factor'] = 'Der Faktor, mit dem dieses Secret verbunden ist';
$string['privacy:metadata:tool_mfa_secrets:secret'] = 'Shared Secret Key';
$string['privacy:metadata:tool_mfa_secrets:sessionid'] = 'Die Session-ID, mit der dieses Secret verknüpft ist';
$string['privacy:metadata:tool_mfa_secrets:userid'] = 'Person, der der Secret Key zugeordnet ist.';
$string['redirecterrordetected'] = 'Nicht unterstützte Umleitung erkannt, Skriptausführung beendet. Der Umleitungsfehler trat zwischen MFA und {$a} auf.';
$string['remove'] = 'Entfernen';
$string['replace'] = 'Ersetzen';
$string['replacefactor'] = 'Faktor ersetzen';
$string['resetconfirm'] = 'Nutzerfaktor zurücksetzen';
$string['resetfactor'] = 'Nutzerfaktoren zur Authentifizierung zurücksetzen';
$string['resetfactorconfirm'] = 'Möchten Sie diesen Faktor für {$a} wirklich zurücksetzen?';
$string['resetfactorplaceholder'] = 'Anmeldename oder E-Mail';
$string['resetsuccess'] = 'Faktor \'{$a->factor}\' für Nutzer/in \'{$a->username}\' erfolgreich zurückgesetzt.';
$string['resetsuccessbulk'] = 'Faktor \'{$a}\' für die angegebenen Nutzer/innen erfolgreich zurückgesetzt.';
$string['resetuser'] = 'Nutzer/in:';
$string['revoke'] = 'Widerrufen';
$string['revokefactor'] = 'Faktor entfernen';
$string['selectfactor'] = 'Wählen Sie den Faktor zum Zurücksetzen:';
$string['selectperiod'] = 'Wählen Sie einen Zeitraum für den Bericht:';
$string['settings:combinations'] = 'Zusammenfassung guter Bedingungen für die Anmeldung';
$string['settings:debugmode'] = 'Debug-Modus aktivieren';
$string['settings:debugmode_help'] = 'Im Debug-Modus wird ein Benachrichtigungsbanner mit Informationen zu den aktuell aktivierten Faktoren in der MFA-Administration, sowie auf der Seite mit den Nutzereinstellungen angezeigt.';
$string['settings:duration'] = 'Gültigkeitsdauer des Secret Keys';
$string['settings:duration_help'] = 'Die Dauer, für die der Secret Key gültig ist.';
$string['settings:enabled'] = 'MFA Plugin aktiviert';
$string['settings:enablefactor'] = 'Faktor aktivieren';
$string['settings:enablefactor_help'] = 'Aktivieren Sie diese Option, um den Faktor für die MFA-Authentifizierung verwenden zu können.';
$string['settings:general'] = 'Allgemeine MFA-Einstellungen';
$string['settings:guidancecheck'] = 'Anleitung verwenden';
$string['settings:guidancecheck_help'] = 'Fügen Sie einen Link zur Anleitung in der MFA-Authentifizierung und in den MFA-Einstellungen hinzu.';
$string['settings:guidancefiles'] = 'Dateien der Anleitungsseite';
$string['settings:guidancefiles_help'] = 'Fügen Sie hier beliebige Dateien hinzu, die in der Anleitungsseite verwendet werden sollen, und betten Sie diese mit {{filename}} (aufgelöster Pfad) oder {{filename}}} (HTML-Link) im Editor ein.';
$string['settings:guidancepage'] = 'Inhalt der Anleitungsseite';
$string['settings:guidancepage_help'] = 'Dieses HTML wird auf der Anleitungsseite angezeigt. Geben Sie Dateinamen aus dem Dateibereich ein, um die Datei mit dem aufgelösten Pfad {{Dateiname}} oder als HTML-Link mit {{Dateiname}}} einzubetten.';
$string['settings:lockout'] = 'Sperrschwelle';
$string['settings:lockout_help'] = 'Anzahl der Versuche, die eine Person für die Eingabe von Faktoren verwenden darf, bevor die Anmeldung verweigert wird.';
$string['settings:redir_exclusions'] = 'URLs, die die MFA-Prüfung nicht umleiten sollen';
$string['settings:redir_exclusions_help'] = 'Jede neue Zeile ist eine relative URL der Website, von der aus die MFA-Prüfung nicht weitergeleitet wird.';
$string['settings:weight'] = 'Faktor-Gewichtung';
$string['settings:weight_help'] = 'Gewichtung dieses Faktors. Eine Person benötigt mindestens 100 Punkte, um sich anzumelden.';
$string['setup'] = 'Einrichten';
$string['setupfactor'] = 'Faktor einrichten';
$string['setupfactorbuttonadditional'] = 'Zusätzlichen Faktor hinzufügen';
$string['setuprequired'] = 'Nutzereinstellungen';
$string['state:fail'] = 'Fehlgeschlagen';
$string['state:locked'] = 'Gesperrt';
$string['state:neutral'] = 'Neutral';
$string['state:pass'] = 'Erfolgreich';
$string['state:unknown'] = 'Unbekannt';
$string['subplugintype_factor'] = 'Faktortyp';
$string['subplugintype_factor_plural'] = 'Faktortypen';
$string['totalusers'] = 'Nutzeranzahl';
$string['totalweight'] = 'Gesamtgewichtung';
$string['userempty'] = 'Das Feld Nutzer/in kann nicht leer sein.';
$string['userlogs'] = 'Nutzerprotokolle';
$string['usernotfound'] = 'Nutzer/in kann nicht gefunden werden.';
$string['usersauthedinperiod'] = 'Angemeldet';
$string['verification'] = 'Bestätigung in zwei Schritten';
$string['verification_desc'] = 'Um Ihr Nutzerkonto sicher zu halten, muss geprüft werden, ob Sie es wirklich sind.';
$string['verificationcode'] = 'Bestätigungscode';
$string['verificationcode_help'] = 'Der Code wird vom aktuellen Authentifizierungsfaktor bereitgestellt.';
$string['verifyalt'] = 'Versuchen Sie einen anderen Weg:';
$string['weight'] = 'Gewichtung';
$string['yesremove'] = 'Ja, entfernen';
$string['yesreplace'] = 'Ja, ersetzen';
