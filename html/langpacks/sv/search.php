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
 * Strings for component 'search', language 'sv', version '4.1'.
 *
 * @package     search
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advancedsearch'] = 'Avancerad sökning';
$string['all'] = 'Alla';
$string['allareas'] = 'Alla områden';
$string['allcourses'] = 'Alla kurser';
$string['allusers'] = 'Alla användare';
$string['author'] = 'Författare';
$string['authorname'] = 'Namn på författare';
$string['back'] = 'Tillbaka';
$string['beadmin'] = 'Du behöver vara administratör för att använda den här sidan.';
$string['checkdb'] = 'Kontrollera databas';
$string['checkdbadvice'] = 'Kontrollera databasen för att se om det finns några problem.';
$string['checkdir'] = 'Kontrollera sökväg';
$string['checkdiradvice'] = 'Säkerställ att datakatalogen finns och är skrivbar.';
$string['commenton'] = 'Kommentar till';
$string['confirm_delete'] = 'Vill du ta bort indexet för {$a}? Tills sökområdet är indexerat får användarna inga sökresultat från det här området.';
$string['confirm_deleteall'] = 'Vill du ta bort allt indexerat innehåll nu? Tills webbplatsen indexeras igen får användarna inga sökresultat.';
$string['confirm_indexall'] = 'Vill du uppdatera indexerat innehåll nu? Om en stor mängd innehåll behöver indexeras kan det ta lång tid. För liveservrar bör du normalt överlåta indexeringen till den schemalagda aktiviteten "Global sökindexering".';
$string['confirm_reindexall'] = 'Vill du indexera om allt webbplatsinnehåll nu? Om webbplatsen innehåller en stor mängd innehåll tar det lång tid och användarna kanske inte får fullständiga sökresultat innan indexeringen är klar.';
$string['content:courserole'] = '{$a->role} i {$a->course}';
$string['core-all'] = 'Allt';
$string['core-course-content'] = 'Kursinnehåll';
$string['core-courses'] = 'Kurser';
$string['core-other'] = 'Övrigt';
$string['core-users'] = 'Användare';
$string['createanindex'] = 'Skapa ett index';
$string['createdon'] = 'Skapat den';
$string['database'] = 'Databas';
$string['databasestate'] = 'Indexerar tillståndet för databas';
$string['datadirectory'] = 'Datakatalog';
$string['deleteindex'] = 'Ta bort index {$a}';
$string['deletionsinindex'] = 'Borttagningar i index';
$string['docmodifiedon'] = 'Senast ändrat den {$a}';
$string['doctype'] = 'Dokumenttyp';
$string['doctypenotsupported'] = 'Den angivna dokumenttypen stöds ännu inte';
$string['documents'] = 'dokument';
$string['documentsfor'] = 'Dokument för';
$string['documentsindatabase'] = 'Dokument i databasen';
$string['documentsinindex'] = 'Dokument i index';
$string['duration'] = 'Varaktighet';
$string['emptydatabaseerror'] = 'Det finns ingen databastabell eller så innehåller den inga poster för index.';
$string['enginenotfound'] = 'Sökmotor {$a} hittades inte.';
$string['enginenotinstalled'] = 'Sökmotor {$a} är inte installerad.';
$string['enginenotselected'] = 'Du har inte valt någon sökmotor.';
$string['engineserverstatus'] = 'Sökmotorn är inte tillgänglig. Vänligen kontakta administratören.';
$string['enteryoursearchquery'] = 'Ange sökuttryck';
$string['error_indexing'] = 'Ett fel inträffade under indexeringen';
$string['errorareanotavailable'] = 'Sökområdet {$a} är inte tillgängligt.';
$string['errors'] = 'Fel';
$string['everywhere'] = 'Överallt där du är behörig';
$string['filesinindexdirectory'] = 'Filer i indexkatalogen';
$string['filterheader'] = 'Filter';
$string['fromtime'] = 'Ändrad efter';
$string['globalsearch'] = 'Global sökning';
$string['globalsearchdisabled'] = 'Global sökning är inte aktiverat';
$string['gradualreindex'] = 'Stegvis omidexering {$a}';
$string['gradualreindex_confirm'] = 'Är du säker på att du vill omindexera {$a}? Detta tar ett tag. Nuvarande sökinformation är tillgänglig under indexeringen.';
$string['gradualreindex_queued'] = 'En omindexering av {$a->name} ({$a->count} kontext) har begärts. Indexeringen utförs av bakgrundsjobbet "Global sökindexering".';
$string['incourse'] = 'i kursen {$a}';
$string['index'] = 'Index';
$string['indexwhendisabledfullnotice'] = 'Indexering är för närvarande inte tillåten när sökningen är inaktiverad. För att aktivera detta, se inställningen <a href="{$a->url}">Indexera när inaktiv</a>.';
$string['indexwhendisabledshortnotice'] = 'Indexering är inte tillgängligt.';
$string['invalidindexerror'] = 'Indexkatalogen innehåller antingen ett ogiltigt index eller ingenting alls.';
$string['ittook'] = 'Det tog';
$string['matchingfile'] = 'Matchad från fil <span class="filename">{$a}</span>';
$string['matchingfiles'] = 'Matchad från filer:';
$string['mycoursesonly'] = 'Enbart mina kurser';
$string['next'] = 'Nästa';
$string['noindexmessage'] = 'Admin: Det verkar inte att finnas något sökindex. Vänligen';
$string['noresults'] = 'Inga resultat';
$string['normalsearch'] = 'Normal sökning';
$string['notitle'] = 'Ingen titel';
$string['openedon'] = 'öppnad den';
$string['optimize'] = 'Optimera';
$string['order'] = 'Resultatordning';
$string['order_location'] = 'Prioritera resultat relaterade till {$a}';
$string['order_relevance'] = 'Relevanta överst';
$string['priority'] = 'Prioritet';
$string['priority_normal'] = 'Normal';
$string['priority_reindexing'] = 'Omindexerar';
$string['privacy:metadata'] = 'Sök-undersystemet lagrar ingen personinformation.';
$string['progress'] = 'Förlopp';
$string['queryerror'] = 'Frågan du angav kunde inte tolkas av sökmotorn: {$a}';
$string['queueheading'] = 'Ytterligare indexeringskö ({$a}-objekt)';
$string['resultsreturnedfor'] = 'resultat returnerade för';
$string['runindexer'] = 'Kör indexeraren (real)';
$string['runindexertest'] = 'Kör test av indexeraren';
$string['schemanotupdated'] = 'Sökschemat är för gammalt.';
$string['schemaversionunknown'] = 'Sökmotorn känner inte till den aktuella schemaversionen.';
$string['score'] = 'Resultat';
$string['search'] = 'Sök';
$string['search:course'] = 'Kurser';
$string['search:course_teacher'] = 'Lärare';
$string['search:customfield'] = 'Anpassade kursfält';
$string['search:message_received'] = 'Meddelanden - mottagna';
$string['search:message_sent'] = 'Meddelanden - skickade';
$string['search:mycourse'] = 'Mina kurser';
$string['search:section'] = 'Kursavsnitt';
$string['search:user'] = 'Användare';
$string['searcharea'] = 'Sökområde';
$string['searchareacategories'] = 'Sökområdeskategorier';
$string['searching'] = 'Söker i...';
$string['searchnotpermitted'] = 'Du är inte tillåten att göra en sökning';
$string['searchsetupdescription'] = 'Dessa steg hjälper dig konfigurera den globala sökningen i Moodle.';
$string['searchwithin'] = 'Sök inom';
$string['seconds'] = 'sekunder';
$string['solutions'] = 'Lösningar';
$string['statistics'] = 'Statistik';
$string['step'] = 'Steg';
$string['thesewordshelpimproverank'] = 'De här orden hjälper till att förbättra rankingen';
$string['thesewordsmustappear'] = 'De här orden måste visa sig';
$string['thesewordsmustnotappear'] = 'De här orden får inte visa sig';
$string['title'] = 'Titel';
$string['tofetchtheseresults'] = 'för att hämta dessa resultat';
$string['topresults'] = 'Toppträffar';
$string['totalsize'] = 'Totalstorlek';
$string['totime'] = 'Tidigare ändrad';
$string['type'] = 'Typ';
$string['uncompleteindexingerror'] = 'Indexeringen avslutades inte fullständigt. Vänligen starta om den.';
$string['versiontoolow'] = 'Global sökning kräver PHP version 5.0.0 eller senare';
$string['viewresultincontext'] = 'Visa resultatet i sitt kontext';
$string['wordsintitle'] = 'Ord i titel';
