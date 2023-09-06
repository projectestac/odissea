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
 * Strings for component 'rating', language 'de', version '4.1'.
 *
 * @package     rating
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregateavg'] = 'Mittelwert';
$string['aggregatecount'] = 'Anzahl der Bewertungen';
$string['aggregatemax'] = 'Maximalwert';
$string['aggregatemin'] = 'Minimalwert';
$string['aggregatenone'] = 'Keine Bewertung';
$string['aggregatesum'] = 'Summe der Bewertungen';
$string['aggregatetype'] = 'Summierungstyp';
$string['aggregatetype_help'] = 'Der Summierungstyp legt fest wie die Einzelwertungen zu einer Endwertung zusammengefasst werden.

* Mittelwert - Der Mittelwert aus allen Einzelwertungen wird die Endwertung
* Anzahl -  Die Anzahl aller erreichten Wertungen wird die Endwertung. Die Anzahl kann nicht höher werden als die erreichbare Maximalwertung.
* Maximalwert - Die größte erreichte Bewertung wird die Endwertung
* Minimalwert - Die kleinste erreichte Bewertung wird die Endwertung
* Summe - Die Summe aller erreichten  Bewertungen wird die Endwertung. Die Summe kann nicht höher werden als die erreichbare Maximalwertung.

Wenn \'Keine Bewertung\' ausgewählt wird, erscheint die Aktivität nicht in der Bewertungsübersicht.';
$string['allowratings'] = 'Bewertung von Beiträgen erlauben?';
$string['allratingsforitem'] = 'Alle abgegebenen Bewertungen';
$string['capabilitychecknotavailable'] = 'Prüfung der Berechtigung ist erst nach dem Speichern der Aktivität möglich.';
$string['couldnotdeleteratings'] = 'DIes kann nicht gelöscht werden, weil bereits Bewertungen vorliegen';
$string['norate'] = 'Bewertung von Beiträgen nicht erlaubt!';
$string['noratings'] = 'Keine Bewertungen abgegeben';
$string['noviewanyrate'] = 'Sie dürfen ausschließlich Ergebnisse für eigene Beiträge sehen';
$string['noviewrate'] = 'Sie haben kein Recht, Bewertungen zu sehen';
$string['privacy:metadata:rating'] = 'Die vom Personen eingegebene Bewertung wird zusammen mit einem Verweis auf das bewertete Element gespeichert.';
$string['privacy:metadata:rating:rating'] = 'Numerische Bewertung, die die Person eingegeben hat.';
$string['privacy:metadata:rating:timecreated'] = 'Zeitpunkt, an dem die Bewertung erstmals gemacht wurde';
$string['privacy:metadata:rating:timemodified'] = 'Zeitpunkt, an dem die Bewertung zuletzt geändert wurde';
$string['privacy:metadata:rating:userid'] = 'Nutzer/in, die die Bewertung gemacht hat';
$string['rate'] = 'Bewerten';
$string['ratepermissiondenied'] = 'Sie haben kein Recht, den Beitrag zu bewerten';
$string['rating'] = 'Bewertung';
$string['ratinginvalid'] = 'Ungültige Bewertung';
$string['ratings'] = 'Bewertungen';
$string['ratingtime'] = 'Bewertungen auf Beiträge beschränken, die im Zeitraum erstellt wurden';
$string['rolewarning'] = 'Rollen, die Bewertungen vornehmen dürfen';
$string['rolewarning_help'] = 'Rollen mit Berechtigung zum Bewerten sind Rollen mit der Fähigkeit moodle/rating:rate und allen aktivitätsspezifischen Bewertungsfähigkeiten. Über die Seite "Rechte ändern" können Sie weiteren Rollen die Berechtigung zum Bewerten zuweisen.';
$string['scaleselectionrequired'] = 'Wenn Sie die Aggregation von Bewertungen verwenden, müssen Sie zusätzlich eine Skala oder einen Höchstwert festlegen.';
