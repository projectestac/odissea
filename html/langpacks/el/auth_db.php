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
 * Strings for component 'auth_db', language 'el', version '4.5'.
 *
 * @package     auth_db
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dbcannotconnect'] = 'Δεν είναι δυνατή η σύνδεση με εξωτερική βάση δεδομένων.';
$string['auth_dbcannotreadtable'] = 'Δεν είναι δυνατή η ανάγνωση του εξωτερικού πίνακα.';
$string['auth_dbcantconnect'] = 'Δεν ήταν δυνατή η σύνδεση με την καθορισμένη βάση δεδομένων αυθεντικοποίησης...';
$string['auth_dbchangepasswordurl_key'] = 'Διεύθυνση URL αλλαγής κωδικού πρόσβασης';
$string['auth_dbcolumnlist'] = 'Ο εξωτερικός πίνακας περιέχει τις ακόλουθες στήλες:<br />«{$a}»';
$string['auth_dbdebugauthdb'] = 'Αποσφαλμάτωση ADOdb';
$string['auth_dbdebugauthdbhelp'] = 'Αποσφαλμάτωση σύνδεσης ADOdb με την εξωτερική βάση δεδομένων - χρησιμοποιείται όταν ληφθεί κενή σελίδα κατά τη σύνδεσης. Δεν είναι κατάλληλο για ιστοτόπους παραγωγής.';
$string['auth_dbdeleteuser'] = 'Ο χρήστης «{$a->name}» με αναγνωριστικό «{$a->id}» διεγράφη';
$string['auth_dbdeleteusererror'] = 'Σφάλμα κατά τη διαγραφή του χρήστη «{$a}»';
$string['auth_dbdescription'] = 'Αυτή η μέθοδος χρησιμοποιεί έναν εξωτερικό πίνακα βάσης δεδομένων για να ελέγξει εάν το όνομα χρήστη και ο κωδικός πρόσβασης που δίνονται ισχύουν. Εάν ο λογαριασμός είναι καινούργιος, τότε πληροφορίες από άλλα πεδία μπορούν επίσης να αποσταλούν στο Moodle.';
$string['auth_dbextencoding'] = 'Εξωτερική κωδικοποίηση βάσης δεδομένων';
$string['auth_dbextencodinghelp'] = 'Κωδικοποίηση που χρησιμοποιείται στην εξωτερική βάση δεδομένων';
$string['auth_dbextrafields'] = 'Αυτά τα πεδία είναι προαιρετικά. Υπάρχει η επιλογή να προ-συμπληρώσετε μερικά πεδία χρηστών του Moodle χρησιμοποιώντας πληροφορίες από την <b>εξωτερική βάση δεδομένων</b> που θα ορίσετε εδώ. <p>Εάν τα αφήσετε κενά, τότε θα χρησιμοποιηθούν τα προεπιλεγμένα στοιχεία.</p><p>Σε κάθε περίπτωση, ο χρήστης θα μπορεί να παρέμβει σε όλα αυτά τα πεδία μετά την σύνδεση.</p>';
$string['auth_dbfieldpass'] = 'Όνομα πεδίου που περιέχει τους κωδικούς πρόσβασης';
$string['auth_dbfieldpass_key'] = 'Πεδίο κωδικού πρόσβασης';
$string['auth_dbfielduser'] = 'Όνομα πεδίου που περιέχει τα ονόματα χρηστών. Το πεδίο αυτό πρέπει να είναι τύπου δεδομένων varchar.';
$string['auth_dbfielduser_key'] = 'Πεδίο ονόματος χρήστη';
$string['auth_dbhost'] = 'Ο υπολογιστής που φιλοξενεί τον εξυπηρετητή βάσης δεδομένων. Χρησιμοποιήστε μια καταχώρηση DSN συστήματος αν χρησιμοποιείτε ODBC. Χρησιμοποιήστε μια καταχώρηση DSN PDO εάν χρησιμοποιείτε PDO. (ODBC: Open Database Connectivity) (DSN: Data Source Name) (PDO: PHP Data Objects)';
$string['auth_dbhost_key'] = 'Ο Η/Υ που φιλοξενεί τον εξυπηρετητή της βάσης δεδομένων';
$string['auth_dbinsertuser'] = 'Ο χρήστης «{$a->name}» με αναγνωριστικό «{$a->id}» εισήχθη';
$string['auth_dbinsertuserduplicate'] = 'Σφάλμα κατά την εισαγωγή χρήστη με όνομα «{$a->username}» - χρήστης με αυτό το όνομα χρήστη δημιουργήθηκε ήδη μέσω του πρόσθετου «{$a->auth}».';
$string['auth_dbinsertusererror'] = 'Σφάλμα κατά την εισαγωγή του χρήστη «{$a}»';
$string['auth_dbname'] = 'Όνομα της ίδιας της βάσης δεδομένων. Αφήστε κενό εάν χρησιμοποιείται ένα ODBC DSN. Αφήστε κενό (επίσης) εάν το DSN του PDO σου περιέχει ήδη το όνομα της βάσης δεδομένων. (PDO: PHP\'s Data Objects, Αντικείμενα δεδομένων της PHP) (DSN: Data Source Name, όνομα προέλευσης δεδομένων)';
$string['auth_dbname_key'] = 'Όνομα βάσης δεδομένων';
$string['auth_dbnoexttable'] = 'Ο εξωτερικός πίνακας δεν έχει καθοριστεί.';
$string['auth_dbnouserfield'] = 'Το πεδίο εξωτερικού χρήστη δεν έχει καθοριστεί.';
$string['auth_dbpass'] = 'Κωδικός πρόσβασης που αντιστοιχεί στο παραπάνω όνομα χρήστη';
$string['auth_dbpass_key'] = 'Κωδικός πρόσβασης';
$string['auth_dbpasstype'] = '<p>Ορίστε τον μορφότυπο που χρησιμοποιείται για το πεδίο κωδικού πρόσβασης.</p>
<p>Χρησιμοποιήστε «εσωτερικά» αν θέλετε η εξωτερική βάση δεδομένων να χειρίζεται ονόματα χρηστών και διευθύνσεις ηλε.ταχυδρομείου ενώ το Moodle να χειρίζεται τους κωδικούς πρόσβασης.
Αν χρησιμοποιήσετε το «εσωτερικά», <i>πρέπει</i> να παρέχετε μια διεύθυνση ηλε.ταχυδρομείου στο αντίστοιχο πεδίο της εξωτερικής βάσης δεδομένων και πρέπει να ενεργοποιήσετε την χρονοπρογραμματισμένη εργασία \\auth_db\\task\\sync_users. Το Moodle θα στείλει ένα μήνυμα ηλε.ταχυδρομείου στους νέους χρήστες με έναν προσωρινό κωδικό πρόσβασης.</p>';
$string['auth_dbpasstype_key'] = 'Μορφότυπος κωδικού πρόσβασης';
$string['auth_dbreviveduser'] = 'Ο χρήστης «{$a->name}» με αναγνωριστικό «{$a->id}» αναβιώθηκε';
$string['auth_dbrevivedusererror'] = 'Σφάλμα κατά την αναβίωση του χρήστη «{$a}»';
$string['auth_dbsaltedcrypt'] = 'Μονόδρομος κατακερματισμός συμβολοσειράς μέσω της εντολής crypt';
$string['auth_dbsetupsql'] = 'Εντολή εγκατάστασης SQL';
$string['auth_dbsetupsqlhelp'] = 'Εντολή SQL για ειδική εγκατάσταση βάσης δεδομένων. Συχνά χρησιμοποιείται για να ρυθμίσει την κωδικοποίηση επικοινωνίας - παράδειγμα για την MySQL και την PostgreSQL: <em>SET NAMES «utf8»</em>';
$string['auth_dbsuspenduser'] = 'Ο χρήστης με όνομα «{$a->name}» και αναγνωριστικό «{$a->id}» μπήκε σε αναστολή';
$string['auth_dbsuspendusererror'] = 'Σφάλμα κατά την αναστολή χρήστη «{$a}»';
$string['auth_dbsybasequoting'] = 'Χρήση sybase εισαγωγικών';
$string['auth_dbsybasequotinghelp'] = 'Η μορφή sybase μονών εισαγωγικών απαιτείται για την Oracle, την MS SQL και ορισμένες άλλες βάσεις δεδομένων. Μην τα χρησιμοποιείτε για την MySQL!';
$string['auth_dbsyncuserstask'] = 'Εργασία συγχρονισμού χρηστών';
$string['auth_dbtable'] = 'Όνομα του πίνακα στη βάση δεδομένων';
$string['auth_dbtable_key'] = 'Πίνακας';
$string['auth_dbtableempty'] = 'Ο εξωτερικός πίνακας είναι κενός.';
$string['auth_dbtype'] = 'Ο τύπος της βάσης δεδομένων (δείτε το <a href="http://adodb.org/dokuwiki/doku.php" target="_blank">ADOdb - Database Abstraction Layer (αφηρημένο επίπεδο βάσης δεδομένων) για PHP</a> για λεπτομέρειες).';
$string['auth_dbtype_key'] = 'Βάση δεδομένων';
$string['auth_dbupdateerror'] = 'Σφάλμα ενημέρωσης εξωτερικής βάσης δεδομένων.';
$string['auth_dbupdateusers'] = 'Ενημέρωση χρηστών';
$string['auth_dbupdateusers_description'] = 'Εκτός από την εισαγωγή νέων χρηστών, ενημερώστε τους υπάρχοντες χρήστες.';
$string['auth_dbupdatinguser'] = 'Ενημέρωση του χρήστη με όνομα «{$a->name}» και αναγνωριστικό «{$a->id}»';
$string['auth_dbuser'] = 'Όνομα χρήστη με δικαίωμα ανάγνωσης της βάσης δεδομένων.';
$string['auth_dbuser_key'] = 'Χρήστης βάσης δεδομένων';
$string['auth_dbuserstoadd'] = 'Καταχωρήσεις χρηστών προς εισαγωγή: {$a}';
$string['auth_dbuserstoremove'] = 'Καταχωρήσεις χρήστη προς διαγραφή: {$a}';
$string['pluginname'] = 'Εξωτερική βάση δεδομένων';
$string['privacy:metadata'] = 'Το πρόσθετο αυθεντικοποίησης μέσω εξωτερικής βάσης δεδομένων δεν αποθηκεύει κανένα προσωπικό δεδομένο.';
