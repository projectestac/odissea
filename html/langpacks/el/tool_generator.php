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
 * Strings for component 'tool_generator', language 'el', version '3.8'.
 *
 * @package     tool_generator
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bigfile'] = 'Μεγάλο αρχείο {$a}';
$string['courseexplanation'] = 'Αυτό το εργαλείο δημιουργεί πρότυπα μαθήματα δοκιμών που περιλαμβάνουν πολλά τμήματα, δραστηριότητες και αρχεία. Σκοπός του είναι να παράσχει ένα τυποποιημένο μέτρο για τον έλεγχο της αξιοπιστίας και της απόδοσης διαφόρων στοιχείων του συστήματος (όπως η δημιουργία και η επαναφορά αντιγράφων ασφαλείας). Αυτή η δοκιμή είναι σημαντική επειδή υπήρχαν πολλές περιπτώσεις στο παρελθόν, όπου, αντιμέτωπο με ρεαλιστικές περιπτώσεις χρήσης (π.χ. ένα μάθημα με 1.000 δραστηριότητες), το σύστημα δεν λειτουργούσε. Τα μαθήματα που δημιουργούνται με τη χρήση αυτής της δυνατότητας μπορούν να καταλαμβάνουν ένα μεγάλο μέρος του χώρου βάσεων δεδομένων και του συστήματος αρχείων (δεκάδες gigabytes). Θα χρειαστεί να διαγράψετε τα μαθήματα (και να περιμένετε για διάφορες εκκαθαρίσεις) για να απελευθερώσετε ξανά αυτό το χώρο. ** Μην χρησιμοποιείτε αυτή τη λειτουργία σε σύστημα παραγωγής σε λειτουργία **. Χρήση μόνο σε εξυπηρετητή προγραμματιστή. (Για να αποφύγετε τυχαία χρήση, αυτή η λειτουργία είναι απενεργοποιημένη εκτός αν έχετε επιλέξει επίσης επίπεδο εντοπισμού σφαλμάτων ΠΡΟΓΡΑΜΑΤΙΣΤΗΣ.)';
$string['coursesize_0'] = 'XS (~10KB; δημιουργία σε ~1 δευτερόλεπτο)';
$string['coursesize_1'] = 'S (~10MB; δημιουργία σε ~30 δευτερόλεπτα)';
$string['coursesize_2'] = 'M (~100MB; δημιουργία σε ~2 λεπτά)';
$string['coursesize_3'] = 'L (~1GB; δημιουργία σε ~30 λεπτά)';
$string['coursesize_4'] = 'XL (~10GB; δημιουργία σε ~2 ώρες)';
$string['coursesize_5'] = 'XXL (~20GB; δημιουργία σε ~4 ώρες)';
$string['coursewithoutusers'] = 'Το επιλεγμένο μάθημα δεν έχει χρήστες';
$string['createcourse'] = 'Δημιουργία μαθήματος';
$string['createtestplan'] = 'Δημιουργία δοκιμαστικού σχεδίου';
$string['creating'] = 'Δημιουργία μαθήματος...';
$string['done'] = 'ολοκληρώθηκε ({$a}s)';
$string['downloadtestplan'] = 'Λήψη δοκιμαστικού σχεδίου';
$string['downloadusersfile'] = 'Λήψη αρχείου χρήστη';
$string['error_nocourses'] = 'Δεν υπάρχει κανένα μάθημα για να δημιουργηθεί το δοκιμαστικό σχέδιο';
$string['error_noforumdiscussions'] = 'Το επιλεγμένο μάθημα δεν περιέχει συζητήσεις φόρουμ';
$string['error_noforuminstances'] = 'Το επιλεγμένο μάθημα δεν περιέχει στιγμιότυπα αρθρωμάτων φόρουμ';
$string['error_noforumreplies'] = 'Το επιλεγμένο μάθημα δεν περιέχει απαντήσεις σε φόρουμ';
$string['error_nonexistingcourse'] = 'Το καθορισμένο μάθημα δεν υπάρχει';
$string['error_nopageinstances'] = 'Το καθορισμένο μάθημα δεν περιέχει στιγμιότυπα αρθρώματος σελίδας';
$string['error_notdebugging'] = 'Δεν είναι διαθέσιμο σε αυτόν τον εξυπηρετητή, επειδή η αποσφαλμάτωση δεν έχει οριστεί σε DEVELOPER';
$string['error_nouserspassword'] = 'Πρέπει να ορίσετε $CFG->tool_generator_users_password στο config.php για να δημιουργήσετε το σχέδιο δοκιμής';
$string['fullname'] = 'Δοκιμαστικό μάθημα: {$a->size}';
$string['maketestcourse'] = 'Δημιουργία δοκιμαστικού μαθήματος';
$string['maketestplan'] = 'Δημιουργία σχεδίου δοκιμής JMeter';
$string['notenoughusers'] = 'Το επιλεγμένο μάθημα δεν έχει αρκετούς χρήστες';
$string['pluginname'] = 'Δημιουργός δεδομένων ανάπτυξης';
$string['privacy:metadata'] = 'Το πρόσθετο «Δημιουργία δεδομένων ανάπτυξης» δεν αποθηκεύει κανένα προσωπικό δεδομένο.';
$string['progress_checkaccounts'] = 'Έλεγχος λογαριασμών χρηστών ({$a})';
$string['progress_coursecompleted'] = 'Το μάθημα ολοκληρώθηκε ({$a})';
$string['progress_createaccounts'] = 'Δημιουργία λογαριασμών χρηστών ({$a->from} - {$a->to})';
$string['progress_createassignments'] = 'Δημιουργία αναθέσεων ({$a})';
$string['progress_createbigfiles'] = 'Δημιουργία μεγάλων αρχείων ({$a})';
$string['progress_createcourse'] = 'Δημιουργία μαθημάτων {$a}';
$string['progress_createforum'] = 'Δημιουργία φόρουμ ({$a} αναρτήσεις)';
$string['progress_createpages'] = 'Δημιουργία σελίδων ({$a})';
$string['progress_createsmallfiles'] = 'Δημιουργία μικρών αρχείων ({$a})';
$string['progress_enrol'] = 'Εγγραφή χρηστών σε μάθημα ({$a})';
$string['progress_sitecompleted'] = 'Ο ιστότοπος ολοκληρώθηκε ({$a})';
$string['shortsize_0'] = 'XS';
$string['shortsize_1'] = 'S';
$string['shortsize_2'] = 'M';
$string['shortsize_3'] = 'L';
$string['shortsize_4'] = 'XL';
$string['shortsize_5'] = 'XXL';
$string['sitesize_0'] = 'XS (~10MB; 3 μαθήματα, δημιουργούνται σε ~30 δευτερόλεπτα)';
$string['sitesize_1'] = 'S (~50MB; 8 μαθήματα, δημιουργούνται σε ~2 λεπτά)';
$string['sitesize_2'] = 'M (~200MB; 73 μαθήματα, δημιουργούνται σε ~10 λεπτά)';
$string['sitesize_3'] = 'L (~1,5GB; 277 μαθήματα, δημιουργούνται σε ~1,5 ώρες)';
$string['sitesize_4'] = 'XL (~10GB; 1065 μαθήματα, δημιουργούνται σε ~5 ώρες)';
$string['sitesize_5'] = 'XXL (~20GB; 4177 μαθήματα, δημιουργούνται σε ~10 ώρες)';
$string['size'] = 'Μέγεθος μαθήματος';
$string['smallfiles'] = 'Μικρά αρχεία';
$string['targetcourse'] = 'Δοκιμάστε το μάθημα στόχο';
$string['testplanexplanation'] = 'Αυτό το εργαλείο δημιουργεί ένα αρχείο σχεδίου δοκιμής του JMeter μαζί με το αρχείο των διαπιστευτηρίων του χρήστη. Αυτό το σχέδιο δοκιμής είναι σχεδιασμένο να δουλεύει μαζί με {$a}, πράγμα που το κάνει ευκολότερο να εκτελεστεί σε ένα συγκεκριμένο περιβάλλον Moodle, συγκεντρώνει πληροφορίες για κάθε εκτέλεση και συγκρίνει τα αποτελέσματα, έτσι θα χρειαστεί να το κατεβάσετε και να χρησιμοποιήσετε την δέσμη ενεργειών του test_runner.sh ή να ακολουθήσετε την εγκατάσταση και τις οδηγίες χρήσης. Χρειάζεται να ορίσετε έναν κωδικό πρόσβασης για τους χρήστες του μαθήματος στο config.php (π.χ. $CFG->tool_generator_users_password = \'moodle\';).Δεν υπάρχει προεπιλεγμένη τιμή για αυτόν τον κωδικό πρόσβασης για να αποτραπεί η χωρίς πρόθεση χρήση του εργαλείου. Πρέπει να χρησιμοποιήσετε την επιλογή ενημέρωσης κωδικών πρόσβασης για την περίπτωση που οι χρήστες του μαθήματος έχουν άλλους κωδικούς πρόσβασης ή δημιουργήθηκαν από το εργαλείο tool_generator αλλά χωρίς ορισμό τιμής στο $CFG->tool_generator_users_password. Είναι μέρος του εργαλείου tool_generator κι έτσι δουλεύει καλά με τα μαθήματα που δημιουργούνται από τις γεννήτριες μαθημάτων & ιστοτόπων, μπορεί επίσης να χρησιμοποιηθεί με οποιοδήποτε μάθημα περιέχει τουλάχιστον:

* Αρκετούς εγγεγραμμένους χρήστες (ανάλογα με το μέγεθος του σχεδίου δοκιμής που θα επιλέξετε) με τον κωδικό πρόσβασης αλλαγμένο σε «moodle».
* Ένα στιγμιότυπο αρθρώματος σελίδας
* Ένα στιγμιότυπο αρθρώματος φόρουμ με τουλάχιστον μία συζήτηση και μία απάντηση.

Ίσως πρέπει να ελέγξετε πρώτα την χωρητικότητα του εξυπηρετητή σας όταν εκτελείτε μεγάλα σχέδια δοκιμών καθώς οι ποσότητες που δημιουργούνται από το JMeter μπορεί να είναι ιδιαίτερα μεγάλες. Η περίοδος εκκίνησης έχει προσαρμοστεί σύμφωνα με τον αριθμό των νημάτων (χρηστών) για να μειωθούν τέτοιου είδους θέματα αλλά το φορτίο είναι ακόμη μεγάλο. **Μην εκτελέσετε το σχέδιο δοκιμής σε ενεργό σύστημα**. Αυτό το εργαλείο δημιουργεί μόνο τα αρχεία εισόδου του JMeter κι έτσι δεν είναι επικίνδυνο από μόνο του αλλά δεν πρέπει **ΠΟΤΕ** να εκτελέσετε αυτό το σχέδιο δοκιμής σε ιστότοπο που χρησιμοποιείται.';
$string['testplansize_0'] = 'XS ({$a->users} χρήστες, {$a->loops} βρόχοι και {$a->rampup} περίοδος κλιμάκωσης)';
$string['testplansize_1'] = 'S ({$a->users} χρήστες, {$a->loops} βρόχοι και {$a->rampup} περίοδος κλιμάκωσης)';
$string['testplansize_2'] = 'M ({$a->users} χρήστες, {$a->loops} βρόχοι και {$a->rampup} περίοδος κλιμάκωσης)';
$string['testplansize_3'] = 'L ({$a->users} χρήστες, {$a->loops} βρόχοι και {$a->rampup} περίοδος κλιμάκωσης)';
$string['testplansize_4'] = 'XL ({$a->users} χρήστες, {$a->loops} βρόχοι και {$a->rampup} περίοδος κλιμάκωσης)';
$string['testplansize_5'] = 'XXL ({$a->users} χρήστες, {$a->loops} βρόχοι και {$a->rampup} περίοδος κλιμάκωσης)';
$string['updateuserspassword'] = 'Ενημέρωση κωδικού πρόσβασης χρηστών μαθημάτων';
$string['updateuserspassword_help'] = 'Το JMeter πρέπει να συνδεθεί ως χρήστης του μαθήματος, μπορείτε να ορίσετε τον κωδικό πρόσβασης χρηστών χρησιμοποιώντας το $CFG->tool_generator_users_password στο config.php· αυτή η ρύθμιση ενημερώνει τον κωδικό πρόσβασης χρήστη σύμφωνα με το $CFG->tool_generator_users_password. Μπορεί να είναι χρήσιμο σε περίπτωση που χρησιμοποιείτε ένα μάθημα που δεν δημιουργήθηκε από το tool_generator ή το $CFG->tool_generator_users_password δεν είχε οριστεί όταν δημιουργήσατε τα μαθήματα δοκιμών.';
