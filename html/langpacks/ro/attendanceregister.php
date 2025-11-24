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
 * Strings for component 'attendanceregister', language 'ro', version '4.5'.
 *
 * @package     attendanceregister
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['are_you_sure_to_delete_offline_session'] = 'Sunteți sigur că doriți să ștergeți această sesiune offline?';
$string['attendanceregister:addinstance'] = 'Adăugați un nou registru de prezență';
$string['attendanceregister:addotherofflinesess'] = 'Poate adăuga sesiuni Offline în Registrul altor persoane';
$string['attendanceregister:addownofflinesess'] = 'Poate adăuga sesiuni offline în propriul registru';
$string['attendanceregister:deleteotherofflinesess'] = 'Poate șterge sesiunile Offline din Registrul altor persoane';
$string['attendanceregister:deleteownofflinesess'] = 'Poate șterge sesiunile offline din propriul său registru';
$string['attendanceregister:recalcsessions'] = 'Se impun recalculările Sesiunile Registrului de Prezență';
$string['attendanceregister:tracked'] = 'Este monitorizat de Registrul de Prezență';
$string['attendanceregister:viewotherregisters'] = 'Se pot vizualiza Registrele de Prezență ale altor utilizatori';
$string['attendanceregister:viewownregister'] = 'Poate vedea propriile Registre de Prezență';
$string['back_to_normal'] = 'Înapoi la versiunea obișnuită';
$string['back_to_tracked_user_list'] = 'Înapoi la lista utilizatorilor monitorizați';
$string['click_for_detail'] = 'click pentru detalii';
$string['comments'] = 'Comentarii';
$string['completiondurationgroup'] = 'Timp total monitorizat';
$string['completiontotalduration'] = 'Timp necesar (minute)';
$string['count'] = '#';
$string['crontask'] = 'Recalculează prezența din sesiuni';
$string['dayscertificable'] = 'Zile din urmă';
$string['dayscertificable_exceeded'] = 'Trebuie să fie cu mai mult de {$a} zile în urmă';
$string['dayscertificable_help'] = 'Limitează cât de vechi pot fi sesiunile offline.<br />
    Un cursant nu poate să înregistreze o Sesiune Offline mai veche decât acest număr de zile.';
$string['duration'] = 'Durată';
$string['duration_hh_mm'] = '{$a->hours} h, {$a->minutes} min';
$string['duration_mm'] = '{$a->minutes} min';
$string['enable_offline_sessions_certification'] = 'Activați sesiunile offline';
$string['end'] = 'Încheiere';
$string['first_calc_at_next_cron_run'] = 'Orice sesiune finalizată va fi afișată la rularea următorului Cron';
$string['force_recalc_all_session'] = 'Recalculează toate Sesiunile online';
$string['force_recalc_all_session_now'] = 'Recalculează Sesiunile, acum';
$string['force_recalc_user_session'] = 'Recalculează numărul de sesiuni online la care a participat acest utilizator.';
$string['fullname'] = 'Nume';
$string['grandtotal_time'] = 'Timpul total';
$string['insert_new_offline_session'] = 'Inserează o nouă sesiune offline';
$string['insert_new_offline_session_for_another_user'] = 'Inserează o nouă sesiune offline a {$a->fullname}';
$string['last_session_logout'] = 'Încheierea ultimei sesiuni';
$string['last_site_access'] = 'Ultima activitate pe site';
$string['last_site_login'] = 'Ultima autentificare pe site';
$string['login_must_be_before_logout'] = 'Început după încheiere!';
$string['logout_is_future'] = 'S-ar putea să nu fie în viitor';
$string['mandatory_offline_sessions_comments'] = 'Comentarii Obligatorii';
$string['mandatoryofflinespecifycourse'] = 'Selecție Curs Obligatoriu';
$string['mandatoryofflinespecifycourse_help'] = 'Specificarea unui Curs în Sesiunile Offline va fi obligatorie';
$string['maynotaddselfcertforother'] = 'Nu puteți adăuga o sesiune offline pentru alți utilizatori.';
$string['mod_attendance_recalculation'] = 'Modul pentru recalcularea log-urilor sesiunilor actualizate';
$string['modulename'] = 'Înregistrare prezență';
$string['modulenameplural'] = 'Înregistrări prezență';
$string['myattendanceregisteraggregates'] = 'Valorile agregate ale registrului meu de prezență';
$string['myattendanceregistersessions'] = 'Înregistrarea sesiunilor de prezență';
$string['never'] = '(niciodată)';
$string['no_refcourse'] = '(niciun Curs specificat)';
$string['no_session'] = 'Nicio sesiune';
$string['no_session_for_this_user'] = '- Acest utilizator nu are încă nicio sesiune  -';
$string['no_tracked_user'] = '- Niciun utilizator monitorizat de acest Registru de Prezență -';
$string['not_specified'] = '(nespecificat)';
$string['offline'] = 'Offline';
$string['offline_refcourse_duration'] = 'Durată offline, Curs:';
$string['offline_session_comments'] = 'Comentarii';
$string['offline_session_comments_help'] = 'Decscrieți subiectul sesiunilor de lucru offline.';
$string['offline_session_deleted'] = 'Sesiunea offline a fost ștearsă';
$string['offline_session_end'] = 'Încheiere';
$string['offline_session_ref_course'] = 'Ref.Course';
$string['offline_session_ref_course_help'] = 'Selectați Cursul pentru care a fost efectuată activitate online sau Cursul care acoperă subiectul activității.';
$string['offline_session_saved'] = 'Sesiune nouă Offline salvată';
$string['offline_session_start'] = 'Start';
$string['offline_sessions_certification'] = 'Sesiuni offline';
$string['offline_sessions_total_duration'] = 'Durata Totală Offline';
$string['offlinecomments'] = 'Comentariile utilizatorului';
$string['offlinecomments_help'] = 'Actualizați adăugarea de comentarii textuale pentru Sesiunile Offline';
$string['offlinespecifycourse'] = 'Specificare Curs în Sesiuni Offline';
$string['online'] = 'Online';
$string['online_offline'] = 'Online/Offline';
$string['online_session_updated'] = 'Sesiuni Online actualizate';
$string['online_session_updated_report'] = '{$a->fullname} Sesiune Online actualizată: {$a->numnewsessions} sesiune nouă găsită';
$string['online_sessions_total_duration'] = 'Timp Total Sesiuni Online';
$string['onlyrealusercanaddofflinesessions'] = 'Doar un utilizator real poate adăuga o sesiune offline';
$string['onlyrealusercandeleteofflinesessions'] = 'Doar un utilizator real poate șterge sesiuni offline';
$string['overlaps_current_session'] = 'Suprapune Sesiunea online curentă (de la Autentificarea curentă)';
$string['overlaps_old_sessions'] = 'Se suprapune peste altă Sesiune, online sau offline';
$string['participants_attendance_report_viewed'] = 'Raportul prezenței participanților vizualizat';
$string['pluginadministration'] = 'Administrare Registru Prezență';
$string['pluginname'] = 'Înregistrare prezență';
$string['prev_site_login'] = 'Autentificare anterioară pe site';
$string['privacy:metadata:attendanceregister_aggregate'] = 'Monitorizează sesiunile agregate';
$string['privacy:metadata:attendanceregister_aggregate:duration'] = 'Durata sesiunii';
$string['privacy:metadata:attendanceregister_aggregate:grandtotal'] = 'Timp total consolidat';
$string['privacy:metadata:attendanceregister_aggregate:lastsessionlogout'] = 'Închiderea ultimei sesiuni online a utilizatorului, luată din attendanceregister_session logout';
$string['privacy:metadata:attendanceregister_aggregate:onlinesess'] = 'Dacă sesiunea este online sau offline';
$string['privacy:metadata:attendanceregister_aggregate:refcourse'] = 'Cursul la care se referă o sesiune offline';
$string['privacy:metadata:attendanceregister_aggregate:total'] = 'Durata totală a sesiunii';
$string['privacy:metadata:attendanceregister_aggregate:userid'] = 'userid';
$string['privacy:metadata:attendanceregister_lock:userid'] = 'Pentru a recalcula jurnalizarea efectuată de către utilizator, stocăm userid-ul sesiunii. Datele sunt temporare și sunt șterse după ce recalcularea sesiunii este finalizată.';
$string['privacy:metadata:attendanceregister_session'] = 'Monitorizează sesiunile utilizatorului';
$string['privacy:metadata:attendanceregister_session:addedbyuserid'] = 'Dacă sesiunea offline este inserată de un alt utilizator, acesta este ID-ul de utilizator aferent';
$string['privacy:metadata:attendanceregister_session:comments'] = 'Comentarii la sesiunile offline';
$string['privacy:metadata:attendanceregister_session:duration'] = 'Durata sesiunii';
$string['privacy:metadata:attendanceregister_session:login'] = 'Data și ora autentificării';
$string['privacy:metadata:attendanceregister_session:logout'] = 'Data și ora dezautentificării';
$string['privacy:metadata:attendanceregister_session:onlinesess'] = 'Dacă sesiunea este online sau offline';
$string['privacy:metadata:attendanceregister_session:refcourse'] = 'Cursul la care o sesiune offline se referă';
$string['privacy:metadata:attendanceregister_session:userid'] = 'userid';
$string['recalc_already_pending'] = '(Este în pending deja pentru execuție în următorul Cron)';
$string['recalc_complete'] = 'Recalcularea Sesiunii este finalizată';
$string['recalc_scheduled'] = 'Recalcularea sesiunii a fost programată. Se va executa la următorul Cron';
$string['recalc_scheduled_on_next_cron'] = 'Recalcularea sesiunilor este programată pentru execuție în următorul Cron';
$string['ref_course'] = 'Ref.Course';
$string['registername'] = 'Denumire Registru de Prezență';
$string['registertype'] = 'Mod de Urmărire a Prezenței';
$string['schedule_reclalc_all_session'] = 'Programare Recalculare Sesiuni';
$string['select_a_course'] = '- Selectează un Curs -';
$string['select_a_course_if_any'] = '- Selectați un curs, dacă există -';
$string['session_added_by_another_user'] = 'Adăugat de: {$a}';
$string['sessions_grandtotal_duration'] = 'Timp total consolidat';
$string['sessiontimeout'] = 'Durata sesiunii online';
$string['show_my_sessions'] = 'Afișează sesiunile mele';
$string['show_printable'] = 'Afișează variante pentru printare';
$string['standardlog_disabled'] = 'Moodle Standard Log este dezactivat. Nicio sesiune a noilor utilizatori nu este monitorizată';
$string['standardlog_readonly'] = 'Moodle Standard Log e readonly. Toate sesiunile utilizatorilor noi nu sunt monitorizate';
$string['start'] = 'Start';
$string['total_time_offline'] = 'Timp total Offline';
$string['total_time_online'] = 'Timp total Online';
$string['tracked_courses'] = 'Cursuri monitorizate';
$string['tracked_users'] = 'Utilizatori monitorizați';
$string['type_category'] = 'Toate cursurile în acceași Categorie';
$string['type_course'] = 'Doar acest curs';
$string['type_meta'] = 'Toate cursurile legate prin Curs meta link';
$string['unknown'] = '(necunoscut)';
$string['unreasoneable_session'] = 'Sunteți sigur(ă)? Durează mai multe de {$a} ore!';
$string['updating_online_sessions_of'] = 'Se actualizează sesiunile online ale {$a}';
$string['user_attendance_addoffline'] = 'Utilizatorul adaugă o prezență offline';
$string['user_attendance_deloffline'] = 'Utilzatorul șterge o prezență offline';
$string['user_attendance_details_viewed'] = 'Detalii despre prezența utilizatorului vizualizate';
$string['user_sessions_summary'] = 'Sumar al sesiunilor utilizatorului';
