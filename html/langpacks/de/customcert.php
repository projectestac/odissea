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
 * Strings for component 'customcert', language 'de', version '3.11'.
 *
 * @package     customcert
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activity'] = 'Aktivität';
$string['addcertpage'] = 'Zertifikatsseite hinzufügen';
$string['addelement'] = 'Element hinzufügen';
$string['awardedto'] = 'Ausgestellt an';
$string['cannotverifyallcertificates'] = 'Sie sind nicht berechtigt, alle Zertifikate auf der Website zu überprüfen.';
$string['certificate'] = 'Zertifikat';
$string['code'] = 'Code';
$string['copy'] = 'Kopieren';
$string['coursetimereq'] = 'Mindestbearbeitungszeit in Minuten';
$string['coursetimereq_help'] = 'Geben Sie hier die minimale Zeit in Minuten ein, die Teilnehmer/innen im Kurs eingeloggt gewesen sein müssen, bevor sie das Zertifikat erhalten können.';
$string['createtemplate'] = 'Vorlage erstellen';
$string['customcert:addinstance'] = 'Neues Zertifikat hinzufügen';
$string['customcert:manage'] = 'Zertifikat bearbeiten';
$string['customcert:manageemailothers'] = 'Die Einstellung "Weitere Empfänger benachrichtigen" anpassen';
$string['customcert:manageemailstudents'] = 'Die Einstellung "Teilnehmer/innen benachrichtigen" anpassen';
$string['customcert:manageemailteachers'] = 'Die Einstellung "Trainer/innen benachrichtigen" anpassen';
$string['customcert:manageprotection'] = 'Die Schutzeinstellungen anpassen';
$string['customcert:managerequiredtime'] = 'Die Einstellung zur erforderlichen Zeit anpassen';
$string['customcert:manageverifyany'] = 'Die Einstellung für die Überprüfung der Zertifikate anpassen';
$string['customcert:receiveissue'] = 'Ein Zertifikat empfangen';
$string['customcert:verifyallcertificates'] = 'Alle Zertifikate auf dieser Website überprüfen';
$string['customcert:verifycertificate'] = 'Echtheit eines Zertifikats überprüfen';
$string['customcert:view'] = 'Zertifikat anzeigen';
$string['customcert:viewallcertificates'] = 'Alle Zertifikate anzeigen';
$string['customcert:viewreport'] = 'Zertifikatsübersicht';
$string['customcertsettings'] = 'Zertifikat Einstellungen';
$string['deletecertpage'] = 'Seite löschen';
$string['deleteconfirm'] = 'Bestätigung löschen';
$string['deleteelement'] = 'Element löschen';
$string['deleteelementconfirm'] = 'Möchten Sie wirklich dieses Element löschen?';
$string['deleteissueconfirm'] = 'Möchten Sie dieses ausgegebene Zertifikat wirklich löschen?';
$string['deleteissuedcertificates'] = 'Ausgestellte Zertifikate löschen';
$string['deletepageconfirm'] = 'Möchten Sie diese Zertifikatsseite wirklich löschen?';
$string['deletetemplateconfirm'] = 'Möchten Sie diese Zertifikatsvorlage wirklich löschen?';
$string['deliveryoptiondownload'] = 'An den Browser schicken und einen Datei-Download erzwingen';
$string['deliveryoptioninline'] = 'Die Datei Inline an den Browser schicken';
$string['deliveryoptions'] = 'Zustellmöglichkeiten';
$string['description'] = 'Beschreibung';
$string['duplicate'] = 'Duplikat';
$string['duplicateconfirm'] = 'Duplikatsbestätigung';
$string['duplicatetemplateconfirm'] = 'Möchten Sie diese Zertifikatsvorlage wirklich duplizieren?';
$string['editcustomcert'] = 'Zertifikat bearbeiten';
$string['editelement'] = 'Element bearbeiten';
$string['edittemplate'] = 'Vorlage bearbeiten';
$string['elementname'] = 'Bezeichnung des Elements';
$string['elementname_help'] = 'Diese Bezeichnung dient zum Auffinden des Elements, wenn das Zertifikat bearbeitet wird. Das ist hilfreich, um z.B. eingefügte Bilder einfacher unterscheiden zu können. Die Bezeichnung erscheint nicht in der PDF-Datei.';
$string['elementplugins'] = 'Element Plugins';
$string['elements'] = 'Elemente';
$string['elements_help'] = 'Dies ist die Liste der Elemente, die auf dem Zertifikat dargestellt werden.

Bitte beachten Sie: Die Elemente werden in dieser Reihenfolge gezeichnet. Die Reihenfolge kann mit den Pfeilen neben jedem Element verändert werden.';
$string['elementwidth'] = 'Breite';
$string['elementwidth_help'] = 'Geben Sie die Breite des Elementes an - \'0\' bedeutet keine Breitenbeschränkung.';
$string['emailnonstudentbody'] = 'Anbei erhalten Sie das Zertifikat \'{$a->certificatename}\' für \'{$a->userfullname}\' aus dem Kurs \'{$a->coursefullname}\'.';
$string['emailnonstudentbodyplaintext'] = 'Anbei erhalten Sie das Zertifikat \'{$a->certificatename}\' für \'{$a->userfullname}\' aus dem Kurs \'{$a->coursefullname}\'.';
$string['emailnonstudentcertificatelinktext'] = 'Zertifikatsbericht anzeigen';
$string['emailnonstudentgreeting'] = 'Hallo';
$string['emailnonstudentsubject'] = '{$a->coursefullname}: {$a->certificatename}';
$string['emailothers'] = 'Weitere Empfänger benachrichtigen';
$string['emailothers_help'] = 'Die hier eingetragenen E-Mail-Empfänger (durch Komma getrennt bei mehreren Adressen) erhalten eine Kopie des Zertifikats. <strong>Achtung:</strong> Wenn diese Option eingestellt ist bevor die Erstellung des Zertifikats beendet ist, werden die E-Mail-Empfänger ein unvollständiges Zertifikat erhalten.';
$string['emailstudentbody'] = 'Anbei erhalten Sie Ihr Zertifkat  \'{$a->certificatename}\' für den Kurs \'{$a->coursefullname}\'.';
$string['emailstudentbodyplaintext'] = 'Anbei erhalten Sie Ihr Zertifkat  \'{$a->certificatename}\' für den Kurs \'{$a->coursefullname}\'.';
$string['emailstudentcertificatelinktext'] = 'Zertifikat anzeigen';
$string['emailstudentgreeting'] = 'Sehr geehrte/r {$a}';
$string['emailstudents'] = 'Teilnehmer/innen benachrichtigen';
$string['emailstudents_help'] = 'Wenn diese Einstellung aktiviert ist, erhalten Teilnehmer/innen eine Kopie des Zertifikats, sobald dieses verfügbar ist. <strong>Achtung:</strong> Wenn diese Option auf "Ja" eingestellt ist bevor die Erstellung des Zertifikats beendet ist, werden die Teilnehmer/innen ein unvollständiges Zertifikat erhalten.';
$string['emailstudentsubject'] = '{$a->coursefullname}: {$a->certificatename}';
$string['emailteachers'] = 'Trainer/innen benachrichtigen';
$string['emailteachers_help'] = 'Wenn diese Einstellung aktiviert ist, erhalten Trainer/innen eine Kopie des Zertifikats, sobald dieses verfügbar ist. <strong>Achtung:</strong> Wenn diese Option auf "Ja" eingestellt ist bevor die Erstellung des Zertifikats beendet ist, werden die Trainer/innen ein unvollständiges Zertifikat erhalten.';
$string['exampledatawarning'] = 'Die angezeigten Werte sind gegebenenfalls nur Beispielwerte, um die korrekte Platzierung der Elemente zu verdeutlichen.';
$string['font'] = 'Schriftart';
$string['font_help'] = 'Diese Schriftart wird verwendet, wenn das Element generiert wird.';
$string['fontcolour'] = 'Farbe';
$string['fontcolour_help'] = 'Die Schriftfarbe';
$string['fontsize'] = 'Größe';
$string['fontsize_help'] = 'Die Schriftgröße in Points';
$string['getcustomcert'] = 'Zertifikat anzeigen';
$string['gradeoutcome'] = 'Ergebnis';
$string['height'] = 'Höhe';
$string['height_help'] = 'Dies ist die Höhe der erstellten PDF Datei in mm. Eine A4 Seite ist 297 mm und ein US-Letter 279 mm hoch.';
$string['invalidcode'] = 'Sie haben einen ungültigen Code eingegeben.';
$string['invalidcolour'] = 'Ungültige Farbe ausgewählt. Bitte geben Sie eine gültige HTML Farbbezeichnung oder einen sechs- oder dreistelligen HEX-Code der Farbe ein.';
$string['invalidelementwidth'] = 'Geben Sie eine Zahl größer als 0 ein.';
$string['invalidheight'] = 'Der Wert für die Höhe muss eine gültige Zahl größer als 0 sein.';
$string['invalidmargin'] = 'Der Wert für den Rand muss eine gültige Zahl größer als 0 sein.';
$string['invalidposition'] = 'Bitte geben Sie eine positive Zahl für Postion {$a} an.';
$string['invalidwidth'] = 'Der Wert für die Breite muss eine gültige Zahl größer als 0 sein.';
$string['landscape'] = 'Querformat';
$string['leftmargin'] = 'Linker Rand';
$string['leftmargin_help'] = 'Das ist der Wert für den linken Rand des Zertifikates in mm.';
$string['listofissues'] = 'Empfänger/innen: {$a}';
$string['load'] = 'Laden';
$string['loadtemplate'] = 'Vorlage laden';
$string['loadtemplatemsg'] = 'Sind Sie sich sicher, dass Sie diese Vorlage laden wollen? Sämtliche Seiten und Elemente des Zertifikates werden dadurch entfernt.';
$string['managetemplates'] = 'Vorlagen verwalten';
$string['managetemplatesdesc'] = 'Dieser Link öffnet eine neue Seite, auf der Sie alle Vorlagen für das Zertifikat verwalten können.';
$string['modify'] = 'Bearbeiten';
$string['modulename'] = 'Zertifikat';
$string['modulename_help'] = 'Dieses Modul ermöglicht die dynamische Erstellung von PDF Zertifikaten.';
$string['modulenameplural'] = 'Zertifikate';
$string['mycertificates'] = 'Meine Zertifikate';
$string['mycertificatesdescription'] = 'Dies sind die Zertifikate, die Sie entweder per E-Mail erhalten oder manuell heruntergeladen haben.';
$string['name'] = 'Name';
$string['nametoolong'] = 'Sie haben die maximal erlaubte Länge für den Namen überschritten.';
$string['nocustomcerts'] = 'Für diesen Kurs gibt es noch keine Zertifikate.';
$string['noimage'] = 'Kein Bild';
$string['norecipients'] = 'Keine Empfänger/innen';
$string['notemplates'] = 'Keine Vorlagen';
$string['notissued'] = 'Nicht verliehen';
$string['notverified'] = 'Nicht überprüft';
$string['options'] = 'Optionen';
$string['page'] = 'Seite {$a}';
$string['pluginadministration'] = 'Zertifikatsverwaltung';
$string['pluginname'] = 'Zertifikat';
$string['portrait'] = 'Hochformat';
$string['posx'] = 'X-Position';
$string['posx_help'] = 'X-Position des Referenzpunktes des Elementes, gemessen in Millimetern ab der linken oberen Ecke.';
$string['posy'] = 'Y-Position';
$string['posy_help'] = 'Y-Position des Referenzpunktes des Elementes, gemessen in Millimetern ab der linken oberen Ecke.';
$string['preventcopy'] = 'Kopieren verhindern';
$string['preventcopy_desc'] = 'Kopierschutz des im Zertifikat enthaltenen Textes aktivieren.';
$string['preventmodify'] = 'Bearbeiten verhindern';
$string['preventmodify_desc'] = 'Hiermit wird im Zertifikat das Bearbeiten des enthaltenen Text verhindert.';
$string['preventprint'] = 'Drucken verhindern';
$string['preventprint_desc'] = 'Hiermit wird das Drucken des Zertifikats verhindert.';
$string['print'] = 'Drucken';
$string['privacy:metadata:customcert_issues'] = 'Liste der ausgestellten Zertifikate';
$string['privacy:metadata:customcert_issues:code'] = 'Eindeutiger Code zur Identifikation des Zertifikats';
$string['privacy:metadata:customcert_issues:customcertid'] = 'ID des Zertifikats';
$string['privacy:metadata:customcert_issues:emailed'] = 'Ob das Zertifikat per E-Mail versendet wurde oder nicht';
$string['privacy:metadata:customcert_issues:timecreated'] = 'Zeitpunkt, zu dem das Zertifikat ausgestellt wurde';
$string['privacy:metadata:customcert_issues:userid'] = 'ID der Person, die das Zertifikat erhalten hat';
$string['rearrangeelements'] = 'Elemente neu anordnen';
$string['rearrangeelementsheading'] = 'Verschieben Sie die Elemente an die gewünschte Position im Zertifikat.';
$string['receiveddate'] = 'Verliehen am';
$string['refpoint'] = 'Position des Referenzpunktes';
$string['refpoint_help'] = 'Der Referenzpunkt ist die Position eines Elementes, an dem die x und y Koordinaten bestimmt werden. Er wird durch ein \'+\', das in der Mitte bzw. an den Ecken des Elementes auftaucht, dargestellt.';
$string['replacetemplate'] = 'Ersetzen';
$string['requiredtimenotmet'] = 'Sie müssen mindestens {$a->requiredtime} Minuten im Kurs eingeloggt sein um auf das Zertifikat zugreifen zu können.';
$string['rightmargin'] = 'Rechter Rand';
$string['rightmargin_help'] = 'Das ist der Wert für den rechten Rand des Zertifikates in mm.';
$string['save'] = 'Speichern';
$string['saveandclose'] = 'Speichern und Schließen';
$string['saveandcontinue'] = 'Speichern und Fortfahren';
$string['savechangespreview'] = 'Änderungen speichern und Vorschau anzeigen';
$string['savetemplate'] = 'Vorlage speichern';
$string['search:activity'] = 'Custom Certificate - Information über die Aktivität';
$string['setprotection'] = 'Schutzeinstellungen';
$string['setprotection_help'] = 'Wählen Sie die Aktivitäten aus, die Sie sperren wollen.';
$string['showposxy'] = 'X- und Y-Position anzeigen';
$string['showposxy_desc'] = 'Zeigt die X- und Y-Position von Elementen während der Bearbeitung an und erlaubt so deren exakte Positionierung.

Wenn Sie ausschließlich per Drag & Drop arbeiten möchten, benötigen Sie diese Einstellung wahrscheinlich nicht.';
$string['taskemailcertificate'] = 'E-Mail-Versand der Zertifikate.';
$string['templatename'] = 'Name der Vorlage';
$string['templatenameexists'] = 'Dieser Vorlagenname existiert bereits. Wählen Sie einen anderen Namen.';
$string['topcenter'] = 'Mitte';
$string['topleft'] = 'Oben links';
$string['topright'] = 'Oben rechts';
$string['type'] = 'Typ';
$string['uploadimage'] = 'Bild hochladen';
$string['uploadimagedesc'] = 'Dieser Link öffnet eine neue Seite, auf der Sie Bilder hochladen können.
Bilder, die auf diese Weise hochgeladen werden, stehen auf der gesamten Website allen zur Verfügung , die angepasste Zertifikate erstellen dürfen.';
$string['verified'] = 'Bestätigt';
$string['verify'] = 'Überprüfen';
$string['verifyallcertificates'] = 'Überprüfung aller Zertifikate erlauben';
$string['verifyallcertificates_desc'] = 'Wenn diese Einstellung aktiviert ist, kann eine Person (auch eine nicht angemeldete) den Link \'{$a}\' aufrufen, um alle Zertifikate auf der Website zu überprüfen, anstatt für jedes Zertifikat den Bestätigungslink aufrufen zu müssen.

Hinweis: Dies gilt nur für Zertifikate, bei denen in den Zertifikateinstellungen die Option \'Zulassen, dass jemand ein Zertifikat bestätigt\' auf \'Ja\' gesetzt wurde.';
$string['verifycertificate'] = 'Zertifikat überprüfen';
$string['verifycertificateanyone'] = 'Allen Personen erlauben Zertifikate zu überprüfen';
$string['verifycertificateanyone_help'] = 'Diese Einstellung erlaubt es beliebigen Personen (auch nicht angemeldeten!), Zertifikate zu überprüfen.';
$string['verifycertificatedesc'] = 'Dieser Link führt zu einer Seite, auf der Sie die Zertifikate verifizieren können';
$string['width'] = 'Breite';
$string['width_help'] = 'Dies ist die Breite der erstellten PDF Datei in mm. Eine A4 Seite ist 210 mm und ein US-Letter 216 mm breit.';
