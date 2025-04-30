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
 * Strings for component 'tool_moodlenet', language 'nl', version '4.4'.
 *
 * @package     tool_moodlenet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addingaresource'] = 'Inhoud toevoegen van MoodleNet';
$string['aria:enterprofile'] = 'Geef je MoodleNet profiel-ID';
$string['aria:footermessage'] = 'Blader door inhoud op MoodleNet';
$string['autoenablenotification'] = '<p>In Moodle 4.0 en nieuwer is de <a href="https://moodle.net/">MoodleNet</a>-integratie standaard ingeschakeld in Geavanceerde functies. Gebruikers met de mogelijkheid om activiteiten te creëren en te beheren, kunnen door MoodleNet bladeren via de activiteitenkiezer en MoodleNet-bronnen importeren in hun cursussen.</p><p>Desgewenst kan een alternatieve MoodleNet-instantie worden gespecificeerd in de <a href="{$ a->settingslink}">MoodleNet-instellingen</a>.</p>';
$string['autoenablenotification_subject'] = 'Standaard MoodleNet-instellingen gewijzigd.';
$string['browsecontentmoodlenet'] = 'Of blader door inhoud op MoodleNet';
$string['clearsearch'] = 'Zoekresultaat wissen';
$string['connectandbrowse'] = 'Verbinden en bladeren:';
$string['defaultmoodlenet'] = 'MoodleNet URL';
$string['defaultmoodlenet_desc'] = 'De URL van de MoodleNet-instantie die beschikbaar is in de activiteitskiezer.';
$string['defaultmoodlenetname'] = 'MoodleNet instantienaam';
$string['defaultmoodlenetname_desc'] = 'De naam van de MoodleNet-instantie die beschikbaar is in de activiteitskiezer.';
$string['defaultmoodlenetnamevalue'] = 'MoodlNet Central';
$string['enablemoodlenet'] = 'MoodleNet-integratie inschakelen (ophalen)';
$string['enablemoodlenet_desc'] = 'Indien ingeschakeld kunnen gebruikers met de mogelijkheid om activiteiten te maken en te beheren bladeren door MoodleNet via de activiteitskiezer en MoodleNet bronnen importeren in hun cursus. Een gebruiker met de mogelijkheid om back-ups terug te zetten kan een backup-bestand op MoodleNet selecteren en dat terugzetten in Moodle.';
$string['errorduringdownload'] = 'Er is een fout opgetreden bij het downloaden van bestand: {$a}';
$string['footermessage'] = 'Of blader door inhoud op';
$string['forminfo'] = 'Jouw MoodleNet-profiel-ID zal automatisch bewaard worden in jouw profiel op deze site.';
$string['importconfirm'] = 'Je gaat de inhoud "{$a->resourcename} ({$a->resourcetype})" importeren in cursus"{$a->coursename}". Weet je zeker dat je verder wil gaan?';
$string['importconfirmnocourse'] = 'Je gaat de inhoud "{$a->resourcename} ({$a->resourcetype})" importeren in je site. Weet je zeker dat je verder wil gaan?';
$string['importformatselectguidingtext'] = 'Met welke opmaak wil je de inhoud  "{$a->name} ({$a->type})"  toevoegen aan je cursus?';
$string['importformatselectheader'] = 'Toon de opmaak voor de inhoud';
$string['inputhelp'] = 'Of als je al een MoodleNet-account hebt, kopiëer dan de ID van je MoodleNet profiel en plak die hier:';
$string['instancedescription'] = 'MoodleNet is een open sociaal media-platform voor leraren, met een focus op het samen opbouwen en beheren van collecties van open leerobjecten.';
$string['instanceplaceholder'] = 'a1b2c3d4e5f6-voorbeeld@moodle.net';
$string['invalidmoodlenetprofile'] = '$userprofile heeft geen juiste opmaak';
$string['missinginvalidpostdata'] = 'De bron-informatie van MoodleNet ontbreekt of is in een foute opmaak. Als dit herhaaldelijk gebeurt, contacteer dan je site-beheerder.';
$string['mnetprofile'] = 'MoodleNet profiel';
$string['mnetprofiledesc'] = '<p>Geef hier je MoodlNet profielgegevens in om doorverwezen te worden naar jouw profiel wanneer je MoodleNet bezoekt.</p>';
$string['moodlenetnotenabled'] = 'De MoodleNet integratie moet ingeschakeld zijn in site-beheer / MoodleNet voor geïmporteerde bronnen verwerkt kunnen worden.';
$string['moodlenetsettings'] = 'MoodleNet instellingen (ophalen)';
$string['notification'] = 'Je gaat de inhoud "{$a->name} ({$a->type})" in je site importeren. Selecteer de cursus waarin dit moet toegevoegd worden of <a href="{$a->cancellink}">annuleer</a>.';
$string['pluginname'] = 'MoodleNet';
$string['privacy:metadata'] = 'De MoodleNet-tool maakt enkel communicatie met MoodleNet mogelijk. De tool bewaart geen gegevens.';
$string['profilevalidationerror'] = 'Er was een probleem bij het valideren van je MoodleNet profiel-ID';
$string['profilevalidationfail'] = 'Geef een geldig MoodleNet profiel-ID in';
$string['profilevalidationpass'] = 'Ziet er goed uit!';
$string['removedmnetprofilenotification'] = 'Als gevolg van enkele recente wijzigingen op het MoodleNet-platform zullen gebruikers die eerder hun MoodleNet-profiel ID op de site hebben opgeslagen een MoodleNet profiel ID in de nieuwe opmaak moeten invoeren om te kunnen authenticeren op het MoodleNet platform.';
$string['removedmnetprofilenotification_subject'] = 'MoodleNet profielID-formaat gewijzgd';
$string['saveandgo'] = 'Bewaar en ga verder';
$string['searchcourses'] = 'Zoek cursussen';
$string['selectpagetitle'] = 'Selecteer pagina';
$string['uploadlimitexceeded'] = 'De bestandsgrootte {$a->filesize}  is groter dan de uploadlimiet van {$a->uploadlimit} bytes.';
