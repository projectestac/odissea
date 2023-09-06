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
 * Strings for component 'qtype_formulas', language 'de', version '4.1'.
 *
 * @package     qtype_formulas
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abserror'] = 'Absoluter Fehler';
$string['addmorepartsblanks'] = 'Vorlage für {no} weitere Teilfragen';
$string['algebraic_formula'] = 'Algebraische Formel';
$string['answer'] = 'Antwort*';
$string['answer_help'] = '**Erforderlich**
muss je nach gewähltem Antworttyp eine Liste von Zahlen oder eine Liste von Zeichenketten sein. Wenn es nur eine Antwort gibt, kann eine Zahl oder eine Zeichenkette direkt eingegeben werden. Bitte beachten Sie, dass die Anzahl der Elemente in der Liste die Anzahl der Antwortfelder für diesen Teil bestimmt.

<pre class="prettyprint">123<br>[1, 0, 0, 1]<br>a<br>[1, a, b]<br>"exp(-a t)"<br>["vx t","vy t - 0.5 a t^2"]</pre>';
$string['answercombinedunitmulti'] = 'Antwortzahl und Einheit für Teil {$a->part}';
$string['answercombinedunitsingle'] = 'Antwort und Einheit';
$string['answercoordinatemulti'] = 'Antwortfeld {$a->numanswer} für Teilfrage {$a->part}';
$string['answercoordinatesingle'] = 'Antwortfeld {$a->numanswer}';
$string['answermark'] = 'Bewertung für Teilfrage*';
$string['answermark_help'] = '**Erforderlich**.
Die Bewertung für die Antwort auf diesen Teil, die eine Zahl größer als 0 sein sollte.
Die Standardbewertung für die gesamte Frage ist die Summe der Bewertungen aller Teile.

Hinweis: Wenn das Bewertungsfeld für diesen Teil leer bleibt, wird der Teil beim Speichern der Frage gelöscht.';
$string['answermulti'] = 'Antwort für Teilfragen {$a->part}';
$string['answerno'] = 'Teilfrage {$a}';
$string['answersingle'] = 'Antwort';
$string['answertype'] = 'Antworttyp';
$string['answertype_help'] = 'Es gibt vier Antworttypen.

Zahlen, numerische und numerische Formelantworten erfordern eine Zahl oder eine Liste von Zahlen als Antwort.

Die Antworten auf algebraische Formeln erfordern eine Zeichenkette oder eine Liste von Zeichenketten als Antwort.

Für die verschiedenen Antworttypen gelten unterschiedliche Einschränkungen bei der Eingabe der Antworten, so dass die Schüler wissen müssen, wie sie einzugeben sind. Die Formatprüfung im Fragencode wird bei der Eingabe darauf hinweisen, wenn die Antwort in einem falschen Format eingegeben wurde. Bitte lesen Sie die Dokumentation für Details.';
$string['answertype_link'] = 'https://moodleformulas.org/';
$string['answerunitmulti'] = 'Einheit für Teilfrage {$a->part}';
$string['answerunitsingle'] = 'Einheit';
$string['checkvarshdr'] = 'Instanziierung von Variablen prüfen';
$string['choiceno'] = 'Nein';
$string['choiceyes'] = 'Ja';
$string['commonsiunit'] = 'SI-Einheit';
$string['correctansweris'] = 'Eine mögliche Antwort ist: {$a}';
$string['correctfeedback'] = 'Für jede richtige Antwort gilt';
$string['correctfeedback_help'] = 'Dieses Feedback wird den Schülerinnen und Schülern gezeigt, die in diesem Teil die Höchstpunktzahl erreicht haben. Es kann globale und lokale Variablen enthalten, die durch ihre entsprechenden Werte ersetzt werden.';
$string['correctness'] = 'Bewertungskriterium*';
$string['correctness_help'] = '**Erforderlich**
Sie können entweder einen relativen Fehler oder einen absoluten Fehler mit Fehlerbereich angeben. Ein relativer Fehler kann nicht für algebraische Antworttypen verwendet werden.

Die genaue Definition eines relativen Fehlers und eines absoluten Fehlers bei mehr als einem Antwortfeld finden Sie in der Dokumentation.';
$string['correctness_link'] = 'https://moodleformulas.org/';
$string['correctnessexpert'] = 'Experte';
$string['correctnesssimple'] = 'Vereinfachter Modus';
$string['defaultanswermark'] = 'Standardbewertung';
$string['defaultanswermark_desc'] = 'Standardbewertung für neue Teilfragen';
$string['defaultanswertype'] = 'Standardantworttyp';
$string['defaultanswertype_desc'] = 'Standard-Antworttyp für neue Teilfragen';
$string['defaultcorrectness'] = 'Standard-Bewertungskriterien';
$string['defaultcorrectness_desc'] = 'Standard-Bewertungskriterien für neue Teilfragen';
$string['defaultunitpenalty'] = 'Standardabzug für Einheiten';
$string['defaultunitpenalty_desc'] = 'Standardabzug für eine falsche Einheit (0-1)';
$string['error_algebraic_var'] = 'Syntaxfehler bei der Definition einer algebraischen Variablen.';
$string['error_answer_missing'] = 'Es wurde keine Antwort definiert.';
$string['error_answerbox_duplicate'] = 'Jeder Antwortfeldplatzhalter kann nur einmal in einer Teilfrage verwendet werden.';
$string['error_answertype_mistmatch'] = 'Antworttyp stimmt nicht überein: Ein numerischer Antworttyp erfordert eine Zahl und ein algebraischer Antworttyp erfordert eine Zeichenkette';
$string['error_criterion'] = 'Das Bewertungskriterium muss mit einer Zahl bewertet werden.';
$string['error_eval_numerical'] = 'Einige Ausdrücke können nicht numerisch ausgewertet werden.';
$string['error_fixed_range'] = 'Syntaxfehler bei der Definition eines Intervalls';
$string['error_forbid_char'] = 'Die Formel oder der Ausdruck enthält verbotene Zeichen oder Operatoren.';
$string['error_forloop'] = 'Syntaxfehler in der for-Schleife.';
$string['error_forloop_expression'] = 'Der Ausdruck der for-Schleife muss eine Liste sein.';
$string['error_forloop_var'] = 'Die Variable der for-Schleife hat noch Fehler.';
$string['error_func_param'] = 'Falsche Anzahl oder falscher Typ von Parametern für die Funktion {$a}()';
$string['error_grading_error'] = 'Bewertungsfehler! Wahrscheinlich ist dies das Ergebnis einer fehlerhaften Importdatei oder einer beschädigten Datenbank.';
$string['error_mark'] = 'Die Bewertung der Antwort muss einen Wert größer als 0 haben.';
$string['error_no_answer'] = 'Mindestens eine Antwort ist erforderlich.';
$string['error_placeholder_format'] = 'Falsches Format des Platzhalters oder verbotene Zeichen.';
$string['error_placeholder_main_duplicate'] = 'Doppelter Platzhalter im Text der Hauptfrage.';
$string['error_placeholder_missing'] = 'Dieser Platzhalter fehlt im Text der Hauptfrage.';
$string['error_placeholder_sub_duplicate'] = 'Dieser Platzhalter ist bereits in einem anderen Teil definiert worden.';
$string['error_placeholder_too_long'] = 'Die Länge des Platzhalters ist auf 40 Zeichen begrenzt.';
$string['error_question_damaged'] = 'Fehler: Die Frage ist beschädigt. Anzahl der Textfragmente und Anzahl der Fragmente sind nicht gleich.';
$string['error_randvars_set_size'] = 'Die Anzahl der generierbaren Elemente in der Menge muss größer als 1 sein.';
$string['error_randvars_type'] = 'Alle Elemente in der Menge müssen genau dieselbe Art und Größe haben.';
$string['error_rule'] = 'Fehler bei der Regelanalyse!';
$string['error_ruleid'] = 'In der Datei mit der ID/dem Namen existiert keine solche Regel.';
$string['error_subexpression_empty'] = 'Ein Unterausdruck ist leer.';
$string['error_syntax'] = 'Syntaxfehler.';
$string['error_unit'] = 'Fehler beim Analysieren der Einheit!';
$string['error_unitpenalty'] = 'Der Abzug muss eine Zahl zwischen 0 und 1 sein.';
$string['error_validation_eval'] = 'Auswertungsfehler!';
$string['error_vars_array_index_nonnumeric'] = 'Nicht-numerische Werte können nicht als Listenindex verwendet werden.';
$string['error_vars_array_index_out_of_range'] = 'List index out of range !!!';
$string['error_vars_array_size'] = 'Die Größe der Liste muss zwischen 1 und 1000 liegen.';
$string['error_vars_array_type'] = 'Die Elemente in derselben Liste müssen vom gleichen Typ sein, entweder eine Zahl oder eine Zeichenkette.';
$string['error_vars_array_unsubscriptable'] = 'Die Variable kann nicht indiziert werden.';
$string['error_vars_bracket_mismatch'] = 'Klammersetzung stimmt nicht.';
$string['error_vars_end_separator'] = 'Es fehlt das Trennzeichen am Ende.';
$string['error_vars_name'] = 'Die Syntax des Variablennamens ist falsch.';
$string['error_vars_reserved'] = 'Die Funktion {$a}() ist reserviert und kann nicht als Variable verwendet werden.';
$string['error_vars_string'] = 'Fehler! Entweder eine Zeichenfolge ohne schließendes Anführungszeichen oder die Verwendung eines nicht akzeptierten Zeichens wie \'.';
$string['error_vars_undefined'] = 'Die Variable \'{$a}\' wurde nicht definiert.';
$string['feedback'] = 'Allgemeines Feedback für diesen Teil';
$string['feedback_help'] = 'Dieses Teilfeedback wird allen Teilnehmer/innen gezeigt. Es kann globale und lokale Variablen enthalten, die durch ihre Werte ersetzt werden.';
$string['functiontakesatleasttwo'] = 'Die Funktion {$a} muss mindestens zwei Argumente haben.';
$string['functiontakesnoargs'] = 'Die Funktion {$a} benötigt keine Argumente.';
$string['functiontakesonearg'] = 'Die Funktion {$a} muss genau ein Argument haben.';
$string['functiontakesoneortwoargs'] = 'The function {$a} must have either one or two arguments';
$string['functiontakesthreeargs'] = 'Die Funktion {$a} muss genau drei Argumente haben.';
$string['functiontakestwoargs'] = 'Die Funktion {$a} muss genau zwei Argumente haben.';
$string['globalvarshdr'] = 'Variablen';
$string['illegalformulasyntax'] = 'Unzulässige Formel-Syntax beginnend mit \'{$a}\'';
$string['incorrectfeedback'] = 'Bei jeder falschen Antwort';
$string['incorrectfeedback_help'] = 'Diese Rückmeldung wird den Teilnehmer/innen gezeigt, die in diesem Teil keine Bewertung erhalten haben. Es kann globale und lokale Variablen enthalten, die durch deren Werte ersetzt werden.';
$string['instantiate'] = 'Instanziieren';
$string['mainq'] = 'Hauptfrage';
$string['modelanswer'] = 'Musterantwort';
$string['none'] = 'Keine';
$string['number'] = 'Zahl';
$string['number_unit'] = 'Zahl und Einheit';
$string['numdataset'] = 'Anzahl Datensätze';
$string['numeric'] = 'Numerischer Ausdruck';
$string['numeric_unit'] = 'Numerischer Ausdruck und Einheit';
$string['numerical_formula'] = 'Numerische Formel';
$string['numerical_formula_unit'] = 'Numerische Formel und Einheit';
$string['otherrule'] = 'Sonstige Regeln';
$string['otherrule_help'] = 'Hier können Fragenautor/innen zusätzliche Umrechnungsregeln für andere akzeptierte Basiseinheiten festlegen. Lesen Sie bitte die Dokumentation für die erweiterten Verwendungsmöglichkeiten.';
$string['partiallycorrectfeedback'] = 'Für jede teilweise richtige Antwort';
$string['partiallycorrectfeedback_help'] = 'Dieses Feedback wird den Teilnehmer/innen gezeigt, die in diesem Teil nicht die Höchstpunktzahl erreicht haben. Es kann globale und lokale Variablen enthalten, die durch deren Werte ersetzt werden.';
$string['placeholder'] = 'Name des Platzhalters';
$string['placeholder_help'] = 'Ein Platzhalter wird verwendet, um die Stelle in der Hauptfrage zu  kennzeichnen, der durch den Inhalt des Teils ersetzt wird. Er ist eine Zeichenfolge aus alphanumerischen Zeichen mit dem Präfix "**#**", z. B. #1, #2a, #2b und #A.

Bleibt dieses Feld leer, wird der Platzhalter am Ende des Hauptfragetextes angehängt.';
$string['pleaseputananswer'] = 'Tragen Sie bitte in jedes Eingabefeld eine Antwort ein.';
$string['pluginname'] = 'Formulas';
$string['pluginname_help'] = 'Für eine Einführung besuchen Sie bitte <a href="https://moodleformulas.org/">moodleformulas.org</a>.

Für eventuelle Fragen besuchen Sie bitte <a href="https://moodleformulas.org/">moodleformulas.org</a>.

Für die Optionen im untenstehenden Bearbeitungsformular gehen Sie bitte zu <a href="https://moodleformulas.org/">moodleformulas.org</a>

Die vollständige Dokumentation finden Sie unter <a href="https://moodleformulas.org/">moodleformulas.org</a>';
$string['pluginname_link'] = 'question/type/formulas';
$string['pluginnameadding'] = 'Hinzufügen einer Formulas-Frage';
$string['pluginnameediting'] = 'Bearbeiten einer Formulas-Frage';
$string['pluginnamesummary'] = 'Fragetyp mit Zufallswerten und Mehrfachantworten:
Die Antwortfelder können an beliebiger Stelle platziert werden, so dass wir Fragen mit verschiedenen Strukturen wie Vektoren, Polynomen oder Matrizes erstellen können.
Andere Funktionen wie die Überprüfung von Einheiten und mehrteilige Fragen sind ebenfalls möglich und einfach zu verwenden.';
$string['postunit'] = 'Einheit';
$string['postunit_help'] = 'Du kannst die Einheit spezifizieren. Dieser Fragetyp ist speziell designed für SI-Einheiten, so steht ein Leerzeichen für das "Produkt" der verschiedenen "Basiseinheiten" und <tt> ^ </tt> wird für Exponenten verwendet.

Auch <tt> / </tt> kann für inverse Exponenten verwendet werden. Jede Permutation der Basiseinheit wird gleich behandelt.

Die Teilnehmer/innen müssen das gleiche Eingabeformat verwenden. Zum Beispiel:
<pre class="prettyprint">1 m<br>0.1 m^2<br>20 m s^(-1)<br>400 kg m/s<br>100 kW</pre>';
$string['previewerror'] = 'Keine Vorschau verfügbar. Überprüfen Sie Ihre Definition von zufälligen Variablen, globalen Variablen, lokalen Variablen von Teilen und Antworten. Ursprüngliche Fehlermeldung:';
$string['privacy:metadata'] = 'Das Plugin für den Fragetyp Formulas speichert keine personenbezogenen Daten.';
$string['qtextpreview'] = 'Vorschau';
$string['questiontext'] = 'Fragentext';
$string['questiontext_help'] = 'Neben dem normalen Fragetext können Sie hier auch globale Variablen und Platzhalter verwenden.

Globale Variablen werden durch ihre Werte ersetzt und Platzhalter werden durch Antworten ersetzt.

Ein einfaches Beispiel mit Variablen <tt> A, B, C </tt> und Platzhaltern <tt> #1, #2, #3 </tt> ist:

<pre class="prettyprint">What is the result of {A} + {B}?<br>{#1}<br>What is the result of {A} - {B}?<br>{#2}<br>What is the result of {C} / {B}?<br>{#3}</pre>';
$string['relerror'] = 'Relativer Fehler';
$string['renew'] = 'Update';
$string['ruleid'] = 'Grundlegende Umrechnungsregeln';
$string['ruleid_help'] = 'Dieser Fragetyp verfügt über ein integriertes System zur Umrechnung von Einheiten und über grundlegende Umrechnungsregeln.

Die grundlegenden Regeln sind die "Gemeinsamen SI-Einheiten", die Standardeinheiten umrechnen, wie z. B. die Längeneinheiten km, m, cm und mm. Diese Option hat keine Auswirkung, wenn keine Einheit verwendet wurde.';
$string['settingusepopup'] = 'Tooltips verwenden';
$string['settingusepopup_desc'] = 'Anzeige der richtigen Antwort und des Feedbacks in einem Tooltip';
$string['subqoptions'] = 'Einstellungen der Einheit';
$string['subqtext'] = 'Text des Frageteils';
$string['subqtext_help'] = 'Hier können die Texte für den Frageteil und die Antwortfelder angegeben werden. Die Platzhalter, die für die Angabe von Antwortfeldern verwendet werden können, sind:

<pre class="prettyprint">{_0}<br>{_1}<br>{_2}<br>...<br>{_u}</pre>

Das  <tt> {_0}, {_1}, {_2} </tt> sind verschiedene Input-Felder für Variablen und <tt> {_u} </tt> ist das Input-Feld für die Einheit.

Alle fehlenden Felder werden automatisch an das Ende des Textes des Teils angehängt. Ein Sonderfall ist, wenn <tt> {_0}, {_u} </tt> nacheinander angegeben werden und es nur ein Antwortfeld und eine Einheit gibt, d. h. <tt> {_0}{_u} </tt>, dann werden sie zu einem einzigen langen Eingabeantwortfeld für Antwort und Einheit zusammengefasst.';
$string['unit'] = 'Einheit';
$string['unitpenalty'] = 'Abzug für falsche Einheit (0-1)*';
$string['unitpenalty_help'] = 'Mit dieser Option legen Sie die Bewertung fest, die Sie dem Schüler für eine falsche Einheit geben wollen.

Sie hat einen Wert zwischen 0 und 1. Wenn sie den Wert 1 hat, müssen die Einheit und die Antwort gleichzeitig richtig sein, um eine Bewertung zu erhalten. Das heißt, die Einheit und Antwort werden als eine Einheit behandelt. Nimmt sie hingegen den Wert 0 an, können die Teilnehmer*innen nur für die richtige Antwort die volle Punktzahl erhalten, alle zufälligen Zeichenfolge am Ende der Antwort haben keine Auswirkung .

Es wird daher empfohlen, den Wert 1 zu verwenden, wenn die Antwort keine zugehörige Einheit hat.';
$string['unsupportedformulafunction'] = 'Die Funktion {$a} wird nicht unterstützt.';
$string['vars1'] = 'Lokale Variablen';
$string['vars1_help'] = 'Sie können hier Variablen auf die gleiche Weise definieren, wie globale Variablen auf der Ebene der Frage definiert werden.
Die hier definierten Variablen können in der Antwort oder im Feedback des Teils verwendet werden und ihr Sichtbarkeitsbereich ist auf diesen Teil beschränkt.';
$string['vars2'] = 'Bewertungsvariablen';
$string['vars2_help'] = 'Alle lokalen Variablen und die Teilnehmerantworten können hier verwendet werden. Siehe Dokumentation für erweiterte Verwendungsmöglichkeiten.';
$string['vars2_link'] = 'https://moodleformulas.org/';
$string['varsdata'] = 'Instanziierte Datensätze';
$string['varsglobal'] = 'Globale Variablen';
$string['varsglobal_help'] = 'Hier können Formeln angegeben werden, um die instanziierten zufälligen Variablen zu manipulieren (alle zufälligen Variablen sind hier verfügbar). Die vollständige Liste der mathematischen Funktionen und Operatoren finden Sie in der Dokumentation.

<pre class="prettyprint">a = 1.11111;<br>b = exp(3);<br>c = A + a + b;<br>d = sin(1.5*pi()) + c;<br>e = round(a, 0);<br>f = [0,1,2,3][A];<br>g = ["zero","one","two","three"][A];<br>distance = sqrt(a*a + b*b);</pre>';
$string['varsglobal_link'] = 'https://moodleformulas.org/';
$string['varsrandom'] = 'Zufällige Variablen';
$string['varsrandom_help'] = 'Zu Beginn eines jeden Versuchs werden für diese Variablen neue Zufallswerte generiert. Dies kann man initiieren, indem man eine Reihe von Elementen definiert, aus denen man auswählen kann:
<pre class="prettyprint">A = {1,2,3};<br>C = {[1,-1], [2,-2], [3,-3]};<br>E = {10:100:10, 100, 1000};</pre>

Die Elemente können Zahlen, Zeichenketten oder Listen davon sein. Zu Beginn eines neuen Versuchs wird ein Element aus der Menge gezogen und der Variablen auf der linken Seite zugewiesen.  Für eine Menge von Zahlen kann auch die Bereichsschreibweise wie 10:100:10 verwendet werden (siehe Beispiel E oben).';
$string['varsrandom_link'] = 'https://moodleformulas.org/';
$string['varsstatistics'] = 'Statistik';
$string['yougotnright'] = 'Sie haben {$a->num} Teilfragen dieser Aufgabe korrekt beantwortet.';
