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
 * Strings for component 'debug', language 'el', version '3.11'.
 *
 * @package     debug
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['authpluginnotfound'] = 'Δε βρέθηκε το πρόσθετο αυθεντικοποίησης {$a}.';
$string['blocknotexist'] = 'Το μπλοκ {$a} δεν υπάρχει';
$string['cannotbenull'] = 'Το {$a} δε γίνεται να είναι null!';
$string['cannotdowngrade'] = 'Δεν είναι δυνατή η υποβάθμιση του πρόσθετου {$a->plugin} από {$a->oldversion} σε {$a->newversion}.';
$string['cannotfindadmin'] = 'Δεν ήταν δυνατή η εύρεση διαχειριστή!';
$string['cannotinitpage'] = 'Αδυναμία πλήρους αρχικοποίησης σελίδας: μη έγκυρο {$a->name} id {$a->id}';
$string['cannotsetuptable'] = '{$a} πίνακες δεν έχουν εγκατασταθεί με επιτυχία!';
$string['codingerror'] = 'Εντοπίστηκε λάθος κώδικα, πρέπει να φτιαχτεί από προγραμματιστή: {$a}';
$string['configmoodle'] = 'Το Moodle δεν έχει παραμετροποιηθεί ακόμη. Πρέπει να επεξεργαστείτε το config.php πρώτα.';
$string['debuginfo'] = 'Πληροφορίες αποσφαλμάτωσης';
$string['erroroccur'] = 'Παρουσιάστηκε κάποιο σφάλμα κατά τη διάρκεια της διαδικασίας';
$string['invalidarraysize'] = 'Μη έγκυρο μέγεθος πινάκων στις παραμέτρους του {$a}';
$string['invalideventdata'] = 'Έχουν υποβληθεί λανθασμένα δεδομένα γεγονότος: {$a}';
$string['invalidparameter'] = 'Εντοπίστηκε μη έγκυρη τιμή παραμέτρου';
$string['invalidresponse'] = 'Εντοπίστηκε μη έγκυρη τιμή απόκρισης';
$string['line'] = 'Γραμμή';
$string['missingconfigversion'] = 'Ο πίνακας ρυθμίσεων δεν περιέχει την έκδοση. Αδυναμία συνέχισης.';
$string['modulenotexist'] = 'Το άρθρωμα {$a} δεν υπάρχει';
$string['morethanonerecordinfetch'] = 'Βρέθηκαν περισσότερες από μία εγγραφές στη fetch() !';
$string['mustbeoveride'] = 'Πρέπει να γίνει παράκαμψη (override) της αφηρημένης (abstract) μεθόδου {$a}.';
$string['noadminrole'] = 'Δεν ήταν δυνατή η εύρεση ρόλου διαχειριστή';
$string['noblocks'] = 'Δεν έχουν εγκατασταθεί μπλοκ!';
$string['nocate'] = 'Δεν υπάρχουν κατηγορίες!';
$string['nomodules'] = 'Δεν έχουν βρεθεί αρθρώματα!!';
$string['nopageclass'] = 'Έγινε εισαγωγή του {$a} αλλά δε βρέθηκαν κλάσεις σελίδας';
$string['noreports'] = 'Δεν υπάρχουν προσβάσιμες αναφορές';
$string['notables'] = 'Δεν υπάρχουν καθόλου πίνακες!';
$string['outputbuffer'] = 'Ενδιάμεση μνήμη εξόδου';
$string['phpvaroff'] = 'Η μεταβλητή του εξυπηρετητή PHP «{$a->name}» θα έπρεπε να είναι Off - {$a->link}';
$string['phpvaron'] = 'Η μεταβλητή του εξυπηρετητή PHP «{$a->name}» δεν είναι On - {$a->link}';
$string['sessionmissing'] = 'Το αντικείμενο {$a} λείπει από τη σύνοδο';
$string['sqlrelyonobsoletetable'] = 'Η SQL αυτή στηρίζεται σε απαρχαιωμένους πίνακες/-α: {$a}! Ο κώδικάς σας πρέπει να διορθωθεί από κάποιον προγραμματιστή.';
$string['stacktrace'] = 'Ίχνη στοίβας';
$string['withoutversion'] = 'Το κύριο αρχείο version.php λείπει, δεν είναι αναγνώσιμο ή είναι κατεστραμμένο.';
$string['xmlizeunavailable'] = 'Οι λειτουργίες xmlize δεν είναι διαθέσιμες';
