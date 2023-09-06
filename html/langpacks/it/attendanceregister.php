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
 * Strings for component 'attendanceregister', language 'it', version '4.1'.
 *
 * @package     attendanceregister
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['are_you_sure_to_delete_offline_session'] = 'Sei sicuro di eliminare questa sessione?';
$string['attendanceregister:addinstance'] = 'Aggiungere registri presenze';
$string['attendanceregister:addotherofflinesess'] = 'Aggiungere sessioni offline al al registro presenze di altri utenti';
$string['attendanceregister:addownofflinesess'] = 'Aggiungere sessioni offline al proprio registro presenze';
$string['attendanceregister:deleteotherofflinesess'] = 'Eliminare sessioni offline dal resigistro presenze di altri utenti';
$string['attendanceregister:deleteownofflinesess'] = 'Eliminare sessioni offline al proprio registro presenze';
$string['attendanceregister:recalcsessions'] = 'Forzare il ricalcolo delle sessioni online del registro presenze';
$string['attendanceregister:tracked'] = 'Essere tracciati dal registro presenze';
$string['attendanceregister:viewotherregisters'] = 'Visualizzare i registri presenze di altri utenti';
$string['attendanceregister:viewownregister'] = 'Visualizzare il proprio registro presenze';
$string['back_to_normal'] = 'Torna alla versione normale';
$string['back_to_tracked_user_list'] = 'Torna all\'elenco degli utenti';
$string['click_for_detail'] = 'click per visualizzare i dettagli';
$string['comments'] = 'Commenti';
$string['completiondurationgroup'] = 'Tempo totale tracciato';
$string['completiontotalduration'] = 'Tempo minimo [minuti]';
$string['count'] = '#';
$string['crontask'] = 'Ricalcolo sessioni registro presenze';
$string['dayscertificable'] = 'Massimo numero di giorni precedenti auto-certificabile';
$string['dayscertificable_exceeded'] = 'Non è possibile risalire a più di {$a} giorni fa';
$string['dayscertificable_help'] = 'Limita quanti giorni indietro può essere retrodatata
    un\'auto-certificazione di sessione offline';
$string['duration'] = 'Durata';
$string['duration_hh_mm'] = '{$a->hours} h, {$a->minutes} min';
$string['duration_mm'] = '{$a->minutes} min';
$string['enable_offline_sessions_certification'] = 'Abilita sessioni offline';
$string['end'] = 'Fine';
$string['first_calc_at_next_cron_run'] = 'Eventuali sessioni passate appariranno dopo la prossima elaborazione del cron';
$string['force_recalc_all_session'] = 'Forza ricalcolo delle sessioni online di tutti gli utenti';
$string['force_recalc_all_session_help'] = 'Elimina e ricalcola tutte le Sessioni online di tutti gli Utenti tracciati.<br />
    Normalmente <b>non è necessario ricalcolare</b> le sessioni!<br />
    Le nuove sessioni vengono automaticamente calcolate a aggiunte dopo un certo tempo.<br />
    Il ricalcolo è necessario <b>solamente</b> in questi casi:
    <ul>
      <li>Dopo aver modificato il ruolo di un utente che aveva precedentemente partecipato a questo corso (o ad un altro dei corsi tracciati
      dal registro), ma con un ruolo differente; p.e. passa da docente (non tracciato) a studente (tracciato)</li>
      <li>Dopo aver modificato le impostazioni del Registro che influenzano il calcolo delle Sessioni
      (<i>Modalità di tracciamento presenza</i> e <i>Timeout di sessione</i>)</li>
    </ul>
    Il ricalcolo <b>non è necessario quando si iscrive un nuovo partecipante</b>!<br /><br />
    L\'elaborazione può essere immediata oppure programmata.<br />
    Il ricalcolo programmato (consigliabile per corsi molto affollati)
    viene eseguito automaticamente alla prossima esecuzione del cron.';
$string['force_recalc_all_session_now'] = 'Ricalcola sessioni, ora';
$string['force_recalc_user_session'] = 'Forza ricalcolo sessioni online di questo Utente';
$string['force_recalc_user_session_help'] = 'Elimina e ricalcola tutte le sessioni online di questo utente.<br />
    Normalmente <b>non è necessario ricalcolare</b> le sessioni!<br />
    Le nuove sessioni vengono automaticamente calcolate a aggiunte dopo un certo tempo.<br />
    Il ricalcolo è necessario <b>solamente</b> in questi casi:
    <ul>
      <li>Dopo aver modificato il ruolo di questo utente e l\'utente aveva precedentemente partecipato a questo corso (o ad un altro dei corsi tracciati
      dal registro), ma con un ruolo differente; p.e. passa da docente (non tracciato) a studente (tracciato)</li>
      <li>Dopo aver modificato le impostazioni del registro che influenzano il calcolo delle sessioni
      (<i>Modalità di tracciamento presenza</i> e <i>Timeout di sessione</i>)</li>
    </ul>';
$string['fullname'] = 'Nome';
$string['grandtotal_time'] = 'Totale generale';
$string['insert_new_offline_session'] = 'Inserisci una nuova sessione offline';
$string['insert_new_offline_session_for_another_user'] = 'Inserisci una nuova sessione offline per {$a->fullname}';
$string['last_calc_online_session_logout'] = 'Ultima sessione online tracciata dal registro (esclusa sessione corrente)';
$string['last_session_logout'] = 'Fine ultima/attuale sessione online';
$string['last_site_access'] = 'Ultima attività registrata nel sito';
$string['last_site_login'] = 'Ultimo login al sito';
$string['login_must_be_before_logout'] = 'L\'Inizio della sessione non può essere dopo la fine';
$string['logout_is_future'] = 'Non può essere nel futuro';
$string['mandatory_offline_sessions_comments'] = 'Commenti obbligatori';
$string['mandatoryofflinespecifycourse'] = 'Corso di riferimento obbligatorio';
$string['mandatoryofflinespecifycourse_help'] = 'Rende obbligatorio specificare il corso di riferimento nell\'attività offline';
$string['maynotaddselfcertforother'] = 'Non sei autorizzato ad inserire Sessioni offline per conto di altri utenti.';
$string['mod_attendance_recalculation'] = 'Ricalcolo dei log per aggiornamento sessoni';
$string['modulename'] = 'Registro presenze';
$string['modulename_help'] = 'Il Registro presenze calcola il tempo passato dal partecipante
    all\'intero dei corsi.<br />
    Opzionalmente consente al partecipante di registrare attività effettuate "offline",
    cioè al di fuori del sito Moodle.<br />
    A seconda della <b>Modalità di tracciamento presenza</b>, il registro traccia
    le attività svolte in un singolo corso, in tutti i corsi di una categoria
    o in tutti i corsi con un <i>Collegamento meta corso</i> con il corso dove si
    trova il registro.<br />
    Le sessioni di lavoro online sono calcolate automaticamente dal registro,
    basandosi sul Log delle attività di Moodle.<br />
    <b>Le nuove sessioni online vengono aggiunte con un certo ritardo.</b> Il calcolo
    viene aggiornato periodicamente dal cron e comunque una sessione viene aggiunta
    solo dopo che l\'utente ha effettuato logout (o è scaduto il timeout di sessione).';
$string['modulenameplural'] = 'Registro presenze';
$string['never'] = '(mai)';
$string['no_refcourse'] = '(Corso non specificato)';
$string['no_session'] = 'Nessuna sessione';
$string['no_session_for_this_user'] = '- Non è ancora stata registrata nessuna sessione per questo utente -';
$string['no_tracked_user'] = '- Questo registro presenze non traccia nessun utente -';
$string['not_specified'] = '(non specificato)';
$string['offline'] = 'Offline';
$string['offline_refcourse_duration'] = 'Totale offline, per corso:';
$string['offline_session_comments'] = 'Commenti';
$string['offline_session_comments_help'] = 'Descrivi il lavoro svolto o l\'argomento di studio.';
$string['offline_session_deleted'] = 'La sessione offline è stata eliminata';
$string['offline_session_end'] = 'Fine';
$string['offline_session_ref_course'] = 'Corso di riferimento';
$string['offline_session_ref_course_help'] = 'Seleziona un corso al quale si riferisce il lavoro svolto offline';
$string['offline_session_saved'] = 'La nuova sessione offline è stata salvata';
$string['offline_session_start'] = 'Inizio';
$string['offline_session_start_help'] = 'Selezionare data e ora di Inizio e di fine della sessione offline.<br />
    Non può sovrapporsi con nessuna sessione precedente, sia online che offline, né con la sessione online attuale (dall\'ultimo login)';
$string['offline_sessions_certification'] = 'Sessioni offline (autocertificazione)';
$string['offline_sessions_certification_help'] = 'L\'utente potrà
    registrare (auto-certificare) delle sessioni di lavoro svolte al di fuori del sito.<br />
    Questa registrazione è utile se - per ragioni "burocratiche" - il partecipante
    deve mantenere un registro di tutte le attività di studio.<br />
    Notare che solo gli utenti reali possono inserire sessioni offline: gli amministratori
    in "Login come..." un altro utente NON POSSONO farlo!';
$string['offline_sessions_total_duration'] = 'Totale sessioni offline';
$string['offlinecomments'] = 'Commenti utente';
$string['offlinecomments_help'] = 'Abilita la possibilità di inserire commenti/descrizioni aggiuntive dell\'attività offline';
$string['offlinespecifycourse'] = 'Specificare il corso di riferimento';
$string['offlinespecifycourse_help'] = 'Consente di selezionare un corso di riferimento per un\'attività offline.<br />
    E\' significativo solo se il registro traccia più corsi (cioè in modalità: "Categoria" o "Meta-Collegamento"), altrimenti non ha senso';
$string['online'] = 'Online';
$string['online_offline'] = 'Online/Offline';
$string['online_session_updated'] = 'Sessioni online aggiornate';
$string['online_session_updated_report'] = 'Sessioni online di {$a->fullname} aggiornate: trovate {$a->numnewsessions} nuove';
$string['online_sessions_total_duration'] = 'Totale sessioni online';
$string['onlyrealusercanaddofflinesessions'] = 'Solo gli utenti reali possono inserire sessioni offline (no "Login come..." )';
$string['onlyrealusercandeleteofflinesessions'] = 'Solo gli utenti reali possono eliminare sessioni offline (no "Login come...")';
$string['overlaps_current_session'] = 'Non può sovrapporsi con la sessione attuale (dall\'ultimo Login)';
$string['overlaps_old_sessions'] = 'Non può sovrapporsi con altre sessioni registrate, né online né offline';
$string['participants_attendance_report_viewed'] = 'Visualizzato report generale partecipazione studenti';
$string['pluginadministration'] = 'Amministrazione Registro presenze';
$string['pluginname'] = 'Registro presenze';
$string['prev_site_login'] = 'Precedente login al sito';
$string['recalc_already_pending'] = '(Già programmato per il prossimo cron)';
$string['recalc_complete'] = 'Ricalcolo sessioni online completato';
$string['recalc_scheduled'] = 'Il ricalcolo sessioni è stato programmato. Verrà eseguito al prossimo cron';
$string['recalc_scheduled_on_next_cron'] = 'Il Ricalcolo sessioni è programmato per il prossimo cron';
$string['ref_course'] = 'Corso di rif.';
$string['registername'] = 'Nome registro presenze';
$string['registertype'] = 'Modalità di tracciamento presenza';
$string['registertype_help'] = 'La Modalità di tracciamento presenza determina
    in quali corsi viene tracciata l\'attività dei Partecipanti.
* _Solo questo corso_: solo il corso in cui si trova il registro.
* _Tutti i corsi nella stessa categoria_: viene tracciata l\'attività in questo corso più tutti quelli appartenenti alla stessa categoria
* _Tutti i corsi con collegamento meta corso_: viene tracciata l\'attività in questo corso e in tutti quelli con un Meta-collegamento (Meta-Corso pre 2.0)';
$string['schedule_reclalc_all_session'] = 'Ricalcolo sessioni al prossimo cron';
$string['select_a_course'] = '- Selezionare un corso -';
$string['select_a_course_if_any'] = '- Selezionare un corso (opzionale) -';
$string['session_added_by_another_user'] = 'Aggiunta da: {$a}';
$string['sessions_grandtotal_duration'] = 'Totale generale';
$string['sessiontimeout'] = 'Timeout di sessione';
$string['sessiontimeout_help'] = 'Il timeout di sessione è utilizzato per stimare la durata delle sessioni online.<br />
    Le sessioni online saranno almeno lunghe <b>meta</b> del tempo di timeout.<br />
    Se impostato ad un tempo troppo lungo, il registro tenderà a sovrastimare la durata delle sessioni online.<br />
    Se troppo corto, sessioni di lavoro reali saranno spezzate dal Registro in più Sessioni, corte.<br />
    <h3>Spiegazione lunga</h3>
    Le sessioni di lavoro online vengono <b>stimate</b> sulla base delle voci nel Log
    dell\'utente, per attività all\'interno dei corsi tracciati dal registro (vedi <i>Modalità di tracciamento presenza</i>).<br />
    Se tra due registrazioni di Log successive passa meno del timeout di sessione,
    il registro considera che l\'utente abbia continuato a lavorare online (quindi la sessione prosegue).<br />
    Se tra una registrazione e l\'altra passa più del timeout di sessione, il registro
    considera che l\'utente si sia scollegato <b>metà</b> del timeout di sessione dopo la prima registrazione
    (quindi la sessione viene terminata) e si sia ricollegato alla successiva registrazione
    (quindi viene iniziata una nuova sessione).';
$string['show_my_sessions'] = 'Le mie sessioni';
$string['show_printable'] = 'Versione stampabile';
$string['standardlog_disabled'] = 'Moodle standard log è disabilitato. Tutte le nuove sessioni degli utenti non sono tracciate';
$string['standardlog_readonly'] = 'Moodle standard Log è sola lettura. Tutte le nuove sessioni degli utenti non sono tracciate';
$string['start'] = 'Inizio';
$string['total_time_offline'] = 'Totale tempo offline';
$string['total_time_online'] = 'Totale tempo online';
$string['tracked_courses'] = 'Corsi tracciati';
$string['tracked_users'] = 'Utenti tracciati';
$string['type_category'] = 'Tutti i corsi nella stessa categoria';
$string['type_course'] = 'Solo questo corso';
$string['type_meta'] = 'Tutti i corsi con Collegamento meta corso';
$string['unknown'] = '(sconosciuto)';
$string['unreasoneable_session'] = 'Sei sicuro? Sono più di {$a} ore!';
$string['updating_online_sessions_of'] = 'Aggiornamento sessioni online di {$a}';
$string['user_attendance_addoffline'] = 'Aggiunta dichiarazione di partecipazione offline';
$string['user_attendance_deloffline'] = 'Cancellazione dichiarazione di partecipazione offline';
$string['user_attendance_details_viewed'] = 'Visti dettagli di partecipazione singolo utente';
$string['user_sessions_summary'] = 'Riepilogo sessioni utente';
