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
 * Strings for component 'block_dedication', language 'de', version '3.11'.
 *
 * @package     block_dedication
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access_button'] = 'Zeiterfassungstool';
$string['access_info'] = 'Nur für Trainer/innen';
$string['connectionratiorow'] = 'Logdaten pro Tag';
$string['dedication:addinstance'] = 'Hinzufügen des Blocks Zeiterfassungstool zulassen';
$string['dedication:use'] = 'Verwendung des Blocks Zeiterfassungstool zulassen';
$string['dedication_estimation'] = 'Dein geschätzter Zeitaufwand beträgt';
$string['dedicationall'] = 'Zeitaufwand aller Teilnehmer/innen. Wählen Sie eine Person aus, um deren detaillierten Zeitaufwand zu sehen.';
$string['dedicationgroup'] = 'Zeitaufwand aller Gruppenmitglieder in <em>{$a}</em>. Wählen Sie eine Person aus, um deren detaillierten Zeitaufwand zu sehen.';
$string['dedicationrow'] = 'Zeitaufwand für den Kurs';
$string['form'] = 'Konfiguration  für Zeiterfassungstool';
$string['form_help'] = 'Die Zeit wird basierend auf den Konzepten von Sitzung und Sitzungsdauer geschätzt, die auf die Log-Einträge angewendet werden.

<strong>Klick:</strong> Jedes Mal, wenn eine Person auf eine Seite in Moodle klickt, wird ein Eintrag in der Logdatei gespeichert.

<strong>Sitzung:</strong> zwei oder mehr aufeinanderfolgende Klicks, in denen die verstrichene Zeit zwischen jedem Paar aufeinanderfolgender Klicks überschreitet nicht eine festgelegte maximale Zeit.

<strong>Sitzungsdauer:</strong> verstrichene Zeit zwischen dem ersten und dem letzten Klick der Sitzung.

<strong>Zeitaufwand:</strong> die Summe aller Sitzungsdauern für eine Person.';
$string['form_text'] = 'Wählen Sie den Zeitraum und die maximale Zeit zwischen den Klicks der gleichen Sitzung.';
$string['limit'] = 'Zeitlimit zwischen den Klicks (in Minuten)';
$string['limit_help'] = 'Das Zeitlimit zwischen den Klicks legt fest, ob zwei Klicks zur gleichen Sitzung gehören oder nicht.';
$string['maxtime'] = 'Ende des Zeitraums';
$string['maxtime_help'] = 'Nur Logeinträge berücksichtigen, die vor diesem Datum enden';
$string['meandedication'] = 'Zeitaufwand für den Kurs';
$string['mintime'] = 'Beginn des Zeitraums';
$string['mintime_help'] = 'Nur Log-Einträge nach diesem Datum berücksichtigen';
$string['pagetitle'] = '{$a}: Zeiterfassungstool';
$string['period'] = 'Verstrichene Zeit von <em>{$a->mintime}</em> bis <em>{$a->mintime}</em>';
$string['perioddiff'] = '<strong>Verstrichene Zeit:</strong>  {$a}';
$string['perioddiffrow'] = 'Verstrichene Zeit';
$string['pluginname'] = 'Zeiterfassungstool';
$string['sessionduration'] = 'Zeitdauer';
$string['sessionstart'] = 'Anfang der Sitzung';
$string['show_dedication'] = 'Zeiterfassungstool für Teilnehmer/innen anzeigen';
$string['show_dedication_help'] = 'Standardmäßig kann die Zeitaufwand nur von Trainer/innen eingesehen werden. Mit dieser Einstellung können auch die Teilnehmer/innen ihren Zeitaufwand im Block sehen.';
$string['sincerow'] = 'Von';
$string['submit'] = 'Berechnen';
$string['torow'] = 'Bis';
$string['totaldedication'] = '<strong>Gesamtzeitaufwand</strong> {$a}';
$string['userdedication'] = 'Detaillierter Zeitaufwand von <em>{$a}</em>.';
