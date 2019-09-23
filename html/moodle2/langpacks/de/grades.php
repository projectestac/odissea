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
 * Strings for component 'grades', language 'de', branch 'MOODLE_36_STABLE'
 *
 * @package   grades
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
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
$string['aggregateonlygraded_help'] = 'Nicht vorhandene Bewertungen (z.B. weil der Test nicht vom Teilnehmer bearbeitet wurde) können mit dem niedrigsten Bewertungswert (z.B. 0 Punkte) verarbeitet werden oder bei der Ermittlung der Gesamtnote ignoriert werden.';
$string['aggregateoutcomes'] = 'Lernziele in die Gesamtergebnisse einbeziehen';
$string['aggregateoutcomes_help'] = 'Die Berücksichtigung der Lernziele bei der Ermittlung des Gesamtergebnisses kann zu Verzerrungen führen, die nicht erwünscht sind. Sie haben daher die Möglichkeit, diese einzubeziehen oder zu ignorieren.';
$string['aggregatesonly'] = 'Zu den Gesamtwerten wechseln';
$string['aggregatesubcatsupgradedgrades'] = 'Hinweis: Die Einstellung  \'Aggregation mit Unterkategorien\' wurde beim Upgrade entfernt. Da diese Einstellung in diesem Kurs verwendet wurde, sollten Sie sich die Veränderungen bei den Bewertungen genauer ansehen.';
$string['aggregatesum'] = 'Natürlich';
$string['aggregateweightedmean'] = 'Gewichteter Durchschnitt';
$string['aggregateweightedmean2'] = 'Einfach gewichteter Durchschnitt';
$string['aggregation'] = 'Gesamtergebnis';
$string['aggregationcoef'] = 'Summenkoeffizient';
$string['aggregationcoefextra'] = 'Zusatzpunkte';
$string['aggregationcoefextra_help'] = 'Wenn die Ergebnisse \'Natürlich\' oder \'Einfach gewichteter Durchschnitt\'  zusammengefasst werden und die Option \'Zusatzpunkte\' aktiviert ist, wird die höchste Bewertung nicht zur höchsten Bewertung der Kategorie hinzugezählt.  Daher kann hierbei die Höchstnote erreicht werden, obwohl nicht bei allen Bewertigen die Höchstnote erreicht wurde.  Wenn in der Systemverwaltung festgelegt wurde, dass Bewertungen veregebn werden können, die den Höchstwert übersteigen, kann die Bewertungsberechnung ein Ergebnis anzeigen, dass höher ist als der eingestellte Höchstwert.

Wenn die Berechnung auf Basis des \'Durchschnitts (mit Zusatzpunkten)\'  gesetzt ist und Extrapunkte einen Wert größer als Null haben, so wird der Wert für den Extrapunkte erst multipliziert und dann dem Durchschnitt der Bewertungen hinzuaddiert.';
$string['aggregationcoefextrasum'] = 'Zusatzpunkte';
$string['aggregationcoefextrasumabbr'] = '+';
$string['aggregationcoefextrasum_help'] = 'Wenn die Option für Zusatzpunkte aktiviert ist, wird die maximale Note des Bewertungsaspekts nicht zur maximalen Bewertung der Kategorie hinzugefügt, was die Möglichkeit bietet, die maximale Bewertung (oder Bewertungen über der maximalen Bewertung, wenn von der Seiten-Administration aktiviert) in der Kategorie zu erreichen, ohne die maximale Bewertung in allen Bewertungsaspekten erreicht zu haben.';
$string['aggregationcoefextraweight'] = 'Gewichtung von Zusatzpunkten';
$string['aggregationcoefextraweight_help'] = '<h2>Extrapunkteberechnung</h2>
<p>Bei der Berechnung der Extrapunkte wird folgendes Verfahren angewandt. Bewertungen für die  Extrapunkte vergeben werden werden erst mit dem Multiplikator multipliziert. Dann werden die Einzelwerte addiert und durch die Zahl der Bewertungen dividiert. Die Zahl durch die dividiert wird   umfasst nur die Berwertungen, für die es keine Extrapunkte gibt. Im folgenden Beispiel erfolgt daher nur eine Division durch 2 und nicht durch 3.
</p>

<ul>
    <li>Wert 1 wird bewertet mit 0-100 und "Extrapunkte" Wert wird gesetzt auf 2</li>
    <li>Wert 2 wird bewertet mit 0-100 und "Extrapunkte" Wert bleibt auf 0.0000</li>
    <li>Wert 3 wird bewertet mit 0-100 und "Extrapunkte" Wert bleibt auf 0.0000</li>
    <li>Alle 3 Werte gehören in Kategorie 1, mit der Bewertungsstrategie "Durchschnitt der Einzelbewertungen (mit Extrapunkten)" als Berechnungsverfahren</li>
    <li>Ein Teilnehmer erhält nun folgende Einzelbewertungen 20 für Wert 1, 40 für Wert 2 und 70 für Wert 3</li>
    <li>Die Gesamtbewertung für Kategorie 1 ist nun 50/100 (20*2 + 40 + 70) / 3</li>
</ul>';
$string['aggregationcoefweight'] = 'Gewichtung der Aspekte';
$string['aggregationcoefweight_help'] = '<h2>Gewichtung des Wertes</h2>
<p>Gewichtung der Bewertungen dieser Aktivität bei der Berechnung der Teil- oder Gesamtnote.
</p>';
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
$string['aggregationhintdropped'] = '(Unberücksichtigt)';
$string['aggregationhintexcluded'] = '(Unberücksichtigt)';
$string['aggregationhintextra'] = '(Zusatzbewertung)';
$string['aggregationhintnovalue'] = '(Leer)';
$string['aggregationofa'] = 'Zusammenfassung von {$a}';
$string['aggregationposition'] = 'Anzeige des Gesamtergebnisses';
$string['aggregationposition_help'] = 'Die Option legt fest, an welcher Stelle der Tabelle das Gesamtergebnis angezeigt wird.';
$string['aggregationsvisible'] = 'Mögliche Summierungsarten';
$string['aggregationsvisiblehelp'] = 'Wählen Sie alle Summierungsarten, die nutzbar sein sollen. Benutzen Sie die Strg-Taste (bzw. Ctrl), um mehrere Arten zu markieren.';
$string['allgrades'] = 'Alle Bewertungen nach Kategorien';
$string['allstudents'] = 'Alle Teilnehmer/innen';
$string['allusers'] = 'Alle Nutzer/innen';
$string['autosort'] = 'Auto-Sortierung';
$string['availableidnumbers'] = 'Verfügbare ID-Nummern';
$string['average'] = 'Durchschnitt';
$string['averagesdecimalpoints'] = 'Nachkommastellen in den Spaltendurchschnitten';
$string['averagesdecimalpoints_help'] = 'Legt die Zahl der angezeigten Dezimalziffern des errechneten Durchschnittswerts in der Tabelle fest.  Wenn \'vererbt\' ausgewählt wird, wird die  Festlegung für die Spaltenwerte übernommen.';
$string['averagesdisplaytype'] = 'Spaltendurchschnittsanzeige';
$string['averagesdisplaytype_help'] = 'Legt die Anzeige des Durchschnitts in jeder Spalte fest.  Wenn \'Vererben\' gewählt wird, wird der Wert in allen Spalten verwandt.';
$string['backupwithoutgradebook'] = 'Die Sicherung enthält keine Bewertungskonfiguration';
$string['badgrade'] = 'Ungültige Bewertung';
$string['badlyformattedscale'] = 'Bitte tragen Sie eine kommagetrennte Liste von Werten ein (mindestens zwei Werte)';
$string['baduser'] = 'Ungültige/r Teilnehmer/in';
$string['bonuspoints'] = 'Extrapunkte';
$string['bulkcheckboxes'] = 'Checkboxes';
$string['calculatedgrade'] = 'Bewertung berechnen';
$string['calculation'] = 'Berechnung';
$string['calculationadd'] = 'Berechnung hinzufügen';
$string['calculationedit'] = 'Berechnung bearbeiten';
$string['calculation_help'] = 'Eine Berechnung ist eine Formel zur Bestimmung von Gesamtbewertungen. Die Formel sollte mit einem Gleichheitszeichen (=) beginnen und kann die üblichen mathematischen Operatoren (wie etwa max, min, sum) enthalten.

Sie können auch andere Bewertungselemente in die Rechnung einbeziehen, indem Sie die ID-Nummer in eine doppelte eckige Klammer [[ID]] einfügen.';
$string['calculationsaved'] = 'Berechnung gespeichert';
$string['calculationview'] = 'Berechnung ansehen';
$string['cannotaccessgroup'] = 'Bei der gewählten Gruppe kann nicht auf die Bewertung zugegriffen werden.';
$string['categories'] = 'Kategorien';
$string['category'] = 'Kategorie';
$string['categoryedit'] = 'Kategorie bearbeiten';
$string['categoryname'] = 'Name der Kategorie';
$string['categorytotal'] = 'Summe für die Kategorie';
$string['categorytotalfull'] = 'Summe für {$a->category}';
$string['categorytotalname'] = 'Vollständiger Kategorienname';
$string['changedefaults'] = 'Grundeinstellungen ändern';
$string['changereportdefaults'] = 'Voreinstellungen für Berichte ändern';
$string['chooseaction'] = 'Aktion auswählen ...';
$string['choosecategory'] = 'Kategorie auswählen';
$string['combo'] = 'Tabs und Dropdown-Menü';
$string['compact'] = 'Komprimieren';
$string['componentcontrolsvisibility'] = 'Die Sichtbarkeit dieses Bewertungselements wird in den Aktivitätseinstellungen festgelegt.';
$string['contract'] = 'Kategorie einschränken';
$string['contributiontocoursetotal'] = 'Beiträge zum Kurs insgesamt';
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
$string['coursetotal'] = 'Summe für den Kurs';
$string['createcategory'] = 'Kategorie anlegen';
$string['createcategoryerror'] = 'Neue Kategorie konnte nicht erstellt werden';
$string['creatinggradebooksettings'] = 'Einstellungen für die Bewertungsübersicht';
$string['csv'] = 'CSV';
$string['currentparentaggregation'] = 'Aktuelle übergeordnete Gesamtsumme';
$string['curveto'] = 'Ändern auf';
$string['decimalpoints'] = 'Dezimalstellen';
$string['decimalpoints_help'] = 'Legt die Zahl der angezeigten Dezimalzeichen einer Bewertung fest. Die Einstellung wirkt sich nicht auf die Genauigkeit der Berechnungen aus. Bei Berechnungen wird eine Genauigkeit von bis zu fünf Dezimalziffern mit beachtet.';
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
$string['droplowestvalue'] = 'Niedrigste Bewertungen verwerfen';
$string['droplowestvalues'] = '{$a} niedrigste Werte entfernen';
$string['droplow_help'] = 'Diese Option legt fest, ob eine festgelegte Anzahl niedriger Bewertung bei der Gesamtberechnung unberücksichtigt bleibt.';
$string['dropped'] = 'herausgenommen';
$string['dropxlowest'] = 'Die X niedrigsten <br />herausnehmen';
$string['dropxlowestwarning'] = 'Anmerkung: Wenn Sie die Option "die X niedrigsten herausnehmen" verwenden, wird angenommen, dass alle Elemente der Kategorie die gleiche Punktzahl haben. Wenn die Punktwerte differieren, werden die Ergebnisse unkalkulierbar.';
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
$string['enableoutcomes_help'] = 'Wenn die Option aktiviert ist, können Elemente mit einer oder mehreren Skalen bewertet werden, die an Outcome-Anweisungen gebunden sind.';
$string['encoding'] = 'Kodierung';
$string['encoding_help'] = 'Wählen Sie die Zeichencodierung aus, die für diese Daten benutzt wird (standardmäßig UTF-8). Bei einer falschen Zeichencodierung wird diese in der Datenvorschau sichtbar.';
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
$string['errorupdatinggradecategoryaggregateonlygraded'] = 'Es ist ein Fehler beim Aktualisieren der Einstellungen "Zusammenfassung nur bewerteter Elemente" in der Bewertungskategorie mit der ID {$a->id} aufgetreten.';
$string['errorupdatinggradecategoryaggregateoutcomes'] = 'Es ist ein Fehler beim Aktualisieren der Einstellungen "Zusammenfassen der Ergebnisse" in der Bewertungskategorie mit der ID {$a->id} aufgetreten.';
$string['errorupdatinggradecategoryaggregation'] = 'Es ist ein Fehler beim Aktualisieren des Typs der Zusammenfassung in der Bewertungskategorie mit der ID {$a->id} aufgetreten.';
$string['errorupdatinggradeitemaggregationcoef'] = 'Es ist ein Fehler beim Aktualisieren des Summenkoeffizients (Gewichtung oder Zusatzpunkte) des Bewertungselements mit der ID {$a->id} aufgetreten.';
$string['eventgradedeleted'] = 'Bewertung gelöscht';
$string['eventgradelettercreated'] = 'Bewertungschreiben erstellt';
$string['eventgradeletterdeleted'] = 'Bewerbungsschreiben gelöscht';
$string['eventgradeletterupdated'] = 'Berwertungsschreiben aktualisiert';
$string['eventgradeviewed'] = 'Bewertungen angezeigt';
$string['eventscalecreated'] = 'Skala erstellt';
$string['eventscaledeleted'] = 'Skala gelöscht';
$string['eventscaleupdated'] = 'Skala aktualisiert';
$string['eventusergraded'] = 'Nutzer/in bewertet';
$string['excluded'] = 'Unberücksichtigt';
$string['excluded_help'] = 'Diese Option legt fest, ob diese Bewertung bei der weiteren Gesamtberechnung einbezogen wird oder unberücksichtigt bleibt.';
$string['expand'] = 'Kategorie erweitern';
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
$string['feedback'] = 'Feedback';
$string['feedbackadd'] = 'Feedback hinzufügen';
$string['feedbackedit'] = 'Feedback bearbeiten';
$string['feedbackfiles'] = 'Feedback-Dateien';
$string['feedbackforgradeitems'] = 'Feedback für {$a}';
$string['feedback_help'] = 'Diese Einstellung erlaubt Anmerkungen zur Bewertung durch Trainer/innen. Das Feedback kann ein ausführlicher Text, eine sehr persönliche Rückmeldung oder ein Code sein, der üblicherweise in der Bildungseinrichtung verwandt wird.';
$string['feedbackhistoryfiles'] = 'Feedback-Verlaufsdateien';
$string['feedbacks'] = 'Feedbacks';
$string['feedbacksaved'] = 'Feedback gespeichert';
$string['feedbackview'] = 'Feedback ansehen';
$string['finalgrade'] = 'Endbewertung';
$string['finalgrade_help'] = '<p>Gesamtnote nachdem alle Bewertungen berechnet wurden.</p>';
$string['fixedstudents'] = 'Feste Spaltenbreite';
$string['fixedstudents_help'] = 'Feste Breite der Spalten, dadurch horizontales Scrollen.';
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
$string['gradeadministration'] = 'Bewertungsverwaltung';
$string['gradealreadyupdated'] = '{$a} Bewertungen wurden nicht imprtiert, da diese Bewertungen älter waren als die im Bewertungsebereich vorhandenen. Um den Import dennoch fortzuführen verwenden Sie die \'Import erzwingen\'-Funktion.';
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
$string['gradecategoryonmodform_help'] = 'Die Einstellung legt fest in welcher Kategorie des Bewertungsbereich die Aktivität angezeigt wird.';
$string['gradecategorysettings'] = 'Bewertungskategorie-Einstellungen';
$string['gradedisplay'] = 'Bewertungsanzeige';
$string['gradedisplaytype'] = 'Bewertungsanzeige-Typ';
$string['gradedisplaytype_help'] = 'Diese Einstellung legt fest, wie Bewertungen in den Klassen- und Nutzerberichten angezeigt werden.

* Punktwert - aktuelle Bewertungen
* Prozent - relativ zum höchsten/ niedrigsten Wert)
* Buchstabe - Buchstaben (A, B, C,..) oder Wörter werden angezeigt';
$string['gradedon'] = '{$a} bewertet';
$string['gradeexport'] = 'Bewertungsexport';
$string['gradeexportcolumntype'] = '{$a->name} ({$a->extra})';
$string['gradeexportcustomprofilefields'] = 'Individuelle Nutzerprofilfelder für Bewertungsexport';
$string['gradeexportcustomprofilefields_desc'] = 'Die folgenden individuellen Nutzerprofilfelder sollen in den Bewertungsexport eingebunden werden. Einträge durch Kommas trennen.';
$string['gradeexportdecimalpoints'] = 'Dezimalstellen bei Bewertungsexport';
$string['gradeexportdecimalpoints_desc'] = 'Zahl der angezeigten Dezimalstellen bei Export. Diese Einstellung kann durch Definition im Export überschrieben werden.';
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
$string['gradeletter_help'] = '<h2>Bewertung mit Buchstaben</h2>
<p>Ein Buchstabe oder eine andere Bezeichnung als Symbol zur Wiedergabe eines Bewertungsbereichs (z.B. sehr gut für 100-97 Punkte).</p>';
$string['gradeletternote'] = 'Füllen Sie die letzte Zeile und speichern Sie, <br />um eine neue Leerzeile für eine weitere Note zu erhalten.';
$string['gradeletteroverridden'] = 'Die Voreinstellungen für die Bezeichnungen der Bewertungen (Buchstaben)  wurden überschrieben.';
$string['gradeletters'] = 'Notenstufen';
$string['gradelocked'] = 'Bewertung ist gesperrt';
$string['gradelong'] = '{$a->grade} / {$a->max}';
$string['grademax'] = 'Maximale Bewertung';
$string['grademax_help'] = 'Wenn der Wert-Typ der Bewertung verwendet wird, kann hier die höchste Bewertung festgesetzt werden. Die höchste Bewertung für einen Aktivitäten-Bewertungsaspekt wird auf der Seite mit den Einstellungen der einzelnen Aktivität festgesetzt.';
$string['grademin'] = 'Minimale Bewertung';
$string['grademin_help'] = 'Wenn der Wert-Typ der Bewertung verwendet wird, kann hier die niedrigste Bewertung festgesetzt werden.';
$string['gradeoutcomeitem'] = 'Lernziel bewerten';
$string['gradeoutcomes'] = 'Lernziele';
$string['gradeoutcomescourses'] = 'Kurs-Lernziele';
$string['gradepass'] = 'Bewertung zum Bestehen';
$string['gradepassgreaterthangrade'] = 'Die Bewertung zum Bestehen kann nicht höher sein als die Höchstbewertung {$a}';
$string['gradepass_help'] = 'Diese Option legt die erforderliche Mindestbewertung für das Bestehen fest. Der Wert wird beim Aktivitäts- und beim Kursabschluss verwendet, außerdem wird bei der Bewertung ein Bestehen in grün und ein Scheitern in rot markiert.
';
$string['gradepointdefault'] = 'Standardmäßige Punktebewertung';
$string['gradepointdefault_help'] = 'Die Einstellung legt den voreingestellten Standardwert der Punktbewertung für diese Aktivität fest.';
$string['gradepointdefault_validateerror'] = 'Der eingetragene Wert musss eine ganze Zahl zwischen 1 und der Höchstbewertung sein.';
$string['gradepointmax'] = 'Maximale Punktebewertung';
$string['gradepointmax_help'] = 'Die Einstellung legt den Höchstwert in Punkten für Aktivitäten fest.';
$string['gradepointmax_validateerror'] = 'Diese Einstellung muss eine Ganzzahl zwischen 1 und 10000 sein.';
$string['gradepreferences'] = 'Bewertungseinstellungen';
$string['gradepreferenceshelp'] = 'Hilfe für Bewertungseinstellungen';
$string['gradepublishing'] = 'Veröffentlichen erlauben';
$string['gradepublishing_help'] = 'Aktiviert die Export und Importfunktion: Exportierte Bewertungen können für andere verlinkt werden, ohne dass sie sich im Moodle-System einloggen müssen.  Bewertungen können auf die gleiche Art und Weise importiert werden. Damit können Bewertungen, die aus anderen Systemen stammen integriert werden. Normalerweise können nur Administratoren diese Funktion nutzen. Falls dieses Recht weitergegeben wird, sind die betroffenen Personen darauf hinzuweisen, dass mit entsprechender Sorgfalt mit diesen persönlichen Daten umgegangen wird.

Das Veröffentlichen von Bewertungen ist eine Möglichkeit, Bewertungen über eine URL zu importieren und zu exportieren, ohne bei Moodle angemeldet zu sein. Wenn diese Option aktiviert ist, werden für Administratoren und Nutzer/innen mit der Berechtigung zum Veröffentlichen von Bewertungen (standardmäßig nur Benutzer mit der Managerrolle) die Einstellungen zum Veröffentlichen von Bewertungsexporten angeboten.';
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
$string['groupavg'] = 'Gruppendurchschnitt';
$string['hidden'] = 'Verborgen';
$string['hiddenasdate'] = 'Erstellungsdatum für verborgene Bewertungen anzeigen';
$string['hiddenasdate_help'] = 'Falls Nutzer/innen verborgene Bewertungen nicht sehen können, soll das Abgabedatum anstelle von \'-\' angezeigt werden.';
$string['hidden_help'] = 'Die Option verbirgt die Bewertungen vor den Teilnehmer/innen. \'Verborgen bis...\' kann auf Wunsch eingestellt werden, um die Bewertungen so lange zu verbergen, bis der Bewertungsdurchlauf abgeschlossen wurde.';
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
$string['hidetotalifhiddenitems'] = 'Summen verbergen, wenn sie verborgene Elemente enthalten';
$string['hidetotalifhiddenitems_help'] = 'Die Einstellung legt fest ob die Gesamtbewertung angezeigt wird oder durch ein (-) ersetzt wird, wenn es verborgene Einzelbewertungen gibt. Soll sie angezeigt werden kann festgelegt werden, ob die verborgene Bewertung in das angezeigte Gesamtergebnisse einbezogen wird oder nicht.

Wenn verborgene Werte ausgeschlossen werden, ist die sichtbare Gesamtbewertung für Trainer/innen und Teilnehmer/innen jeweils nicht identisch.  Trainer/innen sehen immer sichtbare und verborgene Ergebnisse als Gesamtergebnis. Sollen verborgene Werte für Teilnehmer/innen in die Bewertung eingehen, können diese von den Teilnehmer/innen u.U. aus dem Gesamtergebnis errechnet werden.';
$string['hidetotalshowexhiddenitems'] = 'Summen anzeigen, ausgenommen der verborgenen Elemente';
$string['hidetotalshowinchiddenitems'] = 'Summen anzeigen, inclusive der verborgenen Elemente';
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
$string['keephighestvalues'] = 'Höchste Werte behalten: {$a)';
$string['keephigh_help'] = 'Wenn diese Einstellung gesetzt ist, dann werden nur die X höchsten Bewertungen behalten. X ist der benutzte Wert für diese Option.';
$string['keymanager'] = 'Schlüsselverwaltung';
$string['lessthanmin'] = 'Die eingegeben Bewertung für {$a->itemname} für {$a->username} ist niedriger als zulässig.';
$string['letter'] = 'Note';
$string['lettergrade'] = 'Notenstufenbewertung';
$string['lettergradenonnumber'] = 'Niedriger und/oder hoher Wert waren nicht-numerisch für';
$string['letterpercentage'] = 'Note (Prozent)';
$string['letterreal'] = 'Note (Punkte)';
$string['letters'] = 'Notenstufen';
$string['linkedactivity'] = 'Verknüpfte Aktivität';
$string['linkedactivity_help'] = '<h2>Verlinkte Aktivität</h2>
<p>Festlegung der Zuordnung einer Aktivität zu einem Lernziel. Dies ist sinnvoll, um Leistungen der Teilnehmer/innen zu messen, die nicht über Notendimensionen erfasst werden sollen.
</p>';
$string['linktoactivity'] = 'Link zur Aktivität {$a->name} {$a->title}';
$string['lock'] = 'Sperren';
$string['locked'] = 'Gesperrt';
$string['locked_help'] = 'Mit der Aktivierung werden die Bewertungen nicht mehr automatisch durch die Lernaktivität aktualisiert. ';
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
$string['meanselection_help'] = 'Wählen Sie bitte aus, welche Bewertungen in den Spaltendurchschnitt einfließen sollen. Zellen ohne Werte können ignoriert oder als 0 gewertet (Voreinstellung) werden.';
$string['median'] = 'Median';
$string['min'] = 'Niedrigste';
$string['minimum_show'] = 'Minimale Bewertung anzeigen';
$string['minimum_show_help'] = 'Der Mindestwert wird bei der Berechnung von Bewertungen und Gewichtungen verwandt. Wenn er nicht angezeigt wird, ist der Wert \'0\' und kann nicht bearbeitet werden.';
$string['minmaxtouse'] = 'Benutzte min. und max. Bewertungen in der Berechnung';
$string['minmaxtouse_desc'] = 'Die Einstellung legt fest ob die niedrigsten und höchsten Bewertungen zum Zeitpunkt der Vergabe der Bewertung oder zum Zeitpunkt der Anzeige im Bewertungsbereich verwendet wird. Die Einstellung sollte vorgenommen wenn der Server wenige belastet ist, da die vollständige Neuberechnung aller Bewertungen zu einer hohen Serverlast führen kann.';
$string['minmaxtouse_help'] = 'Die Einstellung legt fest ob die niedrigsten und höchsten Bewertungen zum Zeitpunkt der Vergabe der Bewertung oder zum Zeitpunkt der Anzeige im Bewertungsbereich verwendet wird.';
$string['minmaxupgradedgrades'] = 'Hinweis: Einige Bewertungen wurden geändert, um Inkonsistenzen im Bewertungsbereich zu korrigieren. Diese sind aufgetreten durch Änderungen der Einstellung zu den niedrigsten und höchsten Bewertungen, die für die angezeigte Bewertung berücksichtigt werden sollen.';
$string['minmaxupgradefixbutton'] = 'Widersprüchlichkeit beheben';
$string['minmaxupgradewarning'] = 'Hinweis: Die Einstellung zur Berechnung der niedrigsten und höchsten Bewertung im Bewertungsbereich wurde geändert. Dadurch ergeben sich Bewertungen der Berechnungen, die nicht mehr korrekt sind. Sie können dies durch Anklicken des Buttons unten korrigieren.';
$string['missingitemtypeoreid'] = 'Der Array-Schlüssel (itemtype oder eid) des 2. Parameters fehlt grade_edit_tree_column_select::get_item_cell($item, $params)';
$string['missingscale'] = 'Skala auswählen';
$string['mode'] = 'Modus';
$string['modgrade'] = 'Bewertung';
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
$string['modgradeerrorbadpoint'] = 'Ungültiger Bewertungswert. Es muss ein ganzzahliger Wert zwischen 1 und {$a} sein.';
$string['modgradeerrorbadscale'] = 'Falsche Skala ausgewählt. Bite wählen Sie eine der vorhandenen Skalen aus.';
$string['modgrade_help'] = 'Wählen Sie die Art der Bewertung für diese Aktivität aus. Wenn Sie z.B. Skala auswählen, steht ein DropDown-Feld mit einer Skala zur Auswahl zur Verfügung. Wenn Sie Punkt-Bewertung auswählen, so können Sie die Höchstpunktzahl für diese Aktivität auswählen.';
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
$string['mygrades_desc'] = 'Die Einstellung fügt den Link zu einer externen Bewertungsverwaltung zum  Nutzermenu hinzu.';
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
$string['nogradeletters'] = 'Keine Noten definiert';
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
$string['noscales'] = 'Lernziele müssen zu einer Bewertungsskala eines Kurses oder einer globalen Skala zu gewiesen werden, aber es existiert keine. Möchten Sie eine hinzufügen?';
$string['noselectedcategories'] = 'Keine Kategorie wurde ausgewählt.';
$string['noselecteditems'] = 'keine Werte ausgewählt.';
$string['notenrolled'] = 'Sie sind in keinem Kurs eingeschrieben.';
$string['notteachererror'] = 'Diese Funktionen können nur Trainer/innen nutzen';
$string['nousersloaded'] = 'Es wurden keine Nutzer importiert.';
$string['numberofgrades'] = 'Anzahl der Bewertungsstufen';
$string['onascaleof'] = 'auf einer Skala von {$a->grademin} bis {$a->grademax}';
$string['operations'] = 'Vorgänge';
$string['options'] = 'Einstellungen';
$string['others'] = 'Andere';
$string['outcome'] = 'Lernziel';
$string['outcomeassigntocourse'] = 'Ein anderes Lernziel diesem Kurs zuweisen';
$string['outcomecategory'] = 'Lernziele in der Kategorie erstellen';
$string['outcomecategorynew'] = 'Neue Kategorie';
$string['outcomeconfirmdelete'] = 'Möchten Sie das Lernziel \'{$a}\' wirklich löschen?';
$string['outcomecreate'] = 'Neues Lernziel hinzufügen';
$string['outcomedelete'] = 'Lernziel löschen';
$string['outcomefullname'] = 'Vollständiger Name';
$string['outcome_help'] = 'Lernziel, das zu diesem Bewertungsaspekt passt';
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
$string['overridden_help'] = '<h2>Überschreiben</h2>
<p>Wenn Sie diese Funktion verwenden, verhindern Sie jeden weiteren Versuch des Teilnehmers und damit die Änderung der Bewertung in der Tabelle. Eine manuell vorgenommene Bewertung in der Tabelle kann also nicht mehr durch einen weiteren Testversuch korrigiert werden. Versuche aus der Lernaktivität heraus neue Daten in die Tabelle zu schreiben sind nicht mehr möglich. </p>
<p>Diese Funktion wird vielfach automatisch durch das Bewertungssystem aktiviert. Sie kann manuell an dieser Stelle an- und ausgeschaltet werden.</p>';
$string['overriddennotice'] = 'Die endgültige Bewertung zu dieser Aktivität wurde manuell bearbeitet.';
$string['overridecat'] = 'Zulassen, dass Kategoriebewertungen manuell überschrieben werden.';
$string['overridecat_help'] = 'Das Deaktivieren der Einstellungen verhindert, dass Nutzer Kategoriebewertungen überschreiben.';
$string['overridesitedefaultgradedisplaytype'] = 'Voreinstellungen überschreiben';
$string['overridesitedefaultgradedisplaytype_help'] = 'Die Checkkox erlaubt die systemweiten Voreinstellungen für die Bewertungen zu überschreiben. Danach besteht die Möglichkeit Gesamtnotenumrechnungen (Punktwerte in Noten) oder Begrenzungen anzupassen.';
$string['overrideweightofa'] = 'Gewichtung von {$a} überschreiben';
$string['parentcategory'] = 'Übergeordnete Kategorie';
$string['pctoftotalgrade'] = '% der Gesamtbewertung';
$string['percent'] = 'Prozent';
$string['percentage'] = 'Prozentsatz';
$string['percentageletter'] = 'Prozent (Note)';
$string['percentagereal'] = 'Prozent (Punkte)';
$string['percentascending'] = '% aufsteigend sortieren';
$string['percentdescending'] = '% absteigend sortieren';
$string['percentshort'] = '%';
$string['plusfactor'] = 'Offset';
$string['plusfactor_help'] = 'Zuschlag, der zu jeder Bewertung addiert wird, nachdem der Multiplikator angewendet wurde (dieser Wert kann auch negativ sein).';
$string['plusfactorvalue'] = 'Offset für {$a}';
$string['points'] = 'Punkte';
$string['pointsascending'] = 'sortieren, Punkte aufsteigend';
$string['pointsdescending'] = 'sortieren, Punkte absteigend';
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
$string['privacy:metadata:gradeshistory'] = 'Aufzeichnung früherer Bewertungen';
$string['privacy:metadata:grades:information'] = 'Zusätzliche Info zur Bewertung';
$string['privacy:metadata:grades:timemodified'] = 'Zeitpunkt der letzten Änderung der Bewertung';
$string['privacy:metadata:grades:userid'] = 'ID des bewerteten Nutzers';
$string['privacy:metadata:grades:usermodified'] = 'ID des Nutzers, der Datensatz zuletzt bearbeitet hat';
$string['privacy:metadata:history:loggeduser'] = 'ID des Nutzers, der eingeloggt war als Versionierung erfolgte';
$string['privacy:metadata:history:timemodified'] = 'Zeitpunkt der Bewertungs-Versionierung';
$string['privacy:metadata:itemshistory'] = 'Aufzeichnung früherer Versionen des Bewertungsitems';
$string['privacy:metadata:outcomes'] = 'Aufzeichnung der Lernziele';
$string['privacy:metadata:outcomeshistory'] = 'Eine Aufzeichnung früherer Versionen des Lernziels';
$string['privacy:metadata:outcomes:timemodified'] = 'Zeitpunkt an dem Datensatz verändert wurde';
$string['privacy:metadata:outcomes:usermodified'] = 'Nutzer der den Datensatz zuletzt verändert hat';
$string['privacy:metadata:scale'] = 'Aufzeichnung von Skalen';
$string['privacy:metadata:scalehistory'] = 'Aufzeichnung früherer Versionen von Skalen';
$string['privacy:metadata:scale:timemodified'] = 'Zeitpunkt an dem  der Datensatz zuletzt verändert wurde';
$string['privacy:metadata:scale:userid'] = 'Nutzer, der Datensatz zuletzt bearbeitet hat';
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
$string['quickgrading_help'] = 'Die Schnelle Bewertung ergänzt ein Eingabefeld in jeder Zelle der Bewertungstabelle. Damit können  mehrere Bewertungen auf einer Seite schnell eingegeben werden. Mit einem Klick auf den Aktualisierungsbutton werden alle Bewertungen auf einmal abgespeichert.';
$string['range'] = 'Bereich';
$string['rangedecimals'] = 'Dezimalstellen für Spannbreite';
$string['rangedecimals_help'] = 'Zahl der Dezimalstellen, um die Spannbreite der Ergebnisse anzuanzeigen ';
$string['rangesdecimalpoints'] = 'Nachkommastellen in Bereichen';
$string['rangesdecimalpoints_help'] = 'Festlegung der Zahl der Dezimalziffern für jeden Bewertungsbereich. Die Einstellung kann für jede einzelne Bewertungsspalte überschrieben werden.';
$string['rangesdisplaytype'] = 'Bereichsanzeige';
$string['rangesdisplaytype_help'] = 'Festlegung wie der Bewertungsbereich angezeigt wird. Wenn \'Vererben\' ausgewählt wurde, wird der Anzeigetyp in jeder Spalte verwendet.';
$string['rank'] = 'Rang';
$string['rawpct'] = 'Rohwert %';
$string['real'] = 'Punkte';
$string['realletter'] = 'Punkte (Noten)';
$string['realpercentage'] = 'Punkte (Prozent)';
$string['recalculatinggrades'] = 'Bewertungen neu berechnen...';
$string['recovergradesdefault'] = 'Bewertungen wiederherstellen';
$string['recovergradesdefault_help'] = 'Standardmäßig werden alte Bewertungen wiederhergestellt, wenn Nutzer/innen erneut in einen Kurs eingeschrieben werden.';
$string['refreshpreview'] = 'Vorschau aktualisieren';
$string['regradeanyway'] = 'Auf jeden Fall neu bewerten';
$string['removeallcoursegrades'] = 'Alle Bewertungen löschen';
$string['removeallcoursegrades_help'] = 'Wenn Sie diese Option anklicken, werden alle Werte, die manuell dem Bewertungsbereich hinzugefügt wurden, gelöscht. Ebenfalls gelöscht werden Bewertungen und Einträge, die überschrieben, ausgeschlossen, verborgen und geblockt wurden. Es bleiben nur solche Einträge stehen,die direkt aus Aktivitäten übermittelt wurden.';
$string['removeallcourseitems'] = 'Alle Aspekte und Kategorien löschen';
$string['removeallcourseitems_help'] = 'Wenn Sie diese Option anklicken, werden alle Kategorien und Werte, die manuell dem Bewertungsbereich hinzugefügt wurden, gelöscht. Ebenfalls gelöscht werden Bewertungen und Einträge, die überschrieben, ausgeschlossen, verborgen und geblockt wurden. Es bleiben nur solche Einträge stehen,die direkt aus Aktivitäten übermittelt wurden.';
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
$string['separator_help'] = 'Wählen Sie den Trenner für die CSV-Datei aus (standardmäßig Semikolon).';
$string['sepcolon'] = 'Doppelpunkt';
$string['sepcomma'] = 'Komma';
$string['sepsemicolon'] = 'Semikolon';
$string['septab'] = 'Tab';
$string['setcategories'] = 'Kategorien einrichten';
$string['setcategorieserror'] = 'Sie müssen Kategorien anlegen, bevor diese gewichtet werden können.';
$string['setgradeletters'] = 'Noten definieren';
$string['setpreferences'] = 'Grundeinstellungen';
$string['setting'] = 'Einstellung';
$string['settings'] = 'Einstellungen';
$string['setweights'] = 'Kategorien gewichten';
$string['showactivityicons'] = 'Aktivitätssymbole zeigen';
$string['showactivityicons_help'] = 'Wenn die Option aktiviert ist, werden Aktivitätssymbole neben den Aktivitäten gezeigt.';
$string['showallhidden'] = 'Verborgene anzeigen';
$string['showallstudents'] = 'Alle Teilnehmer/innen anzeigen';
$string['showanalysisicon'] = 'Bewertungssymbole zeigen';
$string['showanalysisicon_desc'] = 'Soll das Symbol zur Bewertungsanalyse standardmässig angezeigt werden? Wenn die Aktivität die Funktion unterstützt wird ein Link mit einer detaillierten Erläuterung der Bewertung angezeigt.';
$string['showanalysisicon_help'] = 'Wenn die Aktivität die Funktion unterstützt wird ein Link mit einer detaillierten Erläuterung der Bewertung angezeigt.';
$string['showaverage'] = 'Mittelwert anzeigen';
$string['showaverage_help'] = 'Spalte mit Durchschnittswertung anzeigen?

Beachten Sie, dass die Teilnehmer/innen fremde Bewertungen abschätzen können, wenn der Durchschnitt aus einer kleinen Anzahl berechnet wird. Aus Performancegründen ist der Durchschnitt ungenau, wenn er von versteckten Elementen abhängig ist.';
$string['showaverages'] = 'Spaltendurchschnitt anzeigen';
$string['showaverages_help'] = 'Spaltendurchschnitte in der Bewerterübersicht anzeigen';
$string['showcalculations'] = 'Berechnungen anzeigen';
$string['showcalculations_help'] = 'Nach der Aktiviertung wird ein Taschenrechnersymbol angezeigt. Damit ist erkennbar, dass der Bereich berechnet werden kann oder berechnet wurde.';
$string['showcontributiontocoursetotal'] = 'Beiträge zum gesamten Kurs anzeigen';
$string['showcontributiontocoursetotal_help'] = 'Ob eine Spalte mit Prozentangaben angezeigt wird, die verdeutlicht in welchem Maße eine Bewertung in den Gesamtwert der Note einfließt (nachdem die Gewichtung erfolgt ist).';
$string['showeyecons'] = 'Symbole zeigen';
$string['showeyecons_help'] = 'Symbol zur Sichtbarkeit (Auge) neben jeder Bewertung anzeigen, um die Sichtbarkeit für Teilnehmer/innen zu kontrollieren';
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
$string['showlocks_help'] = 'Symbol zum Sperren bzw. Freigeben neben jeder Bewertung anzeigen';
$string['shownohidden'] = 'Nicht anzeigen';
$string['shownooutcomes'] = 'Lernziele verbergen';
$string['shownumberofgrades'] = 'Anzahl in Durchschnittsbewertungen anzeigen';
$string['shownumberofgrades_help'] = 'Anzahl der erfassten Bewertungen in Klammern neben dem Durchschnittswert anzeigen. Beispiel: 45 (34)';
$string['showonlyactiveenrol'] = 'Nur aktive Einschreibungen anzeigen';
$string['showonlyactiveenrol_help'] = 'Diese Option legt fest, dass nur aktiv eingeschriebene Nutzer/innen in der Bewertungsübersicht angezeigt werden. Wenn die Option aktiviert ist, werden gesperrte Nutzer/innen nicht angezeigt.';
$string['showpercentage'] = 'Prozentwerte anzeigen';
$string['showpercentage_help'] = 'Prozentwerte für jede Bewertung anzeigen?';
$string['showquickfeedback'] = 'Schnelles Feedback anzeigen';
$string['showquickfeedback_help'] = 'Schnelles Feedback stellt ein Texteingabefeld zu jeder Einzelbewertung zur Verfügung. Auf einer Seite können dann viele Bewertungen auf einmal bearbeitet werden. Die Schaltfläche \'Aktualisieren\' erlaubt alle Änderungen auf einmal abzuspeichern.';
$string['showrange'] = 'Spannbreite anzeigen';
$string['showrange_help'] = 'Spalte für die Spannbreite der Ergebnisse anzeigen?';
$string['showranges'] = 'Stufen anzeigen';
$string['showranges_help'] = 'Zeile anzeigen, die die möglichen Bereiche für alle Bewertungen in der Bewerterübersicht darstellt';
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
$string['studentsperpage_help'] = 'Anzahl der Teilnehmer/innen, die pro Seite in der Bewertungsübersicht gezeigt werden';
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
$string['typescale_help'] = '<h2>Bewertungsskala</h2>
<p>Wenn eine Skalenbewertung verwendet wird, kann diese aus den vorhandenen Skalentypen ausgewählt werden. Die Bewertungsskala für eine Lernaktivität wird auf der Einstellungsseite der jeweiligen Lernaktivität vorgenommen.</p>';
$string['typetext'] = 'Text';
$string['typevalue'] = 'Wert';
$string['uncategorised'] = 'Nicht kategorisiert';
$string['unchangedgrade'] = 'Unveränderte Bewertungen';
$string['unenrolledusersinimport'] = 'Beim Import werden Bewertungen der folgenden Teilnehmer/innen importiert, die zur Zeit nicht im Kurs registriert sind: {$a}';
$string['unlimitedgrades'] = 'Offene Bewertung';
$string['unlimitedgrades_help'] = 'Standardmäßig sind Bewertungen durch Minimal- und Maximalwert einer Bewertungsstufe definiert. Falls diese Option aktiviert ist, entfällt die Einschränkung und erlaubt auch das direkte Eintragen von Bewertungen über 100%.';
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
$string['verbosescales'] = 'Wortreiche Skalen';
$string['verbosescales_help'] = 'Eine verbale Skala verwendet Begriffe an Stelle von Zahlen. Setzen Sie den Wert \'Ja\', um sowohl numerische als auch verbale Skalen zu importieren. Setzen Sie den Wert auf \'nein\' um nur numerische Skalen zu importieren.';
$string['viewbygroup'] = 'Gruppe';
$string['viewgrades'] = 'Bewertungen anzeigen';
$string['weight'] = 'Gewichtung';
$string['weightcourse'] = 'Gewichtete Bewertung im Kurs benutzen';
$string['weightedascending'] = 'Sortierung nach % gewichtet, aufsteigend';
$string['weighteddescending'] = 'Sortierung nach % gewichtet, absteigend';
$string['weightedpct'] = 'Gewichtung in %';
$string['weightedpctcontribution'] = 'Gewichtung in % der Zugaben';
$string['weight_help'] = 'Festlegung zur Berechnung mehrerer Bewertungen innerhalb einer Kategorie';
$string['weightofa'] = 'Gewichtung von {$a}';
$string['weightorextracredit'] = 'Gewichtung oder Zusatzpunkte';
$string['weightoverride'] = 'Gewichtungseinstellung';
$string['weightoverride_help'] = 'Durch das Deaktivieren wird die Gewichtung gelöscht und  wieder die automatische Berechnung der Bewertungen  vorgenommen. Es erfolgt damit keine weitere Korrektur der Bewertungen.';
$string['weights'] = 'Gewichtungen';
$string['weightsadjusted'] = 'Die Gewichtungen wurden auf insgesamt 100 angepasst.';
$string['weightsedit'] = 'Gewichtungen oder Zusatzpunkte ändern';
$string['weightuc'] = 'Berechnete Gewichtung';
$string['writinggradebookinfo'] = 'Einstellungen festhalten';
$string['xml'] = 'XML';
$string['yes'] = 'Ja';
$string['yourgrade'] = 'Ihre Bewertung';
