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
 * Strings for component 'cachestore_mongodb', language 'el', branch 'MOODLE_36_STABLE'
 *
 * @package   cachestore_mongodb
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['database'] = 'Βάση δεδομένων';
$string['database_help'] = 'Το όνομα της βάσης δεδομένων προς χρήση.';
$string['extendedmode'] = 'Χρήση εκτεταμένων πλήκτρων';
$string['extendedmode_help'] = 'Αν ενεργοποιηθεί, πλήρη σετ κλειδιών θα χρησιμοποιηθούν κατά την εργασία με το πρόσθετο. Αυτό δεν χρησιμοποιείται εσωτερικά ακόμη, αλλά θα σας επέτρεπε να αναζητήσετε και να διερευνήσετε εύκολα το πρόσθετο MongoDB χειροκίνητα αν το επιλέξετε. Ενεργοποιώντας το αυτό θα προσθέσετε έναν μικρό έξτρα φόρτο, άρα θα πρέπει να γίνει μόνο εάν το χρειάζεστε.';
$string['password'] = 'Κωδικός πρόσβασης';
$string['password_help'] = 'Ο κωδικός πρόσβασης του χρήστη που χρησιμοποιείται για τη σύνδεση.';
$string['pleaseupgrademongo'] = 'Χρησιμοποιείτε μια παλιά έκδοση της επέκτασης PHP Mongo (< 1.3). Η υποστήριξη για παλιές εκδόσεις της επέκτασης Mongo θα διακοπεί στο μέλλον. Παρακαλώ εξετάστε την αναβάθμιση.';
$string['pluginname'] = 'MongoDB';
$string['privacy:metadata:mongodb'] = 'Το πρόσθετο αποθήκευσης κρυφής μνήμης (cachestore) MongoDB αποθηκεύει δεδομένα για λίγο ως μέρος της λειτουργικότητάς του ως κρυφής μνήμης. Αυτά τα δεδομένα αποθηκεύονται σε έναν εξυπηρετητή MongoDB όπου τα δεδομένα διαγράφονται τακτικά.';
$string['privacy:metadata:mongodb:data'] = 'Τα διάφορα δεδομένα που αποθηκεύονται στην κρυφή μνήμη';
$string['replicaset'] = 'Σετ πιστού αντιγράφου';
$string['replicaset_help'] = 'Το όνομα του σετ πιστού αντιγράφου στο οποίο θέλετε να γίνει η σύνδεση. Αν αυτό δοθεί, το κύριο (σετ) θα καθοριστεί χρησιμοποιώντας την εντολή της βάσης δεδομένων ismaster στους σπόρους (πλήρη αντίγραφα), οπότε το πρόγραμμα οδήγησης μπορεί να καταλήξει στη σύνδεση με έναν εξυπηρετητή που δεν ήταν καν στη λίστα.';
$string['server'] = 'Εξυπηρετητής';
$string['server_help'] = 'Αυτό είναι το μήνυμα σύνδεσης για τον εξυπηρετητή που θέλετε να χρησιμοποιήσετε. Περισσότεροι εξυπηρετητές μπορούν να οριστούν χρησιμοποιώντας μια λίστα με κόμμα ως διαχωριστικό.';
$string['testserver'] = 'Εξυπηρετητής δοκιμών';
$string['testserver_desc'] = 'Η συμβολοσειρά σύνδεσης για έναν εξυπηρετητή που θα χρησιμοποιηθεί για έλεγχο. Εάν έχει καθοριστεί ένας εξυπηρετητής δοκιμής, τότε η απόδοση του MongoDB μπορεί να δοκιμαστεί χρησιμοποιώντας τη σελίδα απόδοσης της κρυφής μνήμης στο μπλοκ διαχείρισης.
Για παράδειγμα: mongodb: //127.0.0.1: 27017';
$string['username'] = 'Όνομα χρήστη';
$string['username_help'] = 'Το όνομα χρήστη προς χρήση κατά τη σύνδεση.';
$string['usesafe'] = 'Χρήση ασφαλούς';
$string['usesafe_help'] = 'Αν ενεργοποιηθεί, η επιλογή «Χρήση ασφαλούς» θα χρησιμοποιηθεί κατά τη διάρκεια της εισαγωγής, της λήψης και της κατάργησης λειτουργιών. Αν έχετε ορίσει ένα σετ πιστού αντιγράφου, αυτό θα επιβληθεί ούτως ή άλλως.';
$string['usesafevalue'] = 'Χρήση ασφαλούς τιμής';
$string['usesafevalue_help'] = 'Μπορείτε να επιλέξετε να δώσετε μια συγκεκριμένη τιμή για ασφαλή χρήση. Αυτό θα καθορίσει τον αριθμό των εξυπηρετητών στους οποίους πρέπει να ολοκληρωθούν οι εργασίες πριν να θεωρηθεί ότι έχουν ολοκληρωθεί.';
