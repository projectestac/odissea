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
 * Strings for component 'analytics', language 'it', version '4.1'.
 *
 * @package     analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analysablenotused'] = 'Il modello analizzabile {$a->analysableid} non è utilizzato: {$a->errors}';
$string['analysablenotvalidfortarget'] = 'Il modello analizzabile {$a->analysableid} non è valido per questo obiettivo: {$a->result}';
$string['analysisinprogress'] = 'Analisi ancora in corso da una elaborazione precedente';
$string['analytics'] = 'Analitica';
$string['analyticsdisabled'] = 'L\'analitica è disabilitata. È possibile abilitarla da "Amministrazione del sito" > "Funzionalità avanzate".';
$string['analyticslogstore'] = 'Log store da utilizzare per l\'analitica';
$string['analyticslogstore_help'] = 'Il log store che sarà utilizzato dalle API dell\'analitica per leggere l\'attività degli utenti.';
$string['analyticssettings'] = 'Impostazioni analitica';
$string['analyticssiteinfo'] = 'Informazioni sul sito';
$string['calclifetime'] = 'Mantieni i calcoli dell\'analitica per';
$string['configlcalclifetime'] = 'Imposta il tempo di mantenimento dei calcoli dell\'analitica. Da notare che eventuali pronostici non saranno eliminati, saranno eliminati solamente i dati utilizzati per generarli. L\'impostazione di default rappresenta una buon scelta, tuttavia se le tabelle dei calcoli vengono utilizzate anche per altri scopi è possibile aumentare tali valori.';
$string['defaultpredictionsprocessor'] = 'Elaboratore di pronostici di default';
$string['defaultpredictoroption'] = 'Elaboratore di default ({$a})';
$string['defaulttimesplittingmethods'] = 'Intervalli di analisi di default per la valutazione del modello';
$string['defaulttimesplittingmethods_help'] = 'L\'intervallo di analisi imposta quando il motore dei pronostici elaborerà i dati e la porzione di log da tenere in considerazione. Il processo di valutazione itererà in tutti i metodi abilitati di suddivisione del tempo a meno che siano indicati specifici intervalli di elaborazione.';
$string['disabledmodel'] = 'Modello disabilitato';
$string['erroralreadypredict'] = 'Il file {$a} è già stato utilizzato per generare pronostici.';
$string['errorcannotreaddataset'] = 'Non è possibile leggere il file {$a} del dataset.';
$string['errorcannotusetimesplitting'] = 'L\'Intervallo di analisi impostato non può essere utilizzato con questo modello.';
$string['errorcannotwritedataset'] = 'Non è possibile scrivere il file {$a} del dataset.';
$string['errorexportmodelresult'] = 'Non è possibile esportare il modello di machine learning.';
$string['errorimport'] = 'Si è verificato un errore durante l\'importazione del file json.';
$string['errorimportmissingclasses'] = 'I seguenti componenti dell\'analitica non sono disponibili sul sito: {$a->missingclasses}.';
$string['errorimportmissingcomponents'] = 'Il modello richiede l\'installazione dei seguenti plugin: {$a}. Da notare che le versioni non devono necessariamente corrispondere alle versioni installate, si consiglia di installare versioni uguali o successive.';
$string['errorimportversionmismatches'] = 'La versione dei seguenti componenti non corrisponde da quella installata nel sito: {$a}. È possibile utilizzare l\'opzione \'Ignora mancate corrispondenze di versione\' per ignorare le differenze.';
$string['errorinvalidcontexts'] = 'Alcuni dei contesti selezionati non possono essere utilizzati con questo obiettivo.';
$string['errorinvalidindicator'] = 'Indicatore {$a} non valido';
$string['errorinvalidtarget'] = 'Obiettivo {$a} non valido';
$string['errorinvalidtimesplitting'] = 'L\'Intervallo di analisi non è valido: per favore verificare di aver inserito il nome qualificato della classe.';
$string['errornocontextrestrictions'] = 'L\'obiettivo selezionato non supporta la limitazione dei contesti.';
$string['errornoexportconfig'] = 'Si è verificato un problema durante l\'esportazione della configurazione del modello.';
$string['errornoexportconfigrequirements'] = 'È possibile esportare solamente i modelli con intervallo di analisi.';
$string['errornoindicators'] = 'Il modello non ha indicatori.';
$string['errornopredictresults'] = 'L\'elaboratore di pronostici non ha riportato risultati. Per maggiori informazioni verifica la cartella di output.';
$string['errornoroles'] = 'I ruoli di studente o docente non sono stati impostati. È possibile impostarli nella pagina di impostazione dell\'analitica';
$string['errornotarget'] = 'Il modello non ha obiettivi.';
$string['errornotimesplittings'] = 'Il modello non ha intervalli di analisi.';
$string['errorpredictioncontextnotavailable'] = 'Il contesto del pronostico non è più disponibile.';
$string['errorpredictionformat'] = 'Il formato di calcolo del pronostico è errato';
$string['errorpredictionnotfound'] = 'Il pronostico non è stato trovato';
$string['errorpredictionsprocessor'] = 'Si è verificato un errore dell\'elaboratore di pronostici: {$a}';
$string['errorpredictwrongformat'] = 'Non è possibile decodificare i dati di ritorno dell\'elaboratore di pronostici: "{$a}"';
$string['errorprocessornotready'] = 'L\'elaboratore di pronostici selezionato non è pronto: {$a}';
$string['errorsamplenotavailable'] = 'Il campione pronosticato non è più disponibile.';
$string['errorunexistingmodel'] = 'Il modello {$a} non esiste';
$string['errorunexistingtimesplitting'] = 'L\'intervalli di analisi selezionato non è disponibile.';
$string['errorunknownaction'] = 'Azione sconosciuta';
$string['eventinsightsviewed'] = 'Visualizzazione considerazione';
$string['eventpredictionactionstarted'] = 'Avvio elaborazione di pronostici';
$string['fixedack'] = 'Accetta';
$string['incorrectlyflagged'] = 'Contrassegnate erroneamente';
$string['insightinfomessageaction'] = '{$a->text}: {$a->url}';
$string['insightinfomessagehtml'] = 'Il sistema ha generato alcune considerazioni.';
$string['insightinfomessageplain'] = 'Il sistema ha generato alcune considerazioni: {$a}';
$string['insightmessagesubject'] = 'Nuova considerazione su "{$a}"';
$string['invalidanalysablefortimesplitting'] = 'Non può essere analizzato utilizzando l\'intervallo di analisi il metodo {$a} .';
$string['invalidtimesplitting'] = 'Prima di poterlo utilizzare per l\'addestramento, il modello con ID {$a} richiede un intervallo di analisi.';
$string['levelinstitution'] = 'Livello formativo';
$string['levelinstitutionisced0'] = 'Scuola dell\'infanzia';
$string['levelinstitutionisced1'] = 'Scuola primaria';
$string['levelinstitutionisced2'] = 'Scuola secondaria primo grado';
$string['levelinstitutionisced3'] = 'Scuola secondaria secondo grado';
$string['levelinstitutionisced4'] = 'Formazione professionale post superiori (può includere formazione aziendale o di ONG)';
$string['levelinstitutionisced5'] = 'Laurea triennale (può includere formazione aziendale o di ONG)';
$string['levelinstitutionisced6'] = 'Laurea o livello equivalente';
$string['levelinstitutionisced7'] = 'Master o livello equivalente';
$string['levelinstitutionisced8'] = 'Dottorato o livello equivalente';
$string['modeinstruction'] = 'Tipo di formazione';
$string['modeinstructionblendedhybrid'] = 'Mista o ibrida';
$string['modeinstructionfacetoface'] = 'In presenza';
$string['modeinstructionfullyonline'] = 'Interamente online';
$string['modeloutputdir'] = 'Cartella di output del modello';
$string['modeloutputdirinfo'] = 'La cartella dove l\'elaboratore di pronostici salverà le informazioni da valutare. È utile per scopi di debugging e ricerca.';
$string['modeloutputdirwithdefaultinfo'] = 'La cartella dove l\'elaboratore di pronostici salverà le informazioni da valutare. È utile per scopi di debugging e ricerca. Non compilando il campo, di default sarà utilizzato {$a}.';
$string['modeltimelimit'] = 'Limite temporale per l\'analisi del modello';
$string['modeltimelimitinfo'] = 'Limita il tempo impiegato da ogni modello per analizzare i contenuti del sito.';
$string['neutral'] = 'Neutre';
$string['neverdelete'] = 'Non eliminare i calcoli';
$string['nocourses'] = 'Non ci sono corsi da analizzare';
$string['nodata'] = 'Non ci sono dati da analizzare';
$string['noevaluationbasedassumptions'] = 'I modelli basati sulle ipotesi non possono essere valutati.';
$string['noinsights'] = 'Non ci sono considerazioni';
$string['noinsightsmodel'] = 'Il modello non genera considerazioni.';
$string['nonewdata'] = 'Non ci sono nuovi dati. Il modello verrà analizzato allo scadere del prossimo intervallo di analisi.';
$string['nonewranges'] = 'Non ci sono nuovi pronostici. Il modello verrà analizzato allo scadere del prossimo intervallo di analisi.';
$string['nopredictionsyet'] = 'Non ci sono pronostici disponibili';
$string['noranges'] = 'Ancora non ci sono pronostici';
$string['notapplicable'] = 'Non applicabile';
$string['notrainingbasedassumptions'] = 'I modelli basati sulle ipotesi non richiedono addestramento';
$string['notuseful'] = 'Non utili';
$string['novaliddata'] = 'Non sono disponibili dati';
$string['novalidsamples'] = 'Non sono disponibili campioni validi';
$string['onlycli'] = 'Elaborazione processi dell\'analitica solo da linea di comando';
$string['onlycliinfo'] = 'I processi dell\'analitica come valutare i modelli, addestrare algoritmi di machine learning o formulare pronostici, possono essere molto onerosi ed è possibile configurare il loro lancio solo via elaborazione pianificata tramite cron. Disabilitando l\'impostazione, i processi dell\'analitica potranno essere lanciati manualmente da interfaccia.';
$string['percentonline'] = 'Percentuale online';
$string['percentonline_help'] = 'Nel caso in cui l\'organizzazione offra corsi misti (parte online e parte in presenza), indicare la percentuale delle attività online. Utilizzare un valore numerico tra 0 e 100.';
$string['predictionsprocessor'] = 'Elaboratore di pronostici';
$string['predictionsprocessor_help'] = 'L\'elaboratore di pronostici è un sistema di machine learning che elabora gli insiemi di dati generati dal calcolo dei modelli degli  indicatori e degli obiettivi. Ciascun modello può utilizzare elaboratori diversi. L\'elaboratore configurato con questa impostazione sarà quello di default.';
$string['privacy:metadata:analytics:analyticsmodels'] = 'Modelli analitici';
$string['privacy:metadata:analytics:analyticsmodels:usermodified'] = 'Utente che ha modificato il modello';
$string['privacy:metadata:analytics:analyticsmodelslog'] = 'Log utilizzato per il modello analitico';
$string['privacy:metadata:analytics:analyticsmodelslog:usermodified'] = 'Utente che ha modificato il log';
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
$string['privacy:metadata:analytics:predictions:rangeindex'] = 'Indice dell\'intervallo di analisi';
$string['privacy:metadata:analytics:predictions:sampleid'] = 'ID del campione';
$string['privacy:metadata:analytics:predictions:timecreated'] = 'Data di creazione del pronostico';
$string['privacy:metadata:analytics:predictions:timeend'] = 'Data di fine del calcolo';
$string['privacy:metadata:analytics:predictions:timestart'] = 'Data di inizio del calcolo';
$string['processingsitecontents'] = 'Elaborazione del contenuto del sito';
$string['successfullyanalysed'] = 'Analizzato correttamente';
$string['timesplittingmethod'] = 'Intervallo di analisi';
$string['timesplittingmethod_help'] = 'L\'intervallo di analisi imposta la frequenza di elaborazione dei pronostici e la porzione del log delle attività da elaborare. In altre parole durata del corso viene divisa in intervalli e i pronostici saranno elaborati al termine di ciascun intervallo.';
$string['timesplittingmethod_link'] = 'Time_splitting_methods';
$string['typeinstitution'] = 'Tipo di istituzione';
$string['typeinstitutionacademic'] = 'Università';
$string['typeinstitutionngo'] = 'Organizzazione non governativa (NGO)';
$string['typeinstitutiontraining'] = 'Azienda';
$string['useful'] = 'Utili';
$string['viewdetails'] = 'Visualizza dettagli';
$string['viewinsight'] = 'Visualizza considerazione';
$string['viewinsightdetails'] = 'Visualizza dettagli della considerazione';
$string['viewprediction'] = 'Visualizza dettagli pronostico';
$string['washelpful'] = 'È stata utile?';
