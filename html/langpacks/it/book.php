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
 * Strings for component 'book', language 'it', version '4.1'.
 *
 * @package     book
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addafter'] = 'Aggiungi un nuovo capitolo';
$string['addafterchapter'] = 'Aggiungi capitolo dopo "{$a->title}"';
$string['book:addinstance'] = 'Aggiungere libri';
$string['book:edit'] = 'Modificare capitoli';
$string['book:read'] = 'Visualizzare libri';
$string['book:viewhiddenchapters'] = 'Visualizzare capitoli nascosti';
$string['chapterandsubchaptersdeleted'] = 'Il capitolo "{$a->title}" e suoi {$a->subchapters} sottocapitoli sono stati eliminati';
$string['chapterdeleted'] = 'Il capitolo "{$a->title}" è stato eliminato';
$string['chapters'] = 'Capitoli';
$string['chaptertitle'] = 'Titolo del capitolo';
$string['confchapterdelete'] = 'Sei sicuro di eliminare questo capitolo?';
$string['confchapterdeleteall'] = 'Sei sicuro di eliminare questo capitolo e tutti i suoi paragrafi?';
$string['content'] = 'Contenuto';
$string['customtitles'] = 'Titoli personalizzati';
$string['customtitles_help'] = 'I titoli dei capitoli di norma sono visualizzati automaticamente nel TOC e come intestazione di pagina subito sopra il corpo testo.

Se è stata selezionata l\'impostazione Titoli personalizzati, allora il titolo del capitolo non verrà usato per l\'intestazione. In questo caso è possibile inserire una intestazione come parte del testo';
$string['deletechapter'] = 'Elimina il capitolo "{$a}"';
$string['editchapter'] = 'Modifica il capitolo "{$a}"';
$string['editingchapter'] = 'Modifica capitolo';
$string['errorchapter'] = 'Si è verificato un errore durante la lettura di un capitolo del libro';
$string['eventchaptercreated'] = 'Creazione capitolo';
$string['eventchapterdeleted'] = 'Eliminazione capitolo';
$string['eventchapterupdated'] = 'Aggiornamento capitolo';
$string['eventchapterviewed'] = 'Visualizzazione capitolo';
$string['hidechapter'] = 'Nascondi il capitolo "{$a}"';
$string['indicator:cognitivedepth'] = 'Libro cognitivo';
$string['indicator:cognitivedepth_help'] = 'L\'indicatore è basato sulla profondità cognitiva toccata dallo studente con risorse Libro.';
$string['indicator:cognitivedepthdef'] = 'Libro cognitivo';
$string['indicator:cognitivedepthdef_help'] = 'Durante l\'intervallo di analisi, il partecipante ha raggiunto questa percentuale di coinvolgimento cognitivo offerto dall\'attività Compito (Livelli: Nessuna visualizzazione, Visualizzazione)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Libro sociale';
$string['indicator:socialbreadth_help'] = 'L\'indicatore è basato sulla dimensione sociale raggiunta dallo studente con risorse Libro.';
$string['indicator:socialbreadthdef'] = 'Libro sociale';
$string['indicator:socialbreadthdef_help'] = 'Durante l\'intervallo di analisi, il partecipante ha raggiunto questa percentuale di coinvolgimento sociale offerto dall\'attività Libro (Livelli: Nessuna partecipazione, Partecipazione da solo)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['modulename'] = 'Libro';
$string['modulename_help'] = 'Il modulo libro consente ad un docente di creare risorse multi pagina componendole, similmente ad un libro, in capitoli e paragrafi.
I libri possono contenere file multimediali e testi e sono indicati per contenuti corposi da suddividere in diverse sezioni.

È possibile usare il libro per:

* visualizzare materiale da leggere per moduli di studi individuale
* redigere un manuale per lo staff
* presentare un portfolio di lavori degli studenti';
$string['modulename_link'] = 'mod/book/view';
$string['modulenameplural'] = 'Libri';
$string['movechapterdown'] = 'Sposta in basso il capitolo "{$a}"';
$string['movechapterup'] = 'Sposta in alto il capitolo "{$a}"';
$string['navexit'] = 'Esci dal libro';
$string['navimages'] = 'Immagini';
$string['navnext'] = 'Pagina successiva';
$string['navnexttitle'] = 'Successivo: {$a}';
$string['navoptions'] = 'Opzioni disponibili per i link di navigaazione';
$string['navoptions_desc'] = 'Opzioni per la visualizzazione della navigazione nelle pagine del libro';
$string['navprev'] = 'Pagina precedente';
$string['navprevtitle'] = 'Precedente: {$a}';
$string['navstyle'] = 'Stile della navigazione';
$string['navstyle_help'] = '* Immagini - Per la navigazione saranno usate icone
* Testo - Per la navigazione saranno usati i titoli dei capitoli';
$string['navtext'] = 'Testo';
$string['navtoc'] = 'Solo TOC';
$string['nocontent'] = 'Questo libro al momento non ha contenuti.';
$string['numbering'] = 'Formattazione capitoli';
$string['numbering0'] = 'Senza numerazione';
$string['numbering1'] = 'Numeri';
$string['numbering2'] = 'Elenco puntato';
$string['numbering3'] = 'Elenco rientrato';
$string['numbering_help'] = '* Senza numerazione- i titoli dei capitoli e dei paragrafi non sarà formattato.
* Numeri - capitoli e paragrafi saranno numerati (1, 1.1, 1.2, 2, ...)
* Elenco puntato - capitoli e paragrafi saranno visualizzati rientrati con punti elenco
* Elenco rientrato - i paragrafi saranno visualizzati rientrati';
$string['numberingoptions'] = 'Opzioni di formattazione disponibili';
$string['numberingoptions_desc'] = 'Le opzioni di numerazione da rendere disponibili quando si creano Libri.';
$string['page-mod-book-x'] = 'Qualsiasi pagina con modulo libro';
$string['pluginadministration'] = 'Gestione libro';
$string['pluginname'] = 'Libro';
$string['previouschapter'] = 'Capitolo precedente';
$string['privacy:metadata'] = 'Il modulo di attività "Libro" non memorizza dati personali.';
$string['removeallbooktags'] = 'Elimina tutti i tag del libro';
$string['search:activity'] = 'Libro - Informazioni sulla risorsa';
$string['search:chapter'] = 'Libro - Capitoli';
$string['showchapter'] = 'Visualizza capitolo "{$a}"';
$string['subchapter'] = 'Paragrafo';
$string['subchapternotice'] = '(Disponibile solo dopo la creazione del primo capitolo)';
$string['subplugintype_booktool'] = 'Tool libro';
$string['subplugintype_booktool_plural'] = 'Tool libro';
$string['tagarea_book_chapters'] = 'Capitoli del libro';
$string['tagsdeleted'] = 'I tag del libro sono stati eliminati';
$string['toc'] = 'Sommario';
$string['top'] = 'Ritorna su';
