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
 * Strings for component 'gradingform_rubric', language 'de', version '3.11'.
 *
 * @package     gradingform_rubric
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcriterion'] = 'Kriterium hinzufügen';
$string['additionalfeedback'] = 'Zusätzliches Feedback';
$string['alwaysshowdefinition'] = 'Nutzer/innen eine Vorschau auf die Rubrik erlauben (andernfalls wird die Rubrik erst nach der Bewertung sichtbar)';
$string['backtoediting'] = 'Zurück zum Bearbeiten';
$string['confirmdeletecriterion'] = 'Wollen Sie dieses Kriterium wirklich löschen?';
$string['confirmdeletelevel'] = 'Möchten Sie dieses Level wirklich löschen?';
$string['criterion'] = 'Kriterium {$a}';
$string['criterionaddlevel'] = 'Level hinzufügen';
$string['criteriondelete'] = 'Kriterium löschen';
$string['criterionduplicate'] = 'Doppeltes Kriterium';
$string['criterionempty'] = 'Zum Bearbeiten des Kriteriums anklicken';
$string['criterionmovedown'] = 'Nach unten verschieben';
$string['criterionmoveup'] = 'Nach oben verschieben';
$string['criterionremark'] = 'Bemerkung für Kriterium {$a->description}: {$a->remark}';
$string['definerubric'] = 'Rubrik definieren';
$string['description'] = 'Beschreibung';
$string['enableremarks'] = 'Erläuterungen zu jedem Kriterium für Bewerter/in zulassen';
$string['err_mintwolevels'] = 'Ein Kriterium benötigt zumindest zwei Werte';
$string['err_nocriteria'] = 'Rubriken benötigen mindestens ein Kriterium';
$string['err_nodefinition'] = 'Die Leveldefinition darf nicht leer bleiben';
$string['err_nodescription'] = 'Die Kriterienbeschreibung darf nicht leer bleiben';
$string['err_novariations'] = 'Unterschiedliche Kriterienstufen können nicht auf der gleichen Punktezahl stehen.';
$string['err_scoreformat'] = 'Die Punktzahl für jedes Level muss ein zulässige Zahl sein.';
$string['err_totalscore'] = 'Höchstzahl an erreichbaren Punkten muss größer als 0 sein';
$string['gradingof'] = '{$a} werden bewertet';
$string['level'] = 'Level {$a->definition}, {$a->score} Punkte.';
$string['leveldefinition'] = 'Definition Level {$a}';
$string['leveldelete'] = 'Level {$a} löschen';
$string['levelempty'] = 'Klicken um Level zu bearbeiten';
$string['levelsgroup'] = 'Level-Gruppen';
$string['lockzeropoints'] = 'Berechnung der Note, wenn eine Mindestpunktzahl für die Mindestnote der Rubrik erreicht ist';
$string['lockzeropoints_help'] = 'Diese Einstellung gilt nur, wenn die Summe der Mindestpunktzahl für jedes Kriterium größer als 0 ist. Wenn diese Option aktiviert ist, entspricht die Mindestpunktzahl der Aktivität der für die Rubrik erreichbaren Mindestnote. Wenn diese Option nicht aktiviert ist, wird die minimal mögliche Punktzahl für die Rubrik der für die Aktivität verfügbaren Mindestnote zugeordnet (0, sofern keine Skala verwendet wird).';
$string['name'] = 'Name';
$string['needregrademessage'] = 'Die Rubrik wurde geändert, nachdem ein/e Teilnehmer/in bewertet wurde. Teilnehmer/innen sehen diese Bewertung solange nicht, bis Sie die Rubrik geprüft und die Bewertung aktualisiert haben.';
$string['notset'] = 'Nicht gesetzt';
$string['pluginname'] = 'Rubrik';
$string['pointsvalue'] = '{$a} Punkte';
$string['previewrubric'] = 'Rubrik-Vorschau';
$string['privacy:metadata:criterionid'] = 'Identifier für ein spezifisches Kriterium, das bewertet wurde';
$string['privacy:metadata:fillingssummary'] = 'Speichert Informationen über die Bewertung de sNutzers in der Rubrik';
$string['privacy:metadata:instanceid'] = 'Identifier füreine Bewertung in einer Aktivität';
$string['privacy:metadata:levelid'] = 'Erhaltenes Level in der Rubrik';
$string['privacy:metadata:remark'] = 'Vergebene Neubewertung für ein Rubrkenkriterium';
$string['regrademessage1'] = 'Sie ändern eine Rubrik, die bereits zur Bewertung verwendet wurde. Existierende Bewertungen müssen nun noch einmal kontrolliert werden. Bis dahin werden diese Bewertungen vor den Teilnehmer/innen verborgen.';
$string['regrademessage5'] = 'Sie nehmen wesentliche Änderungen an der Rubrik vor. Diese wurde bereits für Bewertungen verwendet. Der Wert im Bewertungssystem bleibt unverändert, aber die Rubrik wird vor den Teilnehmer/innen verborgen, bis Sie deren Abgaben neu bewertet haben.';
$string['regradeoption0'] = 'Nicht für Neubewertung markieren';
$string['regradeoption1'] = 'Für Neubewertung markieren';
$string['restoredfromdraft'] = 'Anmerkung: Der letzte Versuch zur Bewertung dieses Nutzers wurde nicht richtig gespeichert und nur als Entwurf hinterlegt. Mit dem Abbrechen Button unten können Sie diese Änderungen berabeiten.';
$string['rubric'] = 'Rubrik';
$string['rubricmapping'] = 'Regeln der Zuordnung von Punkten zu Bewertungen';
$string['rubricmappingexplained'] = 'Die minimal mögliche Punktzahl für diese Rubrik beträgt <b>{$a->minscore} Punkte</b> und wird in die für die Aktivität verfügbare Mindestnote umgerechnet (0, sofern keine Skala verwendet wird). Die maximale Punktzahl von <b>{$a->maxscore} Punkten</b> wird in die maximale Note umgewandelt. Zwischenergebnisse werden jeweils konvertiert.

Wenn eine Skala verwendet wird, wird die Punktzahl gerundet und in die Skalenelemente umgewandelt, als wären sie aufeinanderfolgende ganze Zahlen.

Diese Notenberechnung kann geändert werden, indem Sie das Formular bearbeiten und das Kontrollkästchen "Note mit einer Mindestpunktzahl der für die Rubrik erreichbaren Mindestnote berechnen" aktivieren.';
$string['rubricnotcompleted'] = 'Bitte tragen sie bei jedem Kriterium einen Wert ein';
$string['rubricoptions'] = 'Optionen';
$string['rubricstatus'] = 'Aktueller Rubrikstatus';
$string['save'] = 'Speichern';
$string['saverubric'] = 'Rubrik speichern und fertigstellen';
$string['saverubricdraft'] = 'Als Entwurf speichern';
$string['scoreinputforlevel'] = 'Score für Level {$a}';
$string['scorepostfix'] = '{$a} Punkte';
$string['showdescriptionstudent'] = 'Beschreibung den Teilnehmer/innen anzeigen';
$string['showdescriptionteacher'] = 'Beschreibung während der Bewertung anzeigen';
$string['showremarksstudent'] = 'Bemerkungen zu Bewertungen anzeigen';
$string['showscorestudent'] = 'Punkte für jedes Level bei Bewertung anzeigen';
$string['showscoreteacher'] = 'Punkte für jedes Level zur Evaluation anzeigen';
$string['sortlevelsasc'] = 'Sortierfolge für Level:';
$string['sortlevelsasc0'] = 'Absteigend (Punkte)';
$string['sortlevelsasc1'] = 'Aufsteigend (Punkte)';
$string['zerolevelsabsent'] = 'Warnung: Die minimale Punktzahl für diese Rubrik ist nicht 0! Dies kann zu unerwarteten Bewertungen für die Aktivität führen. Um dies zu vermeiden sollte jedes Kriterium ein Level mit 0 Punkten haben.<br>
Diese Warnung kann ignoriert werden, wenn eine Skala verwendet wird und die minimalen Punktzahlen der Rubrik dem Minimalwert der Skala entsprechen.';
