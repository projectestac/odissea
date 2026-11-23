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
 * Strings for component 'qtype_geogebra', language 'nl', version '4.5'.
 *
 * @package     qtype_geogebra
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addconstraints'] = 'Voeg voorwaarden toe aan variabelen.';
$string['addmorevarblanks'] = 'Lege regels voor {no} extra variabelen.';
$string['answerinvalid'] = 'De antwoord-string in het antwoord is niet geldig. Dit zou niet mogen gebeuren.';
$string['answermissing'] = 'Het antwoord ontbreekt. Mogelijk is JavaScript uitgeschakeld in de browser of er is een onbekende fout opgetreden.';
$string['answervar'] = 'Variabelen voor automatisch beoordelen';
$string['answervar_help'] = 'Om automatisch te beoordelen: een naam of bools object in Geogebra dat waar is als de leerling de vraag (deels) opgelost heeft. Somt alle cijfers op voor alle boolse variabelen. De vraag is juist als er een combinatie meer dan 100% oplevert, maar er moet minstens één combinatie zijn die exact 100% geeft. Leeg laten voor manueel beoordelen.';
$string['applet_advanced_settings'] = 'Geavanceerde instellingen...';
$string['constraints'] = 'Voorwaarden';
$string['constraints_help'] = 'Zijn er voorwaarden voor variabelen, zoals een < b, die niet gedeclareerd kon worden met de opties in de schuifbalken? Komma-gescheiden lijst. Ondersteunde relaties zijn <, <=, >, >=. Als je een gelijkheid nodig hebt, dan moet je dezelfde variabele gebruiken wanneer je het GeoGebra werkblad maakt. Dynamische bereiken zoals het gebruiken van variabelen voor min/max van de schuifbalken worden niet ondersteund.';
$string['constraintswrongortoohard'] = '{$a->inequalities} zijn fout of te moeilijk om te bereiken, we probeerden (brute force) {$a->tries} keer in {$a->time} seconden. Misschien vinden we later een betere methode...';
$string['dragndrop'] = 'Sleep en plaats een GeoGebra-bestand ergens in de GeoGebra Applet sectie';
$string['enable_label_drags'] = 'Slepen van labels inschakelen';
$string['enable_right_click'] = 'Rechts klikken en bewerken via toetsenbord inschakelen';
$string['enable_shift_drag_zoom'] = 'Shift-slepen & zoom inschakelen';
$string['feedback'] = 'Feedback als de variabele waar is';
$string['feedback_help'] = 'De feedback wordt automatisch uit de titel van de variabele in het GeoGebra-bestand genomen.';
$string['forcedimensions'] = 'Forceer appletafmetingen';
$string['geogebraapplet'] = 'GeoGebra Applet';
$string['getvars'] = 'Haal variabelen die willekeurig gemaakt kunnen worden uit de applet';
$string['ggbfilemissing'] = 'De base64 string in het antwoord ontbreekt. Waarschijnlijk is JavaScript niet ingeschakeld in de browser of er is een onbekende fout opgetreden';
$string['ggbturl'] = 'URL of ID van het GeoGebra Werkblad';
$string['ggbturl_help'] = 'Je kunt ofwel de deel-knop gebruiken op GeoGebra en de link kopiëren en plakken of je kunt de GeoGebra opslagruimte gebruiken. De applet en parameters worden in de databank bewaard, de applet zal niet herladen worden van GeoGebra, tenzij je dit vraagt. Het delen van de ID of het delen van de deelsleutel van de Applet wordt ook ondersteund.';
$string['ggbxmlmissing'] = 'De XML-string in het antwoord ontbreekt. Waarschijnlijk is Javascript niet ingeschakeld in de browser of er is een onbekende fout opgetreden';
$string['invalidinequality'] = '{$a} is niet geldig';
$string['isexercise'] = 'Gebruik GeoGebra voor het controleren van de vraag';
$string['isexercise_help'] = 'De applet bevat door de gebruiker gedefinieerde tools die gebruikt kunnen worden voor het automatisch controleren van de oefening.\\nLet op: Alle antwoorden hier onder zijn niet toepasbaar in dit geval!';
$string['israndomized'] = 'Zijn er variabelen die willekeurig gemaakt moeten worden?';
$string['loadapplet'] = '(Her)laad en toon applet';
$string['loadapplet_help'] = '(Her)laad de applet van GeoGebra en bewaar de nieuwe versie van GeoGebra in de databank.';
$string['mineqmax'] = 'Min en Max voor het willekeurig maken zijn niet goed opgegeven voor variable {$a}. Ofwel heb je min en max niet opgegeven voor de schuifbalk of het element is geen schuifbalk. Je moet dit waarschijnlijk aanpassen in je GeoGebra-bestand.';
$string['minplusstepgtmax'] = 'Min plus increment is groter dan max voor variable {$a}. Je moet dit waarschijnlijk aanpassen in je GeoGebra-bestand.';
$string['noappletloaded'] = 'Geen applet geladen! Controleer of de URL juist is en of je een applet kunt zien na het kiezen van een link of het (her)laden van de applet';
$string['nofractionsumeq1'] = 'Minstens één combinatie van cijfers moet een totaal van 100% geven';
$string['pluginname'] = 'GeoGebra';
$string['pluginname_help'] = 'Vragen die de leerling kan oplossen door GeoGebra te gebruiken';
$string['pluginname_link'] = 'question/type/geogebra';
$string['pluginnameadding'] = 'Voeg een GeoGebra-vraag toe';
$string['pluginnameediting'] = 'Bewerk een GeoGebra-vraag';
$string['pluginnamesummary'] = 'Een versie van berekende vragen waarbij GeoGebra gebruikt wordt om de vraag te tonen en het antwoord te controleren wanneer de test afgenomen wordt.';
$string['randomizedbutnovars'] = 'Je hebt er voor gekozen om de vraag willekeurig te maken, maar je hebt geen geldige variabelen opgegeven om willekeurige waarden aan te geven.';
$string['randomizedvar'] = 'Variabelen die willekeurige waarden moeten bevatten';
$string['randomizedvar_help'] = 'Variabelen die willekeurige waarden moeten bevatten (komma gescheiden lijst). Gebruik de schuifbalk-opties in GeoGebra om min, max en increment te bepalen. Deze variabelen kunnen ook gebruikt worden in de vraagtekst door ze tussen accolades te zetten, bijvoorbeeld: {a}';
$string['show_algebra_input'] = 'Toon invoegbalk';
$string['show_menu_bar'] = 'Toon menu';
$string['show_reset_icon'] = 'Toon icoon om constructie te resetten';
$string['show_tool_bar'] = 'Toon werkbalk';
$string['stepzero'] = 'Increment is 0 voor variabele {$a}; ofwel heb je de increment van deze schuifbalk nog niet opgegeven of het element is geen schuifbalk. Je moet dit waarschijnlijk aanpassen in je GeoGebra-bestand.';
$string['useafile'] = '... of gebruik een ggb-bestand';
$string['valuecheckedfor'] = 'Bool-object in GeoGebra dat gebruikt wordt om de juistheid te controleren';
$string['variablenamewrong'] = 'Een variabele met die naam kon niet gevonden worden in het GeoGebra-bestand.';
$string['variableno'] = 'Variabele {$a}';
$string['variables'] = 'Variabelen';
$string['willbereadfromfile'] = 'Zal van GeoGebra gelezen worden... (zie help-knop)';
