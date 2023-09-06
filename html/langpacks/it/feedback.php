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
 * Strings for component 'feedback', language 'it', version '4.1'.
 *
 * @package     feedback
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_item'] = 'Aggiungi domanda';
$string['add_pagebreak'] = 'Interruzione di pagina';
$string['adjustment'] = 'Allineamento';
$string['after_submit'] = 'Al termine della compilazione';
$string['allowfullanonymous'] = 'Modalità completamente anonima';
$string['analysis'] = 'Analisi';
$string['anonymous'] = 'Anonimo';
$string['anonymous_edit'] = 'Privacy';
$string['anonymous_entries'] = 'Compilazioni anonime ({$a})';
$string['anonymous_user'] = 'Utente anonimo';
$string['answerquestions'] = 'Rispondi alla domanda';
$string['append_new_items'] = 'Aggiungi nuove domande';
$string['autonumbering'] = 'Numera le domande automaticamente';
$string['autonumbering_help'] = 'Abilita o disabilita la numerazione automatica delle domande';
$string['average'] = 'Media';
$string['bold'] = 'Grassetto';
$string['calendarend'] = '{$a} chiude';
$string['calendarstart'] = '{$a} apre';
$string['cannotaccess'] = 'Puoi accedere al feedback solamente da un corso.';
$string['cannotsavetempl'] = 'il salvataggio dei modelli non è consentito';
$string['captcha'] = 'Captcha';
$string['captchanotset'] = 'Il captcha non è stato impostato.';
$string['check'] = 'Scelta multipla - più alternative';
$string['check_values'] = 'Risposte possibili';
$string['checkbox'] = 'Scelta multipla - più alternative (caselle di spunta)';
$string['choosefile'] = 'Scegli un file';
$string['chosen_feedback_response'] = 'Risposte selezionate del feedback';
$string['closebeforeopen'] = 'Hai impostato una dati di chiusura antecedente alla dati di apertura.';
$string['complete_the_form'] = 'Compila il feedback';
$string['completed'] = 'Completato';
$string['completed_feedbacks'] = 'Risposte inviate';
$string['completedon'] = 'Completato il {$a}';
$string['completiondetail:submit'] = 'Inviare feedback';
$string['completionsubmit'] = 'Completato all\'atto della consegna del feedback';
$string['configallowfullanonymous'] = 'L\'impostazione consente di completare un feedback senza  autenticarsi. È valida solo per feedback presenti nella pagina home.';
$string['confirmdeleteentry'] = 'Confermi l\'eliminazione di questo elemento?';
$string['confirmdeleteitem'] = 'Confermi l\'eliminazione di questa domanda?';
$string['confirmdeletetemplate'] = 'Confermi l\'eliminazione di questo modello?';
$string['confirmusetemplate'] = 'Confermi di voler utilizzare questo modello?';
$string['continue_the_form'] = 'Continua a compilare il feedback';
$string['count_of_nums'] = 'Numero di cifre';
$string['courseid'] = 'ID del corso';
$string['creating_templates'] = 'Salva le domande come modello';
$string['delete_entry'] = 'Elimina elemento';
$string['delete_item'] = 'Elimina domanda';
$string['delete_old_items'] = 'Elimina vecchi elementi';
$string['delete_pagebreak'] = 'Elimina interruzione di pagina';
$string['delete_template'] = 'Elimina modello';
$string['delete_templates'] = 'Eliminazione modello...';
$string['depending'] = 'Dipendenze';
$string['depending_help'] = 'La dipendenza consente di visualizzare domande in funzione della risposta data in una domanda precedente.<br />
<strong>Di seguito un esempio di creazione:</strong><br /><ul>
<li>Creare una domanda con più risposte.</li>
<li>Aggiungere una interruzione di pagina.</li>
<li>Aggiungere la domanda dipendente dalla risposta precedente ed impostare il valore "dipendente da" e la risposta in "con questa risposta".</li>
</ul><strong>Esempio:</strong>
<ol><li>Domanda A: possiedi un\'automobile? Possibili risposte: si/no</li>
<li>Interruzione di pagina</li>
<li>Domanda B: quale è il colore della tua automobile<br /> (domanda dipendente dalla risposta "si" alla domanda A)</li>
<li>Domanda C: Come mai non possiedi un\'automobile?<br /> (domanda dipendente dalla risposta "no" alla domanda A)</li> <li> ... altre domande</li> </ol>';
$string['dependitem'] = 'Dipendente da';
$string['dependvalue'] = 'Con questa risposta';
$string['description'] = 'Descrizione';
$string['do_not_analyse_empty_submits'] = 'Non analizzare risposte vuote';
$string['downloadresponseas'] = 'Scarica tutte le risposte come:';
$string['drop_feedback'] = 'Rimuovi da questo corso';
$string['dropdown'] = 'Scelta multipla - una sola risposta consentita (menù a discesa)';
$string['dropdown_values'] = 'Risposte';
$string['dropdownlist'] = 'Scelta multipla - una sola risposta (menù a discesa)';
$string['dropdownrated'] = 'Menù a discesa (valorizzato)';
$string['edit_item'] = 'Modifica domanda';
$string['edit_items'] = 'Domande';
$string['email_notification'] = 'Notifica consegne via email';
$string['email_notification_help'] = 'Il docente riceverà notifiche email per ciascun feedback compilato.';
$string['emailteachermail'] = '{$a->username} ha compilato il feedback: \'{$a->feedback}\'

Puoi vedere le risposte al seguente indirizzo:

{$a->url}';
$string['emailteachermailhtml'] = '<p>{$a->username} ha compilato il feedback: <i>\'{$a->feedback}\'</i>.</p>
<p>Puoi vedere le risposte su <a href="{$a->url}">questa pagina</a>.</p>';
$string['entries_saved'] = 'Le tue risposte sono state salvate. Grazie.';
$string['eventresponsedeleted'] = 'Eliminazione risposta';
$string['eventresponsesubmitted'] = 'Invio risposte';
$string['export_questions'] = 'Esporta domande';
$string['export_to_excel'] = 'Esporta in formato Excel';
$string['feedback:addinstance'] = 'Aggiungere feedback';
$string['feedback:complete'] = 'Compilare un feedback';
$string['feedback:createprivatetemplate'] = 'Creare un modello privato';
$string['feedback:createpublictemplate'] = 'Creare un modello pubblico';
$string['feedback:deletesubmissions'] = 'Eliminare feedback compilati';
$string['feedback:deletetemplate'] = 'Eliminare un modello';
$string['feedback:edititems'] = 'Modificare le domande';
$string['feedback:mapcourse'] = 'Associare corsi con feedback globali';
$string['feedback:receivemail'] = 'Ricevere notifiche via email';
$string['feedback:view'] = 'Visualizzare un feedback';
$string['feedback:viewanalysepage'] = 'Visualizzare la pagina di analisi dopo l\'invio';
$string['feedback:viewreports'] = 'Visualizzare i report';
$string['feedback_is_not_for_anonymous'] = 'Il feedback non è disponibile agli utenti anonimi';
$string['feedback_is_not_open'] = 'Il feedback non è aperto';
$string['feedbackclose'] = 'Chiusura';
$string['feedbackcompleted'] = '{$a->username} ha completato {$a->feedbackname}';
$string['feedbackopen'] = 'Apertura';
$string['feedbackupdated'] = 'Il feedback è stato aggiornato.';
$string['file'] = 'File';
$string['filter_by_course'] = 'Filtra per corso';
$string['handling_error'] = 'Si è verificato un errore nella gestione del modulo Feedback';
$string['hide_no_select_option'] = 'Nascondi l\'opzione "Non selezionato"';
$string['horizontal'] = 'Orizzontale';
$string['import_questions'] = 'Importa domande';
$string['import_successfully'] = 'Importazione completata';
$string['importfromthisfile'] = 'Importa da questo file';
$string['includeuserinrecipientslist'] = 'Includi {$a} nell\'elenco dei destinatari,';
$string['indicator:cognitivedepth'] = 'Feedback cognitivo';
$string['indicator:cognitivedepth_help'] = 'L\'indicatore è basato sulla profondità cognitiva toccata dallo studente svolgendo attività Feedback.';
$string['indicator:cognitivedepthdef'] = 'Feedback cognitivo';
$string['indicator:cognitivedepthdef_help'] = 'Durante l\'intervallo di analisi, il partecipante ha raggiunto questa percentuale di coinvolgimento cognitivo offerto dalle attività Feedback (Livelli: Nessuna visualizzazione, Visualizzazione, Invio)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Feedback sociale';
$string['indicator:socialbreadth_help'] = 'L\'indicatore è basato sulla dimensione sociale raggiunta dallo studente svolgendo attività Feedback.';
$string['indicator:socialbreadthdef'] = 'Feedback sociale';
$string['indicator:socialbreadthdef_help'] = 'Durante l\'intervallo di analisi, il partecipante ha raggiunto questa percentuale di coinvolgimento sociale offerto dall\'attività Feedback (Livelli: Nessuna partecipazione, Partecipazione da solo, Partecipazione con altri)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['info'] = 'Informazione';
$string['infotype'] = 'Tipo di informazione';
$string['insufficient_responses'] = 'risposte insufficienti';
$string['insufficient_responses_for_this_group'] = 'Questo gruppo ha fornito un numero di risposte insufficienti';
$string['insufficient_responses_help'] = 'Per mantenere il questionario anonimo devono pervenire almeno due risposte.';
$string['item_label'] = 'Etichetta';
$string['item_name'] = 'Testo della domanda';
$string['label'] = 'Etichetta';
$string['labelcontents'] = 'Contenuto';
$string['mapcourse'] = 'Associa feedback ai corsi';
$string['mapcourse_help'] = 'Di default i feedback creati nella pagina home del sito sono disponibili in tutti i corsi tramite il blocco feedback. Se desideri evitarlo, è possibile rendere permanente il blocco feedback oppure puoi associare il feedback solo a determinati corsi.';
$string['mapcourseinfo'] = 'Questo è un feedback globale,  usando il blocco feedback sarà disponibile in tutti i corsi . È comunque possibile limitare i corsi in cui apparirà il feedback associandoli. Cerca i corsi e associali a questo feedback.';
$string['mapcoursenone'] = 'Nessun corso associato. Il feedback è disponibile per tutti i corsi.';
$string['mapcourses'] = 'Associa feedback ai corsi';
$string['mappedcourses'] = 'Corsi associati';
$string['mappingchanged'] = 'Le mappature del corso sono state modificate';
$string['maximal'] = 'Massimo';
$string['messageprovider:message'] = 'Promemoria feedback';
$string['messageprovider:submission'] = 'Notifiche dei feedback';
$string['minimal'] = 'Minimo';
$string['mode'] = 'Modalità';
$string['modulename'] = 'Feedback';
$string['modulename_help'] = 'Il modulo di attività feedback consente al docente di creare sondaggi personalizzati utili per raccogliere i feedback dai partecipanti. È possibile usare vari tipi di domande, come ad esempio domande a scelta multipla, sì/no, a risposta libera, eccetera.

Se lo si desidera è possibile rendere anonime le risposte, così come è possibile visualizzare o meno agli studenti i risultati del sondaggio. Le attività feedback presenti sulla pagina home del sito possono essere configurate per essere compilate anche da utenti non autenticati.

È possibile usare il feedback per:

* valutare i corsi, aiutando ad individuare aree di miglioramento per edizioni future
* consentire ai partecipanti di prenotare moduli del corso ed eventi
* ricevere sondaggi su preferenze di corsi e politiche da adottare da parte di utenti non autenticati
* ricavare informazioni in forma anonima su casi di bullismo';
$string['modulename_link'] = 'mod/feedback/view';
$string['modulenameplural'] = 'Feedback';
$string['move_item'] = 'Sposta domanda';
$string['multichoice'] = 'Scelta multipla';
$string['multichoice_values'] = 'Valori da scegliere';
$string['multichoiceoption'] = '<span class="weight">({$a->weight}) </span>{$a->name}';
$string['multichoicerated'] = 'Scelta multipla (valorizzata)';
$string['multichoicetype'] = 'Tipo di scelta';
$string['multiplesubmit'] = 'Compilazioni multiple';
$string['multiplesubmit_help'] = 'Nei feedback anonimi gli utenti potranno compilare il feedback quante volte vorranno.';
$string['name'] = 'Titolo';
$string['name_required'] = 'Il titolo è obbligatorio';
$string['nameandlabelformat'] = '({$a->label}) {$a->name}';
$string['next_page'] = 'Pagina successiva';
$string['no_handler'] = 'Non esiste un "action handler" per';
$string['no_itemlabel'] = 'Senza etichetta';
$string['no_itemname'] = 'Domanda priva di testo';
$string['no_items_available_yet'] = 'Non è stata Nessuna domanda è stata ancora impostata';
$string['no_templates_available_yet'] = 'Nessun modello disponibile';
$string['non_anonymous'] = 'Il nome del partecipante verrà registrato e visualizzato nelle risposte';
$string['non_anonymous_entries'] = 'Risposte non anonime ({$a})';
$string['non_respondents_students'] = 'Studenti che non hanno risposto ({$a})';
$string['not_completed_yet'] = 'Non ancora completato';
$string['not_selected'] = 'Nessuna scelta';
$string['not_started'] = 'Non iniziato';
$string['numberoutofrange'] = 'Il numero è fuori scala';
$string['numeric'] = 'Numerica';
$string['numeric_range_from'] = 'Valori ammessi da';
$string['numeric_range_to'] = 'a';
$string['of'] = 'di';
$string['oldvaluespreserved'] = 'Tutte le vecchie domande e i valori assegnati saranno conservati';
$string['oldvalueswillbedeleted'] = 'Le domande e tutte le risposte degli utenti saranno eliminate';
$string['only_one_captcha_allowed'] = 'È possibile inserire un solo captcha per ciascun feedback.';
$string['openafterclose'] = 'Hai specificato una data di apertura successiva alla data di chiusura';
$string['overview'] = 'Panoramica';
$string['page'] = 'Pagina';
$string['page-mod-feedback-x'] = 'Qualsiasi pagina con modulo feedback';
$string['page_after_submit'] = 'Messaggio da visualizzare dopo la compilazione';
$string['pagebreak'] = 'Interruzione di pagina';
$string['pluginadministration'] = 'Gestione Feedback';
$string['pluginname'] = 'Feedback';
$string['position'] = 'Posizione';
$string['previewquestions'] = 'Anteprima domande';
$string['previous_page'] = 'Pagina precedente';
$string['privacy:metadata:completed'] = 'Record delle consegne dei feedback';
$string['privacy:metadata:completed:anonymousresponse'] = 'Scelta per consegna anonima o meno.';
$string['privacy:metadata:completed:timemodified'] = 'Data e ora di ultima modifica della consegna.';
$string['privacy:metadata:completed:userid'] = 'ID dell\'utente che ha completato l\'attività di feedback.';
$string['privacy:metadata:completedtmp'] = 'Registro delle consegne che sono ancora in corso.';
$string['privacy:metadata:value'] = 'Registro della risposta a una domanda.';
$string['privacy:metadata:value:value'] = 'La riposta data.';
$string['privacy:metadata:valuetmp'] = 'Registro della risposta a una domanda in una consegna in corso.';
$string['public'] = 'Pubblico';
$string['question'] = 'Domanda';
$string['questionandsubmission'] = 'Impostazioni compilazione';
$string['questions'] = 'Domande';
$string['questionslimited'] = 'Sono visualizzate le prime domande {$a}, per visualizzarle tutte visualizza le singole risposte oppure scarica la tabella con i dati.';
$string['radio'] = 'Scelta multipla - una sola alternativa';
$string['radio_values'] = 'Risposte';
$string['ready_feedbacks'] = 'Feedback disponibili';
$string['required'] = 'La risposta è obbligatoria';
$string['resetting_data'] = 'Reset delle risposte del feedback';
$string['resetting_feedbacks'] = 'Reset dei feedback';
$string['response_nr'] = 'Risposta numero';
$string['responses'] = 'Risposte';
$string['responsetime'] = 'Ora delle risposte';
$string['save_as_new_item'] = 'Salva come nuova domanda';
$string['save_as_new_template'] = 'Salva come modello';
$string['save_entries'] = 'Invia le risposte';
$string['save_item'] = 'Salva';
$string['saving_failed'] = 'Il salvataggio non è riuscito';
$string['search:activity'] = 'Feedback - Informazioni sull\'attività';
$string['search_course'] = 'Cerca corso';
$string['searchcourses'] = 'Cerca corsi';
$string['searchcourses_help'] = 'È possibile cercare il codice  o il titolo del corso o dei corsi che intendi associare al feedback.';
$string['selected_dump'] = 'Gli indici selezionati della variabile $SESSION sono visualizzati di seguito:';
$string['send'] = 'Invia';
$string['send_message'] = 'Invia notifica';
$string['show_all'] = 'Visualizza tutto';
$string['show_analysepage_after_submit'] = 'Visualizza la pagina di analisi';
$string['show_entries'] = 'Risposte';
$string['show_entry'] = 'Visualizza risposta';
$string['show_nonrespondents'] = 'Risposte mancanti';
$string['site_after_submit'] = 'Sito da collegare a compilazione terminata';
$string['sort_by_course'] = 'Ordina per corso';
$string['started'] = 'Aperto';
$string['startedon'] = 'Aperto il {$a}';
$string['subject'] = 'Argomento';
$string['switch_item_to_not_required'] = 'Cambia in: risposta facoltativa';
$string['switch_item_to_required'] = 'Cambia in: risposta obbligatoria';
$string['template'] = 'Modello';
$string['template_deleted'] = 'Il modello è stato eliminato';
$string['template_saved'] = 'Il modello è stato salvato';
$string['templates'] = 'Modelli';
$string['textarea'] = 'Risposta lunga';
$string['textarea_height'] = 'Numero righe';
$string['textarea_width'] = 'Caratteri per riga';
$string['textfield'] = 'Risposta breve';
$string['textfield_maxlength'] = 'Numero max. caratteri accettati';
$string['textfield_size'] = 'Larghezza del campo della risposta';
$string['there_are_no_settings_for_recaptcha'] = 'Non ci sono impostazioni per il captcha';
$string['this_feedback_is_already_submitted'] = 'Hai già completato questa attività.';
$string['typemissing'] = 'Manca il "tipo"';
$string['update_item'] = 'Salva modifiche';
$string['url_for_continue'] = 'Link ad attività successiva';
$string['url_for_continue_help'] = 'Di default al termine della compilazione del feedback il pulsante Continua rimanda alla pagina home del corso. È possibile impostare link ad una attività successiva.';
$string['use_one_line_for_each_value'] = 'È necessario utilizzare una riga per ciascun valore';
$string['use_this_template'] = 'Usa questo modello';
$string['using_templates'] = 'Usa un modello';
$string['vertical'] = 'Verticale';
$string['whatfor'] = 'Cosa desideri fare?';
