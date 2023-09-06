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
 * Strings for component 'quiz_statistics', language 'it', version '4.1'.
 *
 * @package     quiz_statistics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actualresponse'] = 'Risposte reali';
$string['allattempts'] = 'tutti i tentativi';
$string['allattemptsavg'] = 'Voto medio di tutti i tentativi';
$string['allattemptscount'] = 'Numero totale dei tentativi completi valutati';
$string['analysisnameonly'] = '"{$a->name}"';
$string['analysisno'] = '({$a->number}) "{$a->name}"';
$string['analysisnovariant'] = '({$a->number}) "{$a->name}" variante {$a->variant}';
$string['analysisofresponses'] = 'Analisi delle risposte';
$string['analysisofresponsesfor'] = 'Analisi delle risposte per {$a}';
$string['analysisvariant'] = '"{$a->name}" variante {$a->variant}';
$string['attempts'] = 'Tentativi';
$string['attemptsall'] = 'tutti i tentativi';
$string['attemptsfirst'] = 'primo tentativo';
$string['backtoquizreport'] = 'Torna alla pagina home delle statistiche';
$string['calculatefrom'] = 'Calcolo statistiche da';
$string['calculatingallstats'] = 'È in corso l\'analisi delle risposte e il calcolo delle statistiche del quiz e delle domande e';
$string['cic'] = 'Coefficiente di consistenza interna (per {$a})';
$string['completestatsfilename'] = 'completestats';
$string['count'] = 'Numero';
$string['counttryno'] = 'Tentativo numero {$a}';
$string['coursename'] = 'Nome corso';
$string['detailedanalysis'] = 'Analisi più dettagliata delle risposte a questa domanda';
$string['detailedanalysisforvariant'] = 'Analisi più dettagliata delle risposte alla variante {$a} di questa domanda';
$string['discrimination_index'] = 'Indice di discriminazione';
$string['discriminative_efficiency'] = 'Efficienza discriminante';
$string['downloadeverything'] = 'Scarica report completo come';
$string['duration'] = 'Aperto per';
$string['effective_weight'] = 'Peso effettivo';
$string['errordeleting'] = 'Si è verificato un errore durante l\'eliminazione di {$a} vecchi record.';
$string['errormedian'] = 'Si è verificato un errore ricavando la mediana';
$string['errorpowerquestions'] = 'Si è verificato un errore ricavando i dati per il calcolo della varianza dei punteggi delle domande';
$string['errorpowers'] = 'Si è verificato un errore ricavando i dati per il calcolo della varianza dei punteggi dei quiz';
$string['errorrandom'] = 'Si è verificato un errore ricavando i dati del sotto elemento';
$string['errorratio'] = 'Quoziente d\'errore (per {$a})';
$string['errorstatisticsquestions'] = 'Si è verificato un errore ricavando i dati per il calcolo delle statistiche   dei punteggi delle domande';
$string['facility'] = 'Indice di abilità';
$string['firstattempts'] = 'primi tentativi';
$string['firstattemptsavg'] = 'Voto medio dei primi tentativi';
$string['firstattemptscount'] = 'Numero di primi tentativi completati e valutati';
$string['frequency'] = 'Frequenza';
$string['highestattempts'] = 'tentativo migliore';
$string['highestattemptsavg'] = 'Media delle valutazioni dei tentativi migliori';
$string['intended_weight'] = 'Peso previsto';
$string['kurtosis'] = 'Curtosi della distribuzione dei voti (per {$a})';
$string['lastattempts'] = 'ultimi tentativi';
$string['lastattemptsavg'] = 'Media delle valutazioni degli ultimi tentativi';
$string['lastcalculated'] = 'Calcolo più recente: {$a->lastcalculated} fa. Tentativi effettuati dopo il calcolo più recente: {$a->count}.';
$string['maximumfacility'] = 'Abilità massima';
$string['median'] = 'Mediana dei voti (per {$a})';
$string['medianfacility'] = 'Mediana dell\'abilità';
$string['minimumfacility'] = 'Abilità minima';
$string['modelresponse'] = 'Modello di risposta';
$string['nameforvariant'] = 'Variante {$a->variant} di {$a->name}';
$string['negcovar'] = 'Covarianza negativa del voto rispetto al voto del tentativo complessivo';
$string['negcovar_help'] = 'Il voto di questa domanda relativo a questo insieme di tentativi varia in modo opposto rispetto al voto complessivo di tutti i tentativi. Questo significa che che il voto complessivo tende ad essere inferiore alla media quando il voto per questa domanda è superiore alla media e vice-versa.

In questo caso la nostra equazione per ricavare il peso ottimale della domanda non funziona. The calculations for effective question weight for other questions in this quiz are the effective question weight for these questions if the highlighted questions with a negative covariance are given a maximum grade of zero.

If you edit a quiz and give these question(s) with negative covariance a max grade of zero then the effective question weight of these questions will be zero and the real effective question weight of other questions will be as calculated now.';
$string['nogradedattempts'] = 'Non sono presenti tentativi del quiz, oppure i tentativi richiedono la valutazione manuale.';
$string['nostudentsingroup'] = 'In questo gruppo non ci sono studenti';
$string['optiongrade'] = 'Credito parziale';
$string['partofquestion'] = 'Parte di domanda';
$string['pluginname'] = 'Statisitche';
$string['position'] = 'Posizione';
$string['positions'] = 'Posizione/i';
$string['privacy:metadata'] = 'Anche se il plugin Quiz \'Statistiche\' possiede tabelle nel database, i dati in questione sono dati aggregati e non riguardano un singolo utente.';
$string['questioninformation'] = 'Informazioni domanda';
$string['questionname'] = 'Nome domanda';
$string['questionnumber'] = 'Q#';
$string['questionstatistics'] = 'Statistiche sulle domande';
$string['questionstatsfilename'] = 'questionstats';
$string['questiontype'] = 'Tipo di domanda';
$string['quizinformation'] = 'Informazioni quiz';
$string['quizname'] = 'Nome quiz';
$string['quizoverallstatistics'] = 'Statistiche complessive quiz';
$string['quizstructureanalysis'] = 'Analisi struttura quiz';
$string['random_guess_score'] = 'Indice delle risposte date a caso';
$string['rangebetween'] = '{$a->min} − {$a->max}';
$string['recalculatenow'] = 'Ricalcola ora';
$string['recalculatetask'] = 'Ricalcola statistiche delle domande';
$string['reportsettings'] = 'Impostazioni di calcolo delle statistiche';
$string['response'] = 'Risposta data';
$string['skewness'] = 'Asimmetria della distribuzione dei voti (per {$a})';
$string['slotstructureanalysis'] = 'Analisi strutturale per la domanda numero {$a}';
$string['standarddeviation'] = 'Deviazione standard (per {$a})';
$string['standarddeviationq'] = 'Deviazione standard';
$string['standarderror'] = 'Errore standard (per {$a})';
$string['statistics'] = 'Statistiche';
$string['statistics:view'] = 'Visualizzare report statistici';
$string['statisticsreport'] = 'Report statistico';
$string['statisticsreportgraph'] = 'Statistiche sulla posizione delle domande';
$string['statsfor'] = 'Statistiche quiz (per {$a})';
$string['variant'] = 'Variante';
$string['viewanalysis'] = 'Visualizza dettagli';
$string['whichtries'] = 'Analizza le risposte per';
