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
 * Strings for component 'enrol_database', language 'el', branch 'MOODLE_38_STABLE'
 *
 * @package   enrol_database
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['database:config'] = 'Ρύθμιση στιγμιότυπων εγγραφής βάσης δεδομένων';
$string['database:unenrol'] = 'Ακύρωση εγγραφής χρηστών σε αναστολή';
$string['dbencoding'] = 'Κωδικοποίηση βάσης δεδομένων';
$string['dbhost'] = 'Όνομα ή IP του Η/Υ της βάσης δεδομένων';
$string['dbhost_desc'] = 'Πληκτρολογήστε την IP διεύθυνση εξυπηρετητή βάσης δεδομένων ή όνομα Η/Υ στο δίκτυο. Χρησιμοποιήστε ένα όνομα προέλευσης δεδομένων (DSN: Data Source Name)
 εάν χρησιμοποιείτε ODBC (Open Database Connectivity). Χρησιμοποιήστε ένα DSN αντικειμένου δεδομένων της PHP εάν χρησιμοποιείτε PDO (PHP\'s Data Object).';
$string['dbname'] = 'Όνομα βάσης δεδομένων';
$string['dbname_desc'] = 'Αφήστε κενό εάν χρησιμοποιείτε όνομα DSN στον Η/Υ της βάσης δεδομένων.';
$string['dbpass'] = 'Κωδικός πρόσβασης βάσης δεδομένων';
$string['dbsetupsql'] = 'Εντολή εγκατάστασης βάσης δεδομένων';
$string['dbsetupsql_desc'] = 'Εντολή SQL για ειδική εγκατάσταση βάσης δεδομένων, συχνά χρησιμοποιείται για να ρυθμίσει την κωδικοποίηση επικοινωνίας -παράδειγμα για την MySQL και την PostgreSQL: <em>SET NAMES «utf8»</em>';
$string['dbsybasequoting'] = 'Χρήση sybase εισαγωγικών';
$string['dbsybasequoting_desc'] = 'Η μορφή sybase μονών εισαγωγικών απαιτείται για την Oracle, την MS SQL και ορισμένες άλλες βάσεις δεδομένων. Μην τα χρησιμοποιείται για την MySQL!';
$string['dbtype'] = 'Οδηγός βάσης δεδομένων';
$string['dbtype_desc'] = 'Το όνομα του προγράμματος οδήγησης της βάσης δεδομένων ADOdb, ο τύπος της εξωτερικής μηχανής βάσης δεδομένων.';
$string['dbuser'] = 'Χρήστης βάσης δεδομένων';
$string['debugdb'] = 'Αποσφαλμάτωση ADOdb';
$string['debugdb_desc'] = 'Σύνδεση αποσφαλμάτωσης ADOdb με εξωτερική βάση δεδομένων - χρησιμοποιείται όταν πάρει κενή σελίδα κατά τη διάρκεια της σύνδεσης. Δεν είναι κατάλληλο για ιστοτόπους παραγωγής!';
$string['defaultcategory'] = 'Προεπιλεγμένη κατηγορία νέου μαθήματος';
$string['defaultcategory_desc'] = 'Η προεπιλεγμένη κατηγορία για τα αυτοδημιούργητα μαθήματα. Χρησιμοποιείται όταν δεν έχει ορισθεί νέο id κατηγορίας ή όταν δεν βρίσκεται.';
$string['defaultrole'] = 'Προεπιλεγμένος ρόλος';
$string['defaultrole_desc'] = 'Ο ρόλος που θα ανατεθεί από προεπιλογή αν κανένας άλλος ρόλος δεν καθορίζεται στον εξωτερικό πίνακα.';
$string['ignorehiddencourses'] = 'Αγνοήστε τα κρυφά μαθήματα';
$string['ignorehiddencourses_desc'] = 'Αν ενεργοποιηθεί οι χρήστες δεν θα εγγράφονται στα μαθήματα που έχουν ορισθεί ως μη διαθέσιμα για τους μαθητές.';
$string['localcategoryfield'] = 'Τοπικό πεδίο κατηγορίας';
$string['localcoursefield'] = 'Τοπικό πεδίο μαθήματος';
$string['localrolefield'] = 'Τοπικό πεδίο ρόλου';
$string['localuserfield'] = 'Τοπικό πεδίο χρήστη';
$string['newcoursecategory'] = 'Πεδίο νέας κατηγορίας μαθημάτων';
$string['newcoursefullname'] = 'Πεδίο πλήρους ονόματος νέου μαθήματος';
$string['newcourseidnumber'] = 'Πεδίο αναγνωριστικού αριθμού νέου μαθήματος';
$string['newcourseshortname'] = 'Πεδίο σύντομου ονόματος νέου μαθήματος';
$string['newcoursetable'] = 'Πίνακας απομακρυσμένων νέων μαθημάτων';
$string['newcoursetable_desc'] = 'Καθορίστε το όνομα του πίνακα που περιέχει την λίστα των μαθημάτων που πρέπει να δημιουργηθούν αυτόματα. Κενό σημαίνει ότι δεν έχουν δημιουργηθεί μαθήματα.';
$string['pluginname'] = 'Εξωτερική βάση δεδομένων';
$string['pluginname_desc'] = 'Μπορείτε να χρησιμοποιήσετε μια εξωτερική βάση δεδομένων (σχεδόν κάθε είδους) για να ελέγχετε τις εγγραφές σας. Θεωρείται ότι η εξωτερική σας βάση δεδομένων περιλαμβάνει τουλάχιστον ένα πεδίο που περιέχει ένα ID μαθήματος, και ένα πεδίο που περιέχει ένα ID χρήστη. Αυτά συγκρίνονται έναντι πεδίων που επιλέγετε στο τοπικό μάθημα και στους πίνακες χρήστη.';
$string['privacy:metadata'] = 'Το πρόσθετο «Εγγραφή μέσω εξωτερικής βάσης δεδομένων» δεν αποθηκεύει κανένα προσωπικό δεδομένο.';
$string['remotecoursefield'] = 'Απομακρυσμένο πεδίο μαθήματος';
$string['remotecoursefield_desc'] = 'Το όνομα του πεδίου στον απομακρυσμένο πίνακα που χρησιμοποιείται για αντιστοίχιση με καταχωρήσεις στον πίνακα μαθημάτων.';
$string['remoteenroltable'] = 'Πίνακας απομακρυσμένων εγγραφών χρήστη';
$string['remoteenroltable_desc'] = 'Καθορίστε το όνομα του πίνακα που περιέχει την λίστα των εγγραφών χρηστών. Κενό σημαίνει μη συγχρονισμένη εγγραφή χρήστη.';
$string['remoteotheruserfield'] = 'Απομακρυσμένο πεδίο άλλου χρήστη';
$string['remoteotheruserfield_desc'] = 'Το όνομα του πεδίου στον απομακρυσμένο πίνακα που χρησιμοποιούμε για να επισημάνουμε τις αναθέσεις ρόλου «Άλλος Χρήστης».';
$string['remoterolefield'] = 'Απομακρυσμένο πεδίο ρόλου';
$string['remoterolefield_desc'] = 'Το όνομα του πεδίου στον απομακρυσμένο πίνακα που χρησιμοποιείται για αντιστοίχιση με καταχωρήσεις στον πίνακα ρόλων.';
$string['remoteuserfield'] = 'Απομακρυσμένο πεδίο χρήστη';
$string['remoteuserfield_desc'] = 'Το όνομα του πεδίου στον απομακρυσμένο πίνακα που χρησιμοποιείται για αντιστοίχιση με καταχωρήσεις στον πίνακα χρηστών.';
$string['settingsheaderdb'] = 'Σύνδεση εξωτερικής βάσης δεδομένων';
$string['settingsheaderlocal'] = 'Τοπική αντιστοίχιση πεδίων';
$string['settingsheadernewcourses'] = 'Δημιουργία νέων μαθημάτων';
$string['settingsheaderremote'] = 'Απομακρυσμένος συγχρονισμός εγγραφής';
$string['syncenrolmentstask'] = 'Συγχρονισμός εργασιών εξωτερικών εγγραφών βάσης δεδομένων';
$string['templatecourse'] = 'Υπόδειγμα νέου μαθήματος';
$string['templatecourse_desc'] = 'Προαιρετικά: τα αυτόματα δημιουργούμενα μαθήματα μπορούν να αντιγράψουν τις ρυθμίσεις τους από ένα υπόδειγμα μαθήματος. Πληκτρολογήστε εδώ το σύντομο όνομα του υποδείγματος μαθήματος.';
