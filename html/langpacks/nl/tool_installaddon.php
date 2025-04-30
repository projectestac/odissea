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
 * Strings for component 'tool_installaddon', language 'nl', version '4.4'.
 *
 * @package     tool_installaddon
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acknowledgement'] = 'Bevestiging';
$string['acknowledgementtext'] = 'Ik begrijp dat het mijn verantwoordelijkheid is om volledige backups te hebben van deze site voor ik plugins ga installeren. Ik aanvaard en begrijp dat plugins (vooral, maar niet alleen, diegene die niet van officiële bronnen afkomstig zijn) beveiligingsgaten kunnen bevatten, de site onbeschikbaar kunnen maken of het lekken of verlies van gegevens kunnen veroorzaken.';
$string['featuredisabled'] = 'De plugin installer is uitgeschakeld voor deze site.';
$string['installaddon'] = 'Plugin installeren';
$string['installaddons'] = 'Installeer plugins';
$string['installfromrepo'] = 'Installeer plugins van de Moodle plugin databank';
$string['installfromrepo_help'] = 'Je zult omgeleid worden naar de plugin-databank van Moodle om een plugin te zoeken en installeren. Merk op dat je site-naam, URL en Moodleversie ook verstuurd zullen worden om het installatieproces voor jou makkelijker te maken.';
$string['installfromzip'] = 'Installeer plugin van ZIP-bestand';
$string['installfromzip_help'] = 'Een alternatief voor het installeren van een plugin rechtstreeks van de Moodle plugin databank, is het uploaden van een ZIP-pakket van de plugin. Dat ZIP-pakket moet dezelfde structuur hebben als een pakket dat je download van de Moodle plugin databank.';
$string['installfromzipfile'] = 'ZIP-bestand';
$string['installfromzipfile_help'] = 'Het ZIP-bestand met de plugin moet exact één map bevatten met als naam de naam van de plugin. Het ZIP-bestand zal in de juiste map van het plugin-type uitgepakt worden. Als het van de Moodle plugin databank gedownload wordt, dan zal het deze structuur hebben.';
$string['installfromzipinvalid'] = 'Het ZIP-pakket van de plugin moet exact één map bevatten die overeenkomt met de plugin-naam. Het opgegeven bestand is geen geldig plugin ZIP-pakket.';
$string['installfromziprootdir'] = 'Hernoem de root-map';
$string['installfromziprootdir_help'] = 'Sommige ZIP-bestanden, zoals die door Github gegenereerd worden, kunnen een foute root mapnaam hebbben. Indien dat zo is kan de juiste naam hier ingegeven worden.';
$string['installfromzipsubmit'] = 'Installeer plugin van ZIP-bestand';
$string['installfromziptype'] = 'Plugin type';
$string['installfromziptype_help'] = 'Voor plugins die hun componentnaam juist opgeven, kan de installer het juiste plugintype automatisch detecteren. Als de autodetectie mislukt, kies dan het juiste type plugin manueel. Waarschuwing: de installatieprocedure kan behoorlijk falen als er een fout plugintype geselecteerd wordt.';
$string['installfromziptype_link'] = 'Development:Plugins';
$string['permcheck'] = 'Zorg ervoor dat de root-locatie voor dit plugintype beschrijvbaar is voor het webserver proces.';
$string['permcheckerror'] = 'Fout tijdens het controleren van de schrijfrechten';
$string['permcheckprogress'] = 'Schrijfrechten controleren...';
$string['permcheckrepeat'] = 'Controleer opnieuw';
$string['permcheckresultno'] = 'Plugintype locatie <em>{$a->path}</em>  is niet beschrijfbaar';
$string['permcheckresultyes'] = 'Plugintype locatie <em>{$a->path}</em>  is beschrijfbaar';
$string['pluginname'] = 'Plugin installer';
$string['privacy:metadata'] = 'De Plugin installer-plugin bewaart geen persoonlijke gegevens.';
$string['remoterequestalreadyinstalled'] = 'Je hebt gevraagd om de plugin <strong>{$a->name}</strong> ({$a->component}) versie {$a->version} te installeren op deze site, maar deze plugin is al geïnstalleerd.';
$string['remoterequestconfirm'] = 'Je hebt gevraagd om de plugin <strong>{$a->name}</strong> ({$a->component}) versie {$a->version} uit de plugin databank op deze site te installeren. Als je verder gaat, zal het ZIP-bestand worden gedownload en gevalideerd. Er zal nog niets geïnstalleerd worden.';
$string['remoterequestinvalid'] = 'Er is gevraagd om een plugin van de Moodle plugin-collectie te installeren op deze site. De vraag is echter niet geldig en daarom kan de plugin niet geïnstalleerd worden.';
$string['remoterequestnoninstallable'] = 'Er werd verzocht om plugin  {$a->name} ({$a->component} versie {$a->version} van de Moodle plugins directory te installeren op deze site. Maar het testen van de plugin voor installatie mislukte (code voor de reden: {$a->reason}).';
$string['remoterequestpermcheck'] = 'Er is gevraagd om plugin {$a->name} ({$a->component}) versie {$a->version} van de Moodle plugin-collectie te installeren op deze site. Maar <strong>{$a->typepath}</strong> is <strong> niet beschrijfbaar</strong>. Je moet de webserver schrijfrechten geven voor de locatie van de plugin en klik dan op de Ga verder-knop om de controle te herhalen.';
$string['remoterequestpluginfoexception'] = 'Er is een fout opgetreden tijdens het ophalen van informatie over de plugin {$a->name} ({$a->component}) versie {$a->version}. De plugin kan niet geïnstalleerd worden. Schakel foutopsporing in om details van de fout te kunnen bekijken.';
$string['typedetectionfailed'] = 'Het plugintype kon niet automatisch gedetecteerd worden. Kies het plugintype manueel.';
$string['typedetectionmismatch'] = 'Het geselecteerde plugin-type komt niet overeen met wat de plugin verklaarde: {$a}';
