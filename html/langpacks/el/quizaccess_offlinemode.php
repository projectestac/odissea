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
 * Strings for component 'quizaccess_offlinemode', language 'el', version '4.1'.
 *
 * @package     quizaccess_offlinemode
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answerchanged'] = 'Η απάντηση άλλαξε';
$string['backtothequiz'] = 'Επιστροφή στο κουίζ';
$string['changesmadereallygoaway'] = 'Οι απαντήσεις σας δεν έχουν αποθηκευτεί στον εξυπηρετητή. Είστε βέβαιοι ότι θέλετε να εγκαταλείψετε αυτήν την προσπάθεια;';
$string['dataprocessedsuccessfully'] = 'Τα δεδομένα υποβλήθηκαν σε επεξεργασία με επιτυχία ({$a}).';
$string['description'] = 'Αυτό το κουίζ χρησιμοποιεί κατάσταση λειτουργίας ανεκτικότητας στα σφάλματα. Οι διαχειριστές μπορούν να {a}';
$string['descriptionlink'] = 'ανέβασμα εξαγόμενων απαντήσεων';
$string['finishattemptsafterupload'] = 'Υποβάλετε και ολοκληρώστε κάθε μία προσπάθεια μετά την επεξεργασία του ανεβασμένου αρχείου';
$string['lastsaved'] = 'Τελευταία αποθήκευση: {$a}';
$string['lastsavedtotheserver'] = 'Τελευταία αποθήκευση στον εξυπηρετητή: {$a}';
$string['lastsavedtothiscomputer'] = 'Τελευταία αποθήκευση σε αυτό τον υπολογιστή: {$a}';
$string['loggedinaswronguser'] = 'Έχετε συνδεθεί με έναν λογαριασμό διαφορετικό από αυτόν που έκανε προσπάθεια στο κουίζ. Αυτό δε θα δουλέψει. Πατήστε Συνέχεια για να συνδεθείτε ξανά ως ο σωστός χρήστης.';
$string['logindialogueheader'] = 'Ίσως χρειαστεί να συνδεθείτε ξανά';
$string['loginokagain'] = 'Η σύνδεσή σας είναι τώρα εντάξει.';
$string['offlinemode:uploadresponses'] = 'Ανέβασμα απαντήσεων';
$string['offlinemodeenabled'] = 'Πειραματική κατάσταση λειτουργίας ανεκτικότητας στα σφάλματα';
$string['offlinemodeenabled_desc'] = 'Αν θα πρέπει να είναι ενεργοποιημένη από προεπιλογή η λειτουργία ανεκτικότητας στα σφάλματα για νέα κουίζ και επίσης αν θα πρέπει να υπάρχουν προχωρημένες ρυθμίσεις (πίσω από το «Εμφάνιση περισσότερων ...») στη φόρμα ρυθμίσεων κουίζ.';
$string['offlinemodeenabled_help'] = 'Ο στόχος αυτής της πειραματικής επιλογής είναι να επιτρέπεται στους μαθητές να κάνουν προσπάθεια σε ένα κουίζ ακόμη και αν η σύνδεση στο δίκτυο δεν είναι αξιόπιστη. Για παράδειγμα σε ένα τρένο που διέρχεται από σήραγγες ή απλά με κακό wi-fi. Οι μαθητές μπορούν να μετακινούνται μεταξύ των σελίδων του κουίζ ακόμα και αν ο εξυπηρετητής δεν είναι διαθέσιμος και όλες οι απαντήσεις τους αποθηκεύονται τοπικά και αποστέλλονται στο εξυπηρετητή όποτε είναι δυνατόν.';
$string['pluginname'] = 'Κατάσταση λειτουργίας κουίζ με ανεκτικότητα στα σφάλματα';
$string['privacy:metadata'] = 'Το πρόσθετο κατάστασης λειτουργίας κουίζ με ανεκτικότητα στα σφάλματα δεν αποθηκεύει προσωπικά δεδομένα.';
$string['privatekey'] = 'Ιδιωτικό κλειδί κρυπτογράφησης';
$string['privatekey_desc'] = 'Μπορείτε να χρησιμοποιήσετε την κρυπτογράφηση δημόσιου κλειδιού για να προστατέψετε τις ληφθείσες απαντήσεις. Για να γίνει αυτό, θα πρέπει να παρέχετε ένα ζευγάρι κλειδιών ιδιωτικό/δημόσιο. Μπορείτε να δημιουργήσετε ένα ιδιωτικό κλειδί χρησιμοποιώντας την εντολή <code>openssl genrsa -out rsa_1024_priv.pem 1024</code> στη γραμμή εντολών (αν έχετε εγκαταστήσει το OpenSSL από το https://www.openssl.org/). Στη συνέχεια, επικολλήστε το περιεχόμενο του αρχείου rsa_1024_priv.pem σε αυτό το πλαίσιο.';
$string['processingcomplete'] = 'Η επεξεργασία ολοκληρώθηκε';
$string['processingfile'] = 'Επεξεργασία αρχείου {$a}';
$string['publickey'] = 'Δημόσιο κλειδί κρυπτογράφησης';
$string['publickey_desc'] = 'Αυτό θα πρέπει να αντιστοιχεί στο ιδιωτικό κλειδί. Μπορείτε να το δημιουργήσετε από το ιδιωτικό κλειδί χρησιμοποιώντας την εντολή <code>openssl rsa -pubout -in rsa_1024_priv.pem -out rsa_1024_pub.pem</code> και στη συνέχεια επικολλήστε το περιεχόμενο του αρχείου rsa_1024_pub.pem εδώ.';
$string['responsefiles'] = 'Αρχεία απαντήσεων';
$string['responsefiles_help'] = 'Μπορείτε να ανεβάσετε ένα ή περισσότερα αρχεία απαντήσεων που έχουν ληφθεί χρησιμοποιώντας το σύνδεσμο «Εξαγωγή απαντήσεων έκτακτης ανάγκης» κατά τη διάρκεια μιας προσπάθειας στο κουίζ.';
$string['reviewthisattempt'] = 'Ανασκόπηση της προσπάθειας';
$string['savefailed'] = 'Η αποθήκευση απέτυχε. Μπορείτε να συνεχίσετε να εργάζεστε. Ανά διαστήματα θα πρέπει να {$a}.';
$string['savetheresponses'] = 'αποθηκεύσετε τις απαντήσεις';
$string['savingdots'] = 'Αποθήκευση ...';
$string['savingtryagaindots'] = 'Προσπάθεια αποθήκευσης στον εξυπηρετητή ξανά ...';
$string['submitfailed'] = 'Η υποβολή απέτυχε';
$string['submitfaileddownloadmessage'] = '... ή μπορείτε να {$a} ως αρχείο που μπορείτε να επεξεργαστείτε αργότερα.';
$string['submitfailedmessage'] = 'Δεν ήταν δυνατή η υποβολή των απαντήσεων σας. Μπορείτε είτε να δοκιμάσετε ξανά ...';
$string['submitting'] = 'Υποβολή ...';
$string['uploadfailed'] = 'Το ανέβασμα απέτυχε';
$string['uploadingresponsesfor'] = 'Ανέβασμα απαντήσεων για {$a}';
$string['uploadmoreresponses'] = 'Ανέβασμα περισσότερων απαντήσεων';
$string['uploadresponses'] = 'Ανέβασμα απαντήσεων';
$string['uploadresponsesfor'] = 'Ανέβασμα απαντήσεων για {$a}';
