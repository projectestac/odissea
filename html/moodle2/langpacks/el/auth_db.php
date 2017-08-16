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
 * Strings for component 'auth_db', language 'el', branch 'MOODLE_32_STABLE'
 *
 * @package   auth_db
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dbcantconnect'] = 'Αδυναμία σύνδεσης στην καθορισμένη βάση δεδομένων αυθεντικοποίησης...';
$string['auth_dbchangepasswordurl_key'] = 'Password-change URL';
$string['auth_dbdebugauthdb'] = 'Debug ADOdb';
$string['auth_dbdebugauthdbhelp'] = 'Debug ADOdb connection to external database - use when getting empty page during login. Not suitable for production sites.';
$string['auth_dbdeleteuser'] = 'Deleted user {$a}[0] id {$a}[1]';
$string['auth_dbdeleteusererror'] = 'Error deleting user {$a}';
$string['auth_dbdescription'] = 'Αυτή η μέθοδος χρησιμοποιεί έναν εξωτερικό πίνακα βάσης δεδομένων για να ελέγξει αν το όνομα χρήστη και ο κωδικός πρόσβασης ισχύουν.  Αν ο λογαριασμός είναι καινούργιος, τότε πληροφορίες από άλλα πεδία μπορούν επίσης να αντιγραφούν στο Moodle.';
$string['auth_dbextencoding'] = 'External db encoding';
$string['auth_dbextencodinghelp'] = 'Κωδικοποίηση που χρησιμοποιείται στην εξωτερική βάση δεδομένων';
$string['auth_dbextrafields'] = 'Αυτά τα πεδία είναι προαιρετικά. Υπάρχει η επιλογή να προ-συμπληρώσετε μερικά πεδία χρηστών στο Moodle με πληροφορίες από την <b>εξωτερική βάση δεδομένων</b> που ορίζονται εδώ.<p>Αν τα αφήσετε κενά, τότε θα χρησιμοποιηθούν τα προκαθορισμένα στοιχεία.</p><p>Σε κάθε περίπτωση, ο χρήστης θα μπορεί να επεξεργαστεί όλα αυτά τα πεδία μετά την σύνδεση.';
$string['auth_dbfieldpass'] = 'Όνομα πεδίου που περιέχει τους κωδικούς πρόσβασης';
$string['auth_dbfieldpass_key'] = 'Πεδίο κωδικού πρόσβασης';
$string['auth_dbfielduser'] = 'Όνομα πεδίου που περιέχει τα ονόματα χρηστών';
$string['auth_dbfielduser_key'] = 'Username field';
$string['auth_dbhost'] = 'Ο υπολογιστής που φιλοξενεί τον εξυπηρετητή βάσης δεδομένων';
$string['auth_dbhost_key'] = 'Host';
$string['auth_dbinsertuser'] = 'Inserted user {$a}[0] id {$a}[1]';
$string['auth_dbinsertusererror'] = 'Error inserting user {$a}';
$string['auth_dbname'] = 'Όνομα της βάσης δεδομένων';
$string['auth_dbname_key'] = 'DB Name';
$string['auth_dbpass'] = 'Κωδικός πρόσβασης που αντιστοιχεί στο παραπάνω όνομα χρήστη';
$string['auth_dbpass_key'] = 'Κωδικός πρόσβασης';
$string['auth_dbpasstype'] = '<p>Καθορίστε τη μορφή που χρησιμοποιείται από το πεδίο του κωδικού πρόσβασης. Η κρυπτογράφηση MD5 είναι χρήσιμη για σύνδεση με άλλες κοινές διαδικτυακές εφαρμογές όπως το  PostNuke.</p><p>Χρησιμοποιήστε το \'internal\' αν θέλετε η εξωτερική βάση δεδομένων να διαχειρίζεται ονόματα χρηστών και διευθύνσεις ηλεκτρονικού ταχυδρομείου, αλλά το Moodle θα διαχειρίζεται τους κωδικούς πρόσβασης. Αν  χρησιμοποιήσετε το \'internal\', <i>πρέπει</i> να παρέχετε ένα συμπληρωμένο πεδίο διεύθυνσης ηλεκτρονικού ταχυδρομείου στην εξωτερική βάση δεδομένων και πρέπει να εκτελείτε το  admin/cron.php συχνά. Το Moodle στέλνει ένα μήνυμα ηλεκτρονικού ταχυδρομείου που περιέχει ένα προσωρινό κωδικό πρόσβασης στους νέους χρήστες.</p>';
$string['auth_dbpasstype_key'] = 'Μορφή κωδικού πρόσβασης';
$string['auth_dbreviveduser'] = 'Revived user {$a}[0] id {$a}[1]';
$string['auth_dbrevivedusererror'] = 'Error reviving user {$a}';
$string['auth_dbsetupsql'] = 'SQL setup command';
$string['auth_dbsetupsqlhelp'] = 'SQL command for special database setup, often used to setup communication encoding - example for MySQL and PostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = 'Χρήστης σε αναστολή {$a->name} αναγνωριστικό {$a->id}';
$string['auth_dbsuspendusererror'] = 'Error suspending user {$a}';
$string['auth_dbsybasequoting'] = 'Use sybase quotes';
$string['auth_dbsybasequotinghelp'] = 'Sybase style single quote escaping - needed for Oracle, MS SQL and some other databases. Do not use for MySQL!';
$string['auth_dbtable'] = 'Όνομα του πίνακα στη βάση δεδομένων.';
$string['auth_dbtable_key'] = 'Table';
$string['auth_dbtype'] = 'Ο τύπος της βάσης δεδομένων (Δείτε την <A HREF=../lib/adodb/readme.htm#drivers>τεκμηρίωση ADOdb</A> για λεπτομέρειες)';
$string['auth_dbtype_key'] = 'Database';
$string['auth_dbupdatinguser'] = 'Updating user {$a}[0] id {$a}[1]';
$string['auth_dbuser'] = 'Όνομα χρήστη με δικαίωμα ανάγνωσης της βάσης δεδομένων.';
$string['auth_dbuser_key'] = 'DB User';
$string['auth_dbusernotexist'] = 'Cannot update non-existent user: {$a}';
$string['auth_dbuserstoadd'] = 'User entries to add: {$a}';
$string['auth_dbuserstoremove'] = 'User entries to remove: {$a}';
$string['pluginname'] = 'Χρήση μιας εξωτερικής βάσης δεδομένων.';
