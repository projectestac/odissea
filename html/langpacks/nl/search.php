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
 * Strings for component 'search', language 'nl', branch 'MOODLE_38_STABLE'
 *
 * @package   search
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advancedsearch'] = 'Geavanceerd zoeken';
$string['all'] = 'Alle';
$string['allareas'] = 'Alle zones';
$string['allcourses'] = 'Alle cursussen';
$string['allusers'] = 'Alle gebruikers';
$string['author'] = 'Auteur';
$string['authorname'] = 'Naam auteur';
$string['back'] = 'Terug';
$string['beadmin'] = 'Je moet een beheerder zijn om deze pagina te mogen gebruiken';
$string['checkdb'] = 'Controleer databank';
$string['checkdbadvice'] = 'Controleer je databank op problemen.';
$string['checkdir'] = 'Controleer map';
$string['checkdiradvice'] = 'Zorg ervoor dat de datamap bestaat en beschrijfbaar is.';
$string['commenton'] = 'Commentaar aan';
$string['confirm_delete'] = 'Weet je zeker dat je de index voor {$a} wil verwijderen? Zolang de zoekzone geïndexeerd wordt, zullen gebruikers geen resultaten zien van deze zone.';
$string['confirm_deleteall'] = 'Weet je zeker dat je alle geïndexeerde inhoud nu wil verwijderen? Zolang de site niet opnieuw geïndexeerd is, zullen gebruikers geen zoekresultaten krijgen.';
$string['confirm_indexall'] = 'Weet je zeker dat je de geïndexeerde inhoud nu wil verwijderen? Als een grote hoeveelheid inhoud geïndexeerd moet worden, dan kan dit een lange tijd in beslag nemen. Voor live servers moet je het indexeren overlaten aan de "Globaal zoeken indexeren" geplande taak.';
$string['confirm_reindexall'] = 'Weet je zeker dat je alle site-inhoud nu opnieuw wil indexeren? Als de site een grote hoeveelheid inhoud heeft, dan zal dit een lange tijd in beslag nemen en gebruikers zullen geen volledige zoekresultaten krijgen tot het indexeren voltooid is.';
$string['core-all'] = 'Allemaal';
$string['core-course-content'] = 'Cursusinhoud';
$string['core-courses'] = 'Cursussen';
$string['core-other'] = 'Anders';
$string['core-users'] = 'Gebruikers';
$string['createanindex'] = 'maak een index';
$string['createdon'] = 'Gemaakt op';
$string['database'] = 'Databank';
$string['databasestate'] = 'Databankstatus indexeren';
$string['datadirectory'] = 'Datamap';
$string['deleteindex'] = 'Verwijder index {$a}';
$string['deletionsinindex'] = 'Verwijderd uit index';
$string['docmodifiedon'] = 'Laatst gewijzigd op {$a}';
$string['doctype'] = 'Documenttype';
$string['doctypenotsupported'] = 'Dit type document wordt nog niet ondersteund';
$string['documents'] = 'documenten';
$string['documentsfor'] = 'Documenten voor';
$string['documentsindatabase'] = 'Documenten in databank';
$string['documentsinindex'] = 'Documenten in index';
$string['duration'] = 'Tijdsduur';
$string['emptydatabaseerror'] = 'Databanktabel ontbreekt of bevat geen index records.';
$string['enginenotfound'] = 'Zoekmachine {$a} niet gevonden';
$string['enginenotinstalled'] = '{$a} niet geïnstalleerd.';
$string['enginenotselected'] = 'U heeft geen zoekmachine gekozen.';
$string['engineserverstatus'] = 'De zoekmachine is niet beschikbaar. Neem contact op met je beheerder.';
$string['enteryoursearchquery'] = 'Geef je zoekopdracht';
$string['errorareanotavailable'] = 'Zoekzone {$a} is niet beschikbaar.';
$string['error_indexing'] = 'Er is een fout opgetreden bij het indexeren';
$string['errors'] = 'Fouten';
$string['everywhere'] = 'Overal waar je toegang hebt';
$string['filesinindexdirectory'] = 'Bestanden in indexmap';
$string['filterheader'] = 'Filter';
$string['fromtime'] = 'Gewijzigd na';
$string['globalsearch'] = 'Globaal zoeken';
$string['globalsearchdisabled'] = 'Globaal zoeken is niet ingeschakeld';
$string['gradualreindex'] = 'Gradueel opnieuw indexeren {$a}';
$string['gradualreindex_confirm'] = 'Weet je zeker dat je {$a} opnieuw wil indexeren? Dit kan een lange tijd in beslag nemen, hoewel bestaande gegevens beschikbaar zullen blijven tijdens het indexeren.';
$string['gradualreindex_queued'] = 'Opnieuw indexeren is gevraagd voor {$a->name} ({$a->count} contexten). Dit indexeren zal uitgevoerd worden door de "Globaal zoeken indexeren" geplande taak.';
$string['incourse'] = 'In cursus {$a}';
$string['index'] = 'Index';
$string['indexwhendisabledfullnotice'] = 'Indexeren is op dit ogenblik niet toegestaan wanneer zoeken is uitgeschakeld. Kijk om dit in te schakelen naar de <a href="{$a->url}">searchindexwhendisabled-instelling</a>.';
$string['indexwhendisabledshortnotice'] = 'Indexering is niet beschikbaar.';
$string['invalidindexerror'] = 'Indexmap bevat een ongeldige index of is leeg.';
$string['ittook'] = 'Het duurde';
$string['matchingfile'] = 'Overeenkomst van bestand <span class="filename">{$a}</span';
$string['matchingfiles'] = 'Overeenkomst van bestanden:';
$string['mycoursesonly'] = 'Alleen mijn cursussen';
$string['next'] = 'VolgendeAdm';
$string['noindexmessage'] = 'Beheer: zo\'n index bestaat niet.';
$string['noresults'] = 'Geen resultaat';
$string['normalsearch'] = 'Normaal zoeken';
$string['notitle'] = 'Geen titel';
$string['openedon'] = 'geopend op';
$string['optimize'] = 'Optimaliseer';
$string['order'] = 'Resultaatsvolgorde';
$string['order_location'] = 'Geef voorkeur aan resultaten in verband met {$a}';
$string['order_relevance'] = 'Meest relevante resultaten eerst';
$string['priority'] = 'Prioriteit';
$string['priority_normal'] = 'Normaal';
$string['priority_reindexing'] = 'Opnieuw indexeren';
$string['privacy:metadata'] = 'Het subsysteem voor zoeken bewaart geen persoonlijke gegvens.';
$string['progress'] = 'Vordering';
$string['queryerror'] = 'De zoekopdracht die je gegeven hebt kon niet uitgevoerd worden door de zoekmachine: {$a}';
$string['queueheading'] = 'Bijkomende indexeringswachtrij  ({$a} items)';
$string['resultsreturnedfor'] = 'resultaten voor';
$string['runindexer'] = 'Start indexer';
$string['runindexertest'] = 'Start indexer test';
$string['schemanotupdated'] = 'Het zoekschema is verouderd.';
$string['schemaversionunknown'] = 'De zoekrobot heeft geen weet van het de huidige schema-versie.';
$string['score'] = 'Score';
$string['search'] = 'Zoek';
$string['searcharea'] = 'Zoekzone';
$string['searchareacategories'] = 'Zoek gebied categorieën';
$string['search:course'] = 'Cursussen';
$string['search:customfield'] = 'Aangepaste velden voor cursussen';
$string['searching'] = 'Zoeken in ...';
$string['search:message_received'] = 'Berichten - ontvangen';
$string['search:message_sent'] = 'Berichten - verzonden';
$string['search:mycourse'] = 'Mijn cursussen';
$string['searchnotpermitted'] = 'Je hebt het recht niet om te zoeken';
$string['search:section'] = 'Cursussecties';
$string['searchsetupdescription'] = 'Volgende stappen helpen je om Moodle globaal zoeken in te stellen.';
$string['search:user'] = 'Gebruikers';
$string['searchwithin'] = 'Zoeken in';
$string['seconds'] = 'seconden';
$string['solutions'] = 'Oplossingen';
$string['statistics'] = 'Statistieken';
$string['step'] = 'Stap';
$string['thesewordshelpimproverank'] = 'Deze woorden verbeteren de rangschikking';
$string['thesewordsmustappear'] = 'Deze woorden moeten voorkomen';
$string['thesewordsmustnotappear'] = 'Deze woorden mogen niet voorkomen';
$string['title'] = 'Titel';
$string['tofetchtheseresults'] = 'met deze resultaten overeenkomen';
$string['totalsize'] = 'Totale grootte';
$string['totime'] = 'Gewijzigd voor';
$string['type'] = 'Type';
$string['uncompleteindexingerror'] = 'Indexering was niet volledig voltooid. Herstart de indexering.';
$string['versiontoolow'] = 'Sorry, globaal zoeken vereist PHP 5.0.0 of later';
$string['viewresultincontext'] = 'Bekijk resultaat in context';
$string['wordsintitle'] = 'Woorden in titel';
