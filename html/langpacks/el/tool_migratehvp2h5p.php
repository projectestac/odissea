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
 * Strings for component 'tool_migratehvp2h5p', language 'el', version '4.4'.
 *
 * @package     tool_migratehvp2h5p
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['attempted'] = 'Χρήστες που προσπάθησαν';
$string['cannot_migrate'] = 'Δεν είναι δυνατή η μετεγκατάσταση (μεταφορά/μετατροπή) της δραστηριότητας';
$string['contenttype'] = 'Τύπος περιεχομένου';
$string['copy2cb'] = 'Πρέπει αυτά τα περιεχόμενα να προστεθούν στην τράπεζα περιεχομένου;';
$string['copy2cb_no'] = 'Όχι, θα πρέπει να δημιουργούνται μόνο στη δραστηριότητα.';
$string['copy2cb_yeswithlink'] = 'Ναι, και ένας σύνδεσμος προς αυτά τα αρχεία θα πρέπει να χρησιμοποιείται στη δραστηριότητα';
$string['copy2cb_yeswithoutlink'] = 'Ναι, αλλά ένα αντίγραφο θα χρησιμοποιηθεί στη δραστηριότητα (οι αλλαγές στην τράπεζα περιεχομένου δεν θα αντικατοπτρίζονται στη δραστηριότητα)';
$string['error_contenttypeh5p_disabled'] = 'Ο τύπος περιεχομένου τράπεζας H5P είναι απενεργοποιημένος. Πρέπει να ενεργοποιηθεί για τη μετεγκατάσταση δραστηριοτήτων από το mod_hvp
και επίσης να προστεθούν αυτές στην τράπεζα περιεχομένου. Μπορείτε να ενεργοποιήσετε αυτόν τον τύπο περιεχομένου από την ενότητα «Διαχείριση ιστότοπου | Πρόσθετα | Τράπεζα περιεχομένου | Διαχείριση τύπων περιεχομένου» ή εκτελέστε ξανά το εργαλείο μετεγκατάστασης και επιλέξτε «Όχι, θα πρέπει να δημιουργούνται μόνο στη δραστηριότητα».  (ή «copy2cb=0» εάν εκτελείτε από τη γραμμή εντολών) για να αποφύγετε τη δημιουργία αρχείων στην τράπεζα περιεχομένου.';
$string['error_modh5pactivity_disabled'] = 'Η δραστηριότητα H5P είναι απενεργοποιημένη. Πρέπει να ενεργοποιηθεί για τη μετεγκατάσταση (μεταφορά/μετατροπή) δραστηριοτήτων από το mod_hvp';
$string['event_hvp_migrated'] = 'Το mod_hvp μετεγκαταστάθηκε στο mod_h5pactivity';
$string['graded'] = 'Βαθμολογημένοι χρήστες';
$string['hvpactivities'] = 'Εκκρεμούσες δραστηριότητες mod_hvp';
$string['id'] = 'Αναγνωριστικό';
$string['keeporiginal'] = 'Επιλέξτε τι θα κάνετε με την αρχική δραστηριότητα μετά τη μετεγκατάσταση';
$string['keeporiginal_delete'] = 'Διαγραφή της αρχικής δραστηριότητας';
$string['keeporiginal_hide'] = 'Απόκρυψη της αρχικής δραστηριότητας';
$string['keeporiginal_nothing'] = 'Αφήστε την αρχική δραστηριότητα ως έχει';
$string['migrate'] = 'Μετεγκατάσταση';
$string['migrate_fail'] = 'Σφάλμα μετεγκατάστασης της δραστηριότητας hvp με αναγνωριστικό {$a}';
$string['migrate_gradesoverridden'] = 'Η αρχική δραστηριότητα mod_hvp «{$a->name}», με αναγνωριστικό {$a->id}, μετεγκαταστάθηκε με επιτυχία. Ωστόσο, έχουν παρακαμφθεί κάποιες πληροφορίες ταξινόμησης, όπως ανατροφοδοτήσεις, οι οποίες δεν έχουν μετεγκατασταθεί επειδή η αρχική δραστηριότητα είναι διαμορφωμένη με μη έγκυρο μέγιστο βαθμό (πρέπει να είναι υψηλότερος από 0 για να μετεγκατασταθεί στο βαθμολόγιο).';
$string['migrate_gradesoverridden_notdelete'] = 'Η αρχική δραστηριότητα mod_hvp «{$a->name}», με αναγνωριστικό {$a->id}, μετεγκαταστάθηκε με επιτυχία.
Ωστόσο, έχουν παρακαμφθεί κάποιες πληροφορίες ταξινόμησης, όπως ανατροφοδοτήσεις, οι οποίες δεν έχουν μετεγκατασταθεί επειδή η αρχική δραστηριότητα είναι διαμορφωμένη με μη έγκυρο μέγιστο βαθμό (πρέπει να είναι υψηλότερος από 0 για να μετεγκατασταθεί στο βαθμολόγιο).
Στην αρχική δραστηριότητα έχει γίνει απόκρυψη αντί για διαγραφή.';
$string['migrate_success'] = 'Η δραστηριότητα hvp με αναγνωριστικό {$a} μετεγκαταστάθηκε με επιτυχία';
$string['nohvpactivities'] = 'Δεν υπάρχουν δραστηριότητες mod_hvp για μετεγκατάσταση στο mod_h5pactivity.';
$string['pluginname'] = 'Μετεγκατάσταση περιεχομένου από mod_hvp σε mod_h5pactivity';
$string['privacy:metadata'] = 'Η μετεγκατάσταση περιεχομένου από mod_hvp σε mod_h5pactivity δεν αποθηκεύει προσωπικά δεδομένα';
$string['savedstate'] = 'Αποθηκευμένη κατάσταση';
$string['selecthvpactivity'] = 'Επιλέξτε {$a} mod_hvp δραστηριότητα';
$string['settings'] = 'Ρυθμίσεις μετεγκατάστασης';
