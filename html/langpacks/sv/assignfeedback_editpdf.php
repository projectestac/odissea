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
 * Strings for component 'assignfeedback_editpdf', language 'sv', version '4.1'.
 *
 * @package     assignfeedback_editpdf
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtoquicklist'] = 'Lägg till favoriter';
$string['annotationcolour'] = 'Markeringsfärg';
$string['black'] = 'Svart';
$string['blue'] = 'Blå';
$string['cannotopenpdf'] = 'Kan inte öppna pdf. Filen möjligtvis defekt eller i fel format';
$string['clear'] = 'Klar';
$string['colourpicker'] = 'Färgväljaren';
$string['command'] = 'Kommando:';
$string['comment'] = 'Kommentarer';
$string['commentcolour'] = 'Kommentarfärg';
$string['commentcontextmenu'] = 'Kommentera snabbmenyn';
$string['commentindex'] = 'Index för kommentar';
$string['commentlabel'] = '{$a->pnum}.{$a->cnum}';
$string['couldnotsavepage'] = 'Det gick inte att spara sidan {$a}';
$string['currentstamp'] = 'Stämpel';
$string['default'] = 'Aktiverat som standard';
$string['default_help'] = 'Om detta aktiveras, kommer denna återkopplingsmetod vara aktiverad som standard för alla nya uppgifter';
$string['deleteannotation'] = 'Radera';
$string['deletecomment'] = 'Radera kommentar';
$string['deletefeedback'] = 'Radera återkopplings PDF';
$string['downloadablefilename'] = 'feedback.pdf';
$string['downloadfeedback'] = 'Ladda ner återkopplings PDF';
$string['draftchangessaved'] = 'Utkast sparade';
$string['drag'] = 'Dra';
$string['editpdf'] = 'Kommentera PDF';
$string['editpdf_help'] = 'Kommentera studenters inlämnade arbeten direkt i webbläsaren och skapa en redigerad nedladdningsbar PDF.';
$string['enabled'] = 'Kommentera PDF';
$string['enabled_help'] = 'Om aktiverad, kommer läraren att kunna skapa kommenterade PDF-filer när bedömning sker. Detta gör det möjligt för läraren att lägga till kommentarer, anteckningar och stämplar direkt till studentarbetet. Kommentarerna görs direkt i webbläsaren och utan att extra programvara behövs.';
$string['errorgenerateimage'] = 'Fel när  bild genereras med ghostscript, felsökningsinformation: {$a}';
$string['errorpdfpage'] = 'Det uppstod ett fel när denna sida skulle skapas';
$string['expcolcomments'] = 'Fäll ut/fäll ihop alla kommentarer';
$string['filter'] = 'Filter kommentarer ...';
$string['generatefeedback'] = 'Skapa återkopplings PDF';
$string['generatingpdf'] = 'Skapar PDF ...';
$string['gotopage'] = 'Gå till sidan';
$string['green'] = 'Grön';
$string['gsimage'] = 'Testbild för Ghostscript';
$string['highlight'] = 'Markera';
$string['jsrequired'] = 'JavaScript krävs för att kommentera en PDF. Vänligen aktivera JavaScript i din webbläsare för att använda den här funktionen';
$string['launcheditor'] = 'Starta PDF editor ...';
$string['line'] = 'Linje';
$string['loadingeditor'] = 'Laddar PDF editor';
$string['navigatenext'] = 'Nästa sida (Alt/Shift-Alt/Ctrl-Option + {$a})';
$string['navigateprevious'] = 'Föregående sida (Alt/Shift-Alt/Ctrl-Option + {$a})';
$string['output'] = 'Utdata:';
$string['oval'] = 'Oval';
$string['pagenumber'] = 'Sida {$a}';
$string['pagexofy'] = 'Sida {$a->page} av {$a->total}';
$string['partialwarning'] = 'Några filer i denna inlämningsuppgift behöver laddas ned för åtkomst.';
$string['pathtogspathdesc'] = 'Observera att Kommentera PDF kräver att sökvägen till ghostscript angivits i {$a}.';
$string['pen'] = 'Penna';
$string['pluginname'] = 'Kommentera PDF';
$string['preparesubmissionsforannotation'] = 'Förbered inlämningar för annotering';
$string['privacy:metadata:colourpurpose'] = 'Kommentarens eller annoteringens färg';
$string['privacy:metadata:conversionpurpose'] = 'Filerna konverteras till PDF för att möjliggöra annotering';
$string['privacy:metadata:filepurpose'] = 'Lagrar en annoterad PDF med återkoppling till användaren';
$string['privacy:metadata:rawtextpurpose'] = '';
$string['privacy:metadata:tablepurpose'] = 'Lagrar kommentarer från lärarens snabblista';
$string['privacy:metadata:userid'] = 'Användar-ID:t';
$string['privacy:path'] = 'PDF-återkoppling';
$string['rectangle'] = 'Rektangel';
$string['red'] = 'Röd';
$string['result'] = 'Resultat:';
$string['rotateleft'] = 'Rotera 90 grader åt vänster';
$string['rotateright'] = 'Rotera 90 grader åt höger';
$string['searchcomments'] = 'Sök kommentarer';
$string['select'] = 'Välj';
$string['stamp'] = 'Stämpel';
$string['stamppicker'] = 'Stämpelväljare';
$string['stamps'] = 'Stämplar';
$string['stampsdesc'] = 'Stämplar måste vara bildfiler (rekommenderas storlek: 40x40). Dessa bilder kan användas med stämpelverktyget för att kommentera PDF.';
$string['test_doesnotexist'] = 'Ghostscript sökvägen pekar på en icke-existerande fil';
$string['test_empty'] = 'Ghostscript sökvägen är tom - ange rätt sökväg';
$string['test_isdir'] = 'Ghostscript sökväg pekar till en mapp, var vänlig och inkludera det ghostscript-programmet i sökvägen du anger';
$string['test_notestfile'] = 'Test PDF saknas';
$string['test_notexecutable'] = 'Ghostscript pekar på en fil som inte är körbar';
$string['test_ok'] = 'Ghostscript sökvägen verkar vara OK - kontrollera att du kan se meddelandet i bilden nedan';
$string['testgs'] = 'Testa ghostscript sökväg';
$string['tool'] = 'Verktyg';
$string['toolbarbutton'] = '{$a->tool} {$a->shortcut}';
$string['viewfeedbackonline'] = 'Visa kommenterad PDF ...';
$string['white'] = 'Vit';
$string['yellow'] = 'Gul';
