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
 * Strings for component 'grading', language 'de', branch 'MOODLE_38_STABLE'
 *
 * @package   grading
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activemethodinfo'] = '\'{$a->method}\' ist als Bewertungsmethode für den \'{$a->area}\'-Bereich ausgewählt.';
$string['activemethodinfonone'] = 'Es wurde für den \'{$a->area}\'-Bereich keine erweiterte Bewertungsmethode ausgewählt.';
$string['changeactivemethod'] = 'Aktive Bewertungsmethode wechseln nach';
$string['clicktoclose'] = 'anklicken zum Schließen';
$string['error:notinrange'] = 'Ungültige Bewertung \'{$a->grade}\' vorhanden. Die Bewertung muss zwischen 0 und {$a->maxgrade} liegen.';
$string['exc_gradingformelement'] = 'Bewertungsformular konnte nicht angelegt werden';
$string['formnotavailable'] = 'Erweiterte Bewertungsmethode wurde ausgewählt, aber das Bewertungsformular steht noch nicht zur Verfügung. Es muss zuerst über den Link im Block \'Einstellungen\' angelegt werden.';
$string['gradingformunavailable'] = 'Hinweis: Das erweiterte Bewertungsformular steht noch nicht zur Verfügung. Bis zu seiner Erstellung wird die einfache Bewertung verwendet.';
$string['gradingmanagement'] = 'Erweiterte Bewertung';
$string['gradingmanagementtitle'] = 'Erweiterte Bewertung: {$a->component} ({$a->area})';
$string['gradingmethod'] = 'Bewertungsmethode';
$string['gradingmethod_help'] = 'Wählen Sie die erweiterten Bewertungsmöglichkeiten, um Noten detaillierter zu berechnen.

\'Einfache direkte Bewertung\' aktiviert die Defaulteinstellung wieder.';
$string['gradingmethodnone'] = 'Einfache direkte Bewertung';
$string['gradingmethods'] = 'Bewertungsmethoden';
$string['manageactionclone'] = 'Neues Bewertungsformular aus Vorlage erstellen';
$string['manageactiondelete'] = 'Aktuelles Formular löschen';
$string['manageactiondeleteconfirm'] = 'Sie sind dabei das Bewertungsformular \'{$a->formname}\' und alle damit verbundenen Informationen von \'{$a->component} ({$a->area})\' zu löschen. Beachten Sie unbedingt die damit verbundenen Konsequenzen:

* Der Vorgang kann nicht rückgängig gemacht werden.
* Sie können zu einer anderen Bewertungsmethode wechseln, ohne dieses Formular zu löschen.
* Alle Informationen wie das Formular aufgebaut ist gehen verloren.
* Im Im Bewertungsbereich gespeicherten Ergebnisse bleiben erhalten. Die Erläuterung wie diese errechnet wurden, gehen jedoch verloren.
* Kopien dieses Formulars sind vom Löschen nicht betroffen.';
$string['manageactiondeletedone'] = 'Das Formular wurde erfolgreich gelöscht';
$string['manageactionedit'] = 'Formulardefinition bearbeiten';
$string['manageactionnew'] = 'Völlig neues Bewertungsformular erstellen';
$string['manageactionshare'] = 'Formular als Vorlage veröffentlichen';
$string['manageactionshareconfirm'] = 'Sie sind dabei eine Kopie es Bewertungsformulars \'{$a}\' als neue öffentliche Vorlage zu speichern. Andere Nutzer können es als Vorlage für eigene Bewertungsformulare verwenden.';
$string['manageactionsharedone'] = 'Das Formular wurde erfolgreich als Vorlage gespeichert';
$string['noitemid'] = 'Bewertung nicht möglich. Der Notenwert existiert nicht.';
$string['nosharedformfound'] = 'Keine Vorlage gefunden';
$string['privacy:metadata:grading_definitions'] = 'Basisinformation über ein erweitertes Bewertungsformular im Bewertungsbereich';
$string['privacy:metadata:grading_definitions:areaid'] = 'Bereichs-ID, wo erweitertes Bewertungsformular definiert ist';
$string['privacy:metadata:grading_definitions:copiedfromid'] = 'Bewertungsdefinitions-ID, die kopiert wurde';
$string['privacy:metadata:grading_definitions:description'] = 'Beschreibung der erweiterten Bewertungsmethode';
$string['privacy:metadata:grading_definitions:method'] = 'Bewertungsmethode, die bei der Definiton genutzt wird';
$string['privacy:metadata:grading_definitions:name'] = 'Name der erweiterten Bewertungsdefinition';
$string['privacy:metadata:grading_definitions:options'] = 'Einige Einstellungen der Bewertungsdefinition';
$string['privacy:metadata:grading_definitions:status'] = 'Status der erweiterten Bewertungsdefinition';
$string['privacy:metadata:grading_definitions:timecopied'] = 'Zeitpunkt, zu dem die erweiterte Bewertungsdefinition kopiert wurde';
$string['privacy:metadata:grading_definitions:timecreated'] = 'Zeitpunkt, zu dem die erweiterte Bewertungsdefinition erstellt wurde';
$string['privacy:metadata:grading_definitions:timemodified'] = 'Zeitpunkt, zu dem die erweiterte Bewertungsdefinition zuletzt geändert wurde';
$string['privacy:metadata:grading_definitions:usercreated'] = 'ID des Nutzers der die Bewertubgsdefinition erstellt hat';
$string['privacy:metadata:grading_definitions:usermodified'] = 'ID des Nutzers der die Bewertubgsdefinition zuletzt verändert hat';
$string['privacy:metadata:gradingformpluginsummary'] = 'Daten aus der Bewertungsmethode';
$string['privacy:metadata:grading_instances'] = 'Bewertungsaufzeichnung eines einzelnen Bewerters für ein Item';
$string['privacy:metadata:grading_instances:feedback'] = 'Vom Nutzer gegebenes Feedback';
$string['privacy:metadata:grading_instances:feedbackformat'] = 'Textformat des Feedbacks des Nutzers';
$string['privacy:metadata:grading_instances:raterid'] = 'ID des Nutzers, der Bewertungsinstanz bewertet hat';
$string['privacy:metadata:grading_instances:rawgrade'] = 'Bewertung in der Bewertungsinstanz';
$string['privacy:metadata:grading_instances:status'] = 'Status der Bewertungsinstanz';
$string['privacy:metadata:grading_instances:timemodified'] = 'Zeitpunkt der letzten Änderung an der Bewertungsinstanz';
$string['searchownforms'] = 'einschl. meine eigenen Formulare';
$string['searchtemplate'] = 'Suche nach Bewertungsformularen';
$string['searchtemplate_help'] = 'Sie können ein Bewertungsformular suchen und es als Vorlage zur weiteren Bearbeitung verwenden. Geben Sie Begriffe ein, die im Titel, dem Formular oder der Beschreibung vermutlich vorkommen. Sie können auch komplexe Begriffe suchen wenn Sie diese in Anführungszeichen (") setzen.

Die Grundeinstellung erlaubt die Suche in veröffentlichten Formularen. Sie können zusätzlich Ihre eigenen Formulare in die Suche einbeziehen. Somit können Sie ihre eigenen Formulare wiederverwenden, ohne sie veröffentlichen zu müssen. Nur Formulare, die als \'Fertig zum Gebrauch\' gekennzeichnet wurden, können verwandt werden.';
$string['statusdraft'] = 'Entwurf';
$string['statusready'] = 'Bereit für den Einsatz';
$string['templatedelete'] = 'Löschen';
$string['templatedeleteconfirm'] = 'Sie sind dabei die Vorlage \'{$a}\' zu löschen. Das löschen der Vorlage wirkt sich nicht auf bestehende Formulare, die aus der Vorlage erstellt wurden aus.';
$string['templateedit'] = 'Bearbeiten';
$string['templatepick'] = 'Vorlage verwenden';
$string['templatepickconfirm'] = 'Wollen Sie die Bewertungsvorlage \'{$a->formname}\' als Vorlage für das Bewertungsformular in \'{$a->component} ({$a->area})\' verwenden?';
$string['templatepickownform'] = 'Formular als Vorlage verwenden';
$string['templatesource'] = 'Ort: {$a->component} ({$a->area})';
$string['templatetypeown'] = 'Eigenes Formular';
$string['templatetypeshared'] = 'Geteilte Vorlage';
