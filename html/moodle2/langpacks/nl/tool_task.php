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
 * Strings for component 'tool_task', language 'nl', branch 'MOODLE_34_STABLE'
 *
 * @package   tool_task
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asap'] = 'ASAP';
$string['backtoscheduledtasks'] = 'Terug naar geplande taken';
$string['blocking'] = 'Blokkering';
$string['component'] = 'Component';
$string['corecomponent'] = 'Kern';
$string['default'] = 'Standaard';
$string['disabled'] = 'Uitgeschakeld';
$string['disabled_help'] = 'Uitgeschakelde geplande taken worden niet uitgevoerd via cron, maar ze knnen wel nog manueel uitgevoerd worden via de CLI-tool';
$string['edittaskschedule'] = 'Taakschema bewerken: {$a}';
$string['enablerunnow'] = '\'Nu starten\' toestaan voor geplande taken';
$string['enablerunnow_desc'] = 'Sta beheerders toe om één enkele geplande taak onmiddellijk uit te voeren, eerder dan te wachten tot de volgende cron-taak loopt. De taken lopen op de webserver, dus sommige sites willen deze mogelijkheid misschien uitschakelen om mogelijke performantieproblemen te voorkomen.';
$string['faildelay'] = 'Uitstel bij mislukt';
$string['lastruntime'] = 'Laatste keer uitgevoerd';
$string['nextruntime'] = 'Volgende keer';
$string['plugindisabled'] = 'Plugin uitgeschakeld';
$string['pluginname'] = 'Configuratie geplande taken';
$string['resettasktodefaults'] = 'Zet geplande taken terug naar standaardwaarden';
$string['resettasktodefaults_help'] = 'Hiermee zullen alle lokale wijzigingen verworpen worden en wordt de planning voor deze taak terug op de standaardinstellingen gezet.';
$string['runnow'] = 'Nu starten';
$string['runnow_confirm'] = 'Weet je zeker dat je de taak \'{$a}\' nu wil starten? De taak zal op de webserver lopen en het kan enige tijd vragen voor die voltooid is.';
$string['scheduledtaskchangesdisabled'] = 'De Moodleconfiguratie verhindert het maken van wijzigingen aan de lijst met geplande taken.';
$string['scheduledtasks'] = 'Geplande taken';
$string['taskdisabled'] = 'Taak uitgeschakeld';
$string['taskscheduleday'] = 'Dag';
$string['taskscheduleday_help'] = 'Dag van de maand-veld voor taakschema. Het veld maakt gebruik van hetzelfde formaat als unix cron. Enkele voorbeelden zijn: <br/><ul><li> <strong>*</strong> Elke dag </li><li> <strong>* / 2</strong> Elke 2e dag </li><li> <strong>1</strong> De eerste van de maand </li><li> <strong>1,15</strong> De eerste en de vijftiende van elke maand </li></ul>';
$string['taskscheduledayofweek'] = 'Dag van de week';
$string['taskscheduledayofweek_help'] = 'Dag van de week-veld voor taakschema. Het veld maakt gebruik van hetzelfde formaat als unix cron. Enkele voorbeelden zijn: <br/><ul><li> <strong>*</strong> Elke dag </li><li> <strong>0</strong> Elke zondag </li><li> <strong>6</strong> Elke zaterdag </li><li> <strong>1,5</strong> Elke maandag en vrijdag </li></ul>';
$string['taskschedulehour'] = 'Uur';
$string['taskschedulehour_help'] = 'Uur-veld voor taakschema. Het veld maakt gebruik van hetzelfde formaat als unix cron. Enkele voorbeelden zijn: <br/><ul><li> <strong>*</strong> Elk uur </li><li> <strong>* / 2</strong> Om de 2 uur </li><li> <strong>2-10</strong> Elk uur van 02:00 tot 10:00 (inclusief) </li><li> <strong>2,6,9</strong> 02:00, 06:00 en 09:00 </li></ul>';
$string['taskscheduleminute'] = 'Minuut';
$string['taskscheduleminute_help'] = 'Minuut-veld voor taakschema. Het veld maakt gebruik van hetzelfde formaat als unix cron. Enkele voorbeelden zijn: <br/><ul><li> <strong>*</strong> Elke minuut </li><li> <strong>* / 5</strong> Elke 5 minuten </li><li> <strong>2-10</strong> Elke minuut tussen 2 en 10 over het hele uur (inclusief) </li><li> <strong>2,6,9</strong> 2 6 en 9 minuten over het uur </li></ul>';
$string['taskschedulemonth'] = 'Maand';
$string['taskschedulemonth_help'] = 'Maand-veld voor taakschema. Het veld maakt gebruik van hetzelfde formaat als unix cron. Enkele voorbeelden zijn: <br/><ul><li> <strong>*</strong> Elke maand </li><li> <strong>* / 2</strong> Elke tweede maand </li><li> <strong>1</strong> Elk jaar in januari </li><li> <strong>1,5</strong> Elk jaar in januari en mei </li></ul>';
