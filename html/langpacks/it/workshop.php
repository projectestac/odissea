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
 * Strings for component 'workshop', language 'it', branch 'MOODLE_38_STABLE'
 *
 * @package   workshop
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregategrades'] = 'Ricalcola voti';
$string['aggregation'] = 'Aggregazione dei voti';
$string['allocate'] = 'Distribuisci consegne';
$string['allocatedetails'] = 'attesi: {$a->expected}<br />consegnati: {$a->submitted}<br />da distribuire: {$a->allocate}';
$string['allocation'] = 'Distribuzione consegne';
$string['allocationconfigured'] = 'Distribuzione configurata';
$string['allocationdone'] = 'Distribuzione effettuata';
$string['allocationerror'] = 'Errore durante la distribuzione';
$string['allowedfiletypesforoverallfeedback'] = 'Tipi di file consentiti da allegare al feedback';
$string['allowedfiletypesforoverallfeedback_help'] = 'I tipi di file che è consentito allegare ai feedback possono essere specificati inserendo un elenco separato da virgole con le estensioni desiderate. Lasciando il campo vuoto, sarà possibile allegare un file di qualsiasi tipo.';
$string['allowedfiletypesforsubmission'] = 'Tipi di file consentiti da allegare alla consegna';
$string['allowedfiletypesforsubmission_help'] = 'I tipi di file che è consentito allegare alle consegne possono essere specificati inserendo un elenco separato da virgole con le estensioni desiderate. Lasciando il campo vuoto, sarà possibile allegare un file di qualsiasi tipo.';
$string['allsubmissions'] = 'Tutte le consegne ({$a})';
$string['alreadygraded'] = 'Ha già un voto';
$string['areaconclusion'] = 'Contenuto della conclusione';
$string['areainstructauthors'] = 'Istruzioni di consegna';
$string['areainstructreviewers'] = 'Istruzioni per la valutazione';
$string['areaoverallfeedbackattachment'] = 'Allegati feedback complessivo';
$string['areaoverallfeedbackcontent'] = 'Testi feedback complessivo';
$string['areasubmissionattachment'] = 'Allegati alle consegne';
$string['areasubmissioncontent'] = 'Testi delle consegne';
$string['assess'] = 'Valuta';
$string['assessedexample'] = 'Consegna di esempio valutata';
$string['assessedsubmission'] = 'Valutazione consegna';
$string['assessingexample'] = 'Valutazione consegna di esempio';
$string['assessingsubmission'] = 'Valutazione consegna';
$string['assessment'] = 'Valutazione';
$string['assessmentby'] = 'di <a href="{$a->url}">{$a->name}</a>';
$string['assessmentbyfullname'] = 'Valutazione di {$a}';
$string['assessmentbyyourself'] = 'La tua valutazione';
$string['assessmentdeleted'] = 'La distribuzione della valutazione è stata rimossa';
$string['assessmentend'] = 'Fine valutazioni';
$string['assessmentendbeforestart'] = 'La data di fine valutazioni non può essere anteriore la data di inizio valutazioni';
$string['assessmentenddatetime'] = 'Fine valutazioni: {$a->daydatetime} ({$a->distanceday})';
$string['assessmentendevent'] = '{$a} fine valutazioni';
$string['assessmentform'] = 'Scheda di valutazione';
$string['assessmentofsubmission'] = '<a href="{$a->assessmenturl}">Valutazione</a> di <a href="{$a->submissionurl}">{$a->submissiontitle}</a>';
$string['assessmentreference'] = 'Valutazione di riferimento';
$string['assessmentreferenceconflict'] = 'Non è possibile valutare un invio di esempio per il quale hai fornito una valutazione di riferimento.';
$string['assessmentreferenceneeded'] = 'Per fornire una valutazione di riferimento devi valutare questo esempio . Fai click sul pulsante \'Continua\' per valutare la consegna.';
$string['assessmentsettings'] = 'Impostazioni valutazione';
$string['assessmentstart'] = 'Aperto per le valutazioni da';
$string['assessmentstartdatetime'] = 'Aperto per le valutazioni da {$a->daydatetime} ({$a->distanceday})';
$string['assessmentstartevent'] = '{$a} aperto per le valutazioni';
$string['assessmentweight'] = 'Peso della valutazione';
$string['assignedassessments'] = 'Consegne da valutare';
$string['assignedassessmentsnone'] = 'Non hai consegne assegnate da valutare';
$string['backtoeditform'] = 'Torna alla scheda di valutazione';
$string['byfullname'] = 'da <a href="{$a->url}">{$a->name}</a>';
$string['byfullnamewithoutlink'] = 'da {$a}';
$string['calculategradinggrades'] = 'Calcola la votazione delle valutazioni';
$string['calculategradinggradesdetails'] = 'attesi: {$a->expected}<br />calcolati: {$a->calculated}';
$string['calculatesubmissiongrades'] = 'Calcola la votazione delle consegne';
$string['calculatesubmissiongradesdetails'] = 'attesi: {$a->expected}<br />calcolati: {$a->calculated}';
$string['chooseuser'] = 'Scegli un utente...';
$string['clearaggregatedgrades'] = 'Elimina tutti i voti aggregati';
$string['clearaggregatedgradesconfirm'] = 'Sei certo di voler eliminare i voti aggregati delle consegne e delle valutazioni?';
$string['clearaggregatedgrades_help'] = 'I voti cumulati per le consegne e i voti per la valutazione saranno reimpostati. E\' possibile ricalcolare i voti nella Fase di valutazione.';
$string['clearassessments'] = 'Elimina valutazioni';
$string['clearassessmentsconfirm'] = 'Sei sicuro di eliminare tutte le valutazioni? Non potrai più ricavare queste informazioni, i revisori dovranno valutare nuovamente le consegne.';
$string['clearassessments_help'] = 'I voti calcolati per gli invii e per le valutazioni saranno eliminati. Le impostazioni su come sono state compilate le schede di valutazione saranno conservate ma per calcolare di nuovo i voti tutti i revisori dovranno accedere alla scheda di valutazione e salvare nuovamente i voti.';
$string['conclusion'] = 'Conclusione';
$string['conclusion_help'] = 'La conclusione viene visualizzata ai partecipanti al termine dell\'attività.';
$string['configexamplesmode'] = 'Punteggio massimo di default  per la valutazione degli esempi nei workshop';
$string['configgrade'] = 'Punteggio massimo di default per le consegne nei workshop';
$string['configgradedecimals'] = 'Cifre decimali di default da usare per visualizzare i voti.
';
$string['configgradinggrade'] = 'Punteggio massimo di default per le valutazioni nei workshop';
$string['configmaxbytes'] = 'Dimensione massima di default per i file delle consegne. Influenza tutti i workshop del sito ed è soggetto alle limitazioni dei corsi o altre impostazioni locali';
$string['configstrategy'] = 'Criterio di valutazione di default per i workshop';
$string['createsubmission'] = 'Inizia a preparare la tua consegna';
$string['crontask'] = 'Elaborazione in background: modulo workshop';
$string['daysago'] = '{$a} giorni fa';
$string['daysleft'] = '{$a} giorni mancanti';
$string['daystoday'] = 'oggi';
$string['daystomorrow'] = 'domani';
$string['daysyesterday'] = 'ieri';
$string['deadlinesignored'] = 'Le limitazioni temporali non si applicano a te.';
$string['deletesubmission'] = 'Elimina consegna';
$string['editassessmentform'] = 'Modifica scheda di valutazione';
$string['editassessmentformstrategy'] = 'Modifica scheda di valutazione ({$a})';
$string['editingassessmentform'] = 'Modifica scheda di valutazione';
$string['editingsubmission'] = 'Modifica consegne';
$string['editsubmission'] = 'Modifica consegna';
$string['err_multiplesubmissions'] = 'Durante la modifica di questo form è stata effettuata un\'altra consegna. Le consegne multiple non sono consentite.';
$string['err_removegrademappings'] = 'Non è possibile rimuovere la mappatura voti non utilizzata';
$string['evaluategradeswait'] = 'Per favore attendi mentre vengono analizzate le valutazioni e calcolati i voti';
$string['evaluation'] = 'Calcolo dei voti';
$string['evaluationmethod'] = 'Metodo di calcolo dei voti';
$string['evaluationmethod_help'] = 'Il metodo di calcolo della valutazione determina come verranno calcolati i voti. Puoi consentire il calcolo ripetuto dei voti finché non ottieni un risultato che ti soddisfi';
$string['evaluationsettings'] = 'Impostazioni di calcolo dei voti';
$string['eventassessableuploaded'] = 'Caricata consegna';
$string['eventassessmentevaluated'] = 'Assegnati voti alla valutazione';
$string['eventassessmentevaluationsreset'] = 'Reimpostati voti della valutazione';
$string['eventassessmentreevaluated'] = 'Assegnati di nuovo voti alla valutazione';
$string['eventphaseswitched'] = 'Cambiata fase';
$string['eventsubmissionassessed'] = 'Valutata consegna';
$string['eventsubmissionassessmentsreset'] = 'Eliminate valutazioni consegna';
$string['eventsubmissioncreated'] = 'Creata consegna';
$string['eventsubmissiondeleted'] = 'Eliminata consegna';
$string['eventsubmissionreassessed'] = 'Valutata di nuovo consegna';
$string['eventsubmissionupdated'] = 'Aggiornata consegna';
$string['eventsubmissionviewed'] = 'Visualizzata consegna';
$string['example'] = 'Consegna di esempio';
$string['exampleadd'] = 'Aggiungi una consegna di esempio';
$string['exampleassess'] = 'Valuta consegna di esempio';
$string['exampleassessments'] = 'Consegne di esempio da valutare';
$string['exampleassesstask'] = 'Valuta esempi';
$string['exampleassesstaskdetails'] = 'attesi: {$a->expected}<br />valutati: {$a->assessed}';
$string['examplecomparing'] = 'Comparazione delle valutazione della consegna di esempio';
$string['exampledelete'] = 'Elimina esempio';
$string['exampledeleteconfirm'] = 'Sei sicuro di voler eliminare la consegna di esempio elencata di seguito? Fai click su \'Continua\' per eliminarla.';
$string['exampleedit'] = 'Modifica esempio';
$string['exampleediting'] = 'Modifica esempio';
$string['exampleneedassessed'] = 'Devi prima valutare tutte le consegne di esempio';
$string['exampleneedsubmission'] = 'Devi prima consegnare il tuo lavoro e valutare tutte le consegne di esempio';
$string['examplesbeforeassessment'] = 'Gli esempi sono disponibili dopo la propria consegna e devono essere valutati prima della fase di valutazione tra pari';
$string['examplesbeforesubmission'] = 'Gli esempi devono essere valutati prima della propria consegna';
$string['examplesmode'] = 'Modalità di valutazione degli esempi';
$string['examplesubmissions'] = 'Consegne di esempio
';
$string['examplesvoluntary'] = 'La valutazione delle consegne di esempio è su base volontaria';
$string['exportsubmission'] = 'Esporta pagina';
$string['feedbackauthor'] = 'Feedback per l\'autore';
$string['feedbackauthorattachment'] = 'Allegato';
$string['feedbackby'] = 'Feedback di {$a}';
$string['feedbackreviewer'] = 'Feedback per il revisore';
$string['feedbacksettings'] = 'Commento';
$string['formataggregatedgrade'] = '{$a->grade}';
$string['formataggregatedgradeover'] = '<del>{$a->grade}</del><br /><ins>{$a->over}</ins>';
$string['formatpeergrade'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">({$a->gradinggrade})</span>';
$string['formatpeergradeover'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">(<del>{$a->gradinggrade}</del> / <ins>{$a->gradinggradeover}</ins>)</span>';
$string['formatpeergradeoverweighted'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">(<del>{$a->gradinggrade}</del> / <ins>{$a->gradinggradeover}</ins>)</span> @ <span class="weight">{$a->weight}</span>';
$string['formatpeergradeweighted'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">({$a->gradinggrade})</span> @ <span class="weight">{$a->weight}</span>';
$string['givengrades'] = 'Voti dati';
$string['gradecalculated'] = 'Voto calcolato per la consegna';
$string['gradedecimals'] = 'Cifre decimali del voto';
$string['gradegivento'] = '&gt;';
$string['gradeinfo'] = 'Voto: {$a->received} su {$a->max}';
$string['gradeitemassessment'] = '{$a->workshopname} (valutazione)';
$string['gradeitemsubmission'] = '{$a->workshopname} (consegna)';
$string['gradeover'] = 'Modifica il voto per la consegna';
$string['gradereceivedfrom'] = '&lt;';
$string['gradesreport'] = 'Report dei voti del workshop';
$string['grade_submission_name'] = 'Consegna';
$string['gradetopassgrading'] = 'Sufficienza per la valutazione';
$string['gradetopasssubmission'] = 'Sufficienza per la consegna';
$string['gradinggrade'] = 'Voto per la valutazione';
$string['gradinggradecalculated'] = 'Voto calcolato per la valutazione';
$string['gradinggrade_help'] = 'L\'impostazione specifica il voto massimo ottenibile per la valutazione della consegna.';
$string['gradinggradeof'] = 'Voto per la valutazione (su {$a})';
$string['gradinggradeover'] = 'Modifica il voto per la valutazione';
$string['gradingsettings'] = 'Impostazioni voto';
$string['groupnoallowed'] = 'Non sei autorizzato ad accedere nessun gruppo in questo workshop';
$string['iamsure'] = 'Si, sono sicuro';
$string['indicator:cognitivedepth'] = 'Workshop cognitivo';
$string['indicator:cognitivedepthdef'] = 'Workshop cognitivo';
$string['indicator:cognitivedepthdef_help'] = 'Durante l\'intervallo di analisi, il partecipante ha raggiunto questa percentuale di coinvolgimento cognitivo offerto dalle attività Workshop (Livelli: Nessuna visualizzazione, Visualizzazione, Invio, Visualizzazione feedback, Commento al feedback, Nuovo invio dopo il feedback)';
$string['indicator:cognitivedepth_help'] = 'L\'indicatore è basato sulla profondità cognitiva toccata dallo studente svolgendo attività Workshop.';
$string['indicator:socialbreadth'] = 'Workshop sociale';
$string['indicator:socialbreadthdef'] = 'Workshop sociale';
$string['indicator:socialbreadthdef_help'] = 'Durante l\'intervallo di analisi, il partecipante ha raggiunto questa percentuale di coinvolgimento sociale offerto dall\'attività Workshop (Livelli: Nessuna partecipazione, Partecipazione da solo, Partecipazione con altri)';
$string['indicator:socialbreadth_help'] = 'L\'indicatore è basato sulla dimensione sociale raggiunta dallo studente svolgendo attività Workshop.';
$string['info'] = 'Informazioni';
$string['instructauthors'] = 'Istruzioni di consegna';
$string['instructreviewers'] = 'Istruzioni per la valutazione';
$string['introduction'] = 'Descrizione';
$string['latesubmissions'] = 'Consegne in ritardo';
$string['latesubmissionsallowed'] = 'Le consegne in ritardo saranno accettate';
$string['latesubmissions_desc'] = 'Accetta consegne dopo la data di fine';
$string['latesubmissions_help'] = 'E\' possibile consentire ai partecipanti di consegnare il proprio lavoro dopo la scadenza prevista nella fase di valutazione. Le consegne in ritardo non potranno però essere modificate.';
$string['legacyallocationplugincron'] = 'Elaborazione distribuzioni obsolete dei workshop';
$string['maxbytes'] = 'Dimensione massima file consegna';
$string['modulename'] = 'Workshop';
$string['modulename_help'] = 'Il modulo di attività workshop consente la raccolta, la revisione e la valutazione tra pari del lavoro svolto dagli studenti.

Gli studenti possono consegnare qualsiasi tipo di file digitale, come documenti di testo o fogli elettronici, e possono anche redigere del testo direttamente online.

Le consegne vengono valutate in accordo ai diversi criteri definiti dal docente. E\' possibile approfondire il processo di comprensione della valutazione tra pari e dei criteri di valutazione definiti dal docente tramite consegne di esempio preparate dal docente.
Gli studenti possono valutare una o più consegne di altri studenti, volendo anche in forma anonima.

La valutazione ricevuta degli studenti si compone di due parti, una valutazione per la propria consegna e una valutazione per aver valutato le consegne  degli altri studenti. Entrambe le valutazioni vengono memorizzate nel registro valutatore.';
$string['modulenameplural'] = 'Workshop';
$string['myassessments'] = 'Le mie valutazioni';
$string['mysubmission'] = 'le mie consegne';
$string['nattachments'] = 'Numero massimo di allegati alla consegna';
$string['noexamples'] = 'Questo workshop non ha esempi';
$string['noexamplesformready'] = 'Devi impostare la scheda di valutazione prima di fornire una consegna di esempio.';
$string['nogradeyet'] = 'Senza voto';
$string['nosubmissionfound'] = 'Non sono state trovate consegne per questo utente';
$string['nosubmissions'] = 'Non ci sono ancora consegne';
$string['notassessed'] = 'Non valutata';
$string['nothingfound'] = 'Non c\'è nulla da visualizzare';
$string['nothingtoreview'] = 'Non c\'è nulla da rivedere';
$string['notoverridden'] = 'Non modificati';
$string['noworkshops'] = 'In questo corso non ci sono workshop';
$string['noyoursubmission'] = 'Non hai ancora consegnato il tuo lavoro';
$string['nullgrade'] = '-';
$string['overallfeedback'] = 'Feedback complessivo';
$string['overallfeedbackfiles'] = 'Numero massimo di allegati feedback complessivo';
$string['overallfeedbackmaxbytes'] = 'Dimensione massima file feedback complessivo';
$string['overallfeedbackmode'] = 'Modalità feedback complessivo';
$string['overallfeedbackmode_0'] = 'Disabilitato';
$string['overallfeedbackmode_1'] = 'Abilitato, opzionale';
$string['overallfeedbackmode_2'] = 'Abilitato, obbligatorio';
$string['overallfeedbackmode_help'] = 'Consente di visualizzare un campo di testo sotto il form di valutazione, dove i revisori potranno inserire la valutazione complessiva della consegna oppure fornire spiegazioni sulla valutazione.';
$string['page-mod-workshop-x'] = 'Qualsiasi pagina con modulo workshop';
$string['participant'] = 'Partecipante';
$string['participantrevierof'] = 'Il partecipante è il revisore di';
$string['participantreviewedby'] = 'Il partecipante è esaminato da';
$string['phaseassessment'] = 'Fase di valutazione';
$string['phaseclosed'] = 'Fine';
$string['phaseevaluation'] = 'Fase di calcolo dei voti';
$string['phasesetup'] = 'Fase di allestimento';
$string['phasesoverlap'] = 'La fase di consegna e la fase di valutazione non possono sovrapporsi';
$string['phasesubmission'] = 'Fase di consegna';
$string['pluginadministration'] = 'Gestione workshop';
$string['pluginname'] = 'Workshop';
$string['prepareexamples'] = 'Prepara consegna di esempio';
$string['previewassessmentform'] = 'Anteprima';
$string['privacy:metadata:aggregatedgradinggrade'] = 'Valutazione aggregata di tutti i voti ricevuti dall\'utente in una determinata attività di Workshop.';
$string['privacy:metadata:assessmentgrade'] = 'Valutazione aggregata suggerita per questa consegna.';
$string['privacy:metadata:assessmentgradinggrade'] = 'Voto per la valutazione.';
$string['privacy:metadata:assessmentgradinggradeover'] = 'Valore del voto modificato manualmente per la valutazione fornita.';
$string['privacy:metadata:assessmentid'] = 'ID della valutazione.';
$string['privacy:metadata:authorid'] = 'ID dell\'autore della consegna.';
$string['privacy:metadata:dimensiongrade'] = 'Voto nella data dimensione della valutazione.';
$string['privacy:metadata:dimensionid'] = 'ID della dimensione della valutazione.';
$string['privacy:metadata:example'] = 'Se questo record rappresenta un esempio di consegna.';
$string['privacy:metadata:feedbackauthor'] = 'Feedback per l\'autore.';
$string['privacy:metadata:feedbackauthorformat'] = 'Formato del testo del feedback per l\'autore.';
$string['privacy:metadata:feedbackreviewer'] = 'Feedback per l\'utente che fornisce la valutazione.';
$string['privacy:metadata:feedbackreviewerformat'] = 'Formato del testo del feedback per l\'utente che fornisce la valutazione.';
$string['privacy:metadata:late'] = 'Se la consegna è stata effettuata dopo la scadenza.';
$string['privacy:metadata:peercomment'] = 'Commento sul voto dato dall\'utente che ha fornito la valutazione.';
$string['privacy:metadata:peercommentformat'] = 'Formato del testo del commento sul voto dato.';
$string['privacy:metadata:preference:perpage'] = 'Preferenza dell\'utente sul numero di consegne da visualizzare in una pagina.';
$string['privacy:metadata:published'] = 'Scelta di rendere la consegna visibile per tutti i partecipanti, una volta  chiuso il Workshop.';
$string['privacy:metadata:reviewerid'] = 'ID dell\'utente che fornisce la valutazione.';
$string['privacy:metadata:strategy'] = 'Nome del criterio di valutazione';
$string['privacy:metadata:submissioncontent'] = 'Testo della consegna.';
$string['privacy:metadata:submissioncontentformat'] = 'Formato del testo della consegna.';
$string['privacy:metadata:submissiongrade'] = 'Valutazione aggregata per la consegna in forma di numero decimale, compresa nell\'intervallo da 0 a 100.';
$string['privacy:metadata:submissiongradeover'] = 'Valore della valutazione aggregata modificato manualmente.';
$string['privacy:metadata:submissionid'] = 'ID della consegna.';
$string['privacy:metadata:submissiontitle'] = 'Titolo della consegna.';
$string['privacy:metadata:subsystem:corefiles'] = 'Il modulo Workshop memorizza i file incorporati o allegati al testo della consegna.';
$string['privacy:metadata:subsystem:coreplagiarism'] = 'Il modulo Workshop ha un supporto integrato per i sistemi di prevenzione plagio.';
$string['privacy:metadata:timeaggregated'] = 'Data e ora dell\'ultimo calcolo della valutazione aggregata.';
$string['privacy:metadata:timecreated'] = 'Data e ora di creazione del record nel database.';
$string['privacy:metadata:timemodified'] = 'Data e ora dell\'ultima modifica del record nel database.';
$string['privacy:metadata:userid'] = 'ID dell\'utente per cui è stata calcolata la valutazione aggregata.';
$string['privacy:metadata:weight'] = 'Peso della valutazione.';
$string['privacy:metadata:workshopaggregations'] = 'Memorizza le valutazioni aggregate per la valutazione.';
$string['privacy:metadata:workshopassessments'] = 'Memorizza le informazioni sulle valutazioni assegnate alle consegne nel modulo del Workshop.';
$string['privacy:metadata:workshopgrades'] = 'Memorizza le informazioni sulla compilazione degli schemi di valutazione con voti e commenti.';
$string['privacy:metadata:workshopid'] = 'ID dell\'attività Workshop.';
$string['privacy:metadata:workshopsubmissions'] = 'Memorizza le informazioni sulle consegne nel modulo Workshop.';
$string['privacy:request:delete:title'] = '[Eliminato]';
$string['publishedsubmissions'] = 'Consegne pubblicate';
$string['publishsubmission'] = 'Pubblica consegna';
$string['publishsubmission_help'] = 'Le consegne pubblicate saranno disponibili agli altri partecipanti dopo la chiusura del workshop.';
$string['reassess'] = 'Modifica valutazione';
$string['receivedgrades'] = 'Voti ricevuti';
$string['recentassessments'] = 'Valutazioni workshop:';
$string['recentsubmissions'] = 'Consegne workshop:';
$string['resetassessments'] = 'Elimina tutte le consegne';
$string['resetassessments_help'] = 'E\' possibile scegliere se eliminare solo le consegne distribuite senza influire sulle consegne. Se le consegne devono essere eliminate, saranno eliminate anche le valutazioni e questa opzione sarà ignorata. Da notare che verranno incluse anche le valutazioni delle consegne di esempio.';
$string['resetphase'] = 'Passa alla fase di allestimento';
$string['resetphase_help'] = 'Abilitando l\'opzione, i workshop saranno posti nella fase di allestimento.';
$string['resetsubmissions'] = 'Elimina tutte le consegne';
$string['resetsubmissions_help'] = 'Tutte le consegne e le valutazioni associate saranno eliminate. Dall\'eliminazione sono escluse le consegne di esempio.';
$string['saveandclose'] = 'Salva e chiudi';
$string['saveandcontinue'] = 'Salva e continua a modificare';
$string['saveandpreview'] = 'Salva e anteprima';
$string['saveandshownext'] = 'Salva e visualizza il successivo';
$string['search:activity'] = 'Workshop - Informazioni sull\'attività';
$string['selfassessmentdisabled'] = 'Autovalutazione disabilitata';
$string['showingperpage'] = 'Visualizzazione di {$a} elementi per pagina';
$string['showingperpagechange'] = 'Modifica...';
$string['someuserswosubmission'] = 'Almeno un partecipante non ha ancora consegnato il proprio lavoro.';
$string['sortasc'] = 'Ordinamento ascendente';
$string['sortdesc'] = 'Ordinamento discendente';
$string['strategy'] = 'Criterio di valutazione';
$string['strategyhaschanged'] = 'Il criterio di valutazione del workshop è cambiato dall\'ultimo accesso per modifica.';
$string['strategy_help'] = 'Il criterio di valutazione determina la scheda di valutazione usata e il metodo di votazione delle consegne. Sono disponibili 4 opzioni:

* Voto cumulativo - sarà possibile dare voti e fornire commenti riguardanti elementi specifici
* Commenti - sarà possibile fornire commenti riguardanti elementi specifici senza la possibilità di dare voti
* Numero di errori - sarà possibile fornire commenti e valutare con si/no delle specifiche affermazioni
* Rubric - verrà fornito un livello di valutazione basato su criteri';
$string['submission'] = 'Consegna';
$string['submissionattachment'] = 'Allegato';
$string['submissionby'] = 'Consegne di {$a}';
$string['submissioncontent'] = 'Contenuto consegna';
$string['submissiondeleteconfirm'] = 'Sei sicuro di eliminare la consegna seguente?';
$string['submissiondeleteconfirmassess'] = 'Sei sicuro di eliminare la consegna seguente? Verranno anche eliminate {$a->count} valutazioni associate alla consegna, cosa che potrà alterare le valutazioni dei revisori.';
$string['submissionend'] = 'Fine consegne';
$string['submissionendbeforestart'] = 'la data di fine consegne non può essere anteriore alla data di inizio consegne';
$string['submissionenddatetime'] = 'Fine delle consegne: {$a->daydatetime} ({$a->distanceday})';
$string['submissionendevent'] = '{$a} fine delle consegne';
$string['submissionendswitch'] = 'Passa alla fase successiva dopo la data di fine consegne';
$string['submissionendswitch_help'] = 'Specificando la data di fine consegne e selezionando questa casella, dopo la data di fine consegne il workshop passerà automaticamente alla fase di valutazione.

Se abiliti questa funzione, è consigliabile utilizzare anche il metodo di distribuzione pianificata. In assenza di distribuzione delle consegne infatti, non sarà possibile valutare anche se il workshop si trova nella fase della valutazione.';
$string['submissiongrade'] = 'Voto per la consegna';
$string['submissiongrade_help'] = 'L\'impostazione specifica il voto massimo ottenibile per la consegna del lavoro.';
$string['submissiongradeof'] = 'Voto per la consegna (su {$a})';
$string['submissionlastmodified'] = 'Ultima modifica';
$string['submissionrequiredcontent'] = 'Devi inserire del testo o aggiungere un file.';
$string['submissionrequiredfile'] = 'Devi aggiungere un file o inserire del testo.';
$string['submissionsettings'] = 'Impostazioni consegna';
$string['submissionsreport'] = 'Report delle consegne';
$string['submissionstart'] = 'Inizio consegne da';
$string['submissionstartdatetime'] = 'Inizio consegne da {$a->daydatetime} ({$a->distanceday})';
$string['submissionstartevent'] = '{$a} Inizio consegne';
$string['submissiontitle'] = 'Titolo';
$string['submissiontypes'] = 'Tipi di consegne';
$string['submissiontypetextavailable'] = 'Testo online<span class="accesshide"> disponibile</span>';
$string['submittednotsubmitted'] = 'Consegne effettuate ({$a->submitted}) / non effettuate ({$a->notsubmitted})';
$string['subplugintype_workshopallocation'] = 'Metodo di distribuzione consegne';
$string['subplugintype_workshopallocation_plural'] = 'Metodi di distribuzione consegne';
$string['subplugintype_workshopeval'] = 'Metodo di calcolo dei voti';
$string['subplugintype_workshopeval_plural'] = 'Metodi di valutazione dei voti';
$string['subplugintype_workshopform'] = 'Criterio di valutazione';
$string['subplugintype_workshopform_plural'] = 'Strategie di valutazione';
$string['switchingphase'] = 'Cambiamento di fase';
$string['switchphase'] = 'Cambia fase';
$string['switchphase10'] = 'Vai alla fase di allestimento';
$string['switchphase10info'] = 'Stai per passare il workshop nella  <strong>Fase di allestimento</strong>. Durante questa fase i partecipanti non potranno modificare le consegne o le valutazioni. I docenti potranno usare questa fase per modificare le impostazioni del workshop, i criteri di valutazione o migliorare la scheda di valutazione.';
$string['switchphase20'] = 'Passa alla fase di consegna';
$string['switchphase20info'] = 'Il workshop sta per entrare nella <strong>Fase di consegna</strong>. Durante questa fase gli studenti potranno consegnare i lavori (nelle date stabilite, se impostate). I docenti potranno distribuire le consegne per la revisione tra pari.';
$string['switchphase30'] = 'Passa alla fase di valutazione';
$string['switchphase30auto'] = 'Il workshop passerà automaticamente alla fase di valutazione dopo {$a->daydatetime} ({$a->distanceday})';
$string['switchphase30info'] = 'Il workshop sta per entrare nella <strong>Fase di valutazione</strong>. Durante questa fase i revisori potranno valutare le consegne a loro distribuite (all\'interno delle date stabilite, se impostate).';
$string['switchphase40'] = 'Passa alla fase di calcolo dei voti';
$string['switchphase40info'] = 'Il workshop sta per entrare nella <strong>Fase di calcolo dei voti</strong>. Durante questa fase i partecipanti non potranno modificare le proprie consegne e le valutazioni date. I docenti potranno usare gli strumenti di valutazione per calcolare il voto finale e dare il proprio feedback ai revisori.';
$string['switchphase50'] = 'Chiudi workshop';
$string['switchphase50info'] = 'Il workshop sta per essere chiuso. I voti verranno calcolati ed appariranno nel registro valutatore. Gli studenti potranno visualizzare le proprie consegne e le valutazioni ricevute.';
$string['switchphaseauto'] = 'Il cambiamento di fase è stato pianificato';
$string['switchphasenext'] = 'Passa alla fase successiva';
$string['taskassesspeers'] = 'Valuta pari';
$string['taskassesspeersdetails'] = 'totale: {$a->total}<br />in attesa: {$a->todo}';
$string['taskassessself'] = 'Valuta te stesso';
$string['taskconclusion'] = 'Fornisce una conclusione dell\'attività';
$string['taskdone'] = 'Attività svolta';
$string['taskfail'] = 'Attività non andata a buon fine';
$string['taskinfo'] = 'Informazioni attività';
$string['taskinstructauthors'] = 'Imposta istruzioni di consegna';
$string['taskinstructreviewers'] = 'Imposta istruzioni per la valutazione';
$string['taskintro'] = 'Imposta la descrizione del workshop';
$string['tasksubmit'] = 'Consegna il tuo lavoro';
$string['tasktodo'] = 'Attività da svolgere';
$string['toolbox'] = 'Workshop toolbox';
$string['undersetup'] = 'Il workshop è in fase di allestimento. Per favore attendi fino a quando non entrerà nella prossima fase.';
$string['useexamples'] = 'Usa esempi';
$string['useexamples_desc'] = 'Le consegne di esempio vengono fornite per far pratica nella valutazione';
$string['useexamples_help'] = 'I partecipanti potranno impratichirsi nella valutazione degli esempi e confrontare la loro valutazione con una valutazione di riferimento. Il voto non verrà considerato nel voto per la valutazione.';
$string['usepeerassessment'] = 'Usa valutazione tra pari';
$string['usepeerassessment_desc'] = 'Gli studenti potranno valutare i propri lavori reciprocamente';
$string['usepeerassessment_help'] = 'I partecipanti potranno ricevere delle consegne di altri partecipanti per valutarle, ricevendo un voto aggiuntivo per l\'attività svolta. ';
$string['userdatecreated'] = 'consegnato <span>{$a}</span>';
$string['userdatemodified'] = 'modificato <span>{$a}</span>';
$string['userplan'] = 'Workshop planner';
$string['userplanaccessibilityskip'] = 'Vai all\'attività attiva';
$string['userplanaccessibilitytitle'] = 'Cronologia del  Workshop con {$a} fasi';
$string['userplancurrentphase'] = 'Fase attuale';
$string['userplan_help'] = 'Il planner visualizza tutte le fasi del workshop elencando le attività da svolgere in ciascuna fase. La fase attiva è evidenziata e le attività completate sono spuntate.';
$string['useselfassessment'] = 'Usa autovalutazione';
$string['useselfassessment_desc'] = 'Gli studenti potranno valutare il proprio lavoro';
$string['useselfassessment_help'] = 'I partecipanti potranno valutare il proprio lavoro e riceveranno un voto aggiuntivo per l\'attività svolta.';
$string['viewworkshopsummary'] = 'Visualizza riassunto workshop';
$string['weightinfo'] = 'Peso: {$a}';
$string['withoutsubmission'] = 'Revisori che non hanno consegnato il proprio lavoro';
$string['workshop:addinstance'] = 'Aggiungere workshop';
$string['workshop:allocate'] = 'Assegnare consegne per revisione';
$string['workshop:deletesubmissions'] = 'Eliminare consegne';
$string['workshop:editdimensions'] = 'Modificare scheda di valutazione';
$string['workshop:exportsubmissions'] = 'Esportare consegne';
$string['workshop:ignoredeadlines'] = 'Ignorare limitazioni temporali';
$string['workshop:manageexamples'] = 'Gestire consegne di esempio';
$string['workshopname'] = 'Nome del workshop';
$string['workshop:overridegrades'] = 'Modificare i voti calcolati';
$string['workshop:peerassess'] = 'Valutare tra pari';
$string['workshop:publishsubmissions'] = 'Pubblicare consegne';
$string['workshop:submit'] = 'Consegnare';
$string['workshop:switchphase'] = 'Cambiare fase';
$string['workshop:view'] = 'Visualizzare workshop';
$string['workshop:viewallassessments'] = 'Visualizzare qualsiasi valutazione';
$string['workshop:viewallsubmissions'] = 'Visualizzare qualsiasi consegna';
$string['workshop:viewauthornames'] = 'Visualizzare nomi degli autori';
$string['workshop:viewauthorpublished'] = 'Visualizzare gli autori degli invii pubblicati';
$string['workshop:viewpublishedsubmissions'] = 'Visualizzare consegne pubblicate';
$string['workshop:viewreviewernames'] = 'Visualizzare nome del revisore';
$string['yourassessmentfor'] = 'La tua valutazione su {$a}';
$string['yourgrades'] = 'Le vostre valutazioni';
$string['yoursubmission'] = 'La tua consegna';
