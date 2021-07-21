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
 * Strings for component 'atto_accessibilitychecker', language 'sv', version '3.11'.
 *
 * @package     atto_accessibilitychecker
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['emptytext'] = 'Töm text';
$string['entiredocument'] = 'Hela dokumentet';
$string['imagesmissingalt'] = 'Bilder kräver alternativ text. Om du vill åtgärda den här varningen lägger du till ett alt-attribut i dina img-taggar. Ett tomt alt-attribut kan användas, men bara när bilden är rent dekorativ och inte innehåller någon information.';
$string['needsmorecontrast'] = 'Färgerna på förgrunds- och bakgrundstexten har inte tillräcklig kontrast. Om du vill åtgärda den här varningen ändrar du textens förgrunds- eller bakgrundsfärg så att den blir lättare att läsa.';
$string['needsmoreheadings'] = 'Det finns mycket text utan rubriker. Rubriker gör det möjligt för användare av skärmläsare att enkelt navigera på sidan och gör sidan mer användbar för alla.';
$string['nowarnings'] = 'Gratulerar! Inga tillgänglighetsproblem hittades.';
$string['pluginname'] = 'Tillgänglighetskontroll';
$string['privacy:metadata'] = 'Pluginmodulen atto_accessibilitychecker lagrar inga personuppgifter.';
$string['report'] = 'Tillgänglighetsrapport:';
$string['tablesmissingcaption'] = 'Tabeller ska ha bildtexter. Även om det inte är nödvändigt för varje tabell att ha en bildtext är en bildtext i allmänhet till stor hjälp.';
$string['tablesmissingheaders'] = 'Tabeller bör ha rad och/eller kolumnrubriker.';
$string['tableswithmergedcells'] = 'Tabeller bör inte innehålla sammanfogade celler. Trots att detta är en accepterad standard för tabeller sedan många år stöder vissa skärmläsare fortfarande inte helt denna typ av komplexa tabeller. När det är möjligt, försök att "platta" tabellen och undvika sammanfogade celler.';
