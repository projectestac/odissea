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
 * Strings for component 'assignfeedback_pdf', language 'nl', version '3.11'.
 *
 * @package     assignfeedback_pdf
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addquicklist'] = 'Toevoegen aan Snellijst opmerkingen';
$string['allowpdffeedback'] = 'Ingesteld';
$string['annotatesubmission'] = 'Inzending annoteren';
$string['annotationhelp'] = 'Hulp bij annoteren';
$string['annotationhelp_text'] = '<table>
<thead><tr><th>Control</th><th>Keyboard shortcut</th>
<th>Beschrijving</th></tr></thead>
<tr><td>{$a->save}</td><td>&nbsp;</td>
<td>Annoteren sluiten zonder een antwoord PDF te genereren (alle annotaties worden direct bewaard als ze worden opgeslagen)</td></tr>
 <tr><td>{$a->generate}</td><td>&nbsp;</td>
 <td>Genereer voor de leerling een geannoteerd PDF bestand om te downloaden</td></tr>
 <tr>
   <td>Vind opmerkingen</td>
   <td>&nbsp;</td>
   <td>Ga direct naar een eerder ingevoerde opmerking (in deze inzending) en markeer deze</td></tr>
 <tr>
   <td>Toon vorige</td>
   <td>&nbsp;</td>
   <td> Toon opmerkingen voor deze leerling vanuit een andere opdracht in deze cursus (in een zijframe)</td></tr>
 <tr>
   <td>&lt;-- Vorige</td>
   <td>p</td>
   <td>Bekijk vorige pagina</td></tr>
 <tr>
   <td>Volgende --&gt;</td>
   <td>n</td>
   <td>Bekijk volgende pagina</td></tr>
 <tr>
   <td>Achtergrondkleur</td>
   <td>[ en ]</td>
   <td>Wijzig de opvulkleur voor het opmerkingenvak (ook beschikbaar door met rechtermuisknop op een opmerking te klikken)</td></tr>
 <tr>
   <td>Lijnkleur</td>
   <td>{ en }</td>
   <td>Wijzig de kleur voor annotaties</td></tr>
 <tr>
   <td>Kies stempel</td>
   <td>&nbsp;</td>
 <td> Kies een stempel om te gebruiken met de stempeltool (nieuwe stempels kunnen worden toegevoegd in de \'pix/stamps\' map op de server)</td></tr>
 <tr><td>{$a->comment}</td><td>c</td>
 <td> Klik op de pagina om een opmerkingenvak toe te voegen, schrijf de opmerking en klik vervolgens op de pagina om op te slaan. Klik op een opmerking om deze te bewerken. Rechtermuisklik om de kleur te wijzigen, in de snellijst op te slaan of te verwijderen (of te verwijderen tekst te verwijderen)</td></tr>
 <tr><td>{$a->line}</td><td>l</td>
 <td> Klik + sleep (of klik, beweeg, klik) om een lijn op de pagina te tekenen</td></tr>
 <tr><td>{$a->rectangle}</td><td>r</td>
 <td>Klik + sleep (of klik, beweeg, klik) om een rechthoek op de pagina te tekenen</td></tr>
 <tr><td>{$a->oval}</td><td>o</td><td>Klik + sleep (of klik, beweeg, klik) om een ovaal op de pagina te tekenen</td></tr>
 <tr><td>{$a->freehand}</td><td>f</td>
 <td>Klik + sleep om lijnen uit de vrije hand  op de pagina te tekenen</td></tr>
 <tr><td>{$a->highlight}</td><td>h</td>
 <td>Klik + sleep (of klik, beweeg, klik) om een semitransparante markering over de bestaande pagina te tekenen</td></tr>
 <tr><td>{$a->stamp}</td><td>s</td>
 <td>Klik om de geselecteerde stempel in te voegen in standaardafmetingen. Klik + sleep om in te voegen met andere afmetingen</td></tr>
 <tr><td>{$a->erase}</td><td>e</td>
 <td>Klik in of op een annotatie (geen opmerking) om deze te wissen</td></tr>
 <tr>
   <td>Snellijst</td>
   <td>&nbsp;</td>
   <td>Rechtermuisklik op de pagina om een eerder in de \'snellijst\' opgeslagen opmerking in te voegen. Gebruik \'x\' om ongewenste snellijstitems te verwijderen</td></tr>
 </table>';
$string['backtocommentlist'] = 'Terug naar commentaar lijst';
$string['badaction'] = 'Ongeldige actie \'{$a}';
$string['badannotationid'] = 'Annotatie id is voor een andere inzending of pagina';
$string['badcommentid'] = 'Opmerking id is voor een andere inzending of pagina';
$string['badcoordinate'] = 'Oneven aantal coördinaten in de lijn - moet 2 coördinaten per punt zijn';
$string['badpath'] = 'Pad is ongeldig';
$string['badtype'] = 'Ongeldige type {$a}';
$string['cancel'] = 'Annuleer';
$string['clearimagecache'] = 'Wis pagina afbeeldingscache';
$string['colourblack'] = 'Zwart';
$string['colourblue'] = 'Blauw';
$string['colourclear'] = 'Doorzichtig';
$string['colourgreen'] = 'Groen';
$string['colourred'] = 'Rood';
$string['colourwhite'] = 'Wit';
$string['colouryellow'] = 'Geel';
$string['comment'] = 'Commentaar';
$string['commentcolour'] = '[,] - achtergrondkleur opmerking';
$string['commenticon'] = 'c - opmerkingen toevoegen. Ctrl ingedrukt houden om een lijn te tekenen.';
$string['deletecomment'] = 'Verwijder commentaar';
$string['deleteresponse'] = 'Antwoord verwijderen';
$string['deleteresponseconfirm'] = 'Weet je zeker dat je het antwoord voor {$a->username} in opdracht {$a->assignmentname} wilt verwijderen?';
$string['downloadoriginal'] = 'PDF van oorspronkelijke inzending downloaden';
$string['downloadresponse'] = 'Antwoord downloaden';
$string['draftsaved'] = 'Concept bewaard';
$string['emptyquicklist'] = 'Geen items in Snellijst';
$string['emptyquicklist_instructions'] = 'Klik met rechtermuisknop op een opmerking om deze te kopiëren naar de Snellijst';
$string['emptysubmission'] = 'Lege inzending';
$string['enabled'] = 'PDF feedback';
$string['enabled_help'] = 'Hiermee is het mogelijk PDFs online te annoteren (ingezonden via PDF inzendingstype) en het geannoteerde werk terug te sturen naar de leerlingen.';
$string['eraseicon'] = 'e - lijnen en vormen wissen';
$string['errorgenerateimage'] = 'Kon geen afbeelding genereren - details: {$a}';
$string['errormessage'] = 'Foutmelding:';
$string['errornosubmission'] = 'Proberen een afbeelding te maken voor niet-bestaande inzending';
$string['errornosubmission2'] = 'Kon inzending PDF niet vinden';
$string['errortempfolder'] = 'Kon geen tijdelijke map aanmaken';
$string['findcomments'] = 'Vind opmerkingen';
$string['findcommentsempty'] = 'Geen opmerkingen';
$string['freehandicon'] = 'f - uit de vrije hand lijnen tekenen';
$string['generateresponse'] = 'Antwoordbestand genereren';
$string['gspath'] = 'Ghostscript pad';
$string['gspath2'] = 'Voor de meeste Linux-installaties kan dit \'/usr/bin/gs\' blijven. In Windows zal dit een pad zijn zoals \'c:gsbingswin32c.exe\' (zorg ervoor dat er geen spaties in het pad zitten - kopieer indien nodig de bestanden \'gswin32c.exe\' en \'gsdll32.dll\' naar een nieuwe map zonder een spatie in het pad)';
$string['highlighticon'] = 'h - tekst markeren';
$string['imagefor'] = 'Afbeeldingsbestanden voor {$a}';
$string['jsrequired'] = 'Javascript moet aangezet zijn in je browser om';
$string['keyboardnext'] = 'n - volgende pagina';
$string['keyboardprev'] = 'p - vorige pagina';
$string['linecolour'] = '{,} - lijnkleur';
$string['lineicon'] = 'l - lijnen';
$string['missingannotationdata'] = 'Ontbrekende annotatiegegevens';
$string['missingcommentdata'] = 'Opmerking data ontbreekt';
$string['missingquicklistdata'] = 'Snellijst data ontbreekt';
$string['next'] = 'Volgende';
$string['nocomments'] = 'Geen opmerkingen';
$string['nogroup'] = 'Geen groep';
$string['okagain'] = 'Klik op OK om opnieuw te proberen';
$string['openlinknewwindow'] = 'Open links in een nieuw venster';
$string['opennewwindow'] = 'Open deze pagina in een nieuw venster';
$string['ovalicon'] = 'o - ovalen';
$string['pagenumber'] = 'Paginanummer';
$string['pagenumbertoobig'] = 'Gevraagd paginanummer is hoger dan het aantal pagina\'s ({$a-pageno} > {$a->pagecount})';
$string['pagenumbertoosmall'] = 'Gevraagd paginanummer is te laag (-1)';
$string['pdf'] = 'PDF feedback';
$string['pluginname'] = 'PDF feedback';
$string['previous'] = 'Vorige';
$string['previousnone'] = 'Geen';
$string['quicklist'] = 'Snellijst opmerkingen';
$string['rectangleicon'] = 'r - rechthoeken';
$string['resend'] = 'Opnieuw sturen';
$string['responsefor'] = 'Antwoordbestand voor {$a}';
$string['responseok'] = 'Antwoordbestand gegenereerd';
$string['responseproblem'] = 'Er was een probleem bij het genereren van het antwoordbestand';
$string['savedraft'] = 'Concept-annotaties opslaan';
$string['servercommfailed'] = 'Communicatie met server mislukt - wil je het bericht opnieuw verzenden?';
$string['showpreviousassignment'] = 'Toon vorige opdracht';
$string['stamp'] = 'Kies stempel';
$string['stampicon'] = 's - stempel';
$string['test_doesnotexist'] = 'Het ghostscriptpad verwijst naar een niet-bestaand bestand';
$string['test_empty'] = 'Het ghostscriptpad is leeg - voer het juiste pad in';
$string['test_isdir'] = 'Het ghostscriptpad verwijst naar een map, voeg het ghostscript-programma toe aan het door jou gespecificeerde pad';
$string['test_notestfile'] = 'De test-PDF ontbreekt';
$string['test_notexecutable'] = 'Ghostscript verwijst naar een bestand dat niet uitvoerbaar is';
$string['test_ok'] = 'Het ghostscriptpad lijkt in orde - controleer of je het bericht in de afbeelding hieronder kunt zien.';
$string['testgs'] = 'Test ghostscriptpad';
$string['viewresponse'] = 'Bekijk antwoord online';
