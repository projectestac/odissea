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
 * Strings for component 'assignfeedback_file', language 'sv', version '4.1'.
 *
 * @package     assignfeedback_file
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['batchoperationconfirmuploadfiles'] = 'Ladda upp en eller flera återkopplingsfiler för alla valda användare?';
$string['batchuploadfiles'] = 'Ladda upp återkopplingsfiler för flera användare';
$string['batchuploadfilesforusers'] = 'Skicka återkopplingsfiler till {$a} vald(a) användare.';
$string['configmaxbytes'] = 'Maximal filstorlek';
$string['confirmuploadzip'] = 'Bekräfta uppladdning av zipfil';
$string['countfiles'] = '{$a} filer';
$string['default'] = 'Aktiverat som standard';
$string['default_help'] = 'Om valt kommer denna återkopplingsmetod att vara aktiverad som standard för alla nya uppgifter.';
$string['enabled'] = 'Fil med återkoppling/feedback';
$string['enabled_help'] = 'Om detta är aktiverat kan läraren ladda upp filer med återkoppling vid betygsättning av inlämnade uppgifter. Dessa filer kan vara, men är inte begränsade till, betygsatta elevinlämningar, dokument med kommentarer eller intalade återkopplingar.';
$string['feedbackfileadded'] = 'Ny återkopplingsfil "{$a->filename}" för elev "{$a->student}"';
$string['feedbackfileupdated'] = 'Ändrad återkopplingsfil "{$a->filename}" för elev "{$a->student}"';
$string['feedbackzip'] = 'Ziparkiv med återkopplingsfiler';
$string['feedbackzip_help'] = 'En zip-fil som innehåller en lista med feedbackfiler för en eller flera elever. Feedbackfiler kommer att tilldelas studenter baserat på användar-ID. ID:t bör vara den andra delen av varje filnamn omedelbart efter användarens fullständiga namn. Denna namnkonvention används när du laddar ner inlämningar så att du kan ladda ner alla inlagor, lägga till kommentarer till några filer, sedan åter zippa ihop och ladda upp alla filer. Filer utan ändringar kommer att ignoreras.';
$string['file'] = 'Filer för feedback/återkoppling';
$string['filesadded'] = 'Tillagda återkopplingsfiler: {$a}';
$string['filesupdated'] = 'Uppdaterade återkopplingsfiler: {$a}';
$string['importfeedbackfiles'] = 'Importera återkopplingsfil(er)';
$string['maxbytes'] = 'Maximal filstorlek';
$string['maxfiles'] = 'Maximalt antal uppladdade filer';
$string['maximumsize'] = 'Maximal filstorlek';
$string['moreusers'] = '{$a} mer...';
$string['nochanges'] = 'Inga ändringar';
$string['pluginname'] = 'Filåterkoppling';
$string['privacy:metadata:filepurpose'] = 'Återkopplingsfiler från läraren till deltagaren';
$string['privacy:path'] = 'Återkopplingsfiler';
$string['selectedusers'] = 'Utvalda användare';
$string['uploadfiles'] = 'Skicka återkopplingsfiler';
$string['uploadzip'] = 'Ladda upp flera återkopplingsfiler i ett ziparkiv';
$string['uploadzipsummary'] = 'Återkopplingsfiler importerade från ett ziparkiv';
$string['userswithnewfeedback'] = 'Användare med uppdaterad återkoppling: {$a}';
