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
 * Strings for component 'grading', language 'el', version '3.11'.
 *
 * @package     grading
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activemethodinfo'] = 'Η μέθοδος «{$a->method}» επιλέχθηκε ως η ενεργή μέθοδος βαθμολόγησης για την περιοχή «{$a->area}».';
$string['activemethodinfonone'] = 'Δεν υπάρχει προχωρημένη μέθοδος βαθμολόγησης επιλεγμένη για την περιοχή «{$a->area}». Θα χρησιμοποιηθεί η απλή άμεση βαθμολόγηση.';
$string['changeactivemethod'] = 'Αλλαγή ενεργής μεθόδου βαθμολόγησης σε';
$string['clicktoclose'] = 'κλικ για κλείσιμο';
$string['error:gradingunavailable'] = 'Η προηγμένη μέθοδος βαθμολόγησης δεν έχει ρυθμιστεί σωστά. Παρακαλούμε, ελέγξτε τις επιλογές βαθμολόγησης ολόκληρου του φόρουμ στις ρυθμίσεις του φόρουμ.';
$string['error:notinrange'] = 'Δόθηκε μη έγκυρος βαθμός «{$a->grade}». Οι βαθμοί πρέπει να είναι μεταξύ 0 και {$a->maxgrade}.';
$string['exc_gradingformelement'] = 'Δεν μπορεί να δημιουργηθεί στιγμιότυπο ενός στοιχείου φόρμας βαθμολόγησης';
$string['formnotavailable'] = 'Επιλέχτηκε η προχωρημένη μέθοδος βαθμολόγησης αλλά η φόρμα βαθμολόγησης δεν είναι έτοιμη ακόμη. Ίσως πρέπει να την ορίσετε πρώτα μέσω ενός συνδέσμου στο μενού ενεργειών ή στο μπλοκ διαχείρισης.';
$string['gradingformunavailable'] = 'Παρακαλούμε σημειώστε: η φόρμα προχωρημένης βαθμολόγησης δεν είναι έτοιμη προς το παρόν. Η Απλή μέθοδος βαθμολόγησης θα χρησιμοποιηθεί μέχρι η φόρμα να αποκτήσει έγκυρη κατάσταση.';
$string['gradingmanagement'] = 'Προχωρημένη βαθμολόγηση';
$string['gradingmanagementtitle'] = 'Προχωρημένη βαθμολόγηση: {$a->component} ({$a->area})';
$string['gradingmethod'] = 'Μέθοδος βαθμολόγησης';
$string['gradingmethod_help'] = 'Επιλέξτε την προχωρημένη μέθοδο βαθμολόγησης που πρέπει να χρησιμοποιηθεί στον υπολογισμό βαθμών στο πλαίσιο που δίνεται. Για να απενεργοποιήσετε την προχωρημένη βαθμολόγηση και να επιστρέψετε πίσω στον προεπιλεγμένο μηχανισμό βαθμολόγησης, επιλέξτε «Απλή άμεση βαθμολόγηση».';
$string['gradingmethodnone'] = 'Απλή άμεση βαθμολόγηση';
$string['gradingmethods'] = 'Μέθοδοι βαθμολόγησης';
$string['manageactionclone'] = 'Δημιουργία νέας φόρμας βαθμολόγησης από ένα υπόδειγμα';
$string['manageactiondelete'] = 'Διαγραφή της υπάρχουσας φόρμας';
$string['manageactiondeleteconfirm'] = 'Πρόκειται να διαγράψετε την φόρμα βαθμολόγησης «{$a->formname}» και όλες τις συσχετιζόμενες πληροφορίες από «{$a->component} ({$a->area})». Παρακαλούμε επιβεβαιώστε ότι καταλαβαίνετε τις παρακάτω συνέπειες:<br />
* Μπορείτε να αλλάξετε μέθοδο βαθμολόγησης ακόμα και σε «Απλή άμεση βαθμολόγηση» χωρίς να διαγράψετε αυτή τη φόρμα.<br />
* Όλες οι πληροφορίες για το πως συμπληρώνονται οι φόρμες βαθμολόγησης θα χαθούν.<br />
* Οι αποθηκευμένοι στο βαθμολόγιο βαθμοί υπολογισμένων αποτελεσμάτων δεν θα επηρεαστούν.<br />
* Αυτή η διαδικασία δεν επηρεάζει ενδεχόμενα αντίγραφα αυτής της φόρμας σε άλλες δραστηριότητες.';
$string['manageactiondeletedone'] = 'Η φόρμα διαγράφηκε με επιτυχία';
$string['manageactionedit'] = 'Επεξεργασία του υπάρχοντος ορισμού φόρμας';
$string['manageactionnew'] = 'Ορισμός νέας φόρμας βαθμολόγησης από την αρχή';
$string['manageactionshare'] = 'Δημοσίευση της φόρμας ως ένα νέο υπόδειγμα';
$string['manageactionshareconfirm'] = 'Πρόκειται να αποθηκεύσετε ένα αντίγραφο της φόρμας βαθμολόγησης «{$a}» ως ένα νέο δημόσιο υπόδειγμα. Οι άλλοι χρήστες του ιστοτόπου σας θα μπορούν να δημιουργούν στις δραστηριότητές τους νέες φόρμες βαθμολόγησης από αυτό το υπόδειγμα.';
$string['manageactionsharedone'] = 'Η φόρμα αποθηκεύτηκε με επιτυχία ως υπόδειγμα.';
$string['noitemid'] = 'Δεν είναι δυνατή η βαθμολόγηση. Το βαθμολογούμενο στοιχείο δεν υπάρχει.';
$string['nosharedformfound'] = 'Δεν βρέθηκε κανένα υπόδειγμα';
$string['privacy:metadata:grading_definitions'] = 'Βασικές πληροφορίες σχετικά με μια φόρμα προχωρημένης βαθμολόγησης που ορίζεται σε μια βαθολογήσιμη περιοχή.';
$string['privacy:metadata:grading_definitions:areaid'] = 'Το αναγνωριστικό περιοχής όπου ορίζεται η φόρμα προχωρημένης βαθμολόγησης.';
$string['privacy:metadata:grading_definitions:copiedfromid'] = 'Το αναγνωριστικό ορισμού της βαθμολόγησης από όπου αντιγράφηκε αυτό.';
$string['privacy:metadata:grading_definitions:description'] = 'Περιγραφή της προχωρημένης μεθόδου βαθμολόγησης.';
$string['privacy:metadata:grading_definitions:method'] = 'Η μέθοδος βαθμολόγησης που είναι υπεύθυνη για τον ορισμό.';
$string['privacy:metadata:grading_definitions:name'] = 'Το όνομα του ορισμού προχωρημένης βαθμολόγησης.';
$string['privacy:metadata:grading_definitions:options'] = 'Κάποιες ρυθμίσεις αυτού του ορισμού βαθμολόγησης.';
$string['privacy:metadata:grading_definitions:status'] = 'Η κατάσταση αυτού του ορισμού προχωρημένης βαθμολόγησης.';
$string['privacy:metadata:grading_definitions:timecopied'] = 'Πότε αντιγράφηκε ο ορισμός βαθμολόγησης';
$string['privacy:metadata:grading_definitions:timecreated'] = 'Πότε δημιουργήθηκε ο ορισμός βαθμολόγησης.';
$string['privacy:metadata:grading_definitions:timemodified'] = 'Πότε τροποποιήθηκε τελευταία ο ορισμός βαθμολόγησης.';
$string['privacy:metadata:grading_definitions:usercreated'] = 'Το αναγνωριστικό του χρήστη που δημιούργησε τον ορισμό βαθμολόγησης.';
$string['privacy:metadata:grading_definitions:usermodified'] = 'Το αναγνωριστικό του χρήστη που τροποποίησε τελευταία τον ορισμό βαθμολόγησης.';
$string['privacy:metadata:grading_instances'] = 'Ιστορικό αξιολόγησης για ένα βαθμολογήσιμο στοιχείο που αξιολογήθηκε από έναν βαθμολογητή.';
$string['privacy:metadata:grading_instances:feedback'] = 'Η ανατροφοδότηση που δόθηκε από το χρήστη.';
$string['privacy:metadata:grading_instances:feedbackformat'] = 'Ο μορφότυπος κειμένου της ανατροφοδότησης που δόθηκε από το χρήστη.';
$string['privacy:metadata:grading_instances:raterid'] = 'Το αναγνωριστικό του χρήστη που αξιολόγησε το στιγμιότυπο βαθμολόγησης.';
$string['privacy:metadata:grading_instances:rawgrade'] = 'Ο βαθμός για το στιγμιότυπο βαθμολόγησης.';
$string['privacy:metadata:grading_instances:status'] = 'Η κατάσταση του στιγμιότυπου βαθμολόγησης.';
$string['privacy:metadata:grading_instances:timemodified'] = 'Πότε τροποποιήθηκε τελευταία το στιγμιότυπο βαθμολόγησης.';
$string['privacy:metadata:gradingformpluginsummary'] = 'Δεδομένα για τη μέθοδο βαθμολόγησης.';
$string['searchownforms'] = 'Να περιλαμβάνονται και οι δικές μου φόρμες';
$string['searchtemplate'] = 'Αναζήτηση φόρμας βαθμολόγησης';
$string['searchtemplate_help'] = 'Μπορείτε να αναζητήσετε μια φόρμα βαθμολόγησης και να την χρησιμοποιήσετε ως υπόδειγμα για την νέα φόρμα εδώ. Απλά πληκτρολογήστε λέξεις που πρέπει να βρίσκονται κάπου στο όνομα της φόρμας, στην περιγραφή της ή στο ίδια την φόρμα. Για να αναζητήσετε μια φράση, κλείστε την φράση σε διπλά εισαγωγικά (").

Από προεπιλογή, μόνο οι φόρμες βαθμολόγησης που έχουν αποθηκευτεί ως κοινόχρηστα υποδείγματα περιλαμβάνονται στα αποτελέσματα της αναζήτησης. Μπορείτε επίσης να περιλάβετε όλες τις φόρμες σας στα αποτελέσματα. Έτσι, μπορείτε απλά να επαναχρησιμοποιήσετε τις φόρμες σας χωρίς να τις κάνετε κοινόχρηστες. Μόνο φόρμες επισημασμένες ως «Έτοιμη για χρήση» μπορούν να χρησιμοποιηθούν με αυτόν τον τρόπο.';
$string['statusdraft'] = 'Προσχέδιο';
$string['statusready'] = 'Έτοιμες για χρήση';
$string['templatedelete'] = 'Διαγραφή';
$string['templatedeleteconfirm'] = 'Πρόκειται να διαγράψετε το κοινόχρηστο υπόδειγμα «{$a}». Διαγραφή ενός υποδείγματος δεν επηρεάζει τις υπάρχουσες φόρμες που δημιουργήθηκαν από αυτό.';
$string['templateedit'] = 'Επεξεργασία';
$string['templatepick'] = 'Χρήση αυτού του υποδείγματος';
$string['templatepickconfirm'] = 'Θέλετε να χρησιμοποιήσετε την φόρμα βαθμολόγησης «{$a->formname}» ως υπόδειγμα για την νέα φόρμα στο «{$a->component} ({$a->area})»;';
$string['templatepickownform'] = 'Χρήση αυτής της φόρμας ως υποδείγματος';
$string['templatesource'] = 'Τοποθεσία: {$a->component} ({$a->area})';
$string['templatetypeown'] = 'Δική σας φόρμα';
$string['templatetypeshared'] = 'Διαμοιραζόμενο υπόδειγμα';
