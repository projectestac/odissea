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
 * Strings for component 'search_solr', language 'nl', version '4.4'.
 *
 * @package     search_solr
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['connectionerror'] = 'De opgegeven Solr server is niet beschikbaar of de opgegeven index bestaat niet';
$string['connectionsettings'] = 'Connectie-instellingen';
$string['errorcreatingschema'] = 'Fout bij het maken van het Solr schema: {$a}';
$string['errorsolr'] = 'De Solr-zoekmachine heeft een fout gemeld: {$a}';
$string['errorvalidatingschema'] = 'Fout bij het valideren van het Solr schema: veld {$a->fieldname} bestaat niet. Volg <a href="{$a->setupurl}"deze link</a> om de vereiste velden in te stellen.';
$string['extensionerror'] = 'De Apache Solr PHP-extentie is niet geïnstalleerd. Raadpleeg de documentatie.';
$string['fileindexing'] = 'Bestanden indexeren inschakelen';
$string['fileindexing_help'] = 'Als je Solr installatie het ondersteunt, dan dan Moodle bestanden sturen om te laten indexeren.<br>Je zult alle site-inhoud moeten herindexeren na het inschakelen van deze optie om alle bestanden toe te voegen.';
$string['fileindexsettings'] = 'Instellingen bestanden indexeren';
$string['maxindexfilekb'] = 'Maximale bestandsgroote om te indexeren (kB)';
$string['maxindexfilekb_help'] = 'Bestanden, groter dan dit aantal kilobytes zullen niet opgenomen worden in de zoek-index. Indien ingesteld op nul, dan zullen bestanden van gelijk welke grotte geïndexeerd worden.';
$string['minimumsolr4'] = 'Solr 4.0 is de minimumversie die Moodle vereist.';
$string['missingconfig'] = 'Jouw Apache Solr server is nog niet geconfigureeerd in Moodle.';
$string['multivaluedfield'] = 'Veld  "{$a}" gaf een rij terug in plaats van een getal. Verwijder de huidige index, maak een nieuwe en start setum_schema.php voor je data indexeert in Solr.';
$string['nodatafromserver'] = 'Geen gegevens van de server';
$string['pluginname'] = 'Solr';
$string['privacy:metadata'] = 'Deze plugin stuurt gegevens naar een gelinkte Solr zoekmachine. Het bewaart lokaal geen gegevens.';
$string['privacy:metadata:data'] = 'Persoonlijke gegevens doorgegeven vanuit het zoeken subsysteem.';
$string['schemafieldautocreated'] = 'Veld  "{$a}" bestaat al in het Solr Schema. Je vergat waarschijnlijk dit script te laten lopen voor je gegevens geïndexeerd hebt en de velden automatisch gecreëerd werden door Solr.
Verwijder de huidige index, maak een nieuwe en start setup_schema.php opnieuw voor je gegevens indexeert in Solr.';
$string['schemasetupfromsolr5'] = 'Je Solr-versie is lager dan 5.0. Dit script kan je schema alleen maken als je Solr-versie 5.0 of hoger is. Je moet de velden manueel instellen  in je schema, overeenkomstig met \\search_solr\\document::get_default_fields_definition().';
$string['searchinfo'] = 'Zoekopdrachten';
$string['searchinfo_help'] = 'Het te doorzeken veld mag gespecificeerd worden door de zoekopdracht een prefix te geven met tle:\', \'content:\', \'name:\', of \'intro:\'. Bijvoorbeeld zoeken naar \'title:nieuws\' zal resultaten geven met het woord \'nieuws\' in de titel.

Boolse operators (\'AND\', \'OR\', \'NOT\') mogen gebruikt worden om sleutelwoorden te combineren of uit te sluiten.

Jokertekens (\'*\' of \'?\') kunnen gebruikt worden om tekens te vervangen in de zoekopdracht.';
$string['setupok'] = 'Het schema is klaar om te gebruiken';
$string['solrauthpassword'] = 'HTTP-authenticatie wachtwoord';
$string['solrauthuser'] = 'HTTP-authenticatie gebruikersnaam';
$string['solrhttpconnectionport'] = 'Poort';
$string['solrhttpconnectiontimeout'] = 'Timeout';
$string['solrhttpconnectiontimeout_desc'] = 'De HTTP connectie-timeout is de maximale tijd in seconden die toegestaan is voor een HTTP gegevensoverdracht.';
$string['solrindexname'] = 'Index naam';
$string['solrinfo'] = 'Solr';
$string['solrnotselected'] = 'Solr engine is niet de geconfigureeerde zoekmachine';
$string['solrsecuremode'] = 'Veilige modus';
$string['solrserverhostname'] = 'host naam';
$string['solrserverhostname_desc'] = 'Domeinnaam van de Solr-server';
$string['solrsetting'] = 'Solr instellingen';
$string['solrsslcainfo'] = 'SSL CA certificaatsnaam';
$string['solrsslcainfo_desc'] = 'Bestandsnaam die één of meer CA certificaten bevat om de peer server mee te verifiëren';
$string['solrsslcapath'] = 'SSL CA certificaatspad';
$string['solrsslcapath_desc'] = 'Mam waarin meerdere CA certificaten zitten om de peer servers mee te verifiëren.';
$string['solrsslcert'] = 'SSL certificaat';
$string['solrsslcert_desc'] = 'Bestandsnaam voor een PEM-geformateerd privaat certificaat';
$string['solrsslkey'] = 'SSL sleutel';
$string['solrsslkey_desc'] = 'Bestandsnaam voor een PEM-geformateerde private sleutel';
$string['solrsslkeypassword'] = 'SSL sleutel wachtwoord';
$string['solrsslkeypassword_desc'] = 'Wachtwoord voor een PEM-geformateerde private sleutel';
