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
 * Strings for component 'analytics', language 'it', branch 'MOODLE_36_STABLE'
 *
 * @package   analytics
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analysablenotused'] = 'Il modello analizzabile {$a->analysableid} non è utilizzato: {$a->errors}';
$string['analysablenotvalidfortarget'] = 'Il modello analizzabile {$a->analysableid} non è valido per questo obiettivo: {$a->result}';
$string['analysisinprogress'] = 'Analisi ancora in corso da una elaborazione precedente';
$string['analytics'] = 'Analitica';
$string['analyticslogstore'] = 'Log store da utilizzare per l\'analitica';
$string['analyticslogstore_help'] = 'Il lgo store che sarà utilizzato dalle API dell\'analitica per leggere l\'attività degli utenti.';
$string['analyticssettings'] = 'Impostazioni analitica';
$string['coursetoolong'] = 'Il corso è troppo lungo';
$string['defaultpredictionsprocessor'] = 'Elaboratore di pronostici di default';
$string['defaultpredictoroption'] = 'Elaboratore di default ({$a})';
$string['disabledmodel'] = 'Modello disabilitato';
$string['enabledtimesplittings'] = 'Metodi di suddivisione del tempo';
$string['erroralreadypredict'] = 'Il file {$a} è già stato utilizzato per generare pronostici.';
$string['errorcannotreaddataset'] = 'Non è possibile leggere il file {$a} del dataset';
$string['errorcannotwritedataset'] = 'Non è possibile scrivere il file {$a} del dataset';
$string['errorendbeforestart'] = 'La data di fine ({$a}) è antecedente alla data di inizio.';
$string['errorinvalidindicator'] = 'Indicatore {$a} non valido';
$string['errorinvalidtimesplitting'] = 'La suddivisione del tempo non è valida: per favore verificare di aver inserito il nome qualificato della classe.';
$string['errornoindicators'] = 'Il modello non ha indicatori.';
$string['errornopredictresults'] = 'L\'elaboratore di pronostici non ha riportato risultati. Per maggiori informazioni verifica la cartella di output.';
$string['errornoroles'] = 'I ruoli di studente o docente non sono stati impostati. E\' possibile impostarli nella pagina di impostazione dell\'analitica';
$string['errornotarget'] = 'Il modello non ha obiettivi.';
$string['errornotimesplittings'] = 'Il modello non ha metodi di suddivisone del tempo';
$string['errorpredictioncontextnotavailable'] = 'Il contesto del pronostico non è più disponibile';
$string['errorpredictionformat'] = 'Il formato di calcolo del pronostico è errato';
$string['errorpredictionnotfound'] = 'Il pronostico non è stato trovato';
$string['errorpredictionsprocessor'] = 'Si è verificato un errore dell\'elaboratore di pronostici: {$a}';
$string['errorpredictwrongformat'] = 'Non è possibile decodificare i dati di ritorno dell\'elaboratore di pronostici: "{$a}"';
$string['errorprocessornotready'] = 'L\'elaboratore di pronostici selezionato non è pronto: {$a}';
$string['errorsamplenotavailable'] = 'Il campione pronosticato non è più disponibile';
$string['errorunexistingmodel'] = 'Il modello {$a} non esiste';
$string['errorunexistingtimesplitting'] = 'Il metodo sezionato di suddivisone del tempo non è disponibile.';
$string['errorunknownaction'] = 'Azione sconosciuta';
$string['eventinsightsviewed'] = 'Visualizzata considerazione';
$string['eventpredictionactionstarted'] = 'Avviata elaborazione di pronostici';
$string['fixedack'] = 'E\' noto';
$string['insightinfomessage'] = 'Il sistema ha generato per te alcune considerazioni: {$a}';
$string['insightinfomessagehtml'] = 'Il sistema ha generato per te alcune considerazioni: <a href="{$a}">{$a}</a>.';
$string['insightmessagesubject'] = 'Nuova considerazione su "{$a->contextname}": {$a->insightname}';
$string['invalidanalysablefortimesplitting'] = 'Non può essere analizzato utilizzando il metodo {$a} di suddivisione del tempo.';
$string['invalidtimesplitting'] = 'Prima di poterlo utilizzare per l\'addestramento, il modello con ID {$a} richiede un metodo di suddivisione del tempo.';
$string['modeloutputdir'] = 'Cartella di output del modello';
$string['modeloutputdirinfo'] = 'La cartella dove l\'elaboratore di pronostici salverà le informazioni da valutare. E\' utile per scopi di debugging e ricerca.';
$string['modeltimelimit'] = 'Limite temporale per l\'analisi del modello';
$string['modeltimelimitinfo'] = 'Limita il tempo impiegato da ogni modello per analizzare i contenuti del sito.';
$string['nocourses'] = 'Non ci sono corsi da analizzare';
$string['nodata'] = 'Non ci sono dati da analizzare';
$string['noevaluationbasedassumptions'] = 'I modelli basati sulle ipotesi non possono essere valutati.';
$string['noinsights'] = 'Non ci sono considerazioni';
$string['noinsightsmodel'] = 'Il modello non genera considerazioni.';
$string['nonewdata'] = 'Non ci sono nuovi dati';
$string['nonewranges'] = 'Non ci sono nuovi pronostici';
$string['nonewtimeranges'] = 'Non ci sono nuovi intervalli di tempo; nessuna predizione da elaborare';
$string['nopredictionsyet'] = 'Non ci sono pronostici disponibili';
$string['noranges'] = 'Ancora non ci sono pronostici';
$string['notrainingbasedassumptions'] = 'I modelli basati sulle ipotesi non richiedono addestramento';
$string['notuseful'] = 'Non utile';
$string['novaliddata'] = 'Non sono disponibili dati';
$string['novalidsamples'] = 'Non sono disponibili campioni validi';
$string['onlycli'] = 'Elaborazione processi dell\'analitica solo da linea di comando';
$string['onlycliinfo'] = 'I processi dell\'analitica come valutare i modelli, addestrare algoritmi di machine learning o formulare pronostici, possono essere molto onerosi ed è possibile configurare il loro lancio solo via elaborazione pianificata tramite cron.';
$string['predictionsprocessor'] = 'Elaboratore di pronostici';
$string['predictionsprocessor_help'] = 'L\'elaboratore di pronostici è un sistema di machine learning che elabora gli insiemi di dati generati dal calcolo dei modelli degli  indicatori e degli obiettivi. Ciascun modello può utilizzare elaboratori diversi. L\'elaboratore configurato con questa impostazione sarà quello di default.';
$string['privacy:metadata:analytics:indicatorcalc'] = 'Calcoli dell\'indicatore';
$string['privacy:metadata:analytics:indicatorcalc:contextid'] = 'Contesto';
$string['privacy:metadata:analytics:indicatorcalc:endtime'] = 'Data di fine del calcolo';
$string['privacy:metadata:analytics:indicatorcalc:indicator'] = 'La classe del calcolatore dell\'indicatore';
$string['privacy:metadata:analytics:indicatorcalc:sampleid'] = 'ID del campione';
$string['privacy:metadata:analytics:indicatorcalc:sampleorigin'] = 'Tabella di origine del campione';
$string['privacy:metadata:analytics:indicatorcalc:starttime'] = 'Data di inizio del calcolo';
$string['privacy:metadata:analytics:indicatorcalc:timecreated'] = 'Data di creazione del pronostico';
$string['privacy:metadata:analytics:indicatorcalc:value'] = 'Valore calcolato';
$string['privacy:metadata:analytics:predictionactions'] = 'Azioni del pronostico';
$string['privacy:metadata:analytics:predictionactions:actionname'] = 'Nome dell\'azione';
$string['privacy:metadata:analytics:predictionactions:predictionid'] = 'ID del pronostico';
$string['privacy:metadata:analytics:predictionactions:timecreated'] = 'Data di svolgimento dell\'azione del pronostico';
$string['privacy:metadata:analytics:predictionactions:userid'] = 'Utente che ha svolto l\'azione';
$string['privacy:metadata:analytics:predictions'] = 'Pronostici';
$string['privacy:metadata:analytics:predictions:calculations'] = 'Calcoli dell\'indicatore';
$string['privacy:metadata:analytics:predictions:contextid'] = 'Contesto';
$string['privacy:metadata:analytics:predictions:modelid'] = 'ID del modello';
$string['privacy:metadata:analytics:predictions:prediction'] = 'Pronostico';
$string['privacy:metadata:analytics:predictions:predictionscore'] = 'Punteggio del pronostico';
$string['privacy:metadata:analytics:predictions:rangeindex'] = 'Indice del metodo di suddivisione del tempo';
$string['privacy:metadata:analytics:predictions:sampleid'] = 'ID del campione';
$string['privacy:metadata:analytics:predictions:timecreated'] = 'Data di creazione del pronostico';
$string['privacy:metadata:analytics:predictions:timeend'] = 'Data di fine del calcolo';
$string['privacy:metadata:analytics:predictions:timestart'] = 'Data di inizio del calcolo';
$string['processingsitecontents'] = 'Elaborazione del contenuto del sito';
$string['successfullyanalysed'] = 'Analizzato correttamente';
$string['timesplittingmethod'] = 'Metodo di suddivisione del tempo';
$string['timesplittingmethod_help'] = 'Il metodo di suddivisione del tempo divide la durata del corso in intervalli; il motore dei pronostici elaborerà i dati al termine di ciascun intervallo. Si raccomanda di abilitare solo i metodi che si intende utilizzare. Il processo di valutazione itererà in tutti i metodi abilitati di suddivisione del tempo, pertanto tanti più metodi saranno abilitati tanto più lenta sarà l\'elaborazione.';
$string['viewprediction'] = 'Visualizza dettagli pronostico';
