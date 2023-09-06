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
 * Strings for component 'qtype_formulas', language 'nl', version '4.1'.
 *
 * @package     qtype_formulas
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abserror'] = 'Absolute fout';
$string['addmorepartsblanks'] = 'Lege lijnen voor {no} meer onderdelen';
$string['algebraic_formula'] = 'Algebraïsche formule';
$string['answer'] = 'Antwoord*';
$string['answer_help'] = '**Vereist**.
moet een lijst met getallen of een lijst met strings zijn, afhankelijk van het gekozen antwoordtype. Als er maar één antwoord is, dan kan er een aantal strings rechtstreeks ingegeven worden. Merk op dat het aantal elementen in de lijst het aantal antwoordvelden voor dit deel bepaalt.

<pre class="prettyprint">123<br>[1, 0, 0, 1]<br>a<br>[1, a, b]<br>"exp(-a t)"<br>["vx t","vy t - 0.5 a t^2"]</pre';
$string['answercombinedunitmulti'] = 'Antwoord en eenheid voor deel {$a->part}';
$string['answercombinedunitsingle'] = 'Antwoord en eenheid';
$string['answercoordinatemulti'] = 'Antwoord voor deel {$a->part} en coördinaat {$a->numanswer}';
$string['answercoordinatesingle'] = 'Antwoord voor coördinaat {$->numanswer}';
$string['answermark'] = 'Deelcijfer*';
$string['answermark_help'] = '**Vereist**.
Het cijfer voor het antwoord op dit deel - moet groter zijn dan 0.
Het standaardcijfer voor de hele vraag is de som van alle deelcijfers.

Merk op: als dit deelcijfer leeg gelaten wordt, dan zal dit deel verwijderd worden wanneer de vraag bewaard wordt.';
$string['answermulti'] = 'Antwoord voor deel {$a->part}';
$string['answerno'] = 'Deel {$a}';
$string['answersingle'] = 'Antwoord';
$string['answertype'] = 'Antwoordtype';
$string['answertype_help'] = 'Er zijn vier antwoordtypes:

Getal, numeriek en numerieke formule-antwoorden vereisen een getal of een lijst met getallen als antwoord.

Algebraïsche formule vereist een string of een lijst strings als antwoord.

Verschillende antwoordtypes zullen beperkingen opleggen wanneer antwoorden gegeven worden, zodat leerlingen weten hoe ze ingegeven moeten worden. De opmaakcontrole in de code van de vraag zal hen ook vertellen wanneer ze iets fout typen. Lees de documentatie voor meer details.';
$string['answertype_link'] = 'https://moodleformulas.org/';
$string['answerunitmulti'] = 'Eenheid voor deel {$a->part}';
$string['answerunitsingle'] = 'Eenheid';
$string['checkvarshdr'] = 'Controleer variablen';
$string['choiceno'] = 'Nee';
$string['choiceyes'] = 'Ja';
$string['commonsiunit'] = 'Algemene SI-eenheid';
$string['correctansweris'] = 'Een mogelijk juist antwoord is: {$a}';
$string['correctfeedback'] = 'Voor elk juist antwoord';
$string['correctfeedback_help'] = 'Deze feedback zal aan leerlingen getoond worden die het maximale cijfer behaald hebben voor dit deel. De feedback kan lokale of globale variablen bevatten die door hun waarden vervangen worden';
$string['correctness'] = 'Beoordelingscriterium*';
$string['correctness_help'] = '**Vereist**.
Je kunt ofwel een relatieve fout of een absolute fout met foutenmarge kiezen. Relatieve fout kan niet gebruikt worden voor het algebraïsche antwoordtype.

Lees de documentatie voor de juiste definitie van relatieve- en absolute fout wanneer er meer dan één antwoordveld is.';
$string['correctness_link'] = 'https://moodleformulas.org/';
$string['correctnessexpert'] = 'Expert';
$string['correctnesssimple'] = 'Eenvoudig';
$string['defaultanswermark'] = 'Standaard deelcijfer';
$string['defaultanswermark_desc'] = 'Standaard deelcijfer voor nieuwe vraagonderdelen';
$string['defaultanswertype'] = 'Standaad antwoordtype';
$string['defaultanswertype_desc'] = 'Standaard antwoordtype voor nieuwe vraagonderdelen';
$string['defaultcorrectness'] = 'Standaard beoordelingscriteria';
$string['defaultcorrectness_desc'] = 'Standaard beoordelingscriteria voor nieuwe vraagonderdelen';
$string['defaultunitpenalty'] = 'Standaard strafpunten per eenheid';
$string['defaultunitpenalty_desc'] = 'Standaard strafpunten voor foute eenheid (0-1)';
$string['error_algebraic_var'] = 'Syntax fout bij het definiëren van een algebraïsche variable.';
$string['error_answer_missing'] = 'Er is geen antwoord gedefinieerd.';
$string['error_answerbox_duplicate'] = 'De plaatshouder voor een antwoordveld kan slechts één keer gebruikt worden in een deelvraag.';
$string['error_answertype_mistmatch'] = 'Antwoordtype niet juist: een numeriek antwoord vereist een getal en een algebraïsch antwoord vereist een string.';
$string['error_criterion'] = 'Het beoordelingscriterium moet geëvalueerd worden op een enkel getal.';
$string['error_eval_numerical'] = 'Sommige expressies kunnen niet numeriek geëvalueerd worden.';
$string['error_fixed_range'] = 'Syntax fout bij een vast bereik.';
$string['error_forbid_char'] = 'Formule of expressie bevat niet toegelaten tekens of operators.';
$string['error_forloop'] = 'Syntax fout in de lus.';
$string['error_forloop_expression'] = 'Expressie van de for-lus moet een lijst zijn.';
$string['error_forloop_var'] = 'Variable van de for-lus heeft fouten.';
$string['error_func_param'] = 'Fout getal of foute parameterypes voor de functie {$a}()';
$string['error_mark'] = 'Het antwoordcijfer met een waarde groter dan 0 zijn.';
$string['error_no_answer'] = 'Er is minstens één antwoord vereist.';
$string['error_placeholder_format'] = 'Foute opmaak plaatshouder of niet toegestane tekens.';
$string['error_placeholder_main_duplicate'] = 'Dubbele plaatshouder in de hoofdvraagtekst.';
$string['error_placeholder_missing'] = 'Deze plaatshouder ontbreekt in de hoofdvraagtekst.';
$string['error_placeholder_sub_duplicate'] = 'Deze plaatshouder is al gedefinieerd in een andere deelvraag.';
$string['error_placeholder_too_long'] = 'De lengte van  de plaatshouder is beperkt tot 40 tekens.';
$string['error_randvars_set_size'] = 'Het aantal genereerbare elementen moet groter zijn dan 1.';
$string['error_randvars_type'] = 'Alle elementen in de set moeten van hetzelfde type zijn en dezelfde grootte hebben.';
$string['error_rule'] = 'Fout bij het verwerken van de regel!';
$string['error_ruleid'] = 'Er bestaat geen regel in het bestand met de id/naam.';
$string['error_subexpression_empty'] = 'Een subexpressie is leeg.';
$string['error_syntax'] = 'Syntax fout.';
$string['error_unit'] = 'Verwerken van eenheid fout.';
$string['error_unitpenalty'] = 'Het strafpunt moet een getal zijn tussen 0 en 1.';
$string['error_validation_eval'] = 'Poging evalutatiefout!';
$string['error_vars_array_index_nonnumeric'] = 'Een niet-numerieke waarde kan niet gebruikt worden als lijstindex.';
$string['error_vars_array_index_out_of_range'] = 'Lijstindex buiten bereik!';
$string['error_vars_array_size'] = 'Grootte van de lijst moet tussen de 1 en 1000 liggen.';
$string['error_vars_array_type'] = 'Element in dezelfde lijst moet van hetzelfde type zijn, ofwel een getal ofwel een string.';
$string['error_vars_array_unsubscriptable'] = 'Variable kan niet ingeschreven worden.';
$string['error_vars_bracket_mismatch'] = 'Haakjes fout.';
$string['error_vars_end_separator'] = 'Opdracht scheidingsteken ontbreekt op het einde.';
$string['error_vars_name'] = 'De syntax van de variable-naam is fout.';
$string['error_vars_reserved'] = 'Functie {$a}() is gereserveerd en kan niet als variable gebruikt worden.';
$string['error_vars_string'] = 'Fout! Ofwel een string zonder sluitend dubbel aanhalingsteken of het gebruik van een niet toegestaan teken zoals een \'.';
$string['error_vars_undefined'] = 'Variable \'{$a}\' is niet gedefinieerd.';
$string['feedback'] = 'Algemene feedback voor het deel';
$string['feedback_help'] = 'Deze feedback voor dit deel zal getoond worden aan alle leerlingen. Er kunnen globale en locale variabelen in gebruikt worden die vervangen zullen worden door hun waarden';
$string['functiontakesatleasttwo'] = 'De functie {$a} moet minstens twee argumenten hebben';
$string['functiontakesnoargs'] = 'De functie {$a} verwerkt geen argumenten';
$string['functiontakesonearg'] = 'De functie {$a} moet exact één argument krijgen';
$string['functiontakesoneortwoargs'] = 'De functie {$a} moet één of twee argumenten krijgen';
$string['functiontakestwoargs'] = 'De functie {$a} moet exact twee argumenten krijgen';
$string['globalvarshdr'] = 'Variablen';
$string['illegalformulasyntax'] = 'Ongeldige formule-syntax beginnend met \'{$a}\'';
$string['incorrectfeedback'] = 'Voor elk fout antwoord';
$string['incorrectfeedback_help'] = 'Deze feedback wordt getoond aan leerlingen die geen punten kregen op dit deel. De feedback kan globale en locale variabelen bevatten die door hun waarden zullen vervangen worden.';
$string['instantiate'] = 'Instantiëer';
$string['mainq'] = 'Hoofdvraag';
$string['modelanswer'] = 'Modelantwoord';
$string['none'] = 'Geen';
$string['number'] = 'Getal';
$string['number_unit'] = 'Getal en eenheid';
$string['numdataset'] = 'Getal van dataset';
$string['numeric'] = 'Numeriek';
$string['numeric_unit'] = 'Numeriek en eenheid';
$string['numerical_formula'] = 'Numerieke formule';
$string['numerical_formula_unit'] = 'Numerieke formule en eenheid';
$string['otherrule'] = 'Andere regels';
$string['otherrule_help'] = 'Hier kan de auteur van de vraag bijkomende conversieregels definiëren voor andere geaccepteerde basiseenheden. Lees de documentatie voor geavanceerd gebruik.';
$string['partiallycorrectfeedback'] = 'Voor elk gedeeltelijk juist antwoord';
$string['partiallycorrectfeedback_help'] = 'Deze feedback wordt aan leerlingen getoond die niet het maximale cijfer voor dit deel gekregen hebben. Er kunnen globale en locale variabelen in gebruikt worden die door hun waarden vervangen zullen worden';
$string['placeholder'] = 'Naam plaatshouder';
$string['placeholder_help'] = 'Een plaatshouder wordt gebruikt om een locatie in de hoofdvraag te identificeren die vervangen zal worden door de inhoud van een deelvraag. Het is een string van alfanumerieke tekens die voorafgegaan wordt door een \'**#**\', zoals #1, #2a, #2b en #A.

Als dit veld leeg gelaten wordt, dan zal de deelvraag aan het eind van de tekst van de hoofdvraag getoond worden.';
$string['pleaseputananswer'] = 'Geef een antwoord in elk invoerveld.';
$string['pluginname'] = 'Formules';
$string['pluginname_help'] = 'Ga  naar <a href="https://moodleformulas.org/">moodleformulas.org om meer te lezen over dit vraagtype</a>.

Ga voor eventuele vragen naar <a href="https://moodleformulas.org/">moodleformulas.org</a>.

Ga voor opties in het onderstaand bewerkingsformulier naar <a href="https://moodleformulas.org/">moodleformulas.org</a>

Ga voor de volledige documentatie naar <a href="https://moodleformulas.org/">moodleformulas.org</a>';
$string['pluginname_link'] = 'question/type/formulas';
$string['pluginnameadding'] = 'Formule-vragen toevoegen';
$string['pluginnameediting'] = 'Een formule-vraag bewerken';
$string['pluginnamesummary'] = 'Vraagtype met willekeurige waarden en meerdere antwoorden.
De antwoordvelden kunnen gelijk waar gezet worden, zodat we een vraag kunnen stellen rond verschillende structuren zoals vectoren, veeltermen en matrices.
Andere functies, zoals controle op eenheden en vragen met meerdere delen zijn ook geïntegreerd en eenvoudig om te gebruiken.';
$string['postunit'] = 'Eenheid';
$string['postunit_help'] = 'Hier kun je een eenheid ingeven. Dit vraagtype is speciaal ontworpen voor SI-eenheden. Een spatie stelt dus het product van verschillende basiseenheden voor en <tt>^</tt> wordt gebruikt voor exponenten.
Verder kan <tt> / </tt> gebruikt worden voor de inverse van een exponent. Een permutatie van de basiseenheid wordt gelijk behandeld.

Leerlingen moeten dezelfde invoeropmaak gebruiken. Bijvoorbeeld:

<pre class="prettyprint">1 m<br>0.1 m^2<br>20 m s^(-1)<br>400 kg m/s<br>100 kW</pre>';
$string['privacy:metadata'] = 'De formule vraagtype-plugin bewaart geen persoonlijke gegevens.';
$string['qtextpreview'] = 'Voorbeeld met dataset';
$string['questiontext'] = 'Vraagtekst';
$string['questiontext_help'] = 'In de gewone vraagtekst kun je ook globale variabelen en plaatshouders gebruiken.

Globale variabelen zullen vervangen worden door hun waarden en plaatshouders zullen door hun deelvragen vervangen worden.
Een eenvoudig voorbeeld met variabelen <tt> A, B, C </tt> en plaatshouders <tt> #1, #2, #3 </tt> is:

<pre class="prettyprint">Wat is het resultaat van {A} + {B}?<br>{#1}<br>Wat is het resultaat van {A} - {B}?<br>{#2}<br>Wat is het resultaat van {C} / {B}?<br>{#3}</pre>';
$string['relerror'] = 'Relatieve fout';
$string['renew'] = 'Update';
$string['ruleid'] = 'Basis conversieregels';
$string['ruleid_help'] = 'Dit vraagtype heeft een ingebouwd eenheidsconversiesysteem en bevat basis conversieregels.

De basisregel is de "Algemene SI-eenheden"-regels die standaardeenheden zoals bijvoorbeeld de eenheid voor lengte, zoals km, m, cm en mm. Deze optie heeft geen effect als er geen eenheid gebruikt wordt.';
$string['settingusepopup'] = 'Gebruik tooltips';
$string['settingusepopup_desc'] = 'Toon juist antwoord en feedback in een tooltip';
$string['subqoptions'] = 'Extra opties';
$string['subqtext'] = 'Tekst deelvraag';
$string['subqtext_help'] = 'De deelvraagtekst en antwoorden kunnen hier gegeven worden. De plaatshouders die gebruikt kunnen worden om plaats te houden voor bepaalde antwoordvelden zijn:

<pre class="prettyprint">{_0}<br>{_1}<br>{_2}<br>...<br>{_u}</pre>

De <tt> {_0}, {_1}, {_2} </tt> zijn de invoervelden voor coördinaten en <tt> {_u} </tt> is het invoerveld voor de eenheid.

Alle ontbrekende velden worden automatisch toegevoegd aan het einde van de tekst van de deelvraag. Een speciaal geval is dat wanneer <tt> {_0}, {_u} </tt>  na elkaar ingegeven zijn en er is maar één coördinaat en eenheid, vb <tt> {_0}{_u} </tt>,, dan zullen die gecombineerd worden in één lang antwoordveld voor antwoord en eenheid samen.';
$string['unit'] = 'Eenheid';
$string['unitpenalty'] = 'Afleiding voor foute eenheid (0-1)*';
$string['unitpenalty_help'] = 'Met deze optie kun je het aantal punten ingeven dat je wil afnemen van een leerling die de eenheid fout heeft.

Je kunt een waarde tussen 0 en 1 ingeven. Geef je een 1, dan moet zowel de eenheid als het antwoord juist zijn om punten te krijgen. De eenheid en het antwoord worden als één geheel behandeld. Als je een waarde 0 ingeeft, dan kan de leerling alle punten krijgen door alleen het antwoord juist te hebben. De eenheid zal geen effect hebben.

Het is best om waarde 1 te gebruiken als het antwoord geen eenheid heeft.';
$string['unsupportedformulafunction'] = 'De functie {$a} wordt niet ondersteund';
$string['vars1'] = 'Locale variabelen';
$string['vars1_help'] = 'Je kunt hier variabelen definiëren zoals globale variabelen gedefinieerd worden op niveau van de vraag. Variabelen die je hier definieert kunnen in het antwoord van de deelvraag of de feedback gebruikt worden en het bereik van hun zichtbaarheid is beperkt tot de deelvraag.';
$string['vars2'] = 'Beoordelingsvariabelen';
$string['vars2_help'] = 'Alle lokale variabelen en de antwoorden van de leerlingen kunnen hier gebruikt worden. Lees de documentatie voor geavanceerd gebruik.';
$string['vars2_link'] = 'https://moodleformulas.org/';
$string['varsdata'] = 'Geïnstantieerde dataset';
$string['varsglobal'] = 'Globale variabelen';
$string['varsglobal_help'] = 'Hier kunnen formules opgegeven worden om de geïnstantieerde willekeurige variabelen te manipuleren (alle willekeurige variabelen zijn hier beschikbaar). De volledige lijst met mathematische functies en operators staat in de documentatie.

<pre class="prettyprint">a = 1.11111;<br>b = exp(3);<br>c = A + a + b;<br>d = sin(1.5*pi()) + c;<br>e = round(a, 0);<br>f = [0,1,2,3][A];<br>g = ["zero","one","two","three"][A];<br>distance = sqrt(a*a + b*b);</pre>';
$string['varsglobal_link'] = 'https://moodleformulas.org/';
$string['varsrandom'] = 'Willekeurige variabelen';
$string['varsrandom_help'] = 'Voor deze variabelen worden nieuwe willekeurige waarden berekend bij het begin van elke poging. Dit kan bereikt worden door een set elementen te definiëren waaruit gekozen kan worden:

<pre class="prettyprint">A = {1,2,3};<br>C = {[1,-1], [2,-2], [3,-3]};<br>E = {10:100:10, 100, 1000};</pre>

De elementen kunnen getallen, strings of lijsten daarvan zijn. Aan het begin van een nieuwe poging wordt er één element uit de set gehaald en toegewezen aan de variabele aan de linkerkant. Voor getallen kun je ook de notatie voor het bereik gebruiken, zoals 10:100:10 (Zie voorbeeld E hierboven).';
$string['varsrandom_link'] = 'https://moodleformulas.org/';
$string['varsstatistics'] = 'Statistieken';
$string['yougotnright'] = 'Je hebt {$a->num} delen van deze vraag juist beantwoord';
