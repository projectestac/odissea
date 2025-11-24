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
 * Strings for component 'tool_mfa', language 'el', version '4.5'.
 *
 * @package     tool_mfa
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievedweight'] = 'Επιτευχθείσα βαρύτητα';
$string['areyousure'] = 'Είστε βέβαιοι ότι θέλετε να ανακαλέσετε τον παράγοντα;';
$string['combination'] = 'Συνδυασμός';
$string['connector'] = 'ΚΑΙ';
$string['created'] = 'Δημιουργήθηκε';
$string['createdfromip'] = 'Δημιουργήθηκε από διεύθυνση IP';
$string['debugmode:heading'] = 'Κατάσταση αποσφαλμάτωσης';
$string['devicename'] = 'Συσκευή';
$string['email:subject'] = 'Αδυναμία σύνδεσης στο {$a}';
$string['enablefactor'] = 'Ενεργοποίηση παράγοντα';
$string['error:actionnotfound'] = 'Η ενέργεια «{$a}» δεν υποστηρίζεται';
$string['error:directaccess'] = 'Σε αυτή την σελίδα δεν θα έπρεπε να γίνεται άμεση πρόσβαση';
$string['error:factornotenabled'] = 'Ο παράγοντας MFA «{$a}» δεν είναι ενεργοποιημένος';
$string['error:factornotfound'] = 'Ο παράγοντας MFA «{$a}» δεν βρέθηκε';
$string['error:notenoughfactors'] = 'Δεν είναι δυνατή η αυθεντικοποίηση';
$string['error:revoke'] = 'Αδυναμία ανάκλησης παράγοντα';
$string['error:setupfactor'] = 'Αδυναμία διαμόρφωσης/ρύθμισης παράγοντα';
$string['error:support'] = 'Εάν εξακολουθείτε να μην μπορείτε να συνδεθείτε ή πιστεύετε ότι υπάρχει κάποιο λάθος, στείλτε ένα μήνυμα ηλε.ταχυδρομείου στην ακόλουθη διεύθυνση για υποστήριξη:';
$string['error:wrongfactorid'] = 'Το αναγνωριστικό παράγοντα «{$a}» είναι λανθασμένο';
$string['event:userpassedmfa'] = 'Η επαλήθευση πέτυχε';
$string['event:userrevokedfactor'] = 'Ανάκληση παράγοντα';
$string['event:usersetupfactor'] = 'Ρύθμιση παράγοντα';
$string['factor'] = 'Παράγοντας';
$string['factorreport'] = 'Αναφορά όλων των παραγόντων';
$string['factorrevoked'] = 'Ο παράγοντας «{$a}» ανακλήθηκε με επιτυχία.';
$string['factorsetup'] = 'Ο παράγοντας «{$a}» ρυθμίστηκε με επιτυχία.';
$string['fallback'] = 'Εφεδρικός παράγοντας';
$string['fallback_info'] = 'Αυτός ο παράγοντας είναι μια εφεδρεία εάν δεν έχουν ρυθμιστεί άλλοι παράγοντες. Αυτός ο παράγοντας θα αποτύχει πάντα.';
$string['inputrequired'] = 'Εισαγωγή από χρήστη';
$string['lastverified'] = 'Τελευταία επαλήθευση';
$string['lockoutnotification'] = 'Απομένουν {$a} προσπάθειες επαλήθευσης.';
$string['mfa'] = 'MFA';
$string['mfa:mfaaccess'] = 'Αλληλεπίδραση με MFA';
$string['mfareports'] = 'Αναφορές MFA';
$string['mfasettings'] = 'Διαχείριση MFA';
$string['na'] = 'δ/υ';
$string['overall'] = 'Συνολικά';
$string['pending'] = 'Εκκρεμούν';
$string['preferences:activefactors'] = 'Ενεργοί παράγοντες';
$string['preferences:availablefactors'] = 'Διαθέσιμοι παράγοντες';
$string['preferences:header'] = 'Προτιμήσεις αυθεντικοποίησης πολλών παραγόντων';
$string['privacy:metadata:tool_mfa'] = 'Δεδομένα με διαμορφωμένους παράγοντες MFA';
$string['privacy:metadata:tool_mfa:createdfromip'] = 'Διεύθυνση IP από την οποία διαμορφώθηκε ο παράγοντας';
$string['privacy:metadata:tool_mfa:factor'] = 'Τύπος παράγοντα';
$string['privacy:metadata:tool_mfa:id'] = 'Αναγνωριστικό εγγραφής';
$string['privacy:metadata:tool_mfa:label'] = 'ετικέτα για στιγμιότυπο παράγοντα, π.χ. συσκευή ή διεύθ.ηλε.ταχυδρομείου';
$string['privacy:metadata:tool_mfa:lastverified'] = 'Πότε επαληθεύτηκε τελευταία φορά ο χρήστης με αυτόν τον παράγοντα';
$string['privacy:metadata:tool_mfa:secret'] = 'Οποιαδήποτε μυστικά δεδομένα για τον παράγοντα';
$string['privacy:metadata:tool_mfa:timecreated'] = 'Ο χρόνος ρύθμισης του στιγμιοτύπου παράγοντα';
$string['privacy:metadata:tool_mfa:timemodified'] = 'Πότε τροποποιήθηκε τελευταία ο παράγοντας';
$string['privacy:metadata:tool_mfa:userid'] = 'Το αναγνωριστικό του χρήστη στον οποίο ανήκει ο παράγοντας';
$string['revoke'] = 'Ανάκληση';
$string['revokefactor'] = 'Ανάκληση παράγοντα';
$string['settings:combinations'] = 'Περίληψη καλών συνθηκών για σύνδεση';
$string['settings:debugmode'] = 'Ενεργοποίηση κατάστασης λειτουργίας αποσφαλμάτωσης (εντοπισμού σφαλμάτων)';
$string['settings:enabled'] = 'Το  πρόσθετο MFA ενεργοποιήθηκε';
$string['settings:enablefactor'] = 'Ενεργοποίηση παράγοντα';
$string['settings:enablefactor_help'] = 'Επιλέξτε αυτό το στοιχείο ελέγχου για να επιτρέψετε τη χρήση του παράγοντα για αυθεντικοποίηση (έλεγχο ταυτότητας) MFA.';
$string['settings:general'] = 'Γενικές ρυθμίσεις MFA';
$string['settings:lockout'] = 'Όριο (κατώφλιο) κλειδώματος';
$string['settings:lockout_help'] = 'Αριθμός προσπαθειών που ένας χρήστης έχει διαθέσιμες για τους παράγοντες εισαγωγής προτού του απαγορευτεί η σύνδεση.';
$string['settings:weight'] = 'Βαρύτητα παράγοντα';
$string['settings:weight_help'] = 'Η βαρύτητα αυτού του παράγοντα εάν πετύχει. Ένας χρήστης χρειάζεται τουλάχιστον 100 πόντους για να συνδεθεί.';
$string['setup'] = 'Ρυθμίσεις';
$string['setupfactor'] = 'Ρυθμίσεις παράγοντα';
$string['setuprequired'] = 'Ρυθμίσεις χρήστη';
$string['state:fail'] = 'Αποτυχία';
$string['state:neutral'] = 'Ουδέτερο';
$string['state:pass'] = 'Επιτυχία';
$string['state:unknown'] = 'Άγνωστο';
$string['totalweight'] = 'Συνολική βαρύτητα';
$string['weight'] = 'Βαρύτητα';
