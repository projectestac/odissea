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
 * Strings for component 'gradingform_guide', language 'sv', version '4.4'.
 *
 * @package     gradingform_guide
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomment'] = 'Lägg till återkommande kommentar';
$string['addcriterion'] = 'Lägg till kriterium';
$string['additionalcomments'] = 'Ytterligare kommentarer';
$string['additionalcommentsforcriterion'] = 'Ytterligare kommentarer för kriterium, {$a}';
$string['alwaysshowdefinition'] = 'Visa guidens definitioner för studenter';
$string['backtoediting'] = 'Tillbaka till redigering';
$string['clicktocopy'] = 'Klicka för att kopiera denna text till återkopplingen/feedback för kriteriet';
$string['clicktoedit'] = 'Välj för att redigera';
$string['clicktoeditname'] = 'Välj för att redigera kriteriets namn';
$string['comment'] = 'Kommentar';
$string['commentpickerforcriterion'] = 'Ofta använd kommentarsväljare för {$a} ytterligare kommentarer';
$string['comments'] = 'Återkommande kommentar';
$string['commentsdelete'] = 'Ta bort kommentar';
$string['commentsempty'] = 'Välj för att redigera kommentar';
$string['commentsmovedown'] = 'Flytta ned';
$string['commentsmoveup'] = 'Flytta upp';
$string['confirmdeletecriterion'] = 'Är du säker att du vill ta bort detta element?';
$string['confirmdeletelevel'] = 'Är du säker att du vill ta bort nivån?';
$string['criterion'] = 'Kriterienamn';
$string['criteriondelete'] = 'Ta bort kriterium';
$string['criterionempty'] = 'Välj för att redigera kriterium';
$string['criterionmovedown'] = 'Flytta ned';
$string['criterionmoveup'] = 'Flytta upp';
$string['criterionname'] = 'Namn på kriterium';
$string['criterionremark'] = '{$a} kriterieanmärkning';
$string['definemarkingguide'] = 'Definiera bedömningsguide';
$string['description'] = 'Beskrivning';
$string['descriptionmarkers'] = 'Beskrivning för bedömare';
$string['descriptionstudents'] = 'Beskrivning för studenter';
$string['err_maxscoreisnegative'] = 'Maxpoängen är inte giltig, negativa värden är inte tillåtna';
$string['err_maxscorenotnumeric'] = 'Högsta poäng för kriterium måste vara numeriskt';
$string['err_nocomment'] = 'Kommentarfältet får inte vara tomt';
$string['err_nodescription'] = 'Beskrivning för studenter får inte vara tomt';
$string['err_nodescriptionmarkers'] = 'Beskrivning för bedömare får inte vara tomt';
$string['err_nomaxscore'] = 'Högsta poäng för kriterium får inte vara tomt';
$string['err_noshortname'] = 'Namn på kriterium får inte vara tomt';
$string['err_scoreinvalid'] = 'Den angivna poängen för \'{$a->criterianame}\' är inte giltig. Det högsta värdet är: {$a->maxscore}';
$string['err_scoreisnegative'] = 'Poängen som ges till {$a->criterianame} är inte giltig, negativa värden är inte tillåtna';
$string['err_shortnametoolong'] = 'Kriterienamn måste vara mindre än 256 tecken';
$string['gradingof'] = '{$a} betygsättning';
$string['guide'] = 'Bedömningsguide';
$string['guidemappingexplained'] = 'OBS: Din bedömningsguide har ett maximalt poängtal om <b>{$a->maxscore} poäng</b> men den högsta poängen inställd i aktiviteten är {$a->modulegrade}. Det maximala värde som ställts in i bedömningsguiden kommer att skalas till det maximala betyget i modulen.<br /> Mellanliggande värden omvandlas och rundas av till närmast liggande betyg.';
$string['guidenotcompleted'] = 'Ange ett giltigt värde för varje kriterium';
$string['guideoptions'] = 'Alternativ för bedömningsguide';
$string['guidestatus'] = 'Aktuell status för bedömningsguide';
$string['hidemarkerdesc'] = 'Visa inte kriteriebeskrivningar för betygsättare';
$string['hidestudentdesc'] = 'Visa inte kriteriebeskrivningar för studenter';
$string['informationforcriterion'] = '{$a}-information';
$string['insertcomment'] = 'Infoga ofta använd kommentar';
$string['maxscore'] = 'Maxpoäng';
$string['name'] = 'Namn';
$string['needregrademessage'] = 'Definition för bedömningsguide ändrades efter att denna student har betygsatts. Studenten kan inte se denna bedömningsguide tills du kontrollerat bedömningsguiden och uppdaterat betyget.';
$string['outof'] = 'Poäng utav {$a}';
$string['pluginname'] = 'Bedömningsguide';
$string['previewmarkingguide'] = 'Förhandsvisning av bedömningsguide';
$string['privacy:metadata:criterionid'] = 'En identifierare för ett kriterium för avancerad poängsättning.';
$string['privacy:metadata:fillingssummary'] = 'Lagrar information om en användares resultat och återkoppling för poängsättningsguiden.';
$string['privacy:metadata:instanceid'] = 'En identifierare för ett resultat som används av en aktivitet.';
$string['privacy:metadata:preference:showmarkerdesc'] = 'Om poängsättningskriteriumbeskrivningar ska visas';
$string['privacy:metadata:preference:showstudentdesc'] = 'Om beskrivningar av studentkriterium ska visas';
$string['privacy:metadata:remark'] = 'Anmärkningar relaterade till detta betygskriteriet.';
$string['privacy:metadata:score'] = 'En poäng för det här betygskriteriet.';
$string['regrademessage1'] = 'Du är på väg att spara ändringar i en bedömningsguide som redan används får bedömning. Ange om redan gjorda bedömningar behöver göras om. Om du anger att så är fallet kommer bedömningsguiden att döljas får studenter tills deras uppgift har bedömts igen';
$string['regrademessage5'] = 'Du är på väg att spara betydelsefulla ändringar i en bedömningsguide som redan används får bedömning. Ange om redan gjorda bedömningar behöver göras om. Om du anger att så är fallet kommer bedömningsguiden att döljas får studenter tills deras uppgift har bedömts igen';
$string['regradeoption0'] = 'Markera inte för ombedömning';
$string['regradeoption1'] = 'Markera för ombedömning';
$string['remark_help'] = 'Ange ytterligare kommentarer om det här kriteriet.';
$string['restoredfromdraft'] = 'OBS: Det senaste försöket att bedöma denna persons arbete sparades inte korrekt så ett betygsutkast har återställts. Om du inte vill spara dessa ändringar använd "Avbryt"-knappen nedan';
$string['save'] = 'Spara';
$string['saveguide'] = 'Spara bedömningsguide och gör den klar';
$string['saveguidedraft'] = 'Spara som utkast';
$string['score'] = 'Poäng';
$string['score_help'] = 'Ange en poäng för {$a->criterion} mellan 0 och {$a->maxscore}.';
$string['scoreforcriterion'] = '{$a} poäng';
$string['showmarkerdesc'] = 'Visa kriteriernas beskrivningar för bedömare';
$string['showmarkspercriterionstudents'] = 'Visa studenterna resultat per kriterium (annars visas bara totala resultatet)';
$string['showstudentdesc'] = 'Visa kriteriernas beskrivningar för student hela tiden (annars visas dessa bara efter bedömning)';
