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
 * Strings for component 'qtype_numerical', language 'de', version '4.1'.
 *
 * @package     qtype_numerical
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptederror'] = 'Akzeptierter Fehler';
$string['addmoreanswerblanks'] = 'Leerfelder für {no} weitere Antwort(en)';
$string['addmoreunitblanks'] = 'Leerfelder für {no} weitere Maßeinheiten';
$string['answercolon'] = 'Antwort:';
$string['answererror'] = 'Fehler';
$string['answermustbenumberorstar'] = 'Die Antwort muss eine Zahl, z.B. -1,234 or 3e8, oder \'*\' sein.';
$string['answerno'] = 'Antwort {$a}';
$string['decfractionofquestiongrade'] = 'als Dezimalbruch (0-1) der Fragebewertung';
$string['decfractionofresponsegrade'] = 'als Dezimalbruch (0-1) der Antwortbewertung';
$string['decimalformat'] = 'Nachkommastellen';
$string['editableunittext'] = 'Texteingabe';
$string['errornomultiplier'] = 'Sie müssen einen Multiplikator für diese Maßeinheit angeben.';
$string['errorrepeatedunit'] = 'Sie können nicht zwei Einheiten mit dem selben Namen haben.';
$string['geometric'] = 'Geometrisch';
$string['invalidnumber'] = 'Sie müssen eine gültige Zahl eingeben';
$string['invalidnumbernounit'] = 'Sie müssen eine gültige Zahl eingeben. Geben Sie keine Einheit in der Antwort an.';
$string['invalidnumericanswer'] = 'Eine der eingegebenen Antworten ist keine gültige Zahl';
$string['invalidnumerictolerance'] = 'Eine der eingegebenen Toleranzen ist keine gültige Zahl.';
$string['leftexample'] = 'Links, z.B. $1.00 oder £1.00';
$string['manynumerical'] = 'Nur der Zahlenwert wird bewertet, die Einheit ist optional. Wird eine Einheit verwendet, wird sie zur ersten Einheit konvertiert bevor die Bewertung erfolgt.';
$string['multiplier'] = 'Faktor';
$string['nominal'] = 'Nominell';
$string['noneditableunittext'] = 'NICHT veränderbarer Wert der Maßeinheit 1';
$string['nonvalidcharactersinnumber'] = 'Ungültiges Zeichen im Zahlenwert';
$string['notenoughanswers'] = 'Sie müssen mindestens eine Antwort eingeben.';
$string['nounitdisplay'] = 'Keine Berücksichtigung der Maßeinheit';
$string['numericalmultiplier'] = 'Multiplikator';
$string['numericalmultiplier_help'] = 'Der Multiplikator ist der Faktor, mit welchem die richtige numerische Antwort multipliziert wird.

Die erste Einheit (Einheit 1) hat einen Standardmultiplikator von 1. Wenn also die richtige numerische Antwort 5500 lautet und als Einheit ist W (Watt) angegeben, ergibt dies mit dem Multiplikator von 1 die richtige Antwort von 5500 W.

Wenn Sie die Einheit kW (Kilowatt) mit dem Multiplikator 0,001 hinzufügen, ergibt dies eine weitere richtige Antwort von 5,5 kW. 5500 W sowieso 5,5 kW werden dann als richtig anerkannt.

Bedenken Sie, dass auch die eingeräumte Fehlertoleranz multipliziert wird; Liegt diese bei 100 W, wird sie automatisch auch zu 0,1 kW.';
$string['oneunitshown'] = 'Die Einheit wird automatisch neben der Texteingabe angezeigt.';
$string['onlynumerical'] = 'Die Einheiten werden nicht benutzt. Nur der Zahlenwert wird bewertet.';
$string['pleaseenterananswer'] = 'Geben Sie bitte eine Antwort ein';
$string['pleaseenteranswerwithoutthousandssep'] = 'Geben Sie bitte Ihre Antwort ohne ein Trennungzeichen ({$a}) zwischen den Tausendern ein.';
$string['pluginname'] = 'Numerisch';
$string['pluginname_help'] = 'Aus Nutzersicht sehen numerische Fragen wie gewöhnliche Kurztextfragen aus. Der Unterschied liegt darin, dass numerische Fragen mit einer Fehlertoleranz versehen werden können. Beispiel: Ist die Antwort 10 und die Fehlertoleranz liegt bei 2, so sind alle Antworten von 8 bis 12 richtig.';
$string['pluginname_link'] = 'question/type/numerical';
$string['pluginnameadding'] = 'Numerische Frage hinzufügen';
$string['pluginnameediting'] = 'Numerische Frage ändern';
$string['pluginnamesummary'] = 'Das Plugin "Numerische Frage" erlaubt eine numerische Antwort (auch mit Einheiten), die gegen einige Modellantworten, ggf. mit Toleranzen, bewertet wird.';
$string['privacy:metadata'] = 'Das Plugin "Numerische Frage" erlaubt es Frageautor/innen, standardmäßige Optionen als Nutzereinstellungen zu setzen.';
$string['privacy:preference:defaultmark'] = 'Die Standardmarkierung wird für eine bestimmte Frage gesetzt.';
$string['privacy:preference:multichoicedisplay'] = 'Gibt an, ob Einheiten angezeigt werden als Texteingabe, als Multiple-Choice-Auswahl oder als Dropdown-Menü.';
$string['privacy:preference:penalty'] = 'Abzug für jeden falschen Versuch, wenn Fragen mit dem Verhalten "Interaktiv mit mehreren Versuchen" oder "Adaptiver Modus" ausgeführt werden.';
$string['privacy:preference:unitgradingtypes'] = 'Gibt an, ob der Abzug als Bruchteil (0-1) der Antwortnote oder der Fragennote gilt.';
$string['privacy:preference:unitpenalty'] = 'Welcher Bruchteil (0-1) der Antwortnote oder Fragennote sollte zutreffen?';
$string['privacy:preference:unitrole'] = 'Gibt an, ob die Einheit wichtig ist, optional oder nicht erwartet.';
$string['privacy:preference:unitsleft'] = 'Gibt an, ob die Einheit links angezeigt wird (wie $, £) oder rechts (wie kg, km, cm)';
$string['relative'] = 'Relative';
$string['rightexample'] = 'Rechts, z.B. 1.00cm oder 1.000km';
$string['selectunit'] = 'Einheit wählen';
$string['selectunits'] = 'Einheiten wählen';
$string['studentunitanswer'] = 'Einheit wird angezeigt als';
$string['tolerancetype'] = 'Toleranztyp';
$string['unit'] = 'Einheit';
$string['unitappliedpenalty'] = 'Diese Bewertungen enthalten einen Abzug von {$a} für falsche Einheiten.';
$string['unitchoice'] = 'Mehrfachauswahl';
$string['unitedit'] = 'Einheit bearbeiten';
$string['unitgraded'] = 'Die Einheit muss angegeben sein und wird bewertet.';
$string['unithandling'] = 'Verwendung der Einheit';
$string['unitincorrect'] = 'Sie haben nicht die richtige Einheit angegeben.';
$string['unitmandatory'] = 'Obligatorisch';
$string['unitmandatory_help'] = '* Die Antwort wird zusammen mit der angegebenen Einheit bewertet.

* Der Abzug wird angewandt, wenn das Einheitenfeld leer ist';
$string['unitnotselected'] = 'Sie müssen eine Einheit auswählen.';
$string['unitonerequired'] = 'Sie müssen mindestens eine Einheit angeben.';
$string['unitoptional'] = 'Optionale Einheit';
$string['unitoptional_help'] = '* Wenn das Einheitenfeld nicht leer ist, wird die Antwort zusammen mit der EInheit gewertet.

* Wenn die Einheit falsch geschrieben oder unbekannt ist, wird die Antwort zusammen mit der Einheit als ungültig gewertet. ';
$string['unitpenalty'] = 'Abzug wegen falscher Einheit';
$string['unitpenalty_help'] = 'Der Abzug wird angewendet, wenn

* eine falsche Einheit in das Einheitenfeld eingetragen ist oder
* eine Einheit in das Zahlenfeld eingetragen ist';
$string['unitposition'] = 'Position der Einheit';
$string['units'] = 'Einheiten';
$string['unitselect'] = 'ein Dropdown-Menü';
$string['unitx'] = 'Einheit {no}';
$string['xmustbenumeric'] = '{$a} muss eine Zahl sein';
$string['xmustnotbenumeric'] = '{$a} kann keine Zahl sein';
$string['youmustenteramultiplierhere'] = 'Sie müssen hier einen Multiplikationsfaktor eingeben.';
