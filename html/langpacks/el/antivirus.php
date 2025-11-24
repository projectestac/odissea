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
 * Strings for component 'antivirus', language 'el', version '4.5'.
 *
 * @package     antivirus
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actantivirushdr'] = 'Διαθέσιμα αντι-ιικά πρόσθετα';
$string['antiviruscommonsettings'] = 'Κοινές ρυθμίσεις αντι-ιικών';
$string['antiviruses'] = 'Αντι-ιικά πρόσθετα';
$string['antivirussettings'] = 'Διαχείριση αντι-ιικών πρόσθετων';
$string['configantivirusplugins'] = 'Παρακαλούμε επιλέξτε τα πρόσθετα προστασίας από ιούς (αντιιικά) που θέλετε να χρησιμοποιήσετε και ταξινομήστε τα με τη σειρά που θέλετε να εφαρμοστούν.';
$string['dataerrordesc'] = 'Παρουσιάστηκε σφάλμα σαρωτή δεδομένων.';
$string['dataerrorname'] = 'Σφάλμα σαρωτή δεδομένων';
$string['datainfecteddesc'] = 'Εντοπίστηκαν μολυσμένα δεδομένα.';
$string['datainfectedname'] = 'Μολυσμένα δεδομένα';
$string['datastream'] = 'Δεδομένα';
$string['emailadditionalinfo'] = 'Πρόσθετες λεπτομέρειες που επιστρέφονται από τη μηχανή ιών:';
$string['emailauthor'] = 'Ανέβασμα από:';
$string['emailcontenthash'] = 'Σύνοψη κατατεμαχισμού περιεχομένου:';
$string['emailcontenttype'] = 'Τύπος περιεχομένου:';
$string['emaildate'] = 'Ημερομηνία ανεβάσματος:';
$string['emailfilename'] = 'Όνομα αρχείου:';
$string['emailfilesize'] = 'Μέγεθος αρχείου:';
$string['emailgeoinfo'] = 'Γεωτοποθεσία:';
$string['emailinfectedfiledetected'] = 'Εντοπίστηκε μολυσμένο αρχείο';
$string['emailipaddress'] = 'Διεύθυνση IP:';
$string['emailreferer'] = 'Αναφέρων:';
$string['emailreport'] = 'Αναφορά:';
$string['emailscanner'] = 'Σαρωτής:';
$string['emailscannererrordetected'] = 'Παρουσιάστηκε σφάλμα σαρωτή';
$string['emailsubject'] = '{$a} :: Ειδοποίηση αντι-ιικού';
$string['enablequarantine'] = 'Ενεργοποίηση καραντίνας';
$string['enablequarantine_help'] = 'Εάν ενεργοποιηθεί, τα αρχεία που εντοπίζονται ως ιοί θα τοποθετηθούν σε ένα φάκελο καραντίνας ([dataroot]/{$a}) για μελλοντικό έλεγχο. Το ανέβασμα στο Moodle θα αποτύχει. Εάν έχετε οποιοδήποτε λογισμικό ανίχνευσης ιών σε επίπεδο συστήματος αρχείων, ο φάκελος καραντίνας θα πρέπει να αποκλειστεί από τον έλεγχο του αντι-ιικού για να αποφευχθεί ο εντοπισμός των αρχείων σε καραντίνα.';
$string['fileerrordesc'] = 'Παρουσιάστηκε σφάλμα σαρωτή αρχείων.';
$string['fileerrorname'] = 'Σφάλμα σαρωτή αρχείων';
$string['fileinfecteddesc'] = 'Εντοπίστηκε ένα μολυσμένο αρχείο.';
$string['fileinfectedname'] = 'Αρχείο που μολύνθηκε';
$string['notifyemail'] = 'Διεύθυνση ηλε.ταχυδρομείου για επαγρυπνήσεις αντι-ιικού λογισμικού';
$string['notifyemail_help'] = 'Η διεύθυνση ηλε.ταχυδρομείου για ειδοποιήσεις όταν ανιχνεύεται ένας ιός. Εάν αφεθεί κενό, τότε θα σταλούν ειδοποιήσεις σε όλους τους διαχειριστές ιστοτόπων.';
$string['notifylevel'] = 'Επίπεδο ειδοποιήσεων';
$string['notifylevel_help'] = 'Τα διαφορετικά επίπεδα πληροφοριών για τα οποία θέλετε να ειδοποιηθείτε';
$string['notifylevelerror'] = 'Ειδοποίηση για απειλές και ζητήματα σάρωσης';
$string['notifylevelfound'] = 'Ειδοποίηση όταν εντοπιστούν απειλές';
$string['privacy:metadata'] = 'Το Αντι-ιικό σύστημα δεν αποθηκεύει κανένα προσωπικό δεδομένο.';
$string['quarantinedfiles'] = 'Αρχεία σε καραντίνα από αντι-ιικό';
$string['quarantinedisabled'] = 'Η καραντίνα είναι απενεργοποιημένη. Το αρχείο δεν αποθηκεύτηκε.';
$string['quarantinetime'] = 'Μέγιστος χρόνος καραντίνας';
$string['quarantinetime_desc'] = 'Τα αρχεία σε καραντίνα παλαιότερα από την καθορισμένη περίοδο θα καταργηθούν.';
$string['taskcleanup'] = 'Καθαρισμός αρχείων σε καραντίνα.';
$string['threshold'] = 'Κατώφλι για έλεγχο κατάστασης';
$string['threshold_desc'] = 'Ελέγχει το πόσο πίσω θα γίνεται έλεγχος έναντι προηγούμενων αποτελεσμάτων για σφάλματα/προειδοποιήσεις/κλπ, τα οποία μπορείτε να δείτε εδώ ({$a}).';
$string['unknown'] = 'Άγνωστο';
$string['virusfound'] = 'Το {$a->item} έχει σαρωθεί από έναν σαρωτή ιών και έχει βρεθεί ότι έχει μολυνθεί!';
