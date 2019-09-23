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
 * Strings for component 'cohort', language 'de', branch 'MOODLE_36_STABLE'
 *
 * @package   cohort
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcohort'] = 'Neue globale Gruppe anlegen';
$string['allcohorts'] = 'Alle globalen Gruppen';
$string['anycohort'] = 'Alle';
$string['assign'] = 'Zuweisen';
$string['assigncohorts'] = 'Mitglieder zu globaler Gruppe zuweisen';
$string['assignto'] = 'Mitglieder der globalen Gruppe \'{$a}\'';
$string['backtocohorts'] = 'Zurück zu globalen Gruppen';
$string['bulkadd'] = 'Zu globaler Gruppe hinzufügen';
$string['bulknocohort'] = 'Keine globalen Gruppen gefunden';
$string['categorynotfound'] = 'Die Kategorie <b>{$a}</b> wurde nicht gefunden. Eventuell haben Sie keine Recht, um an dieser Stelle eine globale Gruppe anzulegen. Der Standardkontext wird verwendet.';
$string['cohort'] = 'Globale Gruppe';
$string['cohorts'] = 'Globale Gruppen';
$string['cohortsin'] = '{$a}: verfügbare globale Gruppen';
$string['component'] = 'Quelle';
$string['contextnotfound'] = 'Der Kontext <b>{$a}</b> wurde nicht gefunden. Eventuell haben Sie keine Recht, um an dieser Stelle eine globale Gruppe anzulegen. Der Standardkontext wird verwendet.';
$string['csvcontainserrors'] = 'Fehler in den CSV-Daten gefunden. Details siehe unten.';
$string['csvcontainswarnings'] = 'Warnungen in den CSV-Daten gefunden. Details siehe unten.';
$string['csvextracolumns'] = 'Spalte(n) <b>{$a}</b> ignoriert.';
$string['currentusers'] = 'Aktuelle Nutzer/innen';
$string['currentusersmatching'] = 'Aktuelle passende Nutzer/innen';
$string['defaultcontext'] = 'Standardkontext';
$string['delcohort'] = 'Globale Gruppe löschen';
$string['delconfirm'] = 'Möchten Sie die globale Gruppe \'{$a}\' wirklich löschen?';
$string['description'] = 'Beschreibung';
$string['displayedrows'] = '{$a->displayed} Zeilen von {$a->total} angezeigt';
$string['duplicateidnumber'] = 'Globale Gruppe mit dieser ID existiert bereits.';
$string['editcohort'] = 'Globale Gruppe bearbeiten';
$string['editcohortidnumber'] = 'ID für globale Gruppe bearbeiten';
$string['editcohortname'] = 'Name für globale Gruppe bearbeiten';
$string['eventcohortcreated'] = 'Globale Gruppe angelegt';
$string['eventcohortdeleted'] = 'Globale Gruppe gelöscht';
$string['eventcohortmemberadded'] = 'Nutzer/in zu globaler Gruppe hinzugefügt';
$string['eventcohortmemberremoved'] = 'Nutzer/in aus globaler Gruppe entfernt';
$string['eventcohortupdated'] = 'Globale Gruppe aktualisiert';
$string['external'] = 'Externe globale Gruppe';
$string['idnumber'] = 'Globale Gruppen-ID';
$string['invalidtheme'] = 'Das Design für die globale Gruppe gibt es nicht.';
$string['memberscount'] = 'Größe';
$string['name'] = 'Name';
$string['namecolumnmissing'] = 'Das Format der CSV-Datei ist nicht richtig. Prüfen Sie, ob die Feldnamen in der ersten Zeile enthalten sind.
Hinweis: Mit dem Globale Gruppen-Upload können Sie neue Nutzer in bestehende globale Gruppen hochladen. Das Hochladen erfolgt auf der Unterseite für den Nutzerupload.';
$string['namefieldempty'] = 'Der Feldname darf nicht leer sein.';
$string['newidnumberfor'] = 'Neue ID-Nummer für globale Gruppe {$a}';
$string['newnamefor'] = 'Neuer Name für globale Gruppe {$a}';
$string['nocomponent'] = 'Manuell erzeugt';
$string['potusers'] = 'Mögliche Nutzer/innen';
$string['potusersmatching'] = 'Mögliche passende Nutzer/innen
';
$string['preview'] = 'Vorschau';
$string['privacy:metadata:cohort_members'] = 'Informationen zur globalen Gruppe mit Nutzer/in';
$string['privacy:metadata:cohort_members:cohortid'] = 'ID der globalen Gruppe';
$string['privacy:metadata:cohort_members:timeadded'] = 'Zeitstempel wann der Nutzer der Globalen Gruppe zugeordnet wurde';
$string['privacy:metadata:cohort_members:userid'] = 'ID des Nutzers, der der Globalen Gruppe zugeordnet ist';
$string['removeuserwarning'] = 'Wenn Nutzer/innen aus einer globalen Gruppe entfernt werden, könnten diese Nutzer/innen aus diversen Kursen abgemeldet werden. Dabei werden alle Nutzereinstellungen, Bewertungen, Gruppenzugehörigkeiten und weitere Nutzerinformationen in den betroffenen Kursen gelöscht.';
$string['search'] = 'Suchen';
$string['searchcohort'] = 'Globale Gruppen suchen';
$string['selectfromcohort'] = 'Mitglieder aus globaler Gruppe wählen';
$string['systemcohorts'] = 'Systemweite globale Gruppen';
$string['unknowncohort'] = 'Unbekannte globale Gruppe \'{$a}\'!';
$string['uploadcohorts'] = 'Globale Gruppen hochladen';
$string['uploadcohorts_help'] = 'Mitglieder für globale Gruppen können über eine Textdatei hochgeladen werden. Das Format der Datei ist folgendermaßen festgelegt:

* Jede Zeile enthält einen Datensatz
* Jeder Datensatz besteht aus einer Reihe von Daten, die durch Kommas (oder ein anderes Trennzeichen) getrennt sind
* Der erste Datensatz enthält eine Liste von Feldnamen und definiert das Format der übrigen Datensätze
* Notwendiger Feldname ist \'name\'
* Optionale Feldnamen sind idnumber, description, descriptionformat, context, category, category_id, category_idnumber, category_path';
$string['uploadedcohorts'] = 'Globale Gruppen hochgeladen: {$a}';
$string['useradded'] = 'Nutzer/in zu globaler Gruppe \'{$a}\' hinzugefügt';
$string['visible'] = 'Sichtbar';
$string['visible_help'] = 'Globale Gruppen können von Nutzer/innen angezeigt werden, die das Recht \'moodle/cohort:view\' für diesen Kontext besitzen.<br/>
Sichtbare globale Gruppen können auch in untergeordneten Kursen angezeigt werden.';
