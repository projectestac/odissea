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
 * Strings for component 'qtype_ordering', language 'de', version '4.5'.
 *
 * @package     qtype_ordering
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['absoluteposition'] = 'Absolute Position';
$string['addmultipleanswers'] = '{$a} weitere Elemente hinzufügen';
$string['addsingleanswer'] = 'Ein weiteres Element hinzufügen';
$string['allornothing'] = 'Alles oder nichts';
$string['answer'] = 'Elementtext';
$string['correctitemsnumber'] = 'Richtige Elemente: {$a}';
$string['correctorder'] = 'Die richtige Anordnung für diese Elemente ist:';
$string['defaultanswerformat'] = 'Standard Antwortformat';
$string['defaultquestionname'] = 'Bringen Sie die folgenden Elemente in die richtige Reihenfolge.';
$string['draggableitemno'] = 'Bewegliches Element: {no}';
$string['draggableitems'] = 'Bewegliche Elemente';
$string['duplicatesnotallowed'] = 'Verschiebbare Elemente dürfen nicht dupliziert werden. Die Zeichenfolge "{$a->text}" wird bereits in {$a->item} verwendet.';
$string['editingordering'] = 'Anordnungsfrage bearbeiten';
$string['gradedetails'] = 'Bewertungsdetails';
$string['gradingtype'] = 'Bewertungsart';
$string['gradingtype_help'] = '**Alles oder nichts**
&nbsp;  Nur wenn alle Elemente auf der richtigen Position sind, wird die Maximalpunktzahl vergeben. In allen anderen Fällen gibt es null Punkte.

**Absolute Position**
&nbsp;  Ein Element wird als richtig betrachtet, wenn es dieselbe Postion wie in der Musterlösung hat. Die höchst mögliche Punktzahl für diese Frage ist **dieselbe** wie die Anzahl der Elemente, die dem/der Teilnehmer/in präsentiert wird.

**Relativ zur richtigen Position**
&nbsp;  Ein Element wird als richtig betrachtet, wenn es an derselben Position wie in der Musterlösung steht. Richtige Elemente erhalten eine Punktzahl, die der Anzahl der Elemente minus 1 entspricht. Falsche Elemente erhalten eine Punktzahl die der Anzahl der Elemente minus 1 und minus einem Entfernungswert zur Position in der Musterlösung entspricht. Also, wenn ***n*** Elemente dem/der Nutzer/in angezeigt werden, entspricht die mögliche Punktzahl für jedes Element ***(n-1)***. Die Höchstpunktzahl für die Frage berechnet sich aus ***n x (n-1)***, was identisch mit ***(n² - n)*** ist.

**Relativ zum nächsten Element (letztes Element ausgeschlossen)**
&nbsp;  Ein Element wird als richtig betrachtet, wenn darauf das gleiche Element wie in der Musterlösung folgt. Das Element auf der letzten Position wird dabei nicht überprüft. Daraus folgt, dass die höchst mögliche Punktzahl für diese Frage **eins weniger** als die Anzahl der Elemente ist, die dem/der Teilnehmer/in präsentiert wird.

**Relativ zum nächsten Element (letztes Element eingeschlossen)**
&nbsp;  Ein Element wird als richtig betrachtet, wenn darauf das gleiche Element wie in der Musterlösung folgt. Dies bezieht das Element auf der letzten Position mit ein, welches kein nachfolgendes Element besitzt. Daraus folgt, dass die höchst mögliche Punktzahl für diese Frage **diesselbe** wie die Anzahl der Elemente ist, die dem/der Teilnehmer/in präsentiert wird.

**Relativ zu sowohl den vorausgehenden als auch den nachfolgenden Elementen**
&nbsp;  Ein Element wird als richtig betrachtet, wenn das vorausgehende und das nachfolgende Element sich auf den gleichen Positionen befinden wie in der Musterlösung. Das erste Element sollte keine vorausgehenden Elemente haben und das letzte Element sollte keinen Nachfolger haben. Daraus folgt, dass es zwei mögliche Punkte für jedes Element gibt und die höchst mögliche Punktzahl ist *doppelt* so viel, wie die Anzahl der Elemente, die dem/der Teilnehmer/in präsentiert wird.

**Relativ zu ALLEN vorausgehenden und nachfolgenden Elementen**
&nbsp;  Ein Element wird als richtig betrachtet, wenn das vorausgehende und das nachfolgende Element sich auf den gleichen Positionen befinden wie in der Musterlösung. Die Reihenfolge der vorausgehenden und der nachfolgenden Elemente ist nicht von Belang. Daraus folgt, wenn ***n*** Elemente dem/der Teilnehmer/in präsentiert werden, ist die Anzahl der Bewertungen für jedes Element ***(n-1)***. Die höchst mögliche Punktzahl für die Frage ist ***n x (n -1)***, was dasselbe ist wie ***(n^2 - n)***

**Längste geordnete Teilmenge **
&nbsp;  Die Bewertung ergibt sich aus der längsten geordneten Teilmenge. Die höchst mögliche Punktzahl entspricht der Anzahl der dargestellten Elemente. Eine Teilmenge muss aus mindestens zwei Elementen bestehen. Teilmengen müssen nicht beim ersten Element anfangen (was sie aber können) und sie müssen auch nicht zusammenhängend sein (aber sie können es sein). Wenn es mehrere Teilmengen derselben Länge gibt, werden die Elemente, der zuerst gefundenen Teilmenge bei der Suche von links nach rechts, als richtig angezeigt. Andere Elemente werden als falsch markiert.

**Längste zusammenhängende Teilmenge**
&nbsp;  Die Bewertung ergibt sich aus der Anzahl der Elemente der längsten zusammenhängenden Teilmenge.  Die höchst mögliche Punktzahl entspricht der Anzahl der dargestellten Elemente. Eine Teilmenge muss aus mindestens zwei Elementen bestehen. Teilmengen müssen nicht beim ersten Element anfangen (was sie aber können) aber sie MÜSSEN zusammenhängend sein. Wenn es mehrere Teilmengen derselben Länge gibt, werden die Elemente, der zuerst gefundenen Teilmenge bei der Suche von links nach rechts, als richtig angezeigt. Andere Elemente werden als falsch markiert.';
$string['highlightresponse'] = 'Antwort als richtig oder falsch markieren';
$string['horizontal'] = 'Horizontal';
$string['incorrectitemsnumber'] = 'Falsche Elemente: {$a}';
$string['layouttype'] = 'Anordnung der Elemente';
$string['layouttype_help'] = 'Auswählen, ob die Elemente vertikal oder horizontal angeordnet werden sollen.';
$string['longestcontiguoussubset'] = 'Längste zusammenhängende Teilmenge';
$string['longestorderedsubset'] = 'Längste geordnete Teilmenge';
$string['moved'] = '{$a->item} bewegt. Neue Position: {$a->position} von {$a->total}.';
$string['moveleft'] = 'Nach links bewegen';
$string['moveright'] = 'Nach rechts bewegen';
$string['noresponsedetails'] = 'Entschuldigung, es sind keine Details zu dieser Frage verfügbar.';
$string['noscore'] = 'Keine Bewertung';
$string['notenoughanswers'] = 'Eine Anordnungsfrage muss mehr als {$a} Antworten haben.';
$string['notenoughsubsetitems'] = 'Eine Teilmenge muss mindestens {$a} Elemente enthalten.';
$string['numberingstyle'] = 'Elemente nummerieren?';
$string['numberingstyle123'] = '1., 2., 3., ...';
$string['numberingstyleABCD'] = 'A., B., C., ...';
$string['numberingstyleIIII'] = 'I., II., III., ...';
$string['numberingstyle_desc'] = 'Standardmäßiger Nummerierungsstil';
$string['numberingstyle_help'] = 'Wählen Sie den Nummerierungs-Stil der verschiebbaren Elemente für diese Frage.';
$string['numberingstyleabc'] = 'a., b., c., ...';
$string['numberingstyleiii'] = 'i., ii., iii., ...';
$string['numberingstylenone'] = 'Keine Nummerierung';
$string['partialitemsnumber'] = 'Teilweise richtige Elemente: {$a}';
$string['pluginname'] = 'Anordnung';
$string['pluginname_help'] = 'Die Elemente sind zufällig angeordnet. Sie können in eine sinnvolle Reihenfolge durch Verschieben an die korrekte Stelle gebracht werden.';
$string['pluginname_link'] = 'question/type/ordering';
$string['pluginnameadding'] = 'Eine Anordnungsfrage hinzufügen';
$string['pluginnameediting'] = 'Eine Anordnungsfrage bearbeiten';
$string['pluginnamesummary'] = 'Ordnen Sie die zufällig angeordneten Elemente in eine sinnvolle Reihenfolge.';
$string['positionx'] = 'Position {$a}';
$string['privacy:preference:gradingtype'] = 'Bewertungstyp';
$string['privacy:preference:layouttype'] = 'Layout der Elemente';
$string['privacy:preference:numberingstyle'] = 'Auswahlnummerierung';
$string['privacy:preference:selectcount'] = 'Auswahlanzahl';
$string['privacy:preference:selecttype'] = 'Auswahltyp';
$string['privacy:preference:showgrading'] = 'Anzeige der Bewertungsdetails.';
$string['regradeissuenumitemschanged'] = 'Die Anzahl der beweglichen Elemente hat sich geändert.';
$string['relativeallpreviousandnext'] = 'Relativ zu ALLEN vorausgehenden und nachfolgenden Elementen';
$string['relativenextexcludelast'] = 'Relativ zum nächsten Element (letztes Element ausgeschlossen)';
$string['relativenextincludelast'] = 'Relativ zum nächsten Element (letztes Element eingeschlossen)';
$string['relativeonepreviousandnext'] = 'Relativ zu sowohl den vorausgehenden als auch den nachfolgenden Elementen';
$string['relativetocorrect'] = 'Relativ zur richtigen Position';
$string['removeeditor'] = 'HTML-Editor entfernen';
$string['removeitem'] = 'Verschiebbares Element entfernen';
$string['scoredetails'] = 'Dies sind die Bewertungen für jedes Element in dieser Antwort:';
$string['selectall'] = 'Alle Elemente auswählen';
$string['selectcontiguous'] = 'Eine Teilmenge mit zusammenhängenden Elementen auswählen';
$string['selectcount'] = 'Größe der Teilmenge';
$string['selectcount_help'] = 'Die Anzahl der Elemente, die dargestellt werden, wenn die Frage im Test erscheint.';
$string['selectrandom'] = 'Eine zufällige Teilmenge von Elementen auswählen';
$string['selecttype'] = 'Elementauswahltyp';
$string['selecttype_help'] = 'Bestimmen Sie, ob alle Elemente angezeigt werden sollen oder nur eine Teilmenge davon.';
$string['showgrading'] = 'Bewertungsdetails';
$string['showgrading_help'] = 'Sie können wählen, ob der/die Teilnehmer/in bei der Anzeige der Antwort Details zur Berechnung der Punktzahl sehen kann oder nicht.';
$string['vertical'] = 'Vertikal';
