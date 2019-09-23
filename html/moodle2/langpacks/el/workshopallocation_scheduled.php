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
 * Strings for component 'workshopallocation_scheduled', language 'el', branch 'MOODLE_36_STABLE'
 *
 * @package   workshopallocation_scheduled
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['currentstatus'] = 'Τρέχουσα κατάσταση';
$string['currentstatusexecution'] = 'Κατάσταση';
$string['currentstatusexecution1'] = 'Εκτελέστηκε στις {$a->datetime}';
$string['currentstatusexecution2'] = 'Προς εκτέλεση ξανά στις {$a->datetime}';
$string['currentstatusexecution3'] = 'Προς εκτέλεση στις {$a->datetime}';
$string['currentstatusexecution4'] = 'Σε αναμονή εκτέλεσης';
$string['currentstatusnext'] = 'Επόμενη εκτέλεση';
$string['currentstatusnext_help'] = 'Σε ορισμένες περιπτώσεις, η εκχώρηση προγραμματίζεται να εκτελεστεί αυτόματα και πάλι, ακόμη και αν εκτελούνταν ήδη. Αυτό μπορεί να συμβεί, για παράδειγμα, αν παρατάθηκε η προθεσμία υποβολής.';
$string['currentstatusreset'] = 'Αρχικοποίηση';
$string['currentstatusreset_help'] = 'Η αποθήκευση της φόρμας με αυτό το πλαίσιο ελέγχου επιλεγμένο θα έχει ως αποτέλεσμα να επαναρχικοποιηθεί η τρέχουσα κατάσταση. Όλες οι πληροφορίες για την προηγούμενη εκτέλεση θα διαγραφούν ώστε η εκχώρηση να μπορεί να εκτελεστεί ξανά (αν επιτραπεί παραπάνω).';
$string['currentstatusresetinfo'] = 'Επιλέξτε το πλαίσιο και αποθηκεύστε τη φόρμα για να επαναφέρετε το αποτέλεσμα εκτέλεσης';
$string['currentstatusresult'] = 'Πρόσφατο αποτέλεσμα εκτέλεσης';
$string['enablescheduled'] = 'Ενεργοποίηση προγραμματισμένης εκχώρησης';
$string['enablescheduledinfo'] = 'Εκχωρήστε αυτόματα τις υποβολές στο τέλος της φάσης υποβολής';
$string['pluginname'] = 'Προγραμματισμένη εκχώρηση';
$string['privacy:metadata'] = 'Το πρόσθετο «Προγραμματισμένη εκχώρηση» δεν αποθηκεύει κανένα προσωπικό δεδομένο. Τα πραγματικά προσωπικά δεδομένα σχετικά με το ποιος πρόκειται να αξιολογήσει ποιόν, αποθηκεύονται από από το ίδιο το άρθρωμα Εργαστηρίου και αποτελούν βάση για την εξαγωγή των λεπτομερειών αξιολόγησης.';
$string['randomallocationsettings'] = 'Ρυθμίσεις εκχώρησης';
$string['randomallocationsettings_help'] = 'Οι παράμετροι για τη μέθοδο τυχαίας εκχώρησης ορίζονται εδώ. Θα χρησιμοποιηθούν από το πρόσθετο τυχαίας εκχώρησης για την πραγματική εκχώρηση των υποβολών.';
$string['resultdisabled'] = 'Η προγραμματισμένη εκχώρηση είναι απενεργοποιημένη';
$string['resultenabled'] = 'Η προγραμματισμένη εκχώρηση είναι ενεργοποιημένη';
$string['resultexecuted'] = 'Επιτυχία';
$string['resultfailed'] = 'Δεν είναι δυνατή η αυτόματη εκχώρηση υποβολών';
$string['resultfailedconfig'] = 'Κακοδιαμορφωμένη προγραμματισμένη εκχώρηση';
$string['resultfaileddeadline'] = 'Στο εργαστήριο δεν έχει οριστεί η προθεσμία υποβολής';
$string['resultfailedphase'] = 'Το εργαστήριο δεν βρίσκεται στη φάση υποβολής';
$string['resultvoid'] = 'Δεν εκχωρήθηκαν υποβολές';
$string['resultvoiddeadline'] = 'Όχι μετά την προθεσμία υποβολής ακόμη';
$string['resultvoidexecuted'] = 'Η εκχώρηση έχει ήδη εκτελεστεί';
$string['scheduledallocationsettings'] = 'Ρυθμίσεις προγραμματισμένης εκχώρησης';
$string['scheduledallocationsettings_help'] = 'Αν ενεργοποιηθεί, η προγραμματισμένη μέθοδος εκχώρησης θα εκχωρήσει αυτόματα τις υποβολές για την αξιολόγηση στο τέλος της φάσης υποβολής. Το τέλος της φάσης μπορεί να οριστεί στη ρύθμιση εργαστηρίου «Προθεσμία υποβολών».

Εσωτερικά, η μέθοδος τυχαίας εκχώρησης εκτελείται με τις προκαθορισμένες παραμέτρους σε αυτήν τη φόρμα. Αυτό σημαίνει ότι η προγραμματισμένη εκχώρηση λειτουργεί σαν να εκτέλεσε ο διδάσκων την τυχαία εκχώρηση στο τέλος της φάσης υποβολής χρησιμοποιώντας τις παρακάτω ρυθμίσεις εκχώρησης.

Λάβετε υπόψη ότι η προγραμματισμένη εκχώρηση *δεν* εκτελείται εάν το εργαστήριο μεταβεί στη φάση αξιολόγησης χειροκίνητα πριν από την προθεσμία υποβολής. Πρέπει να εκχωρήσετε μόνοι σας τις υποβολές σε αυτή την περίπτωση. Η προγραμματισμένη μέθοδος εκχώρησης είναι ιδιαίτερα χρήσιμη όταν χρησιμοποιείται μαζί με τη λειτουργία αυτόματης εναλλαγής φάσεων.';
$string['setup'] = 'Ρύθμιση προγραμματισμένη εκχώρησης';
