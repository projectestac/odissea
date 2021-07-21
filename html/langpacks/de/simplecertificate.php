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
 * Strings for component 'simplecertificate', language 'de', version '3.11'.
 *
 * @package     simplecertificate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allusers'] = 'Alle Teilnehmer/innen';
$string['awardedsubject'] = 'Das erworbene Zertifikat: {$a->certificate} wurde ausgestellt für {$a->student}';
$string['awardedto'] = 'Vergeben an';
$string['bulkaction'] = 'Vorgang für viele auswählen';
$string['bulkbuttonlabel'] = 'Senden';
$string['bulkview'] = 'Vorgänge für viele';
$string['cantdeleteissue'] = 'Fehler beim Entfernen der ausgestellten Zertifikate';
$string['cantissue'] = 'Das Zertifikat kann nicht erteilt werden, da der Benutzer nicht die Voraussetzungen erfüllt';
$string['certificatecopy'] = 'Kopieren';
$string['certificateimage'] = 'Bild für Zertifikat';
$string['certificateimage_help'] = 'Das ist das Bild, das in dem Zertifikat verwendet wird';
$string['certificatename'] = 'Name des Zertifikats';
$string['certificatename_help'] = 'Name des Zertifikats';
$string['certificatenot'] = 'Die Instanz des Zertifikats wurde nicht gefunden';
$string['certificatetext'] = 'Zertifikatstext';
$string['certificatetext_help'] = 'Dies ist der Text, der im Zertifikat verwendet wird. Einige spezielle Begriffe werden mit Variablen eingetragen und z.B. durch Kursname, Teinehmername, Bewertung etc. ersetzt
Dies sind:
<ul>
<li>{USERNAME} -> vollständiger Benutzername</li
<li>{COURSENAME} -> vollständiger Kursname (oder definierter alternativer Kursname)</li
<li>{GRADE} -> Bewertung</li>
<li>{DATE} -> Datum</li>
<li>{OUTCOME} -> Lernziele</li>
<li>{TEACHERS} -> Trainer/in-Liste</li>
<li>{IDNUMBER} -> ID Nummer der Teilnehmer/in</li>
<li>{FIRSTNAME} -> Vorname der Teilnehmer/in</li>
<li>{LASTNAME} -> Nachname der Teilnehmer/in</li>
<li>{EMAIL} -> E-Mailadresse der Teilnehmer/in</li>
<li>{ICQ} -> ICQ der Teilnehmer/in</li>
<li>{YAHOO} -> Yahoo Messenger-Name der Teilnehmer/in</li>
<li>{AIM} ->AIM-Name der Teilnehmer/in</li>
<li>{MSN} ->MSN_Name der Teilnehmer/in</li>
<li>{PHONE1} -> 1. Telefonnummer der Teilnehmer/in</li>
<li>{PHONE2} -> 2. Telefonnummer der Teilnehmer/in</li>
<li>{INSTITUTION} -> Institution der Teilnehmer/in</li>
<li>{DEPARTMENT} -> Abteilung der Teilnehmer/in</li>
<li>{ADDRESS} -> Adresse der Teilnehmer/in</li>
<li>{CITY} ->Stadt der Teilnehmer/in</li>
<li>{COUNTRY} ->Land der Teilnehmer/in</li>
<li>{URL} ->Webseite der Teilnehmer/in</li>
<li>{CERTIFICATECODE} -> einmaliger Code des Zertifikats</li>
<li>{USERROLENAME} ->Rollename der Teilnehmer/in im Kurs </li>
<li>{TIMESTART} -> Startdatum der Teilnehmereinschreibung im Kurs</li>
<li>{USERIMAGE} -> Bild des Teilnehmerprofils</li>
<li>{USERRESULTS} ->Bewertungen für Teilnehmer/in in anderen Kursen</li>
<li>{PROFILE_xxxx} -> Indivudelle Profilfeldinhalte der Teilnehmer/in</li>
</ul>
Individuelle Nutzerprofilfelder werden mit "PROFILE_" als Prefix verwendet. Zum Beispiel: es wird ein Nutzerprofil mit dem Kurzname "birthday," erstellt, so dass auf dem Zertifikat {PROFILE_BIRTHDAY} erscheint.
Im Text können viele html-Formatierungen, einfache Schriftarten und Tabellen verwendet werden, jedoch soll jegliche Definition der Anordnung vermieden werden.';
$string['certificatetextx'] = 'Zertifikatstext horizontal ausrichten';
$string['certificatetexty'] = 'Zertifikatstext vertikal ausrichten';
$string['certificateverification'] = 'Prüfung des Zertifikats';
$string['certlifetime'] = 'Ausgestellten Zertifikate aufbewahren: (in Monaten)';
$string['certlifetime_help'] = 'Hier wird die Aufbewahrungsfrist der ausgestellten Zertifikate festgelegt. Die Zertifikate, deren Alter den angegebene Zeitraum überschreiten, werden automatisch gelöscht.';
$string['code'] = 'Code';
$string['codex'] = 'QR Code des Zertifikates horizontal positionieren';
$string['codey'] = 'QR Code des Zertifikates vertikal positionieren';
$string['completedusers'] = 'Nutzer/innen, die die Voraussetzungen erfüllt haben';
$string['completiondate'] = 'Kursabschluss';
$string['coursegrade'] = 'Kursbewertung';
$string['coursename'] = 'Alternativer Kursname';
$string['coursename_help'] = 'Alternativer Kursname';
$string['coursenotfound'] = 'Der Kurs wurde nicht gefunden.';
$string['coursestartdate'] = 'Kursbeginn';
$string['coursetimereq'] = 'Erforderliche Minuten im Kurs';
$string['coursetimereq_help'] = 'Geben Sie hier die Mindestzeit in Minuten an, die ein/e Teilnehmer/in im Kurs eingeloggt sein muss, bevor das Zertifikat ausgestellt werden kann.';
$string['datefmt'] = 'Datumsformat';
$string['datefmt_help'] = 'Geben Sie ein gültiges PHP Muster des Datumsformats (<a href="http://www.php.net/manual/en/function.strftime.php"> Date Formats</a>) an, oder lassen Sie es leer, um das Format der vom Nutzer gewählte Sprache zu verwenden';
$string['defaultcertificatetextx'] = 'Text horizontal positionieren (Standard)';
$string['defaultcertificatetexty'] = 'Text vertikal positionieren (Standard)';
$string['defaultcodex'] = 'Horizontaler QR CodesPosition (Standard)';
$string['defaultcodey'] = 'Vertikale QR Code Position (Standard)';
$string['defaultheight'] = 'Standardhöhe';
$string['defaultperpage'] = 'Pro Seite';
$string['defaultperpage_help'] = 'Die Anzahl der Zertifikate, die pro Seite angezeigt werden (max.200)';
$string['defaultwidth'] = 'Standardbreite';
$string['deleteall'] = 'Alles löschen';
$string['deleteselected'] = 'Ausgewählte löschen';
$string['deletissuedcertificates'] = 'Löschen der ausgestellten Zertifikate';
$string['delivery'] = 'Übergabe';
$string['delivery_help'] = 'Wählen Sie hier, wie Sie das ausgestellte Zertifikat an Teilnehmer/innen übergeben möchten.
<ul>
<li>Öffnen im Browser: Es wird das Zertifikat in einem neuen Browserfenster geöffnet.</li>
<li>Download: Die Datei wird im Fenster zum Download geöffnet.</li>
<li>Zertifikat per E-Mail: Bei der Wahl dieser Option wird das Zertifikat für die Teilnehmer/innen per E-Mail im Anhang gesendet</li>
<li>Nachdem der Benutzer seine Zertifikate bekommen hat, kann er auf den Zertifikatslink auf der Kursseite klicken, und das Ausgabedatum des erhaltenen Zertifikats zu sehen und zu überprüfen.</li>
</ul>';
$string['designoptions'] = 'Designoptionen';
$string['download'] = 'Download erzwingen';
$string['emailcertificate'] = 'E-Mail';
$string['emailfrom'] = 'E-Mail Absender';
$string['emailfrom_help'] = 'Alternativer E-Mail-Namen';
$string['emailothers'] = 'E-Mail an weitere';
$string['emailothers_help'] = 'Geben Sie hier die E-Mail-Adressen (durch Kommata getrennt) von weiteren Personen ein, die benachrichtigt werden sollen, wenn Teilnehmer/innen Zertifikate erhalten.';
$string['emailsent'] = 'Die E-Mails wurden gesendet';
$string['emailstudentsubject'] = 'Ihr Zertifikat für den Kurs {$a->course}';
$string['emailstudenttext'] = 'Guten Tag {$a->username},

beigefügt ist das Zertifikat für den Kurs {$a->course}.

DIES IST EINE AUTOMATISCHE NACHRICHT - BITTE ANTWORTEN SIE NICHT';
$string['emailteachermail'] = '{$a->student} hat ein Zertifikat erhalten: \'{$a->certificate}\'
für Kurs {$a->course}.

Sie können es hier einsehen:

    {$a->url}';
$string['emailteachermailhtml'] = '{$a->student} hat ein Zertifikat erhalten: \'<i>{$a->certificate}</i>\'
für Kurs {$a->course}.

Sie können es hier einsehen:

<a href="{$a->url}">Zertifikatsbericht</a>.';
$string['emailteachers'] = 'E-Mail von Trainer/in';
$string['emailteachers_help'] = 'Wenn aktiv, werden die Trainer mit einer E-Mail benachrichtigt, sobald die Teilnehmer/innen Zertifikate erhalten.';
$string['enablesecondpage'] = 'Aktviert "Rückseite" (zweite Seite) für das Zertifikat';
$string['enablesecondpage_help'] = 'Aktivieren Sie die Erstellung einer Zertifikatsrückseite. Der Zertifikat QR-Code wird auf der Rückseite gedruckt (wenn der QR-Code aktiviert ist)';
$string['eventcertificate_verified'] = 'Zertifikat wurde überprüft';
$string['eventcertificate_verified_description'] = 'Der Nutzer mit der id {$a->userid} überprüfte das Zertifikat mit der id {$a->certificateid}, welches an den Nutzer mit der id {$a->certiticate_userid} ausgegeben wurde.';
$string['filenotfound'] = 'Datei nicht gefunden';
$string['getcertificate'] = 'Zertifikat abrufen';
$string['grade'] = 'Bewertung';
$string['gradefmt'] = 'Bewertungsformat';
$string['gradefmt_help'] = 'Es stehen drei Formate zur Verfügung, um eine Bewertung auf dem Zertifikat auszudrucken:

<ul>
<li>Prozent-Wert: Druckt die Bewertung als Prozentangabe.</li>
<li>Punkt-Wert: Druckt die Bewertung als Punktzahl.</li>
<li>Buchstaben-Bewertung: Druckt die Bewertung als Buchstaben.</li>
</ul>';
$string['gradeletter'] = 'Buchstaben-Bewertung';
$string['gradepercent'] = 'Prozent-Bewertung';
$string['gradepoints'] = 'Punkt-Bewertung';
$string['height'] = 'Höhe des Zertifikats';
$string['hours'] = 'Stunden';
$string['intro'] = 'Einführung';
$string['invalidcode'] = 'Ungültiger Zertifikatscode';
$string['issued'] = 'Ausgestellt';
$string['issuedcertificatenotfound'] = 'Das ausgestellte Zertifikat wurde nicht gefunden';
$string['issueddate'] = 'Austellungsdatum';
$string['issueddownload'] = 'Das ausgestellte Zertifikat [id: {$a}] wurde heruntergeladen';
$string['issuedview'] = 'Ausgestellte Zertifikate';
$string['issueoptions'] = 'Ausstellungsoptionen';
$string['keywords'] = 'Zertifikat, Kurs, PDF, Moodle';
$string['modulename'] = 'Einfaches Zertifikat';
$string['modulename_help'] = 'Das Einfache Zertifikat-Modul erlaubt der Tainer/in benutzerdefinierte Zertifikate zu erstellen, die an Teilnehmer/innen, die die spezifischen Anforderungen des Kurses erfüllen, ausgestellt werden.';
$string['modulenameplural'] = 'Einfache Zertifikate';
$string['multipdf'] = 'Laden Sie die Zertifikate in einer Zip-Datei herunter';
$string['neverdeleteoption'] = 'Niemals löschen';
$string['nocertificatesissued'] = 'Es wurden keine Zertifikate ausgestellt.';
$string['nodelivering'] = 'Versand ist nicht möglich, die Nutzer/in erhält das Zertifikat auf anderem Wege.';
$string['notreceived'] = 'Keine Zertifikate ausgestellt';
$string['onepdf'] = 'Zertifikate in einer PDF-Datei herunterladen';
$string['openbrowser'] = 'In einem neuem Fenster öffnen';
$string['opendownload'] = 'Klicken Sie auf den Button, um das Zertifikat auf Ihrem Computer zu speichern.';
$string['openemail'] = 'Klicken Sie auf den Button, um sich Ihr Zertifikat als E-Mail-Anhang schicken zu lassen.';
$string['openwindow'] = 'Klicken Sie auf den Button, um Ihr Zertifikat in einem neuen Browserfenster zu öffnen.';
$string['pluginadministration'] = 'Zertifikats-Administration';
$string['pluginname'] = 'Einfaches Zertifikat';
$string['printdate'] = 'Druckdatum';
$string['printdate_help'] = 'Das ist das Datum das gedruckt wird, wenn ein Druck-Datum ausgewählt wurde. Wenn das Kursabschlussdatum ausgewählt wurde, der Teilnehmer den Kurs jedoch noch nicht abgeschlossen hat, wird das aktuelle Datum verwendet. Sie können auch das Datum an dem eine Aktivität bewertet wurde (z.B. bei Aufgaben) nutzen. Wird das Zertifikat vor der Bewertung erstellt, wird das aktuelle Datum verwendet.';
$string['printgrade'] = 'Bewertung drucken';
$string['printgrade_help'] = 'Sie können jedes verfügbare Kursbewertungs-Item aus dem Bewertungsbereich auswählen, um die Bewertung, die die Nutzer/in für dieses Item erhalten hat, auf das Zertifikat zu drucken. Die Bewertungs-Items sind in der Reihenfolge, in der Sie im Bewertungsbereich auftauchen, angeordnet. Wählen Sie das Format der Bewertung unten aus.';
$string['printoutcome'] = 'Lernziele drucken';
$string['printoutcome_help'] = 'Sie können jedes Lernziel auswählen und im Zertifikat ausdrucken. Zu dem Lernziel kann die Bewertung des Nutzers für das Lernziel gedruckt werden. Ein Beispiel wäre: Lernziel: verhandlungssicher.';
$string['printqrcode'] = 'Druck eines QR Codes';
$string['printqrcode_help'] = 'Druck des Zertifikat  QR Codes (Druck optional)';
$string['qrcodefirstpage'] = 'QR Code auf die erste Seite drucken';
$string['qrcodefirstpage_help'] = 'QR Code in die erste Seite drucken';
$string['qrcodeposition'] = 'Position des QR Codes im Zertifikat';
$string['qrcodeposition_help'] = 'Dies sind die XY Koordinaten (in Millimeter) des QR Codes für das Zertifikat';
$string['receiveddate'] = 'Vergabedatum';
$string['report'] = 'Bericht';
$string['requiredtimenotmet'] = 'Sie müssen wenigstens {$a->requiredtime} Minuten in diesem Kurs absolviert haben, um das Zertifikat zu erhalten';
$string['secondimage'] = 'Bilddatei für die Rückseite des Zertifikates';
$string['secondimage_help'] = 'Dies ist das Bild, das auf der Rückseite des Zertifikates verwendet wird';
$string['secondpageoptions'] = 'Rückseite des Zertifikates';
$string['secondpagetext'] = 'Text für die Rückseite des Zertifikates';
$string['secondpagex'] = 'Text für die Rückseite des Zertifikates, horizontal positioniert';
$string['secondpagey'] = 'Text für die Rückseite des Zertifikates, vertikal positioniert';
$string['secondtextposition'] = 'Postion des Textes auf der Rückseite des Zertifikates';
$string['secondtextposition_help'] = 'Dies sind die XY Koordinaten (in Millimetern) für den Text auf der Rückseite des Zertifikates';
$string['sendtoemail'] = 'An E-Mail-Adresse der Nutzer/in senden';
$string['showusers'] = 'Anzeigen';
$string['simplecertificate:addinstance'] = 'Einfache Zertifikaktivität hinzufügen';
$string['simplecertificate:manage'] = 'Einfache Zertifikataktivitäten verwalten';
$string['simplecertificate:view'] = 'Einfache Zertifikaktivität anzeigen';
$string['size'] = 'Zertifikatsgröße';
$string['size_help'] = 'Dies ist die Breite und Höhe (in Millimetern) des Zertifikats. Die Standargröße ist A4';
$string['standardview'] = 'Ein Zertifikat zu Testzwecken ausstellen';
$string['summaryofattempts'] = 'Zusammenfassung der bisher erhaltenen Zertifikate';
$string['textposition'] = 'Position des Zertifikattextes';
$string['textposition_help'] = 'Dies sind die XY Koordinaten (in Millimetern) des Zertifikattextes';
$string['timestartdatefmt'] = 'Das Datum der Einschreibung';
$string['timestartdatefmt_help'] = 'Geben Sie ein gültiges PHP Datumsmuster (<a href="http://www.php.net/manual/en/function.strftime.php"> Date Formats</a>) ein, oder lassen Sie dieses Feld frei, um das Format der von der Nutzer/in ausgewählten Sprache zu benutzen.';
$string['upgradeerror'] = 'Fehler beim Upgrade von $a';
$string['usercontextnotfound'] = 'Nutzer/innen-Kontext nicht gefunden';
$string['userdateformat'] = 'Datumsformat der Sprache des/der Nutzers/in';
$string['usernotfound'] = 'Nutzer/in nicht gefunden';
$string['variablesoptions'] = 'Andere Optionen';
$string['verifycertificate'] = 'Zertifikat verifizeren';
$string['viewcertificateviews'] = 'Ausgeteilte Zertifikate ansehen {$a}';
$string['width'] = 'Zertifikatsbreite';
