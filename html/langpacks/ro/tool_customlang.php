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
 * Strings for component 'tool_customlang', language 'ro', version '4.1'.
 *
 * @package     tool_customlang
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkin'] = 'Salvați șirurile în pachetul de limbă';
$string['checkout'] = 'Deschideți pachetul de limbă pentru editare';
$string['checkoutdone'] = 'Pachet de limbă încărcat';
$string['checkoutinprogress'] = 'Se încarcă pachetul de limbă';
$string['cliexportfileexists'] = 'Fișierul pentru {$a->lang} există deja, omitând. Dacă doriți să suprascrieți, adăugați opțiunea --override = true.';
$string['cliexportfilenotfoundforcomponent'] = 'Fișierul {$a->filepath} nu a fost găsit pentru limba {$a->lang}. Omiterea acestui fișier.';
$string['cliexportheading'] = 'Începând să exportați fișiere de limbă.';
$string['cliexportnofilefoundforlang'] = 'Nu a fost găsit niciun fișier de exportat. Se omite exportul pentru această limbă.';
$string['cliexportstartexport'] = 'Limba de export {$a}';
$string['cliexportzipdone'] = 'Zip creat: {$a}';
$string['cliexportzipfail'] = 'Nu se poate crea zip {$a}';
$string['clifiles'] = 'Fișiere de importat în {$a}';
$string['cliimporting'] = 'Import șir de fișiere (modul {$a})';
$string['climissingfiles'] = 'Lipsesc fișiere valide';
$string['climissinglang'] = 'Limba lipsește';
$string['climissingmode'] = 'Mod lipsă sau care nu este invalid';
$string['climissingsource'] = 'Fișier sau dosar lipsă';
$string['clinolog'] = 'Nimic de importat în {$a}';
$string['confirmcheckin'] = 'Sunteți pe cale să salvați modificările pachetului de limbi locale. Aceasta va exporta șirurile personalizate de la traducător în directorul de date al site-ului dvs. și site-ul dvs. va începe să utilizeze șirurile modificate. Apăsați „Continuați” pentru a continua cu salvarea.';
$string['customlang:edit'] = 'Editați traducerea locală';
$string['customlang:export'] = 'Exportați traducerea locală';
$string['customlang:view'] = 'Vedeți traducerea locală';
$string['editlangpack'] = 'Editează pachetul de limbă';
$string['export'] = 'Exportați șiruri personalizate';
$string['exportfilter'] = 'Selectați componentele de exportat';
$string['exportzipfilename'] = 'customlang-export-{$a->lang}.zip';
$string['filter'] = 'Filtrează șirurile';
$string['filtercomponent'] = 'Afișați șirurile acestor componente';
$string['filtercustomized'] = 'Numai șiruri personalizate';
$string['filtermodified'] = 'Modificat numai în această sesiune';
$string['filteronlyhelps'] = 'Numai șiruri de ajutor';
$string['filtershowstrings'] = 'Afișați șirurile';
$string['filterstringid'] = 'Identificator șir';
$string['filtersubstring'] = 'Numai șiruri care conțin';
$string['headingcomponent'] = 'Componenta';
$string['headinglocal'] = 'Personalizare locală';
$string['headingstandard'] = 'Text standard';
$string['headingstringid'] = 'Şir';
$string['import'] = 'Importați șiruri personalizate';
$string['import_all'] = 'Creați sau actualizați toate șirurile din componentă (componente)';
$string['import_mode'] = 'Modul de import';
$string['import_new'] = 'Creați numai șiruri fără personalizare locală';
$string['import_update'] = 'Actualizați numai șirurile cu personalizare locală';
$string['importfile'] = 'Fișier de import';
$string['langpack'] = 'Componente lingvistice';
$string['markinguptodate'] = 'Marcarea personalizării ca fiind actualizată';
$string['markinguptodate_help'] = 'Traducerea personalizată poate fi învechită dacă originalul în limba engleză sau traducerea master s-a modificat de când șirul a fost personalizat pe site-ul dvs. Examinați traducerea personalizată. Dacă îl găsiți actualizat, faceți clic pe caseta de selectare. Editați-l altfel.';
$string['markuptodate'] = 'marcați ca actualizat';
$string['modifiedno'] = 'Nu există șiruri modificate de salvat.';
$string['modifiednum'] = 'Există {$a} șiruri modificate. Doriți să salvați aceste modificări în pachetul de limbă local?';
$string['nolocallang'] = 'Nu s-au găsit șiruri locale.';
$string['nostringsfound'] = 'Nu s-au găsit șiruri, vă rugăm să modificați setările filtrului';
$string['notice_ignorenew'] = 'Ignorând șirul {$a->component} / {$a->stringid} deoarece nu este personalizat.';
$string['notice_ignoreupdate'] = 'Ignorând șirul {$a->component} / {$a->stringid} deoarece este deja definit.';
$string['notice_inexitentstring'] = 'Șirul {$a->component} / {$a->stringid} nu a fost găsit.';
$string['notice_missingcomponent'] = 'Componenta lipsă {$a->component}.';
$string['notice_success'] = 'Șirul {$a->component} / {$a->stringid} actualizat cu succes.';
$string['placeholder'] = 'Substituenți';
$string['placeholder_help'] = 'Substituenții sunt declarații speciale precum „{$a}“ sau „{$a->something}” din șir. Acestea sunt înlocuite cu o valoare când șirul este de fapt tipărit.

Este important să le copiați exact așa cum sunt în șirul original. Nu le traduceți și nu schimbați orientarea lor de la stânga la dreapta.';
$string['placeholderwarning'] = 'șirul conține un substituent';
$string['pluginname'] = 'Personalizarea limbii';
$string['privacy:metadata'] = 'Plugin-ul de personalizare a limbii nu stochează date personale.';
$string['savecheckin'] = 'Salvează modificările pachetului de limbă';
$string['savecontinue'] = 'Aplicați modificările și continuați editarea';
