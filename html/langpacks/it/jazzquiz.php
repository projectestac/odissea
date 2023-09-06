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
 * Strings for component 'jazzquiz', language 'it', version '4.1'.
 *
 * @package     jazzquiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['a_out_of_b_responded'] = '{$a->a} / {$a->b} ha risposto';
$string['a_out_of_b_voted'] = '{$a->a} / {$a->b} ha votato';
$string['a_responses'] = '{$a} risposte';
$string['a_students_answered'] = '<b>{$a}</b> studenti hanno risposto ad almeno una domanda.';
$string['a_students_joined_quiz'] = '<b>{$a}</b> studenti hanno partecipato al quiz.';
$string['add'] = 'Aggiungi';
$string['add_question'] = 'Aggiungi domanda';
$string['add_to_quiz'] = 'Aggiungi al quiz';
$string['allow_guests'] = 'Consenti ospiti';
$string['anonymous'] = 'Anonimo';
$string['anonymous_answers'] = 'Risposte anonime (la presenza può essere vista)';
$string['anonymous_answers_info'] = 'Le risposte vengono anonimizzate in questa sessione. La tua presenza viene comunque registrata';
$string['answer'] = 'Risposta';
$string['attempt_started'] = 'Hai già iniziato un tentativo, per favore click sotto per continuare con il tentativo aperto';
$string['attempts'] = 'Tentativi';
$string['attendance'] = 'Presenze';
$string['attendance_list'] = 'Elenco presenze';
$string['click_to_show_original_results'] = 'Clicca per visualizzare i risultati originali';
$string['click_to_show_vote_results'] = 'Clicca per visualizzare i risultati';
$string['closing_session'] = 'Chiusura sessione...';
$string['create_new_question'] = 'Crea nuova domanda';
$string['default_question_time'] = 'Tempo di default della domanda';
$string['default_question_time_help'] = 'Il tempo che viene impostato di default alle domande.<br>Può essere sovrascritto per le singole domande.';
$string['delete_question'] = 'Elimina domanda {$a}';
$string['download_attendance_list'] = 'Scarica elenco presenze';
$string['download_report'] = 'Scarica report';
$string['download_responses'] = 'Scarica risposte';
$string['edit'] = 'Modifica';
$string['edit_page_open_session_error'] = 'Non puoi modificare il quiz mentre la sessione è in corso.';
$string['edit_question'] = 'Modifica domanda';
$string['end'] = 'Fine';
$string['error_getting_current_results'] = 'Si è verificato un errore nel caricare i risultati correnti.';
$string['error_getting_vote_results'] = 'Si è verificato nel caricare il risultato della votazione.';
$string['error_saving_vote'] = 'Si è verificato un errore nel salvare il tuo voto.';
$string['error_starting_vote'] = 'Si è verificato un errore nell\'avvio della votazione.';
$string['error_with_request'] = 'Si è verificato un errore con la richiesta.';
$string['event_attempt_started'] = 'Tentativo iniziato';
$string['event_question_answered'] = 'Domanda risposta in un tentativo';
$string['exit'] = 'Esci';
$string['failed_to_end_question'] = 'Errore nel terminare la domanda';
$string['fullscreen'] = 'Schermo intero';
$string['fully_anonymous'] = 'Completamente anonimo';
$string['fully_anonymous_info'] = 'In questa sessione le risposte e la partecipazione sono completamente anonimi.';
$string['goto_session'] = 'Vai alla sessione in corso';
$string['improvise'] = 'Improvvisa';
$string['instructions_for_instructor'] = '<h3>Per favore leggi le istruzioni:</h3>
    <p>È possibile anche utilizzare dei tasti per eseguire le specifiche azioni.</p>
    <table>
        <tr>
               <th>Azione</th>
               <th>Tasto</th>
               <th>Descrizione</th>
        </tr>
        <tr>
            <td>
                <i class="fa fa-repeat"></i> Riproponi
            </td>
            <td>r</td>
            <td>
                Permette al docente di riproporre la domanda che è stata appena erogata.
                Equivale a selezionare la domanda dalla lista a discesa <i class="fa fa-bars"></i>.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-bar-chart"></i> Votazione
            </td>
            <td>v</td>
            <td>
                 Permetti agli studenti di votare le proprie risposte.
                 Il docente può cliccare una risposta per decidere se includerla o no nella votazione.
                 Cliccando sulla barra della risposta si attiva la modalità per unire le risposte.
                 La seconda barra cliccata sarà sostituita dalla prima.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-edit"></i> Improvvisa
            </td>
            <td>i</td>
            <td>
                Mostra una lista di tipologie di domande. Scrivi il testo della domanda e richiedi di rispondere.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-bars"></i> Salta
            </td>
            <td>j</td>
            <td>
                Mostra la lista di tutte le domanda previste per questo quiz.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-forward"></i> Prossima
            </td>
            <td>n</td>
            <td>
                Continua alla prossima domanda.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-close"></i> Fine
            </td>
            <td>e</td>
            <td>
                Termina l\'erogazione della domanda corrente.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-expand"></i> A tutto schermo
            </td>
            <td>f</td>
            <td>
                Mostra i risultati a tutto schermo. Le risposte non saranno mostrate durante l\'erogazione della domanda, in modo da poterla mantenere durante tutta la sessione.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-square-o"></i> / <i class="fa fa-check-square-o"></i> Risposta
            </td>
            <td>a</td>
            <td>
                Permette al docente di vedere la domanda con la risposta corretta selezionata.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-square-o"></i> / <i class="fa fa-check-square-o"></i> Risposte
            </td>
            <td>t (toggle)</td>
            <td>
                Nascondi o mostra le risposte degli studenti.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-window-close"></i> Termina sessione
            </td>
            <td></td>
            <td>
                Termina l\'erogazione della corrente sessione.
            </td>
        </tr>
    </table>';
$string['instructions_for_student'] = '<p>Per favore attendi che il docente avvii il quiz.</p>';
$string['instructor_sessions_going'] = 'C\'è già una sessione in corso. Per favore clicca sul pulsante di sotto per accedere alla sessione.';
$string['invalid_question_time'] = 'Il tempo della domanda deve essere un intero positivo (0 o superiore)';
$string['jazzquiz:addinstance'] = 'Aggiungere un\'istanza di JazzQuiz.';
$string['jazzquiz:attempt'] = 'Partecipare a un JazzQuiz.';
$string['jazzquiz:control'] = 'Controllare un JazzQuiz. (Normalmente solo per i docenti)';
$string['jazzquiz:editquestions'] = 'Modificare domande per un JazzQuiz.';
$string['jazzquiz:seeresponses'] = 'Vedere le risposte degli altri studenti per valutarle.';
$string['jazzquizsettings'] = 'Impostazioni generali di JazzQuiz';
$string['join_quiz'] = 'Partecipa al quiz';
$string['join_quiz_instructions'] = 'Clicca sotto per partecipare al quiz';
$string['jump'] = 'Vai a';
$string['loading'] = 'Caricamento....';
$string['modulename'] = 'JazzQuiz';
$string['modulename_help'] = '<p>
    L\'attività JazzQuiz permette al docente di creare e gestire quiz in modalità sincrona (real-time). Si possono utilizzare tutte le tipologie di domande utilizzate per i quiz.
</p>
<p>
    Il docente ha la possibilità di spostarsi tra le differenti domanda durante una sessione.
    Le risposte sono mostrate in diretta in un grafico a barre, ottimizzato per la proiezione. È anche disponibile la modalità a tutto scherzo.
    È possibile impostare un tempo limite per terminare automaticamente la somministrazione delle domande, oppure il docente può terminare manualmente la domanda e passare alla successiva.
</p>';
$string['modulenameplural'] = 'JazzQuiz';
$string['multichoice_options'] = 'Opzioni a Risposta Multipla';
$string['next'] = 'Prossima';
$string['no_attempts_found'] = 'Nessun tentativo trovato';
$string['no_session'] = 'Non c\'è una sessione in corso';
$string['no_sessions_exist'] = 'Non esistono ancora delle sessioni';
$string['no_students_have_joined'] = 'Nessun studente sta partecipando';
$string['no_time_limit'] = 'Nessun limite di tempo';
$string['no_time_limit_help'] = 'Seleziona questo campo per non avere il timer in questa domanda. <p>Il docente dovrà quindi cliccare sul Fine per terminare la domanda.</p>';
$string['nonanonymous_session'] = 'Sessione non anonima';
$string['nonanonymous_session_info'] = 'Questa è una sessione non anonima. Sia le risposte che la partecipazione sono memorizzate.';
$string['one_student_has_joined'] = '1 studente sta partecipando.';
$string['pluginadministration'] = 'Amministrazione JazzQuiz';
$string['pluginname'] = 'JazzQuiz';
$string['privacy:metadata:core_question'] = 'L\'attività JazzQuiz memorizza informazioni di utilizzo delle domande nel sottosistema core_question.';
$string['privacy:metadata:jazzquiz_attempts'] = 'Dettagli del tentativo del quiz per una sessione JazzQuiz.';
$string['privacy:metadata:jazzquiz_attempts:responded'] = 'Se all\'ultima domanda proposta è stata data risposta o no.';
$string['privacy:metadata:jazzquiz_attempts:timefinish'] = 'L\'orario di termine dell\'ultima domanda proposta nel tentativo.';
$string['privacy:metadata:jazzquiz_attempts:timemodified'] = 'L\'orario di modifica dell\'ultima domanda proposta nel tentativo.';
$string['privacy:metadata:jazzquiz_attempts:timestart'] = 'L\'orario di inizio dell\'ultima domanda proposta nel tentativo.';
$string['privacy:metadata:jazzquiz_attempts:userid'] = 'L\'utente che ha svolto il tentativo.';
$string['question'] = 'Domanda';
$string['question_move_down'] = 'Sposta sotto la domanda {$a}';
$string['question_move_up'] = 'Sposta sopra la domanda {$a}';
$string['question_time'] = 'Tempo a disposizione per la domanda';
$string['question_time_help'] = 'Tempo a disposizione per la domanda (in secondi)';
$string['question_will_end_in_x_seconds'] = 'La domanda terminerà in {$a} secondi';
$string['question_will_start_in_x_seconds'] = 'La domanda inizierà tra {$a} secondi';
$string['question_will_start_now'] = 'La domanda inizierà ora.';
$string['questions'] = 'Domande';
$string['quit'] = 'Termina sessione';
$string['quiz_not_running'] = '<p>Aspetta che il docente avvii il quiz</p><p>Usa il pulsante Ricarica per verificare se è partito.</p>';
$string['repoll'] = 'Riproponi';
$string['reports'] = 'Risultati';
$string['responses'] = 'Risposte';
$string['review'] = 'Rivedi';
$string['save_question'] = 'Salva domanda';
$string['select_session'] = 'Seleziona la sessione da rivedere:';
$string['session'] = 'Sessione';
$string['session_closed'] = 'La sessione è conclusa';
$string['session_name'] = 'Nome della sessione';
$string['session_name_required'] = 'Il nome della sessione è obbligatore';
$string['short_answer'] = 'Risposta breve';
$string['short_math_answer'] = 'Risposta matematica breve';
$string['showing_original_results'] = 'Risultati originali';
$string['showing_vote_results'] = 'Risultati della votazione';
$string['start_session'] = 'Inizia sessione';
$string['startquiz'] = 'Inizia quiz';
$string['student'] = 'Studente';
$string['teacher_start_instructions'] = '<p>Inizia un quiz da far sostenere agli studenti</p><p>Inserisci sotto un nome di sessione che ti permetta di recuperarlo successivamente tra i risultati.</p>';
$string['unable_to_create_session'] = 'Impossibile creare la sessione';
$string['view'] = 'Vedi';
$string['vote'] = 'Vota';
$string['wait_for_instructor'] = 'Per favore attendi che il docente avvii la prossima domanda.';
$string['wait_for_question_time'] = 'Tempo di attesa per l\'avvio della domanda';
$string['wait_for_question_time_help'] = 'Il tempo di attesa prima dell\'avvio della domanda.';
$string['wait_for_students'] = 'In attesa della partecipazione degli studenti';
$string['x_seconds_left'] = '{$a}s mancanti';
$string['x_students_have_joined'] = '{$a} studenti stanno partecipando';
$string['you_already_voted'] = 'Spiacente, hai già votato.';
