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
 * Strings for component 'attendanceregister', language 'el', version '3.11'.
 *
 * @package     attendanceregister
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['are_you_sure_to_delete_offline_session'] = 'Σίγουρα να διαγραφεί αυτή η σύνοδος εκτός λειτουργίας;';
$string['attendanceregister:addinstance'] = 'Προσθήκη νέου καταχωρητή παρουσιών';
$string['back_to_normal'] = 'Πίσω στην κανονική έκδοση';
$string['back_to_tracked_user_list'] = 'Πίσω στην λίστα των παρακολουθούμενων χρηστών';
$string['click_for_detail'] = 'Κάντε κλικ για λεπτομέρειες';
$string['comments'] = 'Σχόλια';
$string['completiondurationgroup'] = 'Συνολικός χρόνος παρακολούθησης';
$string['completiontotalduration'] = 'Απαιτείται χρόνος [minutes](λεπτά)';
$string['count'] = '#';
$string['dayscertificable'] = 'Ημέρες πίσω';
$string['dayscertificable_exceeded'] = 'Πρέπει να είναι όχι περισσότερο από {$a} μέρες πριν';
$string['duration'] = 'Διάρκεια';
$string['duration_hh_mm'] = '{$a->hours} ώρ., {$a->minutes} λεπτ.';
$string['duration_mm'] = '{$a->minutes} λεπτά';
$string['enable_offline_sessions_certification'] = 'Ενεργοποίηση συνόδων εκτός σύνδεσης';
$string['end'] = 'Τέλος';
$string['first_calc_at_next_cron_run'] = 'Οποιαδήποτε περασμένη σύνοδος θα εμφανιστεί στην επόμενη Cron';
$string['force_recalc_all_session'] = 'Επανυπολογισμός όλων των εντός σύνδεσης συνόδων';
$string['force_recalc_all_session_now'] = 'Επανυπολογισμός συνόδων, τώρα';
$string['force_recalc_user_session'] = 'Επανυπολογισμός συνόδων εντός σύνδεσης αυτού του χρήστη';
$string['fullname'] = 'Όνομα';
$string['grandtotal_time'] = 'Συνολικός χρόνος';
$string['insert_new_offline_session'] = 'Εισαγωγή μιας νέας εκτός σύνδεσης συνόδου εργασίας';
$string['insert_new_offline_session_for_another_user'] = 'Εισαγωγή μιας νέας εκτός σύνδεσης συνόδου εργασίας για {$a->fullname}';
$string['last_session_logout'] = 'Τέλος τελευταίας συνόδου';
$string['last_site_access'] = 'Τελευταία δραστηριότητα στον ιστότοπο';
$string['last_site_login'] = 'Τελευταία σύνδεση στον ιστότοπο';
$string['login_must_be_before_logout'] = 'Έναρξη μετά το τέλος!';
$string['logout_is_future'] = 'Δεν μπορεί να είναι στο μέλλον';
$string['mandatory_offline_sessions_comments'] = 'Υποχρεωτικά σχόλια';
$string['mandatoryofflinespecifycourse'] = 'Υποχρεωτική επιλογή μαθήματος';
$string['mandatoryofflinespecifycourse_help'] = 'Ο καθορισμός ενός μαθήματος σε συνεδρίες εκτός σύνδεσης θα είναι υποχρεωτικός';
$string['maynotaddselfcertforother'] = 'Δεν μπορείτε να προσθέσετε περιόδους σύνδεσης εκτός σύνδεσης για άλλους χρήστες.';
$string['modulename'] = 'Καταχωρητής παρουσιών';
$string['modulenameplural'] = 'Καταχωρητές παρουσιών';
$string['never'] = '(ποτέ)';
$string['no_refcourse'] = '(δεν καθορίστηκε μάθημα)';
$string['no_session'] = 'Καμία σύνοδος';
$string['no_session_for_this_user'] = '- Καμία σύνοδος για αυτόν τον χρήστη, ακόμη -';
$string['no_tracked_user'] = '- Κανένας χρήστης δεν παρακολουθείται από αυτόν τον καταχωρητή παρουσιών -';
$string['not_specified'] = '(δεν καθορίστηκε)';
$string['offline'] = 'Εκτός σύνδεσης';
$string['offline_refcourse_duration'] = 'Χρόνος εκτός σύνδεσης, Μάθημα:';
$string['offline_session_comments'] = 'Σχόλια';
$string['offline_session_comments_help'] = 'Περιγράψτε το θέμα συζήτησης της συνόδου εργασίας εκτός σύνδεσης.';
$string['offline_session_deleted'] = 'Η σύνοδος εκτός σύνδεσης διαγράφηκε';
$string['offline_session_end'] = 'Τέλος';
$string['offline_session_ref_course'] = 'ΜάθημαΑναφ.';
$string['offline_session_ref_course_help'] = 'Επιλέξτε το μάθημα για το οποίο έχει γίνει η εργασία εκτός σύνδεσης ή το μάθημα που καλύπτει το θέμα εργασίας.';
$string['offline_session_saved'] = 'Η νέα σύνοδος εκτός σύνδεσης αποθηκεύτηκε';
$string['offline_session_start'] = 'Έναρξη';
$string['offline_sessions_certification'] = 'Σύνοδοι εργασίας εκτός σύνδεσης';
$string['offline_sessions_total_duration'] = 'Συνολικός χρόνος εκτός σύνδεσης';
$string['offlinecomments'] = 'Σχόλια χρήστη';
$string['offlinecomments_help'] = 'Ενεργοποίηση προσθήκης σχολίων κειμένου σε συνόδους εκτός σύνδεσης';
$string['offlinespecifycourse'] = 'Καθορίστε το μάθημα της συνόδου εκτός σύνδεσης';
$string['online'] = 'Εντός σύνδεσης';
$string['online_offline'] = 'Εντός σύνδεσης/Εκτός σύνδεσης';
$string['online_session_updated'] = 'Οι σύνοδοι εντός σύνδεσης ενημερώθηκαν';
$string['online_session_updated_report'] = '{$a->fullname} Οι σύνοδοι εντός σύνδεσης ενημερώθηκαν: {$a->numnewsessions} νέες βρέθηκαν';
$string['online_sessions_total_duration'] = 'Συνολικός χρόνος συνόδων εντός σύνδεσης';
$string['onlyrealusercanaddofflinesessions'] = 'Μόνο πραγματικός χρήστης μπορεί να προσθέσει μια σύνοδο εκτός σύνδεσης';
$string['onlyrealusercandeleteofflinesessions'] = 'Μόνο πραγματικός χρήστης μπορεί να διαγράψει μια σύνοδο εκτός σύνδεσης';
$string['overlaps_old_sessions'] = 'Επικαλύπτει κάποια άλλη σύνοδο, είτε εντός είτε εκτός σύνδεσης';
$string['participants_attendance_report_viewed'] = 'Η αναφορά παρουσιών συμμετεχόντων εμφανίστηκε';
$string['pluginadministration'] = 'Διαχείριση καταχωρητών παρουσιών';
$string['pluginname'] = 'Καταχωρητής παρουσιών';
$string['prev_site_login'] = 'Προηγούμενη σύνδεση στην ιστοσελίδα';
$string['privacy:metadata:attendanceregister_aggregate'] = 'Παρακολουθεί τις συνόδους συναθροισμένες ανά χρήστη';
$string['privacy:metadata:attendanceregister_aggregate:duration'] = 'Η διάρκεια της συνόδου';
$string['privacy:metadata:attendanceregister_aggregate:grandtotal'] = 'Γενικός συνολικός χρόνος';
$string['privacy:metadata:attendanceregister_aggregate:onlinesess'] = 'Εάν η σύνοδος είναι εντός ή εκτός σύνδεσης';
$string['privacy:metadata:attendanceregister_aggregate:refcourse'] = 'Το μάθημα στο οποίο αναφέρεται μία σύνοδος εκτός σύνδεσης';
$string['privacy:metadata:attendanceregister_aggregate:total'] = 'Συνολικός χρόνος συνόδου';
$string['privacy:metadata:attendanceregister_aggregate:userid'] = 'Το αναγνωριστικό χρήστη';
$string['privacy:metadata:attendanceregister_session'] = 'Παρακολουθεί τις συνόδους του χρήστη';
$string['privacy:metadata:attendanceregister_session:addedbyuserid'] = 'Εάν η σύνοδος εκτός σύνδεσης έχει εισαχθεί από άλλο χρήστη, αυτό είναι το σχετικό αναγνωριστικό χρήστη (userid)';
$string['privacy:metadata:attendanceregister_session:comments'] = 'Σχόλια της συνόδου εκτός σύνδεσης';
$string['privacy:metadata:attendanceregister_session:duration'] = 'Η διάρκεια της συνόδου';
$string['privacy:metadata:attendanceregister_session:login'] = 'Η χρονοσήμανση σύνδεσης';
$string['privacy:metadata:attendanceregister_session:logout'] = 'Η χρονοσήμανση αποσύνδεσης';
$string['privacy:metadata:attendanceregister_session:onlinesess'] = 'Εάν η σύνοδος είναι εντός ή εκτός σύνδεσης';
$string['privacy:metadata:attendanceregister_session:refcourse'] = 'Το μάθημα στο οποίο αναφέρεται μία σύνοδος εκτός σύνδεσης';
$string['privacy:metadata:attendanceregister_session:userid'] = 'Το αναγνωριστικό χρήστη';
$string['recalc_already_pending'] = '(Εκκρεμεί ήδη για εκτέλεση με την επόμενη Cron)';
$string['recalc_complete'] = 'Ο επανυπολογισμός συνόδων ολοκληρώθηκε';
$string['recalc_scheduled'] = 'Ο επανυπολογισμός συνόδων έχει προγραμματιστεί. Θα εκτελεστεί στην επόμενη Cron';
$string['recalc_scheduled_on_next_cron'] = 'Ο επανυπολογισμός συνόδων έχει προγραμματιστεί για εκτέλεση στην επόμενη Cron';
$string['ref_course'] = 'ΜάθημαΑναφ.';
$string['registername'] = 'Όνομα καταχωρητή παρουσιών';
$string['registertype'] = 'Κατάσταση καταγραφών παρουσιών';
$string['schedule_reclalc_all_session'] = 'Χρονοδρομολόγηση επανυπολογισμού συνόδων';
$string['select_a_course'] = '- Επιλογή ενός μαθήματος -';
$string['select_a_course_if_any'] = '- Επιλογή ενός μαθήματος, αν υπάρχει -';
$string['session_added_by_another_user'] = 'Προστέθηκε από: {$a}';
$string['sessions_grandtotal_duration'] = 'Γενικός συνολικός χρόνος';
$string['sessiontimeout'] = 'Λήξη χρόνου συνόδου εντός σύνδεσης';
$string['show_my_sessions'] = 'Εμφάνιση των συνόδων μου';
$string['show_printable'] = 'Εμφάνιση εκτυπώσιμης έκδοσης';
$string['standardlog_disabled'] = 'Οι τυπικές καταγραφές του Moodle είναι απενεργοποιημένες. Όλες οι νέες σύνοδοι χρηστών, δεν παρακολουθούνται.';
$string['standardlog_readonly'] = 'Οι τυπικές καταγραφές του Moodle είναι μόνο για ανάγνωση. Όλες οι νέες σύνοδοι χρηστών, δεν παρακολουθούνται.';
$string['start'] = 'Έναρξη';
$string['total_time_offline'] = 'Συνολικός χρόνος εκτός σύνδεσης';
$string['total_time_online'] = 'Συνολικός χρόνος εντός σύνδεσης';
$string['tracked_courses'] = 'Παρακολουθούμενα μαθήματα';
$string['tracked_users'] = 'Παρακολουθούμενοι χρήστες';
$string['type_category'] = 'Όλα τα μαθήματα στην ίδια κατηγορία';
$string['type_course'] = 'Αυτό το μάθημα μόνο';
$string['type_meta'] = 'Όλα τα μαθήματα συνδέονται με μετα-σύνδεσμο μαθημάτων';
$string['unknown'] = '(άγνωστος)';
$string['unreasoneable_session'] = 'Σίγουρα; Αυτό διαρκεί περισσότερο από {$a} ώρες!';
$string['updating_online_sessions_of'] = 'Ενημέρωση ενός σύνδεσης συνόδων του {$a}';
$string['user_attendance_addoffline'] = 'Ο χρήστης προσθέτει μια εκτός σύνδεσης καταχώρηση παρουσιών';
$string['user_attendance_deloffline'] = 'Ο χρήστης διαγράφει μια εκτός σύνδεσης καταχώρηση παρουσιών';
$string['user_attendance_details_viewed'] = 'Οι λεπτομέρειες παρουσιών χρήστη έχουν εμφανιστεί';
$string['user_sessions_summary'] = 'Περίληψη συνόδων χρήστη';
