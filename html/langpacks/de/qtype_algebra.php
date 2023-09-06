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
 * Strings for component 'qtype_algebra', language 'de', version '4.1'.
 *
 * @package     qtype_algebra
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreanswerblanks'] = 'Leerfelder für {no} weitere Antworten';
$string['addmorevariableblanks'] = 'Leerfelder für {no} weitere Variablen';
$string['algebraoptions'] = 'Optionen';
$string['allfunctions'] = 'Alle Funktionen';
$string['allowedfuncs'] = 'Erlaubte Funktionen';
$string['allowedfuncs_help'] = '**Noch nicht implementiert**

Mit diesen Steuerelementen können Sie die Funktionen einschränken, die die Studierenden in ihren Antworten verwenden können. Wenn die Schaltfläche "Alle" markiert ist, dann gibt es keine Einschränkungen für Funktionen, die die Studierenden in ihren Antworten verwenden dürfen. Dies ist der Standardfall. Um die erlaubten Funktionen einzuschränken, deaktivieren Sie das Kontrollkästchen "Alle" und wählen Sie die Funktionen aus, die Sie zulassen möchten.';
$string['allowedfunctions'] = 'Erlaubte Funktionen';
$string['answer'] = 'Antwort: {$a}';
$string['answerboxprefix'] = 'Zeichenkette, die dem Antwortfeld bei der Anzeige der Frage vorangestellt werden soll';
$string['answermustbegiven'] = 'Sie müssen eine Antwort eingeben, wenn eine Bewertung oder ein Feedback vorhanden ist.';
$string['answerno'] = 'Antwort {$a}';
$string['answerprefix'] = 'Beschriftung des Antwortfeldes';
$string['answerprefix_help'] = 'Der hier eingegebene Text wird vor der Eingabebox angezeigt, in der Studierende ihre Antwort eingeben können. Wenn die Frage zum Beispiel nach einer Funktion f(x) fragt, kann "f(x)= " in dieses Feld eingegeben werden.';
$string['answerx'] = 'Antwort {no}';
$string['badclosebracket'] = 'Ungültige schließende Klammer gefunden';
$string['badequivtype'] = 'Ungültiger Typ: Es ist nur möglich, Variablen mit anderen Variablen zu vergleichen';
$string['badfuncargs'] = 'Ungültige Argumente für die Funktion \'{$a}\'';
$string['braces'] = '\\(…\\)';
$string['brackets'] = '\\[...\\]';
$string['cdot'] = '\\cdot';
$string['checktolerance'] = 'Kontrolltoleranz';
$string['compalgorithm'] = 'Vergleichsalgorithmus';
$string['compareby'] = 'Vergleichsalgorithmus';
$string['compareby_help'] = 'Wählt die Methode aus, mit der die Antworten der Studierenden mit den Antworten auf alle Fragen verglichen werden. Die verschiedenen Möglichkeiten sind:

SAGE: verwendet die Open Source <a href="http://www.sagemath.org/">SAGE</a>
Mathematiksoftware, um einen vollständigen symbolischen algebraischen Vergleich durchzuführen.

Auswertung: Diese Methode generiert Zufallszahlen für die Fragevariablen und wertet dann sowohl die Studierendenantwort als auch die Antwort auf die Frage für diese Menge von Werten.

Äquivalenz:
Dies ist die einfachste aller Methoden. Sie führt nur die grundlegendsten Vergleiche zwischen Ausdrücken.';
$string['compareequiv'] = 'Äquivalenz';
$string['compareeval'] = 'Auswertung';
$string['comparesage'] = 'SAGE';
$string['correctansweris'] = 'Die richtige Antwort ist : {$a}. Das ergibt';
$string['correctanswers'] = 'Richtige Antworten';
$string['decimal'] = ',';
$string['defaultmethod'] = 'Standardvergleichsmethode';
$string['disallow'] = 'Unerlaubte Antwort';
$string['disallow_help'] = 'Enthält einen Ausdruck, der nicht als Antwort erlaubt sein wird. Studierende, die Antworten angeben, die dieser entsprechen, werden keine Bewertung erhalten, auch wenn die Antwort die Frage richtig beantworten würde.';
$string['disallowans'] = 'Unerlaubte Antwort';
$string['disallowanswer'] = 'Unerlaubte Antwort';
$string['displayresponse'] = 'Ausgabe anzeigen';
$string['dollar'] = '$…$';
$string['dollars'] = '$$...$$';
$string['duplicatevar'] = 'Doppelter Variablenname: \'{$a}\' ist bereits definiert.';
$string['dynamic'] = 'Dynamische AJAX-Anfrage verwenden';
$string['editingalgebra'] = 'Bearbeiten einer Algebra-Frage';
$string['evalchecks'] = 'Bewertungscheck';
$string['exceptionmessage'] = '{$a}';
$string['filloutoneanswer'] = 'Sie müssen mindestens eine Antwortmöglichkeit eingeben. Antworten, die Sie nicht eingeben, werden nicht berücksichtigt. Die erste passende Antwort wird zur Ermittlung der Punktzahl und des Feedbacks herangezogen. Nur die oben definierten Variablen sind erlaubt.';
$string['filloutonevariable'] = 'Sie müssen zumindest eine Variable angeben.';
$string['formuladisplay'] = 'Methode zur Anzeige der Antwortformel';
$string['host'] = 'Host-Url des SAGE-Servers';
$string['iframe'] = 'iframe-Element verwenden';
$string['illegalplusminus'] = '+ oder - an einer ungültigen Stelle gefunden';
$string['illegalvarname'] = 'Unzulässiger Variablenname \'{$a}\': gleicher Name wie eine Parserfunktion oder spezielle Konstante.';
$string['invalidanswer'] = 'Ungültige oder nicht erkannte Antwort';
$string['mismatchedbracket'] = 'Nicht übereinstimmende Klammern: Offenes und geschlossenes Klammerpaar nicht vom gleichen Typ \'{$a}\'';
$string['mismatchedcloseb'] = 'Nicht übereinstimmende Klammern: Geschlossene Klammer ohne offene Klammer gefunden';
$string['mismatchedopenb'] = 'Nicht übereinstimmende Klammern: Offene Klammer ohne geschlossene Klammer gefunden';
$string['missingonearg'] = 'Syntaxfehler: Das Argument des Operators \'{$a}\' fehlt';
$string['missingtwoargs'] = 'Syntaxfehler: Der Operator \'{$a}\' erfordert zwei Argumente';
$string['morethantwoargs'] = 'Versuch, einen Begriff mit mehr als 2 Argumenten zu vergleichen - kein Code für diesen Fall!';
$string['multiplyoperator'] = 'TeX-Operator für Multiplikation';
$string['nargswrong'] = 'Falsche Anzahl von Argumenten für den Begriff \'{$a}\'';
$string['nchecks'] = 'Anzahl von Bewertungschecks';
$string['nchecks_help'] = 'Anzahl der im Bewertungsvergleichsalgorithmus verwendeten Bewertungschecks';
$string['noevaluate'] = 'Die Evaluierungsmethode für den Begriff \'{$a}\' wurde nicht implementiert';
$string['notanumber'] = 'Ungültiger Wert: Eine Zahl ist notwendig.';
$string['notenoughanswers'] = 'Sie müssen mindestens eine Antwort eingeben.';
$string['notenoughvars'] = 'Sie müssen mindestens eine Variable eingeben.';
$string['notopterm'] = 'Syntaxfehler: Konnte nicht auf einen einzigen Operator der obersten Ebene reduziert werden';
$string['novarmax'] = 'Für die Variable wurde keine Höchstgrenze festgelegt.';
$string['novarmin'] = 'Für die Variable wurde keine Mindestgrenze festgelegt.';
$string['options'] = 'Optionen';
$string['parseerror'] = 'Fehler beim Parsing der Funktion: \'{$a}\'';
$string['pluginname'] = 'Algebra';
$string['pluginname_help'] = 'Die Studierenden geben eine Formel als Antwort ein, die eine oder mehrere Variablen enthält. Die Korrektheit wird mit einer von 3 verschiedenen Methoden ausgewertet.';
$string['pluginname_link'] = 'question/type/algebra';
$string['pluginnameadding'] = 'Algebra-Frage hinzufügen';
$string['pluginnameediting'] = 'Algebra-Frage bearbeiten';
$string['pluginnamesummary'] = 'Die Studierenden geben eine Formel ein, die eine oder mehrere Variablen enthalten kann. Die Korrektheit wird mit einer von 3 verschiedenen Methoden bewertet.';
$string['port'] = 'Port des SAGE-Servers';
$string['privacy:metadata'] = 'Das Plugin für den Fragetyp Algebra speichert keine personenbezogenen Daten.';
$string['restoreqdbfailed'] = 'Wiederherstellung der Algebra-Frage fehlgeschlagen: Datenbank-Schreibfehler';
$string['restorevardbfailed'] = 'Wiederherstellung der Algebra-Frage-Variable fehlgeschlagen: Datenbank-Schreibfehler';
$string['texdelimiters'] = 'Begrenzer für TeX-Ausdrücke';
$string['times'] = '\\times';
$string['tolerance'] = 'Toleranz für Bewertungschecks';
$string['tolerance_help'] = 'Bestimmt die maximale Differenz zwischen der numerischen Bewertung der Schülerantwort und den Antworten auf die Frage, die als Übereinstimmung zählen darf.';
$string['toleranceltzero'] = 'Die Toleranz muss größer oder gleich Null sein.';
$string['undeclaredvar'] = 'Nicht deklarierte Variable \'{$a}\' gefunden';
$string['undefinedfunction'] = 'Undefinierte Funktion \'{$a}\'';
$string['undefinedvar'] = 'Undefinierte Variable(n) {$a} in einer oder mehreren Antworten verwendet.';
$string['undefinedvariable'] = 'Undefinierte Variable \'{$a}\' bei numerischer Auswertung eines Ausdrucks gefunden';
$string['unknownterm'] = 'Syntaxfehler: Unbekannter Term bei \'{$a}\' im Ausdruck gefunden';
$string['unusedvar'] = 'Diese Variable wird von keiner Antwort genutzt.';
$string['uri'] = 'URL des SAGE-Servers';
$string['variable'] = 'Variable';
$string['variable_help'] = 'Alle Variablenbezeichner, die in Antworten benutzt werden, müssen hier eingetragen werden. Minimal- und Maximalwerte werden nur benötigt, wenn als Vergleichsalgorithmus Evaluation benutzt wird.';
$string['variablename'] = 'Name';
$string['variableno'] = 'Variable {$a}';
$string['variables'] = 'Variablen';
$string['variablex'] = 'Variable {no}';
$string['varmax'] = 'Maximalwert';
$string['varmin'] = 'Minimalwert';
$string['varmingtmax'] = 'Der Minimalwert muss kleiner als der Maximalwert sein.';
