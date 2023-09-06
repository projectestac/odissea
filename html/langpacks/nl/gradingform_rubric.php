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
 * Strings for component 'gradingform_rubric', language 'nl', version '4.1'.
 *
 * @package     gradingform_rubric
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcriterion'] = 'Voeg criterium toe';
$string['additionalfeedback'] = 'Aanvullende feedback';
$string['alwaysshowdefinition'] = 'Toon de rubric aan de leerlingen (zoniet is de rubric enkel zichtbaar na de beoordeling)';
$string['backtoediting'] = 'Terug naar bewerken';
$string['confirmdeletecriterion'] = 'Weet je zeker dat je dit criterium wil wissen?';
$string['confirmdeletelevel'] = 'Weet je zeker dat je dit niveau wil wissen?';
$string['criterion'] = 'Criterium {$a}';
$string['criterionaddlevel'] = 'Voeg niveau toe';
$string['criteriondelete'] = 'Verwijder criterium';
$string['criterionduplicate'] = 'Dupliceer criterion';
$string['criterionempty'] = 'Klik om het criterium te bewerken';
$string['criterionmovedown'] = 'Verplaats lager';
$string['criterionmoveup'] = 'Verplaats hoger';
$string['criterionremark'] = 'Opmerking voor criterium {$a->description}: {$a->remark}';
$string['definerubric'] = 'Definieer rubric';
$string['description'] = 'Beschrijving';
$string['enableremarks'] = 'Laat beoordeler toe om tekstopmerkingen te maken voor elk criterium';
$string['err_mintwolevels'] = 'Elk criterium moet minstens 2 niveaus hebben';
$string['err_nocriteria'] = 'Een rubric moet minstens één criterium hebben';
$string['err_nodefinition'] = 'De niveaudefinitie kan niet leeg zijn';
$string['err_nodescription'] = 'De criteriumbeschrijving kan niet leeg zijn';
$string['err_novariations'] = 'Criteriumniveau\'s kunnen niet allemaal hetzelfde cijfer waard zijn.';
$string['err_scoreformat'] = 'Het aantal punten voor elk niveau moet een geldig getal zijn.';
$string['err_totalscore'] = 'Het maximale aantal mogelijke punten wanneer beoordeeld door de rubric moet meer dan nul zijn.';
$string['gradingof'] = '{$a} beoordeling';
$string['level'] = 'Niveau {$a->definition}, {$a->score} punten.';
$string['leveldefinition'] = 'Niveau {$a} definitie';
$string['leveldelete'] = 'Verwijder niveau  {$a}';
$string['levelempty'] = 'Klik om het niveau te bewerken';
$string['levelsgroup'] = 'Groepniveaus';
$string['lockzeropoints'] = 'Bereken cijfer gebaseerd op de minimale score op de minimaal mogelijke score van de rubric';
$string['lockzeropoints_help'] = 'Deze instelling is enkel van toepassing wanneer de som van het minimale cijfer voor alle criteria groter is dan 0. Indien ingeschakeld zal het minimaal haalbare cijfer voor de activiteit het minimaal haalbare cijfer voor de rubric zijn. Indien niet ingeschakeld zal het minimaal haalbare cijfer voor de rubric gemapt worden naar het minimaal haalbare cijfer voor de activiteit (dat 0 is tenzij er een schaal wordt gebruikt).';
$string['name'] = 'Naam';
$string['needregrademessage'] = 'De rubricdefinitie is gewijzigd nadat de leerling beoordeeld werd. De leerling kan zijn rubric niet zien tot je deze controleert en het cijfer aanpast.';
$string['notset'] = 'Niet ingesteld';
$string['pluginname'] = 'Rubric';
$string['pointsvalue'] = '{$a} punten';
$string['previewrubric'] = 'Voorbeeld van rubric';
$string['privacy:metadata:criterionid'] = 'Een identifier voor een specifiek criterium dat wordt beoordeeld.';
$string['privacy:metadata:fillingssummary'] = 'Slaat informatie op over het cijfer van de gebruiker dat door de rubric is gemaakt.';
$string['privacy:metadata:instanceid'] = 'Een identifier die betrekking heeft op een cijfer in een activiteit.';
$string['privacy:metadata:levelid'] = 'Het niveau verkregen in de rubric.';
$string['privacy:metadata:remark'] = 'Opmerkingen met betrekking tot het criterium in de rubric dat wordt beoordeeld.';
$string['regrademessage1'] = 'Je gaat wijzigingen aanbrengen aan een rubric die al gebruikt is voor het beoordelen. Geef aan of bestaande cijfers moeten nagekeken worden. Als je dit aangeeft, dan zal de rubric verborgen blijven voor leerlingen tot hun item opnieuw beoordeeld is.';
$string['regrademessage5'] = 'Je gaat belangrijke wijzigingen aan een rubric die al gebruikt is voor het beoordelen bewaren. Het cijfer in de cijferlijst zal niet aangepast worden, maar de rubric zal verborgen blijven voor leerlingen tot je hun item opnieuw hebt beoordeeld.';
$string['regradeoption0'] = 'Niet markeren voor opnieuw beoordelen.';
$string['regradeoption1'] = 'Markeren voor opnieuw beoordelen';
$string['restoredfromdraft'] = 'OPMERKING: de laatste beoordelingspoging voor deze persoon is niet behoorlijk bewaard en daarom zijn de conceptcijfers teruggezet. Als je deze wijzigingen wil annuleren, klik dan op de \'Annuleer\'-knop onderaan.';
$string['rubric'] = 'Rubric';
$string['rubricmapping'] = 'Score naar cijfer mappingregels';
$string['rubricmappingexplained'] = 'De kleinst mogelijke score voor deze rubric is <b>{$a->minscore}</b> punten en zal omgezet worden naar het minimale cijfer beschikbaar voor deze activiteit (welke nul is, tenzij een schaal wordt gebruikt). De maximale score van <b>{$a->maxscore} punten</b> zal omgezet worden naar het maximale cijfer.

Als er een schaal gebruikt wordt in plaats van een cijfer, dan zal de score afgerond worden en omgezet worden naar de schaalelementen alsof ze opeenvolgende getallen waren.

Deze cijferberekening kan gewijzigd worden door het formulier te bewerken en het \'Bereken cijfer gebaseerd op de minimale score op de minimaal mogelijke score van de rubric\' aan te vinken.';
$string['rubricnotcompleted'] = 'Kies iets voor elk criterium';
$string['rubricoptions'] = 'Rubric opties';
$string['rubricstatus'] = 'Huidige rubric status';
$string['save'] = 'Bewaar';
$string['saverubric'] = 'Bewaar rubric en maak het klaar';
$string['saverubricdraft'] = 'Bewaar als concept';
$string['scoreinputforlevel'] = 'Score input voor niveau {$a}';
$string['scorepostfix'] = '{$a} punten';
$string['showdescriptionstudent'] = 'Toon rubricbeschrijving aan wie beoordeeld is';
$string['showdescriptionteacher'] = 'Toon rubricbeschrijving tijdens evaluatie';
$string['showremarksstudent'] = 'Toon opmerkingen aan wie beoordeeld wordt';
$string['showscorestudent'] = 'Toon punten voor elk niveau aan wie beoordeeld wordt';
$string['showscoreteacher'] = 'Toon punten voor elk niveau tijdens evaluatie';
$string['sortlevelsasc'] = 'Sorteervolgorde voor niveaus:';
$string['sortlevelsasc0'] = 'Aflopend volgens aantal punten';
$string['sortlevelsasc1'] = 'Oplopend volgens aantal punten';
$string['zerolevelsabsent'] = 'Waarschuwing: de laagst mogelijke score is niet nul. Dit kan eigenaardige resultaten opleveren voor deze activiteit. Om dit te voorkomen moet elk criterium en niveau hebben met nul punten.<br />
Deze waarschuwing mag genegeerd worden als er een beoordelingsschaal is gebruikt en als de minimum niveau\'s in de rubric overeen komen met de met de kleinste waarde van de schaal.';
