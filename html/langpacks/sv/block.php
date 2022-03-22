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
 * Strings for component 'block', language 'sv', version '3.11'.
 *
 * @package     block
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtodock'] = 'Flytta det här till dockan';
$string['anypagematchingtheabove'] = 'Alla sidor matchar den ovanstående';
$string['appearsinsubcontexts'] = 'Visas i underliggande sammanhang';
$string['assignrolesinblock'] = 'Tilldela roller i {$a} block';
$string['blocksdrawertoggle'] = 'Dölj/visa blocklåda';
$string['blocksettings'] = 'Blockinställningar';
$string['bracketfirst'] = '{$a} (överst)';
$string['bracketlast'] = '{$a} (nederst)';
$string['configureblock'] = 'Konfigurera {$a} block';
$string['contexts'] = 'Sammanhang för sida';
$string['contexts_help'] = 'Kontexter är mer specifika typer av sidor där det här blocket kan visas inom den ursprungliga blockplatsen. Du kommer att ha olika alternativ här beroende på den ursprungliga blockplatsen och din nuvarande plats. Till exempel kan du begränsa ett block till att endast visas på forumsidor i en kurs genom att lägga till blocket till kursen (vilket även gör att det visas på alla undersidor) och sedan gå in i ett forum och redigera blockinställningarna igen för att begränsa visning till bara forumsidor.';
$string['createdat'] = 'Ursprunglig blockplats';
$string['createdat_help'] = 'Den ursprungliga platsen där blocket skapades. Blockinställningar kan göra att blocket även kan visas på andra platser (sammanhang) inom ramen för den ursprungliga platsen. Ett block som skapas på en kurssida kan till exempel visas i aktiviteter i den kursen. Ett block som skapats på startsidan kan visas på hela webbplatsen.';
$string['defaultregion'] = 'Standardplacering';
$string['defaultregion_help'] = 'Teman kan definiera en eller flera blockregioner där blocken visas. Denna inställning bestämmer i vilken av dessa du vill att blocket visas som standard. Detta kan åsidosättas på vissa sidor om det krävs.';
$string['defaultweight'] = 'Standardvikt';
$string['defaultweight_help'] = 'Med en standardviktning kan du välja ungefär var du vill att blocket ska visas i den valda regionen; antingen överst eller längst ned. Den slutliga platsen beräknas utifrån alla block i den regionen (till exempel kan endast ett block faktiskt vara överst). Det här värdet kan åsidosättas på specifika sidor om det behövs.';
$string['deleteblock'] = 'Ta bort {$a} block';
$string['deleteblockcheck'] = 'Är du säker att du vill ta bort blocket <b>{$a}</b>?';
$string['deleteblockwarning'] = '<p>Du håller på att ta bort ett block som även visas på andra platser.</p><p>Ursprunglig plats: {$a->location}<br />Visas på dessa sidtyper: {$a->pagetype}</p><p>Är du säker på att du vill fortsätta?</p>';
$string['deletecheck'] = 'Ta bort blocket <strong>{$a}</strong>?';
$string['dockblock'] = 'Docka {$a} blocket';
$string['hideblock'] = 'Dölj blocket {$a}';
$string['hidedockpanel'] = 'Dölj dockpanelen';
$string['hidepanel'] = 'Dölj panel';
$string['moveblock'] = 'Flytta blocket {$a}';
$string['moveblockafter'] = 'Flytta blocket till efter blocket {$a}';
$string['moveblockbefore'] = 'Flytta blocket till innan blocket {$a}';
$string['moveblockinregion'] = 'Flytta blocket till {$a}-området';
$string['movingthisblockcancel'] = 'Flyttar det här blocket ({$a})';
$string['myblocks'] = 'Mina block';
$string['onthispage'] = 'På den här sidan';
$string['pagetypes'] = 'Sidtyper';
$string['pagetypewarning'] = 'Den tidigare angivna sidtypen är inte längre valbar. Välj den lämpligaste sidtypen nedan.';
$string['privacy:metadata:userpref:dockedinstance'] = 'Registrerar när användaren dockade ett block';
$string['privacy:metadata:userpref:hiddenblock'] = 'Registrerar när användaren komprimerade/dolde ett block';
$string['privacy:request:blockisdocked'] = 'Indikerar om blocket dockades';
$string['privacy:request:blockishidden'] = 'Visar om blocket doldes/komprimerades';
$string['region'] = 'Placering';
$string['restrictpagetypes'] = 'Visa på sidor av typen';
$string['showblock'] = 'Visa blocket {$a}';
$string['showoncontextandsubs'] = 'Visa på \'{$a}\' och alla sidor inom den';
$string['showoncontextonly'] = 'Visa bara på \'{$a}\' ';
$string['showonentiresite'] = 'Visa över hela webbplatsen';
$string['showonfrontpageandsubs'] = 'Visa på startsidan och på alla sidor som läggs till på startsidan.';
$string['showonfrontpageonly'] = 'Visa bara på startsidan';
$string['subpages'] = 'Välj sidor';
$string['thisspecificpage'] = 'Den här specifika sidan';
$string['undockall'] = 'Frigör samtliga från dockning';
$string['undockblock'] = 'Docka av {$a} blocket';
$string['undockitem'] = 'Frigör den här komponenten från dockning';
$string['visible'] = 'Synligt';
$string['weight'] = 'Vikt ';
$string['wherethisblockappears'] = 'Där det här blocket förekommer';
