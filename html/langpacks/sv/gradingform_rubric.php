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
 * Strings for component 'gradingform_rubric', language 'sv', version '3.11'.
 *
 * @package     gradingform_rubric
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcriterion'] = 'Lägg till kriterium';
$string['additionalfeedback'] = 'Ytterligare återkoppling';
$string['alwaysshowdefinition'] = 'Tillåt användare att förhandsgranska bedömningsmatrisen som används i modulen (annars visas matrisen endast efter betygsättning)';
$string['backtoediting'] = 'Tillbaka till redigering';
$string['confirmdeletecriterion'] = 'Är du säker på att du vill radera detta kriterium?';
$string['confirmdeletelevel'] = 'Är du säker på att du vill radera denna nivån?';
$string['criterion'] = 'Kriterium {$a}';
$string['criterionaddlevel'] = 'Lägg till nivå';
$string['criteriondelete'] = 'Ta bort kriterium';
$string['criterionduplicate'] = 'Duplicera kriterium';
$string['criterionempty'] = 'Klicka här för att redigera kriterium';
$string['criterionmovedown'] = 'Flytta ned';
$string['criterionmoveup'] = 'Flytta upp';
$string['criterionremark'] = 'Kommentar för kriterium {$a->description}: {$a->remark}';
$string['definerubric'] = 'Definiera bedömningsmatris';
$string['description'] = 'Beskrivning';
$string['enableremarks'] = 'Tillåt betygsättare att lägga till kommentarer vid varje kriterium';
$string['err_mintwolevels'] = 'Varje kriterium måste innehålla minst två nivåer';
$string['err_nocriteria'] = 'Matris måste innehålla minst en kriterium';
$string['err_nodefinition'] = 'Definition av nivå måste fyllas i';
$string['err_nodescription'] = 'Beskrivning av kriterium måste fyllas i';
$string['err_novariations'] = 'Kriterienivåerna kan inte alla vara värda samma poäng';
$string['err_scoreformat'] = 'Antal poäng för varje nivå måste vara ett giltigt tal';
$string['err_totalscore'] = 'Maximalt antal möjliga poäng när bedömning sker med matris måste vara mer än noll';
$string['gradingof'] = '{$a} Betygsättning';
$string['level'] = 'Nivå {$a->definition}, {$a->score} poäng.';
$string['leveldefinition'] = 'Nivå {$a}-definition';
$string['leveldelete'] = 'Ta bort nivå {$a}';
$string['levelempty'] = 'Klick för att redigera nivå';
$string['levelsgroup'] = 'Nivågrupp';
$string['lockzeropoints'] = 'Beräkna betyg med en lägsta poäng på lägsta möjliga betyg för kriteriet';
$string['lockzeropoints_help'] = 'Den här inställningen gäller endast om summan av det minsta antalet poäng för varje kriterium är större än 0. Om den är markerad kommer aktivitetens lägsta poäng att vara det lägsta uppnåeliga betyget för kriteriet. Om det inte har plockats bort mappas minsta möjliga poäng för kriteriet till det lägsta tillgängliga betyget för aktiviteten (vilket är 0 om inte en skala används).';
$string['name'] = 'Namn';
$string['needregrademessage'] = 'Definitionen av bedömningsmatrisen ändrades efter att studenten betygsattes. Studenten kan inte se den här matrisen förrän du kontrollerar matrisen och uppdatera betyget.';
$string['notset'] = 'Ej angiven';
$string['pluginname'] = 'Bedömningsmatris';
$string['pointsvalue'] = '{$a} poäng';
$string['previewrubric'] = 'Förhandsgranska matris';
$string['privacy:metadata:criterionid'] = 'En identifierare för ett visst kriterium som betygsätts.';
$string['privacy:metadata:fillingssummary'] = 'Lagrar information om användarens resultat som skapats av kriteriet.';
$string['privacy:metadata:instanceid'] = 'En identifierare som relaterar till ett resultat i en aktivitet.';
$string['privacy:metadata:levelid'] = 'Den nivå som erhålls i matrisen.';
$string['privacy:metadata:remark'] = 'Anmärkningar för matriskriteriet som bedöms.';
$string['regrademessage1'] = 'Du håller på att spara ändringarna till en bedömningsmatris som redan har använts för betygssättning. Vänligen ange om befintliga betyg behöver ses över. Om du ställer in detta kommer matrisen att döljas för studenten eleverna tills deras uppgift är åter betygsatt.';
$string['regrademessage5'] = 'Du håller på att spara betydande ändringarna till en bedömningsmatris som redan har använts för betygssättning. Betygssättningens värde kommer att vara oförändrad, men matrisen kommer att döljas för studenter tills deras uppgift är åter betygsatt.';
$string['regradeoption0'] = 'Markera inte för ombedömning';
$string['regradeoption1'] = 'Markera för ombedömning';
$string['restoredfromdraft'] = 'OBS: Den senaste försök att betygsätta denna student har inte sparats korrekt - betyg har sparats som "utkast". Om du vill ta bort dessa ändringarna välj "Avbryt" nedan.';
$string['rubric'] = 'Bedömningsmatris';
$string['rubricmapping'] = 'Hur poäng omvandlas till resultat för uppgiften';
$string['rubricmappingexplained'] = 'Minsta möjliga poäng för det här kriteriet är <b>{$a->minscore}</b> poäng. Den konverteras till det lägsta möjliga betyget för aktiviteten (vilket är 0 om inte en skala används). Den maximala poängen <b>{$a->maxscore}</b> poäng konverteras till det maximala betyget. Mellanliggande poäng konverteras på motsvarande sätt.

Om en skala används för bedömning avrundas poängen och konverteras till skalelementen som om de vore på varandra följande heltal.

Denna betygsberäkning kan ändras genom att redigera formuläret och kryssa i rutan "Beräkna resultat med en lägsta poäng på det lägsta uppnåeliga betyget för kriteriet".';
$string['rubricnotcompleted'] = 'Välj något för varje kriterium';
$string['rubricoptions'] = 'Bedömningsmatrisalternativ';
$string['rubricstatus'] = 'Nuvarande bedömningsmatris-status';
$string['save'] = 'Spara';
$string['saverubric'] = 'Spara matris och gör den redo';
$string['saverubricdraft'] = 'Sparar som utkast';
$string['scoreinputforlevel'] = 'Poäng för nivå {$a}';
$string['scorepostfix'] = '{$a}poäng';
$string['showdescriptionstudent'] = 'Visa matrisens beskrivning för de som betygsätter';
$string['showdescriptionteacher'] = 'Visa matrisens beskrivning under värderingen';
$string['showremarksstudent'] = 'Visa kommentarer för de som betygssätts';
$string['showscorestudent'] = 'Visa poäng för varje nivå för dem som betygssätts';
$string['showscoreteacher'] = 'Visa poäng för varje nivå för den som betygsätter';
$string['sortlevelsasc'] = 'Visningsordning för nivåer:';
$string['sortlevelsasc0'] = 'Fallande i poängordning';
$string['sortlevelsasc1'] = 'Stigande i poängordning';
$string['zerolevelsabsent'] = 'Varning! Minsta möjliga poäng för detta kriterium är inte 0; Detta kan resultera i oväntade betyg för aktiviteten. För att undvika detta bör varje kriterium ha en nivå med 0 poäng.
Den här varningen kan ignoreras om en skala används för bedömning och miniminivåerna i kriterierna motsvarar skalans minimivärde.';
