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
 * Strings for component 'tool_filetypes', language 'ro', version '4.5'.
 *
 * @package     tool_filetypes
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfiletypes'] = 'Adăugați un nou tip de fișier';
$string['corestring'] = 'Șir de limbă alternativă';
$string['corestring_help'] = 'Această setare poate fi utilizată pentru a selecta un șir de limbă diferit din fișierul de limbă mimetypes.php. În general, ar trebui lăsat necompletat. Pentru tipurile personalizate, utilizați câmpul de descriere.';
$string['defaulticon'] = 'Pictogramă implicită pentru tipul MIME';
$string['defaulticon_help'] = 'Dacă există mai multe extensii de fișiere cu același tip MIME, selectați această opțiune pentru una dintre extensii, astfel încât pictograma sa să fie utilizată la determinarea unei pictograme din tipul MIME.';
$string['delete_confirmation'] = 'Sunteți absolut sigur că doriți să eliminați <strong>. {$a} </strong>?';
$string['deletea'] = 'Ștergeți {$a}';
$string['deletefiletypes'] = 'Ștergeți un tip de fișier';
$string['description'] = 'Descriere personalizată';
$string['description_help'] = 'Descriere simplă a tipului de fișier, de ex. „Carte electronică Kindle”. Dacă site-ul dvs. acceptă mai multe limbi și folosește filtrul în mai multe limbi, puteți introduce etichete în mai multe limbi în acest câmp pentru a furniza o descriere în diferite limbi.';
$string['descriptiontype'] = 'Tipul de descriere';
$string['descriptiontype_custom'] = 'Descriere personalizată specificată în acest formular';
$string['descriptiontype_default'] = 'Implicit (tip MIME sau șir de limbă corespunzător, dacă este disponibil)';
$string['descriptiontype_help'] = 'Există trei modalități posibile de a specifica o descriere.

* Comportamentul implicit utilizează tipul MIME. Dacă există un șir de limbă în mimetypes.php corespunzător acelui tip MIME, acesta va fi folosit; în caz contrar, tipul MIME în sine va fi afișat utilizatorilor.
* Puteți specifica o descriere personalizată în acest formular.
* Puteți specifica numele unui șir de limbă în mimetypes.php de utilizat în locul tipului MIME.';
$string['descriptiontype_lang'] = 'Șir de limbă alternativă (din mimetypes.php)';
$string['displaydescription'] = 'Descriere';
$string['editfiletypes'] = 'Editați un tip de fișier existent';
$string['emptylist'] = 'Nu există tipuri de fișiere definite.';
$string['error_addentry'] = 'Extensia tipului de fișier, descrierea, tipul MIME și pictograma nu trebuie să conțină flux de linii și caractere punct și virgulă.';
$string['error_defaulticon'] = 'O altă extensie de fișier cu același tip MIME este deja marcată ca pictogramă implicită.';
$string['error_extension'] = 'Extensia de tip fișier <strong> {$a} </strong> există deja sau este nevalidă. Extensiile de fișiere trebuie să fie unice și să nu conțină caractere speciale.';
$string['error_notfound'] = 'Tipul de fișier cu extensia {$a} nu poate fi găsit.';
$string['extension'] = 'Extensie';
$string['extension_help'] = 'Extensie nume de fișier fără punct, de ex. „mobi”';
$string['groups'] = 'Tip grupuri';
$string['groups_help'] = 'Lista opțională a grupurilor de tipuri de fișiere cărora le aparține acest tip. Acestea sunt categorii generice, cum ar fi „document” și „imagine”.';
$string['icon'] = 'Pictogramă fișier';
$string['icon_help'] = 'Numele fișierului pictogramă.

Lista de pictograme este preluată din directorul / pix / f din interiorul instalării Moodle. Dacă este necesar, puteți adăuga pictograme personalizate în acest folder.';
$string['mimetype'] = 'Tip MIME';
$string['mimetype_help'] = 'Tipul MIME asociat acestui tip de fișier, de ex. „application/x-mobipocket-ebook”';
$string['pluginname'] = 'Tipuri de fisiere';
$string['privacy:metadata'] = 'Pluginul Tipuri de fișiere nu stochează date personale.';
$string['revert'] = 'Restabiliți {$a} la valorile prestabilite ale Moodle';
$string['revert_confirmation'] = 'Sigur doriți să restaurați <strong>. {$a} </strong> la valorile prestabilite ale Moodle, ignorând modificările dvs.?';
$string['revertfiletype'] = 'Restabiliți un tip de fișier';
$string['source'] = 'Tip';
$string['source_custom'] = 'Personalizat';
$string['source_deleted'] = 'Șters';
$string['source_modified'] = 'Modificat';
$string['source_standard'] = 'Standard';
