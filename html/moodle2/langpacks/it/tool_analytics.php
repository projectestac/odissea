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
 * Strings for component 'tool_analytics', language 'it', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_analytics
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Accuratezza';
$string['allpredictions'] = 'Tutti i pronostici';
$string['analysingsitedata'] = 'Analisi del sito in corso';
$string['analyticmodels'] = 'Modelli analitici';
$string['bettercli'] = 'La valutazione dei modelli e la generazione di pronostici implicano elaborazioni molto pesanti. Si raccomanda di eseguirli via linea di comando.';
$string['cantguessenddate'] = 'Non è possibile stimare la data di fine';
$string['cantguessstartdate'] = 'Non è possibile stimare la data d\'inizio';
$string['clearmodelpredictions'] = 'Sei sicuro di ripulire i pronostici "{$a}"?';
$string['clearpredictions'] = 'Ripulisci pronostici';
$string['clienablemodel'] = 'E\' possibile abilitare il modello selezionando un metodo di suddivisione del tempo tramite la corrispondente ID. E\' anche possibile abilitarla in seguito tramite l\'interfaccia web (\'nessuno\' per uscire).';
$string['clievaluationandpredictions'] = 'Una elaborazione pianificata utilizza i modelli abilitati e formula i pronostici. La valutazione dei modelli tramite interfaccia web è disabilitata. E\' possibile abilitare l\'elaborazione manuale via interfaccia web disabilitando l\'impostazione <a href="{$a}">\'onlycli\'</a> dell\'analitica.';
$string['clievaluationandpredictionsnoadmin'] = 'Una elaborazione pianificata utilizza i modelli abilitati e formula i pronostici. La valutazione dei modelli tramite interfaccia web è disabilitata e può essere abilitata solo da un amministratore. del sito.';
$string['disabled'] = 'Disabilitato';
$string['editmodel'] = 'Modifica modello "{$a}"';
$string['edittrainedwarning'] = 'Il modello è stato già addestrato. Da notare che cambiando gli indicatori o il relativo metodo di suddivisione del tempo eliminerà i pronostici esistenti e ne genererà di nuovi.';
$string['enabled'] = 'Abilitato';
$string['errorcantenablenotimesplitting'] = 'Per abilitare il modello è necessario selezionare un metodo di suddivisione del tempo';
$string['errornoenabledandtrainedmodels'] = 'Non sono presenti modelli abilitati ed addestrati da pronosticare.';
$string['errornoenabledmodels'] = 'Non sono presenti modelli abilitati da addestrare.';
$string['errornoexport'] = 'E\' possibile esportare solo i modelli addestrati.';
$string['errornostaticedit'] = 'I modelli basati sulle ipotesi non possono essere modificati.';
$string['errornostaticevaluated'] = 'I modelli basati sulle ipotesi non possono essere valutati. Tali modelli si ritengono corretti al 100% sulla base di come sono stati definiti.';
$string['errornostaticlog'] = 'I modelli basati sulle ipotesi non possono essere valutati perché non ci sono log di performance.';
$string['erroronlycli'] = 'Elaborazione solo da linea di comando';
$string['errortrainingdataexport'] = 'Non è stato possibile esportare i dati di addestramento del modello.';
$string['evaluate'] = 'Valuta';
$string['evaluatemodel'] = 'Valuta modello';
$string['evaluationinbatches'] = 'I contenuti del sito sono calcoalti e memorizzati in gruppi. Il processo di valutazione può essere fermato in qualsiasi momento e riprenderà successivamente dal punto dove è stato interrotto';
$string['export'] = 'Esporta';
$string['exporttrainingdata'] = 'Esportazione dei dati di addestramento';
$string['extrainfo'] = 'Informazioni';
$string['generalerror'] = 'Errore nella valutazione. Codice di stato {$a}';
$string['getpredictions'] = 'Ottieni i pronostici';
$string['getpredictionsresults'] = 'Risultati con l\'utilizzo della suddivisone della durata del corso {$a->name}';
$string['getpredictionsresultscli'] = 'Risultati con l\'utilizzo della suddivisone della durata del corso {$a->name} (id: {$a->id})';
$string['goodmodel'] = 'E\' un buon modello da utilizzare per le predizioni. Abilitalo per iniziare a ottenere predizioni.';
$string['indicators'] = 'Indicatori';
$string['info'] = 'Informazioni';
$string['insights'] = 'Considerazioni';
$string['invalidanalysables'] = 'Elementi non validi del sito';
$string['invalidanalysablesinfo'] = 'La pagina elenca gli elementi del sito che sono analizzabili ma che non possono essere utilizzati per pronosticare. Gli elementi presenti nell\'elenco non possono essere utilizzati né per addestrare il modello né il modello può utilizzarli per ricavare pronostici.';
$string['invalidanalysablestable'] = 'Tabella degli elementi analizzabili non validi';
$string['invalidprediction'] = 'Non utilizzabili nei pronostici';
$string['invalidtraining'] = 'Non valido per addestrare il modello';
$string['loginfo'] = 'Inserisci nel log informazioni aggiuntive';
$string['modelid'] = 'ID del modello';
$string['modelinvalidanalysables'] = 'Elemento analizzabile non valido per il modello "{$a}"';
$string['modelresults'] = '{$a} risultati';
$string['modeltimesplitting'] = 'Suddivisone del tempo';
$string['nextpage'] = 'Pagina successiva';
$string['nodatatoevaluate'] = 'Non sono presenti dati per valuatare il modello';
$string['nodatatopredict'] = 'Non ci sono nuovi elementi per ottenere pronostici su';
$string['nodatatotrain'] = 'Non ci sono nuovi dati utilizzabili per l\'addestramento';
$string['noinvalidanalysables'] = 'Il sito non contiene elementi analizzabili non validi.';
$string['notdefined'] = 'Non ancora definito';
$string['pluginname'] = 'Modelli dell\'analitica';
$string['predictionprocessfinished'] = 'Elaborazione del pronostico terminata';
$string['predictionresults'] = 'Risultati del pronostico';
$string['predictmodels'] = 'Elaborazione pronostici dei modelli';
$string['predictorresultsin'] = 'L\'elaborazione del pronostico ha inserito informazioni nella cartella {$a}';
$string['previouspage'] = 'Pagina precedente';
$string['privacy:metadata'] = 'Il plugin \'Modelli dell\'analitica\' non memorizza dati personali.';
$string['sameenddate'] = 'L\'attuale data di fine va bene';
$string['samestartdate'] = 'L\'attuale data di\'inizio va bene';
$string['target'] = 'Obiettivo';
$string['timesplittingnotdefined'] = 'La suddivisione del tempo non è impostata.';
$string['timesplittingnotdefined_help'] = 'Prima di abilitare il modello, devi selezionare un metodo di suddivisione del tempo.';
$string['trainandpredictmodel'] = 'Addestramento del modello e calcolo dei pronostici';
$string['trainingprocessfinished'] = 'Addestramento terminato';
$string['trainingresults'] = 'Risultati addestramento';
$string['trainmodels'] = 'Addestramento modelli';
$string['viewlog'] = 'Log';
$string['weeksenddateautomaticallyset'] = 'Data di fine impostata automaticamente in base alla data di inizio ed al numero di sezioni.';
$string['weeksenddatedefault'] = 'Data di fine calcoalta automaticamente in base alla data di inizio del corso';
