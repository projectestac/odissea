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
 * Strings for component 'enrol_manual', language 'el', branch 'MOODLE_34_STABLE'
 *
 * @package   enrol_manual
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advanced'] = 'Για προχωρημένους';
$string['alterstatus'] = 'Αλλάξτε την κατάσταση';
$string['altertimeend'] = 'Αλλάξτε την ώρα λήξης';
$string['altertimestart'] = 'Αλλάξτε την ώρα έναρξης';
$string['assignrole'] = 'Ανάθεση ρόλου';
$string['assignroles'] = 'Ανάθεση ρόλων';
$string['browsecohorts'] = 'Πλοήγηση στις ομάδες χρηστών';
$string['browseusers'] = 'Αναζήτηση χρηστών';
$string['confirmbulkdeleteenrolment'] = 'Είστε βέβαιοι ότι θέλετε να διαγράψετε αυτές τις εγγραφές χρηστών;';
$string['defaultperiod'] = 'Προεπιλεγμένη διάρκεια εγγραφής';
$string['defaultperiod_desc'] = 'Προεπιλεγμένη διάρκεια του χρόνου για τον οποίο η εγγραφή είναι έγκυρη (σε δευτερόλεπτα). Αν ορισθεί σε μηδέν, η διάρκεια εγγραφής θα είναι απεριόριστη από προεπιλογή.';
$string['defaultperiod_help'] = 'Προεπιλεγμένο χρονικό διάστημα κατά το οποίο η εγγραφή είναι έγκυρη, ξεκινώντας από τη στιγμή εγγραφής του χρήστη. Αν απενεργοποιηθεί, η διάρκεια εγγραφής θα είναι απεριόριστη από προεπιλογή.';
$string['defaultstart'] = 'Προεπιλεγμένη έναρξη εγγραφής';
$string['deleteselectedusers'] = 'Διαγραφή επιλεγμένων εγγραφών χρηστών';
$string['editselectedusers'] = 'Επεξεργασία επιλεγμένων εγγραφών χρηστών';
$string['enrolledincourserole'] = 'Εγγραφή στο "{$a->course}" ως "{$a->role}"';
$string['enrolusers'] = 'Εγγραφή χρηστών';
$string['enroluserscohorts'] = 'Εγγραφή επιλεγμένων χρηστών και συνόλων χρηστών';
$string['expiredaction'] = 'Ενέργεια λήξης εγγραφής';
$string['expiredaction_help'] = 'Επιλέξτε την ενέργεια που θα εκτελεστεί όταν λήξει η εγγραφή του χρήστη. Παρακαλούμε έχετε υπόψη ότι ορισμένα δεδομένα χρήστη και ρυθμίσεις εξαλείφονται από το μάθημα κατά την ακύρωση εγγραφής στο μάθημα.';
$string['expirymessageenrolledbody'] = 'Αγαπητέ χρήστη {$a->user},

Αυτή είναι μια ειδοποίηση ότι η εγγραφή σας στο μάθημα \'{$a->course}\' θα λήξει στις {$a->timeend}.

Εάν χρειάζεστε βοήθεια, επικοινωνήστε με {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Ειδοποίηση λήξης εγγραφής';
$string['expirymessageenrollerbody'] = 'Η εγγραφή στο μάθημα \'{$a->course}\' θα λήξει μέσα στο επόμενο {$a->threshold} για τους εξής χρήστες: {$a->users} Για να επεκταθεί η εγγραφή τους, πηγαίνετε στο {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Ειδοποίηση λήξης εγγραφής';
$string['manual:config'] = 'Παραμετροποίηση περιπτώσεων χειροκίνητης εγγραφής';
$string['manual:enrol'] = 'Εγγραφή χρηστών';
$string['manual:manage'] = 'Διαχείριση εγγραφών χρηστών';
$string['manualpluginnotinstalled'] = 'Το πρόσθετο «Εγχειρίδιο» δεν έχει εγκατασταθεί ακόμα';
$string['manual:unenrol'] = 'Ακύρωση εγγραφής χρηστών στο μάθημα';
$string['manual:unenrolself'] = 'Ακύρωση εγγραφής στο μάθημα από τον ίδιο';
$string['messageprovider:expiry_notification'] = 'Ειδοποιήσεις λήξης χειροκίνητων εγγραφών';
$string['now'] = 'Τώρα';
$string['pluginname'] = 'Μη αυτόματες εγγραφές';
$string['pluginname_desc'] = 'Το πρόσθετο χειροκίνητης εγγραφής επιτρέπει στους χρήστες να εγγράφονται αυτόματα μέσω ενός συνδέσμου στις ρυθμίσεις διαχείρισης του μαθήματος, από ένα χρήστη με τα κατάλληλα δικαιώματα όπως ένας διδάσκων. Το πρόσθετο θα πρέπει κανονικά να είναι ενεργοποιημένο, εφόσον ορισμένες άλλες πρόσθετες λειτουργίες, όπως η αυτοεγγραφή, το απαιτούν.';
$string['privacy:metadata'] = 'Το πρόσθετο «Μη-αυτόματες εγγραφές» δεν αποθηκεύει κανένα προσωπικό δεδομένο.';
$string['selectcohorts'] = 'Επιλογή συνόλων χρηστών';
$string['selection'] = 'Επιλογή';
$string['selectusers'] = 'Επιλέξτε χρήστες';
$string['status'] = 'Ενεργοποίηση χειροκίνητων εγγραφών';
$string['status_desc'] = 'Επιτρέπεται η πρόσβαση στο μάθημα από εσωτερικά εγγεγραμένους χρήστες. Αυτό θα πρέπει να διατηρείται ενεργοποιημένο στις περισσότερες περιπτώσεις.';
$string['statusdisabled'] = 'Απενεργοποιημένο';
$string['statusenabled'] = 'Ενεργοποιημένο';
$string['status_help'] = 'Αυτή η ρύθμιση καθορίζει αν οι χρήστες μπορούν να εγγραφούν χειροκίνητα, μέσω ενός συνδέσμου στις ρυθμίσεις διαχείρισης μαθήματος, από έναν χρήστη με τα κατάλληλα δικαιώματα π.χ. διδάσκων.';
$string['unenrol'] = 'Ακύρωση εγγραφής χρήστη';
$string['unenrolselectedusers'] = 'Ακύρωση εγγραφής επιλεγμένων χρηστών';
$string['unenrolselfconfirm'] = 'Είστε βεβαιοι ότι θέλετε να ακυρώσετε την εγγραφή σας στο μάθημα "{$a}";';
$string['unenroluser'] = 'Είστε βεβαιοι ότι θέλετε να ακυρώσετε την εγγραφή του χρήστη "{$a->user}" στο μάθημα "{$a}";';
$string['unenrolusers'] = 'Ακύρωση εγγραφής χρηστών';
$string['wscannotenrol'] = 'Το στιγμιότυπο πρόσθετου δεν μπορεί να εγγράψει κάποιον χρήστη στο μάθημα με αναγνωριστικό {$a->courseid}';
$string['wsnoinstance'] = 'Το στιγμιότυπο πρόσθετου χειροκίνητης εγγραφής δεν υπάρχει ή είναι απενεργοποιημένο για το μάθημα  (id = {$a->courseid})';
$string['wsusercannotassign'] = 'Δεν έχετε την άδεια να ορίσετε αυτόν τον ρόλο ({$a->roleid}) σε αυτόν τον χρήστη ({$a->userid}) σε αυτό το μάθημα ({$a->courseid}).';
