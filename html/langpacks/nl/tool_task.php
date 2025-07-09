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
 * Strings for component 'tool_task', language 'nl', version '4.4'.
 *
 * @package     tool_task
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adhoc'] = 'Ad-hoc';
$string['adhocempty'] = 'Wachtrij voor niet geplande taken is leeg';
$string['adhocqueueold'] = 'Oudste onverwerkte taak is {$a->age} wat meer is dan {$a->max}';
$string['adhocqueuesize'] = 'De wachtrij voor niet geplande taken bevat {$a}  taken';
$string['adhoctaskid'] = 'Ad-hoc taakID: {$a}';
$string['adhoctaskrun'] = 'Ad-hoctaakuitvoering gestart';
$string['adhoctasks'] = 'Ad-hoc taken';
$string['adhoctasksdue'] = 'Ad-hoctaken vervallen';
$string['adhoctasksfailed'] = 'Ad-hoctaken zijn mislukt';
$string['adhoctasksfuture'] = 'Toekomstige ad-hoctaken';
$string['adhoctasksrunning'] = 'Ad-hoctaken worden uitgevoerd';
$string['asap'] = '<abbr title="Zo spoedig mogelijk">z.s.m.</abbr>';
$string['backtoadhoctasks'] = 'Terug naar ad-hoctaken';
$string['backtoscheduledtasks'] = 'Terug naar geplande taken';
$string['blocking'] = 'Blokkering';
$string['cannotfindthepathtothecli'] = 'Kan het pad naar het uitvoerbaar PHP CLI niet vinden, dus het uitvoeren van de taak wordt afgebroken. Geef de instelling in \'Pad naar PHP CLI\' in Site-beheer / server / Systeempaden.';
$string['checkadhocqueue'] = 'Wachtrij voor niet geplande taken';
$string['checkcronrunning'] = 'Cron loopt';
$string['checklongrunningtaskcount'] = 'Langlopende taken: {$a}';
$string['checklongrunningtasks'] = 'Langlopende taken';
$string['checkmaxfaildelay'] = 'Maximale wachttijd voor mislukte taken';
$string['classname'] = 'Class naam';
$string['clearfaildelay_confirm'] = 'Weet je zeker dat je het uitstel wegens mislukken voor taak \'{$a}\' wil wissen? Na het wissen van het uitstel zal de taak terug lopen volgens het normale schema.';
$string['component'] = 'Component';
$string['corecomponent'] = 'Kern';
$string['crondisabled'] = 'Cron is uitgeschakeld. Er zullen geen nieuwe taken gestart worden. Het systeem zal niet correct werken tot dit terug is ingeschakeld.';
$string['cronok'] = 'Cron loopt frequent';
$string['default'] = 'Standaard';
$string['defaultx'] = 'Standaard: {$a}';
$string['disabled'] = 'Uitgeschakeld';
$string['disabled_help'] = 'Uitgeschakelde geplande taken worden niet uitgevoerd via cron, maar ze knnen wel nog manueel uitgevoerd worden via de CLI-tool';
$string['edittaskschedule'] = 'Taakschema bewerken: {$a}';
$string['enablerunnow'] = '\'Nu starten\' toestaan voor geplande taken';
$string['enablerunnow_desc'] = 'Sta beheerders toe om één enkele geplande taak onmiddellijk uit te voeren, eerder dan te wachten tot de volgende geplande taak loopt. Voor deze functie moet \'Pad naar PHP CLI (pathtophp) ingesteld zijn in systeempaden. De taken lopen op de webserver, dus sommige sites willen deze mogelijkheid misschien uitschakelen om mogelijke performantieproblemen te voorkomen.';
$string['faildelay'] = 'Wachttijd indien mislukt';
$string['failed'] = 'Mislukt';
$string['fromcomponent'] = 'Van component: {$a}';
$string['hostname'] = 'hostnaam';
$string['lastcronstart'] = 'Tijd sinds de laatste cron-run: {$a}';
$string['lastruntime'] = 'Laatste keer uitgevoerd';
$string['lastupdated'] = 'Laatst geüpdatet {$a}';
$string['nextruntime'] = 'Volgende keer';
$string['noclassname'] = 'Class naam niet opgegeven';
$string['notasks'] = 'Geen taken om uit te voeren';
$string['payload'] = 'Payload';
$string['pid'] = 'PID';
$string['plugindisabled'] = 'Plugin uitgeschakeld';
$string['pluginname'] = 'Configuratie geplande taken';
$string['privacy:metadata'] = 'De taakplanner configuratie-plugin bewaart geen persoonlijke gegevens.';
$string['resettasktodefaults'] = 'Zet geplande taken terug naar standaardwaarden';
$string['resettasktodefaults_help'] = 'Hiermee zullen alle lokale wijzigingen verworpen worden en wordt de planning voor deze taak terug op de standaardinstellingen gezet.';
$string['run_adhoctasks'] = 'Voer ad-hoctaken uit';
$string['runadhoc'] = 'Ad-hoctaken nu uitvoeren?';
$string['runadhoc_confirm'] = 'Taken worden op de webserver uitgevoerd en het kan even duren voordat ze zijn voltooid.';
$string['runadhoctask'] = 'Voer \'{$a->task}\' taak-ID {$a->taskid} uit';
$string['runadhoctasks'] = 'Voer alle \'{$a}\' taken uit';
$string['runadhoctasksfailed'] = 'Voer mislukte \'{$a}\'-taken uit';
$string['runagain'] = 'Start opnieuw';
$string['runclassname'] = 'Alles uitvoeren';
$string['runclassnamefailedonly'] = 'Alles uitvoeren is mislukt';
$string['runningalltasks'] = 'Alle taken uitvoeren';
$string['runningfailedtasks'] = 'Mislukte taken uitvoeren';
$string['runningtasks'] = 'Taken die nu lopen';
$string['runnow'] = 'Nu starten';
$string['runnow_confirm'] = 'Weet je zeker dat je de taak \'{$a}\' nu wil starten? De taak zal op de webserver lopen en het kan enige tijd vragen voor die voltooid is.';
$string['runpattern'] = 'Start patroon';
$string['scheduled'] = 'Gepland';
$string['scheduledtaskchangesdisabled'] = 'De Moodleconfiguratie verhindert het maken van wijzigingen aan de lijst met geplande taken.';
$string['scheduledtasks'] = 'Geplande taken';
$string['showall'] = 'Toon alles';
$string['showfailedonly'] = 'Alleen weergeven mislukt';
$string['showsummary'] = 'Toon ad hoc takenoverzicht';
$string['slowtask'] = 'Taak heeft langer dan {$a} gelopen';
$string['started'] = 'Gestart';
$string['taskage'] = 'Looptijd';
$string['taskdetails'] = 'Taak(en) die langer dan {$a->time} (max {$a->maxtime}) lopen:  {$a->count}';
$string['taskdisabled'] = 'Taak uitgeschakeld';
$string['taskfailures'] = 'Er zijn {$a} taken mislukt';
$string['taskid'] = 'Taak-ID';
$string['tasklogs'] = 'Taken log';
$string['tasknofailures'] = 'Er zijn geen mislukte taken';
$string['taskrunningtime'] = 'Taak voor {$a} is uitgevoerd';
$string['taskscheduleday'] = 'Dag';
$string['taskscheduleday_help'] = 'Dag van de maand-veld voor taakschema. Het veld maakt gebruik van hetzelfde formaat als unix cron. Enkele voorbeelden zijn:

* <strong>*</strong> Elke dag
* <strong>* / 2</strong> Elke 2e dag
* <strong>1</strong> De eerste van de maand
* <strong>1,15</strong> De eerste en de vijftiende van elke maand';
$string['taskscheduledayofweek'] = 'Dag van de week';
$string['taskscheduledayofweek_help'] = 'Dag van de week-veld voor taakschema. Het veld maakt gebruik van hetzelfde formaat als unix cron. Enkele voorbeelden zijn:

* <strong>*</strong> Elke dag
* <strong>0</strong> Elke zondag
* <strong>6</strong> Elke zaterdag
* <strong>1,5</strong> Elke maandag en vrijdag';
$string['taskschedulehour'] = 'Uur';
$string['taskschedulehour_help'] = 'Uur-veld voor taakschema. Het veld maakt gebruik van hetzelfde formaat als unix cron. Enkele voorbeelden zijn:

* <strong>*</strong> Elk uur
* <strong>* / 2</strong> Om de 2 uur
* <strong>2-10</strong> Elk uur van 02:00 tot 10:00 (inclusief)
* <strong>2,6,9</strong> 02:00, 06:00 en 09:00';
$string['taskscheduleminute'] = 'Minuut';
$string['taskscheduleminute_help'] = 'Minuut-veld voor taakschema. Het veld maakt gebruik van hetzelfde formaat als unix cron. Enkele voorbeelden zijn:

* <strong>*</strong> Elke minuut
* <strong>* / 5</strong> Elke 5 minuten
* <strong>2-10</strong> Elke minuut tussen 2 en 10 over het hele uur (inclusief)
* <strong>2,6,9</strong> 2 6 en 9 minuten over het uur';
$string['taskschedulemonth'] = 'Maand';
$string['taskschedulemonth_help'] = 'Maand-veld voor taakschema. Het veld maakt gebruik van hetzelfde formaat als unix cron. Enkele voorbeelden zijn:

* <strong>*</strong> Elke maand
* <strong>* / 2</strong> Elke tweede maand
* <strong>1</strong> Elk jaar in januari
* <strong>1,5</strong> Elk jaar in januari en mei';
$string['viewlogs'] = 'Bekijk log voor {$a}';
