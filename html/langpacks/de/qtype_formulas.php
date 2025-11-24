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
 * Strings for component 'qtype_formulas', language 'de', version '4.5'.
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
$string['allfieldsempty'] = 'Alle Eingabefelder sind leer.';
$string['answer'] = 'Antwort*';
$string['answer_help'] = '**Erforderlich**
Muss je nach gewähltem Antworttyp eine Liste von Zahlen oder eine Liste von Zeichenketten sein. Wenn es nur eine Antwort gibt, kann eine Zahl oder eine Zeichenkette direkt eingegeben werden. Bitte beachten Sie, dass die Anzahl der Elemente in der Liste die Anzahl der Antwortfelder für diesen Teil bestimmt.

<pre class="prettyprint">123<br>[1, 0, 0, 1]<br>a<br>[1, a, b]<br>"exp(-a t)"<br>["vx t","vy t - 0.5 a t^2"]</pre>';
$string['answercombinedunitmulti'] = 'Antwortzahl und Einheit für Teil {$a->part}';
$string['answercombinedunitsingle'] = 'Antwort und Einheit';
$string['answercoordinatemulti'] = 'Antwortfeld {$a->numanswer} für Teilfrage {$a->part}';
$string['answercoordinatesingle'] = 'Antwortfeld {$a->numanswer}';
$string['answermark'] = 'Bewertung für Teilfrage*';
$string['answermark_help'] = '**Erforderlich**.
Die Bewertung für die Antwort auf diesen Teil, die eine Zahl größer als 0 sein sollte.
Die Standardbewertung für die gesamte Frage ist die Summe der Bewertungen aller Teile.

Hinweis: Wenn das Bewertungsfeld für diesen Teil leer bleibt und keine Antwort erfasst wurde, wird der Teil beim Speichern der Frage gelöscht.';
$string['answermulti'] = 'Antwort für Teilfragen {$a->part}';
$string['answerno'] = 'Teilfrage {$a}';
$string['answernotacceptable'] = 'Die Antwort ist ungültig für den vorgegeben Antworttyp: {$a}.';
$string['answernotunique'] = 'Es gibt weitere richtige Antworten.';
$string['answernotunique_help'] = 'Wenn diese Option aktiviert ist, wird beim Überprüfen eines Versuchs "Eine mögliche Antwort ist: …" statt "Die richtige Antwort ist: …" angezeigt.';
$string['answersingle'] = 'Antwort';
$string['answertype'] = 'Antworttyp';
$string['answertype_help'] = 'Es gibt vier Antworttypen.

Zahlen, numerische und numerische Formelantworten erfordern eine Zahl oder eine Liste von Zahlen als Antwort.

Die Antworten auf algebraische Formeln erfordern eine Zeichenkette oder eine Liste von Zeichenketten als Antwort.

Für die verschiedenen Antworttypen gelten unterschiedliche Einschränkungen bei der Eingabe der Antworten, so dass die Schüler wissen müssen, wie sie einzugeben sind. Die Formatprüfung im Fragencode wird bei der Eingabe darauf hinweisen, wenn die Antwort in einem falschen Format eingegeben wurde. Bitte lesen Sie die Dokumentation für Details.';
$string['answertype_link'] = 'https://dynamiccourseware.org/';
$string['answerunitmulti'] = 'Einheit für Teilfrage {$a->part}';
$string['answerunitsingle'] = 'Einheit';
$string['caretwarning'] = 'Achtung: In Musterantworten steht ^ für XOR, außer bei algebraischen Formeln. Für Potenzen sollte ** verwendet werden.';
$string['checkvarshdr'] = 'Instanziierung von Variablen prüfen';
$string['choiceno'] = 'Nein';
$string['choiceyes'] = 'Ja';
$string['commonsiunit'] = 'SI-Einheiten';
$string['correctansweris'] = 'Eine mögliche Antwort ist: {$a}';
$string['correctfeedback'] = 'Für jede richtige Antwort gilt';
$string['correctfeedback_help'] = 'Dieses Feedback wird den Schülerinnen und Schülern gezeigt, die in diesem Teil die Höchstpunktzahl erreicht haben. Es kann globale und lokale Variablen enthalten, die durch ihre entsprechenden Werte ersetzt werden.';
$string['correctness'] = 'Bewertungskriterium*';
$string['correctness_help'] = '**Erforderlich**
Sie können entweder einen relativen Fehler oder einen absoluten Fehler mit Fehlerbereich angeben. Ein relativer Fehler kann nicht für algebraische Antworttypen verwendet werden.

Die genaue Definition eines relativen Fehlers und eines absoluten Fehlers bei mehr als einem Antwortfeld finden Sie in der Dokumentation.';
$string['correctness_link'] = 'https://dynamiccourseware.org/';
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
$string['defaultwidth_algebraic_formula'] = 'Antworttyp "Algebraische Formel"';
$string['defaultwidth_algebraic_formula_desc'] = 'Standardbreite für Eingabefelder für den Antworttyp "Algebraische Formel"';
$string['defaultwidth_number'] = 'Antworttyp "Zahl"';
$string['defaultwidth_number_desc'] = 'Standardbreite für Eingabefelder für den Antworttyp "Zahl"';
$string['defaultwidth_number_unit'] = 'Kombiniertes Feld für Zahl und Einheit';
$string['defaultwidth_number_unit_desc'] = 'Standardbreite für kombinierte Eingabefelder für Zahl und Einheit';
$string['defaultwidth_numeric'] = 'Antworttyp "Numerisch"';
$string['defaultwidth_numeric_desc'] = 'Standardbreite für Eingabefelder für den Antworttyp "Numerisch"';
$string['defaultwidth_numeric_unit'] = 'Kombiniertes Feld für numerische Antwort und Einheit';
$string['defaultwidth_numeric_unit_desc'] = 'Standardbreite für kombinierte Eingabefelder für numerische Antwort und Einheit';
$string['defaultwidth_numerical_formula'] = 'Antworttyp "Numerische Formel"';
$string['defaultwidth_numerical_formula_desc'] = 'Standardbreite für Eingabefelder für den Antworttyp "Numerische Formel"';
$string['defaultwidth_numerical_formula_unit'] = 'Kombiniertes Feld für numerische Formel und Einheit';
$string['defaultwidth_numerical_formula_unit_desc'] = 'Standardbreite für kombinierte Eingabefelder für numerische Formel und Einheit';
$string['defaultwidth_unit'] = 'Separate Einheit';
$string['defaultwidth_unit_desc'] = 'Standardbreite für separates Eingabefeld für Einheiten';
$string['defaultwidthunit'] = 'Längeneinheit';
$string['defaultwidthunit_desc'] = 'Längeneinheit für die unten festzulegenden Breiten. Die Einheiten "em" oder "rem" entsprechend ungefähr der Breite einer Ziffer.';
$string['error_algebraic_relerr'] = 'Der relative Fehler (_relerr) kann bei Antworten des Typs algebraische Formel nicht verwendet werden.';
$string['error_algebraic_var'] = 'Syntaxfehler bei der Definition einer algebraischen Variablen.';
$string['error_algvar_numbers'] = 'Algebraische Variablen können nur mit einer Liste von Zahlen initialisiert werden.';
$string['error_answer_missing'] = 'Es wurde keine Antwort definiert.';
$string['error_answer_missing_in_part'] = 'Keine Antwort definiert für Teil {$a}.';
$string['error_answerbox_duplicate'] = 'Antwortfeldplatzhalter müssen pro Teilfrage eindeutig sein, zweites Vorkommen von {$a} gefunden.';
$string['error_answertype_mistmatch'] = 'Antworttyp stimmt nicht überein: Ein numerischer Antworttyp erfordert eine Zahl und ein algebraischer Antworttyp erfordert eine Zeichenkette';
$string['error_bitshift_integer'] = 'Bitweise Verschiebung sollte nur mit ganzen Zahlen verwendet werden.';
$string['error_bitshift_negative'] = 'Bitweise Verschiebung um negative Zahl {$a} ist nicht erlaubt.';
$string['error_bitwand_integer'] = 'Bitweises UND sollte nur mit ganzen Zahlen verwendet werden.';
$string['error_bitwor_integer'] = 'Bitweises ODER sollte nur mit ganzen Zahlen verwendet werden.';
$string['error_bitwxor_integer'] = 'Bitweises XOR sollte nur mit ganzen Zahlen verwendet werden.';
$string['error_cannotusealgebraic'] = 'Algebraische Variable \'{$a}\' kann hier nicht verwendet werden.';
$string['error_criterion'] = 'Das Bewertungskriterium muss mit einer Zahl bewertet werden.';
$string['error_criterion_empty'] = 'Das Bewertungskriterium darf nicht leer sein.';
$string['error_damaged_question'] = 'Ungültige Daten. Die Frage könnte beschädigt sein, z.B. bei einem fehlgeschlagenen Import oder einer misslungenen Wiederherstellung.';
$string['error_db_delete'] = 'Eintrag konnte nicht aus der Datenbank gelöscht werden, Tabelle {$a}.';
$string['error_db_missing_options'] = 'Formulas-Frage mit ID {$a} hat keinen «options» Datensatz. Standardeinstellungen verwendet.';
$string['error_db_read'] = 'Lesen der Datenbank nicht möglich, Tabelle {$a}.';
$string['error_db_write'] = 'Lesen in die Datenbank nicht möglich, Tabelle {$a}.';
$string['error_diff_binary_function_needslist'] = 'Wenn map() mit der binären Funktion \'{$a}\' verwendet wird, muss mindestens ein Argument eine Liste sein.';
$string['error_diff_binary_function_two'] = 'Wenn map() mit der binären Funktion \'{$a}\' verwendet wird, werden zwei Argumente erwartet.';
$string['error_diff_binary_operator_needslist'] = 'Wenn map() mit dem binären Operator \'{$a}\' verwendet wird, muss mindestens ein Argument eine Liste sein.';
$string['error_diff_binary_operator_two'] = 'Wenn map() mit dem binären Operator \'{$a}\' verwendet wird, werden zwei Argumente erwartet.';
$string['error_diff_binary_samesize'] = 'Wenn map() mit zwei Listen verwendet wird, müssen diese die gleiche Größe haben.';
$string['error_diff_first'] = 'Das erste Argument von diff() muss eine Liste sein.';
$string['error_diff_first_invalid'] = '\'{$a}\' ist kein gültiges erstes Argument für die Funktion map().';
$string['error_diff_firstlist_content'] = 'Bei der Verwendung von diff() sollte die erste Liste nur Zahlen oder nur Zeichenketten enthalten.';
$string['error_diff_firstlist_mismatch'] = 'diff(): unverträgliche Datentypen im Element #{$a} (von 0 gezählt) der ersten Liste.';
$string['error_diff_function_more_args'] = 'Die Funktion \'{$a}\' kann nicht mit map() verwendet werden, weil sie mehr als zwei Argumente erwartet.';
$string['error_diff_function_no_args'] = 'Die Funktion \'{$a}\' kann nicht mit map() verwendet werden, weil sie keine Argumente annimmt.';
$string['error_diff_samesize'] = 'diff() benötigt zwei Listen der gleichen Größe.';
$string['error_diff_second'] = 'Das zweite Argument von diff() muss eine Liste sein.';
$string['error_diff_secondlist_mismatch'] = 'diff(): unverträgliche Datentypen im Element #{$a} (von 0 gezählt) der zweiten Liste.';
$string['error_diff_third'] = 'Ein drittes Argument ist bei diff() nur möglich, wenn mit Listen von Zeichenketten gearbeitet wird.';
$string['error_diff_unary_function'] = 'Bei der Verwendung von map() mit der unären Funktion \'{$a}\' wird nur eine Liste akzeptiert.';
$string['error_diff_unary_needslist'] = 'Bei der Verwendung von map() mit der unären Funktion \'{$a}\' muss das Argument eine Liste sein.';
$string['error_diff_unary_operator'] = 'Bei der Verwendung von map() mit dem unären Operator \'{$a}\' wird nur eine Liste akzeptiert.';
$string['error_distribution_outcomes'] = '{$a} erwartet als Anzahl erfolgreicher Ausgänge eine nicht-negative ganze Zahl.';
$string['error_distribution_tries'] = '{$a} erwartet als Anzahl Versuche eine nicht-negative ganze Zahl.';
$string['error_divzero'] = 'Division durch Null ist nicht definiert.';
$string['error_emptyrange'] = 'Auswertungsfehler: Bereich von {$a->start} bis {$a->end} mit Schrittweite {$a-step} ist leer.';
$string['error_emptystack'] = 'Auswertungsfehler: Stack ist leer. Haben Sie genügend Argumente für die Funktion oder den Operator übergeben?';
$string['error_eval_numerical'] = 'Einige Ausdrücke können nicht numerisch ausgewertet werden.';
$string['error_evaluate_invocation'] = 'Ungültiger Aufruf von {$a}.';
$string['error_evaluation_unknown_nan_inf'] = 'Unbekannter Fehler bei der Anwendung des Operators ($a}. Das Ergebnis war (positiv oder negativ) unendlich oder NAN (keine Zahl).';
$string['error_expectbraceorstatement'] = 'Syntaxfehler: { oder Anweisung erwartet.';
$string['error_expectbracketorvarname'] = 'Syntaxfehler: [ oder Variablenname erwartet.';
$string['error_expectclosingparen'] = 'Syntaxfehler: ) erwartet.';
$string['error_expected_intindex'] = 'Auswertungsfehler: Index sollte eine Ganzzahl sein, Eingabe war \'{$a}\'.';
$string['error_expected_number'] = 'Zahl erwartet.';
$string['error_expected_number_found'] = 'Zahl erwartet, Eingabe war {$a->found}.';
$string['error_expected_number_found_algebraicvar'] = 'Zahl erwartet, Eingabe war eine algebraische Variable.';
$string['error_expected_number_found_list'] = 'Zahl erwartet, Eingabe war eine Liste.';
$string['error_expected_scalar'] = 'Skalar erwartet.';
$string['error_expected_scalar_found'] = 'Skalar erwartet, Eingabe war {$a->found}.';
$string['error_expected_scalar_found_algebraicvar'] = 'Skalar erwartet, Eingabe war eine algebraische Variable.';
$string['error_expected_scalar_found_list'] = 'Skalar erwartet, Eingabe war eine Liste.';
$string['error_expects_number'] = '{$a->who} erwartet eine Zahl.';
$string['error_expects_number_found'] = '{$a->who} erwartet eine Zahl, Eingabe war {$a->found}.';
$string['error_expects_scalar'] = '{$a->who} erwartet einen Skalar.';
$string['error_expects_scalar_found'] = '{$a->who} erwartet einen Skalar, Eingabe war {$a->found}.';
$string['error_fact_toolarge'] = 'Kann {$a}! auf dieser Plattform nicht berechnen, das Resultat ist größer als PHP_MAX_INT.';
$string['error_fixed_range'] = 'Syntaxfehler bei der Definition eines Intervalls';
$string['error_for_expectcolon'] = 'Syntaxfehler: : erwartet.';
$string['error_for_expectidentifier'] = 'Syntaxfehler: Bezeichner erwartet.';
$string['error_for_expectparen'] = 'Syntaxfehler: ( erwartet nach for.';
$string['error_forbid_char'] = 'Die Formel oder der Ausdruck enthält verbotene Zeichen oder Operatoren.';
$string['error_forgotoperator'] = 'Syntaxfehler: Haben Sie einen Operator vergessen?';
$string['error_forloop'] = 'Syntaxfehler in der for-Schleife.';
$string['error_forloop_expression'] = 'Der Ausdruck der for-Schleife muss eine Liste sein.';
$string['error_forloop_var'] = 'Die Variable der for-Schleife hat noch Fehler.';
$string['error_func_all_lists'] = '{$a} erwartet Listen als Argumente.';
$string['error_func_argcount'] = 'Ungültige Anzahl Argumente für die Funktion \'{$a->function}\': {$a->count}.';
$string['error_func_first_int'] = '{$a} erwartet als erstes Argument eine ganze Zahl.';
$string['error_func_first_list'] = '{$a} erwartet als erstes Argument eine Liste.';
$string['error_func_first_nnegint'] = '{$a} erwartet als erstes Argument eine nicht-negative, ganze Zahl.';
$string['error_func_first_number'] = '{$a} erwartet als erstes Argument eine Zahl.';
$string['error_func_first_nzeroint'] = '{$a} erwartet als erstes Argument eine von Null verschiedene, ganze Zahl.';
$string['error_func_first_posint'] = '{$a} erwartet als erstes Argument eine positive, ganze Zahl.';
$string['error_func_nan'] = 'Ergebnis der Funktion \'{$a}\' war keine Zahl.';
$string['error_func_nnegint'] = '{$a} erwartet als Argument eine nicht-negative, ganze Zahl.';
$string['error_func_param'] = 'Falsche Anzahl oder falscher Typ von Parametern für die Funktion {$a}()';
$string['error_func_paren'] = 'Syntaxfehler: Funktionsname muss von öffnender Klammer gefolgt werden.';
$string['error_func_positive'] = '{$a} erwartet als Argument eine positive, ganze Zahl.';
$string['error_func_second_int'] = '{$a} erwartet als zweites Argument eine ganze Zahl.';
$string['error_func_second_nnegint'] = '{$a} erwartet als zweites Argument eine nicht-negative, ganze Zahl.';
$string['error_func_second_nzeronum'] = '{$a} erwartet als zweites Argument eine von Null verschiedene Zahl.';
$string['error_func_second_posint'] = '{$a} erwartet als zweites Argument eine positive, ganze Zahl.';
$string['error_func_third_posint'] = '{$a} erwartet als drittes Argument eine positive, ganze Zahl.';
$string['error_grading_error'] = 'Bewertungsfehler! Wahrscheinlich ist dies das Ergebnis einer fehlerhaften Importdatei oder einer beschädigten Datenbank.';
$string['error_grading_not_one'] = 'Das Bewertungskriterium sollte für korrekte Antworten 1 ergeben. Erhaltener Wert ist {$a}.';
$string['error_grading_single_expression'] = 'Das Bewertungskriterium sollte ein einzelner Ausdruck sein. Eingabe besteht aus {$a} Anweisungen.';
$string['error_import_missing_field'] = 'Import fehlgeschlagen. Fehlendes Feld: {$a}';
$string['error_in_answer'] = 'Fehler in Antwort #{$a->answerno}: {$a->message}';
$string['error_indexoutofrange'] = 'Auswertungsfehler: Index {$a} außerhalb des zulässigen Bereichs.';
$string['error_inv_consec'] = 'Bei der Verwendung von inv() müssen die Zahlen in der Liste aufeinanderfolgend sein.';
$string['error_inv_integers'] = 'inv() erwartet, dass alle Einträge der Liste ganzzahlig sind; Dezimalzahlen werden abgeschnitten.';
$string['error_inv_list'] = 'inv() erwartet eine Liste.';
$string['error_inv_nodup'] = 'Bei der Verwendung von inv() darf die gleiche Zahl nicht mehrfach in der Liste vorkommen.';
$string['error_inv_smallest'] = 'Bei der Verwendung von inv() muss die kleinste Zahl in der Liste 0 oder 1 sein.';
$string['error_invalidalgebraic'] = '\'{$a}\' ist kein gültiger algebraischer Ausdruck.';
$string['error_invalidargsep'] = 'Syntaxfehler: ungültige Verwendung des Zeichens \',\'.';
$string['error_invalidcodepoint'] = 'Ungültige Escape-Sequenz für Unicode-Codepunkt.';
$string['error_invalidcodepoint_toolarge'] = 'Ungültige Escape-Sequenz für Unicode-Codepunkt: Codepunkt ist grösser als 0x10FFFF.';
$string['error_invalidcontext'] = 'Ungültiger Variablenkontext. Import abgebrochen.';
$string['error_invalidrandvardef'] = 'Ungültige Definition einer Zufallsvariablen. Sie müssen eine Liste der möglichen Werte angeben.';
$string['error_invalidrangesep'] = 'Syntaxfehler: ungültige Verwendung des Zeichens \':\'.';
$string['error_invalidunary'] = 'Ungültige Verwendung des Operators {$a}.';
$string['error_invalidvarname'] = 'Ungültiger Variablenname: {$a}.';
$string['error_len_argument'] = 'len() erwartet eine Liste oder eine Zeichenkette.';
$string['error_map_unknown'] = 'Auswertungsfehler in map(): {$a}';
$string['error_mark'] = 'Die Bewertung der Antwort muss einen Wert größer als 0 haben.';
$string['error_model_answer_no_content'] = 'Ungültige Antwort: Die Musterantwort enthält keine auswertbaren Zeichen.';
$string['error_model_answer_prefix'] = 'Ungültige Antwort: Der Präfix-Operator \\ darf in Musterantworten dieses Antworttyps nicht verwendet werden.';
$string['error_no_answer'] = 'Mindestens eine Antwort ist erforderlich.';
$string['error_notindexable'] = 'Auswertungsfehler: Indizes sind nur für Listen oder Zeichenketten erlaubt.';
$string['error_number_for_numeric_answertypes'] = 'Ungültiges Antwortformat: Dieser Antworttyp erwartet eine Zahl oder eine Liste von Zahlen.';
$string['error_onlyoneindex'] = 'Auswertungsfehler: Nur ein Index ist erlaubt, um auf Array-Elemente zuzugreifen.';
$string['error_parenmismatch'] = 'Fehlerhafte Klammersetzung, \'{$a->closer}\' schließt \'{$a->opener}\' von Zeile {$a->row} und Spalte {$a->column}.';
$string['error_parennotclosed'] = 'Unausgeglichene Klammersetzung, \'{$a}\' wird nie geschlossen.';
$string['error_pick_two'] = 'Wenn pick() mit zwei Argumenten aufgerufen wird, muss das zweite eine Liste sein.';
$string['error_placeholder_format'] = 'Falsches Format des Platzhalters oder verbotene Zeichen.';
$string['error_placeholder_main_duplicate'] = 'Doppelter Platzhalter im Text der Hauptfrage.';
$string['error_placeholder_missing'] = 'Dieser Platzhalter fehlt im Text der Hauptfrage.';
$string['error_placeholder_sub_duplicate'] = 'Dieser Platzhalter ist bereits in einem anderen Teil definiert worden.';
$string['error_placeholder_too_long'] = 'Die Länge des Platzhalters ist auf 40 Zeichen begrenzt.';
$string['error_poly_one'] = 'Wenn poly() mit einem Argument aufgerufen wird, muss dieses eine Zahl oder eine Liste von Zahlen sein.';
$string['error_poly_string'] = 'Wenn poly() mit einer Zeichenkette aufgerufen wird, muss das zweite Argument eine Zahl oder eine Liste von Zahlen sein.';
$string['error_poly_stringlist'] = 'Wenn poly() mit einer Liste von Zeichenketten aufgerufen wird, muss das zweite Argument eine Liste von Zahlen sein.';
$string['error_poly_two'] = 'Wenn poly() mit zwei Argumenten aufgerufen wird, muss das erste eine Zeichenkette oder eine Liste von Zeichenketten sein.';
$string['error_power_negbase_expfrac'] = 'Basis kann bei gebrochenem Exponent nicht negativ sein.';
$string['error_power_negbase_expzero'] = 'Division durch Null ist nicht definiert, darum kann die Basis bei negativen Exponenten nicht Null sein.';
$string['error_power_zerozero'] = 'Potenz 0^0 ist nicht definiert.';
$string['error_prefix'] = 'Syntaxfehler: ungültige Verwendung des Präfix-Operators \\.';
$string['error_probability'] = '{$a} erwartet als Wahrscheinlichkeit eine Wert von mindestens 0 und höchstens 1.';
$string['error_question_damaged'] = 'Fehler: Die Frage ist beschädigt. Anzahl der Textfragmente und Anzahl der Teilfragen sind nicht gleich.';
$string['error_randvars_set_size'] = 'Die Anzahl der generierbaren Elemente in der Menge muss größer als 1 sein.';
$string['error_randvars_type'] = 'Alle Elemente in der Menge müssen genau dieselbe Art und Größe haben.';
$string['error_rangesyntax'] = 'Syntaxfehler bei der Definition eines Bereichs.';
$string['error_rangeusage'] = 'Syntaxfehler: Bereiche können nur in {} oder [] verwendet werden.';
$string['error_rule'] = 'Fehler bei der Regelanalyse.';
$string['error_ruleid'] = 'In der Datei mit der ID/dem Namen existiert keine solche Regel.';
$string['error_samestartend'] = 'Syntaxfehler: Start und Ende eines Bereichs dürfen nicht gleich sein.';
$string['error_setindividual_randvar'] = 'Das Verändern von einzelnen Elementen einer Zufallsvariable ist nicht möglich.';
$string['error_setindividual_string'] = 'Einzelne Zeichen einer Zeichenkette können nicht verändert werden.';
$string['error_setinlist'] = 'Syntaxfehler: Mengen können nicht in einer Liste verwendet werden.';
$string['error_setnested'] = 'Syntaxfehler: Mengen können nicht verschachtelt werden.';
$string['error_sort_samesize'] = 'Wenn sort() mit zwei Listen aufgerufen wird, müssen beide die gleiche Größe haben.';
$string['error_sort_twolists'] = 'Wenn sort() mit zwei Argumenten aufgerufen wird, müssen beides Listen sein.';
$string['error_stacksize'] = 'Der Stack sollte nach der Auswertung genau ein Element enthalten. Haben Sie irgendwo ein Semikolon (;) vergessen?';
$string['error_stepzero'] = 'Syntaxfehler: Die Schrittweite eines Bereichs kann nicht Null sein.';
$string['error_str_argument'] = 'str() erwartet einen Skalar, z.B. eine Zahl.';
$string['error_strayparen'] = 'Unausgeglichene Klammersetzung, überzähliges \'{$a}\' gefunden.';
$string['error_string_for_algebraic_formula'] = 'Ungültiges Antwortformat: Der Antworttyp «algebraische Formel» erwartet eine Zeichenkette in Anführungszeichen oder eine Liste von Zeichenketten, jede in Anführungszeichen.';
$string['error_subexpression_empty'] = 'Ein Unterausdruck ist leer.';
$string['error_sublist_indices'] = 'sublist() erwartet ganzzahlige Indizes, Eingabe war \'{$a}\'.';
$string['error_sublist_lists'] = 'sublist() erwartet Listen.';
$string['error_sublist_outofrange'] = 'Index {$a} außerhalb des zulässigen Bereichs in sublist().';
$string['error_sum_argument'] = 'sum() erwartet eine Liste von Zahlen.';
$string['error_syntax'] = 'Syntaxfehler.';
$string['error_ternary_incomplete'] = 'Syntaxfehler: unvollständiger Ternär-Operator oder falsch platziertes \'?\'.';
$string['error_ternary_missmiddle'] = 'Syntaxfehler: fehlender Mittelteil beim Ternär-Operator.';
$string['error_ternary_notenough'] = 'Auswertungsfehler: nicht genügend Argumente für Ternär-Operator.';
$string['error_tokenconversion'] = 'Der gegebene Wert \'{$a}\' hatte einen ungültigen Datentyp und konnte nicht in ein Token konvertiert werden.';
$string['error_undefinedconstant'] = 'Undefinierte Konstante: \'{$a}\'';
$string['error_unexpectedend'] = 'Syntaxfehler: unerwartetes Ende des Ausdrucks nach \'{$a}\'.';
$string['error_unexpectedinput'] = 'Unerwartete Eingabe: \'{$a}\'';
$string['error_unexpectedtoken'] = 'Unerwartetes Token: \'{$a}\'';
$string['error_unit'] = 'Fehler beim Analysieren der Einheit';
$string['error_unitpenalty'] = 'Der Abzug muss eine Zahl zwischen 0 und 1 sein.';
$string['error_unknownfunction'] = 'Unbekannte Funktion: \'{$a}\'';
$string['error_unknownvarname'] = 'Unbekannte Variable: \'{$a}\'';
$string['error_unterminatedstring'] = 'Nicht abgeschlossene Zeichenkette, begonnen auf Zeile {$a->row}, Spalte {$a->column}.';
$string['error_validation_eval'] = 'Auswertungsfehler.';
$string['error_variablelhs'] = 'Linke Seite einer Zuweisung muss eine Variable sein.';
$string['error_vars_array_index_nonnumeric'] = 'Nicht-numerische Werte können nicht als Listenindex verwendet werden.';
$string['error_vars_array_index_out_of_range'] = 'Listen-Index ausserhalb des zulässigen Bereichs.';
$string['error_vars_array_size'] = 'Die Größe der Liste muss zwischen 1 und 1000 liegen.';
$string['error_vars_array_type'] = 'Die Elemente in derselben Liste müssen vom gleichen Typ sein, entweder eine Zahl oder eine Zeichenkette.';
$string['error_vars_array_unsubscriptable'] = 'Die Variable kann nicht indiziert werden.';
$string['error_vars_bracket_mismatch'] = 'Klammersetzung stimmt nicht.';
$string['error_vars_end_separator'] = 'Es fehlt das Trennzeichen am Ende.';
$string['error_vars_name'] = 'Die Syntax des Variablennamens ist falsch.';
$string['error_vars_reserved'] = 'Die Funktion {$a}() ist reserviert und kann nicht als Variable verwendet werden.';
$string['error_vars_string'] = 'Fehler. Entweder eine Zeichenfolge ohne schließendes Anführungszeichen oder die Verwendung eines nicht akzeptierten Zeichens wie \'.';
$string['error_vars_undefined'] = 'Die Variable \'{$a}\' wurde nicht definiert.';
$string['error_wrapnumber'] = 'Ein nicht-numerischer Wert kann nicht in ein Zahl-Token gepackt werden.';
$string['error_wrapstring'] = 'Der gegebene Wert kann nicht in eine Zeichenketten-Token gepackt werden.';
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
$string['incorrectfeedback_help'] = 'Diese Rückmeldung wird den Teilnehmer/innen gezeigt, die in diesem Teil keine Bewertung erhalten haben. Es kann globale und lokale Variablen enthalten, die durch ihre Werte ersetzt werden.';
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
$string['partiallycorrectfeedback_help'] = 'Dieses Feedback wird den Teilnehmer/innen gezeigt, die in diesem Teil nicht die Höchstpunktzahl erreicht haben. Es kann globale und lokale Variablen enthalten, die durch ihre Werte ersetzt werden.';
$string['placeholder'] = 'Name des Platzhalters';
$string['placeholder_help'] = 'Ein Platzhalter wird verwendet, um die Stelle in der Hauptfrage zu  kennzeichnen, der durch den Inhalt des Teils ersetzt wird. Er ist eine Zeichenfolge aus alphanumerischen Zeichen mit dem Präfix "**#**", z. B. #1, #2a, #2b und #A.

Bleibt dieses Feld leer, wird der Platzhalter am Ende des Hauptfragetextes angehängt.';
$string['pleaseputananswer'] = 'Tragen Sie bitte in jedes Eingabefeld eine Antwort ein.';
$string['pluginname'] = 'Formulas';
$string['pluginname_help'] = 'Für eine Einführung besuchen Sie bitte <a href="https://dynamiccourseware.org/"> dynamiccourseware.org</a>.

Für eventuelle Fragen besuchen Sie bitte <a href="https://dynamiccourseware.org/"> dynamiccourseware.org</a>.

Für die Optionen im unten stehenden Bearbeitungsformular gehen Sie bitte zu <a href="https://dynamiccourseware.org/"> dynamiccourseware.org</a>

Die vollständige Dokumentation finden Sie unter <a href="https://dynamiccourseware.org/"> dynamiccourseware.org</a>';
$string['pluginname_link'] = 'question/type/formulas';
$string['pluginnameadding'] = 'Hinzufügen einer Formulas-Frage';
$string['pluginnameediting'] = 'Bearbeiten einer Formulas-Frage';
$string['pluginnamesummary'] = 'Fragetyp mit Zufallswerten und Mehrfachantworten:
Die Antwortfelder können an beliebiger Stelle platziert werden, sodass wir Fragen mit verschiedenen Strukturen wie Vektoren, Polynomen oder Matrizen erstellen können. Andere Funktionen wie die Überprüfung von Einheiten und mehrteilige Fragen sind ebenfalls möglich und einfach zu verwenden.';
$string['postunit'] = 'Einheit';
$string['postunit_help'] = 'Sie können die Einheit spezifizieren. Dieser Fragetyp ist speziell geeignet für SI-Einheiten, so steht ein Leerzeichen für das "Produkt" der verschiedenen "Basiseinheiten" und <tt>^</tt> wird für Exponenten verwendet.

Auch <tt>/</tt> kann für inverse Exponenten verwendet werden. Jede Permutation der Basiseinheit wird gleich behandelt.

Die Teilnehmer/innen müssen das gleiche Eingabeformat verwenden. Zum Beispiel:
<pre class="prettyprint">1 m<br>0.1 m^2<br>20 m s^(-1)<br>400 kg m/s<br>100 kW</pre>';
$string['previewerror'] = 'Keine Vorschau verfügbar. Überprüfen Sie Ihre Definition von Zufallsvariablen, globalen Variablen, lokalen Variablen von Teilen und Antworten. Ursprüngliche Fehlermeldung: {$a}';
$string['privacy:metadata'] = 'Das Plugin für den Fragetyp Formulas speichert keine personenbezogenen Daten.';
$string['qtextpreview'] = 'Vorschau';
$string['questiontext'] = 'Fragentext';
$string['questiontext_help'] = 'Neben dem normalen Fragetext können Sie hier auch globale Variablen und Platzhalter verwenden.

Globale Variablen werden durch ihre Werte ersetzt und Platzhalter werden durch Antworten ersetzt.

Ein einfaches Beispiel mit Variablen <tt>A, B, C</tt> und Platzhaltern <tt>#1, #2, #3</tt> ist:

<pre class="prettyprint">Was ist das Resultat von {A} + {B}?<br>{#1}<br>Was ist das Resultat von {A} - {B}?<br>{#2}<br>Was ist das Resultat von {C} / {B}?<br>{#3}</pre>';
$string['relerror'] = 'Relativer Fehler';
$string['renew'] = 'Update';
$string['response_right'] = 'Richtig';
$string['response_wrong'] = 'Falsch';
$string['response_wrong_unit'] = 'Richtige Zahl, falsche Einheit';
$string['response_wrong_value'] = 'Falsche Zahl, richtige Einheit';
$string['ruleid'] = 'Grundlegende Umrechnungsregeln';
$string['ruleid_help'] = 'Dieser Fragetyp verfügt über ein integriertes System zur Umrechnung von Einheiten und über grundlegende Umrechnungsregeln.

Die grundlegenden Regeln sind die "Üblichen SI-Einheiten", die Standardeinheiten umrechnen, wie z. B. die Längeneinheiten km, m, cm und mm. Diese Option hat keine Auswirkung, wenn keine Einheit verwendet wurde.';
$string['settingallowdecimalcomma'] = 'Komma';
$string['settingallowdecimalcomma_desc'] = 'Antworten mit Komma als Dezimaltrennzeichen erlauben.<br>Wenn die Einstellung aktiviert ist, werden Zahlen entsprechend der lokalen Formatierung angezeigt.';
$string['settinglenientimport'] = 'Lockere Prüfung bei Importen';
$string['settinglenientimport_desc'] = 'Beim Import einer Frage nicht prüfen, ob die angegebene Musterantwort volle Punktzahl erreichen würde.<br>Hinweis: Diese Einstellung sollte nur vorübergehend aktiviert werden.';
$string['settings_heading_general'] = 'Allgemeine Einstellungen';
$string['settings_heading_width'] = 'Standardbreiten';
$string['settings_heading_width_desc'] = 'Standardbreite für Antwortfelder der verschiedenen Antworttypen. Bei leeren Feldern wird die Einstellung gemäss Stylesheet des Plugins verwendet. Bitte vorsichtig verwenden: Bei zu kleinen Feldern kann die Eingabe der Antwort für Schüler schwierig werden. Beachten Sie, dass das Ausrufezeichen-Symbol bei ungültigen Antworten auch noch ungefähr 12 Pixel Breite benötigt.';
$string['settingusepopup'] = 'Tooltips verwenden';
$string['settingusepopup_desc'] = 'Richtigen Antwort und des Feedbacks in einem Tooltipp anzeigen';
$string['subqoptions'] = 'Einstellungen der Einheit';
$string['subqtext'] = 'Text des Frageteils';
$string['subqtext_help'] = 'Hier können die Texte für den Frageteil und die Antwortfelder angegeben werden. Die Platzhalter, die für die Angabe von Antwortfeldern verwendet werden können, sind:

<pre class="prettyprint">{_0}<br>{_1}<br>{_2}<br>...<br>{_u}</pre>

Das  <tt>{_0}, {_1}, {_2}</tt> sind verschiedene Input-Felder für Variablen und <tt>{_u}</tt> ist das Input-Feld für die Einheit.

Alle fehlenden Felder werden automatisch an das Ende des Textes des Teils angehängt. Ein Sonderfall ist, wenn <tt>{_0}, {_u}</tt> nacheinander angegeben werden und es nur ein Antwortfeld und eine Einheit gibt, d. h. <tt>{_0}{_u}</tt>, dann werden sie zu einem einzigen langen Eingabeantwortfeld für Antwort und Einheit zusammengefasst.';
$string['uniquecorrectansweris'] = 'Die richtige Antwort ist: {$a}';
$string['unit'] = 'Einheit';
$string['unitpenalty'] = 'Abzug für falsche Einheit (0-1)*';
$string['unitpenalty_help'] = 'Mit dieser Option legen Sie die Bewertung fest, die Sie Teilnehmer/innen für eine falsche Einheit geben wollen.

Sie hat einen Wert zwischen 0 und 1. Wenn sie den Wert 1 hat, müssen die Einheit und die Antwort gleichzeitig richtig sein, um eine Bewertung zu erhalten. Das heißt, die Einheit und Antwort werden als eine Einheit behandelt. Nimmt sie hingegen den Wert 0 an, können die Teilnehmer/innen nur für die richtige Antwort die volle Punktzahl erhalten, alle zufälligen Zeichenfolge am Ende der Antwort haben keine Auswirkung .

Es wird daher empfohlen, den Wert 1 zu verwenden, wenn die Antwort keine zugehörige Einheit hat.';
$string['unsupportedformulafunction'] = 'Die Funktion {$a} wird nicht unterstützt.';
$string['vars1'] = 'Lokale Variablen';
$string['vars1_help'] = 'Sie können hier Variablen auf die gleiche Weise definieren, wie globale Variablen auf der Ebene der Frage definiert werden.
Die hier definierten Variablen können in der Antwort oder im Feedback des Teils verwendet werden und ihr Sichtbarkeitsbereich ist auf diesen Teil beschränkt.';
$string['vars2'] = 'Bewertungsvariablen';
$string['vars2_help'] = 'Alle lokalen Variablen und die Teilnehmerantworten können hier verwendet werden. Siehe Dokumentation für erweiterte Verwendungsmöglichkeiten.';
$string['vars2_link'] = 'https://dynamiccourseware.org/';
$string['varsdata'] = 'Instanziierte Datensätze';
$string['varsglobal'] = 'Globale Variablen';
$string['varsglobal_help'] = 'Hier können Formeln angegeben werden, um die instanziierten zufälligen Variablen zu manipulieren (alle zufälligen Variablen sind hier verfügbar). Die vollständige Liste der mathematischen Funktionen und Operatoren finden Sie in der Dokumentation.

<pre class="prettyprint">a = 1.11111;<br>b = exp(3);<br>c = A + a + b;<br>d = sin(1.5*pi()) + c;<br>e = round(a, 0);<br>f = [0,1,2,3][A];<br>g = ["zero","one","two","three"][A];<br>distance = sqrt(a*a + b*b);</pre>';
$string['varsglobal_link'] = 'https://dynamiccourseware.org/';
$string['varsrandom'] = 'Zufällige Variablen';
$string['varsrandom_help'] = 'Zu Beginn eines jeden Versuchs werden für diese Variablen neue Zufallswerte generiert. Dies kann man initiieren, indem man eine Reihe von Elementen definiert, aus denen man auswählen kann:
<pre class="prettyprint">A = {1,2,3};<br>C = {[1,-1], [2,-2], [3,-3]};<br>E = {10:100:10, 100, 1000};</pre>

Die Elemente können Zahlen, Zeichenketten oder Listen davon sein. Zu Beginn eines neuen Versuchs wird ein Element aus der Menge gezogen und der Variablen auf der linken Seite zugewiesen.  Für eine Menge von Zahlen kann auch die Bereichsschreibweise wie 10:100:10 verwendet werden (siehe Beispiel E oben).';
$string['varsrandom_link'] = 'https://dynamiccourseware.org/';
$string['varsstatistics'] = 'Statistik';
$string['yougotnright'] = 'Sie haben {$a} Teilfragen dieser Aufgabe richtig beantwortet.';
$string['yougotoneright'] = 'Sie haben 1 Teilfrage dieser Aufgabe richtig beantwortet.';
