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
 * Strings for component 'qtype_geogebra'
 *
 * @package        qtype_geogebra
 * @author         Christoph Stadlbauer <christoph.stadlbauer@geogebra.org>
 * @copyright  (c) International GeoGebra Institute 2014
 * @license        http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['pluginname'] = 'GeoGebra';
$string['pluginname_link'] = 'question/type/geogebra';$string['addconstraints'] = 'Voeg beperkingen (voorwaarden) toe aan variabelen.';
$string['addmorevarblanks'] = 'Blanco\'s voor {no} meer variabele(n)';
$string['answerinvalid'] = 'De antwoord-string in de reactie is ongeldig.';
$string['answermissing'] = 'Het antwoord in je reactie ontbreekt. Ofwel is Javascript niet ingeschakeld in je Browser, ofwel deed er zich een onbekende fout voor.';
$string['answervar'] = 'Variabelen voor automatische beoordeling';
$string['answervar_help'] = 'Voor automatische beoordeling: een naam van een booleaans object in GeoGebra met als waarde \'true\' wanneer de student (deels) de vraag beantwoordde. Berekent de som van alle beoordelingen voor alle booleaanse variabelen. De vraag is correct beantwoord wanneer een combinatie 100% bereikt, maar er moet minstens één combinatie zijn die een score van 100% oplevert. Voorzie een blanco voor manuele beoordeling.';
$string['applet_advanced_settings'] = 'Geavanceerde instellingen...';
$string['constraints'] = 'Beperkingen (voorwaarden)';
$string['constraints_help'] = 'Zijn er beperkingen voor variabelen, zoals a < b, die niet konden vastgelegd worden met de schuifbalkopties? Ondersteunde voorwaarden (gescheiden door een komma) zijn: <, <=, >, >=. Wanneer je een ongelijkheid nodig hebt, moet je dezelfde variabele gebruiken bij het maken van je GeoGebra werkblad. Een dynamisch bereik, b.v. het gebruiken van variabelen voor min/max-waarden van een schuifknop wordt niet ondersteund.';
$string['constraintswrongortoohard'] = '{$a->inequalities} zijn fout of moeilijk te vinden, we probeerden (brute kracht) {$a->tries} keer in {$a->time} seconden. Misschien gebruiken we in de toekomst een betere methode...';
$string['dragndrop'] = 'Versleep een GeoGebra bestand naar de sectie GeoGebra applet';
$string['enable_label_drags'] = 'Verslepen van labels toestaan';
$string['enable_right_click'] = 'Rechtsklikken, zoomen en wijzigen via het toetsenbord toelaten';
$string['enable_shift_drag_zoom'] = 'Verslepen en zoomen toelaten';
$string['feedback'] = 'Feedback indien de variabele waar is';
$string['feedback_help'] = 'De feedback werd automatisch toegevoegd vanuit de titel.';
$string['geogebraapplet'] = 'GeoGebra applet';
$string['getvars'] = 'Bepaal variabelen om random te genereren in het applet';
$string['ggbfilemissing'] = 'De base64 string in de reactie ontbreekt. Ofwel is Javascript niet ingeschakeld in je Browser ofwel deed er zich een onbekende fout voor.';
$string['ggbturl'] = 'URL of ID van het GeoGebra werkblad';
$string['ggbturl_help'] = 'Je kunt ofwel de knop \'delen\' gebruiken in GeoGebra en de link kopiëren en plakken ofwel de GeoGebra opslagruimte gebruiken. Het applet en de parameters worden opgeslagen in de database, het applet wordt niet opnieuw ingeladen vanuit GeoGebra tot dit gevraagd wordt. Enkel het ID van het applet of de code om te delen wordt ook ondersteund.';
$string['ggbxmlmissing'] = 'De XML string in de reactie ontbreekt. Ofwel is Javascript niet ingeschakeld in je Browser ofwel deed er zich een onbekende fout voor.';
$string['invalidinequality'] = '{$a} is ongeldig';
$string['isexercise'] = 'Gebruik GeoGebra opdracht om de vraag te controleren';
$string['isexercise_help'] = 'Het applet bevat door de gebruiker aangemaakte knoppen die kunnen gebruikt worden om de oefening automatisch te controleren.\nLet op: Alle onderstaande antwoorden zijn in dit geval niet toepasbaar!';
$string['israndomized'] = 'Zijn er variabelen die je random wil genereren?';
$string['loadapplet'] = '(Her)laad en toon applet';
$string['loadapplet_help'] = '(Her)laad het applet vanuit GeoGebra en sla de nieuwe versie van GeoGebra op in de database.';
$string['mineqmax'] = 'Min and Max voor de random bepaling werden niet correct bepaald voor variabele {$a}. Ofwel heb je de min- en max-waarden van de schuifknop niet vastgelegd ofwel is het element helemaal geen schuifknop. Waarschijnlijk moet je dit aanpassen in je GeoGebra bestand.';
$string['minplusstepgtmax'] = 'Min plus toename is groter dan Max voor variable {$a}. Waarschijnlijk moet je dit aanpassen in je GeoGebra bestand.';
$string['noappletloaded'] = 'Er werd geen applet ingeladen! Controleer of de URL correct is of je een applet ziet verschijnen na het kiezen van een link of na (her)laden van het applet';
$string['nofractionsumeq1'] = 'Minstens een van de combinaties moet een totaal opleveren van 100%';
$string['pluginname_help'] = 'Vragen die de student kan oplossen met GeoGebra';
$string['pluginnameadding'] = 'Voeg GeoGebra vraag toe';
$string['pluginnameediting'] = 'Bewerken van een vraag in GeoGebra';
$string['pluginnamesummary'] = 'Een versie met rekenvragen waarbij GeoGebra gebruikt wordt om de vragen te tonen en de antwoorden te controleren wanneer je de quiz start.';
$string['randomizedbutnovars'] = 'Je hebt geselecteerd dat de vraag random gegeneerd wordt, maar je bepaalde geen geldige random variabelen.';
$string['randomizedvar'] = 'Variabelen om random te genereren';
$string['randomizedvar_help'] = 'Variabelen om random te genereren (gescheiden door een komma). Gebruik de opties van schuifknoppen in GeoGebra om Min, Max en toename vast te leggen. Je kunt deze variabelen gebruiken in de tekst van de vraag door ze tussen accolades te zetten, b.v.: {a}';
$string['show_algebra_input'] = 'Toon invoerbalk';
$string['show_menu_bar'] = 'Toon menu';
$string['show_reset_icon'] = 'Toon knop om de constructie te vernieuwen';
$string['show_tool_bar'] = 'Toon knoppenbalk';
$string['stepzero'] = 'De toename voor variabele {$a} is 0. Ofwel heb je de toename van de schuifknop niet bepaald ofwel is het element helemaal geen schuifknop. Waarschijnlijk moet je dit aanpassen in je GeoGebra bestand.';
$string['useafile'] = '... of gebruik een ggb-bestand';
$string['valuecheckedfor'] = 'Booleaans object in GeoGebra dat gebruikt wordt om de juistheid te controleren.';
$string['variablenamewrong'] = 'Er werd geen variabele met deze naam gevonden in het GeoGebra bestand.';
$string['variableno'] = 'Variabele {$a}';
$string['variables'] = 'Variabelen';
$string['willbereadfromfile'] = 'Zal gelezen worden vanuit GeoGebra... (zie knop help)';
