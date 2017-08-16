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
 * Strings for component 'gradingform_guide', language 'sv', branch 'MOODLE_32_STABLE'
 *
 * @package   gradingform_guide
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomment'] = 'Lägg till ofta använda kommentar';
$string['addcriterion'] = 'Lägg till kriterium';
$string['alwaysshowdefinition'] = 'Visa guide definition för studenter';
$string['backtoediting'] = 'Tillbaka till redigering';
$string['clicktocopy'] = 'Välj för att kopiera denna text i kriterium feedback';
$string['clicktoedit'] = 'Välj för att redigera';
$string['clicktoeditname'] = 'Välj för att redigera kriteriums namn';
$string['comments'] = 'ofta använda kommentar';
$string['commentsdelete'] = 'ta bort kommentar';
$string['commentsempty'] = 'Välj för att redigera kommentar';
$string['commentsmovedown'] = 'Flytta ned';
$string['commentsmoveup'] = 'Flytta upp';
$string['confirmdeletecriterion'] = 'Är du säker att du vill ta bort detta element?';
$string['confirmdeletelevel'] = 'Är du säker att du vill ta bort nivån?';
$string['criterion'] = 'Kriterium';
$string['criteriondelete'] = 'Ta bort kriterium';
$string['criterionempty'] = 'Välj för att redigera kriterium';
$string['criterionmovedown'] = 'Flytta ned';
$string['criterionmoveup'] = 'Flytta upp';
$string['criterionname'] = 'Kriterium namn';
$string['definemarkingguide'] = 'Definiera bedömningsguide';
$string['description'] = 'Beskrivning';
$string['descriptionmarkers'] = 'Beskrivning för betygsättare';
$string['descriptionstudents'] = 'Beskrivning för student';
$string['err_maxscorenotnumeric'] = 'Kriterie max poäng måste vara numeriskt';
$string['err_nocomment'] = 'Kommentar kan inte vara tomt';
$string['err_nodescription'] = 'Beskrivning för student kan inte vara tomt';
$string['err_nodescriptionmarkers'] = 'Beskrivning för betygsättare kan inte vara tomt';
$string['err_nomaxscore'] = 'Kriterium max poäng kan inte vara tomt';
$string['err_noshortname'] = 'Kriterie namn kan inte vara tomt';
$string['err_scoreinvalid'] = 'Den poäng till {$a->criterianame} är inte giltig, max poäng är: {$a->maxscore}';
$string['gradingof'] = '{$a} betygsättning';
$string['guide'] = 'Bedömningsguide';
$string['guidemappingexplained'] = 'OBS: Din bedömningsguide har ett maximalt poängtal om <b>{$a->maxscore} poäng</b> men den högsta poängen inställd i aktiviteten är {$a->modulegrade}. Det maximala värde som ställts in i bedömningsguiden kommer att skalas till det maximala betyget i modulen.<br /> Mellanliggande värden omvandlas och rundas av till närmast liggande betyg.';
$string['guidenotcompleted'] = 'Ange ett giltigt betyg för varje kriterium';
$string['guideoptions'] = 'Alternativ för bedömningsguide';
$string['guidestatus'] = 'Aktuell status för bedömningsguide';
$string['hidemarkerdesc'] = 'Göm kriteriebeskrivningar för betygsättare';
$string['hidestudentdesc'] = 'Göm kriteriebeskrivningar för studenter';
$string['maxscore'] = 'Maximal märkör';
$string['name'] = 'Namn';
$string['needregrademessage'] = 'Definition för bedömningsguide ändrades efter att denna student har betygsatts. Studenten kan inte se denna bedömningsguide tills du kontrollerat bedömningsguiden och uppdaterat betyget.';
$string['pluginname'] = 'Bedömningsguide';
$string['previewmarkingguide'] = 'Förhandsvisning av bedömningsguide';
$string['regrademessage1'] = 'Du är på väg att spara ändringar i en bedömningsguide som redan används får bedömning. Ange om redan gjorda bedömningar behöver göras om. Om du anger att så är fallet kommer bedömningsguiden att döljas får studenter tills deras uppgift har bedömts igen';
$string['regrademessage5'] = 'Du är på väg att spara betydelsefulla ändringar i en bedömningsguide som redan används får bedömning. Ange om redan gjorda bedömningar behöver göras om. Om du anger att så är fallet kommer bedömningsguiden att döljas får studenter tills deras uppgift har bedömts igen';
$string['regradeoption0'] = 'Markera inte för ombedömning';
$string['regradeoption1'] = 'Markera för ombedömning';
$string['restoredfromdraft'] = 'OBS: Det senaste försöket att bedöma denna persons arbete sparades inte korrekt så ett betygsutkast har återställts. Om du inte vill spara dessa ändringar använd "Avbryt"-knappen nedan';
$string['save'] = 'Spara';
$string['saveguide'] = 'Spara bedömningsguide och gör den klar';
$string['saveguidedraft'] = 'Spara som utkast';
$string['score'] = 'poäng';
$string['showmarkerdesc'] = 'Visa kriteriebeskrivningar för betygsättare';
$string['showmarkspercriterionstudents'] = 'Visa märken per kriterium för studenter';
$string['showstudentdesc'] = 'Visa kriteriebeskrivningar för student';
