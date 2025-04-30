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
 * Strings for component 'search_solr', language 'sv', version '4.4'.
 *
 * @package     search_solr
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['connectionerror'] = 'Den angivna Solr-servern är inte tillgänglig eller så finns inte det angivna indexet';
$string['connectionsettings'] = 'Anslutningsinställningar';
$string['errorcreatingschema'] = 'Det gick inte att skapa Solr-schemat: {$a}';
$string['errorsolr'] = 'Solrs sökmotor rapporterade ett fel: {$a}';
$string['errorvalidatingschema'] = 'Det gick inte att validera Solr-schemat: fältet {$a->fieldname} finns inte. Klicka <a href="{$a->setupurl}">här</a> för att konfigurera nödvändiga fält.';
$string['extensionerror'] = 'Apache Solr PHP-tillägget är inte installerat. Kontrollera dokumentationen.';
$string['fileindexing'] = 'Aktivera indexering av filer';
$string['fileindexing_help'] = 'Om din Solr-installation stöder det tillåter den här funktionen Moodle att skicka filer för indexering.<br />
Du måste indexera om allt webbplatsinnehåll efter att ha aktiverat det här alternativet för att alla filer ska läggas till.';
$string['fileindexsettings'] = 'Inställningar för filindexering';
$string['maxindexfilekb'] = 'Maximal filstorlek att indexera (kB)';
$string['maxindexfilekb_help'] = 'Filer som är större än det här antalet kilobyte inkluderas inte i sökindexeringen. Om den är noll indexeras filer i alla storlekar.';
$string['minimumsolr4'] = 'Moodle kräver minst version 4.0 av Solr';
$string['missingconfig'] = 'Apache Solr-servern är ännu inte konfigurerad i Moodle.';
$string['multivaluedfield'] = 'Fältet "{$a}" returnerade en matris i stället för ett tal. Ta bort det aktuella indexet, skapa ett nytt och kör <em>setup_schema.php</em> innan du indexerar data i Solr.';
$string['nodatafromserver'] = 'Ingen data från server';
$string['pluginname'] = 'Solr';
$string['privacy:metadata'] = 'Denna pluginmodul skickar data externt till en länkad Solr-sökmotor. Den lagrar ingen data lokalt.';
$string['privacy:metadata:data'] = 'Personuppgifter som skickas vidare från sökundersystemet.';
$string['schemafieldautocreated'] = 'Fältet "{$a}" finns redan i Solr-schemat. Du glömde förmodligen att köra det här skriptet innan du indexerade data och fälten återskapades automatiskt av Solr. Ta bort det aktuella indexet, skapa ett nytt och kör setup_schema.php innan du indexerar data i Solr.';
$string['schemasetupfromsolr5'] = 'Solr-serverversionen är lägre än 5.0. Det här skriptet kan bara ange ditt schema om Solr-versionen är 5.0 eller senare. Du måste ställa in fälten manuellt i schemat enligt <code>\\search_solr\\document::get_default_fields_definition()</code>.';
$string['searchinfo'] = 'Sökuttryck';
$string['searchinfo_help'] = 'Det fält som ska sökas igenom kan anges genom att sökfrågan föregås av "title:", "content:", "name:" eller "intro:". Om du till exempel söker efter "title:nyheter" returneras resultat med ordet "nyheter" i titeln.

Booleska operatorer (\'AND\', \'OR\', \'NOT\') kan användas för att kombinera eller utesluta nyckelord.

Jokertecken (\'*\' eller \'?\' ) kan användas för att representera tecken i sökfrågan.';
$string['setupok'] = 'Schemat är redo att användas.';
$string['solrauthpassword'] = 'HTTP-lösenord';
$string['solrauthuser'] = 'HTTP-användarnamn';
$string['solrhttpconnectionport'] = 'Port';
$string['solrhttpconnectiontimeout'] = 'Timeout';
$string['solrhttpconnectiontimeout_desc'] = 'Timeout för HTTP-anslutning är den maximala tiden i sekunder som tillåts för HTTP-dataöverföringsåtgärden.';
$string['solrindexname'] = 'Indexnamn';
$string['solrinfo'] = 'Solr';
$string['solrnotselected'] = 'Solr-motorn är inte den konfigurerade sökmotorn';
$string['solrsecuremode'] = 'Säkert läge';
$string['solrserverhostname'] = 'Värdnamn';
$string['solrserverhostname_desc'] = 'Solr-serverns domännamn.';
$string['solrsetting'] = 'Solr-inställningar';
$string['solrsslcainfo'] = 'Namn på SSL CA-certifikat';
$string['solrsslcainfo_desc'] = 'Filnamn som innehåller ett eller flera certifikatutfärdarcertifikat för att verifiera peers';
$string['solrsslcapath'] = 'Sökväg för SSL CA-certifikat';
$string['solrsslcapath_desc'] = 'Katalogsökväg med flera certifikatutfärdarcertifikat för att verifiera peers';
$string['solrsslcert'] = 'SSL-certifikat';
$string['solrsslcert_desc'] = 'Filnamn som refererar till ett PEM-formaterat privat certifikat';
$string['solrsslkey'] = 'SSL-nyckel';
$string['solrsslkey_desc'] = 'Filnamn som refererar till en PEM-formaterad privat nyckel';
$string['solrsslkeypassword'] = 'Lösenord SSL-nyckel';
$string['solrsslkeypassword_desc'] = 'Lösenord för PEM-formaterad privat nyckelfil';
