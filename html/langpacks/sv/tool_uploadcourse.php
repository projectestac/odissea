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
 * Strings for component 'tool_uploadcourse', language 'sv', branch 'MOODLE_38_STABLE'
 *
 * @package   tool_uploadcourse
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'Tillåt borttagningar';
$string['allowdeletes_help'] = 'Anger huruvida det är tillåtet att ta bort ett fält, eller ej.';
$string['allowrenames'] = 'Tillåt namnbyten';
$string['allowrenames_help'] = 'Anger huruvida det är tillåtet att byta namn på ett fält, eller ej.';
$string['allowresets'] = 'Tillåt återställningar';
$string['allowresets_help'] = 'Anger huruvida det är tillåtet att återställa ett fält, eller ej.';
$string['cannotdeletecoursenotexist'] = 'Kan inte ta bort en kurs som inte finns';
$string['cannotforcelang'] = 'Ingen behörighet att tvinga språk för denna kurs';
$string['cannotgenerateshortnameupdatemode'] = 'Kan inte generera ett kortnamn när uppdateringar är tillåtna';
$string['cannotreadbackupfile'] = 'Kan inte läsa filen med säkerhetskopian';
$string['cannotrenamecoursenotexist'] = 'Kan inte döpa om en kurs som inte finns';
$string['cannotrenameidnumberconflict'] = 'Kan inte byta namn på kursen; ID-numret står i konflikt med en befintlig kurs';
$string['cannotrenameshortnamealreadyinuse'] = 'Kan inte döpa om kursen; kortnamnet används redan';
$string['cannotupdatefrontpage'] = 'Det är inte tillåtet att ändra framsidan';
$string['canonlyrenameinupdatemode'] = 'Kan endast döpa om en kurs när uppdateringar tillåts';
$string['canonlyresetcourseinupdatemode'] = 'Kan bara återställa en kurs i uppdateringsläge';
$string['couldnotresolvecatgorybyid'] = 'Kunde inte hitta kategorin via ID';
$string['couldnotresolvecatgorybyidnumber'] = 'Kunde inte hitta kategorin via ID-numret';
$string['couldnotresolvecatgorybypath'] = 'Kunde inte hitta kategorin via sökvägen';
$string['coursecreated'] = 'Kurs skapad';
$string['coursedeleted'] = 'Kurs borttagen';
$string['coursedeletionnotallowed'] = 'Det är inte tillåtet att ta bort kursen';
$string['coursedoesnotexistandcreatenotallowed'] = 'Kursen finns inte och det är inte tillåtet att skapa en kurs';
$string['courseexistsanduploadnotallowed'] = 'Kursen finns redan och uppdatering av kursen är inte tillåten';
$string['coursefile'] = 'Fil';
$string['coursefile_help'] = 'Filen måste vara en CSV-fil';
$string['courseidnumberincremented'] = 'Kurs-ID uppräknat {$a->from} -> {$a->to}';
$string['courseprocess'] = 'Kursprocess';
$string['courserenamed'] = 'Kurs omdöpt';
$string['courserenamingnotallowed'] = 'Omdöpning av kurs är inte tillåten';
$string['coursereset'] = 'Återställning av kurs';
$string['courseresetnotallowed'] = 'Det är inte tillåtet att återställa kurs';
$string['courserestored'] = 'Kursen återställd';
$string['coursescreated'] = 'Skapad kurs: {$a}';
$string['coursesdeleted'] = 'Borttagna kurser: {$a}';
$string['courseserrors'] = 'Kursfel: {$a}';
$string['courseshortnamegenerated'] = 'Genererat kortnamn för kurs: {$a}';
$string['courseshortnameincremented'] = 'Kortnamn för kurs uppräknat {$a->from} -> {$a->to}';
$string['coursestotal'] = 'Totalt för kurser: {$a}';
$string['coursesupdated'] = 'Uppdaterade kurser: {$a}';
$string['coursetemplatename'] = 'Återställ från denna kurs efter uppladdning';
$string['coursetemplatename_help'] = 'Ange ett befintligt kortnamn att använda som mall för skapandet av alla kurser.';
$string['coursetorestorefromdoesnotexist'] = 'Kursen att återställa från finns inte';
$string['courseupdated'] = 'Kurs uppdaterad';
$string['createall'] = 'Skapa alla, räkna upp kortnamnet vid behov';
$string['createnew'] = 'Skapa enbart nya kurser, ignorera befintliga';
$string['createorupdate'] = 'Skapa nya kurser eller uppdatera befintliga';
$string['csvdelimiter'] = 'CSV-avgränsare';
$string['csvdelimiter_help'] = 'CSV-avgränsare som används i CSV-filen.';
$string['csvfileerror'] = 'Det är problem med CSV-filens format. Vänligen kontrollera att antal rubriker och kolumner stämmer överens samt att filens CSV-avgränsare och teckenkodning är korrekt: {$a}';
$string['csvline'] = 'Rad';
$string['defaultvalues'] = 'Standardvärden för kurs';
$string['encoding'] = 'Teckenkodning';
$string['encoding_help'] = 'CSV-filens teckenkodning.';
$string['errorwhiledeletingcourse'] = 'Ett fel inträffade då kursen togs bort';
$string['errorwhilerestoringcourse'] = 'Ett fel inträffade då kursen återställdes';
$string['generatedshortnamealreadyinuse'] = 'Det genererade kortnamnet används redan';
$string['generatedshortnameinvalid'] = 'Det genererade kortnamnet är ogiltigt';
$string['id'] = 'ID';
$string['idnumberalreadyinuse'] = 'ID-numret används redan av en kurs';
$string['importoptions'] = 'Alternativ för import';
$string['invalidbackupfile'] = 'Ogiltig fil för säkerhetskopia';
$string['invalidcourseformat'] = 'Ogiltigt kursformat';
$string['invalidcsvfile'] = 'Ogiltig CSV-fil';
$string['invalidencoding'] = 'Ogiltig teckenkodning';
$string['invalideupdatemode'] = 'Ogiltig uppdateringsmetod vald';
$string['invalidfullnametoolong'] = 'Antalet tecken i fältet för fullständigt namn är begränsat till {$a}';
$string['invalidmode'] = 'Ogiltigt läge valt';
$string['invalidroles'] = 'Ogiltiga rollnamn: {$a}';
$string['invalidshortname'] = 'Ogiltigt kortnamn';
$string['invalidshortnametoolong'] = 'Antal tecken i fältet för kortnamn är begränsat till {$a}';
$string['invalidvisibilitymode'] = 'Ogiltigt läge för synlighet';
$string['missingmandatoryfields'] = 'Saknade värden i obligatoriska fält: {$a}';
$string['missingshortnamenotemplate'] = 'Kortnamn saknas och mall för kortnamn inte vald';
$string['mode'] = 'Uppladningsläge';
$string['mode_help'] = 'Detta tillåter att du kan ange om kurser kan skapas och/eller uppdateras.';
$string['nochanges'] = 'Inga förändringar';
$string['pluginname'] = 'Uppladning av kurs';
$string['preview'] = 'Förhandsgranskning';
$string['privacy:metadata'] = 'Insticksmodulen för uppladdning av kurser sparar ingen personlig information.';
$string['reset'] = 'Återställ kurs efter uppladdning';
$string['reset_help'] = 'Anger huruvida kursen ska återställas efter att den skapats/uppdaterats.';
$string['restoreafterimport'] = 'Återställ efter import';
$string['result'] = 'Resultat';
$string['rowpreviewnum'] = 'Antal rader vid förhandsgranskning';
$string['rowpreviewnum_help'] = 'Antal rader från CSV-filen som ska visas på sidan för förhandsgranskning. Detta alternativ används för att begränsa storleken på sidan för förhandsgranskning.';
$string['shortnametemplate'] = 'Mall för generering av kortnamn';
$string['shortnametemplate_help'] = 'Kursens kortnamn syns i navigeringsmenyerna. Du kan använda mallsyntax (%f = fullname, %i = idnumber) eller ange ett startvärde som sedan räknas upp.';
$string['templatefile'] = 'Återställ från denna fil efter uppladdning';
$string['templatefile_help'] = 'Välj en fil att använda som mall för alla kurser som skapas.';
$string['unknownimportmode'] = 'Okänt importläge';
$string['updatemissing'] = 'Fyll i de saknade värdena från CSV-data samt standardvärden';
$string['updatemode'] = 'Läge för uppdatering';
$string['updatemodedoessettonothing'] = 'Uppdateringsläget tillåter inga uppdateringar';
$string['updatemode_help'] = 'Om du tillåter kursuppdateringar behöver du även specificera för uppdateringsverktyget vad kurserna ska uppdateras med.';
$string['updateonly'] = 'Uppdatera enbart befintliga kurser';
$string['updatewithdataonly'] = 'Uppdatera enbart med data från CSV-filen';
$string['updatewithdataordefaults'] = 'Uppdatera med data från CSV-filen samt med standardvärden för kursen.';
$string['uploadcourses'] = 'Ladda upp kurser';
$string['uploadcourses_help'] = 'Kurser kan laddas upp med hjälp av textfiler. Filformatet ska vara enligt följande:

* En rad får enbart innehålla en (1) post
* En enskild post består av en serie data avgränsad av komma (eller annan avgränsare)
* Den första posten (raden) innehåller en lista med fältnamn som anger formatet för resten av filen
* Obligatoriska fält är: Kortnamn, Fullständigt namn samt Kategori';
$string['uploadcoursespreview'] = 'Förhandsgranskning av kurs';
$string['uploadcoursesresult'] = 'Resultat av kursuppladdningen';
