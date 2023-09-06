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
 * Strings for component 'offlinequiz_statistics', language 'de', version '4.1'.
 *
 * @package     offlinequiz_statistics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actualresponse'] = 'Aktuelle Antwort';
$string['allattempts'] = 'Alle Ergebnisse';
$string['allattemptsavg'] = 'Durchschnittliche erreichte Bewertung';
$string['allattemptscount'] = 'Gesamtzahl an vollständig bewerteten Ergebnissen';
$string['allgroups'] = 'Alle Gruppen';
$string['analysisofresponses'] = 'Antwortanalyse';
$string['analysisofresponsesfor'] = 'Antwortanalyse für {$a}';
$string['attempts'] = 'Ergebnisse';
$string['attemptsall'] = 'Alle Ergebnisse';
$string['attemptsfirst'] = 'Erster Versuch';
$string['backtoquestionsandanswers'] = 'Zurück zur Tabelle';
$string['bestgrade'] = 'Höchste erreichte Bewertung';
$string['calculatefrom'] = 'Statistik berechnen aus';
$string['cic'] = 'Koeffizient interner Konsistenz (Cronbachs Alpha)';
$string['completestatsfilename'] = 'Vollständige Statistiken';
$string['correct'] = 'Richtig beantwortet';
$string['count'] = 'Ankreuzungen';
$string['coursename'] = 'Kursname';
$string['detailedanalysis'] = 'Mehr Details zu den Antworten dieser Frage';
$string['differentquestions'] = 'Ihre Offline-Test-Gruppen enthalten unterschiedliche Fragen.';
$string['differentsumgrades'] = 'Ihre Offline-Test-Gruppen haben unterschiedliche maximale Bewertungen ({$a}).
 Deshalb können mehrere Werte, wie z.B. "Durchschnittliche erreichte Bewertung", "Median" und "Standardabweichung" für den Gesamttest nicht berechnet werden. Die Berechnung kann nur auf Basis
der einzelnen Gruppen erfolgen. Bitte wählen Sie eine Gruppe aus!';
$string['discrimination_index'] = 'Diskriminationsindex';
$string['discriminative_efficiency'] = 'Unterscheidungs-Effizienz';
$string['downloadeverything'] = 'Bericht herunterladen als';
$string['duration'] = 'Geöffnet für';
$string['effective_weight'] = 'Effektive Gewichtung';
$string['errordeleting'] = 'Fehler beim Löschen von {$a} Datensätzen.';
$string['erroritemappearsmorethanoncewithdifferentweight'] = 'Frage ({$a}) erscheint mehrfach im Test mit unterschiedlichen Gewichtungen. Dies wird bei der Erstellung der Statistik nicht unterstützt und kann zu unzuverlässigen Auswertungen führen.';
$string['errormedian'] = 'Fehler beim Ermitteln des Durchschnitts';
$string['errorpowerquestions'] = 'Fehler beim Ermitteln von Daten zur Berechnung der Varianz für Fragebewertungen';
$string['errorpowers'] = 'Fehler beim Ermitteln von Daten zur Berechnung der Varianz für Testbewertungen';
$string['errorrandom'] = 'Es ist ein Fehler bei den Daten des Unterthemas aufgetreten.';
$string['errorratio'] = 'Fehlerquotient';
$string['errorstatisticsquestions'] = 'Fehler beim Ermitteln von Daten zur Berechnung der Statistiken für Fragebewertungen';
$string['facility'] = 'Leichtigkeitsindex';
$string['firstattempts'] = 'Erste Versuche';
$string['firstattemptsavg'] = 'Durchschnitt bei erstem Versuch';
$string['firstattemptscount'] = 'Anzahl der vollständig bewerteten ersten Versuche';
$string['frequency'] = 'Frequenz';
$string['intended_weight'] = 'Beabsichtigte Gewichtung';
$string['kurtosis'] = 'Wölbung der Bewertungsverteilung (Kurtosis)';
$string['lastcalculated'] = 'Seit der letzten Berechnung ({$a->lastcalculated}) gab es {$a->count} neue Ergebnisse.';
$string['maxgrade'] = 'Maximal mögliche Bewertung';
$string['median'] = 'Median der Bewertungen';
$string['modelresponse'] = 'Musterantwort';
$string['negcovar'] = 'Negative Kovarianz der Bewertung mit der Bewertung aller Ergebnisse';
$string['negcovar_help'] = '<p>Die Bewertung dieser Frage in diesem Satz von Ergebnissen im Test ändert sich in der entgegengesetzten Weise zur Bewertung des gesamten Ergebnisse. Das bedeutet, dass die Bewertung des gesamten Ergebnisses dazu neigt unter dem Durchschnitt zu liegen, wenn die Bewertung für diesen Rang über dem Durchschnitt liegt und umgekehrt. </p>
<p>Unsere Gleichung für eine effektive Fragen-Gewichtung kann in diesem Fall nicht berechnet werden. Die Berechnungen der effektiven Fragen-Gewichtung für andere Fragen in diesem Test sind gleich der effektiven Fragen-Gewichtung für diese Fragen, wenn den hervorgehobenen Fragen mit einer negativen Kovarianz die maximale Bewertung von Null gegeben wird.</p>
<p>Wenn Sie einen Test bearbeiten und dieser/n Frage(n) mit einer negativen Kovarianz eine maximale Bewertung von Null zuweisen, wird die effektive Fragen-Gewichtung dieser Fragen Null sein und die echte effektive Fragen-Gewichtung anderer Fragen ist gleich der eben berechneten.</p>';
$string['nostudentsingroup'] = 'In dieser Gruppe sind bisher keine Teilnehmer/innen';
$string['offlinequizinformation'] = 'Offline-Test Informationen';
$string['offlinequizname'] = 'Offline-Test Name';
$string['offlinequizoverallstatistics'] = 'Offline-Test Statistiken';
$string['offlinequizstructureanalysis'] = 'Offline-Test Strukturelle Analyse';
$string['optiongrade'] = 'Teilbewertung';
$string['partially'] = 'Teilweise richtig beantwortet';
$string['partofquestion'] = '#Antwort';
$string['pluginname'] = 'Offline-Test Statistiken';
$string['position'] = 'Position';
$string['positions'] = 'Position(en)';
$string['preferencespage'] = 'Einstellungen für diese Seite';
$string['preferencessave'] = 'Einstellungen speichern';
$string['privacy:metadata'] = 'Dieses Plugin speichert keine personenbezogenen Daten.';
$string['questionandanswerstats'] = 'Fragen und Antworten';
$string['questionandanswerstatsheader'] = 'Fragen- und Antwortanalyse';
$string['questioninformation'] = 'Information zur Frage';
$string['questionname'] = 'Frage';
$string['questionnumber'] = 'F#';
$string['questionstatistics'] = 'Statistik zur Frage';
$string['questionstats'] = 'Fragenanalyse';
$string['questionstatsfilename'] = 'Fragestatistik';
$string['questionstatsheader'] = 'Fragenanalyse';
$string['questiontype'] = 'Typ der Frage';
$string['random_guess_score'] = 'Zufällig angenommene Punktezahl';
$string['recalculatenow'] = 'Jetzt neu berechnen';
$string['remarks'] = 'Anmerkungen';
$string['response'] = 'Antwort';
$string['skewness'] = 'Schiefe der Bewertungsverteilung';
$string['standarddeviation'] = 'Standardabweichung';
$string['standarddeviationq'] = 'Standardabweichung';
$string['standarderror'] = 'Standardfehler';
$string['statistics'] = 'Statistik';
$string['statistics:componentname'] = 'Teststatistik-Report';
$string['statistics:view'] = 'Ansehen des Statistik-Reports';
$string['statisticsforgroup'] = 'Gruppe';
$string['statisticshelp'] = 'Hilfe zu Offline-Test Statistiken';
$string['statisticsreport'] = 'Statistik-Report';
$string['statisticsreportgraph'] = 'Statistik für Fragepositionen';
$string['statsfor'] = 'Statistik (für {$a})';
$string['statsoverview'] = 'Übersicht';
$string['statsoverviewheader'] = 'Test-Informationen';
$string['worstgrade'] = 'Niedrigste erreichte Bewertung';
$string['wrong'] = 'Falsch beantwortet';
