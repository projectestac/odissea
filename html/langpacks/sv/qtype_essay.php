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
 * Strings for component 'qtype_essay', language 'sv', version '3.11'.
 *
 * @package     qtype_essay
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptedfiletypes'] = 'Accepterade filtyper';
$string['acceptedfiletypes_help'] = 'Du kan begränsa vilja filtyper som kan lämnas in genom att skriva in respektive filtillägg (t.ex. ".doc"). Om detta fält lämnas tomt kommer alla filtyper att accepteras.';
$string['allowattachments'] = 'Tillåt bilagor';
$string['answerfiles'] = 'Svarsfiler';
$string['answertext'] = 'Svarstext';
$string['attachedfiles'] = 'Bilagor: {$a}';
$string['attachmentsoptional'] = 'Bilagor är valfria';
$string['attachmentsrequired'] = 'Bilagor obligatoriska';
$string['attachmentsrequired_help'] = 'Det här alternativet anger det minsta antalet bifogade filer som krävs för att ett svar ska anses vara bedömningsbart.';
$string['err_maxminmismatch'] = 'Gränsen för det maximala antalet ord måste vara högre än gränsen för minsta antalet ord';
$string['err_maxwordlimit'] = 'Maximalt antal ord är aktiverat men har inte angetts';
$string['err_maxwordlimitnegative'] = 'Maximalt antal ord kan inte vara negativt';
$string['err_minwordlimit'] = 'Minsta antal ord är aktiverat men har inte angetts';
$string['err_minwordlimitnegative'] = 'Minsta antal ord kan inte vara negativt';
$string['formateditor'] = 'HTML';
$string['formateditorfilepicker'] = 'HTML med filväljare';
$string['formatmonospaced'] = 'Oformaterad text, fast teckenavstånd';
$string['formatnoinline'] = 'Ingen onlinetext';
$string['formatplain'] = 'Oformaterad text';
$string['graderinfo'] = 'Information för bedömare';
$string['graderinfoheader'] = 'Information från betygsättare';
$string['maxbytes'] = 'Maximal filstorlek';
$string['maxwordlimit'] = 'Max antal ord';
$string['maxwordlimit_help'] = 'Om svaret kräver att deltagarna skriver in text är detta det maximala antalet ord som varje elev får skicka in.';
$string['maxwordlimitboundary'] = 'Maximalt antal ord för den här frågan är {$a->limit}-ord och du försöker skicka in {$a->count}-ord. Förkorta ditt svar och försök igen.';
$string['minwordlimit'] = 'Minsta antal ord';
$string['minwordlimit_help'] = 'Om svaret kräver att deltagarna anger text är detta det minsta antalet ord som varje elev får skicka in.';
$string['minwordlimitboundary'] = 'Den här frågan kräver ett svar på minst {$a->limit}-ord och du försöker skicka in {$a->count}-ord. Utöka svaret och försök igen.';
$string['mustattach'] = 'När "Ingen onlinetext" är markerad, eller när svar är valfria, måste du tillåta minst en bifogad fil.';
$string['mustrequire'] = 'När "Ingen onlinetext" är markerad, eller när svar är valfria, måste du kräva minst en bifogad fil.';
$string['mustrequirefewer'] = 'Du kan inte kräva fler bilagor än vad du tillåter.';
$string['nlines'] = '{$a} rader';
$string['nonexistentfiletypes'] = 'Följande filtyper kändes inte igen: {$a}';
$string['pluginname'] = 'Uppsats';
$string['pluginname_help'] = 'Som svar på en fråga kan den som svarar ladda upp en eller flera filer och/eller skriva in text online. En svarsmall kan tillhandahållas. Svaren måste bedömas manuellt.';
$string['pluginnameadding'] = 'Lägg till en uppsatsfråga';
$string['pluginnameediting'] = 'Redigera en uppsatsfråga';
$string['pluginnamesummary'] = 'Tillåter ett svar i form av en filuppladdning och/eller onlinetext. Detta måste sedan betygsättas manuellt.';
$string['privacy:metadata'] = 'Pluginmodulen för frågetypen Uppsats gör det möjligt för frågeförfattare att ange standardalternativ som användarinställningar.';
$string['privacy:preference:attachments'] = 'Antal tillåtna bifogade filer.';
$string['privacy:preference:attachmentsrequired'] = 'Obligatoriskt antal bifogade filer.';
$string['privacy:preference:defaultmark'] = 'Standardpoängen för en viss fråga.';
$string['privacy:preference:maxbytes'] = 'Maximal filstorlek.';
$string['privacy:preference:responsefieldlines'] = 'Antal rader som anger storleken på inmatningsrutan (textområde).';
$string['privacy:preference:responseformat'] = 'Vilket svarsformat ska användas (HTML-redigerare, ren text, etc.)?';
$string['privacy:preference:responserequired'] = 'Om deltagaren måste ange text eller om textinmatningen är valfri.';
$string['responsefieldlines'] = 'Inmatningsrutans storlek';
$string['responseformat'] = 'Svarsformat';
$string['responseisrequired'] = 'Kräv att studenten anger text';
$string['responsenotrequired'] = 'Svar är valfritt!';
$string['responseoptions'] = 'Svarsalternativ';
$string['responserequired'] = 'Text obligatorisk';
$string['responsetemplate'] = 'Svarsmall';
$string['responsetemplate_help'] = 'All text som anges här kommer att visas i rutan för svarsinmatning när ett nytt försök på frågan startar.';
$string['responsetemplateheader'] = 'Svarsmall';
$string['wordcount'] = 'Antal ord: {$a}';
$string['wordcounttoofew'] = 'Antal ord: {$a->count}, mindre än det nödvändiga antalet ord på {$a->limit} ord.';
$string['wordcounttoomuch'] = 'Antal ord: {$a->count}, mer än antalet tillåtna ord som är {$a->limit} ord.';
