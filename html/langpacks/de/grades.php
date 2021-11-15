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
 * Strings for component 'grades', language 'de', version '3.11'.
 *
 * @package     grades
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activities'] = 'Aktivitäten';
$string['addcategory'] = 'Kategorie hinzufügen';
$string['addcategoryerror'] = 'Kategorie konnte nicht hinzugefügt werden.';
$string['addexceptionerror'] = 'Fehler beim Hinzufügen eines Sonderfalls für userid:gradeitem';
$string['addfeedback'] = 'Feedback hinzufügen';
$string['addgradeletter'] = 'Notenstufen hinzufügen';
$string['addidnumbers'] = 'ID-Nummern hinzufügen';
$string['additem'] = 'Bewertungsaspekt hinzufügen';
$string['additionalfeedback'] = 'Zusätzliches Feedback';
$string['addoutcome'] = 'Lernziel hinzufügen';
$string['addoutcomeitem'] = 'Lernzielaspekt hinzufügen';
$string['addscale'] = 'Skala hinzufügen';
$string['adjustedweight'] = 'Gewichtung eingestellt';
$string['aggregateextracreditmean'] = 'Durchschnitt (mit Zusatzpunkten)';
$string['aggregatemax'] = 'Höchste Bewertung';
$string['aggregatemean'] = 'Durchschnittsbewertung';
$string['aggregatemedian'] = 'Median aller Bewertungen';
$string['aggregatemin'] = 'Niedrigste Bewertung';
$string['aggregatemode'] = 'Modus (Modalwert) aller Bewertungen';
$string['aggregatenotonlygraded'] = 'Leere Bewertungen einbeziehen';
$string['aggregateonlygraded'] = 'Leere Bewertungen ausnehmen';
$string['aggregateonlygraded_help'] = 'Eine leere Bewertung ist eine Bewertung, die in den Bewertungen fehlt. Es kann sich um eine noch nicht benotete Aufgabeneinreichung oder um ein noch nicht versuchten Test usw. handeln.

Diese Einstellung legt fest, ob leere Bewertungen nicht in die Ermittlung des Gesamtergebnisses einbezogen oder als Minimalwerte gezählt werden sollen, z.B. 0 für eine Aufgabe mit einer Bewertung zwischen 0 und 100.';
$string['aggregateoutcomes'] = 'Lernziele in die Gesamtergebnisse einbeziehen';
$string['aggregateoutcomes_help'] = 'Wenn die Option aktiviert ist, werden Lernziele bei der Ermittlung des Gesamtergebnisses berücksichtigt. Diese kann zu einem unerwarteten Gesamtergebnis für die Kategorie führen.';
$string['aggregatesonly'] = 'Zu den Gesamtwerten wechseln';
$string['aggregatesubcatsupgradedgrades'] = 'Hinweis: Die Einstellung  "Aggregation mit Unterkategorien" wurde bei der Aktualisierung entfernt. Da diese Einstellung in diesem Kurs verwendet wurde, sollten Sie sich die Veränderungen bei den Bewertungen genauer ansehen.';
$string['aggregatesum'] = 'Natürlich';
$string['aggregateweightedmean'] = 'Gewichteter Durchschnitt';
$string['aggregateweightedmean2'] = 'Einfach gewichteter Durchschnitt';
$string['aggregation'] = 'Gesamtergebnis';
$string['aggregation_help'] = 'Diese Einstellung legt fest, wie die einzelnen Bewertungsaspekte der Kategorie zusammengefasst werden.

* Durchschnitt: Die Summe aller Bewertungsaspekte wird durch ihre Anzahl geteilt.
* Gewichteter Durchschnitt: Vor der Durchschnittberechnung kann jeder Bewertungsaspekt wird mit einer Gewichtung versehen werden.
* Einfach gewichteter Durchschnitt: Vor der Durchschnittberechnung wird jeder Bewertungsaspekt automatisch mit der Gewichtung seiner Maximalpunktezahl versehen.
* Durchschnitt (mit Zusatzpunkten): Wird nicht mehr unterstützt und sollte nicht verwendet werden.
* Median aller Bewertungen: Die Bewertungen der Bewertungsaspekte werden der Größe nach sortiert. Der Median ist der Wert in der Mitte.
* Niedrigste Bewertung
* Höchste Bewertung
* Modus (Modalwert) aller Bewertungen: Die Bewertung, die am häufigsten vorkommt, wird verwendet. Diese Methode wird oft bei nichtnumerischen Bewertungen eingesetzt.
* Natürlich: Die Summe aller Bewertungen.';
$string['aggregationcoef'] = 'Summenkoeffizient';
$string['aggregationcoefextra'] = 'Zusatzpunkte';
$string['aggregationcoefextra_help'] = 'Wenn die Ergebnisse \'Natürlich\' oder \'Einfach gewichteter Durchschnitt\'  zusammengefasst werden und die Option \'Zusatzpunkte\' aktiviert ist, wird die höchste Bewertung nicht zur höchsten Bewertung der Kategorie hinzugezählt.  Daher kann hierbei die Höchstnote erreicht werden, obwohl nicht bei allen Bewertigen die Höchstnote erreicht wurde.  Wenn in der Systemverwaltung festgelegt wurde, dass Bewertungen veregebn werden können, die den Höchstwert übersteigen, kann die Bewertungsberechnung ein Ergebnis anzeigen, dass höher ist als der eingestellte Höchstwert.

Wenn die Berechnung auf Basis des \'Durchschnitts (mit Zusatzpunkten)\'  gesetzt ist und Extrapunkte einen Wert größer als Null haben, so wird der Wert für den Extrapunkte erst multipliziert und dann dem Durchschnitt der Bewertungen hinzuaddiert.';
$string['aggregationcoefextrasum'] = 'Zusatzpunkte';
$string['aggregationcoefextrasum_help'] = 'Bei der Einstellung "Summe der Bewertungen" als Berechnungsverfahren kann eine Bewertung als Sonderpunkte definiert werden. Das bedeutet, dass die höchste hierbei mögliche Bewertung nicht in die Summe der Bewertungen der Kategorie eingerechnet wird. Die Bewertung selber wird als Bonus dennoch mit berechnet.
Das folgende Beispiel kann dies verdeutlichen:

<ul>
    <li>Wert 1 ist bewertet mit 0-100</li>
    <li>Wert 2 ist bewertet mit 0-75</li>
    <li>Wert 1 ist als "Extrapunkte" aktiviert, Wert 2 jedoch nicht.</li>
    <li>Beide Werte gehören zur Kategorie 1. Für diese gilt, dass die Summe der Bewertungen ermittelt werden soll </li>
    <li>Kategorie 1 wird gesamt mit 0-75 bewertet</li>
    <li>Ein Teilnehmer erhält nun die Bewertung 20 für Wert 1 und 75 für Wert 2</li>
    <li>Die Berechnung für Kategorie 1 ist nun 75/75 (20+70 = 95; Wert 1 wird als Extrapunkte gewertet. Der Höchstwert kann jedoch nur 75 sein, daher ist die Endnote 75.)</li>
</ul>';
$string['aggregationcoefextrasumabbr'] = '+';
$string['aggregationcoefextraweight'] = 'Gewichtung von Zusatzpunkten';
$string['aggregationcoefextraweight_help'] = 'Bei der Berechnung der Extrapunkte wird folgendes Verfahren angewandt. Bewertungen für die  Extrapunkte vergeben werden werden erst mit dem Multiplikator multipliziert. Dann werden die Einzelwerte addiert und durch die Zahl der Bewertungen dividiert. Die Zahl durch die dividiert wird   umfasst nur die Berwertungen, für die es keine Extrapunkte gibt. Im folgenden Beispiel erfolgt daher nur eine Division durch 2 und nicht durch 3.

<ul>
    <li>Wert 1 wird bewertet mit 0-100 und "Extrapunkte" Wert wird gesetzt auf 2</li>
    <li>Wert 2 wird bewertet mit 0-100 und "Extrapunkte" Wert bleibt auf 0.0000</li>
    <li>Wert 3 wird bewertet mit 0-100 und "Extrapunkte" Wert bleibt auf 0.0000</li>
    <li>Alle 3 Werte gehören in Kategorie 1, mit der Bewertungsstrategie "Durchschnitt der Einzelbewertungen (mit Extrapunkten)" als Berechnungsverfahren</li>
    <li>Ein Teilnehmer erhält nun folgende Einzelbewertungen 20 für Wert 1, 40 für Wert 2 und 70 für Wert 3</li>
    <li>Die Gesamtbewertung für Kategorie 1 ist nun 50/100 (20*2 + 40 + 70) / 3</li>
</ul>';
$string['aggregationcoefweight'] = 'Gewichtung der Aspekte';
$string['aggregationcoefweight_help'] = 'Die Gewichtung des Wertes wird in der Gesamtberechnung der Kategorie verwendet, um die Bedeutung des Werts im Vergleich zu anderen Bewertungsaspekten derselben Kategorie zu beeinflussen.';
$string['aggregationhintdropped'] = '(Unberücksichtigt)';
$string['aggregationhintexcluded'] = '(Unberücksichtigt)';
$string['aggregationhintextra'] = '(Zusatzbewertung)';
$string['aggregationhintnovalue'] = '(Leer)';
$string['aggregationofa'] = 'Zusammenfassung von {$a}';
$string['aggregationposition'] = 'Anzeige des Gesamtergebnisses';
$string['aggregationposition_help'] = 'Diese Einstellung legt fest, ob die Spalten mit den Gesamtergebnissen der Kategorien und des Kurses an erster oder letzter Stelle in den Bewertungsberichten angezeigt werden.';
$string['aggregationsvisible'] = 'Mögliche Summierungsarten';
$string['aggregationsvisiblehelp'] = 'Wählen Sie alle Summierungsarten, die nutzbar sein sollen. Benutzen Sie die Strg-Taste (bzw. Ctrl), um mehrere Arten zu markieren.';
$string['allgrades'] = 'Alle Bewertungen nach Kategorien';
$string['allstudents'] = 'Alle Teilnehmer/innen';
$string['allusers'] = 'Alle Nutzer/innen';
$string['autosort'] = 'Auto-Sortierung';
$string['availableidnumbers'] = 'Verfügbare ID-Nummern';
$string['average'] = 'Durchschnitt';
$string['averagesdecimalpoints'] = 'Nachkommastellen in den Spaltendurchschnitten';
$string['averagesdecimalpoints_help'] = 'Diese Einstellung legt die Anzahl der angezeigten Dezimalstellen fest, die für jeden Durchschnittswerts angezeigt werden sollen, oder ob die übergreifende Dezimalstelleneinstellung der Kategorie oder des Bewertungselements verwendet wird (Vererben).';
$string['averagesdisplaytype'] = 'Spaltendurchschnittsanzeige';
$string['averagesdisplaytype_help'] = 'Diese Einstellung legt fest, ob der Durchschnitt als Punktwert, Prozent oder Buchstabe angezeigt wird, oder der Anzeigetyp für die Kategorie oder den Bewertungsaspekt verwendet wird (Vererben).';
$string['backupwithoutgradebook'] = 'Die Sicherung enthält keine Bewertungskonfiguration';
$string['badgrade'] = 'Ungültige Bewertung';
$string['badlyformattedscale'] = 'Bitte tragen Sie eine kommagetrennte Liste von Werten ein (mindestens zwei Werte)';
$string['baduser'] = 'Ungültige/r Teilnehmer/in';
$string['bonuspoints'] = 'Extrapunkte';
$string['bulkcheckboxes'] = 'Checkboxes';
$string['calculatedgrade'] = 'Bewertung berechnen';
$string['calculation'] = 'Berechnung';
$string['calculation_help'] = 'Eine Berechnung ist eine Formel zur Bestimmung von Gesamtbewertungen. Die Formel sollte mit einem Gleichheitszeichen (=) beginnen und kann die üblichen mathematischen Operatoren (wie etwa max, min, sum) enthalten.

Sie können auch andere Bewertungselemente in die Rechnung einbeziehen, indem Sie die ID-Nummer in eine doppelte eckige Klammer [[ID]] einfügen.';
$string['calculationadd'] = 'Berechnung hinzufügen';
$string['calculationedit'] = 'Berechnung bearbeiten';
$string['calculationsaved'] = 'Berechnung gespeichert';
$string['calculationview'] = 'Berechnung ansehen';
$string['cannotaccessgroup'] = 'Bei der gewählten Gruppe kann nicht auf die Bewertung zugegriffen werden.';
$string['categories'] = 'Kategorien';
$string['category'] = 'Kategorie';
$string['categoryedit'] = 'Kategorie bearbeiten';
$string['categoryname'] = 'Name der Kategorie';
$string['categorytotal'] = 'Kategorie gesamt';
$string['categorytotalfull'] = '{$a->category} gesamt';
$string['categorytotalname'] = 'Name für Gesamtergebnis der Kategorie';
$string['changedefaults'] = 'Grundeinstellungen ändern';
$string['changereportdefaults'] = 'Voreinstellungen für Berichte ändern';
$string['chooseaction'] = 'Aktion auswählen ...';
$string['choosecategory'] = 'Kategorie auswählen';
$string['collapsecriterion'] = 'Einklappkriterium';
$string['combo'] = 'Tabs und Dropdown-Menü';
$string['compact'] = 'Komprimieren';
$string['componentcontrolsvisibility'] = 'Die Sichtbarkeit dieses Bewertungselements wird in den Aktivitätseinstellungen festgelegt.';
$string['contract'] = 'Kategorie einschränken';
$string['contributiontocoursetotal'] = 'Beiträge zum Kurs gesamt';
$string['controls'] = 'Einstellungen';
$string['courseavg'] = 'Kurs-Durchschnitt';
$string['coursegradecategory'] = 'Kursbewertungskategorie';
$string['coursegradedisplaytype'] = 'Anzeigetyp der Bewertungskategorie';
$string['coursegradedisplayupdated'] = 'Die Anzeige der Kursbewertung wurde aktualisiert.';
$string['coursegradesettings'] = 'Einstellungen zur Kursbewertung';
$string['coursename'] = 'Name des Kurses';
$string['coursescales'] = 'Kursskalen';
$string['coursesettings'] = 'Kurseinstellungen';
$string['coursesettingsexplanation'] = 'Die Kurseinstellungen legen fest, wie die Bewertungen für alle Teilnehmer/innen im Kurs gezeigt werden';
$string['coursesiamtaking'] = 'Kurse - Teilnehmer/in';
$string['coursesiamteaching'] = 'Kurse - Trainer/in';
$string['coursetotal'] = 'Kurs gesamt';
$string['createcategory'] = 'Kategorie anlegen';
$string['createcategoryerror'] = 'Neue Kategorie konnte nicht erstellt werden';
$string['creatinggradebooksettings'] = 'Einstellungen für die Bewertungsübersicht';
$string['csv'] = 'CSV';
$string['currentparentaggregation'] = 'Aktuelle übergeordnete Gesamtsumme';
$string['curveto'] = 'Ändern auf';
$string['decimalpoints'] = 'Dezimalstellen';
$string['decimalpoints_help'] = 'Diese Einstellung legt die Zahl der angezeigten Dezimalzeichen einer Bewertung fest. Die Einstellung wirkt sich nicht auf die Genauigkeit der Berechnungen der Bewertungen aus, die mit einer Genauigkeit von 5 Dezimalstellen durchgeführt werden.';
$string['default'] = 'Standard';
$string['defaultprev'] = 'Voreinstellung ({$a})';
$string['deletecategory'] = 'Kategorie löschen';
$string['disablegradehistory'] = 'Bewertungsverlauf ausschalten';
$string['disablegradehistory_help'] = 'Mit dieser Einstellung schalten Sie die Verlaufsspeicherung von Änderungen in bewertungsspezifischen Tabellen aus. Damit können Sie u.a. die Servergeschwindigkeit erhöhen und den Speicherverbrauch in der Datenbank vermindern.';
$string['displaylettergrade'] = 'Notenstufen anzeigen';
$string['displaypercent'] = 'Prozentwerte anzeigen';
$string['displaypoints'] = 'Punktwerte anzeigen';
$string['displayweighted'] = 'Gewichtete Bewertungen anzeigen';
$string['dropdown'] = 'Dropdown-Menü';
$string['droplow'] = 'Niedrigste Bewertungen herausnehmen';
$string['droplow_help'] = 'Diese Einstellung legt fest, ob eine festgelegte Anzahl niedriger Bewertungen bei der Ermittlung des Gesamtergebnisses unberücksichtigt bleibt.';
$string['droplowestvalue'] = 'Niedrigste Bewertungen verwerfen';
$string['droplowestvalues'] = '{$a} niedrigste Werte entfernen';
$string['dropped'] = 'herausgenommen';
$string['dropxlowest'] = 'Die X niedrigsten <br />herausnehmen';
$string['dropxlowestwarning'] = 'Anmerkung: Wenn Sie die Option "die X niedrigsten herausnehmen" verwenden, wird angenommen, dass alle Elemente der Kategorie die gleiche Punktzahl haben. Wenn die Punktwerte differieren, werden die Ergebnisse unkalkulierbar.';
$string['duplicatedgradeitem'] = '{$a} (Kopie)';
$string['duplicatescale'] = 'Skala duplizieren';
$string['edit'] = 'Bearbeiten';
$string['editcalculation'] = 'Berechnung bearbeiten';
$string['editcalculationverbose'] = 'Berechnung {$a->category} {$a->itemmodule} {$a->itemname} bearbeiten';
$string['editfeedback'] = 'Feedback bearbeiten';
$string['editgrade'] = 'Bewertung bearbeiten';
$string['editgradeletters'] = 'Notenstufen bearbeiten';
$string['editoutcome'] = 'Lernziel bearbeiten';
$string['editoutcomes'] = 'Lernziele bearbeiten';
$string['editscale'] = 'Skala bearbeiten';
$string['edittree'] = 'Einstellungen';
$string['editverbose'] = '{$a->category} {$a->itemmodule} {$a->itemname} bearbeiten';
$string['enableajax'] = 'Ajax aktivieren';
$string['enableajax_help'] = 'Ajax-Funktionalität für die Bewerterübersicht bereitstellen, um allgemeine Operationen zu vereinfachen und zu beschleunigen. Ajax arbeitet mit JavaScript, das deswegen anwenderseits im Webbrowser aktiviert sein muss.';
$string['enableoutcomes'] = 'Lernziele aktivieren';
$string['enableoutcomes_help'] = 'Wenn die Option aktiviert ist, können Bewertungsaspekte mit einer oder mehreren Bewertungsskalen bewertet werden, die mit Aussagen eines Lernziels verknüpft sind.';
$string['encoding'] = 'Kodierung';
$string['encoding_help'] = 'Wählen Sie die Zeichencodierung aus, die für diese Daten benutzt wird (Standard: UTF-8). Bei einer falschen Zeichencodierung wird diese in der Datenvorschau sichtbar.';
$string['errorcalculationbroken'] = 'Zirkelverweis oder unvollständige Berechnungsformel';
$string['errorcalculationnoequal'] = 'Formeln müssen mit einem Gleichheitszeichen beginnen (=1+2)';
$string['errorcalculationunknown'] = 'Ungültige Formel';
$string['errorgradevaluenonnumeric'] = 'Nicht-numerischer Wert für hohe oder niedrige Bewertung!';
$string['errornocalculationallowed'] = 'Für diesen Wert sind keine Berechnungen zulässig.';
$string['errornocategorisedid'] = 'Keine nicht kategorisierte id!';
$string['errornocourse'] = 'Keine Kursinformation!';
$string['errorreprintheadersnonnumeric'] = 'Nicht-numerischer Wert für Kopfzeile!';
$string['errorsavegrade'] = 'Die Bewertung konnte nicht gespeichert werden.';
$string['errorsettinggrade'] = 'Fehler beim Speichern "{$a->itemname}" der Bewertung für Nutzer (userid) {$a->userid}';
$string['errorupdatinggradecategoryaggregateonlygraded'] = 'Fehler beim Aktualisieren von "Nur nichtleere Bewertungen zusammenfassen" in der Bewertungskategorie {$a->id}';
$string['errorupdatinggradecategoryaggregateoutcomes'] = 'Fehler beim Aktualisieren von "Ergebnisse in die Zusammenfassung einbeziehen" in der Bewertungskategorie {$a->id}';
$string['errorupdatinggradecategoryaggregation'] = 'Es ist ein Fehler beim Aktualisieren des Typs der Zusammenfassung in der Bewertungskategorie mit der ID {$a->id} aufgetreten.';
$string['errorupdatinggradeitemaggregationcoef'] = 'Es ist ein Fehler beim Aktualisieren des Summenkoeffizients (Gewichtung oder Zusatzpunkte) des Bewertungselements mit der ID {$a->id} aufgetreten.';
$string['eventgradedeleted'] = 'Bewertung gelöscht';
$string['eventgradeitemcreated'] = 'Bewertungselement angelegt';
$string['eventgradeitemdeleted'] = 'Bewertungselement gelöscht';
$string['eventgradeitemupdated'] = 'Bewertungselement geändert';
$string['eventgradelettercreated'] = 'Bewertungschreiben erstellt';
$string['eventgradeletterdeleted'] = 'Bewerbungsschreiben gelöscht';
$string['eventgradeletterupdated'] = 'Berwertungsschreiben aktualisiert';
$string['eventgradeviewed'] = 'Bewertungen angezeigt';
$string['eventscalecreated'] = 'Skala erstellt';
$string['eventscaledeleted'] = 'Skala gelöscht';
$string['eventscaleupdated'] = 'Skala aktualisiert';
$string['eventusergraded'] = 'Nutzer/in bewertet';
$string['excluded'] = 'Unberücksichtigt';
$string['excluded_help'] = 'Wenn diese Option aktiviert ist, wird diese Bewertung bei jeder Ermittlung eines Gesamtergebnisses unberücksichtigt bleiben.';
$string['expand'] = 'Kategorie erweitern';
$string['expandcriterion'] = 'Aufklappkriterium';
$string['export'] = 'Export';
$string['exportalloutcomes'] = 'Alle Lernziele exportieren';
$string['exportfeedback'] = 'Feedback mit exportieren';
$string['exportfeedback_desc'] = 'Dies kann beim Export außer Kraft gesetzt werden.';
$string['exportformatoptions'] = 'Formatoptionen für den Export';
$string['exportonlyactive'] = 'Gesperrte Nutzerkonten ausnehmen';
$string['exportonlyactive_help'] = 'Nur Teilnehmer/innen exportieren, deren Einschreibung aktiv ist und die nicht gesperrt wurden.';
$string['exportplugins'] = 'Export-Plugins';
$string['exportsettings'] = 'Exporteinstellungen';
$string['exportto'] = 'Export nach';
$string['externalurl'] = 'Externe URL';
$string['externalurl_desc'] = 'Wenn Sie eine externe Bewertungsverwaltung verwenden, hinterlegen Sie die URL hier.';
$string['extracreditvalue'] = 'Zusatzpunkte für {$a}';
$string['extracreditwarning'] = 'Anmerkung: Wenn für alle Elemente einer Kategorie Extrapunkte vergeben werden, dann werden sie bei der Gesamtbewertung nicht berücksichtigt. Es wird keine Gesamtpunktzahl ermittelt.';
$string['fail'] = 'Fehlgeschlagen';
$string['feedback'] = 'Feedback';
$string['feedback_help'] = 'Diese Einstellung erlaubt Anmerkungen zur Bewertung durch Trainer/innen. Das Feedback kann ein ausführlicher Text, eine sehr persönliche Rückmeldung oder ein Code sein, der üblicherweise in der Bildungseinrichtung verwandt wird.';
$string['feedbackadd'] = 'Feedback hinzufügen';
$string['feedbackedit'] = 'Feedback bearbeiten';
$string['feedbackfiles'] = 'Feedback-Dateien';
$string['feedbackforgradeitems'] = 'Feedback für {$a}';
$string['feedbackhistoryfiles'] = 'Feedback-Verlaufsdateien';
$string['feedbacks'] = 'Feedbacks';
$string['feedbacksaved'] = 'Feedback gespeichert';
$string['feedbackview'] = 'Feedback ansehen';
$string['finalgrade'] = 'Endbewertung';
$string['finalgrade_help'] = 'Wenn die Überschrieben-Option angekreuzt ist, kann eine Bewertung hinzugefügt oder geändert werden.';
$string['fixedstudents'] = 'Feste Spaltenbreite';
$string['fixedstudents_help'] = 'Ermöglicht es, Bewertungen horizontal zu scrollen, ohne die Spalte Teilnehmer/innen aus den Augen zu verlieren, indem sie fixiert wird.';
$string['forceimport'] = 'Import erzwingen';
$string['forceimport_help'] = 'Den Import der Daten erzwingen auch wenn seit dem Export die Bewertungen aktualisiert wurden.';
$string['forceoff'] = 'Festgelegt: Aus';
$string['forceon'] = 'Festgelegt: An';
$string['forelementtypes'] = 'für die ausgewählten {$a}';
$string['forstudents'] = 'Für Teilnehmer/innen';
$string['full'] = 'Vollständig';
$string['fullmode'] = 'Zur vollständigen Ansicht wechseln';
$string['generalsettings'] = 'Allgemeines';
$string['grade'] = 'Bewertung';
$string['grade_help'] = 'Die Bewertung, die diese Person für ihre Arbeit erhält.';
$string['gradeadministration'] = 'Bewertungsverwaltung';
$string['gradealreadyupdated'] = '{$a} Bewertungen wurden nicht importiert, da diese Bewertungen älter waren als die in der Bewerterübersicht vorhandenen. Um den Import dennoch fortzuführen, verwenden Sie die \'Import erzwingen\'-Funktion.';
$string['gradeanalysis'] = 'Bewertungsanalyse';
$string['gradebook'] = 'Bewertungen';
$string['gradebookcalculationsfixbutton'] = 'Bewertungsänderungen akzeptieren und Berechnungsfehler korrigieren';
$string['gradebookcalculationsuptodate'] = 'Die Berechnungen der Bewertungen sind korrekt. Um die Änderungen zu sehen, muss die Seite neu geladen werden.';
$string['gradebookcalculationswarning'] = 'Hinweis: Es wurden einige Fehler in den Berechnungen der Bewertungen gefunden.  Wenn Ihr Kurs noch nicht begonnen hat oder noch läuft, empfiehlt es sich den Button unten anzuklicken. Dadurch werden einige Bewertungen geändert. Sollte der Kurs bereits abgeschlossen sein, müssen Sie entscheiden, ob Bewertungen nachträglich geändert werden sollen.

Die neuere Version ist {$a->currentversion}. Sie nutzen Gradebook-Version {$a->gradebookversion}. Informationen über Änderungen finden Sie unter <a href="{$a->url}">Gradebook calculation changes</a>.';
$string['gradebookhiddenerror'] = 'Die Bewertungen sind zur Zeit für die Teilnehmer/innen nicht sichtbar.';
$string['gradebookhistories'] = 'Bewertungsverlauf';
$string['gradebooksetup'] = 'Setup für Bewertungen';
$string['gradeboundary'] = 'Untere Grenze für Note';
$string['gradeboundary_help'] = 'Eine prozentuale Grenze über der die Bewertung einer bestimmten Note (Buchstaben) zugeordnet wird.';
$string['gradecategories'] = 'Bewertungskategorien';
$string['gradecategory'] = 'Bewertungskategorie';
$string['gradecategoryonmodform'] = 'Bewertungskategorie';
$string['gradecategoryonmodform_help'] = 'Die Einstellung legt fest in welcher Kategorie der Bewertungen die Aktivität angezeigt wird.';
$string['gradecategorysettings'] = 'Bewertungskategorie-Einstellungen';
$string['gradedisplay'] = 'Bewertungsanzeige';
$string['gradedisplaytype'] = 'Bewertungsanzeige-Typ';
$string['gradedisplaytype_help'] = 'Diese Einstellung legt fest, wie Bewertungen in der Bewerterübersicht und in Nutzerberichten angezeigt werden.

* Buchstabe - Buchstaben (A, B, C,..) oder Wörter werden angezeigt, um eine Auswahl an Bewertungen zu repräsentieren
* Prozent - relativ zum höchsten/niedrigsten Wert
* Punktwert - effektive Bewertungen';
$string['gradedon'] = 'Bewertet: {$a}';
$string['gradeexport'] = 'Bewertungsexport';
$string['gradeexportcolumntype'] = '{$a->name} ({$a->extra})';
$string['gradeexportcustomprofilefields'] = 'Individuelle Nutzerprofilfelder für Bewertungsexport';
$string['gradeexportcustomprofilefields_desc'] = 'Die folgenden individuellen Nutzerprofilfelder sollen in den Bewertungsexport eingebunden werden. Einträge durch Kommas trennen.';
$string['gradeexportdecimalpoints'] = 'Dezimalstellen bei Bewertungsexport';
$string['gradeexportdecimalpoints_desc'] = 'Anzahl der Dezimalstellen, die für den Export angezeigt werden sollen. Dies kann beim Export geändert werden.';
$string['gradeexportdisplaytype'] = 'Anzeigetyp bei Bewertungsexport';
$string['gradeexportdisplaytype_desc'] = 'Bewertungen können als Note, Prozent (relativ zur niedrigsten/höchsten Note) oder als Notenstufe (A, B, C, sehr gut, gut) beim Export gesetzt werden. Beim Export erfolgt dann  ein Überschreiben der vorliegenden Werte.';
$string['gradeexportdisplaytypes'] = 'Bewertungsexport-Anzeigearten';
$string['gradeexportuserprofilefields'] = 'Nutzerprofilfelder für Bewertungsexport';
$string['gradeexportuserprofilefields_desc'] = 'Die folgenden Nutzerprofilfelder sollen in den Bewertungsexport eingebunden werden. Einträge durch Kommas trennen.';
$string['gradeforstudent'] = '{$a->student}<br />{$a->item}{$a->feedback}';
$string['gradegrademinmax'] = 'Anfängliche min. und max. Bewertungen';
$string['gradehelp'] = 'Hilfe für Bewertungen';
$string['gradehistorylifetime'] = 'Anzeigedauer für den Bewertungsverlauf';
$string['gradehistorylifetime_help'] = 'Legen Sie fest wie lange die vorgenommenen Veränderungen in den Notentabellen noch verfügbar sein sollen. In manchen Situationen ist es gut, diesen Wert möglichst hoch zu setzen. Sollten Sie Speicherengpässe oder Leistungsprobleme haben, können Sie den Wert wieder niedriger setzen.';
$string['gradeimport'] = 'Bewertungsimport';
$string['gradeimportfailed'] = 'Der Bewertungsimport scheiterte beim Commit. Details:';
$string['gradeitem'] = 'Bewertungsaspekt';
$string['gradeitemaddusers'] = 'Nicht bewerten';
$string['gradeitemadvanced'] = 'Erweiterte Optionen für Bewertungsaspekte';
$string['gradeitemadvanced_help'] = 'Wählen Sie die Elemente aus, die bei der Bearbeitung von Bewertungsaspekten als Erweiterung angezeigt werden sollen.';
$string['gradeitemislocked'] = 'Diese Aktivität ist in der Bewertung gesperrt. Änderungen an den Bewertungen werden nicht in die Bewertungen des Kurses übernommen solange diese Sperre besteht.';
$string['gradeitemlocked'] = 'Bewertung gesperrt';
$string['gradeitemmembersselected'] = 'Nicht bewertet';
$string['gradeitemminmax'] = 'Diese min. und max. Bewertungen sind in der Bewertungseinstellung für das Element festgelegt.';
$string['gradeitemnonmembers'] = 'Wird bewertet';
$string['gradeitemremovemembers'] = 'Mit bewerten';
$string['gradeitems'] = 'Bewertungsaspekte';
$string['gradeitemsettings'] = 'Bewertungsaspekte';
$string['gradeitemsinc'] = 'Einzuschließende Bewertungsaspekte';
$string['gradeletter'] = 'Note';
$string['gradeletter_help'] = 'Notenstufen sind Buchstaben, A, B, C… oder Worte, zum Beispiel Auszeichnung, Würdigung, Bestehen, …, die verwendet werden, um eine Auswahl an Bewertungen darzustellen.';
$string['gradeletternote'] = 'Füllen Sie die letzte Zeile und speichern Sie, <br />um eine neue Leerzeile für eine weitere Note zu erhalten.';
$string['gradeletteroverridden'] = 'Die Voreinstellungen für die Notenstufen wurden überschrieben.';
$string['gradeletters'] = 'Notenstufen';
$string['gradelocked'] = 'Bewertung ist gesperrt';
$string['gradelong'] = '{$a->grade} / {$a->max}';
$string['grademax'] = 'Maximale Bewertung';
$string['grademax_help'] = 'Wenn der Wert-Typ der Bewertung verwendet wird, kann hier die höchste Bewertung festgesetzt werden. Die höchste Bewertung für einen Aktivitäten-Bewertungsaspekt wird auf der Seite mit den Einstellungen der einzelnen Aktivität festgesetzt.';
$string['grademin'] = 'Minimale Bewertung';
$string['grademin_help'] = 'Wenn der Wert-Typ der Bewertung verwendet wird, kann hier die niedrigste Bewertung festgesetzt werden.';
$string['gradenotificationmessage'] = 'Sie haben ein neues Feedback zu Ihrer Arbeit für "{$a}".';
$string['gradenotificationsubject'] = 'Sie wurden bewertet';
$string['gradeoutcomeitem'] = 'Lernziel bewerten';
$string['gradeoutcomes'] = 'Lernziele';
$string['gradeoutcomescourses'] = 'Kurs-Lernziele';
$string['gradepass'] = 'Bestehensgrenze';
$string['gradepass_help'] = 'Diese Option legt die erforderliche Mindestbewertung für das Bestehen fest. Der Wert wird beim Aktivitäts- und beim Kursabschluss verwendet, außerdem wird bei der Bewertung ein Bestehen in grün und ein Scheitern in rot markiert.
';
$string['gradepassgreaterthangrade'] = 'Die Bestehensgrenze kann nicht höher sein als die Höchstbewertung {$a}';
$string['gradepointdefault'] = 'Standard-Punktebewertung';
$string['gradepointdefault_help'] = 'Diese Einstellung legt den voreingestellten Standardwert der Punktbewertung für diese Aktivität fest.';
$string['gradepointdefault_validateerror'] = 'Der eingetragene Wert musss eine ganze Zahl zwischen 1 und der Höchstbewertung sein.';
$string['gradepointmax'] = 'Maximale Punktebewertung';
$string['gradepointmax_help'] = 'Diese Einstellung legt den höchsten Punktwert für die Bewertung einer Aktivität fest.';
$string['gradepointmax_validateerror'] = 'Diese Einstellung muss eine Ganzzahl zwischen 1 und 10000 sein.';
$string['gradepreferences'] = 'Bewertungseinstellungen';
$string['gradepreferenceshelp'] = 'Hilfe für Bewertungseinstellungen';
$string['gradepublishing'] = 'Veröffentlichen erlauben';
$string['gradepublishing_help'] = 'Aktiviert die Export und Importfunktion: Exportierte Bewertungen können für andere verlinkt werden, ohne dass sie sich im Moodle-System einloggen müssen.  Bewertungen können auf die gleiche Art und Weise importiert werden. Damit können Bewertungen, die aus anderen Systemen stammen integriert werden. Normalerweise können nur Administrator/innen diese Funktion nutzen. Falls dieses Recht weitergegeben wird, sind die betroffenen Personen darauf hinzuweisen, dass mit entsprechender Sorgfalt mit diesen persönlichen Daten umgegangen wird.

Das Veröffentlichen von Bewertungen ist eine Möglichkeit, Bewertungen über eine URL zu importieren und zu exportieren, ohne bei Moodle angemeldet zu sein. Wenn diese Option aktiviert ist, werden für Administrator/innen und Nutzer/innen mit der Berechtigung zum Veröffentlichen von Bewertungen (meist nur Benutzer mit der Managerrolle) die Einstellungen zum Veröffentlichen von Bewertungsexporten angeboten.';
$string['gradepublishinglink'] = 'Herunterladen: {$a}';
$string['gradereport'] = 'Bewertungsbericht';
$string['graderreport'] = 'Bewerterübersicht';
$string['grades'] = 'Bewertungen';
$string['gradesforuser'] = 'Bewertung für {$a->user}';
$string['gradesmoduledeletionpendingwarning'] = 'Warnung: Aktivitätslöschung in Bearbeitung! Einige Bewertungen werden dabei entfernt.';
$string['gradesmoduledeletionprefix'] = '[Löschung in Bearbeitung]';
$string['gradesonly'] = 'Zu den Bewertungen wechseln';
$string['gradessettings'] = 'Bewertungseinstellungen';
$string['gradetype'] = 'Bewertungstyp';
$string['gradetype_help'] = 'Es gibt 4 Bewertungstypen:

* Keine - Keine Bewertung möglich
* Werte - Ein numerischer Wert mit einem Maximum und Minimum
* Skala - Ein Eintrag aus einer Liste - siehe Bewertungsskalen
* Text - Nur freie Feedbacktexte

Nur Werte und Skalen können weiter als Grundlage für Berechnungen genutzt werden. Der Bewertungstyp eines Aktivitäten-Bewertungsaspekt wird in den Einstellungen der jeweiligen Aktivität im Kurs festgelegt.';
$string['gradevaluetoobig'] = 'Eine der Bewertungen ist größer als der zulässige Höchstwert der Bewertungen {$a}';
$string['gradeview'] = 'Bewertung ansehen';
$string['gradewasmodifiedduringediting'] = 'Die Bewertung für {$a-<itemname} für {$a-<username} wurde ignoriert, da diese kürzlich von jemand anderem aktualisiert worden ist.';
$string['gradeweighthelp'] = 'Hilfe zur Bewertung';
$string['gradingmodulename'] = 'Bewertung ({$a})';
$string['groupavg'] = 'Gruppendurchschnitt';
$string['hidden'] = 'Verborgen';
$string['hidden_help'] = 'Wenn diese Option aktiviert ist, wird die Bewertungen vor den Teilnehmer/innen verborgen. \'Verborgen bis...\' kann auf Wunsch eingestellt werden, um die Bewertungen so lange zu verbergen, bis der Bewertungsdurchlauf abgeschlossen wurde.';
$string['hiddenasdate'] = 'Erstellungsdatum für verborgene Bewertungen anzeigen';
$string['hiddenasdate_help'] = 'Falls Nutzer/innen verborgene Bewertungen nicht sehen können, soll das Abgabedatum anstelle von \'-\' angezeigt werden.';
$string['hiddenuntil'] = 'Verborgen bis';
$string['hiddenuntildate'] = 'Verborgen bis: {$a}';
$string['hideadvanced'] = 'Erweiterte Funktionen verbergen';
$string['hideaverages'] = 'Durchschnittswerte verbergen';
$string['hidecalculations'] = 'Berechnungen verbergen';
$string['hidecategory'] = 'Verborgen';
$string['hideeyecons'] = 'Symbole zur Sichtbarkeit (Auge) verbergen';
$string['hidefeedback'] = 'Feedback verbergen';
$string['hideforcedsettings'] = 'Vorgegebene Einstellungen verbergen';
$string['hideforcedsettings_help'] = 'Keine vorgegebenen Einträge im Bewertungsdialog anzeigen.';
$string['hidegroups'] = 'Gruppen verbergen';
$string['hidelocks'] = 'Sperrungen verbergen';
$string['hidenooutcomes'] = 'Lernziele zeigen';
$string['hidequickfeedback'] = 'Schnelles Feedback verbergen';
$string['hideranges'] = 'Stufen verbergen';
$string['hidetotalifhiddenitems'] = 'Gesamtbewertungen verbergen, wenn sie verborgene Elemente enthalten';
$string['hidetotalifhiddenitems_help'] = 'Die Einstellung legt fest ob die Gesamtbewertung angezeigt wird oder durch ein (-) ersetzt wird, wenn es verborgene Einzelbewertungen gibt. Soll sie angezeigt werden kann festgelegt werden, ob die verborgene Bewertung in das angezeigte Gesamtergebnisse einbezogen wird oder nicht.

Wenn verborgene Werte ausgeschlossen werden, ist die sichtbare Gesamtbewertung für Trainer/innen und Teilnehmer/innen jeweils nicht identisch. Trainer/innen sehen immer sichtbare und verborgene Ergebnisse als Gesamtergebnis. Sollen verborgene Werte für Teilnehmer/innen in die Bewertung eingehen, können diese von den Teilnehmer/innen u.U. aus dem Gesamtergebnis errechnet werden.';
$string['hidetotalshowexhiddenitems'] = 'Gesamtbewertungen anzeigen, ausgenommen der verborgenen Elemente';
$string['hidetotalshowinchiddenitems'] = 'Gesamtbewertungen anzeigen, inclusive der verborgenen Elemente';
$string['hideverbose'] = '{$a->category} {$a->itemmodule} {$a->itemname} verbergen';
$string['highgradeascending'] = 'Sortiert nach Höchstbewertung aufsteigend';
$string['highgradedescending'] = 'Sortiert nach Höchstbewertung absteigend';
$string['highgradeletter'] = 'Hoch';
$string['identifier'] = 'Teilnehmer/in identifizieren durch';
$string['idnumbers'] = 'ID-Nummern';
$string['ignore'] = 'Ignorieren';
$string['import'] = 'Import';
$string['importcsv'] = 'CSV importieren';
$string['importcsv_help'] = 'Bewertungen können aus einer CSV-Datei im folgenden Format importiert werden:

* Jede Zeile enthält einen Datensatz
* Jeder Datensatz enthält eine Reihe von Daten, die durch Kommas oder ein anderes Trennzeichen abgetrennt werden
* Die erste Zeile enthält eine Liste der genutzten Feldnamen und definieren die Struktur für die folgenden Datensätze
* Ein Feld mit dem Nutzernamen, der ID-Nummer oder der E-Mail-Adresse ist erforderlich, im die Bewertungen dem Nutzer zuzuordnen.

Eine Datei mit der richtigen Struktur kann eingesehen werden indem man zunächst einige Bewertungen exportiert. Diese Datei kann dann bearbeitet und als CSV-Datei gespeichert werden.';
$string['importcustom'] = 'Import als individuelle Lernziele (nur für diesen Kurs)';
$string['importdata'] = 'Daten';
$string['importdata_help'] = 'Noten können direkt aus einer OpenDocument- oder Excel-Tabelle mit folgendem Format eingefügt werden:

* Mindestens eine Spalte sollte Daten zur Nutzeridentität enthalten - Nutzername, E-Mail-Adresse oder ID-Nummer.
* Andere Spalten sollten Überschriften wie für bestehende Aktivitäten oder Benotungselemente haben.

Eine korrekt formatierte Tabelle erhalten Sie, indem Sie zunächst einige Noten exportieren. Die Tabelle kann bearbeitet und dann wieder gespeichert werden, um weitere Noten hinzuzufügen.

Wählen Sie die Spalten aus, die Sie aus der Tabelle importieren möchten, kopieren Sie sie und fügen Sie sie in dieses Feld ein.';
$string['importerror'] = 'Es ist ein Fehler aufgetreten. Das Script wurde mit falschen Parametern gestartet.';
$string['importfailed'] = 'Import gescheitert. Es wurden keine Daten importiert.';
$string['importfeedback'] = 'Feedback importieren';
$string['importfile'] = 'Importdatei';
$string['importfilemissing'] = 'Es konnte keine Datei importiert werden. Gehen Sie noch einmal zu dem Formular zurück und prüfen Sie, ob die richtige Datei ausgewählt wurde.';
$string['importfrom'] = 'Import von';
$string['importoutcomenofile'] = 'Die hochgeladene Datei ist leer oder fehlerhaft. Prüfen Sie die Datei noch einmal. Das Problem trat in Zeile {$a} auf. Die Meldung erscheint, wenn in den Datenzeilen nicht genau so viele Einträge vorhanden sind wie in der Kopfzeile angelegt wurden, oder ein Fehler in der Kopfzeile vorliegt. Wenn Sie einen Export vornehmen, können Sie darin die richtige Struktur der Kopfzeile erkennen.';
$string['importoutcomes'] = 'Lernziele importieren';
$string['importoutcomes_help'] = 'Lernziele können als csv-Datei importiert werden. Erstellen Sie einen Export von Lernzielen, um sich das Format für den Import anzuschauen. ';
$string['importoutcomesuccess'] = 'Lernziel "{$a->name}" mit ID #{$a->id} importieren';
$string['importplugins'] = 'Import-Plugins';
$string['importpreview'] = 'Importvorschau';
$string['importsettings'] = 'Importeinstellungen';
$string['importskippednomanagescale'] = 'Sie haben nicht das Recht, neue Bewertungsskalen anzulegen. Das Lernziel \'{$a}\' wurde übersprungen, weil es eine neue Bewertungsskala erfordert.';
$string['importskippedoutcome'] = 'Ein Lernziel mit der Kurzbezeichnung "{$a}" besteht in diesem Kontext bereits. Das zu importierende Lernziel wurde übersprungen.';
$string['importstandard'] = 'Import als Standardlernziel';
$string['importsuccess'] = 'Bewertungsimport erfolgreich';
$string['importxml'] = 'XML importieren';
$string['includescalesinaggregation'] = 'Skalen bei Berechnung einbeziehen';
$string['includescalesinaggregation_help'] = 'Sie können festlegen, ob alle Bewertungsskalen in Zahlwerte umgerechnet und bei der Berechnung von Zwischen- und Gesamtnoten in allen Bewertungen der Kurse verwendet werden. ACHTUNG: nach dem Ändern dieser Einstellung werden alle Gesamtnoten neu berechnet.';
$string['incorrectcourseid'] = 'Ungültige Kurs-ID';
$string['incorrectcustomscale'] = '(Fehlerhafte Skalenanpassung - bitte ändern)';
$string['incorrectminmax'] = 'Der unterste Wert muss niedriger als der höchste Wert sein.';
$string['inherit'] = 'Vererben';
$string['intersectioninfo'] = 'Info zu Teilnehmer/Bewertung';
$string['invalidgradeexporteddate'] = 'Das Exportdatum ist ungültig, da es älter als ein Jahr ist, in der Zukunft liegt oder das Format fehlerhaft ist.';
$string['item'] = 'Aspekt';
$string['iteminfo'] = 'Info zum Aspekt';
$string['iteminfo_help'] = 'Raum zum Eingeben allgemeiner Information zu diesem Bewertungsaspekt. Der Text wird an keiner anderen Stelle angezeigt.';
$string['itemname'] = 'Name des Aspekts';
$string['itemnamehelp'] = 'Name des Aspekts, der vom Modul festgelegt wird.';
$string['items'] = 'Aspekte';
$string['itemsedit'] = 'Bewertungsaspekt bearbeiten';
$string['keephigh'] = 'Höchste Bewertungen behalten';
$string['keephigh_help'] = 'Wenn diese Einstellung gesetzt ist, dann werden nur die X höchsten Bewertungen behalten. X ist der benutzte Wert für diese Option.';
$string['keephighestvalues'] = 'Höchste Werte behalten: {$a}';
$string['keymanager'] = 'Schlüsselverwaltung';
$string['lessthanmin'] = 'Die eingegeben Bewertung für {$a->itemname} für {$a->username} ist niedriger als zulässig.';
$string['letter'] = 'Note';
$string['lettergrade'] = 'Notenstufenbewertung';
$string['lettergradenonnumber'] = 'Niedriger und/oder hoher Wert waren nicht-numerisch für';
$string['letterpercentage'] = 'Note (Prozent)';
$string['letterreal'] = 'Note (Punkte)';
$string['letters'] = 'Notenstufen';
$string['linkedactivity'] = 'Verknüpfte Aktivität';
$string['linkedactivity_help'] = 'Diese Einstellung legt die Zuordnung einer Aktivität zu einem Lernziel fest. Dies ist sinnvoll, um Leistungen der Teilnehmer/innen zu messen, die nicht über Bewertung von Aktivitäten erfasst werden sollen.';
$string['linktoactivity'] = 'Link zur Aktivität {$a->name} {$a->title}';
$string['lock'] = 'Sperren';
$string['locked'] = 'Gesperrt';
$string['locked_help'] = 'Wenn diese Option aktiviert ist, können Bewertungen nicht mehr automatisch durch die zugehörige Lernaktivität aktualisiert werden.';
$string['locktime'] = 'Gesperrt ab';
$string['locktimedate'] = 'Gesperrt nach: {$a}';
$string['lockverbose'] = '{$a->category} {$a->itemmodule} {$a->itemname} sperren';
$string['lowest'] = 'Niedrigste';
$string['lowgradeletter'] = 'Niedrig';
$string['manualitem'] = 'Manueller Aspekt';
$string['mapfrom'] = 'Zuordnung von';
$string['mapfrom_help'] = 'Wählen Sie die Spalte in der Tabelle, die Daten zur Identifizierung des Nutzers enthält. Das können sein: Nutzername, Nutzer-ID oder E-Mail-Adresse.';
$string['mappings'] = 'Zuordnung von Bewertungsaspekten';
$string['mappings_help'] = 'Für jede Spalte mit Bewertungen in der Tabelle legen sie die zugehörige Bewertung in Moodle fest.';
$string['mapto'] = 'Zuordnung auf';
$string['mapto_help'] = 'Legen Sie die gleichen Zuordnungsdaten fest wie für \'Zuordnen von\'.';
$string['max'] = 'Höchste';
$string['maxgrade'] = 'Beste Bewertung';
$string['meanall'] = 'Alle Bewertungen';
$string['meangraded'] = 'Leere Bewertungen ignorieren';
$string['meanselection'] = 'Ausgewählte Bewertungen für Spalte Durchschnittswerte';
$string['meanselection_help'] = 'Diese Einstellung legt fest, ob Zellen ohne Bewertung ignoriert oder als 0 gewertet in den Durchschnitt für jede Kategorie oder Bewertungsaspekt einfließen sollen.';
$string['median'] = 'Median';
$string['min'] = 'Niedrigste';
$string['minimum_show'] = 'Minimale Bewertung anzeigen';
$string['minimum_show_help'] = 'Der Mindestwert wird bei der Berechnung von Bewertungen und Gewichtungen verwandt. Wenn er nicht angezeigt wird, ist der Wert \'0\' und kann nicht bearbeitet werden.';
$string['minmaxtouse'] = 'Benutzte min. und max. Bewertungen in der Berechnung';
$string['minmaxtouse_desc'] = 'Diese Einstellung legt fest ob die niedrigsten und höchsten Bewertungen zum Zeitpunkt der Vergabe der Bewertung oder zum Zeitpunkt der Anzeige im Bewertungsbereich verwendet wird. Die Einstellung sollte vorgenommen wenn der Server wenige belastet ist, da die vollständige Neuberechnung aller Bewertungen zu einer hohen Serverlast führen kann.';
$string['minmaxtouse_help'] = 'Diese Einstellung legt fest ob die niedrigsten und höchsten Bewertungen zum Zeitpunkt der Vergabe der Bewertung oder die niedrigsten und höchsten Bewertungen zum Zeitpunkt der Berechnung für die Anzeige in den Bewertungen verwendet werden sollen.';
$string['minmaxupgradedgrades'] = 'Hinweis: Einige Bewertungen wurden geändert, um Inkonsistenzen im Bewertungsbereich zu korrigieren. Diese sind aufgetreten durch Änderungen der Einstellung zu den niedrigsten und höchsten Bewertungen, die für die angezeigte Bewertung berücksichtigt werden sollen.';
$string['minmaxupgradefixbutton'] = 'Widersprüchlichkeit beheben';
$string['minmaxupgradewarning'] = 'Hinweis: Die Einstellung zur Berechnung der niedrigsten und höchsten Bewertung im Bewertungsbereich wurde geändert. Dadurch ergeben sich Bewertungen der Berechnungen, die nicht mehr korrekt sind. Sie können dies durch Anklicken des Buttons unten korrigieren.';
$string['missingitemtypeoreid'] = 'Der Array-Schlüssel (itemtype oder eid) des 2. Parameters fehlt grade_edit_tree_column_select::get_item_cell($item, $params)';
$string['missingscale'] = 'Skala auswählen';
$string['mode'] = 'Modus';
$string['modgrade'] = 'Bewertung';
$string['modgrade_help'] = 'Wählen Sie die Art der Bewertung aus, die für diese Aktivität verwendet wird. Wenn \'Skala\' ausgewählt ist, können Sie die Skala aus dem Dropdown-Menü auswählen. Wenn die Punktbewertung ausgewählt ist, können Sie die maximale Note eingeben, die für diese Aktivität verfügbar ist.';
$string['modgradecantchangegradetype'] = 'Sie können den Typ nicht verändern, wenn bereits Bewertungen für dieses Element existieren.';
$string['modgradecantchangegradetypemsg'] = 'Einige Bewertungen wurden bereits vergeben, so dass der Bewertungstyp nicht mehr verändert werden kann. Wenn Sie den Maximalwert ändern möchten, müssen Sie zuerst auswählen, ob vorhandene Bewertungen neu vergeben werden sollen oder nicht.';
$string['modgradecantchangegradetyporscalemsg'] = 'Einige Bewertungen wurden bereits vergeben, so dass Bewertungstyp und -skala nicht mehr verändert werden können.';
$string['modgradecantchangeratingmaxgrade'] = 'Sie können den Maximalwert nicht verändern, wenn bereits Bewertungen für dieses Element existieren.';
$string['modgradecantchangescale'] = 'Sie können die Skalierung nicht verändern, wenn bereits Bewertungen für dieses Element existieren.';
$string['modgradecategorycantchangegradetypemsg'] = 'Diese Kategorie ist mit Bewertungen verbunden, die überschrieben wurden. Der Bewertungstyp kann nicht geändert werden, weil einige Bewertungen bereits vorgenommen wurden. Wenn Sie die Maximalbewertung ändern wollen, müssen Sie zunächst entscheiden ob bereits existierende Bewertungen geändert werden sollen.';
$string['modgradecategorycantchangegradetyporscalemsg'] = 'Diese Kategorie ist mit Bewertungen verbunden, die überschrieben wurden. Der Bewertungstyp kann nicht geändert werden, weil einige Bewertungen bereits vorgenommen wurden.';
$string['modgradecategoryrescalegrades'] = 'Überschriebene Bewertungen neu skalieren';
$string['modgradecategoryrescalegrades_help'] = 'Wenn Sie die Maximalbewertung eines Items in den Bewertungen ändern, müssen Sie zunächst festlegen, ob bereits existierende prozentuale Bewertungen ebenfalls geändert werden sollen.

Wenn Sie "Ja" auswählen, werden bereits existierende, überschriebene Bewertungen neu skaliert und der Prozenanteil bleibt gleich.

Beispiel für Auswahl von "Ja":  Bei der Änderung der Maximalbewertung eines Items von 10 auf 20 wird die Bewertung von 6/10 (60%) neu skaliert auf 12/60 (60%).
Bei der Auswahl von "Nein" bleibt die Bewertung unverändert und muss manuell angepasst werden, um korrekte Scores sicherzustellen.';
$string['modgradedonotmodify'] = 'Existierende Bewertungen nicht ändern';
$string['modgradeerrorbadpoint'] = 'Ungültiger Bewertungswert. Der Wert muss ganzzahlig zwischen 1 und {$a} sein.';
$string['modgradeerrorbadscale'] = 'Falsche Skala ausgewählt. Bite wählen Sie eine der vorhandenen Skalen aus.';
$string['modgrademaxgrade'] = 'Maximalpunkte';
$string['modgraderescalegrades'] = 'Existierender Bewertungen neuskalieren';
$string['modgraderescalegrades_help'] = 'Wenn Sie die Maximalbewertung eines Items in den Bewertungen ändern, müssen Sie zunächst festlegen, ob bereits existierende prozentuale Bewertungen ebenfalls geändert werden sollen.

Wenn Sie "Ja" auswählen, werden bereits existierende Bewertungen neu skaliert und der Prozenanteil bleibt gleich.

Beispiel für Auswahl von "Ja":  Bei der Änderung der Maximalbewertung eines Items von 10 auf 20 wird die Bewertung von 6/10 (60%) neu skaliert auf 12/60 (60%).
Bei der Auswahl von "Nein" würde die Bewertung von 6/10 (60%) geändert zu 6/20 (30%) und muss manuell angepasst werden, um korrekte Scores sicherzustellen';
$string['modgradetype'] = 'Typ';
$string['modgradetypenone'] = 'Kein';
$string['modgradetypepoint'] = 'Punkt';
$string['modgradetypescale'] = 'Skala';
$string['morethanmax'] = 'Die eingegeben Bewertung für {$a->itemname} für {$a->username} ist höher als zulässig.';
$string['moveselectedto'] = 'Ausgewählte Aspekte verschieben nach:';
$string['movingelement'] = '{$a} verschieben';
$string['multfactor'] = 'Multiplikator';
$string['multfactor_help'] = 'Der Multiplikator ist der Faktor, mit dem alle Bewertungen dieses Bewertungsaspekts multipliziert werden. Beispiel: der Multiplikator ist 2, die maximale Bewertung ist 100; dann werden alle Bewertungen kleiner als 50 mit 2 multipliziert, und alle anderen Bewertungen ab 50 werden auf die maximale Bewertung 100 gesetzt.';
$string['multfactorvalue'] = 'Multiplikator für {$a}';
$string['mustchooserescaleyesorno'] = 'Sie müssen auswählen, ob vorhandene Bewertungen neu vergeben werden sollen oder nicht.';
$string['mygrades'] = 'Meine Bewertungen';
$string['mygrades_desc'] = 'Die Einstellung fügt den Link zu einer externen Bewertungsverwaltung zum  Nutzermenü hinzu.';
$string['mypreferences'] = 'Meine Einstellungen';
$string['myreportpreferences'] = 'Meine Einstellungen für Berichte';
$string['navmethod'] = 'Navigationsmethode';
$string['neverdeletehistory'] = 'Verlauf niemals löschen';
$string['newcategory'] = 'Neue Kategorie';
$string['newitem'] = 'Neuer Bewertungsaspekt';
$string['newoutcomeitem'] = 'Neuer Lernzielaspekt';
$string['no'] = 'Nein';
$string['nocategories'] = 'Kategorien konnten nicht angelegt oder nicht gefunden werden.';
$string['nocategoryname'] = 'Es wurde kein Kategorientitel angegeben';
$string['nocategoryview'] = 'Keine Kategorie zum Anzeigen für';
$string['nocourses'] = 'Bisher sind keine Kurse vorhanden';
$string['noforce'] = 'Nicht festlegen';
$string['nogradeletters'] = 'Keine Notenstufen definiert';
$string['nogradesreturned'] = 'Keine Bewertung zum Anzeigen vorhanden';
$string['noidnumber'] = 'Keine ID-Nummer';
$string['nolettergrade'] = 'Keine Note für';
$string['nomode'] = 'unbekannt';
$string['nonnumericweight'] = 'Nicht-numerischen Wert erhalten für';
$string['nonunlockableverbose'] = 'Die Bewertung kann nicht entsperrt werden bevor {$a->itemname} entsperrt wurde.';
$string['nonweightedpct'] = 'nicht gewichtet %';
$string['nooutcome'] = 'Kein Lernziel';
$string['nooutcomes'] = 'Einzelne Lernziel-Aspekte müssen zu einem Lernziel eines Kurses verlinkt werden, aber in diesem Kurs gibt es keine Lernziele. Möchten Sie eines hinzufügen?';
$string['nopermissiontoresetweights'] = 'Keine Berechtigung zum Zurücksetzen der Gewichtung';
$string['nopublish'] = 'Nicht veröffentlichen';
$string['noreports'] = 'Sie sind in keinem Kurs als Teilnehmer/in oder als Trainer/in eingeschrieben.';
$string['norolesdefined'] = 'Es wurden keine Rollen definiert unter Website Administration > Bewertungen > Grundeinstellungen > Bewertete Rollen';
$string['noscales'] = 'Lernziele müssen zu einer Bewertungsskala eines Kurses oder einer globalen Skala zugewiesen werden, aber es existiert keine. Möchten Sie eine hinzufügen?';
$string['noselectedcategories'] = 'Keine Kategorie wurde ausgewählt.';
$string['noselecteditems'] = 'keine Werte ausgewählt.';
$string['notenrolled'] = 'Sie sind in keinem Kurs eingeschrieben.';
$string['notteachererror'] = 'Diese Funktionen können nur Trainer/innen nutzen';
$string['nousersloaded'] = 'Es wurden keine Nutzer importiert.';
$string['nouserstograde'] = 'Keine Nutzer/innen zu bewerten';
$string['numberofgrades'] = 'Anzahl der Bewertungsstufen';
$string['onascaleof'] = 'auf einer Skala von {$a->grademin} bis {$a->grademax}';
$string['operations'] = 'Vorgänge';
$string['options'] = 'Einstellungen';
$string['others'] = 'Andere';
$string['outcome'] = 'Lernziel';
$string['outcome_help'] = 'Diese Einstellung legt das Lernziel fest, das dieser Bewertungsaspekt in den Bewertungen repräsentieren soll.';
$string['outcomeassigntocourse'] = 'Ein anderes Lernziel diesem Kurs zuweisen';
$string['outcomecategory'] = 'Lernziele in der Kategorie erstellen';
$string['outcomecategorynew'] = 'Neue Kategorie';
$string['outcomeconfirmdelete'] = 'Möchten Sie das Lernziel \'{$a}\' wirklich löschen?';
$string['outcomecreate'] = 'Neues Lernziel hinzufügen';
$string['outcomedelete'] = 'Lernziel löschen';
$string['outcomefullname'] = 'Vollständiger Name';
$string['outcomeitem'] = 'Lernziel';
$string['outcomeitemsedit'] = 'Lernziel bearbeiten';
$string['outcomereport'] = 'Übersicht über die Lernziele';
$string['outcomes'] = 'Lernziele';
$string['outcomescourse'] = 'Lernziele werden im Kurs benutzt';
$string['outcomescoursecustom'] = 'Anpassung benutzt (nicht entfernbar)';
$string['outcomescoursenotused'] = 'Voreinstellung nicht benutzt';
$string['outcomescourseused'] = 'Voreinstellung benutzt (nicht entfernbar)';
$string['outcomescustom'] = 'Angepasste Lernziele';
$string['outcomeshortname'] = 'Kurzbezeichnung';
$string['outcomesstandard'] = 'Standard-Lernziele';
$string['outcomesstandardavailable'] = 'Verfügbare Standard-Lernziele';
$string['outcomestandard'] = 'Standard-Lernziel';
$string['outcomestandard_help'] = 'Ein Standard-Lernziel steht in jedem Kurs des gesamten Systems zur Verfügung.';
$string['overallaverage'] = 'Gesamtdurchschnitt';
$string['overridden'] = 'Überschrieben';
$string['overridden_help'] = 'Wenn diese Option aktiviert ist, kann die Bewertung nicht mehr innerhalb der zugehörigen Aktivität geändert werden.

Wenn eine Bewertung in der Bewerterübersicht bearbeitet wird, wird die Option Überschrieben automatisch angekreuzt. Sie kann jedoch deaktiviert werden, um eine Änderung der Bewertung über die zugehörige Aktivität zu ermöglichen.';
$string['overriddennotice'] = 'Die endgültige Bewertung zu dieser Aktivität wurde manuell bearbeitet.';
$string['overridecat'] = 'Zulassen, dass Kategoriebewertungen manuell überschrieben werden können.';
$string['overridecat_help'] = 'Das Deaktivieren dieser Einstellung verhindert, dass Nutzer Kategoriebewertungen überschreiben können.';
$string['overridesitedefaultgradedisplaytype'] = 'Voreinstellungen überschreiben';
$string['overridesitedefaultgradedisplaytype_help'] = 'Wenn diese Option aktiviert ist, können Notenstufen überschrieben werden, anstatt die systemweiten Voreinstellungen zu verwenden.';
$string['overrideweightofa'] = 'Gewichtung von {$a} überschreiben';
$string['parentcategory'] = 'Übergeordnete Kategorie';
$string['pass'] = 'Erfolgreich';
$string['pctoftotalgrade'] = '% der Gesamtbewertung';
$string['percent'] = 'Prozent';
$string['percentage'] = 'Prozentsatz';
$string['percentageletter'] = 'Prozent (Note)';
$string['percentagereal'] = 'Prozent (Punkte)';
$string['percentascending'] = '% aufsteigend sortieren';
$string['percentdescending'] = '% absteigend sortieren';
$string['percentshort'] = '%';
$string['plusfactor'] = 'Offset';
$string['plusfactor_help'] = 'Der Offset ist ein Zuschlag, der zu jeder Bewertung addiert wird, nachdem der Multiplikator angewendet wurde (dieser Wert kann auch negativ sein).';
$string['plusfactorvalue'] = 'Offset für {$a}';
$string['points'] = 'Punkte';
$string['pointsascending'] = 'sortieren, Punkte aufsteigend';
$string['pointsdescending'] = 'Sortieren, Punkte absteigend';
$string['positionfirst'] = 'Erste';
$string['positionlast'] = 'Letzte';
$string['preferences'] = 'Grundeinstellungen';
$string['prefgeneral'] = 'Allgemeines';
$string['prefletters'] = 'Notenstufen und -grenzen';
$string['prefrows'] = 'Spezielle Zeilen';
$string['prefshow'] = 'Schalter zeigen/verbergen';
$string['previewrows'] = 'Zeilenvorschau';
$string['privacy:metadata:categorieshistory'] = 'Aufzeichnung früherer Versionen von Bewertungskategorien';
$string['privacy:metadata:filepurpose'] = 'Feedback-Dateien, die in den Bewertungen einer Person gespeichert sind';
$string['privacy:metadata:grade_import_newitem'] = 'Temporäre Tabelle zur Speicherung neuer grade_item Namen des Bewertungsmports';
$string['privacy:metadata:grade_import_newitem:importcode'] = 'Einzigartiger Batch-Code zur Identifikation eines Batchimports';
$string['privacy:metadata:grade_import_newitem:importer'] = 'Nutzer, der Daten importiert';
$string['privacy:metadata:grade_import_newitem:itemname'] = 'Neuer Bewertungsitemname';
$string['privacy:metadata:grade_import_values'] = 'Temporäre Tabelle zum Import von Bewertungen';
$string['privacy:metadata:grade_import_values:feedback'] = 'Bewertungsfeedback';
$string['privacy:metadata:grade_import_values:finalgrade'] = 'Rohwert der Bewertung';
$string['privacy:metadata:grade_import_values:importcode'] = 'Einzigartiger Batch-Code zur Identifikation eines Batchimports';
$string['privacy:metadata:grade_import_values:importer'] = 'Nutzer, der Daten importiert';
$string['privacy:metadata:grade_import_values:importonlyfeedback'] = 'Kennzeichen wenn nur Feedback importiert wurde';
$string['privacy:metadata:grade_import_values:userid'] = 'Nutzer, dessen Bewertung importiert wurde';
$string['privacy:metadata:grades'] = 'Aufzeichnung von Bewertungen';
$string['privacy:metadata:grades:aggregationstatus'] = 'Aggregationsstatus';
$string['privacy:metadata:grades:aggregationweight'] = 'Gewichtung in Aggregationen';
$string['privacy:metadata:grades:feedback'] = 'Feedback';
$string['privacy:metadata:grades:finalgrade'] = 'Bewertung';
$string['privacy:metadata:grades:information'] = 'Zusätzliche Info zur Bewertung';
$string['privacy:metadata:grades:timemodified'] = 'Zeitpunkt der letzten Änderung der Bewertung';
$string['privacy:metadata:grades:userid'] = 'ID des bewerteten Nutzers';
$string['privacy:metadata:grades:usermodified'] = 'ID des Nutzers, der Datensatz zuletzt bearbeitet hat';
$string['privacy:metadata:gradeshistory'] = 'Aufzeichnung früherer Bewertungen';
$string['privacy:metadata:history:loggeduser'] = 'ID des Nutzers, der eingeloggt war als Versionierung erfolgte';
$string['privacy:metadata:history:timemodified'] = 'Zeitpunkt der Bewertungs-Versionierung';
$string['privacy:metadata:itemshistory'] = 'Aufzeichnung früherer Versionen des Bewertungsitems';
$string['privacy:metadata:outcomes'] = 'Aufzeichnung der Lernziele';
$string['privacy:metadata:outcomes:timemodified'] = 'Zeitpunkt an dem Datensatz verändert wurde';
$string['privacy:metadata:outcomes:usermodified'] = 'Nutzer der den Datensatz zuletzt verändert hat';
$string['privacy:metadata:outcomeshistory'] = 'Eine Aufzeichnung früherer Versionen des Lernziels';
$string['privacy:metadata:scale'] = 'Aufzeichnung von Skalen';
$string['privacy:metadata:scale:timemodified'] = 'Zeitpunkt an dem  der Datensatz zuletzt verändert wurde';
$string['privacy:metadata:scale:userid'] = 'Nutzer, der Datensatz zuletzt bearbeitet hat';
$string['privacy:metadata:scalehistory'] = 'Aufzeichnung früherer Versionen von Skalen';
$string['privacy:path:relatedtome'] = 'Mit zugeordnet';
$string['privacy:request:historyactiondelete'] = 'Löschen';
$string['privacy:request:historyactioninsert'] = 'Einfügen';
$string['privacy:request:historyactionupdate'] = 'Update';
$string['privacy:request:unknowndeletedgradeitem'] = 'Unbekannt (Bewertungsitem wurde gelöscht)';
$string['profilereport'] = 'Bericht zum Nutzerprofil';
$string['profilereport_help'] = 'Der Bewertungsbericht wird auf der Seite des Nutzerprofils angezeigt.';
$string['publishing'] = 'Veröffentlichen';
$string['publishingoptions'] = 'Optionen für die Veröffentlichung von Bewertungen';
$string['quickfeedback'] = 'Schnelles Feedback';
$string['quickgrading'] = 'Schnelle Bewertung';
$string['quickgrading_help'] = 'Wenn diese Option aktiviert ist, erscheint bei eingeschalteter Bearbeitung ein Eingabefeld mit einem gestrichelten Rand in jeder Zelle. Damit können mehrere Bewertungen auf einer Seite schnell eingegeben werden. Mit einem Klick auf den Aktualisierungsbutton werden alle Bewertungen auf einmal abgespeichert.

Beachten Sie, dass bei der Eingabe einer Bewertung in der Bewerterübersicht ein Übersteuerungsflag gesetzt wird, so dass die Bewertung nicht mehr innerhalb der zugehörigen Aktivität geändert werden kann.';
$string['range'] = 'Bereich';
$string['rangedecimals'] = 'Dezimalstellen für Bewertungsbereiche';
$string['rangedecimals_help'] = 'Zahl der Dezimalstellen, um die Spannbreite der Ergebnisse anzuzeigen';
$string['rangesdecimalpoints'] = 'Nachkommastellen in Bewertungsbereichen';
$string['rangesdecimalpoints_help'] = 'Diese Einstellung legt die Anzahl der angezeigten Dezimalstellen fest, die für jeden Bewertungsbereich angezeigt werden sollen, oder ob die übergreifende Dezimalstelleneinstellung der Kategorie oder des Bewertungselements verwendet wird (Vererben).
Die Einstellung kann für jede einzelne Bewertungsspalte überschrieben werden.';
$string['rangesdisplaytype'] = 'Bereichsanzeige';
$string['rangesdisplaytype_help'] = 'Diese Einstellung legt fest, ob der Bewertungsbereich als Punktwert, Prozent oder Buchstabe angezeigt wird, oder der Anzeigetyp für die Kategorie oder den Bewertungsaspekt verwendet wird (Vererben).';
$string['rank'] = 'Rang';
$string['rawpct'] = 'Rohwert %';
$string['real'] = 'Punkte';
$string['realletter'] = 'Punkte (Noten)';
$string['realpercentage'] = 'Punkte (Prozent)';
$string['recalculatinggrades'] = 'Bewertungen neu berechnen...';
$string['recovergradesdefault'] = 'Bewertungen wiederherstellen';
$string['recovergradesdefault_help'] = 'Alte Bewertungen werden wiederhergestellt, wenn Nutzer/innen erneut in einen Kurs eingeschrieben werden.';
$string['refreshpreview'] = 'Vorschau aktualisieren';
$string['regradeanyway'] = 'Auf jeden Fall neu bewerten';
$string['removeallcoursegrades'] = 'Alle Bewertungen löschen';
$string['removeallcoursegrades_help'] = 'Wenn diese Option aktiviert ist, werden alle Bewertungen und Einträge gelöscht, die manuell zum Notenbuch hinzugefügt wurden. Ebenfalls gelöscht werden Bewertungen und Einträge, die überschrieben, ausgeschlossen, verborgen und geblockt wurden. Es bleiben nur solche Einträge stehen, die direkt aus Aktivitäten übermittelt wurden.';
$string['removeallcourseitems'] = 'Alle Aspekte und Kategorien löschen';
$string['removeallcourseitems_help'] = 'Wenn Sie diese Option anklicken, werden alle Kategorien und Bewertungsaspekte, die den Bewertungen manuell hinzugefügt wurden, gelöscht. Ebenfalls gelöscht werden Bewertungen und Einträge, die überschrieben, ausgeschlossen, verborgen und geblockt wurden. Es bleiben nur solche Einträge stehen, die direkt aus Aktivitäten übermittelt wurden.';
$string['report'] = 'Bericht';
$string['reportdefault'] = 'Voreinstellung für Bericht ({$a})';
$string['reportplugins'] = 'Plugins für Berichte';
$string['reportsettings'] = 'Einstellungen';
$string['reprintheaders'] = 'Kopfzeilen wiederholen';
$string['resetweights'] = 'Gewichtungen von {$a->itemname} zurücksetzen';
$string['resetweightsshort'] = 'Gewichtungen zurücksetzen';
$string['respectingcurrentdata'] = 'Die aktuelle Konfiguration wird nicht verändert.';
$string['rowpreviewnum'] = 'Zeilenvorschau';
$string['rowpreviewnum_help'] = 'Die Daten können vor dem Import in einer Vorschau angezeigt werden. Diese Option legt fest, wie viele Zeilen in der Vorschau dargestellt werden.';
$string['savechanges'] = 'Änderungen speichern';
$string['savepreferences'] = 'Grundeinstellungen speichern';
$string['scaleconfirmdelete'] = 'Möchten Sie die Skala \'{$a}\' wirklich löschen?';
$string['scaledpct'] = 'Berechnete %';
$string['seeallcoursegrades'] = 'Alle Kursbewertungen anzeigen';
$string['select'] = '{$a} auswählen';
$string['selectalloroneuser'] = 'Alle oder einen auswählen';
$string['selectauser'] = 'Nutzer/in wählen';
$string['selectdestination'] = 'Ziel für {$a} auswählen';
$string['separator'] = 'Trennzeichen';
$string['separator_help'] = 'Wählen Sie den Trenner für die CSV-Datei aus (Standard: Semikolon).';
$string['sepcolon'] = 'Doppelpunkt';
$string['sepcomma'] = 'Komma';
$string['sepsemicolon'] = 'Semikolon';
$string['septab'] = 'Tab';
$string['setcategories'] = 'Kategorien einrichten';
$string['setcategorieserror'] = 'Sie müssen Kategorien anlegen, bevor diese gewichtet werden können.';
$string['setgradeletters'] = 'Notenstufen definieren';
$string['setpreferences'] = 'Grundeinstellungen setzen';
$string['setting'] = 'Einstellung';
$string['settings'] = 'Einstellungen';
$string['setweights'] = 'Kategorien gewichten';
$string['showactivityicons'] = 'Aktivitätssymbole zeigen';
$string['showactivityicons_help'] = 'Wenn die Option aktiviert ist, werden Aktivitätssymbole neben den Aktivitäten gezeigt.';
$string['showallhidden'] = 'Verborgene anzeigen';
$string['showallstudents'] = 'Alle Teilnehmer/innen anzeigen';
$string['showanalysisicon'] = 'Bewertungssymbole zeigen';
$string['showanalysisicon_desc'] = 'Soll das Symbol zur Bewertungsanalyse in der Regel angezeigt werden? Wenn die Aktivität die Funktion unterstützt wird ein Link mit einer detaillierten Erläuterung der Bewertung angezeigt.';
$string['showanalysisicon_help'] = 'Wenn die Aktivität die Funktion unterstützt wird ein Link mit einer detaillierten Erläuterung der Bewertung angezeigt.';
$string['showaverage'] = 'Mittelwert anzeigen';
$string['showaverage_help'] = 'Spalte mit Durchschnittswertung anzeigen?

Beachten Sie, dass die Teilnehmer/innen fremde Bewertungen abschätzen können, wenn der Durchschnitt aus einer kleinen Anzahl berechnet wird. Aus Performancegründen ist der Durchschnitt ungenau, wenn er von versteckten Elementen abhängig ist.';
$string['showaverages'] = 'Spaltendurchschnitt anzeigen';
$string['showaverages_help'] = 'Wenn die Option aktiviert ist, wird die Bewerterübersicht eine zusätzliche Zeile aufweisen, die den Durchschnitt für jede Kategorie und jeden Bewertungsaspekt enthält.';
$string['showcalculations'] = 'Berechnungen anzeigen';
$string['showcalculations_help'] = 'Wenn diese Option aktiviert ist, wird bei eingeschalteter Bearbeitung für jeden Bewertungsaspekt ein Taschenrechnersymbol angezeigt. Damit ist erkennbar, dass der Bewertungsaspekt berechnet werden kann oder berechnet wurde.';
$string['showcontributiontocoursetotal'] = 'Beiträge zum gesamten Kurs anzeigen';
$string['showcontributiontocoursetotal_help'] = 'Ob eine Spalte mit Prozentangaben angezeigt wird, die verdeutlicht in welchem Maße eine Bewertung in den Gesamtwert der Note einfließt (nachdem die Gewichtung erfolgt ist).';
$string['showeyecons'] = 'Symbole zeigen';
$string['showeyecons_help'] = 'Wenn diese Option aktiviert ist, wird bei eingeschalteter Bearbeitung für jeden Bewertungsaspekt ein Symbol zur Sichtbarkeit (Auge) neben jeder Bewertung angezeigt, um die Sichtbarkeit für Teilnehmer/innen zu steuern.';
$string['showfeedback'] = 'Feedback anzeigen';
$string['showfeedback_help'] = 'Spalte für Feedback anzeigen?';
$string['showgrade'] = 'Bewertung anzeigen';
$string['showgrade_help'] = 'Spalte für Bewertung anzeigen?';
$string['showgroups'] = 'Gruppen anzeigen';
$string['showhiddenitems'] = 'Verborgene Werte anzeigen';
$string['showhiddenitems_help'] = 'Diese Einstellung legt fest, ob verborgene Elemente angezeigt werden.

* Verborgene anzeigen - Verborgene Bewertungselemente werden grau gezeigt, wobei die Bewertung unsichtbar bleibt
* Nur verborgen bis - Bewertungselemente mit einem Zeitpunkt "Verborgen bis" werden grau gezeigt, wobei die Bewertung  unsichtbar ist. Ab dem gesetzten Zeitpunkt wird das Element vollständig angezeigt
* Nicht anzeigen - Bewertungselemente sind vollständig unsichtbar';
$string['showhiddenuntilonly'] = 'Nur verborgen bis';
$string['showingaggregatesonly'] = 'Nur Gesamtwerte werden angezeigt';
$string['showingfullmode'] = 'Vollständige Ansicht wird angezeigt';
$string['showinggradesonly'] = 'Bewertungen werden angezeigt';
$string['showlettergrade'] = 'Notenbewertung anzeigen';
$string['showlettergrade_help'] = 'Spalte für Notenbewertung anzeigen?';
$string['showlocks'] = 'Sperrungen anzeigen';
$string['showlocks_help'] = 'Wenn diese Option aktiviert ist, wird bei eingeschalteter Bearbeitung für jeden Bewertungsaspekt ein Symbol zum Sperren bzw. Freigeben neben jeder Bewertung angezeigt, um zu steuern, ob die Bewertung automatisch durch die entsprechende Aktivität aktualisiert werden kann.';
$string['shownohidden'] = 'Nicht anzeigen';
$string['shownooutcomes'] = 'Lernziele verbergen';
$string['shownumberofgrades'] = 'Anzahl in Durchschnittsbewertungen anzeigen';
$string['shownumberofgrades_help'] = 'Wenn diese Option aktiviert ist, wird die Anzahl der erfassten Bewertungen in Klammern neben dem Durchschnittswert angezeigt. Beispiel: 45 (34)';
$string['showonlyactiveenrol'] = 'Nur aktive Einschreibungen anzeigen';
$string['showonlyactiveenrol_help'] = 'Diese Einstellung legt fest, ob nur aktiv eingeschriebene Nutzer/innen im Bewertungsbericht angezeigt werden. Wenn die Einstellung aktiviert ist, werden gesperrte Nutzer/innen nicht angezeigt.';
$string['showpercentage'] = 'Prozentwerte anzeigen';
$string['showpercentage_help'] = 'Prozentwerte für jede Bewertung anzeigen?';
$string['showquickfeedback'] = 'Schnelles Feedback anzeigen';
$string['showquickfeedback_help'] = 'Wenn diese Option aktiviert ist, erscheint bei eingeschalteter Bearbeitung ein Eingabefeld mit einem gestrichelten Rand in jeder Zelle. Damit können mehrere Feedbacks auf einer Seite schnell eingegeben werden. Mit einem Klick auf den Aktualisierungsbutton werden alle Feedbacks auf einmal abgespeichert.

Beachten Sie, dass bei der Eingabe von Feedback in der Bewerterübersicht ein Übersteuerungsflag gesetzt wird, so dass das Feedback nicht mehr innerhalb der zugehörigen Aktivität geändert werden kann.';
$string['showrange'] = 'Spannbreite anzeigen';
$string['showrange_help'] = 'Spalte für die Spannbreite der Ergebnisse anzeigen?';
$string['showranges'] = 'Stufen anzeigen';
$string['showranges_help'] = 'Wenn diese Option aktiviert ist, wird die Bewerterübersicht eine zusätzliche Zeile aufweisen, die den Bewertungsbereich für jede Kategorie und jeden Bewertungsaspekt enthält.';
$string['showrank'] = 'Rang anzeigen';
$string['showrank_help'] = 'Rangposition für jeden Aspekt anzeigen?';
$string['showuserimage'] = 'Nutzerbilder anzeigen';
$string['showuserimage_help'] = 'Nutzerbild neben dem Namen in der Bewerterübersicht anzeigen';
$string['showverbose'] = '{$a->category} {$a->itemmodule} {$a->itemname} anzeigen';
$string['showweight'] = 'Gewichtungen anzeigen';
$string['showweight_help'] = 'Spalte für die Bewertungsgewichtung anzeigen?';
$string['simpleview'] = 'Einzelansicht';
$string['singleview'] = 'Einzelansicht für {$a}';
$string['sitewide'] = 'Für die ganze Website';
$string['sort'] = 'sortieren';
$string['sortasc'] = 'Aufsteigend sortieren';
$string['sortbyfirstname'] = 'Sortieren nach Vorname';
$string['sortbylastname'] = 'Sortieren nach Nachname';
$string['sortdesc'] = 'Absteigend sortieren';
$string['standarddeviation'] = 'Standardabweichung';
$string['stats'] = 'Statistik';
$string['statslink'] = 'Statistik';
$string['student'] = 'Teilnehmer/in';
$string['studentsperpage'] = 'Teilnehmer/innen pro Seite';
$string['studentsperpage_help'] = 'Diese Einstellung legt die Anzahl der Teilnehmer/innen fest, die pro Seite in der Bewerterübersicht gezeigt werden.';
$string['studentsperpagereduced'] = 'Verringert die Höchstzahl der Teilnehmenden pro Seite von {$a->originalstudentsperpage} auf {$a->studentsperpage}. Die PHP Einstellung max_input_vars sollte auf  {$a->maxinputvars} gesetzt werden.';
$string['subcategory'] = 'Kategorie normal';
$string['submissions'] = 'Einträge';
$string['submittedon'] = 'Erstellt: {$a}';
$string['sumofgradesupgradedgrades'] = 'Hinweis: Die Agregationsmethode "Summe der Bewertungen" wurde in "Natürlich" umbenannt. Da in diesem Kurse bisher "Summe der Bewertungen" verwandt wurde, empfehlen wir, dass Sie die Änderungen im Bereich Bewertungen genauer anschauen.';
$string['switchtofullview'] = 'Zur vollständigen Ansicht wechseln';
$string['switchtosimpleview'] = 'Zur vereinfachten Ansicht wechseln';
$string['tabs'] = 'Registerkarten';
$string['topcategory'] = 'Kategorie super';
$string['total'] = 'Gesamt';
$string['totalweight100'] = 'Summe der Gewichtungen ist 100';
$string['totalweightnot100'] = 'Summe der Gewichtungen ist nicht 100';
$string['turnfeedbackoff'] = 'Feedback einschalten';
$string['turnfeedbackon'] = 'Feedback ausschalten';
$string['typenone'] = 'Keines';
$string['typescale'] = 'Skala';
$string['typescale_help'] = 'Diese Einstellung legt die Bewertungsskala fest, wenn eine Skalenbewertung verwendet wird. Die Bewertungsskala für eine Lernaktivität wird auf der Einstellungsseite der jeweiligen Lernaktivität vorgenommen.';
$string['typetext'] = 'Text';
$string['typevalue'] = 'Wert';
$string['uncategorised'] = 'Nicht kategorisiert';
$string['unchangedgrade'] = 'Unveränderte Bewertungen';
$string['unenrolledusersinimport'] = 'Beim Import werden Bewertungen der folgenden Teilnehmer/innen importiert, die zur Zeit nicht im Kurs registriert sind: {$a}';
$string['unlimitedgrades'] = 'Offene Bewertung';
$string['unlimitedgrades_help'] = 'Zumeist sind Bewertungen durch Minimal- und Maximalwert einer Bewertungsstufe definiert. Falls diese Option aktiviert ist, entfällt die Einschränkung und erlaubt auch das direkte Eintragen von Bewertungen über 100%.';
$string['unlock'] = 'Freigeben';
$string['unlockverbose'] = '{$a->category} {$a->itemmodule} {$a->itemname} entsperren';
$string['unused'] = 'Unbenutzt';
$string['updatedgradesonly'] = 'Nur neue oder aktualisierte Bewertungen exportieren';
$string['upgradedgradeshidemessage'] = 'Mitteilung verwerfen';
$string['upgradedminmaxrevertmessage'] = 'Änderungen rückgängig machen';
$string['uploadgrades'] = 'Bewertungen hochladen';
$string['useadvanced'] = 'Erweiterte Funktionen nutzen';
$string['usedcourses'] = 'Benutzte Kurse';
$string['usedgradeitem'] = 'Benutzte Bewertungsaspekte';
$string['usenooutcome'] = 'Keine Lernziele nutzen';
$string['usenoscale'] = 'Keine Skala nutzen';
$string['usepercent'] = 'Prozentwerte verwenden';
$string['user'] = 'Nutzer/in';
$string['userenrolmentsuspended'] = 'Nutzereinschreibung gesperrt';
$string['userfields_show'] = 'Nutzerfelder anzeigen';
$string['userfields_show_help'] = 'Diese Option legt fest, ob zusätzliche Nutzerfelder wie z.B. die E-Mail-Adresse in der Bewerterübersicht angezeigt werden. Welche Felder angezeigt werden, wird über die Einstellung showuseridentity gesteuert.';
$string['usergrade'] = 'Nutzer/in {$a->fullname} ({$a->useridnumber}) mit Wert {$a->gradeidnumber}';
$string['userid'] = 'Nutzer-ID';
$string['useridnumberwarning'] = 'Nutzer/innen ohne ID-Nummer sind vom Export ausgeschlossen, da sie nicht importiert werden können.';
$string['usermappingerror'] = 'Nutzerzuordnungsfehler: Nutzer mit {$a->field} von "{$a->value}" wurde nicht gefunden.';
$string['usermappingerrorcurrentgroup'] = 'Nutzer/in ist nicht Mitglied dieser Gruppe.';
$string['usermappingerrormultipleusersfound'] = 'Fehler bei der Benutzerzuordnung: Mehrere Benutzer mit {$a->field} von "{$a->value}" gefunden. Bitte verwenden Sie ein eindeutigeres Mapping-Feld.';
$string['usermappingerrorusernotfound'] = 'Nutzer-Zuordnungsfehler. Nutzer kann nicht gefunden werden.';
$string['userpreferences'] = 'Nutzereinstellungen';
$string['useweighted'] = 'Gewichtung verwenden';
$string['verbosescales'] = 'Verbale Skalen';
$string['verbosescales_help'] = 'Eine verbale Skala verwendet Begriffe an Stelle von Zahlen. Setzen Sie den Wert \'Ja\', um sowohl numerische als auch verbale Skalen zu importieren. Setzen Sie den Wert auf \'nein\' um nur numerische Skalen zu importieren.';
$string['viewbygroup'] = 'Gruppe';
$string['viewgrades'] = 'Bewertungen anzeigen';
$string['weight'] = 'Gewichtung';
$string['weight_help'] = 'Festlegung zur Berechnung mehrerer Bewertungen innerhalb einer Kategorie';
$string['weightcourse'] = 'Gewichtete Bewertung im Kurs benutzen';
$string['weightedascending'] = 'Sortierung nach % gewichtet, aufsteigend';
$string['weighteddescending'] = 'Sortierung nach % gewichtet, absteigend';
$string['weightedpct'] = 'Gewichtung in %';
$string['weightedpctcontribution'] = 'Gewichtung in % der Zugaben';
$string['weightofa'] = 'Gewichtung von {$a}';
$string['weightorextracredit'] = 'Gewichtung oder Zusatzpunkte';
$string['weightoverride'] = 'Gewichtungseinstellung';
$string['weightoverride_help'] = 'Durch das Deaktivieren wird die Gewichtung gelöscht und wieder die automatische Berechnung der Bewertungen vorgenommen. Es erfolgt damit keine weitere Korrektur der Bewertungen.';
$string['weights'] = 'Gewichtungen';
$string['weightsadjusted'] = 'Die Gewichtungen wurden auf insgesamt 100 angepasst.';
$string['weightsedit'] = 'Gewichtungen oder Zusatzpunkte ändern';
$string['weightuc'] = 'Berechnete Gewichtung';
$string['writinggradebookinfo'] = 'Einstellungen festhalten';
$string['xml'] = 'XML';
$string['yes'] = 'Ja';
$string['yourgrade'] = 'Ihre Bewertung';
