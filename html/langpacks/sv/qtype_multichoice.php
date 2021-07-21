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
 * Strings for component 'qtype_multichoice', language 'sv', version '3.11'.
 *
 * @package     qtype_multichoice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answerhowmany'] = 'Ett eller flera svar?';
$string['answerhowmany_desc'] = 'Om standardinställningen är ett svar (dvs. radioknappar) eller om flera svar kan väljas (dvs. kryssrutor).';
$string['answernumbering'] = 'Numrera svarsalternativen?';
$string['answernumbering123'] = '1., 2., 3., ...';
$string['answernumberingABCD'] = 'A., B., C., ...';
$string['answernumberingIIII'] = 'I., II., III., ...';
$string['answernumbering_desc'] = 'Standardformatet för numrering.';
$string['answernumberingabc'] = 'a., b., c., ...';
$string['answernumberingiii'] = 'I., II., III., ...';
$string['answernumberingnone'] = 'Ingen numrering';
$string['answersingleno'] = 'Flera svar tillåtna';
$string['answersingleyes'] = 'Endast ett svar';
$string['choiceno'] = 'Val {$a}';
$string['choices'] = 'Tillgängliga val';
$string['clearchoice'] = 'Rensa mitt val';
$string['clozeaid'] = 'Mata in det saknade ordet';
$string['correctansweris'] = 'Rätta svaret är: {$a}';
$string['correctanswersare'] = 'Det rätta svaren är: {$a}';
$string['correctfeedback'] = 'För vilket korrekt svar som helst';
$string['deletedchoice'] = 'Valet togs bort efter att försöket påbörjades.';
$string['errfractionsaddwrong'] = 'De positiva poängen du har valt uppgår inte till 100%<br />Istället uppgår de till {$a}%';
$string['errfractionsnomax'] = 'Ett av alternativen bör vara 100% så att det är<br />möjligt att få full poäng på den här frågan.';
$string['errgradesetanswerblank'] = 'Betyg satt, men Svaret är tomt';
$string['feedback'] = 'Återkoppling';
$string['fillouttwochoices'] = 'Du måste fylla i åtminstone två alternativ. Alternativ som lämnats tomma kommer inte att användas.';
$string['fractionsaddwrong'] = 'De positiva poängen du har valt uppgår inte till 100%<br />Istället uppgår de till {$a}%<br />Vill du gå tillbaka och korrigera den här frågan?';
$string['fractionsnomax'] = 'Ett av alternativen bör vara 100% så att det är<br />möjligt att få full poäng på den här frågan.<br />Vill du gå tillbaka och korrigera den?';
$string['incorrectfeedback'] = 'För något felaktigt svar';
$string['notenoughanswers'] = 'Den här typen av fråga kräver åtminstone {$a} val';
$string['overallcorrectfeedback'] = 'Återkoppling för vilket korrekt svar som helst.';
$string['overallfeedback'] = 'Övergripande återkoppling';
$string['overallincorrectfeedback'] = 'Återkoppling för vilket felaktigt svar som helst.';
$string['overallpartiallycorrectfeedback'] = 'Återkoppling för delvid rätta svar';
$string['partiallycorrectfeedback'] = 'För delvis rätta svar';
$string['pleaseselectananswer'] = 'Välj ett svar.';
$string['pleaseselectatleastoneanswer'] = 'Välj ett eller flera svar.';
$string['pluginname'] = 'Flerval';
$string['pluginname_help'] = 'Man väljer från olika svaralternativ när man svarar på frågan (som även kan innehålla en bild). En flervalsfråga kan ha ett eller flera korrekta svar.';
$string['pluginnameadding'] = 'Lägger till en flervalsfråga';
$string['pluginnameediting'] = 'Redigerar en flervalsfråga';
$string['pluginnamesummary'] = 'Tillåter val av ett eller flera svar från en fördefinierad lista.';
$string['privacy:metadata'] = 'Pluginmodulen för frågetypen Flerval gör det möjligt för frågeförfattare att ange standardalternativ som användarinställningar.';
$string['privacy:preference:answernumbering'] = 'Vilken numreringsstil som ska användas (1., 2., 3., .../a., b., c., ... etc.)';
$string['privacy:preference:defaultmark'] = 'Standardpoängen för en viss fråga.';
$string['privacy:preference:penalty'] = 'Avdraget för varje felaktigt försök när frågor körs med beteendet "Interaktivt med flera försök" eller "Adaptivt läge".';
$string['privacy:preference:showstandardinstruction'] = 'Om standardinstruktionen visas.';
$string['privacy:preference:shuffleanswers'] = 'Om svaren ska blandas automatiskt.';
$string['privacy:preference:single'] = 'Om svaret är enskilt med alternativknappar eller flera med kryssrutor.';
$string['selectmulti'] = 'Välj ett eller flera alternativ:';
$string['selectone'] = 'Välj ett av alternativen:';
$string['showstandardinstruction'] = 'Visa svarsinstruktioner?';
$string['showstandardinstruction_help'] = 'Om instruktionen ”Välj en:” eller ”Välj en eller flera:” ska visas före svarsalternativen';
$string['shuffleanswers'] = 'Blanda svaren?';
$string['shuffleanswers_desc'] = 'Om alternativen som standard ska blandas om slumpmässigt för varje försök.';
$string['shuffleanswers_help'] = 'Om aktiverat kommer ordningen på svaren blandas slumpmässigt för varje försök, förutsatt att "blanda inom frågor" i aktivitetsinställningarna också är aktiverat.';
$string['singleanswer'] = 'Välj ett svar';
$string['toomanyselected'] = 'Du har valt för många alternativ.';
