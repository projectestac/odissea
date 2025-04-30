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
 * Strings for component 'qtype_ordering', language 'nl', version '4.4'.
 *
 * @package     qtype_ordering
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['absoluteposition'] = 'Absolute positie';
$string['addmultipleanswers'] = 'Voeg nog {$a} items toe';
$string['addsingleanswer'] = 'Voeg nog een item toe';
$string['allornothing'] = 'Alles of niets';
$string['answer'] = 'Tekst item';
$string['correctitemsnumber'] = 'Juiste items: {$a}';
$string['correctorder'] = 'De juiste volgorde voor deze items is als volgt:';
$string['defaultanswerformat'] = 'Standaardformat antwoord';
$string['defaultquestionname'] = 'Sleep de volgende items in de juiste volgorde.';
$string['draggableitemno'] = 'Sleepbare items {no}';
$string['draggableitems'] = 'Sleepbare items';
$string['duplicatesnotallowed'] = 'Dupliceren van versleepbare items is niet toegestaan. De string "{$a->text}" wordt al gebruikt in {$a->item}.';
$string['editingordering'] = 'Rangschikvraag bewerken';
$string['gradedetails'] = 'Details beoording';
$string['gradingtype'] = 'Type beoordeling';
$string['gradingtype_help'] = '**Alles of niets**
&nbsp; Als alle items op de juiste plaats staan, dan worden alle punten toegekend. Anders is de score nul.

**Absolute positie**
&nbsp; Een item wordt als juist beschouwd als het op dezelfde positie staat als in het juiste antwoord. De hoogst mogelijke score voor de vraag is **gelijk** als het aantal items dat aan de leerling getoond wordt.

**Relatief tot de juiste positie**
&nbsp; Een item wordt als juist beschouwd als het zich op dezelfde positie bevindt als het juiste antwoord. Juiste itemls krijgen een score die gelijk is aan het aantal getoonde items min één. Foute items krijgen een score die gelijk is aan het aantal getoonde items min één en min de afstand tot het de correcte positie van het item. Dus, als ***n*** items aan de leerling getoond worden, dan is het aantal beschikbare punten voor elk item ***(n - 1)***, en de hoogst mogelijke score voor de vraag is ***n x (n - 1)***, wat hetzelfde is als ***(n² - n)***.

**Relatief tot het volgende item (exclusief laatste)**
&nbsp; Een item wordt als juist beschouwd als het gevolgd wordt door hetzelfde item als in het juiste antwoord. Het laatste item in de lijst wordt niet gecontroleerd. Dus, de hoogst mogelijke score voor de vraag is  **één minder dan** het aantal items, getoond aan de leerling.

**Relatief tot het volgende item (inclusief laatste)**
&nbsp; Een item wordt als juist beschouwd als het gevolgd wordt door hetzelfde item als in het juiste antwoord. Hierin is ook het laatste item inbegrepen, waarna geen item meer volgt. Dus, de hoogst mogelijke score voor de vraag is **gelijk** aan het aantal items die aan de leerling getoond worden.

**Relatief tot zowel het vorige als het volgende item**
&nbsp; Een item wordt als juist beschouwd als zowel het vorige als het volgende item gelijk zijn als in het juiste antwoord. Het eerste antwoord heeft geen vorig antwoord hebben en het laatste geen volgend item. Dus, er zijn twee mogelijke cijfers voor elk item en de hoogst mogelijke score voor de vraag is **twee keer** het aantal items dat aan de leerling getoond wordt.

**Relatief tot ALLE vorige en volgende items**
&nbsp; Een item wordt als juist beschouwd als het voorafgegaan wordt door alle juiste items zoals in het juiste antwoord en gevolgd wordt door alle juiste items zoals in het juiste antwoord. De volgorde van de vorige en volgende antwoorden doet er niet toe. Dus, als ***n*** items aan de leerling getoond worden, dan is het aantal beschikbare punten voor elk item gelijk aan ***(n - 1)***, en het hoogst mogelijke cijfer voor de vraag is  ***n x (n - 1)***, wat gelijk is aan ***(n² - n)***.

**Langst geordende subset**
&nbsp; Het cijfer is het aantal items in de langste geordende subset met items. Het hoogst mogelijke cijfer is gelijk aan het aantal getoonde items. Een subset moet minstens twee items bevatten. Subsets moeten niet starten met het eerste item (maar dat kan) en ze moeten niet aaneensluiten zijn (maar dat kan). Als er meerdere subsets met gelijke lengte zijn, dan zal de eerst gevonden subset bij zoeken van links naar rechts als juist getoond worden. Andere items zullen als fout gemarkeerd worden.

**Langste aaneensluitende subset**
&nbsp; Het cijfer is het aantal items in de langste aaneensluitende subset. Het hoogst mogelijke cijfer is gelijk aan het aantal getoonde items. Een subset moet minstens twee items bevatten. Subsets moeten niet starten met het eerste item, maar dat mag en ze moeten AANEENSLUITEND zijn. Als er meerdere subsets van gelijke lengte zijn, dan zullen de items in de subset die eerst gevonden wordt bij het zoeken van links naar rechts, als juist getoond worden. Andere items zullen als fout aangeduid worden.';
$string['highlightresponse'] = 'Markeer het antwoord als juist of onjuist';
$string['horizontal'] = 'Horizontaal';
$string['incorrectitemsnumber'] = 'Foute items: {$a}';
$string['layouttype'] = 'Opmaak van items';
$string['layouttype_help'] = 'Kies of je de items verticaal of horizontaal wilt weergeven.';
$string['longestcontiguoussubset'] = 'Langste aaneengesloten subset';
$string['longestorderedsubset'] = 'Langste gerangschikte subset';
$string['moved'] = '{$a->item} verplaatst. Nieuwe positie: {$a->position} van {$a->total}.';
$string['moveleft'] = 'Naar links';
$string['moveright'] = 'Naar rechts';
$string['noresponsedetails'] = 'Er zijn helaas geen details beschikbaar voor het antwoord op deze vraag.';
$string['noscore'] = 'Geen score';
$string['notenoughanswers'] = 'Rangschikvragen moeten meer dan {$a} antwoorden bevatten.';
$string['notenoughsubsetitems'] = 'Een subset moet minstens {$a} items bevatten.';
$string['numberingstyle'] = 'Keuzes nummeren?';
$string['numberingstyle123'] = '1., 2., 3., ...';
$string['numberingstyleABCD'] = 'A., B., C., ...';
$string['numberingstyleIIII'] = 'I., II., III., ...';
$string['numberingstyle_desc'] = 'De standaardstijl voor nummering.';
$string['numberingstyle_help'] = 'Kies de stijl voor nummering van versleepbare items in deze vraag.';
$string['numberingstyleabc'] = 'a., b., c., ...';
$string['numberingstyleiii'] = 'i., ii., iii., ...';
$string['numberingstylenone'] = 'Geen nummering';
$string['partialitemsnumber'] = 'Gedeeltelijk juiste items: {$a}';
$string['pluginname'] = 'Rangschikken';
$string['pluginname_help'] = 'Er worden verscheidene items getoond in een willekeurige volgorde. De items kunnen door slepen in een betekenisvolle volgorde gezet worden.';
$string['pluginname_link'] = 'question/type/ordering';
$string['pluginnameadding'] = 'Een vraag van het type Rangschikken toevoegen';
$string['pluginnameediting'] = 'Een vraag van het type Rangschikken bewerken';
$string['pluginnamesummary'] = 'Zet geschudde items in een betekenisvolle volgorde.';
$string['positionx'] = 'Positie {$s}';
$string['privacy:preference:gradingtype'] = 'Het beoordelingstype.';
$string['privacy:preference:layouttype'] = 'De layout van items.';
$string['privacy:preference:numberingstyle'] = 'De nummeringsstijl van de keuzes.';
$string['privacy:preference:selectcount'] = 'Het selecteeraantal.';
$string['privacy:preference:selecttype'] = 'Het item selecteertype.';
$string['privacy:preference:showgrading'] = 'Of beoordelingsdetails getoond worden.';
$string['regradeissuenumitemschanged'] = 'Het aantal versleepbare items is gewijzigd.';
$string['relativeallpreviousandnext'] = 'Relatief tot ALLE vorige en volgende items';
$string['relativenextexcludelast'] = 'Relatief tot het volgende item (exclusief laatste)';
$string['relativenextincludelast'] = 'Relatief tot het volgende item (inclusief laatste)';
$string['relativeonepreviousandnext'] = 'Relatief tot zowel het vorige als het volgende item';
$string['relativetocorrect'] = 'Relatief tot de juiste positie';
$string['removeeditor'] = 'Verwijder HTML-editor';
$string['removeitem'] = 'Verwijder versleepbaar item';
$string['scoredetails'] = 'Dit zijn de scores voor ieder item in dit antwoord:';
$string['selectall'] = 'Selecteer alle items';
$string['selectcontiguous'] = 'Selecteer een aaneensluitende subset met items';
$string['selectcount'] = 'Grootte van subset';
$string['selectcount_help'] = 'Het aantal items dat zal worden weergegeven wanneer de vraag in een test wordt gebruikt.';
$string['selectrandom'] = 'Selecteer een willekeurige subset van items';
$string['selecttype'] = 'Type itemselectie';
$string['selecttype_help'] = 'Kies of je alle items wilt tonen of een subset daarvan.';
$string['showgrading'] = 'Details beoordeling';
$string['showgrading_help'] = 'Kies of je de details over de berekening van het resultaat wilt tonen of verbergen wanneer een leerling het antwoord op deze Rangschikvraag opnieuw bekijkt.';
$string['vertical'] = 'Verticaal';
