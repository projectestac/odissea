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
 * Strings for component 'auth_antihammer', language 'el', version '3.11'.
 *
 * @package     auth_antihammer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:confirm-delete-hammer'] = 'Διαγραφή στοιχείου σφυρηλάτησης (hammering)';
$string['action:confirm-delete-log'] = 'Διαγραφή στοιχείου καταγραφής';
$string['action:delete:hammeritem'] = 'Διαγραφή στοιχείου σφυρηλάτησης (hammering)';
$string['action:delete:ipblock'] = 'Αφαίρεση μπλοκ διεύθυνσης IP';
$string['action:delete:logitem'] = 'Διαγραφή στοιχείου καταγραφής';
$string['action:view:logitem'] = 'Εμφάνιση λεπτομερειών καταγραφής';
$string['addcfgipblock'] = 'Προσθέστε την απαγορευμένη IP στις ρυθμίσεις του ιστοτόπου';
$string['addcfgipblock_desc'] = 'Ενεργοποιήστε αυτήν την επιλογή εάν θέλετε να προσθέσετε μια μπλοκαρισμένη διεύθυνση IP στην γενική <a href="{$a}">λίστα μπλοκαρισμένων διευθύνσεων IP</a>.';
$string['antihammer:delete'] = 'Καταργήστε τις εγγραφές';
$string['ap:log'] = 'Καταγραφές Antihammer';
$string['ap:logdetails'] = 'Λεπτομέρειες καταγραφών Antihammer';
$string['ap:report'] = 'Αναφορές Antihammer';
$string['ap:ro'] = 'Κατ\' επανάληψη παραβάτες';
$string['attemptcounter'] = 'Χρονικό διάστημα προσπαθειών';
$string['attempts'] = 'Μέγιστος αριθμός προσπαθειών';
$string['auth_antihammer_ipblocksettings'] = 'Θέλετε να προσθέσετε απαγορεύσεις διευθύνσεων IP στις ρυθμίσεις του ιστοτόπου;';
$string['auth_antihammer_ipsettings'] = 'Ρυθμίσεις μπλοκαρίσματος διευθύνσεων IP';
$string['auth_antihammer_ipsettings_desc'] = '';
$string['auth_antihammer_messagesettings'] = 'Ρυθμίσεις ειδοποιήσεων / ανταλλαγής μηνυμάτων';
$string['auth_antihammer_messagesettings_desc'] = '';
$string['auth_antihammer_miscsettings'] = 'Διάφορες ρυθμίσεις';
$string['auth_antihammer_miscsettings_desc'] = '';
$string['auth_antihammer_usersettings'] = 'Ρυθμίσεις αποκλεισμού χρήστη';
$string['auth_antihammer_usersettings_desc'] = '';
$string['autocleanlog'] = 'Αυτόματη εκκαθάριση καταγραφών;';
$string['autocleanlog_after'] = 'Αυτόματη εκκαθάριση καταγραφών που είναι παλαιότερες από';
$string['autoclear_ipblock'] = 'Αυτόματη εκκαθάριση μπλοκαρισμένων διευθύνσεων IP;';
$string['blockip'] = 'Μπλοκάρισμα κατά τη διεύθυνση IP;';
$string['blockpage'] = 'Η σελίδα που θα εμφανίζεται όταν κάποιος μπλοκάρεται';
$string['blockusername'] = 'Μπλοκάρισμα κατά το όνομα χρήστη;';
$string['config:autocleanlog:disabled'] = 'Ο αυτόματος καθαρισμός των καταγραφών antihammer είναι απενεργοποιημένος στις καθολικές ρυθμίσεις';
$string['delete:all'] = 'Διαγραφή όλων των εγγραφών';
$string['ip:whitelist'] = 'Διεύθυνση IP λίστας επιτρεπομένων διευθύνσεων IP';
$string['ip_attemptcounter'] = 'Χρονικό διάστημα προσπαθειών διευθύνσεων IP';
$string['ip_attempts'] = 'Μέγιστος αριθμός προσπαθειών';
$string['ipwhitelist'] = 'Λίστα επιτρεπομένων διευθύνσεων IP';
$string['log:info:blocked'] = 'Μπλοκάρισμα: {$a}';
$string['lookup:iplookup'] = 'Αναζήτηση διεύθυνσης IP (moodle)';
$string['lookup:whatismyip'] = 'Αναζήτηση στο whatismyipaddress.com';
$string['mail:blocking:subject'] = 'Αποτροπή hammering σύνδεσης: αποκλεισμός χρήστη ή διεύθυνσης IP';
$string['messageprovider:antihammerblocking'] = 'Ειδοποίηση μπλοκαρίσματος διεύθυνσης IP/λογαριασμού';
$string['notifymainadmin'] = 'Να ενημερώνεται πάντα ο κύριος διαχειριστής;';
$string['notifymainadmin_desc'] = 'Ενεργοποιήστε αυτή την επιλογή αν θέλετε πάντα να ενημερώνεται ο κύριος διαχειριστής του Moodle μέσω ηλε.ταχυδρομείου.<br/>
ΣΗΜΕΙΩΣΗ: Ο κύριος διαχειριστής <i> ενδέχεται </i> να λάβει δύο ειδοποιήσεις αν η παραπάνω επιλογή είναι ενεργοποιημένη και έχουν επίσης ενεργοποιημένη την επιλογή λήψης μηνυμάτων μέσω ηλε.ταχυδρομείου!';
$string['pluginname'] = 'Αποτροπή hammering / μπλοκάρισμα σύνδεσης';
$string['privacy:metadata:auth_antihammer:blocktime'] = 'Χρόνος μέχρι το μπλοκάρισμα του χρήστη.';
$string['privacy:metadata:auth_antihammer:firstattempt'] = 'Χρόνος πρώτης δημιουργίας της εγγραφής.';
$string['privacy:metadata:auth_antihammer_log:datecreated'] = 'Χρόνος δημιουργίας εγγραφής.';
$string['task:logcleaner'] = 'Καθαριστής καταγραφών Antihammer';
$string['thead:action'] = 'ενέργεια';
$string['thead:blockcounter'] = 'Μπλοκαρισμένος μετρητής';
$string['thead:blocked'] = 'μπλοκάρισμα';
$string['thead:blocktime'] = 'μπλοκάρισμα χρόνου';
$string['thead:code'] = 'κωδικός';
$string['thead:count'] = 'Καταμέτρηση για ανίχνευση';
$string['thead:datecreated'] = 'ημερομηνία δημιουργίας';
$string['thead:firstattempt'] = 'πρώτη προσπάθεια';
$string['thead:ip'] = 'Διεύθυνση IP';
$string['thead:module'] = 'άρθρωμα';
$string['thead:msg'] = 'μήνυμα';
$string['thead:nextblockduration'] = 'Διάρκεια αν μπλοκαριστεί';
$string['thead:type'] = 'τύπος';
$string['thead:userid'] = 'αναγνωριστικό χρήστη';
$string['thead:username'] = 'όνομα χρήστη';
$string['thead:whitelisted'] = 'Σε λίστα επιτρεπόμενων;';
$string['title:report:hammer'] = 'Αναφορές Antihammer';
$string['title:report:logs'] = 'Καταγραφές Antihammer';
$string['type:info'] = 'Πληροφορίες';
$string['type:ip'] = 'Αποκλεισμός διεύθυνσης IP';
$string['type:user'] = 'Αποκλεισμός χρήστη';
$string['usemessaging'] = 'χρήση API ανταλλαγής μηνυμάτων;';
$string['usemessaging_desc'] = 'Τσεκάρετε αυτήν την επιλογή αν θέλετε το API ανταλλαγής μηνυμάτων να χρησιμοποιηθεί για να ενημερώνει παραλήπτες όπου χρειάζεται';
