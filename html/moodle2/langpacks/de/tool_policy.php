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
 * Strings for component 'tool_policy', language 'de', branch 'MOODLE_34_STABLE'
 *
 * @package   tool_policy
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptanceacknowledgement'] = 'Ich bestätige, dass die Einwilligung zu diesen Richtlinien eingeholt wurde.';
$string['acceptancecount'] = '{$a->agreedcount} von {$a->policiescount}';
$string['acceptancenote'] = 'Bemerkungen';
$string['acceptancepolicies'] = 'Richtlinien';
$string['acceptancessavedsucessfully'] = 'Die Vereinbarungen wurden erfolgreich gespeichert.';
$string['acceptancestatusoverall'] = 'Insgesamt';
$string['acceptanceusers'] = 'Nutzer/innen';
$string['actions'] = 'Aktionen';
$string['activate'] = 'Status auf "Aktiv" setzen';
$string['activateconfirm'] = '<p>Sie sind dabei, die Richtlinie <em>\'{$a->name}\'</em> zu aktivieren und die Version <em>\'{$a->revision}\'</em> zur aktuellen Version zu machen.</p><p>Alle Nutzer müssen dieser neuen Richtlinienversion zustimmen, um die Site benutzen zu können.</p>';
$string['activateconfirmyes'] = 'Aktivieren';
$string['activating'] = 'Eine Richtlinie aktivieren';
$string['agreed'] = 'Zugestimmt';
$string['agreedby'] = 'Zugestimmt von';
$string['agreedno'] = 'Nicht zugestimmt';
$string['agreednowithlink'] = 'Nicht bestätigt. Klicken Sie auf "{$a}", um zu bestätigen.';
$string['agreednowithlinkall'] = 'Nicht bestätigt. Klicken, um alle Punkte zu bestätigen.';
$string['agreedon'] = 'Zugestimmt am';
$string['agreedyes'] = 'Zugestimmt';
$string['agreedyesonbehalf'] = 'Zugestimmt im Namen von';
$string['agreedyesonbehalfwithlink'] = 'Bestätigt im Namen von, klicken um Zustimmung für "{$a}"  zu widerrufen';
$string['agreedyesonbehalfwithlinkall'] = 'Bestätigt im Namen von, klicken um Zustimmung für alle Richtlinien  zu widerrufen';
$string['agreedyeswithlink'] = 'Zugestimmt, klicken um Zustimmung für "{$a}"  zu widerrufen';
$string['agreedyeswithlinkall'] = 'Bestätigt, klicken um Zustimmung für alle Richtlinien  zu widerrufen';
$string['agreepolicies'] = 'Bitte stimmen Sie den folgenden Richtlinien zu';
$string['backtotop'] = 'Zum Seitenanfang';
$string['consentbulk'] = 'Bestätigung';
$string['consentdetails'] = 'Details der Einwilligung';
$string['consentpagetitle'] = 'Bestätigung';
$string['contactdpo'] = 'Stellen Sie Fragen zu den Richtlinien  an die Ansprechpersonen für Datenschutzfragen';
$string['dataproc'] = 'Verarbeitung persönlicher Daten';
$string['deleteconfirm'] = '<p>Wollen Sie wirklich diese Richtlinie <em>\'{$a->name}\'</em> löschen?</p><p>Der Vorgang kann nicht rückgängig gemacht werden.</p>';
$string['deleting'] = 'Eine Version löschen';
$string['editingpolicydocument'] = 'Richtlinie bearbeiten';
$string['errorpolicyversionnotfound'] = 'Es liegt keine Richtlinie mit diesem Identifier vor.';
$string['errorsaveasdraft'] = 'Kleinere Änderungen können nicht als Entwurf gespeichert werden.';
$string['errorusercantviewpolicyversion'] = 'Der Nutzer hat keinen Zugriff auf diese Version der Richtlinie';
$string['event_acceptance_created'] = 'Eine Nutzungsrichtlinie wurde erstellt';
$string['event_acceptance_updated'] = 'Eine Nutzungsrichtlinie wurde aktualisiert';
$string['filtercapabilityno'] = 'Bestätiggung: kann nicht zustimmen';
$string['filtercapabilityyes'] = 'Bestätigung:  kann zustimmen';
$string['filterplaceholder'] = 'Suchbegriff oder ausgewählter Filter';
$string['filterpolicy'] = 'Richtlinie: {$a}';
$string['filterrevision'] = 'Version:  {$a}';
$string['filterrevisionstatus'] = 'Version: {$a->name} ({$a->status})';
$string['filterrole'] = 'Rolle: {$a}';
$string['filters'] = 'Filter';
$string['filterstatusno'] = 'Status: nicht zugestimmt';
$string['filterstatusyes'] = 'Status: zugestimmt';
$string['guestconsent:continue'] = 'Fortsetzen';
$string['guestconsentmessage'] = 'Wenn Sie weiter auf dieser Webseite arbeiten möchten, stimmen Sie unserer Nutzungsrichtlinie zu:';
$string['iagree'] = 'Ich stimme {$a} zu';
$string['iagreetothepolicy'] = 'Ich stimme der Richtlinie zu';
$string['inactivate'] = 'Status auf "inaktiv" setzen';
$string['inactivating'] = 'Richtlinie auf "inaktiv" setzen';
$string['inactivatingconfirm'] = '<p>Sie sind dabei die Richtlinie <em>\'{$a->name}\'</em> Version <em>\'{$a->revision}\'</em> inaktiv zu setzen.</p><p>Die Richtlinie wird so lange nicht angezeigt bis eine Version auf aktuell gesetzt wird</p>';
$string['inactivatingconfirmyes'] = 'Inaktiv';
$string['invalidversionid'] = 'Es gibt keine Richtlinie mit diesem Identifier!';
$string['irevokethepolicy'] = 'Zustimmung widerrufen';
$string['managepolicies'] = 'Richtlinien verwalten';
$string['minorchange'] = 'Geringfügige Veränderungen';
$string['minorchangeinfo'] = 'Geringfügige Veränderungen beeinflussen den Wesensgehalt der Richtlinie nicht. Eine erneuteBestätigung ist nicht erforderlich.';
$string['movedown'] = 'Nach unten';
$string['moveup'] = 'Nach oben';
$string['mustagreetocontinue'] = 'Sie müssen allen Teilen der Richtlinie zustimmen, um fortzufahren.';
$string['newpolicy'] = 'Neue Richtlinie';
$string['newversion'] = 'Neue Version';
$string['nofiltersapplied'] = 'Keine Filter angewandt';
$string['nopermissiontoagreedocs'] = 'Keine Berechtigung, der Richtlinie zuzustimmen';
$string['nopermissiontoagreedocsbehalf'] = 'Keine Berechtigung, der Richtlinie im Namen einer anderen Person zuzustimmen';
$string['nopermissiontoagreedocsbehalf_desc'] = 'Sie haben keine Berechtigung, der Richtlinie im Namen von {$a} zuzustimmen:';
$string['nopermissiontoagreedocscontact'] = 'Sie erhalten weitere Informationen und Hilfe von:';
$string['nopermissiontoagreedocs_desc'] = 'Sie haben nicht die Berechtigung, der Richtlinie zuzustimmen.<br/>Sie können unsere Lernplattform erst nutzen wenn der folgenden Richtlinie zugestimmt wurde:';
$string['nopermissiontoviewpolicyversion'] = 'Sie haben nicht die Berechtigung, die Richtlinie einzusehen.';
$string['nopolicies'] = 'Es ist derzeit keine Version der Richtlinie für Nutzer aktiviert.';
$string['pluginname'] = 'Richtlinien';
$string['policiesagreements'] = 'Richtlinien und Bestätigungen';
$string['policy:accept'] = 'Bestätigung der  Richtlinien';
$string['policy:acceptbehalf'] = 'Bestätigung der  Richtlinien im Namen einer anderen Person';
$string['policydocaudience'] = 'Nutzerbestätigung';
$string['policydocaudience0'] = 'Alle Nutzer/innen';
$string['policydocaudience1'] = 'Authentifizierte Nutzer/innen';
$string['policydocaudience2'] = 'Gäste';
$string['policydoccontent'] = 'Vollständige Richtlinie';
$string['policydochdrpolicy'] = 'Richtlinie';
$string['policydochdrversion'] = 'Dokumentenversion';
$string['policydocname'] = 'Name';
$string['policydocrevision'] = 'Version';
$string['policydocsummary'] = 'Zusammenfassung';
$string['policydocsummary_help'] = 'Dieser Text soll eine Zusammenfassung oder Vorbemerkung zur Richtlinie zumeist in einfacher und leicht verständlicher Form. Dabei sollte nach Möglichkeit eine klare und einfache Sprache verwendet werden.';
$string['policydoctype'] = 'Typ';
$string['policydoctype0'] = 'Bestätigung der Richtlinien';
$string['policydoctype1'] = 'Datenschutzregelung';
$string['policydoctype2'] = 'Regelungen zur Datenweitergabe an Dritte';
$string['policydoctype99'] = 'Andere Richtlinien';
$string['policydocuments'] = 'Richtliniendokumente';
$string['policy:managedocs'] = 'Richtlinien verwalten';
$string['policynamedversion'] = 'Richtlinie  {$a->name} (Version {$a->revision} - {$a->id})';
$string['policyversionacceptedinbehalf'] = 'Dieser Version der Richtlnie wurde durch jemand anderen in Ihrem Namen zugestimmt';
$string['policyversionacceptedinotherlang'] = 'Dieser Version der Richtlinie wurde in einer anderen Sprache zugestimmt';
$string['policy:viewacceptances'] = 'Bericht über Bestätigungen ansehen';
$string['previousversions'] = '{$a} frühere Versionen';
$string['privacy:metadata:acceptances'] = 'Information über Zustimmungen der Nutzer';
$string['privacy:metadata:acceptances:lang'] = 'Die Sprache, in der die Zustimmung erteilt wurde';
$string['privacy:metadata:acceptances:note'] = 'Kommentare, die ein Nutzer hinzugefügt hat, als er im Namen eines anderen Nutzers Zustimmung gegeben hat.';
$string['privacy:metadata:acceptances:policyversionid'] = 'ID der Version, der zugestimmt wurde';
$string['privacy:metadata:acceptances:status'] = 'Status der Zustimmung';
$string['privacy:metadata:acceptances:timecreated'] = 'Zeitpunkt wann Zustimmung gegeben wurde';
$string['privacy:metadata:acceptances:timemodified'] = 'Zeitpunkt wann Zustimmung durch Nutzer geändert wurde';
$string['privacy:metadata:acceptances:userid'] = 'ID des Nutzers, der der Richtlinie zugestimmt hat.';
$string['privacy:metadata:acceptances:usermodified'] = 'ID des Nutzers, falls er im Namen eines anderen zugestimmt hat';
$string['privacy:metadata:subsystem:corefiles'] = 'Das Richtlinien Tool speichert  Dateien, die in der Zusammenfassung und im vollständigen Text eingefügt sind';
$string['privacy:metadata:versions'] = 'Information über Version des Richtliniendokuments';
$string['privacy:metadata:versions:archived'] = 'Ob die Version aktiv istoder nicht';
$string['privacy:metadata:versions:audience'] = 'Zielgruppe der Richtlinie';
$string['privacy:metadata:versions:content'] = 'Inhalt der Richtlinienversion';
$string['privacy:metadata:versions:contentformat'] = 'Format des Inhaltsfeldes';
$string['privacy:metadata:versions:name'] = 'Name der Richtlinie';
$string['privacy:metadata:versions:policyid'] = 'Richtlinie dieser Version';
$string['privacy:metadata:versions:revision'] = 'Revisionsbezeichnung der Richtlinienversion';
$string['privacy:metadata:versions:summary'] = 'Zusammenfassung der Richtlinienversion';
$string['privacy:metadata:versions:summaryformat'] = 'Format des Zusammenfassungsfeldes';
$string['privacy:metadata:versions:timecreated'] = 'Zeitpunkt der Erstellung der Version der Richtlinie';
$string['privacy:metadata:versions:timemodified'] = 'Zeitpunkt der Aktualisierug der Version der Richtlinie';
$string['privacy:metadata:versions:type'] = 'Typ des Richtliniendokuments';
$string['privacy:metadata:versions:usermodified'] = 'Nutzer, der Richtlinie bearbeitet hat';
$string['privacysettings'] = 'Datenschutzeinstellungen';
$string['readpolicy'] = 'Bitte lesen Sie unsere Regelungen zur "{$a}"';
$string['refertofullpolicytext'] = 'Sie finden den vollständigen Text hier: {$a}';
$string['revokeacknowledgement'] = 'Ich bestätige, dass der Widerruf zu diesen Richtlinien vom Nutzer erfolgte und ich im Namen des Nutzers dies ausführen soll.';
$string['revokedetails'] = 'Zustimmung eines anderen Nutzers widerrufen';
$string['save'] = 'Speichern';
$string['saveasdraft'] = 'Als Entwurf speichern';
$string['selectpolicyandversion'] = 'Nutzen Sie den obigen Filter, um eine Version und/oder Richtlinie auszuwählen';
$string['selectuser'] = 'Nutzer {$a} auswählen';
$string['selectusersforconsent'] = 'Nutzer auswählen für den Zustimmung  gegeben werden soll.';
$string['settodraft'] = 'Neuen \'Entwurf\' anlegen';
$string['status'] = 'Status der Richtlinie';
$string['status0'] = 'Entwurf';
$string['status1'] = 'Aktiv';
$string['status2'] = 'Inaktiv';
$string['statusinfo'] = 'Eine aktive Datenschutzinformation erfordert die Bestätigigung durch jeden neuen Nutzer. Nutzer, die bereits früher einer älteren Version zugestimmt haben, müssen beim nächsten Login erneut zustimmen.';
$string['steppolicies'] = 'Datenschutzinformation {$a->numpolicy} von {$a->totalpolicies}';
$string['useracceptancecount'] = '{$a->agreedcount} von {$a->userscount} ({$a->percent}%)';
$string['useracceptancecountna'] = 'N/A';
$string['useracceptances'] = 'Nutzerbestätigungen';
$string['userpolicysettings'] = 'Datenschutzinformation';
$string['usersaccepted'] = 'Bestätigungen';
$string['viewarchived'] = 'Frühere Versionen ansehen';
$string['viewconsentpageforuser'] = 'Seite in Namen von {$a} ansehen';
