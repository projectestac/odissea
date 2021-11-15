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
 * Strings for component 'block_completion_progress', language 'nl', version '3.11'.
 *
 * @package     block_completion_progress
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['completed_colour'] = '#73A839';
$string['completed_colour_descr'] = 'Kies html kleurcode voor voltooide activiteiten';
$string['completed_colour_title'] = 'Kleur voor voltooide activiteiten';
$string['completion_not_enabled'] = 'Voltooien bijhouden is niet ingeschakeld';
$string['completion_not_enabled_course'] = 'Voltooien bijhouden is niet ingeschakeld voor deze cursus';
$string['completion_progress:addinstance'] = 'Voeg een nieuw "Vooruitgang voltooingsblok" toe';
$string['completion_progress:myaddinstance'] = 'Voeg een nieuw "Vooruitgang voltooingsblok" toe aan mijn startpagina';
$string['completion_progress:overview'] = 'Bekijk het cursusoverzicht van voltooide activiteiten voor alle leerlingen';
$string['completion_progress:showbar'] = 'Toon de kleurenbalk in het Vooruitgang voltooingsblok';
$string['config_activitiesincluded'] = 'Inbegrepen activiteiten';
$string['config_activitycompletion'] = 'Alle activiteiten waar voltooien aan staat';
$string['config_default_title'] = 'Vooruitgang voltooiing';
$string['config_group'] = 'Alleen zichtbaar voor de groep';
$string['config_header_monitored'] = 'Opgevolgd';
$string['config_icons'] = 'Gebruik iconen in de kleurenbalk';
$string['config_longbars'] = 'Hoe moet ik lange kleurenbalken presenteren';
$string['config_orderby'] = 'Sorteer kleurenbalk op';
$string['config_orderby_course_order'] = 'Volgorde in cursus';
$string['config_orderby_due_time'] = 'Tijd gebruikt "{$a}" datum';
$string['config_percentage'] = 'Toon percentage aan leerlingen';
$string['config_scroll'] = 'Scroll';
$string['config_selectactivities'] = 'Selecteer activiteiten';
$string['config_selectedactivities'] = 'Geselecteerde activiteiten';
$string['config_squeeze'] = 'Knijp';
$string['config_title'] = 'Kies alternatieve titel';
$string['config_wrap'] = 'Inpakken';
$string['coursenametoshow'] = 'Cursusnaam die op het dashboard getoond wordt';
$string['defaultlongbars'] = 'Standaard uiterlijk voor lange kleurenbalken';
$string['forceiconsinbar'] = 'Iconen in voortgangsbalk forceren';
$string['fullname'] = 'Volledige cursusnaam';
$string['futureNotCompleted_colour'] = '#025187';
$string['futureNotCompleted_colour_descr'] = 'HTML kleurcode voor toekomstige elementen die nog niet zijn voltooid';
$string['futureNotCompleted_colour_title'] = 'Kleur toekomstig niet voltooid';
$string['how_activitiesincluded_works'] = 'Hoe toevoegen van activiteiten werkt';
$string['how_activitiesincluded_works_help'] = '<p>Standaard worden alle activiteiten met ingestelde activiteitsvoltooiing opgenomen in de balk.</p><p>Je kunt ook handmatig activiteiten selecteren om op te nemen.</p>';
$string['how_group_works'] = 'Hoe zichtbare groep werkt';
$string['how_group_works_help'] = '<p>Selecteer een groep of groepering om de zichtbaarheid van dit blok tot die groep of groepering te beperken.</p>';
$string['how_longbars_works'] = 'Hoe lange balken worden getoond';
$string['how_longbars_works_help'] = '<p>Wanneer balken een bepaalde lengte overschrijden, hoe ze op één van de volgende manieren kunnen worden weergegeven.</p><ul><li>Samengeperst in één horizontale balk</li><li>Zijdelings scrollen om overlopende balksegmenten te tonen</li><li>Teruglopen om alle balksegmenten te tonen op meerdere lijnen</li></ul><p>Niet vergeten dat de NU-indicator niet wordt weergegeven wanneer de balk terugloopt over meerdere lijnen.</p>';
$string['how_ordering_works'] = 'Hoe sorteren werkt';
$string['how_ordering_works_help'] = '<p>Er zijn twee manieren om activiteiten in het blok Voortgang voltooiing te ordenen.</p>
<ul>
<li><em>Op tijd, door de datum van "Voltooien verwacht op" te gebruiken</em> (standaard)<br />De verwachte voltooiingsdatums van activiteiten en bronnen worden gebruikt om de balk te ordenen. Waar activiteiten of bronnen geen verwachte voltooiingsdatum hebben, wordt de volgorde in de cursus gebruikt. Wanneer deze optie gebruikt wordt, wordt de indicator NU getoond.</li>
<li><em>Volgorde in de cursus</em><br />Activiteiten of bronnen worden in dezelfde volgorde weergegeven als in de cursus. Wanneer deze optie wordt gebruikt, worden verwachte voltooiingsdatums genegeerd. Wanneer deze optie wordt gebruikt, wordt de indicator NU niet gebruikt.</li>
</ul>';
$string['how_selectactivities_works'] = 'Hoe activiteiten opnemen werkt';
$string['lastonline'] = 'Laatste in cursus';
$string['mouse_over_prompt'] = 'Ga met muis over de balk of raak deze aan voor informatie.';
$string['no_activities_config_message'] = 'Er zijn geen activiteiten of bronnen waarvoor activiteitsvoltooiing is ingesteld, of er zijn geen activiteiten of bronnen geselecteerd. Stel voltooiing in op activiteiten en bronnen en configureer vervolgens dit blok.';
$string['no_activities_message'] = 'Er worden geen activiteiten of bronnen gevolgd. Gebruik configuratie om volgen in te stellen.';
$string['no_blocks'] = 'Er zijn geen blokken Voortgang voltooiing ingesteld voor je cursussen.';
$string['no_courses'] = 'Je bent niet in een cursus aangemeld. Er worden alleen balken weergegeven van cursussen waarin je bent aangemeld.';
$string['no_visible_activities_message'] = 'Geen van de gevolgde activiteiten is op dit moment zichtbaar.';
$string['notCompleted_colour'] = '#C71C22';
$string['notCompleted_colour_descr'] = 'HTML kleurcode voor huidige elementen die nog niet zijn voltooid';
$string['notCompleted_colour_title'] = 'Kleur niet voltooid';
$string['not_all_expected_set'] = 'Niet alle activiteiten met voltooiing hebben een "{$a}" datum ingesteld.';
$string['now_indicator'] = 'NU';
$string['overview'] = 'Overzicht van leerlingen';
$string['pluginname'] = 'Voortgang voltooiing';
$string['privacy:metadata'] = 'Het blok Voortgang voltooiing toont alleen bestaande gegevens over voltooiing.';
$string['progress'] = 'Voortgang';
$string['progressbar'] = 'Voortgang voltooiing';
$string['selectitem'] = 'Selecteer \'{$a}\'';
$string['shortname'] = 'Korte naam cursus';
$string['showallinfo'] = 'Toon alle informatie';
$string['showinactive'] = 'Toon inactieve leerlingen in Overzicht';
$string['showlastincourse'] = 'Tijdstip waarop leerling voor het laatst in de cursus was tonen in Overzicht';
$string['submitted'] = 'Ingestuurd';
$string['submittednotcomplete_colour'] = '#FFCC00';
$string['submittednotcomplete_colour_descr'] = 'HTML kleurcode voor elementen die zijn ingestuurd, maar nog niet voltooid';
$string['submittednotcomplete_colour_title'] = 'kleur voor ingestuurd maar niet voltooid';
$string['time_expected'] = 'Verwacht';
$string['why_set_the_title'] = 'Waarom je een andere bloktitel zou kunnen instellen?';
$string['why_show_precentage'] = 'Waarom voortgangspercentage weergeven aan leerlingen?';
$string['why_use_icons'] = 'Waarom je iconen zou kunnen gebruiken?';
