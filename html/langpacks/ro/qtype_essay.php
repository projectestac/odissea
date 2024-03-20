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
 * Strings for component 'qtype_essay', language 'ro', version '4.1'.
 *
 * @package     qtype_essay
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptedfiletypes'] = 'Tipuri de fișiere acceptate';
$string['acceptedfiletypes_help'] = 'Tipurile de fișiere acceptate pot fi restricționate prin introducerea unei liste de extensii de fișiere. Dacă câmpul este lăsat gol, atunci toate tipurile de fișiere sunt permise.';
$string['allowattachments'] = 'Permite atașamente';
$string['answerfiles'] = 'Fișiere răspuns';
$string['answertext'] = 'Text răspuns';
$string['attachedfiles'] = 'Atașamente: {$a}';
$string['attachmentsoptional'] = 'Atașamentele sunt opționale';
$string['attachmentsrequired'] = 'Necesită atașamente';
$string['attachmentsrequired_help'] = 'Această opțiune specifică numărul minim de atașamente necesare pentru ca un răspuns să fie considerat completat pentru notare.';
$string['err_maxminmismatch'] = 'Numărul maxim de cuvinte trebuie să fie mai mare decât numărul minim de cuvinte';
$string['err_maxwordlimit'] = 'Numărul maxim de cuvinte este activat dar nu este setat';
$string['err_maxwordlimitnegative'] = 'Numărul maxim de cuvinte nu poate fi un număr negativ';
$string['err_minwordlimit'] = 'Numărul minim de cuvinte este activat dar nu este setat';
$string['err_minwordlimitnegative'] = 'Numărul minim de cuvinte nu poate fi un număr negativ';
$string['formateditor'] = 'Editor HTML';
$string['formateditorfilepicker'] = 'Editor HTML cu selector de fișiere';
$string['formatmonospaced'] = 'Text simplu, font monospațiat';
$string['formatnoinline'] = 'Fără text online';
$string['formatplain'] = 'Text simplu';
$string['graderinfo'] = 'Informații pentru evaluatori';
$string['graderinfoheader'] = 'Informații pentru evaluatori';
$string['maxbytes'] = 'Dimensiune maximă de fișier';
$string['maxwordlimit'] = 'Numărul maxim de cuvinte';
$string['maxwordlimit_help'] = 'Dacă răspunsul cere ca studenții să insereze text, acesta este numărul maxim de cuvinte pe care cursantul poate să le scrie.';
$string['maxwordlimitboundary'] = 'Limita de cuvinte pentru această întrebare este de {$a->limit} cuvinte iar dumnevoastră încercați să trimiteți {$a->count} cuvinte. Vă rugăm să vă scurtați răspunsul și să încercați din nou.';
$string['minwordlimit'] = 'Numărul minim de cuvinte';
$string['minwordlimit_help'] = 'Dacă răspunsul necesită inserarea de text de către cursant, acesta este numărul minim de cuvinte permis.';
$string['minwordlimitboundary'] = 'Această întrebare necesită un răspuns de cel puțin {$a->limit} cuvinte și încercați să trimiteți {$a->count} cuvinte. Vă rugăm să extindeți răspunsul și să încercați din nou.';
$string['mustattach'] = 'Când este selectat „Fără text online” sau răspunsurile sunt opționale, trebuie să permiteți cel puțin un atașament.';
$string['mustrequire'] = 'Când este selectat „Fără text online” sau răspunsurile sunt opționale, trebuie să solicitați cel puțin un atașament.';
$string['mustrequirefewer'] = 'Nu puteți solicita mai multe atașamente decât permiteți a fi încărcate.';
$string['nlines'] = '{$a} rânduri';
$string['nonexistentfiletypes'] = 'Următoarele tipuri de fișiere nu au fost recunoscute: {$a}';
$string['pluginname'] = 'Eseu';
$string['pluginname_help'] = 'Ca răspuns la o întrebare, respondentul poate încărca unul sau mai multe fișiere și / sau introduce text online. Se poate furniza un șablon de răspuns. Răspunsurile vor fi evaluate de către profesor.';
$string['pluginname_link'] = 'question/type/essay';
$string['pluginnameadding'] = 'Adaugă o întrebare în eseu';
$string['pluginnameediting'] = 'Editează o întrebare în eseu';
$string['pluginnamesummary'] = 'Permite un răspuns de tipul încărcare de fișier și / sau text online. Răspunsurile vor fi evaluate de către profesor.';
$string['privacy:metadata'] = 'Pluginul pentru tipul întrebării eseu le permite autorilor de întrebări să seteze opțiuni implicite ca preferințe ale utilizatorului.';
$string['privacy:preference:attachments'] = 'Numărul de atașamente permise.';
$string['privacy:preference:attachmentsrequired'] = 'Numărul de atașamente necesare.';
$string['privacy:preference:defaultmark'] = 'Punctajul implicit setat pentru o întrebare curentă.';
$string['privacy:preference:maxbytes'] = 'Dimensiunea maximă a fișierului.';
$string['privacy:preference:responsefieldlines'] = 'Numărul de linii care să determine înălțimea casetei de text.';
$string['privacy:preference:responseformat'] = 'Care este formatul de răspuns (editor HTML, text simplu etc.)?';
$string['privacy:preference:responserequired'] = 'Dacă cursantului i se cere să insereze text sau caseta de text este opțională.';
$string['responsefieldlines'] = 'Dimensiunea casetei de inserare text';
$string['responseformat'] = 'Formatul răspunsului';
$string['responseisrequired'] = 'Cursantul trebuie să insereze text';
$string['responsenotrequired'] = 'Introducerea textului este opțională';
$string['responseoptions'] = 'Opțiuni răspuns';
$string['responserequired'] = 'Inserare text';
$string['responsetemplate'] = 'Șablon răspuns';
$string['responsetemplate_help'] = 'Orice text introdus aici va fi afișat în caseta de introducere a răspunsului atunci când începe o nouă încercare la întrebare.';
$string['responsetemplateheader'] = 'Șablon răspuns';
$string['wordcount'] = 'Numărul de cuvinte: {$a}';
$string['wordcounttoofew'] = 'Numărul de cuvinte: {$a->count}, este mai mic decât numărul necesar de cuvinte {$a->limit}.';
$string['wordcounttoomuch'] = 'Numărul de cuvinte: {$a->count}, este mai mare decât numărul limită de cuvinte {$a->limit}.';
