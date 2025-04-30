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
 * Strings for component 'qbehaviour_deferredcbm', language 'de', version '4.4'.
 *
 * @package     qbehaviour_deferredcbm
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Genauigkeit';
$string['accuracyandbonus'] = 'Genauigkeit + Bonus';
$string['assumingcertainty'] = 'Sie haben nicht angegeben, wie sicher Sie sich Ihrer Antwort sind. Vermutlich: {$a}.';
$string['averagecbmmark'] = 'Durchschnittlicher CBM Wert';
$string['basemark'] = 'Basiswert {$a}';
$string['breakdownbycertainty'] = 'Unterteilung nach Gewissheit';
$string['cbmbonus'] = 'CBM-Bonus';
$string['cbmgradeexplanation'] = 'Für CBM wird die Bewertung oben relativ zum Höchstwert aller richtigen bei C=1 gezeigt.';
$string['cbmgrades'] = 'CBM Bewertungen';
$string['cbmgrades_help'] = 'Jede richtige Antwort mit dem Wert C=1 (geringe Gewissheit) führt zu einer 100% Bewertung bei der Gewissheits-basierten Bewertung (Certainty Based Marking = CBM). Die Bewertung der Frage kann auch dreimal so hoch sein, wenn die richtige Antwort mit hoher Gewissheit (C=3) verbunden ist. Fehleinschätzungen bei der Gewissheit über die Antwort beeinflussen die Bewertung sehr viel stärker als die Angabe von Unsicherheit.

**Genauigkeit** ist der Prozentsatz richtiger Antworten, wobei die Gewissheit ignoriert, aber die Höchstnote jeder Frage gewichtet wird. Die erfolgreiche Unterscheidung zwischen mehr und weniger zuverlässigen Antworten ergibt eine bessere Bewertung als die Auswahl der gleichen Gewissheit für jede Frage. Dies spiegelt sich im **CBM-Bonus** wider. **Genauigkeit** + **CBM-Bonus** ist ein besseres Maß für Wissen als **Genauigkeit**. Missverständnisse können zu einem negativen Bonus führen, einer Warnung, sich genau anzusehen, was bekannt ist und was nicht.';
$string['cbmgrades_link'] = 'qbehaviour/deferredcbm/certaintygrade';
$string['cbmmark'] = 'CBM-Wert {$a}';
$string['certainty'] = 'Gewissheit';
$string['certainty-1'] = 'Keine Idee';
$string['certainty1'] = 'C=1 Nicht sehr (< 67%)';
$string['certainty2'] = 'C=2 Ziemlich (über 67%)';
$string['certainty3'] = 'C=3 Sehr (über 80%)';
$string['certainty_help'] = 'Gewissheits-begründete Bewertung berücksichtigt bei der Bewertung, wie sicher die Antwortgeber sich ihrer Antwort sind. Folgende Level werden berücksichtigt:

Level | C=1 (Unsicher) | C=2 (mittel) | C=3 (sehr sicher)
------------------- | ------------ | --------- | ----------------
Bewertung bei richtig | 1| 2 | 3
Bewertung bei falsch | 0 | -2 | -6
Wahrscheinlichkeit für richtig | <67 % | 67-80 % | >80 %

Beste Bewertungen werden erzielt, wenn man die eigene Gewissheit richtig einschätzt. Wenn Sie z.B. glauben, mit einer Wahrscheinlichkeit von 1 zu 3 sei die Antwort falsch, so sollten Sie C=1 eingeben, um eine negative Bewertung zu vermeiden.';
$string['certainty_link'] = 'qbehaviour/deferredcbm/certainty';
$string['certaintyshort-1'] = 'Keine Idee';
$string['certaintyshort1'] = 'C=1';
$string['certaintyshort2'] = 'C=2';
$string['certaintyshort3'] = 'C=3';
$string['dontknow'] = 'Keine Idee';
$string['foransweredquestions'] = 'Ergebnisse für die {$a} beantworteten Fragen';
$string['forentirequiz'] = 'Ergebnisse für den gesamten Test ({$a} Fragen)';
$string['howcertainareyou'] = 'Wie sicher sind Sie? {$a->help}: {$a->choices}';
$string['judgementok'] = 'OK';
$string['judgementsummary'] = 'Antworten: {$a->responses}. Genauigkeit: {$a->fraction}. (Optimaler Bereich von {$a->idealrangelow} bis {$a->idealrangehigh}). Sie haben {$a->judgement} erreicht.';
$string['noquestions'] = 'Keine Antworten';
$string['overconfident'] = 'zu selbstsicher';
$string['pluginname'] = 'Spätere Auswertung (mit Selbsteinschätzung)';
$string['privacy:metadata'] = 'Der Verzögerte Feedback Modus mit Bestimmtheit des Frageverhalten-Plugins speichert keine personenbezogenen Daten.';
$string['slightlyoverconfident'] = 'etwas zu selbstsicher';
$string['slightlyunderconfident'] = 'etwas zu wenig selbstsicher';
$string['underconfident'] = 'zu wenig selbstsicher';
$string['weightx'] = 'Gewichtung {$a}';
