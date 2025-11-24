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
 * Strings for component 'qtype_numerical', language 'sv', version '4.5'.
 *
 * @package     qtype_numerical
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptederror'] = 'Accepterat fel';
$string['addmoreanswerblanks'] = 'Tomma utrymmen för ytterligare {no} svar';
$string['addmoreunitblanks'] = 'Tomma utrymmen för ytterligare {no} enheter';
$string['answercolon'] = 'Svar:';
$string['answererror'] = 'Fel';
$string['answermustbenumberorstar'] = 'Svaret måste vara ett tal, till exempel -1.234, 3e8 eller \'*\'.';
$string['answerno'] = 'Svar {$a}';
$string['decfractionofquestiongrade'] = 'som en del (0-1) av frågans poäng';
$string['decfractionofresponsegrade'] = 'som en del (0-1) av svarets poäng';
$string['decimalformat'] = 'decimaler';
$string['editableunittext'] = 'textinmatningselementet';
$string['errornomultiplier'] = 'Du måste ange en multiplikator för den här enheten.';
$string['errorrepeatedunit'] = 'Du kan inte ha två enheter med samma namn.';
$string['geometric'] = 'Geometrisk';
$string['invalidnumber'] = 'Du måste ange ett giltigt nummer.';
$string['invalidnumbernounit'] = 'Du måste ange ett giltigt nummer. Inkludera inte en enhet i ditt svar.';
$string['invalidnumericanswer'] = 'En av de svar du angav var inte ett giltigt nummer.';
$string['invalidnumerictolerance'] = 'En av toleranserna du angav var inte ett giltigt nummer.';
$string['leftexample'] = 'till vänster, till exempel $1.00 eller £1.00';
$string['manynumerical'] = 'Enheter är valfria. Om en enhet anges, används den för att konvertera svaret till Enhet 1 innan betygssättningen.';
$string['multiplier'] = 'Multiplikator';
$string['nominal'] = 'Nominellt';
$string['noneditableunittext'] = 'ICKE redigerbar text för enhet Nr1';
$string['nonvalidcharactersinnumber'] = 'ICKE giltiga tecken i nummer';
$string['notenoughanswers'] = 'Du måste mata in åtminstone ett svar.';
$string['nounitdisplay'] = 'Ingen enhetsgradering';
$string['numericalmultiplier'] = 'Multiplikator';
$string['numericalmultiplier_help'] = 'Multiplikator är den faktor med vilken det korrekta numeriska svaret kommer att multipliceras.

Den första enheten (enhet 1) har en standard multiplikator på 1. Således om rätt numeriska svar är 5500 och du ställer W som enhet på enhet 1 som har 1 som standard multiplikator, är det rätta svaret 5500 W.

Om du lägger till enheten kW med en multiplikator på 0,001, kommer detta lägga till ett korrekt svar på 5,5 kW. Detta innebär att svaren 5500W eller 5,5 kW skulle anses som korrekt.

Observera att det accepterade felet också multipliceras, så en tillåten fel 100W skulle bli ett fel på 0.1kW.';
$string['oneunitshown'] = 'Enhet 1 visas automatiskt bredvid svarsrutan.';
$string['onlynumerical'] = 'Enheter används inte alls. Endast det numeriska värdet poängsätts.';
$string['pleaseenterananswer'] = 'Ange ett svar.';
$string['pleaseenteranswerwithoutthousandssep'] = 'Ange ditt svar utan att använda tusentalsavgränsare ({$a}).';
$string['pluginname'] = 'Numerisk';
$string['pluginname_help'] = 'Från elevens perspektiv ser en numerisk fråga ut precis som en kort svar fråga. Skillnaden är att numeriska svar får ha ett godkänt fel. Detta möjliggör en fast antal svar att utvärderas som ett svar. Till exempel, om svaret är 10 med ett accepterat fel av 2, då kommer ett tal mellan 8 och 12 att accepteras som korrekt svar.';
$string['pluginname_link'] = 'question/type/numerical';
$string['pluginnameadding'] = 'Lägga till en numerisk fråga';
$string['pluginnameediting'] = 'Redigera en numerisk fråga';
$string['pluginnamesummary'] = 'Tillåter ett numeriskt svar, eventuellt med enheter, som poängsätts genom att jämföras mot olika modellsvar, eventuellt med toleranser.';
$string['privacy:metadata'] = 'Pluginmodulen för frågetypen Numerisk fråga gör det möjligt för frågeförfattare att ange standardalternativ som användarinställningar.';
$string['privacy:preference:defaultmark'] = 'Standardpoängen för en viss fråga.';
$string['privacy:preference:multichoicedisplay'] = 'Om enheter visas som textinmatningselement, flervalsmeny eller som en listruta.';
$string['privacy:preference:penalty'] = 'Avdraget för varje felaktigt försök när frågor körs med beteendet "Interaktivt med flera försök" eller "Adaptivt läge".';
$string['privacy:preference:unitgradingtypes'] = 'Om enhetsavdraget gäller som en bråkdel (0-1) av svarsbetyget eller frågebetyget.';
$string['privacy:preference:unitpenalty'] = 'Vilken fraktion (0-1) av svarsbetyget eller frågebetyget ska gälla?';
$string['privacy:preference:unitrole'] = 'Om enheten är nödvändig, frivillig eller inte förväntas.';
$string['privacy:preference:unitsleft'] = 'Oavsett om enheten visas till vänster (t.ex. $, £) eller till höger (t.ex. kg, km, cm).';
$string['relative'] = 'Relativ';
$string['rightexample'] = 'till höger, till exempel 1.00cm eller 1.00km';
$string['selectunit'] = 'Välj en enhet';
$string['selectunits'] = 'Välj enheter';
$string['studentunitanswer'] = 'Enhet anges med';
$string['tolerancetype'] = 'Toleranstyp';
$string['unit'] = 'Enhet';
$string['unitappliedpenalty'] = 'Dessa poäng inkluderar ett poängavdrag på {$a} för felaktig enhet.';
$string['unitchoice'] = 'ett flervals-val';
$string['unitedit'] = 'Redigera enhet';
$string['unitgraded'] = 'Enheten måste anges och kommer att poängsättas.';
$string['unithandling'] = 'Enhetshantering';
$string['unitincorrect'] = 'Du angav inte rätt enhet.';
$string['unitmandatory'] = 'Obligatorisk';
$string['unitmandatory_help'] = '* Svaret bedöms enligt angiven enhet.
* Poängavdrag för felaktig enhet kommer att tillämpas om enhet är tomt';
$string['unitnotselected'] = 'Du måste välja en enhet.';
$string['unitonerequired'] = 'Du måste ange minst en enhet';
$string['unitoptional'] = 'Valfri enhet';
$string['unitoptional_help'] = '* Om fältet för enhet inte är tomt kommer svaret att poängsättas med denna enhet.

* Om enheten är dåligt skriven eller okänd, kommer svaret att betraktas som ogiltigt.';
$string['unitpenalty'] = 'Poängavdrag för enhet';
$string['unitpenalty_help'] = 'Poängavdraget tillämpas om

* fel enhetsnamn anges i enhetsangivningen, eller
* en enhet anges i ruta för värde';
$string['unitposition'] = 'Enhetsplacering';
$string['units'] = 'Enheter';
$string['unitselect'] = 'en nedrullningsmeny';
$string['unitx'] = 'Enhet {no}';
$string['xmustbenumeric'] = '{$a} måste vara ett nummer.';
$string['xmustnotbenumeric'] = '{$a} får inte vara ett nummer.';
$string['youmustenteramultiplierhere'] = 'Du måste ange en multiplikator här.';
