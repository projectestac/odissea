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
 * Strings for component 'tool_analytics', language 'it', version '4.1'.
 *
 * @package     tool_analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Accuratezza';
$string['actionexecutedgroupedusefulness'] = 'Raggruppamento azioni';
$string['actions'] = 'Azioni';
$string['actionsexecutedbyusers'] = 'Azioni svolte dagli utenti';
$string['actionsexecutedbyusersfor'] = 'Azioni svolte dagli utenti relative al modello "{$a}"';
$string['allpredictions'] = 'Tutti i pronostici';
$string['alltimesplittingmethods'] = 'Tutti gli intervalli di analisi';
$string['analysingsitedata'] = 'Analisi del sito in corso';
$string['analysis'] = 'Analisi';
$string['analyticmodels'] = 'Modelli analitici';
$string['bettercli'] = 'La valutazione dei modelli e la generazione di pronostici implicano elaborazioni molto pesanti. Si raccomanda di eseguirli via linea di comando.';
$string['cantguessenddate'] = 'Non è possibile stimare la data di fine';
$string['cantguessstartdate'] = 'Non è possibile stimare la data d\'inizio';
$string['classdoesnotexist'] = 'La classe {$a} non esiste';
$string['clearmodelpredictions'] = 'Sei sicuro di ripulire i pronostici "{$a}"?';
$string['clearpredictions'] = 'Ripulisci pronostici';
$string['clienablemodel'] = 'È possibile abilitare il modello selezionando un intervallo di analisi tramite la corrispondente ID. È anche possibile abilitarlo in seguito tramite l\'interfaccia web (\'nessuno\' per uscire).';
$string['clievaluationandpredictions'] = 'Una elaborazione pianificata utilizza i modelli abilitati e formula i pronostici. La valutazione dei modelli tramite interfaccia web è disabilitata. È possibile abilitare l\'elaborazione manuale via interfaccia web disabilitando l\'impostazione <a href="{$a}">\'onlycli\'</a> dell\'analitica.';
$string['clievaluationandpredictionsnoadmin'] = 'Una elaborazione pianificata utilizza i modelli abilitati e formula i pronostici. La valutazione dei modelli tramite interfaccia web è disabilitata e può essere abilitata solo da un amministratore. del sito.';
$string['component'] = 'Componente';
$string['componentcore'] = 'Core';
$string['componentselect'] = 'Seleziona tutti i modelli forniti dal componente \'{$a}\'';
$string['componentselectnone'] = 'Deseleziona tutto';
$string['contexts'] = 'Contesti';
$string['contexts_help'] = 'Il modello sarà limitato a questo insieme di contesti. La limitazione non sarà applicata se non si selezionano contesti.';
$string['createmodel'] = 'Crea modello';
$string['currenttimesplitting'] = 'Intervallo di analisi in uso';
$string['delete'] = 'Elimina';
$string['deletemodelconfirmation'] = 'Sei sicuro di eliminare "{$a}"? L\'operazione non potrà essere annullata.';
$string['disabled'] = 'Disabilitato';
$string['editmodel'] = 'Modifica modello "{$a}"';
$string['edittrainedwarning'] = 'Il modello è stato già addestrato. Da notare che cambiando gli indicatori o il relativo intervallo di analisi, saranno eliminati i pronostici esistenti e ne genererà di nuovi.';
$string['enabled'] = 'Abilitato';
$string['errorcantenablenotimesplitting'] = 'Per abilitare il modello è necessario selezionare un intervallo di analisi';
$string['errornoenabledandtrainedmodels'] = 'Non sono presenti modelli abilitati ed addestrati da pronosticare.';
$string['errornoenabledmodels'] = 'Non sono presenti modelli abilitati da addestrare.';
$string['errornoexport'] = 'È possibile esportare solo i modelli addestrati.';
$string['errornostaticevaluated'] = 'I modelli basati sulle ipotesi non possono essere valutati. Tali modelli si ritengono corretti al 100% sulla base di come sono stati definiti.';
$string['errornostaticlog'] = 'I modelli basati sulle ipotesi non possono essere valutati perché non ci sono log di performance.';
$string['erroronlycli'] = 'Elaborazione solo da linea di comando';
$string['errortrainingdataexport'] = 'Non è stato possibile esportare i dati di addestramento del modello.';
$string['evaluate'] = 'Valuta';
$string['evaluatemodel'] = 'Valuta modello';
$string['evaluationinbatches'] = 'I contenuti del sito sono calcoalti e memorizzati in gruppi. Il processo di valutazione può essere fermato in qualsiasi momento e riprenderà successivamente dal punto dove è stato interrotto';
$string['evaluationmode'] = 'Modalità di valutazione';
$string['evaluationmode_help'] = 'Sono disponibili due modalità di valutazione:

* Modello addestrato - i dati del sito saranno utilizzati per valutare l\'accuratezza del modello addestrato.
* Configurazione - I dati del sito saranno suddivisi in dati di addestramento e di test in modo da addestrare il modello e valutare l\'accuratezza della configurazione del modello

I modelli addestrati sono disponibili solamente se è stato importato nel sito un modello addestrato che non è stato addestrato nuovamente utilizzando i dati del sito.';
$string['evaluationmodecolconfiguration'] = 'Configurazione';
$string['evaluationmodecoltrainedmodel'] = 'Modello addestrato';
$string['evaluationmodeconfiguration'] = 'Valuta la configurazione del modello';
$string['evaluationmodeinfo'] = 'Il modello è stato importato. È possibile valutarne le prestazioni oppure valutare le prestazioni della configurazione del modello utilizzando i dati del sito.';
$string['evaluationmodetrainedmodel'] = 'Valuta il modello addestrato';
$string['executescheduledanalysis'] = 'Esegui analisi schedulata';
$string['export'] = 'Esporta';
$string['exportincludeweights'] = 'Includi i pesi del modello addestrato';
$string['exportmodel'] = 'Esporta configurazione';
$string['exporttrainingdata'] = 'Esportazione dei dati di addestramento';
$string['extrainfo'] = 'Informazioni';
$string['generalerror'] = 'Errore nella valutazione. Codice di stato {$a}';
$string['goodmodel'] = 'È un buon modello da utilizzare per le predizioni. Abilitalo per iniziare a ottenere predizioni.';
$string['ignoreversionmismatches'] = 'Ignora differenze di versione';
$string['ignoreversionmismatchescheckbox'] = 'Le differenze di versione tra sito origine e destinazione saranno ignorate.';
$string['importedsuccessfully'] = 'Il modello è stato importato correttamente.';
$string['importmodel'] = 'Importa modello';
$string['indicators'] = 'Indicatori';
$string['indicators_help'] = 'Gli indicatori rappresentano ciò che si ritene utile per ottenere un pronostico accurato sull\'obiettivo.';
$string['indicators_link'] = 'Indicators';
$string['indicatorsnum'] = 'Numero di indicatori: {$a}';
$string['info'] = 'Informazioni';
$string['insights'] = 'Considerazioni';
$string['insightsreport'] = 'Report delle considerzioni';
$string['invalidanalysables'] = 'Elementi non validi del sito';
$string['invalidanalysablesinfo'] = 'La pagina elenca gli elementi del sito che sono analizzabili ma che non possono essere utilizzati per pronosticare. Gli elementi presenti nell\'elenco non possono essere utilizzati né per addestrare il modello né il modello può utilizzarli per ricavare pronostici.';
$string['invalidanalysablestable'] = 'Tabella degli elementi analizzabili non validi';
$string['invalidcurrenttimesplitting'] = 'L\'attuale intervallo di analisi non è valido per l\'obiettivo del modello. Per favore selezionare un altro intervallo.';
$string['invalidindicatorsremoved'] = 'È stato aggiunto un nuovo modello. Gli indicatori che non funzionano con l\'obiettivo selezionato sono stati rimossi automaticamente.';
$string['invalidprediction'] = 'Non utilizzabili nei pronostici';
$string['invalidtimesplitting'] = 'L\'intervallo di analisi selezionato non è valido per l\'obiettivo.';
$string['invalidtimesplittinginmodels'] = 'L\'intervallo di analisi utilizzato da alcuni modelli non è valido. Per favore selezionare un altro intervallo per i seguenti modelli: {$a}';
$string['invalidtraining'] = 'Non valido per addestrare il modello';
$string['loginfo'] = 'Inserisci nel log informazioni aggiuntive';
$string['missingmoodleversion'] = 'Il file importato non ha un numero di versione';
$string['modelid'] = 'ID del modello';
$string['modelinvalidanalysables'] = 'Elemento analizzabile non valido per il modello "{$a}"';
$string['modelname'] = 'Nome del modello';
$string['modelresults'] = '{$a} risultati';
$string['modeltimesplitting'] = 'Intervallo di analisi';
$string['newmodel'] = 'Nuovo modello';
$string['nextpage'] = 'Pagina successiva';
$string['noactionsfound'] = 'L\'utente non ha svolte nessuna azione sulla considerazione generata.';
$string['nodatatoevaluate'] = 'Non sono presenti dati per valuatare il modello';
$string['nodatatopredict'] = 'Non ci sono nuovi elementi sui quali elaborare pronostici.';
$string['nodatatotrain'] = 'Non ci sono nuovi dati utilizzabili per l\'addestramento.';
$string['noinvalidanalysables'] = 'Il sito non contiene elementi analizzabili non validi.';
$string['notdefined'] = 'Non ancora definito';
$string['pluginname'] = 'Modelli dell\'analitica';
$string['predictionprocessfinished'] = 'Elaborazione del pronostico terminata';
$string['predictionresults'] = 'Risultati del pronostico';
$string['predictmodels'] = 'Elaborazione pronostici dei modelli';
$string['predictorresultsin'] = 'L\'elaborazione del pronostico ha inserito informazioni nella cartella {$a}';
$string['previouspage'] = 'Pagina precedente';
$string['privacy:metadata'] = 'Il plugin \'Modelli dell\'analitica\' non memorizza dati personali.';
$string['restoredefault'] = 'Ripristina modello di default';
$string['restoredefaultempty'] = 'Per favore seleziona il modello da ripristinare';
$string['restoredefaultinfo'] = 'Questi modelli di default risultano mancanti oppure sono stati modificati dopo l\'installazione. È possibile ripristinare i modelli di default selezionati.';
$string['restoredefaultnone'] = 'Sono stati creati tutti i modelli \'core\' di default e quelli dei plugin eventualmente installati. Nuovi modelli non sono stati trovati, non ci sono elementi da ripristinare';
$string['restoredefaultsome'] = 'Sono stati ri-creati correttamente i seguenti nuovi modelli: {$a->count}';
$string['restoredefaultsubmit'] = 'Ripristina selezionati';
$string['sameenddate'] = 'L\'attuale data di fine va bene';
$string['samestartdate'] = 'L\'attuale data di\'inizio va bene';
$string['scheduledanalysisresults'] = 'Risultati ottenuti utilizzando l\'intervallo di analisi {$a->name}';
$string['scheduledanalysisresultscli'] = 'Risultati ottenuti utilizzando l\'intervallo di analisi {$a->name} (id: {$a->id})';
$string['selecttimesplittingforevaluation'] = 'Selezionare l\'intervallo di analisi da utilizzare per valutare la configurazione del modello.';
$string['target'] = 'Obiettivo';
$string['target_help'] = 'L\'obiettivo rappresenta ciò che il modello pronosticherà.';
$string['target_link'] = 'Targets';
$string['timesplittingnotdefined'] = 'L\'intervallo di analisi non è impostato.';
$string['timesplittingnotdefined_help'] = 'Prima di abilitare il modello, devi selezionare un intervallo di analisi.';
$string['trainandpredictmodel'] = 'Addestramento del modello e calcolo dei pronostici';
$string['trainingprocessfinished'] = 'Addestramento terminato';
$string['trainingresults'] = 'Risultati addestramento';
$string['trainmodels'] = 'Addestramento modelli';
$string['versionnotsame'] = 'Il file importato è di una versione differente ({$a->importedversion}) rispetto all\'attuale ({$a->version})';
$string['viewlog'] = 'Log delle valutazioni';
$string['weeksenddateautomaticallyset'] = 'Data di fine impostata automaticamente in base alla data di inizio ed al numero di sezioni.';
$string['weeksenddatedefault'] = 'Data di fine calcoalta automaticamente in base alla data di inizio del corso';
