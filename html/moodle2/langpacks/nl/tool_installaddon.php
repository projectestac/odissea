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
 * Strings for component 'tool_installaddon', language 'nl', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_installaddon
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acknowledgement'] = 'Bevestiging';
$string['acknowledgementtext'] = 'Ik begrijp dat het mijn verantwoordelijkheid is om volledige backups te hebben van deze site voor ik add-ons ga installeren. Ik aanvaard en begrijp dat add-ons (vooral, maar niet alleen, diegene die niet van officiële bronnen afkomstig zijn) beveiligingsgaten kunnen bevatten, de site onbeschikbaar kunnen maken of het lekken of verlies van gegevens kunnen veroorzaken.';
$string['featuredisabled'] = 'De add-on installer is uitgeschakeld voor deze site.';
$string['installaddon'] = 'Add-on installeren';
$string['installaddons'] = 'Installeer add-ons';
$string['installfromrepo'] = 'Installeer add-ons van de Moodle plugin databank';
$string['installfromrepo_help'] = 'Je zult omgeleid worden naar de plugin-databank van Moodle om een add-on te zoeken en installeren. Merk op dat je site-naam, URL en Moodleversie ook verstuurd zullen worden om het installatieproces voor jou makkelijker te maken.';
$string['installfromzip'] = 'Installeer plugin van ZIP-bestand';
$string['installfromzipfile'] = 'ZIP-bestand';
$string['installfromzipfile_help'] = 'Het ZIP-bestand met de plugin moet exact één map bevatten met als naam de naam van de plugin. Het ZIP-bestand zal in de juiste map van het plugin-type uitgepakt worden. Als het van de Moodle plugin databank gedownload wordt, dan zal het deze structuur hebben.';
$string['installfromzip_help'] = 'Een alternatief voor het installeren van een add-on rechtstreeks van de Moodle plugin databank, is het uploaden van een ZIP-pakket van de add-on. Dat ZIP-pakket moet dezelfde structuur hebben als een pakket dat je download van de Moodle plugin databank.';
$string['installfromzipinvalid'] = 'Het ZIP-pakket van de plugin moet exact één map bevatten die overeenkomt met de plugin-naam. Het opgegeven bestand is geen geldig plugin ZIP-pakket.';
$string['installfromziprootdir'] = 'Hernoem de root-map';
$string['installfromziprootdir_help'] = 'Sommige ZIP-bestanden, zoals die door Github gegenereerd worden, kunnen een foute root mapnaam hebbben. Indien dat zo is kan de juiste naam hier ingegeven worden.';
$string['installfromzipsubmit'] = 'Installeer plugin van ZIP-bestand';
$string['installfromziptype'] = 'Plugin type';
$string['installfromziptype_help'] = 'Voor plugins die hun componentnaam juist opgeven, kan de installer het juiste plugintype automatisch detecteren. Als de autodetectie mislukt, kies dan het juiste type plugin manueel. Waarschuwing: de installatieprocedure kan behoorlijk falen als er een fout plugintype geselecteerd wordt.';
$string['permcheck'] = 'Zorg ervoor dat de root-locatie voor dit plugintype beschrijvbaar is voor het webserver proces.';
$string['permcheckerror'] = 'Fout tijdens het controleren van de schrijfrechten';
$string['permcheckprogress'] = 'Schrijfrechten controleren...';
$string['permcheckrepeat'] = 'Controleer opnieuw';
$string['permcheckresultno'] = 'Plugintype locatie <em>{$a->path}</em>  is niet beschrijfbaar';
$string['permcheckresultyes'] = 'Plugintype locatie <em>{$a->path}</em>  is beschrijfbaar';
$string['pluginname'] = 'Add-on installer';
$string['privacy:metadata'] = 'De Plugin installer-plugin bewaart geen persoonlijke gegevens.';
$string['remoterequestalreadyinstalled'] = 'Je hebt gevraagd om de add-on <strong>{$a->name}</strong> ({$a->component}) versie {$a->version} te installeren op deze site, maar deze plugin is al geïnstalleerd.';
$string['remoterequestconfirm'] = 'Je hebt gevraagd om de add-on <strong>{$a->name}</strong> ({$a->component}) versie {$a->version} uit de plugin databank op deze site te installeren. Als je verder gaat, zal het ZIP-bestand worden gedownload en gevalideerd. Er zal nog niets geïnstalleerd worden.';
$string['remoterequestinvalid'] = 'Er is gevraagd om een add-on van de Moodle plugin-collectie te installeren op deze site. De vraag is echter niet geldig en daarom kan de add-on niet geïnstalleerd worden.';
$string['remoterequestnoninstallable'] = 'Er werd verzocht om plugin  {$a->name} ({$a->component} versie {$a->version} van de Moodle plugins directory te installeren op deze site. Maar het testen van de plugin voor installatie mislukte (code voor de reden: {$a->reason}).';
$string['remoterequestpermcheck'] = 'Er is gevraagd om add-on {$a->name} ({$a->component}) versie {$a->version} van de Moodle plugin-collectie te installeren op deze site. Maar <strong>{$a->typepath}</strong> is <strong> niet beschrijfbaar</strong>. Je moet de webserver schrijfrechten geven voor de locatie van de plugin en klik dan op de Ga verder-knop om de controle te herhalen.';
$string['remoterequestpluginfoexception'] = 'Er is een fout opgetreden tijdens het ophalen van informatie over de plugin {$a->name} ({$a->component}) versie {$a->version}. De plugin kan niet geïnstalleerd worden. Schakel foutopsporing in om details van de fout te kunnen bekijken.';
$string['typedetectionfailed'] = 'Het plugintype kon niet automatisch gedetecteerd worden. Kies het plugintype manueel.';
$string['typedetectionmismatch'] = 'Het geselecteerde plugin-type komt niet overeen met wat de plugin verklaarde: {$a}';
