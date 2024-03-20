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
 * Strings for component 'block', language 'ro', version '4.1'.
 *
 * @package     block
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['anypagematchingtheabove'] = 'Orice pagină care corespunde cu cele de mai sus';
$string['appearsinsubcontexts'] = 'Apare în sub-contexte';
$string['assignrolesinblock'] = 'Asignează roluri în block-ul {$a}';
$string['blocksdrawertoggle'] = 'Ascunde/afișează sertarul block-ului';
$string['blocksettings'] = 'Setări de bloc';
$string['bracketfirst'] = '{$a} (primul)';
$string['bracketlast'] = '{$a} (ultimul)';
$string['configureblock'] = 'Configurează block {$a}';
$string['contexts'] = 'Contexte pagină';
$string['contexts_help'] = 'Contextele sunt tipuri mai specifice de pagini unde acest block poate fi afișat în cadrul locației originale. Veți avea diferite opțiuni aici, în funcție de locația originală a block-ului și locația curentă. De exemplu, puteți restricționa ca un block să apară doar pe paginile forumului într-un curs prin adăugarea block-ului la curs (ceea ce îl face să apară pe toate sub-paginile), apoi mergeți într-un forum și editați din nou setările block-ului pentru a restricționa afișarea doar pe paginile forumului.';
$string['createdat'] = 'Locația inițială a block-ului';
$string['createdat_help'] = 'Locația originală unde a fost creat block-ul. Setările block-ului îl  pot face să apară în alte locații (contexte) în locația originală. De exemplu, un block creat pe o pagină de curs ar putea fi afișat în cadrul activităților din cadrul acelui curs. Un block creat pe prima pagină poate fi afișat pe tot site-ul.';
$string['defaultregion'] = 'Regiune implicită';
$string['defaultregion_help'] = 'Temele pot defini una sau mai multe regiuni de block-uri unde block-urile sunt afișate. Această setare definește care dintre aceste block-uri doriți să apară în mod implicit. Regiunea poate fi înlocuită pe anumite pagini, dacă este necesar.';
$string['defaultweight'] = 'Pondere implicită';
$string['defaultweight_help'] = 'Ponderea implicită vă permite să alegeți aproximativ locul în care doriți ca block-ul să apară în regiunea aleasă, fie în partea de sus sau de jos. Locația finală se calculează de la toate blocurile din această regiune (de exemplu, doar un block poate fi de fapt în partea de sus). Această valoare poate fi înlocuită pe anumite pagini, dacă este necesar.';
$string['deleteblock'] = 'Șterge block-ul {$a}';
$string['deleteblockcheck'] = 'Prin această acțiune se va șterge blocul {$a}.';
$string['deleteblockinprogress'] = 'Block-ul {$a} este în curs de ștergere...';
$string['deleteblockwarning'] = '<p>Sunteți pe cale să ștergeți un block care apare în altă parte </p> <p>Locația originală a block-ului:. {$a-> location} <br/ > Afișează pe tipuri de pagini: {$a->pagetype}</p><p>Sunteți sigur doriți să continuați?</p>';
$string['deletecheck'] = 'Ștergeți blocul {$a}?';
$string['deletecheck_modal'] = 'Stergeți block-ul?';
$string['hideblock'] = 'Ascunde block-ul {$a}';
$string['hidepanel'] = 'Ascunde panel';
$string['moveblock'] = 'Mută block-ul {$a}';
$string['moveblockafter'] = 'Mută block după block-ul {$a}';
$string['moveblockbefore'] = 'Mută block-ul înaintea block-ului {$}';
$string['moveblockinregion'] = 'Mută block-ul în regiune {$}';
$string['movingthisblockcancel'] = 'Se mută acest block ({$a})';
$string['myblocks'] = 'Block-urile mele';
$string['onthispage'] = 'Pe această pagină';
$string['pagetypes'] = 'Tipuri de pagină';
$string['pagetypewarning'] = 'Tipul de pagină specificat anterior nu mai poate fi selectat. Vă rugăm să alegeți tipul de pagină cel mai adecvat de mai jos.';
$string['privacy:metadata:userpref:dockedinstance'] = 'Înregistrează când utilizatorul a andocat un bloc';
$string['privacy:metadata:userpref:hiddenblock'] = 'Înregistrează când utilizatorul a colapsat / a ascuns un bloc';
$string['privacy:request:blockisdocked'] = 'Indică dacă blocul a fost andocat';
$string['privacy:request:blockishidden'] = 'Indică dacă blocul a fost ascuns / colapsat';
$string['region'] = 'Regiune';
$string['restrictpagetypes'] = 'Afișează pe tipurile de pagini';
$string['showblock'] = 'Afișează block-ul {$a}';
$string['showoncontextandsubs'] = 'Afişează pe \'{$a}\' şi pe toate paginile din ea';
$string['showoncontextonly'] = 'Afişează doar pe \'{$a}\'';
$string['showonentiresite'] = 'Afişează pe întregul site';
$string['showonfrontpageandsubs'] = 'Afişează pe pagina principală a site-ului şi pe orice pagină adăugată paginii principale';
$string['showonfrontpageonly'] = 'Afişează doar pe pagina principală a site-ului';
$string['subpages'] = 'Selectare pagini';
$string['thisspecificpage'] = 'Această pagină specifică';
$string['visible'] = 'Vizibil';
$string['weight'] = 'Pondere';
$string['wherethisblockappears'] = 'Unde apare acest block';
