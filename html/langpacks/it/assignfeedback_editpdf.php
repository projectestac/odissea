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
 * Strings for component 'assignfeedback_editpdf', language 'it', version '4.1'.
 *
 * @package     assignfeedback_editpdf
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtoquicklist'] = 'Aggiungi alla quicklist';
$string['annotationcolour'] = 'Colore annotazione';
$string['black'] = 'Nero';
$string['blue'] = 'Blu';
$string['cannotopenpdf'] = 'Non è possibile aprire il file PDF. Il file può essere corrotto o in un formato non supportato.';
$string['clear'] = 'Pulisci';
$string['colourpicker'] = 'Tavolozza colori';
$string['command'] = 'Comando:';
$string['comment'] = 'Commenti';
$string['commentcolour'] = 'Colore commento';
$string['commentcontextmenu'] = 'Menu contestuale commenti';
$string['commentindex'] = 'Indice dei commenti';
$string['commentlabel'] = '{$a->pnum}.{$a->cnum}';
$string['couldnotsavepage'] = 'Non è stato possibile salvare la pagina {$a}';
$string['currentstamp'] = 'Timbro';
$string['default'] = 'Abilitato di default';
$string['default_help'] = 'Questo metodo di commento sarà abilitato di default per le nuove istanze di compito.';
$string['deleteannotation'] = 'Elimina annotazione';
$string['deletecomment'] = 'Elimina commento';
$string['deletefeedback'] = 'Elimina feedback PDF';
$string['downloadablefilename'] = 'feedback.pdf';
$string['downloadfeedback'] = 'Scarica feedback PDF';
$string['draftchangessaved'] = 'Bozza annotazione salvata';
$string['drag'] = 'Trascina';
$string['editpdf'] = 'Annotazione PDF';
$string['editpdf_help'] = 'Consente di annotare le consegne degli studenti con il browser e di generare un file PDF scaricabile.';
$string['enabled'] = 'Annotazione PDF';
$string['enabled_help'] = 'I docenti potranno annotare file PDF durante la valutazione dei compiti, aggiungendo commenti, simboli e timbri sulla consegna degli studenti. Per annotare non sono necessari software aggiuntivi, è sufficiente il browser.';
$string['errorgenerateimage'] = 'Si è verificato un errore durante la generazione dell\'immagine con ghostscript, informazioni di debug: {$a}';
$string['errorpdfpage'] = 'Si è verificato un errore durante la generazione della pagina.';
$string['expcolcomments'] = 'Espandi/contrai tutti i commenti';
$string['filter'] = 'Filtra commenti...';
$string['generatefeedback'] = 'Genera feedback PDF';
$string['generatingpdf'] = 'Generazione PDF in corso...';
$string['gotopage'] = 'Vai a pagina';
$string['green'] = 'Verde';
$string['gsimage'] = 'Immagine di test Ghostscript';
$string['highlight'] = 'Evidenziato';
$string['jsrequired'] = 'Per annotare documenti PDF è necessario javascript. Per favore per usare questa funzionalità abilitare javascript nel browser.';
$string['launcheditor'] = 'Lancio dell\'editor PDF';
$string['line'] = 'Linea';
$string['loadingeditor'] = 'Caricamento editor PDF';
$string['navigatenext'] = 'Pagina successiva (Alt/Shift-Alt/Ctrl-Option + {$a})';
$string['navigateprevious'] = 'Pagina precedente (Alt/Shift-Alt/Ctrl-Option + {$a})';
$string['output'] = 'Output:';
$string['oval'] = 'Ovale';
$string['pagenumber'] = 'Pagina {$a}';
$string['pagexofy'] = 'Pagina {$a->page} di {$a->total}';
$string['partialwarning'] = 'È possibile accedere ad alcuni dei file della consegna solamente tramite scaricamento diretto.';
$string['pathtogspathdesc'] = 'L\'annotazione PDF richiede l\'impostazione del percorso di ghostscript in {$a}.';
$string['pen'] = 'Penna';
$string['pluginname'] = 'Annotazione PDF';
$string['preparesubmissionsforannotation'] = 'Preparazione consegne per l\'annotazione';
$string['privacy:metadata:colourpurpose'] = 'Colore del commento o della nota.';
$string['privacy:metadata:conversionpurpose'] = 'Conversione file in formato PDF per consentire le annotazioni.';
$string['privacy:metadata:filepurpose'] = 'Memorizzazione di un PDF con annotazioni che servono da feedback per l\'utente.';
$string['privacy:metadata:rawtextpurpose'] = 'Memorizza il testo non elaborato dei dati rapidi.';
$string['privacy:metadata:tablepurpose'] = 'Memorizza un elenco rapido di commenti del docente.';
$string['privacy:metadata:userid'] = 'ID dell\'utente';
$string['privacy:path'] = 'Feedback PDF';
$string['rectangle'] = 'Rettangolo';
$string['red'] = 'Rosso';
$string['result'] = 'Risultato:';
$string['rotateleft'] = 'Ruota di 90 gradi a sinistra';
$string['rotateright'] = 'Ruota di 90 gradi a destra';
$string['searchcomments'] = 'Cerca commenti';
$string['select'] = 'Seleziona';
$string['stamp'] = 'Timbro';
$string['stamppicker'] = 'Tavolozza timbri';
$string['stamps'] = 'Timbri';
$string['stampsdesc'] = 'I timbri devono essere file di immagini (dimensione consigliata 40x40). È possibile usare le immagini come timbri per annotare PDF.';
$string['test_doesnotexist'] = 'Il percorso ghostscript punta ad un file inesistente';
$string['test_empty'] = 'Il percorso ghostscript è vuoto - per favore inserire il percorso corretto';
$string['test_isdir'] = 'Il percorso ghostscript punta ad una cartella, per favore includere il programma ghostscript nel percorso indicato';
$string['test_notestfile'] = 'Il test PDF è mancante';
$string['test_notexecutable'] = 'Il percorso ghostscript punta ad un file non eseguibile';
$string['test_ok'] = 'Il percorso ghostscript sembra OK - verifica se sotto è visibile un messaggio nell\'immagine sottostante.';
$string['testgs'] = 'Percorso ghostscript';
$string['tool'] = 'Strumento';
$string['toolbarbutton'] = '{$a->tool} {$a->shortcut}';
$string['viewfeedbackonline'] = 'Visualizza pdf annotato...';
$string['white'] = 'Bianco';
$string['yellow'] = 'Giallo';
