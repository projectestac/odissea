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
 * Strings for component 'block', language 'nl', version '4.1'.
 *
 * @package     block
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['anypagematchingtheabove'] = 'Elke pagina die met bovenstaande overeenkomt';
$string['appearsinsubcontexts'] = 'Verschijnt in subcontexten';
$string['assignrolesinblock'] = 'Wijs rollen toe in blok {$a}';
$string['blocksdrawertoggle'] = 'Toon/verberg blokkenpaneel';
$string['blocksettings'] = 'Blokinstellingen';
$string['bracketfirst'] = '{$a} (eerst)';
$string['bracketlast'] = '{$a} (laatst)';
$string['configureblock'] = 'Configureer blok {$a}';
$string['contexts'] = 'Paginacontext';
$string['contexts_help'] = 'Contexts zijn meer specifieke paginatypes waar dit blok getoond kan worden binnen de oorspronkelijke bloklocatie. Je zult hier verschillende opties vinden, afhankelijk van de oorspronkelijke bloklocatie en je huidige locatie. Bijvoorbeeld, je kunt een blok tijdelijk beperken tot alleen verschijnen op forumpagina\'s in een cursus door het blok toe te voegen in een cursus (waardoor het op alle subpagina\'s verschijnt), dan in een forum te gaan en de blokinstellingen te wijzigen zodat het blok beperkt is tot alleen forumpagina\'s.';
$string['createdat'] = 'Oorspronkelijke plaats blok';
$string['createdat_help'] = 'De oorspronkelijke locatie waar dit blok gemaakt was. Door blokinstellingen kan het blok op andere locaties (contexts) verschijnen binnen de oorspronkelijke locatie. Bijvoorbeeld, een blok aangemaakt op een cursuspagina kan getoond worden in activiteiten binnen die cursus. Een blok gemaakt op de site startpagina kan getoond worden op de hele site.';
$string['defaultregion'] = 'Standaardplaats';
$string['defaultregion_help'] = 'Thema\'s kunnen één of meer benoemde blokregio\'s definiëren waar blokken getoond worden. Deze instelling bepaalt in welke daarvan je wil dat de blokken standaard verschijnen; De regio kan overschreven worden op specifieke pagina\'s indien nodig.';
$string['defaultweight'] = 'Standaardweging';
$string['defaultweight_help'] = 'De standaardweging maakt het je mogelijk ruwweg te kiezen waar je het blok wil laten verschijnen, eerder onderaan of bovenaan. De uiteindelijke plaats wordt berekend uit alle blokken in die regio (zo kan er bijvoorbeeld slechts één blok bovenaan staan). Deze waarde kan overschreven worden op bepaalde pagina\'s indien nodig.';
$string['deleteblock'] = 'Verwijder blok {$a}';
$string['deleteblockcheck'] = 'Dit zal het blok {$a} verwijderen.';
$string['deleteblockinprogress'] = 'Blok {$a} wordt verwijderd ...';
$string['deleteblockwarning'] = '<p>Je gaat een blok verwijderen dat ergens anders verschijnt.</p><p>Oorspronkelijke bloklocatie: {$a->location}<br />Toon op paginatypes: {$a->pagetype}</p><p>Weet je zeker dat je verder wil gaan?</p>';
$string['deletecheck'] = 'Verwijder blok {$a}?';
$string['deletecheck_modal'] = 'Verwijder blok?';
$string['hideblock'] = 'Verberg blok {$a}';
$string['hidepanel'] = 'Verberg paneel';
$string['moveblock'] = 'Verplaats blok {$a}';
$string['moveblockafter'] = 'Zet het blok na blok {$a}';
$string['moveblockbefore'] = 'Zet het blok voor blok {$a}';
$string['moveblockinregion'] = 'Verplaats blok naar regio {$a}';
$string['movingthisblockcancel'] = 'Dit blok aan het verplaatsen ({$a})';
$string['myblocks'] = 'Mijn blokken';
$string['onthispage'] = 'Op deze pagina';
$string['pagetypes'] = 'Paginatypes';
$string['pagetypewarning'] = 'Het vorige paginatype kan niet meer geselecteerd worden. Kies het meest geschikte type hieronder.';
$string['privacy:metadata:userpref:dockedinstance'] = 'Bewaart wanneer de gebruiker een blok docked';
$string['privacy:metadata:userpref:hiddenblock'] = 'Bewaart wanneer de gebruiker een blok samenklapt/verbergt';
$string['privacy:request:blockisdocked'] = 'Geeft aan of een blok gedocked was';
$string['privacy:request:blockishidden'] = 'Geeft aan of een blok samengeklapt/verborgen is';
$string['region'] = 'Plaats';
$string['restrictpagetypes'] = 'Toon op paginatypes';
$string['showblock'] = 'Toon blok {$a}';
$string['showoncontextandsubs'] = 'Toon op \'{$a}\' en alle paginas daarbinnen';
$string['showoncontextonly'] = 'Toon enkel op \'{$a}\'';
$string['showonentiresite'] = 'Toon op heel de site';
$string['showonfrontpageandsubs'] = 'Toon op de site startpagina en op alle pagina\'s die aan de site startpagina toegevoegd zijn.';
$string['showonfrontpageonly'] = 'Toon enkel op de site startpagina';
$string['subpages'] = 'Selecteer pagina\'s';
$string['thisspecificpage'] = 'Deze pagina';
$string['visible'] = 'Zichtbaar';
$string['weight'] = 'Weging';
$string['wherethisblockappears'] = 'Waar dit blok verschijnt';
