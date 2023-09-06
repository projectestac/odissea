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
 * Strings for component 'tool_customlang', language 'nl', version '4.1'.
 *
 * @package     tool_customlang
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkin'] = 'Bewaar strings in taalpakket';
$string['checkout'] = 'Open taalpakket voor bewerken';
$string['checkoutdone'] = 'Taalpakket geladen';
$string['checkoutinprogress'] = 'Taalpakket laden';
$string['cliexportfileexists'] = 'Bestand voor {$a->lang} bestaat al, overgeslagen. Als je wil overschrijven, voeg dan de override=true - optie toe.';
$string['cliexportfilenotfoundforcomponent'] = 'Bestand {$a->filepath} niet gevonden voor de taal {$a->lang}. Bestand overgeslagen.';
$string['cliexportheading'] = 'Start met exporteren van taalbestanden.';
$string['cliexportnofilefoundforlang'] = 'Geen te exporteren bestand gevonden. Overgeslagen voor deze taal.';
$string['cliexportstartexport'] = 'Taal {$a} exporteren';
$string['cliexportzipdone'] = 'Zip gemaakt: {$a}';
$string['cliexportzipfail'] = 'Kan zip niet maken: {$a}';
$string['clifiles'] = 'Bestanden om te importeren in {$a}';
$string['cliimporting'] = 'Tekenreeks voor bestanden importeren (modus {$a})';
$string['climissingfiles'] = 'Ontbrekende geldige bestanden';
$string['climissinglang'] = 'Ontbrekende taal';
$string['climissingmode'] = 'Ontbrekende of ongeldige modus (geldig is alle, nieuwe of aangepaste)';
$string['climissingsource'] = 'Ontbrekend bestand of map';
$string['clinolog'] = 'Niets om te importeren naar {$a}';
$string['confirmcheckin'] = 'Je gaat wijzigingen bewaren in je lokaal taalpakket. Dit proces zal de aangepaste strings van de vertaler naar de datamap exporteren en jouw site zal de aangepaste strings beginnen te gebruiken. Klik op \'Doorgaan\' om verder te gaan met het bewaren van je strings.';
$string['customlang:edit'] = 'Bewerk lokale vertaling';
$string['customlang:export'] = 'Exporteer lokale vertaling';
$string['customlang:view'] = 'Bekijk lokale vertaling';
$string['editlangpack'] = 'Taalpakket bewerken';
$string['export'] = 'Exporteer aangepaste strings';
$string['exportfilter'] = 'Selecteer te exporteren componenten';
$string['exportzipfilename'] = 'Aangepaste taal-export-{$a->lang}.zip';
$string['filter'] = 'Filter strings';
$string['filtercomponent'] = 'Toon strings van deze component';
$string['filtercustomized'] = 'Enkel aangepaste';
$string['filtermodified'] = 'Enkel gewijzigd in deze sessie';
$string['filteronlyhelps'] = 'Enkel help';
$string['filtershowstrings'] = 'Toon strings';
$string['filterstringid'] = 'Stringidentificatie';
$string['filtersubstring'] = 'Enkel strings met';
$string['headingcomponent'] = 'Component';
$string['headinglocal'] = 'Lokale aanpassing';
$string['headingstandard'] = 'Standaard tekst';
$string['headingstringid'] = 'String';
$string['import'] = 'Importeren van aangepaste strings';
$string['import_all'] = 'Maak of update alle strings van de component of componenten';
$string['import_mode'] = 'Importeer modus';
$string['import_new'] = 'Maak alleen strings aan met lokale aanpassingen';
$string['import_update'] = 'Update enkel strings met een lokale wijziging';
$string['importfile'] = 'Importeer bestand';
$string['langpack'] = 'Taalcomponent(en)';
$string['markinguptodate'] = 'Aanpassing als up-to-date markeren';
$string['markinguptodate_help'] = 'De aangepaste vertaling kan verouderd worden als het Engelse origineel of de officiële vertaling gewijzigd is sinds de string op jouw site was aangepast.
Herbekijk de aangepaste vertaling. Als je vindt dat die goed is, zet dan een vinkje. Anders kun je ze bewerken.';
$string['markuptodate'] = 'Markeer als up-to-date';
$string['modifiedno'] = 'Er zijn geen aangepast strings om te bewaren.';
$string['modifiednum'] = 'Er zijn {$a} aangepaste strings. Wil je deze wijzigingen bewaren in je lokaal taalpakket?';
$string['nolocallang'] = 'Geen lokale strings gevonden';
$string['nostringsfound'] = 'Er zijn geen strings gevonden. Wijzig je filterinstellingen';
$string['notice_ignorenew'] = 'Negeer string {$a->component}/{$a->stringid}  want die is niet aangepast.';
$string['notice_ignoreupdate'] = 'Negeer string {$a->component}/{$a->stringid}  want die is al gedefinieerd.';
$string['notice_inexitentstring'] = 'String {$a->component}/{$a->stringid}  kan niet gevonden worden.';
$string['notice_missingcomponent'] = 'Ontbrekende component {$a->component}.';
$string['notice_success'] = 'String {$a->component}/{$a->stringid}  met succes aangepast.';
$string['placeholder'] = 'Plaatshouders';
$string['placeholder_help'] = 'Plaatshouders zijn speciale tekenreeksen binnen een string, zoals  `{$a}` of `{$a->something}`. Ze worden vervangen door een waarde wanneer de string getoond wordt.

Het is belangrijk om de plaatshouders exact te kopiëren, zoals ze in de originele string voorkomen. Vertaal ze niet en wijzig ook hun links-naar-rechts richting niet.';
$string['placeholderwarning'] = 'String met plaatshouder';
$string['pluginname'] = 'Taalpakket aanpassingen';
$string['privacy:metadata'] = 'De taal aanpassingsplugin bewaart geen persoonlijke gegevens.';
$string['savecheckin'] = 'Bewaar wijzigingen in het taalpakket';
$string['savecontinue'] = 'Pas wijzigingen toe en ga verder met bewerken';
