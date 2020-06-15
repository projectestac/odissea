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
 * Strings for component 'completion', language 'it', branch 'MOODLE_36_STABLE'
 *
 * @package   completion
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = 'Voto minimo';
$string['activities'] = 'Attività';
$string['activitiescompleted'] = 'Completamento attività';
$string['activitiescompletednote'] = 'Nota: affinché un\'attività possa comparire nell\'elenco delle attività è necessario impostare i relativi criteri di completamento';
$string['activitieslabel'] = 'Attività / risorse';
$string['activityaggregation'] = 'Aggregazione';
$string['activityaggregation_all'] = 'Devono essere completate TUTTE le attività selezionate';
$string['activityaggregation_any'] = 'Deve essere completata ALMENO UNA delle attività selezionate';
$string['activitycompletion'] = 'Completamento attività';
$string['activitycompletionupdated'] = 'Le modifiche sono state salvate';
$string['affectedactivities'] = 'Le modifiche riguarderanno le seguenti  <b>{$a}</b> attività o risorse:';
$string['aggregationmethod'] = 'Metodo di aggregazione';
$string['all'] = 'Tutti';
$string['any'] = 'Uno qualsiasi';
$string['approval'] = 'Approvazione';
$string['areyousureoverridecompletion'] = 'Sei sicuro di voler modificare l\'attuale stato di completamento di questa attività di questo utente e contrassegnarlo come {$a}?';
$string['badautocompletion'] = 'Se selezioni il completamento automatico, devi anche scegliere almeno uno dei requisiti sottostanti.';
$string['bulkactivitycompletion'] = 'Modifica completamento attività';
$string['bulkactivitydetail'] = 'Seleziona le attività da modificare.';
$string['bulkcompletiontracking'] = 'Tracciamento del completamento';
$string['bulkcompletiontracking_help'] = '<strong>Nessuno:</strong> Non tracciare il completamento delle attività

<strong>Manuale:</strong> Gli studenti possono spuntare manualmente l\'attività per indicarla completata

<strong>In base a condizioni:</strong> Considera l\'attività completata in base al soddisfacimento di condizioni';
$string['checkactivity'] = 'Casella di spunta dell\'attività / risorsa: {$a}';
$string['checkall'] = 'Seleziona/deseleziona tutte le attività e risorse';
$string['checkallsection'] = 'Seleziona/deseleziona tutte le attività e risorse della sezione {$a}';
$string['completed'] = 'Completato';
$string['completedunlocked'] = 'Opzioni di completamento sbloccate';
$string['completedunlockedtext'] = 'Salvando le modifiche, sarà eliminato lo stato di completamento di tutti gli studenti. Se cambi idea, non salvare questo form.';
$string['completedwarning'] = 'Opzioni di completamento bloccate';
$string['completedwarningtext'] = 'Uno o più utenti ({$a}) hanno già indicato questa attività come completata. La modifica delle opzioni di completamento eliminerà il loro stato e potrà creare confusione. Per questo motivo le opzioni sono state bloccate e si raccomanda di non sbloccarle se non strettamente necessario.';
$string['completion'] = 'Tracciamento del completamento';
$string['completionactivitydefault'] = 'Utilizza il default delle attività';
$string['completion-alt-auto-enabled'] = 'Il sistema traccia automaticamente il completamento di questa attività in base alle seguenti condizioni: {$a}';
$string['completion-alt-auto-fail'] = 'Completato: {$a} (senza raggiungere la sufficienza)';
$string['completion-alt-auto-n'] = 'Non completata: {$a}';
$string['completion-alt-auto-n-override'] = 'Non completato: {$a->modname} (impostato da {$a->overrideuser})';
$string['completion-alt-auto-pass'] = 'Completato: {$a} (raggiunta la sufficienza)';
$string['completion-alt-auto-y'] = 'Completata: {$a}';
$string['completion-alt-auto-y-override'] = 'Completato: {$a->modname} (impostato da {$a->overrideuser})';
$string['completion-alt-manual-enabled'] = 'Gli studenti possono spuntare manualmente questo elemento per indicarlo completato: {$a}';
$string['completion-alt-manual-n'] = 'Non completata: {$a}.
Selezionarla per spuntarla come completata.';
$string['completion-alt-manual-n-override'] = 'Non completato: {$a->modname} (impostato da {$a->overrideuser}). Selezionare per contrassegnare come completato.';
$string['completion-alt-manual-y'] = 'Completata: {$a}. Selezionarla per spuntarla come non completata.';
$string['completion-alt-manual-y-override'] = 'Completato: {$a->modname} (impostato da {$a->overrideuser}). Selezionare per contrassegnare come non completato.';
$string['completion_automatic'] = 'Considera l\'attività completata in base alle condizioni seguenti';
$string['completiondefault'] = 'Default per il tracciamento del completamento';
$string['completiondisabled'] = 'Disabilitato, non visualizzato nelle impostazioni attività';
$string['completionduration'] = 'Iscrizione';
$string['completionenabled'] = 'Abilitato, controllato nelle impostazioni di completamento delle attività';
$string['completionexpected'] = 'Completamento atteso entro il';
$string['completionexpecteddesc'] = 'Completamento atteso il {$a}';
$string['completionexpectedfor'] = '{$a->instancename} da completare';
$string['completionexpected_help'] = 'Imposta la data in cui ci si aspetta il completamento dell\'attività.';
$string['completion-fail'] = 'Completato (senza raggiungere la sufficienza)';
$string['completion_help'] = 'Il completamento delle attività consente di tenere traccia delle attività svolte, sia manualmente sia automaticamente, al soddisfacimento delle condizioni impostate. E\' possibile impostare più condizioni, che dovranno essere tutte soddisfatte affinché l\'attività sia considerata completata.';
$string['completionicons'] = 'Caselle di completamento';
$string['completionicons_help'] = 'Accanto ai nomi delle attività possono  comparire delle caselle di spunta utili per visualizzare lo stato di completamento delle attività stesse.

Se viene visualizzata una casella con il bordo tratteggiato, sarà visualizzato un segno di spunta quando l\'attività sarà stata completata secondo i criteri impostati dal docente.

Se viene visualizzata una casella con il bordo continuo, è possibile fare click sulla casella per indicare l\'attività come completata. (In caso di ripensamenti, è possibile fare click nuovamente sulla casella per rimuovere il completamento).';
$string['completion_manual'] = 'Gli studenti possono spuntare manualmente l\'attività per indicarla completata';
$string['completionmenuitem'] = 'Completamento';
$string['completion-n'] = 'Non completato';
$string['completion_none'] = 'Non tracciare il completamento delle attività';
$string['completionnotenabled'] = 'Il completamento non è abilitato';
$string['completionnotenabledforcourse'] = 'Il completamento non è abilitato in questo corso';
$string['completionnotenabledforsite'] = 'Il completamento non è abilitato in questo sito';
$string['completion-n-override'] = 'Non completato: (impostato da {$a})';
$string['completionondate'] = 'Data';
$string['completionondatevalue'] = 'Data nella quale il corso sarà contrassegnato come completato';
$string['completion-pass'] = 'Completato (raggiunta la sufficienza)';
$string['completionsettingslocked'] = 'Impostazioni di completamento bloccate';
$string['completion-title-manual-n'] = 'Spunta come completata: {$a}';
$string['completion-title-manual-y'] = 'Spunta come non completata: {$a}';
$string['completionupdated'] = 'Il completamento dell\'attività <b>{$a}</b> è stato aggiornato';
$string['completionusegrade'] = 'Ricevere una valutazione';
$string['completionusegrade_desc'] = 'Lo studente deve ricevere una valutazione per completare l\'attività';
$string['completionusegrade_help'] = 'L\'attività dello studente sarà completata quando avrà ricevuto una valutazione. Impostando una sufficienza, saranno visualizzate icone di superamento o di non superamento.';
$string['completionview'] = 'Visualizzazione';
$string['completionview_desc'] = 'Lo studente deve accedere all\'attività per completarla.';
$string['completion-y'] = 'Completato';
$string['completion-y-override'] = 'Completato: (impostato da {$a})';
$string['configcompletiondefault'] = 'Le impostazioni di default per il tracciamento del completamento quando si creano nuove attività.';
$string['configenablecompletion'] = 'Consente di abilitare le funzionalità di tracciamento del completamento  nei corsi. Si consiglia di attivari i criteri di completamento affinché gli utenti possano visualizzare dati utili nella propria Dashboard.';
$string['confirmselfcompletion'] = 'Conferma di completamento';
$string['courseaggregation'] = 'Aggregazione';
$string['courseaggregation_all'] = 'Devono essere completati TUTTI i corsi selezionati';
$string['courseaggregation_any'] = 'Deve essere completato ALMENO UNO dei corsi selezionati.';
$string['coursealreadycompleted'] = 'Hai già completato questo corso';
$string['coursecomplete'] = 'Criteri di completamento';
$string['coursecompleted'] = 'Corso completato';
$string['coursecompletion'] = 'Criteri di completamento';
$string['coursecompletioncondition'] = 'Criterio: {$a}';
$string['coursegrade'] = 'Valutazione del corso';
$string['coursesavailable'] = 'Corsi disponibili';
$string['coursesavailableexplaination'] = 'Nota: affinché un corso possa comparire nell\'elenco dei corsi disponibili è necessario impostare i relativi criteri di completamento';
$string['criteria'] = 'Criteri';
$string['criteriagroup'] = 'Gruppo di criteri';
$string['criteriarequiredall'] = 'E\' richiesto il soddisfacimento di tutti i criteri elencati';
$string['criteriarequiredany'] = 'E\' richiesto il soddisfacimento di almeno uno dei criteri elencati';
$string['csvdownload'] = 'Scarica nel formato per foglio elettronico (UTF-8 .csv)';
$string['datepassed'] = 'Data di superamento';
$string['days'] = 'Giorni';
$string['daysoftotal'] = '{$a->days} su {$a->total}';
$string['defaultcompletion'] = 'Default del completamento attività';
$string['defaultcompletionupdated'] = 'Le modifiche sono state salvate';
$string['deletecompletiondata'] = 'Elimina dati di completamento';
$string['dependencies'] = 'Prerequisiti';
$string['dependenciescompleted'] = 'Completamento di altri corsi';
$string['editcoursecompletionsettings'] = 'Modifica criteri di completamento del corso';
$string['enablecompletion'] = 'Traccia il completamento';
$string['enablecompletion_help'] = 'Abilita la funzionalità di tracciamento del completamento dei corsi e delle attività. Si consiglia di abilitare questa opzione in modo che vengano visualizzati dati significativi nella panoramica del corso sulla Dashboard.';
$string['enrolmentduration'] = 'Durata dell\'iscrizione';
$string['enrolmentdurationlength'] = 'L\'utente deve rimanere iscritto per';
$string['err_noactivities'] = 'Il tracciamento delle attività completate non è attivo per nessuna attività e pertanto non ci sono impostazioni da visualizzare. E\' possibile abilitare il Il tracciamento delle attività completate nelle impostazioni di ciascuna attività.';
$string['err_nocourses'] = 'Non è visualizzato nessun corso poiché non ci sono corsi con il completamento abilitato. E\' possibile abilitare il completamento nelle impostazioni dei corsi.';
$string['err_nograde'] = 'In questo corso non è stata definita la sufficienza. Per usare questo criterio devi aggiungerla al corso.';
$string['err_noroles'] = 'In questo corso non ci sono ruoli con il privilegio moodle/course:markcomplete\'.';
$string['err_nousers'] = 'Nel corso o nel gruppo non ci sono utenti per i quali visualizzare il Report del completamento. (Di default questo Report viene visualizzato per gli studenti, tuttavia se il corso non ha studenti comparirà il presente messaggio. Gli amministratori possono modificare le impostazioni di visualizzazione.)';
$string['err_settingslocked'] = 'Uno o più studenti hanno già soddisfatto dei criteri di completamento, pertanto le impostazioni sono bloccate. Lo sblocco dei criteri di completamento eliminerà lo stato degli utenti e potrà creare confusione.';
$string['err_system'] = 'Si è verificato un errore nel sottosistema di tracciamento delle attività completate. (L\'Amministratore può abilitare il debug per approfondire il problema)';
$string['eventcoursecompleted'] = 'Completato corso';
$string['eventcoursecompletionupdated'] = 'Aggiornato completamento corso';
$string['eventcoursemodulecompletionupdated'] = 'Aggiornato completamento attività del corso';
$string['eventdefaultcompletionupdated'] = 'Aggiornato default del completamento delle attività del corso';
$string['excelcsvdownload'] = 'Scarica in formato compatibile con Excel (.csv)';
$string['fraction'] = 'Frazione';
$string['graderequired'] = 'Valutazione minima';
$string['gradexrequired'] = 'E\' richiesto {$a}';
$string['hiddenrules'] = 'Alcune impostazioni specifiche dell\'attività <b>{$a}</b> sono state nascsote. Per visualizzarle, deseleziona altre attività.';
$string['inprogress'] = 'In corso';
$string['manual'] = 'Manuale';
$string['manualcompletionby'] = 'Approvazione del completamento';
$string['manualcompletionbynote'] = 'Nota: affinché un ruolo possa comparire nell\'elenco è necessario che il ruolo abbia il privilegio moodle/course:markcomplete';
$string['manualselfcompletion'] = 'Conferma personale di completamento';
$string['manualselfcompletionnote'] = 'Nota: se si imposta la conferma personale di completamento è necessario aggiungere al corso il blocco di conferma di completamento.';
$string['markcomplete'] = 'Segnala completamento';
$string['markedcompleteby'] = 'Completamento approvato da {$a}';
$string['markingyourselfcomplete'] = 'Segnalare il completamento del corso';
$string['modifybulkactions'] = 'Modifica le condizioni per il completamento';
$string['moredetails'] = 'Ulteriori informazioni';
$string['nocriteriaset'] = 'Non ci sono criteri di completamento in questo corso';
$string['nogradeitem'] = 'Non è possibile abilitare \'ricevere una valutazione\' su <b>{$a}</b> poiché l\'attività non è valutata.';
$string['notcompleted'] = 'Non completato';
$string['notenroled'] = 'Non sei iscritto in questo corso';
$string['nottracked'] = 'In questo corso il tuo stato di completamento non è tracciato.';
$string['notyetstarted'] = 'Non ancora iniziato';
$string['overallaggregation'] = 'Aggregazione dei criteri';
$string['overallaggregation_all'] = 'Il corso sarà completato soddisfacendo TUTTI i criteri.';
$string['overallaggregation_any'] = 'Il corso sarà completato soddisfacendo ALMENO UN criterio.';
$string['pending'] = 'In attesa';
$string['periodpostenrolment'] = 'Periodo post iscrizione';
$string['privacy:metadata:completionstate'] = 'Indicatore di completamento dell\'attività.';
$string['privacy:metadata:course'] = 'Identificativo del corso';
$string['privacy:metadata:coursecompletedsummary'] = 'Memorizza informazioni sugli utenti che hanno completato i criteri di un corso.';
$string['privacy:metadata:coursemoduleid'] = 'ID dell\'attività';
$string['privacy:metadata:coursemodulesummary'] = 'Memorizza dati sul completamento di un\'attività da parte dell\'utente.';
$string['privacy:metadata:coursesummary'] = 'Memorizza dati sul completamento di un corso da parte dell\'utente.';
$string['privacy:metadata:gradefinal'] = 'Valutazione finale ottenuta per il completamento di un corso.';
$string['privacy:metadata:overrideby'] = 'ID utente della persona che ha modificato il completamento attività';
$string['privacy:metadata:reaggregate'] = 'Indicatore di ri-aggregazione del completamento del corso.';
$string['privacy:metadata:timecompleted'] = 'Orario di completamento del corso.';
$string['privacy:metadata:timeenrolled'] = 'Orario di iscrizione al corso';
$string['privacy:metadata:timemodified'] = 'Orario di modifica del completamento dell\'attività.';
$string['privacy:metadata:timestarted'] = 'Orario di inizio del corso.';
$string['privacy:metadata:unenroled'] = 'Indicatore di disiscrizione dell\'utente dal corso.';
$string['privacy:metadata:userid'] = 'ID utente della persona che ha dati di completamento del corso e delle attività';
$string['privacy:metadata:viewed'] = 'Indicatore di visualizzazione dell\'attività.';
$string['progress'] = 'Situazione dello studente';
$string['progress-title'] = '{$a->user}, {$a->activity}: {$a->state} {$a->date}';
$string['progresstotal'] = 'Stato di avanzamento: {$a->complete} / {$a->total}';
$string['recognitionofpriorlearning'] = 'Riconoscimento di corsi precedenti';
$string['remainingenroledfortime'] = 'Rimanere iscritti per un determinato periodo di tempo';
$string['remainingenroleduntildate'] = 'Rimanere iscirtti fino ad una data prefissta';
$string['reportpage'] = 'Utenti da {$a->from} a {$a->to} su  {$a->total} in totale.';
$string['requiredcriteria'] = 'Criteri da soddisfare';
$string['resetactivities'] = 'Deseleziona tutte le attività e risorse';
$string['restoringcompletiondata'] = 'Ripristino dello stato di completamento';
$string['roleaggregation'] = 'Aggregazione';
$string['roleaggregation_all'] = 'TUTTI i ruoli selezionati devono approvare il completamento del corso';
$string['roleaggregation_any'] = 'ALMENO UNO dei ruoli selezionati deve approvare il completamento del corso';
$string['roleidnotfound'] = 'Il ruolo con ID {$a} non è stato trovato';
$string['saved'] = 'Salvato';
$string['seedetails'] = 'Visualizza dettagli';
$string['select'] = 'Seleziona';
$string['self'] = 'Auto';
$string['selfcompletion'] = 'Auto completamento';
$string['showinguser'] = 'Stato utente';
$string['unenrolingfromcourse'] = 'Disiscrizione dal corso';
$string['unenrolment'] = 'Disiscrizione';
$string['unit'] = 'Unità';
$string['unlockcompletion'] = 'Sblocca opzioni di completamento';
$string['unlockcompletiondelete'] = 'Sblocca le opzioni di completamento ed elimina lo stato di completamento degli utenti';
$string['updateactivities'] = 'Aggiorna lo stato di completamento delle attività selezionate';
$string['usealternateselector'] = 'Utilizza il selettore corsi alternativo';
$string['usernotenroled'] = 'L\'utente non è iscritto in questo corso';
$string['viewcoursereport'] = 'Visualizza il report del corso';
$string['viewingactivity'] = 'Visualizzazione di {$a}';
$string['withconditions'] = 'In base a condizioni';
$string['writingcompletiondata'] = 'Scrittura dello stato di completamento';
$string['xdays'] = '{$a} giorni';
$string['yourprogress'] = 'Il tuo stato di avanzamento';
