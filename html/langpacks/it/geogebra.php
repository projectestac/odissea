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
 * Strings for component 'geogebra', language 'it', version '4.1'.
 *
 * @package     geogebra
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityclosed'] = 'Questa attività è stata chiusa';
$string['activitynotopened'] = 'Questa attività non è ancora disponibile';
$string['attempt'] = 'Tentativo';
$string['attempts'] = 'Tentativi';
$string['attemptsremaining'] = 'Tentativi rimanenti per questa attività:';
$string['autograde'] = 'Attività auto-valutata';
$string['availabledate'] = 'Disponibile dal';
$string['average'] = 'Media';
$string['choosescripttype'] = 'Scegli il tipo di script';
$string['comment'] = 'Commento';
$string['contentheader'] = 'Contenuto';
$string['coursewithoutstudents'] = 'Corso senza studenti';
$string['datestudent'] = 'Ultima modifica (invio)';
$string['dateteacher'] = 'Ultima modifica (valutazione)';
$string['deleteallattempts'] = 'Elimina tutti i tentativi';
$string['description'] = 'Descrizione';
$string['discardchanges'] = 'Ignora le modifiche ed esci';
$string['duedate'] = 'Data di consegna';
$string['duration'] = 'Durata';
$string['enableLabelDrags'] = 'Consenti il trascinamento delle etichette';
$string['enableRightClick'] = 'Consenti il click col tasto destro';
$string['errorattempt'] = 'Errore: non è stato possibile salvare il tentativo.';
$string['event_course_module_viewed'] = 'Visualizzato modulo del corso';
$string['event_instances_list_viewed'] = 'Visualizzato elenco delle istanze';
$string['expired'] = 'Questa attività è stata chiusa il {$a} e non è più disponibile';
$string['extractedfromggb'] = 'File estratti da ggb';
$string['filename'] = 'Nome del file';
$string['filenotfound'] = 'Il file specificato non esiste';
$string['filetype'] = 'Tipo';
$string['filetype_help'] = 'Questa impostazione determina il modo con cui si importa nel corso l\'attività GeoGebra. Sono disponibili due possibilità:

* File GeoGebra caricato - Consente di selezionare e caricare un file ".ggb"
* URL esterna - Consente di specificare l\'URL di un attività GeoGebra. Nota: l\'URL deve iniziare con http(s) o www e puntare a un file ".ggb" valido.';
$string['filetypeexternal'] = 'URL esterna';
$string['filetypelocal'] = 'File GeoGebra caricato';
$string['firstattempt'] = 'Primo tentativo';
$string['for'] = 'per';
$string['functionalityoptionsgrp'] = 'Funzionalità';
$string['geogebra:addinstance'] = 'Aggiungere GeoGebra';
$string['geogebra:grade'] = 'Valutare GeoGebra';
$string['geogebra:submit'] = 'Inviare GeoGebra';
$string['geogebra:view'] = 'Visualizzare GeoGebra';
$string['geogebrafile'] = 'File GeoGebra';
$string['geogebrafile_help'] = 'Il file ".ggb" contenente l\'attività GeoGebra.';
$string['geogebraurl'] = 'URL';
$string['geogebraurl_help'] = 'L\'URL dell\'attività GeoGebra che si vuole integrare.<br>
Questo <a href="https://youtu.be/qbp-RuM4NpU" target="_blank">video</a> spiega come trovare l\'URL delle attività che si trovano su <a href="https://www.geogebra.org/" target="_blank">geogebra.org</a>';
$string['grade'] = 'Valutazione';
$string['gradeit'] = 'Valutazione';
$string['grademethod'] = 'Metodo di valutazione';
$string['header_geogebra'] = 'Impostazioni GeoGebra';
$string['height'] = 'Altezza';
$string['highestattempt'] = 'Miglior tentativo';
$string['httpnotallowed'] = 'Al momento non è consentito l\'uso di file esterni';
$string['interfaceoptionsgrp'] = 'Interfaccia utente';
$string['invalidgeogebrafile'] = 'File GeoGebra non valido. Deve avere l\'estensione ".ggb".';
$string['invalidurl'] = 'URL non valida. Deve iniziare con http(s) e deve essere un file ".ggb" valido.';
$string['language'] = 'Lingua';
$string['lastattempt'] = 'Ultimo tentativo';
$string['lastattemptremaining'] = 'Questo è il tuo ultimo tentativo per questa attività';
$string['lastmodifiedgrade'] = 'Ultima modifica (valutazione)';
$string['lastmodifiedsubmission'] = 'Ultima modifica (invio)';
$string['lowestattempt'] = 'Tentativo peggiore';
$string['manualgrade'] = 'Valutazione manuale';
$string['maxattempts'] = 'Numero massimo di tentativi';
$string['modulename'] = 'GeoGebra';
$string['modulename_help'] = '<p><a href="http://www.geogebra.org" target="_blank">GeoGebra</a> GeoGebra è un software di matematica dinamica per tutti i livelli educativi,
che riunisce geometria, algebra, foglio di calcolo, grafici, statistica e analisi matematica in un singolo pacchetto, semplice e intuitivo.</p>
<p>Il <a href="http://www.gencat.cat/ensenyament/" target="_blank">Dipartimento dell\'Educazione della Catalogna</a> in collaborazione con l\'<a href="http://acgeogebra.cat/" target="_blank">Associazione Catalana di GeoGebra</a> (ACG) e il team di sviluppo di GeoGebra hanno sviluppato questo modulo che permette di incorporare le attività GeoGebra in Moodle. Le sue caratteristiche principali sono:
<ul>
    <li>Consente di integrare facilmente le attività GeoGebra nei corsi Moodle.</li>
    <li>Facilita l\'osservazione degli studenti, dato che salva il punteggio, la data, la durata e la costruzione per ogni tentativo fatto dagli utenti.</li>
    <li>Gli studenti possono salvare lo stato di quanto stanno svolgendo per poi continuare l\'attività più tardi.</li>
</ul>
</p>';
$string['modulenameplural'] = 'GeoGebra';
$string['msg_noattempts'] = 'Hai svolto questa attività il numero massimo di volte consentito';
$string['msg_nosessions'] = 'L\'attività GeoGebra non ha ancora una sessione';
$string['name'] = 'Nome';
$string['noattempts'] = '-';
$string['nograding'] = 'Senza valutazione';
$string['nomoreattempts'] = 'Nessun tentativo rimasto per questa attività';
$string['notopenyet'] = 'Questa attività non è disponibile fino al {$a}';
$string['pluginadministration'] = 'Amministrazione di GeoGebra';
$string['pluginname'] = 'GeoGebra';
$string['preview_geogebra'] = 'Anteprima dell\'attività GeoGebra';
$string['previewtab'] = 'Anteprima';
$string['privacy'] = 'Privacy dei risultati';
$string['privacy:metadata:geogebra_attempts'] = 'Informazione relativa ai risultati di un utente nei tentativi in una data attività GeoGebra';
$string['privacy:metadata:geogebra_attempts:datestudent'] = 'Marca temporale indicante quando il tentativo è stato terminato dallo studente';
$string['privacy:metadata:geogebra_attempts:dateteacher'] = 'Marca temporale indicante quando il tentativo è stato terminato dall\'insegnante';
$string['privacy:metadata:geogebra_attempts:finished'] = 'Marca temporaleindicante quando il tentativo è stato terminato dall\'utente';
$string['privacy:metadata:geogebra_attempts:geogebra'] = 'ID dell\'attività scelta';
$string['privacy:metadata:geogebra_attempts:gradecomment'] = 'Commento alla valutazione del tentativo dell\'attività GeoGebra';
$string['privacy:metadata:geogebra_attempts:userid'] = 'ID dell\'utente che ha svolto il tentativo';
$string['privacy:metadata:geogebra_attempts:vars'] = 'ID dell\'opzione selezionata dall\'utente.';
$string['redirecttocourse'] = 'L\'attività è stata salvata correttamente. Ritorno alla pagina del corso';
$string['report'] = 'Report di';
$string['results'] = 'Risultato';
$string['resultstab'] = 'Risultati';
$string['resumeattempt'] = 'Continua il tentativo non terminato';
$string['review'] = 'Revisione di';
$string['reviewtab'] = 'Revisione';
$string['savechanges'] = 'Salva modifiche';
$string['savewithoutsubmitting'] = 'Salva senza inviare';
$string['settings'] = 'Impostazioni';
$string['showAlgebraInput'] = 'Visualizza la barra di inserimento';
$string['showMenuBar'] = 'Visualizza la barra del menu';
$string['showResetIcon'] = 'Visualizza l\'icona per reinizializzare la costruzione';
$string['showToolBar'] = 'Visualizza la barra degli strumenti';
$string['showToolBarHelp'] = 'Visualizza l\'aiuto della barra degli strumenti';
$string['showsubmit'] = 'Visualizza il pulsante di invio';
$string['status'] = 'Stato';
$string['submitandfinish'] = 'Invia e termina';
$string['timing'] = 'Disponibilità';
$string['total'] = 'Totale';
$string['unfinished'] = 'Non terminato';
$string['ungraded'] = 'Non valutato';
$string['unlimitedattempts'] = 'Tentativi illimitati per questa attività';
$string['urledit'] = 'File GeoGebra';
$string['urledit_help'] = 'Il file ".ggb" contenente l\'attività GeoGebra';
$string['useBrowserForJS'] = 'Utilizza JavaScript da:';
$string['useBrowserForJS_geogebra'] = 'File GeoGebra (falso)';
$string['useBrowserForJS_html'] = 'HTML (vero)';
$string['view'] = 'Visualizza';
$string['viewattempt'] = 'Visualizza';
$string['viewattempts'] = 'Visualizza tentativi';
$string['viewattempttab'] = 'Visualizza tentativo';
$string['viewtab'] = 'Visualizza';
$string['weight'] = 'Peso';
$string['width'] = 'Larghezza';
